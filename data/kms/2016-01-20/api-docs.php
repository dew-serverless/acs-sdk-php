<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'Kms',
        'version' => '2016-01-20',
    ],
    'directories' => [
        [
            'id' => 65097,
            'title' => '服务管理',
            'type' => 'directory',
            'children' => [
                'DescribeRegions',
                'DescribeAccountKmsStatus',
                'OpenKmsService',
            ],
        ],
        [
            'id' => 185793,
            'title' => '实例管理',
            'type' => 'directory',
            'children' => [
                'ListKmsInstances',
                'ConnectKmsInstance',
                'GetKmsInstance',
                'UpdateKmsInstanceBindVpc',
            ],
        ],
        [
            'id' => 65101,
            'title' => '密钥管理',
            'type' => 'directory',
            'children' => [
                'CreateKey',
                'ListKeys',
                'DescribeKey',
                'UpdateKeyDescription',
                'EnableKey',
                'DisableKey',
                'GetPublicKey',
                'CreateAlias',
                'ListAliases',
                'ListAliasesByKeyId',
                'DeleteAlias',
                'UpdateAlias',
                'GetParametersForImport',
                'ImportKeyMaterial',
                'DeleteKeyMaterial',
                'ScheduleKeyDeletion',
                'CancelKeyDeletion',
                'SetDeletionProtection',
                'UpdateRotationPolicy',
                'DescribeKeyVersion',
                'CreateKeyVersion',
                'ListKeyVersions',
            ],
        ],
        [
            'id' => 181118,
            'title' => '密码运算',
            'type' => 'directory',
            'children' => [
                'GenerateDataKey',
                'GenerateAndExportDataKey',
                'Encrypt',
                'Decrypt',
                'ReEncrypt',
                'ExportDataKey',
                'GenerateDataKeyWithoutPlaintext',
                'AsymmetricSign',
                'AsymmetricVerify',
                'AsymmetricEncrypt',
                'AsymmetricDecrypt',
            ],
        ],
        [
            'id' => 65139,
            'title' => '凭据管理',
            'type' => 'directory',
            'children' => [
                'CreateSecret',
                'DeleteSecret',
                'UpdateSecret',
                'UpdateSecretVersionStage',
                'UpdateSecretRotationPolicy',
                'ListSecrets',
                'DescribeSecret',
                'GetSecretValue',
                'ListSecretVersionIds',
                'GetRandomPassword',
                'PutSecretValue',
                'RestoreSecret',
                'RotateSecret',
            ],
        ],
        [
            'id' => 65153,
            'title' => '证书管理和运算',
            'type' => 'directory',
            'children' => [
                'CreateCertificate',
                'DeleteCertificate',
                'UpdateCertificateStatus',
                'DescribeCertificate',
                'GetCertificate',
                'UploadCertificate',
                'CertificatePrivateKeySign',
                'CertificatePublicKeyEncrypt',
                'CertificatePrivateKeyDecrypt',
                'CertificatePublicKeyVerify',
            ],
        ],
        [
            'id' => 65175,
            'title' => '标签管理',
            'type' => 'directory',
            'children' => [
                'UntagResources',
                'ListTagResources',
                'TagResources',
                'ListResourceTags',
                'TagResource',
                'UntagResource',
            ],
        ],
        [
            'id' => 185801,
            'title' => '应用管理',
            'type' => 'directory',
            'children' => [
                'CreateNetworkRule',
                'ListNetworkRules',
                'DescribeNetworkRule',
                'UpdateNetworkRule',
                'DeleteNetworkRule',
                'CreatePolicy',
                'ListPolicies',
                'DescribePolicy',
                'UpdatePolicy',
                'DeletePolicy',
                'CreateApplicationAccessPoint',
                'ListApplicationAccessPoints',
                'DescribeApplicationAccessPoint',
                'UpdateApplicationAccessPoint',
                'DeleteApplicationAccessPoint',
                'CreateClientKey',
                'ListClientKeys',
                'GetClientKey',
                'DeleteClientKey',
            ],
        ],
        [
            'id' => 0,
            'title' => '其它',
            'type' => 'directory',
            'children' => [
                'GetKeyPolicy',
                'GetSecretPolicy',
                'SetKeyPolicy',
                'SetSecretPolicy',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'DescribeRegions' => [
            'methods' => [
                'post',
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
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '815240e2-aa37-4c26-9cca-05d4df3e8fe6',
                            ],
                            'Regions' => [
                                'type' => 'object',
                                'properties' => [
                                    'Region' => [
                                        'description' => '地域。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'RegionId' => [
                                                    'description' => '地域ID。',
                                                    'type' => 'string',
                                                    'example' => 'cn-hangzhou',
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
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter is not valid.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidAccessKeyId.NotFound',
                        'errorMessage' => 'The Access Key ID provided does not exist in our records.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"815240e2-aa37-4c26-9cca-05d4df3e8fe6\\",\\n  \\"Regions\\": {\\n    \\"Region\\": [\\n      {\\n        \\"RegionId\\": \\"cn-hangzhou\\"\\n      }\\n    ]\\n  }\\n}","errorExample":"//xml response\\n<KMS>\\n\\t<Regions>\\n\\t\\t<Region>\\n\\t\\t\\t<RegionId>cn-beijing</RegionId>\\n\\t\\t</Region>\\n\\t\\t<Region>\\n\\t\\t\\t<RegionId>cn-hangzhou</RegionId>\\n\\t\\t</Region>\\n\\t</Regions>\\n\\t<RequestId>815240e2-aa37-4c26-9cca-05d4df3e8fe6</RequestId>\\n</KMS>\\n"},{"type":"xml","example":"<KMS>\\r\\n\\t<Regions>\\r\\n\\t\\t<Region>\\r\\n\\t\\t\\t<RegionId>cn-beijing</RegionId>\\r\\n\\t\\t</Region>\\r\\n\\t\\t<Region>\\r\\n\\t\\t\\t<RegionId>cn-hangzhou</RegionId>\\r\\n\\t\\t</Region>\\r\\n\\t</Regions>\\r\\n\\t<RequestId>815240e2-aa37-4c26-9cca-05d4df3e8fe6</RequestId>\\r\\n</KMS>","errorExample":"//json response\\n{\\n        \\"Regions\\": {\\n                \\"Region\\": [\\n                        {\\n                                \\"RegionId\\": \\"cn-beijing\\"\\n                        },\\n                        {\\n                                \\"RegionId\\": \\"cn-hangzhou\\"\\n                        }\\n                ]\\n        },\\n        \\"RequestId\\": \\"815240e2-aa37-4c26-9cca-05d4df3e8fe6\\"\\n}\\n"}]',
            'title' => '查询当前账号的可用地域列表',
            'summary' => '调用DescribeRegions接口查询当前账号的可用地域列表。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeAccountKmsStatus' => [
            'methods' => [
                'post',
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
                            'AccountStatus' => [
                                'description' => '当前阿里云账号的密钥管理服务状态，取值：'."\n"
                                    ."\n"
                                    .' - Enabled：已开通，可正常使用。'."\n"
                                    .' - NotEnabled：未开通。'."\n"
                                    .' - InDebt：已欠费，即将停止服务。  '."\n"
                                    ."\n"
                                    .'   > 当您的阿里云账号欠费后，请及时续费，以免对您的业务造成影响。'."\n"
                                    ."\n"
                                    .' - Suspended：已停止服务。',
                                'type' => 'string',
                                'example' => 'Enabled',
                            ],
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '3ac84333-d64d-4784-a8bc-997834a7ac6c',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter is not valid.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden.NoPermission',
                        'errorMessage' => 'This operation is forbidden by permission system.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'InvalidAccessKeyId.NotFound',
                        'errorMessage' => 'The Access Key ID provided does not exist in our records.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"AccountStatus\\": \\"Enabled\\",\\n  \\"RequestId\\": \\"3ac84333-d64d-4784-a8bc-997834a7ac6c\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeAccountKmsStatusResponse>\\n    <AccountStatus>Enabled</AccountStatus>\\n    <RequestId>3ac84333-d64d-4784-a8bc-997834a7ac6c</RequestId>\\n</DescribeAccountKmsStatusResponse>","errorExample":""}]',
            'title' => '查询当前阿里云账号的密钥管理服务状态',
            'summary' => '调用DescribeAccountKmsStatus接口查询当前阿里云账号的密钥管理服务状态。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'OpenKmsService' => [
            'methods' => [
                'post',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '3455b9b4-95c1-419d-b310-db6a53b09a39',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'CreateLXOrderFailed',
                        'errorMessage' => 'Create order failed.',
                    ],
                    [
                        'errorCode' => 'Forbidden.NoRealNameAuthentication',
                        'errorMessage' => 'Real name authentication is needed.',
                    ],
                    [
                        'errorCode' => 'Forbidden.Opened',
                        'errorMessage' => 'Your kms service has been opened.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"3455b9b4-95c1-419d-b310-db6a53b09a39\\"\\n}","errorExample":""},{"type":"xml","example":"<KMS>\\n    <RequestId>3455b9b4-95c1-419d-b310-db6a53b09a39</RequestId>\\n</KMS>","errorExample":""}]',
            'title' => '为当前阿里云账号开通密钥管理服务',
            'summary' => '调用OpenKmsService接口为当前阿里云账号开通密钥管理服务。',
            'description' => '调用该接口前，请关注：'."\n"
                ."\n"
                .'- 密钥管理服务需要收费，计费详情请参见[计费说明](~~52608~~)。'."\n"
                ."\n"
                .'- 一个阿里云账号只能开通一次。'."\n"
                ."\n"
                .'- 请确保阿里云账号已通过实名认证。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListKmsInstances' => [
            'summary' => '查询KMS实例列表。',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时，设置当前页面的页码。默认值为1。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时，设置每页包含网络控制规则的数量。取值范围：1~100，默认值为20。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
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
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => 'd3eca5c8-a856-4347-8eb6-e1898c3fda2e',
                            ],
                            'KmsInstances' => [
                                'type' => 'object',
                                'properties' => [
                                    'KmsInstance' => [
                                        'description' => 'KMS实例列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => 'KMS实例列表。',
                                            'type' => 'object',
                                            'properties' => [
                                                'KmsInstanceArn' => [
                                                    'description' => 'KMS实例的ARN。',
                                                    'type' => 'string',
                                                    'example' => 'acs:kms:pre-hangzhou:120708975881****:keystore/kst-phzz64c9f84eo32dbs****',
                                                ],
                                                'KmsInstanceId' => [
                                                    'description' => 'KMS实例的ID。',
                                                    'type' => 'string',
                                                    'example' => 'kst-phzz64c9f84eo32dbs****',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'TotalCount' => [
                                'description' => 'KMS实例的总数量。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'PageNumber' => [
                                'description' => '分页查询时，当前页面的页码。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'PageSize' => [
                                'description' => '分页查询时，每页包含KMS实例的数量。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '10',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'IllegalTimestamp',
                        'errorMessage' => 'The input parameter Timestamp that is mandatory for processing this request is not supplied.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"d3eca5c8-a856-4347-8eb6-e1898c3fda2e\\",\\n  \\"KmsInstances\\": {\\n    \\"KmsInstance\\": [\\n      {\\n        \\"KmsInstanceArn\\": \\"acs:kms:pre-hangzhou:120708975881****:keystore/kst-phzz64c9f84eo32dbs****\\",\\n        \\"KmsInstanceId\\": \\"kst-phzz64c9f84eo32dbs****\\"\\n      }\\n    ]\\n  },\\n  \\"TotalCount\\": 1,\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 10\\n}","errorExample":""},{"type":"xml","example":"<ListKmsInstancesResponse>\\n    <RequestId>d3eca5c8-a856-4347-8eb6-e1898c3fda2e</RequestId>\\n    <KmsInstances>\\n        <KmsInstanceArn>acs:kms:pre-hangzhou:120708975881****:keystore/kst-phzz64c9f84eo32dbs****</KmsInstanceArn>\\n        <KmsInstanceId>kst-phzz64c9f84eo32dbs****</KmsInstanceId>\\n    </KmsInstances>\\n    <TotalCount>1</TotalCount>\\n    <PageNumber>1</PageNumber>\\n    <PageSize>10</PageSize>\\n</ListKmsInstancesResponse>","errorExample":""}]',
            'title' => '获取实例列表',
        ],
        'ConnectKmsInstance' => [
            'summary' => '启用一个KMS实例。',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'KmsInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要启用的KMS实例的ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'kst-phzz64f722a1buamw0****',
                    ],
                ],
                [
                    'name' => 'VpcId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '为KMS实例设置专有网络VPC ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'vpc-bp19z7cwmltad5dff****',
                    ],
                ],
                [
                    'name' => 'ZoneIds',
                    'in' => 'query',
                    'schema' => [
                        'description' => '为KMS实例设置两个可用区。通过双可用区负载均衡，提高服务可用性与容灾能力。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou-k,cn-hangzhou-j',
                    ],
                ],
                [
                    'name' => 'VSwitchIds',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设置双可用区下的一个交换机，并且该交换机至少有1个可用IP。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'vsw-bp1i512amda6d10a0****',
                    ],
                ],
                [
                    'name' => 'KMProvider',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'KMS实例提供商。目前取值仅支持Aliyun。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Aliyun',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '响应消息。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => 'd3eca5c8-a856-4347-8eb6-e1898c3fda2e',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"d3eca5c8-a856-4347-8eb6-e1898c3fda2e\\"\\n}","errorExample":""},{"type":"xml","example":"<ConnectKmsInstanceResponse>\\n    <RequestId>d3eca5c8-a856-4347-8eb6-e1898c3fda2e</RequestId>\\n</ConnectKmsInstanceResponse>","errorExample":""}]',
            'title' => '连接实例并配置网络',
            'description' => '### 使用限制'."\n"
                .'仅支持启用软件密钥管理实例，不支持启用硬件密钥管理实例。',
        ],
        'GetKmsInstance' => [
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'KmsInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'A short description of struct',
                        'description' => '要查询的KMS实例的ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'kst-bjj62f5ba3dnpb6v8****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'KMS实例详情。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '46b4a94a-57d2-44b4-9810-1e87d31abb33',
                            ],
                            'KmsInstance' => [
                                'description' => 'KMS实例详情。',
                                'type' => 'object',
                                'properties' => [
                                    'InstanceId' => [
                                        'description' => 'KMS实例的ID。',
                                        'type' => 'string',
                                        'example' => 'kst-bjj62f5ba3dnpb6v8****',
                                    ],
                                    'InstanceName' => [
                                        'description' => 'KMS实例的名称。',
                                        'type' => 'string',
                                        'example' => 'kst-bjj62f5ba3dnpb6v8****',
                                    ],
                                    'Status' => [
                                        'description' => 'KMS实例的状态。取值：'."\n"
                                            ."\n"
                                            .'- Uninitialized：未启用'."\n"
                                            .'- Connecting：连接中'."\n"
                                            .'- Connected：已启用'."\n"
                                            .'- Disconnected：已断开'."\n"
                                            .'- Error：状态异常'."\n"
                                            ."\n",
                                        'type' => 'string',
                                        'example' => 'Connected',
                                    ],
                                    'CreateTime' => [
                                        'description' => 'KMS实例创建的时间。',
                                        'type' => 'string',
                                        'example' => '2023-09-05T12:44:20Z',
                                    ],
                                    'Spec' => [
                                        'description' => 'KMS实例的计算性能。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1000',
                                    ],
                                    'KeyNum' => [
                                        'description' => 'KMS实例支持创建的密钥数量。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1000',
                                    ],
                                    'SecretNum' => [
                                        'description' => 'KMS实例支持创建的凭据数量。',
                                        'type' => 'string',
                                        'example' => '10',
                                    ],
                                    'VpcNum' => [
                                        'description' => 'KMS实例的访问管理总量。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '5',
                                    ],
                                    'VpcId' => [
                                        'description' => 'KMS实例绑定的VPC。',
                                        'type' => 'string',
                                        'example' => 'vpc-bp19z7cwmltad5dff****',
                                    ],
                                    'ZoneIds' => [
                                        'description' => 'KMS实例绑定的可用区。',
                                        'type' => 'string',
                                        'example' => '"cn-hangzhou-k",       "cn-hangzhou-j"',
                                    ],
                                    'VswitchIds' => [
                                        'description' => 'KMS实例绑定的VPC中的交换机。',
                                        'type' => 'string',
                                        'example' => 'vsw-bp1i512amda6d10a0****',
                                    ],
                                    'EndDate' => [
                                        'title' => '到期时间'."\n",
                                        'description' => 'KMS实例的到期时间。',
                                        'type' => 'string',
                                        'example' => '2023-10-05T16:00:00Z',
                                    ],
                                    'StartDate' => [
                                        'description' => 'KMS实例启用的时间。',
                                        'type' => 'string',
                                        'example' => '2023-09-05T12:44:19Z',
                                    ],
                                    'CaCertificateChainPem' => [
                                        'description' => 'KMS实例的CA证书的内容。',
                                        'type' => 'string',
                                        'example' => '-----BEGIN CERTIFICATE-----\\r\\nMIIDuzCCAqOgAwIBAgIJALTKwWAjvbMiMA0GCSqGSIb3DQEBCwUAMHQxCzAJBgNV****-----END CERTIFICATE-----',
                                    ],
                                    'BindVpcs' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'BindVpc' => [
                                                'description' => '配置的VPC列表。'."\n"
                                                    .'>如果您的自建应用部署在同地域的多个VPC中，除了KMS实例所属的VPC（即启用KMS实例时设置的VPC）外，您还可以将其他VPC配置到KMS实例中，这些VPC可以属于同一个阿里云账号，也可以属于不同阿里云账号。配置完成后，在这些VPC中的自建应用即可以访问指定的KMS实例。',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => '配置的VPC列表。'."\n"
                                                        .'>如果您的自建应用部署在同地域的多个VPC中，除了KMS实例绑定的VPC，您还可以将其他VPC配置到KMS实例中，这些VPC可以属于同一个阿里云账号，也可以属于不同阿里云账号。配置完成后，在这些VPC中的自建应用即可以访问指定的KMS实例。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'RegionId' => [
                                                            'description' => 'VPC所属的地域。',
                                                            'type' => 'string',
                                                            'example' => 'cn-hangzhou',
                                                        ],
                                                        'VpcId' => [
                                                            'description' => 'VPC的ID。',
                                                            'type' => 'string',
                                                            'example' => 'vpc-bp19z7djuhtad5dff****',
                                                        ],
                                                        'VpcOwnerId' => [
                                                            'description' => 'VPC所属的阿里云账号。',
                                                            'type' => 'string',
                                                            'example' => '190325303126****',
                                                        ],
                                                        'VSwitchId' => [
                                                            'description' => 'VPC下的交换机。',
                                                            'type' => 'string',
                                                            'example' => 'vsw-bp1i512amhdje10f1****',
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
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'IllegalTimestamp',
                        'errorMessage' => 'The input parameter Timestamp that is mandatory for processing this request is not supplied.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"46b4a94a-57d2-44b4-9810-1e87d31abb33\\",\\n  \\"KmsInstance\\": {\\n    \\"InstanceId\\": \\"kst-bjj62f5ba3dnpb6v8****\\",\\n    \\"InstanceName\\": \\"kst-bjj62f5ba3dnpb6v8****\\",\\n    \\"Status\\": \\"Connected\\",\\n    \\"CreateTime\\": \\"2023-09-05T12:44:20Z\\",\\n    \\"Spec\\": 1000,\\n    \\"KeyNum\\": 1000,\\n    \\"SecretNum\\": \\"10\\",\\n    \\"VpcNum\\": 5,\\n    \\"VpcId\\": \\"vpc-bp19z7cwmltad5dff****\\",\\n    \\"ZoneIds\\": \\"\\\\\\"cn-hangzhou-k\\\\\\",       \\\\\\"cn-hangzhou-j\\\\\\"\\",\\n    \\"VswitchIds\\": \\"vsw-bp1i512amda6d10a0****\\",\\n    \\"EndDate\\": \\"2023-10-05T16:00:00Z\\",\\n    \\"StartDate\\": \\"2023-09-05T12:44:19Z\\",\\n    \\"CaCertificateChainPem\\": \\"-----BEGIN CERTIFICATE-----\\\\\\\\r\\\\\\\\nMIIDuzCCAqOgAwIBAgIJALTKwWAjvbMiMA0GCSqGSIb3DQEBCwUAMHQxCzAJBgNV****-----END CERTIFICATE-----\\",\\n    \\"BindVpcs\\": {\\n      \\"BindVpc\\": [\\n        {\\n          \\"RegionId\\": \\"cn-hangzhou\\",\\n          \\"VpcId\\": \\"vpc-bp19z7djuhtad5dff****\\",\\n          \\"VpcOwnerId\\": \\"190325303126****\\",\\n          \\"VSwitchId\\": \\"vsw-bp1i512amhdje10f1****\\"\\n        }\\n      ]\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetKmsInstanceResponse>\\n    <RequestId>46b4a94a-57d2-44b4-9810-1e87d31abb33</RequestId>\\n    <KmsInstance>\\n        <InstanceId>kst-bjj62f5ba3dnpb6v8****</InstanceId>\\n        <InstanceName>kst-bjj62f5ba3dnpb6v8****</InstanceName>\\n        <Status>Connected</Status>\\n        <CreateTime>2023-09-05T12:44:20Z</CreateTime>\\n        <Spec>1000</Spec>\\n        <KeyNum>1000</KeyNum>\\n        <SecretNum>10</SecretNum>\\n        <VpcNum>5</VpcNum>\\n        <VpcId>vpc-bp19z7cwmltad5dff****</VpcId>\\n        <ZoneIds>\\"cn-hangzhou-k\\",       \\"cn-hangzhou-j\\"</ZoneIds>\\n        <VswitchIds>vsw-bp1i512amda6d10a0****</VswitchIds>\\n        <EndDate>2023-10-05T16:00:00Z</EndDate>\\n        <StartDate>2023-09-05T12:44:19Z</StartDate>\\n        <CaCertificateChainPem>-----BEGIN CERTIFICATE-----\\\\r\\\\nMIIDuzCCAqOgAwIBAgIJALTKwWAjvbMiMA0GCSqGSIb3DQEBCwUAMHQxCzAJBgNV****-----END CERTIFICATE-----</CaCertificateChainPem>\\n        <BindVpcs>\\n            <RegionId>cn-hangzhou</RegionId>\\n            <VpcId>vpc-bp19z7djuhtad5dff****</VpcId>\\n            <VpcOwnerId>190325303126****</VpcOwnerId>\\n            <VSwitchId>vsw-bp1i512amhdje10f1****</VSwitchId>\\n        </BindVpcs>\\n    </KmsInstance>\\n</GetKmsInstanceResponse>","errorExample":""}]',
            'title' => '获取实例',
            'summary' => '查询一个KMS实例的详情。',
        ],
        'UpdateKmsInstanceBindVpc' => [
            'summary' => '更新KMS实例配置的VPC。',
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
            'systemTags' => [
                'operationType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'KmsInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'KMS实例的ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'kst-phzz64f722a1buamw0****',
                    ],
                ],
                [
                    'name' => 'BindVpcs',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'VPC配置，每个VPC包含如下内容：'."\n"
                            ."\n"
                            .'- VpcId：VPC的ID。'."\n"
                            .'- VSwitchId：VPC下的交换机。'."\n"
                            .'- RegionID：VPC所属的地域。'."\n"
                            .'- VpcOwnerId：VPC所属的阿里云账号。'."\n"
                            ."\n"
                            .'格式为`[{"VpcId":"${VpcId}","VSwitchId":"${VSwitchId}","RegionId":"${RegionId}","VpcOwnerId":${VpcOwnerId}},...]`。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '[{"VpcId":"vpc-bp1go9qvmj78j4f4c****","VSwitchId":"vsw-bp16c5pvvcf0fp5b9****","RegionId":"cn-hangzhou","VpcOwnerId":120708975881****},{"VpcId":"vpc-bp14c07ucxg6h1xjm****","VSwitchId":"vsw-bp1wujtnspi1l3gvu****","RegionId":"cn-hangzhou","VpcOwnerId":119285303511****}]',
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
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => 'd3eca5c8-a856-4347-8eb6-e1898c3fda2e',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"d3eca5c8-a856-4347-8eb6-e1898c3fda2e\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateKmsInstanceBindVpcResponse>\\n    <RequestId>d3eca5c8-a856-4347-8eb6-e1898c3fda2e</RequestId>\\n</UpdateKmsInstanceBindVpcResponse>","errorExample":""}]',
            'title' => '更新实例分享VPC',
            'description' => '如果您的自建应用部署在同地域的多个VPC中，除了KMS实例所属的VPC（即启用KMS实例时设置的VPC）外，您还可以将其他VPC配置到KMS实例中，本文即介绍如何配置这些VPC。'."\n"
                ."\n"
                .'这些VPC可以属于同一个阿里云账号，也可以属于不同阿里云账号。配置完成后，这些VPC中的自建应用即可以访问指定的KMS实例。'."\n"
                ."\n"
                .'>如果VPC属于不同的阿里云账号，您需要先配置资源共享，将其他阿里云账号的交换机资源共享给KMS实例所属的阿里云账号。具体操作，请参见[同地域多VPC访问KMS实例](~~2393236~~)。',
        ],
        'CreateKey' => [
            'summary' => '调用CreateKey接口创建一个主密钥。',
            'methods' => [
                'post',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
                'abilityTreeCode' => '54546',
                'abilityTreeNodes' => [
                    'FEATUREkmsZ5VV9Q',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '密钥的描述。  '."\n"
                            .'长度为0~8192个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'key description example',
                    ],
                ],
                [
                    'name' => 'KeyUsage',
                    'in' => 'query',
                    'schema' => [
                        'description' => '密钥的用途。取值：  '."\n"
                            .'- ENCRYPT/DECRYPT：数据加密和解密。'."\n"
                            .'- SIGN/VERIFY：产生和验证数字签名。'."\n"
                            ."\n"
                            .'默认值：如果密钥支持签名验签，默认值为SIGN/VERIFY，否则默认值为ENCRYPT/DECRYPT。'."\n"
                            .'                           ',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ENCRYPT/DECRYPT',
                        'default' => 'ENCRYPT/DECRYPT',
                    ],
                ],
                [
                    'name' => 'Origin',
                    'in' => 'query',
                    'schema' => [
                        'description' => '密钥材料来源。取值：  '."\n"
                            .'- Aliyun_KMS（默认值）：密钥材料由阿里云KMS生成。'."\n"
                            .'- EXTERNAL：密钥材料由您自行导入。'."\n"
                            ."\n\n"
                            .'> - 请注意区分大小写。'."\n"
                            .'- 默认密钥（主密钥）支持选择Aliyun_KMS或EXTERNAL；软件密钥管理实例中的密钥仅支持选择Aliyun_KMS；硬件密钥管理实例中的密钥支持选择Aliyun_KMS或EXTERNAL。'."\n"
                            .'- 如果选择EXTERNAL，您需要自行导入密钥材料。具体操作，请参见[导入对称密钥材料](~~607841~~)或[导入非对称密钥材料](~~608827~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Aliyun_KMS',
                    ],
                ],
                [
                    'name' => 'ProtectionLevel',
                    'in' => 'query',
                    'schema' => [
                        'description' => '您无需输入本参数，KMS会为您的密钥设置合适的保护级别。'."\n"
                            ."\n"
                            .'密钥的保护级别，取值：  '."\n"
                            .'- SOFTWARE'."\n"
                            .'- HSM'."\n"
                            ."\n"
                            .'>- 如果指定了DKMSInstanceId：本参数输入后不生效。当实例为KMS软件密钥管理实例时，密钥保护级别为SOFTWARE；当实例为KMS硬件密钥管理实例时，密钥保护级别为HSM。'."\n"
                            .'- 如果未指定DKMSInstanceId：建议您不输入，由KMS设置。当KMS在该地域有托管密码机时，本参数将设置HSM，否则为SOFTWARE。更多信息，请参见[托管密码机概述](~~125803~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'SOFTWARE',
                    ],
                ],
                [
                    'name' => 'EnableAutomaticRotation',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否开启密钥自动轮转。取值：  '."\n"
                            .'- true：开启'."\n"
                            .'- false（默认值）：不开启'."\n"
                            ."\n"
                            .'仅当密钥所属的密钥管理类型支持自动轮转时，该参数值有效。具体内容，请参见[密钥轮转](~~2358146~~)。'."\n",
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'RotationInterval',
                    'in' => 'query',
                    'schema' => [
                        'description' => '自动轮转的时间周期。格式为integer\\[unit]，其中integer表示时间长度，unit表示时间单位。合法的unit单位为：d（天）、h（小时）、m（分钟）、s（秒）。7d或者604800s均表示7天的周期。'."\n"
                            ."\n"
                            .'- 当密钥为默认密钥时，取值为365天。'."\n"
                            ."\n"
                            .'- 当密钥为软件密钥时，取值为7~365天。'."\n"
                            ."\n"
                            .'- 当密钥为硬件密钥时，不支持自动轮转。'."\n"
                            ."\n"
                            .'> 当EnableAutomaticRotation参数为true时，必须设置此参数。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '365d',
                    ],
                ],
                [
                    'name' => 'KeySpec',
                    'in' => 'query',
                    'schema' => [
                        'description' => '密钥规格，不同密钥管理类型的取值不同。关于密钥规格、遵循的标准、密钥算法的详细介绍，请参见[密钥管理类型和密钥规格](~~480161~~)。'."\n"
                            ."\n"
                            .'> 不输入参数值时，密钥规格默认为Aliyun\\_AES_256。'."\n"
                            ."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Aliyun_AES_256',
                    ],
                ],
                [
                    'name' => 'DKMSInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'KMS实例的实例ID。'."\n"
                            ."\n"
                            .'>当您需要为KMS实例创建密钥时，必须指定本参数。当您需要创建默认密钥（主密钥）时，不需要指定本参数。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'kst-bjj62d8f5e0sgtx8h****',
                    ],
                ],
                [
                    'name' => 'Tags',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'description' => '为密钥绑定标签。每个标签由一个键值对（Key:Value）组成，包含标签键（Key）、标签值（Value）。'."\n"
                            ."\n"
                            .'最多输入20个标签。输入多个标签时，格式为`[{"TagKey":"key1","TagValue":"value1"},{"TagKey":"key2","TagValue":"value2"},...]`。'."\n"
                            ."\n"
                            .'每个标签键（Key）和每个标签值（Value）最多支持128个字符，可以包含英文大小写字母、数字、正斜线（/）、反斜线（\\）、下划线（_）、短划线（-）、半角句号（.）、加号（+）、等于号（=）、半角冒号（:）、字符at（@）。'."\n"
                            .'>标签键不能以aliyun和acs:开头。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '[{"TagKey":"disk-encryption","TagValue":"true"}]',
                    ],
                ],
                [
                    'name' => 'Policy',
                    'in' => 'query',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '',
                        'description' => '密钥策略的具体内容，JSON格式。最大长度为32768个字节。'."\n"
                            .'关于密钥策略的详细介绍，请参见[密钥策略概述](~~2716468~~)。不输入该参数时，使用默认凭据策略。'."\n"
                            ."\n"
                            .'密钥策略内容包含：'."\n"
                            ."\n"
                            .'- Version：密钥策略的版本，目前版本仅支持设置为1。'."\n"
                            .'- Statement：密钥策略的语句，每个密钥策略包含一个或多个语句。'."\n"
                            ."\n"
                            .'密钥策略格式为：'."\n"
                            ."\n"
                            .'```'."\n"
                            .'{'."\n"
                            .'    "Version": "1",'."\n"
                            .'    "Statement": ['."\n"
                            .'        {'."\n"
                            .'            "Sid": "Enable RAM User Permissions",'."\n"
                            .'            "Effect": "Allow",'."\n"
                            .'            "Principal": {'."\n"
                            .'              "RAM": "acs:ram::112890462****:root"'."\n"
                            .'            }'."\n"
                            .'            "Action": ['."\n"
                            .'                "kms:*"'."\n"
                            .'            ],'."\n"
                            .'            "Resource": ['."\n"
                            .'                "*"'."\n"
                            .'            ]'."\n"
                            .'        }'."\n"
                            .'    ]'."\n"
                            .'}'."\n"
                            .'```'."\n"
                            ."\n"
                            .'Statement详细介绍：'."\n"
                            .'- Sid：可选，表示自定义的语句标识符。内容长度小于等于128字符，支持的字符为：大写英文字母（A-Z）、小写英文字母（a-z）、数字（0-9），特殊字符（ _/+=.@-）。'."\n"
                            .'- Effect：必选，表示是允许还是拒绝该策略语句中的权限。取值为：Allow或Deny。'."\n"
                            ."\n"
                            .'- Principal：必选，表示权限策略的授权主体，支持设置为当前阿里云账号（即密钥所属的阿里云账号），当前阿里云账号下的RAM用户、RAM角色，其他阿里云账号下的RAM用户、RAM角色。'."\n"
                            ."\n"
                            .'- Action：必选，表示要允许或拒绝的API操作，内容必须以"kms:"开头。操作权限列表的范围，请参见[密钥策略概述](~~2716468~~)。如果您设置了列表外的操作，设置后也不会生效。'."\n"
                            ."\n"
                            .'- Resource：必选，取值只能是*，表示本KMS密钥。'."\n"
                            ."\n"
                            .'>授权给其他阿里云账号下的RAM用户、RAM角色后，您仍需在访问控制RAM侧，使用该RAM用户、RAM角色的阿里云账号为其授权使用该密钥，RAM用户、RAM角色才能使用该密钥。集体操作，请参见[密钥管理服务自定义权限策略参考](~~480682~~)、[为RAM用户授权](~~116146~~)、[为RAM角色授权](~~116147~~)。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"Statement":[{"Action":["kms:*"],"Effect":"Allow","Principal":{"RAM":["acs:ram::119285303511****:*"]},"Resource":["*"],"Sid":"kms default key policy"},{"Action":["kms:List*","kms:Describe*","kms:Create*","kms:Enable*","kms:Disable*","kms:Get*","kms:Set*","kms:Update*","kms:Delete*","kms:Cancel*","kms:TagResource","kms:UntagResource","kms:ImportKeyMaterial","kms:ScheduleKeyDeletion"],"Effect":"Allow","Principal":{"RAM":["acs:ram::119285303511****:user/for_test_policy"]},"Resource":["*"]}],"Version":"1"}',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '381D5D33-BB8F-395F-8EE4-AE3BB4B523C4',
                            ],
                            'KeyMetadata' => [
                                'description' => '密钥的元数据。',
                                'type' => 'object',
                                'properties' => [
                                    'KeyId' => [
                                        'description' => '密钥的全局唯一标识符。',
                                        'type' => 'string',
                                        'example' => 'key-hzz62f1cb66fa42qo****',
                                    ],
                                    'NextRotationDate' => [
                                        'description' => '密钥下一次轮转的时间。  '."\n"
                                            ."\n"
                                            .'仅当AutomaticRotation参数值为Enabled或Suspended时，才返回该值。',
                                        'type' => 'string',
                                        'example' => '2024-03-25T10:00:00Z',
                                    ],
                                    'KeyState' => [
                                        'description' => '密钥的状态。  '."\n"
                                            .'更多信息，请参见[用户主密钥的状态对API调用的影响](~~44211~~)。',
                                        'type' => 'string',
                                        'example' => 'Enabled',
                                    ],
                                    'RotationInterval' => [
                                        'description' => '密钥自动轮转的周期。单位为秒，格式为整数值后加上字符s。例如：7天的轮转周期为604800s。'."\n"
                                            ."\n"
                                            .'仅当AutomaticRotation参数值为Enabled或Suspended时，才返回该值。',
                                        'type' => 'string',
                                        'example' => '31536000s',
                                    ],
                                    'Arn' => [
                                        'description' => '密钥的ARN。',
                                        'type' => 'string',
                                        'example' => 'acs:kms:cn-qingdao:154035569884****:key/key-hzz62f1cb66fa42qo****',
                                    ],
                                    'Creator' => [
                                        'description' => '密钥的创建者。',
                                        'type' => 'string',
                                        'example' => '154035569884****',
                                    ],
                                    'LastRotationDate' => [
                                        'description' => '最近一次轮转的时间（UTC）。  '."\n"
                                            .'如果是新创建密钥，则为初始密钥版本生成时间。',
                                        'type' => 'string',
                                        'example' => '2023-03-25T10:00:00Z',
                                    ],
                                    'DeleteDate' => [
                                        'description' => '密钥的预计删除时间。 更多信息，请参见[ScheduleKeyDeletion](~~601417~~)。'."\n"
                                            ."\n"
                                            .'仅当KeyState值为PendingDeletion时，才返回该参数。',
                                        'type' => 'string',
                                        'example' => '2025-03-25T10:00:00Z',
                                    ],
                                    'PrimaryKeyVersion' => [
                                        'description' => '密钥的当前主版本标识符。  '."\n",
                                        'type' => 'string',
                                        'example' => '7ce1d081-06cb-42e6-aab6-5c5de030****',
                                    ],
                                    'Description' => [
                                        'description' => '密钥的描述。',
                                        'type' => 'string',
                                        'example' => 'key description example',
                                    ],
                                    'KeySpec' => [
                                        'description' => '密钥的规格。',
                                        'type' => 'string',
                                        'example' => 'Aliyun_AES_256',
                                    ],
                                    'Origin' => [
                                        'description' => '密钥材料来源。'."\n",
                                        'type' => 'string',
                                        'example' => 'Aliyun_KMS',
                                    ],
                                    'MaterialExpireTime' => [
                                        'description' => '密钥材料的过期时间（UTC）。  '."\n"
                                            .'当该值为空时，表示密钥材料不会过期。',
                                        'type' => 'string',
                                        'example' => '2025-03-25T10:00:00Z',
                                    ],
                                    'AutomaticRotation' => [
                                        'description' => '是否开启了密钥自动轮转，取值：'."\n"
                                            ."\n"
                                            .'- Enabled：自动轮转处于开启状态。'."\n"
                                            .'- Disabled：自动轮转处于未开启状态。'."\n"
                                            .'- Suspended：自动轮转被暂停执行。',
                                        'type' => 'string',
                                        'example' => 'Enabled',
                                    ],
                                    'ProtectionLevel' => [
                                        'description' => '密钥的保护级别。',
                                        'type' => 'string',
                                        'example' => 'SOFTWARE',
                                    ],
                                    'KeyUsage' => [
                                        'description' => '密钥的用途。',
                                        'type' => 'string',
                                        'example' => 'ENCRYPT/DECRYPT',
                                    ],
                                    'CreationDate' => [
                                        'description' => '密钥创建的日期和时间（UTC）。',
                                        'type' => 'string',
                                        'example' => '2024-03-25T10:00:00Z',
                                    ],
                                    'DKMSInstanceId' => [
                                        'description' => 'KMS实例的实例ID。',
                                        'type' => 'string',
                                        'example' => 'kst-bjj62d8f5e0sgtx8h****',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'Rejected.LimitExceeded',
                        'errorMessage' => 'The request was rejected because user create resource limit was exceeded',
                    ],
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter is not valid.',
                    ],
                    [
                        'errorCode' => 'UnsupportedOperation',
                        'errorMessage' => 'This action is not supported.',
                    ],
                    [
                        'errorCode' => 'Forbidden.NoPermission',
                        'errorMessage' => 'This operation is forbidden by permission system.',
                    ],
                    [
                        'errorCode' => 'Rejected.ShareQuotaExceedLimit',
                        'errorMessage' => 'Instance Share Quota Exceed Limit.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden.DKMSInstanceNotFound',
                        'errorMessage' => 'The specified DKMS Instance is not found.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalFailure',
                        'errorMessage' => 'Internal  Failure',
                    ],
                ],
                503 => [
                    [
                        'errorCode' => 'SerivceUnvailableTemporary',
                        'errorMessage' => 'Service Unvailable Temporary',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"381D5D33-BB8F-395F-8EE4-AE3BB4B523C4\\",\\n  \\"KeyMetadata\\": {\\n    \\"KeyId\\": \\"key-hzz62f1cb66fa42qo****\\",\\n    \\"NextRotationDate\\": \\"2024-03-25T10:00:00Z\\",\\n    \\"KeyState\\": \\"Enabled\\",\\n    \\"RotationInterval\\": \\"31536000s\\",\\n    \\"Arn\\": \\"acs:kms:cn-qingdao:154035569884****:key/key-hzz62f1cb66fa42qo****\\",\\n    \\"Creator\\": \\"154035569884****\\",\\n    \\"LastRotationDate\\": \\"2023-03-25T10:00:00Z\\",\\n    \\"DeleteDate\\": \\"2025-03-25T10:00:00Z\\",\\n    \\"PrimaryKeyVersion\\": \\"7ce1d081-06cb-42e6-aab6-5c5de030****\\",\\n    \\"Description\\": \\"key description example\\",\\n    \\"KeySpec\\": \\"Aliyun_AES_256\\",\\n    \\"Origin\\": \\"Aliyun_KMS\\",\\n    \\"MaterialExpireTime\\": \\"2025-03-25T10:00:00Z\\",\\n    \\"AutomaticRotation\\": \\"Enabled\\",\\n    \\"ProtectionLevel\\": \\"SOFTWARE\\",\\n    \\"KeyUsage\\": \\"ENCRYPT/DECRYPT\\",\\n    \\"CreationDate\\": \\"2024-03-25T10:00:00Z\\",\\n    \\"DKMSInstanceId\\": \\"kst-bjj62d8f5e0sgtx8h****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<CreateKeyResponse>\\n    <RequestId>381D5D33-BB8F-395F-8EE4-AE3BB4B523C4</RequestId>\\n    <KeyMetadata>\\n        <KeyId>key-hzz62f1cb66fa42qo****</KeyId>\\n        <NextRotationDate>2024-03-25T10:00:00Z</NextRotationDate>\\n        <KeyState>Enabled</KeyState>\\n        <RotationInterval>31536000s</RotationInterval>\\n        <Arn>acs:kms:cn-qingdao:154035569884****:key/key-hzz62f1cb66fa42qo****</Arn>\\n        <Creator>154035569884****</Creator>\\n        <LastRotationDate>2023-03-25T10:00:00Z</LastRotationDate>\\n        <DeleteDate>2025-03-25T10:00:00Z</DeleteDate>\\n        <PrimaryKeyVersion>7ce1d081-06cb-42e6-aab6-5c5de030****</PrimaryKeyVersion>\\n        <Description>key description example</Description>\\n        <KeySpec>Aliyun_AES_256</KeySpec>\\n        <Origin>Aliyun_KMS</Origin>\\n        <MaterialExpireTime>2025-03-25T10:00:00Z</MaterialExpireTime>\\n        <AutomaticRotation>Enabled</AutomaticRotation>\\n        <ProtectionLevel>SOFTWARE</ProtectionLevel>\\n        <KeyUsage>ENCRYPT/DECRYPT</KeyUsage>\\n        <CreationDate>2024-03-25T10:00:00Z</CreationDate>\\n        <DKMSInstanceId>kst-bjj62d8f5e0sgtx8h****</DKMSInstanceId>\\n    </KeyMetadata>\\n</CreateKeyResponse>","errorExample":""}]',
            'title' => '创建一个主密钥',
            'description' => '阿里云KMS支持常见的对称密钥规格和非对称密钥规格。具体内容，请参见[密钥管理类型和密钥规格](~~480161~~)。',
            'requestParamsDescription' => ' 关于公共请求参数的详情，请参见[公共参数](~~69007~~)。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListKeys' => [
            'summary' => '调用ListKeys查询调用者在调用地域的所有主密钥ID。',
            'methods' => [
                'post',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '当前页数。  '."\n"
                            .'取值范围：大于0。  '."\n"
                            .'默认值：1。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页返回值的个数。  '."\n"
                            .'取值范围：1~100。  '."\n"
                            .'默认值：10。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'Filters',
                    'in' => 'query',
                    'schema' => [
                        'description' => '主密钥过滤器。由Key-Values键值对组成，长度为0~10。'."\n"
                            .'- Key'."\n"
                            .'    - 描述：需要过滤的属性。'."\n"
                            .'    - 类型：String。  '."\n"
                            .'    - 取值：'."\n"
                            .'        - KeyState：密钥状态。'."\n"
                            .'        - KeySpec：密钥类型。'."\n"
                            .'        - KeyUsage：密钥用途。'."\n"
                            .'        - ProtectionLevel：保护等级。'."\n"
                            .'        - CreatorType：创建者类型。'."\n"
                            .'        - DKMSInstanceId：KMS实例的实例ID。'."\n"
                            .'- Values'."\n"
                            .'    - 描述：期望过滤后包含的值。'."\n"
                            .'    - 类型：String数组。'."\n"
                            .'    - 长度：0~10。'."\n"
                            .'    - 取值：'."\n"
                            .'        - Key取值为KeyState时：Enabled（启用）、Disabled（禁用）、PendingDeletion（待删除）、PendingImport（待导入）。'."\n"
                            .'        - Key取值为KeySpec时：Aliyun_AES_256、Aliyun_SM4、RSA_2048、EC_P256、EC_P256K、EC_SM2。  '."\n"
                            .'说明：仅在支持托管密码机且已通过国密局商用密码检测认证的地域可以创建EC_SM2和Aliyun_SM4类型的密钥，地域详情请参见[支持的地域](~~125803~~)。如果您所选择地域不支持EC_SM2和Aliyun_SM4，指定这两个参数将被忽略。'."\n"
                            ."\n"
                            .'        - Key取值为KeyUsage时：ENCRYPT/DECRYPT（数据加密和解密）、SIGN/VERIFY （产生和验证数字签名）。'."\n"
                            .'        -  Key取值为ProtectionLevel时：SOFTWARE（软件）、HSM（硬件）。  '."\n"
                            .'说明：HSM保护等级仅在特定地域支持，地域详情请参见[支持的地域](~~125803~~)。如您所选择地域不支持HSM，指定该参数将被忽略。'."\n"
                            ."\n"
                            .'        - Key取值为CreatorType时：User（获取由用户创建的主密钥）、Service （获取由用户授权其他云产品自动创建的主密钥）。'."\n"
                            .'        - Key取值为DKMSInstanceId时：kst-xxx（KMS实例的实例ID）。  '."\n"
                            ."\n"
                            .'Filters不同Key之间的逻辑关系为AND，同一个Key中的多个Value之间的逻辑关系为OR。例如：输入'."\n"
                            .'`'."\n"
                            .'[ {"Key":"KeyState", "Values":["Enabled","Disabled"]},'."\n"
                            .'  {"Key":"KeyState", "Values":["PendingDeletion"]},'."\n"
                            .'  {"Key":"KeySpec", "Values":["Aliyun_AES_256"]}'."\n"
                            .']'."\n"
                            .'`'."\n"
                            .'时，语义为：'."\n"
                            .'`'."\n"
                            .'(KeyState=Enabled OR KeyState=Disabled OR KeyState=PendingDeletion) '."\n"
                            .'	AND (KeySpec=Aliyun_AES_256)。'."\n"
                            .'`',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => '[{"Key":"KeyState", "Values":["Enabled","Disabled"]}]',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'PageNumber' => [
                                'description' => '当前页数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'PageSize' => [
                                'description' => '每页返回值的个数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '8252db58-2036-408c-a3d5-56e656dc2551',
                            ],
                            'TotalCount' => [
                                'description' => '主密钥的总数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '3',
                            ],
                            'Keys' => [
                                'type' => 'object',
                                'properties' => [
                                    'Key' => [
                                        'description' => '主密钥。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => "\n"
                                                .'主密钥。',
                                            'type' => 'object',
                                            'properties' => [
                                                'KeyId' => [
                                                    'description' => '主密钥的全局唯一标识符。',
                                                    'type' => 'string',
                                                    'example' => '08c33a6f-4e0a-4a1b-a3fa-7ddfa1d4****',
                                                ],
                                                'KeyArn' => [
                                                    'description' => '主密钥的ARN。',
                                                    'type' => 'string',
                                                    'example' => 'acs:kms:cn-hangzhou:123456:key/80e9409f-78fa-42ab-84bd-83f40c81****',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"RequestId\\": \\"8252db58-2036-408c-a3d5-56e656dc2551\\",\\n  \\"TotalCount\\": 3,\\n  \\"Keys\\": {\\n    \\"Key\\": [\\n      {\\n        \\"KeyId\\": \\"08c33a6f-4e0a-4a1b-a3fa-7ddfa1d4****\\",\\n        \\"KeyArn\\": \\"acs:kms:cn-hangzhou:123456:key/80e9409f-78fa-42ab-84bd-83f40c81****\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListKeysResponse>\\n    <PageNumber>1</PageNumber>\\n    <PageSize>10</PageSize>\\n    <RequestId>8252db58-2036-408c-a3d5-56e656dc2551</RequestId>\\n    <TotalCount>3</TotalCount>\\n    <Keys>\\n        <KeyId>08c33a6f-4e0a-4a1b-a3fa-7ddfa1d4****</KeyId>\\n        <KeyArn>acs:kms:cn-hangzhou:123456:key/80e9409f-78fa-42ab-84bd-83f40c81****</KeyArn>\\n    </Keys>\\n</ListKeysResponse>","errorExample":""}]',
            'title' => '查询调用者在调用地域的所有主密钥ID',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeKey' => [
            'methods' => [
                'post',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'KeyId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '密钥的ID，也可以指定为密钥别名或密钥资源名称（ARN）。关于别名的详细介绍，请参见[管理密钥别名](~~480655~~)。'."\n"
                            .'>访问其他阿里云账号下的密钥时，必须输入密钥ARN。密钥ARN的格式为`acs:kms:${region}:${account}:key/${keyid}`。'."\n"
                            ."\n"
                            .'                           ',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'key-hzz630494463ejqjx****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => 'f1fdfa9d-bd49-418b-942f-8f3e3ec00a4f',
                            ],
                            'KeyMetadata' => [
                                'description' => 'CMK的元数据。',
                                'type' => 'object',
                                'properties' => [
                                    'DeletionProtection' => [
                                        'description' => '是否开启删除保护，取值： '."\n"
                                            ."\n"
                                            .'- Enabled：开启删除保护。'."\n"
                                            .'- Disabled：关闭删除保护。',
                                        'type' => 'string',
                                        'example' => 'Enabled',
                                    ],
                                    'KeyId' => [
                                        'description' => '密钥ID。如果请求中的KeyId参数使用的是密钥别名、密钥ARN，在响应中也会返回密钥ID。'."\n",
                                        'type' => 'string',
                                        'example' => 'key-hzz630494463ejqjx****',
                                    ],
                                    'NextRotationDate' => [
                                        'description' => '下一次轮转的时间。  '."\n"
                                            ."\n"
                                            .'> 当AutomaticRotation取值为Enabled或Suspended时，返回该参数。                      ',
                                        'type' => 'string',
                                        'example' => '2021-07-06T18:22:03Z',
                                    ],
                                    'KeyState' => [
                                        'description' => 'CMK的状态。  '."\n"
                                            .'更多信息，请参见[用户主密钥的状态对API调用的影响](~~44211~~)。',
                                        'type' => 'string',
                                        'example' => 'Enabled',
                                    ],
                                    'RotationInterval' => [
                                        'description' => '密钥自动轮转的周期。  '."\n"
                                            .'单位：s。  '."\n"
                                            .'例如：7天的轮转周期为604800s。  '."\n"
                                            ."\n"
                                            .'> 当AutomaticRotation取值为Enabled或Suspended时，返回该参数。          ',
                                        'type' => 'string',
                                        'example' => '31536000s',
                                    ],
                                    'Arn' => [
                                        'description' => 'CMK的资源名称（ARN）。',
                                        'type' => 'string',
                                        'example' => 'acs:kms:cn-hangzhou:154035569884****:key/key-hzz630494463ejqjx****',
                                    ],
                                    'Creator' => [
                                        'description' => '创建CMK的阿里云账号。',
                                        'type' => 'string',
                                        'example' => '154035569884****',
                                    ],
                                    'LastRotationDate' => [
                                        'description' => '最近一次轮转的时间（UTC）。如果是新创建的密钥，则为初始密钥版本生成时间。',
                                        'type' => 'string',
                                        'example' => '2024-05-20T06:34:21Z',
                                    ],
                                    'DeleteDate' => [
                                        'description' => 'CMK的预计删除时间（UTC）。  '."\n"
                                            .'更多信息，请参见[ScheduleKeyDeletion](~~44196~~)。  '."\n"
                                            ."\n"
                                            .'> 当KeyState取值为PendingDeletion时，返回该参数。',
                                        'type' => 'string',
                                        'example' => '2024-05-26T18:22:03Z',
                                    ],
                                    'PrimaryKeyVersion' => [
                                        'description' => '对称类型CMK当前的主版本标识符。',
                                        'type' => 'string',
                                        'example' => '515e0b0a-624f-45ab-92b5-54f9b551****',
                                    ],
                                    'Description' => [
                                        'description' => 'CMK的描述。',
                                        'type' => 'string',
                                        'example' => 'key description example',
                                    ],
                                    'KeySpec' => [
                                        'description' => 'CMK的类型。',
                                        'type' => 'string',
                                        'example' => 'Aliyun_AES_256',
                                    ],
                                    'Origin' => [
                                        'description' => 'CMK的密钥材料来源。',
                                        'type' => 'string',
                                        'example' => 'Aliyun_KMS',
                                    ],
                                    'MaterialExpireTime' => [
                                        'description' => '密钥材料的过期时间（UTC）。当该值为空时，表示密钥材料不会过期。',
                                        'type' => 'string',
                                        'example' => '2024-07-06T18:22:03Z',
                                    ],
                                    'DeletionProtectionDescription' => [
                                        'description' => '删除保护描述。',
                                        'type' => 'string',
                                        'example' => '该密钥正在被XXX服务使用。已为您设置删除保护。',
                                    ],
                                    'AutomaticRotation' => [
                                        'description' => '是否开启自动轮转，取值：'."\n"
                                            ."\n"
                                            .'- Enabled：开启自动轮转。'."\n"
                                            .'- Disabled：关闭自动轮转。'."\n"
                                            .'- Suspended：暂停执行自动轮转。  '."\n"
                                            ."\n"
                                            .'更多信息，请参见[自动轮转密钥](~~134270~~)。'."\n"
                                            ."\n"
                                            .'> 仅对称密钥支持自动轮转。',
                                        'type' => 'string',
                                        'example' => 'Disabled',
                                    ],
                                    'ProtectionLevel' => [
                                        'description' => 'CMK的保护级别。',
                                        'type' => 'string',
                                        'example' => 'HSM',
                                    ],
                                    'KeyUsage' => [
                                        'description' => 'CMK的用途。',
                                        'type' => 'string',
                                        'example' => 'ENCRYPT/DECRYPT',
                                    ],
                                    'CreationDate' => [
                                        'description' => 'CMK的创建时间（UTC）。',
                                        'type' => 'string',
                                        'example' => '2024-05-20T06:34:21Z',
                                    ],
                                    'DKMSInstanceId' => [
                                        'description' => 'KMS实例的实例ID。',
                                        'type' => 'string',
                                        'example' => 'kst-bjj62d8f5e0sgtx8h****',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter is not valid.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'Forbidden.KeyNotFound',
                        'errorMessage' => 'The specified Key is not found.',
                    ],
                    [
                        'errorCode' => 'Forbidden.AliasNotFound',
                        'errorMessage' => 'The specified Alias is not found.',
                    ],
                    [
                        'errorCode' => 'InvalidAccessKeyId.NotFound',
                        'errorMessage' => 'The Access Key ID provided does not exist in our records.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"f1fdfa9d-bd49-418b-942f-8f3e3ec00a4f\\",\\n  \\"KeyMetadata\\": {\\n    \\"DeletionProtection\\": \\"Enabled\\",\\n    \\"KeyId\\": \\"key-hzz630494463ejqjx****\\",\\n    \\"NextRotationDate\\": \\"2021-07-06T18:22:03Z\\",\\n    \\"KeyState\\": \\"Enabled\\",\\n    \\"RotationInterval\\": \\"31536000s\\",\\n    \\"Arn\\": \\"acs:kms:cn-hangzhou:154035569884****:key/key-hzz630494463ejqjx****\\",\\n    \\"Creator\\": \\"154035569884****\\",\\n    \\"LastRotationDate\\": \\"2024-05-20T06:34:21Z\\",\\n    \\"DeleteDate\\": \\"2024-05-26T18:22:03Z\\",\\n    \\"PrimaryKeyVersion\\": \\"515e0b0a-624f-45ab-92b5-54f9b551****\\",\\n    \\"Description\\": \\"key description example\\",\\n    \\"KeySpec\\": \\"Aliyun_AES_256\\",\\n    \\"Origin\\": \\"Aliyun_KMS\\",\\n    \\"MaterialExpireTime\\": \\"2024-07-06T18:22:03Z\\",\\n    \\"DeletionProtectionDescription\\": \\"该密钥正在被XXX服务使用。已为您设置删除保护。\\",\\n    \\"AutomaticRotation\\": \\"Disabled\\",\\n    \\"ProtectionLevel\\": \\"HSM\\",\\n    \\"KeyUsage\\": \\"ENCRYPT/DECRYPT\\",\\n    \\"CreationDate\\": \\"2024-05-20T06:34:21Z\\",\\n    \\"DKMSInstanceId\\": \\"kst-bjj62d8f5e0sgtx8h****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeKeyResponse>\\n    <RequestId>f1fdfa9d-bd49-418b-942f-8f3e3ec00a4f</RequestId>\\n    <KeyMetadata>\\n        <DeletionProtection>Enabled</DeletionProtection>\\n        <KeyId>key-hzz630494463ejqjx****</KeyId>\\n        <NextRotationDate>2021-07-06T18:22:03Z</NextRotationDate>\\n        <KeyState>Enabled</KeyState>\\n        <RotationInterval>31536000s</RotationInterval>\\n        <Arn>acs:kms:cn-hangzhou:154035569884****:key/key-hzz630494463ejqjx****</Arn>\\n        <Creator>154035569884****</Creator>\\n        <LastRotationDate>2024-05-20T06:34:21Z</LastRotationDate>\\n        <DeleteDate>2024-05-26T18:22:03Z</DeleteDate>\\n        <PrimaryKeyVersion>515e0b0a-624f-45ab-92b5-54f9b551****</PrimaryKeyVersion>\\n        <Description>key description example</Description>\\n        <KeySpec>Aliyun_AES_256</KeySpec>\\n        <Origin>Aliyun_KMS</Origin>\\n        <MaterialExpireTime>2024-07-06T18:22:03Z</MaterialExpireTime>\\n        <DeletionProtectionDescription>该密钥正在被XXX服务使用。已为您设置删除保护。</DeletionProtectionDescription>\\n        <AutomaticRotation>Disabled</AutomaticRotation>\\n        <ProtectionLevel>HSM</ProtectionLevel>\\n        <KeyUsage>ENCRYPT/DECRYPT</KeyUsage>\\n        <CreationDate>2024-05-20T06:34:21Z</CreationDate>\\n        <DKMSInstanceId>kst-bjj62d8f5e0sgtx8h****</DKMSInstanceId>\\n    </KeyMetadata>\\n</DescribeKeyResponse>","errorExample":""}]',
            'title' => '返回指定主密钥（CMK）的相关信息',
            'summary' => '调用DescribeKey接口查询用户主密钥（CMK）详情。',
            'description' => '本文将提供一个示例，为您查询ID为`key-hzz630494463ejqjx****'."\n"
                .'`的用户主密钥的详情，包括创建者、创建时间、密钥状态、删除保护状态等信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'UpdateKeyDescription' => [
            'summary' => '调用UpdateKeyDescription接口更新主密钥的描述信息。',
            'methods' => [
                'post',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'KeyId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '密钥ID。主密钥的全局唯一标识符。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1234abcd-12ab-34cd-56ef-12345678****',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '主密钥的描述性信息。通常用于描述主密钥的用途，例如主密钥保护的数据类型、可使用主密钥的应用等。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'key description example',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '3455b9b4-95c1-419d-b310-db6a53b09a39',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"3455b9b4-95c1-419d-b310-db6a53b09a39\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateKeyDescriptionResponse>\\n    <RequestId>3455b9b4-95c1-419d-b310-db6a53b09a39</RequestId>\\n</UpdateKeyDescriptionResponse>","errorExample":""}]',
            'title' => '更新主密钥描述信息',
            'description' => '将主密钥（CMK）的描述信息（[DescribeKey](~~28952~~)接口中的Description属性）替换为用户传入的值。使用此API可以对密钥的描述信息进行添加、变更、删除操作。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'EnableKey' => [
            'methods' => [
                'post',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'KeyId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '密钥ID。主密钥的全局唯一标识符。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1234abcd-12ab-34cd-56ef-12345678****',
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
                                'example' => 'efb1cbbd-a093-4278-bc03-639dd4fcc207',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter is not valid.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidAccessKeyId.NotFound',
                        'errorMessage' => 'The Access Key ID provided does not exist in our records.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"efb1cbbd-a093-4278-bc03-639dd4fcc207\\"\\n}","errorExample":"//xml response\\n\\n<KMS>\\n    <RequestId>efb1cbbd-a093-4278-bc03-639dd4fcc207</RequestId>\\n</KMS>\\n"},{"type":"xml","example":"<KMS>\\r\\n    <RequestId>efb1cbbd-a093-4278-bc03-639dd4fcc207</RequestId>\\r\\n</KMS>","errorExample":"//json response\\n{\\n\\"RequestId\\": \\"efb1cbbd-a093-4278-bc03-639dd4fcc207\\"\\n}\\n"}]',
            'title' => '启用指定的主密钥进行加解密',
            'summary' => '调用EnableKey接口启用指定的主密钥进行加解密。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DisableKey' => [
            'methods' => [
                'post',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'KeyId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '密钥ID。主密钥的全局唯一标识符。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1234abcd-12ab-34cd-56ef-12345678****',
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
                                'example' => '2fe70ce2-3303-4fd6-b3ac-472fb2705c62',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter is not valid.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'Forbidden.KeyNotFound',
                        'errorMessage' => 'The specified Key is not found.',
                    ],
                    [
                        'errorCode' => 'InvalidAccessKeyId.NotFound',
                        'errorMessage' => 'The Access Key ID provided does not exist in our records.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"2fe70ce2-3303-4fd6-b3ac-472fb2705c62\\"\\n}","errorExample":"//xml response\\n<KMS>\\n    <RequestId>2fe70ce2-3303-4fd6-b3ac-472fb2705c62</RequestId>\\n</KMS>\\n"},{"type":"xml","example":"<KMS>\\n    <RequestId>2fe70ce2-3303-4fd6-b3ac-472fb2705c62</RequestId>\\n</KMS>\\n","errorExample":"//json response\\n{\\n\\"RequestId\\": \\"2fe70ce2-3303-4fd6-b3ac-472fb2705c62\\"\\n}\\n"}]',
            'title' => '禁用指定的主密钥（CMK）进行加解密',
            'summary' => '调用DisableKey接口禁用指定的主密钥（CMK）进行加解密。',
            'description' => '使用说明：禁用主密钥后，原来使用该主密钥加密的密文无法解密。您可以调用[EnableKey](~~35150~~)将主密钥恢复至启用状态，然后解密密文。  '."\n"
                .'本文将提供一个示例，禁用ID为`1234abcd-12ab-34cd-56ef-12345678****`的主密钥进行加解密。',
            'requestParamsDescription' => ' 关于公共请求参数的详情，请参见[公共参数](~~69007~~)。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetPublicKey' => [
            'methods' => [
                'post',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'KeyId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '主密钥（CMK）的全局唯一标识符。该参数也可以被指定为CMK绑定的别名，详情见[别名使用说明](~~68522~~)。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '5c438b18-05be-40ad-b6c2-3be6752c****',
                    ],
                ],
                [
                    'name' => 'KeyVersionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '密钥版本的全局唯一标识符。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '2ab1a983-7072-4bbc-a582-584b5bd8****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'KeyVersionId' => [
                                'description' => '对明文数据进行加密的主密钥版本号。',
                                'type' => 'string',
                                'example' => '2ab1a983-7072-4bbc-a582-584b5bd8****',
                            ],
                            'KeyId' => [
                                'description' => 'CMK的全局唯一标识符。'."\n"
                                    ."\n"
                                    .'> 如果请求中的KeyId参数使用的是CMK的别名，在响应中会返回别名对应的CMK标识符。',
                                'type' => 'string',
                                'example' => '5c438b18-05be-40ad-b6c2-3be6752c****',
                            ],
                            'RequestId' => [
                                'description' => '随机的访问ID。',
                                'type' => 'string',
                                'example' => '475f1620-b9d3-4d35-b5c6-3fbdd941423d',
                            ],
                            'PublicKey' => [
                                'description' => 'PEM格式的公钥。',
                                'type' => 'string',
                                'example' => '-----BEGIN PUBLIC KEY-----\\nMIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAs5Yu9AEgATN2/e3nUz1K\\nEy6ng8MSPutcse2/VECG/NUF9C6D4IsJ64ShzY3dcn34WYzTOe916eMJFxyrNrSw\\nHtc4UOR5AvaoRrfpgu2uq+i70/ZXrWL+pGb1hgZV8cWheIHMxwrR3IiQlM5qN7EF\\n9BdyWtyBfUGsp0Bn1VqlPc5G0x0a9xU2z9YtP994yDenNVIoIQ6Cov1lIEuwXAb2\\n7boC41ePXwD0JWt41sP+rgCmpjBx00puIG+IlnoReEgI1ZGYmK98GgA/XzmNjZiD\\nyvXJZAcM33Ue85+PkR5iHTtSEbi4QAoqpJabprUzz3Fin2j1dRrcacxGb7p31A9c\\nJQIDAQAB\\n-----END PUBLIC KEY-----\\n',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter is not valid.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidAccessKeyId.NotFound',
                        'errorMessage' => 'The Access Key ID provided does not exist in our records.',
                    ],
                    [
                        'errorCode' => 'Forbidden.KeyNotFound',
                        'errorMessage' => 'The specified Key is not found.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"KeyVersionId\\": \\"2ab1a983-7072-4bbc-a582-584b5bd8****\\",\\n  \\"KeyId\\": \\"5c438b18-05be-40ad-b6c2-3be6752c****\\",\\n  \\"RequestId\\": \\"475f1620-b9d3-4d35-b5c6-3fbdd941423d\\",\\n  \\"PublicKey\\": \\"-----BEGIN PUBLIC KEY-----\\\\\\\\nMIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAs5Yu9AEgATN2/e3nUz1K\\\\\\\\nEy6ng8MSPutcse2/VECG/NUF9C6D4IsJ64ShzY3dcn34WYzTOe916eMJFxyrNrSw\\\\\\\\nHtc4UOR5AvaoRrfpgu2uq+i70/ZXrWL+pGb1hgZV8cWheIHMxwrR3IiQlM5qN7EF\\\\\\\\n9BdyWtyBfUGsp0Bn1VqlPc5G0x0a9xU2z9YtP994yDenNVIoIQ6Cov1lIEuwXAb2\\\\\\\\n7boC41ePXwD0JWt41sP+rgCmpjBx00puIG+IlnoReEgI1ZGYmK98GgA/XzmNjZiD\\\\\\\\nyvXJZAcM33Ue85+PkR5iHTtSEbi4QAoqpJabprUzz3Fin2j1dRrcacxGb7p31A9c\\\\\\\\nJQIDAQAB\\\\\\\\n-----END PUBLIC KEY-----\\\\\\\\n\\"\\n}","errorExample":""},{"type":"xml","example":"<KMS>\\n  <KeyId>5c438b18-05be-40ad-b6c2-3be6752c****</KeyId>\\n  <KeyVersionId>2ab1a983-7072-4bbc-a582-584b5bd8****</KeyVersionId>\\n  <PublicKey>-----BEGIN PUBLIC KEY-----\\\\nMIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAs5Yu9AEgATN2/e3nUz1K\\\\nEy6ng8MSPutcse2/VECG/NUF9C6D4IsJ64ShzY3dcn34WYzTOe916eMJFxyrNrSw\\\\nHtc4UOR5AvaoRrfpgu2uq+i70/ZXrWL+pGb1hgZV8cWheIHMxwrR3IiQlM5qN7EF\\\\n9BdyWtyBfUGsp0Bn1VqlPc5G0x0a9xU2z9YtP994yDenNVIoIQ6Cov1lIEuwXAb2\\\\n7boC41ePXwD0JWt41sP+rgCmpjBx00puIG+IlnoReEgI1ZGYmK98GgA/XzmNjZiD\\\\nyvXJZAcM33Ue85+PkR5iHTtSEbi4QAoqpJabprUzz3Fin2j1dRrcacxGb7p31A9c\\\\nJQIDAQAB\\\\n-----END PUBLIC KEY-----\\\\n</PublicKey>\\n  <RequestId>475f1620-b9d3-4d35-b5c6-3fbdd941423d</RequestId>\\n</KMS>","errorExample":""}]',
            'title' => '获取非对称密钥公钥',
            'summary' => '获取非对称密钥的公钥。可以在本地使用公钥进行加密、验签。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateAlias' => [
            'methods' => [
                'post',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'KeyId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'CMK的全局唯一标识符。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '7906979c-8e06-46a2-be2d-68e3ccbc****',
                    ],
                ],
                [
                    'name' => 'AliasName',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'CMK的别名名称。  '."\n"
                            .'长度为1~255个字符，必须包含前缀`alias/`，但不能以`alias/acs`保留字为前缀。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'alias/example',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '1d2baaf3-d357-46c2-832e-13560c2bd9cd',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter is not valid.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidAccessKeyId.NotFound',
                        'errorMessage' => 'The Access Key ID provided does not exist in our records.',
                    ],
                    [
                        'errorCode' => 'Forbidden.KeyNotFound',
                        'errorMessage' => 'The specified Key is not found.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1d2baaf3-d357-46c2-832e-13560c2bd9cd\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateAliasResponse>\\n    <RequestId>1d2baaf3-d357-46c2-832e-13560c2bd9cd</RequestId>\\n</CreateAliasResponse>","errorExample":""}]',
            'title' => '给主密钥（CMK）创建一个别名',
            'summary' => '调用CreateAlias接口为主密钥（CMK）创建一个别名。',
            'description' => '使用说明：'."\n"
                ."\n"
                .'- 每个别名只能表示一个CMK。 '."\n"
                ."\n"
                .'- 同一地域内的CMK别名必须唯一。 '."\n"
                ."\n"
                .'本文将提供一个示例，为密钥`7906979c-8e06-46a2-be2d-68e3ccbc****`创建名为`alias/example`的别名。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListAliases' => [
            'methods' => [
                'post',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '当前页数。'."\n"
                            .'取值范围：大于0的整数。'."\n"
                            .'默认值：1。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页返回的结果个数。'."\n"
                            .'取值范围：0~100。'."\n"
                            .'默认值：10。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
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
                                'example' => '1b57992c-834b-4811-a889-f8bac1ba0353',
                            ],
                            'PageNumber' => [
                                'description' => '当前页数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'PageSize' => [
                                'description' => '每页的返回结果个数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'TotalCount' => [
                                'description' => '返回的别名总数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'Aliases' => [
                                'type' => 'object',
                                'properties' => [
                                    'Alias' => [
                                        'description' => '用户别名。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'KeyId' => [
                                                    'description' => '别名对应的主密钥（CMK）。',
                                                    'type' => 'string',
                                                    'example' => '08c33a6f-4e0a-4a1b-a3fa-7ddfa1d****',
                                                ],
                                                'AliasArn' => [
                                                    'description' => '别名的ARN。',
                                                    'type' => 'string',
                                                    'example' => 'acs:kms:cn-hangzhou:123456:alias/ExampleAlias1',
                                                ],
                                                'AliasName' => [
                                                    'description' => '别名的唯一标识符。',
                                                    'type' => 'string',
                                                    'example' => 'alias/ExampleAlias1',
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
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter is not valid.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidAccessKeyId.NotFound',
                        'errorMessage' => 'The Access Key ID provided does not exist in our records.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1b57992c-834b-4811-a889-f8bac1ba0353\\",\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"TotalCount\\": 1,\\n  \\"Aliases\\": {\\n    \\"Alias\\": [\\n      {\\n        \\"KeyId\\": \\"08c33a6f-4e0a-4a1b-a3fa-7ddfa1d****\\",\\n        \\"AliasArn\\": \\"acs:kms:cn-hangzhou:123456:alias/ExampleAlias1\\",\\n        \\"AliasName\\": \\"alias/ExampleAlias1\\"\\n      }\\n    ]\\n  }\\n}","errorExample":"//xml response\\n<KMS>\\n        <Aliases>\\n                <Alias>\\n                        <AliasName>alias/ExampleAlias1</AliasName>\\n                        <KeyId>08c33a6f-4e0a-4a1b-a3fa-7ddfa1****</KeyId>\\n                        <AliasArn>acs:kms:cn-hangzhou:123456:alias/ExampleAlias1</AliasArn>\\n                </Alias>\\n        </Aliases>\\n        <TotalCount>1</TotalCount>\\n        <PageNumber>1</PageNumber>\\n        <PageSize>10</PageSize>\\n        <RequestId>1b57992c-834b-4811-a889-f8bac1ba0353</RequestId>\\n</KMS>\\n\\t\\t\\t"},{"type":"xml","example":"<KMS>\\r\\n        <Aliases>\\r\\n                <Alias>\\r\\n                        <AliasName>alias/ExampleAlias1</AliasName>\\r\\n                        <KeyId>08c33a6f-4e0a-4a1b-a3fa-7ddfa1****</KeyId>\\r\\n                        <AliasArn>acs:kms:cn-hangzhou:123456:alias/ExampleAlias1</AliasArn>\\r\\n                </Alias>\\r\\n        </Aliases>\\r\\n        <TotalCount>1</TotalCount>\\r\\n        <PageNumber>1</PageNumber>\\r\\n        <PageSize>10</PageSize>\\r\\n        <RequestId>1b57992c-834b-4811-a889-f8bac1ba0353</RequestId>\\r\\n</KMS>","errorExample":"//json response\\n{\\n        \\"Aliases\\": {\\n                \\"Alias\\": [\\n                        {\\n                                \\"AliasName\\": \\"alias/ExampleAlias1\\",\\n                                \\"KeyId\\": \\"08c33a6f-4e0a-4a1b-a3fa-7ddfa1d****\\",\\n                                \\"AliasArn\\": \\"acs:kms:cn-hangzhou:123456:alias/ExampleAlias1\\"\\n                        }\\n        ]\\n        },\\n        \\"TotalCount\\": 1,\\n        \\"PageNumber\\": 1,\\n        \\"PageSize\\": 10,\\n        \\"RequestId\\": \\"1b57992c-834b-4811-a889-f8bac1ba0353\\"\\n}\\n\\t\\t\\t"}]',
            'title' => '查询当前用户在当前地域的所有别名',
            'summary' => '调用ListAliases接口查询当前用户在当前地域的所有别名。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListAliasesByKeyId' => [
            'methods' => [
                'post',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'KeyId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '密钥的ID或密钥资源名称（ARN）。'."\n"
                            .'>访问其他阿里云账号下的密钥时，必须输入密钥ARN。密钥ARN的格式为`acs:kms:${region}:${account}:key/${keyid}`。'."\n"
                            ."\n",
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'key-hzz630494463ejqjx****',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '当前页数。'."\n"
                            .'取值范围：大于0的整数。'."\n"
                            .'默认值：1。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页返回的结果个数。'."\n"
                            .'取值范围：0~101。'."\n"
                            .'默认值：10。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '1b57992c-834b-4811-a889-f8bac1ba0353',
                            ],
                            'PageNumber' => [
                                'description' => '当前页数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'PageSize' => [
                                'description' => '每页的返回结果个数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'TotalCount' => [
                                'description' => '返回的密钥总数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'Aliases' => [
                                'type' => 'object',
                                'properties' => [
                                    'Alias' => [
                                        'description' => '别名。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'KeyId' => [
                                                    'description' => '密钥ID。如果请求中的KeyId参数使用的是密钥ARN，在响应中也会返回密钥ID。'."\n",
                                                    'type' => 'string',
                                                    'example' => 'key-hzz630494463ejqjx****',
                                                ],
                                                'AliasArn' => [
                                                    'description' => '别名的ARN。',
                                                    'type' => 'string',
                                                    'example' => 'acs:kms:cn-hangzhou:123456:alias/ExampleAlias1',
                                                ],
                                                'AliasName' => [
                                                    'description' => '别名的唯一标识符。',
                                                    'type' => 'string',
                                                    'example' => 'alias/ExampleAlias1',
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
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter is not valid.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidAccessKeyId.NotFound',
                        'errorMessage' => 'The Access Key ID provided does not exist in our records.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1b57992c-834b-4811-a889-f8bac1ba0353\\",\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"TotalCount\\": 1,\\n  \\"Aliases\\": {\\n    \\"Alias\\": [\\n      {\\n        \\"KeyId\\": \\"key-hzz630494463ejqjx****\\",\\n        \\"AliasArn\\": \\"acs:kms:cn-hangzhou:123456:alias/ExampleAlias1\\",\\n        \\"AliasName\\": \\"alias/ExampleAlias1\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListAliasesByKeyIdResponse>\\n    <RequestId>1b57992c-834b-4811-a889-f8bac1ba0353</RequestId>\\n    <PageNumber>1</PageNumber>\\n    <PageSize>10</PageSize>\\n    <TotalCount>1</TotalCount>\\n    <Aliases>\\n        <KeyId>key-hzz630494463ejqjx****</KeyId>\\n        <AliasArn>acs:kms:cn-hangzhou:123456:alias/ExampleAlias1</AliasArn>\\n        <AliasName>alias/ExampleAlias1</AliasName>\\n    </Aliases>\\n</ListAliasesByKeyIdResponse>","errorExample":""}]',
            'title' => '查询主密钥（CMK）所有别名',
            'summary' => '查询与指定主密钥（CMK）对应的所有别名。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteAlias' => [
            'methods' => [
                'post',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'AliasName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要操作的别名。    '."\n"
                            .'长度为1~255个字符，必须包含前缀alias/。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'alias/example',
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
                                'example' => '4c8ae23f-3a42-6791-a4ba-1faa77831c28',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter is not valid.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidAccessKeyId.NotFound',
                        'errorMessage' => 'The Access Key ID provided does not exist in our records.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4c8ae23f-3a42-6791-a4ba-1faa77831c28\\"\\n}","errorExample":""},{"type":"xml","example":"<KMS>\\r\\n        <RequestId>4c8ae23f-3a42-6791-a4ba-1faa77831c28</RequestId>\\r\\n</KMS>","errorExample":""}]',
            'title' => '删除别名',
            'summary' => '调用DeleteAlias接口删除别名。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'UpdateAlias' => [
            'methods' => [
                'post',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'KeyId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '新的密钥ID。主密钥的全局唯一标识符。  ',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1234abcd-12ab-34cd-56ef-12345678****',
                    ],
                ],
                [
                    'name' => 'AliasName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要操作的别名。  '."\n"
                            .'长度为1~255个字符，必须包含前缀alias/。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'alias/example',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '1d2baaf3-d357-46c2-832e-13560c2bd9cd',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1d2baaf3-d357-46c2-832e-13560c2bd9cd\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateAliasResponse>\\n    <RequestId>1d2baaf3-d357-46c2-832e-13560c2bd9cd</RequestId>\\n</UpdateAliasResponse>","errorExample":""}]',
            'title' => '更新主密钥（CMK）ID',
            'summary' => '更新已存在的别名所代表的主密钥（CMK）ID。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetParametersForImport' => [
            'methods' => [
                'post',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'KeyId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '主密钥的全局唯一标识符。'."\n"
                            ."\n"
                            .'> 密钥材料来源必须是外部，即Origin为EXTERNAL。 ',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '202b9877-5a25-46e3-a763-e20791b5****',
                    ],
                ],
                [
                    'name' => 'WrappingAlgorithm',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用于加密密钥材料的算法。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'RSAES_PKCS1_V1_5',
                    ],
                ],
                [
                    'name' => 'WrappingKeySpec',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用于加密密钥材料的公钥类型。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'RSA_2048',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'KeyId' => [
                                'description' => '主密钥全局唯一标识符。  '."\n"
                                    .'后续调用[ImportKeyMaterial](~~68622~~)时需要指定该参数。 ',
                                'type' => 'string',
                                'example' => '202b9877-5a25-46e3-a763-e20791b5****',
                            ],
                            'ImportToken' => [
                                'description' => '导入令牌。  '."\n"
                                    .'令牌的有效期为24小时。后续调用[ImportKeyMaterial](~~68622~~)时需要指定该参数。 ',
                                'type' => 'string',
                                'example' => 'Base64String',
                            ],
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '8cdf51fd-bcd6-d79a-0ef4-e52c9b5466dc',
                            ],
                            'TokenExpireTime' => [
                                'description' => '导入令牌的过期时间。 ',
                                'type' => 'string',
                                'example' => '2018-01-25T00:01:02Z',
                            ],
                            'PublicKey' => [
                                'description' => '用于加密密钥材料的公钥。  '."\n"
                                    .'采用Base64编码。',
                                'type' => 'string',
                                'example' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAlls4uIBxD0GG84C+lGBO6Dhpf1J3XimC6cPmPNaKKJMOzoX4tD+C+r7aZv8lZ3vnPfxuxvy/YwG+whUxTEEFUdqJTOIzhPfYucupqKM92crVHIuG+xtMVeHKjyTr+UrtKCsQikqHT+19yDRN/RMoo2HUx0gmEnRyXd8t3JyUXun9FdoxKA08GrsV7nodb9ZsoBLhnev7tTLcXvLyKW6XG1ZQCQm6dPnbnwLeDXR7uK0Lqn9PM28mBIdaiQUQxj2XbM1CoJA+JiyVX3Ptdb+4rqukb4Rb05B80Bs9xV/cf7FIku08l7xGhrGiQFq+DFXwQWtwihXHZxz3LhldU+4ZPwID****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'Unsupported.Origin',
                        'errorMessage' => 'This key origin is not valid for this api',
                    ],
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter is not valid.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidAccessKeyId.NotFound',
                        'errorMessage' => 'The Access Key ID provided does not exist in our records.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"KeyId\\": \\"202b9877-5a25-46e3-a763-e20791b5****\\",\\n  \\"ImportToken\\": \\"Base64String\\",\\n  \\"RequestId\\": \\"8cdf51fd-bcd6-d79a-0ef4-e52c9b5466dc\\",\\n  \\"TokenExpireTime\\": \\"2018-01-25T00:01:02Z\\",\\n  \\"PublicKey\\": \\"MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAlls4uIBxD0GG84C+lGBO6Dhpf1J3XimC6cPmPNaKKJMOzoX4tD+C+r7aZv8lZ3vnPfxuxvy/YwG+whUxTEEFUdqJTOIzhPfYucupqKM92crVHIuG+xtMVeHKjyTr+UrtKCsQikqHT+19yDRN/RMoo2HUx0gmEnRyXd8t3JyUXun9FdoxKA08GrsV7nodb9ZsoBLhnev7tTLcXvLyKW6XG1ZQCQm6dPnbnwLeDXR7uK0Lqn9PM28mBIdaiQUQxj2XbM1CoJA+JiyVX3Ptdb+4rqukb4Rb05B80Bs9xV/cf7FIku08l7xGhrGiQFq+DFXwQWtwihXHZxz3LhldU+4ZPwID****\\"\\n}","errorExample":""},{"type":"xml","example":"<GetParametersForImportResponse>\\n    <KeyId>202b9877-5a25-46e3-a763-e20791b5****</KeyId>\\n    <ImportToken>Base64String</ImportToken>\\n    <RequestId>8cdf51fd-bcd6-d79a-0ef4-e52c9b5466dc</RequestId>\\n    <TokenExpireTime>2018-01-25T00:01:02Z</TokenExpireTime>\\n    <PublicKey>MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAlls4uIBxD0GG84C+lGBO6Dhpf1J3XimC6cPmPNaKKJMOzoX4tD+C+r7aZv8lZ3vnPfxuxvy/YwG+whUxTEEFUdqJTOIzhPfYucupqKM92crVHIuG+xtMVeHKjyTr+UrtKCsQikqHT+19yDRN/RMoo2HUx0gmEnRyXd8t3JyUXun9FdoxKA08GrsV7nodb9ZsoBLhnev7tTLcXvLyKW6XG1ZQCQm6dPnbnwLeDXR7uK0Lqn9PM28mBIdaiQUQxj2XbM1CoJA+JiyVX3Ptdb+4rqukb4Rb05B80Bs9xV/cf7FIku08l7xGhrGiQFq+DFXwQWtwihXHZxz3LhldU+4ZPwID****</PublicKey>\\n</GetParametersForImportResponse>","errorExample":""}]',
            'title' => '获取导入主密钥（CMK）材料的参数',
            'summary' => '调用GetParametersForImport接口获取导入主密钥材料的参数。',
            'description' => '**使用说明**'."\n"
                ."\n"
                .'- 返回的参数可用于执行[ImportKeyMaterial](~~68622~~)。'."\n"
                ."\n"
                .'- 主密钥材料来源必须是外部，即Origin为EXTERNAL。'."\n"
                ."\n"
                .'- 本次调用返回的公钥和令牌必须搭配使用，且只能用于本次调用中指定的主密钥。'."\n"
                .'- 每次调用返回的公钥与令牌都不相同。  '."\n"
                .'- 您需要指定用于加密密钥材料的公钥类型和加密算法，对应关系如下表所示。  '."\n"
                .'| 公钥类型        | 加密算法           | 说明 |'."\n"
                .'| ------------- |------------   | ----- | '."\n"
                .'|RSA_2048 |RSAES\\_PKCS1\\_V1\\_5 <br>RSAES\\_OAEP\\_SHA\\_1 <br>RSAES\\_OAEP\\_SHA\\_256  |支持所有地域、任意保护级别的密钥。<br>专属KMS不支持RSAES\\_OAEP\\_SHA\\_1。 |'."\n"
                .'|EC_SM2 |SM2PKE  |SM2为中国国家密码管理局批准的密码算法，仅支持导入保护级别为HSM的密钥，KMS通过部署在中国内地的托管密码机提供支持。更多信息，请参见[托管密码机简介](~~125803~~)。 | '."\n"
                ."\n"
                .'更多信息，请参见[导入密钥材料](~~68523~~)。本文将提供一个示例，获取密钥ID为`1234abcd-12ab-34cd-56ef-12345678****`、加密算法为`RSAES_PKCS1_V1_5`、公钥类型为`RSA_2048`的主密钥材料参数，返回的主密钥材料参数包含密钥ID、用于加密密钥材料的公钥（PublicKey）、导入密钥材料的令牌（ImportToken）以及令牌的过期时间。'."\n",
            'requestParamsDescription' => '关于公共请求参数的详情，请参见[公共参数](~~69007~~)。'."\n",
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ImportKeyMaterial' => [
            'methods' => [
                'post',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'KeyId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '待导入的主密钥ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1234abcd-12ab-34cd-56ef-12345678****',
                    ],
                ],
                [
                    'name' => 'EncryptedKeyMaterial',
                    'in' => 'query',
                    'schema' => [
                        'description' => '使用**GetParametersForImport**返回的公钥加密并用base64编码后的密钥材料。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'bCPZx7I6v6KXsqEpr2OXKxuj2CCRtKdwp75Bw+BGncYqBdfjFBYRtOE6HRlT0oeiRDWzwnw9OA54OL36smDJrq4Lo9x0CyYDiuKnRkcKtMtlzW0din7Pd7IlZWWRdVueiw2qpzl7PkUWQGTdsdbzpfJJQ+qj/cRIrk/E83UGyeyytSpgnb+lu0xEYcPajRyWNsbi98N3pqqQzHXNNHO2NJqHlnQgglqTiBEjkGeKFhfKmTc3vjulIdVa3EaVIN6lwWfgx+UUYSrvbA77WDYKlDsZ4SbK2/T7za9Tp1qU7Ynqba7OKGVVj7PMbiaO80AxWZnjUMYCgEp5w7V+seOXqw==',
                    ],
                ],
                [
                    'name' => 'ImportToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '通过调用**GetParametersForImport**获得的导入令牌。 ',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'Base64String',
                    ],
                ],
                [
                    'name' => 'KeyMaterialExpireUnix',
                    'in' => 'query',
                    'schema' => [
                        'description' => '密钥材料过期时间。  '."\n"
                            .'不指定该参数或取值为0，表示密钥材料不会过期。'."\n"
                            ."\n"
                            .'> 取值不可早于调用该API的时间（以服务器时间为准）。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '0',
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
                                'example' => 'ec1017cf-ead4-f3ca-babc-c3b34f3dbecb',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidKeyMaterial',
                        'errorMessage' => 'key material is invalid',
                    ],
                    [
                        'errorCode' => 'InvalidImportToken',
                        'errorMessage' => 'import token is invalid',
                    ],
                    [
                        'errorCode' => 'ExpiredImportToken',
                        'errorMessage' => 'import token is expired',
                    ],
                    [
                        'errorCode' => 'Unsupported.Origin',
                        'errorMessage' => 'This key origin is not valid for this api',
                    ],
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter is not valid.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidAccessKeyId.NotFound',
                        'errorMessage' => 'The Access Key ID provided does not exist in our records.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"ec1017cf-ead4-f3ca-babc-c3b34f3dbecb\\"\\n}","errorExample":"//xml response\\n<KMS>\\n  <RequestId>ec1017cf-ead4-f3ca-babc-c3b34f3dbecb</RequestId>\\n</KMS>\\n"},{"type":"xml","example":"<KMS>\\n  <RequestId>ec1017cf-ead4-f3ca-babc-c3b34f3dbecb</RequestId>\\n</KMS>","errorExample":"//json response\\n{\\n        \\"RequestId\\":\\"ec1017cf-ead4-f3ca-babc-c3b34f3dbecb\\"\\n}\\n"}]',
            'title' => '导入密钥材料',
            'summary' => '调用ImportKeyMaterial接口导入密钥材料。',
            'description' => '调用[CreateKey](~~28947~~)创建主密钥时，可以选择其密钥材料来源为外部，即将**Origin**设置为**EXTERNAL**。此API用于将密钥材料导入符合上述描述的CMK中。'."\n"
                ."\n"
                .'- 要查看CMK的**Origin**，请参见[DescribeKey](~~28952~~)。'."\n"
                .'- 在导入密钥材料之前， 需要调用[GetParametersForImport](~~68621~~)先获得导入密钥材料需要的参数，即用于加密密钥材料的公钥（PublicKey）和导入令牌（ImportToken）。'."\n"
                ."\n"
                .'> - 对密钥类型为**Aliyun_AES_256**的CMK，密钥材料必须为256位；对密钥类型为**Aliyun_SM4**的CMK，密钥材料必须为128位。'."\n"
                .'> - 您可以为密钥材料设置过期时间，也可以设置其永不过期。'."\n"
                .'> - 您可以随时为指定的CMK重新导入密钥材料，并重新指定过期时间，但必须导入相同的密钥材料。'."\n"
                .'> - 导入的密钥材料过期或者被删除后，指定的CMK将无法使用，需要再次导入相同的密钥材料才可正常使用。'."\n"
                .'> - 同样的密钥材料可导入不同的CMK中，但使用其中一个CMK加密的数据或生成的数据密钥（Data Key）无法使用另一个CMK解密。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteKeyMaterial' => [
            'methods' => [
                'post',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'KeyId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '密钥ID。主密钥（CMK）的全局唯一标识符。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1234abcd-12ab-34cd-56ef-12345678****',
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
                                'example' => '4162a6af-bc99-40b3-a552-89dcc8aaf7c8',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter is not valid.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidAccessKeyId.NotFound',
                        'errorMessage' => 'The Access Key ID provided does not exist in our records.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4162a6af-bc99-40b3-a552-89dcc8aaf7c8\\"\\n}","errorExample":"//xml response\\n<KMS>\\n  <RequestId>4162a6af-bc99-40b3-a552-89dcc8aaf7c8</RequestId>\\n</KMS>\\n"},{"type":"xml","example":"<KMS>\\r\\n  <RequestId>4162a6af-bc99-40b3-a552-89dcc8aaf7c8</RequestId>\\r\\n</KMS>","errorExample":"//json response\\n{\\n        \\"RequestId\\": \\"4162a6af-bc99-40b3-a552-89dcc8aaf7c8\\"\\n}\\n"}]',
            'title' => '删除已导入的密钥材料',
            'summary' => '调用DeleteKeyMaterial接口删除已导入的密钥材料。',
            'description' => '此操作不会删除密钥材料对应的主密钥（CMK）。  '."\n"
                .'如果主密钥处于待删除状态，删除密钥材料不会改变密钥状态和预计删除时间；如果主密钥不处于待删除状态，删除密钥材料会使得密钥状态变更为等待导入。  '."\n"
                .'删除密钥材料后，您可以重新导入密钥材料，但必须与之前的密钥材料相同。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ScheduleKeyDeletion' => [
            'methods' => [
                'post',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'KeyId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '密钥ID。CMK全局唯一标识符。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '7906979c-8e06-46a2-be2d-68e3ccbc****',
                    ],
                ],
                [
                    'name' => 'PendingWindowInDays',
                    'in' => 'query',
                    'schema' => [
                        'description' => '密钥预删除周期。在这段时间内，您可以撤销删除处于待删除状态的密钥；预删除时间过后无法撤销删除。  '."\n"
                            .'取值范围：7~366。   '."\n"
                            .'单位：天。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'maximum' => '366',
                        'minimum' => '7',
                        'example' => '7',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '3da5b8cc-8107-40ac-a170-793cd181d7b7',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter is not valid.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidAccessKeyId.NotFound',
                        'errorMessage' => 'The Access Key ID provided does not exist in our records.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"3da5b8cc-8107-40ac-a170-793cd181d7b7\\"\\n}","errorExample":""},{"type":"xml","example":"<ScheduleKeyDeletionResponse>\\n    <RequestId>3da5b8cc-8107-40ac-a170-793cd181d7b7</RequestId>\\n</ScheduleKeyDeletionResponse>","errorExample":""}]',
            'title' => '申请删除一个指定的主密钥（CMK)',
            'summary' => '调用ScheduleKeyDeletion接口申请删除一个指定的主密钥（CMK)。',
            'description' => '在密钥预删除期间，密钥状态处于待删除状态，无法用于加密、解密、产生数据密钥操作。'."\n"
                ."\n"
                .'主密钥一旦删除，将无法恢复，使用该主密钥加密的内容及产生的数据密钥也将无法解密。因此，对于主密钥的删除，KMS只提供计划删除的方式，而不提供直接删除的方式。如果您有删除密钥方面的需求，可以通过[DisableKey](~~35151~~)禁用密钥。'."\n"
                ."\n"
                .'在申请删除主密钥的同时，需要指定一个预删除周期，该周期最少为7天，最多为366天。从申请删除主密钥的时刻开始，到删除周期之前，可以通过[CancelKeyDeletion](~~44197~~)撤销密钥删除的申请。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CancelKeyDeletion' => [
            'methods' => [
                'post',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'KeyId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '主密钥的全局唯一标识符。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1234abcd-12ab-34cd-56ef-12345678****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '3da5b8cc-8107-40ac-a170-793cd181d7b7',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter is not valid.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'Forbidden.KeyNotFound',
                        'errorMessage' => 'The specified Key is not found.',
                    ],
                    [
                        'errorCode' => 'InvalidAccessKeyId.NotFound',
                        'errorMessage' => 'The Access Key ID provided does not exist in our records.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"3da5b8cc-8107-40ac-a170-793cd181d7b7\\"\\n}","errorExample":""},{"type":"xml","example":"<CancelKeyDeletionResponse>\\n    <RequestId>3da5b8cc-8107-40ac-a170-793cd181d7b7</RequestId>\\n</CancelKeyDeletionResponse>","errorExample":""}]',
            'title' => '撤销密钥删除',
            'summary' => '调用CancelKeyDeletion接口撤销密钥删除。',
            'description' => '当密钥删除的申请撤销成功以后，密钥会处于启用状态。 ',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'SetDeletionProtection' => [
            'methods' => [
                'post',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'ProtectedResourceArn',
                    'in' => 'query',
                    'schema' => [
                        'description' => '待设置删除保护的CMK ARN。  '."\n"
                            .'您可以调用[DescribeKey](~~28952~~)接口查看CMK ARN（Arn）。  ',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'acs:kms:cn-hangzhou:123213123****:key/0225f411-b21d-46d1-be5b-93931c82****',
                    ],
                ],
                [
                    'name' => 'EnableDeletionProtection',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否开启删除保护，取值：'."\n"
                            ."\n"
                            .'- true：开启删除保护。'."\n"
                            ."\n"
                            .'- false（默认值）：关闭删除保护。',
                        'type' => 'boolean',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'DeletionProtectionDescription',
                    'in' => 'query',
                    'schema' => [
                        'description' => '删除保护描述。  '."\n"
                            ."\n"
                            .'> 当EnableDeletionProtection取值为true时该参数有效。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '该密钥正在被XXX服务使用。已为您设置删除保护。',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '3455b9b4-95c1-419d-b310-db6a53b09a39',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"3455b9b4-95c1-419d-b310-db6a53b09a39\\"\\n}","errorExample":""},{"type":"xml","example":"<SetDeletionProtectionResponse>\\n    <RequestId>3455b9b4-95c1-419d-b310-db6a53b09a39</RequestId>\\n</SetDeletionProtectionResponse>","errorExample":""}]',
            'title' => '设置删除保护',
            'summary' => '为用户主密钥（CMK）开启或关闭删除保护。',
            'description' => '使用说明：  '."\n"
                ."\n"
                .'- 当您为CMK开启删除保护后，将无法删除该CMK。如果需要删除CMK，需提前关闭删除保护。  '."\n"
                ."\n"
                .'- 调用SetDeletionProtection接口前，请确保CMK不处于待删除状态。您可以调用[DescribeKey](~~28952~~)接口查看CMK的状态（KeyState）。    '."\n"
                ."\n"
                .'本文将提供一个示例，为CMK ARN（ProtectedResourceArn）为`acs:kms:cn-hangzhou:123213123****:key/0225f411-b21d-46d1-be5b-93931c82****`的CMK开启删除保护。'."\n"
                .'  '."\n",
            'requestParamsDescription' => '关于公共请求参数的详情，请参见[公共参数](~~69007~~)。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'UpdateRotationPolicy' => [
            'methods' => [
                'post',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'KeyId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '密钥ID，即密钥的全局唯一标识符。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'key-hzz62f1cb66fa42qo****',
                    ],
                ],
                [
                    'name' => 'EnableAutomaticRotation',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否开启周期性自动轮转。取值：'."\n"
                            ."\n"
                            .'- true：开启。'."\n"
                            ."\n"
                            .'- false：关闭。'."\n"
                            .'                           ',
                        'type' => 'boolean',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'RotationInterval',
                    'in' => 'query',
                    'schema' => [
                        'description' => '自动轮转的时间周期。格式为integer\\[unit]，其中integer表示时间长度，unit表示时间单位。合法的unit单位为：d（天）、h（小时）、m（分钟）、s（秒）。7d或者604800s均表示7天的周期。取值：'."\n"
                            ."\n"
                            .'- 默认密钥：仅支持设置为365天。'."\n"
                            ."\n"
                            .'- 软件密钥：7~365天。'."\n"
                            ."\n"
                            .'> 当EnableAutomaticRotation参数为true时，必须设置此参数，否则无需设置。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '30d',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => 'efb1cbbd-a093-4278-bc03-639dd4fcc207',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'Rejected.UnsupportedOperation',
                        'errorMessage' => 'Unsupported operation.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter RotationInterval is not valid.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'Forbidden.KeyNotFound',
                        'errorMessage' => 'The specified Key is not found.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"efb1cbbd-a093-4278-bc03-639dd4fcc207\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateRotationPolicyResponse>\\n    <RequestId>efb1cbbd-a093-4278-bc03-639dd4fcc207</RequestId>\\n</UpdateRotationPolicyResponse>","errorExample":""}]',
            'title' => '更新密钥轮转策略',
            'summary' => '更新密钥轮转策略。',
            'description' => '开启周期性自动轮转后，将在上一次轮转时间加上轮转周期天数后，自动创建一个新的密钥版本，并将它设置为主版本。'."\n"
                ."\n"
                .'- 仅默认密钥、软件密钥管理实例中的对称密钥支持周期性自动轮转。'."\n"
                ."\n"
                .'- 默认密钥轮转为增值服务，需要您单独付费购买。软件密钥轮转消耗KMS实例的密钥配额，每个密钥版本消耗一个配额，例如密钥有V1、V2、V3三个密钥版本，则消耗3个密钥配额。'."\n"
                ."\n"
                .'- 仅由KMS生成密钥材料的密钥支持轮转，自行导入密钥材料的密钥（BYOK）不支持轮转。'."\n"
                ."\n"
                .'- 仅处于已启用状态的密钥支持轮转。当密钥处于已禁用或待删除状态时，已开启的轮转功能会被停止，当密钥重新启用时，轮转功能会重新启动。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeKeyVersion' => [
            'methods' => [
                'post',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'KeyId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '密钥的ID，也可以指定为密钥别名或密钥资源名称（ARN）。关于别名的详细介绍，请参见[管理密钥别名](~~480655~~)。'."\n"
                            .'>访问其他阿里云账号下的密钥时，必须输入密钥ARN。密钥ARN的格式为`acs:kms:${region}:${account}:key/${keyid}`。'."\n"
                            ."\n",
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'key-hzz630494463ejqjx****',
                    ],
                ],
                [
                    'name' => 'KeyVersionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '密钥版本的全局唯一标识符。  '."\n"
                            .'您可以调用[ListKeyVersions](~~133966~~)接口，获取KeyVersionId。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '2ab1a983-7072-4bbc-a582-584b5bd8****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '7021b6ec-4be7-4d3c-8a68-1e85d4d515a0',
                            ],
                            'KeyVersion' => [
                                'description' => '密钥版本的元数据。',
                                'type' => 'object',
                                'properties' => [
                                    'KeyId' => [
                                        'description' => '密钥ID。如果请求中的KeyId参数使用的是密钥别名、密钥ARN，在响应中也会返回密钥ID。'."\n",
                                        'type' => 'string',
                                        'example' => 'key-hzz630494463ejqjx****',
                                    ],
                                    'KeyVersionId' => [
                                        'description' => '密钥版本的全局唯一标识符。',
                                        'type' => 'string',
                                        'example' => '2ab1a983-7072-4bbc-a582-584b5bd8****',
                                    ],
                                    'CreationDate' => [
                                        'description' => '创建密钥版本时的日期和时间（UTC时间）。',
                                        'type' => 'string',
                                        'example' => '2024-03-25T10:42:40Z',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter is not valid.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidAccessKeyId.NotFound',
                        'errorMessage' => 'The Access Key ID provided does not exist in our records.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"7021b6ec-4be7-4d3c-8a68-1e85d4d515a0\\",\\n  \\"KeyVersion\\": {\\n    \\"KeyId\\": \\"key-hzz630494463ejqjx****\\",\\n    \\"KeyVersionId\\": \\"2ab1a983-7072-4bbc-a582-584b5bd8****\\",\\n    \\"CreationDate\\": \\"2024-03-25T10:42:40Z\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeKeyVersionResponse>\\n    <RequestId>7021b6ec-4be7-4d3c-8a68-1e85d4d515a0</RequestId>\\n    <KeyVersion>\\n        <KeyId>key-hzz630494463ejqjx****</KeyId>\\n        <KeyVersionId>2ab1a983-7072-4bbc-a582-584b5bd8****</KeyVersionId>\\n        <CreationDate>2024-03-25T10:42:40Z</CreationDate>\\n    </KeyVersion>\\n</DescribeKeyVersionResponse>","errorExample":""}]',
            'title' => '查询指定密钥版本信息',
            'summary' => '调用DescribeKeyVersion接口查询指定密钥版本信息。',
            'description' => '本文将提供一个示例，为您查询密钥`key-hzz630494463ejqjx****'."\n"
                .'`的密钥版本信息，密钥版本ID为`2ab1a983-7072-4bbc-a582-584b5bd8****`。返回结果显示，密钥版本的创建时间为`2024-03-25T10:42:40Z`。'."\n",
            'requestParamsDescription' => ' 关于公共请求参数的详情，请参见[公共参数](~~69007~~)。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateKeyVersion' => [
            'summary' => '调用CreateKeyVersion接口为用户主密钥（CMK）创建密钥版本。',
            'methods' => [
                'post',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'KeyId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '密钥ID，即密钥的全局唯一标识符。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'key-hzz62f1cb66fa42qo***',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => 'b96f250a-4b75-498c-91be-22c6928f85be',
                            ],
                            'KeyVersion' => [
                                'description' => '密钥版本的元数据。',
                                'type' => 'object',
                                'properties' => [
                                    'KeyId' => [
                                        'description' => '密钥ID。  ',
                                        'type' => 'string',
                                        'example' => 'key-hzz62f1cb66fa42qo****',
                                    ],
                                    'KeyVersionId' => [
                                        'description' => '密钥版本ID。',
                                        'type' => 'string',
                                        'example' => 'key-hzz62f1cb66fa42qo****-20v29b****',
                                    ],
                                    'CreationDate' => [
                                        'description' => '创建密钥版本的时间（UTC时间）。',
                                        'type' => 'string',
                                        'example' => '2023-07-02T10:38:27Z',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'Rejected.UnsupportedOperation',
                        'errorMessage' => 'Unsupported operation.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'Forbidden.AliasNotFound',
                        'errorMessage' => 'The specified Alias is not found.',
                    ],
                    [
                        'errorCode' => 'Forbidden.KeyNotFound',
                        'errorMessage' => 'The specified Key is not found.',
                    ],
                ],
                409 => [
                    [
                        'errorCode' => 'Rejected.Disabled',
                        'errorMessage' => 'The request was rejected because the key state is Disabled.',
                    ],
                    [
                        'errorCode' => 'Rejected.Unavailable',
                        'errorMessage' => 'The request was rejected because the key state is Unavailable.',
                    ],
                    [
                        'errorCode' => 'Rejected.PendingDeletion',
                        'errorMessage' => 'The request was rejected because the key state is PendingDeletion.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"b96f250a-4b75-498c-91be-22c6928f85be\\",\\n  \\"KeyVersion\\": {\\n    \\"KeyId\\": \\"key-hzz62f1cb66fa42qo****\\",\\n    \\"KeyVersionId\\": \\"key-hzz62f1cb66fa42qo****-20v29b****\\",\\n    \\"CreationDate\\": \\"2023-07-02T10:38:27Z\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<CreateKeyVersionResponse>\\n    <RequestId>b96f250a-4b75-498c-91be-22c6928f85be</RequestId>\\n    <KeyVersion>\\n        <KeyId>key-hzz62f1cb66fa42qo****</KeyId>\\n        <KeyVersionId>key-hzz62f1cb66fa42qo****-20v29b****</KeyVersionId>\\n        <CreationDate>2023-07-02T10:38:27Z</CreationDate>\\n    </KeyVersion>\\n</CreateKeyVersionResponse>","errorExample":""}]',
            'title' => '为主密钥创建一个新的密钥版本',
            'description' => '- 仅软件密钥管理实例中的对称密钥支持创建密钥版本，且密钥状态必须处于启用中。您可以调用[DescribeKey](~~28952~~) 接口查询密钥状态。'."\n"
                ."\n"
                .'- 每创建一个密钥版本，就会消耗一个密钥额度。'."\n"
                ."\n"
                .'本文将提供一个示例，为密钥ID为`key-hzz62f1cb66fa42qo****`的密钥创建密钥版本。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListKeyVersions' => [
            'methods' => [
                'post',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'KeyId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '密钥的ID，也可以指定为密钥别名或密钥资源名称（ARN）。关于别名的详细介绍，请参见[管理密钥别名](~~480655~~)。'."\n"
                            .'>访问其他阿里云账号下的密钥时，必须输入密钥ARN。密钥ARN的格式为`acs:kms:${region}:${account}:key/${keyid}`。'."\n",
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'key-hzz630494463ejqjx****',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '当前页数。  '."\n"
                            .'取值为大于0的整数。  '."\n"
                            .'默认值：1。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页返回的结果个数。  '."\n"
                            .'取值范围：0~101。  '."\n"
                            .'默认值：10。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'PageSize' => [
                                'description' => '每页的返回结果个数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。'."\n",
                                'type' => 'string',
                                'example' => 'f71204c4-53cd-4eea-b405-653ba2db7e86',
                            ],
                            'PageNumber' => [
                                'description' => '当前页数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'TotalCount' => [
                                'description' => '返回的密钥版本总数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '3',
                            ],
                            'KeyVersions' => [
                                'type' => 'object',
                                'properties' => [
                                    'KeyVersion' => [
                                        'description' => '返回的密钥版本数组。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '返回的密钥版本数组。',
                                            'type' => 'object',
                                            'properties' => [
                                                'KeyId' => [
                                                    'description' => '密钥ID。如果请求中的KeyId参数使用的是密钥别名、密钥ARN，在响应中也会返回密钥ID。',
                                                    'type' => 'string',
                                                    'example' => 'key-hzz630494463ejqjx****',
                                                ],
                                                'KeyVersionId' => [
                                                    'description' => '密钥版本的全局唯一标识符。',
                                                    'type' => 'string',
                                                    'example' => '1e3304fd-68ac-4d5b-8886-ae5f01a1****',
                                                ],
                                                'CreationDate' => [
                                                    'description' => '创建密钥版本时的日期和时间（UTC时间）。',
                                                    'type' => 'string',
                                                    'example' => '2024-03-25T10:42:40Z',
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
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter is not valid.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidAccessKeyId.NotFound',
                        'errorMessage' => 'The Access Key ID provided does not exist in our records.',
                    ],
                    [
                        'errorCode' => 'Forbidden.KeyNotFound',
                        'errorMessage' => 'The specified Key is not found.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"PageSize\\": 10,\\n  \\"RequestId\\": \\"f71204c4-53cd-4eea-b405-653ba2db7e86\\",\\n  \\"PageNumber\\": 1,\\n  \\"TotalCount\\": 3,\\n  \\"KeyVersions\\": {\\n    \\"KeyVersion\\": [\\n      {\\n        \\"KeyId\\": \\"key-hzz630494463ejqjx****\\",\\n        \\"KeyVersionId\\": \\"1e3304fd-68ac-4d5b-8886-ae5f01a1****\\",\\n        \\"CreationDate\\": \\"2024-03-25T10:42:40Z\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListKeyVersionsResponse>\\n    <PageSize>10</PageSize>\\n    <RequestId>f71204c4-53cd-4eea-b405-653ba2db7e86</RequestId>\\n    <PageNumber>1</PageNumber>\\n    <TotalCount>3</TotalCount>\\n    <KeyVersions>\\n        <KeyId>key-hzz630494463ejqjx****</KeyId>\\n        <KeyVersionId>1e3304fd-68ac-4d5b-8886-ae5f01a1****</KeyVersionId>\\n        <CreationDate>2024-03-25T10:42:40Z</CreationDate>\\n    </KeyVersions>\\n</ListKeyVersionsResponse>","errorExample":""}]',
            'title' => '列出主密钥的所有密钥版本',
            'summary' => '调用ListKeyVersions接口列出主密钥的所有密钥版本。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GenerateDataKey' => [
            'summary' => '调用GenerateDataKey接口生成一个随机的数据密钥，用于本地数据加密。',
            'methods' => [
                'post',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'KeyId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '密钥的ID，也可以指定为密钥别名或密钥资源名称（ARN）。关于别名的详细介绍，请参见[管理密钥别名](~~480655~~)。'."\n"
                            .'>访问其他阿里云账号下的密钥时，必须输入密钥ARN。密钥ARN的格式为`acs:kms:${region}:${account}:key/${keyid}`。'."\n"
                            ."\n"
                            .'                           ',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'key-hzz630494463ejqjx****',
                    ],
                ],
                [
                    'name' => 'KeySpec',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定生成的数据密钥的长度，取值：'."\n"
                            ."\n"
                            .'- AES_256：256比特的对称密钥。'."\n"
                            ."\n"
                            .'- AES_128：128比特的对称密钥。'."\n"
                            ."\n"
                            .'> 建议使用KeySpec或者NumberOfBytes来指定数据密钥长度。如果两者都不指定，KMS生成256比特的数据密钥；如果两者都被指定，KMS会忽略KeySpec参数。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'AES_256',
                        'enum' => [
                            'AES_256',
                            ' AES_128',
                        ],
                    ],
                ],
                [
                    'name' => 'NumberOfBytes',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定生成的数据密钥的长度，单位为字节。'."\n"
                            ."\n"
                            .'取值：1~1024。'."\n"
                            ."\n"
                            .'默认值：'."\n"
                            .'- 当KeySpec取值为AES_256时，NumberOfBytes默认值为32。'."\n"
                            .'- 当KeySpec取值为AES_128时，NumberOfBytes默认值为16。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '1024',
                        'minimum' => '0',
                        'example' => '256',
                    ],
                ],
                [
                    'name' => 'EncryptionContext',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => 'key/value对的JSON字符串。'."\n"
                            ."\n"
                            .'如果指定了该参数，则在调用[Decrypt](~~28950~~)接口时需要提供同样的参数。更多信息，请参见[EncryptionContext](~~42975~~)。'."\n"
                            .'                           ',
                        'type' => 'object',
                        'required' => false,
                        'example' => '{"Example":"Example"}',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'KeyVersionId' => [
                                'description' => '密钥版本ID。主密钥版本的全局唯一标识符。',
                                'type' => 'string',
                                'example' => '2ab1a983-7072-4bbc-a582-584b5bd8****',
                            ],
                            'KeyId' => [
                                'description' => '密钥ID。如果请求中的KeyId参数使用的是密钥别名、密钥ARN，在响应中也会返回密钥ID。',
                                'type' => 'string',
                                'example' => 'key-hzz630494463ejqjx****',
                            ],
                            'CiphertextBlob' => [
                                'description' => '数据密钥被指定密钥的主版本加密后的密文。',
                                'type' => 'string',
                                'example' => 'ODZhOWVmZDktM2QxNi00ODk0LWJkNGYtMWZjNDNmM2YyYWJmS7FmDBBQ0BkKsQrtRnidtPwirmDcS0ZuJCU41xxAAWk4Z8qsADfbV0b+i6kQmlvj79dJdGOvtX69Uycs901qOjop4bTS****',
                            ],
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '7021b6ec-4be7-4d3c-8a68-1e85d4d515a0',
                            ],
                            'Plaintext' => [
                                'description' => '数据密钥的明文经过Base64编码后的值。',
                                'type' => 'string',
                                'example' => 'QmFzZTY0IGVuY29kZWQgcGxhaW50****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'UnsupportedOperation',
                        'errorMessage' => 'This action is not supported.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'Forbidden.AliasNotFound',
                        'errorMessage' => 'The specified Alias is not found.',
                    ],
                    [
                        'errorCode' => 'Forbidden.KeyNotFound',
                        'errorMessage' => 'The specified Key is not found.',
                    ],
                ],
                409 => [
                    [
                        'errorCode' => 'Rejected.Disabled',
                        'errorMessage' => 'The request was rejected because the key state is Disabled.',
                    ],
                    [
                        'errorCode' => 'Rejected.PendingDeletion',
                        'errorMessage' => 'The request was rejected because the key state is PendingDeletion.',
                    ],
                    [
                        'errorCode' => 'Rejected.Unavailable',
                        'errorMessage' => 'The request was rejected because the key state is Unavailable.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"KeyVersionId\\": \\"2ab1a983-7072-4bbc-a582-584b5bd8****\\",\\n  \\"KeyId\\": \\"key-hzz630494463ejqjx****\\",\\n  \\"CiphertextBlob\\": \\"ODZhOWVmZDktM2QxNi00ODk0LWJkNGYtMWZjNDNmM2YyYWJmS7FmDBBQ0BkKsQrtRnidtPwirmDcS0ZuJCU41xxAAWk4Z8qsADfbV0b+i6kQmlvj79dJdGOvtX69Uycs901qOjop4bTS****\\",\\n  \\"RequestId\\": \\"7021b6ec-4be7-4d3c-8a68-1e85d4d515a0\\",\\n  \\"Plaintext\\": \\"QmFzZTY0IGVuY29kZWQgcGxhaW50****\\"\\n}","errorExample":""},{"type":"xml","example":"<GenerateDataKeyResponse>\\n    <KeyVersionId>2ab1a983-7072-4bbc-a582-584b5bd8****</KeyVersionId>\\n    <KeyId>key-hzz630494463ejqjx****</KeyId>\\n    <CiphertextBlob>ODZhOWVmZDktM2QxNi00ODk0LWJkNGYtMWZjNDNmM2YyYWJmS7FmDBBQ0BkKsQrtRnidtPwirmDcS0ZuJCU41xxAAWk4Z8qsADfbV0b+i6kQmlvj79dJdGOvtX69Uycs901qOjop4bTS****</CiphertextBlob>\\n    <RequestId>7021b6ec-4be7-4d3c-8a68-1e85d4d515a0</RequestId>\\n    <Plaintext>QmFzZTY0IGVuY29kZWQgcGxhaW50****</Plaintext>\\n</GenerateDataKeyResponse>","errorExample":""}]',
            'title' => '生成一个数据密钥',
            'description' => '### 注意事项'."\n"
                ."\n"
                .'- 非KMS实例中的密钥：进行密码运算时，仅支持通过阿里云SDK调用OpenAPI。'."\n"
                ."\n"
                .'- KMS实例中的密钥：进行密码运算时，支持如下两种方式。'."\n"
                ."\n"
                .'  - 方式一（推荐）：通过KMS实例SDK调用KMS实例API。详细介绍，请参见[KMS实例SDK](~~601593~~)、[KMS实例API](~~601485~~)。'."\n"
                .'  - 方式二：通过阿里云SDK调用OpenAPI，但认证方式仅支持可信实体为阿里云服务的RAM角色。详细信息，请参见[创建可信实体为阿里云服务的RAM角色](~~116800~~)。'."\n"
                ."\n"
                .'### QPS限制'."\n"
                .'本接口的单用户QPS限制为750次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。'."\n"
                ."\n\n"
                .'### 详细说明'."\n"
                .'API随机生成的数据密钥通过您指定的主密钥（CMK）加密后，返回数据密钥的密文和明文。您可以使用返回的数据密钥明文，在KMS之外对数据进行本地离线加密。在存储加密后的数据时，也需要存储数据密钥的密文。您可以通过响应中的Plaintext字段获取到数据密钥的明文，通过CiphertextBlob字段获取到数据密钥的密文。'."\n"
                ."\n"
                .'在请求中指定的CMK，仅会被用作数据密钥的加密，和数据密钥的生成无关。KMS不会记录或存储随机生成的数据密钥，您需要负责对数据密钥（密文）进行持久化。'."\n"
                ."\n"
                .'建议您使用以下方式在本地进行数据加密：'."\n"
                ."\n"
                .'1.调用GenerateDataKey接口，获得用于数据加密的密钥。'."\n"
                ."\n"
                .'2.使用数据密钥的明文（通过响应中的Plaintext字段返回），在本地完成离线数据加密，随后清除内存中的数据密钥明文。'."\n"
                ."\n"
                .'3.将数据密钥的密文（通过响应中的CiphertextBlob字段返回），和本地离线加密后的数据一并进行存储。'."\n"
                ."\n"
                .'在本地解密数据：'."\n"
                ."\n"
                .'- 调用[Decrypt](~~28950~~)接口解密本地存储的数据密钥的密文。该操作将返回数据密钥的明文。'."\n"
                .'- 使用数据密钥的明文，在本地完成离线数据解密，随后清除内存中的数据密钥明文。'."\n"
                ."\n"
                .'本文将提供一个示例，为ID为`key-hzz630494463ejqjx****`的密钥生成随机的数据密钥。',
            'requestParamsDescription' => '关于公共请求参数的详情，请参见[公共参数](~~69007~~)。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GenerateAndExportDataKey' => [
            'methods' => [
                'post',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'KeyId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '密钥的ID，也可以指定为密钥别名或密钥资源名称（ARN）。关于别名的详细介绍，请参见[管理密钥别名](~~480655~~)。'."\n"
                            .'>访问其他阿里云账号下的密钥时，必须输入密钥ARN。密钥ARN的格式为`acs:kms:${region}:${account}:key/${keyid}`。'."\n",
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1234abcd-12ab-34cd-56ef-12345678****',
                    ],
                ],
                [
                    'name' => 'KeySpec',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定生成的数据密钥的长度，取值：'."\n"
                            ."\n"
                            .'- AES_256：256位的对称密钥。'."\n"
                            .'- AES_128：128位的对称密钥。'."\n"
                            ."\n"
                            .'> 建议使用KeySpec或者NumberOfBytes来指定数据密钥长度。如果两者都不指定，KMS生成256位的数据密钥；如果两者都被指定，KMS会忽略KeySpec参数。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'AES_256',
                        'enum' => [
                            'AES_256',
                            ' AES_128',
                        ],
                    ],
                ],
                [
                    'name' => 'NumberOfBytes',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定生成的数据密钥的长度。'."\n"
                            ."\n"
                            .'取值：1~1024。'."\n"
                            ."\n"
                            .'单位：字节。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '1024',
                        'minimum' => '0',
                        'example' => '32',
                    ],
                ],
                [
                    'name' => 'EncryptionContext',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => 'key/value对的JSON字符串，如果指定了该参数，则在解密或者使用其他密钥转加密时需要提供同样的参数，详情请参见[EncryptionContext说明](~~42975~~)。',
                        'type' => 'object',
                        'required' => false,
                        'example' => '{"Example":"Example"}',
                    ],
                ],
                [
                    'name' => 'PublicKeyBlob',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Base64编码的公钥。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAndKfC2ReLL2+y8a0+ZBBeAft/uBYo86GZiYJuflqgUzKxpyuvlo3uQkBv6b+nx+0tz8g8v7GhpPWMSW5L9mNHYsvYFsa7jTxsYdt17yj6GlUHPuMIs8hr5qbwl38IHU1iIa7nYWwE2fb3ePOvLDACRJVgGpU0yxioW80d2QD+9aU4jF5dlAahcfgsNzo2CXzCUc1+xbmNuq7Rp+H9VJB9dyYOwqnW3RhOLBo21FzpORapf0UiRlrHRpk1V6ez+aE1dofaYh/9bh0m6ioxj7j5hpZbWccuEZTMBKd+cbuBkRhJzc6Tti6qwZbDiu4fUwbZS0Tqpuo1UadiyxMW********',
                    ],
                ],
                [
                    'name' => 'WrappingKeySpec',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'PublicKeyBlob密钥的类型。密钥类型详情，请参见[非对称密钥简介](~~148147~~)。  '."\n"
                            .'取值：'."\n"
                            ."\n"
                            .'- RSA_2048'."\n"
                            .'- EC_SM2  '."\n"
                            .'  '."\n",
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'RSA_2048',
                    ],
                ],
                [
                    'name' => 'WrappingAlgorithm',
                    'in' => 'query',
                    'schema' => [
                        'description' => '使用PublicKeyBlob所指定的公钥，加密（Wrap）数据密钥时的加密算法。算法详情，请参见[AsymmetricDecrypt](~~148130~~)。  '."\n"
                            .'取值：'."\n"
                            ."\n"
                            .'- RSAES_OAEP_SHA_256'."\n"
                            .'- RSAES_OAEP_SHA_1'."\n"
                            .'- SM2PKE  '."\n"
                            .'  '."\n",
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'RSAES_OAEP_SHA_256',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'KeyVersionId' => [
                                'description' => '用于加密明文的密钥版本标识符。是指定KMS密钥的主版本。',
                                'type' => 'string',
                                'example' => '2ab1a983-7072-4bbc-a582-584b5bd8****',
                            ],
                            'KeyId' => [
                                'description' => '密钥ID。如果请求中的KeyId参数使用的是密钥别名、密钥ARN，在响应中也会返回密钥ID。'."\n"
                                    ."\n",
                                'type' => 'string',
                                'example' => '599fa825-17de-417e-9554-bb032cc6****',
                            ],
                            'CiphertextBlob' => [
                                'description' => '数据密钥被指定KMS密钥的主版本加密后的密文。',
                                'type' => 'string',
                                'example' => 'ODZhOWVmZDktM2QxNi00ODk0LWJkNGYtMWZjNDNmM2YyYWJmS7FmDBBQ0BkKsQrtRnidtPwirmDcS0ZuJCU41xxAAWk4Z8qsADfbV0b+i6kQmlvj79dJdGOvtX69Uycs901qOjop4bTS****',
                            ],
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '7021b6ec-4be7-4d3c-8a68-1e85d4d515a0',
                            ],
                            'ExportedDataKey' => [
                                'description' => '公钥加密保护导出的数据密钥。',
                                'type' => 'string',
                                'example' => 'BQKP+1zK6+ZEMxTP5qaVzcsgXtWplYBKm0NXdSnB5FzliFxE1bSiu4dnEIlca2JpeH7yz1/S6fed630H+hIH6DoM25fTLNcKj+mFB0Xnh9m2+HN59Mn4qyTfcUeadnfCXSWcGBouhXFwcdd2rJ3n337bzTf4jm659gZu3L0i6PLuxM9p7mqdwO0cKJPfGVfhnfMz+f4alMg79WB/NNyE2lyX7/qxvV49ObNrrJbKSFiz8Djocaf0IESNLMbfYI5bXjWkJlX92DQbKhibtQW8ZOJ//ZC6t0AWcUoKL6QDm/dg5koQalcleRinpB+QadFm894sLbVZ9+N4GVs*******',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter is not valid.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'Forbidden.KeyNotFound',
                        'errorMessage' => 'The specified Key is not found.',
                    ],
                    [
                        'errorCode' => 'InvalidAccessKeyId.NotFound',
                        'errorMessage' => 'The Access Key ID provided does not exist in our records.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalFailure',
                        'errorMessage' => 'InternalFailure',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"KeyVersionId\\": \\"2ab1a983-7072-4bbc-a582-584b5bd8****\\",\\n  \\"KeyId\\": \\"599fa825-17de-417e-9554-bb032cc6****\\",\\n  \\"CiphertextBlob\\": \\"ODZhOWVmZDktM2QxNi00ODk0LWJkNGYtMWZjNDNmM2YyYWJmS7FmDBBQ0BkKsQrtRnidtPwirmDcS0ZuJCU41xxAAWk4Z8qsADfbV0b+i6kQmlvj79dJdGOvtX69Uycs901qOjop4bTS****\\",\\n  \\"RequestId\\": \\"7021b6ec-4be7-4d3c-8a68-1e85d4d515a0\\",\\n  \\"ExportedDataKey\\": \\"BQKP+1zK6+ZEMxTP5qaVzcsgXtWplYBKm0NXdSnB5FzliFxE1bSiu4dnEIlca2JpeH7yz1/S6fed630H+hIH6DoM25fTLNcKj+mFB0Xnh9m2+HN59Mn4qyTfcUeadnfCXSWcGBouhXFwcdd2rJ3n337bzTf4jm659gZu3L0i6PLuxM9p7mqdwO0cKJPfGVfhnfMz+f4alMg79WB/NNyE2lyX7/qxvV49ObNrrJbKSFiz8Djocaf0IESNLMbfYI5bXjWkJlX92DQbKhibtQW8ZOJ//ZC6t0AWcUoKL6QDm/dg5koQalcleRinpB+QadFm894sLbVZ9+N4GVs*******\\"\\n}","errorExample":""},{"type":"xml","example":"<GenerateAndExportDataKeyResponse>\\n    <KeyVersionId>2ab1a983-7072-4bbc-a582-584b5bd8****</KeyVersionId>\\n    <KeyId>599fa825-17de-417e-9554-bb032cc6****</KeyId>\\n    <CiphertextBlob>ODZhOWVmZDktM2QxNi00ODk0LWJkNGYtMWZjNDNmM2YyYWJmS7FmDBBQ0BkKsQrtRnidtPwirmDcS0ZuJCU41xxAAWk4Z8qsADfbV0b+i6kQmlvj79dJdGOvtX69Uycs901qOjop4bTS****</CiphertextBlob>\\n    <RequestId>7021b6ec-4be7-4d3c-8a68-1e85d4d515a0</RequestId>\\n    <ExportedDataKey>BQKP+1zK6+ZEMxTP5qaVzcsgXtWplYBKm0NXdSnB5FzliFxE1bSiu4dnEIlca2JpeH7yz1/S6fed630H+hIH6DoM25fTLNcKj+mFB0Xnh9m2+HN59Mn4qyTfcUeadnfCXSWcGBouhXFwcdd2rJ3n337bzTf4jm659gZu3L0i6PLuxM9p7mqdwO0cKJPfGVfhnfMz+f4alMg79WB/NNyE2lyX7/qxvV49ObNrrJbKSFiz8Djocaf0IESNLMbfYI5bXjWkJlX92DQbKhibtQW8ZOJ//ZC6t0AWcUoKL6QDm/dg5koQalcleRinpB+QadFm894sLbVZ9+N4GVs*******</ExportedDataKey>\\n</GenerateAndExportDataKeyResponse>","errorExample":""}]',
            'title' => '生成一个数据密钥并加密导出',
            'summary' => '调用GenerateAndExportDataKey接口随机生成一个数据密钥，通过您指定的主密钥（CMK）和公钥加密后，返回CMK加密数据密钥的密文和公钥加密数据密钥的密文。',
            'description' => '### 注意事项'."\n"
                ."\n"
                .'- 非KMS实例中的密钥：进行密码运算时，仅支持通过阿里云SDK调用OpenAPI。'."\n"
                ."\n"
                .'- KMS实例中的密钥：进行密码运算时，支持如下两种方式。'."\n"
                ."\n"
                .'  - 方式一（推荐）：通过KMS实例SDK调用KMS实例API。详细介绍，请参见[KMS实例SDK](~~601593~~)、[KMS实例API](~~601485~~)。'."\n"
                .'  - 方式二：通过阿里云SDK调用OpenAPI，但认证方式仅支持可信实体为阿里云服务的RAM角色。详细信息，请参见[创建可信实体为阿里云服务的RAM角色](~~116800~~)。'."\n"
                .'### QPS限制'."\n"
                .'本接口的单用户QPS限制为750次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。'."\n"
                .'### 详细说明'."\n"
                .'建议您使用以下方式将数据密钥导入到密码模块中，用于数据加密和数据解密：'."\n"
                ."\n"
                .'1.调用GenerateAndExportDataKey接口，获得KMS密钥加密和指定公钥加密的数据密钥。'."\n"
                ."\n"
                .'2.将KMS密钥加密数据密钥得到的密文保存在KMS，或者云数据库等存储服务中，用于密钥的备份和恢复。'."\n"
                ."\n"
                .'3.将公钥加密数据密钥的密文，导入到公钥对应私钥所在的密码模块，实现KMS到密码模块的密钥分发，使用数据密钥对相应的数据进行加解密运算。'."\n"
                ."\n"
                .'> 在请求中指定的KMS密钥，仅会被用作数据密钥的加密，和数据密钥的生成没有关系。KMS也不会记录或存储随机生成的数据密钥，您需要负责记录数据密钥或数据密钥的密文。',
        ],
        'Encrypt' => [
            'methods' => [
                'post',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'KeyId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '密钥的ID，也可以指定为密钥别名或密钥资源名称（ARN）。关于别名的详细介绍，请参见[管理密钥别名](~~480655~~)。'."\n"
                            .'>访问其他阿里云账号下的密钥时，必须输入密钥ARN。密钥ARN的格式为`acs:kms:${region}:${account}:key/${keyid}`。'."\n"
                            ."\n\n"
                            .'                           ',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'key-hzz630494463ejqjx****',
                    ],
                ],
                [
                    'name' => 'Plaintext',
                    'in' => 'query',
                    'schema' => [
                        'description' => '待加密明文（必须经过Base64编码）。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'SGVsbG8gd29y****',
                    ],
                ],
                [
                    'name' => 'EncryptionContext',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => 'key/value的JSON字符串。如果指定了该参数，则在调用Decrypt时需要提供同样的参数，详情请参见[EncryptionContext说明](~~42975~~)。'."\n"
                            .'                           ',
                        'type' => 'object',
                        'required' => false,
                        'example' => '{"Example":"Example"}',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'KeyVersionId' => [
                                'description' => '用于加密明文的密钥版本标志符。是指定密钥的主版本。',
                                'type' => 'string',
                                'example' => '86a9efd9-3d16-4894-bd4f-1fc43f3f****',
                            ],
                            'KeyId' => [
                                'description' => '密钥ID。如果请求中的KeyId参数使用的是密钥别名、密钥ARN，在响应中会返回密钥ID。',
                                'type' => 'string',
                                'example' => 'key-hzz630494463ejqjx****',
                            ],
                            'CiphertextBlob' => [
                                'description' => '数据被指定密钥的主版本加密后的密文。',
                                'type' => 'string',
                                'example' => 'DZhOWVmZDktM2QxNi00ODk0LWJkNGYtMWZjNDNmM2YyYWJmaaSl+TztSIMe43nbTH/Z1Wr4XfLftKhAciUmDQXuMRl4WTvKhxjMThjK****',
                            ],
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '475f1620-b9d3-4d35-b5c6-3fbdd941423d',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter is invalid.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'Forbidden.KeyNotFound',
                        'errorMessage' => 'The specified Key is not found.',
                    ],
                    [
                        'errorCode' => 'Forbidden.AliasNotFound',
                        'errorMessage' => 'The specified Alias is not found.',
                    ],
                    [
                        'errorCode' => 'InvalidAccessKeyId.NotFound',
                        'errorMessage' => 'The Access Key ID provided does not exist in our records.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"KeyVersionId\\": \\"86a9efd9-3d16-4894-bd4f-1fc43f3f****\\",\\n  \\"KeyId\\": \\"key-hzz630494463ejqjx****\\",\\n  \\"CiphertextBlob\\": \\"DZhOWVmZDktM2QxNi00ODk0LWJkNGYtMWZjNDNmM2YyYWJmaaSl+TztSIMe43nbTH/Z1Wr4XfLftKhAciUmDQXuMRl4WTvKhxjMThjK****\\",\\n  \\"RequestId\\": \\"475f1620-b9d3-4d35-b5c6-3fbdd941423d\\"\\n}","errorExample":""},{"type":"xml","example":"<EncryptResponse>\\n    <KeyVersionId>86a9efd9-3d16-4894-bd4f-1fc43f3f****</KeyVersionId>\\n    <KeyId>key-hzz630494463ejqjx****</KeyId>\\n    <CiphertextBlob>DZhOWVmZDktM2QxNi00ODk0LWJkNGYtMWZjNDNmM2YyYWJmaaSl+TztSIMe43nbTH/Z1Wr4XfLftKhAciUmDQXuMRl4WTvKhxjMThjK****</CiphertextBlob>\\n    <RequestId>475f1620-b9d3-4d35-b5c6-3fbdd941423d</RequestId>\\n</EncryptResponse>","errorExample":""}]',
            'title' => '使用对称主密钥加密明文',
            'summary' => '调用Encrypt接口使用对称主密钥（Symmetric CMK）将明文加密为密文。',
            'description' => '### 注意事项'."\n"
                ."\n"
                .'- 非KMS实例中的密钥：进行密码运算时，仅支持通过阿里云SDK调用OpenAPI。'."\n"
                ."\n"
                .'- KMS实例中的密钥：进行密码运算时，支持如下两种方式。'."\n"
                ."\n"
                .'  - 方式一（推荐）：通过KMS实例SDK调用KMS实例API。详细介绍，请参见[KMS实例SDK](~~601593~~)、[KMS实例API](~~601485~~)。'."\n"
                .'  - 方式二：通过阿里云SDK调用OpenAPI，但认证方式仅支持可信实体为阿里云服务的RAM角色。详细信息，请参见[创建可信实体为阿里云服务的RAM角色](~~116800~~)。'."\n"
                ."\n"
                .'### QPS限制'."\n"
                .'本接口的单用户QPS限制为750次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。'."\n"
                ."\n\n"
                .'### 详细说明'."\n"
                .'- KMS使用指定密钥的主版本对传入数据进行加密。'."\n"
                .'- 最多可加密6KB的数据，例如RSA密钥、数据库密码或其它敏感信息。'."\n"
                .'- 如果将加密数据从一个地域迁移到另一个地域，可以调用Encrypt接口在新地域中加密从另一个地域中转移过来的明文DataKey。新地域中会生成一个加密后的DataKey。您可以在新地域调用[Decrypt](~~28950~~)将其解密。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'Decrypt' => [
            'summary' => '解密CiphertextBlob中的密文。',
            'methods' => [
                'post',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'CiphertextBlob',
                    'in' => 'query',
                    'schema' => [
                        'description' => '待解密的密文。  '."\n"
                            .'密文可以通过以下API生成：'."\n"
                            ."\n"
                            .'- [GenerateDataKey](~~28948~~)'."\n"
                            .'- [Encrypt](~~28949~~)'."\n"
                            .'- [GenerateDataKeyWithoutPlaintext](~~134043~~)',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'DZhOWVmZDktM2QxNi00ODk0LWJkNGYtMWZjNDNmM2YyYWJmaaSl+TztSIMe43nbTH/Z1Wr4XfLftKhAciUmDQXuMRl4WTvKhxjMThjK****',
                    ],
                ],
                [
                    'name' => 'EncryptionContext',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => 'key/value的JSON字符串。  '."\n"
                            ."\n"
                            .'> 如果在调用[GenerateDataKey](~~28948~~)、[Encrypt](~~28949~~)或[GenerateDataKeyWithoutPlaintext](~~134043~~)加密时指定了EncryptionContext，则需要在解密时提供同样的参数。更多信息，请参见[EncryptionContext说明](~~42975~~)。      ',
                        'type' => 'object',
                        'required' => false,
                        'example' => '{"Example":"Example"}',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'KeyVersionId' => [
                                'description' => '主密钥下用于解密密文的密钥版本标识符。',
                                'type' => 'string',
                                'example' => '2ab1a983-7072-4bbc-a582-584b5bd8****',
                            ],
                            'KeyId' => [
                                'description' => '解密密文使用的主密钥ID。  '."\n"
                                    .'主密钥的全局唯一标识符。',
                                'type' => 'string',
                                'example' => '202b9877-5a25-46e3-a763-e20791b5****',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '207596a2-36d3-4840-b1bd-f87044699bd7',
                            ],
                            'Plaintext' => [
                                'description' => '解密后的明文。',
                                'type' => 'string',
                                'example' => 'tRYXuCwgja12xxO1N/gZERDDCLw9doZEQiPDk/Bv****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'UnsupportedOperation',
                        'errorMessage' => 'This action is not supported.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'Forbidden.AliasNotFound',
                        'errorMessage' => 'The specified Alias is not found.',
                    ],
                    [
                        'errorCode' => 'Forbidden.KeyNotFound',
                        'errorMessage' => 'The specified Key is not found.',
                    ],
                ],
                409 => [
                    [
                        'errorCode' => 'Rejected.Disabled',
                        'errorMessage' => 'The request was rejected because the key state is Disabled.',
                    ],
                    [
                        'errorCode' => 'Rejected.PendingDeletion',
                        'errorMessage' => 'The request was rejected because the key state is PendingDeletion.',
                    ],
                    [
                        'errorCode' => 'Rejected.Unavailable',
                        'errorMessage' => 'The request was rejected because the key state is Unavailable.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"KeyVersionId\\": \\"2ab1a983-7072-4bbc-a582-584b5bd8****\\",\\n  \\"KeyId\\": \\"202b9877-5a25-46e3-a763-e20791b5****\\",\\n  \\"RequestId\\": \\"207596a2-36d3-4840-b1bd-f87044699bd7\\",\\n  \\"Plaintext\\": \\"tRYXuCwgja12xxO1N/gZERDDCLw9doZEQiPDk/Bv****\\"\\n}","errorExample":""},{"type":"xml","example":"<DecryptResponse>\\n    <KeyVersionId>2ab1a983-7072-4bbc-a582-584b5bd8****</KeyVersionId>\\n    <KeyId>202b9877-5a25-46e3-a763-e20791b5****</KeyId>\\n    <RequestId>207596a2-36d3-4840-b1bd-f87044699bd7</RequestId>\\n    <Plaintext>tRYXuCwgja12xxO1N/gZERDDCLw9doZEQiPDk/Bv****</Plaintext>\\n</DecryptResponse>","errorExample":""}]',
            'title' => '解密密文',
            'description' => '### 注意事项'."\n"
                ."\n"
                .'- 非KMS实例中的密钥：进行密码运算时，仅支持通过阿里云SDK调用OpenAPI。'."\n"
                ."\n"
                .'- KMS实例中的密钥：进行密码运算时，支持如下两种方式。'."\n"
                ."\n"
                .'  - 方式一（推荐）：通过KMS实例SDK调用KMS实例API。详细介绍，请参见[KMS实例SDK](~~601593~~)、[KMS实例API](~~601485~~)。'."\n"
                .'  - 方式二：通过阿里云SDK调用OpenAPI，但认证方式仅支持可信实体为阿里云服务的RAM角色。详细信息，请参见[创建可信实体为阿里云服务的RAM角色](~~116800~~)。'."\n"
                ."\n"
                .'### QPS限制'."\n"
                .'本接口的单用户QPS限制为750次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ReEncrypt' => [
            'methods' => [
                'post',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'CiphertextBlob',
                    'in' => 'query',
                    'schema' => [
                        'description' => '待转加密的密文。  '."\n"
                            .'该参数可以为对称加密或非对称加密返回的密文数据。  '."\n"
                            ."\n"
                            .'- 对称加密：调用[Encrypt](~~28949~~)、[GenerateDataKey](~~28948~~)、[GenerateDataKeyWithoutPlaintext](~~134043~~)或[GenerateAndExportDataKey](~~176804~~)接口返回的密文数据。  '."\n"
                            ."\n"
                            .'- 非对称加密：可以是调用[GenerateAndExportDataKey](~~176804~~)接口返回的公钥加密数据，也可以是外部系统使用非对称公钥加密的数据。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ODZhOWVmZDktM2QxNi00ODk0LWJkNGYtMWZjNDNmM2YyYWJmS7FmDBBQ0BkKsQrtRnidtPwirmDcS0ZuJCU41xxAAWk4Z8qsADfbV0b+i6kQmlvj79dJdGOvtX69Uycs901q********',
                    ],
                ],
                [
                    'name' => 'SourceKeyId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '解密密文时使用的主密钥ID。  '."\n"
                            .'主密钥的全局唯一标识符。  '."\n"
                            ."\n"
                            .'> 当CiphertextBlob是非对称加密返回的公钥加密数据时需要指定该参数。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '5c438b18-05be-40ad-b6c2-3be6752c****',
                    ],
                ],
                [
                    'name' => 'SourceKeyVersionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用于解密密文的密钥版本标识符。  '."\n"
                            .'> 当CiphertextBlob是非对称加密返回的公钥加密数据时需要指定该参数。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2ab1a983-7072-4bbc-a582-584b5bd8****',
                    ],
                ],
                [
                    'name' => 'SourceEncryptionAlgorithm',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'CiphertextBlob是公钥加密结果时，指定公钥加密的算法。算法详情，请参见[AsymmetricDecrypt](~~148130~~)。    '."\n"
                            .'取值：'."\n"
                            ."\n"
                            .'- RSAES_OAEP_SHA_256'."\n"
                            .'- RSAES_OAEP_SHA_1'."\n"
                            .'- SM2PKE  '."\n"
                            .'  '."\n"
                            ."\n"
                            .'> 当CiphertextBlob是非对称加密返回的公钥加密数据时需要指定该参数。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'RSAES_OAEP_SHA_256',
                    ],
                ],
                [
                    'name' => 'SourceEncryptionContext',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => 'key/value的JSON字符串。如果在[Encrypt](~~28949~~)、[GenerateDataKey](~~28948~~)、[GenerateDataKeyWithoutPlaintext](~~134043~~)或[GenerateAndExportDataKey](~~176804~~) API中指定了该参数，则需要提供同样的参数才能解密，详情请参见[EncryptionContext说明](~~42975~~)。  '."\n"
                            .'> 当CiphertextBlob是对称加密返回的密文数据时需要指定该参数。',
                        'type' => 'object',
                        'required' => false,
                        'example' => '{"Example":"Example"}',
                    ],
                ],
                [
                    'name' => 'DestinationKeyId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '对密文解密后再次加密时使用的对称主密钥ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1234abcd-12ab-34cd-56ef-12345678****',
                    ],
                ],
                [
                    'name' => 'DestinationEncryptionContext',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => 'key/value的JSON字符串，用于目标主密钥加密时的加密上下文。',
                        'type' => 'object',
                        'required' => false,
                        'example' => '{"Example":"Example"}',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'KeyId' => [
                                'description' => '解密密文使用的主密钥ID。  '."\n"
                                    .'主密钥的全局唯一标识符。',
                                'type' => 'string',
                                'example' => '2ab1a983-7072-4bbc-a582-584b5bd8****',
                            ],
                            'KeyVersionId' => [
                                'description' => '主密钥下用于解密密文的密钥版本标识符。',
                                'type' => 'string',
                                'example' => '202b9877-5a25-46e3-a763-e20791b5****',
                            ],
                            'CiphertextBlob' => [
                                'description' => '使用指定的主密钥进行再次加密得到的密文。',
                                'type' => 'string',
                                'example' => 'DZhOWVmZDktM2QxNi00ODk0LWJkNGYtMWZjNDNmM2YyYWJmaaSl+TztSIMe43nbTH/Z1Wr4XfLftKhAciUmDQXuMRl4WTvKhxjMThjK****',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '207596a2-36d3-4840-b1bd-f87044699bd7',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter is not valid.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidAccessKeyId.NotFound',
                        'errorMessage' => 'The Access Key ID provided does not exist in our records.',
                    ],
                    [
                        'errorCode' => 'Forbidden.KeyNotFound',
                        'errorMessage' => 'The specified Key is not found.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalFailure',
                        'errorMessage' => 'Internal Failure.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"KeyId\\": \\"2ab1a983-7072-4bbc-a582-584b5bd8****\\",\\n  \\"KeyVersionId\\": \\"202b9877-5a25-46e3-a763-e20791b5****\\",\\n  \\"CiphertextBlob\\": \\"DZhOWVmZDktM2QxNi00ODk0LWJkNGYtMWZjNDNmM2YyYWJmaaSl+TztSIMe43nbTH/Z1Wr4XfLftKhAciUmDQXuMRl4WTvKhxjMThjK****\\",\\n  \\"RequestId\\": \\"207596a2-36d3-4840-b1bd-f87044699bd7\\"\\n}","errorExample":""},{"type":"xml","example":"<ReEncryptResponse>\\n    <KeyId>2ab1a983-7072-4bbc-a582-584b5bd8****</KeyId>\\n    <KeyVersionId>202b9877-5a25-46e3-a763-e20791b5****</KeyVersionId>\\n    <CiphertextBlob>DZhOWVmZDktM2QxNi00ODk0LWJkNGYtMWZjNDNmM2YyYWJmaaSl+TztSIMe43nbTH/Z1Wr4XfLftKhAciUmDQXuMRl4WTvKhxjMThjK****</CiphertextBlob>\\n    <RequestId>207596a2-36d3-4840-b1bd-f87044699bd7</RequestId>\\n</ReEncryptResponse>","errorExample":""}]',
            'title' => '对密文进行转加密',
            'summary' => '对密文进行转加密。即先将密文解密，然后将解密得到的数据或者数据密钥使用新的主密钥再次进行加密，返回加密结果。',
            'description' => '### 注意事项'."\n"
                ."\n"
                .'- 非KMS实例中的密钥：进行密码运算时，仅支持通过阿里云SDK调用OpenAPI。'."\n"
                ."\n"
                .'- KMS实例中的密钥：进行密码运算时，支持如下两种方式。'."\n"
                ."\n"
                .'  - 方式一（推荐）：通过KMS实例SDK调用KMS实例API。详细介绍，请参见[KMS实例SDK](~~601593~~)、[KMS实例API](~~601485~~)。'."\n"
                .'  - 方式二：通过阿里云SDK调用OpenAPI，但认证方式仅支持可信实体为阿里云服务的RAM角色。详细信息，请参见[创建可信实体为阿里云服务的RAM角色](~~116800~~)。'."\n"
                ."\n"
                .'### QPS限制'."\n"
                .'本接口的单用户QPS限制为750次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。'."\n"
                ."\n\n"
                .'### 详细说明'."\n"
                .'ReEncrypt使用场景如下：'."\n"
                ."\n"
                .'- 主密钥（CMK）进行轮转后，使用轮转后最新的密钥版本对数据进行重新加密。自动轮转密钥详情，请参见[自动轮转密钥](~~134270~~)。'."\n"
                ."\n"
                .'- 主密钥不变，改变加密上下文的内容，进行重新加密。'."\n"
                ."\n"
                .'- 将主密钥加密的数据或者数据密钥在KMS内部使用其它的主密钥进行重新加密。'."\n"
                ."\n\n"
                .'ReEncrypt权限设置如下：'."\n"
                ."\n"
                .'- 需要有操作源主密钥的kms:ReEncryptFrom权限。'."\n"
                .'- 需要有操作目的主密钥的kms:ReEncryptTo权限。'."\n"
                .'- 可以设置kms:ReEncrypt*用于表示上述两个操作的权限。',
            'requestParamsDescription' => ' '."\n",
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ExportDataKey' => [
            'methods' => [
                'post',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'CiphertextBlob',
                    'in' => 'query',
                    'schema' => [
                        'description' => '主密钥（CMK）加密的数据密钥的密文。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ODZhOWVmZDktM2QxNi00ODk0LWJkNGYtMWZjNDNmM2YyYWJmS7FmDBBQ0BkKsQrtRnidtPwirmDcS0ZuJCU41xxAAWk4Z8qsADfbV0b+i6kQmlvj79dJdGOvtX69Uycs901q********',
                    ],
                ],
                [
                    'name' => 'EncryptionContext',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => 'key/value的JSON字符串。EncryptionContext是使用CMK加密数据密钥时传入的加密上下文，详情请参见[EncryptionContext说明](~~42975~~)。',
                        'type' => 'object',
                        'required' => false,
                        'example' => '{"Example":"Example"}',
                    ],
                ],
                [
                    'name' => 'PublicKeyBlob',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Base64格式的公钥。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAndKfC2ReLL2+y8a0+ZBBeAft/uBYo86GZiYJuflqgUzKxpyuvlo3uQkBv6b+nx+0tz8g8v7GhpPWMSW5L9mNHYsvYFsa7jTxsYdt17yj6GlUHPuMIs8hr5qbwl38IHU1iIa7nYWwE2fb3ePOvLDACRJVgGpU0yxioW80d2QD+9aU4jF5dlAahcfgsNzo2CXzCUc1+xbmNuq7Rp+H9VJB9dyYOwqnW3RhOLBo21FzpORapf0UiRlrHRpk1V6ez+aE1dofaYh/9bh0m6ioxj7j5hpZbWccuEZTMBKd+cbuBkRhJzc6Tti6qwZbDiu4fUwbZS0Tqpuo1UadiyxMW********',
                    ],
                ],
                [
                    'name' => 'WrappingKeySpec',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'PublicKeyBlob的密钥类型。密钥类型详情，请参见[非对称密钥简介](~~148147~~)。  '."\n"
                            .'取值：'."\n"
                            ."\n"
                            .'- RSA_2048'."\n"
                            .'- EC_SM2  '."\n"
                            .'  '."\n",
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'RSA_2048',
                    ],
                ],
                [
                    'name' => 'WrappingAlgorithm',
                    'in' => 'query',
                    'schema' => [
                        'description' => '使用PublicKeyBlob所指定的公钥，加密（Wrap）数据密钥时的加密算法。算法详情，请参见[AsymmetricDecrypt](~~148130~~)。  '."\n"
                            .'取值：'."\n"
                            ."\n"
                            .'- RSAES_OAEP_SHA_256'."\n"
                            .'- RSAES_OAEP_SHA_1'."\n"
                            .'- SM2PKE  '."\n"
                            .'  '."\n",
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'RSAES_OAEP_SHA_256',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'KeyVersionId' => [
                                'description' => '用于解密传入的数据密钥密文的密钥版本标识符。',
                                'type' => 'string',
                                'example' => '2ab1a983-7072-4bbc-a582-584b5bd8****',
                            ],
                            'KeyId' => [
                                'description' => '解密传入的数据密钥密文使用的主密钥ID。  '."\n"
                                    .'主密钥的全局唯一标识符。',
                                'type' => 'string',
                                'example' => '202b9877-5a25-46e3-a763-e20791b5****',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '4bd560a1-729e-45f1-a3d9-b2a33d61046b',
                            ],
                            'ExportedDataKey' => [
                                'description' => '公钥加密保护导出的数据密钥。',
                                'type' => 'string',
                                'example' => 'BQKP+1zK6+ZEMxTP5qaVzcsgXtWplYBKm0NXdSnB5FzliFxE1bSiu4dnEIlca2JpeH7yz1/S6fed630H+hIH6DoM25fTLNcKj+mFB0Xnh9m2+HN59Mn4qyTfcUeadnfCXSWcGBouhXFwcdd2rJ3n337bzTf4jm659gZu3L0i6PLuxM9p7mqdwO0cKJPfGVfhnfMz+f4alMg79WB/NNyE2lyX7/qxvV49ObNrrJbKSFiz8Djocaf0IESNLMbfYI5bXjWkJlX92DQbKhibtQW8ZOJ//ZC6t0AWcUoKL6QDm/dg5koQalcleRinpB+QadFm894sLbVZ9+N4GVs*******',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter is not valid.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidAccessKeyId.NotFound',
                        'errorMessage' => 'The Access Key ID provided does not exist in our records.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalFailure',
                        'errorMessage' => 'Internal Failure.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"KeyVersionId\\": \\"2ab1a983-7072-4bbc-a582-584b5bd8****\\",\\n  \\"KeyId\\": \\"202b9877-5a25-46e3-a763-e20791b5****\\",\\n  \\"RequestId\\": \\"4bd560a1-729e-45f1-a3d9-b2a33d61046b\\",\\n  \\"ExportedDataKey\\": \\"BQKP+1zK6+ZEMxTP5qaVzcsgXtWplYBKm0NXdSnB5FzliFxE1bSiu4dnEIlca2JpeH7yz1/S6fed630H+hIH6DoM25fTLNcKj+mFB0Xnh9m2+HN59Mn4qyTfcUeadnfCXSWcGBouhXFwcdd2rJ3n337bzTf4jm659gZu3L0i6PLuxM9p7mqdwO0cKJPfGVfhnfMz+f4alMg79WB/NNyE2lyX7/qxvV49ObNrrJbKSFiz8Djocaf0IESNLMbfYI5bXjWkJlX92DQbKhibtQW8ZOJ//ZC6t0AWcUoKL6QDm/dg5koQalcleRinpB+QadFm894sLbVZ9+N4GVs*******\\"\\n}","errorExample":""},{"type":"xml","example":"<ExportDataKeyResponse>\\n    <KeyVersionId>2ab1a983-7072-4bbc-a582-584b5bd8****</KeyVersionId>\\n    <KeyId>202b9877-5a25-46e3-a763-e20791b5****</KeyId>\\n    <RequestId>4bd560a1-729e-45f1-a3d9-b2a33d61046b</RequestId>\\n    <ExportedDataKey>BQKP+1zK6+ZEMxTP5qaVzcsgXtWplYBKm0NXdSnB5FzliFxE1bSiu4dnEIlca2JpeH7yz1/S6fed630H+hIH6DoM25fTLNcKj+mFB0Xnh9m2+HN59Mn4qyTfcUeadnfCXSWcGBouhXFwcdd2rJ3n337bzTf4jm659gZu3L0i6PLuxM9p7mqdwO0cKJPfGVfhnfMz+f4alMg79WB/NNyE2lyX7/qxvV49ObNrrJbKSFiz8Djocaf0IESNLMbfYI5bXjWkJlX92DQbKhibtQW8ZOJ//ZC6t0AWcUoKL6QDm/dg5koQalcleRinpB+QadFm894sLbVZ9+N4GVs*******</ExportedDataKey>\\n</ExportDataKeyResponse>","errorExample":""}]',
            'title' => '使用传入的公钥加密导出数据密钥',
            'summary' => '调用ExportDataKey接口使用传入的公钥加密导出数据密钥。',
            'description' => '### 注意事项'."\n"
                ."\n"
                .'- 非KMS实例中的密钥：进行密码运算时，仅支持通过阿里云SDK调用OpenAPI。'."\n"
                ."\n"
                .'- KMS实例中的密钥：进行密码运算时，支持如下两种方式。'."\n"
                ."\n"
                .'  - 方式一（推荐）：通过KMS实例SDK调用KMS实例API。详细介绍，请参见[KMS实例SDK](~~601593~~)、[KMS实例API](~~601485~~)。'."\n"
                .'  - 方式二：通过阿里云SDK调用OpenAPI，但认证方式仅支持可信实体为阿里云服务的RAM角色。详细信息，请参见[创建可信实体为阿里云服务的RAM角色](~~116800~~)。'."\n"
                ."\n"
                .'### QPS限制'."\n"
                .'本接口的单用户QPS限制为750次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。'."\n"
                ."\n\n"
                .'### 详细说明'."\n"
                .'调用[GenerateDataKeyWithoutPlaintext](~~134043~~)获取主密钥（CMK）加密保护的数据密钥。当您需要将数据密钥分发到其它地域（Region）或者密码模块时，您可以调用ExportDataKey接口，返回指定公钥加密数据密钥的密文。'."\n"
                ."\n"
                .'将公钥加密数据密钥的密文，导入到公钥对应私钥所在的密码模块，可实现KMS到密码模块的密钥分发，保障了数据密钥分发过程的安全性。该密钥导入到密码模块后，可用于实现相应数据的加解密运算。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GenerateDataKeyWithoutPlaintext' => [
            'methods' => [
                'post',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'KeyId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '主密钥（CMK）的全局唯一标识符。该参数也可以被指定为CMK绑定的别名，详情请参见别名使用说明。'."\n"
                            .'                           ',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1234abcd-12ab-34cd-56ef-12345678****',
                    ],
                ],
                [
                    'name' => 'KeySpec',
                    'in' => 'query',
                    'schema' => [
                        'description' => ' 指定生成的数据密钥的长度，取值：  '."\n"
                            ."\n"
                            .'- AES_256：256位的对称密钥  '."\n"
                            ."\n"
                            .'- AES_128：128位的对称密钥'."\n"
                            ."\n"
                            .'> 建议使用KeySpec或者NumberOfBytes来指定数据密钥长度。如果两者都不指定，KMS生成256位的数据密钥；如果两者都被指定，KMS会忽略KeySpec参数。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'AES_256',
                        'enum' => [
                            'AES_256',
                            ' AES_128',
                        ],
                    ],
                ],
                [
                    'name' => 'NumberOfBytes',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定生成的数据密钥的长度。   '."\n"
                            .'取值：1~1024。   '."\n"
                            .'单位：字节',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '1024',
                        'minimum' => '0',
                        'example' => '256',
                    ],
                ],
                [
                    'name' => 'EncryptionContext',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => 'key/value对的JSON字符串，如果指定了该参数，则在调用Decrypt 时需要提供同样的参数，详情请参见[EncryptionContext说明](~~42975~~)。'."\n"
                            .'                           ',
                        'type' => 'object',
                        'required' => false,
                        'example' => '{"Example":"Example"}',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'KeyVersionId' => [
                                'description' => '用于加密明文的密钥版本标志符。是指定CMK的主版本。',
                                'type' => 'string',
                                'example' => '2ab1a983-7072-4bbc-a582-584b5bd8****',
                            ],
                            'KeyId' => [
                                'description' => 'CMK的全局唯一标识符。  '."\n"
                                    ."\n"
                                    .'> 如果请求中的KeyId参数使用的是CMK的别名，在响应中会返回别名对应的CMK标志符。',
                                'type' => 'string',
                                'example' => '599fa825-17de-417e-9554-bb032cc6****',
                            ],
                            'CiphertextBlob' => [
                                'description' => '数据密钥被指定CMK的主版本加密后的密文。',
                                'type' => 'string',
                                'example' => 'ODZhOWVmZDktM2QxNi00ODk0LWJkNGYtMWZjNDNmM2YyYWJmS7FmDBBQ0BkKsQrtRnidtPwirmDcS0ZuJCU41xxAAWk4Z8qsADfbV0b+i6kQmlvj79dJdGOvtX69Uycs901qOjop4bTS****',
                            ],
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '7021b6ec-4be7-4d3c-8a68-1e85d4d515a0',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter is not valid.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidAccessKeyId.NotFound',
                        'errorMessage' => 'The Access Key ID provided does not exist in our records.',
                    ],
                    [
                        'errorCode' => 'Forbidden.KeyNotFound',
                        'errorMessage' => 'The specified Key is not found.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"KeyVersionId\\": \\"2ab1a983-7072-4bbc-a582-584b5bd8****\\",\\n  \\"KeyId\\": \\"599fa825-17de-417e-9554-bb032cc6****\\",\\n  \\"CiphertextBlob\\": \\"ODZhOWVmZDktM2QxNi00ODk0LWJkNGYtMWZjNDNmM2YyYWJmS7FmDBBQ0BkKsQrtRnidtPwirmDcS0ZuJCU41xxAAWk4Z8qsADfbV0b+i6kQmlvj79dJdGOvtX69Uycs901qOjop4bTS****\\",\\n  \\"RequestId\\": \\"7021b6ec-4be7-4d3c-8a68-1e85d4d515a0\\"\\n}","errorExample":""},{"type":"xml","example":"<KMS>\\n       <RequestId>7021b6ec-4be7-4d3c-8a68-1e85d4d515a0</RequestId>\\n       <CiphertextBlob>ODZhOWVmZDktM2QxNi00ODk0LWJkNGYtMWZjNDNmM2YyYWJmS7FmDBBQ0BkKsQrtRnidtPwirmDcS0ZuJCU41xxAAWk4Z8qsADfbV0b+i6kQmlvj79dJdGOvtX69Uycs901qOjop4bTS****</CiphertextBlob>\\n       <KeyId>599fa825-17de-417e-9554-bb032cc6****</KeyId>\\n       <KeyVersionId>2ab1a983-7072-4bbc-a582-584b5bd8****</KeyVersionId>\\n</KMS>","errorExample":"//json response\\n{\\n        \\"CiphertextBlob\\": \\"CiphertextBlob\\",\\n        \\"KeyId\\": \\"599fa825-17de-417e-9554-bb032cc6****\\",\\n        \\"KeyVersionId\\": \\"2ab1a983-7072-4bbc-a582-584b5bd8ecf3\\",\\n        \\"RequestId\\": \\"7021b6ec-4be7-4d3c-8a68-1e85d4d515a0\\"\\n}   "}]',
            'title' => '生成一个数据密钥，不需返回数据密钥明文内容。',
            'summary' => '生成一个随机的数据密钥。可以用数据密钥进行本地数据的加密。',
            'description' => '### 注意事项'."\n"
                ."\n"
                .'- 非KMS实例中的密钥：进行密码运算时，仅支持通过阿里云SDK调用OpenAPI。'."\n"
                ."\n"
                .'- KMS实例中的密钥：进行密码运算时，支持如下两种方式。'."\n"
                ."\n"
                .'  - 方式一（推荐）：通过KMS实例SDK调用KMS实例API。详细介绍，请参见[KMS实例SDK](~~601593~~)、[KMS实例API](~~601485~~)。'."\n"
                .'  - 方式二：通过阿里云SDK调用OpenAPI，但认证方式仅支持可信实体为阿里云服务的RAM角色。详细信息，请参见[创建可信实体为阿里云服务的RAM角色](~~116800~~)。'."\n"
                ."\n"
                .'### QPS限制'."\n"
                .'本接口的单用户QPS限制为750次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。'."\n"
                ."\n\n"
                .'### 详细说明'."\n"
                .'此API随机生成一个数据密钥，并通过您指定的对称主密钥（Symmetric CMK）加密后，返回数据密钥的密文。此API和[GenerateDataKey](~~28948~~)提供完全相同的功能，唯一的区别是此API不会返回数据密钥的明文。'."\n"
                ."\n"
                .'您在请求中指定的CMK，仅用于数据密钥的加密，不会用于数据密钥的生成。KMS不会记录或存储随机生成的数据密钥。'."\n"
                ."\n"
                .'> - 此API适用于不需要立即使用数据密钥完成数据加密的系统。系统需要加密时，通过调用[Decrypt](~~28950~~)接口解开数据密钥的密文。  '."\n"
                .'> - 此API也适用于具有不同信任等级的分布式系统。例如：您的系统将数据按照既定划分策略存储到不同的分区中。其中的一个模块会预先创建不同的数据分区，对每一个分区分别产生不同的数据密钥。这一模块完成控制平面的初始化之后，并不参与数据的生产和消费，它是密钥分发者。而数据平面的模块，在产生和消费数据的时候，首先获取分区的数据密钥密文，在解开之后使用数据密钥的明文对数据执行加密或者解密操作，随后清除内存中的数据密钥明文。在这样的系统中，密钥分发者不需要获取到数据密钥的明文，只需要使用相关CMK的GenerateDataKeyWithoutPlaintext的权限；而数据的生产和消费者，不需要产生新的数据密钥，只需要使用相关CMK的Decrypt的权限。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'AsymmetricSign' => [
            'methods' => [
                'post',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'KeyId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '主密钥（CMK）的全局唯一标识符。'."\n"
                            ."\n"
                            .'> 该参数也可以被指定为主密钥绑定的别名。更多信息，请参见[别名使用说明](~~68522~~)。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '5c438b18-05be-40ad-b6c2-3be6752c****',
                    ],
                ],
                [
                    'name' => 'KeyVersionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '密钥版本ID。密钥版本的全局唯一标识符。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '2ab1a983-7072-4bbc-a582-584b5bd8****',
                    ],
                ],
                [
                    'name' => 'Algorithm',
                    'in' => 'query',
                    'schema' => [
                        'description' => '签名算法。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'RSA_PSS_SHA_256',
                    ],
                ],
                [
                    'name' => 'Digest',
                    'in' => 'query',
                    'schema' => [
                        'description' => '使用Algorithm中对应的哈希算法，对原始消息生成的摘要。'."\n"
                            ."\n"
                            .'> - 使用Base64编码。'."\n"
                            .'> - 关于如何计算消息摘要，请参见[非对称数字签名](~~148146~~)的**签名预处理：计算消息摘要**章节。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ZOyIygCyaOW6GjVnihtTFtIS9PNmskdyMlNKiu****=',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'KeyVersionId' => [
                                'description' => '密钥版本ID。密钥版本的全局唯一标识符。',
                                'type' => 'string',
                                'example' => '2ab1a983-7072-4bbc-a582-584b5bd8****',
                            ],
                            'KeyId' => [
                                'description' => '主密钥的全局唯一标识符。'."\n"
                                    ."\n"
                                    .'> 如果请求中的KeyId参数使用的是主密钥的别名，在响应中会返回别名对应的主密钥标识符。',
                                'type' => 'string',
                                'example' => '5c438b18-05be-40ad-b6c2-3be6752c****',
                            ],
                            'Value' => [
                                'description' => '计算出来的签名。'."\n"
                                    ."\n"
                                    .'> 使用Base64编码。',
                                'type' => 'string',
                                'example' => 'M2CceNZH00ZgL9ED/ZHFp21YRAvYeZHknJUc207OCZ0N9wNn9As4z2bON3FF3je+1Nu+2+/8Zj50HpMTpzYpMp2R93cYmACCmhaYoKydxylbyGzJR8y9likZRCrkD38lRoS40aBBvv/6iRKzQuo9EGYVcel36cMNg00VmYNBy3pa1rwg3gA4l3cy6kjayZja1WGPkVhrVKsrJMdbpl0ApLjXKuD8rw1n1XLCwCUEL5eLPljTZaAveqdOFQOiZnZEGI27qIiZe7I1fN8tcz6anS/gTM7xRKE++5egEvRWlTQQTJeApnPSiUPA+8ZykNdelQsOQh5SrGoyI4A5pq****==',
                            ],
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '475f1620-b9d3-4d35-b5c6-3fbdd941423d',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter is not valid.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidAccessKeyId.NotFound',
                        'errorMessage' => 'The Access Key ID provided does not exist in our records.',
                    ],
                    [
                        'errorCode' => 'Forbidden.KeyNotFound',
                        'errorMessage' => 'The specified Key is not found.',
                    ],
                    [
                        'errorCode' => 'Forbidden.AliasNotFound',
                        'errorMessage' => 'The specified Alias is not found.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"KeyVersionId\\": \\"2ab1a983-7072-4bbc-a582-584b5bd8****\\",\\n  \\"KeyId\\": \\"5c438b18-05be-40ad-b6c2-3be6752c****\\",\\n  \\"Value\\": \\"M2CceNZH00ZgL9ED/ZHFp21YRAvYeZHknJUc207OCZ0N9wNn9As4z2bON3FF3je+1Nu+2+/8Zj50HpMTpzYpMp2R93cYmACCmhaYoKydxylbyGzJR8y9likZRCrkD38lRoS40aBBvv/6iRKzQuo9EGYVcel36cMNg00VmYNBy3pa1rwg3gA4l3cy6kjayZja1WGPkVhrVKsrJMdbpl0ApLjXKuD8rw1n1XLCwCUEL5eLPljTZaAveqdOFQOiZnZEGI27qIiZe7I1fN8tcz6anS/gTM7xRKE++5egEvRWlTQQTJeApnPSiUPA+8ZykNdelQsOQh5SrGoyI4A5pq****==\\",\\n  \\"RequestId\\": \\"475f1620-b9d3-4d35-b5c6-3fbdd941423d\\"\\n}","errorExample":""},{"type":"xml","example":"<AsymmetricSignResponse>\\n    <KeyVersionId>2ab1a983-7072-4bbc-a582-584b5bd8****</KeyVersionId>\\n    <KeyId>5c438b18-05be-40ad-b6c2-3be6752c****</KeyId>\\n    <Value>M2CceNZH00ZgL9ED/ZHFp21YRAvYeZHknJUc207OCZ0N9wNn9As4z2bON3FF3je+1Nu+2+/8Zj50HpMTpzYpMp2R93cYmACCmhaYoKydxylbyGzJR8y9likZRCrkD38lRoS40aBBvv/6iRKzQuo9EGYVcel36cMNg00VmYNBy3pa1rwg3gA4l3cy6kjayZja1WGPkVhrVKsrJMdbpl0ApLjXKuD8rw1n1XLCwCUEL5eLPljTZaAveqdOFQOiZnZEGI27qIiZe7I1fN8tcz6anS/gTM7xRKE++5egEvRWlTQQTJeApnPSiUPA+8ZykNdelQsOQh5SrGoyI4A5pq****==</Value>\\n    <RequestId>475f1620-b9d3-4d35-b5c6-3fbdd941423d</RequestId>\\n</AsymmetricSignResponse>","errorExample":""}]',
            'title' => '使用非对称密钥进行签名',
            'summary' => '调用AsymmetricSign接口使用非对称密钥进行签名。',
            'description' => '### 注意事项'."\n"
                ."\n"
                .'- 非KMS实例中的密钥：进行密码运算时，仅支持通过阿里云SDK调用OpenAPI。'."\n"
                ."\n"
                .'- KMS实例中的密钥：进行密码运算时，支持如下两种方式。'."\n"
                ."\n"
                .'  - 方式一（推荐）：通过KMS实例SDK调用KMS实例API。详细介绍，请参见[KMS实例SDK](~~601593~~)、[KMS实例API](~~601485~~)。'."\n"
                .'  - 方式二：通过阿里云SDK调用OpenAPI，但认证方式仅支持可信实体为阿里云服务的RAM角色。详细信息，请参见[创建可信实体为阿里云服务的RAM角色](~~116800~~)。'."\n"
                ."\n"
                .'### QPS限制'."\n"
                .'本接口的单用户QPS限制为200次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。'."\n"
                ."\n\n"
                .'### 详细说明'."\n"
                .'仅支持**Usage**为**SIGN/VERIFY**的非对称密钥。支持的签名算法如下表：'."\n"
                ."\n"
                .'| KeySpec        | Algorithm           | 说明  |'."\n"
                .'| ------------- |------------   | ----- |'."\n"
                .'| RSA_2048 | RSA_PSS_SHA_256  |RSASSA-PSS using SHA-256 and MGF1 with SHA-256 |'."\n"
                .'| RSA_2048 | RSA_PKCS1_SHA_256   |RSASSA-PKCS1-v1_5 using SHA-256 |'."\n"
                .'| RSA_3072 | RSA_PSS_SHA_256  |RSASSA-PSS using SHA-256 and MGF1 with SHA-256 |'."\n"
                .'| RSA_3072 | RSA_PKCS1_SHA_256   |RSASSA-PKCS1-v1_5 using SHA-256 |'."\n"
                .'| EC_P256 | ECDSA_SHA_256   |ECDSA on the P-256 Curve(secp256r1) with a SHA-256 digest |'."\n"
                .'| EC_P256K | ECDSA_SHA_256   |ECDSA on the P-256K Curve(secp256k1) with a SHA-256 digest |'."\n"
                .'| EC_SM2 | SM2DSA |SM2椭圆曲线数字签名算法 |'."\n"
                ."\n"
                .'> 按照国家标准GB/T 32918.2《信息安全技术 SM2 椭圆曲线公钥密码算法 第2部分：数字签名算法》，计算SM2签名值时，**Digest**参数不是对原始消息直接计算SM3摘要，而是对Z(A)和M的拼接值计算的摘要，其中M是待签名的原始消息，Z(A)是GB/T 32918.2中定义的用户A的杂凑值。'."\n"
                ."\n"
                .'本文将提供一个示例，使用密钥ID为`5c438b18-05be-40ad-b6c2-3be6752c****`、密钥版本ID为`2ab1a983-7072-4bbc-a582-584b5bd8****`的非对称密钥，通过签名算法`RSA_PSS_SHA_256`对摘要信息`ZOyIygCyaOW6GjVnihtTFtIS9PNmskdyMlNKiuy****=`进行签名。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'AsymmetricVerify' => [
            'methods' => [
                'post',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'KeyId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '主密钥（CMK）的全局唯一标识符。'."\n"
                            ."\n"
                            .'> 该参数也可以被指定为主密钥绑定的别名。更多信息，请参加见[别名使用说明](~~68522~~)。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '5c438b18-05be-40ad-b6c2-3be6752c****',
                    ],
                ],
                [
                    'name' => 'KeyVersionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '密钥版本ID。密钥版本的全局唯一标识符。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '2ab1a983-7072-4bbc-a582-584b5bd8****',
                    ],
                ],
                [
                    'name' => 'Algorithm',
                    'in' => 'query',
                    'schema' => [
                        'description' => '签名算法。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'RSA_PSS_SHA_256',
                    ],
                ],
                [
                    'name' => 'Digest',
                    'in' => 'query',
                    'schema' => [
                        'description' => '使用**Algorithm**中对应的哈希算法，对原始消息生成的摘要。'."\n"
                            ."\n"
                            .'> 使用Base64编码。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ZOyIygCyaOW6GjVnihtTFtIS9PNmskdyMlNKiuy****=',
                    ],
                ],
                [
                    'name' => 'Value',
                    'in' => 'query',
                    'schema' => [
                        'description' => '待验证的签名值。'."\n"
                            ."\n"
                            .'> 使用Base64编码。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'M2CceNZH00ZgL9ED/ZHFp21YRAvYeZHknJUc207OCZ0N9wNn9As4z2bON3FF3je+1Nu+2+/8Zj50HpMTpzYpMp2R93cYmACCmhaYoKydxylbyGzJR8y9likZRCrkD38lRoS40aBBvv/6iRKzQuo9EGYVcel36cMNg00VmYNBy3pa1rwg3gA4l3cy6kjayZja1WGPkVhrVKsrJMdbpl0ApLjXKuD8rw1n1XLCwCUEL5eLPljTZaAveqdOFQOiZnZEGI27qIiZe7I1fN8tcz6anS/gTM7xRKE++5egEvRWlTQQTJeApnPSiUPA+8ZykNdelQsOQh5SrGoyI4A5pq****==',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'KeyVersionId' => [
                                'description' => '对明文数据进行加密的主密钥版本号。',
                                'type' => 'string',
                                'example' => '2ab1a983-7072-4bbc-a582-584b5bd8****',
                            ],
                            'KeyId' => [
                                'description' => '主密钥的全局唯一标识符。'."\n"
                                    ."\n"
                                    .'> 如果请求中的KeyId参数使用的是主密钥的别名，在响应中会返回别名对应的主密钥标识符。',
                                'type' => 'string',
                                'example' => '5c438b18-05be-40ad-b6c2-3be6752c****',
                            ],
                            'Value' => [
                                'description' => '签名验证是否通过。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '475f1620-b9d3-4d35-b5c6-3fbdd941423d',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter is not valid.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'Forbidden.AliasNotFound',
                        'errorMessage' => 'The specified Alias is not found.',
                    ],
                    [
                        'errorCode' => 'Forbidden.KeyNotFound',
                        'errorMessage' => 'The specified Key is not found.',
                    ],
                    [
                        'errorCode' => 'InvalidAccessKeyId.NotFound',
                        'errorMessage' => 'The Access Key ID provided does not exist in our records.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"KeyVersionId\\": \\"2ab1a983-7072-4bbc-a582-584b5bd8****\\",\\n  \\"KeyId\\": \\"5c438b18-05be-40ad-b6c2-3be6752c****\\",\\n  \\"Value\\": true,\\n  \\"RequestId\\": \\"475f1620-b9d3-4d35-b5c6-3fbdd941423d\\"\\n}","errorExample":""},{"type":"xml","example":"<AsymmetricVerifyResponse>\\n    <KeyVersionId>2ab1a983-7072-4bbc-a582-584b5bd8****</KeyVersionId>\\n    <KeyId>5c438b18-05be-40ad-b6c2-3be6752c****</KeyId>\\n    <Value>true</Value>\\n    <RequestId>475f1620-b9d3-4d35-b5c6-3fbdd941423d</RequestId>\\n</AsymmetricVerifyResponse>","errorExample":""}]',
            'title' => '使用非对称密钥进行验签',
            'summary' => '调用AsymmetricVerify接口使用非对称密钥进行验签。',
            'description' => '### 注意事项'."\n"
                ."\n"
                .'- 非KMS实例中的密钥：进行密码运算时，仅支持通过阿里云SDK调用OpenAPI。'."\n"
                ."\n"
                .'- KMS实例中的密钥：进行密码运算时，支持如下两种方式。'."\n"
                ."\n"
                .'  - 方式一（推荐）：通过KMS实例SDK调用KMS实例API。详细介绍，请参见[KMS实例SDK](~~601593~~)、[KMS实例API](~~601485~~)。'."\n"
                .'  - 方式二：通过阿里云SDK调用OpenAPI，但认证方式仅支持可信实体为阿里云服务的RAM角色。详细信息，请参见[创建可信实体为阿里云服务的RAM角色](~~116800~~)。'."\n"
                ."\n"
                .'### QPS限制'."\n"
                .'本接口的单用户QPS限制为200次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。'."\n"
                ."\n\n"
                .'### 详细说明'."\n"
                .'仅支持**Usage**为**SIGN/VERIFY**的非对称密钥。支持的签名算法如下表：'."\n"
                ."\n"
                .'| KeySpec        | Algorithm           | 说明  |'."\n"
                .'| ------------- |------------   | ----- |'."\n"
                .'| RSA_2048 | RSA_PSS_SHA_256  | RSASSA-PSS using SHA-256 and MGF1 with SHA-256 |'."\n"
                .'| RSA_2048 | RSA_PKCS1_SHA_256   | RSASSA-PKCS1-v1_5 using SHA-256 |'."\n"
                .'| RSA_3072  | RSA_PSS_SHA_256  | RSASSA-PSS using SHA-256 and MGF1 with SHA-256 |'."\n"
                .'| RSA_3072  | RSA_PKCS1_SHA_256   | RSASSA-PKCS1-v1_5 using SHA-256 |'."\n"
                .'| EC_P256 | ECDSA_SHA_256   | ECDSA on the P-256 Curve(secp256r1) with a SHA-256 digest |'."\n"
                .'| EC_P256K | ECDSA_SHA_256   | ECDSA on the P-256K Curve(secp256k1) with a SHA-256 digest |'."\n"
                .'| EC_SM2 | SM2DSA | SM2椭圆曲线数字签名算法 |'."\n"
                ."\n"
                .'> 按照国家标准GBT32918，计算SM2签名值时，**Digest**参数不是对原始消息直接计算SM3摘要，而是对Z(A)和M的拼接值计算的摘要，其中M是待签名的原始消息，Z(A)是GBT32918中定义的用户A的杂凑值。'."\n"
                ."\n"
                .'本文将提供一个示例，使用密钥ID为`5c438b18-05be-40ad-b6c2-3be6752c****`、密钥版本ID为`2ab1a983-7072-4bbc-a582-584b5bd8****`的非对称密钥，通过签名算法RSA_PSS_SHA_256对摘要信息`ZOyIygCyaOW6GjVnihtTFtIS9PNmskdyMlNKiuyjfzw=`生成的签名值`M2CceNZH00ZgL9ED/ZHFp21YRAvYeZHknJUc207OCZ0N9wNn9As4z2bON3FF3je+1Nu+2+/8Zj50HpMTpzYpMp2R93cYmACCmhaYoKydxylbyGzJR8y9likZRCrkD38lRoS40aBBvv/6iRKzQuo9EGYVcel36cMNg00VmYNBy3pa1rwg3gA4l3cy6kjayZja1WGPkVhrVKsrJMdbpl0ApLjXKuD8rw1n1XLCwCUEL5eLPljTZaAveqdOFQOiZnZEGI27qIiZe7I1fN8tcz6anS/gTM7xRKE++5egEvRWlTQQTJeApnPSiUPA+8ZykNdelQsOQh5SrGoyI4A5pq****==`进行验证。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'AsymmetricEncrypt' => [
            'summary' => '调用AsymmetricEncrypt接口使用非对称密钥进行加密。',
            'methods' => [
                'post',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'Plaintext',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要加密的明文，使用Base64编码。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'SGVsbG8gd29ybGQ=',
                    ],
                ],
                [
                    'name' => 'KeyId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '密钥的ID，也可以指定为密钥别名或密钥资源名称（ARN）。关于别名的详细介绍，请参见[管理密钥别名](~~480655~~)。'."\n"
                            .'>访问其他阿里云账号下的密钥时，必须输入密钥ARN。密钥ARN的格式为`acs:kms:${region}:${account}:key/${keyid}`。'."\n",
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'key-hzz630494463ejqjx****',
                    ],
                ],
                [
                    'name' => 'KeyVersionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '密钥版本ID。密钥版本的全局唯一标识符。  '."\n"
                            ."\n"
                            .'> 您可以调用[ListKeyVersions](~~133966~~)接口获取KeyVersionId（密钥版本ID）。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '2ab1a983-7072-4bbc-a582-584b5bd8****',
                    ],
                ],
                [
                    'name' => 'Algorithm',
                    'in' => 'query',
                    'schema' => [
                        'description' => '加密算法。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'RSAES_OAEP_SHA_1',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'KeyVersionId' => [
                                'description' => '对明文数据进行加密的主密钥版本号。',
                                'type' => 'string',
                                'example' => '2ab1a983-7072-4bbc-a582-584b5bd8****',
                            ],
                            'KeyId' => [
                                'description' => '密钥ID。如果请求中的KeyId参数使用的是密钥别名、密钥ARN，在响应中也会返回密钥ID。'."\n",
                                'type' => 'string',
                                'example' => 'key-hzz630494463ejqjx****',
                            ],
                            'CiphertextBlob' => [
                                'description' => '加密后的密文，使用Base64编码。',
                                'type' => 'string',
                                'example' => 'BQKP+1zK6+ZEMxTP5qaVzcsgXtWplYBKm0NXdSnB5FzliFxE1bSiu4dnEIlca2JpeH7yz1/S6fed630H+hIH6DoM25fTLNcKj+mFB0Xnh9m2+HN59Mn4qyTfcUeadnfCXSWcGBouhXFwcdd2rJ3n337bzTf4jm659gZu3L0i6PLuxM9p7mqdwO0cKJPfGVfhnfMz+f4alMg79WB/NNyE2lyX7/qxvV49ObNrrJbKSFiz8Djocaf0IESNLMbfYI5bXjWkJlX92DQbKhibtQW8ZOJ//ZC6t0AWcUoKL6QDm/dg5koQalcleRinpB+QadFm894sLbVZ9+N4GVsv1Wbjwg==',
                            ],
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '475f1620-b9d3-4d35-b5c6-3fbdd941423d',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'Rejected.UnsupportedOperation',
                        'errorMessage' => 'Unsupported operation.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'Forbidden.AliasNotFound',
                        'errorMessage' => 'The specified Alias is not found.',
                    ],
                    [
                        'errorCode' => 'Forbidden.KeyNotFound',
                        'errorMessage' => 'The specified Key is not found.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"KeyVersionId\\": \\"2ab1a983-7072-4bbc-a582-584b5bd8****\\",\\n  \\"KeyId\\": \\"key-hzz630494463ejqjx****\\",\\n  \\"CiphertextBlob\\": \\"BQKP+1zK6+ZEMxTP5qaVzcsgXtWplYBKm0NXdSnB5FzliFxE1bSiu4dnEIlca2JpeH7yz1/S6fed630H+hIH6DoM25fTLNcKj+mFB0Xnh9m2+HN59Mn4qyTfcUeadnfCXSWcGBouhXFwcdd2rJ3n337bzTf4jm659gZu3L0i6PLuxM9p7mqdwO0cKJPfGVfhnfMz+f4alMg79WB/NNyE2lyX7/qxvV49ObNrrJbKSFiz8Djocaf0IESNLMbfYI5bXjWkJlX92DQbKhibtQW8ZOJ//ZC6t0AWcUoKL6QDm/dg5koQalcleRinpB+QadFm894sLbVZ9+N4GVsv1Wbjwg==\\",\\n  \\"RequestId\\": \\"475f1620-b9d3-4d35-b5c6-3fbdd941423d\\"\\n}","errorExample":""},{"type":"xml","example":"<AsymmetricEncryptResponse>\\n    <KeyVersionId>2ab1a983-7072-4bbc-a582-584b5bd8****</KeyVersionId>\\n    <KeyId>key-hzz630494463ejqjx****</KeyId>\\n    <CiphertextBlob>BQKP+1zK6+ZEMxTP5qaVzcsgXtWplYBKm0NXdSnB5FzliFxE1bSiu4dnEIlca2JpeH7yz1/S6fed630H+hIH6DoM25fTLNcKj+mFB0Xnh9m2+HN59Mn4qyTfcUeadnfCXSWcGBouhXFwcdd2rJ3n337bzTf4jm659gZu3L0i6PLuxM9p7mqdwO0cKJPfGVfhnfMz+f4alMg79WB/NNyE2lyX7/qxvV49ObNrrJbKSFiz8Djocaf0IESNLMbfYI5bXjWkJlX92DQbKhibtQW8ZOJ//ZC6t0AWcUoKL6QDm/dg5koQalcleRinpB+QadFm894sLbVZ9+N4GVsv1Wbjwg==</CiphertextBlob>\\n    <RequestId>475f1620-b9d3-4d35-b5c6-3fbdd941423d</RequestId>\\n</AsymmetricEncryptResponse>","errorExample":""}]',
            'title' => '使用非对称密钥进行加密',
            'description' => '### 注意事项'."\n"
                ."\n"
                .'- 非KMS实例中的密钥：进行密码运算时，仅支持通过阿里云SDK调用OpenAPI。'."\n"
                ."\n"
                .'- KMS实例中的密钥：进行密码运算时，支持如下两种方式。'."\n"
                ."\n"
                .'  - 方式一（推荐）：通过KMS实例SDK调用KMS实例API。详细介绍，请参见[KMS实例SDK](~~601593~~)、[KMS实例API](~~601485~~)。'."\n"
                .'  - 方式二：通过阿里云SDK调用OpenAPI，但认证方式仅支持可信实体为阿里云服务的RAM角色。详细信息，请参见[创建可信实体为阿里云服务的RAM角色](~~116800~~)。'."\n"
                ."\n"
                .'### QPS限制'."\n"
                .'本接口的单用户QPS限制为200次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。'."\n"
                ."\n\n"
                .'### 详细说明'."\n"
                .'仅支持**Usage**为**ENCRYPT/DECRYPT**的非对称密钥。支持的加密算法如下表：'."\n"
                ."\n"
                .'| KeySpec        | Algorithm           | 说明  |  可加密的最大字节数 |'."\n"
                .'| ------------- |------------   | ----- |  ----- |'."\n"
                .'| RSA_2048 | RSAES\\_OAEP\\_SHA_256  | RSAES-OAEP using SHA-256 and MGF1 with SHA-256| 190 |'."\n"
                .'| RSA_2048 | RSAES\\_OAEP\\_SHA_1      | RSAES-OAEP using SHA1 and MGF1 with SHA1 | 214 |'."\n"
                .'| RSA_3072 | RSAES\\_OAEP\\_SHA_256  | RSAES-OAEP using SHA-256 and MGF1 with SHA-256| 318 |'."\n"
                .'| RSA_3072 | RSAES\\_OAEP\\_SHA_1      | RSAES-OAEP using SHA1 and MGF1 with SHA1 | 342 |'."\n"
                .'| EC_SM2 | SM2PKE | SM2椭圆曲线公钥加密算法 | 6047 |'."\n"
                ."\n"
                .'本文将提供一个示例，使用密钥ID为`key-hzz630494463ejqjx****'."\n"
                .'`、密钥版本ID为`2ab1a983-7072-4bbc-a582-584b5bd8****`的非对称密钥，通过加密算法`RSAES_OAEP_SHA_1`对明文`SGVsbG8gd29ybGQ=`进行加密。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'AsymmetricDecrypt' => [
            'summary' => '调用AsymmetricDecrypt接口使用非对称密钥进行解密。',
            'methods' => [
                'post',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'CiphertextBlob',
                    'in' => 'query',
                    'schema' => [
                        'description' => '解密密文，使用Base64编码。 '."\n"
                            ."\n"
                            .'> 您可以调用[AsymmetricEncrypt](~~148131~~)接口生成密文。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'BQKP+1zK6+ZEMxTP5qaVzcsgXtWplYBKm0NXdSnB5FzliFxE1bSiu4dnEIlca2JpeH7yz1/S6fed630H+hIH6DoM25fTLNcKj+mFB0Xnh9m2+HN59Mn4qyTfcUeadnfCXSWcGBouhXFwcdd2rJ3n337bzTf4jm659gZu3L0i6PLuxM9p7mqdwO0cKJPfGVfhnfMz+f4alMg79WB/NNyE2lyX7/qxvV49ObNrrJbKSFiz8Djocaf0IESNLMbfYI5bXjWkJlX92DQbKhibtQW8ZOJ//ZC6t0AWcUoKL6QDm/dg5koQalcleRinpB+QadFm894sLbVZ9+N4GVsv1W****==',
                    ],
                ],
                [
                    'name' => 'KeyId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '密钥的ID，也可以指定为密钥别名或密钥资源名称（ARN）。关于别名的详细介绍，请参见[管理密钥别名](~~480655~~)。'."\n"
                            .'>访问其他阿里云账号下的密钥时，必须输入密钥ARN。密钥ARN的格式为`acs:kms:${region}:${account}:key/${keyid}`。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'key-hzz630494463ejqjx****',
                    ],
                ],
                [
                    'name' => 'KeyVersionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '密钥版本ID。密钥版本的全局唯一标识符。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '2ab1a983-7072-4bbc-a582-584b5bd8****',
                    ],
                ],
                [
                    'name' => 'Algorithm',
                    'in' => 'query',
                    'schema' => [
                        'description' => '解密算法。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'RSAES_OAEP_SHA_1',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'KeyVersionId' => [
                                'description' => '对明文数据进行加密的主密钥版本号。',
                                'type' => 'string',
                                'example' => '2ab1a983-7072-4bbc-a582-584b5bd8****',
                            ],
                            'KeyId' => [
                                'description' => '密钥ID。如果请求中的KeyId参数使用的是密钥别名、密钥ARN，在响应中也会返回密钥ID。'."\n",
                                'type' => 'string',
                                'example' => 'key-hzz630494463ejqjx****',
                            ],
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '475f1620-b9d3-4d35-b5c6-3fbdd941423d',
                            ],
                            'Plaintext' => [
                                'description' => '解密后的明文，使用Base64编码。',
                                'type' => 'string',
                                'example' => 'SGVsbG8gd29ybGQ=',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'Rejected.UnsupportedOperation',
                        'errorMessage' => 'Unsupported operation.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'Forbidden.AliasNotFound',
                        'errorMessage' => 'The specified Alias is not found.',
                    ],
                    [
                        'errorCode' => 'Forbidden.KeyNotFound',
                        'errorMessage' => 'The specified Key is not found.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"KeyVersionId\\": \\"2ab1a983-7072-4bbc-a582-584b5bd8****\\",\\n  \\"KeyId\\": \\"key-hzz630494463ejqjx****\\",\\n  \\"RequestId\\": \\"475f1620-b9d3-4d35-b5c6-3fbdd941423d\\",\\n  \\"Plaintext\\": \\"SGVsbG8gd29ybGQ=\\"\\n}","errorExample":""},{"type":"xml","example":"<AsymmetricDecryptResponse>\\n    <KeyVersionId>2ab1a983-7072-4bbc-a582-584b5bd8****</KeyVersionId>\\n    <KeyId>key-hzz630494463ejqjx****</KeyId>\\n    <RequestId>475f1620-b9d3-4d35-b5c6-3fbdd941423d</RequestId>\\n    <Plaintext>SGVsbG8gd29ybGQ=</Plaintext>\\n</AsymmetricDecryptResponse>","errorExample":""}]',
            'title' => '使用非对称密钥进行解密',
            'description' => '### 注意事项'."\n"
                ."\n"
                .'- 非KMS实例中的密钥：进行密码运算时，仅支持通过阿里云SDK调用OpenAPI。'."\n"
                ."\n"
                .'- KMS实例中的密钥：进行密码运算时，支持如下两种方式。'."\n"
                ."\n"
                .'  - 方式一（推荐）：通过KMS实例SDK调用KMS实例API。详细介绍，请参见[KMS实例SDK](~~601593~~)、[KMS实例API](~~601485~~)。'."\n"
                .'  - 方式二：通过阿里云SDK调用OpenAPI，但认证方式仅支持可信实体为阿里云服务的RAM角色。详细信息，请参见[创建可信实体为阿里云服务的RAM角色](~~116800~~)。'."\n"
                ."\n"
                .'### QPS限制'."\n"
                .'本接口的单用户QPS限制为200次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。'."\n"
                ."\n\n"
                .'### 详细说明'."\n"
                .'仅支持**Usage**为**ENCRYPT/DECRYPT**的非对称密钥。支持的加密算法如下表：'."\n"
                ."\n"
                .'| KeySpec        | Algorithm           | 说明  |  密文长度（字节）|'."\n"
                .'| ------------- |------------   | ----- |  ----- |'."\n"
                .'| RSA_2048 | RSAES\\_OAEP\\_SHA_256  | RSAES-OAEP using SHA-256 and MGF1 with SHA-256| 256 |'."\n"
                .'| RSA_2048 | RSAES\\_OAEP\\_SHA_1      | RSAES-OAEP using SHA1 and MGF1 with SHA1 | 256 |'."\n"
                .'| RSA_3072 | RSAES\\_OAEP\\_SHA_256  | RSAES-OAEP using SHA-256 and MGF1 with SHA-256| 384 |'."\n"
                .'| RSA_3072 | RSAES\\_OAEP\\_SHA_1      | RSAES-OAEP using SHA1 and MGF1 with SHA1 | 384 |'."\n"
                .'| EC_SM2 | SM2PKE | SM2椭圆曲线公钥加密算法 | 最大6144 |'."\n"
                ."\n"
                .'本文将提供一个示例，使用密钥ID为`key-hzz630494463ejqjx****'."\n"
                .'`、密钥版本ID为`2ab1a983-7072-4bbc-a582-584b5bd8****`的非对称密钥，通过解密算法`RSAES_OAEP_SHA_1`对密文`BQKP+1zK6+ZEMxTP5qaVzcsgXtWplYBKm0NXdSnB5FzliFxE1bSiu4dnEIlca2JpeH7yz1/S6fed630H+hIH6DoM25fTLNcKj+mFB0Xnh9m2+HN59Mn4qyTfcUeadnfCXSWcGBouhXFwcdd2rJ3n337bzTf4jm659gZu3L0i6PLuxM9p7mqdwO0cKJPfGVfhnfMz+f4alMg79WB/NNyE2lyX7/qxvV49ObNrrJbKSFiz8Djocaf0IESNLMbfYI5bXjWkJlX92DQbKhibtQW8ZOJ//ZC6t0AWcUoKL6QDm/dg5koQalcleRinpB+QadFm894sLbVZ9+N4GVsv1W****==`进行解密。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateSecret' => [
            'summary' => '并存入凭据的初始版本。',
            'methods' => [
                'post',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
                'abilityTreeCode' => '54548',
                'abilityTreeNodes' => [
                    'FEATUREkms52EQP9',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'SecretName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '凭据名称。  '."\n"
                            .'长度不超过192个字符，可包含中文、英文字母、数字、下划线（_）、正斜线（/）、加号（+）、等号（=）、半角句号（.）、短划线（-）和字符（@），其中中文的字符长度不超过64个。不同类型的凭据名称要求如下：  '."\n"
                            ."\n"
                            .'- 当SecretType取值为Generic（通用凭据）或Rds（RDS凭据）时，不能以`acs/`开头。  '."\n"
                            ."\n"
                            .'- 当SecretType取值为RAMCredentials（RAM凭据）时，使用固定值`$Auto`。此时KMS自动生成凭据名称，以`acs/ram/user/`开头，包含RAM用户显示名称。'."\n"
                            ."\n"
                            .'- 当SecretType取值为ECS（ECS凭据）时，必须以`acs/ecs/`开头。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'mydbconninfo',
                    ],
                ],
                [
                    'name' => 'VersionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '初始版本的版本号，版本号在该凭据内唯一。'."\n"
                            .'长度不超过64个字符。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'v1',
                    ],
                ],
                [
                    'name' => 'EncryptionKeyId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用于加密凭据值的密钥ID。'."\n"
                            ."\n"
                            .'> 密钥和凭据需要属于同一个KMS实例，且密钥必须为对称密钥。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => 'key-gzz63ff0db5hg3qje****',
                        'default' => '',
                    ],
                ],
                [
                    'name' => 'SecretData',
                    'in' => 'query',
                    'schema' => [
                        'description' => '凭据值。长度不超过30720字节（30KB）。KMS使用指定的密钥对其加密后，存入初始版本中。'."\n"
                            ."\n"
                            .'- 当SecretType取值为Generic（通用凭据）时，您可以自定义凭据值。'."\n"
                            ."\n"
                            .'- 当SecretType取值为Rds（RDS凭据）时，凭据值格式为：`{"Accounts":[{"AccountName":"","AccountPassword":""}]}`。其中，`AccountName`为RDS实例的账号名称，`AccountPassword`为RDS实例的账号口令。  '."\n"
                            ."\n"
                            .'- 当SecretType取值为RAMCredentials（RAM凭据）时，凭据值格式为：`{"AccessKeys":[{"AccessKeyId":"","AccessKeySecret":""}]}`。其中，`AccessKeyId`是访问密钥ID，`AccessKeySecret`是访问密钥内容。您需要指定RAM用户的所有AccessKey。'."\n"
                            ."\n"
                            .'- 当SecretType取值为ECS（ECS凭据）时，凭据值格式为：  '."\n"
                            ."\n"
                            .'   - 当ExtendedConfig参数中SecretSubType取值为Password时：`{"UserName":"","Password": ""}`。其中，`UserName`为登录ECS实例的用户名，`Password`为登录ECS实例的密码。  '."\n"
                            ."\n"
                            .'   - 当ExtendedConfig参数中SecretSubType取值为SSHKey时：`{"UserName":"","PublicKey": "", "PrivateKey": ""}`。其中，`PublicKey`为登录ECS实例的SSH格式公钥，`PrivateKey`为登录ECS实例的私钥。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '{"Accounts":[{"AccountName":"user1","AccountPassword":"****"}]}',
                    ],
                ],
                [
                    'name' => 'SecretDataType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '凭据值类型。取值：'."\n"
                            .'- text（默认值）：文本类型'."\n"
                            .'- binary：二进制类型'."\n"
                            ."\n"
                            .'> 当SecretType取值为Rds、RAMCredentials或ECS时，SecretDataType取值只能为text。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => 'text',
                        'default' => 'text',
                        'enum' => [
                            'text',
                            'binary',
                        ],
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '凭据的描述信息。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => 'mydbinfo',
                    ],
                ],
                [
                    'name' => 'Tags',
                    'in' => 'query',
                    'schema' => [
                        'description' => '凭据的标签。每个标签由一个键值对（Key:Value）组成，包含标签键（Key）、标签值（Value）。'."\n"
                            ."\n"
                            .'标签建和标签值的格式：最多支持128个字符，可以包含英文大小写字母、数字、正斜线（/）、反斜线（\\）、下划线（_）、短划线（-）、半角句号（.）、加号（+）、等于号（=）、半角冒号（:）、字符at（@）。'."\n"
                            ."\n"
                            .'- 标签键不能以aliyun或acs:开头。'."\n"
                            ."\n"
                            .'- 每个凭据最多可以设置20个标签键值对。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => '[{\\"TagKey\\":\\"key1\\",\\"TagValue\\":\\"val1\\"},{\\"TagKey\\":\\"key2\\",\\"TagValue\\":\\"val2\\"}]',
                    ],
                ],
                [
                    'name' => 'SecretType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '凭据类型。取值：'."\n"
                            ."\n"
                            .'- Generic（默认值）：通用凭据。  '."\n"
                            .'- Rds：RDS凭据。  '."\n"
                            ."\n"
                            .'- RAMCredentials：RAM凭据。  '."\n"
                            ."\n"
                            .'- ECS：ECS凭据。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Rds',
                    ],
                ],
                [
                    'name' => 'ExtendedConfig',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '凭据的拓展配置，用于指定特定凭据类型的属性。长度不超过1024个字符。'."\n"
                            ."\n"
                            .'- 当SecretType取值为Generic（通用凭据）时，忽略该参数。'."\n"
                            ."\n"
                            .'- 当SecretType取值为Rds（RDS凭据）时，需要指定ExtendedConfig的如下参数：'."\n"
                            .' - SecretSubType（必填）：凭据子类型。取值：  '."\n"
                            ."\n"
                            .'     - SingleUser：指定凭据管家以单账号模式RDS凭据。凭据轮转时，指定账号的口令会被重置为新的随机口令。'."\n"
                            .'     - DoubleUsers：指定凭据管家以双账号模式RDS凭据，ACSCurrent和ACSPrevious分别引用其中一个账号。凭据轮转时，ACSPrevious引用账号的口令会被重置为新的随机口令，随后凭据管家交换ACSCurrent和ACSPrevious对RDS账号的引用。'."\n"
                            .' - DBInstanceId（必填）：指定RDS账号所在的RDS实例ID。'."\n"
                            .' - CustomData（可选）：自定义数据。取值为JSON格式的键值对，最多不超过10个键值对，多个键值对用半角逗号（,）间隔。取值示例：`{"Key1": "v1", "fds":"fdsf"}`。默认值为空`{}`。  '."\n"
                            .'- 当SecretType取值为RAMCredentials（RAM凭据）时，需要指定ExtendedConfig的如下参数：'."\n"
                            .' - SecretSubType（必填）：凭据子类型。取值：  RamUserAccessKey。'."\n"
                            .' - UserName（必填）：RAM用户名称。'."\n"
                            .' - CustomData（可选）：自定义数据。取值为JSON格式的键值对，最多不超过10个键值对，多个键值对用半角逗号（,）间隔。默认值为空`{}`。  '."\n"
                            .'- 当SecretType取值为ECS（ECS凭据）时，需要指定ExtendedConfig的如下参数：'."\n"
                            .' - SecretSubType（必填）：凭据子类型。取值：  '."\n"
                            ."\n"
                            .'     - Password：ECS口令。'."\n"
                            .'     - SSHKey：ECS SSH公私钥。'."\n"
                            .' - RegionId（必填）：ECS实例所在地域ID。  '."\n"
                            .' - InstanceId（必填）：ECS实例ID。'."\n"
                            .' - CustomData（可选）：自定义数据。取值为JSON格式的键值对，最多不超过10个键值对，多个键值对用半角逗号（,）间隔。默认值为空`{}`。    '."\n"
                            .'  '."\n"
                            ."\n"
                            .'> 当SecretType取值为Rds、RAMCredentials或ECS时，必须设置该参数。',
                        'type' => 'object',
                        'required' => false,
                        'example' => '{"SecretSubType":"SingleUser", "DBInstanceId":"rm-bp1b3dd3a506e****" ,"CustomData":{"Key1": "v1", "fds":"fdsf"}}',
                    ],
                ],
                [
                    'name' => 'EnableAutomaticRotation',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否开启自动轮转，取值：'."\n"
                            .'- true：开启自动轮转。'."\n"
                            .'- false（默认值）：不开启自动轮转。'."\n"
                            ."\n\n"
                            .'> 当SecretType取值为Rds（RDS凭据）、RAMCredentials（RAM凭据）或ECS（ECS凭据）时，该参数有效。当SecretType取值为Generic（通用凭据）时，不支持自动轮转，您可通过[PutSecretValue](~~154503~~)操作手工轮转。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'RotationInterval',
                    'in' => 'query',
                    'schema' => [
                        'description' => '自动轮转的周期。取值范围：6小时~8,760小时（365天）。  '."\n"
                            .'格式为`integer[unit]`，其中`integer`表示时间长度，`unit`表示时间单位。  '."\n"
                            .'unit取值：d（天）、h（小时）、m（分钟）、s（秒）。例如：7d或者604,800s均表示7天的周期。  '."\n"
                            ."\n"
                            .'> 仅当EnableAutomaticRotation取值为true时，必须设置该参数，否则无需设置。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '30d',
                    ],
                ],
                [
                    'name' => 'DKMSInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'KMS实例的实例ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'kst-bjj62d8f5e0sgtx8h****',
                    ],
                ],
                [
                    'name' => 'Policy',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'description' => '凭据策略的具体内容，JSON格式。最大长度为32768个字节。'."\n"
                            ."\n"
                            .'关于凭据策略的详细介绍，请参见[凭据策略概述](~~2716465~~)。不输入该参数时，使用默认凭据策略。'."\n"
                            ."\n"
                            .'凭据策略内容包含：'."\n"
                            ."\n"
                            .'- Version：凭据策略的版本，目前版本仅支持设置为1。'."\n"
                            .'- Statement：凭据策略的语句，每个凭据策略包含一个或多个语句。'."\n"
                            ."\n"
                            .'凭据策略格式为：'."\n"
                            ."\n"
                            .'```'."\n"
                            .'{'."\n"
                            .'    "Version": "1",'."\n"
                            .'    "Statement": ['."\n"
                            .'        {'."\n"
                            .'            "Sid": "Enable RAM User Permissions",'."\n"
                            .'            "Effect": "Allow",'."\n"
                            .'            "Principal": {'."\n"
                            .'              "RAM": "acs:ram::123456789012:root"'."\n"
                            .'            }'."\n"
                            .'            "Action": ['."\n"
                            .'                "kms:*"'."\n"
                            .'            ],'."\n"
                            .'            "Resource": ['."\n"
                            .'                "*"'."\n"
                            .'            ]'."\n"
                            .'        }'."\n"
                            .'    ]'."\n"
                            .'}'."\n"
                            .'```'."\n"
                            ."\n"
                            .'Statement详细介绍：'."\n"
                            .'- Sid：可选，表示自定义的语句标识符。内容长度小于等于128字符，支持的字符为：大写英文字母（A-Z）、小写英文字母（a-z）、数字（0-9），特殊字符（ _/+=.@-）。'."\n"
                            .'- Effect：必选，表示是允许还是拒绝该策略语句中的权限。取值为：Allow或Deny。'."\n"
                            ."\n"
                            .'- Principal：必选，表示权限策略的授权主体，支持设置为当前阿里云账号（即密钥所属的阿里云账号），当前阿里云账号下的RAM用户、RAM角色，其他阿里云账号下的RAM用户、RAM角色。'."\n"
                            ."\n"
                            .'- Action：必选，表示要允许或拒绝的API操作，内容必须以"kms:"开头。操作权限列表的范围，请参见[凭据策略概述](~~2716465~~)。如果您设置了列表外的操作，设置后也不会生效。'."\n"
                            ."\n"
                            .'- Resource：必选，取值只能是*，表示本KMS凭据。'."\n"
                            ."\n"
                            .'>授权给其他阿里云账号下的RAM用户、RAM角色后，您仍需在访问控制RAM侧，使用该RAM用户、RAM角色的阿里云账号为其授权使用该凭据，RAM用户、RAM角色才能使用该凭据。集体操作，请参见[密钥管理服务自定义权限策略参考](~~480682~~)、[为RAM用户授权](~~116146~~)、[为RAM角色授权](~~116147~~)。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"Version":"1","Statement": [{"Sid":"kms default secret policy","Effect":"Allow","Principal":{"RAM": ["acs:ram::119285303511****:*"]},"Action":["kms:*"],"Resource": ["*"] }] }',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '3bf02f7a-015b-4f93-be0f-cc043fda2dd3',
                            ],
                            'AutomaticRotation' => [
                                'description' => '是否开启自动轮转。取值：'."\n"
                                    .'- Enabled：开启自动轮转。'."\n"
                                    .'- Disabled：不开启自动轮转。'."\n"
                                    .'- Invalid：轮转状态异常，凭据管家无法为您自动轮转。'."\n"
                                    ."\n"
                                    .'> SecretType取值为Rds、RAMCredentials或ECS时，返回该参数。',
                                'type' => 'string',
                                'example' => 'Enabled',
                            ],
                            'SecretName' => [
                                'description' => '凭据名称。',
                                'type' => 'string',
                                'example' => 'mydbconninfo',
                            ],
                            'VersionId' => [
                                'description' => '凭据版本号。',
                                'type' => 'string',
                                'example' => 'v1',
                            ],
                            'NextRotationDate' => [
                                'description' => '下一次轮转的时间。  '."\n"
                                    .'> 当自动轮转开启时，返回该参数。',
                                'type' => 'string',
                                'example' => '2023-07-06T18:22:03Z',
                            ],
                            'SecretType' => [
                                'description' => '凭据类型。取值：'."\n"
                                    ."\n"
                                    .'- Generic：通用凭据。  '."\n"
                                    .'- Rds：RDS凭据。  '."\n"
                                    ."\n"
                                    .'- RAMCredentials：RAM凭据。  '."\n"
                                    ."\n"
                                    .'- ECS：ECS凭据。'."\n"
                                    ."\n",
                                'type' => 'string',
                                'example' => 'Rds',
                            ],
                            'RotationInterval' => [
                                'description' => '凭据自动轮转的周期。    '."\n"
                                    .'格式为`integer[unit]`，其中`integer`表示时间长度，`unit`表示时间单位。 `unit`取值：s（秒）。例如：7天的轮转周期为604800s。'."\n"
                                    ."\n"
                                    .'> 当自动轮转开启时，返回该参数。',
                                'type' => 'string',
                                'example' => '604800s',
                            ],
                            'Arn' => [
                                'description' => '阿里云资源名称。',
                                'type' => 'string',
                                'example' => 'acs:kms:cn-hangzhou:154035569884****:secret/mydbconninfo',
                            ],
                            'ExtendedConfig' => [
                                'description' => '凭据的拓展配置。  '."\n"
                                    ."\n"
                                    .'> 当SecretType取值为Rds、RAMCredentials或ECS时，返回该参数。'."\n",
                                'type' => 'string',
                                'example' => '{\\"SecretSubType\\":\\"SingleUser\\", \\"DBInstanceId\\":\\"rm-uf667446pc955****\\",  \\"CustomData\\":"Key1": "v1", "fds":"fdsf"} }',
                            ],
                            'DKMSInstanceId' => [
                                'description' => 'KMS实例的实例ID。',
                                'type' => 'string',
                                'example' => 'kst-bjj62d8f5e0sgtx8h****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'UnsupportedOperation',
                        'errorMessage' => 'This action is not supported.',
                    ],
                    [
                        'errorCode' => 'Rejected.LimitExceeded',
                        'errorMessage' => 'The request was rejected because user create resource limit was exceeded',
                    ],
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter is not valid.',
                    ],
                    [
                        'errorCode' => 'Rejected.ShareQuotaExceedLimit',
                        'errorMessage' => 'Instance Share Quota Exceed Limit.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden.DKMSInstanceNotFound',
                        'errorMessage' => 'The specified DKMS Instance is not found.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'Forbidden.ResourceNotFound',
                        'errorMessage' => 'The resource is not found.',
                    ],
                ],
                409 => [
                    [
                        'errorCode' => 'Rejected.ResourceExist',
                        'errorMessage' => 'The resource already exists.',
                    ],
                    [
                        'errorCode' => 'Rejected.ResourceInDeleteWindow',
                        'errorMessage' => 'The secret is planned to be deleted.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalFailure',
                        'errorMessage' => 'Internal  Failure',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"3bf02f7a-015b-4f93-be0f-cc043fda2dd3\\",\\n  \\"AutomaticRotation\\": \\"Enabled\\",\\n  \\"SecretName\\": \\"mydbconninfo\\",\\n  \\"VersionId\\": \\"v1\\",\\n  \\"NextRotationDate\\": \\"2023-07-06T18:22:03Z\\",\\n  \\"SecretType\\": \\"Rds\\",\\n  \\"RotationInterval\\": \\"604800s\\",\\n  \\"Arn\\": \\"acs:kms:cn-hangzhou:154035569884****:secret/mydbconninfo\\",\\n  \\"ExtendedConfig\\": \\"{\\\\\\\\\\\\\\"SecretSubType\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"SingleUser\\\\\\\\\\\\\\", \\\\\\\\\\\\\\"DBInstanceId\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"rm-uf667446pc955****\\\\\\\\\\\\\\",  \\\\\\\\\\\\\\"CustomData\\\\\\\\\\\\\\":\\\\\\"Key1\\\\\\": \\\\\\"v1\\\\\\", \\\\\\"fds\\\\\\":\\\\\\"fdsf\\\\\\"} }\\",\\n  \\"DKMSInstanceId\\": \\"kst-bjj62d8f5e0sgtx8h****\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateSecretResponse>\\n    <RequestId>3bf02f7a-015b-4f93-be0f-cc043fda2dd3</RequestId>\\n    <AutomaticRotation>Enabled</AutomaticRotation>\\n    <SecretName>mydbconninfo</SecretName>\\n    <VersionId>v1</VersionId>\\n    <NextRotationDate>2023-07-06T18:22:03Z</NextRotationDate>\\n    <SecretType>Rds</SecretType>\\n    <RotationInterval>604800s</RotationInterval>\\n    <Arn>acs:kms:cn-hangzhou:154035569884****:secret/mydbconninfo</Arn>\\n    <ExtendedConfig>{\\\\\\"SecretSubType\\\\\\":\\\\\\"SingleUser\\\\\\", \\\\\\"DBInstanceId\\\\\\":\\\\\\"rm-uf667446pc955****\\\\\\",  \\\\\\"CustomData\\\\\\":\\"Key1\\": \\"v1\\", \\"fds\\":\\"fdsf\\"} }</ExtendedConfig>\\n    <DKMSInstanceId>kst-bjj62d8f5e0sgtx8h****</DKMSInstanceId>\\n</CreateSecretResponse>","errorExample":""}]',
            'title' => '创建凭据',
            'description' => '您需要指定凭据名称、初始版本的凭据值和版本号。初始版本的状态被标记为ACSCurrent。'."\n"
                ."\n"
                .'KMS使用您指定的密钥对凭据值进行加密保护，密钥和凭据需要属于同一个KMS实例，且密钥必须为对称密钥。'."\n"
                ."\n"
                .'>KMS对每个版本的凭据值进行加密，凭据名称、版本号、版本的状态标记等元数据不会被加密。'."\n"
                ."\n"
                .'您对凭据值进行加密前，需要具备密钥的`kms:GenerateDataKey`权限。    '."\n"
                ."\n"
                .'本文将提供一个示例，创建一个名称为`mydbconninfo`、初始版本号`VersionId`为`v1`、凭据值`SecretData`为`{"Accounts":[{"AccountName":"user1","AccountPassword":"****"}]}`的RDS凭据。',
            'requestParamsDescription' => ' 关于公共请求参数的详情，请参见[公共参数](~~69007~~)。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteSecret' => [
            'methods' => [
                'post',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'SecretName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '凭据名称或凭据资源名称（ARN）。'."\n"
                            .'>访问其他阿里云账号下的凭据时，必须输入凭据ARN。凭据ARN的格式为`acs:kms:${region}:${account}:secret/${secret-name}`。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'secret001',
                    ],
                ],
                [
                    'name' => 'ForceDeleteWithoutRecovery',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否立即删除凭据，且不允许恢复。'."\n"
                            ."\n"
                            .'取值范围：'."\n"
                            .'- **true**'."\n"
                            .'- **false**（默认值）',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'false',
                        'default' => 'false',
                        'enum' => [
                            'false',
                            'true',
                        ],
                    ],
                ],
                [
                    'name' => 'RecoveryWindowInDays',
                    'in' => 'query',
                    'schema' => [
                        'description' => '计划删除凭据时，该参数用于指定删除窗口，窗口期内可以恢复凭据。取值：7天~30天。'."\n"
                            .'默认值：30。'."\n"
                            ."\n"
                            .'> 当您需要立即删除凭据，即ForceDeleteWithoutRecovery取值为true时，不允许输入本参数。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => '10',
                        'default' => '30',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'SecretName' => [
                                'description' => '凭据名称。',
                                'type' => 'string',
                                'example' => 'secret001',
                            ],
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '38bbed2a-15e0-45ad-98d4-816ad2ccf4ea',
                            ],
                            'PlannedDeleteTime' => [
                                'description' => '凭据的删除时间，为时间戳格式。',
                                'type' => 'string',
                                'example' => '2024-04-15T07:02:14Z',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter is not valid.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'Forbidden.ResourceNotFound',
                        'errorMessage' => 'Resource not found',
                    ],
                    [
                        'errorCode' => 'InvalidAccessKeyId.NotFound',
                        'errorMessage' => 'The Access Key ID provided does not exist in our records.',
                    ],
                ],
                409 => [
                    [
                        'errorCode' => 'Rejected.ResourceInDeleteWindow',
                        'errorMessage' => 'secret in delete peroid',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalFailure',
                        'errorMessage' => 'Internal Failure',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"SecretName\\": \\"secret001\\",\\n  \\"RequestId\\": \\"38bbed2a-15e0-45ad-98d4-816ad2ccf4ea\\",\\n  \\"PlannedDeleteTime\\": \\"2024-04-15T07:02:14Z\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteSecretResponse>\\n    <SecretName>secret001</SecretName>\\n    <RequestId>38bbed2a-15e0-45ad-98d4-816ad2ccf4ea</RequestId>\\n    <PlannedDeleteTime>2022-09-15T07:02:14Z</PlannedDeleteTime>\\n</DeleteSecretResponse>","errorExample":""}]',
            'title' => '删除凭据对象',
            'summary' => '调用DeleteSecret接口删除凭据对象。',
            'description' => '您可以设置计划删除凭据，时间窗口支持7天~30天，窗口期内凭据可以恢复。也可以立即删除凭据，凭据立即删除且不可恢复。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'UpdateSecret' => [
            'methods' => [
                'post',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'SecretName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '凭据名称或凭据资源名称（ARN）。'."\n"
                            .'>访问其他阿里云账号下的凭据时，必须输入凭据ARN。凭据ARN的格式为`acs:kms:${region}:${account}:secret/${secret-name}`。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'secret001',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '凭据的描述信息。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => 'datainfo',
                    ],
                ],
                [
                    'name' => 'ExtendedConfig.CustomData',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '拓展配置中的自定义数据。'."\n"
                            ."\n"
                            .'> - 如果指定该参数，将会更新凭据已有的拓展配置。'."\n"
                            .'- 通用凭据不支持设置该参数。',
                        'type' => 'object',
                        'required' => false,
                        'example' => '{"DBName":"app1","Port":"3306"}',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'SecretName' => [
                                'description' => '凭据名称。',
                                'type' => 'string',
                                'example' => 'secret001',
                            ],
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '5b75d8b1-5b6a-4ec0-8e0c-c08befdfad47',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'some of the specified parameters "\\" is not valid',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden.NoPermission',
                        'errorMessage' => 'This operation is forbidden by permission system',
                    ],
                ],
                [
                    [
                        'errorCode' => 'Forbidden.ResourceNotFound',
                        'errorMessage' => 'Resource not found',
                    ],
                ],
                409 => [
                    [
                        'errorCode' => 'Rejected.ResourceExist',
                        'errorMessage' => 'The request was rejected becasue key already exsit',
                    ],
                    [
                        'errorCode' => 'Rejected.ResourceInDeleteWindow',
                        'errorMessage' => 'secret in delete peroid',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalFailure',
                        'errorMessage' => 'Internal Failure',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"SecretName\\": \\"secret001\\",\\n  \\"RequestId\\": \\"5b75d8b1-5b6a-4ec0-8e0c-c08befdfad47\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateSecretResponse>\\n    <SecretName>secret001</SecretName>\\n    <RequestId>5b75d8b1-5b6a-4ec0-8e0c-c08befdfad47</RequestId>\\n</UpdateSecretResponse>","errorExample":""}]',
            'title' => '更新凭据的元数据',
            'summary' => '调用UpdateSecret接口更新凭据的元数据。',
            'description' => '本文将提供一个示例，更新名为`secret001`凭据的元数据，将其描述信息`Description`更新为`datainfo`。',
            'requestParamsDescription' => ' 关于公共请求参数的详情，请参见[公共参数](~~69007~~)。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'UpdateSecretVersionStage' => [
            'methods' => [
                'post',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'SecretName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '凭据名称或凭据资源名称（ARN）。'."\n"
                            .'>访问其他阿里云账号下的凭据时，必须输入凭据ARN。凭据ARN的格式为`acs:kms:${region}:${account}:secret/${secret-name}`。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'secret001',
                    ],
                ],
                [
                    'name' => 'VersionStage',
                    'in' => 'query',
                    'schema' => [
                        'description' => '凭据的版本状态。'."\n"
                            ."\n"
                            .'**场景一：为指定的凭据版本新增一个版本状态。**'."\n"
                            ."\n"
                            .'输入本参数、MoveToVersion，不输入RemoveFromVersion。本参数取值为ACSCurrent 、ACSPrevious或自定义状态。'."\n"
                            ."\n"
                            .'**场景二：将指定的凭据版本的版本状态移除。**'."\n"
                            ."\n"
                            .'输入本参数、RemoveFromVersion，不输入MoveToVersion。本参数取值为自定义状态。'."\n"
                            ."\n"
                            .'>ACSCurrent 、ACSPrevious为系统内置状态，不允许直接移除，只能从一个凭据版本移除并绑定到另一个凭据版本。'."\n"
                            ."\n"
                            .'**场景三：将指定的凭据版本的版本状态移除，并绑定到其他凭据版本。**'."\n"
                            ."\n"
                            .'输入本参数、MoveToVersion、RemoveFromVersion。本参数取值为ACSCurrent 、ACSPrevious或自定义状态。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ACSCurrent',
                    ],
                ],
                [
                    'name' => 'RemoveFromVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => '凭据版本的版本号。表示将入参VersionStage指定的版本状态从该版本号移除。'."\n"
                            ."\n"
                            .'> RemoveFromVersion和MoveToVersion至少指定其中一个参数。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '001',
                    ],
                ],
                [
                    'name' => 'MoveToVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => '凭据版本的版本号。表示将入参VersionStage指定的版本状态绑定到该版本号。'."\n"
                            ."\n"
                            .'> - RemoveFromVersion和MoveToVersion至少指定其中一个参数。  '."\n"
                            .'- 当VersionStage取值为ACSCurrent或ACSPrevious时，必须指定本参数。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '002',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'SecretName' => [
                                'description' => '凭据名称。',
                                'type' => 'string',
                                'example' => 'secret001',
                            ],
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '8cad259f-4d77-40ec-bbd7-b9c47a423bb9',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'some of the specified parameters "\\" is not valid',
                    ],
                    [
                        'errorCode' => 'Rejected.LimitExceeded',
                        'errorMessage' => 'exceed secret limits error',
                    ],
                    [
                        'errorCode' => 'Rejected.InvalidRequest',
                        'errorMessage' => 'param mismatch',
                    ],
                    [
                        'errorCode' => 'Rejected.UnsupportedOperation',
                        'errorMessage' => 'secret stages in unnormal status',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden.NoPermission',
                        'errorMessage' => 'This operation is forbidden by permission system',
                    ],
                ],
                [
                    [
                        'errorCode' => 'Forbidden.ResourceNotFound',
                        'errorMessage' => 'Resource not found',
                    ],
                ],
                409 => [
                    [
                        'errorCode' => 'Rejected.ResourceInDeleteWindow',
                        'errorMessage' => 'secret in delete peroid',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalFailure',
                        'errorMessage' => 'Internal Failure',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"SecretName\\": \\"secret001\\",\\n  \\"RequestId\\": \\"8cad259f-4d77-40ec-bbd7-b9c47a423bb9\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateSecretVersionStageResponse>\\n    <SecretName>secret001</SecretName>\\n    <RequestId>8cad259f-4d77-40ec-bbd7-b9c47a423bb9</RequestId>\\n</UpdateSecretVersionStageResponse>","errorExample":""}]',
            'title' => '更新凭据的版本状态',
            'summary' => '调用UpdateSecretVersionStage接口更新凭据的版本状态。',
            'description' => '本接口仅支持通用凭据，支持以下操作：'."\n"
                ."\n"
                .'- 为指定的凭据版本新增一个版本状态。'."\n"
                ."\n"
                .'- 将指定的凭据版本的版本状态移除。'."\n"
                ."\n"
                .'- 将指定的凭据版本的版本状态移除，并绑定到其他凭据版本上。'."\n"
                ."\n"
                .'本文将提供一个示例，更新名为`secret001`凭据的版本状态，将`ACSCurrent`版本状态用于标记`002`版本。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'UpdateSecretRotationPolicy' => [
            'methods' => [
                'post',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'SecretName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '凭据名称或凭据资源名称（ARN）。'."\n"
                            .'>访问其他阿里云账号下的凭据时，必须输入凭据ARN。凭据ARN的格式为`acs:kms:${region}:${account}:secret/${secret-name}`。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'RdsSecret/Mysql5.4/MyCred',
                    ],
                ],
                [
                    'name' => 'EnableAutomaticRotation',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否开启自动轮转，取值：'."\n"
                            .'- true：开启自动轮转。'."\n"
                            .'- false（默认值）：不开启自动轮转。'."\n"
                            ."\n",
                        'type' => 'boolean',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'RotationInterval',
                    'in' => 'query',
                    'schema' => [
                        'description' => '自动轮转的周期。取值范围：168小时（7天）~8,760小时（365天）。'."\n"
                            .'  '."\n"
                            .'格式为`integer\\[unit\\]`，其中`integer`表示时间长度，`unit`表示时间单位。  '."\n"
                            .'unit取值：d（天）、h（小时）、m（分钟）、s（秒）。例如：7d或者604,800s均表示7天的周期。'."\n"
                            ."\n"
                            .'> 当EnableAutomaticRotation取值为true时，必须设置该参数。反之，将忽略该参数。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '30d',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'SecretName' => [
                                'description' => '凭据名称。',
                                'type' => 'string',
                                'example' => 'RdsSecret/Mysql5.4/MyCred',
                            ],
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '2c124f6f-4210-499f-b88a-69f54004d2d8',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"SecretName\\": \\"RdsSecret/Mysql5.4/MyCred\\",\\n  \\"RequestId\\": \\"2c124f6f-4210-499f-b88a-69f54004d2d8\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateSecretRotationPolicyResponse>\\n    <SecretName>RdsSecret/Mysql5.4/MyCred</SecretName>\\n    <RequestId>2c124f6f-4210-499f-b88a-69f54004d2d8</RequestId>\\n</UpdateSecretRotationPolicyResponse>","errorExample":""}]',
            'title' => '更新动态凭据的轮转策略',
            'summary' => '调用UpdateSecretRotationPolicy接口更新凭据轮转策略。',
            'description' => '使用限制：UpdateSecretRotationPolicy接口不支持更新通用凭据的轮转策略。  '."\n"
                .'> 因通用凭据不支持设置自动轮转，所以本接口不支持。'."\n"
                ."\n"
                .'凭据开启自动轮转后，首次自动轮转的时间为上次轮转时间加上轮转周期。如果该时间早于当前时间，将会立即开始首次自动轮转。'."\n"
                ."\n"
                .'本文将提供一个示例，更新名称为`RdsSecret/Mysql5.4/MyCred`的凭据轮转策略。具体如下：  '."\n"
                ."\n"
                .'- 将`EnableAutomaticRotation`设置为`true`，表示开启自动轮转。'."\n"
                ."\n"
                .'- 将`RotationInterval`设置为`30d`，表示设置轮转周期为30天。'."\n",
            'requestParamsDescription' => ' 关于公共请求参数的详情，请参见[公共参数](~~69007~~)。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListSecrets' => [
            'methods' => [
                'post',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'FetchTags',
                    'in' => 'query',
                    'schema' => [
                        'description' => '返回值中是否包含凭据的资源标签。取值：  '."\n"
                            ."\n"
                            .'- true：包含。  '."\n"
                            ."\n"
                            .'- false（默认值）：不包含。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '当前页数。  '."\n"
                            .'取值范围：大于0。  '."\n"
                            .'默认值：1。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'docRequired' => false,
                        'example' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页返回值的个数。  '."\n"
                            .'取值范围：1~100。  '."\n"
                            .'默认值：10。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'docRequired' => false,
                        'maximum' => '100',
                        'minimum' => '1',
                        'example' => '2',
                        'default' => '10',
                    ],
                ],
                [
                    'name' => 'Filters',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询符合指定条件的凭据。'."\n"
                            .'由Key-Values键值对组成，长度为0~10。使用一个标签键值过滤资源时，查询到的资源数量不能超过4000个。如果资源数量超过4000个，请使用[ListResourceTags](~~120090~~)接口进行查询。'."\n"
                            ."\n"
                            .'- Key'."\n"
                            .'    - 描述：需要查询的属性。'."\n"
                            .'    - 类型：String。'."\n"
                            .'    - 取值：'."\n"
                            .'        - SecretName：凭据名称。'."\n"
                            .'        - Description：凭据描述。'."\n"
                            .'        - TagKey：标签键。'."\n"
                            .'        - TagValue：标签值。'."\n"
                            .'        - DKMSInstanceId：KMS实例的实例ID。'."\n"
                            .'        - SecretType：凭据类型。'."\n"
                            .'       '."\n"
                            .'- Values'."\n"
                            .'    - 描述：属性的具体取值。'."\n"
                            .'    - 类型：String。'."\n"
                            .'    - 长度：0~10。'."\n"
                            .'    - 取值说明：'."\n"
                            .'        - Key取值为SecretName时：长度为1~192个字符，可包含英文字母、数字和特殊字符  '."\n"
                            .'`_/+=.@-`。'."\n"
                            .'        - Key取值为Description时：长度为1~256个字符。'."\n"
                            .'        - Key取值为TagKey时：长度为1~256个字符，可包含英文字母、数字和特殊字符`/_\\-\\.+=@:`。'."\n"
                            .'        - Key取值为TagValue时：长度为1~256个字符，可包含英文字母、数字和特殊字符 `/_\\-\\.+=@:`。'."\n"
                            .'        - Key取值为DKMSInstanceId时：KMS实例的实例ID，例如kst-xxx。'."\n"
                            .'        - Key取值为SecretType时：凭据类型，取值为Generic、Rds、RAMCredentials、ECS。'."\n"
                            ."\n"
                            .'Filters同一个Key中的多个Value之间的逻辑关系为OR。例如：输入`['."\n"
                            .'  {"Key":"SecretName", "Values":["sec1","sec2"]}'."\n"
                            .']`时，语义为：  `(SecretName=sec1 OR SecretName=sec2) `。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => '[{"Key":"SecretName", "Values":["Val1","Val2"]}]',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'PageNumber' => [
                                'description' => '当前页数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'PageSize' => [
                                'description' => '每页返回值的个数。 ',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '2',
                            ],
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '6a6287a0-ff34-4780-a790-fdfca900557f',
                            ],
                            'TotalCount' => [
                                'description' => '凭据列表中的凭据个数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '55',
                            ],
                            'SecretList' => [
                                'type' => 'object',
                                'properties' => [
                                    'Secret' => [
                                        'description' => '凭据列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'SecretName' => [
                                                    'description' => '凭据名称。',
                                                    'type' => 'string',
                                                    'example' => 'secret001',
                                                ],
                                                'UpdateTime' => [
                                                    'description' => '更新时间。',
                                                    'type' => 'string',
                                                    'example' => '2023-07-17T07:59:05Z',
                                                ],
                                                'SecretType' => [
                                                    'description' => '凭据类型。取值：'."\n"
                                                        ."\n"
                                                        .'- Generic：普通凭据。  '."\n"
                                                        .'- Rds：托管RDS凭据。',
                                                    'type' => 'string',
                                                    'example' => 'Generic',
                                                ],
                                                'PlannedDeleteTime' => [
                                                    'description' => '计划删除时间。',
                                                    'type' => 'string',
                                                    'example' => '2023-08-17T07:59:05Z',
                                                ],
                                                'CreateTime' => [
                                                    'description' => '创建时间。',
                                                    'type' => 'string',
                                                    'example' => '2023-07-17T07:59:05Z',
                                                ],
                                                'Tags' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Tag' => [
                                                            'description' => '凭据的资源标签。'."\n"
                                                                .'如果FetchTags取值为false或者未指定，则不返回该参数。',
                                                            'type' => 'array',
                                                            'items' => [
                                                                'description' => '凭据的资源标签。'."\n"
                                                                    .'如果FetchTags取值为false或者未指定，则不返回该参数。',
                                                                'type' => 'object',
                                                                'properties' => [
                                                                    'TagValue' => [
                                                                        'description' => '标签值。',
                                                                        'type' => 'string',
                                                                        'example' => 'val1',
                                                                    ],
                                                                    'TagKey' => [
                                                                        'description' => '标签键。',
                                                                        'type' => 'string',
                                                                        'example' => 'key1',
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
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'some of the specified parameters "\\" is not valid',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden.NoPermission',
                        'errorMessage' => 'This operation is forbidden by permission system',
                    ],
                ],
                [
                    [
                        'errorCode' => 'Forbidden.ResourceNotFound',
                        'errorMessage' => 'Resource not found',
                    ],
                    [
                        'errorCode' => 'InvalidAccessKeyId.NotFound',
                        'errorMessage' => 'The Access Key ID provided does not exist in our records.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalFailure',
                        'errorMessage' => 'Internal Failure',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 2,\\n  \\"RequestId\\": \\"6a6287a0-ff34-4780-a790-fdfca900557f\\",\\n  \\"TotalCount\\": 55,\\n  \\"SecretList\\": {\\n    \\"Secret\\": [\\n      {\\n        \\"SecretName\\": \\"secret001\\",\\n        \\"UpdateTime\\": \\"2023-07-17T07:59:05Z\\",\\n        \\"SecretType\\": \\"Generic\\",\\n        \\"PlannedDeleteTime\\": \\"2023-08-17T07:59:05Z\\",\\n        \\"CreateTime\\": \\"2023-07-17T07:59:05Z\\",\\n        \\"Tags\\": {\\n          \\"Tag\\": [\\n            {\\n              \\"TagValue\\": \\"val1\\",\\n              \\"TagKey\\": \\"key1\\"\\n            }\\n          ]\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListSecretsResponse>\\n    <PageNumber>1</PageNumber>\\n    <PageSize>2</PageSize>\\n    <RequestId>6a6287a0-ff34-4780-a790-fdfca900557f</RequestId>\\n    <TotalCount>55</TotalCount>\\n    <SecretList>\\n        <SecretName>secret001</SecretName>\\n        <UpdateTime>2023-07-17T07:59:05Z</UpdateTime>\\n        <SecretType>Generic</SecretType>\\n        <PlannedDeleteTime>2023-08-17T07:59:05Z</PlannedDeleteTime>\\n        <CreateTime>2023-07-17T07:59:05Z</CreateTime>\\n        <Tags>\\n            <TagValue>val1</TagValue>\\n            <TagKey>key1</TagKey>\\n        </Tags>\\n    </SecretList>\\n</ListSecretsResponse>","errorExample":""}]',
            'title' => '查询当前用户在当前地域创建的所有凭据',
            'summary' => '调用ListSecrets接口查询当前用户在当前地域创建的所有凭据。',
            'description' => '此接口返回凭据对象的元数据信息，不返回被加密存储的凭据值。  '."\n"
                .'本文将提供一个示例，返回当前用户在当前地域创建的凭据，其中当前页数`PageNumber`设置为`1`，每页中返回的个数`PageSize`设置为`2`，共返回2个凭据信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeSecret' => [
            'methods' => [
                'post',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'SecretName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '凭据名称或凭据资源名称（ARN）。'."\n"
                            ."\n"
                            .'> 访问其他阿里云账号下的凭据时，必须输入凭据ARN。凭据ARN的格式为`acs:kms:${region}:${account}:secret/${secret-name}`。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'secret001',
                    ],
                ],
                [
                    'name' => 'FetchTags',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否在返回参数中包含凭据的资源标签。取值：  '."\n"
                            ."\n"
                            .'- true：包含资源标签。 '."\n"
                            ."\n"
                            .'- false（默认值）：不包含资源标签。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'true',
                        'default' => 'false',
                        'enum' => [
                            'false',
                            'true',
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'UpdateTime' => [
                                'description' => '凭据的更新时间。',
                                'type' => 'string',
                                'example' => '2024-02-21T15:39:26Z',
                            ],
                            'CreateTime' => [
                                'description' => '创建凭据的时间。',
                                'type' => 'string',
                                'example' => '2024-02-21T15:39:26Z',
                            ],
                            'NextRotationDate' => [
                                'description' => '下一次轮转的时间。'."\n"
                                    ."\n"
                                    .'> 当开启自动轮转时，返回该参数。',
                                'type' => 'string',
                                'example' => '2024-07-06T18:22:03Z',
                            ],
                            'EncryptionKeyId' => [
                                'description' => '加密凭据值的KMS密钥的标识符。',
                                'type' => 'string',
                                'example' => 'key-hzz63ca8cbe3hefht****',
                            ],
                            'RotationInterval' => [
                                'description' => '凭据自动轮转的周期。    '."\n"
                                    .'格式为`integer[unit]`，其中`integer`表示时间长度，`unit`表示时间单位。 `unit`取值：s（秒）。例如：7天的轮转周期为604800s。'."\n"
                                    ."\n"
                                    .'> 当开启自动轮转时，返回该参数。',
                                'type' => 'string',
                                'example' => '3153600s',
                            ],
                            'Arn' => [
                                'description' => '凭据的资源名称（ARN）。',
                                'type' => 'string',
                                'example' => 'acs:kms:cn-hangzhou:154035569884****:secret/secret001',
                            ],
                            'ExtendedConfig' => [
                                'description' => '凭据的拓展配置。  '."\n"
                                    .'> 仅RDS凭据、RAM凭据或ECS凭据返回该参数。',
                                'type' => 'string',
                                'example' => '{\\"SecretSubType\\":\\"SingleUser\\", \\"DBInstanceId\\":\\"rm-uf667446pc955****\\",  \\"CustomData\\":{} }',
                            ],
                            'LastRotationDate' => [
                                'description' => '最近一次轮转的时间。'."\n"
                                    ."\n"
                                    .'> 当凭据发生过轮转时返回该参数。',
                                'type' => 'string',
                                'example' => '2022-07-05T08:22:03Z',
                            ],
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '93348dfb-3627-4417-8d90-487a76a909c9',
                            ],
                            'Description' => [
                                'description' => '凭据的描述信息。',
                                'type' => 'string',
                                'example' => 'userinfo',
                            ],
                            'SecretName' => [
                                'description' => '凭据名称。',
                                'type' => 'string',
                                'example' => 'secret001',
                            ],
                            'AutomaticRotation' => [
                                'description' => '是否开启自动轮转。取值：'."\n"
                                    ."\n"
                                    .'- Enabled：开启自动轮转。'."\n"
                                    .'- Disabled：不开启自动轮转。'."\n"
                                    .'- Invalid：轮转状态异常，KMS无法为您自动轮转。'."\n"
                                    ."\n"
                                    .'> 仅RDS凭据、RAM凭据或ECS凭据返回该参数。',
                                'type' => 'string',
                                'example' => 'Enabled',
                            ],
                            'SecretType' => [
                                'description' => '凭据类型。取值：'."\n"
                                    .'- Generic：通用凭据。  '."\n"
                                    .'- Rds：RDS凭据。  '."\n"
                                    .'- RAMCredentials：RAM凭据。  '."\n"
                                    .'- ECS：ECS凭据。',
                                'type' => 'string',
                                'example' => 'Rds',
                            ],
                            'PlannedDeleteTime' => [
                                'description' => '计划删除时间。',
                                'type' => 'string',
                                'example' => '2025-03-21T15:45:12Z',
                            ],
                            'DKMSInstanceId' => [
                                'description' => 'KMS实例的实例ID。',
                                'type' => 'string',
                                'example' => 'kst-bjj62d8f5e0sgtx8h****',
                            ],
                            'Tags' => [
                                'type' => 'object',
                                'properties' => [
                                    'Tag' => [
                                        'description' => '凭据的资源标签。'."\n"
                                            .'如果入参FetchTags取值为false或者未指定，则不返回该参数。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'TagValue' => [
                                                    'description' => '标签值。',
                                                    'type' => 'string',
                                                    'example' => 'val1',
                                                ],
                                                'TagKey' => [
                                                    'description' => '标签键。',
                                                    'type' => 'string',
                                                    'example' => 'key1',
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
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'IllegalTimestamp',
                        'errorMessage' => 'The input parameter Timestamp that is mandatory for processing this request is not supplied.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter is not valid.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden.NoPermission',
                        'errorMessage' => 'You are not authorized to perform the operation.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'Forbidden.ResourceNotFound',
                        'errorMessage' => 'Resource not found',
                    ],
                    [
                        'errorCode' => 'InvalidAccessKeyId.NotFound',
                        'errorMessage' => 'The Access Key ID provided does not exist in our records.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"UpdateTime\\": \\"2024-02-21T15:39:26Z\\",\\n  \\"CreateTime\\": \\"2024-02-21T15:39:26Z\\",\\n  \\"NextRotationDate\\": \\"2024-07-06T18:22:03Z\\",\\n  \\"EncryptionKeyId\\": \\"key-hzz63ca8cbe3hefht****\\",\\n  \\"RotationInterval\\": \\"3153600s\\",\\n  \\"Arn\\": \\"acs:kms:cn-hangzhou:154035569884****:secret/secret001\\",\\n  \\"ExtendedConfig\\": \\"{\\\\\\\\\\\\\\"SecretSubType\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"SingleUser\\\\\\\\\\\\\\", \\\\\\\\\\\\\\"DBInstanceId\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"rm-uf667446pc955****\\\\\\\\\\\\\\",  \\\\\\\\\\\\\\"CustomData\\\\\\\\\\\\\\":{} }\\",\\n  \\"LastRotationDate\\": \\"2022-07-05T08:22:03Z\\",\\n  \\"RequestId\\": \\"93348dfb-3627-4417-8d90-487a76a909c9\\",\\n  \\"Description\\": \\"userinfo\\",\\n  \\"SecretName\\": \\"secret001\\",\\n  \\"AutomaticRotation\\": \\"Enabled\\",\\n  \\"SecretType\\": \\"Rds\\",\\n  \\"PlannedDeleteTime\\": \\"2025-03-21T15:45:12Z\\",\\n  \\"DKMSInstanceId\\": \\"kst-bjj62d8f5e0sgtx8h****\\",\\n  \\"Tags\\": {\\n    \\"Tag\\": [\\n      {\\n        \\"TagValue\\": \\"val1\\",\\n        \\"TagKey\\": \\"key1\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeSecretResponse>\\n    <UpdateTime>2024-02-21T15:39:26Z</UpdateTime>\\n    <CreateTime>2024-02-21T15:39:26Z</CreateTime>\\n    <NextRotationDate>2024-07-06T18:22:03Z</NextRotationDate>\\n    <EncryptionKeyId>key-hzz63ca8cbe3hefht****</EncryptionKeyId>\\n    <RotationInterval>3153600s</RotationInterval>\\n    <Arn>acs:kms:cn-hangzhou:154035569884****:secret/secret001</Arn>\\n    <ExtendedConfig>{\\\\\\"SecretSubType\\\\\\":\\\\\\"SingleUser\\\\\\", \\\\\\"DBInstanceId\\\\\\":\\\\\\"rm-uf667446pc955****\\\\\\",  \\\\\\"CustomData\\\\\\":{} }</ExtendedConfig>\\n    <LastRotationDate>2022-07-05T08:22:03Z</LastRotationDate>\\n    <RequestId>93348dfb-3627-4417-8d90-487a76a909c9</RequestId>\\n    <Description>userinfo</Description>\\n    <SecretName>secret001</SecretName>\\n    <AutomaticRotation>Enabled</AutomaticRotation>\\n    <SecretType>Rds</SecretType>\\n    <PlannedDeleteTime>2025-03-21T15:45:12Z</PlannedDeleteTime>\\n    <DKMSInstanceId>kst-bjj62d8f5e0sgtx8h****</DKMSInstanceId>\\n    <Tags>\\n        <TagValue>val1</TagValue>\\n        <TagKey>key1</TagKey>\\n    </Tags>\\n</DescribeSecretResponse>","errorExample":""}]',
            'title' => '查询凭据的元数据信息',
            'summary' => '调用DescribeSecret接口查询凭据的元数据信息。',
            'description' => '此接口返回指定凭据的元数据信息，不返回凭据值。  '."\n"
                .'本文将提供一个示例，查询一个名称为`secret001`凭据的元数据信息。',
            'requestParamsDescription' => ' 关于公共请求参数的详情，请参见[公共参数](~~69007~~)。'."\n",
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetSecretValue' => [
            'summary' => '调用GetSecretValue接口获取凭据值。',
            'methods' => [
                'post',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'SecretName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '凭据名称或凭据资源名称（ARN）。'."\n"
                            .'>访问其他阿里云账号下的凭据时，必须输入凭据ARN。凭据ARN的格式为`acs:kms:${region}:${account}:secret/${secret-name}`。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'secret001',
                    ],
                ],
                [
                    'name' => 'VersionStage',
                    'in' => 'query',
                    'schema' => [
                        'description' => '版本状态。默认值：ACSCurrent。'."\n"
                            ."\n"
                            .'输入该参数时返回指定版本状态的凭据值，不输入该参数时返回ACSCurrent版本状态的凭据值。'."\n"
                            .'> RDS凭据、RAM凭据和ECS凭据只能获取ACSPrevious和ACSCurrent对应版本的凭据值。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ACSCurrent',
                    ],
                ],
                [
                    'name' => 'VersionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '版本号。'."\n"
                            ."\n"
                            .'> RDS凭据、RAM凭据和ECS凭据不支持指定VersionId，设置该参数将被忽略。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'v1',
                    ],
                ],
                [
                    'name' => 'FetchExtendedConfig',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否获取凭据的拓展配置。取值：'."\n"
                            ."\n"
                            .'- true：获取'."\n"
                            .'- false（默认值）：不获取'."\n"
                            ."\n"
                            .'> 通用凭据不支持拓展配置，设置该参数将被忽略。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'SecretDataType' => [
                                'description' => '凭据值类型。取值：'."\n"
                                    .'- text'."\n"
                                    .'- binary',
                                'type' => 'string',
                                'example' => 'binary',
                            ],
                            'CreateTime' => [
                                'description' => '创建凭据的时间。',
                                'type' => 'string',
                                'example' => '2024-02-21T15:39:26Z',
                            ],
                            'VersionId' => [
                                'description' => '凭据的版本号。',
                                'type' => 'string',
                                'example' => 'v1',
                            ],
                            'NextRotationDate' => [
                                'description' => '下一次轮转的时间。  '."\n"
                                    ."\n"
                                    .'> 当自动轮转开启时，返回该参数。',
                                'type' => 'string',
                                'example' => '2024-07-06T18:22:03Z',
                            ],
                            'SecretData' => [
                                'description' => '凭据值。KMS将存储的密文凭据值进行解密后返回该参数。  '."\n"
                                    ."\n"
                                    .'- 通用凭据返回您指定的凭据值。'."\n"
                                    ."\n"
                                    .'- RDS凭据返回的凭据值满足格式：`{"AccountName":"","AccountPassword":""}`  。'."\n"
                                    ."\n"
                                    .'- RAM凭据返回的凭据值满足格式：`{"AccessKeyId":"Adfdsfd","AccessKeySecret":"fdsfdsf","GenerateTimestamp": "2023-03-25T10:42:40Z"}`  。  '."\n"
                                    ."\n"
                                    .'- ECS凭据返回的凭据值满足以下格式：  '."\n"
                                    .'  - 口令类型凭据：`{"UserName":"ecs-user","Password":"H5asdasdsads****"} `。  '."\n"
                                    .'  - 公私钥类型凭据（私钥格式为PEM）：`{"UserName":"ecs-user","PublicKey":"ssh-rsa ****mKwnVix9YTFY9Rs= imported-openssh-key","PrivateKey": "d6bee1cb-2e14-4277-ba6b-73786b21****"} `。',
                                'type' => 'string',
                                'example' => 'testdata1',
                            ],
                            'RotationInterval' => [
                                'description' => '凭据自动轮转的周期。    '."\n"
                                    .'格式为`integer[unit]`，其中`integer`表示时间长度，`unit`表示时间单位。 `unit`取值：s（秒）。例如：7天的轮转周期为604800s。'."\n"
                                    ."\n"
                                    .'> 当自动轮转开启时，返回该参数。',
                                'type' => 'string',
                                'example' => '604800s',
                            ],
                            'ExtendedConfig' => [
                                'description' => '凭据的拓展配置。  '."\n"
                                    ."\n"
                                    .'> 当FetchExtendedConfig取值为true时，仅RDS凭据、RAM凭据或ECS凭据返回该参数。',
                                'type' => 'string',
                                'example' => '{\\"SecretSubType\\":\\"SingleUser\\", \\"DBInstanceId\\":\\"rm-uf667446pc955****\\",  \\"CustomData\\":{} }',
                            ],
                            'LastRotationDate' => [
                                'description' => '最近一次轮转的时间。  '."\n"
                                    ."\n"
                                    .'> 当凭据发生过轮转时返回该参数。',
                                'type' => 'string',
                                'example' => '2023-07-05T08:22:03Z',
                            ],
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '6a3e9c36-1150-4881-84d3-eb8672fcafad',
                            ],
                            'SecretName' => [
                                'description' => '凭据名称。',
                                'type' => 'string',
                                'example' => 'secret001',
                            ],
                            'AutomaticRotation' => [
                                'description' => '是否开启了自动轮转。取值：'."\n"
                                    .'- Enabled：开启了自动轮转。'."\n"
                                    .'- Disabled：未开启自动轮转。'."\n"
                                    .'- Invalid：轮转状态异常，KMS无法为您自动轮转。'."\n"
                                    ."\n"
                                    .'> 仅RDS凭据、RAM凭据或ECS凭据返回该参数。',
                                'type' => 'string',
                                'example' => 'Enabled',
                            ],
                            'SecretType' => [
                                'description' => '凭据类型。取值：'."\n"
                                    .'- Generic：通用凭据。  '."\n"
                                    .'- Rds：RDS凭据。  '."\n"
                                    .'- RAMCredentials：RAM凭据。  '."\n"
                                    .'- ECS：ECS凭据。',
                                'type' => 'string',
                                'example' => 'Generic',
                            ],
                            'VersionStages' => [
                                'type' => 'object',
                                'properties' => [
                                    'VersionStage' => [
                                        'description' => '凭据版本的状态标记。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '凭据版本的状态标记。',
                                            'type' => 'string',
                                            'example' => '{ "VersionStage": [ 	"ACSCurrent" 	] }',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'Forbidden.DKMSInstanceStateInvalid',
                        'errorMessage' => 'The DKMS instance state is invalid.',
                    ],
                    [
                        'errorCode' => 'Forbidden.DKMSInstanceNotFound',
                        'errorMessage' => 'The specified DKMS Instance is not found.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'Forbidden.KeyNotFound',
                        'errorMessage' => 'The specified Key is not found.',
                    ],
                    [
                        'errorCode' => 'Forbidden.ResourceNotFound',
                        'errorMessage' => 'Resource not found.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"SecretDataType\\": \\"binary\\",\\n  \\"CreateTime\\": \\"2024-02-21T15:39:26Z\\",\\n  \\"VersionId\\": \\"v1\\",\\n  \\"NextRotationDate\\": \\"2024-07-06T18:22:03Z\\",\\n  \\"SecretData\\": \\"testdata1\\",\\n  \\"RotationInterval\\": \\"604800s\\",\\n  \\"ExtendedConfig\\": \\"{\\\\\\\\\\\\\\"SecretSubType\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"SingleUser\\\\\\\\\\\\\\", \\\\\\\\\\\\\\"DBInstanceId\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"rm-uf667446pc955****\\\\\\\\\\\\\\",  \\\\\\\\\\\\\\"CustomData\\\\\\\\\\\\\\":{} }\\",\\n  \\"LastRotationDate\\": \\"2023-07-05T08:22:03Z\\",\\n  \\"RequestId\\": \\"6a3e9c36-1150-4881-84d3-eb8672fcafad\\",\\n  \\"SecretName\\": \\"secret001\\",\\n  \\"AutomaticRotation\\": \\"Enabled\\",\\n  \\"SecretType\\": \\"Generic\\",\\n  \\"VersionStages\\": {\\n    \\"VersionStage\\": [\\n      \\"{ \\\\\\"VersionStage\\\\\\": [ \\\\t\\\\\\"ACSCurrent\\\\\\" \\\\t] }\\"\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetSecretValueResponse>\\n    <SecretDataType>binary</SecretDataType>\\n    <CreateTime>2024-02-21T15:39:26Z</CreateTime>\\n    <VersionId>v1</VersionId>\\n    <NextRotationDate>2024-07-06T18:22:03Z</NextRotationDate>\\n    <SecretData>testdata1</SecretData>\\n    <RotationInterval>604800s</RotationInterval>\\n    <ExtendedConfig>{\\\\\\"SecretSubType\\\\\\":\\\\\\"SingleUser\\\\\\", \\\\\\"DBInstanceId\\\\\\":\\\\\\"rm-uf667446pc955****\\\\\\",  \\\\\\"CustomData\\\\\\":{} }</ExtendedConfig>\\n    <LastRotationDate>2023-07-05T08:22:03Z</LastRotationDate>\\n    <RequestId>6a3e9c36-1150-4881-84d3-eb8672fcafad</RequestId>\\n    <SecretName>secret001</SecretName>\\n    <AutomaticRotation>Enabled</AutomaticRotation>\\n    <SecretType>Generic</SecretType>\\n    <VersionStages>{ \\"VersionStage\\": [ \\t\\"ACSCurrent\\" \\t] }</VersionStages>\\n</GetSecretValueResponse>","errorExample":""}]',
            'title' => '获取凭据值',
            'description' => '如果不指定版本号或版本状态，则KMS默认返回被标记为ACSCurrent的版本凭据值。'."\n"
                .'如果凭据使用了用户指定的密钥来保护凭据值，则需要调用者同时具备相应主密钥的`kms:Decrypt`权限。'."\n"
                ."\n"
                .'本文将提供一个示例，获取一个名为`secret001`凭据的凭据值，返回结果显示凭据值`SecretData`为`testdata1`。',
            'requestParamsDescription' => ' 关于公共请求参数的详情，请参见[公共参数](~~69007~~)。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListSecretVersionIds' => [
            'methods' => [
                'post',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'SecretName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '凭据名称或凭据资源名称（ARN）。'."\n"
                            .'>访问其他阿里云账号下的凭据时，必须输入凭据ARN。凭据ARN的格式为`acs:kms:${region}:${account}:secret/${secret-name}`。'."\n",
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'secret001',
                    ],
                ],
                [
                    'name' => 'IncludeDeprecated',
                    'in' => 'query',
                    'schema' => [
                        'description' => '返回值中是否包含没有版本状态的凭据版本。'."\n"
                            ."\n"
                            .'取值范围：'."\n"
                            .'- false（默认值）：不包含'."\n"
                            .'- true：包含',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时，设置当前页面的页码。默认值：1。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'docRequired' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时，设置每页大小。默认值：20。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'docRequired' => false,
                        'example' => '10',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'SecretName' => [
                                'description' => '凭据名称。',
                                'type' => 'string',
                                'example' => 'secret001',
                            ],
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '5b75d8b1-5b6a-4ec0-8e0c-c08befdfad47',
                            ],
                            'PageSize' => [
                                'description' => '当前页大小。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'PageNumber' => [
                                'description' => '当前页码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'TotalCount' => [
                                'description' => '列表项总个数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'VersionIds' => [
                                'type' => 'object',
                                'properties' => [
                                    'VersionId' => [
                                        'description' => '凭据的版本信息列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'VersionId' => [
                                                    'description' => '版本号。',
                                                    'type' => 'string',
                                                    'example' => 'v1',
                                                ],
                                                'CreateTime' => [
                                                    'description' => '版本的创建时间。',
                                                    'type' => 'string',
                                                    'example' => '2024-02-21T15:39:26Z',
                                                ],
                                                'VersionStages' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'VersionStage' => [
                                                            'type' => 'array',
                                                            'items' => [
                                                                'description' => '版本的状态标记。',
                                                                'type' => 'string',
                                                                'example' => '{"VersionStage": ["ACSCurrent","uStage1"]}',
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
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'some of the specified parameters "\\" is not valid',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden.NoPermission',
                        'errorMessage' => 'This operation is forbidden by permission system',
                    ],
                ],
                [
                    [
                        'errorCode' => 'Forbidden.ResourceNotFound',
                        'errorMessage' => 'Resource not found',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalFailure',
                        'errorMessage' => 'Internal Failure',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"SecretName\\": \\"secret001\\",\\n  \\"RequestId\\": \\"5b75d8b1-5b6a-4ec0-8e0c-c08befdfad47\\",\\n  \\"PageSize\\": 10,\\n  \\"PageNumber\\": 1,\\n  \\"TotalCount\\": 1,\\n  \\"VersionIds\\": {\\n    \\"VersionId\\": [\\n      {\\n        \\"VersionId\\": \\"v1\\",\\n        \\"CreateTime\\": \\"2024-02-21T15:39:26Z\\",\\n        \\"VersionStages\\": {\\n          \\"VersionStage\\": [\\n            \\"{\\\\\\"VersionStage\\\\\\": [\\\\\\"ACSCurrent\\\\\\",\\\\\\"uStage1\\\\\\"]}\\"\\n          ]\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListSecretVersionIdsResponse>\\n    <SecretName>secret001</SecretName>\\n    <RequestId>5b75d8b1-5b6a-4ec0-8e0c-c08befdfad47</RequestId>\\n    <PageSize>10</PageSize>\\n    <PageNumber>1</PageNumber>\\n    <TotalCount>1</TotalCount>\\n    <VersionIds>\\n        <VersionId>v1</VersionId>\\n        <CreateTime>2024-02-21T15:39:26Z</CreateTime>\\n        <VersionStages>{\\"VersionStage\\": [\\"ACSCurrent\\",\\"uStage1\\"]}</VersionStages>\\n    </VersionIds>\\n</ListSecretVersionIdsResponse>","errorExample":""}]',
            'title' => '查询凭据的所有版本信息',
            'summary' => '调用ListSecretVersionIds接口查询凭据的所有版本信息。',
            'description' => '版本信息中不包含凭据值。默认只返回有版本状态的凭据版本。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetRandomPassword' => [
            'methods' => [
                'post',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'PasswordLength',
                    'in' => 'query',
                    'schema' => [
                        'description' => '生成口令的字节数。'."\n"
                            ."\n"
                            .'取值：8~128。'."\n"
                            ."\n"
                            .'默认值：32。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => '32',
                        'default' => '32',
                    ],
                ],
                [
                    'name' => 'ExcludeCharacters',
                    'in' => 'query',
                    'schema' => [
                        'description' => '生成口令时排除的字符。  '."\n"
                            .'有效值：'."\n"
                            .'`0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!\\"#$%&\'()*+,-./:;<=>?@[\\\\]^_{|}~`。  '."\n"
                            .'默认值：空。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ABCabc',
                    ],
                ],
                [
                    'name' => 'ExcludeLowercase',
                    'in' => 'query',
                    'schema' => [
                        'description' => '生成口令时是否排除小写字母。'."\n"
                            ."\n"
                            .'取值：'."\n"
                            .'- true'."\n"
                            .'- false（默认值）'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'false',
                        'default' => 'false',
                        'enum' => [
                            'false',
                            'true',
                        ],
                    ],
                ],
                [
                    'name' => 'ExcludeUppercase',
                    'in' => 'query',
                    'schema' => [
                        'description' => '生成口令时是否排除大写字母。'."\n"
                            ."\n"
                            .'取值：'."\n"
                            .'- true'."\n"
                            .'- false（默认值）'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'false',
                        'default' => 'false',
                        'enum' => [
                            'false',
                            'true',
                        ],
                    ],
                ],
                [
                    'name' => 'ExcludeNumbers',
                    'in' => 'query',
                    'schema' => [
                        'description' => '生成口令时是否排除数字。'."\n"
                            ."\n"
                            .'取值：'."\n"
                            .'- true'."\n"
                            .'- false（默认值）'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'false',
                        'default' => 'false',
                        'enum' => [
                            'false',
                            'true',
                        ],
                    ],
                ],
                [
                    'name' => 'ExcludePunctuation',
                    'in' => 'query',
                    'schema' => [
                        'description' => '生成口令时是否排除特殊字符。'."\n"
                            ."\n"
                            .'取值：'."\n"
                            .'- true'."\n"
                            .'- false（默认值）'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'false',
                        'default' => 'false',
                        'enum' => [
                            'false',
                            'true',
                        ],
                    ],
                ],
                [
                    'name' => 'RequireEachIncludedType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '生成口令时是否上述每种类型都包含。'."\n"
                            ."\n"
                            .'取值：'."\n"
                            .'- true'."\n"
                            .'- false（默认值）',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => 'true',
                        'default' => 'true',
                        'enum' => [
                            'false',
                            'true',
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RandomPassword' => [
                                'description' => '随机口令。',
                                'type' => 'string',
                                'example' => 'IxGn>NMmNB(y?iZ<Yc,_H/{2GC\'U****',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '6b0cbe25-5e33-467e-972e-7a83c6c97604',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'some of the specified parameters "\\" is not valid',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalFailure',
                        'errorMessage' => 'Internal Failure',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RandomPassword\\": \\"IxGn>NMmNB(y?iZ<Yc,_H/{2GC\'U****\\",\\n  \\"RequestId\\": \\"6b0cbe25-5e33-467e-972e-7a83c6c97604\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>6b0cbe25-5e33-467e-972e-7a83c6c97604</RequestId>\\n<RandomPassword>IxGn&gt;NMmNB(y?iZ&lt;Yc,_H/{2GC\'U****</RandomPassword>","errorExample":""}]',
            'title' => '获得一个随机口令字符串',
            'summary' => '调用GetRandomPassword接口获得一个随机口令字符串。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'PutSecretValue' => [
            'methods' => [
                'post',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'VersionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '凭据的版本号，在该凭据内唯一。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'v3',
                    ],
                ],
                [
                    'name' => 'SecretName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '凭据名称或凭据资源名称（ARN）。'."\n"
                            .'>访问其他阿里云账号下的凭据时，必须输入凭据ARN。凭据ARN的格式为`acs:kms:${region}:${account}:secret/${secret-name}`。'."\n",
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'secret001',
                    ],
                ],
                [
                    'name' => 'SecretData',
                    'in' => 'query',
                    'schema' => [
                        'description' => '凭据值。加密后存入指定的新版本中。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'importantdata',
                    ],
                ],
                [
                    'name' => 'SecretDataType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '凭据值类型。取值：'."\n"
                            .'- text（默认值）'."\n"
                            .'- binary',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => 'text',
                        'default' => 'text',
                        'enum' => [
                            'text',
                            'binary',
                        ],
                    ],
                ],
                [
                    'name' => 'VersionStages',
                    'in' => 'query',
                    'schema' => [
                        'description' => '凭据版本在存入时需要被同时标记的版本状态。如果您不指定此参数，KMS默认为新版本标记ACSCurrent。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => '["ACSCurrent","ACSNext"]',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'SecretName' => [
                                'description' => '凭据名称。',
                                'type' => 'string',
                                'example' => 'secret001',
                            ],
                            'VersionId' => [
                                'description' => '凭据的版本号。',
                                'type' => 'string',
                                'example' => 'v3',
                            ],
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => 'f94ec9d3-2d10-4922-9a5c-5dcd5ebcb5e8',
                            ],
                            'VersionStages' => [
                                'type' => 'object',
                                'properties' => [
                                    'VersionStage' => [
                                        'description' => '凭据的版本状态。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '凭据的版本状态。',
                                            'type' => 'string',
                                            'example' => '{ "VersionStage": [ "ACSCurrent", "ACSNext" ] }',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'some of the specified parameters "\\" is not valid',
                    ],
                    [
                        'errorCode' => 'Rejected.LimitExceeded',
                        'errorMessage' => 'exceed secret limits error',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden.NoPermission',
                        'errorMessage' => 'This operation is forbidden by permission system',
                    ],
                ],
                [
                    [
                        'errorCode' => 'Forbidden.ResourceNotFound',
                        'errorMessage' => 'Resource not found',
                    ],
                ],
                409 => [
                    [
                        'errorCode' => 'Rejected.ResourceExist',
                        'errorMessage' => 'The request was rejected becasue key already exsit',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalFailure',
                        'errorMessage' => 'Internal Failure',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"SecretName\\": \\"secret001\\",\\n  \\"VersionId\\": \\"v3\\",\\n  \\"RequestId\\": \\"f94ec9d3-2d10-4922-9a5c-5dcd5ebcb5e8\\",\\n  \\"VersionStages\\": {\\n    \\"VersionStage\\": [\\n      \\"{ \\\\\\"VersionStage\\\\\\": [ \\\\\\"ACSCurrent\\\\\\", \\\\\\"ACSNext\\\\\\" ] }\\"\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<PutSecretValueResponse>\\n    <SecretName>secret001</SecretName>\\n    <VersionId>v3</VersionId>\\n    <RequestId>f94ec9d3-2d10-4922-9a5c-5dcd5ebcb5e8</RequestId>\\n    <VersionStages>{ \\"VersionStage\\": [ \\"ACSCurrent\\", \\"ACSNext\\" ] }</VersionStages>\\n</PutSecretValueResponse>","errorExample":""}]',
            'title' => '为凭据存入一个新版本的凭据值',
            'summary' => '调用PutSecretValue接口为凭据存入一个新版本的凭据值。',
            'description' => '>仅通用凭据支持本接口，每个通用凭据最多保存10个凭据版本，超出时KMS会滚动删除最早的凭据版本。'."\n"
                ."\n"
                .'默认情况下，新存入的凭据值被标记为ACSCurrent，而ACSCurrent标记的前一个版本被标记为ACSPrevious。您可以通过指定VersionStage参数来覆盖该默认行为。'."\n"
                ."\n"
                .'此接口用于存入新版本的凭据值，而不能用于修改已有版本的凭据值。存入新版本时需指定版本号，KMS按照如下规则进行操作：'."\n"
                .'- 版本号在凭据内不存在：创建新版本并存入凭据值。'."\n"
                .'- 版本号在凭据内存在：如果入参中的凭据值和凭据内该版本号对应的凭据值相同，则请求会被忽略，并且返回成功（请求是幂等的），不相同时则请求会被拒绝，且返回失败。'."\n"
                ."\n"
                .'本文将提供一个示例，为凭据名称是`secret001`的凭据存入一个新版本的凭据值，新凭据版本号`VersionId`为`v3`、凭据值`SecretData`为`importantdata`。',
            'requestParamsDescription' => ' 关于公共请求参数的详情，请参见[公共参数](~~69007~~)。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'RestoreSecret' => [
            'methods' => [
                'post',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'SecretName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '凭据名称或凭据资源名称（ARN）。'."\n"
                            .'>访问其他阿里云账号下的凭据时，必须输入凭据ARN。凭据ARN的格式为`acs:kms:${region}:${account}:secret/${secret-name}`。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'secret001',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'SecretName' => [
                                'description' => '凭据名称。',
                                'type' => 'string',
                                'example' => 'secret001',
                            ],
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => 'e4885adf-548f-4ca5-8075-f540bbd3a55f',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'some of the specified parameters "\\" is not valid',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden.NoPermission',
                        'errorMessage' => 'This operation is forbidden by permission system',
                    ],
                ],
                [
                    [
                        'errorCode' => 'Forbidden.ResourceNotFound',
                        'errorMessage' => 'Resource not found',
                    ],
                ],
                409 => [
                    [
                        'errorCode' => 'Rejected.ResourceInUse',
                        'errorMessage' => 'restore normal secret',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalFailure',
                        'errorMessage' => 'Internal Failure',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"SecretName\\": \\"secret001\\",\\n  \\"RequestId\\": \\"e4885adf-548f-4ca5-8075-f540bbd3a55f\\"\\n}","errorExample":""},{"type":"xml","example":"<RestoreSecretResponse>\\n    <SecretName>secret001</SecretName>\\n    <RequestId>e4885adf-548f-4ca5-8075-f540bbd3a55f</RequestId>\\n</RestoreSecretResponse>","errorExample":""}]',
            'title' => '恢复被删除的凭据',
            'summary' => '调用RestoreSecret接口恢复被删除的凭据。',
            'description' => '本接口只能在可恢复的窗口期内，用于恢复被计划删除的凭据。如果删除凭据时指定了**ForceDeleteWithoutRecovery**参数为**true**，凭据会被立即删除，不支持调用本接口恢复。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'RotateSecret' => [
            'methods' => [
                'post',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'SecretName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '凭据名称或凭据资源名称（ARN）。'."\n"
                            .'>访问其他阿里云账号下的凭据时，必须输入凭据ARN。凭据ARN的格式为`acs:kms:${region}:${account}:secret/${secret-name}`。'."\n",
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'RdsSecret/Mysql5.4/MyCred',
                    ],
                ],
                [
                    'name' => 'VersionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '轮转后的新凭据版本的版本号。'."\n"
                            ."\n"
                            .'> 版本号用于保证请求的幂等性。KMS使用版本号来防止您的应用在请求失败后进行重试时，意外创建重复的版本。如果相同的版本号已经存在，轮转的请求会被忽略，服务端会返回成功。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '000000123',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'VersionId' => [
                                'description' => '轮转后的新凭据版本的版本号。',
                                'type' => 'string',
                                'example' => '000000123',
                            ],
                            'SecretName' => [
                                'description' => '凭据名称。',
                                'type' => 'string',
                                'example' => 'RdsSecret/Mysql5.4/MyCred',
                            ],
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '10257c86-269d-43aa-aaf3-90ed4144bb7c',
                            ],
                            'Arn' => [
                                'description' => '凭据ARN。'."\n",
                                'type' => 'string',
                                'example' => 'acs:kms:cn-hangzhou:154035569884****:secret/RdsSecret/Mysql5.4/MyCred',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter is not valid.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidAccessKeyId.NotFound',
                        'errorMessage' => 'The Access Key ID provided does not exist in our records.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"VersionId\\": \\"000000123\\",\\n  \\"SecretName\\": \\"RdsSecret/Mysql5.4/MyCred\\",\\n  \\"RequestId\\": \\"10257c86-269d-43aa-aaf3-90ed4144bb7c\\",\\n  \\"Arn\\": \\"acs:kms:cn-hangzhou:154035569884****:secret/RdsSecret/Mysql5.4/MyCred\\"\\n}","errorExample":""},{"type":"xml","example":"<RotateSecretResponse>\\n    <VersionId>000000123</VersionId>\\n    <SecretName>RdsSecret/Mysql5.4/MyCred</SecretName>\\n    <RequestId>10257c86-269d-43aa-aaf3-90ed4144bb7c</RequestId>\\n    <Arn>acs:kms:cn-hangzhou:154035569884****:secret/RdsSecret/Mysql5.4/MyCred</Arn>\\n</RotateSecretResponse>","errorExample":""}]',
            'title' => '主动轮转动态凭据',
            'summary' => '主动轮转动态凭据（目前只有托管RDS凭据），普通凭据不可使用。',
            'description' => '使用限制：'."\n"
                ."\n"
                .'• 同一阿里云账号每小时最多轮转50次。'."\n"
                ."\n"
                .'• RotateSecret接口不支持轮转通用凭据。  '."\n"
                ."\n"
                .'> 仅支持自动轮转的凭据类型使用本接口。如需对通用凭据进行轮转，请使用PutSecretValue接口。'."\n"
                ."\n"
                .'本文将提供一个示例，将名称为`RdsSecret/Mysql5.4/MyCred`的凭据进行手动轮转，轮转后新的凭据版本为`000000123`。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' 关于公共请求参数的详情，请参见[公共参数](~~69007~~)。',
            'extraInfo' => ' ',
        ],
        'CreateCertificate' => [
            'methods' => [
                'post',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'Subject',
                    'in' => 'query',
                    'schema' => [
                        'description' => '证书主体（拥有者）。  '."\n"
                            .'按照[RFC 2253](https://tools.ietf.org/html/rfc2253?spm=a2c4g.11186623.2.13.265f1a1cGFCn3Q)定义，采用DN（Distinguished Names）标识。DN由一系列RDN（Relative Distinguished Names）组成。'."\n"
                            .'RDN是一组键值对，多个RDN之间用英文逗号（,）隔开，格式为：`attribute1=value1,attribute2=value2`。  '."\n"
                            .'证书主体字段含义如下：  '."\n"
                            ."\n"
                            .'- CN（必选）：名称。证书使用主体名称。'."\n"
                            ."\n"
                            .'- C（必选）：国家/地区。使用[ISO 3166-1](https://www.iso.org/obp/ui/#search/code/)的二位国家代码。例如：CN代表中国。 '."\n"
                            ."\n"
                            .'- O（必选）：公司名称。企业、单位、组织或机构的法定名称。 '."\n"
                            ."\n"
                            .'- OU（必选）：部门名称。'."\n"
                            ."\n"
                            .'- ST（可选）：省/市。省、直辖市、自治区或特别行政区名称。'."\n"
                            ."\n"
                            .'- L（可选）：城市名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'CN=userName,OU=kms,O=aliyun,C=CN',
                    ],
                ],
                [
                    'name' => 'SubjectAlternativeNames',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '证书主体别名。  '."\n"
                            .'支持域名列表，最多支持10个域名。',
                        'type' => 'object',
                        'required' => false,
                        'example' => '["test1.example.com","test2.example.com"]',
                    ],
                ],
                [
                    'name' => 'KeySpec',
                    'in' => 'query',
                    'schema' => [
                        'description' => '密钥类型，取值：'."\n"
                            ."\n\n"
                            .'- RSA_2048'."\n"
                            .'- EC_P256'."\n"
                            .'- EC_SM2'."\n",
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'RSA_2048',
                    ],
                ],
                [
                    'name' => 'ExportablePrivateKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => '证书私钥是否需要导出使用。取值：  '."\n"
                            ."\n"
                            .'- true（默认值）：证书私钥需要导出使用。  '."\n"
                            ."\n"
                            .'- false：证书私钥不需要导出使用。建议选择否，以便使用更高安全级别的密钥保护。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
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
                                'example' => '15a735a1-8fe6-45cc-a64c-3c4ff839334e',
                            ],
                            'Csr' => [
                                'description' => 'PEM格式的证书请求。',
                                'type' => 'string',
                                'example' => '-----BEGIN CERTIFICATE REQUEST-----\\nMIIDADCCAegCAQAwgboxCzAJBgNVBAYTAkNOMREwDwYDVQQIEwhaaGVqaWFuZzER\\n****\\nmkj4rg==\\n-----END CERTIFICATE REQUEST-----\\n',
                            ],
                            'CertificateId' => [
                                'description' => '证书ID。证书管家中证书的全局唯一标识符。',
                                'type' => 'string',
                                'example' => '9a28de48-8d8b-484d-a766-dec4****',
                            ],
                            'Arn' => [
                                'description' => '证书ARN。',
                                'type' => 'string',
                                'example' => 'acs:kms:cn-hangzhou:154035569884****:certificate/98e85c94-52d0-40c9-b3b2-afda52f4****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter is not valid.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidAccessKeyId.NotFound',
                        'errorMessage' => 'The specified AccessKey ID does not exist.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"15a735a1-8fe6-45cc-a64c-3c4ff839334e\\",\\n  \\"Csr\\": \\"-----BEGIN CERTIFICATE REQUEST-----\\\\\\\\nMIIDADCCAegCAQAwgboxCzAJBgNVBAYTAkNOMREwDwYDVQQIEwhaaGVqaWFuZzER\\\\\\\\n****\\\\\\\\nmkj4rg==\\\\\\\\n-----END CERTIFICATE REQUEST-----\\\\\\\\n\\",\\n  \\"CertificateId\\": \\"9a28de48-8d8b-484d-a766-dec4****\\",\\n  \\"Arn\\": \\"acs:kms:cn-hangzhou:154035569884****:certificate/98e85c94-52d0-40c9-b3b2-afda52f4****\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
            'title' => '创建证书',
            'summary' => '调用CreateCertificate接口创建证书。',
            'description' => '创建证书时，请指定非对称密钥的类型，将私钥托管在证书管家，并获取证书请求CSR（Certificate Signing Request）。然后将PEM格式的证书请求文件提交给CA机构，获取正式的证书和证书链，并调用[UploadCertificate](~~212136~~)接口导入证书管家。  '."\n"
                .'本文将提供一个示例，创建一个证书，并获取证书请求CSR。',
            'responseParamsDescription' => ' ',
        ],
        'DeleteCertificate' => [
            'methods' => [
                'post',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'CertificateId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '证书ID。证书管家中证书的全局唯一标识符。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '9a28de48-8d8b-484d-a766-dec4****',
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
                                'example' => 'd97f6c33-ca26-4de2-a580-0e2fd1c5bfb0',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter is not valid.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'Certificate.NotFound',
                        'errorMessage' => 'The specified certificate is not found.',
                    ],
                    [
                        'errorCode' => 'InvalidAccessKeyId.NotFound',
                        'errorMessage' => 'The Access Key ID provided does not exist in our records.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"d97f6c33-ca26-4de2-a580-0e2fd1c5bfb0\\"\\n}","errorExample":""},{"type":"xml","example":"<KMS>\\r\\n\\t<RequestId>d97f6c33-ca26-4de2-a580-0e2fd1c5bfb0</RequestId>\\r\\n</KMS>","errorExample":""}]',
            'title' => '删除证书',
            'summary' => '删除证书及其对应的私钥和证书链。',
            'description' => '证书及其对应的私钥和证书链删除后将无法恢复，请谨慎操作。  '."\n"
                .'本文将提供一个示例，删除ID为`9a28de48-8d8b-484d-a766-dec4****`的证书及其对应的私钥和证书链。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'UpdateCertificateStatus' => [
            'methods' => [
                'post',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'CertificateId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '证书ID。证书管家中证书的全局唯一标识符。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '9a28de48-8d8b-484d-a766-dec4****',
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'description' => '证书的状态，取值：'."\n"
                            ."\n"
                            .'- INACTIVE：已禁用。'."\n"
                            .'- ACTIVE：已启用。'."\n"
                            .'- REVOKED：已吊销。  '."\n"
                            .'  '."\n"
                            .'> 当证书状态为REVOKED（已吊销）时，不能进行签名操作，只能进行验签操作。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'INACTIVE',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => 'e3f57fe0-9ded-40b0-9caf-a3815f2148c1',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter is not valid.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'Certificate.NotFound',
                        'errorMessage' => 'The specified certificate is not found.',
                    ],
                    [
                        'errorCode' => 'InvalidAccessKeyId.NotFound',
                        'errorMessage' => 'The Access Key ID provided does not exist in our records.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"e3f57fe0-9ded-40b0-9caf-a3815f2148c1\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateCertificateStatusResponse>\\n    <RequestId>e3f57fe0-9ded-40b0-9caf-a3815f2148c1</RequestId>\\n</UpdateCertificateStatusResponse>","errorExample":""}]',
            'title' => '更新证书状态',
            'summary' => '调用UpdateCertificateStatus接口更新证书状态。',
            'description' => '本文将提供一个示例，将ID为`9a28de48-8d8b-484d-a766-dec4****`证书的状态更新为已禁用。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeCertificate' => [
            'methods' => [
                'post',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'CertificateId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '证书ID。证书管家中证书的全局唯一标识符。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '9a28de48-8d8b-484d-a766-dec4****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Status' => [
                                'description' => '证书的状态信息，取值：'."\n"
                                    ."\n"
                                    .'- PENDING：等待导入。'."\n"
                                    .'- ACTIVE：已启用。'."\n"
                                    .'- INACTIVE：已禁用。'."\n"
                                    .'- REVOKED：已吊销。'."\n",
                                'type' => 'string',
                                'example' => 'ACTIVE',
                            ],
                            'Serial' => [
                                'description' => '证书序列号。',
                                'type' => 'string',
                                'example' => '12345678',
                            ],
                            'CreatedAt' => [
                                'description' => '证书的创建时间。',
                                'type' => 'string',
                                'example' => '2020-10-13T03:05:03Z',
                            ],
                            'Tags' => [
                                'description' => '证书对应的标签。',
                                'type' => 'object',
                                'example' => '[{\\"TagKey\\":\\"S1key1\\",\\"TagValue\\":\\"S1val1\\"},{\\"TagKey\\":\\"S1key2\\",\\"TagValue\\":\\"S2val2\\"}]',
                            ],
                            'SubjectKeyIdentifier' => [
                                'description' => '主体公钥识别符。',
                                'type' => 'string',
                                'example' => '79 36 26 DE 9F F5 15 E3 56 DC ****',
                            ],
                            'ExportablePrivateKey' => [
                                'description' => '证书密钥是否支持导出。取值：  '."\n"
                                    ."\n"
                                    .'- true（默认值）：支持导出。  '."\n"
                                    ."\n"
                                    .'- false：不支持导出。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Issuer' => [
                                'description' => '证书的签发者信息，使用限定名DN（Distinguished Names）形式标识。',
                                'type' => 'string',
                                'example' => 'CN=testCA,OU=kms,O=aliyun,C=CN',
                            ],
                            'SignatureAlgorithm' => [
                                'description' => '证书签名算法，取值：'."\n"
                                    ."\n"
                                    .'- RSA2048-SHA256'."\n"
                                    .'- ECDSA-SHA256'."\n"
                                    .'- SM2-SM3',
                                'type' => 'string',
                                'example' => 'ECDSA-SHA256',
                            ],
                            'NotAfter' => [
                                'description' => '证书有效期的截止时间。',
                                'type' => 'string',
                                'example' => '2022-10-13T03:09:00Z',
                            ],
                            'Arn' => [
                                'description' => '证书ARN。',
                                'type' => 'string',
                                'example' => 'acs:kms:cn-hangzhou:159498693826****:certificate/9a28de48-8d8b-484d-a766-dec4****"',
                            ],
                            'CertificateId' => [
                                'description' => '证书ID。证书管家中证书的全局唯一标识符。',
                                'type' => 'string',
                                'example' => '9a28de48-8d8b-484d-a766-dec4****',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'edb671a3-c5a1-4ebe-a1de-d748b640bdf2',
                            ],
                            'KeySpec' => [
                                'description' => '密钥类型。',
                                'type' => 'string',
                                'example' => 'RSA_2048',
                            ],
                            'SubjectPublicKey' => [
                                'description' => '证书中的公钥。',
                                'type' => 'string',
                                'example' => '-----BEGIN PUBLIC KEY----- MIIBIjA -----END PUBLIC KEY-----',
                            ],
                            'Subject' => [
                                'description' => '证书主体（拥有者） ，采用DN标识。'."\n"
                                    .'  '."\n",
                                'type' => 'string',
                                'example' => 'CN=userName,OU=aliyun,O=aliyun,C=CN',
                            ],
                            'NotBefore' => [
                                'description' => '证书有效期的开始时间。',
                                'type' => 'string',
                                'example' => '2020-10-13T03:09:00Z',
                            ],
                            'UpdatedAt' => [
                                'description' => '证书的更新时间。',
                                'type' => 'string',
                                'example' => '2020-12-23T06:10:13Z',
                            ],
                            'SubjectAlternativeNames' => [
                                'description' => '支持域名列表，最多支持10个域名。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '证书主体别名。',
                                    'type' => 'string',
                                    'example' => '["test1.example.com","test2.example.com"]',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter is not valid.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'Certificate.NotFound',
                        'errorMessage' => 'The specified certificate is not found.',
                    ],
                    [
                        'errorCode' => 'InvalidAccessKeyId.NotFound',
                        'errorMessage' => 'The Access Key ID provided does not exist in our records.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Status\\": \\"ACTIVE\\",\\n  \\"Serial\\": \\"12345678\\",\\n  \\"CreatedAt\\": \\"2020-10-13T03:05:03Z\\",\\n  \\"Tags\\": {\\n    \\"test\\": \\"test\\",\\n    \\"test2\\": 1\\n  },\\n  \\"SubjectKeyIdentifier\\": \\"79 36 26 DE 9F F5 15 E3 56 DC ****\\",\\n  \\"ExportablePrivateKey\\": true,\\n  \\"Issuer\\": \\"CN=testCA,OU=kms,O=aliyun,C=CN\\",\\n  \\"SignatureAlgorithm\\": \\"ECDSA-SHA256\\",\\n  \\"NotAfter\\": \\"2022-10-13T03:09:00Z\\",\\n  \\"Arn\\": \\"acs:kms:cn-hangzhou:159498693826****:certificate/9a28de48-8d8b-484d-a766-dec4****\\\\\\"\\",\\n  \\"CertificateId\\": \\"9a28de48-8d8b-484d-a766-dec4****\\",\\n  \\"RequestId\\": \\"edb671a3-c5a1-4ebe-a1de-d748b640bdf2\\",\\n  \\"KeySpec\\": \\"RSA_2048\\",\\n  \\"SubjectPublicKey\\": \\"-----BEGIN PUBLIC KEY----- MIIBIjA -----END PUBLIC KEY-----\\",\\n  \\"Subject\\": \\"CN=userName,OU=aliyun,O=aliyun,C=CN\\",\\n  \\"NotBefore\\": \\"2020-10-13T03:09:00Z\\",\\n  \\"UpdatedAt\\": \\"2020-12-23T06:10:13Z\\",\\n  \\"SubjectAlternativeNames\\": [\\n    \\"[\\\\\\"test1.example.com\\\\\\",\\\\\\"test2.example.com\\\\\\"]\\"\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<KMS>\\n\\t<Status>ACTIVE</Status>\\n\\t<RequestId>edb671a3-c5a1-4ebe-a1de-d748b640bdf2</RequestId>\\n\\t<Issuer>CN=testCA,OU=kms,O=aliyun,C=CN</Issuer>\\n\\t<CertificateId>9a28de48-8d8b-484d-a766-dec4****</CertificateId>\\n\\t<CreatedAt>2020-10-13T03:05:03Z</CreatedAt>\\n\\t<KeySpec>RSA_2048</KeySpec>\\n\\t<SubjectAlternativeNames>[\\\\\\"test1.example.com\\\\\\",\\\\\\"test2.example.com\\\\\\"]</SubjectAlternativeNames>\\n\\t<SignatureAlgorithm>ECDSA-SHA256</SignatureAlgorithm>\\n\\t<SubjectKeyIdentifier>79 36 26 DE 9F F5 15 E3 56 DC ********</SubjectKeyIdentifier>\\n\\t<NotAfter>2022-10-13T03:09:00Z</NotAfter>\\n    <ExportablePrivateKey>true</ExportablePrivateKey>\\n\\t<UpdatedAt>2020-10-13T03:15:00Z</UpdatedAt>\\n\\t<Subject>CN=userName,OU=aliyun,O=aliyun,C=CN</Subject>\\n\\t<Serial>12345678</Serial>\\n\\t<SubjectPublicKey>-----BEGIN PUBLIC KEY----- MIIBIjA -----END PUBLIC KEY-----</SubjectPublicKey>\\n\\t<NotBefore>2020-10-13T03:09:00Z</NotBefore>\\n\\t<Arn>acs:kms:cn-hangzhou:159498693826****:certificate/9a28de48-8d8b-484d-a766-dec4****</Arn>\\n\\t<Tags>[{\\\\\\"TagKey\\\\\\":\\\\\\"S1key1\\\\\\",\\\\\\"TagValue\\\\\\":\\\\\\"S1val1\\\\\\"},{\\\\\\"TagKey\\\\\\":\\\\\\"S1key2\\\\\\",\\\\\\"TagValue\\\\\\":\\\\\\"S2val2\\\\\\"}]</Tags>\\n</KMS>","errorExample":""}]',
            'title' => '查询证书信息',
            'summary' => '调用DescribeCertificate接口查询证书信息。',
            'description' => '本文将提供一个示例，查询一个ID为`9a28de48-8d8b-484d-a766-dec4****`的证书信息，包括证书ID、创建时间、签发者信息、有效期、序列号、签名算法等。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetCertificate' => [
            'methods' => [
                'post',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'CertificateId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '证书ID。证书管家中证书的全局唯一标识符。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '9a28de48-8d8b-484d-a766-dec4****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'CertificateChain' => [
                                'description' => 'PEM格式的证书链。',
                                'type' => 'string',
                                'example' => '-----BEGIN CERTIFICATE-----  (Sub CA Certificate PEM Content)  -----END CERTIFICATE-----  -----BEGIN CERTIFICATE-----  (Sub CA Certificate PEM Content)  -----END CERTIFICATE-----  -----BEGIN CERTIFICATE-----  (Root CA Certificate PEM Content)  -----END CERTIFICATE-----',
                            ],
                            'Certificate' => [
                                'description' => 'PEM格式的证书。',
                                'type' => 'string',
                                'example' => '-----BEGIN CERTIFICATE-----  (X.509 Certificate PEM Content)  -----END CERTIFICATE-----',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'b3e104b4-0319-4a20-ab7f-9fef6****',
                            ],
                            'CertificateId' => [
                                'description' => '证书ID。',
                                'type' => 'string',
                                'example' => '9a28de48-8d8b-484d-a766-dec4****',
                            ],
                            'Csr' => [
                                'description' => 'PEM格式的证书请求。'."\n"
                                    ."\n",
                                'type' => 'string',
                                'example' => '-----BEGIN CERTIFICATE REQUEST-----MIICxjCCAa4CAQAwPzELMAkGA1UEBhMCQ04xDzANBgNVBAoTBmFsaXl1bjEMMAoGA1UECxMDa21zMREwDwY****-----END CERTIFICATE REQUEST-----',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter is not valid.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidAccessKeyId.NotFound',
                        'errorMessage' => 'The specified AccessKey ID does not exist.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"CertificateChain\\": \\"-----BEGIN CERTIFICATE-----  (Sub CA Certificate PEM Content)  -----END CERTIFICATE-----  -----BEGIN CERTIFICATE-----  (Sub CA Certificate PEM Content)  -----END CERTIFICATE-----  -----BEGIN CERTIFICATE-----  (Root CA Certificate PEM Content)  -----END CERTIFICATE-----\\",\\n  \\"Certificate\\": \\"-----BEGIN CERTIFICATE-----  (X.509 Certificate PEM Content)  -----END CERTIFICATE-----\\",\\n  \\"RequestId\\": \\"b3e104b4-0319-4a20-ab7f-9fef6****\\",\\n  \\"CertificateId\\": \\"9a28de48-8d8b-484d-a766-dec4****\\",\\n  \\"Csr\\": \\"-----BEGIN CERTIFICATE REQUEST-----MIICxjCCAa4CAQAwPzELMAkGA1UEBhMCQ04xDzANBgNVBAoTBmFsaXl1bjEMMAoGA1UECxMDa21zMREwDwY****-----END CERTIFICATE REQUEST-----\\"\\n}","errorExample":""},{"type":"xml","example":"<KMS>\\n\\t<Csr>-----BEGIN CERTIFICATE REQUEST-----MIICxjCCAa4CAQAwPzELMAkGA1UEBhMCQ04xDzANBgNVBAoTBmFsaXl1bjEMMAoGA1UECxMDa21zMREwDwY****-----END CERTIFICATE REQUEST-----</Csr>\\n\\t<RequestId>b3e104b4-0319-4a20-ab7f-9fef6****</RequestId>\\n\\t<CertificateId>9a28de48-8d8b-484d-a766-dec4****</CertificateId>\\n\\t<CertificateChain>-----BEGIN CERTIFICATE-----  (Sub CA Certificate PEM Content)  -----END CERTIFICATE-----  -----BEGIN CERTIFICATE-----  (Sub CA Certificate PEM Content)  -----END CERTIFICATE-----  -----BEGIN CERTIFICATE-----  (Root CA Certificate PEM Content)  -----END CERTIFICATE-----</CertificateChain>\\n\\t<Certificate>-----BEGIN CERTIFICATE-----  (X.509 Certificate PEM Content)  -----END CERTIFICATE-----</Certificate>\\n</KMS>\\n  \\n\\t\\n","errorExample":""}]',
            'title' => '获取证书',
            'summary' => '调用GetCertificate接口查询证书管家托管的证书。',
            'description' => '本文将提供一个示例，查询ID为`9a28de48-8d8b-484d-a766-dec4****`的证书信息，包括证书、证书链、证书ID和证书请求。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'UploadCertificate' => [
            'methods' => [
                'post',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'CertificateId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '证书ID。证书管家中证书的全局唯一标识符。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '12345678-1234-1234-1234-12345678****',
                    ],
                ],
                [
                    'name' => 'Certificate',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'CA机构颁发的PEM格式的证书。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '-----BEGIN CERTIFICATE-----  (X.509 Certificate PEM Content)  -----END CERTIFICATE-----',
                    ],
                ],
                [
                    'name' => 'CertificateChain',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'CA机构颁发的PEM格式的证书链。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '-----BEGIN CERTIFICATE-----  (Sub CA Certificate PEM Content)  -----END CERTIFICATE-----  -----BEGIN CERTIFICATE-----  (Sub CA Certificate PEM Content)  -----END CERTIFICATE-----  -----BEGIN CERTIFICATE-----  (Root CA Certificate PEM Content)  -----END CERTIFICATE-----',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '15a735a1-8fe6-45cc-a64c-3c4ff839334e',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter is not valid.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidAccessKeyId.NotFound',
                        'errorMessage' => 'The Access Key ID provided does not exist in our records.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"15a735a1-8fe6-45cc-a64c-3c4ff839334e\\"\\n}","errorExample":""},{"type":"xml","example":"<UploadCertificateResponse>\\n    <RequestId>15a735a1-8fe6-45cc-a64c-3c4ff839334e</RequestId>\\n</UploadCertificateResponse>","errorExample":""}]',
            'title' => '更新证书',
            'summary' => '调用UploadCertificate接口将CA机构颁发的证书和证书链导入证书管家。',
            'description' => '本文将提供一个示例，将CA机构颁发的证书导入到KMS证书管家中ID为`12345678-1234-1234-1234-12345678****`的证书中。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CertificatePrivateKeySign' => [
            'methods' => [
                'post',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'CertificateId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '证书ID。证书管家中证书的全局唯一标识符。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '12345678-1234-1234-1234-12345678****',
                    ],
                ],
                [
                    'name' => 'Algorithm',
                    'in' => 'query',
                    'schema' => [
                        'description' => '签名算法。取值：  '."\n"
                            ."\n"
                            .'- RSA_PKCS1_SHA_256  '."\n"
                            ."\n"
                            .'- RSA_PSS_SHA_256  '."\n"
                            ."\n"
                            .'- ECDSA_SHA_256  '."\n"
                            ."\n"
                            .'- SM2DSA  '."\n"
                            .'  '."\n"
                            .'> SM2DSA签名算法仅在中国内地使用托管密码机的地域支持。更多信息，请参见[托管密码机概述](~~125803~~)。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ECDSA_SHA_256',
                    ],
                ],
                [
                    'name' => 'MessageType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '消息类型。取值：  '."\n"
                            ."\n"
                            .'- RAW（默认值）：原始数据。  '."\n"
                            ."\n"
                            .'- DIGEST：原始数据的消息摘要（哈希值）。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'RAW',
                    ],
                ],
                [
                    'name' => 'Message',
                    'in' => 'query',
                    'schema' => [
                        'description' => '待签名数据。  '."\n"
                            ."\n"
                            .'使用Base64编码。例如：待签名数据的十六进制内容为`[0x31, 0x32, 0x33, 0x34]`，则对应的Base64编码为`MTIzNA==`。  '."\n"
                            ."\n"
                            .'当MessageType取值为RAW时，数据内容需小于4KB。'."\n"
                            ."\n"
                            .'如果待签名数据内容大于4KB，您可以将MessageType指定为DIGEST，将Message指定为本地计算的消息摘要（又称哈希值）。证书管家将使用您自己的证书应用系统计算消息摘要，使用的消息摘要算法须与指定签名算法需要的消息摘要算法保持一致。具体如下：  '."\n"
                            ."\n"
                            .'- RSA_PKCS1_SHA_256、RSA_PSS_SHA_256和ECDSA_SHA_256对应的消息摘要算法为SHA-256。  '."\n"
                            ."\n"
                            .'- SM2DSA对应的消息摘要算法为SM3。  '."\n"
                            ."\n"
                            .'> 当证书密钥规格为EC_SM2，并且MessageType为DIGEST时，Message值为GB/T 32918.2-2016 6.1中描述的`e`。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'VGhlIHF1aWNrIGJyb3duIGZveCBqdW1wcyBvdmVyIHRoZSBsYXp5IGRvZy4=',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'SignatureValue' => [
                                'description' => '签名值。  '."\n"
                                    .'使用Base64编码。',
                                'type' => 'string',
                                'example' => 'ZOyIygCyaOW6Gj****MlNKiuyjfzw=',
                            ],
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '5979d897-d69f-4fc9-87dd-f3bb73c40b80',
                            ],
                            'CertificateId' => [
                                'description' => '证书ID。',
                                'type' => 'string',
                                'example' => '12345678-1234-1234-1234-12345678****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter is not valid.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'Certificate.NotFound',
                        'errorMessage' => 'The specified certificate is not found.',
                    ],
                    [
                        'errorCode' => 'InvalidAccessKeyId.NotFound',
                        'errorMessage' => 'The Access Key ID provided does not exist in our records.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"SignatureValue\\": \\"ZOyIygCyaOW6Gj****MlNKiuyjfzw=\\",\\n  \\"RequestId\\": \\"5979d897-d69f-4fc9-87dd-f3bb73c40b80\\",\\n  \\"CertificateId\\": \\"12345678-1234-1234-1234-12345678****\\"\\n}","errorExample":""},{"type":"xml","example":"<CertificatePrivateKeySignResponse>\\n    <SignatureValue>ZOyIygCyaOW6Gj****MlNKiuyjfzw=</SignatureValue>\\n    <RequestId>5979d897-d69f-4fc9-87dd-f3bb73c40b80</RequestId>\\n    <CertificateId>12345678-1234-1234-1234-12345678****</CertificateId>\\n</CertificatePrivateKeySignResponse>","errorExample":""}]',
            'title' => '使用X.509数字证书私钥为消息签名',
            'summary' => '调用CertificatePrivateKeySign接口使用指定证书生成数字签名。',
            'description' => '请求参数中签名算法需要跟密钥类型对应。签名算法和密钥类型对照表如下：  '."\n"
                .'| Algorithm  |Key Spec |'."\n"
                .'| -------------| ----- |'."\n"
                .'| RSA_PKCS1_SHA_256|RSA_2048 |'."\n"
                .'| RSA_PSS_SHA_256|RSA_2048 |'."\n"
                .'| ECDSA_SHA_256 |EC_P256 |'."\n"
                .'| SM2DSA  |EC_SM2 |'."\n"
                ."\n"
                .'本文将提供一个示例，使用ID为`12345678-1234-1234-1234-12345678****`的证书，通过`ECDSA_SHA_256`签名算法为原始数据`VGhlIHF1aWNrIGJyb3duIGZveCBqdW1wcyBvdmVyIHRoZSBsYXp5IGRvZy4=`生成数字签名。'."\n"
                .'  '."\n",
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CertificatePublicKeyEncrypt' => [
            'methods' => [
                'post',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'CertificateId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '证书ID。证书管家中证书的全局唯一标识符。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '12345678-1234-1234-1234-12345678****',
                    ],
                ],
                [
                    'name' => 'Algorithm',
                    'in' => 'query',
                    'schema' => [
                        'description' => '加密算法，取值：  '."\n"
                            ."\n"
                            .'- RSAES_OAEP_SHA_1  '."\n"
                            ."\n"
                            .'- RSAES_OAEP_SHA_256  '."\n"
                            ."\n"
                            .'- SM2PKE  '."\n"
                            .'  '."\n"
                            .'> SM2PKE加密算法仅在中国内地使用托管密码机的地域支持。更多信息，请参见[托管密码机概述](~~125803~~)。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'RSAES_OAEP_SHA_256',
                    ],
                ],
                [
                    'name' => 'Plaintext',
                    'in' => 'query',
                    'schema' => [
                        'description' => '待加密数据。   '."\n"
                            .'使用Base64编码。例如：待加密数据的十六进制内容为`[0x31, 0x32, 0x33, 0x34]`，则对应的Base64编码为`MTIzNA==`。   '."\n"
                            .'Plaintext数据大小限制根据Algorithm的取值有所不同，具体如下：  '."\n"
                            ."\n"
                            .'- RSAES_OAEP_SHA_1：214字节。  '."\n"
                            ."\n"
                            .'- RSAES_OAEP_SHA_256：190字节。  '."\n"
                            ."\n"
                            .'- SM2PKE：6047字节。  '."\n"
                            .'  '."\n"
                            ."\n"
                            .'  '."\n"
                            .'  '."\n"
                            .'如果需要对超出接口限制的数据进行加密，可以先调用[GenerateDataKey](~~28948~~)接口生成数据加密密钥加密数据，再调用CertificatePublicKeyEncrypt接口加密数据密钥。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'VGhlIHF1aWNrIGJyb3duIGZveCBqdW1wcyBvdmVyIHRoZSBsYXp5IGRvZy4=',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'CiphertextBlob' => [
                                'description' => '加密后的密文。  '."\n"
                                    .'使用Base64编码。',
                                'type' => 'string',
                                'example' => 'ZOyIygCyaOW6Gj****MlNKiuyjfzw=',
                            ],
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '5979d897-d69f-4fc9-87dd-f3bb73c40b80',
                            ],
                            'CertificateId' => [
                                'description' => '证书ID。',
                                'type' => 'string',
                                'example' => '12345678-1234-1234-1234-12345678****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter is not valid.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'Certificate.NotFound',
                        'errorMessage' => 'The specified certificate is not found.',
                    ],
                    [
                        'errorCode' => 'InvalidAccessKeyId.NotFound',
                        'errorMessage' => 'The Access Key ID provided does not exist in our records.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"CiphertextBlob\\": \\"ZOyIygCyaOW6Gj****MlNKiuyjfzw=\\",\\n  \\"RequestId\\": \\"5979d897-d69f-4fc9-87dd-f3bb73c40b80\\",\\n  \\"CertificateId\\": \\"12345678-1234-1234-1234-12345678****\\"\\n}","errorExample":""},{"type":"xml","example":"<CertificatePublicKeyEncryptResponse>\\n    <CiphertextBlob>ZOyIygCyaOW6Gj****MlNKiuyjfzw=</CiphertextBlob>\\n    <RequestId>5979d897-d69f-4fc9-87dd-f3bb73c40b80</RequestId>\\n    <CertificateId>12345678-1234-1234-1234-12345678****</CertificateId>\\n</CertificatePublicKeyEncryptResponse>","errorExample":""}]',
            'title' => '使用X.509数字证书公钥对明文加密',
            'summary' => '调用CertificatePublicKeyEncrypt接口使用指定证书加密数据。',
            'description' => '使用限制：请求参数中加密算法需要跟密钥类型对应。  '."\n"
                .'加密算法和密钥类型对照表如下：'."\n"
                ."\n"
                .'| Algorithm        | Key Spec  |'."\n"
                .'| -------------| ----- |'."\n"
                .'| RSAES_OAEP_SHA_1| RSA_2048 |'."\n"
                .'| RSAES_OAEP_SHA_256| RSA_2048 |'."\n"
                .'| SM2PKE |EC_SM2 |'."\n"
                ."\n"
                .'  '."\n"
                .'本文将提供一个示例，使用ID为`12345678-1234-1234-1234-12345678****`的证书，通过`RSAES_OAEP_SHA_256`加密算法对数据`VGhlIHF1aWNrIGJyb3duIGZveCBqdW1wcyBvdmVyIHRoZSBsYXp5IGRvZy4=`进行加密。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CertificatePrivateKeyDecrypt' => [
            'methods' => [
                'post',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'CertificateId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '证书ID。证书管家中证书的全局唯一标识符。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '12345678-1234-1234-1234-12345678****',
                    ],
                ],
                [
                    'name' => 'Algorithm',
                    'in' => 'query',
                    'schema' => [
                        'description' => '加密算法，取值：  '."\n"
                            ."\n"
                            .'- RSAES_OAEP_SHA_1  '."\n"
                            ."\n"
                            .'- RSAES_OAEP_SHA_256  '."\n"
                            ."\n"
                            .'- SM2PKE  '."\n"
                            .'  '."\n"
                            .'> SM2PKE加密算法仅在中国内地使用托管密码机的地域支持。更多信息，请参见[托管密码机概述](~~125803~~)。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'RSAES_OAEP_SHA_256',
                    ],
                ],
                [
                    'name' => 'CiphertextBlob',
                    'in' => 'query',
                    'schema' => [
                        'description' => '待解密数据。   '."\n"
                            .'使用Base64编码。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ZOyIygCyaOW6Gj****MlNKiuyjfzw=',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '5979d897-d69f-4fc9-87dd-f3bb73c40b80',
                            ],
                            'CertificateId' => [
                                'description' => '证书ID。',
                                'type' => 'string',
                                'example' => '12345678-1234-1234-1234-12345678****',
                            ],
                            'Plaintext' => [
                                'description' => '解密后的数据。  '."\n"
                                    .'使用Base64编码。',
                                'type' => 'string',
                                'example' => 'VGhlIHF1aWNrIGJyb3duIGZveCBqdW1wcyBvdmVyIHRoZSBsYXp5IGRvZy4',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter is not valid.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'Certificate.NotFound',
                        'errorMessage' => 'The specified certificate is not found.',
                    ],
                    [
                        'errorCode' => 'InvalidAccessKeyId.NotFound',
                        'errorMessage' => 'The Access Key ID provided does not exist in our records.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"5979d897-d69f-4fc9-87dd-f3bb73c40b80\\",\\n  \\"CertificateId\\": \\"12345678-1234-1234-1234-12345678****\\",\\n  \\"Plaintext\\": \\"VGhlIHF1aWNrIGJyb3duIGZveCBqdW1wcyBvdmVyIHRoZSBsYXp5IGRvZy4\\"\\n}","errorExample":""},{"type":"xml","example":"<CertificatePrivateKeyDecryptResponse>\\n    <RequestId>5979d897-d69f-4fc9-87dd-f3bb73c40b80</RequestId>\\n    <CertificateId>12345678-1234-1234-1234-12345678****</CertificateId>\\n    <Plaintext>VGhlIHF1aWNrIGJyb3duIGZveCBqdW1wcyBvdmVyIHRoZSBsYXp5IGRvZy4</Plaintext>\\n</CertificatePrivateKeyDecryptResponse>","errorExample":""}]',
            'title' => '使用X.509数字证书私钥解密密文',
            'summary' => '调用CertificatePrivateKeyDecrypt接口使用指定证书解密数据。',
            'description' => '使用限制：请求参数中加密算法需要跟密钥类型对应。  '."\n"
                .'加密算法和密钥类型对照表如下：'."\n"
                ."\n"
                .'| Algorithm        | Key Spec  |'."\n"
                .'| -------------| ----- |'."\n"
                .'| RSAES_OAEP_SHA_1| RSA_2048 |'."\n"
                .'| RSAES_OAEP_SHA_256| RSA_2048 |'."\n"
                .'| SM2PKE |EC_SM2 |'."\n"
                ."\n"
                .'  '."\n"
                .'本文将提供一个示例，使用ID为`12345678-1234-1234-1234-12345678****`的证书，通过`RSAES_OAEP_SHA_256`加密算法对数据`ZOyIygCyaOW6Gj****MlNKiuyjfzw=`进行解密。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CertificatePublicKeyVerify' => [
            'methods' => [
                'post',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'CertificateId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '证书ID。证书管家中证书的全局唯一标识符。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '12345678-1234-1234-1234-12345678****',
                    ],
                ],
                [
                    'name' => 'Algorithm',
                    'in' => 'query',
                    'schema' => [
                        'description' => '签名算法。取值：  '."\n"
                            ."\n"
                            .'- RSA_PKCS1_SHA_256  '."\n"
                            ."\n"
                            .'- RSA_PSS_SHA_256  '."\n"
                            ."\n"
                            .'- ECDSA_SHA_256  '."\n"
                            ."\n"
                            .'- SM2DSA  '."\n"
                            .'  '."\n"
                            .'> SM2DSA签名算法仅在中国内地使用托管密码机的地域支持。更多信息，请参见[托管密码机概述](~~125803~~)。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ECDSA_SHA_256',
                    ],
                ],
                [
                    'name' => 'Message',
                    'in' => 'query',
                    'schema' => [
                        'description' => '原始签名数据。  '."\n"
                            ."\n"
                            .'使用Base64编码。例如：原始签名数据的十六进制内容为`[0x31, 0x32, 0x33, 0x34]`，则对应的Base64编码为`MTIzNA==`。  '."\n"
                            ."\n"
                            .'当MessageType取值为RAW时，数据内容需小于4KB。'."\n"
                            ."\n"
                            .'如果待签名数据内容大于4KB，您可以将MessageType指定为DIGEST，将Message指定为本地计算的消息摘要（又称哈希值）。证书管家将使用您自己的证书应用系统计算消息摘要，使用的消息摘要算法须与指定签名算法需要的消息摘要算法保持一致。具体如下：  '."\n"
                            ."\n"
                            .'- RSA_PKCS1_SHA_256、RSA_PSS_SHA_256和ECDSA_SHA_256对应的消息摘要算法为SHA-256。  '."\n"
                            ."\n"
                            .'- SM2DSA对应的消息摘要算法为SM3。  '."\n"
                            ."\n"
                            .'> 当证书密钥规格为EC_SM2，并且MessageType为DIGEST时，Message值为GB/T 32918.2-2016 6.1中描述的`e`。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'VGhlIHF1aWNrIGJyb3duIGZveCBqdW1wcyBvdmVyIHRoZSBsYXp5IGRvZy4=',
                    ],
                ],
                [
                    'name' => 'MessageType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '消息类型。取值：  '."\n"
                            ."\n"
                            .'- RAW（默认值）：原始数据。  '."\n"
                            ."\n"
                            .'- DIGEST：原始数据的消息摘要（哈希值）。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'RAW',
                    ],
                ],
                [
                    'name' => 'SignatureValue',
                    'in' => 'query',
                    'schema' => [
                        'description' => '签名值。  '."\n"
                            .'使用Base64编码。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ZOyIygCyaOW6Gj****MlNKiuyjfzw=',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '5979d897-d69f-4fc9-87dd-f3bb73c40b80',
                            ],
                            'CertificateId' => [
                                'description' => '证书ID。',
                                'type' => 'string',
                                'example' => '12345678-1234-1234-1234-12345678****',
                            ],
                            'SignatureValid' => [
                                'description' => '验证结果。取值：  '."\n"
                                    ."\n"
                                    .'- true：验证成功。  '."\n"
                                    ."\n"
                                    .'- false：验证失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter is not valid.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidAccessKeyId.NotFound',
                        'errorMessage' => 'The specified AccessKey ID does not exist.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"5979d897-d69f-4fc9-87dd-f3bb73c40b80\\",\\n  \\"CertificateId\\": \\"12345678-1234-1234-1234-12345678****\\",\\n  \\"SignatureValid\\": true\\n}","errorExample":""},{"type":"xml","example":"<CertificatePublicKeyVerifyResponse>\\n    <RequestId>5979d897-d69f-4fc9-87dd-f3bb73c40b80</RequestId>\\n    <CertificateId>12345678-1234-1234-1234-12345678****</CertificateId>\\n    <SignatureValid>true</SignatureValid>\\n</CertificatePublicKeyVerifyResponse>","errorExample":""}]',
            'title' => '使用X.509数字证书公钥验证消息',
            'summary' => '调用CertificatePublicKeyVerify接口使用指定证书验证数字签名。',
            'description' => '请求参数中签名算法需要跟密钥类型对应。签名算法和密钥类型对照表如下：  '."\n"
                .'| Algorithm  |Key Spec |'."\n"
                .'| -------------| ----- |'."\n"
                .'| RSA_PKCS1_SHA_256|RSA_2048 |'."\n"
                .'| RSA_PSS_SHA_256|RSA_2048 |'."\n"
                .'| ECDSA_SHA_256 |EC_P256 |'."\n"
                .'| SM2DSA  |EC_SM2 |'."\n"
                ."\n"
                .'本文将提供一个示例，使用ID为`12345678-1234-1234-1234-12345678****`的证书，通过`ECDSA_SHA_256`签名算法验证原始数据签名`VGhlIHF1aWNrIGJyb3duIGZveCBqdW1wcyBvdmVyIHRoZSBsYXp5IGRvZy4=`的数字签名值是否为`ZOyIygCyaOW6Gj****MlNKiuyjfzw=`。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'UntagResources' => [
            'summary' => '为密钥或凭据解绑标签。',
            'methods' => [
                'post',
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
            'operationType' => 'readAndWrite',
            'systemTags' => [
                'operationType' => 'none',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '地域',
                        'description' => '资源所属的地域ID。'."\n"
                            .'>您可以调用[DescribeRegions](~~601478~~)查看当前阿里云账号的可用地域列表。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ResourceType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '资源类型',
                        'description' => '要解绑标签的资源类型。取值：'."\n"
                            ."\n"
                            .'- key：密钥'."\n"
                            ."\n"
                            .'- secret：凭据',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'key',
                    ],
                ],
                [
                    'name' => 'All',
                    'in' => 'query',
                    'schema' => [
                        'title' => '是否全部删除，只针对TagKey.N为空时有效。 取值范围： true  false True False  默认是 false',
                        'description' => '是否为资源解绑所有标签。取值：'."\n"
                            ."\n"
                            .'- true：是'."\n"
                            ."\n"
                            .'- false（默认值）：否'."\n"
                            ."\n"
                            .'>仅当传入的标签键（TagKey）为空时，该参数生效。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'ResourceId',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'title' => '资源ID，最多50个子项',
                        'description' => '要解绑标签的资源ID列表，最多可以输入50个资源ID。'."\n"
                            ."\n"
                            .'输入多个资源ID时，格式为`["ResourceId.1","ResourceId.2",...]`。'."\n"
                            ."\n",
                        'type' => 'array',
                        'items' => [
                            'description' => '要解绑标签的资源ID列表，最多可以输入50个资源ID。'."\n"
                                ."\n"
                                .'输入多个资源ID时，格式为`["ResourceId.1","ResourceId.2",...]`。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'key-hzz62f1cb66fa42qo****',
                        ],
                        'required' => true,
                        'maxItems' => 51,
                    ],
                ],
                [
                    'name' => 'TagKey',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'title' => '标签键，最多20个子项',
                        'description' => '要解绑的标签的标签键，最多可以输入20个标签键。'."\n"
                            ."\n"
                            .'输入多个标签键时，格式为`["key.1","key.2",...]`。'."\n"
                            .'>标签键不能以aliyun和acs:开头。',
                        'type' => 'array',
                        'items' => [
                            'description' => '要解绑的标签的标签键，最多可以输入20个标签键。'."\n"
                                ."\n"
                                .'输入多个标签键时，格式为`["key.1","key.2",...]`。'."\n"
                                .'>标签键不能以aliyun和acs:开头。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'disk-encryption',
                        ],
                        'required' => false,
                        'maxItems' => 21,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => 'b1f210dc-e52c-4a86-b9dd-7492343d46c7',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'InvalidAccessKeyId.NotFound',
                        'errorMessage' => 'The Access Key ID provided does not exist in our records.',
                    ],
                    [
                        'errorCode' => 'InvalidResourceId.NotFound',
                        'errorMessage' => 'The specified ResourceId is not found.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"b1f210dc-e52c-4a86-b9dd-7492343d46c7\\"\\n}","errorExample":""},{"type":"xml","example":"<UntagResourcesResponse>\\n    <RequestId>b1f210dc-e52c-4a86-b9dd-7492343d46c7</RequestId>\\n</UntagResourcesResponse>","errorExample":""}]',
            'title' => '解绑标签',
            'description' => '您可以同时为多个密钥或多个凭据解绑多个标签，但不支持解绑以aliyun或acs:开头的标签。'."\n"
                ."\n"
                .'如果请求参数中输入多个标签键，其中仅部分标签键与资源有关联，接口会调用成功，并为资源解绑这部分标签键对应的标签。',
        ],
        'ListTagResources' => [
            'summary' => '查询密钥或凭据的标签。',
            'methods' => [
                'post',
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
            'operationType' => 'readAndWrite',
            'systemTags' => [
                'operationType' => 'none',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '地域',
                        'description' => '资源所属的地域ID。'."\n"
                            .'>您可以调用[DescribeRegions](~~601478~~)查看当前阿里云账号的可用地域列表。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'title' => '下一个查询开始Token',
                        'description' => '下一个查询开始的Token。'."\n"
                            .'>如果一次调用只返回了部分被查询到的结果条目数（默认每次返回200行数据），则会同步返回NextToken参数值。您可以再次调用该接口，设置上次调用该接口返回的NextToken参数值，以实现分页查询。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'caeba0bbb2be03f84eb48b699f0a4883',
                    ],
                ],
                [
                    'name' => 'ResourceType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '资源类型',
                        'description' => '要查询标签的资源类型。取值：'."\n"
                            ."\n"
                            .'- key：密钥'."\n"
                            ."\n"
                            .'- secret：凭据',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'key',
                    ],
                ],
                [
                    'name' => 'ResourceId',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'title' => '资源ID,最多 50个子项',
                        'description' => '要查询标签的资源ID列表，最多可以输入50个资源ID。'."\n"
                            ."\n"
                            .'输入多个资源ID时，格式为`["ResourceId.1","ResourceId.2",...]`。'."\n",
                        'type' => 'array',
                        'items' => [
                            'description' => '要查询标签的资源ID列表，最多可以输入50个资源ID。'."\n"
                                ."\n"
                                .'输入多个资源ID时，格式为`["ResourceId.1","ResourceId.2",...]`。'."\n",
                            'type' => 'string',
                            'required' => false,
                            'example' => 'key-hzz62f1cb66fa42qo****',
                        ],
                        'required' => false,
                        'maxItems' => 51,
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'title' => '标签列表，最多包含20个子项',
                        'description' => '要查询的标签列表。N的取值范围1~20。',
                        'type' => 'array',
                        'items' => [
                            'description' => '要查询的标签列表。N的取值范围1~20。',
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'title' => '标签键',
                                    'description' => '标签键。每个标签由一个键值对（Key:Value）组成，包含标签键（Key）、标签值（Value）。'."\n"
                                        ."\n"
                                        .'最多可以输入20个标签。输入多个标签时，格式为`[{"Key":"key1","Value":"value1"},{"Key":"key2","Value":"value2"},...]`。'."\n"
                                        ."\n"
                                        .'>标签键不能以aliyun和acs:开头。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'disk-encryption',
                                ],
                                'Value' => [
                                    'title' => '标签值',
                                    'description' => '标签值。每个标签由一个键值对（Key:Value）组成，包含标签键（Key）、标签值（Value）。'."\n"
                                        ."\n"
                                        .'最多可以输入20个标签。输入多个标签时，格式为`[{"Key":"key1","Value":"value1"},{"Key":"key2","Value":"value2"},...]`。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'true',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 21,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'NextToken' => [
                                'title' => '下一个查询开始Token，NextToken为空说明没有下一个',
                                'description' => '本次调用返回的Token，根据取值判断是否具备下一个查询开始的Token。'."\n"
                                    ."\n"
                                    .'- 如果NextToken为空，即"NextToken": ""，表示没有下一个。'."\n"
                                    ."\n"
                                    .'- 如果NextToken有值，则该值就是下一个查询开始的Token。',
                                'type' => 'string',
                                'example' => 'e71d8a535bd9cc11',
                            ],
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '00827261-20B7-4562-83F2-4DF39876A45A',
                            ],
                            'TagResources' => [
                                'type' => 'object',
                                'properties' => [
                                    'TagResource' => [
                                        'title' => '资源列表',
                                        'description' => '资源的标签列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '资源的标签列表。',
                                            'type' => 'object',
                                            'properties' => [
                                                'ResourceType' => [
                                                    'title' => '资源类型',
                                                    'description' => '资源类型。',
                                                    'type' => 'string',
                                                    'example' => 'key',
                                                ],
                                                'TagValue' => [
                                                    'title' => '标签值',
                                                    'description' => '标签值。',
                                                    'type' => 'string',
                                                    'example' => 'true',
                                                ],
                                                'ResourceId' => [
                                                    'title' => '资源ID',
                                                    'description' => '资源ID。',
                                                    'type' => 'string',
                                                    'example' => 'key-hzz62f1cb66fa42qo****',
                                                ],
                                                'TagKey' => [
                                                    'title' => '标签键',
                                                    'description' => '标签键。',
                                                    'type' => 'string',
                                                    'example' => 'disk-encryption',
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
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'Duplicate.TagKey',
                        'errorMessage' => 'The specified tagKey is duplicate.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidAccessKeyId.NotFound',
                        'errorMessage' => 'The Access Key ID provided does not exist in our records.',
                    ],
                    [
                        'errorCode' => 'InvalidResourceId.NotFound',
                        'errorMessage' => 'The specified ResourceId is not found.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"NextToken\\": \\"e71d8a535bd9cc11\\",\\n  \\"RequestId\\": \\"00827261-20B7-4562-83F2-4DF39876A45A\\",\\n  \\"TagResources\\": {\\n    \\"TagResource\\": [\\n      {\\n        \\"ResourceType\\": \\"key\\",\\n        \\"TagValue\\": \\"true\\",\\n        \\"ResourceId\\": \\"key-hzz62f1cb66fa42qo****\\",\\n        \\"TagKey\\": \\"disk-encryption\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListTagResourcesResponse>\\n    <NextToken>e71d8a535bd9cc11</NextToken>\\n    <RequestId>00827261-20B7-4562-83F2-4DF39876A45A</RequestId>\\n    <TagResources>\\n        <ResourceType>key</ResourceType>\\n        <TagValue>true</TagValue>\\n        <ResourceId>key-hzz62f1cb66fa42qo****</ResourceId>\\n        <TagKey>disk-encryption</TagKey>\\n    </TagResources>\\n</ListTagResourcesResponse>","errorExample":""}]',
            'title' => '查询标签列表',
        ],
        'TagResources' => [
            'summary' => '为密钥或凭据绑定标签。',
            'methods' => [
                'post',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'none',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '地域',
                        'description' => '资源所属的地域ID。'."\n"
                            .'>您可以调用[DescribeRegions](~~601478~~)查看当前阿里云账号的可用地域列表。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ResourceType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '资源类型',
                        'description' => '要绑定标签的资源类型。取值：'."\n"
                            ."\n"
                            .'- key：密钥'."\n"
                            ."\n"
                            .'- secret：凭据'."\n",
                        'type' => 'string',
                        'required' => true,
                        'example' => 'key',
                    ],
                ],
                [
                    'name' => 'ResourceId',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'title' => '资源ID,最多 50个子项',
                        'description' => '要绑定标签的资源ID列表，最多可以输入50个资源ID。'."\n"
                            ."\n"
                            .'输入多个资源ID时，格式为`["ResourceId.1","ResourceId.2",...]`。',
                        'type' => 'array',
                        'items' => [
                            'description' => '要绑定标签的资源ID列表，最多可以输入50个资源ID。'."\n"
                                ."\n"
                                .'输入多个资源ID时，格式为`["ResourceId.1","ResourceId.2",...]`。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'key-hzz62f1cb66fa42qo****',
                        ],
                        'required' => true,
                        'maxItems' => 51,
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'title' => '标签列表，最多包含20个子项',
                        'description' => '标签列表，最多可以输入20个标签。'."\n"
                            ."\n"
                            .'每个标签由一个键值对（Key:Value）组成，包含标签键（Key）、标签值（Value）。'."\n"
                            .'输入多个标签时，格式为`[{"Key":"key1","Value":"value1"},{"Key":"key2","Value":"value2"},...]`。'."\n",
                        'type' => 'array',
                        'items' => [
                            'description' => '标签列表，最多可以输入20个标签。'."\n"
                                ."\n"
                                .'每个标签由一个键值对（Key:Value）组成，包含标签键（Key）、标签值（Value）。'."\n"
                                .'输入多个标签时，格式为`[{"Key":"key1","Value":"value1"},{"Key":"key2","Value":"value2"},...]`。',
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'title' => '标签键',
                                    'description' => '标签键。每个标签由一个键值对（Key:Value）组成，包含标签键（Key）、标签值（Value）。'."\n"
                                        ."\n"
                                        .'最多可以输入20个标签。输入多个标签时，格式为`[{"Key":"key1","Value":"value1"},{"Key":"key2","Value":"value2"},...]`。'."\n"
                                        ."\n"
                                        .'每个标签键最多支持128个字符，可以包含英文大小写字母、数字、正斜线（/）、反斜线（\\）、下划线（_）、短划线（-）、半角句号（.）、加号（+）、等于号（=）、半角冒号（:）、字符at（@）。'."\n"
                                        ."\n\n"
                                        .'>标签键不能以aliyun或acs:开头。'."\n"
                                        ."\n",
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'disk-encryption',
                                ],
                                'Value' => [
                                    'title' => '标签值',
                                    'description' => '标签值。每个标签由一个键值对（Key:Value）组成，包含标签键（Key）、标签值（Value）。'."\n"
                                        ."\n"
                                        .'最多可以输入20个标签。输入多个标签时，格式为`[{"Key":"key1","Value":"value1"},{"Key":"key2","Value":"value2"},...]`。'."\n"
                                        ."\n\n"
                                        .'每个标签值最多支持128个字符，可以包含英文大小写字母、数字、正斜线（/）、反斜线（\\）、下划线（_）、短划线（-）、半角句号（.）、加号（+）、等于号（=）、半角冒号（:）、字符at（@）。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'true',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => true,
                        'maxItems' => 21,
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
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '598d0219-45cd-4477-84ad-85a52d9debcf',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter.TagValue',
                        'errorMessage' => 'The specified parameter is not valid.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.TagKey',
                        'errorMessage' => 'The specified parameter is not valid.',
                    ],
                    [
                        'errorCode' => 'Duplicate.TagKey',
                        'errorMessage' => 'The specified tagKey is duplicate.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidAccessKeyId.NotFound',
                        'errorMessage' => 'The Access Key ID provided does not exist in our records.',
                    ],
                    [
                        'errorCode' => 'InvalidResourceId.NotFound',
                        'errorMessage' => 'The specified ResourceId is not found.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"598d0219-45cd-4477-84ad-85a52d9debcf\\"\\n}","errorExample":""},{"type":"xml","example":"<TagResourcesResponse>\\n    <RequestId>598d0219-45cd-4477-84ad-85a52d9debcf</RequestId>\\n</TagResourcesResponse>","errorExample":""}]',
            'title' => '绑定标签',
            'description' => '支持一次为多个密钥或者多个凭据绑定多个标签。',
        ],
        'ListResourceTags' => [
            'methods' => [
                'post',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'KeyId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '全局唯一标识符。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1234abcd-12ab-34cd-56ef-12345678****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '4162a6af-bc99-40b3-a552-89dcc8aaf7c8',
                            ],
                            'Tags' => [
                                'type' => 'object',
                                'properties' => [
                                    'Tag' => [
                                        'description' => '标签。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'KeyId' => [
                                                    'description' => '全局唯一标识符。',
                                                    'type' => 'string',
                                                    'example' => '33caea95-c3e5-4b3e-a9c6-cec76e4e****',
                                                ],
                                                'TagValue' => [
                                                    'description' => '标签值。',
                                                    'type' => 'string',
                                                    'example' => 'Test',
                                                ],
                                                'TagKey' => [
                                                    'description' => '标签键。',
                                                    'type' => 'string',
                                                    'example' => 'Project',
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
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter is not valid.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidAccessKeyId.NotFound',
                        'errorMessage' => 'The Access Key ID provided does not exist in our records.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4162a6af-bc99-40b3-a552-89dcc8aaf7c8\\",\\n  \\"Tags\\": {\\n    \\"Tag\\": [\\n      {\\n        \\"KeyId\\": \\"33caea95-c3e5-4b3e-a9c6-cec76e4e****\\",\\n        \\"TagValue\\": \\"Test\\",\\n        \\"TagKey\\": \\"Project\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListResourceTagsResponse>\\n    <RequestId>4162a6af-bc99-40b3-a552-89dcc8aaf7c8</RequestId>\\n    <Tags>\\n        <KeyId>33caea95-c3e5-4b3e-a9c6-cec76e4e****</KeyId>\\n        <TagValue>Test</TagValue>\\n        <TagKey>Project</TagKey>\\n    </Tags>\\n</ListResourceTagsResponse>","errorExample":""}]',
            'title' => '获取用户主密钥的标签',
            'summary' => '调用ListResourceTags获取用户主密钥的标签。',
            'description' => '请求格式：KeyId="string"',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'TagResource' => [
            'methods' => [
                'post',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'KeyId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '密钥的ID，也可以指定为密钥别名或密钥资源名称（ARN）。关于别名的详细介绍，请参见[管理密钥别名](~~480655~~)。'."\n"
                            ."\n"
                            .'>- 访问其他阿里云账号下的密钥时，必须输入密钥ARN。密钥ARN的格式为`acs:kms:${region}:${account}:key/${keyid}`。'."\n"
                            .'- KeyId、SecretName和CertificateId必须且只能指定其中一个参数。'."\n"
                            ."\n",
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => 'key-hzz630494463ejqjx****',
                    ],
                ],
                [
                    'name' => 'Tags',
                    'in' => 'query',
                    'schema' => [
                        'description' => '一个或多个标签。格式为Tag对象数组。  '."\n"
                            .'Tag对象属性如下：'."\n"
                            .'- TagKey：标签键。'."\n"
                            .'- TagValue：标签值。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '[{"TagKey":"S1key1","TagValue":"S1val1"},{"TagKey":"S1key2","TagValue":"S2val2"}]',
                    ],
                ],
                [
                    'name' => 'SecretName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '凭据名称。  '."\n"
                            ."\n"
                            .'> KeyId、SecretName和CertificateId必须且只能指定其中一个参数。'."\n"
                            ."\n",
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => 'MyDbC****',
                    ],
                ],
                [
                    'name' => 'CertificateId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '证书ID。  '."\n"
                            ."\n"
                            .'> KeyId、SecretName和CertificateId必须且只能指定其中一个参数。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '770dbe42-e146-43d1-a55a-1355db86****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '4162a6af-bc99-40b3-a552-89dcc8aaf7c8',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter is not valid.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidAccessKeyId.NotFound',
                        'errorMessage' => 'The Access Key ID provided does not exist in our records.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4162a6af-bc99-40b3-a552-89dcc8aaf7c8\\"\\n}","errorExample":""},{"type":"xml","example":"<TagResourceResponse>\\n    <RequestId>4162a6af-bc99-40b3-a552-89dcc8aaf7c8</RequestId>\\n</TagResourceResponse>","errorExample":""}]',
            'title' => '为主密钥或凭据设置标签',
            'summary' => '调用TagResource接口为主密钥、凭据或证书绑定标签。',
            'description' => '使用限制：您最多可以为主密钥、凭据或证书分别绑定10个标签。'."\n"
                ."\n"
                .'本文将提供一个示例，为ID为`key-hzz630494463ejqjx****'."\n"
                .'`的密钥绑定标签`[{"TagKey":"S1key1","TagValue":"S1val1"},{"TagKey":"S1key2","TagValue":"S2val2"}]`。'."\n",
            'requestParamsDescription' => ' 关于公共请求参数的详情，请参见[公共参数](~~69007~~)。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'UntagResource' => [
            'methods' => [
                'post',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'KeyId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '密钥ID。主密钥（CMK）的全局唯一标识符。  '."\n"
                            ."\n"
                            .'> KeyId、SecretName和CertificateId必须且只能指定其中一个参数。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => '08c33a6f-4e0a-4a1b-a3fa-7ddf****',
                    ],
                ],
                [
                    'name' => 'TagKeys',
                    'in' => 'query',
                    'schema' => [
                        'description' => '一个或多个标签键，多个标签键用半角逗号（,）间隔。  '."\n"
                            .'您只需指定标签键，不需要指定标签值。  '."\n"
                            .'长度为1~128个字节。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '["tagkey1","tagkey2"]',
                    ],
                ],
                [
                    'name' => 'SecretName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '凭据名称。  '."\n"
                            ."\n"
                            .'> KeyId、SecretName和CertificateId必须且只能指定其中一个参数。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => 'MyDbC****',
                    ],
                ],
                [
                    'name' => 'CertificateId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '证书ID。  '."\n"
                            ."\n"
                            .'> KeyId、SecretName和CertificateId必须且只能指定其中一个参数。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '770dbe42-e146-43d1-a55a-1355db86****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '4162a6af-bc99-40b3-a552-89dcc8aaf7c8',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter is not valid.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidAccessKeyId.NotFound',
                        'errorMessage' => 'The Access Key ID provided does not exist in our records.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4162a6af-bc99-40b3-a552-89dcc8aaf7c8\\"\\n}","errorExample":""},{"type":"xml","example":"<UntagResourceResponse>\\n    <RequestId>4162a6af-bc99-40b3-a552-89dcc8aaf7c8</RequestId>\\n</UntagResourceResponse>","errorExample":""}]',
            'title' => '删除用户主密钥或凭据的指定标签',
            'summary' => '调用UntagResource接口为主密钥、凭据或证书解绑标签。',
            'description' => '本文将提供一个示例，为ID为`08c33a6f-4e0a-4a1b-a3fa-7ddf****`的密钥解绑标签键为tagkey1、tagkey2的标签。',
            'requestParamsDescription' => ' 关于公共请求参数的详情，请参见[公共参数](~~69007~~)。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateNetworkRule' => [
            'methods' => [
                'post',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'title' => '',
                        'description' => '网络控制规则名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'networkrule_test',
                    ],
                ],
                [
                    'name' => 'Type',
                    'in' => 'query',
                    'schema' => [
                        'title' => '',
                        'description' => '网络类型。'."\n"
                            .'取值仅支持Private，即仅支持私网IP。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'Private',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '描述信息。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'networkrule description',
                    ],
                ],
                [
                    'name' => 'SourcePrivateIp',
                    'in' => 'query',
                    'schema' => [
                        'description' => '私网IP地址或者私网网段，各个IP地址间用半角逗号（,）分隔。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '["192.10.XX.XX","192.168.XX.XX/24"]',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Type' => [
                                'description' => '网络类型。',
                                'type' => 'string',
                                'example' => 'Private',
                            ],
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '3bf02f7a-015b-4f93-be0f-cc043fda2dd3',
                            ],
                            'Description' => [
                                'description' => '描述信息。',
                                'type' => 'string',
                                'example' => 'networkrule description',
                            ],
                            'SourcePrivateIp' => [
                                'description' => '私网IP地址或者私网网段。',
                                'type' => 'string',
                                'example' => '["192.10.XX.XX","192.168.XX.XX/24"]',
                            ],
                            'Name' => [
                                'description' => '网络控制规则的名称。',
                                'type' => 'string',
                                'example' => 'networkrule_test',
                            ],
                            'Arn' => [
                                'description' => '网络控制规则的ARN。',
                                'type' => 'string',
                                'example' => 'acs:kms:cn-hangzhou:119285303511****:network/networkrule_test',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Type\\": \\"Private\\",\\n  \\"RequestId\\": \\"3bf02f7a-015b-4f93-be0f-cc043fda2dd3\\",\\n  \\"Description\\": \\"networkrule description\\",\\n  \\"SourcePrivateIp\\": \\"[\\\\\\"192.10.XX.XX\\\\\\",\\\\\\"192.168.XX.XX/24\\\\\\"]\\",\\n  \\"Name\\": \\"networkrule_test\\",\\n  \\"Arn\\": \\"acs:kms:cn-hangzhou:119285303511****:network/networkrule_test\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateNetworkRuleResponse>\\n    <Type>Private</Type>\\n    <RequestId>3bf02f7a-015b-4f93-be0f-cc043fda2dd3</RequestId>\\n    <Description>networkrule description</Description>\\n    <SourcePrivateIp>[\\"192.10.XX.XX\\",\\"192.168.XX.XX/24\\"]</SourcePrivateIp>\\n    <Name>networkrule_test</Name>\\n    <Arn>acs:kms:cn-hangzhou:119285303511****:network/networkrule_test</Arn>\\n</CreateNetworkRuleResponse>","errorExample":""}]',
            'title' => '创建网络规则',
            'summary' => '创建一条网络控制规则，设置允许访问KMS的私网IP或私网的网段。',
            'description' => '### 使用说明'."\n"
                .'自建应用进行密码运算操作、获取凭据值前，需要通过应用身份凭证（ClientKey）访问KMS实例。创建应用接入点AAP和身份凭证（ClientKey）的整体流程如下：'."\n"
                ."\n"
                .'1. 创建网络控制规则：设置允许访问KMS的私网IP或私网网段。即本文介绍的内容。'."\n"
                .'2. 创建权限策略：设置允许应用访问的密钥和凭据，并绑定网络控制规则。更多信息，请参见[CreatePolicy](~~2539454~~)。'."\n"
                .'3. 创建应用接入点：设置认证方式，并绑定权限策略。更多信息，请参见[CreateApplicationAccessPoint](~~2539467~~)。'."\n"
                .'4. 创建应用身份凭证（ClientKey）：设置ClientKey的加密口令、有效期，并绑定应用接入点。更多信息，请参见[CreateClientKey](~~2539509~~)。'."\n",
        ],
        'ListNetworkRules' => [
            'methods' => [
                'post',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时，设置当前页面的页码。默认值为1。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时，设置每页包含网络控制规则的数量。取值范围：1~100，默认值为20。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '3bf02f7a-015b-4f34-be0f-cc043fda2d33',
                            ],
                            'PageNumber' => [
                                'description' => '分页查询时，当前页面的页码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'PageSize' => [
                                'description' => '分页查询时，每页包含网络控制规则的数量。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'TotalCount' => [
                                'description' => '网络控制规则的总数量。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'NetworkRules' => [
                                'type' => 'object',
                                'properties' => [
                                    'NetworkRule' => [
                                        'description' => '网络控制规则列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '网络控制规则列表。',
                                            'type' => 'object',
                                            'properties' => [
                                                'Type' => [
                                                    'description' => '网络类型。取值仅支持Private，即自建应用仅支持通过私网VPC访问KMS实例。',
                                                    'type' => 'string',
                                                    'example' => 'Private',
                                                ],
                                                'Name' => [
                                                    'description' => '网络控制规则名称。',
                                                    'type' => 'string',
                                                    'example' => 'networkrule_test',
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
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter is invalid.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidAccessKeyId.NotFound',
                        'errorMessage' => 'The Access Key ID provided does not exist in our records.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"3bf02f7a-015b-4f34-be0f-cc043fda2d33\\",\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"TotalCount\\": 1,\\n  \\"NetworkRules\\": {\\n    \\"NetworkRule\\": [\\n      {\\n        \\"Type\\": \\"Private\\",\\n        \\"Name\\": \\"networkrule_test\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListNetworkRulesResponse>\\n    <RequestId>3bf02f7a-015b-4f34-be0f-cc043fda2d33</RequestId>\\n    <PageNumber>1</PageNumber>\\n    <PageSize>10</PageSize>\\n    <TotalCount>1</TotalCount>\\n    <NetworkRules>\\n        <Type>Private</Type>\\n        <Name>networkrule_test</Name>\\n    </NetworkRules>\\n</ListNetworkRulesResponse>","errorExample":""}]',
            'title' => '获取网络规则列表',
            'summary' => '查询网络控制规则列表。',
        ],
        'DescribeNetworkRule' => [
            'summary' => '查询一个网络控制规则的详情。',
            'methods' => [
                'post',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的网络控制规则名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'networkrule_test',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '3bf02f7a-015b-4f93-be0f-cc043fda2d33',
                            ],
                            'Arn' => [
                                'description' => '网络控制规则的ARN。',
                                'type' => 'string',
                                'example' => 'acs:kms:cn-hangzhou:119285303511****:network/networkrule_test',
                            ],
                            'Type' => [
                                'description' => '网络类型。取值仅支持Private，即仅支持私网IP。',
                                'type' => 'string',
                                'example' => 'Private',
                            ],
                            'Description' => [
                                'description' => '描述信息。',
                                'type' => 'string',
                                'example' => 'Create by kst-hzz62ee817bvyyr5****',
                            ],
                            'SourcePrivateIp' => [
                                'description' => '私网IP地址或者私网网段。',
                                'type' => 'string',
                                'example' => '["192.10.XX.XX","192.168.XX.XX/24"]',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter is not valid.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidAccessKeyId.NotFound',
                        'errorMessage' => 'The Access Key ID provided does not exist in our records.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"3bf02f7a-015b-4f93-be0f-cc043fda2d33\\",\\n  \\"Arn\\": \\"acs:kms:cn-hangzhou:119285303511****:network/networkrule_test\\",\\n  \\"Type\\": \\"Private\\",\\n  \\"Description\\": \\"Create by kst-hzz62ee817bvyyr5****\\",\\n  \\"SourcePrivateIp\\": \\"[\\\\\\"192.10.XX.XX\\\\\\",\\\\\\"192.168.XX.XX/24\\\\\\"]\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeNetworkRuleResponse>\\n    <RequestId>3bf02f7a-015b-4f93-be0f-cc043fda2d33</RequestId>\\n    <Arn>acs:kms:cn-hangzhou:119285303511****:network/networkrule_test</Arn>\\n    <Type>Private</Type>\\n    <Description>Create by kst-hzz62ee817bvyyr5****</Description>\\n    <SourcePrivateIp>[\\"192.10.XX.XX\\",\\"192.168.XX.XX/24\\"]</SourcePrivateIp>\\n</DescribeNetworkRuleResponse>","errorExample":""}]',
            'title' => '获取网络规则',
        ],
        'UpdateNetworkRule' => [
            'methods' => [
                'post',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要更新的网络控制规则名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'networkrule_test',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '更新后的描述信息。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Create by kst-hzz62ee817bvyyr5****',
                    ],
                ],
                [
                    'name' => 'SourcePrivateIp',
                    'in' => 'query',
                    'schema' => [
                        'description' => '更新后的私网IP地址或者私网网段，各个IP地址间用半角逗号（,）分隔。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '["192.10.XX.XX","192.168.XX.XX/24"]',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '3bf02f7a-015b-4f34-be0f-cc043fda2d85',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter is not valid.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidAccessKeyId.NotFound',
                        'errorMessage' => 'The Access Key ID provided does not exist in our records.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"3bf02f7a-015b-4f34-be0f-cc043fda2d85\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateNetworkRuleResponse>\\n    <RequestId>3bf02f7a-015b-4f34-be0f-cc043fda2d85</RequestId>\\n</UpdateNetworkRuleResponse>","errorExample":""}]',
            'title' => '更新网络规则',
            'summary' => '更新一个网络控制规则。',
            'description' => '- 仅支持修改私网IP地址、描述信息，不支持修改名称和网络类型。'."\n"
                ."\n"
                .'- 更新网络控制规则后，绑定该网络控制规则的权限策略会同步更新，请谨慎操作。'."\n"
                ."\n"
                .'   ',
        ],
        'DeleteNetworkRule' => [
            'methods' => [
                'post',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要删除的网络控制规则名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'networkrule_test',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '3bf02f7a-015b-4f93-be0f-cc043fda2d4',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter is not valid.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidAccessKeyId.NotFound',
                        'errorMessage' => 'The Access Key ID provided does not exist in our records.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"3bf02f7a-015b-4f93-be0f-cc043fda2d4\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteNetworkRuleResponse>\\n    <RequestId>3bf02f7a-015b-4f93-be0f-cc043fda2d4</RequestId>\\n</DeleteNetworkRuleResponse>","errorExample":""}]',
            'title' => '删除网络规则',
            'summary' => '删除一条网络控制规则。',
            'description' => '删除前请确保该网络控制规则没有被任何权限策略绑定，否则会导致相关应用无法正常访问KMS。',
        ],
        'CreatePolicy' => [
            'methods' => [
                'post',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '权限策略名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'policy_test',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '描述信息。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'policy  description',
                    ],
                ],
                [
                    'name' => 'KmsInstance',
                    'in' => 'query',
                    'schema' => [
                        'description' => '权限策略的作用域。即要访问的KMS实例。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'kst-hzz634e67d126u9p9****',
                    ],
                ],
                [
                    'name' => 'Permissions',
                    'in' => 'query',
                    'schema' => [
                        'description' => '权限策略支持的操作。取值：'."\n"
                            ."\n"
                            .'- RbacPermission/Template/CryptoServiceKeyUser：可以对KMS实例进行密码运算操作。'."\n"
                            ."\n"
                            .'- RbacPermission/Template/CryptoServiceSecretUser：可以对KMS实例进行凭据相关操作。'."\n"
                            ."\n"
                            .'支持同时选择这两种操作。'."\n",
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '["RbacPermission/Template/CryptoServiceKeyUser", "RbacPermission/Template/CryptoServiceSecretUser"]',
                    ],
                ],
                [
                    'name' => 'Resources',
                    'in' => 'query',
                    'schema' => [
                        'description' => '允许访问的密钥和凭据。'."\n"
                            ."\n"
                            .'- 密钥：格式为`key/${KeyId}`，如果允许访问当前KMS实例的所有密钥请输入key/*。'."\n"
                            ."\n"
                            .'- 凭据：格式为`secret/${SecretName}`，如果允许访问当前KMS实例的所有凭据请输入secret/*。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '["secret/acs/ram/user/ram-secret", "secret/acs/ram/user/acr-master", "key/key-hzz63d9c8d3dfv8cv****"]',
                    ],
                ],
                [
                    'name' => 'AccessControlRules',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网络控制规则名称。'."\n"
                            ."\n"
                            .'>查询已创建的网络控制规则，请参见[ListNetworkRules](~~2539433~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"NetworkRules":["kst-hzz62ee817bvyyr5x****.efkd","kst-hzz62ee817bvyyr5x****.eyyp"]}',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '3bf02f7a-015b-4f34-be0f-c4543fda2d33',
                            ],
                            'Arn' => [
                                'description' => '权限策略的ARN。',
                                'type' => 'string',
                                'example' => 'acs:kms:cn-hangzhou:119285303511****:policy/policy_test',
                            ],
                            'Name' => [
                                'description' => '权限策略名称。',
                                'type' => 'string',
                                'example' => 'policy_test',
                            ],
                            'Description' => [
                                'description' => '描述信息。',
                                'type' => 'string',
                                'example' => 'policy  description',
                            ],
                            'KmsInstance' => [
                                'description' => '权限策略的作用域。',
                                'type' => 'string',
                                'example' => 'kst-hzz634e67d126u9p9****',
                            ],
                            'Permissions' => [
                                'description' => '权限策略支持的操作。',
                                'type' => 'string',
                                'example' => '["RbacPermission/Template/CryptoServiceKeyUser", "RbacPermission/Template/CryptoServiceSecretUser"]',
                            ],
                            'Resources' => [
                                'description' => '允许访问的密钥和凭据。'."\n"
                                    ."\n"
                                    .'- `key/*`表示允许访问当前KMS实例的所有密钥。'."\n"
                                    ."\n"
                                    .'- `secret/*`表示允许访问当前KMS实例的所有凭据。',
                                'type' => 'string',
                                'example' => '["secret/acs/ram/user/ram-secret", "secret/acs/ram/user/acr-master", "key/key-hzz63d9c8d3dfv8cv****"]',
                            ],
                            'AccessControlRules' => [
                                'description' => '网络控制规则名称。',
                                'type' => 'string',
                                'example' => '{"NetworkRules":["kst-hzz62ee817bvyyr5x****.efkd","kst-hzz62ee817bvyyr5x****.eyyp"]}',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter is not valid.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidAccessKeyId.NotFound',
                        'errorMessage' => 'The Access Key ID provided does not exist in our records.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"3bf02f7a-015b-4f34-be0f-c4543fda2d33\\",\\n  \\"Arn\\": \\"acs:kms:cn-hangzhou:119285303511****:policy/policy_test\\",\\n  \\"Name\\": \\"policy_test\\",\\n  \\"Description\\": \\"policy  description\\",\\n  \\"KmsInstance\\": \\"kst-hzz634e67d126u9p9****\\",\\n  \\"Permissions\\": \\"[\\\\\\"RbacPermission/Template/CryptoServiceKeyUser\\\\\\", \\\\\\"RbacPermission/Template/CryptoServiceSecretUser\\\\\\"]\\",\\n  \\"Resources\\": \\"[\\\\\\"secret/acs/ram/user/ram-secret\\\\\\", \\\\\\"secret/acs/ram/user/acr-master\\\\\\", \\\\\\"key/key-hzz63d9c8d3dfv8cv****\\\\\\"]\\",\\n  \\"AccessControlRules\\": \\"{\\\\\\"NetworkRules\\\\\\":[\\\\\\"kst-hzz62ee817bvyyr5x****.efkd\\\\\\",\\\\\\"kst-hzz62ee817bvyyr5x****.eyyp\\\\\\"]}\\"\\n}","errorExample":""},{"type":"xml","example":"<CreatePolicyResponse>\\n    <RequestId>3bf02f7a-015b-4f34-be0f-c4543fda2d33</RequestId>\\n    <Arn>acs:kms:cn-hangzhou:119285303511****:policy/policy_test</Arn>\\n    <Name>policy_test</Name>\\n    <Description>policy  description</Description>\\n    <KmsInstance>kst-hzz634e67d126u9p9****</KmsInstance>\\n    <Permissions>[\\"RbacPermission/Template/CryptoServiceKeyUser\\", \\"RbacPermission/Template/CryptoServiceSecretUser\\"]</Permissions>\\n    <Resources>[\\"secret/acs/ram/user/ram-secret\\", \\"secret/acs/ram/user/acr-master\\", \\"key/key-hzz63d9c8d3dfv8cv****\\"]</Resources>\\n    <AccessControlRules>{\\"NetworkRules\\":[\\"kst-hzz62ee817bvyyr5x****.efkd\\",\\"kst-hzz62ee817bvyyr5x****.eyyp\\"]}</AccessControlRules>\\n</CreatePolicyResponse>","errorExample":""}]',
            'title' => '创建访问策略',
            'summary' => '创建一个权限策略，设置允许应用访问的密钥和凭据。',
            'description' => '### 使用说明'."\n"
                .'自建应用进行密码运算操作、获取凭据值前，需要通过应用身份凭证（ClientKey）访问KMS实例。创建应用接入点AAP和身份凭证（ClientKey）的整体流程如下：'."\n"
                ."\n"
                .'1. 创建网络控制规则：设置允许访问KMS的私网IP或私网网段。更多信息，请参见[CreateNetworkRule](~~2539407~~)。'."\n"
                .'2. 创建权限策略：设置允许应用访问的密钥和凭据，并绑定网络控制规则。即本文介绍的内容。'."\n"
                .'3. 创建应用接入点：设置认证方式，并绑定权限策略。更多信息，请参见[CreateApplicationAccessPoint](~~2539467~~)。'."\n"
                .'4. 创建应用身份凭证（ClientKey）：设置ClientKey的加密口令、有效期，并绑定应用接入点。更多信息，请参见[CreateClientKey](~~2539509~~)。',
        ],
        'ListPolicies' => [
            'methods' => [
                'post',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时，设置当前页面的页码。默认值为1。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时，设置每页包含权限策略的数量。取值范围：1~100，默认值为20。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => 'b66ad557-9c00-4064-9c8d-b621c3263308',
                            ],
                            'PageNumber' => [
                                'description' => '分页查询时，当前页面的页码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'PageSize' => [
                                'description' => '分页查询时，每页包含权限策略的数量。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'TotalCount' => [
                                'description' => '权限策略的总数量。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'Policies' => [
                                'type' => 'object',
                                'properties' => [
                                    'Policy' => [
                                        'description' => '权限策略列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '权限策略列表。',
                                            'type' => 'object',
                                            'properties' => [
                                                'Name' => [
                                                    'description' => '权限策略名称。',
                                                    'type' => 'string',
                                                    'example' => 'policy_test',
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
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter is not valid.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidAccessKeyId.NotFound',
                        'errorMessage' => 'The Access Key ID provided does not exist in our records.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"b66ad557-9c00-4064-9c8d-b621c3263308\\",\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"TotalCount\\": 1,\\n  \\"Policies\\": {\\n    \\"Policy\\": [\\n      {\\n        \\"Name\\": \\"policy_test\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListPoliciesResponse>\\n    <RequestId>b66ad557-9c00-4064-9c8d-b621c3263308</RequestId>\\n    <PageNumber>1</PageNumber>\\n    <PageSize>10</PageSize>\\n    <TotalCount>1</TotalCount>\\n    <Policies>\\n        <Name>policy_test</Name>\\n    </Policies>\\n</ListPoliciesResponse>","errorExample":""}]',
            'title' => '获取访问策略列表',
            'summary' => '查询权限策略列表。',
        ],
        'DescribePolicy' => [
            'summary' => '查询一个权限策略的详情。',
            'methods' => [
                'post',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的权限策略名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'policy_test',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => 'f455324b-e229-4066-9f58-9c1cf3fe83a9',
                            ],
                            'Arn' => [
                                'description' => '权限策略的ARN。',
                                'type' => 'string',
                                'example' => 'acs:kms:cn-hangzhou:119285303511****:policy/policy_test',
                            ],
                            'Name' => [
                                'description' => '权限策略名称。',
                                'type' => 'string',
                                'example' => 'policy_test',
                            ],
                            'Description' => [
                                'description' => '描述信息。',
                                'type' => 'string',
                                'example' => 'policy  description',
                            ],
                            'KmsInstance' => [
                                'description' => '权限策略的作用域。',
                                'type' => 'string',
                                'example' => 'kst-hzz634e67d126u9p9****',
                            ],
                            'Permissions' => [
                                'description' => '权限策略支持的操作。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '权限策略支持的操作。',
                                    'type' => 'string',
                                    'example' => '["RbacPermission/Template/CryptoServiceKeyUser", "RbacPermission/Template/CryptoServiceSecretUser"]',
                                ],
                                'example' => '["RbacPermission/Template/CryptoServiceKeyUser", "RbacPermission/Template/CryptoServiceSecretUser"]',
                            ],
                            'Resources' => [
                                'description' => '允许访问的密钥和凭据。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '允许访问的密钥和凭据。',
                                    'type' => 'string',
                                    'example' => '["secret/acs/ram/user/ram-secret", "secret/acs/ram/user/acr-master", "key/key-hzz63d9c8d3dfv8cv****"]',
                                ],
                                'example' => '["secret/acs/ram/user/ram-secret", "secret/acs/ram/user/acr-master", "key/key-hzz63d9c8d3dfv8cv****"]',
                            ],
                            'AccessControlRules' => [
                                'description' => '绑定的网络控制规则。',
                                'type' => 'string',
                                'example' => '{"NetworkRules":["kst-hzz62ee817bvyyr5x****.efkd","kst-hzz62ee817bvyyr5x****.eyyp"]}',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"f455324b-e229-4066-9f58-9c1cf3fe83a9\\",\\n  \\"Arn\\": \\"acs:kms:cn-hangzhou:119285303511****:policy/policy_test\\",\\n  \\"Name\\": \\"policy_test\\",\\n  \\"Description\\": \\"policy  description\\",\\n  \\"KmsInstance\\": \\"kst-hzz634e67d126u9p9****\\",\\n  \\"Permissions\\": [\\n    \\"[\\\\\\"RbacPermission/Template/CryptoServiceKeyUser\\\\\\", \\\\\\"RbacPermission/Template/CryptoServiceSecretUser\\\\\\"]\\"\\n  ],\\n  \\"Resources\\": [\\n    \\"[\\\\\\"secret/acs/ram/user/ram-secret\\\\\\", \\\\\\"secret/acs/ram/user/acr-master\\\\\\", \\\\\\"key/key-hzz63d9c8d3dfv8cv****\\\\\\"]\\"\\n  ],\\n  \\"AccessControlRules\\": \\"{\\\\\\"NetworkRules\\\\\\":[\\\\\\"kst-hzz62ee817bvyyr5x****.efkd\\\\\\",\\\\\\"kst-hzz62ee817bvyyr5x****.eyyp\\\\\\"]}\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribePolicyResponse>\\n    <RequestId>f455324b-e229-4066-9f58-9c1cf3fe83a9</RequestId>\\n    <Arn>acs:kms:cn-hangzhou:119285303511****:policy/policy_test</Arn>\\n    <Name>policy_test</Name>\\n    <Description>policy  description</Description>\\n    <KmsInstance>kst-hzz634e67d126u9p9****</KmsInstance>\\n    <Permissions>[\\"RbacPermission/Template/CryptoServiceKeyUser\\", \\"RbacPermission/Template/CryptoServiceSecretUser\\"]</Permissions>\\n    <Resources>[\\"secret/acs/ram/user/ram-secret\\", \\"secret/acs/ram/user/acr-master\\", \\"key/key-hzz63d9c8d3dfv8cv****\\"]</Resources>\\n    <AccessControlRules>{\\"NetworkRules\\":[\\"kst-hzz62ee817bvyyr5x****.efkd\\",\\"kst-hzz62ee817bvyyr5x****.eyyp\\"]}</AccessControlRules>\\n</DescribePolicyResponse>","errorExample":""}]',
            'title' => '获取访问策略',
        ],
        'UpdatePolicy' => [
            'summary' => '更新一个权限策略。',
            'methods' => [
                'post',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要更新的权限策略名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'policy_test',
                    ],
                ],
                [
                    'name' => 'Permissions',
                    'in' => 'query',
                    'schema' => [
                        'description' => '更改后的权限策略支持的操作。取值：'."\n"
                            ."\n"
                            .'- RbacPermission/Template/CryptoServiceKeyUser：可以对KMS实例进行密码运算操作。'."\n"
                            ."\n"
                            .'- RbacPermission/Template/CryptoServiceSecretUser：可以对KMS实例进行凭据相关操作。'."\n"
                            ."\n"
                            .'支持同时选择这两种操作。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '["RbacPermission/Template/CryptoServiceKeyUser", "RbacPermission/Template/CryptoServiceSecretUser"]',
                    ],
                ],
                [
                    'name' => 'Resources',
                    'in' => 'query',
                    'schema' => [
                        'description' => '更改后的允许访问的密钥和凭据。'."\n"
                            ."\n"
                            .'- 密钥：格式为`key/${KeyId}`，如果允许访问当前KMS实例的所有密钥请输入key/*。'."\n"
                            ."\n"
                            .'- 凭据：格式为`secret/${SecretName}`，如果允许访问当前KMS实例的所有凭据请输入secret/*。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '["secret/acs/ram/user/ram-secret", "secret/acs/ram/user/acr-master", "key/key-hzz63d9c8d3dfv8cv****"]',
                    ],
                ],
                [
                    'name' => 'AccessControlRules',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网络控制规则。'."\n"
                            ."\n"
                            .'>查询已创建的网络控制规则，请参见[ListNetworkRules](~~2539433~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"NetworkRules":["kst-hzz62ee817bvyyr5x****.efkd","kst-hzz62ee817bvyyr5x****.eyyp"]}',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '描述信息。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'policy  description',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => 'f455324b-e229-4066-9f58-9c1cf3fe83a8',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter is not valid.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidAccessKeyId.NotFound',
                        'errorMessage' => 'The Access Key ID provided does not exist in our records.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"f455324b-e229-4066-9f58-9c1cf3fe83a8\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdatePolicyResponse>\\n    <RequestId>f455324b-e229-4066-9f58-9c1cf3fe83a8</RequestId>\\n</UpdatePolicyResponse>","errorExample":""}]',
            'title' => '更新访问策略',
            'description' => '- 支持更新权限策略的RBAC权限、允许访问资源、网络控制规则以及描述信息，不支持更新权限策略名称、作用域。'."\n"
                ."\n"
                .'- 更新权限策略会影响所有已绑定该权限策略的应用接入点AAP，请谨慎操作。'."\n",
        ],
        'DeletePolicy' => [
            'methods' => [
                'post',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要删除的权限策略名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'policy_test',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '00a26a33-d992-42f3-9012-5fd12764430f',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter is not valid.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidAccessKeyId.NotFound',
                        'errorMessage' => 'The Access Key ID provided does not exist in our records.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"00a26a33-d992-42f3-9012-5fd12764430f\\"\\n}","errorExample":""},{"type":"xml","example":"<DeletePolicyResponse>\\n    <RequestId>00a26a33-d992-42f3-9012-5fd12764430f</RequestId>\\n</DeletePolicyResponse>","errorExample":""}]',
            'title' => '删除访问策略',
            'summary' => '删除一条权限策略。',
            'description' => '删除前请确保该权限策略没有被任何应用接入点绑定，否则会导致相关应用无法正常访问KMS。',
        ],
        'CreateApplicationAccessPoint' => [
            'summary' => '创建一个应用接入点。',
            'methods' => [
                'post',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用接入点名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'aap_test',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '描述信息。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'aap description',
                    ],
                ],
                [
                    'name' => 'AuthenticationMethod',
                    'in' => 'query',
                    'schema' => [
                        'title' => '新版认证字段'."\n",
                        'description' => '认证方式。目前仅支持ClientKey。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ClientKey',
                    ],
                ],
                [
                    'name' => 'Policies',
                    'in' => 'query',
                    'schema' => [
                        'description' => '绑定的权限策略。'."\n"
                            ."\n"
                            .'>每个应用接入点最多允许绑定3个权限策略。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '["kst-hzz62ee817bvyyr5x****.efkd","kst-hzz62ee817bvyyr5x****.eyyp"]',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => 'bcfefe15-46f0-44a3-bd96-3d422474b71a',
                            ],
                            'Description' => [
                                'description' => '描述信息。',
                                'type' => 'string',
                                'example' => 'aap description',
                            ],
                            'Policies' => [
                                'description' => '绑定的权限策略。',
                                'type' => 'string',
                                'example' => '["kst-hzz62ee817bvyyr5x****.efkd","kst-hzz62ee817bvyyr5x****.eyyp"]',
                            ],
                            'Name' => [
                                'description' => '应用接入点名称。',
                                'type' => 'string',
                                'example' => 'aap_test',
                            ],
                            'Arn' => [
                                'description' => '应用接入点的ARN。',
                                'type' => 'string',
                                'example' => 'acs:kms:cn-hangzhou:119285303511****:applicationaccesspoint/aap_test',
                            ],
                            'AuthenticationMethod' => [
                                'description' => '认证方式。',
                                'type' => 'string',
                                'example' => 'ClientKey',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                409 => [
                    [
                        'errorCode' => 'Rejected.ResourceExist',
                        'errorMessage' => 'The request was rejected because the resource already exists.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"bcfefe15-46f0-44a3-bd96-3d422474b71a\\",\\n  \\"Description\\": \\"aap description\\",\\n  \\"Policies\\": \\"[\\\\\\"kst-hzz62ee817bvyyr5x****.efkd\\\\\\",\\\\\\"kst-hzz62ee817bvyyr5x****.eyyp\\\\\\"]\\",\\n  \\"Name\\": \\"aap_test\\",\\n  \\"Arn\\": \\"acs:kms:cn-hangzhou:119285303511****:applicationaccesspoint/aap_test\\",\\n  \\"AuthenticationMethod\\": \\"ClientKey\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateApplicationAccessPointResponse>\\n    <RequestId>bcfefe15-46f0-44a3-bd96-3d422474b71a</RequestId>\\n    <Description>aap description</Description>\\n    <Policies>[\\"kst-hzz62ee817bvyyr5x****.efkd\\",\\"kst-hzz62ee817bvyyr5x****.eyyp\\"]</Policies>\\n    <Name>aap_test</Name>\\n    <Arn>acs:kms:cn-hangzhou:119285303511****:applicationaccesspoint/aap_test</Arn>\\n    <AuthenticationMethod>ClientKey</AuthenticationMethod>\\n</CreateApplicationAccessPointResponse>","errorExample":""}]',
            'title' => '创建应用接入点',
            'description' => '### 使用说明'."\n"
                .'自建应用进行密码运算操作、获取凭据值前，需要通过应用身份凭证（ClientKey）访问KMS实例。创建应用接入点AAP和身份凭证（ClientKey）的整体流程如下：'."\n"
                ."\n"
                .'1. 创建网络控制规则：设置允许访问KMS的私网IP或私网网段。更多信息，请参见[CreateNetworkRule](~~2539407~~)。'."\n"
                .'2. 创建权限策略：设置允许应用访问的密钥和凭据，并绑定网络控制规则。更多信息，请参见[CreatePolicy](~~2539454~~)。'."\n"
                .'3. 创建应用接入点：设置认证方式，并绑定权限策略。即本文介绍的内容。'."\n"
                .'4. 创建应用身份凭证（ClientKey）：设置ClientKey的加密口令、有效期，并绑定应用接入点。更多信息，请参见[CreateClientKey](~~2539509~~)。',
        ],
        'ListApplicationAccessPoints' => [
            'methods' => [
                'post',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时，设置当前页面的页码。默认值为1。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时，设置每页包含应用接入点的数量。取值范围：1~100，默认值为20。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => 'bcfefe15-46f0-44a3-bd96-3d422474b71a',
                            ],
                            'PageNumber' => [
                                'description' => '分页查询时，当前页面的页码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'PageSize' => [
                                'description' => '分页查询时，每页包含应用接入点的数量。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'TotalCount' => [
                                'description' => '应用接入点的总数量。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'ApplicationAccessPoints' => [
                                'type' => 'object',
                                'properties' => [
                                    'ApplicationAccessPoint' => [
                                        'description' => '应用接入点列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '应用接入点列表。',
                                            'type' => 'object',
                                            'properties' => [
                                                'Name' => [
                                                    'description' => '应用接入点名称。',
                                                    'type' => 'string',
                                                    'example' => 'aap_test',
                                                ],
                                                'AuthenticationMethod' => [
                                                    'description' => '认证方式。',
                                                    'type' => 'string',
                                                    'example' => 'ClientKey',
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
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter is not valid.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidAccessKeyId.NotFound',
                        'errorMessage' => 'The Access Key ID provided does not exist in our records.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"bcfefe15-46f0-44a3-bd96-3d422474b71a\\",\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"TotalCount\\": 1,\\n  \\"ApplicationAccessPoints\\": {\\n    \\"ApplicationAccessPoint\\": [\\n      {\\n        \\"Name\\": \\"aap_test\\",\\n        \\"AuthenticationMethod\\": \\"ClientKey\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListApplicationAccessPointsResponse>\\n    <RequestId>bcfefe15-46f0-44a3-bd96-3d422474b71a</RequestId>\\n    <PageNumber>1</PageNumber>\\n    <PageSize>10</PageSize>\\n    <TotalCount>1</TotalCount>\\n    <ApplicationAccessPoints>\\n        <Name>aap_test</Name>\\n        <AuthenticationMethod>ClientKey</AuthenticationMethod>\\n    </ApplicationAccessPoints>\\n</ListApplicationAccessPointsResponse>","errorExample":""}]',
            'title' => '获取应用接入点列表',
            'summary' => '查询应用接入点列表。',
        ],
        'DescribeApplicationAccessPoint' => [
            'methods' => [
                'post',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的应用接入点名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'aap_test',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => 'bcfefe15-46f0-44a3-bd96-3d422474b71a',
                            ],
                            'Arn' => [
                                'description' => '应用接入点的ARN。',
                                'type' => 'string',
                                'example' => 'acs:kms:cn-hangzhou:119285303511****:applicationaccesspoint/aap_test',
                            ],
                            'Name' => [
                                'description' => '应用接入点名称。',
                                'type' => 'string',
                                'example' => 'aap_test',
                            ],
                            'Description' => [
                                'description' => '描述信息。',
                                'type' => 'string',
                                'example' => 'aap description',
                            ],
                            'AuthenticationMethod' => [
                                'description' => '认证方式。',
                                'type' => 'string',
                                'example' => 'ClientKey',
                            ],
                            'Policies' => [
                                'description' => '绑定的权限策略。',
                                'type' => 'string',
                                'example' => '["kst-hzz62ee817bvyyr5x****.efkd","kst-hzz62ee817bvyyr5x****.eyyp"]',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter is not valid.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidAccessKeyId.NotFound',
                        'errorMessage' => 'The Access Key ID provided does not exist in our records.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"bcfefe15-46f0-44a3-bd96-3d422474b71a\\",\\n  \\"Arn\\": \\"acs:kms:cn-hangzhou:119285303511****:applicationaccesspoint/aap_test\\",\\n  \\"Name\\": \\"aap_test\\",\\n  \\"Description\\": \\"aap description\\",\\n  \\"AuthenticationMethod\\": \\"ClientKey\\",\\n  \\"Policies\\": \\"[\\\\\\"kst-hzz62ee817bvyyr5x****.efkd\\\\\\",\\\\\\"kst-hzz62ee817bvyyr5x****.eyyp\\\\\\"]\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeApplicationAccessPointResponse>\\n    <RequestId>bcfefe15-46f0-44a3-bd96-3d422474b71a</RequestId>\\n    <Arn>acs:kms:cn-hangzhou:119285303511****:applicationaccesspoint/aap_test</Arn>\\n    <Name>aap_test</Name>\\n    <Description>aap description</Description>\\n    <AuthenticationMethod>ClientKey</AuthenticationMethod>\\n    <Policies>[\\"kst-hzz62ee817bvyyr5x****.efkd\\",\\"kst-hzz62ee817bvyyr5x****.eyyp\\"]</Policies>\\n</DescribeApplicationAccessPointResponse>","errorExample":""}]',
            'title' => '获取应用接入点',
            'summary' => '查询一个应用接入点的详情。',
        ],
        'UpdateApplicationAccessPoint' => [
            'methods' => [
                'post',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '待更新的应用接入点名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'aap_test',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '描述信息。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'aap description',
                    ],
                ],
                [
                    'name' => 'Policies',
                    'in' => 'query',
                    'schema' => [
                        'description' => '更新绑定的权限策略。'."\n"
                            .'>每个应用接入点最多允许绑定3个权限策略。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '["kst-hzz62ee817bvyyr5x****.efkd","kst-hzz62ee817bvyyr5x****.eyyp"]',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => 'bcfefe15-46f0-44a3-bd96-3d422474b71a',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter is invalid.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"bcfefe15-46f0-44a3-bd96-3d422474b71a\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateApplicationAccessPointResponse>\\n    <RequestId>bcfefe15-46f0-44a3-bd96-3d422474b71a</RequestId>\\n</UpdateApplicationAccessPointResponse>","errorExample":""}]',
            'title' => '更新应用接入点',
            'summary' => '更新一个应用接入点信息。',
            'description' => '更新应用接入点信息操作成功后即刻生效，请谨慎操作。仅支持更新描述信息及绑定的权限策略，不支持修改应用接入点名称。',
        ],
        'DeleteApplicationAccessPoint' => [
            'methods' => [
                'post',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要删除的应用接入点名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'aap_test',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => 'bcfefe15-46f0-44a3-bd96-3d422474b71a',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter is not valid.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidAccessKeyId.NotFound',
                        'errorMessage' => 'The Access Key ID provided does not exist in our records.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"bcfefe15-46f0-44a3-bd96-3d422474b71a\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteApplicationAccessPointResponse>\\n    <RequestId>bcfefe15-46f0-44a3-bd96-3d422474b71a</RequestId>\\n</DeleteApplicationAccessPointResponse>","errorExample":""}]',
            'title' => '删除应用接入点',
            'summary' => '删除一个应用接入点。',
            'description' => '删除前请确保该应用接入点已不再使用，否则会导致相关应用无法正常访问KMS，请谨慎操作。',
        ],
        'CreateClientKey' => [
            'methods' => [
                'post',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'AapName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '绑定的应用接入点名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'aap_test',
                    ],
                ],
                [
                    'name' => 'Password',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Client Key加密口令。'."\n"
                            ."\n"
                            .'8~64位，支持数字、英文大小写、特殊字符`~!@#$%^&*?_-`，且必须包含其中的两种。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'bcfefe15-46f0****',
                    ],
                ],
                [
                    'name' => 'NotAfter',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'ClientKey的有效期结束时间。'."\n"
                            ."\n"
                            .'按照ISO8601标准表示，并使用UTC时间。格式为：YYYY-MM-DDThh:mm:ssZ。'."\n"
                            ."\n"
                            .' >- 如果您未输入NotAfter，取值默认为ClientKey的创建时间加上5年。'."\n"
                            .'- 如果您输入了NotAfter，必须输入NotBefore。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => '2028-08-31T17:14:33Z',
                    ],
                ],
                [
                    'name' => 'NotBefore',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'ClientKey的有效期起始时间。'."\n"
                            ."\n"
                            .'按照ISO8601标准表示，并使用UTC时间。格式为：YYYY-MM-DDThh:mm:ssZ。'."\n"
                            ."\n"
                            .' >- 如果您未输入NotBefore，取值默认为ClientKey的创建时间。'."\n"
                            .'- 如果您输入了NotBefore，必须输入NotAfter。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2023-08-31T17:14:33Z',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '2312e45f-b2fa-4c34-ad94-3eca50932916',
                            ],
                            'ClientKeyId' => [
                                'description' => 'ClientKey的ID。',
                                'type' => 'string',
                                'example' => 'KAAP.66abf237-63f6-4625-b8cf-47e1086e****',
                            ],
                            'KeyAlgorithm' => [
                                'description' => '加密ClientKey私钥内容的算法。目前仅支持RSA_2048。',
                                'type' => 'string',
                                'example' => 'RSA_2048',
                            ],
                            'PrivateKeyData' => [
                                'description' => 'ClientKey的私钥内容。',
                                'type' => 'string',
                                'example' => 'MIIJqwIBAzCCCXcGCSqGSIb3DQEHAaCCCWgEgglkMIIJYDCCBBcGCSqGSIb3DQEHBqCCBAgwgg******',
                            ],
                            'NotBefore' => [
                                'description' => 'ClientKey的有效期起始时间。',
                                'type' => 'string',
                                'example' => '2023-08-31T17:14:33Z',
                            ],
                            'NotAfter' => [
                                'description' => 'ClientKey的有效期结束时间。',
                                'type' => 'string',
                                'example' => '2028-08-31T17:14:33Z',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"2312e45f-b2fa-4c34-ad94-3eca50932916\\",\\n  \\"ClientKeyId\\": \\"KAAP.66abf237-63f6-4625-b8cf-47e1086e****\\",\\n  \\"KeyAlgorithm\\": \\"RSA_2048\\",\\n  \\"PrivateKeyData\\": \\"MIIJqwIBAzCCCXcGCSqGSIb3DQEHAaCCCWgEgglkMIIJYDCCBBcGCSqGSIb3DQEHBqCCBAgwgg******\\",\\n  \\"NotBefore\\": \\"2023-08-31T17:14:33Z\\",\\n  \\"NotAfter\\": \\"2028-08-31T17:14:33Z\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateClientKeyResponse>\\n    <RequestId>2312e45f-b2fa-4c34-ad94-3eca50932916</RequestId>\\n    <ClientKeyId>KAAP.66abf237-63f6-4625-b8cf-47e1086e****</ClientKeyId>\\n    <KeyAlgorithm>RSA_2048</KeyAlgorithm>\\n    <PrivateKeyData>MIIJqwIBAzCCCXcGCSqGSIb3DQEHAaCCCWgEgglkMIIJYDCCBBcGCSqGSIb3DQEHBqCCBAgwgg******</PrivateKeyData>\\n    <NotBefore>2023-08-31T17:14:33Z</NotBefore>\\n    <NotAfter>2028-08-31T17:14:33Z</NotAfter>\\n</CreateClientKeyResponse>","errorExample":""}]',
            'title' => '创建应用身份凭证',
            'summary' => '创建一个应用身份凭证（ClientKey）。',
            'description' => '### 使用说明'."\n"
                .'自建应用进行密码运算操作、获取凭据值前，需要通过应用身份凭证（ClientKey）访问KMS实例。创建应用接入点AAP和身份凭证（ClientKey）的整体流程如下：'."\n"
                ."\n"
                .'1. 创建网络控制规则：设置允许访问KMS的私网IP或私网网段。更多信息，请参见[CreateNetworkRule](~~2539407~~)。'."\n"
                .'2. 创建权限策略：设置允许应用访问的密钥和凭据，并绑定网络控制规则。更多信息，请参见[CreatePolicy](~~2539454~~)。'."\n"
                .'3. 创建应用接入点：设置认证方式，并绑定权限策略。更多信息，请参见[CreateApplicationAccessPoint](~~2539467~~)。'."\n"
                .'4. 创建应用身份凭证（ClientKey）：设置ClientKey的加密口令、有效期，并绑定应用接入点。即本文介绍的内容。'."\n"
                .'### 注意事项'."\n"
                .'ClientKey有使用期限，到期后KMS将不允许集成该Client Key的应用访问KMS实例，请您在Client Key到期前完成更换。建议您在更换完成后，在KMS删除过期的Client Key。',
        ],
        'ListClientKeys' => [
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'AapName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用接入点名称。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => 'aap_test',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '2312e45f-b2fa-4c34-ad94-3eca50932916',
                            ],
                            'ClientKeys' => [
                                'description' => 'ClientKey列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => 'ClientKey列表。',
                                    'type' => 'object',
                                    'properties' => [
                                        'ClientKeyId' => [
                                            'description' => 'ClientKey的ID。',
                                            'type' => 'string',
                                            'example' => 'KAAP.66abf237-63f6-4625-b8cf-47e1086e****',
                                        ],
                                        'CreateTime' => [
                                            'description' => 'ClientKey的创建时间。',
                                            'type' => 'string',
                                            'example' => '2023-08-31T09:14:38Z',
                                        ],
                                        'PublicKeyData' => [
                                            'description' => 'ClientKey的公钥内容。',
                                            'type' => 'string',
                                            'example' => '-----BEGIN CERTIFICATE-----\\nMIIDcjCCAlqgAwIBAgIQT/sAVRxwYp54mrw****-----END CERTIFICATE-----',
                                        ],
                                        'KeyAlgorithm' => [
                                            'description' => 'ClientKey的私钥算法。',
                                            'type' => 'string',
                                            'example' => 'RSA_2048',
                                        ],
                                        'NotBefore' => [
                                            'description' => 'ClientKey的有效期起始时间。',
                                            'type' => 'string',
                                            'example' => '2023-08-31T17:14:33Z',
                                        ],
                                        'NotAfter' => [
                                            'description' => 'ClientKey的有效期结束时间。',
                                            'type' => 'string',
                                            'example' => '2028-08-31T17:14:33Z',
                                        ],
                                        'KeyOrigin' => [
                                            'description' => 'ClientKey由谁生成。'."\n"
                                                ."\n"
                                                .'目前仅支持由KMS生成，取值为KMS_PROVIDED。',
                                            'type' => 'string',
                                            'example' => 'KMS_PROVIDED',
                                        ],
                                        'AapName' => [
                                            'description' => '绑定的应用接入点名称。',
                                            'type' => 'string',
                                            'example' => 'aap_test',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"2312e45f-b2fa-4c34-ad94-3eca50932916\\",\\n  \\"ClientKeys\\": [\\n    {\\n      \\"ClientKeyId\\": \\"KAAP.66abf237-63f6-4625-b8cf-47e1086e****\\",\\n      \\"CreateTime\\": \\"2023-08-31T09:14:38Z\\",\\n      \\"PublicKeyData\\": \\"-----BEGIN CERTIFICATE-----\\\\\\\\nMIIDcjCCAlqgAwIBAgIQT/sAVRxwYp54mrw****-----END CERTIFICATE-----\\",\\n      \\"KeyAlgorithm\\": \\"RSA_2048\\",\\n      \\"NotBefore\\": \\"2023-08-31T17:14:33Z\\",\\n      \\"NotAfter\\": \\"2028-08-31T17:14:33Z\\",\\n      \\"KeyOrigin\\": \\"KMS_PROVIDED\\",\\n      \\"AapName\\": \\"aap_test\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListClientKeysResponse>\\n    <RequestId>2312e45f-b2fa-4c34-ad94-3eca50932916</RequestId>\\n    <ClientKeys>\\n        <KeyOrigin>KMS_PROVIDED</KeyOrigin>\\n        <PublicKeyData>-----BEGIN CERTIFICATE-----\\\\nMIIDcjCCAlqgAwIBAgIQT/sAVRxwYp54mrw****-----END CERTIFICATE-----</PublicKeyData>\\n        <CreateTime>2023-08-31T09:14:38Z</CreateTime>\\n        <KeyAlgorithm>RSA_2048</KeyAlgorithm>\\n        <NotBefore>2023-08-31T17:14:33Z</NotBefore>\\n        <NotAfter>2028-08-31T17:14:33Z</NotAfter>\\n        <AapName>aap_test</AapName>\\n        <ClientKeyId>KAAP.66abf237-63f6-4625-b8cf-47e1086e****</ClientKeyId>\\n    </ClientKeys>\\n</ListClientKeysResponse>","errorExample":""}]',
            'title' => '获取应用身份凭证列表',
            'summary' => '查询应用身份凭证（ClientKey）列表。',
        ],
        'GetClientKey' => [
            'summary' => '获取一个应用身份凭证（ClientKey）信息。',
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
            'systemTags' => [
                'operationType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'ClientKeyId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '新版keyId',
                        'description' => 'ClientKey的ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'KAAP.66abf237-63f6-4625-b8cf-47e1086e****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'ClientKey详情。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '63d849a6-045b-4a57-ad9f-c5f756cea9e9',
                            ],
                            'ClientKeyId' => [
                                'description' => 'ClientKey的ID。',
                                'type' => 'string',
                                'example' => 'KAAP.66abf237-63f6-4625-b8cf-47e1086e****',
                            ],
                            'CreateTime' => [
                                'description' => 'ClientKey的创建时间。',
                                'type' => 'string',
                                'example' => '2023-08-31T09:14:38Z',
                            ],
                            'KeyAlgorithm' => [
                                'description' => 'ClientKey的私钥算法。',
                                'type' => 'string',
                                'example' => 'RSA_2048',
                            ],
                            'KeyOrigin' => [
                                'description' => 'ClientKey由谁生成。'."\n"
                                    ."\n"
                                    .'目前仅支持由KMS生成，取值为KMS_PROVIDED。',
                                'type' => 'string',
                                'example' => 'KMS_PROVIDED',
                            ],
                            'PublicKeyData' => [
                                'description' => 'ClientKey的公钥内容。',
                                'type' => 'string',
                                'example' => '-----BEGIN CERTIFICATE-----\\nMIIDcjCCAlqgAwIBAgIQT/sAVRxwYp54mrw****-----END CERTIFICATE-----',
                            ],
                            'NotAfter' => [
                                'description' => 'ClientKey的有效期结束时间。',
                                'type' => 'string',
                                'example' => '2028-08-31T17:14:33Z',
                            ],
                            'NotBefore' => [
                                'description' => 'ClientKey的有效期起始时间。',
                                'type' => 'string',
                                'example' => '2023-08-31T17:14:33Z',
                            ],
                            'AapName' => [
                                'description' => '应用接入点名称。',
                                'type' => 'string',
                                'example' => 'aap_test',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"63d849a6-045b-4a57-ad9f-c5f756cea9e9\\",\\n  \\"ClientKeyId\\": \\"KAAP.66abf237-63f6-4625-b8cf-47e1086e****\\",\\n  \\"CreateTime\\": \\"2023-08-31T09:14:38Z\\",\\n  \\"KeyAlgorithm\\": \\"RSA_2048\\",\\n  \\"KeyOrigin\\": \\"KMS_PROVIDED\\",\\n  \\"PublicKeyData\\": \\"-----BEGIN CERTIFICATE-----\\\\\\\\nMIIDcjCCAlqgAwIBAgIQT/sAVRxwYp54mrw****-----END CERTIFICATE-----\\",\\n  \\"NotAfter\\": \\"2028-08-31T17:14:33Z\\",\\n  \\"NotBefore\\": \\"2023-08-31T17:14:33Z\\",\\n  \\"AapName\\": \\"aap_test\\"\\n}","errorExample":""},{"type":"xml","example":"<GetClientKeyResponse>\\n    <RequestId>63d849a6-045b-4a57-ad9f-c5f756cea9e9</RequestId>\\n    <ClientKeyId>KAAP.66abf237-63f6-4625-b8cf-47e1086e****</ClientKeyId>\\n    <CreateTime>2023-08-31T09:14:38Z</CreateTime>\\n    <KeyAlgorithm>RSA_2048</KeyAlgorithm>\\n    <KeyOrigin>KMS_PROVIDED</KeyOrigin>\\n    <PublicKeyData>-----BEGIN CERTIFICATE-----\\\\nMIIDcjCCAlqgAwIBAgIQT/sAVRxwYp54mrw****-----END CERTIFICATE-----</PublicKeyData>\\n    <NotAfter>2028-08-31T17:14:33Z</NotAfter>\\n    <NotBefore>2023-08-31T17:14:33Z</NotBefore>\\n    <AapName>aap_test</AapName>\\n</GetClientKeyResponse>","errorExample":""}]',
            'title' => '获取应用身份凭证',
        ],
        'DeleteClientKey' => [
            'methods' => [
                'post',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'ClientKeyId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'ClientKey的ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'KAAP.66abf237-63f6-4625-b8cf-47e1086e****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '2312e45f-b2fa-4c34-ad94-3eca50932916',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter is not valid.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidAccessKeyId.NotFound',
                        'errorMessage' => 'The Access Key ID provided does not exist in our records.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"2312e45f-b2fa-4c34-ad94-3eca50932916\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteClientKeyResponse>\\n    <RequestId>2312e45f-b2fa-4c34-ad94-3eca50932916</RequestId>\\n</DeleteClientKeyResponse>","errorExample":""}]',
            'title' => '删除应用身份凭证',
            'summary' => '删除一个应用身份凭证（ClientKey）。',
            'description' => '删除前请确保您不再使用该ClientKey，否则会导致相关应用无法正常访问KMS，请谨慎操作。',
        ],
        'GetKeyPolicy' => [
            'summary' => '查询指定密钥的密钥策略。',
            'methods' => [
                'post',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
                'abilityTreeCode' => '206082',
                'abilityTreeNodes' => [
                    'FEATUREkmsZ5VV9Q',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'KeyId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '',
                        'description' => '密钥ID或密钥资源名称（ARN）。'."\n"
                            .'>访问其他阿里云账号下的密钥时，必须输入密钥ARN。密钥ARN的格式为`acs:kms:${region}:${account}:key/${keyid}`。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'key-hzz630494463ejqjx****',
                    ],
                ],
                [
                    'name' => 'PolicyName',
                    'in' => 'query',
                    'schema' => [
                        'title' => '策略名称',
                        'description' => '密钥策略名称。仅支持固定值default。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'default',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '',
                        'description' => '',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '',
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '381D5D33-BB8F-395F-8EE4-AE3B84B523C8',
                            ],
                            'Policy' => [
                                'description' => '密钥策略。',
                                'type' => 'string',
                                'example' => '{"Statement": [{"Action": ["kms:*"],"Effect": "Allow","Principal": {"RAM": ["acs:ram::190325303126****:*","acs:ram::119285303511****:*"]},"Resource": ["*"],"Sid": "kms default key policy"}],"Version": "1" }',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter is not valid.',
                    ],
                    [
                        'errorCode' => 'MissingParameter',
                        'errorMessage' => 'The parameter needed but no provided.',
                    ],
                    [
                        'errorCode' => 'Forbidden.NoPermission',
                        'errorMessage' => 'This operation is forbidden by permission system.',
                    ],
                    [
                        'errorCode' => 'Forbidden.KeyPolicyUnSupported',
                        'errorMessage' => 'The specified key does not support key policy.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'Forbidden.KeyNotFound',
                        'errorMessage' => 'The specified Key is not found.',
                    ],
                    [
                        'errorCode' => 'Forbidden.ResourceNotFound',
                        'errorMessage' => 'Policy not found.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"381D5D33-BB8F-395F-8EE4-AE3B84B523C8\\",\\n  \\"Policy\\": \\"{\\\\\\"Statement\\\\\\": [{\\\\\\"Action\\\\\\": [\\\\\\"kms:*\\\\\\"],\\\\\\"Effect\\\\\\": \\\\\\"Allow\\\\\\",\\\\\\"Principal\\\\\\": {\\\\\\"RAM\\\\\\": [\\\\\\"acs:ram::190325303126****:*\\\\\\",\\\\\\"acs:ram::119285303511****:*\\\\\\"]},\\\\\\"Resource\\\\\\": [\\\\\\"*\\\\\\"],\\\\\\"Sid\\\\\\": \\\\\\"kms default key policy\\\\\\"}],\\\\\\"Version\\\\\\": \\\\\\"1\\\\\\" }\\"\\n}","errorExample":""},{"type":"xml","example":"<GetKeyPolicyResponse>\\n    <RequestId>381D5D33-BB8F-395F-8EE4-AE3B84B523C8</RequestId>\\n    <Policy>{\\"Statement\\": [{\\"Action\\": [\\"kms:*\\"],\\"Effect\\": \\"Allow\\",\\"Principal\\": {\\"RAM\\": [\\"acs:ram::190325303126****:*\\",\\"acs:ram::119285303511****:*\\"]},\\"Resource\\": [\\"*\\"],\\"Sid\\": \\"kms default key policy\\"}],\\"Version\\": \\"1\\" }</Policy>\\n</GetKeyPolicyResponse>","errorExample":""}]',
            'title' => 'GetKeyPolicy',
            'description' => '>由于密钥策略名称仅支持设置为default，因此查询时密钥策略名称（PolicyName）仅支持输入default，否则会提示`Not Found`。',
        ],
        'GetSecretPolicy' => [
            'summary' => '查询指定凭据的凭据策略。',
            'methods' => [
                'post',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
                'abilityTreeCode' => '206109',
                'abilityTreeNodes' => [
                    'FEATUREkms52EQP9',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'SecretName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '凭据名称或凭据资源名称（ARN）。'."\n"
                            .'>访问其他阿里云账号下的凭据时，必须输入凭据ARN。凭据ARN的格式为`acs:kms:${region}:${account}:secret/${secret-name}`。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'secret_test',
                    ],
                ],
                [
                    'name' => 'PolicyName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '凭据策略名称。仅支持固定值default。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'default',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '',
                        'description' => '',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '',
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '381D5D33-BB8F-395F-8EE4-AE3BB4B523C8',
                            ],
                            'Policy' => [
                                'description' => '凭据策略。',
                                'type' => 'string',
                                'example' => '{"Version":"1","Statement": [{"Sid":"kms default secret policy","Effect":"Allow","Principal":{"RAM": ["acs:ram::119285303511****:*"]},"Action":["kms:*"],"Resource": ["*"] }] }',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter is not valid.',
                    ],
                    [
                        'errorCode' => 'MissingParameter',
                        'errorMessage' => 'The parameter needed but no provided.',
                    ],
                    [
                        'errorCode' => 'Forbidden.NoPermission',
                        'errorMessage' => 'This operation is forbidden by permission system.',
                    ],
                    [
                        'errorCode' => 'Forbidden.KeyPolicyUnSupported',
                        'errorMessage' => 'The specified key does not support key policy.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden.DKMSInstanceStateInvalid',
                        'errorMessage' => 'The DKMS instance state is invalid.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'Forbidden.ResourceNotFound',
                        'errorMessage' => 'Resource not found.',
                    ],
                    [
                        'errorCode' => 'Forbidden.KeyNotFound',
                        'errorMessage' => 'The specified Key is not found.',
                    ],
                ],
                503 => [
                    [
                        'errorCode' => 'SerivceUnvailableTemporary',
                        'errorMessage' => 'Service Unvailable Temporary',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"381D5D33-BB8F-395F-8EE4-AE3BB4B523C8\\",\\n  \\"Policy\\": \\"{\\\\\\"Version\\\\\\":\\\\\\"1\\\\\\",\\\\\\"Statement\\\\\\": [{\\\\\\"Sid\\\\\\":\\\\\\"kms default secret policy\\\\\\",\\\\\\"Effect\\\\\\":\\\\\\"Allow\\\\\\",\\\\\\"Principal\\\\\\":{\\\\\\"RAM\\\\\\": [\\\\\\"acs:ram::119285303511****:*\\\\\\"]},\\\\\\"Action\\\\\\":[\\\\\\"kms:*\\\\\\"],\\\\\\"Resource\\\\\\": [\\\\\\"*\\\\\\"] }] }\\"\\n}","errorExample":""},{"type":"xml","example":"<GetSecretPolicyResponse>\\n    <RequestId>381D5D33-BB8F-395F-8EE4-AE3BB4B523C8</RequestId>\\n    <Policy>{\\"Version\\":\\"1\\",\\"Statement\\": [{\\"Sid\\":\\"kms default secret policy\\",\\"Effect\\":\\"Allow\\",\\"Principal\\":{\\"RAM\\": [\\"acs:ram::119285303511****:*\\"]},\\"Action\\":[\\"kms:*\\"],\\"Resource\\": [\\"*\\"] }] }</Policy>\\n</GetSecretPolicyResponse>","errorExample":""}]',
            'title' => 'GetSecretPolicy',
            'description' => '>由于凭据策略名称仅支持设置为default，因此查询时凭据钥策略名称（PolicyName）仅支持输入default，否则会提示`Not Found`。',
        ],
        'SetKeyPolicy' => [
            'summary' => '为KMS实例中的密钥设置密钥策略。',
            'methods' => [
                'post',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
                'abilityTreeCode' => '206075',
                'abilityTreeNodes' => [
                    'FEATUREkmsZ5VV9Q',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'KeyId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '',
                        'description' => '密钥ID或密钥资源名称（ARN）。'."\n"
                            ."\n"
                            .'>访问其他阿里云账号下的密钥时，必须输入密钥ARN。密钥ARN的格式为`acs:kms:${region}:${account}:key/${keyid}`。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'key-hzz630494463ejqjx****',
                    ],
                ],
                [
                    'name' => 'PolicyName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '密钥策略名称。仅支持固定取值default。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'default',
                    ],
                ],
                [
                    'name' => 'Policy',
                    'in' => 'query',
                    'schema' => [
                        'description' => '密钥策略的具体内容，JSON格式。最大长度为32768个字节。'."\n"
                            ."\n"
                            .'密钥策略内容包含：'."\n"
                            ."\n"
                            .'- Version：密钥策略的版本，目前版本仅支持设置为1。'."\n"
                            .'- Statement：密钥策略的语句，每个密钥策略包含一个或多个语句。'."\n"
                            ."\n"
                            .'密钥策略格式为：'."\n"
                            ."\n"
                            .'```'."\n"
                            .'{'."\n"
                            .'    "Version": "1",'."\n"
                            .'    "Statement": ['."\n"
                            .'        {'."\n"
                            .'            "Sid": "Enable RAM User Permissions",'."\n"
                            .'            "Effect": "Allow",'."\n"
                            .'            "Principal": {'."\n"
                            .'              "RAM": "acs:ram::112890462****:root"'."\n"
                            .'            }'."\n"
                            .'            "Action": ['."\n"
                            .'                "kms:*"'."\n"
                            .'            ],'."\n"
                            .'            "Resource": ['."\n"
                            .'                "*"'."\n"
                            .'            ]'."\n"
                            .'        }'."\n"
                            .'    ]'."\n"
                            .'}'."\n"
                            .'```'."\n"
                            ."\n"
                            .'Statement详细介绍：'."\n"
                            .'- Sid：可选，表示自定义的语句标识符。内容长度小于等于128字符，支持的字符为：大写英文字母（A-Z）、小写英文字母（a-z）、数字（0-9），特殊字符（ _/+=.@-）。'."\n"
                            .'- Effect：必选，表示是允许还是拒绝该策略语句中的权限。取值为：Allow或Deny。'."\n"
                            ."\n"
                            .'- Principal：必选，表示权限策略的授权主体，支持设置为当前阿里云账号（即密钥所属的阿里云账号），当前阿里云账号下的RAM用户、RAM角色，其他阿里云账号下的RAM用户、RAM角色。'."\n"
                            ."\n"
                            .'- Action：必选，表示要允许或拒绝的API操作，内容必须以"kms:"开头。操作权限列表的范围，请参见[密钥策略概述](~~2716468~~)。如果您设置了列表外的操作，设置后也不会生效。'."\n"
                            ."\n"
                            .'- Resource：必选，取值只能是*，表示本KMS密钥。'."\n"
                            ."\n"
                            .'>授权给其他阿里云账号下的RAM用户、RAM角色后，您仍需在访问控制RAM侧，使用该RAM用户、RAM角色的阿里云账号为其授权使用该密钥，RAM用户、RAM角色才能使用该密钥。具体操作，请参见[密钥管理服务自定义权限策略参考](~~480682~~)、[为RAM用户授权](~~116146~~)、[为RAM角色授权](~~116147~~)。'."\n",
                        'type' => 'string',
                        'required' => true,
                        'example' => '{"Statement":[{"Action":["kms:*"],"Effect":"Allow","Principal":{"RAM":["acs:ram::119285303511****:*"]},"Resource":["*"],"Sid":"kms default key policy"},{"Action":["kms:List*","kms:Describe*","kms:Create*","kms:Enable*","kms:Disable*","kms:Get*","kms:Set*","kms:Update*","kms:Delete*","kms:Cancel*","kms:TagResource","kms:UntagResource","kms:ImportKeyMaterial","kms:ScheduleKeyDeletion"],"Effect":"Allow","Principal":{"RAM":["acs:ram::119285303511****:user/for_test_policy"]},"Resource":["*"]}],"Version":"1"}',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '',
                        'description' => '',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '',
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '381D5D33-BB8F-395F-8EE4-AE3BB4B523C8',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'MissingParameter',
                        'errorMessage' => 'The parameter needed but no provided.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter is not valid.',
                    ],
                    [
                        'errorCode' => 'Forbidden.NoPermission',
                        'errorMessage' => 'This operation is forbidden by permission system.',
                    ],
                    [
                        'errorCode' => 'Forbidden.KeyPolicyUnSupported',
                        'errorMessage' => 'The specified key does not support key policy.',
                    ],
                    [
                        'errorCode' => 'Rejected.ShareQuotaExceedLimit',
                        'errorMessage' => 'Instance Share Quota Exceed Limit.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden.DKMSInstanceStateInvalid',
                        'errorMessage' => 'The DKMS instance state is invalid.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'Forbidden.KeyNotFound',
                        'errorMessage' => 'The specified Key is not found.',
                    ],
                    [
                        'errorCode' => 'Forbidden.ResourceNotFound',
                        'errorMessage' => 'Policy not found.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalFailure',
                        'errorMessage' => 'Internal  Failure',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"381D5D33-BB8F-395F-8EE4-AE3BB4B523C8\\"\\n}","errorExample":""},{"type":"xml","example":"<SetKeyPolicyResponse>\\n    <RequestId>381D5D33-BB8F-395F-8EE4-AE3BB4B523C8</RequestId>\\n</SetKeyPolicyResponse>","errorExample":""}]',
            'title' => 'SetKeyPolicy',
            'description' => '关于密钥策略的详细介绍，请参见[密钥策略概述](~~2716468~~)。',
        ],
        'SetSecretPolicy' => [
            'summary' => '为KMS实例中的凭据钥设置凭据策略。',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
                'abilityTreeCode' => '206088',
                'abilityTreeNodes' => [
                    'FEATUREkms52EQP9',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'SecretName',
                    'in' => 'query',
                    'schema' => [
                        'title' => '',
                        'description' => '凭据名称或凭据资源名称（ARN）。'."\n"
                            .'> 访问其他阿里云账号下的凭据时，必须输入凭据ARN。凭据ARN的格式为`acs:kms:${region}:${account}:secret/${secret-name}`。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'secret_test',
                    ],
                ],
                [
                    'name' => 'PolicyName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '凭据策略名称。仅支持固定取值default。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'default',
                    ],
                ],
                [
                    'name' => 'Policy',
                    'in' => 'query',
                    'schema' => [
                        'description' => '凭据策略的具体内容，JSON格式。最大长度为32768个字节。'."\n"
                            ."\n"
                            .'凭据策略内容包含：'."\n"
                            ."\n"
                            .'- Version：凭据策略的版本，目前版本仅支持设置为1。'."\n"
                            .'- Statement：凭据策略的语句，每个凭据策略包含一个或多个语句。'."\n"
                            ."\n"
                            .'凭据策略格式为：'."\n"
                            ."\n"
                            .'```'."\n"
                            .'{'."\n"
                            .'    "Version": "1",'."\n"
                            .'    "Statement": ['."\n"
                            .'        {'."\n"
                            .'            "Sid": "Enable RAM User Permissions",'."\n"
                            .'            "Effect": "Allow",'."\n"
                            .'            "Principal": {'."\n"
                            .'              "RAM": "acs:ram::123456789012:root"'."\n"
                            .'            }'."\n"
                            .'            "Action": ['."\n"
                            .'                "kms:*"'."\n"
                            .'            ],'."\n"
                            .'            "Resource": ['."\n"
                            .'                "*"'."\n"
                            .'            ]'."\n"
                            .'        }'."\n"
                            .'    ]'."\n"
                            .'}'."\n"
                            .'```'."\n"
                            ."\n"
                            .'Statement详细介绍：'."\n"
                            .'- Sid：可选，表示自定义的语句标识符。内容长度小于等于128字符，支持的字符为：大写英文字母（A-Z）、小写英文字母（a-z）、数字（0-9），特殊字符（ _/+=.@-）。'."\n"
                            .'- Effect：必选，表示是允许还是拒绝该策略语句中的权限。取值为：Allow或Deny。'."\n"
                            ."\n"
                            .'- Principal：必选，表示权限策略的授权主体，支持设置为当前阿里云账号（即凭据所属的阿里云账号），当前阿里云账号下的RAM用户、RAM角色，其他阿里云账号下的RAM用户、RAM角色。'."\n"
                            ."\n"
                            .'- Action：必选，表示要允许或拒绝的API操作，内容必须以"kms:"开头。操作权限列表的范围，请参见[凭据策略概述](~~2716465~~)。如果您设置了列表外的操作，设置后也不会生效。'."\n"
                            ."\n"
                            .'- Resource：必选，取值只能是*，表示本KMS凭据。'."\n"
                            ."\n"
                            .'>授权给其他阿里云账号下的RAM用户、RAM角色后，您仍需在访问控制RAM侧，使用该RAM用户、RAM角色的阿里云账号为其授权使用该凭据，RAM用户、RAM角色才能使用该凭据。集体操作，请参见[密钥管理服务自定义权限策略参考](~~480682~~)、[为RAM用户授权](~~116146~~)、[为RAM角色授权](~~116147~~)。'."\n",
                        'type' => 'string',
                        'required' => true,
                        'example' => '{"Version":"1","Statement": [{"Sid":"kms default secret policy","Effect":"Allow","Principal":{"RAM": ["acs:ram::119285303511****:*"]},"Action":["kms:*"],"Resource": ["*"] }] }',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '',
                        'description' => '',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '',
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '381D5D33-BB8F-395F-8EE4-AE3BB4B523C8',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'MissingParameter',
                        'errorMessage' => 'The parameter needed but no provided.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter is not valid.',
                    ],
                    [
                        'errorCode' => 'Forbidden.NoPermission',
                        'errorMessage' => 'This operation is forbidden by permission system.',
                    ],
                    [
                        'errorCode' => 'Forbidden.KeyPolicyUnSupported',
                        'errorMessage' => 'The specified key does not support key policy.',
                    ],
                    [
                        'errorCode' => 'Rejected.ShareQuotaExceedLimit',
                        'errorMessage' => 'Instance Share Quota Exceed Limit.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden.DKMSInstanceStateInvalid',
                        'errorMessage' => 'The DKMS instance state is invalid.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'Forbidden.ResourceNotFound',
                        'errorMessage' => 'Resource not found.',
                    ],
                    [
                        'errorCode' => 'Forbidden.KeyNotFound',
                        'errorMessage' => 'The specified Key is not found.',
                    ],
                ],
                503 => [
                    [
                        'errorCode' => 'SerivceUnvailableTemporary',
                        'errorMessage' => 'Service Unvailable Temporary',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"381D5D33-BB8F-395F-8EE4-AE3BB4B523C8\\"\\n}","errorExample":""},{"type":"xml","example":"<SetSecretPolicyResponse>\\n    <RequestId>381D5D33-BB8F-395F-8EE4-AE3BB4B523C8</RequestId>\\n</SetSecretPolicyResponse>","errorExample":""}]',
            'title' => 'SetSecretPolicy',
            'description' => '关于凭据策略的详细介绍，请参见[凭据策略概述](~~2716465~~)。',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-qingdao',
            'endpoint' => 'kms.cn-qingdao.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'kms.cn-beijing.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou',
            'endpoint' => 'kms.cn-zhangjiakou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-huhehaote',
            'endpoint' => 'kms.cn-huhehaote.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-wulanchabu',
            'endpoint' => 'kms.cn-wulanchabu.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'kms.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'kms.cn-shanghai.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'kms.cn-shenzhen.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-heyuan',
            'endpoint' => 'kms.cn-heyuan.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-guangzhou',
            'endpoint' => 'kms.cn-guangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-chengdu',
            'endpoint' => 'kms.cn-chengdu.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong',
            'endpoint' => 'kms.cn-hongkong.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-1',
            'endpoint' => 'kms.ap-northeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-2',
            'endpoint' => 'kms.ap-northeast-2.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'kms.ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-2',
            'endpoint' => 'kms.ap-southeast-2.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-3',
            'endpoint' => 'kms.ap-southeast-3.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-5',
            'endpoint' => 'kms.ap-southeast-5.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-6',
            'endpoint' => 'kms.ap-southeast-6.aliyuncs.com',
        ],
        [
            'regionId' => 'us-east-1',
            'endpoint' => 'kms.us-east-1.aliyuncs.com',
        ],
        [
            'regionId' => 'us-west-1',
            'endpoint' => 'kms.us-west-1.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-west-1',
            'endpoint' => 'kms.eu-west-1.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-central-1',
            'endpoint' => 'kms.eu-central-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-south-1',
            'endpoint' => 'kms.ap-south-1.aliyuncs.com',
        ],
        [
            'regionId' => 'me-east-1',
            'endpoint' => 'kms.me-east-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-finance',
            'endpoint' => 'kms.cn-hangzhou-finance.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-finance-1',
            'endpoint' => 'kms.cn-shanghai-finance-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-finance-1',
            'endpoint' => 'kms.cn-shenzhen-finance-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-7',
            'endpoint' => 'kms.ap-southeast-7.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-finance-1',
            'endpoint' => 'kms.cn-beijing-finance-1.aliyuncs.com',
        ],
    ],
];
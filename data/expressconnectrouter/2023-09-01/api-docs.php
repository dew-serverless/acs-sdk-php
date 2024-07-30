<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'ExpressConnectRouter',
        'version' => '2023-09-01',
    ],
    'directories' => [
        'DescribeExpressConnectRouterInterRegionTransitMode',
        'DescribeExpressConnectRouterAllowedPrefixHistory',
        'DescribeExpressConnectRouterAssociation',
        'DescribeExpressConnectRouterRegion',
        'DescribeExpressConnectRouterChildInstance',
        'DescribeExpressConnectRouter',
        'RevokeInstanceFromExpressConnectRouter',
        'DescribeDisabledExpressConnectRouterRouteEntries',
        'SynchronizeExpressConnectRouterInterRegionBandwidth',
        'DescribeInstanceGrantedToExpressConnectRouter',
        'ModifyExpressConnectRouterInterRegionTransitMode',
        'DescribeExpressConnectRouterRouteEntries',
        'CreateExpressConnectRouterAssociation',
        'CreateExpressConnectRouter',
        'DisableExpressConnectRouterRouteEntries',
        'DeleteExpressConnectRouter',
        'ModifyExpressConnectRouter',
        'ForceDeleteExpressConnectRouter',
        'EnableExpressConnectRouterRouteEntries',
        'CheckAddRegionToExpressConnectRouter',
        'GrantInstanceToExpressConnectRouter',
        'DeleteExpressConnectRouterAssociation',
        'ModifyExpressConnectRouterAssociationAllowedPrefix',
        'ListExpressConnectRouterSupportedRegion',
        'AttachExpressConnectRouterChildInstance',
        'DetachExpressConnectRouterChildInstance',
        'MoveResourceGroup',
        'TagResources',
        'UnTagResources',
        'ListTagResources',
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'DescribeExpressConnectRouterInterRegionTransitMode' => [
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'EcrId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '专线网关实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ecr-mezk2idmsd0vx2****',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否只预检此次请求。取值：'."\n"
                            ."\n"
                            .'- **true**：发送检查请求，不会修改服务资源。'."\n"
                            ."\n"
                            .'- **false**（默认值）：发送正常请求。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '客户端Token，用于保证请求的幂等性。'."\n"
                            ."\n"
                            .'从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。'."\n"
                            ."\n"
                            .'> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**不一样。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'FF9nMec/RZ6H9oqFn1pvyir/SLRlxCCyHJonbGzqL01hiM6Jb3wJowdHvjCfog7ww1b9rSHMRFJnrUBfVba68TJg==',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'RpcResponse<DescribeEcrRegionTransitModeResponse>',
                        'description' => 'RpcResponse<DescribeEcrRegionTransitModeResponse>',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '6FABF516-FED3-5697-BDA2-B18C5D9A****',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。取值：'."\n"
                                    .'- **True**：成功。'."\n"
                                    .'- **False**：失败。',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'Code' => [
                                'description' => '判断调用是否成功。返回值为200表示加载成功，返回其他值表示加载失败，失败原因参见错误码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '操作返回信息。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'HttpStatusCode' => [
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'DynamicCode' => [
                                'description' => '动态错误码。',
                                'type' => 'string',
                                'example' => 'IllegalParamFormat.EcrId',
                            ],
                            'DynamicMessage' => [
                                'description' => '动态错误信息，用于替换返回参数**ErrMessage**错误信息中的`%s`。'."\n"
                                    .'> 如果**ErrMessage**返回**The Value of Input Parameter %s is not valid**，且**DynamicMessage**返回**DtsJobId**，则代表所传入的请求参数**DtsJobId**不合法。',
                                'type' => 'string',
                                'example' => 'The param format of EcrId **** is illegal.',
                            ],
                            'AccessDeniedDetail' => [
                                'description' => '访问被拒绝详细信息。',
                                'type' => 'string',
                                'example' => 'Authentication is failed for ****',
                            ],
                            'InterRegionTransitModeList' => [
                                'description' => '跨域转发模式列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'RegionId' => [
                                            'description' => '专线网关所属的地域ID。',
                                            'type' => 'string',
                                            'example' => 'cn-hangzhou',
                                        ],
                                        'Mode' => [
                                            'description' => 'ECR跨域转发模式，取值：'."\n"
                                                .'- **ECMP**：负载均衡模式。'."\n"
                                                .'- **NearBy**：就近转发模式。',
                                            'type' => 'string',
                                            'example' => 'ECMP',
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
                        'errorCode' => 'MissingParam.%s',
                        'errorMessage' => 'The param of %s is missing.',
                    ],
                    [
                        'errorCode' => 'IllegalParamFormat.%s',
                        'errorMessage' => 'The param format of %s is illegal.',
                    ],
                    [
                        'errorCode' => 'IllegalParam.%s',
                        'errorMessage' => 'The param of %s is illegal.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'ResourceNotFound.EcrId',
                        'errorMessage' => 'EcrId not found.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"6FABF516-FED3-5697-BDA2-B18C5D9A****\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"DynamicCode\\": \\"IllegalParamFormat.EcrId\\",\\n  \\"DynamicMessage\\": \\"The param format of EcrId **** is illegal.\\",\\n  \\"AccessDeniedDetail\\": \\"Authentication is failed for ****\\",\\n  \\"InterRegionTransitModeList\\": [\\n    {\\n      \\"RegionId\\": \\"cn-hangzhou\\",\\n      \\"Mode\\": \\"ECMP\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询专线网关（ECR）的跨域转发模式',
            'summary' => '查询专线网关ECR（Express Connect Router）的跨地域转发模式。',
        ],
        'DescribeExpressConnectRouterAllowedPrefixHistory' => [
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'EcrId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '专线网关实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ecr-mezk2idmsd0vx2****',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '专线网关加载的实例ID。'."\n"
                            ."\n"
                            .'> **InstanceId**参数和**AssociationId**参数必须输入一个。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'vbr-j6cwxhgg0s5nuephp****',
                    ],
                ],
                [
                    'name' => 'InstanceType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '网络实例的类型。取值：'."\n"
                            .'- **VPC**：虚拟专有网络实例。'."\n"
                            .'- **TR**：转发路由器实例。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'VPC',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否只预检此次请求。取值：'."\n"
                            ."\n"
                            .'- **true**：发送检查请求，不会修改服务资源。'."\n"
                            ."\n"
                            .'- **false**（默认值）：发送正常请求。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '客户端Token，用于保证请求的幂等性。'."\n"
                            ."\n"
                            .'从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。'."\n"
                            ."\n"
                            .'> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**不一样。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'FF9nMec/RZ6H9oqFn1pvyir/SLRlxCCyHJonbGzqL01hiM6Jb3wJowdHvjCfog7ww1b9rSHMRFJnrUBfVba68TJg==',
                    ],
                ],
                [
                    'name' => 'AssociationId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '专线网关与专有网络VPC或转发路由器TR的关联的实例ID。',
                        'description' => '专线网关与专有网络VPC或转发路由器TR的关联的实例ID。'."\n"
                            ."\n"
                            .'> **InstanceId**参数和**AssociationId**参数必须输入一个。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ecr-assoc-9p2qxx5phpca2m****'."\n",
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'RpcResponse<DescribeEcrAllowedPrefixHistoryResponse>',
                        'description' => 'RpcResponse<DescribeEcrAllowedPrefixHistoryResponse>',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '6FABF516-FED3-5697-BDA2-B18C5D9A****',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。取值：'."\n"
                                    .'- **True**：成功。'."\n"
                                    .'- **False**：失败。',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'Code' => [
                                'description' => '判断调用是否成功。返回值为200表示加载成功，返回其他值表示加载失败，失败原因参见错误码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '操作返回信息。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'HttpStatusCode' => [
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'DynamicCode' => [
                                'description' => '动态错误码。',
                                'type' => 'string',
                                'example' => 'IllegalParamFormat.EcrId'."\n",
                            ],
                            'DynamicMessage' => [
                                'description' => '动态错误信息，用于替换返回参数**ErrMessage**错误信息中的`%s`。'."\n"
                                    .'>  如果**ErrMessage**返回**The Value of Input Parameter %s is not valid**，且**DynamicMessage**返回**DtsJobId**，则代表所传入的请求参数**DtsJobId**不合法。',
                                'type' => 'string',
                                'example' => 'The param format of EcrId **** is illegal.'."\n",
                            ],
                            'AccessDeniedDetail' => [
                                'description' => '访问被拒绝详细信息。',
                                'type' => 'string',
                                'example' => 'Authentication is failed for ****'."\n",
                            ],
                            'AllowedPrefixHistoryList' => [
                                'description' => '历史前缀路由列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'AllowedPrefix' => [
                                            'description' => '前缀路由。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '前缀路由条目。',
                                                'type' => 'string',
                                                'example' => '10.0.**.**/1',
                                            ],
                                        ],
                                        'GmtCreate' => [
                                            'description' => '创建历史路由条目的时间。',
                                            'type' => 'string',
                                            'example' => '1673751163000',
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
                        'errorCode' => 'ResourceNotFound.InstanceId',
                        'errorMessage' => 'The instance id does not exist.',
                    ],
                    [
                        'errorCode' => 'MissingParam.%s',
                        'errorMessage' => 'The param of %s is missing.',
                    ],
                    [
                        'errorCode' => 'IllegalParamFormat.%s',
                        'errorMessage' => 'The param format of %s is illegal.',
                    ],
                    [
                        'errorCode' => 'IllegalParam.%s',
                        'errorMessage' => 'The param of %s is illegal.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'ResourceNotFound.EcrId',
                        'errorMessage' => 'EcrId not found.',
                    ],
                    [
                        'errorCode' => 'ResourceNotFound.AssociationId',
                        'errorMessage' => 'EcrAssociationId not found.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"6FABF516-FED3-5697-BDA2-B18C5D9A****\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"DynamicCode\\": \\"IllegalParamFormat.EcrId\\\\n\\",\\n  \\"DynamicMessage\\": \\"The param format of EcrId **** is illegal.\\\\n\\",\\n  \\"AccessDeniedDetail\\": \\"Authentication is failed for ****\\\\n\\",\\n  \\"AllowedPrefixHistoryList\\": [\\n    {\\n      \\"AllowedPrefix\\": [\\n        \\"10.0.**.**/1\\"\\n      ],\\n      \\"GmtCreate\\": \\"1673751163000\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询专线网关（ECR）的前缀路由历史记录',
            'summary' => '查询专线网关ECR（Express Connect Router）前缀路由的历史记录。',
        ],
        'DescribeExpressConnectRouterAssociation' => [
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'list',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'EcrId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '专线网关实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ecr-mezk2idmsd0vx2****',
                    ],
                ],
                [
                    'name' => 'AssociationId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '专线网关与VPC或TR的关联ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ecr-assoc-9p2qxx5phpca2m****',
                    ],
                ],
                [
                    'name' => 'AssociationRegionId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'VPC或TR所属的地域信息。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'AssociationNodeType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '关联的资源类型：'."\n"
                            ."\n"
                            .'- **VPC**：专有网络。'."\n"
                            ."\n"
                            .'- **TR**：转发路由器。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'VPC',
                    ],
                ],
                [
                    'name' => 'VpcId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'VPC实例的ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'vpc-bp1h37fchc6jmfyln****',
                    ],
                ],
                [
                    'name' => 'TransitRouterId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '转发路由器实例的ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'tr-2ze4i71c6be454e2l****',
                    ],
                ],
                [
                    'name' => 'CenId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '云企业网实例的ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cen-of3o1the3i4gwb****',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否拥有下一次查询的令牌（Token）。取值：'."\n"
                            .'- 第一次查询和没有下一次查询时，均无需填写。'."\n"
                            .'- 如果有下一次查询，取值为上一次API调用返回的NextToken值。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'AAAAAYws9fJ0Ur4MGm/5OkDoW/Zn0J0/sCjivzwX9oBcwFnWaaas/kSG+J/WzLOxJHS4****',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '本次读取的最大数据量。取值范围：1~2147483647。默认值：20。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '20',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否只预检此次请求。取值：'."\n"
                            .'- **true**：发送检查请求，不会修改服务资源。'."\n"
                            .'- **false**（默认值）：发送正常请求。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '客户端Token，用于保证请求的幂等性。'."\n"
                            ."\n"
                            .'从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。'."\n"
                            ."\n"
                            .'> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**不一样。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '02fb3da4-130e-11e9-8e44-00****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'RpcResponse<DescribeAssociationResponse>',
                        'description' => 'RpcResponse<DescribeAssociationResponse>',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '05130E79-588D-5C40-A718-C4863A59****',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。取值：'."\n"
                                    ."\n"
                                    .'- **True**：成功。'."\n"
                                    .'- **False**：失败。',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'Code' => [
                                'description' => '判断调用是否成功。返回值为 200 表示加载成功，返回其他值表示加载失败，失败原因参见错误码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '操作返回信息。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'HttpStatusCode' => [
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'DynamicCode' => [
                                'description' => '动态错误码。',
                                'type' => 'string',
                                'example' => 'IllegalParamFormat.EcrId',
                            ],
                            'DynamicMessage' => [
                                'description' => '动态错误信息，用于替换返回参数**ErrMessage**错误信息中的 `%s`。'."\n"
                                    ."\n"
                                    .'> 如果**ErrMessage **返回**The Value of Input Parameter %s is not valid**，且**DynamicMessage **返回**DtsJobId**，则代表所传入的请求参数**DtsJobId**不合法。',
                                'type' => 'string',
                                'example' => 'The param format of EcrId **** is illegal.',
                            ],
                            'AccessDeniedDetail' => [
                                'description' => '访问被拒绝详细信息。',
                                'type' => 'string',
                                'example' => 'Authentication is failed for ****',
                            ],
                            'TotalCount' => [
                                'description' => '关联的资源总数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'MaxResults' => [
                                'description' => '本次读取的最大数据量。取值范围：1~2147483647。默认值：20。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '20',
                            ],
                            'NextToken' => [
                                'description' => '是否拥有下一次查询的令牌（Token）。取值：'."\n"
                                    .'- 如果**NextToken**为空表示没有下一次查询。'."\n"
                                    .'- 如果**NextToken**有返回值，该取值表示下一次查询开始的令牌。',
                                'type' => 'string',
                                'example' => 'AAAAAYws9fJ0Ur4MGm/5OkDoW/Zn0J0/sCjivzwX9oBcwFnWaaas/kSG+J/WzLOxJHS4****'."\n",
                            ],
                            'AssociationList' => [
                                'description' => '关联的资源列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'AssociationId' => [
                                            'description' => '专线网关与VPC或TR的关联ID。',
                                            'type' => 'string',
                                            'example' => 'ecr-assoc-9p2qxx5phpca2m****'."\n",
                                        ],
                                        'RegionId' => [
                                            'description' => '资源所属地域。',
                                            'type' => 'string',
                                            'example' => 'cn-hangzhou',
                                        ],
                                        'OwnerId' => [
                                            'description' => '资源所属的阿里云账号ID。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '167509154715****',
                                        ],
                                        'GmtCreate' => [
                                            'description' => '创建关联的时间。按照 ISO8601 标准表示，并需要使用 UTC 时间。格式为：YYYY-MM-DDThh:mm:ssZ。',
                                            'type' => 'string',
                                            'example' => '2024-01-09T12:18:23Z',
                                        ],
                                        'GmtModified' => [
                                            'description' => '修改关联的时间。按照 ISO8601 标准表示，并需要使用 UTC 时间。格式为：YYYY-MM-DDThh:mm:ssZ。',
                                            'type' => 'string',
                                            'example' => '2024-01-09T12:18:23Z',
                                        ],
                                        'Status' => [
                                            'description' => '关联资源的部署状态。可能值：'."\n"
                                                ."\n"
                                                .'- **CREATING**：创建中。'."\n"
                                                ."\n"
                                                .'- **ACTIVE**：已创建。'."\n"
                                                ."\n"
                                                .'- **INACTIVE**：专线网关关联转发路由器，待转发路由器关联专线网关状态。'."\n"
                                                ."\n"
                                                .'- **ASSOCIATING**：资源绑定中。'."\n"
                                                ."\n"
                                                .'- **DISSOCIATING**：资源解绑中。'."\n"
                                                ."\n"
                                                .'- **UPDATING**：修改中。'."\n"
                                                ."\n"
                                                .'- **DELETING**：删除中。',
                                            'type' => 'string',
                                            'example' => 'ACTIVE',
                                        ],
                                        'AssociationNodeType' => [
                                            'description' => '关联的资源类型：'."\n"
                                                ."\n"
                                                .'- **VPC**：专有网络。'."\n"
                                                ."\n"
                                                .'- **TR**：转发路由器。',
                                            'type' => 'string',
                                            'example' => 'VPC',
                                        ],
                                        'TransitRouterOwnerId' => [
                                            'description' => '转发路由器所属的阿里云账号ID。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '189159362009****'."\n",
                                        ],
                                        'TransitRouterId' => [
                                            'description' => '转发路由器实例的ID。',
                                            'type' => 'string',
                                            'example' => 'tr-2ze4i71c6be454e2l****'."\n",
                                        ],
                                        'CenId' => [
                                            'description' => '云企业网实例ID。',
                                            'type' => 'string',
                                            'example' => 'cen-5510frtx8zi54q****',
                                        ],
                                        'VpcOwnerId' => [
                                            'description' => 'VPC所属的阿里云账号ID。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '146757288406****',
                                        ],
                                        'VpcId' => [
                                            'description' => 'VPC实例的ID。',
                                            'type' => 'string',
                                            'example' => 'vpc-2zeeaxet4i2j1a7n7****',
                                        ],
                                        'AllowedPrefixes' => [
                                            'description' => '允许的路由前缀列表。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '允许的路由前缀。',
                                                'type' => 'string',
                                                'example' => '192.0.**.**/28',
                                            ],
                                        ],
                                        'EcrId' => [
                                            'description' => '专线网关实例ID。',
                                            'type' => 'string',
                                            'example' => 'ecr-fu8rszhgv7623c****',
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
                        'errorCode' => 'MissingParam.%s',
                        'errorMessage' => 'The param of %s is missing.',
                    ],
                    [
                        'errorCode' => 'IllegalParamFormat.%s',
                        'errorMessage' => 'The param format of %s is illegal.',
                    ],
                    [
                        'errorCode' => 'IllegalParam.%s',
                        'errorMessage' => 'The param of %s is illegal.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'ResourceNotFound.EcrId',
                        'errorMessage' => 'EcrId not found.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"05130E79-588D-5C40-A718-C4863A59****\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"DynamicCode\\": \\"IllegalParamFormat.EcrId\\",\\n  \\"DynamicMessage\\": \\"The param format of EcrId **** is illegal.\\",\\n  \\"AccessDeniedDetail\\": \\"Authentication is failed for ****\\",\\n  \\"TotalCount\\": 1,\\n  \\"MaxResults\\": 20,\\n  \\"NextToken\\": \\"AAAAAYws9fJ0Ur4MGm/5OkDoW/Zn0J0/sCjivzwX9oBcwFnWaaas/kSG+J/WzLOxJHS4****\\\\n\\",\\n  \\"AssociationList\\": [\\n    {\\n      \\"AssociationId\\": \\"ecr-assoc-9p2qxx5phpca2m****\\\\n\\",\\n      \\"RegionId\\": \\"cn-hangzhou\\",\\n      \\"OwnerId\\": 0,\\n      \\"GmtCreate\\": \\"2024-01-09T12:18:23Z\\",\\n      \\"GmtModified\\": \\"2024-01-09T12:18:23Z\\",\\n      \\"Status\\": \\"ACTIVE\\",\\n      \\"AssociationNodeType\\": \\"VPC\\",\\n      \\"TransitRouterOwnerId\\": 0,\\n      \\"TransitRouterId\\": \\"tr-2ze4i71c6be454e2l****\\\\n\\",\\n      \\"CenId\\": \\"cen-5510frtx8zi54q****\\",\\n      \\"VpcOwnerId\\": 0,\\n      \\"VpcId\\": \\"vpc-2zeeaxet4i2j1a7n7****\\",\\n      \\"AllowedPrefixes\\": [\\n        \\"192.0.**.**/28\\"\\n      ],\\n      \\"EcrId\\": \\"ecr-fu8rszhgv7623c****\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询专线网关（ECR）关联的资源信息',
            'summary' => '查询专线网关ECR（Express Connect Router）关联的专有网络（VPC）和转发路由器（TR）。',
        ],
        'DescribeExpressConnectRouterRegion' => [
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'EcrId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '要查询的专线网关实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ecr-fu8rszhgv7623c****',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否只预检此次请求。取值：'."\n"
                            ."\n"
                            .'- **true**：发送检查请求，不会修改服务资源。'."\n"
                            ."\n"
                            .'- **false**（默认值）：发送正常请求。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '客户端Token，用于保证请求的幂等性。'."\n"
                            ."\n"
                            .'从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。'."\n"
                            ."\n"
                            .'> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**不一样。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '02fb3da4-130e-11e9-8e44-00****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'RpcResponse<DescribeEcrRegionResponse>',
                        'description' => 'RpcResponse<DescribeEcrRegionResponse>',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '6FABF516-FED3-5697-BDA2-B18C5D9A****',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。取值：'."\n"
                                    ."\n"
                                    .'- **True**：成功。'."\n"
                                    .'- **False**：失败。',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'Code' => [
                                'description' => '判断调用是否成功。返回值为 200 表示加载成功，返回其他值表示加载失败，失败原因参见错误码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '操作返回信息。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'HttpStatusCode' => [
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'DynamicCode' => [
                                'description' => '动态错误码。',
                                'type' => 'string',
                                'example' => 'IllegalParamFormat.EcrId',
                            ],
                            'DynamicMessage' => [
                                'description' => '动态错误信息，用于替换返回参数**ErrMessage**错误信息中的`%s`。'."\n"
                                    ."\n"
                                    .'> 如果**ErrMessage **返回**The Value of Input Parameter %s is not valid**，且**DynamicMessage **返回**DtsJobId**，则代表所传入的请求参数**DtsJobId**不合法。',
                                'type' => 'string',
                                'example' => 'The param format of EcrId **** is illegal.',
                            ],
                            'AccessDeniedDetail' => [
                                'description' => '访问被拒绝详细信息。',
                                'type' => 'string',
                                'example' => 'Authentication is failed for ****',
                            ],
                            'RegionIdList' => [
                                'description' => '生效地域列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '生效地域。',
                                    'type' => 'string',
                                    'example' => '[\\"cn-shanghai\\"]',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'MissingParam.%s',
                        'errorMessage' => 'The param of %s is missing.',
                    ],
                    [
                        'errorCode' => 'IllegalParamFormat.%s',
                        'errorMessage' => 'The param format of %s is illegal.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'ResourceNotFound.EcrId',
                        'errorMessage' => 'EcrId not found.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"6FABF516-FED3-5697-BDA2-B18C5D9A****\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"DynamicCode\\": \\"IllegalParamFormat.EcrId\\",\\n  \\"DynamicMessage\\": \\"The param format of EcrId **** is illegal.\\",\\n  \\"AccessDeniedDetail\\": \\"Authentication is failed for ****\\",\\n  \\"RegionIdList\\": [\\n    \\"[\\\\\\\\\\\\\\"cn-shanghai\\\\\\\\\\\\\\"]\\"\\n  ]\\n}","type":"json"}]',
            'title' => '查询专线网关（ECR）相关资源的所在地域列表',
            'summary' => '查询专线网关ECR（Express Connect Router）相关资源的所在地域列表。',
        ],
        'DescribeExpressConnectRouterChildInstance' => [
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'list',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'EcrId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '专线网关实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ecr-mezk2idmsd0vx2****',
                    ],
                ],
                [
                    'name' => 'AssociationId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '专线网关与VPC或TR的关联ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ecr-assoc-9p2qxx5phpca2m****'."\n",
                    ],
                ],
                [
                    'name' => 'ChildInstanceId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '待卸载的网络实例ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'vbr-j6cwxhgg0s5nuephp****',
                    ],
                ],
                [
                    'name' => 'ChildInstanceType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '网络实例的类型。取值：**VBR**：边界路由器实例。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'VBR',
                    ],
                ],
                [
                    'name' => 'ChildInstanceRegionId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '网络实例所在的地域。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否拥有下一次查询的令牌（Token）。取值：'."\n"
                            .'- 第一次查询和没有下一次查询时，均无需填写。'."\n"
                            .'- 如果有下一次查询，取值为上一次 API 调用返回的 NextToken 值。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'AAAAAYws9fJ0Ur4MGm/5OkDoW/Zn0J0/sCjivzwX9oBcwFnWaaas/kSG+J/WzLOxJHS4****',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '本次读取的最大数据量。取值范围：1~2147483647。默认值为20。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '20',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否只预检此次请求。取值：'."\n"
                            ."\n"
                            .'- **true**：发送检查请求，不会修改服务资源。'."\n"
                            .'- **false**（默认值）：发送正常请求。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '客户端Token，用于保证请求的幂等性。'."\n"
                            ."\n"
                            .'从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。'."\n"
                            ."\n"
                            .'> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**不一样。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '02fb3da4-130e-11e9-8e44-00****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'RpcResponse<DescribeChildInstanceResponse>',
                        'description' => 'RpcResponse<DescribeChildInstanceResponse>',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '05130E79-588D-5C40-A718-C4863A59****',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。取值：'."\n"
                                    .'- **True**：成功。'."\n"
                                    .'- **False**：失败。',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'Code' => [
                                'description' => '判断调用是否成功。返回值为 200 表示加载成功，返回其他值表示加载失败，失败原因参见错误码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '操作返回信息。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'HttpStatusCode' => [
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'DynamicCode' => [
                                'description' => '动态错误码。',
                                'type' => 'string',
                                'example' => 'IllegalParamFormat.EcrId',
                            ],
                            'DynamicMessage' => [
                                'description' => '动态错误信息，用于替换返回参数**ErrMessage**错误信息中的`%s`。'."\n"
                                    .'> 如果**ErrMessage**返回**The Value of Input Parameter %s is not valid**，且**DynamicMessage**返回**DtsJobId**，则代表所传入的请求参数**DtsJobId**不合法。',
                                'type' => 'string',
                                'example' => 'The param format of EcrId **** is illegal.'."\n",
                            ],
                            'AccessDeniedDetail' => [
                                'description' => '访问被拒绝详细信息。',
                                'type' => 'string',
                                'example' => 'Authentication is failed for ****'."\n",
                            ],
                            'TotalCount' => [
                                'description' => '关联的资源总数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'MaxResults' => [
                                'description' => '本次读取的最大数据量。取值范围：1~2147483647。默认值：20。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '20',
                            ],
                            'NextToken' => [
                                'description' => '是否拥有下一次查询的令牌（Token）。取值：'."\n"
                                    ."\n"
                                    .'- 如果 NextToken 为空表示没有下一次查询。'."\n"
                                    .'- 如果 NextToken 有返回值，该取值表示下一次查询开始的令牌。',
                                'type' => 'string',
                                'example' => 'AAAAAYws9fJ0Ur4MGm/5OkDoW/Zn0J0/sCjivzwX9oBcwFnWaaas/kSG+J/WzLOxJHS4****',
                            ],
                            'ChildInstanceList' => [
                                'description' => '子实例列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '子实例信息。',
                                    'type' => 'object',
                                    'properties' => [
                                        'EcrId' => [
                                            'title' => '专线网关实例ID。',
                                            'description' => '专线网关实例ID。',
                                            'type' => 'string',
                                            'example' => 'ecr-mezk2idmsd0vx2****',
                                        ],
                                        'AssociationId' => [
                                            'description' => '专线网关与VPC或TR的关联ID。',
                                            'type' => 'string',
                                            'example' => 'ecr-assoc-9p2qxx5phpca2m****',
                                        ],
                                        'RegionId' => [
                                            'description' => '边界路由器所属地域。',
                                            'type' => 'string',
                                            'example' => 'cn-hangzhou',
                                        ],
                                        'OwnerId' => [
                                            'description' => '边界路由器所属的阿里云账号ID。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '167509154715****',
                                        ],
                                        'GmtCreate' => [
                                            'description' => '创建关联时间。按照 ISO8601 标准表示，并需要使用 UTC 时间。格式为：YYYY-MM-DDThh:mm:ssZ。',
                                            'type' => 'string',
                                            'example' => '2024-01-09T12:18:23Z',
                                        ],
                                        'GmtModified' => [
                                            'description' => '修改关联时间。按照 ISO8601 标准表示，并需要使用 UTC 时间。格式为：YYYY-MM-DDThh:mm:ssZ。',
                                            'type' => 'string',
                                            'example' => '2024-01-09T12:18:23Z',
                                        ],
                                        'Status' => [
                                            'description' => '关联资源的部署状态。可能值：'."\n"
                                                ."\n"
                                                .'- **CREATING**：创建中。'."\n"
                                                ."\n"
                                                .'- **ACTIVE**：已创建。'."\n"
                                                ."\n"
                                                .'- **ASSOCIATING**：资源绑定中。'."\n"
                                                ."\n"
                                                .'- **DISSOCIATING**：资源解绑中。'."\n"
                                                ."\n"
                                                .'- **UPDATING**：修改中。'."\n"
                                                ."\n"
                                                .'- **DELETING**：删除中。',
                                            'type' => 'string',
                                            'example' => 'ACTIVE',
                                        ],
                                        'ChildInstanceId' => [
                                            'description' => '边界路由器实例ID。',
                                            'type' => 'string',
                                            'example' => 'vbr-gw8vjq2zjux3ifsc9****',
                                        ],
                                        'ChildInstanceType' => [
                                            'description' => '子实例类型。取值：**VBR**边界路由器。',
                                            'type' => 'string',
                                            'example' => 'VBR',
                                        ],
                                        'ChildInstanceRegionId' => [
                                            'description' => '子实例所属地域。',
                                            'type' => 'string',
                                            'example' => 'cn-hangzhou',
                                        ],
                                        'ChildInstanceOwnerId' => [
                                            'description' => '子实例所属的阿里云账号ID。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '112101171212****',
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
                        'errorCode' => 'MissingParam.%s',
                        'errorMessage' => 'The param of %s is missing.',
                    ],
                    [
                        'errorCode' => 'IllegalParamFormat.%s',
                        'errorMessage' => 'The param format of %s is illegal.',
                    ],
                    [
                        'errorCode' => 'IllegalParam.%s',
                        'errorMessage' => 'The param of %s is illegal.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'ResourceNotFound.EcrId',
                        'errorMessage' => 'EcrId not found.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"05130E79-588D-5C40-A718-C4863A59****\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"DynamicCode\\": \\"IllegalParamFormat.EcrId\\",\\n  \\"DynamicMessage\\": \\"The param format of EcrId **** is illegal.\\\\n\\",\\n  \\"AccessDeniedDetail\\": \\"Authentication is failed for ****\\\\n\\",\\n  \\"TotalCount\\": 1,\\n  \\"MaxResults\\": 20,\\n  \\"NextToken\\": \\"AAAAAYws9fJ0Ur4MGm/5OkDoW/Zn0J0/sCjivzwX9oBcwFnWaaas/kSG+J/WzLOxJHS4****\\",\\n  \\"ChildInstanceList\\": [\\n    {\\n      \\"EcrId\\": \\"ecr-mezk2idmsd0vx2****\\",\\n      \\"AssociationId\\": \\"ecr-assoc-9p2qxx5phpca2m****\\",\\n      \\"RegionId\\": \\"cn-hangzhou\\",\\n      \\"OwnerId\\": 0,\\n      \\"GmtCreate\\": \\"2024-01-09T12:18:23Z\\",\\n      \\"GmtModified\\": \\"2024-01-09T12:18:23Z\\",\\n      \\"Status\\": \\"ACTIVE\\",\\n      \\"ChildInstanceId\\": \\"vbr-gw8vjq2zjux3ifsc9****\\",\\n      \\"ChildInstanceType\\": \\"VBR\\",\\n      \\"ChildInstanceRegionId\\": \\"cn-hangzhou\\",\\n      \\"ChildInstanceOwnerId\\": 0\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询专线网关（ECR）绑定的子实例信息',
            'summary' => '查询专线网关ECR（Express Connect Router）加载的边界路由器（VBR）。',
        ],
        'DescribeExpressConnectRouter' => [
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
                'operationType' => 'list',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'EcrId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '专线网关实例ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ecr-fu8rszhgv7623c****',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '专线网关实例名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否拥有下一次查询的令牌（Token）。取值：'."\n"
                            ."\n"
                            .'- 第一次查询和没有下一次查询时，均无需填写。'."\n"
                            .'- 如果有下一次查询，取值为上一次 API 调用返回的 NextToken 值。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'e0a2dbeb69a8beeeb8194e92b702df3fd3e7bfe6ce7bfc16e0b5e8707e68181f',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '本次读取的最大数据量。取值范围：1~2147483647。默认值为20。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '20',
                    ],
                ],
                [
                    'name' => 'TagModels',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '标签列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '资源标签。',
                            'type' => 'object',
                            'properties' => [
                                'TagKey' => [
                                    'description' => '专线网关的标签键。最多支持输入 20 个标签键。如果传入该值，则不能输入空字符串。'."\n"
                                        ."\n"
                                        .'最多支持 128 个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'ecr-tag',
                                ],
                                'TagValue' => [
                                    'description' => '专线网关的标签值。最多支持输入20个标签值。如需传入该值，可以输入空字符串。'."\n"
                                        ."\n"
                                        .'最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'testTagValueKZqhJi',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 100,
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '专线网关实例所属资源组的ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-aek2aq7f4va****'."\n",
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否只预检此次请求。取值：'."\n"
                            ."\n"
                            .'- **true**：发送检查请求，不会修改服务资源。'."\n"
                            ."\n"
                            .'- **false**（默认值）：发送正常请求。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '客户端Token，用于保证请求的幂等性。'."\n"
                            ."\n"
                            .'从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。'."\n"
                            ."\n"
                            .'> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**不一样。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '02fb3da4-130e-11e9-8e44-00****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'RpcResponse<DescribeEcrResponse>',
                        'description' => 'RpcResponse<DescribeEcrResponse>',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '6FABF516-FED3-5697-BDA2-B18C5D9A****',
                            ],
                            'Success' => [
                                'description' => '查询已创建ECR实例是否成功。取值：'."\n"
                                    .'- **True**：成功。'."\n"
                                    .'- **False**：失败。',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'Code' => [
                                'description' => '判断调用是否成功。返回值为 200 表示加载成功，返回其他值表示加载失败，失败原因参见错误码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '操作返回信息。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'HttpStatusCode' => [
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'DynamicCode' => [
                                'description' => '动态错误码。',
                                'type' => 'string',
                                'example' => 'IllegalParamFormat.Name',
                            ],
                            'DynamicMessage' => [
                                'description' => '动态错误信息，用于替换返回参数**ErrMessage**错误信息中的`%s`。'."\n"
                                    ."\n"
                                    .'> 如果**ErrMessage**返回**The Value of Input Parameter %s is not valid**，且**DynamicMessage**返回**DtsJobId**，则代表所传入的请求参数**DtsJobId**不合法。',
                                'type' => 'string',
                                'example' => 'The param format of Name **** is illegal.',
                            ],
                            'AccessDeniedDetail' => [
                                'description' => '访问被拒绝详细信息。',
                                'type' => 'string',
                                'example' => 'Authentication is failed for ****',
                            ],
                            'TotalCount' => [
                                'description' => '专线网关实例总条数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '2',
                            ],
                            'MaxResults' => [
                                'description' => '本次读取的最大数据量。取值范围：1~2147483647。默认值为20。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '20',
                            ],
                            'NextToken' => [
                                'description' => '是否拥有下一次查询的令牌（Token）。取值：'."\n"
                                    ."\n"
                                    .'- 如果 NextToken 为空表示没有下一次查询。'."\n"
                                    .'- 如果 NextToken 有返回值，该取值表示下一次查询开始的令牌。',
                                'type' => 'string',
                                'example' => 'AAAAAdDWBF2w6Olxc+cMPjUtUMpttDGZkffvHCfhBKKNEyCVaq+WUEzuUWpp9+QOApNf6g==',
                            ],
                            'EcrList' => [
                                'description' => '专线网关实例列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '专线网关实例。',
                                    'type' => 'object',
                                    'properties' => [
                                        'EcrId' => [
                                            'description' => '专线网关实例ID。',
                                            'type' => 'string',
                                            'example' => 'ecr-mezk2idmsd0vx2****',
                                        ],
                                        'OwnerId' => [
                                            'description' => '专线网关实例所属的阿里云账号ID。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '170646818729****',
                                        ],
                                        'GmtCreate' => [
                                            'description' => '专线网关实例创建时间。按照 ISO8601 标准表示，并需要使用 UTC 时间。格式为：YYYY-MM-DDThh:mm:ssZ。',
                                            'type' => 'string',
                                            'example' => '2023-02-16T01:44:50Z'."\n",
                                        ],
                                        'GmtModified' => [
                                            'description' => '专线网关实例修改时间。按照 ISO8601 标准表示，并需要使用 UTC 时间。格式为：YYYY-MM-DDThh:mm:ssZ。',
                                            'type' => 'string',
                                            'example' => '2023-02-16T01:44:50Z',
                                        ],
                                        'Status' => [
                                            'description' => '服务实例的部署状态。可能值：'."\n"
                                                ."\n"
                                                .'- **ACTIVE**：已创建。'."\n"
                                                ."\n"
                                                .'- **UPDATING**：修改中。'."\n"
                                                ."\n"
                                                .'- **ASSOCIATING**：资源绑定中。'."\n"
                                                ."\n"
                                                .'- **DISSOCIATING**：资源解绑中。'."\n"
                                                ."\n"
                                                .'- **LOCKED_ATTACHING**：被外部系统绑定锁定。'."\n"
                                                ."\n"
                                                .'- **LOCKED_DETACHING**：被外部系统解绑锁定。'."\n"
                                                ."\n"
                                                .'- **RECLAIMING**：等待释放资源。'."\n"
                                                ."\n"
                                                .'- **DELETING**：删除中。',
                                            'type' => 'string',
                                            'example' => 'Active',
                                        ],
                                        'BizStatus' => [
                                            'description' => '服务实例的业务状态。可能的值：'."\n"
                                                ."\n"
                                                .'- **Normal**：正常。'."\n"
                                                ."\n"
                                                .'- **FinancialLocked**：欠费锁定。',
                                            'type' => 'string',
                                            'example' => 'Normal',
                                        ],
                                        'ResourceGroupId' => [
                                            'description' => '专线网关实例所属资源组的ID。',
                                            'type' => 'string',
                                            'example' => 'rg-aekzuscospt****',
                                        ],
                                        'Tags' => [
                                            'description' => '标签列表。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '标签。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'Id' => [
                                                        'description' => '标签的ID。',
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                        'example' => '000000100089****'."\n",
                                                    ],
                                                    'ResourceId' => [
                                                        'description' => '专线网关实例所属的资源组的ID。',
                                                        'type' => 'string',
                                                        'example' => 'rg-aek2aq7f4va****'."\n",
                                                    ],
                                                    'ResuorceType' => [
                                                        'description' => '资源类型。',
                                                        'type' => 'string',
                                                        'example' => 'ECR',
                                                    ],
                                                    'RegionNo' => [
                                                        'description' => '专线网关实例所在的地域ID。',
                                                        'type' => 'string',
                                                        'example' => 'cn-shanghai',
                                                    ],
                                                    'AliUid' => [
                                                        'description' => '专线网关实例所属的阿里云账号的ID。',
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                        'example' => '181614792955****',
                                                    ],
                                                    'TagKey' => [
                                                        'description' => '专线网关实例的标签键。',
                                                        'type' => 'string',
                                                        'example' => 'test',
                                                    ],
                                                    'TagValue' => [
                                                        'description' => '专线网关实例的标签值。',
                                                        'type' => 'string',
                                                        'example' => 'test',
                                                    ],
                                                    'Scope' => [
                                                        'description' => '查看取值。'."\n"
                                                            ."\n"
                                                            .'- **0**：不可见。'."\n"
                                                            ."\n"
                                                            .'- **1**：可见。',
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'example' => '0',
                                                    ],
                                                    'Category' => [
                                                        'description' => '用户类型。'."\n"
                                                            ."\n"
                                                            .'- **0**：普通用户。'."\n"
                                                            ."\n"
                                                            .'- **1**：系统用户。',
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'example' => '0',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'Name' => [
                                            'description' => '专线网关实例名称。',
                                            'type' => 'string',
                                            'example' => 'test',
                                        ],
                                        'Description' => [
                                            'description' => '专线网关实例的描述信息。',
                                            'type' => 'string',
                                            'example' => 'test',
                                        ],
                                        'AlibabaSideAsn' => [
                                            'description' => '专线网关实例的ASN号。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '45104',
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
                        'errorCode' => 'IllegalParamFormat.%s',
                        'errorMessage' => 'The param format of %s is illegal.',
                    ],
                    [
                        'errorCode' => 'IllegalParam.%s',
                        'errorMessage' => 'The param of %s is illegal.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"6FABF516-FED3-5697-BDA2-B18C5D9A****\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"DynamicCode\\": \\"IllegalParamFormat.Name\\",\\n  \\"DynamicMessage\\": \\"The param format of Name **** is illegal.\\",\\n  \\"AccessDeniedDetail\\": \\"Authentication is failed for ****\\",\\n  \\"TotalCount\\": 2,\\n  \\"MaxResults\\": 20,\\n  \\"NextToken\\": \\"AAAAAdDWBF2w6Olxc+cMPjUtUMpttDGZkffvHCfhBKKNEyCVaq+WUEzuUWpp9+QOApNf6g==\\",\\n  \\"EcrList\\": [\\n    {\\n      \\"EcrId\\": \\"ecr-mezk2idmsd0vx2****\\",\\n      \\"OwnerId\\": 0,\\n      \\"GmtCreate\\": \\"2023-02-16T01:44:50Z\\\\n\\",\\n      \\"GmtModified\\": \\"2023-02-16T01:44:50Z\\",\\n      \\"Status\\": \\"Active\\",\\n      \\"BizStatus\\": \\"Normal\\",\\n      \\"ResourceGroupId\\": \\"rg-aekzuscospt****\\",\\n      \\"Tags\\": [\\n        {\\n          \\"Id\\": 0,\\n          \\"ResourceId\\": \\"rg-aek2aq7f4va****\\\\n\\",\\n          \\"ResuorceType\\": \\"ECR\\",\\n          \\"RegionNo\\": \\"cn-shanghai\\",\\n          \\"AliUid\\": 0,\\n          \\"TagKey\\": \\"test\\",\\n          \\"TagValue\\": \\"test\\",\\n          \\"Scope\\": 0,\\n          \\"Category\\": 0\\n        }\\n      ],\\n      \\"Name\\": \\"test\\",\\n      \\"Description\\": \\"test\\",\\n      \\"AlibabaSideAsn\\": 45104\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询专线网关（ECR）列表',
            'summary' => '查询专线网关ECR（Express Connect Router）列表。',
        ],
        'RevokeInstanceFromExpressConnectRouter' => [
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'none',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'EcrId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '专线网关实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ecr-mezk2idmsd0vx2****',
                    ],
                ],
                [
                    'name' => 'EcrOwnerAliUid',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '撤销授权的ECR实例所属阿里云账号（主账号）ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '121012345612****'."\n",
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '网络实例的ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'vbr-j6cwxhgg0s5nuephp****',
                    ],
                ],
                [
                    'name' => 'InstanceType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '网络实例的类型。取值：'."\n"
                            .'- **VBR**：边界路由器实例。'."\n"
                            .'- **VPC**：专有网络实例。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'VBR',
                    ],
                ],
                [
                    'name' => 'InstanceRegionId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '撤销授权的网络实例所在的地域。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否只预检此次请求。取值：'."\n"
                            ."\n"
                            .'- **true**：发送检查请求，不会修改服务资源。'."\n"
                            ."\n"
                            .'- **false**（默认值）：发送正常请求。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '客户端Token，用于保证请求的幂等性。'."\n"
                            ."\n"
                            .'从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。'."\n"
                            ."\n"
                            .'> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**不一样。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '02fb3da4-130e-11e9-8e44-00****'."\n",
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'RpcResponse<RevokeInstanceFromEcrResponse>',
                        'description' => 'RpcResponse<RevokeInstanceFromEcrResponse>',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '6FABF516-FED3-5697-BDA2-B18C5D9A****',
                            ],
                            'Success' => [
                                'description' => '撤销授权网络实例是否成功。取值：'."\n"
                                    ."\n"
                                    .'- **true**：成功。'."\n"
                                    ."\n"
                                    .'- **false**：失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Code' => [
                                'description' => '判断调用是否成功。返回值为 200 表示加载成功，返回其他值表示加载失败，失败原因参见错误码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '操作返回信息。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'HttpStatusCode' => [
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'DynamicCode' => [
                                'description' => '动态错误码。',
                                'type' => 'string',
                                'example' => 'IllegalParamFormat.EcrId',
                            ],
                            'DynamicMessage' => [
                                'description' => '动态错误信息，用于替换返回参数**ErrMessage**错误信息中的`%s`。'."\n"
                                    ."\n"
                                    .'> 如果**ErrMessage**返回**The Value of Input Parameter %s is not valid**，且**DynamicMessage**返回**DtsJobId**，则代表所传入的请求参数**DtsJobId**不合法。',
                                'type' => 'string',
                                'example' => 'The param format of EcrId **** is illegal.',
                            ],
                            'AccessDeniedDetail' => [
                                'description' => '访问被拒绝详细信息。',
                                'type' => 'string',
                                'example' => 'Authentication is failed for ****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'MissingParam.%s',
                        'errorMessage' => 'The param of %s is missing.',
                    ],
                    [
                        'errorCode' => 'IllegalParamFormat.%s',
                        'errorMessage' => 'The param format of %s is illegal.',
                    ],
                    [
                        'errorCode' => 'IllegalParam.%s',
                        'errorMessage' => 'The param of %s is illegal.',
                    ],
                    [
                        'errorCode' => 'Conflict.Lock',
                        'errorMessage' => 'There are other unfinished operations.',
                    ],
                    [
                        'errorCode' => 'OperationFailed.CallingVpcYaochi',
                        'errorMessage' => 'The system is abnormal. Please try again later.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"6FABF516-FED3-5697-BDA2-B18C5D9A****\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"DynamicCode\\": \\"IllegalParamFormat.EcrId\\",\\n  \\"DynamicMessage\\": \\"The param format of EcrId **** is illegal.\\",\\n  \\"AccessDeniedDetail\\": \\"Authentication is failed for ****\\"\\n}","type":"json"}]',
            'title' => '撤销网络实例对专线网关（ECR）的授权',
            'summary' => '撤销专有网络（VPC）或者边界路由器（VBR）对跨账号的专线网关ECR（Express Connect Router）的授权。',
        ],
        'DescribeDisabledExpressConnectRouterRouteEntries' => [
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'EcrId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '专线网关实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ecr-mezk2idmsd0vx2****',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否拥有下一次查询的令牌（Token）。取值：'."\n"
                            ."\n"
                            .'- 第一次查询和没有下一次查询时，均无需填写。'."\n"
                            .'- 如果有下一次查询，取值为上一次 API 调用返回的NextToken值。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'FFv4fzkNPW8Z+cZ+DBXXQ3Gmf3XlCgpBH43oaTYTAAcGc708Zb+pDyAGVJBo/MKsyrtZfPnX9Ztf02vgdIDyaNe8UuZdf/JJk069qxGKzqSKg=',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '本次读取的最大数据量。取值范围：1～2147483647。默认值为10。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否只预检此次请求。取值：'."\n"
                            ."\n"
                            .'- **true**：发送检查请求，不会修改服务资源。'."\n"
                            ."\n"
                            .'- **false**（默认值）：发送正常请求。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '客户端Token，用于保证请求的幂等性。'."\n"
                            ."\n"
                            .'从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。'."\n"
                            ."\n"
                            .'> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**不一样。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'FF9nMec/RZ6H9oqFn1pvyir/SLRlxCCyHJonbGzqL01hiM6Jb3wJowdHvjCfog7ww1b9rSHMRFJnrUBfVba68TJg==',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'RpcResponse<DescribeEcrDisabledRouteResponse>',
                        'description' => 'RpcResponse<DescribeEcrDisabledRouteResponse>',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '6FABF516-FED3-5697-BDA2-B18C5D9A****',
                            ],
                            'Success' => [
                                'description' => '查询禁用专线网关路由是否成功。取值：'."\n"
                                    .'- **True**：成功。'."\n"
                                    .'- **False**：失败。',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'Code' => [
                                'description' => '判断调用是否成功。返回值为 200 表示加载成功，返回其他值表示加载失败，失败原因参见错误码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '操作返回信息。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'HttpStatusCode' => [
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'DynamicCode' => [
                                'description' => '动态错误码。',
                                'type' => 'string',
                                'example' => 'IllegalParamFormat.EcrId',
                            ],
                            'DynamicMessage' => [
                                'description' => '动态错误信息，用于替换返回参数**ErrMessage**错误信息中的`%s`。'."\n"
                                    ."\n"
                                    .'> 如果**ErrMessage**返回**The Value of Input Parameter %s is not valid**，且**DynamicMessage**返回**DtsInstanceId**，则代表所传入的请求参数**DtsInstanceId**不合法。',
                                'type' => 'string',
                                'example' => 'The param format of EcrId **** is illegal.',
                            ],
                            'AccessDeniedDetail' => [
                                'description' => '访问被拒绝详细信息。',
                                'type' => 'string',
                                'example' => 'Authentication is failed for ****',
                            ],
                            'TotalCount' => [
                                'description' => '总共的路由条目数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '2',
                            ],
                            'MaxResults' => [
                                'description' => '本次读取的最大数据量。取值范围：1～2147483647。默认值为10。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '6',
                            ],
                            'NextToken' => [
                                'description' => '是否拥有下一次查询的令牌（Token）。取值：'."\n"
                                    ."\n"
                                    .'- 如果NextToken为空表示没有下一次查询。'."\n"
                                    .'- 如果NextToken有返回值，该取值表示下一次查询开始的令牌。',
                                'type' => 'string',
                                'example' => 'gAAAAABkDTaRFnmxUoMLVOn8YTIgYFeL2ch8j0sJs8VCIU8SS5438m3D9X1VqspCcaUEHRN9I_AfVwMhZHAhcNivifK_OtQxJQ==',
                            ],
                            'DisabledRouteEntryList' => [
                                'description' => '查询的路由列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'EcrId' => [
                                            'description' => '专线网关实例ID。',
                                            'type' => 'string',
                                            'example' => 'ecr-mezk2idmsd0vx2****'."\n",
                                        ],
                                        'DestinationCidrBlock' => [
                                            'description' => '路由条目的目标网段。',
                                            'type' => 'string',
                                            'example' => '192.168.100.110/32',
                                        ],
                                        'NexthopInstanceId' => [
                                            'description' => '下一跳实例ID。',
                                            'type' => 'string',
                                            'example' => 'br-hp3u4u5f03tfuljis****'."\n",
                                        ],
                                        'NexthopInstanceRegionId' => [
                                            'description' => '下一跳实例所属的地域ID。',
                                            'type' => 'string',
                                            'example' => 'cn-hangzhou',
                                        ],
                                        'GmtCreate' => [
                                            'description' => '创建路由条目的时间。',
                                            'type' => 'string',
                                            'example' => '1682317345',
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
                        'errorCode' => 'MissingParam.%s',
                        'errorMessage' => 'The param of %s is missing.',
                    ],
                    [
                        'errorCode' => 'IllegalParamFormat.%s',
                        'errorMessage' => 'The param format of %s is illegal.',
                    ],
                    [
                        'errorCode' => 'IllegalParam.%s',
                        'errorMessage' => 'The param of %s is illegal.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'ResourceNotFound.EcrId',
                        'errorMessage' => 'EcrId not found.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"6FABF516-FED3-5697-BDA2-B18C5D9A****\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"DynamicCode\\": \\"IllegalParamFormat.EcrId\\",\\n  \\"DynamicMessage\\": \\"The param format of EcrId **** is illegal.\\",\\n  \\"AccessDeniedDetail\\": \\"Authentication is failed for ****\\",\\n  \\"TotalCount\\": 2,\\n  \\"MaxResults\\": 6,\\n  \\"NextToken\\": \\"gAAAAABkDTaRFnmxUoMLVOn8YTIgYFeL2ch8j0sJs8VCIU8SS5438m3D9X1VqspCcaUEHRN9I_AfVwMhZHAhcNivifK_OtQxJQ==\\",\\n  \\"DisabledRouteEntryList\\": [\\n    {\\n      \\"EcrId\\": \\"ecr-mezk2idmsd0vx2****\\\\n\\",\\n      \\"DestinationCidrBlock\\": \\"192.168.100.110/32\\",\\n      \\"NexthopInstanceId\\": \\"br-hp3u4u5f03tfuljis****\\\\n\\",\\n      \\"NexthopInstanceRegionId\\": \\"cn-hangzhou\\",\\n      \\"GmtCreate\\": \\"1682317345\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询禁用的专线网关（ECR）路由',
            'summary' => '查询专线网关ECR（Express Connect Router）禁用的路由条目。',
        ],
        'SynchronizeExpressConnectRouterInterRegionBandwidth' => [
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'none',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'EcrId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '专线网关实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ecr-fu8rszhgv7623c****',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否只预检此次请求。取值：'."\n"
                            ."\n"
                            .'- **true**：发送检查请求，不会修改服务资源。'."\n"
                            ."\n"
                            .'- **false**（默认值）：发送正常请求。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '客户端Token，用于保证请求的幂等性。'."\n"
                            ."\n"
                            .'从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。'."\n"
                            ."\n"
                            .'> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**不一样。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '02fb3da4-130e-11e9-8e44-00****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'RpcResponse<SyncEcrBandwidthResponse>',
                        'description' => 'RpcResponse<SyncEcrBandwidthResponse>',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '6FABF516-FED3-5697-BDA2-B18C5D9A****',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。取值：'."\n"
                                    ."\n"
                                    .'- **True**：成功。'."\n"
                                    .'- **False**：失败。',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'Code' => [
                                'description' => '判断调用是否成功。返回值为 200 表示加载成功，返回其他值表示加载失败，失败原因参见错误码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '操作返回信息。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'HttpStatusCode' => [
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'DynamicCode' => [
                                'description' => '动态错误码。',
                                'type' => 'string',
                                'example' => 'IllegalParamFormat.EcrId',
                            ],
                            'DynamicMessage' => [
                                'description' => '动态错误信息，用于替换返回参数**ErrMessage**错误信息中的`%s`。'."\n"
                                    ."\n"
                                    .'> 如果**ErrMessage**返回**The Value of Input Parameter %s is not valid**，且**DynamicMessage**返回**DtsInstanceId**，则代表所传入的请求参数**DtsInstanceId**不合法。',
                                'type' => 'string',
                                'example' => 'The param format of EcrId **** is illegal.',
                            ],
                            'AccessDeniedDetail' => [
                                'description' => '访问被拒绝详细信息。',
                                'type' => 'string',
                                'example' => 'Authentication is failed for ****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'IncorrectStatus.Ecr',
                        'errorMessage' => 'Ecr Status does not allow current operation.',
                    ],
                    [
                        'errorCode' => 'OperationDenied.ForceDeleting',
                        'errorMessage' => 'The current instance is being deleted.',
                    ],
                    [
                        'errorCode' => 'MissingParam.%s',
                        'errorMessage' => 'The param of %s is missing.',
                    ],
                    [
                        'errorCode' => 'IllegalParamFormat.%s',
                        'errorMessage' => 'The param format of %s is illegal.',
                    ],
                    [
                        'errorCode' => 'Conflict.Lock',
                        'errorMessage' => 'There are other unfinished operations.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'ResourceNotFound.EcrId',
                        'errorMessage' => 'EcrId not found.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"6FABF516-FED3-5697-BDA2-B18C5D9A****\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"DynamicCode\\": \\"IllegalParamFormat.EcrId\\",\\n  \\"DynamicMessage\\": \\"The param format of EcrId **** is illegal.\\",\\n  \\"AccessDeniedDetail\\": \\"Authentication is failed for ****\\"\\n}","type":"json"}]',
            'title' => '同步专线网关ECR的跨域带宽',
            'summary' => '同步专线网关ECR（Express Connect Router）的各地域之间的转发带宽限制。',
            'description' => '专线网关实例为**Active**状态时才允许更新。',
        ],
        'DescribeInstanceGrantedToExpressConnectRouter' => [
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'EcrId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '专线网关实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ecr-mezk2idmsd0vx2****',
                    ],
                ],
                [
                    'name' => 'InstanceRegionId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '授权网络实例所在的地域。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '授权实例的ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'vbr-j6cwxhgg0s5nuephp****',
                    ],
                ],
                [
                    'name' => 'InstanceOwnerId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '授权网络实例所属阿里云账号（主账号）ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '129845258050****',
                    ],
                ],
                [
                    'name' => 'InstanceType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '网络实例的类型。取值：'."\n"
                            .'- **VBR**：边界路由器实例。'."\n"
                            .'- **VPC**：专有网络实例。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'VBR',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否拥有下一次查询的令牌（Token）。取值：'."\n"
                            ."\n"
                            .'- 第一次查询和没有下一次查询时，均无需填写。'."\n"
                            .'- 如果有下一次查询，取值为上一次 API 调用返回的 NextToken 值。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'gAAAAABkyGzFbZR2NnxnyVk0EiL7F3qMBtBim8Es0mugRT3qb8yEHAMaHGanzuaHUmiEq9QRmok0RgxJAINBOJZa5KPjopEu_Q==',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '本次读取的最大数据量。取值范围：1～2147483647。默认值为20。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '20',
                    ],
                ],
                [
                    'name' => 'TagModels',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '标签列表。',
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'TagKey' => [
                                    'description' => '资源的标签键。最多支持输入20个标签键。如果传入该值，则不能输入空字符串。'."\n"
                                        ."\n"
                                        .'最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'key',
                                ],
                                'TagValue' => [
                                    'description' => '资源的标签值。最多支持输入20个标签值。如果传入该值，则不能输入空字符串。'."\n"
                                        ."\n"
                                        .'最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'value'."\n",
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 100,
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '实例所属的资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-aek2tsvbnfe****',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否只预检此次请求。取值：'."\n"
                            ."\n"
                            .'- **true**：发送检查请求，不会修改服务资源。'."\n"
                            ."\n"
                            .'- **false**（默认值）：发送正常请求。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '客户端Token，用于保证请求的幂等性。'."\n"
                            ."\n"
                            .'从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。'."\n"
                            ."\n"
                            .'> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**不一样。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '02fb3da4-130e-11e9-8e44-00****'."\n",
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'RpcResponse<DescribeInstanceGrantedToEcrResponse>',
                        'description' => 'RpcResponse<DescribeInstanceGrantedToEcrResponse>',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '6FABF516-FED3-5697-BDA2-B18C5D9A****',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。取值：'."\n"
                                    .'- **True**：成功。'."\n"
                                    .'- **False**：失败。',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'Code' => [
                                'description' => '判断调用是否成功。返回值为 200 表示加载成功，返回其他值表示加载失败，失败原因参见错误码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '操作返回信息。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'HttpStatusCode' => [
                                'description' => 'HTTP状态码。'."\n",
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'DynamicCode' => [
                                'description' => '动态错误码。',
                                'type' => 'string',
                                'example' => 'IllegalParamFormat.Name'."\n",
                            ],
                            'DynamicMessage' => [
                                'description' => '动态错误信息，用于替换返回参数**ErrMessage**错误信息中的`%s`。'."\n"
                                    ."\n"
                                    .'> 如果**ErrMessage**返回**The Value of Input Parameter %s is not valid**，且**DynamicMessage**返回**DtsJobId**，则代表所传入的请求参数**DtsJobId**不合法。',
                                'type' => 'string',
                                'example' => 'The param format of Name **** is illegal.'."\n",
                            ],
                            'AccessDeniedDetail' => [
                                'description' => '访问被拒绝详细信息。',
                                'type' => 'string',
                                'example' => 'Authentication is failed for ****'."\n",
                            ],
                            'TotalCount' => [
                                'description' => '授权给专线网关的网络实例总数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'MaxResults' => [
                                'description' => '本次读取的最大数据量。取值范围：1~2147483647。默认值：20。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '20',
                            ],
                            'NextToken' => [
                                'description' => '是否拥有下一次查询的令牌（Token）。取值：'."\n"
                                    ."\n"
                                    .'- 如果**NextToken**为空表示没有下一次查询。'."\n"
                                    .'- 如果**NextToken**有返回值，该取值表示下一次查询开始的令牌。',
                                'type' => 'string',
                                'example' => 'FFlMqGuJ10uN3l+FX/cBrGDNXUOUifNeOuAJlT4dc3vsWD6DsNSFAC2FtpeH5QOSG2WFdyRoun7gSLCm5o69YnAQ==',
                            ],
                            'EcrGrantedInstanceList' => [
                                'description' => 'ECR授权实例列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'GrantId' => [
                                            'description' => '授权ID。',
                                            'type' => 'string',
                                            'example' => 'gr-8gdelo13mi99g1****',
                                        ],
                                        'Status' => [
                                            'description' => '授权网络实例的状态。',
                                            'type' => 'string',
                                            'example' => 'Active',
                                        ],
                                        'GmtCreate' => [
                                            'description' => '创建实例的时间。',
                                            'type' => 'string',
                                            'example' => '1669023139000',
                                        ],
                                        'GmtModified' => [
                                            'description' => '修改实例的时间',
                                            'type' => 'string',
                                            'example' => '1669023139000',
                                        ],
                                        'EcrId' => [
                                            'description' => '专线网关实例ID。',
                                            'type' => 'string',
                                            'example' => 'ecr-mezk2idmsd0vx2****',
                                        ],
                                        'NodeId' => [
                                            'description' => '授权实例ID。',
                                            'type' => 'string',
                                            'example' => 'vbr-j6cwxhgg0s5nuephp****'."\n",
                                        ],
                                        'NodeType' => [
                                            'description' => '网络实例的类型。取值：'."\n"
                                                .'- **VBR**：边界路由器实例。'."\n"
                                                .'- **VPC**：虚拟专有网络实例。',
                                            'type' => 'string',
                                            'example' => 'VBR',
                                        ],
                                        'NodeRegionId' => [
                                            'description' => '授权实例所属地域ID。',
                                            'type' => 'string',
                                            'example' => 'cn-hangzhou',
                                        ],
                                        'NodeOwnerUid' => [
                                            'description' => '实例所属的阿里云账号的ID。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '129845258050****'."\n",
                                        ],
                                        'NodeOwnerBid' => [
                                            'description' => '实例所属的阿里云企业账号ID。',
                                            'type' => 'string',
                                            'example' => '26842****',
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
                        'errorCode' => 'MissingParam.%s',
                        'errorMessage' => 'The param of %s is missing.',
                    ],
                    [
                        'errorCode' => 'IllegalParamFormat.%s',
                        'errorMessage' => 'The param format of %s is illegal.',
                    ],
                    [
                        'errorCode' => 'IllegalParam.%s',
                        'errorMessage' => 'The param of %s is illegal.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"6FABF516-FED3-5697-BDA2-B18C5D9A****\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"DynamicCode\\": \\"IllegalParamFormat.Name\\\\n\\",\\n  \\"DynamicMessage\\": \\"The param format of Name **** is illegal.\\\\n\\",\\n  \\"AccessDeniedDetail\\": \\"Authentication is failed for ****\\\\n\\",\\n  \\"TotalCount\\": 10,\\n  \\"MaxResults\\": 20,\\n  \\"NextToken\\": \\"FFlMqGuJ10uN3l+FX/cBrGDNXUOUifNeOuAJlT4dc3vsWD6DsNSFAC2FtpeH5QOSG2WFdyRoun7gSLCm5o69YnAQ==\\",\\n  \\"EcrGrantedInstanceList\\": [\\n    {\\n      \\"GrantId\\": \\"gr-8gdelo13mi99g1****\\",\\n      \\"Status\\": \\"Active\\",\\n      \\"GmtCreate\\": \\"1669023139000\\",\\n      \\"GmtModified\\": \\"1669023139000\\",\\n      \\"EcrId\\": \\"ecr-mezk2idmsd0vx2****\\",\\n      \\"NodeId\\": \\"vbr-j6cwxhgg0s5nuephp****\\\\n\\",\\n      \\"NodeType\\": \\"VBR\\",\\n      \\"NodeRegionId\\": \\"cn-hangzhou\\",\\n      \\"NodeOwnerUid\\": 0,\\n      \\"NodeOwnerBid\\": \\"26842****\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询授权给专线网关（ECR）的网络实例',
            'summary' => '查询授权给专线网关ECR（Express Connect Router）的网络实例。',
        ],
        'ModifyExpressConnectRouterInterRegionTransitMode' => [
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'none',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'EcrId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '专线网关实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ecr-mezk2idmsd0vx2****',
                    ],
                ],
                [
                    'name' => 'TransitModeList',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '跨域转发模式列表。',
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'RegionId' => [
                                    'description' => '专线网关实例所属的地域。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'cn-hangzhou',
                                ],
                                'Mode' => [
                                    'description' => '专线网关跨域转发模式，取值：'."\n"
                                        .'- **ECMP**：负载均衡模式。'."\n"
                                        .'- **NearBy**：就近转发模式。',
                                    'type' => 'string',
                                    'required' => false,
                                    'enumValueTitles' => [
                                        'ECMP' => 'ECMP',
                                        'NearBy' => 'NearBy',
                                    ],
                                    'example' => 'ECMP',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 100,
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否只预检此次请求。取值：'."\n"
                            ."\n"
                            .'- **true**：发送检查请求，不会修改服务资源。'."\n"
                            ."\n"
                            .'- **false**（默认值）：发送正常请求。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '客户端Token，用于保证请求的幂等性。'."\n"
                            ."\n"
                            .'从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。'."\n"
                            ."\n"
                            .'> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**不一样。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'FF9nMec/RZ6H9oqFn1pvyir/SLRlxCCyHJonbGzqL01hiM6Jb3wJowdHvjCfog7ww1b9rSHMRFJnrUBfVba68TJg==',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'RpcResponse<ModifyEcrTransitModeResponse>',
                        'description' => 'RpcResponse<ModifyEcrTransitModeResponse>',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '6FABF516-FED3-5697-BDA2-B18C5D9A****',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。取值：'."\n"
                                    .'- **True**：成功。'."\n"
                                    .'- **False**：失败。',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'Code' => [
                                'description' => '判断调用是否成功。返回值为 200 表示加载成功，返回其他值表示加载失败，失败原因参见错误码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '操作返回信息。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'HttpStatusCode' => [
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'DynamicCode' => [
                                'description' => '动态错误码。',
                                'type' => 'string',
                                'example' => 'IllegalParamFormat.EcrId',
                            ],
                            'DynamicMessage' => [
                                'description' => '动态错误信息，用于替换返回参数**ErrMessage**错误信息中的`%s`。'."\n"
                                    .'> 如果**ErrMessage**返回**The Value of Input Parameter %s is not valid**，且**DynamicMessage**返回**DtsJobId**，则代表所传入的请求参数**DtsJobId**不合法。',
                                'type' => 'string',
                                'example' => 'The param format of EcrId **** is illegal.',
                            ],
                            'AccessDeniedDetail' => [
                                'description' => '访问被拒绝详细信息。',
                                'type' => 'string',
                                'example' => 'Authentication is failed for ****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'IncorrectStatus.Ecr',
                        'errorMessage' => 'Ecr Status does not allow current operation.',
                    ],
                    [
                        'errorCode' => 'OperationDenied.ForceDeleting',
                        'errorMessage' => 'The current instance is being deleted.',
                    ],
                    [
                        'errorCode' => 'IllegalParam.RegionId',
                        'errorMessage' => 'Area parameter invalid.',
                    ],
                    [
                        'errorCode' => 'IllegalParam.TransitMode',
                        'errorMessage' => 'The transmission mode parameter is invalid.',
                    ],
                    [
                        'errorCode' => 'MissingParam.%s',
                        'errorMessage' => 'The param of %s is missing.',
                    ],
                    [
                        'errorCode' => 'IllegalParamFormat.%s',
                        'errorMessage' => 'The param format of %s is illegal.',
                    ],
                    [
                        'errorCode' => 'Conflict.Lock',
                        'errorMessage' => 'There are other unfinished operations.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'ResourceNotFound.EcrId',
                        'errorMessage' => 'EcrId not found.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"6FABF516-FED3-5697-BDA2-B18C5D9A****\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"DynamicCode\\": \\"IllegalParamFormat.EcrId\\",\\n  \\"DynamicMessage\\": \\"The param format of EcrId **** is illegal.\\",\\n  \\"AccessDeniedDetail\\": \\"Authentication is failed for ****\\"\\n}","type":"json"}]',
            'title' => '修改专线网关（ECR）的跨地域转发模式',
            'summary' => '修改专线网关ECR（Express Connect Router）的跨地域转发模式。',
        ],
        'DescribeExpressConnectRouterRouteEntries' => [
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'EcrId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '专线网关实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ecr-mezk2idmsd0vx2****',
                    ],
                ],
                [
                    'name' => 'QueryRegionId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '专线网关实例所属地域。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'DestinationCidrBlock',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '要查询的路由条目的目标网段。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '172.20.47.**/**',
                    ],
                ],
                [
                    'name' => 'NexthopInstanceId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '下一跳实例ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'br-hp3u4u5f03tfuljis****',
                    ],
                ],
                [
                    'name' => 'AsPath',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '路由条目经过的AS路径。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '[64993,64512]',
                    ],
                ],
                [
                    'name' => 'Community',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'BGP路由条目携带的Community值。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '9001:9263',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否拥有下一次查询的令牌（Token）。取值：'."\n"
                            .'- 第一次查询和没有下一次查询时，均无需填写。'."\n"
                            .'- 如果有下一次查询，取值为上一次API调用返回的NextToken值。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'FF9nMec/RZ6H9oqFn1pvyir/SLRlxCCyHJonbGzqL01hiM6Jb3wJowdHvjCfog7ww1b9rSHMRFJnrUBfVba68TJg==',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '本次读取的最大数据量。取值范围：1～2147483647。默认值为10。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否只预检此次请求。取值：'."\n"
                            ."\n"
                            .'- **true**：发送检查请求，不会修改服务资源。'."\n"
                            ."\n"
                            .'- **false**（默认值）：发送正常请求。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '客户端Token，用于保证请求的幂等性。'."\n"
                            ."\n"
                            .'从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。'."\n"
                            ."\n"
                            .'> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**不一样。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '02fb3da4-130e-11e9-8e44-00****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'RpcResponse<DescribeEcrRouteResponse>',
                        'description' => 'RpcResponse<DescribeEcrRouteResponse>',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '6FABF516-FED3-5697-BDA2-B18C5D9A****',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。取值：'."\n"
                                    .'- **True**：成功。'."\n"
                                    .'- **False**：失败。',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'Code' => [
                                'description' => '判断调用是否成功。返回值为200表示加载成功，返回其他值表示加载失败，失败原因参见错误码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '实例操作返回信息。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'HttpStatusCode' => [
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'DynamicCode' => [
                                'description' => '动态错误码。',
                                'type' => 'string',
                                'example' => 'IllegalParamFormat.EcrId',
                            ],
                            'DynamicMessage' => [
                                'description' => '动态错误信息，用于替换返回参数**ErrMessage**错误信息中的`%s`。'."\n"
                                    ."\n"
                                    .'> 如果**ErrMessage**返回**The Value of Input Parameter %s is not valid**，且**DynamicMessage**返回**DtsJobId**，则代表所传入的请求参数**DtsJobId**不合法。',
                                'type' => 'string',
                                'example' => 'The param format of EcrId **** is illegal.'."\n",
                            ],
                            'AccessDeniedDetail' => [
                                'description' => '访问被拒绝详细信息。',
                                'type' => 'string',
                                'example' => 'Authentication is failed for ****'."\n",
                            ],
                            'TotalCount' => [
                                'description' => '列表总条目数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '2',
                            ],
                            'MaxResults' => [
                                'description' => '本次读取的最大数据量。取值范围：1～2147483647。默认值：10。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'NextToken' => [
                                'description' => '是否拥有下一次查询的令牌（Token）。取值：'."\n"
                                    ."\n"
                                    .'- 如果**NextToken**为空表示没有下一次查询。'."\n"
                                    .'- 如果**NextToken**有返回值，该取值表示下一次查询开始的令牌。',
                                'type' => 'string',
                                'example' => 'gAAAAABkWwFTUMNCdWC0VMYOIylA56Hx6JUfCZlk5hQ5g_fnKmetN6303tqq5UJ2ouJzyT2fDOdzb-NqyEB5jcY8Z2euX7qHDA==',
                            ],
                            'RouteEntriesList' => [
                                'description' => '路由条目列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'DestinationCidrBlock' => [
                                            'description' => '路由条目的目标网段。',
                                            'type' => 'string',
                                            'example' => '192.168.0.**/**',
                                        ],
                                        'Status' => [
                                            'description' => '专线网关实例的状态',
                                            'type' => 'string',
                                            'example' => 'ACTIVE',
                                        ],
                                        'NexthopInstanceId' => [
                                            'description' => '下一跳实例ID。',
                                            'type' => 'string',
                                            'example' => 'br-hp3u4u5f03tfuljis****'."\n",
                                        ],
                                        'NexthopInstanceRegionId' => [
                                            'description' => '下一跳实例所属的地域。',
                                            'type' => 'string',
                                            'example' => 'cn-hangzhou',
                                        ],
                                        'AsPath' => [
                                            'description' => '路由条目经过的AS路径。',
                                            'type' => 'string',
                                            'example' => '[64993,64512]',
                                        ],
                                        'Community' => [
                                            'description' => 'BGP路由条目携带的Community值。',
                                            'type' => 'string',
                                            'example' => '9001:9263',
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
                        'errorCode' => 'OperationFailed.CallingEcYaochi',
                        'errorMessage' => 'EC Yaochi component returned an error.',
                    ],
                    [
                        'errorCode' => 'IllegalParamFormat.DestinationCidrBlock',
                        'errorMessage' => 'The format of the specified destination Cidr route parameter is incorrect.',
                    ],
                    [
                        'errorCode' => 'MissingParam.%s',
                        'errorMessage' => 'The param of %s is missing.',
                    ],
                    [
                        'errorCode' => 'IllegalParamFormat.%s',
                        'errorMessage' => 'The param format of %s is illegal.',
                    ],
                    [
                        'errorCode' => 'IllegalParam.%s',
                        'errorMessage' => 'The param of %s is illegal.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'ResourceNotFound.EcrId',
                        'errorMessage' => 'EcrId not found.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"6FABF516-FED3-5697-BDA2-B18C5D9A****\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"DynamicCode\\": \\"IllegalParamFormat.EcrId\\",\\n  \\"DynamicMessage\\": \\"The param format of EcrId **** is illegal.\\\\n\\",\\n  \\"AccessDeniedDetail\\": \\"Authentication is failed for ****\\\\n\\",\\n  \\"TotalCount\\": 2,\\n  \\"MaxResults\\": 10,\\n  \\"NextToken\\": \\"gAAAAABkWwFTUMNCdWC0VMYOIylA56Hx6JUfCZlk5hQ5g_fnKmetN6303tqq5UJ2ouJzyT2fDOdzb-NqyEB5jcY8Z2euX7qHDA==\\",\\n  \\"RouteEntriesList\\": [\\n    {\\n      \\"DestinationCidrBlock\\": \\"192.168.0.**/**\\",\\n      \\"Status\\": \\"ACTIVE\\",\\n      \\"NexthopInstanceId\\": \\"br-hp3u4u5f03tfuljis****\\\\n\\",\\n      \\"NexthopInstanceRegionId\\": \\"cn-hangzhou\\",\\n      \\"AsPath\\": \\"[64993,64512]\\",\\n      \\"Community\\": \\"9001:9263\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询专线网关（ECR）的路由条目',
            'summary' => '查询专线网关ECR（Express Connect Router）路由条目。',
        ],
        'CreateExpressConnectRouterAssociation' => [
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'EcrId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '专线网关实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ecr-mezk2idmsd0vx2****',
                    ],
                ],
                [
                    'name' => 'AssociationRegionId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '关联资源所属的地域。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'TransitRouterOwnerId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '转发路由器实例所属阿里云账号（主账号）ID。默认值为当前登录的阿里云账号ID。'."\n"
                            ."\n"
                            .'> 如果您要加载跨账号的网络实例，本参数必填。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '189159362009****',
                    ],
                ],
                [
                    'name' => 'TransitRouterId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '转发路由器ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'tr-2ze4i71c6be454e2l****',
                    ],
                ],
                [
                    'name' => 'CenId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '云企业网实例ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cen-of3o1the3i4gwb****',
                    ],
                ],
                [
                    'name' => 'VpcOwnerId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'VPC实例所属阿里云账号（主账号）ID。默认为当前登录的阿里云账号ID。'."\n"
                            ."\n"
                            .'> 如果您要加载跨账号的网络实例，本参数必填。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '132193271328****',
                    ],
                ],
                [
                    'name' => 'VpcId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'VPC实例ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'vpc-bp1h37fchc6jmfyln****',
                    ],
                ],
                [
                    'name' => 'AllowedPrefixes',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '允许的前缀路由列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '允许的前缀路由。',
                            'type' => 'string',
                            'required' => false,
                            'example' => '192.0.20.**/**',
                        ],
                        'required' => false,
                        'maxItems' => 10000,
                    ],
                ],
                [
                    'name' => 'CreateAttachment',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'ECR绑定TR时是否发起关联。取值：'."\n"
                            ."\n"
                            .'- **true**：不需要在转发路由器侧发起关联。'."\n"
                            .'- **false**：需要在转发路由器侧发起关联。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否只预检此次请求。取值：'."\n"
                            ."\n"
                            .'- **true**：发送检查请求，不会修改服务资源。'."\n"
                            ."\n"
                            .'- **false**（默认值）：发送正常请求。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '客户端Token，用于保证请求的幂等性。'."\n"
                            ."\n"
                            .'从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。'."\n"
                            ."\n"
                            .'> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**不一样。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '02fb3da4-130e-11e9-8e44-00****	'."\n",
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'RpcResponse<CreateAssociationResponse>',
                        'description' => 'RpcResponse<CreateAssociationResponse>',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '05130E79-588D-5C40-A718-C4863A59****',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。取值：'."\n"
                                    ."\n"
                                    .'- **True**：成功。'."\n"
                                    .'- **False**：失败。',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'Code' => [
                                'description' => '判断调用是否成功。返回值为200表示加载成功，返回其他值表示加载失败，失败原因参见错误码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '操作返回信息。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'HttpStatusCode' => [
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'DynamicCode' => [
                                'description' => '动态错误码。',
                                'type' => 'string',
                                'example' => 'IllegalParamFormat.EcrId'."\n",
                            ],
                            'DynamicMessage' => [
                                'description' => '动态错误信息，用于替换返回参数**ErrMessage**错误信息中的`%s`。'."\n"
                                    ."\n"
                                    .'> 如果**ErrMessage**返回**The Value of Input Parameter %s is not valid**，且**DynamicMessage**返回**DtsJobId**，则表示所传入的请求参数**DtsJobId**不合法。',
                                'type' => 'string',
                                'example' => 'The param format of EcrId **** is illegal.'."\n",
                            ],
                            'AccessDeniedDetail' => [
                                'description' => '访问被拒绝详细信息。',
                                'type' => 'string',
                                'example' => 'Authentication is failed for ****'."\n",
                            ],
                            'AssociationId' => [
                                'description' => '专线网关与VPC或TR的关联ID。',
                                'type' => 'string',
                                'example' => 'ecr-assoc-9p2qxx5phpca2m****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'IncorrectStatus.Ecr',
                        'errorMessage' => 'Ecr Status does not allow current operation.',
                    ],
                    [
                        'errorCode' => 'OperationDenied.ForceDeleting',
                        'errorMessage' => 'The current instance is being deleted.',
                    ],
                    [
                        'errorCode' => 'UnsupportedRegion',
                        'errorMessage' => 'Feature not supported in specified region.',
                    ],
                    [
                        'errorCode' => 'QuotaExceeded.VpcCountPerEcr',
                        'errorMessage' => 'The number of VPC bound to the ECR exceeds the quota.',
                    ],
                    [
                        'errorCode' => 'QuotaExceeded.TrCountPerEcr',
                        'errorMessage' => 'The number of TR bound to the ECR exceeds the quota.',
                    ],
                    [
                        'errorCode' => 'IllegalParamFormat.AllowedPrefixes',
                        'errorMessage' => 'The prefix parameter format is invalid. Procedure.',
                    ],
                    [
                        'errorCode' => 'OperationDenied.NotGrantedByNodeOwner',
                        'errorMessage' => 'The node owner is not authorized.',
                    ],
                    [
                        'errorCode' => 'OperationFailed.CdtNotOpened',
                        'errorMessage' => 'The Cdt function is disabled.',
                    ],
                    [
                        'errorCode' => 'OperationFailed.CdtCrossBoarderNotOpened',
                        'errorMessage' => 'The Cdt cross-border transmission function is disabled.',
                    ],
                    [
                        'errorCode' => 'OperationFailed.CrossBorderNotAllowed',
                        'errorMessage' => 'There is no qualification for creating cross-border links.',
                    ],
                    [
                        'errorCode' => 'OperationFailed.RejectedByEcYaochi',
                        'errorMessage' => 'The request was rejected by Ec Yaochi.',
                    ],
                    [
                        'errorCode' => 'OperationFailed.RejectedByVpcYaochi',
                        'errorMessage' => 'Vpc Yaochi has rejected your current request.',
                    ],
                    [
                        'errorCode' => 'OperationFailed.RejectedByCenYaochi',
                        'errorMessage' => 'Cen Yaochi has rejected your current request.',
                    ],
                    [
                        'errorCode' => 'ResourceNotFound.CenId',
                        'errorMessage' => 'CenId not found.',
                    ],
                    [
                        'errorCode' => 'ResourceNotFound.TrId',
                        'errorMessage' => 'TRId not found.',
                    ],
                    [
                        'errorCode' => 'Conflict.ASNOfVBR',
                        'errorMessage' => 'ASN already used by other VBR.',
                    ],
                    [
                        'errorCode' => 'MissingParam.%s',
                        'errorMessage' => 'The param of %s is missing.',
                    ],
                    [
                        'errorCode' => 'IllegalParamFormat.%s',
                        'errorMessage' => 'The param format of %s is illegal.',
                    ],
                    [
                        'errorCode' => 'IllegalParamFormat.CenId',
                        'errorMessage' => 'The format of the entered Cen instance ID is incorrect.',
                    ],
                    [
                        'errorCode' => 'OperationDenied.CrossBidAssociating',
                        'errorMessage' => 'Cross-border binding of resources is subject to compliance constraints.',
                    ],
                    [
                        'errorCode' => 'ExclusiveParam.TransitRouterIdAndVpcId',
                        'errorMessage' => 'A private network instance cannot be bound to a forwarding router instance at the same time.',
                    ],
                    [
                        'errorCode' => 'IllegalParamSize.AllowedPrefixes',
                        'errorMessage' => 'The number of prefix routes exceeded the quota.',
                    ],
                    [
                        'errorCode' => 'OperationDenied.CrossAccountAttaching',
                        'errorMessage' => 'If the forwarding router is bound to another account, perform this operation on the same account.',
                    ],
                    [
                        'errorCode' => 'OperationDenied.AttachmentInCurrentRegionExisted',
                        'errorMessage' => 'Only one forwarding router can be bound to an area.',
                    ],
                    [
                        'errorCode' => 'Conflict.Lock',
                        'errorMessage' => 'There are other unfinished operations.',
                    ],
                    [
                        'errorCode' => 'OperationFailed.CallingVpcYaochi',
                        'errorMessage' => 'The system is abnormal. Please try again later.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'ResourceNotFound.EcrId',
                        'errorMessage' => 'EcrId not found.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"05130E79-588D-5C40-A718-C4863A59****\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"DynamicCode\\": \\"IllegalParamFormat.EcrId\\\\n\\",\\n  \\"DynamicMessage\\": \\"The param format of EcrId **** is illegal.\\\\n\\",\\n  \\"AccessDeniedDetail\\": \\"Authentication is failed for ****\\\\n\\",\\n  \\"AssociationId\\": \\"ecr-assoc-9p2qxx5phpca2m****\\"\\n}","type":"json"}]',
            'title' => '专线网关（ECR）关联资源',
            'summary' => '专线网关ECR（Express Connect Router）关联专有网络（VPC）或者转发路由器（TR）。',
        ],
        'CreateExpressConnectRouter' => [
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
                'operationType' => 'create',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'Name',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '专线网关实例的名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '专线网关实例的描述。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '专线网关实例所属的资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfmvvajg5q****',
                    ],
                ],
                [
                    'name' => 'AlibabaSideAsn',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '专线网关实例的ASN。可取值为45104（默认值），64512~65534和4200000000~4294967294，其中65025为阿里云保留值。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '45104',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否只预检此次请求。取值：'."\n"
                            ."\n"
                            .'- **true**：发送检查请求，不会修改服务资源。'."\n"
                            ."\n"
                            .'- **false**（默认值）：发送正常请求。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '客户端Token，用于保证请求的幂等性。'."\n"
                            ."\n"
                            .'从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。'."\n"
                            ."\n"
                            .'> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**不一样。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '02fb3da4-130e-11e9-8e44-00****	',
                    ],
                ],
                [
                    'name' => 'Tags',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'Value' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 100,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'RpcResponse<CreateEcrResponse>',
                        'description' => 'RpcResponse<CreateEcrResponse>',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '6FABF516-FED3-5697-BDA2-B18C5D9A****'."\n",
                            ],
                            'Success' => [
                                'description' => '创建ECR实例是否成功。取值：'."\n"
                                    .'- **true**：成功。'."\n"
                                    .'- **false**：失败。',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'Code' => [
                                'description' => '判断创建ECR实例是否成功。返回值为200表示创建成功，返回其他值表示创建失败，失败原因参见错误码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '操作返回信息。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'HttpStatusCode' => [
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'DynamicCode' => [
                                'description' => '动态错误码。',
                                'type' => 'string',
                                'example' => 'IllegalParamFormat.Name',
                            ],
                            'DynamicMessage' => [
                                'description' => '动态错误信息，用于替换返回参数**ErrMessage**错误信息中的`%s`。'."\n"
                                    .'> 如果**ErrMessage**返回**The Value of Input Parameter %s is not valid**，且**DynamicMessage**返回**DtsJobId**，则代表所传入的请求参数**DtsJobId**不合法。',
                                'type' => 'string',
                                'example' => 'The param format of Name **** is illegal.',
                            ],
                            'AccessDeniedDetail' => [
                                'description' => '访问被拒绝详细信息。',
                                'type' => 'string',
                                'example' => 'Authentication is failed for ****',
                            ],
                            'EcrId' => [
                                'description' => '专线网关实例ID。',
                                'type' => 'string',
                                'example' => 'ecr-fu8rszhgv7623c****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'IllegalParamFormat.%s',
                        'errorMessage' => 'The param format of %s is illegal.',
                    ],
                    [
                        'errorCode' => 'OperationFailed.UserNotInWhiteList',
                        'errorMessage' => 'The current user is not in the whitelist.',
                    ],
                    [
                        'errorCode' => 'QuotaExceeded.EcrCountPerUser',
                        'errorMessage' => 'ECR Quota Exceeded.',
                    ],
                    [
                        'errorCode' => 'Conflict.ASNOfECR',
                        'errorMessage' => 'ASN already used by other ECR.',
                    ],
                    [
                        'errorCode' => 'MissingParam.%s',
                        'errorMessage' => 'The param of %s is missing.',
                    ],
                    [
                        'errorCode' => 'IllegalParam.AlibabaSideAsn',
                        'errorMessage' => 'The entered Bgp Asn is incorrect.',
                    ],
                    [
                        'errorCode' => 'Conflict.Lock',
                        'errorMessage' => 'There are other unfinished operations.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"6FABF516-FED3-5697-BDA2-B18C5D9A****\\\\n\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"DynamicCode\\": \\"IllegalParamFormat.Name\\",\\n  \\"DynamicMessage\\": \\"The param format of Name **** is illegal.\\",\\n  \\"AccessDeniedDetail\\": \\"Authentication is failed for ****\\",\\n  \\"EcrId\\": \\"ecr-fu8rszhgv7623c****\\"\\n}","type":"json"}]',
            'title' => '新建专线网关（ECR）',
            'summary' => '新建专线网关ECR（Express Connect Router）。',
            'description' => '创建专线网关实例后，专线网关的实例状态为**Active**。',
        ],
        'DisableExpressConnectRouterRouteEntries' => [
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'EcrId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '专线网关实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ecr-mezk2idmsd0vx2****',
                    ],
                ],
                [
                    'name' => 'DestinationCidrBlock',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '网关路由表中路由条目的目标网段。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '10.153.32.**/**',
                    ],
                ],
                [
                    'name' => 'NexthopInstanceId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '下一跳实例ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'tr-hp3u4u5f03tfuljis****',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否只预检此次请求。取值：'."\n"
                            ."\n"
                            .'- **true**：发送检查请求，不会修改服务资源。'."\n"
                            ."\n"
                            .'- **false**（默认值）：发送正常请求。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '客户端Token，用于保证请求的幂等性。'."\n"
                            ."\n"
                            .'从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。'."\n"
                            ."\n"
                            .'> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**不一样。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'FF9nMec/RZ6H9oqFn1pvyir/SLRlxCCyHJonbGzqL01hiM6Jb3wJowdHvjCfog7ww1b9rSHMRFJnrUBfVba68TJg==',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'RpcResponse<DisableEcrRouteResponse>',
                        'description' => 'RpcResponse<DisableEcrRouteResponse>',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '6FABF516-FED3-5697-BDA2-B18C5D9A****',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。取值：'."\n"
                                    .'- **True**：成功。'."\n"
                                    .'- **False**：失败。',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'Code' => [
                                'description' => '判断调用是否成功。返回值为200表示加载成功，返回其他值表示加载失败，失败原因参见错误码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '操作返回信息。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'HttpStatusCode' => [
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'DynamicCode' => [
                                'description' => '动态错误码。',
                                'type' => 'string',
                                'example' => 'IllegalParamFormat.EcrId',
                            ],
                            'DynamicMessage' => [
                                'description' => '动态错误信息，用于替换返回参数**ErrMessage**错误信息中的`%s`。'."\n"
                                    .'> 如果**ErrMessage**返回**The Value of Input Parameter %s is not valid**，且**DynamicMessage**返回**DtsJobId**，则代表所传入的请求参数**DtsJobId**不合法。',
                                'type' => 'string',
                                'example' => 'The param format of EcrId **** is illegal.',
                            ],
                            'AccessDeniedDetail' => [
                                'description' => '访问被拒绝详细信息。',
                                'type' => 'string',
                                'example' => 'Authentication is failed for ****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'ResourceNotFound.NexthopInstanceId',
                        'errorMessage' => 'The next hop instance does not exist.',
                    ],
                    [
                        'errorCode' => 'OperationFailed.CallingEcYaochi',
                        'errorMessage' => 'EC Yaochi component returned an error.',
                    ],
                    [
                        'errorCode' => 'IllegalParamFormat.DestinationCidrBlock',
                        'errorMessage' => 'The format of the specified destination Cidr route parameter is incorrect.',
                    ],
                    [
                        'errorCode' => 'MissingParam.%s',
                        'errorMessage' => 'The param of %s is missing.',
                    ],
                    [
                        'errorCode' => 'IllegalParamFormat.%s',
                        'errorMessage' => 'The param format of %s is illegal.',
                    ],
                    [
                        'errorCode' => 'Conflict.Lock',
                        'errorMessage' => 'There are other unfinished operations.',
                    ],
                    [
                        'errorCode' => 'ResourceInCreating.NexthopInstanceId',
                        'errorMessage' => 'The next hop instance is being created.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'ResourceNotFound.EcrId',
                        'errorMessage' => 'EcrId not found.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"6FABF516-FED3-5697-BDA2-B18C5D9A****\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"DynamicCode\\": \\"IllegalParamFormat.EcrId\\",\\n  \\"DynamicMessage\\": \\"The param format of EcrId **** is illegal.\\",\\n  \\"AccessDeniedDetail\\": \\"Authentication is failed for ****\\"\\n}","type":"json"}]',
            'title' => '禁用专线网关（ECR）路由项',
            'summary' => '禁用专线网关ECR（Express Connect Router）路由项。',
        ],
        'DeleteExpressConnectRouter' => [
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
                'operationType' => 'delete',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'EcrId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '专线网关实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ecr-fu8rszhgv7623c****'."\n",
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否只预检此次请求。取值：'."\n"
                            ."\n"
                            .'- **true**：发送检查请求，不会修改服务资源。'."\n"
                            ."\n"
                            .'- **false**（默认值）：发送正常请求。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '客户端Token，用于保证请求的幂等性。'."\n"
                            ."\n"
                            .'从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。'."\n"
                            ."\n"
                            .'> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**不一样。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '02fb3da4-130e-11e9-8e44-00****	'."\n",
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'RpcResponse<DeleteEcrResponse>',
                        'description' => '返回数据结构体。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '6FABF516-FED3-5697-BDA2-B18C5D9A****'."\n",
                            ],
                            'Success' => [
                                'description' => '删除ECR实例是否成功。取值：'."\n"
                                    .'- **True**：成功。'."\n"
                                    .'- **False**：失败。',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'Code' => [
                                'description' => '判断删除ECR实例是否成功。返回值为200表示创建成功，返回其他值表示创建失败，失败原因参见错误码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '操作返回信息。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'HttpStatusCode' => [
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'DynamicCode' => [
                                'description' => '动态错误码。',
                                'type' => 'string',
                                'example' => 'IllegalParamFormat.EcrId'."\n",
                            ],
                            'DynamicMessage' => [
                                'description' => '动态错误信息，用于替换返回参数**ErrMessage**错误信息中的`%s`。'."\n"
                                    .'>  如果**ErrMessage**返回**The Value of Input Parameter %s is not valid**，且**DynamicMessage**返回**DtsJobId**，则代表所传入的请求参数**DtsJobId**不合法。',
                                'type' => 'string',
                                'example' => 'The param format of EcrId **** is illegal.'."\n",
                            ],
                            'AccessDeniedDetail' => [
                                'description' => '访问被拒绝详细信息。',
                                'type' => 'string',
                                'example' => 'Authentication is failed for ****'."\n",
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'IncorrectStatus.Ecr',
                        'errorMessage' => 'Ecr Status does not allow current operation.',
                    ],
                    [
                        'errorCode' => 'ResourceInUse.Ecr',
                        'errorMessage' => 'The express connect router is currently in use.',
                    ],
                    [
                        'errorCode' => 'MissingParam.%s',
                        'errorMessage' => 'The param of %s is missing.',
                    ],
                    [
                        'errorCode' => 'IllegalParamFormat.%s',
                        'errorMessage' => 'The param format of %s is illegal.',
                    ],
                    [
                        'errorCode' => 'Conflict.Lock',
                        'errorMessage' => 'There are other unfinished operations.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'ResourceNotFound.EcrId',
                        'errorMessage' => 'EcrId not found.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"6FABF516-FED3-5697-BDA2-B18C5D9A****\\\\n\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"DynamicCode\\": \\"IllegalParamFormat.EcrId\\\\n\\",\\n  \\"DynamicMessage\\": \\"The param format of EcrId **** is illegal.\\\\n\\",\\n  \\"AccessDeniedDetail\\": \\"Authentication is failed for ****\\\\n\\"\\n}","type":"json"}]',
            'title' => '删除专线网关（ECR）',
            'summary' => '删除专线网关ECR（Express Connect Router）。',
            'description' => '在调用DeleteExpressConnectRouter接口删除ECR实例之前，请注意：'."\n"
                ."\n"
                .'- 删除专线网关实例前，必须删除专线网关实例上所关联的资源。'."\n"
                ."\n"
                .'- 只能删除**Active**状态的专线网关实例。',
        ],
        'ModifyExpressConnectRouter' => [
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'EcrId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '专线网关实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ecr-fu8rszhgv7623c****'."\n",
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '专线网关实例的名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test'."\n",
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '专线网关实例的描述。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test'."\n",
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否只预检此次请求。取值：'."\n"
                            ."\n"
                            .'- **true**：发送检查请求，不会修改服务资源。'."\n"
                            ."\n"
                            .'- **false**（默认值）：发送正常请求。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '客户端Token，用于保证请求的幂等性。'."\n"
                            ."\n"
                            .'从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。'."\n"
                            ."\n"
                            .'> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**不一样。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '02fb3da4-130e-11e9-8e44-00****	'."\n",
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'RpcResponse<ModifyEcrResponse>',
                        'description' => 'RpcResponse<ModifyEcrResponse>',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '6FABF516-FED3-5697-BDA2-B18C5D9A****'."\n",
                            ],
                            'Success' => [
                                'description' => '修改专线网关实例是否成功。取值：'."\n"
                                    .'- **True**：成功。'."\n"
                                    .'- **False**：失败。',
                                'type' => 'boolean',
                                'example' => 'True'."\n",
                            ],
                            'Code' => [
                                'description' => '判断调用是否成功。返回值为200表示加载成功，返回其他值表示加载失败，失败原因参见错误码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '操作返回信息。',
                                'type' => 'string',
                                'example' => 'OK'."\n",
                            ],
                            'HttpStatusCode' => [
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'DynamicCode' => [
                                'description' => '动态错误码。',
                                'type' => 'string',
                                'example' => 'IllegalParamFormat.Name'."\n",
                            ],
                            'DynamicMessage' => [
                                'description' => '动态错误信息，用于替换返回参数**ErrMessage**错误信息中的`%s`。'."\n"
                                    ."\n"
                                    .'> 如果**ErrMessage**返回**The Value of Input Parameter %s is not valid**，且**DynamicMessage**返回**DtsJobId**，则代表所传入的请求参数**DtsJobId**不合法。',
                                'type' => 'string',
                                'example' => 'The param format of Name **** is illegal.'."\n",
                            ],
                            'AccessDeniedDetail' => [
                                'description' => '访问被拒绝详细信息。',
                                'type' => 'string',
                                'example' => 'Authentication is failed for ****'."\n",
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'IncorrectStatus.Ecr',
                        'errorMessage' => 'Ecr Status does not allow current operation.',
                    ],
                    [
                        'errorCode' => 'OperationDenied.ForceDeleting',
                        'errorMessage' => 'The current instance is being deleted.',
                    ],
                    [
                        'errorCode' => 'MissingParam.%s',
                        'errorMessage' => 'The param of %s is missing.',
                    ],
                    [
                        'errorCode' => 'IllegalParamFormat.%s',
                        'errorMessage' => 'The param format of %s is illegal.',
                    ],
                    [
                        'errorCode' => 'Conflict.Lock',
                        'errorMessage' => 'There are other unfinished operations.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'ResourceNotFound.EcrId',
                        'errorMessage' => 'EcrId not found.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"6FABF516-FED3-5697-BDA2-B18C5D9A****\\\\n\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"OK\\\\n\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"DynamicCode\\": \\"IllegalParamFormat.Name\\\\n\\",\\n  \\"DynamicMessage\\": \\"The param format of Name **** is illegal.\\\\n\\",\\n  \\"AccessDeniedDetail\\": \\"Authentication is failed for ****\\\\n\\"\\n}","type":"json"}]',
            'title' => '修改专线网关（ECR）属性',
            'summary' => '修改专线网关ECR（Express Connect Router）的名称等属性。',
            'description' => '只能修改**Active**状态的专线网关实例。',
        ],
        'ForceDeleteExpressConnectRouter' => [
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'none',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'DryRun',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否只预检此次请求。取值：'."\n"
                            ."\n"
                            .'- **true**：发送检查请求，不会修改服务资源。'."\n"
                            ."\n"
                            .'- **false**（默认值）：发送正常请求。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'EcrId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '专线网关实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ecr-fu8rszhgv7623c****'."\n",
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '客户端Token，用于保证请求的幂等性。'."\n"
                            ."\n"
                            .'从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。'."\n"
                            ."\n"
                            .'> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**不一样。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '02fb3da4-130e-11e9-8e44-00****	'."\n",
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'RpcResponse<ForceDeleteEcrResponse>',
                        'description' => 'RpcResponse<ForceDeleteEcrResponse>',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '6FABF516-FED3-5697-BDA2-B18C5D9A****'."\n",
                            ],
                            'Success' => [
                                'description' => '是否调用成功。取值：'."\n"
                                    ."\n"
                                    .'- **True**：成功。'."\n"
                                    .'- **False**：失败。',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'Code' => [
                                'description' => '判断调用是否成功。返回值为 200 表示加载成功，返回其他值表示加载失败，失败原因参见错误码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '操作返回信息。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'HttpStatusCode' => [
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'DynamicCode' => [
                                'description' => '动态错误码。',
                                'type' => 'string',
                                'example' => 'IllegalParamFormat.EcrId'."\n",
                            ],
                            'DynamicMessage' => [
                                'description' => '动态错误信息，用于替换返回参数**ErrMessage**错误信息中的`%s`。'."\n"
                                    ."\n"
                                    .'> 如果**ErrMessage**返回**The Value of Input Parameter %s is not valid**，且**DynamicMessage**返回**DtsJobId**，则代表所传入的请求参数**DtsJobId**不合法。',
                                'type' => 'string',
                                'example' => 'The param format of EcrId **** is illegal.'."\n",
                            ],
                            'AccessDeniedDetail' => [
                                'description' => '访问被拒绝详细信息。',
                                'type' => 'string',
                                'example' => 'Authentication is failed for ****'."\n",
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'IncorrectStatus.Ecr',
                        'errorMessage' => 'Ecr Status does not allow current operation.',
                    ],
                    [
                        'errorCode' => 'MissingParam.%s',
                        'errorMessage' => 'The param of %s is missing.',
                    ],
                    [
                        'errorCode' => 'IllegalParamFormat.%s',
                        'errorMessage' => 'The param format of %s is illegal.',
                    ],
                    [
                        'errorCode' => 'Conflict.Lock',
                        'errorMessage' => 'There are other unfinished operations.',
                    ],
                    [
                        'errorCode' => 'OperationFailed.UsedInRouteEntryNextHop',
                        'errorMessage' => 'The VPC also has a static route pointing to the ECR, and it is not allowed to disassociate the ECR.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'ResourceNotFound.EcrId',
                        'errorMessage' => 'EcrId not found.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"6FABF516-FED3-5697-BDA2-B18C5D9A****\\\\n\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"DynamicCode\\": \\"IllegalParamFormat.EcrId\\\\n\\",\\n  \\"DynamicMessage\\": \\"The param format of EcrId **** is illegal.\\\\n\\",\\n  \\"AccessDeniedDetail\\": \\"Authentication is failed for ****\\\\n\\"\\n}","type":"json"}]',
            'title' => '删除专线网关（ECR）及关联关系',
            'summary' => '删除专线网关ECR（Express Connect Router），并解绑相关联的专有网络（VPC），转发路由器（TR）和边界路由器（VBR）。',
            'description' => '- 强制删除专线网关实例，会将绑定的资源一次性全部删除，请确认删除后不影响业务稳定性。'."\n"
                ."\n"
                .'- 只能删除**Active**状态的专线网关实例。',
        ],
        'EnableExpressConnectRouterRouteEntries' => [
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
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'EcrId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '专线网关实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ecr-mezk2idmsd0vx2****',
                    ],
                ],
                [
                    'name' => 'DestinationCidrBlock',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '网关路由表中路由条目的目标网段。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '10.153.32.**/**',
                    ],
                ],
                [
                    'name' => 'NexthopInstanceId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '下一跳实例ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'tr-hp3u4u5f03tfuljis****',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否只预检此次请求。取值：'."\n"
                            ."\n"
                            .'- **true**：发送检查请求，不会修改服务资源。'."\n"
                            ."\n"
                            .'- **false**（默认值）：发送正常请求。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '客户端Token，用于保证请求的幂等性。'."\n"
                            ."\n"
                            .'从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。'."\n"
                            ."\n"
                            .'> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**不一样。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'FF9nMec/RZ6H9oqFn1pvyir/SLRlxCCyHJonbGzqL01hiM6Jb3wJowdHvjCfog7ww1b9rSHMRFJnrUBfVba68TJg=='."\n",
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'RpcResponse<EnableEcrRouteResponse>',
                        'description' => 'RpcResponse<EnableEcrRouteResponse>',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '6FABF516-FED3-5697-BDA2-B18C5D9A****',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。取值：'."\n"
                                    ."\n"
                                    .'- **True**：成功。'."\n"
                                    .'- **False**：失败。',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'Code' => [
                                'description' => '判断调用是否成功。返回值为200表示加载成功，返回其他值表示加载失败，失败原因参见错误码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '操作返回信息。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'HttpStatusCode' => [
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'DynamicCode' => [
                                'description' => '动态错误码。',
                                'type' => 'string',
                                'example' => 'IllegalParamFormat.EcrId',
                            ],
                            'DynamicMessage' => [
                                'description' => '动态错误信息，用于替换返回参数**ErrMessage**错误信息中的`%s`。'."\n"
                                    .'> 如果**ErrMessage**返回**The Value of Input Parameter %s is not valid**，且**DynamicMessage**返回**DtsJobId**，则代表所传入的请求参数**DtsJobId**不合法。',
                                'type' => 'string',
                                'example' => 'The param format of EcrId **** is illegal.',
                            ],
                            'AccessDeniedDetail' => [
                                'description' => '访问被拒绝详细信息。',
                                'type' => 'string',
                                'example' => 'Authentication is failed for ****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'ResourceNotFound.NexthopInstanceId',
                        'errorMessage' => 'The next hop instance does not exist.',
                    ],
                    [
                        'errorCode' => 'OperationFailed.CallingEcYaochi',
                        'errorMessage' => 'EC Yaochi component returned an error.',
                    ],
                    [
                        'errorCode' => 'IllegalParamFormat.DestinationCidrBlock',
                        'errorMessage' => 'The format of the specified destination Cidr route parameter is incorrect.',
                    ],
                    [
                        'errorCode' => 'MissingParam.%s',
                        'errorMessage' => 'The param of %s is missing.',
                    ],
                    [
                        'errorCode' => 'IllegalParamFormat.%s',
                        'errorMessage' => 'The param format of %s is illegal.',
                    ],
                    [
                        'errorCode' => 'Conflict.Lock',
                        'errorMessage' => 'There are other unfinished operations.',
                    ],
                    [
                        'errorCode' => 'ResourceInCreating.NexthopInstanceId',
                        'errorMessage' => 'The next hop instance is being created.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'ResourceNotFound.EcrId',
                        'errorMessage' => 'EcrId not found.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"6FABF516-FED3-5697-BDA2-B18C5D9A****\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"DynamicCode\\": \\"IllegalParamFormat.EcrId\\",\\n  \\"DynamicMessage\\": \\"The param format of EcrId **** is illegal.\\",\\n  \\"AccessDeniedDetail\\": \\"Authentication is failed for ****\\"\\n}","type":"json"}]',
            'title' => '启用专线网关（ECR）路由项',
            'summary' => '启用专线网关ECR（Express Connect Router）路由条目。',
        ],
        'CheckAddRegionToExpressConnectRouter' => [
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'EcrId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '专线网关实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ecr-fu8rszhgv7623c****',
                    ],
                ],
                [
                    'name' => 'FreshRegionId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '指定专线网关功能是否开通云数据传输服务的地域。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否只预检此次请求。取值：'."\n"
                            ."\n"
                            .'- true：发送检查请求，不会修改服务资源。'."\n"
                            ."\n"
                            .'- false（默认值）：发送正常请求。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '客户端Token，用于保证请求的幂等性。'."\n"
                            ."\n"
                            .'从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。'."\n"
                            ."\n"
                            .'> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**不一样。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '02fb3da4-130e-11e9-8e44-00****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'RpcResponse<CheckAssociationCreationResponse>',
                        'description' => 'RpcResponse<CheckAssociationCreationResponse>',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '6FABF516-FED3-5697-BDA2-B18C5D9A****',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。取值：'."\n"
                                    ."\n"
                                    .'- **True**：成功。'."\n"
                                    .'- **False**：失败。',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'Code' => [
                                'description' => '判断调用是否成功。返回值为200表示加载成功，返回其他值表示加载失败，失败原因参见错误码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '操作返回信息。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'HttpStatusCode' => [
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'DynamicCode' => [
                                'description' => '动态错误码。',
                                'type' => 'string',
                                'example' => 'IllegalParamFormat.EcrId',
                            ],
                            'DynamicMessage' => [
                                'description' => '动态错误信息，用于替换返回参数**ErrMessage**错误信息中的`%s`。'."\n"
                                    ."\n"
                                    .'> 如果**ErrMessage**返回**The Value of Input Parameter %s is not valid**，且**DynamicMessage**返回**DtsInstanceId**，则代表所传入的请求参数**DtsInstanceId**不合法。',
                                'type' => 'string',
                                'example' => 'The param format of EcrId **** is illegal.',
                            ],
                            'AccessDeniedDetail' => [
                                'description' => '访问被拒绝详细信息。',
                                'type' => 'string',
                                'example' => 'Authentication is failed for ****',
                            ],
                            'AnyInterRegionLink' => [
                                'description' => '专线网关实例是否存在中国内地跨地域。取值：'."\n"
                                    .'- **true**：是。'."\n"
                                    .'- **false**：否。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'AnyCrossBorderLink' => [
                                'description' => '专线网关实例是否存在中国内地与中国境外跨境。取值：'."\n"
                                    .'- **true**：是。'."\n"
                                    .'- **false**：否。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'IsCdtInterRegionEnabled' => [
                                'description' => '专线网关实例所属账号是否开通云数据传输（CDT）服务。取值：'."\n"
                                    .'- **true**：是。'."\n"
                                    .'- **false**：否。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'IsCdtCrossBorderEnabled' => [
                                'description' => '专线网关实例所属账号是否开通跨境云数据传输（CDT）服务。取值：'."\n"
                                    .'- **true**：是。'."\n"
                                    .'- **false**：否。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'IsUserAllowedToCreateCrossBorderLink' => [
                                'description' => '专线网关实例所属账号是否允许创建跨境。取值：'."\n"
                                    .'- **true**：是。'."\n"
                                    .'- **false**：否。',
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
                        'errorCode' => 'UnsupportedRegion',
                        'errorMessage' => 'Feature not supported in specified region.',
                    ],
                    [
                        'errorCode' => 'MissingParam.%s',
                        'errorMessage' => 'The param of %s is missing.',
                    ],
                    [
                        'errorCode' => 'IllegalParamFormat.%s',
                        'errorMessage' => 'The param format of %s is illegal.',
                    ],
                    [
                        'errorCode' => 'Conflict.Lock',
                        'errorMessage' => 'There are other unfinished operations.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'ResourceNotFound.EcrId',
                        'errorMessage' => 'EcrId not found.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"6FABF516-FED3-5697-BDA2-B18C5D9A****\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"DynamicCode\\": \\"IllegalParamFormat.EcrId\\",\\n  \\"DynamicMessage\\": \\"The param format of EcrId **** is illegal.\\",\\n  \\"AccessDeniedDetail\\": \\"Authentication is failed for ****\\",\\n  \\"AnyInterRegionLink\\": true,\\n  \\"AnyCrossBorderLink\\": true,\\n  \\"IsCdtInterRegionEnabled\\": true,\\n  \\"IsCdtCrossBorderEnabled\\": true,\\n  \\"IsUserAllowedToCreateCrossBorderLink\\": true\\n}","type":"json"}]',
            'title' => '检查指定的地域加入专线网关（ECR）所需的云数据传输（CDT）服务',
            'summary' => '检查指定的地域加入专线网关ECR（Express Connect Router）所需的云数据传输（CDT）服务。',
        ],
        'GrantInstanceToExpressConnectRouter' => [
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
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'EcrId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '关联的专线网关实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ecr-mezk2idmsd0vx2****',
                    ],
                ],
                [
                    'name' => 'EcrOwnerAliUid',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '接受授权的专线网关实例所属阿里云账号（主账号）ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '121012345612****',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '网络实例的ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'vbr-j6cwxhgg0s5nuephp****'."\n",
                    ],
                ],
                [
                    'name' => 'InstanceType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '网络实例的类型。取值：'."\n"
                            .'- **VBR**：边界路由器实例。'."\n"
                            .'- **VPC**：专有网络实例。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'VBR',
                    ],
                ],
                [
                    'name' => 'InstanceRegionId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '授权网络实例所在的地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否只预检此次请求。取值：'."\n"
                            ."\n"
                            .'- **true**：发送检查请求，不会修改服务资源。'."\n"
                            ."\n"
                            .'- **false**（默认值）：发送正常请求。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '客户端Token，用于保证请求的幂等性。'."\n"
                            ."\n"
                            .'从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。'."\n"
                            ."\n"
                            .'> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**不一样。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '02fb3da4-130e-11e9-8e44-00****'."\n",
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'RpcResponse<GrantInstanceToEcrResponse>',
                        'description' => 'RpcResponse<GrantInstanceToEcrResponse>',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '6FABF516-FED3-5697-BDA2-B18C5D9A****',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。取值：'."\n"
                                    ."\n"
                                    .'- **True**：成功。'."\n"
                                    .'- **False**：失败。',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'Code' => [
                                'description' => '判断调用是否成功。返回值为 200 表示加载成功，返回其他值表示加载失败，失败原因参见错误码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '操作返回信息。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'HttpStatusCode' => [
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'DynamicCode' => [
                                'description' => '动态错误码。',
                                'type' => 'string',
                                'example' => 'IllegalParamFormat.EcrId'."\n",
                            ],
                            'DynamicMessage' => [
                                'description' => '动态错误信息，用于替换返回参数**ErrMessage**错误信息中的`%s`。'."\n"
                                    ."\n"
                                    .'> 如果**ErrMessage**返回**The Value of Input Parameter %s is not valid**，且**DynamicMessage**返回**DtsJobId**，则代表所传入的请求参数**DtsJobId**不合法。',
                                'type' => 'string',
                                'example' => 'The param format of EcrId **** is illegal.'."\n",
                            ],
                            'AccessDeniedDetail' => [
                                'description' => '访问被拒绝详细信息。',
                                'type' => 'string',
                                'example' => 'Authentication is failed for ****'."\n",
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'IllegalParam.EcrOwnerAliUid',
                        'errorMessage' => 'The Ecr instance account parameter is invalid.',
                    ],
                    [
                        'errorCode' => 'MissingParam.%s',
                        'errorMessage' => 'The param of %s is missing.',
                    ],
                    [
                        'errorCode' => 'IllegalParamFormat.%s',
                        'errorMessage' => 'The param format of %s is illegal.',
                    ],
                    [
                        'errorCode' => 'IllegalParam.%s',
                        'errorMessage' => 'The param of %s is illegal.',
                    ],
                    [
                        'errorCode' => 'Conflict.Lock',
                        'errorMessage' => 'There are other unfinished operations.',
                    ],
                    [
                        'errorCode' => 'OperationFailed.CallingVpcYaochi',
                        'errorMessage' => 'The system is abnormal. Please try again later.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'ResourceNotFound.EcrId',
                        'errorMessage' => 'EcrId not found.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"6FABF516-FED3-5697-BDA2-B18C5D9A****\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"DynamicCode\\": \\"IllegalParamFormat.EcrId\\\\n\\",\\n  \\"DynamicMessage\\": \\"The param format of EcrId **** is illegal.\\\\n\\",\\n  \\"AccessDeniedDetail\\": \\"Authentication is failed for ****\\\\n\\"\\n}","type":"json"}]',
            'title' => '将网络实例授权给专线网关（ECR）',
            'summary' => '将的专有网络（VPC）或者边界路由器（VBR）授权给跨账号的专线网关ECR（Express Connect Router）。',
            'description' => '将跨账号的网络实例关联至专线网关实例时，您需要将网络实例授权给专线网关实例。',
        ],
        'DeleteExpressConnectRouterAssociation' => [
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
                'operationType' => 'delete',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'EcrId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '专线网关实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ecr-mezk2idmsd0vx2****',
                    ],
                ],
                [
                    'name' => 'AssociationId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '专线网关与VPC或TR的关联ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ecr-assoc-9p2qxx5phpca2m****',
                    ],
                ],
                [
                    'name' => 'DeleteAttachment',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '专线网关是否是删除与TR或VPC的关联关系。取值：'."\n"
                            .'- **true**：是。'."\n"
                            .'- **false**：否。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否只预检此次请求。取值：'."\n"
                            ."\n"
                            .'- **true**：发送检查请求，不会修改服务资源。'."\n"
                            ."\n"
                            .'- **false**（默认值）：发送正常请求。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '客户端Token，用于保证请求的幂等性。'."\n"
                            ."\n"
                            .'从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。'."\n"
                            ."\n"
                            .'> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**不一样。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '02fb3da4-130e-11e9-8e44-00****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'RpcResponse<DeleteAssociationResponse>',
                        'description' => 'RpcResponse<DeleteAssociationResponse>',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '05130E79-588D-5C40-A718-C4863A59****',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。取值：'."\n"
                                    ."\n"
                                    .'- **True**：成功。'."\n"
                                    .'- **False**：失败。',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'Code' => [
                                'description' => '判断调用是否成功。返回值为200表示加载成功，返回其他值表示加载失败，失败原因参见错误码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '接口返回信息',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'HttpStatusCode' => [
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'DynamicCode' => [
                                'description' => '动态错误码。',
                                'type' => 'string',
                                'example' => 'IllegalParamFormat.EcrId',
                            ],
                            'DynamicMessage' => [
                                'description' => '动态错误信息，用于替换返回参数**ErrMessage**错误信息中的`%s`。'."\n"
                                    .'> 如果**ErrMessage**返回**The Value of Input Parameter %s is not valid**，且**DynamicMessage**返回**DtsJobId**，则代表所传入的请求参数**DtsJobId**不合法。',
                                'type' => 'string',
                                'example' => 'The param format of EcrId **** is illegal.',
                            ],
                            'AccessDeniedDetail' => [
                                'description' => '访问被拒绝详细信息。',
                                'type' => 'string',
                                'example' => 'Authentication is failed for ****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'IncorrectStatus.Ecr',
                        'errorMessage' => 'Ecr Status does not allow current operation.',
                    ],
                    [
                        'errorCode' => 'IncorrectStatus.EcrAssociation',
                        'errorMessage' => 'Ecr Association Status does not allow current operation.',
                    ],
                    [
                        'errorCode' => 'OperationDenied.ForceDeleting',
                        'errorMessage' => 'The current instance is being deleted.',
                    ],
                    [
                        'errorCode' => 'OperationDenied.CrossAccountDisassociating',
                        'errorMessage' => 'Unbind cross-account.',
                    ],
                    [
                        'errorCode' => 'OperationDenied.EcrAttachmentExisted',
                        'errorMessage' => 'Ecr and TR have been linked.',
                    ],
                    [
                        'errorCode' => 'OperationFailed.RejectedByCenYaochi',
                        'errorMessage' => 'Cen Yaochi has rejected your current request.',
                    ],
                    [
                        'errorCode' => 'OperationFailed.RejectedByEcYaochi',
                        'errorMessage' => 'The request was rejected by Ec Yaochi.',
                    ],
                    [
                        'errorCode' => 'OperationFailed.RejectedByVpcYaochi',
                        'errorMessage' => 'Vpc Yaochi has rejected your current request.',
                    ],
                    [
                        'errorCode' => 'UnsupportedRegion',
                        'errorMessage' => 'Feature not supported in specified region.',
                    ],
                    [
                        'errorCode' => 'MissingParam.%s',
                        'errorMessage' => 'The param of %s is missing.',
                    ],
                    [
                        'errorCode' => 'IllegalParamFormat.%s',
                        'errorMessage' => 'The param format of %s is illegal.',
                    ],
                    [
                        'errorCode' => 'Conflict.Lock',
                        'errorMessage' => 'There are other unfinished operations.',
                    ],
                    [
                        'errorCode' => 'OperationFailed.UsedInRouteEntryNextHop',
                        'errorMessage' => 'The VPC also has a static route pointing to the ECR, and it is not allowed to disassociate the ECR.',
                    ],
                    [
                        'errorCode' => 'OperationFailed.CallingVpcYaochi',
                        'errorMessage' => 'The system is abnormal. Please try again later.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'ResourceNotFound.EcrId',
                        'errorMessage' => 'EcrId not found.',
                    ],
                    [
                        'errorCode' => 'ResourceNotFound.AssociationId',
                        'errorMessage' => 'EcrAssociationId not found.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"05130E79-588D-5C40-A718-C4863A59****\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"DynamicCode\\": \\"IllegalParamFormat.EcrId\\",\\n  \\"DynamicMessage\\": \\"The param format of EcrId **** is illegal.\\",\\n  \\"AccessDeniedDetail\\": \\"Authentication is failed for ****\\"\\n}","type":"json"}]',
            'title' => '专线网关（ECR）解除资源关联关系',
            'summary' => '解除专线网关ECR（Express Connect Router）与专有网络（VPC）或者转发路由器的关联关系。',
        ],
        'ModifyExpressConnectRouterAssociationAllowedPrefix' => [
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
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'EcrId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '专线网关实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ecr-mezk2idmsd0vx2****',
                    ],
                ],
                [
                    'name' => 'AssociationId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '专线网关与VPC或TR的关联ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ecr-assoc-9p2qxx5phpca2m****',
                    ],
                ],
                [
                    'name' => 'AllowedPrefixes',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '允许的路由前缀列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '允许的路由前缀。',
                            'type' => 'string',
                            'required' => false,
                            'example' => '192.0.20.**/**',
                        ],
                        'required' => false,
                        'maxItems' => 10000,
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否只预检此次请求。取值：'."\n"
                            ."\n"
                            .'- **true**：发送检查请求，不会修改服务资源。'."\n"
                            .'- **false**（默认值）：发送正常请求。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '客户端Token，用于保证请求的幂等性。'."\n"
                            ."\n"
                            .'从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。'."\n"
                            ."\n"
                            .'> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**不一样。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '02fb3da4-130e-11e9-8e44-00****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'RpcResponse<ModifyAssociationAllowedPrefixResponse>',
                        'description' => 'RpcResponse<ModifyAssociationAllowedPrefixResponse>',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '05130E79-588D-5C40-A718-C4863A59****',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。取值：'."\n"
                                    ."\n"
                                    .'- **True**：成功。'."\n"
                                    .'- **False**：失败。',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'Code' => [
                                'description' => '判断调用是否成功。返回值为200表示加载成功，返回其他值表示加载失败，失败原因参见错误码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '操作返回信息。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'HttpStatusCode' => [
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'DynamicCode' => [
                                'description' => '动态错误码。',
                                'type' => 'string',
                                'example' => 'IllegalParamFormat.EcrId',
                            ],
                            'DynamicMessage' => [
                                'description' => '动态错误信息，用于替换返回参数**ErrMessage**错误信息中的`%s`。'."\n"
                                    ."\n"
                                    .'> 如果**ErrMessage**返回**The Value of Input Parameter %s is not valid**，且**DynamicMessage**返回**DtsJobId**，则表示所传入的请求参数**DtsJobId**不合法。',
                                'type' => 'string',
                                'example' => 'The param format of EcrId **** is illegal.',
                            ],
                            'AccessDeniedDetail' => [
                                'description' => '访问被拒绝详细信息。',
                                'type' => 'string',
                                'example' => 'Authentication is failed for ****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'IncorrectStatus.Ecr',
                        'errorMessage' => 'Ecr Status does not allow current operation.',
                    ],
                    [
                        'errorCode' => 'IncorrectStatus.EcrAssociation',
                        'errorMessage' => 'Ecr Association Status does not allow current operation.',
                    ],
                    [
                        'errorCode' => 'OperationDenied.ForceDeleting',
                        'errorMessage' => 'The current instance is being deleted.',
                    ],
                    [
                        'errorCode' => 'IllegalParamFormat.AllowedPrefixes',
                        'errorMessage' => 'The prefix parameter format is invalid. Procedure.',
                    ],
                    [
                        'errorCode' => 'MissingParam.%s',
                        'errorMessage' => 'The param of %s is missing.',
                    ],
                    [
                        'errorCode' => 'IllegalParamFormat.%s',
                        'errorMessage' => 'The param format of %s is illegal.',
                    ],
                    [
                        'errorCode' => 'IllegalParamSize.AllowedPrefixes',
                        'errorMessage' => 'The number of prefix routes exceeded the quota.',
                    ],
                    [
                        'errorCode' => 'Conflict.Lock',
                        'errorMessage' => 'There are other unfinished operations.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'ResourceNotFound.EcrId',
                        'errorMessage' => 'EcrId not found.',
                    ],
                    [
                        'errorCode' => 'ResourceNotFound.AssociationId',
                        'errorMessage' => 'EcrAssociationId not found.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"05130E79-588D-5C40-A718-C4863A59****\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"DynamicCode\\": \\"IllegalParamFormat.EcrId\\",\\n  \\"DynamicMessage\\": \\"The param format of EcrId **** is illegal.\\",\\n  \\"AccessDeniedDetail\\": \\"Authentication is failed for ****\\"\\n}","type":"json"}]',
            'title' => '修改专线网关（ECR）的前缀路由',
            'summary' => '修改专线网关ECR（Express Connect Router）绑定的专有网络（VPC）或者转发路由器（TR）的前缀路由。',
        ],
        'ListExpressConnectRouterSupportedRegion' => [
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'NodeType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '网络实例的类型。取值：'."\n"
                            .'- **TR**：转发路由器实例。'."\n"
                            .'- **VBR**：边界路由器实例。'."\n"
                            .'- **VPC**：虚拟专有网络实例。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'VBR',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '客户端Token，用于保证请求的幂等性。'."\n"
                            ."\n"
                            .'从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。'."\n"
                            ."\n"
                            .'> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**不一样。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '02fb3da4-130e-11e9-8e44-00****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'RpcResponse<ListEcrSupportedRegionResponse>',
                        'description' => '返回数据结构体。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '6FABF516-FED3-5697-BDA2-B18C5D9A****'."\n",
                            ],
                            'Success' => [
                                'description' => '是否调用成功。取值：'."\n"
                                    .'- True：成功。'."\n"
                                    .'- False：失败。',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'Code' => [
                                'description' => '判断调用是否成功。返回值为200表示加载成功，返回其他值表示加载失败，失败原因参见错误码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '操作返回信息。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'HttpStatusCode' => [
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'SupportedRegionIdList' => [
                                'description' => '开服地域列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '开服地域。',
                                    'type' => 'string',
                                    'example' => 'cn-hangzhou',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'MissingParam.%s',
                        'errorMessage' => 'The param of %s is missing.',
                    ],
                    [
                        'errorCode' => 'IllegalParamFormat.%s',
                        'errorMessage' => 'The param format of %s is illegal.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"6FABF516-FED3-5697-BDA2-B18C5D9A****\\\\n\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"SupportedRegionIdList\\": [\\n    \\"cn-hangzhou\\"\\n  ]\\n}","type":"json"}]',
            'title' => '查询专线网关（ECR）开服地域列表',
            'summary' => '查询专线网关ECR（Express Connect Router）开服地域列表。',
        ],
        'AttachExpressConnectRouterChildInstance' => [
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
                'operationType' => 'create',
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '197608',
                'abilityTreeNodes' => [
                    'FEATUREexpressconnectNHSYB7',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'EcrId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '专线网关实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ecr-a5xqrgbeidz1w8****',
                    ],
                ],
                [
                    'name' => 'ChildInstanceId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'VBR实例的ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'vbr-j6cwxhgg0s5nuephp****',
                    ],
                ],
                [
                    'name' => 'ChildInstanceType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '网络实例的类型，取值：**VBR**边界路由器。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'VBR',
                    ],
                ],
                [
                    'name' => 'ChildInstanceRegionId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'VBR实例所在的地域。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ChildInstanceOwnerId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'VBR实例所属的阿里云账号ID（主账号）。'."\n"
                            ."\n"
                            .'>如果您要加载跨账号的网络实例，本参数必填。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '190550144868****',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否只预检此次请求。取值：'."\n"
                            .'- **true**：发送检查请求，不会修改服务资源。'."\n"
                            .'- **false**（默认值）：发送正常请求。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '客户端Token，用于保证请求的幂等性。'."\n"
                            ."\n"
                            .'从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。'."\n"
                            ."\n"
                            .'> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**不一样。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '02fb3da4-130e-11e9-8e44-00****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'RpcResponse<AttachChildInstanceResponse>',
                        'description' => 'RpcResponse<AttachChildInstanceResponse>',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '6FABF516-FED3-5697-BDA2-B18C5D9A****',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。取值：'."\n"
                                    ."\n"
                                    .'- **True**：成功。'."\n"
                                    .'- **False**：失败。',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'Code' => [
                                'description' => '判断调用是否成功。返回值为 200 表示加载成功，返回其他值表示加载失败，失败原因参见错误码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '操作返回信息。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'HttpStatusCode' => [
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'DynamicCode' => [
                                'description' => '动态错误码。',
                                'type' => 'string',
                                'example' => 'IllegalParamFormat.EcrId',
                            ],
                            'DynamicMessage' => [
                                'description' => '动态错误信息，用于替换返回参数**ErrMessage**错误信息中的`%s`。'."\n"
                                    ."\n"
                                    .'> 如果**ErrMessage**返回**The Value of Input Parameter %s is not valid**，且**DynamicMessage**返回**DtsJobId**，则代表所传入的请求参数**DtsJobId**不合法。',
                                'type' => 'string',
                                'example' => 'The param format of EcrId **** is illegal.',
                            ],
                            'AccessDeniedDetail' => [
                                'description' => '访问被拒绝详细信息。',
                                'type' => 'string',
                                'example' => 'Authentication is failed for ****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'IncorrectStatus.Ecr',
                        'errorMessage' => 'Ecr Status does not allow current operation.',
                    ],
                    [
                        'errorCode' => 'IncorrectStatus.EcrAssociation',
                        'errorMessage' => 'Ecr Association Status does not allow current operation.',
                    ],
                    [
                        'errorCode' => 'OperationDenied.ForceDeleting',
                        'errorMessage' => 'The current instance is being deleted.',
                    ],
                    [
                        'errorCode' => 'OperationDenied.CrossAccountDisassociating',
                        'errorMessage' => 'Unbind cross-account.',
                    ],
                    [
                        'errorCode' => 'OperationDenied.EcrAttachmentExisted',
                        'errorMessage' => 'Ecr and TR have been linked.',
                    ],
                    [
                        'errorCode' => 'OperationDenied.VbrDoesNotSupportMpbgp',
                        'errorMessage' => 'The VBR does not support Mpbgp configuration.',
                    ],
                    [
                        'errorCode' => 'OperationFailed.RejectedByCenYaochi',
                        'errorMessage' => 'Cen Yaochi has rejected your current request.',
                    ],
                    [
                        'errorCode' => 'OperationFailed.RejectedByEcYaochi',
                        'errorMessage' => 'The request was rejected by Ec Yaochi.',
                    ],
                    [
                        'errorCode' => 'OperationFailed.RejectedByVpcYaochi',
                        'errorMessage' => 'Vpc Yaochi has rejected your current request.',
                    ],
                    [
                        'errorCode' => 'UnsupportedRegion',
                        'errorMessage' => 'Feature not supported in specified region.',
                    ],
                    [
                        'errorCode' => 'MissingParam.%s',
                        'errorMessage' => 'The param of %s is missing.',
                    ],
                    [
                        'errorCode' => 'IllegalParamFormat.%s',
                        'errorMessage' => 'The param format of %s is illegal.',
                    ],
                    [
                        'errorCode' => 'IllegalParam.%s',
                        'errorMessage' => 'The param of %s is illegal.',
                    ],
                    [
                        'errorCode' => 'Conflict.Lock',
                        'errorMessage' => 'There are other unfinished operations.',
                    ],
                    [
                        'errorCode' => 'Conflict.ASNOfVBR',
                        'errorMessage' => 'ASN already used by other VBR.',
                    ],
                    [
                        'errorCode' => 'OperationDenied.VbrHasRouteEntryInMiddleStatus',
                        'errorMessage' => 'The operation is not allowed because of VBR has route entry in middle status.',
                    ],
                    [
                        'errorCode' => 'OperationDenied.VbrHasBgpGroupInMiddleStatus',
                        'errorMessage' => 'The operation is not allowed because of VBR has BGP group in middle status.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'ResourceNotFound.EcrId',
                        'errorMessage' => 'EcrId not found.',
                    ],
                    [
                        'errorCode' => 'ResourceNotFound.AssociationId',
                        'errorMessage' => 'EcrAssociationId not found.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"6FABF516-FED3-5697-BDA2-B18C5D9A****\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"DynamicCode\\": \\"IllegalParamFormat.EcrId\\",\\n  \\"DynamicMessage\\": \\"The param format of EcrId **** is illegal.\\",\\n  \\"AccessDeniedDetail\\": \\"Authentication is failed for ****\\"\\n}","type":"json"}]',
            'title' => '加载子实例至专线网关（ECR）',
            'summary' => '加载子实例（VBR）至ECR。',
            'description' => '在调用**AttachExpressConnectRouterChildInstance**接口加载子实例（VBR）至专线网关之前，请确保专线网关的状态为**Active**。',
        ],
        'DetachExpressConnectRouterChildInstance' => [
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
                'operationType' => 'delete',
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '197609',
                'abilityTreeNodes' => [
                    'FEATUREexpressconnectNHSYB7',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'EcrId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '专线网关实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ecr-mezk2idmsd0vx2****',
                    ],
                ],
                [
                    'name' => 'ChildInstanceId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'VBR实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'vbr-j6cwxhgg0s5nuephp****',
                    ],
                ],
                [
                    'name' => 'ChildInstanceType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '网络实例的类型。取值：**VBR**边界路由器实例。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'VBR',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否只预检此次请求。取值：'."\n"
                            .'- **true**：发送检查请求，不会修改服务资源。'."\n"
                            .'- **false**（默认值）：发送正常请求。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '客户端Token，用于保证请求的幂等性。'."\n"
                            ."\n"
                            .'从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。'."\n"
                            ."\n"
                            .'> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**不一样。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '02fb3da4-130e-11e9-8e44-00****'."\n",
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'RpcResponse<DetachChildInstanceResponse>',
                        'description' => 'RpcResponse<DetachChildInstanceResponse>',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '6FABF516-FED3-5697-BDA2-B18C5D9A****',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。取值：'."\n"
                                    .'- **True**：成功。'."\n"
                                    .'- **False**：失败。',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'Code' => [
                                'description' => '判断调用是否成功。返回值为 200 表示加载成功，返回其他值表示加载失败，失败原因参见错误码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '操作返回信息。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'HttpStatusCode' => [
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'DynamicCode' => [
                                'description' => '动态错误码。',
                                'type' => 'string',
                                'example' => 'IllegalParamFormat.EcrId',
                            ],
                            'DynamicMessage' => [
                                'description' => '动态错误信息，用于替换返回参数**ErrMessage**错误信息中的`%s`。'."\n"
                                    ."\n"
                                    .'> 如果**ErrMessage**返回**The Value of Input Parameter %s is not valid**，且**DynamicMessage**返回**DtsJobId**，则表示所传入的请求参数**DtsJobId**不合法。',
                                'type' => 'string',
                                'example' => 'The param format of EcrId **** is illegal.'."\n",
                            ],
                            'AccessDeniedDetail' => [
                                'description' => '访问被拒绝详细信息。',
                                'type' => 'string',
                                'example' => 'Authentication is failed for ****'."\n",
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'IncorrectStatus.Ecr',
                        'errorMessage' => 'Ecr Status does not allow current operation.',
                    ],
                    [
                        'errorCode' => 'IncorrectStatus.EcrAssociation',
                        'errorMessage' => 'Ecr Association Status does not allow current operation.',
                    ],
                    [
                        'errorCode' => 'OperationDenied.ForceDeleting',
                        'errorMessage' => 'The current instance is being deleted.',
                    ],
                    [
                        'errorCode' => 'OperationDenied.CrossAccountDisassociating',
                        'errorMessage' => 'Unbind cross-account.',
                    ],
                    [
                        'errorCode' => 'OperationDenied.EcrAttachmentExisted',
                        'errorMessage' => 'Ecr and TR have been linked.',
                    ],
                    [
                        'errorCode' => 'OperationFailed.RejectedByCenYaochi',
                        'errorMessage' => 'Cen Yaochi has rejected your current request.',
                    ],
                    [
                        'errorCode' => 'OperationFailed.RejectedByEcYaochi',
                        'errorMessage' => 'The request was rejected by Ec Yaochi.',
                    ],
                    [
                        'errorCode' => 'OperationFailed.RejectedByVpcYaochi',
                        'errorMessage' => 'Vpc Yaochi has rejected your current request.',
                    ],
                    [
                        'errorCode' => 'UnsupportedRegion',
                        'errorMessage' => 'Feature not supported in specified region.',
                    ],
                    [
                        'errorCode' => 'MissingParam.%s',
                        'errorMessage' => 'The param of %s is missing.',
                    ],
                    [
                        'errorCode' => 'IllegalParamFormat.%s',
                        'errorMessage' => 'The param format of %s is illegal.',
                    ],
                    [
                        'errorCode' => 'IllegalParam.%s',
                        'errorMessage' => 'The param of %s is illegal.',
                    ],
                    [
                        'errorCode' => 'Conflict.Lock',
                        'errorMessage' => 'There are other unfinished operations.',
                    ],
                    [
                        'errorCode' => 'OperationDenied.VbrHasRouteEntryInMiddleStatus',
                        'errorMessage' => 'The operation is not allowed because of VBR has route entry in middle status.',
                    ],
                    [
                        'errorCode' => 'OperationDenied.VbrHasBgpGroupInMiddleStatus',
                        'errorMessage' => 'The operation is not allowed because of VBR has BGP group in middle status.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'ResourceNotFound.EcrId',
                        'errorMessage' => 'EcrId not found.',
                    ],
                    [
                        'errorCode' => 'ResourceNotFound.AssociationId',
                        'errorMessage' => 'EcrAssociationId not found.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"6FABF516-FED3-5697-BDA2-B18C5D9A****\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"DynamicCode\\": \\"IllegalParamFormat.EcrId\\",\\n  \\"DynamicMessage\\": \\"The param format of EcrId **** is illegal.\\\\n\\",\\n  \\"AccessDeniedDetail\\": \\"Authentication is failed for ****\\\\n\\"\\n}","type":"json"}]',
            'title' => '从专线网关（ECR）卸载子实例',
            'summary' => '从专线网关ECR（Express Connect Router）卸载边界路由器（VBR）。',
            'description' => '在调用**DetachExpressConnectRouterChildInstance**接口从专线网关卸载VBR实例之前，请确保专线网关的状态为**Active**。',
        ],
        'MoveResourceGroup' => [
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
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '200712',
                'abilityTreeNodes' => [
                    'FEATUREexpressconnectJZV4YI',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'NewResourceGroupId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '新资源组ID。'."\n"
                            .'关于资源组的更多信息，请参见[什么是资源组](~~94475~~)。'."\n",
                        'type' => 'string',
                        'required' => true,
                        'example' => 'rg-acfmvt3xpr5****',
                    ],
                ],
                [
                    'name' => 'ResourceType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '资源类型。可能的值：'."\n"
                            ."\n"
                            .'- EXPRESSCONNECTROUTER：专线网关。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'EXPRESSCONNECTROUTER',
                    ],
                ],
                [
                    'name' => 'ResourceId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '需要修改资源组的云资源的实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ecr-897j0jooxyr1aq****',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否只预检此次请求，取值：'."\n"
                            ."\n"
                            .'- **true**：发送检查请求，不会创建服务器组。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。'."\n"
                            .'- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '用于保证请求的幂等性，防止重复提交请求。由客户端生成该参数值，要保证在不同请求间唯一，最大值不超过64个ASCII字符，且该参数值中不能包含非ASCII字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '02fb3da4-130e-11e9-8e44-00****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'RpcResponse<BaseResult>',
                        'description' => 'RpcResponse<BaseResult>',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '6FABF516-FED3-5697-BDA2-B18C5D9A****',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。取值：'."\n"
                                    ."\n"
                                    .'- **true**：成功。'."\n"
                                    .'- **false**：失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Code' => [
                                'description' => '判断调用是否成功。返回值为200表示加载成功，返回其他值表示加载失败，失败原因参见错误码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '接口返回信息',
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
                        'errorCode' => 'Conflict.Lock',
                        'errorMessage' => 'There are other unfinished operations.',
                    ],
                    [
                        'errorCode' => 'IncorrectStatus.Ecr',
                        'errorMessage' => 'Ecr Status does not allow current operation.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"6FABF516-FED3-5697-BDA2-B18C5D9A****\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"OK\\"\\n}","type":"json"}]',
            'title' => '修改专线网关所属的资源组',
            'summary' => '修改专线网关所属的资源组。',
        ],
        'TagResources' => [
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
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '200701',
                'abilityTreeNodes' => [
                    'FEATUREexpressconnectI9TIJD',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'ResourceId',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '专线网关实例ID列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '专线网关实例ID列表。最多支持添加 20 个资源。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'ecr-897j0jooxyr1aq****',
                        ],
                        'required' => true,
                        'maxItems' => 100,
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '要进行绑定的标签列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '要进行绑定的标签。',
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '资源的标签键。'."\n"
                                        ."\n"
                                        .'一旦传入该值，则不允许为空字符串。最多支持64个字符，不能以`aliyun`或者`acs:`开头，不能包含`http://`或者`https:// `。'."\n"
                                        ."\n"
                                        .'一次最多支持输入20个标签的标签键。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'TestKey',
                                ],
                                'Value' => [
                                    'description' => '标签值。最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。一旦输入该值，可以为空字符串。'."\n"
                                        ."\n"
                                        .'一次调用最多支持添加20个标签值。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'TestValue',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => true,
                        'maxItems' => 100,
                    ],
                ],
                [
                    'name' => 'ResourceType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '资源类型。支持的类型为 **EXPRESSCONNECTROUTER**，即专线网关实例。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'EXPRESSCONNECTROUTER',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否只预检此次请求。取值：'."\n"
                            ."\n"
                            .'- **true**：发送检查请求，不会修改服务资源。'."\n"
                            .'- **false**（默认值）：发送正常请求。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '客户端 Token，用于保证请求的幂等性。'."\n"
                            ."\n"
                            .'从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken 只支持 ASCII 字符。'."\n"
                            ."\n"
                            .'> 若您未指定，则系统自动使用 API 请求的 **RequestId** 作为 **ClientToken** 标识。每次 API 请求的 **RequestId** 不一样。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '02fb3da4-130e-11e9-8e44-00****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'RpcResponse<BaseResult>',
                        'description' => 'RpcResponse<BaseResult>',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '6FABF516-FED3-5697-BDA2-B18C5D9A****',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。取值：'."\n"
                                    ."\n"
                                    .'- **true**：成功。'."\n"
                                    .'- **false**：失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Code' => [
                                'description' => '判断调用是否成功。返回值为200表示加载成功，返回其他值表示加载失败，失败原因参见错误码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '接口返回信息',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"6FABF516-FED3-5697-BDA2-B18C5D9A****\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"OK\\"\\n}","type":"json"}]',
            'title' => '专线网关绑定标签',
            'summary' => '专线网关绑定标签。每次调用API只能为一个专线网关绑定标签，可一次绑定多个标签。',
        ],
        'UnTagResources' => [
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"6FABF516-FED3-5697-BDA2-B18C5D9A****\\\\n\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"OK\\"\\n}","type":"json"}]',
            'title' => '专线网关解绑标签',
            'summary' => '解绑专线网关的标签。',
            'parameters' => [],
            'responses' => [],
        ],
        'ListTagResources' => [
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'none',
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '200710',
                'abilityTreeNodes' => [
                    'FEATUREexpressconnectI9TIJD',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'ResourceType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '资源类型。支持的类型为 EXPRESSCONNECTROUTER，即专线网关实例。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'EXPRESSCONNECTROUTER',
                    ],
                ],
                [
                    'name' => 'ResourceId',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '专线网关实例ID列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '专线网关实例ID。'."\n"
                                ."\n"
                                .'最多可以指定50个资源组ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'ecr-kgzj75zpq50hqz****',
                        ],
                        'required' => true,
                        'maxItems' => 100,
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '标签。'."\n"
                            ."\n"
                            .'最多可以绑定20个标签。',
                        'type' => 'array',
                        'items' => [
                            'description' => '标签。',
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '资源的标签键。'."\n"
                                        ."\n"
                                        .'一旦传入该值，则不允许为空字符串。最多支持64个字符，不能以`aliyun`或者`acs:`开头，不能包含`http://`或者`https:// `。'."\n"
                                        ."\n"
                                        .'一次最多支持输入20个标签的标签键。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'TestKey',
                                ],
                                'Value' => [
                                    'description' => '标签值。最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。一旦输入该值，可以为空字符串。'."\n"
                                        ."\n"
                                        .'一次调用最多支持添加20个标签值。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'TestValue',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'enumValueTitles' => [],
                        'maxItems' => 100,
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否拥有下一次查询的令牌（Token）。取值：'."\n"
                            ."\n"
                            .'- 如果 NextToken 为空表示没有下一次查询。'."\n"
                            .'- 如果 NextToken 有返回值，该取值表示下一次查询开始的令牌。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'AAAAAYws9fJ0Ur4MGm/5OkDoW/Zn0J0/sCjivzwX9oBcwFnWaaas/kSG+J/WzLOxJHS4****',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '单次请求返回结果的最大条数。默认值：20。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '20',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'RpcResponse<ListEcrTagResourcesResponse>',
                        'description' => '查询结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '6FABF516-FED3-5697-BDA2-B18C5D9A****',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。取值：'."\n"
                                    .'- **True**：成功。'."\n"
                                    .'- **False**：失败。',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'Code' => [
                                'description' => '判断调用是否成功。返回值为200表示加载成功，返回其他值表示加载失败，失败原因参见错误码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '操作返回信息。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'TagResources' => [
                                'description' => '标签列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '资源绑定的标签信息。',
                                    'type' => 'object',
                                    'properties' => [
                                        'ResourceId' => [
                                            'description' => '资源ID。',
                                            'type' => 'string',
                                            'example' => 'ecr-897j0jooxyr1aq****',
                                        ],
                                        'ResourceType' => [
                                            'description' => '资源类型。返回值固定为 **EXPRESSCONNECTROUTER**，即专线网关实例。',
                                            'type' => 'string',
                                            'example' => 'EXPRESSCONNECTROUTER',
                                        ],
                                        'TagKey' => [
                                            'description' => '资源的标签键。',
                                            'type' => 'string',
                                            'example' => 'TestKey',
                                        ],
                                        'TagValue' => [
                                            'description' => '专线网关的标签值。',
                                            'type' => 'string',
                                            'example' => 'TestValue',
                                        ],
                                    ],
                                ],
                            ],
                            'TotalCount' => [
                                'description' => '符合查询条件的记录总数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '2',
                            ],
                            'NextToken' => [
                                'description' => '是否拥有下一次查询的令牌（Token）。取值：'."\n"
                                    ."\n"
                                    .'- 如果**NextToken**为空表示没有下一次查询。'."\n"
                                    .'- 如果**NextToken**有返回值，该取值表示下一次查询开始的令牌。',
                                'type' => 'string',
                                'example' => 'AAAAAYws9fJ0Ur4MGm/5OkDoW/Zn0J0/sCjivzwX9oBcwFnWaaas/kSG+J/WzLOxJHS4****',
                            ],
                            'MaxResults' => [
                                'description' => '分页查询时每页行数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '20',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"6FABF516-FED3-5697-BDA2-B18C5D9A****\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"TagResources\\": [\\n    {\\n      \\"ResourceId\\": \\"ecr-897j0jooxyr1aq****\\",\\n      \\"ResourceType\\": \\"EXPRESSCONNECTROUTER\\",\\n      \\"TagKey\\": \\"TestKey\\",\\n      \\"TagValue\\": \\"TestValue\\"\\n    }\\n  ],\\n  \\"TotalCount\\": 2,\\n  \\"NextToken\\": \\"AAAAAYws9fJ0Ur4MGm/5OkDoW/Zn0J0/sCjivzwX9oBcwFnWaaas/kSG+J/WzLOxJHS4****\\",\\n  \\"MaxResults\\": 20\\n}","type":"json"}]',
            'title' => '查询专线网关标签列表',
            'summary' => '查询专线网关绑定的标签列表。',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-qingdao',
            'endpoint' => 'expressconnectrouter.cn-shanghai.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-huhehaote',
            'endpoint' => 'expressconnectrouter.cn-shanghai.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'expressconnectrouter.cn-shanghai.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'expressconnectrouter.cn-shanghai.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'expressconnectrouter.cn-shanghai.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-6',
            'endpoint' => 'expressconnectrouter.cn-shanghai.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-west-1',
            'endpoint' => 'expressconnectrouter.cn-shanghai.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-central-1',
            'endpoint' => 'expressconnectrouter.cn-shanghai.aliyuncs.com',
        ],
    ],
];
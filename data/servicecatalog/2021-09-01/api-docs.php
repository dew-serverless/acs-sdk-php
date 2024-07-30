<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'servicecatalog',
        'version' => '2021-09-01',
    ],
    'directories' => [
        [
            'id' => 156830,
            'title' => '服务发现',
            'type' => 'directory',
            'children' => [
                'GetProductAsEndUser',
                'ListProductsAsEndUser',
            ],
        ],
        [
            'id' => 156834,
            'title' => '服务请求',
            'type' => 'directory',
            'children' => [
                'ListLaunchOptions',
                'LaunchProduct',
                'TerminateProvisionedProduct',
                'UpdateProvisionedProduct',
            ],
        ],
        [
            'id' => 168857,
            'title' => '计划',
            'type' => 'directory',
            'children' => [
                'CreateProvisionedProductPlan',
                'GetProvisionedProductPlan',
                'ListProvisionedProductPlans',
                'CancelProvisionedProductPlan',
                'UpdateProvisionedProductPlan',
                'ApproveProvisionedProductPlan',
                'ListProvisionedProductPlanApprovers',
                'ExecuteProvisionedProductPlan',
                'DeleteProvisionedProductPlan',
            ],
        ],
        [
            'id' => 167563,
            'title' => '实例',
            'type' => 'directory',
            'children' => [
                'GetProvisionedProduct',
                'ListProvisionedProducts',
                'GetTask',
                'ListTasks',
            ],
        ],
        [
            'id' => 156842,
            'title' => '产品',
            'type' => 'directory',
            'children' => [
                'CopyProduct',
                'CreateProduct',
                'DeleteProduct',
                'UpdateProduct',
                'GetProductAsAdmin',
                'ListProductsAsAdmin',
            ],
        ],
        [
            'id' => 156848,
            'title' => '产品版本',
            'type' => 'directory',
            'children' => [
                'CreateProductVersion',
                'DeleteProductVersion',
                'UpdateProductVersion',
                'GetProductVersion',
                'ListProductVersions',
            ],
        ],
        [
            'id' => 156854,
            'title' => '模板',
            'type' => 'directory',
            'children' => [
                'CreateTemplate',
                'GetTemplate',
            ],
        ],
        [
            'id' => 156857,
            'title' => '产品组合',
            'type' => 'directory',
            'children' => [
                'CreatePortfolio',
                'AssociateProductWithPortfolio',
                'DeletePortfolio',
                'DisassociateProductFromPortfolio',
                'UpdatePortfolio',
                'GetPortfolio',
                'ListPortfolios',
            ],
        ],
        [
            'id' => 156865,
            'title' => '约束',
            'type' => 'directory',
            'children' => [
                'CreateConstraint',
                'DeleteConstraint',
                'UpdateConstraint',
                'GetConstraint',
            ],
        ],
        [
            'id' => 156871,
            'title' => '授权',
            'type' => 'directory',
            'children' => [
                'AssociatePrincipalWithPortfolio',
                'DisassociatePrincipalFromPortfolio',
                'ListPrincipals',
            ],
        ],
        [
            'id' => 156875,
            'title' => '地域',
            'type' => 'directory',
            'children' => [
                'ListRegions',
            ],
        ],
        [
            'id' => 181704,
            'title' => '标签选项',
            'type' => 'directory',
            'children' => [
                'GetTagOption',
                'DisAssociateTagOptionFromResource',
                'ListResourcesForTagOption',
                'UpdateTagOption',
                'ListTagOptions',
                'DeleteTagOption',
                'CreateTagOption',
                'AssociateTagOptionWithResource',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'GetProductAsEndUser' => [
            'summary' => '终端用户调用GetProductAsEndUser接口查询产品信息。',
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
            ],
            'parameters' => [
                [
                    'name' => 'ProductId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '产品ID',
                        'description' => '产品ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'prod-bp18r7q127****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0FEEF92D-4052-5202-87D0-3D8EC16F81BF',
                            ],
                            'ProductSummary' => [
                                'title' => '产品详情',
                                'description' => '产品概要信息。',
                                'type' => 'object',
                                'properties' => [
                                    'Description' => [
                                        'title' => '产品描述',
                                        'description' => '产品描述。',
                                        'type' => 'string',
                                        'example' => '这是一个产品描述',
                                    ],
                                    'CreateTime' => [
                                        'title' => '创建时间',
                                        'description' => '产品创建时间。'."\n"
                                            ."\n"
                                            .'按照ISO8601标准表示，使用UTC时间，格式：YYYY-MM-DDThh:mm:ssZ。',
                                        'type' => 'string',
                                        'example' => '2022-04-12T06:10:37Z',
                                    ],
                                    'ProductId' => [
                                        'title' => '产品ID',
                                        'description' => '产品ID。',
                                        'type' => 'string',
                                        'example' => 'prod-bp18r7q127****',
                                    ],
                                    'ProductArn' => [
                                        'title' => '产品ARN',
                                        'description' => '产品ARN。',
                                        'type' => 'string',
                                        'example' => 'acs:servicecatalog:cn-hangzhou:146611588617****:product/prod-bp18r7q127****',
                                    ],
                                    'ProductName' => [
                                        'title' => '产品名称',
                                        'description' => '产品名称。',
                                        'type' => 'string',
                                        'example' => 'DEMO-创建ECS',
                                    ],
                                    'ProviderName' => [
                                        'title' => '提供者名称',
                                        'description' => '产品提供者。',
                                        'type' => 'string',
                                        'example' => 'IT团队',
                                    ],
                                    'ProductType' => [
                                        'title' => '产品类型',
                                        'description' => '产品类型。'."\n"
                                            ."\n"
                                            .'取值为Ros，表示阿里云资源编排服务（ROS）。',
                                        'type' => 'string',
                                        'example' => 'Ros',
                                    ],
                                    'HasDefaultLaunchOption' => [
                                        'description' => '是否存在默认启动选项。取值：'."\n"
                                            ."\n"
                                            .'- true：存在默认启动选项，启动产品或更新实例时无需填写PortfolioId。'."\n"
                                            .'- false：没有默认启动选项，启动产品或更新实例时必须填写PortfolioId。获取PortfolioId的方法，请参见[ListLaunchOptions](~~ListLaunchOptions~~)。'."\n"
                                            ."\n"
                                            .'> 如果产品仅被加入到一个产品组合，则会存在默认启动选项。如果产品被加入到多个产品组合，则会同时存在多个启动选项，但此时没有默认启动选项。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'TemplateType' => [
                                        'description' => '产品模板类型。取值：'."\n"
                                            ."\n"
                                            .'- RosTerraformTemplate：表示阿里云资源编排服务（ROS）支持的Terraform模板。'."\n"
                                            .'- RosStandardTemplate：表示阿里云资源编排服务（ROS）标准模板。',
                                        'type' => 'string',
                                        'example' => 'RosTerraformTemplate',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'A system error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0FEEF92D-4052-5202-87D0-3D8EC16F81BF\\",\\n  \\"ProductSummary\\": {\\n    \\"Description\\": \\"这是一个产品描述\\",\\n    \\"CreateTime\\": \\"2022-04-12T06:10:37Z\\",\\n    \\"ProductId\\": \\"prod-bp18r7q127****\\",\\n    \\"ProductArn\\": \\"acs:servicecatalog:cn-hangzhou:146611588617****:product/prod-bp18r7q127****\\",\\n    \\"ProductName\\": \\"DEMO-创建ECS\\",\\n    \\"ProviderName\\": \\"IT团队\\",\\n    \\"ProductType\\": \\"Ros\\",\\n    \\"HasDefaultLaunchOption\\": true,\\n    \\"TemplateType\\": \\"RosTerraformTemplate\\"\\n  }\\n}","type":"json"}]',
            'title' => '终端用户查询产品信息',
            'description' => '请确保终端用户已被管理员授予相关产品的使用权限。具体操作，请参见[为终端用户授予访问权限](~~405233~~)。',
        ],
        'ListProductsAsEndUser' => [
            'summary' => '终端用户调用ListProductsAsEndUser接口查询产品列表。',
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
            ],
            'parameters' => [
                [
                    'name' => 'Filters',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'title' => '过滤条件',
                        'description' => '过滤条件。',
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'title' => '过滤条件的名称',
                                    'description' => '过滤条件的名称。取值：'."\n"
                                        ."\n"
                                        .'- ProductName：按产品名称查找，完整匹配（忽略大小写）。'."\n"
                                        .'- FullTextSearch：全文检索，按产品名称、产品提供者、产品描述查找，模糊匹配。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'ProductName',
                                ],
                                'Value' => [
                                    'title' => '过滤条件的值',
                                    'description' => '过滤条件的值。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'DEMO-创建ECS',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 5,
                    ],
                ],
                [
                    'name' => 'SortBy',
                    'in' => 'query',
                    'schema' => [
                        'title' => '排序字段',
                        'description' => '排序字段。'."\n"
                            ."\n"
                            .'取值为CreateTime，表示产品创建时间。'."\n"
                            .'默认取值CreateTime。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'CreateTime',
                    ],
                ],
                [
                    'name' => 'SortOrder',
                    'in' => 'query',
                    'schema' => [
                        'title' => '排序方式',
                        'description' => '排序方式。取值：'."\n"
                            ."\n"
                            .'- Asc：正序。'."\n"
                            .'- Desc（默认值）：倒序。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Desc',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页码。'."\n"
                            ."\n"
                            .'起始值：1。默认值：1。',
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
                        'description' => '分页时每页显示的数据行数。'."\n"
                            ."\n"
                            .'取值范围：1~100。起始值：1。默认值：10。',
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
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0FEEF92D-4052-5202-87D0-3D8EC16F81BF',
                            ],
                            'ProductSummaries' => [
                                'title' => '产品列表',
                                'description' => '产品列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '产品概要信息。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Description' => [
                                            'title' => '产品描述',
                                            'description' => '产品描述。',
                                            'type' => 'string',
                                            'example' => '这是一个产品描述',
                                        ],
                                        'CreateTime' => [
                                            'title' => '产品创建时间',
                                            'description' => '产品创建时间。'."\n"
                                                ."\n"
                                                .'按照ISO8601标准表示，使用UTC时间，格式：YYYY-MM-DDThh:mm:ssZ。',
                                            'type' => 'string',
                                            'example' => '2022-04-12T06:10:37Z',
                                        ],
                                        'ProductId' => [
                                            'title' => '产品ID',
                                            'description' => '产品ID。',
                                            'type' => 'string',
                                            'example' => 'prod-bp18r7q127****',
                                        ],
                                        'ProductArn' => [
                                            'title' => '产品ARN',
                                            'description' => '产品ARN。',
                                            'type' => 'string',
                                            'example' => 'acs:servicecatalog:cn-hangzhou:146611588617****:product/prod-bp18r7q127****',
                                        ],
                                        'ProductName' => [
                                            'title' => '产品名字',
                                            'description' => '产品名称。',
                                            'type' => 'string',
                                            'example' => 'DEMO-创建ECS',
                                        ],
                                        'ProviderName' => [
                                            'title' => '产品提供方',
                                            'description' => '产品提供者。',
                                            'type' => 'string',
                                            'example' => 'IT团队',
                                        ],
                                        'ProductType' => [
                                            'title' => '产品类型',
                                            'description' => '产品类型。'."\n"
                                                ."\n"
                                                .'取值为Ros，表示阿里云资源编排服务（ROS）。',
                                            'type' => 'string',
                                            'example' => 'Ros',
                                        ],
                                        'HasDefaultLaunchOption' => [
                                            'title' => '是否存在默认的启动选项',
                                            'description' => '是否存在默认启动选项。取值：'."\n"
                                                ."\n"
                                                .'- true：存在默认启动选项，启动产品或更新实例时无需填写PortfolioId。'."\n"
                                                .'- false：没有默认启动选项，启动产品或更新实例时必须填写PortfolioId。获取PortfolioId的方法，请参见[ListLaunchOptions](~~ListLaunchOptions~~)。'."\n"
                                                ."\n"
                                                .'> 如果产品仅被加入到一个产品组合，则会存在默认启动选项。如果产品被加入到多个产品组合，则会同时存在多个启动选项，但此时没有默认启动选项。',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'TemplateType' => [
                                            'description' => '产品模板类型。取值：'."\n"
                                                ."\n"
                                                .'- RosTerraformTemplate：表示阿里云资源编排服务（ROS）支持的Terraform模板。'."\n"
                                                .'- RosStandardTemplate：表示阿里云资源编排服务（ROS）标准模板。',
                                            'type' => 'string',
                                            'example' => 'RosTerraformTemplate',
                                        ],
                                    ],
                                ],
                            ],
                            'TotalCount' => [
                                'title' => '总记录数',
                                'description' => '总数据行数。',
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
                            'PageSize' => [
                                'description' => '分页时每页显示的数据行数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'A system error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0FEEF92D-4052-5202-87D0-3D8EC16F81BF\\",\\n  \\"ProductSummaries\\": [\\n    {\\n      \\"Description\\": \\"这是一个产品描述\\",\\n      \\"CreateTime\\": \\"2022-04-12T06:10:37Z\\",\\n      \\"ProductId\\": \\"prod-bp18r7q127****\\",\\n      \\"ProductArn\\": \\"acs:servicecatalog:cn-hangzhou:146611588617****:product/prod-bp18r7q127****\\",\\n      \\"ProductName\\": \\"DEMO-创建ECS\\",\\n      \\"ProviderName\\": \\"IT团队\\",\\n      \\"ProductType\\": \\"Ros\\",\\n      \\"HasDefaultLaunchOption\\": true,\\n      \\"TemplateType\\": \\"RosTerraformTemplate\\"\\n    }\\n  ],\\n  \\"TotalCount\\": 100,\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 10\\n}","type":"json"}]',
            'title' => '终端用户查询产品列表',
            'description' => '请确保终端用户已被管理员授予相关产品的使用权限。具体操作，请参见[为终端用户授予访问权限](~~405233~~)。',
        ],
        'ListLaunchOptions' => [
            'summary' => '查询启动选项列表。',
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
            ],
            'parameters' => [
                [
                    'name' => 'ProductId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '产品ID',
                        'description' => '产品ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'prod-bp18r7q127****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0FEEF92D-4052-5202-87D0-3D8EC16F81BF',
                            ],
                            'LaunchOptionSummaries' => [
                                'title' => '启动选项概要',
                                'description' => '启动选项列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'PortfolioId' => [
                                            'title' => '产品组合ID',
                                            'description' => '产品组合ID。',
                                            'type' => 'string',
                                            'example' => 'port-bp1yt7582g****',
                                        ],
                                        'PortfolioName' => [
                                            'title' => '产品组合名称',
                                            'description' => '产品组合名称。',
                                            'type' => 'string',
                                            'example' => 'DEMO-IT服务',
                                        ],
                                        'ConstraintSummaries' => [
                                            'title' => '约束概要',
                                            'description' => '约束列表。',
                                            'type' => 'array',
                                            'items' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'ConstraintType' => [
                                                        'title' => '约束类型',
                                                        'description' => '约束类型。取值：'."\n"
                                                            .'1. Launch：启动约束。'."\n"
                                                            .'2. Template：模板约束。'."\n"
                                                            .'3. Approval：审批约束。'."\n"
                                                            .'4. StackRegion：地域约束。',
                                                        'type' => 'string',
                                                        'example' => 'Launch',
                                                    ],
                                                    'Description' => [
                                                        'title' => '约束描述',
                                                        'description' => '约束描述。',
                                                        'type' => 'string',
                                                        'example' => 'Launch as local role TestRole',
                                                    ],
                                                    'OperationTypes' => [
                                                        'title' => '操作类型，当约束类型为审批约束时不为空',
                                                        'description' => '需被审批的操作类型列表，当约束类型为审批约束时不为空。',
                                                        'type' => 'array',
                                                        'items' => [
                                                            'description' => '操作类型，当约束类型为审批约束时不为空。',
                                                            'type' => 'string',
                                                            'example' => 'All,TerminateProvisionedProduct,UpdateProvisionedProduct,LaunchProduct',
                                                        ],
                                                    ],
                                                    'StackRegions' => [
                                                        'description' => '终端用户可启动的地域列表，当约束类型为地域约束时不为空。',
                                                        'type' => 'array',
                                                        'items' => [
                                                            'description' => '终端用户可启动的地域。',
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
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'A system error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0FEEF92D-4052-5202-87D0-3D8EC16F81BF\\",\\n  \\"LaunchOptionSummaries\\": [\\n    {\\n      \\"PortfolioId\\": \\"port-bp1yt7582g****\\",\\n      \\"PortfolioName\\": \\"DEMO-IT服务\\",\\n      \\"ConstraintSummaries\\": [\\n        {\\n          \\"ConstraintType\\": \\"Launch\\",\\n          \\"Description\\": \\"Launch as local role TestRole\\",\\n          \\"OperationTypes\\": [\\n            \\"All,TerminateProvisionedProduct,UpdateProvisionedProduct,LaunchProduct\\"\\n          ],\\n          \\"StackRegions\\": [\\n            \\"cn-hangzhou\\"\\n          ]\\n        }\\n      ]\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询启动选项列表',
        ],
        'LaunchProduct' => [
            'summary' => '启动产品。',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'ProvisionedProductName',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '实例名称',
                        'description' => '实例名称。'."\n"
                            ."\n"
                            .'长度为1~128个字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'DEMO-ECS实例',
                        'maxLength' => 100,
                        'minLength' => 1,
                    ],
                ],
                [
                    'name' => 'PortfolioId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '产品组合ID',
                        'description' => '产品组合ID。'."\n"
                            ."\n"
                            .'> 存在默认启动选项时，无需填写PortfolioId。没有默认启动选项时，必须填写PortfolioId。获取PortfolioId的方法，请参见[ListLaunchOptions](~~ListLaunchOptions~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'port-bp1yt7582g****',
                    ],
                ],
                [
                    'name' => 'ProductId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '产品ID',
                        'description' => '产品ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'prod-bp18r7q127****',
                    ],
                ],
                [
                    'name' => 'ProductVersionId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '产品版本ID',
                        'description' => '产品版本ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'pv-bp15e79d26****',
                    ],
                ],
                [
                    'name' => 'Parameters',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '用户输入的模板参数。'."\n"
                            ."\n"
                            .'N最大值为200。'."\n"
                            ."\n"
                            .'> Parameters为可选参数。如果需要指定Parameters，则Parameters.N.ParameterKey和Parameters.N.ParameterValue必须同时指定。',
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'ParameterKey' => [
                                    'description' => '模板中定义的参数名称。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'instance_type',
                                ],
                                'ParameterValue' => [
                                    'description' => '用户输入的模板参数值。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'ecs.s6-c1m1.small',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 200,
                    ],
                ],
                [
                    'name' => 'StackRegionId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'ROS资源栈所属的地域ID',
                        'description' => '阿里云资源编排服务（ROS）资源栈所属的地域ID。'."\n"
                            ."\n"
                            .'获取ROS支持的地域列表的方法，请参见[DescribeRegions](~~131035~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'Tags',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '用户输入的自定义标签。'."\n"
                            ."\n"
                            .'N最大值为20。'."\n"
                            ."\n"
                            .'> - Tags为可选参数。如果需要指定Tags，则Tags.N.Key和Tags.N.Value必须同时指定。'."\n"
                            .'> - 此标签会传递到资源栈中每个支持标签的资源中。',
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '用户输入的自定义标签键。'."\n"
                                        ."\n"
                                        .'最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'k1',
                                ],
                                'Value' => [
                                    'description' => '用户输入的自定义标签值。'."\n"
                                        ."\n"
                                        .'最多支持128个字符，不能以`acs:`开头，不能包含`http://`或者`https://`。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'v1',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 20,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0FEEF92D-4052-5202-87D0-3D8EC16F81BF',
                            ],
                            'ProvisionedProductId' => [
                                'title' => '实例ID',
                                'description' => '实例ID。',
                                'type' => 'string',
                                'example' => 'pp-bp1ddg1n2a****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'A system error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0FEEF92D-4052-5202-87D0-3D8EC16F81BF\\",\\n  \\"ProvisionedProductId\\": \\"pp-bp1ddg1n2a****\\"\\n}","type":"json"}]',
            'title' => '启动产品',
        ],
        'TerminateProvisionedProduct' => [
            'summary' => '终止实例。',
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
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'ProvisionedProductId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '实例ID',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'pp-bp1ddg1n2a****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0FEEF92D-4052-5202-87D0-3D8EC16F81BF',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'A system error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0FEEF92D-4052-5202-87D0-3D8EC16F81BF\\"\\n}","type":"json"}]',
            'title' => '终止实例',
            'description' => '终止实例后实例将从实例列表中删除，终端用户后续无法正常管理该实例的生命周期，请谨慎操作。',
        ],
        'UpdateProvisionedProduct' => [
            'summary' => '更新实例。',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'PortfolioId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '产品组合ID',
                        'description' => '产品组合ID。'."\n"
                            ."\n"
                            .'> 存在默认启动选项时，无需填写PortfolioId。没有默认启动选项时，必须填写PortfolioId。获取PortfolioId的方法，请参见[ListLaunchOptions](~~ListLaunchOptions~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'port-bp1yt7582g****',
                    ],
                ],
                [
                    'name' => 'ProductId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '产品ID',
                        'description' => '产品ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'prod-bp18r7q127****',
                    ],
                ],
                [
                    'name' => 'ProductVersionId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '产品版本ID',
                        'description' => '产品版本ID。'."\n"
                            ."\n"
                            .'> 当输入的ProductVersionId和Parameters与之前相比，两者都没有变化时，不允许更新实例。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'pv-bp15e79d26****',
                    ],
                ],
                [
                    'name' => 'Parameters',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '用户输入的模板参数。'."\n"
                            ."\n"
                            .'N最大值为200。'."\n"
                            ."\n"
                            .'> - Parameters为可选参数。如果需要指定Parameters，则Parameters.N.ParameterKey和Parameters.N.ParameterValue必须同时指定。'."\n"
                            .'> - 当输入的ProductVersionId和Parameters与之前相比，两者都没有变化时，不允许更新实例。'."\n",
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'ParameterKey' => [
                                    'description' => '模板中定义的参数名称。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'instance_type',
                                ],
                                'ParameterValue' => [
                                    'description' => '用户输入的模板参数值。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'ecs.s6-c1m1.small',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 200,
                    ],
                ],
                [
                    'name' => 'ProvisionedProductId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '实例ID',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'pp-bp1ddg1n2a****',
                    ],
                ],
                [
                    'name' => 'Tags',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '用户输入的自定义标签。'."\n"
                            ."\n"
                            .'N最大值为20。'."\n"
                            ."\n"
                            .'> - Tags为可选参数。如果需要指定Tags，则Tags.N.Key和Tags.N.Value必须同时指定。'."\n"
                            .'> - 此标签会传递到资源栈中每个支持标签的资源中。',
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '用户输入的自定义标签键。'."\n"
                                        ."\n"
                                        .'最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'k1',
                                ],
                                'Value' => [
                                    'description' => '用户输入的自定义标签值。'."\n"
                                        ."\n"
                                        .'最多支持128个字符，不能以`acs:`开头，不能包含`http://`或者`https://`。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'v1',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 20,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0FEEF92D-4052-5202-87D0-3D8EC16F81BF',
                            ],
                            'ProvisionedProductId' => [
                                'title' => '实例ID',
                                'description' => '实例ID。',
                                'type' => 'string',
                                'example' => 'pp-bp1ddg1n2a****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'A system error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0FEEF92D-4052-5202-87D0-3D8EC16F81BF\\",\\n  \\"ProvisionedProductId\\": \\"pp-bp1ddg1n2a****\\"\\n}","type":"json"}]',
            'title' => '更新实例',
        ],
        'CreateProvisionedProductPlan' => [
            'summary' => '创建计划。',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'PlanName',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '计划名称。'."\n"
                            ."\n"
                            .'长度为1~128个字符。',
                        'description' => '计划名称。'."\n"
                            ."\n"
                            .'长度为1~128个字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'DEMO-ECS实例',
                        'maxLength' => 100,
                        'minLength' => 1,
                    ],
                ],
                [
                    'name' => 'PlanType',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '计划类型。'."\n"
                            ."\n"
                            .'取值为Ros，表示阿里云资源编排服务（ROS）。',
                        'description' => '计划类型。'."\n"
                            ."\n"
                            .'取值为Ros，表示阿里云资源编排服务（ROS）。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Ros',
                    ],
                ],
                [
                    'name' => 'ProvisionedProductName',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '实例名称。'."\n"
                            ."\n"
                            .'长度为1~128个字符。',
                        'description' => '实例名称。'."\n"
                            ."\n"
                            .'长度为1~128个字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'DEMO-ECS实例',
                        'maxLength' => 100,
                        'minLength' => 1,
                    ],
                ],
                [
                    'name' => 'PortfolioId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '产品组合ID。',
                        'description' => '产品组合ID。'."\n"
                            ."\n"
                            .'> 存在默认启动选项时，无需填写PortfolioId。没有默认启动选项时，必须填写PortfolioId。获取PortfolioId的方法，请参见[ListLaunchOptions](~~ListLaunchOptions~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'port-bp1yt7582g****',
                    ],
                ],
                [
                    'name' => 'ProductId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'ProductId',
                        'description' => '产品ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'prod-bp18r7q127****',
                    ],
                ],
                [
                    'name' => 'ProductVersionId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '产品版本ID。'."\n"
                            ."\n",
                        'description' => '产品版本ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'pv-bp15e79d26****',
                    ],
                ],
                [
                    'name' => 'Parameters',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'title' => '用户输入的模板参数。'."\n"
                            ."\n"
                            .'N最大值为200。',
                        'description' => '用户输入的模板参数。'."\n"
                            ."\n"
                            .'N最大值为200。'."\n"
                            ."\n"
                            .'> Parameters为可选参数。如果需要指定Parameters，则Parameters.N.ParameterKey和Parameters.N.ParameterValue必须同时指定。'."\n",
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'ParameterKey' => [
                                    'title' => '模板中定义的参数名称。'."\n"
                                        ."\n",
                                    'description' => '模板中定义的参数名称。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'instance_type',
                                ],
                                'ParameterValue' => [
                                    'title' => '用户输入的模板参数值。',
                                    'description' => '用户输入的模板参数值。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'ecs.s6-c1m1.small',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 200,
                    ],
                ],
                [
                    'name' => 'StackRegionId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '阿里云资源编排服务（ROS）资源栈所属的地域ID。',
                        'description' => '阿里云资源编排服务（ROS）资源栈所属的地域ID。'."\n"
                            ."\n"
                            .'获取ROS支持的地域列表的方法，请参见[DescribeRegions](~~131035~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'Tags',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'title' => '用户输入的自定义标签。'."\n"
                            ."\n"
                            .'N最大值为20。',
                        'description' => '用户输入的自定义标签。'."\n"
                            ."\n"
                            .'N最大值为20。'."\n"
                            ."\n"
                            .'> - Tags为可选参数。如果需要指定Tags，则Tags.N.Key和Tags.N.Value必须同时指定。'."\n"
                            .'> - 此标签会传递到资源栈中每个支持标签的资源中。',
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'title' => '用户输入的自定义标签键。'."\n"
                                        ."\n"
                                        .'最多支持128个字符，不能以aliyun和acs:开头，不能包含http://或者https://。',
                                    'description' => '用户输入的自定义标签键。'."\n"
                                        ."\n"
                                        .'最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                                    'type' => 'string',
                                    'required' => false,
                                    'enumValueTitles' => [],
                                    'example' => 'k1',
                                ],
                                'Value' => [
                                    'title' => '用户输入的自定义标签值。'."\n"
                                        ."\n"
                                        .'最多支持128个字符，不能以acs:开头，不能包含http://或者https://。',
                                    'description' => '用户输入的自定义标签值。'."\n"
                                        ."\n"
                                        .'最多支持128个字符，不能以`acs:`开头，不能包含`http://`或者`https://`。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'v1',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 20,
                    ],
                ],
                [
                    'name' => 'OperationType',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '计划操作类型，取值为All，TerminateProvisionedProduct，UpdateProvisionedProduct，LaunchProduct。',
                        'description' => '计划操作类型，取值：'."\n"
                            .'- LaunchProduct（默认）：启动产品。'."\n"
                            .'- UpdateProvisionedProduct：更新实例。'."\n"
                            .'- TerminateProvisionedProduct：终止实例。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'LaunchProduct',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '计划描述',
                        'description' => '计划描述。'."\n"
                            ."\n"
                            .'长度为1~128个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '创建ECS',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0FEEF92D-4052-5202-87D0-3D8EC16F81BF',
                            ],
                            'PlanId' => [
                                'title' => '计划ID。',
                                'description' => '计划ID。',
                                'type' => 'string',
                                'example' => 'plan-bp1jvmdk2k****',
                            ],
                            'ProvisionedProductId' => [
                                'title' => '实例ID。',
                                'description' => '实例ID。',
                                'type' => 'string',
                                'example' => 'pp-bp1ddg1n2a****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'A system error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0FEEF92D-4052-5202-87D0-3D8EC16F81BF\\",\\n  \\"PlanId\\": \\"plan-bp1jvmdk2k****\\",\\n  \\"ProvisionedProductId\\": \\"pp-bp1ddg1n2a****\\"\\n}","type":"json"}]',
            'title' => '创建计划',
        ],
        'GetProvisionedProductPlan' => [
            'summary' => '查询计划信息。',
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
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'PlanId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '计划ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'plan-bp1jvmdk2k****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0FEEF92D-4052-5202-87D0-3D8EC16F81BF',
                            ],
                            'PlanDetail' => [
                                'title' => '计划详情。'."\n"
                                    ."\n",
                                'description' => '计划详情。',
                                'type' => 'object',
                                'properties' => [
                                    'PlanId' => [
                                        'title' => '计划ID。',
                                        'description' => '计划ID。',
                                        'type' => 'string',
                                        'example' => 'plan-bp1jvmdk2k****',
                                    ],
                                    'PlanName' => [
                                        'title' => '计划名称。'."\n"
                                            ."\n",
                                        'description' => '计划名称。',
                                        'type' => 'string',
                                        'example' => 'DEMO-ECS实例',
                                    ],
                                    'PlanType' => [
                                        'title' => '计划类型。'."\n"
                                            ."\n"
                                            .'取值为Ros，表示阿里云资源编排服务（ROS）。',
                                        'description' => '计划类型。'."\n"
                                            ."\n"
                                            .'取值为Ros，表示阿里云资源编排服务（ROS）。',
                                        'type' => 'string',
                                        'example' => 'Ros',
                                    ],
                                    'PortfolioId' => [
                                        'title' => '产品组合ID。'."\n"
                                            ."\n",
                                        'description' => '产品组合ID。',
                                        'type' => 'string',
                                        'example' => 'port-bp1yt7582g****',
                                    ],
                                    'ProductId' => [
                                        'title' => '产品ID。'."\n"
                                            ."\n",
                                        'description' => '产品ID。',
                                        'type' => 'string',
                                        'example' => 'prod-bp18r7q127****',
                                    ],
                                    'ProductVersionId' => [
                                        'title' => '产品版本ID。'."\n"
                                            ."\n",
                                        'description' => '产品版本ID。',
                                        'type' => 'string',
                                        'example' => 'pv-bp15e79d26****',
                                    ],
                                    'ProvisionedProductId' => [
                                        'title' => '实例ID。'."\n"
                                            ."\n",
                                        'description' => '实例ID。',
                                        'type' => 'string',
                                        'example' => 'pp-bp1ddg1n2a****',
                                    ],
                                    'ProvisionedProductName' => [
                                        'title' => '实例名称。',
                                        'description' => '实例名称。',
                                        'type' => 'string',
                                        'example' => 'DEMO-ECS实例',
                                    ],
                                    'Parameters' => [
                                        'title' => '用户输入的模板参数。'."\n"
                                            ."\n",
                                        'description' => '用户输入的模板参数。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'ParameterKey' => [
                                                    'title' => '模板中定义的参数名称。'."\n"
                                                        ."\n",
                                                    'description' => '模板中定义的参数名称。',
                                                    'type' => 'string',
                                                    'example' => 'instance_type',
                                                ],
                                                'ParameterValue' => [
                                                    'title' => '用户输入的模板参数值。'."\n"
                                                        ."\n",
                                                    'description' => '用户输入的模板参数值。',
                                                    'type' => 'string',
                                                    'example' => 'ecs.s6-c1m1.small',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'StackId' => [
                                        'title' => '阿里云资源编排服务（ROS）资源栈ID。'."\n"
                                            ."\n",
                                        'description' => '阿里云资源编排服务（ROS）资源栈ID。',
                                        'type' => 'string',
                                        'example' => '137e31df-3754-40b4-be2f-c793ad84****',
                                    ],
                                    'StackRegionId' => [
                                        'title' => '阿里云资源编排服务（ROS）资源栈所属的地域ID。'."\n"
                                            ."\n",
                                        'description' => '阿里云资源编排服务（ROS）资源栈所属的地域ID。',
                                        'type' => 'string',
                                        'example' => 'cn-hangzhou',
                                    ],
                                    'Status' => [
                                        'title' => '计划状态。',
                                        'description' => '计划状态。取值：'."\n"
                                            .'- PreviewInProgress：预检中。'."\n"
                                            .'- PreviewSuccess：预检成功。'."\n"
                                            .'- PreviewFailed：预检失败。'."\n"
                                            .'- ApplicationInProgress：审批中。'."\n"
                                            .'- ApplicationApproved：审批通过。'."\n"
                                            .'- ApplicationRejected：审批被拒绝。'."\n"
                                            .'- ExecuteInProgress：执行中。'."\n"
                                            .'- ExecuteSuccess：执行成功。'."\n"
                                            .'- ExecuteFailed：执行失败。'."\n"
                                            .'- Canceled：已取消。',
                                        'type' => 'string',
                                        'example' => 'PreviewSuccess',
                                    ],
                                    'StatusMessage' => [
                                        'title' => '计划状态信息。',
                                        'description' => '计划状态信息。'."\n"
                                            ."\n"
                                            .'> 仅在计划状态为PreviewFailed或ExecuteFailed时，返回该参数。',
                                        'type' => 'string',
                                        'example' => 'Create stack failed: Resource CREATE failed: terraform stack sc-146611588617****-pp-bp1ddg1n2a**** failure...',
                                    ],
                                    'CreateTime' => [
                                        'title' => '计划创建时间。'."\n"
                                            ."\n"
                                            .'按照ISO8601标准表示，使用UTC时间，格式：YYYY-MM-DDThh:mm:ssZ。',
                                        'description' => '计划创建时间。'."\n"
                                            ."\n"
                                            .'按照ISO8601标准表示，使用UTC时间，格式：YYYY-MM-DDThh:mm:ssZ。',
                                        'type' => 'string',
                                        'example' => '2022-05-23T09:46:27Z',
                                    ],
                                    'UpdateTime' => [
                                        'title' => '计划最后更新时间。'."\n"
                                            ."\n"
                                            .'按照ISO8601标准表示，使用UTC时间，格式：YYYY-MM-DDThh:mm:ssZ。',
                                        'description' => '计划最后更新时间。'."\n"
                                            ."\n"
                                            .'按照ISO8601标准表示，使用UTC时间，格式：YYYY-MM-DDThh:mm:ssZ。',
                                        'type' => 'string',
                                        'example' => '2022-05-23T09:47:29Z',
                                    ],
                                    'Tags' => [
                                        'title' => '用户自定义标签列表。'."\n"
                                            ."\n",
                                        'description' => '用户自定义标签列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Key' => [
                                                    'title' => '用户自定义标签键。'."\n"
                                                        ."\n",
                                                    'description' => '用户自定义标签键。',
                                                    'type' => 'string',
                                                    'example' => 'k1',
                                                ],
                                                'Value' => [
                                                    'title' => '用户自定义标签值。'."\n"
                                                        ."\n",
                                                    'description' => '用户自定义标签值。',
                                                    'type' => 'string',
                                                    'example' => 'v1',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'OperationType' => [
                                        'title' => '计划操作类型，取值为All，TerminateProvisionedProduct，UpdateProvisionedProduct，LaunchProduct。',
                                        'description' => '计划操作类型。取值：'."\n"
                                            ."\n"
                                            .'- LaunchProduct：启动产品。'."\n"
                                            .'- UpdateProvisionedProduct：更新实例。'."\n"
                                            .'- TerminateProvisionedProduct：终止实例。',
                                        'type' => 'string',
                                        'example' => 'LaunchProduct',
                                    ],
                                    'Description' => [
                                        'title' => '计划描述。',
                                        'description' => '计划描述。',
                                        'type' => 'string',
                                        'example' => '创建ECS。',
                                    ],
                                    'AssignedApprovers' => [
                                        'title' => '计划审批人列表。',
                                        'description' => '计划审批人列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'PrincipalType' => [
                                                    'title' => '计划审批人的RAM实体类型。取值：'."\n"
                                                        ."\n"
                                                        .'RamUser：RAM用户。'."\n"
                                                        .'RamRole：RAM角色。'."\n",
                                                    'description' => '计划审批人的RAM实体类型。取值：'."\n"
                                                        ."\n"
                                                        .'- RamUser：RAM用户。'."\n"
                                                        .'- RamRole：RAM角色。',
                                                    'type' => 'string',
                                                    'example' => 'RamUser',
                                                ],
                                                'PrincipalName' => [
                                                    'title' => '计划归属人的RAM实体名称。'."\n",
                                                    'description' => '计划审批人的RAM实体名称。',
                                                    'type' => 'string',
                                                    'example' => 'approver',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'OwnerPrincipalType' => [
                                        'title' => '计划归属人的RAM实体类型。取值：'."\n"
                                            ."\n"
                                            .'RamUser：RAM用户。'."\n"
                                            .'RamRole：RAM角色。'."\n",
                                        'description' => '计划归属人的RAM实体类型。取值：'."\n"
                                            ."\n"
                                            .'- RamUser：RAM用户。'."\n"
                                            .'- RamRole：RAM角色。',
                                        'type' => 'string',
                                        'example' => 'RamUser',
                                    ],
                                    'OwnerPrincipalId' => [
                                        'title' => '计划归属人的RAM实体ID。'."\n"
                                            ."\n",
                                        'description' => '计划归属人的RAM实体ID。'."\n"
                                            ."\n",
                                        'type' => 'string',
                                        'example' => '27740196382623****',
                                    ],
                                    'ApprovalDetail' => [
                                        'title' => '计划审批详情。',
                                        'description' => '计划审批详情。',
                                        'type' => 'object',
                                        'properties' => [
                                            'OperationRecords' => [
                                                'title' => '用户操作记录。',
                                                'description' => '操作记录。',
                                                'type' => 'array',
                                                'items' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Operator' => [
                                                            'title' => '操作人。',
                                                            'description' => '已对计划进行操作的RAM实体。',
                                                            'type' => 'object',
                                                            'properties' => [
                                                                'PrincipalType' => [
                                                                    'title' => '操作人的RAM实体类型。取值：'."\n"
                                                                        ."\n"
                                                                        .'RamUser：RAM用户。'."\n"
                                                                        .'RamRole：RAM角色。',
                                                                    'description' => 'RAM实体类型。取值：'."\n"
                                                                        ."\n"
                                                                        .'- RamUser：RAM用户。'."\n"
                                                                        .'- RamRole：RAM角色。',
                                                                    'type' => 'string',
                                                                    'example' => 'RamUser',
                                                                ],
                                                                'PrincipalId' => [
                                                                    'title' => '操作人的RAM实体ID。',
                                                                    'description' => 'RAM实体ID。',
                                                                    'type' => 'string',
                                                                    'example' => '277401963826235***'."\n",
                                                                ],
                                                                'PrincipalName' => [
                                                                    'title' => '操作人的RAM实体名称。',
                                                                    'description' => '操作人的RAM实体名称。',
                                                                    'type' => 'string',
                                                                    'example' => 'approver',
                                                                ],
                                                            ],
                                                        ],
                                                        'Comment' => [
                                                            'title' => '操作人的审批附加意见。',
                                                            'description' => '操作人的审批附加意见。',
                                                            'type' => 'string',
                                                            'example' => '同意。',
                                                        ],
                                                        'CreateTime' => [
                                                            'title' => '操作时间。',
                                                            'description' => '操作时间。',
                                                            'type' => 'string',
                                                            'example' => '2022-03-22T05:56:14Z',
                                                        ],
                                                        'ApprovalAction' => [
                                                            'title' => '操作人对计划进行的操作类型。取值：'."\n"
                                                                ."\n"
                                                                .'Submit：提交计划。'."\n"
                                                                .'Cancel：取消计划。'."\n"
                                                                .'Approve：审批通过。'."\n"
                                                                .'Reject：审批拒绝。',
                                                            'description' => '操作人对计划进行的操作类型。取值：'."\n"
                                                                ."\n"
                                                                .'- Submit：提交计划。'."\n"
                                                                .'- Cancel：取消计划。'."\n"
                                                                .'- Approve：审批通过。'."\n"
                                                                .'- Reject：审批拒绝。',
                                                            'type' => 'string',
                                                            'example' => 'Approve',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                            'TodoTaskActivities' => [
                                                'title' => '计划正在执行的操作。',
                                                'description' => '计划正在执行的操作。',
                                                'type' => 'array',
                                                'items' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'ActivityName' => [
                                                            'title' => '计划正在执行的活动名。',
                                                            'description' => '计划正在执行的操作名。',
                                                            'type' => 'string',
                                                            'example' => 'ApproverNode-1',
                                                        ],
                                                        'Tasks' => [
                                                            'title' => '委派任务列表。',
                                                            'description' => '委派任务列表。',
                                                            'type' => 'array',
                                                            'items' => [
                                                                'type' => 'object',
                                                                'properties' => [
                                                                    'Operator' => [
                                                                        'title' => '操作人。',
                                                                        'description' => '可对计划进行操作的RAM实体。',
                                                                        'type' => 'object',
                                                                        'properties' => [
                                                                            'PrincipalType' => [
                                                                                'title' => '操作人的RAM实体类型。取值：'."\n"
                                                                                    ."\n"
                                                                                    .'RamUser：RAM用户。'."\n"
                                                                                    .'RamRole：RAM角色。',
                                                                                'description' => 'RAM实体类型。取值：'."\n"
                                                                                    ."\n"
                                                                                    .'- RamUser：RAM用户。'."\n"
                                                                                    .'- RamRole：RAM角色。',
                                                                                'type' => 'string',
                                                                                'example' => 'RamUser',
                                                                            ],
                                                                            'PrincipalName' => [
                                                                                'title' => '操作人的RAM实体名称。',
                                                                                'description' => 'RAM实体名称。',
                                                                                'type' => 'string',
                                                                                'example' => 'approver',
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
                                    'OwnerPrincipalName' => [
                                        'title' => '计划归属人的RAM实体名称。',
                                        'description' => '计划归属人的RAM实体名称。',
                                        'type' => 'string',
                                        'example' => 'endUser',
                                    ],
                                    'Uid' => [
                                        'title' => '计划归属人的云账号ID。',
                                        'description' => '计划归属人的云账号ID。',
                                        'type' => 'string',
                                        'example' => '146611588617****',
                                    ],
                                ],
                            ],
                            'ProductDetail' => [
                                'title' => '计划产品详情。',
                                'description' => '计划产品详情。',
                                'type' => 'object',
                                'properties' => [
                                    'ProductArn' => [
                                        'title' => '产品ARN。'."\n"
                                            ."\n",
                                        'description' => '产品ARN。'."\n"
                                            ."\n",
                                        'type' => 'string',
                                        'example' => 'acs:servicecatalog:cn-hangzhou:146611588617****:product/prod-bp18r7q127****',
                                    ],
                                    'Description' => [
                                        'title' => '产品描述。'."\n"
                                            ."\n",
                                        'description' => '产品描述。'."\n"
                                            ."\n",
                                        'type' => 'string',
                                        'example' => '这是一个产品描述',
                                    ],
                                    'CreateTime' => [
                                        'title' => '创建时间。'."\n"
                                            ."\n"
                                            .'按照ISO8601标准表示，使用UTC时间，格式：YYYY-MM-DDThh:mm:ssZ。',
                                        'description' => '创建时间。'."\n"
                                            ."\n"
                                            .'按照ISO8601标准表示，使用UTC时间，格式：YYYY-MM-DDThh:mm:ssZ。',
                                        'type' => 'string',
                                        'example' => '2022-04-12T06:10:37Z',
                                    ],
                                    'ProductId' => [
                                        'title' => '产品ID。'."\n"
                                            ."\n",
                                        'description' => '产品ID。'."\n"
                                            ."\n",
                                        'type' => 'string',
                                        'example' => 'prod-bp18r7q127****',
                                    ],
                                    'ProductName' => [
                                        'title' => '产品名称。'."\n"
                                            ."\n",
                                        'description' => '产品名称。'."\n"
                                            ."\n",
                                        'type' => 'string',
                                        'example' => 'DEMO-创建ECS',
                                    ],
                                    'ProviderName' => [
                                        'title' => '产品提供者。'."\n"
                                            ."\n",
                                        'description' => '产品提供者。'."\n"
                                            ."\n",
                                        'type' => 'string',
                                        'example' => 'IT团队',
                                    ],
                                    'ProductType' => [
                                        'title' => '产品类型。'."\n"
                                            ."\n"
                                            .'取值为Ros，表示阿里云资源编排服务（ROS）。',
                                        'description' => '产品类型。'."\n"
                                            ."\n"
                                            .'取值为Ros，表示阿里云资源编排服务（ROS）。',
                                        'type' => 'string',
                                        'example' => 'Ros',
                                    ],
                                ],
                            ],
                            'ResourceChanges' => [
                                'title' => '计划资源变更列表。',
                                'description' => '计划资源变更列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'LogicalResourceId' => [
                                            'title' => '资源逻辑ID。',
                                            'description' => '资源逻辑ID。',
                                            'type' => 'string',
                                            'example' => 'instance',
                                        ],
                                        'PhysicalResourceId' => [
                                            'title' => '资源物理ID。'."\n"
                                                ."\n"
                                                .'当Action为Modify或Remove时，返回本参数。',
                                            'description' => '资源物理ID。'."\n"
                                                ."\n"
                                                .'> 当Action为Modify或Remove时，返回本参数。',
                                            'type' => 'string',
                                            'example' => 'i-bp13lmam3qd9q6il****',
                                        ],
                                        'Replacement' => [
                                            'title' => '模板是否为替换更新。取值：'."\n"
                                                ."\n"
                                                .'True：替换更新。'."\n"
                                                .'False：修改更新。'."\n"
                                                .'Conditional：可能是替换更新，模板运行时才能确定。',
                                            'description' => '模板是否为替换更新。取值：'."\n"
                                                ."\n"
                                                .'- True：替换更新。'."\n"
                                                .'- False：修改更新。'."\n"
                                                .'- Conditional：可能是替换更新，模板运行时才能确定。'."\n"
                                                .'> 当Action为Modify时，返回本参数。',
                                            'type' => 'string',
                                            'example' => 'True',
                                        ],
                                        'ResourceType' => [
                                            'title' => '资源类型。',
                                            'description' => '资源类型。',
                                            'type' => 'string',
                                            'example' => 'alicloud_instance'."\n",
                                        ],
                                        'Action' => [
                                            'title' => '资源行为。取值：'."\n"
                                                ."\n"
                                                .'Add：增加资源。'."\n"
                                                .'Modify：修改资源。'."\n"
                                                .'Remove：删除资源。'."\n"
                                                .'None：无变化。',
                                            'description' => '资源行为。取值：'."\n"
                                                ."\n"
                                                .'- Add：增加资源。'."\n"
                                                .'- Modify：修改资源。'."\n"
                                                .'- Remove：删除资源。'."\n"
                                                .'- None：无变化。',
                                            'type' => 'string',
                                            'example' => 'Add',
                                        ],
                                    ],
                                ],
                            ],
                            'ProductVersionDetail' => [
                                'title' => '产品版本详情',
                                'description' => '产品版本详情。',
                                'type' => 'object',
                                'properties' => [
                                    'Active' => [
                                        'title' => '是否启用',
                                        'description' => '是否启用。取值：'."\n"
                                            ."\n"
                                            .'- true（默认值）：启用。'."\n"
                                            .'- false：禁用。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'Description' => [
                                        'title' => '产品版本描述',
                                        'description' => '产品版本描述。',
                                        'type' => 'string',
                                        'example' => '这是一个产品版本描述',
                                    ],
                                    'CreateTime' => [
                                        'title' => '创建时间',
                                        'description' => '产品版本创建时间。'."\n"
                                            ."\n"
                                            .'按照ISO8601标准表示，使用UTC时间，格式：YYYY-MM-DDThh:mm:ssZ。',
                                        'type' => 'string',
                                        'example' => '2022-04-12T06:10:37Z',
                                    ],
                                    'Guidance' => [
                                        'title' => '推荐信息',
                                        'description' => '推荐信息。取值：'."\n"
                                            ."\n"
                                            .'- Default（默认值）：无。'."\n"
                                            .'- Recommended：稳定版。'."\n"
                                            .'- Latest：最新版。'."\n"
                                            .'- Deprecated：将废弃。',
                                        'type' => 'string',
                                        'example' => 'Default',
                                    ],
                                    'ProductVersionId' => [
                                        'title' => '产品版本ID',
                                        'description' => '产品版本ID。',
                                        'type' => 'string',
                                        'example' => 'pv-bp15e79d26****',
                                    ],
                                    'ProductVersionName' => [
                                        'title' => '产品版本名称',
                                        'description' => '产品版本名称。',
                                        'type' => 'string',
                                        'example' => '1.0.0',
                                    ],
                                    'ProductId' => [
                                        'title' => '产品版本所属的产品ID',
                                        'description' => '产品版本所属的产品ID。',
                                        'type' => 'string',
                                        'example' => 'prod-bp18r7q127****',
                                    ],
                                    'TemplateUrl' => [
                                        'title' => '模板的OSS地址',
                                        'description' => '模板的URL地址。',
                                        'type' => 'string',
                                        'example' => 'oss://servicecatalog-cn-hangzhou/146611588617****/terraform/template/tpl-bp1217we23****/template.json',
                                    ],
                                    'TemplateType' => [
                                        'title' => '模板类型',
                                        'description' => '模板类型。'."\n"
                                            ."\n"
                                            .'取值为RosTerraformTemplate，表示阿里云资源编排服务（ROS）支持的Terraform模板。',
                                        'type' => 'string',
                                        'example' => 'RosTerraformTemplate',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'A system error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0FEEF92D-4052-5202-87D0-3D8EC16F81BF\\",\\n  \\"PlanDetail\\": {\\n    \\"PlanId\\": \\"plan-bp1jvmdk2k****\\",\\n    \\"PlanName\\": \\"DEMO-ECS实例\\",\\n    \\"PlanType\\": \\"Ros\\",\\n    \\"PortfolioId\\": \\"port-bp1yt7582g****\\",\\n    \\"ProductId\\": \\"prod-bp18r7q127****\\",\\n    \\"ProductVersionId\\": \\"pv-bp15e79d26****\\",\\n    \\"ProvisionedProductId\\": \\"pp-bp1ddg1n2a****\\",\\n    \\"ProvisionedProductName\\": \\"DEMO-ECS实例\\",\\n    \\"Parameters\\": [\\n      {\\n        \\"ParameterKey\\": \\"instance_type\\",\\n        \\"ParameterValue\\": \\"ecs.s6-c1m1.small\\"\\n      }\\n    ],\\n    \\"StackId\\": \\"137e31df-3754-40b4-be2f-c793ad84****\\",\\n    \\"StackRegionId\\": \\"cn-hangzhou\\",\\n    \\"Status\\": \\"PreviewSuccess\\",\\n    \\"StatusMessage\\": \\"Create stack failed: Resource CREATE failed: terraform stack sc-146611588617****-pp-bp1ddg1n2a**** failure...\\",\\n    \\"CreateTime\\": \\"2022-05-23T09:46:27Z\\",\\n    \\"UpdateTime\\": \\"2022-05-23T09:47:29Z\\",\\n    \\"Tags\\": [\\n      {\\n        \\"Key\\": \\"k1\\",\\n        \\"Value\\": \\"v1\\"\\n      }\\n    ],\\n    \\"OperationType\\": \\"LaunchProduct\\",\\n    \\"Description\\": \\"创建ECS。\\",\\n    \\"AssignedApprovers\\": [\\n      {\\n        \\"PrincipalType\\": \\"RamUser\\",\\n        \\"PrincipalName\\": \\"approver\\"\\n      }\\n    ],\\n    \\"OwnerPrincipalType\\": \\"RamUser\\",\\n    \\"OwnerPrincipalId\\": \\"27740196382623****\\",\\n    \\"ApprovalDetail\\": {\\n      \\"OperationRecords\\": [\\n        {\\n          \\"Operator\\": {\\n            \\"PrincipalType\\": \\"RamUser\\",\\n            \\"PrincipalId\\": \\"277401963826235***\\\\n\\",\\n            \\"PrincipalName\\": \\"approver\\"\\n          },\\n          \\"Comment\\": \\"同意。\\",\\n          \\"CreateTime\\": \\"2022-03-22T05:56:14Z\\",\\n          \\"ApprovalAction\\": \\"Approve\\"\\n        }\\n      ],\\n      \\"TodoTaskActivities\\": [\\n        {\\n          \\"ActivityName\\": \\"ApproverNode-1\\",\\n          \\"Tasks\\": [\\n            {\\n              \\"Operator\\": {\\n                \\"PrincipalType\\": \\"RamUser\\",\\n                \\"PrincipalName\\": \\"approver\\"\\n              }\\n            }\\n          ]\\n        }\\n      ]\\n    },\\n    \\"OwnerPrincipalName\\": \\"endUser\\",\\n    \\"Uid\\": \\"146611588617****\\"\\n  },\\n  \\"ProductDetail\\": {\\n    \\"ProductArn\\": \\"acs:servicecatalog:cn-hangzhou:146611588617****:product/prod-bp18r7q127****\\",\\n    \\"Description\\": \\"这是一个产品描述\\",\\n    \\"CreateTime\\": \\"2022-04-12T06:10:37Z\\",\\n    \\"ProductId\\": \\"prod-bp18r7q127****\\",\\n    \\"ProductName\\": \\"DEMO-创建ECS\\",\\n    \\"ProviderName\\": \\"IT团队\\",\\n    \\"ProductType\\": \\"Ros\\"\\n  },\\n  \\"ResourceChanges\\": [\\n    {\\n      \\"LogicalResourceId\\": \\"instance\\",\\n      \\"PhysicalResourceId\\": \\"i-bp13lmam3qd9q6il****\\",\\n      \\"Replacement\\": \\"True\\",\\n      \\"ResourceType\\": \\"alicloud_instance\\\\n\\",\\n      \\"Action\\": \\"Add\\"\\n    }\\n  ],\\n  \\"ProductVersionDetail\\": {\\n    \\"Active\\": true,\\n    \\"Description\\": \\"这是一个产品版本描述\\",\\n    \\"CreateTime\\": \\"2022-04-12T06:10:37Z\\",\\n    \\"Guidance\\": \\"Default\\",\\n    \\"ProductVersionId\\": \\"pv-bp15e79d26****\\",\\n    \\"ProductVersionName\\": \\"1.0.0\\",\\n    \\"ProductId\\": \\"prod-bp18r7q127****\\",\\n    \\"TemplateUrl\\": \\"oss://servicecatalog-cn-hangzhou/146611588617****/terraform/template/tpl-bp1217we23****/template.json\\",\\n    \\"TemplateType\\": \\"RosTerraformTemplate\\"\\n  }\\n}","type":"json"}]',
            'title' => '查询计划信息',
        ],
        'ListProvisionedProductPlans' => [
            'summary' => '查询计划列表。可分用户维度和审批维度进行查询。',
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
            ],
            'parameters' => [
                [
                    'name' => 'Filters',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'title' => '过滤条件。',
                        'description' => '过滤条件。',
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'title' => '过滤条件的名称。取值：'."\n"
                                        ."\n"
                                        .'ProvisionedProductPlanName：按计划名称查找，完整匹配（忽略大小写）。'."\n"
                                        .'ProvisionedProductPlanApprover：按审批人精确查找，格式为RamUser/RamRole:审批人名称，可多选。'."\n"
                                        .'ProvisionedProductPlanApproverName：按审批人名称查找，直接输入审批人的RAM实体名称，可多选。'."\n"
                                        .'ProvisionedProductPlanStatus：按计划状态查找，直接输入审批人的RAM实体名称，可多选。'."\n"
                                        .'ProvisionedProductPlanOwnerUid：按计划归属云账号ID精确查找。'."\n"
                                        .'FullTextSearch：全文检索，按计划名称查找，模糊匹配。',
                                    'description' => '过滤条件的名称。取值：'."\n"
                                        ."\n"
                                        .'- ProvisionedProductPlanName：按计划名称查找，完整匹配（忽略大小写）。'."\n"
                                        .'- ProvisionedProductPlanApprover：按审批人精确查找，格式为`RamUser/RamRole:<审批人名称>`，可多选。'."\n"
                                        .'- ProvisionedProductPlanApproverName：按审批人名称查找，直接输入审批人的RAM实体名称，可多选。'."\n"
                                        .'- ProvisionedProductPlanStatus：按计划状态查找，直接输入计划状态，可多选。'."\n"
                                        .'- ProvisionedProductPlanOwnerUid：按计划归属云账号ID精确查找。'."\n"
                                        .'- FullTextSearch：全文检索，按计划名称查找，模糊匹配。',
                                    'type' => 'string',
                                    'required' => false,
                                    'enumValueTitles' => [],
                                    'example' => 'FullTextSearch',
                                ],
                                'Value' => [
                                    'title' => '过滤条件的值。'."\n"
                                        ."\n",
                                    'description' => '过滤条件的值。'."\n"
                                        ."\n",
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'ECS',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 5,
                    ],
                ],
                [
                    'name' => 'SortBy',
                    'in' => 'query',
                    'schema' => [
                        'title' => '排序字段。'."\n"
                            ."\n"
                            .'取值为CreateTime，表示实例创建时间。',
                        'description' => '排序字段。'."\n"
                            ."\n"
                            .'取值为CreateTime，表示计划创建时间。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'CreateTime',
                    ],
                ],
                [
                    'name' => 'SortOrder',
                    'in' => 'query',
                    'schema' => [
                        'title' => '排序方式。取值：'."\n"
                            ."\n"
                            .'Asc：正序。'."\n"
                            .'Desc：倒序。',
                        'description' => '排序方式。取值：'."\n"
                            ."\n"
                            .'- Asc：正序。'."\n"
                            .'- Desc（默认值）：倒序。',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'Asc' => 'Asc',
                            'Desc' => 'Desc',
                        ],
                        'example' => 'Desc',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'title' => '页码。'."\n"
                            ."\n"
                            .'起始值：1。默认值：1。',
                        'description' => '页码。'."\n"
                            ."\n"
                            .'起始值：1。默认值：1。',
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
                        'title' => '分页时每页显示的数据行数。'."\n"
                            ."\n"
                            .'取值范围：1~100。起始值：1。默认值：10。',
                        'description' => '分页时每页显示的数据行数。'."\n"
                            ."\n"
                            .'取值范围：1~100。起始值：1。默认值：10。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'AccessLevelFilter',
                    'in' => 'query',
                    'schema' => [
                        'title' => '访问过滤器。取值：'."\n"
                            ."\n"
                            .'User（默认值）：用户。'."\n"
                            .'Account：账号。'."\n"
                            .'ResourceDirectory：资源目录。',
                        'description' => '访问过滤器。取值：'."\n"
                            ."\n"
                            .'- User（默认值）：用户。'."\n"
                            .'- Account：账号。'."\n"
                            .'- ResourceDirectory：资源目录。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'User',
                    ],
                ],
                [
                    'name' => 'ApprovalFilter',
                    'in' => 'query',
                    'schema' => [
                        'title' => '审批维度访问过滤器。取值：'."\n"
                            ."\n"
                            .'ReceivedRequests：待审批的。'."\n"
                            .'ApprovalHistory：审批历史。'."\n"
                            .'AccountRequests：账号级别全部审批。'."\n"
                            .'ResourceDirectoryRequests：资源目录级别全部审批。',
                        'description' => '审批维度访问过滤器。取值：'."\n"
                            ."\n"
                            .'- ReceivedRequests：待我审批。'."\n"
                            .'- ApprovalHistory：审批历史。'."\n"
                            .'- AccountRequests：账号级别全部审批。'."\n"
                            .'- ResourceDirectoryRequests：资源目录级别全部审批。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ReceivedRequests',
                    ],
                ],
                [
                    'name' => 'ProvisionedProductId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'pp-bp1ddg1n2a****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0FEEF92D-4052-5202-87D0-3D8EC16F****',
                            ],
                            'PlanDetails' => [
                                'title' => '计划列表。'."\n",
                                'description' => '计划列表。'."\n",
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'PlanId' => [
                                            'title' => '计划ID。',
                                            'description' => '计划ID。',
                                            'type' => 'string',
                                            'example' => 'plan-bp18mmdh2u****',
                                        ],
                                        'PlanName' => [
                                            'title' => '计划名称。'."\n",
                                            'description' => '计划名称。'."\n",
                                            'type' => 'string',
                                            'example' => 'DEMO-创建ECS-637****',
                                        ],
                                        'PlanType' => [
                                            'title' => '计划类型。'."\n"
                                                ."\n"
                                                .'取值为Ros，表示阿里云资源编排服务（ROS）。',
                                            'description' => '计划类型。'."\n"
                                                ."\n"
                                                .'取值为Ros，表示阿里云资源编排服务（ROS）。',
                                            'type' => 'string',
                                            'example' => 'Ros',
                                        ],
                                        'PortfolioId' => [
                                            'title' => '产品组合ID。'."\n",
                                            'description' => '产品组合ID。'."\n",
                                            'type' => 'string',
                                            'example' => 'port-bp1438kf2j****',
                                        ],
                                        'ProductId' => [
                                            'title' => '产品ID。'."\n",
                                            'description' => '产品ID。'."\n",
                                            'type' => 'string',
                                            'example' => 'prod-bp1rtrnh2c****',
                                        ],
                                        'ProductVersionId' => [
                                            'title' => '产品版本ID。'."\n",
                                            'description' => '产品版本ID。'."\n",
                                            'type' => 'string',
                                            'example' => 'pv-bp19udk22v****',
                                        ],
                                        'ProvisionedProductId' => [
                                            'title' => '实例ID。'."\n",
                                            'description' => '实例ID。'."\n",
                                            'type' => 'string',
                                            'example' => 'pp-bp1c35162d****',
                                        ],
                                        'Parameters' => [
                                            'title' => '用户输入的模板参数。'."\n",
                                            'description' => '用户输入的模板参数。'."\n",
                                            'type' => 'array',
                                            'items' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'ParameterKey' => [
                                                        'title' => '模板中定义的参数名称。'."\n",
                                                        'description' => '模板中定义的参数名称。'."\n",
                                                        'type' => 'string',
                                                        'example' => 'role_name',
                                                    ],
                                                    'ParameterValue' => [
                                                        'title' => '用户输入的模板参数值。'."\n",
                                                        'description' => '用户输入的模板参数值。'."\n",
                                                        'type' => 'string',
                                                        'example' => 'Test-8',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'ProvisionedProductName' => [
                                            'title' => '实例名称。',
                                            'description' => '实例名称。',
                                            'type' => 'string',
                                            'example' => 'rds-MYSQL-875****',
                                        ],
                                        'StackId' => [
                                            'title' => '阿里云资源编排服务（ROS）资源栈ID。'."\n",
                                            'description' => '阿里云资源编排服务（ROS）资源栈ID。'."\n",
                                            'type' => 'string',
                                            'example' => '2599090a-309e-4306-b989-17ba66a9****',
                                        ],
                                        'StackRegionId' => [
                                            'title' => '阿里云资源编排服务（ROS）资源栈所属的地域ID。'."\n",
                                            'description' => '阿里云资源编排服务（ROS）资源栈所属的地域ID。'."\n",
                                            'type' => 'string',
                                            'example' => 'cn-hangzhou',
                                        ],
                                        'Status' => [
                                            'title' => '计划状态。',
                                            'description' => '计划状态。取值：'."\n"
                                                .'- PreviewInProgress：预检中。'."\n"
                                                .'- PreviewSuccess：预检成功。'."\n"
                                                .'- PreviewFailed：预检失败。'."\n"
                                                .'- ApplicationInProgress：审批中。'."\n"
                                                .'- ApplicationApproved：审批通过。'."\n"
                                                .'- ApplicationRejected：审批被拒绝。'."\n"
                                                .'- ExecuteInProgress：执行中。'."\n"
                                                .'- ExecuteSuccess：执行成功。'."\n"
                                                .'- ExecuteFailed：执行失败。'."\n"
                                                .'- Canceled：已取消。',
                                            'type' => 'string',
                                            'example' => 'PreviewSuccess',
                                        ],
                                        'StatusMessage' => [
                                            'title' => '计划状态信息。',
                                            'description' => '计划状态信息。'."\n"
                                                ."\n"
                                                .'> 仅在计划状态为PreviewFailed或ExecuteFailed时，返回该参数。',
                                            'type' => 'string',
                                            'example' => 'Create stack failed: Resource CREATE failed: terraform stack sc-146611588617****-pp-bp1ddg1n2a**** failure...',
                                        ],
                                        'CreateTime' => [
                                            'title' => '计划创建时间。'."\n"
                                                ."\n"
                                                .'按照ISO8601标准表示，使用UTC时间，格式：YYYY-MM-DDThh:mm:ssZ。',
                                            'description' => '计划创建时间。'."\n"
                                                ."\n"
                                                .'按照ISO8601标准表示，使用UTC时间，格式：YYYY-MM-DDThh:mm:ssZ。',
                                            'type' => 'string',
                                            'example' => '2022-09-13T02:01:22Z',
                                        ],
                                        'UpdateTime' => [
                                            'title' => '计划最后更新时间。'."\n"
                                                ."\n"
                                                .'按照ISO8601标准表示，使用UTC时间，格式：YYYY-MM-DDThh:mm:ssZ。',
                                            'description' => '计划最后更新时间。'."\n"
                                                ."\n"
                                                .'按照ISO8601标准表示，使用UTC时间，格式：YYYY-MM-DDThh:mm:ssZ。',
                                            'type' => 'string',
                                            'example' => '2022-07-18T06:02:35.075Z',
                                        ],
                                        'Tags' => [
                                            'title' => '用户自定义标签列表。'."\n",
                                            'description' => '用户自定义标签列表。'."\n",
                                            'type' => 'array',
                                            'items' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'Key' => [
                                                        'title' => '用户自定义标签键。'."\n",
                                                        'description' => '用户自定义标签键。'."\n",
                                                        'type' => 'string',
                                                        'example' => 'k1',
                                                    ],
                                                    'Value' => [
                                                        'title' => '用户自定义标签值。'."\n",
                                                        'description' => '用户自定义标签值。'."\n",
                                                        'type' => 'string',
                                                        'example' => 'v1',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'OperationType' => [
                                            'title' => '计划操作类型，取值为All，TerminateProvisionedProduct，UpdateProvisionedProduct，LaunchProduct。',
                                            'description' => '计划操作类型。取值：'."\n"
                                                .'- LaunchProduct（默认）：启动产品。'."\n"
                                                .'- UpdateProvisionedProduct：更新实例。'."\n"
                                                .'- TerminateProvisionedProduct：终止实例。',
                                            'type' => 'string',
                                            'example' => 'LaunchProduct',
                                        ],
                                        'AssignedApprovers' => [
                                            'title' => '计划审批人列表。',
                                            'description' => '计划审批人列表。',
                                            'type' => 'array',
                                            'items' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'PrincipalType' => [
                                                        'title' => '计划审批人的RAM实体类型。取值：'."\n"
                                                            ."\n"
                                                            .'RamUser：RAM用户。'."\n"
                                                            .'RamRole：RAM角色。',
                                                        'description' => '计划审批人的RAM实体类型。取值：'."\n"
                                                            ."\n"
                                                            .'- RamUser：RAM用户。'."\n"
                                                            .'- RamRole：RAM角色。',
                                                        'type' => 'string',
                                                        'example' => 'RamUser',
                                                    ],
                                                    'PrincipalName' => [
                                                        'title' => '计划归属人的RAM实体名称。'."\n",
                                                        'description' => '计划审批人的RAM实体名称。',
                                                        'type' => 'string',
                                                        'example' => 'endUser',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'ProductName' => [
                                            'title' => '产品名称。'."\n",
                                            'description' => '产品名称。'."\n",
                                            'type' => 'string',
                                            'example' => '创建ECS',
                                        ],
                                        'Description' => [
                                            'title' => '计划描述。',
                                            'description' => '计划描述。',
                                            'type' => 'string',
                                            'example' => '开发团队使用',
                                        ],
                                        'OwnerPrincipalType' => [
                                            'title' => '计划归属人的RAM实体类型。取值：'."\n"
                                                ."\n"
                                                .'RamUser：RAM用户。'."\n"
                                                .'RamRole：RAM角色。',
                                            'description' => '计划归属人的RAM实体类型。取值：'."\n"
                                                ."\n"
                                                .'- RamUser：RAM用户。'."\n"
                                                .'- RamRole：RAM角色。',
                                            'type' => 'string',
                                            'example' => 'RamUser',
                                        ],
                                        'OwnerPrincipalId' => [
                                            'title' => '计划归属人的RAM实体ID。'."\n",
                                            'description' => '计划归属人的RAM实体ID。'."\n",
                                            'type' => 'string',
                                            'example' => '24477111603637****'."\n",
                                        ],
                                        'OwnerPrincipalName' => [
                                            'title' => '计划归属人的RAM实体名称。',
                                            'description' => '计划归属人的RAM实体名称。',
                                            'type' => 'string',
                                            'example' => 'enduser',
                                        ],
                                        'Uid' => [
                                            'title' => '计划归属人的云账号ID。',
                                            'description' => '计划归属人的云账号ID。',
                                            'type' => 'string',
                                            'example' => '146611588617****',
                                        ],
                                    ],
                                ],
                            ],
                            'TotalCount' => [
                                'title' => '总记录数。',
                                'description' => '总记录数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '16',
                            ],
                            'PageNumber' => [
                                'title' => '页码。'."\n"
                                    ."\n"
                                    .'起始值：1。默认值：1。',
                                'description' => '页码。'."\n"
                                    ."\n"
                                    .'起始值：1。默认值：1。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'PageSize' => [
                                'title' => '分页时每页显示的数据行数。'."\n"
                                    ."\n"
                                    .'取值范围：1~100。起始值：1。默认值：10。',
                                'description' => '分页时每页显示的数据行数。'."\n"
                                    ."\n"
                                    .'取值范围：1~100。起始值：1。默认值：10。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'A system error occurred.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0FEEF92D-4052-5202-87D0-3D8EC16F****\\",\\n  \\"PlanDetails\\": [\\n    {\\n      \\"PlanId\\": \\"plan-bp18mmdh2u****\\",\\n      \\"PlanName\\": \\"DEMO-创建ECS-637****\\",\\n      \\"PlanType\\": \\"Ros\\",\\n      \\"PortfolioId\\": \\"port-bp1438kf2j****\\",\\n      \\"ProductId\\": \\"prod-bp1rtrnh2c****\\",\\n      \\"ProductVersionId\\": \\"pv-bp19udk22v****\\",\\n      \\"ProvisionedProductId\\": \\"pp-bp1c35162d****\\",\\n      \\"Parameters\\": [\\n        {\\n          \\"ParameterKey\\": \\"role_name\\",\\n          \\"ParameterValue\\": \\"Test-8\\"\\n        }\\n      ],\\n      \\"ProvisionedProductName\\": \\"rds-MYSQL-875****\\",\\n      \\"StackId\\": \\"2599090a-309e-4306-b989-17ba66a9****\\",\\n      \\"StackRegionId\\": \\"cn-hangzhou\\",\\n      \\"Status\\": \\"PreviewSuccess\\",\\n      \\"StatusMessage\\": \\"Create stack failed: Resource CREATE failed: terraform stack sc-146611588617****-pp-bp1ddg1n2a**** failure...\\",\\n      \\"CreateTime\\": \\"2022-09-13T02:01:22Z\\",\\n      \\"UpdateTime\\": \\"2022-07-18T06:02:35.075Z\\",\\n      \\"Tags\\": [\\n        {\\n          \\"Key\\": \\"k1\\",\\n          \\"Value\\": \\"v1\\"\\n        }\\n      ],\\n      \\"OperationType\\": \\"LaunchProduct\\",\\n      \\"AssignedApprovers\\": [\\n        {\\n          \\"PrincipalType\\": \\"RamUser\\",\\n          \\"PrincipalName\\": \\"endUser\\"\\n        }\\n      ],\\n      \\"ProductName\\": \\"创建ECS\\",\\n      \\"Description\\": \\"开发团队使用\\",\\n      \\"OwnerPrincipalType\\": \\"RamUser\\",\\n      \\"OwnerPrincipalId\\": \\"24477111603637****\\\\n\\",\\n      \\"OwnerPrincipalName\\": \\"enduser\\",\\n      \\"Uid\\": \\"146611588617****\\"\\n    }\\n  ],\\n  \\"TotalCount\\": 16,\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 10\\n}","type":"json"}]',
            'title' => '查询计划列表',
        ],
        'CancelProvisionedProductPlan' => [
            'summary' => '取消计划。',
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
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'PlanId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '计划ID',
                        'description' => '计划ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'plan-bp1jvmdk2k****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0FEEF92D-4052-5202-87D0-3D8EC16F81BF',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'A system error occurred.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0FEEF92D-4052-5202-87D0-3D8EC16F81BF\\"\\n}","type":"json"}]',
            'title' => '取消计划',
        ],
        'UpdateProvisionedProductPlan' => [
            'summary' => '更新计划。',
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
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'PlanId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '计划ID。',
                        'description' => '计划ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'plan-bp1jvmdk2k****'."\n",
                    ],
                ],
                [
                    'name' => 'PortfolioId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '产品组合ID。',
                        'description' => '产品组合ID。'."\n"
                            .'> 存在默认启动选项时，无需填写PortfolioId。没有默认启动选项时，必须填写PortfolioId。获取PortfolioId的方法，请参见[ListLaunchOptions](~~ListLaunchOptions~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'port-bp1yt7582g****'."\n",
                    ],
                ],
                [
                    'name' => 'ProductId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '产品ID。',
                        'description' => '产品ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'prod-bp18r7q127****'."\n",
                    ],
                ],
                [
                    'name' => 'ProductVersionId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '产品版本ID。',
                        'description' => '产品版本ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'pv-bp15e79d26****'."\n",
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '计划描述。',
                        'description' => '计划描述。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '用于创建ECS',
                    ],
                ],
                [
                    'name' => 'Parameters',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'title' => '用户输入的模板参数。'."\n",
                        'description' => '用户输入的模板参数。'."\n"
                            ."\n"
                            .'N最大值为200。'."\n"
                            ."\n"
                            .'> Parameters为可选参数。如果需要指定Parameters，则Parameters.N.ParameterKey和Parameters.N.ParameterValue必须同时指定。',
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'ParameterKey' => [
                                    'title' => '模板中定义的参数名称。'."\n",
                                    'description' => '模板中定义的参数名称。'."\n",
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'instance_type',
                                ],
                                'ParameterValue' => [
                                    'title' => '用户输入的模板参数值。'."\n",
                                    'description' => '用户输入的模板参数值。'."\n",
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'ecs.s6-c1m1.small'."\n",
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 200,
                    ],
                ],
                [
                    'name' => 'Tags',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'title' => '用户自定义标签列表。'."\n",
                        'description' => '用户输入的自定义标签。'."\n"
                            ."\n"
                            .'N最大值为20。'."\n"
                            ."\n"
                            .'> - Tags为可选参数。如果需要指定Tags，则Tags.N.Key和Tags.N.Value必须同时指定。'."\n"
                            .'> - 此标签会传递到资源栈中每个支持标签的资源中。',
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'title' => '用户自定义标签键。'."\n",
                                    'description' => '用户输入的自定义标签键。'."\n"
                                        ."\n"
                                        .'最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'k1',
                                ],
                                'Value' => [
                                    'title' => '用户自定义标签值。'."\n",
                                    'description' => '用户输入的自定义标签值。'."\n"
                                        ."\n"
                                        .'最多支持128个字符，不能以`acs:`开头，不能包含`http://`或者`https://`。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'v1',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 20,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0FEEF92D-4052-5202-87D0-3D8EC16F****'."\n",
                            ],
                            'PlanId' => [
                                'title' => '计划ID',
                                'description' => '计划ID。',
                                'type' => 'string',
                                'example' => 'plan-bp1jvmdk2k****'."\n",
                            ],
                            'ProvisionedProductId' => [
                                'title' => '实例ID',
                                'description' => '实例ID。',
                                'type' => 'string',
                                'example' => 'pp-bp1ddg1n2a****'."\n",
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'A system error occurred.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0FEEF92D-4052-5202-87D0-3D8EC16F****\\\\n\\",\\n  \\"PlanId\\": \\"plan-bp1jvmdk2k****\\\\n\\",\\n  \\"ProvisionedProductId\\": \\"pp-bp1ddg1n2a****\\\\n\\"\\n}","type":"json"}]',
            'title' => '更新计划',
        ],
        'ApproveProvisionedProductPlan' => [
            'summary' => '审批人审批计划。',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'PlanId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '计划ID',
                        'description' => '计划ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'plan-bp1jvmdk2k****',
                    ],
                ],
                [
                    'name' => 'ApprovalAction',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '审批动作，取值Approve表示同意，Reject表示拒绝',
                        'description' => '审批动作。取值：'."\n"
                            ."\n\n"
                            .'- Approve：同意。'."\n"
                            .'- Reject：拒绝。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Approve',
                    ],
                ],
                [
                    'name' => 'Comment',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '审批意见',
                        'description' => '审批意见。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '审批通过，允许创建资源',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0FEEF92D-4052-5202-87D0-3D8EC16F81BF',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'A system error occurred.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0FEEF92D-4052-5202-87D0-3D8EC16F81BF\\"\\n}","type":"json"}]',
            'title' => '审批计划',
        ],
        'ListProvisionedProductPlanApprovers' => [
            'summary' => '查询计划审批人列表。',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'AccessLevelFilter',
                    'in' => 'query',
                    'schema' => [
                        'title' => '访问过滤器',
                        'description' => '访问过滤器。取值：'."\n"
                            ."\n"
                            .'- User（默认值）：用户。'."\n"
                            .'- Account：账号。'."\n"
                            .'- ResourceDirectory：资源目录。'."\n"
                            ."\n"
                            .'> 必须指定`ApprovalFilter`和`AccessLevelFilter`两个参数中的一个参数，但不能同时指定。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'User',
                    ],
                ],
                [
                    'name' => 'Filters',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'title' => '过滤条件,支持Key值为ProvisionedProductPlanApproverName',
                        'description' => '过滤条件。',
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'title' => '过滤条件的名称',
                                    'description' => '过滤条件的名称。取值：'."\n"
                                        ."\n"
                                        .'- ProvisionedProductPlanApproverName：按审批人名称模糊匹配',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'ProvisionedProductPlanApproverName',
                                ],
                                'Value' => [
                                    'title' => '过滤条件的值',
                                    'description' => '过滤条件的值。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'approver',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 5,
                    ],
                ],
                [
                    'name' => 'ApprovalFilter',
                    'in' => 'query',
                    'schema' => [
                        'title' => '审批维度访问过滤器',
                        'description' => '审批维度访问过滤器。取值：'."\n"
                            .'- AccountRequests：账号级别全部审批。'."\n"
                            .'- ResourceDirectoryRequests：资源目录级别全部审批。'."\n"
                            .'> 必须指定`ApprovalFilter`和`AccessLevelFilter`两个参数中的一个参数，但不能同时指定。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'AccountRequests',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0FEEF92D-4052-5202-87D0-3D8EC16F****',
                            ],
                            'Approvers' => [
                                'title' => '审批人列表',
                                'description' => '审批人列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'PrincipalName' => [
                                            'title' => '审批人名称',
                                            'description' => '审批人名称。',
                                            'type' => 'string',
                                            'example' => 'approver-1',
                                        ],
                                        'PrincipalType' => [
                                            'title' => 'RAM实体类型',
                                            'description' => '计划审批人的RAM实体类型。取值：'."\n"
                                                ."\n"
                                                .'- RamUser：RAM用户。'."\n"
                                                .'- RamRole：RAM角色。',
                                            'type' => 'string',
                                            'example' => 'RamUser',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'A system error occurred.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0FEEF92D-4052-5202-87D0-3D8EC16F****\\",\\n  \\"Approvers\\": [\\n    {\\n      \\"PrincipalName\\": \\"approver-1\\",\\n      \\"PrincipalType\\": \\"RamUser\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询计划审批人列表',
        ],
        'ExecuteProvisionedProductPlan' => [
            'summary' => '执行计划。',
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
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'PlanId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '计划ID',
                        'description' => '计划ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'plan-bp1jvmdk2k****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0FEEF92D-4052-5202-87D0-3D8EC16F81BF',
                            ],
                            'PlanId' => [
                                'title' => '计划ID',
                                'description' => '计划ID。',
                                'type' => 'string',
                                'example' => 'plan-bp1jvmdk2k****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'A system error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0FEEF92D-4052-5202-87D0-3D8EC16F81BF\\",\\n  \\"PlanId\\": \\"plan-bp1jvmdk2k****\\"\\n}","type":"json"}]',
            'title' => '执行计划',
        ],
        'DeleteProvisionedProductPlan' => [
            'summary' => '删除计划。',
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
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'PlanId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '计划ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'plan-bp1jvmdk2k****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0FEEF92D-4052-5202-87D0-3D8EC16F81BF',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'A system error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0FEEF92D-4052-5202-87D0-3D8EC16F81BF\\"\\n}","type":"json"}]',
            'title' => '删除计划',
        ],
        'GetProvisionedProduct' => [
            'summary' => '查询实例信息。',
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
            ],
            'parameters' => [
                [
                    'name' => 'ProvisionedProductId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'pp-bp1ddg1n2a****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0FEEF92D-4052-5202-87D0-3D8EC16F81BF',
                            ],
                            'ProvisionedProductDetail' => [
                                'title' => '实例信息',
                                'description' => '实例详情。',
                                'type' => 'object',
                                'properties' => [
                                    'ProvisionedProductId' => [
                                        'title' => '实例ID',
                                        'description' => '实例ID。',
                                        'type' => 'string',
                                        'example' => 'pp-bp1ddg1n2a****',
                                    ],
                                    'ProvisionedProductArn' => [
                                        'title' => '实例ARN',
                                        'description' => '实例ARN。',
                                        'type' => 'string',
                                        'example' => 'acs:servicecatalog:cn-hangzhou:146611588617****:provisionedproduct/pp-bp1ddg1n2a****',
                                    ],
                                    'ProvisionedProductName' => [
                                        'title' => '实例名称',
                                        'description' => '实例名称。',
                                        'type' => 'string',
                                        'example' => 'DEMO-ECS实例',
                                    ],
                                    'ProductId' => [
                                        'title' => '产品ID',
                                        'description' => '产品ID。',
                                        'type' => 'string',
                                        'example' => 'prod-bp18r7q127****',
                                    ],
                                    'ProductName' => [
                                        'title' => '产品名称',
                                        'description' => '产品名称。',
                                        'type' => 'string',
                                        'example' => 'DEMO-创建ECS',
                                    ],
                                    'ProductVersionId' => [
                                        'title' => '产品版本ID',
                                        'description' => '产品版本ID。',
                                        'type' => 'string',
                                        'example' => 'pv-bp15e79d26****',
                                    ],
                                    'ProductVersionName' => [
                                        'title' => '产品版本名称',
                                        'description' => '产品版本名称。',
                                        'type' => 'string',
                                        'example' => '1.0',
                                    ],
                                    'LastTaskId' => [
                                        'title' => '上一次执行的任务ID',
                                        'description' => '上一次执行的任务ID。',
                                        'type' => 'string',
                                        'example' => 'task-bp1dmg242c****',
                                    ],
                                    'LastProvisioningTaskId' => [
                                        'title' => '上一次执行的实例操作任务ID',
                                        'description' => '上一次执行的实例操作任务ID。'."\n"
                                            ."\n"
                                            .'实例操作包括：'."\n"
                                            ."\n"
                                            .'- LaunchProduct：启动产品。'."\n"
                                            .'- UpdateProvisionedProduct：更新实例。'."\n"
                                            .'- TerminateProvisionedProduct：终止实例。'."\n",
                                        'type' => 'string',
                                        'example' => 'task-bp1dmg242c****',
                                    ],
                                    'LastSuccessfulProvisioningTaskId' => [
                                        'title' => '上一次成功执行的实例操作任务ID',
                                        'description' => '上一次成功执行的实例操作任务ID。'."\n"
                                            ."\n"
                                            .'实例操作包括：'."\n"
                                            ."\n"
                                            .'- LaunchProduct：启动产品。'."\n"
                                            .'- UpdateProvisionedProduct：更新实例。'."\n"
                                            .'- TerminateProvisionedProduct：终止实例。',
                                        'type' => 'string',
                                        'example' => 'task-bp1dmg242c****',
                                    ],
                                    'OwnerPrincipalType' => [
                                        'title' => '归属人的RAM实体类型',
                                        'description' => '实例归属人的RAM实体类型。取值：'."\n"
                                            ."\n"
                                            .'- RamUser：RAM用户。'."\n"
                                            .'- RamRole：RAM角色。',
                                        'type' => 'string',
                                        'example' => 'RamUser',
                                    ],
                                    'OwnerPrincipalId' => [
                                        'title' => '归属人的RAM实体ID',
                                        'description' => '实例归属人的RAM实体ID。',
                                        'type' => 'string',
                                        'example' => '24477111603637****',
                                    ],
                                    'Status' => [
                                        'title' => '实例状态',
                                        'description' => '实例状态。取值：'."\n"
                                            ."\n"
                                            .'- Available：可用。'."\n"
                                            .'- UnderChange：变更中。'."\n"
                                            .'- Error：异常。',
                                        'type' => 'string',
                                        'example' => 'Available',
                                    ],
                                    'StatusMessage' => [
                                        'title' => '实例状态说明',
                                        'description' => '实例状态信息。'."\n"
                                            ."\n"
                                            .'> 仅在实例状态为Error时，返回该参数。',
                                        'type' => 'string',
                                        'example' => 'Resource CREATE failed: terraform stack sc-146611588617****-pp-bp1ddg1n2a**** failure...',
                                    ],
                                    'CreateTime' => [
                                        'title' => '创建时间',
                                        'description' => '实例创建时间。'."\n"
                                            ."\n"
                                            .'按照ISO8601标准表示，使用UTC时间，格式：YYYY-MM-DDThh:mm:ssZ。',
                                        'type' => 'string',
                                        'example' => '2022-05-23T09:46:27Z',
                                    ],
                                    'PortfolioId' => [
                                        'title' => '产品组合ID',
                                        'description' => '产品组合ID。',
                                        'type' => 'string',
                                        'example' => 'port-bp1yt7582g****',
                                    ],
                                    'StackId' => [
                                        'title' => 'ROS资源栈的ID',
                                        'description' => '阿里云资源编排服务（ROS）资源栈ID。',
                                        'type' => 'string',
                                        'example' => '137e31df-3754-40b4-be2f-c793ad84****',
                                    ],
                                    'StackRegionId' => [
                                        'title' => 'ROS资源栈所属的地域ID',
                                        'description' => '阿里云资源编排服务（ROS）资源栈所属的地域ID。',
                                        'type' => 'string',
                                        'example' => 'cn-hangzhou',
                                    ],
                                    'ProvisionedProductType' => [
                                        'description' => '实例类型。'."\n"
                                            ."\n"
                                            .'取值为RosStack，表示阿里云资源编排服务（ROS）的资源栈。',
                                        'type' => 'string',
                                        'example' => 'RosStack',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'A system error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0FEEF92D-4052-5202-87D0-3D8EC16F81BF\\",\\n  \\"ProvisionedProductDetail\\": {\\n    \\"ProvisionedProductId\\": \\"pp-bp1ddg1n2a****\\",\\n    \\"ProvisionedProductArn\\": \\"acs:servicecatalog:cn-hangzhou:146611588617****:provisionedproduct/pp-bp1ddg1n2a****\\",\\n    \\"ProvisionedProductName\\": \\"DEMO-ECS实例\\",\\n    \\"ProductId\\": \\"prod-bp18r7q127****\\",\\n    \\"ProductName\\": \\"DEMO-创建ECS\\",\\n    \\"ProductVersionId\\": \\"pv-bp15e79d26****\\",\\n    \\"ProductVersionName\\": \\"1.0\\",\\n    \\"LastTaskId\\": \\"task-bp1dmg242c****\\",\\n    \\"LastProvisioningTaskId\\": \\"task-bp1dmg242c****\\",\\n    \\"LastSuccessfulProvisioningTaskId\\": \\"task-bp1dmg242c****\\",\\n    \\"OwnerPrincipalType\\": \\"RamUser\\",\\n    \\"OwnerPrincipalId\\": \\"24477111603637****\\",\\n    \\"Status\\": \\"Available\\",\\n    \\"StatusMessage\\": \\"Resource CREATE failed: terraform stack sc-146611588617****-pp-bp1ddg1n2a**** failure...\\",\\n    \\"CreateTime\\": \\"2022-05-23T09:46:27Z\\",\\n    \\"PortfolioId\\": \\"port-bp1yt7582g****\\",\\n    \\"StackId\\": \\"137e31df-3754-40b4-be2f-c793ad84****\\",\\n    \\"StackRegionId\\": \\"cn-hangzhou\\",\\n    \\"ProvisionedProductType\\": \\"RosStack\\"\\n  }\\n}","type":"json"}]',
            'title' => '查询实例信息',
        ],
        'ListProvisionedProducts' => [
            'summary' => '查询实例列表。',
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
            ],
            'parameters' => [
                [
                    'name' => 'Filters',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'title' => '过滤条件',
                        'description' => '过滤条件。',
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'title' => '过滤条件的名称',
                                    'description' => '过滤条件的名称。取值：'."\n"
                                        ."\n"
                                        .'- ProvisionedProductName：按实例名称查找，完整匹配（忽略大小写）。'."\n"
                                        .'- FullTextSearch：全文检索，按实例名称查找，模糊匹配。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'ProvisionedProductName',
                                ],
                                'Value' => [
                                    'title' => '过滤条件的值',
                                    'description' => '过滤条件的值。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'DEMO-ECS实例',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 5,
                    ],
                ],
                [
                    'name' => 'SortBy',
                    'in' => 'query',
                    'schema' => [
                        'title' => '排序字段',
                        'description' => '排序字段。'."\n"
                            ."\n"
                            .'取值为CreateTime，表示实例创建时间。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'CreateTime',
                    ],
                ],
                [
                    'name' => 'SortOrder',
                    'in' => 'query',
                    'schema' => [
                        'title' => '排序方式',
                        'description' => '排序方式。取值：'."\n"
                            ."\n"
                            .'- Asc：正序。'."\n"
                            .'- Desc（默认值）：倒序。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Desc',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页码。'."\n"
                            ."\n"
                            .'起始值：1。默认值：1。',
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
                        'description' => '分页时每页显示的数据行数。'."\n"
                            ."\n"
                            .'取值范围：1~100。起始值：1。默认值：10。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'AccessLevelFilter',
                    'in' => 'query',
                    'schema' => [
                        'title' => '访问过滤器',
                        'description' => '访问过滤器。取值：'."\n"
                            ."\n"
                            .'- User（默认值）：用户。'."\n"
                            .'- Account：账号。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'User',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'ProvisionedProductDetails' => [
                                'title' => '实例列表',
                                'description' => '实例列表。',
                                'type' => 'array',
                                'items' => [
                                    'title' => 'PortfolioItemType',
                                    'description' => '实例详情。',
                                    'type' => 'object',
                                    'properties' => [
                                        'ProvisionedProductName' => [
                                            'title' => '实例名称',
                                            'description' => '实例名称。',
                                            'type' => 'string',
                                            'example' => 'DEMO-ECS实例',
                                        ],
                                        'ProvisionedProductId' => [
                                            'title' => '实例ID',
                                            'description' => '实例ID。',
                                            'type' => 'string',
                                            'example' => 'pp-bp1ddg1n2a****',
                                        ],
                                        'ProvisionedProductArn' => [
                                            'title' => '实例ARN',
                                            'description' => '实例ARN。',
                                            'type' => 'string',
                                            'example' => 'acs:servicecatalog:cn-hangzhou:146611588617****:provisionedproduct/pp-bp1ddg1n2a****',
                                        ],
                                        'ProductId' => [
                                            'title' => '产品ID',
                                            'description' => '产品ID。',
                                            'type' => 'string',
                                            'example' => 'prod-bp18r7q127****',
                                        ],
                                        'ProductName' => [
                                            'title' => '产品名称',
                                            'description' => '产品名称。',
                                            'type' => 'string',
                                            'example' => 'DEMO-创建ECS',
                                        ],
                                        'ProductVersionId' => [
                                            'title' => '产品版本ID',
                                            'description' => '产品版本ID。',
                                            'type' => 'string',
                                            'example' => 'pv-bp15e79d26****',
                                        ],
                                        'ProductVersionName' => [
                                            'title' => '产品版本名称',
                                            'description' => '产品版本名称。',
                                            'type' => 'string',
                                            'example' => '1.0',
                                        ],
                                        'LastTaskId' => [
                                            'title' => '上一次执行的任务ID',
                                            'description' => '上一次执行的任务ID。',
                                            'type' => 'string',
                                            'example' => 'task-bp1dmg242c****',
                                        ],
                                        'LastProvisioningTaskId' => [
                                            'title' => '上一次执行的实例操作任务ID',
                                            'description' => '上一次执行的实例操作任务ID。'."\n"
                                                ."\n"
                                                .'实例操作包括：'."\n"
                                                ."\n"
                                                .'- LaunchProduct：启动产品。'."\n"
                                                .'- UpdateProvisionedProduct：更新实例。'."\n"
                                                .'- TerminateProvisionedProduct：终止实例。',
                                            'type' => 'string',
                                            'example' => 'task-bp1dmg242c****',
                                        ],
                                        'LastSuccessfulProvisioningTaskId' => [
                                            'title' => '上一次成功执行的实例操作任务ID',
                                            'description' => '上一次成功执行的实例操作任务ID。'."\n"
                                                ."\n"
                                                .'实例操作包括：'."\n"
                                                ."\n"
                                                .'- LaunchProduct：启动产品。'."\n"
                                                .'- UpdateProvisionedProduct：更新实例。'."\n"
                                                .'- TerminateProvisionedProduct：终止实例。',
                                            'type' => 'string',
                                            'example' => 'task-bp1dmg242c****',
                                        ],
                                        'OwnerPrincipalType' => [
                                            'title' => '归属人的RAM实体类型',
                                            'description' => '实例归属人的RAM实体类型。取值：'."\n"
                                                ."\n"
                                                .'- RamUser：RAM用户。'."\n"
                                                .'- RamRole：RAM角色。',
                                            'type' => 'string',
                                            'example' => 'RamUser',
                                        ],
                                        'OwnerPrincipalId' => [
                                            'title' => '归属人的RAM实体ID',
                                            'description' => '实例归属人的RAM实体ID。',
                                            'type' => 'string',
                                            'example' => '24477111603637****',
                                        ],
                                        'Status' => [
                                            'title' => '实例状态',
                                            'description' => '实例状态。取值：'."\n"
                                                ."\n"
                                                .'- Available：可用。'."\n"
                                                .'- UnderChange：变更中。'."\n"
                                                .'- Error：异常。',
                                            'type' => 'string',
                                            'example' => 'Available',
                                        ],
                                        'StatusMessage' => [
                                            'title' => '实例状态说明',
                                            'description' => '实例状态说明。'."\n"
                                                ."\n"
                                                .'> 仅在实例状态为Error时，返回该参数。',
                                            'type' => 'string',
                                            'example' => 'Resource CREATE failed: terraform stack sc-146611588617****-pp-bp1ddg1n2a**** failure...',
                                        ],
                                        'CreateTime' => [
                                            'title' => '创建时间',
                                            'description' => '实例创建时间。'."\n"
                                                ."\n"
                                                .'按照ISO8601标准表示，使用UTC时间，格式：YYYY-MM-DDThh:mm:ssZ。',
                                            'type' => 'string',
                                            'example' => '2022-05-23T09:46:27Z',
                                        ],
                                        'PortfolioId' => [
                                            'title' => '产品组合ID',
                                            'description' => '产品组合ID。',
                                            'type' => 'string',
                                            'example' => 'port-bp1yt7582g****',
                                        ],
                                        'StackId' => [
                                            'title' => 'ROS资源栈的ID',
                                            'description' => '阿里云资源编排服务（ROS）资源栈ID。',
                                            'type' => 'string',
                                            'example' => '137e31df-3754-40b4-be2f-c793ad84****',
                                        ],
                                        'StackRegionId' => [
                                            'title' => 'ROS资源栈所属的地域ID',
                                            'description' => '阿里云资源编排服务（ROS）资源栈所属的地域ID。',
                                            'type' => 'string',
                                            'example' => 'cn-hangzhou',
                                        ],
                                        'ProvisionedProductType' => [
                                            'description' => '实例类型。'."\n"
                                                ."\n"
                                                .'取值为RosStack，表示阿里云资源编排服务（ROS）的资源栈。',
                                            'type' => 'string',
                                            'example' => 'RosStack',
                                        ],
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0FEEF92D-4052-5202-87D0-3D8EC16F81BF',
                            ],
                            'TotalCount' => [
                                'title' => '总记录数',
                                'description' => '总数据行数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '2',
                            ],
                            'PageNumber' => [
                                'description' => '页码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'PageSize' => [
                                'description' => '分页时每页显示的数据行数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'A system error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"ProvisionedProductDetails\\": [\\n    {\\n      \\"ProvisionedProductName\\": \\"DEMO-ECS实例\\",\\n      \\"ProvisionedProductId\\": \\"pp-bp1ddg1n2a****\\",\\n      \\"ProvisionedProductArn\\": \\"acs:servicecatalog:cn-hangzhou:146611588617****:provisionedproduct/pp-bp1ddg1n2a****\\",\\n      \\"ProductId\\": \\"prod-bp18r7q127****\\",\\n      \\"ProductName\\": \\"DEMO-创建ECS\\",\\n      \\"ProductVersionId\\": \\"pv-bp15e79d26****\\",\\n      \\"ProductVersionName\\": \\"1.0\\",\\n      \\"LastTaskId\\": \\"task-bp1dmg242c****\\",\\n      \\"LastProvisioningTaskId\\": \\"task-bp1dmg242c****\\",\\n      \\"LastSuccessfulProvisioningTaskId\\": \\"task-bp1dmg242c****\\",\\n      \\"OwnerPrincipalType\\": \\"RamUser\\",\\n      \\"OwnerPrincipalId\\": \\"24477111603637****\\",\\n      \\"Status\\": \\"Available\\",\\n      \\"StatusMessage\\": \\"Resource CREATE failed: terraform stack sc-146611588617****-pp-bp1ddg1n2a**** failure...\\",\\n      \\"CreateTime\\": \\"2022-05-23T09:46:27Z\\",\\n      \\"PortfolioId\\": \\"port-bp1yt7582g****\\",\\n      \\"StackId\\": \\"137e31df-3754-40b4-be2f-c793ad84****\\",\\n      \\"StackRegionId\\": \\"cn-hangzhou\\",\\n      \\"ProvisionedProductType\\": \\"RosStack\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"0FEEF92D-4052-5202-87D0-3D8EC16F81BF\\",\\n  \\"TotalCount\\": 2,\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 10\\n}","type":"json"}]',
            'title' => '查询实例列表',
        ],
        'GetTask' => [
            'summary' => '查询任务信息。',
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
            ],
            'parameters' => [
                [
                    'name' => 'TaskId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '任务ID',
                        'description' => '任务ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'task-bp1dmg242c****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0FEEF92D-4052-5202-87D0-3D8EC16F81BF',
                            ],
                            'TaskDetail' => [
                                'title' => '任务信息',
                                'description' => '任务详情。',
                                'type' => 'object',
                                'properties' => [
                                    'TaskId' => [
                                        'title' => '任务ID',
                                        'description' => '任务ID。',
                                        'type' => 'string',
                                        'example' => 'task-bp1dmg242c****',
                                    ],
                                    'TaskType' => [
                                        'title' => '任务类型',
                                        'description' => '任务类型。取值：'."\n"
                                            ."\n"
                                            .'- LaunchProduct：启动产品。'."\n"
                                            .'- UpdateProvisionedProduct：更新实例。'."\n"
                                            .'- TerminateProvisionedProduct：终止实例。',
                                        'type' => 'string',
                                        'example' => 'LaunchProduct',
                                    ],
                                    'PortfolioId' => [
                                        'title' => '产品组合ID',
                                        'description' => '产品组合ID。',
                                        'type' => 'string',
                                        'example' => 'port-bp1yt7582g****',
                                    ],
                                    'ProductId' => [
                                        'title' => '产品ID',
                                        'description' => '产品ID。',
                                        'type' => 'string',
                                        'example' => 'prod-bp18r7q127****',
                                    ],
                                    'ProductName' => [
                                        'title' => '产品名称',
                                        'description' => '产品名称。',
                                        'type' => 'string',
                                        'example' => 'DEMO-创建ECS',
                                    ],
                                    'ProductVersionId' => [
                                        'title' => '产品版本ID',
                                        'description' => '产品版本ID。',
                                        'type' => 'string',
                                        'example' => 'pv-bp15e79d26****',
                                    ],
                                    'ProductVersionName' => [
                                        'title' => '产品版本名称',
                                        'description' => '产品版本名称。',
                                        'type' => 'string',
                                        'example' => '1.0',
                                    ],
                                    'ProvisionedProductId' => [
                                        'title' => '实例ID',
                                        'description' => '实例ID。',
                                        'type' => 'string',
                                        'example' => 'pp-bp1ddg1n2a****',
                                    ],
                                    'ProvisionedProductName' => [
                                        'title' => '实例名称',
                                        'description' => '实例名称。',
                                        'type' => 'string',
                                        'example' => 'DEMO-ECS实例',
                                    ],
                                    'Parameters' => [
                                        'description' => '用户输入的模板参数。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '用户输入的模板参数。',
                                            'type' => 'object',
                                            'properties' => [
                                                'ParameterKey' => [
                                                    'description' => '模板中定义的参数名称。',
                                                    'type' => 'string',
                                                    'example' => 'instance_type',
                                                ],
                                                'ParameterValue' => [
                                                    'description' => '用户输入的模板参数值。',
                                                    'type' => 'string',
                                                    'example' => 'ecs.s6-c1m1.small',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'Outputs' => [
                                        'description' => '模板的输出值。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '模板的输出值。',
                                            'type' => 'object',
                                            'properties' => [
                                                'OutputKey' => [
                                                    'description' => '模板中定义的输出值名称。',
                                                    'type' => 'string',
                                                    'example' => 'instance_id',
                                                ],
                                                'OutputValue' => [
                                                    'description' => '模板中定义的输出值的内容。',
                                                    'type' => 'string',
                                                    'example' => 'i-xxxxxx',
                                                ],
                                                'Description' => [
                                                    'description' => '模板中定义的输出值的描述。',
                                                    'type' => 'string',
                                                    'example' => 'The ECS instance ID.',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'Log' => [
                                        'description' => '实例相关输出日志。',
                                        'type' => 'object',
                                        'properties' => [
                                            'TerraformLogs' => [
                                                'description' => 'Terraform输出日志。',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => 'Terraform输出日志。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Command' => [
                                                            'description' => '执行的Terraform命令名称。取值：'."\n"
                                                                ."\n"
                                                                .'- apply'."\n"
                                                                .'- plan'."\n"
                                                                .'- destroy'."\n"
                                                                .'- version'."\n"
                                                                ."\n"
                                                                .'关于命令含义的更多信息，请参见[Command](https://www.terraform.io/cli/commands)。',
                                                            'type' => 'string',
                                                            'example' => 'apply',
                                                        ],
                                                        'Stream' => [
                                                            'description' => '输出流。取值：'."\n"
                                                                ."\n"
                                                                .'- stdout：标准输出。'."\n"
                                                                .'- stderr：标准错误输出。',
                                                            'type' => 'string',
                                                            'example' => 'stdout',
                                                        ],
                                                        'Content' => [
                                                            'description' => '当前命令在当前输出流中输出的内容。',
                                                            'type' => 'string',
                                                            'example' => 'Apply complete! Resources: 42 added, 0 changed, 0 destroyed.',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                    'Status' => [
                                        'title' => '任务状态',
                                        'description' => '任务状态。取值：'."\n"
                                            ."\n"
                                            .'- Succeeded：成功。'."\n"
                                            .'- InProgress：运行中。'."\n"
                                            .'- Failed：失败。',
                                        'type' => 'string',
                                        'example' => 'Succeeded',
                                    ],
                                    'StatusMessage' => [
                                        'title' => '任务状态说明',
                                        'description' => '任务状态信息。'."\n"
                                            ."\n"
                                            .'> 仅在任务状态为Failed时，返回该参数。',
                                        'type' => 'string',
                                        'example' => 'Resource CREATE failed: terraform stack sc-146611588617****-pp-bp1ddg1n2a**** failure...',
                                    ],
                                    'CreateTime' => [
                                        'title' => '创建时间',
                                        'description' => '任务创建时间。'."\n"
                                            ."\n"
                                            .'按照ISO8601标准表示，使用UTC时间，格式：YYYY-MM-DDThh:mm:ssZ。',
                                        'type' => 'string',
                                        'example' => '2022-05-23T09:46:27Z',
                                    ],
                                    'UpdateTime' => [
                                        'description' => '任务最后更新时间。'."\n"
                                            ."\n"
                                            .'按照ISO8601标准表示，使用UTC时间，格式：YYYY-MM-DDThh:mm:ssZ。',
                                        'type' => 'string',
                                        'example' => '2022-05-23T09:47:29Z',
                                    ],
                                    'TaskTags' => [
                                        'description' => '自定义标签。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '自定义标签。',
                                            'type' => 'object',
                                            'properties' => [
                                                'Key' => [
                                                    'description' => '自定义标签键。'."\n"
                                                        ."\n"
                                                        .'最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                                                    'type' => 'string',
                                                    'example' => 'k1',
                                                ],
                                                'Value' => [
                                                    'description' => '自定义标签值。'."\n"
                                                        ."\n"
                                                        .'最多支持128个字符，不能以`acs:`开头，不能包含`http://`或者`https://`。',
                                                    'type' => 'string',
                                                    'example' => 'v1',
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
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'A system error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0FEEF92D-4052-5202-87D0-3D8EC16F81BF\\",\\n  \\"TaskDetail\\": {\\n    \\"TaskId\\": \\"task-bp1dmg242c****\\",\\n    \\"TaskType\\": \\"LaunchProduct\\",\\n    \\"PortfolioId\\": \\"port-bp1yt7582g****\\",\\n    \\"ProductId\\": \\"prod-bp18r7q127****\\",\\n    \\"ProductName\\": \\"DEMO-创建ECS\\",\\n    \\"ProductVersionId\\": \\"pv-bp15e79d26****\\",\\n    \\"ProductVersionName\\": \\"1.0\\",\\n    \\"ProvisionedProductId\\": \\"pp-bp1ddg1n2a****\\",\\n    \\"ProvisionedProductName\\": \\"DEMO-ECS实例\\",\\n    \\"Parameters\\": [\\n      {\\n        \\"ParameterKey\\": \\"instance_type\\",\\n        \\"ParameterValue\\": \\"ecs.s6-c1m1.small\\"\\n      }\\n    ],\\n    \\"Outputs\\": [\\n      {\\n        \\"OutputKey\\": \\"instance_id\\",\\n        \\"OutputValue\\": \\"i-xxxxxx\\",\\n        \\"Description\\": \\"The ECS instance ID.\\"\\n      }\\n    ],\\n    \\"Log\\": {\\n      \\"TerraformLogs\\": [\\n        {\\n          \\"Command\\": \\"apply\\",\\n          \\"Stream\\": \\"stdout\\",\\n          \\"Content\\": \\"Apply complete! Resources: 42 added, 0 changed, 0 destroyed.\\"\\n        }\\n      ]\\n    },\\n    \\"Status\\": \\"Succeeded\\",\\n    \\"StatusMessage\\": \\"Resource CREATE failed: terraform stack sc-146611588617****-pp-bp1ddg1n2a**** failure...\\",\\n    \\"CreateTime\\": \\"2022-05-23T09:46:27Z\\",\\n    \\"UpdateTime\\": \\"2022-05-23T09:47:29Z\\",\\n    \\"TaskTags\\": [\\n      {\\n        \\"Key\\": \\"k1\\",\\n        \\"Value\\": \\"v1\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '查询任务信息',
        ],
        'ListTasks' => [
            'summary' => '查询任务列表。',
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
            ],
            'parameters' => [
                [
                    'name' => 'SortBy',
                    'in' => 'query',
                    'schema' => [
                        'title' => '排序字段',
                        'description' => '排序字段。'."\n"
                            ."\n"
                            .'取值为CreateTime，表示任务创建时间。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'CreateTime',
                    ],
                ],
                [
                    'name' => 'SortOrder',
                    'in' => 'query',
                    'schema' => [
                        'title' => '排序方式',
                        'description' => '排序方式。取值：'."\n"
                            ."\n"
                            .'- Asc：正序。'."\n"
                            .'- Desc：倒序。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Desc',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页码。'."\n"
                            ."\n"
                            .'起始值：1。默认值：1。',
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
                        'description' => '分页时每页显示的数据行数。'."\n"
                            ."\n"
                            .'取值范围：1~100。起始值：1。默认值：10。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'ProvisionedProductId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'pp-bp1ddg1n2a****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'TaskDetails' => [
                                'title' => '实例列表',
                                'description' => '任务列表。',
                                'type' => 'array',
                                'items' => [
                                    'title' => 'PortfolioItemType',
                                    'description' => '任务详情。',
                                    'type' => 'object',
                                    'properties' => [
                                        'TaskId' => [
                                            'title' => '实例名称',
                                            'description' => '任务ID。',
                                            'type' => 'string',
                                            'example' => 'task-bp1dmg242c****',
                                        ],
                                        'TaskType' => [
                                            'title' => '实例ARN',
                                            'description' => '任务类型。取值：'."\n"
                                                ."\n"
                                                .'- LaunchProduct：启动产品。'."\n"
                                                .'- UpdateProvisionedProduct：更新实例。'."\n"
                                                .'- TerminateProvisionedProduct：终止实例。',
                                            'type' => 'string',
                                            'example' => 'LaunchProduct',
                                        ],
                                        'PortfolioId' => [
                                            'title' => '产品组合ID',
                                            'description' => '产品组合ID。',
                                            'type' => 'string',
                                            'example' => 'port-bp1yt7582g****',
                                        ],
                                        'ProductId' => [
                                            'title' => '产品ID',
                                            'description' => '产品ID。',
                                            'type' => 'string',
                                            'example' => 'prod-bp18r7q127****',
                                        ],
                                        'ProductName' => [
                                            'title' => '产品名称',
                                            'description' => '产品名称。',
                                            'type' => 'string',
                                            'example' => 'DEMO-创建ECS',
                                        ],
                                        'ProductVersionId' => [
                                            'title' => '产品版本ID',
                                            'description' => '产品版本ID。',
                                            'type' => 'string',
                                            'example' => 'pv-bp15e79d26****',
                                        ],
                                        'ProductVersionName' => [
                                            'title' => '产品版本名称',
                                            'description' => '产品版本名称。',
                                            'type' => 'string',
                                            'example' => '1.0',
                                        ],
                                        'ProvisionedProductId' => [
                                            'title' => '实例ID',
                                            'description' => '实例ID。',
                                            'type' => 'string',
                                            'example' => 'pp-bp1ddg1n2a****',
                                        ],
                                        'ProvisionedProductName' => [
                                            'title' => '实例名称',
                                            'description' => '实例名称。',
                                            'type' => 'string',
                                            'example' => 'DEMO-ECS实例',
                                        ],
                                        'Parameters' => [
                                            'description' => '用户输入的模板参数。',
                                            'type' => 'array',
                                            'items' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'ParameterKey' => [
                                                        'description' => '模板中定义的参数名称。',
                                                        'type' => 'string',
                                                        'example' => 'instance_type',
                                                    ],
                                                    'ParameterValue' => [
                                                        'description' => '用户输入的模板参数值。',
                                                        'type' => 'string',
                                                        'example' => 'ecs.s6-c1m1.small',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'Outputs' => [
                                            'description' => '模板的输出值。',
                                            'type' => 'array',
                                            'items' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'OutputKey' => [
                                                        'description' => '模板中定义的输出值名称。',
                                                        'type' => 'string',
                                                        'example' => 'instance_id',
                                                    ],
                                                    'OutputValue' => [
                                                        'description' => '模板中定义的输出值的内容。',
                                                        'type' => 'string',
                                                        'example' => 'i-xxxxxx',
                                                    ],
                                                    'Description' => [
                                                        'description' => '模板中定义的输出值的描述。',
                                                        'type' => 'string',
                                                        'example' => 'The ECS instance ID.',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'Log' => [
                                            'description' => '实例相关输出日志。',
                                            'type' => 'object',
                                            'properties' => [
                                                'TerraformLogs' => [
                                                    'description' => 'Terraform输出日志。',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'Command' => [
                                                                'description' => '执行的Terraform命令名称。取值：'."\n"
                                                                    ."\n"
                                                                    .'- apply'."\n"
                                                                    .'- plan'."\n"
                                                                    .'- destroy'."\n"
                                                                    .'- version'."\n"
                                                                    ."\n"
                                                                    .'关于命令含义的更多信息，请参见[Command](https://www.terraform.io/cli/commands)。',
                                                                'type' => 'string',
                                                                'example' => 'apply',
                                                            ],
                                                            'Stream' => [
                                                                'description' => '输出流。取值：'."\n"
                                                                    ."\n"
                                                                    .'- stdout：标准输出。'."\n"
                                                                    .'- stderr：标准错误输出。',
                                                                'type' => 'string',
                                                                'example' => 'stdout',
                                                            ],
                                                            'Content' => [
                                                                'description' => '当前命令在当前输出流中输出的内容。',
                                                                'type' => 'string',
                                                                'example' => 'Apply complete! Resources: 42 added, 0 changed, 0 destroyed.',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'Status' => [
                                            'title' => '实例状态',
                                            'description' => '任务状态。取值：'."\n"
                                                ."\n"
                                                .'- Succeeded：成功。'."\n"
                                                .'- InProgress：运行中。'."\n"
                                                .'- Failed：失败。',
                                            'type' => 'string',
                                            'example' => 'Succeeded',
                                        ],
                                        'StatusMessage' => [
                                            'title' => '实例状态说明',
                                            'description' => '任务状态信息。'."\n"
                                                ."\n"
                                                .'> 仅在任务状态为Failed时，返回该参数。',
                                            'type' => 'string',
                                            'example' => 'Resource CREATE failed: terraform stack sc-146611588617****-pp-bp1ddg1n2a**** failure...',
                                        ],
                                        'CreateTime' => [
                                            'title' => '创建时间',
                                            'description' => '任务创建时间。'."\n"
                                                ."\n"
                                                .'按照ISO8601标准表示，使用UTC时间，格式：YYYY-MM-DDThh:mm:ssZ。',
                                            'type' => 'string',
                                            'example' => '2022-05-23T09:46:27Z',
                                        ],
                                        'UpdateTime' => [
                                            'description' => '任务最后更新时间。'."\n"
                                                ."\n"
                                                .'按照ISO8601标准表示，使用UTC时间，格式：YYYY-MM-DDThh:mm:ssZ。',
                                            'type' => 'string',
                                            'example' => '2022-05-26T03:28:45Z',
                                        ],
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0FEEF92D-4052-5202-87D0-3D8EC16F81BF',
                            ],
                            'TotalCount' => [
                                'title' => '总记录数',
                                'description' => '总数据行数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '2',
                            ],
                            'PageNumber' => [
                                'description' => '页码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'PageSize' => [
                                'description' => '分页时每页显示的数据行数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'A system error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"TaskDetails\\": [\\n    {\\n      \\"TaskId\\": \\"task-bp1dmg242c****\\",\\n      \\"TaskType\\": \\"LaunchProduct\\",\\n      \\"PortfolioId\\": \\"port-bp1yt7582g****\\",\\n      \\"ProductId\\": \\"prod-bp18r7q127****\\",\\n      \\"ProductName\\": \\"DEMO-创建ECS\\",\\n      \\"ProductVersionId\\": \\"pv-bp15e79d26****\\",\\n      \\"ProductVersionName\\": \\"1.0\\",\\n      \\"ProvisionedProductId\\": \\"pp-bp1ddg1n2a****\\",\\n      \\"ProvisionedProductName\\": \\"DEMO-ECS实例\\",\\n      \\"Parameters\\": [\\n        {\\n          \\"ParameterKey\\": \\"instance_type\\",\\n          \\"ParameterValue\\": \\"ecs.s6-c1m1.small\\"\\n        }\\n      ],\\n      \\"Outputs\\": [\\n        {\\n          \\"OutputKey\\": \\"instance_id\\",\\n          \\"OutputValue\\": \\"i-xxxxxx\\",\\n          \\"Description\\": \\"The ECS instance ID.\\"\\n        }\\n      ],\\n      \\"Log\\": {\\n        \\"TerraformLogs\\": [\\n          {\\n            \\"Command\\": \\"apply\\",\\n            \\"Stream\\": \\"stdout\\",\\n            \\"Content\\": \\"Apply complete! Resources: 42 added, 0 changed, 0 destroyed.\\"\\n          }\\n        ]\\n      },\\n      \\"Status\\": \\"Succeeded\\",\\n      \\"StatusMessage\\": \\"Resource CREATE failed: terraform stack sc-146611588617****-pp-bp1ddg1n2a**** failure...\\",\\n      \\"CreateTime\\": \\"2022-05-23T09:46:27Z\\",\\n      \\"UpdateTime\\": \\"2022-05-26T03:28:45Z\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"0FEEF92D-4052-5202-87D0-3D8EC16F81BF\\",\\n  \\"TotalCount\\": 2,\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 10\\n}","type":"json"}]',
            'title' => '查询任务列表',
        ],
        'CopyProduct' => [
            'summary' => '复制产品。',
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
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'SourceProductArn',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '',
                        'description' => '源产品ARN。'."\n"
                            .'><notice>被复制产品ARN可来自本账号下的产品，也可来自其他账号通过产品组合共享的产品。></notice>',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'acs:servicecatalog:cn-hangzhou:146611588617****:product/prod-bp18r7q127****'."\n",
                    ],
                ],
                [
                    'name' => 'TargetProductName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '目标产品名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'DEMO-ECS',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0FEEF92D-4052-5202-87D0-3D8EC16F****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'A system error occurred.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0FEEF92D-4052-5202-87D0-3D8EC16F****\\"\\n}","type":"json"}]',
            'title' => '复制产品',
        ],
        'CreateProduct' => [
            'summary' => '创建产品。',
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
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'ProductName',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '产品名称',
                        'description' => '产品名称。'."\n"
                            ."\n"
                            .'长度为1~128个字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'DEMO-创建ECS',
                        'maxLength' => 100,
                        'minLength' => 1,
                    ],
                ],
                [
                    'name' => 'ProductType',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '产品类型',
                        'description' => '产品类型。'."\n"
                            ."\n"
                            .'取值为Ros，表示阿里云资源编排服务（ROS）。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Ros',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '产品描述',
                        'description' => '产品描述。'."\n"
                            ."\n"
                            .'长度为1~128个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '这是一个产品描述',
                    ],
                ],
                [
                    'name' => 'ProviderName',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '提供者名称',
                        'description' => '产品提供者。'."\n"
                            ."\n"
                            .'长度为1~128个字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'IT团队',
                        'maxLength' => 100,
                        'minLength' => 1,
                    ],
                ],
                [
                    'name' => 'ProductVersionParameters',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'title' => '产品版本相关的参数',
                        'description' => '产品版本信息。',
                        'type' => 'object',
                        'properties' => [
                            'ProductVersionName' => [
                                'title' => '产品版本名称',
                                'description' => '产品版本名称。'."\n"
                                    ."\n"
                                    .'长度为1~128个字符。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '1.0',
                                'maxLength' => 100,
                                'minLength' => 1,
                            ],
                            'TemplateType' => [
                                'title' => '模板类型',
                                'description' => '模板类型。'."\n"
                                    ."\n"
                                    .'取值为RosTerraformTemplate，表示阿里云资源编排服务（ROS）支持的Terraform模板。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'RosTerraformTemplate',
                            ],
                            'TemplateUrl' => [
                                'title' => '模板的URL地址',
                                'description' => '模板的URL地址。'."\n"
                                    ."\n"
                                    .'获取模板URL地址的方法，请参见[CreateTemplate](~~CreateTemplate~~)。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'oss://servicecatalog-cn-hangzhou/146611588617****/terraform/template/tpl-bp1217we23****/template.json',
                            ],
                            'Description' => [
                                'title' => '产品版本描述',
                                'description' => '产品版本描述。'."\n"
                                    ."\n"
                                    .'长度为1~128个字符。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '这是一个产品版本描述',
                            ],
                            'Guidance' => [
                                'title' => '推荐信息',
                                'description' => '推荐信息。取值：'."\n"
                                    ."\n"
                                    .'- Default（默认值）：无。'."\n"
                                    .'- Recommended：稳定版。'."\n"
                                    .'- Latest：最新版。'."\n"
                                    .'- Deprecated：将废弃。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'Default',
                            ],
                            'Active' => [
                                'title' => '是否启用',
                                'description' => '是否启用。取值：'."\n"
                                    ."\n"
                                    .'- true（默认值）：启用。'."\n"
                                    .'- false：禁用。',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'true',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'TemplateType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '产品模板类型。取值：'."\n"
                            ."\n"
                            .'- RosTerraformTemplate：表示阿里云资源编排服务（ROS）支持的Terraform模板。'."\n"
                            .'- RosStandardTemplate：表示阿里云资源编排服务（ROS）标准模板。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'RosTerraformTemplate',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0FEEF92D-4052-5202-87D0-3D8EC16F81BF',
                            ],
                            'ProductId' => [
                                'title' => '产品ID',
                                'description' => '产品ID。',
                                'type' => 'string',
                                'example' => 'prod-bp18r7q127****',
                            ],
                            'ProductVersionId' => [
                                'description' => '产品版本ID。',
                                'type' => 'string',
                                'example' => 'pv-bp15e79d26****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'A system error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0FEEF92D-4052-5202-87D0-3D8EC16F81BF\\",\\n  \\"ProductId\\": \\"prod-bp18r7q127****\\",\\n  \\"ProductVersionId\\": \\"pv-bp15e79d26****\\"\\n}","type":"json"}]',
            'title' => '创建产品',
            'description' => '调用该接口前，请先调用[CreateTemplate](~~CreateTemplate~~)创建模板。',
        ],
        'DeleteProduct' => [
            'summary' => '删除产品。',
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
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'ProductId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '产品ID',
                        'description' => '产品ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'prod-bp18r7q127****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0FEEF92D-4052-5202-87D0-3D8EC16F81BF',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'A system error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0FEEF92D-4052-5202-87D0-3D8EC16F81BF\\"\\n}","type":"json"}]',
            'title' => '删除产品',
        ],
        'UpdateProduct' => [
            'summary' => '更新产品。',
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
                    'name' => 'ProductName',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '产品名称',
                        'description' => '产品名称。'."\n"
                            ."\n"
                            .'长度为1~128个字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'DEMO-创建ECS',
                        'maxLength' => 100,
                        'minLength' => 1,
                    ],
                ],
                [
                    'name' => 'ProductId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '产品ID',
                        'description' => '产品ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'prod-bp18r7q127****',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '产品描述',
                        'description' => '产品描述。'."\n"
                            ."\n"
                            .'长度为1~128个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '这是一个产品描述',
                    ],
                ],
                [
                    'name' => 'ProviderName',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '提供者名称',
                        'description' => '产品提供者。'."\n"
                            ."\n"
                            .'长度为1~128个字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'IT团队',
                        'maxLength' => 100,
                        'minLength' => 1,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0FEEF92D-4052-5202-87D0-3D8EC16F81BF',
                            ],
                            'ProductId' => [
                                'title' => '产品ID',
                                'description' => '产品ID。',
                                'type' => 'string',
                                'example' => 'prod-bp18r7q127****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'A system error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0FEEF92D-4052-5202-87D0-3D8EC16F81BF\\",\\n  \\"ProductId\\": \\"prod-bp18r7q127****\\"\\n}","type":"json"}]',
            'title' => '更新产品',
        ],
        'GetProductAsAdmin' => [
            'summary' => '管理员调用GetProductAsAdmin接口查询产品信息。',
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
            ],
            'parameters' => [
                [
                    'name' => 'ProductId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '产品ID',
                        'description' => '产品ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'prod-bp18r7q127****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0FEEF92D-4052-5202-87D0-3D8EC16F81BF',
                            ],
                            'ProductDetail' => [
                                'title' => '产品详情',
                                'description' => '产品详情。',
                                'type' => 'object',
                                'properties' => [
                                    'ProductArn' => [
                                        'title' => '产品ARN',
                                        'description' => '产品ARN。',
                                        'type' => 'string',
                                        'example' => 'acs:servicecatalog:cn-hangzhou:146611588617****:product/prod-bp18r7q127****',
                                    ],
                                    'Description' => [
                                        'title' => '产品描述',
                                        'description' => '产品描述。',
                                        'type' => 'string',
                                        'example' => '这是一个产品描述',
                                    ],
                                    'CreateTime' => [
                                        'title' => '创建时间',
                                        'description' => '创建时间。'."\n"
                                            ."\n"
                                            .'按照ISO8601标准表示，使用UTC时间，格式：YYYY-MM-DDThh:mm:ssZ。',
                                        'type' => 'string',
                                        'example' => '2022-04-12T06:10:37Z',
                                    ],
                                    'ProductId' => [
                                        'title' => '产品ID',
                                        'description' => '产品ID。',
                                        'type' => 'string',
                                        'example' => 'prod-bp18r7q127****',
                                    ],
                                    'ProductName' => [
                                        'title' => '产品名称',
                                        'description' => '产品名称。',
                                        'type' => 'string',
                                        'example' => 'DEMO-创建ECS',
                                    ],
                                    'ProviderName' => [
                                        'title' => '提供者名称',
                                        'description' => '产品提供者。',
                                        'type' => 'string',
                                        'example' => 'IT团队',
                                    ],
                                    'ProductType' => [
                                        'title' => '产品类型',
                                        'description' => '产品类型。'."\n"
                                            ."\n"
                                            .'取值为Ros，表示阿里云资源编排服务（ROS）。',
                                        'type' => 'string',
                                        'example' => 'Ros',
                                    ],
                                    'TemplateType' => [
                                        'title' => '产品模板类型',
                                        'description' => '产品模板类型。取值：'."\n"
                                            ."\n"
                                            .'- RosTerraformTemplate：表示阿里云资源编排服务（ROS）支持的Terraform模板。'."\n"
                                            .'- RosStandardTemplate：表示阿里云资源编排服务（ROS）标准模板。',
                                        'type' => 'string',
                                        'example' => 'RosTerraformTemplate',
                                    ],
                                ],
                            ],
                            'TagOptions' => [
                                'description' => '产品关联的标签选项列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Active' => [
                                            'description' => '是否启用。取值：'."\n"
                                                ."\n"
                                                .'- true（默认值）：启用。'."\n"
                                                .'- false：禁用。',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'TagOptionId' => [
                                            'description' => '标签选项ID。',
                                            'type' => 'string',
                                            'example' => 'tag-bp1q65xd3j****',
                                        ],
                                        'Key' => [
                                            'description' => '标签选项键。',
                                            'type' => 'string',
                                            'example' => 'k1',
                                        ],
                                        'Value' => [
                                            'description' => '标签选项值。',
                                            'type' => 'string',
                                            'example' => 'v1',
                                        ],
                                        'Owner' => [
                                            'description' => '标签选项归属人ID。',
                                            'type' => 'string',
                                            'example' => '133413081827****'."\n",
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'A system error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0FEEF92D-4052-5202-87D0-3D8EC16F81BF\\",\\n  \\"ProductDetail\\": {\\n    \\"ProductArn\\": \\"acs:servicecatalog:cn-hangzhou:146611588617****:product/prod-bp18r7q127****\\",\\n    \\"Description\\": \\"这是一个产品描述\\",\\n    \\"CreateTime\\": \\"2022-04-12T06:10:37Z\\",\\n    \\"ProductId\\": \\"prod-bp18r7q127****\\",\\n    \\"ProductName\\": \\"DEMO-创建ECS\\",\\n    \\"ProviderName\\": \\"IT团队\\",\\n    \\"ProductType\\": \\"Ros\\",\\n    \\"TemplateType\\": \\"RosTerraformTemplate\\"\\n  },\\n  \\"TagOptions\\": [\\n    {\\n      \\"Active\\": true,\\n      \\"TagOptionId\\": \\"tag-bp1q65xd3j****\\",\\n      \\"Key\\": \\"k1\\",\\n      \\"Value\\": \\"v1\\",\\n      \\"Owner\\": \\"133413081827****\\\\n\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '管理员查询产品信息',
        ],
        'ListProductsAsAdmin' => [
            'summary' => '管理员调用ListProductsAsAdmin接口查询产品列表。',
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
            ],
            'parameters' => [
                [
                    'name' => 'PortfolioId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '产品组合ID',
                        'description' => '产品组合ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'port-bp1yt7582g****',
                    ],
                ],
                [
                    'name' => 'Filters',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'title' => '过滤条件',
                        'description' => '过滤条件。',
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'title' => '过滤条件的名称',
                                    'description' => '过滤条件的名称。取值：'."\n"
                                        ."\n"
                                        .'- ProductName：按产品名称查找，完整匹配（忽略大小写）。'."\n"
                                        .'- FullTextSearch：全文检索，按产品名称、产品提供者、产品描述查找，模糊匹配。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'ProductName',
                                ],
                                'Value' => [
                                    'title' => '过滤条件的值',
                                    'description' => '过滤条件的值。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'DEMO-创建ECS',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 5,
                    ],
                ],
                [
                    'name' => 'SortBy',
                    'in' => 'query',
                    'schema' => [
                        'title' => '排序字段',
                        'description' => '排序字段。'."\n"
                            ."\n"
                            .'取值为CreateTime，表示产品创建时间。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'CreateTime',
                    ],
                ],
                [
                    'name' => 'SortOrder',
                    'in' => 'query',
                    'schema' => [
                        'title' => '排序方式',
                        'description' => '排序方式。取值：'."\n"
                            ."\n"
                            .'- Asc：正序。'."\n"
                            .'- Desc：倒序。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Desc',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页码。'."\n"
                            ."\n"
                            .'起始值：1。默认值：1。',
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
                        'description' => '分页时每页显示的数据行数。'."\n"
                            ."\n"
                            .'取值范围：1~100。起始值：1。默认值：10。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'Scope',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询范围。取值：'."\n"
                            ."\n"
                            .'- Local（默认值）：在当前账号中创建的产品。'."\n"
                            .'- Imported：从其他账号导入的产品。'."\n"
                            .'- All：所有可以使用的产品。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Local',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0FEEF92D-4052-5202-87D0-3D8EC16F81BF',
                            ],
                            'ProductDetails' => [
                                'title' => '产品列表',
                                'description' => '产品列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '产品详情。',
                                    'type' => 'object',
                                    'properties' => [
                                        'ProductArn' => [
                                            'title' => '产品ARN',
                                            'description' => '产品ARN。',
                                            'type' => 'string',
                                            'example' => 'acs:servicecatalog:cn-hangzhou:146611588617****:product/prod-bp18r7q127****',
                                        ],
                                        'Description' => [
                                            'title' => '产品描述',
                                            'description' => '产品描述。',
                                            'type' => 'string',
                                            'example' => '这是一个产品描述',
                                        ],
                                        'CreateTime' => [
                                            'title' => '产品创建时间',
                                            'description' => '产品创建时间。'."\n"
                                                ."\n"
                                                .'按照ISO8601标准表示，使用UTC时间，格式：YYYY-MM-DDThh:mm:ssZ。',
                                            'type' => 'string',
                                            'example' => '2022-04-12T06:10:37Z',
                                        ],
                                        'ProductId' => [
                                            'title' => '产品ID',
                                            'description' => '产品ID。',
                                            'type' => 'string',
                                            'example' => 'prod-bp18r7q127****',
                                        ],
                                        'ProductName' => [
                                            'title' => '产品名字',
                                            'description' => '产品名称。',
                                            'type' => 'string',
                                            'example' => 'DEMO-创建ECS',
                                        ],
                                        'ProviderName' => [
                                            'title' => '产品提供方',
                                            'description' => '产品提供者。',
                                            'type' => 'string',
                                            'example' => 'IT团队',
                                        ],
                                        'ProductType' => [
                                            'title' => '产品类型',
                                            'description' => '产品类型。'."\n"
                                                ."\n"
                                                .'取值为Ros，表示阿里云资源编排服务（ROS）。',
                                            'type' => 'string',
                                            'example' => 'Ros',
                                        ],
                                        'TemplateType' => [
                                            'description' => '产品模板类型。取值：'."\n"
                                                ."\n"
                                                .'- RosTerraformTemplate：表示阿里云资源编排服务（ROS）支持的Terraform模板。'."\n"
                                                .'- RosStandardTemplate：表示阿里云资源编排服务（ROS）标准模板。',
                                            'type' => 'string',
                                            'example' => 'RosTerraformTemplate',
                                        ],
                                    ],
                                ],
                            ],
                            'TotalCount' => [
                                'title' => '总记录数',
                                'description' => '总数据行数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '2',
                            ],
                            'PageNumber' => [
                                'description' => '页码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'PageSize' => [
                                'description' => '分页时每页显示的数据行数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'A system error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0FEEF92D-4052-5202-87D0-3D8EC16F81BF\\",\\n  \\"ProductDetails\\": [\\n    {\\n      \\"ProductArn\\": \\"acs:servicecatalog:cn-hangzhou:146611588617****:product/prod-bp18r7q127****\\",\\n      \\"Description\\": \\"这是一个产品描述\\",\\n      \\"CreateTime\\": \\"2022-04-12T06:10:37Z\\",\\n      \\"ProductId\\": \\"prod-bp18r7q127****\\",\\n      \\"ProductName\\": \\"DEMO-创建ECS\\",\\n      \\"ProviderName\\": \\"IT团队\\",\\n      \\"ProductType\\": \\"Ros\\",\\n      \\"TemplateType\\": \\"RosTerraformTemplate\\"\\n    }\\n  ],\\n  \\"TotalCount\\": 2,\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 10\\n}","type":"json"}]',
            'title' => '管理员查询产品列表',
        ],
        'CreateProductVersion' => [
            'summary' => '创建产品版本。',
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
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'ProductVersionName',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '产品版本名称',
                        'description' => '产品版本名称。'."\n"
                            ."\n"
                            .'长度为1~128个字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1.0',
                        'maxLength' => 100,
                        'minLength' => 1,
                    ],
                ],
                [
                    'name' => 'TemplateType',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '模板类型',
                        'description' => '产品模板类型。取值：'."\n"
                            ."\n"
                            .'- RosTerraformTemplate：表示阿里云资源编排服务（ROS）支持的Terraform模板。'."\n"
                            .'- RosStandardTemplate：表示阿里云资源编排服务（ROS）标准模板。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'RosTerraformTemplate',
                    ],
                ],
                [
                    'name' => 'TemplateUrl',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '模板的OSS地址',
                        'description' => '模板的URL地址。'."\n"
                            ."\n"
                            .'获取模板URL地址的方法，请参见[CreateTemplate](~~CreateTemplate~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'oss://servicecatalog-cn-hangzhou/146611588617****/terraform/template/tpl-bp1217we23****/template.json',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '产品版本描述',
                        'description' => '产品版本描述。'."\n"
                            ."\n"
                            .'长度为1~128个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '这是一个产品版本描述',
                    ],
                ],
                [
                    'name' => 'Guidance',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '推荐信息',
                        'description' => '推荐信息。取值：'."\n"
                            ."\n"
                            .'- Default（默认值）：无。'."\n"
                            .'- Recommended：稳定版。'."\n"
                            .'- Latest：最新版。'."\n"
                            .'- Deprecated：将废弃。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Default',
                    ],
                ],
                [
                    'name' => 'Active',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '是否启用',
                        'description' => '是否启用。取值：'."\n"
                            ."\n"
                            .'- true（默认值）：启用。'."\n"
                            .'- false：禁用。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'ProductId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '产品版本所属的产品ID',
                        'description' => '产品版本所属的产品ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'prod-bp18r7q127****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0FEEF92D-4052-5202-87D0-3D8EC16F81BF',
                            ],
                            'ProductVersionId' => [
                                'title' => '产品版本ID',
                                'description' => '产品版本ID。',
                                'type' => 'string',
                                'example' => 'pv-bp15e79d26****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'A system error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0FEEF92D-4052-5202-87D0-3D8EC16F81BF\\",\\n  \\"ProductVersionId\\": \\"pv-bp15e79d26****\\"\\n}","type":"json"}]',
            'title' => '创建产品版本',
            'description' => '调用该接口前，请先调用[CreateTemplate](~~CreateTemplate~~)创建模板。',
        ],
        'DeleteProductVersion' => [
            'summary' => '删除产品版本。',
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
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'ProductVersionId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '产品版本ID',
                        'description' => '产品版本ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'pv-bp15e79d26****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0FEEF92D-4052-5202-87D0-3D8EC16F81BF',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'A system error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0FEEF92D-4052-5202-87D0-3D8EC16F81BF\\"\\n}","type":"json"}]',
            'title' => '删除产品版本',
        ],
        'UpdateProductVersion' => [
            'summary' => '更新产品版本。',
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
                    'name' => 'ProductVersionId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '产品版本ID',
                        'description' => '产品版本ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'pv-bp15e79d26****',
                    ],
                ],
                [
                    'name' => 'ProductVersionName',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '产品版本名称',
                        'description' => '产品版本名称。'."\n"
                            ."\n"
                            .'长度为1~128个字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1.0',
                        'maxLength' => 100,
                        'minLength' => 1,
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '产品版本描述',
                        'description' => '产品版本描述。'."\n"
                            ."\n"
                            .'长度为1~128个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '这是一个产品版本描述',
                    ],
                ],
                [
                    'name' => 'Guidance',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '推荐信息',
                        'description' => '推荐信息。取值：'."\n"
                            ."\n"
                            .'- Default（默认值）：无。'."\n"
                            .'- Recommended：稳定版。'."\n"
                            .'- Latest：最新版。'."\n"
                            .'- Deprecated：将废弃。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Default',
                    ],
                ],
                [
                    'name' => 'Active',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '是否启用',
                        'description' => '是否启用。取值：'."\n"
                            ."\n"
                            .'- true（默认值）：启用。'."\n"
                            .'- false：禁用。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0FEEF92D-4052-5202-87D0-3D8EC16F81BF',
                            ],
                            'ProductVersionId' => [
                                'title' => '产品版本ID',
                                'description' => '产品版本ID。',
                                'type' => 'string',
                                'example' => 'pv-bp15e79d26****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'A system error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0FEEF92D-4052-5202-87D0-3D8EC16F81BF\\",\\n  \\"ProductVersionId\\": \\"pv-bp15e79d26****\\"\\n}","type":"json"}]',
            'title' => '更新产品版本',
        ],
        'GetProductVersion' => [
            'summary' => '查询产品版本信息。',
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
            ],
            'parameters' => [
                [
                    'name' => 'ProductVersionId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '产品版本ID',
                        'description' => '产品版本ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'pv-bp15e79d26****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'ProductVersionDetail' => [
                                'title' => '产品版本详情',
                                'description' => '产品版本详情。',
                                'type' => 'object',
                                'properties' => [
                                    'Active' => [
                                        'title' => '是否启用',
                                        'description' => '是否启用。取值：'."\n"
                                            ."\n"
                                            .'- true（默认值）：启用。'."\n"
                                            .'- false：禁用。',
                                        'type' => 'boolean',
                                        'enumValueTitles' => [],
                                        'example' => 'true',
                                    ],
                                    'Description' => [
                                        'title' => '产品版本描述',
                                        'description' => '产品版本描述。',
                                        'type' => 'string',
                                        'example' => '这是一个产品版本描述',
                                    ],
                                    'CreateTime' => [
                                        'title' => '创建时间',
                                        'description' => '产品版本创建时间。'."\n"
                                            ."\n"
                                            .'按照ISO8601标准表示，使用UTC时间，格式：YYYY-MM-DDThh:mm:ssZ。',
                                        'type' => 'string',
                                        'example' => '2022-04-12T06:10:37Z',
                                    ],
                                    'Guidance' => [
                                        'title' => '推荐信息',
                                        'description' => '推荐信息。取值：'."\n"
                                            ."\n"
                                            .'- Default（默认值）：无。'."\n"
                                            .'- Recommended：稳定版。'."\n"
                                            .'- Latest：最新版。'."\n"
                                            .'- Deprecated：将废弃。',
                                        'type' => 'string',
                                        'example' => 'Default',
                                    ],
                                    'ProductVersionId' => [
                                        'title' => '产品版本ID',
                                        'description' => '产品版本ID。',
                                        'type' => 'string',
                                        'example' => 'pv-bp15e79d26****',
                                    ],
                                    'ProductVersionName' => [
                                        'title' => '产品版本名称',
                                        'description' => '产品版本名称。',
                                        'type' => 'string',
                                        'example' => '1.0',
                                    ],
                                    'ProductId' => [
                                        'title' => '产品版本所属的产品ID',
                                        'description' => '产品版本所属的产品ID。',
                                        'type' => 'string',
                                        'example' => 'prod-bp18r7q127****',
                                    ],
                                    'TemplateUrl' => [
                                        'title' => '模板的OSS地址',
                                        'description' => '模板的URL地址。',
                                        'type' => 'string',
                                        'example' => 'oss://servicecatalog-cn-hangzhou/146611588617****/terraform/template/tpl-bp1217we23****/template.json',
                                    ],
                                    'TemplateType' => [
                                        'title' => '模板类型',
                                        'description' => '产品模板类型。取值：'."\n"
                                            ."\n"
                                            .'- RosTerraformTemplate：表示阿里云资源编排服务（ROS）支持的Terraform模板。'."\n"
                                            .'- RosStandardTemplate：表示阿里云资源编排服务（ROS）标准模板。',
                                        'type' => 'string',
                                        'example' => 'RosTerraformTemplate',
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0FEEF92D-4052-5202-87D0-3D8EC16F81BF',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'A system error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"ProductVersionDetail\\": {\\n    \\"Active\\": true,\\n    \\"Description\\": \\"这是一个产品版本描述\\",\\n    \\"CreateTime\\": \\"2022-04-12T06:10:37Z\\",\\n    \\"Guidance\\": \\"Default\\",\\n    \\"ProductVersionId\\": \\"pv-bp15e79d26****\\",\\n    \\"ProductVersionName\\": \\"1.0\\",\\n    \\"ProductId\\": \\"prod-bp18r7q127****\\",\\n    \\"TemplateUrl\\": \\"oss://servicecatalog-cn-hangzhou/146611588617****/terraform/template/tpl-bp1217we23****/template.json\\",\\n    \\"TemplateType\\": \\"RosTerraformTemplate\\"\\n  },\\n  \\"RequestId\\": \\"0FEEF92D-4052-5202-87D0-3D8EC16F81BF\\"\\n}","type":"json"}]',
            'title' => '查询产品版本信息',
        ],
        'ListProductVersions' => [
            'summary' => '查询产品版本列表。',
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
            ],
            'parameters' => [
                [
                    'name' => 'ProductId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '产品版本所属的产品ID',
                        'description' => '产品版本所属的产品ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'prod-bp18r7q127****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0FEEF92D-4052-5202-87D0-3D8EC16F81BF',
                            ],
                            'ProductVersionDetails' => [
                                'title' => '产品版本列表',
                                'description' => '产品版本列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '产品版本详情。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Active' => [
                                            'title' => '是否启用',
                                            'description' => '是否启用。取值：'."\n"
                                                ."\n"
                                                .'- true（默认值）：启用。'."\n"
                                                .'- false：禁用。',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'Description' => [
                                            'title' => '产品版本描述',
                                            'description' => '产品版本描述。',
                                            'type' => 'string',
                                            'example' => '这是一个产品版本描述。',
                                        ],
                                        'CreateTime' => [
                                            'title' => '创建时间',
                                            'description' => '产品版本创建时间。'."\n"
                                                ."\n"
                                                .'按照ISO8601标准表示，使用UTC时间，格式：YYYY-MM-DDThh:mm:ssZ。',
                                            'type' => 'string',
                                            'example' => '2022-04-12T06:10:37Z',
                                        ],
                                        'Guidance' => [
                                            'title' => '推荐信息',
                                            'description' => '推荐信息。取值：'."\n"
                                                ."\n"
                                                .'- Default（默认值）：无。'."\n"
                                                .'- Recommended：稳定版。'."\n"
                                                .'- Latest：最新版。'."\n"
                                                .'- Deprecated：将废弃。',
                                            'type' => 'string',
                                            'example' => 'Default',
                                        ],
                                        'ProductVersionId' => [
                                            'title' => '产品版本ID',
                                            'description' => '产品版本ID。',
                                            'type' => 'string',
                                            'example' => 'pv-bp15e79d26****',
                                        ],
                                        'ProductVersionName' => [
                                            'title' => '产品版本名称',
                                            'description' => '产品版本名称。',
                                            'type' => 'string',
                                            'example' => '1.0',
                                        ],
                                        'TemplateUrl' => [
                                            'title' => '模板的OSS地址',
                                            'description' => '模板的URL地址。',
                                            'type' => 'string',
                                            'example' => 'oss://servicecatalog-cn-hangzhou/146611588617****/terraform/template/tpl-bp1217we23****/template.json',
                                        ],
                                        'TemplateType' => [
                                            'title' => '模板类型',
                                            'description' => '产品模板类型。取值：'."\n"
                                                ."\n"
                                                .'- RosTerraformTemplate：表示阿里云资源编排服务（ROS）支持的Terraform模板。'."\n"
                                                .'- RosStandardTemplate：表示阿里云资源编排服务（ROS）标准模板。',
                                            'type' => 'string',
                                            'example' => 'RosTerraformTemplate',
                                        ],
                                        'ProductId' => [
                                            'description' => '产品版本所属的产品ID。',
                                            'type' => 'string',
                                            'example' => 'prod-bp18r7q127****',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'A system error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0FEEF92D-4052-5202-87D0-3D8EC16F81BF\\",\\n  \\"ProductVersionDetails\\": [\\n    {\\n      \\"Active\\": true,\\n      \\"Description\\": \\"这是一个产品版本描述。\\",\\n      \\"CreateTime\\": \\"2022-04-12T06:10:37Z\\",\\n      \\"Guidance\\": \\"Default\\",\\n      \\"ProductVersionId\\": \\"pv-bp15e79d26****\\",\\n      \\"ProductVersionName\\": \\"1.0\\",\\n      \\"TemplateUrl\\": \\"oss://servicecatalog-cn-hangzhou/146611588617****/terraform/template/tpl-bp1217we23****/template.json\\",\\n      \\"TemplateType\\": \\"RosTerraformTemplate\\",\\n      \\"ProductId\\": \\"prod-bp18r7q127****\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询产品版本列表',
        ],
        'CreateTemplate' => [
            'summary' => '创建模板。服务目录会保存用户上传的模板，并返回模板的URL地址。',
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
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'TemplateBody',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '模板内容',
                        'description' => '模板内容。'."\n"
                            ."\n"
                            .'关于模板语法的详情，请参见[Terraform类型模板结构](~~184397~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '{'."\n"
                            .'  "ROSTemplateFormatVersion": "2015-09-01",'."\n"
                            .'  "Transform": "Aliyun::Terraform-v1.1",'."\n"
                            .'  "Workspace": {'."\n"
                            .'    "main.tf": "variable  \\"name\\" {  default = \\"auto_provisioning_group\\"}"'."\n"
                            .'  },'."\n"
                            .'  "Outputs": {}'."\n"
                            .'}',
                    ],
                ],
                [
                    'name' => 'TemplateType',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '模板类型',
                        'description' => '产品模板类型。取值：'."\n"
                            ."\n"
                            .'- RosTerraformTemplate：表示阿里云资源编排服务（ROS）支持的Terraform模板。'."\n"
                            .'- RosStandardTemplate：表示阿里云资源编排服务（ROS）标准模板。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'RosTerraformTemplate',
                    ],
                ],
                [
                    'name' => 'TerraformVariables',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => 'Terraform模板变量设置，以结构化的方式表示，服务目录会将变量设置应用到模板中。'."\n"
                            ."\n"
                            .'> 变量必须在Terraform模板中存在。',
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'VariableName' => [
                                    'description' => '变量名称。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'instance_type',
                                ],
                                'Description' => [
                                    'description' => '变量描述。'."\n"
                                        ."\n"
                                        .'关于变量描述的格式，请参见[Terraform代码开发方式和建议](~~322216~~)。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '{'."\n"
                                        .'  "Label": { "zh-cn": "实例规格", "en": "Instance Type" },'."\n"
                                        .'  "AllowedValues": ['."\n"
                                        .'    "ecs.s6-c1m1.small",'."\n"
                                        .'    "ecs.s6-c1m2.large",'."\n"
                                        .'    "ecs.s6-c1m2.xlarge"'."\n"
                                        .'  ]'."\n"
                                        .'}'."\n",
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 20,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0FEEF92D-4052-5202-87D0-3D8EC16F81BF',
                            ],
                            'TemplateUrl' => [
                                'title' => '模板的OSS地址',
                                'description' => '模板的URL地址。',
                                'type' => 'string',
                                'example' => 'oss://servicecatalog-cn-hangzhou/146611588617****/terraform/template/tpl-bp1217we23****/template.json',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'A system error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0FEEF92D-4052-5202-87D0-3D8EC16F81BF\\",\\n  \\"TemplateUrl\\": \\"oss://servicecatalog-cn-hangzhou/146611588617****/terraform/template/tpl-bp1217we23****/template.json\\"\\n}","type":"json"}]',
            'title' => '创建模板',
        ],
        'GetTemplate' => [
            'summary' => '查询模板详情。',
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
            ],
            'parameters' => [
                [
                    'name' => 'ProductId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '产品ID',
                        'description' => '产品ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'prod-bp18r7q127****',
                    ],
                ],
                [
                    'name' => 'ProductVersionId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '产品版本ID',
                        'description' => '产品版本ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'pv-bp15e79d26****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0FEEF92D-4052-5202-87D0-3D8EC16F81BF',
                            ],
                            'TemplateBody' => [
                                'title' => '模板内容',
                                'description' => '模板内容。'."\n"
                                    ."\n"
                                    .'关于模板语法的详情，请参见[Terraform类型模板结构](~~184397~~)。',
                                'type' => 'string',
                                'example' => '{'."\n"
                                    .'  "ROSTemplateFormatVersion": "2015-09-01",'."\n"
                                    .'  "Transform": "Aliyun::Terraform-v1.1",'."\n"
                                    .'  "Workspace": {'."\n"
                                    .'    "main.tf": "variable  \\"name\\" {  default = \\"auto_provisioning_group\\"}"'."\n"
                                    .'  },'."\n"
                                    .'  "Outputs": {}'."\n"
                                    .'}',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'A system error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0FEEF92D-4052-5202-87D0-3D8EC16F81BF\\",\\n  \\"TemplateBody\\": \\"{\\\\n  \\\\\\"ROSTemplateFormatVersion\\\\\\": \\\\\\"2015-09-01\\\\\\",\\\\n  \\\\\\"Transform\\\\\\": \\\\\\"Aliyun::Terraform-v1.1\\\\\\",\\\\n  \\\\\\"Workspace\\\\\\": {\\\\n    \\\\\\"main.tf\\\\\\": \\\\\\"variable  \\\\\\\\\\\\\\"name\\\\\\\\\\\\\\" {  default = \\\\\\\\\\\\\\"auto_provisioning_group\\\\\\\\\\\\\\"}\\\\\\"\\\\n  },\\\\n  \\\\\\"Outputs\\\\\\": {}\\\\n}\\"\\n}","type":"json"}]',
            'title' => '查询模板详情',
        ],
        'CreatePortfolio' => [
            'summary' => '创建产品组合。',
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
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'PortfolioName',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '产品组合名称',
                        'description' => '产品组合名称。'."\n"
                            ."\n"
                            .'长度为1~128个字符。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => false,
                        'example' => 'DEMO-IT服务',
                        'maxLength' => 100,
                        'minLength' => 1,
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '产品组合描述',
                        'description' => '产品组合描述。'."\n"
                            ."\n"
                            .'长度为1~128个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '这是一个产品组合描述',
                    ],
                ],
                [
                    'name' => 'ProviderName',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '提供者名称',
                        'description' => '产品组合提供者。'."\n"
                            ."\n"
                            .'长度为1~128个字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'IT团队',
                        'maxLength' => 100,
                        'minLength' => 1,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0FEEF92D-4052-5202-87D0-3D8EC16F81BF',
                            ],
                            'PortfolioId' => [
                                'title' => '产品组合ID',
                                'description' => '产品组合ID。',
                                'type' => 'string',
                                'example' => 'port-bp1yt7582g****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'A system error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0FEEF92D-4052-5202-87D0-3D8EC16F81BF\\",\\n  \\"PortfolioId\\": \\"port-bp1yt7582g****\\"\\n}","type":"json"}]',
            'title' => '创建产品组合',
        ],
        'AssociateProductWithPortfolio' => [
            'summary' => '将产品加入产品组合。',
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
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'ProductId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '产品ID',
                        'description' => '产品ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'prod-bp18r7q127****',
                    ],
                ],
                [
                    'name' => 'PortfolioId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '产品组合ID',
                        'description' => '产品组合ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'port-bp1yt7582g****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0FEEF92D-4052-5202-87D0-3D8EC16F81BF',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'A system error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0FEEF92D-4052-5202-87D0-3D8EC16F81BF\\"\\n}","type":"json"}]',
            'title' => '将产品加入产品组合',
        ],
        'DeletePortfolio' => [
            'summary' => '删除产品组合。',
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
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'PortfolioId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '产品组合ID',
                        'description' => '产品组合ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'port-bp1yt7582g****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0FEEF92D-4052-5202-87D0-3D8EC16F81BF',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'A system error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0FEEF92D-4052-5202-87D0-3D8EC16F81BF\\"\\n}","type":"json"}]',
            'title' => '删除产品组合',
        ],
        'DisassociateProductFromPortfolio' => [
            'summary' => '从产品组合中移除产品。',
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
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'ProductId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '产品ID',
                        'description' => '产品ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'prod-bp18r7q127****',
                    ],
                ],
                [
                    'name' => 'PortfolioId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '产品组合ID',
                        'description' => '产品组合ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'port-bp1yt7582g****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0FEEF92D-4052-5202-87D0-3D8EC16F81BF',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'A system error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0FEEF92D-4052-5202-87D0-3D8EC16F81BF\\"\\n}","type":"json"}]',
            'title' => '从产品组合中移除产品',
        ],
        'UpdatePortfolio' => [
            'summary' => '更新产品组合。',
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
                    'name' => 'PortfolioId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '产品组合ID',
                        'description' => '产品组合ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'port-bp1yt7582g****',
                    ],
                ],
                [
                    'name' => 'PortfolioName',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '产品组合名称',
                        'description' => '产品组合名称。'."\n"
                            ."\n"
                            .'长度为1~128个字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'DEMO-IT服务',
                        'maxLength' => 100,
                        'minLength' => 1,
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '产品组合描述',
                        'description' => '产品组合描述。'."\n"
                            ."\n"
                            .'长度为1~128个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '这是一个产品组合描述',
                    ],
                ],
                [
                    'name' => 'ProviderName',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '提供者名称',
                        'description' => '产品组合提供者。'."\n"
                            ."\n"
                            .'长度为1~128个字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'IT团队',
                        'maxLength' => 100,
                        'minLength' => 1,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0FEEF92D-4052-5202-87D0-3D8EC16F81BF',
                            ],
                            'PortfolioId' => [
                                'title' => '产品组合ID',
                                'description' => '产品组合ID。',
                                'type' => 'string',
                                'example' => 'port-bp1yt7582g****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'A system error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0FEEF92D-4052-5202-87D0-3D8EC16F81BF\\",\\n  \\"PortfolioId\\": \\"port-bp1yt7582g****\\"\\n}","type":"json"}]',
            'title' => '更新产品组合',
        ],
        'GetPortfolio' => [
            'summary' => '查询产品组合信息。',
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
            ],
            'parameters' => [
                [
                    'name' => 'PortfolioId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '产品组合ID',
                        'description' => '产品组合ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'port-bp1yt7582g****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0FEEF92D-4052-5202-87D0-3D8EC16F81BF',
                            ],
                            'PortfolioDetail' => [
                                'title' => '产品组合详情',
                                'description' => '产品组合详情。',
                                'type' => 'object',
                                'properties' => [
                                    'PortfolioArn' => [
                                        'title' => '产品组合ARN',
                                        'description' => '产品组合ARN。',
                                        'type' => 'string',
                                        'example' => 'acs:servicecatalog:cn-hangzhou:146611588617****:portfolio/port-bp1yt7582g****',
                                    ],
                                    'PortfolioId' => [
                                        'title' => '产品组合ID',
                                        'description' => '产品组合ID。',
                                        'type' => 'string',
                                        'example' => 'port-bp1yt7582g****',
                                    ],
                                    'Description' => [
                                        'title' => '产品组合描述',
                                        'description' => '产品组合描述。',
                                        'type' => 'string',
                                        'example' => '这是一个产品组合描述',
                                    ],
                                    'CreateTime' => [
                                        'title' => '产品组合创建时间',
                                        'description' => '产品组合创建时间。'."\n"
                                            ."\n"
                                            .'按照ISO8601标准表示，使用UTC时间，格式：YYYY-MM-DDThh:mm:ssZ。',
                                        'type' => 'string',
                                        'example' => '2022-04-12T06:11:12Z',
                                    ],
                                    'PortfolioName' => [
                                        'title' => '产品组合名称',
                                        'description' => '产品组合名称。',
                                        'type' => 'string',
                                        'example' => 'DEMO-IT服务',
                                    ],
                                    'ProviderName' => [
                                        'title' => '提供者名称',
                                        'description' => '产品组合提供者。',
                                        'type' => 'string',
                                        'example' => 'IT团队',
                                    ],
                                ],
                            ],
                            'TagOptions' => [
                                'description' => '产品组合关联的标签选项列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Active' => [
                                            'description' => '是否启用。取值：'."\n"
                                                ."\n"
                                                .'- true（默认值）：启用。'."\n"
                                                .'- false：禁用。',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'TagOptionId' => [
                                            'description' => '标签选项ID。',
                                            'type' => 'string',
                                            'example' => 'tag-bp1q65xd3j****',
                                        ],
                                        'Key' => [
                                            'description' => '标签选项键。',
                                            'type' => 'string',
                                            'example' => 'k1',
                                        ],
                                        'Value' => [
                                            'description' => '标签选项值。',
                                            'type' => 'string',
                                            'example' => 'v1',
                                        ],
                                        'Owner' => [
                                            'description' => '标签选项归属人ID。',
                                            'type' => 'string',
                                            'example' => '133413081827****'."\n",
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'A system error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0FEEF92D-4052-5202-87D0-3D8EC16F81BF\\",\\n  \\"PortfolioDetail\\": {\\n    \\"PortfolioArn\\": \\"acs:servicecatalog:cn-hangzhou:146611588617****:portfolio/port-bp1yt7582g****\\",\\n    \\"PortfolioId\\": \\"port-bp1yt7582g****\\",\\n    \\"Description\\": \\"这是一个产品组合描述\\",\\n    \\"CreateTime\\": \\"2022-04-12T06:11:12Z\\",\\n    \\"PortfolioName\\": \\"DEMO-IT服务\\",\\n    \\"ProviderName\\": \\"IT团队\\"\\n  },\\n  \\"TagOptions\\": [\\n    {\\n      \\"Active\\": true,\\n      \\"TagOptionId\\": \\"tag-bp1q65xd3j****\\",\\n      \\"Key\\": \\"k1\\",\\n      \\"Value\\": \\"v1\\",\\n      \\"Owner\\": \\"133413081827****\\\\n\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询产品组合信息',
        ],
        'ListPortfolios' => [
            'summary' => '查询产品组合列表。',
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
            ],
            'parameters' => [
                [
                    'name' => 'ProductId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '产品ID',
                        'description' => '产品ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'prod-bp18r7q127****',
                    ],
                ],
                [
                    'name' => 'Filters',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'title' => '过滤条件',
                        'description' => '过滤条件。',
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'title' => '过滤条件的名称',
                                    'description' => '过滤条件的名称。取值：'."\n"
                                        ."\n"
                                        .'- PortfolioName：按产品组合名称查找，完整匹配（忽略大小写）。'."\n"
                                        .'- FullTextSearch：全文检索，按产品组合名称、产品组合提供者、产品组合描述查找，模糊匹配。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'PortfolioName',
                                ],
                                'Value' => [
                                    'title' => '过滤条件的值',
                                    'description' => '过滤条件的值。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'DEMO-IT服务',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 5,
                    ],
                ],
                [
                    'name' => 'SortBy',
                    'in' => 'query',
                    'schema' => [
                        'title' => '排序字段',
                        'description' => '排序字段。'."\n"
                            ."\n"
                            .'取值为CreateTime，表示产品组合创建时间。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'CreateTime',
                    ],
                ],
                [
                    'name' => 'SortOrder',
                    'in' => 'query',
                    'schema' => [
                        'title' => '排序方式',
                        'description' => '排序方式。取值：'."\n"
                            ."\n"
                            .'- Asc：正序。'."\n"
                            .'- Desc：倒序。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Desc',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页码。'."\n"
                            ."\n"
                            .'起始值：1。默认值：1。',
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
                        'description' => '分页时每页显示的数据行数。'."\n"
                            ."\n"
                            .'取值范围：1~100。起始值：1。默认值：10。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'Scope',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询范围。取值：'."\n"
                            ."\n"
                            .'- Local（默认值）：在当前账号中创建的产品组合。'."\n"
                            .'- Import：从其他账号导入的产品组合。'."\n"
                            .'- All：所有可以使用的产品组合。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Local',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'PortfolioDetails' => [
                                'title' => '产品组合列表',
                                'description' => '产品组合列表。',
                                'type' => 'array',
                                'items' => [
                                    'title' => 'PortfolioItemType',
                                    'description' => '产品组合详情。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Description' => [
                                            'title' => '产品组合描述',
                                            'description' => '产品组合描述。',
                                            'type' => 'string',
                                            'example' => '这是一个产品组合描述',
                                        ],
                                        'PortfolioName' => [
                                            'title' => '产品组合名称',
                                            'description' => '产品组合名称。',
                                            'type' => 'string',
                                            'example' => 'DEMO-IT服务',
                                        ],
                                        'CreateTime' => [
                                            'title' => '创建时间',
                                            'description' => '产品组合创建时间。'."\n"
                                                ."\n"
                                                .'按照ISO8601标准表示，使用UTC时间，格式：YYYY-MM-DDThh:mm:ssZ。',
                                            'type' => 'string',
                                            'example' => '2022-04-12T06:11:12Z',
                                        ],
                                        'ProviderName' => [
                                            'title' => '提供者名称',
                                            'description' => '产品组合提供者。',
                                            'type' => 'string',
                                            'example' => 'IT团队',
                                        ],
                                        'PortfolioId' => [
                                            'title' => '产品组合ID',
                                            'description' => '产品组合ID。',
                                            'type' => 'string',
                                            'example' => 'port-bp1yt7582g****',
                                        ],
                                        'PortfolioArn' => [
                                            'title' => '产品组合ARN',
                                            'description' => '产品组合ARN。',
                                            'type' => 'string',
                                            'example' => 'acs:servicecatalog:cn-hangzhou:146611588617****:portfolio/port-bp1yt7582g****',
                                        ],
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0FEEF92D-4052-5202-87D0-3D8EC16F81BF',
                            ],
                            'TotalCount' => [
                                'title' => '总记录数',
                                'description' => '总数据行数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '2',
                            ],
                            'PageNumber' => [
                                'description' => '页码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'PageSize' => [
                                'description' => '分页时每页显示的数据行数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'A system error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"PortfolioDetails\\": [\\n    {\\n      \\"Description\\": \\"这是一个产品组合描述\\",\\n      \\"PortfolioName\\": \\"DEMO-IT服务\\",\\n      \\"CreateTime\\": \\"2022-04-12T06:11:12Z\\",\\n      \\"ProviderName\\": \\"IT团队\\",\\n      \\"PortfolioId\\": \\"port-bp1yt7582g****\\",\\n      \\"PortfolioArn\\": \\"acs:servicecatalog:cn-hangzhou:146611588617****:portfolio/port-bp1yt7582g****\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"0FEEF92D-4052-5202-87D0-3D8EC16F81BF\\",\\n  \\"TotalCount\\": 2,\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 10\\n}","type":"json"}]',
            'title' => '查询产品组合列表',
        ],
        'CreateConstraint' => [
            'summary' => '创建约束。',
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
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'ConstraintType',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '约束类型',
                        'description' => '约束类型。'."\n"
                            ."\n"
                            .'取值为Launch，表示启动约束。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Launch',
                    ],
                ],
                [
                    'name' => 'Config',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '约束配置',
                        'description' => '约束配置。'."\n"
                            ."\n"
                            .'格式：{ "LocalRoleName": "<role_name\\>" }',
                        'type' => 'string',
                        'required' => true,
                        'example' => '{ "LocalRoleName": "TestRole" }',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '约束描述',
                        'description' => '约束描述。'."\n"
                            ."\n"
                            .'长度为1~128个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Launch as local role TestRole',
                    ],
                ],
                [
                    'name' => 'PortfolioId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '约束所属的产品组合ID',
                        'description' => '约束所属的产品组合ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'port-bp1yt7582g****',
                    ],
                ],
                [
                    'name' => 'ProductId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '约束对应的产品ID',
                        'description' => '约束对应的产品ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'prod-bp18r7q127****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0FEEF92D-4052-5202-87D0-3D8EC16F81BF',
                            ],
                            'ConstraintId' => [
                                'title' => '约束ID',
                                'description' => '约束ID。',
                                'type' => 'string',
                                'example' => 'cons-bp1yx7x42v****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'A system error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0FEEF92D-4052-5202-87D0-3D8EC16F81BF\\",\\n  \\"ConstraintId\\": \\"cons-bp1yx7x42v****\\"\\n}","type":"json"}]',
            'title' => '创建约束',
        ],
        'DeleteConstraint' => [
            'summary' => '删除约束。',
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
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'ConstraintId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '约束ID',
                        'description' => '约束ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cons-bp1yx7x42v****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0FEEF92D-4052-5202-87D0-3D8EC16F81BF',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'A system error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0FEEF92D-4052-5202-87D0-3D8EC16F81BF\\"\\n}","type":"json"}]',
            'title' => '删除约束',
        ],
        'UpdateConstraint' => [
            'summary' => '更新约束。',
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
                    'name' => 'ConstraintId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '约束ID',
                        'description' => '约束ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cons-bp1yx7x42v****',
                    ],
                ],
                [
                    'name' => 'Config',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '约束配置',
                        'description' => '约束配置。'."\n"
                            ."\n"
                            .'格式：{ "LocalRoleName": "<role_name\\>" }',
                        'type' => 'string',
                        'required' => true,
                        'example' => '{ "LocalRoleName": "TestRole" }',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '约束描述',
                        'description' => '约束描述。'."\n"
                            ."\n"
                            .'长度为1~128个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Launch as local role TestRole',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0FEEF92D-4052-5202-87D0-3D8EC16F81BF',
                            ],
                            'ConstraintId' => [
                                'title' => '约束ID',
                                'description' => '约束ID。',
                                'type' => 'string',
                                'example' => 'cons-bp1yx7x42v****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'A system error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0FEEF92D-4052-5202-87D0-3D8EC16F81BF\\",\\n  \\"ConstraintId\\": \\"cons-bp1yx7x42v****\\"\\n}","type":"json"}]',
            'title' => '更新约束',
        ],
        'GetConstraint' => [
            'summary' => '查询约束信息。',
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
            ],
            'parameters' => [
                [
                    'name' => 'ConstraintId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '约束ID',
                        'description' => '约束ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cons-bp1yx7x42v****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0FEEF92D-4052-5202-87D0-3D8EC16F81BF',
                            ],
                            'ConstraintDetail' => [
                                'title' => '约束详情',
                                'description' => '约束详情。',
                                'type' => 'object',
                                'properties' => [
                                    'Config' => [
                                        'title' => '约束配置',
                                        'description' => '约束配置。'."\n"
                                            ."\n"
                                            .'格式：{ "LocalRoleName": "<role_name\\>" }',
                                        'type' => 'string',
                                        'example' => '{ "LocalRoleName": "TestRole" }',
                                    ],
                                    'Description' => [
                                        'title' => '描述',
                                        'description' => '约束描述。',
                                        'type' => 'string',
                                        'example' => 'Launch as local role TestRole',
                                    ],
                                    'CreateTime' => [
                                        'title' => '创建时间',
                                        'description' => '约束创建时间。'."\n"
                                            ."\n"
                                            .'按照ISO8601标准表示，使用UTC时间，格式：YYYY-MM-DDThh:mm:ssZ。',
                                        'type' => 'string',
                                        'example' => '2022-04-12T06:11:26Z',
                                    ],
                                    'ConstraintId' => [
                                        'title' => '约束ID',
                                        'description' => '约束ID。',
                                        'type' => 'string',
                                        'example' => 'cons-bp1yx7x42v****',
                                    ],
                                    'PortfolioId' => [
                                        'title' => '约束所属的产品组合ID',
                                        'description' => '约束所属的产品组合ID。',
                                        'type' => 'string',
                                        'example' => 'port-bp1yt7582g****',
                                    ],
                                    'ProductId' => [
                                        'title' => '约束的产品ID',
                                        'description' => '约束对应的产品ID。',
                                        'type' => 'string',
                                        'example' => 'prod-bp18r7q127****',
                                    ],
                                    'ConstraintType' => [
                                        'title' => '约束类型',
                                        'description' => '约束类型。'."\n"
                                            ."\n"
                                            .'取值为Launch，表示启动约束。',
                                        'type' => 'string',
                                        'example' => 'Launch',
                                    ],
                                    'ProductName' => [
                                        'description' => '产品名称。',
                                        'type' => 'string',
                                        'example' => 'DEMO-创建ECS',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'A system error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0FEEF92D-4052-5202-87D0-3D8EC16F81BF\\",\\n  \\"ConstraintDetail\\": {\\n    \\"Config\\": \\"{ \\\\\\"LocalRoleName\\\\\\": \\\\\\"TestRole\\\\\\" }\\",\\n    \\"Description\\": \\"Launch as local role TestRole\\",\\n    \\"CreateTime\\": \\"2022-04-12T06:11:26Z\\",\\n    \\"ConstraintId\\": \\"cons-bp1yx7x42v****\\",\\n    \\"PortfolioId\\": \\"port-bp1yt7582g****\\",\\n    \\"ProductId\\": \\"prod-bp18r7q127****\\",\\n    \\"ConstraintType\\": \\"Launch\\",\\n    \\"ProductName\\": \\"DEMO-创建ECS\\"\\n  }\\n}","type":"json"}]',
            'title' => '查询约束信息',
        ],
        'AssociatePrincipalWithPortfolio' => [
            'summary' => '将产品组合授权给账号内的RAM用户或者RAM角色。',
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
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'PortfolioId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '产品组合ID',
                        'description' => '产品组合ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'port-bp1yt7582g****',
                    ],
                ],
                [
                    'name' => 'PrincipalType',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'RAM实体类型',
                        'description' => 'RAM实体类型。取值：'."\n"
                            ."\n"
                            .'- RamUser：RAM用户。'."\n"
                            .'- RamRole：RAM角色。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'RamUser',
                    ],
                ],
                [
                    'name' => 'PrincipalId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'RAM实体ID',
                        'description' => 'RAM实体ID。'."\n"
                            ."\n"
                            .'获取RAM用户ID的方法，请参见[GetUser](~~28681~~)。'."\n"
                            ."\n"
                            .'获取RAM角色ID的方法，请参见[GetRole](~~28711~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '24477111603637****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0FEEF92D-4052-5202-87D0-3D8EC16F81BF',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'A system error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0FEEF92D-4052-5202-87D0-3D8EC16F81BF\\"\\n}","type":"json"}]',
            'title' => '创建产品组合授权',
        ],
        'DisassociatePrincipalFromPortfolio' => [
            'summary' => '删除产品组合授权。',
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
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'PortfolioId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '产品组合ID',
                        'description' => '产品组合ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'port-bp1yt7582g****',
                    ],
                ],
                [
                    'name' => 'PrincipalType',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'RAM实体类型',
                        'description' => 'RAM实体类型。取值：'."\n"
                            ."\n"
                            .'- RamUser：RAM用户。'."\n"
                            .'- RamRole：RAM角色。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'RamUser',
                    ],
                ],
                [
                    'name' => 'PrincipalId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'RAM实体ID',
                        'description' => 'RAM实体ID。'."\n"
                            ."\n"
                            .'获取RAM用户ID的方法，请参见[GetUser](~~28681~~)。'."\n"
                            ."\n"
                            .'获取RAM角色ID的方法，请参见[GetRole](~~28711~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '24477111603637****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0FEEF92D-4052-5202-87D0-3D8EC16F81BF',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'A system error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0FEEF92D-4052-5202-87D0-3D8EC16F81BF\\"\\n}","type":"json"}]',
            'title' => '删除产品组合授权',
        ],
        'ListPrincipals' => [
            'summary' => '查询产品组合已授权的RAM用户和RAM角色列表。',
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
            ],
            'parameters' => [
                [
                    'name' => 'PortfolioId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '产品组合ID',
                        'description' => '产品组合ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'port-bp1yt7582g****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0FEEF92D-4052-5202-87D0-3D8EC16F81BF',
                            ],
                            'Principals' => [
                                'title' => 'RAM实体列表',
                                'description' => 'RAM实体列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => 'RAM实体信息。',
                                    'type' => 'object',
                                    'properties' => [
                                        'PrincipalType' => [
                                            'title' => 'RAM实体类型',
                                            'description' => 'RAM实体类型。取值：'."\n"
                                                ."\n"
                                                .'- RamUser：RAM用户。'."\n"
                                                .'- RamRole：RAM角色。',
                                            'type' => 'string',
                                            'example' => 'RamUser',
                                        ],
                                        'PrincipalId' => [
                                            'title' => 'RAM实体ID',
                                            'description' => 'RAM实体ID。',
                                            'type' => 'string',
                                            'example' => '24477111603637****',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'A system error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0FEEF92D-4052-5202-87D0-3D8EC16F81BF\\",\\n  \\"Principals\\": [\\n    {\\n      \\"PrincipalType\\": \\"RamUser\\",\\n      \\"PrincipalId\\": \\"24477111603637****\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询产品组合已授权的用户和角色列表',
        ],
        'ListRegions' => [
            'summary' => '查询地域列表。',
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
            ],
            'parameters' => [],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0FEEF92D-4052-5202-87D0-3D8EC16F81BF',
                            ],
                            'Regions' => [
                                'title' => '地域列表',
                                'description' => '地域列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '地域信息。',
                                    'type' => 'object',
                                    'properties' => [
                                        'RegionId' => [
                                            'title' => '地域ID',
                                            'description' => '地域ID。',
                                            'type' => 'string',
                                            'example' => 'cn-hangzhou',
                                        ],
                                        'RegionEndpoint' => [
                                            'title' => '地域接入地址',
                                            'description' => '地域接入地址。',
                                            'type' => 'string',
                                            'example' => 'servicecatalog.cn-hangzhou.aliyuncs.com',
                                        ],
                                        'LocalName' => [
                                            'title' => '地域名称',
                                            'description' => '地域名称。',
                                            'type' => 'string',
                                            'example' => '华东1（杭州）',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'A system error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0FEEF92D-4052-5202-87D0-3D8EC16F81BF\\",\\n  \\"Regions\\": [\\n    {\\n      \\"RegionId\\": \\"cn-hangzhou\\",\\n      \\"RegionEndpoint\\": \\"servicecatalog.cn-hangzhou.aliyuncs.com\\",\\n      \\"LocalName\\": \\"华东1（杭州）\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询地域列表',
        ],
        'GetTagOption' => [
            'summary' => '查询标签选项详情。',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'TagOptionId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'A short description of struct',
                        'description' => '标签选项ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'tag-bp1r3mxq3t****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'TagOptionDetail' => [
                                'description' => '标签选项详情。',
                                'type' => 'object',
                                'properties' => [
                                    'Active' => [
                                        'description' => '是否启用。取值：'."\n"
                                            ."\n"
                                            .'- true：启用。'."\n"
                                            .'- false：禁用。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'TagOptionId' => [
                                        'description' => '标签选项ID。',
                                        'type' => 'string',
                                        'example' => 'tag-bp15qmwz3r****',
                                    ],
                                    'Key' => [
                                        'description' => '标签选项键。',
                                        'type' => 'string',
                                        'example' => 'k1',
                                    ],
                                    'Value' => [
                                        'description' => '标签选项值。',
                                        'type' => 'string',
                                        'example' => 'v1',
                                    ],
                                    'Owner' => [
                                        'description' => '标签选项归属人云账号ID。',
                                        'type' => 'string',
                                        'example' => '133413081827****',
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'C1509725-055D-5C7B-9420-8B737DBD****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'A system error occurred.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"TagOptionDetail\\": {\\n    \\"Active\\": true,\\n    \\"TagOptionId\\": \\"tag-bp15qmwz3r****\\",\\n    \\"Key\\": \\"k1\\",\\n    \\"Value\\": \\"v1\\",\\n    \\"Owner\\": \\"133413081827****\\"\\n  },\\n  \\"RequestId\\": \\"C1509725-055D-5C7B-9420-8B737DBD****\\"\\n}","type":"json"}]',
            'title' => '查询标签选项信息',
        ],
        'DisAssociateTagOptionFromResource' => [
            'summary' => '取消标签选项与资源的关联。',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'ResourceId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'A short description of struct',
                        'description' => '标签选项绑定的资源ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'prod-bp14katy3d****',
                    ],
                ],
                [
                    'name' => 'TagOptionId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '标签选项ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'tag-bp1u6mdf3d****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '7E23D1F3-4333-587B-909C-39EA4626****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'A system error occurred.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"7E23D1F3-4333-587B-909C-39EA4626****\\"\\n}","type":"json"}]',
            'title' => '取消标签选项与资源的关联',
        ],
        'ListResourcesForTagOption' => [
            'summary' => '查询标签选项关联的资源列表。',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'TagOptionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '标签选项ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'tag-bp1u6mdf3d****',
                    ],
                ],
                [
                    'name' => 'ResourceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '标签选项关联的资源类型。取值：'."\n"
                            ."\n"
                            .'- Product：产品。'."\n"
                            .'- Portfolio：产品组合。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Product',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页码。'."\n"
                            ."\n"
                            .'起始值：1。默认值：1。',
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
                        'description' => '分页时每页显示的数据行数。'."\n"
                            ."\n"
                            .'取值范围：1~100。起始值：1。默认值：10。',
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
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'E465F21C-8712-5794-A754-5E4D9152****',
                            ],
                            'TotalCount' => [
                                'title' => '总记录数',
                                'description' => '总记录数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'PageNumber' => [
                                'description' => '页码。'."\n"
                                    ."\n"
                                    .'起始值：1。默认值：1。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'PageSize' => [
                                'description' => '分页时每页显示的数据行数。'."\n"
                                    ."\n"
                                    .'取值范围：1~100。起始值：1。默认值：10。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'ResourceDetails' => [
                                'description' => '关联资源详情。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'ResourceArn' => [
                                            'description' => '资源ARN。',
                                            'type' => 'string',
                                            'example' => 'acs:servicecatalog:cn-hangzhou:146611588617****:product/prod-bp18r7q127****'."\n",
                                        ],
                                        'CreateTime' => [
                                            'description' => '资源创建时间。'."\n"
                                                ."\n"
                                                .'按照ISO8601标准表示，使用UTC时间，格式：YYYY-MM-DDThh:mm:ssZ。',
                                            'type' => 'string',
                                            'example' => '2022-11-04T08:07:04.281986714Z',
                                        ],
                                        'Description' => [
                                            'description' => '资源描述。'."\n"
                                                ."\n"
                                                .'长度为1~128个字符。',
                                            'type' => 'string',
                                            'example' => '这是一个产品描述。'."\n",
                                        ],
                                        'ResourceId' => [
                                            'description' => '标签选项绑定的资源ID。',
                                            'type' => 'string',
                                            'example' => 'port-bp15p96922****',
                                        ],
                                        'ResourceName' => [
                                            'description' => '资源名称。',
                                            'type' => 'string',
                                            'example' => 'DEMO-创建ECS'."\n",
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'A system error occurred.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"E465F21C-8712-5794-A754-5E4D9152****\\",\\n  \\"TotalCount\\": 10,\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"ResourceDetails\\": [\\n    {\\n      \\"ResourceArn\\": \\"acs:servicecatalog:cn-hangzhou:146611588617****:product/prod-bp18r7q127****\\\\n\\",\\n      \\"CreateTime\\": \\"2022-11-04T08:07:04.281986714Z\\",\\n      \\"Description\\": \\"这是一个产品描述。\\\\n\\",\\n      \\"ResourceId\\": \\"port-bp15p96922****\\",\\n      \\"ResourceName\\": \\"DEMO-创建ECS\\\\n\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询标签选项关联的资源列表',
        ],
        'UpdateTagOption' => [
            'summary' => '更新标签选项。',
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
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'TagOptionId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'A short description of struct',
                        'description' => '标签选项ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'tag-bp1u6mdf3d****',
                    ],
                ],
                [
                    'name' => 'Value',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '标签选项值。'."\n"
                            ."\n"
                            .'最多支持128个字符，不能以`acs:`开头，不能包含`http://`或者`https://`。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'v1',
                        'maxLength' => 128,
                        'minLength' => 1,
                    ],
                ],
                [
                    'name' => 'Active',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否启用。取值：'."\n"
                            ."\n"
                            .'- true（默认值）：启用。'."\n"
                            .'- false：禁用。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'TagOptionDetail' => [
                                'description' => '标签选项详情。',
                                'type' => 'object',
                                'properties' => [
                                    'Active' => [
                                        'description' => '是否启用。取值：'."\n"
                                            ."\n"
                                            .'- true（默认值）：启用。'."\n"
                                            .'- false：禁用。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'TagOptionId' => [
                                        'description' => '标签选项ID。',
                                        'type' => 'string',
                                        'example' => 'tag-bp1u6mdf3d****',
                                    ],
                                    'Key' => [
                                        'description' => '用户输入的标签选项键。'."\n"
                                            ."\n"
                                            .'最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                                        'type' => 'string',
                                        'example' => 'k1',
                                    ],
                                    'Value' => [
                                        'description' => '用户输入的标签选项值。'."\n"
                                            ."\n"
                                            .'最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                                        'type' => 'string',
                                        'example' => 'v1',
                                    ],
                                    'Owner' => [
                                        'description' => '标签选项归属人云账号ID。',
                                        'type' => 'string',
                                        'example' => '133413081827****',
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0FEEF92D-4052-5202-87D0-3D8EC16F****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'A system error occurred.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"TagOptionDetail\\": {\\n    \\"Active\\": true,\\n    \\"TagOptionId\\": \\"tag-bp1u6mdf3d****\\",\\n    \\"Key\\": \\"k1\\",\\n    \\"Value\\": \\"v1\\",\\n    \\"Owner\\": \\"133413081827****\\"\\n  },\\n  \\"RequestId\\": \\"0FEEF92D-4052-5202-87D0-3D8EC16F****\\"\\n}","type":"json"}]',
            'title' => '更新标签选项',
        ],
        'ListTagOptions' => [
            'summary' => '查询标签选项列表。',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页码。'."\n"
                            ."\n"
                            .'起始值：1。默认值：1。',
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
                        'description' => '分页时每页显示的数据行数。'."\n"
                            ."\n"
                            .'取值范围：1~100。起始值：1。默认值：10。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'Filters',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '过滤条件。',
                        'type' => 'object',
                        'properties' => [
                            'Key' => [
                                'description' => '标签选项键。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'k1',
                            ],
                            'Value' => [
                                'description' => '标签选项值。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'v1',
                            ],
                            'Active' => [
                                'description' => '是否启用。取值：'."\n"
                                    ."\n"
                                    .'- true（默认值）：启用。'."\n"
                                    .'- false：禁用。',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'true',
                            ],
                            'FullTextSearch' => [
                                'description' => '全文搜索。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'k1',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'SortBy',
                    'in' => 'query',
                    'schema' => [
                        'description' => '排序字段。'."\n"
                            ."\n"
                            .'取值为CreateTime，表示标签选项创建时间。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'CreateTime',
                    ],
                ],
                [
                    'name' => 'SortOrder',
                    'in' => 'query',
                    'schema' => [
                        'description' => '排序方式。取值：'."\n"
                            ."\n"
                            .'- Asc：正序。'."\n"
                            .'- Desc（默认值）：倒序。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Desc',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '37C9C1DF-EFFC-5D8A-80D0-8657B1F3****',
                            ],
                            'TotalCount' => [
                                'title' => '总记录数',
                                'description' => '总记录数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'PageNumber' => [
                                'description' => '页码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'PageSize' => [
                                'description' => '分页时每页显示的数据行数。'."\n"
                                    ."\n"
                                    .'取值范围：1~100。起始值：1。默认值：10。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'TagOptionDetails' => [
                                'description' => '标签选项详情列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Active' => [
                                            'description' => '是否启用。取值：'."\n"
                                                ."\n"
                                                .'- true：启用。'."\n"
                                                .'- false：禁用。',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'TagOptionId' => [
                                            'description' => '标签选项ID。',
                                            'type' => 'string',
                                            'example' => 'tag-bp1r3mxq3t****',
                                        ],
                                        'Key' => [
                                            'description' => '标签选项键。',
                                            'type' => 'string',
                                            'example' => 'k1',
                                        ],
                                        'Value' => [
                                            'description' => '标签选项值。',
                                            'type' => 'string',
                                            'example' => 'v1',
                                        ],
                                        'Owner' => [
                                            'description' => '标签选项归属人云账号ID。',
                                            'type' => 'string',
                                            'example' => '133413081827****'."\n",
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'A system error occurred.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"37C9C1DF-EFFC-5D8A-80D0-8657B1F3****\\",\\n  \\"TotalCount\\": 10,\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"TagOptionDetails\\": [\\n    {\\n      \\"Active\\": true,\\n      \\"TagOptionId\\": \\"tag-bp1r3mxq3t****\\",\\n      \\"Key\\": \\"k1\\",\\n      \\"Value\\": \\"v1\\",\\n      \\"Owner\\": \\"133413081827****\\\\n\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询标签选项列表',
        ],
        'DeleteTagOption' => [
            'summary' => '删除标签选项。',
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
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'TagOptionId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'A short description of struct',
                        'description' => '标签选项ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'tag-bp1u6mdf3d****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0FEEF92D-4052-5202-87D0-3D8EC16F****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'A system error occurred.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0FEEF92D-4052-5202-87D0-3D8EC16F****\\"\\n}","type":"json"}]',
            'title' => '删除标签选项',
        ],
        'CreateTagOption' => [
            'summary' => '创建标签选项。',
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
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'Key',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'A short description of struct',
                        'description' => '用户输入的标签选项键。'."\n"
                            ."\n"
                            .'最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'k1',
                        'maxLength' => 128,
                        'minLength' => 1,
                    ],
                ],
                [
                    'name' => 'Value',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '用户输入的标签选项值。'."\n"
                            ."\n"
                            .'最多支持128个字符，不能以`acs:`开头，不能包含`http://`或者`https://`。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'v1',
                        'maxLength' => 128,
                        'minLength' => 1,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'TagOptionDetail' => [
                                'description' => '标签选项详情。',
                                'type' => 'object',
                                'properties' => [
                                    'Active' => [
                                        'description' => '是否启用。取值：'."\n"
                                            ."\n"
                                            .'- true（默认值）：启用。'."\n"
                                            .'- false：禁用。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'TagOptionId' => [
                                        'description' => '标签选项ID。',
                                        'type' => 'string',
                                        'example' => 'tag-bp1r3mxq3t****',
                                    ],
                                    'Key' => [
                                        'description' => '用户输入的标签选项键。'."\n"
                                            ."\n"
                                            .'最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                                        'type' => 'string',
                                        'example' => 'k1',
                                    ],
                                    'Value' => [
                                        'description' => '用户输入的标签选项值。'."\n"
                                            ."\n"
                                            .'最多支持128个字符，不能以`acs:`开头，不能包含`http://`或者`https://`。',
                                        'type' => 'string',
                                        'example' => 'v1',
                                    ],
                                    'Owner' => [
                                        'description' => '标签选项归属人云账号ID。',
                                        'type' => 'string',
                                        'example' => '133413081827****'."\n",
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'A48A5F12-6098-54A1-A389-6834AF27****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'A system error occurred.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"TagOptionDetail\\": {\\n    \\"Active\\": true,\\n    \\"TagOptionId\\": \\"tag-bp1r3mxq3t****\\",\\n    \\"Key\\": \\"k1\\",\\n    \\"Value\\": \\"v1\\",\\n    \\"Owner\\": \\"133413081827****\\\\n\\"\\n  },\\n  \\"RequestId\\": \\"A48A5F12-6098-54A1-A389-6834AF27****\\"\\n}","type":"json"}]',
            'title' => '创建标签选项',
        ],
        'AssociateTagOptionWithResource' => [
            'summary' => '将标签选项关联到资源。',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'ResourceId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'A short description of struct',
                        'description' => '标签选项绑定的资源ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'port-bp15p96922****',
                    ],
                ],
                [
                    'name' => 'TagOptionId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '标签选项ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'tag-bp1u6mdf3d****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'DC833558-AFF4-5935-9AB6-8A12EE7D****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'A system error occurred.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"DC833558-AFF4-5935-9AB6-8A12EE7D****\\"\\n}","type":"json"}]',
            'title' => '将标签选项关联到资源',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'servicecatalog.cn-hangzhou.aliyuncs.com',
        ],
    ],
];
<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'servicecatalog',
    'version' => '2021-09-01',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 156830,
      'title' => '服务发现',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'GetProductAsEndUser',
        1 => 'ListProductsAsEndUser',
      ),
    ),
    1 => 
    array (
      'id' => 156834,
      'title' => '服务请求',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ListLaunchOptions',
        1 => 'LaunchProduct',
        2 => 'TerminateProvisionedProduct',
        3 => 'UpdateProvisionedProduct',
      ),
    ),
    2 => 
    array (
      'id' => 168857,
      'title' => '计划',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateProvisionedProductPlan',
        1 => 'GetProvisionedProductPlan',
        2 => 'ListProvisionedProductPlans',
        3 => 'CancelProvisionedProductPlan',
        4 => 'UpdateProvisionedProductPlan',
        5 => 'ApproveProvisionedProductPlan',
        6 => 'ListProvisionedProductPlanApprovers',
        7 => 'ExecuteProvisionedProductPlan',
        8 => 'DeleteProvisionedProductPlan',
      ),
    ),
    3 => 
    array (
      'id' => 167563,
      'title' => '实例',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'GetProvisionedProduct',
        1 => 'ListProvisionedProducts',
        2 => 'GetTask',
        3 => 'ListTasks',
      ),
    ),
    4 => 
    array (
      'id' => 156842,
      'title' => '产品',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CopyProduct',
        1 => 'CreateProduct',
        2 => 'DeleteProduct',
        3 => 'UpdateProduct',
        4 => 'GetProductAsAdmin',
        5 => 'ListProductsAsAdmin',
      ),
    ),
    5 => 
    array (
      'id' => 156848,
      'title' => '产品版本',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateProductVersion',
        1 => 'DeleteProductVersion',
        2 => 'UpdateProductVersion',
        3 => 'GetProductVersion',
        4 => 'ListProductVersions',
      ),
    ),
    6 => 
    array (
      'id' => 156854,
      'title' => '模板',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateTemplate',
        1 => 'GetTemplate',
      ),
    ),
    7 => 
    array (
      'id' => 156857,
      'title' => '产品组合',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreatePortfolio',
        1 => 'AssociateProductWithPortfolio',
        2 => 'DeletePortfolio',
        3 => 'DisassociateProductFromPortfolio',
        4 => 'UpdatePortfolio',
        5 => 'GetPortfolio',
        6 => 'ListPortfolios',
      ),
    ),
    8 => 
    array (
      'id' => 156865,
      'title' => '约束',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateConstraint',
        1 => 'DeleteConstraint',
        2 => 'UpdateConstraint',
        3 => 'GetConstraint',
      ),
    ),
    9 => 
    array (
      'id' => 156871,
      'title' => '授权',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'AssociatePrincipalWithPortfolio',
        1 => 'DisassociatePrincipalFromPortfolio',
        2 => 'ListPrincipals',
      ),
    ),
    10 => 
    array (
      'id' => 156875,
      'title' => '地域',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ListRegions',
      ),
    ),
    11 => 
    array (
      'id' => 181704,
      'title' => '标签选项',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'GetTagOption',
        1 => 'DisAssociateTagOptionFromResource',
        2 => 'ListResourcesForTagOption',
        3 => 'UpdateTagOption',
        4 => 'ListTagOptions',
        5 => 'DeleteTagOption',
        6 => 'CreateTagOption',
        7 => 'AssociateTagOptionWithResource',
      ),
    ),
  ),
  'components' => 
  array (
    'schemas' => 
    array (
    ),
  ),
  'apis' => 
  array (
    'GetProductAsEndUser' => 
    array (
      'summary' => '终端用户调用GetProductAsEndUser接口查询产品信息。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProductId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '产品ID',
            'description' => '产品ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'prod-bp18r7q127****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '0FEEF92D-4052-5202-87D0-3D8EC16F81BF',
              ),
              'ProductSummary' => 
              array (
                'title' => '产品详情',
                'description' => '产品概要信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'Description' => 
                  array (
                    'title' => '产品描述',
                    'description' => '产品描述。',
                    'type' => 'string',
                    'example' => '这是一个产品描述',
                  ),
                  'CreateTime' => 
                  array (
                    'title' => '创建时间',
                    'description' => '产品创建时间。

按照ISO8601标准表示，使用UTC时间，格式：YYYY-MM-DDThh:mm:ssZ。',
                    'type' => 'string',
                    'example' => '2022-04-12T06:10:37Z',
                  ),
                  'ProductId' => 
                  array (
                    'title' => '产品ID',
                    'description' => '产品ID。',
                    'type' => 'string',
                    'example' => 'prod-bp18r7q127****',
                  ),
                  'ProductArn' => 
                  array (
                    'title' => '产品ARN',
                    'description' => '产品ARN。',
                    'type' => 'string',
                    'example' => 'acs:servicecatalog:cn-hangzhou:146611588617****:product/prod-bp18r7q127****',
                  ),
                  'ProductName' => 
                  array (
                    'title' => '产品名称',
                    'description' => '产品名称。',
                    'type' => 'string',
                    'example' => 'DEMO-创建ECS',
                  ),
                  'ProviderName' => 
                  array (
                    'title' => '提供者名称',
                    'description' => '产品提供者。',
                    'type' => 'string',
                    'example' => 'IT团队',
                  ),
                  'ProductType' => 
                  array (
                    'title' => '产品类型',
                    'description' => '产品类型。

取值为Ros，表示阿里云资源编排服务（ROS）。',
                    'type' => 'string',
                    'example' => 'Ros',
                  ),
                  'HasDefaultLaunchOption' => 
                  array (
                    'description' => '是否存在默认启动选项。取值：

- true：存在默认启动选项，启动产品或更新实例时无需填写PortfolioId。
- false：没有默认启动选项，启动产品或更新实例时必须填写PortfolioId。获取PortfolioId的方法，请参见[ListLaunchOptions](~~ListLaunchOptions~~)。

> 如果产品仅被加入到一个产品组合，则会存在默认启动选项。如果产品被加入到多个产品组合，则会同时存在多个启动选项，但此时没有默认启动选项。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'TemplateType' => 
                  array (
                    'description' => '产品模板类型。取值：

- RosTerraformTemplate：表示阿里云资源编排服务（ROS）支持的Terraform模板。
- RosStandardTemplate：表示阿里云资源编排服务（ROS）标准模板。',
                    'type' => 'string',
                    'example' => 'RosTerraformTemplate',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'A system error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0FEEF92D-4052-5202-87D0-3D8EC16F81BF\\",\\n  \\"ProductSummary\\": {\\n    \\"Description\\": \\"这是一个产品描述\\",\\n    \\"CreateTime\\": \\"2022-04-12T06:10:37Z\\",\\n    \\"ProductId\\": \\"prod-bp18r7q127****\\",\\n    \\"ProductArn\\": \\"acs:servicecatalog:cn-hangzhou:146611588617****:product/prod-bp18r7q127****\\",\\n    \\"ProductName\\": \\"DEMO-创建ECS\\",\\n    \\"ProviderName\\": \\"IT团队\\",\\n    \\"ProductType\\": \\"Ros\\",\\n    \\"HasDefaultLaunchOption\\": true,\\n    \\"TemplateType\\": \\"RosTerraformTemplate\\"\\n  }\\n}","type":"json"}]',
      'title' => '终端用户查询产品信息',
      'description' => '请确保终端用户已被管理员授予相关产品的使用权限。具体操作，请参见[为终端用户授予访问权限](~~405233~~)。',
    ),
    'ListProductsAsEndUser' => 
    array (
      'summary' => '终端用户调用ListProductsAsEndUser接口查询产品列表。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Filters',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'title' => '过滤条件',
            'description' => '过滤条件。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'title' => '过滤条件的名称',
                  'description' => '过滤条件的名称。取值：

- ProductName：按产品名称查找，完整匹配（忽略大小写）。
- FullTextSearch：全文检索，按产品名称、产品提供者、产品描述查找，模糊匹配。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'ProductName',
                ),
                'Value' => 
                array (
                  'title' => '过滤条件的值',
                  'description' => '过滤条件的值。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'DEMO-创建ECS',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 5,
          ),
        ),
        1 => 
        array (
          'name' => 'SortBy',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '排序字段',
            'description' => '排序字段。

取值为CreateTime，表示产品创建时间。
默认取值CreateTime。',
            'type' => 'string',
            'required' => false,
            'example' => 'CreateTime',
          ),
        ),
        2 => 
        array (
          'name' => 'SortOrder',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '排序方式',
            'description' => '排序方式。取值：

- Asc：正序。
- Desc（默认值）：倒序。',
            'type' => 'string',
            'required' => false,
            'example' => 'Desc',
          ),
        ),
        3 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码。

起始值：1。默认值：1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页时每页显示的数据行数。

取值范围：1~100。起始值：1。默认值：10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '0FEEF92D-4052-5202-87D0-3D8EC16F81BF',
              ),
              'ProductSummaries' => 
              array (
                'title' => '产品列表',
                'description' => '产品列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '产品概要信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Description' => 
                    array (
                      'title' => '产品描述',
                      'description' => '产品描述。',
                      'type' => 'string',
                      'example' => '这是一个产品描述',
                    ),
                    'CreateTime' => 
                    array (
                      'title' => '产品创建时间',
                      'description' => '产品创建时间。

按照ISO8601标准表示，使用UTC时间，格式：YYYY-MM-DDThh:mm:ssZ。',
                      'type' => 'string',
                      'example' => '2022-04-12T06:10:37Z',
                    ),
                    'ProductId' => 
                    array (
                      'title' => '产品ID',
                      'description' => '产品ID。',
                      'type' => 'string',
                      'example' => 'prod-bp18r7q127****',
                    ),
                    'ProductArn' => 
                    array (
                      'title' => '产品ARN',
                      'description' => '产品ARN。',
                      'type' => 'string',
                      'example' => 'acs:servicecatalog:cn-hangzhou:146611588617****:product/prod-bp18r7q127****',
                    ),
                    'ProductName' => 
                    array (
                      'title' => '产品名字',
                      'description' => '产品名称。',
                      'type' => 'string',
                      'example' => 'DEMO-创建ECS',
                    ),
                    'ProviderName' => 
                    array (
                      'title' => '产品提供方',
                      'description' => '产品提供者。',
                      'type' => 'string',
                      'example' => 'IT团队',
                    ),
                    'ProductType' => 
                    array (
                      'title' => '产品类型',
                      'description' => '产品类型。

取值为Ros，表示阿里云资源编排服务（ROS）。',
                      'type' => 'string',
                      'example' => 'Ros',
                    ),
                    'HasDefaultLaunchOption' => 
                    array (
                      'title' => '是否存在默认的启动选项',
                      'description' => '是否存在默认启动选项。取值：

- true：存在默认启动选项，启动产品或更新实例时无需填写PortfolioId。
- false：没有默认启动选项，启动产品或更新实例时必须填写PortfolioId。获取PortfolioId的方法，请参见[ListLaunchOptions](~~ListLaunchOptions~~)。

> 如果产品仅被加入到一个产品组合，则会存在默认启动选项。如果产品被加入到多个产品组合，则会同时存在多个启动选项，但此时没有默认启动选项。',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'TemplateType' => 
                    array (
                      'description' => '产品模板类型。取值：

- RosTerraformTemplate：表示阿里云资源编排服务（ROS）支持的Terraform模板。
- RosStandardTemplate：表示阿里云资源编排服务（ROS）标准模板。',
                      'type' => 'string',
                      'example' => 'RosTerraformTemplate',
                    ),
                  ),
                ),
              ),
              'TotalCount' => 
              array (
                'title' => '总记录数',
                'description' => '总数据行数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '100',
              ),
              'PageNumber' => 
              array (
                'description' => '页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '分页时每页显示的数据行数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'A system error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0FEEF92D-4052-5202-87D0-3D8EC16F81BF\\",\\n  \\"ProductSummaries\\": [\\n    {\\n      \\"Description\\": \\"这是一个产品描述\\",\\n      \\"CreateTime\\": \\"2022-04-12T06:10:37Z\\",\\n      \\"ProductId\\": \\"prod-bp18r7q127****\\",\\n      \\"ProductArn\\": \\"acs:servicecatalog:cn-hangzhou:146611588617****:product/prod-bp18r7q127****\\",\\n      \\"ProductName\\": \\"DEMO-创建ECS\\",\\n      \\"ProviderName\\": \\"IT团队\\",\\n      \\"ProductType\\": \\"Ros\\",\\n      \\"HasDefaultLaunchOption\\": true,\\n      \\"TemplateType\\": \\"RosTerraformTemplate\\"\\n    }\\n  ],\\n  \\"TotalCount\\": 100,\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 10\\n}","type":"json"}]',
      'title' => '终端用户查询产品列表',
      'description' => '请确保终端用户已被管理员授予相关产品的使用权限。具体操作，请参见[为终端用户授予访问权限](~~405233~~)。',
    ),
    'ListLaunchOptions' => 
    array (
      'summary' => '查询启动选项列表。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProductId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '产品ID',
            'description' => '产品ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'prod-bp18r7q127****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '0FEEF92D-4052-5202-87D0-3D8EC16F81BF',
              ),
              'LaunchOptionSummaries' => 
              array (
                'title' => '启动选项概要',
                'description' => '启动选项列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'PortfolioId' => 
                    array (
                      'title' => '产品组合ID',
                      'description' => '产品组合ID。',
                      'type' => 'string',
                      'example' => 'port-bp1yt7582g****',
                    ),
                    'PortfolioName' => 
                    array (
                      'title' => '产品组合名称',
                      'description' => '产品组合名称。',
                      'type' => 'string',
                      'example' => 'DEMO-IT服务',
                    ),
                    'ConstraintSummaries' => 
                    array (
                      'title' => '约束概要',
                      'description' => '约束列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'ConstraintType' => 
                          array (
                            'title' => '约束类型',
                            'description' => '约束类型。取值：
1. Launch：启动约束。
2. Template：模板约束。
3. Approval：审批约束。
4. StackRegion：地域约束。',
                            'type' => 'string',
                            'example' => 'Launch',
                          ),
                          'Description' => 
                          array (
                            'title' => '约束描述',
                            'description' => '约束描述。',
                            'type' => 'string',
                            'example' => 'Launch as local role TestRole',
                          ),
                          'OperationTypes' => 
                          array (
                            'title' => '操作类型，当约束类型为审批约束时不为空',
                            'description' => '需被审批的操作类型列表，当约束类型为审批约束时不为空。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '操作类型，当约束类型为审批约束时不为空。',
                              'type' => 'string',
                              'example' => 'All,TerminateProvisionedProduct,UpdateProvisionedProduct,LaunchProduct',
                            ),
                          ),
                          'StackRegions' => 
                          array (
                            'description' => '终端用户可启动的地域列表，当约束类型为地域约束时不为空。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '终端用户可启动的地域。',
                              'type' => 'string',
                              'example' => 'cn-hangzhou',
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'A system error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0FEEF92D-4052-5202-87D0-3D8EC16F81BF\\",\\n  \\"LaunchOptionSummaries\\": [\\n    {\\n      \\"PortfolioId\\": \\"port-bp1yt7582g****\\",\\n      \\"PortfolioName\\": \\"DEMO-IT服务\\",\\n      \\"ConstraintSummaries\\": [\\n        {\\n          \\"ConstraintType\\": \\"Launch\\",\\n          \\"Description\\": \\"Launch as local role TestRole\\",\\n          \\"OperationTypes\\": [\\n            \\"All,TerminateProvisionedProduct,UpdateProvisionedProduct,LaunchProduct\\"\\n          ],\\n          \\"StackRegions\\": [\\n            \\"cn-hangzhou\\"\\n          ]\\n        }\\n      ]\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询启动选项列表',
    ),
    'LaunchProduct' => 
    array (
      'summary' => '启动产品。',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProvisionedProductName',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '实例名称',
            'description' => '实例名称。

长度为1~128个字符。',
            'type' => 'string',
            'required' => true,
            'example' => 'DEMO-ECS实例',
            'maxLength' => 100,
            'minLength' => 1,
          ),
        ),
        1 => 
        array (
          'name' => 'PortfolioId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '产品组合ID',
            'description' => '产品组合ID。

> 存在默认启动选项时，无需填写PortfolioId。没有默认启动选项时，必须填写PortfolioId。获取PortfolioId的方法，请参见[ListLaunchOptions](~~ListLaunchOptions~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'port-bp1yt7582g****',
          ),
        ),
        2 => 
        array (
          'name' => 'ProductId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '产品ID',
            'description' => '产品ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'prod-bp18r7q127****',
          ),
        ),
        3 => 
        array (
          'name' => 'ProductVersionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '产品版本ID',
            'description' => '产品版本ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'pv-bp15e79d26****',
          ),
        ),
        4 => 
        array (
          'name' => 'Parameters',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '用户输入的模板参数。

N最大值为200。

> Parameters为可选参数。如果需要指定Parameters，则Parameters.N.ParameterKey和Parameters.N.ParameterValue必须同时指定。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'ParameterKey' => 
                array (
                  'description' => '模板中定义的参数名称。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'instance_type',
                ),
                'ParameterValue' => 
                array (
                  'description' => '用户输入的模板参数值。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'ecs.s6-c1m1.small',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 200,
          ),
        ),
        5 => 
        array (
          'name' => 'StackRegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => 'ROS资源栈所属的地域ID',
            'description' => '阿里云资源编排服务（ROS）资源栈所属的地域ID。

获取ROS支持的地域列表的方法，请参见[DescribeRegions](~~131035~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        6 => 
        array (
          'name' => 'Tags',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '用户输入的自定义标签。

N最大值为20。

> - Tags为可选参数。如果需要指定Tags，则Tags.N.Key和Tags.N.Value必须同时指定。
> - 此标签会传递到资源栈中每个支持标签的资源中。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '用户输入的自定义标签键。

最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'k1',
                ),
                'Value' => 
                array (
                  'description' => '用户输入的自定义标签值。

最多支持128个字符，不能以`acs:`开头，不能包含`http://`或者`https://`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'v1',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 20,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '0FEEF92D-4052-5202-87D0-3D8EC16F81BF',
              ),
              'ProvisionedProductId' => 
              array (
                'title' => '实例ID',
                'description' => '实例ID。',
                'type' => 'string',
                'example' => 'pp-bp1ddg1n2a****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'A system error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0FEEF92D-4052-5202-87D0-3D8EC16F81BF\\",\\n  \\"ProvisionedProductId\\": \\"pp-bp1ddg1n2a****\\"\\n}","type":"json"}]',
      'title' => '启动产品',
    ),
    'TerminateProvisionedProduct' => 
    array (
      'summary' => '终止实例。',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProvisionedProductId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '实例ID',
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'pp-bp1ddg1n2a****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '0FEEF92D-4052-5202-87D0-3D8EC16F81BF',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'A system error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0FEEF92D-4052-5202-87D0-3D8EC16F81BF\\"\\n}","type":"json"}]',
      'title' => '终止实例',
      'description' => '终止实例后实例将从实例列表中删除，终端用户后续无法正常管理该实例的生命周期，请谨慎操作。',
    ),
    'UpdateProvisionedProduct' => 
    array (
      'summary' => '更新实例。',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PortfolioId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '产品组合ID',
            'description' => '产品组合ID。

> 存在默认启动选项时，无需填写PortfolioId。没有默认启动选项时，必须填写PortfolioId。获取PortfolioId的方法，请参见[ListLaunchOptions](~~ListLaunchOptions~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'port-bp1yt7582g****',
          ),
        ),
        1 => 
        array (
          'name' => 'ProductId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '产品ID',
            'description' => '产品ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'prod-bp18r7q127****',
          ),
        ),
        2 => 
        array (
          'name' => 'ProductVersionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '产品版本ID',
            'description' => '产品版本ID。

> 当输入的ProductVersionId和Parameters与之前相比，两者都没有变化时，不允许更新实例。',
            'type' => 'string',
            'required' => true,
            'example' => 'pv-bp15e79d26****',
          ),
        ),
        3 => 
        array (
          'name' => 'Parameters',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '用户输入的模板参数。

N最大值为200。

> - Parameters为可选参数。如果需要指定Parameters，则Parameters.N.ParameterKey和Parameters.N.ParameterValue必须同时指定。
> - 当输入的ProductVersionId和Parameters与之前相比，两者都没有变化时，不允许更新实例。
',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'ParameterKey' => 
                array (
                  'description' => '模板中定义的参数名称。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'instance_type',
                ),
                'ParameterValue' => 
                array (
                  'description' => '用户输入的模板参数值。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'ecs.s6-c1m1.small',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 200,
          ),
        ),
        4 => 
        array (
          'name' => 'ProvisionedProductId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '实例ID',
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'pp-bp1ddg1n2a****',
          ),
        ),
        5 => 
        array (
          'name' => 'Tags',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '用户输入的自定义标签。

N最大值为20。

> - Tags为可选参数。如果需要指定Tags，则Tags.N.Key和Tags.N.Value必须同时指定。
> - 此标签会传递到资源栈中每个支持标签的资源中。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '用户输入的自定义标签键。

最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'k1',
                ),
                'Value' => 
                array (
                  'description' => '用户输入的自定义标签值。

最多支持128个字符，不能以`acs:`开头，不能包含`http://`或者`https://`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'v1',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 20,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '0FEEF92D-4052-5202-87D0-3D8EC16F81BF',
              ),
              'ProvisionedProductId' => 
              array (
                'title' => '实例ID',
                'description' => '实例ID。',
                'type' => 'string',
                'example' => 'pp-bp1ddg1n2a****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'A system error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0FEEF92D-4052-5202-87D0-3D8EC16F81BF\\",\\n  \\"ProvisionedProductId\\": \\"pp-bp1ddg1n2a****\\"\\n}","type":"json"}]',
      'title' => '更新实例',
    ),
    'CreateProvisionedProductPlan' => 
    array (
      'summary' => '创建计划。',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PlanName',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '计划名称。

长度为1~128个字符。',
            'description' => '计划名称。

长度为1~128个字符。',
            'type' => 'string',
            'required' => true,
            'example' => 'DEMO-ECS实例',
            'maxLength' => 100,
            'minLength' => 1,
          ),
        ),
        1 => 
        array (
          'name' => 'PlanType',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '计划类型。

取值为Ros，表示阿里云资源编排服务（ROS）。',
            'description' => '计划类型。

取值为Ros，表示阿里云资源编排服务（ROS）。',
            'type' => 'string',
            'required' => true,
            'example' => 'Ros',
          ),
        ),
        2 => 
        array (
          'name' => 'ProvisionedProductName',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '实例名称。

长度为1~128个字符。',
            'description' => '实例名称。

长度为1~128个字符。',
            'type' => 'string',
            'required' => true,
            'example' => 'DEMO-ECS实例',
            'maxLength' => 100,
            'minLength' => 1,
          ),
        ),
        3 => 
        array (
          'name' => 'PortfolioId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '产品组合ID。',
            'description' => '产品组合ID。

> 存在默认启动选项时，无需填写PortfolioId。没有默认启动选项时，必须填写PortfolioId。获取PortfolioId的方法，请参见[ListLaunchOptions](~~ListLaunchOptions~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'port-bp1yt7582g****',
          ),
        ),
        4 => 
        array (
          'name' => 'ProductId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => 'ProductId',
            'description' => '产品ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'prod-bp18r7q127****',
          ),
        ),
        5 => 
        array (
          'name' => 'ProductVersionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '产品版本ID。

',
            'description' => '产品版本ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'pv-bp15e79d26****',
          ),
        ),
        6 => 
        array (
          'name' => 'Parameters',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'title' => '用户输入的模板参数。

N最大值为200。',
            'description' => '用户输入的模板参数。

N最大值为200。

> Parameters为可选参数。如果需要指定Parameters，则Parameters.N.ParameterKey和Parameters.N.ParameterValue必须同时指定。
',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'ParameterKey' => 
                array (
                  'title' => '模板中定义的参数名称。

',
                  'description' => '模板中定义的参数名称。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'instance_type',
                ),
                'ParameterValue' => 
                array (
                  'title' => '用户输入的模板参数值。',
                  'description' => '用户输入的模板参数值。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'ecs.s6-c1m1.small',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 200,
          ),
        ),
        7 => 
        array (
          'name' => 'StackRegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '阿里云资源编排服务（ROS）资源栈所属的地域ID。',
            'description' => '阿里云资源编排服务（ROS）资源栈所属的地域ID。

获取ROS支持的地域列表的方法，请参见[DescribeRegions](~~131035~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        8 => 
        array (
          'name' => 'Tags',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'title' => '用户输入的自定义标签。

N最大值为20。',
            'description' => '用户输入的自定义标签。

N最大值为20。

> - Tags为可选参数。如果需要指定Tags，则Tags.N.Key和Tags.N.Value必须同时指定。
> - 此标签会传递到资源栈中每个支持标签的资源中。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'title' => '用户输入的自定义标签键。

最多支持128个字符，不能以aliyun和acs:开头，不能包含http://或者https://。',
                  'description' => '用户输入的自定义标签键。

最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                  'type' => 'string',
                  'required' => false,
                  'enumValueTitles' => 
                  array (
                  ),
                  'example' => 'k1',
                ),
                'Value' => 
                array (
                  'title' => '用户输入的自定义标签值。

最多支持128个字符，不能以acs:开头，不能包含http://或者https://。',
                  'description' => '用户输入的自定义标签值。

最多支持128个字符，不能以`acs:`开头，不能包含`http://`或者`https://`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'v1',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 20,
          ),
        ),
        9 => 
        array (
          'name' => 'OperationType',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '计划操作类型，取值为All，TerminateProvisionedProduct，UpdateProvisionedProduct，LaunchProduct。',
            'description' => '计划操作类型，取值：
- LaunchProduct（默认）：启动产品。
- UpdateProvisionedProduct：更新实例。
- TerminateProvisionedProduct：终止实例。',
            'type' => 'string',
            'required' => false,
            'example' => 'LaunchProduct',
          ),
        ),
        10 => 
        array (
          'name' => 'Description',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '计划描述',
            'description' => '计划描述。

长度为1~128个字符。',
            'type' => 'string',
            'required' => false,
            'example' => '创建ECS',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
          ),
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '0FEEF92D-4052-5202-87D0-3D8EC16F81BF',
              ),
              'PlanId' => 
              array (
                'title' => '计划ID。',
                'description' => '计划ID。',
                'type' => 'string',
                'example' => 'plan-bp1jvmdk2k****',
              ),
              'ProvisionedProductId' => 
              array (
                'title' => '实例ID。',
                'description' => '实例ID。',
                'type' => 'string',
                'example' => 'pp-bp1ddg1n2a****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'A system error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0FEEF92D-4052-5202-87D0-3D8EC16F81BF\\",\\n  \\"PlanId\\": \\"plan-bp1jvmdk2k****\\",\\n  \\"ProvisionedProductId\\": \\"pp-bp1ddg1n2a****\\"\\n}","type":"json"}]',
      'title' => '创建计划',
    ),
    'GetProvisionedProductPlan' => 
    array (
      'summary' => '查询计划信息。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PlanId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '计划ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'plan-bp1jvmdk2k****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
          ),
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '0FEEF92D-4052-5202-87D0-3D8EC16F81BF',
              ),
              'PlanDetail' => 
              array (
                'title' => '计划详情。

',
                'description' => '计划详情。',
                'type' => 'object',
                'properties' => 
                array (
                  'PlanId' => 
                  array (
                    'title' => '计划ID。',
                    'description' => '计划ID。',
                    'type' => 'string',
                    'example' => 'plan-bp1jvmdk2k****',
                  ),
                  'PlanName' => 
                  array (
                    'title' => '计划名称。

',
                    'description' => '计划名称。',
                    'type' => 'string',
                    'example' => 'DEMO-ECS实例',
                  ),
                  'PlanType' => 
                  array (
                    'title' => '计划类型。

取值为Ros，表示阿里云资源编排服务（ROS）。',
                    'description' => '计划类型。

取值为Ros，表示阿里云资源编排服务（ROS）。',
                    'type' => 'string',
                    'example' => 'Ros',
                  ),
                  'PortfolioId' => 
                  array (
                    'title' => '产品组合ID。

',
                    'description' => '产品组合ID。',
                    'type' => 'string',
                    'example' => 'port-bp1yt7582g****',
                  ),
                  'ProductId' => 
                  array (
                    'title' => '产品ID。

',
                    'description' => '产品ID。',
                    'type' => 'string',
                    'example' => 'prod-bp18r7q127****',
                  ),
                  'ProductVersionId' => 
                  array (
                    'title' => '产品版本ID。

',
                    'description' => '产品版本ID。',
                    'type' => 'string',
                    'example' => 'pv-bp15e79d26****',
                  ),
                  'ProvisionedProductId' => 
                  array (
                    'title' => '实例ID。

',
                    'description' => '实例ID。',
                    'type' => 'string',
                    'example' => 'pp-bp1ddg1n2a****',
                  ),
                  'ProvisionedProductName' => 
                  array (
                    'title' => '实例名称。',
                    'description' => '实例名称。',
                    'type' => 'string',
                    'example' => 'DEMO-ECS实例',
                  ),
                  'Parameters' => 
                  array (
                    'title' => '用户输入的模板参数。

',
                    'description' => '用户输入的模板参数。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ParameterKey' => 
                        array (
                          'title' => '模板中定义的参数名称。

',
                          'description' => '模板中定义的参数名称。',
                          'type' => 'string',
                          'example' => 'instance_type',
                        ),
                        'ParameterValue' => 
                        array (
                          'title' => '用户输入的模板参数值。

',
                          'description' => '用户输入的模板参数值。',
                          'type' => 'string',
                          'example' => 'ecs.s6-c1m1.small',
                        ),
                      ),
                    ),
                  ),
                  'StackId' => 
                  array (
                    'title' => '阿里云资源编排服务（ROS）资源栈ID。

',
                    'description' => '阿里云资源编排服务（ROS）资源栈ID。',
                    'type' => 'string',
                    'example' => '137e31df-3754-40b4-be2f-c793ad84****',
                  ),
                  'StackRegionId' => 
                  array (
                    'title' => '阿里云资源编排服务（ROS）资源栈所属的地域ID。

',
                    'description' => '阿里云资源编排服务（ROS）资源栈所属的地域ID。',
                    'type' => 'string',
                    'example' => 'cn-hangzhou',
                  ),
                  'Status' => 
                  array (
                    'title' => '计划状态。',
                    'description' => '计划状态。取值：
- PreviewInProgress：预检中。
- PreviewSuccess：预检成功。
- PreviewFailed：预检失败。
- ApplicationInProgress：审批中。
- ApplicationApproved：审批通过。
- ApplicationRejected：审批被拒绝。
- ExecuteInProgress：执行中。
- ExecuteSuccess：执行成功。
- ExecuteFailed：执行失败。
- Canceled：已取消。',
                    'type' => 'string',
                    'example' => 'PreviewSuccess',
                  ),
                  'StatusMessage' => 
                  array (
                    'title' => '计划状态信息。',
                    'description' => '计划状态信息。

> 仅在计划状态为PreviewFailed或ExecuteFailed时，返回该参数。',
                    'type' => 'string',
                    'example' => 'Create stack failed: Resource CREATE failed: terraform stack sc-146611588617****-pp-bp1ddg1n2a**** failure...',
                  ),
                  'CreateTime' => 
                  array (
                    'title' => '计划创建时间。

按照ISO8601标准表示，使用UTC时间，格式：YYYY-MM-DDThh:mm:ssZ。',
                    'description' => '计划创建时间。

按照ISO8601标准表示，使用UTC时间，格式：YYYY-MM-DDThh:mm:ssZ。',
                    'type' => 'string',
                    'example' => '2022-05-23T09:46:27Z',
                  ),
                  'UpdateTime' => 
                  array (
                    'title' => '计划最后更新时间。

按照ISO8601标准表示，使用UTC时间，格式：YYYY-MM-DDThh:mm:ssZ。',
                    'description' => '计划最后更新时间。

按照ISO8601标准表示，使用UTC时间，格式：YYYY-MM-DDThh:mm:ssZ。',
                    'type' => 'string',
                    'example' => '2022-05-23T09:47:29Z',
                  ),
                  'Tags' => 
                  array (
                    'title' => '用户自定义标签列表。

',
                    'description' => '用户自定义标签列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Key' => 
                        array (
                          'title' => '用户自定义标签键。

',
                          'description' => '用户自定义标签键。',
                          'type' => 'string',
                          'example' => 'k1',
                        ),
                        'Value' => 
                        array (
                          'title' => '用户自定义标签值。

',
                          'description' => '用户自定义标签值。',
                          'type' => 'string',
                          'example' => 'v1',
                        ),
                      ),
                    ),
                  ),
                  'OperationType' => 
                  array (
                    'title' => '计划操作类型，取值为All，TerminateProvisionedProduct，UpdateProvisionedProduct，LaunchProduct。',
                    'description' => '计划操作类型。取值：

- LaunchProduct：启动产品。
- UpdateProvisionedProduct：更新实例。
- TerminateProvisionedProduct：终止实例。',
                    'type' => 'string',
                    'example' => 'LaunchProduct',
                  ),
                  'Description' => 
                  array (
                    'title' => '计划描述。',
                    'description' => '计划描述。',
                    'type' => 'string',
                    'example' => '创建ECS。',
                  ),
                  'AssignedApprovers' => 
                  array (
                    'title' => '计划审批人列表。',
                    'description' => '计划审批人列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'PrincipalType' => 
                        array (
                          'title' => '计划审批人的RAM实体类型。取值：

RamUser：RAM用户。
RamRole：RAM角色。
',
                          'description' => '计划审批人的RAM实体类型。取值：

- RamUser：RAM用户。
- RamRole：RAM角色。',
                          'type' => 'string',
                          'example' => 'RamUser',
                        ),
                        'PrincipalName' => 
                        array (
                          'title' => '计划归属人的RAM实体名称。
',
                          'description' => '计划审批人的RAM实体名称。',
                          'type' => 'string',
                          'example' => 'approver',
                        ),
                      ),
                    ),
                  ),
                  'OwnerPrincipalType' => 
                  array (
                    'title' => '计划归属人的RAM实体类型。取值：

RamUser：RAM用户。
RamRole：RAM角色。
',
                    'description' => '计划归属人的RAM实体类型。取值：

- RamUser：RAM用户。
- RamRole：RAM角色。',
                    'type' => 'string',
                    'example' => 'RamUser',
                  ),
                  'OwnerPrincipalId' => 
                  array (
                    'title' => '计划归属人的RAM实体ID。

',
                    'description' => '计划归属人的RAM实体ID。

',
                    'type' => 'string',
                    'example' => '27740196382623****',
                  ),
                  'ApprovalDetail' => 
                  array (
                    'title' => '计划审批详情。',
                    'description' => '计划审批详情。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'OperationRecords' => 
                      array (
                        'title' => '用户操作记录。',
                        'description' => '操作记录。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Operator' => 
                            array (
                              'title' => '操作人。',
                              'description' => '已对计划进行操作的RAM实体。',
                              'type' => 'object',
                              'properties' => 
                              array (
                                'PrincipalType' => 
                                array (
                                  'title' => '操作人的RAM实体类型。取值：

RamUser：RAM用户。
RamRole：RAM角色。',
                                  'description' => 'RAM实体类型。取值：

- RamUser：RAM用户。
- RamRole：RAM角色。',
                                  'type' => 'string',
                                  'example' => 'RamUser',
                                ),
                                'PrincipalId' => 
                                array (
                                  'title' => '操作人的RAM实体ID。',
                                  'description' => 'RAM实体ID。',
                                  'type' => 'string',
                                  'example' => '277401963826235***
',
                                ),
                                'PrincipalName' => 
                                array (
                                  'title' => '操作人的RAM实体名称。',
                                  'description' => '操作人的RAM实体名称。',
                                  'type' => 'string',
                                  'example' => 'approver',
                                ),
                              ),
                            ),
                            'Comment' => 
                            array (
                              'title' => '操作人的审批附加意见。',
                              'description' => '操作人的审批附加意见。',
                              'type' => 'string',
                              'example' => '同意。',
                            ),
                            'CreateTime' => 
                            array (
                              'title' => '操作时间。',
                              'description' => '操作时间。',
                              'type' => 'string',
                              'example' => '2022-03-22T05:56:14Z',
                            ),
                            'ApprovalAction' => 
                            array (
                              'title' => '操作人对计划进行的操作类型。取值：

Submit：提交计划。
Cancel：取消计划。
Approve：审批通过。
Reject：审批拒绝。',
                              'description' => '操作人对计划进行的操作类型。取值：

- Submit：提交计划。
- Cancel：取消计划。
- Approve：审批通过。
- Reject：审批拒绝。',
                              'type' => 'string',
                              'example' => 'Approve',
                            ),
                          ),
                        ),
                      ),
                      'TodoTaskActivities' => 
                      array (
                        'title' => '计划正在执行的操作。',
                        'description' => '计划正在执行的操作。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'ActivityName' => 
                            array (
                              'title' => '计划正在执行的活动名。',
                              'description' => '计划正在执行的操作名。',
                              'type' => 'string',
                              'example' => 'ApproverNode-1',
                            ),
                            'Tasks' => 
                            array (
                              'title' => '委派任务列表。',
                              'description' => '委派任务列表。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'Operator' => 
                                  array (
                                    'title' => '操作人。',
                                    'description' => '可对计划进行操作的RAM实体。',
                                    'type' => 'object',
                                    'properties' => 
                                    array (
                                      'PrincipalType' => 
                                      array (
                                        'title' => '操作人的RAM实体类型。取值：

RamUser：RAM用户。
RamRole：RAM角色。',
                                        'description' => 'RAM实体类型。取值：

- RamUser：RAM用户。
- RamRole：RAM角色。',
                                        'type' => 'string',
                                        'example' => 'RamUser',
                                      ),
                                      'PrincipalName' => 
                                      array (
                                        'title' => '操作人的RAM实体名称。',
                                        'description' => 'RAM实体名称。',
                                        'type' => 'string',
                                        'example' => 'approver',
                                      ),
                                    ),
                                  ),
                                ),
                              ),
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  'OwnerPrincipalName' => 
                  array (
                    'title' => '计划归属人的RAM实体名称。',
                    'description' => '计划归属人的RAM实体名称。',
                    'type' => 'string',
                    'example' => 'endUser',
                  ),
                  'Uid' => 
                  array (
                    'title' => '计划归属人的云账号ID。',
                    'description' => '计划归属人的云账号ID。',
                    'type' => 'string',
                    'example' => '146611588617****',
                  ),
                ),
              ),
              'ProductDetail' => 
              array (
                'title' => '计划产品详情。',
                'description' => '计划产品详情。',
                'type' => 'object',
                'properties' => 
                array (
                  'ProductArn' => 
                  array (
                    'title' => '产品ARN。

',
                    'description' => '产品ARN。

',
                    'type' => 'string',
                    'example' => 'acs:servicecatalog:cn-hangzhou:146611588617****:product/prod-bp18r7q127****',
                  ),
                  'Description' => 
                  array (
                    'title' => '产品描述。

',
                    'description' => '产品描述。

',
                    'type' => 'string',
                    'example' => '这是一个产品描述',
                  ),
                  'CreateTime' => 
                  array (
                    'title' => '创建时间。

按照ISO8601标准表示，使用UTC时间，格式：YYYY-MM-DDThh:mm:ssZ。',
                    'description' => '创建时间。

按照ISO8601标准表示，使用UTC时间，格式：YYYY-MM-DDThh:mm:ssZ。',
                    'type' => 'string',
                    'example' => '2022-04-12T06:10:37Z',
                  ),
                  'ProductId' => 
                  array (
                    'title' => '产品ID。

',
                    'description' => '产品ID。

',
                    'type' => 'string',
                    'example' => 'prod-bp18r7q127****',
                  ),
                  'ProductName' => 
                  array (
                    'title' => '产品名称。

',
                    'description' => '产品名称。

',
                    'type' => 'string',
                    'example' => 'DEMO-创建ECS',
                  ),
                  'ProviderName' => 
                  array (
                    'title' => '产品提供者。

',
                    'description' => '产品提供者。

',
                    'type' => 'string',
                    'example' => 'IT团队',
                  ),
                  'ProductType' => 
                  array (
                    'title' => '产品类型。

取值为Ros，表示阿里云资源编排服务（ROS）。',
                    'description' => '产品类型。

取值为Ros，表示阿里云资源编排服务（ROS）。',
                    'type' => 'string',
                    'example' => 'Ros',
                  ),
                ),
              ),
              'ResourceChanges' => 
              array (
                'title' => '计划资源变更列表。',
                'description' => '计划资源变更列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'LogicalResourceId' => 
                    array (
                      'title' => '资源逻辑ID。',
                      'description' => '资源逻辑ID。',
                      'type' => 'string',
                      'example' => 'instance',
                    ),
                    'PhysicalResourceId' => 
                    array (
                      'title' => '资源物理ID。

当Action为Modify或Remove时，返回本参数。',
                      'description' => '资源物理ID。

> 当Action为Modify或Remove时，返回本参数。',
                      'type' => 'string',
                      'example' => 'i-bp13lmam3qd9q6il****',
                    ),
                    'Replacement' => 
                    array (
                      'title' => '模板是否为替换更新。取值：

True：替换更新。
False：修改更新。
Conditional：可能是替换更新，模板运行时才能确定。',
                      'description' => '模板是否为替换更新。取值：

- True：替换更新。
- False：修改更新。
- Conditional：可能是替换更新，模板运行时才能确定。
> 当Action为Modify时，返回本参数。',
                      'type' => 'string',
                      'example' => 'True',
                    ),
                    'ResourceType' => 
                    array (
                      'title' => '资源类型。',
                      'description' => '资源类型。',
                      'type' => 'string',
                      'example' => 'alicloud_instance
',
                    ),
                    'Action' => 
                    array (
                      'title' => '资源行为。取值：

Add：增加资源。
Modify：修改资源。
Remove：删除资源。
None：无变化。',
                      'description' => '资源行为。取值：

- Add：增加资源。
- Modify：修改资源。
- Remove：删除资源。
- None：无变化。',
                      'type' => 'string',
                      'example' => 'Add',
                    ),
                  ),
                ),
              ),
              'ProductVersionDetail' => 
              array (
                'title' => '产品版本详情',
                'description' => '产品版本详情。',
                'type' => 'object',
                'properties' => 
                array (
                  'Active' => 
                  array (
                    'title' => '是否启用',
                    'description' => '是否启用。取值：

- true（默认值）：启用。
- false：禁用。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'Description' => 
                  array (
                    'title' => '产品版本描述',
                    'description' => '产品版本描述。',
                    'type' => 'string',
                    'example' => '这是一个产品版本描述',
                  ),
                  'CreateTime' => 
                  array (
                    'title' => '创建时间',
                    'description' => '产品版本创建时间。

按照ISO8601标准表示，使用UTC时间，格式：YYYY-MM-DDThh:mm:ssZ。',
                    'type' => 'string',
                    'example' => '2022-04-12T06:10:37Z',
                  ),
                  'Guidance' => 
                  array (
                    'title' => '推荐信息',
                    'description' => '推荐信息。取值：

- Default（默认值）：无。
- Recommended：稳定版。
- Latest：最新版。
- Deprecated：将废弃。',
                    'type' => 'string',
                    'example' => 'Default',
                  ),
                  'ProductVersionId' => 
                  array (
                    'title' => '产品版本ID',
                    'description' => '产品版本ID。',
                    'type' => 'string',
                    'example' => 'pv-bp15e79d26****',
                  ),
                  'ProductVersionName' => 
                  array (
                    'title' => '产品版本名称',
                    'description' => '产品版本名称。',
                    'type' => 'string',
                    'example' => '1.0.0',
                  ),
                  'ProductId' => 
                  array (
                    'title' => '产品版本所属的产品ID',
                    'description' => '产品版本所属的产品ID。',
                    'type' => 'string',
                    'example' => 'prod-bp18r7q127****',
                  ),
                  'TemplateUrl' => 
                  array (
                    'title' => '模板的OSS地址',
                    'description' => '模板的URL地址。',
                    'type' => 'string',
                    'example' => 'oss://servicecatalog-cn-hangzhou/146611588617****/terraform/template/tpl-bp1217we23****/template.json',
                  ),
                  'TemplateType' => 
                  array (
                    'title' => '模板类型',
                    'description' => '模板类型。

取值为RosTerraformTemplate，表示阿里云资源编排服务（ROS）支持的Terraform模板。',
                    'type' => 'string',
                    'example' => 'RosTerraformTemplate',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'A system error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0FEEF92D-4052-5202-87D0-3D8EC16F81BF\\",\\n  \\"PlanDetail\\": {\\n    \\"PlanId\\": \\"plan-bp1jvmdk2k****\\",\\n    \\"PlanName\\": \\"DEMO-ECS实例\\",\\n    \\"PlanType\\": \\"Ros\\",\\n    \\"PortfolioId\\": \\"port-bp1yt7582g****\\",\\n    \\"ProductId\\": \\"prod-bp18r7q127****\\",\\n    \\"ProductVersionId\\": \\"pv-bp15e79d26****\\",\\n    \\"ProvisionedProductId\\": \\"pp-bp1ddg1n2a****\\",\\n    \\"ProvisionedProductName\\": \\"DEMO-ECS实例\\",\\n    \\"Parameters\\": [\\n      {\\n        \\"ParameterKey\\": \\"instance_type\\",\\n        \\"ParameterValue\\": \\"ecs.s6-c1m1.small\\"\\n      }\\n    ],\\n    \\"StackId\\": \\"137e31df-3754-40b4-be2f-c793ad84****\\",\\n    \\"StackRegionId\\": \\"cn-hangzhou\\",\\n    \\"Status\\": \\"PreviewSuccess\\",\\n    \\"StatusMessage\\": \\"Create stack failed: Resource CREATE failed: terraform stack sc-146611588617****-pp-bp1ddg1n2a**** failure...\\",\\n    \\"CreateTime\\": \\"2022-05-23T09:46:27Z\\",\\n    \\"UpdateTime\\": \\"2022-05-23T09:47:29Z\\",\\n    \\"Tags\\": [\\n      {\\n        \\"Key\\": \\"k1\\",\\n        \\"Value\\": \\"v1\\"\\n      }\\n    ],\\n    \\"OperationType\\": \\"LaunchProduct\\",\\n    \\"Description\\": \\"创建ECS。\\",\\n    \\"AssignedApprovers\\": [\\n      {\\n        \\"PrincipalType\\": \\"RamUser\\",\\n        \\"PrincipalName\\": \\"approver\\"\\n      }\\n    ],\\n    \\"OwnerPrincipalType\\": \\"RamUser\\",\\n    \\"OwnerPrincipalId\\": \\"27740196382623****\\",\\n    \\"ApprovalDetail\\": {\\n      \\"OperationRecords\\": [\\n        {\\n          \\"Operator\\": {\\n            \\"PrincipalType\\": \\"RamUser\\",\\n            \\"PrincipalId\\": \\"277401963826235***\\\\n\\",\\n            \\"PrincipalName\\": \\"approver\\"\\n          },\\n          \\"Comment\\": \\"同意。\\",\\n          \\"CreateTime\\": \\"2022-03-22T05:56:14Z\\",\\n          \\"ApprovalAction\\": \\"Approve\\"\\n        }\\n      ],\\n      \\"TodoTaskActivities\\": [\\n        {\\n          \\"ActivityName\\": \\"ApproverNode-1\\",\\n          \\"Tasks\\": [\\n            {\\n              \\"Operator\\": {\\n                \\"PrincipalType\\": \\"RamUser\\",\\n                \\"PrincipalName\\": \\"approver\\"\\n              }\\n            }\\n          ]\\n        }\\n      ]\\n    },\\n    \\"OwnerPrincipalName\\": \\"endUser\\",\\n    \\"Uid\\": \\"146611588617****\\"\\n  },\\n  \\"ProductDetail\\": {\\n    \\"ProductArn\\": \\"acs:servicecatalog:cn-hangzhou:146611588617****:product/prod-bp18r7q127****\\",\\n    \\"Description\\": \\"这是一个产品描述\\",\\n    \\"CreateTime\\": \\"2022-04-12T06:10:37Z\\",\\n    \\"ProductId\\": \\"prod-bp18r7q127****\\",\\n    \\"ProductName\\": \\"DEMO-创建ECS\\",\\n    \\"ProviderName\\": \\"IT团队\\",\\n    \\"ProductType\\": \\"Ros\\"\\n  },\\n  \\"ResourceChanges\\": [\\n    {\\n      \\"LogicalResourceId\\": \\"instance\\",\\n      \\"PhysicalResourceId\\": \\"i-bp13lmam3qd9q6il****\\",\\n      \\"Replacement\\": \\"True\\",\\n      \\"ResourceType\\": \\"alicloud_instance\\\\n\\",\\n      \\"Action\\": \\"Add\\"\\n    }\\n  ],\\n  \\"ProductVersionDetail\\": {\\n    \\"Active\\": true,\\n    \\"Description\\": \\"这是一个产品版本描述\\",\\n    \\"CreateTime\\": \\"2022-04-12T06:10:37Z\\",\\n    \\"Guidance\\": \\"Default\\",\\n    \\"ProductVersionId\\": \\"pv-bp15e79d26****\\",\\n    \\"ProductVersionName\\": \\"1.0.0\\",\\n    \\"ProductId\\": \\"prod-bp18r7q127****\\",\\n    \\"TemplateUrl\\": \\"oss://servicecatalog-cn-hangzhou/146611588617****/terraform/template/tpl-bp1217we23****/template.json\\",\\n    \\"TemplateType\\": \\"RosTerraformTemplate\\"\\n  }\\n}","type":"json"}]',
      'title' => '查询计划信息',
    ),
    'ListProvisionedProductPlans' => 
    array (
      'summary' => '查询计划列表。可分用户维度和审批维度进行查询。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Filters',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'title' => '过滤条件。',
            'description' => '过滤条件。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'title' => '过滤条件的名称。取值：

ProvisionedProductPlanName：按计划名称查找，完整匹配（忽略大小写）。
ProvisionedProductPlanApprover：按审批人精确查找，格式为RamUser/RamRole:审批人名称，可多选。
ProvisionedProductPlanApproverName：按审批人名称查找，直接输入审批人的RAM实体名称，可多选。
ProvisionedProductPlanStatus：按计划状态查找，直接输入审批人的RAM实体名称，可多选。
ProvisionedProductPlanOwnerUid：按计划归属云账号ID精确查找。
FullTextSearch：全文检索，按计划名称查找，模糊匹配。',
                  'description' => '过滤条件的名称。取值：

- ProvisionedProductPlanName：按计划名称查找，完整匹配（忽略大小写）。
- ProvisionedProductPlanApprover：按审批人精确查找，格式为`RamUser/RamRole:<审批人名称>`，可多选。
- ProvisionedProductPlanApproverName：按审批人名称查找，直接输入审批人的RAM实体名称，可多选。
- ProvisionedProductPlanStatus：按计划状态查找，直接输入计划状态，可多选。
- ProvisionedProductPlanOwnerUid：按计划归属云账号ID精确查找。
- FullTextSearch：全文检索，按计划名称查找，模糊匹配。',
                  'type' => 'string',
                  'required' => false,
                  'enumValueTitles' => 
                  array (
                  ),
                  'example' => 'FullTextSearch',
                ),
                'Value' => 
                array (
                  'title' => '过滤条件的值。

',
                  'description' => '过滤条件的值。

',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'ECS',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 5,
          ),
        ),
        1 => 
        array (
          'name' => 'SortBy',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '排序字段。

取值为CreateTime，表示实例创建时间。',
            'description' => '排序字段。

取值为CreateTime，表示计划创建时间。',
            'type' => 'string',
            'required' => false,
            'example' => 'CreateTime',
          ),
        ),
        2 => 
        array (
          'name' => 'SortOrder',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '排序方式。取值：

Asc：正序。
Desc：倒序。',
            'description' => '排序方式。取值：

- Asc：正序。
- Desc（默认值）：倒序。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'Asc' => 'Asc',
              'Desc' => 'Desc',
            ),
            'example' => 'Desc',
          ),
        ),
        3 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '页码。

起始值：1。默认值：1。',
            'description' => '页码。

起始值：1。默认值：1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '分页时每页显示的数据行数。

取值范围：1~100。起始值：1。默认值：10。',
            'description' => '分页时每页显示的数据行数。

取值范围：1~100。起始值：1。默认值：10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        5 => 
        array (
          'name' => 'AccessLevelFilter',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '访问过滤器。取值：

User（默认值）：用户。
Account：账号。
ResourceDirectory：资源目录。',
            'description' => '访问过滤器。取值：

- User（默认值）：用户。
- Account：账号。
- ResourceDirectory：资源目录。',
            'type' => 'string',
            'required' => false,
            'example' => 'User',
          ),
        ),
        6 => 
        array (
          'name' => 'ApprovalFilter',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '审批维度访问过滤器。取值：

ReceivedRequests：待审批的。
ApprovalHistory：审批历史。
AccountRequests：账号级别全部审批。
ResourceDirectoryRequests：资源目录级别全部审批。',
            'description' => '审批维度访问过滤器。取值：

- ReceivedRequests：待我审批。
- ApprovalHistory：审批历史。
- AccountRequests：账号级别全部审批。
- ResourceDirectoryRequests：资源目录级别全部审批。',
            'type' => 'string',
            'required' => false,
            'example' => 'ReceivedRequests',
          ),
        ),
        7 => 
        array (
          'name' => 'ProvisionedProductId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '实例ID。',
            'description' => '实例ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'pp-bp1ddg1n2a****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '0FEEF92D-4052-5202-87D0-3D8EC16F****',
              ),
              'PlanDetails' => 
              array (
                'title' => '计划列表。
',
                'description' => '计划列表。
',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'PlanId' => 
                    array (
                      'title' => '计划ID。',
                      'description' => '计划ID。',
                      'type' => 'string',
                      'example' => 'plan-bp18mmdh2u****',
                    ),
                    'PlanName' => 
                    array (
                      'title' => '计划名称。
',
                      'description' => '计划名称。
',
                      'type' => 'string',
                      'example' => 'DEMO-创建ECS-637****',
                    ),
                    'PlanType' => 
                    array (
                      'title' => '计划类型。

取值为Ros，表示阿里云资源编排服务（ROS）。',
                      'description' => '计划类型。

取值为Ros，表示阿里云资源编排服务（ROS）。',
                      'type' => 'string',
                      'example' => 'Ros',
                    ),
                    'PortfolioId' => 
                    array (
                      'title' => '产品组合ID。
',
                      'description' => '产品组合ID。
',
                      'type' => 'string',
                      'example' => 'port-bp1438kf2j****',
                    ),
                    'ProductId' => 
                    array (
                      'title' => '产品ID。
',
                      'description' => '产品ID。
',
                      'type' => 'string',
                      'example' => 'prod-bp1rtrnh2c****',
                    ),
                    'ProductVersionId' => 
                    array (
                      'title' => '产品版本ID。
',
                      'description' => '产品版本ID。
',
                      'type' => 'string',
                      'example' => 'pv-bp19udk22v****',
                    ),
                    'ProvisionedProductId' => 
                    array (
                      'title' => '实例ID。
',
                      'description' => '实例ID。
',
                      'type' => 'string',
                      'example' => 'pp-bp1c35162d****',
                    ),
                    'Parameters' => 
                    array (
                      'title' => '用户输入的模板参数。
',
                      'description' => '用户输入的模板参数。
',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'ParameterKey' => 
                          array (
                            'title' => '模板中定义的参数名称。
',
                            'description' => '模板中定义的参数名称。
',
                            'type' => 'string',
                            'example' => 'role_name',
                          ),
                          'ParameterValue' => 
                          array (
                            'title' => '用户输入的模板参数值。
',
                            'description' => '用户输入的模板参数值。
',
                            'type' => 'string',
                            'example' => 'Test-8',
                          ),
                        ),
                      ),
                    ),
                    'ProvisionedProductName' => 
                    array (
                      'title' => '实例名称。',
                      'description' => '实例名称。',
                      'type' => 'string',
                      'example' => 'rds-MYSQL-875****',
                    ),
                    'StackId' => 
                    array (
                      'title' => '阿里云资源编排服务（ROS）资源栈ID。
',
                      'description' => '阿里云资源编排服务（ROS）资源栈ID。
',
                      'type' => 'string',
                      'example' => '2599090a-309e-4306-b989-17ba66a9****',
                    ),
                    'StackRegionId' => 
                    array (
                      'title' => '阿里云资源编排服务（ROS）资源栈所属的地域ID。
',
                      'description' => '阿里云资源编排服务（ROS）资源栈所属的地域ID。
',
                      'type' => 'string',
                      'example' => 'cn-hangzhou',
                    ),
                    'Status' => 
                    array (
                      'title' => '计划状态。',
                      'description' => '计划状态。取值：
- PreviewInProgress：预检中。
- PreviewSuccess：预检成功。
- PreviewFailed：预检失败。
- ApplicationInProgress：审批中。
- ApplicationApproved：审批通过。
- ApplicationRejected：审批被拒绝。
- ExecuteInProgress：执行中。
- ExecuteSuccess：执行成功。
- ExecuteFailed：执行失败。
- Canceled：已取消。',
                      'type' => 'string',
                      'example' => 'PreviewSuccess',
                    ),
                    'StatusMessage' => 
                    array (
                      'title' => '计划状态信息。',
                      'description' => '计划状态信息。

> 仅在计划状态为PreviewFailed或ExecuteFailed时，返回该参数。',
                      'type' => 'string',
                      'example' => 'Create stack failed: Resource CREATE failed: terraform stack sc-146611588617****-pp-bp1ddg1n2a**** failure...',
                    ),
                    'CreateTime' => 
                    array (
                      'title' => '计划创建时间。

按照ISO8601标准表示，使用UTC时间，格式：YYYY-MM-DDThh:mm:ssZ。',
                      'description' => '计划创建时间。

按照ISO8601标准表示，使用UTC时间，格式：YYYY-MM-DDThh:mm:ssZ。',
                      'type' => 'string',
                      'example' => '2022-09-13T02:01:22Z',
                    ),
                    'UpdateTime' => 
                    array (
                      'title' => '计划最后更新时间。

按照ISO8601标准表示，使用UTC时间，格式：YYYY-MM-DDThh:mm:ssZ。',
                      'description' => '计划最后更新时间。

按照ISO8601标准表示，使用UTC时间，格式：YYYY-MM-DDThh:mm:ssZ。',
                      'type' => 'string',
                      'example' => '2022-07-18T06:02:35.075Z',
                    ),
                    'Tags' => 
                    array (
                      'title' => '用户自定义标签列表。
',
                      'description' => '用户自定义标签列表。
',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Key' => 
                          array (
                            'title' => '用户自定义标签键。
',
                            'description' => '用户自定义标签键。
',
                            'type' => 'string',
                            'example' => 'k1',
                          ),
                          'Value' => 
                          array (
                            'title' => '用户自定义标签值。
',
                            'description' => '用户自定义标签值。
',
                            'type' => 'string',
                            'example' => 'v1',
                          ),
                        ),
                      ),
                    ),
                    'OperationType' => 
                    array (
                      'title' => '计划操作类型，取值为All，TerminateProvisionedProduct，UpdateProvisionedProduct，LaunchProduct。',
                      'description' => '计划操作类型。取值：
- LaunchProduct（默认）：启动产品。
- UpdateProvisionedProduct：更新实例。
- TerminateProvisionedProduct：终止实例。',
                      'type' => 'string',
                      'example' => 'LaunchProduct',
                    ),
                    'AssignedApprovers' => 
                    array (
                      'title' => '计划审批人列表。',
                      'description' => '计划审批人列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'PrincipalType' => 
                          array (
                            'title' => '计划审批人的RAM实体类型。取值：

RamUser：RAM用户。
RamRole：RAM角色。',
                            'description' => '计划审批人的RAM实体类型。取值：

- RamUser：RAM用户。
- RamRole：RAM角色。',
                            'type' => 'string',
                            'example' => 'RamUser',
                          ),
                          'PrincipalName' => 
                          array (
                            'title' => '计划归属人的RAM实体名称。
',
                            'description' => '计划审批人的RAM实体名称。',
                            'type' => 'string',
                            'example' => 'endUser',
                          ),
                        ),
                      ),
                    ),
                    'ProductName' => 
                    array (
                      'title' => '产品名称。
',
                      'description' => '产品名称。
',
                      'type' => 'string',
                      'example' => '创建ECS',
                    ),
                    'Description' => 
                    array (
                      'title' => '计划描述。',
                      'description' => '计划描述。',
                      'type' => 'string',
                      'example' => '开发团队使用',
                    ),
                    'OwnerPrincipalType' => 
                    array (
                      'title' => '计划归属人的RAM实体类型。取值：

RamUser：RAM用户。
RamRole：RAM角色。',
                      'description' => '计划归属人的RAM实体类型。取值：

- RamUser：RAM用户。
- RamRole：RAM角色。',
                      'type' => 'string',
                      'example' => 'RamUser',
                    ),
                    'OwnerPrincipalId' => 
                    array (
                      'title' => '计划归属人的RAM实体ID。
',
                      'description' => '计划归属人的RAM实体ID。
',
                      'type' => 'string',
                      'example' => '24477111603637****
',
                    ),
                    'OwnerPrincipalName' => 
                    array (
                      'title' => '计划归属人的RAM实体名称。',
                      'description' => '计划归属人的RAM实体名称。',
                      'type' => 'string',
                      'example' => 'enduser',
                    ),
                    'Uid' => 
                    array (
                      'title' => '计划归属人的云账号ID。',
                      'description' => '计划归属人的云账号ID。',
                      'type' => 'string',
                      'example' => '146611588617****',
                    ),
                  ),
                ),
              ),
              'TotalCount' => 
              array (
                'title' => '总记录数。',
                'description' => '总记录数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '16',
              ),
              'PageNumber' => 
              array (
                'title' => '页码。

起始值：1。默认值：1。',
                'description' => '页码。

起始值：1。默认值：1。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'title' => '分页时每页显示的数据行数。

取值范围：1~100。起始值：1。默认值：10。',
                'description' => '分页时每页显示的数据行数。

取值范围：1~100。起始值：1。默认值：10。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'A system error occurred.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0FEEF92D-4052-5202-87D0-3D8EC16F****\\",\\n  \\"PlanDetails\\": [\\n    {\\n      \\"PlanId\\": \\"plan-bp18mmdh2u****\\",\\n      \\"PlanName\\": \\"DEMO-创建ECS-637****\\",\\n      \\"PlanType\\": \\"Ros\\",\\n      \\"PortfolioId\\": \\"port-bp1438kf2j****\\",\\n      \\"ProductId\\": \\"prod-bp1rtrnh2c****\\",\\n      \\"ProductVersionId\\": \\"pv-bp19udk22v****\\",\\n      \\"ProvisionedProductId\\": \\"pp-bp1c35162d****\\",\\n      \\"Parameters\\": [\\n        {\\n          \\"ParameterKey\\": \\"role_name\\",\\n          \\"ParameterValue\\": \\"Test-8\\"\\n        }\\n      ],\\n      \\"ProvisionedProductName\\": \\"rds-MYSQL-875****\\",\\n      \\"StackId\\": \\"2599090a-309e-4306-b989-17ba66a9****\\",\\n      \\"StackRegionId\\": \\"cn-hangzhou\\",\\n      \\"Status\\": \\"PreviewSuccess\\",\\n      \\"StatusMessage\\": \\"Create stack failed: Resource CREATE failed: terraform stack sc-146611588617****-pp-bp1ddg1n2a**** failure...\\",\\n      \\"CreateTime\\": \\"2022-09-13T02:01:22Z\\",\\n      \\"UpdateTime\\": \\"2022-07-18T06:02:35.075Z\\",\\n      \\"Tags\\": [\\n        {\\n          \\"Key\\": \\"k1\\",\\n          \\"Value\\": \\"v1\\"\\n        }\\n      ],\\n      \\"OperationType\\": \\"LaunchProduct\\",\\n      \\"AssignedApprovers\\": [\\n        {\\n          \\"PrincipalType\\": \\"RamUser\\",\\n          \\"PrincipalName\\": \\"endUser\\"\\n        }\\n      ],\\n      \\"ProductName\\": \\"创建ECS\\",\\n      \\"Description\\": \\"开发团队使用\\",\\n      \\"OwnerPrincipalType\\": \\"RamUser\\",\\n      \\"OwnerPrincipalId\\": \\"24477111603637****\\\\n\\",\\n      \\"OwnerPrincipalName\\": \\"enduser\\",\\n      \\"Uid\\": \\"146611588617****\\"\\n    }\\n  ],\\n  \\"TotalCount\\": 16,\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 10\\n}","type":"json"}]',
      'title' => '查询计划列表',
    ),
    'CancelProvisionedProductPlan' => 
    array (
      'summary' => '取消计划。',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PlanId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '计划ID',
            'description' => '计划ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'plan-bp1jvmdk2k****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '0FEEF92D-4052-5202-87D0-3D8EC16F81BF',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'A system error occurred.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0FEEF92D-4052-5202-87D0-3D8EC16F81BF\\"\\n}","type":"json"}]',
      'title' => '取消计划',
    ),
    'UpdateProvisionedProductPlan' => 
    array (
      'summary' => '更新计划。',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PlanId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '计划ID。',
            'description' => '计划ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'plan-bp1jvmdk2k****
',
          ),
        ),
        1 => 
        array (
          'name' => 'PortfolioId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '产品组合ID。',
            'description' => '产品组合ID。
> 存在默认启动选项时，无需填写PortfolioId。没有默认启动选项时，必须填写PortfolioId。获取PortfolioId的方法，请参见[ListLaunchOptions](~~ListLaunchOptions~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'port-bp1yt7582g****
',
          ),
        ),
        2 => 
        array (
          'name' => 'ProductId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '产品ID。',
            'description' => '产品ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'prod-bp18r7q127****
',
          ),
        ),
        3 => 
        array (
          'name' => 'ProductVersionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '产品版本ID。',
            'description' => '产品版本ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'pv-bp15e79d26****
',
          ),
        ),
        4 => 
        array (
          'name' => 'Description',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '计划描述。',
            'description' => '计划描述。',
            'type' => 'string',
            'required' => false,
            'example' => '用于创建ECS',
          ),
        ),
        5 => 
        array (
          'name' => 'Parameters',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'title' => '用户输入的模板参数。
',
            'description' => '用户输入的模板参数。

N最大值为200。

> Parameters为可选参数。如果需要指定Parameters，则Parameters.N.ParameterKey和Parameters.N.ParameterValue必须同时指定。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'ParameterKey' => 
                array (
                  'title' => '模板中定义的参数名称。
',
                  'description' => '模板中定义的参数名称。
',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'instance_type',
                ),
                'ParameterValue' => 
                array (
                  'title' => '用户输入的模板参数值。
',
                  'description' => '用户输入的模板参数值。
',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'ecs.s6-c1m1.small
',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 200,
          ),
        ),
        6 => 
        array (
          'name' => 'Tags',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'title' => '用户自定义标签列表。
',
            'description' => '用户输入的自定义标签。

N最大值为20。

> - Tags为可选参数。如果需要指定Tags，则Tags.N.Key和Tags.N.Value必须同时指定。
> - 此标签会传递到资源栈中每个支持标签的资源中。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'title' => '用户自定义标签键。
',
                  'description' => '用户输入的自定义标签键。

最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'k1',
                ),
                'Value' => 
                array (
                  'title' => '用户自定义标签值。
',
                  'description' => '用户输入的自定义标签值。

最多支持128个字符，不能以`acs:`开头，不能包含`http://`或者`https://`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'v1',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 20,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
          ),
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '0FEEF92D-4052-5202-87D0-3D8EC16F****
',
              ),
              'PlanId' => 
              array (
                'title' => '计划ID',
                'description' => '计划ID。',
                'type' => 'string',
                'example' => 'plan-bp1jvmdk2k****
',
              ),
              'ProvisionedProductId' => 
              array (
                'title' => '实例ID',
                'description' => '实例ID。',
                'type' => 'string',
                'example' => 'pp-bp1ddg1n2a****
',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'A system error occurred.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0FEEF92D-4052-5202-87D0-3D8EC16F****\\\\n\\",\\n  \\"PlanId\\": \\"plan-bp1jvmdk2k****\\\\n\\",\\n  \\"ProvisionedProductId\\": \\"pp-bp1ddg1n2a****\\\\n\\"\\n}","type":"json"}]',
      'title' => '更新计划',
    ),
    'ApproveProvisionedProductPlan' => 
    array (
      'summary' => '审批人审批计划。',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PlanId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '计划ID',
            'description' => '计划ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'plan-bp1jvmdk2k****',
          ),
        ),
        1 => 
        array (
          'name' => 'ApprovalAction',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '审批动作，取值Approve表示同意，Reject表示拒绝',
            'description' => '审批动作。取值：


- Approve：同意。
- Reject：拒绝。',
            'type' => 'string',
            'required' => true,
            'example' => 'Approve',
          ),
        ),
        2 => 
        array (
          'name' => 'Comment',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '审批意见',
            'description' => '审批意见。',
            'type' => 'string',
            'required' => false,
            'example' => '审批通过，允许创建资源',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '0FEEF92D-4052-5202-87D0-3D8EC16F81BF',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'A system error occurred.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0FEEF92D-4052-5202-87D0-3D8EC16F81BF\\"\\n}","type":"json"}]',
      'title' => '审批计划',
    ),
    'ListProvisionedProductPlanApprovers' => 
    array (
      'summary' => '查询计划审批人列表。',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AccessLevelFilter',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '访问过滤器',
            'description' => '访问过滤器。取值：

- User（默认值）：用户。
- Account：账号。
- ResourceDirectory：资源目录。

> 必须指定`ApprovalFilter`和`AccessLevelFilter`两个参数中的一个参数，但不能同时指定。',
            'type' => 'string',
            'required' => false,
            'example' => 'User',
          ),
        ),
        1 => 
        array (
          'name' => 'Filters',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'title' => '过滤条件,支持Key值为ProvisionedProductPlanApproverName',
            'description' => '过滤条件。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'title' => '过滤条件的名称',
                  'description' => '过滤条件的名称。取值：

- ProvisionedProductPlanApproverName：按审批人名称模糊匹配',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'ProvisionedProductPlanApproverName',
                ),
                'Value' => 
                array (
                  'title' => '过滤条件的值',
                  'description' => '过滤条件的值。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'approver',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 5,
          ),
        ),
        2 => 
        array (
          'name' => 'ApprovalFilter',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '审批维度访问过滤器',
            'description' => '审批维度访问过滤器。取值：
- AccountRequests：账号级别全部审批。
- ResourceDirectoryRequests：资源目录级别全部审批。
> 必须指定`ApprovalFilter`和`AccessLevelFilter`两个参数中的一个参数，但不能同时指定。',
            'type' => 'string',
            'required' => false,
            'example' => 'AccountRequests',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
          ),
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '0FEEF92D-4052-5202-87D0-3D8EC16F****',
              ),
              'Approvers' => 
              array (
                'title' => '审批人列表',
                'description' => '审批人列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'PrincipalName' => 
                    array (
                      'title' => '审批人名称',
                      'description' => '审批人名称。',
                      'type' => 'string',
                      'example' => 'approver-1',
                    ),
                    'PrincipalType' => 
                    array (
                      'title' => 'RAM实体类型',
                      'description' => '计划审批人的RAM实体类型。取值：

- RamUser：RAM用户。
- RamRole：RAM角色。',
                      'type' => 'string',
                      'example' => 'RamUser',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'A system error occurred.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0FEEF92D-4052-5202-87D0-3D8EC16F****\\",\\n  \\"Approvers\\": [\\n    {\\n      \\"PrincipalName\\": \\"approver-1\\",\\n      \\"PrincipalType\\": \\"RamUser\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询计划审批人列表',
    ),
    'ExecuteProvisionedProductPlan' => 
    array (
      'summary' => '执行计划。',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PlanId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '计划ID',
            'description' => '计划ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'plan-bp1jvmdk2k****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '0FEEF92D-4052-5202-87D0-3D8EC16F81BF',
              ),
              'PlanId' => 
              array (
                'title' => '计划ID',
                'description' => '计划ID。',
                'type' => 'string',
                'example' => 'plan-bp1jvmdk2k****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'A system error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0FEEF92D-4052-5202-87D0-3D8EC16F81BF\\",\\n  \\"PlanId\\": \\"plan-bp1jvmdk2k****\\"\\n}","type":"json"}]',
      'title' => '执行计划',
    ),
    'DeleteProvisionedProductPlan' => 
    array (
      'summary' => '删除计划。',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PlanId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '计划ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'plan-bp1jvmdk2k****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '0FEEF92D-4052-5202-87D0-3D8EC16F81BF',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'A system error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0FEEF92D-4052-5202-87D0-3D8EC16F81BF\\"\\n}","type":"json"}]',
      'title' => '删除计划',
    ),
    'GetProvisionedProduct' => 
    array (
      'summary' => '查询实例信息。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProvisionedProductId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '实例ID',
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'pp-bp1ddg1n2a****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '0FEEF92D-4052-5202-87D0-3D8EC16F81BF',
              ),
              'ProvisionedProductDetail' => 
              array (
                'title' => '实例信息',
                'description' => '实例详情。',
                'type' => 'object',
                'properties' => 
                array (
                  'ProvisionedProductId' => 
                  array (
                    'title' => '实例ID',
                    'description' => '实例ID。',
                    'type' => 'string',
                    'example' => 'pp-bp1ddg1n2a****',
                  ),
                  'ProvisionedProductArn' => 
                  array (
                    'title' => '实例ARN',
                    'description' => '实例ARN。',
                    'type' => 'string',
                    'example' => 'acs:servicecatalog:cn-hangzhou:146611588617****:provisionedproduct/pp-bp1ddg1n2a****',
                  ),
                  'ProvisionedProductName' => 
                  array (
                    'title' => '实例名称',
                    'description' => '实例名称。',
                    'type' => 'string',
                    'example' => 'DEMO-ECS实例',
                  ),
                  'ProductId' => 
                  array (
                    'title' => '产品ID',
                    'description' => '产品ID。',
                    'type' => 'string',
                    'example' => 'prod-bp18r7q127****',
                  ),
                  'ProductName' => 
                  array (
                    'title' => '产品名称',
                    'description' => '产品名称。',
                    'type' => 'string',
                    'example' => 'DEMO-创建ECS',
                  ),
                  'ProductVersionId' => 
                  array (
                    'title' => '产品版本ID',
                    'description' => '产品版本ID。',
                    'type' => 'string',
                    'example' => 'pv-bp15e79d26****',
                  ),
                  'ProductVersionName' => 
                  array (
                    'title' => '产品版本名称',
                    'description' => '产品版本名称。',
                    'type' => 'string',
                    'example' => '1.0',
                  ),
                  'LastTaskId' => 
                  array (
                    'title' => '上一次执行的任务ID',
                    'description' => '上一次执行的任务ID。',
                    'type' => 'string',
                    'example' => 'task-bp1dmg242c****',
                  ),
                  'LastProvisioningTaskId' => 
                  array (
                    'title' => '上一次执行的实例操作任务ID',
                    'description' => '上一次执行的实例操作任务ID。

实例操作包括：

- LaunchProduct：启动产品。
- UpdateProvisionedProduct：更新实例。
- TerminateProvisionedProduct：终止实例。
',
                    'type' => 'string',
                    'example' => 'task-bp1dmg242c****',
                  ),
                  'LastSuccessfulProvisioningTaskId' => 
                  array (
                    'title' => '上一次成功执行的实例操作任务ID',
                    'description' => '上一次成功执行的实例操作任务ID。

实例操作包括：

- LaunchProduct：启动产品。
- UpdateProvisionedProduct：更新实例。
- TerminateProvisionedProduct：终止实例。',
                    'type' => 'string',
                    'example' => 'task-bp1dmg242c****',
                  ),
                  'OwnerPrincipalType' => 
                  array (
                    'title' => '归属人的RAM实体类型',
                    'description' => '实例归属人的RAM实体类型。取值：

- RamUser：RAM用户。
- RamRole：RAM角色。',
                    'type' => 'string',
                    'example' => 'RamUser',
                  ),
                  'OwnerPrincipalId' => 
                  array (
                    'title' => '归属人的RAM实体ID',
                    'description' => '实例归属人的RAM实体ID。',
                    'type' => 'string',
                    'example' => '24477111603637****',
                  ),
                  'Status' => 
                  array (
                    'title' => '实例状态',
                    'description' => '实例状态。取值：

- Available：可用。
- UnderChange：变更中。
- Error：异常。',
                    'type' => 'string',
                    'example' => 'Available',
                  ),
                  'StatusMessage' => 
                  array (
                    'title' => '实例状态说明',
                    'description' => '实例状态信息。

> 仅在实例状态为Error时，返回该参数。',
                    'type' => 'string',
                    'example' => 'Resource CREATE failed: terraform stack sc-146611588617****-pp-bp1ddg1n2a**** failure...',
                  ),
                  'CreateTime' => 
                  array (
                    'title' => '创建时间',
                    'description' => '实例创建时间。

按照ISO8601标准表示，使用UTC时间，格式：YYYY-MM-DDThh:mm:ssZ。',
                    'type' => 'string',
                    'example' => '2022-05-23T09:46:27Z',
                  ),
                  'PortfolioId' => 
                  array (
                    'title' => '产品组合ID',
                    'description' => '产品组合ID。',
                    'type' => 'string',
                    'example' => 'port-bp1yt7582g****',
                  ),
                  'StackId' => 
                  array (
                    'title' => 'ROS资源栈的ID',
                    'description' => '阿里云资源编排服务（ROS）资源栈ID。',
                    'type' => 'string',
                    'example' => '137e31df-3754-40b4-be2f-c793ad84****',
                  ),
                  'StackRegionId' => 
                  array (
                    'title' => 'ROS资源栈所属的地域ID',
                    'description' => '阿里云资源编排服务（ROS）资源栈所属的地域ID。',
                    'type' => 'string',
                    'example' => 'cn-hangzhou',
                  ),
                  'ProvisionedProductType' => 
                  array (
                    'description' => '实例类型。

取值为RosStack，表示阿里云资源编排服务（ROS）的资源栈。',
                    'type' => 'string',
                    'example' => 'RosStack',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'A system error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0FEEF92D-4052-5202-87D0-3D8EC16F81BF\\",\\n  \\"ProvisionedProductDetail\\": {\\n    \\"ProvisionedProductId\\": \\"pp-bp1ddg1n2a****\\",\\n    \\"ProvisionedProductArn\\": \\"acs:servicecatalog:cn-hangzhou:146611588617****:provisionedproduct/pp-bp1ddg1n2a****\\",\\n    \\"ProvisionedProductName\\": \\"DEMO-ECS实例\\",\\n    \\"ProductId\\": \\"prod-bp18r7q127****\\",\\n    \\"ProductName\\": \\"DEMO-创建ECS\\",\\n    \\"ProductVersionId\\": \\"pv-bp15e79d26****\\",\\n    \\"ProductVersionName\\": \\"1.0\\",\\n    \\"LastTaskId\\": \\"task-bp1dmg242c****\\",\\n    \\"LastProvisioningTaskId\\": \\"task-bp1dmg242c****\\",\\n    \\"LastSuccessfulProvisioningTaskId\\": \\"task-bp1dmg242c****\\",\\n    \\"OwnerPrincipalType\\": \\"RamUser\\",\\n    \\"OwnerPrincipalId\\": \\"24477111603637****\\",\\n    \\"Status\\": \\"Available\\",\\n    \\"StatusMessage\\": \\"Resource CREATE failed: terraform stack sc-146611588617****-pp-bp1ddg1n2a**** failure...\\",\\n    \\"CreateTime\\": \\"2022-05-23T09:46:27Z\\",\\n    \\"PortfolioId\\": \\"port-bp1yt7582g****\\",\\n    \\"StackId\\": \\"137e31df-3754-40b4-be2f-c793ad84****\\",\\n    \\"StackRegionId\\": \\"cn-hangzhou\\",\\n    \\"ProvisionedProductType\\": \\"RosStack\\"\\n  }\\n}","type":"json"}]',
      'title' => '查询实例信息',
    ),
    'ListProvisionedProducts' => 
    array (
      'summary' => '查询实例列表。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Filters',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'title' => '过滤条件',
            'description' => '过滤条件。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'title' => '过滤条件的名称',
                  'description' => '过滤条件的名称。取值：

- ProvisionedProductName：按实例名称查找，完整匹配（忽略大小写）。
- FullTextSearch：全文检索，按实例名称查找，模糊匹配。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'ProvisionedProductName',
                ),
                'Value' => 
                array (
                  'title' => '过滤条件的值',
                  'description' => '过滤条件的值。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'DEMO-ECS实例',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 5,
          ),
        ),
        1 => 
        array (
          'name' => 'SortBy',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '排序字段',
            'description' => '排序字段。

取值为CreateTime，表示实例创建时间。',
            'type' => 'string',
            'required' => false,
            'example' => 'CreateTime',
          ),
        ),
        2 => 
        array (
          'name' => 'SortOrder',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '排序方式',
            'description' => '排序方式。取值：

- Asc：正序。
- Desc（默认值）：倒序。',
            'type' => 'string',
            'required' => false,
            'example' => 'Desc',
          ),
        ),
        3 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码。

起始值：1。默认值：1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页时每页显示的数据行数。

取值范围：1~100。起始值：1。默认值：10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        5 => 
        array (
          'name' => 'AccessLevelFilter',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '访问过滤器',
            'description' => '访问过滤器。取值：

- User（默认值）：用户。
- Account：账号。',
            'type' => 'string',
            'required' => false,
            'example' => 'User',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
          ),
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'ProvisionedProductDetails' => 
              array (
                'title' => '实例列表',
                'description' => '实例列表。',
                'type' => 'array',
                'items' => 
                array (
                  'title' => 'PortfolioItemType',
                  'description' => '实例详情。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ProvisionedProductName' => 
                    array (
                      'title' => '实例名称',
                      'description' => '实例名称。',
                      'type' => 'string',
                      'example' => 'DEMO-ECS实例',
                    ),
                    'ProvisionedProductId' => 
                    array (
                      'title' => '实例ID',
                      'description' => '实例ID。',
                      'type' => 'string',
                      'example' => 'pp-bp1ddg1n2a****',
                    ),
                    'ProvisionedProductArn' => 
                    array (
                      'title' => '实例ARN',
                      'description' => '实例ARN。',
                      'type' => 'string',
                      'example' => 'acs:servicecatalog:cn-hangzhou:146611588617****:provisionedproduct/pp-bp1ddg1n2a****',
                    ),
                    'ProductId' => 
                    array (
                      'title' => '产品ID',
                      'description' => '产品ID。',
                      'type' => 'string',
                      'example' => 'prod-bp18r7q127****',
                    ),
                    'ProductName' => 
                    array (
                      'title' => '产品名称',
                      'description' => '产品名称。',
                      'type' => 'string',
                      'example' => 'DEMO-创建ECS',
                    ),
                    'ProductVersionId' => 
                    array (
                      'title' => '产品版本ID',
                      'description' => '产品版本ID。',
                      'type' => 'string',
                      'example' => 'pv-bp15e79d26****',
                    ),
                    'ProductVersionName' => 
                    array (
                      'title' => '产品版本名称',
                      'description' => '产品版本名称。',
                      'type' => 'string',
                      'example' => '1.0',
                    ),
                    'LastTaskId' => 
                    array (
                      'title' => '上一次执行的任务ID',
                      'description' => '上一次执行的任务ID。',
                      'type' => 'string',
                      'example' => 'task-bp1dmg242c****',
                    ),
                    'LastProvisioningTaskId' => 
                    array (
                      'title' => '上一次执行的实例操作任务ID',
                      'description' => '上一次执行的实例操作任务ID。

实例操作包括：

- LaunchProduct：启动产品。
- UpdateProvisionedProduct：更新实例。
- TerminateProvisionedProduct：终止实例。',
                      'type' => 'string',
                      'example' => 'task-bp1dmg242c****',
                    ),
                    'LastSuccessfulProvisioningTaskId' => 
                    array (
                      'title' => '上一次成功执行的实例操作任务ID',
                      'description' => '上一次成功执行的实例操作任务ID。

实例操作包括：

- LaunchProduct：启动产品。
- UpdateProvisionedProduct：更新实例。
- TerminateProvisionedProduct：终止实例。',
                      'type' => 'string',
                      'example' => 'task-bp1dmg242c****',
                    ),
                    'OwnerPrincipalType' => 
                    array (
                      'title' => '归属人的RAM实体类型',
                      'description' => '实例归属人的RAM实体类型。取值：

- RamUser：RAM用户。
- RamRole：RAM角色。',
                      'type' => 'string',
                      'example' => 'RamUser',
                    ),
                    'OwnerPrincipalId' => 
                    array (
                      'title' => '归属人的RAM实体ID',
                      'description' => '实例归属人的RAM实体ID。',
                      'type' => 'string',
                      'example' => '24477111603637****',
                    ),
                    'Status' => 
                    array (
                      'title' => '实例状态',
                      'description' => '实例状态。取值：

- Available：可用。
- UnderChange：变更中。
- Error：异常。',
                      'type' => 'string',
                      'example' => 'Available',
                    ),
                    'StatusMessage' => 
                    array (
                      'title' => '实例状态说明',
                      'description' => '实例状态说明。

> 仅在实例状态为Error时，返回该参数。',
                      'type' => 'string',
                      'example' => 'Resource CREATE failed: terraform stack sc-146611588617****-pp-bp1ddg1n2a**** failure...',
                    ),
                    'CreateTime' => 
                    array (
                      'title' => '创建时间',
                      'description' => '实例创建时间。

按照ISO8601标准表示，使用UTC时间，格式：YYYY-MM-DDThh:mm:ssZ。',
                      'type' => 'string',
                      'example' => '2022-05-23T09:46:27Z',
                    ),
                    'PortfolioId' => 
                    array (
                      'title' => '产品组合ID',
                      'description' => '产品组合ID。',
                      'type' => 'string',
                      'example' => 'port-bp1yt7582g****',
                    ),
                    'StackId' => 
                    array (
                      'title' => 'ROS资源栈的ID',
                      'description' => '阿里云资源编排服务（ROS）资源栈ID。',
                      'type' => 'string',
                      'example' => '137e31df-3754-40b4-be2f-c793ad84****',
                    ),
                    'StackRegionId' => 
                    array (
                      'title' => 'ROS资源栈所属的地域ID',
                      'description' => '阿里云资源编排服务（ROS）资源栈所属的地域ID。',
                      'type' => 'string',
                      'example' => 'cn-hangzhou',
                    ),
                    'ProvisionedProductType' => 
                    array (
                      'description' => '实例类型。

取值为RosStack，表示阿里云资源编排服务（ROS）的资源栈。',
                      'type' => 'string',
                      'example' => 'RosStack',
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '0FEEF92D-4052-5202-87D0-3D8EC16F81BF',
              ),
              'TotalCount' => 
              array (
                'title' => '总记录数',
                'description' => '总数据行数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
              'PageNumber' => 
              array (
                'description' => '页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '分页时每页显示的数据行数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'A system error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"ProvisionedProductDetails\\": [\\n    {\\n      \\"ProvisionedProductName\\": \\"DEMO-ECS实例\\",\\n      \\"ProvisionedProductId\\": \\"pp-bp1ddg1n2a****\\",\\n      \\"ProvisionedProductArn\\": \\"acs:servicecatalog:cn-hangzhou:146611588617****:provisionedproduct/pp-bp1ddg1n2a****\\",\\n      \\"ProductId\\": \\"prod-bp18r7q127****\\",\\n      \\"ProductName\\": \\"DEMO-创建ECS\\",\\n      \\"ProductVersionId\\": \\"pv-bp15e79d26****\\",\\n      \\"ProductVersionName\\": \\"1.0\\",\\n      \\"LastTaskId\\": \\"task-bp1dmg242c****\\",\\n      \\"LastProvisioningTaskId\\": \\"task-bp1dmg242c****\\",\\n      \\"LastSuccessfulProvisioningTaskId\\": \\"task-bp1dmg242c****\\",\\n      \\"OwnerPrincipalType\\": \\"RamUser\\",\\n      \\"OwnerPrincipalId\\": \\"24477111603637****\\",\\n      \\"Status\\": \\"Available\\",\\n      \\"StatusMessage\\": \\"Resource CREATE failed: terraform stack sc-146611588617****-pp-bp1ddg1n2a**** failure...\\",\\n      \\"CreateTime\\": \\"2022-05-23T09:46:27Z\\",\\n      \\"PortfolioId\\": \\"port-bp1yt7582g****\\",\\n      \\"StackId\\": \\"137e31df-3754-40b4-be2f-c793ad84****\\",\\n      \\"StackRegionId\\": \\"cn-hangzhou\\",\\n      \\"ProvisionedProductType\\": \\"RosStack\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"0FEEF92D-4052-5202-87D0-3D8EC16F81BF\\",\\n  \\"TotalCount\\": 2,\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 10\\n}","type":"json"}]',
      'title' => '查询实例列表',
    ),
    'GetTask' => 
    array (
      'summary' => '查询任务信息。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'TaskId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '任务ID',
            'description' => '任务ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'task-bp1dmg242c****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '0FEEF92D-4052-5202-87D0-3D8EC16F81BF',
              ),
              'TaskDetail' => 
              array (
                'title' => '任务信息',
                'description' => '任务详情。',
                'type' => 'object',
                'properties' => 
                array (
                  'TaskId' => 
                  array (
                    'title' => '任务ID',
                    'description' => '任务ID。',
                    'type' => 'string',
                    'example' => 'task-bp1dmg242c****',
                  ),
                  'TaskType' => 
                  array (
                    'title' => '任务类型',
                    'description' => '任务类型。取值：

- LaunchProduct：启动产品。
- UpdateProvisionedProduct：更新实例。
- TerminateProvisionedProduct：终止实例。',
                    'type' => 'string',
                    'example' => 'LaunchProduct',
                  ),
                  'PortfolioId' => 
                  array (
                    'title' => '产品组合ID',
                    'description' => '产品组合ID。',
                    'type' => 'string',
                    'example' => 'port-bp1yt7582g****',
                  ),
                  'ProductId' => 
                  array (
                    'title' => '产品ID',
                    'description' => '产品ID。',
                    'type' => 'string',
                    'example' => 'prod-bp18r7q127****',
                  ),
                  'ProductName' => 
                  array (
                    'title' => '产品名称',
                    'description' => '产品名称。',
                    'type' => 'string',
                    'example' => 'DEMO-创建ECS',
                  ),
                  'ProductVersionId' => 
                  array (
                    'title' => '产品版本ID',
                    'description' => '产品版本ID。',
                    'type' => 'string',
                    'example' => 'pv-bp15e79d26****',
                  ),
                  'ProductVersionName' => 
                  array (
                    'title' => '产品版本名称',
                    'description' => '产品版本名称。',
                    'type' => 'string',
                    'example' => '1.0',
                  ),
                  'ProvisionedProductId' => 
                  array (
                    'title' => '实例ID',
                    'description' => '实例ID。',
                    'type' => 'string',
                    'example' => 'pp-bp1ddg1n2a****',
                  ),
                  'ProvisionedProductName' => 
                  array (
                    'title' => '实例名称',
                    'description' => '实例名称。',
                    'type' => 'string',
                    'example' => 'DEMO-ECS实例',
                  ),
                  'Parameters' => 
                  array (
                    'description' => '用户输入的模板参数。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '用户输入的模板参数。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ParameterKey' => 
                        array (
                          'description' => '模板中定义的参数名称。',
                          'type' => 'string',
                          'example' => 'instance_type',
                        ),
                        'ParameterValue' => 
                        array (
                          'description' => '用户输入的模板参数值。',
                          'type' => 'string',
                          'example' => 'ecs.s6-c1m1.small',
                        ),
                      ),
                    ),
                  ),
                  'Outputs' => 
                  array (
                    'description' => '模板的输出值。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '模板的输出值。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'OutputKey' => 
                        array (
                          'description' => '模板中定义的输出值名称。',
                          'type' => 'string',
                          'example' => 'instance_id',
                        ),
                        'OutputValue' => 
                        array (
                          'description' => '模板中定义的输出值的内容。',
                          'type' => 'string',
                          'example' => 'i-xxxxxx',
                        ),
                        'Description' => 
                        array (
                          'description' => '模板中定义的输出值的描述。',
                          'type' => 'string',
                          'example' => 'The ECS instance ID.',
                        ),
                      ),
                    ),
                  ),
                  'Log' => 
                  array (
                    'description' => '实例相关输出日志。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'TerraformLogs' => 
                      array (
                        'description' => 'Terraform输出日志。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => 'Terraform输出日志。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Command' => 
                            array (
                              'description' => '执行的Terraform命令名称。取值：

- apply
- plan
- destroy
- version

关于命令含义的更多信息，请参见[Command](https://www.terraform.io/cli/commands)。',
                              'type' => 'string',
                              'example' => 'apply',
                            ),
                            'Stream' => 
                            array (
                              'description' => '输出流。取值：

- stdout：标准输出。
- stderr：标准错误输出。',
                              'type' => 'string',
                              'example' => 'stdout',
                            ),
                            'Content' => 
                            array (
                              'description' => '当前命令在当前输出流中输出的内容。',
                              'type' => 'string',
                              'example' => 'Apply complete! Resources: 42 added, 0 changed, 0 destroyed.',
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  'Status' => 
                  array (
                    'title' => '任务状态',
                    'description' => '任务状态。取值：

- Succeeded：成功。
- InProgress：运行中。
- Failed：失败。',
                    'type' => 'string',
                    'example' => 'Succeeded',
                  ),
                  'StatusMessage' => 
                  array (
                    'title' => '任务状态说明',
                    'description' => '任务状态信息。

> 仅在任务状态为Failed时，返回该参数。',
                    'type' => 'string',
                    'example' => 'Resource CREATE failed: terraform stack sc-146611588617****-pp-bp1ddg1n2a**** failure...',
                  ),
                  'CreateTime' => 
                  array (
                    'title' => '创建时间',
                    'description' => '任务创建时间。

按照ISO8601标准表示，使用UTC时间，格式：YYYY-MM-DDThh:mm:ssZ。',
                    'type' => 'string',
                    'example' => '2022-05-23T09:46:27Z',
                  ),
                  'UpdateTime' => 
                  array (
                    'description' => '任务最后更新时间。

按照ISO8601标准表示，使用UTC时间，格式：YYYY-MM-DDThh:mm:ssZ。',
                    'type' => 'string',
                    'example' => '2022-05-23T09:47:29Z',
                  ),
                  'TaskTags' => 
                  array (
                    'description' => '自定义标签。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '自定义标签。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Key' => 
                        array (
                          'description' => '自定义标签键。

最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                          'type' => 'string',
                          'example' => 'k1',
                        ),
                        'Value' => 
                        array (
                          'description' => '自定义标签值。

最多支持128个字符，不能以`acs:`开头，不能包含`http://`或者`https://`。',
                          'type' => 'string',
                          'example' => 'v1',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'A system error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0FEEF92D-4052-5202-87D0-3D8EC16F81BF\\",\\n  \\"TaskDetail\\": {\\n    \\"TaskId\\": \\"task-bp1dmg242c****\\",\\n    \\"TaskType\\": \\"LaunchProduct\\",\\n    \\"PortfolioId\\": \\"port-bp1yt7582g****\\",\\n    \\"ProductId\\": \\"prod-bp18r7q127****\\",\\n    \\"ProductName\\": \\"DEMO-创建ECS\\",\\n    \\"ProductVersionId\\": \\"pv-bp15e79d26****\\",\\n    \\"ProductVersionName\\": \\"1.0\\",\\n    \\"ProvisionedProductId\\": \\"pp-bp1ddg1n2a****\\",\\n    \\"ProvisionedProductName\\": \\"DEMO-ECS实例\\",\\n    \\"Parameters\\": [\\n      {\\n        \\"ParameterKey\\": \\"instance_type\\",\\n        \\"ParameterValue\\": \\"ecs.s6-c1m1.small\\"\\n      }\\n    ],\\n    \\"Outputs\\": [\\n      {\\n        \\"OutputKey\\": \\"instance_id\\",\\n        \\"OutputValue\\": \\"i-xxxxxx\\",\\n        \\"Description\\": \\"The ECS instance ID.\\"\\n      }\\n    ],\\n    \\"Log\\": {\\n      \\"TerraformLogs\\": [\\n        {\\n          \\"Command\\": \\"apply\\",\\n          \\"Stream\\": \\"stdout\\",\\n          \\"Content\\": \\"Apply complete! Resources: 42 added, 0 changed, 0 destroyed.\\"\\n        }\\n      ]\\n    },\\n    \\"Status\\": \\"Succeeded\\",\\n    \\"StatusMessage\\": \\"Resource CREATE failed: terraform stack sc-146611588617****-pp-bp1ddg1n2a**** failure...\\",\\n    \\"CreateTime\\": \\"2022-05-23T09:46:27Z\\",\\n    \\"UpdateTime\\": \\"2022-05-23T09:47:29Z\\",\\n    \\"TaskTags\\": [\\n      {\\n        \\"Key\\": \\"k1\\",\\n        \\"Value\\": \\"v1\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '查询任务信息',
    ),
    'ListTasks' => 
    array (
      'summary' => '查询任务列表。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SortBy',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '排序字段',
            'description' => '排序字段。

取值为CreateTime，表示任务创建时间。',
            'type' => 'string',
            'required' => false,
            'example' => 'CreateTime',
          ),
        ),
        1 => 
        array (
          'name' => 'SortOrder',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '排序方式',
            'description' => '排序方式。取值：

- Asc：正序。
- Desc：倒序。',
            'type' => 'string',
            'required' => false,
            'example' => 'Desc',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码。

起始值：1。默认值：1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页时每页显示的数据行数。

取值范围：1~100。起始值：1。默认值：10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        4 => 
        array (
          'name' => 'ProvisionedProductId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '实例ID',
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'pp-bp1ddg1n2a****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'TaskDetails' => 
              array (
                'title' => '实例列表',
                'description' => '任务列表。',
                'type' => 'array',
                'items' => 
                array (
                  'title' => 'PortfolioItemType',
                  'description' => '任务详情。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'TaskId' => 
                    array (
                      'title' => '实例名称',
                      'description' => '任务ID。',
                      'type' => 'string',
                      'example' => 'task-bp1dmg242c****',
                    ),
                    'TaskType' => 
                    array (
                      'title' => '实例ARN',
                      'description' => '任务类型。取值：

- LaunchProduct：启动产品。
- UpdateProvisionedProduct：更新实例。
- TerminateProvisionedProduct：终止实例。',
                      'type' => 'string',
                      'example' => 'LaunchProduct',
                    ),
                    'PortfolioId' => 
                    array (
                      'title' => '产品组合ID',
                      'description' => '产品组合ID。',
                      'type' => 'string',
                      'example' => 'port-bp1yt7582g****',
                    ),
                    'ProductId' => 
                    array (
                      'title' => '产品ID',
                      'description' => '产品ID。',
                      'type' => 'string',
                      'example' => 'prod-bp18r7q127****',
                    ),
                    'ProductName' => 
                    array (
                      'title' => '产品名称',
                      'description' => '产品名称。',
                      'type' => 'string',
                      'example' => 'DEMO-创建ECS',
                    ),
                    'ProductVersionId' => 
                    array (
                      'title' => '产品版本ID',
                      'description' => '产品版本ID。',
                      'type' => 'string',
                      'example' => 'pv-bp15e79d26****',
                    ),
                    'ProductVersionName' => 
                    array (
                      'title' => '产品版本名称',
                      'description' => '产品版本名称。',
                      'type' => 'string',
                      'example' => '1.0',
                    ),
                    'ProvisionedProductId' => 
                    array (
                      'title' => '实例ID',
                      'description' => '实例ID。',
                      'type' => 'string',
                      'example' => 'pp-bp1ddg1n2a****',
                    ),
                    'ProvisionedProductName' => 
                    array (
                      'title' => '实例名称',
                      'description' => '实例名称。',
                      'type' => 'string',
                      'example' => 'DEMO-ECS实例',
                    ),
                    'Parameters' => 
                    array (
                      'description' => '用户输入的模板参数。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'ParameterKey' => 
                          array (
                            'description' => '模板中定义的参数名称。',
                            'type' => 'string',
                            'example' => 'instance_type',
                          ),
                          'ParameterValue' => 
                          array (
                            'description' => '用户输入的模板参数值。',
                            'type' => 'string',
                            'example' => 'ecs.s6-c1m1.small',
                          ),
                        ),
                      ),
                    ),
                    'Outputs' => 
                    array (
                      'description' => '模板的输出值。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'OutputKey' => 
                          array (
                            'description' => '模板中定义的输出值名称。',
                            'type' => 'string',
                            'example' => 'instance_id',
                          ),
                          'OutputValue' => 
                          array (
                            'description' => '模板中定义的输出值的内容。',
                            'type' => 'string',
                            'example' => 'i-xxxxxx',
                          ),
                          'Description' => 
                          array (
                            'description' => '模板中定义的输出值的描述。',
                            'type' => 'string',
                            'example' => 'The ECS instance ID.',
                          ),
                        ),
                      ),
                    ),
                    'Log' => 
                    array (
                      'description' => '实例相关输出日志。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'TerraformLogs' => 
                        array (
                          'description' => 'Terraform输出日志。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'type' => 'object',
                            'properties' => 
                            array (
                              'Command' => 
                              array (
                                'description' => '执行的Terraform命令名称。取值：

- apply
- plan
- destroy
- version

关于命令含义的更多信息，请参见[Command](https://www.terraform.io/cli/commands)。',
                                'type' => 'string',
                                'example' => 'apply',
                              ),
                              'Stream' => 
                              array (
                                'description' => '输出流。取值：

- stdout：标准输出。
- stderr：标准错误输出。',
                                'type' => 'string',
                                'example' => 'stdout',
                              ),
                              'Content' => 
                              array (
                                'description' => '当前命令在当前输出流中输出的内容。',
                                'type' => 'string',
                                'example' => 'Apply complete! Resources: 42 added, 0 changed, 0 destroyed.',
                              ),
                            ),
                          ),
                        ),
                      ),
                    ),
                    'Status' => 
                    array (
                      'title' => '实例状态',
                      'description' => '任务状态。取值：

- Succeeded：成功。
- InProgress：运行中。
- Failed：失败。',
                      'type' => 'string',
                      'example' => 'Succeeded',
                    ),
                    'StatusMessage' => 
                    array (
                      'title' => '实例状态说明',
                      'description' => '任务状态信息。

> 仅在任务状态为Failed时，返回该参数。',
                      'type' => 'string',
                      'example' => 'Resource CREATE failed: terraform stack sc-146611588617****-pp-bp1ddg1n2a**** failure...',
                    ),
                    'CreateTime' => 
                    array (
                      'title' => '创建时间',
                      'description' => '任务创建时间。

按照ISO8601标准表示，使用UTC时间，格式：YYYY-MM-DDThh:mm:ssZ。',
                      'type' => 'string',
                      'example' => '2022-05-23T09:46:27Z',
                    ),
                    'UpdateTime' => 
                    array (
                      'description' => '任务最后更新时间。

按照ISO8601标准表示，使用UTC时间，格式：YYYY-MM-DDThh:mm:ssZ。',
                      'type' => 'string',
                      'example' => '2022-05-26T03:28:45Z',
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '0FEEF92D-4052-5202-87D0-3D8EC16F81BF',
              ),
              'TotalCount' => 
              array (
                'title' => '总记录数',
                'description' => '总数据行数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
              'PageNumber' => 
              array (
                'description' => '页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '分页时每页显示的数据行数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'A system error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"TaskDetails\\": [\\n    {\\n      \\"TaskId\\": \\"task-bp1dmg242c****\\",\\n      \\"TaskType\\": \\"LaunchProduct\\",\\n      \\"PortfolioId\\": \\"port-bp1yt7582g****\\",\\n      \\"ProductId\\": \\"prod-bp18r7q127****\\",\\n      \\"ProductName\\": \\"DEMO-创建ECS\\",\\n      \\"ProductVersionId\\": \\"pv-bp15e79d26****\\",\\n      \\"ProductVersionName\\": \\"1.0\\",\\n      \\"ProvisionedProductId\\": \\"pp-bp1ddg1n2a****\\",\\n      \\"ProvisionedProductName\\": \\"DEMO-ECS实例\\",\\n      \\"Parameters\\": [\\n        {\\n          \\"ParameterKey\\": \\"instance_type\\",\\n          \\"ParameterValue\\": \\"ecs.s6-c1m1.small\\"\\n        }\\n      ],\\n      \\"Outputs\\": [\\n        {\\n          \\"OutputKey\\": \\"instance_id\\",\\n          \\"OutputValue\\": \\"i-xxxxxx\\",\\n          \\"Description\\": \\"The ECS instance ID.\\"\\n        }\\n      ],\\n      \\"Log\\": {\\n        \\"TerraformLogs\\": [\\n          {\\n            \\"Command\\": \\"apply\\",\\n            \\"Stream\\": \\"stdout\\",\\n            \\"Content\\": \\"Apply complete! Resources: 42 added, 0 changed, 0 destroyed.\\"\\n          }\\n        ]\\n      },\\n      \\"Status\\": \\"Succeeded\\",\\n      \\"StatusMessage\\": \\"Resource CREATE failed: terraform stack sc-146611588617****-pp-bp1ddg1n2a**** failure...\\",\\n      \\"CreateTime\\": \\"2022-05-23T09:46:27Z\\",\\n      \\"UpdateTime\\": \\"2022-05-26T03:28:45Z\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"0FEEF92D-4052-5202-87D0-3D8EC16F81BF\\",\\n  \\"TotalCount\\": 2,\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 10\\n}","type":"json"}]',
      'title' => '查询任务列表',
    ),
    'CopyProduct' => 
    array (
      'summary' => '复制产品。',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SourceProductArn',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '',
            'description' => '源产品ARN。
><notice>被复制产品ARN可来自本账号下的产品，也可来自其他账号通过产品组合共享的产品。></notice>',
            'type' => 'string',
            'required' => true,
            'example' => 'acs:servicecatalog:cn-hangzhou:146611588617****:product/prod-bp18r7q127****
',
          ),
        ),
        1 => 
        array (
          'name' => 'TargetProductName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '目标产品名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'DEMO-ECS',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '0FEEF92D-4052-5202-87D0-3D8EC16F****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'A system error occurred.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0FEEF92D-4052-5202-87D0-3D8EC16F****\\"\\n}","type":"json"}]',
      'title' => '复制产品',
    ),
    'CreateProduct' => 
    array (
      'summary' => '创建产品。',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProductName',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '产品名称',
            'description' => '产品名称。

长度为1~128个字符。',
            'type' => 'string',
            'required' => true,
            'example' => 'DEMO-创建ECS',
            'maxLength' => 100,
            'minLength' => 1,
          ),
        ),
        1 => 
        array (
          'name' => 'ProductType',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '产品类型',
            'description' => '产品类型。

取值为Ros，表示阿里云资源编排服务（ROS）。',
            'type' => 'string',
            'required' => true,
            'example' => 'Ros',
          ),
        ),
        2 => 
        array (
          'name' => 'Description',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '产品描述',
            'description' => '产品描述。

长度为1~128个字符。',
            'type' => 'string',
            'required' => false,
            'example' => '这是一个产品描述',
          ),
        ),
        3 => 
        array (
          'name' => 'ProviderName',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '提供者名称',
            'description' => '产品提供者。

长度为1~128个字符。',
            'type' => 'string',
            'required' => true,
            'example' => 'IT团队',
            'maxLength' => 100,
            'minLength' => 1,
          ),
        ),
        4 => 
        array (
          'name' => 'ProductVersionParameters',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '产品版本相关的参数',
            'description' => '产品版本信息。',
            'type' => 'object',
            'properties' => 
            array (
              'ProductVersionName' => 
              array (
                'title' => '产品版本名称',
                'description' => '产品版本名称。

长度为1~128个字符。',
                'type' => 'string',
                'required' => false,
                'example' => '1.0',
                'maxLength' => 100,
                'minLength' => 1,
              ),
              'TemplateType' => 
              array (
                'title' => '模板类型',
                'description' => '模板类型。

取值为RosTerraformTemplate，表示阿里云资源编排服务（ROS）支持的Terraform模板。',
                'type' => 'string',
                'required' => false,
                'example' => 'RosTerraformTemplate',
              ),
              'TemplateUrl' => 
              array (
                'title' => '模板的URL地址',
                'description' => '模板的URL地址。

获取模板URL地址的方法，请参见[CreateTemplate](~~CreateTemplate~~)。',
                'type' => 'string',
                'required' => false,
                'example' => 'oss://servicecatalog-cn-hangzhou/146611588617****/terraform/template/tpl-bp1217we23****/template.json',
              ),
              'Description' => 
              array (
                'title' => '产品版本描述',
                'description' => '产品版本描述。

长度为1~128个字符。',
                'type' => 'string',
                'required' => false,
                'example' => '这是一个产品版本描述',
              ),
              'Guidance' => 
              array (
                'title' => '推荐信息',
                'description' => '推荐信息。取值：

- Default（默认值）：无。
- Recommended：稳定版。
- Latest：最新版。
- Deprecated：将废弃。',
                'type' => 'string',
                'required' => false,
                'example' => 'Default',
              ),
              'Active' => 
              array (
                'title' => '是否启用',
                'description' => '是否启用。取值：

- true（默认值）：启用。
- false：禁用。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'true',
              ),
            ),
            'required' => false,
          ),
        ),
        5 => 
        array (
          'name' => 'TemplateType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '产品模板类型。取值：

- RosTerraformTemplate：表示阿里云资源编排服务（ROS）支持的Terraform模板。
- RosStandardTemplate：表示阿里云资源编排服务（ROS）标准模板。',
            'type' => 'string',
            'required' => false,
            'example' => 'RosTerraformTemplate',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '0FEEF92D-4052-5202-87D0-3D8EC16F81BF',
              ),
              'ProductId' => 
              array (
                'title' => '产品ID',
                'description' => '产品ID。',
                'type' => 'string',
                'example' => 'prod-bp18r7q127****',
              ),
              'ProductVersionId' => 
              array (
                'description' => '产品版本ID。',
                'type' => 'string',
                'example' => 'pv-bp15e79d26****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'A system error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0FEEF92D-4052-5202-87D0-3D8EC16F81BF\\",\\n  \\"ProductId\\": \\"prod-bp18r7q127****\\",\\n  \\"ProductVersionId\\": \\"pv-bp15e79d26****\\"\\n}","type":"json"}]',
      'title' => '创建产品',
      'description' => '调用该接口前，请先调用[CreateTemplate](~~CreateTemplate~~)创建模板。',
    ),
    'DeleteProduct' => 
    array (
      'summary' => '删除产品。',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProductId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '产品ID',
            'description' => '产品ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'prod-bp18r7q127****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '0FEEF92D-4052-5202-87D0-3D8EC16F81BF',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'A system error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0FEEF92D-4052-5202-87D0-3D8EC16F81BF\\"\\n}","type":"json"}]',
      'title' => '删除产品',
    ),
    'UpdateProduct' => 
    array (
      'summary' => '更新产品。',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProductName',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '产品名称',
            'description' => '产品名称。

长度为1~128个字符。',
            'type' => 'string',
            'required' => true,
            'example' => 'DEMO-创建ECS',
            'maxLength' => 100,
            'minLength' => 1,
          ),
        ),
        1 => 
        array (
          'name' => 'ProductId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '产品ID',
            'description' => '产品ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'prod-bp18r7q127****',
          ),
        ),
        2 => 
        array (
          'name' => 'Description',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '产品描述',
            'description' => '产品描述。

长度为1~128个字符。',
            'type' => 'string',
            'required' => false,
            'example' => '这是一个产品描述',
          ),
        ),
        3 => 
        array (
          'name' => 'ProviderName',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '提供者名称',
            'description' => '产品提供者。

长度为1~128个字符。',
            'type' => 'string',
            'required' => true,
            'example' => 'IT团队',
            'maxLength' => 100,
            'minLength' => 1,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '0FEEF92D-4052-5202-87D0-3D8EC16F81BF',
              ),
              'ProductId' => 
              array (
                'title' => '产品ID',
                'description' => '产品ID。',
                'type' => 'string',
                'example' => 'prod-bp18r7q127****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'A system error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0FEEF92D-4052-5202-87D0-3D8EC16F81BF\\",\\n  \\"ProductId\\": \\"prod-bp18r7q127****\\"\\n}","type":"json"}]',
      'title' => '更新产品',
    ),
    'GetProductAsAdmin' => 
    array (
      'summary' => '管理员调用GetProductAsAdmin接口查询产品信息。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProductId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '产品ID',
            'description' => '产品ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'prod-bp18r7q127****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '0FEEF92D-4052-5202-87D0-3D8EC16F81BF',
              ),
              'ProductDetail' => 
              array (
                'title' => '产品详情',
                'description' => '产品详情。',
                'type' => 'object',
                'properties' => 
                array (
                  'ProductArn' => 
                  array (
                    'title' => '产品ARN',
                    'description' => '产品ARN。',
                    'type' => 'string',
                    'example' => 'acs:servicecatalog:cn-hangzhou:146611588617****:product/prod-bp18r7q127****',
                  ),
                  'Description' => 
                  array (
                    'title' => '产品描述',
                    'description' => '产品描述。',
                    'type' => 'string',
                    'example' => '这是一个产品描述',
                  ),
                  'CreateTime' => 
                  array (
                    'title' => '创建时间',
                    'description' => '创建时间。

按照ISO8601标准表示，使用UTC时间，格式：YYYY-MM-DDThh:mm:ssZ。',
                    'type' => 'string',
                    'example' => '2022-04-12T06:10:37Z',
                  ),
                  'ProductId' => 
                  array (
                    'title' => '产品ID',
                    'description' => '产品ID。',
                    'type' => 'string',
                    'example' => 'prod-bp18r7q127****',
                  ),
                  'ProductName' => 
                  array (
                    'title' => '产品名称',
                    'description' => '产品名称。',
                    'type' => 'string',
                    'example' => 'DEMO-创建ECS',
                  ),
                  'ProviderName' => 
                  array (
                    'title' => '提供者名称',
                    'description' => '产品提供者。',
                    'type' => 'string',
                    'example' => 'IT团队',
                  ),
                  'ProductType' => 
                  array (
                    'title' => '产品类型',
                    'description' => '产品类型。

取值为Ros，表示阿里云资源编排服务（ROS）。',
                    'type' => 'string',
                    'example' => 'Ros',
                  ),
                  'TemplateType' => 
                  array (
                    'title' => '产品模板类型',
                    'description' => '产品模板类型。取值：

- RosTerraformTemplate：表示阿里云资源编排服务（ROS）支持的Terraform模板。
- RosStandardTemplate：表示阿里云资源编排服务（ROS）标准模板。',
                    'type' => 'string',
                    'example' => 'RosTerraformTemplate',
                  ),
                ),
              ),
              'TagOptions' => 
              array (
                'description' => '产品关联的标签选项列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Active' => 
                    array (
                      'description' => '是否启用。取值：

- true（默认值）：启用。
- false：禁用。',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'TagOptionId' => 
                    array (
                      'description' => '标签选项ID。',
                      'type' => 'string',
                      'example' => 'tag-bp1q65xd3j****',
                    ),
                    'Key' => 
                    array (
                      'description' => '标签选项键。',
                      'type' => 'string',
                      'example' => 'k1',
                    ),
                    'Value' => 
                    array (
                      'description' => '标签选项值。',
                      'type' => 'string',
                      'example' => 'v1',
                    ),
                    'Owner' => 
                    array (
                      'description' => '标签选项归属人ID。',
                      'type' => 'string',
                      'example' => '133413081827****
',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'A system error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0FEEF92D-4052-5202-87D0-3D8EC16F81BF\\",\\n  \\"ProductDetail\\": {\\n    \\"ProductArn\\": \\"acs:servicecatalog:cn-hangzhou:146611588617****:product/prod-bp18r7q127****\\",\\n    \\"Description\\": \\"这是一个产品描述\\",\\n    \\"CreateTime\\": \\"2022-04-12T06:10:37Z\\",\\n    \\"ProductId\\": \\"prod-bp18r7q127****\\",\\n    \\"ProductName\\": \\"DEMO-创建ECS\\",\\n    \\"ProviderName\\": \\"IT团队\\",\\n    \\"ProductType\\": \\"Ros\\",\\n    \\"TemplateType\\": \\"RosTerraformTemplate\\"\\n  },\\n  \\"TagOptions\\": [\\n    {\\n      \\"Active\\": true,\\n      \\"TagOptionId\\": \\"tag-bp1q65xd3j****\\",\\n      \\"Key\\": \\"k1\\",\\n      \\"Value\\": \\"v1\\",\\n      \\"Owner\\": \\"133413081827****\\\\n\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '管理员查询产品信息',
    ),
    'ListProductsAsAdmin' => 
    array (
      'summary' => '管理员调用ListProductsAsAdmin接口查询产品列表。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PortfolioId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '产品组合ID',
            'description' => '产品组合ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'port-bp1yt7582g****',
          ),
        ),
        1 => 
        array (
          'name' => 'Filters',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'title' => '过滤条件',
            'description' => '过滤条件。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'title' => '过滤条件的名称',
                  'description' => '过滤条件的名称。取值：

- ProductName：按产品名称查找，完整匹配（忽略大小写）。
- FullTextSearch：全文检索，按产品名称、产品提供者、产品描述查找，模糊匹配。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'ProductName',
                ),
                'Value' => 
                array (
                  'title' => '过滤条件的值',
                  'description' => '过滤条件的值。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'DEMO-创建ECS',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 5,
          ),
        ),
        2 => 
        array (
          'name' => 'SortBy',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '排序字段',
            'description' => '排序字段。

取值为CreateTime，表示产品创建时间。',
            'type' => 'string',
            'required' => false,
            'example' => 'CreateTime',
          ),
        ),
        3 => 
        array (
          'name' => 'SortOrder',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '排序方式',
            'description' => '排序方式。取值：

- Asc：正序。
- Desc：倒序。',
            'type' => 'string',
            'required' => false,
            'example' => 'Desc',
          ),
        ),
        4 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码。

起始值：1。默认值：1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        5 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页时每页显示的数据行数。

取值范围：1~100。起始值：1。默认值：10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        6 => 
        array (
          'name' => 'Scope',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询范围。取值：

- Local（默认值）：在当前账号中创建的产品。
- Imported：从其他账号导入的产品。
- All：所有可以使用的产品。',
            'type' => 'string',
            'required' => false,
            'example' => 'Local',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '0FEEF92D-4052-5202-87D0-3D8EC16F81BF',
              ),
              'ProductDetails' => 
              array (
                'title' => '产品列表',
                'description' => '产品列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '产品详情。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ProductArn' => 
                    array (
                      'title' => '产品ARN',
                      'description' => '产品ARN。',
                      'type' => 'string',
                      'example' => 'acs:servicecatalog:cn-hangzhou:146611588617****:product/prod-bp18r7q127****',
                    ),
                    'Description' => 
                    array (
                      'title' => '产品描述',
                      'description' => '产品描述。',
                      'type' => 'string',
                      'example' => '这是一个产品描述',
                    ),
                    'CreateTime' => 
                    array (
                      'title' => '产品创建时间',
                      'description' => '产品创建时间。

按照ISO8601标准表示，使用UTC时间，格式：YYYY-MM-DDThh:mm:ssZ。',
                      'type' => 'string',
                      'example' => '2022-04-12T06:10:37Z',
                    ),
                    'ProductId' => 
                    array (
                      'title' => '产品ID',
                      'description' => '产品ID。',
                      'type' => 'string',
                      'example' => 'prod-bp18r7q127****',
                    ),
                    'ProductName' => 
                    array (
                      'title' => '产品名字',
                      'description' => '产品名称。',
                      'type' => 'string',
                      'example' => 'DEMO-创建ECS',
                    ),
                    'ProviderName' => 
                    array (
                      'title' => '产品提供方',
                      'description' => '产品提供者。',
                      'type' => 'string',
                      'example' => 'IT团队',
                    ),
                    'ProductType' => 
                    array (
                      'title' => '产品类型',
                      'description' => '产品类型。

取值为Ros，表示阿里云资源编排服务（ROS）。',
                      'type' => 'string',
                      'example' => 'Ros',
                    ),
                    'TemplateType' => 
                    array (
                      'description' => '产品模板类型。取值：

- RosTerraformTemplate：表示阿里云资源编排服务（ROS）支持的Terraform模板。
- RosStandardTemplate：表示阿里云资源编排服务（ROS）标准模板。',
                      'type' => 'string',
                      'example' => 'RosTerraformTemplate',
                    ),
                  ),
                ),
              ),
              'TotalCount' => 
              array (
                'title' => '总记录数',
                'description' => '总数据行数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
              'PageNumber' => 
              array (
                'description' => '页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '分页时每页显示的数据行数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'A system error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0FEEF92D-4052-5202-87D0-3D8EC16F81BF\\",\\n  \\"ProductDetails\\": [\\n    {\\n      \\"ProductArn\\": \\"acs:servicecatalog:cn-hangzhou:146611588617****:product/prod-bp18r7q127****\\",\\n      \\"Description\\": \\"这是一个产品描述\\",\\n      \\"CreateTime\\": \\"2022-04-12T06:10:37Z\\",\\n      \\"ProductId\\": \\"prod-bp18r7q127****\\",\\n      \\"ProductName\\": \\"DEMO-创建ECS\\",\\n      \\"ProviderName\\": \\"IT团队\\",\\n      \\"ProductType\\": \\"Ros\\",\\n      \\"TemplateType\\": \\"RosTerraformTemplate\\"\\n    }\\n  ],\\n  \\"TotalCount\\": 2,\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 10\\n}","type":"json"}]',
      'title' => '管理员查询产品列表',
    ),
    'CreateProductVersion' => 
    array (
      'summary' => '创建产品版本。',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProductVersionName',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '产品版本名称',
            'description' => '产品版本名称。

长度为1~128个字符。',
            'type' => 'string',
            'required' => true,
            'example' => '1.0',
            'maxLength' => 100,
            'minLength' => 1,
          ),
        ),
        1 => 
        array (
          'name' => 'TemplateType',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '模板类型',
            'description' => '产品模板类型。取值：

- RosTerraformTemplate：表示阿里云资源编排服务（ROS）支持的Terraform模板。
- RosStandardTemplate：表示阿里云资源编排服务（ROS）标准模板。',
            'type' => 'string',
            'required' => true,
            'example' => 'RosTerraformTemplate',
          ),
        ),
        2 => 
        array (
          'name' => 'TemplateUrl',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '模板的OSS地址',
            'description' => '模板的URL地址。

获取模板URL地址的方法，请参见[CreateTemplate](~~CreateTemplate~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'oss://servicecatalog-cn-hangzhou/146611588617****/terraform/template/tpl-bp1217we23****/template.json',
          ),
        ),
        3 => 
        array (
          'name' => 'Description',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '产品版本描述',
            'description' => '产品版本描述。

长度为1~128个字符。',
            'type' => 'string',
            'required' => false,
            'example' => '这是一个产品版本描述',
          ),
        ),
        4 => 
        array (
          'name' => 'Guidance',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '推荐信息',
            'description' => '推荐信息。取值：

- Default（默认值）：无。
- Recommended：稳定版。
- Latest：最新版。
- Deprecated：将废弃。',
            'type' => 'string',
            'required' => false,
            'example' => 'Default',
          ),
        ),
        5 => 
        array (
          'name' => 'Active',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '是否启用',
            'description' => '是否启用。取值：

- true（默认值）：启用。
- false：禁用。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        6 => 
        array (
          'name' => 'ProductId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '产品版本所属的产品ID',
            'description' => '产品版本所属的产品ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'prod-bp18r7q127****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '0FEEF92D-4052-5202-87D0-3D8EC16F81BF',
              ),
              'ProductVersionId' => 
              array (
                'title' => '产品版本ID',
                'description' => '产品版本ID。',
                'type' => 'string',
                'example' => 'pv-bp15e79d26****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'A system error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0FEEF92D-4052-5202-87D0-3D8EC16F81BF\\",\\n  \\"ProductVersionId\\": \\"pv-bp15e79d26****\\"\\n}","type":"json"}]',
      'title' => '创建产品版本',
      'description' => '调用该接口前，请先调用[CreateTemplate](~~CreateTemplate~~)创建模板。',
    ),
    'DeleteProductVersion' => 
    array (
      'summary' => '删除产品版本。',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProductVersionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '产品版本ID',
            'description' => '产品版本ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'pv-bp15e79d26****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '0FEEF92D-4052-5202-87D0-3D8EC16F81BF',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'A system error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0FEEF92D-4052-5202-87D0-3D8EC16F81BF\\"\\n}","type":"json"}]',
      'title' => '删除产品版本',
    ),
    'UpdateProductVersion' => 
    array (
      'summary' => '更新产品版本。',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProductVersionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '产品版本ID',
            'description' => '产品版本ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'pv-bp15e79d26****',
          ),
        ),
        1 => 
        array (
          'name' => 'ProductVersionName',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '产品版本名称',
            'description' => '产品版本名称。

长度为1~128个字符。',
            'type' => 'string',
            'required' => true,
            'example' => '1.0',
            'maxLength' => 100,
            'minLength' => 1,
          ),
        ),
        2 => 
        array (
          'name' => 'Description',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '产品版本描述',
            'description' => '产品版本描述。

长度为1~128个字符。',
            'type' => 'string',
            'required' => false,
            'example' => '这是一个产品版本描述',
          ),
        ),
        3 => 
        array (
          'name' => 'Guidance',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '推荐信息',
            'description' => '推荐信息。取值：

- Default（默认值）：无。
- Recommended：稳定版。
- Latest：最新版。
- Deprecated：将废弃。',
            'type' => 'string',
            'required' => false,
            'example' => 'Default',
          ),
        ),
        4 => 
        array (
          'name' => 'Active',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '是否启用',
            'description' => '是否启用。取值：

- true（默认值）：启用。
- false：禁用。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '0FEEF92D-4052-5202-87D0-3D8EC16F81BF',
              ),
              'ProductVersionId' => 
              array (
                'title' => '产品版本ID',
                'description' => '产品版本ID。',
                'type' => 'string',
                'example' => 'pv-bp15e79d26****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'A system error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0FEEF92D-4052-5202-87D0-3D8EC16F81BF\\",\\n  \\"ProductVersionId\\": \\"pv-bp15e79d26****\\"\\n}","type":"json"}]',
      'title' => '更新产品版本',
    ),
    'GetProductVersion' => 
    array (
      'summary' => '查询产品版本信息。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProductVersionId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '产品版本ID',
            'description' => '产品版本ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'pv-bp15e79d26****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'ProductVersionDetail' => 
              array (
                'title' => '产品版本详情',
                'description' => '产品版本详情。',
                'type' => 'object',
                'properties' => 
                array (
                  'Active' => 
                  array (
                    'title' => '是否启用',
                    'description' => '是否启用。取值：

- true（默认值）：启用。
- false：禁用。',
                    'type' => 'boolean',
                    'enumValueTitles' => 
                    array (
                    ),
                    'example' => 'true',
                  ),
                  'Description' => 
                  array (
                    'title' => '产品版本描述',
                    'description' => '产品版本描述。',
                    'type' => 'string',
                    'example' => '这是一个产品版本描述',
                  ),
                  'CreateTime' => 
                  array (
                    'title' => '创建时间',
                    'description' => '产品版本创建时间。

按照ISO8601标准表示，使用UTC时间，格式：YYYY-MM-DDThh:mm:ssZ。',
                    'type' => 'string',
                    'example' => '2022-04-12T06:10:37Z',
                  ),
                  'Guidance' => 
                  array (
                    'title' => '推荐信息',
                    'description' => '推荐信息。取值：

- Default（默认值）：无。
- Recommended：稳定版。
- Latest：最新版。
- Deprecated：将废弃。',
                    'type' => 'string',
                    'example' => 'Default',
                  ),
                  'ProductVersionId' => 
                  array (
                    'title' => '产品版本ID',
                    'description' => '产品版本ID。',
                    'type' => 'string',
                    'example' => 'pv-bp15e79d26****',
                  ),
                  'ProductVersionName' => 
                  array (
                    'title' => '产品版本名称',
                    'description' => '产品版本名称。',
                    'type' => 'string',
                    'example' => '1.0',
                  ),
                  'ProductId' => 
                  array (
                    'title' => '产品版本所属的产品ID',
                    'description' => '产品版本所属的产品ID。',
                    'type' => 'string',
                    'example' => 'prod-bp18r7q127****',
                  ),
                  'TemplateUrl' => 
                  array (
                    'title' => '模板的OSS地址',
                    'description' => '模板的URL地址。',
                    'type' => 'string',
                    'example' => 'oss://servicecatalog-cn-hangzhou/146611588617****/terraform/template/tpl-bp1217we23****/template.json',
                  ),
                  'TemplateType' => 
                  array (
                    'title' => '模板类型',
                    'description' => '产品模板类型。取值：

- RosTerraformTemplate：表示阿里云资源编排服务（ROS）支持的Terraform模板。
- RosStandardTemplate：表示阿里云资源编排服务（ROS）标准模板。',
                    'type' => 'string',
                    'example' => 'RosTerraformTemplate',
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '0FEEF92D-4052-5202-87D0-3D8EC16F81BF',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'A system error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"ProductVersionDetail\\": {\\n    \\"Active\\": true,\\n    \\"Description\\": \\"这是一个产品版本描述\\",\\n    \\"CreateTime\\": \\"2022-04-12T06:10:37Z\\",\\n    \\"Guidance\\": \\"Default\\",\\n    \\"ProductVersionId\\": \\"pv-bp15e79d26****\\",\\n    \\"ProductVersionName\\": \\"1.0\\",\\n    \\"ProductId\\": \\"prod-bp18r7q127****\\",\\n    \\"TemplateUrl\\": \\"oss://servicecatalog-cn-hangzhou/146611588617****/terraform/template/tpl-bp1217we23****/template.json\\",\\n    \\"TemplateType\\": \\"RosTerraformTemplate\\"\\n  },\\n  \\"RequestId\\": \\"0FEEF92D-4052-5202-87D0-3D8EC16F81BF\\"\\n}","type":"json"}]',
      'title' => '查询产品版本信息',
    ),
    'ListProductVersions' => 
    array (
      'summary' => '查询产品版本列表。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProductId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '产品版本所属的产品ID',
            'description' => '产品版本所属的产品ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'prod-bp18r7q127****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '0FEEF92D-4052-5202-87D0-3D8EC16F81BF',
              ),
              'ProductVersionDetails' => 
              array (
                'title' => '产品版本列表',
                'description' => '产品版本列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '产品版本详情。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Active' => 
                    array (
                      'title' => '是否启用',
                      'description' => '是否启用。取值：

- true（默认值）：启用。
- false：禁用。',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'Description' => 
                    array (
                      'title' => '产品版本描述',
                      'description' => '产品版本描述。',
                      'type' => 'string',
                      'example' => '这是一个产品版本描述。',
                    ),
                    'CreateTime' => 
                    array (
                      'title' => '创建时间',
                      'description' => '产品版本创建时间。

按照ISO8601标准表示，使用UTC时间，格式：YYYY-MM-DDThh:mm:ssZ。',
                      'type' => 'string',
                      'example' => '2022-04-12T06:10:37Z',
                    ),
                    'Guidance' => 
                    array (
                      'title' => '推荐信息',
                      'description' => '推荐信息。取值：

- Default（默认值）：无。
- Recommended：稳定版。
- Latest：最新版。
- Deprecated：将废弃。',
                      'type' => 'string',
                      'example' => 'Default',
                    ),
                    'ProductVersionId' => 
                    array (
                      'title' => '产品版本ID',
                      'description' => '产品版本ID。',
                      'type' => 'string',
                      'example' => 'pv-bp15e79d26****',
                    ),
                    'ProductVersionName' => 
                    array (
                      'title' => '产品版本名称',
                      'description' => '产品版本名称。',
                      'type' => 'string',
                      'example' => '1.0',
                    ),
                    'TemplateUrl' => 
                    array (
                      'title' => '模板的OSS地址',
                      'description' => '模板的URL地址。',
                      'type' => 'string',
                      'example' => 'oss://servicecatalog-cn-hangzhou/146611588617****/terraform/template/tpl-bp1217we23****/template.json',
                    ),
                    'TemplateType' => 
                    array (
                      'title' => '模板类型',
                      'description' => '产品模板类型。取值：

- RosTerraformTemplate：表示阿里云资源编排服务（ROS）支持的Terraform模板。
- RosStandardTemplate：表示阿里云资源编排服务（ROS）标准模板。',
                      'type' => 'string',
                      'example' => 'RosTerraformTemplate',
                    ),
                    'ProductId' => 
                    array (
                      'description' => '产品版本所属的产品ID。',
                      'type' => 'string',
                      'example' => 'prod-bp18r7q127****',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'A system error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0FEEF92D-4052-5202-87D0-3D8EC16F81BF\\",\\n  \\"ProductVersionDetails\\": [\\n    {\\n      \\"Active\\": true,\\n      \\"Description\\": \\"这是一个产品版本描述。\\",\\n      \\"CreateTime\\": \\"2022-04-12T06:10:37Z\\",\\n      \\"Guidance\\": \\"Default\\",\\n      \\"ProductVersionId\\": \\"pv-bp15e79d26****\\",\\n      \\"ProductVersionName\\": \\"1.0\\",\\n      \\"TemplateUrl\\": \\"oss://servicecatalog-cn-hangzhou/146611588617****/terraform/template/tpl-bp1217we23****/template.json\\",\\n      \\"TemplateType\\": \\"RosTerraformTemplate\\",\\n      \\"ProductId\\": \\"prod-bp18r7q127****\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询产品版本列表',
    ),
    'CreateTemplate' => 
    array (
      'summary' => '创建模板。服务目录会保存用户上传的模板，并返回模板的URL地址。',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'TemplateBody',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '模板内容',
            'description' => '模板内容。

关于模板语法的详情，请参见[Terraform类型模板结构](~~184397~~)。',
            'type' => 'string',
            'required' => true,
            'example' => '{
  "ROSTemplateFormatVersion": "2015-09-01",
  "Transform": "Aliyun::Terraform-v1.1",
  "Workspace": {
    "main.tf": "variable  \\"name\\" {  default = \\"auto_provisioning_group\\"}"
  },
  "Outputs": {}
}',
          ),
        ),
        1 => 
        array (
          'name' => 'TemplateType',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '模板类型',
            'description' => '产品模板类型。取值：

- RosTerraformTemplate：表示阿里云资源编排服务（ROS）支持的Terraform模板。
- RosStandardTemplate：表示阿里云资源编排服务（ROS）标准模板。',
            'type' => 'string',
            'required' => true,
            'example' => 'RosTerraformTemplate',
          ),
        ),
        2 => 
        array (
          'name' => 'TerraformVariables',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => 'Terraform模板变量设置，以结构化的方式表示，服务目录会将变量设置应用到模板中。

> 变量必须在Terraform模板中存在。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'VariableName' => 
                array (
                  'description' => '变量名称。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'instance_type',
                ),
                'Description' => 
                array (
                  'description' => '变量描述。

关于变量描述的格式，请参见[Terraform代码开发方式和建议](~~322216~~)。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '{
  "Label": { "zh-cn": "实例规格", "en": "Instance Type" },
  "AllowedValues": [
    "ecs.s6-c1m1.small",
    "ecs.s6-c1m2.large",
    "ecs.s6-c1m2.xlarge"
  ]
}
',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 20,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '0FEEF92D-4052-5202-87D0-3D8EC16F81BF',
              ),
              'TemplateUrl' => 
              array (
                'title' => '模板的OSS地址',
                'description' => '模板的URL地址。',
                'type' => 'string',
                'example' => 'oss://servicecatalog-cn-hangzhou/146611588617****/terraform/template/tpl-bp1217we23****/template.json',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'A system error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0FEEF92D-4052-5202-87D0-3D8EC16F81BF\\",\\n  \\"TemplateUrl\\": \\"oss://servicecatalog-cn-hangzhou/146611588617****/terraform/template/tpl-bp1217we23****/template.json\\"\\n}","type":"json"}]',
      'title' => '创建模板',
    ),
    'GetTemplate' => 
    array (
      'summary' => '查询模板详情。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProductId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '产品ID',
            'description' => '产品ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'prod-bp18r7q127****',
          ),
        ),
        1 => 
        array (
          'name' => 'ProductVersionId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '产品版本ID',
            'description' => '产品版本ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'pv-bp15e79d26****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '0FEEF92D-4052-5202-87D0-3D8EC16F81BF',
              ),
              'TemplateBody' => 
              array (
                'title' => '模板内容',
                'description' => '模板内容。

关于模板语法的详情，请参见[Terraform类型模板结构](~~184397~~)。',
                'type' => 'string',
                'example' => '{
  "ROSTemplateFormatVersion": "2015-09-01",
  "Transform": "Aliyun::Terraform-v1.1",
  "Workspace": {
    "main.tf": "variable  \\"name\\" {  default = \\"auto_provisioning_group\\"}"
  },
  "Outputs": {}
}',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'A system error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0FEEF92D-4052-5202-87D0-3D8EC16F81BF\\",\\n  \\"TemplateBody\\": \\"{\\\\n  \\\\\\"ROSTemplateFormatVersion\\\\\\": \\\\\\"2015-09-01\\\\\\",\\\\n  \\\\\\"Transform\\\\\\": \\\\\\"Aliyun::Terraform-v1.1\\\\\\",\\\\n  \\\\\\"Workspace\\\\\\": {\\\\n    \\\\\\"main.tf\\\\\\": \\\\\\"variable  \\\\\\\\\\\\\\"name\\\\\\\\\\\\\\" {  default = \\\\\\\\\\\\\\"auto_provisioning_group\\\\\\\\\\\\\\"}\\\\\\"\\\\n  },\\\\n  \\\\\\"Outputs\\\\\\": {}\\\\n}\\"\\n}","type":"json"}]',
      'title' => '查询模板详情',
    ),
    'CreatePortfolio' => 
    array (
      'summary' => '创建产品组合。',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PortfolioName',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '产品组合名称',
            'description' => '产品组合名称。

长度为1~128个字符。',
            'type' => 'string',
            'required' => true,
            'docRequired' => false,
            'example' => 'DEMO-IT服务',
            'maxLength' => 100,
            'minLength' => 1,
          ),
        ),
        1 => 
        array (
          'name' => 'Description',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '产品组合描述',
            'description' => '产品组合描述。

长度为1~128个字符。',
            'type' => 'string',
            'required' => false,
            'example' => '这是一个产品组合描述',
          ),
        ),
        2 => 
        array (
          'name' => 'ProviderName',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '提供者名称',
            'description' => '产品组合提供者。

长度为1~128个字符。',
            'type' => 'string',
            'required' => true,
            'example' => 'IT团队',
            'maxLength' => 100,
            'minLength' => 1,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '0FEEF92D-4052-5202-87D0-3D8EC16F81BF',
              ),
              'PortfolioId' => 
              array (
                'title' => '产品组合ID',
                'description' => '产品组合ID。',
                'type' => 'string',
                'example' => 'port-bp1yt7582g****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'A system error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0FEEF92D-4052-5202-87D0-3D8EC16F81BF\\",\\n  \\"PortfolioId\\": \\"port-bp1yt7582g****\\"\\n}","type":"json"}]',
      'title' => '创建产品组合',
    ),
    'AssociateProductWithPortfolio' => 
    array (
      'summary' => '将产品加入产品组合。',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProductId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '产品ID',
            'description' => '产品ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'prod-bp18r7q127****',
          ),
        ),
        1 => 
        array (
          'name' => 'PortfolioId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '产品组合ID',
            'description' => '产品组合ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'port-bp1yt7582g****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '0FEEF92D-4052-5202-87D0-3D8EC16F81BF',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'A system error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0FEEF92D-4052-5202-87D0-3D8EC16F81BF\\"\\n}","type":"json"}]',
      'title' => '将产品加入产品组合',
    ),
    'DeletePortfolio' => 
    array (
      'summary' => '删除产品组合。',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PortfolioId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '产品组合ID',
            'description' => '产品组合ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'port-bp1yt7582g****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '0FEEF92D-4052-5202-87D0-3D8EC16F81BF',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'A system error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0FEEF92D-4052-5202-87D0-3D8EC16F81BF\\"\\n}","type":"json"}]',
      'title' => '删除产品组合',
    ),
    'DisassociateProductFromPortfolio' => 
    array (
      'summary' => '从产品组合中移除产品。',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProductId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '产品ID',
            'description' => '产品ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'prod-bp18r7q127****',
          ),
        ),
        1 => 
        array (
          'name' => 'PortfolioId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '产品组合ID',
            'description' => '产品组合ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'port-bp1yt7582g****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '0FEEF92D-4052-5202-87D0-3D8EC16F81BF',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'A system error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0FEEF92D-4052-5202-87D0-3D8EC16F81BF\\"\\n}","type":"json"}]',
      'title' => '从产品组合中移除产品',
    ),
    'UpdatePortfolio' => 
    array (
      'summary' => '更新产品组合。',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PortfolioId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '产品组合ID',
            'description' => '产品组合ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'port-bp1yt7582g****',
          ),
        ),
        1 => 
        array (
          'name' => 'PortfolioName',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '产品组合名称',
            'description' => '产品组合名称。

长度为1~128个字符。',
            'type' => 'string',
            'required' => true,
            'example' => 'DEMO-IT服务',
            'maxLength' => 100,
            'minLength' => 1,
          ),
        ),
        2 => 
        array (
          'name' => 'Description',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '产品组合描述',
            'description' => '产品组合描述。

长度为1~128个字符。',
            'type' => 'string',
            'required' => false,
            'example' => '这是一个产品组合描述',
          ),
        ),
        3 => 
        array (
          'name' => 'ProviderName',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '提供者名称',
            'description' => '产品组合提供者。

长度为1~128个字符。',
            'type' => 'string',
            'required' => true,
            'example' => 'IT团队',
            'maxLength' => 100,
            'minLength' => 1,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '0FEEF92D-4052-5202-87D0-3D8EC16F81BF',
              ),
              'PortfolioId' => 
              array (
                'title' => '产品组合ID',
                'description' => '产品组合ID。',
                'type' => 'string',
                'example' => 'port-bp1yt7582g****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'A system error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0FEEF92D-4052-5202-87D0-3D8EC16F81BF\\",\\n  \\"PortfolioId\\": \\"port-bp1yt7582g****\\"\\n}","type":"json"}]',
      'title' => '更新产品组合',
    ),
    'GetPortfolio' => 
    array (
      'summary' => '查询产品组合信息。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PortfolioId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '产品组合ID',
            'description' => '产品组合ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'port-bp1yt7582g****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
          ),
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '0FEEF92D-4052-5202-87D0-3D8EC16F81BF',
              ),
              'PortfolioDetail' => 
              array (
                'title' => '产品组合详情',
                'description' => '产品组合详情。',
                'type' => 'object',
                'properties' => 
                array (
                  'PortfolioArn' => 
                  array (
                    'title' => '产品组合ARN',
                    'description' => '产品组合ARN。',
                    'type' => 'string',
                    'example' => 'acs:servicecatalog:cn-hangzhou:146611588617****:portfolio/port-bp1yt7582g****',
                  ),
                  'PortfolioId' => 
                  array (
                    'title' => '产品组合ID',
                    'description' => '产品组合ID。',
                    'type' => 'string',
                    'example' => 'port-bp1yt7582g****',
                  ),
                  'Description' => 
                  array (
                    'title' => '产品组合描述',
                    'description' => '产品组合描述。',
                    'type' => 'string',
                    'example' => '这是一个产品组合描述',
                  ),
                  'CreateTime' => 
                  array (
                    'title' => '产品组合创建时间',
                    'description' => '产品组合创建时间。

按照ISO8601标准表示，使用UTC时间，格式：YYYY-MM-DDThh:mm:ssZ。',
                    'type' => 'string',
                    'example' => '2022-04-12T06:11:12Z',
                  ),
                  'PortfolioName' => 
                  array (
                    'title' => '产品组合名称',
                    'description' => '产品组合名称。',
                    'type' => 'string',
                    'example' => 'DEMO-IT服务',
                  ),
                  'ProviderName' => 
                  array (
                    'title' => '提供者名称',
                    'description' => '产品组合提供者。',
                    'type' => 'string',
                    'example' => 'IT团队',
                  ),
                ),
              ),
              'TagOptions' => 
              array (
                'description' => '产品组合关联的标签选项列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Active' => 
                    array (
                      'description' => '是否启用。取值：

- true（默认值）：启用。
- false：禁用。',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'TagOptionId' => 
                    array (
                      'description' => '标签选项ID。',
                      'type' => 'string',
                      'example' => 'tag-bp1q65xd3j****',
                    ),
                    'Key' => 
                    array (
                      'description' => '标签选项键。',
                      'type' => 'string',
                      'example' => 'k1',
                    ),
                    'Value' => 
                    array (
                      'description' => '标签选项值。',
                      'type' => 'string',
                      'example' => 'v1',
                    ),
                    'Owner' => 
                    array (
                      'description' => '标签选项归属人ID。',
                      'type' => 'string',
                      'example' => '133413081827****
',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'A system error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0FEEF92D-4052-5202-87D0-3D8EC16F81BF\\",\\n  \\"PortfolioDetail\\": {\\n    \\"PortfolioArn\\": \\"acs:servicecatalog:cn-hangzhou:146611588617****:portfolio/port-bp1yt7582g****\\",\\n    \\"PortfolioId\\": \\"port-bp1yt7582g****\\",\\n    \\"Description\\": \\"这是一个产品组合描述\\",\\n    \\"CreateTime\\": \\"2022-04-12T06:11:12Z\\",\\n    \\"PortfolioName\\": \\"DEMO-IT服务\\",\\n    \\"ProviderName\\": \\"IT团队\\"\\n  },\\n  \\"TagOptions\\": [\\n    {\\n      \\"Active\\": true,\\n      \\"TagOptionId\\": \\"tag-bp1q65xd3j****\\",\\n      \\"Key\\": \\"k1\\",\\n      \\"Value\\": \\"v1\\",\\n      \\"Owner\\": \\"133413081827****\\\\n\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询产品组合信息',
    ),
    'ListPortfolios' => 
    array (
      'summary' => '查询产品组合列表。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProductId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '产品ID',
            'description' => '产品ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'prod-bp18r7q127****',
          ),
        ),
        1 => 
        array (
          'name' => 'Filters',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'title' => '过滤条件',
            'description' => '过滤条件。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'title' => '过滤条件的名称',
                  'description' => '过滤条件的名称。取值：

- PortfolioName：按产品组合名称查找，完整匹配（忽略大小写）。
- FullTextSearch：全文检索，按产品组合名称、产品组合提供者、产品组合描述查找，模糊匹配。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'PortfolioName',
                ),
                'Value' => 
                array (
                  'title' => '过滤条件的值',
                  'description' => '过滤条件的值。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'DEMO-IT服务',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 5,
          ),
        ),
        2 => 
        array (
          'name' => 'SortBy',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '排序字段',
            'description' => '排序字段。

取值为CreateTime，表示产品组合创建时间。',
            'type' => 'string',
            'required' => false,
            'example' => 'CreateTime',
          ),
        ),
        3 => 
        array (
          'name' => 'SortOrder',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '排序方式',
            'description' => '排序方式。取值：

- Asc：正序。
- Desc：倒序。',
            'type' => 'string',
            'required' => false,
            'example' => 'Desc',
          ),
        ),
        4 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码。

起始值：1。默认值：1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        5 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页时每页显示的数据行数。

取值范围：1~100。起始值：1。默认值：10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        6 => 
        array (
          'name' => 'Scope',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询范围。取值：

- Local（默认值）：在当前账号中创建的产品组合。
- Import：从其他账号导入的产品组合。
- All：所有可以使用的产品组合。',
            'type' => 'string',
            'required' => false,
            'example' => 'Local',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'PortfolioDetails' => 
              array (
                'title' => '产品组合列表',
                'description' => '产品组合列表。',
                'type' => 'array',
                'items' => 
                array (
                  'title' => 'PortfolioItemType',
                  'description' => '产品组合详情。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Description' => 
                    array (
                      'title' => '产品组合描述',
                      'description' => '产品组合描述。',
                      'type' => 'string',
                      'example' => '这是一个产品组合描述',
                    ),
                    'PortfolioName' => 
                    array (
                      'title' => '产品组合名称',
                      'description' => '产品组合名称。',
                      'type' => 'string',
                      'example' => 'DEMO-IT服务',
                    ),
                    'CreateTime' => 
                    array (
                      'title' => '创建时间',
                      'description' => '产品组合创建时间。

按照ISO8601标准表示，使用UTC时间，格式：YYYY-MM-DDThh:mm:ssZ。',
                      'type' => 'string',
                      'example' => '2022-04-12T06:11:12Z',
                    ),
                    'ProviderName' => 
                    array (
                      'title' => '提供者名称',
                      'description' => '产品组合提供者。',
                      'type' => 'string',
                      'example' => 'IT团队',
                    ),
                    'PortfolioId' => 
                    array (
                      'title' => '产品组合ID',
                      'description' => '产品组合ID。',
                      'type' => 'string',
                      'example' => 'port-bp1yt7582g****',
                    ),
                    'PortfolioArn' => 
                    array (
                      'title' => '产品组合ARN',
                      'description' => '产品组合ARN。',
                      'type' => 'string',
                      'example' => 'acs:servicecatalog:cn-hangzhou:146611588617****:portfolio/port-bp1yt7582g****',
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '0FEEF92D-4052-5202-87D0-3D8EC16F81BF',
              ),
              'TotalCount' => 
              array (
                'title' => '总记录数',
                'description' => '总数据行数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
              'PageNumber' => 
              array (
                'description' => '页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '分页时每页显示的数据行数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'A system error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"PortfolioDetails\\": [\\n    {\\n      \\"Description\\": \\"这是一个产品组合描述\\",\\n      \\"PortfolioName\\": \\"DEMO-IT服务\\",\\n      \\"CreateTime\\": \\"2022-04-12T06:11:12Z\\",\\n      \\"ProviderName\\": \\"IT团队\\",\\n      \\"PortfolioId\\": \\"port-bp1yt7582g****\\",\\n      \\"PortfolioArn\\": \\"acs:servicecatalog:cn-hangzhou:146611588617****:portfolio/port-bp1yt7582g****\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"0FEEF92D-4052-5202-87D0-3D8EC16F81BF\\",\\n  \\"TotalCount\\": 2,\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 10\\n}","type":"json"}]',
      'title' => '查询产品组合列表',
    ),
    'CreateConstraint' => 
    array (
      'summary' => '创建约束。',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ConstraintType',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '约束类型',
            'description' => '约束类型。

取值为Launch，表示启动约束。',
            'type' => 'string',
            'required' => true,
            'example' => 'Launch',
          ),
        ),
        1 => 
        array (
          'name' => 'Config',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '约束配置',
            'description' => '约束配置。

格式：{ "LocalRoleName": "<role_name\\>" }',
            'type' => 'string',
            'required' => true,
            'example' => '{ "LocalRoleName": "TestRole" }',
          ),
        ),
        2 => 
        array (
          'name' => 'Description',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '约束描述',
            'description' => '约束描述。

长度为1~128个字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'Launch as local role TestRole',
          ),
        ),
        3 => 
        array (
          'name' => 'PortfolioId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '约束所属的产品组合ID',
            'description' => '约束所属的产品组合ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'port-bp1yt7582g****',
          ),
        ),
        4 => 
        array (
          'name' => 'ProductId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '约束对应的产品ID',
            'description' => '约束对应的产品ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'prod-bp18r7q127****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '0FEEF92D-4052-5202-87D0-3D8EC16F81BF',
              ),
              'ConstraintId' => 
              array (
                'title' => '约束ID',
                'description' => '约束ID。',
                'type' => 'string',
                'example' => 'cons-bp1yx7x42v****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'A system error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0FEEF92D-4052-5202-87D0-3D8EC16F81BF\\",\\n  \\"ConstraintId\\": \\"cons-bp1yx7x42v****\\"\\n}","type":"json"}]',
      'title' => '创建约束',
    ),
    'DeleteConstraint' => 
    array (
      'summary' => '删除约束。',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ConstraintId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '约束ID',
            'description' => '约束ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cons-bp1yx7x42v****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '0FEEF92D-4052-5202-87D0-3D8EC16F81BF',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'A system error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0FEEF92D-4052-5202-87D0-3D8EC16F81BF\\"\\n}","type":"json"}]',
      'title' => '删除约束',
    ),
    'UpdateConstraint' => 
    array (
      'summary' => '更新约束。',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ConstraintId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '约束ID',
            'description' => '约束ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cons-bp1yx7x42v****',
          ),
        ),
        1 => 
        array (
          'name' => 'Config',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '约束配置',
            'description' => '约束配置。

格式：{ "LocalRoleName": "<role_name\\>" }',
            'type' => 'string',
            'required' => true,
            'example' => '{ "LocalRoleName": "TestRole" }',
          ),
        ),
        2 => 
        array (
          'name' => 'Description',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '约束描述',
            'description' => '约束描述。

长度为1~128个字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'Launch as local role TestRole',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '0FEEF92D-4052-5202-87D0-3D8EC16F81BF',
              ),
              'ConstraintId' => 
              array (
                'title' => '约束ID',
                'description' => '约束ID。',
                'type' => 'string',
                'example' => 'cons-bp1yx7x42v****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'A system error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0FEEF92D-4052-5202-87D0-3D8EC16F81BF\\",\\n  \\"ConstraintId\\": \\"cons-bp1yx7x42v****\\"\\n}","type":"json"}]',
      'title' => '更新约束',
    ),
    'GetConstraint' => 
    array (
      'summary' => '查询约束信息。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ConstraintId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '约束ID',
            'description' => '约束ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cons-bp1yx7x42v****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '0FEEF92D-4052-5202-87D0-3D8EC16F81BF',
              ),
              'ConstraintDetail' => 
              array (
                'title' => '约束详情',
                'description' => '约束详情。',
                'type' => 'object',
                'properties' => 
                array (
                  'Config' => 
                  array (
                    'title' => '约束配置',
                    'description' => '约束配置。

格式：{ "LocalRoleName": "<role_name\\>" }',
                    'type' => 'string',
                    'example' => '{ "LocalRoleName": "TestRole" }',
                  ),
                  'Description' => 
                  array (
                    'title' => '描述',
                    'description' => '约束描述。',
                    'type' => 'string',
                    'example' => 'Launch as local role TestRole',
                  ),
                  'CreateTime' => 
                  array (
                    'title' => '创建时间',
                    'description' => '约束创建时间。

按照ISO8601标准表示，使用UTC时间，格式：YYYY-MM-DDThh:mm:ssZ。',
                    'type' => 'string',
                    'example' => '2022-04-12T06:11:26Z',
                  ),
                  'ConstraintId' => 
                  array (
                    'title' => '约束ID',
                    'description' => '约束ID。',
                    'type' => 'string',
                    'example' => 'cons-bp1yx7x42v****',
                  ),
                  'PortfolioId' => 
                  array (
                    'title' => '约束所属的产品组合ID',
                    'description' => '约束所属的产品组合ID。',
                    'type' => 'string',
                    'example' => 'port-bp1yt7582g****',
                  ),
                  'ProductId' => 
                  array (
                    'title' => '约束的产品ID',
                    'description' => '约束对应的产品ID。',
                    'type' => 'string',
                    'example' => 'prod-bp18r7q127****',
                  ),
                  'ConstraintType' => 
                  array (
                    'title' => '约束类型',
                    'description' => '约束类型。

取值为Launch，表示启动约束。',
                    'type' => 'string',
                    'example' => 'Launch',
                  ),
                  'ProductName' => 
                  array (
                    'description' => '产品名称。',
                    'type' => 'string',
                    'example' => 'DEMO-创建ECS',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'A system error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0FEEF92D-4052-5202-87D0-3D8EC16F81BF\\",\\n  \\"ConstraintDetail\\": {\\n    \\"Config\\": \\"{ \\\\\\"LocalRoleName\\\\\\": \\\\\\"TestRole\\\\\\" }\\",\\n    \\"Description\\": \\"Launch as local role TestRole\\",\\n    \\"CreateTime\\": \\"2022-04-12T06:11:26Z\\",\\n    \\"ConstraintId\\": \\"cons-bp1yx7x42v****\\",\\n    \\"PortfolioId\\": \\"port-bp1yt7582g****\\",\\n    \\"ProductId\\": \\"prod-bp18r7q127****\\",\\n    \\"ConstraintType\\": \\"Launch\\",\\n    \\"ProductName\\": \\"DEMO-创建ECS\\"\\n  }\\n}","type":"json"}]',
      'title' => '查询约束信息',
    ),
    'AssociatePrincipalWithPortfolio' => 
    array (
      'summary' => '将产品组合授权给账号内的RAM用户或者RAM角色。',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PortfolioId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '产品组合ID',
            'description' => '产品组合ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'port-bp1yt7582g****',
          ),
        ),
        1 => 
        array (
          'name' => 'PrincipalType',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => 'RAM实体类型',
            'description' => 'RAM实体类型。取值：

- RamUser：RAM用户。
- RamRole：RAM角色。',
            'type' => 'string',
            'required' => true,
            'example' => 'RamUser',
          ),
        ),
        2 => 
        array (
          'name' => 'PrincipalId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => 'RAM实体ID',
            'description' => 'RAM实体ID。

获取RAM用户ID的方法，请参见[GetUser](~~28681~~)。

获取RAM角色ID的方法，请参见[GetRole](~~28711~~)。',
            'type' => 'string',
            'required' => true,
            'example' => '24477111603637****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '0FEEF92D-4052-5202-87D0-3D8EC16F81BF',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'A system error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0FEEF92D-4052-5202-87D0-3D8EC16F81BF\\"\\n}","type":"json"}]',
      'title' => '创建产品组合授权',
    ),
    'DisassociatePrincipalFromPortfolio' => 
    array (
      'summary' => '删除产品组合授权。',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PortfolioId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '产品组合ID',
            'description' => '产品组合ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'port-bp1yt7582g****',
          ),
        ),
        1 => 
        array (
          'name' => 'PrincipalType',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => 'RAM实体类型',
            'description' => 'RAM实体类型。取值：

- RamUser：RAM用户。
- RamRole：RAM角色。',
            'type' => 'string',
            'required' => true,
            'example' => 'RamUser',
          ),
        ),
        2 => 
        array (
          'name' => 'PrincipalId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => 'RAM实体ID',
            'description' => 'RAM实体ID。

获取RAM用户ID的方法，请参见[GetUser](~~28681~~)。

获取RAM角色ID的方法，请参见[GetRole](~~28711~~)。',
            'type' => 'string',
            'required' => true,
            'example' => '24477111603637****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '0FEEF92D-4052-5202-87D0-3D8EC16F81BF',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'A system error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0FEEF92D-4052-5202-87D0-3D8EC16F81BF\\"\\n}","type":"json"}]',
      'title' => '删除产品组合授权',
    ),
    'ListPrincipals' => 
    array (
      'summary' => '查询产品组合已授权的RAM用户和RAM角色列表。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PortfolioId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '产品组合ID',
            'description' => '产品组合ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'port-bp1yt7582g****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '0FEEF92D-4052-5202-87D0-3D8EC16F81BF',
              ),
              'Principals' => 
              array (
                'title' => 'RAM实体列表',
                'description' => 'RAM实体列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => 'RAM实体信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'PrincipalType' => 
                    array (
                      'title' => 'RAM实体类型',
                      'description' => 'RAM实体类型。取值：

- RamUser：RAM用户。
- RamRole：RAM角色。',
                      'type' => 'string',
                      'example' => 'RamUser',
                    ),
                    'PrincipalId' => 
                    array (
                      'title' => 'RAM实体ID',
                      'description' => 'RAM实体ID。',
                      'type' => 'string',
                      'example' => '24477111603637****',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'A system error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0FEEF92D-4052-5202-87D0-3D8EC16F81BF\\",\\n  \\"Principals\\": [\\n    {\\n      \\"PrincipalType\\": \\"RamUser\\",\\n      \\"PrincipalId\\": \\"24477111603637****\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询产品组合已授权的用户和角色列表',
    ),
    'ListRegions' => 
    array (
      'summary' => '查询地域列表。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '0FEEF92D-4052-5202-87D0-3D8EC16F81BF',
              ),
              'Regions' => 
              array (
                'title' => '地域列表',
                'description' => '地域列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '地域信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'RegionId' => 
                    array (
                      'title' => '地域ID',
                      'description' => '地域ID。',
                      'type' => 'string',
                      'example' => 'cn-hangzhou',
                    ),
                    'RegionEndpoint' => 
                    array (
                      'title' => '地域接入地址',
                      'description' => '地域接入地址。',
                      'type' => 'string',
                      'example' => 'servicecatalog.cn-hangzhou.aliyuncs.com',
                    ),
                    'LocalName' => 
                    array (
                      'title' => '地域名称',
                      'description' => '地域名称。',
                      'type' => 'string',
                      'example' => '华东1（杭州）',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'A system error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0FEEF92D-4052-5202-87D0-3D8EC16F81BF\\",\\n  \\"Regions\\": [\\n    {\\n      \\"RegionId\\": \\"cn-hangzhou\\",\\n      \\"RegionEndpoint\\": \\"servicecatalog.cn-hangzhou.aliyuncs.com\\",\\n      \\"LocalName\\": \\"华东1（杭州）\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询地域列表',
    ),
    'GetTagOption' => 
    array (
      'summary' => '查询标签选项详情。',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'TagOptionId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => '标签选项ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'tag-bp1r3mxq3t****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'TagOptionDetail' => 
              array (
                'description' => '标签选项详情。',
                'type' => 'object',
                'properties' => 
                array (
                  'Active' => 
                  array (
                    'description' => '是否启用。取值：

- true：启用。
- false：禁用。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'TagOptionId' => 
                  array (
                    'description' => '标签选项ID。',
                    'type' => 'string',
                    'example' => 'tag-bp15qmwz3r****',
                  ),
                  'Key' => 
                  array (
                    'description' => '标签选项键。',
                    'type' => 'string',
                    'example' => 'k1',
                  ),
                  'Value' => 
                  array (
                    'description' => '标签选项值。',
                    'type' => 'string',
                    'example' => 'v1',
                  ),
                  'Owner' => 
                  array (
                    'description' => '标签选项归属人云账号ID。',
                    'type' => 'string',
                    'example' => '133413081827****',
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'C1509725-055D-5C7B-9420-8B737DBD****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'A system error occurred.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"TagOptionDetail\\": {\\n    \\"Active\\": true,\\n    \\"TagOptionId\\": \\"tag-bp15qmwz3r****\\",\\n    \\"Key\\": \\"k1\\",\\n    \\"Value\\": \\"v1\\",\\n    \\"Owner\\": \\"133413081827****\\"\\n  },\\n  \\"RequestId\\": \\"C1509725-055D-5C7B-9420-8B737DBD****\\"\\n}","type":"json"}]',
      'title' => '查询标签选项信息',
    ),
    'DisAssociateTagOptionFromResource' => 
    array (
      'summary' => '取消标签选项与资源的关联。',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ResourceId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => '标签选项绑定的资源ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'prod-bp14katy3d****',
          ),
        ),
        1 => 
        array (
          'name' => 'TagOptionId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '标签选项ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'tag-bp1u6mdf3d****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '7E23D1F3-4333-587B-909C-39EA4626****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'A system error occurred.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"7E23D1F3-4333-587B-909C-39EA4626****\\"\\n}","type":"json"}]',
      'title' => '取消标签选项与资源的关联',
    ),
    'ListResourcesForTagOption' => 
    array (
      'summary' => '查询标签选项关联的资源列表。',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'TagOptionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '标签选项ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'tag-bp1u6mdf3d****',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '标签选项关联的资源类型。取值：

- Product：产品。
- Portfolio：产品组合。',
            'type' => 'string',
            'required' => true,
            'example' => 'Product',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码。

起始值：1。默认值：1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页时每页显示的数据行数。

取值范围：1~100。起始值：1。默认值：10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'E465F21C-8712-5794-A754-5E4D9152****',
              ),
              'TotalCount' => 
              array (
                'title' => '总记录数',
                'description' => '总记录数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'PageNumber' => 
              array (
                'description' => '页码。

起始值：1。默认值：1。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '分页时每页显示的数据行数。

取值范围：1~100。起始值：1。默认值：10。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'ResourceDetails' => 
              array (
                'description' => '关联资源详情。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ResourceArn' => 
                    array (
                      'description' => '资源ARN。',
                      'type' => 'string',
                      'example' => 'acs:servicecatalog:cn-hangzhou:146611588617****:product/prod-bp18r7q127****
',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '资源创建时间。

按照ISO8601标准表示，使用UTC时间，格式：YYYY-MM-DDThh:mm:ssZ。',
                      'type' => 'string',
                      'example' => '2022-11-04T08:07:04.281986714Z',
                    ),
                    'Description' => 
                    array (
                      'description' => '资源描述。

长度为1~128个字符。',
                      'type' => 'string',
                      'example' => '这是一个产品描述。
',
                    ),
                    'ResourceId' => 
                    array (
                      'description' => '标签选项绑定的资源ID。',
                      'type' => 'string',
                      'example' => 'port-bp15p96922****',
                    ),
                    'ResourceName' => 
                    array (
                      'description' => '资源名称。',
                      'type' => 'string',
                      'example' => 'DEMO-创建ECS
',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'A system error occurred.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"E465F21C-8712-5794-A754-5E4D9152****\\",\\n  \\"TotalCount\\": 10,\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"ResourceDetails\\": [\\n    {\\n      \\"ResourceArn\\": \\"acs:servicecatalog:cn-hangzhou:146611588617****:product/prod-bp18r7q127****\\\\n\\",\\n      \\"CreateTime\\": \\"2022-11-04T08:07:04.281986714Z\\",\\n      \\"Description\\": \\"这是一个产品描述。\\\\n\\",\\n      \\"ResourceId\\": \\"port-bp15p96922****\\",\\n      \\"ResourceName\\": \\"DEMO-创建ECS\\\\n\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询标签选项关联的资源列表',
    ),
    'UpdateTagOption' => 
    array (
      'summary' => '更新标签选项。',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'TagOptionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => '标签选项ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'tag-bp1u6mdf3d****',
          ),
        ),
        1 => 
        array (
          'name' => 'Value',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '标签选项值。

最多支持128个字符，不能以`acs:`开头，不能包含`http://`或者`https://`。',
            'type' => 'string',
            'required' => false,
            'example' => 'v1',
            'maxLength' => 128,
            'minLength' => 1,
          ),
        ),
        2 => 
        array (
          'name' => 'Active',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否启用。取值：

- true（默认值）：启用。
- false：禁用。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'TagOptionDetail' => 
              array (
                'description' => '标签选项详情。',
                'type' => 'object',
                'properties' => 
                array (
                  'Active' => 
                  array (
                    'description' => '是否启用。取值：

- true（默认值）：启用。
- false：禁用。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'TagOptionId' => 
                  array (
                    'description' => '标签选项ID。',
                    'type' => 'string',
                    'example' => 'tag-bp1u6mdf3d****',
                  ),
                  'Key' => 
                  array (
                    'description' => '用户输入的标签选项键。

最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                    'type' => 'string',
                    'example' => 'k1',
                  ),
                  'Value' => 
                  array (
                    'description' => '用户输入的标签选项值。

最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                    'type' => 'string',
                    'example' => 'v1',
                  ),
                  'Owner' => 
                  array (
                    'description' => '标签选项归属人云账号ID。',
                    'type' => 'string',
                    'example' => '133413081827****',
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '0FEEF92D-4052-5202-87D0-3D8EC16F****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'A system error occurred.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"TagOptionDetail\\": {\\n    \\"Active\\": true,\\n    \\"TagOptionId\\": \\"tag-bp1u6mdf3d****\\",\\n    \\"Key\\": \\"k1\\",\\n    \\"Value\\": \\"v1\\",\\n    \\"Owner\\": \\"133413081827****\\"\\n  },\\n  \\"RequestId\\": \\"0FEEF92D-4052-5202-87D0-3D8EC16F****\\"\\n}","type":"json"}]',
      'title' => '更新标签选项',
    ),
    'ListTagOptions' => 
    array (
      'summary' => '查询标签选项列表。',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码。

起始值：1。默认值：1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页时每页显示的数据行数。

取值范围：1~100。起始值：1。默认值：10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        2 => 
        array (
          'name' => 'Filters',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '过滤条件。',
            'type' => 'object',
            'properties' => 
            array (
              'Key' => 
              array (
                'description' => '标签选项键。',
                'type' => 'string',
                'required' => false,
                'example' => 'k1',
              ),
              'Value' => 
              array (
                'description' => '标签选项值。',
                'type' => 'string',
                'required' => false,
                'example' => 'v1',
              ),
              'Active' => 
              array (
                'description' => '是否启用。取值：

- true（默认值）：启用。
- false：禁用。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'true',
              ),
              'FullTextSearch' => 
              array (
                'description' => '全文搜索。',
                'type' => 'string',
                'required' => false,
                'example' => 'k1',
              ),
            ),
            'required' => false,
          ),
        ),
        3 => 
        array (
          'name' => 'SortBy',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '排序字段。

取值为CreateTime，表示标签选项创建时间。',
            'type' => 'string',
            'required' => false,
            'example' => 'CreateTime',
          ),
        ),
        4 => 
        array (
          'name' => 'SortOrder',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '排序方式。取值：

- Asc：正序。
- Desc（默认值）：倒序。',
            'type' => 'string',
            'required' => false,
            'example' => 'Desc',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '37C9C1DF-EFFC-5D8A-80D0-8657B1F3****',
              ),
              'TotalCount' => 
              array (
                'title' => '总记录数',
                'description' => '总记录数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'PageNumber' => 
              array (
                'description' => '页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '分页时每页显示的数据行数。

取值范围：1~100。起始值：1。默认值：10。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'TagOptionDetails' => 
              array (
                'description' => '标签选项详情列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Active' => 
                    array (
                      'description' => '是否启用。取值：

- true：启用。
- false：禁用。',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'TagOptionId' => 
                    array (
                      'description' => '标签选项ID。',
                      'type' => 'string',
                      'example' => 'tag-bp1r3mxq3t****',
                    ),
                    'Key' => 
                    array (
                      'description' => '标签选项键。',
                      'type' => 'string',
                      'example' => 'k1',
                    ),
                    'Value' => 
                    array (
                      'description' => '标签选项值。',
                      'type' => 'string',
                      'example' => 'v1',
                    ),
                    'Owner' => 
                    array (
                      'description' => '标签选项归属人云账号ID。',
                      'type' => 'string',
                      'example' => '133413081827****
',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'A system error occurred.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"37C9C1DF-EFFC-5D8A-80D0-8657B1F3****\\",\\n  \\"TotalCount\\": 10,\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"TagOptionDetails\\": [\\n    {\\n      \\"Active\\": true,\\n      \\"TagOptionId\\": \\"tag-bp1r3mxq3t****\\",\\n      \\"Key\\": \\"k1\\",\\n      \\"Value\\": \\"v1\\",\\n      \\"Owner\\": \\"133413081827****\\\\n\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询标签选项列表',
    ),
    'DeleteTagOption' => 
    array (
      'summary' => '删除标签选项。',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'TagOptionId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => '标签选项ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'tag-bp1u6mdf3d****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '0FEEF92D-4052-5202-87D0-3D8EC16F****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'A system error occurred.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0FEEF92D-4052-5202-87D0-3D8EC16F****\\"\\n}","type":"json"}]',
      'title' => '删除标签选项',
    ),
    'CreateTagOption' => 
    array (
      'summary' => '创建标签选项。',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Key',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => '用户输入的标签选项键。

最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
            'type' => 'string',
            'required' => true,
            'example' => 'k1',
            'maxLength' => 128,
            'minLength' => 1,
          ),
        ),
        1 => 
        array (
          'name' => 'Value',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '用户输入的标签选项值。

最多支持128个字符，不能以`acs:`开头，不能包含`http://`或者`https://`。',
            'type' => 'string',
            'required' => true,
            'example' => 'v1',
            'maxLength' => 128,
            'minLength' => 1,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'TagOptionDetail' => 
              array (
                'description' => '标签选项详情。',
                'type' => 'object',
                'properties' => 
                array (
                  'Active' => 
                  array (
                    'description' => '是否启用。取值：

- true（默认值）：启用。
- false：禁用。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'TagOptionId' => 
                  array (
                    'description' => '标签选项ID。',
                    'type' => 'string',
                    'example' => 'tag-bp1r3mxq3t****',
                  ),
                  'Key' => 
                  array (
                    'description' => '用户输入的标签选项键。

最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                    'type' => 'string',
                    'example' => 'k1',
                  ),
                  'Value' => 
                  array (
                    'description' => '用户输入的标签选项值。

最多支持128个字符，不能以`acs:`开头，不能包含`http://`或者`https://`。',
                    'type' => 'string',
                    'example' => 'v1',
                  ),
                  'Owner' => 
                  array (
                    'description' => '标签选项归属人云账号ID。',
                    'type' => 'string',
                    'example' => '133413081827****
',
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'A48A5F12-6098-54A1-A389-6834AF27****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'A system error occurred.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"TagOptionDetail\\": {\\n    \\"Active\\": true,\\n    \\"TagOptionId\\": \\"tag-bp1r3mxq3t****\\",\\n    \\"Key\\": \\"k1\\",\\n    \\"Value\\": \\"v1\\",\\n    \\"Owner\\": \\"133413081827****\\\\n\\"\\n  },\\n  \\"RequestId\\": \\"A48A5F12-6098-54A1-A389-6834AF27****\\"\\n}","type":"json"}]',
      'title' => '创建标签选项',
    ),
    'AssociateTagOptionWithResource' => 
    array (
      'summary' => '将标签选项关联到资源。',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ResourceId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => '标签选项绑定的资源ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'port-bp15p96922****',
          ),
        ),
        1 => 
        array (
          'name' => 'TagOptionId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '标签选项ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'tag-bp1u6mdf3d****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'DC833558-AFF4-5935-9AB6-8A12EE7D****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'A system error occurred.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"DC833558-AFF4-5935-9AB6-8A12EE7D****\\"\\n}","type":"json"}]',
      'title' => '将标签选项关联到资源',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'servicecatalog.cn-hangzhou.aliyuncs.com',
    ),
  ),
);
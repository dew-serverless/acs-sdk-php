<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'V3',
    'product' => 'cloudcontrol',
    'version' => '2022-08-30',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 177235,
      'title' => '元数据查询',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'GetResourceType',
        1 => 'ListProducts',
        2 => 'ListResourceTypes',
      ),
    ),
    1 => 
    array (
      'id' => 177238,
      'title' => '资源管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateResource',
        1 => 'DeleteResource',
        2 => 'GetResources',
        3 => 'UpdateResource',
      ),
    ),
    2 => 
    array (
      'id' => 177243,
      'title' => '异步任务管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'GetTask',
        1 => 'CancelTask',
      ),
    ),
    3 => 
    array (
      'id' => 177246,
      'title' => '数据查询',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ListDataSources',
      ),
    ),
    4 => 
    array (
      'id' => 188598,
      'title' => '其他',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'GetPrice',
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
    'GetResourceType' => 
    array (
      'summary' => '用户通过此接口查询指定的资源元数据详情。',
      'path' => '/api/v1/providers/{provider}/products/{product}/resourceTypes/*',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'x-acs-accept-language',
          'in' => 'header',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => '选择返回产品的语言。

zh_CH：中文 （默认）

en_US：英文。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'zh_CH' => 'zh_CH',
              'en_US' => 'en_US',
            ),
            'example' => 'zh_CH',
          ),
        ),
        1 => 
        array (
          'name' => 'requestPath',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '请求路径。格式为：
/api/v1/providers/{provider}/products/{product}/resourceTypes/{resourceType}

请求路径中变量说明：

provider: 云厂商，目前只支持Aliyun。

product: 产品Code。

resourceType: 资源类型。

示例如下：

Redis DBInstance: /api/v1/providers/Aliyun/products/Redis/resourceTypes/DBInstance

Redis Account: /api/v1/providers/Aliyun/products/Redis/resourceTypes/DBInstance/Account',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '/api/v1/providers/Aliyun/products/Redis/resourceTypes/DBInstance',
            'default' => '0',
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
            'description' => '返回结构。',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3****',
              ),
              'resourceType' => 
              array (
                'description' => '资源类型。',
                'type' => 'object',
                'properties' => 
                array (
                  'product' => 
                  array (
                    'description' => '产品Code。',
                    'type' => 'string',
                    'example' => 'ECS',
                  ),
                  'resourceType' => 
                  array (
                    'description' => '资源类型。',
                    'type' => 'string',
                    'example' => 'Instance',
                  ),
                  'info' => 
                  array (
                    'description' => '资源类型基础信息。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'title' => 
                      array (
                        'description' => '资源类型名称。',
                        'type' => 'string',
                        'example' => 'Instance',
                      ),
                      'description' => 
                      array (
                        'description' => '资源类型描述。',
                        'type' => 'string',
                        'example' => 'An ECS instance is equivalent to a virtual machine, including the most basic computing components such as CPU, memory, operating system, network, and disk. You can easily customize and change the configuration of the instance. You have full control over the virtual machine.',
                      ),
                      'chargeType' => 
                      array (
                        'description' => '付费形式

paid（付费）
free（免费）',
                        'type' => 'string',
                        'example' => 'paid',
                      ),
                      'deliveryScope' => 
                      array (
                        'description' => '交付级别 

center（中心化部署级别）

region（地域部署级别）

zone（可用区部署级别）',
                        'type' => 'string',
                        'example' => 'region',
                      ),
                    ),
                  ),
                  'properties' => 
                  array (
                    'description' => '资源属性定义，key是属性名，value为属性详细信息。',
                    'type' => 'object',
                  ),
                  'primaryIdentifier' => 
                  array (
                    'description' => '资源ID。',
                    'type' => 'string',
                    'example' => '/properties/InstanceId
',
                  ),
                  'required' => 
                  array (
                    'description' => '资源创建必填参数集合。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '资源创建必填参数。',
                      'type' => 'string',
                      'example' => 'RegionId',
                    ),
                  ),
                  'publicProperties' => 
                  array (
                    'description' => '公共的属性集合，为资源基本属性。非操作私有参数。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '公共属性。',
                      'type' => 'string',
                      'example' => '	
/properties/Description',
                    ),
                  ),
                  'readOnlyProperties' => 
                  array (
                    'description' => '只读参数集合，只在list或者get操作中返回，创建及变更时不作为入参。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '只读参数。',
                      'type' => 'string',
                      'example' => '/properties/CreateTime',
                    ),
                  ),
                  'filterProperties' => 
                  array (
                    'description' => 'list操作时可以作为filter参数的属性集合。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => 'filter参数。',
                      'type' => 'string',
                      'example' => '	
/properties/ResourceGroupId',
                    ),
                  ),
                  'updateTypeProperties' => 
                  array (
                    'description' => '可以修改的属性集合。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '可改属性。',
                      'type' => 'string',
                      'example' => '/properties/InstanceName',
                    ),
                  ),
                  'sensitiveInfoProperties' => 
                  array (
                    'description' => '敏感属性集合，例如密码等。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '敏感属性。',
                      'type' => 'string',
                      'example' => '/properties/VncPassword',
                    ),
                  ),
                  'createOnlyProperties' => 
                  array (
                    'description' => '创建操作私有参数集合。资源查询操作中不会返回的属性，但是创建操作中需要传入的参数。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '创建操作私有参数。',
                      'type' => 'string',
                      'example' => '/properties/AutoRenew',
                    ),
                  ),
                  'updateOnlyProperties' => 
                  array (
                    'description' => '更新操作私有参数集合。资源查询操作中不会返回的属性，但是更新操作中需要传入的参数。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '更新操作私有参数。',
                      'type' => 'string',
                      'example' => '/properties/DryRun',
                    ),
                  ),
                  'getOnlyProperties' => 
                  array (
                    'description' => '查询操作私有参数集合。资源查询操作中不会返回的属性，但是查询操作中需要传入的参数。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '查询操作私有参数。',
                      'type' => 'string',
                      'example' => '/properties/DryRun',
                    ),
                  ),
                  'listOnlyProperties' => 
                  array (
                    'description' => '列举操作私有参数集合。资源查询操作中不会返回的属性，但是列举操作中需要传入的参数。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '列举操作私有参数。',
                      'type' => 'string',
                      'example' => '/properties/DryRun',
                    ),
                  ),
                  'deleteOnlyProperties' => 
                  array (
                    'description' => '删除操作私有参数集合。资源查询操作中不会返回的属性，但是删除操作中需要传入的参数。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '删除操作私有参数。',
                      'type' => 'string',
                      'example' => '/properties/ForceDelete',
                    ),
                  ),
                  'getResponseProperties' => 
                  array (
                    'description' => '查询返回的属性集合。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '查询返回的属性。',
                      'type' => 'string',
                      'example' => '/properties/NetworkInterfaces/items/properties/IpvSets',
                    ),
                  ),
                  'listResponseProperties' => 
                  array (
                    'description' => '列举返回的属性集合。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '列举返回的属性。',
                      'type' => 'string',
                      'example' => '/properties/InstanceId',
                    ),
                  ),
                  'handlers' => 
                  array (
                    'description' => '支持的资源操作信息（包括RAM权限）。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'create' => 
                      array (
                        'description' => '创建操作关联信息。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'permissions' => 
                          array (
                            'description' => '所需RAM权限信息集合。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => 'RAM权限。',
                              'type' => 'string',
                              'example' => 'ecs:CreateInstance',
                            ),
                          ),
                        ),
                      ),
                      'update' => 
                      array (
                        'description' => '更新操作关联信息。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'permissions' => 
                          array (
                            'description' => '所需RAM权限信息集合。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => 'RAM权限。',
                              'type' => 'string',
                              'example' => 'ecs:ModifyInstanceNetworkSpec',
                            ),
                          ),
                        ),
                      ),
                      'get' => 
                      array (
                        'description' => '查询操作关联信息。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'permissions' => 
                          array (
                            'description' => '所需RAM权限信息集合。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => 'RAM权限。',
                              'type' => 'string',
                              'example' => 'ecs:DescribeInstanceAttachmentAttributes',
                            ),
                          ),
                        ),
                      ),
                      'list' => 
                      array (
                        'description' => '列举操作关联信息。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'permissions' => 
                          array (
                            'description' => '所需RAM权限信息集合。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => 'RAM权限。',
                              'type' => 'string',
                              'example' => 'ecs:DescribeInstances',
                            ),
                          ),
                        ),
                      ),
                      'delete' => 
                      array (
                        'description' => '删除操作关联信息。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'permissions' => 
                          array (
                            'description' => '所需RAM权限信息集合。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => 'RAM权限。',
                              'type' => 'string',
                              'example' => 'ecs:DeleteInstance',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3****\\",\\n  \\"resourceType\\": {\\n    \\"product\\": \\"ECS\\",\\n    \\"resourceType\\": \\"Instance\\",\\n    \\"info\\": {\\n      \\"title\\": \\"Instance\\",\\n      \\"description\\": \\"An ECS instance is equivalent to a virtual machine, including the most basic computing components such as CPU, memory, operating system, network, and disk. You can easily customize and change the configuration of the instance. You have full control over the virtual machine.\\",\\n      \\"chargeType\\": \\"paid\\",\\n      \\"deliveryScope\\": \\"region\\"\\n    },\\n    \\"properties\\": {\\n      \\"test\\": \\"test\\",\\n      \\"test2\\": 1\\n    },\\n    \\"primaryIdentifier\\": \\"/properties/InstanceId\\\\n\\",\\n    \\"required\\": [\\n      \\"RegionId\\"\\n    ],\\n    \\"publicProperties\\": [\\n      \\"\\\\t\\\\n/properties/Description\\"\\n    ],\\n    \\"readOnlyProperties\\": [\\n      \\"/properties/CreateTime\\"\\n    ],\\n    \\"filterProperties\\": [\\n      \\"\\\\t\\\\n/properties/ResourceGroupId\\"\\n    ],\\n    \\"updateTypeProperties\\": [\\n      \\"/properties/InstanceName\\"\\n    ],\\n    \\"sensitiveInfoProperties\\": [\\n      \\"/properties/VncPassword\\"\\n    ],\\n    \\"createOnlyProperties\\": [\\n      \\"/properties/AutoRenew\\"\\n    ],\\n    \\"updateOnlyProperties\\": [\\n      \\"/properties/DryRun\\"\\n    ],\\n    \\"getOnlyProperties\\": [\\n      \\"/properties/DryRun\\"\\n    ],\\n    \\"listOnlyProperties\\": [\\n      \\"/properties/DryRun\\"\\n    ],\\n    \\"deleteOnlyProperties\\": [\\n      \\"/properties/ForceDelete\\"\\n    ],\\n    \\"getResponseProperties\\": [\\n      \\"/properties/NetworkInterfaces/items/properties/IpvSets\\"\\n    ],\\n    \\"listResponseProperties\\": [\\n      \\"/properties/InstanceId\\"\\n    ],\\n    \\"handlers\\": {\\n      \\"create\\": {\\n        \\"permissions\\": [\\n          \\"ecs:CreateInstance\\"\\n        ]\\n      },\\n      \\"update\\": {\\n        \\"permissions\\": [\\n          \\"ecs:ModifyInstanceNetworkSpec\\"\\n        ]\\n      },\\n      \\"get\\": {\\n        \\"permissions\\": [\\n          \\"ecs:DescribeInstanceAttachmentAttributes\\"\\n        ]\\n      },\\n      \\"list\\": {\\n        \\"permissions\\": [\\n          \\"ecs:DescribeInstances\\"\\n        ]\\n      },\\n      \\"delete\\": {\\n        \\"permissions\\": [\\n          \\"ecs:DeleteInstance\\"\\n        ]\\n      }\\n    }\\n  }\\n}","type":"json"}]',
      'title' => '查询资源类型的详情',
    ),
    'ListProducts' => 
    array (
      'summary' => '用户通过此接口查询Cloud Control API支持的产品列表。',
      'path' => '/api/v1/providers/{provider}/products',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'x-acs-accept-language',
          'in' => 'header',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => '选择返回产品的语言。

zh_CH：中文 （默认）

en_US：英文。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'zh_CH' => 'zh_CH',
              'en_US' => 'en_US',
            ),
            'example' => 'zh_CH',
          ),
        ),
        1 => 
        array (
          'name' => 'provider',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '云厂商，目前只支持Aliyun。',
            'type' => 'string',
            'required' => true,
            'example' => 'Aliyun',
          ),
        ),
        2 => 
        array (
          'name' => 'nextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用来标记当前开始读取的位置，置空表示从头开始。',
            'type' => 'string',
            'required' => false,
            'example' => 'ECS',
          ),
        ),
        3 => 
        array (
          'name' => 'maxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时每页行数。最大值为100。

默认值：30。',
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
            'description' => '返回结构。',
            'type' => 'object',
            'properties' => 
            array (
              'totalCount' => 
              array (
                'title' => 'TotalCount本次请求条件下的数据总量，此参数为可选参数，默认可不返回',
                'description' => '本次请求条件下的数据总量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '20',
              ),
              'nextToken' => 
              array (
                'title' => '表示当前调用返回读取到的位置，空代表数据已经读取完毕',
                'description' => '表示当前调用返回读取到的位置，空代表数据已经读取完毕。',
                'type' => 'string',
                'example' => 'Redis',
              ),
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3****',
              ),
              'maxResults' => 
              array (
                'description' => '本次请求所返回的最大记录条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'products' => 
              array (
                'description' => '产品列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '产品信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'productCode' => 
                    array (
                      'description' => '产品code。',
                      'type' => 'string',
                      'example' => 'ECS',
                    ),
                    'productName' => 
                    array (
                      'description' => '产品名称。',
                      'type' => 'string',
                      'example' => 'Elastic Compute Service',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"totalCount\\": 20,\\n  \\"nextToken\\": \\"Redis\\",\\n  \\"requestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3****\\",\\n  \\"maxResults\\": 10,\\n  \\"products\\": [\\n    {\\n      \\"productCode\\": \\"ECS\\",\\n      \\"productName\\": \\"Elastic Compute Service\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '列举产品',
      'description' => 'GET /api/v1/providers/{provider}/products。',
    ),
    'ListResourceTypes' => 
    array (
      'summary' => '用户通过此接口查询Cloud Control API支持的资源列表。',
      'path' => '/api/v1/providers/{provider}/products/{product}/resourceTypes',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'x-acs-accept-language',
          'in' => 'header',
          'schema' => 
          array (
            'description' => '选择返回产品的语言。

zh_CH：中文 （默认）

en_US：英文。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'zh_CH' => 'zh_CH',
              'en_US' => 'en_US',
            ),
            'example' => 'zh_CH',
          ),
        ),
        1 => 
        array (
          'name' => 'provider',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '云厂商，目前只支持Aliyun。',
            'type' => 'string',
            'required' => true,
            'example' => 'Aliyun',
          ),
        ),
        2 => 
        array (
          'name' => 'product',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '产品Code。',
            'type' => 'string',
            'required' => true,
            'example' => 'ECS',
          ),
        ),
        3 => 
        array (
          'name' => 'resourceTypes',
          'in' => 'query',
          'style' => 'simple',
          'schema' => 
          array (
            'description' => '资源类型列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '资源类型。',
              'type' => 'string',
              'required' => false,
              'example' => 'Instance',
            ),
            'required' => false,
          ),
        ),
        4 => 
        array (
          'name' => 'nextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用来标记当前开始读取的位置，置空表示从头开始。',
            'type' => 'string',
            'required' => false,
            'example' => 'ECS::Disk',
          ),
        ),
        5 => 
        array (
          'name' => 'maxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时每页行数。最大值为100。

默认值：30。',
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
            'description' => '返回结构。',
            'type' => 'object',
            'properties' => 
            array (
              'totalCount' => 
              array (
                'title' => 'TotalCount本次请求条件下的数据总量，此参数为可选参数，默认可不返回',
                'description' => '本次请求条件下的数据总量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '20',
              ),
              'nextToken' => 
              array (
                'title' => '表示当前调用返回读取到的位置，空代表数据已经读取完毕',
                'description' => '表示当前调用返回读取到的位置，空代表数据已经读取完毕',
                'type' => 'string',
                'example' => 'ECS::Disk',
              ),
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3****',
              ),
              'maxResults' => 
              array (
                'description' => '本次请求所返回的最大记录条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'resourceTypes' => 
              array (
                'description' => '资源类型列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '资源类型。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'product' => 
                    array (
                      'description' => '产品Code。',
                      'type' => 'string',
                      'example' => 'ECS',
                    ),
                    'resourceType' => 
                    array (
                      'description' => '资源类型。',
                      'type' => 'string',
                      'example' => 'Instance',
                    ),
                    'info' => 
                    array (
                      'description' => '资源类型基础信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'title' => 
                        array (
                          'description' => '资源类型名称。',
                          'type' => 'string',
                          'example' => 'Instance',
                        ),
                        'description' => 
                        array (
                          'description' => '资源类型描述。',
                          'type' => 'string',
                          'example' => 'An ECS instance is equivalent to a virtual machine, including the most basic computing components such as CPU, memory, operating system, network, and disk. You can easily customize and change the configuration of the instance. You have full control over the virtual machine.',
                        ),
                        'chargeType' => 
                        array (
                          'description' => '付费形式  
paid（付费）
free（免费）',
                          'type' => 'string',
                          'enumValueTitles' => 
                          array (
                            'paid' => 'paid',
                            'free' => 'free',
                          ),
                          'example' => 'paid',
                        ),
                        'deliveryScope' => 
                        array (
                          'description' => '交付级别 

center（中心化部署级别）

region（地域部署级别）

zone（可用区部署级别）',
                          'type' => 'string',
                          'enumValueTitles' => 
                          array (
                            'zone' => 'zone',
                            'center' => 'center',
                            'region' => 'region',
                          ),
                          'example' => 'region',
                        ),
                      ),
                    ),
                    'properties' => 
                    array (
                      'description' => '资源属性定义，key是属性名，value为属性详细信息。',
                      'type' => 'object',
                    ),
                    'primaryIdentifier' => 
                    array (
                      'description' => '资源ID',
                      'type' => 'string',
                      'example' => '/properties/InstanceId',
                    ),
                    'required' => 
                    array (
                      'description' => '资源创建必填参数集合。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '资源创建必填参数。',
                        'type' => 'string',
                        'example' => 'RegionId',
                      ),
                    ),
                    'publicProperties' => 
                    array (
                      'description' => '公共的属性集合，为资源基本属性。非操作私有参数。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '公共属性。',
                        'type' => 'string',
                        'example' => '/properties/Description',
                      ),
                    ),
                    'readOnlyProperties' => 
                    array (
                      'description' => '只读参数集合，只在list或者get操作中返回，创建及变更时不作为入参。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '只读参数',
                        'type' => 'string',
                        'example' => '/properties/CreateTime',
                      ),
                    ),
                    'filterProperties' => 
                    array (
                      'description' => 'list操作时可以作为filter参数的属性集合。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => 'filter参数。',
                        'type' => 'string',
                        'example' => '/properties/ResourceGroupId',
                      ),
                    ),
                    'updateTypeProperties' => 
                    array (
                      'description' => '可以修改的属性集合。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '可改属性。',
                        'type' => 'string',
                        'example' => '/properties/InstanceName',
                      ),
                    ),
                    'sensitiveInfoProperties' => 
                    array (
                      'description' => '敏感属性集合，例如密码等。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '敏感属性。',
                        'type' => 'string',
                        'example' => '/properties/VncPassword',
                      ),
                    ),
                    'createOnlyProperties' => 
                    array (
                      'description' => '创建操作私有参数集合。资源查询操作中不会返回的属性，但是创建操作中需要传入的参数。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '创建操作私有参数。',
                        'type' => 'string',
                        'example' => '/properties/AutoRenew',
                      ),
                    ),
                    'updateOnlyProperties' => 
                    array (
                      'description' => '更新操作私有参数集合。资源查询操作中不会返回的属性，但是更新操作中需要传入的参数。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '更新操作私有参数。',
                        'type' => 'string',
                        'example' => '/properties/DryRun',
                      ),
                    ),
                    'getOnlyProperties' => 
                    array (
                      'description' => '查询操作私有参数集合。资源查询操作中不会返回的属性，但是查询操作中需要传入的参数。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '查询操作私有参数。',
                        'type' => 'string',
                        'example' => '/properties/DryRun
',
                      ),
                    ),
                    'listOnlyProperties' => 
                    array (
                      'description' => '列举操作私有参数集合。资源查询操作中不会返回的属性，但是列举操作中需要传入的参数。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '列举操作私有参数。',
                        'type' => 'string',
                        'example' => '/properties/DryRun',
                      ),
                    ),
                    'deleteOnlyProperties' => 
                    array (
                      'description' => '删除操作私有参数集合。资源查询操作中不会返回的属性，但是删除操作中需要传入的参数。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '删除操作私有参数。',
                        'type' => 'string',
                        'example' => '/properties/ForceDelete',
                      ),
                    ),
                    'getResponseProperties' => 
                    array (
                      'description' => '查询返回的属性集合。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '查询返回的属性。',
                        'type' => 'string',
                        'example' => '/properties/NetworkInterfaces/items/properties/IpvSets',
                      ),
                    ),
                    'listResponseProperties' => 
                    array (
                      'description' => '列举返回的属性集合。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '列举返回的属性。',
                        'type' => 'string',
                        'example' => '/properties/InstanceId',
                      ),
                    ),
                    'handlers' => 
                    array (
                      'description' => '支持的资源操作信息（包括RAM权限）。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'create' => 
                        array (
                          'description' => '创建操作关联信息。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'permissions' => 
                            array (
                              'description' => '所需RAM权限信息集合。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => 'RAM权限。',
                                'type' => 'string',
                                'example' => 'ecs:CreateInstance',
                              ),
                            ),
                          ),
                        ),
                        'update' => 
                        array (
                          'description' => '更新操作关联信息。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'permissions' => 
                            array (
                              'description' => '所需RAM权限信息集合。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => 'RAM权限。',
                                'type' => 'string',
                                'example' => 'ecs:ModifyInstanceNetworkSpec',
                              ),
                            ),
                          ),
                        ),
                        'get' => 
                        array (
                          'description' => '查询操作关联信息。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'permissions' => 
                            array (
                              'description' => '所需RAM权限信息集合。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => 'RAM权限。',
                                'type' => 'string',
                                'example' => 'ecs:DescribeInstanceAttachmentAttributes',
                              ),
                            ),
                          ),
                        ),
                        'list' => 
                        array (
                          'description' => '列举操作关联信息。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'permissions' => 
                            array (
                              'description' => '所需RAM权限信息集合。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => 'RAM权限。',
                                'type' => 'string',
                                'example' => 'ecs:DescribeInstances',
                              ),
                            ),
                          ),
                        ),
                        'delete' => 
                        array (
                          'description' => '删除操作关联信息。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'permissions' => 
                            array (
                              'description' => '所需RAM权限信息集合。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => 'RAM权限。',
                                'type' => 'string',
                                'example' => 'ecs:DeleteInstance',
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
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"totalCount\\": 20,\\n  \\"nextToken\\": \\"ECS::Disk\\",\\n  \\"requestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3****\\",\\n  \\"maxResults\\": 10,\\n  \\"resourceTypes\\": [\\n    {\\n      \\"product\\": \\"ECS\\",\\n      \\"resourceType\\": \\"Instance\\",\\n      \\"info\\": {\\n        \\"title\\": \\"Instance\\",\\n        \\"description\\": \\"An ECS instance is equivalent to a virtual machine, including the most basic computing components such as CPU, memory, operating system, network, and disk. You can easily customize and change the configuration of the instance. You have full control over the virtual machine.\\",\\n        \\"chargeType\\": \\"paid\\",\\n        \\"deliveryScope\\": \\"region\\"\\n      },\\n      \\"properties\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      },\\n      \\"primaryIdentifier\\": \\"/properties/InstanceId\\",\\n      \\"required\\": [\\n        \\"RegionId\\"\\n      ],\\n      \\"publicProperties\\": [\\n        \\"/properties/Description\\"\\n      ],\\n      \\"readOnlyProperties\\": [\\n        \\"/properties/CreateTime\\"\\n      ],\\n      \\"filterProperties\\": [\\n        \\"/properties/ResourceGroupId\\"\\n      ],\\n      \\"updateTypeProperties\\": [\\n        \\"/properties/InstanceName\\"\\n      ],\\n      \\"sensitiveInfoProperties\\": [\\n        \\"/properties/VncPassword\\"\\n      ],\\n      \\"createOnlyProperties\\": [\\n        \\"/properties/AutoRenew\\"\\n      ],\\n      \\"updateOnlyProperties\\": [\\n        \\"/properties/DryRun\\"\\n      ],\\n      \\"getOnlyProperties\\": [\\n        \\"/properties/DryRun\\\\n\\"\\n      ],\\n      \\"listOnlyProperties\\": [\\n        \\"/properties/DryRun\\"\\n      ],\\n      \\"deleteOnlyProperties\\": [\\n        \\"/properties/ForceDelete\\"\\n      ],\\n      \\"getResponseProperties\\": [\\n        \\"/properties/NetworkInterfaces/items/properties/IpvSets\\"\\n      ],\\n      \\"listResponseProperties\\": [\\n        \\"/properties/InstanceId\\"\\n      ],\\n      \\"handlers\\": {\\n        \\"create\\": {\\n          \\"permissions\\": [\\n            \\"ecs:CreateInstance\\"\\n          ]\\n        },\\n        \\"update\\": {\\n          \\"permissions\\": [\\n            \\"ecs:ModifyInstanceNetworkSpec\\"\\n          ]\\n        },\\n        \\"get\\": {\\n          \\"permissions\\": [\\n            \\"ecs:DescribeInstanceAttachmentAttributes\\"\\n          ]\\n        },\\n        \\"list\\": {\\n          \\"permissions\\": [\\n            \\"ecs:DescribeInstances\\"\\n          ]\\n        },\\n        \\"delete\\": {\\n          \\"permissions\\": [\\n            \\"ecs:DeleteInstance\\"\\n          ]\\n        }\\n      }\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '列举资源类型',
      'description' => 'GET /api/v1/providers/{provider}/products/{product}/resourceTypes。',
    ),
    'CreateResource' => 
    array (
      'summary' => '用户通过此接口创建资源。',
      'path' => '/api/v1/providers/{provider}/products/{product}/resources/*',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
        'riskType' => 'none',
        'chargeType' => 'paid',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'requestPath',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '请求路径。格式为：
/api/v1/providers/{provider}/products/{product}/resources/{parentResourcePath}/{resourceTypeCode}

请求路径中变量说明：

provider: 云厂商，目前只支持Aliyun。

product: 产品Code。

parentResourcePath: 父资源路径。以Redis Account为例，Redis DBInstance是Account的父资源，那么parentResourcePath格式为：父资源Code/父资源ID（DBInstance/r-8vbf5abe31c9****）。

resourceTypeCode: 资源Code。资源Code为资源类型resourceType（父资源Code/子资源Code）的后一部分。以Redis Account为例，resourceType为DBInstance/Account，resourceTypeCode为Account。

示例如下：

Redis DBInstance: /api/v1/providers/Aliyun/products/Redis/resources/DBInstance

Redis Account: /api/v1/providers/Aliyun/products/Redis/resources/Instance/r-8vbf5abe31cxxxxx/Account

ECS Instance: /api/v1/providers/Aliyun/products/ECS/resources/Instance

RDS Instance: /api/v1/providers/Aliyun/products/RDS/resources/DBInstance

VPC VPC: /api/v1/providers/Aliyun/products/VPC/resources/VPC

SLB LoadBalancer: /api/v1/providers/Aliyun/products/SLB/resources/LoadBalancer

OSS Bucket: /api/v1/providers/Aliyun/products/OSS/resources/Bucket',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '/api/v1/providers/Aliyun/products/Redis/resources/DBInstance/r-8vbf5abe31cxxxxx/Account',
          ),
        ),
        1 => 
        array (
          'name' => 'regionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。若云产品是region化产品，则此参数为必填。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-beijing',
          ),
        ),
        2 => 
        array (
          'name' => 'clientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '幂等参数。若云产品支持幂等能力，则传入生效。',
            'type' => 'string',
            'required' => false,
            'example' => '1e810dfe1468721d0664a49b9d9f74f4',
          ),
        ),
        3 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求Body。资源属性，以json的形式传入。',
            'type' => 'object',
            'required' => false,
            'example' => '{
     "AccountName": "cctest",
     "AccountPassword": "Aa1234****"
}',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'x-acs-cloudcontrol-timeout' => 
            array (
              'schema' => 
              array (
                'type' => 'string',
                'backendName' => 'retry-timeout',
              ),
            ),
          ),
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => '返回结构。',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'title' => '请求id',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3****
',
              ),
              'resourceId' => 
              array (
                'title' => '资源id',
                'description' => '资源ID。',
                'type' => 'string',
                'example' => 'cctest',
              ),
              'taskId' => 
              array (
                'title' => '任务id',
                'description' => '异步任务ID。当本次操作为异步时，此字段返回，此时Http状态码为202。',
                'type' => 'string',
                'example' => 'task-433aead756057fff8189a7ce5****
',
              ),
              'resourcePath' => 
              array (
                'title' => '资源路径',
                'description' => '资源路径。相对资源id，资源路径会包含完整的资源定位（父资源/子资源）。',
                'type' => 'string',
                'example' => 'Instance/r-8vbf5abe31c9c4d4/Account/cctest',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3****\\\\n\\",\\n  \\"resourceId\\": \\"cctest\\",\\n  \\"taskId\\": \\"task-433aead756057fff8189a7ce5****\\\\n\\",\\n  \\"resourcePath\\": \\"Instance/r-8vbf5abe31c9c4d4/Account/cctest\\"\\n}","type":"json"}]',
      'title' => '创建资源',
      'description' => '用户可前往[在线调试API门户](https://next.api.aliyun.com/cloudcontrol)查看资源文档和体验Cloud Control API。',
    ),
    'DeleteResource' => 
    array (
      'summary' => '用户通过此接口删除资源。',
      'path' => '/api/v1/providers/{provider}/products/{product}/resources/*',
      'methods' => 
      array (
        0 => 'delete',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
        'riskType' => 'high',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'requestPath',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '请求路径。格式为：
/api/v1/providers/{provider}/products/{product}/resources/{parentResourcePath}/{resourceTypeCode}/{resourceId}

请求路径中变量说明：

provider: 云厂商，目前只支持Aliyun。

product: 产品Code。

parentResourcePath: 父资源路径。以Redis Account为例，Redis DBInstance是Account的父资源，那么parentResourcePath格式为：父资源Code/父资源ID（DBInstance/r-8vbf5abe31c9****）。

resourceTypeCode: 资源Code。资源Code为资源类型resourceType（父资源Code/子资源Code）的后一部分。以Redis Account为例，resourceType为DBInstance/Account，resourceTypeCode为Account。

resourceId: 资源ID。

示例如下：

Redis DBInstance: /api/v1/providers/Aliyun/products/Redis/resources/DBInstance/r-8vbf5abe31c9****

Redis Account: /api/v1/providers/Aliyun/products/Redis/resources/Instance/r-8vbf5abe31cxxxxx/Account/cctest****

ECS Instance: /api/v1/providers/Aliyun/products/ECS/resources/Instance/i-123****

RDS Instance: /api/v1/providers/Aliyun/products/RDS/resources/DBInstance/r-123****

VPC VPC: /api/v1/providers/Aliyun/products/VPC/resources/VPC/vpc-123****

SLB LoadBalancer: /api/v1/providers/Aliyun/products/SLB/resources/LoadBalancer/lb-123****

OSS Bucket: /api/v1/providers/Aliyun/products/OSS/resources/Bucket/cctest****',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '/api/v1/providers/Aliyun/products/Redis/resources/Instance/r-8vbf5abe31cxxxxx/Account/cctest',
          ),
        ),
        1 => 
        array (
          'name' => 'regionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。若云产品是region化产品，则此参数为必填。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-beijing
',
          ),
        ),
        2 => 
        array (
          'name' => 'clientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '幂等参数。若云产品支持幂等能力，则传入生效。',
            'type' => 'string',
            'required' => false,
            'example' => '1e810dfe1468721d0664a49b9d9f74f4
',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'x-acs-cloudcontrol-timeout' => 
            array (
              'schema' => 
              array (
                'type' => 'string',
                'backendName' => 'retry-timeout',
              ),
            ),
          ),
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => '返回结构。',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3****
',
              ),
              'taskId' => 
              array (
                'description' => '异步任务ID。当本次操作为异步时，此字段返回，此时Http状态码为202。',
                'type' => 'string',
                'example' => 'task-433aead756057fff8189a7ce5****
',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3****\\\\n\\",\\n  \\"taskId\\": \\"task-433aead756057fff8189a7ce5****\\\\n\\"\\n}","type":"json"}]',
      'title' => '删除资源',
      'description' => '用户可前往[在线调试API门户](https://next.api.aliyun.com/cloudcontrol)查看资源文档和体验Cloud Control API。',
    ),
    'GetResources' => 
    array (
      'summary' => '用户通过此接口查询资源。',
      'path' => '/api/v1/providers/{provider}/products/{product}/resources/*',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'requestPath',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '请求路径。根据不同的请求路径，用户可分别调用资源List和Get能力。

1.List: /api/v1/providers/{provider}/products/{product}/resources/{parentResourcePath}/{resourceTypeCode}

2.Get: /api/v1/providers/{provider}/products/{product}/resources/{parentResourcePath}/{resourceTypeCode}/{resourceId}

请求路径中变量说明：

provider: 云厂商，目前只支持Aliyun。

product: 产品Code。

parentResourcePath: 父资源路径。以Redis Account为例，Redis DBInstance是Account的父资源，那么parentResourcePath格式为：父资源Code/父资源ID（DBInstance/r-8vbf5abe31c9****）。

resourceTypeCode: 资源Code。资源Code为资源类型resourceType（父资源Code/子资源Code）的后一部分。以Redis Account为例，resourceType为DBInstance/Account，resourceTypeCode为Account。

resourceId: 资源ID。

示例如下：

Redis DBInstance List: /api/v1/providers/Aliyun/products/Redis/resources/DBInstance

Redis DBInstance Get: /api/v1/providers/Aliyun/products/Redis/resources/Instance/r-8vbf5abe31cxxxxx

ECS Instance List: /api/v1/providers/Aliyun/products/ECS/resources/Instance

ECS Instance Get: /api/v1/providers/Aliyun/products/ECS/resources/Instance/i-123****

RDS Instance List: /api/v1/providers/Aliyun/products/RDS/resources/DBInstance

RDS Instance Get: /api/v1/providers/Aliyun/products/RDS/resources/DBInstance/r-123****

VPC VPC List: /api/v1/providers/Aliyun/products/VPC/resources/VPC

VPC VPC Get: /api/v1/providers/Aliyun/products/VPC/resources/VPC/vpc-123****

SLB LoadBalancer List: /api/v1/providers/Aliyun/products/SLB/resources/LoadBalancer

SLB LoadBalancer Get: /api/v1/providers/Aliyun/products/SLB/resources/LoadBalancer/lb-123****

OSS Bucket List: /api/v1/providers/Aliyun/products/OSS/resources/Bucket

OSS Bucket Get: /api/v1/providers/Aliyun/products/OSS/resources/Bucket/cctest****',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '/api/v1/providers/Aliyun/products/Redis/resources/DBInstance/r-8vbf5abe31c9****',
          ),
        ),
        1 => 
        array (
          'name' => 'regionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。若云产品是region化产品，则此参数为必填。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-beijing
',
          ),
        ),
        2 => 
        array (
          'name' => 'filter',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '过滤条件。json格式，可以将部分资源属性作为过滤条件。',
            'type' => 'object',
            'required' => false,
          ),
        ),
        3 => 
        array (
          'name' => 'nextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用来标记当前开始读取的位置，置空表示从头开始。',
            'type' => 'string',
            'required' => false,
            'example' => 'AAAAAdDWBF2****',
          ),
        ),
        4 => 
        array (
          'name' => 'maxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时每页行数，最大不能超过100。',
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
            'description' => '返回结构。',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3****
',
              ),
              'totalCount' => 
              array (
                'description' => '本次请求条件下的数据总量。List操作返回。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '20',
              ),
              'nextToken' => 
              array (
                'description' => '表示当前调用返回读取到的位置，空代表数据已经读取完毕。List操作返回。',
                'type' => 'string',
                'example' => 'AAAAAdDWBF2****
',
              ),
              'maxResults' => 
              array (
                'description' => '本次请求所返回的最大记录条数。List操作返回。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'resource' => 
              array (
                'description' => '指定资源。Get操作返回。',
                'type' => 'object',
                'properties' => 
                array (
                  'resourceAttributes' => 
                  array (
                    'description' => '资源属性（json格式）。',
                    'type' => 'object',
                    'example' => '{"Status":"Available","Description":"","AccountPrivilege":"RoleReadWrite","InstanceId":"r-8vbf5abe31c9c4d4","RegionId":"cn-zhangjiakou","AccountType":"Normal","TypeInfo":{},"AccountName":"cctest"}',
                  ),
                  'resourceId' => 
                  array (
                    'description' => '资源ID。',
                    'type' => 'string',
                    'example' => 'cctest
',
                  ),
                ),
              ),
              'resources' => 
              array (
                'description' => '资源列表。List操作返回。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '资源。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'resourceId' => 
                    array (
                      'description' => '资源ID。',
                      'type' => 'string',
                      'example' => 'cctest',
                    ),
                    'resourceAttributes' => 
                    array (
                      'description' => '资源属性（json格式）。',
                      'type' => 'object',
                      'example' => '{"Status":"Available","Description":"","AccountPrivilege":"RoleReadWrite","InstanceId":"r-8vbf5abe31c9c4d4","RegionId":"cn-zhangjiakou","AccountType":"Normal","TypeInfo":{},"AccountName":"cctest"}',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3****\\\\n\\",\\n  \\"totalCount\\": 20,\\n  \\"nextToken\\": \\"AAAAAdDWBF2****\\\\n\\",\\n  \\"maxResults\\": 10,\\n  \\"resource\\": {\\n    \\"resourceAttributes\\": {\\n      \\"Status\\": \\"Available\\",\\n      \\"Description\\": \\"\\",\\n      \\"AccountPrivilege\\": \\"RoleReadWrite\\",\\n      \\"InstanceId\\": \\"r-8vbf5abe31c9c4d4\\",\\n      \\"RegionId\\": \\"cn-zhangjiakou\\",\\n      \\"AccountType\\": \\"Normal\\",\\n      \\"TypeInfo\\": {},\\n      \\"AccountName\\": \\"cctest\\"\\n    },\\n    \\"resourceId\\": \\"cctest\\\\n\\"\\n  },\\n  \\"resources\\": [\\n    {\\n      \\"resourceId\\": \\"cctest\\",\\n      \\"resourceAttributes\\": {\\n        \\"Status\\": \\"Available\\",\\n        \\"Description\\": \\"\\",\\n        \\"AccountPrivilege\\": \\"RoleReadWrite\\",\\n        \\"InstanceId\\": \\"r-8vbf5abe31c9c4d4\\",\\n        \\"RegionId\\": \\"cn-zhangjiakou\\",\\n        \\"AccountType\\": \\"Normal\\",\\n        \\"TypeInfo\\": {},\\n        \\"AccountName\\": \\"cctest\\"\\n      }\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询资源',
      'description' => '用户可前往[在线调试API门户](https://next.api.aliyun.com/cloudcontrol)查看资源文档和体验Cloud Control API。

此API包括资源的Get和List功能，根据不同的请求路径，用户可分别调用资源List和Get能力。',
    ),
    'UpdateResource' => 
    array (
      'summary' => '用户通过此接口更新资源。',
      'path' => '/api/v1/providers/{provider}/products/{product}/resources/*',
      'methods' => 
      array (
        0 => 'put',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'riskType' => 'high',
        'chargeType' => 'paid',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'requestPath',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '请求路径。格式为：
/api/v1/providers/{provider}/products/{product}/resources/{parentResourcePath}/{resourceTypeCode}/{resourceId}

请求路径中变量说明：

provider: 云厂商，目前只支持Aliyun。

product: 产品Code。

parentResourcePath: 父资源路径。以Redis Account为例，Redis DBInstance是Account的父资源，那么parentResourcePath格式为：父资源Code/父资源ID（DBInstance/r-8vbf5abe31c9****）。

resourceTypeCode: 资源Code。资源Code为资源类型resourceType（父资源Code/子资源Code）的后一部分。以Redis Account为例，resourceType为DBInstance/Account，resourceTypeCode为Account。

resourceId: 资源ID。

示例如下：

Redis DBInstance: /api/v1/providers/Aliyun/products/Redis/resources/DBInstance/r-8vbf5abe31c9****

Redis Account: /api/v1/providers/Aliyun/products/Redis/resources/Instance/r-8vbf5abe31cxxxxx/Account/cctest****

ECS Instance: /api/v1/providers/Aliyun/products/ECS/resources/Instance/i-123****

RDS Instance: /api/v1/providers/Aliyun/products/RDS/resources/DBInstance/r-123****

VPC VPC: /api/v1/providers/Aliyun/products/VPC/resources/VPC/vpc-123****

SLB LoadBalancer: /api/v1/providers/Aliyun/products/SLB/resources/LoadBalancer/lb-123****

OSS Bucket: /api/v1/providers/Aliyun/products/OSS/resources/Bucket/cctest****',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '/api/v1/providers/Aliyun/products/Redis/resources/Instance/r-8vbf5abe31cxxxxx/Account/cctest',
          ),
        ),
        1 => 
        array (
          'name' => 'regionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。若云产品是region化产品，则此参数为必填。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-beijing
',
          ),
        ),
        2 => 
        array (
          'name' => 'clientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '幂等参数。若云产品支持幂等能力，则传入生效。',
            'type' => 'string',
            'required' => false,
            'example' => '1e810dfe1468721d0664a49b9d9f74f4',
          ),
        ),
        3 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求Body。需要更新的资源属性，以json的形式传入。',
            'type' => 'object',
            'required' => false,
            'example' => '{
     "AccountPassword": "4321****",
     "Description": "cctest"
}',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
            'x-acs-cloudcontrol-timeout' => 
            array (
              'schema' => 
              array (
                'type' => 'string',
                'backendName' => 'retry-timeout',
              ),
            ),
          ),
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => '返回结构。',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'title' => '请求id',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3****',
              ),
              'taskId' => 
              array (
                'description' => '异步任务ID。当本次操作为异步时，此字段返回，此时Http状态码为202。',
                'type' => 'string',
                'example' => 'task-433aead756057fff8189a7ce5****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3****\\",\\n  \\"taskId\\": \\"task-433aead756057fff8189a7ce5****\\"\\n}","type":"json"}]',
      'title' => '更新资源',
      'description' => '用户可前往[在线调试API门户](https://next.api.aliyun.com/cloudcontrol)查看资源文档和体验Cloud Control API。

如果更新资源在任何时候失败，云控制 API 不会将资源回滚到先前的状态。

由于资源API目前不支持回滚，当用户遇到API部分失败时，需手动调用GetResources API查看资源最新的状态，然后调用UpdateResource或DeleteResource进行手动补偿（如果有必要）。',
    ),
    'GetTask' => 
    array (
      'summary' => '用户通过此接口查询指定任务详情。',
      'path' => '/api/v1/tasks/{taskId}',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'taskId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '任务id',
            'description' => '任务id。',
            'type' => 'string',
            'required' => true,
            'example' => 'task-433aead756057fff8189a7ce5****',
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
            'description' => '返回结构。',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3****',
              ),
              'task' => 
              array (
                'description' => '任务信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'taskId' => 
                  array (
                    'description' => '任务ID。',
                    'type' => 'string',
                    'example' => 'task-433aead756057fff8189a7ce5****',
                  ),
                  'product' => 
                  array (
                    'description' => '产品code。',
                    'type' => 'string',
                    'example' => 'ECS',
                  ),
                  'resourceType' => 
                  array (
                    'description' => '资源类型。',
                    'type' => 'string',
                    'example' => 'Instance',
                  ),
                  'regionId' => 
                  array (
                    'description' => '地域ID。',
                    'type' => 'string',
                    'example' => 'cn-beijing',
                  ),
                  'resourceId' => 
                  array (
                    'description' => '资源ID。',
                    'type' => 'string',
                    'example' => 'i-8vbascjthm7kzhp3****
',
                  ),
                  'resourcePath' => 
                  array (
                    'description' => '资源路径。相对资源id，资源路径会包含完整的资源定位（父资源/子资源）。',
                    'type' => 'string',
                    'example' => 'Instance/i-8vbascjthm7kzhp3****
Instance/r-8vbf5abe31c9c4d4/Account/cctest',
                  ),
                  'taskAction' => 
                  array (
                    'description' => '任务操作类型（Create | Update | Delete）。',
                    'type' => 'string',
                    'enumValueTitles' => 
                    array (
                      'Delete' => 'Delete',
                      'Create' => 'Create',
                      'Update' => 'Update',
                    ),
                    'example' => 'Create',
                  ),
                  'status' => 
                  array (
                    'description' => '任务状态。

Pending 排队中

Running 进行中

Succeeded 成功完成

Failed 失败

Cancelling 取消中

Cancelled 已取消。',
                    'type' => 'string',
                    'enumValueTitles' => 
                    array (
                      'Succeeded' => 'Succeeded',
                      'Failed' => 'Failed',
                      'Running' => 'Running',
                      'Cancelled' => 'Cancelled',
                      'Pending' => 'Pending',
                      'Cancelling' => 'Cancelling',
                    ),
                    'example' => 'Succeeded',
                  ),
                  'error' => 
                  array (
                    'description' => '任务错误信息。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'code' => 
                      array (
                        'description' => '错误码。',
                        'type' => 'string',
                        'example' => 'OperationFailure.OperationFailed',
                      ),
                      'message' => 
                      array (
                        'description' => '错误信息',
                        'type' => 'string',
                        'example' => '{
     "requestId": "123****",
     "errorCode": "InvalidRamUser.NoPermission",
     "errorMsg": "Ram user is not authorized to perform the operation."
}',
                      ),
                    ),
                  ),
                  'createTime' => 
                  array (
                    'description' => '任务创建时间',
                    'type' => 'string',
                    'example' => '2022-10-09T00:46:03Z',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3****\\",\\n  \\"task\\": {\\n    \\"taskId\\": \\"task-433aead756057fff8189a7ce5****\\",\\n    \\"product\\": \\"ECS\\",\\n    \\"resourceType\\": \\"Instance\\",\\n    \\"regionId\\": \\"cn-beijing\\",\\n    \\"resourceId\\": \\"i-8vbascjthm7kzhp3****\\\\n\\",\\n    \\"resourcePath\\": \\"Instance/i-8vbascjthm7kzhp3****\\\\nInstance/r-8vbf5abe31c9c4d4/Account/cctest\\",\\n    \\"taskAction\\": \\"Create\\",\\n    \\"status\\": \\"Succeeded\\",\\n    \\"error\\": {\\n      \\"code\\": \\"OperationFailure.OperationFailed\\",\\n      \\"message\\": \\"{\\\\n     \\\\\\"requestId\\\\\\": \\\\\\"123****\\\\\\",\\\\n     \\\\\\"errorCode\\\\\\": \\\\\\"InvalidRamUser.NoPermission\\\\\\",\\\\n     \\\\\\"errorMsg\\\\\\": \\\\\\"Ram user is not authorized to perform the operation.\\\\\\"\\\\n}\\"\\n    },\\n    \\"createTime\\": \\"2022-10-09T00:46:03Z\\"\\n  }\\n}","type":"json"}]',
      'title' => '查询任务',
      'description' => 'GET /api/v1/tasks/{taskId}。',
    ),
    'CancelTask' => 
    array (
      'summary' => '用户通过此接口取消指定任务详情。',
      'path' => '/api/v1/tasks/{taskId}/operation/cancel',
      'methods' => 
      array (
        0 => 'put',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'taskId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '任务id',
            'description' => '任务id。',
            'type' => 'string',
            'required' => true,
            'example' => 'task-433aead756057fff2913e7ce5****',
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
            'description' => '返回结构。',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3****\\"\\n}","type":"json"}]',
      'title' => '取消任务',
      'description' => 'PUT /api/v1/tasks/{taskId}/operation/cancel

仅状态为Pending或Running的Task可以被取消。

虽然调用CancelTask可以取消Cloud Control API 执行的操作，它不会终止可能已经在下游云产品服务上启动的任何操作。',
    ),
    'ListDataSources' => 
    array (
      'summary' => '用户通过此接口查询资源属性可选值（RegionID、ZoneId等）。',
      'path' => '/api/v1/providers/{provider}/products/{product}/dataSources/*',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'requestPath',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '请求路径。格式为：
 /api/v1/providers/{provider}/products/{product}/dataSources/{resourceType}

请求路径中变量说明：

provider: 云厂商，目前只支持Aliyun。

product: 产品Code。

resourceType: 资源类型。

示例如下：

Redis DBInstance: /api/v1/providers/Aliyun/products/Redis/dataSources/DBInstance',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '/api/v1/providers/Aliyun/products/Redis/dataSources/DBInstance',
          ),
        ),
        1 => 
        array (
          'name' => 'attributeName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '属性名称（当前支持RegionId）。',
            'type' => 'string',
            'required' => true,
            'example' => 'RegionId',
          ),
        ),
        2 => 
        array (
          'name' => 'filter',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '指定过滤条件。json格式：{"key1":"value1"}。',
            'type' => 'object',
            'required' => false,
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
            'description' => '返回结构。',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3****',
              ),
              'dataSources' => 
              array (
                'description' => '数据列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '数据。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'id' => 
                    array (
                      'description' => '数据ID。',
                      'type' => 'string',
                      'example' => 'cn-beijing',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3****\\",\\n  \\"dataSources\\": [\\n    {\\n      \\"id\\": \\"cn-beijing\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询资源属性可选值',
    ),
    'GetPrice' => 
    array (
      'summary' => '该接口为询价接口，用户可通过此接口查询资源价格。',
      'path' => '/api/v1/providers/{provider}/products/{product}/price/*',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'requestPath',
          'in' => 'path',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => '请求路径。格式为： /api/v1/providers/{provider}/products/{product}/price/{resourceType}

请求路径中变量说明：

provider: 云厂商，目前只支持Aliyun。

product: 产品Code。

resourceType: 资源Type。以Redis Account为例，resourceType为DBInstance/Account

目前支持询价的资源列表如下：

Redis DBInstance: /api/v1/providers/aliyun/products/Redis/price/DBInstance

ECS Instance: /api/v1/providers/aliyun/products/ECS/price/Instance

RDS DBInstance: /api/v1/providers/aliyun/products/RDS/price/DBInstance

SLB LoadBalancer: /api/v1/providers/aliyun/products/SLB/price/LoadBalancer

ClickHouse DBCluster: /api/v1/providers/aliyun/products/ClickHouse/price/DBCluster

AliKafka Instance: /api/v1/providers/aliyun/products/AliKafka/price/Instance',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              '/api/v1/providers/aliyun/products/Redis/price/DBInstance' => 'Redis DBInstance',
              '/api/v1/providers/aliyun/products/AliKafka/price/Instance' => 'AliKafka Instance',
              '/api/v1/providers/aliyun/products/ECS/price/Instance' => 'ECS Instance',
              '/api/v1/providers/aliyun/products/ClickHouse/price/DBCluster' => 'ClickHouse DBCluster',
              '/api/v1/providers/aliyun/products/RDS/price/DBInstance' => 'RDS DBInstance',
              '/api/v1/providers/aliyun/products/SLB/price/LoadBalancer' => 'SLB LoadBalancer',
            ),
            'example' => '/api/v1/providers/aliyun/products/SLB/price/LoadBalancer',
          ),
        ),
        1 => 
        array (
          'name' => 'regionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。若云产品是region化产品，则此参数为必填。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-beijing
',
          ),
        ),
        2 => 
        array (
          'name' => 'resourceAttributes',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '询价属性（json格式）。',
            'type' => 'object',
            'required' => false,
            'example' => '{
        "LoadBalancerName": "cc-test",
        "LoadBalancerSpec": "slb.s3.small",
        "InternetChargeType": "paybybandwidth",
        "AddressType": "internet",
        "PaymentType": "PayAsYouGo",
        "Bandwidth": 6
      }',
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
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID',
                'type' => 'string',
                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3****',
              ),
              'price' => 
              array (
                'description' => '价格',
                'type' => 'object',
                'properties' => 
                array (
                  'currency' => 
                  array (
                    'description' => '币种。取值范围：CNY：人民币。USD：美元。JPY：日元。',
                    'type' => 'string',
                    'enumValueTitles' => 
                    array (
                      'JPY' => 'JPY',
                      'USD' => 'USD',
                      'CNY' => 'CNY',
                    ),
                    'example' => 'CNY',
                  ),
                  'originalPrice' => 
                  array (
                    'description' => '原价',
                    'type' => 'number',
                    'format' => 'float',
                    'example' => '760.0',
                  ),
                  'discountPrice' => 
                  array (
                    'description' => '折扣',
                    'type' => 'number',
                    'format' => 'float',
                    'example' => '0.0',
                  ),
                  'tradePrice' => 
                  array (
                    'description' => '优惠价',
                    'type' => 'number',
                    'format' => 'float',
                    'example' => '0.0',
                  ),
                  'moduleDetails' => 
                  array (
                    'description' => '计价模块价格详情',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '计价模块价格详情',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'costAfterDiscount' => 
                        array (
                          'description' => '优惠价',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '0.02',
                        ),
                        'invoiceDiscount' => 
                        array (
                          'description' => '折扣',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '0.0',
                        ),
                        'priceType' => 
                        array (
                          'description' => '价格类型',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '1.0',
                        ),
                        'originalCost' => 
                        array (
                          'description' => '原价',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '1000.0',
                        ),
                        'moduleCode' => 
                        array (
                          'description' => '计价模块标识',
                          'type' => 'string',
                          'example' => 'InstanceRent',
                        ),
                        'moduleName' => 
                        array (
                          'description' => '计价模块名称',
                          'type' => 'string',
                          'example' => 'InstanceRent',
                        ),
                      ),
                    ),
                  ),
                  'promotionDetails' => 
                  array (
                    'description' => '优惠详情',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '优惠详情',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'promotionId' => 
                        array (
                          'description' => '优惠标识',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '数据盘享8.5折',
                        ),
                        'promotionName' => 
                        array (
                          'description' => '优惠名称',
                          'type' => 'string',
                          'example' => '数据盘享8.5折',
                        ),
                        'promotionDesc' => 
                        array (
                          'description' => '优惠描述',
                          'type' => 'string',
                          'example' => '37284',
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
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3****\\",\\n  \\"price\\": {\\n    \\"currency\\": \\"CNY\\",\\n    \\"originalPrice\\": 760,\\n    \\"discountPrice\\": 0,\\n    \\"tradePrice\\": 0,\\n    \\"moduleDetails\\": [\\n      {\\n        \\"costAfterDiscount\\": 0.02,\\n        \\"invoiceDiscount\\": 0,\\n        \\"priceType\\": 1,\\n        \\"originalCost\\": 1000,\\n        \\"moduleCode\\": \\"InstanceRent\\",\\n        \\"moduleName\\": \\"InstanceRent\\"\\n      }\\n    ],\\n    \\"promotionDetails\\": [\\n      {\\n        \\"promotionId\\": 0,\\n        \\"promotionName\\": \\"数据盘享8.5折\\",\\n        \\"promotionDesc\\": \\"37284\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '资源询价',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-qingdao',
      'endpoint' => 'cloudcontrol.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'cn-beijing',
      'endpoint' => 'cloudcontrol.aliyuncs.com',
    ),
    2 => 
    array (
      'regionId' => 'cn-zhangjiakou',
      'endpoint' => 'cloudcontrol.aliyuncs.com',
    ),
    3 => 
    array (
      'regionId' => 'cn-huhehaote',
      'endpoint' => 'cloudcontrol.aliyuncs.com',
    ),
    4 => 
    array (
      'regionId' => 'cn-wulanchabu',
      'endpoint' => 'cloudcontrol.aliyuncs.com',
    ),
    5 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'cloudcontrol.aliyuncs.com',
    ),
    6 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'cloudcontrol.aliyuncs.com',
    ),
    7 => 
    array (
      'regionId' => 'cn-nanjing',
      'endpoint' => 'cloudcontrol.aliyuncs.com',
    ),
    8 => 
    array (
      'regionId' => 'cn-fuzhou',
      'endpoint' => 'cloudcontrol.aliyuncs.com',
    ),
    9 => 
    array (
      'regionId' => 'cn-shenzhen',
      'endpoint' => 'cloudcontrol.aliyuncs.com',
    ),
    10 => 
    array (
      'regionId' => 'cn-heyuan',
      'endpoint' => 'cloudcontrol.aliyuncs.com',
    ),
    11 => 
    array (
      'regionId' => 'cn-guangzhou',
      'endpoint' => 'cloudcontrol.aliyuncs.com',
    ),
    12 => 
    array (
      'regionId' => 'cn-chengdu',
      'endpoint' => 'cloudcontrol.aliyuncs.com',
    ),
    13 => 
    array (
      'regionId' => 'cn-hongkong',
      'endpoint' => 'cloudcontrol.ap-southeast-1.aliyuncs.com',
    ),
    14 => 
    array (
      'regionId' => 'ap-northeast-1',
      'endpoint' => 'cloudcontrol.ap-southeast-1.aliyuncs.com',
    ),
    15 => 
    array (
      'regionId' => 'ap-northeast-2',
      'endpoint' => 'cloudcontrol.ap-southeast-1.aliyuncs.com',
    ),
    16 => 
    array (
      'regionId' => 'ap-southeast-1',
      'endpoint' => 'cloudcontrol.ap-southeast-1.aliyuncs.com',
    ),
    17 => 
    array (
      'regionId' => 'ap-southeast-2',
      'endpoint' => 'cloudcontrol.ap-southeast-1.aliyuncs.com',
    ),
    18 => 
    array (
      'regionId' => 'ap-southeast-3',
      'endpoint' => 'cloudcontrol.ap-southeast-1.aliyuncs.com',
    ),
    19 => 
    array (
      'regionId' => 'ap-southeast-5',
      'endpoint' => 'cloudcontrol.ap-southeast-1.aliyuncs.com',
    ),
    20 => 
    array (
      'regionId' => 'ap-southeast-6',
      'endpoint' => 'cloudcontrol.ap-southeast-1.aliyuncs.com',
    ),
    21 => 
    array (
      'regionId' => 'us-east-1',
      'endpoint' => 'cloudcontrol.ap-southeast-1.aliyuncs.com',
    ),
    22 => 
    array (
      'regionId' => 'us-west-1',
      'endpoint' => 'cloudcontrol.ap-southeast-1.aliyuncs.com',
    ),
    23 => 
    array (
      'regionId' => 'eu-west-1',
      'endpoint' => 'cloudcontrol.ap-southeast-1.aliyuncs.com',
    ),
    24 => 
    array (
      'regionId' => 'eu-central-1',
      'endpoint' => 'cloudcontrol.ap-southeast-1.aliyuncs.com',
    ),
    25 => 
    array (
      'regionId' => 'ap-south-1',
      'endpoint' => 'cloudcontrol.ap-southeast-1.aliyuncs.com',
    ),
    26 => 
    array (
      'regionId' => 'me-east-1',
      'endpoint' => 'cloudcontrol.ap-southeast-1.aliyuncs.com',
    ),
    27 => 
    array (
      'regionId' => 'ap-southeast-7',
      'endpoint' => 'cloudcontrol.ap-southeast-1.aliyuncs.com',
    ),
    28 => 
    array (
      'regionId' => 'me-central-1',
      'endpoint' => 'cloudcontrol.ap-southeast-1.aliyuncs.com',
    ),
  ),
);
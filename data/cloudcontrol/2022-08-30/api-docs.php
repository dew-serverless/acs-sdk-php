<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'V3',
        'product' => 'cloudcontrol',
        'version' => '2022-08-30',
    ],
    'directories' => [
        [
            'id' => 177235,
            'title' => '元数据查询',
            'type' => 'directory',
            'children' => [
                'GetResourceType',
                'ListProducts',
                'ListResourceTypes',
            ],
        ],
        [
            'id' => 177238,
            'title' => '资源管理',
            'type' => 'directory',
            'children' => [
                'CreateResource',
                'DeleteResource',
                'GetResources',
                'UpdateResource',
            ],
        ],
        [
            'id' => 177243,
            'title' => '异步任务管理',
            'type' => 'directory',
            'children' => [
                'GetTask',
                'CancelTask',
            ],
        ],
        [
            'id' => 177246,
            'title' => '数据查询',
            'type' => 'directory',
            'children' => [
                'ListDataSources',
            ],
        ],
        [
            'id' => 188598,
            'title' => '其他',
            'type' => 'directory',
            'children' => [
                'GetPrice',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'GetResourceType' => [
            'summary' => '用户通过此接口查询指定的资源元数据详情。',
            'path' => '/api/v1/providers/{provider}/products/{product}/resourceTypes/*',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
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
                    'name' => 'x-acs-accept-language',
                    'in' => 'header',
                    'schema' => [
                        'title' => 'A short description of struct',
                        'description' => '选择返回产品的语言。'."\n"
                            ."\n"
                            .'zh_CH：中文 （默认）'."\n"
                            ."\n"
                            .'en_US：英文。',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'zh_CH' => 'zh_CH',
                            'en_US' => 'en_US',
                        ],
                        'example' => 'zh_CH',
                    ],
                ],
                [
                    'name' => 'requestPath',
                    'in' => 'path',
                    'schema' => [
                        'description' => '请求路径。格式为：'."\n"
                            .'/api/v1/providers/{provider}/products/{product}/resourceTypes/{resourceType}'."\n"
                            ."\n"
                            .'请求路径中变量说明：'."\n"
                            ."\n"
                            .'provider: 云厂商，目前只支持Aliyun。'."\n"
                            ."\n"
                            .'product: 产品Code。'."\n"
                            ."\n"
                            .'resourceType: 资源类型。'."\n"
                            ."\n"
                            .'示例如下：'."\n"
                            ."\n"
                            .'Redis DBInstance: /api/v1/providers/Aliyun/products/Redis/resourceTypes/DBInstance'."\n"
                            ."\n"
                            .'Redis Account: /api/v1/providers/Aliyun/products/Redis/resourceTypes/DBInstance/Account',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '/api/v1/providers/Aliyun/products/Redis/resourceTypes/DBInstance',
                        'default' => '0',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回结构。',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3****',
                            ],
                            'resourceType' => [
                                'description' => '资源类型。',
                                'type' => 'object',
                                'properties' => [
                                    'product' => [
                                        'description' => '产品Code。',
                                        'type' => 'string',
                                        'example' => 'ECS',
                                    ],
                                    'resourceType' => [
                                        'description' => '资源类型。',
                                        'type' => 'string',
                                        'example' => 'Instance',
                                    ],
                                    'info' => [
                                        'description' => '资源类型基础信息。',
                                        'type' => 'object',
                                        'properties' => [
                                            'title' => [
                                                'description' => '资源类型名称。',
                                                'type' => 'string',
                                                'example' => 'Instance',
                                            ],
                                            'description' => [
                                                'description' => '资源类型描述。',
                                                'type' => 'string',
                                                'example' => 'An ECS instance is equivalent to a virtual machine, including the most basic computing components such as CPU, memory, operating system, network, and disk. You can easily customize and change the configuration of the instance. You have full control over the virtual machine.',
                                            ],
                                            'chargeType' => [
                                                'description' => '付费形式'."\n"
                                                    ."\n"
                                                    .'paid（付费）'."\n"
                                                    .'free（免费）',
                                                'type' => 'string',
                                                'example' => 'paid',
                                            ],
                                            'deliveryScope' => [
                                                'description' => '交付级别 '."\n"
                                                    ."\n"
                                                    .'center（中心化部署级别）'."\n"
                                                    ."\n"
                                                    .'region（地域部署级别）'."\n"
                                                    ."\n"
                                                    .'zone（可用区部署级别）',
                                                'type' => 'string',
                                                'example' => 'region',
                                            ],
                                        ],
                                    ],
                                    'properties' => [
                                        'description' => '资源属性定义，key是属性名，value为属性详细信息。',
                                        'type' => 'object',
                                    ],
                                    'primaryIdentifier' => [
                                        'description' => '资源ID。',
                                        'type' => 'string',
                                        'example' => '/properties/InstanceId'."\n",
                                    ],
                                    'required' => [
                                        'description' => '资源创建必填参数集合。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '资源创建必填参数。',
                                            'type' => 'string',
                                            'example' => 'RegionId',
                                        ],
                                    ],
                                    'publicProperties' => [
                                        'description' => '公共的属性集合，为资源基本属性。非操作私有参数。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '公共属性。',
                                            'type' => 'string',
                                            'example' => '	'."\n"
                                                .'/properties/Description',
                                        ],
                                    ],
                                    'readOnlyProperties' => [
                                        'description' => '只读参数集合，只在list或者get操作中返回，创建及变更时不作为入参。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '只读参数。',
                                            'type' => 'string',
                                            'example' => '/properties/CreateTime',
                                        ],
                                    ],
                                    'filterProperties' => [
                                        'description' => 'list操作时可以作为filter参数的属性集合。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => 'filter参数。',
                                            'type' => 'string',
                                            'example' => '	'."\n"
                                                .'/properties/ResourceGroupId',
                                        ],
                                    ],
                                    'updateTypeProperties' => [
                                        'description' => '可以修改的属性集合。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '可改属性。',
                                            'type' => 'string',
                                            'example' => '/properties/InstanceName',
                                        ],
                                    ],
                                    'sensitiveInfoProperties' => [
                                        'description' => '敏感属性集合，例如密码等。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '敏感属性。',
                                            'type' => 'string',
                                            'example' => '/properties/VncPassword',
                                        ],
                                    ],
                                    'createOnlyProperties' => [
                                        'description' => '创建操作私有参数集合。资源查询操作中不会返回的属性，但是创建操作中需要传入的参数。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '创建操作私有参数。',
                                            'type' => 'string',
                                            'example' => '/properties/AutoRenew',
                                        ],
                                    ],
                                    'updateOnlyProperties' => [
                                        'description' => '更新操作私有参数集合。资源查询操作中不会返回的属性，但是更新操作中需要传入的参数。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '更新操作私有参数。',
                                            'type' => 'string',
                                            'example' => '/properties/DryRun',
                                        ],
                                    ],
                                    'getOnlyProperties' => [
                                        'description' => '查询操作私有参数集合。资源查询操作中不会返回的属性，但是查询操作中需要传入的参数。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '查询操作私有参数。',
                                            'type' => 'string',
                                            'example' => '/properties/DryRun',
                                        ],
                                    ],
                                    'listOnlyProperties' => [
                                        'description' => '列举操作私有参数集合。资源查询操作中不会返回的属性，但是列举操作中需要传入的参数。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '列举操作私有参数。',
                                            'type' => 'string',
                                            'example' => '/properties/DryRun',
                                        ],
                                    ],
                                    'deleteOnlyProperties' => [
                                        'description' => '删除操作私有参数集合。资源查询操作中不会返回的属性，但是删除操作中需要传入的参数。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '删除操作私有参数。',
                                            'type' => 'string',
                                            'example' => '/properties/ForceDelete',
                                        ],
                                    ],
                                    'getResponseProperties' => [
                                        'description' => '查询返回的属性集合。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '查询返回的属性。',
                                            'type' => 'string',
                                            'example' => '/properties/NetworkInterfaces/items/properties/IpvSets',
                                        ],
                                    ],
                                    'listResponseProperties' => [
                                        'description' => '列举返回的属性集合。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '列举返回的属性。',
                                            'type' => 'string',
                                            'example' => '/properties/InstanceId',
                                        ],
                                    ],
                                    'handlers' => [
                                        'description' => '支持的资源操作信息（包括RAM权限）。',
                                        'type' => 'object',
                                        'properties' => [
                                            'create' => [
                                                'description' => '创建操作关联信息。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'permissions' => [
                                                        'description' => '所需RAM权限信息集合。',
                                                        'type' => 'array',
                                                        'items' => [
                                                            'description' => 'RAM权限。',
                                                            'type' => 'string',
                                                            'example' => 'ecs:CreateInstance',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                            'update' => [
                                                'description' => '更新操作关联信息。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'permissions' => [
                                                        'description' => '所需RAM权限信息集合。',
                                                        'type' => 'array',
                                                        'items' => [
                                                            'description' => 'RAM权限。',
                                                            'type' => 'string',
                                                            'example' => 'ecs:ModifyInstanceNetworkSpec',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                            'get' => [
                                                'description' => '查询操作关联信息。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'permissions' => [
                                                        'description' => '所需RAM权限信息集合。',
                                                        'type' => 'array',
                                                        'items' => [
                                                            'description' => 'RAM权限。',
                                                            'type' => 'string',
                                                            'example' => 'ecs:DescribeInstanceAttachmentAttributes',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                            'list' => [
                                                'description' => '列举操作关联信息。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'permissions' => [
                                                        'description' => '所需RAM权限信息集合。',
                                                        'type' => 'array',
                                                        'items' => [
                                                            'description' => 'RAM权限。',
                                                            'type' => 'string',
                                                            'example' => 'ecs:DescribeInstances',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                            'delete' => [
                                                'description' => '删除操作关联信息。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'permissions' => [
                                                        'description' => '所需RAM权限信息集合。',
                                                        'type' => 'array',
                                                        'items' => [
                                                            'description' => 'RAM权限。',
                                                            'type' => 'string',
                                                            'example' => 'ecs:DeleteInstance',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3****\\",\\n  \\"resourceType\\": {\\n    \\"product\\": \\"ECS\\",\\n    \\"resourceType\\": \\"Instance\\",\\n    \\"info\\": {\\n      \\"title\\": \\"Instance\\",\\n      \\"description\\": \\"An ECS instance is equivalent to a virtual machine, including the most basic computing components such as CPU, memory, operating system, network, and disk. You can easily customize and change the configuration of the instance. You have full control over the virtual machine.\\",\\n      \\"chargeType\\": \\"paid\\",\\n      \\"deliveryScope\\": \\"region\\"\\n    },\\n    \\"properties\\": {\\n      \\"test\\": \\"test\\",\\n      \\"test2\\": 1\\n    },\\n    \\"primaryIdentifier\\": \\"/properties/InstanceId\\\\n\\",\\n    \\"required\\": [\\n      \\"RegionId\\"\\n    ],\\n    \\"publicProperties\\": [\\n      \\"\\\\t\\\\n/properties/Description\\"\\n    ],\\n    \\"readOnlyProperties\\": [\\n      \\"/properties/CreateTime\\"\\n    ],\\n    \\"filterProperties\\": [\\n      \\"\\\\t\\\\n/properties/ResourceGroupId\\"\\n    ],\\n    \\"updateTypeProperties\\": [\\n      \\"/properties/InstanceName\\"\\n    ],\\n    \\"sensitiveInfoProperties\\": [\\n      \\"/properties/VncPassword\\"\\n    ],\\n    \\"createOnlyProperties\\": [\\n      \\"/properties/AutoRenew\\"\\n    ],\\n    \\"updateOnlyProperties\\": [\\n      \\"/properties/DryRun\\"\\n    ],\\n    \\"getOnlyProperties\\": [\\n      \\"/properties/DryRun\\"\\n    ],\\n    \\"listOnlyProperties\\": [\\n      \\"/properties/DryRun\\"\\n    ],\\n    \\"deleteOnlyProperties\\": [\\n      \\"/properties/ForceDelete\\"\\n    ],\\n    \\"getResponseProperties\\": [\\n      \\"/properties/NetworkInterfaces/items/properties/IpvSets\\"\\n    ],\\n    \\"listResponseProperties\\": [\\n      \\"/properties/InstanceId\\"\\n    ],\\n    \\"handlers\\": {\\n      \\"create\\": {\\n        \\"permissions\\": [\\n          \\"ecs:CreateInstance\\"\\n        ]\\n      },\\n      \\"update\\": {\\n        \\"permissions\\": [\\n          \\"ecs:ModifyInstanceNetworkSpec\\"\\n        ]\\n      },\\n      \\"get\\": {\\n        \\"permissions\\": [\\n          \\"ecs:DescribeInstanceAttachmentAttributes\\"\\n        ]\\n      },\\n      \\"list\\": {\\n        \\"permissions\\": [\\n          \\"ecs:DescribeInstances\\"\\n        ]\\n      },\\n      \\"delete\\": {\\n        \\"permissions\\": [\\n          \\"ecs:DeleteInstance\\"\\n        ]\\n      }\\n    }\\n  }\\n}","type":"json"}]',
            'title' => '查询资源类型的详情',
        ],
        'ListProducts' => [
            'summary' => '用户通过此接口查询Cloud Control API支持的产品列表。',
            'path' => '/api/v1/providers/{provider}/products',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
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
                    'name' => 'x-acs-accept-language',
                    'in' => 'header',
                    'schema' => [
                        'title' => 'A short description of struct',
                        'description' => '选择返回产品的语言。'."\n"
                            ."\n"
                            .'zh_CH：中文 （默认）'."\n"
                            ."\n"
                            .'en_US：英文。',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'zh_CH' => 'zh_CH',
                            'en_US' => 'en_US',
                        ],
                        'example' => 'zh_CH',
                    ],
                ],
                [
                    'name' => 'provider',
                    'in' => 'path',
                    'schema' => [
                        'description' => '云厂商，目前只支持Aliyun。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Aliyun',
                    ],
                ],
                [
                    'name' => 'nextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用来标记当前开始读取的位置，置空表示从头开始。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ECS',
                    ],
                ],
                [
                    'name' => 'maxResults',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时每页行数。最大值为100。'."\n"
                            ."\n"
                            .'默认值：30。',
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
                        'description' => '返回结构。',
                        'type' => 'object',
                        'properties' => [
                            'totalCount' => [
                                'title' => 'TotalCount本次请求条件下的数据总量，此参数为可选参数，默认可不返回',
                                'description' => '本次请求条件下的数据总量。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '20',
                            ],
                            'nextToken' => [
                                'title' => '表示当前调用返回读取到的位置，空代表数据已经读取完毕',
                                'description' => '表示当前调用返回读取到的位置，空代表数据已经读取完毕。',
                                'type' => 'string',
                                'example' => 'Redis',
                            ],
                            'requestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3****',
                            ],
                            'maxResults' => [
                                'description' => '本次请求所返回的最大记录条数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'products' => [
                                'description' => '产品列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '产品信息。',
                                    'type' => 'object',
                                    'properties' => [
                                        'productCode' => [
                                            'description' => '产品code。',
                                            'type' => 'string',
                                            'example' => 'ECS',
                                        ],
                                        'productName' => [
                                            'description' => '产品名称。',
                                            'type' => 'string',
                                            'example' => 'Elastic Compute Service',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"totalCount\\": 20,\\n  \\"nextToken\\": \\"Redis\\",\\n  \\"requestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3****\\",\\n  \\"maxResults\\": 10,\\n  \\"products\\": [\\n    {\\n      \\"productCode\\": \\"ECS\\",\\n      \\"productName\\": \\"Elastic Compute Service\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '列举产品',
            'description' => 'GET /api/v1/providers/{provider}/products。',
        ],
        'ListResourceTypes' => [
            'summary' => '用户通过此接口查询Cloud Control API支持的资源列表。',
            'path' => '/api/v1/providers/{provider}/products/{product}/resourceTypes',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
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
                    'name' => 'x-acs-accept-language',
                    'in' => 'header',
                    'schema' => [
                        'description' => '选择返回产品的语言。'."\n"
                            ."\n"
                            .'zh_CH：中文 （默认）'."\n"
                            ."\n"
                            .'en_US：英文。',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'zh_CH' => 'zh_CH',
                            'en_US' => 'en_US',
                        ],
                        'example' => 'zh_CH',
                    ],
                ],
                [
                    'name' => 'provider',
                    'in' => 'path',
                    'schema' => [
                        'description' => '云厂商，目前只支持Aliyun。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Aliyun',
                    ],
                ],
                [
                    'name' => 'product',
                    'in' => 'path',
                    'schema' => [
                        'description' => '产品Code。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ECS',
                    ],
                ],
                [
                    'name' => 'resourceTypes',
                    'in' => 'query',
                    'style' => 'simple',
                    'schema' => [
                        'description' => '资源类型列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '资源类型。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'Instance',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'nextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用来标记当前开始读取的位置，置空表示从头开始。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ECS::Disk',
                    ],
                ],
                [
                    'name' => 'maxResults',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时每页行数。最大值为100。'."\n"
                            ."\n"
                            .'默认值：30。',
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
                        'description' => '返回结构。',
                        'type' => 'object',
                        'properties' => [
                            'totalCount' => [
                                'title' => 'TotalCount本次请求条件下的数据总量，此参数为可选参数，默认可不返回',
                                'description' => '本次请求条件下的数据总量。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '20',
                            ],
                            'nextToken' => [
                                'title' => '表示当前调用返回读取到的位置，空代表数据已经读取完毕',
                                'description' => '表示当前调用返回读取到的位置，空代表数据已经读取完毕',
                                'type' => 'string',
                                'example' => 'ECS::Disk',
                            ],
                            'requestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3****',
                            ],
                            'maxResults' => [
                                'description' => '本次请求所返回的最大记录条数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'resourceTypes' => [
                                'description' => '资源类型列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '资源类型。',
                                    'type' => 'object',
                                    'properties' => [
                                        'product' => [
                                            'description' => '产品Code。',
                                            'type' => 'string',
                                            'example' => 'ECS',
                                        ],
                                        'resourceType' => [
                                            'description' => '资源类型。',
                                            'type' => 'string',
                                            'example' => 'Instance',
                                        ],
                                        'info' => [
                                            'description' => '资源类型基础信息。',
                                            'type' => 'object',
                                            'properties' => [
                                                'title' => [
                                                    'description' => '资源类型名称。',
                                                    'type' => 'string',
                                                    'example' => 'Instance',
                                                ],
                                                'description' => [
                                                    'description' => '资源类型描述。',
                                                    'type' => 'string',
                                                    'example' => 'An ECS instance is equivalent to a virtual machine, including the most basic computing components such as CPU, memory, operating system, network, and disk. You can easily customize and change the configuration of the instance. You have full control over the virtual machine.',
                                                ],
                                                'chargeType' => [
                                                    'description' => '付费形式  '."\n"
                                                        .'paid（付费）'."\n"
                                                        .'free（免费）',
                                                    'type' => 'string',
                                                    'enumValueTitles' => [
                                                        'paid' => 'paid',
                                                        'free' => 'free',
                                                    ],
                                                    'example' => 'paid',
                                                ],
                                                'deliveryScope' => [
                                                    'description' => '交付级别 '."\n"
                                                        ."\n"
                                                        .'center（中心化部署级别）'."\n"
                                                        ."\n"
                                                        .'region（地域部署级别）'."\n"
                                                        ."\n"
                                                        .'zone（可用区部署级别）',
                                                    'type' => 'string',
                                                    'enumValueTitles' => [
                                                        'zone' => 'zone',
                                                        'center' => 'center',
                                                        'region' => 'region',
                                                    ],
                                                    'example' => 'region',
                                                ],
                                            ],
                                        ],
                                        'properties' => [
                                            'description' => '资源属性定义，key是属性名，value为属性详细信息。',
                                            'type' => 'object',
                                        ],
                                        'primaryIdentifier' => [
                                            'description' => '资源ID',
                                            'type' => 'string',
                                            'example' => '/properties/InstanceId',
                                        ],
                                        'required' => [
                                            'description' => '资源创建必填参数集合。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '资源创建必填参数。',
                                                'type' => 'string',
                                                'example' => 'RegionId',
                                            ],
                                        ],
                                        'publicProperties' => [
                                            'description' => '公共的属性集合，为资源基本属性。非操作私有参数。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '公共属性。',
                                                'type' => 'string',
                                                'example' => '/properties/Description',
                                            ],
                                        ],
                                        'readOnlyProperties' => [
                                            'description' => '只读参数集合，只在list或者get操作中返回，创建及变更时不作为入参。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '只读参数',
                                                'type' => 'string',
                                                'example' => '/properties/CreateTime',
                                            ],
                                        ],
                                        'filterProperties' => [
                                            'description' => 'list操作时可以作为filter参数的属性集合。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => 'filter参数。',
                                                'type' => 'string',
                                                'example' => '/properties/ResourceGroupId',
                                            ],
                                        ],
                                        'updateTypeProperties' => [
                                            'description' => '可以修改的属性集合。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '可改属性。',
                                                'type' => 'string',
                                                'example' => '/properties/InstanceName',
                                            ],
                                        ],
                                        'sensitiveInfoProperties' => [
                                            'description' => '敏感属性集合，例如密码等。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '敏感属性。',
                                                'type' => 'string',
                                                'example' => '/properties/VncPassword',
                                            ],
                                        ],
                                        'createOnlyProperties' => [
                                            'description' => '创建操作私有参数集合。资源查询操作中不会返回的属性，但是创建操作中需要传入的参数。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '创建操作私有参数。',
                                                'type' => 'string',
                                                'example' => '/properties/AutoRenew',
                                            ],
                                        ],
                                        'updateOnlyProperties' => [
                                            'description' => '更新操作私有参数集合。资源查询操作中不会返回的属性，但是更新操作中需要传入的参数。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '更新操作私有参数。',
                                                'type' => 'string',
                                                'example' => '/properties/DryRun',
                                            ],
                                        ],
                                        'getOnlyProperties' => [
                                            'description' => '查询操作私有参数集合。资源查询操作中不会返回的属性，但是查询操作中需要传入的参数。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '查询操作私有参数。',
                                                'type' => 'string',
                                                'example' => '/properties/DryRun'."\n",
                                            ],
                                        ],
                                        'listOnlyProperties' => [
                                            'description' => '列举操作私有参数集合。资源查询操作中不会返回的属性，但是列举操作中需要传入的参数。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '列举操作私有参数。',
                                                'type' => 'string',
                                                'example' => '/properties/DryRun',
                                            ],
                                        ],
                                        'deleteOnlyProperties' => [
                                            'description' => '删除操作私有参数集合。资源查询操作中不会返回的属性，但是删除操作中需要传入的参数。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '删除操作私有参数。',
                                                'type' => 'string',
                                                'example' => '/properties/ForceDelete',
                                            ],
                                        ],
                                        'getResponseProperties' => [
                                            'description' => '查询返回的属性集合。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '查询返回的属性。',
                                                'type' => 'string',
                                                'example' => '/properties/NetworkInterfaces/items/properties/IpvSets',
                                            ],
                                        ],
                                        'listResponseProperties' => [
                                            'description' => '列举返回的属性集合。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '列举返回的属性。',
                                                'type' => 'string',
                                                'example' => '/properties/InstanceId',
                                            ],
                                        ],
                                        'handlers' => [
                                            'description' => '支持的资源操作信息（包括RAM权限）。',
                                            'type' => 'object',
                                            'properties' => [
                                                'create' => [
                                                    'description' => '创建操作关联信息。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'permissions' => [
                                                            'description' => '所需RAM权限信息集合。',
                                                            'type' => 'array',
                                                            'items' => [
                                                                'description' => 'RAM权限。',
                                                                'type' => 'string',
                                                                'example' => 'ecs:CreateInstance',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'update' => [
                                                    'description' => '更新操作关联信息。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'permissions' => [
                                                            'description' => '所需RAM权限信息集合。',
                                                            'type' => 'array',
                                                            'items' => [
                                                                'description' => 'RAM权限。',
                                                                'type' => 'string',
                                                                'example' => 'ecs:ModifyInstanceNetworkSpec',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'get' => [
                                                    'description' => '查询操作关联信息。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'permissions' => [
                                                            'description' => '所需RAM权限信息集合。',
                                                            'type' => 'array',
                                                            'items' => [
                                                                'description' => 'RAM权限。',
                                                                'type' => 'string',
                                                                'example' => 'ecs:DescribeInstanceAttachmentAttributes',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'list' => [
                                                    'description' => '列举操作关联信息。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'permissions' => [
                                                            'description' => '所需RAM权限信息集合。',
                                                            'type' => 'array',
                                                            'items' => [
                                                                'description' => 'RAM权限。',
                                                                'type' => 'string',
                                                                'example' => 'ecs:DescribeInstances',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'delete' => [
                                                    'description' => '删除操作关联信息。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'permissions' => [
                                                            'description' => '所需RAM权限信息集合。',
                                                            'type' => 'array',
                                                            'items' => [
                                                                'description' => 'RAM权限。',
                                                                'type' => 'string',
                                                                'example' => 'ecs:DeleteInstance',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"totalCount\\": 20,\\n  \\"nextToken\\": \\"ECS::Disk\\",\\n  \\"requestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3****\\",\\n  \\"maxResults\\": 10,\\n  \\"resourceTypes\\": [\\n    {\\n      \\"product\\": \\"ECS\\",\\n      \\"resourceType\\": \\"Instance\\",\\n      \\"info\\": {\\n        \\"title\\": \\"Instance\\",\\n        \\"description\\": \\"An ECS instance is equivalent to a virtual machine, including the most basic computing components such as CPU, memory, operating system, network, and disk. You can easily customize and change the configuration of the instance. You have full control over the virtual machine.\\",\\n        \\"chargeType\\": \\"paid\\",\\n        \\"deliveryScope\\": \\"region\\"\\n      },\\n      \\"properties\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      },\\n      \\"primaryIdentifier\\": \\"/properties/InstanceId\\",\\n      \\"required\\": [\\n        \\"RegionId\\"\\n      ],\\n      \\"publicProperties\\": [\\n        \\"/properties/Description\\"\\n      ],\\n      \\"readOnlyProperties\\": [\\n        \\"/properties/CreateTime\\"\\n      ],\\n      \\"filterProperties\\": [\\n        \\"/properties/ResourceGroupId\\"\\n      ],\\n      \\"updateTypeProperties\\": [\\n        \\"/properties/InstanceName\\"\\n      ],\\n      \\"sensitiveInfoProperties\\": [\\n        \\"/properties/VncPassword\\"\\n      ],\\n      \\"createOnlyProperties\\": [\\n        \\"/properties/AutoRenew\\"\\n      ],\\n      \\"updateOnlyProperties\\": [\\n        \\"/properties/DryRun\\"\\n      ],\\n      \\"getOnlyProperties\\": [\\n        \\"/properties/DryRun\\\\n\\"\\n      ],\\n      \\"listOnlyProperties\\": [\\n        \\"/properties/DryRun\\"\\n      ],\\n      \\"deleteOnlyProperties\\": [\\n        \\"/properties/ForceDelete\\"\\n      ],\\n      \\"getResponseProperties\\": [\\n        \\"/properties/NetworkInterfaces/items/properties/IpvSets\\"\\n      ],\\n      \\"listResponseProperties\\": [\\n        \\"/properties/InstanceId\\"\\n      ],\\n      \\"handlers\\": {\\n        \\"create\\": {\\n          \\"permissions\\": [\\n            \\"ecs:CreateInstance\\"\\n          ]\\n        },\\n        \\"update\\": {\\n          \\"permissions\\": [\\n            \\"ecs:ModifyInstanceNetworkSpec\\"\\n          ]\\n        },\\n        \\"get\\": {\\n          \\"permissions\\": [\\n            \\"ecs:DescribeInstanceAttachmentAttributes\\"\\n          ]\\n        },\\n        \\"list\\": {\\n          \\"permissions\\": [\\n            \\"ecs:DescribeInstances\\"\\n          ]\\n        },\\n        \\"delete\\": {\\n          \\"permissions\\": [\\n            \\"ecs:DeleteInstance\\"\\n          ]\\n        }\\n      }\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '列举资源类型',
            'description' => 'GET /api/v1/providers/{provider}/products/{product}/resourceTypes。',
        ],
        'CreateResource' => [
            'summary' => '用户通过此接口创建资源。',
            'path' => '/api/v1/providers/{provider}/products/{product}/resources/*',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
                'riskType' => 'none',
                'chargeType' => 'paid',
            ],
            'parameters' => [
                [
                    'name' => 'requestPath',
                    'in' => 'path',
                    'schema' => [
                        'description' => '请求路径。格式为：'."\n"
                            .'/api/v1/providers/{provider}/products/{product}/resources/{parentResourcePath}/{resourceTypeCode}'."\n"
                            ."\n"
                            .'请求路径中变量说明：'."\n"
                            ."\n"
                            .'provider: 云厂商，目前只支持Aliyun。'."\n"
                            ."\n"
                            .'product: 产品Code。'."\n"
                            ."\n"
                            .'parentResourcePath: 父资源路径。以Redis Account为例，Redis DBInstance是Account的父资源，那么parentResourcePath格式为：父资源Code/父资源ID（DBInstance/r-8vbf5abe31c9****）。'."\n"
                            ."\n"
                            .'resourceTypeCode: 资源Code。资源Code为资源类型resourceType（父资源Code/子资源Code）的后一部分。以Redis Account为例，resourceType为DBInstance/Account，resourceTypeCode为Account。'."\n"
                            ."\n"
                            .'示例如下：'."\n"
                            ."\n"
                            .'Redis DBInstance: /api/v1/providers/Aliyun/products/Redis/resources/DBInstance'."\n"
                            ."\n"
                            .'Redis Account: /api/v1/providers/Aliyun/products/Redis/resources/Instance/r-8vbf5abe31cxxxxx/Account'."\n"
                            ."\n"
                            .'ECS Instance: /api/v1/providers/Aliyun/products/ECS/resources/Instance'."\n"
                            ."\n"
                            .'RDS Instance: /api/v1/providers/Aliyun/products/RDS/resources/DBInstance'."\n"
                            ."\n"
                            .'VPC VPC: /api/v1/providers/Aliyun/products/VPC/resources/VPC'."\n"
                            ."\n"
                            .'SLB LoadBalancer: /api/v1/providers/Aliyun/products/SLB/resources/LoadBalancer'."\n"
                            ."\n"
                            .'OSS Bucket: /api/v1/providers/Aliyun/products/OSS/resources/Bucket',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '/api/v1/providers/Aliyun/products/Redis/resources/DBInstance/r-8vbf5abe31cxxxxx/Account',
                    ],
                ],
                [
                    'name' => 'regionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。若云产品是region化产品，则此参数为必填。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-beijing',
                    ],
                ],
                [
                    'name' => 'clientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '幂等参数。若云产品支持幂等能力，则传入生效。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1e810dfe1468721d0664a49b9d9f74f4',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求Body。资源属性，以json的形式传入。',
                        'type' => 'object',
                        'required' => false,
                        'example' => '{'."\n"
                            .'     "AccountName": "cctest",'."\n"
                            .'     "AccountPassword": "Aa1234****"'."\n"
                            .'}',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [
                        'x-acs-cloudcontrol-timeout' => [
                            'schema' => [
                                'type' => 'string',
                                'backendName' => 'retry-timeout',
                            ],
                        ],
                    ],
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回结构。',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => '请求id',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3****'."\n",
                            ],
                            'resourceId' => [
                                'title' => '资源id',
                                'description' => '资源ID。',
                                'type' => 'string',
                                'example' => 'cctest',
                            ],
                            'taskId' => [
                                'title' => '任务id',
                                'description' => '异步任务ID。当本次操作为异步时，此字段返回，此时Http状态码为202。',
                                'type' => 'string',
                                'example' => 'task-433aead756057fff8189a7ce5****'."\n",
                            ],
                            'resourcePath' => [
                                'title' => '资源路径',
                                'description' => '资源路径。相对资源id，资源路径会包含完整的资源定位（父资源/子资源）。',
                                'type' => 'string',
                                'example' => 'Instance/r-8vbf5abe31c9c4d4/Account/cctest',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3****\\\\n\\",\\n  \\"resourceId\\": \\"cctest\\",\\n  \\"taskId\\": \\"task-433aead756057fff8189a7ce5****\\\\n\\",\\n  \\"resourcePath\\": \\"Instance/r-8vbf5abe31c9c4d4/Account/cctest\\"\\n}","type":"json"}]',
            'title' => '创建资源',
            'description' => '用户可前往[在线调试API门户](https://next.api.aliyun.com/cloudcontrol)查看资源文档和体验Cloud Control API。',
        ],
        'DeleteResource' => [
            'summary' => '用户通过此接口删除资源。',
            'path' => '/api/v1/providers/{provider}/products/{product}/resources/*',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
                'riskType' => 'high',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'requestPath',
                    'in' => 'path',
                    'schema' => [
                        'description' => '请求路径。格式为：'."\n"
                            .'/api/v1/providers/{provider}/products/{product}/resources/{parentResourcePath}/{resourceTypeCode}/{resourceId}'."\n"
                            ."\n"
                            .'请求路径中变量说明：'."\n"
                            ."\n"
                            .'provider: 云厂商，目前只支持Aliyun。'."\n"
                            ."\n"
                            .'product: 产品Code。'."\n"
                            ."\n"
                            .'parentResourcePath: 父资源路径。以Redis Account为例，Redis DBInstance是Account的父资源，那么parentResourcePath格式为：父资源Code/父资源ID（DBInstance/r-8vbf5abe31c9****）。'."\n"
                            ."\n"
                            .'resourceTypeCode: 资源Code。资源Code为资源类型resourceType（父资源Code/子资源Code）的后一部分。以Redis Account为例，resourceType为DBInstance/Account，resourceTypeCode为Account。'."\n"
                            ."\n"
                            .'resourceId: 资源ID。'."\n"
                            ."\n"
                            .'示例如下：'."\n"
                            ."\n"
                            .'Redis DBInstance: /api/v1/providers/Aliyun/products/Redis/resources/DBInstance/r-8vbf5abe31c9****'."\n"
                            ."\n"
                            .'Redis Account: /api/v1/providers/Aliyun/products/Redis/resources/Instance/r-8vbf5abe31cxxxxx/Account/cctest****'."\n"
                            ."\n"
                            .'ECS Instance: /api/v1/providers/Aliyun/products/ECS/resources/Instance/i-123****'."\n"
                            ."\n"
                            .'RDS Instance: /api/v1/providers/Aliyun/products/RDS/resources/DBInstance/r-123****'."\n"
                            ."\n"
                            .'VPC VPC: /api/v1/providers/Aliyun/products/VPC/resources/VPC/vpc-123****'."\n"
                            ."\n"
                            .'SLB LoadBalancer: /api/v1/providers/Aliyun/products/SLB/resources/LoadBalancer/lb-123****'."\n"
                            ."\n"
                            .'OSS Bucket: /api/v1/providers/Aliyun/products/OSS/resources/Bucket/cctest****',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '/api/v1/providers/Aliyun/products/Redis/resources/Instance/r-8vbf5abe31cxxxxx/Account/cctest',
                    ],
                ],
                [
                    'name' => 'regionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。若云产品是region化产品，则此参数为必填。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-beijing'."\n",
                    ],
                ],
                [
                    'name' => 'clientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '幂等参数。若云产品支持幂等能力，则传入生效。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1e810dfe1468721d0664a49b9d9f74f4'."\n",
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [
                        'x-acs-cloudcontrol-timeout' => [
                            'schema' => [
                                'type' => 'string',
                                'backendName' => 'retry-timeout',
                            ],
                        ],
                    ],
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回结构。',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3****'."\n",
                            ],
                            'taskId' => [
                                'description' => '异步任务ID。当本次操作为异步时，此字段返回，此时Http状态码为202。',
                                'type' => 'string',
                                'example' => 'task-433aead756057fff8189a7ce5****'."\n",
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3****\\\\n\\",\\n  \\"taskId\\": \\"task-433aead756057fff8189a7ce5****\\\\n\\"\\n}","type":"json"}]',
            'title' => '删除资源',
            'description' => '用户可前往[在线调试API门户](https://next.api.aliyun.com/cloudcontrol)查看资源文档和体验Cloud Control API。',
        ],
        'GetResources' => [
            'summary' => '用户通过此接口查询资源。',
            'path' => '/api/v1/providers/{provider}/products/{product}/resources/*',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
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
                    'name' => 'requestPath',
                    'in' => 'path',
                    'schema' => [
                        'description' => '请求路径。根据不同的请求路径，用户可分别调用资源List和Get能力。'."\n"
                            ."\n"
                            .'1.List: /api/v1/providers/{provider}/products/{product}/resources/{parentResourcePath}/{resourceTypeCode}'."\n"
                            ."\n"
                            .'2.Get: /api/v1/providers/{provider}/products/{product}/resources/{parentResourcePath}/{resourceTypeCode}/{resourceId}'."\n"
                            ."\n"
                            .'请求路径中变量说明：'."\n"
                            ."\n"
                            .'provider: 云厂商，目前只支持Aliyun。'."\n"
                            ."\n"
                            .'product: 产品Code。'."\n"
                            ."\n"
                            .'parentResourcePath: 父资源路径。以Redis Account为例，Redis DBInstance是Account的父资源，那么parentResourcePath格式为：父资源Code/父资源ID（DBInstance/r-8vbf5abe31c9****）。'."\n"
                            ."\n"
                            .'resourceTypeCode: 资源Code。资源Code为资源类型resourceType（父资源Code/子资源Code）的后一部分。以Redis Account为例，resourceType为DBInstance/Account，resourceTypeCode为Account。'."\n"
                            ."\n"
                            .'resourceId: 资源ID。'."\n"
                            ."\n"
                            .'示例如下：'."\n"
                            ."\n"
                            .'Redis DBInstance List: /api/v1/providers/Aliyun/products/Redis/resources/DBInstance'."\n"
                            ."\n"
                            .'Redis DBInstance Get: /api/v1/providers/Aliyun/products/Redis/resources/Instance/r-8vbf5abe31cxxxxx'."\n"
                            ."\n"
                            .'ECS Instance List: /api/v1/providers/Aliyun/products/ECS/resources/Instance'."\n"
                            ."\n"
                            .'ECS Instance Get: /api/v1/providers/Aliyun/products/ECS/resources/Instance/i-123****'."\n"
                            ."\n"
                            .'RDS Instance List: /api/v1/providers/Aliyun/products/RDS/resources/DBInstance'."\n"
                            ."\n"
                            .'RDS Instance Get: /api/v1/providers/Aliyun/products/RDS/resources/DBInstance/r-123****'."\n"
                            ."\n"
                            .'VPC VPC List: /api/v1/providers/Aliyun/products/VPC/resources/VPC'."\n"
                            ."\n"
                            .'VPC VPC Get: /api/v1/providers/Aliyun/products/VPC/resources/VPC/vpc-123****'."\n"
                            ."\n"
                            .'SLB LoadBalancer List: /api/v1/providers/Aliyun/products/SLB/resources/LoadBalancer'."\n"
                            ."\n"
                            .'SLB LoadBalancer Get: /api/v1/providers/Aliyun/products/SLB/resources/LoadBalancer/lb-123****'."\n"
                            ."\n"
                            .'OSS Bucket List: /api/v1/providers/Aliyun/products/OSS/resources/Bucket'."\n"
                            ."\n"
                            .'OSS Bucket Get: /api/v1/providers/Aliyun/products/OSS/resources/Bucket/cctest****',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '/api/v1/providers/Aliyun/products/Redis/resources/DBInstance/r-8vbf5abe31c9****',
                    ],
                ],
                [
                    'name' => 'regionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。若云产品是region化产品，则此参数为必填。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-beijing'."\n",
                    ],
                ],
                [
                    'name' => 'filter',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '过滤条件。json格式，可以将部分资源属性作为过滤条件。',
                        'type' => 'object',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'nextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用来标记当前开始读取的位置，置空表示从头开始。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'AAAAAdDWBF2****',
                    ],
                ],
                [
                    'name' => 'maxResults',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时每页行数，最大不能超过100。',
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
                        'description' => '返回结构。',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3****'."\n",
                            ],
                            'totalCount' => [
                                'description' => '本次请求条件下的数据总量。List操作返回。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '20',
                            ],
                            'nextToken' => [
                                'description' => '表示当前调用返回读取到的位置，空代表数据已经读取完毕。List操作返回。',
                                'type' => 'string',
                                'example' => 'AAAAAdDWBF2****'."\n",
                            ],
                            'maxResults' => [
                                'description' => '本次请求所返回的最大记录条数。List操作返回。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'resource' => [
                                'description' => '指定资源。Get操作返回。',
                                'type' => 'object',
                                'properties' => [
                                    'resourceAttributes' => [
                                        'description' => '资源属性（json格式）。',
                                        'type' => 'object',
                                        'example' => '{"Status":"Available","Description":"","AccountPrivilege":"RoleReadWrite","InstanceId":"r-8vbf5abe31c9c4d4","RegionId":"cn-zhangjiakou","AccountType":"Normal","TypeInfo":{},"AccountName":"cctest"}',
                                    ],
                                    'resourceId' => [
                                        'description' => '资源ID。',
                                        'type' => 'string',
                                        'example' => 'cctest'."\n",
                                    ],
                                ],
                            ],
                            'resources' => [
                                'description' => '资源列表。List操作返回。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '资源。',
                                    'type' => 'object',
                                    'properties' => [
                                        'resourceId' => [
                                            'description' => '资源ID。',
                                            'type' => 'string',
                                            'example' => 'cctest',
                                        ],
                                        'resourceAttributes' => [
                                            'description' => '资源属性（json格式）。',
                                            'type' => 'object',
                                            'example' => '{"Status":"Available","Description":"","AccountPrivilege":"RoleReadWrite","InstanceId":"r-8vbf5abe31c9c4d4","RegionId":"cn-zhangjiakou","AccountType":"Normal","TypeInfo":{},"AccountName":"cctest"}',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3****\\\\n\\",\\n  \\"totalCount\\": 20,\\n  \\"nextToken\\": \\"AAAAAdDWBF2****\\\\n\\",\\n  \\"maxResults\\": 10,\\n  \\"resource\\": {\\n    \\"resourceAttributes\\": {\\n      \\"Status\\": \\"Available\\",\\n      \\"Description\\": \\"\\",\\n      \\"AccountPrivilege\\": \\"RoleReadWrite\\",\\n      \\"InstanceId\\": \\"r-8vbf5abe31c9c4d4\\",\\n      \\"RegionId\\": \\"cn-zhangjiakou\\",\\n      \\"AccountType\\": \\"Normal\\",\\n      \\"TypeInfo\\": {},\\n      \\"AccountName\\": \\"cctest\\"\\n    },\\n    \\"resourceId\\": \\"cctest\\\\n\\"\\n  },\\n  \\"resources\\": [\\n    {\\n      \\"resourceId\\": \\"cctest\\",\\n      \\"resourceAttributes\\": {\\n        \\"Status\\": \\"Available\\",\\n        \\"Description\\": \\"\\",\\n        \\"AccountPrivilege\\": \\"RoleReadWrite\\",\\n        \\"InstanceId\\": \\"r-8vbf5abe31c9c4d4\\",\\n        \\"RegionId\\": \\"cn-zhangjiakou\\",\\n        \\"AccountType\\": \\"Normal\\",\\n        \\"TypeInfo\\": {},\\n        \\"AccountName\\": \\"cctest\\"\\n      }\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询资源',
            'description' => '用户可前往[在线调试API门户](https://next.api.aliyun.com/cloudcontrol)查看资源文档和体验Cloud Control API。'."\n"
                ."\n"
                .'此API包括资源的Get和List功能，根据不同的请求路径，用户可分别调用资源List和Get能力。',
        ],
        'UpdateResource' => [
            'summary' => '用户通过此接口更新资源。',
            'path' => '/api/v1/providers/{provider}/products/{product}/resources/*',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
                'riskType' => 'high',
                'chargeType' => 'paid',
            ],
            'parameters' => [
                [
                    'name' => 'requestPath',
                    'in' => 'path',
                    'schema' => [
                        'description' => '请求路径。格式为：'."\n"
                            .'/api/v1/providers/{provider}/products/{product}/resources/{parentResourcePath}/{resourceTypeCode}/{resourceId}'."\n"
                            ."\n"
                            .'请求路径中变量说明：'."\n"
                            ."\n"
                            .'provider: 云厂商，目前只支持Aliyun。'."\n"
                            ."\n"
                            .'product: 产品Code。'."\n"
                            ."\n"
                            .'parentResourcePath: 父资源路径。以Redis Account为例，Redis DBInstance是Account的父资源，那么parentResourcePath格式为：父资源Code/父资源ID（DBInstance/r-8vbf5abe31c9****）。'."\n"
                            ."\n"
                            .'resourceTypeCode: 资源Code。资源Code为资源类型resourceType（父资源Code/子资源Code）的后一部分。以Redis Account为例，resourceType为DBInstance/Account，resourceTypeCode为Account。'."\n"
                            ."\n"
                            .'resourceId: 资源ID。'."\n"
                            ."\n"
                            .'示例如下：'."\n"
                            ."\n"
                            .'Redis DBInstance: /api/v1/providers/Aliyun/products/Redis/resources/DBInstance/r-8vbf5abe31c9****'."\n"
                            ."\n"
                            .'Redis Account: /api/v1/providers/Aliyun/products/Redis/resources/Instance/r-8vbf5abe31cxxxxx/Account/cctest****'."\n"
                            ."\n"
                            .'ECS Instance: /api/v1/providers/Aliyun/products/ECS/resources/Instance/i-123****'."\n"
                            ."\n"
                            .'RDS Instance: /api/v1/providers/Aliyun/products/RDS/resources/DBInstance/r-123****'."\n"
                            ."\n"
                            .'VPC VPC: /api/v1/providers/Aliyun/products/VPC/resources/VPC/vpc-123****'."\n"
                            ."\n"
                            .'SLB LoadBalancer: /api/v1/providers/Aliyun/products/SLB/resources/LoadBalancer/lb-123****'."\n"
                            ."\n"
                            .'OSS Bucket: /api/v1/providers/Aliyun/products/OSS/resources/Bucket/cctest****',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '/api/v1/providers/Aliyun/products/Redis/resources/Instance/r-8vbf5abe31cxxxxx/Account/cctest',
                    ],
                ],
                [
                    'name' => 'regionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。若云产品是region化产品，则此参数为必填。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-beijing'."\n",
                    ],
                ],
                [
                    'name' => 'clientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '幂等参数。若云产品支持幂等能力，则传入生效。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1e810dfe1468721d0664a49b9d9f74f4',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求Body。需要更新的资源属性，以json的形式传入。',
                        'type' => 'object',
                        'required' => false,
                        'example' => '{'."\n"
                            .'     "AccountPassword": "4321****",'."\n"
                            .'     "Description": "cctest"'."\n"
                            .'}',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [
                        'x-acs-cloudcontrol-timeout' => [
                            'schema' => [
                                'type' => 'string',
                                'backendName' => 'retry-timeout',
                            ],
                        ],
                    ],
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回结构。',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => '请求id',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3****',
                            ],
                            'taskId' => [
                                'description' => '异步任务ID。当本次操作为异步时，此字段返回，此时Http状态码为202。',
                                'type' => 'string',
                                'example' => 'task-433aead756057fff8189a7ce5****',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3****\\",\\n  \\"taskId\\": \\"task-433aead756057fff8189a7ce5****\\"\\n}","type":"json"}]',
            'title' => '更新资源',
            'description' => '用户可前往[在线调试API门户](https://next.api.aliyun.com/cloudcontrol)查看资源文档和体验Cloud Control API。'."\n"
                ."\n"
                .'如果更新资源在任何时候失败，云控制 API 不会将资源回滚到先前的状态。'."\n"
                ."\n"
                .'由于资源API目前不支持回滚，当用户遇到API部分失败时，需手动调用GetResources API查看资源最新的状态，然后调用UpdateResource或DeleteResource进行手动补偿（如果有必要）。',
        ],
        'GetTask' => [
            'summary' => '用户通过此接口查询指定任务详情。',
            'path' => '/api/v1/tasks/{taskId}',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
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
                    'name' => 'taskId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '任务id',
                        'description' => '任务id。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'task-433aead756057fff8189a7ce5****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回结构。',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3****',
                            ],
                            'task' => [
                                'description' => '任务信息。',
                                'type' => 'object',
                                'properties' => [
                                    'taskId' => [
                                        'description' => '任务ID。',
                                        'type' => 'string',
                                        'example' => 'task-433aead756057fff8189a7ce5****',
                                    ],
                                    'product' => [
                                        'description' => '产品code。',
                                        'type' => 'string',
                                        'example' => 'ECS',
                                    ],
                                    'resourceType' => [
                                        'description' => '资源类型。',
                                        'type' => 'string',
                                        'example' => 'Instance',
                                    ],
                                    'regionId' => [
                                        'description' => '地域ID。',
                                        'type' => 'string',
                                        'example' => 'cn-beijing',
                                    ],
                                    'resourceId' => [
                                        'description' => '资源ID。',
                                        'type' => 'string',
                                        'example' => 'i-8vbascjthm7kzhp3****'."\n",
                                    ],
                                    'resourcePath' => [
                                        'description' => '资源路径。相对资源id，资源路径会包含完整的资源定位（父资源/子资源）。',
                                        'type' => 'string',
                                        'example' => 'Instance/i-8vbascjthm7kzhp3****'."\n"
                                            .'Instance/r-8vbf5abe31c9c4d4/Account/cctest',
                                    ],
                                    'taskAction' => [
                                        'description' => '任务操作类型（Create | Update | Delete）。',
                                        'type' => 'string',
                                        'enumValueTitles' => [
                                            'Delete' => 'Delete',
                                            'Create' => 'Create',
                                            'Update' => 'Update',
                                        ],
                                        'example' => 'Create',
                                    ],
                                    'status' => [
                                        'description' => '任务状态。'."\n"
                                            ."\n"
                                            .'Pending 排队中'."\n"
                                            ."\n"
                                            .'Running 进行中'."\n"
                                            ."\n"
                                            .'Succeeded 成功完成'."\n"
                                            ."\n"
                                            .'Failed 失败'."\n"
                                            ."\n"
                                            .'Cancelling 取消中'."\n"
                                            ."\n"
                                            .'Cancelled 已取消。',
                                        'type' => 'string',
                                        'enumValueTitles' => [
                                            'Succeeded' => 'Succeeded',
                                            'Failed' => 'Failed',
                                            'Running' => 'Running',
                                            'Cancelled' => 'Cancelled',
                                            'Pending' => 'Pending',
                                            'Cancelling' => 'Cancelling',
                                        ],
                                        'example' => 'Succeeded',
                                    ],
                                    'error' => [
                                        'description' => '任务错误信息。',
                                        'type' => 'object',
                                        'properties' => [
                                            'code' => [
                                                'description' => '错误码。',
                                                'type' => 'string',
                                                'example' => 'OperationFailure.OperationFailed',
                                            ],
                                            'message' => [
                                                'description' => '错误信息',
                                                'type' => 'string',
                                                'example' => '{'."\n"
                                                    .'     "requestId": "123****",'."\n"
                                                    .'     "errorCode": "InvalidRamUser.NoPermission",'."\n"
                                                    .'     "errorMsg": "Ram user is not authorized to perform the operation."'."\n"
                                                    .'}',
                                            ],
                                        ],
                                    ],
                                    'createTime' => [
                                        'description' => '任务创建时间',
                                        'type' => 'string',
                                        'example' => '2022-10-09T00:46:03Z',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3****\\",\\n  \\"task\\": {\\n    \\"taskId\\": \\"task-433aead756057fff8189a7ce5****\\",\\n    \\"product\\": \\"ECS\\",\\n    \\"resourceType\\": \\"Instance\\",\\n    \\"regionId\\": \\"cn-beijing\\",\\n    \\"resourceId\\": \\"i-8vbascjthm7kzhp3****\\\\n\\",\\n    \\"resourcePath\\": \\"Instance/i-8vbascjthm7kzhp3****\\\\nInstance/r-8vbf5abe31c9c4d4/Account/cctest\\",\\n    \\"taskAction\\": \\"Create\\",\\n    \\"status\\": \\"Succeeded\\",\\n    \\"error\\": {\\n      \\"code\\": \\"OperationFailure.OperationFailed\\",\\n      \\"message\\": \\"{\\\\n     \\\\\\"requestId\\\\\\": \\\\\\"123****\\\\\\",\\\\n     \\\\\\"errorCode\\\\\\": \\\\\\"InvalidRamUser.NoPermission\\\\\\",\\\\n     \\\\\\"errorMsg\\\\\\": \\\\\\"Ram user is not authorized to perform the operation.\\\\\\"\\\\n}\\"\\n    },\\n    \\"createTime\\": \\"2022-10-09T00:46:03Z\\"\\n  }\\n}","type":"json"}]',
            'title' => '查询任务',
            'description' => 'GET /api/v1/tasks/{taskId}。',
        ],
        'CancelTask' => [
            'summary' => '用户通过此接口取消指定任务详情。',
            'path' => '/api/v1/tasks/{taskId}/operation/cancel',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
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
                    'name' => 'taskId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '任务id',
                        'description' => '任务id。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'task-433aead756057fff2913e7ce5****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回结构。',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3****',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3****\\"\\n}","type":"json"}]',
            'title' => '取消任务',
            'description' => 'PUT /api/v1/tasks/{taskId}/operation/cancel'."\n"
                ."\n"
                .'仅状态为Pending或Running的Task可以被取消。'."\n"
                ."\n"
                .'虽然调用CancelTask可以取消Cloud Control API 执行的操作，它不会终止可能已经在下游云产品服务上启动的任何操作。',
        ],
        'ListDataSources' => [
            'summary' => '用户通过此接口查询资源属性可选值（RegionID、ZoneId等）。',
            'path' => '/api/v1/providers/{provider}/products/{product}/dataSources/*',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
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
                    'name' => 'requestPath',
                    'in' => 'path',
                    'schema' => [
                        'description' => '请求路径。格式为：'."\n"
                            .' /api/v1/providers/{provider}/products/{product}/dataSources/{resourceType}'."\n"
                            ."\n"
                            .'请求路径中变量说明：'."\n"
                            ."\n"
                            .'provider: 云厂商，目前只支持Aliyun。'."\n"
                            ."\n"
                            .'product: 产品Code。'."\n"
                            ."\n"
                            .'resourceType: 资源类型。'."\n"
                            ."\n"
                            .'示例如下：'."\n"
                            ."\n"
                            .'Redis DBInstance: /api/v1/providers/Aliyun/products/Redis/dataSources/DBInstance',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '/api/v1/providers/Aliyun/products/Redis/dataSources/DBInstance',
                    ],
                ],
                [
                    'name' => 'attributeName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '属性名称（当前支持RegionId）。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'RegionId',
                    ],
                ],
                [
                    'name' => 'filter',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '指定过滤条件。json格式：{"key1":"value1"}。',
                        'type' => 'object',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回结构。',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3****',
                            ],
                            'dataSources' => [
                                'description' => '数据列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '数据。',
                                    'type' => 'object',
                                    'properties' => [
                                        'id' => [
                                            'description' => '数据ID。',
                                            'type' => 'string',
                                            'example' => 'cn-beijing',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3****\\",\\n  \\"dataSources\\": [\\n    {\\n      \\"id\\": \\"cn-beijing\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询资源属性可选值',
        ],
        'GetPrice' => [
            'summary' => '该接口为询价接口，用户可通过此接口查询资源价格。',
            'path' => '/api/v1/providers/{provider}/products/{product}/price/*',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
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
                    'name' => 'requestPath',
                    'in' => 'path',
                    'schema' => [
                        'title' => 'A short description of struct',
                        'description' => '请求路径。格式为： /api/v1/providers/{provider}/products/{product}/price/{resourceType}'."\n"
                            ."\n"
                            .'请求路径中变量说明：'."\n"
                            ."\n"
                            .'provider: 云厂商，目前只支持Aliyun。'."\n"
                            ."\n"
                            .'product: 产品Code。'."\n"
                            ."\n"
                            .'resourceType: 资源Type。以Redis Account为例，resourceType为DBInstance/Account'."\n"
                            ."\n"
                            .'目前支持询价的资源列表如下：'."\n"
                            ."\n"
                            .'Redis DBInstance: /api/v1/providers/aliyun/products/Redis/price/DBInstance'."\n"
                            ."\n"
                            .'ECS Instance: /api/v1/providers/aliyun/products/ECS/price/Instance'."\n"
                            ."\n"
                            .'RDS DBInstance: /api/v1/providers/aliyun/products/RDS/price/DBInstance'."\n"
                            ."\n"
                            .'SLB LoadBalancer: /api/v1/providers/aliyun/products/SLB/price/LoadBalancer'."\n"
                            ."\n"
                            .'ClickHouse DBCluster: /api/v1/providers/aliyun/products/ClickHouse/price/DBCluster'."\n"
                            ."\n"
                            .'AliKafka Instance: /api/v1/providers/aliyun/products/AliKafka/price/Instance',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            '/api/v1/providers/aliyun/products/Redis/price/DBInstance' => 'Redis DBInstance',
                            '/api/v1/providers/aliyun/products/AliKafka/price/Instance' => 'AliKafka Instance',
                            '/api/v1/providers/aliyun/products/ECS/price/Instance' => 'ECS Instance',
                            '/api/v1/providers/aliyun/products/ClickHouse/price/DBCluster' => 'ClickHouse DBCluster',
                            '/api/v1/providers/aliyun/products/RDS/price/DBInstance' => 'RDS DBInstance',
                            '/api/v1/providers/aliyun/products/SLB/price/LoadBalancer' => 'SLB LoadBalancer',
                        ],
                        'example' => '/api/v1/providers/aliyun/products/SLB/price/LoadBalancer',
                    ],
                ],
                [
                    'name' => 'regionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。若云产品是region化产品，则此参数为必填。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-beijing'."\n",
                    ],
                ],
                [
                    'name' => 'resourceAttributes',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '询价属性（json格式）。',
                        'type' => 'object',
                        'required' => false,
                        'example' => '{'."\n"
                            .'        "LoadBalancerName": "cc-test",'."\n"
                            .'        "LoadBalancerSpec": "slb.s3.small",'."\n"
                            .'        "InternetChargeType": "paybybandwidth",'."\n"
                            .'        "AddressType": "internet",'."\n"
                            .'        "PaymentType": "PayAsYouGo",'."\n"
                            .'        "Bandwidth": 6'."\n"
                            .'      }',
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
                            'requestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3****',
                            ],
                            'price' => [
                                'description' => '价格',
                                'type' => 'object',
                                'properties' => [
                                    'currency' => [
                                        'description' => '币种。取值范围：CNY：人民币。USD：美元。JPY：日元。',
                                        'type' => 'string',
                                        'enumValueTitles' => [
                                            'JPY' => 'JPY',
                                            'USD' => 'USD',
                                            'CNY' => 'CNY',
                                        ],
                                        'example' => 'CNY',
                                    ],
                                    'originalPrice' => [
                                        'description' => '原价',
                                        'type' => 'number',
                                        'format' => 'float',
                                        'example' => '760.0',
                                    ],
                                    'discountPrice' => [
                                        'description' => '折扣',
                                        'type' => 'number',
                                        'format' => 'float',
                                        'example' => '0.0',
                                    ],
                                    'tradePrice' => [
                                        'description' => '优惠价',
                                        'type' => 'number',
                                        'format' => 'float',
                                        'example' => '0.0',
                                    ],
                                    'moduleDetails' => [
                                        'description' => '计价模块价格详情',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '计价模块价格详情',
                                            'type' => 'object',
                                            'properties' => [
                                                'costAfterDiscount' => [
                                                    'description' => '优惠价',
                                                    'type' => 'number',
                                                    'format' => 'float',
                                                    'example' => '0.02',
                                                ],
                                                'invoiceDiscount' => [
                                                    'description' => '折扣',
                                                    'type' => 'number',
                                                    'format' => 'float',
                                                    'example' => '0.0',
                                                ],
                                                'priceType' => [
                                                    'description' => '价格类型',
                                                    'type' => 'number',
                                                    'format' => 'float',
                                                    'example' => '1.0',
                                                ],
                                                'originalCost' => [
                                                    'description' => '原价',
                                                    'type' => 'number',
                                                    'format' => 'float',
                                                    'example' => '1000.0',
                                                ],
                                                'moduleCode' => [
                                                    'description' => '计价模块标识',
                                                    'type' => 'string',
                                                    'example' => 'InstanceRent',
                                                ],
                                                'moduleName' => [
                                                    'description' => '计价模块名称',
                                                    'type' => 'string',
                                                    'example' => 'InstanceRent',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'promotionDetails' => [
                                        'description' => '优惠详情',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '优惠详情',
                                            'type' => 'object',
                                            'properties' => [
                                                'promotionId' => [
                                                    'description' => '优惠标识',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '数据盘享8.5折',
                                                ],
                                                'promotionName' => [
                                                    'description' => '优惠名称',
                                                    'type' => 'string',
                                                    'example' => '数据盘享8.5折',
                                                ],
                                                'promotionDesc' => [
                                                    'description' => '优惠描述',
                                                    'type' => 'string',
                                                    'example' => '37284',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3****\\",\\n  \\"price\\": {\\n    \\"currency\\": \\"CNY\\",\\n    \\"originalPrice\\": 760,\\n    \\"discountPrice\\": 0,\\n    \\"tradePrice\\": 0,\\n    \\"moduleDetails\\": [\\n      {\\n        \\"costAfterDiscount\\": 0.02,\\n        \\"invoiceDiscount\\": 0,\\n        \\"priceType\\": 1,\\n        \\"originalCost\\": 1000,\\n        \\"moduleCode\\": \\"InstanceRent\\",\\n        \\"moduleName\\": \\"InstanceRent\\"\\n      }\\n    ],\\n    \\"promotionDetails\\": [\\n      {\\n        \\"promotionId\\": 0,\\n        \\"promotionName\\": \\"数据盘享8.5折\\",\\n        \\"promotionDesc\\": \\"37284\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '资源询价',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-qingdao',
            'endpoint' => 'cloudcontrol.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'cloudcontrol.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou',
            'endpoint' => 'cloudcontrol.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-huhehaote',
            'endpoint' => 'cloudcontrol.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-wulanchabu',
            'endpoint' => 'cloudcontrol.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'cloudcontrol.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'cloudcontrol.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-nanjing',
            'endpoint' => 'cloudcontrol.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-fuzhou',
            'endpoint' => 'cloudcontrol.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'cloudcontrol.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-heyuan',
            'endpoint' => 'cloudcontrol.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-guangzhou',
            'endpoint' => 'cloudcontrol.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-chengdu',
            'endpoint' => 'cloudcontrol.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong',
            'endpoint' => 'cloudcontrol.ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-1',
            'endpoint' => 'cloudcontrol.ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-2',
            'endpoint' => 'cloudcontrol.ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'cloudcontrol.ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-2',
            'endpoint' => 'cloudcontrol.ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-3',
            'endpoint' => 'cloudcontrol.ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-5',
            'endpoint' => 'cloudcontrol.ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-6',
            'endpoint' => 'cloudcontrol.ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'us-east-1',
            'endpoint' => 'cloudcontrol.ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'us-west-1',
            'endpoint' => 'cloudcontrol.ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-west-1',
            'endpoint' => 'cloudcontrol.ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-central-1',
            'endpoint' => 'cloudcontrol.ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-south-1',
            'endpoint' => 'cloudcontrol.ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'me-east-1',
            'endpoint' => 'cloudcontrol.ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-7',
            'endpoint' => 'cloudcontrol.ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'me-central-1',
            'endpoint' => 'cloudcontrol.ap-southeast-1.aliyuncs.com',
        ],
    ],
];
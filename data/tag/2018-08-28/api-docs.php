<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'Tag',
        'version' => '2018-08-28',
    ],
    'directories' => [
        [
            'id' => 71898,
            'title' => '资源标签',
            'type' => 'directory',
            'children' => [
                'TagResources',
                'UntagResources',
                'ListTagResources',
                'ListResourcesByTag',
                'ListTagKeys',
                'ListTagValues',
                'CreateTags',
                'DeleteTag',
                'OpenCreatedBy',
                'CheckCreatedByEnabled',
                'CloseCreatedBy',
                'ListSupportResourceTypes',
                'DescribeRegions',
            ],
        ],
        [
            'id' => 166919,
            'title' => '标签策略',
            'type' => 'directory',
            'children' => [
                'CreatePolicy',
                'DeletePolicy',
                'AttachPolicy',
                'DetachPolicy',
                'ModifyPolicy',
                'GetPolicy',
                'GetPolicyEnableStatus',
                'ListPolicies',
                'ListPoliciesForTarget',
                'GetEffectivePolicy',
                'ListTargetsForPolicy',
                'ListConfigRulesForTarget',
                'GetConfigRuleReport',
                'GenerateConfigRuleReport',
            ],
        ],
        [
            'id' => 182347,
            'title' => '其他',
            'type' => 'directory',
            'children' => [
                'DisablePolicyType',
                'EnablePolicyType',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'TagResources' => [
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
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。取值：'."\n"
                            ."\n"
                            .'- 对于中心化部署的云服务，您可以填写通用地域`cn-hangzhou`，或者参照[标签支持的中心化云服务的对应地域](~~2579691~~)填写资源对应的地域ID。'."\n"
                            .'- 对于非中心化部署的云服务，您需要填写资源所属的地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。取值：'."\n"
                            ."\n"
                            .'- 对于中心化部署的云服务，您可以填写通用地域`cn-hangzhou`，或者参照[标签支持的中心化云服务的对应地域](~~2579691~~)填写资源对应的地域ID。'."\n"
                            .'- 对于非中心化部署的云服务，您需要填写资源所属的地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'Tags',
                    'in' => 'query',
                    'schema' => [
                        'description' => '标签键和标签值。键值对取值范围：1~10。'."\n"
                            ."\n"
                            .'如果指定多个标签，则会为指定资源同时创建并绑定该多个标签。'."\n"
                            ."\n"
                            .'约束如下：'."\n"
                            ."\n"
                            .'- 标签键长度范围：1~128个字符。'."\n"
                            .'- 标签值长度范围：1~128个字符。'."\n"
                            .'- 区分大小写。'."\n"
                            .'- 同一个资源上的同一个标签键只能对应一个标签值。如果您尝试添加已有标签键，则对应的标签值会更新为新值。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '{"k1":"v1","k2":"v2"}',
                    ],
                ],
                [
                    'name' => 'ResourceARN',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '资源ARN（Aliyun Resource Name）。',
                        'type' => 'array',
                        'items' => [
                            'description' => '资源ARN（Aliyun Resource Name）。'."\n"
                                ."\n"
                                .'N的取值范围：1~50。'."\n"
                                ."\n"
                                .'资源ARN的格式：`arn:acs:${ProductCode}:${Region}:${Account}:${ResourceType}/${ResourceId}`。各字段含义如下：'."\n"
                                ."\n"
                                .'- `ProductCode`：云服务code。从[ListSupportResourceTypes](~~2330915~~)返回参数中获取。'."\n"
                                .'- `Region`：资源所属的地域ID。支持使用星号（*）表示当前地域。'."\n"
                                .'- `Account`：资源所属的阿里云账号（主账号）ID。支持使用星号（*）表示当前登录的阿里云账号（主账号）。'."\n"
                                .'- `ResourceType`：资源类型。从[ListSupportResourceTypes](~~2330915~~)返回参数中获取。'."\n"
                                .'- `ResourceId`：资源ID。'."\n"
                                ."\n"
                                .'> ResourceARN支持传递资源组、操作审计和资源管理的`ProductCode`和`ResourceType`。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'arn:acs:vpc:cn-hangzhou:123456789****:vpc/vpc-bp19dd90tkt6tz7wu****',
                        ],
                        'required' => true,
                        'example' => 'arn:acs:vpc:cn-hangzhou:123456789****:vpc/vpc-bp19dd90tkt6tz7wu****',
                        'maxItems' => 101,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '72086426-9F8C-4A60-852B-864048FD1199',
                            ],
                            'FailedResources' => [
                                'type' => 'object',
                                'properties' => [
                                    'FailedResource' => [
                                        'description' => '失败资源信息。'."\n"
                                            ."\n"
                                            .'> - 创建并绑定标签成功时，返回的`FailedResources`为空。'."\n"
                                            .'> - 创建并绑定标签失败或部分失败时，返回的`FailedResources`会显示失败资源的详细信息。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '失败资源信息。',
                                            'type' => 'object',
                                            'properties' => [
                                                'ResourceARN' => [
                                                    'description' => '失败资源ARN。',
                                                    'type' => 'string',
                                                    'example' => 'arn:acs:vpc:cn-hangzhou:123456789****:vpc/vpc-bp19dd90tkt6tz7wu****',
                                                ],
                                                'Result' => [
                                                    'description' => '错误结果。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Code' => [
                                                            'description' => '错误码。',
                                                            'type' => 'string',
                                                            'example' => 'InvalidResourceId.NotFound',
                                                        ],
                                                        'Message' => [
                                                            'description' => '错误信息。',
                                                            'type' => 'string',
                                                            'example' => 'The specified ResourceIds are not found in our records.',
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
                        'errorCode' => 'InvalidResourceARN.Region',
                        'errorMessage' => 'The Region specified in the ResourceARN parameter does not match the RegionId parameter, specifically: %s.',
                    ],
                    [
                        'errorCode' => 'InvalidResourceARN.Account',
                        'errorMessage' => 'The Account specified in the ResourceARN parameter does not match the actual account, specifically: %s.',
                    ],
                    [
                        'errorCode' => 'InvalidResourceARN.FormatError',
                        'errorMessage' => 'The format of parameter ResourceARN: %s is not valid, for the correct format, you can refer to the Recommend.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.ResourceType',
                        'errorMessage' => 'The parameter resource type: %s in ResourceARN is not valid or not support.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.ServiceCode',
                        'errorMessage' => 'The parameter service code: %s in  ResourceARN is not valid or not support.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.TagKey',
                        'errorMessage' => 'The TagKey parameter  is invalid. The following TagKeys are invalid: %s.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.TagValue',
                        'errorMessage' => 'The TagValue parameter is invalid. The following TagValues are invalid: %s.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.Tags',
                        'errorMessage' => 'The Tags parameter cannot be empty, and JSON parsing should adhere to the format of a Map.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Duplicate.TagKey',
                        'errorMessage' => 'The Tag.N.Key contains duplicate keys.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.Category',
                        'errorMessage' => 'The specified Category is invalid. Valid values are Custom and System.',
                    ],
                    [
                        'errorCode' => 'MissingParameter.Createby',
                        'errorMessage' => 'You must specify Createby.',
                    ],
                    [
                        'errorCode' => 'MissingParameter.ResourceIds',
                        'errorMessage' => 'You must specify ResourceIds.',
                    ],
                    [
                        'errorCode' => 'NoPermission.Operator',
                        'errorMessage' => 'The user is not authorized to operate on the specified resource.',
                    ],
                    [
                        'errorCode' => 'NoPermissionKey.Category',
                        'errorMessage' => 'Some keys cannot be modified because the user does not have permission.',
                    ],
                    [
                        'errorCode' => 'NoPermissionKey.Operator',
                        'errorMessage' => 'You are not authorized to operate the tag key.',
                    ],
                    [
                        'errorCode' => 'NumberExceed.ResourceIds',
                        'errorMessage' => 'The maximum number of ResourceIds is exceeded.',
                    ],
                    [
                        'errorCode' => 'NumberExceed.Tags',
                        'errorMessage' => 'The maximum number of Tags is exceeded.',
                    ],
                    [
                        'errorCode' => 'QuotaExceed.TagsPerResource',
                        'errorMessage' => 'The maximum number of tags for each resource is exceeded.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'Missing.TagKey',
                        'errorMessage' => 'Tag.N.Value has been specified and you must specify Tag.N.Key.',
                    ],
                    [
                        'errorCode' => 'MissingParameter.AliUid',
                        'errorMessage' => 'You must specify AliUid.',
                    ],
                    [
                        'errorCode' => 'MissingParameter.Bid',
                        'errorMessage' => 'You must specify Bid.',
                    ],
                    [
                        'errorCode' => 'MissingParameter.TagKey',
                        'errorMessage' => 'You must specify TagKey.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"72086426-9F8C-4A60-852B-864048FD1199\\",\\n  \\"FailedResources\\": {\\n    \\"FailedResource\\": [\\n      {\\n        \\"ResourceARN\\": \\"arn:acs:vpc:cn-hangzhou:123456789****:vpc/vpc-bp19dd90tkt6tz7wu****\\",\\n        \\"Result\\": {\\n          \\"Code\\": \\"InvalidResourceId.NotFound\\",\\n          \\"Message\\": \\"The specified ResourceIds are not found in our records.\\"\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<TagResourcesResponse>\\r\\n\\t<RequestId>72086426-9F8C-4A60-852B-864048FD1199</RequestId>\\r\\n\\t<FailedResources></FailedResources>\\r\\n</TagResourcesResponse>\\t\\r\\n\\r\\n","errorExample":""}]',
            'title' => '为云资源创建并绑定标签',
            'summary' => '为指定的多个云产品的多个云资源统一创建并绑定标签。',
            'description' => '标签是云资源的标识，可以帮助您从不同维度对具有相同特征的云资源进行分类、搜索和聚合，让资源管理变得更加轻松。更多信息，请参见[标签概述](~~156983~~)。'."\n"
                ."\n"
                .'支持标签的云服务，请参见[支持标签的云服务](~~171455~~)。',
            'requestParamsDescription' => ' 关于公共请求参数的详情，请参见[公共参数](~~159973~~)。',
            'responseParamsDescription' => "\n"
                ."\n",
            'extraInfo' => ' ',
        ],
        'UntagResources' => [
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
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。取值：'."\n"
                            ."\n"
                            .'- 对于中心化部署的云服务，您可以填写通用地域`cn-hangzhou`，或者参照[标签支持的中心化云服务的对应地域](~~2579691~~)填写资源对应的地域ID。'."\n"
                            .'- 对于非中心化部署的云服务，您需要填写资源所属的地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。取值：'."\n"
                            ."\n"
                            .'- 对于中心化部署的云服务，您可以填写通用地域`cn-hangzhou`，或者参照[标签支持的中心化云服务的对应地域](~~2579691~~)填写资源对应的地域ID。'."\n"
                            .'- 对于非中心化部署的云服务，您需要填写资源所属的地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ResourceARN',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '资源ARN（Aliyun Resource Name）。',
                        'type' => 'array',
                        'items' => [
                            'description' => '资源ARN（Aliyun Resource Name）。'."\n"
                                ."\n"
                                .'N的取值范围：1~50。'."\n"
                                ."\n"
                                .'资源ARN的格式：`arn:acs:${ProductCode}:${Region}:${Account}:${ResourceType}/${ResourceId}`。各字段含义如下：'."\n"
                                ."\n"
                                .'- `ProductCode`：云服务code。从[ListSupportResourceTypes](~~2330915~~)返回参数中获取。'."\n"
                                .'- `Region`：资源所属的地域ID。支持使用星号（*）表示当前地域。'."\n"
                                .'- `Account`：资源所属的阿里云账号（主账号）ID。支持使用星号（*）表示当前登录的阿里云账号（主账号）。'."\n"
                                .'- `ResourceType`：资源类型。从[ListSupportResourceTypes](~~2330915~~)返回参数中获取。'."\n"
                                .'- `ResourceId`：资源ID。'."\n"
                                ."\n"
                                .'> ResourceARN支持传递资源组、操作审计和资源管理的`ProductCode`和`ResourceType`。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'arn:acs:vpc:cn-hangzhou:123456789****:vpc/vpc-bp19dd90tkt6tz7wu****',
                        ],
                        'required' => true,
                        'example' => 'arn:acs:vpc:cn-hangzhou:123456789****:vpc/vpc-bp19dd90tkt6tz7wu****',
                        'maxItems' => 101,
                    ],
                ],
                [
                    'name' => 'TagKey',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '标签键。'."\n"
                            ."\n"
                            .'N的取值范围：1~10。',
                        'type' => 'array',
                        'items' => [
                            'description' => '标签键。'."\n"
                                ."\n"
                                .'N的取值范围：1~10。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'k1',
                        ],
                        'required' => true,
                        'example' => 'k1',
                        'maxItems' => 21,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '43D12436-B10F-4469-8136-FD1C5D2B2083',
                            ],
                            'FailedResources' => [
                                'type' => 'object',
                                'properties' => [
                                    'FailedResource' => [
                                        'description' => '失败资源信息。'."\n"
                                            .'> - 解绑标签成功时，返回的FailedResources为空。'."\n"
                                            .'> - 解绑标签失败或部分失败时，返回的FailedResources会显示失败资源的详细信息。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '失败资源信息。',
                                            'type' => 'object',
                                            'properties' => [
                                                'ResourceARN' => [
                                                    'description' => '失败资源ARN。',
                                                    'type' => 'string',
                                                    'example' => 'arn:acs:ecs:cn-hangzhou:123456789****:instance/i-xxxxxxxxxx1',
                                                ],
                                                'Result' => [
                                                    'description' => '错误结果。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Code' => [
                                                            'description' => '错误码。',
                                                            'type' => 'string',
                                                            'example' => 'InvalidResourceId.NotFound',
                                                        ],
                                                        'Message' => [
                                                            'description' => '错误信息。',
                                                            'type' => 'string',
                                                            'example' => 'The specified ResourceIds are not found in our records.',
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
                        'errorCode' => 'InvalidResourceARN.Account',
                        'errorMessage' => 'The Account specified in the ResourceARN parameter does not match the actual account, specifically: %s.',
                    ],
                    [
                        'errorCode' => 'InvalidResourceARN.FormatError',
                        'errorMessage' => 'The format of parameter ResourceARN: %s is not valid, for the correct format, you can refer to the Recommend.',
                    ],
                    [
                        'errorCode' => 'InvalidResourceARN.Region',
                        'errorMessage' => 'The Region specified in the ResourceARN parameter does not match the RegionId parameter, specifically: %s.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.ResourceType',
                        'errorMessage' => 'The parameter resource type: %s in ResourceARN is not valid or not support.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.ServiceCode',
                        'errorMessage' => 'The parameter service code: %s in  ResourceARN is not valid or not support.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.TagKey',
                        'errorMessage' => 'The TagKey parameter  is invalid. The following TagKeys are invalid: %s.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.TagValue',
                        'errorMessage' => 'The TagValue parameter is invalid. The following TagValues are invalid: %s.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Duplicate.TagKey',
                        'errorMessage' => 'The Tag.N.Key contains duplicate keys.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.Category',
                        'errorMessage' => 'The specified Category is invalid. Valid values are Custom and System.',
                    ],
                    [
                        'errorCode' => 'MissingParameter.Createby',
                        'errorMessage' => 'You must specify Createby.',
                    ],
                    [
                        'errorCode' => 'MissingParameter.ResourceIds',
                        'errorMessage' => 'You must specify ResourceIds.',
                    ],
                    [
                        'errorCode' => 'NoPermission.Operator',
                        'errorMessage' => 'The user is not authorized to operate on the specified resource.',
                    ],
                    [
                        'errorCode' => 'NoPermission.SystemTag',
                        'errorMessage' => 'The user does not have permission to operate the system tag.',
                    ],
                    [
                        'errorCode' => 'NoPermissionKey.Category',
                        'errorMessage' => 'Some keys cannot be modified because the user does not have permission.',
                    ],
                    [
                        'errorCode' => 'NoPermissionKey.Operator',
                        'errorMessage' => 'You are not authorized to operate the tag key.',
                    ],
                    [
                        'errorCode' => 'NumberExceed.ResourceIds',
                        'errorMessage' => 'The maximum number of ResourceIds is exceeded.',
                    ],
                    [
                        'errorCode' => 'NumberExceed.Tags',
                        'errorMessage' => 'The maximum number of Tags is exceeded.',
                    ],
                    [
                        'errorCode' => 'QuotaExceed.TagsPerResource',
                        'errorMessage' => 'The maximum number of tags for each resource is exceeded.',
                    ],
                    [
                        'errorCode' => 'Missing.ServiceCode',
                        'errorMessage' => 'You must specify ServiceCode.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'Missing.TagKey',
                        'errorMessage' => 'Tag.N.Value has been specified and you must specify Tag.N.Key.',
                    ],
                    [
                        'errorCode' => 'MissingParameter.AliUid',
                        'errorMessage' => 'You must specify AliUid.',
                    ],
                    [
                        'errorCode' => 'MissingParameter.Bid',
                        'errorMessage' => 'You must specify Bid.',
                    ],
                    [
                        'errorCode' => 'MissingParameter.TagKey',
                        'errorMessage' => 'You must specify TagKey.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"43D12436-B10F-4469-8136-FD1C5D2B2083\\",\\n  \\"FailedResources\\": {\\n    \\"FailedResource\\": [\\n      {\\n        \\"ResourceARN\\": \\"arn:acs:ecs:cn-hangzhou:123456789****:instance/i-xxxxxxxxxx1\\",\\n        \\"Result\\": {\\n          \\"Code\\": \\"InvalidResourceId.NotFound\\",\\n          \\"Message\\": \\"The specified ResourceIds are not found in our records.\\"\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<UntagResourcesResponse>\\r\\n\\t<RequestId>43D12436-B10F-4469-8136-FD1C5D2B2083</RequestId>\\r\\n\\t<FailedResources></FailedResources>\\r\\n</UntagResourcesResponse>\\t\\r\\n","errorExample":""}]',
            'title' => '为云资源统一解绑标签',
            'summary' => '为指定的多个云产品的多个云资源统一解绑标签。',
            'description' => '解绑后，如果该标签没有绑定其他任何资源，系统会在24小时内自动将其删除。'."\n"
                ."\n"
                .'支持标签的云服务，请参见[支持标签的云服务](~~171455~~)。',
            'requestParamsDescription' => ' 关于公共请求参数的详情，请参见[公共参数](~~159973~~)。',
            'responseParamsDescription' => "\n",
            'extraInfo' => ' ',
        ],
        'ListTagResources' => [
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
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。取值：'."\n"
                            ."\n"
                            .'- 对于中心化部署的云服务，您需要参照[标签支持的中心化云服务的对应地域](~~2579691~~)填写资源对应的地域ID。'."\n"
                            .'- 对于非中心化部署的云服务，您需要填写资源所属的地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。取值：'."\n"
                            ."\n"
                            .'- 对于中心化部署的云服务，您需要参照[标签支持的中心化云服务的对应地域](~~2579691~~)填写资源对应的地域ID。'."\n"
                            .'- 对于非中心化部署的云服务，您需要填写资源所属的地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '下一个查询开始的Token。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'caeba0bbb2be03f84eb48b699f0a****',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页时每页显示的数据行数。'."\n"
                            ."\n"
                            .'最大值：1000。默认值：50。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '50',
                    ],
                ],
                [
                    'name' => 'Tags',
                    'in' => 'query',
                    'schema' => [
                        'description' => '标签键和标签值，键值对取值范围：1~10。'."\n"
                            ."\n"
                            .'如果指定多个标签，则会查询同时绑定了该多个标签的资源。'."\n"
                            ."\n"
                            .'约束如下：'."\n"
                            ."\n"
                            .'- 标签键取值范围：1~128个字符。'."\n"
                            .'- 标签值取值范围：1~128个字符。'."\n"
                            .'- 区分大小写。'."\n"
                            .'- 同一个资源上的同一个标签键只能对应一个标签值。如果您尝试添加已有标签键，则对应的标签值会更新为新值。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"k1":"v1","k2":"v2"}',
                    ],
                ],
                [
                    'name' => 'Category',
                    'in' => 'query',
                    'schema' => [
                        'description' => '标签类型。取值：'."\n"
                            ."\n"
                            .'- Custom：自定义标签。'."\n"
                            .'- System：系统标签。'."\n"
                            .'- All：全部标签。'."\n"
                            ."\n"
                            .'默认值：All。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Custom',
                    ],
                ],
                [
                    'name' => 'ResourceARN',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '资源ARN（Aliyun Resource Name）。',
                        'type' => 'array',
                        'items' => [
                            'description' => '资源ARN（Aliyun Resource Name）。'."\n"
                                ."\n"
                                .'N的取值范围：1~50。'."\n"
                                ."\n"
                                .'资源ARN的格式：`arn:acs:${ProductCode}:${Region}:${Account}:${ResourceType}/${ResourceId}`。各字段含义如下：'."\n"
                                ."\n"
                                .'- `ProductCode`：云服务code。从[ListSupportResourceTypes](~~2330915~~)返回参数中获取。'."\n"
                                .'- `Region`：资源所属的地域ID。支持使用星号（*）表示当前地域。'."\n"
                                .'- `Account`：资源所属的阿里云账号（主账号）ID。支持使用星号（*）表示当前登录的阿里云账号（主账号）。'."\n"
                                .'- `ResourceType`：资源类型。从[ListSupportResourceTypes](~~2330915~~)返回参数中获取。'."\n"
                                .'- `ResourceId`：资源ID。'."\n"
                                ."\n"
                                .'> ResourceARN支持传递资源组、操作审计和资源管理的`ProductCode`和`ResourceType`。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'arn:acs:ecs:cn-hangzhou:123456789****:instance/i-bp15hr53jws84akg****',
                        ],
                        'required' => false,
                        'example' => 'arn:acs:ecs:cn-hangzhou:123456789****:instance/i-bp15hr53jws84akg****',
                        'maxItems' => 101,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'NextToken' => [
                                'description' => '根据`NextToken`判断是否具备下一个查询开始的Token。取值：'."\n"
                                    ."\n"
                                    .'- 如果`NextToken`为空，即`"NextToken": ""`，表示没有下一个。'."\n"
                                    .'- 如果`NextToken`有值，则该值就是下一个查询开始的Token。',
                                'type' => 'string',
                                'example' => 'caeba0bbb2be03f84eb48b699f0a****',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '014738E0-3C7F-47D8-8FB9-469500C6F387',
                            ],
                            'TagResources' => [
                                'description' => '资源绑定的标签信息。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '资源绑定的标签信息。',
                                    'type' => 'object',
                                    'properties' => [
                                        'ResourceARN' => [
                                            'description' => '资源ARN。',
                                            'type' => 'string',
                                            'example' => 'arn:acs:ecs:cn-hangzhou:123456789****:instance/i-bp15hr53jws84akg****',
                                        ],
                                        'Tags' => [
                                            'description' => '标签信息。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '标签信息。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'Key' => [
                                                        'description' => '标签键。',
                                                        'type' => 'string',
                                                        'example' => 'k1',
                                                    ],
                                                    'Value' => [
                                                        'description' => '标签值。',
                                                        'type' => 'string',
                                                        'example' => 'v1',
                                                    ],
                                                    'Category' => [
                                                        'description' => '标签类型。取值：'."\n"
                                                            ."\n"
                                                            .'- Custom：自定义标签。'."\n"
                                                            .'- System：系统标签。',
                                                        'type' => 'string',
                                                        'example' => 'Custom',
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
                        'errorCode' => 'InvalidResourceARN.Account',
                        'errorMessage' => 'The Account specified in the ResourceARN parameter does not match the actual account, specifically: %s.',
                    ],
                    [
                        'errorCode' => 'InvalidResourceARN.FormatError',
                        'errorMessage' => 'The format of parameter ResourceARN: %s is not valid, for the correct format, you can refer to the Recommend.',
                    ],
                    [
                        'errorCode' => 'InvalidResourceARN.Region',
                        'errorMessage' => 'The Region specified in the ResourceARN parameter does not match the RegionId parameter, specifically: %s.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.TagKey',
                        'errorMessage' => 'The TagKey parameter  is invalid. The following TagKeys are invalid: %s.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.Tags',
                        'errorMessage' => 'The Tags parameter cannot be empty, and JSON parsing should adhere to the format of a Map.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Duplicate.TagKey',
                        'errorMessage' => 'The Tag.N.Key contains duplicate keys.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.Category',
                        'errorMessage' => 'The specified Category is invalid. Valid values are Custom and System.',
                    ],
                    [
                        'errorCode' => 'MissingParameter.ResourceIds',
                        'errorMessage' => 'You must specify ResourceIds.',
                    ],
                    [
                        'errorCode' => 'NoPermission.Operator',
                        'errorMessage' => 'The user is not authorized to operate on the specified resource.',
                    ],
                    [
                        'errorCode' => 'NoPermission.SystemTag',
                        'errorMessage' => 'The user does not have permission to operate the system tag.',
                    ],
                    [
                        'errorCode' => 'NoPermissionKey.Category',
                        'errorMessage' => 'Some keys cannot be modified because the user does not have permission.',
                    ],
                    [
                        'errorCode' => 'NoPermissionKey.Operator',
                        'errorMessage' => 'You are not authorized to operate the tag key.',
                    ],
                    [
                        'errorCode' => 'NumberExceed.ResourceIds',
                        'errorMessage' => 'The maximum number of ResourceIds is exceeded.',
                    ],
                    [
                        'errorCode' => 'NumberExceed.Tags',
                        'errorMessage' => 'The maximum number of Tags is exceeded.',
                    ],
                    [
                        'errorCode' => 'QuotaExceed.TagsPerResource',
                        'errorMessage' => 'The maximum number of tags for each resource is exceeded.',
                    ],
                    [
                        'errorCode' => 'Invalid.NextToken',
                        'errorMessage' => 'The parameter NextToken is invalid.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.TagValue',
                        'errorMessage' => 'The Tag.N.Value parameter  is invalid.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.ResourceType',
                        'errorMessage' => 'The ResourceType parameter is invalid.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'Missing.TagKey',
                        'errorMessage' => 'Tag.N.Value has been specified and you must specify Tag.N.Key.',
                    ],
                    [
                        'errorCode' => 'MissingParameter.AliUid',
                        'errorMessage' => 'You must specify AliUid.',
                    ],
                    [
                        'errorCode' => 'MissingParameter.Bid',
                        'errorMessage' => 'You must specify Bid.',
                    ],
                    [
                        'errorCode' => 'MissingParameter.RegionId',
                        'errorMessage' => 'You must specify RegionId.',
                    ],
                    [
                        'errorCode' => 'MissingParameter.RemoveNum',
                        'errorMessage' => 'You must specify RemoveNum.',
                    ],
                    [
                        'errorCode' => 'MissingParameter.ResourceIdARN',
                        'errorMessage' => 'You must specify ResourceIdARN.',
                    ],
                    [
                        'errorCode' => 'MissingParameter.TagKey',
                        'errorMessage' => 'You must specify TagKey.',
                    ],
                    [
                        'errorCode' => 'MissingParameter.Tags',
                        'errorMessage' => 'You must specify Tags.',
                    ],
                    [
                        'errorCode' => 'NoMatch.RemoveNum',
                        'errorMessage' => 'The specified DataNum does not match the deleted number.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"NextToken\\": \\"caeba0bbb2be03f84eb48b699f0a****\\",\\n  \\"RequestId\\": \\"014738E0-3C7F-47D8-8FB9-469500C6F387\\",\\n  \\"TagResources\\": [\\n    {\\n      \\"ResourceARN\\": \\"arn:acs:ecs:cn-hangzhou:123456789****:instance/i-bp15hr53jws84akg****\\",\\n      \\"Tags\\": [\\n        {\\n          \\"Key\\": \\"k1\\",\\n          \\"Value\\": \\"v1\\",\\n          \\"Category\\": \\"Custom\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<ListTagResourcesResponse>\\r\\n\\t<RequestId>014738E0-3C7F-47D8-8FB9-469500C6F387</RequestId>\\r\\n\\t<NextToken></NextToken>\\r\\n\\t<TagResources>\\r\\n\\t\\t<ResourceARN>arn:acs:ecs:cn-hangzhou:123456789****:instance/i-bp15hr53jws84akg****</ResourceARN>\\r\\n\\t\\t<Tags>\\r\\n\\t\\t\\t<Category>Custom</Category>\\r\\n\\t\\t\\t<Value>v2</Value>\\r\\n\\t\\t\\t<Key>k2</Key>\\r\\n\\t\\t</Tags>\\r\\n\\t\\t<Tags>\\r\\n\\t\\t\\t<Category>Custom</Category>\\r\\n\\t\\t\\t<Value>v1</Value>\\r\\n\\t\\t\\t<Key>k1</Key>\\r\\n\\t\\t</Tags>\\r\\n\\t</TagResources>\\r\\n\\t<TagResources>\\r\\n\\t\\t<ResourceARN>arn:acs:ecs:cn-hangzhou:123456789****:disk/d-bp16cat8zekjocv4z2fm</ResourceARN>\\r\\n\\t\\t<Tags>\\r\\n\\t\\t\\t<Category>Custom</Category>\\r\\n\\t\\t\\t<Value>v1</Value>\\r\\n\\t\\t\\t<Key>k1</Key>\\r\\n\\t\\t</Tags>\\r\\n\\t\\t<Tags>\\r\\n\\t\\t\\t<Category>Custom</Category>\\r\\n\\t\\t\\t<Value>v2</Value>\\r\\n\\t\\t\\t<Key>k2</Key>\\r\\n\\t\\t</Tags>\\r\\n\\t</TagResources>\\r\\n\\t<TagResources>\\r\\n\\t\\t<ResourceARN>arn:acs:vpc:cn-hangzhou:123456789****:vpc/vpc-bp19dd90tkt6tz7wu****</ResourceARN>\\r\\n\\t\\t<Tags>\\r\\n\\t\\t\\t<Category>Custom</Category>\\r\\n\\t\\t\\t<Value>v2</Value>\\r\\n\\t\\t\\t<Key>k2</Key>\\r\\n\\t\\t</Tags>\\r\\n\\t\\t<Tags>\\r\\n\\t\\t\\t<Category>Custom</Category>\\r\\n\\t\\t\\t<Value>v1</Value>\\r\\n\\t\\t\\t<Key>k1</Key>\\r\\n\\t\\t</Tags>\\r\\n\\t</TagResources>\\r\\n</ListTagResourcesResponse>\\t\\r\\n","errorExample":""}]',
            'title' => '查询资源标签列表',
            'summary' => '查询多个云产品的多个云资源绑定的标签列表。',
            'description' => '支持标签的云服务，请参见[支持标签的云服务](~~171455~~)。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListResourcesByTag' => [
            'summary' => '基于标签查询资源。',
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。'."\n"
                            ."\n"
                            .'关于地域ID的详情，请参见[服务接入点](~~2330902~~)。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-shenzhen',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。'."\n"
                            ."\n"
                            .'关于地域ID的详情，请参见[服务接入点](~~2330902~~)。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-shenzhen',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '下一个查询开始的Token。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'caeba0bbb2be03f84eb48b699f0a****',
                    ],
                ],
                [
                    'name' => 'MaxResult',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页时每页显示的数据条数。'."\n"
                            ."\n"
                            .'默认值：50。最大值：1000。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '50',
                    ],
                ],
                [
                    'name' => 'ResourceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源类型，用于查询的过滤条件。取值：'."\n"
                            .'* FuzzyType=EQUAL时，支持的资源类型请调用[ListSupportResourceTypes](~~2330915~~)获取。'."\n"
                            ."\n"
                            .'* FuzzyType=NOT时，支持的资源类型请参见下文**支持逻辑非查询的资源类型**。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ALIYUN::VPC::VPC',
                    ],
                ],
                [
                    'name' => 'FuzzyType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询操作。取值：'."\n"
                            ."\n"
                            .'- EQUAL（默认值）：精确查询绑定了指定标签的资源。'."\n"
                            .'- NOT：精确查询未绑定指定标签的资源。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'EQUAL',
                    ],
                ],
                [
                    'name' => 'TagFilter.Value',
                    'in' => 'query',
                    'schema' => [
                        'description' => '标签值，用于查询的过滤条件。'."\n"
                            ."\n"
                            .'最多支持128个字符，不能包含`http://`或者`https://`。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'v1',
                    ],
                ],
                [
                    'name' => 'TagFilter.Key',
                    'in' => 'query',
                    'schema' => [
                        'description' => '标签键，用于查询的过滤条件。'."\n"
                            ."\n"
                            .'最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'k1',
                    ],
                ],
                [
                    'name' => 'IncludeAllTags',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否返回资源上的标签信息。取值：'."\n"
                            ."\n"
                            .'- False（默认值）：不返回资源上的标签信息。'."\n"
                            .'- True ：返回资源上所有标签信息。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'False',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '7D61FF74-61C2-5768-B01F-05FC97F24F35',
                            ],
                            'NextToken' => [
                                'title' => '表示当前调用返回读取到的位置，空或者空字符串代表数据已经读取完毕',
                                'description' => '根据`NextToken`判断是否具备下一个查询开始的Token。取值：'."\n"
                                    ."\n"
                                    .'- 如果`NextToken`为空，即`"NextToken": ""`，表示没有下一个。'."\n"
                                    .'- 如果`NextToken`有值，则该值就是下一个查询开始的Token。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'caeba0bbb2be03f84eb48b699f0a****',
                            ],
                            'Resources' => [
                                'description' => '资源列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '资源列表。',
                                    'type' => 'object',
                                    'properties' => [
                                        'ResourceId' => [
                                            'description' => '资源ID。',
                                            'type' => 'string',
                                            'example' => 'vpc-wz9pifyuw26esxd05****',
                                        ],
                                        'Tags' => [
                                            'description' => '标签信息。'."\n"
                                                ."\n"
                                                .'当`IncludeAllTags`为`True`时，返回该参数。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '标签信息。'."\n"
                                                    ."\n"
                                                    .'当`IncludeAllTags`为`True`时，返回该参数。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'Key' => [
                                                        'description' => '标签键。',
                                                        'type' => 'string',
                                                        'example' => 'k1',
                                                    ],
                                                    'Value' => [
                                                        'description' => '标签值。',
                                                        'type' => 'string',
                                                        'example' => 'v1',
                                                    ],
                                                    'Category' => [
                                                        'description' => '资源标签类型。取值：'."\n"
                                                            ."\n"
                                                            .'- custom：自定义标签。'."\n"
                                                            .'- system：系统标签。',
                                                        'type' => 'string',
                                                        'example' => 'custom',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"7D61FF74-61C2-5768-B01F-05FC97F24F35\\",\\n  \\"NextToken\\": \\"caeba0bbb2be03f84eb48b699f0a****\\",\\n  \\"Resources\\": [\\n    {\\n      \\"ResourceId\\": \\"vpc-wz9pifyuw26esxd05****\\",\\n      \\"Tags\\": [\\n        {\\n          \\"Key\\": \\"k1\\",\\n          \\"Value\\": \\"v1\\",\\n          \\"Category\\": \\"custom\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListResourcesByTagResponse>\\n    <RequestId>7D61FF74-61C2-5768-B01F-05FC97F24F35</RequestId>\\n    <NextToken/>\\n    <Resources>\\n        <ResourceId>vpc-wz9pifyuw26esxd05****</ResourceId>\\n    </Resources>\\n    <Resources>\\n        <ResourceId>vpc-wz9qpfj5nej4ofnzu****</ResourceId>\\n    </Resources>\\n</ListResourcesByTagResponse>","errorExample":""}]',
            'title' => '基于标签查询资源',
            'description' => '### 使用说明'."\n"
                .'本文将提供一个示例，在华南1（深圳）地域，查询标签键`k1`绑定的VPC实例。返回结果显示，该标签键绑定了2个VPC实例。',
            'requestParamsDescription' => '**支持逻辑非查询的资源类型：**'."\n"
                ."\n"
                .'* ALIYUN::ADB::CLUSTER'."\n"
                .'* ALIYUN::ALB::ACL'."\n"
                .'* ALIYUN::ALB::LOADBALANCER'."\n"
                .'* ALIYUN::ALB::SECURITYPOLICY'."\n"
                .'* ALIYUN::ALB::SERVERGROUP'."\n"
                .'* ALIYUN::ALIDNS::DOMAIN'."\n"
                .'* ALIYUN::BASTIONHOST::INSTANCE'."\n"
                .'* ALIYUN::BPSTUDIO::APPLICATION'."\n"
                .'* ALIYUN::BPSTUDIO::TEMPLATE'."\n"
                .'* ALIYUN::CAS::INSTANCE'."\n"
                .'* ALIYUN::CDN::DOMAIN'."\n"
                .'* ALIYUN::CDS::CLUSTER'."\n"
                .'* ALIYUN::CEN::BANDWIDTHPACKAGE'."\n"
                .'* ALIYUN::CEN::CEN'."\n"
                .'* ALIYUN::CS::CLUSTER'."\n"
                .'* ALIYUN::DBAUDIT::INSTANCE'."\n"
                .'* ALIYUN::DCDN::DOMAIN'."\n"
                .'* ALIYUN::DDOSBGP::INSTANCE'."\n"
                .'* ALIYUN::DDOSCOO::INSTANCE'."\n"
                .'* ALIYUN::DDS::INSTANCE'."\n"
                .'* ALIYUN::DRDS::INSTANCE'."\n"
                .'* ALIYUN::ECS::DDH'."\n"
                .'* ALIYUN::ECS::DDHCLUSTER'."\n"
                .'* ALIYUN::ECS::DISK'."\n"
                .'* ALIYUN::ECS::ENI'."\n"
                .'* ALIYUN::ECS::INSTANCE'."\n"
                .'* ALIYUN::ECS::KEYPAIR'."\n"
                .'* ALIYUN::ECS::LAUNCHTEMPLATE'."\n"
                .'* ALIYUN::ECS::SECURITYGROUP'."\n"
                .'* ALIYUN::ECS::SNAPSHOT'."\n"
                .'* ALIYUN::EDAS::APPLICATION'."\n"
                .'* ALIYUN::EDAS::CLUSTER'."\n"
                .'* ALIYUN::ELASTICSEARCH::INSTANCE'."\n"
                .'* ALIYUN::EMR::CLUSTER'."\n"
                .'* ALIYUN::EMR::FLOWPROJECT'."\n"
                .'* ALIYUN::HBR::CLIENT'."\n"
                .'* ALIYUN::HBR::HANAINSTANCE'."\n"
                .'* ALIYUN::HBR::VAULT'."\n"
                .'* ALIYUN::KVSTORE::INSTANCE'."\n"
                .'* ALIYUN::MULTIMOD::CLUSTER'."\n"
                .'* ALIYUN::OCEANBASE::INSTANCE'."\n"
                .'* ALIYUN::OOS::EXECUTION'."\n"
                .'* ALIYUN::OOS::PARAMETER'."\n"
                .'* ALIYUN::OOS::SECRETPARAMETER'."\n"
                .'* ALIYUN::OOS::STATECONFIGURATION'."\n"
                .'* ALIYUN::OOS::TEMPLATE'."\n"
                .'* ALIYUN::OSS::BUCKET'."\n"
                .'* ALIYUN::OUTBOUNDBOT::INSTANCE'."\n"
                .'* ALIYUN::POLARDB::CLUSTER'."\n"
                .'* ALIYUN::PVTZ::ZONE'."\n"
                .'* ALIYUN::RDS::INSTANCE'."\n"
                .'* ALIYUN::VPC::COMMONBANDWIDTHPACKAGE'."\n"
                .'* ALIYUN::VPC::EIP'."\n"
                .'* ALIYUN::VPC::NATGATEWAY'."\n"
                .'* ALIYUN::VPC::VPC',
        ],
        'ListTagKeys' => [
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
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。'."\n"
                            ."\n"
                            .'关于地域ID的详情，请参见[服务接入点](~~2330902~~)。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。'."\n"
                            ."\n"
                            .'关于地域ID的详情，请参见[服务接入点](~~2330902~~)。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '下一个查询开始的Token。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'caeba0bbb2be03f84eb48b699f0a****',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页时每页显示的标签键个数。'."\n"
                            ."\n"
                            .'最大值：1000。默认值：50。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '50',
                    ],
                ],
                [
                    'name' => 'Category',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源标签类型，用于查询的过滤条件。取值：'."\n"
                            ."\n"
                            .'- all（默认值）：全部标签。'."\n"
                            .'- custom：自定义标签。'."\n"
                            .'- system：系统标签。'."\n"
                            ."\n"
                            .'> 取值不区分大小写。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'all',
                    ],
                ],
                [
                    'name' => 'ResourceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源类型，用于查询的过滤条件。'."\n"
                            ."\n"
                            .'格式：`ALIYUN::${ProductCode}::${ResourceType}`，全部大写。'."\n"
                            ."\n"
                            .'- `ProductCode`：云服务code。从[ListSupportResourceTypes](~~2330915~~)返回参数中获取。'."\n"
                            .'- `ResourceType`：资源类型。从[ListSupportResourceTypes](~~2330915~~)返回参数中获取。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ALIYUN::ECS::INSTANCE',
                    ],
                ],
                [
                    'name' => 'QueryType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '标签类型，用于查询的过滤条件。取值：'."\n"
                            ."\n"
                            .'- ResourceTag（默认值）：资源标签。包括自定义标签和系统标签。'."\n"
                            .'- MetaTag：预置标签。'."\n"
                            ."\n"
                            .'> 取值不区分大小写。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ResourceTag',
                    ],
                ],
                [
                    'name' => 'FuzzyType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '模糊查询类型。取值：'."\n"
                            ."\n"
                            .'- EQUAL（默认值）：精确查询。'."\n"
                            .'- PREFIX：根据前缀进行模糊查询。'."\n"
                            ."\n"
                            .'> 该参数仅支持华南1（深圳）和中国（香港）地域。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'EQUAL',
                    ],
                ],
                [
                    'name' => 'TagFilter.Key',
                    'in' => 'query',
                    'schema' => [
                        'description' => '模糊查询的标签键。'."\n"
                            ."\n"
                            .'该参数与`FuzzyType`配合使用。'."\n"
                            .'> 该参数仅支持华南1（深圳）和中国（香港）地域。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'team',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'NextToken' => [
                                'description' => '根据`NextToken`判断是否具备下一个查询开始的Token。取值：'."\n"
                                    ."\n"
                                    .'- 如果`NextToken`为空，即`"NextToken": ""`，表示没有下一个。'."\n"
                                    .'- 如果`NextToken`有值，则该值就是下一个查询开始的Token。',
                                'type' => 'string',
                                'example' => 'caeba0bbb2be03f84eb48b699f0a****',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'DC09A6AA-2713-4E10-A2E9-E6C5C43A8842',
                            ],
                            'Keys' => [
                                'type' => 'object',
                                'properties' => [
                                    'Key' => [
                                        'description' => '标签键信息。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '标签键信息。',
                                            'type' => 'object',
                                            'properties' => [
                                                'Key' => [
                                                    'description' => '标签键。',
                                                    'type' => 'string',
                                                    'example' => 'team',
                                                ],
                                                'Category' => [
                                                    'description' => '资源标签类型。取值：'."\n"
                                                        ."\n"
                                                        .'- custom：自定义标签。'."\n"
                                                        .'- system：系统标签。',
                                                    'type' => 'string',
                                                    'example' => 'custom',
                                                ],
                                                'Description' => [
                                                    'description' => '标签键描述。',
                                                    'type' => 'string',
                                                    'example' => '业务团队',
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
                        'errorCode' => 'FuzzyQuery.NotSupport',
                        'errorMessage' => 'The fuzzy query is not supported.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Invalid.NextToken',
                        'errorMessage' => 'The parameter NextToken is invalid.',
                    ],
                    [
                        'errorCode' => 'NoPermission.Operator',
                        'errorMessage' => 'The user is not authorized to operate on the specified resource.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.Category',
                        'errorMessage' => 'The specified Category is invalid. Valid values are Custom and System.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.ResourceType',
                        'errorMessage' => 'The ResourceType parameter is invalid.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"NextToken\\": \\"caeba0bbb2be03f84eb48b699f0a****\\",\\n  \\"RequestId\\": \\"DC09A6AA-2713-4E10-A2E9-E6C5C43A8842\\",\\n  \\"Keys\\": {\\n    \\"Key\\": [\\n      {\\n        \\"Key\\": \\"team\\",\\n        \\"Category\\": \\"custom\\",\\n        \\"Description\\": \\"业务团队\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<ListTagKeysResponse>\\r\\n\\t<NextToken></NextToken>\\r\\n\\t<RequestId>DC09A6AA-2713-4E10-A2E9-E6C5C43A8842</RequestId>\\r\\n\\t<Keys>\\r\\n\\t\\t<Key>\\r\\n\\t\\t\\t<Category>custom</Category>\\r\\n\\t\\t\\t<Key>team</Key>\\r\\n\\t\\t</Key>\\r\\n\\t\\t<Key>\\r\\n\\t\\t\\t<Category>custom</Category>\\r\\n\\t\\t\\t<Key>k1</Key>\\r\\n\\t\\t</Key>\\r\\n\\t\\t<Key>\\r\\n\\t\\t\\t<Category>custom</Category>\\r\\n\\t\\t\\t<Key>k2</Key>\\r\\n\\t\\t</Key>\\r\\n\\t</Keys>\\r\\n</ListTagKeysResponse>\\t\\r\\n","errorExample":""}]',
            'title' => '查询标签键列表',
            'summary' => '查询标签键列表。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListTagValues' => [
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
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。'."\n"
                            ."\n"
                            .'关于地域ID的详情，请参见[服务接入点](~~2330902~~)。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。'."\n"
                            ."\n"
                            .'关于地域ID的详情，请参见[服务接入点](~~2330902~~)。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'Key',
                    'in' => 'query',
                    'schema' => [
                        'description' => '标签键，用于查询的过滤条件。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'k1',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '下一个查询开始的Token。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'caeba0bbb2be03f84eb48b699f0a****',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页时每页显示的标签值个数。'."\n"
                            ."\n"
                            .'最大值：1000。默认值：50。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '50',
                    ],
                ],
                [
                    'name' => 'ResourceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源类型，用于查询的过滤条件。'."\n"
                            ."\n"
                            .'格式：`ALIYUN::${ProductCode}::${ResourceType}`，全部大写。'."\n"
                            ."\n"
                            .'- `ProductCode`：云服务code。从[ListSupportResourceTypes](~~2330915~~)返回参数中获取。'."\n"
                            .'- `ResourceType`：资源类型。从[ListSupportResourceTypes](~~2330915~~)返回参数中获取。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ALIYUN::ECS::INSTANCE',
                    ],
                ],
                [
                    'name' => 'QueryType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '标签类型，用于查询的过滤条件。取值：'."\n"
                            ."\n"
                            .'- ResourceTag（默认值）：资源标签。包括自定义标签和系统标签。'."\n"
                            .'- MetaTag：预置标签。'."\n"
                            ."\n"
                            .'> 取值不区分大小写。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ResourceTag',
                    ],
                ],
                [
                    'name' => 'FuzzyType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '模糊查询类型。取值：'."\n"
                            ."\n"
                            .'- EQUAL（默认值）：精确查询。'."\n"
                            .'- PREFIX：根据前缀进行模糊查询。'."\n"
                            ."\n"
                            .'> 该参数仅支持华南1（深圳）和中国（香港）地域。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'EQUAL',
                    ],
                ],
                [
                    'name' => 'TagFilter.Value',
                    'in' => 'query',
                    'schema' => [
                        'description' => '模糊查询的标签值。'."\n"
                            ."\n"
                            .'该参数与`FuzzyType`配合使用。'."\n"
                            ."\n"
                            .'> 该参数仅支持华南1（深圳）和中国（香港）地域。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'v1',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'NextToken' => [
                                'description' => '根据`NextToken`判断是否具备下一个查询开始的Token。取值：'."\n"
                                    ."\n"
                                    .'- 如果`NextToken`为空，即`"NextToken": ""`，表示没有下一个。'."\n"
                                    .'- 如果`NextToken`有值，则该值就是下一个查询开始的Token。',
                                'type' => 'string',
                                'example' => 'caeba0bbb2be03f84eb48b699f0a****',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '8989CA7E-D2E0-4B6D-8282-311106E80150',
                            ],
                            'Values' => [
                                'type' => 'object',
                                'properties' => [
                                    'Value' => [
                                        'description' => '标签值列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '标签值信息。',
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
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'FuzzyQuery.NotSupport',
                        'errorMessage' => 'The fuzzy query is not supported.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Invalid.NextToken',
                        'errorMessage' => 'The parameter NextToken is invalid.',
                    ],
                    [
                        'errorCode' => 'NoPermission.Operator',
                        'errorMessage' => 'The user is not authorized to operate on the specified resource.',
                    ],
                    [
                        'errorCode' => 'NoPermissionKey.Operator',
                        'errorMessage' => 'You are not authorized to operate the tag key.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.ResourceType',
                        'errorMessage' => 'The ResourceType parameter is invalid.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.TagKey',
                        'errorMessage' => 'The Tag.N.Key parameter  is invalid.',
                    ],
                    [
                        'errorCode' => 'MetaTagKeyNotFound',
                        'errorMessage' => 'The meta tag key is not found.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'Missing.TagKey',
                        'errorMessage' => 'Tag.N.Value has been specified and you must specify Tag.N.Key.',
                    ],
                    [
                        'errorCode' => 'MissingParameter.TagKey',
                        'errorMessage' => 'You must specify TagKey.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"NextToken\\": \\"caeba0bbb2be03f84eb48b699f0a****\\",\\n  \\"RequestId\\": \\"8989CA7E-D2E0-4B6D-8282-311106E80150\\",\\n  \\"Values\\": {\\n    \\"Value\\": [\\n      \\"v1\\"\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<ListTagValuesResponse>\\r\\n\\t<NextToken></NextToken>\\r\\n\\t<RequestId>8989CA7E-D2E0-4B6D-8282-311106E80150</RequestId>\\r\\n\\t<Values>\\r\\n\\t\\t<Value>v1</Value>\\r\\n\\t</Values>\\r\\n</ListTagValuesResponse>\\t\\r\\n","errorExample":""}]',
            'title' => '查询指定标签键对应的标签值',
            'summary' => '查询指定标签键对应的标签值。',
            'requestParamsDescription' => ' 关于公共请求参数的详情，请参见[公共参数](~~159973~~)。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateTags' => [
            'summary' => '创建预置标签。',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。'."\n"
                            ."\n"
                            .'> 仅支持`cn-hangzhou`地域。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'TagKeyValueParamList',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '标签键值参数列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '标签键。'."\n"
                                ."\n"
                                .'最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。'."\n"
                                ."\n"
                                .'N的取值范围：1~10。',
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '标签键。'."\n"
                                        ."\n"
                                        .'最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。'."\n"
                                        ."\n"
                                        .'N的取值范围：1~10。',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => 'Environment',
                                ],
                                'TagValueParamList' => [
                                    'description' => '标签值参数列表。',
                                    'type' => 'array',
                                    'items' => [
                                        'description' => '标签值。'."\n"
                                            ."\n"
                                            .'最多支持128个字符，不能包含`http://`或者`https://`。'."\n"
                                            ."\n"
                                            .'N的取值范围：1~10。',
                                        'type' => 'object',
                                        'properties' => [
                                            'Value' => [
                                                'description' => '标签值。'."\n"
                                                    ."\n"
                                                    .'最多支持128个字符，不能包含`http://`或者`https://`。'."\n"
                                                    ."\n"
                                                    .'N的取值范围：1~10。',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'test',
                                            ],
                                            'Description' => [
                                                'description' => '标签值描述。'."\n"
                                                    ."\n"
                                                    .'N的取值范围：1~10。',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => '测试环境',
                                            ],
                                        ],
                                        'required' => false,
                                    ],
                                    'required' => false,
                                    'maxItems' => 10,
                                ],
                                'Description' => [
                                    'description' => '标签键描述。'."\n"
                                        ."\n"
                                        .'N的取值范围：1~10。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '业务环境',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => true,
                        'maxItems' => 10,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '94E16BB6-3FB6-1297-B5B2-ED2250F437CD',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'WrongEndpoint',
                        'errorMessage' => 'Only the central endpoint supports the create and delete operation of meta tag.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.Key',
                        'errorMessage' => 'The Key is invalid.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.Value',
                        'errorMessage' => 'The Value is invalid.',
                    ],
                    [
                        'errorCode' => 'NoPermission.Operator',
                        'errorMessage' => 'The user is not authorized to operate on the specified resource.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'MissingParameter.TagKeyValueParamList',
                        'errorMessage' => 'The parameter TagKeyValueParamList must not be null.',
                    ],
                    [
                        'errorCode' => 'MissingParameter.Key',
                        'errorMessage' => 'The Key must not be empty.',
                    ],
                    [
                        'errorCode' => 'MissingParameter.Value',
                        'errorMessage' => 'The Value must not be empty.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"94E16BB6-3FB6-1297-B5B2-ED2250F437CD\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<CreateTagsResponse>\\r\\n\\t<RequestId>94E16BB6-3FB6-1297-B5B2-ED2250F437CD</RequestId>\\r\\n</CreateTagsResponse>","errorExample":""}]',
            'title' => '创建预置标签',
            'description' => '### 使用说明'."\n"
                .'预置标签是您预先创建并作用于所有地域的一种标签，非常适合在标签规划阶段使用。您可以在标签规划阶段创建预置标签，然后在标签实施阶段绑定具体的云资源。创建预置标签时，您可以仅设置标签键，而不设置标签值，标签值可以在后续设置。'."\n"
                ."\n"
                .'本文将提供一个示例，创建一个标签键为`Environment`的预置标签，用来标识业务环境。',
            'requestParamsDescription' => ' 关于公共请求参数的详情，请参见[公共参数](~~159973~~)。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteTag' => [
            'summary' => '删除预置标签。',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。'."\n"
                            ."\n"
                            .'> 仅支持`cn-hangzhou`地域。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'Key',
                    'in' => 'query',
                    'schema' => [
                        'description' => '标签键。'."\n"
                            ."\n"
                            .'当标签键下没有任何标签值时，可以仅设置`Key`，删除该标签键。否则，请同时设置`Key`和`Value`，删除指定的预置标签。'."\n",
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Environment',
                    ],
                ],
                [
                    'name' => 'Value',
                    'in' => 'query',
                    'schema' => [
                        'description' => '标签值。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '6E27F22C-EDA3-132E-A53F-77DE3BC2343D',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'MetaTagKeyHasValue',
                        'errorMessage' => 'The specified TagKey already bind tag value',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'WrongEndpoint',
                        'errorMessage' => 'Only the central endpoint supports the create and delete operation of meta tag.',
                    ],
                    [
                        'errorCode' => 'NoPermission.Operator',
                        'errorMessage' => 'The user is not authorized to operate on the specified resource.',
                    ],
                    [
                        'errorCode' => 'MetaTagKeyNotFound',
                        'errorMessage' => 'The meta tag key is not found.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'MissingParameter.Key',
                        'errorMessage' => 'The Key must not be empty.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6E27F22C-EDA3-132E-A53F-77DE3BC2343D\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DeleteTagResponse>\\r\\n\\t<RequestId>6E27F22C-EDA3-132E-A53F-77DE3BC2343D</RequestId>\\r\\n</DeleteTagResponse>","errorExample":""}]',
            'title' => '删除预置标签',
            'description' => '本文将提供一个示例，删除标签键为`Environment`，标签值为`test`的预置标签。',
            'requestParamsDescription' => ' 关于公共请求参数的详情，请参见[公共参数](~~159973~~)。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'OpenCreatedBy' => [
            'summary' => '启用创建者标签。',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。取值：cn-shanghai。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-shanghai',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '74F03511-FDFA-54AF-96A4-71575B41E74D',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'CreatedByAlreadyOpen',
                        'errorMessage' => 'CreatedBy is already activated.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'PermissionDenied',
                        'errorMessage' => 'Only a primary account can perform the operation.',
                    ],
                    [
                        'errorCode' => 'NoPermission.Operator',
                        'errorMessage' => 'The user is not authorized to operate on the specified resource.',
                    ],
                    [
                        'errorCode' => 'EntityNotExist.Role',
                        'errorMessage' => 'The role not exists.',
                    ],
                    [
                        'errorCode' => 'NoPermission',
                        'errorMessage' => 'AssumedRoleUser has no permission.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"74F03511-FDFA-54AF-96A4-71575B41E74D\\"\\n}","errorExample":""},{"type":"xml","example":"<OpenCreatedByResponse>\\n    <RequestId>74F03511-FDFA-54AF-96A4-71575B41E74D</RequestId>\\n</OpenCreatedByResponse>","errorExample":""}]',
            'title' => '启用创建者标签',
            'description' => '启用创建者标签，不仅可以帮助您低成本进行费用、账单分析，实现企业云上成本管理；还可以帮助您进行创建者信息溯源，提升资源管理便利性。创建者标签`acs:tag:createdby`是阿里云自动生成的系统标签。',
        ],
        'CheckCreatedByEnabled' => [
            'summary' => '校验创建者标签启用状态。',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。'."\n"
                            ."\n"
                            .'取值：cn-shanghai。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-shanghai',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '682DD9E1-F530-5D14-A839-A6787FA82B74',
                            ],
                            'OpenStatus' => [
                                'description' => '启用状态，取值：'."\n"
                                    .'- true：已启用。'."\n"
                                    .'- false：未开启。',
                                'type' => 'boolean',
                                'example' => 'false',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'Throttling',
                        'errorMessage' => 'You have exceeded the maximum traffic. To increase the limit, submit a ticket.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'NoPermission.Operator',
                        'errorMessage' => 'The user is not authorized to operate on the specified resource.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"682DD9E1-F530-5D14-A839-A6787FA82B74\\",\\n  \\"OpenStatus\\": false\\n}","type":"json"}]',
            'title' => '校验创建者标签启用状态',
        ],
        'CloseCreatedBy' => [
            'summary' => '禁用创建者标签。',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。'."\n"
                            ."\n"
                            .'取值：cn-shanghai。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-shanghai',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'AECFE0F2-CEC3-5D16-BE4C-E2F95083D063',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'PermissionDenied',
                        'errorMessage' => 'Only a primary account can perform the operation.',
                    ],
                    [
                        'errorCode' => 'NoPermission.Operator',
                        'errorMessage' => 'The user is not authorized to operate on the specified resource.',
                    ],
                    [
                        'errorCode' => 'EntityNotExist.Role',
                        'errorMessage' => 'The role not exists.',
                    ],
                    [
                        'errorCode' => 'NoPermission',
                        'errorMessage' => 'AssumedRoleUser has no permission.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"AECFE0F2-CEC3-5D16-BE4C-E2F95083D063\\"\\n}","type":"json"}]',
            'title' => '禁用创建者标签',
        ],
        'ListSupportResourceTypes' => [
            'summary' => '查询标签支持的资源类型和标签能力项。',
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
            'systemTags' => [
                'operationType' => 'list',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。'."\n"
                            ."\n"
                            .'关于地域ID的详情，请参见[服务接入点](~~2330902~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                        'default' => 'cn-shanghai',
                    ],
                ],
                [
                    'name' => 'MaxResult',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页时每页显示的数据行数。'."\n"
                            ."\n"
                            .'最大值：1000。默认值：50。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '50',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '下一个查询开始的Token。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'AAAAAYws9fJ0Ur4MGm/5OkDoW/Y3wDNwUdssyKODK+myOlBL',
                    ],
                ],
                [
                    'name' => 'ProductCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '云服务代码。用于查询的过滤条件。'."\n"
                            ."\n"
                            .'该参数从返回结果中获取。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ecs',
                    ],
                ],
                [
                    'name' => 'ResourceTye',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源类型。用于查询的过滤条件。'."\n"
                            ."\n"
                            .'该参数从返回结果中获取。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'instance',
                    ],
                ],
                [
                    'name' => 'ShowItems',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否显示标签能力项。取值：'."\n"
                            ."\n"
                            .'- true：显示。'."\n"
                            .'- false（默认值）：不显示。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'SupportCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '标签能力项代码。用于查询的过滤条件。'."\n"
                            ."\n"
                            .'详情请参见下文的**标签能力项**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'TAG_CONSOLE_SUPPORT',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'ListResponse<PolicyModel>',
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'SupportResourceTypes' => [
                                'description' => '支持的资源类型列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '支持的资源类型列表。',
                                    'type' => 'object',
                                    'properties' => [
                                        'ProductCode' => [
                                            'description' => '云服务代码。',
                                            'type' => 'string',
                                            'example' => 'ecs',
                                        ],
                                        'ResourceType' => [
                                            'description' => '资源类型。',
                                            'type' => 'string',
                                            'example' => 'instance',
                                        ],
                                        'SupportItems' => [
                                            'description' => '支持的标签能力项列表。'."\n"
                                                ."\n"
                                                .'> 当`ShowItems`为`true`时，才显示该参数。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '支持的标签能力项列表。'."\n"
                                                    ."\n"
                                                    .'> 当`ShowItems`为`true`时，才显示该参数。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'SupportCode' => [
                                                        'description' => '标签能力项代码。',
                                                        'type' => 'string',
                                                        'example' => 'TAG_CONSOLE_SUPPORT',
                                                    ],
                                                    'Support' => [
                                                        'description' => '是否支持该标签能力项。取值：'."\n"
                                                            ."\n"
                                                            .'- true：支持。'."\n"
                                                            .'- false：不支持。',
                                                        'type' => 'boolean',
                                                        'example' => 'true',
                                                    ],
                                                    'SupportDetails' => [
                                                        'description' => '该能力项的支持详情列表。',
                                                        'type' => 'array',
                                                        'items' => [
                                                            'description' => '该能力项的支持详情列表。',
                                                            'type' => 'object',
                                                            'additionalProperties' => [
                                                                'type' => 'string',
                                                                'description' => '支持详情代码，详情请参见下文的**支持详情代码说明**。',
                                                                'example' => 'ApiName',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'ABC71772-F3A1-59CA-B811-4A5B0E0B72F8',
                            ],
                            'NextToken' => [
                                'description' => '根据`NextToken`判断是否具备下一个查询开始的Token。取值：'."\n"
                                    ."\n"
                                    .'- 如果`NextToken`为空，表示没有下一个。'."\n"
                                    .'- 如果`NextToken`有值，则该值就是下一个查询开始的Token。',
                                'type' => 'string',
                                'example' => 'AAAAAYws9fJ0Ur4MGm',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"SupportResourceTypes\\": [\\n    {\\n      \\"ProductCode\\": \\"ecs\\",\\n      \\"ResourceType\\": \\"instance\\",\\n      \\"SupportItems\\": [\\n        {\\n          \\"SupportCode\\": \\"TAG_CONSOLE_SUPPORT\\",\\n          \\"Support\\": true,\\n          \\"SupportDetails\\": [\\n            {\\n              \\"key\\": \\"ApiName\\"\\n            }\\n          ]\\n        }\\n      ]\\n    }\\n  ],\\n  \\"RequestId\\": \\"ABC71772-F3A1-59CA-B811-4A5B0E0B72F8\\",\\n  \\"NextToken\\": \\"AAAAAYws9fJ0Ur4MGm\\"\\n}","errorExample":""},{"type":"xml","example":"<ListSupportResourceTypesResponse>\\n    <RequestId>ABC71772-F3A1-59CA-B811-4A5B0E0B72F8</RequestId>\\n    <NextToken>AAAAAYws9fJ0Ur4MGm/5OkDoW/Y3wDNwUdssyKODK+myOlBL</NextToken>\\n    <SupportResourceTypes>\\n        <ProductCode>ecs</ProductCode>\\n        <ResourceType>instance</ResourceType>\\n    </SupportResourceTypes>\\n    <SupportResourceTypes>\\n        <ProductCode>ros</ProductCode>\\n        <ResourceType>template</ResourceType>\\n    </SupportResourceTypes>\\n    <SupportResourceTypes>\\n        <ProductCode>kvstore</ProductCode>\\n        <ResourceType>instance</ResourceType>\\n    </SupportResourceTypes>\\n    <SupportResourceTypes>\\n        <ProductCode>alikafka</ProductCode>\\n        <ResourceType>consumergroup</ResourceType>\\n    </SupportResourceTypes>\\n    <SupportResourceTypes>\\n        <ProductCode>ddoscoo</ProductCode>\\n        <ResourceType>instance</ResourceType>\\n    </SupportResourceTypes>\\n    <SupportResourceTypes>\\n        <ProductCode>polardb</ProductCode>\\n        <ResourceType>cluster</ResourceType>\\n    </SupportResourceTypes>\\n    <SupportResourceTypes>\\n        <ProductCode>vod</ProductCode>\\n        <ResourceType>domain</ResourceType>\\n    </SupportResourceTypes>\\n    <SupportResourceTypes>\\n        <ProductCode>multimod</ProductCode>\\n        <ResourceType>cluster</ResourceType>\\n    </SupportResourceTypes>\\n    <SupportResourceTypes>\\n        <ProductCode>cas</ProductCode>\\n        <ResourceType>instance</ResourceType>\\n    </SupportResourceTypes>\\n    <SupportResourceTypes>\\n        <ProductCode>sae</ProductCode>\\n        <ResourceType>application</ResourceType>\\n    </SupportResourceTypes>\\n    <SupportResourceTypes>\\n        <ProductCode>hitsdb</ProductCode>\\n        <ResourceType>Instance</ResourceType>\\n    </SupportResourceTypes>\\n    <SupportResourceTypes>\\n        <ProductCode>cloudphone</ProductCode>\\n        <ResourceType>Instance</ResourceType>\\n    </SupportResourceTypes>\\n    <SupportResourceTypes>\\n        <ProductCode>bastionhost</ProductCode>\\n        <ResourceType>instance</ResourceType>\\n    </SupportResourceTypes>\\n    <SupportResourceTypes>\\n        <ProductCode>dds</ProductCode>\\n        <ResourceType>instance</ResourceType>\\n    </SupportResourceTypes>\\n    <SupportResourceTypes>\\n        <ProductCode>adb</ProductCode>\\n        <ResourceType>cluster</ResourceType>\\n    </SupportResourceTypes>\\n    <SupportResourceTypes>\\n        <ProductCode>baas</ProductCode>\\n        <ResourceType>organization</ResourceType>\\n    </SupportResourceTypes>\\n    <SupportResourceTypes>\\n        <ProductCode>nas</ProductCode>\\n        <ResourceType>filesystem</ResourceType>\\n    </SupportResourceTypes>\\n    <SupportResourceTypes>\\n        <ProductCode>scblinkonecs</ProductCode>\\n        <ResourceType>cluster</ResourceType>\\n    </SupportResourceTypes>\\n    <SupportResourceTypes>\\n        <ProductCode>mq</ProductCode>\\n        <ResourceType>instance</ResourceType>\\n    </SupportResourceTypes>\\n    <SupportResourceTypes>\\n        <ProductCode>slb</ProductCode>\\n        <ResourceType>certificate</ResourceType>\\n    </SupportResourceTypes>\\n    <SupportResourceTypes>\\n        <ProductCode>polardbx</ProductCode>\\n        <ResourceType>PolarDBXInstance</ResourceType>\\n    </SupportResourceTypes>\\n    <SupportResourceTypes>\\n        <ProductCode>avds</ProductCode>\\n        <ResourceType>assets</ResourceType>\\n    </SupportResourceTypes>\\n    <SupportResourceTypes>\\n        <ProductCode>dbaudit</ProductCode>\\n        <ResourceType>instance</ResourceType>\\n    </SupportResourceTypes>\\n    <SupportResourceTypes>\\n        <ProductCode>cdn</ProductCode>\\n        <ResourceType>domain</ResourceType>\\n    </SupportResourceTypes>\\n    <SupportResourceTypes>\\n        <ProductCode>live</ProductCode>\\n        <ResourceType>domain</ResourceType>\\n    </SupportResourceTypes>\\n    <SupportResourceTypes>\\n        <ProductCode>alidns</ProductCode>\\n        <ResourceType>domain</ResourceType>\\n    </SupportResourceTypes>\\n    <SupportResourceTypes>\\n        <ProductCode>dts</ProductCode>\\n        <ResourceType>instance</ResourceType>\\n    </SupportResourceTypes>\\n    <SupportResourceTypes>\\n        <ProductCode>vpc</ProductCode>\\n        <ResourceType>natgateway</ResourceType>\\n    </SupportResourceTypes>\\n    <SupportResourceTypes>\\n        <ProductCode>elasticsearch</ProductCode>\\n        <ResourceType>instance</ResourceType>\\n    </SupportResourceTypes>\\n    <SupportResourceTypes>\\n        <ProductCode>alb</ProductCode>\\n        <ResourceType>loadbalancer</ResourceType>\\n    </SupportResourceTypes>\\n    <SupportResourceTypes>\\n        <ProductCode>gpdb</ProductCode>\\n        <ResourceType>instance</ResourceType>\\n    </SupportResourceTypes>\\n    <SupportResourceTypes>\\n        <ProductCode>savingplan</ProductCode>\\n        <ResourceType>instance</ResourceType>\\n    </SupportResourceTypes>\\n    <SupportResourceTypes>\\n        <ProductCode>petadata</ProductCode>\\n        <ResourceType>instance</ResourceType>\\n    </SupportResourceTypes>\\n    <SupportResourceTypes>\\n        <ProductCode>dysms</ProductCode>\\n        <ResourceType>template</ResourceType>\\n    </SupportResourceTypes>\\n    <SupportResourceTypes>\\n        <ProductCode>fc</ProductCode>\\n        <ResourceType>service</ResourceType>\\n    </SupportResourceTypes>\\n    <SupportResourceTypes>\\n        <ProductCode>hsm</ProductCode>\\n        <ResourceType>instance</ResourceType>\\n    </SupportResourceTypes>\\n    <SupportResourceTypes>\\n        <ProductCode>hcs_sgw</ProductCode>\\n        <ResourceType>gateway</ResourceType>\\n    </SupportResourceTypes>\\n    <SupportResourceTypes>\\n        <ProductCode>hologram</ProductCode>\\n        <ResourceType>instance</ResourceType>\\n    </SupportResourceTypes>\\n    <SupportResourceTypes>\\n        <ProductCode>cms</ProductCode>\\n        <ResourceType>monitorgroup</ResourceType>\\n    </SupportResourceTypes>\\n    <SupportResourceTypes>\\n        <ProductCode>smc</ProductCode>\\n        <ResourceType>replicationjob</ResourceType>\\n    </SupportResourceTypes>\\n    <SupportResourceTypes>\\n        <ProductCode>ddosbgp</ProductCode>\\n        <ResourceType>instance</ResourceType>\\n    </SupportResourceTypes>\\n    <SupportResourceTypes>\\n        <ProductCode>rds</ProductCode>\\n        <ResourceType>backup</ResourceType>\\n    </SupportResourceTypes>\\n    <SupportResourceTypes>\\n        <ProductCode>gws</ProductCode>\\n        <ResourceType>instance</ResourceType>\\n    </SupportResourceTypes>\\n    <SupportResourceTypes>\\n        <ProductCode>oss</ProductCode>\\n        <ResourceType>bucket</ResourceType>\\n    </SupportResourceTypes>\\n    <SupportResourceTypes>\\n        <ProductCode>ecs</ProductCode>\\n        <ResourceType>imagecomponent</ResourceType>\\n    </SupportResourceTypes>\\n    <SupportResourceTypes>\\n        <ProductCode>apigateway</ProductCode>\\n        <ResourceType>plugin</ResourceType>\\n    </SupportResourceTypes>\\n    <SupportResourceTypes>\\n        <ProductCode>drds</ProductCode>\\n        <ResourceType>instance</ResourceType>\\n    </SupportResourceTypes>\\n    <SupportResourceTypes>\\n        <ProductCode>pvtz</ProductCode>\\n        <ResourceType>zone</ResourceType>\\n    </SupportResourceTypes>\\n    <SupportResourceTypes>\\n        <ProductCode>hbr</ProductCode>\\n        <ResourceType>hanainstance</ResourceType>\\n    </SupportResourceTypes>\\n    <SupportResourceTypes>\\n        <ProductCode>slb</ProductCode>\\n        <ResourceType>instance</ResourceType>\\n    </SupportResourceTypes>\\n</ListSupportResourceTypesResponse>","errorExample":""}]',
            'title' => '查询标签支持的资源类型和标签能力项',
            'description' => '### 调用示例'."\n"
                ."\n"
                .'- 查询TagResources或UntagResources支持的资源类型列表，请参见<props="china">[调用示例](https://api.aliyun.com/api/Tag/2018-08-28/ListSupportResourceTypes?tab=DEBUG&params={%22RegionId%22:%22cn-hangzhou%22,%22SupportCode%22:%22TAG_CONSOLE_SUPPORT%22})</props><props="intl">[调用示例](https://api.alibabacloud.com/api/Tag/2018-08-28/ListSupportResourceTypes?tab=DEBUG&params={%22RegionId%22:%22cn-hangzhou%22,%22SupportCode%22:%22TAG_CONSOLE_SUPPORT%22})</props>。'."\n"
                ."\n"
                .'- 查询ListTagResources或ListResourcesByTag等查询类接口支持的资源类型列表，请参见<props="china">[调用示例](https://api.aliyun.com/api/Tag/2018-08-28/ListSupportResourceTypes?tab=DEBUG&params={%22RegionId%22:%22cn-hangzhou%22})</props><props="intl">[调用示例](https://api.alibabacloud.com/api/Tag/2018-08-28/ListSupportResourceTypes?tab=DEBUG&params={%22RegionId%22:%22cn-hangzhou%22})</props>。'."\n"
                ."\n"
                .'- 查询支持创建者标签的资源类型列表，请参见<props="china">[调用示例](https://api.aliyun.com/api/Tag/2018-08-28/ListSupportResourceTypes?tab=DEBUG&params={%22RegionId%22:%22cn-hangzhou%22,%22SupportCode%22:%22CREATED_BY_TAG_CONSOLE_SUPPORT%22})</props><props="intl">[调用示例](https://api.alibabacloud.com/api/Tag/2018-08-28/ListSupportResourceTypes?tab=DEBUG&params={%22RegionId%22:%22cn-hangzhou%22,%22SupportCode%22:%22CREATED_BY_TAG_CONSOLE_SUPPORT%22})</props>。',
            'requestParamsDescription' => '### 标签能力项'."\n"
                .'|标签能力项代码 |说明 |'."\n"
                .'| ----- | -------------- |'."\n"
                .'|TAG_CONSOLE_SUPPORT |标签控制台是否支持该资源类型。 |'."\n"
                .'|CLOUD_RESOURCE_CONSOLE_SUPPORT |云资源控制台是否支持标签。 |'."\n"
                .'|TAG_RAM_SUPPORT |该资源类型鉴权是否支持标签条件。 |'."\n"
                .'|CLOUD_RESOURCE_API_SUPPORT |云资源的查询API是否支持标签。 |'."\n"
                .'|TAG_API_SUPPORT |云产品是否提供了标签相关API。<br>标签相关API是指TagResources、UntagResources和ListTagResources。 |'."\n"
                .'|TAG_BILL_SUPPORT |是否支持标签分账。 |'."\n"
                .'|CREATED_BY_TAG_BILL_SUPPORT |是否支持创建者标签分账。 |'."\n"
                .'|CREATED_BY_TAG_CONSOLE_SUPPORT |控制台是否支持创建者标签。 |'."\n"
                .'|TAG_POLICY_PREVENTATIVE_CHECK_SUPPORT |是否支持标签策略的事前检测。<br>即给云资源绑定标签时，如果标签不符合标签策略定义的规则，则会绑定失败。 |'."\n"
                .'|TAG_POLICY_CHECK_REMEDIATION_SUPPORT |是否支持标签策略的事后检测及自动修正。<br>即检测当前资源类型中不符合标签策略定义的规则的资源标签，并自动修复这些标签。 |'."\n"
                .'|TAG_POLICY_RG_TAG_INHERIT_SUPPORT |是否支持标签策略的资源组标签继承场景。<br>即资源组中的资源自动继承资源组的指定标签。 |',
            'responseParamsDescription' => '### 支持详情代码说明'."\n"
                .'|支持详情代码|说明 |'."\n"
                .'| ----- | -------------- |'."\n"
                .'|ApiName |该能力项支持的API名称。 |'."\n"
                .'|SupportEnforcedForTags |该API是否支持标签策略事前强校验。 |',
        ],
        'DescribeRegions' => [
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
                [
                    'APP' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'AcceptLanguage',
                    'in' => 'query',
                    'schema' => [
                        'description' => '支持的语言。取值：'."\n"
                            ."\n"
                            .'- zh-CN（默认值）：中文'."\n"
                            .'- en-US：英文'."\n"
                            .'- ja：日文',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh-CN',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '632BBAE2-9C44-4212-8B51-B54742DA9713',
                            ],
                            'Regions' => [
                                'type' => 'object',
                                'properties' => [
                                    'Region' => [
                                        'description' => '地域信息。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '地域信息。',
                                            'type' => 'object',
                                            'properties' => [
                                                'LocalName' => [
                                                    'description' => '地域名称。',
                                                    'type' => 'string',
                                                    'example' => '华东1（杭州）',
                                                ],
                                                'RegionEndpoint' => [
                                                    'description' => '接入地址。',
                                                    'type' => 'string',
                                                    'example' => 'tag.aliyuncs.com',
                                                ],
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
                403 => [
                    [
                        'errorCode' => 'InvalidParameter.AcceptLanguage',
                        'errorMessage' => 'The specified value of parameter AcceptLanguage  is not valid.',
                    ],
                    [
                        'errorCode' => 'NoPermission.Operator',
                        'errorMessage' => 'The user is not authorized to operate on the specified resource.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"632BBAE2-9C44-4212-8B51-B54742DA9713\\",\\n  \\"Regions\\": {\\n    \\"Region\\": [\\n      {\\n        \\"LocalName\\": \\"华东1（杭州）\\",\\n        \\"RegionEndpoint\\": \\"tag.aliyuncs.com\\",\\n        \\"RegionId\\": \\"cn-hangzhou\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeRegionsResponse>\\n    <RequestId>4090BC47-A3FE-52D2-98D9-5D0725C530A2</RequestId>\\n    <Regions>\\n        <Region>\\n            <RegionId>cn-hangzhou</RegionId>\\n            <RegionEndpoint>tag.aliyuncs.com</RegionEndpoint>\\n            <LocalName>华东1（杭州）</LocalName>\\n        </Region>\\n        <Region>\\n            <RegionId>cn-shanghai</RegionId>\\n            <RegionEndpoint>tag.aliyuncs.com</RegionEndpoint>\\n            <LocalName>华东2（上海）</LocalName>\\n        </Region>\\n        <Region>\\n            <RegionId>cn-hangzhou-finance</RegionId>\\n            <RegionEndpoint>tag.aliyuncs.com</RegionEndpoint>\\n            <LocalName>华东1 金融云</LocalName>\\n        </Region>\\n        <Region>\\n            <RegionId>cn-nanjing</RegionId>\\n            <RegionEndpoint>tag.cn-nanjing.aliyuncs.com</RegionEndpoint>\\n            <LocalName>华东5（南京-本地地域）</LocalName>\\n        </Region>\\n        <Region>\\n            <RegionId>cn-shanghai-finance-1</RegionId>\\n            <RegionEndpoint>tag.aliyuncs.com</RegionEndpoint>\\n            <LocalName>华东2 金融云</LocalName>\\n        </Region>\\n        <Region>\\n            <RegionId>cn-fuzhou</RegionId>\\n            <RegionEndpoint>tag.cn-fuzhou.aliyuncs.com</RegionEndpoint>\\n            <LocalName>华东6（福州-本地地域）</LocalName>\\n        </Region>\\n        <Region>\\n            <RegionId>cn-qingdao</RegionId>\\n            <RegionEndpoint>tag.aliyuncs.com</RegionEndpoint>\\n            <LocalName>华北1（青岛）</LocalName>\\n        </Region>\\n        <Region>\\n            <RegionId>cn-beijing</RegionId>\\n            <RegionEndpoint>tag.aliyuncs.com</RegionEndpoint>\\n            <LocalName>华北2（北京）</LocalName>\\n        </Region>\\n        <Region>\\n            <RegionId>cn-zhangjiakou</RegionId>\\n            <RegionEndpoint>tag.cn-zhangjiakou.aliyuncs.com</RegionEndpoint>\\n            <LocalName>华北3（张家口）</LocalName>\\n        </Region>\\n        <Region>\\n            <RegionId>cn-huhehaote</RegionId>\\n            <RegionEndpoint>tag.cn-huhehaote.aliyuncs.com</RegionEndpoint>\\n            <LocalName>华北5（呼和浩特）</LocalName>\\n        </Region>\\n        <Region>\\n            <RegionId>cn-wulanchabu</RegionId>\\n            <RegionEndpoint>tag.cn-wulanchabu.aliyuncs.com</RegionEndpoint>\\n            <LocalName>华北6（乌兰察布）</LocalName>\\n        </Region>\\n        <Region>\\n            <RegionId>cn-beijing-finance-1</RegionId>\\n            <RegionEndpoint>tag.cn-beijing-finance-1.aliyuncs.com</RegionEndpoint>\\n            <LocalName>华北2 金融云</LocalName>\\n        </Region>\\n        <Region>\\n            <RegionId>cn-shenzhen</RegionId>\\n            <RegionEndpoint>tag.aliyuncs.com</RegionEndpoint>\\n            <LocalName>华南1（深圳）</LocalName>\\n        </Region>\\n        <Region>\\n            <RegionId>cn-shenzhen-finance-1</RegionId>\\n            <RegionEndpoint>tag.cn-shenzhen-finance-1.aliyuncs.com</RegionEndpoint>\\n            <LocalName>华南1 金融云</LocalName>\\n        </Region>\\n        <Region>\\n            <RegionId>cn-heyuan</RegionId>\\n            <RegionEndpoint>tag.cn-heyuan.aliyuncs.com</RegionEndpoint>\\n            <LocalName>华南2（河源）</LocalName>\\n        </Region>\\n        <Region>\\n            <RegionId>cn-guangzhou</RegionId>\\n            <RegionEndpoint>tag.cn-guangzhou.aliyuncs.com</RegionEndpoint>\\n            <LocalName>华南3（广州）</LocalName>\\n        </Region>\\n        <Region>\\n            <RegionId>cn-chengdu</RegionId>\\n            <RegionEndpoint>tag.cn-chengdu.aliyuncs.com</RegionEndpoint>\\n            <LocalName>西南1（成都）</LocalName>\\n        </Region>\\n        <Region>\\n            <RegionId>cn-hongkong</RegionId>\\n            <RegionEndpoint>tag.aliyuncs.com</RegionEndpoint>\\n            <LocalName>中国香港</LocalName>\\n        </Region>\\n        <Region>\\n            <RegionId>ap-southeast-1</RegionId>\\n            <RegionEndpoint>tag.aliyuncs.com</RegionEndpoint>\\n            <LocalName>新加坡</LocalName>\\n        </Region>\\n        <Region>\\n            <RegionId>ap-southeast-2</RegionId>\\n            <RegionEndpoint>tag.ap-southeast-2.aliyuncs.com</RegionEndpoint>\\n            <LocalName>澳大利亚（悉尼）</LocalName>\\n        </Region>\\n        <Region>\\n            <RegionId>ap-northeast-2</RegionId>\\n            <RegionEndpoint>tag.ap-northeast-2.aliyuncs.com</RegionEndpoint>\\n            <LocalName>韩国（首尔）</LocalName>\\n        </Region>\\n        <Region>\\n            <RegionId>ap-southeast-3</RegionId>\\n            <RegionEndpoint>tag.ap-southeast-3.aliyuncs.com</RegionEndpoint>\\n            <LocalName>马来西亚（吉隆坡）</LocalName>\\n        </Region>\\n        <Region>\\n            <RegionId>ap-southeast-5</RegionId>\\n            <RegionEndpoint>tag.ap-southeast-5.aliyuncs.com</RegionEndpoint>\\n            <LocalName>印度尼西亚（雅加达）</LocalName>\\n        </Region>\\n        <Region>\\n            <RegionId>ap-northeast-1</RegionId>\\n            <RegionEndpoint>tag.ap-northeast-1.aliyuncs.com</RegionEndpoint>\\n            <LocalName>日本（东京）</LocalName>\\n        </Region>\\n        <Region>\\n            <RegionId>eu-central-1</RegionId>\\n            <RegionEndpoint>tag.eu-central-1.aliyuncs.com</RegionEndpoint>\\n            <LocalName>德国（法兰克福）</LocalName>\\n        </Region>\\n        <Region>\\n            <RegionId>eu-west-1</RegionId>\\n            <RegionEndpoint>tag.eu-west-1.aliyuncs.com</RegionEndpoint>\\n            <LocalName>英国（伦敦）</LocalName>\\n        </Region>\\n        <Region>\\n            <RegionId>us-west-1</RegionId>\\n            <RegionEndpoint>tag.aliyuncs.com</RegionEndpoint>\\n            <LocalName>美国（硅谷）</LocalName>\\n        </Region>\\n        <Region>\\n            <RegionId>us-east-1</RegionId>\\n            <RegionEndpoint>tag.aliyuncs.com</RegionEndpoint>\\n            <LocalName>美国（弗吉尼亚）</LocalName>\\n        </Region>\\n        <Region>\\n            <RegionId>me-east-1</RegionId>\\n            <RegionEndpoint>tag.me-east-1.aliyuncs.com</RegionEndpoint>\\n            <LocalName>阿联酋（迪拜）</LocalName>\\n        </Region>\\n        <Region>\\n            <RegionId>ap-southeast-6</RegionId>\\n            <RegionEndpoint>tag.ap-southeast-6.aliyuncs.com</RegionEndpoint>\\n            <LocalName>菲律宾（马尼拉）</LocalName>\\n        </Region>\\n        <Region>\\n            <RegionId>ap-southeast-7</RegionId>\\n            <RegionEndpoint>tag.ap-southeast-7.aliyuncs.com</RegionEndpoint>\\n            <LocalName>泰国（曼谷）</LocalName>\\n        </Region>\\n        <Region>\\n            <RegionId>ap-south-1</RegionId>\\n            <RegionEndpoint>tag.ap-south-1.aliyuncs.com</RegionEndpoint>\\n            <LocalName>印度（孟买）</LocalName>\\n        </Region>\\n    </Regions>\\n</DescribeRegionsResponse>","errorExample":""}]',
            'title' => '查询支持标签的地域信息',
            'summary' => '查询支持标签的地域信息。',
            'requestParamsDescription' => ' 关于公共请求参数的详情，请参见[公共参数](~~159973~~)。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreatePolicy' => [
            'summary' => '创建标签策略。',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。取值：cn-shanghai。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-shanghai',
                        'default' => 'cn-shanghai',
                    ],
                ],
                [
                    'name' => 'PolicyName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '标签策略名称。'."\n"
                            ."\n"
                            .'长度为1~128个字符，可以包含汉字、英文字母、数字和下划线（_）。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'PolicyDesc',
                    'in' => 'query',
                    'schema' => [
                        'description' => '标签策略描述。'."\n"
                            ."\n"
                            .'长度为0~512个字符。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'This is a tag policy example.',
                    ],
                ],
                [
                    'name' => 'PolicyContent',
                    'in' => 'query',
                    'schema' => [
                        'description' => '标签策略内容。'."\n"
                            ."\n"
                            .'关于标签策略语言的详情，请参见[标签策略语法](~~417436~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '{"tags":{"CostCenter":{"tag_value":{"@@assign":["Beijing","Shanghai"]},"tag_key":{"@@assign":"CostCenter"}}}}',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'DryRun：是否空跑。取值：'."\n"
                            ."\n"
                            .'- false（默认值）：否。会按请求参数执行操作。'."\n"
                            .'- true：是。仅校验请求参数，不真正执行操作。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'UserType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '标签策略模式。取值：'."\n"
                            ."\n"
                            .'- USER：单账号模式的默认值。使用单个阿里云账号或资源目录成员为当前账号创建标签策略时，设置该值。'."\n"
                            .'- RD：多账号模式的默认值。使用资源目录管理账号为整个资源目录创建标签策略时，设置该值。'."\n"
                            ."\n"
                            .'关于标签策略模式的更多信息，请参见[标签策略模式](~~417434~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'RD',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'FDBE270D-C491-5EEC-A5CD-98245422D3F7',
                            ],
                            'PolicyId' => [
                                'description' => '标签策略ID。',
                                'type' => 'string',
                                'example' => 'p-5732750813924f90****',
                            ],
                            'PolicyName' => [
                                'description' => '标签策略名称。',
                                'type' => 'string',
                                'example' => 'test',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FDBE270D-C491-5EEC-A5CD-98245422D3F7\\",\\n  \\"PolicyId\\": \\"p-5732750813924f90****\\",\\n  \\"PolicyName\\": \\"test\\"\\n}","errorExample":""},{"type":"xml","example":"<CreatePolicyResponse>\\n    <RequestId>FDBE270D-C491-5EEC-A5CD-98245422D3F7</RequestId>\\n    <PolicyId>p-5732750813924f90****</PolicyId>\\n</CreatePolicyResponse>","errorExample":""}]',
            'title' => '创建标签策略',
            'description' => '### 使用说明'."\n"
                .'本文将提供一个示例，在多账号模式下，创建一个名为`test`的标签策略，该标签策略内容为：当资源绑定了标签`CostCenter:Beijing`或`CostCenter:Shanghai`时，就是合规，否则为不合规。',
            'requestParamsDescription' => '关于公共请求参数的详情，请参见[公共参数](~~159973~~)。',
        ],
        'DeletePolicy' => [
            'summary' => '删除标签策略。',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。取值：cn-shanghai。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-shanghai',
                        'default' => 'cn-shanghai',
                    ],
                ],
                [
                    'name' => 'PolicyId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '标签策略ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'p-557cb141331f41c7****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '4A32F5B0-0B0B-5537-B4A0-7A6E1C3AA96A',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4A32F5B0-0B0B-5537-B4A0-7A6E1C3AA96A\\"\\n}","errorExample":""},{"type":"xml","example":"<DeletePolicyResponse>\\n    <RequestId>4A32F5B0-0B0B-5537-B4A0-7A6E1C3AA96A</RequestId>\\n</DeletePolicyResponse>","errorExample":""}]',
            'title' => '删除标签策略',
            'description' => '### 使用说明'."\n"
                .'删除前，请确保标签策略未绑定任何策略目标。关于解绑标签策略的操作，请参见[DetachPolicy](~~429724~~)。'."\n"
                ."\n"
                .'本文将提供一个示例，删除ID为`p-557cb141331f41c7****`的标签策略。',
            'requestParamsDescription' => '关于公共请求参数的详情，请参见[公共参数](~~159973~~)。',
        ],
        'AttachPolicy' => [
            'summary' => '将标签策略绑定到目标节点。',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。取值：cn-shanghai。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-shanghai',
                        'default' => 'cn-shanghai',
                    ],
                ],
                [
                    'name' => 'TargetId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目标节点ID。'."\n"
                            ."\n"
                            .'> 该参数在单账号模式下为可选，多账号模式下为必选。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '151266687691****',
                    ],
                ],
                [
                    'name' => 'TargetType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目标节点类型。取值：'."\n"
                            ."\n"
                            .'- USER：将标签策略绑定到当前登录账号。适用单账号模式。'."\n"
                            .'- ROOT：将标签策略绑定到资源目录中的Root资源夹。适用多账号模式。'."\n"
                            .'- FOLDER：将标签策略绑定到资源目录中的资源夹。适用多账号模式。'."\n"
                            .'- ACCOUNT：将标签策略绑定到资源目录中的成员。适用多账号模式。'."\n"
                            ."\n"
                            .'> 该参数在单账号模式下为可选，多账号模式下为必选。且参数取值不区分大小写。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ACCOUNT',
                    ],
                ],
                [
                    'name' => 'PolicyId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '标签策略ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'p-de62a0bf400e4b69****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '4A32F5B0-0B0B-5537-B4A0-7A6E1C3AA96A',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4A32F5B0-0B0B-5537-B4A0-7A6E1C3AA96A\\"\\n}","errorExample":""},{"type":"xml","example":"<AttachPolicyResponse>\\n    <RequestId>4A32F5B0-0B0B-5537-B4A0-7A6E1C3AA96A</RequestId>\\n</AttachPolicyResponse>","errorExample":""}]',
            'title' => '将标签策略绑定到目标节点',
            'description' => '### 使用说明'."\n"
                .'单账号模式下，可以将指定的标签策略绑定到当前登录账号。多账号模式下，可以将指定的标签策略绑定到资源目录的Root资源夹、资源夹或成员。关于标签策略模式的更多信息，请参见[标签策略模式](~~417434~~)。'."\n"
                ."\n\n"
                .'本文将提供一个示例，在单账号模式下，将ID为`p-de62a0bf400e4b69****`的标签策略绑定到当前登录账号。',
            'requestParamsDescription' => '关于公共请求参数的详情，请参见[公共参数](~~159973~~)。',
        ],
        'DetachPolicy' => [
            'summary' => '解绑指定的标签策略。',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。取值：cn-shanghai。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-shanghai',
                        'default' => 'cn-shanghai',
                    ],
                ],
                [
                    'name' => 'TargetId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目标节点ID。'."\n"
                            ."\n"
                            .'> 该参数在单账号模式下为可选，多账号模式下为必选。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '151266687691****',
                    ],
                ],
                [
                    'name' => 'TargetType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目标节点类型。取值：'."\n"
                            ."\n"
                            .'- USER：为当前登录账号解绑指定标签策略。适用单账号模式。'."\n"
                            .'- ROOT：为资源目录中的Root资源夹解绑指定标签策略。适用多账号模式。'."\n"
                            .'- FOLDER：为资源目录中的资源夹解绑指定标签策略。适用多账号模式。'."\n"
                            .'- ACCOUNT：为资源目录中的成员解绑指定标签策略。适用多账号模式。'."\n"
                            ."\n"
                            .'> 该参数在单账号模式下为可选，多账号模式下为必选。且参数取值不区分大小写。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ACCOUNT',
                    ],
                ],
                [
                    'name' => 'PolicyId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '标签策略ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'p-a3381efe2fe34a75****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '4A32F5B0-0B0B-5537-B4A0-7A6E1C3AA96A',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4A32F5B0-0B0B-5537-B4A0-7A6E1C3AA96A\\"\\n}","errorExample":""},{"type":"xml","example":"<DetachPolicyResponse>\\n    <RequestId>4A32F5B0-0B0B-5537-B4A0-7A6E1C3AA96A</RequestId>\\n</DetachPolicyResponse>","errorExample":""}]',
            'title' => '解绑指定的标签策略',
            'description' => '### 使用说明'."\n"
                .'单账号模式下，可以为当前登录账号解绑指定标签策略。多账号模式下，可以为资源目录的Root资源夹、资源夹或成员解绑指定标签策略。关于标签策略模式的更多信息，请参见[标签策略模式](~~417434~~)。'."\n"
                ."\n"
                .'本文将提供一个示例，在单账号模式下，为当前登录账号解绑ID为`p-a3381efe2fe34a75****`的标签策略。',
            'requestParamsDescription' => '关于公共请求参数的详情，请参见[公共参数](~~159973~~)。',
        ],
        'ModifyPolicy' => [
            'summary' => '修改标签策略。',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。取值：cn-shanghai。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-shanghai',
                        'default' => 'cn-shanghai',
                    ],
                ],
                [
                    'name' => 'PolicyId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '标签策略ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'p-5732750813924f90****',
                    ],
                ],
                [
                    'name' => 'PolicyDesc',
                    'in' => 'query',
                    'schema' => [
                        'description' => '新标签策略描述。'."\n"
                            ."\n"
                            .'长度为0~512个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'This is a tag policy example.',
                    ],
                ],
                [
                    'name' => 'PolicyContent',
                    'in' => 'query',
                    'schema' => [
                        'description' => '标签策略内容。'."\n"
                            ."\n"
                            .'关于标签策略语言的详情，请参见[标签策略语法](~~417436~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"tags":{"CostCenter":{"tag_value":{"@@assign":["Beijing","Shanghai"]},"tag_key":{"@@assign":"CostCenter"}}}}',
                    ],
                ],
                [
                    'name' => 'PolicyName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '标签策略名称。'."\n"
                            ."\n"
                            .'长度为1~128个字符，可以包含汉字、英文字母、数字和下划线（_）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'DryRun',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否空跑。取值：'."\n"
                            ."\n"
                            .'- false（默认值）：否。按请求参数执行操作。'."\n"
                            .'- true：是。仅校验请求参数，不真正执行操作。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '4A32F5B0-0B0B-5537-B4A0-7A6E1C3AA96A',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4A32F5B0-0B0B-5537-B4A0-7A6E1C3AA96A\\"\\n}","type":"json"}]',
            'title' => '修改标签策略',
            'description' => '### 使用说明'."\n"
                .'本文将提供一个示例，修改标签策略名称为`test`。',
            'requestParamsDescription' => '关于公共请求参数的详情，请参见[公共参数](~~159973~~)。',
        ],
        'GetPolicy' => [
            'summary' => '查询标签策略详情。',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。取值：cn-shanghai。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-shanghai',
                        'default' => 'cn-shanghai',
                    ],
                ],
                [
                    'name' => 'PolicyId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '标签策略ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'p-557cb141331f41c7****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1E7A4802-AB57-570A-9860-F15B60E1586B',
                            ],
                            'Policy' => [
                                'description' => '标签策略详情。',
                                'type' => 'object',
                                'properties' => [
                                    'PolicyName' => [
                                        'description' => '标签策略名称。',
                                        'type' => 'string',
                                        'example' => 'test',
                                    ],
                                    'PolicyDesc' => [
                                        'description' => '标签策略描述。',
                                        'type' => 'string',
                                        'example' => 'This is a tag policy example.',
                                    ],
                                    'PolicyContent' => [
                                        'description' => '标签策略内容。',
                                        'type' => 'string',
                                        'example' => '{\\"tags\\":{\\"CostCenter\\":{\\"tag_value\\":{\\"@@assign\\":[\\"Beijing\\",\\"Shanghai\\"]},\\"tag_key\\":{\\"@@assign\\":\\"CostCenter\\"}}}}',
                                    ],
                                    'UserType' => [
                                        'description' => '标签策略模式。取值：'."\n"
                                            ."\n"
                                            .'- USER：单账号模式。'."\n"
                                            .'- RD：多账号模式。'."\n"
                                            ."\n"
                                            .'关于标签策略模式的更多信息，请参见[标签策略模式](~~417434~~)。',
                                        'type' => 'string',
                                        'example' => 'USER',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1E7A4802-AB57-570A-9860-F15B60E1586B\\",\\n  \\"Policy\\": {\\n    \\"PolicyName\\": \\"test\\",\\n    \\"PolicyDesc\\": \\"This is a tag policy example.\\",\\n    \\"PolicyContent\\": \\"{\\\\\\\\\\\\\\"tags\\\\\\\\\\\\\\":{\\\\\\\\\\\\\\"CostCenter\\\\\\\\\\\\\\":{\\\\\\\\\\\\\\"tag_value\\\\\\\\\\\\\\":{\\\\\\\\\\\\\\"@@assign\\\\\\\\\\\\\\":[\\\\\\\\\\\\\\"Beijing\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"Shanghai\\\\\\\\\\\\\\"]},\\\\\\\\\\\\\\"tag_key\\\\\\\\\\\\\\":{\\\\\\\\\\\\\\"@@assign\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"CostCenter\\\\\\\\\\\\\\"}}}}\\",\\n    \\"UserType\\": \\"USER\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetPolicyResponse>\\n    <Policy>\\n        <PolicyDesc>This is a tag policy example.</PolicyDesc>\\n        <PolicyName>test</PolicyName>\\n        <UserType>USER</UserType>\\n        <PolicyContent>{\\"tags\\":{\\"CostCenter\\":{\\"tag_value\\":{\\"@@assign\\":[\\"Beijing\\",\\"Shanghai\\"]},\\"tag_key\\":{\\"@@assign\\":\\"CostCenter\\"}}}}</PolicyContent>\\n    </Policy>\\n    <RequestId>1E7A4802-AB57-570A-9860-F15B60E1586B</RequestId>\\n</GetPolicyResponse>","errorExample":""}]',
            'title' => '查询标签策略详情',
            'description' => '### 使用说明'."\n"
                .'本文将提供一个示例，查询ID为`p-557cb141331f41c7****`标签策略详情。',
            'requestParamsDescription' => '关于公共请求参数的详情，请参见[公共参数](~~159973~~)。',
        ],
        'GetPolicyEnableStatus' => [
            'summary' => '查询标签策略状态。',
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。取值：cn-shanghai。'."\n"
                            ."\n",
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'cn-shanghai',
                        'default' => 'cn-shanghai',
                    ],
                ],
                [
                    'name' => 'UserType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '标签策略模式。用于查询的过滤条件。取值：'."\n"
                            ."\n"
                            .'- USER：单账号模式。'."\n"
                            .'- RD：多账号模式。'."\n"
                            ."\n"
                            .'关于标签策略模式的更多信息，请参见[标签策略模式](~~417434~~)。'."\n"
                            ."\n"
                            .'> 参数取值不区分大小写。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'RD',
                    ],
                ],
                [
                    'name' => 'OpenType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '开通类型。取值：  '."\n"
                            ."\n"
                            .'- TAG_POLICY：标签策略。 '."\n"
                            .'- VERIFY_NO_TAG：强校验能力。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'TAG_POLICY',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '6C8DF1B1-C65F-5D3A-9FDA-26A4683BB36B',
                            ],
                            'StatusModels' => [
                                'description' => '标签策略状态。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '标签策略状态。',
                                    'type' => 'object',
                                    'properties' => [
                                        'UserType' => [
                                            'description' => '标签策略模式。取值：'."\n"
                                                ."\n"
                                                .'- USER：单账号模式。'."\n"
                                                .'- RD：多账号模式。'."\n"
                                                ."\n"
                                                .'关于标签策略模式的更多信息，请参见[标签策略模式](~~417434~~)。',
                                            'type' => 'string',
                                            'example' => 'RD',
                                        ],
                                        'Status' => [
                                            'description' => '标签策略状态。取值：'."\n"
                                                ."\n"
                                                .'- PendingEnable：启用中。'."\n"
                                                .'- Enabled：已启用。'."\n"
                                                .'- Closing：禁用中。'."\n"
                                                .'- Disabled：已禁用。',
                                            'type' => 'string',
                                            'example' => 'Enabled',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6C8DF1B1-C65F-5D3A-9FDA-26A4683BB36B\\",\\n  \\"StatusModels\\": [\\n    {\\n      \\"UserType\\": \\"RD\\",\\n      \\"Status\\": \\"Enabled\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<GetPolicyEnableStatusResponse>\\n    <RequestId>6C8DF1B1-C65F-5D3A-9FDA-26A4683BB36B</RequestId>\\n    <StatusModels>\\n        <Status>Enabled</Status>\\n        <UserType>RD</UserType>\\n    </StatusModels>\\n</GetPolicyEnableStatusResponse>","errorExample":""}]',
            'title' => '查询标签策略状态',
            'description' => '### 使用说明'."\n"
                .'本文将提供一个示例，查询当前登录账号的标签策略状态。返回结果显示，当前登录账号已启用多账号模式的标签策略。',
        ],
        'ListPolicies' => [
            'summary' => '查询标签策略列表。',
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。取值：cn-shanghai。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-shanghai',
                        'default' => 'cn-shanghai',
                    ],
                ],
                [
                    'name' => 'MaxResult',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页时每页显示的数据条数。'."\n"
                            ."\n"
                            .'默认值：50。最大值：1000。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '50',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '下一个查询开始的Token。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'caeba0bbb2be03f84eb48b699f0a****',
                    ],
                ],
                [
                    'name' => 'PolicyIds',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '标签策略ID列表。用于查询的过滤条件。',
                        'type' => 'array',
                        'items' => [
                            'description' => '标签策略ID列表。用于查询的过滤条件。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'p-557cb141331f41c7****',
                        ],
                        'required' => false,
                        'maxItems' => 10,
                    ],
                ],
                [
                    'name' => 'PolicyNames',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '标签策略名称列表。用于查询的过滤条件。',
                        'type' => 'array',
                        'items' => [
                            'description' => '标签策略名称列表。用于查询的过滤条件。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'test',
                        ],
                        'required' => false,
                        'maxItems' => 10,
                    ],
                ],
                [
                    'name' => 'UserType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '标签策略模式。用于查询的过滤条件。取值：'."\n"
                            ."\n"
                            .'- USER：单账号模式。'."\n"
                            .'- RD：多账号模式。'."\n"
                            ."\n"
                            .'关于标签策略模式的更多信息，请参见[标签策略模式](~~417434~~)。'."\n"
                            ."\n"
                            .'> 参数取值不区分大小写。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'USER',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '72477CFF-5B24-5E30-9861-3DD9C4BD46E5',
                            ],
                            'NextToken' => [
                                'description' => '根据`NextToken`判断是否具备下一个查询开始的Token。取值：'."\n"
                                    ."\n"
                                    .'- 如果`NextToken`为空，即`"NextToken": ""`，表示没有下一个。'."\n"
                                    .'- 如果`NextToken`有值，则该值就是下一个查询开始的Token。',
                                'type' => 'string',
                                'example' => 'caeba0bbb2be03f84eb48b699f0a****',
                            ],
                            'PolicyList' => [
                                'description' => '标签策略列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '标签策略列表。',
                                    'type' => 'object',
                                    'properties' => [
                                        'PolicyName' => [
                                            'description' => '标签策略名称。',
                                            'type' => 'string',
                                            'example' => 'example',
                                        ],
                                        'PolicyDesc' => [
                                            'description' => '标签策略描述。',
                                            'type' => 'string',
                                            'example' => 'This is a tag policy example.',
                                        ],
                                        'PolicyContent' => [
                                            'description' => '标签策略内容。',
                                            'type' => 'string',
                                            'example' => '{\\"tags\\":{\\"CostCenter\\":{\\"tag_value\\":{\\"@@assign\\":[\\"Beijing\\",\\"Shanghai\\"]},\\"tag_key\\":{\\"@@assign\\":\\"CostCenter\\"}}}}',
                                        ],
                                        'PolicyId' => [
                                            'description' => '标签策略ID。',
                                            'type' => 'string',
                                            'example' => 'p-de62a0bf400e4b69****',
                                        ],
                                        'UserType' => [
                                            'description' => '标签策略模式。取值：'."\n"
                                                ."\n"
                                                .'- USER：单账号模式。'."\n"
                                                .'- RD：多账号模式。'."\n"
                                                ."\n"
                                                .'关于标签策略模式的更多信息，请参见[标签策略模式](~~417434~~)。',
                                            'type' => 'string',
                                            'example' => 'USER',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"72477CFF-5B24-5E30-9861-3DD9C4BD46E5\\",\\n  \\"NextToken\\": \\"caeba0bbb2be03f84eb48b699f0a****\\",\\n  \\"PolicyList\\": [\\n    {\\n      \\"PolicyName\\": \\"example\\",\\n      \\"PolicyDesc\\": \\"This is a tag policy example.\\",\\n      \\"PolicyContent\\": \\"{\\\\\\\\\\\\\\"tags\\\\\\\\\\\\\\":{\\\\\\\\\\\\\\"CostCenter\\\\\\\\\\\\\\":{\\\\\\\\\\\\\\"tag_value\\\\\\\\\\\\\\":{\\\\\\\\\\\\\\"@@assign\\\\\\\\\\\\\\":[\\\\\\\\\\\\\\"Beijing\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"Shanghai\\\\\\\\\\\\\\"]},\\\\\\\\\\\\\\"tag_key\\\\\\\\\\\\\\":{\\\\\\\\\\\\\\"@@assign\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"CostCenter\\\\\\\\\\\\\\"}}}}\\",\\n      \\"PolicyId\\": \\"p-de62a0bf400e4b69****\\",\\n      \\"UserType\\": \\"USER\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListPoliciesResponse>\\n    <RequestId>72477CFF-5B24-5E30-9861-3DD9C4BD46E5</RequestId>\\n    <PolicyList>\\n        <PolicyDesc>This is a tag policy example.</PolicyDesc>\\n        <PolicyName>example</PolicyName>\\n        <UserType>USER</UserType>\\n        <PolicyId>p-de62a0bf400e4b69****</PolicyId>\\n        <PolicyContent>{\\"tags\\":{\\"CostCenter\\":{\\"tag_value\\":{\\"@@assign\\":[\\"Beijing\\",\\"Shanghai\\"]},\\"tag_key\\":{\\"@@assign\\":\\"CostCenter\\"}}}}</PolicyContent>\\n    </PolicyList>\\n    <PolicyList>\\n        <PolicyDesc>This is a tag policy example.</PolicyDesc>\\n        <PolicyName>test</PolicyName>\\n        <UserType>USER</UserType>\\n        <PolicyId>p-557cb141331f41c7****</PolicyId>\\n        <PolicyContent>{\\"tags\\":{\\"k1\\":{\\"tag_value\\":{\\"@@assign\\":[\\"v1\\"]},\\"tag_key\\":{\\"@@assign\\":\\"k1\\"}}}}</PolicyContent>\\n    </PolicyList>\\n</ListPoliciesResponse>","errorExample":""}]',
            'title' => '查询标签策略列表',
            'description' => '### 使用说明'."\n"
                .'单账号模式下，当前登录账号可以查询本账号下创建的全部标签策略列表。多账号模式下，资源目录管理账号可以查询整个资源目录下创建的全部标签策略列表。关于标签策略模式的更多信息，请参见[标签策略模式](~~417434~~)。'."\n"
                ."\n"
                .'本文将提供一个示例，在单账号模式下，查询当前登录账号的全部标签策略列表。返回结果显示，存在两条标签策略。',
            'requestParamsDescription' => '关于公共请求参数的详情，请参见[公共参数](~~159973~~)。',
        ],
        'ListPoliciesForTarget' => [
            'summary' => '查询目标节点绑定的标签策略列表。',
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
            'operationType' => 'read',
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。取值：cn-shanghai。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-shanghai',
                        'default' => 'cn-shanghai',
                    ],
                ],
                [
                    'name' => 'MaxResult',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页时每页显示的数据条数。'."\n"
                            ."\n"
                            .'默认值：50。最大值：1000。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '50',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '下一个查询开始的Token。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'caeba0bbb2be03f84eb48b699f0a****',
                    ],
                ],
                [
                    'name' => 'TargetId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目标节点ID。用于查询的过滤条件。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '154950938137****',
                    ],
                ],
                [
                    'name' => 'TargetType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目标节点类型。用于查询的过滤条件。取值：'."\n"
                            ."\n"
                            .'- USER：查询当前登录账号已绑定的标签策略。适用单账号模式。'."\n"
                            .'- ROOT：查询资源目录中的Root资源夹已绑定的标签策略。适用多账号模式。'."\n"
                            .'- FOLDER：查询资源目录中的资源夹已绑定的标签策略。适用多账号模式。'."\n"
                            .'- ACCOUNT：查询资源目录中的成员已绑定的标签策略。适用多账号模式。'."\n"
                            ."\n"
                            .'> 参数取值不区分大小写。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ACCOUNT',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'ListResponse<PolicyModel>',
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'description' => '目标节点绑定的标签策略列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '目标节点绑定的标签策略列表。',
                                    'type' => 'object',
                                    'properties' => [
                                        'PolicyId' => [
                                            'description' => '标签策略ID。',
                                            'type' => 'string',
                                            'example' => 'p-de62a0bf400e4b69****',
                                        ],
                                        'PolicyName' => [
                                            'description' => '标签策略名称。',
                                            'type' => 'string',
                                            'example' => 'example',
                                        ],
                                        'PolicyDesc' => [
                                            'description' => '标签策略描述。',
                                            'type' => 'string',
                                            'example' => 'This is a tag policy example.',
                                        ],
                                        'PolicyContent' => [
                                            'description' => '标签策略内容。',
                                            'type' => 'string',
                                            'example' => '{\\"tags\\":{\\"CostCenter\\":{\\"tag_value\\":{\\"@@assign\\":[\\"Beijing\\",\\"Shanghai\\"]},\\"tag_key\\":{\\"@@assign\\":\\"CostCenter\\"}}}}',
                                        ],
                                        'UserType' => [
                                            'description' => '标签策略模式。取值：'."\n"
                                                ."\n"
                                                .'- USER：单账号模式。'."\n"
                                                .'- RD：多账号模式。'."\n"
                                                ."\n"
                                                .'关于标签策略模式的更多信息，请参见[标签策略模式](~~417434~~)。',
                                            'type' => 'string',
                                            'example' => 'USER',
                                        ],
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '8C962146-AB38-516C-818C-695D4E9F2EA2',
                            ],
                            'NextToken' => [
                                'description' => '根据`NextToken`判断是否具备下一个查询开始的Token。取值：'."\n"
                                    ."\n"
                                    .'- 如果`NextToken`为空，即`"NextToken": ""`，表示没有下一个。'."\n"
                                    .'- 如果`NextToken`有值，则该值就是下一个查询开始的Token。',
                                'type' => 'string',
                                'example' => 'caeba0bbb2be03f84eb48b699f0a****',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": [\\n    {\\n      \\"PolicyId\\": \\"p-de62a0bf400e4b69****\\",\\n      \\"PolicyName\\": \\"example\\",\\n      \\"PolicyDesc\\": \\"This is a tag policy example.\\",\\n      \\"PolicyContent\\": \\"{\\\\\\\\\\\\\\"tags\\\\\\\\\\\\\\":{\\\\\\\\\\\\\\"CostCenter\\\\\\\\\\\\\\":{\\\\\\\\\\\\\\"tag_value\\\\\\\\\\\\\\":{\\\\\\\\\\\\\\"@@assign\\\\\\\\\\\\\\":[\\\\\\\\\\\\\\"Beijing\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"Shanghai\\\\\\\\\\\\\\"]},\\\\\\\\\\\\\\"tag_key\\\\\\\\\\\\\\":{\\\\\\\\\\\\\\"@@assign\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"CostCenter\\\\\\\\\\\\\\"}}}}\\",\\n      \\"UserType\\": \\"USER\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"8C962146-AB38-516C-818C-695D4E9F2EA2\\",\\n  \\"NextToken\\": \\"caeba0bbb2be03f84eb48b699f0a****\\"\\n}","errorExample":""},{"type":"xml","example":"<ListPoliciesForTargetResponse>\\n    <RequestId>8C962146-AB38-516C-818C-695D4E9F2EA2</RequestId>\\n    <Data>\\n        <PolicyDesc>This is a tag policy example.</PolicyDesc>\\n        <PolicyName>example</PolicyName>\\n        <UserType>USER</UserType>\\n        <PolicyId>p-de62a0bf400e4b69****</PolicyId>\\n        <PolicyContent>{\\"tags\\":{\\"CostCenter\\":{\\"tag_value\\":{\\"@@assign\\":[\\"Beijing\\",\\"Shanghai\\"]},\\"tag_key\\":{\\"@@assign\\":\\"CostCenter\\"}}}}</PolicyContent>\\n    </Data>\\n</ListPoliciesForTargetResponse>","errorExample":""}]',
            'title' => '查询目标节点绑定的标签策略列表',
            'description' => '### 使用说明'."\n"
                .'单账号模式下，当前登录账号可以查询自己已绑定的标签策略列表。多账号模式下，资源目录管理账号可以查询Root资源夹、资源夹或成员已绑定的标签策略列表。关于标签策略模式的更多信息，请参见[标签策略模式](~~417434~~)。'."\n"
                ."\n"
                .'本文将提供一个示例，在单账号模式下，查询当前登录账号绑定的标签策略列表。返回结果显示，当前登录账号仅绑定了一个标签策略。',
            'requestParamsDescription' => '关于公共请求参数的详情，请参见[公共参数](~~159973~~)。',
        ],
        'GetEffectivePolicy' => [
            'summary' => '查询有效策略。',
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。取值：cn-shanghai。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-shanghai',
                        'default' => 'cn-shanghai',
                    ],
                ],
                [
                    'name' => 'TargetId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目标节点ID。'."\n"
                            .'> 该参数在单账号模式下为可选，多账号模式下为必选。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '154950938137****',
                    ],
                ],
                [
                    'name' => 'TargetType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目标节点类型。取值：'."\n"
                            ."\n"
                            .'- USER：查询当前登录账号已绑定的有效策略。适用单账号模式。'."\n"
                            .'- ROOT：查询资源目录中的Root资源夹已绑定的有效策略。适用多账号模式。'."\n"
                            .'- FOLDER：查询资源目录中的资源夹已绑定的有效策略。适用多账号模式。'."\n"
                            .'- ACCOUNT：查询资源目录中的成员已绑定的有效策略。适用多账号模式。'."\n"
                            ."\n"
                            .'> 该参数在单账号模式下为可选，多账号模式下为必选。且参数取值不区分大小写。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ACCOUNT',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'BB532282-94F5-5F56-877F-32D5E2A04F3F',
                            ],
                            'EffectivePolicy' => [
                                'description' => '有效策略。',
                                'type' => 'string',
                                'example' => '{\\"tags\\":{\\"costcenter\\":{\\"tag_value\\":[\\"Beijing\\",\\"Shanghai\\"],\\"tag_key\\":\\"CostCenter\\"}}}',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"BB532282-94F5-5F56-877F-32D5E2A04F3F\\",\\n  \\"EffectivePolicy\\": \\"{\\\\\\\\\\\\\\"tags\\\\\\\\\\\\\\":{\\\\\\\\\\\\\\"costcenter\\\\\\\\\\\\\\":{\\\\\\\\\\\\\\"tag_value\\\\\\\\\\\\\\":[\\\\\\\\\\\\\\"Beijing\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"Shanghai\\\\\\\\\\\\\\"],\\\\\\\\\\\\\\"tag_key\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"CostCenter\\\\\\\\\\\\\\"}}}\\"\\n}","errorExample":""},{"type":"xml","example":"<GetEffectivePolicyResponse>\\n    <EffectivePolicy>{\\"tags\\":{\\"costcenter\\":{\\"tag_value\\":[\\"Beijing\\",\\"Shanghai\\"],\\"tag_key\\":\\"CostCenter\\"}}}</EffectivePolicy>\\n    <RequestId>BB532282-94F5-5F56-877F-32D5E2A04F3F</RequestId>\\n</GetEffectivePolicyResponse>","errorExample":""}]',
            'title' => '查询有效策略',
            'description' => '### 使用说明'."\n"
                .'单账号模式下，当前登录账号可以查询自己已绑定的有效策略。多账号模式下，资源目录管理账号可以查询Root资源夹、资源夹和成员已绑定的有效策略，资源目录成员可以查询自己已绑定的有效策略。关于标签策略模式的更多信息，请参见[标签策略模式](~~417434~~)。'."\n"
                ."\n"
                .'该有效策略是根据标签策略继承关系计算得出的。更多信息，请参见[标签策略继承和有效策略计算](~~417435~~)。'."\n"
                ."\n"
                .'本文将提供一个示例，在单账号模式下，查询当前登录账号的有效策略。',
            'requestParamsDescription' => '关于公共请求参数的详情，请参见[公共参数](~~159973~~)。',
        ],
        'ListTargetsForPolicy' => [
            'summary' => '查询标签策略绑定的目标节点。',
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。取值：cn-shanghai。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-shanghai',
                        'default' => 'cn-shanghai',
                    ],
                ],
                [
                    'name' => 'MaxResult',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页时每页显示的数据条数。'."\n"
                            ."\n"
                            .'默认值：50。最大值：1000。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '50',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '下一个查询开始的Token。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'caeba0bbb2be03f84eb48b699f0a****',
                    ],
                ],
                [
                    'name' => 'PolicyId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '标签策略ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'p-de62a0bf400e4b69****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'PlainResponse<ListTargetsModel>',
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'Targets' => [
                                'description' => '目标节点列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '目标节点列表。',
                                    'type' => 'object',
                                    'properties' => [
                                        'TargetId' => [
                                            'description' => '目标节点ID。',
                                            'type' => 'string',
                                            'example' => '195320939469****',
                                        ],
                                        'TargetType' => [
                                            'description' => '目标节点类型。取值：'."\n"
                                                ."\n"
                                                .'- USER：当前登录账号。适用单账号模式。'."\n"
                                                .'- ROOT：资源目录中的Root资源夹。适用多账号模式。'."\n"
                                                .'- FOLDER：资源目录中的资源夹。适用多账号模式。'."\n"
                                                .'- ACCOUNT：资源目录中的成员。适用多账号模式。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => 'ACCOUNT',
                                        ],
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '2EE71C8D-6DB8-56AC-8B05-3D4C0116E6A1',
                            ],
                            'IsRd' => [
                                'description' => '是否为资源目录中的节点。取值：'."\n"
                                    ."\n"
                                    .'- true：目标节点是资源目录中的节点。适用多账号模式。'."\n"
                                    .'- false：目标节点不是资源目录中的节点。适用单账号模式。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RdId' => [
                                'description' => '资源目录ID。'."\n"
                                    ."\n"
                                    .'> 仅多账号模式返回该参数。',
                                'type' => 'string',
                                'example' => 'rd-3G****',
                            ],
                            'NextToken' => [
                                'description' => '根据`NextToken`判断是否具备下一个查询开始的Token。取值：'."\n"
                                    ."\n"
                                    .'- 如果`NextToken`为空，即`"NextToken": ""`，表示没有下一个。'."\n"
                                    .'- 如果`NextToken`有值，则该值就是下一个查询开始的Token。',
                                'type' => 'string',
                                'example' => 'caeba0bbb2be03f84eb48b699f0a****',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Targets\\": [\\n    {\\n      \\"TargetId\\": \\"195320939469****\\",\\n      \\"TargetType\\": 0\\n    }\\n  ],\\n  \\"RequestId\\": \\"2EE71C8D-6DB8-56AC-8B05-3D4C0116E6A1\\",\\n  \\"IsRd\\": true,\\n  \\"RdId\\": \\"rd-3G****\\",\\n  \\"NextToken\\": \\"caeba0bbb2be03f84eb48b699f0a****\\"\\n}","errorExample":""},{"type":"xml","example":"<ListTargetsForPolicyResponse>\\n\\t<RequestId>B90479D5-CB51-5BA8-A13F-989A81B81273</RequestId>\\n\\t<Targets>\\n\\t\\t<Target>\\n\\t\\t\\t<TargetType>ACCOUNT</TargetType>\\n\\t\\t\\t<TargetId>195320939469****</TargetId>\\n\\t\\t</Target>\\n\\t\\t<Target>\\n\\t\\t\\t<TargetType>ACCOUNT</TargetType>\\n\\t\\t\\t<TargetId>177242285274****</TargetId>\\n\\t\\t</Target>\\n\\t</Targets>\\n\\t<RdId>rd-3G****</RdId>\\n\\t<IsRd>true</IsRd>\\n</ListTargetsForPolicyResponse>\\t\\n","errorExample":""}]',
            'title' => '查询标签策略绑定的目标节点',
            'description' => '### 使用说明'."\n"
                .'单账号模式下，当前登录账号可以查询指定标签策略绑定的目标节点，该目标节点为当前登录账号。多账号模式下，资源目录管理账号可以查询指定标签策略绑定的目标节点，该目标节点为Root资源夹、资源夹或成员。关于标签策略模式的更多信息，请参见[标签策略模式](~~417434~~)。'."\n"
                ."\n"
                .'本文将提供一个示例，在多账号模式下，查询ID为`p-de62a0bf400e4b69****`的标签策略绑定的目标节点。返回结果显示，该标签策略绑定到资源目录的两个成员上。',
            'requestParamsDescription' => '关于公共请求参数的详情，请参见[公共参数](~~159973~~)。',
        ],
        'ListConfigRulesForTarget' => [
            'summary' => '查询目标节点的标签检测任务列表。',
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
            'operationType' => 'read',
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。取值：cn-shanghai。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-shanghai',
                        'default' => 'cn-shanghai',
                    ],
                ],
                [
                    'name' => 'TargetId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目标节点ID。用于查询的过滤条件。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '134254031178****',
                    ],
                ],
                [
                    'name' => 'MaxResult',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页时每页显示的数据条数。'."\n"
                            ."\n"
                            .'默认值：50。最大值：1000。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '50',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => "\n"
                            .'下一个查询开始的Token。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'caeba0bbb2be03f84eb48b699f0a****',
                    ],
                ],
                [
                    'name' => 'TagKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => '标签键。用于查询的过滤条件。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'CostCenter',
                    ],
                ],
                [
                    'name' => 'TargetType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目标节点类型。用于查询的过滤条件。取值：'."\n"
                            ."\n"
                            .'- USER：查询当前登录账号的标签检测任务列表。适用单账号模式。'."\n"
                            .'- ROOT：查询资源目录中的Root资源夹的标签检测任务列表。适用多账号模式。'."\n"
                            .'- FOLDER：查询资源目录中的资源夹的标签检测任务列表。适用多账号模式。'."\n"
                            .'- ACCOUNT：查询资源目录中的成员的标签检测任务列表。适用多账号模式。'."\n"
                            ."\n"
                            .'> 参数取值不区分大小写。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ACCOUNT',
                    ],
                ],
                [
                    'name' => 'PolicyType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '标签策略场景。用于查询的过滤条件。取值：'."\n"
                            ."\n"
                            .'- tags：资源绑定指定标签值场景下的标签策略。'."\n"
                            .'- rg_inherit：资源自动继承资源组标签场景下的标签策略。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'tags',
                    ],
                ],
                [
                    'name' => 'UserType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '标签策略模式。用于查询的过滤条件。取值：'."\n"
                            ."\n"
                            .'- USER：单账号模式。'."\n"
                            .'- RD：多账号模式。'."\n"
                            ."\n"
                            .'关于标签策略模式的更多信息，请参见[标签策略模式](~~417434~~)。'."\n"
                            ."\n"
                            .'> 参数取值不区分大小写。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'USER',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'ListResponse<PolicyModel>',
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'description' => '检测任务列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '检测任务列表。',
                                    'type' => 'object',
                                    'properties' => [
                                        'TargetId' => [
                                            'description' => '目标节点ID。',
                                            'type' => 'string',
                                            'example' => '134254031178****',
                                        ],
                                        'TargetType' => [
                                            'description' => '目标节点类型。取值：'."\n"
                                                ."\n"
                                                .'- USER：当前登录账号。适用单账号模式。'."\n"
                                                .'- ROOT：资源目录中的Root资源夹。适用多账号模式。'."\n"
                                                .'- FOLDER：资源目录中的资源夹。适用多账号模式。'."\n"
                                                .'- ACCOUNT：资源目录中的成员。适用多账号模式。'."\n",
                                            'type' => 'string',
                                            'example' => 'USER',
                                        ],
                                        'ConfigRuleId' => [
                                            'description' => '规则ID。',
                                            'type' => 'string',
                                            'example' => 'cr-0lb4866180880069****',
                                        ],
                                        'AggregatorId' => [
                                            'description' => '账号组ID。'."\n"
                                                ."\n"
                                                .'用于在配置审计中查询不合规资源检测报告的具体内容。'."\n"
                                                ."\n"
                                                .'> 仅多账号模式返回该参数。'."\n",
                                            'type' => 'string',
                                            'example' => 'ca-efdc33dc9b37002d****',
                                        ],
                                        'TagKey' => [
                                            'description' => '标签键。',
                                            'type' => 'string',
                                            'example' => 'CostCenter',
                                        ],
                                        'Remediation' => [
                                            'description' => '是否启用自动修正。取值：'."\n"
                                                ."\n"
                                                .'- true：已启用。'."\n"
                                                .'- false：未启用。',
                                            'type' => 'boolean',
                                            'example' => 'false',
                                        ],
                                        'PolicyType' => [
                                            'description' => '标签策略场景。取值：'."\n"
                                                ."\n"
                                                .'- tags：资源绑定指定标签值场景下的标签策略。'."\n"
                                                .'- rg_inherit：资源自动继承资源组标签场景下的标签策略。',
                                            'type' => 'string',
                                            'example' => 'tags',
                                        ],
                                        'TagValue' => [
                                            'description' => '自动修复配置的标签值。',
                                            'type' => 'string',
                                            'example' => 'Project',
                                        ],
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '7126AECD-D7AD-5073-8E88-DD2BD1FC139E',
                            ],
                            'NextToken' => [
                                'description' => '根据`NextToken`判断是否具备下一个查询开始的Token。取值：'."\n"
                                    ."\n"
                                    .'- 如果`NextToken`为空，即`"NextToken": ""`，表示没有下一个。'."\n"
                                    .'- 如果`NextToken`有值，则该值就是下一个查询开始的Token。',
                                'type' => 'string',
                                'example' => 'caeba0bbb2be03f84eb48b699f0a****',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": [\\n    {\\n      \\"TargetId\\": \\"134254031178****\\",\\n      \\"TargetType\\": \\"USER\\",\\n      \\"ConfigRuleId\\": \\"cr-0lb4866180880069****\\",\\n      \\"AggregatorId\\": \\"ca-efdc33dc9b37002d****\\",\\n      \\"TagKey\\": \\"CostCenter\\",\\n      \\"Remediation\\": false,\\n      \\"PolicyType\\": \\"tags\\",\\n      \\"TagValue\\": \\"Project\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"7126AECD-D7AD-5073-8E88-DD2BD1FC139E\\",\\n  \\"NextToken\\": \\"caeba0bbb2be03f84eb48b699f0a****\\"\\n}","errorExample":""},{"type":"xml","example":"<ListConfigRulesForTargetResponse>\\n    <RequestId>7126AECD-D7AD-5073-8E88-DD2BD1FC139E</RequestId>\\n    <HttpStatusCode>200</HttpStatusCode>\\n    <Data>\\n        <ConfigRuleId>cr-0lb4866180880069****</ConfigRuleId>\\n        <PolicyType>tags</PolicyType>\\n        <TargetType>USER</TargetType>\\n        <TagKey>CostCenter</TagKey>\\n        <Remediation>false</Remediation>\\n        <TargetId>134254031178****</TargetId>\\n    </Data>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</ListConfigRulesForTargetResponse>","errorExample":""}]',
            'title' => '查询目标节点的标签检测任务列表',
            'description' => '### 使用说明'."\n"
                .'单账号模式下，当前登录账号可以查询本账号的标签检测任务列表。多账号模式下，资源目录管理账号可以查询Root资源夹、资源夹或成员的标签检测任务列表。关于标签策略模式的更多信息，请参见[标签策略模式](~~417434~~)。'."\n"
                ."\n"
                .'本文将提供一个示例，在单账号模式下，查询当前登录账号的全部标签检测任务列表。返回结果显示，只有一条标签检测任务。',
            'requestParamsDescription' => '关于公共请求参数的详情，请参见[公共参数](~~159973~~)。',
        ],
        'GetConfigRuleReport' => [
            'summary' => '查询上一次生成的不合规资源检测报告的基本信息。',
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
            'operationType' => 'readAndWrite',
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。取值：cn-shanghai。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-shanghai',
                        'default' => 'cn-shanghai',
                    ],
                ],
                [
                    'name' => 'TargetId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目标节点ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '154950938137****',
                    ],
                ],
                [
                    'name' => 'UserType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '标签策略模式。取值：'."\n"
                            ."\n"
                            .'- USER：单账号下的默认值。'."\n"
                            .'- RD：多账号下的默认值。'."\n"
                            ."\n"
                            .'关于标签策略模式的更多信息，请参见[标签策略模式](~~417434~~)。'."\n"
                            ."\n"
                            .'> 参数取值不区分大小写。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'USER',
                    ],
                ],
                [
                    'name' => 'TargetType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目标节点类型。取值：'."\n"
                            ."\n"
                            .'- USER：查询当前登录账号的不合规资源检测报告基本信息。适用单账号模式。'."\n"
                            .'- ROOT：查询资源目录中的Root资源夹的不合规资源检测报告基本信息。适用多账号模式。'."\n"
                            .'- FOLDER：查询资源目录中的资源夹的不合规资源检测报告基本信息。适用多账号模式。'."\n"
                            .'- ACCOUNT：查询资源目录中的成员的不合规资源检测报告基本信息。适用多账号模式。'."\n"
                            ."\n"
                            .'> 参数取值不区分大小写。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'USER',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'ListResponse<PolicyModel>',
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'A68BD5BC-5B12-5A9B-8AE9-77884886BE10',
                            ],
                            'Success' => [
                                'description' => '是否成功。取值：'."\n"
                                    ."\n"
                                    .'- true：成功。'."\n"
                                    .'- false：失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'HttpStatusCode' => [
                                'description' => '状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Data' => [
                                'description' => '上一次生成的不合规资源检测报告基本信息。',
                                'type' => 'object',
                                'properties' => [
                                    'ReportId' => [
                                        'description' => '不合规资源检测报告的ID。',
                                        'type' => 'string',
                                        'example' => 'crp-ao0786618088006c****',
                                    ],
                                    'CreatedTime' => [
                                        'description' => '报告生成的时间戳。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1655089159000',
                                    ],
                                    'TargetId' => [
                                        'description' => '目标节点ID。'."\n"
                                            ."\n"
                                            .'> 仅当[GenerateConfigRuleReport](~~433313~~)和当前API的请求参数中同时指定了`TargetType`和`TargetId`时，才会返回该参数。',
                                        'type' => 'string',
                                        'example' => '154950938137****',
                                    ],
                                    'TargetType' => [
                                        'description' => '目标节点类型。取值：'."\n"
                                            ."\n"
                                            .'- USER：当前登录账号。适用单账号模式。'."\n"
                                            .'- ROOT：资源目录中的Root资源夹。适用多账号模式。'."\n"
                                            .'- FOLDER：资源目录中的资源夹。适用多账号模式。'."\n"
                                            .'- ACCOUNT：资源目录中的成员。适用多账号模式。'."\n"
                                            ."\n"
                                            .'> 仅当[GenerateConfigRuleReport](~~433313~~)和当前API的请求参数中同时指定了`TargetType`和`TargetId`，才会返回该参数。',
                                        'type' => 'string',
                                        'example' => 'ACCOUNT',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"A68BD5BC-5B12-5A9B-8AE9-77884886BE10\\",\\n  \\"Success\\": true,\\n  \\"HttpStatusCode\\": 200,\\n  \\"Data\\": {\\n    \\"ReportId\\": \\"crp-ao0786618088006c****\\",\\n    \\"CreatedTime\\": 1655089159000,\\n    \\"TargetId\\": \\"154950938137****\\",\\n    \\"TargetType\\": \\"ACCOUNT\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetConfigRuleReportResponse>\\n    <RequestId>A68BD5BC-5B12-5A9B-8AE9-77884886BE10</RequestId>\\n    <HttpStatusCode>200</HttpStatusCode>\\n    <Data>\\n        <CreatedTime>1655089159000</CreatedTime>\\n        <ReportId>crp-ao0786618088006c****</ReportId>\\n    </Data>\\n    <Success>true</Success>\\n</GetConfigRuleReportResponse>","errorExample":""}]',
            'title' => '查询上一次生成的不合规资源检测报告的基本信息',
            'description' => '### 使用说明'."\n"
                .'单账号模式下，当前登录账号可以查询本账号的不合规资源检测报告基本信息。多账号模式下，资源目录管理账号可以查询Root资源夹、资源夹或成员的不合规资源检测报告基本信息。关于标签策略模式的更多信息，请参见[标签策略模式](~~417434~~)。'."\n"
                ."\n"
                .'本文将提供一个示例，在单账号模式下，查询当前登录账号的不合规资源检测报告基本信息。返回结果显示，上一次生成的不合规资源检测报告ID为`crp-ao0786618088006c****`。',
            'requestParamsDescription' => '关于公共请求参数的详情，请参见[公共参数](~~159973~~)。',
            'extraInfo' => '### 后续操作'."\n"
                .'查询不合规资源检测报告具体内容的方法如下：'."\n"
                ."\n"
                .'- 单账号模式：先通过本API获取`ReportId`，然后调用配置审计服务的[GetConfigRulesReport](~~263608~~)查询不合规资源检测报告的具体内容。'."\n"
                .'- 多账号模式：先通过本API获取`ReportId`，然后通过[ListConfigRulesForTarget](~~433318~~)获取`AggregatorId`，最后调用配置审计服务的[GetAggregateConfigRulesReport](~~262706~~)查询不合规资源检测报告的具体内容。',
        ],
        'GenerateConfigRuleReport' => [
            'summary' => '生成不合规资源检测报告。',
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
            'operationType' => 'readAndWrite',
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。取值：cn-shanghai。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-shanghai',
                        'default' => 'cn-shanghai',
                    ],
                ],
                [
                    'name' => 'TargetId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目标节点ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '154950938137****',
                    ],
                ],
                [
                    'name' => 'TargetType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目标节点类型。取值：'."\n"
                            ."\n"
                            .'- USER：为当前登录账号生成不合规资源的检测报告。适用单账号模式。'."\n"
                            .'- ROOT：为资源目录中的Root资源夹生成不合规资源的检测报告。适用多账号模式。'."\n"
                            .'- FOLDER：为资源目录中的资源夹生成不合规资源的检测报告。适用多账号模式。'."\n"
                            .'- ACCOUNT：为资源目录中的成员生成不合规资源的检测报告。适用多账号模式。'."\n"
                            ."\n"
                            .'> 参数取值不区分大小写。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ACCOUNT',
                    ],
                ],
                [
                    'name' => 'UserType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '标签策略模式。取值：'."\n"
                            ."\n"
                            .'- USER：单账号模式下的默认值。'."\n"
                            .'- RD：多账号模式下的默认值。'."\n"
                            ."\n"
                            .'关于标签策略模式的更多信息，请参见[标签策略模式](~~417434~~)。'."\n"
                            ."\n"
                            .'> 如果资源目录的管理账号同时启用了资源目录多账号模式和管理账号单账号模式，则该参数必须设置。参数取值不区分大小写。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'USER',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'ListResponse<PolicyModel>',
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '37B2AC06-89D8-5D95-98DF-3E68C12BDE05',
                            ],
                            'ReportId' => [
                                'description' => '不合规资源检测报告的ID。',
                                'type' => 'string',
                                'example' => 'crp-ao0786618088006c****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'GlobalAggregator.NotFount',
                        'errorMessage' => 'Can not find global aggregator',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'NoPermission.Operator	',
                        'errorMessage' => 'Only the RD admin account has permission to operate',
                    ],
                    [
                        'errorCode' => 'TagPolicy.NotOpen',
                        'errorMessage' => 'You have not activated the tag policy service.',
                    ],
                    [
                        'errorCode' => 'TagPolicy.PendingEnable',
                        'errorMessage' => 'The tag policy status is pending enable.',
                    ],
                    [
                        'errorCode' => 'WrongEndpoint',
                        'errorMessage' => 'Only the shanghai endpoint supports the operation.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"37B2AC06-89D8-5D95-98DF-3E68C12BDE05\\",\\n  \\"ReportId\\": \\"crp-ao0786618088006c****\\"\\n}","errorExample":""},{"type":"xml","example":"<GenerateConfigRuleReportResponse>\\n    <RequestId>37B2AC06-89D8-5D95-98DF-3E68C12BDE05</RequestId>\\n    <ReportId>crp-ao0786618088006c****</ReportId>\\n</GenerateConfigRuleReportResponse>","errorExample":""}]',
            'title' => '生成不合规资源检测报告',
            'description' => '### 使用说明'."\n"
                .'单账号模式下，可以生成当前登录账号的不合规资源检测报告。多账号模式下，可以生成资源目录的Root资源夹、资源夹或成员的不合规资源检测报告。关于标签策略模式的更多信息，请参见[标签策略模式](~~417434~~)。'."\n"
                ."\n"
                .'本文将提供一个示例，在单账号模式下，生成当前登录账号的全部不合规资源的检测报告。',
            'requestParamsDescription' => '关于公共请求参数的详情，请参见[公共参数](~~159973~~)。',
        ],
        'DisablePolicyType' => [
            'summary' => '禁用管控策略。',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。'."\n"
                            ."\n"
                            .'取值为`cn-shanghai`。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'cn-shanghai',
                        'default' => 'cn-shanghai',
                    ],
                ],
                [
                    'name' => 'UserType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'OpenType',
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
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '6E27F22C-EDA3-132E-A53F-77DE3BC2343D',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6E27F22C-EDA3-132E-A53F-77DE3BC2343D\\"\\n}","errorExample":""},{"type":"xml","example":"<DisablePolicyTypeResponse>\\n    <RequestId>6E27F22C-EDA3-132E-A53F-77DE3BC2343D</RequestId>\\n</DisablePolicyTypeResponse>","errorExample":""}]',
            'title' => 'DisablePolicyType（暂不对外）',
            'description' => '### 使用说明'."\n"
                .'禁用标签策略后，已绑定的标签策略会自动解绑。',
            'requestParamsDescription' => '关于公共请求参数的详情，请参见[公共参数](~~159973~~)。',
        ],
        'EnablePolicyType' => [
            'summary' => '启用标签策略。',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。'."\n"
                            ."\n"
                            .'取值为`cn-shanghai`。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'cn-shanghai',
                        'default' => 'cn-shanghai',
                    ],
                ],
                [
                    'name' => 'UserType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'OpenType',
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
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '6E27F22C-EDA3-132E-A53F-77DE3BC2343D',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6E27F22C-EDA3-132E-A53F-77DE3BC2343D\\"\\n}","errorExample":""},{"type":"xml","example":"<EnablePolicyTypeResponse>\\n    <RequestId>6E27F22C-EDA3-132E-A53F-77DE3BC2343D</RequestId>\\n</EnablePolicyTypeResponse>","errorExample":""}]',
            'title' => 'EnablePolicyType（暂不对外）',
            'description' => '### 使用说明'."\n"
                .'您可以启用标签策略的单账号模式或多账号模式：'."\n"
                ."\n"
                .'- 单账号模式：如果当前登录账号是独立的阿里云账号，则会启用标签策略单账号模式，管控单账号范围内的资源。'."\n"
                ."\n"
                .'- 多账号模式：如果当前登录账号是资源目录的管理账号，则会启用标签策略多账号模式，管控资源目录范围内的资源。'."\n"
                .'  > 资源目录的成员不能启用标签策略。',
            'requestParamsDescription' => '关于公共请求参数的详情，请参见[公共参数](~~159973~~)。',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'tag.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-qingdao',
            'endpoint' => 'tag.cn-qingdao.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'tag.cn-beijing.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou',
            'endpoint' => 'tag.cn-zhangjiakou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhengzhou-jva',
            'endpoint' => 'tag.cn-zhengzhou-jva.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-huhehaote',
            'endpoint' => 'tag.cn-huhehaote.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-wulanchabu',
            'endpoint' => 'tag.cn-wulanchabu.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'tag.cn-shanghai.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-nanjing',
            'endpoint' => 'tag.cn-nanjing.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-fuzhou',
            'endpoint' => 'tag.cn-fuzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'tag.cn-shenzhen.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-heyuan',
            'endpoint' => 'tag.cn-heyuan.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-guangzhou',
            'endpoint' => 'tag.cn-guangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-chengdu',
            'endpoint' => 'tag.cn-chengdu.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong',
            'endpoint' => 'tag.cn-hongkong.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-1',
            'endpoint' => 'tag.ap-northeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-2',
            'endpoint' => 'tag.ap-northeast-2.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'tag.ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-2',
            'endpoint' => 'tag.ap-southeast-2.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-3',
            'endpoint' => 'tag.ap-southeast-3.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-5',
            'endpoint' => 'tag.ap-southeast-5.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-6',
            'endpoint' => 'tag.ap-southeast-6.aliyuncs.com',
        ],
        [
            'regionId' => 'us-east-1',
            'endpoint' => 'tag.us-east-1.aliyuncs.com',
        ],
        [
            'regionId' => 'us-west-1',
            'endpoint' => 'tag.us-west-1.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-west-1',
            'endpoint' => 'tag.eu-west-1.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-central-1',
            'endpoint' => 'tag.eu-central-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-south-1',
            'endpoint' => 'tag.ap-south-1.aliyuncs.com',
        ],
        [
            'regionId' => 'me-east-1',
            'endpoint' => 'tag.me-east-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-finance',
            'endpoint' => 'tag.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-finance-1',
            'endpoint' => 'tag.cn-shanghai-finance-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-finance-1',
            'endpoint' => 'tag.cn-shenzhen-finance-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-7',
            'endpoint' => 'tag.ap-southeast-7.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-finance-1',
            'endpoint' => 'tag.cn-beijing-finance-1.aliyuncs.com',
        ],
        [
            'regionId' => 'me-central-1',
            'endpoint' => 'tag.me-central-1.aliyuncs.com',
        ],
    ],
];
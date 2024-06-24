<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'Tag',
    'version' => '2018-08-28',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 71898,
      'title' => '资源标签',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'TagResources',
        1 => 'UntagResources',
        2 => 'ListTagResources',
        3 => 'ListResourcesByTag',
        4 => 'ListTagKeys',
        5 => 'ListTagValues',
        6 => 'CreateTags',
        7 => 'DeleteTag',
        8 => 'OpenCreatedBy',
        9 => 'CheckCreatedByEnabled',
        10 => 'CloseCreatedBy',
        11 => 'ListSupportResourceTypes',
        12 => 'DescribeRegions',
      ),
    ),
    1 => 
    array (
      'id' => 166919,
      'title' => '标签策略',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreatePolicy',
        1 => 'DeletePolicy',
        2 => 'AttachPolicy',
        3 => 'DetachPolicy',
        4 => 'ModifyPolicy',
        5 => 'GetPolicy',
        6 => 'GetPolicyEnableStatus',
        7 => 'ListPolicies',
        8 => 'ListPoliciesForTarget',
        9 => 'GetEffectivePolicy',
        10 => 'ListTargetsForPolicy',
        11 => 'ListConfigRulesForTarget',
        12 => 'GetConfigRuleReport',
        13 => 'GenerateConfigRuleReport',
      ),
    ),
    2 => 
    array (
      'id' => 182347,
      'title' => '其他',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DisablePolicyType',
        1 => 'EnablePolicyType',
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
    'TagResources' => 
    array (
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。取值：

- 对于中心化部署的云服务，您可以填写通用地域`cn-hangzhou`，或者参照[标签支持的中心化云服务的对应地域](~~2579691~~)填写资源对应的地域ID。
- 对于非中心化部署的云服务，您需要填写资源所属的地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。取值：

- 对于中心化部署的云服务，您可以填写通用地域`cn-hangzhou`，或者参照[标签支持的中心化云服务的对应地域](~~2579691~~)填写资源对应的地域ID。
- 对于非中心化部署的云服务，您需要填写资源所属的地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'Tags',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '标签键和标签值。键值对取值范围：1~10。

如果指定多个标签，则会为指定资源同时创建并绑定该多个标签。

约束如下：

- 标签键长度范围：1~128个字符。
- 标签值长度范围：1~128个字符。
- 区分大小写。
- 同一个资源上的同一个标签键只能对应一个标签值。如果您尝试添加已有标签键，则对应的标签值会更新为新值。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '{"k1":"v1","k2":"v2"}',
          ),
        ),
        3 => 
        array (
          'name' => 'ResourceARN',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '资源ARN（Aliyun Resource Name）。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '资源ARN（Aliyun Resource Name）。

N的取值范围：1~50。

资源ARN的格式：`arn:acs:${ProductCode}:${Region}:${Account}:${ResourceType}/${ResourceId}`。各字段含义如下：

- `ProductCode`：云服务code。从[ListSupportResourceTypes](~~2330915~~)返回参数中获取。
- `Region`：资源所属的地域ID。支持使用星号（*）表示当前地域。
- `Account`：资源所属的阿里云账号（主账号）ID。支持使用星号（*）表示当前登录的阿里云账号（主账号）。
- `ResourceType`：资源类型。从[ListSupportResourceTypes](~~2330915~~)返回参数中获取。
- `ResourceId`：资源ID。

> ResourceARN支持传递资源组、操作审计和资源管理的`ProductCode`和`ResourceType`。',
              'type' => 'string',
              'required' => false,
              'example' => 'arn:acs:vpc:cn-hangzhou:123456789****:vpc/vpc-bp19dd90tkt6tz7wu****',
            ),
            'required' => true,
            'example' => 'arn:acs:vpc:cn-hangzhou:123456789****:vpc/vpc-bp19dd90tkt6tz7wu****',
            'maxItems' => 101,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '72086426-9F8C-4A60-852B-864048FD1199',
              ),
              'FailedResources' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'FailedResource' => 
                  array (
                    'description' => '失败资源信息。

> - 创建并绑定标签成功时，返回的`FailedResources`为空。
> - 创建并绑定标签失败或部分失败时，返回的`FailedResources`会显示失败资源的详细信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '失败资源信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ResourceARN' => 
                        array (
                          'description' => '失败资源ARN。',
                          'type' => 'string',
                          'example' => 'arn:acs:vpc:cn-hangzhou:123456789****:vpc/vpc-bp19dd90tkt6tz7wu****',
                        ),
                        'Result' => 
                        array (
                          'description' => '错误结果。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Code' => 
                            array (
                              'description' => '错误码。',
                              'type' => 'string',
                              'example' => 'InvalidResourceId.NotFound',
                            ),
                            'Message' => 
                            array (
                              'description' => '错误信息。',
                              'type' => 'string',
                              'example' => 'The specified ResourceIds are not found in our records.',
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
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidResourceARN.Region',
            'errorMessage' => 'The Region specified in the ResourceARN parameter does not match the RegionId parameter, specifically: %s.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidResourceARN.Account',
            'errorMessage' => 'The Account specified in the ResourceARN parameter does not match the actual account, specifically: %s.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidResourceARN.FormatError',
            'errorMessage' => 'The format of parameter ResourceARN: %s is not valid, for the correct format, you can refer to the Recommend.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidParameter.ResourceType',
            'errorMessage' => 'The parameter resource type: %s in ResourceARN is not valid or not support.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidParameter.ServiceCode',
            'errorMessage' => 'The parameter service code: %s in  ResourceARN is not valid or not support.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidParameter.TagKey',
            'errorMessage' => 'The TagKey parameter  is invalid. The following TagKeys are invalid: %s.',
          ),
          6 => 
          array (
            'errorCode' => 'InvalidParameter.TagValue',
            'errorMessage' => 'The TagValue parameter is invalid. The following TagValues are invalid: %s.',
          ),
          7 => 
          array (
            'errorCode' => 'InvalidParameter.Tags',
            'errorMessage' => 'The Tags parameter cannot be empty, and JSON parsing should adhere to the format of a Map.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Duplicate.TagKey',
            'errorMessage' => 'The Tag.N.Key contains duplicate keys.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.Category',
            'errorMessage' => 'The specified Category is invalid. Valid values are Custom and System.',
          ),
          2 => 
          array (
            'errorCode' => 'MissingParameter.Createby',
            'errorMessage' => 'You must specify Createby.',
          ),
          3 => 
          array (
            'errorCode' => 'MissingParameter.ResourceIds',
            'errorMessage' => 'You must specify ResourceIds.',
          ),
          4 => 
          array (
            'errorCode' => 'NoPermission.Operator',
            'errorMessage' => 'The user is not authorized to operate on the specified resource.',
          ),
          5 => 
          array (
            'errorCode' => 'NoPermissionKey.Category',
            'errorMessage' => 'Some keys cannot be modified because the user does not have permission.',
          ),
          6 => 
          array (
            'errorCode' => 'NoPermissionKey.Operator',
            'errorMessage' => 'You are not authorized to operate the tag key.',
          ),
          7 => 
          array (
            'errorCode' => 'NumberExceed.ResourceIds',
            'errorMessage' => 'The maximum number of ResourceIds is exceeded.',
          ),
          8 => 
          array (
            'errorCode' => 'NumberExceed.Tags',
            'errorMessage' => 'The maximum number of Tags is exceeded.',
          ),
          9 => 
          array (
            'errorCode' => 'QuotaExceed.TagsPerResource',
            'errorMessage' => 'The maximum number of tags for each resource is exceeded.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'Missing.TagKey',
            'errorMessage' => 'Tag.N.Value has been specified and you must specify Tag.N.Key.',
          ),
          1 => 
          array (
            'errorCode' => 'MissingParameter.AliUid',
            'errorMessage' => 'You must specify AliUid.',
          ),
          2 => 
          array (
            'errorCode' => 'MissingParameter.Bid',
            'errorMessage' => 'You must specify Bid.',
          ),
          3 => 
          array (
            'errorCode' => 'MissingParameter.TagKey',
            'errorMessage' => 'You must specify TagKey.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"72086426-9F8C-4A60-852B-864048FD1199\\",\\n  \\"FailedResources\\": {\\n    \\"FailedResource\\": [\\n      {\\n        \\"ResourceARN\\": \\"arn:acs:vpc:cn-hangzhou:123456789****:vpc/vpc-bp19dd90tkt6tz7wu****\\",\\n        \\"Result\\": {\\n          \\"Code\\": \\"InvalidResourceId.NotFound\\",\\n          \\"Message\\": \\"The specified ResourceIds are not found in our records.\\"\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<TagResourcesResponse>\\r\\n\\t<RequestId>72086426-9F8C-4A60-852B-864048FD1199</RequestId>\\r\\n\\t<FailedResources></FailedResources>\\r\\n</TagResourcesResponse>\\t\\r\\n\\r\\n","errorExample":""}]',
      'title' => '为云资源创建并绑定标签',
      'summary' => '为指定的多个云产品的多个云资源统一创建并绑定标签。',
      'description' => '标签是云资源的标识，可以帮助您从不同维度对具有相同特征的云资源进行分类、搜索和聚合，让资源管理变得更加轻松。更多信息，请参见[标签概述](~~156983~~)。

支持标签的云服务，请参见[支持标签的云服务](~~171455~~)。',
      'requestParamsDescription' => ' 关于公共请求参数的详情，请参见[公共参数](~~159973~~)。',
      'responseParamsDescription' => '

',
      'extraInfo' => ' ',
    ),
    'UntagResources' => 
    array (
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。取值：

- 对于中心化部署的云服务，您可以填写通用地域`cn-hangzhou`，或者参照[标签支持的中心化云服务的对应地域](~~2579691~~)填写资源对应的地域ID。
- 对于非中心化部署的云服务，您需要填写资源所属的地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。取值：

- 对于中心化部署的云服务，您可以填写通用地域`cn-hangzhou`，或者参照[标签支持的中心化云服务的对应地域](~~2579691~~)填写资源对应的地域ID。
- 对于非中心化部署的云服务，您需要填写资源所属的地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'ResourceARN',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '资源ARN（Aliyun Resource Name）。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '资源ARN（Aliyun Resource Name）。

N的取值范围：1~50。

资源ARN的格式：`arn:acs:${ProductCode}:${Region}:${Account}:${ResourceType}/${ResourceId}`。各字段含义如下：

- `ProductCode`：云服务code。从[ListSupportResourceTypes](~~2330915~~)返回参数中获取。
- `Region`：资源所属的地域ID。支持使用星号（*）表示当前地域。
- `Account`：资源所属的阿里云账号（主账号）ID。支持使用星号（*）表示当前登录的阿里云账号（主账号）。
- `ResourceType`：资源类型。从[ListSupportResourceTypes](~~2330915~~)返回参数中获取。
- `ResourceId`：资源ID。

> ResourceARN支持传递资源组、操作审计和资源管理的`ProductCode`和`ResourceType`。',
              'type' => 'string',
              'required' => false,
              'example' => 'arn:acs:vpc:cn-hangzhou:123456789****:vpc/vpc-bp19dd90tkt6tz7wu****',
            ),
            'required' => true,
            'example' => 'arn:acs:vpc:cn-hangzhou:123456789****:vpc/vpc-bp19dd90tkt6tz7wu****',
            'maxItems' => 101,
          ),
        ),
        3 => 
        array (
          'name' => 'TagKey',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '标签键。

N的取值范围：1~10。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签键。

N的取值范围：1~10。',
              'type' => 'string',
              'required' => false,
              'example' => 'k1',
            ),
            'required' => true,
            'example' => 'k1',
            'maxItems' => 21,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '43D12436-B10F-4469-8136-FD1C5D2B2083',
              ),
              'FailedResources' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'FailedResource' => 
                  array (
                    'description' => '失败资源信息。
> - 解绑标签成功时，返回的FailedResources为空。
> - 解绑标签失败或部分失败时，返回的FailedResources会显示失败资源的详细信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '失败资源信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ResourceARN' => 
                        array (
                          'description' => '失败资源ARN。',
                          'type' => 'string',
                          'example' => 'arn:acs:ecs:cn-hangzhou:123456789****:instance/i-xxxxxxxxxx1',
                        ),
                        'Result' => 
                        array (
                          'description' => '错误结果。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Code' => 
                            array (
                              'description' => '错误码。',
                              'type' => 'string',
                              'example' => 'InvalidResourceId.NotFound',
                            ),
                            'Message' => 
                            array (
                              'description' => '错误信息。',
                              'type' => 'string',
                              'example' => 'The specified ResourceIds are not found in our records.',
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
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidResourceARN.Account',
            'errorMessage' => 'The Account specified in the ResourceARN parameter does not match the actual account, specifically: %s.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidResourceARN.FormatError',
            'errorMessage' => 'The format of parameter ResourceARN: %s is not valid, for the correct format, you can refer to the Recommend.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidResourceARN.Region',
            'errorMessage' => 'The Region specified in the ResourceARN parameter does not match the RegionId parameter, specifically: %s.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidParameter.ResourceType',
            'errorMessage' => 'The parameter resource type: %s in ResourceARN is not valid or not support.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidParameter.ServiceCode',
            'errorMessage' => 'The parameter service code: %s in  ResourceARN is not valid or not support.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidParameter.TagKey',
            'errorMessage' => 'The TagKey parameter  is invalid. The following TagKeys are invalid: %s.',
          ),
          6 => 
          array (
            'errorCode' => 'InvalidParameter.TagValue',
            'errorMessage' => 'The TagValue parameter is invalid. The following TagValues are invalid: %s.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Duplicate.TagKey',
            'errorMessage' => 'The Tag.N.Key contains duplicate keys.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.Category',
            'errorMessage' => 'The specified Category is invalid. Valid values are Custom and System.',
          ),
          2 => 
          array (
            'errorCode' => 'MissingParameter.Createby',
            'errorMessage' => 'You must specify Createby.',
          ),
          3 => 
          array (
            'errorCode' => 'MissingParameter.ResourceIds',
            'errorMessage' => 'You must specify ResourceIds.',
          ),
          4 => 
          array (
            'errorCode' => 'NoPermission.Operator',
            'errorMessage' => 'The user is not authorized to operate on the specified resource.',
          ),
          5 => 
          array (
            'errorCode' => 'NoPermission.SystemTag',
            'errorMessage' => 'The user does not have permission to operate the system tag.',
          ),
          6 => 
          array (
            'errorCode' => 'NoPermissionKey.Category',
            'errorMessage' => 'Some keys cannot be modified because the user does not have permission.',
          ),
          7 => 
          array (
            'errorCode' => 'NoPermissionKey.Operator',
            'errorMessage' => 'You are not authorized to operate the tag key.',
          ),
          8 => 
          array (
            'errorCode' => 'NumberExceed.ResourceIds',
            'errorMessage' => 'The maximum number of ResourceIds is exceeded.',
          ),
          9 => 
          array (
            'errorCode' => 'NumberExceed.Tags',
            'errorMessage' => 'The maximum number of Tags is exceeded.',
          ),
          10 => 
          array (
            'errorCode' => 'QuotaExceed.TagsPerResource',
            'errorMessage' => 'The maximum number of tags for each resource is exceeded.',
          ),
          11 => 
          array (
            'errorCode' => 'Missing.ServiceCode',
            'errorMessage' => 'You must specify ServiceCode.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'Missing.TagKey',
            'errorMessage' => 'Tag.N.Value has been specified and you must specify Tag.N.Key.',
          ),
          1 => 
          array (
            'errorCode' => 'MissingParameter.AliUid',
            'errorMessage' => 'You must specify AliUid.',
          ),
          2 => 
          array (
            'errorCode' => 'MissingParameter.Bid',
            'errorMessage' => 'You must specify Bid.',
          ),
          3 => 
          array (
            'errorCode' => 'MissingParameter.TagKey',
            'errorMessage' => 'You must specify TagKey.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"43D12436-B10F-4469-8136-FD1C5D2B2083\\",\\n  \\"FailedResources\\": {\\n    \\"FailedResource\\": [\\n      {\\n        \\"ResourceARN\\": \\"arn:acs:ecs:cn-hangzhou:123456789****:instance/i-xxxxxxxxxx1\\",\\n        \\"Result\\": {\\n          \\"Code\\": \\"InvalidResourceId.NotFound\\",\\n          \\"Message\\": \\"The specified ResourceIds are not found in our records.\\"\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<UntagResourcesResponse>\\r\\n\\t<RequestId>43D12436-B10F-4469-8136-FD1C5D2B2083</RequestId>\\r\\n\\t<FailedResources></FailedResources>\\r\\n</UntagResourcesResponse>\\t\\r\\n","errorExample":""}]',
      'title' => '为云资源统一解绑标签',
      'summary' => '为指定的多个云产品的多个云资源统一解绑标签。',
      'description' => '解绑后，如果该标签没有绑定其他任何资源，系统会在24小时内自动将其删除。

支持标签的云服务，请参见[支持标签的云服务](~~171455~~)。',
      'requestParamsDescription' => ' 关于公共请求参数的详情，请参见[公共参数](~~159973~~)。',
      'responseParamsDescription' => '
',
      'extraInfo' => ' ',
    ),
    'ListTagResources' => 
    array (
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。取值：

- 对于中心化部署的云服务，您需要参照[标签支持的中心化云服务的对应地域](~~2579691~~)填写资源对应的地域ID。
- 对于非中心化部署的云服务，您需要填写资源所属的地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。取值：

- 对于中心化部署的云服务，您需要参照[标签支持的中心化云服务的对应地域](~~2579691~~)填写资源对应的地域ID。
- 对于非中心化部署的云服务，您需要填写资源所属的地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '下一个查询开始的Token。',
            'type' => 'string',
            'required' => false,
            'example' => 'caeba0bbb2be03f84eb48b699f0a****',
          ),
        ),
        3 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页时每页显示的数据行数。

最大值：1000。默认值：50。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '50',
          ),
        ),
        4 => 
        array (
          'name' => 'Tags',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '标签键和标签值，键值对取值范围：1~10。

如果指定多个标签，则会查询同时绑定了该多个标签的资源。

约束如下：

- 标签键取值范围：1~128个字符。
- 标签值取值范围：1~128个字符。
- 区分大小写。
- 同一个资源上的同一个标签键只能对应一个标签值。如果您尝试添加已有标签键，则对应的标签值会更新为新值。',
            'type' => 'string',
            'required' => false,
            'example' => '{"k1":"v1","k2":"v2"}',
          ),
        ),
        5 => 
        array (
          'name' => 'Category',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '标签类型。取值：

- Custom：自定义标签。
- System：系统标签。
- All：全部标签。

默认值：All。',
            'type' => 'string',
            'required' => false,
            'example' => 'Custom',
          ),
        ),
        6 => 
        array (
          'name' => 'ResourceARN',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '资源ARN（Aliyun Resource Name）。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '资源ARN（Aliyun Resource Name）。

N的取值范围：1~50。

资源ARN的格式：`arn:acs:${ProductCode}:${Region}:${Account}:${ResourceType}/${ResourceId}`。各字段含义如下：

- `ProductCode`：云服务code。从[ListSupportResourceTypes](~~2330915~~)返回参数中获取。
- `Region`：资源所属的地域ID。支持使用星号（*）表示当前地域。
- `Account`：资源所属的阿里云账号（主账号）ID。支持使用星号（*）表示当前登录的阿里云账号（主账号）。
- `ResourceType`：资源类型。从[ListSupportResourceTypes](~~2330915~~)返回参数中获取。
- `ResourceId`：资源ID。

> ResourceARN支持传递资源组、操作审计和资源管理的`ProductCode`和`ResourceType`。',
              'type' => 'string',
              'required' => false,
              'example' => 'arn:acs:ecs:cn-hangzhou:123456789****:instance/i-bp15hr53jws84akg****',
            ),
            'required' => false,
            'example' => 'arn:acs:ecs:cn-hangzhou:123456789****:instance/i-bp15hr53jws84akg****',
            'maxItems' => 101,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'NextToken' => 
              array (
                'description' => '根据`NextToken`判断是否具备下一个查询开始的Token。取值：

- 如果`NextToken`为空，即`"NextToken": ""`，表示没有下一个。
- 如果`NextToken`有值，则该值就是下一个查询开始的Token。',
                'type' => 'string',
                'example' => 'caeba0bbb2be03f84eb48b699f0a****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '014738E0-3C7F-47D8-8FB9-469500C6F387',
              ),
              'TagResources' => 
              array (
                'description' => '资源绑定的标签信息。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '资源绑定的标签信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ResourceARN' => 
                    array (
                      'description' => '资源ARN。',
                      'type' => 'string',
                      'example' => 'arn:acs:ecs:cn-hangzhou:123456789****:instance/i-bp15hr53jws84akg****',
                    ),
                    'Tags' => 
                    array (
                      'description' => '标签信息。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '标签信息。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Key' => 
                          array (
                            'description' => '标签键。',
                            'type' => 'string',
                            'example' => 'k1',
                          ),
                          'Value' => 
                          array (
                            'description' => '标签值。',
                            'type' => 'string',
                            'example' => 'v1',
                          ),
                          'Category' => 
                          array (
                            'description' => '标签类型。取值：

- Custom：自定义标签。
- System：系统标签。',
                            'type' => 'string',
                            'example' => 'Custom',
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
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidResourceARN.Account',
            'errorMessage' => 'The Account specified in the ResourceARN parameter does not match the actual account, specifically: %s.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidResourceARN.FormatError',
            'errorMessage' => 'The format of parameter ResourceARN: %s is not valid, for the correct format, you can refer to the Recommend.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidResourceARN.Region',
            'errorMessage' => 'The Region specified in the ResourceARN parameter does not match the RegionId parameter, specifically: %s.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidParameter.TagKey',
            'errorMessage' => 'The TagKey parameter  is invalid. The following TagKeys are invalid: %s.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidParameter.Tags',
            'errorMessage' => 'The Tags parameter cannot be empty, and JSON parsing should adhere to the format of a Map.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Duplicate.TagKey',
            'errorMessage' => 'The Tag.N.Key contains duplicate keys.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.Category',
            'errorMessage' => 'The specified Category is invalid. Valid values are Custom and System.',
          ),
          2 => 
          array (
            'errorCode' => 'MissingParameter.ResourceIds',
            'errorMessage' => 'You must specify ResourceIds.',
          ),
          3 => 
          array (
            'errorCode' => 'NoPermission.Operator',
            'errorMessage' => 'The user is not authorized to operate on the specified resource.',
          ),
          4 => 
          array (
            'errorCode' => 'NoPermission.SystemTag',
            'errorMessage' => 'The user does not have permission to operate the system tag.',
          ),
          5 => 
          array (
            'errorCode' => 'NoPermissionKey.Category',
            'errorMessage' => 'Some keys cannot be modified because the user does not have permission.',
          ),
          6 => 
          array (
            'errorCode' => 'NoPermissionKey.Operator',
            'errorMessage' => 'You are not authorized to operate the tag key.',
          ),
          7 => 
          array (
            'errorCode' => 'NumberExceed.ResourceIds',
            'errorMessage' => 'The maximum number of ResourceIds is exceeded.',
          ),
          8 => 
          array (
            'errorCode' => 'NumberExceed.Tags',
            'errorMessage' => 'The maximum number of Tags is exceeded.',
          ),
          9 => 
          array (
            'errorCode' => 'QuotaExceed.TagsPerResource',
            'errorMessage' => 'The maximum number of tags for each resource is exceeded.',
          ),
          10 => 
          array (
            'errorCode' => 'Invalid.NextToken',
            'errorMessage' => 'The parameter NextToken is invalid.',
          ),
          11 => 
          array (
            'errorCode' => 'InvalidParameter.TagValue',
            'errorMessage' => 'The Tag.N.Value parameter  is invalid.',
          ),
          12 => 
          array (
            'errorCode' => 'InvalidParameter.ResourceType',
            'errorMessage' => 'The ResourceType parameter is invalid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'Missing.TagKey',
            'errorMessage' => 'Tag.N.Value has been specified and you must specify Tag.N.Key.',
          ),
          1 => 
          array (
            'errorCode' => 'MissingParameter.AliUid',
            'errorMessage' => 'You must specify AliUid.',
          ),
          2 => 
          array (
            'errorCode' => 'MissingParameter.Bid',
            'errorMessage' => 'You must specify Bid.',
          ),
          3 => 
          array (
            'errorCode' => 'MissingParameter.RegionId',
            'errorMessage' => 'You must specify RegionId.',
          ),
          4 => 
          array (
            'errorCode' => 'MissingParameter.RemoveNum',
            'errorMessage' => 'You must specify RemoveNum.',
          ),
          5 => 
          array (
            'errorCode' => 'MissingParameter.ResourceIdARN',
            'errorMessage' => 'You must specify ResourceIdARN.',
          ),
          6 => 
          array (
            'errorCode' => 'MissingParameter.TagKey',
            'errorMessage' => 'You must specify TagKey.',
          ),
          7 => 
          array (
            'errorCode' => 'MissingParameter.Tags',
            'errorMessage' => 'You must specify Tags.',
          ),
          8 => 
          array (
            'errorCode' => 'NoMatch.RemoveNum',
            'errorMessage' => 'The specified DataNum does not match the deleted number.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"NextToken\\": \\"caeba0bbb2be03f84eb48b699f0a****\\",\\n  \\"RequestId\\": \\"014738E0-3C7F-47D8-8FB9-469500C6F387\\",\\n  \\"TagResources\\": [\\n    {\\n      \\"ResourceARN\\": \\"arn:acs:ecs:cn-hangzhou:123456789****:instance/i-bp15hr53jws84akg****\\",\\n      \\"Tags\\": [\\n        {\\n          \\"Key\\": \\"k1\\",\\n          \\"Value\\": \\"v1\\",\\n          \\"Category\\": \\"Custom\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<ListTagResourcesResponse>\\r\\n\\t<RequestId>014738E0-3C7F-47D8-8FB9-469500C6F387</RequestId>\\r\\n\\t<NextToken></NextToken>\\r\\n\\t<TagResources>\\r\\n\\t\\t<ResourceARN>arn:acs:ecs:cn-hangzhou:123456789****:instance/i-bp15hr53jws84akg****</ResourceARN>\\r\\n\\t\\t<Tags>\\r\\n\\t\\t\\t<Category>Custom</Category>\\r\\n\\t\\t\\t<Value>v2</Value>\\r\\n\\t\\t\\t<Key>k2</Key>\\r\\n\\t\\t</Tags>\\r\\n\\t\\t<Tags>\\r\\n\\t\\t\\t<Category>Custom</Category>\\r\\n\\t\\t\\t<Value>v1</Value>\\r\\n\\t\\t\\t<Key>k1</Key>\\r\\n\\t\\t</Tags>\\r\\n\\t</TagResources>\\r\\n\\t<TagResources>\\r\\n\\t\\t<ResourceARN>arn:acs:ecs:cn-hangzhou:123456789****:disk/d-bp16cat8zekjocv4z2fm</ResourceARN>\\r\\n\\t\\t<Tags>\\r\\n\\t\\t\\t<Category>Custom</Category>\\r\\n\\t\\t\\t<Value>v1</Value>\\r\\n\\t\\t\\t<Key>k1</Key>\\r\\n\\t\\t</Tags>\\r\\n\\t\\t<Tags>\\r\\n\\t\\t\\t<Category>Custom</Category>\\r\\n\\t\\t\\t<Value>v2</Value>\\r\\n\\t\\t\\t<Key>k2</Key>\\r\\n\\t\\t</Tags>\\r\\n\\t</TagResources>\\r\\n\\t<TagResources>\\r\\n\\t\\t<ResourceARN>arn:acs:vpc:cn-hangzhou:123456789****:vpc/vpc-bp19dd90tkt6tz7wu****</ResourceARN>\\r\\n\\t\\t<Tags>\\r\\n\\t\\t\\t<Category>Custom</Category>\\r\\n\\t\\t\\t<Value>v2</Value>\\r\\n\\t\\t\\t<Key>k2</Key>\\r\\n\\t\\t</Tags>\\r\\n\\t\\t<Tags>\\r\\n\\t\\t\\t<Category>Custom</Category>\\r\\n\\t\\t\\t<Value>v1</Value>\\r\\n\\t\\t\\t<Key>k1</Key>\\r\\n\\t\\t</Tags>\\r\\n\\t</TagResources>\\r\\n</ListTagResourcesResponse>\\t\\r\\n","errorExample":""}]',
      'title' => '查询资源标签列表',
      'summary' => '查询多个云产品的多个云资源绑定的标签列表。',
      'description' => '支持标签的云服务，请参见[支持标签的云服务](~~171455~~)。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListResourcesByTag' => 
    array (
      'summary' => '基于标签查询资源。',
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。

关于地域ID的详情，请参见[服务接入点](~~2330902~~)。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-shenzhen',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。

关于地域ID的详情，请参见[服务接入点](~~2330902~~)。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-shenzhen',
          ),
        ),
        2 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '下一个查询开始的Token。',
            'type' => 'string',
            'required' => false,
            'example' => 'caeba0bbb2be03f84eb48b699f0a****',
          ),
        ),
        3 => 
        array (
          'name' => 'MaxResult',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页时每页显示的数据条数。

默认值：50。最大值：1000。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '50',
          ),
        ),
        4 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源类型，用于查询的过滤条件。取值：
* FuzzyType=EQUAL时，支持的资源类型请调用[ListSupportResourceTypes](~~2330915~~)获取。

* FuzzyType=NOT时，支持的资源类型请参见下文**支持逻辑非查询的资源类型**。',
            'type' => 'string',
            'required' => true,
            'example' => 'ALIYUN::VPC::VPC',
          ),
        ),
        5 => 
        array (
          'name' => 'FuzzyType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询操作。取值：

- EQUAL（默认值）：精确查询绑定了指定标签的资源。
- NOT：精确查询未绑定指定标签的资源。',
            'type' => 'string',
            'required' => false,
            'example' => 'EQUAL',
          ),
        ),
        6 => 
        array (
          'name' => 'TagFilter.Value',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '标签值，用于查询的过滤条件。

最多支持128个字符，不能包含`http://`或者`https://`。',
            'type' => 'string',
            'required' => false,
            'example' => 'v1',
          ),
        ),
        7 => 
        array (
          'name' => 'TagFilter.Key',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '标签键，用于查询的过滤条件。

最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
            'type' => 'string',
            'required' => true,
            'example' => 'k1',
          ),
        ),
        8 => 
        array (
          'name' => 'IncludeAllTags',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否返回资源上的标签信息。取值：

- False（默认值）：不返回资源上的标签信息。
- True ：返回资源上所有标签信息。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'False',
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '7D61FF74-61C2-5768-B01F-05FC97F24F35',
              ),
              'NextToken' => 
              array (
                'title' => '表示当前调用返回读取到的位置，空或者空字符串代表数据已经读取完毕',
                'description' => '根据`NextToken`判断是否具备下一个查询开始的Token。取值：

- 如果`NextToken`为空，即`"NextToken": ""`，表示没有下一个。
- 如果`NextToken`有值，则该值就是下一个查询开始的Token。',
                'type' => 'string',
                'required' => true,
                'example' => 'caeba0bbb2be03f84eb48b699f0a****',
              ),
              'Resources' => 
              array (
                'description' => '资源列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '资源列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ResourceId' => 
                    array (
                      'description' => '资源ID。',
                      'type' => 'string',
                      'example' => 'vpc-wz9pifyuw26esxd05****',
                    ),
                    'Tags' => 
                    array (
                      'description' => '标签信息。

当`IncludeAllTags`为`True`时，返回该参数。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '标签信息。

当`IncludeAllTags`为`True`时，返回该参数。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Key' => 
                          array (
                            'description' => '标签键。',
                            'type' => 'string',
                            'example' => 'k1',
                          ),
                          'Value' => 
                          array (
                            'description' => '标签值。',
                            'type' => 'string',
                            'example' => 'v1',
                          ),
                          'Category' => 
                          array (
                            'description' => '资源标签类型。取值：

- custom：自定义标签。
- system：系统标签。',
                            'type' => 'string',
                            'example' => 'custom',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"7D61FF74-61C2-5768-B01F-05FC97F24F35\\",\\n  \\"NextToken\\": \\"caeba0bbb2be03f84eb48b699f0a****\\",\\n  \\"Resources\\": [\\n    {\\n      \\"ResourceId\\": \\"vpc-wz9pifyuw26esxd05****\\",\\n      \\"Tags\\": [\\n        {\\n          \\"Key\\": \\"k1\\",\\n          \\"Value\\": \\"v1\\",\\n          \\"Category\\": \\"custom\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListResourcesByTagResponse>\\n    <RequestId>7D61FF74-61C2-5768-B01F-05FC97F24F35</RequestId>\\n    <NextToken/>\\n    <Resources>\\n        <ResourceId>vpc-wz9pifyuw26esxd05****</ResourceId>\\n    </Resources>\\n    <Resources>\\n        <ResourceId>vpc-wz9qpfj5nej4ofnzu****</ResourceId>\\n    </Resources>\\n</ListResourcesByTagResponse>","errorExample":""}]',
      'title' => '基于标签查询资源',
      'description' => '### 使用说明
本文将提供一个示例，在华南1（深圳）地域，查询标签键`k1`绑定的VPC实例。返回结果显示，该标签键绑定了2个VPC实例。',
      'requestParamsDescription' => '**支持逻辑非查询的资源类型：**

* ALIYUN::ADB::CLUSTER
* ALIYUN::ALB::ACL
* ALIYUN::ALB::LOADBALANCER
* ALIYUN::ALB::SECURITYPOLICY
* ALIYUN::ALB::SERVERGROUP
* ALIYUN::ALIDNS::DOMAIN
* ALIYUN::BASTIONHOST::INSTANCE
* ALIYUN::BPSTUDIO::APPLICATION
* ALIYUN::BPSTUDIO::TEMPLATE
* ALIYUN::CAS::INSTANCE
* ALIYUN::CDN::DOMAIN
* ALIYUN::CDS::CLUSTER
* ALIYUN::CEN::BANDWIDTHPACKAGE
* ALIYUN::CEN::CEN
* ALIYUN::CS::CLUSTER
* ALIYUN::DBAUDIT::INSTANCE
* ALIYUN::DCDN::DOMAIN
* ALIYUN::DDOSBGP::INSTANCE
* ALIYUN::DDOSCOO::INSTANCE
* ALIYUN::DDS::INSTANCE
* ALIYUN::DRDS::INSTANCE
* ALIYUN::ECS::DDH
* ALIYUN::ECS::DDHCLUSTER
* ALIYUN::ECS::DISK
* ALIYUN::ECS::ENI
* ALIYUN::ECS::INSTANCE
* ALIYUN::ECS::KEYPAIR
* ALIYUN::ECS::LAUNCHTEMPLATE
* ALIYUN::ECS::SECURITYGROUP
* ALIYUN::ECS::SNAPSHOT
* ALIYUN::EDAS::APPLICATION
* ALIYUN::EDAS::CLUSTER
* ALIYUN::ELASTICSEARCH::INSTANCE
* ALIYUN::EMR::CLUSTER
* ALIYUN::EMR::FLOWPROJECT
* ALIYUN::HBR::CLIENT
* ALIYUN::HBR::HANAINSTANCE
* ALIYUN::HBR::VAULT
* ALIYUN::KVSTORE::INSTANCE
* ALIYUN::MULTIMOD::CLUSTER
* ALIYUN::OCEANBASE::INSTANCE
* ALIYUN::OOS::EXECUTION
* ALIYUN::OOS::PARAMETER
* ALIYUN::OOS::SECRETPARAMETER
* ALIYUN::OOS::STATECONFIGURATION
* ALIYUN::OOS::TEMPLATE
* ALIYUN::OSS::BUCKET
* ALIYUN::OUTBOUNDBOT::INSTANCE
* ALIYUN::POLARDB::CLUSTER
* ALIYUN::PVTZ::ZONE
* ALIYUN::RDS::INSTANCE
* ALIYUN::VPC::COMMONBANDWIDTHPACKAGE
* ALIYUN::VPC::EIP
* ALIYUN::VPC::NATGATEWAY
* ALIYUN::VPC::VPC',
    ),
    'ListTagKeys' => 
    array (
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。

关于地域ID的详情，请参见[服务接入点](~~2330902~~)。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。

关于地域ID的详情，请参见[服务接入点](~~2330902~~)。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '下一个查询开始的Token。',
            'type' => 'string',
            'required' => false,
            'example' => 'caeba0bbb2be03f84eb48b699f0a****',
          ),
        ),
        3 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页时每页显示的标签键个数。

最大值：1000。默认值：50。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '50',
          ),
        ),
        4 => 
        array (
          'name' => 'Category',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源标签类型，用于查询的过滤条件。取值：

- all（默认值）：全部标签。
- custom：自定义标签。
- system：系统标签。

> 取值不区分大小写。
',
            'type' => 'string',
            'required' => false,
            'example' => 'all',
          ),
        ),
        5 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源类型，用于查询的过滤条件。

格式：`ALIYUN::${ProductCode}::${ResourceType}`，全部大写。

- `ProductCode`：云服务code。从[ListSupportResourceTypes](~~2330915~~)返回参数中获取。
- `ResourceType`：资源类型。从[ListSupportResourceTypes](~~2330915~~)返回参数中获取。',
            'type' => 'string',
            'required' => false,
            'example' => 'ALIYUN::ECS::INSTANCE',
          ),
        ),
        6 => 
        array (
          'name' => 'QueryType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '标签类型，用于查询的过滤条件。取值：

- ResourceTag（默认值）：资源标签。包括自定义标签和系统标签。
- MetaTag：预置标签。

> 取值不区分大小写。',
            'type' => 'string',
            'required' => false,
            'example' => 'ResourceTag',
          ),
        ),
        7 => 
        array (
          'name' => 'FuzzyType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模糊查询类型。取值：

- EQUAL（默认值）：精确查询。
- PREFIX：根据前缀进行模糊查询。

> 该参数仅支持华南1（深圳）和中国（香港）地域。',
            'type' => 'string',
            'required' => false,
            'example' => 'EQUAL',
          ),
        ),
        8 => 
        array (
          'name' => 'TagFilter.Key',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模糊查询的标签键。

该参数与`FuzzyType`配合使用。
> 该参数仅支持华南1（深圳）和中国（香港）地域。
',
            'type' => 'string',
            'required' => false,
            'example' => 'team',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'NextToken' => 
              array (
                'description' => '根据`NextToken`判断是否具备下一个查询开始的Token。取值：

- 如果`NextToken`为空，即`"NextToken": ""`，表示没有下一个。
- 如果`NextToken`有值，则该值就是下一个查询开始的Token。',
                'type' => 'string',
                'example' => 'caeba0bbb2be03f84eb48b699f0a****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'DC09A6AA-2713-4E10-A2E9-E6C5C43A8842',
              ),
              'Keys' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Key' => 
                  array (
                    'description' => '标签键信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '标签键信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Key' => 
                        array (
                          'description' => '标签键。',
                          'type' => 'string',
                          'example' => 'team',
                        ),
                        'Category' => 
                        array (
                          'description' => '资源标签类型。取值：

- custom：自定义标签。
- system：系统标签。',
                          'type' => 'string',
                          'example' => 'custom',
                        ),
                        'Description' => 
                        array (
                          'description' => '标签键描述。',
                          'type' => 'string',
                          'example' => '业务团队',
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
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'FuzzyQuery.NotSupport',
            'errorMessage' => 'The fuzzy query is not supported.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Invalid.NextToken',
            'errorMessage' => 'The parameter NextToken is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'NoPermission.Operator',
            'errorMessage' => 'The user is not authorized to operate on the specified resource.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter.Category',
            'errorMessage' => 'The specified Category is invalid. Valid values are Custom and System.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidParameter.ResourceType',
            'errorMessage' => 'The ResourceType parameter is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"NextToken\\": \\"caeba0bbb2be03f84eb48b699f0a****\\",\\n  \\"RequestId\\": \\"DC09A6AA-2713-4E10-A2E9-E6C5C43A8842\\",\\n  \\"Keys\\": {\\n    \\"Key\\": [\\n      {\\n        \\"Key\\": \\"team\\",\\n        \\"Category\\": \\"custom\\",\\n        \\"Description\\": \\"业务团队\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<ListTagKeysResponse>\\r\\n\\t<NextToken></NextToken>\\r\\n\\t<RequestId>DC09A6AA-2713-4E10-A2E9-E6C5C43A8842</RequestId>\\r\\n\\t<Keys>\\r\\n\\t\\t<Key>\\r\\n\\t\\t\\t<Category>custom</Category>\\r\\n\\t\\t\\t<Key>team</Key>\\r\\n\\t\\t</Key>\\r\\n\\t\\t<Key>\\r\\n\\t\\t\\t<Category>custom</Category>\\r\\n\\t\\t\\t<Key>k1</Key>\\r\\n\\t\\t</Key>\\r\\n\\t\\t<Key>\\r\\n\\t\\t\\t<Category>custom</Category>\\r\\n\\t\\t\\t<Key>k2</Key>\\r\\n\\t\\t</Key>\\r\\n\\t</Keys>\\r\\n</ListTagKeysResponse>\\t\\r\\n","errorExample":""}]',
      'title' => '查询标签键列表',
      'summary' => '查询标签键列表。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListTagValues' => 
    array (
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。

关于地域ID的详情，请参见[服务接入点](~~2330902~~)。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。

关于地域ID的详情，请参见[服务接入点](~~2330902~~)。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'Key',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '标签键，用于查询的过滤条件。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'k1',
          ),
        ),
        3 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '下一个查询开始的Token。',
            'type' => 'string',
            'required' => false,
            'example' => 'caeba0bbb2be03f84eb48b699f0a****',
          ),
        ),
        4 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页时每页显示的标签值个数。

最大值：1000。默认值：50。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '50',
          ),
        ),
        5 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源类型，用于查询的过滤条件。

格式：`ALIYUN::${ProductCode}::${ResourceType}`，全部大写。

- `ProductCode`：云服务code。从[ListSupportResourceTypes](~~2330915~~)返回参数中获取。
- `ResourceType`：资源类型。从[ListSupportResourceTypes](~~2330915~~)返回参数中获取。',
            'type' => 'string',
            'required' => false,
            'example' => 'ALIYUN::ECS::INSTANCE',
          ),
        ),
        6 => 
        array (
          'name' => 'QueryType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '标签类型，用于查询的过滤条件。取值：

- ResourceTag（默认值）：资源标签。包括自定义标签和系统标签。
- MetaTag：预置标签。

> 取值不区分大小写。',
            'type' => 'string',
            'required' => false,
            'example' => 'ResourceTag',
          ),
        ),
        7 => 
        array (
          'name' => 'FuzzyType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模糊查询类型。取值：

- EQUAL（默认值）：精确查询。
- PREFIX：根据前缀进行模糊查询。

> 该参数仅支持华南1（深圳）和中国（香港）地域。',
            'type' => 'string',
            'required' => false,
            'example' => 'EQUAL',
          ),
        ),
        8 => 
        array (
          'name' => 'TagFilter.Value',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模糊查询的标签值。

该参数与`FuzzyType`配合使用。

> 该参数仅支持华南1（深圳）和中国（香港）地域。',
            'type' => 'string',
            'required' => false,
            'example' => 'v1',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'NextToken' => 
              array (
                'description' => '根据`NextToken`判断是否具备下一个查询开始的Token。取值：

- 如果`NextToken`为空，即`"NextToken": ""`，表示没有下一个。
- 如果`NextToken`有值，则该值就是下一个查询开始的Token。',
                'type' => 'string',
                'example' => 'caeba0bbb2be03f84eb48b699f0a****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '8989CA7E-D2E0-4B6D-8282-311106E80150',
              ),
              'Values' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Value' => 
                  array (
                    'description' => '标签值列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '标签值信息。',
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
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'FuzzyQuery.NotSupport',
            'errorMessage' => 'The fuzzy query is not supported.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Invalid.NextToken',
            'errorMessage' => 'The parameter NextToken is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'NoPermission.Operator',
            'errorMessage' => 'The user is not authorized to operate on the specified resource.',
          ),
          2 => 
          array (
            'errorCode' => 'NoPermissionKey.Operator',
            'errorMessage' => 'You are not authorized to operate the tag key.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidParameter.ResourceType',
            'errorMessage' => 'The ResourceType parameter is invalid.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidParameter.TagKey',
            'errorMessage' => 'The Tag.N.Key parameter  is invalid.',
          ),
          5 => 
          array (
            'errorCode' => 'MetaTagKeyNotFound',
            'errorMessage' => 'The meta tag key is not found.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'Missing.TagKey',
            'errorMessage' => 'Tag.N.Value has been specified and you must specify Tag.N.Key.',
          ),
          1 => 
          array (
            'errorCode' => 'MissingParameter.TagKey',
            'errorMessage' => 'You must specify TagKey.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"NextToken\\": \\"caeba0bbb2be03f84eb48b699f0a****\\",\\n  \\"RequestId\\": \\"8989CA7E-D2E0-4B6D-8282-311106E80150\\",\\n  \\"Values\\": {\\n    \\"Value\\": [\\n      \\"v1\\"\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<ListTagValuesResponse>\\r\\n\\t<NextToken></NextToken>\\r\\n\\t<RequestId>8989CA7E-D2E0-4B6D-8282-311106E80150</RequestId>\\r\\n\\t<Values>\\r\\n\\t\\t<Value>v1</Value>\\r\\n\\t</Values>\\r\\n</ListTagValuesResponse>\\t\\r\\n","errorExample":""}]',
      'title' => '查询指定标签键对应的标签值',
      'summary' => '查询指定标签键对应的标签值。',
      'requestParamsDescription' => ' 关于公共请求参数的详情，请参见[公共参数](~~159973~~)。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateTags' => 
    array (
      'summary' => '创建预置标签。',
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。

> 仅支持`cn-hangzhou`地域。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'TagKeyValueParamList',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '标签键值参数列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签键。

最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。

N的取值范围：1~10。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '标签键。

最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。

N的取值范围：1~10。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'Environment',
                ),
                'TagValueParamList' => 
                array (
                  'description' => '标签值参数列表。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '标签值。

最多支持128个字符，不能包含`http://`或者`https://`。

N的取值范围：1~10。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => '标签值。

最多支持128个字符，不能包含`http://`或者`https://`。

N的取值范围：1~10。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                      ),
                      'Description' => 
                      array (
                        'description' => '标签值描述。

N的取值范围：1~10。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '测试环境',
                      ),
                    ),
                    'required' => false,
                  ),
                  'required' => false,
                  'maxItems' => 10,
                ),
                'Description' => 
                array (
                  'description' => '标签键描述。

N的取值范围：1~10。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '业务环境',
                ),
              ),
              'required' => false,
            ),
            'required' => true,
            'maxItems' => 10,
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '94E16BB6-3FB6-1297-B5B2-ED2250F437CD',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'WrongEndpoint',
            'errorMessage' => 'Only the central endpoint supports the create and delete operation of meta tag.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.Key',
            'errorMessage' => 'The Key is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter.Value',
            'errorMessage' => 'The Value is invalid.',
          ),
          3 => 
          array (
            'errorCode' => 'NoPermission.Operator',
            'errorMessage' => 'The user is not authorized to operate on the specified resource.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'MissingParameter.TagKeyValueParamList',
            'errorMessage' => 'The parameter TagKeyValueParamList must not be null.',
          ),
          1 => 
          array (
            'errorCode' => 'MissingParameter.Key',
            'errorMessage' => 'The Key must not be empty.',
          ),
          2 => 
          array (
            'errorCode' => 'MissingParameter.Value',
            'errorMessage' => 'The Value must not be empty.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"94E16BB6-3FB6-1297-B5B2-ED2250F437CD\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<CreateTagsResponse>\\r\\n\\t<RequestId>94E16BB6-3FB6-1297-B5B2-ED2250F437CD</RequestId>\\r\\n</CreateTagsResponse>","errorExample":""}]',
      'title' => '创建预置标签',
      'description' => '### 使用说明
预置标签是您预先创建并作用于所有地域的一种标签，非常适合在标签规划阶段使用。您可以在标签规划阶段创建预置标签，然后在标签实施阶段绑定具体的云资源。创建预置标签时，您可以仅设置标签键，而不设置标签值，标签值可以在后续设置。

本文将提供一个示例，创建一个标签键为`Environment`的预置标签，用来标识业务环境。',
      'requestParamsDescription' => ' 关于公共请求参数的详情，请参见[公共参数](~~159973~~)。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteTag' => 
    array (
      'summary' => '删除预置标签。',
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。

> 仅支持`cn-hangzhou`地域。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'Key',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '标签键。

当标签键下没有任何标签值时，可以仅设置`Key`，删除该标签键。否则，请同时设置`Key`和`Value`，删除指定的预置标签。
',
            'type' => 'string',
            'required' => true,
            'example' => 'Environment',
          ),
        ),
        2 => 
        array (
          'name' => 'Value',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '标签值。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '6E27F22C-EDA3-132E-A53F-77DE3BC2343D',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'MetaTagKeyHasValue',
            'errorMessage' => 'The specified TagKey already bind tag value',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'WrongEndpoint',
            'errorMessage' => 'Only the central endpoint supports the create and delete operation of meta tag.',
          ),
          1 => 
          array (
            'errorCode' => 'NoPermission.Operator',
            'errorMessage' => 'The user is not authorized to operate on the specified resource.',
          ),
          2 => 
          array (
            'errorCode' => 'MetaTagKeyNotFound',
            'errorMessage' => 'The meta tag key is not found.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'MissingParameter.Key',
            'errorMessage' => 'The Key must not be empty.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6E27F22C-EDA3-132E-A53F-77DE3BC2343D\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DeleteTagResponse>\\r\\n\\t<RequestId>6E27F22C-EDA3-132E-A53F-77DE3BC2343D</RequestId>\\r\\n</DeleteTagResponse>","errorExample":""}]',
      'title' => '删除预置标签',
      'description' => '本文将提供一个示例，删除标签键为`Environment`，标签值为`test`的预置标签。',
      'requestParamsDescription' => ' 关于公共请求参数的详情，请参见[公共参数](~~159973~~)。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'OpenCreatedBy' => 
    array (
      'summary' => '启用创建者标签。',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。取值：cn-shanghai。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-shanghai',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '74F03511-FDFA-54AF-96A4-71575B41E74D',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'CreatedByAlreadyOpen',
            'errorMessage' => 'CreatedBy is already activated.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'PermissionDenied',
            'errorMessage' => 'Only a primary account can perform the operation.',
          ),
          1 => 
          array (
            'errorCode' => 'NoPermission.Operator',
            'errorMessage' => 'The user is not authorized to operate on the specified resource.',
          ),
          2 => 
          array (
            'errorCode' => 'EntityNotExist.Role',
            'errorMessage' => 'The role not exists.',
          ),
          3 => 
          array (
            'errorCode' => 'NoPermission',
            'errorMessage' => 'AssumedRoleUser has no permission.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"74F03511-FDFA-54AF-96A4-71575B41E74D\\"\\n}","errorExample":""},{"type":"xml","example":"<OpenCreatedByResponse>\\n    <RequestId>74F03511-FDFA-54AF-96A4-71575B41E74D</RequestId>\\n</OpenCreatedByResponse>","errorExample":""}]',
      'title' => '启用创建者标签',
      'description' => '启用创建者标签，不仅可以帮助您低成本进行费用、账单分析，实现企业云上成本管理；还可以帮助您进行创建者信息溯源，提升资源管理便利性。创建者标签`acs:tag:createdby`是阿里云自动生成的系统标签。',
    ),
    'CheckCreatedByEnabled' => 
    array (
      'summary' => '校验创建者标签启用状态。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。

取值：cn-shanghai。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-shanghai',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '682DD9E1-F530-5D14-A839-A6787FA82B74',
              ),
              'OpenStatus' => 
              array (
                'description' => '启用状态，取值：
- true：已启用。
- false：未开启。',
                'type' => 'boolean',
                'example' => 'false',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'Throttling',
            'errorMessage' => 'You have exceeded the maximum traffic. To increase the limit, submit a ticket.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoPermission.Operator',
            'errorMessage' => 'The user is not authorized to operate on the specified resource.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"682DD9E1-F530-5D14-A839-A6787FA82B74\\",\\n  \\"OpenStatus\\": false\\n}","type":"json"}]',
      'title' => '校验创建者标签启用状态',
    ),
    'CloseCreatedBy' => 
    array (
      'summary' => '禁用创建者标签。',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。

取值：cn-shanghai。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-shanghai',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'AECFE0F2-CEC3-5D16-BE4C-E2F95083D063',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'PermissionDenied',
            'errorMessage' => 'Only a primary account can perform the operation.',
          ),
          1 => 
          array (
            'errorCode' => 'NoPermission.Operator',
            'errorMessage' => 'The user is not authorized to operate on the specified resource.',
          ),
          2 => 
          array (
            'errorCode' => 'EntityNotExist.Role',
            'errorMessage' => 'The role not exists.',
          ),
          3 => 
          array (
            'errorCode' => 'NoPermission',
            'errorMessage' => 'AssumedRoleUser has no permission.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"AECFE0F2-CEC3-5D16-BE4C-E2F95083D063\\"\\n}","type":"json"}]',
      'title' => '禁用创建者标签',
    ),
    'ListSupportResourceTypes' => 
    array (
      'summary' => '查询标签支持的资源类型和标签能力项。',
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
      'operationType' => 'read',
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。

关于地域ID的详情，请参见[服务接入点](~~2330902~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
            'default' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'MaxResult',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页时每页显示的数据行数。

最大值：1000。默认值：50。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '50',
          ),
        ),
        2 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '下一个查询开始的Token。',
            'type' => 'string',
            'required' => false,
            'example' => 'AAAAAYws9fJ0Ur4MGm/5OkDoW/Y3wDNwUdssyKODK+myOlBL',
          ),
        ),
        3 => 
        array (
          'name' => 'ProductCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云服务代码。用于查询的过滤条件。

该参数从返回结果中获取。',
            'type' => 'string',
            'required' => false,
            'example' => 'ecs',
          ),
        ),
        4 => 
        array (
          'name' => 'ResourceTye',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源类型。用于查询的过滤条件。

该参数从返回结果中获取。',
            'type' => 'string',
            'required' => false,
            'example' => 'instance',
          ),
        ),
        5 => 
        array (
          'name' => 'ShowItems',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否显示标签能力项。取值：

- true：显示。
- false（默认值）：不显示。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        6 => 
        array (
          'name' => 'SupportCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '标签能力项代码。用于查询的过滤条件。

详情请参见下文的**标签能力项**。',
            'type' => 'string',
            'required' => false,
            'example' => 'TAG_CONSOLE_SUPPORT',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'ListResponse<PolicyModel>',
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'SupportResourceTypes' => 
              array (
                'description' => '支持的资源类型列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '支持的资源类型列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ProductCode' => 
                    array (
                      'description' => '云服务代码。',
                      'type' => 'string',
                      'example' => 'ecs',
                    ),
                    'ResourceType' => 
                    array (
                      'description' => '资源类型。',
                      'type' => 'string',
                      'example' => 'instance',
                    ),
                    'SupportItems' => 
                    array (
                      'description' => '支持的标签能力项列表。

> 当`ShowItems`为`true`时，才显示该参数。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '支持的标签能力项列表。

> 当`ShowItems`为`true`时，才显示该参数。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'SupportCode' => 
                          array (
                            'description' => '标签能力项代码。',
                            'type' => 'string',
                            'example' => 'TAG_CONSOLE_SUPPORT',
                          ),
                          'Support' => 
                          array (
                            'description' => '是否支持该标签能力项。取值：

- true：支持。
- false：不支持。',
                            'type' => 'boolean',
                            'example' => 'true',
                          ),
                          'SupportDetails' => 
                          array (
                            'description' => '该能力项的支持详情列表。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '该能力项的支持详情列表。',
                              'type' => 'object',
                              'additionalProperties' => 
                              array (
                                'type' => 'string',
                                'description' => '支持详情代码，详情请参见下文的**支持详情代码说明**。',
                                'example' => 'ApiName',
                              ),
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'ABC71772-F3A1-59CA-B811-4A5B0E0B72F8',
              ),
              'NextToken' => 
              array (
                'description' => '根据`NextToken`判断是否具备下一个查询开始的Token。取值：

- 如果`NextToken`为空，表示没有下一个。
- 如果`NextToken`有值，则该值就是下一个查询开始的Token。',
                'type' => 'string',
                'example' => 'AAAAAYws9fJ0Ur4MGm',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"SupportResourceTypes\\": [\\n    {\\n      \\"ProductCode\\": \\"ecs\\",\\n      \\"ResourceType\\": \\"instance\\",\\n      \\"SupportItems\\": [\\n        {\\n          \\"SupportCode\\": \\"TAG_CONSOLE_SUPPORT\\",\\n          \\"Support\\": true,\\n          \\"SupportDetails\\": [\\n            {\\n              \\"key\\": \\"ApiName\\"\\n            }\\n          ]\\n        }\\n      ]\\n    }\\n  ],\\n  \\"RequestId\\": \\"ABC71772-F3A1-59CA-B811-4A5B0E0B72F8\\",\\n  \\"NextToken\\": \\"AAAAAYws9fJ0Ur4MGm\\"\\n}","errorExample":""},{"type":"xml","example":"<ListSupportResourceTypesResponse>\\n    <RequestId>ABC71772-F3A1-59CA-B811-4A5B0E0B72F8</RequestId>\\n    <NextToken>AAAAAYws9fJ0Ur4MGm/5OkDoW/Y3wDNwUdssyKODK+myOlBL</NextToken>\\n    <SupportResourceTypes>\\n        <ProductCode>ecs</ProductCode>\\n        <ResourceType>instance</ResourceType>\\n    </SupportResourceTypes>\\n    <SupportResourceTypes>\\n        <ProductCode>ros</ProductCode>\\n        <ResourceType>template</ResourceType>\\n    </SupportResourceTypes>\\n    <SupportResourceTypes>\\n        <ProductCode>kvstore</ProductCode>\\n        <ResourceType>instance</ResourceType>\\n    </SupportResourceTypes>\\n    <SupportResourceTypes>\\n        <ProductCode>alikafka</ProductCode>\\n        <ResourceType>consumergroup</ResourceType>\\n    </SupportResourceTypes>\\n    <SupportResourceTypes>\\n        <ProductCode>ddoscoo</ProductCode>\\n        <ResourceType>instance</ResourceType>\\n    </SupportResourceTypes>\\n    <SupportResourceTypes>\\n        <ProductCode>polardb</ProductCode>\\n        <ResourceType>cluster</ResourceType>\\n    </SupportResourceTypes>\\n    <SupportResourceTypes>\\n        <ProductCode>vod</ProductCode>\\n        <ResourceType>domain</ResourceType>\\n    </SupportResourceTypes>\\n    <SupportResourceTypes>\\n        <ProductCode>multimod</ProductCode>\\n        <ResourceType>cluster</ResourceType>\\n    </SupportResourceTypes>\\n    <SupportResourceTypes>\\n        <ProductCode>cas</ProductCode>\\n        <ResourceType>instance</ResourceType>\\n    </SupportResourceTypes>\\n    <SupportResourceTypes>\\n        <ProductCode>sae</ProductCode>\\n        <ResourceType>application</ResourceType>\\n    </SupportResourceTypes>\\n    <SupportResourceTypes>\\n        <ProductCode>hitsdb</ProductCode>\\n        <ResourceType>Instance</ResourceType>\\n    </SupportResourceTypes>\\n    <SupportResourceTypes>\\n        <ProductCode>cloudphone</ProductCode>\\n        <ResourceType>Instance</ResourceType>\\n    </SupportResourceTypes>\\n    <SupportResourceTypes>\\n        <ProductCode>bastionhost</ProductCode>\\n        <ResourceType>instance</ResourceType>\\n    </SupportResourceTypes>\\n    <SupportResourceTypes>\\n        <ProductCode>dds</ProductCode>\\n        <ResourceType>instance</ResourceType>\\n    </SupportResourceTypes>\\n    <SupportResourceTypes>\\n        <ProductCode>adb</ProductCode>\\n        <ResourceType>cluster</ResourceType>\\n    </SupportResourceTypes>\\n    <SupportResourceTypes>\\n        <ProductCode>baas</ProductCode>\\n        <ResourceType>organization</ResourceType>\\n    </SupportResourceTypes>\\n    <SupportResourceTypes>\\n        <ProductCode>nas</ProductCode>\\n        <ResourceType>filesystem</ResourceType>\\n    </SupportResourceTypes>\\n    <SupportResourceTypes>\\n        <ProductCode>scblinkonecs</ProductCode>\\n        <ResourceType>cluster</ResourceType>\\n    </SupportResourceTypes>\\n    <SupportResourceTypes>\\n        <ProductCode>mq</ProductCode>\\n        <ResourceType>instance</ResourceType>\\n    </SupportResourceTypes>\\n    <SupportResourceTypes>\\n        <ProductCode>slb</ProductCode>\\n        <ResourceType>certificate</ResourceType>\\n    </SupportResourceTypes>\\n    <SupportResourceTypes>\\n        <ProductCode>polardbx</ProductCode>\\n        <ResourceType>PolarDBXInstance</ResourceType>\\n    </SupportResourceTypes>\\n    <SupportResourceTypes>\\n        <ProductCode>avds</ProductCode>\\n        <ResourceType>assets</ResourceType>\\n    </SupportResourceTypes>\\n    <SupportResourceTypes>\\n        <ProductCode>dbaudit</ProductCode>\\n        <ResourceType>instance</ResourceType>\\n    </SupportResourceTypes>\\n    <SupportResourceTypes>\\n        <ProductCode>cdn</ProductCode>\\n        <ResourceType>domain</ResourceType>\\n    </SupportResourceTypes>\\n    <SupportResourceTypes>\\n        <ProductCode>live</ProductCode>\\n        <ResourceType>domain</ResourceType>\\n    </SupportResourceTypes>\\n    <SupportResourceTypes>\\n        <ProductCode>alidns</ProductCode>\\n        <ResourceType>domain</ResourceType>\\n    </SupportResourceTypes>\\n    <SupportResourceTypes>\\n        <ProductCode>dts</ProductCode>\\n        <ResourceType>instance</ResourceType>\\n    </SupportResourceTypes>\\n    <SupportResourceTypes>\\n        <ProductCode>vpc</ProductCode>\\n        <ResourceType>natgateway</ResourceType>\\n    </SupportResourceTypes>\\n    <SupportResourceTypes>\\n        <ProductCode>elasticsearch</ProductCode>\\n        <ResourceType>instance</ResourceType>\\n    </SupportResourceTypes>\\n    <SupportResourceTypes>\\n        <ProductCode>alb</ProductCode>\\n        <ResourceType>loadbalancer</ResourceType>\\n    </SupportResourceTypes>\\n    <SupportResourceTypes>\\n        <ProductCode>gpdb</ProductCode>\\n        <ResourceType>instance</ResourceType>\\n    </SupportResourceTypes>\\n    <SupportResourceTypes>\\n        <ProductCode>savingplan</ProductCode>\\n        <ResourceType>instance</ResourceType>\\n    </SupportResourceTypes>\\n    <SupportResourceTypes>\\n        <ProductCode>petadata</ProductCode>\\n        <ResourceType>instance</ResourceType>\\n    </SupportResourceTypes>\\n    <SupportResourceTypes>\\n        <ProductCode>dysms</ProductCode>\\n        <ResourceType>template</ResourceType>\\n    </SupportResourceTypes>\\n    <SupportResourceTypes>\\n        <ProductCode>fc</ProductCode>\\n        <ResourceType>service</ResourceType>\\n    </SupportResourceTypes>\\n    <SupportResourceTypes>\\n        <ProductCode>hsm</ProductCode>\\n        <ResourceType>instance</ResourceType>\\n    </SupportResourceTypes>\\n    <SupportResourceTypes>\\n        <ProductCode>hcs_sgw</ProductCode>\\n        <ResourceType>gateway</ResourceType>\\n    </SupportResourceTypes>\\n    <SupportResourceTypes>\\n        <ProductCode>hologram</ProductCode>\\n        <ResourceType>instance</ResourceType>\\n    </SupportResourceTypes>\\n    <SupportResourceTypes>\\n        <ProductCode>cms</ProductCode>\\n        <ResourceType>monitorgroup</ResourceType>\\n    </SupportResourceTypes>\\n    <SupportResourceTypes>\\n        <ProductCode>smc</ProductCode>\\n        <ResourceType>replicationjob</ResourceType>\\n    </SupportResourceTypes>\\n    <SupportResourceTypes>\\n        <ProductCode>ddosbgp</ProductCode>\\n        <ResourceType>instance</ResourceType>\\n    </SupportResourceTypes>\\n    <SupportResourceTypes>\\n        <ProductCode>rds</ProductCode>\\n        <ResourceType>backup</ResourceType>\\n    </SupportResourceTypes>\\n    <SupportResourceTypes>\\n        <ProductCode>gws</ProductCode>\\n        <ResourceType>instance</ResourceType>\\n    </SupportResourceTypes>\\n    <SupportResourceTypes>\\n        <ProductCode>oss</ProductCode>\\n        <ResourceType>bucket</ResourceType>\\n    </SupportResourceTypes>\\n    <SupportResourceTypes>\\n        <ProductCode>ecs</ProductCode>\\n        <ResourceType>imagecomponent</ResourceType>\\n    </SupportResourceTypes>\\n    <SupportResourceTypes>\\n        <ProductCode>apigateway</ProductCode>\\n        <ResourceType>plugin</ResourceType>\\n    </SupportResourceTypes>\\n    <SupportResourceTypes>\\n        <ProductCode>drds</ProductCode>\\n        <ResourceType>instance</ResourceType>\\n    </SupportResourceTypes>\\n    <SupportResourceTypes>\\n        <ProductCode>pvtz</ProductCode>\\n        <ResourceType>zone</ResourceType>\\n    </SupportResourceTypes>\\n    <SupportResourceTypes>\\n        <ProductCode>hbr</ProductCode>\\n        <ResourceType>hanainstance</ResourceType>\\n    </SupportResourceTypes>\\n    <SupportResourceTypes>\\n        <ProductCode>slb</ProductCode>\\n        <ResourceType>instance</ResourceType>\\n    </SupportResourceTypes>\\n</ListSupportResourceTypesResponse>","errorExample":""}]',
      'title' => '查询标签支持的资源类型和标签能力项',
      'description' => '### 调用示例

- 查询TagResources或UntagResources支持的资源类型列表，请参见<props="china">[调用示例](https://api.aliyun.com/api/Tag/2018-08-28/ListSupportResourceTypes?tab=DEBUG&params={%22RegionId%22:%22cn-hangzhou%22,%22SupportCode%22:%22TAG_CONSOLE_SUPPORT%22})</props><props="intl">[调用示例](https://api.alibabacloud.com/api/Tag/2018-08-28/ListSupportResourceTypes?tab=DEBUG&params={%22RegionId%22:%22cn-hangzhou%22,%22SupportCode%22:%22TAG_CONSOLE_SUPPORT%22})</props>。

- 查询ListTagResources或ListResourcesByTag等查询类接口支持的资源类型列表，请参见<props="china">[调用示例](https://api.aliyun.com/api/Tag/2018-08-28/ListSupportResourceTypes?tab=DEBUG&params={%22RegionId%22:%22cn-hangzhou%22})</props><props="intl">[调用示例](https://api.alibabacloud.com/api/Tag/2018-08-28/ListSupportResourceTypes?tab=DEBUG&params={%22RegionId%22:%22cn-hangzhou%22})</props>。

- 查询支持创建者标签的资源类型列表，请参见<props="china">[调用示例](https://api.aliyun.com/api/Tag/2018-08-28/ListSupportResourceTypes?tab=DEBUG&params={%22RegionId%22:%22cn-hangzhou%22,%22SupportCode%22:%22CREATED_BY_TAG_CONSOLE_SUPPORT%22})</props><props="intl">[调用示例](https://api.alibabacloud.com/api/Tag/2018-08-28/ListSupportResourceTypes?tab=DEBUG&params={%22RegionId%22:%22cn-hangzhou%22,%22SupportCode%22:%22CREATED_BY_TAG_CONSOLE_SUPPORT%22})</props>。',
      'requestParamsDescription' => '### 标签能力项
|标签能力项代码 |说明 |
| ----- | -------------- |
|TAG_CONSOLE_SUPPORT |标签控制台是否支持该资源类型。 |
|CLOUD_RESOURCE_CONSOLE_SUPPORT |云资源控制台是否支持标签。 |
|TAG_RAM_SUPPORT |该资源类型鉴权是否支持标签条件。 |
|CLOUD_RESOURCE_API_SUPPORT |云资源的查询API是否支持标签。 |
|TAG_API_SUPPORT |云产品是否提供了标签相关API。<br>标签相关API是指TagResources、UntagResources和ListTagResources。 |
|TAG_BILL_SUPPORT |是否支持标签分账。 |
|CREATED_BY_TAG_BILL_SUPPORT |是否支持创建者标签分账。 |
|CREATED_BY_TAG_CONSOLE_SUPPORT |控制台是否支持创建者标签。 |
|TAG_POLICY_PREVENTATIVE_CHECK_SUPPORT |是否支持标签策略的事前检测。<br>即给云资源绑定标签时，如果标签不符合标签策略定义的规则，则会绑定失败。 |
|TAG_POLICY_CHECK_REMEDIATION_SUPPORT |是否支持标签策略的事后检测及自动修正。<br>即检测当前资源类型中不符合标签策略定义的规则的资源标签，并自动修复这些标签。 |
|TAG_POLICY_RG_TAG_INHERIT_SUPPORT |是否支持标签策略的资源组标签继承场景。<br>即资源组中的资源自动继承资源组的指定标签。 |',
      'responseParamsDescription' => '### 支持详情代码说明
|支持详情代码|说明 |
| ----- | -------------- |
|ApiName |该能力项支持的API名称。 |
|SupportEnforcedForTags |该API是否支持标签策略事前强校验。 |',
    ),
    'DescribeRegions' => 
    array (
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
        1 => 
        array (
          'APP' => 
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'AcceptLanguage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '支持的语言。取值：

- zh-CN（默认值）：中文
- en-US：英文
- ja：日文',
            'type' => 'string',
            'required' => false,
            'example' => 'zh-CN',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '632BBAE2-9C44-4212-8B51-B54742DA9713',
              ),
              'Regions' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Region' => 
                  array (
                    'description' => '地域信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '地域信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'LocalName' => 
                        array (
                          'description' => '地域名称。',
                          'type' => 'string',
                          'example' => '华东1（杭州）',
                        ),
                        'RegionEndpoint' => 
                        array (
                          'description' => '接入地址。',
                          'type' => 'string',
                          'example' => 'tag.aliyuncs.com',
                        ),
                        'RegionId' => 
                        array (
                          'description' => '地域ID。',
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
      'errorCodes' => 
      array (
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidParameter.AcceptLanguage',
            'errorMessage' => 'The specified value of parameter AcceptLanguage  is not valid.',
          ),
          1 => 
          array (
            'errorCode' => 'NoPermission.Operator',
            'errorMessage' => 'The user is not authorized to operate on the specified resource.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"632BBAE2-9C44-4212-8B51-B54742DA9713\\",\\n  \\"Regions\\": {\\n    \\"Region\\": [\\n      {\\n        \\"LocalName\\": \\"华东1（杭州）\\",\\n        \\"RegionEndpoint\\": \\"tag.aliyuncs.com\\",\\n        \\"RegionId\\": \\"cn-hangzhou\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeRegionsResponse>\\n    <RequestId>4090BC47-A3FE-52D2-98D9-5D0725C530A2</RequestId>\\n    <Regions>\\n        <Region>\\n            <RegionId>cn-hangzhou</RegionId>\\n            <RegionEndpoint>tag.aliyuncs.com</RegionEndpoint>\\n            <LocalName>华东1（杭州）</LocalName>\\n        </Region>\\n        <Region>\\n            <RegionId>cn-shanghai</RegionId>\\n            <RegionEndpoint>tag.aliyuncs.com</RegionEndpoint>\\n            <LocalName>华东2（上海）</LocalName>\\n        </Region>\\n        <Region>\\n            <RegionId>cn-hangzhou-finance</RegionId>\\n            <RegionEndpoint>tag.aliyuncs.com</RegionEndpoint>\\n            <LocalName>华东1 金融云</LocalName>\\n        </Region>\\n        <Region>\\n            <RegionId>cn-nanjing</RegionId>\\n            <RegionEndpoint>tag.cn-nanjing.aliyuncs.com</RegionEndpoint>\\n            <LocalName>华东5（南京-本地地域）</LocalName>\\n        </Region>\\n        <Region>\\n            <RegionId>cn-shanghai-finance-1</RegionId>\\n            <RegionEndpoint>tag.aliyuncs.com</RegionEndpoint>\\n            <LocalName>华东2 金融云</LocalName>\\n        </Region>\\n        <Region>\\n            <RegionId>cn-fuzhou</RegionId>\\n            <RegionEndpoint>tag.cn-fuzhou.aliyuncs.com</RegionEndpoint>\\n            <LocalName>华东6（福州-本地地域）</LocalName>\\n        </Region>\\n        <Region>\\n            <RegionId>cn-qingdao</RegionId>\\n            <RegionEndpoint>tag.aliyuncs.com</RegionEndpoint>\\n            <LocalName>华北1（青岛）</LocalName>\\n        </Region>\\n        <Region>\\n            <RegionId>cn-beijing</RegionId>\\n            <RegionEndpoint>tag.aliyuncs.com</RegionEndpoint>\\n            <LocalName>华北2（北京）</LocalName>\\n        </Region>\\n        <Region>\\n            <RegionId>cn-zhangjiakou</RegionId>\\n            <RegionEndpoint>tag.cn-zhangjiakou.aliyuncs.com</RegionEndpoint>\\n            <LocalName>华北3（张家口）</LocalName>\\n        </Region>\\n        <Region>\\n            <RegionId>cn-huhehaote</RegionId>\\n            <RegionEndpoint>tag.cn-huhehaote.aliyuncs.com</RegionEndpoint>\\n            <LocalName>华北5（呼和浩特）</LocalName>\\n        </Region>\\n        <Region>\\n            <RegionId>cn-wulanchabu</RegionId>\\n            <RegionEndpoint>tag.cn-wulanchabu.aliyuncs.com</RegionEndpoint>\\n            <LocalName>华北6（乌兰察布）</LocalName>\\n        </Region>\\n        <Region>\\n            <RegionId>cn-beijing-finance-1</RegionId>\\n            <RegionEndpoint>tag.cn-beijing-finance-1.aliyuncs.com</RegionEndpoint>\\n            <LocalName>华北2 金融云</LocalName>\\n        </Region>\\n        <Region>\\n            <RegionId>cn-shenzhen</RegionId>\\n            <RegionEndpoint>tag.aliyuncs.com</RegionEndpoint>\\n            <LocalName>华南1（深圳）</LocalName>\\n        </Region>\\n        <Region>\\n            <RegionId>cn-shenzhen-finance-1</RegionId>\\n            <RegionEndpoint>tag.cn-shenzhen-finance-1.aliyuncs.com</RegionEndpoint>\\n            <LocalName>华南1 金融云</LocalName>\\n        </Region>\\n        <Region>\\n            <RegionId>cn-heyuan</RegionId>\\n            <RegionEndpoint>tag.cn-heyuan.aliyuncs.com</RegionEndpoint>\\n            <LocalName>华南2（河源）</LocalName>\\n        </Region>\\n        <Region>\\n            <RegionId>cn-guangzhou</RegionId>\\n            <RegionEndpoint>tag.cn-guangzhou.aliyuncs.com</RegionEndpoint>\\n            <LocalName>华南3（广州）</LocalName>\\n        </Region>\\n        <Region>\\n            <RegionId>cn-chengdu</RegionId>\\n            <RegionEndpoint>tag.cn-chengdu.aliyuncs.com</RegionEndpoint>\\n            <LocalName>西南1（成都）</LocalName>\\n        </Region>\\n        <Region>\\n            <RegionId>cn-hongkong</RegionId>\\n            <RegionEndpoint>tag.aliyuncs.com</RegionEndpoint>\\n            <LocalName>中国香港</LocalName>\\n        </Region>\\n        <Region>\\n            <RegionId>ap-southeast-1</RegionId>\\n            <RegionEndpoint>tag.aliyuncs.com</RegionEndpoint>\\n            <LocalName>新加坡</LocalName>\\n        </Region>\\n        <Region>\\n            <RegionId>ap-southeast-2</RegionId>\\n            <RegionEndpoint>tag.ap-southeast-2.aliyuncs.com</RegionEndpoint>\\n            <LocalName>澳大利亚（悉尼）</LocalName>\\n        </Region>\\n        <Region>\\n            <RegionId>ap-northeast-2</RegionId>\\n            <RegionEndpoint>tag.ap-northeast-2.aliyuncs.com</RegionEndpoint>\\n            <LocalName>韩国（首尔）</LocalName>\\n        </Region>\\n        <Region>\\n            <RegionId>ap-southeast-3</RegionId>\\n            <RegionEndpoint>tag.ap-southeast-3.aliyuncs.com</RegionEndpoint>\\n            <LocalName>马来西亚（吉隆坡）</LocalName>\\n        </Region>\\n        <Region>\\n            <RegionId>ap-southeast-5</RegionId>\\n            <RegionEndpoint>tag.ap-southeast-5.aliyuncs.com</RegionEndpoint>\\n            <LocalName>印度尼西亚（雅加达）</LocalName>\\n        </Region>\\n        <Region>\\n            <RegionId>ap-northeast-1</RegionId>\\n            <RegionEndpoint>tag.ap-northeast-1.aliyuncs.com</RegionEndpoint>\\n            <LocalName>日本（东京）</LocalName>\\n        </Region>\\n        <Region>\\n            <RegionId>eu-central-1</RegionId>\\n            <RegionEndpoint>tag.eu-central-1.aliyuncs.com</RegionEndpoint>\\n            <LocalName>德国（法兰克福）</LocalName>\\n        </Region>\\n        <Region>\\n            <RegionId>eu-west-1</RegionId>\\n            <RegionEndpoint>tag.eu-west-1.aliyuncs.com</RegionEndpoint>\\n            <LocalName>英国（伦敦）</LocalName>\\n        </Region>\\n        <Region>\\n            <RegionId>us-west-1</RegionId>\\n            <RegionEndpoint>tag.aliyuncs.com</RegionEndpoint>\\n            <LocalName>美国（硅谷）</LocalName>\\n        </Region>\\n        <Region>\\n            <RegionId>us-east-1</RegionId>\\n            <RegionEndpoint>tag.aliyuncs.com</RegionEndpoint>\\n            <LocalName>美国（弗吉尼亚）</LocalName>\\n        </Region>\\n        <Region>\\n            <RegionId>me-east-1</RegionId>\\n            <RegionEndpoint>tag.me-east-1.aliyuncs.com</RegionEndpoint>\\n            <LocalName>阿联酋（迪拜）</LocalName>\\n        </Region>\\n        <Region>\\n            <RegionId>ap-southeast-6</RegionId>\\n            <RegionEndpoint>tag.ap-southeast-6.aliyuncs.com</RegionEndpoint>\\n            <LocalName>菲律宾（马尼拉）</LocalName>\\n        </Region>\\n        <Region>\\n            <RegionId>ap-southeast-7</RegionId>\\n            <RegionEndpoint>tag.ap-southeast-7.aliyuncs.com</RegionEndpoint>\\n            <LocalName>泰国（曼谷）</LocalName>\\n        </Region>\\n        <Region>\\n            <RegionId>ap-south-1</RegionId>\\n            <RegionEndpoint>tag.ap-south-1.aliyuncs.com</RegionEndpoint>\\n            <LocalName>印度（孟买）</LocalName>\\n        </Region>\\n    </Regions>\\n</DescribeRegionsResponse>","errorExample":""}]',
      'title' => '查询支持标签的地域信息',
      'summary' => '查询支持标签的地域信息。',
      'requestParamsDescription' => ' 关于公共请求参数的详情，请参见[公共参数](~~159973~~)。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreatePolicy' => 
    array (
      'summary' => '创建标签策略。',
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。取值：cn-shanghai。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-shanghai',
            'default' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'PolicyName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '标签策略名称。

长度为1~128个字符，可以包含汉字、英文字母、数字和下划线（_）。',
            'type' => 'string',
            'required' => true,
            'example' => 'test',
          ),
        ),
        2 => 
        array (
          'name' => 'PolicyDesc',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '标签策略描述。

长度为0~512个字符。
',
            'type' => 'string',
            'required' => false,
            'example' => 'This is a tag policy example.',
          ),
        ),
        3 => 
        array (
          'name' => 'PolicyContent',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '标签策略内容。

关于标签策略语言的详情，请参见[标签策略语法](~~417436~~)。',
            'type' => 'string',
            'required' => true,
            'example' => '{"tags":{"CostCenter":{"tag_value":{"@@assign":["Beijing","Shanghai"]},"tag_key":{"@@assign":"CostCenter"}}}}',
          ),
        ),
        4 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DryRun：是否空跑。取值：

- false（默认值）：否。会按请求参数执行操作。
- true：是。仅校验请求参数，不真正执行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        5 => 
        array (
          'name' => 'UserType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '标签策略模式。取值：

- USER：单账号模式的默认值。使用单个阿里云账号或资源目录成员为当前账号创建标签策略时，设置该值。
- RD：多账号模式的默认值。使用资源目录管理账号为整个资源目录创建标签策略时，设置该值。

关于标签策略模式的更多信息，请参见[标签策略模式](~~417434~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'RD',
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'FDBE270D-C491-5EEC-A5CD-98245422D3F7',
              ),
              'PolicyId' => 
              array (
                'description' => '标签策略ID。',
                'type' => 'string',
                'example' => 'p-5732750813924f90****',
              ),
              'PolicyName' => 
              array (
                'description' => '标签策略名称。',
                'type' => 'string',
                'example' => 'test',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FDBE270D-C491-5EEC-A5CD-98245422D3F7\\",\\n  \\"PolicyId\\": \\"p-5732750813924f90****\\",\\n  \\"PolicyName\\": \\"test\\"\\n}","errorExample":""},{"type":"xml","example":"<CreatePolicyResponse>\\n    <RequestId>FDBE270D-C491-5EEC-A5CD-98245422D3F7</RequestId>\\n    <PolicyId>p-5732750813924f90****</PolicyId>\\n</CreatePolicyResponse>","errorExample":""}]',
      'title' => '创建标签策略',
      'description' => '### 使用说明
本文将提供一个示例，在多账号模式下，创建一个名为`test`的标签策略，该标签策略内容为：当资源绑定了标签`CostCenter:Beijing`或`CostCenter:Shanghai`时，就是合规，否则为不合规。',
      'requestParamsDescription' => '关于公共请求参数的详情，请参见[公共参数](~~159973~~)。',
    ),
    'DeletePolicy' => 
    array (
      'summary' => '删除标签策略。',
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。取值：cn-shanghai。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-shanghai',
            'default' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'PolicyId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '标签策略ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'p-557cb141331f41c7****',
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '4A32F5B0-0B0B-5537-B4A0-7A6E1C3AA96A',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4A32F5B0-0B0B-5537-B4A0-7A6E1C3AA96A\\"\\n}","errorExample":""},{"type":"xml","example":"<DeletePolicyResponse>\\n    <RequestId>4A32F5B0-0B0B-5537-B4A0-7A6E1C3AA96A</RequestId>\\n</DeletePolicyResponse>","errorExample":""}]',
      'title' => '删除标签策略',
      'description' => '### 使用说明
删除前，请确保标签策略未绑定任何策略目标。关于解绑标签策略的操作，请参见[DetachPolicy](~~429724~~)。

本文将提供一个示例，删除ID为`p-557cb141331f41c7****`的标签策略。',
      'requestParamsDescription' => '关于公共请求参数的详情，请参见[公共参数](~~159973~~)。',
    ),
    'AttachPolicy' => 
    array (
      'summary' => '将标签策略绑定到目标节点。',
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。取值：cn-shanghai。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-shanghai',
            'default' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'TargetId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标节点ID。

> 该参数在单账号模式下为可选，多账号模式下为必选。',
            'type' => 'string',
            'required' => false,
            'example' => '151266687691****',
          ),
        ),
        2 => 
        array (
          'name' => 'TargetType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标节点类型。取值：

- USER：将标签策略绑定到当前登录账号。适用单账号模式。
- ROOT：将标签策略绑定到资源目录中的Root资源夹。适用多账号模式。
- FOLDER：将标签策略绑定到资源目录中的资源夹。适用多账号模式。
- ACCOUNT：将标签策略绑定到资源目录中的成员。适用多账号模式。

> 该参数在单账号模式下为可选，多账号模式下为必选。且参数取值不区分大小写。',
            'type' => 'string',
            'required' => false,
            'example' => 'ACCOUNT',
          ),
        ),
        3 => 
        array (
          'name' => 'PolicyId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '标签策略ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'p-de62a0bf400e4b69****',
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '4A32F5B0-0B0B-5537-B4A0-7A6E1C3AA96A',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4A32F5B0-0B0B-5537-B4A0-7A6E1C3AA96A\\"\\n}","errorExample":""},{"type":"xml","example":"<AttachPolicyResponse>\\n    <RequestId>4A32F5B0-0B0B-5537-B4A0-7A6E1C3AA96A</RequestId>\\n</AttachPolicyResponse>","errorExample":""}]',
      'title' => '将标签策略绑定到目标节点',
      'description' => '### 使用说明
单账号模式下，可以将指定的标签策略绑定到当前登录账号。多账号模式下，可以将指定的标签策略绑定到资源目录的Root资源夹、资源夹或成员。关于标签策略模式的更多信息，请参见[标签策略模式](~~417434~~)。


本文将提供一个示例，在单账号模式下，将ID为`p-de62a0bf400e4b69****`的标签策略绑定到当前登录账号。',
      'requestParamsDescription' => '关于公共请求参数的详情，请参见[公共参数](~~159973~~)。',
    ),
    'DetachPolicy' => 
    array (
      'summary' => '解绑指定的标签策略。',
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。取值：cn-shanghai。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-shanghai',
            'default' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'TargetId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标节点ID。

> 该参数在单账号模式下为可选，多账号模式下为必选。',
            'type' => 'string',
            'required' => false,
            'example' => '151266687691****',
          ),
        ),
        2 => 
        array (
          'name' => 'TargetType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标节点类型。取值：

- USER：为当前登录账号解绑指定标签策略。适用单账号模式。
- ROOT：为资源目录中的Root资源夹解绑指定标签策略。适用多账号模式。
- FOLDER：为资源目录中的资源夹解绑指定标签策略。适用多账号模式。
- ACCOUNT：为资源目录中的成员解绑指定标签策略。适用多账号模式。

> 该参数在单账号模式下为可选，多账号模式下为必选。且参数取值不区分大小写。',
            'type' => 'string',
            'required' => false,
            'example' => 'ACCOUNT',
          ),
        ),
        3 => 
        array (
          'name' => 'PolicyId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '标签策略ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'p-a3381efe2fe34a75****',
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '4A32F5B0-0B0B-5537-B4A0-7A6E1C3AA96A',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4A32F5B0-0B0B-5537-B4A0-7A6E1C3AA96A\\"\\n}","errorExample":""},{"type":"xml","example":"<DetachPolicyResponse>\\n    <RequestId>4A32F5B0-0B0B-5537-B4A0-7A6E1C3AA96A</RequestId>\\n</DetachPolicyResponse>","errorExample":""}]',
      'title' => '解绑指定的标签策略',
      'description' => '### 使用说明
单账号模式下，可以为当前登录账号解绑指定标签策略。多账号模式下，可以为资源目录的Root资源夹、资源夹或成员解绑指定标签策略。关于标签策略模式的更多信息，请参见[标签策略模式](~~417434~~)。

本文将提供一个示例，在单账号模式下，为当前登录账号解绑ID为`p-a3381efe2fe34a75****`的标签策略。',
      'requestParamsDescription' => '关于公共请求参数的详情，请参见[公共参数](~~159973~~)。',
    ),
    'ModifyPolicy' => 
    array (
      'summary' => '修改标签策略。',
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。取值：cn-shanghai。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-shanghai',
            'default' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'PolicyId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '标签策略ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'p-5732750813924f90****',
          ),
        ),
        2 => 
        array (
          'name' => 'PolicyDesc',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '新标签策略描述。

长度为0~512个字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'This is a tag policy example.',
          ),
        ),
        3 => 
        array (
          'name' => 'PolicyContent',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '标签策略内容。

关于标签策略语言的详情，请参见[标签策略语法](~~417436~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '{"tags":{"CostCenter":{"tag_value":{"@@assign":["Beijing","Shanghai"]},"tag_key":{"@@assign":"CostCenter"}}}}',
          ),
        ),
        4 => 
        array (
          'name' => 'PolicyName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '标签策略名称。

长度为1~128个字符，可以包含汉字、英文字母、数字和下划线（_）。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        5 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否空跑。取值：

- false（默认值）：否。按请求参数执行操作。
- true：是。仅校验请求参数，不真正执行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '4A32F5B0-0B0B-5537-B4A0-7A6E1C3AA96A',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4A32F5B0-0B0B-5537-B4A0-7A6E1C3AA96A\\"\\n}","type":"json"}]',
      'title' => '修改标签策略',
      'description' => '### 使用说明
本文将提供一个示例，修改标签策略名称为`test`。',
      'requestParamsDescription' => '关于公共请求参数的详情，请参见[公共参数](~~159973~~)。',
    ),
    'GetPolicy' => 
    array (
      'summary' => '查询标签策略详情。',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。取值：cn-shanghai。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-shanghai',
            'default' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'PolicyId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '标签策略ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'p-557cb141331f41c7****',
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1E7A4802-AB57-570A-9860-F15B60E1586B',
              ),
              'Policy' => 
              array (
                'description' => '标签策略详情。',
                'type' => 'object',
                'properties' => 
                array (
                  'PolicyName' => 
                  array (
                    'description' => '标签策略名称。',
                    'type' => 'string',
                    'example' => 'test',
                  ),
                  'PolicyDesc' => 
                  array (
                    'description' => '标签策略描述。',
                    'type' => 'string',
                    'example' => 'This is a tag policy example.',
                  ),
                  'PolicyContent' => 
                  array (
                    'description' => '标签策略内容。',
                    'type' => 'string',
                    'example' => '{\\"tags\\":{\\"CostCenter\\":{\\"tag_value\\":{\\"@@assign\\":[\\"Beijing\\",\\"Shanghai\\"]},\\"tag_key\\":{\\"@@assign\\":\\"CostCenter\\"}}}}',
                  ),
                  'UserType' => 
                  array (
                    'description' => '标签策略模式。取值：

- USER：单账号模式。
- RD：多账号模式。

关于标签策略模式的更多信息，请参见[标签策略模式](~~417434~~)。',
                    'type' => 'string',
                    'example' => 'USER',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1E7A4802-AB57-570A-9860-F15B60E1586B\\",\\n  \\"Policy\\": {\\n    \\"PolicyName\\": \\"test\\",\\n    \\"PolicyDesc\\": \\"This is a tag policy example.\\",\\n    \\"PolicyContent\\": \\"{\\\\\\\\\\\\\\"tags\\\\\\\\\\\\\\":{\\\\\\\\\\\\\\"CostCenter\\\\\\\\\\\\\\":{\\\\\\\\\\\\\\"tag_value\\\\\\\\\\\\\\":{\\\\\\\\\\\\\\"@@assign\\\\\\\\\\\\\\":[\\\\\\\\\\\\\\"Beijing\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"Shanghai\\\\\\\\\\\\\\"]},\\\\\\\\\\\\\\"tag_key\\\\\\\\\\\\\\":{\\\\\\\\\\\\\\"@@assign\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"CostCenter\\\\\\\\\\\\\\"}}}}\\",\\n    \\"UserType\\": \\"USER\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetPolicyResponse>\\n    <Policy>\\n        <PolicyDesc>This is a tag policy example.</PolicyDesc>\\n        <PolicyName>test</PolicyName>\\n        <UserType>USER</UserType>\\n        <PolicyContent>{\\"tags\\":{\\"CostCenter\\":{\\"tag_value\\":{\\"@@assign\\":[\\"Beijing\\",\\"Shanghai\\"]},\\"tag_key\\":{\\"@@assign\\":\\"CostCenter\\"}}}}</PolicyContent>\\n    </Policy>\\n    <RequestId>1E7A4802-AB57-570A-9860-F15B60E1586B</RequestId>\\n</GetPolicyResponse>","errorExample":""}]',
      'title' => '查询标签策略详情',
      'description' => '### 使用说明
本文将提供一个示例，查询ID为`p-557cb141331f41c7****`标签策略详情。',
      'requestParamsDescription' => '关于公共请求参数的详情，请参见[公共参数](~~159973~~)。',
    ),
    'GetPolicyEnableStatus' => 
    array (
      'summary' => '查询标签策略状态。',
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。取值：cn-shanghai。

',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'cn-shanghai',
            'default' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'UserType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '标签策略模式。用于查询的过滤条件。取值：

- USER：单账号模式。
- RD：多账号模式。

关于标签策略模式的更多信息，请参见[标签策略模式](~~417434~~)。

> 参数取值不区分大小写。',
            'type' => 'string',
            'required' => false,
            'example' => 'RD',
          ),
        ),
        2 => 
        array (
          'name' => 'OpenType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开通类型。取值：  

- TAG_POLICY：标签策略。 
- VERIFY_NO_TAG：强校验能力。',
            'type' => 'string',
            'required' => false,
            'example' => 'TAG_POLICY',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '6C8DF1B1-C65F-5D3A-9FDA-26A4683BB36B',
              ),
              'StatusModels' => 
              array (
                'description' => '标签策略状态。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '标签策略状态。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'UserType' => 
                    array (
                      'description' => '标签策略模式。取值：

- USER：单账号模式。
- RD：多账号模式。

关于标签策略模式的更多信息，请参见[标签策略模式](~~417434~~)。',
                      'type' => 'string',
                      'example' => 'RD',
                    ),
                    'Status' => 
                    array (
                      'description' => '标签策略状态。取值：

- PendingEnable：启用中。
- Enabled：已启用。
- Closing：禁用中。
- Disabled：已禁用。',
                      'type' => 'string',
                      'example' => 'Enabled',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6C8DF1B1-C65F-5D3A-9FDA-26A4683BB36B\\",\\n  \\"StatusModels\\": [\\n    {\\n      \\"UserType\\": \\"RD\\",\\n      \\"Status\\": \\"Enabled\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<GetPolicyEnableStatusResponse>\\n    <RequestId>6C8DF1B1-C65F-5D3A-9FDA-26A4683BB36B</RequestId>\\n    <StatusModels>\\n        <Status>Enabled</Status>\\n        <UserType>RD</UserType>\\n    </StatusModels>\\n</GetPolicyEnableStatusResponse>","errorExample":""}]',
      'title' => '查询标签策略状态',
      'description' => '### 使用说明
本文将提供一个示例，查询当前登录账号的标签策略状态。返回结果显示，当前登录账号已启用多账号模式的标签策略。',
    ),
    'ListPolicies' => 
    array (
      'summary' => '查询标签策略列表。',
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。取值：cn-shanghai。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-shanghai',
            'default' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'MaxResult',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页时每页显示的数据条数。

默认值：50。最大值：1000。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '50',
          ),
        ),
        2 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '下一个查询开始的Token。',
            'type' => 'string',
            'required' => false,
            'example' => 'caeba0bbb2be03f84eb48b699f0a****',
          ),
        ),
        3 => 
        array (
          'name' => 'PolicyIds',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '标签策略ID列表。用于查询的过滤条件。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签策略ID列表。用于查询的过滤条件。',
              'type' => 'string',
              'required' => false,
              'example' => 'p-557cb141331f41c7****',
            ),
            'required' => false,
            'maxItems' => 10,
          ),
        ),
        4 => 
        array (
          'name' => 'PolicyNames',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '标签策略名称列表。用于查询的过滤条件。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签策略名称列表。用于查询的过滤条件。',
              'type' => 'string',
              'required' => false,
              'example' => 'test',
            ),
            'required' => false,
            'maxItems' => 10,
          ),
        ),
        5 => 
        array (
          'name' => 'UserType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '标签策略模式。用于查询的过滤条件。取值：

- USER：单账号模式。
- RD：多账号模式。

关于标签策略模式的更多信息，请参见[标签策略模式](~~417434~~)。

> 参数取值不区分大小写。',
            'type' => 'string',
            'required' => false,
            'example' => 'USER',
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '72477CFF-5B24-5E30-9861-3DD9C4BD46E5',
              ),
              'NextToken' => 
              array (
                'description' => '根据`NextToken`判断是否具备下一个查询开始的Token。取值：

- 如果`NextToken`为空，即`"NextToken": ""`，表示没有下一个。
- 如果`NextToken`有值，则该值就是下一个查询开始的Token。',
                'type' => 'string',
                'example' => 'caeba0bbb2be03f84eb48b699f0a****',
              ),
              'PolicyList' => 
              array (
                'description' => '标签策略列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '标签策略列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'PolicyName' => 
                    array (
                      'description' => '标签策略名称。',
                      'type' => 'string',
                      'example' => 'example',
                    ),
                    'PolicyDesc' => 
                    array (
                      'description' => '标签策略描述。',
                      'type' => 'string',
                      'example' => 'This is a tag policy example.',
                    ),
                    'PolicyContent' => 
                    array (
                      'description' => '标签策略内容。',
                      'type' => 'string',
                      'example' => '{\\"tags\\":{\\"CostCenter\\":{\\"tag_value\\":{\\"@@assign\\":[\\"Beijing\\",\\"Shanghai\\"]},\\"tag_key\\":{\\"@@assign\\":\\"CostCenter\\"}}}}',
                    ),
                    'PolicyId' => 
                    array (
                      'description' => '标签策略ID。',
                      'type' => 'string',
                      'example' => 'p-de62a0bf400e4b69****',
                    ),
                    'UserType' => 
                    array (
                      'description' => '标签策略模式。取值：

- USER：单账号模式。
- RD：多账号模式。

关于标签策略模式的更多信息，请参见[标签策略模式](~~417434~~)。',
                      'type' => 'string',
                      'example' => 'USER',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"72477CFF-5B24-5E30-9861-3DD9C4BD46E5\\",\\n  \\"NextToken\\": \\"caeba0bbb2be03f84eb48b699f0a****\\",\\n  \\"PolicyList\\": [\\n    {\\n      \\"PolicyName\\": \\"example\\",\\n      \\"PolicyDesc\\": \\"This is a tag policy example.\\",\\n      \\"PolicyContent\\": \\"{\\\\\\\\\\\\\\"tags\\\\\\\\\\\\\\":{\\\\\\\\\\\\\\"CostCenter\\\\\\\\\\\\\\":{\\\\\\\\\\\\\\"tag_value\\\\\\\\\\\\\\":{\\\\\\\\\\\\\\"@@assign\\\\\\\\\\\\\\":[\\\\\\\\\\\\\\"Beijing\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"Shanghai\\\\\\\\\\\\\\"]},\\\\\\\\\\\\\\"tag_key\\\\\\\\\\\\\\":{\\\\\\\\\\\\\\"@@assign\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"CostCenter\\\\\\\\\\\\\\"}}}}\\",\\n      \\"PolicyId\\": \\"p-de62a0bf400e4b69****\\",\\n      \\"UserType\\": \\"USER\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListPoliciesResponse>\\n    <RequestId>72477CFF-5B24-5E30-9861-3DD9C4BD46E5</RequestId>\\n    <PolicyList>\\n        <PolicyDesc>This is a tag policy example.</PolicyDesc>\\n        <PolicyName>example</PolicyName>\\n        <UserType>USER</UserType>\\n        <PolicyId>p-de62a0bf400e4b69****</PolicyId>\\n        <PolicyContent>{\\"tags\\":{\\"CostCenter\\":{\\"tag_value\\":{\\"@@assign\\":[\\"Beijing\\",\\"Shanghai\\"]},\\"tag_key\\":{\\"@@assign\\":\\"CostCenter\\"}}}}</PolicyContent>\\n    </PolicyList>\\n    <PolicyList>\\n        <PolicyDesc>This is a tag policy example.</PolicyDesc>\\n        <PolicyName>test</PolicyName>\\n        <UserType>USER</UserType>\\n        <PolicyId>p-557cb141331f41c7****</PolicyId>\\n        <PolicyContent>{\\"tags\\":{\\"k1\\":{\\"tag_value\\":{\\"@@assign\\":[\\"v1\\"]},\\"tag_key\\":{\\"@@assign\\":\\"k1\\"}}}}</PolicyContent>\\n    </PolicyList>\\n</ListPoliciesResponse>","errorExample":""}]',
      'title' => '查询标签策略列表',
      'description' => '### 使用说明
单账号模式下，当前登录账号可以查询本账号下创建的全部标签策略列表。多账号模式下，资源目录管理账号可以查询整个资源目录下创建的全部标签策略列表。关于标签策略模式的更多信息，请参见[标签策略模式](~~417434~~)。

本文将提供一个示例，在单账号模式下，查询当前登录账号的全部标签策略列表。返回结果显示，存在两条标签策略。',
      'requestParamsDescription' => '关于公共请求参数的详情，请参见[公共参数](~~159973~~)。',
    ),
    'ListPoliciesForTarget' => 
    array (
      'summary' => '查询目标节点绑定的标签策略列表。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
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
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。取值：cn-shanghai。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-shanghai',
            'default' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'MaxResult',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页时每页显示的数据条数。

默认值：50。最大值：1000。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '50',
          ),
        ),
        2 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '下一个查询开始的Token。',
            'type' => 'string',
            'required' => false,
            'example' => 'caeba0bbb2be03f84eb48b699f0a****',
          ),
        ),
        3 => 
        array (
          'name' => 'TargetId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标节点ID。用于查询的过滤条件。',
            'type' => 'string',
            'required' => false,
            'example' => '154950938137****',
          ),
        ),
        4 => 
        array (
          'name' => 'TargetType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标节点类型。用于查询的过滤条件。取值：

- USER：查询当前登录账号已绑定的标签策略。适用单账号模式。
- ROOT：查询资源目录中的Root资源夹已绑定的标签策略。适用多账号模式。
- FOLDER：查询资源目录中的资源夹已绑定的标签策略。适用多账号模式。
- ACCOUNT：查询资源目录中的成员已绑定的标签策略。适用多账号模式。

> 参数取值不区分大小写。
',
            'type' => 'string',
            'required' => false,
            'example' => 'ACCOUNT',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'ListResponse<PolicyModel>',
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'description' => '目标节点绑定的标签策略列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '目标节点绑定的标签策略列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'PolicyId' => 
                    array (
                      'description' => '标签策略ID。',
                      'type' => 'string',
                      'example' => 'p-de62a0bf400e4b69****',
                    ),
                    'PolicyName' => 
                    array (
                      'description' => '标签策略名称。',
                      'type' => 'string',
                      'example' => 'example',
                    ),
                    'PolicyDesc' => 
                    array (
                      'description' => '标签策略描述。',
                      'type' => 'string',
                      'example' => 'This is a tag policy example.',
                    ),
                    'PolicyContent' => 
                    array (
                      'description' => '标签策略内容。',
                      'type' => 'string',
                      'example' => '{\\"tags\\":{\\"CostCenter\\":{\\"tag_value\\":{\\"@@assign\\":[\\"Beijing\\",\\"Shanghai\\"]},\\"tag_key\\":{\\"@@assign\\":\\"CostCenter\\"}}}}',
                    ),
                    'UserType' => 
                    array (
                      'description' => '标签策略模式。取值：

- USER：单账号模式。
- RD：多账号模式。

关于标签策略模式的更多信息，请参见[标签策略模式](~~417434~~)。',
                      'type' => 'string',
                      'example' => 'USER',
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '8C962146-AB38-516C-818C-695D4E9F2EA2',
              ),
              'NextToken' => 
              array (
                'description' => '根据`NextToken`判断是否具备下一个查询开始的Token。取值：

- 如果`NextToken`为空，即`"NextToken": ""`，表示没有下一个。
- 如果`NextToken`有值，则该值就是下一个查询开始的Token。',
                'type' => 'string',
                'example' => 'caeba0bbb2be03f84eb48b699f0a****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": [\\n    {\\n      \\"PolicyId\\": \\"p-de62a0bf400e4b69****\\",\\n      \\"PolicyName\\": \\"example\\",\\n      \\"PolicyDesc\\": \\"This is a tag policy example.\\",\\n      \\"PolicyContent\\": \\"{\\\\\\\\\\\\\\"tags\\\\\\\\\\\\\\":{\\\\\\\\\\\\\\"CostCenter\\\\\\\\\\\\\\":{\\\\\\\\\\\\\\"tag_value\\\\\\\\\\\\\\":{\\\\\\\\\\\\\\"@@assign\\\\\\\\\\\\\\":[\\\\\\\\\\\\\\"Beijing\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"Shanghai\\\\\\\\\\\\\\"]},\\\\\\\\\\\\\\"tag_key\\\\\\\\\\\\\\":{\\\\\\\\\\\\\\"@@assign\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"CostCenter\\\\\\\\\\\\\\"}}}}\\",\\n      \\"UserType\\": \\"USER\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"8C962146-AB38-516C-818C-695D4E9F2EA2\\",\\n  \\"NextToken\\": \\"caeba0bbb2be03f84eb48b699f0a****\\"\\n}","errorExample":""},{"type":"xml","example":"<ListPoliciesForTargetResponse>\\n    <RequestId>8C962146-AB38-516C-818C-695D4E9F2EA2</RequestId>\\n    <Data>\\n        <PolicyDesc>This is a tag policy example.</PolicyDesc>\\n        <PolicyName>example</PolicyName>\\n        <UserType>USER</UserType>\\n        <PolicyId>p-de62a0bf400e4b69****</PolicyId>\\n        <PolicyContent>{\\"tags\\":{\\"CostCenter\\":{\\"tag_value\\":{\\"@@assign\\":[\\"Beijing\\",\\"Shanghai\\"]},\\"tag_key\\":{\\"@@assign\\":\\"CostCenter\\"}}}}</PolicyContent>\\n    </Data>\\n</ListPoliciesForTargetResponse>","errorExample":""}]',
      'title' => '查询目标节点绑定的标签策略列表',
      'description' => '### 使用说明
单账号模式下，当前登录账号可以查询自己已绑定的标签策略列表。多账号模式下，资源目录管理账号可以查询Root资源夹、资源夹或成员已绑定的标签策略列表。关于标签策略模式的更多信息，请参见[标签策略模式](~~417434~~)。

本文将提供一个示例，在单账号模式下，查询当前登录账号绑定的标签策略列表。返回结果显示，当前登录账号仅绑定了一个标签策略。',
      'requestParamsDescription' => '关于公共请求参数的详情，请参见[公共参数](~~159973~~)。',
    ),
    'GetEffectivePolicy' => 
    array (
      'summary' => '查询有效策略。',
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。取值：cn-shanghai。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-shanghai',
            'default' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'TargetId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标节点ID。
> 该参数在单账号模式下为可选，多账号模式下为必选。',
            'type' => 'string',
            'required' => false,
            'example' => '154950938137****',
          ),
        ),
        2 => 
        array (
          'name' => 'TargetType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标节点类型。取值：

- USER：查询当前登录账号已绑定的有效策略。适用单账号模式。
- ROOT：查询资源目录中的Root资源夹已绑定的有效策略。适用多账号模式。
- FOLDER：查询资源目录中的资源夹已绑定的有效策略。适用多账号模式。
- ACCOUNT：查询资源目录中的成员已绑定的有效策略。适用多账号模式。

> 该参数在单账号模式下为可选，多账号模式下为必选。且参数取值不区分大小写。',
            'type' => 'string',
            'required' => false,
            'example' => 'ACCOUNT',
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'BB532282-94F5-5F56-877F-32D5E2A04F3F',
              ),
              'EffectivePolicy' => 
              array (
                'description' => '有效策略。',
                'type' => 'string',
                'example' => '{\\"tags\\":{\\"costcenter\\":{\\"tag_value\\":[\\"Beijing\\",\\"Shanghai\\"],\\"tag_key\\":\\"CostCenter\\"}}}',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"BB532282-94F5-5F56-877F-32D5E2A04F3F\\",\\n  \\"EffectivePolicy\\": \\"{\\\\\\\\\\\\\\"tags\\\\\\\\\\\\\\":{\\\\\\\\\\\\\\"costcenter\\\\\\\\\\\\\\":{\\\\\\\\\\\\\\"tag_value\\\\\\\\\\\\\\":[\\\\\\\\\\\\\\"Beijing\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"Shanghai\\\\\\\\\\\\\\"],\\\\\\\\\\\\\\"tag_key\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"CostCenter\\\\\\\\\\\\\\"}}}\\"\\n}","errorExample":""},{"type":"xml","example":"<GetEffectivePolicyResponse>\\n    <EffectivePolicy>{\\"tags\\":{\\"costcenter\\":{\\"tag_value\\":[\\"Beijing\\",\\"Shanghai\\"],\\"tag_key\\":\\"CostCenter\\"}}}</EffectivePolicy>\\n    <RequestId>BB532282-94F5-5F56-877F-32D5E2A04F3F</RequestId>\\n</GetEffectivePolicyResponse>","errorExample":""}]',
      'title' => '查询有效策略',
      'description' => '### 使用说明
单账号模式下，当前登录账号可以查询自己已绑定的有效策略。多账号模式下，资源目录管理账号可以查询Root资源夹、资源夹和成员已绑定的有效策略，资源目录成员可以查询自己已绑定的有效策略。关于标签策略模式的更多信息，请参见[标签策略模式](~~417434~~)。

该有效策略是根据标签策略继承关系计算得出的。更多信息，请参见[标签策略继承和有效策略计算](~~417435~~)。

本文将提供一个示例，在单账号模式下，查询当前登录账号的有效策略。',
      'requestParamsDescription' => '关于公共请求参数的详情，请参见[公共参数](~~159973~~)。',
    ),
    'ListTargetsForPolicy' => 
    array (
      'summary' => '查询标签策略绑定的目标节点。',
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
      'operationType' => 'readAndWrite',
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。取值：cn-shanghai。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-shanghai',
            'default' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'MaxResult',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页时每页显示的数据条数。

默认值：50。最大值：1000。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '50',
          ),
        ),
        2 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '下一个查询开始的Token。',
            'type' => 'string',
            'required' => false,
            'example' => 'caeba0bbb2be03f84eb48b699f0a****',
          ),
        ),
        3 => 
        array (
          'name' => 'PolicyId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '标签策略ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'p-de62a0bf400e4b69****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'PlainResponse<ListTargetsModel>',
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'Targets' => 
              array (
                'description' => '目标节点列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '目标节点列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'TargetId' => 
                    array (
                      'description' => '目标节点ID。',
                      'type' => 'string',
                      'example' => '195320939469****',
                    ),
                    'TargetType' => 
                    array (
                      'description' => '目标节点类型。取值：

- USER：当前登录账号。适用单账号模式。
- ROOT：资源目录中的Root资源夹。适用多账号模式。
- FOLDER：资源目录中的资源夹。适用多账号模式。
- ACCOUNT：资源目录中的成员。适用多账号模式。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => 'ACCOUNT',
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '2EE71C8D-6DB8-56AC-8B05-3D4C0116E6A1',
              ),
              'IsRd' => 
              array (
                'description' => '是否为资源目录中的节点。取值：

- true：目标节点是资源目录中的节点。适用多账号模式。
- false：目标节点不是资源目录中的节点。适用单账号模式。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RdId' => 
              array (
                'description' => '资源目录ID。

> 仅多账号模式返回该参数。',
                'type' => 'string',
                'example' => 'rd-3G****',
              ),
              'NextToken' => 
              array (
                'description' => '根据`NextToken`判断是否具备下一个查询开始的Token。取值：

- 如果`NextToken`为空，即`"NextToken": ""`，表示没有下一个。
- 如果`NextToken`有值，则该值就是下一个查询开始的Token。',
                'type' => 'string',
                'example' => 'caeba0bbb2be03f84eb48b699f0a****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Targets\\": [\\n    {\\n      \\"TargetId\\": \\"195320939469****\\",\\n      \\"TargetType\\": 0\\n    }\\n  ],\\n  \\"RequestId\\": \\"2EE71C8D-6DB8-56AC-8B05-3D4C0116E6A1\\",\\n  \\"IsRd\\": true,\\n  \\"RdId\\": \\"rd-3G****\\",\\n  \\"NextToken\\": \\"caeba0bbb2be03f84eb48b699f0a****\\"\\n}","errorExample":""},{"type":"xml","example":"<ListTargetsForPolicyResponse>\\n\\t<RequestId>B90479D5-CB51-5BA8-A13F-989A81B81273</RequestId>\\n\\t<Targets>\\n\\t\\t<Target>\\n\\t\\t\\t<TargetType>ACCOUNT</TargetType>\\n\\t\\t\\t<TargetId>195320939469****</TargetId>\\n\\t\\t</Target>\\n\\t\\t<Target>\\n\\t\\t\\t<TargetType>ACCOUNT</TargetType>\\n\\t\\t\\t<TargetId>177242285274****</TargetId>\\n\\t\\t</Target>\\n\\t</Targets>\\n\\t<RdId>rd-3G****</RdId>\\n\\t<IsRd>true</IsRd>\\n</ListTargetsForPolicyResponse>\\t\\n","errorExample":""}]',
      'title' => '查询标签策略绑定的目标节点',
      'description' => '### 使用说明
单账号模式下，当前登录账号可以查询指定标签策略绑定的目标节点，该目标节点为当前登录账号。多账号模式下，资源目录管理账号可以查询指定标签策略绑定的目标节点，该目标节点为Root资源夹、资源夹或成员。关于标签策略模式的更多信息，请参见[标签策略模式](~~417434~~)。

本文将提供一个示例，在多账号模式下，查询ID为`p-de62a0bf400e4b69****`的标签策略绑定的目标节点。返回结果显示，该标签策略绑定到资源目录的两个成员上。',
      'requestParamsDescription' => '关于公共请求参数的详情，请参见[公共参数](~~159973~~)。',
    ),
    'ListConfigRulesForTarget' => 
    array (
      'summary' => '查询目标节点的标签检测任务列表。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
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
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。取值：cn-shanghai。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-shanghai',
            'default' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'TargetId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标节点ID。用于查询的过滤条件。',
            'type' => 'string',
            'required' => false,
            'example' => '134254031178****',
          ),
        ),
        2 => 
        array (
          'name' => 'MaxResult',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页时每页显示的数据条数。

默认值：50。最大值：1000。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '50',
          ),
        ),
        3 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '
下一个查询开始的Token。',
            'type' => 'string',
            'required' => false,
            'example' => 'caeba0bbb2be03f84eb48b699f0a****',
          ),
        ),
        4 => 
        array (
          'name' => 'TagKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '标签键。用于查询的过滤条件。',
            'type' => 'string',
            'required' => false,
            'example' => 'CostCenter',
          ),
        ),
        5 => 
        array (
          'name' => 'TargetType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标节点类型。用于查询的过滤条件。取值：

- USER：查询当前登录账号的标签检测任务列表。适用单账号模式。
- ROOT：查询资源目录中的Root资源夹的标签检测任务列表。适用多账号模式。
- FOLDER：查询资源目录中的资源夹的标签检测任务列表。适用多账号模式。
- ACCOUNT：查询资源目录中的成员的标签检测任务列表。适用多账号模式。

> 参数取值不区分大小写。',
            'type' => 'string',
            'required' => false,
            'example' => 'ACCOUNT',
          ),
        ),
        6 => 
        array (
          'name' => 'PolicyType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '标签策略场景。用于查询的过滤条件。取值：

- tags：资源绑定指定标签值场景下的标签策略。
- rg_inherit：资源自动继承资源组标签场景下的标签策略。',
            'type' => 'string',
            'required' => false,
            'example' => 'tags',
          ),
        ),
        7 => 
        array (
          'name' => 'UserType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '标签策略模式。用于查询的过滤条件。取值：

- USER：单账号模式。
- RD：多账号模式。

关于标签策略模式的更多信息，请参见[标签策略模式](~~417434~~)。

> 参数取值不区分大小写。',
            'type' => 'string',
            'required' => false,
            'example' => 'USER',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'ListResponse<PolicyModel>',
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'description' => '检测任务列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '检测任务列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'TargetId' => 
                    array (
                      'description' => '目标节点ID。',
                      'type' => 'string',
                      'example' => '134254031178****',
                    ),
                    'TargetType' => 
                    array (
                      'description' => '目标节点类型。取值：

- USER：当前登录账号。适用单账号模式。
- ROOT：资源目录中的Root资源夹。适用多账号模式。
- FOLDER：资源目录中的资源夹。适用多账号模式。
- ACCOUNT：资源目录中的成员。适用多账号模式。
',
                      'type' => 'string',
                      'example' => 'USER',
                    ),
                    'ConfigRuleId' => 
                    array (
                      'description' => '规则ID。',
                      'type' => 'string',
                      'example' => 'cr-0lb4866180880069****',
                    ),
                    'AggregatorId' => 
                    array (
                      'description' => '账号组ID。

用于在配置审计中查询不合规资源检测报告的具体内容。

> 仅多账号模式返回该参数。
',
                      'type' => 'string',
                      'example' => 'ca-efdc33dc9b37002d****',
                    ),
                    'TagKey' => 
                    array (
                      'description' => '标签键。',
                      'type' => 'string',
                      'example' => 'CostCenter',
                    ),
                    'Remediation' => 
                    array (
                      'description' => '是否启用自动修正。取值：

- true：已启用。
- false：未启用。',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'PolicyType' => 
                    array (
                      'description' => '标签策略场景。取值：

- tags：资源绑定指定标签值场景下的标签策略。
- rg_inherit：资源自动继承资源组标签场景下的标签策略。',
                      'type' => 'string',
                      'example' => 'tags',
                    ),
                    'TagValue' => 
                    array (
                      'description' => '自动修复配置的标签值。',
                      'type' => 'string',
                      'example' => 'Project',
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '7126AECD-D7AD-5073-8E88-DD2BD1FC139E',
              ),
              'NextToken' => 
              array (
                'description' => '根据`NextToken`判断是否具备下一个查询开始的Token。取值：

- 如果`NextToken`为空，即`"NextToken": ""`，表示没有下一个。
- 如果`NextToken`有值，则该值就是下一个查询开始的Token。',
                'type' => 'string',
                'example' => 'caeba0bbb2be03f84eb48b699f0a****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": [\\n    {\\n      \\"TargetId\\": \\"134254031178****\\",\\n      \\"TargetType\\": \\"USER\\",\\n      \\"ConfigRuleId\\": \\"cr-0lb4866180880069****\\",\\n      \\"AggregatorId\\": \\"ca-efdc33dc9b37002d****\\",\\n      \\"TagKey\\": \\"CostCenter\\",\\n      \\"Remediation\\": false,\\n      \\"PolicyType\\": \\"tags\\",\\n      \\"TagValue\\": \\"Project\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"7126AECD-D7AD-5073-8E88-DD2BD1FC139E\\",\\n  \\"NextToken\\": \\"caeba0bbb2be03f84eb48b699f0a****\\"\\n}","errorExample":""},{"type":"xml","example":"<ListConfigRulesForTargetResponse>\\n    <RequestId>7126AECD-D7AD-5073-8E88-DD2BD1FC139E</RequestId>\\n    <HttpStatusCode>200</HttpStatusCode>\\n    <Data>\\n        <ConfigRuleId>cr-0lb4866180880069****</ConfigRuleId>\\n        <PolicyType>tags</PolicyType>\\n        <TargetType>USER</TargetType>\\n        <TagKey>CostCenter</TagKey>\\n        <Remediation>false</Remediation>\\n        <TargetId>134254031178****</TargetId>\\n    </Data>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</ListConfigRulesForTargetResponse>","errorExample":""}]',
      'title' => '查询目标节点的标签检测任务列表',
      'description' => '### 使用说明
单账号模式下，当前登录账号可以查询本账号的标签检测任务列表。多账号模式下，资源目录管理账号可以查询Root资源夹、资源夹或成员的标签检测任务列表。关于标签策略模式的更多信息，请参见[标签策略模式](~~417434~~)。

本文将提供一个示例，在单账号模式下，查询当前登录账号的全部标签检测任务列表。返回结果显示，只有一条标签检测任务。',
      'requestParamsDescription' => '关于公共请求参数的详情，请参见[公共参数](~~159973~~)。',
    ),
    'GetConfigRuleReport' => 
    array (
      'summary' => '查询上一次生成的不合规资源检测报告的基本信息。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
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
      'operationType' => 'readAndWrite',
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。取值：cn-shanghai。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-shanghai',
            'default' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'TargetId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标节点ID。',
            'type' => 'string',
            'required' => false,
            'example' => '154950938137****',
          ),
        ),
        2 => 
        array (
          'name' => 'UserType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '标签策略模式。取值：

- USER：单账号下的默认值。
- RD：多账号下的默认值。

关于标签策略模式的更多信息，请参见[标签策略模式](~~417434~~)。

> 参数取值不区分大小写。
',
            'type' => 'string',
            'required' => false,
            'example' => 'USER',
          ),
        ),
        3 => 
        array (
          'name' => 'TargetType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标节点类型。取值：

- USER：查询当前登录账号的不合规资源检测报告基本信息。适用单账号模式。
- ROOT：查询资源目录中的Root资源夹的不合规资源检测报告基本信息。适用多账号模式。
- FOLDER：查询资源目录中的资源夹的不合规资源检测报告基本信息。适用多账号模式。
- ACCOUNT：查询资源目录中的成员的不合规资源检测报告基本信息。适用多账号模式。

> 参数取值不区分大小写。
',
            'type' => 'string',
            'required' => false,
            'example' => 'USER',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'ListResponse<PolicyModel>',
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'A68BD5BC-5B12-5A9B-8AE9-77884886BE10',
              ),
              'Success' => 
              array (
                'description' => '是否成功。取值：

- true：成功。
- false：失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'HttpStatusCode' => 
              array (
                'description' => '状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Data' => 
              array (
                'description' => '上一次生成的不合规资源检测报告基本信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'ReportId' => 
                  array (
                    'description' => '不合规资源检测报告的ID。',
                    'type' => 'string',
                    'example' => 'crp-ao0786618088006c****',
                  ),
                  'CreatedTime' => 
                  array (
                    'description' => '报告生成的时间戳。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1655089159000',
                  ),
                  'TargetId' => 
                  array (
                    'description' => '目标节点ID。

> 仅当[GenerateConfigRuleReport](~~433313~~)和当前API的请求参数中同时指定了`TargetType`和`TargetId`时，才会返回该参数。',
                    'type' => 'string',
                    'example' => '154950938137****',
                  ),
                  'TargetType' => 
                  array (
                    'description' => '目标节点类型。取值：

- USER：当前登录账号。适用单账号模式。
- ROOT：资源目录中的Root资源夹。适用多账号模式。
- FOLDER：资源目录中的资源夹。适用多账号模式。
- ACCOUNT：资源目录中的成员。适用多账号模式。

> 仅当[GenerateConfigRuleReport](~~433313~~)和当前API的请求参数中同时指定了`TargetType`和`TargetId`，才会返回该参数。',
                    'type' => 'string',
                    'example' => 'ACCOUNT',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"A68BD5BC-5B12-5A9B-8AE9-77884886BE10\\",\\n  \\"Success\\": true,\\n  \\"HttpStatusCode\\": 200,\\n  \\"Data\\": {\\n    \\"ReportId\\": \\"crp-ao0786618088006c****\\",\\n    \\"CreatedTime\\": 1655089159000,\\n    \\"TargetId\\": \\"154950938137****\\",\\n    \\"TargetType\\": \\"ACCOUNT\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetConfigRuleReportResponse>\\n    <RequestId>A68BD5BC-5B12-5A9B-8AE9-77884886BE10</RequestId>\\n    <HttpStatusCode>200</HttpStatusCode>\\n    <Data>\\n        <CreatedTime>1655089159000</CreatedTime>\\n        <ReportId>crp-ao0786618088006c****</ReportId>\\n    </Data>\\n    <Success>true</Success>\\n</GetConfigRuleReportResponse>","errorExample":""}]',
      'title' => '查询上一次生成的不合规资源检测报告的基本信息',
      'description' => '### 使用说明
单账号模式下，当前登录账号可以查询本账号的不合规资源检测报告基本信息。多账号模式下，资源目录管理账号可以查询Root资源夹、资源夹或成员的不合规资源检测报告基本信息。关于标签策略模式的更多信息，请参见[标签策略模式](~~417434~~)。

本文将提供一个示例，在单账号模式下，查询当前登录账号的不合规资源检测报告基本信息。返回结果显示，上一次生成的不合规资源检测报告ID为`crp-ao0786618088006c****`。',
      'requestParamsDescription' => '关于公共请求参数的详情，请参见[公共参数](~~159973~~)。',
      'extraInfo' => '### 后续操作
查询不合规资源检测报告具体内容的方法如下：

- 单账号模式：先通过本API获取`ReportId`，然后调用配置审计服务的[GetConfigRulesReport](~~263608~~)查询不合规资源检测报告的具体内容。
- 多账号模式：先通过本API获取`ReportId`，然后通过[ListConfigRulesForTarget](~~433318~~)获取`AggregatorId`，最后调用配置审计服务的[GetAggregateConfigRulesReport](~~262706~~)查询不合规资源检测报告的具体内容。',
    ),
    'GenerateConfigRuleReport' => 
    array (
      'summary' => '生成不合规资源检测报告。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
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
      'operationType' => 'readAndWrite',
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。取值：cn-shanghai。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-shanghai',
            'default' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'TargetId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标节点ID。',
            'type' => 'string',
            'required' => false,
            'example' => '154950938137****',
          ),
        ),
        2 => 
        array (
          'name' => 'TargetType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标节点类型。取值：

- USER：为当前登录账号生成不合规资源的检测报告。适用单账号模式。
- ROOT：为资源目录中的Root资源夹生成不合规资源的检测报告。适用多账号模式。
- FOLDER：为资源目录中的资源夹生成不合规资源的检测报告。适用多账号模式。
- ACCOUNT：为资源目录中的成员生成不合规资源的检测报告。适用多账号模式。

> 参数取值不区分大小写。',
            'type' => 'string',
            'required' => false,
            'example' => 'ACCOUNT',
          ),
        ),
        3 => 
        array (
          'name' => 'UserType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '标签策略模式。取值：

- USER：单账号模式下的默认值。
- RD：多账号模式下的默认值。

关于标签策略模式的更多信息，请参见[标签策略模式](~~417434~~)。

> 如果资源目录的管理账号同时启用了资源目录多账号模式和管理账号单账号模式，则该参数必须设置。参数取值不区分大小写。',
            'type' => 'string',
            'required' => false,
            'example' => 'USER',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'ListResponse<PolicyModel>',
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '37B2AC06-89D8-5D95-98DF-3E68C12BDE05',
              ),
              'ReportId' => 
              array (
                'description' => '不合规资源检测报告的ID。',
                'type' => 'string',
                'example' => 'crp-ao0786618088006c****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'GlobalAggregator.NotFount',
            'errorMessage' => 'Can not find global aggregator',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoPermission.Operator	',
            'errorMessage' => 'Only the RD admin account has permission to operate',
          ),
          1 => 
          array (
            'errorCode' => 'TagPolicy.NotOpen',
            'errorMessage' => 'You have not activated the tag policy service.',
          ),
          2 => 
          array (
            'errorCode' => 'TagPolicy.PendingEnable',
            'errorMessage' => 'The tag policy status is pending enable.',
          ),
          3 => 
          array (
            'errorCode' => 'WrongEndpoint',
            'errorMessage' => 'Only the shanghai endpoint supports the operation.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"37B2AC06-89D8-5D95-98DF-3E68C12BDE05\\",\\n  \\"ReportId\\": \\"crp-ao0786618088006c****\\"\\n}","errorExample":""},{"type":"xml","example":"<GenerateConfigRuleReportResponse>\\n    <RequestId>37B2AC06-89D8-5D95-98DF-3E68C12BDE05</RequestId>\\n    <ReportId>crp-ao0786618088006c****</ReportId>\\n</GenerateConfigRuleReportResponse>","errorExample":""}]',
      'title' => '生成不合规资源检测报告',
      'description' => '### 使用说明
单账号模式下，可以生成当前登录账号的不合规资源检测报告。多账号模式下，可以生成资源目录的Root资源夹、资源夹或成员的不合规资源检测报告。关于标签策略模式的更多信息，请参见[标签策略模式](~~417434~~)。

本文将提供一个示例，在单账号模式下，生成当前登录账号的全部不合规资源的检测报告。',
      'requestParamsDescription' => '关于公共请求参数的详情，请参见[公共参数](~~159973~~)。',
    ),
    'DisablePolicyType' => 
    array (
      'summary' => '禁用管控策略。',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。

取值为`cn-shanghai`。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'cn-shanghai',
            'default' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'UserType',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        2 => 
        array (
          'name' => 'OpenType',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '6E27F22C-EDA3-132E-A53F-77DE3BC2343D',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6E27F22C-EDA3-132E-A53F-77DE3BC2343D\\"\\n}","errorExample":""},{"type":"xml","example":"<DisablePolicyTypeResponse>\\n    <RequestId>6E27F22C-EDA3-132E-A53F-77DE3BC2343D</RequestId>\\n</DisablePolicyTypeResponse>","errorExample":""}]',
      'title' => 'DisablePolicyType（暂不对外）',
      'description' => '### 使用说明
禁用标签策略后，已绑定的标签策略会自动解绑。',
      'requestParamsDescription' => '关于公共请求参数的详情，请参见[公共参数](~~159973~~)。',
    ),
    'EnablePolicyType' => 
    array (
      'summary' => '启用标签策略。',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。

取值为`cn-shanghai`。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'cn-shanghai',
            'default' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'UserType',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        2 => 
        array (
          'name' => 'OpenType',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '6E27F22C-EDA3-132E-A53F-77DE3BC2343D',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6E27F22C-EDA3-132E-A53F-77DE3BC2343D\\"\\n}","errorExample":""},{"type":"xml","example":"<EnablePolicyTypeResponse>\\n    <RequestId>6E27F22C-EDA3-132E-A53F-77DE3BC2343D</RequestId>\\n</EnablePolicyTypeResponse>","errorExample":""}]',
      'title' => 'EnablePolicyType（暂不对外）',
      'description' => '### 使用说明
您可以启用标签策略的单账号模式或多账号模式：

- 单账号模式：如果当前登录账号是独立的阿里云账号，则会启用标签策略单账号模式，管控单账号范围内的资源。

- 多账号模式：如果当前登录账号是资源目录的管理账号，则会启用标签策略多账号模式，管控资源目录范围内的资源。
  > 资源目录的成员不能启用标签策略。',
      'requestParamsDescription' => '关于公共请求参数的详情，请参见[公共参数](~~159973~~)。',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'tag.cn-hangzhou.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'cn-qingdao',
      'endpoint' => 'tag.cn-qingdao.aliyuncs.com',
    ),
    2 => 
    array (
      'regionId' => 'cn-beijing',
      'endpoint' => 'tag.cn-beijing.aliyuncs.com',
    ),
    3 => 
    array (
      'regionId' => 'cn-zhangjiakou',
      'endpoint' => 'tag.cn-zhangjiakou.aliyuncs.com',
    ),
    4 => 
    array (
      'regionId' => 'cn-zhengzhou-jva',
      'endpoint' => 'tag.cn-zhengzhou-jva.aliyuncs.com',
    ),
    5 => 
    array (
      'regionId' => 'cn-huhehaote',
      'endpoint' => 'tag.cn-huhehaote.aliyuncs.com',
    ),
    6 => 
    array (
      'regionId' => 'cn-wulanchabu',
      'endpoint' => 'tag.cn-wulanchabu.aliyuncs.com',
    ),
    7 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'tag.cn-shanghai.aliyuncs.com',
    ),
    8 => 
    array (
      'regionId' => 'cn-nanjing',
      'endpoint' => 'tag.cn-nanjing.aliyuncs.com',
    ),
    9 => 
    array (
      'regionId' => 'cn-fuzhou',
      'endpoint' => 'tag.cn-fuzhou.aliyuncs.com',
    ),
    10 => 
    array (
      'regionId' => 'cn-shenzhen',
      'endpoint' => 'tag.cn-shenzhen.aliyuncs.com',
    ),
    11 => 
    array (
      'regionId' => 'cn-heyuan',
      'endpoint' => 'tag.cn-heyuan.aliyuncs.com',
    ),
    12 => 
    array (
      'regionId' => 'cn-guangzhou',
      'endpoint' => 'tag.cn-guangzhou.aliyuncs.com',
    ),
    13 => 
    array (
      'regionId' => 'cn-chengdu',
      'endpoint' => 'tag.cn-chengdu.aliyuncs.com',
    ),
    14 => 
    array (
      'regionId' => 'cn-hongkong',
      'endpoint' => 'tag.cn-hongkong.aliyuncs.com',
    ),
    15 => 
    array (
      'regionId' => 'ap-northeast-1',
      'endpoint' => 'tag.ap-northeast-1.aliyuncs.com',
    ),
    16 => 
    array (
      'regionId' => 'ap-northeast-2',
      'endpoint' => 'tag.ap-northeast-2.aliyuncs.com',
    ),
    17 => 
    array (
      'regionId' => 'ap-southeast-1',
      'endpoint' => 'tag.ap-southeast-1.aliyuncs.com',
    ),
    18 => 
    array (
      'regionId' => 'ap-southeast-2',
      'endpoint' => 'tag.ap-southeast-2.aliyuncs.com',
    ),
    19 => 
    array (
      'regionId' => 'ap-southeast-3',
      'endpoint' => 'tag.ap-southeast-3.aliyuncs.com',
    ),
    20 => 
    array (
      'regionId' => 'ap-southeast-5',
      'endpoint' => 'tag.ap-southeast-5.aliyuncs.com',
    ),
    21 => 
    array (
      'regionId' => 'ap-southeast-6',
      'endpoint' => 'tag.ap-southeast-6.aliyuncs.com',
    ),
    22 => 
    array (
      'regionId' => 'us-east-1',
      'endpoint' => 'tag.us-east-1.aliyuncs.com',
    ),
    23 => 
    array (
      'regionId' => 'us-west-1',
      'endpoint' => 'tag.us-west-1.aliyuncs.com',
    ),
    24 => 
    array (
      'regionId' => 'eu-west-1',
      'endpoint' => 'tag.eu-west-1.aliyuncs.com',
    ),
    25 => 
    array (
      'regionId' => 'eu-central-1',
      'endpoint' => 'tag.eu-central-1.aliyuncs.com',
    ),
    26 => 
    array (
      'regionId' => 'ap-south-1',
      'endpoint' => 'tag.ap-south-1.aliyuncs.com',
    ),
    27 => 
    array (
      'regionId' => 'me-east-1',
      'endpoint' => 'tag.me-east-1.aliyuncs.com',
    ),
    28 => 
    array (
      'regionId' => 'cn-hangzhou-finance',
      'endpoint' => 'tag.aliyuncs.com',
    ),
    29 => 
    array (
      'regionId' => 'cn-shanghai-finance-1',
      'endpoint' => 'tag.cn-shanghai-finance-1.aliyuncs.com',
    ),
    30 => 
    array (
      'regionId' => 'cn-shenzhen-finance-1',
      'endpoint' => 'tag.cn-shenzhen-finance-1.aliyuncs.com',
    ),
    31 => 
    array (
      'regionId' => 'ap-southeast-7',
      'endpoint' => 'tag.ap-southeast-7.aliyuncs.com',
    ),
    32 => 
    array (
      'regionId' => 'cn-beijing-finance-1',
      'endpoint' => 'tag.cn-beijing-finance-1.aliyuncs.com',
    ),
    33 => 
    array (
      'regionId' => 'me-central-1',
      'endpoint' => 'tag.me-central-1.aliyuncs.com',
    ),
  ),
);
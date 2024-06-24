<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'EhpcInstant',
    'version' => '2023-07-01',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 191523,
      'title' => '镜像',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'AddImage',
        1 => 'GetImage',
        2 => 'ListImages',
        3 => 'RemoveImage',
      ),
    ),
    1 => 
    array (
      'id' => 191528,
      'title' => '作业',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateJob',
        1 => 'GetJob',
        2 => 'ListJobs',
        3 => 'DeleteJobs',
        4 => 'ListJobExecutors',
        5 => 'ListExecutors',
      ),
    ),
    2 => 
    array (
      'id' => 191535,
      'title' => '监控',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeJobMetricData',
        1 => 'DescribeJobMetricLast',
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
    'AddImage' => 
    array (
      'summary' => '添加用户自定义镜像。',
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
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '219054',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREehpcJ9X8D4',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '镜像名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'app-image
',
          ),
        ),
        1 => 
        array (
          'name' => 'ImageVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '镜像版本。',
            'type' => 'string',
            'required' => false,
            'example' => 'V1.0',
          ),
        ),
        2 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '镜像描述。',
            'type' => 'string',
            'required' => false,
            'example' => '应用测试镜像。
',
          ),
        ),
        3 => 
        array (
          'name' => 'ContainerImageSpec',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '容器镜像配置。',
            'type' => 'object',
            'properties' => 
            array (
              'RegistryUrl' => 
              array (
                'description' => '容器镜像访问链接。',
                'type' => 'string',
                'required' => false,
                'example' => 'registry-vpc.cn-hangzhou.aliyuncs.com/ehpc_open/nginx:latest
',
              ),
              'IsACRRegistry' => 
              array (
                'description' => '是否为阿里云镜像仓库。

- True：是。
- False：否。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'True',
              ),
              'IsACREnterprise' => 
              array (
                'description' => '是否为阿里云镜像仓库企业版。

- True：是。
- False：否。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'True',
              ),
              'RegistryCriId' => 
              array (
                'description' => '企业版镜像仓库 ID。',
                'type' => 'string',
                'required' => false,
                'example' => 'cri-xyz795ygf8k9****
',
              ),
              'RegistryCredential' => 
              array (
                'description' => '私有镜像仓库鉴权。',
                'type' => 'object',
                'properties' => 
                array (
                  'Server' => 
                  array (
                    'description' => '镜像仓库的注册地址。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'registry-vpc.cn-hangzhou.aliyuncs.com
',
                  ),
                  'UserName' => 
                  array (
                    'description' => '登录用户名。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'username',
                  ),
                  'Password' => 
                  array (
                    'description' => '登录密码。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'userpassword',
                  ),
                ),
                'required' => false,
              ),
            ),
            'required' => false,
          ),
        ),
        4 => 
        array (
          'name' => 'VMImageSpec',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '虚拟机镜像配置。',
            'type' => 'object',
            'properties' => 
            array (
              'ImageId' => 
              array (
                'description' => '镜像 ID。',
                'type' => 'string',
                'required' => false,
                'example' => 'm-bp1akkkr1rkxtb******
',
              ),
            ),
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
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求 ID。',
                'type' => 'string',
                'example' => '04F0F334-1335-436C-A1D7-6C044FE73368
',
              ),
              'Success' => 
              array (
                'description' => '执行命令并获取结果的过程是否成功。取值范围：

- true：成功。
- false：失败。',
                'type' => 'boolean',
                'example' => 'True',
              ),
              'ImageId' => 
              array (
                'title' => 'Id of the request',
                'description' => '镜像 ID。',
                'type' => 'string',
                'example' => 'm-bp1akkkr1rkxtb******
',
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
            'errorCode' => 'InvalidParams',
            'errorMessage' => 'The specified parameter %s is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'ImageAlreadyExists',
            'errorMessage' => 'The image id already exists.',
          ),
          2 => 
          array (
            'errorCode' => 'InDebt',
            'errorMessage' => 'Your account has overdue payments.',
          ),
          3 => 
          array (
            'errorCode' => 'NotEnabled',
            'errorMessage' => 'You have not enabled this service.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'ImageInUse',
            'errorMessage' => 'Image is still used by jobs.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ImageNotFound',
            'errorMessage' => 'The specified image does not exist.',
          ),
        ),
        406 => 
        array (
          0 => 
          array (
            'errorCode' => 'EcsError',
            'errorMessage' => 'An error occurred while calling the ECS API operation.',
          ),
          1 => 
          array (
            'errorCode' => 'AliyunError',
            'errorMessage' => 'An Alibaba Cloud product error occurred.',
          ),
          2 => 
          array (
            'errorCode' => 'DbError',
            'errorMessage' => 'A database error occurred.',
          ),
        ),
        407 => 
        array (
          0 => 
          array (
            'errorCode' => 'NotAuthorized',
            'errorMessage' => 'No authorization is granted.',
          ),
        ),
        503 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceUnavailable',
            'errorMessage' => 'The request has failed due to a temporary failure of the server.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"04F0F334-1335-436C-A1D7-6C044FE73368\\\\n\\",\\n  \\"Success\\": true,\\n  \\"ImageId\\": \\"m-bp1akkkr1rkxtb******\\\\n\\"\\n}","type":"json"}]',
      'title' => '添加镜像',
    ),
    'GetImage' => 
    array (
      'summary' => '获取镜像详情。',
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
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '219057',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREehpcJ9X8D4',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ImageCategory',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'ImageType',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        2 => 
        array (
          'name' => 'ImageId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '镜像ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'm-2ze74g5mvy4pjg*****',
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
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '04F0F334-1335-436C-A1D7-6C044FE73368
',
              ),
              'Success' => 
              array (
                'description' => '执行命令并获取结果的过程是否成功。取值范围：

- true：成功。
- false：失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'TotalCount' => 
              array (
                'title' => 'TotalCount本次请求条件下的数据总量，此参数为可选参数，默认可不返回',
                'description' => '本次请求条件下的数据总量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'Image' => 
              array (
                'title' => 'Image',
                'description' => '镜像详情。',
                'type' => 'object',
                'properties' => 
                array (
                  'ImageType' => 
                  array (
                    'description' => '镜像类型。',
                    'type' => 'string',
                    'required' => true,
                    'example' => 'VM',
                  ),
                  'AppId' => 
                  array (
                    'type' => 'string',
                  ),
                  'Name' => 
                  array (
                    'description' => '镜像名称。',
                    'type' => 'string',
                    'example' => 'app-image',
                  ),
                  'Version' => 
                  array (
                    'description' => '版本。',
                    'type' => 'string',
                    'example' => 'v1.0',
                  ),
                  'Description' => 
                  array (
                    'description' => '镜像描述。',
                    'type' => 'string',
                    'example' => '应用测试镜像。',
                  ),
                  'Size' => 
                  array (
                    'description' => '镜像大小。单位：GiB。',
                    'type' => 'string',
                    'example' => '40 GiB',
                  ),
                  'CreateTime' => 
                  array (
                    'description' => '镜像创建时间。',
                    'type' => 'string',
                    'example' => '2022-12-23T09:51:39Z',
                  ),
                  'Status' => 
                  array (
                    'type' => 'string',
                  ),
                  'ContainerImageSpec' => 
                  array (
                    'description' => '容器镜像配置详情。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'RegistryUrl' => 
                      array (
                        'description' => '容器镜像访问链接。',
                        'type' => 'string',
                        'example' => 'registry-vpc.cn-hangzhou.aliyuncs.com/ehpc_open/nginx:latest',
                      ),
                      'IsACRRegistry' => 
                      array (
                        'description' => '是否为阿里云镜像仓库。

- True：是。
- False：否。',
                        'type' => 'boolean',
                        'example' => 'True',
                      ),
                      'IsACREnterprise' => 
                      array (
                        'description' => '是否为阿里云镜像仓库企业版。

- True：是。
- False：否。',
                        'type' => 'boolean',
                        'example' => 'True',
                      ),
                      'RegistryCriId' => 
                      array (
                        'description' => '企业版镜像仓库ID。',
                        'type' => 'string',
                        'example' => 'cri-xyz795ygf8k9****',
                      ),
                      'RegistryCredential' => 
                      array (
                        'description' => '私有镜像仓库鉴权。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Server' => 
                          array (
                            'description' => '镜像仓库的注册地址。',
                            'type' => 'string',
                            'example' => 'registry-vpc.cn-hangzhou.aliyuncs.com',
                          ),
                          'UserName' => 
                          array (
                            'description' => '登录用户名。',
                            'type' => 'string',
                            'example' => 'username',
                          ),
                          'Password' => 
                          array (
                            'description' => '登录用户密码。',
                            'type' => 'string',
                            'example' => 'userpassword',
                          ),
                        ),
                      ),
                    ),
                  ),
                  'VMImageSpec' => 
                  array (
                    'description' => '虚拟机镜像配置详情。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'ImageId' => 
                      array (
                        'description' => '镜像ID。',
                        'type' => 'string',
                        'example' => 'm-uf60twafjtaart******',
                      ),
                      'OsTag' => 
                      array (
                        'description' => 'OS具体版本标识。',
                        'type' => 'string',
                        'example' => 'CentOS  7.6 64 bit',
                      ),
                      'Platform' => 
                      array (
                        'description' => '平台类型。',
                        'type' => 'string',
                        'example' => 'CentOS',
                      ),
                      'Architecture' => 
                      array (
                        'description' => '架构类型。',
                        'type' => 'string',
                        'example' => 'x86_64',
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
            'errorCode' => 'InvalidParams',
            'errorMessage' => 'The specified parameter %s is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'NotEnabled',
            'errorMessage' => 'You have not enabled this service.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ImageNotFound',
            'errorMessage' => 'The specified image does not exist.',
          ),
        ),
        406 => 
        array (
          0 => 
          array (
            'errorCode' => 'EcsError',
            'errorMessage' => 'An error occurred while calling the ECS API operation.',
          ),
          1 => 
          array (
            'errorCode' => 'AliyunError',
            'errorMessage' => 'An Alibaba Cloud product error occurred.',
          ),
          2 => 
          array (
            'errorCode' => 'DbError',
            'errorMessage' => 'A database error occurred.',
          ),
        ),
        407 => 
        array (
          0 => 
          array (
            'errorCode' => 'NotAuthorized',
            'errorMessage' => 'No authorization is granted.',
          ),
        ),
        503 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceUnavailable',
            'errorMessage' => 'The request has failed due to a temporary failure of the server.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"04F0F334-1335-436C-A1D7-6C044FE73368\\\\n\\",\\n  \\"Success\\": true,\\n  \\"TotalCount\\": 10,\\n  \\"Image\\": {\\n    \\"ImageType\\": \\"VM\\",\\n    \\"AppId\\": \\"\\",\\n    \\"Name\\": \\"app-image\\",\\n    \\"Version\\": \\"v1.0\\",\\n    \\"Description\\": \\"应用测试镜像。\\",\\n    \\"Size\\": \\"40 GiB\\",\\n    \\"CreateTime\\": \\"2022-12-23T09:51:39Z\\",\\n    \\"Status\\": \\"\\",\\n    \\"ContainerImageSpec\\": {\\n      \\"RegistryUrl\\": \\"registry-vpc.cn-hangzhou.aliyuncs.com/ehpc_open/nginx:latest\\",\\n      \\"IsACRRegistry\\": true,\\n      \\"IsACREnterprise\\": true,\\n      \\"RegistryCriId\\": \\"cri-xyz795ygf8k9****\\",\\n      \\"RegistryCredential\\": {\\n        \\"Server\\": \\"registry-vpc.cn-hangzhou.aliyuncs.com\\",\\n        \\"UserName\\": \\"username\\",\\n        \\"Password\\": \\"userpassword\\"\\n      }\\n    },\\n    \\"VMImageSpec\\": {\\n      \\"ImageId\\": \\"m-uf60twafjtaart******\\",\\n      \\"OsTag\\": \\"CentOS  7.6 64 bit\\",\\n      \\"Platform\\": \\"CentOS\\",\\n      \\"Architecture\\": \\"x86_64\\"\\n    }\\n  }\\n}","type":"json"}]',
      'title' => '获取镜像详情',
    ),
    'ListImages' => 
    array (
      'summary' => '查询镜像列表。',
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
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '219055',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREehpcJ9X8D4',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前页码。    
默认值：1。',
            'type' => 'integer',
            'format' => 'int64',
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
            'description' => '每页条数。    
默认值：20。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '10',
          ),
        ),
        2 => 
        array (
          'name' => 'ImageCategory',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        3 => 
        array (
          'name' => 'ImageType',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        4 => 
        array (
          'name' => 'ImageIds',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '镜像ID数组。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '镜像ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'm-uf6bzz76jb4ai9******',
            ),
            'required' => false,
          ),
        ),
        5 => 
        array (
          'name' => 'ImageNames',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '镜像名称数组。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '镜像名称。',
              'type' => 'string',
              'required' => false,
              'example' => 'appimage',
            ),
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
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '896D338C-E4F4-41EC-A154-D605E5DE****',
              ),
              'Success' => 
              array (
                'description' => '执行命令并获取结果的过程是否成功。取值范围：

- true：成功。
- false：失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'TotalCount' => 
              array (
                'title' => 'TotalCount本次请求条件下的数据总量，此参数为可选参数，默认可不返回',
                'description' => '本次请求条件下的数据总量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'title' => 'PageSize',
                'description' => '每页条数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '20',
              ),
              'PageNumber' => 
              array (
                'title' => 'PageNumber',
                'description' => '当前页码。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'Images' => 
              array (
                'title' => 'Images',
                'description' => '镜像信息列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '镜像信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ImageType' => 
                    array (
                      'description' => '镜像类型。',
                      'type' => 'string',
                      'required' => true,
                      'example' => 'VM',
                    ),
                    'ImageId' => 
                    array (
                      'description' => '镜像ID。',
                      'type' => 'string',
                      'required' => true,
                      'example' => 'm-bp181x855551ww5yq****',
                    ),
                    'AppId' => 
                    array (
                      'type' => 'string',
                      'required' => true,
                    ),
                    'Name' => 
                    array (
                      'description' => '镜像名称。',
                      'type' => 'string',
                      'example' => 'app-image',
                    ),
                    'Version' => 
                    array (
                      'description' => '镜像版本。',
                      'type' => 'string',
                      'example' => 'v1.0',
                    ),
                    'Description' => 
                    array (
                      'description' => '镜像描述。',
                      'type' => 'string',
                      'example' => '应用测试镜像。',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '创建时间。',
                      'type' => 'string',
                      'example' => '2022-12-09T07:06:34Z',
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
            'errorCode' => 'InvalidParams',
            'errorMessage' => 'The specified parameter %s is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'InDebt',
            'errorMessage' => 'Your account has overdue payments.',
          ),
          2 => 
          array (
            'errorCode' => 'NotEnabled',
            'errorMessage' => 'You have not enabled this service.',
          ),
        ),
        406 => 
        array (
          0 => 
          array (
            'errorCode' => 'EcsError',
            'errorMessage' => 'An error occurred while calling the ECS API operation.',
          ),
          1 => 
          array (
            'errorCode' => 'AliyunError',
            'errorMessage' => 'An Alibaba Cloud product error occurred.',
          ),
          2 => 
          array (
            'errorCode' => 'DbError',
            'errorMessage' => 'A database error occurred.',
          ),
        ),
        407 => 
        array (
          0 => 
          array (
            'errorCode' => 'NotAuthorized',
            'errorMessage' => 'No authorization is granted.',
          ),
        ),
        503 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceUnavailable',
            'errorMessage' => 'The request has failed due to a temporary failure of the server.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"896D338C-E4F4-41EC-A154-D605E5DE****\\",\\n  \\"Success\\": true,\\n  \\"TotalCount\\": 1,\\n  \\"PageSize\\": 20,\\n  \\"PageNumber\\": 1,\\n  \\"Images\\": [\\n    {\\n      \\"ImageType\\": \\"VM\\",\\n      \\"ImageId\\": \\"m-bp181x855551ww5yq****\\",\\n      \\"AppId\\": \\"\\",\\n      \\"Name\\": \\"app-image\\",\\n      \\"Version\\": \\"v1.0\\",\\n      \\"Description\\": \\"应用测试镜像。\\",\\n      \\"CreateTime\\": \\"2022-12-09T07:06:34Z\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询镜像列表',
    ),
    'RemoveImage' => 
    array (
      'summary' => '移除用户自定义镜像。',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '219056',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREehpcJ9X8D4',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ImageId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '镜像ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'm-bp14wakr1rkxtb******',
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
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '896D338C-E4F4-41EC-A154-D605E5DE****',
              ),
              'Success' => 
              array (
                'description' => '执行命令并获取结果的过程是否成功。取值范围：

- true：成功。
- false：失败。',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorCode' => 'InvalidParams',
            'errorMessage' => 'The specified parameter %s is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'ImageAlreadyExists',
            'errorMessage' => 'The image id already exists.',
          ),
          2 => 
          array (
            'errorCode' => 'NotEnabled',
            'errorMessage' => 'You have not enabled this service.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'ImageInUse',
            'errorMessage' => 'Image is still used by jobs.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ImageNotFound',
            'errorMessage' => 'The specified image does not exist.',
          ),
        ),
        406 => 
        array (
          0 => 
          array (
            'errorCode' => 'EcsError',
            'errorMessage' => 'An error occurred while calling the ECS API operation.',
          ),
          1 => 
          array (
            'errorCode' => 'AliyunError',
            'errorMessage' => 'An Alibaba Cloud product error occurred.',
          ),
          2 => 
          array (
            'errorCode' => 'DbError',
            'errorMessage' => 'A database error occurred.',
          ),
        ),
        407 => 
        array (
          0 => 
          array (
            'errorCode' => 'NotAuthorized',
            'errorMessage' => 'No authorization is granted.',
          ),
        ),
        503 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceUnavailable',
            'errorMessage' => 'The request has failed due to a temporary failure of the server.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"896D338C-E4F4-41EC-A154-D605E5DE****\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '移除镜像',
    ),
    'CreateJob' => 
    array (
      'summary' => '创建一个E-HPC Instant 作业。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
        'riskType' => 'none',
        'chargeType' => 'paid',
        'abilityTreeCode' => '219052',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREehpcAU9WIU',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'JobName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '作业名称。最大长度为10。',
            'type' => 'string',
            'required' => true,
            'example' => 'testjob',
          ),
        ),
        1 => 
        array (
          'name' => 'JobDescription',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '作业描述。',
            'type' => 'string',
            'required' => false,
            'example' => 'Demo',
          ),
        ),
        2 => 
        array (
          'name' => 'Tasks',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '任务列表，当前仅支持1个任务。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '任务详情。',
              'type' => 'object',
              'properties' => 
              array (
                'TaskName' => 
                array (
                  'description' => '任务名称。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'task0',
                ),
                'TaskSpec' => 
                array (
                  'description' => '任务规格详情。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'TaskExecutor' => 
                    array (
                      'description' => '任务执行配置。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '任务执行配置。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Container' => 
                          array (
                            'description' => '使用容器实例。',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'Image' => 
                              array (
                                'description' => '容器镜像。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'registry-vpc.cn-hangzhou.aliyuncs.com/ehpc/hpl:latest',
                              ),
                              'WorkingDir' => 
                              array (
                                'description' => '容器工作目录。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '/usr/local/',
                              ),
                              'Command' => 
                              array (
                                'description' => '容器启动命令列表。最多20个命令，单个命令最长256个字符。    
> 当启动命令包含空格时（例如：`sleep 60s`），传入的JSON格式参数为`["sleep", "60s"]`。',
                                'type' => 'array',
                                'items' => 
                                array (
                                  'description' => '容器启动命令内容。每个命令最多包含256个字符。',
                                  'type' => 'string',
                                  'required' => false,
                                  'example' => 'sleep',
                                ),
                                'required' => false,
                              ),
                              'EnvironmentVars' => 
                              array (
                                'description' => '容器的环境变量。最多20组。',
                                'type' => 'array',
                                'items' => 
                                array (
                                  'description' => '容器的环境变量。最多20组。',
                                  'type' => 'object',
                                  'properties' => 
                                  array (
                                    'Name' => 
                                    array (
                                      'description' => '环境变量名。长度为 1~128 位。格式要求：[0-9a-zA-Z]，以及下划线，不能以数字开头。',
                                      'type' => 'string',
                                      'required' => false,
                                      'example' => 'PATH',
                                    ),
                                    'Value' => 
                                    array (
                                      'description' => '环境变量值。长度为 0~256 位。',
                                      'type' => 'string',
                                      'required' => false,
                                      'example' => '/usr/local/bin',
                                    ),
                                  ),
                                  'required' => false,
                                ),
                                'required' => false,
                              ),
                              'AppId' => 
                              array (
                                'description' => 'VM应用ID。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'ci-vm-32k6LXAi3cOG',
                              ),
                            ),
                            'required' => false,
                          ),
                          'VM' => 
                          array (
                            'description' => '使用ECS实例。',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'Image' => 
                              array (
                                'description' => '镜像ID。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'm-xxxx',
                              ),
                              'PrologScript' => 
                              array (
                                'description' => '前处理脚本。需Base64编码。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'ZWNobyBoZWxsbyBlY3Mh',
                              ),
                              'Script' => 
                              array (
                                'description' => '运行作业脚本。需Base64编码。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'ZWNobyBoZWxsbyBlY3Mh',
                              ),
                              'AppId' => 
                              array (
                                'description' => '容器应用ID',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'ci-vm-9jc58Pm5Leky',
                              ),
                            ),
                            'required' => false,
                          ),
                        ),
                        'required' => false,
                      ),
                      'required' => true,
                    ),
                    'VolumeMount' => 
                    array (
                      'description' => '容器挂载的数据卷列表。最多10组。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '容器挂载的数据卷信息。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'MountPath' => 
                          array (
                            'description' => '容器挂载数据卷的目录。

> 容器挂载目录下的内容会被Volume的内容直接覆盖，请谨慎使用。',
                            'type' => 'string',
                            'required' => false,
                            'example' => '/mnt',
                          ),
                          'VolumeDriver' => 
                          array (
                            'description' => '当前支持的数据卷类型。取值为`alicloud/nas`，表示挂载 NAS。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'alicloud/nas',
                          ),
                          'MountOptions' => 
                          array (
                            'description' => '数据卷挂载参数列表。为KV形式，采用JSON传递。',
                            'type' => 'string',
                            'required' => false,
                            'example' => '{"server":"xxxxx-xxxxx.cn-heyuan.nas.aliyuncs.com","vers":"3","path":"/data","options":"nolock,tcp,noresvport"}',
                          ),
                        ),
                        'required' => false,
                      ),
                      'required' => false,
                    ),
                    'Resource' => 
                    array (
                      'description' => '资源信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Cores' => 
                        array (
                          'description' => '运行作业的CPU个数。',
                          'type' => 'number',
                          'format' => 'float',
                          'required' => false,
                          'example' => '2',
                        ),
                        'Memory' => 
                        array (
                          'description' => '运行作业的内存大小。单位为GiB。',
                          'type' => 'number',
                          'format' => 'float',
                          'required' => false,
                          'example' => '4',
                        ),
                        'Disks' => 
                        array (
                          'description' => '云盘数组。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '云盘数组。',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'Type' => 
                              array (
                                'description' => '云盘类型。目前仅支持System，表示系统盘。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'System',
                              ),
                              'Size' => 
                              array (
                                'description' => '云盘大小。单位为GiB。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '40',
                              ),
                            ),
                            'required' => false,
                          ),
                          'required' => false,
                        ),
                      ),
                      'required' => false,
                    ),
                  ),
                  'required' => false,
                ),
                'ExecutorPolicy' => 
                array (
                  'description' => '任务执行策略。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'MaxCount' => 
                    array (
                      'description' => '作业运行最大节点数。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'required' => false,
                      'example' => '1',
                    ),
                    'ArraySpec' => 
                    array (
                      'description' => '数组作业详情。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'IndexStart' => 
                        array (
                          'description' => '数组作业索引的起始值。取值范围：0~4999。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'required' => false,
                          'example' => '0',
                        ),
                        'IndexEnd' => 
                        array (
                          'description' => '数组作业索引的结束值。取值范围：0~4999，且大于等于IndexStart。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'required' => false,
                          'example' => '9',
                        ),
                        'IndexStep' => 
                        array (
                          'description' => '数组作业索引的间隔。
> 若数组作业属性为IndexStart=1,IndexEnd=5,IndexStep=2，则该数组作业包含三个子任务，子任务索引分别为1,3,5。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'required' => false,
                          'example' => '1',
                        ),
                      ),
                      'required' => false,
                    ),
                  ),
                  'required' => false,
                ),
                'TaskSustainable' => 
                array (
                  'description' => '是否是长时间运行的作业。',
                  'type' => 'boolean',
                  'required' => false,
                  'example' => 'true',
                ),
              ),
              'required' => false,
            ),
            'required' => true,
            'minItems' => 1,
          ),
        ),
        3 => 
        array (
          'name' => 'DeploymentPolicy',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '资源部署策略。',
            'type' => 'object',
            'properties' => 
            array (
              'AllocationSpec' => 
              array (
                'description' => '资源类型。当前仅支持Dedicated，需开通白名单使用。',
                'type' => 'string',
                'required' => false,
                'example' => 'Dedicated',
              ),
              'Network' => 
              array (
                'description' => '网络配置信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'Vswitch' => 
                  array (
                    'description' => '交换机数组。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '交换机ID。',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'vsw-xxxx',
                    ),
                    'required' => false,
                  ),
                ),
                'required' => false,
              ),
            ),
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
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '896D338C-E4F4-41EC-A154-D605E5DE****',
              ),
              'JobId' => 
              array (
                'description' => '作业ID。',
                'type' => 'string',
                'example' => 'job-xxxx',
              ),
              'Tasks' => 
              array (
                'description' => '任务列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '任务列表详情。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'TaskName' => 
                    array (
                      'description' => '任务名称。',
                      'type' => 'string',
                      'example' => 'task0',
                    ),
                    'ExecutorIds' => 
                    array (
                      'description' => '任务包含的Executor ID列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => 'Executor ID。格式为JobId-TaskName-ArrayIndex。',
                        'type' => 'string',
                        'example' => '[\\"job-xxxx-task0_11-2\\"]',
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
            'errorCode' => 'InvalidParams',
            'errorMessage' => 'The specified parameter %s is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'InDebt',
            'errorMessage' => 'Your account has overdue payments.',
          ),
          2 => 
          array (
            'errorCode' => 'NotEnabled',
            'errorMessage' => 'You have not enabled this service.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'GetResourceFailed',
            'errorMessage' => 'Failed to get resource.',
          ),
          1 => 
          array (
            'errorCode' => 'RecommendEmpty.InstanceTypeSoldOut',
            'errorMessage' => 'The resource is out of stock.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ImageNotFound',
            'errorMessage' => 'The specified image does not exist.',
          ),
        ),
        406 => 
        array (
          0 => 
          array (
            'errorCode' => 'AliyunError',
            'errorMessage' => 'An Alibaba Cloud product error occurred.',
          ),
          1 => 
          array (
            'errorCode' => 'EcsError',
            'errorMessage' => 'An error occurred while calling the ECS API operation.',
          ),
          2 => 
          array (
            'errorCode' => 'DbError',
            'errorMessage' => 'A database error occurred.',
          ),
        ),
        503 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceUnavailable',
            'errorMessage' => 'The request has failed due to a temporary failure of the server.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"896D338C-E4F4-41EC-A154-D605E5DE****\\",\\n  \\"JobId\\": \\"job-xxxx\\",\\n  \\"Tasks\\": [\\n    {\\n      \\"TaskName\\": \\"task0\\",\\n      \\"ExecutorIds\\": [\\n        \\"[\\\\\\\\\\\\\\"job-xxxx-task0_11-2\\\\\\\\\\\\\\"]\\"\\n      ]\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '创建作业',
    ),
    'GetJob' => 
    array (
      'summary' => '获取执行作业详情。',
      'methods' => 
      array (
        0 => 'post',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '219050',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREehpcAU9WIU',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'JobId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '作业ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'job-xxxx',
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
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '896D338C-E4F4-41EC-A154-D605E5DE****',
              ),
              'JobInfo' => 
              array (
                'description' => '作业详细信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'JobId' => 
                  array (
                    'description' => '作业ID。',
                    'type' => 'string',
                    'example' => 'job-xxxx',
                  ),
                  'JobName' => 
                  array (
                    'description' => '作业名称。',
                    'type' => 'string',
                    'example' => 'testJob',
                  ),
                  'JobDescription' => 
                  array (
                    'description' => '作业描述。',
                    'type' => 'string',
                    'example' => 'Demo',
                  ),
                  'Tasks' => 
                  array (
                    'description' => '任务列表，当前仅支持1个任务。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '任务列表，当前仅支持1个任务。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'TaskName' => 
                        array (
                          'description' => '任务名称。',
                          'type' => 'string',
                          'example' => 'task0',
                        ),
                        'TaskSpec' => 
                        array (
                          'description' => '任务规格详情。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'TaskExecutor' => 
                            array (
                              'description' => '任务执行配置。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '任务执行配置。',
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'VM' => 
                                  array (
                                    'description' => '使用ECS实例。',
                                    'type' => 'object',
                                    'properties' => 
                                    array (
                                      'Image' => 
                                      array (
                                        'description' => '镜像ID。',
                                        'type' => 'string',
                                        'example' => 'm-xxxx',
                                      ),
                                      'PrologScript' => 
                                      array (
                                        'description' => '前处理脚本。需Base64编码。',
                                        'type' => 'string',
                                        'example' => 'ZWNobyAiMTIzNCIgPiBgZGF0ZSArJXNg',
                                      ),
                                      'Script' => 
                                      array (
                                        'description' => '运行作业脚本。需Base64编码。',
                                        'type' => 'string',
                                        'example' => 'ZWNobyAiMTIzNCIgPiBgZGF0ZSArJXNg',
                                      ),
                                    ),
                                  ),
                                ),
                              ),
                            ),
                            'Resource' => 
                            array (
                              'description' => '资源信息。',
                              'type' => 'object',
                              'properties' => 
                              array (
                                'Cores' => 
                                array (
                                  'description' => '运行作业的CPU个数。',
                                  'type' => 'number',
                                  'format' => 'float',
                                  'example' => '1',
                                ),
                                'Memory' => 
                                array (
                                  'description' => '内存资源总量。单位：GiB。',
                                  'type' => 'integer',
                                  'format' => 'int32',
                                  'example' => '4',
                                ),
                                'Disks' => 
                                array (
                                  'description' => '云盘数组。',
                                  'type' => 'array',
                                  'items' => 
                                  array (
                                    'description' => '云盘数组。',
                                    'type' => 'object',
                                    'properties' => 
                                    array (
                                      'Type' => 
                                      array (
                                        'description' => '云盘类型。支持以下类型：

- System：系统盘。
- Data：数据盘。',
                                        'type' => 'string',
                                        'example' => 'System',
                                      ),
                                      'Size' => 
                                      array (
                                        'description' => '云盘大小。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '100',
                                      ),
                                    ),
                                  ),
                                ),
                              ),
                            ),
                          ),
                        ),
                        'ExecutorPolicy' => 
                        array (
                          'description' => '任务执行策略。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'MaxCount' => 
                            array (
                              'description' => '作业运行最大节点数。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '10',
                            ),
                            'ArraySpec' => 
                            array (
                              'description' => '数组作业详情。',
                              'type' => 'object',
                              'properties' => 
                              array (
                                'IndexStart' => 
                                array (
                                  'description' => '数组作业索引的起始值。取值范围：0~4999。',
                                  'type' => 'integer',
                                  'format' => 'int32',
                                  'example' => '0',
                                ),
                                'IndexEnd' => 
                                array (
                                  'description' => '数组作业索引的结束值。取值范围：0~4999，且大于等于IndexStart。',
                                  'type' => 'integer',
                                  'format' => 'int32',
                                  'example' => '9',
                                ),
                                'IndexStep' => 
                                array (
                                  'description' => '数组作业索引的间隔。
> 若数组作业属性为IndexStart=1,IndexEnd=5,IndexStep=2，则该数组作业包含三个子任务，子任务索引分别为1,3,5。',
                                  'type' => 'integer',
                                  'format' => 'int32',
                                  'example' => '1',
                                ),
                              ),
                            ),
                          ),
                        ),
                        'TaskSustainable' => 
                        array (
                          'description' => '是否是长时间运行的作业。',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'ExecutorStatus' => 
                        array (
                          'description' => '任务执行状态。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '任务执行状态。',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'ArrayId' => 
                              array (
                                'description' => '子作业ID',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                              ),
                              'Status' => 
                              array (
                                'description' => '作业状态。',
                                'type' => 'string',
                                'example' => 'Running',
                              ),
                              'StatusReason' => 
                              array (
                                'description' => '状态原因描述。',
                                'type' => 'string',
                                'example' => 'Creating executor',
                              ),
                              'CreateTime' => 
                              array (
                                'description' => '作业创建时间。',
                                'type' => 'string',
                                'example' => '2024-02-04 13:54:10',
                              ),
                              'StartTime' => 
                              array (
                                'description' => '作业开始时间。',
                                'type' => 'string',
                                'example' => '2024-02-04 13:54:10',
                              ),
                              'EndTime' => 
                              array (
                                'description' => '作业结束时间。',
                                'type' => 'string',
                                'example' => '2024-02-04 13:54:10',
                              ),
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  'DeploymentPolicy' => 
                  array (
                    'description' => '资源部署策略。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'AllocationSpec' => 
                      array (
                        'description' => '资源类型。当前仅支持Dedicated，需开通白名单使用。',
                        'type' => 'string',
                        'example' => 'Dedicated',
                      ),
                      'Network' => 
                      array (
                        'description' => '网络配置信息。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Vswitch' => 
                          array (
                            'description' => '交换机数组。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '交换机ID。',
                              'type' => 'string',
                              'example' => 'vsw-xxx',
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  'CreateTime' => 
                  array (
                    'description' => '作业提交时间。',
                    'type' => 'string',
                    'example' => '2024-03-05 20:00:46',
                  ),
                  'StartTime' => 
                  array (
                    'description' => '作业开始时间。',
                    'type' => 'string',
                    'example' => '2024-03-05 20:00:48',
                  ),
                  'EndTime' => 
                  array (
                    'description' => '作业结束时间。',
                    'type' => 'string',
                    'example' => '2024-03-05 20:01:48',
                  ),
                  'Status' => 
                  array (
                    'description' => '作业状态。',
                    'type' => 'string',
                    'example' => 'Succeed',
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
            'errorCode' => 'InvalidParams',
            'errorMessage' => 'The specified parameter %s is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'JobNotFound',
            'errorMessage' => 'The specified job id is not found.',
          ),
        ),
        406 => 
        array (
          0 => 
          array (
            'errorCode' => 'DbError',
            'errorMessage' => 'A database error occurred.',
          ),
        ),
        503 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceUnavailable',
            'errorMessage' => 'The request has failed due to a temporary failure of the server.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"896D338C-E4F4-41EC-A154-D605E5DE****\\",\\n  \\"JobInfo\\": {\\n    \\"JobId\\": \\"job-xxxx\\",\\n    \\"JobName\\": \\"testJob\\",\\n    \\"JobDescription\\": \\"Demo\\",\\n    \\"Tasks\\": [\\n      {\\n        \\"TaskName\\": \\"task0\\",\\n        \\"TaskSpec\\": {\\n          \\"TaskExecutor\\": [\\n            {\\n              \\"VM\\": {\\n                \\"Image\\": \\"m-xxxx\\",\\n                \\"PrologScript\\": \\"ZWNobyAiMTIzNCIgPiBgZGF0ZSArJXNg\\",\\n                \\"Script\\": \\"ZWNobyAiMTIzNCIgPiBgZGF0ZSArJXNg\\"\\n              }\\n            }\\n          ],\\n          \\"Resource\\": {\\n            \\"Cores\\": 1,\\n            \\"Memory\\": 4,\\n            \\"Disks\\": [\\n              {\\n                \\"Type\\": \\"System\\",\\n                \\"Size\\": 100\\n              }\\n            ]\\n          }\\n        },\\n        \\"ExecutorPolicy\\": {\\n          \\"MaxCount\\": 10,\\n          \\"ArraySpec\\": {\\n            \\"IndexStart\\": 0,\\n            \\"IndexEnd\\": 9,\\n            \\"IndexStep\\": 1\\n          }\\n        },\\n        \\"TaskSustainable\\": true,\\n        \\"ExecutorStatus\\": [\\n          {\\n            \\"ArrayId\\": 0,\\n            \\"Status\\": \\"Running\\",\\n            \\"StatusReason\\": \\"Creating executor\\",\\n            \\"CreateTime\\": \\"2024-02-04 13:54:10\\",\\n            \\"StartTime\\": \\"2024-02-04 13:54:10\\",\\n            \\"EndTime\\": \\"2024-02-04 13:54:10\\"\\n          }\\n        ]\\n      }\\n    ],\\n    \\"DeploymentPolicy\\": {\\n      \\"AllocationSpec\\": \\"Dedicated\\",\\n      \\"Network\\": {\\n        \\"Vswitch\\": [\\n          \\"vsw-xxx\\"\\n        ]\\n      }\\n    },\\n    \\"CreateTime\\": \\"2024-03-05 20:00:46\\",\\n    \\"StartTime\\": \\"2024-03-05 20:00:48\\",\\n    \\"EndTime\\": \\"2024-03-05 20:01:48\\",\\n    \\"Status\\": \\"Succeed\\"\\n  }\\n}","type":"json"}]',
      'title' => '获取作业详情',
    ),
    'ListJobs' => 
    array (
      'summary' => '查询指定集群中的作业列表。',
      'methods' => 
      array (
        0 => 'post',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '219053',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREehpcAU9WIU',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时设置的本页条数。 默认50，最大100。',
            'type' => 'string',
            'required' => false,
            'example' => '50',
          ),
        ),
        1 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前页码。

起始值：1

默认值：1',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'Filter',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '查询作业过滤条件。',
            'type' => 'object',
            'properties' => 
            array (
              'JobName' => 
              array (
                'description' => '作业名称。支持模糊查询。',
                'type' => 'string',
                'required' => false,
                'example' => 'testJob',
              ),
              'JobId' => 
              array (
                'description' => '作业ID。',
                'type' => 'string',
                'required' => false,
                'example' => 'job-xxxx',
              ),
              'TimeCreatedAfter' => 
              array (
                'description' => '在此时间之后提交的作业，以所在地域的时间转化为（国内站为东八区）Unix时间戳。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '1703819914',
              ),
              'TimeCreatedBefore' => 
              array (
                'description' => '在此时间之前提交的作业，以所在地域的时间转化为（国内站为东八区）Unix时间戳。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '1703820113',
              ),
              'Status' => 
              array (
                'description' => '作业状态。取值范围：

- Pending：作业排队中
- Initing：作业初始化中
- Succeed：作业运行成功
- Failed：作业运行失败
- Running：作业运行中
- Exception：调度异常
- Retrying：作业重试中
- Expired：作业超时
- Deleting：作业删除中
- Deleted：作业删除完成',
                'type' => 'string',
                'required' => false,
                'example' => 'Running',
              ),
            ),
            'required' => false,
          ),
        ),
        3 => 
        array (
          'name' => 'SortBy',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '排序方式。',
            'type' => 'object',
            'properties' => 
            array (
              'Label' => 
              array (
                'description' => '排序标签。取值范围：

- time_start
- job_name',
                'type' => 'string',
                'required' => false,
                'example' => 'time_start',
              ),
              'Order' => 
              array (
                'description' => '排序顺序。取值范围：

- ASC（默认值）：升序
- DESC：降序',
                'type' => 'string',
                'required' => false,
                'example' => 'ASC',
              ),
            ),
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
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'TotalCount' => 
              array (
                'title' => 'TotalCount本次请求条件下的数据总量，此参数为可选参数，默认可不返回',
                'description' => '本次请求条件下的数据总量。
此参数为可选参数，默认可不返回。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '896D338C-E4F4-41EC-A154-D605E5DE****',
              ),
              'PageSize' => 
              array (
                'description' => '分页查询时设置的本页条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'PageNumber' => 
              array (
                'title' => 'MaxResults本次请求所返回的最大记录条数',
                'description' => '当前页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'JobList' => 
              array (
                'description' => '作业列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '作业列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'JobName' => 
                    array (
                      'description' => '作业名称。',
                      'type' => 'string',
                      'example' => 'testJob',
                    ),
                    'JobId' => 
                    array (
                      'description' => '作业ID。',
                      'type' => 'string',
                      'example' => 'job-xxx',
                    ),
                    'JobDescription' => 
                    array (
                      'description' => '作业描述。',
                      'type' => 'string',
                      'example' => 'Demo',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '作业提交时间。',
                      'type' => 'string',
                      'example' => '2024-01-25 12:29:21',
                    ),
                    'OwnerUid' => 
                    array (
                      'description' => '创建人UID。',
                      'type' => 'string',
                      'example' => '129**********',
                    ),
                    'Status' => 
                    array (
                      'description' => '作业状态。可能值：
- Pending：作业排队中
- Initing：作业初始化中
- Succeed：作业运行成功
- Failed：作业运行失败
- Running：作业运行中
- Exception：调度异常
- Retrying：作业重试中
- Expired：作业超时
- Deleting：作业删除中
- Deleting：作业删除完成',
                      'type' => 'string',
                      'example' => 'Running',
                    ),
                    'TaskCount' => 
                    array (
                      'description' => '任务数量。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'ExecutorCount' => 
                    array (
                      'description' => '运行节点数量。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'StartTime' => 
                    array (
                      'description' => '作业开始时间。',
                      'type' => 'string',
                      'example' => '2024-01-25 12:29:23',
                    ),
                    'EndTime' => 
                    array (
                      'description' => '作业结束时间。',
                      'type' => 'string',
                      'example' => '2024-01-25 12:35:23',
                    ),
                    'TaskSustainable' => 
                    array (
                      'description' => '是否是长时间运行的作业。',
                      'type' => 'boolean',
                      'example' => 'true',
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
            'errorCode' => 'InvalidParams',
            'errorMessage' => 'The specified parameter %s is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'InDebt',
            'errorMessage' => 'Your account has overdue payments.',
          ),
          2 => 
          array (
            'errorCode' => 'NotEnabled',
            'errorMessage' => 'You have not enabled this service.',
          ),
        ),
        406 => 
        array (
          0 => 
          array (
            'errorCode' => 'AliyunError',
            'errorMessage' => 'An Alibaba Cloud product error occurred.',
          ),
          1 => 
          array (
            'errorCode' => 'DbError',
            'errorMessage' => 'A database error occurred.',
          ),
        ),
        503 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceUnavailable',
            'errorMessage' => 'The request has failed due to a temporary failure of the server.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"TotalCount\\": 1,\\n  \\"RequestId\\": \\"896D338C-E4F4-41EC-A154-D605E5DE****\\",\\n  \\"PageSize\\": 10,\\n  \\"PageNumber\\": 1,\\n  \\"JobList\\": [\\n    {\\n      \\"JobName\\": \\"testJob\\",\\n      \\"JobId\\": \\"job-xxx\\",\\n      \\"JobDescription\\": \\"Demo\\",\\n      \\"CreateTime\\": \\"2024-01-25 12:29:21\\",\\n      \\"OwnerUid\\": \\"129**********\\",\\n      \\"Status\\": \\"Running\\",\\n      \\"TaskCount\\": 1,\\n      \\"ExecutorCount\\": 1,\\n      \\"StartTime\\": \\"2024-01-25 12:29:23\\",\\n      \\"EndTime\\": \\"2024-01-25 12:35:23\\",\\n      \\"TaskSustainable\\": true\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询作业列表',
    ),
    'DeleteJobs' => 
    array (
      'summary' => '删除指定集群中一个或多个作业。',
      'methods' => 
      array (
        0 => 'post',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '219051',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREehpcAU9WIU',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'JobSpec',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '待删除作业信息。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '待删除作业信息。',
              'type' => 'object',
              'properties' => 
              array (
                'JobId' => 
                array (
                  'description' => '待删除的作业ID。    
您可以调用ListJobs查询作业ID。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'job-xxxx
',
                ),
                'TaskSpec' => 
                array (
                  'description' => '待删除作业的任务详情。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '待删除作业的任务详情。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'TaskName' => 
                      array (
                        'description' => '待删除的任务名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'task0',
                      ),
                      'ArrayIndex' => 
                      array (
                        'description' => '待删除的数组作业索引列表。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '数组作业索引。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'required' => false,
                          'example' => '1',
                        ),
                        'required' => false,
                      ),
                    ),
                    'required' => false,
                  ),
                  'required' => false,
                ),
              ),
              'required' => false,
            ),
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'ExecutorIds',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => 'Executor ID列表，最大支持100条。',
            'type' => 'array',
            'items' => 
            array (
              'description' => 'Executor ID。格式为JobId-TaskName-ArrayIndex。',
              'type' => 'string',
              'required' => false,
              'example' => 'job-xxxx-task0-1
',
            ),
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
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '04F0F334-1335-436C-A1D7-6C044FE7****',
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
            'errorCode' => 'InvalidParams',
            'errorMessage' => 'The specified parameter %s is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'JobNotFound',
            'errorMessage' => 'The specified job id is not found.',
          ),
        ),
        406 => 
        array (
          0 => 
          array (
            'errorCode' => 'DbError',
            'errorMessage' => 'A database error occurred.',
          ),
        ),
        503 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceUnavailable',
            'errorMessage' => 'The request has failed due to a temporary failure of the server.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"04F0F334-1335-436C-A1D7-6C044FE7****\\"\\n}","type":"json"}]',
      'title' => '删除作业',
    ),
    'ListJobExecutors' => 
    array (
      'summary' => '查询作业Executor信息。',
      'methods' => 
      array (
        0 => 'post',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '219059',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREehpcAU9WIU',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'JobId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '作业ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'job-xxx',
          ),
        ),
        1 => 
        array (
          'name' => 'TaskName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '作业名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'task0',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页显示条数。',
            'type' => 'string',
            'required' => false,
            'example' => '10',
          ),
        ),
        3 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询的页码。',
            'type' => 'string',
            'required' => false,
            'example' => '1',
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
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '896D338C-E4F4-41EC-A154-D605E5DE****',
              ),
              'JobId' => 
              array (
                'description' => '作业ID。',
                'type' => 'string',
                'example' => 'job-xxxx',
              ),
              'TaskName' => 
              array (
                'description' => '作业名称。',
                'type' => 'string',
                'example' => 'task0',
              ),
              'PageSize' => 
              array (
                'description' => '每页条数。',
                'type' => 'string',
                'example' => '10',
              ),
              'PageNumber' => 
              array (
                'description' => '当前页码。',
                'type' => 'string',
                'example' => '1',
              ),
              'TotalCount' => 
              array (
                'description' => '列表条目总数。',
                'type' => 'string',
                'example' => '50',
              ),
              'Executors' => 
              array (
                'description' => 'Executor列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => 'Executor属性。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ArrayIndex' => 
                    array (
                      'description' => 'Executor编号。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '0',
                    ),
                    'IpAddress' => 
                    array (
                      'description' => '节点IP地址列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '节点IP地址。',
                        'type' => 'string',
                        'example' => '192.168.10.11',
                      ),
                    ),
                    'HostName' => 
                    array (
                      'description' => '节点主机名数组。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '主机名。',
                        'type' => 'string',
                        'example' => 'host0',
                      ),
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '创建时间。',
                      'type' => 'string',
                      'example' => '2024-02-20 10:04:10',
                    ),
                    'EndTime' => 
                    array (
                      'description' => '结束时间。',
                      'type' => 'string',
                      'example' => '2024-02-20 10:04:18',
                    ),
                    'Status' => 
                    array (
                      'description' => '作业状态。可能值：
- Pending：作业排队中
- Initing：作业初始化中
- Succeed：作业运行成功
- Failed：作业运行失败
- Running：作业运行中
- Unknown：查询不到ECS/ECI状态
- Exception：资源调度异常
- Retrying：作业重试中
- Expired：作业超时
- Deleting：作业删除中
- Deleted：作业删除完成',
                      'type' => 'string',
                      'example' => 'Running',
                    ),
                    'StatusReason' => 
                    array (
                      'description' => '状态原因描述。',
                      'type' => 'string',
                      'example' => 'Creating executor',
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
            'errorCode' => 'InvalidParams',
            'errorMessage' => 'The specified parameter %s is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'JobNotFound',
            'errorMessage' => 'The specified job id is not found.',
          ),
        ),
        406 => 
        array (
          0 => 
          array (
            'errorCode' => 'DbError',
            'errorMessage' => 'A database error occurred.',
          ),
        ),
        503 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceUnavailable',
            'errorMessage' => 'The request has failed due to a temporary failure of the server.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"896D338C-E4F4-41EC-A154-D605E5DE****\\",\\n  \\"JobId\\": \\"job-xxxx\\",\\n  \\"TaskName\\": \\"task0\\",\\n  \\"PageSize\\": \\"10\\",\\n  \\"PageNumber\\": \\"1\\",\\n  \\"TotalCount\\": \\"50\\",\\n  \\"Executors\\": [\\n    {\\n      \\"ArrayIndex\\": 0,\\n      \\"IpAddress\\": [\\n        \\"192.168.10.11\\"\\n      ],\\n      \\"HostName\\": [\\n        \\"host0\\"\\n      ],\\n      \\"CreateTime\\": \\"2024-02-20 10:04:10\\",\\n      \\"EndTime\\": \\"2024-02-20 10:04:18\\",\\n      \\"Status\\": \\"Running\\",\\n      \\"StatusReason\\": \\"Creating executor\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询作业Executor信息',
      'description' => '查询作业Executor信息。',
    ),
    'ListExecutors' => 
    array (
      'summary' => '查询全局Executor信息。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '219060',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREehpcAU9WIU',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Filter',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '查询Executor过滤条件。',
            'type' => 'object',
            'properties' => 
            array (
              'JobName' => 
              array (
                'description' => '作业名称。精确过滤，不支持模糊查询。',
                'type' => 'string',
                'required' => false,
                'example' => 'testJob',
              ),
              'ExecutorIds' => 
              array (
                'description' => 'Executor ID列表，最大支持100条。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => 'Executor ID。格式为JobId-TaskName-ArrayIndex。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'job-xxxx-task0-1',
                ),
                'required' => false,
              ),
              'IpAddresses' => 
              array (
                'description' => '内网IP地址列表，最大支持100条。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '内网IP地址。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '192.168.0.1',
                ),
                'required' => false,
              ),
              'TimeCreatedBefore' => 
              array (
                'description' => '在此时间之前提交的作业，以所在地域的时间转化为（国内站为东八区）Unix时间戳。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '1703820113',
              ),
              'TimeCreatedAfter' => 
              array (
                'description' => '在此时间之后提交的作业，以所在地域的时间转化为（国内站为东八区）Unix时间戳。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '1703819914',
              ),
            ),
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时设置的本页条数。 默认50，最大100。',
            'type' => 'string',
            'required' => false,
            'example' => '50',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前页码。    
起始值：1    
默认值：1',
            'type' => 'string',
            'required' => false,
            'example' => '1',
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
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '896D338C-E4F4-41EC-A154-D605E5DE****',
              ),
              'PageSize' => 
              array (
                'description' => '分页查询时设置的本页条数。',
                'type' => 'string',
                'example' => '50',
              ),
              'PageNumber' => 
              array (
                'description' => '当前页码。',
                'type' => 'string',
                'example' => '1',
              ),
              'TotalCount' => 
              array (
                'description' => '列表条目总数。',
                'type' => 'string',
                'example' => '40',
              ),
              'Executors' => 
              array (
                'description' => 'Executor列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => 'Executor属性。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ExecutorId' => 
                    array (
                      'description' => 'Executor ID。格式为JobId-TaskName-ArrayIndex。',
                      'type' => 'string',
                      'example' => 'job-xxxx-task0-1',
                    ),
                    'JobId' => 
                    array (
                      'description' => '作业ID。',
                      'type' => 'string',
                      'example' => 'job-hy1nggvyukuvkr******',
                    ),
                    'JobName' => 
                    array (
                      'description' => '作业名称。',
                      'type' => 'string',
                      'example' => 'testJob',
                    ),
                    'TaskName' => 
                    array (
                      'description' => '任务名称。',
                      'type' => 'string',
                      'example' => 'task0',
                    ),
                    'ArrayIndex' => 
                    array (
                      'description' => 'Executor编号。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '0',
                    ),
                    'IpAddress' => 
                    array (
                      'description' => '内网IP地址列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '内网IP地址。',
                        'type' => 'string',
                        'example' => '192.168.0.1',
                      ),
                    ),
                    'HostName' => 
                    array (
                      'description' => '主机名列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '主机名。',
                        'type' => 'string',
                        'example' => 'testJob-0',
                      ),
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '创建时间。',
                      'type' => 'string',
                      'example' => '2024-02-20 10:04:10',
                    ),
                    'EndTime' => 
                    array (
                      'description' => '结束时间。',
                      'type' => 'string',
                      'example' => '2024-02-20 10:04:18',
                    ),
                    'Status' => 
                    array (
                      'description' => '作业状态。可能值：
- Pending：作业排队中
- Initing：作业初始化中
- Succeed：作业运行成功
- Failed：作业运行失败
- Running：作业运行中
- Unknown：查询不到ECS/ECI状态
- Exception：资源调度异常
- Retrying：作业重试中
- Expired：作业超时
- Deleting：作业删除中
- Deleted：作业删除完成',
                      'type' => 'string',
                      'example' => 'Running',
                    ),
                    'StatusReason' => 
                    array (
                      'description' => '状态原因描述。',
                      'type' => 'string',
                      'example' => 'Succeeded to release executor resource',
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
            'errorCode' => 'InvalidParams',
            'errorMessage' => 'The specified parameter %s is invalid.',
          ),
        ),
        406 => 
        array (
          0 => 
          array (
            'errorCode' => 'DbError',
            'errorMessage' => 'A database error occurred.',
          ),
        ),
        503 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceUnavailable',
            'errorMessage' => 'The request has failed due to a temporary failure of the server.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"896D338C-E4F4-41EC-A154-D605E5DE****\\",\\n  \\"PageSize\\": \\"50\\",\\n  \\"PageNumber\\": \\"1\\",\\n  \\"TotalCount\\": \\"40\\",\\n  \\"Executors\\": [\\n    {\\n      \\"ExecutorId\\": \\"job-xxxx-task0-1\\",\\n      \\"JobId\\": \\"job-hy1nggvyukuvkr******\\",\\n      \\"JobName\\": \\"testJob\\",\\n      \\"TaskName\\": \\"task0\\",\\n      \\"ArrayIndex\\": 0,\\n      \\"IpAddress\\": [\\n        \\"192.168.0.1\\"\\n      ],\\n      \\"HostName\\": [\\n        \\"testJob-0\\"\\n      ],\\n      \\"CreateTime\\": \\"2024-02-20 10:04:10\\",\\n      \\"EndTime\\": \\"2024-02-20 10:04:18\\",\\n      \\"Status\\": \\"Running\\",\\n      \\"StatusReason\\": \\"Succeeded to release executor resource\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询全局Executor信息',
    ),
    'DescribeJobMetricData' => 
    array (
      'summary' => '通过指定特定作业数组索引及查询监控项参数，查询作业的监控时序数据集。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '219038',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREehpcR6Y931',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'JobId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '作业 ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'job-xxxxx
',
          ),
        ),
        1 => 
        array (
          'name' => 'TaskName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'Task0
',
          ),
        ),
        2 => 
        array (
          'name' => 'MetricName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '作业监控项。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cpu_utilization
',
          ),
        ),
        3 => 
        array (
          'name' => 'ArrayIndex',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '数组作业索引列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '数组作业索引。',
              'type' => 'integer',
              'format' => 'int32',
              'required' => true,
              'docRequired' => true,
              'example' => '1',
            ),
            'required' => true,
            'docRequired' => true,
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
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求 ID。',
                'type' => 'string',
                'example' => '04F0F334-1335-436C-A1D7-6C044FE7****
',
              ),
              'Period' => 
              array (
                'description' => '监控数据的统计周期。取值：15、60、900 和 3600。单位：秒。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '15',
              ),
              'DataPoints' => 
              array (
                'description' => '监控统计数据点。',
                'type' => 'string',
                'example' => '[{"timestamp":1709540685000,"Minimum":28.45,"Maximum":28.45,"Average":28.45}]
',
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
            'errorCode' => 'InvalidParams',
            'errorMessage' => 'The specified parameter %s is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'JobNotFound',
            'errorMessage' => 'The specified job id is not found.',
          ),
        ),
        406 => 
        array (
          0 => 
          array (
            'errorCode' => 'DbError',
            'errorMessage' => 'A database error occurred.',
          ),
        ),
        503 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceUnavailable',
            'errorMessage' => 'The request has failed due to a temporary failure of the server.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"04F0F334-1335-436C-A1D7-6C044FE7****\\\\n\\",\\n  \\"Period\\": 15,\\n  \\"DataPoints\\": \\"[{\\\\\\"timestamp\\\\\\":1709540685000,\\\\\\"Minimum\\\\\\":28.45,\\\\\\"Maximum\\\\\\":28.45,\\\\\\"Average\\\\\\":28.45}]\\\\n\\"\\n}","type":"json"}]',
      'title' => '查询作业监控项的监控数据',
    ),
    'DescribeJobMetricLast' => 
    array (
      'summary' => '通过指定特定的作业数组索引列表，查询作业数组列表下的所有即时监控指标。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '219041',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREehpcR6Y931',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'JobId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '作业 ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'job-xxxxx
',
          ),
        ),
        1 => 
        array (
          'name' => 'TaskName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'Task0',
          ),
        ),
        2 => 
        array (
          'name' => 'ArrayIndex',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '数组作业索引列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '数组作业索引。',
              'type' => 'integer',
              'format' => 'int32',
              'required' => true,
              'docRequired' => true,
              'example' => '1',
            ),
            'required' => true,
            'docRequired' => true,
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
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求 ID。',
                'type' => 'string',
                'example' => '04F0F334-1335-436C-A1D7-6C044FE7****
',
              ),
              'Metrics' => 
              array (
                'description' => 'JobMetric 信息详情列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => 'JobMetric 信息详情。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ArrayIndex' => 
                    array (
                      'description' => '数组作业索引。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'Metric' => 
                    array (
                      'description' => '数组作业索引对应的监控项信息。',
                      'type' => 'string',
                      'example' => '{"memory_utilization": 37.42,"cpu_utilization": 1.008, "disk_utilization": 3.562}
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
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidParams',
            'errorMessage' => 'The specified parameter %s is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'JobNotFound',
            'errorMessage' => 'The specified job id is not found.',
          ),
        ),
        406 => 
        array (
          0 => 
          array (
            'errorCode' => 'DbError',
            'errorMessage' => 'A database error occurred.',
          ),
        ),
        503 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceUnavailable',
            'errorMessage' => 'The request has failed due to a temporary failure of the server.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"04F0F334-1335-436C-A1D7-6C044FE7****\\\\n\\",\\n  \\"Metrics\\": [\\n    {\\n      \\"ArrayIndex\\": 1,\\n      \\"Metric\\": \\"{\\\\\\"memory_utilization\\\\\\": 37.42,\\\\\\"cpu_utilization\\\\\\": 1.008, \\\\\\"disk_utilization\\\\\\": 3.562}\\\\n\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询作业监控项的即时监控数据',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-beijing',
      'endpoint' => 'ehpcinstant.cn-beijing.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'cn-heyuan',
      'endpoint' => 'ehpcinstant.cn-heyuan.aliyuncs.com',
    ),
  ),
);
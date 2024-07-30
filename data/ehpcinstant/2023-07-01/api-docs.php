<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'EhpcInstant',
        'version' => '2023-07-01',
    ],
    'directories' => [
        [
            'id' => 191523,
            'title' => '镜像',
            'type' => 'directory',
            'children' => [
                'AddImage',
                'GetImage',
                'ListImages',
                'RemoveImage',
            ],
        ],
        [
            'id' => 191528,
            'title' => '作业',
            'type' => 'directory',
            'children' => [
                'CreateJob',
                'GetJob',
                'ListJobs',
                'DeleteJobs',
                'ListJobExecutors',
                'ListExecutors',
            ],
        ],
        [
            'id' => 191535,
            'title' => '监控',
            'type' => 'directory',
            'children' => [
                'DescribeJobMetricData',
                'DescribeJobMetricLast',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'AddImage' => [
            'summary' => '添加用户自定义镜像。',
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
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '219054',
                'abilityTreeNodes' => [
                    'FEATUREehpcJ9X8D4',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '镜像名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'app-image'."\n",
                    ],
                ],
                [
                    'name' => 'ImageVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => '镜像版本。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'V1.0',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '镜像描述。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '应用测试镜像。'."\n",
                    ],
                ],
                [
                    'name' => 'ContainerImageSpec',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '容器镜像配置。',
                        'type' => 'object',
                        'properties' => [
                            'RegistryUrl' => [
                                'description' => '容器镜像访问链接。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'registry-vpc.cn-hangzhou.aliyuncs.com/ehpc_open/nginx:latest'."\n",
                            ],
                            'IsACRRegistry' => [
                                'description' => '是否为阿里云镜像仓库。'."\n"
                                    ."\n"
                                    .'- True：是。'."\n"
                                    .'- False：否。',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'True',
                            ],
                            'IsACREnterprise' => [
                                'description' => '是否为阿里云镜像仓库企业版。'."\n"
                                    ."\n"
                                    .'- True：是。'."\n"
                                    .'- False：否。',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'True',
                            ],
                            'RegistryCriId' => [
                                'description' => '企业版镜像仓库 ID。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'cri-xyz795ygf8k9****'."\n",
                            ],
                            'RegistryCredential' => [
                                'description' => '私有镜像仓库鉴权。',
                                'type' => 'object',
                                'properties' => [
                                    'Server' => [
                                        'description' => '镜像仓库的注册地址。',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => 'registry-vpc.cn-hangzhou.aliyuncs.com'."\n",
                                    ],
                                    'UserName' => [
                                        'description' => '登录用户名。',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => 'username',
                                    ],
                                    'Password' => [
                                        'description' => '登录密码。',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => 'userpassword',
                                    ],
                                ],
                                'required' => false,
                            ],
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'VMImageSpec',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '虚拟机镜像配置。',
                        'type' => 'object',
                        'properties' => [
                            'ImageId' => [
                                'description' => '镜像 ID。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'm-bp1akkkr1rkxtb******'."\n",
                            ],
                        ],
                        'required' => false,
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
                                'description' => '请求 ID。',
                                'type' => 'string',
                                'example' => '04F0F334-1335-436C-A1D7-6C044FE73368'."\n",
                            ],
                            'Success' => [
                                'description' => '执行命令并获取结果的过程是否成功。取值范围：'."\n"
                                    ."\n"
                                    .'- true：成功。'."\n"
                                    .'- false：失败。',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'ImageId' => [
                                'title' => 'Id of the request',
                                'description' => '镜像 ID。',
                                'type' => 'string',
                                'example' => 'm-bp1akkkr1rkxtb******'."\n",
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParams',
                        'errorMessage' => 'The specified parameter %s is invalid.',
                    ],
                    [
                        'errorCode' => 'ImageAlreadyExists',
                        'errorMessage' => 'The image id already exists.',
                    ],
                    [
                        'errorCode' => 'InDebt',
                        'errorMessage' => 'Your account has overdue payments.',
                    ],
                    [
                        'errorCode' => 'NotEnabled',
                        'errorMessage' => 'You have not enabled this service.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'ImageInUse',
                        'errorMessage' => 'Image is still used by jobs.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ImageNotFound',
                        'errorMessage' => 'The specified image does not exist.',
                    ],
                ],
                406 => [
                    [
                        'errorCode' => 'EcsError',
                        'errorMessage' => 'An error occurred while calling the ECS API operation.',
                    ],
                    [
                        'errorCode' => 'AliyunError',
                        'errorMessage' => 'An Alibaba Cloud product error occurred.',
                    ],
                    [
                        'errorCode' => 'DbError',
                        'errorMessage' => 'A database error occurred.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'NotAuthorized',
                        'errorMessage' => 'No authorization is granted.',
                    ],
                ],
                503 => [
                    [
                        'errorCode' => 'ServiceUnavailable',
                        'errorMessage' => 'The request has failed due to a temporary failure of the server.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"04F0F334-1335-436C-A1D7-6C044FE73368\\\\n\\",\\n  \\"Success\\": true,\\n  \\"ImageId\\": \\"m-bp1akkkr1rkxtb******\\\\n\\"\\n}","type":"json"}]',
            'title' => '添加镜像',
        ],
        'GetImage' => [
            'summary' => '获取镜像详情。',
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
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '219057',
                'abilityTreeNodes' => [
                    'FEATUREehpcJ9X8D4',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'ImageCategory',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ImageType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ImageId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '镜像ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'm-2ze74g5mvy4pjg*****',
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
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '04F0F334-1335-436C-A1D7-6C044FE73368'."\n",
                            ],
                            'Success' => [
                                'description' => '执行命令并获取结果的过程是否成功。取值范围：'."\n"
                                    ."\n"
                                    .'- true：成功。'."\n"
                                    .'- false：失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'TotalCount' => [
                                'title' => 'TotalCount本次请求条件下的数据总量，此参数为可选参数，默认可不返回',
                                'description' => '本次请求条件下的数据总量。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'Image' => [
                                'title' => 'Image',
                                'description' => '镜像详情。',
                                'type' => 'object',
                                'properties' => [
                                    'ImageType' => [
                                        'description' => '镜像类型。',
                                        'type' => 'string',
                                        'required' => true,
                                        'example' => 'VM',
                                    ],
                                    'AppId' => [
                                        'type' => 'string',
                                    ],
                                    'Name' => [
                                        'description' => '镜像名称。',
                                        'type' => 'string',
                                        'example' => 'app-image',
                                    ],
                                    'Version' => [
                                        'description' => '版本。',
                                        'type' => 'string',
                                        'example' => 'v1.0',
                                    ],
                                    'Description' => [
                                        'description' => '镜像描述。',
                                        'type' => 'string',
                                        'example' => '应用测试镜像。',
                                    ],
                                    'Size' => [
                                        'description' => '镜像大小。单位：GiB。',
                                        'type' => 'string',
                                        'example' => '40 GiB',
                                    ],
                                    'CreateTime' => [
                                        'description' => '镜像创建时间。',
                                        'type' => 'string',
                                        'example' => '2022-12-23T09:51:39Z',
                                    ],
                                    'Status' => [
                                        'type' => 'string',
                                    ],
                                    'ContainerImageSpec' => [
                                        'description' => '容器镜像配置详情。',
                                        'type' => 'object',
                                        'properties' => [
                                            'RegistryUrl' => [
                                                'description' => '容器镜像访问链接。',
                                                'type' => 'string',
                                                'example' => 'registry-vpc.cn-hangzhou.aliyuncs.com/ehpc_open/nginx:latest',
                                            ],
                                            'IsACRRegistry' => [
                                                'description' => '是否为阿里云镜像仓库。'."\n"
                                                    ."\n"
                                                    .'- True：是。'."\n"
                                                    .'- False：否。',
                                                'type' => 'boolean',
                                                'example' => 'True',
                                            ],
                                            'IsACREnterprise' => [
                                                'description' => '是否为阿里云镜像仓库企业版。'."\n"
                                                    ."\n"
                                                    .'- True：是。'."\n"
                                                    .'- False：否。',
                                                'type' => 'boolean',
                                                'example' => 'True',
                                            ],
                                            'RegistryCriId' => [
                                                'description' => '企业版镜像仓库ID。',
                                                'type' => 'string',
                                                'example' => 'cri-xyz795ygf8k9****',
                                            ],
                                            'RegistryCredential' => [
                                                'description' => '私有镜像仓库鉴权。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'Server' => [
                                                        'description' => '镜像仓库的注册地址。',
                                                        'type' => 'string',
                                                        'example' => 'registry-vpc.cn-hangzhou.aliyuncs.com',
                                                    ],
                                                    'UserName' => [
                                                        'description' => '登录用户名。',
                                                        'type' => 'string',
                                                        'example' => 'username',
                                                    ],
                                                    'Password' => [
                                                        'description' => '登录用户密码。',
                                                        'type' => 'string',
                                                        'example' => 'userpassword',
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                    'VMImageSpec' => [
                                        'description' => '虚拟机镜像配置详情。',
                                        'type' => 'object',
                                        'properties' => [
                                            'ImageId' => [
                                                'description' => '镜像ID。',
                                                'type' => 'string',
                                                'example' => 'm-uf60twafjtaart******',
                                            ],
                                            'OsTag' => [
                                                'description' => 'OS具体版本标识。',
                                                'type' => 'string',
                                                'example' => 'CentOS  7.6 64 bit',
                                            ],
                                            'Platform' => [
                                                'description' => '平台类型。',
                                                'type' => 'string',
                                                'example' => 'CentOS',
                                            ],
                                            'Architecture' => [
                                                'description' => '架构类型。',
                                                'type' => 'string',
                                                'example' => 'x86_64',
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
                        'errorCode' => 'InvalidParams',
                        'errorMessage' => 'The specified parameter %s is invalid.',
                    ],
                    [
                        'errorCode' => 'NotEnabled',
                        'errorMessage' => 'You have not enabled this service.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'ImageNotFound',
                        'errorMessage' => 'The specified image does not exist.',
                    ],
                ],
                406 => [
                    [
                        'errorCode' => 'EcsError',
                        'errorMessage' => 'An error occurred while calling the ECS API operation.',
                    ],
                    [
                        'errorCode' => 'AliyunError',
                        'errorMessage' => 'An Alibaba Cloud product error occurred.',
                    ],
                    [
                        'errorCode' => 'DbError',
                        'errorMessage' => 'A database error occurred.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'NotAuthorized',
                        'errorMessage' => 'No authorization is granted.',
                    ],
                ],
                503 => [
                    [
                        'errorCode' => 'ServiceUnavailable',
                        'errorMessage' => 'The request has failed due to a temporary failure of the server.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"04F0F334-1335-436C-A1D7-6C044FE73368\\\\n\\",\\n  \\"Success\\": true,\\n  \\"TotalCount\\": 10,\\n  \\"Image\\": {\\n    \\"ImageType\\": \\"VM\\",\\n    \\"AppId\\": \\"\\",\\n    \\"Name\\": \\"app-image\\",\\n    \\"Version\\": \\"v1.0\\",\\n    \\"Description\\": \\"应用测试镜像。\\",\\n    \\"Size\\": \\"40 GiB\\",\\n    \\"CreateTime\\": \\"2022-12-23T09:51:39Z\\",\\n    \\"Status\\": \\"\\",\\n    \\"ContainerImageSpec\\": {\\n      \\"RegistryUrl\\": \\"registry-vpc.cn-hangzhou.aliyuncs.com/ehpc_open/nginx:latest\\",\\n      \\"IsACRRegistry\\": true,\\n      \\"IsACREnterprise\\": true,\\n      \\"RegistryCriId\\": \\"cri-xyz795ygf8k9****\\",\\n      \\"RegistryCredential\\": {\\n        \\"Server\\": \\"registry-vpc.cn-hangzhou.aliyuncs.com\\",\\n        \\"UserName\\": \\"username\\",\\n        \\"Password\\": \\"userpassword\\"\\n      }\\n    },\\n    \\"VMImageSpec\\": {\\n      \\"ImageId\\": \\"m-uf60twafjtaart******\\",\\n      \\"OsTag\\": \\"CentOS  7.6 64 bit\\",\\n      \\"Platform\\": \\"CentOS\\",\\n      \\"Architecture\\": \\"x86_64\\"\\n    }\\n  }\\n}","type":"json"}]',
            'title' => '获取镜像详情',
        ],
        'ListImages' => [
            'summary' => '查询镜像列表。',
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
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '219055',
                'abilityTreeNodes' => [
                    'FEATUREehpcJ9X8D4',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '当前页码。    '."\n"
                            .'默认值：1。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页条数。    '."\n"
                            .'默认值：20。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'ImageCategory',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ImageType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ImageIds',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '镜像ID数组。',
                        'type' => 'array',
                        'items' => [
                            'description' => '镜像ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'm-uf6bzz76jb4ai9******',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ImageNames',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '镜像名称数组。',
                        'type' => 'array',
                        'items' => [
                            'description' => '镜像名称。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'appimage',
                        ],
                        'required' => false,
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
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '896D338C-E4F4-41EC-A154-D605E5DE****',
                            ],
                            'Success' => [
                                'description' => '执行命令并获取结果的过程是否成功。取值范围：'."\n"
                                    ."\n"
                                    .'- true：成功。'."\n"
                                    .'- false：失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'TotalCount' => [
                                'title' => 'TotalCount本次请求条件下的数据总量，此参数为可选参数，默认可不返回',
                                'description' => '本次请求条件下的数据总量。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'PageSize' => [
                                'title' => 'PageSize',
                                'description' => '每页条数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '20',
                            ],
                            'PageNumber' => [
                                'title' => 'PageNumber',
                                'description' => '当前页码。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'Images' => [
                                'title' => 'Images',
                                'description' => '镜像信息列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '镜像信息。',
                                    'type' => 'object',
                                    'properties' => [
                                        'ImageType' => [
                                            'description' => '镜像类型。',
                                            'type' => 'string',
                                            'required' => true,
                                            'example' => 'VM',
                                        ],
                                        'ImageId' => [
                                            'description' => '镜像ID。',
                                            'type' => 'string',
                                            'required' => true,
                                            'example' => 'm-bp181x855551ww5yq****',
                                        ],
                                        'AppId' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'Name' => [
                                            'description' => '镜像名称。',
                                            'type' => 'string',
                                            'example' => 'app-image',
                                        ],
                                        'Version' => [
                                            'description' => '镜像版本。',
                                            'type' => 'string',
                                            'example' => 'v1.0',
                                        ],
                                        'Description' => [
                                            'description' => '镜像描述。',
                                            'type' => 'string',
                                            'example' => '应用测试镜像。',
                                        ],
                                        'CreateTime' => [
                                            'description' => '创建时间。',
                                            'type' => 'string',
                                            'example' => '2022-12-09T07:06:34Z',
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
                        'errorCode' => 'InvalidParams',
                        'errorMessage' => 'The specified parameter %s is invalid.',
                    ],
                    [
                        'errorCode' => 'InDebt',
                        'errorMessage' => 'Your account has overdue payments.',
                    ],
                    [
                        'errorCode' => 'NotEnabled',
                        'errorMessage' => 'You have not enabled this service.',
                    ],
                ],
                406 => [
                    [
                        'errorCode' => 'EcsError',
                        'errorMessage' => 'An error occurred while calling the ECS API operation.',
                    ],
                    [
                        'errorCode' => 'AliyunError',
                        'errorMessage' => 'An Alibaba Cloud product error occurred.',
                    ],
                    [
                        'errorCode' => 'DbError',
                        'errorMessage' => 'A database error occurred.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'NotAuthorized',
                        'errorMessage' => 'No authorization is granted.',
                    ],
                ],
                503 => [
                    [
                        'errorCode' => 'ServiceUnavailable',
                        'errorMessage' => 'The request has failed due to a temporary failure of the server.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"896D338C-E4F4-41EC-A154-D605E5DE****\\",\\n  \\"Success\\": true,\\n  \\"TotalCount\\": 1,\\n  \\"PageSize\\": 20,\\n  \\"PageNumber\\": 1,\\n  \\"Images\\": [\\n    {\\n      \\"ImageType\\": \\"VM\\",\\n      \\"ImageId\\": \\"m-bp181x855551ww5yq****\\",\\n      \\"AppId\\": \\"\\",\\n      \\"Name\\": \\"app-image\\",\\n      \\"Version\\": \\"v1.0\\",\\n      \\"Description\\": \\"应用测试镜像。\\",\\n      \\"CreateTime\\": \\"2022-12-09T07:06:34Z\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询镜像列表',
        ],
        'RemoveImage' => [
            'summary' => '移除用户自定义镜像。',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '219056',
                'abilityTreeNodes' => [
                    'FEATUREehpcJ9X8D4',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'ImageId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '镜像ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'm-bp14wakr1rkxtb******',
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
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '896D338C-E4F4-41EC-A154-D605E5DE****',
                            ],
                            'Success' => [
                                'description' => '执行命令并获取结果的过程是否成功。取值范围：'."\n"
                                    ."\n"
                                    .'- true：成功。'."\n"
                                    .'- false：失败。',
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
                        'errorCode' => 'InvalidParams',
                        'errorMessage' => 'The specified parameter %s is invalid.',
                    ],
                    [
                        'errorCode' => 'ImageAlreadyExists',
                        'errorMessage' => 'The image id already exists.',
                    ],
                    [
                        'errorCode' => 'NotEnabled',
                        'errorMessage' => 'You have not enabled this service.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'ImageInUse',
                        'errorMessage' => 'Image is still used by jobs.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ImageNotFound',
                        'errorMessage' => 'The specified image does not exist.',
                    ],
                ],
                406 => [
                    [
                        'errorCode' => 'EcsError',
                        'errorMessage' => 'An error occurred while calling the ECS API operation.',
                    ],
                    [
                        'errorCode' => 'AliyunError',
                        'errorMessage' => 'An Alibaba Cloud product error occurred.',
                    ],
                    [
                        'errorCode' => 'DbError',
                        'errorMessage' => 'A database error occurred.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'NotAuthorized',
                        'errorMessage' => 'No authorization is granted.',
                    ],
                ],
                503 => [
                    [
                        'errorCode' => 'ServiceUnavailable',
                        'errorMessage' => 'The request has failed due to a temporary failure of the server.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"896D338C-E4F4-41EC-A154-D605E5DE****\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '移除镜像',
        ],
        'CreateJob' => [
            'summary' => '创建一个E-HPC Instant 作业。',
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
                'riskType' => 'none',
                'chargeType' => 'paid',
                'abilityTreeCode' => '219052',
                'abilityTreeNodes' => [
                    'FEATUREehpcAU9WIU',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'JobName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '作业名称。最大长度为10。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'testjob',
                    ],
                ],
                [
                    'name' => 'JobDescription',
                    'in' => 'query',
                    'schema' => [
                        'description' => '作业描述。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Demo',
                    ],
                ],
                [
                    'name' => 'Tasks',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '任务列表，当前仅支持1个任务。',
                        'type' => 'array',
                        'items' => [
                            'description' => '任务详情。',
                            'type' => 'object',
                            'properties' => [
                                'TaskName' => [
                                    'description' => '任务名称。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'task0',
                                ],
                                'TaskSpec' => [
                                    'description' => '任务规格详情。',
                                    'type' => 'object',
                                    'properties' => [
                                        'TaskExecutor' => [
                                            'description' => '任务执行配置。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '任务执行配置。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'Container' => [
                                                        'description' => '使用容器实例。',
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'Image' => [
                                                                'description' => '容器镜像。',
                                                                'type' => 'string',
                                                                'required' => true,
                                                                'example' => 'registry-vpc.cn-hangzhou.aliyuncs.com/ehpc/hpl:latest',
                                                            ],
                                                            'WorkingDir' => [
                                                                'description' => '容器工作目录。',
                                                                'type' => 'string',
                                                                'required' => false,
                                                                'example' => '/usr/local/',
                                                            ],
                                                            'Command' => [
                                                                'description' => '容器启动命令列表。最多20个命令，单个命令最长256个字符。    '."\n"
                                                                    .'> 当启动命令包含空格时（例如：`sleep 60s`），传入的JSON格式参数为`["sleep", "60s"]`。',
                                                                'type' => 'array',
                                                                'items' => [
                                                                    'description' => '容器启动命令内容。每个命令最多包含256个字符。',
                                                                    'type' => 'string',
                                                                    'required' => false,
                                                                    'example' => 'sleep',
                                                                ],
                                                                'required' => false,
                                                            ],
                                                            'EnvironmentVars' => [
                                                                'description' => '容器的环境变量。最多20组。',
                                                                'type' => 'array',
                                                                'items' => [
                                                                    'description' => '容器的环境变量。最多20组。',
                                                                    'type' => 'object',
                                                                    'properties' => [
                                                                        'Name' => [
                                                                            'description' => '环境变量名。长度为 1~128 位。格式要求：[0-9a-zA-Z]，以及下划线，不能以数字开头。',
                                                                            'type' => 'string',
                                                                            'required' => false,
                                                                            'example' => 'PATH',
                                                                        ],
                                                                        'Value' => [
                                                                            'description' => '环境变量值。长度为 0~256 位。',
                                                                            'type' => 'string',
                                                                            'required' => false,
                                                                            'example' => '/usr/local/bin',
                                                                        ],
                                                                    ],
                                                                    'required' => false,
                                                                ],
                                                                'required' => false,
                                                            ],
                                                            'AppId' => [
                                                                'description' => 'VM应用ID。',
                                                                'type' => 'string',
                                                                'required' => false,
                                                                'example' => 'ci-vm-32k6LXAi3cOG',
                                                            ],
                                                        ],
                                                        'required' => false,
                                                    ],
                                                    'VM' => [
                                                        'description' => '使用ECS实例。',
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'Image' => [
                                                                'description' => '镜像ID。',
                                                                'type' => 'string',
                                                                'required' => true,
                                                                'example' => 'm-xxxx',
                                                            ],
                                                            'PrologScript' => [
                                                                'description' => '前处理脚本。需Base64编码。',
                                                                'type' => 'string',
                                                                'required' => false,
                                                                'example' => 'ZWNobyBoZWxsbyBlY3Mh',
                                                            ],
                                                            'Script' => [
                                                                'description' => '运行作业脚本。需Base64编码。',
                                                                'type' => 'string',
                                                                'required' => false,
                                                                'example' => 'ZWNobyBoZWxsbyBlY3Mh',
                                                            ],
                                                            'AppId' => [
                                                                'description' => '容器应用ID',
                                                                'type' => 'string',
                                                                'required' => false,
                                                                'example' => 'ci-vm-9jc58Pm5Leky',
                                                            ],
                                                        ],
                                                        'required' => false,
                                                    ],
                                                ],
                                                'required' => false,
                                            ],
                                            'required' => true,
                                        ],
                                        'VolumeMount' => [
                                            'description' => '容器挂载的数据卷列表。最多10组。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '容器挂载的数据卷信息。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'MountPath' => [
                                                        'description' => '容器挂载数据卷的目录。'."\n"
                                                            ."\n"
                                                            .'> 容器挂载目录下的内容会被Volume的内容直接覆盖，请谨慎使用。',
                                                        'type' => 'string',
                                                        'required' => false,
                                                        'example' => '/mnt',
                                                    ],
                                                    'VolumeDriver' => [
                                                        'description' => '当前支持的数据卷类型。取值为`alicloud/nas`，表示挂载 NAS。',
                                                        'type' => 'string',
                                                        'required' => false,
                                                        'example' => 'alicloud/nas',
                                                    ],
                                                    'MountOptions' => [
                                                        'description' => '数据卷挂载参数列表。为KV形式，采用JSON传递。',
                                                        'type' => 'string',
                                                        'required' => false,
                                                        'example' => '{"server":"xxxxx-xxxxx.cn-heyuan.nas.aliyuncs.com","vers":"3","path":"/data","options":"nolock,tcp,noresvport"}',
                                                    ],
                                                ],
                                                'required' => false,
                                            ],
                                            'required' => false,
                                        ],
                                        'Resource' => [
                                            'description' => '资源信息。',
                                            'type' => 'object',
                                            'properties' => [
                                                'Cores' => [
                                                    'description' => '运行作业的CPU个数。',
                                                    'type' => 'number',
                                                    'format' => 'float',
                                                    'required' => false,
                                                    'example' => '2',
                                                ],
                                                'Memory' => [
                                                    'description' => '运行作业的内存大小。单位为GiB。',
                                                    'type' => 'number',
                                                    'format' => 'float',
                                                    'required' => false,
                                                    'example' => '4',
                                                ],
                                                'Disks' => [
                                                    'description' => '云盘数组。',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => '云盘数组。',
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'Type' => [
                                                                'description' => '云盘类型。目前仅支持System，表示系统盘。',
                                                                'type' => 'string',
                                                                'required' => false,
                                                                'example' => 'System',
                                                            ],
                                                            'Size' => [
                                                                'description' => '云盘大小。单位为GiB。',
                                                                'type' => 'integer',
                                                                'format' => 'int32',
                                                                'required' => false,
                                                                'example' => '40',
                                                            ],
                                                        ],
                                                        'required' => false,
                                                    ],
                                                    'required' => false,
                                                ],
                                            ],
                                            'required' => false,
                                        ],
                                    ],
                                    'required' => false,
                                ],
                                'ExecutorPolicy' => [
                                    'description' => '任务执行策略。',
                                    'type' => 'object',
                                    'properties' => [
                                        'MaxCount' => [
                                            'description' => '作业运行最大节点数。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                            'example' => '1',
                                        ],
                                        'ArraySpec' => [
                                            'description' => '数组作业详情。',
                                            'type' => 'object',
                                            'properties' => [
                                                'IndexStart' => [
                                                    'description' => '数组作业索引的起始值。取值范围：0~4999。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'required' => false,
                                                    'example' => '0',
                                                ],
                                                'IndexEnd' => [
                                                    'description' => '数组作业索引的结束值。取值范围：0~4999，且大于等于IndexStart。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'required' => false,
                                                    'example' => '9',
                                                ],
                                                'IndexStep' => [
                                                    'description' => '数组作业索引的间隔。'."\n"
                                                        .'> 若数组作业属性为IndexStart=1,IndexEnd=5,IndexStep=2，则该数组作业包含三个子任务，子任务索引分别为1,3,5。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'required' => false,
                                                    'example' => '1',
                                                ],
                                            ],
                                            'required' => false,
                                        ],
                                    ],
                                    'required' => false,
                                ],
                                'TaskSustainable' => [
                                    'description' => '是否是长时间运行的作业。',
                                    'type' => 'boolean',
                                    'required' => false,
                                    'example' => 'true',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => true,
                        'minItems' => 1,
                    ],
                ],
                [
                    'name' => 'DeploymentPolicy',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '资源部署策略。',
                        'type' => 'object',
                        'properties' => [
                            'AllocationSpec' => [
                                'description' => '资源类型。当前仅支持Dedicated，需开通白名单使用。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'Dedicated',
                            ],
                            'Network' => [
                                'description' => '网络配置信息。',
                                'type' => 'object',
                                'properties' => [
                                    'Vswitch' => [
                                        'description' => '交换机数组。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '交换机ID。',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'vsw-xxxx',
                                        ],
                                        'required' => false,
                                    ],
                                ],
                                'required' => false,
                            ],
                        ],
                        'required' => false,
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
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '896D338C-E4F4-41EC-A154-D605E5DE****',
                            ],
                            'JobId' => [
                                'description' => '作业ID。',
                                'type' => 'string',
                                'example' => 'job-xxxx',
                            ],
                            'Tasks' => [
                                'description' => '任务列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '任务列表详情。',
                                    'type' => 'object',
                                    'properties' => [
                                        'TaskName' => [
                                            'description' => '任务名称。',
                                            'type' => 'string',
                                            'example' => 'task0',
                                        ],
                                        'ExecutorIds' => [
                                            'description' => '任务包含的Executor ID列表。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => 'Executor ID。格式为JobId-TaskName-ArrayIndex。',
                                                'type' => 'string',
                                                'example' => '[\\"job-xxxx-task0_11-2\\"]',
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
                        'errorCode' => 'InvalidParams',
                        'errorMessage' => 'The specified parameter %s is invalid.',
                    ],
                    [
                        'errorCode' => 'InDebt',
                        'errorMessage' => 'Your account has overdue payments.',
                    ],
                    [
                        'errorCode' => 'NotEnabled',
                        'errorMessage' => 'You have not enabled this service.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'GetResourceFailed',
                        'errorMessage' => 'Failed to get resource.',
                    ],
                    [
                        'errorCode' => 'RecommendEmpty.InstanceTypeSoldOut',
                        'errorMessage' => 'The resource is out of stock.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ImageNotFound',
                        'errorMessage' => 'The specified image does not exist.',
                    ],
                ],
                406 => [
                    [
                        'errorCode' => 'AliyunError',
                        'errorMessage' => 'An Alibaba Cloud product error occurred.',
                    ],
                    [
                        'errorCode' => 'EcsError',
                        'errorMessage' => 'An error occurred while calling the ECS API operation.',
                    ],
                    [
                        'errorCode' => 'DbError',
                        'errorMessage' => 'A database error occurred.',
                    ],
                ],
                503 => [
                    [
                        'errorCode' => 'ServiceUnavailable',
                        'errorMessage' => 'The request has failed due to a temporary failure of the server.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"896D338C-E4F4-41EC-A154-D605E5DE****\\",\\n  \\"JobId\\": \\"job-xxxx\\",\\n  \\"Tasks\\": [\\n    {\\n      \\"TaskName\\": \\"task0\\",\\n      \\"ExecutorIds\\": [\\n        \\"[\\\\\\\\\\\\\\"job-xxxx-task0_11-2\\\\\\\\\\\\\\"]\\"\\n      ]\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '创建作业',
        ],
        'GetJob' => [
            'summary' => '获取执行作业详情。',
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
                'abilityTreeCode' => '219050',
                'abilityTreeNodes' => [
                    'FEATUREehpcAU9WIU',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'JobId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '作业ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'job-xxxx',
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
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '896D338C-E4F4-41EC-A154-D605E5DE****',
                            ],
                            'JobInfo' => [
                                'description' => '作业详细信息。',
                                'type' => 'object',
                                'properties' => [
                                    'JobId' => [
                                        'description' => '作业ID。',
                                        'type' => 'string',
                                        'example' => 'job-xxxx',
                                    ],
                                    'JobName' => [
                                        'description' => '作业名称。',
                                        'type' => 'string',
                                        'example' => 'testJob',
                                    ],
                                    'JobDescription' => [
                                        'description' => '作业描述。',
                                        'type' => 'string',
                                        'example' => 'Demo',
                                    ],
                                    'Tasks' => [
                                        'description' => '任务列表，当前仅支持1个任务。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '任务列表，当前仅支持1个任务。',
                                            'type' => 'object',
                                            'properties' => [
                                                'TaskName' => [
                                                    'description' => '任务名称。',
                                                    'type' => 'string',
                                                    'example' => 'task0',
                                                ],
                                                'TaskSpec' => [
                                                    'description' => '任务规格详情。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'TaskExecutor' => [
                                                            'description' => '任务执行配置。',
                                                            'type' => 'array',
                                                            'items' => [
                                                                'description' => '任务执行配置。',
                                                                'type' => 'object',
                                                                'properties' => [
                                                                    'VM' => [
                                                                        'description' => '使用ECS实例。',
                                                                        'type' => 'object',
                                                                        'properties' => [
                                                                            'Image' => [
                                                                                'description' => '镜像ID。',
                                                                                'type' => 'string',
                                                                                'example' => 'm-xxxx',
                                                                            ],
                                                                            'PrologScript' => [
                                                                                'description' => '前处理脚本。需Base64编码。',
                                                                                'type' => 'string',
                                                                                'example' => 'ZWNobyAiMTIzNCIgPiBgZGF0ZSArJXNg',
                                                                            ],
                                                                            'Script' => [
                                                                                'description' => '运行作业脚本。需Base64编码。',
                                                                                'type' => 'string',
                                                                                'example' => 'ZWNobyAiMTIzNCIgPiBgZGF0ZSArJXNg',
                                                                            ],
                                                                        ],
                                                                    ],
                                                                ],
                                                            ],
                                                        ],
                                                        'Resource' => [
                                                            'description' => '资源信息。',
                                                            'type' => 'object',
                                                            'properties' => [
                                                                'Cores' => [
                                                                    'description' => '运行作业的CPU个数。',
                                                                    'type' => 'number',
                                                                    'format' => 'float',
                                                                    'example' => '1',
                                                                ],
                                                                'Memory' => [
                                                                    'description' => '内存资源总量。单位：GiB。',
                                                                    'type' => 'integer',
                                                                    'format' => 'int32',
                                                                    'example' => '4',
                                                                ],
                                                                'Disks' => [
                                                                    'description' => '云盘数组。',
                                                                    'type' => 'array',
                                                                    'items' => [
                                                                        'description' => '云盘数组。',
                                                                        'type' => 'object',
                                                                        'properties' => [
                                                                            'Type' => [
                                                                                'description' => '云盘类型。支持以下类型：'."\n"
                                                                                    ."\n"
                                                                                    .'- System：系统盘。'."\n"
                                                                                    .'- Data：数据盘。',
                                                                                'type' => 'string',
                                                                                'example' => 'System',
                                                                            ],
                                                                            'Size' => [
                                                                                'description' => '云盘大小。',
                                                                                'type' => 'integer',
                                                                                'format' => 'int32',
                                                                                'example' => '100',
                                                                            ],
                                                                        ],
                                                                    ],
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'ExecutorPolicy' => [
                                                    'description' => '任务执行策略。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'MaxCount' => [
                                                            'description' => '作业运行最大节点数。',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '10',
                                                        ],
                                                        'ArraySpec' => [
                                                            'description' => '数组作业详情。',
                                                            'type' => 'object',
                                                            'properties' => [
                                                                'IndexStart' => [
                                                                    'description' => '数组作业索引的起始值。取值范围：0~4999。',
                                                                    'type' => 'integer',
                                                                    'format' => 'int32',
                                                                    'example' => '0',
                                                                ],
                                                                'IndexEnd' => [
                                                                    'description' => '数组作业索引的结束值。取值范围：0~4999，且大于等于IndexStart。',
                                                                    'type' => 'integer',
                                                                    'format' => 'int32',
                                                                    'example' => '9',
                                                                ],
                                                                'IndexStep' => [
                                                                    'description' => '数组作业索引的间隔。'."\n"
                                                                        .'> 若数组作业属性为IndexStart=1,IndexEnd=5,IndexStep=2，则该数组作业包含三个子任务，子任务索引分别为1,3,5。',
                                                                    'type' => 'integer',
                                                                    'format' => 'int32',
                                                                    'example' => '1',
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'TaskSustainable' => [
                                                    'description' => '是否是长时间运行的作业。',
                                                    'type' => 'boolean',
                                                    'example' => 'true',
                                                ],
                                                'ExecutorStatus' => [
                                                    'description' => '任务执行状态。',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => '任务执行状态。',
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'ArrayId' => [
                                                                'description' => '子作业ID',
                                                                'type' => 'integer',
                                                                'format' => 'int32',
                                                                'example' => '0',
                                                            ],
                                                            'Status' => [
                                                                'description' => '作业状态。',
                                                                'type' => 'string',
                                                                'example' => 'Running',
                                                            ],
                                                            'StatusReason' => [
                                                                'description' => '状态原因描述。',
                                                                'type' => 'string',
                                                                'example' => 'Creating executor',
                                                            ],
                                                            'CreateTime' => [
                                                                'description' => '作业创建时间。',
                                                                'type' => 'string',
                                                                'example' => '2024-02-04 13:54:10',
                                                            ],
                                                            'StartTime' => [
                                                                'description' => '作业开始时间。',
                                                                'type' => 'string',
                                                                'example' => '2024-02-04 13:54:10',
                                                            ],
                                                            'EndTime' => [
                                                                'description' => '作业结束时间。',
                                                                'type' => 'string',
                                                                'example' => '2024-02-04 13:54:10',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                    'DeploymentPolicy' => [
                                        'description' => '资源部署策略。',
                                        'type' => 'object',
                                        'properties' => [
                                            'AllocationSpec' => [
                                                'description' => '资源类型。当前仅支持Dedicated，需开通白名单使用。',
                                                'type' => 'string',
                                                'example' => 'Dedicated',
                                            ],
                                            'Network' => [
                                                'description' => '网络配置信息。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'Vswitch' => [
                                                        'description' => '交换机数组。',
                                                        'type' => 'array',
                                                        'items' => [
                                                            'description' => '交换机ID。',
                                                            'type' => 'string',
                                                            'example' => 'vsw-xxx',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                    'CreateTime' => [
                                        'description' => '作业提交时间。',
                                        'type' => 'string',
                                        'example' => '2024-03-05 20:00:46',
                                    ],
                                    'StartTime' => [
                                        'description' => '作业开始时间。',
                                        'type' => 'string',
                                        'example' => '2024-03-05 20:00:48',
                                    ],
                                    'EndTime' => [
                                        'description' => '作业结束时间。',
                                        'type' => 'string',
                                        'example' => '2024-03-05 20:01:48',
                                    ],
                                    'Status' => [
                                        'description' => '作业状态。',
                                        'type' => 'string',
                                        'example' => 'Succeed',
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
                        'errorCode' => 'InvalidParams',
                        'errorMessage' => 'The specified parameter %s is invalid.',
                    ],
                    [
                        'errorCode' => 'JobNotFound',
                        'errorMessage' => 'The specified job id is not found.',
                    ],
                ],
                406 => [
                    [
                        'errorCode' => 'DbError',
                        'errorMessage' => 'A database error occurred.',
                    ],
                ],
                503 => [
                    [
                        'errorCode' => 'ServiceUnavailable',
                        'errorMessage' => 'The request has failed due to a temporary failure of the server.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"896D338C-E4F4-41EC-A154-D605E5DE****\\",\\n  \\"JobInfo\\": {\\n    \\"JobId\\": \\"job-xxxx\\",\\n    \\"JobName\\": \\"testJob\\",\\n    \\"JobDescription\\": \\"Demo\\",\\n    \\"Tasks\\": [\\n      {\\n        \\"TaskName\\": \\"task0\\",\\n        \\"TaskSpec\\": {\\n          \\"TaskExecutor\\": [\\n            {\\n              \\"VM\\": {\\n                \\"Image\\": \\"m-xxxx\\",\\n                \\"PrologScript\\": \\"ZWNobyAiMTIzNCIgPiBgZGF0ZSArJXNg\\",\\n                \\"Script\\": \\"ZWNobyAiMTIzNCIgPiBgZGF0ZSArJXNg\\"\\n              }\\n            }\\n          ],\\n          \\"Resource\\": {\\n            \\"Cores\\": 1,\\n            \\"Memory\\": 4,\\n            \\"Disks\\": [\\n              {\\n                \\"Type\\": \\"System\\",\\n                \\"Size\\": 100\\n              }\\n            ]\\n          }\\n        },\\n        \\"ExecutorPolicy\\": {\\n          \\"MaxCount\\": 10,\\n          \\"ArraySpec\\": {\\n            \\"IndexStart\\": 0,\\n            \\"IndexEnd\\": 9,\\n            \\"IndexStep\\": 1\\n          }\\n        },\\n        \\"TaskSustainable\\": true,\\n        \\"ExecutorStatus\\": [\\n          {\\n            \\"ArrayId\\": 0,\\n            \\"Status\\": \\"Running\\",\\n            \\"StatusReason\\": \\"Creating executor\\",\\n            \\"CreateTime\\": \\"2024-02-04 13:54:10\\",\\n            \\"StartTime\\": \\"2024-02-04 13:54:10\\",\\n            \\"EndTime\\": \\"2024-02-04 13:54:10\\"\\n          }\\n        ]\\n      }\\n    ],\\n    \\"DeploymentPolicy\\": {\\n      \\"AllocationSpec\\": \\"Dedicated\\",\\n      \\"Network\\": {\\n        \\"Vswitch\\": [\\n          \\"vsw-xxx\\"\\n        ]\\n      }\\n    },\\n    \\"CreateTime\\": \\"2024-03-05 20:00:46\\",\\n    \\"StartTime\\": \\"2024-03-05 20:00:48\\",\\n    \\"EndTime\\": \\"2024-03-05 20:01:48\\",\\n    \\"Status\\": \\"Succeed\\"\\n  }\\n}","type":"json"}]',
            'title' => '获取作业详情',
        ],
        'ListJobs' => [
            'summary' => '查询指定集群中的作业列表。',
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
                'abilityTreeCode' => '219053',
                'abilityTreeNodes' => [
                    'FEATUREehpcAU9WIU',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时设置的本页条数。 默认50，最大100。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '50',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '当前页码。'."\n"
                            ."\n"
                            .'起始值：1'."\n"
                            ."\n"
                            .'默认值：1',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'Filter',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '查询作业过滤条件。',
                        'type' => 'object',
                        'properties' => [
                            'JobName' => [
                                'description' => '作业名称。支持模糊查询。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'testJob',
                            ],
                            'JobId' => [
                                'description' => '作业ID。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'job-xxxx',
                            ],
                            'TimeCreatedAfter' => [
                                'description' => '在此时间之后提交的作业，以所在地域的时间转化为（国内站为东八区）Unix时间戳。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '1703819914',
                            ],
                            'TimeCreatedBefore' => [
                                'description' => '在此时间之前提交的作业，以所在地域的时间转化为（国内站为东八区）Unix时间戳。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '1703820113',
                            ],
                            'Status' => [
                                'description' => '作业状态。取值范围：'."\n"
                                    ."\n"
                                    .'- Pending：作业排队中'."\n"
                                    .'- Initing：作业初始化中'."\n"
                                    .'- Succeed：作业运行成功'."\n"
                                    .'- Failed：作业运行失败'."\n"
                                    .'- Running：作业运行中'."\n"
                                    .'- Exception：调度异常'."\n"
                                    .'- Retrying：作业重试中'."\n"
                                    .'- Expired：作业超时'."\n"
                                    .'- Deleting：作业删除中'."\n"
                                    .'- Deleted：作业删除完成',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'Running',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'SortBy',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '排序方式。',
                        'type' => 'object',
                        'properties' => [
                            'Label' => [
                                'description' => '排序标签。取值范围：'."\n"
                                    ."\n"
                                    .'- time_start'."\n"
                                    .'- job_name',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'time_start',
                            ],
                            'Order' => [
                                'description' => '排序顺序。取值范围：'."\n"
                                    ."\n"
                                    .'- ASC（默认值）：升序'."\n"
                                    .'- DESC：降序',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'ASC',
                            ],
                        ],
                        'required' => false,
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
                            'TotalCount' => [
                                'title' => 'TotalCount本次请求条件下的数据总量，此参数为可选参数，默认可不返回',
                                'description' => '本次请求条件下的数据总量。'."\n"
                                    .'此参数为可选参数，默认可不返回。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '896D338C-E4F4-41EC-A154-D605E5DE****',
                            ],
                            'PageSize' => [
                                'description' => '分页查询时设置的本页条数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'PageNumber' => [
                                'title' => 'MaxResults本次请求所返回的最大记录条数',
                                'description' => '当前页码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'JobList' => [
                                'description' => '作业列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '作业列表。',
                                    'type' => 'object',
                                    'properties' => [
                                        'JobName' => [
                                            'description' => '作业名称。',
                                            'type' => 'string',
                                            'example' => 'testJob',
                                        ],
                                        'JobId' => [
                                            'description' => '作业ID。',
                                            'type' => 'string',
                                            'example' => 'job-xxx',
                                        ],
                                        'JobDescription' => [
                                            'description' => '作业描述。',
                                            'type' => 'string',
                                            'example' => 'Demo',
                                        ],
                                        'CreateTime' => [
                                            'description' => '作业提交时间。',
                                            'type' => 'string',
                                            'example' => '2024-01-25 12:29:21',
                                        ],
                                        'OwnerUid' => [
                                            'description' => '创建人UID。',
                                            'type' => 'string',
                                            'example' => '129**********',
                                        ],
                                        'Status' => [
                                            'description' => '作业状态。可能值：'."\n"
                                                .'- Pending：作业排队中'."\n"
                                                .'- Initing：作业初始化中'."\n"
                                                .'- Succeed：作业运行成功'."\n"
                                                .'- Failed：作业运行失败'."\n"
                                                .'- Running：作业运行中'."\n"
                                                .'- Exception：调度异常'."\n"
                                                .'- Retrying：作业重试中'."\n"
                                                .'- Expired：作业超时'."\n"
                                                .'- Deleting：作业删除中'."\n"
                                                .'- Deleting：作业删除完成',
                                            'type' => 'string',
                                            'example' => 'Running',
                                        ],
                                        'TaskCount' => [
                                            'description' => '任务数量。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'ExecutorCount' => [
                                            'description' => '运行节点数量。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'StartTime' => [
                                            'description' => '作业开始时间。',
                                            'type' => 'string',
                                            'example' => '2024-01-25 12:29:23',
                                        ],
                                        'EndTime' => [
                                            'description' => '作业结束时间。',
                                            'type' => 'string',
                                            'example' => '2024-01-25 12:35:23',
                                        ],
                                        'TaskSustainable' => [
                                            'description' => '是否是长时间运行的作业。',
                                            'type' => 'boolean',
                                            'example' => 'true',
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
                        'errorCode' => 'InvalidParams',
                        'errorMessage' => 'The specified parameter %s is invalid.',
                    ],
                    [
                        'errorCode' => 'InDebt',
                        'errorMessage' => 'Your account has overdue payments.',
                    ],
                    [
                        'errorCode' => 'NotEnabled',
                        'errorMessage' => 'You have not enabled this service.',
                    ],
                ],
                406 => [
                    [
                        'errorCode' => 'AliyunError',
                        'errorMessage' => 'An Alibaba Cloud product error occurred.',
                    ],
                    [
                        'errorCode' => 'DbError',
                        'errorMessage' => 'A database error occurred.',
                    ],
                ],
                503 => [
                    [
                        'errorCode' => 'ServiceUnavailable',
                        'errorMessage' => 'The request has failed due to a temporary failure of the server.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"TotalCount\\": 1,\\n  \\"RequestId\\": \\"896D338C-E4F4-41EC-A154-D605E5DE****\\",\\n  \\"PageSize\\": 10,\\n  \\"PageNumber\\": 1,\\n  \\"JobList\\": [\\n    {\\n      \\"JobName\\": \\"testJob\\",\\n      \\"JobId\\": \\"job-xxx\\",\\n      \\"JobDescription\\": \\"Demo\\",\\n      \\"CreateTime\\": \\"2024-01-25 12:29:21\\",\\n      \\"OwnerUid\\": \\"129**********\\",\\n      \\"Status\\": \\"Running\\",\\n      \\"TaskCount\\": 1,\\n      \\"ExecutorCount\\": 1,\\n      \\"StartTime\\": \\"2024-01-25 12:29:23\\",\\n      \\"EndTime\\": \\"2024-01-25 12:35:23\\",\\n      \\"TaskSustainable\\": true\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询作业列表',
        ],
        'DeleteJobs' => [
            'summary' => '删除指定集群中一个或多个作业。',
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
                'abilityTreeCode' => '219051',
                'abilityTreeNodes' => [
                    'FEATUREehpcAU9WIU',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'JobSpec',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '待删除作业信息。',
                        'type' => 'array',
                        'items' => [
                            'description' => '待删除作业信息。',
                            'type' => 'object',
                            'properties' => [
                                'JobId' => [
                                    'description' => '待删除的作业ID。    '."\n"
                                        .'您可以调用ListJobs查询作业ID。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'job-xxxx'."\n",
                                ],
                                'TaskSpec' => [
                                    'description' => '待删除作业的任务详情。',
                                    'type' => 'array',
                                    'items' => [
                                        'description' => '待删除作业的任务详情。',
                                        'type' => 'object',
                                        'properties' => [
                                            'TaskName' => [
                                                'description' => '待删除的任务名称。',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'task0',
                                            ],
                                            'ArrayIndex' => [
                                                'description' => '待删除的数组作业索引列表。',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => '数组作业索引。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'required' => false,
                                                    'example' => '1',
                                                ],
                                                'required' => false,
                                            ],
                                        ],
                                        'required' => false,
                                    ],
                                    'required' => false,
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ExecutorIds',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => 'Executor ID列表，最大支持100条。',
                        'type' => 'array',
                        'items' => [
                            'description' => 'Executor ID。格式为JobId-TaskName-ArrayIndex。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'job-xxxx-task0-1'."\n",
                        ],
                        'required' => false,
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
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '04F0F334-1335-436C-A1D7-6C044FE7****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParams',
                        'errorMessage' => 'The specified parameter %s is invalid.',
                    ],
                    [
                        'errorCode' => 'JobNotFound',
                        'errorMessage' => 'The specified job id is not found.',
                    ],
                ],
                406 => [
                    [
                        'errorCode' => 'DbError',
                        'errorMessage' => 'A database error occurred.',
                    ],
                ],
                503 => [
                    [
                        'errorCode' => 'ServiceUnavailable',
                        'errorMessage' => 'The request has failed due to a temporary failure of the server.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"04F0F334-1335-436C-A1D7-6C044FE7****\\"\\n}","type":"json"}]',
            'title' => '删除作业',
        ],
        'ListJobExecutors' => [
            'summary' => '查询作业Executor信息。',
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
                'abilityTreeCode' => '219059',
                'abilityTreeNodes' => [
                    'FEATUREehpcAU9WIU',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'JobId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '作业ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'job-xxx',
                    ],
                ],
                [
                    'name' => 'TaskName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '作业名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'task0',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页显示条数。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询的页码。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1',
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
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '896D338C-E4F4-41EC-A154-D605E5DE****',
                            ],
                            'JobId' => [
                                'description' => '作业ID。',
                                'type' => 'string',
                                'example' => 'job-xxxx',
                            ],
                            'TaskName' => [
                                'description' => '作业名称。',
                                'type' => 'string',
                                'example' => 'task0',
                            ],
                            'PageSize' => [
                                'description' => '每页条数。',
                                'type' => 'string',
                                'example' => '10',
                            ],
                            'PageNumber' => [
                                'description' => '当前页码。',
                                'type' => 'string',
                                'example' => '1',
                            ],
                            'TotalCount' => [
                                'description' => '列表条目总数。',
                                'type' => 'string',
                                'example' => '50',
                            ],
                            'Executors' => [
                                'description' => 'Executor列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => 'Executor属性。',
                                    'type' => 'object',
                                    'properties' => [
                                        'ArrayIndex' => [
                                            'description' => 'Executor编号。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '0',
                                        ],
                                        'IpAddress' => [
                                            'description' => '节点IP地址列表。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '节点IP地址。',
                                                'type' => 'string',
                                                'example' => '192.168.10.11',
                                            ],
                                        ],
                                        'HostName' => [
                                            'description' => '节点主机名数组。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '主机名。',
                                                'type' => 'string',
                                                'example' => 'host0',
                                            ],
                                        ],
                                        'CreateTime' => [
                                            'description' => '创建时间。',
                                            'type' => 'string',
                                            'example' => '2024-02-20 10:04:10',
                                        ],
                                        'EndTime' => [
                                            'description' => '结束时间。',
                                            'type' => 'string',
                                            'example' => '2024-02-20 10:04:18',
                                        ],
                                        'Status' => [
                                            'description' => '作业状态。可能值：'."\n"
                                                .'- Pending：作业排队中'."\n"
                                                .'- Initing：作业初始化中'."\n"
                                                .'- Succeed：作业运行成功'."\n"
                                                .'- Failed：作业运行失败'."\n"
                                                .'- Running：作业运行中'."\n"
                                                .'- Unknown：查询不到ECS/ECI状态'."\n"
                                                .'- Exception：资源调度异常'."\n"
                                                .'- Retrying：作业重试中'."\n"
                                                .'- Expired：作业超时'."\n"
                                                .'- Deleting：作业删除中'."\n"
                                                .'- Deleted：作业删除完成',
                                            'type' => 'string',
                                            'example' => 'Running',
                                        ],
                                        'StatusReason' => [
                                            'description' => '状态原因描述。',
                                            'type' => 'string',
                                            'example' => 'Creating executor',
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
                        'errorCode' => 'InvalidParams',
                        'errorMessage' => 'The specified parameter %s is invalid.',
                    ],
                    [
                        'errorCode' => 'JobNotFound',
                        'errorMessage' => 'The specified job id is not found.',
                    ],
                ],
                406 => [
                    [
                        'errorCode' => 'DbError',
                        'errorMessage' => 'A database error occurred.',
                    ],
                ],
                503 => [
                    [
                        'errorCode' => 'ServiceUnavailable',
                        'errorMessage' => 'The request has failed due to a temporary failure of the server.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"896D338C-E4F4-41EC-A154-D605E5DE****\\",\\n  \\"JobId\\": \\"job-xxxx\\",\\n  \\"TaskName\\": \\"task0\\",\\n  \\"PageSize\\": \\"10\\",\\n  \\"PageNumber\\": \\"1\\",\\n  \\"TotalCount\\": \\"50\\",\\n  \\"Executors\\": [\\n    {\\n      \\"ArrayIndex\\": 0,\\n      \\"IpAddress\\": [\\n        \\"192.168.10.11\\"\\n      ],\\n      \\"HostName\\": [\\n        \\"host0\\"\\n      ],\\n      \\"CreateTime\\": \\"2024-02-20 10:04:10\\",\\n      \\"EndTime\\": \\"2024-02-20 10:04:18\\",\\n      \\"Status\\": \\"Running\\",\\n      \\"StatusReason\\": \\"Creating executor\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询作业Executor信息',
            'description' => '查询作业Executor信息。',
        ],
        'ListExecutors' => [
            'summary' => '查询全局Executor信息。',
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
                'operationType' => 'list',
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '219060',
                'abilityTreeNodes' => [
                    'FEATUREehpcAU9WIU',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Filter',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '查询Executor过滤条件。',
                        'type' => 'object',
                        'properties' => [
                            'JobName' => [
                                'description' => '作业名称。精确过滤，不支持模糊查询。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'testJob',
                            ],
                            'ExecutorIds' => [
                                'description' => 'Executor ID列表，最大支持100条。',
                                'type' => 'array',
                                'items' => [
                                    'description' => 'Executor ID。格式为JobId-TaskName-ArrayIndex。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'job-xxxx-task0-1',
                                ],
                                'required' => false,
                            ],
                            'IpAddresses' => [
                                'description' => '内网IP地址列表，最大支持100条。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '内网IP地址。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '192.168.0.1',
                                ],
                                'required' => false,
                            ],
                            'TimeCreatedBefore' => [
                                'description' => '在此时间之前提交的作业，以所在地域的时间转化为（国内站为东八区）Unix时间戳。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '1703820113',
                            ],
                            'TimeCreatedAfter' => [
                                'description' => '在此时间之后提交的作业，以所在地域的时间转化为（国内站为东八区）Unix时间戳。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '1703819914',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时设置的本页条数。 默认50，最大100。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '50',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '当前页码。    '."\n"
                            .'起始值：1    '."\n"
                            .'默认值：1',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1',
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
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '896D338C-E4F4-41EC-A154-D605E5DE****',
                            ],
                            'PageSize' => [
                                'description' => '分页查询时设置的本页条数。',
                                'type' => 'string',
                                'example' => '50',
                            ],
                            'PageNumber' => [
                                'description' => '当前页码。',
                                'type' => 'string',
                                'example' => '1',
                            ],
                            'TotalCount' => [
                                'description' => '列表条目总数。',
                                'type' => 'string',
                                'example' => '40',
                            ],
                            'Executors' => [
                                'description' => 'Executor列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => 'Executor属性。',
                                    'type' => 'object',
                                    'properties' => [
                                        'ExecutorId' => [
                                            'description' => 'Executor ID。格式为JobId-TaskName-ArrayIndex。',
                                            'type' => 'string',
                                            'example' => 'job-xxxx-task0-1',
                                        ],
                                        'JobId' => [
                                            'description' => '作业ID。',
                                            'type' => 'string',
                                            'example' => 'job-hy1nggvyukuvkr******',
                                        ],
                                        'JobName' => [
                                            'description' => '作业名称。',
                                            'type' => 'string',
                                            'example' => 'testJob',
                                        ],
                                        'TaskName' => [
                                            'description' => '任务名称。',
                                            'type' => 'string',
                                            'example' => 'task0',
                                        ],
                                        'ArrayIndex' => [
                                            'description' => 'Executor编号。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '0',
                                        ],
                                        'IpAddress' => [
                                            'description' => '内网IP地址列表。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '内网IP地址。',
                                                'type' => 'string',
                                                'example' => '192.168.0.1',
                                            ],
                                        ],
                                        'HostName' => [
                                            'description' => '主机名列表。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '主机名。',
                                                'type' => 'string',
                                                'example' => 'testJob-0',
                                            ],
                                        ],
                                        'CreateTime' => [
                                            'description' => '创建时间。',
                                            'type' => 'string',
                                            'example' => '2024-02-20 10:04:10',
                                        ],
                                        'EndTime' => [
                                            'description' => '结束时间。',
                                            'type' => 'string',
                                            'example' => '2024-02-20 10:04:18',
                                        ],
                                        'Status' => [
                                            'description' => '作业状态。可能值：'."\n"
                                                .'- Pending：作业排队中'."\n"
                                                .'- Initing：作业初始化中'."\n"
                                                .'- Succeed：作业运行成功'."\n"
                                                .'- Failed：作业运行失败'."\n"
                                                .'- Running：作业运行中'."\n"
                                                .'- Unknown：查询不到ECS/ECI状态'."\n"
                                                .'- Exception：资源调度异常'."\n"
                                                .'- Retrying：作业重试中'."\n"
                                                .'- Expired：作业超时'."\n"
                                                .'- Deleting：作业删除中'."\n"
                                                .'- Deleted：作业删除完成',
                                            'type' => 'string',
                                            'example' => 'Running',
                                        ],
                                        'StatusReason' => [
                                            'description' => '状态原因描述。',
                                            'type' => 'string',
                                            'example' => 'Succeeded to release executor resource',
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
                        'errorCode' => 'InvalidParams',
                        'errorMessage' => 'The specified parameter %s is invalid.',
                    ],
                ],
                406 => [
                    [
                        'errorCode' => 'DbError',
                        'errorMessage' => 'A database error occurred.',
                    ],
                ],
                503 => [
                    [
                        'errorCode' => 'ServiceUnavailable',
                        'errorMessage' => 'The request has failed due to a temporary failure of the server.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"896D338C-E4F4-41EC-A154-D605E5DE****\\",\\n  \\"PageSize\\": \\"50\\",\\n  \\"PageNumber\\": \\"1\\",\\n  \\"TotalCount\\": \\"40\\",\\n  \\"Executors\\": [\\n    {\\n      \\"ExecutorId\\": \\"job-xxxx-task0-1\\",\\n      \\"JobId\\": \\"job-hy1nggvyukuvkr******\\",\\n      \\"JobName\\": \\"testJob\\",\\n      \\"TaskName\\": \\"task0\\",\\n      \\"ArrayIndex\\": 0,\\n      \\"IpAddress\\": [\\n        \\"192.168.0.1\\"\\n      ],\\n      \\"HostName\\": [\\n        \\"testJob-0\\"\\n      ],\\n      \\"CreateTime\\": \\"2024-02-20 10:04:10\\",\\n      \\"EndTime\\": \\"2024-02-20 10:04:18\\",\\n      \\"Status\\": \\"Running\\",\\n      \\"StatusReason\\": \\"Succeeded to release executor resource\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询全局Executor信息',
        ],
        'DescribeJobMetricData' => [
            'summary' => '通过指定特定作业数组索引及查询监控项参数，查询作业的监控时序数据集。',
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
                'abilityTreeCode' => '219038',
                'abilityTreeNodes' => [
                    'FEATUREehpcR6Y931',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'JobId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '作业 ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'job-xxxxx'."\n",
                    ],
                ],
                [
                    'name' => 'TaskName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'Task0'."\n",
                    ],
                ],
                [
                    'name' => 'MetricName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '作业监控项。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cpu_utilization'."\n",
                    ],
                ],
                [
                    'name' => 'ArrayIndex',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '数组作业索引列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '数组作业索引。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'required' => true,
                            'docRequired' => true,
                            'example' => '1',
                        ],
                        'required' => true,
                        'docRequired' => true,
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
                                'description' => '请求 ID。',
                                'type' => 'string',
                                'example' => '04F0F334-1335-436C-A1D7-6C044FE7****'."\n",
                            ],
                            'Period' => [
                                'description' => '监控数据的统计周期。取值：15、60、900 和 3600。单位：秒。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '15',
                            ],
                            'DataPoints' => [
                                'description' => '监控统计数据点。',
                                'type' => 'string',
                                'example' => '[{"timestamp":1709540685000,"Minimum":28.45,"Maximum":28.45,"Average":28.45}]'."\n",
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParams',
                        'errorMessage' => 'The specified parameter %s is invalid.',
                    ],
                    [
                        'errorCode' => 'JobNotFound',
                        'errorMessage' => 'The specified job id is not found.',
                    ],
                ],
                406 => [
                    [
                        'errorCode' => 'DbError',
                        'errorMessage' => 'A database error occurred.',
                    ],
                ],
                503 => [
                    [
                        'errorCode' => 'ServiceUnavailable',
                        'errorMessage' => 'The request has failed due to a temporary failure of the server.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"04F0F334-1335-436C-A1D7-6C044FE7****\\\\n\\",\\n  \\"Period\\": 15,\\n  \\"DataPoints\\": \\"[{\\\\\\"timestamp\\\\\\":1709540685000,\\\\\\"Minimum\\\\\\":28.45,\\\\\\"Maximum\\\\\\":28.45,\\\\\\"Average\\\\\\":28.45}]\\\\n\\"\\n}","type":"json"}]',
            'title' => '查询作业监控项的监控数据',
        ],
        'DescribeJobMetricLast' => [
            'summary' => '通过指定特定的作业数组索引列表，查询作业数组列表下的所有即时监控指标。',
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
                'operationType' => 'list',
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '219041',
                'abilityTreeNodes' => [
                    'FEATUREehpcR6Y931',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'JobId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '作业 ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'job-xxxxx'."\n",
                    ],
                ],
                [
                    'name' => 'TaskName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'Task0',
                    ],
                ],
                [
                    'name' => 'ArrayIndex',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '数组作业索引列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '数组作业索引。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'required' => true,
                            'docRequired' => true,
                            'example' => '1',
                        ],
                        'required' => true,
                        'docRequired' => true,
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
                                'description' => '请求 ID。',
                                'type' => 'string',
                                'example' => '04F0F334-1335-436C-A1D7-6C044FE7****'."\n",
                            ],
                            'Metrics' => [
                                'description' => 'JobMetric 信息详情列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => 'JobMetric 信息详情。',
                                    'type' => 'object',
                                    'properties' => [
                                        'ArrayIndex' => [
                                            'description' => '数组作业索引。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'Metric' => [
                                            'description' => '数组作业索引对应的监控项信息。',
                                            'type' => 'string',
                                            'example' => '{"memory_utilization": 37.42,"cpu_utilization": 1.008, "disk_utilization": 3.562}'."\n",
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
                        'errorCode' => 'InvalidParams',
                        'errorMessage' => 'The specified parameter %s is invalid.',
                    ],
                    [
                        'errorCode' => 'JobNotFound',
                        'errorMessage' => 'The specified job id is not found.',
                    ],
                ],
                406 => [
                    [
                        'errorCode' => 'DbError',
                        'errorMessage' => 'A database error occurred.',
                    ],
                ],
                503 => [
                    [
                        'errorCode' => 'ServiceUnavailable',
                        'errorMessage' => 'The request has failed due to a temporary failure of the server.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"04F0F334-1335-436C-A1D7-6C044FE7****\\\\n\\",\\n  \\"Metrics\\": [\\n    {\\n      \\"ArrayIndex\\": 1,\\n      \\"Metric\\": \\"{\\\\\\"memory_utilization\\\\\\": 37.42,\\\\\\"cpu_utilization\\\\\\": 1.008, \\\\\\"disk_utilization\\\\\\": 3.562}\\\\n\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询作业监控项的即时监控数据',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'ehpcinstant.cn-beijing.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-heyuan',
            'endpoint' => 'ehpcinstant.cn-heyuan.aliyuncs.com',
        ],
    ],
];
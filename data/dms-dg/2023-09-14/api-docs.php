<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'dms-dg',
        'version' => '2023-09-14',
    ],
    'directories' => [
        [
            'id' => 192886,
            'title' => '网关管理',
            'type' => 'directory',
            'children' => [
                'CreateGateway',
                'AddDatabase',
                'AddDatabaseList',
                'CheckDGEnabled',
                'ConnectDatabase',
                'CreateGatewayVerifyCode',
                'DeleteDatabase',
                'DeleteGateway',
                'DeleteGatewayInstance',
                'DescribeRegions',
                'DownloadGatewayProgram',
                'FindUserGatewayById',
                'GetUserDatabases',
                'GetUserGatewayInstances',
                'GetUserGateways',
                'ListDatabaseAccessPoint',
                'ModifyDatabase',
                'ModifyGateway',
                'RetryDatabase',
                'StopGateway',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'CreateGateway' => [
            'summary' => '调用此API创建一个全新的数据库网关。',
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
            'systemTags' => [
                'abilityTreeCode' => '197507',
                'abilityTreeNodes' => [
                    'FEATUREdms1KPGDT',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'GatewayName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '网关名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'DG网关',
                    ],
                ],
                [
                    'name' => 'GatewayDesc',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '描述创建该网关的用途等。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '测试DG网关',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '新建的网关所在地域。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '响应码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Data' => [
                                'description' => '返回结果。',
                                'type' => 'string',
                                'example' => 'dg-nmz841r7b681****',
                            ],
                            'ErrorMsg' => [
                                'description' => '报错信息。',
                                'type' => 'string',
                                'example' => 'Gateway exception, please launch local dg first',
                            ],
                            'RequestId' => [
                                'description' => '请求ID，用于定位日志，排查问题。',
                                'type' => 'string',
                                'example' => 'A9A8885B-3626-592E-9149-8D2971A545AD',
                            ],
                            'Success' => [
                                'description' => '请求是否成功，返回值如下：'."\n"
                                    ."\n"
                                    .'- **true**：请求成功。                                 '."\n"
                                    .'- **false**：请求失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Data\\": \\"dg-nmz841r7b681****\\",\\n  \\"ErrorMsg\\": \\"Gateway exception, please launch local dg first\\",\\n  \\"RequestId\\": \\"A9A8885B-3626-592E-9149-8D2971A545AD\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '创建网关',
        ],
        'AddDatabase' => [
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
                'abilityTreeCode' => '197520',
                'abilityTreeNodes' => [
                    'FEATUREdms1KPGDT',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'GatewayId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '网关ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'dg-8d9bqu1030m****',
                    ],
                ],
                [
                    'name' => 'Host',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '通过网关所在宿主机去访问数据库的地址。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '127.0.XX.XX',
                    ],
                ],
                [
                    'name' => 'Port',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '通过网关所在宿主机去访问数据库的端口。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '3306',
                    ],
                ],
                [
                    'name' => 'DbType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '数据库类型。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'MYSQL',
                    ],
                ],
                [
                    'name' => 'DbUserName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '访问数据库所用的用户名。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'test_usr',
                    ],
                ],
                [
                    'name' => 'DbPassword',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '访问数据库所用的密码。'."\n"
                            ."\n"
                            .'> 仅用于验证数据库是否可以连接成功，不做任何其他工作。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '1234!2#%A***',
                    ],
                ],
                [
                    'name' => 'DbDescription',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '数据库的描述。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '测试',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '数据库所在地域。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'DbName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '数据库名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '该参数值由客户端生成，用于确保请求的幂等性。该参数值在不同请求间是唯一的，并且区分大小写，长度不超过64个ASCII字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ETnLKlblzczshOTUbOCzxxxx',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '响应码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'ErrorMsg' => [
                                'description' => '报错信息。',
                                'type' => 'string',
                                'example' => 'SYSTEM_ERR',
                            ],
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => 'A8B2EED2-70EF-51F1-8820-914F9AC9BAD2',
                            ],
                            'Success' => [
                                'description' => '请求是否成功，返回值如下：'."\n"
                                    .'- **true**：请求成功'."\n"
                                    .'- **false**：请求失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'DbInstance' => [
                                'description' => '数据库连接实例列表。',
                                'type' => 'object',
                                'properties' => [
                                    'Port' => [
                                        'title' => '通过网关所在宿主机去访问数据库的端口。',
                                        'description' => '通过网关所在宿主机去访问数据库的端口。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => true,
                                        'docRequired' => true,
                                        'example' => '3306',
                                    ],
                                    'Host' => [
                                        'title' => '通过网关所在宿主机去访问数据库的地址。',
                                        'description' => '通过网关所在宿主机去访问数据库的地址。',
                                        'type' => 'string',
                                        'required' => true,
                                        'docRequired' => true,
                                        'example' => '127.0.0.1',
                                    ],
                                    'GatewayId' => [
                                        'title' => '网关ID。',
                                        'description' => '网关ID。',
                                        'type' => 'string',
                                        'deprecated' => false,
                                        'required' => true,
                                        'example' => 'dg-8d9bqu1030mhk0ix',
                                        'pattern' => '',
                                        'default' => '',
                                    ],
                                    'DbType' => [
                                        'title' => '数据库类型。',
                                        'description' => '数据库类型。',
                                        'type' => 'string',
                                        'deprecated' => false,
                                        'required' => false,
                                        'example' => 'MYSQL',
                                        'pattern' => '',
                                        'default' => '',
                                    ],
                                    'RegionId' => [
                                        'title' => '所在的地域编号',
                                        'description' => '地域ID。',
                                        'type' => 'string',
                                        'deprecated' => false,
                                        'required' => true,
                                        'example' => 'cn-hangzhou',
                                        'pattern' => '',
                                        'default' => '',
                                    ],
                                    'ConnectHost' => [
                                        'title' => '连接使用的主机',
                                        'description' => '数据库连接在DG服务侧的映射地址。',
                                        'type' => 'string',
                                        'deprecated' => false,
                                        'example' => '10.0.0.1',
                                        'pattern' => '',
                                        'default' => '',
                                    ],
                                    'ConnectPort' => [
                                        'description' => '数据库连接在DG服务侧的映射端口。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'deprecated' => false,
                                        'example' => '32875',
                                    ],
                                    'ServiceType' => [
                                        'title' => '服务类型',
                                        'description' => 'DG服务器类型。',
                                        'type' => 'string',
                                        'deprecated' => false,
                                        'example' => 'ECS',
                                        'pattern' => '',
                                        'default' => '',
                                    ],
                                    'NetworkType' => [
                                        'title' => '网络类型',
                                        'description' => 'DG服务器网络类型。',
                                        'type' => 'string',
                                        'deprecated' => false,
                                        'example' => 'VPC',
                                        'pattern' => '',
                                        'default' => '',
                                    ],
                                    'NodeId' => [
                                        'title' => '节点的ID',
                                        'description' => 'DG服务器节点ID。',
                                        'type' => 'string',
                                        'deprecated' => false,
                                        'example' => 'dg-node-r0SR-E90lsIRNgj6B_9m',
                                        'pattern' => '',
                                        'default' => '',
                                    ],
                                    'InstanceStatus' => [
                                        'title' => '当前实例的状态',
                                        'description' => '当前DG网关实例的状态。',
                                        'type' => 'string',
                                        'deprecated' => false,
                                        'example' => 'SUCCESS',
                                        'pattern' => '',
                                        'default' => '',
                                        'enum' => [
                                            'SUCCESS',
                                            'EXCEPTION',
                                            'INIT',
                                            'DELETED',
                                        ],
                                    ],
                                    'DbDescription' => [
                                        'title' => '备注信息',
                                        'description' => '备注信息',
                                        'type' => 'string',
                                        'deprecated' => false,
                                        'example' => 'test',
                                        'pattern' => '',
                                        'default' => '',
                                    ],
                                    'InstanceId' => [
                                        'title' => '数据库实例ID',
                                        'description' => '数据库连接实例ID。',
                                        'type' => 'string',
                                        'deprecated' => false,
                                        'example' => 'dg-db-rgfg9p4586o7y79b',
                                        'pattern' => '',
                                        'default' => '',
                                    ],
                                    'GatewayName' => [
                                        'title' => '网关名称',
                                        'description' => '网关名称。',
                                        'type' => 'string',
                                        'deprecated' => false,
                                        'example' => '测试',
                                        'pattern' => '',
                                        'default' => '',
                                    ],
                                    'UserId' => [
                                        'title' => '用户ID',
                                        'description' => '用户ID。',
                                        'type' => 'string',
                                        'deprecated' => false,
                                        'example' => '167xxxxxxxxxx',
                                        'pattern' => '',
                                        'default' => '',
                                    ],
                                    'ParentId' => [
                                        'title' => '归属主账号ID',
                                        'description' => '归属主账号ID。',
                                        'type' => 'string',
                                        'deprecated' => false,
                                        'example' => '167xxxxxxxxxx',
                                        'pattern' => '',
                                        'default' => '',
                                    ],
                                    'VpcId' => [
                                        'title' => 'VpcId',
                                        'description' => 'DG服务器所在VpcId',
                                        'type' => 'string',
                                        'deprecated' => false,
                                        'example' => 'vpc-xxxxx',
                                        'pattern' => '',
                                        'default' => '',
                                    ],
                                    'VpcInstanceId' => [
                                        'title' => 'VpcInstanceId',
                                        'description' => 'DG服务器Vpc实例ID',
                                        'type' => 'string',
                                        'deprecated' => false,
                                        'example' => 'i-xxxxxxx',
                                        'pattern' => '',
                                        'default' => '',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"ErrorMsg\\": \\"SYSTEM_ERR\\",\\n  \\"RequestId\\": \\"A8B2EED2-70EF-51F1-8820-914F9AC9BAD2\\",\\n  \\"Success\\": true,\\n  \\"DbInstance\\": {\\n    \\"Port\\": 3306,\\n    \\"Host\\": \\"127.0.0.1\\",\\n    \\"GatewayId\\": \\"dg-8d9bqu1030mhk0ix\\",\\n    \\"DbType\\": \\"MYSQL\\",\\n    \\"RegionId\\": \\"cn-hangzhou\\",\\n    \\"ConnectHost\\": \\"10.0.0.1\\",\\n    \\"ConnectPort\\": 32875,\\n    \\"ServiceType\\": \\"ECS\\",\\n    \\"NetworkType\\": \\"VPC\\",\\n    \\"NodeId\\": \\"dg-node-r0SR-E90lsIRNgj6B_9m\\",\\n    \\"InstanceStatus\\": \\"SUCCESS\\",\\n    \\"DbDescription\\": \\"test\\",\\n    \\"InstanceId\\": \\"dg-db-rgfg9p4586o7y79b\\",\\n    \\"GatewayName\\": \\"测试\\",\\n    \\"UserId\\": \\"167xxxxxxxxxx\\",\\n    \\"ParentId\\": \\"167xxxxxxxxxx\\",\\n    \\"VpcId\\": \\"vpc-xxxxx\\",\\n    \\"VpcInstanceId\\": \\"i-xxxxxxx\\"\\n  }\\n}","type":"json"}]',
            'title' => '通过DG接入数据库',
            'summary' => '调用此API可以将他云或本地的数据库接入至阿里云。',
        ],
        'AddDatabaseList' => [
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
                'abilityTreeCode' => '197527',
                'abilityTreeNodes' => [
                    'FEATUREdms1KPGDT',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'DatabaseString',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '待添加数据库的信息。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '[{"host":"127.0.0.1","port":"3306","gatewayId":"dg-xsdasdasdas****"}]',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '该参数值由客户端生成，用于确保请求的幂等性。该参数值在不同请求间是唯一的，并且区分大小写，长度不超过64个ASCII字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ETnLKlblzczshOTUbOCzxxxx',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '响应码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Data' => [
                                'description' => '返回结果。',
                                'type' => 'string',
                                'example' => 'SUCCESS',
                            ],
                            'ErrorMsg' => [
                                'description' => '报错信息。',
                                'type' => 'string',
                                'example' => 'ERROR',
                            ],
                            'RequestId' => [
                                'description' => '请求ID，用于定位日志，排查问题。',
                                'type' => 'string',
                                'example' => '514F794F-7E30-5DAA-97C0-0B0D75DA0259',
                            ],
                            'Success' => [
                                'description' => '请求是否成功，返回值如下：'."\n"
                                    ."\n"
                                    .'- **true**：请求成功。                                 '."\n"
                                    .'- **false**：请求失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'Error',
                        'errorMessage' => 'The requested service is unavailable. Please try again later.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Data\\": \\"SUCCESS\\",\\n  \\"ErrorMsg\\": \\"ERROR\\",\\n  \\"RequestId\\": \\"514F794F-7E30-5DAA-97C0-0B0D75DA0259\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '通过DG批量接入数据库',
            'summary' => '调用此API可以在网关中批量添加数据库。',
        ],
        'CheckDGEnabled' => [
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
            'systemTags' => [
                'abilityTreeCode' => '197534',
                'abilityTreeNodes' => [
                    'FEATUREdms1KPGDT',
                ],
            ],
            'parameters' => [],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '响应码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Data' => [
                                'description' => '返回结果。',
                                'type' => 'string',
                                'example' => 'true',
                            ],
                            'ErrorMsg' => [
                                'description' => '报错信息。',
                                'type' => 'string',
                                'example' => '未开通',
                            ],
                            'RequestId' => [
                                'description' => '请求ID，用于定位日志，排查问题。',
                                'type' => 'string',
                                'example' => '8F29E3E9-2847-53BF-ADF0-130E3CEA5C63',
                            ],
                            'Success' => [
                                'description' => '请求是否成功，返回值如下：'."\n"
                                    .'- **true**：请求成功。                                '."\n"
                                    .'- **false**：请求失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Data\\": \\"true\\",\\n  \\"ErrorMsg\\": \\"未开通\\",\\n  \\"RequestId\\": \\"8F29E3E9-2847-53BF-ADF0-130E3CEA5C63\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '检查当前用户是否开通数据库网关产品',
            'summary' => '调用此API可以检查当前用户是否开通数据库网关产品。',
        ],
        'ConnectDatabase' => [
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
                'operationType' => 'none',
                'abilityTreeCode' => '197505',
                'abilityTreeNodes' => [
                    'FEATUREdms1KPGDT',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'GatewayId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '网关ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'dg-58c36y906675****',
                    ],
                ],
                [
                    'name' => 'Host',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '通过网关所在宿主机去访问数据库的地址。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '127.0.XX.XX',
                    ],
                ],
                [
                    'name' => 'Port',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '通过网关所在宿主机去访问数据库的端口。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '3306',
                    ],
                ],
                [
                    'name' => 'DbType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '数据库类型。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'MYSQL',
                    ],
                ],
                [
                    'name' => 'DbUserName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '访问数据库所用的用户名。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'test_usr'."\n",
                    ],
                ],
                [
                    'name' => 'DbPassword',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '访问数据库所用的密码。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '1234!2#%A****'."\n",
                    ],
                ],
                [
                    'name' => 'DbName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '数据库名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '响应码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Data' => [
                                'description' => '返回结果。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'ErrorMsg' => [
                                'description' => '报错信息。',
                                'type' => 'string',
                                'example' => 'Gateway exception, please launch local dg first',
                            ],
                            'RequestId' => [
                                'description' => '请求ID，用于定位日志，排查问题。',
                                'type' => 'string',
                                'example' => 'F4EFCDC5-E69C-5A6F-B170-C5379D9D6811',
                            ],
                            'Success' => [
                                'description' => '请求是否成功，返回值如下：'."\n"
                                    .'- **true**：请求成功。                                '."\n"
                                    .'- **false**：请求失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Data\\": \\"OK\\",\\n  \\"ErrorMsg\\": \\"Gateway exception, please launch local dg first\\",\\n  \\"RequestId\\": \\"F4EFCDC5-E69C-5A6F-B170-C5379D9D6811\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '数据库连通性测试',
            'summary' => '调用此API对数据库连通性进行测试。',
        ],
        'CreateGatewayVerifyCode' => [
            'summary' => '调用此API可以生成线下安装网关时需要的验证码。该验证码将与云上创建的网关相对应。',
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
                'abilityTreeCode' => '197526',
                'abilityTreeNodes' => [
                    'FEATUREdms1KPGDT',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'GatewayId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '网关ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'dg-8e0j08630s08****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '响应码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Data' => [
                                'description' => '返回结果。',
                                'type' => 'string',
                                'example' => '0N3ufVIG43RRAs7diEoep6WHVOHPKj3a',
                            ],
                            'ErrorMsg' => [
                                'description' => '报错信息。',
                                'type' => 'string',
                                'example' => 'Gateway exception, please launch local dg first',
                            ],
                            'RequestId' => [
                                'description' => '请求ID，用于定位日志，排查问题。',
                                'type' => 'string',
                                'example' => 'C9ADD2AA-27E3-5D62-A676-092EDC5303C1',
                            ],
                            'Success' => [
                                'description' => '请求是否成功，返回值如下：'."\n"
                                    ."\n"
                                    .'- **true**：请求成功。                                '."\n"
                                    .'- **false**：请求失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Data\\": \\"0N3ufVIG43RRAs7diEoep6WHVOHPKj3a\\",\\n  \\"ErrorMsg\\": \\"Gateway exception, please launch local dg first\\",\\n  \\"RequestId\\": \\"C9ADD2AA-27E3-5D62-A676-092EDC5303C1\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '生成线下安装网关时需要的验证码',
        ],
        'DeleteDatabase' => [
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
                'abilityTreeCode' => '197529',
                'abilityTreeNodes' => [
                    'FEATUREdms1KPGDT',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '数据库实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'db-22h1qa9d452f****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '响应码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Data' => [
                                'description' => '返回结果。',
                                'type' => 'string',
                                'example' => 'SUCCESS',
                            ],
                            'ErrorMsg' => [
                                'description' => '报错信息。',
                                'type' => 'string',
                                'example' => 'Gateway exception, please launch local dg first',
                            ],
                            'RequestId' => [
                                'description' => '请求ID，用于定位日志，排查问题。',
                                'type' => 'string',
                                'example' => 'B9FB545B-03E3-5AE3-9D9E-2FE26EE2C48F',
                            ],
                            'Success' => [
                                'description' => '请求是否成功，返回值如下：'."\n"
                                    ."\n"
                                    .'- **true**：请求成功。                                 '."\n"
                                    .'- **false**：请求失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Data\\": \\"SUCCESS\\",\\n  \\"ErrorMsg\\": \\"Gateway exception, please launch local dg first\\",\\n  \\"RequestId\\": \\"B9FB545B-03E3-5AE3-9D9E-2FE26EE2C48F\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '删除数据库',
            'summary' => '调用此API可删除数据库网关中添加的数据库。',
        ],
        'DeleteGateway' => [
            'summary' => '调用此API可以删除指定网关。',
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
            'systemTags' => [
                'abilityTreeCode' => '197522',
                'abilityTreeNodes' => [
                    'FEATUREdms1KPGDT',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'GatewayId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '网关ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'dg-nmz841r7b681****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '响应码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Data' => [
                                'description' => '返回结果。',
                                'type' => 'string',
                                'example' => 'SUCCESS',
                            ],
                            'ErrorMsg' => [
                                'description' => '报错信息。',
                                'type' => 'string',
                                'example' => 'Gateway exception, please launch local dg first',
                            ],
                            'RequestId' => [
                                'description' => '请求ID，用于定位日志，排查问题。',
                                'type' => 'string',
                                'example' => '8F29E3E9-2847-53BF-ADF0-130E3CEA5C63',
                            ],
                            'Success' => [
                                'description' => '请求是否成功，返回值如下：'."\n"
                                    ."\n"
                                    .'- **true**：请求成功。                                 '."\n"
                                    .'- **false**：请求失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Data\\": \\"SUCCESS\\",\\n  \\"ErrorMsg\\": \\"Gateway exception, please launch local dg first\\",\\n  \\"RequestId\\": \\"8F29E3E9-2847-53BF-ADF0-130E3CEA5C63\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '删除网关',
        ],
        'DeleteGatewayInstance' => [
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
                'abilityTreeCode' => '197518',
                'abilityTreeNodes' => [
                    'FEATUREdms1KPGDT',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'GatewayId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '网关ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'dg-nmz841r7b681****',
                    ],
                ],
                [
                    'name' => 'GatewayInstanceId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '网关节点ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'dg-node-QeH6VfT8GRnPrYWX****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '网关所在地域。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '响应码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Data' => [
                                'description' => '返回结果。',
                                'type' => 'string',
                                'example' => 'SUCCESS',
                            ],
                            'ErrorMsg' => [
                                'description' => '报错信息。',
                                'type' => 'string',
                                'example' => 'Gateway exception, please launch local dg first',
                            ],
                            'RequestId' => [
                                'description' => '请求ID，用于定位日志，排查问题。',
                                'type' => 'string',
                                'example' => '8F29E3E9-2847-53BF-ADF0-130E3CEA5C63',
                            ],
                            'Success' => [
                                'description' => '请求是否成功，返回值如下：'."\n"
                                    ."\n"
                                    .'- **true**：请求成功。                                 '."\n"
                                    .'- **false**：请求失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Data\\": \\"SUCCESS\\",\\n  \\"ErrorMsg\\": \\"Gateway exception, please launch local dg first\\",\\n  \\"RequestId\\": \\"8F29E3E9-2847-53BF-ADF0-130E3CEA5C63\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '删除网关节点',
            'summary' => '调用此API可以删除指定的数据库网关节点。',
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
            ],
            'operationType' => 'read',
            'systemTags' => [
                'operationType' => 'none',
                'abilityTreeCode' => '197516',
                'abilityTreeNodes' => [
                    'FEATUREdms1KPGDT',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '响应码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'ErrorMsg' => [
                                'description' => '报错信息。',
                                'type' => 'string',
                                'example' => 'Gateway exception, please launch local dg first',
                            ],
                            'RequestId' => [
                                'description' => '请求ID，用于定位日志，排查问题。',
                                'type' => 'string',
                                'example' => 'B0557F7A-62C3-50DC-9E09-77CAE658F776',
                            ],
                            'Success' => [
                                'description' => '请求是否成功，返回值如下：'."\n"
                                    ."\n"
                                    .'- **true**：请求成功。'."\n"
                                    .'- **false**：请求失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Regions' => [
                                'type' => 'object',
                                'properties' => [
                                    'Region' => [
                                        'description' => '地域列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '地域。',
                                            'type' => 'object',
                                            'properties' => [
                                                'RegionEndpoint' => [
                                                    'description' => '地域对应的接入地址。',
                                                    'type' => 'string',
                                                    'example' => 'dg.cn-hangzhou.aliyuncs.com',
                                                ],
                                                'LocalName' => [
                                                    'description' => '地域名称。',
                                                    'type' => 'string',
                                                    'example' => '杭州',
                                                ],
                                                'RegionId' => [
                                                    'description' => '地域ID',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"ErrorMsg\\": \\"Gateway exception, please launch local dg first\\",\\n  \\"RequestId\\": \\"B0557F7A-62C3-50DC-9E09-77CAE658F776\\",\\n  \\"Success\\": true,\\n  \\"Regions\\": {\\n    \\"Region\\": [\\n      {\\n        \\"RegionEndpoint\\": \\"dg.cn-hangzhou.aliyuncs.com\\",\\n        \\"LocalName\\": \\"杭州\\",\\n        \\"RegionId\\": \\"cn-hangzhou\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '获取数据库网关支持的地域',
            'summary' => '调用此API可以获取支持创建数据库网关的地域。',
        ],
        'DownloadGatewayProgram' => [
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
                'abilityTreeCode' => '197530',
                'abilityTreeNodes' => [
                    'FEATUREdms1KPGDT',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'UserOS',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '用户的操作系统。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'LINUX',
                    ],
                ],
                [
                    'name' => 'DgVersion',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'DG版本。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '3.0',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '响应码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Data' => [
                                'description' => '返回结果。',
                                'type' => 'string',
                                'example' => 'https://dg-prod-cn-hangzhou.oss-cn-hangzhou.aliyuncs.com/dg3-pkgs/DBGateway_linux?Expires=170833****&OSSAccessKeyId=LTAIfHvNGC8y****&Signature=wa8KqWuyZdB0hwx%2BKvbgZeSTW****',
                            ],
                            'ErrorMsg' => [
                                'description' => '报错信息。',
                                'type' => 'string',
                                'example' => 'Gateway exception, please launch local dg first',
                            ],
                            'RequestId' => [
                                'description' => '请求ID，用于定位日志，排查问题。',
                                'type' => 'string',
                                'example' => '15D856B8-A95C-5DA5-B0FC-67246286EA7F',
                            ],
                            'Success' => [
                                'description' => '请求是否成功，返回值如下：'."\n"
                                    ."\n"
                                    .'- **true**：请求成功。                                 '."\n"
                                    .'- **false**：请求失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Data\\": \\"https://dg-prod-cn-hangzhou.oss-cn-hangzhou.aliyuncs.com/dg3-pkgs/DBGateway_linux?Expires=170833****&OSSAccessKeyId=LTAIfHvNGC8y****&Signature=wa8KqWuyZdB0hwx%2BKvbgZeSTW****\\",\\n  \\"ErrorMsg\\": \\"Gateway exception, please launch local dg first\\",\\n  \\"RequestId\\": \\"15D856B8-A95C-5DA5-B0FC-67246286EA7F\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '获取网关程序的下载地址',
            'summary' => '调用此API可以获取网关程序的下载地址。阿里云用户均可下载，无需权限认证。',
        ],
        'FindUserGatewayById' => [
            'summary' => '调用此API可以获取网关的详细信息，包括网关的创建人、运行中的网关节点数量等信息。',
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
            'systemTags' => [
                'abilityTreeCode' => '197510',
                'abilityTreeNodes' => [
                    'FEATUREdms1KPGDT',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'GatewayId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '网关ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'dg-nmz841r7b681****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '响应码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'ErrorMsg' => [
                                'description' => '报错信息。',
                                'type' => 'string',
                                'example' => 'Gateway exception, please launch local dg first',
                            ],
                            'RequestId' => [
                                'description' => '请求ID，用于定位日志，排查问题。',
                                'type' => 'string',
                                'example' => '41FC4DFE-EA8A-5A56-A16C-F607C3409C79',
                            ],
                            'Success' => [
                                'description' => '请求是否成功，返回值如下：'."\n"
                                    ."\n"
                                    .'- **true**：请求成功。                                 '."\n"
                                    .'- **false**：请求失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Gateway' => [
                                'description' => '网关详情。',
                                'type' => 'object',
                                'properties' => [
                                    'GatewayDesc' => [
                                        'title' => '网关描述。',
                                        'description' => '网关描述。',
                                        'type' => 'string',
                                        'required' => false,
                                        'docRequired' => true,
                                        'example' => '本地测试',
                                    ],
                                    'GatewayName' => [
                                        'title' => '网关名称。',
                                        'description' => '网关名称。',
                                        'type' => 'string',
                                        'required' => true,
                                        'docRequired' => true,
                                        'example' => '本地测试',
                                    ],
                                    'RegionId' => [
                                        'title' => '地域ID。',
                                        'description' => '地域ID。',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => 'cn-hangzhou',
                                    ],
                                    'GatewayId' => [
                                        'title' => '网关ID',
                                        'description' => '网关ID',
                                        'type' => 'string',
                                        'example' => 'dg-pv33g51gw69h****',
                                    ],
                                    'Status' => [
                                        'title' => '状态',
                                        'description' => '状态。',
                                        'type' => 'string',
                                        'example' => 'RUNNING',
                                        'enum' => [
                                            'RUNNING',
                                            'NEW',
                                            'STOPPED',
                                            'EXCEPTION',
                                        ],
                                    ],
                                    'UserId' => [
                                        'title' => '用户ID',
                                        'description' => '用户ID。',
                                        'type' => 'string',
                                        'example' => '100****',
                                    ],
                                    'CreatorId' => [
                                        'description' => '网关创建人。',
                                        'type' => 'string',
                                        'example' => 'test_user',
                                    ],
                                    'DgVersion' => [
                                        'description' => 'DG版本。',
                                        'type' => 'string',
                                        'example' => '3.0',
                                    ],
                                    'ExceptionMsg' => [
                                        'description' => '错误信息。',
                                        'type' => 'string',
                                        'example' => 'Gateway exception, please launch local dg first',
                                    ],
                                    'NumOfExceptionInstance' => [
                                        'description' => '异常网关节点数量。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '3',
                                    ],
                                    'NumOfRunningInstance' => [
                                        'description' => '运行中网关节点数量。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '3',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"ErrorMsg\\": \\"Gateway exception, please launch local dg first\\",\\n  \\"RequestId\\": \\"41FC4DFE-EA8A-5A56-A16C-F607C3409C79\\",\\n  \\"Success\\": true,\\n  \\"Gateway\\": {\\n    \\"GatewayDesc\\": \\"本地测试\\",\\n    \\"GatewayName\\": \\"本地测试\\",\\n    \\"RegionId\\": \\"cn-hangzhou\\",\\n    \\"GatewayId\\": \\"dg-pv33g51gw69h****\\",\\n    \\"Status\\": \\"RUNNING\\",\\n    \\"UserId\\": \\"100****\\",\\n    \\"CreatorId\\": \\"test_user\\",\\n    \\"DgVersion\\": \\"3.0\\",\\n    \\"ExceptionMsg\\": \\"Gateway exception, please launch local dg first\\",\\n    \\"NumOfExceptionInstance\\": 3,\\n    \\"NumOfRunningInstance\\": 3\\n  }\\n}","type":"json"}]',
            'title' => '获取网关的详细信息',
        ],
        'GetUserDatabases' => [
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
                'abilityTreeCode' => '197519',
                'abilityTreeNodes' => [
                    'FEATUREdms1KPGDT',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'GatewayId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '网关ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'dg-nmz841r7b681****',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '分页大小。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '当前页码。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'SearchKey',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '搜索关键字。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '网关。',
                    ],
                ],
                [
                    'name' => 'DbType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '数据库类型。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'MYSQL'."\n",
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '数据库实例ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'db-22h1qa9d452f****'."\n",
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '网关所在地域。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'Host',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '通过网关所在宿主机去访问数据库的地址。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '127.0.XX.XX',
                    ],
                ],
                [
                    'name' => 'Port',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '通过网关所在宿主机去访问数据库的端口。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '3306',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID，用于定位日志，排查问题。',
                                'type' => 'string',
                                'example' => '514F794F-7E30-5DAA-97C0-0B0D75DA0259',
                            ],
                            'Success' => [
                                'description' => '请求是否成功，返回值如下：'."\n"
                                    ."\n"
                                    .'- **true**：请求成功。                                 '."\n"
                                    .'- **false**：请求失败。',
                                'type' => 'string',
                                'example' => 'true',
                            ],
                            'Code' => [
                                'description' => '响应码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'ErrorMsg' => [
                                'description' => '报错信息。',
                                'type' => 'string',
                                'example' => 'Gateway exception, please launch local dg first',
                            ],
                            'Count' => [
                                'description' => '添加的数据库个数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '100',
                            ],
                            'DbInstanceList' => [
                                'type' => 'object',
                                'properties' => [
                                    'DbInstance' => [
                                        'description' => '数据库实例列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '数据库实例。',
                                            'type' => 'object',
                                            'properties' => [
                                                'Port' => [
                                                    'title' => '通过网关所在宿主机去访问数据库的端口。',
                                                    'description' => '通过网关所在宿主机去访问数据库的端口。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'required' => true,
                                                    'docRequired' => true,
                                                    'example' => '3306',
                                                ],
                                                'Host' => [
                                                    'title' => '通过网关所在宿主机去访问数据库的地址。',
                                                    'description' => '通过网关所在宿主机去访问数据库的地址。',
                                                    'type' => 'string',
                                                    'required' => true,
                                                    'docRequired' => true,
                                                    'example' => '127.0.XX.XX',
                                                ],
                                                'GatewayId' => [
                                                    'title' => '网关ID。',
                                                    'description' => '网关ID。',
                                                    'type' => 'string',
                                                    'deprecated' => false,
                                                    'required' => true,
                                                    'example' => 'dg-pil582nbfe6p****',
                                                    'pattern' => '',
                                                    'default' => '',
                                                ],
                                                'DbType' => [
                                                    'title' => '数据库类型。',
                                                    'description' => '数据库类型。',
                                                    'type' => 'string',
                                                    'deprecated' => false,
                                                    'required' => false,
                                                    'example' => 'MYSQL',
                                                    'pattern' => '',
                                                    'default' => '',
                                                ],
                                                'RegionId' => [
                                                    'title' => '所在的地域编号',
                                                    'description' => '数据库所在地域。',
                                                    'type' => 'string',
                                                    'deprecated' => false,
                                                    'required' => true,
                                                    'example' => 'cn-hangzhou',
                                                    'pattern' => '',
                                                    'default' => '',
                                                ],
                                                'ConnectHost' => [
                                                    'title' => '连接使用的主机',
                                                    'description' => '云上DG服务代理IP。',
                                                    'type' => 'string',
                                                    'deprecated' => false,
                                                    'example' => '10.0.0.0',
                                                    'pattern' => '',
                                                    'default' => '',
                                                ],
                                                'ConnectPort' => [
                                                    'description' => '云上DG服务代理端口。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'deprecated' => false,
                                                    'example' => '10001',
                                                ],
                                                'ServiceType' => [
                                                    'title' => '服务类型',
                                                    'description' => '云上DG服务机器类型。',
                                                    'type' => 'string',
                                                    'deprecated' => false,
                                                    'example' => 'ECS',
                                                    'pattern' => '',
                                                    'default' => '',
                                                ],
                                                'NetworkType' => [
                                                    'title' => '网络类型',
                                                    'description' => '云上DG服务代理节点网络类型。',
                                                    'type' => 'string',
                                                    'deprecated' => false,
                                                    'example' => 'VPC',
                                                    'pattern' => '',
                                                    'default' => '',
                                                ],
                                                'NodeId' => [
                                                    'title' => '节点的ID',
                                                    'description' => '云上DG服务代理节点ID。',
                                                    'type' => 'string',
                                                    'deprecated' => false,
                                                    'example' => 'dg-node-xxxxx',
                                                    'pattern' => '',
                                                    'default' => '',
                                                ],
                                                'InstanceStatus' => [
                                                    'title' => '当前实例的状态',
                                                    'description' => '当前实例的状态。',
                                                    'type' => 'string',
                                                    'deprecated' => false,
                                                    'example' => 'SUCCESS',
                                                    'pattern' => '',
                                                    'default' => '',
                                                    'enum' => [
                                                        'SUCCESS',
                                                        'EXCEPTION',
                                                        'INIT',
                                                        'DELETED',
                                                    ],
                                                ],
                                                'DbDescription' => [
                                                    'title' => '备注信息',
                                                    'description' => '备注信息。',
                                                    'type' => 'string',
                                                    'deprecated' => false,
                                                    'example' => '测试库',
                                                    'pattern' => '',
                                                    'default' => '',
                                                ],
                                                'InstanceId' => [
                                                    'title' => '数据库实例ID',
                                                    'description' => '数据库实例ID。',
                                                    'type' => 'string',
                                                    'deprecated' => false,
                                                    'example' => 'db-22h1qa9d452f****'."\n",
                                                    'pattern' => '',
                                                    'default' => '',
                                                ],
                                                'GatewayName' => [
                                                    'title' => '网关名称',
                                                    'description' => '网关名称。',
                                                    'type' => 'string',
                                                    'deprecated' => false,
                                                    'example' => '测试库',
                                                    'pattern' => '',
                                                    'default' => '',
                                                ],
                                                'GmtCreate' => [
                                                    'title' => '创建时间',
                                                    'description' => '创建时间。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'deprecated' => false,
                                                    'example' => '2023-05-03 00:00:00',
                                                    'pattern' => '',
                                                    'default' => '',
                                                ],
                                                'UserId' => [
                                                    'title' => '用户ID',
                                                    'description' => '用户ID。',
                                                    'type' => 'string',
                                                    'deprecated' => false,
                                                    'example' => '100XXXXX',
                                                    'pattern' => '',
                                                    'default' => '',
                                                ],
                                                'ParentId' => [
                                                    'title' => '归属主账号ID',
                                                    'description' => '归属主账号ID。',
                                                    'type' => 'string',
                                                    'deprecated' => false,
                                                    'example' => '100XXXXX',
                                                    'pattern' => '',
                                                    'default' => '',
                                                ],
                                                'VpcId' => [
                                                    'title' => 'VpcId',
                                                    'description' => '云上DG服务VPC ID。',
                                                    'type' => 'string',
                                                    'deprecated' => false,
                                                    'example' => 'vpc-bp1alpkpdb8fh3avx****',
                                                    'pattern' => '',
                                                    'default' => '',
                                                ],
                                                'VpcInstanceId' => [
                                                    'title' => 'VpcInstanceId',
                                                    'description' => '云上DG服务实例ID。',
                                                    'type' => 'string',
                                                    'deprecated' => false,
                                                    'example' => 'i-xxxxxxxxxx',
                                                    'pattern' => '',
                                                    'default' => '',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"514F794F-7E30-5DAA-97C0-0B0D75DA0259\\",\\n  \\"Success\\": \\"true\\",\\n  \\"Code\\": \\"200\\",\\n  \\"ErrorMsg\\": \\"Gateway exception, please launch local dg first\\",\\n  \\"Count\\": 100,\\n  \\"DbInstanceList\\": {\\n    \\"DbInstance\\": [\\n      {\\n        \\"Port\\": 3306,\\n        \\"Host\\": \\"127.0.XX.XX\\",\\n        \\"GatewayId\\": \\"dg-pil582nbfe6p****\\",\\n        \\"DbType\\": \\"MYSQL\\",\\n        \\"RegionId\\": \\"cn-hangzhou\\",\\n        \\"ConnectHost\\": \\"10.0.0.0\\",\\n        \\"ConnectPort\\": 10001,\\n        \\"ServiceType\\": \\"ECS\\",\\n        \\"NetworkType\\": \\"VPC\\",\\n        \\"NodeId\\": \\"dg-node-xxxxx\\",\\n        \\"InstanceStatus\\": \\"SUCCESS\\",\\n        \\"DbDescription\\": \\"测试库\\",\\n        \\"InstanceId\\": \\"db-22h1qa9d452f****\\\\n\\",\\n        \\"GatewayName\\": \\"测试库\\",\\n        \\"GmtCreate\\": 0,\\n        \\"UserId\\": \\"100XXXXX\\",\\n        \\"ParentId\\": \\"100XXXXX\\",\\n        \\"VpcId\\": \\"vpc-bp1alpkpdb8fh3avx****\\",\\n        \\"VpcInstanceId\\": \\"i-xxxxxxxxxx\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '获取网关中的数据库列表',
            'summary' => '调用此API可以查看指定网关中已添加的数据库列表信息。',
        ],
        'GetUserGatewayInstances' => [
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
                'abilityTreeCode' => '197528',
                'abilityTreeNodes' => [
                    'FEATUREdms1KPGDT',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'GatewayId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '网关ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'dg-nmz841r7b681****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '响应码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'ErrorMsg' => [
                                'description' => '报错信息。',
                                'type' => 'string',
                                'example' => 'Gateway exception, please launch local dg first',
                            ],
                            'RequestId' => [
                                'description' => '请求ID，用于定位日志，排查问题。',
                                'type' => 'string',
                                'example' => '514F794F-7E30-5DAA-97C0-0B0D75DA0259',
                            ],
                            'Success' => [
                                'description' => '请求是否成功，返回值如下：'."\n"
                                    ."\n"
                                    .'- **true**：请求成功。                                 '."\n"
                                    .'- **false**：请求失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'GatewayInstanceList' => [
                                'description' => '网关节点实例列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '网关节点实例。',
                                    'type' => 'object',
                                    'properties' => [
                                        'GatewayInstanceId' => [
                                            'title' => '资源一级ID',
                                            'description' => '网关节点ID。',
                                            'type' => 'string',
                                            'example' => 'dg-node-wJOb0tO-gaaWFCug****',
                                        ],
                                        'GatewayId' => [
                                            'title' => '网关ID',
                                            'description' => '网关ID。',
                                            'type' => 'string',
                                            'example' => 'dg-159t17m19ps0****',
                                        ],
                                        'LastUpdateTime' => [
                                            'title' => '上次更新时间戳',
                                            'description' => '上次更新网关节点的时间戳。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1699330233000',
                                        ],
                                        'LocalIP' => [
                                            'title' => '本地IP地址',
                                            'description' => '本地IP地址。',
                                            'type' => 'string',
                                            'example' => '127.0.XX.XX',
                                        ],
                                        'OutputIP' => [
                                            'title' => '主机',
                                            'description' => '主机。',
                                            'type' => 'string',
                                            'example' => '  127.0.0.1',
                                        ],
                                        'Message' => [
                                            'title' => '提示信息',
                                            'description' => '提示信息。',
                                            'type' => 'string',
                                            'example' => 'SUCCESS',
                                        ],
                                        'EndPoint' => [
                                            'title' => '端点地址',
                                            'description' => '端点地址。',
                                            'type' => 'string',
                                            'example' => '127.0.XX.XX',
                                        ],
                                        'CurrentDaemonVersion' => [
                                            'title' => '进程的版本号',
                                            'description' => '进程的版本号。',
                                            'type' => 'string',
                                            'example' => '3.0',
                                        ],
                                        'CurrentVersion' => [
                                            'title' => '版本号',
                                            'description' => '版本号。',
                                            'type' => 'string',
                                            'example' => '3.0',
                                        ],
                                        'RegionId' => [
                                            'title' => '地域ID',
                                            'description' => '网关节点所在地域。',
                                            'type' => 'string',
                                            'example' => 'cn-hangzhou',
                                        ],
                                        'ConnectEndpointType' => [
                                            'title' => '连接类型',
                                            'description' => '连接类型。',
                                            'type' => 'string',
                                            'example' => 'internet',
                                        ],
                                        'GatewayInstanceStatus' => [
                                            'description' => '网关节点状态。',
                                            'type' => 'string',
                                            'example' => 'STOPPED',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"ErrorMsg\\": \\"Gateway exception, please launch local dg first\\",\\n  \\"RequestId\\": \\"514F794F-7E30-5DAA-97C0-0B0D75DA0259\\",\\n  \\"Success\\": true,\\n  \\"GatewayInstanceList\\": [\\n    {\\n      \\"GatewayInstanceId\\": \\"dg-node-wJOb0tO-gaaWFCug****\\",\\n      \\"GatewayId\\": \\"dg-159t17m19ps0****\\",\\n      \\"LastUpdateTime\\": 1699330233000,\\n      \\"LocalIP\\": \\"127.0.XX.XX\\",\\n      \\"OutputIP\\": \\"  127.0.0.1\\",\\n      \\"Message\\": \\"SUCCESS\\",\\n      \\"EndPoint\\": \\"127.0.XX.XX\\",\\n      \\"CurrentDaemonVersion\\": \\"3.0\\",\\n      \\"CurrentVersion\\": \\"3.0\\",\\n      \\"RegionId\\": \\"cn-hangzhou\\",\\n      \\"ConnectEndpointType\\": \\"internet\\",\\n      \\"GatewayInstanceStatus\\": \\"STOPPED\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '获取网关节点详细信息',
            'summary' => '调用此API可以获取网关节点的详细信息。',
        ],
        'GetUserGateways' => [
            'summary' => '调用此API可以获取用户创建的DG网关列表。',
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
                'abilityTreeCode' => '197533',
                'abilityTreeNodes' => [
                    'FEATUREdms1KPGDT',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'PageSize',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '分页大小。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '100',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '当前页码。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'SearchKey',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '搜索关键字。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '网关。',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '网关所在地域。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID，用于定位日志，排查问题。',
                                'type' => 'string',
                                'example' => '41FC4DFE-EA8A-5A56-A16C-F607C3409C79',
                            ],
                            'Success' => [
                                'description' => '请求是否成功，返回值如下：'."\n"
                                    ."\n"
                                    .'- **true**：请求成功。                                 '."\n"
                                    .'- **false**：请求失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Code' => [
                                'description' => '响应码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'ErrorMsg' => [
                                'description' => '报错信息。',
                                'type' => 'string',
                                'example' => 'Gateway exception, please launch local dg first',
                            ],
                            'Count' => [
                                'description' => '已创建的网关数量。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '20',
                            ],
                            'GatewayList' => [
                                'type' => 'object',
                                'properties' => [
                                    'Gateway' => [
                                        'description' => '网关列表信息。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '网关信息。',
                                            'type' => 'object',
                                            'properties' => [
                                                'GatewayDesc' => [
                                                    'title' => '网关描述。',
                                                    'description' => '网关描述。',
                                                    'type' => 'string',
                                                    'required' => false,
                                                    'docRequired' => true,
                                                    'example' => '本地测试',
                                                ],
                                                'GatewayName' => [
                                                    'title' => '网关名称。',
                                                    'description' => '网关名称。',
                                                    'type' => 'string',
                                                    'required' => true,
                                                    'docRequired' => true,
                                                    'example' => '本地测试。',
                                                ],
                                                'RegionId' => [
                                                    'title' => '地域ID。',
                                                    'description' => '地域ID。',
                                                    'type' => 'string',
                                                    'required' => false,
                                                    'example' => 'cn-hangzhou',
                                                ],
                                                'GatewayId' => [
                                                    'title' => '网关ID',
                                                    'description' => '网关ID。',
                                                    'type' => 'string',
                                                    'example' => 'dg-lch384wg5701****',
                                                ],
                                                'Status' => [
                                                    'title' => '状态',
                                                    'description' => '状态。',
                                                    'type' => 'string',
                                                    'example' => 'RUNNING',
                                                    'enum' => [
                                                        'RUNNING',
                                                        'NEW',
                                                        'STOPPED',
                                                        'EXCEPTION',
                                                    ],
                                                ],
                                                'UserId' => [
                                                    'title' => '用户ID',
                                                    'description' => '用户ID。',
                                                    'type' => 'string',
                                                    'example' => '100****',
                                                ],
                                                'CreatorId' => [
                                                    'title' => '创建用户id',
                                                    'description' => '网关创建者ID。',
                                                    'type' => 'string',
                                                    'deprecated' => false,
                                                    'example' => '100****',
                                                    'pattern' => '',
                                                    'default' => '',
                                                ],
                                                'DgVersion' => [
                                                    'title' => '网关版本',
                                                    'description' => '网关版本。',
                                                    'type' => 'string',
                                                    'deprecated' => false,
                                                    'example' => '3.0',
                                                    'pattern' => '',
                                                    'default' => '',
                                                ],
                                                'ExceptionMsg' => [
                                                    'title' => '网关异常信息',
                                                    'description' => '网关异常信息。',
                                                    'type' => 'string',
                                                    'deprecated' => false,
                                                    'example' => 'exception',
                                                    'pattern' => '',
                                                    'default' => '',
                                                ],
                                                'NumOfExceptionInstance' => [
                                                    'title' => '异常实例数量',
                                                    'description' => '异常实例数量。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'deprecated' => false,
                                                    'example' => '3',
                                                    'pattern' => '',
                                                    'default' => '',
                                                ],
                                                'NumOfRunningInstance' => [
                                                    'title' => '运行中实例数量',
                                                    'description' => '运行中实例数量。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'deprecated' => false,
                                                    'example' => '3',
                                                    'pattern' => '',
                                                    'default' => '',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"41FC4DFE-EA8A-5A56-A16C-F607C3409C79\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"ErrorMsg\\": \\"Gateway exception, please launch local dg first\\",\\n  \\"Count\\": 20,\\n  \\"GatewayList\\": {\\n    \\"Gateway\\": [\\n      {\\n        \\"GatewayDesc\\": \\"本地测试\\",\\n        \\"GatewayName\\": \\"本地测试。\\",\\n        \\"RegionId\\": \\"cn-hangzhou\\",\\n        \\"GatewayId\\": \\"dg-lch384wg5701****\\",\\n        \\"Status\\": \\"RUNNING\\",\\n        \\"UserId\\": \\"100****\\",\\n        \\"CreatorId\\": \\"100****\\",\\n        \\"DgVersion\\": \\"3.0\\",\\n        \\"ExceptionMsg\\": \\"exception\\",\\n        \\"NumOfExceptionInstance\\": 3,\\n        \\"NumOfRunningInstance\\": 3\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '获取网关列表',
        ],
        'ListDatabaseAccessPoint' => [
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
                'abilityTreeCode' => '198266',
                'abilityTreeNodes' => [
                    'FEATUREdms1KPGDT',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'GatewayId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '网关ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'dg-nmz841r7b681****',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '分页大小。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '当前页码。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'SearchKey',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '搜索关键字。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '网关。',
                    ],
                ],
                [
                    'name' => 'DbInstanceId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '数据库实例ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'dg-db-n2a285spnpy3****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '网关所在地域。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'Host',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '通过网关所在宿主机去访问数据库的地址。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '127.0.XX.XX',
                    ],
                ],
                [
                    'name' => 'Port',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '通过网关所在宿主机去访问数据库的端口。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'docRequired' => true,
                        'maximum' => '65535',
                        'minimum' => '0',
                        'example' => '3306',
                        'default' => '',
                    ],
                ],
                [
                    'name' => 'VpcId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '用户数据库访问点所在VPC的ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'vpc-wz9c473cmu2gg7i7l****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID，用于定位日志，排查问题。',
                                'type' => 'string',
                                'example' => 'C9ADD2AA-27E3-5D62-A676-092EDC5303C1',
                            ],
                            'Success' => [
                                'description' => '请求是否成功，返回值如下：'."\n"
                                    .'- **true**：请求成功。                                '."\n"
                                    .'- **false**：请求失败。',
                                'type' => 'string',
                                'example' => 'true',
                            ],
                            'Code' => [
                                'description' => '响应码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'ErrorMsg' => [
                                'description' => '报错信息。',
                                'type' => 'string',
                                'example' => 'Gateway exception, please launch local dg first',
                            ],
                            'Count' => [
                                'description' => '个数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'DbInstanceAccessPointList' => [
                                'description' => '数据库访问点列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '数据库访问点。',
                                    'type' => 'object',
                                    'properties' => [
                                        'AccessAddr' => [
                                            'description' => '访问点IP。',
                                            'type' => 'string',
                                            'example' => '10.0.0.0',
                                        ],
                                        'AccessPort' => [
                                            'description' => '访问点端口。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '33306',
                                        ],
                                        'DbInstanceId' => [
                                            'description' => '数据库实例ID。',
                                            'type' => 'string',
                                            'example' => 'dg-db-n2a285spnpy3****'."\n",
                                        ],
                                        'GmtCreate' => [
                                            'description' => '创建网关的时间。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '2023-03-09 14:20:04.0',
                                        ],
                                        'GmtModified' => [
                                            'description' => '修改时间',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '2023-03-09 14:20:04.0',
                                        ],
                                        'RouterId' => [
                                            'description' => '网关ID。',
                                            'type' => 'string',
                                            'example' => 'dg-nmz841r7b681****',
                                        ],
                                        'VpcAzoneId' => [
                                            'description' => '访问点可用区ID。',
                                            'type' => 'string',
                                            'example' => 'cn-hangzhou-j',
                                        ],
                                        'VpcId' => [
                                            'description' => '访问点所在VPC的ID。',
                                            'type' => 'string',
                                            'example' => 'vpc-2ze0612ts436tn0sh****',
                                        ],
                                        'VswitchId' => [
                                            'description' => '访问点所在VSW的ID。',
                                            'type' => 'string',
                                            'example' => 'vsw-8vbgi74rgel72rax4****',
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
                        'errorCode' => 'Error',
                        'errorMessage' => 'The requested service is unavailable. Please try again later.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"C9ADD2AA-27E3-5D62-A676-092EDC5303C1\\",\\n  \\"Success\\": \\"true\\",\\n  \\"Code\\": \\"200\\",\\n  \\"ErrorMsg\\": \\"Gateway exception, please launch local dg first\\",\\n  \\"Count\\": 1,\\n  \\"DbInstanceAccessPointList\\": [\\n    {\\n      \\"AccessAddr\\": \\"10.0.0.0\\",\\n      \\"AccessPort\\": 33306,\\n      \\"DbInstanceId\\": \\"dg-db-n2a285spnpy3****\\\\n\\",\\n      \\"GmtCreate\\": 0,\\n      \\"GmtModified\\": 0,\\n      \\"RouterId\\": \\"dg-nmz841r7b681****\\",\\n      \\"VpcAzoneId\\": \\"cn-hangzhou-j\\",\\n      \\"VpcId\\": \\"vpc-2ze0612ts436tn0sh****\\",\\n      \\"VswitchId\\": \\"vsw-8vbgi74rgel72rax4****\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '获取数据库访问点列表',
            'summary' => '调用此API可以获取数据库访问点列表。',
        ],
        'ModifyDatabase' => [
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
                'abilityTreeCode' => '197525',
                'abilityTreeNodes' => [
                    'FEATUREdms1KPGDT',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Host',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '通过网关所在宿主机去访问数据库的地址。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '127.0.XX.XX',
                    ],
                ],
                [
                    'name' => 'Port',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '通过网关所在宿主机去访问数据库的端口。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '3306',
                    ],
                ],
                [
                    'name' => 'DbType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '数据库类型。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'MYSQL',
                    ],
                ],
                [
                    'name' => 'DbUserName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '访问数据库所用的用户名。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'DbPassword',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '访问数据库所用的密码。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '817130****',
                    ],
                ],
                [
                    'name' => 'DbDescription',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '数据库描述。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '测试库',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '数据库实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'dg-db-n2a285spnpy3****'."\n",
                    ],
                ],
                [
                    'name' => 'DbName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '数据库名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '响应码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Data' => [
                                'description' => '返回结果。',
                                'type' => 'string',
                                'example' => 'SUCCESS',
                            ],
                            'ErrorMsg' => [
                                'description' => '报错信息。',
                                'type' => 'string',
                                'example' => 'Gateway exception, please launch local dg first',
                            ],
                            'RequestId' => [
                                'description' => '请求ID，用于定位日志，排查问题。',
                                'type' => 'string',
                                'example' => '8F29E3E9-2847-53BF-ADF0-130E3CEA5C63',
                            ],
                            'Success' => [
                                'description' => '请求是否成功，返回值如下：'."\n"
                                    ."\n"
                                    .'- **true**：请求成功。                                 '."\n"
                                    .'- **false**：请求失败。',
                                'type' => 'boolean',
                                'example' => 'true'."\n",
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Data\\": \\"SUCCESS\\",\\n  \\"ErrorMsg\\": \\"Gateway exception, please launch local dg first\\",\\n  \\"RequestId\\": \\"8F29E3E9-2847-53BF-ADF0-130E3CEA5C63\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '修改数据库信息',
            'summary' => '调用此API可以修改数据库描述等信息。',
        ],
        'ModifyGateway' => [
            'summary' => '调用该API可以修改网关的基本信息，包含网关名称和网关描述。',
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
                'abilityTreeCode' => '197501',
                'abilityTreeNodes' => [
                    'FEATUREdms1KPGDT',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'GatewayName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '网关名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '测试',
                    ],
                ],
                [
                    'name' => 'GatewayDesc',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '网关描述。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '测试DG网关',
                    ],
                ],
                [
                    'name' => 'GatewayId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '网关ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'dg-nmz841r7b681****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '响应码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Data' => [
                                'description' => '返回结果。',
                                'type' => 'string',
                                'example' => 'SUCCESS',
                            ],
                            'ErrorMsg' => [
                                'description' => '报错信息。',
                                'type' => 'string',
                                'example' => 'Gateway exception, please launch local dg first',
                            ],
                            'RequestId' => [
                                'description' => '请求ID，用于定位日志，排查问题。',
                                'type' => 'string',
                                'example' => '18071187-5EA1-5DD4-AAD9-F27C5713CD1C',
                            ],
                            'Success' => [
                                'description' => '请求是否成功，返回值如下：'."\n"
                                    ."\n"
                                    .'- **true**：请求成功。                                '."\n"
                                    .'- **false**：请求失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Data\\": \\"SUCCESS\\",\\n  \\"ErrorMsg\\": \\"Gateway exception, please launch local dg first\\",\\n  \\"RequestId\\": \\"18071187-5EA1-5DD4-AAD9-F27C5713CD1C\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '修改网关的基本信息',
        ],
        'RetryDatabase' => [
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'abilityTreeCode' => '197521',
                'abilityTreeNodes' => [
                    'FEATUREdms1KPGDT',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'GatewayId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '网关ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'dg-nmz841r7b681****',
                    ],
                ],
                [
                    'name' => 'Host',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '通过网关所在宿主机去访问数据库的地址。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '127.0.XX.XX',
                    ],
                ],
                [
                    'name' => 'Port',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '通过网关所在宿主机去访问数据库的端口。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '65535',
                        'minimum' => '0',
                        'example' => '3306',
                    ],
                ],
                [
                    'name' => 'DbType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '数据库类型。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'MYSQL',
                    ],
                ],
                [
                    'name' => 'DbUserName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '访问数据库所用的用户名。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'DbPassword',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '访问数据库所用的密码。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'HongRui****',
                    ],
                ],
                [
                    'name' => 'DbDescription',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '数据库描述。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '测试库',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'DbName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '数据库名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '该参数值由客户端生成，用于确保请求的幂等性。该参数值在不同请求间是唯一的，并且区分大小写，长度不超过64个ASCII字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'XXXXX',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '响应码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Data' => [
                                'description' => '返回结果。',
                                'type' => 'string',
                                'example' => 'SUCCESS',
                            ],
                            'ErrorMsg' => [
                                'description' => '报错信息。',
                                'type' => 'string',
                                'example' => 'Gateway exception, please launch local dg first',
                            ],
                            'RequestId' => [
                                'description' => '请求ID，用于定位日志，排查问题。',
                                'type' => 'string',
                                'example' => '19EDB8E2-FCE6-5797-91F4-80F832C90371',
                            ],
                            'Success' => [
                                'description' => '请求是否成功，返回值如下：'."\n"
                                    ."\n"
                                    .'- **true**：请求成功。                                 '."\n"
                                    .'- **false**：请求失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'Error',
                        'errorMessage' => 'The requested service is unavailable. Please try again later.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Data\\": \\"SUCCESS\\",\\n  \\"ErrorMsg\\": \\"Gateway exception, please launch local dg first\\",\\n  \\"RequestId\\": \\"19EDB8E2-FCE6-5797-91F4-80F832C90371\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '重新连接数据库',
            'summary' => '调用此API可以使数据库网关重新连接数据库。',
        ],
        'StopGateway' => [
            'summary' => '调用此API可以停止网关服务。',
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
                'abilityTreeCode' => '197509',
                'abilityTreeNodes' => [
                    'FEATUREdms1KPGDT',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'GatewayId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '网关ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'dg-nmz841r7b681****',
                    ],
                ],
                [
                    'name' => 'GatewayInstanceId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '网关节点实例ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'dg-node-hvsGB7qVCaaW****-v-0',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '响应码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Data' => [
                                'description' => '返回结果。',
                                'type' => 'string',
                                'example' => 'SUCCESS',
                            ],
                            'ErrorMsg' => [
                                'description' => '报错信息。',
                                'type' => 'string',
                                'example' => 'Gateway exception, please launch local dg first',
                            ],
                            'RequestId' => [
                                'description' => '请求ID，用于定位日志，排查问题。',
                                'type' => 'string',
                                'example' => 'DE3CC21B-E317-5ED7-A212-A62517EA0022',
                            ],
                            'Success' => [
                                'description' => '请求是否成功，返回值如下：'."\n"
                                    ."\n"
                                    .'- **true**：请求成功。                                 '."\n"
                                    .'- **false**：请求失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'Error',
                        'errorMessage' => 'The requested service is unavailable. Please try again later.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Data\\": \\"SUCCESS\\",\\n  \\"ErrorMsg\\": \\"Gateway exception, please launch local dg first\\",\\n  \\"RequestId\\": \\"DE3CC21B-E317-5ED7-A212-A62517EA0022\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '停止网关服务',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-hongkong',
            'endpoint' => 'dms-dg.cn-hongkong.aliyuncs.com',
        ],
        [
            'regionId' => 'us-west-1',
            'endpoint' => 'dms-dg.us-west-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-3',
            'endpoint' => 'dms-dg.ap-southeast-3.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'dms-dg.cn-shanghai.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'dms-dg.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-west-1',
            'endpoint' => 'dms-dg.eu-west-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-1',
            'endpoint' => 'dms-dg.ap-northeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-5',
            'endpoint' => 'dms-dg.ap-southeast-5.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-south-1',
            'endpoint' => 'dms-dg.ap-south-1.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-central-1',
            'endpoint' => 'dms-dg.eu-central-1.aliyuncs.com',
        ],
        [
            'regionId' => 'us-east-1',
            'endpoint' => 'dms-dg.us-east-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-huhehaote',
            'endpoint' => 'dms-dg.cn-huhehaote.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'dms-dg.ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou',
            'endpoint' => 'dms-dg.cn-zhangjiakou.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-2',
            'endpoint' => 'dms-dg.ap-southeast-2.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-qingdao',
            'endpoint' => 'dms-dg.cn-qingdao.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'dms-dg.cn-shenzhen.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-chengdu',
            'endpoint' => 'dms-dg.cn-chengdu.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'dms-dg.cn-beijing.aliyuncs.com',
        ],
    ],
];
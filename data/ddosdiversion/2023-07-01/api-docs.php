<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'DdosDiversion',
        'version' => '2023-07-01',
    ],
    'directories' => [
        'ConfigNetStatus',
        'ListInstance',
        'QueryNetList',
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'ConfigNetStatus' => [
            'summary' => '进行网段宣告配置。',
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
                'abilityTreeCode' => '186873',
                'abilityTreeNodes' => [
                    'FEATUREddosPJT0YW',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'SaleId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '代播实例的ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ddos_diversion_public_cn-xxxxxxxxxxxxx',
                    ],
                ],
                [
                    'name' => 'Net',
                    'in' => 'query',
                    'schema' => [
                        'description' => '代播实例的网段。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '192.168.XX.XX/22',
                        'enum' => [],
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'description' => '状态。取值：'."\n"
                            ."\n"
                            .'- enable：宣告。'."\n"
                            .'- disable：撤销。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'enable',
                        'enum' => [
                            'enable',
                            'disable',
                        ],
                    ],
                ],
                [
                    'name' => 'Regions',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '网段需要宣告/撤销的区域列表，当列表为空时，表示操作所有网段配置的区域。'."\n"
                            ."\n"
                            .'> 您可以调用[QueryNetList](~~2639086~~)获取网段配置的区域信息。',
                        'type' => 'array',
                        'items' => [
                            'description' => '网段需要宣告或者撤销的区域。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'oe26',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'SubNets',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '代播实例网段的子网段列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '代播实例网段的子网段。',
                            'type' => 'string',
                            'required' => false,
                            'example' => '192.168.XX.XX/24',
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '接口返回码：'."\n"
                                    ."\n"
                                    .'- **200**：表示成功。'."\n"
                                    .'- 其它：表示错误码。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '200',
                            ],
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => 'B0949F09-B9C1-1D5E-8F27-0A5BF3CD5D95',
                            ],
                            'Message' => [
                                'description' => '返回信息。',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'AuthenticationFailed',
                        'errorMessage' => 'User authentication failed.',
                    ],
                    [
                        'errorCode' => 'AutoScheduleRuleExist',
                        'errorMessage' => 'The auto schedule rule already exists.',
                    ],
                    [
                        'errorCode' => 'AutoScheduleRuleNotExist',
                        'errorMessage' => 'The auto schedule rule dose not exist.',
                    ],
                    [
                        'errorCode' => 'BlackHoleConfigurationError',
                        'errorMessage' => 'A black hole configuration error occurred.',
                    ],
                    [
                        'errorCode' => 'CleanConfigurationError',
                        'errorMessage' => 'A clean configuration error occurred.',
                    ],
                    [
                        'errorCode' => 'CoveredNet',
                        'errorMessage' => 'The CIDR block is overwritten.',
                    ],
                    [
                        'errorCode' => 'DatabaseError',
                        'errorMessage' => 'A database error.',
                    ],
                    [
                        'errorCode' => 'DeclaredNet',
                        'errorMessage' => 'The CIDR block has been advertised.',
                    ],
                    [
                        'errorCode' => 'DefenseConfigurationError',
                        'errorMessage' => 'A defense configuration error occurred.',
                    ],
                    [
                        'errorCode' => 'ForwardConfigurationNotExist',
                        'errorMessage' => 'The CIDR block forwarding configuration is not found.',
                    ],
                    [
                        'errorCode' => 'ForwardNotExist',
                        'errorMessage' => 'The CIDR block zone forwarding configuration is not found.',
                    ],
                    [
                        'errorCode' => 'ForwardRuleNotExist',
                        'errorMessage' => 'The CIDR block forwarding rule is not found.',
                    ],
                    [
                        'errorCode' => 'HttpFailed',
                        'errorMessage' => 'HTTP request failed.',
                    ],
                    [
                        'errorCode' => 'IDNSubnetsCountLimit',
                        'errorMessage' => 'The maximum number of IDCs of the instance is exceeded.',
                    ],
                    [
                        'errorCode' => 'InstanceExist',
                        'errorMessage' => 'The instance already exists.',
                    ],
                    [
                        'errorCode' => 'InstanceNetConfigurationExist',
                        'errorMessage' => 'The instance CIDR block configuration already exists.',
                    ],
                    [
                        'errorCode' => 'InstanceNotExist',
                        'errorMessage' => 'The instance is not found.',
                    ],
                    [
                        'errorCode' => 'InstanceUpstreamLimit',
                        'errorMessage' => 'The maximum number of reinjection configurations for the instance is exceeded.',
                    ],
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'An internal error occurred.',
                    ],
                    [
                        'errorCode' => 'InvalidNet',
                        'errorMessage' => 'Invalid CIDR block.',
                    ],
                    [
                        'errorCode' => 'InvalidParam',
                        'errorMessage' => 'Invalid parameter value.',
                    ],
                    [
                        'errorCode' => 'IPSubnetsCountLimit',
                        'errorMessage' => 'The maximum number of CIDR blocks of the instance is exceeded.',
                    ],
                    [
                        'errorCode' => 'JsonDecodeError',
                        'errorMessage' => 'Json string decoding failed.',
                    ],
                    [
                        'errorCode' => 'NetCannotExtend',
                        'errorMessage' => 'The CIDR block cannot be extended.',
                    ],
                    [
                        'errorCode' => 'NetConfigurationExist',
                        'errorMessage' => 'The CIDR block configuration already exists.',
                    ],
                    [
                        'errorCode' => 'NetConfigurationNotExist',
                        'errorMessage' => 'The CIDR block configuration is not found.',
                    ],
                    [
                        'errorCode' => 'NetForwardDelete',
                        'errorMessage' => 'The CIDR block forwarding is being deleted.',
                    ],
                    [
                        'errorCode' => 'NetMaskOutOfRange',
                        'errorMessage' => 'The subnet mask of the CIDR block is invalid.',
                    ],
                    [
                        'errorCode' => 'NetNeedExtend',
                        'errorMessage' => 'The CIDR block needs to be extended.',
                    ],
                    [
                        'errorCode' => 'NetStatusNotReady',
                        'errorMessage' => 'The CIDR block reinjection configuration has not been completed.',
                    ],
                    [
                        'errorCode' => 'NetworkDeclearedFailed',
                        'errorMessage' => 'Failed to advertise the CIDR block.',
                    ],
                    [
                        'errorCode' => 'NetWorkNotExist',
                        'errorMessage' => 'The CIDR block is not found.',
                    ],
                    [
                        'errorCode' => 'NetworkUndeclearedFailed',
                        'errorMessage' => 'Failed to cancel the advertisement of the CIDR block.',
                    ],
                    [
                        'errorCode' => 'ParameterNotEnough',
                        'errorMessage' => 'Required parameters are not specified.',
                    ],
                    [
                        'errorCode' => 'ParameterOutOfRange',
                        'errorMessage' => 'Invalid parameter value.',
                    ],
                    [
                        'errorCode' => 'RegionNotExist',
                        'errorMessage' => 'The region does not exist.',
                    ],
                    [
                        'errorCode' => 'RequestMethodError',
                        'errorMessage' => 'An incorrect request method.',
                    ],
                    [
                        'errorCode' => 'SubnetCountLimit',
                        'errorMessage' => 'The maximum number of subnets is exceeded.',
                    ],
                    [
                        'errorCode' => 'UnKnownError',
                        'errorMessage' => 'An unknown error occurred.',
                    ],
                    [
                        'errorCode' => 'UpsteamNotComplete',
                        'errorMessage' => 'The reinjection configuration has not been completed.',
                    ],
                    [
                        'errorCode' => 'UpstreamConfigurationNotExist',
                        'errorMessage' => 'The reinjection configuration is not found.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 200,\\n  \\"RequestId\\": \\"B0949F09-B9C1-1D5E-8F27-0A5BF3CD5D95\\",\\n  \\"Message\\": \\"successful\\"\\n}","type":"json"}]',
            'title' => '网段宣告配置',
        ],
        'ListInstance' => [
            'summary' => '查询实例列表。',
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
                'abilityTreeCode' => '186870',
                'abilityTreeNodes' => [
                    'FEATUREddos37DGH1',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'SaleId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '代播实例的ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ddos_diversion_public_cn-xxxxxxxxxxxxx',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '测试实例。',
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例状态。取值：'."\n"
                            ."\n"
                            .'- normal：表示正常运行的实例。'."\n"
                            .'-  expired：表示过期的实例。'."\n"
                            .'- deleting：表示处于删除中的实例。'."\n"
                            .'-  stopped：表示停止的实例。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'normal',
                    ],
                ],
                [
                    'name' => 'Page',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页码。 默认值：1。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'Num',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数量。默认值：100。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '100',
                        'default' => '100',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '接口返回码：'."\n"
                                    ."\n"
                                    .'- **200**：表示成功。'."\n"
                                    .'- 其它：表示错误码。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '200',
                            ],
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => 'B0949F09-B9C1-1D5E-8F27-0A5BF3CD5D95',
                            ],
                            'Message' => [
                                'description' => '返回信息。',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'Data' => [
                                'description' => '返回结果。',
                                'type' => 'object',
                                'properties' => [
                                    'Total' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                    ],
                                    'Page' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                    ],
                                    'Num' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                    ],
                                    'Instances' => [
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'UserId' => [
                                                    'type' => 'string',
                                                ],
                                                'SaleId' => [
                                                    'type' => 'string',
                                                ],
                                                'InstanceId' => [
                                                    'type' => 'string',
                                                ],
                                                'Name' => [
                                                    'type' => 'string',
                                                ],
                                                'Status' => [
                                                    'type' => 'string',
                                                ],
                                                'Comment' => [
                                                    'type' => 'string',
                                                ],
                                                'Message' => [
                                                    'type' => 'string',
                                                ],
                                                'Spec' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'IdcNumbers' => [
                                                            'type' => 'string',
                                                        ],
                                                        'NormalBandwidth' => [
                                                            'type' => 'string',
                                                        ],
                                                        'IpSubnetNums' => [
                                                            'type' => 'string',
                                                        ],
                                                        'Coverage' => [
                                                            'type' => 'string',
                                                        ],
                                                        'Edition' => [
                                                            'type' => 'string',
                                                        ],
                                                        'MitigationCapacity' => [
                                                            'type' => 'string',
                                                        ],
                                                        'MitigationNums' => [
                                                            'type' => 'string',
                                                        ],
                                                        'DiversionType' => [
                                                            'type' => 'string',
                                                        ],
                                                        'MitigationAnalysis' => [
                                                            'type' => 'string',
                                                        ],
                                                        'MitigationAnalysisCapacity' => [
                                                            'type' => 'string',
                                                        ],
                                                        'InitialInstallation' => [
                                                            'type' => 'string',
                                                        ],
                                                        'InitialQty' => [
                                                            'type' => 'string',
                                                        ],
                                                    ],
                                                ],
                                                'GmtExpire' => [
                                                    'type' => 'string',
                                                ],
                                                'GmtCreate' => [
                                                    'type' => 'string',
                                                ],
                                                'GmtModify' => [
                                                    'type' => 'string',
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
                        'errorCode' => 'AuthenticationFailed',
                        'errorMessage' => 'User authentication failed.',
                    ],
                    [
                        'errorCode' => 'AutoScheduleRuleExist',
                        'errorMessage' => 'The auto schedule rule already exists.',
                    ],
                    [
                        'errorCode' => 'AutoScheduleRuleNotExist',
                        'errorMessage' => 'The auto schedule rule dose not exist.',
                    ],
                    [
                        'errorCode' => 'BlackHoleConfigurationError',
                        'errorMessage' => 'A black hole configuration error occurred.',
                    ],
                    [
                        'errorCode' => 'CleanConfigurationError',
                        'errorMessage' => 'A clean configuration error occurred.',
                    ],
                    [
                        'errorCode' => 'CoveredNet',
                        'errorMessage' => 'The CIDR block is overwritten.',
                    ],
                    [
                        'errorCode' => 'DatabaseError',
                        'errorMessage' => 'A database error.',
                    ],
                    [
                        'errorCode' => 'DeclaredNet',
                        'errorMessage' => 'The CIDR block has been advertised.',
                    ],
                    [
                        'errorCode' => 'DefenseConfigurationError',
                        'errorMessage' => 'A defense configuration error occurred.',
                    ],
                    [
                        'errorCode' => 'ForwardConfigurationNotExist',
                        'errorMessage' => 'The CIDR block forwarding configuration is not found.',
                    ],
                    [
                        'errorCode' => 'ForwardNotExist',
                        'errorMessage' => 'The CIDR block zone forwarding configuration is not found.',
                    ],
                    [
                        'errorCode' => 'ForwardRuleNotExist',
                        'errorMessage' => 'The CIDR block forwarding rule is not found.',
                    ],
                    [
                        'errorCode' => 'HttpFailed',
                        'errorMessage' => 'HTTP request failed.',
                    ],
                    [
                        'errorCode' => 'IDNSubnetsCountLimit',
                        'errorMessage' => 'The maximum number of IDCs of the instance is exceeded.',
                    ],
                    [
                        'errorCode' => 'InstanceExist',
                        'errorMessage' => 'The instance already exists.',
                    ],
                    [
                        'errorCode' => 'InstanceNetConfigurationExist',
                        'errorMessage' => 'The instance CIDR block configuration already exists.',
                    ],
                    [
                        'errorCode' => 'InstanceNotExist',
                        'errorMessage' => 'The instance is not found.',
                    ],
                    [
                        'errorCode' => 'InstanceUpstreamLimit',
                        'errorMessage' => 'The maximum number of reinjection configurations for the instance is exceeded.',
                    ],
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'An internal error occurred.',
                    ],
                    [
                        'errorCode' => 'InvalidNet',
                        'errorMessage' => 'Invalid CIDR block.',
                    ],
                    [
                        'errorCode' => 'InvalidParam',
                        'errorMessage' => 'Invalid parameter value.',
                    ],
                    [
                        'errorCode' => 'IPSubnetsCountLimit',
                        'errorMessage' => 'The maximum number of CIDR blocks of the instance is exceeded.',
                    ],
                    [
                        'errorCode' => 'NetCannotExtend',
                        'errorMessage' => 'The CIDR block cannot be extended.',
                    ],
                    [
                        'errorCode' => 'NetConfigurationExist',
                        'errorMessage' => 'The CIDR block configuration already exists.',
                    ],
                    [
                        'errorCode' => 'NetConfigurationNotExist',
                        'errorMessage' => 'The CIDR block configuration is not found.',
                    ],
                    [
                        'errorCode' => 'NetForwardDelete',
                        'errorMessage' => 'The CIDR block forwarding is being deleted.',
                    ],
                    [
                        'errorCode' => 'NetMaskOutOfRange',
                        'errorMessage' => 'The subnet mask of the CIDR block is invalid.',
                    ],
                    [
                        'errorCode' => 'NetNeedExtend',
                        'errorMessage' => 'The CIDR block needs to be extended.',
                    ],
                    [
                        'errorCode' => 'NetStatusNotReady',
                        'errorMessage' => 'The CIDR block reinjection configuration has not been completed.',
                    ],
                    [
                        'errorCode' => 'NetworkDeclearedFailed',
                        'errorMessage' => 'Failed to advertise the CIDR block.',
                    ],
                    [
                        'errorCode' => 'NetWorkNotExist',
                        'errorMessage' => 'The CIDR block is not found.',
                    ],
                    [
                        'errorCode' => 'NetworkUndeclearedFailed',
                        'errorMessage' => 'Failed to cancel the advertisement of the CIDR block.',
                    ],
                    [
                        'errorCode' => 'ParameterNotEnough',
                        'errorMessage' => 'Required parameters are not specified.',
                    ],
                    [
                        'errorCode' => 'ParameterOutOfRange',
                        'errorMessage' => 'Invalid parameter value.',
                    ],
                    [
                        'errorCode' => 'RegionNotExist',
                        'errorMessage' => 'The region does not exist.',
                    ],
                    [
                        'errorCode' => 'RequestMethodError',
                        'errorMessage' => 'An incorrect request method.',
                    ],
                    [
                        'errorCode' => 'SubnetCountLimit',
                        'errorMessage' => 'The maximum number of subnets is exceeded.',
                    ],
                    [
                        'errorCode' => 'UnKnownError',
                        'errorMessage' => 'An unknown error occurred.',
                    ],
                    [
                        'errorCode' => 'UpsteamNotComplete',
                        'errorMessage' => 'The reinjection configuration has not been completed.',
                    ],
                    [
                        'errorCode' => 'UpstreamConfigurationNotExist',
                        'errorMessage' => 'The reinjection configuration is not found.',
                    ],
                    [
                        'errorCode' => 'JsonDecodeError',
                        'errorMessage' => 'JSON string decoding failed.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 200,\\n  \\"RequestId\\": \\"B0949F09-B9C1-1D5E-8F27-0A5BF3CD5D95\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"Data\\": {\\n    \\"Total\\": 0,\\n    \\"Page\\": 0,\\n    \\"Num\\": 0,\\n    \\"Instances\\": [\\n      {\\n        \\"UserId\\": \\"\\",\\n        \\"SaleId\\": \\"\\",\\n        \\"InstanceId\\": \\"\\",\\n        \\"Name\\": \\"\\",\\n        \\"Status\\": \\"\\",\\n        \\"Comment\\": \\"\\",\\n        \\"Message\\": \\"\\",\\n        \\"Spec\\": {\\n          \\"IdcNumbers\\": \\"\\",\\n          \\"NormalBandwidth\\": \\"\\",\\n          \\"IpSubnetNums\\": \\"\\",\\n          \\"Coverage\\": \\"\\",\\n          \\"Edition\\": \\"\\",\\n          \\"MitigationCapacity\\": \\"\\",\\n          \\"MitigationNums\\": \\"\\",\\n          \\"DiversionType\\": \\"\\",\\n          \\"MitigationAnalysis\\": \\"\\",\\n          \\"MitigationAnalysisCapacity\\": \\"\\",\\n          \\"InitialInstallation\\": \\"\\",\\n          \\"InitialQty\\": \\"\\"\\n        },\\n        \\"GmtExpire\\": \\"\\",\\n        \\"GmtCreate\\": \\"\\",\\n        \\"GmtModify\\": \\"\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '查询实例列表',
        ],
        'QueryNetList' => [
            'summary' => '查询代播的网段列表。',
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
                'operationType' => 'get',
                'abilityTreeCode' => '186874',
                'abilityTreeNodes' => [
                    'FEATUREddosPJT0YW',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'SaleId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '代播实例的ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ddos_diversion_public_cn-xxxxxxxxxxxxx',
                    ],
                ],
                [
                    'name' => 'Net',
                    'in' => 'query',
                    'schema' => [
                        'description' => '代播实例的网段。'."\n"
                            .'> 代播实例没有扩展网段时，表示实例的网段。代播实例有扩展网段时，表示扩展的网段，与MainNet参数配合使用。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '192.168.XX.XX/24',
                        'enum' => [],
                    ],
                ],
                [
                    'name' => 'Mode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '调度模式。取值：'."\n"
                            ."\n"
                            .'- manual : 人工。'."\n"
                            .'- netflow-auto：netflow自动调度。',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'netflow-auto' => 'netflow-auto',
                            'manual' => 'manual',
                        ],
                        'example' => 'netflow-auto',
                        'enum' => [
                            'manual',
                            'netflow-auto',
                            'beaver-auto',
                        ],
                    ],
                ],
                [
                    'name' => 'MainNet',
                    'in' => 'query',
                    'schema' => [
                        'description' => '具有扩展网段的代播实例的主网段。如果查询的代播实例没有扩展网段，此参数为空。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '192.168.XX.XX/22',
                    ],
                ],
                [
                    'name' => 'Page',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页码。 默认值：1。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'Num',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数量。默认值：100。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '100',
                        'default' => '100',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '接口返回码：'."\n"
                                    ."\n"
                                    .'- **200**：表示成功。'."\n"
                                    .'- 其它：表示错误码。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '200',
                            ],
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '24B652B5-AEFF-3F03-9114-00D053C42277',
                            ],
                            'Message' => [
                                'description' => '返回信息。',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'Data' => [
                                'description' => '网段列表。',
                                'type' => 'object',
                                'properties' => [
                                    'Total' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                    ],
                                    'Page' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                    ],
                                    'Num' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                    ],
                                    'Nets' => [
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'UserId' => [
                                                    'type' => 'string',
                                                ],
                                                'SaleId' => [
                                                    'type' => 'string',
                                                ],
                                                'UpstreamType' => [
                                                    'type' => 'string',
                                                ],
                                                'Net' => [
                                                    'type' => 'string',
                                                ],
                                                'NetType' => [
                                                    'type' => 'string',
                                                ],
                                                'Mode' => [
                                                    'type' => 'string',
                                                ],
                                                'DeclaredState' => [
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                ],
                                                'Declared' => [
                                                    'type' => 'array',
                                                    'items' => [
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'Region' => [
                                                                'type' => 'string',
                                                            ],
                                                            'Declared' => [
                                                                'type' => 'string',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'GmtCreate' => [
                                                    'type' => 'string',
                                                ],
                                                'GmtModify' => [
                                                    'type' => 'string',
                                                ],
                                                'NetExtend' => [
                                                    'type' => 'string',
                                                ],
                                                'DDoSDefense' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'DjPolicy' => [
                                                            'type' => 'object',
                                                            'properties' => [
                                                                'PolicyName' => [
                                                                    'type' => 'string',
                                                                ],
                                                            ],
                                                        ],
                                                        'CleanTh' => [
                                                            'type' => 'object',
                                                            'properties' => [
                                                                'Mbps' => [
                                                                    'type' => 'integer',
                                                                    'format' => 'int32',
                                                                ],
                                                                'Pps' => [
                                                                    'type' => 'integer',
                                                                    'format' => 'int32',
                                                                ],
                                                            ],
                                                        ],
                                                        'HoleTh' => [
                                                            'type' => 'object',
                                                            'properties' => [
                                                                'ThreshMbps' => [
                                                                    'type' => 'integer',
                                                                    'format' => 'int32',
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'FwdEffect' => [
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                ],
                                                'NetMain' => [
                                                    'type' => 'integer',
                                                    'format' => 'int64',
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
                        'errorCode' => 'AuthenticationFailed',
                        'errorMessage' => 'User authentication failed.',
                    ],
                    [
                        'errorCode' => 'AutoScheduleRuleExist',
                        'errorMessage' => 'The auto schedule rule already exists.',
                    ],
                    [
                        'errorCode' => 'AutoScheduleRuleNotExist',
                        'errorMessage' => 'The auto schedule rule dose not exist.',
                    ],
                    [
                        'errorCode' => 'BlackHoleConfigurationError',
                        'errorMessage' => 'A black hole configuration error occurred.',
                    ],
                    [
                        'errorCode' => 'CleanConfigurationError',
                        'errorMessage' => 'A clean configuration error occurred.',
                    ],
                    [
                        'errorCode' => 'CoveredNet',
                        'errorMessage' => 'The CIDR block is overwritten.',
                    ],
                    [
                        'errorCode' => 'DatabaseError',
                        'errorMessage' => 'A database error.',
                    ],
                    [
                        'errorCode' => 'DeclaredNet',
                        'errorMessage' => 'The CIDR block has been advertised.',
                    ],
                    [
                        'errorCode' => 'DefenseConfigurationError',
                        'errorMessage' => 'A defense configuration error occurred.',
                    ],
                    [
                        'errorCode' => 'ForwardConfigurationNotExist',
                        'errorMessage' => 'The CIDR block forwarding configuration is not found.',
                    ],
                    [
                        'errorCode' => 'ForwardNotExist',
                        'errorMessage' => 'The CIDR block zone forwarding configuration is not found.',
                    ],
                    [
                        'errorCode' => 'ForwardRuleNotExist',
                        'errorMessage' => 'The CIDR block forwarding rule is not found.',
                    ],
                    [
                        'errorCode' => 'HttpFailed',
                        'errorMessage' => 'HTTP request failed.',
                    ],
                    [
                        'errorCode' => 'IDNSubnetsCountLimit',
                        'errorMessage' => 'The maximum number of IDCs of the instance is exceeded.',
                    ],
                    [
                        'errorCode' => 'InstanceExist',
                        'errorMessage' => 'The instance already exists.',
                    ],
                    [
                        'errorCode' => 'InstanceNetConfigurationExist',
                        'errorMessage' => 'The instance CIDR block configuration already exists.',
                    ],
                    [
                        'errorCode' => 'InstanceNotExist',
                        'errorMessage' => 'The instance is not found.',
                    ],
                    [
                        'errorCode' => 'InstanceUpstreamLimit',
                        'errorMessage' => 'The maximum number of reinjection configurations for the instance is exceeded.',
                    ],
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'An internal error occurred.',
                    ],
                    [
                        'errorCode' => 'InvalidNet',
                        'errorMessage' => 'Invalid CIDR block.',
                    ],
                    [
                        'errorCode' => 'InvalidParam',
                        'errorMessage' => 'Invalid parameter value.',
                    ],
                    [
                        'errorCode' => 'IPSubnetsCountLimit',
                        'errorMessage' => 'The maximum number of CIDR blocks of the instance is exceeded.',
                    ],
                    [
                        'errorCode' => 'JsonDecodeError',
                        'errorMessage' => 'Json string decoding failed.',
                    ],
                    [
                        'errorCode' => 'NetCannotExtend',
                        'errorMessage' => 'The CIDR block cannot be extended.',
                    ],
                    [
                        'errorCode' => 'NetConfigurationExist',
                        'errorMessage' => 'The CIDR block configuration already exists.',
                    ],
                    [
                        'errorCode' => 'NetConfigurationNotExist',
                        'errorMessage' => 'The CIDR block configuration is not found.',
                    ],
                    [
                        'errorCode' => 'NetForwardDelete',
                        'errorMessage' => 'The CIDR block forwarding is being deleted.',
                    ],
                    [
                        'errorCode' => 'NetMaskOutOfRange',
                        'errorMessage' => 'The subnet mask of the CIDR block is invalid.',
                    ],
                    [
                        'errorCode' => 'NetNeedExtend',
                        'errorMessage' => 'The CIDR block needs to be extended.',
                    ],
                    [
                        'errorCode' => 'NetStatusNotReady',
                        'errorMessage' => 'The CIDR block reinjection configuration has not been completed.',
                    ],
                    [
                        'errorCode' => 'NetworkDeclearedFailed',
                        'errorMessage' => 'Failed to advertise the CIDR block.',
                    ],
                    [
                        'errorCode' => 'NetWorkNotExist',
                        'errorMessage' => 'The CIDR block is not found.',
                    ],
                    [
                        'errorCode' => 'NetworkUndeclearedFailed',
                        'errorMessage' => 'Failed to cancel the advertisement of the CIDR block.',
                    ],
                    [
                        'errorCode' => 'ParameterNotEnough',
                        'errorMessage' => 'Required parameters are not specified.',
                    ],
                    [
                        'errorCode' => 'ParameterOutOfRange',
                        'errorMessage' => 'Invalid parameter value.',
                    ],
                    [
                        'errorCode' => 'RegionNotExist',
                        'errorMessage' => 'The region does not exist.',
                    ],
                    [
                        'errorCode' => 'RequestMethodError',
                        'errorMessage' => 'An incorrect request method.',
                    ],
                    [
                        'errorCode' => 'SubnetCountLimit',
                        'errorMessage' => 'The maximum number of subnets is exceeded.',
                    ],
                    [
                        'errorCode' => 'UnKnownError',
                        'errorMessage' => 'An unknown error occurred.',
                    ],
                    [
                        'errorCode' => 'UpsteamNotComplete',
                        'errorMessage' => 'The reinjection configuration has not been completed.',
                    ],
                    [
                        'errorCode' => 'UpstreamConfigurationNotExist',
                        'errorMessage' => 'The reinjection configuration is not found.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 200,\\n  \\"RequestId\\": \\"24B652B5-AEFF-3F03-9114-00D053C42277\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"Data\\": {\\n    \\"Total\\": 0,\\n    \\"Page\\": 0,\\n    \\"Num\\": 0,\\n    \\"Nets\\": [\\n      {\\n        \\"UserId\\": \\"\\",\\n        \\"SaleId\\": \\"\\",\\n        \\"UpstreamType\\": \\"\\",\\n        \\"Net\\": \\"\\",\\n        \\"NetType\\": \\"\\",\\n        \\"Mode\\": \\"\\",\\n        \\"DeclaredState\\": 0,\\n        \\"Declared\\": [\\n          {\\n            \\"Region\\": \\"\\",\\n            \\"Declared\\": \\"\\"\\n          }\\n        ],\\n        \\"GmtCreate\\": \\"\\",\\n        \\"GmtModify\\": \\"\\",\\n        \\"NetExtend\\": \\"\\",\\n        \\"DDoSDefense\\": {\\n          \\"DjPolicy\\": {\\n            \\"PolicyName\\": \\"\\"\\n          },\\n          \\"CleanTh\\": {\\n            \\"Mbps\\": 0,\\n            \\"Pps\\": 0\\n          },\\n          \\"HoleTh\\": {\\n            \\"ThreshMbps\\": 0\\n          }\\n        },\\n        \\"FwdEffect\\": 0,\\n        \\"NetMain\\": 0\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '查询网段列表',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-hongkong',
            'endpoint' => 'ddosdiversion.cn-hongkong.aliyuncs.com',
        ],
    ],
];
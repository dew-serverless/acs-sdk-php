<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'DdosDiversion',
    'version' => '2023-07-01',
  ),
  'directories' => 
  array (
    0 => 'ConfigNetStatus',
    1 => 'ListInstance',
    2 => 'QueryNetList',
  ),
  'components' => 
  array (
    'schemas' => 
    array (
    ),
  ),
  'apis' => 
  array (
    'ConfigNetStatus' => 
    array (
      'summary' => '进行网段宣告配置。',
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'abilityTreeCode' => '186873',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREddosPJT0YW',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SaleId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '代播实例的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'ddos_diversion_public_cn-xxxxxxxxxxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'Net',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '代播实例的网段。',
            'type' => 'string',
            'required' => true,
            'example' => '192.168.XX.XX/22',
            'enum' => 
            array (
            ),
          ),
        ),
        2 => 
        array (
          'name' => 'Status',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '状态。取值：

- enable：宣告。
- disable：撤销。',
            'type' => 'string',
            'required' => true,
            'example' => 'enable',
            'enum' => 
            array (
              0 => 'enable',
              1 => 'disable',
            ),
          ),
        ),
        3 => 
        array (
          'name' => 'Regions',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '网段需要宣告/撤销的区域列表，当列表为空时，表示操作所有网段配置的区域。

> 您可以调用[QueryNetList](~~2639086~~)获取网段配置的区域信息。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '网段需要宣告或者撤销的区域。',
              'type' => 'string',
              'required' => false,
              'example' => 'oe26',
            ),
            'required' => false,
          ),
        ),
        4 => 
        array (
          'name' => 'SubNets',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '代播实例网段的子网段列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '代播实例网段的子网段。',
              'type' => 'string',
              'required' => false,
              'example' => '192.168.XX.XX/24',
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
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '接口返回码：

- **200**：表示成功。
- 其它：表示错误码。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => 'B0949F09-B9C1-1D5E-8F27-0A5BF3CD5D95',
              ),
              'Message' => 
              array (
                'description' => '返回信息。',
                'type' => 'string',
                'example' => 'successful',
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
            'errorCode' => 'AuthenticationFailed',
            'errorMessage' => 'User authentication failed.',
          ),
          1 => 
          array (
            'errorCode' => 'AutoScheduleRuleExist',
            'errorMessage' => 'The auto schedule rule already exists.',
          ),
          2 => 
          array (
            'errorCode' => 'AutoScheduleRuleNotExist',
            'errorMessage' => 'The auto schedule rule dose not exist.',
          ),
          3 => 
          array (
            'errorCode' => 'BlackHoleConfigurationError',
            'errorMessage' => 'A black hole configuration error occurred.',
          ),
          4 => 
          array (
            'errorCode' => 'CleanConfigurationError',
            'errorMessage' => 'A clean configuration error occurred.',
          ),
          5 => 
          array (
            'errorCode' => 'CoveredNet',
            'errorMessage' => 'The CIDR block is overwritten.',
          ),
          6 => 
          array (
            'errorCode' => 'DatabaseError',
            'errorMessage' => 'A database error.',
          ),
          7 => 
          array (
            'errorCode' => 'DeclaredNet',
            'errorMessage' => 'The CIDR block has been advertised.',
          ),
          8 => 
          array (
            'errorCode' => 'DefenseConfigurationError',
            'errorMessage' => 'A defense configuration error occurred.',
          ),
          9 => 
          array (
            'errorCode' => 'ForwardConfigurationNotExist',
            'errorMessage' => 'The CIDR block forwarding configuration is not found.',
          ),
          10 => 
          array (
            'errorCode' => 'ForwardNotExist',
            'errorMessage' => 'The CIDR block zone forwarding configuration is not found.',
          ),
          11 => 
          array (
            'errorCode' => 'ForwardRuleNotExist',
            'errorMessage' => 'The CIDR block forwarding rule is not found.',
          ),
          12 => 
          array (
            'errorCode' => 'HttpFailed',
            'errorMessage' => 'HTTP request failed.',
          ),
          13 => 
          array (
            'errorCode' => 'IDNSubnetsCountLimit',
            'errorMessage' => 'The maximum number of IDCs of the instance is exceeded.',
          ),
          14 => 
          array (
            'errorCode' => 'InstanceExist',
            'errorMessage' => 'The instance already exists.',
          ),
          15 => 
          array (
            'errorCode' => 'InstanceNetConfigurationExist',
            'errorMessage' => 'The instance CIDR block configuration already exists.',
          ),
          16 => 
          array (
            'errorCode' => 'InstanceNotExist',
            'errorMessage' => 'The instance is not found.',
          ),
          17 => 
          array (
            'errorCode' => 'InstanceUpstreamLimit',
            'errorMessage' => 'The maximum number of reinjection configurations for the instance is exceeded.',
          ),
          18 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An internal error occurred.',
          ),
          19 => 
          array (
            'errorCode' => 'InvalidNet',
            'errorMessage' => 'Invalid CIDR block.',
          ),
          20 => 
          array (
            'errorCode' => 'InvalidParam',
            'errorMessage' => 'Invalid parameter value.',
          ),
          21 => 
          array (
            'errorCode' => 'IPSubnetsCountLimit',
            'errorMessage' => 'The maximum number of CIDR blocks of the instance is exceeded.',
          ),
          22 => 
          array (
            'errorCode' => 'JsonDecodeError',
            'errorMessage' => 'Json string decoding failed.',
          ),
          23 => 
          array (
            'errorCode' => 'NetCannotExtend',
            'errorMessage' => 'The CIDR block cannot be extended.',
          ),
          24 => 
          array (
            'errorCode' => 'NetConfigurationExist',
            'errorMessage' => 'The CIDR block configuration already exists.',
          ),
          25 => 
          array (
            'errorCode' => 'NetConfigurationNotExist',
            'errorMessage' => 'The CIDR block configuration is not found.',
          ),
          26 => 
          array (
            'errorCode' => 'NetForwardDelete',
            'errorMessage' => 'The CIDR block forwarding is being deleted.',
          ),
          27 => 
          array (
            'errorCode' => 'NetMaskOutOfRange',
            'errorMessage' => 'The subnet mask of the CIDR block is invalid.',
          ),
          28 => 
          array (
            'errorCode' => 'NetNeedExtend',
            'errorMessage' => 'The CIDR block needs to be extended.',
          ),
          29 => 
          array (
            'errorCode' => 'NetStatusNotReady',
            'errorMessage' => 'The CIDR block reinjection configuration has not been completed.',
          ),
          30 => 
          array (
            'errorCode' => 'NetworkDeclearedFailed',
            'errorMessage' => 'Failed to advertise the CIDR block.',
          ),
          31 => 
          array (
            'errorCode' => 'NetWorkNotExist',
            'errorMessage' => 'The CIDR block is not found.',
          ),
          32 => 
          array (
            'errorCode' => 'NetworkUndeclearedFailed',
            'errorMessage' => 'Failed to cancel the advertisement of the CIDR block.',
          ),
          33 => 
          array (
            'errorCode' => 'ParameterNotEnough',
            'errorMessage' => 'Required parameters are not specified.',
          ),
          34 => 
          array (
            'errorCode' => 'ParameterOutOfRange',
            'errorMessage' => 'Invalid parameter value.',
          ),
          35 => 
          array (
            'errorCode' => 'RegionNotExist',
            'errorMessage' => 'The region does not exist.',
          ),
          36 => 
          array (
            'errorCode' => 'RequestMethodError',
            'errorMessage' => 'An incorrect request method.',
          ),
          37 => 
          array (
            'errorCode' => 'SubnetCountLimit',
            'errorMessage' => 'The maximum number of subnets is exceeded.',
          ),
          38 => 
          array (
            'errorCode' => 'UnKnownError',
            'errorMessage' => 'An unknown error occurred.',
          ),
          39 => 
          array (
            'errorCode' => 'UpsteamNotComplete',
            'errorMessage' => 'The reinjection configuration has not been completed.',
          ),
          40 => 
          array (
            'errorCode' => 'UpstreamConfigurationNotExist',
            'errorMessage' => 'The reinjection configuration is not found.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 200,\\n  \\"RequestId\\": \\"B0949F09-B9C1-1D5E-8F27-0A5BF3CD5D95\\",\\n  \\"Message\\": \\"successful\\"\\n}","type":"json"}]',
      'title' => '网段宣告配置',
    ),
    'ListInstance' => 
    array (
      'summary' => '查询实例列表。',
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'abilityTreeCode' => '186870',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREddos37DGH1',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SaleId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '代播实例的ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'ddos_diversion_public_cn-xxxxxxxxxxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例名称。',
            'type' => 'string',
            'required' => false,
            'example' => '测试实例。',
          ),
        ),
        2 => 
        array (
          'name' => 'Status',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例状态。取值：

- normal：表示正常运行的实例。
-  expired：表示过期的实例。
- deleting：表示处于删除中的实例。
-  stopped：表示停止的实例。',
            'type' => 'string',
            'required' => false,
            'example' => 'normal',
          ),
        ),
        3 => 
        array (
          'name' => 'Page',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码。 默认值：1。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1',
            'default' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'Num',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数量。默认值：100。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '100',
            'default' => '100',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '接口返回码：

- **200**：表示成功。
- 其它：表示错误码。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => 'B0949F09-B9C1-1D5E-8F27-0A5BF3CD5D95',
              ),
              'Message' => 
              array (
                'description' => '返回信息。',
                'type' => 'string',
                'example' => 'successful',
              ),
              'Data' => 
              array (
                'description' => '返回结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'Total' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int64',
                  ),
                  'Page' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int64',
                  ),
                  'Num' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int64',
                  ),
                  'Instances' => 
                  array (
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'UserId' => 
                        array (
                          'type' => 'string',
                        ),
                        'SaleId' => 
                        array (
                          'type' => 'string',
                        ),
                        'InstanceId' => 
                        array (
                          'type' => 'string',
                        ),
                        'Name' => 
                        array (
                          'type' => 'string',
                        ),
                        'Status' => 
                        array (
                          'type' => 'string',
                        ),
                        'Comment' => 
                        array (
                          'type' => 'string',
                        ),
                        'Message' => 
                        array (
                          'type' => 'string',
                        ),
                        'Spec' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'IdcNumbers' => 
                            array (
                              'type' => 'string',
                            ),
                            'NormalBandwidth' => 
                            array (
                              'type' => 'string',
                            ),
                            'IpSubnetNums' => 
                            array (
                              'type' => 'string',
                            ),
                            'Coverage' => 
                            array (
                              'type' => 'string',
                            ),
                            'Edition' => 
                            array (
                              'type' => 'string',
                            ),
                            'MitigationCapacity' => 
                            array (
                              'type' => 'string',
                            ),
                            'MitigationNums' => 
                            array (
                              'type' => 'string',
                            ),
                            'DiversionType' => 
                            array (
                              'type' => 'string',
                            ),
                            'MitigationAnalysis' => 
                            array (
                              'type' => 'string',
                            ),
                            'MitigationAnalysisCapacity' => 
                            array (
                              'type' => 'string',
                            ),
                            'InitialInstallation' => 
                            array (
                              'type' => 'string',
                            ),
                            'InitialQty' => 
                            array (
                              'type' => 'string',
                            ),
                          ),
                        ),
                        'GmtExpire' => 
                        array (
                          'type' => 'string',
                        ),
                        'GmtCreate' => 
                        array (
                          'type' => 'string',
                        ),
                        'GmtModify' => 
                        array (
                          'type' => 'string',
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
            'errorCode' => 'AuthenticationFailed',
            'errorMessage' => 'User authentication failed.',
          ),
          1 => 
          array (
            'errorCode' => 'AutoScheduleRuleExist',
            'errorMessage' => 'The auto schedule rule already exists.',
          ),
          2 => 
          array (
            'errorCode' => 'AutoScheduleRuleNotExist',
            'errorMessage' => 'The auto schedule rule dose not exist.',
          ),
          3 => 
          array (
            'errorCode' => 'BlackHoleConfigurationError',
            'errorMessage' => 'A black hole configuration error occurred.',
          ),
          4 => 
          array (
            'errorCode' => 'CleanConfigurationError',
            'errorMessage' => 'A clean configuration error occurred.',
          ),
          5 => 
          array (
            'errorCode' => 'CoveredNet',
            'errorMessage' => 'The CIDR block is overwritten.',
          ),
          6 => 
          array (
            'errorCode' => 'DatabaseError',
            'errorMessage' => 'A database error.',
          ),
          7 => 
          array (
            'errorCode' => 'DeclaredNet',
            'errorMessage' => 'The CIDR block has been advertised.',
          ),
          8 => 
          array (
            'errorCode' => 'DefenseConfigurationError',
            'errorMessage' => 'A defense configuration error occurred.',
          ),
          9 => 
          array (
            'errorCode' => 'ForwardConfigurationNotExist',
            'errorMessage' => 'The CIDR block forwarding configuration is not found.',
          ),
          10 => 
          array (
            'errorCode' => 'ForwardNotExist',
            'errorMessage' => 'The CIDR block zone forwarding configuration is not found.',
          ),
          11 => 
          array (
            'errorCode' => 'ForwardRuleNotExist',
            'errorMessage' => 'The CIDR block forwarding rule is not found.',
          ),
          12 => 
          array (
            'errorCode' => 'HttpFailed',
            'errorMessage' => 'HTTP request failed.',
          ),
          13 => 
          array (
            'errorCode' => 'IDNSubnetsCountLimit',
            'errorMessage' => 'The maximum number of IDCs of the instance is exceeded.',
          ),
          14 => 
          array (
            'errorCode' => 'InstanceExist',
            'errorMessage' => 'The instance already exists.',
          ),
          15 => 
          array (
            'errorCode' => 'InstanceNetConfigurationExist',
            'errorMessage' => 'The instance CIDR block configuration already exists.',
          ),
          16 => 
          array (
            'errorCode' => 'InstanceNotExist',
            'errorMessage' => 'The instance is not found.',
          ),
          17 => 
          array (
            'errorCode' => 'InstanceUpstreamLimit',
            'errorMessage' => 'The maximum number of reinjection configurations for the instance is exceeded.',
          ),
          18 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An internal error occurred.',
          ),
          19 => 
          array (
            'errorCode' => 'InvalidNet',
            'errorMessage' => 'Invalid CIDR block.',
          ),
          20 => 
          array (
            'errorCode' => 'InvalidParam',
            'errorMessage' => 'Invalid parameter value.',
          ),
          21 => 
          array (
            'errorCode' => 'IPSubnetsCountLimit',
            'errorMessage' => 'The maximum number of CIDR blocks of the instance is exceeded.',
          ),
          22 => 
          array (
            'errorCode' => 'NetCannotExtend',
            'errorMessage' => 'The CIDR block cannot be extended.',
          ),
          23 => 
          array (
            'errorCode' => 'NetConfigurationExist',
            'errorMessage' => 'The CIDR block configuration already exists.',
          ),
          24 => 
          array (
            'errorCode' => 'NetConfigurationNotExist',
            'errorMessage' => 'The CIDR block configuration is not found.',
          ),
          25 => 
          array (
            'errorCode' => 'NetForwardDelete',
            'errorMessage' => 'The CIDR block forwarding is being deleted.',
          ),
          26 => 
          array (
            'errorCode' => 'NetMaskOutOfRange',
            'errorMessage' => 'The subnet mask of the CIDR block is invalid.',
          ),
          27 => 
          array (
            'errorCode' => 'NetNeedExtend',
            'errorMessage' => 'The CIDR block needs to be extended.',
          ),
          28 => 
          array (
            'errorCode' => 'NetStatusNotReady',
            'errorMessage' => 'The CIDR block reinjection configuration has not been completed.',
          ),
          29 => 
          array (
            'errorCode' => 'NetworkDeclearedFailed',
            'errorMessage' => 'Failed to advertise the CIDR block.',
          ),
          30 => 
          array (
            'errorCode' => 'NetWorkNotExist',
            'errorMessage' => 'The CIDR block is not found.',
          ),
          31 => 
          array (
            'errorCode' => 'NetworkUndeclearedFailed',
            'errorMessage' => 'Failed to cancel the advertisement of the CIDR block.',
          ),
          32 => 
          array (
            'errorCode' => 'ParameterNotEnough',
            'errorMessage' => 'Required parameters are not specified.',
          ),
          33 => 
          array (
            'errorCode' => 'ParameterOutOfRange',
            'errorMessage' => 'Invalid parameter value.',
          ),
          34 => 
          array (
            'errorCode' => 'RegionNotExist',
            'errorMessage' => 'The region does not exist.',
          ),
          35 => 
          array (
            'errorCode' => 'RequestMethodError',
            'errorMessage' => 'An incorrect request method.',
          ),
          36 => 
          array (
            'errorCode' => 'SubnetCountLimit',
            'errorMessage' => 'The maximum number of subnets is exceeded.',
          ),
          37 => 
          array (
            'errorCode' => 'UnKnownError',
            'errorMessage' => 'An unknown error occurred.',
          ),
          38 => 
          array (
            'errorCode' => 'UpsteamNotComplete',
            'errorMessage' => 'The reinjection configuration has not been completed.',
          ),
          39 => 
          array (
            'errorCode' => 'UpstreamConfigurationNotExist',
            'errorMessage' => 'The reinjection configuration is not found.',
          ),
          40 => 
          array (
            'errorCode' => 'JsonDecodeError',
            'errorMessage' => 'JSON string decoding failed.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 200,\\n  \\"RequestId\\": \\"B0949F09-B9C1-1D5E-8F27-0A5BF3CD5D95\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"Data\\": {\\n    \\"Total\\": 0,\\n    \\"Page\\": 0,\\n    \\"Num\\": 0,\\n    \\"Instances\\": [\\n      {\\n        \\"UserId\\": \\"\\",\\n        \\"SaleId\\": \\"\\",\\n        \\"InstanceId\\": \\"\\",\\n        \\"Name\\": \\"\\",\\n        \\"Status\\": \\"\\",\\n        \\"Comment\\": \\"\\",\\n        \\"Message\\": \\"\\",\\n        \\"Spec\\": {\\n          \\"IdcNumbers\\": \\"\\",\\n          \\"NormalBandwidth\\": \\"\\",\\n          \\"IpSubnetNums\\": \\"\\",\\n          \\"Coverage\\": \\"\\",\\n          \\"Edition\\": \\"\\",\\n          \\"MitigationCapacity\\": \\"\\",\\n          \\"MitigationNums\\": \\"\\",\\n          \\"DiversionType\\": \\"\\",\\n          \\"MitigationAnalysis\\": \\"\\",\\n          \\"MitigationAnalysisCapacity\\": \\"\\",\\n          \\"InitialInstallation\\": \\"\\",\\n          \\"InitialQty\\": \\"\\"\\n        },\\n        \\"GmtExpire\\": \\"\\",\\n        \\"GmtCreate\\": \\"\\",\\n        \\"GmtModify\\": \\"\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '查询实例列表',
    ),
    'QueryNetList' => 
    array (
      'summary' => '查询代播的网段列表。',
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '186874',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREddosPJT0YW',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SaleId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '代播实例的ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'ddos_diversion_public_cn-xxxxxxxxxxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'Net',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '代播实例的网段。
> 代播实例没有扩展网段时，表示实例的网段。代播实例有扩展网段时，表示扩展的网段，与MainNet参数配合使用。',
            'type' => 'string',
            'required' => false,
            'example' => '192.168.XX.XX/24',
            'enum' => 
            array (
            ),
          ),
        ),
        2 => 
        array (
          'name' => 'Mode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '调度模式。取值：

- manual : 人工。
- netflow-auto：netflow自动调度。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'netflow-auto' => 'netflow-auto',
              'manual' => 'manual',
            ),
            'example' => 'netflow-auto',
            'enum' => 
            array (
              0 => 'manual',
              1 => 'netflow-auto',
              2 => 'beaver-auto',
            ),
          ),
        ),
        3 => 
        array (
          'name' => 'MainNet',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '具有扩展网段的代播实例的主网段。如果查询的代播实例没有扩展网段，此参数为空。',
            'type' => 'string',
            'required' => false,
            'example' => '192.168.XX.XX/22',
          ),
        ),
        4 => 
        array (
          'name' => 'Page',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码。 默认值：1。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1',
            'default' => '1',
          ),
        ),
        5 => 
        array (
          'name' => 'Num',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数量。默认值：100。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '100',
            'default' => '100',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '接口返回码：

- **200**：表示成功。
- 其它：表示错误码。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => '24B652B5-AEFF-3F03-9114-00D053C42277',
              ),
              'Message' => 
              array (
                'description' => '返回信息。',
                'type' => 'string',
                'example' => 'successful',
              ),
              'Data' => 
              array (
                'description' => '网段列表。',
                'type' => 'object',
                'properties' => 
                array (
                  'Total' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int64',
                  ),
                  'Page' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int64',
                  ),
                  'Num' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int64',
                  ),
                  'Nets' => 
                  array (
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'UserId' => 
                        array (
                          'type' => 'string',
                        ),
                        'SaleId' => 
                        array (
                          'type' => 'string',
                        ),
                        'UpstreamType' => 
                        array (
                          'type' => 'string',
                        ),
                        'Net' => 
                        array (
                          'type' => 'string',
                        ),
                        'NetType' => 
                        array (
                          'type' => 'string',
                        ),
                        'Mode' => 
                        array (
                          'type' => 'string',
                        ),
                        'DeclaredState' => 
                        array (
                          'type' => 'integer',
                          'format' => 'int32',
                        ),
                        'Declared' => 
                        array (
                          'type' => 'array',
                          'items' => 
                          array (
                            'type' => 'object',
                            'properties' => 
                            array (
                              'Region' => 
                              array (
                                'type' => 'string',
                              ),
                              'Declared' => 
                              array (
                                'type' => 'string',
                              ),
                            ),
                          ),
                        ),
                        'GmtCreate' => 
                        array (
                          'type' => 'string',
                        ),
                        'GmtModify' => 
                        array (
                          'type' => 'string',
                        ),
                        'NetExtend' => 
                        array (
                          'type' => 'string',
                        ),
                        'DDoSDefense' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'DjPolicy' => 
                            array (
                              'type' => 'object',
                              'properties' => 
                              array (
                                'PolicyName' => 
                                array (
                                  'type' => 'string',
                                ),
                              ),
                            ),
                            'CleanTh' => 
                            array (
                              'type' => 'object',
                              'properties' => 
                              array (
                                'Mbps' => 
                                array (
                                  'type' => 'integer',
                                  'format' => 'int32',
                                ),
                                'Pps' => 
                                array (
                                  'type' => 'integer',
                                  'format' => 'int32',
                                ),
                              ),
                            ),
                            'HoleTh' => 
                            array (
                              'type' => 'object',
                              'properties' => 
                              array (
                                'ThreshMbps' => 
                                array (
                                  'type' => 'integer',
                                  'format' => 'int32',
                                ),
                              ),
                            ),
                          ),
                        ),
                        'FwdEffect' => 
                        array (
                          'type' => 'integer',
                          'format' => 'int64',
                        ),
                        'NetMain' => 
                        array (
                          'type' => 'integer',
                          'format' => 'int64',
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
            'errorCode' => 'AuthenticationFailed',
            'errorMessage' => 'User authentication failed.',
          ),
          1 => 
          array (
            'errorCode' => 'AutoScheduleRuleExist',
            'errorMessage' => 'The auto schedule rule already exists.',
          ),
          2 => 
          array (
            'errorCode' => 'AutoScheduleRuleNotExist',
            'errorMessage' => 'The auto schedule rule dose not exist.',
          ),
          3 => 
          array (
            'errorCode' => 'BlackHoleConfigurationError',
            'errorMessage' => 'A black hole configuration error occurred.',
          ),
          4 => 
          array (
            'errorCode' => 'CleanConfigurationError',
            'errorMessage' => 'A clean configuration error occurred.',
          ),
          5 => 
          array (
            'errorCode' => 'CoveredNet',
            'errorMessage' => 'The CIDR block is overwritten.',
          ),
          6 => 
          array (
            'errorCode' => 'DatabaseError',
            'errorMessage' => 'A database error.',
          ),
          7 => 
          array (
            'errorCode' => 'DeclaredNet',
            'errorMessage' => 'The CIDR block has been advertised.',
          ),
          8 => 
          array (
            'errorCode' => 'DefenseConfigurationError',
            'errorMessage' => 'A defense configuration error occurred.',
          ),
          9 => 
          array (
            'errorCode' => 'ForwardConfigurationNotExist',
            'errorMessage' => 'The CIDR block forwarding configuration is not found.',
          ),
          10 => 
          array (
            'errorCode' => 'ForwardNotExist',
            'errorMessage' => 'The CIDR block zone forwarding configuration is not found.',
          ),
          11 => 
          array (
            'errorCode' => 'ForwardRuleNotExist',
            'errorMessage' => 'The CIDR block forwarding rule is not found.',
          ),
          12 => 
          array (
            'errorCode' => 'HttpFailed',
            'errorMessage' => 'HTTP request failed.',
          ),
          13 => 
          array (
            'errorCode' => 'IDNSubnetsCountLimit',
            'errorMessage' => 'The maximum number of IDCs of the instance is exceeded.',
          ),
          14 => 
          array (
            'errorCode' => 'InstanceExist',
            'errorMessage' => 'The instance already exists.',
          ),
          15 => 
          array (
            'errorCode' => 'InstanceNetConfigurationExist',
            'errorMessage' => 'The instance CIDR block configuration already exists.',
          ),
          16 => 
          array (
            'errorCode' => 'InstanceNotExist',
            'errorMessage' => 'The instance is not found.',
          ),
          17 => 
          array (
            'errorCode' => 'InstanceUpstreamLimit',
            'errorMessage' => 'The maximum number of reinjection configurations for the instance is exceeded.',
          ),
          18 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An internal error occurred.',
          ),
          19 => 
          array (
            'errorCode' => 'InvalidNet',
            'errorMessage' => 'Invalid CIDR block.',
          ),
          20 => 
          array (
            'errorCode' => 'InvalidParam',
            'errorMessage' => 'Invalid parameter value.',
          ),
          21 => 
          array (
            'errorCode' => 'IPSubnetsCountLimit',
            'errorMessage' => 'The maximum number of CIDR blocks of the instance is exceeded.',
          ),
          22 => 
          array (
            'errorCode' => 'JsonDecodeError',
            'errorMessage' => 'Json string decoding failed.',
          ),
          23 => 
          array (
            'errorCode' => 'NetCannotExtend',
            'errorMessage' => 'The CIDR block cannot be extended.',
          ),
          24 => 
          array (
            'errorCode' => 'NetConfigurationExist',
            'errorMessage' => 'The CIDR block configuration already exists.',
          ),
          25 => 
          array (
            'errorCode' => 'NetConfigurationNotExist',
            'errorMessage' => 'The CIDR block configuration is not found.',
          ),
          26 => 
          array (
            'errorCode' => 'NetForwardDelete',
            'errorMessage' => 'The CIDR block forwarding is being deleted.',
          ),
          27 => 
          array (
            'errorCode' => 'NetMaskOutOfRange',
            'errorMessage' => 'The subnet mask of the CIDR block is invalid.',
          ),
          28 => 
          array (
            'errorCode' => 'NetNeedExtend',
            'errorMessage' => 'The CIDR block needs to be extended.',
          ),
          29 => 
          array (
            'errorCode' => 'NetStatusNotReady',
            'errorMessage' => 'The CIDR block reinjection configuration has not been completed.',
          ),
          30 => 
          array (
            'errorCode' => 'NetworkDeclearedFailed',
            'errorMessage' => 'Failed to advertise the CIDR block.',
          ),
          31 => 
          array (
            'errorCode' => 'NetWorkNotExist',
            'errorMessage' => 'The CIDR block is not found.',
          ),
          32 => 
          array (
            'errorCode' => 'NetworkUndeclearedFailed',
            'errorMessage' => 'Failed to cancel the advertisement of the CIDR block.',
          ),
          33 => 
          array (
            'errorCode' => 'ParameterNotEnough',
            'errorMessage' => 'Required parameters are not specified.',
          ),
          34 => 
          array (
            'errorCode' => 'ParameterOutOfRange',
            'errorMessage' => 'Invalid parameter value.',
          ),
          35 => 
          array (
            'errorCode' => 'RegionNotExist',
            'errorMessage' => 'The region does not exist.',
          ),
          36 => 
          array (
            'errorCode' => 'RequestMethodError',
            'errorMessage' => 'An incorrect request method.',
          ),
          37 => 
          array (
            'errorCode' => 'SubnetCountLimit',
            'errorMessage' => 'The maximum number of subnets is exceeded.',
          ),
          38 => 
          array (
            'errorCode' => 'UnKnownError',
            'errorMessage' => 'An unknown error occurred.',
          ),
          39 => 
          array (
            'errorCode' => 'UpsteamNotComplete',
            'errorMessage' => 'The reinjection configuration has not been completed.',
          ),
          40 => 
          array (
            'errorCode' => 'UpstreamConfigurationNotExist',
            'errorMessage' => 'The reinjection configuration is not found.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 200,\\n  \\"RequestId\\": \\"24B652B5-AEFF-3F03-9114-00D053C42277\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"Data\\": {\\n    \\"Total\\": 0,\\n    \\"Page\\": 0,\\n    \\"Num\\": 0,\\n    \\"Nets\\": [\\n      {\\n        \\"UserId\\": \\"\\",\\n        \\"SaleId\\": \\"\\",\\n        \\"UpstreamType\\": \\"\\",\\n        \\"Net\\": \\"\\",\\n        \\"NetType\\": \\"\\",\\n        \\"Mode\\": \\"\\",\\n        \\"DeclaredState\\": 0,\\n        \\"Declared\\": [\\n          {\\n            \\"Region\\": \\"\\",\\n            \\"Declared\\": \\"\\"\\n          }\\n        ],\\n        \\"GmtCreate\\": \\"\\",\\n        \\"GmtModify\\": \\"\\",\\n        \\"NetExtend\\": \\"\\",\\n        \\"DDoSDefense\\": {\\n          \\"DjPolicy\\": {\\n            \\"PolicyName\\": \\"\\"\\n          },\\n          \\"CleanTh\\": {\\n            \\"Mbps\\": 0,\\n            \\"Pps\\": 0\\n          },\\n          \\"HoleTh\\": {\\n            \\"ThreshMbps\\": 0\\n          }\\n        },\\n        \\"FwdEffect\\": 0,\\n        \\"NetMain\\": 0\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '查询网段列表',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-hongkong',
      'endpoint' => 'ddosdiversion.cn-hongkong.aliyuncs.com',
    ),
  ),
);
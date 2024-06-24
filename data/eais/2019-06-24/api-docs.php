<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'eais',
    'version' => '2019-06-24',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 186392,
      'title' => '地域',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeRegions',
      ),
    ),
    1 => 
    array (
      'id' => 186394,
      'title' => '实例',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateEaisEi',
        1 => 'AttachEaisEi',
        2 => 'StartEaisEi',
        3 => 'StopEaisEi',
        4 => 'DetachEaisEi',
        5 => 'DeleteEaisEi',
        6 => 'DescribeEais',
        7 => 'CreateEai',
        8 => 'CreateEaiEcs',
        9 => 'CreateEaiEci',
        10 => 'CreateEaiJupyter',
        11 => 'AttachEai',
        12 => 'DetachEai',
        13 => 'DeleteEai',
        14 => 'DeleteEaiAll',
        15 => 'GetInstanceMetrics',
        16 => 'ChangeResourceGroup',
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
    'DescribeRegions' => 
    array (
      'summary' => '查询您可以使用的阿里云地域。',
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
        'operationType' => 'list',
        'riskType' => 'none',
        'chargeType' => 'free',
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'F5FEB9AA-C108-577C-AB3D-D13524AF****',
              ),
              'Regions' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Region' => 
                  array (
                    'description' => '地域信息集合。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'RegionEndpoint' => 
                        array (
                          'description' => '地域对应的接入地址（Endpoint）。',
                          'type' => 'string',
                          'example' => 'eais.cn-shenzhen.aliyuncs.com',
                        ),
                        'LocalName' => 
                        array (
                          'description' => '地域名称。',
                          'type' => 'string',
                          'example' => '华南1（深圳）',
                        ),
                        'RegionId' => 
                        array (
                          'description' => '地域ID。',
                          'type' => 'string',
                          'example' => 'cn-shenzhen',
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
            'errorCode' => 'CheckTimeout',
            'errorMessage' => 'Check timed out.',
          ),
          1 => 
          array (
            'errorCode' => 'InconsistentSignature',
            'errorMessage' => 'The signatures are inconsistent.',
          ),
          2 => 
          array (
            'errorCode' => 'Timeout',
            'errorMessage' => 'Operation timed out.',
          ),
        ),
        401 => 
        array (
          0 => 
          array (
            'errorCode' => 'CallRamApiFailed',
            'errorMessage' => 'Failed to call the Alibaba Cloud RAM service.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoPermission',
            'errorMessage' => 'You are not authorized to perform this operation. %s',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"F5FEB9AA-C108-577C-AB3D-D13524AF****\\",\\n  \\"Regions\\": {\\n    \\"Region\\": [\\n      {\\n        \\"RegionEndpoint\\": \\"eais.cn-shenzhen.aliyuncs.com\\",\\n        \\"LocalName\\": \\"华南1（深圳）\\",\\n        \\"RegionId\\": \\"cn-shenzhen\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeRegionsResponse>\\n    <RequestId>F5FEB9AA-C108-577C-AB3D-D13524AF****</RequestId>\\n    <Regions>\\n        <RegionEndpoint>eais.cn-shenzhen.aliyuncs.com</RegionEndpoint>\\n        <LocalName>华南1（深圳）</LocalName>\\n        <RegionId>cn-shenzhen</RegionId>\\n    </Regions>\\n</DescribeRegionsResponse>","errorExample":""}]',
      'title' => '查询地域',
    ),
    'CreateEaisEi' => 
    array (
      'summary' => '您可以调用API CreateEaisEi创建一个EAIS，并将EAIS实例绑定到客户端实例（ECS实例或ECI实例）上来灵活地为客户端实例提供业务所需的GPU资源并节省成本。以ECS实例为例，您可以通过在ECS实例（非GPU实例）上绑定一个弹性加速计算实例EAIS，即可生成一款新规格的GPU实例，且使用该方式相比直接购买GPU实例，可以实现GPU资源的弹性使用（您可以根据实际需要绑定、解绑或释放EAIS实例），有效为您降低部署成本和使用成本。',
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
        'chargeType' => 'paid',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例所属的地域ID。您可以调用[DescribeRegions](~~364379~~)查看最新的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'EAIS实例的规格。取值范围：

- eais.ei-a6.4xlarge
- eais.ei-a6.2xlarge
- eais.ei-a6.xlarge
- eais.ei-a6.large',
            'type' => 'string',
            'required' => true,
            'example' => 'eais.ei-a6.2xlarge',
          ),
        ),
        2 => 
        array (
          'name' => 'VSwitchId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例所属的虚拟交换机ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'vsw-bp17wmd1wb6fwlimk****',
          ),
        ),
        3 => 
        array (
          'name' => 'SecurityGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例所属的安全组ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'sg-bp16jgp51ttnkbdr****',
          ),
        ),
        4 => 
        array (
          'name' => 'InstanceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'EAIS实例的名称。长度为2~128个字符，支持Unicode中letter分类下的字符（其中包括英文、中文和数字等）。可以包含半角冒号（:）、下划线（_）、半角句号（.）或者短划线（-）。',
            'type' => 'string',
            'required' => false,
            'example' => 'test_ei',
          ),
        ),
        5 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例所属的资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-acfmvpuy4a5****',
          ),
        ),
        6 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '幂等参数，保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。`ClientToken`只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
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
                'example' => 'F5FEB9AA-C108-577C-AB3D-D13524AF****',
              ),
              'EiInstanceId' => 
              array (
                'description' => 'EAIS实例ID。',
                'type' => 'string',
                'example' => 'eais-hzu00xufs1c8j5nn****',
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
            'errorCode' => 'InvalidRegionId',
            'errorMessage' => 'The service does not support the region. You can call the DescribeRegions API to view the supported regions.',
          ),
          1 => 
          array (
            'errorCode' => 'CheckTimeout',
            'errorMessage' => 'Check timed out.',
          ),
          2 => 
          array (
            'errorCode' => 'InconsistentSignature',
            'errorMessage' => 'The signatures are inconsistent.',
          ),
          3 => 
          array (
            'errorCode' => 'Duplicate.TagKey',
            'errorMessage' => 'The Tag.N.Key contains a duplicated key.',
          ),
          4 => 
          array (
            'errorCode' => 'CustomTag.NumberExceed',
            'errorMessage' => 'The maximum number of system tags for each resource is 20.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidInstanceType',
            'errorMessage' => 'The instance type is invalid.',
          ),
          6 => 
          array (
            'errorCode' => 'NumberExceed.Tags',
            'errorMessage' => 'The maximum number of Tags is exceeded. The maximum is 20.',
          ),
          7 => 
          array (
            'errorCode' => 'Timeout',
            'errorMessage' => 'Operation timed out.',
          ),
        ),
        401 => 
        array (
          0 => 
          array (
            'errorCode' => 'CallRamApiFailed',
            'errorMessage' => 'Failed to call the Alibaba Cloud RAM service.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoPermission',
            'errorMessage' => 'You are not authorized to perform this operation. %s',
          ),
          1 => 
          array (
            'errorCode' => 'NoResources',
            'errorMessage' => 'The current regional resources are insufficient.',
          ),
          2 => 
          array (
            'errorCode' => 'CreateOrderFailed',
            'errorMessage' => 'Create order failed: %s.',
          ),
          3 => 
          array (
            'errorCode' => 'InDebt',
            'errorMessage' => 'The current user has an overdue payment. Please top up first.',
          ),
          4 => 
          array (
            'errorCode' => 'OperationDenied.KeyValueNotNull',
            'errorMessage' => 'The key value cannot be null.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'asynchronous',
        'callback' => 'eais::2019-06-24::DescribeEais',
        'callbackInterval' => 10000,
        'maxCallbackTimes' => 60,
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"F5FEB9AA-C108-577C-AB3D-D13524AF****\\",\\n  \\"EiInstanceId\\": \\"eais-hzu00xufs1c8j5nn****\\"\\n}","type":"json"}]',
      'title' => '（推荐）创建EAIS实例',
    ),
    'AttachEaisEi' => 
    array (
      'summary' => '创建弹性加速计算实例EAIS实例后，您需要调用API AttachEaisEi将该EAIS实例绑定到客户端实例（ECS实例或ECI实例）上，才能为客户端实例提供GPU资源。',
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
      'operationType' => 'readAndWrite',
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
            'description' => '实例所属的地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'ClientInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待绑定的ECS或ECI实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'i-bp14ws9hbt1oe0u9****',
          ),
        ),
        2 => 
        array (
          'name' => 'EiInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'EAIS实例ID。不设置该参数时，会自动查询用户账号下符合条件的可绑定实例，并选择查询出的第一个实例进行绑定。',
            'type' => 'string',
            'required' => false,
            'example' => 'eais-hzu00xufs1c8j5nn****',
          ),
        ),
        3 => 
        array (
          'name' => 'EiInstanceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'EAIS实例的规格。当未指定`EiInstanceId`参数时，可以设置该参数来限制绑定的EAIS实例规格；指定了`EiInstanceId`参数时，该参数不生效。取值范围：

- eais.ei-a6.4xlarge
- eais.ei-a6.2xlarge
- eais.ei-a6.xlarge
- eais.ei-a6.large',
            'type' => 'string',
            'required' => false,
            'example' => 'eais.ei-a6.2xlarge',
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
                'example' => 'C3BCB7DA-BEB6-4982-A765-6EA61EC8****',
              ),
              'EiInstanceId' => 
              array (
                'description' => 'EAIS实例ID。',
                'type' => 'string',
                'example' => 'eais-hzu00xufs1c8j5nn****',
              ),
              'ClientInstanceId' => 
              array (
                'description' => 'ECS或ECI实例ID。',
                'type' => 'string',
                'example' => 'i-bp14ws9hbt1oe0u9****',
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
            'errorCode' => 'InvalidClientInstanceId.NotBound',
            'errorMessage' => 'The client instance is not bound.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidClientInstanceId.NotFound',
            'errorMessage' => 'The client instance does not exist or is not bound.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidClientInstanceId.TypeError',
            'errorMessage' => 'The client instance ID is invalid. Currently, only ECS or ECI instances can be bound.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidClientInstanceId.VpcIdError',
            'errorMessage' => 'The client instance is invalid. Please make sure that the VpcId of the client instance and the VpcId of the EAIS instance are the same.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidClientInstanceId.VSwitchIdError',
            'errorMessage' => 'The client instance is invalid. Please make sure that the VSwitchId of the client instance and the VSwitchId of the EAIS instance are the same.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidClientInstanceId.Forbidden',
            'errorMessage' => 'Please make sure the ClientInstanceId exists and belongs to you.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C3BCB7DA-BEB6-4982-A765-6EA61EC8****\\",\\n  \\"EiInstanceId\\": \\"eais-hzu00xufs1c8j5nn****\\",\\n  \\"ClientInstanceId\\": \\"i-bp14ws9hbt1oe0u9****\\"\\n}","errorExample":""},{"type":"xml","example":"<AttachEaisEiResponse>\\n    <RequestId>C3BCB7DA-BEB6-4982-A765-6EA61EC8****</RequestId>\\n    <EiInstanceId>eais-hzu00xufs1c8j5nn****</EiInstanceId>\\n    <ClientInstanceId>i-bp14ws9hbt1oe0u9****</ClientInstanceId>\\n</AttachEaisEiResponse>","errorExample":""}]',
      'title' => '绑定EAIS实例',
    ),
    'StartEaisEi' => 
    array (
      'summary' => '当您创建好EAIS实例并挂载到目标客户端实例后，您可以调用API StartEaisEi启动一个弹性加速计算实例EAIS来为您的客户端提供GPU资源，以实现GPU资源的灵活扩展。',
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例所属的地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'EiInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'EAIS实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'eais-hzu00xufs1c8j5nn****',
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
                'example' => 'F23AEEC7-4D98-4657-A104-02692701****',
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
            'errorCode' => 'NoPermission',
            'errorMessage' => 'You are not authorized to perform this operation. %s',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"F23AEEC7-4D98-4657-A104-02692701****\\"\\n}","errorExample":""},{"type":"xml","example":"<StartEaisEiResponse>\\n    <RequestId>F23AEEC7-4D98-4657-A104-02692701****</RequestId>\\n</StartEaisEiResponse>","errorExample":""}]',
      'title' => '启动EAIS实例',
      'description' => '**请确保在使用该接口前，已充分了解EAIS产品的[计费说明](~~191197~~)。**',
    ),
    'StopEaisEi' => 
    array (
      'summary' => '如果您不再需要使用弹性加速计算实例为您的客户端实例提供GPU资源时，可以调用API StopEaisEi停止该EAIS实例，从而避免资源浪费，节约成本。',
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例所属的地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'EiInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'EAIS实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'eais-hzu00xufs1c8j5nn****',
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
                'example' => 'F23AEEC7-4D98-4657-A104-02692701****',
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
            'errorCode' => 'NoPermission',
            'errorMessage' => 'You are not authorized to perform this operation. %s',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"F23AEEC7-4D98-4657-A104-02692701****\\"\\n}","errorExample":""},{"type":"xml","example":"<StopEaisEiResponse>\\n    <RequestId>F23AEEC7-4D98-4657-A104-02692701****</RequestId>\\n</StopEaisEiResponse>","errorExample":""}]',
      'title' => '停止EAIS实例',
    ),
    'DetachEaisEi' => 
    array (
      'summary' => '为满足您业务的灵活性，您可以根据业务需要，调用API DetachEaisEi从客户端实例（即ECS实例或ECI实例）上解绑目标弹性加速计算实例EAIS。解绑ECS实例后，您的客户端实例将失去EAIS实例提供的加速效果。',
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例所属的地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'EiInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'EAIS实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'eais-hzu00xufs1c8j5nn****',
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
                'example' => '04DEB304-2436-4CB9-BB63-468BCEA0****',
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
            'errorCode' => 'NoPermission',
            'errorMessage' => 'You are not authorized to perform this operation. %s',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"04DEB304-2436-4CB9-BB63-468BCEA0****\\"\\n}","errorExample":""},{"type":"xml","example":"<DetachEaisEiResponse>\\n    <RequestId>04DEB304-2436-4CB9-BB63-468BCEA0****</RequestId>\\n</DetachEaisEiResponse>","errorExample":""}]',
      'title' => '解绑EAIS实例',
    ),
    'DeleteEaisEi' => 
    array (
      'summary' => '如果您不再需要使用弹性加速计算实例EAIS，您可以调用API DeleteEaisEi释放该EAIS实例。',
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例所属的地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'EiInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'EAIS实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'eais-hzu00xufs1c8j5nn****',
          ),
        ),
        2 => 
        array (
          'name' => 'Force',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例状态不符合删除条件时，是否强制删除。取值范围：
- true：强制删除。
- false：不强制删除。

默认值：false。

实例状态与本参数说明如下：

- 当实例状态为**可绑定**时，无需设置本参数，实例会正常释放。
- 当实例不是**可绑定**状态时，可以设置本参数值为true来强制释放实例。',
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
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'F23AEEC7-4D98-4657-A104-02692701****',
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
            'errorCode' => 'InvalidInstanceId',
            'errorMessage' => 'The InstanceId is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidRegionId',
            'errorMessage' => 'The service does not support the region. You can call the DescribeRegions API to view the supported regions.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoPermission',
            'errorMessage' => 'You are not authorized to perform this operation. %s',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidParameter.InstanceId.NotFound',
            'errorMessage' => 'The specified InstanceId does not exist.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"F23AEEC7-4D98-4657-A104-02692701****\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteEaisEiResponse>\\n    <RequestId>F23AEEC7-4D98-4657-A104-02692701****</RequestId>\\n</DeleteEaisEiResponse>","errorExample":""}]',
      'title' => '释放EAIS实例',
    ),
    'DescribeEais' => 
    array (
      'summary' => '调用API DescribeEais查询一个或多个已创建的弹性加速计算实例EAIS的详细信息，例如EAIS的实例ID、实例状态、实例规格、EAIS实例绑定的客户端实例（ECS实例或ECI实例）等信息。',
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
        'operationType' => 'list',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例所属的地域ID。您可以调用[DescribeRegions](https://help.aliyun.com/document_detail/364379.html)查看最新的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'enumValueTitles' => 
            array (
            ),
            'example' => 'cn-shenzhen',
          ),
        ),
        1 => 
        array (
          'name' => 'ElasticAcceleratedInstanceIds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'EAIS实例ID。取值可以由多个实例ID组成一个JSON数组，ID之间用半角逗号（,）隔开。最多支持200个ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '["eais-id1", "eais-id2"]',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'EAIS实例名称，支持使用通配符*进行模糊搜索。',
            'type' => 'string',
            'required' => false,
            'example' => 'eais*',
          ),
        ),
        3 => 
        array (
          'name' => 'Status',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'EAIS实例状态。具体状态与创建EAIS实例的方式有关，说明如下：
- 调用[CreateEaisEi](~~2618548~~)创建EAIS实例：	
  - Pending：准备中
  - Creating：创建中
  - Bindable：可绑定
  - Bound：已绑定
  - InUse：使用中
- 调用[CreateEai](~~2618555~~)创建EAIS实例：
  - Starting：创建中
  - Available：可绑定
  - Attaching：绑定中
  - InUse：已绑定
  - Detaching：解绑中',
            'type' => 'string',
            'required' => false,
            'example' => 'InUse',
          ),
        ),
        4 => 
        array (
          'name' => 'InstanceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'EAIS实例规格。取值范围：

- eais.ei-a6.4xlarge

- eais.ei-a6.2xlarge

- eais.ei-a6.xlarge

- eais.ei-a6.large
',
            'type' => 'string',
            'required' => false,
            'example' => 'eais.ei-a6.2xlarge',
          ),
        ),
        5 => 
        array (
          'name' => 'ClientInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '绑定的ECS或ECI实例ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'i-wz96zm231cua8hbv****',
          ),
        ),
        6 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例所属的资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-acfmvpuy4a5****',
          ),
        ),
        7 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '标签列表',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '实例的标签键。N的取值范围为1~20。

使用一个标签过滤资源，查询到该标签下的资源数量不能超过1000个；使用多个标签过滤资源，查询到同时绑定了多个标签的资源数量不能超过1000个。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'TestKey',
                ),
                'Value' => 
                array (
                  'description' => '实例的标签值。N的取值范围：1~20。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'TestValue',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 21,
          ),
        ),
        8 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询接口返回信息列表的页码。

起始值：1。

默认值：1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        9 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页展示响应信息时设置的每页行数，单位：行。

最大值：200。

默认值：20。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '20',
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1E23D585-BBD8-436F-9615-54CACD67****',
              ),
              'PageNumber' => 
              array (
                'description' => 'EAIS实例列表的页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '输入时设置的每页行数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'TotalCount' => 
              array (
                'description' => '查询到的EAIS实例总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'Instances' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Instance' => 
                  array (
                    'description' => '由Instances组成的数组格式，返回实例的信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '实例列表信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Status' => 
                        array (
                          'description' => 'EAIS实例状态。',
                          'type' => 'string',
                          'example' => 'InUse',
                        ),
                        'CreationTime' => 
                        array (
                          'description' => 'EAIS实例创建时间。格式为毫秒级的时间戳。',
                          'type' => 'string',
                          'example' => '1669945859000',
                        ),
                        'ClientInstanceName' => 
                        array (
                          'description' => '与EAIS实例绑定的ECS或ECI实例名称。',
                          'type' => 'string',
                          'example' => 'test1',
                        ),
                        'Description' => 
                        array (
                          'description' => 'EAIS实例描述。',
                          'type' => 'string',
                          'example' => 'testDescription',
                        ),
                        'ElasticAcceleratedInstanceId' => 
                        array (
                          'description' => 'EAIS实例ID。',
                          'type' => 'string',
                          'example' => 'eais-sz8t15a7gt7****',
                        ),
                        'InstanceName' => 
                        array (
                          'description' => 'EAIS实例名称。',
                          'type' => 'string',
                          'example' => 'testName',
                        ),
                        'ClientInstanceType' => 
                        array (
                          'description' => '与EAIS实例绑定的ECS或ECI实例规格。',
                          'type' => 'string',
                          'example' => 'ecs.g5ne.large',
                        ),
                        'ClientInstanceId' => 
                        array (
                          'description' => '与EAIS实例绑定的ECS或ECI实例ID。',
                          'type' => 'string',
                          'example' => 'i-wz93g6pyat2g****',
                        ),
                        'ZoneId' => 
                        array (
                          'description' => 'EAIS实例所属可用区。',
                          'type' => 'string',
                          'example' => 'cn-shenzhen-e',
                        ),
                        'InstanceType' => 
                        array (
                          'description' => 'EAIS实例规格。可能值：

- eais.ei-a6.4xlarge

- eais.ei-a6.2xlarge

- eais.ei-a6.xlarge

- eais.ei-a6.large',
                          'type' => 'string',
                          'example' => 'eais.ei-a6.2xlarge',
                        ),
                        'RegionId' => 
                        array (
                          'description' => '实例所属地域ID。',
                          'type' => 'string',
                          'example' => 'cn-shenzhen',
                        ),
                        'Tags' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Tag' => 
                            array (
                              'description' => 'EAIS实例的标签集合。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '实例的标签集合。',
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'TagKey' => 
                                  array (
                                    'description' => 'EAIS实例的标签键。',
                                    'type' => 'string',
                                    'example' => 'TestKey',
                                  ),
                                  'TagValue' => 
                                  array (
                                    'description' => 'EAIS实例的标签值。',
                                    'type' => 'string',
                                    'example' => 'TestValue',
                                  ),
                                ),
                              ),
                            ),
                          ),
                        ),
                        'Category' => 
                        array (
                          'description' => 'EAIS实例的类别。可能值：

- eais：普通的弹性加速计算实例

- jupyter：部署了特定的modelscope镜像并支持Jupyter Notebook功能的弹性加速计算实例',
                          'type' => 'string',
                          'enumValueTitles' => 
                          array (
                          ),
                          'example' => 'jupyter',
                        ),
                        'JupyterUrl' => 
                        array (
                          'description' => 'Jupyter Notebook的访问地址。仅当返回参数`Category`的值为`jupyter`时有值，当返回参数`Category`的值为`eais`时，值为空字符串。',
                          'type' => 'string',
                          'example' => 'http://121.41.**.24:8888',
                        ),
                        'VSwitchId' => 
                        array (
                          'description' => '虚拟交换机ID。',
                          'type' => 'string',
                          'example' => 'vsw-bp1sd131hfmd76r******',
                        ),
                        'SecurityGroupId' => 
                        array (
                          'description' => '安全组ID。',
                          'type' => 'string',
                          'example' => 'sg-bp1gppir818lx4******',
                        ),
                        'StartTime' => 
                        array (
                          'description' => 'EAIS实例启动完成时间。格式为毫秒级的时间戳。',
                          'type' => 'string',
                          'example' => '1669945889000',
                        ),
                        'ResourceGroupId' => 
                        array (
                          'description' => '实例所属的资源组ID。',
                          'type' => 'string',
                          'example' => 'rg-acfmvpuy4a5****',
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
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidParameter.InstanceId.NotFound',
            'errorMessage' => 'The specified InstanceId does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1E23D585-BBD8-436F-9615-54CACD67****\\",\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"TotalCount\\": 1,\\n  \\"Instances\\": {\\n    \\"Instance\\": [\\n      {\\n        \\"Status\\": \\"InUse\\",\\n        \\"CreationTime\\": \\"1669945859000\\",\\n        \\"ClientInstanceName\\": \\"test1\\",\\n        \\"Description\\": \\"testDescription\\",\\n        \\"ElasticAcceleratedInstanceId\\": \\"eais-sz8t15a7gt7****\\",\\n        \\"InstanceName\\": \\"testName\\",\\n        \\"ClientInstanceType\\": \\"ecs.g5ne.large\\",\\n        \\"ClientInstanceId\\": \\"i-wz93g6pyat2g****\\",\\n        \\"ZoneId\\": \\"cn-shenzhen-e\\",\\n        \\"InstanceType\\": \\"eais.ei-a6.2xlarge\\",\\n        \\"RegionId\\": \\"cn-shenzhen\\",\\n        \\"Tags\\": {\\n          \\"Tag\\": [\\n            {\\n              \\"TagKey\\": \\"TestKey\\",\\n              \\"TagValue\\": \\"TestValue\\"\\n            }\\n          ]\\n        },\\n        \\"Category\\": \\"jupyter\\",\\n        \\"JupyterUrl\\": \\"http://121.41.**.24:8888\\",\\n        \\"VSwitchId\\": \\"vsw-bp1sd131hfmd76r******\\",\\n        \\"SecurityGroupId\\": \\"sg-bp1gppir818lx4******\\",\\n        \\"StartTime\\": \\"1669945889000\\",\\n        \\"ResourceGroupId\\": \\"rg-acfmvpuy4a5****\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeEaisResponse>\\n    <RequestId>1E23D585-BBD8-436F-9615-54CACD67****</RequestId>\\n    <PageNumber>1</PageNumber>\\n    <PageSize>10</PageSize>\\n    <TotalCount>1</TotalCount>\\n    <Instances>\\n        <Status>InUse</Status>\\n        <CreationTime>1669945859000</CreationTime>\\n        <ClientInstanceName>test1</ClientInstanceName>\\n        <Description>testDescription</Description>\\n        <ElasticAcceleratedInstanceId>eais-sz8t15a7gt7****</ElasticAcceleratedInstanceId>\\n        <InstanceName>testName</InstanceName>\\n        <ClientInstanceType>ecs.g5ne.large</ClientInstanceType>\\n        <ClientInstanceId>i-wz93g6pyat2g****</ClientInstanceId>\\n        <ZoneId>cn-shenzhen-e</ZoneId>\\n        <InstanceType>eais.ei-a6.2xlarge</InstanceType>\\n        <RegionId>cn-shenzhen</RegionId>\\n        <Tags>\\n            <TagKey>TestKey</TagKey>\\n            <TagValue>TestValue</TagValue>\\n        </Tags>\\n        <Category>jupyter</Category>\\n        <JupyterUrl>http://121.41.**.24:8888</JupyterUrl>\\n        <VSwitchId>vsw-bp1sd131hfmd76r******</VSwitchId>\\n        <SecurityGroupId>sg-bp1gppir818lx4******</SecurityGroupId>\\n        <StartTime>1669945889000</StartTime>\\n        <ResourceGroupId>rg-acfmvpuy4a5****</ResourceGroupId>\\n    </Instances>\\n</DescribeEaisResponse>","errorExample":""}]',
      'title' => '查询EAIS实例列表',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateEai' => 
    array (
      'summary' => '您可以调用API CreateEai创建一个EAIS，并将EAIS实例绑定到客户端实例（ECS实例或ECI实例）上来灵活地为客户端实例提供业务所需的GPU资源并节省成本。以ECS实例为例，您可以通过在ECS实例（非GPU实例）上绑定一个弹性加速计算实例EAIS，即可生成一款新规格的GPU实例，且使用该方式相比直接购买GPU实例，可以实现GPU资源的弹性使用（您可以根据实际需要绑定、解绑或释放EAIS实例），有效为您降低部署成本和使用成本。',
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
            'description' => '实例所属的地域ID。您可以调用[DescribeRegions](~~364379~~)查看最新的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-shenzhen',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'EAIS实例的规格。取值范围：

- eais.ei-a6.4xlarge

- eais.ei-a6.2xlarge

- eais.ei-a6.xlarge

- eais.ei-a6.large',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'eais.ei-a6.2xlarge',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '幂等参数，保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
          ),
        ),
        3 => 
        array (
          'name' => 'InstanceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'EAIS 实例的名称。长度为2~128个字符，支持Unicode中letter分类下的字符（其中包括英文、中文和数字等）。可以包含半角冒号（:）、下划线（_）、半角句号（.）或者短划线（-）。',
            'type' => 'string',
            'required' => false,
            'example' => 'eais-test01',
          ),
        ),
        4 => 
        array (
          'name' => 'SecurityGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例所属的安全组ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'sg-uf66jeqopgqa9hdn****',
          ),
        ),
        5 => 
        array (
          'name' => 'VSwitchId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例所属的虚拟交换机ID。

> 交换机网段内IP的个数决定了该交换机最大可支持创建的EAIS实例个数，请务必提前规划好网段设置。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'vsw-uf6h3rbwbm90urjwa****',
          ),
        ),
        6 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例所属的资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-acfmvpuy4a5****',
          ),
        ),
        7 => 
        array (
          'name' => 'Image',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'EAIS实例镜像。默认使用EAIS内部镜像提供服务，用户也可以通过指定Image参数使用自己的镜像。自定义镜像使用限制如下：

- 必须是公网可下载的镜像。

- 只能选择使用1688、42000、50000端口。

- 建议镜像文件大小小于5 GB。

> 镜像太大可能会导致下载镜像的过程太长，造成创建超时失败。',
            'type' => 'string',
            'required' => false,
            'example' => 'ubuntu:20.04',
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
              'ElasticAcceleratedInstanceId' => 
              array (
                'description' => 'EAIS实例ID。',
                'type' => 'string',
                'example' => 'eais-sz8t15a7gt7z7j7i****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'F5FEB9AA-C108-577C-AB3D-D13524AF****',
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
            'errorCode' => 'CheckTimeout',
            'errorMessage' => 'Check timed out.',
          ),
          1 => 
          array (
            'errorCode' => 'CustomTag.NumberExceed',
            'errorMessage' => 'The maximum number of system tags for each resource is 20.',
          ),
          2 => 
          array (
            'errorCode' => 'Duplicate.TagKey',
            'errorMessage' => 'The Tag.N.Key contains a duplicated key.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidInstanceType',
            'errorMessage' => 'The instance type is invalid.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidParameter.TagKey',
            'errorMessage' => 'The specified Tag.n.Key is invalid.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidParameter.TagValue',
            'errorMessage' => 'The specified Tag.n.Value is invalid.',
          ),
          6 => 
          array (
            'errorCode' => 'InvalidRegionId',
            'errorMessage' => 'The service does not support the region. You can call the DescribeRegions API to view the supported regions.',
          ),
          7 => 
          array (
            'errorCode' => 'NumberExceed.Tags',
            'errorMessage' => 'The maximum number of Tags is exceeded. The maximum is 20.',
          ),
          8 => 
          array (
            'errorCode' => 'Timeout',
            'errorMessage' => 'Operation timed out.',
          ),
        ),
        401 => 
        array (
          0 => 
          array (
            'errorCode' => 'CallRamApiFailed',
            'errorMessage' => 'Failed to call the Alibaba Cloud RAM service.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'CreateOrderFailed',
            'errorMessage' => 'Create order failed: %s.',
          ),
          1 => 
          array (
            'errorCode' => 'InDebt',
            'errorMessage' => 'The current user has an overdue payment. Please top up first.',
          ),
          2 => 
          array (
            'errorCode' => 'NoPermission',
            'errorMessage' => 'You are not authorized to perform this operation. %s',
          ),
          3 => 
          array (
            'errorCode' => 'NoResources',
            'errorMessage' => 'The current regional resources are insufficient.',
          ),
          4 => 
          array (
            'errorCode' => 'OperationDenied.KeyValueNotNull',
            'errorMessage' => 'The key value cannot be null.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'asynchronous',
        'callback' => 'eais::2019-06-24::DescribeEais',
        'callbackInterval' => 20000,
        'maxCallbackTimes' => 30,
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"ElasticAcceleratedInstanceId\\": \\"eais-sz8t15a7gt7z7j7i****\\",\\n  \\"RequestId\\": \\"F5FEB9AA-C108-577C-AB3D-D13524AF****\\"\\n}","type":"json"}]',
      'title' => '创建EAIS实例',
      'description' => '**请确保在使用该接口前，已充分了解EAIS产品的[计费说明](~~191197~~)。**',
    ),
    'CreateEaiEcs' => 
    array (
      'summary' => '创建一个弹性加速计算实例和一个客户端ECS实例，并将弹性加速计算实例绑定到ECS实例上。',
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'allowEmptyValue' => false,
          'schema' => 
          array (
            'title' => '幂等参数',
            'description' => '幂等参数，保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例所属的地域ID。您可以调用[DescribeRegions](~~364379~~)查看最新的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-shenzhen',
          ),
        ),
        2 => 
        array (
          'name' => 'EaisName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '弹性加速计算实例的名称。长度为2~128个英文或中文字符。必须以大小字母或中文开头，不能以http://或https://开头。可以包含数字、半角冒号（:）、下划线（_）、半角句号（.）或者短划线（-）。',
            'type' => 'string',
            'required' => false,
            'example' => 'eais-test01',
          ),
        ),
        3 => 
        array (
          'name' => 'Ecs',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => 'ECS实例参数对象。',
            'type' => 'object',
            'properties' => 
            array (
              'ImageId' => 
              array (
                'description' => 'ECS实例使用的镜像ID。',
                'type' => 'string',
                'required' => false,
                'example' => 'aliyun_2_1903_x64_20G_alibase_20200324.vhd',
              ),
              'InternetMaxBandwidthIn' => 
              array (
                'description' => 'ECS实例公网入带宽最大值，单位为Mbit/s。取值范围：

- 当所购公网出带宽小于等于10 Mbit/s时：1~10，默认为10。
- 当所购公网出带宽大于10 Mbit/s时：1~`InternetMaxBandwidthOut`的取值，默认为`InternetMaxBandwidthOut`的取值。',
                'type' => 'string',
                'required' => false,
                'example' => '10',
              ),
              'InternetMaxBandwidthOut' => 
              array (
                'description' => 'ECS实例公网出带宽最大值，单位为Mbit/s。取值范围：0~100。
默认值：0。',
                'type' => 'string',
                'required' => false,
                'example' => '10',
              ),
              'Name' => 
              array (
                'description' => 'ECS实例名称。长度为2~128个字符，必须以大小字母或中文开头，不能以http://或https://开头。可以包含中文、英文、数字、半角冒号（:）、下划线（_）、半角句号（.）或者短划线（-）。',
                'type' => 'string',
                'required' => false,
                'example' => 'test1',
              ),
              'Password' => 
              array (
                'description' => 'ECS实例密码。长度为8~30个字符，必须同时包含大小写英文字母、数字和特殊符号中的三类字符。特殊符号可以是：`()~!@#$%^&*-_+=|{}[]:;\'<>,.?/`。',
                'type' => 'string',
                'required' => false,
                'example' => 'EcsV587!',
              ),
              'SystemDiskCategory' => 
              array (
                'description' => 'ECS实例系统盘的云盘种类。取值范围：

- cloud_efficiency：高效云盘。
- cloud_ssd：SSD云盘。
- cloud_essd：ESSD云盘。
- cloud：普通云盘。
- cloud_auto：ESSD AutoPL云盘。

已停售的实例规格且非I/O优化实例默认值为cloud，否则默认值为cloud_efficiency。',
                'type' => 'string',
                'required' => false,
                'example' => 'cloud_ssd',
              ),
              'SystemDiskSize' => 
              array (
                'description' => 'ECS实例系统盘大小，单位为GiB。取值范围：20~500。

该参数的取值必须大于或者等于max{20, `ImageSize`}。

默认值：max{40, `ImageId`对应的镜像大小}。',
                'type' => 'integer',
                'format' => 'int64',
                'required' => false,
                'example' => '40',
              ),
              'Type' => 
              array (
                'description' => 'ECS实例的资源规格。',
                'type' => 'string',
                'required' => false,
                'example' => 'ecs.g7.4xlarge',
              ),
              'ZoneId' => 
              array (
                'description' => 'ECS实例所属的可用区ID。',
                'type' => 'string',
                'required' => false,
                'example' => 'cn-shenzhen-e',
              ),
            ),
            'required' => false,
          ),
        ),
        4 => 
        array (
          'name' => 'EaisType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'EAIS实例的规格。取值范围：

- eais.ei-a6.4xlarge

- eais.ei-a6.2xlarge

- eais.ei-a6.xlarge

- eais.ei-a6.large',
            'type' => 'string',
            'required' => true,
            'example' => 'eais.ei-a6.2xlarge',
          ),
        ),
        5 => 
        array (
          'name' => 'VSwitchId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例所属的虚拟交换机ID。

> 交换机网段内IP的个数决定了该交换机最大可支持创建的EAIS实例个数，请务必提前规划好网段设置。',
            'type' => 'string',
            'required' => true,
            'example' => 'vsw-uf6h3rbwbm90urjwa****',
          ),
        ),
        6 => 
        array (
          'name' => 'SecurityGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例所属的安全组ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'sg-uf66jeqopgqa9hdn****',
          ),
        ),
        7 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'EAIS实例所属的资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-acfmvpuy4a5****',
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
                'example' => 'F5FEB9AA-C108-577C-AB3D-D13524AF****',
              ),
              'ElasticAcceleratedInstanceId' => 
              array (
                'description' => 'EAIS实例ID。',
                'type' => 'string',
                'example' => 'eais-sz8t15a7gt7z7j7i****',
              ),
              'ClientInstanceId' => 
              array (
                'description' => 'ECS实例ID。',
                'type' => 'string',
                'example' => 'i-bp1hjrvleawl4ogb****',
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
            'errorCode' => 'CheckTimeout',
            'errorMessage' => 'Check timed out.',
          ),
          1 => 
          array (
            'errorCode' => 'CustomTag.NumberExceed',
            'errorMessage' => 'The maximum number of system tags for each resource is 20.',
          ),
          2 => 
          array (
            'errorCode' => 'Duplicate.TagKey',
            'errorMessage' => 'The Tag.N.Key contains a duplicated key.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidInstanceType',
            'errorMessage' => 'The instance type is invalid.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidParameter.TagKey',
            'errorMessage' => 'The specified Tag.n.Key is invalid.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidParameter.TagValue',
            'errorMessage' => 'The specified Tag.n.Value is invalid.',
          ),
          6 => 
          array (
            'errorCode' => 'InvalidRegionId',
            'errorMessage' => 'The service does not support the region. You can call the DescribeRegions API to view the supported regions.',
          ),
          7 => 
          array (
            'errorCode' => 'NumberExceed.Tags',
            'errorMessage' => 'The maximum number of Tags is exceeded. The maximum is 20.',
          ),
          8 => 
          array (
            'errorCode' => 'Timeout',
            'errorMessage' => 'Operation timed out.',
          ),
        ),
        401 => 
        array (
          0 => 
          array (
            'errorCode' => 'CallRamApiFailed',
            'errorMessage' => 'Failed to call the Alibaba Cloud RAM service.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'CreateOrderFailed',
            'errorMessage' => 'Create order failed: %s.',
          ),
          1 => 
          array (
            'errorCode' => 'InDebt',
            'errorMessage' => 'The current user has an overdue payment. Please top up first.',
          ),
          2 => 
          array (
            'errorCode' => 'NoPermission',
            'errorMessage' => 'You are not authorized to perform this operation. %s',
          ),
          3 => 
          array (
            'errorCode' => 'NoResources',
            'errorMessage' => 'The current regional resources are insufficient.',
          ),
          4 => 
          array (
            'errorCode' => 'OperationDenied.KeyValueNotNull',
            'errorMessage' => 'The key value cannot be null.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"F5FEB9AA-C108-577C-AB3D-D13524AF****\\",\\n  \\"ElasticAcceleratedInstanceId\\": \\"eais-sz8t15a7gt7z7j7i****\\",\\n  \\"ClientInstanceId\\": \\"i-bp1hjrvleawl4ogb****\\"\\n}","type":"json"}]',
      'title' => '创建EAIS实例并绑定至客户端实例',
    ),
    'CreateEaiEci' => 
    array (
      'summary' => '创建一个弹性加速计算实例和一个客户端ECI实例，并将弹性加速计算实例绑定到ECI实例上。',
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'allowEmptyValue' => false,
          'schema' => 
          array (
            'title' => '幂等参数',
            'description' => '幂等参数，保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例所属的地域ID。您可以调用[DescribeRegions](~~364379~~)查看最新的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-shenzhen',
          ),
        ),
        2 => 
        array (
          'name' => 'EaisName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '弹性加速计算实例的名称。长度为2~128个英文或中文字符。必须以大小字母或中文开头，不能以http://或https://开头。可以包含数字、半角冒号（:）、下划线（_）、半角句号（.）或者短划线（-）。',
            'type' => 'string',
            'required' => false,
            'example' => 'eais-test01',
          ),
        ),
        3 => 
        array (
          'name' => 'EaisType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'EAIS实例的规格。取值范围：

- eais.ei-a6.4xlarge

- eais.ei-a6.2xlarge

- eais.ei-a6.xlarge

- eais.ei-a6.large',
            'type' => 'string',
            'required' => true,
            'example' => 'eais.ei-a6.2xlarge',
          ),
        ),
        4 => 
        array (
          'name' => 'VSwitchId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例所属的虚拟交换机ID。

> 交换机网段内IP的个数决定了该交换机最大可支持创建的EAIS实例个数，请务必提前规划好网段设置。',
            'type' => 'string',
            'required' => true,
            'example' => 'vsw-uf6h3rbwbm90urjwa****',
          ),
        ),
        5 => 
        array (
          'name' => 'SecurityGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例所属的安全组ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'sg-uf66jeqopgqa9hdn****',
          ),
        ),
        6 => 
        array (
          'name' => 'Eci',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => 'ECI实例参数对象。',
            'type' => 'object',
            'properties' => 
            array (
              'Container' => 
              array (
                'description' => '容器参数对象。',
                'type' => 'object',
                'properties' => 
                array (
                  'Arg' => 
                  array (
                    'description' => '容器启动命令对应的参数。最多10个。',
                    'type' => 'string',
                    'required' => false,
                    'example' => '100',
                  ),
                  'Command' => 
                  array (
                    'description' => '容器启动命令。最多20个。每个命令最多包含256个字符。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'sleep',
                  ),
                  'Image' => 
                  array (
                    'description' => '容器使用的镜像。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'nginx',
                  ),
                  'Name' => 
                  array (
                    'description' => '容器名称。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'test1',
                  ),
                  'Volumes' => 
                  array (
                    'description' => '容器挂载的数据卷。',
                    'type' => 'string',
                    'required' => false,
                    'example' => '/mnt/eais=eais,/models=eais/models',
                  ),
                ),
                'required' => false,
              ),
              'EipId' => 
              array (
                'description' => 'ECI实例使用的弹性公网ID。',
                'type' => 'string',
                'required' => false,
                'example' => 'eip-uf66jeqopgqa9hdn****',
              ),
              'Name' => 
              array (
                'description' => 'ECI实例名称。',
                'type' => 'string',
                'required' => false,
                'example' => 'test-nginx',
              ),
              'Type' => 
              array (
                'description' => 'ECI实例规格。',
                'type' => 'string',
                'required' => false,
                'example' => 'ecs.c5.xlarge',
              ),
              'Volume' => 
              array (
                'description' => 'ECI实例挂载的数据卷。',
                'type' => 'string',
                'required' => false,
                'example' => '00c7****-rivj.cn-hangzhou.extreme.nas.aliyuncs.com:/share',
              ),
            ),
            'required' => false,
          ),
        ),
        7 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'EAIS实例所属的资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-acfmvpuy4a5****',
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
                'example' => 'F5FEB9AA-C108-577C-AB3D-D13524AF****',
              ),
              'ElasticAcceleratedInstanceId' => 
              array (
                'description' => 'EAIS实例ID。',
                'type' => 'string',
                'example' => 'eais-sz8t15a7gt7z7j7i****',
              ),
              'ClientInstanceId' => 
              array (
                'description' => 'ECI实例ID。',
                'type' => 'string',
                'example' => 'eci-2zeh03ygxlrzmfi6****',
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
            'errorCode' => 'CheckTimeout',
            'errorMessage' => 'Check timed out.',
          ),
          1 => 
          array (
            'errorCode' => 'CustomTag.NumberExceed',
            'errorMessage' => 'The maximum number of system tags for each resource is 20.',
          ),
          2 => 
          array (
            'errorCode' => 'Duplicate.TagKey',
            'errorMessage' => 'The Tag.N.Key contains a duplicated key.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidInstanceType',
            'errorMessage' => 'The instance type is invalid.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidParameter.TagKey',
            'errorMessage' => 'The specified Tag.n.Key is invalid.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidParameter.TagValue',
            'errorMessage' => 'The specified Tag.n.Value is invalid.',
          ),
          6 => 
          array (
            'errorCode' => 'InvalidRegionId',
            'errorMessage' => 'The service does not support the region. You can call the DescribeRegions API to view the supported regions.',
          ),
          7 => 
          array (
            'errorCode' => 'NumberExceed.Tags',
            'errorMessage' => 'The maximum number of Tags is exceeded. The maximum is 20.',
          ),
          8 => 
          array (
            'errorCode' => 'Timeout',
            'errorMessage' => 'Operation timed out.',
          ),
        ),
        401 => 
        array (
          0 => 
          array (
            'errorCode' => 'CallRamApiFailed',
            'errorMessage' => 'Failed to call the Alibaba Cloud RAM service.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'CreateOrderFailed',
            'errorMessage' => 'Create order failed: %s.',
          ),
          1 => 
          array (
            'errorCode' => 'InDebt',
            'errorMessage' => 'The current user has an overdue payment. Please top up first.',
          ),
          2 => 
          array (
            'errorCode' => 'NoPermission',
            'errorMessage' => 'You are not authorized to perform this operation. %s',
          ),
          3 => 
          array (
            'errorCode' => 'NoResources',
            'errorMessage' => 'The current regional resources are insufficient.',
          ),
          4 => 
          array (
            'errorCode' => 'OperationDenied.KeyValueNotNull',
            'errorMessage' => 'The key value cannot be null.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"F5FEB9AA-C108-577C-AB3D-D13524AF****\\",\\n  \\"ElasticAcceleratedInstanceId\\": \\"eais-sz8t15a7gt7z7j7i****\\",\\n  \\"ClientInstanceId\\": \\"eci-2zeh03ygxlrzmfi6****\\"\\n}","type":"json"}]',
      'title' => '创建EAIS实例并绑定至客户端实例',
    ),
    'CreateEaiJupyter' => 
    array (
      'summary' => '创建一个部署了notebook的弹性加速计算实例。',
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
      'operationType' => 'readAndWrite',
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
            'description' => '实例所属的地域ID。您可以调用[DescribeRegions](~~364379~~)查看最新的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'enumValueTitles' => 
            array (
              'cn-hangzhou' => 'cn-hangzhou',
            ),
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'EaisType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'EAIS实例的规格，仅支持设置为**eais.ei-a6.2xlarge**。',
            'type' => 'string',
            'required' => true,
            'enumValueTitles' => 
            array (
              'eais.ei-a6.2xlarge' => 'eais.ei-a6.2xlarge',
            ),
            'example' => 'eais.ei-a6.2xlarge',
          ),
        ),
        2 => 
        array (
          'name' => 'VSwitchId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例所属的虚拟交换机ID。

> 交换机网段内IP的个数决定了该交换机最大可支持创建的EAIS实例个数，请务必提前规划好网段设置。
',
            'type' => 'string',
            'required' => true,
            'example' => 'vsw-uf6h3rbwbm90urjwa****',
          ),
        ),
        3 => 
        array (
          'name' => 'SecurityGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例所属的安全组ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'sg-uf66jeqopgqa9hdn****',
          ),
        ),
        4 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '幂等参数，保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25693~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
          ),
        ),
        5 => 
        array (
          'name' => 'EnvironmentVar',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '在EAIS实例初始化时设置一个或多个环境变量。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '环境变量名。长度为1~128位。格式要求：[0-9a-zA-Z]，以及下划线（_），不能以数字开头。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'MY_USER_NAME',
                ),
                'Value' => 
                array (
                  'description' => '环境变量值。长度为0~256位。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'test123',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
          ),
        ),
        6 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'EAIS实例所属的资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-acfmvpuy4a5****',
          ),
        ),
        7 => 
        array (
          'name' => 'EaisName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'EAIS实例的名称。长度为2~128个英文或中文字符。必须以大小字母或中文开头，不能以http://或https://开头。可以包含数字、半角冒号（:）、下划线（_）、半角句号（.）或者短划线（-）。',
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
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'A655AB0E-31BB-45AD-9255-FCE93F65****',
              ),
              'ElasticAcceleratedInstanceId' => 
              array (
                'description' => 'EAIS实例ID。',
                'type' => 'string',
                'example' => 'eais-hz8t15a7gt7z7j7i****',
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
            'errorCode' => 'Timeout',
            'errorMessage' => 'Operation timed out.',
          ),
          1 => 
          array (
            'errorCode' => 'CheckTimeout',
            'errorMessage' => 'Check timed out.',
          ),
          2 => 
          array (
            'errorCode' => 'InconsistentSignature',
            'errorMessage' => 'The signatures are inconsistent.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidInstanceType',
            'errorMessage' => 'The instance type is invalid.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidParameter.TagKey',
            'errorMessage' => 'The specified Tag.n.Key is invalid.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidParameter.TagValue',
            'errorMessage' => 'The specified Tag.n.Value is invalid.',
          ),
          6 => 
          array (
            'errorCode' => 'InvalidRegionId',
            'errorMessage' => 'The service does not support the region. You can call the DescribeRegions API to view the supported regions.',
          ),
          7 => 
          array (
            'errorCode' => 'NumberExceed.Tags',
            'errorMessage' => 'The maximum number of Tags is exceeded. The maximum is 20.',
          ),
        ),
        401 => 
        array (
          0 => 
          array (
            'errorCode' => 'CallRamApiFailed',
            'errorMessage' => 'Failed to call the Alibaba Cloud RAM service.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'CreateOrderFailed',
            'errorMessage' => 'Create order failed: %s.',
          ),
          1 => 
          array (
            'errorCode' => 'InDebt',
            'errorMessage' => 'The current user has an overdue payment. Please top up first.',
          ),
          2 => 
          array (
            'errorCode' => 'NoPermission',
            'errorMessage' => 'You are not authorized to perform this operation. %s',
          ),
          3 => 
          array (
            'errorCode' => 'NoResources',
            'errorMessage' => 'The current regional resources are insufficient.',
          ),
          4 => 
          array (
            'errorCode' => 'OperationDenied.KeyValueNotNull',
            'errorMessage' => 'The key value cannot be null.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"A655AB0E-31BB-45AD-9255-FCE93F65****\\",\\n  \\"ElasticAcceleratedInstanceId\\": \\"eais-hz8t15a7gt7z7j7i****\\"\\n}","type":"json"}]',
      'title' => '创建Jupyter EAIS实例',
    ),
    'AttachEai' => 
    array (
      'summary' => '创建弹性加速计算实例EAIS实例后，您需要调用API AttachEai将该EAIS实例绑定到客户端实例（ECS实例或ECI实例）上，才能为客户端实例提供GPU资源。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例所属的地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-shenzhen',
          ),
        ),
        1 => 
        array (
          'name' => 'ElasticAcceleratedInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'EAIS实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'eais-sz8t15a7gt7z7j7i****',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待绑定的ECS或ECI实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'i-wz93g6pyat2g7t7o****',
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'C3BCB7DA-BEB6-4982-A765-6EA61EC8****',
              ),
              'ElasticAcceleratedInstanceId' => 
              array (
                'description' => 'EAIS实例ID。',
                'type' => 'string',
                'example' => 'eais-sz8t15a7gt7z7j7i****',
              ),
              'ClientInstanceId' => 
              array (
                'description' => 'ECS或ECI实例ID。',
                'type' => 'string',
                'example' => 'i-wz93g6pyat2g7t7o****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C3BCB7DA-BEB6-4982-A765-6EA61EC8****\\",\\n  \\"ElasticAcceleratedInstanceId\\": \\"eais-sz8t15a7gt7z7j7i****\\",\\n  \\"ClientInstanceId\\": \\"i-wz93g6pyat2g7t7o****\\"\\n}","errorExample":""},{"type":"xml","example":"<AttachEaiResponse>\\n    <RequestId>C3BCB7DA-BEB6-4982-A765-6EA61EC8****</RequestId>\\n    <ElasticAcceleratedInstanceId>eais-sz8t15a7gt7z7j7i****</ElasticAcceleratedInstanceId>\\n    <ClientInstanceId>i-wz93g6pyat2g7t7o****</ClientInstanceId>\\n</AttachEaiResponse>","errorExample":""}]',
      'title' => '绑定EAIS实例',
    ),
    'DetachEai' => 
    array (
      'summary' => '为满足您业务的灵活性，您可以根据业务需要，调用API DetachEai从客户端实例（即ECS实例或ECI实例）上解绑目标弹性加速计算实例EAIS。解绑ECS实例后，您的客户端实例将失去EAIS实例提供的加速效果。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例所属的地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-shenzhen',
          ),
        ),
        1 => 
        array (
          'name' => 'ElasticAcceleratedInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'EAIS实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'eais-sz8t15a7gt7z7j7i****',
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '04DEB304-2436-4CB9-BB63-468BCEA0****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"04DEB304-2436-4CB9-BB63-468BCEA0****\\"\\n}","errorExample":""},{"type":"xml","example":"<DetachEaiResponse>\\n    <RequestId>04DEB304-2436-4CB9-BB63-468BCEA0****</RequestId>\\n</DetachEaiResponse>","errorExample":""}]',
      'title' => '解绑EAIS实例',
    ),
    'DeleteEai' => 
    array (
      'summary' => '如果您不再需要使用弹性加速计算实例EAIS，您可以调用API DeleteEai释放该EAIS实例。',
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
            'description' => '实例所属的地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-shenzhen',
          ),
        ),
        1 => 
        array (
          'name' => 'ElasticAcceleratedInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'EAIS实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'eais-sz8t15a7gt7z7j7i****',
          ),
        ),
        2 => 
        array (
          'name' => 'Force',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例状态不符合删除条件时，是否强制删除。取值范围：

- true：强制删除。
- false：不强制删除。

默认值：false。

实例状态与本参数说明如下：

- 当实例状态为**可绑定**或**已绑定**时，无需设置本参数，实例会正常释放。
- 当实例状态为**创建中**、**绑定中**或**解绑中**时，可以设置本参数值为`true`来强制释放实例。',
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'F23AEEC7-4D98-4657-A104-02692701****',
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
            'errorCode' => 'InvalidEaiStatus',
            'errorMessage' => 'The current state of the EAIS instance does not support the operation.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoPermission',
            'errorMessage' => 'You are not authorized to perform this operation. %s',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidParameter.InstanceId.NotFound',
            'errorMessage' => 'The specified InstanceId does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"F23AEEC7-4D98-4657-A104-02692701****\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteEaiResponse>\\n    <RequestId>F23AEEC7-4D98-4657-A104-02692701****</RequestId>\\n</DeleteEaiResponse>","errorExample":""}]',
      'title' => '释放EAIS实例',
    ),
    'DeleteEaiAll' => 
    array (
      'summary' => '释放一个弹性加速计算实例和与其绑定的客户端实例（即ECS实例或ECI实例）。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例所属的地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-shenzhen',
          ),
        ),
        1 => 
        array (
          'name' => 'ElasticAcceleratedInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'EAIS实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'eais-hza1ahi0uuw0re33****',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '与EAIS实例绑定的ECS或ECI实例ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'i-bp1fvhi60e1zizsp****',
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'AD4EA714-A35B-4710-BF92-8275BCDD****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"AD4EA714-A35B-4710-BF92-8275BCDD****\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteEaiAllResponse>\\n    <RequestId>AD4EA714-A35B-4710-BF92-8275BCDD****</RequestId>\\n</DeleteEaiAllResponse>","errorExample":""}]',
      'title' => '释放EAIS实例及绑定的客户端实例',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetInstanceMetrics' => 
    array (
      'summary' => '查询EAIS Jupyter实例的监控数据，包括GPU使用率、GPU Memory使用率、CPU使用率、Memory使用率。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例所属的地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-beijing',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'EAIS实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'eais-hznzre6ffmz9num4****',
          ),
        ),
        2 => 
        array (
          'name' => 'MetricType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指标类型。取值范围：

- GpuCoreUsage：GPU使用率

- GpuMemoryUsage：GPU Memory使用率

- CpuCoreUsage：CPU使用率

- MemoryUsage：Memory使用率',
            'type' => 'string',
            'required' => true,
            'example' => 'MemoryUsage',
          ),
        ),
        3 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开始时间，默认取值为当前时间减1小时。支持时间戳和时间字符串，时间字符串格式为：yyyy-MM-ddTHH:mm:SSZ，采用UTC +0时区。',
            'type' => 'string',
            'required' => false,
            'example' => '2022-11-22T16:00:00Z',
          ),
        ),
        4 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '结束时间，默认取值为当前时间。支持时间戳和时间字符串，时间字符串格式为：yyyy-MM-ddTHH:mm:SSZ，采用UTC +0时区。',
            'type' => 'string',
            'required' => false,
            'example' => '2022-11-22T16:30:00Z',
          ),
        ),
        5 => 
        array (
          'name' => 'TimeStep',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '时间步长，默认值：5m。支持的时长单位的取值范围：

- h：小时。

- m：分钟。

- s：秒。

当值不带单位时，默认使用单位：s（秒）。',
            'type' => 'string',
            'required' => false,
            'example' => '5m',
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
                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3****',
              ),
              'InstanceId' => 
              array (
                'description' => 'EAIS实例ID。',
                'type' => 'string',
                'example' => 'eais-bj8b53it29hfhj******',
              ),
              'PodMetrics' => 
              array (
                'description' => 'Pod指标列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => 'Pod指标。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'PodId' => 
                    array (
                      'description' => 'Pod ID。',
                      'type' => 'string',
                      'example' => 'eais-hznzre6ffmz9num4****-579b587ddf-9txr6',
                    ),
                    'Metrics' => 
                    array (
                      'description' => '指标数据列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '指标数据。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Time' => 
                          array (
                            'description' => '时间戳。单位：毫秒。',
                            'type' => 'string',
                            'example' => '1669107528450',
                          ),
                          'Value' => 
                          array (
                            'description' => '利用率百分比。取值在0~100之间。',
                            'type' => 'string',
                            'example' => '4.536552540058814',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3****\\",\\n  \\"InstanceId\\": \\"eais-bj8b53it29hfhj******\\",\\n  \\"PodMetrics\\": [\\n    {\\n      \\"PodId\\": \\"eais-hznzre6ffmz9num4****-579b587ddf-9txr6\\",\\n      \\"Metrics\\": [\\n        {\\n          \\"Time\\": \\"1669107528450\\",\\n          \\"Value\\": \\"4.536552540058814\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<GetInstanceMetricsResponse>\\n    <RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3****</RequestId>\\n    <InstanceId>eais-bj8b53it29hfhj******</InstanceId>\\n    <PodMetrics>\\n        <PodId>eais-hznzre6ffmz9num4****-579b587ddf-9txr6</PodId>\\n        <Metrics>\\n            <Time>1669107528450</Time>\\n            <Value>4.536552540058814</Value>\\n        </Metrics>\\n    </PodMetrics>\\n</GetInstanceMetricsResponse>","errorExample":""}]',
      'title' => '查询EAIS Jupyter实例监控数据',
    ),
    'ChangeResourceGroup' => 
    array (
      'summary' => '修改弹性加速计算实例所在的资源组。',
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ResourceId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '资源Id',
            'description' => '资源ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'eais-hzs4h26yyt5xkcke****',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceRegionId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '地域Id',
            'description' => '资源所属的地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '目标资源组',
            'description' => '目标资源组ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'rg-acfmvpuy4a5****',
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
                'example' => 'C3BCB7DA-BEB6-4982-A765-6EA61EC8****',
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
            'errorCode' => 'NoPermission.ChangeResourceGroup',
            'errorMessage' => 'You are not authorized to change resourcegroup',
          ),
          1 => 
          array (
            'errorCode' => 'MissingParameter.ResourceRegionId',
            'errorMessage' => 'The ResourceRegionId parameters that are required for processing this request are missing',
          ),
          2 => 
          array (
            'errorCode' => 'MissingParameter.ResourceId',
            'errorMessage' => 'The ResourceId parameters that are required for processing this request are missing',
          ),
          3 => 
          array (
            'errorCode' => 'MissingParameter.ResourceGroupId',
            'errorMessage' => 'The ResourceGroupId parameters that are required for processing this request are missing',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidResourceGroup',
            'errorMessage' => 'The specified ResourceGroupId is invalid',
          ),
          5 => 
          array (
            'errorCode' => 'SystemError',
            'errorMessage' => 'A system error occurred while processing your request',
          ),
          6 => 
          array (
            'errorCode' => 'ResourceNotFound',
            'errorMessage' => ' The specified resource is not found',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C3BCB7DA-BEB6-4982-A765-6EA61EC8****\\"\\n}","errorExample":""},{"type":"xml","example":"<ChangeResourceGroupResponse>\\n    <RequestId>C3BCB7DA-BEB6-4982-A765-6EA61EC8****</RequestId>\\n</ChangeResourceGroupResponse>","errorExample":""}]',
      'title' => '改变资源组',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-beijing',
      'endpoint' => 'eais.cn-beijing.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'eais.cn-hangzhou.aliyuncs.com',
    ),
    2 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'eais.cn-shanghai.aliyuncs.com',
    ),
    3 => 
    array (
      'regionId' => 'cn-shenzhen',
      'endpoint' => 'eais.cn-shenzhen.aliyuncs.com',
    ),
    4 => 
    array (
      'regionId' => 'cn-chengdu',
      'endpoint' => 'eais.cn-chengdu.aliyuncs.com',
    ),
  ),
);
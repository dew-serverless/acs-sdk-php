<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'Eipanycast',
    'version' => '2020-03-09',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 62809,
      'title' => '任播弹性公网IP',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'AllocateAnycastEipAddress',
        1 => 'AssociateAnycastEipAddress',
        2 => 'UnassociateAnycastEipAddress',
        3 => 'ReleaseAnycastEipAddress',
        4 => 'ModifyAnycastEipAddressSpec',
        5 => 'ModifyAnycastEipAddressAttribute',
        6 => 'UpdateAnycastEipAddressAssociations',
        7 => 'DescribeAnycastEipAddress',
        8 => 'DescribeAnycastPopLocations',
        9 => 'ListAnycastEipAddresses',
        10 => 'DescribeAnycastServerRegions',
      ),
    ),
    1 => 
    array (
      'id' => 183366,
      'title' => '标签',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'TagResources',
        1 => 'ListTagResources',
        2 => 'UntagResources',
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
    'AllocateAnycastEipAddress' => 
    array (
      'summary' => '调用AllocateAnycastEipAddress接口创建Anycast EIP实例。',
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Bandwidth',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Anycast EIP实例的带宽峰值。单位：Mbps。

取值范围：**200**~**1000**。

默认值：**1000**。

>带宽峰值不作为业务承诺指标，仅作为参考值和带宽上限峰值。',
            'type' => 'string',
            'required' => false,
            'example' => '200',
            'default' => '1000',
          ),
        ),
        1 => 
        array (
          'name' => 'ServiceLocation',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Anycast EIP实例接入区域。

取值：**international**，指中国内地以外的区域。',
            'type' => 'string',
            'required' => true,
            'example' => 'international',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceChargeType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Anycast EIP实例付费类型。

取值：**PostPaid**，指后付费。',
            'type' => 'string',
            'required' => false,
            'example' => 'PostPaid',
          ),
        ),
        3 => 
        array (
          'name' => 'InternetChargeType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Anycast EIP实例访问公网计费方式。

取值：**PayByTraffic**，指按流量计费。',
            'type' => 'string',
            'required' => false,
            'example' => 'PayByTraffic',
          ),
        ),
        4 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端Token，用于保证请求的幂等性。

由客户端生成该参数值，要保证在不同请求间唯一，最大值不超过64个ASCII字符。
> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '02fb3da4-130e-11e9-8e44-001****',
          ),
        ),
        5 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Anycast EIP实例名称。

长度为0~128个字符，以大小字母或中文开头，可包含数字，下划线（_）或短划线（-）。',
            'type' => 'string',
            'required' => false,
            'example' => 'doctest',
          ),
        ),
        6 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Anycast EIP实例描述。

长度为0~256个字符，不能以`http://`或`https://`开头。',
            'type' => 'string',
            'required' => false,
            'example' => 'docdesc',
          ),
        ),
        7 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例所属的资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-acfm3obzjuk****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回信息列表。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'FBDB18D8-E91E-4978-8D6C-6E2E3EE10133',
              ),
              'AnycastId' => 
              array (
                'description' => 'Anycast EIP实例ID。',
                'type' => 'string',
                'example' => 'aeip-bp1ix34fralt4ykf3****',
              ),
              'OrderId' => 
              array (
                'description' => '订单ID。',
                'type' => 'string',
                'example' => '1422000****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FBDB18D8-E91E-4978-8D6C-6E2E3EE10133\\",\\n  \\"AnycastId\\": \\"aeip-bp1ix34fralt4ykf3****\\",\\n  \\"OrderId\\": \\"1422000****\\"\\n}","errorExample":""},{"type":"xml","example":"<AllocateAnycastEipAddressResponse>\\n    <RequestId>FBDB18D8-E91E-4978-8D6C-6E2E3EE10133</RequestId>\\n    <AnycastId>aeip-bp1ix34fralt4ykf3****</AnycastId>\\n    <OrderId>1422000****</OrderId>\\n</AllocateAnycastEipAddressResponse>","errorExample":""}]',
      'title' => '创建实例',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'AssociateAnycastEipAddress' => 
    array (
      'summary' => '调用AssociateAnycastEipAddress接口将Anycast EIP绑定到指定的后端云资源实例上。',
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'BindInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要绑定的云资源实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'lb-d7oxbixhxv1uupnon****',
          ),
        ),
        1 => 
        array (
          'name' => 'BindInstanceRegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要绑定的云资源实例地域ID。

仅支持绑定部分地域的云资源实例，您可以通过调用[DescribeAnycastServerRegions](~~171939~~)接口获取可绑定云资源实例的地域ID。 ',
            'type' => 'string',
            'required' => true,
            'example' => 'us-west-1',
          ),
        ),
        2 => 
        array (
          'name' => 'BindInstanceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要绑定的云资源实例类型。取值：
- **SlbInstance**：专有网络类型的CLB实例。
- **NetworkInterface**：弹性网卡。',
            'type' => 'string',
            'required' => true,
            'example' => 'SlbInstance',
          ),
        ),
        3 => 
        array (
          'name' => 'AnycastId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Anycast EIP实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'aeip-bp1ix34fralt4ykf3****',
          ),
        ),
        4 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端Token，用于保证请求的幂等性。

由客户端生成该参数值，要保证在不同请求间唯一，最大值不超过64个ASCII字符。

> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
          ),
        ),
        5 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会绑定实例。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        6 => 
        array (
          'name' => 'PopLocations',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => '绑定时关联的pop location，如果是绑定的第一个实例，该参数会忽略，会下发到全部pop点',
            'description' => '绑定云资源实例时，关联的接入区域的接入点信息。

如果您是第一次绑定，该参数无需配置，系统自动关联所有接入区域。

您可以通过调用[DescribeAnycastPopLocations](~~171938~~)接口获取支持的接入区域的接入点信息。
',
            'type' => 'array',
            'items' => 
            array (
              'description' => '绑定云资源实例时，关联的接入区域的接入点信息。

如果您是第一次绑定，该参数无需配置，系统自动关联所有接入区域。

您可以通过调用[DescribeAnycastPopLocations](~~171938~~)接口获取支持的接入区域的接入点信息。
',
              'type' => 'object',
              'properties' => 
              array (
                'PopLocation' => 
                array (
                  'title' => 'pop location',
                  'description' => '绑定云资源实例时，关联的接入区域的接入点信息。

如果您是第一次绑定，该参数无需配置，系统自动关联所有接入区域。

您可以通过调用[DescribeAnycastPopLocations](~~171938~~)接口获取支持的接入区域的接入点信息。
',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'us-west-1-pop',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
          ),
        ),
        7 => 
        array (
          'name' => 'AssociationMode',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '关联模式，默认模式、普通模式Default/Normal',
            'description' => '绑定模式，取值：

- **Default**：默认模式，将要绑定的云资源实例设置为默认源站。

- **Normal**：普通模式，要绑定的云资源实例设置为普通源站。

>  Anycast EIP支持绑定多个地域的云资源实例，仅支持一个云资源实例为默认源站，其余均为普通源站。当不指定接入点或新增接入点时，访问请求默认转发至默认源站。<br/><ul><li>如果您是第一次绑定，绑定模式默认取值为**Default**。</li><li>如果您不是第一次绑定，您可以将绑定模式设置为**Default**，将生效新的默认源站，原默认源站将变更为普通源站。</li></ul>

',
            'type' => 'string',
            'required' => false,
            'example' => 'Default',
          ),
        ),
        8 => 
        array (
          'name' => 'PrivateIpAddress',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '私网ip地址',
            'description' => '要绑定的弹性网卡的辅助私网IP。

只有当**BindInstanceType**取值为**NetworkInterface**时，该参数生效。不输入时，该参数默认为弹性网卡的主私网IP。',
            'type' => 'string',
            'required' => false,
            'example' => '192.168.XX.XX',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回信息列表。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'FBDB18D8-E91E-4978-8D6C-6E2E3EE10133',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'asynchronous',
        'callback' => 'Eipanycast::2020-03-09::ListAnycastEipAddresses',
        'callbackInterval' => 3000,
        'maxCallbackTimes' => 10,
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FBDB18D8-E91E-4978-8D6C-6E2E3EE10133\\"\\n}","errorExample":""},{"type":"xml","example":"<AssociateAnycastEipAddressResponse>\\r\\n<RequestId>FBDB18D8-E91E-4978-8D6C-6E2E3EE10133</RequestId>\\r\\n</AssociateAnycastEipAddressResponse>","errorExample":""}]',
      'title' => '绑定后端云资源实例',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UnassociateAnycastEipAddress' => 
    array (
      'summary' => '调用UnassociateAnycastEipAddress接口来解除Anycast EIP与其绑定的后端云资源实例的关联。',
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'BindInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要解绑的云资源实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'lb-2zebb08phyczzawe****',
          ),
        ),
        1 => 
        array (
          'name' => 'BindInstanceRegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要解绑的云资源实例地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'us-west-1',
          ),
        ),
        2 => 
        array (
          'name' => 'BindInstanceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要解绑的云资源实例类型。取值：

- **SlbInstance**：专有网络类型的CLB实例。
- **NetworkInterface**：弹性网卡。',
            'type' => 'string',
            'required' => true,
            'example' => 'SlbInstance',
          ),
        ),
        3 => 
        array (
          'name' => 'AnycastId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Anycast EIP实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'aeip-2zeerraiwb7ujsxdc****',
          ),
        ),
        4 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端Token，用于保证请求的幂等性。

由客户端生成该参数值，要保证在不同请求间唯一，最大值不超过64个ASCII字符。

> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '02fb3da4-130e-11e9-8e44-001****',
          ),
        ),
        5 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会解绑后端实例。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
            'type' => 'string',
            'required' => false,
            'example' => 'false',
          ),
        ),
        6 => 
        array (
          'name' => 'PrivateIpAddress',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要解绑的弹性网卡的辅助私网IP。


只有当**BindInstanceType**取值为**NetworkInterface**时，该参数生效。不输入时，该参数默认为弹性网卡的主私网IP。',
            'type' => 'string',
            'required' => false,
            'example' => '192.168.XX.XX',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回信息列表。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '私网IP地址',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'FBDB18D8-E91E-4978-8D6C-6E2E3EE10133',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'asynchronous',
        'callback' => 'Eipanycast::2020-03-09::ListAnycastEipAddresses',
        'callbackInterval' => 3000,
        'maxCallbackTimes' => 10,
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FBDB18D8-E91E-4978-8D6C-6E2E3EE10133\\"\\n}","errorExample":""},{"type":"xml","example":"<UnassociateAnycastEipAddressResponse>\\n    <RequestId>FBDB18D8-E91E-4978-8D6C-6E2E3EE10133</RequestId>\\n</UnassociateAnycastEipAddressResponse>","errorExample":""}]',
      'title' => '解绑后端云资源实例',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ReleaseAnycastEipAddress' => 
    array (
      'summary' => '调用ReleaseAnycastEipAddress接口释放指定Anycast EIP实例。',
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AnycastId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要释放的Anycast EIP实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'aeip-bp1ix34fralt4ykf3****',
          ),
        ),
        1 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端Token，用于保证请求的幂等性。由客户端生成该参数值，要保证在不同请求间唯一，最大值不超过64个ASCII字符。
> 若您未指定，则系统自动使用API请求的RequestId作为ClientToken标识。每次API请求的RequestId不一样。
>',
            'type' => 'string',
            'required' => false,
            'example' => '02fb3da4-130e-11e9-8e44-001****',
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
                'example' => 'FBDB18D8-E91E-4978-8D6C-6E2E3EE10133',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        503 => 
        array (
          0 => 
          array (
            'errorCode' => 'SystemBusy',
            'errorMessage' => 'The system is busy. Please try again later.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'asynchronous',
        'callback' => 'Eipanycast::2020-03-09::ListAnycastEipAddresses',
        'callbackInterval' => 3000,
        'maxCallbackTimes' => 10,
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"FBDB18D8-E91E-4978-8D6C-6E2E3EE10133\\"\\n}","type":"json"}]',
      'title' => '释放实例',
    ),
    'ModifyAnycastEipAddressSpec' => 
    array (
      'summary' => '调用ModifyAnycastEipAddressSpec接口修改Anycast EIP实例带宽值。',
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
        'operationType' => 'update',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Bandwidth',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Anycast EIP实例的带宽峰值。单位：Mbps。

取值范围：**200**~**1000**。',
            'type' => 'string',
            'required' => true,
            'example' => '200',
          ),
        ),
        1 => 
        array (
          'name' => 'AnycastId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Anycast EIP实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'aeip-bp1ix34fralt4ykf3****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回信息列表。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'FBDB18D8-E91E-4978-8D6C-6E2E3EE10133',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'asynchronous',
        'callback' => 'Eipanycast::2020-03-09::ListAnycastEipAddresses',
        'callbackInterval' => 3000,
        'maxCallbackTimes' => 10,
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FBDB18D8-E91E-4978-8D6C-6E2E3EE10133\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyAnycastEipAddressSpecResponse>\\n    <RequestId>FBDB18D8-E91E-4978-8D6C-6E2E3EE10133</RequestId>\\n</ModifyAnycastEipAddressSpecResponse>","errorExample":""}]',
      'title' => '修改实例带宽值',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyAnycastEipAddressAttribute' => 
    array (
      'summary' => '调用ModifyAnycastEipAddressAttribute接口修改Anycast EIP实例的名称和描述。',
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
        'operationType' => 'update',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AnycastId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Anycast EIP实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'aeip-bp1ix34fralt4ykf3****',
          ),
        ),
        1 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Anycast EIP实例名称。

长度为0~128个字符，以大小字母或中文开头，可包含数字，下划线（_）或短划线（-）。',
            'type' => 'string',
            'required' => false,
            'example' => 'docname',
          ),
        ),
        2 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Anycast EIP实例描述。

长度为0~256个字符，不能以`http://`或`https://`开头。',
            'type' => 'string',
            'required' => false,
            'example' => 'docdesc',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回参数列表。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'FBDB18D8-E91E-4978-8D6C-6E2E3EE10133',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FBDB18D8-E91E-4978-8D6C-6E2E3EE10133\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyAnycastEipAddressAttributeResponse>\\n    <RequestId>FBDB18D8-E91E-4978-8D6C-6E2E3EE10133</RequestId>\\n</ModifyAnycastEipAddressAttributeResponse>","errorExample":""}]',
      'title' => '修改实例属性',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UpdateAnycastEipAddressAssociations' => 
    array (
      'summary' => '当Anycast EIP实例绑定了多个地域源站的后端资源时，支持修改接入点与源站的映射关系。您可以通过调用UpdateAnycastEipAddressAssociations接口增加或删除指定源站（绑定的云资源实例）的接入点来修改接入点与源站的映射关系。',
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
        'operationType' => 'update',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'BindInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要绑定的云资源实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'lb-d7oxbixhxv1uupnon****',
          ),
        ),
        1 => 
        array (
          'name' => 'AnycastId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Anycast EIP实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'aeip-bp1ix34fralt4ykf3****',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端Token，用于保证请求的幂等性。

由客户端生成该参数值，要保证在不同请求间唯一，最大值不超过64个ASCII字符。

> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**可能不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '02fb3da4-130e-11e9-8e44-001****',
          ),
        ),
        3 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会更新绑定关系。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        4 => 
        array (
          'name' => 'PopLocationAddList',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => '新增关联的pop location',
            'description' => '需要新增的关联接入区域和接入点列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '需要新增的关联接入区域和接入点列表。',
              'type' => 'object',
              'properties' => 
              array (
                'PopLocation' => 
                array (
                  'title' => 'pop location',
                  'description' => '需要新增的关联接入区域的接入点。

您可以通过调用[DescribeAnycastPopLocations](~~171938~~)接口获取支持的接入区域的接入点信息。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'us-west-1-pop',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
          ),
        ),
        5 => 
        array (
          'name' => 'PopLocationDeleteList',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => '待删除的关联pop location',
            'description' => '待删除的关联接入区域和接入点列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '待删除的关联接入区域的接入点列表。

> 当该接入区域的接入点关联的云资源实例为默认源站时，无法删除该接入区域的接入点。',
              'type' => 'object',
              'properties' => 
              array (
                'PopLocation' => 
                array (
                  'title' => 'pop location',
                  'description' => '待删除的关联接入区域的接入点列表。

> 当该接入区域的接入点关联的云资源实例为默认源站时，无法删除该接入区域的接入点。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'eu-west-1-pop',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
          ),
        ),
        6 => 
        array (
          'name' => 'AssociationMode',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '关联模式，默认模式、普通模式Default/Normal',
            'description' => '绑定模式，取值：

- **Default**：默认模式，将要绑定的云资源实例设置为默认源站。

- **Normal**：普通模式，要绑定的云资源实例设置为普通源站。',
            'type' => 'string',
            'required' => false,
            'example' => 'Default',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回信息列表。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '4EC47282-1B74-4534-BD0E-403F3EE64CAF',
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
            'errorCode' => 'OperationFailed.SetNormalAssociationMode',
            'errorMessage' => 'The only associated instance must be default mode. ',
          ),
          1 => 
          array (
            'errorCode' => 'OperationFailed.DeletedPopLocation',
            'errorMessage' => 'The operation is failed because of  added Pop Location is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'OperationFailed.AddPopLocation',
            'errorMessage' => 'The operation is failed because of added Pop Location is invalid.',
          ),
          3 => 
          array (
            'errorCode' => 'ResourceNotFound.BindInstanceId',
            'errorMessage' => 'The specified resource BindInstanceId is not found.',
          ),
          4 => 
          array (
            'errorCode' => 'ResourceNotFound.AnycastId',
            'errorMessage' => 'The specified resource AnycastId is not found.',
          ),
          5 => 
          array (
            'errorCode' => 'IncorrectStatus.Anycast',
            'errorMessage' => 'The status of the Anycast instance is invalid.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'asynchronous',
        'callback' => 'Eipanycast::2020-03-09::ListAnycastEipAddresses',
        'callbackInterval' => 3000,
        'maxCallbackTimes' => 10,
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4EC47282-1B74-4534-BD0E-403F3EE64CAF\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateAnycastEipAddressAssociationsResponse>\\n    <RequestId>4EC47282-1B74-4534-BD0E-403F3EE64CAF</RequestId>\\n</UpdateAnycastEipAddressAssociationsResponse>","errorExample":""}]',
      'title' => '更新实例绑定信息',
    ),
    'DescribeAnycastEipAddress' => 
    array (
      'summary' => '调用DescribeAnycastEipAddress接口查询指定Anycast EIP实例的具体信息，包括实例状态、带宽峰值和已绑定资源的信息等。',
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Ip',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Anycast EIP实例IP地址。

> 您必须输入参数**Ip**和参数**AnycastId**中的任意一个。',
            'type' => 'string',
            'required' => false,
            'example' => '139.95.XX.XX',
          ),
        ),
        1 => 
        array (
          'name' => 'AnycastId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Anycast EIP实例ID。

> 您必须输入参数**Ip**和参数**AnycastId**中的任意一个。',
            'type' => 'string',
            'required' => false,
            'example' => 'aeip-bp1ix34fralt4ykf3****',
          ),
        ),
        2 => 
        array (
          'name' => 'BindInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Anycast EIP绑定的云资源实例ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'lb-2zebb08phyczzawe****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回信息列表。',
            'type' => 'object',
            'properties' => 
            array (
              'Status' => 
              array (
                'description' => 'IP状态。

- **Associating**：绑定中。
- **Unassociating**：解绑中。
- **Allocated**：已分配。
- **Associated**：已绑定。
- **Modifying**：修改中。
- **Releasing**：释放中。
- **Released**：已释放。',
                'type' => 'string',
                'example' => 'Associated',
              ),
              'Description' => 
              array (
                'description' => 'Anycast EIP实例描述。',
                'type' => 'string',
                'example' => 'doctest',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '4EC47282-1B74-4534-BD0E-403F3EE64CAF',
              ),
              'InstanceChargeType' => 
              array (
                'description' => 'Anycast EIP实例的付费模式。

取值：**PostPaid**，表示后付费模式。',
                'type' => 'string',
                'example' => 'PostPaid',
              ),
              'CreateTime' => 
              array (
                'description' => 'Anycast EIP实例创建时间。

时间按照ISO8601标准表示，并使用UTC时间。格式为：`YYYY-MM-DDThh:mm:ssZ`。',
                'type' => 'string',
                'example' => '2021-04-23T01:37:38Z',
              ),
              'AnycastEipBindInfoList' => 
              array (
                'description' => 'Anycast EIP实例绑定云资源信息列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => 'Anycast EIP实例绑定云资源信息列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'BindInstanceType' => 
                    array (
                      'description' => '绑定的云资源实例类型。取值：

- **SlbInstance**：专有网络类型的CLB实例。
- **NetworkInterface**：弹性网卡。',
                      'type' => 'string',
                      'example' => 'SlbInstance',
                    ),
                    'BindTime' => 
                    array (
                      'description' => '绑定时间。

时间按照ISO8601标准表示，并使用UTC时间。格式为：`YYYY-MM-DDThh:mm:ssZ`。',
                      'type' => 'string',
                      'example' => '2021-04-23T02:37:38Z',
                    ),
                    'Status' => 
                    array (
                      'description' => '绑定的云资源实例的状态。取值：
- **BINDING**：绑定中。
- **BINDED**：已绑定。
- **UNBINDING**：解绑中。
- **DELETED**：已删除。
- **MODIFYING**：修改中。

',
                      'type' => 'string',
                      'example' => 'BINDING',
                    ),
                    'BindInstanceRegionId' => 
                    array (
                      'description' => '绑定的云资源实例的地域ID。',
                      'type' => 'string',
                      'example' => 'us-west-1',
                    ),
                    'BindInstanceId' => 
                    array (
                      'description' => '绑定的云资源实例ID。',
                      'type' => 'string',
                      'example' => 'lb-2zebb08phyczzawe****',
                    ),
                    'PopLocations' => 
                    array (
                      'title' => '关联的pop点',
                      'description' => '绑定云资源实例时，关联的接入区域的接入点信息。

如果您是第一次绑定，系统将返回所有接入区域的接入点信息。
',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '绑定云资源实例时，关联的接入区域的接入点信息。

如果您是第一次绑定，系统将返回所有接入区域的接入点信息。
',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'PopLocation' => 
                          array (
                            'title' => 'PopLocation',
                            'description' => '绑定云资源实例时，关联的接入区域的接入点信息。

如果您是第一次绑定，系统将返回所有接入区域的接入点信息。
',
                            'type' => 'string',
                            'example' => 'us-west-1-pop',
                          ),
                        ),
                      ),
                    ),
                    'AssociationMode' => 
                    array (
                      'title' => '绑定模式 Normal、Default',
                      'description' => '绑定模式，取值：

- **Default**：默认模式，绑定的云资源实例为默认源站。

- **Normal**：普通模式，绑定的云资源实例为普通源站。',
                      'type' => 'string',
                      'example' => 'Default',
                    ),
                    'PrivateIpAddress' => 
                    array (
                      'title' => 'ip地址',
                      'description' => '绑定的弹性网卡的辅助私网IP。

只有当**BindInstanceType**取值为**NetworkInterface**时，返回该参数。',
                      'type' => 'string',
                      'example' => '192.168.XX.XX',
                    ),
                  ),
                ),
              ),
              'BusinessStatus' => 
              array (
                'description' => 'Anycast EIP实例的业务状态。取值：

- **Normal**：正常状态。
- **FinancialLocked**：欠费锁定状态。',
                'type' => 'string',
                'example' => 'Normal',
              ),
              'InternetChargeType' => 
              array (
                'description' => 'Anycast EIP实例的计费方式。

取值：**PayByTraffic**，表示按流量计费方式。',
                'type' => 'string',
                'example' => 'PayByTraffic',
              ),
              'Name' => 
              array (
                'description' => 'Anycast EIP实例名称。',
                'type' => 'string',
                'example' => 'docname',
              ),
              'AnycastId' => 
              array (
                'description' => 'Anycast EIP实例ID。',
                'type' => 'string',
                'example' => 'aeip-bp1ix34fralt4ykf3****',
              ),
              'ServiceLocation' => 
              array (
                'description' => 'Anycast EIP实例接入区域。

取值：**international**，表示中国内地以外的区域。',
                'type' => 'string',
                'example' => 'international',
              ),
              'Bandwidth' => 
              array (
                'description' => 'Anycast EIP实例的带宽峰值，单位：Mbps。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'IpAddress' => 
              array (
                'description' => 'Anycast EIP实例IP地址。',
                'type' => 'string',
                'example' => '139.95.XX.XX',
              ),
              'Bid' => 
              array (
                'description' => 'Anycast EIP实例账号BID。',
                'type' => 'string',
                'example' => '26842',
              ),
              'AliUid' => 
              array (
                'description' => 'Anycast EIP实例账号ID。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '25346073170691****',
              ),
              'ResourceGroupId' => 
              array (
                'description' => '实例所属的资源组ID。',
                'type' => 'string',
                'example' => 'rg-acfmzssisocarfy',
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
                      'example' => 'FinanceDept',
                    ),
                    'Value' => 
                    array (
                      'description' => '标签值。',
                      'type' => 'string',
                      'example' => 'FinanceJoshua',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Status\\": \\"Associated\\",\\n  \\"Description\\": \\"doctest\\",\\n  \\"RequestId\\": \\"4EC47282-1B74-4534-BD0E-403F3EE64CAF\\",\\n  \\"InstanceChargeType\\": \\"PostPaid\\",\\n  \\"CreateTime\\": \\"2021-04-23T01:37:38Z\\",\\n  \\"AnycastEipBindInfoList\\": [\\n    {\\n      \\"BindInstanceType\\": \\"SlbInstance\\",\\n      \\"BindTime\\": \\"2021-04-23T02:37:38Z\\",\\n      \\"Status\\": \\"BINDING\\",\\n      \\"BindInstanceRegionId\\": \\"us-west-1\\",\\n      \\"BindInstanceId\\": \\"lb-2zebb08phyczzawe****\\",\\n      \\"PopLocations\\": [\\n        {\\n          \\"PopLocation\\": \\"us-west-1-pop\\"\\n        }\\n      ],\\n      \\"AssociationMode\\": \\"Default\\",\\n      \\"PrivateIpAddress\\": \\"192.168.XX.XX\\"\\n    }\\n  ],\\n  \\"BusinessStatus\\": \\"Normal\\",\\n  \\"InternetChargeType\\": \\"PayByTraffic\\",\\n  \\"Name\\": \\"docname\\",\\n  \\"AnycastId\\": \\"aeip-bp1ix34fralt4ykf3****\\",\\n  \\"ServiceLocation\\": \\"international\\",\\n  \\"Bandwidth\\": 200,\\n  \\"IpAddress\\": \\"139.95.XX.XX\\",\\n  \\"Bid\\": \\"26842\\",\\n  \\"AliUid\\": 0,\\n  \\"ResourceGroupId\\": \\"rg-acfmzssisocarfy\\",\\n  \\"Tags\\": [\\n    {\\n      \\"Key\\": \\"FinanceDept\\",\\n      \\"Value\\": \\"FinanceJoshua\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeAnycastEipAddressResponse>\\n    <Status>Associated</Status>\\n    <Description>doctest</Description>\\n    <RequestId>4EC47282-1B74-4534-BD0E-403F3EE64CAF</RequestId>\\n    <InstanceChargeType>PostPaid</InstanceChargeType>\\n    <CreateTime>2021-04-23T01:37:38Z</CreateTime>\\n    <AnycastEipBindInfoList>\\n        <BindInstanceType>SlbInstance</BindInstanceType>\\n        <BindTime>2021-04-23T02:37:38Z</BindTime>\\n        <Status>BINDING</Status>\\n        <BindInstanceRegionId>us-west-1</BindInstanceRegionId>\\n        <BindInstanceId>lb-2zebb08phyczzawe****</BindInstanceId>\\n        <PopLocations>\\n            <PopLocation>us-west-1-pop</PopLocation>\\n        </PopLocations>\\n        <AssociationMode>Default</AssociationMode>\\n        <PrivateIpAddress>192.168.XX.XX</PrivateIpAddress>\\n    </AnycastEipBindInfoList>\\n    <BusinessStatus>Normal</BusinessStatus>\\n    <InternetChargeType>PayByTraffic</InternetChargeType>\\n    <Name>docname</Name>\\n    <AnycastId>aeip-bp1ix34fralt4ykf3****</AnycastId>\\n    <ServiceLocation>international</ServiceLocation>\\n    <Bandwidth>200</Bandwidth>\\n    <IpAddress>139.95.XX.XX</IpAddress>\\n    <Bid>26842</Bid>\\n    <Tags>\\n        <Key>FinanceDept</Key>\\n        <Value>FinanceJoshua</Value>\\n    </Tags>\\n</DescribeAnycastEipAddressResponse>","errorExample":""}]',
      'title' => '查看实例信息',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeAnycastPopLocations' => 
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
          'name' => 'ServiceLocation',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Anycast EIP实例的接入区域。

取值：**international**，指中国内地以外的区域。',
            'type' => 'string',
            'required' => false,
            'example' => 'international',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回参数列表。',
            'type' => 'object',
            'properties' => 
            array (
              'AnycastPopLocationList' => 
              array (
                'description' => '接入区域的接入点信息列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '接入区域的接入点信息列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'RegionName' => 
                    array (
                      'description' => '接入点地域名称。',
                      'type' => 'string',
                      'example' => 'us-west-1-pop',
                    ),
                    'RegionId' => 
                    array (
                      'description' => '接入点地域ID。',
                      'type' => 'string',
                      'example' => 'us-west-1-pop',
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '4EC47282-1B74-4534-BD0E-403F3EE64CAF',
              ),
              'Count' => 
              array (
                'description' => '接入点列表条目数。',
                'type' => 'string',
                'example' => '1',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"AnycastPopLocationList\\": [\\n    {\\n      \\"RegionName\\": \\"us-west-1-pop\\",\\n      \\"RegionId\\": \\"us-west-1-pop\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"4EC47282-1B74-4534-BD0E-403F3EE64CAF\\",\\n  \\"Count\\": \\"1\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeAnycastPopLocationsResponse>\\n    <AnycastPopLocationList>\\n        <RegionName>us-west-1-pop</RegionName>\\n        <RegionId>us-west-1-pop</RegionId>\\n    </AnycastPopLocationList>\\n    <RequestId>4EC47282-1B74-4534-BD0E-403F3EE64CAF</RequestId>\\n    <Count>1</Count>\\n</DescribeAnycastPopLocationsResponse>","errorExample":""}]',
      'title' => '查询接入点信息',
      'summary' => '调用DescribeAnycastPopLocations接口查询指定接入区域的接入点信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListAnycastEipAddresses' => 
    array (
      'summary' => '查询指定接入区域已创建Anycast EIP实例的具体信息，包括实例状态、带宽峰值和已绑定资源的信息等。',
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
        0 => 
        array (
          'name' => 'AnycastId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Anycast EIP实例ID。

> 为保证查询结果准确性，不建议同时配置**AnycastIds**和**AnycastId**。
',
            'type' => 'string',
            'required' => false,
            'example' => 'aeip-2zeerraiwb7ujsxdc****',
          ),
        ),
        1 => 
        array (
          'name' => 'AnycastIds',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => 'Anycast EIP实例ID列表。

最多支持输入50个Anycast EIP实例ID。

> 为保证查询结果准确性，不建议同时配置**AnycastIds**和**AnycastId**。',
            'type' => 'array',
            'items' => 
            array (
              'description' => 'Anycast EIP实例ID列表。

最多支持输入50个Anycast EIP实例ID。
> 为保证查询结果准确性，不建议同时配置**AnycastIds**和**AnycastId**。',
              'type' => 'string',
              'required' => false,
              'example' => 'aeip-2zeerraiwb7ujsxdc****',
            ),
            'required' => false,
            'maxItems' => 50,
          ),
        ),
        2 => 
        array (
          'name' => 'AnycastEipAddress',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Anycast EIP实例被分配的IP地址。',
            'type' => 'string',
            'required' => false,
            'example' => '139.95.XX.XX',
          ),
        ),
        3 => 
        array (
          'name' => 'ServiceLocation',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Anycast EIP实例接入区域。

取值：**international**，指中国内地以外的区域。',
            'type' => 'string',
            'required' => false,
            'example' => 'international',
          ),
        ),
        4 => 
        array (
          'name' => 'InstanceChargeType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Anycast EIP付费模式。

取值：**PostPaid**，后付费模式。',
            'type' => 'string',
            'required' => false,
            'example' => 'PostPaid',
          ),
        ),
        5 => 
        array (
          'name' => 'InternetChargeType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Anycast EIP实例访问公网计费方式。

取值：**PayByTraffic**，指按流量计费。',
            'type' => 'string',
            'required' => false,
            'example' => 'PayByTraffic',
          ),
        ),
        6 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Anycast EIP实例名称。

名称长度为0~128个字符，以大小写字母或中文开头，可包含数字、短划线（-）或下划线（_）。',
            'type' => 'string',
            'required' => false,
            'example' => 'doctest',
          ),
        ),
        7 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例所属的资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-aekzthsmwsnfuni',
          ),
        ),
        8 => 
        array (
          'name' => 'Tags',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
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
                  'description' => '资源的标签键。最多支持20个标签键。一旦传入该值，则不允许为空字符串。

最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。

> 参数**Tag.N**（**Tag.N.Key**与**Tag.N.Value**）至少输入一个。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'FinanceDept',
                ),
                'Value' => 
                array (
                  'description' => '资源的标签值。最多支持20个标签值。一旦传入该值，可以为空字符串。


最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。

> 参数**Tag.N**（**Tag.N.Key**与**Tag.N.Value**）至少输入一个。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'FinanceJoshua',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 10,
          ),
        ),
        9 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '列表分页展示时每页展示的实例个数，取值范围：**20~100**。默认值：**50**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '50',
          ),
        ),
        10 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否拥有下一次查询的令牌（Token）。取值：
- 第一次查询和没有下一次查询时，均无需填写。
- 如果有下一次查询，取值为上一次API调用返回的NextToken值。',
            'type' => 'string',
            'required' => false,
            'example' => 'caeba0bbb2be03f84eb48b699f0a****',
          ),
        ),
        11 => 
        array (
          'name' => 'Status',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IP状态，取值：

- **Associating**：绑定中。
- **Unassociating**：解绑中。
- **Allocated**：已分配。
- **Associated**：已绑定。
- **Modifying**：修改中。
- **Releasing**：释放中。
- **Released**：已释放。',
            'type' => 'string',
            'required' => false,
            'example' => 'Associated',
          ),
        ),
        12 => 
        array (
          'name' => 'BusinessStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Anycast EIP实例的业务状态，取值：

- **Normal**：正常状态。
- **FinancialLocked**：欠费锁定状态。',
            'type' => 'string',
            'required' => false,
            'example' => 'Normal',
          ),
        ),
        13 => 
        array (
          'name' => 'BindInstanceIds',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => 'Anycast EIP绑定的云资源实例ID列表。

最多支持输入100个云资源实例ID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => 'Anycast EIP绑定的云资源实例ID列表。

最多支持输入100个云资源实例ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'lb-2zebb08phyczzawe****',
            ),
            'required' => false,
            'example' => 'lb-2zebb08phyczzawe****',
            'maxItems' => 100,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回信息列表。',
            'type' => 'object',
            'properties' => 
            array (
              'TotalCount' => 
              array (
                'description' => '列表条目数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '100',
              ),
              'NextToken' => 
              array (
                'description' => '是否拥有下一次查询的令牌（Token）。取值：
- 如果**NextToken**为空表示没有下一次查询。
- 如果**NextToken**有返回值，该取值表示下一次查询开始的令牌。',
                'type' => 'string',
                'example' => 'FFmyTO70tTpLG6I3FmYAXGKPd****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '4EC47282-1B74-4534-BD0E-403F3EE64CAF',
              ),
              'AnycastList' => 
              array (
                'description' => 'Anycast EIP信息列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => 'Anycast EIP信息列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Status' => 
                    array (
                      'description' => 'IP状态。

- **Associating**：绑定中。
- **Unassociating**：解绑中。
- **Allocated**：已分配。
- **Associated**：已绑定。
- **Modifying**：修改中。
- **Releasing**：释放中。
- **Released**：已释放。',
                      'type' => 'string',
                      'example' => 'Associating',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => 'Anycast EIP实例创建时间。',
                      'type' => 'string',
                      'example' => '2022-04-22T01:37:38Z',
                    ),
                    'AnycastId' => 
                    array (
                      'description' => 'Anycast EIP实例ID。',
                      'type' => 'string',
                      'example' => 'aeip-2zeerraiwb7ujsxdc****',
                    ),
                    'AliUid' => 
                    array (
                      'description' => 'Anycast EIP实例账号ID。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '123440159596****',
                    ),
                    'ServiceLocation' => 
                    array (
                      'description' => 'Anycast EIP实例接入区域。

**international**：指中国内地以外的区域。',
                      'type' => 'string',
                      'example' => 'international',
                    ),
                    'InstanceChargeType' => 
                    array (
                      'description' => 'Anycast EIP实例的付费模式。

**PostPaid**：指后付费模式。',
                      'type' => 'string',
                      'example' => 'PostPaid',
                    ),
                    'IpAddress' => 
                    array (
                      'description' => 'Anycast EIP实例IP地址。',
                      'type' => 'string',
                      'example' => '139.95.XX.XX',
                    ),
                    'Bandwidth' => 
                    array (
                      'description' => 'Anycast EIP实例的带宽峰值。单位：Mbps。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '200',
                    ),
                    'Description' => 
                    array (
                      'description' => 'Anycast EIP实例描述。',
                      'type' => 'string',
                      'example' => 'docdesc',
                    ),
                    'AnycastEipBindInfoList' => 
                    array (
                      'description' => 'Anycast EIP实例绑定信息列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => 'Anycast EIP实例绑定信息列表。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'BindInstanceType' => 
                          array (
                            'description' => '绑定云资源实例类型。

- **SlbInstance**：指专有网络类型的私网传统型负载均衡CLB（Classic Load Balancer）实例（原SLB）。

- **NetworkInterface**：弹性网卡ENI（Elastic Network Interface）。
',
                            'type' => 'string',
                            'example' => 'SlbInstance',
                          ),
                          'BindTime' => 
                          array (
                            'description' => '绑定时间。',
                            'type' => 'string',
                            'example' => '2022-04-23T01:37:38Z',
                          ),
                          'BindInstanceRegionId' => 
                          array (
                            'description' => '绑定云资源实例地域ID。',
                            'type' => 'string',
                            'example' => 'us-west-1',
                          ),
                          'BindInstanceId' => 
                          array (
                            'description' => '绑定云资源实例ID。',
                            'type' => 'string',
                            'example' => 'lb-2zebb08phyczzawe****',
                          ),
                        ),
                      ),
                    ),
                    'InternetChargeType' => 
                    array (
                      'description' => 'Anycast EIP实例的计费方式。

**PayByTraffic**：指按流量计费方式。',
                      'type' => 'string',
                      'example' => 'PayByTraffic',
                    ),
                    'BusinessStatus' => 
                    array (
                      'description' => 'Anycast EIP实例的业务状态。

- **Normal**：正常状态。
- **FinancialLocked**：欠费锁定状态。',
                      'type' => 'string',
                      'example' => 'Normal',
                    ),
                    'Name' => 
                    array (
                      'description' => 'Anycast EIP实例名称。',
                      'type' => 'string',
                      'example' => 'docname',
                    ),
                    'ServiceManaged' => 
                    array (
                      'description' => '是否为服务账号创建的资源。

- **0**：非服务账号创建。

- **1**：服务账号创建。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '0',
                    ),
                    'ResourceGroupId' => 
                    array (
                      'description' => '实例所属的资源组ID。',
                      'type' => 'string',
                      'example' => 'rg-aekzthsmwsnfuni
',
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
                            'example' => 'FinanceDept',
                          ),
                          'Value' => 
                          array (
                            'description' => '标签值。',
                            'type' => 'string',
                            'example' => 'FinanceJoshua',
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
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 100,\\n  \\"NextToken\\": \\"FFmyTO70tTpLG6I3FmYAXGKPd****\\",\\n  \\"RequestId\\": \\"4EC47282-1B74-4534-BD0E-403F3EE64CAF\\",\\n  \\"AnycastList\\": [\\n    {\\n      \\"Status\\": \\"Associating\\",\\n      \\"CreateTime\\": \\"2022-04-22T01:37:38Z\\",\\n      \\"AnycastId\\": \\"aeip-2zeerraiwb7ujsxdc****\\",\\n      \\"AliUid\\": 0,\\n      \\"ServiceLocation\\": \\"international\\",\\n      \\"InstanceChargeType\\": \\"PostPaid\\",\\n      \\"IpAddress\\": \\"139.95.XX.XX\\",\\n      \\"Bandwidth\\": 200,\\n      \\"Description\\": \\"docdesc\\",\\n      \\"AnycastEipBindInfoList\\": [\\n        {\\n          \\"BindInstanceType\\": \\"SlbInstance\\",\\n          \\"BindTime\\": \\"2022-04-23T01:37:38Z\\",\\n          \\"BindInstanceRegionId\\": \\"us-west-1\\",\\n          \\"BindInstanceId\\": \\"lb-2zebb08phyczzawe****\\"\\n        }\\n      ],\\n      \\"InternetChargeType\\": \\"PayByTraffic\\",\\n      \\"BusinessStatus\\": \\"Normal\\",\\n      \\"Name\\": \\"docname\\",\\n      \\"ServiceManaged\\": 0,\\n      \\"ResourceGroupId\\": \\"rg-aekzthsmwsnfuni\\\\n\\",\\n      \\"Tags\\": [\\n        {\\n          \\"Key\\": \\"FinanceDept\\",\\n          \\"Value\\": \\"FinanceJoshua\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListAnycastEipAddressesResponse>\\n    <TotalCount>100</TotalCount>\\n    <NextToken>FFmyTO70tTpLG6I3FmYAXGKPd****</NextToken>\\n    <RequestId>4EC47282-1B74-4534-BD0E-403F3EE64CAF</RequestId>\\n    <AnycastList>\\n        <Status>Associating</Status>\\n        <CreateTime>2022-04-22T01:37:38Z</CreateTime>\\n        <AnycastId>aeip-2zeerraiwb7ujsxdc****</AnycastId>\\n        <ServiceLocation>international</ServiceLocation>\\n        <InstanceChargeType>PostPaid</InstanceChargeType>\\n        <IpAddress>139.95.XX.XX</IpAddress>\\n        <Bandwidth>200</Bandwidth>\\n        <Description>docdesc</Description>\\n        <AnycastEipBindInfoList>\\n            <BindInstanceType>SlbInstance</BindInstanceType>\\n            <BindTime>2022-04-23T01:37:38Z</BindTime>\\n            <BindInstanceRegionId>us-west-1</BindInstanceRegionId>\\n            <BindInstanceId>lb-2zebb08phyczzawe****</BindInstanceId>\\n        </AnycastEipBindInfoList>\\n        <InternetChargeType>PayByTraffic</InternetChargeType>\\n        <BusinessStatus>Normal</BusinessStatus>\\n        <Name>docname</Name>\\n        <ServiceManaged>0</ServiceManaged>\\n        <Tags>\\n            <Key>FinanceDept</Key>\\n            <Value>FinanceJoshua</Value>\\n        </Tags>\\n    </AnycastList>\\n</ListAnycastEipAddressesResponse>","errorExample":""}]',
      'title' => '查询已创建实例',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeAnycastServerRegions' => 
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
          'name' => 'ServiceLocation',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Anycast EIP接入区域。

取值：**international**，表示中国内地以外的区域。',
            'type' => 'string',
            'required' => true,
            'example' => 'international',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回信息列表。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '4EC47282-1B74-4534-BD0E-403F3EE64CAF',
              ),
              'Count' => 
              array (
                'description' => '列表条目数。',
                'type' => 'string',
                'example' => '1',
              ),
              'AnycastServerRegionList' => 
              array (
                'description' => 'Anycast EIP可绑定的后端地域信息列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => 'Anycast EIP可绑定的后端地域信息列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'RegionName' => 
                    array (
                      'description' => '可绑定地域名称。',
                      'type' => 'string',
                      'example' => 'eu-west-1-gb33-a01',
                    ),
                    'RegionId' => 
                    array (
                      'description' => '可绑定地域ID。',
                      'type' => 'string',
                      'example' => 'eu-west-1',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4EC47282-1B74-4534-BD0E-403F3EE64CAF\\",\\n  \\"Count\\": \\"1\\",\\n  \\"AnycastServerRegionList\\": [\\n    {\\n      \\"RegionName\\": \\"eu-west-1-gb33-a01\\",\\n      \\"RegionId\\": \\"eu-west-1\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeAnycastServerRegionsResponse>\\n    <RequestId>4EC47282-1B74-4534-BD0E-403F3EE64CAF</RequestId>\\n    <Count>1</Count>\\n    <AnycastServerRegionList>\\n        <RegionName>eu-west-1-gb33-a01</RegionName>\\n        <RegionId>eu-west-1</RegionId>\\n    </AnycastServerRegionList>\\n</DescribeAnycastServerRegionsResponse>","errorExample":""}]',
      'title' => '查询可绑定的后端服务地域',
      'summary' => '调用DescribeAnycastServerRegions接口查询指定区域内Anycast EIP可绑定的后端服务地域。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'TagResources' => 
    array (
      'summary' => '调用TagResources接口为指定的资源统一创建并绑定标签。',
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
        'operationType' => 'update',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ResourceId',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '资源ID，最多支持输入20个资源ID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '资源ID。最多支持输入20个资源ID。

> 调用该API时，**ResourceId.N**参数必须输入。',
              'type' => 'string',
              'required' => false,
              'example' => 'aeip-2zeerraiwb7ujsxdc****',
            ),
            'required' => true,
            'maxItems' => 50,
            'minItems' => 1,
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源类型，取值：**ANYCASTEIPADDRESS**。',
            'type' => 'string',
            'required' => true,
            'example' => 'ANYCASTEIPADDRESS',
          ),
        ),
        2 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
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
                  'description' => '资源的标签键。至少输入1个标签键，最多支持输入20个标签键。一旦传入该值，则不允许为空字符串。

最多支持128个字符，不能以aliyun和acs:开头，不能包含`http://`或者`https://`。

> 调用该API时，**Tag.N.Key**参数必须输入。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'FinanceDept',
                ),
                'Value' => 
                array (
                  'description' => '资源的标签值。至少输入1个标签值，最多支持输入20个标签值。一旦传入该值，可以为空字符串。

最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。

> 调用该API时，**Tag.N.Value**参数必须输入。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'FinanceJoshua',
                ),
              ),
              'required' => false,
            ),
            'required' => true,
            'maxItems' => 21,
            'minItems' => 1,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'BaseResult',
            'description' => 'BaseResult',
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'description' => '是否调用成功。取值：

**true**：调用成功。

**false**：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'C46FF5A8-C5F0-4024-8262-B16B639225A0',
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
            'errorCode' => 'NumberExceed.Tags',
            'errorMessage' => 'The maximum number of tags is exceeded.',
          ),
          1 => 
          array (
            'errorCode' => 'NumberExceed.ResourceIds',
            'errorMessage' => 'The maximum number of resource IDs is exceeded.',
          ),
          2 => 
          array (
            'errorCode' => 'Forbidden.TagKeys',
            'errorMessage' => 'The tag key cannot be operated by the request.',
          ),
          3 => 
          array (
            'errorCode' => 'Forbidden.TagKey.Duplicated',
            'errorMessage' => 'The specified tag key already exists.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidInstanceIds.NotFound',
            'errorMessage' => 'The instance IDs are not found.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidInstanceType.NotFound',
            'errorMessage' => 'The instance type is not found.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"C46FF5A8-C5F0-4024-8262-B16B639225A0\\"\\n}","errorExample":""},{"type":"xml","example":"<TagResourcesResponse>\\n    <Success>true</Success>\\n    <RequestId>C46FF5A8-C5F0-4024-8262-B16B639225A0</RequestId>\\n</TagResourcesResponse>","errorExample":""}]',
      'title' => '为实例添加标签',
    ),
    'ListTagResources' => 
    array (
      'summary' => '调用ListTagResources接口查询任播弹性公网IP已绑定的标签列表信息。',
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
        0 => 
        array (
          'name' => 'ResourceId',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '资源ID列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '资源ID。最多支持输入20个资源ID。

> 参数**ResourceId.N**或**Tag.N**（**Tag.N.Key**与**Tag.N.Value**）至少输入一个。',
              'type' => 'string',
              'required' => false,
              'example' => 'aeip-2zeerraiwb7ujsxdc****',
            ),
            'required' => false,
            'maxItems' => 50,
            'minItems' => 1,
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源类型，取值：**ANYCASTEIPADDRESS**。',
            'type' => 'string',
            'required' => true,
            'example' => 'ANYCASTEIPADDRESS',
          ),
        ),
        2 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '标签信息。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '资源的标签键。最多支持20个标签键。一旦传入该值，则不允许为空字符串。

最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。

> 参数**ResourceId.N**或**Tag.N**（**Tag.N.Key**与**Tag.N.Value**）至少输入一个。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'FinanceDept',
                ),
                'Value' => 
                array (
                  'description' => '资源的标签值。最多支持20个标签值。一旦传入该值，可以为空字符串。


最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。

> 参数**ResourceId.N**或**Tag.N**（**Tag.N.Key**与**Tag.N.Value**）至少输入一个。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'FinanceJoshua',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 21,
            'minItems' => 1,
          ),
        ),
        3 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否拥有下一次查询的令牌（Token）。取值：

- 第一次查询和没有下一次查询时，均无需填写。

- 如果有下一次查询，取值为上一次API调用返回的**NextToken**值。',
            'type' => 'string',
            'required' => false,
            'example' => 'FFmyTO70tTpLG6I3FmYAXGKPd****',
          ),
        ),
        4 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时每页的最大条目数。取值范围：**1**~**50**，默认值：**50**。',
            'type' => 'string',
            'required' => false,
            'example' => '50',
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
              'NextToken' => 
              array (
                'description' => '是否拥有下一次查询的令牌（Token）。取值：
- 如果**NextToken**为空表示没有下一次查询。
- 如果**NextToken**有返回值，该取值表示下一次查询开始的令牌。',
                'type' => 'string',
                'example' => 'FFmyTO70tTpLG6I3FmYAXGKPd****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'DE65F6B7-7566-4802-9007-96F2494AC512',
              ),
              'TagResources' => 
              array (
                'description' => '绑定标签的资源信息。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ResourceId' => 
                    array (
                      'description' => '资源ID。',
                      'type' => 'string',
                      'example' => 'aeip-2zeerraiwb7ujsxdc****',
                    ),
                    'ResourceType' => 
                    array (
                      'description' => '资源类型，取值：**ANYCASTEIPADDRESS**。',
                      'type' => 'string',
                      'example' => 'ANYCASTEIPADDRESS',
                    ),
                    'TagValue' => 
                    array (
                      'description' => '标签值。',
                      'type' => 'string',
                      'example' => 'FinanceJoshua',
                    ),
                    'TagKey' => 
                    array (
                      'description' => '标签键。',
                      'type' => 'string',
                      'example' => 'FinanceDept',
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
            'errorCode' => 'InvalidTagKey',
            'errorMessage' => 'The tag keys are not valid.',
          ),
          1 => 
          array (
            'errorCode' => 'NumberExceed.Tags',
            'errorMessage' => 'The maximum number of tags is exceeded.',
          ),
          2 => 
          array (
            'errorCode' => 'NumberExceed.ResourceIds',
            'errorMessage' => 'The maximum number of resource IDs is exceeded.',
          ),
          3 => 
          array (
            'errorCode' => 'Forbidden.TagKeys',
            'errorMessage' => 'The tag key cannot be operated by the request.',
          ),
          4 => 
          array (
            'errorCode' => 'Forbidden.TagKey.Duplicated',
            'errorMessage' => 'The specified tag key already exists.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidInstanceIds.NotFound',
            'errorMessage' => 'The instance IDs are not found.',
          ),
          6 => 
          array (
            'errorCode' => 'InvalidInstanceType.NotFound',
            'errorMessage' => 'The instance type is not found.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"NextToken\\": \\"FFmyTO70tTpLG6I3FmYAXGKPd****\\",\\n  \\"RequestId\\": \\"DE65F6B7-7566-4802-9007-96F2494AC512\\",\\n  \\"TagResources\\": [\\n    {\\n      \\"ResourceId\\": \\"aeip-2zeerraiwb7ujsxdc****\\",\\n      \\"ResourceType\\": \\"ANYCASTEIPADDRESS\\",\\n      \\"TagValue\\": \\"FinanceJoshua\\",\\n      \\"TagKey\\": \\"FinanceDept\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListTagResourcesResponse>\\n    <NextToken>FFmyTO70tTpLG6I3FmYAXGKPd****</NextToken>\\n    <RequestId>DE65F6B7-7566-4802-9007-96F2494AC512</RequestId>\\n    <TagResources>\\n        <ResourceId>aeip-2zeerraiwb7ujsxdc****</ResourceId>\\n        <ResourceType>ANYCASTEIPADDRESS</ResourceType>\\n        <TagValue>FinanceJoshua</TagValue>\\n        <TagKey>FinanceDept</TagKey>\\n    </TagResources>\\n</ListTagResourcesResponse>","errorExample":""}]',
      'title' => '查询实例已绑定的标签列表',
    ),
    'UntagResources' => 
    array (
      'summary' => '调用UntagResources接口为指定的Anycast EIP资源批量解绑标签。',
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
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ResourceId',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '资源ID。最多支持解绑20个资源ID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '资源ID。最多支持解绑20个资源ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'aeip-2zeerraiwb7ujsxdc****',
            ),
            'required' => true,
            'maxItems' => 50,
            'minItems' => 1,
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源类型，取值：**ANYCASTEIPADDRESS**。',
            'type' => 'string',
            'required' => true,
            'example' => 'ANYCASTEIPADDRESS',
          ),
        ),
        2 => 
        array (
          'name' => 'TagKey',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '要解绑的标签键。最多支持输入20个标签键。一旦传入该值，则不允许为空字符串。

一个标签键最多支持128个字符，不能以aliyun和acs:开头，不能包含`http://`或者`https://`。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '要解绑的标签键。最多支持输入20个标签键。一旦传入该值，可以为空字符串。

一个标签键最多支持128个字符，不能以aliyun和acs:开头，不能包含http://或者https://。',
              'type' => 'string',
              'required' => false,
              'example' => 'FinanceDept',
            ),
            'required' => false,
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
            'title' => 'BaseResult',
            'description' => 'BaseResult',
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'description' => '是否调用成功。取值：

**true**：调用成功。

**false**：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'C46FF5A8-C5F0-4024-8262-B16B639225A0',
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
            'errorCode' => 'NumberExceed.Tags',
            'errorMessage' => 'The maximum number of tags is exceeded.',
          ),
          1 => 
          array (
            'errorCode' => 'NumberExceed.ResourceIds',
            'errorMessage' => 'The maximum number of resource IDs is exceeded.',
          ),
          2 => 
          array (
            'errorCode' => 'Forbidden.TagKeys',
            'errorMessage' => 'The tag key cannot be operated by the request.',
          ),
          3 => 
          array (
            'errorCode' => 'Forbidden.TagKey.Duplicated',
            'errorMessage' => 'The specified tag key already exists.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidInstanceIds.NotFound',
            'errorMessage' => 'The instance IDs are not found.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidInstanceType.NotFound',
            'errorMessage' => 'The instance type is not found.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"C46FF5A8-C5F0-4024-8262-B16B639225A0\\"\\n}","errorExample":""},{"type":"xml","example":"<UntagResourcesResponse>\\n    <Success>true</Success>\\n    <RequestId>C46FF5A8-C5F0-4024-8262-B16B639225A0</RequestId>\\n</UntagResourcesResponse>","errorExample":""}]',
      'title' => '为实例解绑标签',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'eipanycast.cn-hangzhou.aliyuncs.com',
    ),
  ),
);
<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'Privatelink',
    'version' => '2020-04-15',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 176808,
      'title' => '私网连接服务',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'OpenPrivateLinkService',
        1 => 'CheckProductOpen',
      ),
    ),
    1 => 
    array (
      'id' => 176765,
      'title' => '地域与可用区',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeRegions',
        1 => 'DescribeZones',
      ),
    ),
    2 => 
    array (
      'id' => 3189,
      'title' => '终端节点服务',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateVpcEndpointService',
        1 => 'UpdateVpcEndpointServiceAttribute',
        2 => 'GetVpcEndpointServiceAttribute',
        3 => 'ListVpcEndpointServices',
        4 => 'DeleteVpcEndpointService',
      ),
    ),
    3 => 
    array (
      'id' => 3191,
      'title' => '服务白名单',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'AddUserToVpcEndpointService',
        1 => 'ListVpcEndpointServiceUsers',
        2 => 'RemoveUserFromVpcEndpointService',
      ),
    ),
    4 => 
    array (
      'id' => 3194,
      'title' => '服务资源',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'UpdateVpcEndpointServiceResourceAttribute',
        1 => 'AttachResourceToVpcEndpointService',
        2 => 'ListVpcEndpointServiceResources',
        3 => 'DetachResourceFromVpcEndpointService',
      ),
    ),
    5 => 
    array (
      'id' => 3198,
      'title' => '终端节点',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DeleteVpcEndpoint',
        1 => 'CreateVpcEndpoint',
        2 => 'UpdateVpcEndpointAttribute',
        3 => 'ListVpcEndpoints',
        4 => 'GetVpcEndpointAttribute',
        5 => 'ListVpcEndpointServicesByEndUser',
      ),
    ),
    6 => 
    array (
      'id' => 3203,
      'title' => '终端节点连接',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'EnableVpcEndpointConnection',
        1 => 'UpdateVpcEndpointConnectionAttribute',
        2 => 'ListVpcEndpointConnections',
        3 => 'DisableVpcEndpointConnection',
      ),
    ),
    7 => 
    array (
      'id' => 3207,
      'title' => '终端节点可用区',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'AddZoneToVpcEndpoint',
        1 => 'ListVpcEndpointZones',
        2 => 'RemoveZoneFromVpcEndpoint',
      ),
    ),
    8 => 
    array (
      'id' => 176753,
      'title' => '终端节点可用区连接',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DisableVpcEndpointZoneConnection',
        1 => 'EnableVpcEndpointZoneConnection',
        2 => 'UpdateVpcEndpointZoneConnectionResourceAttribute',
      ),
    ),
    9 => 
    array (
      'id' => 3212,
      'title' => '安全组',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'AttachSecurityGroupToVpcEndpoint',
        1 => 'ListVpcEndpointSecurityGroups',
        2 => 'DetachSecurityGroupFromVpcEndpoint',
      ),
    ),
    10 => 
    array (
      'id' => 176748,
      'title' => '标签&资源组',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'UntagResources',
        1 => 'ListTagResources',
        2 => 'TagResources',
        3 => 'ChangeResourceGroup',
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
    'OpenPrivateLinkService' => 
    array (
      'summary' => '开启私网连接服务。',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
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
                'example' => '427688B8-ADFB-4C4E-9D45-EF5C1FD6E23D',
              ),
              'OrderId' => 
              array (
                'description' => '订单ID。',
                'type' => 'string',
                'example' => '3245****',
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
            'errorCode' => 'AccountTypeRestricted',
            'errorMessage' => 'Please submit the application for beta testing first. You can activate the product after the application is approved.',
          ),
          1 => 
          array (
            'errorCode' => 'OrderOpend',
            'errorMessage' => 'You have already activated the service. Go to the console to start using it.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidAccountStatus.NotEnoughBalance',
            'errorMessage' => 'Your account does not have enough balance.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"427688B8-ADFB-4C4E-9D45-EF5C1FD6E23D\\",\\n  \\"OrderId\\": \\"3245****\\"\\n}","errorExample":""},{"type":"xml","example":"<OpenPrivateLinkServiceResponse>\\n    <RequestId>427688B8-ADFB-4C4E-9D45-EF5C1FD6E23D</RequestId>\\n    <OrderId>3245****</OrderId>\\n</OpenPrivateLinkServiceResponse>","errorExample":""}]',
      'title' => '开启私网连接服务',
    ),
    'CheckProductOpen' => 
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
        'operationType' => 'none',
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
                'example' => '8D8992C1-6712-423C-BAC5-E5E817484C6B',
              ),
              'Success' => 
              array (
                'description' => '私网连接服务开通状态。

仅取值：**true**，表示开通。

',
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
            'errorCode' => 'NeedOpenProduct',
            'errorMessage' => 'The product is not activated.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"8D8992C1-6712-423C-BAC5-E5E817484C6B\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<CheckProductOpenResponse>\\n    <RequestId>8D8992C1-6712-423C-BAC5-E5E817484C6B</RequestId>\\n    <Success>true</Success>\\n</CheckProductOpenResponse>","errorExample":""}]',
      'title' => '查询是否已开通私网连接',
      'summary' => '调用CheckProductOpen接口，查询是否已开通私网连接。',
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
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
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
                'example' => '611CB80C-B6A9-43DB-9E38-0B0AC3D9B58F',
              ),
              'Regions' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Region' => 
                  array (
                    'description' => '可用地域的集合。',
                    'type' => 'array',
                    'items' => 
                    array (
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
                          'description' => '地域服务的终端节点。',
                          'type' => 'string',
                          'example' => 'privatelink.cn-hangzhou.aliyuncs.com',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"611CB80C-B6A9-43DB-9E38-0B0AC3D9B58F\\",\\n  \\"Regions\\": {\\n    \\"Region\\": [\\n      {\\n        \\"LocalName\\": \\"华东1（杭州）\\",\\n        \\"RegionEndpoint\\": \\"privatelink.cn-hangzhou.aliyuncs.com\\",\\n        \\"RegionId\\": \\"cn-hangzhou\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeRegionsResponse>\\n    <RequestId>A355E857-97F5-5054-9AC8-BCE064939652</RequestId>\\n    <Regions>\\n        <Region>\\n            <RegionId>cn-hangzhou</RegionId>\\n            <RegionEndpoint>privatelink.cn-hangzhou.aliyuncs.com</RegionEndpoint>\\n            <LocalName>华东1（杭州）</LocalName>\\n        </Region>\\n        <Region>\\n            <RegionId>cn-shanghai</RegionId>\\n            <RegionEndpoint>privatelink.cn-shanghai.aliyuncs.com</RegionEndpoint>\\n            <LocalName>华东2（上海）</LocalName>\\n        </Region>\\n        <Region>\\n            <RegionId>cn-nanjing</RegionId>\\n            <RegionEndpoint>privatelink.cn-nanjing.aliyuncs.com</RegionEndpoint>\\n            <LocalName>华东5（南京-本地地域）</LocalName>\\n        </Region>\\n        <Region>\\n            <RegionId>cn-qingdao</RegionId>\\n            <RegionEndpoint>privatelink.cn-qingdao.aliyuncs.com</RegionEndpoint>\\n            <LocalName>华北1（青岛）</LocalName>\\n        </Region>\\n        <Region>\\n            <RegionId>cn-beijing</RegionId>\\n            <RegionEndpoint>privatelink.cn-beijing.aliyuncs.com</RegionEndpoint>\\n            <LocalName>华北2（北京）</LocalName>\\n        </Region>\\n        <Region>\\n            <RegionId>cn-zhangjiakou</RegionId>\\n            <RegionEndpoint>privatelink.cn-zhangjiakou.aliyuncs.com</RegionEndpoint>\\n            <LocalName>华北3（张家口）</LocalName>\\n        </Region>\\n        <Region>\\n            <RegionId>cn-huhehaote</RegionId>\\n            <RegionEndpoint>privatelink.cn-huhehaote.aliyuncs.com</RegionEndpoint>\\n            <LocalName>华北5（呼和浩特）</LocalName>\\n        </Region>\\n        <Region>\\n            <RegionId>cn-wulanchabu</RegionId>\\n            <RegionEndpoint>privatelink.cn-wulanchabu.aliyuncs.com</RegionEndpoint>\\n            <LocalName>华北6（乌兰察布）</LocalName>\\n        </Region>\\n        <Region>\\n            <RegionId>cn-shenzhen</RegionId>\\n            <RegionEndpoint>privatelink.cn-shenzhen.aliyuncs.com</RegionEndpoint>\\n            <LocalName>华南1（深圳）</LocalName>\\n        </Region>\\n        <Region>\\n            <RegionId>cn-heyuan</RegionId>\\n            <RegionEndpoint>privatelink.cn-heyuan.aliyuncs.com</RegionEndpoint>\\n            <LocalName>华南2（河源）</LocalName>\\n        </Region>\\n        <Region>\\n            <RegionId>cn-guangzhou</RegionId>\\n            <RegionEndpoint>privatelink.cn-guangzhou.aliyuncs.com</RegionEndpoint>\\n            <LocalName>华南3（广州）</LocalName>\\n        </Region>\\n        <Region>\\n            <RegionId>cn-chengdu</RegionId>\\n            <RegionEndpoint>privatelink.cn-chengdu.aliyuncs.com</RegionEndpoint>\\n            <LocalName>西南1（成都）</LocalName>\\n        </Region>\\n        <Region>\\n            <RegionId>cn-hongkong</RegionId>\\n            <RegionEndpoint>privatelink.cn-hongkong.aliyuncs.com</RegionEndpoint>\\n            <LocalName>中国香港</LocalName>\\n        </Region>\\n        <Region>\\n            <RegionId>ap-southeast-1</RegionId>\\n            <RegionEndpoint>privatelink.ap-southeast-1.aliyuncs.com</RegionEndpoint>\\n            <LocalName>新加坡</LocalName>\\n        </Region>\\n        <Region>\\n            <RegionId>ap-southeast-2</RegionId>\\n            <RegionEndpoint>privatelink.ap-southeast-2.aliyuncs.com</RegionEndpoint>\\n            <LocalName>澳大利亚（悉尼）</LocalName>\\n        </Region>\\n        <Region>\\n            <RegionId>ap-southeast-3</RegionId>\\n            <RegionEndpoint>privatelink.ap-southeast-3.aliyuncs.com</RegionEndpoint>\\n            <LocalName>马来西亚（吉隆坡）</LocalName>\\n        </Region>\\n        <Region>\\n            <RegionId>ap-southeast-5</RegionId>\\n            <RegionEndpoint>privatelink.ap-southeast-5.aliyuncs.com</RegionEndpoint>\\n            <LocalName>印度尼西亚（雅加达）</LocalName>\\n        </Region>\\n        <Region>\\n            <RegionId>ap-northeast-1</RegionId>\\n            <RegionEndpoint>privatelink.ap-northeast-1.aliyuncs.com</RegionEndpoint>\\n            <LocalName>日本（东京）</LocalName>\\n        </Region>\\n        <Region>\\n            <RegionId>eu-central-1</RegionId>\\n            <RegionEndpoint>privatelink.eu-central-1.aliyuncs.com</RegionEndpoint>\\n            <LocalName>德国（法兰克福）</LocalName>\\n        </Region>\\n        <Region>\\n            <RegionId>eu-west-1</RegionId>\\n            <RegionEndpoint>privatelink.eu-west-1.aliyuncs.com</RegionEndpoint>\\n            <LocalName>英国（伦敦）</LocalName>\\n        </Region>\\n        <Region>\\n            <RegionId>us-west-1</RegionId>\\n            <RegionEndpoint>privatelink.us-west-1.aliyuncs.com</RegionEndpoint>\\n            <LocalName>美国（硅谷）</LocalName>\\n        </Region>\\n        <Region>\\n            <RegionId>us-east-1</RegionId>\\n            <RegionEndpoint>privatelink.us-east-1.aliyuncs.com</RegionEndpoint>\\n            <LocalName>美国（弗吉尼亚）</LocalName>\\n        </Region>\\n        <Region>\\n            <RegionId>ap-south-1</RegionId>\\n            <RegionEndpoint>privatelink.ap-south-1.aliyuncs.com</RegionEndpoint>\\n            <LocalName>印度（孟买）</LocalName>\\n        </Region>\\n    </Regions>\\n</DescribeRegionsResponse>","errorExample":""}]',
      'title' => '查看可选的地域和可用区',
      'summary' => '调用DescribeRegions接口，查看私网连接可选的地域和可用区。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeZones' => 
    array (
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
            'description' => '可用区所在的地域ID。您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。',
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
            'description' => '可用区所在的地域ID。您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
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
                'example' => '611CB80C-B6A9-43DB-9E38-0B0AC3D9B58F',
              ),
              'Zones' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Zone' => 
                  array (
                    'description' => '可用区的集合。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '可用区的集合。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'LocalName' => 
                        array (
                          'description' => '可用区名称。',
                          'type' => 'string',
                          'example' => '华东1 可用区B',
                        ),
                        'ZoneId' => 
                        array (
                          'description' => '可用区ID。',
                          'type' => 'string',
                          'example' => 'cn-hangzhou-b',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"611CB80C-B6A9-43DB-9E38-0B0AC3D9B58F\\",\\n  \\"Zones\\": {\\n    \\"Zone\\": [\\n      {\\n        \\"LocalName\\": \\"华东1 可用区B\\",\\n        \\"ZoneId\\": \\"cn-hangzhou-b\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeZonesResponse>\\r\\n  <RequestId>6FEA0CF3-D3B9-43E5-A304-D217037876A8</RequestId>\\r\\n      <Zones>\\r\\n            <Zone>\\r\\n                  <ZoneId>cn-hangzhou-b</ZoneId>\\r\\n                  <LocalName>华东 1 可用区 B</LocalName>\\r\\n            </Zone>\\r\\n            <Zone>\\r\\n                  <ZoneId>cn-hangzhou-f</ZoneId>\\r\\n                  <LocalName>华东 1 可用区 F</LocalName>\\r\\n            </Zone>\\r\\n            <Zone>\\r\\n                  <ZoneId>cn-hangzhou-g</ZoneId>\\r\\n                  <LocalName>华东 1 可用区 G</LocalName>\\r\\n            </Zone>\\r\\n            <Zone>\\r\\n                  <ZoneId>cn-hangzhou-h</ZoneId>\\r\\n                  <LocalName>华东 1 可用区 H</LocalName>\\r\\n            </Zone>\\r\\n            <Zone>\\r\\n                  <ZoneId>cn-hangzhou-i</ZoneId>\\r\\n                  <LocalName>华东 1 可用区 I</LocalName>\\r\\n            </Zone>\\r\\n            <Zone>\\r\\n                  <ZoneId>cn-hangzhou-j</ZoneId>\\r\\n                  <LocalName>华东 1 可用区 J</LocalName>\\r\\n            </Zone>\\r\\n            <Zone>\\r\\n                  <ZoneId>cn-hangzhou-k</ZoneId>\\r\\n                  <LocalName>华东 1 可用区 K</LocalName>\\r\\n            </Zone>\\r\\n      </Zones>\\r\\n</DescribeZonesResponse>","errorExample":""}]',
      'title' => '查询指定地域中可用区的列表',
      'summary' => '调用DescribeZones接口，查询指定地域中可用区的列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateVpcEndpointService' => 
    array (
      'summary' => '调用CreateVpcEndpointService接口，创建终端节点服务。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '终端节点服务所在的地域ID。

您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-huhehaote',
          ),
        ),
        1 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端Token，用于保证请求的幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。**ClientToken**只支持ASCII字符。



',
            'type' => 'string',
            'required' => false,
            'example' => '0c593ea1-3bea-11e9-b96b-88e9fe637760',
          ),
        ),
        2 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只预检此次请求，取值：

- **true**：发送检查请求，不会创建资源。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。

- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        3 => 
        array (
          'name' => 'ServiceDescription',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '终端节点服务的描述信息。',
            'type' => 'string',
            'required' => false,
            'example' => 'This is my EndpointService.',
          ),
        ),
        4 => 
        array (
          'name' => 'AutoAcceptEnabled',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否自动接受终端节点连接，取值：

- **true**：自动接受终端节点连接。

- **false**（默认值）：不自动接受终端节点连接。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
        5 => 
        array (
          'name' => 'Payer',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '付费方，取值：

- **Endpoint**：服务使用方。

- **EndpointService**：服务提供方。',
            'type' => 'string',
            'required' => false,
            'example' => 'Endpoint',
          ),
        ),
        6 => 
        array (
          'name' => 'ZoneAffinityEnabled',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否支持连接服务的终端节点域名就近解析，取值：

- **true**：是。

- **false**（默认值）：否。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
        7 => 
        array (
          'name' => 'ServiceResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务资源类型。取值：

- **slb** ：表示服务资源类型为传统型负载均衡CLB（Classic Load Balancer）。

- **alb** ：表示服务资源类型为应用型负载均衡ALB（Application Load Balancer）。
- **nlb** ：表示服务资源类型为网络型负载均衡NLB（Network Load Balancer ）。

> 不支持访问NLB的TCPSSL类型监听。',
            'type' => 'string',
            'required' => false,
            'example' => 'slb',
          ),
        ),
        8 => 
        array (
          'name' => 'Resource',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '终端节点服务资源合集。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '终端节点服务资源合集。',
              'type' => 'object',
              'properties' => 
              array (
                'ResourceType' => 
                array (
                  'description' => '添加到终端节点服务中的服务资源的类型，一个终端节点服务最多支持添加20个服务资源。取值：

- **slb** ：表示服务资源类型为传统型负载均衡CLB（Classic Load Balancer）。

- **alb** ：表示服务资源类型为应用型负载均衡ALB（Application Load Balancer）。
- **nlb** ：表示服务资源类型为网络型负载均衡NLB（Network Load Balancer ）。

> 在支持私网连接功能的地域内，专有网络类型的传统型负载均衡CLB实例均支持作为终端节点服务的服务资源。不支持访问NLB的TCPSSL类型监听。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'slb',
                ),
                'ResourceId' => 
                array (
                  'description' => '添加到终端节点服务中的服务资源ID。最多支持20个资源ID。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'lb-hp32z1wp5peaoox2q****',
                ),
                'ZoneId' => 
                array (
                  'description' => '可用区ID。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'cn-huhehaote-a',
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '终端节点服务所在的地域ID。

您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-huhehaote',
          ),
        ),
        10 => 
        array (
          'name' => 'ServiceSupportIPv6',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '终端节点服务是否支持IPv6功能。取值：

- **true**：是。

- **false**（默认值）：否。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        11 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-acfmy*****',
          ),
        ),
        12 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '标签列表。
',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签列表。
',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '实例的标签键。最多支持20个标签键。一旦传入该值，则不允许为空字符串。

最多支持64个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'env',
                ),
                'Value' => 
                array (
                  'description' => '实例的标签值。最多支持20个标签值。一旦传入该值，可以为空字符串。

最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'prod',
                ),
              ),
              'required' => false,
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
            'type' => 'object',
            'properties' => 
            array (
              'ServiceBusinessStatus' => 
              array (
                'description' => '终端节点服务的业务状态。取值：

- **Normal**：正常。

- **FinancialLocked**：欠费锁定。',
                'type' => 'string',
                'example' => 'Normal',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '8D8992C1-6712-423C-BAC5-E5E817484C6B',
              ),
              'ServiceName' => 
              array (
                'description' => '终端节点服务的名称。',
                'type' => 'string',
                'example' => 'com.aliyuncs.privatelink.cn-huhehaote.epsrv-hp3vpx8yqxblby3i****',
              ),
              'ServiceStatus' => 
              array (
                'description' => '终端节点服务的状态。取值：

- **Creating**：创建中。

- **Pending**：修改中。

- **Active**：可用。

- **Deleting**：删除中。',
                'type' => 'string',
                'example' => 'Active',
              ),
              'ServiceDescription' => 
              array (
                'description' => '终端节点服务的描述信息。',
                'type' => 'string',
                'example' => 'This is my EndpointService.',
              ),
              'CreateTime' => 
              array (
                'description' => '终端节点服务的创建时间。',
                'type' => 'string',
                'example' => '2022-01-02T19:11:12Z',
              ),
              'ServiceDomain' => 
              array (
                'description' => '终端节点服务的服务域名。',
                'type' => 'string',
                'example' => 'epsrv-hp3vpx8yqxblby3i****.cn-huhehaote.privatelink.aliyuncs.com',
              ),
              'ZoneAffinityEnabled' => 
              array (
                'description' => '是否支持连接服务的终端节点域名就近解析。取值：

- **true**：是。
- **false**：否。',
                'type' => 'boolean',
                'example' => 'false',
              ),
              'AutoAcceptEnabled' => 
              array (
                'description' => '是否自动接受终端节点连接。取值：

- **true**：自动接受终端节点连接。
- **false**：不自动接受终端节点连接。',
                'type' => 'boolean',
                'example' => 'false',
              ),
              'ServiceId' => 
              array (
                'description' => '终端节点服务的ID。',
                'type' => 'string',
                'example' => 'epsrv-hp3vpx8yqxblby3i****',
              ),
              'ServiceSupportIPv6' => 
              array (
                'description' => '终端节点服务是否支持IPv6功能。取值：

- **true**：是。

- **false**：否。',
                'type' => 'boolean',
                'example' => 'false',
              ),
              'ResourceGroupId' => 
              array (
                'description' => '资源组ID。',
                'type' => 'string',
                'example' => 'rg-acfmy*****',
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
            'errorCode' => 'EndpointServiceExist',
            'errorMessage' => 'The specified Endpoint Service already exists.',
          ),
          1 => 
          array (
            'errorCode' => 'AlbNotFound',
            'errorMessage' => 'The specified Alb does not exist.',
          ),
          2 => 
          array (
            'errorCode' => 'LoadBalancerNotFound',
            'errorMessage' => 'The specified load balancer does not exist.',
          ),
          3 => 
          array (
            'errorCode' => 'LoadBalancerNotSupportPrivateLink',
            'errorMessage' => 'The specified SLB does not support PrivateLink.',
          ),
          4 => 
          array (
            'errorCode' => 'GenerateResourceIdFailed',
            'errorMessage' => 'Failed to generate ResourceId.',
          ),
          5 => 
          array (
            'errorCode' => 'QuotaMisMatched',
            'errorMessage' => 'The resource you applied for has exceeded the quota.',
          ),
          6 => 
          array (
            'errorCode' => 'VSwitchNotFound',
            'errorMessage' => 'The specified VSwitch does not exist.',
          ),
          7 => 
          array (
            'errorCode' => 'EndpointServicePayerForbidden',
            'errorMessage' => 'The parameter EndpointServicePayer is forbidden. The user is not in the whitelist.',
          ),
          8 => 
          array (
            'errorCode' => 'NeedOpenProduct',
            'errorMessage' => 'The product is not activated.',
          ),
          9 => 
          array (
            'errorCode' => 'EndpointServiceNotSupportedZone',
            'errorMessage' => 'The specified endpoint service does not support the zone.',
          ),
          10 => 
          array (
            'errorCode' => 'IllegalParamFormat.%s',
            'errorMessage' => 'The param format of %s is illegal.',
          ),
          11 => 
          array (
            'errorCode' => 'MissingParam.%s',
            'errorMessage' => 'The param of %s is missing.',
          ),
          12 => 
          array (
            'errorCode' => 'ResourceNotFound.NatGateway',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
          13 => 
          array (
            'errorCode' => 'Mismatch.ResourceType',
            'errorMessage' => 'The %s is mismatched for %s and %s.',
          ),
          14 => 
          array (
            'errorCode' => 'EndpointServiceNotSupportIpv6',
            'errorMessage' => 'The param supportIpv6 of EndpointService is forbidden , resource is not support ipv6.',
          ),
          15 => 
          array (
            'errorCode' => 'OperationDenied.PrivateDomainNotSupport',
            'errorMessage' => 'The operation is not allowed because of PrivateDomainNotSupport.',
          ),
          16 => 
          array (
            'errorCode' => 'Conflict.ServiceName',
            'errorMessage' => 'The ServiceName %s is conflict.',
          ),
          17 => 
          array (
            'errorCode' => 'InvalidParam.PrivateDnsName',
            'errorMessage' => 'The parameter of PrivateDnsName is illegal, which needs to end with aliyun.com, aliyun-inc.com, or aliyuncs.com.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"ServiceBusinessStatus\\": \\"Normal\\",\\n  \\"RequestId\\": \\"8D8992C1-6712-423C-BAC5-E5E817484C6B\\",\\n  \\"ServiceName\\": \\"com.aliyuncs.privatelink.cn-huhehaote.epsrv-hp3vpx8yqxblby3i****\\",\\n  \\"ServiceStatus\\": \\"Active\\",\\n  \\"ServiceDescription\\": \\"This is my EndpointService.\\",\\n  \\"CreateTime\\": \\"2022-01-02T19:11:12Z\\",\\n  \\"ServiceDomain\\": \\"epsrv-hp3vpx8yqxblby3i****.cn-huhehaote.privatelink.aliyuncs.com\\",\\n  \\"ZoneAffinityEnabled\\": false,\\n  \\"AutoAcceptEnabled\\": false,\\n  \\"ServiceId\\": \\"epsrv-hp3vpx8yqxblby3i****\\",\\n  \\"ServiceSupportIPv6\\": false,\\n  \\"ResourceGroupId\\": \\"rg-acfmy*****\\"\\n}","type":"json"}]',
      'title' => '创建终端节点服务',
      'description' => '- 创建终端节点服务之前，请确保您已创建支持私网连接的负载均衡资源。具体操作，请参见[创建负载均衡实例](~~174064~~)。
- **CreateVpcEndpointService**接口属于异步接口，即系统会返回一个实例ID，但该终端节点服务尚未创建完成，系统后台任务仍在进行中。您可以调用[GetVpcEndpointServiceAttribute](~~183542~~)查询终端节点服务的创建状态：

     - 当终端节点服务处于**Creating**状态时，表示终端节点服务正在创建。

     - 当终端节点服务处于**Active**状态时，表示终端节点服务创建完成。',
    ),
    'UpdateVpcEndpointServiceAttribute' => 
    array (
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
            'description' => '终端节点服务所在的地域ID。

您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端Token，用于保证请求的幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。**ClientToken**只支持ASCII字符。',
            'type' => 'string',
            'required' => false,
            'example' => '0c593ea1-3bea-11e9-b96b-88e9fe637760',
          ),
        ),
        2 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只预检此次请求，取值：

- **true**：发送检查请求，不会修改资源属性。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。

- **false**（默认值）：发送正常请求，通过检查后返回HTTP
 2xx状态码并直接修改资源属性。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        3 => 
        array (
          'name' => 'ServiceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '终端节点服务的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'epsrv-hp3vpx8yqxblby3i****',
          ),
        ),
        4 => 
        array (
          'name' => 'ServiceDescription',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '终端节点服务的描述信息。',
            'type' => 'string',
            'required' => false,
            'example' => 'This is my EndpointService.',
          ),
        ),
        5 => 
        array (
          'name' => 'AutoAcceptEnabled',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否自动接受终端节点连接，取值：

- **true**：自动接受终端节点连接。

- **false**：不自动接受终端节点连接。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        6 => 
        array (
          'name' => 'ConnectBandwidth',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '默认连接带宽峰值。默认值：**3072**。单位：Mbps。

取值范围：**100**~**10240**。

> 当服务资源为传统型负载均衡CLB或应用型负载均衡ALB时，支持设置默认连接带宽峰值；当服务资源为网络型负载均衡NLB时，不支持设置连接带宽。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '3072',
          ),
        ),
        7 => 
        array (
          'name' => 'ZoneAffinityEnabled',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否支持连接服务的终端节点域名就近解析。取值：

- **true**（默认值）：是。
- **false**：否。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        8 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '终端节点服务所在的地域ID。

您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        9 => 
        array (
          'name' => 'ServiceSupportIPv6',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '终端节点服务是否支持IPv6功能。取值：

- **true**：是。

- **false**（默认值）：否。',
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
            'description' => '请求ID。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '8D8992C1-6712-423C-BAC5-E5E817484C6B',
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
            'errorCode' => 'EndpointServiceNotFound',
            'errorMessage' => 'The specified Service does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'EndpointServiceLocked',
            'errorMessage' => 'The specified Service is locked.',
          ),
          2 => 
          array (
            'errorCode' => 'EndpointServiceOperationDenied',
            'errorMessage' => 'The specified operation of endpoint service is not allowed.',
          ),
          3 => 
          array (
            'errorCode' => 'IllegalParamFormat.%s',
            'errorMessage' => 'The param format of %s is illegal.',
          ),
          4 => 
          array (
            'errorCode' => 'OperationDenied.PrivateServiceDomainBusinessStatus',
            'errorMessage' => 'The operation is not allowed because of PrivateServiceDomainBusinessStatus.',
          ),
          5 => 
          array (
            'errorCode' => 'MissingParam.%s',
            'errorMessage' => 'The param of %s is missing.',
          ),
          6 => 
          array (
            'errorCode' => 'ServiceResourceNotSupportIpv6',
            'errorMessage' => 'The resource is not support ipv6.',
          ),
          7 => 
          array (
            'errorCode' => 'EndpointServiceDowngradeNotAllowed',
            'errorMessage' => 'The EndpointService is not allowed for downgrade.',
          ),
          8 => 
          array (
            'errorCode' => 'DependencyViolation.PrivateDnsName',
            'errorMessage' => 'The specified resource of %s depends on %s, so the operation cannot be completed.',
          ),
          9 => 
          array (
            'errorCode' => 'OperationDenied.PrivateDomainNotSupport',
            'errorMessage' => 'The operation is not allowed because of PrivateDomainNotSupport.',
          ),
          10 => 
          array (
            'errorCode' => 'OperationDenied.PrivateDomainStatusNotSupport',
            'errorMessage' => 'The operation is not allowed because of %s.',
          ),
          11 => 
          array (
            'errorCode' => 'Conflict.ServiceName',
            'errorMessage' => 'The ServiceName %s is conflict.',
          ),
          12 => 
          array (
            'errorCode' => 'InvalidParam.PrivateDnsName',
            'errorMessage' => 'The parameter of PrivateDnsName is illegal, which needs to end with aliyun.com, aliyun-inc.com, or aliyuncs.com.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"8D8992C1-6712-423C-BAC5-E5E817484C6B\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateVpcEndpointServiceAttributeResponse>\\n    <RequestId>8D8992C1-6712-423C-BAC5-E5E817484C6B</RequestId>\\n</UpdateVpcEndpointServiceAttributeResponse>","errorExample":""}]',
      'title' => '修改终端节点服务的属性',
      'summary' => '调用UpdateVpcEndpointServiceAttribute接口，修改终端节点服务的属性。',
      'description' => '- 修改终端节点服务的属性之前，请确保终端节点服务处于**Active**状态，您可以通过调用[GetVpcEndpointServiceAttribute](~~469330~~)接口，查询终端节点服务状态。
- **UpdateVpcEndpointServiceAttribute**接口不支持在同一个阿里云账号（主账号）下并发修改终端节点服务的属性。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetVpcEndpointServiceAttribute' => 
    array (
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
            'description' => '终端节点服务所属的地域ID。

您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-huhehaote',
          ),
        ),
        1 => 
        array (
          'name' => 'ServiceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '终端节点服务的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'epsrv-hp3vpx8yqxblby3i****',
          ),
        ),
        2 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '终端节点服务所属的地域ID。

您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-huhehaote',
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
              'Payer' => 
              array (
                'description' => '付费方，取值：

- **Endpoint**：服务使用方。
- **EndpointService**：服务提供方。',
                'type' => 'string',
                'example' => 'Endpoint',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '8D8992C1-6712-423C-BAC5-E5E817484C6B',
              ),
              'ServiceDescription' => 
              array (
                'description' => '终端节点服务的描述信息。',
                'type' => 'string',
                'example' => 'This is my EndpointService.',
              ),
              'CreateTime' => 
              array (
                'description' => '终端节点服务的创建时间。',
                'type' => 'string',
                'example' => '2020-01-02T19:11:12Z',
              ),
              'MaxBandwidth' => 
              array (
                'description' => '终端节点连接的最大带宽。单位：Mbps。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1024',
              ),
              'MinBandwidth' => 
              array (
                'description' => '终端节点连接的最小带宽。单位：Mbps。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '100',
              ),
              'ServiceDomain' => 
              array (
                'description' => '终端节点服务的服务域名。',
                'type' => 'string',
                'example' => 'epsrv-hp3vpx8yqxblby3i****.cn-huhehaote.privatelink.aliyuncs.com',
              ),
              'AutoAcceptEnabled' => 
              array (
                'description' => '是否自动接受终端节点连接，取值：

- **true**：自动接受终端节点连接。

- **false**：不自动接受终端节点连接。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ZoneAffinityEnabled' => 
              array (
                'description' => '是否支持连接服务的终端节点域名就近解析。取值：

- **true**（默认值）：是。
- **false**：否。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ServiceId' => 
              array (
                'description' => '终端节点服务的ID。',
                'type' => 'string',
                'example' => 'epsrv-hp3vpx8yqxblby3i****',
              ),
              'Zones' => 
              array (
                'description' => '服务资源所属的可用区列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '服务资源所属的可用区。',
                  'type' => 'string',
                  'example' => 'cn-huhehaote-b',
                ),
              ),
              'ServiceBusinessStatus' => 
              array (
                'description' => '终端节点服务的业务状态，取值：

- **Normal**：正常。

- **FinancialLocked**：欠费锁定。',
                'type' => 'string',
                'example' => 'Normal',
              ),
              'ServiceName' => 
              array (
                'description' => '终端节点服务的名称。',
                'type' => 'string',
                'example' => 'com.aliyuncs.privatelink.cn-huhehaote.epsrv-hp3vpx8yqxblby3i****',
              ),
              'ServiceStatus' => 
              array (
                'description' => '终端节点服务的状态，取值：

- **Creating**：创建中。

- **Pending**：修改中。

- **Active**：可用。

- **Deleting**：删除中。',
                'type' => 'string',
                'example' => 'Active',
              ),
              'ConnectBandwidth' => 
              array (
                'description' => '默认连接带宽峰值。单位：Mbps。取值范围：**100~10240**。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '3072',
              ),
              'RegionId' => 
              array (
                'description' => '终端节点服务所属的地域。',
                'type' => 'string',
                'example' => 'cn-huhehaote',
              ),
              'ServiceType' => 
              array (
                'description' => '终端节点类型。

仅取值： **Interface**，表示接口终端节点，您可以添加传统型负载均衡CLB（Classic Load Balancer）、应用型负载均衡ALB（Application Load Balancer）和网络型负载均衡NLB（Network Load Balancer ）的服务资源类型。',
                'type' => 'string',
                'example' => 'Interface',
              ),
              'ServiceResourceType' => 
              array (
                'description' => '服务资源类型，取值：

- **slb**：表示服务资源类型为传统型负载均衡CLB（Classic Load Balancer）。
-  **alb**：表示服务资源类型为应用型负载均衡ALB（Application Load Balancer）。
- **nlb** ：表示服务资源类型为网络型负载均衡NLB（Network Load Balancer ）。',
                'type' => 'string',
                'example' => 'slb',
              ),
              'ServiceSupportIPv6' => 
              array (
                'description' => '终端节点是否支持IPv6功能。取值：

- **true**：是。
- **false**（默认值）：否。',
                'type' => 'boolean',
                'example' => 'false',
              ),
              'ResourceGroupId' => 
              array (
                'description' => '资源组ID。',
                'type' => 'string',
                'example' => 'rg-acfmy*****',
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
            'errorCode' => 'EndpointServiceNotFound',
            'errorMessage' => 'The specified Service does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Payer\\": \\"Endpoint\\",\\n  \\"RequestId\\": \\"8D8992C1-6712-423C-BAC5-E5E817484C6B\\",\\n  \\"ServiceDescription\\": \\"This is my EndpointService.\\",\\n  \\"CreateTime\\": \\"2020-01-02T19:11:12Z\\",\\n  \\"MaxBandwidth\\": 1024,\\n  \\"MinBandwidth\\": 100,\\n  \\"ServiceDomain\\": \\"epsrv-hp3vpx8yqxblby3i****.cn-huhehaote.privatelink.aliyuncs.com\\",\\n  \\"AutoAcceptEnabled\\": true,\\n  \\"ZoneAffinityEnabled\\": true,\\n  \\"ServiceId\\": \\"epsrv-hp3vpx8yqxblby3i****\\",\\n  \\"Zones\\": [\\n    \\"cn-huhehaote-b\\"\\n  ],\\n  \\"ServiceBusinessStatus\\": \\"Normal\\",\\n  \\"ServiceName\\": \\"com.aliyuncs.privatelink.cn-huhehaote.epsrv-hp3vpx8yqxblby3i****\\",\\n  \\"ServiceStatus\\": \\"Active\\",\\n  \\"ConnectBandwidth\\": 3072,\\n  \\"RegionId\\": \\"cn-huhehaote\\",\\n  \\"ServiceType\\": \\"Interface\\",\\n  \\"ServiceResourceType\\": \\"slb\\",\\n  \\"ServiceSupportIPv6\\": false,\\n  \\"ResourceGroupId\\": \\"rg-acfmy*****\\"\\n}","errorExample":""},{"type":"xml","example":"<GetVpcEndpointServiceAttributeResponse>\\n    <Payer>Endpoint</Payer>\\n    <RequestId>8D8992C1-6712-423C-BAC5-E5E817484C6B</RequestId>\\n    <ServiceDescription>This is my EndpointService.</ServiceDescription>\\n    <CreateTime>2020-01-02T19:11:12Z</CreateTime>\\n    <MaxBandwidth>1024</MaxBandwidth>\\n    <MinBandwidth>100</MinBandwidth>\\n    <ServiceDomain>epsrv-hp3vpx8yqxblby3i****.cn-huhehaote.privatelink.aliyuncs.com</ServiceDomain>\\n    <AutoAcceptEnabled>true</AutoAcceptEnabled>\\n    <ZoneAffinityEnabled>true</ZoneAffinityEnabled>\\n    <ServiceId>epsrv-hp3vpx8yqxblby3i****</ServiceId>\\n    <Zones>cn-huhehaote-b</Zones>\\n    <ServiceBusinessStatus>Normal</ServiceBusinessStatus>\\n    <ServiceName>com.aliyuncs.privatelink.cn-huhehaote.epsrv-hp3vpx8yqxblby3i****</ServiceName>\\n    <ServiceStatus>Active</ServiceStatus>\\n    <ConnectBandwidth>1024</ConnectBandwidth>\\n    <RegionId>cn-huhehaote</RegionId>\\n    <ServiceType>Interface</ServiceType>\\n    <ServiceResourceType>slb</ServiceResourceType>\\n    <ServiceSupportIPv6>false</ServiceSupportIPv6>\\n    <ResourceGroupId>rg-acfmy*****</ResourceGroupId>\\n</GetVpcEndpointServiceAttributeResponse>","errorExample":""}]',
      'title' => '获取终端节点服务属性信息',
      'summary' => '调用GetVpcEndpointServiceAttribute接口，获取终端节点服务属性信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListVpcEndpointServices' => 
    array (
      'summary' => '调用ListVpcEndpointServices接口，查询终端节点服务列表。',
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
            'description' => '终端节点服务所属的地域ID。

您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。 ',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-huhehaote',
          ),
        ),
        1 => 
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
            'example' => 'FFmyTO70tTpLG6I3FmYAXGKPd****',
          ),
        ),
        2 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分批次查询时每次显示的条目数。取值范围：**1**~**50**，默认值：**50**。

',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '1000',
            'minimum' => '0',
            'example' => '50',
          ),
        ),
        3 => 
        array (
          'name' => 'ServiceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '终端节点服务的ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'epsrv-hp3vpx8yqxblby3i****',
          ),
        ),
        4 => 
        array (
          'name' => 'ServiceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '终端节点服务的名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'com.aliyuncs.privatelink.cn-huhehaote.epsrv-hp3vpx8yqxblby3i****',
          ),
        ),
        5 => 
        array (
          'name' => 'ResourceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务资源ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'lb-hp32z1wp5peaoox2q****',
          ),
        ),
        6 => 
        array (
          'name' => 'ServiceResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务资源类型，取值：

- **slb**：表示服务资源类型为传统型负载均衡CLB（Classic Load Balancer）。

- **alb**：表示服务资源类型为应用型负载均衡ALB（Application Load Balancer）。
- **nlb** ：表示服务资源类型为网络型负载均衡NLB（Network Load Balancer ）。',
            'type' => 'string',
            'required' => false,
            'example' => 'slb',
          ),
        ),
        7 => 
        array (
          'name' => 'AutoAcceptEnabled',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否自动接受终端节点连接，取值：

- **true**：自动接受终端节点连接。

- **false**（默认值）：不自动接受终端节点连接。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        8 => 
        array (
          'name' => 'ServiceStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '终端节点服务的状态，取值：

- **Creating**：创建中。

- **Pending**：修改中。

- **Active**：可用。

- **Deleting**：删除中。',
            'type' => 'string',
            'required' => false,
            'example' => 'Active',
          ),
        ),
        9 => 
        array (
          'name' => 'ServiceBusinessStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '终端节点服务的业务状态，取值：

- **Normal**：正常。

- **FinancialLocked**：欠费锁定。',
            'type' => 'string',
            'required' => false,
            'example' => 'Normal',
          ),
        ),
        10 => 
        array (
          'name' => 'ZoneAffinityEnabled',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否支持连接服务的终端节点域名就近解析。取值：

- **true**（默认值）：是。
- **false**：否。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        11 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '终端节点服务所属的地域ID。

您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。 ',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-huhehaote',
          ),
        ),
        12 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '标签列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签列表。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '实例的标签键。最多支持20个标签键。一旦传入该值，则不允许为空字符串。

最多支持64个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'FinanceDept',
                ),
                'Value' => 
                array (
                  'description' => '实例的标签值。最多支持20个标签值。一旦传入该值，可以为空字符串。

最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'FinanceJoshua',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
          ),
        ),
        13 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-acfmy*****',
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
              'Services' => 
              array (
                'description' => '终端节点服务集合。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '终端节点服务集合。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'AutoAcceptEnabled' => 
                    array (
                      'description' => '是否自动接受终端节点连接，取值：

- **true**：自动接受终端节点连接。

- **false**：不自动接受终端节点连接。',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'ServiceId' => 
                    array (
                      'description' => '终端节点服务的ID。',
                      'type' => 'string',
                      'example' => 'epsrv-hp3vpx8yqxblby3i****',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '终端节点服务的创建时间。',
                      'type' => 'string',
                      'example' => '2021-09-24T17:15:10Z',
                    ),
                    'MinBandwidth' => 
                    array (
                      'description' => '终端节点连接的最小带宽。单位：Mbps。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '100',
                    ),
                    'MaxBandwidth' => 
                    array (
                      'description' => '终端节点连接的最大带宽。单位：Mbps。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1024',
                    ),
                    'ServiceStatus' => 
                    array (
                      'description' => '终端节点服务的状态，取值：

- **Creating**：创建中。

- **Pending**：修改中。

- **Active**：可用。

- **Deleting**：删除中。',
                      'type' => 'string',
                      'example' => 'Active',
                    ),
                    'ZoneAffinityEnabled' => 
                    array (
                      'description' => '是否支持可用区就近解析，取值：

- **true**：是。
- **false**：否。',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'RegionId' => 
                    array (
                      'description' => '终端节点服务所属的地域。',
                      'type' => 'string',
                      'example' => 'cn-huhehaote',
                    ),
                    'ServiceDomain' => 
                    array (
                      'description' => '终端节点服务的服务域名。',
                      'type' => 'string',
                      'example' => 'epsrv-hp3vpx8yqxblby3i****.cn-huhehaote.privatelink.aliyuncs.com',
                    ),
                    'Payer' => 
                    array (
                      'description' => '付费方，取值：

- **Endpoint**：服务使用方。
- **EndpointService**：服务提供方。',
                      'type' => 'string',
                      'example' => 'Endpoint',
                    ),
                    'ServiceBusinessStatus' => 
                    array (
                      'description' => '终端节点服务的业务状态，取值：

- **Normal**：正常。

- **FinancialLocked**：欠费锁定。',
                      'type' => 'string',
                      'example' => 'Normal',
                    ),
                    'ConnectBandwidth' => 
                    array (
                      'description' => '默认连接带宽峰值。单位：Mbps。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1024',
                    ),
                    'ServiceName' => 
                    array (
                      'description' => '终端节点服务的名称。',
                      'type' => 'string',
                      'example' => 'com.aliyuncs.privatelink.cn-huhehaote.epsrv-hp3vpx8yqxblby3i****',
                    ),
                    'ServiceDescription' => 
                    array (
                      'description' => '终端节点服务的描述信息。',
                      'type' => 'string',
                      'example' => 'This is my EndpointService.',
                    ),
                    'ServiceResourceType' => 
                    array (
                      'description' => '服务资源类型，取值：

- **slb**：表示服务资源类型为传统型负载均衡CLB（Classic Load Balancer）。

- **alb**：表示服务资源类型为应用型负载均衡ALB（Application Load Balancer）。
- **nlb** ：表示服务资源类型为网络型负载均衡NLB（Network Load Balancer ）。',
                      'type' => 'string',
                      'example' => 'slb',
                    ),
                    'ServiceType' => 
                    array (
                      'description' => '终端节点服务类型，取值：

- **Interface**：表示**ServiceResourceType**为**slb**（传统型负载均衡CLB）、**alb**（应用型负载均衡ALB）、**nlb**（网络型负载均衡NLB）时的终端节点服务类型。',
                      'type' => 'string',
                      'example' => 'Interface',
                    ),
                    'ServiceSupportIPv6' => 
                    array (
                      'description' => '终端节点服务是否支持IPv6功能。取值：

- **true**：是。

- **false**：否。
',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'Tags' => 
                    array (
                      'description' => '标签列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '标签列表。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Key' => 
                          array (
                            'description' => '实例的标签键。',
                            'type' => 'string',
                            'example' => 'FinanceDept',
                          ),
                          'Value' => 
                          array (
                            'description' => '实例的标签值。',
                            'type' => 'string',
                            'example' => 'FinanceJoshua',
                          ),
                        ),
                      ),
                    ),
                    'ResourceGroupId' => 
                    array (
                      'description' => '资源组ID。',
                      'type' => 'string',
                      'example' => 'rg-acfmy*****',
                    ),
                  ),
                ),
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
                'example' => '0ED8D006-F706-4D23-88ED-E11ED28DCAC0',
              ),
              'MaxResults' => 
              array (
                'description' => '分批次查询时每次显示的条目数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '50',
              ),
              'TotalCount' => 
              array (
                'description' => '总记录数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '12',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Services\\": [\\n    {\\n      \\"AutoAcceptEnabled\\": true,\\n      \\"ServiceId\\": \\"epsrv-hp3vpx8yqxblby3i****\\",\\n      \\"CreateTime\\": \\"2021-09-24T17:15:10Z\\",\\n      \\"MinBandwidth\\": 100,\\n      \\"MaxBandwidth\\": 1024,\\n      \\"ServiceStatus\\": \\"Active\\",\\n      \\"ZoneAffinityEnabled\\": true,\\n      \\"RegionId\\": \\"cn-huhehaote\\",\\n      \\"ServiceDomain\\": \\"epsrv-hp3vpx8yqxblby3i****.cn-huhehaote.privatelink.aliyuncs.com\\",\\n      \\"Payer\\": \\"Endpoint\\",\\n      \\"ServiceBusinessStatus\\": \\"Normal\\",\\n      \\"ConnectBandwidth\\": 1024,\\n      \\"ServiceName\\": \\"com.aliyuncs.privatelink.cn-huhehaote.epsrv-hp3vpx8yqxblby3i****\\",\\n      \\"ServiceDescription\\": \\"This is my EndpointService.\\",\\n      \\"ServiceResourceType\\": \\"slb\\",\\n      \\"ServiceType\\": \\"Interface\\",\\n      \\"ServiceSupportIPv6\\": false,\\n      \\"Tags\\": [\\n        {\\n          \\"Key\\": \\"FinanceDept\\",\\n          \\"Value\\": \\"FinanceJoshua\\"\\n        }\\n      ],\\n      \\"ResourceGroupId\\": \\"rg-acfmy*****\\"\\n    }\\n  ],\\n  \\"NextToken\\": \\"FFmyTO70tTpLG6I3FmYAXGKPd****\\",\\n  \\"RequestId\\": \\"0ED8D006-F706-4D23-88ED-E11ED28DCAC0\\",\\n  \\"MaxResults\\": 50,\\n  \\"TotalCount\\": 12\\n}","errorExample":""},{"type":"xml","example":"<ListVpcEndpointServicesResponse>\\n    <Services>\\n        <AutoAcceptEnabled>true</AutoAcceptEnabled>\\n        <ServiceId>epsrv-hp3vpx8yqxblby3i****</ServiceId>\\n        <CreateTime>2021-09-24T17:15:10Z</CreateTime>\\n        <MinBandwidth>100</MinBandwidth>\\n        <MaxBandwidth>1024</MaxBandwidth>\\n        <ServiceStatus>Active</ServiceStatus>\\n        <ZoneAffinityEnabled>true</ZoneAffinityEnabled>\\n        <RegionId>cn-huhehaote</RegionId>\\n        <ServiceDomain>epsrv-hp3vpx8yqxblby3i****.cn-huhehaote.privatelink.aliyuncs.com</ServiceDomain>\\n        <Payer>Endpoint</Payer>\\n        <ServiceBusinessStatus>Normal</ServiceBusinessStatus>\\n        <ConnectBandwidth>1024</ConnectBandwidth>\\n        <ServiceName>com.aliyuncs.privatelink.cn-huhehaote.epsrv-hp3vpx8yqxblby3i****</ServiceName>\\n        <ServiceDescription>This is my EndpointService.</ServiceDescription>\\n        <ServiceResourceType>slb</ServiceResourceType>\\n        <ServiceType>Interface</ServiceType>\\n        <ServiceSupportIPv6>false</ServiceSupportIPv6>\\n        <Tags>\\n            <Key>FinanceDept</Key>\\n            <Value>FinanceJoshua</Value>\\n        </Tags>\\n        <ResourceGroupId>rg-acfmy*****</ResourceGroupId>\\n    </Services>\\n    <NextToken>FFmyTO70tTpLG6I3FmYAXGKPd****</NextToken>\\n    <RequestId>0ED8D006-F706-4D23-88ED-E11ED28DCAC0</RequestId>\\n    <MaxResults>50</MaxResults>\\n</ListVpcEndpointServicesResponse>","errorExample":""}]',
      'title' => '查询终端节点服务列表',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteVpcEndpointService' => 
    array (
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
            'description' => '终端节点服务所属的地域ID。您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。 ',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'eu-west-1',
          ),
        ),
        1 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '
客户端Token，用于保证请求的幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。**ClientToken**只支持ASCII字符。',
            'type' => 'string',
            'required' => false,
            'example' => '0c593ea1-3bea-11e9-b96b-88e9fe637760',
          ),
        ),
        2 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '
是否只预检此次请求。取值：
- **true**：发送检查请求，不会删除资源。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        3 => 
        array (
          'name' => 'ServiceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要删除的终端节点服务的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'epsrv-hp3vpx8yqxblby3i****',
          ),
        ),
        4 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '终端节点服务所属的地域ID。您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。 ',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'eu-west-1',
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
                'example' => '0ED8D006-F706-4D23-88ED-E11ED28DCAC0',
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
            'errorCode' => 'EndpointServiceNotFound',
            'errorMessage' => 'The specified Service does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'EndpointServiceOperationDenied',
            'errorMessage' => 'The specified operation of endpoint service is not allowed.',
          ),
          2 => 
          array (
            'errorCode' => 'EndpointServiceDependenceViolation',
            'errorMessage' => 'The specified EndpointService already contains a resource.',
          ),
          3 => 
          array (
            'errorCode' => 'EndpointServiceConnectionDependence',
            'errorMessage' => 'You cannot delete EndpointService with Endpoint connected.',
          ),
          4 => 
          array (
            'errorCode' => 'DeleteFailedDueToEndpointExist',
            'errorMessage' => 'The specified EndpointService id deleted failed , due to EndpointExist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"0ED8D006-F706-4D23-88ED-E11ED28DCAC0\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteVpcEndpointServiceResponse>\\n    <RequestId>0ED8D006-F706-4D23-88ED-E11ED28DCAC0</RequestId>\\n</DeleteVpcEndpointServiceResponse>","errorExample":""}]',
      'title' => '删除终端节点服务',
      'summary' => '调用DeleteVpcEndpointService接口，删除终端节点服务。',
      'description' => '- 删除终端节点服务之前，请先断开终端节点连接并移除服务资源。
- **DeleteVpcEndpointService**接口属于异步接口，即系统会返回一个请求ID，但终端节点服务尚未删除，系统后台的删除任务仍在进行。您可以调用[GetVpcEndpointServiceAttribute](~~183542~~)查询终端节点服务的删除状态：
    - 当终端节点服务处于**Deleting**状态时，表示终端节点服务正在删除中。
  - 当查询不到该终端节点服务时，表示终端节点服务删除完成。
- **DeleteVpcEndpointService**接口不支持在同一个阿里云账号（主账号）下并发删除终端节点服务。',
    ),
    'AddUserToVpcEndpointService' => 
    array (
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
            'description' => '要添加服务白名单的地域ID。您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'eu-west-1',
          ),
        ),
        1 => 
        array (
          'name' => 'UserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务白名单账号ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'docRequired' => false,
            'maximum' => '9223372036854775807',
            'minimum' => '0',
            'example' => '132193271328****',
          ),
        ),
        2 => 
        array (
          'name' => 'ServiceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '终端节点服务的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'epsrv-hp3vpx8yqxblby3i****',
          ),
        ),
        3 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '
是否只预检此次请求。取值：
- **true**：发送检查请求，不会添加服务白名单。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        4 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端Token，用于保证请求的幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。**ClientToken**只支持ASCII字符。',
            'type' => 'string',
            'required' => false,
            'example' => '0c593ea1-3bea-11e9-b96b-88e9fe637760',
          ),
        ),
        5 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要添加服务白名单的地域ID。您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'eu-west-1',
          ),
        ),
        6 => 
        array (
          'name' => 'UserARN',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'ARN格式的用户白名单。',
            'type' => 'string',
            'required' => false,
            'example' => 'acs:ram:*:<account-id>:*',
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
                'example' => '0ED8D006-F706-4D23-88ED-E11ED28DCAC0',
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
            'errorCode' => 'EndpointServiceNotFound',
            'errorMessage' => 'The specified Service does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'MissingParam.UserArn',
            'errorMessage' => 'The param of UserArn is missing.',
          ),
          2 => 
          array (
            'errorCode' => 'Mismatch.UserIdAndUserArn',
            'errorMessage' => 'The %s and %s are mismatched.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"0ED8D006-F706-4D23-88ED-E11ED28DCAC0\\"\\n}","errorExample":""},{"type":"xml","example":"<AddUserToVpcEndpointServiceResponse>\\n    <RequestId>0ED8D006-F706-4D23-88ED-E11ED28DCAC0</RequestId>\\n</AddUserToVpcEndpointServiceResponse>","errorExample":""}]',
      'title' => '添加服务白名单',
      'summary' => '调用AddUserToVpcEndpointService接口，为终端节点服务添加服务白名单。',
      'description' => '- 添加服务白名单之前，请确保终端节点服务处于**Active**状态，您可以通过调用[GetVpcEndpointServiceAttribute](~~469330~~)接口，查询终端节点服务状态。
- **AddUserToVpcEndpointService**接口不支持在同一个阿里云账号（主账号）下并发添加服务白名单。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListVpcEndpointServiceUsers' => 
    array (
      'summary' => '调用ListVpcEndpointServiceUsers接口，查询终端节点服务的服务白名单。',
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
            'description' => '要查询的终端节点服务所属的地域ID。

您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。 ',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-huhehaote',
          ),
        ),
        1 => 
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
            'example' => 'caeba0bbb2be03f84eb48b699f0a4883',
          ),
        ),
        2 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页大小，取值范围：**1~50**，默认值：**50**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '1000',
            'minimum' => '0',
            'example' => '50',
            'default' => '50',
          ),
        ),
        3 => 
        array (
          'name' => 'ServiceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '终端节点服务的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'epsrv-hp3vpx8yqxblby3i****',
          ),
        ),
        4 => 
        array (
          'name' => 'UserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务白名单阿里云账号ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'maximum' => '9223372036854775807',
            'minimum' => '0',
            'example' => '12345678',
          ),
        ),
        5 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要查询的终端节点服务所属的地域ID。

您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。 ',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-huhehaote',
          ),
        ),
        6 => 
        array (
          'name' => 'UserListType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务白名单用户列表类型：
- Users
- UserARNs',
            'type' => 'string',
            'required' => false,
            'example' => 'Users',
            'default' => 'Users',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
          ),
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
                'example' => 'caeba0bbb2be03f84eb48b699f0a4883',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '0ED8D006-F706-4D23-88ED-E11ED28DCAC0',
              ),
              'MaxResults' => 
              array (
                'description' => '分页大小。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '50',
              ),
              'Users' => 
              array (
                'description' => '服务白名单阿里云账号集合。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'UserId' => 
                    array (
                      'description' => '服务白名单阿里云账号ID。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '12345678',
                    ),
                  ),
                ),
              ),
              'UserARNs' => 
              array (
                'description' => 'ARN格式的用户白名单列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'UserARN' => 
                    array (
                      'description' => 'ARN格式的用户白名单。',
                      'type' => 'string',
                      'example' => 'acs:ram:*::*',
                    ),
                  ),
                ),
              ),
              'TotalCount' => 
              array (
                'description' => '总记录数。',
                'type' => 'string',
                'example' => '3',
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
            'errorCode' => 'EndpointServiceNotFound',
            'errorMessage' => 'The specified Service does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"NextToken\\": \\"caeba0bbb2be03f84eb48b699f0a4883\\",\\n  \\"RequestId\\": \\"0ED8D006-F706-4D23-88ED-E11ED28DCAC0\\",\\n  \\"MaxResults\\": 50,\\n  \\"Users\\": [\\n    {\\n      \\"UserId\\": 12345678\\n    }\\n  ],\\n  \\"UserARNs\\": [\\n    {\\n      \\"UserARN\\": \\"acs:ram:*::*\\"\\n    }\\n  ],\\n  \\"TotalCount\\": \\"3\\"\\n}","errorExample":""},{"type":"xml","example":"<ListVpcEndpointServiceUsersResponse>\\n    <NextToken>caeba0bbb2be03f84eb48b699f0a4883</NextToken>\\n    <RequestId>0ED8D006-F706-4D23-88ED-E11ED28DCAC0</RequestId>\\n    <MaxResults>50</MaxResults>\\n    <Users>\\n        <UserId>12345678</UserId>\\n    </Users>\\n    <UserARNs/>\\n</ListVpcEndpointServiceUsersResponse>","errorExample":""}]',
      'title' => '查询终端节点服务的服务白名单',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'RemoveUserFromVpcEndpointService' => 
    array (
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
            'description' => '要移除服务白名单的地域ID。您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。 ',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'eu-west-1',
          ),
        ),
        1 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。**ClientToken**只支持ASCII字符。',
            'type' => 'string',
            'required' => false,
            'example' => '0c593ea1-3bea-11e9-b96b-88e9fe637760',
          ),
        ),
        2 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只预检此次请求，取值：

- **true**：发送检查请求，不会移除服务白名单。检查项包括AccessKey是否有效、RAM用户的授权情况和是否填写了必需参数。如果检查不通过，则返回对应错误。如果检查通过，会返回错误码`DryRunOperation`。

- **false**（默认值）：发送正常请求，通过检查后返回2xx HTTP状态码并直接移除服务白名单。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        3 => 
        array (
          'name' => 'UserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要移除的服务白名单中的账号ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'docRequired' => true,
            'maximum' => '9223372036854775807',
            'minimum' => '0',
            'example' => '12345678',
          ),
        ),
        4 => 
        array (
          'name' => 'ServiceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '终端节点服务的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'epsrv-hp3vpx8yqxblby3i****',
          ),
        ),
        5 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要移除服务白名单的地域ID。您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。 ',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'eu-west-1',
          ),
        ),
        6 => 
        array (
          'name' => 'UserARN',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'ARN格式的用户白名单。',
            'type' => 'string',
            'required' => false,
            'example' => 'acs:ram:*:<account-id>:*',
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
                'example' => '0ED8D006-F706-4D23-88ED-E11ED28DCAC0',
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
            'errorCode' => 'EndpointServiceNotFound',
            'errorMessage' => 'The specified Service does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'MissingParam.UserArn',
            'errorMessage' => 'The param of UserArn is missing.',
          ),
          2 => 
          array (
            'errorCode' => 'Mismatch.UserIdAndUserArn',
            'errorMessage' => 'The %s and %s are mismatched.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"0ED8D006-F706-4D23-88ED-E11ED28DCAC0\\"\\n}","errorExample":""},{"type":"xml","example":"<RemoveUserFromVpcEndpointServiceResponse>\\n    <RequestId>0ED8D006-F706-4D23-88ED-E11ED28DCAC0</RequestId>\\n</RemoveUserFromVpcEndpointServiceResponse>","errorExample":""}]',
      'title' => '移除服务白名单',
      'summary' => '调用RemoveUserFromVpcEndpointService接口，移除终端节点服务的服务白名单。',
      'description' => '- 移除服务白名单之前，请确保终端节点服务处于**Active**状态，您可以通过调用[GetVpcEndpointServiceAttribute](~~469330~~)接口，查询终端节点服务状态。
- **RemoveUserFromVpcEndpointService**接口不支持在同一个终端节点服务ID下并发移除服务白名单。',
    ),
    'UpdateVpcEndpointServiceResourceAttribute' => 
    array (
      'summary' => '调用UpdateVpcEndpointServiceResourceAttribute接口，修改终端节点服务资源是否自动分配。',
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
            'description' => '要修改服务资源的地域ID。

您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端Token，用于保证请求的幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。**ClientToken**只支持ASCII字符。',
            'type' => 'string',
            'required' => false,
            'example' => '0c593ea1-3bea-11e9-b96b-88e9fe637760',
          ),
        ),
        2 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '
是否只预检此次请求。取值：
- **true**：发送检查请求，不会修改终端节点服务资源的相关属性。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        3 => 
        array (
          'name' => 'ServiceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '终端节点服务的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'epsrv-hp3vpx8yqxblby3i****',
          ),
        ),
        4 => 
        array (
          'name' => 'ResourceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务资源ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'lb-hp32z1wp5peaoox2q****',
          ),
        ),
        5 => 
        array (
          'name' => 'ZoneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务资源所属的可用区。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou-i',
          ),
        ),
        6 => 
        array (
          'name' => 'AutoAllocatedEnabled',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否允许资源自动分配，取值：

- **true**：允许资源自动分配。

- **false**：不允许资源自动分配。',
            'type' => 'boolean',
            'required' => true,
            'example' => 'true',
          ),
        ),
        7 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要修改服务资源的地域ID。

您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
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
                'example' => '0ED8D006-F706-4D23-88ED-E11ED28DCAC0',
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
            'errorCode' => 'EndpointServiceNotFound',
            'errorMessage' => 'The specified Service does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'EndpointServiceLocked',
            'errorMessage' => 'The specified Service is locked.',
          ),
          2 => 
          array (
            'errorCode' => 'EndpointServiceOperationDenied',
            'errorMessage' => 'The specified operation of endpoint service is not allowed.',
          ),
          3 => 
          array (
            'errorCode' => 'EndpointServiceResourceNotFound',
            'errorMessage' => 'The specified service resource is not found.',
          ),
          4 => 
          array (
            'errorCode' => 'ResourceAutoAllocateViolation',
            'errorMessage' => 'The specified endpoint service must have at least one automatically allocated resource in one zone.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"0ED8D006-F706-4D23-88ED-E11ED28DCAC0\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateVpcEndpointServiceResourceAttributeResponse>\\n    <RequestId>0ED8D006-F706-4D23-88ED-E11ED28DCAC0</RequestId>\\n</UpdateVpcEndpointServiceResourceAttributeResponse>","errorExample":""}]',
      'title' => '修改终端节点服务资源的属性',
      'description' => '- 修改终端节点服务资源的属性之前，请确保终端节点服务处于**Active**状态，您可以通过调用[GetVpcEndpointServiceAttribute](~~469330~~)接口，查询终端节点服务状态。
- **UpdateVpcEndpointServiceResourceAttribute**接口不支持在同一个终端节点服务ID下并发修改终端节点服务资源的相关属性。',
    ),
    'AttachResourceToVpcEndpointService' => 
    array (
      'summary' => '调用AttachResourceToVpcEndpointService接口，为终端节点服务添加服务资源。',
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
            'description' => '要添加服务资源的终端节点服务所属的地域ID。

您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。 ',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务资源类型。取值：

- **slb**：表示服务资源类型为传统型负载均衡CLB（Classic Load Balancer）。
- **alb**：表示服务资源类型为应用型负载均衡ALB（Application Load Balancer）。
- **nlb**：表示服务资源类型为网络型负载均衡NLB（Network Load Balancer ）。

> 不支持访问NLB的TCPSSL类型监听。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'slb',
          ),
        ),
        2 => 
        array (
          'name' => 'ResourceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务资源ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'lb-hp32z1wp5peaoox2q****',
          ),
        ),
        3 => 
        array (
          'name' => 'ZoneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务资源所属的可用区。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou-j',
          ),
        ),
        4 => 
        array (
          'name' => 'ServiceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要添加服务资源的终端节点服务。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'epsrv-hp3vpx8yqxblby3i****',
          ),
        ),
        5 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会添加服务资源。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        6 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端Token，用于保证请求的幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。**ClientToken**只支持ASCII字符。',
            'type' => 'string',
            'required' => false,
            'example' => '0c593ea1-3bea-11e9-b96b-88e9fe637760',
          ),
        ),
        7 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要添加服务资源的终端节点服务所属的地域ID。

您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。 ',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
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
                'example' => '0ED8D006-F706-4D23-88ED-E11ED28DCAC0',
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
            'errorCode' => 'EndpointServiceNotFound',
            'errorMessage' => 'The specified Service does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'EndpointServiceOperationDenied',
            'errorMessage' => 'The specified operation of endpoint service is not allowed.',
          ),
          2 => 
          array (
            'errorCode' => 'EndpointServiceResourceExist',
            'errorMessage' => 'The specified resource already exists.',
          ),
          3 => 
          array (
            'errorCode' => 'LoadBalancerNotFound',
            'errorMessage' => 'The specified load balancer does not exist.',
          ),
          4 => 
          array (
            'errorCode' => 'LoadBalancerNotSupportPrivateLink',
            'errorMessage' => 'The specified SLB does not support PrivateLink.',
          ),
          5 => 
          array (
            'errorCode' => 'AlbNotFound',
            'errorMessage' => 'The specified Alb does not exist.',
          ),
          6 => 
          array (
            'errorCode' => 'EndpointServiceResourceTypeNotSupport',
            'errorMessage' => 'The specified resource type is not supported.',
          ),
          7 => 
          array (
            'errorCode' => 'QuotaMisMatched',
            'errorMessage' => 'The resource you applied for has exceeded the quota.',
          ),
          8 => 
          array (
            'errorCode' => 'VSwitchNotFound',
            'errorMessage' => 'The specified VSwitch does not exist.',
          ),
          9 => 
          array (
            'errorCode' => 'ResourceNotFound.NatGateway',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
          10 => 
          array (
            'errorCode' => 'Mismatch.ResourceType',
            'errorMessage' => 'The %s is mismatched for %s and %s.',
          ),
          11 => 
          array (
            'errorCode' => 'EndpointServiceNotSupportedZone',
            'errorMessage' => 'The specified endpoint service does not support the zone.',
          ),
          12 => 
          array (
            'errorCode' => 'ServiceResourceNotSupportIpv6',
            'errorMessage' => 'The resource is not support ipv6.',
          ),
          13 => 
          array (
            'errorCode' => 'EndpointServiceResourceTypeNotEqual',
            'errorMessage' => 'the service resource type not equal request type.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"0ED8D006-F706-4D23-88ED-E11ED28DCAC0\\"\\n}","errorExample":""},{"type":"xml","example":"<AttachResourceToVpcEndpointServiceResponse>\\n    <RequestId>0ED8D006-F706-4D23-88ED-E11ED28DCAC0</RequestId>\\n</AttachResourceToVpcEndpointServiceResponse>","errorExample":""}]',
      'title' => '为终端节点服务添加服务资源',
      'description' => '- 为终端节点服务添加服务资源之前，请确保终端节点服务处于**Active**状态，您可以通过调用[GetVpcEndpointServiceAttribute](~~469330~~)接口，查询终端节点服务状态。
- **AttachResourceToVpcEndpointService**接口不支持在同一个终端节点服务实例下并发添加服务资源。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListVpcEndpointServiceResources' => 
    array (
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
            'description' => '要查询的服务资源的地域ID。

您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。 ',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-huhehaote',
          ),
        ),
        1 => 
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
            'example' => 'FFmyTO70tTpLG6I3FmYAXGKPd****',
          ),
        ),
        2 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分批次查询时每次显示的条目数。取值范围：**1**~**50**，默认值：**50**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '1000',
            'minimum' => '0',
            'example' => '50',
            'default' => '50',
          ),
        ),
        3 => 
        array (
          'name' => 'ServiceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '终端节点服务的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'epsrv-hp3vpx8yqxblby3i****',
          ),
        ),
        4 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要查询的服务资源的地域ID。

您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。 ',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-huhehaote',
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
                'example' => '0ED8D006-F706-4D23-88ED-E11ED28DCAC0',
              ),
              'MaxResults' => 
              array (
                'description' => '分批次查询时每次显示的条目数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '50',
              ),
              'Resources' => 
              array (
                'description' => '服务资源信息集合。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '服务资源所属的VPC。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'VpcId' => 
                    array (
                      'description' => '服务资源所属的VPC。',
                      'type' => 'string',
                      'example' => 'vpc-hp356stwkxg3fn2xe****',
                    ),
                    'VSwitchId' => 
                    array (
                      'description' => '服务资源所属的交换机。',
                      'type' => 'string',
                      'example' => 'vsw-hp3uf6045ljdhd5zr****',
                    ),
                    'ResourceType' => 
                    array (
                      'description' => '服务资源的类型。

- **slb**：表示服务资源类型为传统型负载均衡CLB（Classic Load Balancer）。

- **alb**：表示服务资源类型为应用型负载均衡ALB（Application Load Balancer）。

-  **nlb**：表示服务资源类型为网络型负载均衡NLB（Network Load Balancer ）。',
                      'type' => 'string',
                      'example' => 'slb',
                    ),
                    'ZoneId' => 
                    array (
                      'description' => '服务资源所属的可用区。',
                      'type' => 'string',
                      'example' => 'cn-huhehaote-b',
                    ),
                    'Ip' => 
                    array (
                      'description' => '服务资源的IP地址。',
                      'type' => 'string',
                      'example' => '192.168.10.23',
                    ),
                    'ResourceId' => 
                    array (
                      'description' => '服务资源ID。',
                      'type' => 'string',
                      'example' => 'lb-hp32z1wp5peaoox2q****',
                    ),
                    'RegionId' => 
                    array (
                      'description' => '服务资源所属的地域。',
                      'type' => 'string',
                      'example' => 'cn-huhehaote',
                    ),
                    'RelatedEndpointCount' => 
                    array (
                      'description' => '服务资源关联的终端节点的连接数量。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '10',
                    ),
                    'RelatedDeprecatedEndpointCount' => 
                    array (
                      'description' => '平滑迁移场景下，作为被替换的服务资源关联的终端节点的连接数量。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '10',
                    ),
                    'AutoAllocatedEnabled' => 
                    array (
                      'description' => '是否允许自动分配，取值：

- **true**：是。

- **false**：否。',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'ResourceSupportIPv6' => 
                    array (
                      'description' => '终端节点服务是否支持IPv6功能。取值：

- **true**：是。

- **false**：否。
',
                      'type' => 'boolean',
                      'example' => 'false',
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
            'errorCode' => 'EndpointServiceNotFound',
            'errorMessage' => 'The specified Service does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"NextToken\\": \\"FFmyTO70tTpLG6I3FmYAXGKPd****\\",\\n  \\"RequestId\\": \\"0ED8D006-F706-4D23-88ED-E11ED28DCAC0\\",\\n  \\"MaxResults\\": 50,\\n  \\"Resources\\": [\\n    {\\n      \\"VpcId\\": \\"vpc-hp356stwkxg3fn2xe****\\",\\n      \\"VSwitchId\\": \\"vsw-hp3uf6045ljdhd5zr****\\",\\n      \\"ResourceType\\": \\"slb\\",\\n      \\"ZoneId\\": \\"cn-huhehaote-b\\",\\n      \\"Ip\\": \\"192.168.10.23\\",\\n      \\"ResourceId\\": \\"lb-hp32z1wp5peaoox2q****\\",\\n      \\"RegionId\\": \\"cn-huhehaote\\",\\n      \\"RelatedEndpointCount\\": 10,\\n      \\"RelatedDeprecatedEndpointCount\\": 10,\\n      \\"AutoAllocatedEnabled\\": false,\\n      \\"ResourceSupportIPv6\\": false\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListVpcEndpointServiceResourcesResponse>\\n    <NextToken>FFmyTO70tTpLG6I3FmYAXGKPd****</NextToken>\\n    <RequestId>0ED8D006-F706-4D23-88ED-E11ED28DCAC0</RequestId>\\n    <MaxResults>50</MaxResults>\\n    <Resources>\\n        <VpcId>vpc-hp356stwkxg3fn2xe****</VpcId>\\n        <VSwitchId>vsw-hp3uf6045ljdhd5zr****</VSwitchId>\\n        <ResourceType>slb</ResourceType>\\n        <ZoneId>cn-huhehaote-b</ZoneId>\\n        <Ip>192.168.10.23</Ip>\\n        <ResourceId>lb-hp32z1wp5peaoox2q****</ResourceId>\\n        <RegionId>cn-huhehaote</RegionId>\\n        <RelatedEndpointCount>10</RelatedEndpointCount>\\n        <RelatedDeprecatedEndpointCount>10</RelatedDeprecatedEndpointCount>\\n        <AutoAllocatedEnabled>false</AutoAllocatedEnabled>\\n        <ResourceSupportIPv6>false</ResourceSupportIPv6>\\n    </Resources>\\n</ListVpcEndpointServiceResourcesResponse>","errorExample":""}]',
      'title' => '查询终端节点服务中的服务资源',
      'summary' => '调用ListVpcEndpointServiceResources接口查询终端节点服务中的服务资源。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DetachResourceFromVpcEndpointService' => 
    array (
      'summary' => '调用DetachResourceFromVpcEndpointService接口，移除终端节点服务中的服务资源。',
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
            'description' => '要移除服务资源的终端节点服务所属的地域ID。您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。 ',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务资源类型，取值：

- **slb**：表示服务资源类型为专有网络类型且支持PrivateLink功能的传统型负载均衡CLB（Classic Load Balancer）实例。

- **alb**：表示服务资源类型为私网类型且支持PrivateLink功能的应用型负载均衡ALB（Application Load Balancer）实例。
 
- **nlb**：表示服务资源类型为私网类型且支持PrivateLink功能的网络型负载均衡NLB（Network Load Balancer ）实例。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'slb',
          ),
        ),
        2 => 
        array (
          'name' => 'ResourceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务资源ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'lb-hp32z1wp5peaoox2q****',
          ),
        ),
        3 => 
        array (
          'name' => 'ZoneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要移除服务资源的终端节点服务所属的可用区。您可以通过调用[describeregions](~~120468~~)接口获取地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou-c',
          ),
        ),
        4 => 
        array (
          'name' => 'ServiceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要移除服务资源的终端节点服务的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'epsrv-hp3vpx8yqxblby3i****',
          ),
        ),
        5 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会移除服务资源。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        6 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端Token，用于保证请求的幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。**ClientToken**只支持ASCII字符。',
            'type' => 'string',
            'required' => false,
            'example' => '0c593ea1-3bea-11e9-b96b-88e9fe637760',
          ),
        ),
        7 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要移除服务资源的终端节点服务所属的地域ID。您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。 ',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
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
                'example' => '0ED8D006-F706-4D23-88ED-E11ED28DCAC0',
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
            'errorCode' => 'EndpointServiceNotFound',
            'errorMessage' => 'The specified Service does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'EndpointServiceConnectionDependence',
            'errorMessage' => 'You cannot delete EndpointService with Endpoint connected.',
          ),
          2 => 
          array (
            'errorCode' => 'EndpointServiceResourceNotFound',
            'errorMessage' => 'The specified service resource is not found.',
          ),
          3 => 
          array (
            'errorCode' => 'EndpointServiceResourceCannotRemove',
            'errorMessage' => 'The service resource cannot be removed.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"0ED8D006-F706-4D23-88ED-E11ED28DCAC0\\"\\n}","errorExample":""},{"type":"xml","example":"<DetachResourceFromVpcEndpointServiceResponse>\\n    <RequestId>0ED8D006-F706-4D23-88ED-E11ED28DCAC0</RequestId>\\n</DetachResourceFromVpcEndpointServiceResponse>","errorExample":""}]',
      'title' => '移除终端节点服务中的服务资源',
      'description' => '- 移除终端节点服务中的服务资源之前，请确保终端节点服务处于**Active**状态，您可以通过调用[GetVpcEndpointServiceAttribute](~~469330~~)接口，查询终端节点服务状态。
- **DetachResourceFromVpcEndpointService**接口不支持在同一个终端节点服务实例下并发移除服务资源。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteVpcEndpoint' => 
    array (
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
            'description' => '要删除的终端节点所属的地域ID。您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。 ',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'eu-west-1',
          ),
        ),
        1 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端Token，用于保证请求的幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。**ClientToken**只支持ASCII字符。',
            'type' => 'string',
            'required' => false,
            'example' => '0c593ea1-3bea-11e9-b96b-88e9fe637760',
          ),
        ),
        2 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会删除终端节点。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        3 => 
        array (
          'name' => 'EndpointId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要删除的终端节点ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ep-hp33b2e43fays7s8****',
          ),
        ),
        4 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要删除的终端节点所属的地域ID。您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。 ',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'eu-west-1',
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
                'example' => '8D8992C1-6712-423C-BAC5-E5E817484C6B',
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
            'errorCode' => 'OperationDenied.EndpointProtected',
            'errorMessage' => 'The operation is not allowed because of EndpointProtected.',
          ),
          1 => 
          array (
            'errorCode' => 'EndpointOperationDenied',
            'errorMessage' => 'The specified operation of endpoint is not allowed.',
          ),
          2 => 
          array (
            'errorCode' => 'EndpointDependenceViolation',
            'errorMessage' => 'The specified endpoint has dependent zone(s).',
          ),
          3 => 
          array (
            'errorCode' => 'EndpointNotFound',
            'errorMessage' => 'The specified Endpoint does not exist.',
          ),
          4 => 
          array (
            'errorCode' => 'EndpointProtected',
            'errorMessage' => 'The specified Endpoint is protected.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"8D8992C1-6712-423C-BAC5-E5E817484C6B\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteVpcEndpointResponse>\\n    <RequestId>8D8992C1-6712-423C-BAC5-E5E817484C6B</RequestId>\\n</DeleteVpcEndpointResponse>","errorExample":""}]',
      'title' => '删除终端节点',
      'summary' => '调用DeleteVpcEndpoint接口，删除终端节点。',
      'description' => '- 删除终端节点之前，请先删除终端节点中已添加的可用区。
- **DeleteVpcEndpoint**接口属于异步接口，即系统会返回一个请求ID，但该终端节点尚未删除完成，系统后台删除任务仍在进行中。您可以调用[GetVpcEndpointAttribute](~~183568~~)查询终端节点的删除状态：

  - 当终端节点处于**Deleting**状态时，表示终端节点正在删除中。
  - 当查询不到指定的终端节点时，表示终端节点删除成功。',
    ),
    'CreateVpcEndpoint' => 
    array (
      'summary' => '调用CreateVpcEndpoint接口，创建终端节点。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '终端节点所在的地域ID。

您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。 ',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-huhehaote',
          ),
        ),
        1 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端Token，用于保证请求的幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。**ClientToken**只支持ASCII字符。
',
            'type' => 'string',
            'required' => false,
            'example' => '0c593ea1-3bea-11e9-b96b-88e9fe637760',
          ),
        ),
        2 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会创建终端节点。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        3 => 
        array (
          'name' => 'EndpointName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '终端节点名称。

长度为2~128个字符，以英文字母或中文开头，可包含数字、短划线（-）和下划线（_）。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        4 => 
        array (
          'name' => 'EndpointType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '终端节点类型。

仅取值： **Interface**，表示接口终端节点，您可以添加应用型负载均衡ALB（Application Load Balancer）、传统型负载均衡CLB（Classic Load Balancer）和网络型负载均衡NLB（Network Load Balancer ）的服务资源类型。',
            'type' => 'string',
            'required' => false,
            'example' => 'Interface',
          ),
        ),
        5 => 
        array (
          'name' => 'ZonePrivateIpAddressCount',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每个可用区ENI的私网IP的数量。仅取值：**1**。
',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1',
          ),
        ),
        6 => 
        array (
          'name' => 'EndpointDescription',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '终端节点描述。

描述长度为2~256个字符，开头不能为`http://`和`https://`。',
            'type' => 'string',
            'required' => false,
            'example' => 'This is my Endpoint.',
          ),
        ),
        7 => 
        array (
          'name' => 'VpcId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '终端节点所属的专有网络。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'vpc-hp356stwkxg3fn2xe****',
          ),
        ),
        8 => 
        array (
          'name' => 'ServiceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '终端节点关联的终端节点服务。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'epsrv-hp3xdsq46ael67lo****',
          ),
        ),
        9 => 
        array (
          'name' => 'ServiceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '终端节点关联的终端节点服务的名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'com.aliyuncs.privatelink.cn-huhehaote.epsrv-hp3vpx8yqxblby3i****',
          ),
        ),
        10 => 
        array (
          'name' => 'Zone',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '终端节点可用区列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '当前地域下的可用区ID。

系统将在您指定的可用区下创建资源。',
              'type' => 'object',
              'properties' => 
              array (
                'VSwitchId' => 
                array (
                  'description' => '在可用区内要创建终端节点网卡的交换机。
您最多可以设置10个交换机。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'vsw-hp3uf6045ljdhd5zr****',
                ),
                'ZoneId' => 
                array (
                  'description' => '终端节点服务对应的可用区。

您最多可以设置10个可用区。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'cn-huhehaote-b',
                ),
                'ip' => 
                array (
                  'description' => '指定终端节点可用区的IP。

您最多可以指定10个IP。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '192.168.XX.XX',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 10,
          ),
        ),
        11 => 
        array (
          'name' => 'SecurityGroupId',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '终端节点网卡关联的安全组列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '终端节点网卡关联的安全组，安全组可以管控VPC到终端节点网卡的数据通信。',
              'type' => 'string',
              'required' => false,
              'example' => 'sg-bp1fg655nh68xyz9****',
            ),
            'required' => false,
            'example' => 'sg-hp33bw6ynvm2yb0e****',
            'maxItems' => 10,
          ),
        ),
        12 => 
        array (
          'name' => 'ProtectedEnabled',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启托管保护，STS调用方式下生效。取值：
 
- **true**：开启。开启托管保护后，只有和创建时相同的用户才能通过STS方式对该终端节点进行修改或者删除等操作。
- **false**（默认值）：不开启。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        13 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '终端节点所在的地域ID。

您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。 ',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-huhehaote',
          ),
        ),
        14 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '标签列表。
',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签列表。
',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '标签键。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'env',
                ),
                'Value' => 
                array (
                  'description' => '标签值。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'prod',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 21,
          ),
        ),
        15 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-acfmy*****',
          ),
        ),
        16 => 
        array (
          'name' => 'PolicyDocument',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'RAM权限策略。关于策略定义的更多信息，请参见[权限策略基本元素](~~93738~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '{
  "Version": "1",
  "Statement": [
    {
      "Effect": "Allow",
      "Action": [
        "oss:List*",
        "oss:PutObject",
        "oss:GetObject"
      ],
      "Resource": [
        "acs:oss:oss-*:*:pvl-policy-test/policy-test.txt"
      ],
      "Principal": {
        "RAM": [
          "acs:ram::14199xxxxxx:*"
        ]
      }
    }
  ]
}',
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
              'EndpointDomain' => 
              array (
                'description' => '终端节点域名。',
                'type' => 'string',
                'example' => 'ep-hp33b2e43fays7s8****.epsrv-hp3xdsq46ael67lo****.cn-huhehaote.privatelink.aliyuncs.com',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '0ED8D006-F706-4D23-88ED-E11ED28DCAC0',
              ),
              'CreateTime' => 
              array (
                'description' => '终端节点的创建时间。',
                'type' => 'string',
                'example' => '2022-01-02T19:11:12Z',
              ),
              'EndpointBusinessStatus' => 
              array (
                'description' => '终端节点的业务状态。取值：

- **Normal**：正常。

- **FinancialLocked**：欠费锁定。',
                'type' => 'string',
                'example' => 'Normal',
              ),
              'EndpointDescription' => 
              array (
                'description' => '终端节点描述。',
                'type' => 'string',
                'example' => 'This is my Endpoint.',
              ),
              'ServiceId' => 
              array (
                'description' => '终端节点关联的终端节点服务的ID。',
                'type' => 'string',
                'example' => 'epsrv-hp3vpx8yqxblby3i****',
              ),
              'EndpointStatus' => 
              array (
                'description' => '终端节点状态。取值：

- **Creating**：创建中。

- **Active**：可用。

- **Pending**：修改中。

- **Deleting**：删除中。',
                'type' => 'string',
                'example' => 'Active',
              ),
              'VpcId' => 
              array (
                'description' => '终端节点所属的专有网络。',
                'type' => 'string',
                'example' => 'vpc-hp356stwkxg3fn2xe****',
              ),
              'EndpointName' => 
              array (
                'description' => '终端节点名称。',
                'type' => 'string',
                'example' => 'test',
              ),
              'ServiceName' => 
              array (
                'description' => '终端节点关联的终端节点服务的名称。',
                'type' => 'string',
                'example' => 'com.aliyuncs.privatelink.cn-huhehaote.epsrv-hp3xdsq46ael67lo****',
              ),
              'Bandwidth' => 
              array (
                'description' => '终端节点的连接带宽，单位：Mbps。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
              'EndpointId' => 
              array (
                'description' => '终端节点ID。',
                'type' => 'string',
                'example' => 'ep-hp33b2e43fays7s8****',
              ),
              'ConnectionStatus' => 
              array (
                'description' => '终端节点连接状态。取值：

- **Pending**：修改中。

- **Connecting**：连接中。

- **Connected**：已连接。

- **Disconnecting**：断开连接中。

- **Disconnected**：未连接。

- **Deleting**：删除中。',
                'type' => 'string',
                'example' => 'Disconnected',
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
            'errorCode' => 'EndpointExist',
            'errorMessage' => 'The specified Endpoint already exists.',
          ),
          1 => 
          array (
            'errorCode' => 'EndpointZoneDuplicated',
            'errorMessage' => 'The zone is duplicated for the Endpoint.',
          ),
          2 => 
          array (
            'errorCode' => 'EndpointServiceNotFound',
            'errorMessage' => 'The specified Service does not exist.',
          ),
          3 => 
          array (
            'errorCode' => 'EndpointServiceNotSupportedZone',
            'errorMessage' => 'The specified endpoint service does not support the zone.',
          ),
          4 => 
          array (
            'errorCode' => 'VSwitchNotFound',
            'errorMessage' => 'The specified VSwitch does not exist.',
          ),
          5 => 
          array (
            'errorCode' => 'SecurityGroupNotFound',
            'errorMessage' => 'The specified security group does not exist.',
          ),
          6 => 
          array (
            'errorCode' => 'VpcTunnelNotFound',
            'errorMessage' => 'The specified VPC tunnel does not exist.',
          ),
          7 => 
          array (
            'errorCode' => 'VpcNotFound',
            'errorMessage' => 'The specified VPC does not exist.',
          ),
          8 => 
          array (
            'errorCode' => 'GenerateResourceIdFailed',
            'errorMessage' => 'Failed to generate ResourceId.',
          ),
          9 => 
          array (
            'errorCode' => 'QuotaMisMatched',
            'errorMessage' => 'The resource you applied for has exceeded the quota.',
          ),
          10 => 
          array (
            'errorCode' => 'EndpointMustContainSecurityGroup',
            'errorMessage' => 'The specified endpoint must have at least one security group.',
          ),
          11 => 
          array (
            'errorCode' => 'EndpointDuplicated',
            'errorMessage' => 'The endpoint of the service already exists and cannot be created again.',
          ),
          12 => 
          array (
            'errorCode' => 'EndpointServiceDeleted',
            'errorMessage' => 'The specified Service is already deleted.',
          ),
          13 => 
          array (
            'errorCode' => 'EndpointServiceResourceNotFound',
            'errorMessage' => 'The specified service resource is not found.',
          ),
          14 => 
          array (
            'errorCode' => 'SecurityGroupTypeNotSupport',
            'errorMessage' => 'The specified security group type is not supported.',
          ),
          15 => 
          array (
            'errorCode' => 'EniIpUnavailable',
            'errorMessage' => 'The specified IP address is unavailable.',
          ),
          16 => 
          array (
            'errorCode' => 'EndpointServiceNotAuthorized',
            'errorMessage' => 'The specified endpoint service is not authorized to user.',
          ),
          17 => 
          array (
            'errorCode' => 'SecurityGroupTypeOnlySingleTypeSupporteded',
            'errorMessage' => 'The specified security group only support one type.',
          ),
          18 => 
          array (
            'errorCode' => 'QuotaExceeded.IpQuotaPerEp',
            'errorMessage' => 'The quota of %s is exceeded, usage %s/%s.',
          ),
          19 => 
          array (
            'errorCode' => 'Mismatch.EndpointType',
            'errorMessage' => 'The %s is mismatched for %s and %s.',
          ),
          20 => 
          array (
            'errorCode' => 'IncorrectStatus.VpcEndpointService',
            'errorMessage' => 'The status of %s [%s] is incorrect.',
          ),
          21 => 
          array (
            'errorCode' => 'CheckServiceLinkRoleError',
            'errorMessage' => 'The ServiceLink role check error.',
          ),
          22 => 
          array (
            'errorCode' => 'ResourceNotEnough.VSwitchIp',
            'errorMessage' => 'The specified resource of VSwitchIp is not enough.',
          ),
          23 => 
          array (
            'errorCode' => 'VSwitchStatusNotAllowed',
            'errorMessage' => 'The specified vswitch status is not Available.',
          ),
          24 => 
          array (
            'errorCode' => 'QuotaExceeded.epZonePerEndpoint',
            'errorMessage' => 'The quota of %s is exceeded, usage %s/%s.',
          ),
          25 => 
          array (
            'errorCode' => 'QuotaExceeded.totalEpPerVpc',
            'errorMessage' => 'The quota of %s is exceeded, usage %s/%s.',
          ),
          26 => 
          array (
            'errorCode' => 'QuotaExceeded.totalIdleEndpoint',
            'errorMessage' => 'The quota of %s is exceeded, usage %s/%s.',
          ),
          27 => 
          array (
            'errorCode' => 'OperationDenied.EndpointPolicyNotSupport',
            'errorMessage' => 'The operation is not allowed because of EndpointPolicyNotSupport.',
          ),
          28 => 
          array (
            'errorCode' => 'OperationDenied.PrivateDomainStatusNotSupport',
            'errorMessage' => 'The operation is not allowed because of %s.',
          ),
          29 => 
          array (
            'errorCode' => 'OperationDenied.PrivateDomainNotSupport',
            'errorMessage' => 'The operation is not allowed because of PrivateDomainNotSupport.',
          ),
          30 => 
          array (
            'errorCode' => 'DependencyViolation.PrivateDnsName',
            'errorMessage' => 'The specified resource of %s depends on %s, so the operation cannot be completed.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"EndpointDomain\\": \\"ep-hp33b2e43fays7s8****.epsrv-hp3xdsq46ael67lo****.cn-huhehaote.privatelink.aliyuncs.com\\",\\n  \\"RequestId\\": \\"0ED8D006-F706-4D23-88ED-E11ED28DCAC0\\",\\n  \\"CreateTime\\": \\"2022-01-02T19:11:12Z\\",\\n  \\"EndpointBusinessStatus\\": \\"Normal\\",\\n  \\"EndpointDescription\\": \\"This is my Endpoint.\\",\\n  \\"ServiceId\\": \\"epsrv-hp3vpx8yqxblby3i****\\",\\n  \\"EndpointStatus\\": \\"Active\\",\\n  \\"VpcId\\": \\"vpc-hp356stwkxg3fn2xe****\\",\\n  \\"EndpointName\\": \\"test\\",\\n  \\"ServiceName\\": \\"com.aliyuncs.privatelink.cn-huhehaote.epsrv-hp3xdsq46ael67lo****\\",\\n  \\"Bandwidth\\": 200,\\n  \\"EndpointId\\": \\"ep-hp33b2e43fays7s8****\\",\\n  \\"ConnectionStatus\\": \\"Disconnected\\"\\n}","type":"json"}]',
      'title' => '创建终端节点',
      'description' => '**CreateVpcEndpoint**接口属于异步接口，即系统会返回一个实例ID，但该终端节点尚未创建完成，系统后台任务仍在进行中。您可以调用[GetVpcEndpointAttribute](~~183568~~)查询终端节点的创建状态：

- 当终端节点处于**Creating**状态时，表示终端节点正在创建中。
- 当终端节点处于**Active**状态时，表示终端节点创建完成。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UpdateVpcEndpointAttribute' => 
    array (
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
            'description' => '要修改的终端节点的地域ID。您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'eu-west-1',
          ),
        ),
        1 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端Token，用于保证请求的幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。**ClientToken**只支持ASCII字符。',
            'type' => 'string',
            'required' => false,
            'example' => '0ED8D006-F706-4D23-88ED-E11ED28DCAC0',
          ),
        ),
        2 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '
是否只预检此次请求。取值：
- **true**：发送检查请求，不会修改终端节点属性。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        3 => 
        array (
          'name' => 'EndpointId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要修改的终端节点ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ep-hp33b2e43fays7s8****',
          ),
        ),
        4 => 
        array (
          'name' => 'EndpointName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '终端节点的名称。

名称长度在2~128个字符之间，以英文字母或中文开头，可包含数字、短划线（-）和下划线（_）。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'test',
          ),
        ),
        5 => 
        array (
          'name' => 'EndpointDescription',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '终端节点的描述。

描述长度为2~256个字符，不能以`http://`和`https://`开头。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'This is my Endpoint.',
          ),
        ),
        6 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要修改的终端节点的地域ID。您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'eu-west-1',
          ),
        ),
        7 => 
        array (
          'name' => 'PolicyDocument',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'RAM权限策略。关于策略定义的更多信息，请参见[权限策略基本元素](~~93738~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '{
  "Version": "1",
  "Statement": [
    {
      "Effect": "Allow",
      "Action": [
        "oss:List*",
        "oss:PutObject",
        "oss:GetObject"
      ],
      "Resource": [
        "acs:oss:oss-*:*:pvl-policy-test/policy-test.txt"
      ],
      "Principal": {
        "RAM": [
          "acs:ram::14199xxxxxx:*"
        ]
      }
    }
  ]
}',
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
                'example' => '0ED8D006-F706-4D23-88ED-E11ED28DCAC0',
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
            'errorCode' => 'OperationDenied.EndpointProtected',
            'errorMessage' => 'The operation is not allowed because of EndpointProtected.',
          ),
          1 => 
          array (
            'errorCode' => 'EndpointNotFound',
            'errorMessage' => 'The specified Endpoint does not exist.',
          ),
          2 => 
          array (
            'errorCode' => 'EndpointOperationDenied',
            'errorMessage' => 'The specified operation of endpoint is not allowed.',
          ),
          3 => 
          array (
            'errorCode' => 'EndpointLocked',
            'errorMessage' => 'The specified Endpoint is locked.',
          ),
          4 => 
          array (
            'errorCode' => 'EndpointConnectionOperationDenied',
            'errorMessage' => 'The endpoint is being connected.',
          ),
          5 => 
          array (
            'errorCode' => 'EndpointServiceDeleted',
            'errorMessage' => 'The specified Service is already deleted.',
          ),
          6 => 
          array (
            'errorCode' => 'EndpointProtected',
            'errorMessage' => 'The specified Endpoint is protected.',
          ),
          7 => 
          array (
            'errorCode' => 'OperationDenied.EndpointPolicyNotSupport',
            'errorMessage' => 'The operation is not allowed because of EndpointPolicyNotSupport.',
          ),
          8 => 
          array (
            'errorCode' => 'DependencyViolation.PrivateDnsName',
            'errorMessage' => 'The specified resource of %s depends on %s, so the operation cannot be completed.',
          ),
          9 => 
          array (
            'errorCode' => 'OperationDenied.PrivateDomainStatusNotSupport',
            'errorMessage' => 'The operation is not allowed because of %s.',
          ),
          10 => 
          array (
            'errorCode' => 'OperationDenied.PrivateDomainNotSupport',
            'errorMessage' => 'The operation is not allowed because of PrivateDomainNotSupport.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"0ED8D006-F706-4D23-88ED-E11ED28DCAC0\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateVpcEndpointAttributeResponse>\\n    <RequestId>0ED8D006-F706-4D23-88ED-E11ED28DCAC0</RequestId>\\n</UpdateVpcEndpointAttributeResponse>","errorExample":""}]',
      'title' => '修改终端节点的属性',
      'summary' => '调用UpdateVpcEndpointAttribute接口，修改终端节点的属性。',
      'description' => '**UpdateVpcEndpointAttribute**接口不支持在同一个阿里云账号（主账号）下并发修改终端节点的属性。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListVpcEndpoints' => 
    array (
      'summary' => '调用ListVpcEndpoints接口，查询终端节点列表。',
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
            'description' => '要查询的终端节点所属的地域ID。

您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-huhehaote',
          ),
        ),
        1 => 
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
            'example' => 'caeba0bbb2be03f84eb48b699f0a4883',
          ),
        ),
        2 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页大小。取值范围：**1**~**50**。默认值：**50**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '1000',
            'minimum' => '0',
            'example' => '50',
            'default' => '50',
          ),
        ),
        3 => 
        array (
          'name' => 'EndpointId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要查询的终端节点ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'ep-hp33b2e43fays7s8****',
          ),
        ),
        4 => 
        array (
          'name' => 'ServiceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要查询的终端节点关联的终端节点服务名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'com.aliyuncs.privatelink.cn-huhehaote.epsrv-hp3vpx8yqxblby3i****',
          ),
        ),
        5 => 
        array (
          'name' => 'VpcId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '终端节点所属的专有网络。',
            'type' => 'string',
            'required' => false,
            'example' => 'vpc-fdjkf789dfdfdfde****',
          ),
        ),
        6 => 
        array (
          'name' => 'EndpointName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '终端节点名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        7 => 
        array (
          'name' => 'EndpointType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '终端节点类型。

仅取值： **Interface**，表示接口终端节点，您可以添加应用型负载均衡ALB（Application Load Balancer）、传统型负载均衡CLB（Classic Load Balancer）和网络型负载均衡NLB（Network Load Balancer ）的服务资源类型。',
            'type' => 'string',
            'required' => false,
            'example' => 'Interface',
          ),
        ),
        8 => 
        array (
          'name' => 'EndpointStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '终端节点状态，取值：

- **Creating**：创建中。

- **Active**：可用。

- **Pending**：修改中。

- **Deleting**：删除中。',
            'type' => 'string',
            'required' => false,
            'example' => 'Active',
          ),
        ),
        9 => 
        array (
          'name' => 'ConnectionStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '终端节点连接状态，取值：

- **Pending**：修改中。

- **Connecting**：连接中。

- **Connected**：已连接。

- **Disconnecting**：断开连接中。

- **Disconnected**：未连接。

- **Deleting**：删除中。

- **ServiceDeleted**：终端节点对应的服务已删除。',
            'type' => 'string',
            'required' => false,
            'example' => 'Disconnected',
          ),
        ),
        10 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '标签列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签列表。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '实例的标签键。最多支持20个标签键。一旦传入该值，则不允许为空字符串。

最多支持64个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'FinanceDept',
                ),
                'Value' => 
                array (
                  'description' => '实例的标签值。最多支持20个标签值。一旦传入该值，可以为空字符串。

最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'FinanceJoshua',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
          ),
        ),
        11 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要查询的终端节点所属的地域ID。

您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-huhehaote',
          ),
        ),
        12 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。',
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
            'type' => 'object',
            'properties' => 
            array (
              'Endpoints' => 
              array (
                'description' => '终端节点信息集合。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '终端节点信息集合。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'VpcId' => 
                    array (
                      'description' => '终端节点所属的专有网络。',
                      'type' => 'string',
                      'example' => 'vpc-hp356stwkxg3fn2xe****',
                    ),
                    'EndpointName' => 
                    array (
                      'description' => '终端节点名称。',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                    'EndpointType' => 
                    array (
                      'description' => '终端节点类型。

仅取值： **Interface**，表示接口终端节点，您可以添加应用型负载均衡ALB（Application Load Balancer）、传统型负载均衡CLB（Classic Load Balancer）和网络型负载均衡NLB（Network Load Balancer ）的服务资源类型。',
                      'type' => 'string',
                      'example' => 'Interface',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '终端节点的创建时间。',
                      'type' => 'string',
                      'example' => '2021-09-24T18:00:07Z',
                    ),
                    'ServiceId' => 
                    array (
                      'description' => '终端节点关联的终端节点服务的ID。',
                      'type' => 'string',
                      'example' => 'epsrv-hp3vpx8yqxblby3i****',
                    ),
                    'ZoneAffinityEnabled' => 
                    array (
                      'description' => '是否支持连接服务的终端节点域名就近解析。取值：
- **true**：是。

- **false**：否。',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'EndpointDomain' => 
                    array (
                      'description' => '终端节点域名。',
                      'type' => 'string',
                      'example' => 'ep-hp33b2e43fays7s8****.epsrv-hp3xdsq46ael67lo****.cn-huhehaote.privatelink.aliyuncs.com',
                    ),
                    'EndpointStatus' => 
                    array (
                      'description' => '终端节点状态，取值：

- **Creating**：创建中。

- **Active**：可用。

- **Pending**：修改中。

- **Deleting**：删除中。',
                      'type' => 'string',
                      'example' => 'Active',
                    ),
                    'RegionId' => 
                    array (
                      'description' => '终端节点所属的地域ID。',
                      'type' => 'string',
                      'example' => 'cn-huhehaote',
                    ),
                    'ResourceOwner' => 
                    array (
                      'description' => '终端节点和终端节点服务是否同一账号，取值：

- **true**：是。

- **false**：否。',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'Bandwidth' => 
                    array (
                      'description' => '终端节点的连接带宽，单位：Mbps。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1024',
                    ),
                    'ConnectionStatus' => 
                    array (
                      'description' => '终端节点连接状态，取值：

- **Pending**：修改中。

- **Connecting**：连接中。

- **Connected**：已连接。

- **Disconnecting**：断开连接中。

- **Disconnected**：未连接。

- **Deleting**：删除中。

- **ServiceDeleted**：终端节点对应的服务已删除。',
                      'type' => 'string',
                      'example' => 'Disconnected',
                    ),
                    'EndpointDescription' => 
                    array (
                      'description' => '终端节点描述。',
                      'type' => 'string',
                      'example' => 'This is my Endpoint.',
                    ),
                    'EndpointId' => 
                    array (
                      'description' => '终端节点ID。',
                      'type' => 'string',
                      'example' => 'ep-hp33b2e43fays7s8****',
                    ),
                    'EndpointBusinessStatus' => 
                    array (
                      'description' => '终端节点的业务状态。取值：

- **Normal**：正常。

- **FinancialLocked**：欠费锁定。',
                      'type' => 'string',
                      'example' => 'Normal',
                    ),
                    'ServiceName' => 
                    array (
                      'description' => '终端节点关联的终端节点服务的名称。',
                      'type' => 'string',
                      'example' => 'com.aliyuncs.privatelink.cn-huhehaote.epsrv-hp3xdsq46ael67lo****',
                    ),
                    'Tags' => 
                    array (
                      'description' => '标签列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '标签列表。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Key' => 
                          array (
                            'description' => '实例的标签键。',
                            'type' => 'string',
                            'example' => 'FinanceDept',
                          ),
                          'Value' => 
                          array (
                            'description' => '实例的标签值。',
                            'type' => 'string',
                            'example' => 'FinanceJoshua',
                          ),
                        ),
                      ),
                    ),
                    'ResourceGroupId' => 
                    array (
                      'description' => '资源实例ID。',
                      'type' => 'string',
                      'example' => '1',
                    ),
                    'PolicyDocument' => 
                    array (
                      'type' => 'string',
                    ),
                  ),
                ),
              ),
              'NextToken' => 
              array (
                'description' => '是否拥有下一次查询的令牌（Token）。取值：
- 如果**NextToken**为空表示没有下一次查询。
- 如果**NextToken**有返回值，该取值表示下一次查询开始的令牌。',
                'type' => 'string',
                'example' => 'caeba0bbb2be03f84eb48b699f0a****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '0ED8D006-F706-4D23-88ED-E11ED28DCAC0',
              ),
              'MaxResults' => 
              array (
                'description' => '分页大小。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '50',
              ),
              'TotalCount' => 
              array (
                'description' => '总记录数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '12',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Endpoints\\": [\\n    {\\n      \\"VpcId\\": \\"vpc-hp356stwkxg3fn2xe****\\",\\n      \\"EndpointName\\": \\"test\\",\\n      \\"EndpointType\\": \\"Interface\\",\\n      \\"CreateTime\\": \\"2021-09-24T18:00:07Z\\",\\n      \\"ServiceId\\": \\"epsrv-hp3vpx8yqxblby3i****\\",\\n      \\"ZoneAffinityEnabled\\": true,\\n      \\"EndpointDomain\\": \\"ep-hp33b2e43fays7s8****.epsrv-hp3xdsq46ael67lo****.cn-huhehaote.privatelink.aliyuncs.com\\",\\n      \\"EndpointStatus\\": \\"Active\\",\\n      \\"RegionId\\": \\"cn-huhehaote\\",\\n      \\"ResourceOwner\\": true,\\n      \\"Bandwidth\\": 1024,\\n      \\"ConnectionStatus\\": \\"Disconnected\\",\\n      \\"EndpointDescription\\": \\"This is my Endpoint.\\",\\n      \\"EndpointId\\": \\"ep-hp33b2e43fays7s8****\\",\\n      \\"EndpointBusinessStatus\\": \\"Normal\\",\\n      \\"ServiceName\\": \\"com.aliyuncs.privatelink.cn-huhehaote.epsrv-hp3xdsq46ael67lo****\\",\\n      \\"Tags\\": [\\n        {\\n          \\"Key\\": \\"FinanceDept\\",\\n          \\"Value\\": \\"FinanceJoshua\\"\\n        }\\n      ],\\n      \\"ResourceGroupId\\": \\"1\\",\\n      \\"PolicyDocument\\": \\"\\"\\n    }\\n  ],\\n  \\"NextToken\\": \\"caeba0bbb2be03f84eb48b699f0a****\\",\\n  \\"RequestId\\": \\"0ED8D006-F706-4D23-88ED-E11ED28DCAC0\\",\\n  \\"MaxResults\\": 50,\\n  \\"TotalCount\\": 12\\n}","errorExample":""},{"type":"xml","example":"<ListVpcEndpointsResponse>\\n    <Endpoints>\\n        <VpcId>vpc-hp356stwkxg3fn2xe****</VpcId>\\n        <EndpointName>test</EndpointName>\\n        <EndpointType>Interface</EndpointType>\\n        <CreateTime>2021-09-24T18:00:07Z</CreateTime>\\n        <ServiceId>epsrv-hp3vpx8yqxblby3i****</ServiceId>\\n        <ZoneAffinityEnabled>true</ZoneAffinityEnabled>\\n        <EndpointDomain>ep-hp33b2e43fays7s8****.epsrv-hp3xdsq46ael67lo****.cn-huhehaote.privatelink.aliyuncs.com</EndpointDomain>\\n        <EndpointStatus>Active</EndpointStatus>\\n        <RegionId>cn-huhehaote</RegionId>\\n        <ResourceOwner>true</ResourceOwner>\\n        <Bandwidth>1024</Bandwidth>\\n        <ConnectionStatus>Disconnected</ConnectionStatus>\\n        <EndpointDescription>This is my Endpoint.</EndpointDescription>\\n        <EndpointId>ep-hp33b2e43fays7s8****</EndpointId>\\n        <EndpointBusinessStatus>Normal</EndpointBusinessStatus>\\n        <ServiceName>com.aliyuncs.privatelink.cn-huhehaote.epsrv-hp3xdsq46ael67lo****</ServiceName>\\n        <Tags>\\n            <Key>FinanceDept</Key>\\n            <Value>FinanceJoshua</Value>\\n        </Tags>\\n        <ResourceGroupId>1</ResourceGroupId>\\n    </Endpoints>\\n    <NextToken>caeba0bbb2be03f84eb48b699f0a****</NextToken>\\n    <RequestId>0ED8D006-F706-4D23-88ED-E11ED28DCAC0</RequestId>\\n    <MaxResults>50</MaxResults>\\n</ListVpcEndpointsResponse>","errorExample":""}]',
      'title' => '查询终端节点列表',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetVpcEndpointAttribute' => 
    array (
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
            'description' => '获取属性信息的终端节点所属的地域ID。

您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。 ',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-huhehaote',
          ),
        ),
        1 => 
        array (
          'name' => 'EndpointId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '获取属性信息的终端节点ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'ep-hp33b2e43fays7s8****',
          ),
        ),
        2 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '获取属性信息的终端节点所属的地域ID。

您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。 ',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-huhehaote',
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
              'Payer' => 
              array (
                'description' => '付费方。取值：

- **Endpoint**：服务使用方。

- **EndpointService**：服务提供方。',
                'type' => 'string',
                'example' => 'Endpoint',
              ),
              'EndpointDomain' => 
              array (
                'description' => '终端节点域名。',
                'type' => 'string',
                'example' => 'ep-hp33b2e43fays7s8****.epsrv-hp3xdsq46ael67lo****.cn-huhehaote.privatelink.aliyuncs.com',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '8D8992C1-6712-423C-BAC5-E5E817484C6B',
              ),
              'CreateTime' => 
              array (
                'description' => '终端节点的创建时间。',
                'type' => 'string',
                'example' => '2021-09-24T18:00:07Z',
              ),
              'ResourceOwner' => 
              array (
                'description' => '终端节点和终端节点服务是否同一账号。取值：

- **true**：是。

- **false**：否。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'EndpointBusinessStatus' => 
              array (
                'description' => '终端节点的业务状态。取值：

- **Normal**：正常。

- **FinancialLocked**：欠费锁定。',
                'type' => 'string',
                'example' => 'Normal',
              ),
              'EndpointDescription' => 
              array (
                'description' => '终端节点描述。',
                'type' => 'string',
                'example' => 'This is my Endpoint.',
              ),
              'ServiceId' => 
              array (
                'description' => '终端节点关联的终端节点服务的ID。',
                'type' => 'string',
                'example' => 'epsrv-hp3vpx8yqxblby3i****',
              ),
              'EndpointStatus' => 
              array (
                'description' => '终端节点状态。取值：

- **Creating**：创建中。

- **Active**：可用。

- **Pending**：修改中。

- **Deleting**：删除中。',
                'type' => 'string',
                'example' => 'Active',
              ),
              'VpcId' => 
              array (
                'description' => '终端节点所属的专有网络ID。',
                'type' => 'string',
                'example' => 'vpc-fdfhkjafhjvcvdjf****',
              ),
              'EndpointName' => 
              array (
                'description' => '终端节点名称。',
                'type' => 'string',
                'example' => 'test',
              ),
              'ZonePrivateIpAddressCount' => 
              array (
                'description' => '每个可用区ENI的私网IP的数量。仅取值：**1**。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'EndpointType' => 
              array (
                'description' => '终端节点类型。

取值：**Interface**，表示接口终端节点，其中终端节点服务的服务资源类型为应用型负载均衡ALB（Application Load Balancer）、传统型负载均衡CLB（Classic Load Balancer）或网络型负载均衡NLB（Network Load Balancer ）。',
                'type' => 'string',
                'example' => 'Interface',
              ),
              'ServiceName' => 
              array (
                'description' => '终端节点关联的终端节点服务的名称。',
                'type' => 'string',
                'example' => 'com.aliyuncs.privatelink.cn-huhehaote.epsrv-hp3xdsq46ael67lo****',
              ),
              'Bandwidth' => 
              array (
                'description' => '终端节点的连接带宽。单位：Mbps。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1024',
              ),
              'EndpointId' => 
              array (
                'description' => '终端节点ID。',
                'type' => 'string',
                'example' => 'ep-hp33b2e43fays7s8****',
              ),
              'RegionId' => 
              array (
                'description' => '终端节点所属的地域ID。',
                'type' => 'string',
                'example' => 'cn-huhehaote',
              ),
              'ConnectionStatus' => 
              array (
                'description' => '终端节点连接状态。取值：

- **Pending**：修改中。

- **Connecting**：连接中。

- **Connected**：已连接。

- **Disconnecting**：断开连接中。

- **Disconnected**：未连接。

- **Deleting**：删除中。

- **ServiceDeleted**：对应的终端节点服务已删除。',
                'type' => 'string',
                'example' => 'Connected',
              ),
              'ZoneAffinityEnabled' => 
              array (
                'description' => '是否支持连接服务的终端节点域名就近解析。取值：

- **true**：是。

- **false**：否。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ResourceGroupId' => 
              array (
                'description' => '资源组ID。',
                'type' => 'string',
                'example' => 'rg-acfmz7nocpei***',
              ),
              'PolicyDocument' => 
              array (
                'description' => 'RAM权限策略。关于策略定义的更多信息，请参见[权限策略基本元素](~~93738~~)。',
                'type' => 'string',
                'example' => '{
  "Version": "1",
  "Statement": [
    {
      "Effect": "Allow",
      "Action": [
        "oss:List*",
        "oss:PutObject",
        "oss:GetObject"
      ],
      "Resource": [
        "acs:oss:oss-*:*:pvl-policy-test/policy-test.txt"
      ],
      "Principal": {
        "RAM": [
          "acs:ram::14199xxxxxx:*"
        ]
      }
    }
  ]
}',
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
            'errorCode' => 'EndpointNotFound',
            'errorMessage' => 'The specified Endpoint does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'EndpointConnectionNotFound',
            'errorMessage' => 'The specified endpoint connection does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Payer\\": \\"Endpoint\\",\\n  \\"EndpointDomain\\": \\"ep-hp33b2e43fays7s8****.epsrv-hp3xdsq46ael67lo****.cn-huhehaote.privatelink.aliyuncs.com\\",\\n  \\"RequestId\\": \\"8D8992C1-6712-423C-BAC5-E5E817484C6B\\",\\n  \\"CreateTime\\": \\"2021-09-24T18:00:07Z\\",\\n  \\"ResourceOwner\\": true,\\n  \\"EndpointBusinessStatus\\": \\"Normal\\",\\n  \\"EndpointDescription\\": \\"This is my Endpoint.\\",\\n  \\"ServiceId\\": \\"epsrv-hp3vpx8yqxblby3i****\\",\\n  \\"EndpointStatus\\": \\"Active\\",\\n  \\"VpcId\\": \\"vpc-fdfhkjafhjvcvdjf****\\",\\n  \\"EndpointName\\": \\"test\\",\\n  \\"ZonePrivateIpAddressCount\\": 1,\\n  \\"EndpointType\\": \\"Interface\\",\\n  \\"ServiceName\\": \\"com.aliyuncs.privatelink.cn-huhehaote.epsrv-hp3xdsq46ael67lo****\\",\\n  \\"Bandwidth\\": 1024,\\n  \\"EndpointId\\": \\"ep-hp33b2e43fays7s8****\\",\\n  \\"RegionId\\": \\"cn-huhehaote\\",\\n  \\"ConnectionStatus\\": \\"Connected\\",\\n  \\"ZoneAffinityEnabled\\": true,\\n  \\"ResourceGroupId\\": \\"rg-acfmz7nocpei***\\",\\n  \\"PolicyDocument\\": \\"{\\\\n  \\\\\\"Version\\\\\\": \\\\\\"1\\\\\\",\\\\n  \\\\\\"Statement\\\\\\": [\\\\n    {\\\\n      \\\\\\"Effect\\\\\\": \\\\\\"Allow\\\\\\",\\\\n      \\\\\\"Action\\\\\\": [\\\\n        \\\\\\"oss:List*\\\\\\",\\\\n        \\\\\\"oss:PutObject\\\\\\",\\\\n        \\\\\\"oss:GetObject\\\\\\"\\\\n      ],\\\\n      \\\\\\"Resource\\\\\\": [\\\\n        \\\\\\"acs:oss:oss-*:*:pvl-policy-test/policy-test.txt\\\\\\"\\\\n      ],\\\\n      \\\\\\"Principal\\\\\\": {\\\\n        \\\\\\"RAM\\\\\\": [\\\\n          \\\\\\"acs:ram::14199xxxxxx:*\\\\\\"\\\\n        ]\\\\n      }\\\\n    }\\\\n  ]\\\\n}\\"\\n}","errorExample":""},{"type":"xml","example":"<GetVpcEndpointAttributeResponse>\\n    <Payer>Endpoint</Payer>\\n    <EndpointDomain>ep-hp33b2e43fays7s8****.epsrv-hp3xdsq46ael67lo****.cn-huhehaote.privatelink.aliyuncs.com</EndpointDomain>\\n    <RequestId>8D8992C1-6712-423C-BAC5-E5E817484C6B</RequestId>\\n    <CreateTime>2021-09-24T18:00:07Z</CreateTime>\\n    <ResourceOwner>true</ResourceOwner>\\n    <EndpointBusinessStatus>Normal</EndpointBusinessStatus>\\n    <EndpointDescription>This is my Endpoint.</EndpointDescription>\\n    <ServiceId>epsrv-hp3vpx8yqxblby3i****</ServiceId>\\n    <EndpointStatus>Active</EndpointStatus>\\n    <VpcId>vpc-fdfhkjafhjvcvdjf****</VpcId>\\n    <EndpointName>test</EndpointName>\\n    <ZonePrivateIpAddressCount>1</ZonePrivateIpAddressCount>\\n    <EndpointType>Interface</EndpointType>\\n    <ServiceName>com.aliyuncs.privatelink.cn-huhehaote.epsrv-hp3xdsq46ael67lo****</ServiceName>\\n    <Bandwidth>1024</Bandwidth>\\n    <EndpointId>ep-hp33b2e43fays7s8****</EndpointId>\\n    <RegionId>cn-huhehaote</RegionId>\\n    <ConnectionStatus>Connected</ConnectionStatus>\\n    <ZoneAffinityEnabled>true</ZoneAffinityEnabled>\\n</GetVpcEndpointAttributeResponse>","errorExample":""}]',
      'title' => '获取终端节点属性信息',
      'summary' => '调用GetVpcEndpointAttribute接口，获取终端节点属性信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListVpcEndpointServicesByEndUser' => 
    array (
      'summary' => '调用ListVpcEndpointServicesByEndUser接口，查询已授权本账号创建终端节点时可以关联的终端节点服务。',
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
            'description' => '要查询的地域ID。

您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。 ',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-huhehaote',
          ),
        ),
        1 => 
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
        2 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分批次查询时每次显示的条目数。取值范围：**1**~**50**，默认值：**50**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '1000',
            'minimum' => '0',
            'example' => '50',
            'default' => '50',
          ),
        ),
        3 => 
        array (
          'name' => 'ServiceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要查询的终端节点服务的ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'epsrv-hp3vpx8yqxblby3i****',
          ),
        ),
        4 => 
        array (
          'name' => 'ServiceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要查询的终端节点服务的名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'com.aliyuncs.privatelink.cn-huhehaote.epsrv-hp3xdsq46ael67lo****',
          ),
        ),
        5 => 
        array (
          'name' => 'ServiceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '终端节点服务类型。

仅取值：**Interface**，表示接口终端节点，您可以添加应用型负载均衡ALB（Application Load Balancer）、传统型负载均衡CLB（Classic Load Balancer）和网络型负载均衡NLB（Network Load Balancer ）的服务资源类型。',
            'type' => 'string',
            'required' => false,
            'example' => 'Interface',
          ),
        ),
        6 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要查询的地域ID。

您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。 ',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-huhehaote',
          ),
        ),
        7 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '标签列表。
',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签列表。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '实例的标签键。最多支持20个标签键。一旦传入该值，则不允许为空字符串。

最多支持64个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'FinanceDept',
                ),
                'Value' => 
                array (
                  'description' => '实例的标签值。最多支持20个标签值。一旦传入该值，可以为空字符串。

最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'FinanceJoshua',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
          ),
        ),
        8 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-acfmy*****',
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
              'Services' => 
              array (
                'description' => '终端节点服务集合。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '终端节点服务集合。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Payer' => 
                    array (
                      'description' => '付费方，取值：

- **Endpoint**：服务使用方。

- **EndpointService**：服务提供方。',
                      'type' => 'string',
                      'example' => 'Endpoint',
                    ),
                    'ServiceDomain' => 
                    array (
                      'description' => '创建终端节点时可以关联的终端节点服务的域名。',
                      'type' => 'string',
                      'example' => 'epsrv-hp3vpx8yqxblby3i****.cn-huhehaote.privatelink.aliyuncs.com',
                    ),
                    'Zones' => 
                    array (
                      'description' => '创建终端节点时可以关联的终端节点服务的可用区集合。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '创建终端节点时可以关联的终端节点服务的可用区。',
                        'type' => 'string',
                        'example' => 'cn-huhehaote-a',
                      ),
                    ),
                    'ServiceId' => 
                    array (
                      'description' => '创建终端节点时可以关联的终端节点服务的ID。',
                      'type' => 'string',
                      'example' => 'epsrv-hp3vpx8yqxblby3i****',
                    ),
                    'ServiceName' => 
                    array (
                      'description' => '创建终端节点时可以关联的终端节点服务的名称。',
                      'type' => 'string',
                      'example' => 'com.aliyuncs.privatelink.cn-huhehaote.epsrv-hp3vpx8yqxblby3i****',
                    ),
                    'ServiceType' => 
                    array (
                      'description' => '终端节点服务类型。

仅取值： **Interface**，表示接口终端节点，您可以添加应用型负载均衡ALB（Application Load Balancer）、传统型负载均衡CLB（Classic Load Balancer）和网络型负载均衡NLB（Network Load Balancer ）的服务资源类型。',
                      'type' => 'string',
                      'example' => 'Interface',
                    ),
                    'ServiceSupportIPv6' => 
                    array (
                      'description' => '终端节点服务是否支持IPv6功能。取值：

- **true**：是。

- **false**：否。',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'Tags' => 
                    array (
                      'description' => '标签列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '标签列表。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Key' => 
                          array (
                            'description' => '实例的标签键。',
                            'type' => 'string',
                            'example' => 'FinanceDept',
                          ),
                          'Value' => 
                          array (
                            'description' => '实例的标签值。',
                            'type' => 'string',
                            'example' => 'FinanceJoshua',
                          ),
                        ),
                      ),
                    ),
                    'ResourceGroupId' => 
                    array (
                      'description' => '资源组ID。',
                      'type' => 'string',
                      'example' => 'rg-acfmy*****',
                    ),
                    'ServiceResourceType' => 
                    array (
                      'description' => '服务资源类型。

- **slb**，表示服务资源类型为传统型负载均衡CLB（Classic Load Balancer）。
- **alb**，表示服务资源类型为应用型负载均衡ALB（Application Load Balancer）。
- **nlb**，表示服务资源类型为网络型负载均衡NLB（Network Load Balancer ）。',
                      'type' => 'string',
                      'example' => 'slb',
                    ),
                  ),
                ),
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
                'example' => '0ED8D006-F706-4D23-88ED-E11ED28DCAC0',
              ),
              'MaxResults' => 
              array (
                'description' => '分批次查询时每次显示的条目数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '50',
              ),
              'TotalCount' => 
              array (
                'description' => '总记录数。',
                'type' => 'string',
                'example' => '29',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Services\\": [\\n    {\\n      \\"Payer\\": \\"Endpoint\\",\\n      \\"ServiceDomain\\": \\"epsrv-hp3vpx8yqxblby3i****.cn-huhehaote.privatelink.aliyuncs.com\\",\\n      \\"Zones\\": [\\n        \\"cn-huhehaote-a\\"\\n      ],\\n      \\"ServiceId\\": \\"epsrv-hp3vpx8yqxblby3i****\\",\\n      \\"ServiceName\\": \\"com.aliyuncs.privatelink.cn-huhehaote.epsrv-hp3vpx8yqxblby3i****\\",\\n      \\"ServiceType\\": \\"Interface\\",\\n      \\"ServiceSupportIPv6\\": false,\\n      \\"Tags\\": [\\n        {\\n          \\"Key\\": \\"FinanceDept\\",\\n          \\"Value\\": \\"FinanceJoshua\\"\\n        }\\n      ],\\n      \\"ResourceGroupId\\": \\"rg-acfmy*****\\",\\n      \\"ServiceResourceType\\": \\"slb\\"\\n    }\\n  ],\\n  \\"NextToken\\": \\"FFmyTO70tTpLG6I3FmYAXGKPd****\\",\\n  \\"RequestId\\": \\"0ED8D006-F706-4D23-88ED-E11ED28DCAC0\\",\\n  \\"MaxResults\\": 50,\\n  \\"TotalCount\\": \\"29\\"\\n}","errorExample":""},{"type":"xml","example":"<ListVpcEndpointServicesByEndUserResponse>\\n    <Services>\\n        <Payer>Endpoint</Payer>\\n        <ServiceDomain>epsrv-hp3vpx8yqxblby3i****.cn-huhehaote.privatelink.aliyuncs.com</ServiceDomain>\\n        <Zones>cn-huhehaote-a</Zones>\\n        <ServiceId>epsrv-hp3vpx8yqxblby3i****</ServiceId>\\n        <ServiceName>com.aliyuncs.privatelink.cn-huhehaote.epsrv-hp3vpx8yqxblby3i****</ServiceName>\\n        <ServiceType>Interface</ServiceType>\\n        <ServiceSupportIPv6>false</ServiceSupportIPv6>\\n        <Tags>\\n            <Key>FinanceDept</Key>\\n            <Value>FinanceJoshua</Value>\\n        </Tags>\\n    </Services>\\n    <NextToken>FFmyTO70tTpLG6I3FmYAXGKPd****</NextToken>\\n    <RequestId>0ED8D006-F706-4D23-88ED-E11ED28DCAC0</RequestId>\\n    <MaxResults>50</MaxResults>\\n</ListVpcEndpointServicesByEndUserResponse>","errorExample":""}]',
      'title' => '查询可以关联的终端节点服务',
      'description' => '
',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'EnableVpcEndpointConnection' => 
    array (
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
        'operationType' => 'update',
        'abilityTreeCode' => '16173',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREprivatelinkDB15J4',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要接受的终端节点连接的地域ID。

您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。 ',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-huhehaote',
          ),
        ),
        1 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端Token，用于保证请求的幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。**ClientToken**只支持ASCII字符。',
            'type' => 'string',
            'required' => false,
            'example' => '0c593ea1-3bea-11e9-b96b-88e9fe637760',
          ),
        ),
        2 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只预检此次请求。取值：

- **true**：发送检查请求，不会接受连接请求。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，会返回错误码`DryRunOperation`。

- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接接受连接请求。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        3 => 
        array (
          'name' => 'ServiceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '终端节点服务ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'epsrv-hp3vpx8yqxblby3i****',
          ),
        ),
        4 => 
        array (
          'name' => 'EndpointId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '终端节点ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ep-hp33b2e43fays7s8****',
          ),
        ),
        5 => 
        array (
          'name' => 'Bandwidth',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '终端节点的连接带宽。单位：Mbps。取值范围：**3072~10240**。

>终端节点的连接带宽取值范围为 **100~10240**，默认为**3072** Mbps，当终端节点与终端节点服务进行连接时，则取默认带宽值为最小带宽值，此时，取值范围为**3072~10240**。当传统型负载均衡CLB或应用型负载均衡ALB作为服务资源时，您可以根据实际业务需要修改终端节点连接带宽。网络型负载均衡NLB不支持限速。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => false,
            'maximum' => '2147483647',
            'minimum' => '0',
            'example' => '3072',
          ),
        ),
        6 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要接受的终端节点连接的地域ID。

您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。 ',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-huhehaote',
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
                'example' => '0ED8D006-F706-4D23-88ED-E11ED28DCAC0',
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
            'errorCode' => 'EndpointServiceNotFound',
            'errorMessage' => 'The specified Service does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'EndpointConnectionNotFound',
            'errorMessage' => 'The specified endpoint connection does not exist.',
          ),
          2 => 
          array (
            'errorCode' => 'EndpointConnectionOperationDenied',
            'errorMessage' => 'The endpoint is being connected.',
          ),
          3 => 
          array (
            'errorCode' => 'EndpointOperationDenied',
            'errorMessage' => 'The specified operation of endpoint is not allowed.',
          ),
          4 => 
          array (
            'errorCode' => 'OperationDenied.NoAvailableServiceResource',
            'errorMessage' => 'The operation is not allowed because of there are no resource in some available zones of endpoint service.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"0ED8D006-F706-4D23-88ED-E11ED28DCAC0\\"\\n}","errorExample":""},{"type":"xml","example":"<EnableVpcEndpointConnectionResponse>\\n    <RequestId>0ED8D006-F706-4D23-88ED-E11ED28DCAC0</RequestId>\\n</EnableVpcEndpointConnectionResponse>","errorExample":""}]',
      'title' => '接受终端节点连接请求',
      'summary' => '调用EnableVpcEndpointConnection接口，终端节点服务接受终端节点的连接请求。',
      'description' => '- **EnableVpcEndpointConnection**接口属于异步接口，即系统会返回一个请求ID，但该终端节点服务连接尚未成功，系统后台的连接任务仍在进行。您可以调用[GetVpcEndpointAttribute](~~183568~~)接口查询终端节点服务连接状态：

    - 当连接处于**Connecting**状态时，表示终端节点连接服务正在连接。
    - 当连接处于**Connected**状态时，表示终端节点连接服务连接成功。

- **EnableVpcEndpointConnection**接口不支持在同一个阿里云账号（主账号）下并发接受终端节点连接请求。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UpdateVpcEndpointConnectionAttribute' => 
    array (
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
            'description' => '要修改的终端节点连接带宽的地域ID。
您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。 ',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'eu-west-1',
          ),
        ),
        1 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端Token，用于保证请求的幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。**ClientToken**只支持ASCII字符。',
            'type' => 'string',
            'required' => false,
            'example' => '0c593ea1-3bea-11e9-b96b-88e9fe637760',
          ),
        ),
        2 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会修改连接带宽。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        3 => 
        array (
          'name' => 'ServiceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '终端节点服务ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'epsrv-hp3vpx8yqxblby3i****',
          ),
        ),
        4 => 
        array (
          'name' => 'EndpointId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '终端节点ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ep-hp33b2e43fays7s8****',
          ),
        ),
        5 => 
        array (
          'name' => 'Bandwidth',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要修改的终端节点的连接带宽。单位 Mbps。取值范围：**3072**~**10240**。

> 终端节点的连接带宽取值范围为 **100**~**10240**，默认为**3072** Mbps，当终端节点与终端节点服务进行连接时，则取默认带宽值为最小带宽值，此时，取值范围为**3072**~**10240**。当传统型负载均衡CLB或应用型负载均衡ALB作为服务资源时，您可以根据实际业务需要修改终端节点连接带宽。网络型负载均衡NLB不支持限速。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '2147483647',
            'minimum' => '0',
            'example' => '3072',
          ),
        ),
        6 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要修改的终端节点连接带宽的地域ID。
您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。 ',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'eu-west-1',
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
                'example' => '0ED8D006-F706-4D23-88ED-E11ED28DCAC0',
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
            'errorCode' => 'EndpointServiceNotFound',
            'errorMessage' => 'The specified Service does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'EndpointConnectionNotFound',
            'errorMessage' => 'The specified endpoint connection does not exist.',
          ),
          2 => 
          array (
            'errorCode' => 'EndpointConnectionOperationDenied',
            'errorMessage' => 'The endpoint is being connected.',
          ),
          3 => 
          array (
            'errorCode' => 'EndpointNotFound',
            'errorMessage' => 'The specified Endpoint does not exist.',
          ),
          4 => 
          array (
            'errorCode' => 'OperationDenied.VpcNatServiceResourceTypeNotSupportBandwidth',
            'errorMessage' => 'The operation is not allowed because of VpcNatServiceResourceTypeNotSupportBandwidth.',
          ),
          5 => 
          array (
            'errorCode' => 'UpdateBandWidthUnSupported',
            'errorMessage' => 'Bandwidth updates are not supported for this service.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"0ED8D006-F706-4D23-88ED-E11ED28DCAC0\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateVpcEndpointConnectionAttributeResponse>\\n    <RequestId>0ED8D006-F706-4D23-88ED-E11ED28DCAC0</RequestId>\\n</UpdateVpcEndpointConnectionAttributeResponse>","errorExample":""}]',
      'title' => '修改终端节点连接的属性',
      'summary' => '调用UpdateVpcEndpointConnectionAttribute接口，修改终端节点连接的属性。',
      'description' => '**UpdateVpcEndpointConnectionAttribute**接口不支持在同一个阿里云账号（主账号）下并发修改终端节点连接带宽。',
    ),
    'ListVpcEndpointConnections' => 
    array (
      'summary' => '调用ListVpcEndpointConnections接口，查询终端节点连接。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要查询的终端节点连接的地域ID。

您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。 ',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-huhehaote',
          ),
        ),
        1 => 
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
            'example' => 'caeba0bbb2be03f84eb48b699f0a4883',
          ),
        ),
        2 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页大小。取值范围：**1**~**50**。默认值：**50**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '1000',
            'minimum' => '1',
            'example' => '50',
            'default' => '50',
          ),
        ),
        3 => 
        array (
          'name' => 'ServiceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '终端节点服务ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'epsrv-hp3vpx8yqxblby3i****',
          ),
        ),
        4 => 
        array (
          'name' => 'EniId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '终端节点网卡ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'eni-hp32lk0pyv6o94hs****',
          ),
        ),
        5 => 
        array (
          'name' => 'EndpointId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '终端节点ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'ep-hp33b2e43fays7s8****',
          ),
        ),
        6 => 
        array (
          'name' => 'ConnectionStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '终端节点连接状态，取值：

- **Pending**：修改中。

- **Connecting**：连接中。

- **Connected**：已连接。

- **Disconnecting**：断开连接中。

- **Disconnected**：未连接。

- **Deleting**：删除中。

- **ServiceDeleted**：对应的终端节点服务已删除。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'Disconnected',
          ),
        ),
        7 => 
        array (
          'name' => 'EndpointOwnerId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '终端节点所属的账号ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'docRequired' => false,
            'maximum' => '9223372036854775807',
            'minimum' => '0',
            'example' => '25346073170691****',
          ),
        ),
        8 => 
        array (
          'name' => 'ResourceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务资源ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'lb-hp32z1wp5peaoox2q****',
          ),
        ),
        9 => 
        array (
          'name' => 'ReplacedResourceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '平滑迁移场景下被替换的服务资源ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'lb-hp32z1wp5peaoox2q****',
          ),
        ),
        10 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要查询的终端节点连接的地域ID。

您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。 ',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-huhehaote',
          ),
        ),
        11 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要查询的终端节点所属的资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-acfmy*****',
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
              'Connections' => 
              array (
                'description' => '终端节点连接信息。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '终端节点连接信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Zones' => 
                    array (
                      'description' => '可用区信息。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '	
可用区信息。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'VSwitchId' => 
                          array (
                            'description' => '终端节点所属的交换机。',
                            'type' => 'string',
                            'example' => 'vsw-hp3uf6045ljdhd5zr****',
                          ),
                          'ZoneId' => 
                          array (
                            'description' => '可用区ID。',
                            'type' => 'string',
                            'example' => 'cn-huhehaote-b',
                          ),
                          'ResourceId' => 
                          array (
                            'description' => '服务资源ID。',
                            'type' => 'string',
                            'example' => 'lb-hp32z1wp5peaoox2q****',
                          ),
                          'EniId' => 
                          array (
                            'description' => '终端节点网卡ID。',
                            'type' => 'string',
                            'example' => 'eni-hp32lk0pyv6o94hs****',
                          ),
                          'ZoneDomain' => 
                          array (
                            'description' => '可用区域名。',
                            'type' => 'string',
                            'example' => 'ep-hp34jaz8ykl0exwt****-cn-huhehaote.epsrv-hp3vpx8yqxblby3i****.cn-huhehaote-b.privatelink.aliyuncs.com',
                          ),
                          'ZoneStatus' => 
                          array (
                            'description' => '可用区的状态。取值：
- **Creating**：创建中。
- **Wait**：等待连接。
- **Connected**：已连接。
- **Deleting**：删除中。
- **Disconnecting**：断开连接中。
- **Disconnected**：已断开。
- **Connecting**：连接中。
- **Migrating**：迁移中。
- **Migrated**：已迁移。',
                            'type' => 'string',
                            'example' => 'Connected',
                          ),
                          'ReplacedResourceId' => 
                          array (
                            'description' => '平滑迁移场景下被替换的服务资源ID。',
                            'type' => 'string',
                            'example' => 'lb-hp32z1wp5peaoox2q****',
                          ),
                          'ReplacedEniId' => 
                          array (
                            'description' => '平滑迁移场景下被替换的终端节点网卡ID。',
                            'type' => 'string',
                            'example' => 'eni-hp32lk0pyv6o94hs****',
                          ),
                        ),
                      ),
                    ),
                    'ModifiedTime' => 
                    array (
                      'description' => '连接修改时间。',
                      'type' => 'string',
                      'example' => '2021-09-28T10:34:46Z',
                    ),
                    'Bandwidth' => 
                    array (
                      'description' => '终端节点连接的连接带宽，单位：Mbps。取值范围：**1024~10240**。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1024',
                    ),
                    'EndpointOwnerId' => 
                    array (
                      'description' => '终端节点所属的账号ID。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '25346073170691****',
                    ),
                    'ResourceOwner' => 
                    array (
                      'description' => '终端节点和终端节点服务是否同一账号，取值：

- **true**：是。

- **false**：否。',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'ServiceId' => 
                    array (
                      'description' => '终端节点服务的ID。',
                      'type' => 'string',
                      'example' => 'epsrv-hp3vpx8yqxblby3i****',
                    ),
                    'ConnectionStatus' => 
                    array (
                      'description' => '终端节点连接状态，取值：

- **Pending**：修改中。

- **Connecting**：连接中。

- **Connected**：已连接。

- **Disconnecting**：断开连接中。

- **Disconnected**：未连接。

- **Deleting**：删除中。

- **ServiceDeleted**：对应的终端节点服务已删除。',
                      'type' => 'string',
                      'example' => 'Disconnected',
                    ),
                    'EndpointId' => 
                    array (
                      'description' => '终端节点ID。',
                      'type' => 'string',
                      'example' => 'ep-hp33b2e43fays7s8****',
                    ),
                    'EndpointVpcId' => 
                    array (
                      'description' => '终端节点所属的专有网络。',
                      'type' => 'string',
                      'example' => 'vpc-hp356stwkxg3fn2xe****',
                    ),
                    'ResourceGroupId' => 
                    array (
                      'description' => '终端节点所属的资源组ID。',
                      'type' => 'string',
                      'example' => 'rg-acfmw353z35v***',
                    ),
                  ),
                ),
              ),
              'NextToken' => 
              array (
                'description' => '是否拥有下一次查询的令牌（Token）。取值：
- 如果**NextToken**为空表示没有下一次查询。
- 如果**NextToken**有返回值，该取值表示下一次查询开始的令牌。',
                'type' => 'string',
                'example' => 'caeba0bbb2be03f84eb48b699f0a4883',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '0ED8D006-F706-4D23-88ED-E11ED28DCAC0',
              ),
              'MaxResults' => 
              array (
                'description' => '分页大小。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '50',
              ),
              'TotalCount' => 
              array (
                'description' => '查询到的终端节点连接列表条目数。',
                'type' => 'string',
                'example' => '1',
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
            'errorCode' => 'EndpointServiceNotFound',
            'errorMessage' => 'The specified Service does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Connections\\": [\\n    {\\n      \\"Zones\\": [\\n        {\\n          \\"VSwitchId\\": \\"vsw-hp3uf6045ljdhd5zr****\\",\\n          \\"ZoneId\\": \\"cn-huhehaote-b\\",\\n          \\"ResourceId\\": \\"lb-hp32z1wp5peaoox2q****\\",\\n          \\"EniId\\": \\"eni-hp32lk0pyv6o94hs****\\",\\n          \\"ZoneDomain\\": \\"ep-hp34jaz8ykl0exwt****-cn-huhehaote.epsrv-hp3vpx8yqxblby3i****.cn-huhehaote-b.privatelink.aliyuncs.com\\",\\n          \\"ZoneStatus\\": \\"Connected\\",\\n          \\"ReplacedResourceId\\": \\"lb-hp32z1wp5peaoox2q****\\",\\n          \\"ReplacedEniId\\": \\"eni-hp32lk0pyv6o94hs****\\"\\n        }\\n      ],\\n      \\"ModifiedTime\\": \\"2021-09-28T10:34:46Z\\",\\n      \\"Bandwidth\\": 1024,\\n      \\"EndpointOwnerId\\": 0,\\n      \\"ResourceOwner\\": true,\\n      \\"ServiceId\\": \\"epsrv-hp3vpx8yqxblby3i****\\",\\n      \\"ConnectionStatus\\": \\"Disconnected\\",\\n      \\"EndpointId\\": \\"ep-hp33b2e43fays7s8****\\",\\n      \\"EndpointVpcId\\": \\"vpc-hp356stwkxg3fn2xe****\\",\\n      \\"ResourceGroupId\\": \\"rg-acfmw353z35v***\\"\\n    }\\n  ],\\n  \\"NextToken\\": \\"caeba0bbb2be03f84eb48b699f0a4883\\",\\n  \\"RequestId\\": \\"0ED8D006-F706-4D23-88ED-E11ED28DCAC0\\",\\n  \\"MaxResults\\": 50,\\n  \\"TotalCount\\": \\"1\\"\\n}","errorExample":""},{"type":"xml","example":"<ListVpcEndpointConnectionsResponse>\\n    <Connections>\\n        <ResourceOwner>true</ResourceOwner>\\n        <Zones>\\n            <VSwitchId>vsw-hp3uf6045ljdhd5zr****</VSwitchId>\\n            <ZoneId>cn-huhehaote-b</ZoneId>\\n            <ResourceId>lb-hp32z1wp5peaoox2q****</ResourceId>\\n            <EniId>eni-hp32lk0pyv6o94hs****</EniId>\\n            <ZoneDomain>ep-hp34jaz8ykl0exwt****-cn-huhehaote.epsrv-hp3vpx8yqxblby3i****.cn-huhehaote-b.privatelink.aliyuncs.com</ZoneDomain>\\n            <ZoneStatus>Connected</ZoneStatus>\\n            <ReplacedResourceId>lb-hp32z1wp5peaoox2q****</ReplacedResourceId>\\n            <ReplacedEniId>eni-hp32lk0pyv6o94hs****</ReplacedEniId>\\n            <ConnectionId>123</ConnectionId>\\n            <ConnectionStringId>12345</ConnectionStringId>\\n        </Zones>\\n        <ModifiedTime>2021-09-28T10:34:46Z</ModifiedTime>\\n        <Bandwidth>1024</Bandwidth>\\n        <ServiceId>epsrv-hp3vpx8yqxblby3i****</ServiceId>\\n        <ConnectionStatus>Disconnected</ConnectionStatus>\\n        <EndpointId>ep-hp33b2e43fays7s8****</EndpointId>\\n        <EndpointVpcId>vpc-hp356stwkxg3fn2xe****</EndpointVpcId>\\n    </Connections>\\n    <NextToken>caeba0bbb2be03f84eb48b699f0a4883</NextToken>\\n    <RequestId>0ED8D006-F706-4D23-88ED-E11ED28DCAC0</RequestId>\\n    <MaxResults>50</MaxResults>\\n</ListVpcEndpointConnectionsResponse>","errorExample":""}]',
      'title' => '查询终端节点连接',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DisableVpcEndpointConnection' => 
    array (
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
            'description' => '要拒绝终端节点连接的地域ID。
您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'eu-west-1',
          ),
        ),
        1 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端Token，用于保证请求的幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。**ClientToken**只支持ASCII字符。',
            'type' => 'string',
            'required' => false,
            'example' => '0c593ea1-3bea-11e9-b96b-88e9fe637760',
          ),
        ),
        2 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会拒绝连接请求。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        3 => 
        array (
          'name' => 'ServiceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '终端节点服务ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'epsrv-hp3vpx8yqxblby3i****',
          ),
        ),
        4 => 
        array (
          'name' => 'EndpointId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '终端节点ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ep-hp33b2e43fays7s8****',
          ),
        ),
        5 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要拒绝终端节点连接的地域ID。
您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'eu-west-1',
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
                'example' => '0ED8D006-F706-4D23-88ED-E11ED28DCAC0',
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
            'errorCode' => 'EndpointServiceNotFound',
            'errorMessage' => 'The specified Service does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'EndpointConnectionNotFound',
            'errorMessage' => 'The specified endpoint connection does not exist.',
          ),
          2 => 
          array (
            'errorCode' => 'EndpointConnectionOperationDenied',
            'errorMessage' => 'The endpoint is being connected.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"0ED8D006-F706-4D23-88ED-E11ED28DCAC0\\"\\n}","errorExample":""},{"type":"xml","example":"<DisableVpcEndpointConnectionResponse>\\n    <RequestId>0ED8D006-F706-4D23-88ED-E11ED28DCAC0</RequestId>\\n</DisableVpcEndpointConnectionResponse>","errorExample":""}]',
      'title' => '拒绝终端节点的连接请求',
      'summary' => '调用DisableVpcEndpointConnection接口，拒绝终端节点的连接请求。',
      'description' => '- **DisableVpcEndpointConnection**接口属于异步接口，即系统会返回一个请求ID，但该终端节点尚未断开完成，系统后台断开任务仍在进行中。您可以调用[GetVpcEndpointAttribute](~~183568~~)查询终端节点的断开状态：

    - 当终端节点连接状态处于**Disconnecting**状态时，表示终端节点连接正在断开中。
    - 当终端节点连接状态处于**Disconnected**状态时，表示终端节点连接已断开。

- **DisableVpcEndpointConnection**接口不支持在同一个阿里云账号（主账号）下并发拒绝终端节点的连接请求。',
    ),
    'AddZoneToVpcEndpoint' => 
    array (
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
            'description' => '要添加可用区的终端节点所属的地域ID。

您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。 ',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'ZoneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要添加的可用区ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou-b',
          ),
        ),
        2 => 
        array (
          'name' => 'VSwitchId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要添加的可用区中的交换机，系统会自动在该交换机下创建一个终端节点网卡。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'vsw-hjkshjvdkdvd****',
          ),
        ),
        3 => 
        array (
          'name' => 'ip',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要添加的可用区中的终端节点网卡的IP。',
            'type' => 'string',
            'required' => false,
            'example' => '192.XX.XX.32',
          ),
        ),
        4 => 
        array (
          'name' => 'EndpointId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要添加可用区的终端节点的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ep-hp33b2e43fays7s8****',
          ),
        ),
        5 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会添加可用区。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        6 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端Token，用于保证请求的幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。**ClientToken**只支持ASCII字符。',
            'type' => 'string',
            'required' => false,
            'example' => '0c593ea1-3bea-11e9-b96b-88e9fe637760',
          ),
        ),
        7 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要添加可用区的终端节点所属的地域ID。

您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。 ',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
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
                'example' => '0c593ea1-3bea-11e9-b96b-88e9fe637760',
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
            'errorCode' => 'OperationDenied.EndpointProtected',
            'errorMessage' => 'The operation is not allowed because of EndpointProtected.',
          ),
          1 => 
          array (
            'errorCode' => 'EndpointNotFound',
            'errorMessage' => 'The specified Endpoint does not exist.',
          ),
          2 => 
          array (
            'errorCode' => 'EndpointOperationDenied',
            'errorMessage' => 'The specified operation of endpoint is not allowed.',
          ),
          3 => 
          array (
            'errorCode' => 'EndpointLocked',
            'errorMessage' => 'The specified Endpoint is locked.',
          ),
          4 => 
          array (
            'errorCode' => 'EndpointConnectionOperationDenied',
            'errorMessage' => 'The endpoint is being connected.',
          ),
          5 => 
          array (
            'errorCode' => 'EndpointZoneDuplicated',
            'errorMessage' => 'The zone is duplicated for the Endpoint.',
          ),
          6 => 
          array (
            'errorCode' => 'EndpointServiceNotSupportedZone',
            'errorMessage' => 'The specified endpoint service does not support the zone.',
          ),
          7 => 
          array (
            'errorCode' => 'QuotaMisMatched',
            'errorMessage' => 'The resource you applied for has exceeded the quota.',
          ),
          8 => 
          array (
            'errorCode' => 'EndpointDuplicated',
            'errorMessage' => 'The endpoint of the service already exists and cannot be created again.',
          ),
          9 => 
          array (
            'errorCode' => 'EndpointServiceDeleted',
            'errorMessage' => 'The specified Service is already deleted.',
          ),
          10 => 
          array (
            'errorCode' => 'EndpointServiceResourceNotFound',
            'errorMessage' => 'The specified service resource is not found.',
          ),
          11 => 
          array (
            'errorCode' => 'VSwitchNotFound',
            'errorMessage' => 'The specified VSwitch does not exist.',
          ),
          12 => 
          array (
            'errorCode' => 'EniIpUnavailable',
            'errorMessage' => 'The specified IP address is unavailable.',
          ),
          13 => 
          array (
            'errorCode' => 'EndpointProtected',
            'errorMessage' => 'The specified Endpoint is protected.',
          ),
          14 => 
          array (
            'errorCode' => 'VSwitchStatusNotAllowed',
            'errorMessage' => 'The specified vswitch status is not Available.',
          ),
          15 => 
          array (
            'errorCode' => 'VpcNatServiceException',
            'errorMessage' => 'The vpcNat service is busy',
          ),
          16 => 
          array (
            'errorCode' => 'ResourceNotEnough.VSwitchIp',
            'errorMessage' => 'The specified resource of VSwitchIp is not enough.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"0c593ea1-3bea-11e9-b96b-88e9fe637760\\"\\n}","errorExample":""},{"type":"xml","example":"<AddZoneToVpcEndpointResponse>\\n    <RequestId>0c593ea1-3bea-11e9-b96b-88e9fe637760</RequestId>\\n</AddZoneToVpcEndpointResponse>","errorExample":""}]',
      'title' => '为终端节点添加可用区',
      'summary' => '调用AddZoneToVpcEndpoint接口，为终端节点添加可用区。',
      'description' => '- **AddZoneToVpcEndpoint**接口属于异步接口，即系统会返回一个请求ID，但终端节点可用区尚未添加完成，系统后台添加任务仍在进行中。您可以调用[ListVpcEndpointZones](~~183560~~)查询终端节点可用区的状态：

    - 当终端节点可用区处于**Creating**状态时，表示终端节点可用区正在添加中。
    - 当在终端节点中可以查询到该可用区时，表示终端节点可用区添加完成。

- **AddZoneToVpcEndpoint**接口不支持给同一个终端节点实例并发添加可用区。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListVpcEndpointZones' => 
    array (
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
            'description' => '要查询的地域ID。

您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-huhehaote',
          ),
        ),
        1 => 
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
            'example' => 'caeba0bbb2be03f84eb48b699f0a4883',
          ),
        ),
        2 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分批次查询时每次显示的条目数。取值范围：**1**~**50**，默认值：**50**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '1000',
            'minimum' => '0',
            'example' => '50',
            'default' => '50',
          ),
        ),
        3 => 
        array (
          'name' => 'EndpointId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要查询可用区的终端节点ID。

指定终端节点ID后，系统会查询该终端节点的可用区。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ep-hp33b2e43fays7s8****',
          ),
        ),
        4 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要查询的地域ID。

您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-huhehaote',
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
                'example' => 'caeba0bbb2be03f84eb48b699f0a4883',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '0ED8D006-F706-4D23-88ED-E11ED28DCAC0',
              ),
              'MaxResults' => 
              array (
                'description' => '分批次查询时每次显示的条目数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '50',
              ),
              'TotalCount' => 
              array (
                'description' => '总记录数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '12',
              ),
              'Zones' => 
              array (
                'description' => '可用区信息集合。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '可用区信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'VSwitchId' => 
                    array (
                      'description' => '可用区中的交换机，系统会自动在该交换机下创建一个终端节点网卡。',
                      'type' => 'string',
                      'example' => 'vsw-hjkshjvdkdvd****',
                    ),
                    'EniIp' => 
                    array (
                      'description' => '终端节点网卡的IP地址。',
                      'type' => 'string',
                      'example' => '192.168.2.23',
                    ),
                    'ZoneStatus' => 
                    array (
                      'description' => '可用区状态，取值：

- **Creating**：创建中。
- **Wait**：等待连接。
- **Connected**：已连接。
- **Deleting**：删除中。
- **Disconnecting**：断开连接中。
- **Disconnected**：已断开。
- **Connecting**：连接中。',
                      'type' => 'string',
                      'example' => 'Wait',
                    ),
                    'ZoneId' => 
                    array (
                      'description' => '可用区ID。',
                      'type' => 'string',
                      'example' => 'cn-huhehaote-a',
                    ),
                    'EniId' => 
                    array (
                      'description' => '终端节点网卡ID。',
                      'type' => 'string',
                      'example' => 'eni-hp3c8qj1tyct8aqy****',
                    ),
                    'ZoneDomain' => 
                    array (
                      'description' => '可用区域名。

终端节点连接建立成功后，可以通过该可用区域名访问终端节点服务中的服务资源。',
                      'type' => 'string',
                      'example' => 'ep-hp3f033dp24c5yc9****-cn-huhehaote.epsrv-hp3itcpowf37m3d5****.cn-huhehaote-a.privatelink.aliyuncs.com',
                    ),
                    'RegionId' => 
                    array (
                      'description' => '终端节点所属的地域ID。',
                      'type' => 'string',
                      'example' => 'cn-huhehaote',
                    ),
                    'ZoneIpv6Address' => 
                    array (
                      'description' => '终端节点服务是否支持IPv6功能。取值：

- **true**：是。
- **false**（默认值）：否。',
                      'type' => 'string',
                      'example' => 'false',
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
            'errorCode' => 'EndpointNotFound',
            'errorMessage' => 'The specified Endpoint does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"NextToken\\": \\"caeba0bbb2be03f84eb48b699f0a4883\\",\\n  \\"RequestId\\": \\"0ED8D006-F706-4D23-88ED-E11ED28DCAC0\\",\\n  \\"MaxResults\\": 50,\\n  \\"TotalCount\\": 12,\\n  \\"Zones\\": [\\n    {\\n      \\"VSwitchId\\": \\"vsw-hjkshjvdkdvd****\\",\\n      \\"EniIp\\": \\"192.168.2.23\\",\\n      \\"ZoneStatus\\": \\"Wait\\",\\n      \\"ZoneId\\": \\"cn-huhehaote-a\\",\\n      \\"EniId\\": \\"eni-hp3c8qj1tyct8aqy****\\",\\n      \\"ZoneDomain\\": \\"ep-hp3f033dp24c5yc9****-cn-huhehaote.epsrv-hp3itcpowf37m3d5****.cn-huhehaote-a.privatelink.aliyuncs.com\\",\\n      \\"RegionId\\": \\"cn-huhehaote\\",\\n      \\"ZoneIpv6Address\\": \\"false\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListVpcEndpointZonesResponse>\\n    <NextToken>caeba0bbb2be03f84eb48b699f0a4883</NextToken>\\n    <RequestId>0ED8D006-F706-4D23-88ED-E11ED28DCAC0</RequestId>\\n    <MaxResults>50</MaxResults>\\n    <Zones>\\n        <VSwitchId>vsw-hjkshjvdkdvd****</VSwitchId>\\n        <EniIp>192.168.2.23</EniIp>\\n        <ZoneStatus>Wait</ZoneStatus>\\n        <ZoneId>cn-huhehaote-a</ZoneId>\\n        <ServiceStatus>Active</ServiceStatus>\\n        <EniId>eni-hp3c8qj1tyct8aqy****</EniId>\\n        <ZoneDomain>ep-hp3f033dp24c5yc9****-cn-huhehaote.epsrv-hp3itcpowf37m3d5****.cn-huhehaote-a.privatelink.aliyuncs.com</ZoneDomain>\\n        <RegionId>cn-huhehaote</RegionId>\\n        <ZoneIpv6Address>false</ZoneIpv6Address>\\n    </Zones>\\n</ListVpcEndpointZonesResponse>","errorExample":""}]',
      'title' => '查询终端节点可用区列表',
      'summary' => '调用ListVpcEndpointZones接口，查询终端节点可用区列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'RemoveZoneFromVpcEndpoint' => 
    array (
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
            'description' => '要删除可用区的终端节点所属的地域ID。
您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。 ',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'eu-west-1',
          ),
        ),
        1 => 
        array (
          'name' => 'ZoneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要删除的可用区ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'eu-west-1a',
          ),
        ),
        2 => 
        array (
          'name' => 'EndpointId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要删除可用区的终端节点ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ep-hp33b2e43fays7s8****',
          ),
        ),
        3 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会删除可用区。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        4 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端Token，用于保证请求的幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。**ClientToken**只支持ASCII字符。',
            'type' => 'string',
            'required' => false,
            'example' => '0c593ea1-3bea-11e9-b96b-88e9fe637760',
          ),
        ),
        5 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要删除可用区的终端节点所属的地域ID。
您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。 ',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'eu-west-1',
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
                'example' => '0c593ea1-3bea-11e9-b96b-88e9fe637760',
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
            'errorCode' => 'OperationDenied.EndpointProtected',
            'errorMessage' => 'The operation is not allowed because of EndpointProtected.',
          ),
          1 => 
          array (
            'errorCode' => 'EndpointNotFound',
            'errorMessage' => 'The specified Endpoint does not exist.',
          ),
          2 => 
          array (
            'errorCode' => 'EndpointOperationDenied',
            'errorMessage' => 'The specified operation of endpoint is not allowed.',
          ),
          3 => 
          array (
            'errorCode' => 'EndpointLocked',
            'errorMessage' => 'The specified Endpoint is locked.',
          ),
          4 => 
          array (
            'errorCode' => 'EndpointConnectionOperationDenied',
            'errorMessage' => 'The endpoint is being connected.',
          ),
          5 => 
          array (
            'errorCode' => 'EndpointZoneNotFound',
            'errorMessage' => 'The specified zone of Endpoint does not exist.',
          ),
          6 => 
          array (
            'errorCode' => 'EndpointProtected',
            'errorMessage' => 'The specified Endpoint is protected.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"0c593ea1-3bea-11e9-b96b-88e9fe637760\\"\\n}","errorExample":""},{"type":"xml","example":"<RemoveZoneFromVpcEndpointResponse>\\n    <RequestId>0c593ea1-3bea-11e9-b96b-88e9fe637760</RequestId>\\n</RemoveZoneFromVpcEndpointResponse>","errorExample":""}]',
      'title' => '删除终端节点的可用区',
      'summary' => '调用RemoveZoneFromVpcEndpoint接口，删除终端节点的可用区。',
      'description' => '- **RemoveZoneFromVpcEndpoint**接口属于异步接口，即系统会返回一个请求ID，但终端节点可用区尚未删除完成，系统后台删除任务仍在进行中。您可以调用[ListVpcEndpointZones](~~183560~~)查询终端节点可用区的删除状态：

    - 当终端节点可用区处于**Deleting**状态时，表示终端节点可用区正在删除中。
    - 当查询不到该终端节点可用区时，表示该终端节点可用区已删除。

- **RemoveZoneFromVpcEndpoint**接口不支持给同一个终端节点实例并发删除可用区。',
    ),
    'DisableVpcEndpointZoneConnection' => 
    array (
      'summary' => '调用DisableVpcEndpointZoneConnection接口，断开终端节点可用区连接。',
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
            'description' => '要拒绝终端节点连接的地域ID。

您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端Token，用于保证请求的幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。**ClientToken**只支持ASCII字符。',
            'type' => 'string',
            'required' => false,
            'example' => '0c593ea1-3bea-11e9-b96b-88e9fe637760',
          ),
        ),
        2 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会拒绝连接请求。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        3 => 
        array (
          'name' => 'ServiceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '终端节点服务ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'epsrv-hp3vpx8yqxblby3i****',
          ),
        ),
        4 => 
        array (
          'name' => 'EndpointId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '终端节点ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ep-hp33b2e43fays7s8****',
          ),
        ),
        5 => 
        array (
          'name' => 'ZoneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '终端节点连接可用区ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou-b',
          ),
        ),
        6 => 
        array (
          'name' => 'ReplacedResource',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否断开平滑迁移后的旧连接。取值：

- **true**：是。

- **false**（默认值）：否。

> 在资源做平滑迁移后，断开终端节点在此可用区的旧的连接时选择此属性。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
        7 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要拒绝终端节点连接的地域ID。

您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
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
                'example' => '0ED8D006-F706-4D23-88ED-E11ED28DCAC0',
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
            'errorCode' => 'EndpointServiceNotFound',
            'errorMessage' => 'The specified Service does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'EndpointConnectionNotFound',
            'errorMessage' => 'The specified endpoint connection does not exist.',
          ),
          2 => 
          array (
            'errorCode' => 'EndpointConnectionOperationDenied',
            'errorMessage' => 'The endpoint is being connected.',
          ),
          3 => 
          array (
            'errorCode' => 'IncorrectBusinessStatus.VpcEndpoint',
            'errorMessage' => 'The business status of %s [%s] is incorrect.',
          ),
          4 => 
          array (
            'errorCode' => 'IncorrectBusinessStatus.VpcEndpointService',
            'errorMessage' => 'The business status of %s [%s]  is incorrect.',
          ),
          5 => 
          array (
            'errorCode' => 'IncorrectStatus.VpcEndpoint',
            'errorMessage' => 'The status of %s [%s] is incorrect.',
          ),
          6 => 
          array (
            'errorCode' => 'IncorrectStatus.VpcEndpointConnection',
            'errorMessage' => 'The status of %s [%s] is incorrect.',
          ),
          7 => 
          array (
            'errorCode' => 'IncorrectStatus.VpcEndpointService',
            'errorMessage' => 'The status of %s [%s] is incorrect.',
          ),
          8 => 
          array (
            'errorCode' => 'IncorrectStatus.VpcEndpointZone',
            'errorMessage' => 'The status of %s [%s] is incorrect.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceNotFound.VpcEndpoint',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
          1 => 
          array (
            'errorCode' => 'ResourceNotFound.VpcEndpointConnection',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
          2 => 
          array (
            'errorCode' => 'ResourceNotFound.VpcEndpointService',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
          3 => 
          array (
            'errorCode' => 'ResourceNotFound.VpcEndpointZone',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"0ED8D006-F706-4D23-88ED-E11ED28DCAC0\\"\\n}","errorExample":""},{"type":"xml","example":"<DisableVpcEndpointZoneConnectionResponse>\\n    <RequestId>0ED8D006-F706-4D23-88ED-E11ED28DCAC0</RequestId>\\n</DisableVpcEndpointZoneConnectionResponse>","errorExample":""}]',
      'title' => '断开终端节点可用区连接',
      'description' => '- 当终端节点连接状态为**已连接**且终端节点可用区状态为**已连接**或**已迁移**时，才能调用此接口。
- **DisableVpcEndpointZoneConnection**接口属于异步接口，即系统会返回一个请求ID，但终端节点在此可用区的连接请求尚未拒绝完成，系统后台拒绝任务仍在进行中。您可以调用[ListVpcEndpointZones](~~183560~~)查询终端节点可用区的连接请求状态：

    - 当终端节点可用区处于**Disconnecting**状态时，表示连接请求正在断开中。

    - 当终端节点可用区处于**Disconnected**状态时，表示连接请求断开完成。

- **DisableVpcEndpointZoneConnection**接口不支持在同一个终端节点实例下并发拒绝终端节点在此可用区的连接请求。',
    ),
    'EnableVpcEndpointZoneConnection' => 
    array (
      'summary' => '调用EnableVpcEndpointZoneConnection接口，允许终端节点可用区连接。',
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
            'description' => '要接受终端节点连接的地域ID。您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端Token，用于保证请求的幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。**ClientToken**只支持ASCII字符。',
            'type' => 'string',
            'required' => false,
            'example' => '0c593ea1-3bea-11e9-b96b-88e9fe637760',
          ),
        ),
        2 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会接受连接请求。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        3 => 
        array (
          'name' => 'ServiceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '终端节点服务ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'epsrv-hp3vpx8yqxblby3i****',
          ),
        ),
        4 => 
        array (
          'name' => 'EndpointId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '终端节点ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ep-hp33b2e43fays7s8****',
          ),
        ),
        5 => 
        array (
          'name' => 'ZoneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '终端节点连接可用区ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou-b',
          ),
        ),
        6 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要接受终端节点连接的地域ID。您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
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
                'example' => '0ED8D006-F706-4D23-88ED-E11ED28DCAC0',
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
            'errorCode' => 'EndpointServiceNotFound',
            'errorMessage' => 'The specified Service does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'EndpointConnectionNotFound',
            'errorMessage' => 'The specified endpoint connection does not exist.',
          ),
          2 => 
          array (
            'errorCode' => 'EndpointConnectionOperationDenied',
            'errorMessage' => 'The endpoint is being connected.',
          ),
          3 => 
          array (
            'errorCode' => 'EndpointOperationDenied',
            'errorMessage' => 'The specified operation of endpoint is not allowed.',
          ),
          4 => 
          array (
            'errorCode' => 'IncorrectBusinessStatus.VpcEndpoint',
            'errorMessage' => 'The business status of %s [%s] is incorrect.',
          ),
          5 => 
          array (
            'errorCode' => 'IncorrectBusinessStatus.VpcEndpointService',
            'errorMessage' => 'The business status of %s [%s]  is incorrect.',
          ),
          6 => 
          array (
            'errorCode' => 'IncorrectStatus.VpcEndpoint',
            'errorMessage' => 'The status of %s [%s] is incorrect.',
          ),
          7 => 
          array (
            'errorCode' => 'IncorrectStatus.VpcEndpointConnection',
            'errorMessage' => 'The status of %s [%s] is incorrect.',
          ),
          8 => 
          array (
            'errorCode' => 'IncorrectStatus.VpcEndpointService',
            'errorMessage' => 'The status of %s [%s] is incorrect.',
          ),
          9 => 
          array (
            'errorCode' => 'IncorrectStatus.VpcEndpointZone',
            'errorMessage' => 'The status of %s [%s] is incorrect.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceNotFound.VpcEndpoint',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
          1 => 
          array (
            'errorCode' => 'ResourceNotFound.VpcEndpointConnection',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
          2 => 
          array (
            'errorCode' => 'ResourceNotFound.VpcEndpointService',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
          3 => 
          array (
            'errorCode' => 'ResourceNotFound.VpcEndpointZone',
            'errorMessage' => 'The specified resource %s is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0ED8D006-F706-4D23-88ED-E11ED28DCAC0\\"\\n}","type":"json"}]',
      'title' => '允许终端节点可用区连接',
      'description' => '- 当终端节点连接状态为**已连接**且终端节点可用区状态为**已断开**时，才能调用此接口。
- **EnableVpcEndpointZoneConnection**接口属于异步接口，即系统会返回一个请求ID，但尚未接受终端节点在此可用区的连接请求，系统后台接受任务仍在进行中。您可以调用[ListVpcEndpointZones](~~183560~~)查询终端节点可用区的连接请求状态：

    - 当终端节点可用区处于**Connecting**状态时，表示连接请求正在接受中。
    - 当终端节点可用区处于**Connected**状态时，表示连接请求已接受。

- **EnableVpcEndpointZoneConnection**接口不支持在同一个终端节点实例下并发接受可用区的连接请求。',
    ),
    'UpdateVpcEndpointZoneConnectionResourceAttribute' => 
    array (
      'summary' => '调用UpdateVpcEndpointZoneConnectionResourceAttribute接口，替换终端节点可用区连接服务资源。',
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
            'description' => '要修改的终端节点连接带宽的地域ID。

您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端Token，用于保证请求的幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。**ClientToken**只支持ASCII字符。',
            'type' => 'string',
            'required' => false,
            'example' => '0c593ea1-3bea-11e9-b96b-88e9fe637760',
          ),
        ),
        2 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会修改服务资源。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        3 => 
        array (
          'name' => 'ServiceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '终端节点服务ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'epsrv-hp3vpx8yqxblby3i****',
          ),
        ),
        4 => 
        array (
          'name' => 'EndpointId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '终端节点ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ep-hp33b2e43fays7s8****',
          ),
        ),
        5 => 
        array (
          'name' => 'ZoneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '可用区ID。',
            'type' => 'string',
            'required' => true,
            'maximum' => '2147483647',
            'minimum' => '0',
            'example' => 'cn-hangzhou-b',
          ),
        ),
        6 => 
        array (
          'name' => 'ResourceAllocateMode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源分配模式，只能在终端节点连接处于**已断开**时调整资源分配模式。取值：

- **Auto**：自动分配服务资源（随机分配），此时会清除已经指定的服务资源。

- **Manual**：手动分配服务资源，此时必须输入**ResourceId**和**ResourceType**参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'Auto',
            'enum' => 
            array (
            ),
          ),
        ),
        7 => 
        array (
          'name' => 'ResourceReplaceMode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务资源迁移方式。取值：

- **Graceful**：平滑迁移，此时可用区连接平滑迁移服务资源。

- **Force**：强制迁移，此时可用区连接强制迁移服务资源。


>只能在终端节点连接处于**已连接**且需要迁移服务资源时输入此参数，此时必须输入**ResourceId**和**ResourceType**参数。 ',
            'type' => 'string',
            'required' => false,
            'example' => 'Graceful',
            'enum' => 
            array (
            ),
          ),
        ),
        8 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务资源类型。取值：

- **slb**：表示服务资源类型为专有网络类型且支持PrivateLink功能的传统型负载均衡CLB（Classic Load Balancer）。

-  **alb**：表示服务资源类型为专有网络类型且支持PrivateLink功能的应用型负载均衡ALB（Application Load Balancer）。

> 当**ResourceAllocateMode**为**Manual**或指定**ResourceReplaceMode**参数时，此参数必选。',
            'type' => 'string',
            'required' => false,
            'example' => 'slb',
          ),
        ),
        9 => 
        array (
          'name' => 'ResourceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '终端节点连接所在可用区手动分配或迁移的服务资源ID。

> 当**ResourceAllocateMode**为**Manual**或指定**ResourceReplaceMode**参数时，此参数必选。',
            'type' => 'string',
            'required' => false,
            'example' => 'lb-hp32z1wp5peaoox2q****',
          ),
        ),
        10 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要修改的终端节点连接带宽的地域ID。

您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
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
                'example' => '0ED8D006-F706-4D23-88ED-E11ED28DCAC0',
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
            'errorCode' => 'EndpointServiceNotFound',
            'errorMessage' => 'The specified Service does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'EndpointConnectionNotFound',
            'errorMessage' => 'The specified endpoint connection does not exist.',
          ),
          2 => 
          array (
            'errorCode' => 'EndpointConnectionOperationDenied',
            'errorMessage' => 'The endpoint is being connected.',
          ),
          3 => 
          array (
            'errorCode' => 'EndpointNotFound',
            'errorMessage' => 'The specified Endpoint does not exist.',
          ),
          4 => 
          array (
            'errorCode' => 'EndpointServiceLocked',
            'errorMessage' => 'The specified Service is locked.',
          ),
          5 => 
          array (
            'errorCode' => 'EndpointLocked',
            'errorMessage' => 'The specified Endpoint is locked.',
          ),
          6 => 
          array (
            'errorCode' => 'EndpointZoneNotFound',
            'errorMessage' => 'The specified zone of Endpoint does not exist.',
          ),
          7 => 
          array (
            'errorCode' => 'EndpointServiceResourceTypeNotSupport',
            'errorMessage' => 'The specified resource type is not supported.',
          ),
          8 => 
          array (
            'errorCode' => 'EndpointServiceResourceNotFound',
            'errorMessage' => 'The specified service resource is not found.',
          ),
          9 => 
          array (
            'errorCode' => 'ZoneOperationDenied',
            'errorMessage' => 'You cannot operate the specified zone.',
          ),
          10 => 
          array (
            'errorCode' => 'IllegalParam.ResourceAllocateMode',
            'errorMessage' => 'The param of %s is illegal.',
          ),
          11 => 
          array (
            'errorCode' => 'IllegalParam.ResourceReplaceMode',
            'errorMessage' => 'The param of %s is illegal.',
          ),
          12 => 
          array (
            'errorCode' => 'MissingParam.ResourceId',
            'errorMessage' => 'The param of %s is missing.',
          ),
          13 => 
          array (
            'errorCode' => 'MissingParam.ResourceAllocateMode',
            'errorMessage' => 'The param of %s is missing.',
          ),
          14 => 
          array (
            'errorCode' => 'OperationDenied.CurrentResourceAutoAllocated',
            'errorMessage' => 'The operation is not allowed because of CurrentResourceAutoAllocated.',
          ),
          15 => 
          array (
            'errorCode' => 'Mismatch.ZoneId',
            'errorMessage' => 'The %s is mismatched for %s and %s.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"0ED8D006-F706-4D23-88ED-E11ED28DCAC0\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateVpcEndpointZoneConnectionResourceAttributeResponse>\\n    <RequestId>0ED8D006-F706-4D23-88ED-E11ED28DCAC0</RequestId>\\n</UpdateVpcEndpointZoneConnectionResourceAttributeResponse>","errorExample":""}]',
      'title' => '替换终端节点可用区连接服务资源',
      'description' => '- 替换终端节点可用区连接服务资源的功能默认不开放，请登录[配额中心控制台](https://quotas.console.aliyun.com/white-list-products/privatelink/quotas)，搜索ID`privatelink_whitelist/svc_res_mgt_uat`进行申请。

- 请确保旧的服务资源不允许自动分配，具体操作，请参见[UpdateVpcEndpointServiceResourceAttribute](~~469340~~)。

- 终端节点连接处于**未连接**状态时，支持手动分配可用区的服务资源。
- 终端节点连接处于**已连接**状态后，支持手动迁移可用区的服务资源（此时有断连风险）。
- **UpdateVpcEndpointZoneConnectionResourceAttribute**接口属于异步接口，即系统会返回一个请求ID，但终端节点连接可用区的服务资源尚未修改完成，系统后台修改任务仍在进行中。您可以调用[GetVpcEndpointServiceAttribute](~~469330~~)查询服务资源的修改状态：

    - 当终端节点服务处于**Pending**状态时，表示服务资源正在修改中。
    - 当终端节点服务处于**Active**状态时，表示服务资源修改完成。

- **UpdateVpcEndpointZoneConnectionResourceAttribute**接口不支持在同一个终端节点实例下并发修改终端节点连接可用区的服务资源。',
    ),
    'AttachSecurityGroupToVpcEndpoint' => 
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
            'description' => '要加入安全组的终端节点所属的地域ID。
您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。 ',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'eu-west-1',
          ),
        ),
        1 => 
        array (
          'name' => 'SecurityGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要加入的安全组的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'sg-hp3c8qj1tyct90ej****',
          ),
        ),
        2 => 
        array (
          'name' => 'EndpointId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要加入安全组的终端节点的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ep-hp33b2e43fays7s8****',
          ),
        ),
        3 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会加入安全组。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        4 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端Token，用于保证请求的幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。**ClientToken**只支持ASCII字符。',
            'type' => 'string',
            'required' => false,
            'example' => '0c593ea1-3bea-11e9-b96b-88e9fe637760',
          ),
        ),
        5 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要加入安全组的终端节点所属的地域ID。
您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。 ',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'eu-west-1',
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
                'example' => '8D778FF9-7640-4C13-BCD6-9265CA9A2F81',
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
            'errorCode' => 'EndpointNotFound',
            'errorMessage' => 'The specified Endpoint does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'EndpointOperationDenied',
            'errorMessage' => 'The specified operation of endpoint is not allowed.',
          ),
          2 => 
          array (
            'errorCode' => 'EndpointLocked',
            'errorMessage' => 'The specified Endpoint is locked.',
          ),
          3 => 
          array (
            'errorCode' => 'EndpointConnectionOperationDenied',
            'errorMessage' => 'The endpoint is being connected.',
          ),
          4 => 
          array (
            'errorCode' => 'SecurityGroupExist',
            'errorMessage' => 'The specified security group already exists.',
          ),
          5 => 
          array (
            'errorCode' => 'EndpointServiceDeleted',
            'errorMessage' => 'The specified Service is already deleted.',
          ),
          6 => 
          array (
            'errorCode' => 'SecurityGroupNotFound',
            'errorMessage' => 'The specified security group does not exist.',
          ),
          7 => 
          array (
            'errorCode' => 'SecurityGroupTypeNotSupport',
            'errorMessage' => 'The specified security group type is not supported.',
          ),
          8 => 
          array (
            'errorCode' => 'SecurityGroupTypeOnlySingleTypeSupporteded',
            'errorMessage' => 'The specified security group only support one type.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"8D778FF9-7640-4C13-BCD6-9265CA9A2F81\\"\\n}","errorExample":""},{"type":"xml","example":"<AttachSecurityGroupToVpcEndpointResponse>\\n    <RequestId>8D778FF9-7640-4C13-BCD6-9265CA9A2F81</RequestId>\\n</AttachSecurityGroupToVpcEndpointResponse>","errorExample":""}]',
      'title' => '将终端节点加入安全组',
      'summary' => '调用AttachSecurityGroupToVpcEndpoint接口，将终端节点加入安全组。',
      'description' => '- **AttachSecurityGroupToVpcEndpoint**接口属于异步接口，即系统会返回一个请求ID，但终端节点加入安全组尚未完成，系统后台添加任务仍在进行中。您可以调用[ListVpcEndpoints](~~183558~~)查询终端节点的状态：

    - 当终端节点处于**Pending**状态时，表示终端节点正在添加中。
    - 当终端节点处于**Active**状态时，表示终端节点添加完成。

- **AttachSecurityGroupToVpcEndpoint**接口不支持将同一个终端节点实例并发加入安全组。',
    ),
    'ListVpcEndpointSecurityGroups' => 
    array (
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
            'description' => '要查询的终端节点所属的地域ID。

您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。 ',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-huhehaote',
          ),
        ),
        1 => 
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
            'example' => 'caeba0bbb2be03f84eb48b699f0a4883',
          ),
        ),
        2 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页大小，取值范围：**1**~**50**，默认值：**50**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '50',
            'minimum' => '0',
            'example' => '50',
          ),
        ),
        3 => 
        array (
          'name' => 'EndpointId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要查询的终端节点的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ep-hp33b2e43fays7s8****',
          ),
        ),
        4 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要查询的终端节点所属的地域ID。

您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。 ',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-huhehaote',
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
              'SecurityGroups' => 
              array (
                'description' => '安全组信息集合。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '安全组信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'SecurityGroupId' => 
                    array (
                      'description' => '终端节点已加入的安全组ID。',
                      'type' => 'string',
                      'example' => 'sg-hp33bw6ynvm2yb0e****',
                    ),
                    'SecurityGroupStatus' => 
                    array (
                      'description' => '安全组关联状态，取值：
- Attaching：关联中。
- Attached：已关联。
- Detaching：分离中。',
                      'type' => 'string',
                      'example' => 'Attached',
                    ),
                  ),
                ),
              ),
              'NextToken' => 
              array (
                'description' => '是否拥有下一次查询的令牌（Token）。取值：
- 如果**NextToken**为空表示没有下一次查询。
- 如果**NextToken**有返回值，该取值表示下一次查询开始的令牌。',
                'type' => 'string',
                'example' => 'caeba0bbb2be03f84eb48b699f0a4883',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '0ED8D006-F706-4D23-88ED-E11ED28DCAC0',
              ),
              'MaxResults' => 
              array (
                'description' => '分页大小。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '50',
              ),
              'TotalCount' => 
              array (
                'description' => '总记录数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '12',
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
            'errorCode' => 'EndpointNotFound',
            'errorMessage' => 'The specified Endpoint does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"SecurityGroups\\": [\\n    {\\n      \\"SecurityGroupId\\": \\"sg-hp33bw6ynvm2yb0e****\\",\\n      \\"SecurityGroupStatus\\": \\"Attached\\"\\n    }\\n  ],\\n  \\"NextToken\\": \\"caeba0bbb2be03f84eb48b699f0a4883\\",\\n  \\"RequestId\\": \\"0ED8D006-F706-4D23-88ED-E11ED28DCAC0\\",\\n  \\"MaxResults\\": 50,\\n  \\"TotalCount\\": 12\\n}","errorExample":""},{"type":"xml","example":"<ListVpcEndpointSecurityGroupsResponse>\\n    <SecurityGroups>\\n        <SecurityGroupId>sg-hp33bw6ynvm2yb0e****</SecurityGroupId>\\n    </SecurityGroups>\\n    <NextToken>caeba0bbb2be03f84eb48b699f0a4883</NextToken>\\n    <RequestId>0ED8D006-F706-4D23-88ED-E11ED28DCAC0</RequestId>\\n    <MaxResults>50</MaxResults>\\n</ListVpcEndpointSecurityGroupsResponse>","errorExample":""}]',
      'title' => '查询终端节点已加入的安全组',
      'summary' => '调用ListVpcEndpointSecurityGroups接口，查询终端节点已加入的安全组。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DetachSecurityGroupFromVpcEndpoint' => 
    array (
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
            'description' => '要移除安全组的终端节点所属的地域ID。您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'eu-west-1',
          ),
        ),
        1 => 
        array (
          'name' => 'SecurityGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要移除的安全组的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'sg-hp3c8qj1tyct90ej****',
          ),
        ),
        2 => 
        array (
          'name' => 'EndpointId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要移除安全组的终端节点的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ep-hp33b2e43fays7s8****',
          ),
        ),
        3 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会将终端节点移除安全组。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        4 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端Token，用于保证请求的幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。**ClientToken**只支持ASCII字符。',
            'type' => 'string',
            'required' => false,
            'example' => '0c593ea1-3bea-11e9-b96b-88e9fe637760',
          ),
        ),
        5 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要移除安全组的终端节点所属的地域ID。您可以通过调用[DescribeRegions](~~120468~~)接口获取地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'eu-west-1',
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
                'example' => '8D778FF9-7640-4C13-BCD6-9265CA9A2F81',
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
            'errorCode' => 'SecurityGroupNotFound',
            'errorMessage' => 'The specified security group does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'EndpointMustContainSecurityGroup',
            'errorMessage' => 'The specified endpoint must have at least one security group.',
          ),
          2 => 
          array (
            'errorCode' => 'EndpointNotFound',
            'errorMessage' => 'The specified Endpoint does not exist.',
          ),
          3 => 
          array (
            'errorCode' => 'EndpointOperationDenied',
            'errorMessage' => 'The specified operation of endpoint is not allowed.',
          ),
          4 => 
          array (
            'errorCode' => 'EndpointLocked',
            'errorMessage' => 'The specified Endpoint is locked.',
          ),
          5 => 
          array (
            'errorCode' => 'EndpointConnectionOperationDenied',
            'errorMessage' => 'The endpoint is being connected.',
          ),
          6 => 
          array (
            'errorCode' => 'EndpointServiceDeleted',
            'errorMessage' => 'The specified Service is already deleted.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"8D778FF9-7640-4C13-BCD6-9265CA9A2F81\\"\\n}","errorExample":""},{"type":"xml","example":"<DetachSecurityGroupFromVpcEndpointResponse>\\n    <RequestId>8D778FF9-7640-4C13-BCD6-9265CA9A2F81</RequestId>\\n</DetachSecurityGroupFromVpcEndpointResponse>","errorExample":""}]',
      'title' => '将终端节点移除安全组',
      'summary' => '调用DetachSecurityGroupFromVpcEndpoint接口，将终端节点移除安全组。',
      'description' => '- **DetachSecurityGroupFromVpcEndpoint**接口属于异步接口，即系统会返回一个请求ID，但终端节点尚未从安全组中移除，系统后台的移除任务仍在进行。您可以调用[ListVpcEndpoints](~~183558~~)查询终端节点的移除状态：
    
    - 当终端节点处于**Pending**状态时，表示终端节点正在移除中。
    -  当在安全组中查询不到该终端节点时，表示终端节点移除完成。

- **DetachSecurityGroupFromVpcEndpoint**接口不支持将同一个终端节点实例并发移除安全组。',
    ),
    'UntagResources' => 
    array (
      'summary' => '当您不需要标识一个或多个终端节点或终端节点服务时，可调用UntagResources接口，为指定的资源列表统一解绑标签。',
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
          'in' => 'formData',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '资源ID列表。最多支持50个资源ID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '资源ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'ep-hp3i05294c2****',
            ),
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'TagKey',
          'in' => 'formData',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '要解绑的标签键列表。最多支持20个标签键。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '要解绑的标签键。一旦传入该值，则不允许为空字符串。

一个标签键最多支持64个字符，必须以字母或中文开头，可包含数字、半角句号（.）、下划线（_）和短划线（-），不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
              'type' => 'string',
              'required' => false,
              'example' => 'FinanceDept',
            ),
            'required' => false,
          ),
        ),
        2 => 
        array (
          'name' => 'ResourceType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '资源类型。取值：

- **vpcendpoint**：终端节点。                                

- **vpcendpointservice**：终端节点服务。',
            'type' => 'string',
            'required' => true,
            'example' => 'vpcendpoint',
          ),
        ),
        3 => 
        array (
          'name' => 'All',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否解绑资源上全部的标签，取值：

- **true**：解绑资源上的全部标签。

- **false**：不解绑全部标签。

> 如果同时设置了**TagKey**和本参数，则本参数不生效。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        4 => 
        array (
          'name' => 'DryRun',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否只预检此次请求。取值：

- **true**：发送检查请求，不会解绑标签。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。

- **false**（默认值）：发送正常请求，通过检查后返回`HTTP 2xx`状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        5 => 
        array (
          'name' => 'ClientToken',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '客户端Token，用于保证请求的幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。**ClientToken**只支持ASCII字符。',
            'type' => 'string',
            'required' => false,
            'example' => '0ED8D006-F706-4D23-88ED-E11ED28DCAC0',
          ),
        ),
        6 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '地域ID。您可以通过调用[describeregions](~~36063~~)接口获取地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        7 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '地域ID。您可以通过调用[describeregions](~~36063~~)接口获取地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
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
                'example' => '0ED8D006-F706-4D23-88ED-E11ED28DCAC0',
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
            'errorCode' => 'TagInfoNotExist',
            'errorMessage' => 'Tag info not exist',
          ),
          1 => 
          array (
            'errorCode' => 'DuplicatedTagKey',
            'errorMessage' => 'The tag keys is duplicated.',
          ),
          2 => 
          array (
            'errorCode' => 'IllegalTagKeyParam',
            'errorMessage' => 'IllegalTagKeyParam',
          ),
          3 => 
          array (
            'errorCode' => 'IllegalTagValueParam',
            'errorMessage' => 'The tag value is Illegal.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidResourceId.NotFound',
            'errorMessage' => 'The specified ResourceIds are not found in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0ED8D006-F706-4D23-88ED-E11ED28DCAC0\\"\\n}","type":"json"}]',
      'title' => '为指定的资源列表统一解绑标签',
    ),
    'ListTagResources' => 
    array (
      'summary' => '当您需要查询资源标签时，可调用ListTagResources接口，查询资源已经绑定的标签列表。',
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
          'name' => 'ResourceId',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '资源ID列表。最多支持50个资源ID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '服务资源ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'ep-hp3i05294c2d2d******',
            ),
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源类型。取值：

- **vpcendpoint**：终端节点。                                

- **vpcendpointservice**：终端节点服务。',
            'type' => 'string',
            'required' => true,
            'example' => 'vpcendpoint',
          ),
        ),
        2 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '标签列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '资源的标签。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '资源的标签键。最多支持20个标签键。一旦传入该值，则不允许为空字符串。

最多支持64个字符，必须以字母或中文开头，可包含数字、半角句号（.）、下划线（_）和短划线（-），不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'FinanceDept',
                ),
                'Value' => 
                array (
                  'description' => '资源的标签值。最多支持20个标签值。一旦传入该值，可以为空字符串。

最多支持128个字符，必须以字母或中文开头，可包含数字、半角句号（.）、下划线（_）和短划线（-），不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'FinanceJoshua',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
          ),
        ),
        3 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端Token，用于保证请求的幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。**ClientToken**只支持ASCII字符。',
            'type' => 'string',
            'required' => false,
            'example' => '0c593ea1-3bea-11e9-b96b-88e9fe637760',
          ),
        ),
        4 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源所属的地域ID。您可以通过调用[describeregions](~~120468~~)接口获取地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        5 => 
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
            'example' => 'caeba0bbb2be03f84eb48b699f0a****',
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
                'example' => '8D8992C1-6712-423C-BAC5-E5E817484C6B',
              ),
              'TagResources' => 
              array (
                'description' => '绑定标签的资源信息。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '绑定标签的资源信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'TagKey' => 
                    array (
                      'description' => '标签键。',
                      'type' => 'string',
                      'example' => 'endpoint',
                    ),
                    'TagValue' => 
                    array (
                      'description' => '标签值。',
                      'type' => 'string',
                      'example' => 'FinanceJoshua',
                    ),
                    'ResourceId' => 
                    array (
                      'description' => '资源ID。',
                      'type' => 'string',
                      'example' => 'ep-hp3i05294c2d2d******',
                    ),
                    'ResourceType' => 
                    array (
                      'description' => '资源类型。取值：

- **vpcendpoint**：终端节点。                                

- **vpcendpointservice**：终端节点服务。',
                      'type' => 'string',
                      'example' => 'vpcendpoint',
                    ),
                  ),
                ),
              ),
              'NextToken' => 
              array (
                'description' => '是否拥有下一次查询的令牌（Token）。取值：

- 第一次查询和没有下一次查询时，均无需填写。

- 如果有下一次查询，取值为上一次API调用返回的**NextToken**值。',
                'type' => 'string',
                'example' => 'caeba0bbb2be03f84eb48b699f0a4883',
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
            'errorCode' => 'DuplicatedTagKey',
            'errorMessage' => 'The tag keys is duplicated.',
          ),
          1 => 
          array (
            'errorCode' => 'MissingTagKeyParam',
            'errorMessage' => 'The tag key is empty.',
          ),
          2 => 
          array (
            'errorCode' => 'MissingTagValueParam',
            'errorMessage' => 'The tag value is empty.',
          ),
          3 => 
          array (
            'errorCode' => 'MissingResourceIdOrTagParam',
            'errorMessage' => 'The resource id and tag is empty.',
          ),
          4 => 
          array (
            'errorCode' => 'IllegalTagKeyParam',
            'errorMessage' => 'IllegalTagKeyParam',
          ),
          5 => 
          array (
            'errorCode' => 'IllegalTagValueParam',
            'errorMessage' => 'The tag value is Illegal.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"8D8992C1-6712-423C-BAC5-E5E817484C6B\\",\\n  \\"TagResources\\": [\\n    {\\n      \\"TagKey\\": \\"endpoint\\",\\n      \\"TagValue\\": \\"FinanceJoshua\\",\\n      \\"ResourceId\\": \\"ep-hp3i05294c2d2d******\\",\\n      \\"ResourceType\\": \\"vpcendpoint\\"\\n    }\\n  ],\\n  \\"NextToken\\": \\"caeba0bbb2be03f84eb48b699f0a4883\\"\\n}","type":"json"}]',
      'title' => '查询资源已经绑定的标签列表',
      'description' => '- 请求中至少指定参数**ResourceId.N**或**Tag.N**（**Tag.N.Key**与**Tag.N.Value**），以确定检索对象。

- **Tag.N**是资源的标签，由一个键值对组成。仅指定**Tag.N.Key**时，则返回该标签键关联的所有标签值。仅指定**Tag.N.Value**会报错。

- 如果您同时指定**Tag.N**和**ResourceId.N**筛选标签，则**ResourceId.N**必须满足所有输入的标签键值对。

- 如果您同时指定多个标签键值对，返回结果为同时包含被指定的多个键值对的资源。',
    ),
    'TagResources' => 
    array (
      'summary' => '当您需要标识一个或多个终端节点或终端节点服务时，可调用TagResources接口，为指定的资源列表统一绑定标签。',
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
          'name' => 'ResourceId',
          'in' => 'formData',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '资源ID列表。最多支持50个资源ID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '资源ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'ep-ba16baebdf35641a1****',
            ),
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'Tag',
          'in' => 'formData',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '标签列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '资源的标签。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '实例的标签键。最多支持20个标签键。一旦传入该值，则不允许为空字符串。

最多支持64个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'FinanceDept',
                ),
                'Value' => 
                array (
                  'description' => '实例的标签值。最多支持20个标签值。一旦传入该值，可以为空字符串。

最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'FinanceJoshua',
                ),
              ),
              'required' => false,
            ),
            'required' => true,
          ),
        ),
        2 => 
        array (
          'name' => 'ResourceType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '资源类型。取值：

- **vpcendpoint**：终端节点。                                

- **vpcendpointservice**：终端节点服务。',
            'type' => 'string',
            'required' => true,
            'example' => 'vpcendpoint',
          ),
        ),
        3 => 
        array (
          'name' => 'DryRun',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否只预检此次请求。取值：
- **true**：发送检查请求，不会创建并绑定标签。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。
- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        4 => 
        array (
          'name' => 'ClientToken',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '客户端Token，用于保证请求的幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。

> 若您未指定，则系统自动使用API请求的**RequestId**作为**ClientToken**标识。每次API请求的**RequestId**不一样。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
          ),
        ),
        5 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '私网连接实例所在的地域ID。

您可以通过调用[DescribeRegions](~~120468~~)接口查询地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
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
            'errorCode' => 'MissingTagKeyParam',
            'errorMessage' => 'The tag key is empty.',
          ),
          1 => 
          array (
            'errorCode' => 'MissingTagValueParam',
            'errorMessage' => 'The tag value is empty.',
          ),
          2 => 
          array (
            'errorCode' => 'IllegalTagKeyParam',
            'errorMessage' => 'IllegalTagKeyParam',
          ),
          3 => 
          array (
            'errorCode' => 'IllegalTagValueParam',
            'errorMessage' => 'The tag value is Illegal.',
          ),
          4 => 
          array (
            'errorCode' => 'DuplicatedTagKey',
            'errorMessage' => 'The tag keys is duplicated.',
          ),
          5 => 
          array (
            'errorCode' => 'QuotaExceed.TagsPerResource',
            'errorMessage' => 'The maximum number of tags for each resource is exceeded',
          ),
          6 => 
          array (
            'errorCode' => 'InvalidResourceId.NotFound',
            'errorMessage' => 'The specified ResourceIds are not found in our records.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C46FF5A8-C5F0-4024-8262-B16B639225A0\\"\\n}","errorExample":""},{"type":"xml","example":"<TagResourcesResponse>\\n    <RequestId>C46FF5A8-C5F0-4024-8262-B16B639225A0</RequestId>\\n</TagResourcesResponse>","errorExample":""}]',
      'title' => '为指定的资源列表统一创建并绑定标签',
      'description' => '> 单个实例最多可绑定20条标签。绑定标签前，阿里云会校验资源已有标签数量，超过限制值会返回报错信息。',
    ),
    'ChangeResourceGroup' => 
    array (
      'summary' => '更改资源组。',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '资源类型',
            'description' => '资源类型。取值：

- **VpcEndpoint**（默认值）：终端节点。

- **VpcEndpointService**：终端节点服务。',
            'type' => 'string',
            'required' => false,
            'example' => 'VpcEndpoint',
            'default' => 'VpcEndpoint',
            'enum' => 
            array (
              0 => 'VpcEndpoint',
              1 => 'VpcEndpointService',
            ),
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '资源Id',
            'description' => '待修改资源组的私网连接资源ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'ep-hp3i05294c2d2d****',
          ),
        ),
        2 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '目标资源组',
            'description' => '要替换的目标资源组的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'rg-acfmy*****',
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
                'example' => '8D8992C1-6712-423C-BAC5-E5E817484C6B',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"8D8992C1-6712-423C-BAC5-E5E817484C6B\\"\\n}","type":"json"}]',
      'title' => '更改资源组',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'eu-west-1',
      'endpoint' => 'privatelink.eu-west-1.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'cn-qingdao',
      'endpoint' => 'privatelink.cn-qingdao.aliyuncs.com',
    ),
    2 => 
    array (
      'regionId' => 'cn-beijing',
      'endpoint' => 'privatelink.cn-beijing.aliyuncs.com',
    ),
    3 => 
    array (
      'regionId' => 'cn-zhangjiakou',
      'endpoint' => 'privatelink.cn-zhangjiakou.aliyuncs.com',
    ),
    4 => 
    array (
      'regionId' => 'cn-huhehaote',
      'endpoint' => 'privatelink.cn-huhehaote.aliyuncs.com',
    ),
    5 => 
    array (
      'regionId' => 'cn-wulanchabu',
      'endpoint' => 'privatelink.cn-wulanchabu.aliyuncs.com',
    ),
    6 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'privatelink.cn-hangzhou.aliyuncs.com',
    ),
    7 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'privatelink.cn-shanghai.aliyuncs.com',
    ),
    8 => 
    array (
      'regionId' => 'cn-shenzhen',
      'endpoint' => 'privatelink.cn-shenzhen.aliyuncs.com',
    ),
    9 => 
    array (
      'regionId' => 'cn-heyuan',
      'endpoint' => 'privatelink.cn-heyuan.aliyuncs.com',
    ),
    10 => 
    array (
      'regionId' => 'cn-chengdu',
      'endpoint' => 'privatelink.cn-chengdu.aliyuncs.com',
    ),
    11 => 
    array (
      'regionId' => 'cn-hongkong',
      'endpoint' => 'privatelink.cn-hongkong.aliyuncs.com',
    ),
    12 => 
    array (
      'regionId' => 'ap-northeast-1',
      'endpoint' => 'privatelink.ap-northeast-1.aliyuncs.com',
    ),
    13 => 
    array (
      'regionId' => 'ap-southeast-1',
      'endpoint' => 'privatelink.ap-southeast-1.aliyuncs.com',
    ),
    14 => 
    array (
      'regionId' => 'ap-southeast-2',
      'endpoint' => 'privatelink.ap-southeast-2.aliyuncs.com',
    ),
    15 => 
    array (
      'regionId' => 'ap-southeast-3',
      'endpoint' => 'privatelink.ap-southeast-3.aliyuncs.com',
    ),
    16 => 
    array (
      'regionId' => 'ap-southeast-5',
      'endpoint' => 'privatelink.ap-southeast-5.aliyuncs.com',
    ),
    17 => 
    array (
      'regionId' => 'eu-central-1',
      'endpoint' => 'privatelink.eu-central-1.aliyuncs.com',
    ),
    18 => 
    array (
      'regionId' => 'ap-south-1',
      'endpoint' => 'privatelink.ap-south-1.aliyuncs.com',
    ),
    19 => 
    array (
      'regionId' => 'cn-beijing-finance-1',
      'endpoint' => 'privatelink.cn-beijing-finance-1.aliyuncs.com',
    ),
    20 => 
    array (
      'regionId' => 'cn-shanghai-finance-1',
      'endpoint' => 'privatelink.cn-shanghai-finance-1.aliyuncs.com',
    ),
    21 => 
    array (
      'regionId' => 'ap-southeast-7',
      'endpoint' => 'privatelink.ap-southeast-7.aliyuncs.com',
    ),
    22 => 
    array (
      'regionId' => 'us-west-1',
      'endpoint' => 'privatelink.us-west-1.aliyuncs.com',
    ),
    23 => 
    array (
      'regionId' => 'us-east-1',
      'endpoint' => 'privatelink.us-east-1.aliyuncs.com',
    ),
    24 => 
    array (
      'regionId' => 'ap-northeast-2',
      'endpoint' => 'privatelink.ap-northeast-2.aliyuncs.com',
    ),
    25 => 
    array (
      'regionId' => 'cn-shenzhen-finance-1',
      'endpoint' => 'privatelink.cn-shenzhen-finance-1.aliyuncs.com',
    ),
    26 => 
    array (
      'regionId' => 'cn-guangzhou',
      'endpoint' => 'privatelink.cn-guangzhou.aliyuncs.com',
    ),
    27 => 
    array (
      'regionId' => 'ap-southeast-6',
      'endpoint' => 'privatelink.ap-southeast-6.aliyuncs.com',
    ),
  ),
);
<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'hitsdb',
    'version' => '2017-06-01',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 64170,
      'title' => '可用区',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeRegions',
        1 => 'DescribeZones',
      ),
    ),
    1 => 
    array (
      'id' => 64173,
      'title' => '实例',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateHiTSDBInstance',
        1 => 'DeleteHiTSDBInstance',
        2 => 'ModifyHiTSDBInstanceClass',
        3 => 'DescribeHiTSDBInstance',
        4 => 'DescribeHiTSDBInstanceList',
        5 => 'RenameHiTSDBInstanceAlias',
        6 => 'RestartHiTSDBInstance',
        7 => 'RenewTSDBInstance',
        8 => 'SwitchHiTSDBInstancePublicNet',
      ),
    ),
    2 => 
    array (
      'id' => 64183,
      'title' => '白名单',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ModifyHiTSDBInstanceSecurityIpList',
        1 => 'DescribeHiTSDBInstanceSecurityIpList',
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
        'abilityTreeCode' => '63941',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREhitsdbBWSQMK',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AcceptLanguage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '返回值的语言，取值范围：

- zh-CN：中文
- en-US：英文
- ja：日文

默认值：zh-CN。',
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'BDDB1954-002B-4249-B2DF-2CDDA0259668',
              ),
              'Regions' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Region' => 
                  array (
                    'description' => '地域信息的集合',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'RegionEndpoint' => 
                        array (
                          'description' => '地域对应的接入地址（Endpoint）',
                          'type' => 'string',
                          'example' => 'hitsdb.aliyuncs.com',
                        ),
                        'LocalName' => 
                        array (
                          'description' => '地域名称',
                          'type' => 'string',
                          'example' => '华东1（杭州）',
                        ),
                        'RegionId' => 
                        array (
                          'description' => '地域ID',
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
        400 => 
        array (
          0 => 
          array (
            'errorCode' => '400',
            'errorMessage' => 'Parameter is not valid',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"BDDB1954-002B-4249-B2DF-2CDDA0259668\\",\\n  \\"Regions\\": {\\n    \\"Region\\": [\\n      {\\n        \\"RegionEndpoint\\": \\"hitsdb.aliyuncs.com\\",\\n        \\"LocalName\\": \\"华东1（杭州）\\",\\n        \\"RegionId\\": \\"cn-hangzhou\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeRegionsResponse>\\r\\n    <RequestId>DBB70386-45C6-4E92-B239-4A764E32CE4C</RequestId>\\r\\n    <Regions>\\r\\n        <Region>\\r\\n            <RegionId>cn-hangzhou</RegionId>\\r\\n            <RegionEndpoint>hitsdb.aliyuncs.com</RegionEndpoint>\\r\\n            <LocalName>华东1（杭州）</LocalName>\\r\\n        </Region>\\r\\n        <Region>\\r\\n            <RegionId>cn-shanghai</RegionId>\\r\\n            <RegionEndpoint>hitsdb.aliyuncs.com</RegionEndpoint>\\r\\n            <LocalName>华东2（上海）</LocalName>\\r\\n        </Region>\\r\\n        <Region>\\r\\n            <RegionId>cn-qingdao</RegionId>\\r\\n            <RegionEndpoint>hitsdb.aliyuncs.com</RegionEndpoint>\\r\\n            <LocalName>华北1（青岛）</LocalName>\\r\\n        </Region>\\r\\n        <Region>\\r\\n            <RegionId>cn-beijing</RegionId>\\r\\n            <RegionEndpoint>hitsdb.aliyuncs.com</RegionEndpoint>\\r\\n            <LocalName>华北2（北京）</LocalName>\\r\\n        </Region>\\r\\n        <Region>\\r\\n            <RegionId>cn-huhehaote</RegionId>\\r\\n            <RegionEndpoint>hitsdb.aliyuncs.com</RegionEndpoint>\\r\\n            <LocalName>华北5（呼和浩特）</LocalName>\\r\\n        </Region>\\r\\n        <Region>\\r\\n            <RegionId>cn-shenzhen</RegionId>\\r\\n            <RegionEndpoint>hitsdb.aliyuncs.com</RegionEndpoint>\\r\\n            <LocalName>华南1（深圳）</LocalName>\\r\\n        </Region>\\r\\n        <Region>\\r\\n            <RegionId>ap-southeast-1</RegionId>\\r\\n            <RegionEndpoint>hitsdb.aliyuncs.com</RegionEndpoint>\\r\\n            <LocalName>新加坡</LocalName>\\r\\n        </Region>\\r\\n    </Regions>\\r\\n</DescribeRegionsResponse>","errorExample":""}]',
      'title' => '查看用户可选的地域和可用区',
      'summary' => '调用DescribeRegions查询可部署时序数据库的Region列表。',
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
        'abilityTreeCode' => '63958',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREhitsdbBWSQMK',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Language',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '语言环境，zh_CN-中文，en_US-英文',
            'type' => 'string',
            'required' => false,
            'example' => 'zh_CN',
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
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'F67BFFF3-F5C2-45B5-9C28-6E4A1E51449B',
              ),
              'ZoneList' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'ZoneModel' => 
                  array (
                    'description' => '可用区列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ZoneId' => 
                        array (
                          'description' => '可用区ID',
                          'type' => 'string',
                          'example' => 'cn-shanghai-b',
                        ),
                        'LocalName' => 
                        array (
                          'description' => '可用区名称',
                          'type' => 'string',
                          'example' => '华东2可用区B',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"F67BFFF3-F5C2-45B5-9C28-6E4A1E51449B\\",\\n  \\"ZoneList\\": {\\n    \\"ZoneModel\\": [\\n      {\\n        \\"ZoneId\\": \\"cn-shanghai-b\\",\\n        \\"LocalName\\": \\"华东2可用区B\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>F67BFFF3-F5C2-45B5-9C28-6E4A1E51449B</RequestId>\\n<ZoneList>\\n    <ZoneId>cn-shanghai-b</ZoneId>\\n    <LocalName>华东2可用区B</LocalName>\\n</ZoneList>","errorExample":""}]',
      'title' => '查询某一阿里云地域下的可用区',
      'summary' => '调用DescribeZones获取实例支持的可用区信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateHiTSDBInstance' => 
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
        'abilityTreeCode' => '75169',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREhitsdbUE1KPV',
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
            'description' => '区域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'AppKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备用参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'None',
          ),
        ),
        2 => 
        array (
          'name' => 'ZoneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '可用区ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-shanghai-b',
          ),
        ),
        3 => 
        array (
          'name' => 'InstanceAlias',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例名称。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'tsdb_test',
          ),
        ),
        4 => 
        array (
          'name' => 'InstanceClass',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例规格。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'tsdb.1x.basic',
            'enum' => 
            array (
              0 => 'influxdata.n1.xlarge',
              1 => 'influxdata.n1.2xlarge',
              2 => 'influxdata.n1.4xlarge',
              3 => 'influxdata.n1.8xlarge',
              4 => 'influxdata.n1.16xlarge',
              5 => 'influxdata.n1.mxlarge',
              6 => 'influxdata.n1.xlarge_ha',
              7 => 'influxdata.n1.2xlarge_ha',
              8 => 'influxdata.n1.4xlarge_ha',
              9 => 'influxdata.n1.8xlarge_ha',
              10 => 'influxdata.n1.16xlarge_ha',
              11 => 'influxdata.n1.mxlarge_ha',
              12 => 'tsdb.1x.basic',
              13 => 'tsdb.3x.basic',
              14 => 'tsdb.4x.basic',
              15 => 'tsdb.12x.standard',
              16 => 'tsdb.24x.standard',
              17 => 'tsdb.48x.large',
              18 => 'tsdb.96x.large',
              19 => 'tsdb.iot.1x.small',
            ),
          ),
        ),
        5 => 
        array (
          'name' => 'InstanceStorage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例存储容量，单位 GB。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '50',
          ),
        ),
        6 => 
        array (
          'name' => 'PayType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '付费类型：

- PREPAY：包年包月。

- POSTPAY：按量付费。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'PREPAY',
            'enum' => 
            array (
              0 => 'POSTPAY',
              1 => 'PREPAY',
            ),
          ),
        ),
        7 => 
        array (
          'name' => 'VPCId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '专有网络ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'vpc-wz9ydz3vg93s1ozsd****',
          ),
        ),
        8 => 
        array (
          'name' => 'VSwitchId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '交换机ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'vsw-wz9kv78f9cp47yadu****',
          ),
        ),
        9 => 
        array (
          'name' => 'PricingCycle',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '付费类型为包年包月的实例的购买时长单位。

- Month：月。

- Year：年。',
            'type' => 'string',
            'required' => false,
            'example' => 'Month',
            'enum' => 
            array (
              0 => 'Month',
              1 => 'Year',
            ),
          ),
        ),
        10 => 
        array (
          'name' => 'Duration',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '购买时长。

- PricingCycle为Month时，取值范围为\\[1,9\\]。

- PricingCycle为Year时，取值范围为\\[1,3\\]。',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        11 => 
        array (
          'name' => 'DiskCategory',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'TSDB for InfluxDB®️的磁盘类型：

- cloud_efficiency：高效云盘。

- cloud_ssd：SSD云盘。

- cloud_essd：ESSD云盘。',
            'type' => 'string',
            'required' => false,
            'example' => 'cloud_ssd',
            'enum' => 
            array (
              0 => 'cloud_essd',
              1 => 'cloud_ssd',
              2 => 'cloud_efficiency',
            ),
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
                'example' => '587BCA54-50DA-4885-ADE9-80A848339151',
              ),
              'InstanceId' => 
              array (
                'description' => '实例ID。',
                'type' => 'string',
                'example' => 'ts-wz99vz6u8jg39****',
              ),
              'OrderId' => 
              array (
                'description' => '订单ID。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '211110656240000',
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
            'errorCode' => 'TSDB.Errorcode.ParameterInvaild',
            'errorMessage' => 'The parameter is invalid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'TSDB.Errorcode.InstanceNotFound',
            'errorMessage' => 'The instance is not found',
          ),
        ),
        411 => 
        array (
          0 => 
          array (
            'errorCode' => 'TSDB.Errorcode.InstanceClassAndEngineTypeMismatch',
            'errorMessage' => 'The engine type and instance class parameters do not match. Instance class will take precedence.',
          ),
        ),
        412 => 
        array (
          0 => 
          array (
            'errorCode' => 'TSDB.Errorcode.InstanceStorageInvalid',
            'errorMessage' => 'The parameter of instance storage is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"587BCA54-50DA-4885-ADE9-80A848339151\\",\\n  \\"InstanceId\\": \\"ts-wz99vz6u8jg39****\\",\\n  \\"OrderId\\": 211110656240000\\n}","errorExample":""},{"type":"xml","example":"<CreateHiTSDBInstance>\\n<RequestId>587BCA54-50DA-4885-ADE9-80A848339151</RequestId>\\n<InstanceId>ts-wz99vz6u8jg39****</InstanceId>\\n<OrderId>211110656240000</OrderId>\\n</CreateHiTSDBInstance>","errorExample":""}]',
      'title' => '创建TSDB实例',
      'summary' => '调用CreateHiTSDBInstance创建一个TSDB实例。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteHiTSDBInstance' => 
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ts-ufxxxxxxxxxxxxx',
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
                'description' => '请求ID',
                'type' => 'string',
                'example' => '1556DCB0-043A-4444-8BD9-CF4A68E7EE64',
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
            'errorCode' => 'Instance.IsNotPostPay',
            'errorMessage' => 'The instance billing type is not subscription.',
          ),
          1 => 
          array (
            'errorCode' => 'Instance.IsNotAvailable',
            'errorMessage' => 'The instance is unavailable.',
          ),
          2 => 
          array (
            'errorCode' => 'Instance.IsNotValid',
            'errorMessage' => 'The instance is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1556DCB0-043A-4444-8BD9-CF4A68E7EE64\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteHiTSDBInstanceResponse>\\r\\n    <RequestId>1556DCB0-043A-4444-8BD9-CF4A68E7EE64</RequestId>\\r\\n</DeleteHiTSDBInstanceResponse>","errorExample":""}]',
      'title' => '删除实例',
      'summary' => '调用DeleteHiTSDBInstance删除实例。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyHiTSDBInstanceClass' => 
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ts-xxxxxxxxxxxxxxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceClass',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例规格',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'tsdb.1x.basic',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceStorage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例存储容量，单位GB',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '500',
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
                'description' => '请求ID',
                'type' => 'string',
                'example' => '57540985-3C11-4588-96FD-93413C6282EF',
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
            'errorCode' => 'Instance.IsModifyingClass',
            'errorMessage' => 'The instance class is being modified and cannot be operated.',
          ),
          1 => 
          array (
            'errorCode' => 'Instance.SpecIsNotValid',
            'errorMessage' => 'The instance specification is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'Instance.IsNotAvailable',
            'errorMessage' => 'The instance is unavailable.',
          ),
          3 => 
          array (
            'errorCode' => 'Instance.DoesNotSupportShrinkStorage',
            'errorMessage' => 'Storage scale in is not supported.',
          ),
          4 => 
          array (
            'errorCode' => 'Instance.Upgrade.ParamsIsNotValid',
            'errorMessage' => 'The instance upgrade parameters are invalid.',
          ),
          5 => 
          array (
            'errorCode' => 'CurrentEngineType.ClassChangingNotSupported',
            'errorMessage' => 'The current engine type does not support class changing.',
          ),
          6 => 
          array (
            'errorCode' => 'Commodity.NotFound',
            'errorMessage' => 'The commodity is not found.',
          ),
          7 => 
          array (
            'errorCode' => 'Order.CreateFailed',
            'errorMessage' => 'Failed to create the order.',
          ),
          8 => 
          array (
            'errorCode' => 'Instance.IsNotValid',
            'errorMessage' => 'The instance is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"57540985-3C11-4588-96FD-93413C6282EF\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>57540985-3C11-4588-96FD-93413C6282EF</RequestId>","errorExample":""}]',
      'title' => '修改实例规格',
      'summary' => '调用ModifyHiTSDBInstanceClass修改实例规格。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeHiTSDBInstance' => 
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ts-ufxxxxxxxxxx',
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
              'Status' => 
              array (
                'description' => '实例状态，ACTIVATION-运行中，CREATING-创建中，NET_CREATING-创建网络链接中，CLASS_CHANGING-实例变配中
 ，LOCKED-已锁定，DELETED-已删除',
                'type' => 'string',
                'example' => 'ACTIVATION',
              ),
              'VpcId' => 
              array (
                'description' => '专有网络ID',
                'type' => 'string',
                'example' => 'vpc-xxxxxxxxxxxxxxxxxxxxx',
              ),
              'PaymentType' => 
              array (
                'description' => '付费类型，PREPAY-包年包月；POSTPAY-按量付费',
                'type' => 'string',
                'example' => 'PREPAY',
              ),
              'VswitchId' => 
              array (
                'description' => '专有网络交换机ID',
                'type' => 'string',
                'example' => 'vsw-xxxxxxxxxxxxxxxxxxxxx',
              ),
              'CreateTime' => 
              array (
                'description' => '实例创建的时间戳',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1603426323000',
              ),
              'MemSize' => 
              array (
                'description' => '数据库内存大小，针对TSDB for InfluxDB®️类型实例',
                'type' => 'string',
                'example' => '8',
              ),
              'CpuNumber' => 
              array (
                'description' => 'CPU核数',
                'type' => 'string',
                'example' => '2',
              ),
              'ChargeType' => 
              array (
                'description' => '付费类型，PREPAY-包年包月；POSTPAY-按量付费',
                'type' => 'string',
                'example' => 'PREPAY',
              ),
              'PublicConnectionString' => 
              array (
                'description' => '实例公网连接串',
                'type' => 'string',
                'example' => 'ts-xxxxxxxxxxxxxxxxx.influxdata.rds.aliyuncs.com:3242',
              ),
              'NetworkType' => 
              array (
                'description' => '实例网络类型',
                'type' => 'string',
                'example' => 'VPC',
              ),
              'MaxTimelineLimit' => 
              array (
                'description' => '实例时间线性能， 单位<条>，针对TSDB类型实例',
                'type' => 'string',
                'example' => '2400000',
              ),
              'DiskCategory' => 
              array (
                'description' => '对于TSDB for InfluxDB®️类型，cloud_efficiency-高效云盘，cloud_ssd-SSD云盘',
                'type' => 'string',
                'example' => 'cloud_efficiency',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '8D156621-1FCB-414A-BD29-361C3CA4DD56',
              ),
              'InstanceTps' => 
              array (
                'description' => '实例 Tps 性能， 单位<请求/秒>',
                'type' => 'string',
                'example' => '960000',
              ),
              'ConnectionString' => 
              array (
                'description' => '数据库连接地址',
                'type' => 'string',
                'example' => 'ts-xxxxxxxxxxxxxxxxx.hitsdb.tsdb.aliyuncs.com:8242',
              ),
              'GmtExpire' => 
              array (
                'description' => '付费类型为包年包月的实例的到期时间，格式为yyyy-MM-dd HH:mm:ss',
                'type' => 'string',
                'example' => '2020-12-17 00:00:00',
              ),
              'EngineType' => 
              array (
                'description' => '引擎类型，tsdb_tsdb-tsdb类型，tsdb_influxdb-TSDB for InfluxDB®️类型，tsdb1.5-tsdb1.5类型',
                'type' => 'string',
                'example' => 'tsdb_tsdb',
              ),
              'InstanceClass' => 
              array (
                'description' => '实例规格',
                'type' => 'string',
                'example' => 'tsdb.96x.large_lindorm',
              ),
              'AutoRenew' => 
              array (
                'description' => '付费类型为包年包月的实例，是否开通自动续费',
                'type' => 'string',
                'example' => 'true',
              ),
              'InstanceStorage' => 
              array (
                'description' => '实例存储， 单位 G',
                'type' => 'string',
                'example' => '320',
              ),
              'InstanceId' => 
              array (
                'description' => '实例ID',
                'type' => 'string',
                'example' => 'ts-xxxxxxxxxxxxxxxxx',
              ),
              'InstanceDescription' => 
              array (
                'description' => '实例描述',
                'type' => 'string',
                'example' => 'test',
              ),
              'RegionId' => 
              array (
                'description' => '区域ID',
                'type' => 'string',
                'example' => 'cn-shanghai',
              ),
              'GmtCreated' => 
              array (
                'description' => '实例创建时间，格式为yyyy-MM-dd HH:mm:ss',
                'type' => 'string',
                'example' => '2020-11-16 16:22:56',
              ),
              'InstanceAlias' => 
              array (
                'description' => '实例名称',
                'type' => 'string',
                'example' => 'tsdb_test',
              ),
              'ExpiredTime' => 
              array (
                'description' => '对于包年包月类型，实例过期的时间戳',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1611417600000',
              ),
              'ZoneId' => 
              array (
                'description' => '实例可用区ID',
                'type' => 'string',
                'example' => 'cn-shanghai-f',
              ),
              'InstanceStatus' => 
              array (
                'description' => '实例状态，ACTIVATION-运行中，CREATING-创建中，NET_CREATING-创建网络链接中，CLASS_CHANGING-实例变配中
 ，LOCKED-已锁定，DELETED-已删除',
                'type' => 'string',
                'example' => 'ACTIVATION',
              ),
              'Series' => 
              array (
                'description' => 'TSDB for InfluxDB®️类型实例的版本，0-基础版，1-高可用版',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'SecurityIpList' => 
              array (
                'description' => '实例白名单列表',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Ip' => 
                    array (
                      'description' => '实例白名单 IP
',
                      'type' => 'string',
                      'example' => '0.0.0.0/0',
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
            'errorCode' => 'TSDB.Errorcode.ParameterInvaild',
            'errorMessage' => 'The parameter is invalid.',
          ),
        ),
        413 => 
        array (
          0 => 
          array (
            'errorCode' => 'TSDB.Errorcode.InstanceNotFound',
            'errorMessage' => 'The instance is not found. Please try again later.',
          ),
        ),
        414 => 
        array (
          0 => 
          array (
            'errorCode' => 'TSDB.Errorcode.InstanceCreateFailed',
            'errorMessage' => 'Failed to create the instance.',
          ),
        ),
        415 => 
        array (
          0 => 
          array (
            'errorCode' => 'TSDB.Errorcode.InstanceCreateRetrying',
            'errorMessage' => 'The system is trying to create the instance again.',
          ),
        ),
        416 => 
        array (
          0 => 
          array (
            'errorCode' => 'TSDB.Errorcode.InstanceDeleted',
            'errorMessage' => 'The instance is already deleted.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Status\\": \\"ACTIVATION\\",\\n  \\"VpcId\\": \\"vpc-xxxxxxxxxxxxxxxxxxxxx\\",\\n  \\"PaymentType\\": \\"PREPAY\\",\\n  \\"VswitchId\\": \\"vsw-xxxxxxxxxxxxxxxxxxxxx\\",\\n  \\"CreateTime\\": 1603426323000,\\n  \\"CpuNumber\\": \\"2\\",\\n  \\"MemSize\\": \\"8\\",\\n  \\"ChargeType\\": \\"PREPAY\\",\\n  \\"PublicConnectionString\\": \\"ts-xxxxxxxxxxxxxxxxx.influxdata.rds.aliyuncs.com:3242\\",\\n  \\"NetworkType\\": \\"VPC\\",\\n  \\"MaxTimelineLimit\\": \\"2400000\\",\\n  \\"DiskCategory\\": \\"cloud_efficiency\\",\\n  \\"RequestId\\": \\"8D156621-1FCB-414A-BD29-361C3CA4DD56\\",\\n  \\"InstanceTps\\": \\"960000\\",\\n  \\"ConnectionString\\": \\"ts-xxxxxxxxxxxxxxxxx.hitsdb.tsdb.aliyuncs.com:8242\\",\\n  \\"GmtExpire\\": \\"2020-12-17 00:00:00\\",\\n  \\"EngineType\\": \\"tsdb_tsdb\\",\\n  \\"InstanceClass\\": \\"tsdb.96x.large_lindorm\\",\\n  \\"AutoRenew\\": true,\\n  \\"InstanceStorage\\": \\"320\\",\\n  \\"InstanceId\\": \\"ts-xxxxxxxxxxxxxxxxx\\",\\n  \\"InstanceDescription\\": \\"test\\",\\n  \\"RegionId\\": \\"cn-shanghai\\",\\n  \\"GmtCreated\\": \\"2020-11-16 16:22:56\\",\\n  \\"InstanceAlias\\": \\"tsdb_test\\",\\n  \\"ExpiredTime\\": 1611417600000,\\n  \\"ZoneId\\": \\"cn-shanghai-f\\",\\n  \\"InstanceStatus\\": \\"ACTIVATION\\",\\n  \\"Series\\": 1,\\n  \\"SecurityIpList\\": [\\n    {\\n      \\"Ip\\": \\"0.0.0.0/0\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<AutoRenew>true</AutoRenew>\\n<GmtCreated>2020-11-16 16:22:56</GmtCreated>\\n<CpuNumber>2</CpuNumber>\\n<MemSize>8</MemSize>\\n<GmtExpire>2020-12-17 00:00:00</GmtExpire>\\n<NetworkType>VPC</NetworkType>\\n<InstanceStatus>ACTIVATION</InstanceStatus>\\n<InstanceAlias>tsdb_test</InstanceAlias>\\n<MaxTimelineLimit>2400000</MaxTimelineLimit>\\n<EngineType>tsdb_tsdb</EngineType>\\n<PublicConnectionString>ts-xxxxxxxxxxxxxxxxx.influxdata.rds.aliyuncs.com:3242</PublicConnectionString>\\n<InstanceTps>960000</InstanceTps>\\n<InstanceStorage>320</InstanceStorage>\\n<ZoneId>cn-shanghai-f</ZoneId>\\n<RequestId>8D156621-1FCB-414A-BD29-361C3CA4DD56</RequestId>\\n<InstanceId>ts-xxxxxxxxxxxxxxxxx</InstanceId>\\n<DiskCategory>cloud_efficiency</DiskCategory>\\n<InstanceClass>tsdb.96x.large_lindorm</InstanceClass>\\n<VswitchId>vsw-xxxxxxxxxxxxxxxxxxxxx</VswitchId>\\n<Series>1</Series>\\n<VpcId>vpc-xxxxxxxxxxxxxxxxxxxxx</VpcId>\\n<ChargeType>PREPAY</ChargeType>\\n<SecurityIpList>\\n    <Ip>0.0.0.0/0</Ip>\\n</SecurityIpList>\\n<InstanceDescription>test</InstanceDescription>\\n<RegionId>cn-shanghai</RegionId>\\n<ConnectionString>ts-xxxxxxxxxxxxxxxxx.hitsdb.tsdb.aliyuncs.com:8242</ConnectionString>","errorExample":""}]',
      'title' => '获取实例',
      'summary' => '调用DescribeHiTSDBInstance获取实例详情。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeHiTSDBInstanceList' => 
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
          'name' => 'QueryStr',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例名称关键字，可根据该参数做模糊搜索',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        1 => 
        array (
          'name' => 'StatusList',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '状态过滤列表，JSON格式，枚举值为InstanceStatus。',
            'type' => 'string',
            'required' => false,
            'example' => '["ACTIVATION", "DELETED"]',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页大小',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '30',
          ),
        ),
        4 => 
        array (
          'name' => 'EngineType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '引擎类型，tsdb_tsdb-tsdb类型，tsdb_influxdb-TSDB for InfluxDB®️类型',
            'type' => 'string',
            'required' => false,
            'example' => 'tsdb_tsdb',
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
                'description' => '请求ID',
                'type' => 'string',
                'example' => '0A7153E4-8354-497E-87E5-5D0EBEF5AEB1',
              ),
              'PageNumber' => 
              array (
                'description' => '页码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '分页大小',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '20',
              ),
              'Total' => 
              array (
                'description' => '总条数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'InstanceList' => 
              array (
                'description' => '实例列表',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Status' => 
                    array (
                      'description' => '实例状态，ACTIVATION-运行中，CREATING-创建中，NET_CREATING-创建网络链接中，CLASS_CHANGING-实例变配中，LOCKED-已锁定，DELETED-已删除',
                      'type' => 'string',
                      'example' => 'ACTIVATION',
                    ),
                    'VpcId' => 
                    array (
                      'description' => '专有网络（VPC）的ID',
                      'type' => 'string',
                      'example' => 'vpc-bp1xxxxxxxxxxxxxxxxxx',
                    ),
                    'PaymentType' => 
                    array (
                      'description' => '付费类型，PREPAY-包年包月；POSTPAY-按量付费',
                      'type' => 'string',
                      'example' => 'PREPAY',
                    ),
                    'MaxSeriesPerDatabase' => 
                    array (
                      'description' => '单个数据库时间线的最大数量',
                      'type' => 'string',
                      'example' => '10000',
                    ),
                    'EngineType' => 
                    array (
                      'description' => '引擎类型，tsdb_tsdb-tsdb类型，tsdb_influxdb-TSDB for InfluxDB®️类型',
                      'type' => 'string',
                      'example' => 'tsdb_tsdb',
                    ),
                    'VswitchId' => 
                    array (
                      'description' => '虚拟交换机的ID',
                      'type' => 'string',
                      'example' => 'vsw-bp1xxxxxxxxxxxxxxxxxx',
                    ),
                    'InstanceClass' => 
                    array (
                      'description' => '实例规格',
                      'type' => 'string',
                      'example' => 'tsdb.1x.basic',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '实例创建的时间戳',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1603426323000',
                    ),
                    'ChargeType' => 
                    array (
                      'description' => '付费类型，PREPAY-包年包月；POSTPAY-按量付费',
                      'type' => 'string',
                      'example' => 'POSTPAY',
                    ),
                    'UserId' => 
                    array (
                      'description' => '用户ID',
                      'type' => 'string',
                      'example' => '1000000000000000',
                    ),
                    'InstanceStorage' => 
                    array (
                      'description' => '实例存储， 单位 G',
                      'type' => 'string',
                      'example' => '50',
                    ),
                    'NetworkType' => 
                    array (
                      'description' => '实例网络类型：VPC-专有网络',
                      'type' => 'string',
                      'example' => 'VPC',
                    ),
                    'InstanceId' => 
                    array (
                      'description' => '实例ID',
                      'type' => 'string',
                      'example' => 'ts-xxxxxxxxxxxxxxxxx',
                    ),
                    'LockMode' => 
                    array (
                      'description' => '实例是否被锁定，0-未锁定，1-锁定',
                      'type' => 'string',
                      'example' => '0',
                    ),
                    'InstanceDescription' => 
                    array (
                      'description' => '实例描述',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                    'RegionId' => 
                    array (
                      'description' => '实例所在地域ID',
                      'type' => 'string',
                      'example' => 'cn-hangzhou',
                    ),
                    'GmtCreated' => 
                    array (
                      'description' => '实例创建时间，格式为yyyy-MM-dd HH:mm:ss',
                      'type' => 'string',
                      'example' => '2020-11-16 16:22:56',
                    ),
                    'InstanceAlias' => 
                    array (
                      'description' => '实例名称',
                      'type' => 'string',
                      'example' => 'test_tsdb',
                    ),
                    'InstanceTps' => 
                    array (
                      'description' => '实例 Tps 性能， 单位<请求/秒>',
                      'type' => 'string',
                      'example' => '960000',
                    ),
                    'ExpiredTime' => 
                    array (
                      'description' => '对于包年包月类型，实例过期的时间戳',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1611417600000',
                    ),
                    'ZoneId' => 
                    array (
                      'description' => '实例可用区ID',
                      'type' => 'string',
                      'example' => 'cn-hongkong-b',
                    ),
                    'InstanceStatus' => 
                    array (
                      'description' => '实例状态， 枚举',
                      'type' => 'string',
                      'example' => 'ACTIVATION',
                    ),
                    'GmtExpire' => 
                    array (
                      'description' => '付费类型为包年包月的实例的到期时间，格式为yyyy-MM-dd HH:mm:ss',
                      'type' => 'string',
                      'example' => '2020-12-17 00:00:00',
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
            'errorCode' => 'TSDB.Errorcode.ParameterInvaild',
            'errorMessage' => 'The parameter is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"0A7153E4-8354-497E-87E5-5D0EBEF5AEB1\\",\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 20,\\n  \\"Total\\": 10,\\n  \\"InstanceList\\": [\\n    {\\n      \\"Status\\": \\"ACTIVATION\\",\\n      \\"VpcId\\": \\"vpc-bp1xxxxxxxxxxxxxxxxxx\\",\\n      \\"PaymentType\\": \\"PREPAY\\",\\n      \\"MaxSeriesPerDatabase\\": \\"10000\\",\\n      \\"EngineType\\": \\"tsdb_tsdb\\",\\n      \\"VswitchId\\": \\"vsw-bp1xxxxxxxxxxxxxxxxxx\\",\\n      \\"InstanceClass\\": \\"tsdb.1x.basic\\",\\n      \\"CreateTime\\": 1603426323000,\\n      \\"ChargeType\\": \\"POSTPAY\\",\\n      \\"UserId\\": \\"1000000000000000\\",\\n      \\"InstanceStorage\\": \\"50\\",\\n      \\"NetworkType\\": \\"VPC\\",\\n      \\"InstanceId\\": \\"ts-xxxxxxxxxxxxxxxxx\\",\\n      \\"LockMode\\": \\"0\\",\\n      \\"InstanceDescription\\": \\"test\\",\\n      \\"RegionId\\": \\"cn-hangzhou\\",\\n      \\"GmtCreated\\": \\"2020-11-16 16:22:56\\",\\n      \\"InstanceAlias\\": \\"test_tsdb\\",\\n      \\"InstanceTps\\": \\"960000\\",\\n      \\"ExpiredTime\\": 1611417600000,\\n      \\"ZoneId\\": \\"cn-hongkong-b\\",\\n      \\"InstanceStatus\\": \\"ACTIVATION\\",\\n      \\"GmtExpire\\": \\"2020-12-17 00:00:00\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<PageSize>20</PageSize>\\n<RequestId>0A7153E4-8354-497E-87E5-5D0EBEF5AEB1</RequestId>\\n<PageNumber>1</PageNumber>\\n<Total>10</Total>\\n<InstanceList>\\n    <MaxSeriesPerDatabase>10000</MaxSeriesPerDatabase>\\n    <GmtCreated>2020-11-16 16:22:56</GmtCreated>\\n    <GmtExpire>2020-12-17 00:00:00</GmtExpire>\\n    <NetworkType>VPC</NetworkType>\\n    <InstanceStatus>ACTIVATION</InstanceStatus>\\n    <InstanceAlias>test_tsdb</InstanceAlias>\\n    <ExpiredTime>1611417600000</ExpiredTime>\\n    <PaymentType>PREPAY</PaymentType>\\n    <EngineType>tsdb_tsdb</EngineType>\\n    <InstanceTps>960000</InstanceTps>\\n    <Status>ACTIVATION</Status>\\n    <InstanceStorage>50</InstanceStorage>\\n    <ZoneId>cn-hongkong-b</ZoneId>\\n    <InstanceId>ts-xxxxxxxxxxxxxxxxx</InstanceId>\\n    <CreateTime>1603426323000</CreateTime>\\n    <InstanceClass>tsdb.1x.basic</InstanceClass>\\n    <LockMode>0</LockMode>\\n    <VswitchId>vsw-bp1xxxxxxxxxxxxxxxxxx</VswitchId>\\n    <VpcId>vpc-bp1xxxxxxxxxxxxxxxxxx</VpcId>\\n    <ChargeType>POSTPAY</ChargeType>\\n    <UserId>1000000000000000</UserId>\\n    <InstanceDescription>test</InstanceDescription>\\n    <RegionId>cn-hangzhou</RegionId>\\n</InstanceList>","errorExample":""}]',
      'title' => '获取实例列表',
      'summary' => '调用DescribeHiTSDBInstanceList查询数据库获取实例列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'RenameHiTSDBInstanceAlias' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ts-ufxxxxxxxxxxxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceAlias',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例别名',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'vme',
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
                'description' => '请求ID',
                'type' => 'string',
                'example' => '1556DCB0-043A-4444-8BD9-CF4A68E7EE64',
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
            'errorCode' => 'Instance.IsNotAvailable',
            'errorMessage' => 'The instance is unavailable.',
          ),
          1 => 
          array (
            'errorCode' => 'Instance.IsNotValid',
            'errorMessage' => 'The instance is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1556DCB0-043A-4444-8BD9-CF4A68E7EE64\\"\\n}","errorExample":""},{"type":"xml","example":"<RenameHiTSDBInstanceAliasResponse>\\r\\n    <RequestId>1556DCB0-043A-4444-8BD9-CF4A68E7EE64</RequestId>\\r\\n</RenameHiTSDBInstanceAliasResponse>","errorExample":""}]',
      'title' => '修改实例别名',
      'summary' => '调用RenameHiTSDBInstanceAlias修改实例别名。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'RestartHiTSDBInstance' => 
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
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID',
            'type' => 'string',
            'required' => true,
            'example' => 'ts-ufxxxxxxxxxxxxxx',
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '1556DCB0-043A-4444-8BD9-CF4A68E7EE64',
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
            'errorCode' => 'Instance.IsNotValid',
            'errorMessage' => 'The instance is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'Instance.IsNotAvailable',
            'errorMessage' => 'The instance is unavailable.',
          ),
          2 => 
          array (
            'errorCode' => 'Instance.RestartError',
            'errorMessage' => 'An error occurred while restarting the instance.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1556DCB0-043A-4444-8BD9-CF4A68E7EE64\\"\\n}","errorExample":""},{"type":"xml","example":"<RestartHiTSDBInstanceResponse>\\r\\n    <RequestId>1556DCB0-043A-4444-8BD9-CF4A68E7EE64</RequestId>\\r\\n</RestartHiTSDBInstanceResponse>","errorExample":""}]',
      'title' => '重启数据库实例',
      'summary' => '调用RestartHiTSDBInstance重启实例。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'RenewTSDBInstance' => 
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
            'description' => '区域ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ts-xxxxxxxxxxxxxxxxx',
          ),
        ),
        2 => 
        array (
          'name' => 'PricingCycle',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '付费类型为包年包月的实例的购买时长单位，Month-月，Year-年',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'Month',
          ),
        ),
        3 => 
        array (
          'name' => 'Duration',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '购买时长，PricingCycle为Month时，取值范围为\\[1,9\\]，PricingCycle为Year时，取值范围为\\[1,3\\]',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
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
              'OrderId' => 
              array (
                'description' => '订单ID',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '100000000000000',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '57540985-3C11-4588-96FD-93413C6282EF',
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
            'errorCode' => 'ChargeType.IsNotValid',
            'errorMessage' => 'The charge type is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'Commodity.NotFound',
            'errorMessage' => 'The commodity is not found.',
          ),
          2 => 
          array (
            'errorCode' => 'Order.CreateFailed',
            'errorMessage' => 'Failed to create the order.',
          ),
          3 => 
          array (
            'errorCode' => 'Instance.IsNotValid',
            'errorMessage' => 'The instance is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"OrderId\\": 100000000000000,\\n  \\"RequestId\\": \\"57540985-3C11-4588-96FD-93413C6282EF\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>57540985-3C11-4588-96FD-93413C6282EF</RequestId>\\n<OrderId>100000000000000</OrderId>","errorExample":""}]',
      'title' => '为包年包月付费类型实例进行续费操作',
      'summary' => '调用RenewTSDBInstance为包年包月付费类型实例进行续费操作。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SwitchHiTSDBInstancePublicNet' => 
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ts-ufxxxxxxxxxxxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'SwitchAction',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '- **1**：开启公网链接
- **0**：关闭公网链接',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
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
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'EC6A17BC-B326-4626-B3BE-932B003DB3A9',
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
            'errorCode' => 'Instance.IsNotAvailable',
            'errorMessage' => 'The instance is unavailable.',
          ),
          1 => 
          array (
            'errorCode' => 'Instance.IsNotValid',
            'errorMessage' => 'The instance is invalid.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'API.Forbidden',
            'errorMessage' => 'The API operation is forbidden in this environment.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"EC6A17BC-B326-4626-B3BE-932B003DB3A9\\"\\n}","errorExample":""},{"type":"xml","example":"<SwitchHiTSDBInstancePublicNetResponse>\\r\\n    <RequestId>EC6A17BC-B326-4626-B3BE-932B003DB3A9</RequestId>\\r\\n</SwitchHiTSDBInstancePublicNetResponse>","errorExample":""}]',
      'title' => '切换实例公网链接状态',
      'summary' => '调用SwitchHiTSDBInstancePublicNet切换实例公网链接状态。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyHiTSDBInstanceSecurityIpList' => 
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ts-ufxxxxxxxxxxxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'SecurityIpList',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IP pattern的列表，JSON格式的字符串。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '[“127.0.0.1”, “192.168.0.1/24”]',
          ),
        ),
        2 => 
        array (
          'name' => 'GroupName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分组名称，只允许包含字母、数字、下划线。',
            'type' => 'string',
            'required' => false,
            'example' => 'test_group',
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
                'description' => '请求ID',
                'type' => 'string',
                'example' => '1556DCB0-043A-4444-8BD9-CF4A68E7EE64',
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
            'errorCode' => 'ModifySecurityIpList.CreateAclGetNull',
            'errorMessage' => 'Failed to create access control list.',
          ),
          1 => 
          array (
            'errorCode' => 'ModifySecurityIpList.QueryIngressFailed',
            'errorMessage' => 'Failed to query SLB ingress.',
          ),
          2 => 
          array (
            'errorCode' => 'ModifySecurityIpList.QueryLoadBalancersFailed',
            'errorMessage' => 'Failed to query load balancers.',
          ),
          3 => 
          array (
            'errorCode' => 'ModifySecurityIpList.LoadBalancerSizeAbnormal',
            'errorMessage' => 'The number of load balancers is abnormal.',
          ),
          4 => 
          array (
            'errorCode' => 'ModifySecurityIpList.AddAclGetNull',
            'errorMessage' => 'Failed to add access control list.',
          ),
          5 => 
          array (
            'errorCode' => 'ModifySecurityIpList.SetLBTcpListenerFailed',
            'errorMessage' => 'Failed to set load balancer TCP listener attribute.',
          ),
          6 => 
          array (
            'errorCode' => 'ModifySecurityIpList.DescribeAclFailed',
            'errorMessage' => 'Failed to describe access control list.',
          ),
          7 => 
          array (
            'errorCode' => 'ModifySecurityIpList.RemoveAclFailed',
            'errorMessage' => 'Failed to remove access control list.',
          ),
          8 => 
          array (
            'errorCode' => 'Instance.IsNotAvailable',
            'errorMessage' => 'The instance is unavailable.',
          ),
          9 => 
          array (
            'errorCode' => 'Instance.IsNotValid',
            'errorMessage' => 'The instance is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1556DCB0-043A-4444-8BD9-CF4A68E7EE64\\"\\n}","type":"json"}]',
      'title' => 'ModifyHiTSDBInstanceSecurityIpList',
      'summary' => '调用ModifyHiTSDBInstanceSecurityIpList设置实例的IP白名单。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeHiTSDBInstanceSecurityIpList' => 
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ts-xxxxxxxxxxxxxxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'GroupName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分组名称，只允许包含字母、数字、下划线。',
            'type' => 'string',
            'required' => false,
            'example' => 'test_group',
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
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'F2DFDC0B-FE4F-4696-9FD1-2EFDEE8D6C7C',
              ),
              'SecurityIpList' => 
              array (
                'description' => '网络白名单列表',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Ip' => 
                    array (
                      'description' => '白名单IP',
                      'type' => 'string',
                      'example' => '0.0.0.0/0',
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
            'errorCode' => 'Instance.IsNotAvailable',
            'errorMessage' => 'The instance is unavailable.',
          ),
          1 => 
          array (
            'errorCode' => 'Instance.IsNotValid',
            'errorMessage' => 'The instance is invalid.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'API.Forbidden',
            'errorMessage' => 'The API operation is forbidden in this environment.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"F2DFDC0B-FE4F-4696-9FD1-2EFDEE8D6C7C\\",\\n  \\"SecurityIpList\\": [\\n    {\\n      \\"Ip\\": \\"0.0.0.0/0\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<RequestId>F2DFDC0B-FE4F-4696-9FD1-2EFDEE8D6C7C</RequestId>\\n<SecurityIpList>\\n    <Ip>0.0.0.0/0</Ip>\\n</SecurityIpList>","errorExample":""}]',
      'title' => 'DescribeHiTSDBInstanceSecurityIpList',
      'summary' => '调用DescribeHiTSDBInstanceSecurityIpList获取实例白名单列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-qingdao',
      'endpoint' => 'hitsdb.cn-qingdao.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'cn-beijing',
      'endpoint' => 'hitsdb.cn-beijing.aliyuncs.com',
    ),
    2 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'hitsdb.cn-hangzhou.aliyuncs.com',
    ),
    3 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'hitsdb.cn-shanghai.aliyuncs.com',
    ),
    4 => 
    array (
      'regionId' => 'cn-shenzhen',
      'endpoint' => 'hitsdb.cn-shenzhen.aliyuncs.com',
    ),
    5 => 
    array (
      'regionId' => 'cn-hongkong',
      'endpoint' => 'hitsdb.cn-hongkong.aliyuncs.com',
    ),
    6 => 
    array (
      'regionId' => 'ap-southeast-1',
      'endpoint' => 'hitsdb.ap-southeast-1.aliyuncs.com',
    ),
    7 => 
    array (
      'regionId' => 'us-west-1',
      'endpoint' => 'hitsdb.us-west-1.aliyuncs.com',
    ),
    8 => 
    array (
      'regionId' => 'us-east-1',
      'endpoint' => 'hitsdb.us-east-1.aliyuncs.com',
    ),
    9 => 
    array (
      'regionId' => 'cn-shanghai-finance-1',
      'endpoint' => 'hitsdb.cn-shanghai-finance-1.aliyuncs.com',
    ),
    10 => 
    array (
      'regionId' => 'cn-shenzhen-finance-1',
      'endpoint' => 'hitsdb.cn-shenzhen-finance-1.aliyuncs.com',
    ),
    11 => 
    array (
      'regionId' => 'ap-northeast-2-pop',
      'endpoint' => 'hitsdb.aliyuncs.com',
    ),
    12 => 
    array (
      'regionId' => 'cn-beijing-finance-pop',
      'endpoint' => 'hitsdb.aliyuncs.com',
    ),
    13 => 
    array (
      'regionId' => 'cn-beijing-gov-1',
      'endpoint' => 'hitsdb.aliyuncs.com',
    ),
    14 => 
    array (
      'regionId' => 'cn-beijing-nu16-b01',
      'endpoint' => 'hitsdb.aliyuncs.com',
    ),
    15 => 
    array (
      'regionId' => 'cn-chengdu',
      'endpoint' => 'hitsdb.cn-chengdu.aliyuncs.com',
    ),
    16 => 
    array (
      'regionId' => 'cn-edge-1',
      'endpoint' => 'hitsdb.aliyuncs.com',
    ),
    17 => 
    array (
      'regionId' => 'cn-fujian',
      'endpoint' => 'hitsdb.aliyuncs.com',
    ),
    18 => 
    array (
      'regionId' => 'cn-haidian-cm12-c01',
      'endpoint' => 'hitsdb.aliyuncs.com',
    ),
    19 => 
    array (
      'regionId' => 'cn-hangzhou-bj-b01',
      'endpoint' => 'hitsdb.aliyuncs.com',
    ),
    20 => 
    array (
      'regionId' => 'cn-hangzhou-finance',
      'endpoint' => 'hitsdb.cn-hangzhou-finance.aliyuncs.com',
    ),
    21 => 
    array (
      'regionId' => 'cn-hangzhou-internal-prod-1',
      'endpoint' => 'hitsdb.aliyuncs.com',
    ),
    22 => 
    array (
      'regionId' => 'cn-hangzhou-internal-test-1',
      'endpoint' => 'hitsdb.aliyuncs.com',
    ),
    23 => 
    array (
      'regionId' => 'cn-hangzhou-internal-test-2',
      'endpoint' => 'hitsdb.aliyuncs.com',
    ),
    24 => 
    array (
      'regionId' => 'cn-hangzhou-internal-test-3',
      'endpoint' => 'hitsdb.aliyuncs.com',
    ),
    25 => 
    array (
      'regionId' => 'cn-hangzhou-test-306',
      'endpoint' => 'hitsdb.aliyuncs.com',
    ),
    26 => 
    array (
      'regionId' => 'cn-hongkong-finance-pop',
      'endpoint' => 'hitsdb.aliyuncs.com',
    ),
    27 => 
    array (
      'regionId' => 'cn-huhehaote-nebula-1',
      'endpoint' => 'hitsdb.aliyuncs.com',
    ),
    28 => 
    array (
      'regionId' => 'cn-qingdao-nebula',
      'endpoint' => 'hitsdb.aliyuncs.com',
    ),
    29 => 
    array (
      'regionId' => 'cn-shanghai-et15-b01',
      'endpoint' => 'hitsdb.aliyuncs.com',
    ),
    30 => 
    array (
      'regionId' => 'cn-shanghai-et2-b01',
      'endpoint' => 'hitsdb.aliyuncs.com',
    ),
    31 => 
    array (
      'regionId' => 'cn-shanghai-inner',
      'endpoint' => 'hitsdb.aliyuncs.com',
    ),
    32 => 
    array (
      'regionId' => 'cn-shanghai-internal-test-1',
      'endpoint' => 'hitsdb.aliyuncs.com',
    ),
    33 => 
    array (
      'regionId' => 'cn-shenzhen-inner',
      'endpoint' => 'hitsdb.aliyuncs.com',
    ),
    34 => 
    array (
      'regionId' => 'cn-shenzhen-st4-d01',
      'endpoint' => 'hitsdb.aliyuncs.com',
    ),
    35 => 
    array (
      'regionId' => 'cn-shenzhen-su18-b01',
      'endpoint' => 'hitsdb.aliyuncs.com',
    ),
    36 => 
    array (
      'regionId' => 'cn-wuhan',
      'endpoint' => 'hitsdb.aliyuncs.com',
    ),
    37 => 
    array (
      'regionId' => 'cn-wulanchabu',
      'endpoint' => 'hitsdb.cn-wulanchabu.aliyuncs.com',
    ),
    38 => 
    array (
      'regionId' => 'cn-yushanfang',
      'endpoint' => 'hitsdb.aliyuncs.com',
    ),
    39 => 
    array (
      'regionId' => 'cn-zhangbei',
      'endpoint' => 'hitsdb.aliyuncs.com',
    ),
    40 => 
    array (
      'regionId' => 'cn-zhangbei-na61-b01',
      'endpoint' => 'hitsdb.aliyuncs.com',
    ),
    41 => 
    array (
      'regionId' => 'cn-zhangjiakou-na62-a01',
      'endpoint' => 'hitsdb.aliyuncs.com',
    ),
    42 => 
    array (
      'regionId' => 'cn-zhengzhou-nebula-1',
      'endpoint' => 'hitsdb.aliyuncs.com',
    ),
    43 => 
    array (
      'regionId' => 'eu-west-1-oxs',
      'endpoint' => 'hitsdb.aliyuncs.com',
    ),
    44 => 
    array (
      'regionId' => 'rus-west-1-pop',
      'endpoint' => 'hitsdb.aliyuncs.com',
    ),
    45 => 
    array (
      'regionId' => 'cn-zhangjiakou',
      'endpoint' => 'hitsdb.cn-zhangjiakou.aliyuncs.com',
    ),
    46 => 
    array (
      'regionId' => 'cn-huhehaote',
      'endpoint' => 'hitsdb.cn-huhehaote.aliyuncs.com',
    ),
    47 => 
    array (
      'regionId' => 'ap-southeast-2',
      'endpoint' => 'hitsdb.ap-southeast-2.aliyuncs.com',
    ),
    48 => 
    array (
      'regionId' => 'ap-southeast-3',
      'endpoint' => 'hitsdb.ap-southeast-3.aliyuncs.com',
    ),
    49 => 
    array (
      'regionId' => 'ap-southeast-5',
      'endpoint' => 'hitsdb.ap-southeast-5.aliyuncs.com',
    ),
    50 => 
    array (
      'regionId' => 'ap-northeast-1',
      'endpoint' => 'hitsdb.ap-northeast-1.aliyuncs.com',
    ),
    51 => 
    array (
      'regionId' => 'eu-west-1',
      'endpoint' => 'hitsdb.eu-west-1.aliyuncs.com',
    ),
    52 => 
    array (
      'regionId' => 'eu-central-1',
      'endpoint' => 'hitsdb.eu-central-1.aliyuncs.com',
    ),
    53 => 
    array (
      'regionId' => 'ap-south-1',
      'endpoint' => 'hitsdb.ap-south-1.aliyuncs.com',
    ),
    54 => 
    array (
      'regionId' => 'cn-north-2-gov-1',
      'endpoint' => 'hitsdb.cn-north-2-gov-1.aliyuncs.com',
    ),
  ),
);
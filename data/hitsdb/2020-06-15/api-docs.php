<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'hitsdb',
    'version' => '2020-06-15',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 64161,
      'title' => '区域',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeRegions',
      ),
    ),
    1 => 
    array (
      'id' => 64166,
      'title' => '实例',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateLindormInstance',
        1 => 'ReleaseLindormInstance',
        2 => 'UpgradeLindormInstance',
        3 => 'GetLindormInstance',
        4 => 'GetLindormInstanceEngineList',
        5 => 'GetLindormInstanceList',
        6 => 'RenewLindormInstance',
        7 => 'ModifyInstancePayType',
        8 => 'SwitchLSQLV3MySQLService',
      ),
    ),
    2 => 
    array (
      'id' => 64163,
      'title' => '白名单',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'UpdateInstanceIpWhiteList',
        1 => 'GetInstanceIpWhiteList',
      ),
    ),
    3 => 
    array (
      'id' => 166260,
      'title' => '标签',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ListTagResources',
        1 => 'TagResources',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '64039',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREhitsdbUE1KPV',
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
            'description' => '返回结果中地域名称（LocalName）的显示语言，取值：

- **zh-CN**：中文，默认值。
- **en-US**：英文。',
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
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '73F6E6DA-9AE5-5548-9E07-761A554DAF2E',
              ),
              'Regions' => 
              array (
                'description' => '地域列表信息。',
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
                      'example' => 'hitsdb.cn-hangzhou.aliyuncs.com',
                    ),
                    'LocalName' => 
                    array (
                      'description' => '地域名称。',
                      'type' => 'string',
                      'example' => '华东1（杭州）',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"73F6E6DA-9AE5-5548-9E07-761A554DAF2E\\",\\n  \\"Regions\\": [\\n    {\\n      \\"RegionEndpoint\\": \\"hitsdb.cn-hangzhou.aliyuncs.com\\",\\n      \\"LocalName\\": \\"华东1（杭州）\\",\\n      \\"RegionId\\": \\"cn-hangzhou\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeRegionsResponse>\\n<RequestId>73F6E6DA-9AE5-5548-9E07-761A554DAF2E</RequestId>\\n<Regions>\\n    <Region>\\n        <RegionId>cn-hangzhou</RegionId>\\n        <RegionEndpoint>hitsdb.aliyuncs.com</RegionEndpoint>\\n        <LocalName>华东1（杭州）</LocalName>\\n    </Region>\\n    <Region>\\n        <RegionId>cn-shanghai</RegionId>\\n        <RegionEndpoint>hitsdb.aliyuncs.com</RegionEndpoint>\\n        <LocalName>华东2（上海）</LocalName>\\n    </Region>\\n    <Region>\\n        <RegionId>cn-qingdao</RegionId>\\n        <RegionEndpoint>hitsdb.aliyuncs.com</RegionEndpoint>\\n        <LocalName>华北1（青岛）</LocalName>\\n    </Region>\\n    <Region>\\n        <RegionId>cn-beijing</RegionId>\\n        <RegionEndpoint>hitsdb.aliyuncs.com</RegionEndpoint>\\n        <LocalName>华北2（北京）</LocalName>\\n    </Region>\\n    <Region>\\n        <RegionId>cn-zhangjiakou</RegionId>\\n        <RegionEndpoint>hitsdb.aliyuncs.com</RegionEndpoint>\\n        <LocalName>华北3（张家口）</LocalName>\\n    </Region>\\n    <Region>\\n        <RegionId>cn-huhehaote</RegionId>\\n        <RegionEndpoint>hitsdb.aliyuncs.com</RegionEndpoint>\\n        <LocalName>华北5（呼和浩特）</LocalName>\\n    </Region>\\n    <Region>\\n        <RegionId>cn-shenzhen</RegionId>\\n        <RegionEndpoint>hitsdb.aliyuncs.com</RegionEndpoint>\\n        <LocalName>华南1（深圳）</LocalName>\\n    </Region>\\n    <Region>\\n        <RegionId>cn-guangzhou</RegionId>\\n        <RegionEndpoint>hitsdb.aliyuncs.com</RegionEndpoint>\\n        <LocalName>华南3（广州）</LocalName>\\n    </Region>\\n    <Region>\\n        <RegionId>cn-hongkong</RegionId>\\n        <RegionEndpoint>hitsdb.aliyuncs.com</RegionEndpoint>\\n        <LocalName>中国（香港）</LocalName>\\n    </Region>\\n    <Region>\\n        <RegionId>ap-southeast-1</RegionId>\\n        <RegionEndpoint>hitsdb.aliyuncs.com</RegionEndpoint>\\n        <LocalName>新加坡</LocalName>\\n    </Region>\\n    <Region>\\n        <RegionId>ap-southeast-2</RegionId>\\n        <RegionEndpoint>hitsdb.aliyuncs.com</RegionEndpoint>\\n        <LocalName>澳大利亚（悉尼）</LocalName>\\n    </Region>\\n    <Region>\\n        <RegionId>ap-southeast-3</RegionId>\\n        <RegionEndpoint>hitsdb.aliyuncs.com</RegionEndpoint>\\n        <LocalName>马来西亚（吉隆坡）</LocalName>\\n    </Region>\\n    <Region>\\n        <RegionId>ap-southeast-5</RegionId>\\n        <RegionEndpoint>hitsdb.aliyuncs.com</RegionEndpoint>\\n        <LocalName>印度尼西亚（雅加达）</LocalName>\\n    </Region>\\n    <Region>\\n        <RegionId>ap-northeast-1</RegionId>\\n        <RegionEndpoint>hitsdb.aliyuncs.com</RegionEndpoint>\\n        <LocalName>日本（东京）</LocalName>\\n    </Region>\\n    <Region>\\n        <RegionId>eu-central-1</RegionId>\\n        <RegionEndpoint>hitsdb.aliyuncs.com</RegionEndpoint>\\n        <LocalName>德国（法兰克福）</LocalName>\\n    </Region>\\n    <Region>\\n        <RegionId>eu-west-1</RegionId>\\n        <RegionEndpoint>hitsdb.aliyuncs.com</RegionEndpoint>\\n        <LocalName>英国（伦敦）</LocalName>\\n    </Region>\\n    <Region>\\n        <RegionId>us-west-1</RegionId>\\n        <RegionEndpoint>hitsdb.aliyuncs.com</RegionEndpoint>\\n        <LocalName>美国（硅谷）</LocalName>\\n    </Region>\\n    <Region>\\n        <RegionId>us-east-1</RegionId>\\n        <RegionEndpoint>hitsdb.aliyuncs.com</RegionEndpoint>\\n        <LocalName>美国（弗吉尼亚）</LocalName>\\n    </Region>\\n</Regions>\\n</DescribeRegionsResponse>","errorExample":""}]',
      'title' => '获取Lindorm产品支持的所有地域',
      'summary' => '获取Lindorm产品支持的所有地域。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateLindormInstance' => 
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
        'operationType' => 'create',
        'abilityTreeCode' => '64027',
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
            'description' => '实例的地域ID，可调用[DescribeRegions](~~426062~~)查询，使用此参数指定要创建实例的地域。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'ZoneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例的可用区ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-shanghai-f',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceAlias',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例的名称。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'lindorm_test',
          ),
        ),
        3 => 
        array (
          'name' => 'InstanceStorage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例的存储容量，单位为GB。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '480',
          ),
        ),
        4 => 
        array (
          'name' => 'PayType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例的付费类型，取值：

- **PREPAY**：包年包月（预付费）。
- **POSTPAY**：按量付费（后付费）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'POSTPAY',
          ),
        ),
        5 => 
        array (
          'name' => 'VPCId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例的专有网络ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'vpc-bp1nme44gek34slfc****',
          ),
        ),
        6 => 
        array (
          'name' => 'VSwitchId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '虚拟交换机的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'vsw-bp1e7clcw529l773d****',
          ),
        ),
        7 => 
        array (
          'name' => 'PricingCycle',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例购买的付费周期，取值：

- **Month**：单位为月。
- **Year**：单位为年。

> PayType取值为**PREPAY**时，本参数可用且必须传入。',
            'type' => 'string',
            'required' => false,
            'example' => 'Month',
          ),
        ),
        8 => 
        array (
          'name' => 'Duration',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例包年包月的时间，取值：

- PricingCycle为**Month**，表示按月付费，取值范围为**1**~**9**。
- PricingCycle为**Year**，表示按年付费，取值范围为**1**~**3**。

> PayType取值为**PREPAY**时，本参数可用且必须传入。',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        9 => 
        array (
          'name' => 'DiskCategory',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例的存储类型，取值：

- **cloud_efficiency**：标准型云存储。
- **cloud_ssd**：性能型云存储。
- **cloud_essd**：性能增强型云存储。
- **cloud\\_essd\\_pl0**：性能型云存储 pl0。
- **capacity\\_cloud\\_storage**：容量型云存储（多可用区实例不支持）。
- **local\\_ssd\\_pro**：本地SSD盘（多可用区实例不支持）。
- **local\\_hdd\\_pro**：本地HDD盘（多可用区实例不支持）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cloud_efficiency',
          ),
        ),
        10 => 
        array (
          'name' => 'CoreSpec',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例的本地盘类型节点规格。

本地存储类型为local_ssd_pro时，本参数取值为：

- **lindorm.i2.xlarge**：表示4核32GB（独享规格）。
- **lindorm.i2.2xlarge**：表示8核64GB（独享规格）。
- **lindorm.i2.4xlarge**：表示16核128GB（独享规格）。
- **lindorm.i2.8xlarge**：表示32核256GB（独享规格）。

本地存储类型为local_hdd_pro时，本参数取值为：

- **lindorm.d2c.6xlarge**：表示24核88GB（独享规格）。
- **lindorm.d2c.12xlarge**：表示48核176GB（独享规格）。
- **lindorm.d2c.24xlarge**：表示96核352GB（独享规格）。
- **lindorm.d2s.5xlarge**：表示20核88GB（独享规格）。
- **lindorm.d2s.10xlarge**：表示40核176GB（独享规格）。
- **lindorm.d1.2xlarge**：表示8核32GB（独享规格）。
- **lindorm.d1.4xlarge**：表示16核64GB（独享规格）。
- **lindorm.d1.6xlarge**：表示24核96GB（独享规格）。',
            'type' => 'string',
            'required' => false,
            'example' => 'lindorm.i2.xlarge',
          ),
        ),
        11 => 
        array (
          'name' => 'LindormNum',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例的宽表引擎节点数量。

如果需要创建单可用区实例，取值范围为：**0**\\~**90**。

**如果需要创建多可用区实例，该参数必填**。非本地盘存储类型的实例，取值范围为：**4**\\~**400**。本地盘存储类型的实例，取值范围为：**6**\\~**400**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '2',
          ),
        ),
        12 => 
        array (
          'name' => 'SolrSpec',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例的搜索引擎节点规格，取值：

- **lindorm.g.xlarge**：表示4核16GB（独享规格）。
- **lindorm.g.2xlarge**：表示8核32GB（独享规格）。
- **lindorm.g.4xlarge**：表示16核64GB（独享规格）。
- **lindorm.g.8xlarge**：表示32核128GB（独享规格）。',
            'type' => 'string',
            'required' => false,
            'example' => 'lindorm.g.xlarge',
          ),
        ),
        13 => 
        array (
          'name' => 'SolrNum',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例的搜索引擎节点数量，取值：**0**~**60**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '2',
          ),
        ),
        14 => 
        array (
          'name' => 'ColdStorage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例的容量型云存储容量，单位为GB，不填默认不开通容量型云存储。取值范围：**800**~**1000000**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => false,
            'example' => '800',
          ),
        ),
        15 => 
        array (
          'name' => 'TsdbSpec',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例的时序引擎节点规格，取值：

- **lindorm.g.xlarge**：表示4核16GB（独享规格）。
- **lindorm.g.2xlarge**：表示8核32GB（独享规格）。
- **lindorm.g.4xlarge**：表示16核64GB（独享规格）。
- **lindorm.g.8xlarge**：表示32核128GB（独享规格）。
- **lindorm.r.8xlarge**：表示32核256GB（独享规格）。',
            'type' => 'string',
            'required' => false,
            'example' => 'lindorm.g.xlarge',
          ),
        ),
        16 => 
        array (
          'name' => 'TsdbNum',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例的时序引擎节点数量，取值如下：
- 如果实例的付费类型为**PREPAY**，取值范围为：**0**~**24**。
- 如果实例的付费类型为**POSTPAY**，取值范围为：**0**~**32**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '2',
          ),
        ),
        17 => 
        array (
          'name' => 'LindormSpec',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例的宽表引擎节点规格，取值：

- **lindorm.g.xlarge**：表示4核16GB（独享规格）。
- **lindorm.c.2xlarge**：表示8核16GB（独享规格）。
- **lindorm.g.2xlarge**：表示8核32GB（独享规格）。
- **lindorm.c.4xlarge**：表示16核32GB（独享规格）。
- **lindorm.g.4xlarge**：表示16核64GB（独享规格）。
- **lindorm.c.8xlarge**：表示32核64GB（独享规格）。
- **lindorm.g.8xlarge**：表示32核128GB（独享规格）。',
            'type' => 'string',
            'required' => false,
            'example' => 'lindorm.c.xlarge',
          ),
        ),
        18 => 
        array (
          'name' => 'FilestoreNum',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例的文件引擎节点数量，取值如下：
- 如果实例的付费类型为**PREPAY**，取值范围为：**0**~**60**。
- 如果实例的付费类型为**POSTPAY**，取值范围为：**0**~**8**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '2',
          ),
        ),
        19 => 
        array (
          'name' => 'FilestoreSpec',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例的文件引擎节点规格，取值：

- **lindorm.c.xlarge**：表示4核8GB（标准规格）。',
            'type' => 'string',
            'required' => false,
            'example' => 'lindorm.c.xlarge',
          ),
        ),
        20 => 
        array (
          'name' => 'StreamNum',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例的流引擎节点数量，取值：**0**~**60**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '2',
          ),
        ),
        21 => 
        array (
          'name' => 'StreamSpec',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例的流引擎节点规格，取值：

- **lindorm.g.xlarge**：表示4核16GB（独享规格）。
- **lindorm.c.2xlarge**：表示8核16GB（独享规格）。
- **lindorm.g.2xlarge**：表示8核32GB（独享规格）。
- **lindorm.c.4xlarge**：表示16核32GB（独享规格）。
- **lindorm.g.4xlarge**：表示16核64GB（独享规格）。
- **lindorm.c.8xlarge**：表示32核64GB（独享规格）。
- **lindorm.g.8xlarge**：表示32核128GB（独享规格）。',
            'type' => 'string',
            'required' => false,
            'example' => 'lindorm.g.xlarge',
          ),
        ),
        22 => 
        array (
          'name' => 'ArchVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '部署架构，取值：

- **1.0**：单可用区。
- **2.0**：多可用区。

不填写此参数时，默认为1.0。创建多可用区实例，请填写2.0。**如果需要创建多可用区实例，该参数必填。**',
            'type' => 'string',
            'required' => false,
            'example' => '2.0',
          ),
        ),
        23 => 
        array (
          'name' => 'PrimaryZoneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '多可用区实例，主可用区的可用区ID。**如果需要创建多可用区实例，该参数必填。**',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-shanghai-e',
          ),
        ),
        24 => 
        array (
          'name' => 'StandbyZoneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '多可用区实例，备可用区的可用区ID。**如果需要创建多可用区实例，该参数必填。**',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-shanghai-f',
          ),
        ),
        25 => 
        array (
          'name' => 'ArbiterZoneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '多可用区实例，协调可用区的可用区ID。**如果需要创建多可用区实例，该参数必填。**',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-shanghai-g',
          ),
        ),
        26 => 
        array (
          'name' => 'MultiZoneCombination',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '多可用区组合。可用区组合支持情况可前往售卖页查看。

- **ap-southeast-5abc-aliyun**：印度尼西亚(雅加达)A+B+C。
- **cn-hangzhou-ehi-aliyun**：华东1(杭州)E+H+I。
- **cn-beijing-acd-aliyun**：华北2(北京)A+C+D。
- **ap-southeast-1-abc-aliyun**：新加坡A+B+C。
- **cn-zhangjiakou-abc-aliyun**：华北3(张家口)A+B+C。
- **cn-shanghai-efg-aliyun**：华东2(上海)E+F+G。
- **cn-shanghai-abd-aliyun**：华东2(上海)A+B+D。
- **cn-hangzhou-bef-aliyun**：华东1(杭州)B+E+F。
- **cn-hangzhou-bce-aliyun**：华东1(杭州)B+C+E。
- **cn-beijing-fgh-aliyun**：华北2(北京)F+G+H。
- **cn-shenzhen-abc-aliyun**：华南1(深圳)A+B+C。

**如果需要创建多可用区实例，该参数必填。**',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-shanghai-efg-aliyun',
          ),
        ),
        27 => 
        array (
          'name' => 'PrimaryVSwitchId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '多可用区实例，主可用区的虚拟交换机ID，必须在PrimaryZoneId对应的可用区下。**如果需要创建多可用区实例，该参数必填。**',
            'type' => 'string',
            'required' => false,
            'example' => 'vsw-uf6fdqa7c0pipnqzq****',
          ),
        ),
        28 => 
        array (
          'name' => 'StandbyVSwitchId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '多可用区实例，备可用区的虚拟交换机ID，必须在StandbyZoneId对应的可用区下。**如果需要创建多可用区实例，该参数必填。**',
            'type' => 'string',
            'required' => false,
            'example' => 'vsw-2zec0kcn08cgdtr6****',
          ),
        ),
        29 => 
        array (
          'name' => 'ArbiterVSwitchId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '多可用区实例，协调可用区虚拟交换机ID，交换机需位于ArbiterZoneId对应的可用区下。**如果需要创建多可用区实例，该参数必填。**',
            'type' => 'string',
            'required' => false,
            'example' => 'vsw-uf6664pqjawb87k36****',
          ),
        ),
        30 => 
        array (
          'name' => 'CoreSingleStorage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '多可用区实例，core单节点容量。取值范围400~64000，单位GB。**如果需要创建多可用区实例，该参数必填。**',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '400',
          ),
        ),
        31 => 
        array (
          'name' => 'LogDiskCategory',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '多可用区实例，log节点磁盘类型，返回：

- **cloud_efficiency**：标准云存储。
- **cloud_ssd**：性能云存储。

**如果需要创建多可用区实例，该参数必填。**',
            'type' => 'string',
            'required' => false,
            'example' => 'cloud_ssd',
          ),
        ),
        32 => 
        array (
          'name' => 'LogSpec',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '多可用区实例，log节点规格。取值如下：
- **lindorm.sn1.large**：表示4核8GB（独享规格）。
- **lindorm.sn1.2xlarge**：表示8核16GB（独享规格）。

**如果需要创建多可用区实例，该参数必填。**',
            'type' => 'string',
            'required' => false,
            'example' => 'lindorm.sn1.large',
          ),
        ),
        33 => 
        array (
          'name' => 'LogNum',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '多可用区实例，log节点数量。取值范围4~400。**如果需要创建多可用区实例，该参数必填。**',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '4',
          ),
        ),
        34 => 
        array (
          'name' => 'LogSingleStorage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '多可用区实例，log单节点磁盘容量。取值范围400~64000，单位GB。**如果需要创建多可用区实例，该参数必填。**',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '400',
          ),
        ),
        35 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-aek2i6weeb4nfii',
          ),
        ),
        36 => 
        array (
          'name' => 'AutoRenewal',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例是否自动续费，枚举值：
- **true**：自动续费。
- **false**：不自动续费。

默认值为false

> 仅当**PayType**取值为**PREPAY**（包年包月）时，此参数有效。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        37 => 
        array (
          'name' => 'AutoRenewDuration',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '自动续费时长。单位：月。

取值范围：**1**~**12**。

> 仅**AutoRenewal**为**true**时，该项才生效。',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        38 => 
        array (
          'name' => 'LtsSpec',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        39 => 
        array (
          'name' => 'LtsNum',
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '93BE8227-3406-4D7A-883D-9A421D42****',
              ),
              'InstanceId' => 
              array (
                'description' => '创建的实例ID。',
                'type' => 'string',
                'example' => 'ld-bp1o3y0yme2i2****',
              ),
              'OrderId' => 
              array (
                'description' => '订单ID。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '111111111111111',
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
            'errorCode' => 'Lindorm.Errorcode.ParameterInvaild',
            'errorMessage' => 'The parameter is invalid.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Lindorm.Errorcode.OperationDenied',
            'errorMessage' => 'You are not authorized to operate on the specified resource.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"93BE8227-3406-4D7A-883D-9A421D42****\\",\\n  \\"InstanceId\\": \\"ld-bp1o3y0yme2i2****\\",\\n  \\"OrderId\\": 111111111111111\\n}","errorExample":""},{"type":"xml","example":"<CreateLindormInstanceResponse>\\n<RequestId>93BE8227-3406-4D7A-883D-9A421D42****</RequestId>\\n<InstanceId>ld-bp1o3y0yme2i2****</InstanceId>\\n<OrderId>111111111111111</OrderId>\\n</CreateLindormInstanceResponse>","errorExample":""}]',
      'title' => '创建Lindorm实例',
      'summary' => '创建Lindorm实例。',
      'description' => '创建Lindorm实例时至少选择一种数据引擎。关于数据引擎和存储规格请参见[如何选择数据引擎](~~174643~~)和[如何选择存储规格](~~181971~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ReleaseLindormInstance' => 
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
            'description' => '实例ID，可调用[GetLindormInstanceList](~~426069~~)接口获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ld-bp1z3506imz2f****',
          ),
        ),
        1 => 
        array (
          'name' => 'Immediately',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否立即释放实例。默认false，实例数据会继续保留7天，然后删除；如果选择true，实例数据会被立刻删除。',
            'type' => 'boolean',
            'required' => false,
            'docRequired' => true,
            'example' => 'false',
            'default' => 'false',
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
                'example' => 'F67BFFF3-F5C2-45B5-9C28-6E4A1E51****',
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
            'errorMessage' => 'The  charge type is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'Instance.IsNotPostPay',
            'errorMessage' => 'The  instance billing type is not pay as you go.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'API.Forbidden',
            'errorMessage' => 'The  API operation is forbidden in this environment.',
          ),
          1 => 
          array (
            'errorCode' => 'Lindorm.Errorcode.OperationDenied',
            'errorMessage' => 'You  are not authorized to operate on the specified resource.',
          ),
          2 => 
          array (
            'errorCode' => 'Lindorm.Errorcode.ServiceLinkedRoleNoPermission',
            'errorMessage' => 'No  permission to create service linked role.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'Lindorm.Errorcode.InstanceNotFound',
            'errorMessage' => 'The  instance is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"F67BFFF3-F5C2-45B5-9C28-6E4A1E51****\\"\\n}","type":"json"}]',
      'title' => '释放Lindorm实例',
      'summary' => '释放Lindorm实例。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UpgradeLindormInstance' => 
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
            'description' => '实例所属的地域ID，可调用[DescribeRegions](~~426062~~)接口获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-shanghai',
          ),
        ),
        1 => 
        array (
          'name' => 'ZoneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '可用区ID，可调用[GetLindormInstance](~~426067~~)接口获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-shanghai-f',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID，可调用[GetLindormInstanceList](~~426069~~)接口获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ld-bp1o3y0yme2i2****',
          ),
        ),
        3 => 
        array (
          'name' => 'UpgradeType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例需要变配的类型，支持的变配类型请参见请求参数补充中的UpgradeType参数说明。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'upgrade-cold-storage',
          ),
        ),
        4 => 
        array (
          'name' => 'ClusterStorage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '变配后实例的存储容量，单位为GB，取值：**480**~**1017600**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => false,
            'example' => '480',
          ),
        ),
        5 => 
        array (
          'name' => 'ColdStorage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '变配后实例的冷存储容量，单位为GB，取值：**800**~**1000000**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => false,
            'example' => '800',
          ),
        ),
        6 => 
        array (
          'name' => 'SolrSpec',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '变配后实例的搜索引擎节点规格，取值：

- **lindorm.g.xlarge**：表示4核16GB（独享规格）。
- **lindorm.g.2xlarge**：表示8核32GB（独享规格）。
- **lindorm.g.4xlarge**：表示16核64GB（独享规格）。
- **lindorm.g.8xlarg**e：表示32核128GB（独享规格）。',
            'type' => 'string',
            'required' => false,
            'example' => 'lindorm.g.xlarge',
          ),
        ),
        7 => 
        array (
          'name' => 'SolrNum',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '变配后实例的搜索引擎节点数量，取值：**0**~**60**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '2',
          ),
        ),
        8 => 
        array (
          'name' => 'LindormSpec',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '变配后实例的宽表引擎节点规格，取值：

- **lindorm.c.xlarge**：表示4核8GB（独享规格）。
- **lindorm.c.2xlarge**：表示8核16GB（独享规格）。
- **lindorm.c.4xlarge**：表示16核32GB（独享规格）。
- **lindorm.c.8xlarge**：表示32核64GB（独享规格）。',
            'type' => 'string',
            'required' => false,
            'example' => 'lindorm.c.xlarge',
          ),
        ),
        9 => 
        array (
          'name' => 'LindormNum',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '变配后实例的宽表引擎节点数量，取值：**0**~**90**。

> 本参数需要和LindormSpec参数同时传入。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => false,
            'example' => '2',
          ),
        ),
        10 => 
        array (
          'name' => 'TsdbSpec',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '变配后实例的时序引擎节点规格，取值：

- **lindorm.g.xlarge**：表示4核16GB（独享规格）。
- **lindorm.g.2xlarge**：表示8核32GB（独享规格）。
- **lindorm.g.4xlarge**：表示16核64GB（独享规格）。
- **lindorm.g.8xlarge**：表示32核128GB（独享规格）。',
            'type' => 'string',
            'required' => false,
            'example' => 'lindorm.g.xlarge',
          ),
        ),
        11 => 
        array (
          'name' => 'TsdbNum',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '变配后实例的时序引擎节点数量，取值：**0**~**24**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '2',
          ),
        ),
        12 => 
        array (
          'name' => 'FilestoreSpec',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '变配后实例的文件引擎节点规格，取值：

**indorm.c.xlarge**：表示4核8GB（标准规格）。',
            'type' => 'string',
            'required' => false,
            'example' => 'lindorm.c.xlarge',
          ),
        ),
        13 => 
        array (
          'name' => 'FilestoreNum',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '变配后实例的文件引擎节点数量，取值：**0**~**60**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '2',
          ),
        ),
        14 => 
        array (
          'name' => 'StreamSpec',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '变配后实例的流引擎节点规格，取值：

- **lindorm.c.2xlarge**：表示8核16GB（独享规格）。
- **lindorm.c.4xlarge**：表示16核32GB（独享规格）。
- **lindorm.c.8xlarge**：表示32核64GB（独享规格）。',
            'type' => 'string',
            'required' => false,
            'example' => 'lindorm.g.xlarge',
          ),
        ),
        15 => 
        array (
          'name' => 'StreamNum',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '变配后实例的流引擎节点数量，取值：**0**~**90**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '2',
          ),
        ),
        16 => 
        array (
          'name' => 'LtsCoreSpec',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '变配后实例的LTS节点规格，取值：

- **lindorm.g.xlarge**：表示4核16GB（独享规格）。
- **lindorm.g.2xlarge**：表示8核32GB（独享规格）。',
            'type' => 'string',
            'required' => false,
            'example' => 'lindorm.g.xlarge',
          ),
        ),
        17 => 
        array (
          'name' => 'LtsCoreNum',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '变配后实例的LTS节点数量，取值：**0**~**50**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '2',
          ),
        ),
        18 => 
        array (
          'name' => 'CoreSingleStorage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '多可用区实例，变配后实例的core单节点容量。取值范围400~64000，单位GB。**如果目标实例是多可用区实例，选填该参数。**',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '400GB',
          ),
        ),
        19 => 
        array (
          'name' => 'LogSpec',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '多可用区实例，变配后实例的log节点规格。取值如下：
- **lindorm.sn1.large**：表示4核8GB（独享规格）。
- **lindorm.sn1.2xlarge**：表示8核16GB（独享规格）。

**如果目标实例是多可用区实例，选填该参数。**',
            'type' => 'string',
            'required' => false,
            'example' => 'lindorm.sn1.large',
          ),
        ),
        20 => 
        array (
          'name' => 'LogNum',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '多可用区实例，变配后实例的log节点数量。取值范围4~400。**如果目标实例是多可用区实例，选填该参数。**',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '4',
          ),
        ),
        21 => 
        array (
          'name' => 'LogSingleStorage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '多可用区实例，变配后实例的log单节点磁盘容量。取值范围400-64000，单位GB。**如果目标实例是多可用区实例，选填该参数。**',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '400GB',
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
                'description' => '订单ID。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '111111111111111',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '2A7D4F9D-AA26-4E15-A2B1-3E4792C6****',
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
            'errorCode' => 'Lindorm.Errorcode.InstanceStorageInvalid',
            'errorMessage' => 'The instance storage parameter is invalid: %s',
          ),
          1 => 
          array (
            'errorCode' => 'Instance.IsDeleted',
            'errorMessage' => 'The  instance is deleted.',
          ),
          2 => 
          array (
            'errorCode' => 'Instance.IsNotValid',
            'errorMessage' => 'The  instance is invalid.',
          ),
          3 => 
          array (
            'errorCode' => 'InstanceConfig.NotChanged',
            'errorMessage' => 'The upgrade or downgrade configuration is not changed, please check.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'API.Forbidden',
            'errorMessage' => 'The  API operation is forbidden in this environment.',
          ),
          1 => 
          array (
            'errorCode' => 'Lindorm.Errorcode.OperationDenied',
            'errorMessage' => 'You  are not authorized to operate on the specified resource.',
          ),
          2 => 
          array (
            'errorCode' => 'Lindorm.Errorcode.ServiceLinkedRoleNoPermission',
            'errorMessage' => 'No  permission to create service linked role.',
          ),
          3 => 
          array (
            'errorCode' => 'Instance.NotActive',
            'errorMessage' => 'Instance is not active.',
          ),
          4 => 
          array (
            'errorCode' => 'OperationDenied.OrderProcessing',
            'errorMessage' => 'Order in process, please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"OrderId\\": 111111111111111,\\n  \\"RequestId\\": \\"2A7D4F9D-AA26-4E15-A2B1-3E4792C6****\\"\\n}","errorExample":""},{"type":"xml","example":"<UpgradeLindormInstanceResponse>\\n    <OrderId>111111111111111</OrderId>\\n    <RequestId>2A7D4F9D-AA26-4E15-A2B1-3E4792C6****</RequestId>\\n</UpgradeLindormInstanceResponse>","errorExample":""}]',
      'title' => '变配Lindorm实例',
      'summary' => '为Lindorm实例开通冷存储，变更节点规格或节点数量，变更存储空间。',
      'description' => 'Lindorm实例的数据引擎和存储规格，请参见[如何选择数据引擎](~~174643~~)和[如何选择存储规格](~~181971~~)。',
      'requestParamsDescription' => 'UpgradeType参数说明
------------------------------------

UpgradeLindormInstance接口中传入UpgradeType参数指定实例的变配类型后，您还需要在对应必选参数中传入配置规格，具体信息请参见下表。


|      UpgradeType参数       |   类型   |                                                                                     必选参数                                                                                      |               描述               |
|--------------------------|--------|-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|--------------------------------|
| upgrade-cold-storage     | String | ColdStorage                                                                                                                                                                   | 开通或扩容冷存储。                      |
| upgrade-disk-size        | String | ClusterStorage                                                                                                                                                                | 扩容云盘。                          |
| open-search-engine       | String | **本盘类型实例**：SolrNum<br>**非本盘类型**：SolrNum、SolrSpec、ClusterStorage                                                 | 开通搜索引擎。                        |
| upgrade-search-engine    | String | SolrSpec                                                                                                                                                                      | 升级搜索引擎规格。 **说明** 本盘类型不支持此参数变配。 |
| upgrade-search-core-num  | String | SolrNum和ClusterStorage                                                                                                                                                                       | 变配搜索引擎节点数。                     |
| open-lindorm-engine      | String | **本盘类型**：LindormNum<br>**非本盘类型**：LindormNum、LindormSpec、ClusterStorage                                        | 开通宽表引擎。                        |
| upgrade-lindorm-engine   | String | LindormSpec                                                                                                                                                                   | 升级宽表引擎规格。 **说明** 本盘类型不支持此参数变配。 |
| upgrade-lindorm-core-num | String | LindormNum和ClusterStorage                                                                                                                                                                    | 变配宽表引擎节点数。                     |
| open-tsdb-engine         | String | TsdbSpec、TsdbNum、ClusterStorage                                                                                                                                                              | 开通时序引擎。                        |
| upgrade-tsdb-engine      | String | TsdbSpec                                                                                                                                                                      | 升级时序引擎规格。 **说明** 本盘类型不支持此参数变配。 |
| upgrade-tsdb-core-num    | String | TsdbNum和ClusterStorage                                                                                                                                                                       | 变配时序引擎节点数。                     |
| open-stream-engine         | String | StreamSpec、StreamNum、ClusterStorage                                                                                                                                                              | 开通流引擎。                        |
| upgrade-stream-engine      | String | StreamSpec                                                                                                                                                                      | 升级流引擎规格。 **说明** 本盘类型不支持此参数变配。 |
| upgrade-stream-core-num    | String | StreamNum和ClusterStorage                                                                                                                                                                       | 变配流引擎节点数。                     |
| upgrade-file-engine      | String | FilestoreSpec                                                                                                                                                                 | 升级文件引擎规格。 **说明** 本盘类型不支持此参数变配。 |
| upgrade-file-core-num    | String | FilestoreNum                                                                                                                                                                  | 变配文件引擎节点数。                     |
| open-bds-transfer        | String | **本盘类型**：LtsCoreNum、LtsCoreSpec和SolrNum<br>**非本盘类型**：LtsCoreNum、LtsCoreSpec、SolrNum和SolrSpec   | 开通BDS（LTS）引擎和搜索引擎。             |
| upgrade-bds-transfer     | String | LtsCoreSpec                                                                                                                                                                   | 变更BDS（LTS）引擎规格。                |
| upgrade-bds-core-num     | String | LtsCoreNum                                                                                                                                                                    | 变配BDS（LTS）引擎节点数。               |
| open-bds-transfer-only   | String | LtsCoreNum和LtsCoreSpec                                                                                                                                                        | 实例已开通搜索引擎，只需开通BDS（LTS）引擎。      |

若实例是多可用区实例，请参考下表。

|      UpgradeType参数       |   类型   |                                                                                     必选参数                                                                                      |               描述               |
|--------------------------|--------|-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|--------------------------------|
| upgrade-disk-size        | String | CoreSingleStorage和LogSingleStorage                                                                                                                                                                | 扩容Core单节点磁盘容量或Log单节点磁盘容量。                          |
| upgrade-lindorm-engine   | String | LindormSpec和LogSpec                                                                                                                                                                  | 升级Core节点规格或Log节点规格。 **说明** 本盘类型不支持此参数变配。 |
| upgrade-lindorm-core-num | String | LindormNum和LogNum                                                                                                                                                                    | 变配Core节点数量或Log节点数量。                     |',
    ),
    'GetLindormInstance' => 
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
        'abilityTreeCode' => '64062',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREhitsdb6YHIIK',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID，可调用[GetLindormInstanceList](~~426069~~)接口获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ld-bp1o3y0yme2i2****',
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
              'VpcId' => 
              array (
                'description' => '实例所属的专有网络（VPC）的ID。',
                'type' => 'string',
                'example' => 'vpc-bp1n3i15v90el48nx****',
              ),
              'VswitchId' => 
              array (
                'description' => '虚拟交换机ID。',
                'type' => 'string',
                'example' => 'vsw-bp1vbjzmod9q3l9eo****',
              ),
              'CreateTime' => 
              array (
                'description' => '实例创建时间，格式：**yyyy-MM-dd HH:mm:ss**。',
                'type' => 'string',
                'example' => '2021-07-26 17:10:26',
              ),
              'PayType' => 
              array (
                'description' => '实例的付费类型，返回：

- **PREPAY**：包年包月。
- **POSTPAY**：按量付费。',
                'type' => 'string',
                'example' => 'POSTPAY',
              ),
              'NetworkType' => 
              array (
                'description' => '实例的网络类型。',
                'type' => 'string',
                'example' => 'vpc',
              ),
              'ServiceType' => 
              array (
                'description' => '实例类型，取值：

- **lindorm**：表示Lindorm单可用区实例。
- **lindorm_multizone**：表示Lindorm多可用区实例。
- **serverless_lindorm**：表示Lindorm Serverless实例。
- **lindorm_standalone**：表示Lindorm单节点实例。
- **lts**：表示Lindorm数据通道服务类型。',
                'type' => 'string',
                'example' => 'lindorm',
              ),
              'EnableKms' => 
              array (
                'description' => '是否开启密钥管理服务KMS，返回：

- **true**：开启。
- **false**：关闭。',
                'type' => 'boolean',
                'example' => 'false',
              ),
              'DiskUsage' => 
              array (
                'description' => '磁盘空间使用率。',
                'type' => 'string',
                'example' => '0.0%',
              ),
              'DiskCategory' => 
              array (
                'description' => '存储类型，返回：

- **cloud_efficiency**：标准型云存储。
- **cloud_ssd**：性能型云存储。
- **cloud_essd**：性能增强型云存储。
- **cloud\\_essd\\_pl0**：性能型云存储 pl0。
- **capacity\\_cloud\\_storage**：容量型云存储。
- **local\\_ssd\\_pro**：本地SSD盘。
- **local\\_hdd\\_pro**：本地HDD盘。',
                'type' => 'string',
                'example' => 'cloud_efficiency',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '633F1BE4-C8DA-5744-8FDF-A3075C3FE37F',
              ),
              'ColdStorage' => 
              array (
                'description' => '容量型云存储容量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0GB',
              ),
              'ExpiredMilliseconds' => 
              array (
                'description' => '实例到期时间与1970-01-01 00:00:00之间的毫秒值。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1629993600000',
              ),
              'EngineType' => 
              array (
                'description' => '支持引擎的类型，返回值是由下列引擎类型的值做加法运算后得到的。

- 1: 搜索引擎
- 2: 时序引擎
- 4: 宽表引擎
- 8: 文件引擎

> 例如：EngineType值为15，15=8+4+2+1，表示该实例支持搜索引擎、时序引擎、宽表引擎和文件引擎。EngineType值为6，6=4+2，表示该实例支持时序引擎和宽表引擎。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '15',
              ),
              'ExpireTime' => 
              array (
                'description' => '实例的到期时间，格式：**yyyy-MM-dd HH:mm:ss**。

> 付费类型为包年包月，才会返回本参数。',
                'type' => 'string',
                'example' => '2021-08-27 00:00:00',
              ),
              'AutoRenew' => 
              array (
                'description' => '是否开通自动续费，返回：

- **true**：开启。
- **false**：关闭。

> 实例的付费类型为包年包月会返回此参数。',
                'type' => 'boolean',
                'example' => 'false',
              ),
              'DeletionProtection' => 
              array (
                'description' => '是否开启删除保护，返回：

- **true**：开启。
- **false**：关闭。',
                'type' => 'string',
                'example' => 'false',
              ),
              'InstanceStorage' => 
              array (
                'description' => '实例的存储容量。',
                'type' => 'string',
                'example' => '480',
              ),
              'AliUid' => 
              array (
                'description' => '阿里云账号（主账号）的16位AliUid。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '164901546557****',
              ),
              'InstanceId' => 
              array (
                'description' => '实例ID。',
                'type' => 'string',
                'example' => 'ld-bp1o3y0yme2i2****',
              ),
              'RegionId' => 
              array (
                'description' => '地域ID。',
                'type' => 'string',
                'example' => 'cn-hangzhou',
              ),
              'CreateMilliseconds' => 
              array (
                'description' => '表示实例创建时间与1970-01-01 00:00:00之间的毫秒值。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1627290664000',
              ),
              'InstanceAlias' => 
              array (
                'description' => '实例名称。',
                'type' => 'string',
                'example' => 'test0726',
              ),
              'DiskThreshold' => 
              array (
                'description' => '磁盘空间的阈值。',
                'type' => 'string',
                'example' => '80%',
              ),
              'ZoneId' => 
              array (
                'description' => '可用区ID。',
                'type' => 'string',
                'example' => 'cn-hangzhou-h',
              ),
              'InstanceStatus' => 
              array (
                'description' => '实例状态，返回：

- **CREATING**：创建中。
- **ACTIVATIO**N：运行中。
- **COLD_EXPANDING**：容量型云存储扩容中。
- **MINOR_VERSION_TRANSING**：小版本升级中。
- **RESIZING**：节点扩容中。
- **SHRINKING**：节点缩容中。
- **CLASS_CHANGING**：升级规格中或者降配规格中。
- **SSL_SWITCHING**：SSL变更中。
- **CDC_OPENING**：数据订阅功能开通中。
- **TRANSFER**：数据迁移中。
- **DATABASE_TRANSFER**：数据迁移至数据库中。
- **GUARD_CREATING**：生产灾备实例中。
- **BACKUP_RECOVERING**：备份恢复中。
- **DATABASE_IMPORTING**：数据导入中。
- **NET_MODIFYING**：网络变更中。
- **NET_SWITCHING**：内网和外网切换中。
- **NET_CREATING**：创建网络链接中。
- **NET_DELETING**：删除网络链接中。
- **DELETING**：删除中。
- **RESTARTING**：重启中。
- **LOCKED**：实例已过期，锁定中。',
                'type' => 'string',
                'example' => 'ACTIVATION',
              ),
              'EngineList' => 
              array (
                'description' => '引擎信息列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '引擎信息列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Version' => 
                    array (
                      'description' => '引擎类型的版本号。',
                      'type' => 'string',
                      'example' => '2.2.3',
                    ),
                    'CpuCount' => 
                    array (
                      'description' => '引擎节点CPU数量。',
                      'type' => 'string',
                      'example' => '4',
                    ),
                    'CoreCount' => 
                    array (
                      'description' => '引擎节点数量。',
                      'type' => 'string',
                      'example' => '2',
                    ),
                    'Engine' => 
                    array (
                      'description' => '引擎类型，返回：

- **lindorm**：宽表引擎。
- **tsdb**：时序引擎。
- **solr**：搜索引擎。
- **store**：文件引擎。
- **bds**：LTS引擎。
- **compute**：计算引擎。',
                      'type' => 'string',
                      'example' => 'lindorm',
                    ),
                    'MemorySize' => 
                    array (
                      'description' => '引擎类型的节点内存大小。',
                      'type' => 'string',
                      'example' => '8GB',
                    ),
                    'IsLastVersion' => 
                    array (
                      'description' => '引擎类型是否最新版本，返回：
- **true**：最新版本。
- **false**：不是最新版本。',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'LatestVersion' => 
                    array (
                      'description' => '引擎类型对应的最新的版本号。',
                      'type' => 'string',
                      'example' => '2.2.19.2',
                    ),
                  ),
                ),
              ),
              'EnableCompute' => 
              array (
                'description' => '是否开通实例的计算引擎，返回：

- **true**：已开通。
- **false**：未开通。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'EnableSSL' => 
              array (
                'description' => '是否开启SSL链路加密功能，返回：

- **true**：开启。
- **false**：关闭。',
                'type' => 'boolean',
                'example' => 'false',
              ),
              'EnableMLCtrl' => 
              array (
                'description' => '是否开通AI控制节点

- True: 表示开通

- False: 表示未开通',
                'type' => 'boolean',
                'example' => 'False',
              ),
              'EnableCdc' => 
              array (
                'description' => '是否开通实例的数据订阅功能，返回：

- **true**：已开通。
- **false**：未开通。',
                'type' => 'boolean',
                'example' => 'false',
              ),
              'EnableStream' => 
              array (
                'description' => '实例是否开通流引擎，返回值：

- **true**：开通流引擎。
- **false**：未开通流引擎。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'EnableLTS' => 
              array (
                'description' => '实例是否开通LTS引擎，返回值：

- **true**：开通LTS引擎。
- **false**：未开通LTS引擎。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'EnableShs' => 
              array (
                'description' => '是否开通计算引擎History Server。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'EnableBlob' => 
              array (
                'description' => '实例是否开通LBlob，返回值：

true：开通LBlob。
false：未开通LBlob。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'MaintainStartTime' => 
              array (
                'description' => '可维护开始时间。',
                'type' => 'string',
                'example' => '00:00Z',
              ),
              'MaintainEndTime' => 
              array (
                'description' => '可维护结束时间。',
                'type' => 'string',
                'example' => '20:00Z',
              ),
              'ResourceGroupId' => 
              array (
                'description' => '资源组ID。',
                'type' => 'string',
                'example' => 'rg-aek2wvd6oia****',
              ),
              'PrimaryZoneId' => 
              array (
                'description' => '多可用区实例，主可用区的可用区ID。',
                'type' => 'string',
                'example' => 'cn-shanghai-e',
              ),
              'StandbyZoneId' => 
              array (
                'description' => '多可用区实例，备可用区的可用区ID。',
                'type' => 'string',
                'example' => 'cn-shanghai-f',
              ),
              'ArbiterZoneId' => 
              array (
                'description' => '多可用区实例，协调可用区的可用区ID。',
                'type' => 'string',
                'example' => 'cn-shanghai-g',
              ),
              'PrimaryVSwitchId' => 
              array (
                'description' => '多可用区实例，主可用区的虚拟交换机ID，必须在PrimaryZoneId对应的可用区下。',
                'type' => 'string',
                'example' => 'vsw-uf6fdqa7c0pipnqzq****',
              ),
              'StandbyVSwitchId' => 
              array (
                'description' => '多可用区实例，备可用区的虚拟交换机ID，必须在StandbyZoneId对应的可用区下。',
                'type' => 'string',
                'example' => 'vsw-2zec0kcn08cgdtr6****',
              ),
              'ArbiterVSwitchId' => 
              array (
                'description' => '多可用区实例，协调可用区虚拟交换机ID，交换机需位于ArbiterZoneId对应的可用区下。',
                'type' => 'string',
                'example' => 'vsw-uf6664pqjawb87k36****',
              ),
              'MultiZoneCombination' => 
              array (
                'description' => '多可用区组合。可用区组合支持情况可前往售卖页查看。

- **ap-southeast-5abc-aliyun**：印度尼西亚(雅加达)A+B+C。
- **cn-hangzhou-ehi-aliyun**：华东1(杭州)E+H+I。
- **cn-beijing-acd-aliyun**：华北2(北京)A+C+D。
- **ap-southeast-1-abc-aliyun**：新加坡A+B+C。
- **cn-zhangjiakou-abc-aliyun**：华北3(张家口)A+B+C。
- **cn-shanghai-efg-aliyun**：华东2(上海)E+F+G。
- **cn-shanghai-abd-aliyun**：华东2(上海)A+B+D。
- **cn-hangzhou-bef-aliyun**：华东1(杭州)B+E+F。
- **cn-hangzhou-bce-aliyun**：华东1(杭州)B+C+E。
- **cn-beijing-fgh-aliyun**：华北2(北京)F+G+H。
- **cn-shenzhen-abc-aliyun**：华南1(深圳)A+B+C。',
                'type' => 'string',
                'example' => 'cn-shanghai-efg-aliyun',
              ),
              'CoreDiskCategory' => 
              array (
                'description' => '多可用区实例，core节点磁盘类型，返回：

- **cloud_efficiency**：标准型云存储。
- **cloud_ssd**：性能型云存储。
- **cloud_essd**：性能增强型云存储。
- **cloud\\_essd\\_pl0**：性能型云存储 pl0。',
                'type' => 'string',
                'example' => 'cloud_efficiency',
              ),
              'CoreSpec' => 
              array (
                'description' => '多可用区实例，core节点规格。',
                'type' => 'string',
                'example' => 'lindorm.g.xlarge',
              ),
              'CoreNum' => 
              array (
                'description' => '多可用区实例，core节点数量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '4',
              ),
              'CoreSingleStorage' => 
              array (
                'description' => '多可用区实例，core单节点磁盘容量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '400',
              ),
              'LogDiskCategory' => 
              array (
                'description' => '多可用区实例，log节点磁盘类型，返回：

- **cloud_efficiency**：标准云存储。
- **cloud_ssd**：性能云存储。',
                'type' => 'string',
                'example' => 'cloud_ssd',
              ),
              'LogSpec' => 
              array (
                'description' => '多可用区实例，log节点规格。',
                'type' => 'string',
                'example' => 'lindorm.sn1.large',
              ),
              'LogNum' => 
              array (
                'description' => '多可用区实例，log节点数量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '4',
              ),
              'LogSingleStorage' => 
              array (
                'description' => '多可用区实例，log单节点磁盘容量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '400GB',
              ),
              'ArchVersion' => 
              array (
                'description' => '部署架构，取值：

- **1.0**：单可用区。
- **2.0**：多可用区。',
                'type' => 'string',
                'example' => '1.0',
              ),
              'EnableLsqlVersionV3' => 
              array (
                'description' => '宽表引擎是否支持LindormSQL-V3能力，其兼容MySQL协议，
2023-10-24号之后新购的实例默认支持；存量实例需要联系值班同学评估后再打开。

- True 表示支持

- False 表示不支持',
                'type' => 'boolean',
                'example' => 'True',
              ),
              'EnableLProxy' => 
              array (
                'description' => '宽表引擎是否支持Thrift、CQL协议。如不支持的话，可以通过SwitchLProxyService接口进行开通与关闭。

True 表示支持

False 表示不支持',
                'type' => 'boolean',
                'example' => 'False',
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
            'errorCode' => 'Instance.IsDeleted',
            'errorMessage' => 'The instance is deleted.',
          ),
          1 => 
          array (
            'errorCode' => 'Instance.IsNotValid',
            'errorMessage' => 'The  instance is invalid.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Lindorm.Errorcode.OperationDenied',
            'errorMessage' => 'You are not authorized to operate on the specified resource.',
          ),
          1 => 
          array (
            'errorCode' => 'API.Forbidden',
            'errorMessage' => 'The  API operation is forbidden in this environment.',
          ),
          2 => 
          array (
            'errorCode' => 'Lindorm.Errorcode.ServiceLinkedRoleNoPermission',
            'errorMessage' => 'No  permission to create service linked role.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"VpcId\\": \\"vpc-bp1n3i15v90el48nx****\\",\\n  \\"VswitchId\\": \\"vsw-bp1vbjzmod9q3l9eo****\\",\\n  \\"CreateTime\\": \\"2021-07-26 17:10:26\\",\\n  \\"PayType\\": \\"POSTPAY\\",\\n  \\"NetworkType\\": \\"vpc\\",\\n  \\"ServiceType\\": \\"lindorm\\",\\n  \\"EnableKms\\": false,\\n  \\"DiskUsage\\": \\"0.0%\\",\\n  \\"DiskCategory\\": \\"cloud_efficiency\\",\\n  \\"RequestId\\": \\"633F1BE4-C8DA-5744-8FDF-A3075C3FE37F\\",\\n  \\"ColdStorage\\": 0,\\n  \\"ExpiredMilliseconds\\": 1629993600000,\\n  \\"EngineType\\": 15,\\n  \\"ExpireTime\\": \\"2021-08-27 00:00:00\\",\\n  \\"AutoRenew\\": false,\\n  \\"DeletionProtection\\": \\"false\\",\\n  \\"InstanceStorage\\": \\"480\\",\\n  \\"AliUid\\": 0,\\n  \\"InstanceId\\": \\"ld-bp1o3y0yme2i2****\\",\\n  \\"RegionId\\": \\"cn-hangzhou\\",\\n  \\"CreateMilliseconds\\": 1627290664000,\\n  \\"InstanceAlias\\": \\"test0726\\",\\n  \\"DiskThreshold\\": \\"80%\\",\\n  \\"ZoneId\\": \\"cn-hangzhou-h\\",\\n  \\"InstanceStatus\\": \\"ACTIVATION\\",\\n  \\"EngineList\\": [\\n    {\\n      \\"Version\\": \\"2.2.3\\",\\n      \\"CpuCount\\": \\"4\\",\\n      \\"CoreCount\\": \\"2\\",\\n      \\"Engine\\": \\"lindorm\\",\\n      \\"MemorySize\\": \\"8GB\\",\\n      \\"IsLastVersion\\": false,\\n      \\"LatestVersion\\": \\"2.2.19.2\\"\\n    }\\n  ],\\n  \\"EnableCompute\\": true,\\n  \\"EnableSSL\\": false,\\n  \\"EnableMLCtrl\\": true,\\n  \\"EnableCdc\\": false,\\n  \\"EnableStream\\": true,\\n  \\"EnableLTS\\": true,\\n  \\"EnableShs\\": true,\\n  \\"EnableBlob\\": true,\\n  \\"MaintainStartTime\\": \\"00:00Z\\",\\n  \\"MaintainEndTime\\": \\"20:00Z\\",\\n  \\"ResourceGroupId\\": \\"rg-aek2wvd6oia****\\",\\n  \\"PrimaryZoneId\\": \\"cn-shanghai-e\\",\\n  \\"StandbyZoneId\\": \\"cn-shanghai-f\\",\\n  \\"ArbiterZoneId\\": \\"cn-shanghai-g\\",\\n  \\"PrimaryVSwitchId\\": \\"vsw-uf6fdqa7c0pipnqzq****\\",\\n  \\"StandbyVSwitchId\\": \\"vsw-2zec0kcn08cgdtr6****\\",\\n  \\"ArbiterVSwitchId\\": \\"vsw-uf6664pqjawb87k36****\\",\\n  \\"MultiZoneCombination\\": \\"cn-shanghai-efg-aliyun\\",\\n  \\"CoreDiskCategory\\": \\"cloud_efficiency\\",\\n  \\"CoreSpec\\": \\"lindorm.g.xlarge\\",\\n  \\"CoreNum\\": 4,\\n  \\"CoreSingleStorage\\": 400,\\n  \\"LogDiskCategory\\": \\"cloud_ssd\\",\\n  \\"LogSpec\\": \\"lindorm.sn1.large\\",\\n  \\"LogNum\\": 4,\\n  \\"LogSingleStorage\\": 0,\\n  \\"ArchVersion\\": \\"1.0\\",\\n  \\"EnableLsqlVersionV3\\": true,\\n  \\"EnableLProxy\\": true\\n}","errorExample":""},{"type":"xml","example":"<GetLindormInstanceResponse>\\n<ExpiredMilliseconds>1629993600000</ExpiredMilliseconds>\\n<DiskThreshold>80%</DiskThreshold>\\n<EngineList>\\n    <MemorySize>8</MemorySize>\\n    <CpuCount>4</CpuCount>\\n    <Version>2.2.9.1</Version>\\n    <Engine>lindorm</Engine>\\n    <IsLastVersion>true</IsLastVersion>\\n    <CoreCount>2</CoreCount>\\n</EngineList>\\n<EngineList>\\n    <MemorySize>16</MemorySize>\\n    <CpuCount>4</CpuCount>\\n    <Version>3.2.15</Version>\\n    <Engine>tsdb</Engine>\\n    <IsLastVersion>false</IsLastVersion>\\n    <CoreCount>2</CoreCount>\\n</EngineList>\\n<EngineList>\\n    <MemorySize>16</MemorySize>\\n    <CpuCount>4</CpuCount>\\n    <Version>7.7.10</Version>\\n    <Engine>solr</Engine>\\n    <IsLastVersion>true</IsLastVersion>\\n    <CoreCount>2</CoreCount>\\n</EngineList>\\n<EngineList>\\n    <MemorySize>8</MemorySize>\\n    <CpuCount>4</CpuCount>\\n    <Version>3.10.6</Version>\\n    <Engine>store</Engine>\\n    <IsLastVersion>true</IsLastVersion>\\n    <CoreCount>2</CoreCount>\\n</EngineList>\\n<EnableBDS>false</EnableBDS>\\n<AutoRenew>false</AutoRenew>\\n<DiskUsage>0.0%</DiskUsage>\\n<EnableFS>true</EnableFS>\\n<EnableCompute>true</EnableCompute>\\n<InstanceAlias>test0726</InstanceAlias>\\n<InstanceStatus>ACTIVATION</InstanceStatus>\\n<NetworkType>vpc</NetworkType>\\n<ServiceType>lindorm</ServiceType>\\n<EngineType>15</EngineType>\\n<CreateMilliseconds>1627290664000</CreateMilliseconds>\\n<EnableSSL>false</EnableSSL>\\n<InstanceStorage>480</InstanceStorage>\\n<RequestId>633F1BE4-C8DA-5744-8FDF-A3075C3FE37F</RequestId>\\n<ZoneId>cn-hangzhou-h</ZoneId>\\n<InstanceId>ld-bp1o3y0yme2i2****</InstanceId>\\n<EnableKms>false</EnableKms>\\n<CreateTime>2021-07-26 17:10:26</CreateTime>\\n<ColdStorage>0</ColdStorage>\\n<DiskCategory>cloud_efficiency</DiskCategory>\\n<PayType>PREPAY</PayType>\\n<DeletionProtection>false</DeletionProtection>\\n<VswitchId>vsw-bp1vbjzmod9q3l9eo****</VswitchId>\\n<VpcId>vpc-bp1n3i15v90el48nx****</VpcId>\\n<EnableCdc>false</EnableCdc>\\n<EnablePhoenix>false</EnablePhoenix>\\n<RegionId>cn-hangzhou</RegionId>\\n<ExpireTime>2021-08-27 00:00:00</ExpireTime>\\n<AliUid>1000000000000000</AliUid>\\n</GetLindormInstanceResponse>","errorExample":""}]',
      'title' => '获取Lindorm实例的详细信息',
      'summary' => '获取Lindorm实例的详细信息，包括实例类型、付费类型、所属专有网络等。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetLindormInstanceEngineList' => 
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
            'description' => '地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID，可调用[GetLindormInstanceList](~~426069~~)接口获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ld-bp1nq34mv3smk****',
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
              'InstanceId' => 
              array (
                'description' => '实例ID。',
                'type' => 'string',
                'example' => 'ld-bp1nq34mv3smk****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'B496BA0E-520C-59FC-BA04-196D8F3B07EF',
              ),
              'EngineList' => 
              array (
                'description' => '引擎类型列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'EngineType' => 
                    array (
                      'description' => '引擎类型，返回值：

- **lindorm**：宽表引擎。
- **tsdb**：时序引擎。
- **solr**：搜索引擎。
- **store**：文件引擎。',
                      'type' => 'string',
                      'example' => 'lindorm',
                    ),
                    'NetInfoList' => 
                    array (
                      'description' => '引擎的数据库连接信息列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'AccessType' => 
                          array (
                            'description' => '表示宽表引擎的连接方式，返回值：

- **0**：默认为0，可以忽略
- **1**：使用HBase Java API访问宽表引擎地址。
- **2**：使用HBase 非Java API访问宽表引擎地址。
- **3**：使用CQL访问宽表引擎地址。
- **4**：使用Lindorm宽表SQL地址。
- **5**：使用Lindorm宽表S3兼容地址。
- **6**：使用Lindorm宽表MySQL兼容地址。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '1',
                          ),
                          'Port' => 
                          array (
                            'description' => '数据库连接地址的端口号。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '30020',
                          ),
                          'ConnectionString' => 
                          array (
                            'description' => '数据库连接地址。',
                            'type' => 'string',
                            'example' => 'ld-bp1nq34mv3smk****-proxy-lindorm.lindorm.rds.aliyuncs.com',
                          ),
                          'NetType' => 
                          array (
                            'description' => '数据库连接地址的网络类型，返回值：

- **0**：公网。
- **2**：专有网络。',
                            'type' => 'string',
                            'example' => '2',
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
            'errorCode' => 'Instance.IsDeleted',
            'errorMessage' => 'The  instance is deleted.',
          ),
          1 => 
          array (
            'errorCode' => 'Instance.IsNotValid',
            'errorMessage' => 'The  instance is invalid.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'API.Forbidden',
            'errorMessage' => 'The  API operation is forbidden in this environment.',
          ),
          1 => 
          array (
            'errorCode' => 'Lindorm.Errorcode.OperationDenied',
            'errorMessage' => 'You  are not authorized to operate on the specified resource.',
          ),
          2 => 
          array (
            'errorCode' => 'Lindorm.Errorcode.ServiceLinkedRoleNoPermission',
            'errorMessage' => 'No  permission to create service linked role.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"InstanceId\\": \\"ld-bp1nq34mv3smk****\\",\\n  \\"RequestId\\": \\"B496BA0E-520C-59FC-BA04-196D8F3B07EF\\",\\n  \\"EngineList\\": [\\n    {\\n      \\"EngineType\\": \\"lindorm\\",\\n      \\"NetInfoList\\": [\\n        {\\n          \\"AccessType\\": 1,\\n          \\"Port\\": 30020,\\n          \\"ConnectionString\\": \\"ld-bp1nq34mv3smk****-proxy-lindorm.lindorm.rds.aliyuncs.com\\",\\n          \\"NetType\\": \\"2\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '获取Lindorm实例支持的引擎类型',
      'summary' => '获取Lindorm实例支持的引擎类型。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetLindormInstanceList' => 
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
        'abilityTreeCode' => '76395',
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
            'description' => '实例所属的地域ID，可调用[DescribeRegions](~~426062~~)接口获取。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'QueryStr',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例名称关键字，可根据该关键字模糊搜索。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定要查询的页码。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => true,
            'example' => '1',
            'default' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定分页查询时每页行数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => true,
            'example' => '20',
            'default' => '100',
          ),
        ),
        4 => 
        array (
          'name' => 'ServiceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例类型，取值：

- **lindorm**：表示Lindorm单可用区实例。
- **lindorm_multizone**：表示Lindorm多可用区实例。
- **serverless_lindorm**：表示Lindorm Serverless实例。
- **lindorm_standalone**：表示Lindorm单节点实例。
- **lts**：表示Lindorm数据通道服务类型。',
            'type' => 'string',
            'required' => false,
            'example' => 'lindorm',
          ),
        ),
        5 => 
        array (
          'name' => 'SupportEngine',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询的实例支持的数据引擎类型，取值：

- **1**：支持搜索引擎。
- **2**：支持时序引擎。
- **4**：支持宽表引擎。
- **8**：支持文件引擎。

> 例如：SupportEngine取值为15，15=8+4+2+1，表示该实例支持搜索引擎、时序引擎、宽表引擎和文件引擎。SupportEngine取值为6，6=4+2，表示该实例支持时序引擎和宽表引擎。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '7',
            'minimum' => '-1',
            'example' => '15',
            'default' => '-1',
          ),
        ),
        6 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'repeatList',
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
                  'description' => '标签的键。N的取值范围：1~20。

> 可以传入多个标签的键。例如：第一对中的Key表示传入第一个标签的键。第二对中的Key表示传入第二个标签的键。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'test',
                ),
                'Value' => 
                array (
                  'description' => '标签的值。N的取值范围：1~20。

> 可以传入多个标签的值。例如：第一对中的Value表示传入第一个标签的值。第二对中的Value表示传入第二个标签的值。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '2.2.18',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 21,
            'minItems' => 0,
          ),
        ),
        7 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-aek3b63arvg27vi',
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
                'example' => '1CA1FAFD-E8DC-51C2-AA7E-CA6E2D049BA0',
              ),
              'PageNumber' => 
              array (
                'description' => '实例所在页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '实例所在页的行数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '20',
              ),
              'Total' => 
              array (
                'description' => '查询到的实例总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'InstanceList' => 
              array (
                'description' => '实例列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'VpcId' => 
                    array (
                      'description' => '实例所属的专有网络ID。',
                      'type' => 'string',
                      'example' => 'vpc-bp1n3i15v90el48nx****',
                    ),
                    'EngineType' => 
                    array (
                      'description' => '实例支持引擎的类型，返回值是由下列引擎类型的值做加法运算后得到的。

- **1**：支持搜索引擎。
- **2**：支持时序引擎。
- **4**：支持宽表引擎。
- **8**：支持文件引擎。

> 例如：EngineType值为15，15=8+4+2+1，表示该实例支持搜索引擎、时序引擎、宽表引擎和文件引擎。EngineType值为6，6=4+2，表示该实例支持时序引擎和宽表引擎。',
                      'type' => 'string',
                      'example' => '15',
                    ),
                    'ExpireTime' => 
                    array (
                      'description' => '实例的到期时间。

> 实例的付费类型为包年包月，才会返回本参数。',
                      'type' => 'string',
                      'example' => '2022-04-26 00:00:00',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '实例的创建时间。',
                      'type' => 'string',
                      'example' => '2021-09-16 14:13:13',
                    ),
                    'PayType' => 
                    array (
                      'description' => '实例的付费类型，返回值：

- **PREPAY**：包年包月。
- **POSTPAY**：按量付费。',
                      'type' => 'string',
                      'example' => 'PREPAY',
                    ),
                    'AliUid' => 
                    array (
                      'description' => '阿里云账号（主账号）的16位AliUid。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '164901546557****',
                    ),
                    'InstanceStorage' => 
                    array (
                      'description' => '实例的存储容量。',
                      'type' => 'string',
                      'example' => '960',
                    ),
                    'InstanceId' => 
                    array (
                      'description' => '实例ID。',
                      'type' => 'string',
                      'example' => 'ld-bp17pwu1541ia****',
                    ),
                    'NetworkType' => 
                    array (
                      'description' => '实例的网络类型。',
                      'type' => 'string',
                      'example' => 'vpc',
                    ),
                    'ServiceType' => 
                    array (
                      'description' => '实例类型，返回值：

- **lindorm**：表示Lindorm实例。
- **serverless_lindorm**：表示LindormServerless实例。
- **lindorm_standalone**：表示Lindorm单节点实例。
- **lts**：表示Lindorm数据通道服务类型。',
                      'type' => 'string',
                      'example' => 'lindorm',
                    ),
                    'RegionId' => 
                    array (
                      'description' => '地域ID。',
                      'type' => 'string',
                      'example' => 'cn-hangzhou',
                    ),
                    'CreateMilliseconds' => 
                    array (
                      'description' => '表示实例创建时间与1970-01-01 00:00:00之间的毫秒值。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1631772842000',
                    ),
                    'InstanceAlias' => 
                    array (
                      'description' => '实例名称。',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                    'ZoneId' => 
                    array (
                      'description' => '可用区ID。',
                      'type' => 'string',
                      'example' => 'cn-hangzhou-h',
                    ),
                    'InstanceStatus' => 
                    array (
                      'description' => '实例状态，返回值：

- **CREATING**：创建中。
- **ACTIVATION**：运行中。
- **COLD_EXPANDING**：容量型云存储扩容中。
- **MINOR_VERSION_TRANSING**：小版本升级中。
- **RESIZING**：节点扩容中。
- **SHRINKING**：节点缩容中。
- **CLASS_CHANGING**：升级规格中或者降配规格中。
- **SSL_SWITCHING：SSL**变更中。
- **CDC_OPENING**：数据订阅功能开通中。
- **TRANSFER**：数据迁移中。
- **DATABASE_TRANSFER**：数据迁移至数据库中。
- **GUARD_CREATING**：生产灾备实例中。
- **BACKUP_RECOVERING**：备份恢复中。
- **DATABASE_IMPORTING**：数据导入中。
- **NET_MODIFYING**：网络变更中。
- **NET_SWITCHING**：内网和外网切换中。
- **NET_CREATING**：创建网络链接中。
- **NET_DELETING**：删除网络链接中。
- **DELETING**：删除中。
- **RESTARTING**：重启中。
- **LOCKED**：实例已过期，锁定中。',
                      'type' => 'string',
                      'example' => 'ACTIVATION',
                    ),
                    'ExpiredMilliseconds' => 
                    array (
                      'description' => '实例到期时间与1970-01-01 00:00:00之间的毫秒值。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1650902400000',
                    ),
                    'EnableStream' => 
                    array (
                      'description' => '实例是否开通流引擎，返回值：

- **true**：开通流引擎。
- **false**：未开通流引擎。',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'Tags' => 
                    array (
                      'description' => '标签列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Key' => 
                          array (
                            'description' => '标签的键。',
                            'type' => 'string',
                            'example' => 'test',
                          ),
                          'Value' => 
                          array (
                            'description' => '标签的值。',
                            'type' => 'string',
                            'example' => '2.2.18',
                          ),
                        ),
                      ),
                    ),
                    'EnableCompute' => 
                    array (
                      'description' => '是否开通实例的计算引擎，返回：

- **true**：已开通。
- **false**：未开通。',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'ResourceGroupId' => 
                    array (
                      'description' => '资源组ID。',
                      'type' => 'string',
                      'example' => 'rg-aekzledqeat****',
                    ),
                    'EnableMessage' => 
                    array (
                      'type' => 'boolean',
                    ),
                    'EnableVector' => 
                    array (
                      'type' => 'boolean',
                    ),
                    'EnableLts' => 
                    array (
                      'type' => 'boolean',
                    ),
                    'EnableColumn' => 
                    array (
                      'type' => 'boolean',
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
            'errorCode' => 'Instance.IsDeleted',
            'errorMessage' => 'The  instance is deleted.',
          ),
          1 => 
          array (
            'errorCode' => 'Instance.IsNotAvailable',
            'errorMessage' => 'The  instance is unavailable.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Lindorm.Errorcode.OperationDenied',
            'errorMessage' => 'You are not authorized to operate on the specified resource.',
          ),
          1 => 
          array (
            'errorCode' => 'API.Forbidden',
            'errorMessage' => 'The  API operation is forbidden in this environment.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1CA1FAFD-E8DC-51C2-AA7E-CA6E2D049BA0\\",\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 20,\\n  \\"Total\\": 1,\\n  \\"InstanceList\\": [\\n    {\\n      \\"VpcId\\": \\"vpc-bp1n3i15v90el48nx****\\",\\n      \\"EngineType\\": \\"15\\",\\n      \\"ExpireTime\\": \\"2022-04-26 00:00:00\\",\\n      \\"CreateTime\\": \\"2021-09-16 14:13:13\\",\\n      \\"PayType\\": \\"PREPAY\\",\\n      \\"AliUid\\": 0,\\n      \\"InstanceStorage\\": \\"960\\",\\n      \\"InstanceId\\": \\"ld-bp17pwu1541ia****\\",\\n      \\"NetworkType\\": \\"vpc\\",\\n      \\"ServiceType\\": \\"lindorm\\",\\n      \\"RegionId\\": \\"cn-hangzhou\\",\\n      \\"CreateMilliseconds\\": 1631772842000,\\n      \\"InstanceAlias\\": \\"test\\",\\n      \\"ZoneId\\": \\"cn-hangzhou-h\\",\\n      \\"InstanceStatus\\": \\"ACTIVATION\\",\\n      \\"ExpiredMilliseconds\\": 1650902400000,\\n      \\"EnableStream\\": true,\\n      \\"Tags\\": [\\n        {\\n          \\"Key\\": \\"test\\",\\n          \\"Value\\": \\"2.2.18\\"\\n        }\\n      ],\\n      \\"EnableCompute\\": true,\\n      \\"ResourceGroupId\\": \\"rg-aekzledqeat****\\",\\n      \\"EnableMessage\\": true,\\n      \\"EnableVector\\": true,\\n      \\"EnableLts\\": true,\\n      \\"EnableColumn\\": true\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<GetLindormInstanceListResponse>\\n    <RequestId>1CA1FAFD-E8DC-51C2-AA7E-CA6E2D049BA0</RequestId>\\n    <PageSize>20</PageSize>\\n    <PageNumber>1</PageNumber>\\n    <Total>1</Total>\\n    <InstanceList>\\n        <ExpiredMilliseconds>1650902400000</ExpiredMilliseconds>\\n        <InstanceStorage>960</InstanceStorage>\\n        <ZoneId>cn-hangzhou-h</ZoneId>\\n        <InstanceId>ld-bp17pwu1541i****</InstanceId>\\n        <CreateTime>2021-09-16 14:13:13</CreateTime>\\n        <PayType>PREPAY</PayType>\\n        <VpcId>vpc-bp1n3i15v90el48nx****</VpcId>\\n        <NetworkType>vpc</NetworkType>\\n        <ServiceType>lindorm</ServiceType>\\n        <InstanceAlias>test</InstanceAlias>\\n        <InstanceStatus>ACTIVATION</InstanceStatus>\\n        <EnableStream>true</EnableStream>\\n        <EngineType>15</EngineType>\\n        <RegionId>cn-hangzhou</RegionId>\\n        <ExpireTime>2022-04-26 00:00:00</ExpireTime>\\n        <CreateMilliseconds>1631772842000</CreateMilliseconds>\\n        <Tags>\\n            <Value>2.2.18</Value>\\n            <Key>test</Key>\\n        </Tags>\\n        <AliUid>1000000000000000</AliUid>\\n    </InstanceList>\\n</GetLindormInstanceListResponse>","errorExample":""}]',
      'title' => '获取Lindorm实例列表',
      'summary' => '获取Lindorm实例列表。',
    ),
    'RenewLindormInstance' => 
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
        'abilityTreeCode' => '158636',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREhitsdb6YHIIK',
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
            'description' => '实例所属的地域ID，可调用[DescribeRegions](~~426062~~)接口获取。',
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
            'description' => '实例ID，可调用[GetLindormInstanceList](~~426069~~)接口获取。',
            'type' => 'string',
            'required' => true,
            'example' => 'ld-bp1z3506imz2f****',
          ),
        ),
        2 => 
        array (
          'name' => 'PricingCycle',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例购买的付费周期，取值：

- **Month**：单位为月。
- **Year**：单位为年。',
            'type' => 'string',
            'required' => true,
            'example' => 'Month',
            'enum' => 
            array (
              0 => 'Month',
              1 => 'Year',
            ),
          ),
        ),
        3 => 
        array (
          'name' => 'Duration',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例包年包月的时间，取值：

- PricingCycle为**Month**，表示按月付费，取值范围为**1**~**9**。
- PricingCycle为**Year**，表示按年付费，取值范围为**1**~**3**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'maximum' => '9',
            'minimum' => '1',
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
            'description' => '返回结果',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1556DCB0-043A-4444-8BD9-CF4A68E7EE64',
              ),
              'InstanceId' => 
              array (
                'description' => '实例ID',
                'type' => 'string',
                'example' => 'ld-bp1z3506imz2f****',
              ),
              'OrderId' => 
              array (
                'description' => '订单ID。您可以在阿里云用户中心的订单管理中获取。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '213465921640411',
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
            'errorCode' => 'Lindorm.Errorcode.ParameterInvaild',
            'errorMessage' => 'The parameter is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'Lindorm.Errorcode.Order.CreateFailed',
            'errorMessage' => 'Create order failed.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Lindorm.Errorcode.OperationDenied',
            'errorMessage' => 'You are not authorized to operate on the specified resource.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'Lindorm.Errorcode.PayType.IsNotValid',
            'errorMessage' => 'Pay type is not valid.',
          ),
          1 => 
          array (
            'errorCode' => 'Lindorm.Errorcode.Commodity.NotFound',
            'errorMessage' => 'Commodity is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1556DCB0-043A-4444-8BD9-CF4A68E7EE64\\",\\n  \\"InstanceId\\": \\"ld-bp1z3506imz2f****\\",\\n  \\"OrderId\\": 213465921640411\\n}","type":"json"}]',
      'title' => '为Lindorm实例续费',
      'summary' => 'Lindorm包年包月类型实例续费。',
      'description' => '为包年包月类型实例进行续费操作，续费周期：月、年，续费时长1 ~ 9（月），1 ~ 3（年）。

请确保在使用该接口前，已充分了解Lindorm产品的收费方式和价格。',
    ),
    'ModifyInstancePayType' => 
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
        'abilityTreeCode' => '158675',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREhitsdb6YHIIK',
        ),
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
            'example' => 'ld-bp1z3506imz2f****',
          ),
        ),
        1 => 
        array (
          'name' => 'Duration',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '购买时长，转成包年包月类型时需要传入。

- PricingCycle为Month时，取值范围为\\[1,9\\]。

- PricingCycle为Year时，取值范围为\\[1,3\\]。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'PricingCycle',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '转成包年包月类型时的购买时长单位。

- Month：月。

- Year：年。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'Month',
          ),
        ),
        3 => 
        array (
          'name' => 'PayType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例的付费类型，返回：

- **PREPAY**：包年包月。
- **POSTPAY**：按量付费。',
            'type' => 'string',
            'required' => true,
            'example' => 'POSTPAY',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回结果',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '587BCA54-50DA-4885-ADE9-80A848339151',
              ),
              'OrderId' => 
              array (
                'description' => '订单ID',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '211662251220224',
              ),
              'InstanceId' => 
              array (
                'description' => '实例ID',
                'type' => 'string',
                'example' => 'ld-bp1z3506imz2f****',
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
            'errorCode' => 'Instance.IsDeleted',
            'errorMessage' => 'The  instance is deleted.',
          ),
          1 => 
          array (
            'errorCode' => 'Instance.IsNotAvailable',
            'errorMessage' => 'The  instance is unavailable.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'API.Forbidden',
            'errorMessage' => 'The  API operation is forbidden in this environment.',
          ),
          1 => 
          array (
            'errorCode' => 'Lindorm.Errorcode.OperationDenied',
            'errorMessage' => 'You  are not authorized to operate on the specified resource.',
          ),
          2 => 
          array (
            'errorCode' => 'Lindorm.Errorcode.ServiceLinkedRoleNoPermission',
            'errorMessage' => 'No  permission to create service linked role.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'Lindorm.Errorcode.InstanceNotFound',
            'errorMessage' => 'The  instance is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"587BCA54-50DA-4885-ADE9-80A848339151\\",\\n  \\"OrderId\\": 211662251220224,\\n  \\"InstanceId\\": \\"ld-bp1z3506imz2f****\\"\\n}","type":"json"}]',
      'title' => '变更Lindorm实例的计费方式',
      'summary' => '变更Lindorm实例的计费方式。',
      'description' => '调整实例的付费类型，支持包年包月与按量付费类型之间进行切换。

请确保在使用该接口前，已充分了解Lindorm产品的收费方式和[价格](https://www.aliyun.com/price/product?spm=openapi-amp.newDocPublishment.0.0.6345281fu63xJ3#/hitsdb/detail/hitsdb_lindormpre_public_cn)。',
    ),
    'SwitchLSQLV3MySQLService' => 
    array (
      'summary' => '开通与关闭Lindorm MySQL兼容协议。',
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
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ld-bp1o3y0yme2i2****',
          ),
        ),
        1 => 
        array (
          'name' => 'ActionType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '操作类型
取值：

- 1：开通

- 0：关闭',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '1',
            'enum' => 
            array (
              0 => '0',
              1 => '1',
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
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'MinorVersion.TooLow',
            'errorMessage' => 'The minor version is too low. Please upgrade.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1556DCB0-043A-4444-8BD9-CF4A68E7EE64\\"\\n}","type":"json"}]',
      'title' => '开通LindormMySQL协议',
      'description' => '前提条件：


- 实例宽表引擎版本号>= 2.6.0

- 宽表引擎支持lindormSQL V3版本。通过实例详情接口（GetLindormInstance）的返回值EnableLsqlVersionV3=true判断，2023-10-24号之后新购的实例默认已支持EnableLsqlVersionV3=true；存量实例需要联系值班同学评估后再打开。

满足如上两个条件才可以支持开通MySQL协议，',
    ),
    'UpdateInstanceIpWhiteList' => 
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID，可调用[GetLindormInstanceList](~~426069~~)接口获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ld-bp1z3506imz2f****',
          ),
        ),
        1 => 
        array (
          'name' => 'SecurityIpList',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要设置的白名单IP地址。

> 127.0.0.1表示禁止所有地址访问，例如192.168.0.0/24表示允许所有192.168.0.X的IP地址访问该Lindorm实例。多个白名单用半角逗号（,）分隔。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '192.168.0.X/24',
          ),
        ),
        2 => 
        array (
          'name' => 'GroupName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '白名单分组名称，不填默认为”user“。',
            'type' => 'string',
            'required' => false,
            'example' => 'test_group',
          ),
        ),
        3 => 
        array (
          'name' => 'Delete',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否清空白名单。',
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
                'example' => '4944539D-D27C-458D-95F1-2DCEB5E0EED5',
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
            'errorCode' => 'Instance.IsDeleted',
            'errorMessage' => 'The  instance is deleted.',
          ),
          1 => 
          array (
            'errorCode' => 'Instance.IsNotValid',
            'errorMessage' => 'The  instance is invalid.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'API.Forbidden',
            'errorMessage' => 'The  API operation is forbidden in this environment.',
          ),
          1 => 
          array (
            'errorCode' => 'Lindorm.Errorcode.OperationDenied',
            'errorMessage' => 'You  are not authorized to operate on the specified resource.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4944539D-D27C-458D-95F1-2DCEB5E0EED5\\"\\n}","type":"json"}]',
      'title' => '设置Lindorm实例的访问白名单',
      'summary' => '设置Lindorm实例的访问白名单。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetInstanceIpWhiteList' => 
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
            'description' => '实例ID，可调用[GetLindormInstanceList](~~426068~~)接口获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ld-bp1z3506imz2g****',
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
              'InstanceId' => 
              array (
                'description' => '实例ID。',
                'type' => 'string',
                'example' => 'ld-bp1z3506imz2f****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1D1F6F4D-9203-53E7-84E9-5376B4657E63',
              ),
              'IpList' => 
              array (
                'description' => '白名单IP地址列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '白名单IP地址。',
                  'type' => 'string',
                  'example' => '192.168.0.0/24',
                ),
              ),
              'GroupList' => 
              array (
                'description' => '白名单分组列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'GroupName' => 
                    array (
                      'description' => '白名单分组名称。',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                    'SecurityIpList' => 
                    array (
                      'description' => '白名单IP列表。',
                      'type' => 'string',
                      'example' => '192.168.1.0/24',
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
            'errorCode' => 'Lindorm.Errorcode.ParameterInvaild',
            'errorMessage' => 'The parameter is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'Instance.IsDeleted',
            'errorMessage' => 'The  instance is deleted.',
          ),
          2 => 
          array (
            'errorCode' => 'Instance.IsNotValid',
            'errorMessage' => 'The  instance is invalid.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Lindorm.Errorcode.OperationDenied',
            'errorMessage' => 'You are not authorized to operate on the specified resource.',
          ),
          1 => 
          array (
            'errorCode' => 'API.Forbidden',
            'errorMessage' => 'The  API operation is forbidden in this environment.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"InstanceId\\": \\"ld-bp1z3506imz2f****\\",\\n  \\"RequestId\\": \\"1D1F6F4D-9203-53E7-84E9-5376B4657E63\\",\\n  \\"IpList\\": [\\n    \\"192.168.0.0/24\\"\\n  ],\\n  \\"GroupList\\": [\\n    {\\n      \\"GroupName\\": \\"test\\",\\n      \\"SecurityIpList\\": \\"192.168.1.0/24\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<GetInstanceIpWhiteListResponse>\\n<RequestId>1D1F6F4D-9203-53E7-84E9-5376B4657E63</RequestId>\\n<InstanceId>ld-bp1z3506imz2f****</InstanceId>\\n<IpList>10.20.XX.XX</IpList>\\n<IpList>10.61.XX.XX</IpList>\\n<IpList>117.36.XX.XX</IpList>\\n<IpList>10.61.XX.XX/24</IpList>\\n<IpList>203.119.XX.XX</IpList>\\n<IpList>106.11.XX.XX</IpList>\\n<IpList>42.120.XX.XX</IpList>\\n<IpList>120.55.XX.XX</IpList>\\n<IpList>42.120.XX.XX</IpList>\\n<IpList>101.37.XX.XX</IpList>\\n<IpList>127.0.XX.XX</IpList>\\n</GetInstanceIpWhiteListResponse>","errorExample":""}]',
      'title' => '获取Lindorm实例的访问白名单',
      'summary' => '获取Lindorm实例的访问白名单。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
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
            'description' => '实例所属的地域ID，可调用[DescribeRegions](~~426062~~)接口获取。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
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
              'description' => '实例ID，可以查询多个实例和标签的绑定关系，请传入多个实例ID，可调用[GetLindormInstanceList](~~426069~~)接口获取。',
              'type' => 'string',
              'required' => false,
              'example' => 'ld-bp17j28j2y7pm****',
            ),
            'required' => false,
            'docRequired' => true,
            'maxItems' => 51,
            'minItems' => 0,
          ),
        ),
        2 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '下一个查询开始Token，用来返回更多结果。

> 第一次查询不需要提供本参数，如果一次查询没有返回全部结果，则可在后续查询中传入前一次返回的**NextToken**值以继续查询。',
            'type' => 'string',
            'required' => false,
            'example' => '212db86****',
          ),
        ),
        3 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源类型，取值固定为**INSTANCE**。',
            'type' => 'string',
            'required' => true,
            'example' => 'INSTANCE',
          ),
        ),
        4 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '标签列表。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '标签的键。
> 可以传入多个标签的键。例如：第一对中的Key表示传入第一个标签的键。第二对中的Key表示传入第二个标签的键。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'test',
                ),
                'Value' => 
                array (
                  'description' => '标签的值。
> 可以传入多个标签的值。例如：第一对中的Value表示传入第一个标签的值。第二对中的Value表示传入第二个标签的值。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '2.2.8',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 21,
            'minItems' => 0,
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
                'example' => '05CB115C-91CB-529F-9098-50C1F6CB3BD3',
              ),
              'TagResources' => 
              array (
                'description' => '资源列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ResourceType' => 
                    array (
                      'description' => '资源类型。返回值固定为**ALIYUN::HITSDB::INSTANCE**。',
                      'type' => 'string',
                      'example' => 'ALIYUN::HITSDB::INSTANCE',
                    ),
                    'TagValue' => 
                    array (
                      'description' => '标签的值。',
                      'type' => 'string',
                      'example' => '2.2.8',
                    ),
                    'ResourceId' => 
                    array (
                      'description' => '资源ID，即实例ID。',
                      'type' => 'string',
                      'example' => 'ld-bp17j28j2y7pm****',
                    ),
                    'TagKey' => 
                    array (
                      'description' => '标签的键。',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                  ),
                ),
              ),
              'NextToken' => 
              array (
                'description' => '下一个查询开始Token。

> 如果一次查询没有返回全部结果，则会返回本参数，您可以后续查询中传入本参数返回的值以继续查询。',
                'type' => 'string',
                'example' => '212db86****',
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
            'errorCode' => 'Lindorm.Errorcode.MissingParameter',
            'errorMessage' => 'You must specify ResourceId.N or Tags',
          ),
          1 => 
          array (
            'errorCode' => 'Lindorm.Errorcode.NumberExceed.Tags',
            'errorMessage' => 'The maximum number of Tags is exceeded.',
          ),
          2 => 
          array (
            'errorCode' => 'Lindorm.Errorcode.NumberExceed.ResourceIds',
            'errorMessage' => 'The maximum number of ResourceIds is exceeded.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'API.Forbidden',
            'errorMessage' => 'The  API operation is forbidden in this environment.',
          ),
          1 => 
          array (
            'errorCode' => 'Lindorm.Errorcode.OperationDenied',
            'errorMessage' => 'You  are not authorized to operate on the specified resource.',
          ),
          2 => 
          array (
            'errorCode' => 'Lindorm.Errorcode.ServiceLinkedRoleNoPermission',
            'errorMessage' => 'No  permission to create service linked role.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'Lindorm.Errorcode.InstanceNotFound',
            'errorMessage' => 'The  instance is not found.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"05CB115C-91CB-529F-9098-50C1F6CB3BD3\\",\\n  \\"TagResources\\": [\\n    {\\n      \\"ResourceType\\": \\"ALIYUN::HITSDB::INSTANCE\\",\\n      \\"TagValue\\": \\"2.2.8\\",\\n      \\"ResourceId\\": \\"ld-bp17j28j2y7pm****\\",\\n      \\"TagKey\\": \\"test\\"\\n    }\\n  ],\\n  \\"NextToken\\": \\"212db86****\\"\\n}","errorExample":""},{"type":"xml","example":"<ListTagResourcesResponse>\\n    <RequestId>48E3A4AA-808C-5480-9DC7-8F4B96E13A93</RequestId>\\n    <TagResources>\\n        <ResourceType>ALIYUN::HITSDB::INSTANCE</ResourceType>\\n        <TagValue>2.2.8</TagValue>\\n        <ResourceId>ld-bp17j28j2y7pm****</ResourceId>\\n        <TagKey>test</TagKey>\\n    </TagResources>\\n    <NextToken>212db86****</NextToken>\\n</ListTagResourcesResponse>","errorExample":""}]',
      'title' => '获取Lindorm实例和标签的绑定关系',
      'summary' => '获取Lindorm实例和标签的绑定关系。',
    ),
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例所属的地域ID，可调用[DescribeRegions](~~426062~~)接口获取。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源类型，取值固定为**INSTANCE**。',
            'type' => 'string',
            'required' => true,
            'example' => 'INSTANCE',
          ),
        ),
        2 => 
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
              'description' => '实例ID，可以同时为多个实例绑定标签，请传入多个实例ID。可调用[GetLindormInstanceList](~~426069~~)接口获取。',
              'type' => 'string',
              'required' => false,
              'example' => 'ld-bp17j28j2y7pm****',
            ),
            'required' => true,
            'maxItems' => 51,
            'minItems' => 1,
          ),
        ),
        3 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '标签列表。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '标签的键。

> 可以传入多个标签的键。例如：第一对中的Key表示传入第一个标签的键。第二对中的Key表示传入第二个标签的键。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'test',
                ),
                'Value' => 
                array (
                  'description' => '标签的值。

> 可以传入多个标签的值。例如：第一对中的Value表示传入第一个标签的值。第二对中的Value表示传入第二个标签的值。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '2.2.8',
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '4F23D50C-400C-592C-9486-9D1E10179065',
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
            'errorCode' => 'Lindorm.Errorcode.ParameterInvaild',
            'errorMessage' => 'The parameter is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'Lindorm.Errorcode.InvalidParameter.TagValue',
            'errorMessage' => 'The Tag.N.Value parameter is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'Lindorm.Errorcode.InvalidParameter.TagKey',
            'errorMessage' => 'The Tag.N.Key parameter is invalid.',
          ),
          3 => 
          array (
            'errorCode' => 'Lindorm.Errorcode.Duplicate.TagKey',
            'errorMessage' => 'The Tag.N.Key contains duplicate keys.',
          ),
          4 => 
          array (
            'errorCode' => 'Lindorm.Errorcode.NumberExceed.ResourceIds',
            'errorMessage' => 'The maximum number of ResourceIds is exceeded.',
          ),
          5 => 
          array (
            'errorCode' => 'Lindorm.Errorcode.NumberExceed.Tags',
            'errorMessage' => 'The maximum number of Tags is exceeded.',
          ),
          6 => 
          array (
            'errorCode' => 'Lindorm.Errorcode.QuotaExceed.TagsPerResource',
            'errorMessage' => 'The maximum number of tags for each resource is exceeded',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Lindorm.Errorcode.OperationDenied',
            'errorMessage' => 'You are not authorized to operate on the specified resource.',
          ),
          1 => 
          array (
            'errorCode' => 'Lindorm.Errorcode.ServiceLinkedRoleNoPermission',
            'errorMessage' => 'No permission to create service linked role.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'Lindorm.Errorcode.InvalidResourceId',
            'errorMessage' => 'The specified ResourceIds are not found in our records.',
          ),
          1 => 
          array (
            'errorCode' => 'Lindorm.Errorcode.MissingParameter.TagKey',
            'errorMessage' => 'You must specify Tag.N.Key.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4F23D50C-400C-592C-9486-9D1E10179065\\"\\n}","errorExample":""},{"type":"xml","example":"<TagResourcesResponse>\\n    <RequestId>4F23D50C-400C-592C-9486-9D1E10179065</RequestId>\\n</TagResourcesResponse>","errorExample":""}]',
      'title' => '为Lindorm实例绑定标签',
      'summary' => '为一个或多个Lindorm实例绑定标签。',
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
        'abilityTreeCode' => '129417',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREhitsdbI6NK1A',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源类型，取值固定为**INSTANCE**。',
            'type' => 'string',
            'required' => true,
            'example' => 'INSTANCE',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceId',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '实例ID列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '实例ID，可以同时为多个实例解绑标签，请传入多个实例ID。可调用[GetLindormInstanceList](~~426069~~)接口获取。',
              'type' => 'string',
              'required' => false,
              'example' => 'ld-bp17j28j2y7pm****',
            ),
            'required' => true,
            'maxItems' => 51,
            'minItems' => 1,
          ),
        ),
        2 => 
        array (
          'name' => 'TagKey',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '标签的键列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签的键。

> 如果需要解绑多个实例的标签，请填写多个实例标签的键。例如：第一个TagKey表示第一个ResourceId标签的值；第二个TagKey表示第二个ResourceId标签的值。',
              'type' => 'string',
              'required' => false,
              'example' => 'test',
            ),
            'required' => false,
            'maxItems' => 21,
            'minItems' => 1,
          ),
        ),
        3 => 
        array (
          'name' => 'All',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否解绑实例上的所有标签，取值：

- **true**：解绑实例上的所有标签。
- **false**：不解绑实例上的所有标签。

> - 默认值为false。
- 如果同时传入TagKey和本参数，本参数不生效。
',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
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
                'example' => '8CACBBCE-7519-545C-8695-86D4F09CED7E',
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
            'errorCode' => 'Lindorm.Errorcode.ParameterInvaild',
            'errorMessage' => 'The parameter is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'Lindorm.Errorcode.InvalidParameter.TagKey',
            'errorMessage' => 'The Tag.N.Key parameter is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'Lindorm.Errorcode.Tags.ExceedLimitation',
            'errorMessage' => 'The maximum number of Tags is exceeded.',
          ),
          3 => 
          array (
            'errorCode' => 'Lindorm.Errorcode.Duplicate.TagKey',
            'errorMessage' => 'The Tag.N.Key contains duplicate keys.',
          ),
          4 => 
          array (
            'errorCode' => 'Lindorm.Errorcode.InvalidTagKey.Malformed',
            'errorMessage' => 'The Tag.N.Key parameter is invalid.',
          ),
          5 => 
          array (
            'errorCode' => 'Lindorm.Errorcode.ParameterInvaild.TagKeysOrDeleteAll',
            'errorMessage' => 'The TagKeys or DeleteAll parameter is invalid.',
          ),
          6 => 
          array (
            'errorCode' => 'Lindorm.Errorcode.InvalidResourceId.NotFound',
            'errorMessage' => 'The specified ResourceIds are not found in our records.',
          ),
          7 => 
          array (
            'errorCode' => 'Lindorm.Errorcode.NumberExceed.ResourceIds',
            'errorMessage' => 'The ResourceIds parameter\'s number is exceed.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Lindorm.Errorcode.OperationDenied',
            'errorMessage' => 'You are not authorized to operate on the specified resource.',
          ),
          1 => 
          array (
            'errorCode' => 'Lindorm.Errorcode.ServiceLinkedRoleNoPermission',
            'errorMessage' => 'No permission to create service linked role.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"8CACBBCE-7519-545C-8695-86D4F09CED7E\\"\\n}","errorExample":""},{"type":"xml","example":"<UntagResourcesResponse>\\n    <RequestId>8CACBBCE-7519-545C-8695-86D4F09CED7E</RequestId>\\n</UntagResourcesResponse>","errorExample":""}]',
      'title' => '为Lindorm实例解绑标签',
      'summary' => '为Lindorm实例解绑标签。',
      'description' => '如果标签没有绑定到任何Lindorm实例，则该标签会被删除。',
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
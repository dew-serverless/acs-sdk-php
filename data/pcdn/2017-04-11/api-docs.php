<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'Pcdn',
    'version' => '2017-04-11',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 131326,
      'title' => '应用',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'GetAllAppVersions',
        1 => 'GetShareRateData',
        2 => 'GetClientsRatio',
        3 => 'GetConsumerStatus',
        4 => 'GetTokenList',
      ),
    ),
    1 => 
    array (
      'id' => 131332,
      'title' => '服务',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'AddConsumer',
        1 => 'GetAllIsp',
        2 => 'GetAllPlatformTypes',
        3 => 'GetAllRegions',
        4 => 'GetAllMarkets',
      ),
    ),
    2 => 
    array (
      'id' => 131338,
      'title' => '费用',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'GetBalanceBandwidthData',
        1 => 'GetBalanceTrafficData',
        2 => 'GetFeeHistory',
        3 => 'GetCurrentMode',
        4 => 'GetExpenseSummary',
      ),
    ),
    3 => 
    array (
      'id' => 131344,
      'title' => '流量',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'GetTrafficByRegion',
        1 => 'GetTrafficData',
        2 => 'GetFluencyData',
      ),
    ),
    4 => 
    array (
      'id' => 131348,
      'title' => '日志',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'GetLogsList',
      ),
    ),
    5 => 
    array (
      'id' => 131350,
      'title' => '启停设置',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'AddPcdnControlRule',
        1 => 'DeletePcdnControlRule',
        2 => 'DisablePcdnControlRule',
        3 => 'EnablePcdnControlRule',
        4 => 'GetControlRules',
        5 => 'EditPcdnControlRule',
      ),
    ),
    6 => 
    array (
      'id' => 131357,
      'title' => '域名',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'AddDomain',
        1 => 'DeleteDomain',
        2 => 'StartDomain',
        3 => 'StopDomain',
        4 => 'GetAccessData',
        5 => 'GetBandwidthData',
        6 => 'GetCoverRateData',
        7 => 'GetDomainCount',
        8 => 'GetDomains',
        9 => 'GetFirstFrameDelayData',
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
    'GetAllAppVersions' => 
    array (
      'methods' => 
      array (
        0 => 'get',
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
          'name' => 'Version',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '版本号。',
            'type' => 'string',
            'required' => true,
            'example' => '2017-04-11',
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
              'Code' => 
              array (
                'description' => '业务码，成功返回0。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '4785676A-6382-4D0B-AA23-5081742EE74E',
              ),
              'DataList' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'UsageData' => 
                  array (
                    'description' => '返回的数据。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Code' => 
                        array (
                          'description' => '平台类型码。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'Value' => 
                        array (
                          'description' => '版本号。',
                          'type' => 'string',
                          'example' => '6.6.2',
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
            'errorCode' => 'MissingParameter',
            'errorMessage' => 'You must specify domainName.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 0,\\n  \\"RequestId\\": \\"4785676A-6382-4D0B-AA23-5081742EE74E\\",\\n  \\"DataList\\": {\\n    \\"UsageData\\": [\\n      {\\n        \\"Code\\": 1,\\n        \\"Value\\": \\"6.6.2\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetAllAppVersionsResponse>\\n  <RequestId>0484CF2A-3C0F-4183-9DF3-6239FA433001</RequestId>\\n  <DataList>\\n    <UsageData>\\n      <Value>6.6.2</Value>\\n      <Code>01</Code>\\n    </UsageData>\\n    <UsageData>\\n      <Value>6.4.7</Value>\\n      <Code>01</Code>\\n    </UsageData>\\n  </DataList>\\n  <Code>0</Code>\\n</GetAllAppVersionsResponse>","errorExample":""}]',
      'title' => '获取所有应用版本列表',
      'summary' => '调用GetAllAppVersions获取所有支持的地区列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetShareRateData' => 
    array (
      'methods' => 
      array (
        0 => 'get',
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
          'name' => 'Version',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '版本号。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2017-04-11',
          ),
        ),
        1 => 
        array (
          'name' => 'Domain',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '搜索传入的内容，如果为空显示全部。',
            'type' => 'string',
            'required' => false,
            'example' => 'all',
          ),
        ),
        2 => 
        array (
          'name' => 'Region',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域代码，多个用竖线（|）分隔，查询全部传all。

代码详情请参见[通用字段参考](~~151572~~)。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'all',
          ),
        ),
        3 => 
        array (
          'name' => 'IspName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '运营商代码，多个用竖线（|）分隔，查询全部传all。

代码详情请参见[通用字段参考](~~151572~~)。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'all',
          ),
        ),
        4 => 
        array (
          'name' => 'PlatformType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '终端代码，多个用竖线（|）分隔，查询全部传all。

代码详情请参见[通用字段参考](~~151572~~)。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'all',
          ),
        ),
        5 => 
        array (
          'name' => 'BusinessType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '业务类型代码，多个用竖线（|）分隔，查询全部传all。

代码详情请参见[通用字段参考](~~151572~~)。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'all',
          ),
        ),
        6 => 
        array (
          'name' => 'StartDate',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开始时间。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2017-05-01',
          ),
        ),
        7 => 
        array (
          'name' => 'EndDate',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '结束时间。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2017-05-10',
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
                'description' => '业务码，成功返回0。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '8ECFC607-8D62-4DE8-9D8D-CC7F63B07B7D',
              ),
              'Labels' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Label' => 
                  array (
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '数据。',
                      'type' => 'string',
                      'example' => 'P2P分享率',
                    ),
                  ),
                ),
              ),
              'DataList' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'UsageData' => 
                  array (
                    'description' => '返回的信息列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Date' => 
                        array (
                          'description' => '数据的时间片起始时刻。',
                          'type' => 'string',
                          'example' => '2017-05-01 00:00:00',
                        ),
                        'Values' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Values' => 
                            array (
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '分享率数据，**0**~**1**。',
                                'type' => 'string',
                                'example' => '1',
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
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'MissingParameter',
            'errorMessage' => 'You must specify domainName.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 0,\\n  \\"RequestId\\": \\"8ECFC607-8D62-4DE8-9D8D-CC7F63B07B7D\\",\\n  \\"Labels\\": {\\n    \\"Label\\": [\\n      \\"P2P分享率\\"\\n    ]\\n  },\\n  \\"DataList\\": {\\n    \\"UsageData\\": [\\n      {\\n        \\"Date\\": \\"2017-05-01 00:00:00\\",\\n        \\"Values\\": {\\n          \\"Values\\": [\\n            \\"1\\"\\n          ]\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetShareRateDataResponse>\\r\\n  <Labels>\\r\\n    <Label>P2P分享率</Label>\\r\\n  </Labels>\\r\\n  <RequestId>8ECFC607-8D62-4DE8-9D8D-CC7F63B07B7D</RequestId>\\r\\n  <DataList>\\r\\n    <UsageData>\\r\\n      <Values>\\r\\n        <Values>1.0</Values>\\r\\n      </Values>\\r\\n      <Date>2017-05-01 00:00:00</Date>\\r\\n    </UsageData>\\r\\n    <UsageData>\\r\\n      <Values>\\r\\n        <Values>1.0</Values>\\r\\n      </Values>\\r\\n      <Date>2017-05-01 04:00:00</Date>\\r\\n    </UsageData>\\r\\n  </DataList>\\r\\n  <Code>0</Code>\\r\\n</GetShareRateDataResponse>","errorExample":""}]',
      'title' => '获取PCDN分享率信息',
      'summary' => '调用GetShareRateData获取PCDN分享率信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetClientsRatio' => 
    array (
      'methods' => 
      array (
        0 => 'get',
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
          'name' => 'Version',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '版本号。',
            'type' => 'string',
            'required' => true,
            'example' => '2017-04-11',
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
              'Code' => 
              array (
                'description' => '业务码，成功返回0。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '42FA014D-045F-491F-8749-20745C516F89',
              ),
              'DataList' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'UsageData' => 
                  array (
                    'description' => '返回的数据。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Value' => 
                        array (
                          'description' => '流量值。',
                          'type' => 'string',
                          'example' => '28914025061',
                        ),
                        'Name' => 
                        array (
                          'description' => '平台类型。',
                          'type' => 'string',
                          'example' => 'iOS',
                        ),
                        'Rate' => 
                        array (
                          'description' => '比例。',
                          'type' => 'string',
                          'example' => '0.000001762543363929356',
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
            'errorCode' => 'MissingParameter',
            'errorMessage' => 'You must specify domainName.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 0,\\n  \\"RequestId\\": \\"42FA014D-045F-491F-8749-20745C516F89\\",\\n  \\"DataList\\": {\\n    \\"UsageData\\": [\\n      {\\n        \\"Value\\": \\"28914025061\\",\\n        \\"Name\\": \\"iOS\\",\\n        \\"Rate\\": \\"0.000001762543363929356\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetClientsRatioResponse>\\r\\n  <RequestId>69501FC0-4CDD-4E1E-8995-C7EB8A16AA34</RequestId>\\r\\n  <DataList>\\r\\n    <UsageData>\\r\\n      <Name>PC</Name>\\r\\n      <Value>16375213495846691</Value>\\r\\n      <Rate>0.9982015239711776</Rate>\\r\\n    </UsageData>\\r\\n    <UsageData>\\r\\n      <Name>Android</Name>\\r\\n      <Value>29474576234067</Value>\\r\\n      <Rate>0.0017967134854585337</Rate>\\r\\n    </UsageData>\\r\\n    <UsageData>\\r\\n      <Name>OTT</Name>\\r\\n      <Value>0</Value>\\r\\n      <Rate>0.0</Rate>\\r\\n    </UsageData>\\r\\n    <UsageData>\\r\\n      <Name>iOS</Name>\\r\\n      <Value>28914025061</Value>\\r\\n      <Rate>0.000001762543363929356</Rate>\\r\\n    </UsageData>\\r\\n  </DataList>\\r\\n  <Code>0</Code>\\r\\n</GetClientsRatioResponse>","errorExample":""}]',
      'title' => '获取当前自然月所有终端分布比例',
      'summary' => '调用GetClientsRatio获取当前自然月所有终端分布比例。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetConsumerStatus' => 
    array (
      'methods' => 
      array (
        0 => 'get',
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
          'name' => 'Version',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '版本号。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2017-04-11',
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
              'Comment' => 
              array (
                'description' => '审核意见。',
                'type' => 'string',
                'example' => '审核通过',
              ),
              'Inservice' => 
              array (
                'description' => '是否在服务状态。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'CreatedAt' => 
              array (
                'description' => '创建时间。',
                'type' => 'string',
                'example' => '2018-01-01 10:48:48',
              ),
              'BusinessType' => 
              array (
                'description' => '业务类型。取值：
- **vod**：表示点播。
- **live**：表示直播。
- **download**：表示下载。',
                'type' => 'string',
                'example' => 'vod',
              ),
              'LiveMonitor' => 
              array (
                'description' => '是否支持直播监控。',
                'type' => 'boolean',
                'example' => 'false',
              ),
              'CdnUrlRedirectFlag' => 
              array (
                'description' => '是否支持CDN跳转。',
                'type' => 'boolean',
                'example' => 'false',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '23321CEB-637B-44B3-B39C-B47FD36850F5',
              ),
              'RealtimeMonitor' => 
              array (
                'description' => '是否支持实时监控。',
                'type' => 'boolean',
                'example' => 'false',
              ),
              'Code' => 
              array (
                'description' => '业务码，成功返回0。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'UpdatedAt' => 
              array (
                'description' => '修改时间。',
                'type' => 'string',
                'example' => '2018-01-01 10:48:48',
              ),
              'Audit' => 
              array (
                'description' => '审核状态。取值：
- **1**：表示通过。
- **0**：表示审核中。
- **-1**：表示不通过。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'IntegreatedMode' => 
              array (
                'description' => '集成模式。取值：
- **1**：表示合并计价。
- **2**：表示拆分计价。',
                'type' => 'integer',
                'format' => 'int32',
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
            'errorCode' => 'MissingParameter',
            'errorMessage' => 'You must specify domainName.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Comment\\": \\"审核通过\\",\\n  \\"Inservice\\": true,\\n  \\"CreatedAt\\": \\"2018-01-01 10:48:48\\",\\n  \\"BusinessType\\": \\"vod\\",\\n  \\"LiveMonitor\\": false,\\n  \\"CdnUrlRedirectFlag\\": false,\\n  \\"RequestId\\": \\"23321CEB-637B-44B3-B39C-B47FD36850F5\\",\\n  \\"RealtimeMonitor\\": false,\\n  \\"Code\\": 0,\\n  \\"UpdatedAt\\": \\"2018-01-01 10:48:48\\",\\n  \\"Audit\\": 1,\\n  \\"IntegreatedMode\\": 1\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<GetConsumerStatusResponse>\\r\\n\\t<Inservice>true</Inservice>\\r\\n\\t<RequestId>23321CEB-637B-44B3-B39C-B47FD36850F5</RequestId>\\r\\n\\t<Code>0</Code>\\r\\n\\t<IntegreatedMode>1</IntegreatedMode>\\r\\n\\t<RealtimeMonitor>false</RealtimeMonitor>\\r\\n\\t<LiveMonitor>false</LiveMonitor>\\r\\n\\t<CdnUrlRedirectFlag>false</CdnUrlRedirectFlag>\\r\\n\\t<Audit>1</Audit>\\r\\n\\t<Comment>审核通过</Comment>\\r\\n    <BusinessType>vod</BusinessType>\\r\\n\\t<CreatedAt>2018-01-01 10:48:48</CreatedAt>\\r\\n\\t<UpdatedAt>2018-01-01 10:48:48</UpdatedAt>\\r\\n  </GetConsumerStatusResponse>","errorExample":""}]',
      'title' => '获取客户状态信息',
      'summary' => '调用GetConsumerStatus获取客户状态信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetTokenList' => 
    array (
      'methods' => 
      array (
        0 => 'get',
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
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Version',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '版本号。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2017-04-11',
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
                'description' => '业务码，成功返回0。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '5CED561E-A4E3-4842-8BB6-700BE2AE7784',
              ),
              'TokenList' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Token' => 
                  array (
                    'description' => '返回Token信息列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'PlatformName' => 
                        array (
                          'description' => '终端名称。',
                          'type' => 'string',
                          'example' => 'OTT',
                        ),
                        'Token' => 
                        array (
                          'description' => 'Token值。',
                          'type' => 'string',
                          'example' => '6000170200591aed94fc62fb5e0166b64d199b86d1e0128fd0',
                        ),
                        'PlatformType' => 
                        array (
                          'description' => '终端code。',
                          'type' => 'string',
                          'example' => '02',
                        ),
                        'CreatedAt' => 
                        array (
                          'description' => '创建时间。',
                          'type' => 'string',
                          'example' => '2017-05-16 20:16:20',
                        ),
                        'UpdatedAt' => 
                        array (
                          'description' => '更新时间。',
                          'type' => 'string',
                          'example' => '2017-05-16 20:16:20',
                        ),
                        'ResourceId' => 
                        array (
                          'description' => '终端资源ID。',
                          'type' => 'string',
                          'example' => '6y23ph',
                        ),
                        'ClientId' => 
                        array (
                          'description' => '用户ClientID。',
                          'type' => 'string',
                          'example' => '200000',
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
            'errorCode' => 'MissingParameter',
            'errorMessage' => 'The input parameter domainName that is mandatory for processing this request is not supplied.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 0,\\n  \\"RequestId\\": \\"5CED561E-A4E3-4842-8BB6-700BE2AE7784\\",\\n  \\"TokenList\\": {\\n    \\"Token\\": [\\n      {\\n        \\"PlatformName\\": \\"OTT\\",\\n        \\"Token\\": \\"6000170200591aed94fc62fb5e0166b64d199b86d1e0128fd0\\",\\n        \\"PlatformType\\": \\"02\\",\\n        \\"CreatedAt\\": \\"2017-05-16 20:16:20\\",\\n        \\"UpdatedAt\\": \\"2017-05-16 20:16:20\\",\\n        \\"ResourceId\\": \\"6y23ph\\",\\n        \\"ClientId\\": \\"200000\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetTokenListResponse>    \\r\\n    <RequestId>5CED561E-A4E3-4842-8BB6-700BE2AE7784</RequestId>\\r\\n    <TokenList>\\r\\n        <Token>\\r\\n            <UpdatedAt>2017-05-16 20:16:20</UpdatedAt>\\r\\n            <PlatformType>02</PlatformType>\\r\\n            <ResourceId>1a5wb7s</ResourceId>\\r\\n            <Token>6000170200591aed94fc62fb5e0166b64d199b86d1e0128fd0</Token>\\r\\n            <PlatformName>OTT</PlatformName>\\r\\n            <ClientId>200000</ClientId>\\r\\n            <CreatedAt>2017-05-16 20:16:20</CreatedAt>\\r\\n        </Token>\\r\\n        <Token>\\r\\n            <UpdatedAt>2017-05-16 20:16:20</UpdatedAt>\\r\\n            <PlatformType>00</PlatformType>\\r\\n            <ResourceId>8zs9op</ResourceId>\\r\\n            <Token>6000170000591aed949d0f54a343f1a4233c1e7d1c5ca816be</Token>\\r\\n            <PlatformName>PC</PlatformName>\\r\\n            <ClientId>200000</ClientId>\\r\\n            <CreatedAt>2017-05-16 20:16:20</CreatedAt>\\r\\n        </Token>\\r\\n        <Token>\\r\\n            <UpdatedAt>2017-05-16 20:16:20</UpdatedAt>\\r\\n            <PlatformType>01</PlatformType>\\r\\n            <ResourceId>blocm6</ResourceId>\\r\\n            <Token>6000170100591aed94b45ed32785cc74f5a861ddfcb8b7c841</Token>\\r\\n            <PlatformName>Android</PlatformName>\\r\\n            <ClientId>200000</ClientId>\\r\\n            <CreatedAt>2017-05-16 20:16:20</CreatedAt>\\r\\n        </Token>\\r\\n        <Token>\\r\\n            <UpdatedAt>2017-05-16 20:16:20</UpdatedAt>\\r\\n            <PlatformType>05</PlatformType>\\r\\n            <ResourceId>1i85ijq</ResourceId>\\r\\n            <Token>6000170500591aed949b2e40bf306fdb5c7081349621e412ee</Token>\\r\\n            <PlatformName>iOS</PlatformName>\\r\\n            <ClientId>200000</ClientId>\\r\\n            <CreatedAt>2017-05-16 20:16:20</CreatedAt>\\r\\n        </Token>\\r\\n    </TokenList>\\r\\n    <Code>0</Code>\\r\\n</GetTokenListResponse>    \\r\\n","errorExample":""}]',
      'title' => '获取终端 Token 列表',
      'summary' => '获取终端Token列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'AddConsumer' => 
    array (
      'methods' => 
      array (
        0 => 'get',
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
          'name' => 'Version',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '版本号。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2017-04-11',
          ),
        ),
        1 => 
        array (
          'name' => 'BusinessType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '业务类型。
- **download**：大文件下载。
- **live**：直播流媒体。
- **vod**：视音频点播。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'download',
          ),
        ),
        2 => 
        array (
          'name' => 'Company',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '公司名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'alibaba',
          ),
        ),
        3 => 
        array (
          'name' => 'Site',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '网站网址。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'example.com',
          ),
        ),
        4 => 
        array (
          'name' => 'Requirement',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需求描述。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'yourRequirement',
          ),
        ),
        5 => 
        array (
          'name' => 'Mobile',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '电话号码。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '151016****',
          ),
        ),
        6 => 
        array (
          'name' => 'Ca',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '固定参数，默认为空。',
            'type' => 'string',
            'required' => false,
            'example' => 'Ca',
          ),
        ),
        7 => 
        array (
          'name' => 'Operator',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '操作者。',
            'type' => 'string',
            'required' => false,
            'example' => 'pop',
          ),
        ),
        8 => 
        array (
          'name' => 'Email',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '电子邮箱。',
            'type' => 'string',
            'required' => false,
            'example' => 'username@example.com',
          ),
        ),
        9 => 
        array (
          'name' => 'BandwidthRequirement',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '带宽需求。单位：5Gbps。',
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
              'Code' => 
              array (
                'description' => '业务码，成功返回0。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '3D28E5B7-AA32-4C21-83E8-515947135E0D',
              ),
              'ResourceId' => 
              array (
                'description' => '创建资源ID。',
                'type' => 'string',
                'example' => '76lw75',
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
            'errorCode' => 'MissingParameter',
            'errorMessage' => 'You must specify domainName.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 0,\\n  \\"RequestId\\": \\"3D28E5B7-AA32-4C21-83E8-515947135E0D\\",\\n  \\"ResourceId\\": \\"76lw75\\"\\n}","errorExample":""},{"type":"xml","example":"<AddConsumerResponse>\\r\\n  <ResourceId>76lwxx</ResourceId>\\r\\n  <RequestId>636F1CA7-E59F-4B4F-9C4E-59E75CC01A0F</RequestId>\\r\\n  <Code>0</Code>\\r\\n</AddConsumerResponse>","errorExample":""}]',
      'title' => '申请开通PCDN服务',
      'summary' => '调用AddConsumer申请开通PCDN服务。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetAllIsp' => 
    array (
      'methods' => 
      array (
        0 => 'get',
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
          'name' => 'Version',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '版本号。',
            'type' => 'string',
            'required' => true,
            'example' => '2017-04-11',
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
              'Code' => 
              array (
                'description' => '业务码，成功返回0。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'FB3AA371-2230-4FF8-8E94-952EBF2CF30C',
              ),
              'DataList' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'UsageData' => 
                  array (
                    'description' => '返回的数据。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'NameCn' => 
                        array (
                          'description' => '中文名称。',
                          'type' => 'string',
                          'example' => '长宽',
                        ),
                        'ResourceId' => 
                        array (
                          'description' => '资源ID。',
                          'type' => 'string',
                          'example' => 'tp4xpa',
                        ),
                        'NameEn' => 
                        array (
                          'description' => '英文名称。',
                          'type' => 'string',
                          'example' => 'greatwall',
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
            'errorCode' => 'MissingParameter',
            'errorMessage' => 'You must specify domainName.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 0,\\n  \\"RequestId\\": \\"FB3AA371-2230-4FF8-8E94-952EBF2CF30C\\",\\n  \\"DataList\\": {\\n    \\"UsageData\\": [\\n      {\\n        \\"NameCn\\": \\"长宽\\",\\n        \\"ResourceId\\": \\"tp4xpa\\",\\n        \\"NameEn\\": \\"greatwall\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetAllIspResponse>\\r\\n  <RequestId>7EA16831-74AC-4A2A-8355-19BEEF546663</RequestId>\\r\\n  <DataList>\\r\\n    <UsageData>\\r\\n      <ResourceId>tu9lfh</ResourceId>\\r\\n      <NameEn>unicom</NameEn>\\r\\n      <NameCn>联通</NameCn>\\r\\n    </UsageData>\\r\\n    <UsageData>\\r\\n      <ResourceId>1em7qj4</ResourceId>\\r\\n      <NameEn>telecom</NameEn>\\r\\n      <NameCn>电信</NameCn>\\r\\n    </UsageData>\\r\\n    <UsageData>\\r\\n      <ResourceId>iplnlf</ResourceId>\\r\\n      <NameEn>mobile</NameEn>\\r\\n      <NameCn>移动</NameCn>\\r\\n    </UsageData>\\r\\n    <UsageData>\\r\\n      <ResourceId>1c0vz6g</ResourceId>\\r\\n      <NameEn>cernet</NameEn>\\r\\n      <NameCn>教育网</NameCn>\\r\\n    </UsageData>\\r\\n    <UsageData>\\r\\n      <ResourceId>1stffhs</ResourceId>\\r\\n      <NameEn>dounder</NameEn>\\r\\n      <NameCn>方正宽带</NameCn>\\r\\n    </UsageData>\\r\\n    <UsageData>\\r\\n      <ResourceId>rbgdlh</ResourceId>\\r\\n      <NameEn>tietong</NameEn>\\r\\n      <NameCn>铁通</NameCn>\\r\\n    </UsageData>\\r\\n    <UsageData>\\r\\n      <ResourceId>tp4xpa</ResourceId>\\r\\n      <NameEn>greatwall</NameEn>\\r\\n      <NameCn>长宽</NameCn>\\r\\n    </UsageData>\\r\\n    <UsageData>\\r\\n      <ResourceId>13e8i39</ResourceId>\\r\\n      <NameEn>other</NameEn>\\r\\n      <NameCn>其他</NameCn>\\r\\n    </UsageData>\\r\\n  </DataList>\\r\\n  <Code>0</Code>\\r\\n</GetAllIspResponse>","errorExample":""}]',
      'title' => '获取所有支持的运营商列表',
      'summary' => '调用GetAllIsp获取所有支持的运营商列表。',
    ),
    'GetAllPlatformTypes' => 
    array (
      'methods' => 
      array (
        0 => 'get',
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
          'name' => 'Version',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '版本号。',
            'type' => 'string',
            'required' => true,
            'example' => '2017-04-11',
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
              'Code' => 
              array (
                'description' => '业务码，成功返回0。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'E500E41E-C47B-4F0E-835B-71AFB0EB9773',
              ),
              'DataList' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'UsageData' => 
                  array (
                    'description' => '返回的数据。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Name' => 
                        array (
                          'description' => '终端名称。',
                          'type' => 'string',
                          'example' => 'Flash',
                        ),
                        'Code' => 
                        array (
                          'description' => '终端类型码。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '10',
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
            'errorCode' => 'MissingParameter',
            'errorMessage' => 'You must specify domainName.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 0,\\n  \\"RequestId\\": \\"E500E41E-C47B-4F0E-835B-71AFB0EB9773\\",\\n  \\"DataList\\": {\\n    \\"UsageData\\": [\\n      {\\n        \\"Name\\": \\"Flash\\",\\n        \\"Code\\": 10\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetAllPlatformTypesResponse>\\r\\n  <RequestId>6EDE89AE-1B70-448E-B38F-77CB59F14C0D</RequestId>\\r\\n  <DataList>\\r\\n    <UsageData>\\r\\n      <Name>OTT</Name>\\r\\n      <Code>02</Code>\\r\\n    </UsageData>\\r\\n    <UsageData>\\r\\n      <Name>PC</Name>\\r\\n      <Code>00</Code>\\r\\n    </UsageData>\\r\\n    <UsageData>\\r\\n      <Name>Android</Name>\\r\\n      <Code>01</Code>\\r\\n    </UsageData>\\r\\n    <UsageData>\\r\\n      <Name>iOS</Name>\\r\\n      <Code>05</Code>\\r\\n    </UsageData>\\r\\n    <UsageData>\\r\\n      <Name>Flash</Name>\\r\\n      <Code>10</Code>\\r\\n    </UsageData>\\r\\n  </DataList>\\r\\n  <Code>0</Code>\\r\\n</GetAllPlatformTypesResponse>","errorExample":""}]',
      'title' => '获取所有支持的终端类型列表',
      'summary' => '调用GetAllPlatformTypes获取所有支持的终端类型列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetAllRegions' => 
    array (
      'methods' => 
      array (
        0 => 'get',
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
          'name' => 'Version',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '版本号。',
            'type' => 'string',
            'required' => true,
            'example' => '2017-04-11',
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
              'Code' => 
              array (
                'description' => '业务码，成功返回0。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'RequestId' => 
              array (
                'description' => '资源ID。',
                'type' => 'string',
                'example' => 'FB3AA371-2230-4FF8-8E94-952EBF2CF30C',
              ),
              'DataList' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'UsageData' => 
                  array (
                    'description' => '返回的数据。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Name' => 
                        array (
                          'description' => '中文名称。',
                          'type' => 'string',
                          'example' => '北京',
                        ),
                        'Code' => 
                        array (
                          'description' => '地区编号。',
                          'type' => 'string',
                          'example' => '11',
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
            'errorCode' => 'MissingParameter',
            'errorMessage' => 'You must specify domainName.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 0,\\n  \\"RequestId\\": \\"FB3AA371-2230-4FF8-8E94-952EBF2CF30C\\",\\n  \\"DataList\\": {\\n    \\"UsageData\\": [\\n      {\\n        \\"Name\\": \\"北京\\",\\n        \\"Code\\": \\"11\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetAllIRegionsResponse>\\r\\n  <RequestId>7EA16831-74AC-4A2A-8355-19BEEF546663</RequestId>\\r\\n  <DataList>\\r\\n    <UsageData>\\r\\n      <Code>11</Code>\\r\\n      <Name>北京</Name>\\r\\n    </UsageData>\\r\\n    <UsageData>\\r\\n      <Code>12</Code>\\r\\n      <Name>天津</Name>\\r\\n    </UsageData>\\r\\n    <UsageData>\\r\\n      <Code>13</Code>\\r\\n      <Name>河北</Name>\\r\\n    </UsageData>\\r\\n    <UsageData>\\r\\n      <Code>14</Code>\\r\\n      <Name>山西</Name>\\r\\n    </UsageData>\\r\\n  </DataList>\\r\\n  <Code>0</Code>\\r\\n</GetAllIRegionsResponse>","errorExample":""}]',
      'title' => '获取所有支持的地区列表',
      'summary' => '调用GetAllRegions获取所有支持的地区列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetAllMarkets' => 
    array (
      'methods' => 
      array (
        0 => 'get',
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
          'name' => 'Version',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '版本号。',
            'type' => 'string',
            'required' => true,
            'example' => '2017-04-11',
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
              'Code' => 
              array (
                'description' => '业务码，成功返回0。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'BFCDB187-ED92-430A-8C8A-A96B63AD89F0',
              ),
              'DataList' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'UsageData' => 
                  array (
                    'description' => '返回的数据。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Code' => 
                        array (
                          'description' => '平台类型码。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '2',
                        ),
                        'MarketCode' => 
                        array (
                          'description' => '市场类型码。',
                          'type' => 'string',
                          'example' => 'b1f2523b184b66ab',
                        ),
                        'MarketName' => 
                        array (
                          'description' => '市场名称。',
                          'type' => 'string',
                          'example' => 'Player SDK for 阿里少儿',
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
            'errorCode' => 'MissingParameter',
            'errorMessage' => 'You must specify domainName.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 0,\\n  \\"RequestId\\": \\"BFCDB187-ED92-430A-8C8A-A96B63AD89F0\\",\\n  \\"DataList\\": {\\n    \\"UsageData\\": [\\n      {\\n        \\"Code\\": 2,\\n        \\"MarketCode\\": \\"b1f2523b184b66ab\\",\\n        \\"MarketName\\": \\"Player SDK for 阿里少儿\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetAllMarketsResponse>\\r\\n  <RequestId>607AB575-A09C-43DC-8204-943C54991A58</RequestId>\\r\\n  <DataList>\\r\\n    <UsageData>\\r\\n      <MarketCode>1</MarketCode>\\r\\n      <MarketName>1</MarketName>\\r\\n      <Code>01</Code>\\r\\n    </UsageData>\\r\\n    <UsageData>\\r\\n      <MarketCode>b1f2523b184b66ab</MarketCode>\\r\\n      <MarketName>Player SDK for 阿里少儿</MarketName>\\r\\n      <Code>02</Code>\\r\\n    </UsageData>\\r\\n  </DataList>\\r\\n  <Code>0</Code>\\r\\n</GetAllMarketsResponse>","errorExample":""}]',
      'title' => '获取所有市场列表',
      'summary' => '调用GetAllMarkets获取当前用户的所有市场列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetBalanceBandwidthData' => 
    array (
      'methods' => 
      array (
        0 => 'get',
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
          'name' => 'Version',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '版本号。',
            'type' => 'string',
            'required' => true,
            'example' => '2017-04-11',
            'docRequired' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'DataInterval',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询数据的时间粒度，支持300、3600、14400、28800和86400秒。

不传和传的值不支持时，使用默认值300秒。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '300',
          ),
        ),
        2 => 
        array (
          'name' => 'ResourceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前账单的资源ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'xxx',
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
              'Code' => 
              array (
                'description' => '业务码，成功返回0。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '20963AEE-E3A5-461F-8809-C494558373AB',
              ),
              'Labels' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Label' => 
                  array (
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '标签，描述数据类型。',
                      'type' => 'string',
                      'example' => '带宽',
                    ),
                  ),
                ),
              ),
              'DataList' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'UsageData' => 
                  array (
                    'description' => '返回的信息列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Date' => 
                        array (
                          'description' => '数据的时间片起始时刻。',
                          'type' => 'string',
                          'example' => '2017-05-01 00:00:00',
                        ),
                        'Values' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Values' => 
                            array (
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '带宽数据，bit/second。',
                                'type' => 'string',
                                'example' => '185187502281',
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
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'MissingParameter',
            'errorMessage' => 'You must specify domainName.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 0,\\n  \\"RequestId\\": \\"20963AEE-E3A5-461F-8809-C494558373AB\\",\\n  \\"Labels\\": {\\n    \\"Label\\": [\\n      \\"带宽\\"\\n    ]\\n  },\\n  \\"DataList\\": {\\n    \\"UsageData\\": [\\n      {\\n        \\"Date\\": \\"2017-05-01 00:00:00\\",\\n        \\"Values\\": {\\n          \\"Values\\": [\\n            \\"185187502281\\"\\n          ]\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetBalanceBandwidthDataResponse>\\r\\n  <Labels>\\r\\n    <Label>带宽</Label>\\r\\n    <Label>带宽峰值</Label>\\r\\n    <Label>日峰值带宽</Label>\\r\\n  </Labels>\\r\\n  <RequestId>5923BFA8-ACC2-4949-A0AB-46B66FF45BDD</RequestId>\\r\\n  <DataList>\\r\\n    <UsageData>\\r\\n      <Values>\\r\\n        <Values>185187502281</Values>\\r\\n        <Values>347993190084</Values>\\r\\n        <Values>0</Values>\\r\\n      </Values>\\r\\n      <Date>2017-05-01 00:00:00</Date>\\r\\n    </UsageData>\\r\\n    <UsageData>\\r\\n      <Values>\\r\\n        <Values>177339955340</Values>\\r\\n        <Values>347993190084</Values>\\r\\n        <Values>0</Values>\\r\\n      </Values>\\r\\n      <Date>2017-05-01 00:05:00</Date>\\r\\n    </UsageData>\\r\\n  </DataList>\\r\\n  <Code>0</Code>\\r\\n</GetBalanceBandwidthDataResponse>","errorExample":""}]',
      'title' => '获取用户已出账单消费周期',
      'summary' => '获取用户已出账单的消费周期、消费时间、计量峰值数值、业务类型等信息。',
      'description' => '当用户有多于1个业务类型（live、vod、download）时，不同业务单独输出消费时间和计量数据。',
    ),
    'GetBalanceTrafficData' => 
    array (
      'methods' => 
      array (
        0 => 'get',
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
          'name' => 'Version',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '版本号。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2017-04-11',
          ),
        ),
        1 => 
        array (
          'name' => 'DataInterval',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询数据的时间粒度，支持**300**、**3600**、**14400**、**28800**和**86400**秒。

> 当不传该参数和所传的值不支持时，使用默认值**300**秒。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '300',
          ),
        ),
        2 => 
        array (
          'name' => 'ResourceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前账单的资源ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'abcde123',
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
                'description' => '业务码，成功返回0。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '20963AEE-E3A5-461F-8809-C494558373AB',
              ),
              'Labels' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Label' => 
                  array (
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '标签，描述数据类型。',
                      'type' => 'string',
                      'example' => '流量',
                    ),
                  ),
                ),
              ),
              'DataList' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'UsageData' => 
                  array (
                    'description' => '返回的信息列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Date' => 
                        array (
                          'description' => '数据的时间片起始时刻。',
                          'type' => 'string',
                          'example' => '2017-05-01 00:00:00',
                        ),
                        'Values' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Values' => 
                            array (
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '流量数据，单位：byte。',
                                'type' => 'string',
                                'example' => '177339955340',
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
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'MissingParameter',
            'errorMessage' => 'You must specify domainName.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 0,\\n  \\"RequestId\\": \\"20963AEE-E3A5-461F-8809-C494558373AB\\",\\n  \\"Labels\\": {\\n    \\"Label\\": [\\n      \\"流量\\"\\n    ]\\n  },\\n  \\"DataList\\": {\\n    \\"UsageData\\": [\\n      {\\n        \\"Date\\": \\"2017-05-01 00:00:00\\",\\n        \\"Values\\": {\\n          \\"Values\\": [\\n            \\"177339955340\\"\\n          ]\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetBalanceTrafficDataResponse>\\n<Labels>\\n    <Label>流量</Label>\\n</Labels>\\n<RequestId>20963AEE-E3A5-461F-8809-C494558373AB</RequestId>\\n<DataList>\\n    <UsageData>\\n        <Values>\\n            <Values>185187502281</Values>\\n        </Values>\\n        <Date>2017-05-01 00:00:00</Date>\\n    </UsageData>\\n    <UsageData>\\n        <Values>\\n            <Values>177339955340</Values>\\n        </Values>\\n        <Date>2017-05-01 00:05:00</Date>\\n    </UsageData>\\n</DataList>\\n<Code>0</Code>\\n</GetBalanceTrafficDataResponse>","errorExample":""}]',
      'title' => '获取账单带宽详情',
      'summary' => '调用GetBalanceTrafficData获取账单带宽详情。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetFeeHistory' => 
    array (
      'methods' => 
      array (
        0 => 'get',
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
          'name' => 'Version',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '版本号。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2017-04-11',
          ),
        ),
        1 => 
        array (
          'name' => 'Page',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前页码。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页的记录条数。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '10',
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
                'description' => '业务码，成功返回0。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '5CED561E-A4E3-4842-8BB6-700BE2AE7784',
              ),
              'Pager' => 
              array (
                'description' => '分页信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'PageSize' => 
                  array (
                    'description' => '每页的记录条数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'Total' => 
                  array (
                    'description' => '总记录的条数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '8',
                  ),
                  'Page' => 
                  array (
                    'description' => '当前页码。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                ),
              ),
              'FeeList' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Fee' => 
                  array (
                    'description' => '返回的计费信息列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'EndDate' => 
                        array (
                          'description' => '计费周期结束时间。',
                          'type' => 'string',
                          'example' => '2017-05-05 23:59:59',
                        ),
                        'TimeSpan' => 
                        array (
                          'description' => '计费周期。',
                          'type' => 'string',
                          'example' => '2017-05-05 00:00:00 至 2017-05-05 23:59:59',
                        ),
                        'Date' => 
                        array (
                          'description' => '出账时间。',
                          'type' => 'string',
                          'example' => '2017-05-05',
                        ),
                        'StartDate' => 
                        array (
                          'description' => '计费周期开始时间。',
                          'type' => 'string',
                          'example' => '2017-05-05 00:00:00',
                        ),
                        'LevelThreeTraffic' => 
                        array (
                          'description' => '流量。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '12345678',
                        ),
                        'Mode' => 
                        array (
                          'description' => '当前计费方式描述。',
                          'type' => 'string',
                          'example' => '日峰值带宽',
                        ),
                        'TotalTraffic' => 
                        array (
                          'description' => '总流量。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '12345678',
                        ),
                        'BusinessType' => 
                        array (
                          'description' => '业务类型。',
                          'type' => 'string',
                          'example' => 'live',
                        ),
                        'LevelTwoTraffic' => 
                        array (
                          'description' => '流量。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '12345678',
                        ),
                        'LevelThreeBandwidth' => 
                        array (
                          'description' => '带宽。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '999000',
                        ),
                        'FlowOut' => 
                        array (
                          'description' => '计费方式。取值：
- **0**：日峰值带宽。
- **95**：月95峰值带宽。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'LevelTwoBandwidth' => 
                        array (
                          'description' => '带宽。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '999000',
                        ),
                        'ResourceId' => 
                        array (
                          'description' => '资源ID。',
                          'type' => 'string',
                          'example' => '6aphce',
                        ),
                        'TotalBandwidth' => 
                        array (
                          'description' => '总带宽。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '89999000',
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
            'errorCode' => 'MissingParameter',
            'errorMessage' => 'You must specify domainName.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 0,\\n  \\"RequestId\\": \\"5CED561E-A4E3-4842-8BB6-700BE2AE7784\\",\\n  \\"Pager\\": {\\n    \\"PageSize\\": 10,\\n    \\"Total\\": 8,\\n    \\"Page\\": 1\\n  },\\n  \\"FeeList\\": {\\n    \\"Fee\\": [\\n      {\\n        \\"EndDate\\": \\"2017-05-05 23:59:59\\",\\n        \\"TimeSpan\\": \\"2017-05-05 00:00:00 至 2017-05-05 23:59:59\\",\\n        \\"Date\\": \\"2017-05-05\\",\\n        \\"StartDate\\": \\"2017-05-05 00:00:00\\",\\n        \\"LevelThreeTraffic\\": 12345678,\\n        \\"Mode\\": \\"日峰值带宽\\",\\n        \\"TotalTraffic\\": 12345678,\\n        \\"BusinessType\\": \\"live\\",\\n        \\"LevelTwoTraffic\\": 12345678,\\n        \\"LevelThreeBandwidth\\": 999000,\\n        \\"FlowOut\\": 0,\\n        \\"LevelTwoBandwidth\\": 999000,\\n        \\"ResourceId\\": \\"6aphce\\",\\n        \\"TotalBandwidth\\": 89999000\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetFeeHistoryResponse>\\r\\n  <FeeList>\\r\\n    <Fee>\\r\\n      <EndDate>2017-05-05 23:59:59</EndDate>\\r\\n      <StartDate>2017-05-05 00:00:00</StartDate>\\r\\n      <TotalBandwidth>123456789999000</TotalBandwidth>\\r\\n      <Date>2017-05-05</Date>\\r\\n      <FlowOut>0</FlowOut>\\r\\n      <BusinessType>vod</BusinessType>\\r\\n      <BillingType>1</BillingType>\\r\\n      <TimeSpan>2017-05-05 00:00:00 至 2017-05-05 23:59:59</TimeSpan>\\r\\n      <Mode>日峰值带宽</Mode>\\r\\n    </Fee>\\r\\n    <Fee>\\r\\n      <EndDate>2017-05-04 23:59:59</EndDate>\\r\\n      <StartDate>2017-05-04 00:00:00</StartDate>\\r\\n      <TotalBandwidth>123456789999000</TotalBandwidth>\\r\\n      <Date>2017-05-04</Date>\\r\\n      <FlowOut>0</FlowOut>\\r\\n      <BusinessType>vod</BusinessType>\\r\\n      <BillingType>1</BillingType>\\r\\n      <TimeSpan>2017-05-04 00:00:00 至 2017-05-04 23:59:59</TimeSpan>\\r\\n      <Mode>日峰值带宽</Mode>\\r\\n    </Fee>\\r\\n  </FeeList>\\r\\n  <Pager>\\r\\n    <PageSize>10</PageSize>\\r\\n    <Page>1</Page>\\r\\n    <Total>8</Total>\\r\\n  </Pager>\\r\\n  <Code>0</Code>\\r\\n</GetFeeHistoryResponse>","errorExample":""}]',
      'title' => '获取计费数据历史记录',
      'summary' => '调用GetFeeHistory获取计费数据历史记录。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetCurrentMode' => 
    array (
      'methods' => 
      array (
        0 => 'get',
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
          'name' => 'Version',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '版本号。',
            'type' => 'string',
            'required' => true,
            'example' => '2017-04-11',
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
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'F84A4387-33B0-4F2D-87E4-BC3465BF568E',
              ),
              'EstimateBandwidth' => 
              array (
                'description' => '预估月95带宽（bps），仅在ModeCode=95时返回。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '6219331',
              ),
              'PaddingModeCode' => 
              array (
                'description' => '待生效计费方式。

- **0**：日峰值带宽。

- **1**：日流量。

- **95**：月95峰值带宽。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Code' => 
              array (
                'description' => '业务码，成功返回0。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'ModeCode' => 
              array (
                'description' => '当前计费方式。

- **0**：日峰值带宽。

- **1**：日流量。

- **95**：月95峰值带宽。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'EffectiveAt' => 
              array (
                'description' => '生效时间戳，当服务变配，且变配未生效时返回。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1540345299',
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
            'errorCode' => 'MissingParameter',
            'errorMessage' => 'You must specify domainName.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"F84A4387-33B0-4F2D-87E4-BC3465BF568E\\",\\n  \\"EstimateBandwidth\\": 6219331,\\n  \\"PaddingModeCode\\": 0,\\n  \\"Code\\": 0,\\n  \\"ModeCode\\": 0,\\n  \\"EffectiveAt\\": 1540345299\\n}","errorExample":""},{"type":"xml","example":"<GetCurrentModeResponse>\\n  <RequestId>F84A4387-33B0-4F2D-87E4-BC3465BF568E</RequestId>\\n  <ModeCode>95</ModeCode>\\n  <EstimateBandwidth>6219331</EstimateBandwidth>\\n  <Code>0</Code>\\n  <PaddingModeCode>0</PaddingModeCode>\\n  <EffectiveAt>1540345299</EffectiveAt>\\n</GetCurrentModeResponse>\\n","errorExample":""}]',
      'title' => '查询当前计费方式',
      'summary' => '调用GetCurrentMode查询当前计费方式。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetExpenseSummary' => 
    array (
      'methods' => 
      array (
        0 => 'get',
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Version',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '版本号。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2017-04-11',
          ),
        ),
        1 => 
        array (
          'name' => 'StartDate',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开始时间。',
            'type' => 'string',
            'required' => false,
            'example' => '2017-05-01',
          ),
        ),
        2 => 
        array (
          'name' => 'EndDate',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '结束时间。',
            'type' => 'string',
            'required' => false,
            'example' => '2017-05-10',
          ),
        ),
        3 => 
        array (
          'name' => 'Domain',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '搜索传入的内容，如果为空显示全部。',
            'type' => 'string',
            'required' => false,
            'example' => 'all',
          ),
        ),
        4 => 
        array (
          'name' => 'Region',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域代码，多个用竖线（|）分隔，查询全部传all。

代码查询请参见[通用字段参考](~~151572~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '00',
          ),
        ),
        5 => 
        array (
          'name' => 'IspName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '运营商代码，多个用竖线（|）分隔，查询全部传all。

代码查询请参见[通用字段参考](~~151572~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'all',
          ),
        ),
        6 => 
        array (
          'name' => 'PlatformType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '终端代码，多个用竖线（|）分隔，查询全部传all。

代码查询请参见[通用字段参考](~~151572~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'all',
          ),
        ),
        7 => 
        array (
          'name' => 'BusinessType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '业务类型代码，多个用竖线（|）分隔，查询全部传all。

代码查询请参见[通用字段参考](~~151572~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'all',
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
                'description' => '业务码，成功返回0。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '450CFF96-32FE-4229-85CA-EC588DAB0888',
              ),
              'Data' => 
              array (
                'description' => '数据信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'ForecastFluency' => 
                  array (
                    'description' => '参考流畅率。',
                    'type' => 'number',
                    'format' => 'float',
                    'example' => '98',
                  ),
                  'TopBandwidth' => 
                  array (
                    'description' => '总峰值带宽。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '414344',
                  ),
                  'TotalTraffic' => 
                  array (
                    'description' => '总流量。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '12419172',
                  ),
                  'CoverRate' => 
                  array (
                    'description' => '覆盖率。',
                    'type' => 'number',
                    'format' => 'float',
                    'example' => '0',
                  ),
                  'ShareRate' => 
                  array (
                    'description' => '分享率。',
                    'type' => 'number',
                    'format' => 'float',
                    'example' => '0',
                  ),
                  'TotalUV' => 
                  array (
                    'description' => '总访问人数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '21723058',
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
            'errorCode' => 'MissingParameter',
            'errorMessage' => 'The input parameter domainName that is mandatory for processing this request is not supplied.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 0,\\n  \\"RequestId\\": \\"450CFF96-32FE-4229-85CA-EC588DAB0888\\",\\n  \\"Data\\": {\\n    \\"ForecastFluency\\": 98,\\n    \\"TopBandwidth\\": 414344,\\n    \\"TotalTraffic\\": 12419172,\\n    \\"CoverRate\\": 0,\\n    \\"ShareRate\\": 0,\\n    \\"TotalUV\\": 21723058\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetExpenseSummaryResponse>\\r\\n  <Data>\\r\\n    <CoverRate>0.0</CoverRate>\\r\\n    <ForecastFluency>98.03</ForecastFluency>\\r\\n    <TotalTraffic>12419172</TotalTraffic>\\r\\n    <TopBandwidth>414344</TopBandwidth>\\r\\n    <TotalUV>21723058</TotalUV>\\r\\n  </Data>\\r\\n  <RequestId>807F6545-56E7-4CB0-B178-722E7851C0B5</RequestId>\\r\\n  <Code>0</Code>\\r\\n</GetExpenseSummaryResponse>","errorExample":""}]',
      'title' => '获取消费数据概况',
      'summary' => '调用GetExpenseSummary获取消费数据概况。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetTrafficByRegion' => 
    array (
      'methods' => 
      array (
        0 => 'get',
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
          'name' => 'Version',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '版本号。',
            'type' => 'string',
            'required' => true,
            'example' => '2017-04-11',
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
              'Code' => 
              array (
                'description' => '业务码，成功返回0。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '26CF81F8-18F5-4F93-A1D6-33AAA592CF56',
              ),
              'TrafficDataList' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'TrafficData' => 
                  array (
                    'description' => '数据列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Name' => 
                        array (
                          'description' => '地区名称。',
                          'type' => 'string',
                          'example' => '北京',
                        ),
                        'Traffic' => 
                        array (
                          'description' => '流量数据。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '448096774168859',
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
            'errorCode' => 'MissingParameter',
            'errorMessage' => 'You must specify domainName.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 0,\\n  \\"RequestId\\": \\"26CF81F8-18F5-4F93-A1D6-33AAA592CF56\\",\\n  \\"TrafficDataList\\": {\\n    \\"TrafficData\\": [\\n      {\\n        \\"Name\\": \\"北京\\",\\n        \\"Traffic\\": 448096774168859\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetTrafficByRegionResponse>\\r\\n  <TrafficDataList>\\r\\n    <TrafficData>\\r\\n      <Name>北京</Name>\\r\\n      <Traffic>448096774168859</Traffic>\\r\\n    </TrafficData>\\r\\n    <TrafficData>\\r\\n      <Name>天津</Name>\\r\\n      <Traffic>149046039126012</Traffic>\\r\\n    </TrafficData>\\r\\n    <TrafficData>\\r\\n      <Name>河北</Name>\\r\\n      <Traffic>311633084563883</Traffic>\\r\\n    </TrafficData>\\r\\n    <TrafficData>\\r\\n      <Name>山西</Name>\\r\\n      <Traffic>111913357608613</Traffic>\\r\\n    </TrafficData>\\r\\n    <TrafficData>\\r\\n      <Name>内蒙古</Name>\\r\\n      <Traffic>121310599233230</Traffic>\\r\\n    </TrafficData>\\r\\n    <TrafficData>\\r\\n      <Name>辽宁</Name>\\r\\n      <Traffic>356807056403655</Traffic>\\r\\n    </TrafficData>\\r\\n    <TrafficData>\\r\\n      <Name>吉林</Name>\\r\\n      <Traffic>151925345175750</Traffic>\\r\\n    </TrafficData>\\r\\n    <TrafficData>\\r\\n      <Name>黑龙江</Name>\\r\\n      <Traffic>141110412597382</Traffic>\\r\\n    </TrafficData>\\r\\n    <TrafficData>\\r\\n      <Name>上海</Name>\\r\\n      <Traffic>532977262961283</Traffic>\\r\\n    </TrafficData>\\r\\n    <TrafficData>\\r\\n      <Name>江苏</Name>\\r\\n      <Traffic>1253060710817965</Traffic>\\r\\n    </TrafficData>\\r\\n    <TrafficData>\\r\\n      <Name>浙江</Name>\\r\\n      <Traffic>1257256406683929</Traffic>\\r\\n    </TrafficData>\\r\\n    <TrafficData>\\r\\n      <Name>安徽</Name>\\r\\n      <Traffic>334797729767759</Traffic>\\r\\n    </TrafficData>\\r\\n    <TrafficData>\\r\\n      <Name>福建</Name>\\r\\n      <Traffic>566841917282337</Traffic>\\r\\n    </TrafficData>\\r\\n    <TrafficData>\\r\\n      <Name>江西</Name>\\r\\n      <Traffic>272442583002765</Traffic>\\r\\n    </TrafficData>\\r\\n    <TrafficData>\\r\\n      <Name>山东</Name>\\r\\n      <Traffic>821863346319563</Traffic>\\r\\n    </TrafficData>\\r\\n    <TrafficData>\\r\\n      <Name>河南</Name>\\r\\n      <Traffic>379985564854609</Traffic>\\r\\n    </TrafficData>\\r\\n    <TrafficData>\\r\\n      <Name>湖北</Name>\\r\\n      <Traffic>456205987172989</Traffic>\\r\\n    </TrafficData>\\r\\n    <TrafficData>\\r\\n      <Name>湖南</Name>\\r\\n      <Traffic>328102608958956</Traffic>\\r\\n    </TrafficData>\\r\\n    <TrafficData>\\r\\n      <Name>广东</Name>\\r\\n      <Traffic>2191515252948832</Traffic>\\r\\n    </TrafficData>\\r\\n    <TrafficData>\\r\\n      <Name>广西</Name>\\r\\n      <Traffic>445799095250735</Traffic>\\r\\n    </TrafficData>\\r\\n    <TrafficData>\\r\\n      <Name>海南</Name>\\r\\n      <Traffic>66774008061768</Traffic>\\r\\n    </TrafficData>\\r\\n    <TrafficData>\\r\\n      <Name>重庆</Name>\\r\\n      <Traffic>193123106090999</Traffic>\\r\\n    </TrafficData>\\r\\n    <TrafficData>\\r\\n      <Name>四川</Name>\\r\\n      <Traffic>498112097201725</Traffic>\\r\\n    </TrafficData>\\r\\n    <TrafficData>\\r\\n      <Name>贵州</Name>\\r\\n      <Traffic>100434438057521</Traffic>\\r\\n    </TrafficData>\\r\\n    <TrafficData>\\r\\n      <Name>云南</Name>\\r\\n      <Traffic>303816561733595</Traffic>\\r\\n    </TrafficData>\\r\\n    <TrafficData>\\r\\n      <Name>西藏</Name>\\r\\n      <Traffic>18238481216618</Traffic>\\r\\n    </TrafficData>\\r\\n    <TrafficData>\\r\\n      <Name>陕西</Name>\\r\\n      <Traffic>231890693493741</Traffic>\\r\\n    </TrafficData>\\r\\n    <TrafficData>\\r\\n      <Name>甘肃</Name>\\r\\n      <Traffic>110097638533238</Traffic>\\r\\n    </TrafficData>\\r\\n  </TrafficDataList>\\r\\n  <RequestId>5F949A3F-850B-4139-B666-638F563BE843</RequestId>\\r\\n  <Code>0</Code>\\r\\n</GetTrafficByRegionResponse>","errorExample":""}]',
      'title' => '获取用户当前自然月内每个地区的流量数据',
      'summary' => '调用GetTrafficByRegion获取用户当前自然月内每个地区的流量数据。',
    ),
    'GetTrafficData' => 
    array (
      'methods' => 
      array (
        0 => 'get',
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
          'name' => 'Version',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '版本号。',
            'type' => 'string',
            'required' => true,
            'example' => '2017-04-11',
            'docRequired' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'Domain',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名，多个用竖线（|）分割，不传该参数查询全部。',
            'type' => 'string',
            'required' => false,
            'example' => 'all',
          ),
        ),
        2 => 
        array (
          'name' => 'Region',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地区，多个用竖线（|）分隔，全部填all。
',
            'type' => 'string',
            'required' => true,
            'example' => 'all',
            'docRequired' => true,
          ),
        ),
        3 => 
        array (
          'name' => 'IspName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '运营商，多个用竖线（|）分隔，全部填all。',
            'type' => 'string',
            'required' => true,
            'example' => 'all',
            'docRequired' => true,
          ),
        ),
        4 => 
        array (
          'name' => 'PlatformType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '终端，多个用竖线（|）分隔，全部填all。
',
            'type' => 'string',
            'required' => true,
            'example' => 'all',
            'docRequired' => true,
          ),
        ),
        5 => 
        array (
          'name' => 'BusinessType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '业务类型，多个用竖线（|）分隔，全部填all。',
            'type' => 'string',
            'required' => true,
            'example' => 'all',
            'docRequired' => true,
          ),
        ),
        6 => 
        array (
          'name' => 'StartDate',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开始时间。',
            'type' => 'string',
            'required' => true,
            'example' => '2017-05-01',
            'docRequired' => true,
          ),
        ),
        7 => 
        array (
          'name' => 'EndDate',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '结束时间。',
            'type' => 'string',
            'required' => true,
            'example' => '2017-05-10',
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
              'Code' => 
              array (
                'description' => '业务码，成功返回0。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'ECD5669E-DD42-4A1A-9D6D-09740F50CD92',
              ),
              'Labels' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Label' => 
                  array (
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '标签，描述数据类型。',
                      'type' => 'string',
                      'example' => '流量',
                    ),
                  ),
                ),
              ),
              'DataList' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'UsageData' => 
                  array (
                    'description' => '返回的信息列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Date' => 
                        array (
                          'description' => '数据的时间片起始时刻。',
                          'type' => 'string',
                          'example' => '2017-05-01 00:00:00',
                        ),
                        'Values' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Values' => 
                            array (
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '带宽数据，单位：bit/second。',
                                'type' => 'string',
                                'example' => '171416772471986',
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
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'MissingParameter',
            'errorMessage' => 'You must specify domainName.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 0,\\n  \\"RequestId\\": \\"ECD5669E-DD42-4A1A-9D6D-09740F50CD92\\",\\n  \\"Labels\\": {\\n    \\"Label\\": [\\n      \\"流量\\"\\n    ]\\n  },\\n  \\"DataList\\": {\\n    \\"UsageData\\": [\\n      {\\n        \\"Date\\": \\"2017-05-01 00:00:00\\",\\n        \\"Values\\": {\\n          \\"Values\\": [\\n            \\"171416772471986\\"\\n          ]\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetTrafficDataResponse>\\r\\n  <Labels>\\r\\n    <Label>流量</Label>\\r\\n  </Labels>\\r\\n  <RequestId>38F88DFE-499C-4A6F-A42F-251C0825C788</RequestId>\\r\\n  <DataList>\\r\\n    <UsageData>\\r\\n      <Values>\\r\\n        <Values>171416772471986</Values>\\r\\n      </Values>\\r\\n      <Date>2017-05-01 00:00:00</Date>\\r\\n    </UsageData>\\r\\n    <UsageData>\\r\\n      <Values>\\r\\n        <Values>66244974273637</Values>\\r\\n      </Values>\\r\\n      <Date>2017-05-01 04:00:00</Date>\\r\\n    </UsageData>\\r\\n  </DataList>\\r\\n  <Code>0</Code>\\r\\n</GetTrafficDataResponse>","errorExample":""}]',
      'title' => '获取网络流量监控数据',
      'summary' => '获取加速域名的网络流量监控数据，单位：byte。',
      'description' => '**调用该接口前，请您注意：**

- 不指定StartTime和EndTime时，默认读取过去24小时的数据；指定StartTime和EndTime时，按指定的起止时间查询。

- 支持批量域名查询，多个域名用竖线（|）分隔。

- 最多可获取最近90天的数据。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetFluencyData' => 
    array (
      'methods' => 
      array (
        0 => 'get',
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
          'name' => 'Version',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '版本号。',
            'type' => 'string',
            'required' => true,
            'example' => '2017-04-11',
            'docRequired' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'Domain',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待查询的域名，多个用竖线（|）分割，不传查询全部。',
            'type' => 'string',
            'required' => false,
            'example' => 'all',
          ),
        ),
        2 => 
        array (
          'name' => 'Region',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地区，竖线分隔，全部填all。',
            'type' => 'string',
            'required' => true,
            'example' => 'all',
            'docRequired' => true,
          ),
        ),
        3 => 
        array (
          'name' => 'IspName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '运营商，竖线分隔，全部填all。',
            'type' => 'string',
            'required' => true,
            'example' => 'all',
            'docRequired' => true,
          ),
        ),
        4 => 
        array (
          'name' => 'PlatformType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '终端，竖线分隔，全部填all。',
            'type' => 'string',
            'required' => true,
            'example' => 'all',
            'docRequired' => true,
          ),
        ),
        5 => 
        array (
          'name' => 'BusinessType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '业务类型，多个用竖线（|）分隔，全部填all。
',
            'type' => 'string',
            'required' => true,
            'example' => 'all',
            'docRequired' => true,
          ),
        ),
        6 => 
        array (
          'name' => 'StartDate',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开始时间。',
            'type' => 'string',
            'required' => true,
            'example' => '2017-05-01',
            'docRequired' => true,
          ),
        ),
        7 => 
        array (
          'name' => 'EndDate',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '结束时间。',
            'type' => 'string',
            'required' => true,
            'example' => '2017-05-10',
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
              'Code' => 
              array (
                'description' => '业务码，成功返回0。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '05870F21-0700-4770-A19C-13CA610884B7',
              ),
              'Labels' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Label' => 
                  array (
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '标签，描述数据类型。',
                      'type' => 'string',
                      'example' => '参考流畅率',
                    ),
                  ),
                ),
              ),
              'DataList' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'UsageData' => 
                  array (
                    'description' => '返回的信息列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Date' => 
                        array (
                          'description' => '数据的时间片起始时刻。',
                          'type' => 'string',
                          'example' => '2017-05-06 00:00:00',
                        ),
                        'Values' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Values' => 
                            array (
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '带宽数据，单位：bit/second。
',
                                'type' => 'string',
                                'example' => '98.47',
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
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'MissingParameter',
            'errorMessage' => 'You must specify domainName.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 0,\\n  \\"RequestId\\": \\"05870F21-0700-4770-A19C-13CA610884B7\\",\\n  \\"Labels\\": {\\n    \\"Label\\": [\\n      \\"参考流畅率\\"\\n    ]\\n  },\\n  \\"DataList\\": {\\n    \\"UsageData\\": [\\n      {\\n        \\"Date\\": \\"2017-05-06 00:00:00\\",\\n        \\"Values\\": {\\n          \\"Values\\": [\\n            \\"98.47\\"\\n          ]\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetFluencyDataResponse>\\r\\n  <Labels>\\r\\n    <Label>参考流畅率</Label>\\r\\n  </Labels>\\r\\n  <RequestId>B0C0A171-3CE8-4EBC-8956-3F227D86AB2B</RequestId>\\r\\n  <DataList>\\r\\n    <UsageData>\\r\\n      <Values>\\r\\n        <Values>98.47</Values>\\r\\n      </Values>\\r\\n      <Date>2017-05-06 00:00:00</Date>\\r\\n    </UsageData>\\r\\n    <UsageData>\\r\\n      <Values>\\r\\n        <Values>100.0</Values>\\r\\n      </Values>\\r\\n      <Date>2017-05-06 04:00:00</Date>\\r\\n    </UsageData>\\r\\n  </DataList>\\r\\n  <Code>0</Code>\\r\\n</GetFluencyDataResponse>","errorExample":""}]',
      'title' => '获取参考流畅率数据',
      'summary' => '获取加速域名的参考流畅率数据，单位：%。',
    ),
    'GetLogsList' => 
    array (
      'methods' => 
      array (
        0 => 'get',
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
          'name' => 'Version',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '版本号。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2017-04-11',
          ),
        ),
        1 => 
        array (
          'name' => 'Domain',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '搜索传入的内容，如果为空显示全部。',
            'type' => 'string',
            'required' => false,
            'example' => 'example.com',
          ),
        ),
        2 => 
        array (
          'name' => 'Date',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '日志日期。',
            'type' => 'string',
            'required' => false,
            'example' => '2016-10-20',
          ),
        ),
        3 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '获取日志的起始时间点。日期格式按照ISO8601表示法，并使用UTC时间。',
            'type' => 'string',
            'required' => false,
            'example' => '2016-10-20T04:00:00Z',
          ),
        ),
        4 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '获取日志的结束时间点。日期格式按照ISO8601表示法，并使用UTC时间。

> 结束时间需大于起始时间。',
            'type' => 'string',
            'required' => false,
            'example' => '2016-10-20T04:01:00Z',
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
                'description' => '业务码，成功返回0。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'B40C0B7C-C90E-43CD-963A-1B6AC6BCF6FF',
              ),
              'LogList' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Log' => 
                  array (
                    'description' => '返回日志的信息列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Url' => 
                        array (
                          'description' => '链接路径。',
                          'type' => 'string',
                          'example' => 'http://pcdn-log.oss-cn-shanghai.aliyuncs.com/xxxx/2017-05-07/xxxx',
                        ),
                        'StartDate' => 
                        array (
                          'description' => '开始时间。',
                          'type' => 'string',
                          'example' => '2017-05-07 21:00:00',
                        ),
                        'EndDate' => 
                        array (
                          'description' => '结束时间。',
                          'type' => 'string',
                          'example' => '2017-05-07 21:59:59',
                        ),
                        'FileName' => 
                        array (
                          'description' => '文件名称。',
                          'type' => 'string',
                          'example' => 'ccd_cdn.xxxx.com.cn_2017-05-03_07.tar.gz',
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
            'errorCode' => 'MissingParameter',
            'errorMessage' => 'You must specify domainName.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 0,\\n  \\"RequestId\\": \\"B40C0B7C-C90E-43CD-963A-1B6AC6BCF6FF\\",\\n  \\"LogList\\": {\\n    \\"Log\\": [\\n      {\\n        \\"Url\\": \\"http://pcdn-log.oss-cn-shanghai.aliyuncs.com/xxxx/2017-05-07/xxxx\\",\\n        \\"StartDate\\": \\"2017-05-07 21:00:00\\",\\n        \\"EndDate\\": \\"2017-05-07 21:59:59\\",\\n        \\"FileName\\": \\"ccd_cdn.xxxx.com.cn_2017-05-03_07.tar.gz\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetLogsListResponse>\\n<LogList>\\n    <Log>\\n        <EndDate>2017-05-07 00:59:59</EndDate>\\n        <StartDate>2017-05-07 00:00:00</StartDate>\\n        <Url>http://pcdn-log.oss-cn-shanghai.aliyuncs.com/xxxx/2017-05-07/xxxx</Url>\\n        <FileName>ccd_cdn.xxxx.com.cn_2017-05-03_01.tar.gz</FileName>\\n    </Log>\\n    <Log>\\n        <EndDate>2017-05-07 21:59:59</EndDate>\\n        <StartDate>2017-05-07 21:00:00</StartDate>\\n        <Url>http://pcdn-log.oss-cn-shanghai.aliyuncs.com/xxxx/2017-05-07/xxxx</Url>\\n        <FileName>ccd_cdn.xxxx.com.cn_2017-05-03_07.tar.gz</FileName>\\n    </Log>\\n</LogList>\\n<Code>0</Code>\\n<RequestId>B40C0B7C-C90E-43CD-963A-1B6AC6BCF6FF</RequestId>\\n</GetLogsListResponse>\\n","errorExample":""}]',
      'title' => '获取日志列表',
      'summary' => '获取当前用户选定时间的日志列表，供用户查看与下载。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'AddPcdnControlRule' => 
    array (
      'methods' => 
      array (
        0 => 'get',
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
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Version',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '版本号。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2017-04-11',
          ),
        ),
        1 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '规则名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'TEST+RULE',
          ),
        ),
        2 => 
        array (
          'name' => 'Region',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地区列表代码，使用竖线（|）分隔。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        3 => 
        array (
          'name' => 'IspName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '运营商英文名，多个使用竖线（|）分隔。
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'mobile',
          ),
        ),
        4 => 
        array (
          'name' => 'PlatformType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '终端类型代码，使用竖线（|）分隔。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '01',
          ),
        ),
        5 => 
        array (
          'name' => 'BusinessType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '业务类型：**live**、**vod**、**download**。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'live',
          ),
        ),
        6 => 
        array (
          'name' => 'Market',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '市场。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'all',
          ),
        ),
        7 => 
        array (
          'name' => 'AppVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用版本。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'all',
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
                'description' => '业务返回码，正常返回为0。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '20963AEE-E3A5-461F-8809-C494558373AB',
              ),
              'ResourceId' => 
              array (
                'description' => '规则资源ID。',
                'type' => 'string',
                'example' => '6p9uch',
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
            'errorCode' => 'MissingParameter',
            'errorMessage' => 'The input parameter domainName that is mandatory for processing this request is not supplied.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 0,\\n  \\"RequestId\\": \\"20963AEE-E3A5-461F-8809-C494558373AB\\",\\n  \\"ResourceId\\": \\"6p9uch\\"\\n}","errorExample":""},{"type":"xml","example":"<AddPcdnControlRuleResponse>\\n  <ResourceId>6p9uch</ResourceId>\\n  <Code>0</Code>\\n  <RequestId>20963AEE-E3A5-461F-8809-C494558373AB</RequestId>\\n<AddPcdnControlRuleResponse>","errorExample":""}]',
      'title' => '添加启停设置',
      'summary' => '调用AddPcdnControlRule添加启停设置。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeletePcdnControlRule' => 
    array (
      'methods' => 
      array (
        0 => 'get',
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
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Version',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '版本号。',
            'type' => 'string',
            'required' => true,
            'example' => '2017-04-11',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '启停规则资源ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'y6z7rp',
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
                'description' => '业务返回码，正常返回0。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '6FFD92E4-AD03-423C-AD1D-41F1990E56BA',
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
            'errorCode' => 'UnauthorizedOperation',
            'errorMessage' => 'You have no permission to delete this pcdn control rule.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 0,\\n  \\"RequestId\\": \\"6FFD92E4-AD03-423C-AD1D-41F1990E56BA\\"\\n}","errorExample":""},{"type":"xml","example":"<EditPcdnControlRuleResponse>\\n  <RequestId>555F7320-5D9F-4C43-9FD4-442447691127</RequestId>\\n  <Code>0</Code>\\n</EditPcdnControlRuleResponse>","errorExample":""}]',
      'title' => '删除启停设置',
      'summary' => '调用DeletePcdnControlRule删除启停设置。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DisablePcdnControlRule' => 
    array (
      'methods' => 
      array (
        0 => 'get',
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
          'name' => 'Version',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '版本号。',
            'type' => 'string',
            'required' => true,
            'example' => '2017-04-11',
            'docRequired' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '启停规则资源ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'y6z7rp',
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
              'Code' => 
              array (
                'description' => '业务返回码，正常返回0。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'A2A7EBC0-089D-4F6F-8FF3-6AFA67ED4313',
              ),
              'ResourceId' => 
              array (
                'description' => '规则资源ID。',
                'type' => 'string',
                'example' => 'y6z7rp',
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
            'errorCode' => 'MissingParameter',
            'errorMessage' => 'You must specify domainName.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 0,\\n  \\"RequestId\\": \\"A2A7EBC0-089D-4F6F-8FF3-6AFA67ED4313\\",\\n  \\"ResourceId\\": \\"y6z7rp\\"\\n}","errorExample":""},{"type":"xml","example":"<EnablePcdnControlRuleResponse>\\n  <ResourceId>y6z7rp</ResourceId>\\n  <RequestId>C7075F7D-8998-47CD-AA59-5C207D012F7B</RequestId>\\n  <Code>0</Code>\\n</EnablePcdnControlRuleResponse>","errorExample":""}]',
      'title' => '停用启停设置',
      'summary' => '调用DisablePcdnControlRule停用启停设置。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'EnablePcdnControlRule' => 
    array (
      'methods' => 
      array (
        0 => 'get',
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
          'name' => 'Version',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '版本号。',
            'type' => 'string',
            'required' => true,
            'example' => '2017-04-11',
            'docRequired' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '启停规则资源ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'y6z7rp',
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
              'Code' => 
              array (
                'description' => '业务码，成功返回0。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'A2A7EBC0-089D-4F6F-8FF3-6AFA67ED4313',
              ),
              'ResourceId' => 
              array (
                'description' => '规则资源ID。',
                'type' => 'string',
                'example' => 'y6z7rp',
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
            'errorCode' => 'MissingParameter',
            'errorMessage' => 'You must specify domainName.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 0,\\n  \\"RequestId\\": \\"A2A7EBC0-089D-4F6F-8FF3-6AFA67ED4313\\",\\n  \\"ResourceId\\": \\"y6z7rp\\"\\n}","errorExample":""},{"type":"xml","example":"<EnablePcdnControlRuleResponse>\\r\\n  <ResourceId>y6z7rp</ResourceId>\\r\\n  <RequestId>C7075F7D-8998-47CD-AA59-5C207D012F7B</RequestId>\\r\\n  <Code>0</Code>\\r\\n</EnablePcdnControlRuleResponse>","errorExample":""}]',
      'title' => '启用启停设置',
      'summary' => '调用EnablePcdnControlRule启用启停设置。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetControlRules' => 
    array (
      'methods' => 
      array (
        0 => 'get',
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
          'name' => 'Version',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '版本号。',
            'type' => 'string',
            'required' => true,
            'example' => '2017-04-11',
            'docRequired' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'Page',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前页码。',
            'type' => 'string',
            'required' => true,
            'example' => '10',
            'docRequired' => true,
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页的记录条数。',
            'type' => 'string',
            'required' => true,
            'example' => '1',
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
              'Code' => 
              array (
                'description' => '业务码，成功返回0。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '20963AEE-E3A5-461F-8809-C494558373AB',
              ),
              'Pager' => 
              array (
                'description' => '分页信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'PageSize' => 
                  array (
                    'description' => '每页的记录条数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '2',
                  ),
                  'Total' => 
                  array (
                    'description' => '总记录的条数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '173',
                  ),
                  'Page' => 
                  array (
                    'description' => '当前页码。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                ),
              ),
              'SettingList' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Setting' => 
                  array (
                    'description' => '返回的计费信息列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'CreatedAt' => 
                        array (
                          'description' => '插入时间。',
                          'type' => 'string',
                          'example' => '2017-06-02 13:16:37.0',
                        ),
                        'BusinessType' => 
                        array (
                          'description' => '业务类型。',
                          'type' => 'string',
                          'example' => 'live',
                        ),
                        'ClientId' => 
                        array (
                          'description' => '用户ID。',
                          'type' => 'string',
                          'example' => '200000',
                        ),
                        'Usable' => 
                        array (
                          'description' => '规则是否启用，一般为true。',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'PlatformType' => 
                        array (
                          'description' => '终端类型代码。',
                          'type' => 'string',
                          'example' => '01',
                        ),
                        'Region' => 
                        array (
                          'description' => '地区。',
                          'type' => 'string',
                          'example' => '11',
                        ),
                        'MarketType' => 
                        array (
                          'description' => '市场类型。',
                          'type' => 'string',
                          'example' => 'all',
                        ),
                        'UpdatedAt' => 
                        array (
                          'description' => '更新时间。',
                          'type' => 'string',
                          'example' => '2017-06-01 21:19:12.0',
                        ),
                        'AppVersion' => 
                        array (
                          'description' => '应用版本号。',
                          'type' => 'string',
                          'example' => '6.6.2',
                        ),
                        'IspName' => 
                        array (
                          'description' => '运营商。',
                          'type' => 'string',
                          'example' => 'unicom',
                        ),
                        'Onoff' => 
                        array (
                          'description' => '启停状态。',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                        'Name' => 
                        array (
                          'description' => '规则名称。',
                          'type' => 'string',
                          'example' => 'qqq',
                        ),
                        'ResourceId' => 
                        array (
                          'description' => '启停规则资源ID。',
                          'type' => 'string',
                          'example' => 'lrntfr',
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
            'errorCode' => 'MissingParameter',
            'errorMessage' => 'You must specify domainName.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 0,\\n  \\"RequestId\\": \\"20963AEE-E3A5-461F-8809-C494558373AB\\",\\n  \\"Pager\\": {\\n    \\"PageSize\\": 2,\\n    \\"Total\\": 173,\\n    \\"Page\\": 1\\n  },\\n  \\"SettingList\\": {\\n    \\"Setting\\": [\\n      {\\n        \\"CreatedAt\\": \\"2017-06-02 13:16:37.0\\",\\n        \\"BusinessType\\": \\"live\\",\\n        \\"ClientId\\": \\"200000\\",\\n        \\"Usable\\": true,\\n        \\"PlatformType\\": \\"01\\",\\n        \\"Region\\": \\"11\\",\\n        \\"MarketType\\": \\"all\\",\\n        \\"UpdatedAt\\": \\"2017-06-01 21:19:12.0\\",\\n        \\"AppVersion\\": \\"6.6.2\\",\\n        \\"IspName\\": \\"unicom\\",\\n        \\"Onoff\\": false,\\n        \\"Name\\": \\"qqq\\",\\n        \\"ResourceId\\": \\"lrntfr\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetControlRulesResponse>\\r\\n  <Pager>\\r\\n    <PageSize>2</PageSize>\\r\\n    <Page>1</Page>\\r\\n    <Total>173</Total>\\r\\n  </Pager>\\r\\n  <Code>0</Code>\\r\\n  <SettingList>\\r\\n    <Setting>\\r\\n      <UpdatedAt>2017-06-02 13:16:37.0</UpdatedAt>\\r\\n      <Onoff>false</Onoff>\\r\\n      <Name>qqq</Name>\\r\\n      <PlatformType>01</PlatformType>\\r\\n      <Region>11</Region>\\r\\n      <IspName>unicom</IspName>\\r\\n      <ResourceId>lrntfr</ResourceId>\\r\\n      <MarketType>all</MarketType>\\r\\n      <AppVersion>6.6.2</AppVersion>\\r\\n      <BusinessType>live</BusinessType>\\r\\n      <ClientId>200000</ClientId>\\r\\n      <CreatedAt>2017-06-02 13:16:37.0</CreatedAt>\\r\\n    </Setting>\\r\\n    <Setting>\\r\\n      <UpdatedAt>2017-06-01 21:19:12.0</UpdatedAt>\\r\\n      <Onoff>false</Onoff>\\r\\n      <Name>59</Name>\\r\\n      <PlatformType>02</PlatformType>\\r\\n      <Region>11</Region>\\r\\n      <IspName>all</IspName>\\r\\n      <ResourceId>pm8fq9</ResourceId>\\r\\n      <MarketType>b1f2523b184b66ab|39667742fd585678</MarketType>\\r\\n      <AppVersion>3.3.024_home|DVB_TV_Yingshi_R_5.1.1.25_1d433747</AppVersion>\\r\\n      <BusinessType>live</BusinessType>\\r\\n      <ClientId>200000</ClientId>\\r\\n      <CreatedAt>2017-06-01 21:19:12.0</CreatedAt>\\r\\n    </Setting>\\r\\n  </SettingList>\\r\\n</GetControlRulesResponse>","errorExample":""}]',
      'title' => '获取启停设置列表',
      'summary' => '调用GetControlRules获取启停设置列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'EditPcdnControlRule' => 
    array (
      'methods' => 
      array (
        0 => 'get',
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
          'name' => 'Version',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '版本号。',
            'type' => 'string',
            'required' => true,
            'example' => '2017-04-11',
            'docRequired' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '规则名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'TEST+RULE+EDIT',
            'docRequired' => true,
          ),
        ),
        2 => 
        array (
          'name' => 'ResourceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '启停规则资源。',
            'type' => 'string',
            'required' => true,
            'example' => 'y6z7rp',
            'docRequired' => true,
          ),
        ),
        3 => 
        array (
          'name' => 'Region',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域列表代码，多个使用竖线（|）分隔。

代码详情请参见[通用字段参考](~~151572~~)。',
            'type' => 'string',
            'required' => true,
            'example' => '67',
            'docRequired' => true,
          ),
        ),
        4 => 
        array (
          'name' => 'IspName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '运营商英文名，使用竖线（|）分隔。',
            'type' => 'string',
            'required' => true,
            'example' => 'mobile',
            'docRequired' => true,
          ),
        ),
        5 => 
        array (
          'name' => 'PlatformType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '终端类型代码，多个使用竖线（|）分隔。

代码详情请参见[通用字段参考](~~151572~~)。
',
            'type' => 'string',
            'required' => true,
            'example' => '01',
            'docRequired' => true,
          ),
        ),
        6 => 
        array (
          'name' => 'BusinessType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '业务类型：live、vod、download。',
            'type' => 'string',
            'required' => true,
            'example' => 'live',
            'docRequired' => true,
          ),
        ),
        7 => 
        array (
          'name' => 'Market',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '市场，多个用竖线（|）分隔，全部填写all。',
            'type' => 'string',
            'required' => true,
            'example' => 'APPStore',
            'docRequired' => true,
          ),
        ),
        8 => 
        array (
          'name' => 'AppVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用版本，多个用竖线（|）分隔，修改全部填写all。',
            'type' => 'string',
            'required' => true,
            'example' => '9.27.3501',
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
              'Code' => 
              array (
                'description' => '业务码，成功返回0。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '6FFD92E4-AD03-423C-AD1D-41F1990E56BA',
              ),
              'ResourceId' => 
              array (
                'description' => '规则资源ID。',
                'type' => 'string',
                'example' => 'y6z7rp',
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
            'errorCode' => 'MissingParameter',
            'errorMessage' => 'You must specify domainName.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 0,\\n  \\"RequestId\\": \\"6FFD92E4-AD03-423C-AD1D-41F1990E56BA\\",\\n  \\"ResourceId\\": \\"y6z7rp\\"\\n}","errorExample":""},{"type":"xml","example":"<EditPcdnControlRuleResponse>\\r\\n  <ResourceId>y6z7rp</ResourceId>\\r\\n  <RequestId>555F7320-5D9F-4C43-9FD4-442447691127</RequestId>\\r\\n  <Code>0</Code>\\r\\n</EditPcdnControlRuleResponse>","errorExample":""}]',
      'title' => '修改启停设置',
      'summary' => '调用EditPcdnControlRule修改启停设置。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'AddDomain' => 
    array (
      'methods' => 
      array (
        0 => 'get',
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
          'name' => 'Version',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '版本号。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2017-04-11',
          ),
        ),
        1 => 
        array (
          'name' => 'BusinessType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '业务类型。取值：
- **live**：直播流媒体。
- **vod**：视音频点播。
- **download**：大文件下载。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'live',
            'enum' => 
            array (
              0 => 'vod',
              1 => 'live',
              2 => 'download',
            ),
          ),
        ),
        2 => 
        array (
          'name' => 'Domain',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名信息，仅支持添加单个。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'example.com',
          ),
        ),
        3 => 
        array (
          'name' => 'LiveFormat',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '直播格式，多个使用竖线（|）分割。当业务类型为live的时候必填。取值：

- **hls**
- **flv**',
            'type' => 'string',
            'required' => false,
            'example' => 'hls',
          ),
        ),
        4 => 
        array (
          'name' => 'SliceDomain',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '切片域名，当业务类型为live、直播格式包含flv且客户集成模式为“与第三方CDN集成”时必填。',
            'type' => 'string',
            'required' => false,
            'example' => 'example.com',
          ),
        ),
        5 => 
        array (
          'name' => 'Region',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'A域名所在地域，当业务类型为live，直播格式包含flv时必填。

目前合法值包括cn-beijing、cn-shanghai、ap-southeast-1。其中当区域为“ap-southeast-1”时，后端会返回错误。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-beijing',
          ),
        ),
        6 => 
        array (
          'name' => 'DemoUrls',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '示例URL地址，多个用竖线（|）分隔。',
            'type' => 'string',
            'required' => false,
            'example' => 'http://lesson-01.mp4',
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
                'description' => '业务码，成功返回0。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'B40C0B7C-C90E-43CD-963A-1B6AC6BCF6FF',
              ),
              'ResourceId' => 
              array (
                'description' => '规则资源ID。',
                'type' => 'string',
                'example' => 'tu9lfh',
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
            'errorCode' => 'MissingParameter',
            'errorMessage' => 'You must specify domainName.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 0,\\n  \\"RequestId\\": \\"B40C0B7C-C90E-43CD-963A-1B6AC6BCF6FF\\",\\n  \\"ResourceId\\": \\"tu9lfh\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>B40C0B7C-C90E-43CD-963A-1B6AC6BCF6FF</RequestId>\\n<ResourceId>tu9lfh</ResourceId>\\n<Code>0</Code>","errorExample":""}]',
      'title' => '添加域名',
      'summary' => '调用AddDomain添加域名。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteDomain' => 
    array (
      'methods' => 
      array (
        0 => 'get',
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
          'name' => 'Version',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '版本号。',
            'type' => 'string',
            'required' => true,
            'example' => '2017-04-11',
            'docRequired' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'Domain',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要删除的域名。',
            'type' => 'string',
            'required' => true,
            'example' => 'example.com',
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
              'Code' => 
              array (
                'description' => '业务码，成功返回0。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '5923BFA8-ACC2-4949-A0AB-46B66FF45BDD',
              ),
              'ResourceId' => 
              array (
                'description' => '域名资源ID。',
                'type' => 'string',
                'example' => '23j63d',
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
            'errorCode' => 'MissingParameter',
            'errorMessage' => 'You must specify domainName.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 0,\\n  \\"RequestId\\": \\"5923BFA8-ACC2-4949-A0AB-46B66FF45BDD\\",\\n  \\"ResourceId\\": \\"23j63d\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteDomainResponse>\\n<code>0</code>\\n<ResourceId>23j63d</ResourceId>\\n<requestId>5923BFA8-ACC2-4949-A0AB-46B66FF45BDD</requestId>\\n</DeleteDomainResponse>\\n","errorExample":""}]',
      'title' => '删除域名',
      'summary' => '调用DeleteDomain删除域名。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'StartDomain' => 
    array (
      'methods' => 
      array (
        0 => 'get',
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
          'name' => 'Version',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '版本号。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2017-04-11',
          ),
        ),
        1 => 
        array (
          'name' => 'Domain',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名信息。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'example.com',
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
                'description' => '业务码，成功返回0。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9B9F0410-C648-4232-A424-7574905B7982',
              ),
              'ResourceId' => 
              array (
                'description' => '域名资源ID。',
                'type' => 'string',
                'example' => 'jjh32t',
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
            'errorCode' => 'MissingParameter',
            'errorMessage' => 'You must specify domainName.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 0,\\n  \\"RequestId\\": \\"9B9F0410-C648-4232-A424-7574905B7982\\",\\n  \\"ResourceId\\": \\"jjh32t\\"\\n}","errorExample":""},{"type":"xml","example":"<StartDomainResponse>\\n<code>0</code>\\n<ResourceId>jjh32t</ResourceId>\\n<requestId>9B9F0410-C648-4232-A424-7574905B7982</requestId>\\n</StartDomainResponse>","errorExample":""}]',
      'title' => '启用域名',
      'summary' => '调用StartDomain启用域名。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'StopDomain' => 
    array (
      'methods' => 
      array (
        0 => 'get',
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
          'name' => 'Version',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '版本号。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2017-04-11',
          ),
        ),
        1 => 
        array (
          'name' => 'Domain',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'example.com',
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
                'description' => '业务码，成功返回0。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9B9F0410-C648-4232-A424-7574905B7982',
              ),
              'ResourceId' => 
              array (
                'description' => '域名资源ID。',
                'type' => 'string',
                'example' => 'tu9lfh',
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
            'errorCode' => 'MissingParameter',
            'errorMessage' => 'You must specify domainName.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 0,\\n  \\"RequestId\\": \\"9B9F0410-C648-4232-A424-7574905B7982\\",\\n  \\"ResourceId\\": \\"tu9lfh\\"\\n}","errorExample":""},{"type":"xml","example":"<StopDomainResponse>\\n<code>0</code>\\n<ResourceId>tu9lfh</ResourceId>\\n<requestId>9B9F0410-C648-4232-A424-7574905B7982</requestId>\\n</StopDomainResponse>\\n","errorExample":""}]',
      'title' => '停用域名',
      'summary' => '调用StopDomain停用域名。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetAccessData' => 
    array (
      'methods' => 
      array (
        0 => 'get',
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
          'name' => 'Version',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '版本号。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2017-04-11',
          ),
        ),
        1 => 
        array (
          'name' => 'Domain',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待查询的域名，多个用竖线（|）分割，不传查询全部。',
            'type' => 'string',
            'required' => false,
            'example' => 'all',
          ),
        ),
        2 => 
        array (
          'name' => 'Region',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域，使用竖线（|）分隔，查询全部地域填all。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'all',
          ),
        ),
        3 => 
        array (
          'name' => 'IspName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '运营商名称，使用竖线（|）分隔，查询全部运营商填all。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'all',
          ),
        ),
        4 => 
        array (
          'name' => 'PlatformType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '终端，使用竖线（|）分隔，查询全部终端填all。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'all',
          ),
        ),
        5 => 
        array (
          'name' => 'BusinessType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '业务类型，多个用竖线（|）分隔，全部填all。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'all',
          ),
        ),
        6 => 
        array (
          'name' => 'StartDate',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开始时间。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2017-05-01',
          ),
        ),
        7 => 
        array (
          'name' => 'EndDate',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '结束时间。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2017-05-10',
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
                'description' => '业务码，成功返回0。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '448328AF-82C4-420F-8D7F-4C9F2D523D7F',
              ),
              'Labels' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Label' => 
                  array (
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '标签，描述数据类型。',
                      'type' => 'string',
                      'example' => '访客量',
                    ),
                  ),
                ),
              ),
              'DataList' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'UsageData' => 
                  array (
                    'description' => '返回的信息列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Date' => 
                        array (
                          'description' => '数据的时间片起始时刻。',
                          'type' => 'string',
                          'example' => '2017-05-06 00:00:00',
                        ),
                        'Values' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Values' => 
                            array (
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '带宽数据，单位：bit/s。',
                                'type' => 'string',
                                'example' => '10879016',
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
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'MissingParameter',
            'errorMessage' => 'You must specify domainName.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 0,\\n  \\"RequestId\\": \\"448328AF-82C4-420F-8D7F-4C9F2D523D7F\\",\\n  \\"Labels\\": {\\n    \\"Label\\": [\\n      \\"访客量\\"\\n    ]\\n  },\\n  \\"DataList\\": {\\n    \\"UsageData\\": [\\n      {\\n        \\"Date\\": \\"2017-05-06 00:00:00\\",\\n        \\"Values\\": {\\n          \\"Values\\": [\\n            \\"10879016\\"\\n          ]\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetAccessDataResponse>\\r\\n  <Labels>\\r\\n    <Label>访客量</Label>\\r\\n  </Labels>\\r\\n  <RequestId>BF921B07-EEB0-44BD-8E21-BD796E3FFBF2</RequestId>\\r\\n  <DataList>\\r\\n    <UsageData>\\r\\n      <Values>\\r\\n        <Values>10879016</Values>\\r\\n      </Values>\\r\\n      <Date>2017-05-06 00:00:00</Date>\\r\\n    </UsageData>\\r\\n    <UsageData>\\r\\n      <Values>\\r\\n        <Values>10844042</Values>\\r\\n      </Values>\\r\\n      <Date>2017-05-07 00:00:00</Date>\\r\\n    </UsageData>\\r\\n  </DataList>\\r\\n  <Code>0</Code>\\r\\n</GetAccessDataResponse>","errorExample":""}]',
      'title' => '获取加速域名访客统计数据',
      'summary' => '获取加速域名最小1天粒度的访客统计数据。',
      'description' => '> - 不指定**StartTime**和**EndTime**时，默认读取过去24小时的数据；指定**StartTime**和**EndTime**时，按指定的起止时间查询。

- 支持批量域名查询，多个域名用竖线（|）分隔。

- 最多可获取最近90天的数据。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetBandwidthData' => 
    array (
      'methods' => 
      array (
        0 => 'get',
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
          'name' => 'Version',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '版本号。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2017-04-11',
          ),
        ),
        1 => 
        array (
          'name' => 'Domain',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待查询的域名列表。支持批量域名查询，多个域名用竖线（|）分隔。

不传该参数将查询全部。',
            'type' => 'string',
            'required' => false,
            'example' => 'all',
          ),
        ),
        2 => 
        array (
          'name' => 'Region',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域代码，多个用竖线（|）分隔，全部填all。

查询请参见[通用字段参考](~~151572~~)。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'all',
          ),
        ),
        3 => 
        array (
          'name' => 'IspName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '运营商代码，多个用竖线（|）分隔，全部填all。

查询请参见[通用字段参考](~~151572~~)。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'all',
          ),
        ),
        4 => 
        array (
          'name' => 'PlatformType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '终端代码，多个用竖线（|）分隔，全部填all。

查询请参见[通用字段参考](~~151572~~)。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'all',
          ),
        ),
        5 => 
        array (
          'name' => 'BusinessType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '业务类型，多个用竖线（|）分隔。取值：
- **live**：直播流媒体。
- **download**：大文件下载。
- **vod**：视视频点播。
- **all**：全部业务类型。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'all',
          ),
        ),
        6 => 
        array (
          'name' => 'StartDate',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开始时间。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2017-05-01',
          ),
        ),
        7 => 
        array (
          'name' => 'EndDate',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '结束时间。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2017-05-10',
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
                'description' => '业务码，成功返回0。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '5C2C4882-69C3-45BA-A10E-67E4DFFEA403',
              ),
              'Labels' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Label' => 
                  array (
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '标签，用于描述数据类型。',
                      'type' => 'string',
                      'example' => '带宽',
                    ),
                  ),
                ),
              ),
              'DataList' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'UsageData' => 
                  array (
                    'description' => '返回的信息列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Date' => 
                        array (
                          'description' => '数据的时间片起始时刻。',
                          'type' => 'string',
                          'example' => '2017-05-01 00:00:00',
                        ),
                        'Values' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Values' => 
                            array (
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '带宽数据，bit/second。',
                                'type' => 'string',
                                'example' => '95231540262',
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
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'MissingParameter',
            'errorMessage' => 'You must specify domainName.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 0,\\n  \\"RequestId\\": \\"5C2C4882-69C3-45BA-A10E-67E4DFFEA403\\",\\n  \\"Labels\\": {\\n    \\"Label\\": [\\n      \\"带宽\\"\\n    ]\\n  },\\n  \\"DataList\\": {\\n    \\"UsageData\\": [\\n      {\\n        \\"Date\\": \\"2017-05-01 00:00:00\\",\\n        \\"Values\\": {\\n          \\"Values\\": [\\n            \\"95231540262\\"\\n          ]\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetBandwidthDataResponse>\\r\\n  <Labels>带宽</Labels>\\r\\n  <RequestId>C86F7C0C-D520-4F67-95DB-277E9A233E4E</RequestId>\\r\\n  <DataList>\\r\\n    <UsageData>\\r\\n      <Values>\\r\\n        <Values>95231540262</Values>\\r\\n        <Values>290426020145</Values>\\r\\n      </Values>\\r\\n      <Date>2017-05-01 00:00:00</Date>\\r\\n    </UsageData>\\r\\n    <UsageData>\\r\\n      <Values>\\r\\n        <Values>36802763485</Values>\\r\\n        <Values>290426020145</Values>\\r\\n      </Values>\\r\\n      <Date>2017-05-01 04:00:00</Date>\\r\\n    </UsageData>\\r\\n  </DataList>\\r\\n  <Code>0</Code>\\r\\n</GetBandwidthDataResponse>","errorExample":""}]',
      'title' => '获取加速域名的网络带宽监控数据',
      'summary' => '调用GetBandwidthData获取加速域名的网络带宽监控数据，支持获取最近90天的数据。',
      'description' => '> - 单位：bit/second。

- 不指定StartTime和EndTime时，默认读取过去24小时的数据；指定StartTime和EndTime时，按指定的起止时间查询。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetCoverRateData' => 
    array (
      'methods' => 
      array (
        0 => 'get',
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
          'name' => 'Version',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '版本号。',
            'type' => 'string',
            'required' => true,
            'example' => '2017-04-11',
            'docRequired' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'Domain',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待查询的域名列表，以竖线分割，不传查询全部。',
            'type' => 'string',
            'required' => false,
            'example' => 'all',
          ),
        ),
        2 => 
        array (
          'name' => 'Region',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地区，竖线分隔，全部填all。',
            'type' => 'string',
            'required' => true,
            'example' => 'all',
            'docRequired' => true,
          ),
        ),
        3 => 
        array (
          'name' => 'IspName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '运营商，竖线分隔，全部填all。
',
            'type' => 'string',
            'required' => true,
            'example' => 'all',
            'docRequired' => true,
          ),
        ),
        4 => 
        array (
          'name' => 'PlatformType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '终端，竖线分隔，全部填all。',
            'type' => 'string',
            'required' => true,
            'example' => 'all',
            'docRequired' => true,
          ),
        ),
        5 => 
        array (
          'name' => 'BusinessType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '业务类型，竖线分隔，全部填all。',
            'type' => 'string',
            'required' => true,
            'example' => 'all',
            'docRequired' => true,
          ),
        ),
        6 => 
        array (
          'name' => 'StartDate',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开始时间。',
            'type' => 'string',
            'required' => true,
            'example' => '2017-05-01',
            'docRequired' => true,
          ),
        ),
        7 => 
        array (
          'name' => 'EndDate',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '结束时间。',
            'type' => 'string',
            'required' => true,
            'example' => '2017-05-10',
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
              'Code' => 
              array (
                'description' => '业务码，成功返回0。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '5C2C4882-69C3-45BA-A10E-67E4DFFEA403',
              ),
              'Labels' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Label' => 
                  array (
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '标签，描述数据类型。',
                      'type' => 'string',
                      'example' => '带宽峰值',
                    ),
                  ),
                ),
              ),
              'DataList' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'UsageData' => 
                  array (
                    'description' => '返回的信息列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Date' => 
                        array (
                          'description' => '数据的时间片起始时刻。',
                          'type' => 'string',
                          'example' => '2017-05-01 00:00:00',
                        ),
                        'Values' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Values' => 
                            array (
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '带宽数据，单位：bit/second。',
                                'type' => 'string',
                                'example' => '290426020145',
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
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'MissingParameter',
            'errorMessage' => 'You must specify domainName.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 0,\\n  \\"RequestId\\": \\"5C2C4882-69C3-45BA-A10E-67E4DFFEA403\\",\\n  \\"Labels\\": {\\n    \\"Label\\": [\\n      \\"带宽峰值\\"\\n    ]\\n  },\\n  \\"DataList\\": {\\n    \\"UsageData\\": [\\n      {\\n        \\"Date\\": \\"2017-05-01 00:00:00\\",\\n        \\"Values\\": {\\n          \\"Values\\": [\\n            \\"290426020145\\"\\n          ]\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetBandwidthDataResponse>\\r\\n  <Labels>\\r\\n    <Label>带宽</Label>\\r\\n    <Label>带宽峰值</Label>\\r\\n  </Labels>\\r\\n  <RequestId>C86F7C0C-D520-4F67-95DB-277E9A233E4E</RequestId>\\r\\n  <DataList>\\r\\n    <UsageData>\\r\\n      <Values>\\r\\n        <Values>95231540262</Values>\\r\\n        <Values>290426020145</Values>\\r\\n      </Values>\\r\\n      <Date>2017-05-01 00:00:00</Date>\\r\\n    </UsageData>\\r\\n    <UsageData>\\r\\n      <Values>\\r\\n        <Values>36802763485</Values>\\r\\n        <Values>290426020145</Values>\\r\\n      </Values>\\r\\n      <Date>2017-05-01 04:00:00</Date>\\r\\n    </UsageData>\\r\\n  </DataList>\\r\\n  <Code>0</Code>\\r\\n</GetBandwidthDataResponse>","errorExample":""}]',
      'title' => '查询加速域名PCDN覆盖率数据',
      'summary' => '查询加速域名的最小1天粒度的PCDN覆盖率数据，单位：%。',
      'description' => '**调用该接口前，请您注意：**

不指定StartTime和EndTime时，默认读取过去24小时的数据；指定StartTime和EndTime时，按指定的起止时间查询。

支持批量域名查询，多个域名用竖线（|）分隔。

最多可获取最近90天的数据。',
    ),
    'GetDomainCount' => 
    array (
      'methods' => 
      array (
        0 => 'get',
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
          'name' => 'Version',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '版本号。',
            'type' => 'string',
            'required' => true,
            'example' => '2017-04-11',
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
              'Code' => 
              array (
                'description' => '业务码，成功返回0。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Data' => 
              array (
                'description' => '域名数量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '6',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'B40C0B7C-C90E-43CD-963A-1B6AC6BCF6FF',
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
            'errorCode' => 'MissingParameter',
            'errorMessage' => 'You must specify domainName.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 0,\\n  \\"Data\\": 6,\\n  \\"RequestId\\": \\"B40C0B7C-C90E-43CD-963A-1B6AC6BCF6FF\\"\\n}","errorExample":""},{"type":"xml","example":"<GetDomainCountResponse>\\r\\n  <Data>6</Data>\\r\\n  <RequestId>9B9F0410-C648-4232-A424-7574905B7982</RequestId>\\r\\n  <Code>0</Code>\\r\\n</GetDomainCountResponse>","errorExample":""}]',
      'title' => '获取用户域名总数目',
      'summary' => '调用GetDomainCount获取用户域名总数目。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetDomains' => 
    array (
      'methods' => 
      array (
        0 => 'get',
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
          'name' => 'Version',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '版本号。',
            'type' => 'string',
            'required' => true,
            'example' => '2017-04-11',
            'docRequired' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'Page',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前页码。',
            'type' => 'string',
            'required' => true,
            'example' => '1',
            'docRequired' => true,
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页记录条数。',
            'type' => 'string',
            'required' => true,
            'example' => '10',
            'docRequired' => true,
          ),
        ),
        3 => 
        array (
          'name' => 'Domain',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名。',
            'type' => 'string',
            'required' => false,
            'example' => 'xxx.com.cn',
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
                'description' => '业务码，成功返回0。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '425AEBD2-C4BA-44E4-9FC1-026844933422',
              ),
              'Pager' => 
              array (
                'description' => '分页信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'PageSize' => 
                  array (
                    'description' => '每页的记录条数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'Total' => 
                  array (
                    'description' => '总记录的条数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'Page' => 
                  array (
                    'description' => '当前页码。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                ),
              ),
              'DataList' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'UsageData' => 
                  array (
                    'description' => '返回的域名信息列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Status' => 
                        array (
                          'description' => '当前域名的状态，是否启用。',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'Domain' => 
                        array (
                          'description' => '域名。',
                          'type' => 'string',
                          'example' => 'xxx.com.cn',
                        ),
                        'SliceFormat' => 
                        array (
                          'description' => '切片格式，仅在BusinessType=live时返回。',
                          'type' => 'string',
                          'example' => 'flv',
                        ),
                        'CreatedAt' => 
                        array (
                          'description' => '创建时间。',
                          'type' => 'string',
                          'example' => '2017-05-12 20:56:34',
                        ),
                        'UpdatedAt' => 
                        array (
                          'description' => '更新时间。',
                          'type' => 'string',
                          'example' => '2017-05-12 20:56:34',
                        ),
                        'ResourceId' => 
                        array (
                          'description' => '域名资源ID。',
                          'type' => 'string',
                          'example' => 'i4e6g9',
                        ),
                        'BusinessType' => 
                        array (
                          'description' => '业务类型：download、live、vod。
',
                          'type' => 'string',
                          'example' => 'vod',
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
            'errorCode' => 'MissingParameter',
            'errorMessage' => 'You must specify domainName.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 0,\\n  \\"RequestId\\": \\"425AEBD2-C4BA-44E4-9FC1-026844933422\\",\\n  \\"Pager\\": {\\n    \\"PageSize\\": 10,\\n    \\"Total\\": 1,\\n    \\"Page\\": 1\\n  },\\n  \\"DataList\\": {\\n    \\"UsageData\\": [\\n      {\\n        \\"Status\\": true,\\n        \\"Domain\\": \\"xxx.com.cn\\",\\n        \\"SliceFormat\\": \\"flv\\",\\n        \\"CreatedAt\\": \\"2017-05-12 20:56:34\\",\\n        \\"UpdatedAt\\": \\"2017-05-12 20:56:34\\",\\n        \\"ResourceId\\": \\"i4e6g9\\",\\n        \\"BusinessType\\": \\"vod\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetDomainsResponse>\\n<Pager>\\n    <PageSize>10</PageSize>\\n    <Page>1</Page>\\n    <Total>1</Total>\\n</Pager>\\n<RequestId>425AEBD2-C4BA-44E4-9FC1-026844933422</RequestId>\\n<DataList>\\n    <UsageData>\\n        <UpdatedAt>2017-05-12 20:56:34</UpdatedAt>\\n        <Status>true</Status>\\n        <Domain>xxx.com.cn</Domain>\\n        <BusinessType>vod</BusinessType>\\n        <ResourceId>i4e6g9</ResourceId>\\n        <CreatedAt>2017-05-12 20:56:34</CreatedAt>\\n    </UsageData>\\n</DataList>\\n<Code>0</Code>\\n</GetDomainsResponse>\\n","errorExample":""}]',
      'title' => '查询域名与状态',
      'summary' => '查询用户名下所有的域名与状态。域名状态包括：正常、停用。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetFirstFrameDelayData' => 
    array (
      'methods' => 
      array (
        0 => 'get',
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
          'name' => 'Version',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '版本号。',
            'type' => 'string',
            'required' => true,
            'example' => '2017-04-11',
            'docRequired' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'Domain',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待查询的域名列表，以竖线分割，不传查询全部。',
            'type' => 'string',
            'required' => false,
            'example' => 'all',
          ),
        ),
        2 => 
        array (
          'name' => 'Region',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地区，竖线分隔，全部填all。
',
            'type' => 'string',
            'required' => true,
            'example' => 'all',
            'docRequired' => true,
          ),
        ),
        3 => 
        array (
          'name' => 'IspName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '运营商，竖线分隔，全部填all。',
            'type' => 'string',
            'required' => true,
            'example' => 'all',
            'docRequired' => true,
          ),
        ),
        4 => 
        array (
          'name' => 'PlatformType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '终端，竖线分隔，全部填all。',
            'type' => 'string',
            'required' => true,
            'example' => 'all',
            'docRequired' => true,
          ),
        ),
        5 => 
        array (
          'name' => 'BusinessType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '业务类型，竖线分隔，全部填all。',
            'type' => 'string',
            'required' => true,
            'example' => 'all',
            'docRequired' => true,
          ),
        ),
        6 => 
        array (
          'name' => 'StartDate',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开始时间。',
            'type' => 'string',
            'required' => true,
            'example' => '2017-05-01',
            'docRequired' => true,
          ),
        ),
        7 => 
        array (
          'name' => 'EndDate',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '结束时间。',
            'type' => 'string',
            'required' => true,
            'example' => '2017-05-10',
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
              'Code' => 
              array (
                'description' => '业务码，成功返回0。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'AADC33E0-F172-4BA8-9D48-09BC013CEB47',
              ),
              'Labels' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Label' => 
                  array (
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '标签，描述数据类型。',
                      'type' => 'string',
                      'example' => '首帧延时',
                    ),
                  ),
                ),
              ),
              'DataList' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'UsageData' => 
                  array (
                    'description' => '返回的信息列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Date' => 
                        array (
                          'description' => '数据的时间片起始时刻。',
                          'type' => 'string',
                          'example' => '2017-05-01 00:00:00',
                        ),
                        'Values' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Values' => 
                            array (
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '带宽数据，单位：bit/second。',
                                'type' => 'string',
                                'example' => '352',
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
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'MissingParameter',
            'errorMessage' => 'You must specify domainName.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 0,\\n  \\"RequestId\\": \\"AADC33E0-F172-4BA8-9D48-09BC013CEB47\\",\\n  \\"Labels\\": {\\n    \\"Label\\": [\\n      \\"首帧延时\\"\\n    ]\\n  },\\n  \\"DataList\\": {\\n    \\"UsageData\\": [\\n      {\\n        \\"Date\\": \\"2017-05-01 00:00:00\\",\\n        \\"Values\\": {\\n          \\"Values\\": [\\n            \\"352\\"\\n          ]\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetFirstFrameDelayDataResponse>\\r\\n  <Labels>\\r\\n    <Label>首帧延时</Label>\\r\\n  </Labels>\\r\\n  <RequestId>E2C71271-907F-4F65-A7D9-452005960109</RequestId>\\r\\n  <DataList>\\r\\n    <UsageData>\\r\\n      <Values>\\r\\n        <Values>352</Values>\\r\\n      </Values>\\r\\n      <Date>2017-05-01 00:00:00</Date>\\r\\n    </UsageData>\\r\\n    <UsageData>\\r\\n      <Values>\\r\\n        <Values>316</Values>\\r\\n      </Values>\\r\\n      <Date>2017-05-01 04:00:00</Date>\\r\\n    </UsageData>\\r\\n  </DataList>\\r\\n  <Code>0</Code>\\r\\n</GetFirstFrameDelayDataResponse>","errorExample":""}]',
      'title' => '获取加速域名首帧延时数据',
      'summary' => '获取加速域名的首帧延时数据，单位：ms。',
      'description' => '**调用该接口前，请您注意：**

- 不指定StartTime和EndTime时，默认读取过去24小时的数据；指定StartTime和EndTime时，按指定的起止时间查询。

- 支持批量域名查询，多个域名用竖线（|）分隔。

- 最多可获取最近90天的数据。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'pcdn.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'ap-northeast-1',
      'endpoint' => 'pcdn.aliyuncs.com',
    ),
    2 => 
    array (
      'regionId' => 'ap-northeast-2-pop',
      'endpoint' => 'pcdn.aliyuncs.com',
    ),
    3 => 
    array (
      'regionId' => 'ap-south-1',
      'endpoint' => 'pcdn.aliyuncs.com',
    ),
    4 => 
    array (
      'regionId' => 'ap-southeast-1',
      'endpoint' => 'pcdn.aliyuncs.com',
    ),
    5 => 
    array (
      'regionId' => 'ap-southeast-2',
      'endpoint' => 'pcdn.aliyuncs.com',
    ),
    6 => 
    array (
      'regionId' => 'ap-southeast-3',
      'endpoint' => 'pcdn.aliyuncs.com',
    ),
    7 => 
    array (
      'regionId' => 'ap-southeast-5',
      'endpoint' => 'pcdn.aliyuncs.com',
    ),
    8 => 
    array (
      'regionId' => 'cn-beijing',
      'endpoint' => 'pcdn.aliyuncs.com',
    ),
    9 => 
    array (
      'regionId' => 'cn-beijing-finance-1',
      'endpoint' => 'pcdn.aliyuncs.com',
    ),
    10 => 
    array (
      'regionId' => 'cn-beijing-finance-pop',
      'endpoint' => 'pcdn.aliyuncs.com',
    ),
    11 => 
    array (
      'regionId' => 'cn-beijing-gov-1',
      'endpoint' => 'pcdn.aliyuncs.com',
    ),
    12 => 
    array (
      'regionId' => 'cn-beijing-nu16-b01',
      'endpoint' => 'pcdn.aliyuncs.com',
    ),
    13 => 
    array (
      'regionId' => 'cn-chengdu',
      'endpoint' => 'pcdn.aliyuncs.com',
    ),
    14 => 
    array (
      'regionId' => 'cn-edge-1',
      'endpoint' => 'pcdn.aliyuncs.com',
    ),
    15 => 
    array (
      'regionId' => 'cn-fujian',
      'endpoint' => 'pcdn.aliyuncs.com',
    ),
    16 => 
    array (
      'regionId' => 'cn-haidian-cm12-c01',
      'endpoint' => 'pcdn.aliyuncs.com',
    ),
    17 => 
    array (
      'regionId' => 'cn-hangzhou-bj-b01',
      'endpoint' => 'pcdn.aliyuncs.com',
    ),
    18 => 
    array (
      'regionId' => 'cn-hangzhou-finance',
      'endpoint' => 'pcdn.aliyuncs.com',
    ),
    19 => 
    array (
      'regionId' => 'cn-hangzhou-internal-prod-1',
      'endpoint' => 'pcdn.aliyuncs.com',
    ),
    20 => 
    array (
      'regionId' => 'cn-hangzhou-internal-test-1',
      'endpoint' => 'pcdn.aliyuncs.com',
    ),
    21 => 
    array (
      'regionId' => 'cn-hangzhou-internal-test-2',
      'endpoint' => 'pcdn.aliyuncs.com',
    ),
    22 => 
    array (
      'regionId' => 'cn-hangzhou-internal-test-3',
      'endpoint' => 'pcdn.aliyuncs.com',
    ),
    23 => 
    array (
      'regionId' => 'cn-hangzhou-test-306',
      'endpoint' => 'pcdn.aliyuncs.com',
    ),
    24 => 
    array (
      'regionId' => 'cn-hongkong',
      'endpoint' => 'pcdn.aliyuncs.com',
    ),
    25 => 
    array (
      'regionId' => 'cn-hongkong-finance-pop',
      'endpoint' => 'pcdn.aliyuncs.com',
    ),
    26 => 
    array (
      'regionId' => 'cn-huhehaote',
      'endpoint' => 'pcdn.aliyuncs.com',
    ),
    27 => 
    array (
      'regionId' => 'cn-huhehaote-nebula-1',
      'endpoint' => 'pcdn.aliyuncs.com',
    ),
    28 => 
    array (
      'regionId' => 'cn-north-2-gov-1',
      'endpoint' => 'pcdn.aliyuncs.com',
    ),
    29 => 
    array (
      'regionId' => 'cn-qingdao',
      'endpoint' => 'pcdn.aliyuncs.com',
    ),
    30 => 
    array (
      'regionId' => 'cn-qingdao-nebula',
      'endpoint' => 'pcdn.aliyuncs.com',
    ),
    31 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'pcdn.aliyuncs.com',
    ),
    32 => 
    array (
      'regionId' => 'cn-shanghai-et15-b01',
      'endpoint' => 'pcdn.aliyuncs.com',
    ),
    33 => 
    array (
      'regionId' => 'cn-shanghai-et2-b01',
      'endpoint' => 'pcdn.aliyuncs.com',
    ),
    34 => 
    array (
      'regionId' => 'cn-shanghai-finance-1',
      'endpoint' => 'pcdn.aliyuncs.com',
    ),
    35 => 
    array (
      'regionId' => 'cn-shanghai-inner',
      'endpoint' => 'pcdn.aliyuncs.com',
    ),
    36 => 
    array (
      'regionId' => 'cn-shanghai-internal-test-1',
      'endpoint' => 'pcdn.aliyuncs.com',
    ),
    37 => 
    array (
      'regionId' => 'cn-shenzhen',
      'endpoint' => 'pcdn.aliyuncs.com',
    ),
    38 => 
    array (
      'regionId' => 'cn-shenzhen-finance-1',
      'endpoint' => 'pcdn.aliyuncs.com',
    ),
    39 => 
    array (
      'regionId' => 'cn-shenzhen-inner',
      'endpoint' => 'pcdn.aliyuncs.com',
    ),
    40 => 
    array (
      'regionId' => 'cn-shenzhen-st4-d01',
      'endpoint' => 'pcdn.aliyuncs.com',
    ),
    41 => 
    array (
      'regionId' => 'cn-shenzhen-su18-b01',
      'endpoint' => 'pcdn.aliyuncs.com',
    ),
    42 => 
    array (
      'regionId' => 'cn-wuhan',
      'endpoint' => 'pcdn.aliyuncs.com',
    ),
    43 => 
    array (
      'regionId' => 'cn-wulanchabu',
      'endpoint' => 'pcdn.aliyuncs.com',
    ),
    44 => 
    array (
      'regionId' => 'cn-yushanfang',
      'endpoint' => 'pcdn.aliyuncs.com',
    ),
    45 => 
    array (
      'regionId' => 'cn-zhangbei',
      'endpoint' => 'pcdn.aliyuncs.com',
    ),
    46 => 
    array (
      'regionId' => 'cn-zhangbei-na61-b01',
      'endpoint' => 'pcdn.aliyuncs.com',
    ),
    47 => 
    array (
      'regionId' => 'cn-zhangjiakou',
      'endpoint' => 'pcdn.aliyuncs.com',
    ),
    48 => 
    array (
      'regionId' => 'cn-zhangjiakou-na62-a01',
      'endpoint' => 'pcdn.aliyuncs.com',
    ),
    49 => 
    array (
      'regionId' => 'cn-zhengzhou-nebula-1',
      'endpoint' => 'pcdn.aliyuncs.com',
    ),
    50 => 
    array (
      'regionId' => 'eu-central-1',
      'endpoint' => 'pcdn.aliyuncs.com',
    ),
    51 => 
    array (
      'regionId' => 'eu-west-1',
      'endpoint' => 'pcdn.aliyuncs.com',
    ),
    52 => 
    array (
      'regionId' => 'eu-west-1-oxs',
      'endpoint' => 'pcdn.aliyuncs.com',
    ),
    53 => 
    array (
      'regionId' => 'me-east-1',
      'endpoint' => 'pcdn.aliyuncs.com',
    ),
    54 => 
    array (
      'regionId' => 'rus-west-1-pop',
      'endpoint' => 'pcdn.aliyuncs.com',
    ),
    55 => 
    array (
      'regionId' => 'us-east-1',
      'endpoint' => 'pcdn.aliyuncs.com',
    ),
    56 => 
    array (
      'regionId' => 'us-west-1',
      'endpoint' => 'pcdn.aliyuncs.com',
    ),
  ),
);
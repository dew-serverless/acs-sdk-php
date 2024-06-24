<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'CarbonFootprint',
    'version' => '2023-07-11',
  ),
  'directories' => 
  array (
    0 => 'Allow',
    1 => 'GetSummaryData',
    2 => 'QueryCarbonTrack',
    3 => 'Verify',
    4 => 'QueryMultiAccountCarbonTrack',
  ),
  'components' => 
  array (
    'schemas' => 
    array (
    ),
  ),
  'apis' => 
  array (
    'Allow' => 
    array (
      'summary' => '开通授权。',
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
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
            'title' => 'scheme',
            'description' => 'scheme',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID，阿里云为该请求生成的标识符。',
                'type' => 'string',
                'example' => 'A009DA1A-46BD-5C72-A713-EEB82249120D',
              ),
              'Data' => 
              array (
                'description' => '请求成功返回true',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"A009DA1A-46BD-5C72-A713-EEB82249120D\\",\\n  \\"Data\\": true\\n}","type":"json"}]',
      'title' => '云产品碳足迹授权',
      'description' => '1. 申请子账号
2. 为子账号添加系统策略AliyunCarbonFootprintFullAccess',
    ),
    'GetSummaryData' => 
    array (
      'summary' => '获取汇总数据。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查数据开始时间，格式：2023-01-01 00:00:00',
            'type' => 'string',
            'required' => false,
            'example' => '2023-01-01 00:00:00

',
          ),
        ),
        1 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查数据结束时间，格式：2023-02-01 23:59:59',
            'type' => 'string',
            'required' => false,
            'example' => '2023-02-01 23:59:59

',
          ),
        ),
        2 => 
        array (
          'name' => 'Group',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '统计维度，productCode：按云产品统计；region：按区域维度统计；subUid按RAM子用户统计，不传按主账号维度统计',
            'type' => 'string',
            'required' => false,
            'example' => 'productCode',
          ),
        ),
        3 => 
        array (
          'name' => 'Uids',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '需要查询数据的主账号id的list，开通多账号管理后传入',
            'type' => 'array',
            'items' => 
            array (
              'description' => '阿里云账号id',
              'type' => 'string',
              'required' => false,
              'example' => '1626925837172237',
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
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => '88FC75E3-BFFD-50B3-988D-C08E6B795CFD',
              ),
              'Data' => 
              array (
                'description' => '数据信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'ThisMonthConsumptionConversion' => 
                  array (
                    'description' => '最新月份的碳排放量，单位kgCO₂e',
                    'type' => 'string',
                    'example' => '193.47',
                  ),
                  'LastMonthConsumptionConversion' => 
                  array (
                    'description' => '最新月份的上一个月的碳排放量，单位kgCO₂e',
                    'type' => 'string',
                    'example' => '301.83',
                  ),
                  'ThisYearConsumptionConversion' => 
                  array (
                    'description' => '最新月份所在年份的碳排放量，单位kgCO₂e',
                    'type' => 'string',
                    'example' => '1621.06',
                  ),
                  'LastYearConsumptionConversion' => 
                  array (
                    'description' => '上一年度同期的累计碳排放量，单位kgCO₂e',
                    'type' => 'string',
                    'example' => '1074.53',
                  ),
                  'LastYearConsumptionConversionSum' => 
                  array (
                    'description' => '上一年度全年的碳排放总量，单位kgCO₂e',
                    'type' => 'string',
                    'example' => '2844.58',
                  ),
                  'LatestDataTime' => 
                  array (
                    'description' => '最后数据更新时间',
                    'type' => 'string',
                    'example' => '2023-06-01 00:00:00',
                  ),
                  'TotalCarbonConsumptionConversion' => 
                  array (
                    'description' => '根据请求时间段统计的碳排放总量，单位kgCO₂e',
                    'type' => 'string',
                    'example' => '1621.06',
                  ),
                  'CarConsumptionConversion' => 
                  array (
                    'description' => '换算汽车碳排放量',
                    'type' => 'string',
                    'example' => '10',
                  ),
                  'AircraftConsumptionConversion' => 
                  array (
                    'description' => '换算飞机碳排放量',
                    'type' => 'string',
                    'example' => '5.2',
                  ),
                  'TreeConsumptionConversion' => 
                  array (
                    'description' => '换算树木的碳吸收量',
                    'type' => 'string',
                    'example' => '90.8',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"88FC75E3-BFFD-50B3-988D-C08E6B795CFD\\",\\n  \\"Data\\": {\\n    \\"ThisMonthConsumptionConversion\\": \\"193.47\\",\\n    \\"LastMonthConsumptionConversion\\": \\"301.83\\",\\n    \\"ThisYearConsumptionConversion\\": \\"1621.06\\",\\n    \\"LastYearConsumptionConversion\\": \\"1074.53\\",\\n    \\"LastYearConsumptionConversionSum\\": \\"2844.58\\",\\n    \\"LatestDataTime\\": \\"2023-06-01 00:00:00\\",\\n    \\"TotalCarbonConsumptionConversion\\": \\"1621.06\\",\\n    \\"CarConsumptionConversion\\": \\"10\\",\\n    \\"AircraftConsumptionConversion\\": \\"5.2\\",\\n    \\"TreeConsumptionConversion\\": \\"90.8\\"\\n  }\\n}","type":"json"}]',
      'title' => '云产品碳足迹数据汇总',
    ),
    'QueryCarbonTrack' => 
    array (
      'summary' => '查询碳足迹。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'startTime',
            'description' => '查数据开始时间，格式：2023-01-01 00:00:00',
            'type' => 'string',
            'required' => false,
            'example' => '2023-01-01 00:00:00

',
          ),
        ),
        1 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'endTime',
            'description' => '查数据结束时间，格式：2023-02-01 23:59:59',
            'type' => 'string',
            'required' => false,
            'example' => '2023-02-01 23:59:59',
          ),
        ),
        2 => 
        array (
          'name' => 'Group',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '统计维度，productCode：按云产品统计；region：按区域维度统计；subUid按RAM子用户统计，不传按主账号维度统计',
            'type' => 'string',
            'required' => false,
            'example' => 'productCode',
          ),
        ),
        3 => 
        array (
          'name' => 'Uids',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '需要查询数据的主账号id的list，开通多账号管理后传入',
            'type' => 'array',
            'items' => 
            array (
              'description' => '阿里云账号id',
              'type' => 'string',
              'required' => false,
              'example' => '1712396608700110',
            ),
            'required' => false,
          ),
        ),
        4 => 
        array (
          'name' => 'FilterRDAccount',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否统计多账号的碳排放明细，开通多账号管理可后传入，不传默认否，0：否，1：是',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
          ),
        ),
        5 => 
        array (
          'name' => 'TopNum',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '按照返回值的数据值倒序排序后，只返回前TopNum条数据，不传默认返回全部数据',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        6 => 
        array (
          'name' => 'UseCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '返回值是否使用code作为标识，不传默认使用code，0：不使用，1：使用。
例如返回值为按照云产品维度汇总碳排放时，云服务器的标识在传0时为“ecs”，传1时为“弹性计算ECS”。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'result',
            'description' => 'result',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'B9AA726D-92A2-5F37-8D42-6C0AA3C67C0F',
              ),
              'Data' => 
              array (
                'description' => '数据列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '数据详情',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Uid' => 
                    array (
                      'description' => '主账号ID',
                      'type' => 'string',
                      'example' => '1665635164411336',
                    ),
                    'SubUid' => 
                    array (
                      'description' => 'RAM子账号ID',
                      'type' => 'string',
                      'example' => '251538859557084260',
                    ),
                    'ProductCode' => 
                    array (
                      'description' => '产品code',
                      'type' => 'string',
                      'example' => 'ecs',
                    ),
                    'Region' => 
                    array (
                      'description' => '云产品区域',
                      'type' => 'string',
                      'example' => 'cn-beijing',
                    ),
                    'QuotaValue' => 
                    array (
                      'description' => '根据请求时间统计的碳排放量，单位kgCO₂e',
                      'type' => 'number',
                      'format' => 'double',
                      'example' => '1.23',
                    ),
                    'StatisticsDate' => 
                    array (
                      'description' => '统计日期，毫秒时间戳',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1672502400000',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"B9AA726D-92A2-5F37-8D42-6C0AA3C67C0F\\",\\n  \\"Data\\": [\\n    {\\n      \\"Uid\\": \\"1665635164411336\\",\\n      \\"SubUid\\": \\"251538859557084260\\",\\n      \\"ProductCode\\": \\"ecs\\",\\n      \\"Region\\": \\"cn-beijing\\",\\n      \\"QuotaValue\\": 1.23,\\n      \\"StatisticsDate\\": 1672502400000\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '云产品碳足迹列表查询',
    ),
    'Verify' => 
    array (
      'summary' => '账号校验。',
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
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'The response parameters.
',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => 'The request ID.
',
                'type' => 'string',
                'example' => '49857457-0425-545D-A7A2-9632B43BE2CE',
              ),
              'Data' => 
              array (
                'description' => 'The data records.
',
                'type' => 'object',
                'properties' => 
                array (
                  'code' => 
                  array (
                    'description' => 'The error code.
',
                    'type' => 'string',
                    'example' => '200',
                  ),
                  'message' => 
                  array (
                    'description' => 'The error message.
',
                    'type' => 'string',
                    'example' => 'success',
                  ),
                  'AllowedUids' => 
                  array (
                    'description' => 'The IDs of the returned Alibaba Cloud accounts that have the required permissions.
',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => 'The ID of the Alibaba Cloud account that has the required permissions.
',
                      'type' => 'string',
                      'example' => '1665635164411336',
                    ),
                  ),
                  'accountType' => 
                  array (
                    'description' => 'Resource directory account type. 0: not connected, 1: RD member account, 2: RD delegated administrator, 3: RD master administrator',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'multiAccountsAllow' => 
                  array (
                    'description' => 'Whether multi-account management is enabled for the current Alibaba Cloud account. 0:no, 1:yes',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'allMultiAccountUids' => 
                  array (
                    'description' => 'A list of all Alibaba Cloud accounts in the resource directory that you have permission to view (returned only when multi-account management is enabled).',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'accountId' => 
                        array (
                          'description' => 'The ID of Alibaba Cloud account.',
                          'type' => 'string',
                          'example' => '1673123142778211',
                        ),
                        'displayName' => 
                        array (
                          'description' => 'The username of Alibaba Cloud account.',
                          'type' => 'string',
                          'example' => 'test_account',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"49857457-0425-545D-A7A2-9632B43BE2CE\\",\\n  \\"Data\\": {\\n    \\"code\\": \\"200\\",\\n    \\"message\\": \\"success\\",\\n    \\"AllowedUids\\": [\\n      \\"1665635164411336\\"\\n    ],\\n    \\"accountType\\": 0,\\n    \\"multiAccountsAllow\\": 0,\\n    \\"allMultiAccountUids\\": [\\n      {\\n        \\"accountId\\": \\"1673123142778211\\",\\n        \\"displayName\\": \\"test_account\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '当前账号权限校验',
    ),
    'QueryMultiAccountCarbonTrack' => 
    array (
      'summary' => '获取账号碳足迹明细数据。',
      'methods' => 
      array (
        0 => 'get',
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
        'operationType' => 'none',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查数据开始时间，格式：2023-01',
            'type' => 'string',
            'required' => false,
            'example' => '2023-01',
          ),
        ),
        1 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查数据开始时间，格式：2023-10',
            'type' => 'string',
            'required' => false,
            'example' => '2023-10',
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
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => '49857457-0425-545D-A7A2-9632B43BE2CE',
              ),
              'Data' => 
              array (
                'description' => '数据列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '数据详情',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Month' => 
                    array (
                      'description' => '在查询时间范围内某月',
                      'type' => 'string',
                      'example' => '2023-01',
                    ),
                    'Uid' => 
                    array (
                      'description' => '主账号ID',
                      'type' => 'string',
                      'example' => '1665635164411336',
                    ),
                    'ProductCode' => 
                    array (
                      'description' => '产品code',
                      'type' => 'string',
                      'example' => 'ecs',
                    ),
                    'Region' => 
                    array (
                      'description' => '云产品区域',
                      'type' => 'string',
                      'example' => 'cn-beijing',
                    ),
                    'CarbonActualEmission' => 
                    array (
                      'description' => '碳排放量，单位kgCO₂e',
                      'type' => 'string',
                      'example' => '0.0650967',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"49857457-0425-545D-A7A2-9632B43BE2CE\\",\\n  \\"Data\\": [\\n    {\\n      \\"Month\\": \\"2023-01\\",\\n      \\"Uid\\": \\"1665635164411336\\",\\n      \\"ProductCode\\": \\"ecs\\",\\n      \\"Region\\": \\"cn-beijing\\",\\n      \\"CarbonActualEmission\\": \\"0.0650967\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '云产品碳足迹明细数据查询',
      'description' => '碳足迹明细数据的每条数据维度为：uid-月份-云产品-region。

若云账号开通了阿里云资源目录（Resource Directory），且是主管理员或委派管理员角色，则可以查询该资源目录下所有账号的碳足迹明细数据。

否则只能查询本账号的碳足迹明细数据。',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'carbonfootprint.aliyuncs.com',
    ),
  ),
);
<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'ROA',
    'product' => 'energyExpertExternal',
    'version' => '2022-09-23',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 190829,
      'title' => '碳排管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 
        array (
          'id' => 190830,
          'title' => '报送碳排放活动数据',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'GetDataItemList',
            1 => 'PushItemData',
            2 => 'RecalculateCarbonEmission',
          ),
        ),
        1 => 
        array (
          'id' => 190831,
          'title' => '查询产品碳足迹结果',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'GetFootprintList',
            1 => 'GenerateResult',
            2 => 'IsCompleted',
            3 => 'GetPcrInfo',
            4 => 'GetGwpInventorySummary',
            5 => 'GetGwpBenchmarkSummary',
            6 => 'GetEpdSummary',
            7 => 'GetInventoryList',
            8 => 'GetGwpBenchmarkList',
            9 => 'GetGwpInventoryConstitute',
            10 => 'GetEpdInventoryConstitute',
            11 => 'GetReductionProposal',
            12 => 'GetDataQualityAnalysis',
          ),
        ),
        2 => 
        array (
          'id' => 190832,
          'title' => '查询组织碳盘查结果',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'GetEmissionSummary',
            1 => 'GetEmissionSourceConstitute',
            2 => 'GetCarbonEmissionTrend',
            3 => 'GetElecConstitute',
            4 => 'GetElecTrend',
            5 => 'GetAreaElecConstitute',
            6 => 'GetGasConstitute',
            7 => 'GetOrgConstitute',
          ),
        ),
      ),
    ),
    1 => 
    array (
      'id' => 190833,
      'title' => '节能减碳',
      'type' => 'directory',
      'children' => 
      array (
        0 => 
        array (
          'id' => 190834,
          'title' => '报送能耗数据',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'PushDeviceData',
          ),
        ),
      ),
    ),
    2 => 
    array (
      'id' => 190763,
      'title' => '设备管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'GetOrgAndFactory',
        1 => 'GetDeviceList',
        2 => 'GetDeviceInfo',
      ),
    ),
    3 => 
    array (
      'id' => 192945,
      'title' => 'AI文档处理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'SubmitDocumentAnalyzeJob',
        1 => 'GetDocumentAnalyzeResult',
        2 => 'SendDocumentAskQuestion',
      ),
    ),
  ),
  'components' => 
  array (
    'schemas' => 
    array (
      'CarbonEmissionElecSummaryItem' => 
      array (
        'title' => '企业分析返回结构',
        'description' => '企业分析返回结构',
        'type' => 'object',
        'properties' => 
        array (
          'carbonEmissionData' => 
          array (
            'title' => '碳排排放当量',
            'description' => '碳排放当量。',
            'type' => 'number',
            'format' => 'double',
            'example' => '1.22',
          ),
          'rawData' => 
          array (
            'title' => '用电量',
            'description' => '用电量，单位Kwh。',
            'type' => 'number',
            'format' => 'double',
            'example' => '1.2',
          ),
          'ratio' => 
          array (
            'title' => '用电量占比',
            'description' => '用电量占比，取值范围0~1。',
            'type' => 'number',
            'format' => 'double',
            'example' => '0.22',
          ),
          'dataUnit' => 
          array (
            'title' => '单位',
            'description' => '单位',
            'type' => 'string',
            'example' => 'kg',
          ),
          'name' => 
          array (
            'title' => '企业名称',
            'description' => '企业名称。',
            'type' => 'string',
            'example' => 'xxx',
          ),
        ),
      ),
      'ConstituteItem' => 
      array (
        'title' => '构成分析列表结构',
        'description' => '构成分析列表结构',
        'type' => 'object',
        'properties' => 
        array (
          'enterpriseName' => 
          array (
            'title' => '企业名称',
            'description' => '企业名称',
            'type' => 'string',
            'example' => '企业1',
          ),
          'rawData' => 
          array (
            'title' => '原始数据',
            'description' => '原始数据',
            'type' => 'number',
            'format' => 'double',
            'example' => '1.2',
          ),
          'carbonEmissionData' => 
          array (
            'title' => '碳排放量',
            'description' => '碳排放量',
            'type' => 'number',
            'format' => 'double',
            'example' => '3.222',
          ),
          'ratio' => 
          array (
            'title' => '所占比例',
            'description' => '所占比例',
            'type' => 'number',
            'format' => 'double',
            'example' => '0.5',
          ),
          'nameKey' => 
          array (
            'title' => '名称唯一标识',
            'description' => '名称唯一标识',
            'type' => 'string',
            'example' => 'carbonInventory.check.indirect_emissions_from_imported_electricity',
          ),
          'name' => 
          array (
            'title' => '名称',
            'description' => '名称',
            'type' => 'string',
            'example' => '电力',
          ),
          'emissionSourceKey' => 
          array (
            'title' => '排放源唯一标识',
            'description' => '排放源唯一标识',
            'type' => 'string',
            'example' => 'carbonInventory.check.by_electricity_properties/carbonInventory.check.wind_electricity/carbonInventory.check.gec',
          ),
          'emissionSource' => 
          array (
            'title' => '排放源',
            'description' => '排放源',
            'type' => 'string',
            'example' => 'GEC',
          ),
          'dataUnit' => 
          array (
            'title' => '数据单位',
            'description' => '数据单位',
            'type' => 'string',
            'example' => 'kWh',
          ),
          'envGasEmissions' => 
          array (
            'title' => '气体排放详情列表',
            'description' => '气体排放详情列表',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'type' => 
                array (
                  'title' => '标识气体类型的唯一key',
                  'description' => '标识气体类型的唯一key',
                  'type' => 'string',
                  'example' => '1',
                ),
                'name' => 
                array (
                  'title' => '气体名称',
                  'description' => '气体名称',
                  'type' => 'string',
                  'example' => 'CO₂',
                ),
                'gasEmissionData' => 
                array (
                  'title' => '气体碳排放量',
                  'description' => '气体碳排放量',
                  'type' => 'number',
                  'format' => 'double',
                  'example' => '4.33',
                ),
                'carbonEmissionData' => 
                array (
                  'title' => 'carbonEmissionData' . "\0" . '	碳排放量',
                  'description' => '碳排放量',
                  'type' => 'number',
                  'format' => 'double',
                  'example' => '1.2',
                ),
              ),
            ),
            'required' => false,
          ),
          'subConstituteItems' => 
          array (
            'title' => '子级详情列表',
            'description' => '子级详情列表',
            'type' => 'array',
            'items' => 
            array (
              'description' => '下降排放列表',
              '$ref' => '#/components/schemas/ConstituteItem',
            ),
          ),
        ),
      ),
      'ContentItem' => 
      array (
        'title' => 'ContentItem',
        'description' => 'ContentItem',
        'type' => 'object',
        'properties' => 
        array (
          'score' => 
          array (
            'title' => '召回的置信度',
            'description' => '召回的置信度',
            'type' => 'number',
            'format' => 'double',
            'example' => '0.45',
          ),
          'type' => 
          array (
            'title' => '文本来源， img, table, para',
            'description' => '文本来源， img, table, para',
            'type' => 'string',
            'example' => 'img',
          ),
          'extInfo' => 
          array (
            'title' => '文本的坐标信息，是list形式',
            'description' => '文本的坐标信息，是list形式',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'alignment' => 
                array (
                  'title' => '版面对齐方式 枚举值：center, left, right',
                  'description' => '版面对齐方式 枚举值：center, left, right',
                  'type' => 'string',
                  'example' => 'center',
                ),
                'index' => 
                array (
                  'title' => '版面在文本中的序号',
                  'description' => '版面在文本中的序号',
                  'type' => 'integer',
                  'format' => 'int64',
                  'example' => '8',
                ),
                'level' => 
                array (
                  'title' => '版面的层级',
                  'description' => '版面的层级',
                  'type' => 'integer',
                  'format' => 'int64',
                  'example' => '2',
                ),
                'pageNum' => 
                array (
                  'title' => '版面的页码，可能包含多个页码',
                  'description' => '版面的页码，可能包含多个页码',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '页码，默认值 1。

',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1',
                  ),
                ),
                'pos' => 
                array (
                  'title' => '版面的位置信息，list',
                  'description' => '版面的位置信息，list',
                  'type' => 'array',
                  'items' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'x' => 
                      array (
                        'title' => 'int	版面的x坐标',
                        'description' => 'int	版面的x坐标',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '1',
                      ),
                      'y' => 
                      array (
                        'title' => '版面的y坐标',
                        'description' => '版面的y坐标',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '2',
                      ),
                    ),
                  ),
                ),
                'subType' => 
                array (
                  'title' => '版面的子类型 枚举值：picture, para, none',
                  'description' => '版面的子类型 枚举值：picture, para, none',
                  'type' => 'string',
                  'example' => 'picture',
                ),
                'text' => 
                array (
                  'title' => 'text',
                  'description' => 'text',
                  'type' => 'string',
                  'example' => '版面内容',
                ),
                'type' => 
                array (
                  'title' => '版面的类型 枚举值：table, figure, text，none',
                  'description' => '版面的类型 枚举值：table, figure, text，none',
                  'type' => 'string',
                  'example' => 'table',
                ),
                'uniqueId' => 
                array (
                  'title' => 'str	唯一的版面id',
                  'description' => 'str	唯一的版面id',
                  'type' => 'string',
                  'example' => '88c712db271443dd4e3697cb9b5dab3a',
                ),
              ),
            ),
          ),
          'text' => 
          array (
            'title' => '召回文本',
            'description' => '召回文本',
            'type' => 'string',
            'example' => '租户是xxx',
          ),
        ),
      ),
      'EpdInventoryConstituteItem' => 
      array (
        'title' => 'epd清单结构体',
        'description' => 'epd清单结构体',
        'type' => 'object',
        'properties' => 
        array (
          'inventoryValuePerProduct' => 
          array (
            'title' => '每功能单位活动数据',
            'description' => '每功能单位活动数据：只第三级不为空；数值保留24位小数，表示每功能单位活动数量；应当与inventoryValuePerProductUnit联合使用。',
            'type' => 'number',
            'format' => 'double',
            'example' => '1.000000000000000000000000',
          ),
          'factorDataset' => 
          array (
            'title' => 'factorDataset	因子所属数据库',
            'description' => 'factorDataset	因子所属数据库。该字段与factorType联合使用，当factorType为1，这里显示因子归属的数据名称；当factorType为2，factorId表示所引用产品id；当factorType为null，factorId无意义。此字段为新增字段，老数据可能没有此字段数据，显示为"/"。',
            'type' => 'string',
            'example' => '/',
          ),
          'percent' => 
          array (
            'title' => '所占比例',
            'description' => '所占比例，保留四位小数，返回31.4000表示占比31.4%的。第一级返回为null
；第二级返回当前工序占总排放百分比； 第三级返回当前清单占总排放百分比',
            'type' => 'number',
            'format' => 'double',
            'example' => '31.4000',
          ),
          'inventoryValuePerProductUnit' => 
          array (
            'title' => '每功能单位活动数据单位',
            'description' => '每功能单位活动数据单位。只第三级不为空。在清单信息中的表示每功能单位活动数据单位。',
            'type' => 'string',
            'example' => 'kg',
          ),
          'num' => 
          array (
            'title' => '类别key',
            'description' => '类别key，[参考附录](https://carbon-doc.oss-cn-hangzhou.aliyuncs.com/%E7%A2%B3%E8%B6%B3%E8%BF%B9%E9%99%84%E5%BD%95.pdf)。',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1',
          ),
          'quantity' => 
          array (
            'title' => '原始活动数据',
            'description' => '原始活动数据。只有第三级返回不为null，表示清单数量。',
            'type' => 'number',
            'format' => 'double',
            'example' => '1.000000000000',
          ),
          'resourceType' => 
          array (
            'title' => '清单类型',
            'description' => '清单类型。只有第三级返回不为null，第三级为清单详情，此字段表示清单的类型名称。',
            'type' => 'string',
            'example' => '原材料',
          ),
          'factorType' => 
          array (
            'title' => 'factorType	因子类型key',
            'description' => '因子类型key。只第三级不为空，清单信息中的factorType表示选用因子来源类型；可选值有1、2或者null：1：因子库 ，2：产品库。null表示并非从因子库、产品库选择的因子，因子来源于用户自行构造。',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '1',
          ),
          'unit' => 
          array (
            'title' => '环境影响结果值单位',
            'description' => '环境影响结果值单位。此单位为对应环境影响类别的环境影响结果值单位。比如kg CO2-Eq表示这里显示的排放值的单位是kg CO2-Eq。',
            'type' => 'string',
            'example' => 'kg CO2-Eq',
          ),
          'name' => 
          array (
            'title' => '名称',
            'description' => '名称。返回本级的名称，不同级的name含义不同。第一级返回为环境影响类型。第二级返回当前工序名称。第三级返回当前清单名称',
            'type' => 'string',
            'example' => '清单1',
          ),
          'inventoryId' => 
          array (
            'title' => '清单id',
            'description' => '清单id',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1',
          ),
          'inventoryValue' => 
          array (
            'title' => '清单数量',
            'description' => '清单数量。仅在第三级不为空。第三级为清单详情，此字段表示清单的id。应当与inventoryUnit联合使用。',
            'type' => 'number',
            'format' => 'double',
            'example' => '2.000000000000000000000000',
          ),
          'factorUnit' => 
          array (
            'title' => '因子单位',
            'description' => '因子单位',
            'type' => 'string',
            'example' => 'kg CO2-Eq/kg',
          ),
          'inventoryUnit' => 
          array (
            'title' => '清单单位',
            'description' => '清单单位',
            'type' => 'string',
            'example' => 't',
          ),
          'state' => 
          array (
            'title' => '数据状态',
            'description' => '数据状态。1表示准确计算，2表示采用默认数据，3表示采用0作为因子值参与计算。',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '1',
          ),
          'factor' => 
          array (
            'title' => '因子值',
            'description' => '因子值。只第三级不为空，清单信息中的factor表示所选因子的因子值。因子值保留小数点后四位小数，"1.0000"表示因子值为1。因子值应当结合factorUnit使用，如factorUnit为"kg CO2-Eq/kg"，那么表示该每1kg该清单碳排放为1kg CO2-Eq。',
            'type' => 'string',
            'example' => '1.0000',
          ),
          'carbonEmission' => 
          array (
            'title' => '排放量',
            'description' => '排放量。保留24位小数，建议进行截取部分使用。含义是各层级的排放量：
第一级表示当前环境影响类型下，该产品的总排放量；第二级表示当前环境影响类型下，该工序的总排放量；第三级表示当前环境影响类型下，该清单的总排放量。',
            'type' => 'number',
            'format' => 'double',
            'example' => '1009.976265540000000000000000000000',
          ),
          'factorId' => 
          array (
            'title' => '因子id',
            'description' => '因子id',
            'type' => 'string',
            'example' => '1234',
          ),
          'items' => 
          array (
            'title' => '子级列表',
            'description' => '子级列表',
            'type' => 'array',
            'items' => 
            array (
              'description' => '子级列表。第三级返回为null。',
              '$ref' => '#/components/schemas/EpdInventoryConstituteItem',
            ),
          ),
        ),
      ),
      'GwpInventoryConstitute' => 
      array (
        'title' => '温室气体构成',
        'description' => '温室气体构成',
        'type' => 'object',
        'properties' => 
        array (
          'percent' => 
          array (
            'title' => '排放百分比',
            'description' => '排放百分比，例如100.00是指100.00%的意思。',
            'type' => 'number',
            'format' => 'double',
            'example' => '100.00',
          ),
          'resourceType' => 
          array (
            'title' => '清单类型',
            'description' => '清单类型，可能的清单类型值可以参考[附录](https://carbon-doc.oss-cn-hangzhou.aliyuncs.com/%E7%A2%B3%E8%B6%B3%E8%BF%B9%E9%99%84%E5%BD%95.pdf)。',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '1',
          ),
          'unit' => 
          array (
            'title' => '单位',
            'description' => '单位',
            'type' => 'string',
            'example' => 'kgCO₂e/kg',
          ),
          'carbonEmission' => 
          array (
            'title' => '排放数量',
            'description' => '排放数量',
            'type' => 'number',
            'format' => 'double',
            'example' => '1009.976265540000000000000000000000',
          ),
          'name' => 
          array (
            'title' => '排放体名称',
            'description' => '名称',
            'type' => 'string',
            'example' => '总碳排放量',
          ),
          'byResourceType' => 
          array (
            'title' => '按类型聚合列表',
            'description' => '按类型聚合，各中类型的排放详情。用于组成分析中的“按类型”分析。这是一个嵌套结构，总碳排放量->按清单类型排序，共两层，最末级byResource为空。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '按类型聚合列表。按类型聚合，各中类型的排放详情。用于组成分析中的“按类型”分析。这是一个嵌套结构，总碳排放量->按清单类型排序，共两层，最末级byResource为空。',
              '$ref' => '#/components/schemas/GwpResourceConstitute',
            ),
          ),
          'items' => 
          array (
            'title' => '构成详情列表',
            'description' => '按层级从高到低的结构组织，按照环节->工序->清单层级。用于组成分析中的“按清单”分析。这是一个嵌套结构，按照环节->工序->清单层级，最末层级items为空。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '构成详情列表。按层级从高到低的结构组织，按照环节->工序->清单层级。用于组成分析中的“按清单”分析。这是一个嵌套结构，按照环节->工序->清单层级，最末层级items为空。',
              '$ref' => '#/components/schemas/GwpInventoryConstitute',
            ),
          ),
        ),
      ),
      'GwpResourceConstitute' => 
      array (
        'title' => '资源构成结构体',
        'description' => 'gwp清单碳排放结构。',
        'type' => 'object',
        'properties' => 
        array (
          'name' => 
          array (
            'title' => '名称',
            'description' => '名称。逐层含义不同，最外层是总碳排放量。',
            'type' => 'string',
            'example' => '总碳排放量',
          ),
          'unit' => 
          array (
            'title' => '单位',
            'description' => '排放单位。',
            'type' => 'string',
            'example' => 'kgCO₂e/Piece(s)',
          ),
          'resourceType' => 
          array (
            'title' => '清单类型',
            'description' => '清单类型。在清单层有意义，其它层可为空。',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '1',
          ),
          'carbonEmission' => 
          array (
            'title' => '碳排放当量',
            'description' => '碳排放量，为保证精度，保留24位小数，建议截取使用。',
            'type' => 'number',
            'format' => 'double',
            'example' => '1009.976265540000000000000000000000',
          ),
          'percent' => 
          array (
            'title' => '排放百分比',
            'description' => '排放百分比。98.76的表示98.76%的占比。',
            'type' => 'string',
            'example' => '98.76',
          ),
        ),
      ),
      'OrgEmission' => 
      array (
        'title' => '组织分析返回值结构',
        'description' => '组织分析返回值结构',
        'type' => 'object',
        'properties' => 
        array (
          'name' => 
          array (
            'title' => '企业名称',
            'description' => '企业名称',
            'type' => 'string',
            'example' => '企业1',
          ),
          'nameKey' => 
          array (
            'title' => '企业类型',
            'description' => '企业编码',
            'type' => 'string',
            'example' => 'Z-20240115-4',
          ),
          'carbonEmissionData' => 
          array (
            'title' => '碳排放当量',
            'description' => '碳排放当量',
            'type' => 'number',
            'format' => 'double',
            'example' => '1.2',
          ),
          'weightingCarbonEmissionData' => 
          array (
            'title' => '按股比计算碳排',
            'description' => '按股比计算碳排',
            'type' => 'number',
            'format' => 'double',
            'example' => '2.3',
          ),
          'weightingRatio' => 
          array (
            'title' => '股比碳排同比',
            'description' => '股比碳排同比',
            'type' => 'number',
            'format' => 'double',
            'example' => '0.4',
          ),
          'ratio' => 
          array (
            'title' => '碳排占比',
            'description' => '碳排占比',
            'type' => 'number',
            'format' => 'double',
            'example' => '0.2',
          ),
          'weightingProportion' => 
          array (
            'title' => '权重比例',
            'description' => '权重比例',
            'type' => 'number',
            'format' => 'double',
            'example' => '0.3',
          ),
          'moduleEmissionList' => 
          array (
            'title' => '分模块碳排数据',
            'description' => '分模块碳排数据',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'name' => 
                array (
                  'title' => '模块名',
                  'description' => '模块名',
                  'type' => 'string',
                  'example' => '范围一：直接排放（企业生产经营过程产生的直接温室气体排放量）',
                ),
                'nameKey' => 
                array (
                  'title' => '模块key',
                  'description' => '模块key',
                  'type' => 'string',
                  'example' => 'carbonInventory.check.scope_1_direct_ghg_emissions',
                ),
                'carbonEmissionData' => 
                array (
                  'title' => '碳排量',
                  'description' => '碳排量',
                  'type' => 'number',
                  'format' => 'double',
                  'example' => '1.2',
                ),
                'ratio' => 
                array (
                  'title' => '碳排量占比',
                  'description' => '碳排量占比',
                  'type' => 'number',
                  'format' => 'double',
                  'example' => '0.2',
                ),
              ),
            ),
          ),
          'subEmissionItems' => 
          array (
            'title' => '子级数据，即组织下的场地数据',
            'description' => '子级数据，即组织下的场地数据',
            'type' => 'array',
            'items' => 
            array (
              'description' => '下级企业列表',
              '$ref' => '#/components/schemas/OrgEmission',
            ),
          ),
        ),
      ),
    ),
  ),
  'apis' => 
  array (
    'GetDataItemList' => 
    array (
      'summary' => '本接口用于获取数据项详情列表。',
      'path' => '/api/v1/carbon/emission/data/item/list',
      'methods' => 
      array (
        0 => 'post',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求参数',
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'description' => '企业编码',
                'type' => 'string',
                'required' => true,
                'example' => 'C-202302-01',
              ),
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
            'description' => '返回结构体',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '83A5A7DD-8974-5769-952E-590A97BEA34E',
              ),
              'data' => 
              array (
                'description' => '返回数据',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'unit' => 
                    array (
                      'description' => '单位',
                      'type' => 'string',
                      'example' => 'kg',
                    ),
                    'period' => 
                    array (
                      'description' => '数据填报方式，
1：月度值 2：年度值。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'code' => 
                    array (
                      'description' => 'API数据标识。',
                      'type' => 'string',
                      'example' => 'demo_api_code',
                    ),
                    'name' => 
                    array (
                      'description' => '数据项名称。',
                      'type' => 'string',
                      'example' => '锅炉数据',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"83A5A7DD-8974-5769-952E-590A97BEA34E\\",\\n  \\"data\\": [\\n    {\\n      \\"unit\\": \\"kg\\",\\n      \\"period\\": 1,\\n      \\"code\\": \\"demo_api_code\\",\\n      \\"name\\": \\"锅炉数据\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '获取数据项详情列表',
      'description' => '- 用于获取当前企业下数据项详情列表',
    ),
    'PushItemData' => 
    array (
      'summary' => '推送数据项数据。',
      'path' => '/api/v1/carbon/emission/data/item/push',
      'methods' => 
      array (
        0 => 'post',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体参数',
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'description' => '企业编码',
                'type' => 'string',
                'required' => true,
                'example' => 'C-20210223-01',
              ),
              'year' => 
              array (
                'description' => '年份。',
                'type' => 'string',
                'required' => true,
                'example' => '2024',
              ),
              'items' => 
              array (
                'description' => '推送数据列表。',
                'type' => 'object',
                'properties' => 
                array (
                  'code' => 
                  array (
                    'description' => 'API数据标识。字段获取详见<props="china">[GetDataItemList](https://help.aliyun.com/zh/energy-expert/developer-reference/api-energyexpertexternal-2022-09-23-getdataitemlist)。</props>
<props="intl">[GetDataItemList](https://www.alibabacloud.com/help/zh/energy-expert/developer-reference/api-energyexpertexternal-2022-09-23-getdataitemlist)。</props>',
                    'type' => 'string',
                    'required' => true,
                    'example' => 'demo_api_code',
                  ),
                  'month' => 
                  array (
                    'description' => '月份。',
                    'type' => 'string',
                    'required' => true,
                    'example' => '1',
                  ),
                  'value' => 
                  array (
                    'description' => '数据项数据数值。',
                    'type' => 'number',
                    'format' => 'double',
                    'required' => true,
                    'example' => '1.11',
                  ),
                ),
                'required' => true,
              ),
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
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '83A5A7DD-8974-5769-952E-590A97BEA34E',
              ),
              'data' => 
              array (
                'description' => '数据是否推送成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"83A5A7DD-8974-5769-952E-590A97BEA34E\\",\\n  \\"data\\": true\\n}","type":"json"}]',
      'title' => '推送数据项数据',
      'description' => '- 本接口用于推送数据项数据。
- 数据项数据可以关联到碳足迹、碳盘查等服务。
- 根据平台配置，支持按年、按月推送数据。',
    ),
    'RecalculateCarbonEmission' => 
    array (
      'summary' => '重新计算碳排放。',
      'path' => '/api/v1/carbon/emission/data/item/recalculate',
      'methods' => 
      array (
        0 => 'post',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求参数',
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'description' => '企业编码',
                'type' => 'string',
                'required' => true,
                'example' => 'C-20240202-01',
              ),
              'year' => 
              array (
                'description' => '盘查年份',
                'type' => 'string',
                'required' => true,
                'example' => '2024',
              ),
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
            'description' => '返回结构体',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '83A5A7DD-8974-5769-952E-590A97BEA34E',
              ),
              'data' => 
              array (
                'description' => '返回数据，true表示请求成功，false表示请求失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"83A5A7DD-8974-5769-952E-590A97BEA34E\\",\\n  \\"data\\": true\\n}","type":"json"}]',
      'title' => '碳盘查重新计算',
      'description' => '- 完成数据项上传后，需要调用此接口对碳盘查数据进行重新计算。',
    ),
    'GetFootprintList' => 
    array (
      'summary' => '获取产品碳足迹列表。',
      'path' => '/api/v1/carbon/footprint/product/list',
      'methods' => 
      array (
        0 => 'post',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求参数',
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'description' => '企业编码',
                'type' => 'string',
                'required' => true,
                'example' => 'C-20080808-1',
              ),
              'currentPage' => 
              array (
                'description' => '分页参数，页码，从1开始。',
                'type' => 'integer',
                'format' => 'int64',
                'required' => true,
                'example' => '1',
              ),
              'pageSize' => 
              array (
                'description' => '分页大小。',
                'type' => 'integer',
                'format' => 'int64',
                'required' => true,
                'example' => '10',
              ),
              'productType' => 
              array (
                'description' => '产品类型: 1表示请求产品碳足迹，5表示请求供应链碳足迹。',
                'type' => 'integer',
                'format' => 'int64',
                'required' => true,
                'example' => '1',
              ),
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
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求id，每次请求都是唯一值，便于后续排查问题。',
                'type' => 'string',
                'example' => '06DA2909-7736-5738-AA31-ACD617D828F1',
              ),
              'data' => 
              array (
                'description' => '返回数据',
                'type' => 'object',
                'properties' => 
                array (
                  'currentPage' => 
                  array (
                    'description' => '当前页码。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1',
                  ),
                  'pageSize' => 
                  array (
                    'description' => '分页大小。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '10',
                  ),
                  'records' => 
                  array (
                    'description' => '产品详情列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '产品信息结构体',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'id' => 
                        array (
                          'description' => '产品id',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1024',
                        ),
                        'name' => 
                        array (
                          'description' => '产品名称',
                          'type' => 'string',
                          'example' => '演示产品',
                        ),
                        'authStatus' => 
                        array (
                          'description' => '认证状态枚举值，[参考附录](https://carbon-doc.oss-cn-hangzhou.aliyuncs.com/%E7%A2%B3%E8%B6%B3%E8%BF%B9%E9%99%84%E5%BD%95.pdf)。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1',
                        ),
                        'amount' => 
                        array (
                          'description' => '产品数量',
                          'type' => 'number',
                          'format' => 'double',
                          'example' => '100.0000000000000000000000000',
                        ),
                        'checkStartTime' => 
                        array (
                          'description' => '计算开始时间',
                          'type' => 'string',
                          'example' => '2024/01/01',
                        ),
                        'checkEndTime' => 
                        array (
                          'description' => '计算结束时间',
                          'type' => 'string',
                          'example' => '2024/01/31',
                        ),
                        'createdBy' => 
                        array (
                          'description' => '创建者',
                          'type' => 'string',
                          'example' => 'Energy Expert',
                        ),
                        'code' => 
                        array (
                          'description' => '所属企业编码',
                          'type' => 'string',
                          'example' => 'C-20080808-1',
                        ),
                        'isDemoModel' => 
                        array (
                          'description' => '是否是展示模型，1为真值，0为假值，真值表示系统内置的演示模型',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1',
                        ),
                        'lifeCycle' => 
                        array (
                          'description' => '与lifeCycleType对应的文字表述，`从摇篮到大门`或者`从摇篮到坟墓`。',
                          'type' => 'string',
                          'example' => '从摇篮到大门',
                        ),
                        'lifeCycleType' => 
                        array (
                          'description' => '1是从摇篮到大门，2是从摇篮到坟墓。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1',
                        ),
                        'type' => 
                        array (
                          'description' => '产品分类枚举值，[参考附录](https://carbon-doc.oss-cn-hangzhou.aliyuncs.com/%E7%A2%B3%E8%B6%B3%E8%BF%B9%E9%99%84%E5%BD%95.pdf)。',
                          'type' => 'string',
                          'example' => '158-159',
                        ),
                        'unit' => 
                        array (
                          'description' => '单位枚举值，[参考附录](https://carbon-doc.oss-cn-hangzhou.aliyuncs.com/%E7%A2%B3%E8%B6%B3%E8%BF%B9%E9%99%84%E5%BD%95.pdf)。',
                          'type' => 'string',
                          'example' => '1-4',
                        ),
                      ),
                    ),
                  ),
                  'total' => 
                  array (
                    'description' => '总记录数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '21',
                  ),
                  'totalPage' => 
                  array (
                    'description' => '总页数',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '3',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"06DA2909-7736-5738-AA31-ACD617D828F1\\",\\n  \\"data\\": {\\n    \\"currentPage\\": 1,\\n    \\"pageSize\\": 10,\\n    \\"records\\": [\\n      {\\n        \\"id\\": 1024,\\n        \\"name\\": \\"演示产品\\",\\n        \\"authStatus\\": 1,\\n        \\"amount\\": 100,\\n        \\"checkStartTime\\": \\"2024/01/01\\",\\n        \\"checkEndTime\\": \\"2024/01/31\\",\\n        \\"createdBy\\": \\"Energy Expert\\",\\n        \\"code\\": \\"C-20080808-1\\",\\n        \\"isDemoModel\\": 1,\\n        \\"lifeCycle\\": \\"从摇篮到大门\\",\\n        \\"lifeCycleType\\": 1,\\n        \\"type\\": \\"158-159\\",\\n        \\"unit\\": \\"1-4\\"\\n      }\\n    ],\\n    \\"total\\": 21,\\n    \\"totalPage\\": 3\\n  }\\n}","type":"json"}]',
      'title' => '获取产品碳足迹列表',
    ),
    'GenerateResult' => 
    array (
      'summary' => '生成指定碳足迹的报告。',
      'path' => '/api/v1/carbon/footprint/result/generate',
      'methods' => 
      array (
        0 => 'post',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求参数。',
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'description' => '企业编码',
                'type' => 'string',
                'required' => true,
                'example' => 'C-20080808-1',
              ),
              'productId' => 
              array (
                'description' => '产品id',
                'type' => 'integer',
                'format' => 'int64',
                'required' => true,
                'example' => '1024',
              ),
              'productType' => 
              array (
                'description' => '产品类型: 1表示请求产品碳足迹，5表示请求供应链碳足迹。',
                'type' => 'integer',
                'format' => 'int64',
                'required' => true,
                'example' => '1',
              ),
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
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求id，每次请求都是唯一值，便于后续排查问题。',
                'type' => 'string',
                'example' => '83A5A7DD-8974-5769-952E-590A97BEA34E',
              ),
              'data' => 
              array (
                'description' => '返回数据，true表示请求成功，false表示请求失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"83A5A7DD-8974-5769-952E-590A97BEA34E\\",\\n  \\"data\\": true\\n}","type":"json"}]',
      'title' => '生成碳足迹结果',
      'description' => '用户指定产品id，本接口产生一个任务，用于生成对应产品的碳足迹结果。任务状态可通过生成报告完成状态查询接口获得。结果生成后，其余结果查询页的显示内容方可调用。',
    ),
    'IsCompleted' => 
    array (
      'summary' => '生成报告完成状态查询。',
      'path' => '/api/v1/carbon/footprint/result/completed',
      'methods' => 
      array (
        0 => 'post',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求参数。',
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'description' => '企业编码。',
                'type' => 'string',
                'required' => true,
                'example' => 'C-20080808-1',
              ),
              'productId' => 
              array (
                'description' => '产品id。',
                'type' => 'integer',
                'format' => 'int64',
                'required' => true,
                'example' => '1024',
              ),
              'productType' => 
              array (
                'description' => '产品类型: 1表示请求产品碳足迹，5表示请求供应链碳足迹。',
                'type' => 'integer',
                'format' => 'int64',
                'required' => true,
                'example' => '1',
              ),
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
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求id，每次请求都是唯一值，便于后续排查问题。',
                'type' => 'string',
                'example' => '83A5A7DD-8974-5769-952E-590A97BEA34E',
              ),
              'data' => 
              array (
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'modifiedTime' => 
                  array (
                    'description' => '状态更新时间，毫秒时间戳，例如：1711438780000。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1711438780000',
                  ),
                  'taskKey' => 
                  array (
                    'description' => '本次生成任务的唯一键。',
                    'type' => 'string',
                    'example' => '550c2b7b-f2e0-4176-ab0a-53ea4b355721',
                  ),
                  'taskShortResult' => 
                  array (
                    'description' => '暂未使用，为空。',
                    'type' => 'string',
                    'example' => 'null',
                  ),
                  'taskStatus' => 
                  array (
                    'description' => '生成报告任务状态：可能值为running、success、error，含义分别为生成中、生成成功、生成失败。如果遇到结果生成失败，请检查模型并修正模型，而后再次生成结果页。',
                    'type' => 'string',
                    'example' => 'running',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"83A5A7DD-8974-5769-952E-590A97BEA34E\\",\\n  \\"data\\": {\\n    \\"modifiedTime\\": 1711438780000,\\n    \\"taskKey\\": \\"550c2b7b-f2e0-4176-ab0a-53ea4b355721\\",\\n    \\"taskShortResult\\": \\"null\\",\\n    \\"taskStatus\\": \\"running\\"\\n  }\\n}","type":"json"}]',
      'title' => '生成报告完成状态查询',
    ),
    'GetPcrInfo' => 
    array (
      'summary' => '获取产品碳足迹PCR报告oss地址。',
      'path' => '/api/v1/carbon/footprint/result/pcr/detail',
      'methods' => 
      array (
        0 => 'post',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求参数。',
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'description' => '企业编码。',
                'type' => 'string',
                'required' => true,
                'example' => 'C-20080808-1',
              ),
              'productId' => 
              array (
                'description' => '产品id。',
                'type' => 'string',
                'required' => true,
                'example' => '1024',
              ),
              'productType' => 
              array (
                'description' => '产品类型: 1表示请求产品碳足迹，5表示请求供应链碳足迹。',
                'type' => 'integer',
                'format' => 'int64',
                'required' => true,
                'example' => '1',
              ),
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
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求id，每次请求都是唯一值，便于后续排查问题。',
                'type' => 'string',
                'example' => '4A0AEC56-5C9A-5D47-93DF-7227836FFF82',
              ),
              'data' => 
              array (
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'createTime' => 
                  array (
                    'description' => '报告创建时间戳，格式为毫秒时间戳。',
                    'type' => 'string',
                    'example' => '1709109790532',
                  ),
                  'name' => 
                  array (
                    'description' => '报告名称。',
                    'type' => 'string',
                    'example' => '面包板-碳足迹报告2024-01-08 18:39:39.docx',
                  ),
                  'url' => 
                  array (
                    'description' => '报告url。',
                    'type' => 'string',
                    'example' => 'https://energy.aliyun.com',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"4A0AEC56-5C9A-5D47-93DF-7227836FFF82\\",\\n  \\"data\\": {\\n    \\"createTime\\": \\"1709109790532\\",\\n    \\"name\\": \\"面包板-碳足迹报告2024-01-08 18:39:39.docx\\",\\n    \\"url\\": \\"https://energy.aliyun.com\\"\\n  }\\n}","type":"json"}]',
      'title' => '获取产品碳足迹PCR报告oss地址',
    ),
    'GetGwpInventorySummary' => 
    array (
      'summary' => '本接口用于获得产品碳足迹总量，以及碳足迹贡献占比的Top4类型详情。',
      'path' => '/api/v1/carbon/footprint/result/gwp/inventory/summary',
      'methods' => 
      array (
        0 => 'post',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求参数。',
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'description' => '企业编码。',
                'type' => 'string',
                'required' => true,
                'example' => 'C-20080808-1',
              ),
              'productId' => 
              array (
                'description' => '产品id。',
                'type' => 'integer',
                'format' => 'int64',
                'required' => true,
                'example' => '1024',
              ),
              'productType' => 
              array (
                'description' => '产品类型: 1表示请求产品碳足迹，5表示请求供应链碳足迹。',
                'type' => 'integer',
                'format' => 'int64',
                'required' => true,
                'example' => '1',
              ),
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
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求id，每次请求都是唯一值，便于后续排查问题。',
                'type' => 'string',
                'example' => '83A5A7DD-8974-5769-952E-590A97BEA34E',
              ),
              'data' => 
              array (
                'description' => '返回结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'unit' => 
                  array (
                    'description' => '排放单位。',
                    'type' => 'string',
                    'example' => 'tCO₂e/Piece(s)',
                  ),
                  'quantity' => 
                  array (
                    'description' => '数量。',
                    'type' => 'number',
                    'format' => 'double',
                    'example' => '1.0100',
                  ),
                  'resultGenerateTime' => 
                  array (
                    'description' => '计算结果生成时间，格式为毫秒时间戳。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1709108026000',
                  ),
                  'items' => 
                  array (
                    'description' => '碳足迹贡献占比的Top4类型详情。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'name' => 
                        array (
                          'description' => '清单类型名。',
                          'type' => 'string',
                          'example' => '电力清单',
                        ),
                        'unit' => 
                        array (
                          'description' => '单位。',
                          'type' => 'string',
                          'example' => 'kgCO₂e/Piece(s)',
                        ),
                        'quantity' => 
                        array (
                          'description' => '数量。',
                          'type' => 'number',
                          'format' => 'double',
                          'example' => '9.9763',
                        ),
                        'percent' => 
                        array (
                          'description' => '所占百分比。',
                          'type' => 'string',
                          'example' => '99.01',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"83A5A7DD-8974-5769-952E-590A97BEA34E\\",\\n  \\"data\\": {\\n    \\"unit\\": \\"tCO₂e/Piece(s)\\",\\n    \\"quantity\\": 1.01,\\n    \\"resultGenerateTime\\": 1709108026000,\\n    \\"items\\": [\\n      {\\n        \\"name\\": \\"电力清单\\",\\n        \\"unit\\": \\"kgCO₂e/Piece(s)\\",\\n        \\"quantity\\": 9.9763,\\n        \\"percent\\": \\"99.01\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '获取碳足迹总量',
      'description' => '用户指产品id，本接口返回获得已经生成结果页中的碳足迹总量数据，以及碳足迹贡献占比的Top4类型详情。可用于了解产品碳足迹总量和主要来源。',
    ),
    'GetGwpBenchmarkSummary' => 
    array (
      'summary' => '获取主动减碳量总量。',
      'path' => '/api/v1/carbon/footprint/result/gwp/benchmark/summary',
      'methods' => 
      array (
        0 => 'post',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求参数。',
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'description' => '企业编码。',
                'type' => 'string',
                'required' => true,
                'example' => 'C-20080808-1',
              ),
              'productId' => 
              array (
                'description' => '产品id。',
                'type' => 'integer',
                'format' => 'int64',
                'required' => true,
                'example' => '1024',
              ),
              'productType' => 
              array (
                'description' => '产品类型: 1表示请求产品碳足迹，5表示请求供应链碳足迹。',
                'type' => 'integer',
                'format' => 'int64',
                'required' => true,
                'example' => '1',
              ),
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
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求id，每次请求都是唯一值，便于后续排查问题。',
                'type' => 'string',
                'example' => '83A5A7DD-8974-5769-952E-590A97BEA34E',
              ),
              'data' => 
              array (
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'items' => 
                  array (
                    'description' => '减碳量贡献top4详情。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => 'Item详情。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'name' => 
                        array (
                          'description' => '减碳详情的名称。',
                          'type' => 'string',
                          'example' => '原材料',
                        ),
                        'percent' => 
                        array (
                          'description' => '排放百分比。字符串类型，数字保留两位小数。例如 "99.01"表示该类排放占总排放的99.01%，需要注意返回的字符串中本身不含百分号。',
                          'type' => 'string',
                          'example' => '99.01',
                        ),
                        'quantity' => 
                        array (
                          'description' => '排放数量。数值保留四位小数，一般地，建模下该值不会出现负数，但是用户可以构造出主动减碳量为负数的值。quantity和unit共同构成排放量，quantity和unit会自适应。当排放量大于1000kgCO₂e/productUnit时，那么quantity和unit会转换为以tCO₂e/productUnit单位的数值；当排放量小于1kgCO₂e/productUnit时，那么quantity和unit会转换为以gCO₂e/productUnit单位的数值；其他情况下，quantity保持unit为kgCO₂e/productUnit的数值。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '9.9763',
                        ),
                        'unit' => 
                        array (
                          'description' => '排放单位。默认为kgCO₂e/productUnit，productUnit为产品选择的单位。随着排放数量quantity的大小不同，unit会自适应转变为tCO₂e/productUnit或者gCO₂e/productUnit，具体转换规则见quantity栏的备注。',
                          'type' => 'string',
                          'example' => 'kgCO₂e/kg',
                        ),
                      ),
                    ),
                  ),
                  'quantity' => 
                  array (
                    'description' => '排放数量。数值保留四位小数，一般地，建模下该值不会出现负数，但是用户可以构造出主动减碳量为负数的值。quantity和unit共同构成排放量，quantity和unit会自适应。当排放量大于1000kgCO₂e/productUnit时，那么quantity和unit会转换为以tCO₂e/productUnit单位的数值；当排放量小于1kgCO₂e/productUnit时，那么quantity和unit会转换为以gCO₂e/productUnit单位的数值；其他情况下，quantity保持unit为kgCO₂e/productUnit的数值。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1000.0000',
                  ),
                  'unit' => 
                  array (
                    'description' => '排放单位。默认为kgCO₂e/productUnit，productUnit为产品选择的单位。随着排放数量quantity的大小不同，unit会自适应转变为tCO₂e/productUnit或者gCO₂e/productUnit，具体转换规则见quantity栏的备注。',
                    'type' => 'string',
                    'example' => 'kgCO₂e/t',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"83A5A7DD-8974-5769-952E-590A97BEA34E\\",\\n  \\"data\\": {\\n    \\"items\\": [\\n      {\\n        \\"name\\": \\"原材料\\",\\n        \\"percent\\": \\"99.01\\",\\n        \\"quantity\\": 9.9763,\\n        \\"unit\\": \\"kgCO₂e/kg\\"\\n      }\\n    ],\\n    \\"quantity\\": 1000,\\n    \\"unit\\": \\"kgCO₂e/t\\"\\n  }\\n}","type":"json"}]',
      'title' => '获取主动减碳量总量',
    ),
    'GetEpdSummary' => 
    array (
      'summary' => '获取各种环境影响排放总量。',
      'path' => '/api/v1/carbon/footprint/result/epd/summary',
      'methods' => 
      array (
        0 => 'post',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求参数。',
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'description' => '企业编码。',
                'type' => 'string',
                'required' => true,
                'example' => 'C-20080808-1',
              ),
              'productId' => 
              array (
                'description' => '产品id。',
                'type' => 'integer',
                'format' => 'int64',
                'required' => true,
                'example' => '1024',
              ),
              'productType' => 
              array (
                'description' => '产品类型: 1表示请求产品碳足迹，5表示请求供应链碳足迹。',
                'type' => 'integer',
                'format' => 'int64',
                'required' => true,
                'example' => '1',
              ),
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
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求id，每次请求都是唯一值，便于后续排查问题。',
                'type' => 'string',
                'example' => 'B91B5559-065A-55C3-8D75-DA218EBFD1DC',
              ),
              'data' => 
              array (
                'description' => '返回数据。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'carbonEmission' => 
                    array (
                      'description' => '排放量。为了保证中间过程的计算精度，结果值保留31位小数，推荐进行截取显示。排放量应配合环境影响结果值单位使用。',
                      'type' => 'number',
                      'format' => 'double',
                      'example' => '1009.976265540000000000000000000000',
                    ),
                    'indicator' => 
                    array (
                      'description' => '该环境影响采用的评价指标。',
                      'type' => 'string',
                      'example' => 'GWP100a',
                    ),
                    'key' => 
                    array (
                      'description' => '类别key。环境影响类别，目前最多支持19类，[参考附录](https://carbon-doc.oss-cn-hangzhou.aliyuncs.com/%E7%A2%B3%E8%B6%B3%E8%BF%B9%E9%99%84%E5%BD%95.pdf)。',
                      'type' => 'string',
                      'example' => 'gwp',
                    ),
                    'method' => 
                    array (
                      'description' => '计算方法标准。',
                      'type' => 'string',
                      'example' => 'CML v4.8 2016',
                    ),
                    'name' => 
                    array (
                      'description' => '类别名称。',
                      'type' => 'string',
                      'example' => '气候变化',
                    ),
                    'num' => 
                    array (
                      'description' => '类别num，环境影响类别唯一序号，目前最多支持19类，[参考附录](https://carbon-doc.oss-cn-hangzhou.aliyuncs.com/%E7%A2%B3%E8%B6%B3%E8%BF%B9%E9%99%84%E5%BD%95.pdf)。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1',
                    ),
                    'preUnit' => 
                    array (
                      'description' => '环境影响结果值单位。',
                      'type' => 'string',
                      'example' => 'kg CO2-Eq',
                    ),
                    'state' => 
                    array (
                      'description' => '数据状态。1表示准确计算，2表示采用默认数据，3表示缺少因子采用0值。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"B91B5559-065A-55C3-8D75-DA218EBFD1DC\\",\\n  \\"data\\": [\\n    {\\n      \\"carbonEmission\\": 1009.97626554,\\n      \\"indicator\\": \\"GWP100a\\",\\n      \\"key\\": \\"gwp\\",\\n      \\"method\\": \\"CML v4.8 2016\\",\\n      \\"name\\": \\"气候变化\\",\\n      \\"num\\": 1,\\n      \\"preUnit\\": \\"kg CO2-Eq\\",\\n      \\"state\\": 1\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '获取各种环境影响排放总量',
    ),
    'GetInventoryList' => 
    array (
      'summary' => '用于获取指定环境影响（methodType）、指定分组汇总级别（group）、指定计算方式下（emissionType）的降序排放列表。',
      'path' => '/api/v1/carbon/footprint/result/inventory/list',
      'methods' => 
      array (
        0 => 'post',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求参数。',
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'description' => '企业编码。',
                'type' => 'string',
                'required' => true,
                'example' => 'C-20080808-1',
              ),
              'productId' => 
              array (
                'description' => '产品id。',
                'type' => 'integer',
                'format' => 'int64',
                'required' => true,
                'example' => '1024',
              ),
              'productType' => 
              array (
                'description' => '产品类型: 1表示请求产品碳足迹，5表示请求供应链碳足迹。',
                'type' => 'integer',
                'format' => 'int64',
                'required' => true,
                'example' => '1',
              ),
              'methodType' => 
              array (
                'description' => '获取的环境影响类型：gwp为气候变化碳足迹，其他请见枚举值的type值，[参考附录](https://carbon-doc.oss-cn-hangzhou.aliyuncs.com/%E7%A2%B3%E8%B6%B3%E8%BF%B9%E9%99%84%E5%BD%95.pdf)。',
                'type' => 'string',
                'required' => true,
                'example' => 'gwp',
              ),
              'emissionType' => 
              array (
                'description' => '排放类型
> 可选值有：footprint | emission。含义：footprint：所有的清单都参与计算；emission：只有排放为正数和零的清单参与计算，负数不参与计算。',
                'type' => 'string',
                'required' => true,
                'example' => 'footprint',
              ),
              'group' => 
              array (
                'description' => '分组依据

> 可选值有：resource | process | resourceType | processType。含义：resource：按清单分组聚合，process：按工序分组聚合，resourceType：按清单类型分组聚合，processType：按环节分组聚合。',
                'type' => 'string',
                'required' => true,
                'example' => 'resource',
              ),
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
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求id，每次请求都是唯一值，便于后续排查问题。',
                'type' => 'string',
                'example' => '83A5A7DD-8974-5769-952E-590A97BEA34E',
              ),
              'data' => 
              array (
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'unit' => 
                  array (
                    'description' => '排放单位：默认为kgCO₂e/productUnit，productUnit为产品选择的单位。随着排放数量quantity的大小不同，unit会自适应转变为tCO₂e/productUnit或者gCO₂e/productUnit，具体转换规则见quantity栏。',
                    'type' => 'string',
                    'example' => 'kgCO₂e/kg',
                  ),
                  'productUnit' => 
                  array (
                    'description' => '产品的单位。',
                    'type' => 'string',
                    'example' => 'kg',
                  ),
                  'items' => 
                  array (
                    'description' => '排放列表详情。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'name' => 
                        array (
                          'description' => '名称
> 与请求参数group有关。请求参数为：resource，返回name参数含义为：清单名称；请求参数为：process，返回name参数含义为：工序名称；请求参数为：resourceType，返回name参数含义为：清单类型名称；请求参数为：processType，返回name参数含义为：环节名称。',
                          'type' => 'string',
                          'example' => '电力',
                        ),
                        'carbonEmission' => 
                        array (
                          'description' => '排放数量：可能为正数、负数、0。为保证计算精度，计算过程保留24位小数，为方便显示和使用，建议根据业务需要进行截取。',
                          'type' => 'number',
                          'format' => 'double',
                          'example' => '1000.000000000000000000000000000000',
                        ),
                        'percent' => 
                        array (
                          'description' => '百分比。',
                          'type' => 'string',
                          'example' => '99.01',
                        ),
                        'processName' => 
                        array (
                          'description' => '工序名称：仅对于请求参数group为resource时候有意义，其他时候无意义。',
                          'type' => 'string',
                          'example' => 'Process-1',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"83A5A7DD-8974-5769-952E-590A97BEA34E\\",\\n  \\"data\\": {\\n    \\"unit\\": \\"kgCO₂e/kg\\",\\n    \\"productUnit\\": \\"kg\\",\\n    \\"items\\": [\\n      {\\n        \\"name\\": \\"电力\\",\\n        \\"carbonEmission\\": 1000,\\n        \\"percent\\": \\"99.01\\",\\n        \\"processName\\": \\"Process-1\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '获取排行列表',
    ),
    'GetGwpBenchmarkList' => 
    array (
      'summary' => '获取主动减碳排行列表。',
      'path' => '/api/v1/carbon/footprint/result/gwp/benchmark/list',
      'methods' => 
      array (
        0 => 'post',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求参数。',
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'description' => '企业编码。',
                'type' => 'string',
                'required' => true,
                'example' => 'C-20080808-1',
              ),
              'productId' => 
              array (
                'description' => '产品id。',
                'type' => 'integer',
                'format' => 'int64',
                'required' => true,
                'example' => '1024',
              ),
              'productType' => 
              array (
                'description' => '产品类型: 1表示请求产品碳足迹，5表示请求供应链碳足迹。',
                'type' => 'integer',
                'format' => 'int64',
                'required' => true,
                'example' => '1',
              ),
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
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求id，每次请求都是唯一值，便于后续排查问题。',
                'type' => 'string',
                'example' => 'A8AEC6D9-A359-5169-BD1A-BD848BA60D65',
              ),
              'data' => 
              array (
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'unit' => 
                  array (
                    'description' => '排放单位。默认为kgCO₂e/productUnit，productUnit为产品选择的单位。随着排放数量quantity的大小不同，unit会自适应转变为tCO₂e/productUnit或者gCO₂e/productUnit，具体转换规则见quantity栏的备注。',
                    'type' => 'string',
                    'example' => 'kgCO₂e/kg',
                  ),
                  'items' => 
                  array (
                    'description' => '主动减碳排行列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '减碳项目详情。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'name' => 
                        array (
                          'description' => '清单名称。',
                          'type' => 'string',
                          'example' => 'PVC废料回收',
                        ),
                        'carbonEmission' => 
                        array (
                          'description' => '清单排放量。保留四位小数。单位为上层unit。',
                          'type' => 'number',
                          'format' => 'double',
                          'example' => '-0.2061',
                        ),
                        'percent' => 
                        array (
                          'description' => '暂未使用。',
                          'type' => 'string',
                          'example' => '暂为null',
                        ),
                        'benchmarkName' => 
                        array (
                          'description' => '基准线名称。',
                          'type' => 'string',
                          'example' => 'PVC废料焚烧',
                        ),
                        'benchmarkEmission' => 
                        array (
                          'description' => '清单所关联的基准线排放量。保留四位小数。单位为上层unit。',
                          'type' => 'number',
                          'format' => 'double',
                          'example' => '0.0108',
                        ),
                        'activeReduction' => 
                        array (
                          'description' => '主动减排量=基准线排放量-清单排放量。一般地，基准线排放量大于清单排放量。保留四位小数。 单位为上层unit。',
                          'type' => 'number',
                          'format' => 'double',
                          'example' => '0.2169',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"A8AEC6D9-A359-5169-BD1A-BD848BA60D65\\",\\n  \\"data\\": {\\n    \\"unit\\": \\"kgCO₂e/kg\\",\\n    \\"items\\": [\\n      {\\n        \\"name\\": \\"PVC废料回收\\",\\n        \\"carbonEmission\\": -0.2061,\\n        \\"percent\\": \\"暂为null\\",\\n        \\"benchmarkName\\": \\"PVC废料焚烧\\",\\n        \\"benchmarkEmission\\": 0.0108,\\n        \\"activeReduction\\": 0.2169\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '获取主动减碳排行列表',
    ),
    'GetGwpInventoryConstitute' => 
    array (
      'summary' => '用于获取指定产品的碳排放构成分析。碳排放构成分析包括按清单、按类型两种分析维度。在呈现效果上，包括一个层级列表和饼状图。',
      'path' => '/api/v1/carbon/footprint/result/gwp/inventory/constitute',
      'methods' => 
      array (
        0 => 'post',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求参数。',
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'description' => '企业编码。',
                'type' => 'string',
                'required' => true,
                'example' => 'C-20080808-1',
              ),
              'productId' => 
              array (
                'description' => '产品id。',
                'type' => 'integer',
                'format' => 'int64',
                'required' => true,
                'example' => '1024',
              ),
              'productType' => 
              array (
                'description' => '产品类型: 1表示请求产品碳足迹，5表示请求供应链碳足迹。',
                'type' => 'integer',
                'format' => 'int64',
                'required' => true,
                'example' => '1',
              ),
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
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求id，每次请求都是唯一值，便于后续排查问题。',
                'type' => 'string',
                'example' => '06DA2909-7736-5738-AA31-ACD617D828F1',
              ),
              'data' => 
              array (
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'name' => 
                  array (
                    'description' => '当前层级结构含义。',
                    'type' => 'string',
                    'example' => '总碳排放量',
                  ),
                  'unit' => 
                  array (
                    'description' => '排放单位。',
                    'type' => 'string',
                    'example' => 'kgCO₂e/t',
                  ),
                  'carbonEmission' => 
                  array (
                    'description' => '排放数量：可能为正数、负数、0。为保证计算精度，计算过程保留24位小数，为方便显示和使用，建议根据业务需要进行截取。',
                    'type' => 'number',
                    'format' => 'double',
                    'example' => '1009.976265540000000000000000000000',
                  ),
                  'byResourceType' => 
                  array (
                    'description' => '按类型聚合，各种类型的排放详情',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '用于组成分析中的“按类型”分析。这是一个嵌套结构，总碳排放量->按清单类型排序，共两层，最末级byResourceType为空。',
                      '$ref' => '#/components/schemas/GwpInventoryConstitute',
                    ),
                  ),
                  'items' => 
                  array (
                    'description' => '按层级从高到低的结构组织，按照环节->工序->清单层级。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '用于组成分析中的“按清单”分析。是一个嵌套结构，按照环节->工序->清单层级，最末层级items为空。',
                      '$ref' => '#/components/schemas/GwpInventoryConstitute',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"06DA2909-7736-5738-AA31-ACD617D828F1\\",\\n  \\"data\\": {\\n    \\"name\\": \\"总碳排放量\\",\\n    \\"unit\\": \\"kgCO₂e/t\\",\\n    \\"carbonEmission\\": 1009.97626554,\\n    \\"byResourceType\\": [\\n      {\\n        \\"percent\\": 0,\\n        \\"resourceType\\": 0,\\n        \\"unit\\": \\"\\",\\n        \\"carbonEmission\\": 0,\\n        \\"name\\": \\"\\",\\n        \\"byResourceType\\": [\\n          {\\n            \\"name\\": \\"\\",\\n            \\"unit\\": \\"\\",\\n            \\"resourceType\\": 0,\\n            \\"carbonEmission\\": 0,\\n            \\"percent\\": \\"\\"\\n          }\\n        ],\\n        \\"items\\": [\\n          {\\n            \\"percent\\": 0,\\n            \\"resourceType\\": 0,\\n            \\"unit\\": \\"\\",\\n            \\"carbonEmission\\": 0,\\n            \\"name\\": \\"\\",\\n            \\"byResourceType\\": [\\n              {\\n                \\"name\\": \\"\\",\\n                \\"unit\\": \\"\\",\\n                \\"resourceType\\": 0,\\n                \\"carbonEmission\\": 0,\\n                \\"percent\\": \\"\\"\\n              }\\n            ],\\n            \\"items\\": [\\n              {\\n                \\"percent\\": 0,\\n                \\"resourceType\\": 0,\\n                \\"unit\\": \\"\\",\\n                \\"carbonEmission\\": 0,\\n                \\"name\\": \\"\\",\\n                \\"byResourceType\\": [\\n                  {\\n                    \\"name\\": \\"\\",\\n                    \\"unit\\": \\"\\",\\n                    \\"resourceType\\": 0,\\n                    \\"carbonEmission\\": 0,\\n                    \\"percent\\": \\"\\"\\n                  }\\n                ],\\n                \\"items\\": []\\n              }\\n            ]\\n          }\\n        ]\\n      }\\n    ],\\n    \\"items\\": []\\n  }\\n}","type":"json"}]',
      'title' => '获取碳排放构成分析层级图&饼状图',
      'description' => '用于获取指定产品的碳排放构成分析。碳排放构成分析包括按清单、按类型两种分析维度。在呈现效果上，包括一个层级列表和饼状图。',
    ),
    'GetEpdInventoryConstitute' => 
    array (
      'summary' => '获取环境影响类别的结果明细。',
      'path' => '/api/v1/carbon/footprint/result/epd/inventory/constitute',
      'methods' => 
      array (
        0 => 'post',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求参数。',
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'description' => '企业编码。',
                'type' => 'string',
                'required' => true,
                'example' => 'C-20080808-1',
              ),
              'productId' => 
              array (
                'description' => '产品id。',
                'type' => 'integer',
                'format' => 'int64',
                'required' => true,
                'example' => '1024',
              ),
              'productType' => 
              array (
                'description' => '产品类型: 1表示请求产品碳足迹，5表示请求供应链碳足迹。',
                'type' => 'integer',
                'format' => 'int64',
                'required' => true,
                'example' => '1',
              ),
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
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求id，每次请求都是唯一值，便于后续排查问题。',
                'type' => 'string',
                'example' => '83A5A7DD-8974-5769-952E-590A97BEA34E',
              ),
              'data' => 
              array (
                'description' => '环境影响结果列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '环境影响结果项。',
                  '$ref' => '#/components/schemas/EpdInventoryConstituteItem',
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"83A5A7DD-8974-5769-952E-590A97BEA34E\\",\\n  \\"data\\": [\\n    {\\n      \\"inventoryValuePerProduct\\": 0,\\n      \\"factorDataset\\": \\"\\",\\n      \\"percent\\": 0,\\n      \\"inventoryValuePerProductUnit\\": \\"\\",\\n      \\"num\\": 0,\\n      \\"quantity\\": 0,\\n      \\"resourceType\\": \\"\\",\\n      \\"factorType\\": 0,\\n      \\"unit\\": \\"\\",\\n      \\"name\\": \\"\\",\\n      \\"inventoryId\\": 0,\\n      \\"inventoryValue\\": 0,\\n      \\"factorUnit\\": \\"\\",\\n      \\"inventoryUnit\\": \\"\\",\\n      \\"state\\": 0,\\n      \\"factor\\": \\"\\",\\n      \\"carbonEmission\\": 0,\\n      \\"factorId\\": \\"\\",\\n      \\"items\\": [\\n        {\\n          \\"inventoryValuePerProduct\\": 0,\\n          \\"factorDataset\\": \\"\\",\\n          \\"percent\\": 0,\\n          \\"inventoryValuePerProductUnit\\": \\"\\",\\n          \\"num\\": 0,\\n          \\"quantity\\": 0,\\n          \\"resourceType\\": \\"\\",\\n          \\"factorType\\": 0,\\n          \\"unit\\": \\"\\",\\n          \\"name\\": \\"\\",\\n          \\"inventoryId\\": 0,\\n          \\"inventoryValue\\": 0,\\n          \\"factorUnit\\": \\"\\",\\n          \\"inventoryUnit\\": \\"\\",\\n          \\"state\\": 0,\\n          \\"factor\\": \\"\\",\\n          \\"carbonEmission\\": 0,\\n          \\"factorId\\": \\"\\",\\n          \\"items\\": [\\n            {\\n              \\"inventoryValuePerProduct\\": 0,\\n              \\"factorDataset\\": \\"\\",\\n              \\"percent\\": 0,\\n              \\"inventoryValuePerProductUnit\\": \\"\\",\\n              \\"num\\": 0,\\n              \\"quantity\\": 0,\\n              \\"resourceType\\": \\"\\",\\n              \\"factorType\\": 0,\\n              \\"unit\\": \\"\\",\\n              \\"name\\": \\"\\",\\n              \\"inventoryId\\": 0,\\n              \\"inventoryValue\\": 0,\\n              \\"factorUnit\\": \\"\\",\\n              \\"inventoryUnit\\": \\"\\",\\n              \\"state\\": 0,\\n              \\"factor\\": \\"\\",\\n              \\"carbonEmission\\": 0,\\n              \\"factorId\\": \\"\\",\\n              \\"items\\": []\\n            }\\n          ]\\n        }\\n      ]\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '获取环境影响类别的结果明细',
    ),
    'GetReductionProposal' => 
    array (
      'summary' => '获取减碳建议。',
      'path' => '/api/v1/carbon/footprint/result/reduction/proposal',
      'methods' => 
      array (
        0 => 'post',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求参数',
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'description' => '企业编码',
                'type' => 'string',
                'required' => true,
                'example' => 'C-20080808-1',
              ),
              'productId' => 
              array (
                'description' => '产品id',
                'type' => 'integer',
                'format' => 'int64',
                'required' => true,
                'example' => '1024',
              ),
              'productType' => 
              array (
                'description' => '产品类型: 1表示请求产品碳足迹，5表示请求供应链碳足迹',
                'type' => 'integer',
                'format' => 'int64',
                'required' => true,
                'example' => '1',
              ),
              'dataQualityEvaluationType' => 
              array (
                'title' => '数据质量评估类型。1是DQI，2是DQR。',
                'description' => '数据质量评估类型。1是DQI，2是DQR。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => true,
                'example' => '1',
              ),
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
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求id，每次请求都是唯一值，便于后续排查问题',
                'type' => 'string',
                'example' => '83A5A7DD-8974-5769-952E-590A97BEA34E',
              ),
              'data' => 
              array (
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'reduction' => 
                  array (
                    'title' => '主动减碳建议',
                    'description' => '主动减碳建议',
                    'type' => 'string',
                    'example' => '主动减碳建议的文本',
                  ),
                  'reductionEvaluation' => 
                  array (
                    'title' => '主动减碳评估',
                    'description' => '主动减碳评估',
                    'type' => 'string',
                    'example' => '主动减碳评估的文本',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"83A5A7DD-8974-5769-952E-590A97BEA34E\\",\\n  \\"data\\": {\\n    \\"reduction\\": \\"主动减碳建议的文本\\",\\n    \\"reductionEvaluation\\": \\"主动减碳评估的文本\\"\\n  }\\n}","type":"json"}]',
      'title' => '获取减碳建议',
    ),
    'GetDataQualityAnalysis' => 
    array (
      'summary' => '获取数据质量评价结果DQR、DQI。',
      'path' => '/api/v1/carbon/footprint/data/quality/analysis',
      'methods' => 
      array (
        0 => 'post',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求参数。',
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'description' => '企业编码。',
                'type' => 'string',
                'required' => true,
                'example' => 'C-20080808-1',
              ),
              'dataQualityEvaluationType' => 
              array (
                'description' => '数据质量评估类型：1是DQI、2是DQR。',
                'type' => 'integer',
                'format' => 'int64',
                'required' => true,
                'example' => '1',
              ),
              'productId' => 
              array (
                'description' => '产品id。',
                'type' => 'integer',
                'format' => 'int64',
                'required' => true,
                'example' => '1024',
              ),
              'productType' => 
              array (
                'description' => '产品类型: 1表示请求产品碳足迹，5表示请求供应链碳足迹。',
                'type' => 'integer',
                'format' => 'int64',
                'required' => true,
                'example' => '1',
              ),
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
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求id，每次请求都是唯一值，便于后续排查问题。',
                'type' => 'string',
                'example' => '4A0AEC56-5C9A-5D47-93DF-7227836FFF82',
              ),
              'data' => 
              array (
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'dataQuality' => 
                  array (
                    'description' => '各清单的得分。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'inventory' => 
                        array (
                          'description' => '清单名称。',
                          'type' => 'string',
                          'example' => '工序-1/清单-1',
                        ),
                        'score' => 
                        array (
                          'description' => '得分。分布范围1~5，越接近1表示数据质量越好。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'g1' => 
                            array (
                              'description' => '数据质量评价指标1：活动数据可信度',
                              'type' => 'number',
                              'format' => 'double',
                              'example' => '3',
                            ),
                            'g2' => 
                            array (
                              'description' => '数据质量评价指标2：因子数据可信度',
                              'type' => 'number',
                              'format' => 'double',
                              'example' => '3',
                            ),
                            'g3' => 
                            array (
                              'description' => '数据质量评价指标3：时间代表性',
                              'type' => 'number',
                              'format' => 'double',
                              'example' => '3',
                            ),
                            'g4' => 
                            array (
                              'description' => '数据质量评价指标4：地理代表性',
                              'type' => 'number',
                              'format' => 'double',
                              'example' => '3',
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  'dataQualityResult' => 
                  array (
                    'description' => '指标得分',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'data_quality_score' => 
                      array (
                        'description' => '评分。适用于DQR结果，分布范围1~5，越接近1表示数据质量越好，有效位数保留小数点后4位。',
                        'type' => 'number',
                        'format' => 'double',
                        'example' => '1.2345',
                      ),
                      'g1' => 
                      array (
                        'description' => '数据质量评价指标1：活动数据可信度',
                        'type' => 'number',
                        'format' => 'double',
                        'example' => '1.2345',
                      ),
                      'g2' => 
                      array (
                        'description' => '数据质量评价指标2：因子数据可信度',
                        'type' => 'number',
                        'format' => 'double',
                        'example' => '1.2345',
                      ),
                      'g3' => 
                      array (
                        'description' => '数据质量评价指标3：时间代表性',
                        'type' => 'number',
                        'format' => 'double',
                        'example' => '1.2345',
                      ),
                      'g4' => 
                      array (
                        'description' => '数据质量评价指标4：地理代表性',
                        'type' => 'number',
                        'format' => 'double',
                        'example' => '1.2345',
                      ),
                    ),
                  ),
                  'sensitivityList' => 
                  array (
                    'description' => '敏感度分析列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'id' => 
                        array (
                          'description' => '清单项id',
                          'type' => 'string',
                          'example' => '1',
                        ),
                        'inventory' => 
                        array (
                          'description' => '清单项的名称',
                          'type' => 'string',
                          'example' => '清单1',
                        ),
                        'reductionList' => 
                        array (
                          'description' => '减排措施列表',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '清单项的减排措施',
                            'type' => 'string',
                            'example' => '措施1',
                          ),
                        ),
                        'sensitivity' => 
                        array (
                          'description' => '灵敏度百分比',
                          'type' => 'number',
                          'format' => 'double',
                          'example' => '91.7',
                        ),
                      ),
                    ),
                  ),
                  'uncertainty' => 
                  array (
                    'description' => '不确定性值。模型整体不确定性百分比结果，"10.00"表示10.00%的不确定性，代表碳足迹结果在±10.00%的范围。由单一清单的不确定性贡献加权叠加得到。',
                    'type' => 'string',
                    'example' => '10.00',
                  ),
                  'uncertaintyValues' => 
                  array (
                    'description' => '不确定性列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'inventory' => 
                        array (
                          'description' => '清单名称。格式为：工序名/清单名。',
                          'type' => 'string',
                          'example' => '工序-1/清单-1',
                        ),
                        'uncertaintyContribution' => 
                        array (
                          'description' => '清单的不确定性绝对贡献大小。建模过程中的各清单数据质量对碳足迹结果的影响，当某个清单的不确定贡献大时，请尽可能提高它的数据质量以提升碳足迹分析准确度。 "1.4964"的含义是不确定贡献了1.4964 kgCO₂e/unit，其中unit为产品的单位。',
                          'type' => 'string',
                          'example' => '1.4964',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"4A0AEC56-5C9A-5D47-93DF-7227836FFF82\\",\\n  \\"data\\": {\\n    \\"dataQuality\\": [\\n      {\\n        \\"inventory\\": \\"工序-1/清单-1\\",\\n        \\"score\\": {\\n          \\"g1\\": 3,\\n          \\"g2\\": 3,\\n          \\"g3\\": 3,\\n          \\"g4\\": 3\\n        }\\n      }\\n    ],\\n    \\"dataQualityResult\\": {\\n      \\"data_quality_score\\": 1.2345,\\n      \\"g1\\": 1.2345,\\n      \\"g2\\": 1.2345,\\n      \\"g3\\": 1.2345,\\n      \\"g4\\": 1.2345\\n    },\\n    \\"sensitivityList\\": [\\n      {\\n        \\"id\\": \\"1\\",\\n        \\"inventory\\": \\"清单1\\",\\n        \\"reductionList\\": [\\n          \\"措施1\\"\\n        ],\\n        \\"sensitivity\\": 91.7\\n      }\\n    ],\\n    \\"uncertainty\\": \\"10.00\\",\\n    \\"uncertaintyValues\\": [\\n      {\\n        \\"inventory\\": \\"工序-1/清单-1\\",\\n        \\"uncertaintyContribution\\": \\"1.4964\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '获取数据质量评价结果DQR、DQI',
      'description' => '用户指产品id，本接口返回获得已经生成结果页中的数据质量评价结果。可用于了解产品各清单的碳排因子的数据质量。',
    ),
    'GetEmissionSummary' => 
    array (
      'summary' => '获取碳排汇总。',
      'path' => '/api/v1/carbon/emission/analysis/summary',
      'methods' => 
      array (
        0 => 'post',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求参数',
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'description' => '企业code',
                'type' => 'string',
                'required' => true,
                'example' => 'C-20240119-1',
              ),
              'year' => 
              array (
                'description' => '盘查年份',
                'type' => 'integer',
                'format' => 'int32',
                'required' => true,
                'example' => '2024',
              ),
              'moduleType' => 
              array (
                'description' => '模块类型',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '3',
              ),
              'moduleCode' => 
              array (
                'description' => '模块代码',
                'type' => 'string',
                'required' => false,
                'example' => 'carbonInventory.check.scope_1_direct_ghg_emissions',
              ),
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
              'data' => 
              array (
                'description' => '汇总详情数据',
                'type' => 'object',
                'properties' => 
                array (
                  'currentPeriodCarbonEmissionData' => 
                  array (
                    'description' => '本周期统计指标',
                    'type' => 'number',
                    'format' => 'double',
                    'example' => '276.4',
                  ),
                  'lastPeriodCarbonEmissionData' => 
                  array (
                    'description' => '上周期统计指标',
                    'type' => 'number',
                    'format' => 'double',
                    'example' => '9.40100',
                  ),
                  'totalCarbonEmissionData' => 
                  array (
                    'description' => '总用能排放量',
                    'type' => 'number',
                    'format' => 'double',
                    'example' => '276.46',
                  ),
                  'carbonSaveConversion' => 
                  array (
                    'description' => '碳减排放量',
                    'type' => 'number',
                    'format' => 'double',
                    'example' => '0.0',
                  ),
                  'ratio' => 
                  array (
                    'description' => '本周期同比',
                    'type' => 'number',
                    'format' => 'double',
                    'example' => '28.410',
                  ),
                  'actualEmissionRatio' => 
                  array (
                    'description' => '已排占比',
                    'type' => 'number',
                    'format' => 'double',
                    'example' => '2.7657',
                  ),
                  'weightingCarbonEmissionData' => 
                  array (
                    'description' => '按股比计算碳排',
                    'type' => 'number',
                    'format' => 'double',
                    'example' => '248.81400',
                  ),
                  'lastPeriodWeightingCarbonEmissionData' => 
                  array (
                    'description' => '上周期按股比计算碳排',
                    'type' => 'number',
                    'format' => 'double',
                    'example' => '8.4609',
                  ),
                  'weightingRatio' => 
                  array (
                    'description' => '股比碳排同比',
                    'type' => 'number',
                    'format' => 'double',
                    'example' => '28.4102',
                  ),
                  'isWeighting' => 
                  array (
                    'description' => '是否展示股比碳排',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                ),
              ),
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => '83A5A7DD-8974-5769-952E-590A97BEA34E',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"data\\": {\\n    \\"currentPeriodCarbonEmissionData\\": 276.4,\\n    \\"lastPeriodCarbonEmissionData\\": 9.401,\\n    \\"totalCarbonEmissionData\\": 276.46,\\n    \\"carbonSaveConversion\\": 0,\\n    \\"ratio\\": 28.41,\\n    \\"actualEmissionRatio\\": 2.7657,\\n    \\"weightingCarbonEmissionData\\": 248.814,\\n    \\"lastPeriodWeightingCarbonEmissionData\\": 8.4609,\\n    \\"weightingRatio\\": 28.4102,\\n    \\"isWeighting\\": true\\n  },\\n  \\"requestId\\": \\"83A5A7DD-8974-5769-952E-590A97BEA34E\\"\\n}","type":"json"}]',
      'title' => '获取碳排汇总',
      'description' => '本接口的返回值是某组织的各个碳排汇总指标的结果值。
接口需要传入的参数为：
- 企业的唯一标识符
- 碳排统计年份
- 统计模块类型信息',
    ),
    'GetEmissionSourceConstitute' => 
    array (
      'summary' => '获取排放源构成。',
      'path' => '/api/v1/carbon/emission/analysis/constitute',
      'methods' => 
      array (
        0 => 'post',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求参数。',
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'description' => '企业code',
                'type' => 'string',
                'required' => true,
                'example' => 'C-20240119-1',
              ),
              'year' => 
              array (
                'description' => '盘查年份',
                'type' => 'integer',
                'format' => 'int32',
                'required' => true,
                'example' => '2024',
              ),
              'moduleType' => 
              array (
                'description' => '模块类型',
                'type' => 'integer',
                'format' => 'int32',
                'required' => true,
                'example' => '3',
              ),
              'moduleCode' => 
              array (
                'description' => '模块代码',
                'type' => 'string',
                'required' => false,
                'example' => 'carbonInventory.check.scope_1_direct_ghg_emissions',
              ),
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
              'data' => 
              array (
                'description' => '返回数据',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '构成分析详情列表',
                  '$ref' => '#/components/schemas/ConstituteItem',
                ),
              ),
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => '83A5A7DD-8974-5769-952E-590A97BEA34E',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"data\\": [\\n    {\\n      \\"enterpriseName\\": \\"\\",\\n      \\"rawData\\": 0,\\n      \\"carbonEmissionData\\": 0,\\n      \\"ratio\\": 0,\\n      \\"nameKey\\": \\"\\",\\n      \\"name\\": \\"\\",\\n      \\"emissionSourceKey\\": \\"\\",\\n      \\"emissionSource\\": \\"\\",\\n      \\"dataUnit\\": \\"\\",\\n      \\"envGasEmissions\\": [\\n        {\\n          \\"type\\": \\"\\",\\n          \\"name\\": \\"\\",\\n          \\"gasEmissionData\\": 0,\\n          \\"carbonEmissionData\\": 0\\n        }\\n      ],\\n      \\"subConstituteItems\\": [\\n        {\\n          \\"enterpriseName\\": \\"\\",\\n          \\"rawData\\": 0,\\n          \\"carbonEmissionData\\": 0,\\n          \\"ratio\\": 0,\\n          \\"nameKey\\": \\"\\",\\n          \\"name\\": \\"\\",\\n          \\"emissionSourceKey\\": \\"\\",\\n          \\"emissionSource\\": \\"\\",\\n          \\"dataUnit\\": \\"\\",\\n          \\"envGasEmissions\\": [\\n            {\\n              \\"type\\": \\"\\",\\n              \\"name\\": \\"\\",\\n              \\"gasEmissionData\\": 0,\\n              \\"carbonEmissionData\\": 0\\n            }\\n          ],\\n          \\"subConstituteItems\\": [\\n            {\\n              \\"enterpriseName\\": \\"\\",\\n              \\"rawData\\": 0,\\n              \\"carbonEmissionData\\": 0,\\n              \\"ratio\\": 0,\\n              \\"nameKey\\": \\"\\",\\n              \\"name\\": \\"\\",\\n              \\"emissionSourceKey\\": \\"\\",\\n              \\"emissionSource\\": \\"\\",\\n              \\"dataUnit\\": \\"\\",\\n              \\"envGasEmissions\\": [\\n                {\\n                  \\"type\\": \\"\\",\\n                  \\"name\\": \\"\\",\\n                  \\"gasEmissionData\\": 0,\\n                  \\"carbonEmissionData\\": 0\\n                }\\n              ],\\n              \\"subConstituteItems\\": []\\n            }\\n          ]\\n        }\\n      ]\\n    }\\n  ],\\n  \\"requestId\\": \\"83A5A7DD-8974-5769-952E-590A97BEA34E\\"\\n}","type":"json"}]',
      'title' => '获取排放源构成',
      'description' => '本接口的返回值是某组织在各个排放源类型及各个排放设施碳排放详情，数据结构是一个三层树形结构。使用本接口需要传入以下参数：
- 企业的唯一标识符
- 碳排统计年份
- 统计模块类型信息',
    ),
    'GetCarbonEmissionTrend' => 
    array (
      'summary' => '获取碳排放趋势。',
      'path' => '/api/v1/carbon/emission/analysis/trend',
      'methods' => 
      array (
        0 => 'post',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求参数',
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'description' => '企业code',
                'type' => 'string',
                'required' => true,
                'example' => 'C-20240119-1',
              ),
              'yearList' => 
              array (
                'description' => '盘查年份列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '盘查年份',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => true,
                  'example' => '2024',
                ),
                'required' => true,
              ),
              'moduleType' => 
              array (
                'description' => '模块类型',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '3',
              ),
              'moduleCode' => 
              array (
                'description' => '模块代码',
                'type' => 'string',
                'required' => false,
                'example' => 'carbonInventory.check.scope_1_direct_ghg_emissions',
              ),
              'trendType' => 
              array (
                'description' => '趋势类型',
                'type' => 'integer',
                'format' => 'int32',
                'required' => true,
                'example' => '0',
              ),
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
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => '9bc20a5a-b26b-4c28-922a-7cd10b61f96f',
              ),
              'data' => 
              array (
                'description' => '返回数据',
                'type' => 'object',
                'properties' => 
                array (
                  'targetEmissionList' => 
                  array (
                    'description' => '目标排放列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '目标排放值',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'year' => 
                        array (
                          'description' => '年份。',
                          'type' => 'string',
                          'example' => '2024',
                        ),
                        'items' => 
                        array (
                          'description' => '数据项列表',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '数据项',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'year' => 
                              array (
                                'description' => '年份。',
                                'type' => 'string',
                                'example' => '2024',
                              ),
                              'month' => 
                              array (
                                'description' => '月份。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                              ),
                              'carbonEmissionData' => 
                              array (
                                'description' => '碳排放量',
                                'type' => 'number',
                                'format' => 'double',
                                'example' => '20.22',
                              ),
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  'actualEmissionList' => 
                  array (
                    'description' => '实际排放列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '实际排放值',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'year' => 
                        array (
                          'description' => '年份。',
                          'type' => 'string',
                          'example' => '2024',
                        ),
                        'items' => 
                        array (
                          'description' => '数据项列表',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '数据项',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'year' => 
                              array (
                                'description' => '年份。',
                                'type' => 'string',
                                'example' => '2024',
                              ),
                              'month' => 
                              array (
                                'description' => '月份。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '11',
                              ),
                              'carbonEmissionData' => 
                              array (
                                'description' => '碳排放量',
                                'type' => 'number',
                                'format' => 'double',
                                'example' => '20.22',
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
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"9bc20a5a-b26b-4c28-922a-7cd10b61f96f\\",\\n  \\"data\\": {\\n    \\"targetEmissionList\\": [\\n      {\\n        \\"year\\": \\"2024\\",\\n        \\"items\\": [\\n          {\\n            \\"year\\": \\"2024\\",\\n            \\"month\\": 10,\\n            \\"carbonEmissionData\\": 20.22\\n          }\\n        ]\\n      }\\n    ],\\n    \\"actualEmissionList\\": [\\n      {\\n        \\"year\\": \\"2024\\",\\n        \\"items\\": [\\n          {\\n            \\"year\\": \\"2024\\",\\n            \\"month\\": 11,\\n            \\"carbonEmissionData\\": 20.22\\n          }\\n        ]\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '获取碳排趋势',
    ),
    'GetElecConstitute' => 
    array (
      'summary' => '本接口用于获取电力构成分析数据。',
      'path' => '/api/v1/carbon/emission/analysis/elec/constitute',
      'methods' => 
      array (
        0 => 'post',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'description' => '企业编码',
                'type' => 'string',
                'required' => true,
                'example' => 'C-20240202-01',
              ),
              'year' => 
              array (
                'description' => '年份',
                'type' => 'integer',
                'format' => 'int32',
                'required' => true,
                'example' => '2024',
              ),
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
              'data' => 
              array (
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'water' => 
                  array (
                    'description' => '水电。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'carbonEmissionData' => 
                      array (
                        'description' => '碳排放当量',
                        'type' => 'number',
                        'format' => 'double',
                        'example' => '2.1',
                      ),
                      'rawData' => 
                      array (
                        'description' => '用电量',
                        'type' => 'number',
                        'format' => 'double',
                        'example' => '1.2',
                      ),
                      'ratio' => 
                      array (
                        'description' => '用电量占当月所有用电量的比例：示例值：0.5（即占50%）',
                        'type' => 'number',
                        'format' => 'double',
                        'example' => '0.4',
                      ),
                      'dataUnit' => 
                      array (
                        'description' => '单位',
                        'type' => 'string',
                        'example' => 'kWh',
                      ),
                      'name' => 
                      array (
                        'description' => '电力类型名称。',
                        'type' => 'string',
                        'example' => '水电',
                      ),
                      'nameKey' => 
                      array (
                        'description' => '名称标识',
                        'type' => 'string',
                        'example' => 'carbonInventory.check.water_electricity',
                      ),
                    ),
                  ),
                  'light' => 
                  array (
                    'description' => '光电',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'carbonEmissionData' => 
                      array (
                        'description' => '碳排放当量',
                        'type' => 'number',
                        'format' => 'double',
                        'example' => '1.2',
                      ),
                      'rawData' => 
                      array (
                        'description' => '用电量',
                        'type' => 'number',
                        'format' => 'double',
                        'example' => '1.2',
                      ),
                      'ratio' => 
                      array (
                        'description' => '用电量占当月所有用电量的比例：示例值：0.5（即占50%）',
                        'type' => 'number',
                        'format' => 'double',
                        'example' => '0.2',
                      ),
                      'dataUnit' => 
                      array (
                        'description' => '单位',
                        'type' => 'string',
                        'example' => 'kWh',
                      ),
                      'name' => 
                      array (
                        'description' => '电力类型名称。',
                        'type' => 'string',
                        'example' => '光电',
                      ),
                      'nameKey' => 
                      array (
                        'description' => '电力类型编码',
                        'type' => 'string',
                        'example' => 'carbonInventory.check.light_electricity',
                      ),
                    ),
                  ),
                  'urban' => 
                  array (
                    'description' => '市电',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'carbonEmissionData' => 
                      array (
                        'description' => '碳排放当量',
                        'type' => 'number',
                        'format' => 'double',
                        'example' => '1.2',
                      ),
                      'rawData' => 
                      array (
                        'description' => '用电量',
                        'type' => 'number',
                        'format' => 'double',
                        'example' => '1.2',
                      ),
                      'ratio' => 
                      array (
                        'description' => '用电量占当月所有用电量的比例：示例值：0.5（即占50%）',
                        'type' => 'number',
                        'format' => 'double',
                        'example' => '0.4',
                      ),
                      'dataUnit' => 
                      array (
                        'description' => '单位',
                        'type' => 'string',
                        'example' => 'kWh',
                      ),
                      'name' => 
                      array (
                        'description' => '电力类型名称',
                        'type' => 'string',
                        'example' => '市电',
                      ),
                      'nameKey' => 
                      array (
                        'description' => '电力类型编码',
                        'type' => 'string',
                        'example' => 'carbonInventory.check.urban_electricity',
                      ),
                    ),
                  ),
                  'wind' => 
                  array (
                    'description' => '风电',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'carbonEmissionData' => 
                      array (
                        'description' => '碳排放当量',
                        'type' => 'number',
                        'format' => 'double',
                        'example' => '1.2',
                      ),
                      'rawData' => 
                      array (
                        'description' => '用电量',
                        'type' => 'number',
                        'format' => 'double',
                        'example' => '1.1',
                      ),
                      'ratio' => 
                      array (
                        'description' => '用电量占当月所有用电量的比例：示例值：0.5（即占50%）',
                        'type' => 'number',
                        'format' => 'double',
                        'example' => '0.3',
                      ),
                      'dataUnit' => 
                      array (
                        'description' => '单位',
                        'type' => 'string',
                        'example' => 'kWh',
                      ),
                      'name' => 
                      array (
                        'description' => '电力类型名称',
                        'type' => 'string',
                        'example' => '风电',
                      ),
                      'nameKey' => 
                      array (
                        'description' => '电力类型编码',
                        'type' => 'string',
                        'example' => 'carbonInventory.check.wind_electricity',
                      ),
                    ),
                  ),
                  'nuclear' => 
                  array (
                    'description' => '核电',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'carbonEmissionData' => 
                      array (
                        'description' => '碳排放当量',
                        'type' => 'number',
                        'format' => 'double',
                        'example' => '2.3',
                      ),
                      'rawData' => 
                      array (
                        'description' => '用电量',
                        'type' => 'number',
                        'format' => 'double',
                        'example' => '2',
                      ),
                      'ratio' => 
                      array (
                        'description' => '用电量占当月所有用电量的比例：示例值：0.5（即占50%）',
                        'type' => 'number',
                        'format' => 'double',
                        'example' => '0.6',
                      ),
                      'dataUnit' => 
                      array (
                        'description' => '单位',
                        'type' => 'string',
                        'example' => 'kWh',
                      ),
                      'name' => 
                      array (
                        'description' => '电力类型名称',
                        'type' => 'string',
                        'example' => '核电',
                      ),
                      'nameKey' => 
                      array (
                        'description' => '电力类型编码',
                        'type' => 'string',
                        'example' => 'carbonInventory.check.nuclear_electricity',
                      ),
                    ),
                  ),
                  'renewing' => 
                  array (
                    'description' => '零碳电力',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'carbonEmissionData' => 
                      array (
                        'description' => '碳排放当量',
                        'type' => 'number',
                        'format' => 'double',
                        'example' => '2.3',
                      ),
                      'rawData' => 
                      array (
                        'description' => '用电量',
                        'type' => 'number',
                        'format' => 'double',
                        'example' => '4.3',
                      ),
                      'ratio' => 
                      array (
                        'description' => '用电量占当月所有用电量的比例：示例值：0.5（即占50%）',
                        'type' => 'number',
                        'format' => 'double',
                        'example' => '0.44',
                      ),
                      'dataUnit' => 
                      array (
                        'description' => '单位',
                        'type' => 'string',
                        'example' => 'kWh',
                      ),
                      'name' => 
                      array (
                        'description' => '电力类型名称',
                        'type' => 'string',
                        'example' => '可再生能源电力

',
                      ),
                      'nameKey' => 
                      array (
                        'description' => '电力类型编码',
                        'type' => 'string',
                        'example' => 'carbonInventory.carbonEmissionAnalysis.components.CarbonDetail.keZaiShengZiYuan',
                      ),
                    ),
                  ),
                  'zero' => 
                  array (
                    'description' => '零电',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'carbonEmissionData' => 
                      array (
                        'description' => '碳排放当量',
                        'type' => 'number',
                        'format' => 'double',
                        'example' => '1.2',
                      ),
                      'rawData' => 
                      array (
                        'description' => '用电量',
                        'type' => 'number',
                        'format' => 'double',
                        'example' => '444.3',
                      ),
                      'ratio' => 
                      array (
                        'description' => '用电量占当月所有用电量的比例：示例值：0.5（即占50%）',
                        'type' => 'number',
                        'format' => 'double',
                        'example' => '0.33',
                      ),
                      'dataUnit' => 
                      array (
                        'description' => '单位',
                        'type' => 'string',
                        'example' => 'kWh',
                      ),
                      'name' => 
                      array (
                        'description' => '电力类型名称',
                        'type' => 'string',
                        'example' => '零电',
                      ),
                      'nameKey' => 
                      array (
                        'description' => '电力类型编码',
                        'type' => 'string',
                        'example' => 'carbonInventory.carbonEmissionAnalysis.components.CarbonDetail.lingTanDianLi',
                      ),
                    ),
                  ),
                ),
              ),
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求id，每次请求都是唯一值，便于后续排查问题',
                'type' => 'string',
                'example' => '83A5A7DD-8974-5769-952E-590A97BEA34E',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"data\\": {\\n    \\"water\\": {\\n      \\"carbonEmissionData\\": 2.1,\\n      \\"rawData\\": 1.2,\\n      \\"ratio\\": 0.4,\\n      \\"dataUnit\\": \\"kWh\\",\\n      \\"name\\": \\"水电\\",\\n      \\"nameKey\\": \\"carbonInventory.check.water_electricity\\"\\n    },\\n    \\"light\\": {\\n      \\"carbonEmissionData\\": 1.2,\\n      \\"rawData\\": 1.2,\\n      \\"ratio\\": 0.2,\\n      \\"dataUnit\\": \\"kWh\\",\\n      \\"name\\": \\"光电\\",\\n      \\"nameKey\\": \\"carbonInventory.check.light_electricity\\"\\n    },\\n    \\"urban\\": {\\n      \\"carbonEmissionData\\": 1.2,\\n      \\"rawData\\": 1.2,\\n      \\"ratio\\": 0.4,\\n      \\"dataUnit\\": \\"kWh\\",\\n      \\"name\\": \\"市电\\",\\n      \\"nameKey\\": \\"carbonInventory.check.urban_electricity\\"\\n    },\\n    \\"wind\\": {\\n      \\"carbonEmissionData\\": 1.2,\\n      \\"rawData\\": 1.1,\\n      \\"ratio\\": 0.3,\\n      \\"dataUnit\\": \\"kWh\\",\\n      \\"name\\": \\"风电\\",\\n      \\"nameKey\\": \\"carbonInventory.check.wind_electricity\\"\\n    },\\n    \\"nuclear\\": {\\n      \\"carbonEmissionData\\": 2.3,\\n      \\"rawData\\": 2,\\n      \\"ratio\\": 0.6,\\n      \\"dataUnit\\": \\"kWh\\",\\n      \\"name\\": \\"核电\\",\\n      \\"nameKey\\": \\"carbonInventory.check.nuclear_electricity\\"\\n    },\\n    \\"renewing\\": {\\n      \\"carbonEmissionData\\": 2.3,\\n      \\"rawData\\": 4.3,\\n      \\"ratio\\": 0.44,\\n      \\"dataUnit\\": \\"kWh\\",\\n      \\"name\\": \\"可再生能源电力\\\\n\\\\n\\",\\n      \\"nameKey\\": \\"carbonInventory.carbonEmissionAnalysis.components.CarbonDetail.keZaiShengZiYuan\\"\\n    },\\n    \\"zero\\": {\\n      \\"carbonEmissionData\\": 1.2,\\n      \\"rawData\\": 444.3,\\n      \\"ratio\\": 0.33,\\n      \\"dataUnit\\": \\"kWh\\",\\n      \\"name\\": \\"零电\\",\\n      \\"nameKey\\": \\"carbonInventory.carbonEmissionAnalysis.components.CarbonDetail.lingTanDianLi\\"\\n    }\\n  },\\n  \\"requestId\\": \\"83A5A7DD-8974-5769-952E-590A97BEA34E\\"\\n}","type":"json"}]',
      'title' => '电力构成分析',
    ),
    'GetElecTrend' => 
    array (
      'summary' => '本接口用于获取电力趋势分析数据。',
      'path' => '/api/v1/carbon/emission/analysis/elec/trend',
      'methods' => 
      array (
        0 => 'post',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'description' => '企业code。',
                'type' => 'string',
                'required' => true,
                'example' => 'C-20240115-3',
              ),
              'yearList' => 
              array (
                'description' => '年份列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '年份。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => true,
                  'example' => '2023',
                ),
                'required' => true,
              ),
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
            'description' => '返回结构体。',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '83A5A7DD-8974-5769-952E-590A97BEA34E',
              ),
              'data' => 
              array (
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'water' => 
                  array (
                    'description' => '水电逐月用电和碳排等数据。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '水电逐月用电和碳排等数据结构体。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'carbonEmissionData' => 
                        array (
                          'description' => '碳排量。',
                          'type' => 'number',
                          'format' => 'double',
                          'example' => '3.14',
                        ),
                        'rawData' => 
                        array (
                          'description' => '用电量。',
                          'type' => 'number',
                          'format' => 'double',
                          'example' => '3.14',
                        ),
                        'ratio' => 
                        array (
                          'description' => '用电量占当月所有用电量的比例：示例值：0.5（即占50%）。',
                          'type' => 'number',
                          'format' => 'double',
                          'example' => '0.5',
                        ),
                        'dataUnit' => 
                        array (
                          'description' => '单位。',
                          'type' => 'string',
                          'example' => 'kWh',
                        ),
                        'name' => 
                        array (
                          'description' => '电力类型名称。',
                          'type' => 'string',
                          'example' => '水电',
                        ),
                        'nameKey' => 
                        array (
                          'description' => '电力类型编码。',
                          'type' => 'string',
                          'example' => 'carbonInventory.check.water_electricity',
                        ),
                        'month' => 
                        array (
                          'description' => '月份。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '12',
                        ),
                        'year' => 
                        array (
                          'description' => '年份。',
                          'type' => 'string',
                          'example' => '2024',
                        ),
                      ),
                    ),
                  ),
                  'light' => 
                  array (
                    'description' => '光电逐月用电和碳排等数据。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '光电逐月用电和碳排等数据结构体。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'carbonEmissionData' => 
                        array (
                          'description' => '碳排量。',
                          'type' => 'number',
                          'format' => 'double',
                          'example' => '3.14',
                        ),
                        'rawData' => 
                        array (
                          'description' => '用电量。',
                          'type' => 'number',
                          'format' => 'double',
                          'example' => '3.14',
                        ),
                        'ratio' => 
                        array (
                          'description' => '用电量占当月所有用电量的比例：示例值：0.5（即占50%）。',
                          'type' => 'number',
                          'format' => 'double',
                          'example' => '0.5',
                        ),
                        'dataUnit' => 
                        array (
                          'description' => '单位。',
                          'type' => 'string',
                          'example' => 'kWh',
                        ),
                        'name' => 
                        array (
                          'description' => '电力类型名称。',
                          'type' => 'string',
                          'example' => '光电',
                        ),
                        'nameKey' => 
                        array (
                          'description' => '电力类型编码。',
                          'type' => 'string',
                          'example' => 'carbonInventory.check.light_electricity',
                        ),
                        'month' => 
                        array (
                          'description' => '月份。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '12',
                        ),
                        'year' => 
                        array (
                          'description' => '年份。',
                          'type' => 'string',
                          'example' => '2024',
                        ),
                      ),
                    ),
                  ),
                  'urban' => 
                  array (
                    'description' => '市电逐月用电和碳排等数据。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '市电逐月用电和碳排等数据结构体。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'carbonEmissionData' => 
                        array (
                          'description' => '碳排量。',
                          'type' => 'number',
                          'format' => 'double',
                          'example' => '3.14',
                        ),
                        'rawData' => 
                        array (
                          'description' => '用电量。',
                          'type' => 'number',
                          'format' => 'double',
                          'example' => '3.14',
                        ),
                        'ratio' => 
                        array (
                          'description' => '用电量占当月所有用电量的比例：示例值：0.5（即占50%）。',
                          'type' => 'number',
                          'format' => 'double',
                          'example' => '0.5',
                        ),
                        'dataUnit' => 
                        array (
                          'description' => '单位。',
                          'type' => 'string',
                          'example' => 'kWh',
                        ),
                        'name' => 
                        array (
                          'description' => '电力类型名称。',
                          'type' => 'string',
                          'example' => '市电',
                        ),
                        'nameKey' => 
                        array (
                          'description' => '电力类型编码。',
                          'type' => 'string',
                          'example' => 'carbonInventory.check.urban_electricity',
                        ),
                        'month' => 
                        array (
                          'description' => '月份。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '12',
                        ),
                        'year' => 
                        array (
                          'description' => '年份。',
                          'type' => 'string',
                          'example' => '2024',
                        ),
                      ),
                    ),
                  ),
                  'wind' => 
                  array (
                    'description' => '风电逐月用电和碳排等数据。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '风电逐月用电和碳排等数据结构体。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'carbonEmissionData' => 
                        array (
                          'description' => '碳排量。',
                          'type' => 'number',
                          'format' => 'double',
                          'example' => '3.14',
                        ),
                        'rawData' => 
                        array (
                          'description' => '用电量。',
                          'type' => 'number',
                          'format' => 'double',
                          'example' => '3.14',
                        ),
                        'ratio' => 
                        array (
                          'description' => '用电量占当月所有用电量的比例：示例值：0.5（即占50%）。',
                          'type' => 'number',
                          'format' => 'double',
                          'example' => '0.5',
                        ),
                        'dataUnit' => 
                        array (
                          'description' => '单位。',
                          'type' => 'string',
                          'example' => 'kWh',
                        ),
                        'name' => 
                        array (
                          'description' => '电力类型名称。',
                          'type' => 'string',
                          'example' => '风电',
                        ),
                        'nameKey' => 
                        array (
                          'description' => '电力类型编码。',
                          'type' => 'string',
                          'example' => 'carbonInventory.check.wind_electricity',
                        ),
                        'month' => 
                        array (
                          'description' => '月份。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '12',
                        ),
                        'year' => 
                        array (
                          'description' => '年份。',
                          'type' => 'string',
                          'example' => '2024',
                        ),
                      ),
                    ),
                  ),
                  'nuclear' => 
                  array (
                    'description' => '核电逐月用电和碳排等数据。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '核电逐月用电和碳排等数据结构体。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'carbonEmissionData' => 
                        array (
                          'description' => '碳排量。',
                          'type' => 'number',
                          'format' => 'double',
                          'example' => '3.14',
                        ),
                        'rawData' => 
                        array (
                          'description' => '用电量。',
                          'type' => 'number',
                          'format' => 'double',
                          'example' => '3.14',
                        ),
                        'ratio' => 
                        array (
                          'description' => '用电量占当月所有用电量的比例：示例值：0.5（即占50%）。',
                          'type' => 'number',
                          'format' => 'double',
                          'example' => '0.5',
                        ),
                        'dataUnit' => 
                        array (
                          'description' => '单位。',
                          'type' => 'string',
                          'example' => 'kWh',
                        ),
                        'name' => 
                        array (
                          'description' => '电力类型名称。',
                          'type' => 'string',
                          'example' => '核电',
                        ),
                        'nameKey' => 
                        array (
                          'description' => '电力类型编码。',
                          'type' => 'string',
                          'example' => 'carbonInventory.check.nuclear_electricity',
                        ),
                        'month' => 
                        array (
                          'description' => '月份。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '12',
                        ),
                        'year' => 
                        array (
                          'description' => '年份。',
                          'type' => 'string',
                          'example' => '2024',
                        ),
                      ),
                    ),
                  ),
                  'renewing' => 
                  array (
                    'description' => '可再生电逐月用电和碳排等数据。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '可再生电逐月用电和碳排等数据结构体。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'carbonEmissionData' => 
                        array (
                          'description' => '碳排量。',
                          'type' => 'number',
                          'format' => 'double',
                          'example' => '3.14',
                        ),
                        'rawData' => 
                        array (
                          'description' => '用电量。',
                          'type' => 'number',
                          'format' => 'double',
                          'example' => '3.14',
                        ),
                        'ratio' => 
                        array (
                          'description' => '用电量占当月所有用电量的比例：示例值：0.5（即占50%）。',
                          'type' => 'number',
                          'format' => 'double',
                          'example' => '0.5',
                        ),
                        'dataUnit' => 
                        array (
                          'description' => '单位。',
                          'type' => 'string',
                          'example' => 'kWh',
                        ),
                        'name' => 
                        array (
                          'description' => '电力类型名称。',
                          'type' => 'string',
                          'example' => '可再生电',
                        ),
                        'nameKey' => 
                        array (
                          'description' => '电力类型编码。',
                          'type' => 'string',
                          'example' => 'carbonInventory.carbonEmissionAnalysis.components.CarbonDetail.lingTanDianLi',
                        ),
                        'month' => 
                        array (
                          'description' => '月份。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '12',
                        ),
                        'year' => 
                        array (
                          'description' => '年份。',
                          'type' => 'string',
                          'example' => '2024',
                        ),
                      ),
                    ),
                  ),
                  'zero' => 
                  array (
                    'description' => '零电逐月用电和碳排等数据。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '零电逐月用电和碳排等数据结构体。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'carbonEmissionData' => 
                        array (
                          'description' => '碳排量。',
                          'type' => 'number',
                          'format' => 'double',
                          'example' => '3.14',
                        ),
                        'rawData' => 
                        array (
                          'description' => '用电量。',
                          'type' => 'number',
                          'format' => 'double',
                          'example' => '3.14',
                        ),
                        'ratio' => 
                        array (
                          'description' => '用电量占当月所有用电量的比例：示例值：0.5（即占50%）。',
                          'type' => 'number',
                          'format' => 'double',
                          'example' => '0.5',
                        ),
                        'dataUnit' => 
                        array (
                          'description' => '单位。',
                          'type' => 'string',
                          'example' => 'kWh',
                        ),
                        'name' => 
                        array (
                          'description' => '电力类型名称。',
                          'type' => 'string',
                          'example' => '零电',
                        ),
                        'nameKey' => 
                        array (
                          'description' => '电力类型编码。',
                          'type' => 'string',
                          'example' => 'carbonInventory.carbonEmissionAnalysis.components.CarbonDetail.lingTanDianLi',
                        ),
                        'month' => 
                        array (
                          'description' => '月份。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '12',
                        ),
                        'year' => 
                        array (
                          'description' => '年份。',
                          'type' => 'string',
                          'example' => '2024',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'code' => 
              array (
                'description' => '请求返回 code，Success 代表请求成功，其他情况代表请求不成功，具体错误原因描述可通过 msg 查看。',
                'type' => 'string',
                'example' => '200',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"83A5A7DD-8974-5769-952E-590A97BEA34E\\",\\n  \\"data\\": {\\n    \\"water\\": [\\n      {\\n        \\"carbonEmissionData\\": 3.14,\\n        \\"rawData\\": 3.14,\\n        \\"ratio\\": 0.5,\\n        \\"dataUnit\\": \\"kWh\\",\\n        \\"name\\": \\"水电\\",\\n        \\"nameKey\\": \\"carbonInventory.check.water_electricity\\",\\n        \\"month\\": 12,\\n        \\"year\\": \\"2024\\"\\n      }\\n    ],\\n    \\"light\\": [\\n      {\\n        \\"carbonEmissionData\\": 3.14,\\n        \\"rawData\\": 3.14,\\n        \\"ratio\\": 0.5,\\n        \\"dataUnit\\": \\"kWh\\",\\n        \\"name\\": \\"光电\\",\\n        \\"nameKey\\": \\"carbonInventory.check.light_electricity\\",\\n        \\"month\\": 12,\\n        \\"year\\": \\"2024\\"\\n      }\\n    ],\\n    \\"urban\\": [\\n      {\\n        \\"carbonEmissionData\\": 3.14,\\n        \\"rawData\\": 3.14,\\n        \\"ratio\\": 0.5,\\n        \\"dataUnit\\": \\"kWh\\",\\n        \\"name\\": \\"市电\\",\\n        \\"nameKey\\": \\"carbonInventory.check.urban_electricity\\",\\n        \\"month\\": 12,\\n        \\"year\\": \\"2024\\"\\n      }\\n    ],\\n    \\"wind\\": [\\n      {\\n        \\"carbonEmissionData\\": 3.14,\\n        \\"rawData\\": 3.14,\\n        \\"ratio\\": 0.5,\\n        \\"dataUnit\\": \\"kWh\\",\\n        \\"name\\": \\"风电\\",\\n        \\"nameKey\\": \\"carbonInventory.check.wind_electricity\\",\\n        \\"month\\": 12,\\n        \\"year\\": \\"2024\\"\\n      }\\n    ],\\n    \\"nuclear\\": [\\n      {\\n        \\"carbonEmissionData\\": 3.14,\\n        \\"rawData\\": 3.14,\\n        \\"ratio\\": 0.5,\\n        \\"dataUnit\\": \\"kWh\\",\\n        \\"name\\": \\"核电\\",\\n        \\"nameKey\\": \\"carbonInventory.check.nuclear_electricity\\",\\n        \\"month\\": 12,\\n        \\"year\\": \\"2024\\"\\n      }\\n    ],\\n    \\"renewing\\": [\\n      {\\n        \\"carbonEmissionData\\": 3.14,\\n        \\"rawData\\": 3.14,\\n        \\"ratio\\": 0.5,\\n        \\"dataUnit\\": \\"kWh\\",\\n        \\"name\\": \\"可再生电\\",\\n        \\"nameKey\\": \\"carbonInventory.carbonEmissionAnalysis.components.CarbonDetail.lingTanDianLi\\",\\n        \\"month\\": 12,\\n        \\"year\\": \\"2024\\"\\n      }\\n    ],\\n    \\"zero\\": [\\n      {\\n        \\"carbonEmissionData\\": 3.14,\\n        \\"rawData\\": 3.14,\\n        \\"ratio\\": 0.5,\\n        \\"dataUnit\\": \\"kWh\\",\\n        \\"name\\": \\"零电\\",\\n        \\"nameKey\\": \\"carbonInventory.carbonEmissionAnalysis.components.CarbonDetail.lingTanDianLi\\",\\n        \\"month\\": 12,\\n        \\"year\\": \\"2024\\"\\n      }\\n    ]\\n  },\\n  \\"code\\": \\"200\\"\\n}","type":"json"}]',
      'title' => '电力趋势分析',
    ),
    'GetAreaElecConstitute' => 
    array (
      'summary' => '本接口用于获取电力场站分析数据。',
      'path' => '/api/v1/carbon/emission/analysis/elec/area',
      'methods' => 
      array (
        0 => 'post',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'description' => '企业code。',
                'type' => 'string',
                'required' => true,
                'example' => 'Z-20240115-2',
              ),
              'year' => 
              array (
                'description' => '年份。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => true,
                'example' => '2024',
              ),
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
            'description' => '返回结构体。',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '83A5A7DD-8974-5769-952E-590A97BEA34E',
              ),
              'data' => 
              array (
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'water' => 
                  array (
                    'description' => '各企业的水电用电和碳排等数据。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '各企业的水电用电和碳排等数据结构体。',
                      '$ref' => '#/components/schemas/CarbonEmissionElecSummaryItem',
                    ),
                  ),
                  'light' => 
                  array (
                    'description' => '各企业的光电用电和碳排等数据。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '各企业的光电用电和碳排等数据结构体。',
                      '$ref' => '#/components/schemas/CarbonEmissionElecSummaryItem',
                    ),
                  ),
                  'urban' => 
                  array (
                    'description' => '各企业的市电用电和碳排等数据。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '各企业的市电用电和碳排等数据结构体。',
                      '$ref' => '#/components/schemas/CarbonEmissionElecSummaryItem',
                    ),
                  ),
                  'wind' => 
                  array (
                    'description' => '各企业的风电用电和碳排等数据。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '各企业的风电用电和碳排等数据结构体。',
                      '$ref' => '#/components/schemas/CarbonEmissionElecSummaryItem',
                    ),
                  ),
                  'nuclear' => 
                  array (
                    'description' => '各企业的核电用电和碳排等数据。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '各企业的核电用电和碳排等数据用电量。',
                      '$ref' => '#/components/schemas/CarbonEmissionElecSummaryItem',
                    ),
                  ),
                  'renewing' => 
                  array (
                    'description' => '各企业的可再生电用电和碳排等数据。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '各企业的可再生电用电和碳排等数据用电量。',
                      '$ref' => '#/components/schemas/CarbonEmissionElecSummaryItem',
                    ),
                  ),
                  'zero' => 
                  array (
                    'description' => '各企业的零电用电和碳排等数据。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '各企业的零电用电和碳排等数据结构体。',
                      '$ref' => '#/components/schemas/CarbonEmissionElecSummaryItem',
                    ),
                  ),
                ),
              ),
              'code' => 
              array (
                'description' => '请求返回 code，Success 代表请求成功，其他情况代表请求不成功，具体错误原因描述可通过 msg 查看。',
                'type' => 'string',
                'example' => '200',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"83A5A7DD-8974-5769-952E-590A97BEA34E\\",\\n  \\"data\\": {\\n    \\"water\\": [\\n      {\\n        \\"carbonEmissionData\\": 0,\\n        \\"rawData\\": 0,\\n        \\"ratio\\": 0,\\n        \\"dataUnit\\": \\"\\",\\n        \\"name\\": \\"\\"\\n      }\\n    ],\\n    \\"light\\": [\\n      {\\n        \\"carbonEmissionData\\": 0,\\n        \\"rawData\\": 0,\\n        \\"ratio\\": 0,\\n        \\"dataUnit\\": \\"\\",\\n        \\"name\\": \\"\\"\\n      }\\n    ],\\n    \\"urban\\": [\\n      {\\n        \\"carbonEmissionData\\": 0,\\n        \\"rawData\\": 0,\\n        \\"ratio\\": 0,\\n        \\"dataUnit\\": \\"\\",\\n        \\"name\\": \\"\\"\\n      }\\n    ],\\n    \\"wind\\": [],\\n    \\"nuclear\\": [],\\n    \\"renewing\\": [],\\n    \\"zero\\": []\\n  },\\n  \\"code\\": \\"200\\"\\n}","type":"json"}]',
      'title' => '场站电力分析',
    ),
    'GetGasConstitute' => 
    array (
      'summary' => '本接口用于获取气体构成分析。',
      'path' => '/api/v1/carbon/emission/analysis/gas/constitute',
      'methods' => 
      array (
        0 => 'post',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'description' => '企业code',
                'type' => 'string',
                'required' => true,
                'example' => 'C-20240115-3',
              ),
              'year' => 
              array (
                'description' => '年份',
                'type' => 'integer',
                'format' => 'int32',
                'required' => true,
                'example' => '2024',
              ),
              'moduleType' => 
              array (
                'description' => '模块类型',
                'type' => 'integer',
                'format' => 'int32',
                'required' => true,
                'example' => '3',
              ),
              'moduleCode' => 
              array (
                'description' => '模块编码',
                'type' => 'string',
                'required' => false,
                'example' => 'carbonInventory.check.scope_1_direct_ghg_emissions
',
              ),
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
            'description' => '返回结构体。',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '83A5A7DD-8974-5769-952E-590A97BEA34E
',
              ),
              'data' => 
              array (
                'description' => '返回数据。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '返回数据结构。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'type' => 
                    array (
                      'description' => '气体类型。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'name' => 
                    array (
                      'description' => '气体名称。',
                      'type' => 'string',
                      'example' => 'CO₂',
                    ),
                    'gasEmissionData' => 
                    array (
                      'description' => '气体排放量。',
                      'type' => 'number',
                      'format' => 'double',
                      'example' => '3.14',
                    ),
                    'carbonEmissionData' => 
                    array (
                      'description' => '碳排放当量。',
                      'type' => 'number',
                      'format' => 'double',
                      'example' => '3.14',
                    ),
                    'ratio' => 
                    array (
                      'description' => '碳排占比，示例值：0.5（即占50%）。',
                      'type' => 'number',
                      'format' => 'double',
                      'example' => '0.5',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"83A5A7DD-8974-5769-952E-590A97BEA34E\\\\n\\",\\n  \\"data\\": [\\n    {\\n      \\"type\\": 1,\\n      \\"name\\": \\"CO₂\\",\\n      \\"gasEmissionData\\": 3.14,\\n      \\"carbonEmissionData\\": 3.14,\\n      \\"ratio\\": 0.5\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '气体构成分析',
    ),
    'GetOrgConstitute' => 
    array (
      'summary' => '本接口用于获取碳盘查组织分析数据。',
      'path' => '/api/v1/carbon/emission/analysis/org',
      'methods' => 
      array (
        0 => 'post',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'code' => 
              array (
                'description' => '企业code。',
                'type' => 'string',
                'required' => true,
                'example' => 'Z-20240115-2',
              ),
              'year' => 
              array (
                'description' => '年份。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => true,
                'example' => '2024',
              ),
              'moduleCode' => 
              array (
                'description' => '模块编码。',
                'type' => 'string',
                'required' => false,
                'example' => 'carbonInventory.check.scope_1_direct_ghg_emissions
',
              ),
              'moduleType' => 
              array (
                'description' => '模块类型。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => true,
                'example' => '3',
              ),
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
            'description' => '返回结构体。',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '83A5A7DD-8974-5769-952E-590A97BEA34E',
              ),
              'data' => 
              array (
                'description' => '返回数据。',
                '$ref' => '#/components/schemas/OrgEmission',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"83A5A7DD-8974-5769-952E-590A97BEA34E\\",\\n  \\"data\\": {\\n    \\"name\\": \\"\\",\\n    \\"nameKey\\": \\"\\",\\n    \\"carbonEmissionData\\": 0,\\n    \\"weightingCarbonEmissionData\\": 0,\\n    \\"weightingRatio\\": 0,\\n    \\"ratio\\": 0,\\n    \\"weightingProportion\\": 0,\\n    \\"moduleEmissionList\\": [\\n      {\\n        \\"name\\": \\"\\",\\n        \\"nameKey\\": \\"\\",\\n        \\"carbonEmissionData\\": 0,\\n        \\"ratio\\": 0\\n      }\\n    ],\\n    \\"subEmissionItems\\": [\\n      {\\n        \\"name\\": \\"\\",\\n        \\"nameKey\\": \\"\\",\\n        \\"carbonEmissionData\\": 0,\\n        \\"weightingCarbonEmissionData\\": 0,\\n        \\"weightingRatio\\": 0,\\n        \\"ratio\\": 0,\\n        \\"weightingProportion\\": 0,\\n        \\"moduleEmissionList\\": [\\n          {\\n            \\"name\\": \\"\\",\\n            \\"nameKey\\": \\"\\",\\n            \\"carbonEmissionData\\": 0,\\n            \\"ratio\\": 0\\n          }\\n        ],\\n        \\"subEmissionItems\\": [\\n          {\\n            \\"name\\": \\"\\",\\n            \\"nameKey\\": \\"\\",\\n            \\"carbonEmissionData\\": 0,\\n            \\"weightingCarbonEmissionData\\": 0,\\n            \\"weightingRatio\\": 0,\\n            \\"ratio\\": 0,\\n            \\"weightingProportion\\": 0,\\n            \\"moduleEmissionList\\": [\\n              {\\n                \\"name\\": \\"\\",\\n                \\"nameKey\\": \\"\\",\\n                \\"carbonEmissionData\\": 0,\\n                \\"ratio\\": 0\\n              }\\n            ],\\n            \\"subEmissionItems\\": []\\n          }\\n        ]\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '碳盘查组织分析',
    ),
    'PushDeviceData' => 
    array (
      'summary' => '本接口用于推送设备测点数据，例如推送电能表电压等数据。',
      'path' => '/api/v1/data/increment/push',
      'methods' => 
      array (
        0 => 'post',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'deviceType' => 
              array (
                'description' => '设备类型。
[查看设备类型定义](https://carbon-doc.oss-cn-hangzhou.aliyuncs.com/%E6%B5%8B%E7%82%B9%E9%99%84%E5%BD%95.pdf)',
                'type' => 'string',
                'required' => true,
                'example' => '1',
              ),
              'devices' => 
              array (
                'description' => '推送数据的设备列表',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'deviceId' => 
                    array (
                      'description' => 'deviceType为12、13、17需要传system_id（字段名称仍为device_id)
deviceType为15、16不传
其他情况必传。',
                      'type' => 'string',
                      'required' => true,
                      'example' => '设备ID',
                    ),
                    'recordTime' => 
                    array (
                      'description' => '测点数据产生时间。',
                      'type' => 'string',
                      'required' => true,
                      'example' => '2021-09-08 18:40:00',
                    ),
                    'data' => 
                    array (
                      'description' => '测点信息
避免精度问题，测点数据统一传字符串
缺少必填字段功能无法正常使用
缺少推荐字段，部分功能可能会收到影响，具体影响详见附录中的设备测点备注
[参考测点定义](https://carbon-doc.oss-cn-hangzhou.aliyuncs.com/%E6%B5%8B%E7%82%B9%E9%99%84%E5%BD%95.pdf)',
                      'type' => 'object',
                      'required' => true,
                      'example' => '{
			"dp_imp": "329.0",
			"F": "148.0",
			"eq_imp": "363.0",
			"Ep_imp_1": "128.0",
			"Ep_imp_2": "157.0",
			"Ua": "226.0",
			"Ub": "285.0",
			"Ep_imp": "325.0",
			"Uc": "342.0",
			"Ep_imp_3": "109.0",
			"Ep_imp_4": "94.0",
			"P": "514.0",
			"Pa": "443.0",
			"Q": "265.0",
			"dp_exp": "261.0",
			"eq_exp": "399.0",
			"COSQ": "223.0",
			"Ia": "240.0",
			"Ib": "216.0",
			"Ic": "229.0",
			"Ep_exp": "115.0",
			"VdisPer": "120.0"
		}',
                    ),
                  ),
                  'required' => true,
                ),
                'required' => true,
              ),
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
            'description' => '返回结构体。',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '83A5A7DD-8974-5769-952E-590A97BEA34E',
              ),
              'data' => 
              array (
                'description' => '数据是否推送成功。
 成功返回success。',
                'type' => 'string',
                'example' => 'success',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"83A5A7DD-8974-5769-952E-590A97BEA34E\\",\\n  \\"data\\": \\"success\\"\\n}","type":"json"}]',
      'title' => '推送设备测点数据',
    ),
    'GetOrgAndFactory' => 
    array (
      'summary' => '' . "\0" . '查询账号激活的相关组织和场站。需注意的是未在控制台进行激活的场站不会被查询到。',
      'path' => '/api/external/getOrgAndFactory',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
      ),
      'parameters' => 
      array (
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
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID',
                'type' => 'string',
                'example' => '83A5A7DD-8974-5769-952E-590A97BEA34E',
              ),
              'data' => 
              array (
                'description' => '返回信息',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '返回结果。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'aliyunPk' => 
                    array (
                      'description' => '阿里云账号ID',
                      'type' => 'string',
                      'example' => '1319XXXXXX64960',
                    ),
                    'organizationId' => 
                    array (
                      'description' => '企业ID',
                      'type' => 'string',
                      'example' => '6265f42XXXX2fec150',
                    ),
                    'organizationName' => 
                    array (
                      'description' => '企业名称',
                      'type' => 'string',
                      'example' => '乐迪工业园',
                    ),
                    'factoryList' => 
                    array (
                      'description' => '场站信息列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '信息列表',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'factoryId' => 
                          array (
                            'description' => '场站id',
                            'type' => 'string',
                            'example' => 'pn_95',
                          ),
                          'factoryName' => 
                          array (
                            'description' => '场站名称',
                            'type' => 'string',
                            'example' => '乐迪工业园1',
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'httpCode' => 
              array (
                'description' => 'http状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'code' => 
              array (
                'description' => '返回码。',
                'type' => 'string',
                'example' => 'Success',
              ),
              'success' => 
              array (
                'description' => '请求是否成功。',
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
            'errorCode' => 'invalidParameter',
            'errorMessage' => 'Invalid parameter values.',
          ),
        ),
        401 => 
        array (
          0 => 
          array (
            'errorCode' => 'notAuthorized',
            'errorMessage' => 'No permissions to call API operations.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'systemError',
            'errorMessage' => 'System error.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"83A5A7DD-8974-5769-952E-590A97BEA34E\\",\\n  \\"data\\": [\\n    {\\n      \\"aliyunPk\\": \\"1319XXXXXX64960\\",\\n      \\"organizationId\\": \\"6265f42XXXX2fec150\\",\\n      \\"organizationName\\": \\"乐迪工业园\\",\\n      \\"factoryList\\": [\\n        {\\n          \\"factoryId\\": \\"pn_95\\",\\n          \\"factoryName\\": \\"乐迪工业园1\\"\\n        }\\n      ]\\n    }\\n  ],\\n  \\"httpCode\\": 200,\\n  \\"code\\": \\"Success\\",\\n  \\"success\\": true\\n}","type":"json"}]',
      'title' => '获取组织和场站',
      'description' => '-  如果客户有激活的场站，返回查询组织以及场站信息。如果没有激活的场站，则返回空值。
- 目前接入点仅支持杭州`energyexpertexternal.cn-hangzhou.aliyuncs.com`
- 使用该接口需要先开通白名单，请通过官网<props="china">[联系我们](https://energy.aliyun.com/ifa/web/defaultLoginPage?adapter=aliyun#/consult?source=%E8%83%BD%E8%80%97%E5%AE%9D%E7%99%BB%E5%BD%95%E9%A1%B5%EF%BC%88WEB%EF%BC%89)</props> 
<props="intl">[联系我们](https://energy.alibabacloud.com/common?adapter=aliyun&lang=en-US#/home/en)</props>进行开通。',
      'requestParamsDescription' => '无请求参数，直接查询账号下激活的场站信息。',
    ),
    'GetDeviceList' => 
    array (
      'summary' => '查询账号激活场站的设备列表。',
      'path' => '/api/external/getDeviceList',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'factoryId',
          'in' => 'query',
          'allowEmptyValue' => false,
          'schema' => 
          array (
            'description' => '场站id',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'pn_95',
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
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID',
                'type' => 'string',
                'example' => '83A5A7DD-8974-5769-952E-590A97BEA34E',
              ),
              'data' => 
              array (
                'description' => '返回数据',
                'type' => 'object',
                'properties' => 
                array (
                  'factoryId' => 
                  array (
                    'description' => '场站id',
                    'type' => 'string',
                    'example' => 'pn_95',
                  ),
                  'deviceList' => 
                  array (
                    'description' => '设备列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '设备列表',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'deviceId' => 
                        array (
                          'description' => '设备id',
                          'type' => 'string',
                          'example' => 'pn_69873',
                        ),
                        'deviceName' => 
                        array (
                          'description' => '设备名称',
                          'type' => 'string',
                          'example' => '主变4#',
                        ),
                        'firstTypeName' => 
                        array (
                          'description' => '表计一级类型',
                          'type' => 'string',
                          'example' => '电表',
                        ),
                        'secondTypeName' => 
                        array (
                          'description' => '表计二级类型',
                          'type' => 'string',
                          'example' => '关口表',
                        ),
                        'parentDevice' => 
                        array (
                          'description' => '上级设备',
                          'type' => 'string',
                          'example' => 'pn_6987',
                        ),
                        'info' => 
                        array (
                          'description' => '设备信息',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'magnification' => 
                            array (
                              'description' => '倍率',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '80',
                            ),
                            'pressure' => 
                            array (
                              'description' => '高低压',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '0',
                            ),
                            'pt' => 
                            array (
                              'description' => '电压变比值',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '80',
                            ),
                            'ct' => 
                            array (
                              'description' => '电流变比值',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '1',
                            ),
                            'constKva' => 
                            array (
                              'description' => '额定容量。单位：kVA',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '100',
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  'httpCode' => 
                  array (
                    'description' => 'http状态码',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '200',
                  ),
                  'code' => 
                  array (
                    'description' => '状态码',
                    'type' => 'string',
                    'example' => 'Success',
                  ),
                  'success' => 
                  array (
                    'description' => '表示实际请求是否成功',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                ),
              ),
              'httpCode' => 
              array (
                'description' => 'http状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'code' => 
              array (
                'description' => '状态码',
                'type' => 'string',
                'example' => 'Success',
              ),
              'success' => 
              array (
                'description' => '表示实际请求是否成功',
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
            'errorCode' => 'invalidParameter',
            'errorMessage' => 'Invalid parameter values.',
          ),
        ),
        401 => 
        array (
          0 => 
          array (
            'errorCode' => 'notAuthorized',
            'errorMessage' => 'No permissions to call API operations.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'systemError',
            'errorMessage' => 'System error.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"83A5A7DD-8974-5769-952E-590A97BEA34E\\",\\n  \\"data\\": {\\n    \\"factoryId\\": \\"pn_95\\",\\n    \\"deviceList\\": [\\n      {\\n        \\"deviceId\\": \\"pn_69873\\",\\n        \\"deviceName\\": \\"主变4#\\",\\n        \\"firstTypeName\\": \\"电表\\",\\n        \\"secondTypeName\\": \\"关口表\\",\\n        \\"parentDevice\\": \\"pn_6987\\",\\n        \\"info\\": {\\n          \\"magnification\\": 80,\\n          \\"pressure\\": 0,\\n          \\"pt\\": 80,\\n          \\"ct\\": 1,\\n          \\"constKva\\": 100\\n        }\\n      }\\n    ],\\n    \\"httpCode\\": 200,\\n    \\"code\\": \\"Success\\",\\n    \\"success\\": true\\n  },\\n  \\"httpCode\\": 200,\\n  \\"code\\": \\"Success\\",\\n  \\"success\\": true\\n}","type":"json"}]',
      'title' => '获取设备列表',
      'description' => '- 通过场站，查询采集终端设备，如果是通过校验，可以查询接口信息，如果不是，返回空值。
- 如果场站虚拟表存在，则过滤掉虚拟表。
- 目前接入点仅支持杭州`energyexpertexternal.cn-hangzhou.aliyuncs.com`
- 使用该接口需要先开通白名单，请通过官网<props="china">[联系我们](https://energy.aliyun.com/ifa/web/defaultLoginPage?adapter=aliyun#/consult?source=%E8%83%BD%E8%80%97%E5%AE%9D%E7%99%BB%E5%BD%95%E9%A1%B5%EF%BC%88WEB%EF%BC%89)</props> 
<props="intl">[联系我们](https://energy.alibabacloud.com/common?adapter=aliyun&lang=en-US#/home/en)</props>进行开通。',
    ),
    'GetDeviceInfo' => 
    array (
      'summary' => '查询账号激活场站的设备信息。',
      'path' => '/api/external/getDeviceInfo',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'factoryId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '场站id',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'pn_95',
          ),
        ),
        1 => 
        array (
          'name' => 'deviceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备id',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'pn_69873',
          ),
        ),
        2 => 
        array (
          'name' => 'ds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '时间字符串，时间格式为YYYY-mm-dd',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2022-07-26',
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
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID',
                'type' => 'string',
                'example' => '83A5A7DD-8974-5769-952E-590A97BEA34E',
              ),
              'httpCode' => 
              array (
                'description' => 'http状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'code' => 
              array (
                'description' => '请求返回 code，Success 代表请求成功，其他情况代表请求不成功，具体错误原因描述可通过 msg 查看。

',
                'type' => 'string',
                'example' => 'Success',
              ),
              'success' => 
              array (
                'description' => '请求是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'data' => 
              array (
                'description' => '返回信息',
                'type' => 'object',
                'properties' => 
                array (
                  'deviceId' => 
                  array (
                    'description' => '设备id',
                    'type' => 'string',
                    'example' => 'pn_69873',
                  ),
                  'deviceName' => 
                  array (
                    'description' => '设备名称',
                    'type' => 'string',
                    'example' => '主变4#',
                  ),
                  'firstTypeName' => 
                  array (
                    'description' => '表计一级类型',
                    'type' => 'string',
                    'example' => '电表',
                  ),
                  'secondTypeName' => 
                  array (
                    'description' => '表计二级类型',
                    'type' => 'string',
                    'example' => '关口表',
                  ),
                  'recordList' => 
                  array (
                    'description' => '参数列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '设备信息',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'statisticsDate' => 
                        array (
                          'description' => '统计日期',
                          'type' => 'string',
                          'example' => '2022-07-26 00:00:00',
                        ),
                        'paramName' => 
                        array (
                          'description' => '参数名称',
                          'type' => 'string',
                          'example' => 'A相电流',
                        ),
                        'unit' => 
                        array (
                          'description' => '单位',
                          'type' => 'string',
                          'example' => 'A',
                        ),
                        'identifier' => 
                        array (
                          'description' => '设备标识符',
                          'type' => 'string',
                          'example' => 'Ia',
                        ),
                        'type' => 
                        array (
                          'description' => '测点类型',
                          'type' => 'string',
                          'example' => 'DOUBLE',
                        ),
                        'value' => 
                        array (
                          'description' => '数值',
                          'type' => 'number',
                          'format' => 'double',
                          'example' => '20.00',
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
            'errorCode' => 'invalidParameter',
            'errorMessage' => 'Invalid parameter values.',
          ),
        ),
        401 => 
        array (
          0 => 
          array (
            'errorCode' => 'notAuthorized',
            'errorMessage' => 'No permissions to call API operations.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'systemError',
            'errorMessage' => 'System error.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"83A5A7DD-8974-5769-952E-590A97BEA34E\\",\\n  \\"httpCode\\": 200,\\n  \\"code\\": \\"Success\\",\\n  \\"success\\": true,\\n  \\"data\\": {\\n    \\"deviceId\\": \\"pn_69873\\",\\n    \\"deviceName\\": \\"主变4#\\",\\n    \\"firstTypeName\\": \\"电表\\",\\n    \\"secondTypeName\\": \\"关口表\\",\\n    \\"recordList\\": [\\n      {\\n        \\"statisticsDate\\": \\"2022-07-26 00:00:00\\",\\n        \\"paramName\\": \\"A相电流\\",\\n        \\"unit\\": \\"A\\",\\n        \\"identifier\\": \\"Ia\\",\\n        \\"type\\": \\"DOUBLE\\",\\n        \\"value\\": 20\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '获取设备数据',
      'description' => '- 通过采集终端设备id，查询设备参数，如果是通过校验，可以查询接口信息，如果不是，返回空值。
- 需要按天维度的时间，及对单个设备进行查询。如果数据不存在，则返回空值。
- 目前接入点仅支持杭州`energyexpertexternal.cn-hangzhou.aliyuncs.com`
- 使用该接口需要先开通白名单，请通过官网<props="china">[联系我们](https://energy.aliyun.com/ifa/web/defaultLoginPage?adapter=aliyun#/consult?source=%E8%83%BD%E8%80%97%E5%AE%9D%E7%99%BB%E5%BD%95%E9%A1%B5%EF%BC%88WEB%EF%BC%89)</props> 
<props="intl">[联系我们](https://energy.alibabacloud.com/common?adapter=aliyun&lang=en-US#/home/en)</props>进行开通。',
    ),
    'SubmitDocumentAnalyzeJob' => 
    array (
      'summary' => '文档解析接口用于文档关键内容抽取，根据用户预设的Key-Value模板从文档中提取出Key-Value信息。
文档解析接口为异步接口，需要先调用文档解析异步提交服务，然后调用文档智能解析结果查询服务GetDocumentAnalyzeResult接口进行结果轮询。
异步提交服务支持本地文件和URL文件两种方式：
URL上传的异步提交服务接口为：SubmitDocumentAnalyzeJob接口。
本地文件上传的异步提交服务接口为：SubmitDocumentAnalyzeJobAdvance接口。',
      'path' => '/api/v1/aidoc/document/submitDocumentAnalyzeJob',
      'methods' => 
      array (
        0 => 'post',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'fileUrl',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'fileUrl/fileUrlObject二选一：

- fileUrl：以文档URL方式使用，单个文档（支持1000页以内、100MB以内的 doc, docx，pdf, csv，xlsx，xls 文档）

- fileUrlObject：以本地文件上传方式调用接口时使用，单个文档（支持1000页以内、100 MB以内的 doc, docx，pdf, csv，xlsx，xls 文档）',
            'type' => 'string',
            'required' => false,
            'example' => 'fileUrl：https://example.com/example.pdf
fileUrlObject：本地文件生成的FileInputStream',
            'isFileTransferUrl' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'fileName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件名需带文件类型后缀',
            'type' => 'string',
            'required' => true,
            'example' => 'example.pdf',
          ),
        ),
        2 => 
        array (
          'name' => 'templateId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '唯一的解析模板ID，用于指定文档要抽取的key-value，需登录模板管理页面配置模板后获取对应的模板ID。',
            'type' => 'string',
            'required' => true,
            'example' => '572d24k0c95a',
          ),
        ),
        3 => 
        array (
          'name' => 'folderId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '唯一的知识库文件夹ID，当需要对文档进行分类管理、控制在线问答查询的文档范围时使用。为空时表示将文档上传到租户的根目录。',
            'type' => 'string',
            'required' => false,
            'example' => '默认为空',
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
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID',
                'type' => 'string',
                'example' => '4A0AEC56-5C9A-5D47-93DF-7227836FFF82',
              ),
              'data' => 
              array (
                'description' => '返回结果',
                'type' => 'object',
                'properties' => 
                array (
                  'jobId' => 
                  array (
                    'description' => '作业ID，用于调用”获取文档解析结果“接口的请求参数。',
                    'type' => 'string',
                    'example' => 'bfce2248-1546-4298-8bcf-70ac26e69646',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"4A0AEC56-5C9A-5D47-93DF-7227836FFF82\\",\\n  \\"data\\": {\\n    \\"jobId\\": \\"bfce2248-1546-4298-8bcf-70ac26e69646\\"\\n  }\\n}","type":"json"}]',
      'title' => '提交文档解析作业 ',
    ),
    'GetDocumentAnalyzeResult' => 
    array (
      'summary' => '文档解析的key-Value结果需要调用文档智能解析结果查询服务GetDocumentAnalyzeResult接口查询。
调用结果查询接口的入参jobId就是前面异步任务提交接口返回的出参jobId，查询结果有处理中、处理成功、处理失败三种情况。',
      'path' => '/api/v1/aidoc/document/getDocumentAnalyzeResult',
      'methods' => 
      array (
        0 => 'post',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求参数',
            'type' => 'object',
            'properties' => 
            array (
              'jobId' => 
              array (
                'description' => '作业ID，指定要查询哪一个文档的解析结果。通过”提交文档解析作业“接口提交文档的返回参数。',
                'type' => 'string',
                'required' => true,
                'example' => 'bfce2248-1546-4298-8bcf-70ac26e69646',
              ),
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
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID',
                'type' => 'string',
                'example' => '83A5A7DD-8974-5769-952E-590A97BEA34E',
              ),
              'data' => 
              array (
                'description' => '返回数据',
                'type' => 'object',
                'properties' => 
                array (
                  'kvListInfo' => 
                  array (
                    'description' => '文档解析结果',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '文档解析结果详情',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'keyName' => 
                        array (
                          'description' => '字段Key名称',
                          'type' => 'string',
                          'example' => '租户',
                        ),
                        'keyValue' => 
                        array (
                          'description' => '字段key值',
                          'type' => 'string',
                          'example' => '阿里云xxx有限公司',
                        ),
                        'context' => 
                        array (
                          'description' => '召回内容',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'key' => 
                            array (
                              'description' => 'key的召回信息',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => 'key的召回信息详情',
                                '$ref' => '#/components/schemas/ContentItem',
                              ),
                            ),
                            'value' => 
                            array (
                              'description' => 'value的召回信息',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => 'value的召回信息详情',
                                '$ref' => '#/components/schemas/ContentItem',
                              ),
                            ),
                            'confidence' => 
                            array (
                              'description' => '置信度',
                              'type' => 'object',
                              'properties' => 
                              array (
                                'keyConfidence' => 
                                array (
                                  'description' => 'key的置信度',
                                  'type' => 'number',
                                  'format' => 'double',
                                  'example' => '0.9994202852249146',
                                ),
                                'valueConfidence' => 
                                array (
                                  'description' => 'value的置信度',
                                  'type' => 'number',
                                  'format' => 'double',
                                  'example' => '0.9794202852249146',
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
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"83A5A7DD-8974-5769-952E-590A97BEA34E\\",\\n  \\"data\\": {\\n    \\"kvListInfo\\": [\\n      {\\n        \\"keyName\\": \\"租户\\",\\n        \\"keyValue\\": \\"阿里云xxx有限公司\\",\\n        \\"context\\": {\\n          \\"key\\": [\\n            {\\n              \\"score\\": 0.45,\\n              \\"type\\": \\"img\\",\\n              \\"extInfo\\": [\\n                {\\n                  \\"alignment\\": \\"center\\",\\n                  \\"index\\": 8,\\n                  \\"level\\": 2,\\n                  \\"pageNum\\": [\\n                    1\\n                  ],\\n                  \\"pos\\": [\\n                    {\\n                      \\"x\\": 1,\\n                      \\"y\\": 2\\n                    }\\n                  ],\\n                  \\"subType\\": \\"picture\\",\\n                  \\"text\\": \\"版面内容\\",\\n                  \\"type\\": \\"table\\",\\n                  \\"uniqueId\\": \\"88c712db271443dd4e3697cb9b5dab3a\\"\\n                }\\n              ],\\n              \\"text\\": \\"\\"\\n            }\\n          ],\\n          \\"value\\": [\\n            {\\n              \\"score\\": 0.45,\\n              \\"type\\": \\"img\\",\\n              \\"extInfo\\": [\\n                {\\n                  \\"alignment\\": \\"center\\",\\n                  \\"index\\": 8,\\n                  \\"level\\": 2,\\n                  \\"pageNum\\": [\\n                    1\\n                  ],\\n                  \\"pos\\": [\\n                    {\\n                      \\"x\\": 1,\\n                      \\"y\\": 2\\n                    }\\n                  ],\\n                  \\"subType\\": \\"picture\\",\\n                  \\"text\\": \\"版面内容\\",\\n                  \\"type\\": \\"table\\",\\n                  \\"uniqueId\\": \\"88c712db271443dd4e3697cb9b5dab3a\\"\\n                }\\n              ],\\n              \\"text\\": \\"\\"\\n            }\\n          ],\\n          \\"confidence\\": {\\n            \\"keyConfidence\\": 0.9994202852249146,\\n            \\"valueConfidence\\": 0.9794202852249146\\n          }\\n        }\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '获取文档解析结果',
    ),
    'SendDocumentAskQuestion' => 
    array (
      'summary' => '在线知识文档问答接口，支持用户使用自然语言对已有的知识文档内容进行提问。问答范围默认是当前账号权限下已解析完成的所有文档，可根据文件夹限制问答范围。',
      'path' => '/api/v1/aidoc/document/sendDocumentAskQuestion',
      'methods' => 
      array (
        0 => 'post',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求参数',
            'type' => 'object',
            'properties' => 
            array (
              'prompt' => 
              array (
                'description' => '用户查询的问题',
                'type' => 'string',
                'required' => true,
                'example' => '2023年总碳排量',
              ),
              'folderId' => 
              array (
                'description' => '文件夹ID，用于指定查询的文档范围。为空时表示查询租户下的所有文档。',
                'type' => 'string',
                'required' => false,
                'example' => '1a851c4a-1d65-11ef-99a7-ssfsfdd',
              ),
              'sessionId' => 
              array (
                'description' => '问答会话ID，用于记录同一个用户的多次问答。为空时表示不区分会话。',
                'type' => 'string',
                'required' => false,
                'example' => 'bfce2248-1546-4298-8bcf-70ac26e69646',
              ),
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
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID',
                'type' => 'string',
                'example' => '83A5A7DD-8974-5769-952E-590A97BEA34E
',
              ),
              'data' => 
              array (
                'description' => '返回数据',
                'type' => 'object',
                'properties' => 
                array (
                  'answer' => 
                  array (
                    'description' => '问答结果',
                    'type' => 'string',
                    'example' => '2023年碳排468.1万吨',
                  ),
                  'document' => 
                  array (
                    'description' => '对应query返回的回答关联的文档',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '文档详情',
                      'type' => 'string',
                      'example' => 'https://oss/aa.pdf',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"83A5A7DD-8974-5769-952E-590A97BEA34E\\\\n\\",\\n  \\"data\\": {\\n    \\"answer\\": \\"2023年碳排468.1万吨\\",\\n    \\"document\\": [\\n      \\"https://oss/aa.pdf\\"\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '在线文档问答',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'ap-southeast-1',
      'endpoint' => 'energyexpertexternal.ap-southeast-1.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'energyexpertexternal.cn-hangzhou.aliyuncs.com',
    ),
  ),
);
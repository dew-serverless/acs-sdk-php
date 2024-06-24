<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'Advisor',
    'version' => '2018-01-20',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 185316,
      'title' => 'API参考',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeAdvices',
        1 => 'DescribeAdvisorChecks',
        2 => 'DescribeAdvisorResources',
        3 => 'RefreshAdvisorCheck',
        4 => 'RefreshAdvisorResource',
        5 => 'DescribeAdvicesPage',
        6 => 'GetHistoryAdvices',
        7 => 'GetTaskStatusById',
        8 => 'DescribeAdvicesFlatPage',
      ),
    ),
  ),
  'components' => 
  array (
    'schemas' => 
    array (
      'RdAccountDTO' => 
      array (
        'title' => 'A short description of struct',
        'description' => 'Rd成员账号对象',
        'type' => 'object',
        'properties' => 
        array (
          'Id' => 
          array (
            'title' => '成员账号UID',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'Name' => 
          array (
            'title' => '成员账号名称',
            'type' => 'string',
          ),
          'DisplayName' => 
          array (
            'title' => '展示名称',
            'type' => 'string',
          ),
          'AccountType' => 
          array (
            'title' => '账号类型',
            'type' => 'string',
          ),
          'Checked' => 
          array (
            'title' => '是否选中',
            'type' => 'boolean',
          ),
          'Tags' => 
          array (
            'title' => '标签信息',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'TagKey' => 
                array (
                  'title' => '标签键',
                  'type' => 'string',
                ),
                'TagValue' => 
                array (
                  'title' => '标签值',
                  'type' => 'string',
                ),
              ),
            ),
          ),
        ),
      ),
      'RdAccountFolderDTO' => 
      array (
        'title' => 'A short description of struct',
        'description' => 'Rd多账号文件夹',
        'type' => 'object',
        'properties' => 
        array (
          'ResourceDirectoryId' => 
          array (
            'title' => 'RD ID',
            'type' => 'string',
          ),
          'FolderId' => 
          array (
            'title' => '文件夹ID',
            'type' => 'string',
          ),
          'FolderName' => 
          array (
            'title' => '文件夹展示名',
            'type' => 'string',
          ),
          'ResourceDirectoryPath' => 
          array (
            'title' => '文件夹路径',
            'type' => 'string',
          ),
          'ResourceDirectoryPathName' => 
          array (
            'title' => '文件夹路径名',
            'type' => 'string',
          ),
          'AccountCount' => 
          array (
            'title' => '文件夹节点账号数量',
            'type' => 'integer',
            'format' => 'int32',
          ),
          'SelectedCount' => 
          array (
            'title' => '文件夹节点选中数量',
            'type' => 'integer',
            'format' => 'int32',
          ),
          'FolderList' => 
          array (
            'title' => '文件夹节点下属子文件夹',
            'type' => 'array',
            'items' => 
            array (
              '$ref' => '#/components/schemas/RdAccountFolderDTO',
            ),
          ),
          'AccountList' => 
          array (
            'title' => '文件夹节点下述账号列表',
            'type' => 'array',
            'items' => 
            array (
              '$ref' => '#/components/schemas/RdAccountDTO',
            ),
          ),
        ),
      ),
    ),
  ),
  'apis' => 
  array (
    'DescribeAdvices' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AdviceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '巡检结果ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '40200899',
          ),
        ),
        1 => 
        array (
          'name' => 'CheckId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '巡检项Code。',
            'type' => 'string',
            'required' => false,
            'example' => 'EcsHighCpuUtilization',
          ),
        ),
        2 => 
        array (
          'name' => 'ResourceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源/实例ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'i-2zecnwitr2s7aca6****',
          ),
        ),
        3 => 
        array (
          'name' => 'Language',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求使用的语言。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        4 => 
        array (
          'name' => 'ExcludeAdviceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '不包含的巡检结果ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '40200889',
          ),
        ),
        5 => 
        array (
          'name' => 'Product',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云产品Code。',
            'type' => 'string',
            'required' => false,
            'example' => 'ecs',
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
                'example' => '566331F9-5AB3-550F-B745-A730331F97A9',
              ),
              'Data' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Advice' => 
                  array (
                    'description' => '查询结果。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '查询结果对象体。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Severity' => 
                        array (
                          'description' => '严重级别：

- **1**:  警告
- **2**:  严重',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'Product' => 
                        array (
                          'description' => '云产品Code。',
                          'type' => 'string',
                          'example' => 'ecs',
                        ),
                        'GmtModified' => 
                        array (
                          'description' => '巡检项结果更新时间，格式为yyyy-mm-dd hh:mm:ss。',
                          'type' => 'string',
                          'example' => '2023-07-01 00:00:00',
                        ),
                        'IsExpired' => 
                        array (
                          'description' => '是否已过期：

- **false**: 未过期，
- **true**: 已过期',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                        'GmtCreated' => 
                        array (
                          'description' => '巡检项结果创建时间，格式为yyyy-mm-dd hh:mm:ss。',
                          'type' => 'string',
                          'example' => '2023-07-01 00:00:00',
                        ),
                        'Resource' => 
                        array (
                          'description' => '资源详情Json，具体请参考各个云产品实例详情查询相关api文档。',
                          'type' => 'string',
                          'example' => '{"resourceId": "i-2zecnwitr2s7aca6****","resourceName": "ecs-20230701","regionId": "cn-hangzhou",...}',
                        ),
                        'Description' => 
                        array (
                          'description' => '巡检项描述，推荐操作和操作说明。',
                          'type' => 'string',
                          'example' => 'CPU负载，公网带宽负载，内存负载百分比算法超过标准值过高',
                        ),
                        'CheckId' => 
                        array (
                          'description' => '巡检项Code。',
                          'type' => 'string',
                          'example' => 'EcsHighCpuUtilization',
                        ),
                        'AliyunId' => 
                        array (
                          'description' => '阿里云用户ID。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '192895059480****',
                        ),
                        'ResourceId' => 
                        array (
                          'description' => '资源/实例ID。',
                          'type' => 'string',
                          'example' => 'i-2zecnwitr2s7aca6****',
                        ),
                        'Content' => 
                        array (
                          'description' => '结果Json详情，与控制台配置的展示列格式保持一致。',
                          'type' => 'string',
                          'example' => '[{"key":"EcsHighCpuUtilization_xxxx", "value":"xxx"}, {"key":"EcsHighCpuUtilization_xxxx", "value":"xxx"}, {"key":"EcsHighCpuUtilization_xxxx", "value":"xxx"}]',
                        ),
                        'Id' => 
                        array (
                          'description' => '巡检结果ID。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '40200899',
                        ),
                        'CheckName' => 
                        array (
                          'description' => '巡检项名称。',
                          'type' => 'string',
                          'example' => 'ECS 性能负载巡检
',
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
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden.RAM',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API doesn\'t support RAM.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"566331F9-5AB3-550F-B745-A730331F97A9\\",\\n  \\"Data\\": {\\n    \\"Advice\\": [\\n      {\\n        \\"Severity\\": 1,\\n        \\"Product\\": \\"ecs\\",\\n        \\"GmtModified\\": \\"2023-07-01 00:00:00\\",\\n        \\"IsExpired\\": false,\\n        \\"GmtCreated\\": \\"2023-07-01 00:00:00\\",\\n        \\"Resource\\": \\"{\\\\\\"resourceId\\\\\\": \\\\\\"i-2zecnwitr2s7aca6****\\\\\\",\\\\\\"resourceName\\\\\\": \\\\\\"ecs-20230701\\\\\\",\\\\\\"regionId\\\\\\": \\\\\\"cn-hangzhou\\\\\\",...}\\",\\n        \\"Description\\": \\"CPU负载，公网带宽负载，内存负载百分比算法超过标准值过高\\",\\n        \\"CheckId\\": \\"EcsHighCpuUtilization\\",\\n        \\"AliyunId\\": 0,\\n        \\"ResourceId\\": \\"i-2zecnwitr2s7aca6****\\",\\n        \\"Content\\": \\"[{\\\\\\"key\\\\\\":\\\\\\"EcsHighCpuUtilization_xxxx\\\\\\", \\\\\\"value\\\\\\":\\\\\\"xxx\\\\\\"}, {\\\\\\"key\\\\\\":\\\\\\"EcsHighCpuUtilization_xxxx\\\\\\", \\\\\\"value\\\\\\":\\\\\\"xxx\\\\\\"}, {\\\\\\"key\\\\\\":\\\\\\"EcsHighCpuUtilization_xxxx\\\\\\", \\\\\\"value\\\\\\":\\\\\\"xxx\\\\\\"}]\\",\\n        \\"Id\\": 40200899,\\n        \\"CheckName\\": \\"ECS 性能负载巡检\\\\n\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeAdvicesResponse>\\n    <RequestId>566331F9-5AB3-550F-B745-A730331F97A9</RequestId>\\n    <Data>\\n        <Severity>1</Severity>\\n        <Product>ecs</Product>\\n        <GmtModified>2023-07-01 00:00:00</GmtModified>\\n        <IsExpired>false</IsExpired>\\n        <GmtCreated>2023-07-01 00:00:00</GmtCreated>\\n        <Resource>{\\"resourceId\\": \\"i-2zecnwitr2s7aca6****\\",\\"resourceName\\": \\"ecs-20230701\\",\\"regionId\\": \\"cn-hangzhou\\",...}</Resource>\\n        <Description>CPU负载，公网带宽负载，内存负载百分比算法超过标准值过高</Description>\\n        <CheckId>EcsHighCpuUtilization</CheckId>\\n        <ResourceId>i-2zecnwitr2s7aca6****</ResourceId>\\n        <Content>[{\\"key\\":\\"EcsHighCpuUtilization_xxxx\\", \\"value\\":\\"xxx\\"}, {\\"key\\":\\"EcsHighCpuUtilization_xxxx\\", \\"value\\":\\"xxx\\"}, {\\"key\\":\\"EcsHighCpuUtilization_xxxx\\", \\"value\\":\\"xxx\\"}]</Content>\\n        <Id>40200899</Id>\\n        <CheckName>ECS 性能负载巡检\\n</CheckName>\\n    </Data>\\n</DescribeAdvicesResponse>","errorExample":""}]',
      'title' => '获取最新巡检结果',
      'summary' => '可根据多个维度获取用户最新的巡检结果，全量返回。',
      'description' => '不兼容Go SDK，如需要Go SDK请使用DescribeAdvicesFlatPage API。',
    ),
    'DescribeAdvisorChecks' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Language',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '使用的语言。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        1 => 
        array (
          'name' => 'Product',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云产品Code。',
            'type' => 'string',
            'required' => false,
            'example' => 'ecs',
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
                'description' => '错误编码。',
                'type' => 'string',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '566331F9-5AB3-550F-B745-A730331F97A9',
              ),
              'Data' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'AdvisorCheck' => 
                  array (
                    'description' => '查询结果。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '查询结果对象体。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Status' => 
                        array (
                          'description' => '诊断项是否被禁用状态：

- **enabled**: 可用

- **disabled**: 禁用',
                          'type' => 'string',
                          'example' => 'enabled',
                        ),
                        'Product' => 
                        array (
                          'description' => '云产品Code。',
                          'type' => 'string',
                          'example' => 'ecs',
                        ),
                        'OperateColumn' => 
                        array (
                          'description' => '操作字段，使用前端模板或诊断建议action中定义json字段。',
                          'type' => 'string',
                          'example' => '[{"key": "Detail", "value": "/diagnosis?product=${Product}&resourceId=${Resource.resourceId}", "type": "template"} ]',
                        ),
                        'GmtModified' => 
                        array (
                          'description' => '巡检项配置更新时间，格式为yyyy-mm-dd hh:mm:ss。',
                          'type' => 'string',
                          'example' => '2023-07-01 00:00:00',
                        ),
                        'ViewColumn' => 
                        array (
                          'description' => '展示列，即控制台展示巡检项详情的具体配置。',
                          'type' => 'string',
                          'example' => '[{"key":"EcsHighCpuUtilization_xxxx", "type":"DEFAULT"}, {"key":"EcsHighCpuUtilization_xxxx", "type":"DEFAULT"}, {"key":"EcsHighCpuUtilization_xxxx", "type":"DEFAULT"}, ]',
                        ),
                        'GmtCreated' => 
                        array (
                          'description' => '巡检项配置创建时间，格式为yyyy-mm-dd hh:mm:ss。',
                          'type' => 'string',
                          'example' => '2023-07-01 00:00:00',
                        ),
                        'Description' => 
                        array (
                          'description' => '巡检项描述，推荐操作和操作说明。',
                          'type' => 'string',
                          'example' => 'CPU负载，公网带宽负载，内存负载百分比算法超过标准值过高',
                        ),
                        'Tips' => 
                        array (
                          'description' => '巡检建议一句话简述。',
                          'type' => 'string',
                          'example' => '请排查实例资源占用情况或升级实例规格',
                        ),
                        'Code' => 
                        array (
                          'description' => '巡检项Code。',
                          'type' => 'string',
                          'example' => 'EcsHighCpuUtilization',
                        ),
                        'Category' => 
                        array (
                          'description' => '巡检项分类：

- **1**: 安全合规

- **2**: 性能效率

- **3**: 业务稳定

- **4**: 成本优化

- **5**: 服务限制',
                          'type' => 'string',
                          'example' => '1',
                        ),
                        'Name' => 
                        array (
                          'description' => '巡检项名称。',
                          'type' => 'string',
                          'example' => 'ECS 性能负载巡检',
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
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden.RAM',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API doesn\'t support RAM.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"RequestId\\": \\"566331F9-5AB3-550F-B745-A730331F97A9\\",\\n  \\"Data\\": {\\n    \\"AdvisorCheck\\": [\\n      {\\n        \\"Status\\": \\"enabled\\",\\n        \\"Product\\": \\"ecs\\",\\n        \\"OperateColumn\\": \\"[{\\\\\\"key\\\\\\": \\\\\\"Detail\\\\\\", \\\\\\"value\\\\\\": \\\\\\"/diagnosis?product=${Product}&resourceId=${Resource.resourceId}\\\\\\", \\\\\\"type\\\\\\": \\\\\\"template\\\\\\"} ]\\",\\n        \\"GmtModified\\": \\"2023-07-01 00:00:00\\",\\n        \\"ViewColumn\\": \\"[{\\\\\\"key\\\\\\":\\\\\\"EcsHighCpuUtilization_xxxx\\\\\\", \\\\\\"type\\\\\\":\\\\\\"DEFAULT\\\\\\"}, {\\\\\\"key\\\\\\":\\\\\\"EcsHighCpuUtilization_xxxx\\\\\\", \\\\\\"type\\\\\\":\\\\\\"DEFAULT\\\\\\"}, {\\\\\\"key\\\\\\":\\\\\\"EcsHighCpuUtilization_xxxx\\\\\\", \\\\\\"type\\\\\\":\\\\\\"DEFAULT\\\\\\"}, ]\\",\\n        \\"GmtCreated\\": \\"2023-07-01 00:00:00\\",\\n        \\"Description\\": \\"CPU负载，公网带宽负载，内存负载百分比算法超过标准值过高\\",\\n        \\"Tips\\": \\"请排查实例资源占用情况或升级实例规格\\",\\n        \\"Code\\": \\"EcsHighCpuUtilization\\",\\n        \\"Category\\": \\"1\\",\\n        \\"Name\\": \\"ECS 性能负载巡检\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeAdvisorChecksResponse>\\n    <Code>200</Code>\\n    <RequestId>566331F9-5AB3-550F-B745-A730331F97A9</RequestId>\\n    <Data>\\n        <Status>enabled</Status>\\n        <Product>ecs</Product>\\n        <OperateColumn>[{\\"key\\": \\"Detail\\", \\"value\\": \\"/diagnosis?product=${Product}&amp;resourceId=${Resource.resourceId}\\", \\"type\\": \\"template\\"} ]</OperateColumn>\\n        <GmtModified>2023-07-01 00:00:00</GmtModified>\\n        <ViewColumn>[{\\"key\\":\\"EcsHighCpuUtilization_xxxx\\", \\"type\\":\\"DEFAULT\\"}, {\\"key\\":\\"EcsHighCpuUtilization_xxxx\\", \\"type\\":\\"DEFAULT\\"}, {\\"key\\":\\"EcsHighCpuUtilization_xxxx\\", \\"type\\":\\"DEFAULT\\"}, ]</ViewColumn>\\n        <GmtCreated>2023-07-01 00:00:00</GmtCreated>\\n        <Description>CPU负载，公网带宽负载，内存负载百分比算法超过标准值过高</Description>\\n        <Tips>请排查实例资源占用情况或升级实例规格</Tips>\\n        <Code>EcsHighCpuUtilization</Code>\\n        <Category>1</Category>\\n        <Name>ECS 性能负载巡检</Name>\\n    </Data>\\n</DescribeAdvisorChecksResponse>","errorExample":""}]',
      'title' => '获取巡检项',
      'summary' => '获取用户当前可用的巡检项。',
    ),
    'DescribeAdvisorResources' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ResourceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源/实例ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'i-2zecnwitr2s7aca6****
',
          ),
        ),
        1 => 
        array (
          'name' => 'Keyword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询关键词，可用来模糊匹配资源/实例ID或资源/实例名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'ecs001',
          ),
        ),
        2 => 
        array (
          'name' => 'Language',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求的语言。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        3 => 
        array (
          'name' => 'Product',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云产品Code。',
            'type' => 'string',
            'required' => false,
            'example' => 'ecs',
          ),
        ),
        4 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页号。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        5 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页数据条数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '566331F9-5AB3-550F-B745-A730331F97A9',
              ),
              'Data' => 
              array (
                'description' => '查询结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'PageNo' => 
                  array (
                    'description' => '分页号。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'PageSize' => 
                  array (
                    'description' => '每页数据条数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'Total' => 
                  array (
                    'description' => '数据总条数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '100',
                  ),
                  'Result' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Resource' => 
                      array (
                        'description' => '查询结果数组。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '查询结果对象体。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Data' => 
                            array (
                              'description' => '资源详情Json，具体请参考各个云产品实例详情查询相关api文档。',
                              'type' => 'string',
                              'example' => '{"resourceId": "i-2zecnwitr2s7aca6****","resourceName": "ecs-20230701","regionId": "cn-hangzhou",...}',
                            ),
                            'ResourceId' => 
                            array (
                              'description' => '资源/实例ID。',
                              'type' => 'string',
                              'example' => 'i-2zecnwitr2s7aca6****',
                            ),
                            'Product' => 
                            array (
                              'description' => '云产品Code。',
                              'type' => 'string',
                              'example' => 'ecs',
                            ),
                            'ResourceName' => 
                            array (
                              'description' => '资源名称。',
                              'type' => 'string',
                              'example' => 'ecs-20230701',
                            ),
                            'RegionId' => 
                            array (
                              'description' => '地域信息。',
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
        ),
      ),
      'errorCodes' => 
      array (
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden.RAM',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API doesn\'t support RAM.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"566331F9-5AB3-550F-B745-A730331F97A9\\",\\n  \\"Data\\": {\\n    \\"PageNo\\": 1,\\n    \\"PageSize\\": 10,\\n    \\"Total\\": 100,\\n    \\"Result\\": {\\n      \\"Resource\\": [\\n        {\\n          \\"Data\\": \\"{\\\\\\"resourceId\\\\\\": \\\\\\"i-2zecnwitr2s7aca6****\\\\\\",\\\\\\"resourceName\\\\\\": \\\\\\"ecs-20230701\\\\\\",\\\\\\"regionId\\\\\\": \\\\\\"cn-hangzhou\\\\\\",...}\\",\\n          \\"ResourceId\\": \\"i-2zecnwitr2s7aca6****\\",\\n          \\"Product\\": \\"ecs\\",\\n          \\"ResourceName\\": \\"ecs-20230701\\",\\n          \\"RegionId\\": \\"cn-hangzhou\\"\\n        }\\n      ]\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeAdvisorResourcesResponse>\\n    <RequestId>566331F9-5AB3-550F-B745-A730331F97A9</RequestId>\\n    <Data>\\n        <PageNo>1</PageNo>\\n        <PageSize>10</PageSize>\\n        <Total>100</Total>\\n        <Result>\\n            <Data>{\\"resourceId\\": \\"i-2zecnwitr2s7aca6****\\",\\"resourceName\\": \\"ecs-20230701\\",\\"regionId\\": \\"cn-hangzhou\\",...}</Data>\\n            <ResourceId>i-2zecnwitr2s7aca6****</ResourceId>\\n            <Product>ecs</Product>\\n            <ResourceName>ecs-20230701</ResourceName>\\n            <RegionId>cn-hangzhou</RegionId>\\n        </Result>\\n    </Data>\\n</DescribeAdvisorResourcesResponse>","errorExample":""}]',
      'title' => '获取资源列表',
      'summary' => '拉取巡检资源列表（需要在触发资源信息同步后才能获取最新结果）。',
    ),
    'RefreshAdvisorCheck' => 
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ResourceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源/实例ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'i-2zecnwitr2s7aca6****',
          ),
        ),
        1 => 
        array (
          'name' => 'CheckId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '巡检项Code。',
            'type' => 'string',
            'required' => false,
            'example' => 'EcsHighCpuUtilization',
          ),
        ),
        2 => 
        array (
          'name' => 'Product',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '产品Code。',
            'type' => 'string',
            'required' => false,
            'example' => 'ecs',
          ),
        ),
        3 => 
        array (
          'name' => 'Language',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '使用的语言。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
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
              'Data' => 
              array (
                'description' => '请求返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'Success' => 
                  array (
                    'description' => '请求是否成功。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'TraceId' => 
                  array (
                    'description' => '链路追踪ID。',
                    'type' => 'string',
                    'example' => 'manual-1be17af1121b4974822e69daee4f2481',
                  ),
                  'TaskId' => 
                  array (
                    'description' => '后台生成的任务ID。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '95906135',
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '566331F9-5AB3-550F-B745-A730331F97A9',
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
            'errorCode' => 'Forbidden.RAM',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API doesn\'t support RAM.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": {\\n    \\"Success\\": true,\\n    \\"TraceId\\": \\"manual-1be17af1121b4974822e69daee4f2481\\",\\n    \\"TaskId\\": 95906135\\n  },\\n  \\"RequestId\\": \\"566331F9-5AB3-550F-B745-A730331F97A9\\"\\n}","errorExample":""},{"type":"xml","example":"<RefreshAdvisorCheckResponse>\\n    <Data>\\n        <Success>true</Success>\\n        <TraceId>manual-1be17af1121b4974822e69daee4f2481</TraceId>\\n        <TaskId>95906135</TaskId>\\n    </Data>\\n    <RequestId>566331F9-5AB3-550F-B745-A730331F97A9</RequestId>\\n</RefreshAdvisorCheckResponse>","errorExample":""}]',
      'title' => '刷新并触发巡检',
      'summary' => '刷新诊断项，触发该巡检项的资源指标同步并重新巡检。
该API会按照输入的多个维度（云产品、云资源、诊断项名称）创建巡检任务，都为空则默认按照该用户下所有资源为所有诊断项创建巡检任务。',
    ),
    'RefreshAdvisorResource' => 
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Product',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云产品Code。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ecs',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '',
            'description' => '资源/实例ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'i-2zecnwitr2s7aca6****',
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
              'Data' => 
              array (
                'description' => '后台生成的任务ID。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '95906134',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '566331F9-5AB3-550F-B745-A730331F97A9',
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
            'errorCode' => 'Forbidden.RAM',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API doesn\'t support RAM.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": 95906134,\\n  \\"RequestId\\": \\"566331F9-5AB3-550F-B745-A730331F97A9\\"\\n}","errorExample":""},{"type":"xml","example":"<RefreshAdvisorResourceResponse>\\n    <Data>95906134</Data>\\n    <RequestId>566331F9-5AB3-550F-B745-A730331F97A9</RequestId>\\n</RefreshAdvisorResourceResponse>","errorExample":""}]',
      'title' => '资源信息同步',
      'summary' => '根据具体的产品+资源ID，触发资源信息同步任务，返回创建的任务ID。',
    ),
    'DescribeAdvicesPage' => 
    array (
      'summary' => '可根据多个维度获取用户最新的巡检结果，分页返回。',
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
          'name' => 'AdviceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '巡检结果ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '12345678',
          ),
        ),
        1 => 
        array (
          'name' => 'CheckId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '巡检项Code。',
            'type' => 'string',
            'required' => false,
            'example' => 'EcsHighCpuUtilization',
          ),
        ),
        2 => 
        array (
          'name' => 'ResourceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源/实例ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'i-2zecnwitr2s7aca6****
',
          ),
        ),
        3 => 
        array (
          'name' => 'Language',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求使用的语言。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        4 => 
        array (
          'name' => 'Product',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云产品Code。',
            'type' => 'string',
            'required' => false,
            'example' => 'ecs',
          ),
        ),
        5 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页号。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        6 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页数据条数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '566331F9-5AB3-550F-B745-A730331F97A9',
              ),
              'Data' => 
              array (
                'description' => '查询结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'PageNo' => 
                  array (
                    'description' => '分页号。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1',
                  ),
                  'PageSize' => 
                  array (
                    'description' => '每页数据条数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '10',
                  ),
                  'Total' => 
                  array (
                    'description' => '数据总条数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '100',
                  ),
                  'Result' => 
                  array (
                    'description' => '查询结果对象数组。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '查询结果对象体。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'AliyunId' => 
                        array (
                          'description' => '阿里云用户ID。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '192895059480****',
                        ),
                        'CheckId' => 
                        array (
                          'description' => '巡检项Code。',
                          'type' => 'string',
                          'example' => 'EcsHighCpuUtilization',
                        ),
                        'CheckName' => 
                        array (
                          'description' => '巡检项名称。',
                          'type' => 'string',
                          'example' => 'ECS 性能负载巡检',
                        ),
                        'Content' => 
                        array (
                          'description' => '结果Json详情，与控制台配置的展示列格式保持一致。',
                          'type' => 'string',
                          'example' => '[{"key":"EcsHighCpuUtilization_xxxx", "value":"xxx"}, {"key":"EcsHighCpuUtilization_xxxx", "value":"xxx"}, {"key":"EcsHighCpuUtilization_xxxx", "value":"xxx"}, ]',
                        ),
                        'Description' => 
                        array (
                          'description' => '巡检项描述，推荐操作和操作说明。',
                          'type' => 'string',
                          'example' => 'CPU负载，公网带宽负载，内存负载百分比算法超过标准值过高',
                        ),
                        'GmtCreated' => 
                        array (
                          'description' => '巡检项结果创建时间，格式为yyyy-mm-dd hh:mm:ss。',
                          'type' => 'string',
                          'example' => '2023-07-01 00:00:00',
                        ),
                        'GmtModified' => 
                        array (
                          'description' => '巡检项结果更新时间，格式为yyyy-mm-dd hh:mm:ss。',
                          'type' => 'string',
                          'example' => '2023-07-01 00:00:00',
                        ),
                        'Id' => 
                        array (
                          'description' => '巡检结果ID。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '40200899',
                        ),
                        'IsExpired' => 
                        array (
                          'description' => '是否已过期：

- **false**: 未过期，
- **true**: 已过期',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                        'Product' => 
                        array (
                          'description' => '云产品Code。',
                          'type' => 'string',
                          'example' => 'ecs',
                        ),
                        'Resource' => 
                        array (
                          'description' => '资源详情Json，具体请参考各个云产品实例详情查询相关api文档。',
                          'type' => 'string',
                          'example' => '{"resourceId": "i-2zecnwitr2s7aca6****","resourceName": "ecs-20230701","regionId": "cn-hangzhou",...}',
                        ),
                        'ResourceId' => 
                        array (
                          'description' => '资源/实例ID。',
                          'type' => 'string',
                          'example' => 'i-2zecnwitr2s7aca6****',
                        ),
                        'Severity' => 
                        array (
                          'description' => '严重级别：

- **1**:  警告
- **2**:  严重',
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
        ),
      ),
      'errorCodes' => 
      array (
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden.RAM',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API doesn\'t support RAM.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"566331F9-5AB3-550F-B745-A730331F97A9\\",\\n  \\"Data\\": {\\n    \\"PageNo\\": 1,\\n    \\"PageSize\\": 10,\\n    \\"Total\\": 100,\\n    \\"Result\\": [\\n      {\\n        \\"AliyunId\\": 0,\\n        \\"CheckId\\": \\"EcsHighCpuUtilization\\",\\n        \\"CheckName\\": \\"ECS 性能负载巡检\\",\\n        \\"Content\\": \\"[{\\\\\\"key\\\\\\":\\\\\\"EcsHighCpuUtilization_xxxx\\\\\\", \\\\\\"value\\\\\\":\\\\\\"xxx\\\\\\"}, {\\\\\\"key\\\\\\":\\\\\\"EcsHighCpuUtilization_xxxx\\\\\\", \\\\\\"value\\\\\\":\\\\\\"xxx\\\\\\"}, {\\\\\\"key\\\\\\":\\\\\\"EcsHighCpuUtilization_xxxx\\\\\\", \\\\\\"value\\\\\\":\\\\\\"xxx\\\\\\"}, ]\\",\\n        \\"Description\\": \\"CPU负载，公网带宽负载，内存负载百分比算法超过标准值过高\\",\\n        \\"GmtCreated\\": \\"2023-07-01 00:00:00\\",\\n        \\"GmtModified\\": \\"2023-07-01 00:00:00\\",\\n        \\"Id\\": 40200899,\\n        \\"IsExpired\\": false,\\n        \\"Product\\": \\"ecs\\",\\n        \\"Resource\\": \\"{\\\\\\"resourceId\\\\\\": \\\\\\"i-2zecnwitr2s7aca6****\\\\\\",\\\\\\"resourceName\\\\\\": \\\\\\"ecs-20230701\\\\\\",\\\\\\"regionId\\\\\\": \\\\\\"cn-hangzhou\\\\\\",...}\\",\\n        \\"ResourceId\\": \\"i-2zecnwitr2s7aca6****\\",\\n        \\"Severity\\": 1\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeAdvicesPageResponse>\\n    <RequestId>566331F9-5AB3-550F-B745-A730331F97A9</RequestId>\\n    <Data>\\n        <PageNo>1</PageNo>\\n        <PageSize>10</PageSize>\\n        <Total>100</Total>\\n        <Result>\\n            <CheckId>EcsHighCpuUtilization</CheckId>\\n            <CheckName>ECS 性能负载巡检</CheckName>\\n            <Content>[{\\"key\\":\\"EcsHighCpuUtilization_xxxx\\", \\"value\\":\\"xxx\\"}, {\\"key\\":\\"EcsHighCpuUtilization_xxxx\\", \\"value\\":\\"xxx\\"}, {\\"key\\":\\"EcsHighCpuUtilization_xxxx\\", \\"value\\":\\"xxx\\"}, ]</Content>\\n            <Description>CPU负载，公网带宽负载，内存负载百分比算法超过标准值过高</Description>\\n            <GmtCreated>2023-07-01 00:00:00</GmtCreated>\\n            <GmtModified>2023-07-01 00:00:00</GmtModified>\\n            <Id>40200899</Id>\\n            <IsExpired>false</IsExpired>\\n            <Product>ecs</Product>\\n            <Resource>{\\"resourceId\\": \\"i-2zecnwitr2s7aca6****\\",\\"resourceName\\": \\"ecs-20230701\\",\\"regionId\\": \\"cn-hangzhou\\",...}</Resource>\\n            <ResourceId>i-2zecnwitr2s7aca6****</ResourceId>\\n            <Severity>1</Severity>\\n        </Result>\\n    </Data>\\n</DescribeAdvicesPageResponse>","errorExample":""}]',
      'title' => '分页获取最新巡检结果',
      'description' => '不兼容Go SDK，如需要Go SDK请使用DescribeAdvicesFlatPage API。',
    ),
    'GetHistoryAdvices' => 
    array (
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Language',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求使用的语言。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        1 => 
        array (
          'name' => 'Product',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云产品Code。',
            'type' => 'string',
            'required' => false,
            'example' => 'ecs',
          ),
        ),
        2 => 
        array (
          'name' => 'Severity',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '严重级别：

- **1**:  警告
- **2**:  严重',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页数据条数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        4 => 
        array (
          'name' => 'PageNum',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页号。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        5 => 
        array (
          'name' => 'StartDate',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '时间范围查询条件起始时间，输入日期格式为 yyyy-mm-dd。',
            'type' => 'string',
            'required' => false,
            'example' => '2023-07-01',
          ),
        ),
        6 => 
        array (
          'name' => 'EndDate',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '时间范围查询条件结束时间，输入日期格式为 yyyy-mm-dd。',
            'type' => 'string',
            'required' => false,
            'example' => '2023-07-01
',
          ),
        ),
        7 => 
        array (
          'name' => 'Reverse',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否降序：

  - **true**：按降序排序
  - **false**：按升序排序',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
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
                'example' => '566331F9-5AB3-550F-B745-A730331F97A9',
              ),
              'Data' => 
              array (
                'description' => '查询结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'PageNo' => 
                  array (
                    'description' => '分页号。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'Total' => 
                  array (
                    'description' => '数据总条数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '100',
                  ),
                  'Result' => 
                  array (
                    'description' => '查询结果对象数组。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '查询结果对象体。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Severity' => 
                        array (
                          'description' => '严重级别：

- **1**:  警告
- **2**:  严重',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'Product' => 
                        array (
                          'description' => '云产品Code。',
                          'type' => 'string',
                          'example' => 'ecs',
                        ),
                        'GmtCreated' => 
                        array (
                          'description' => '巡检项结果创建时间，格式为yyyy-mm-dd hh:mm:ss。',
                          'type' => 'string',
                          'example' => '2023-07-01 00:00:00',
                        ),
                        'Description' => 
                        array (
                          'description' => '巡检项描述，推荐操作和操作说明。',
                          'type' => 'string',
                          'example' => 'CPU负载，公网带宽负载，内存负载百分比算法超过标准值过高',
                        ),
                        'CheckId' => 
                        array (
                          'description' => '巡检项Code。',
                          'type' => 'string',
                          'example' => 'EcsHighCpuUtilization',
                        ),
                        'ResourceId' => 
                        array (
                          'description' => '资源/实例ID。',
                          'type' => 'string',
                          'example' => 'i-2zecnwitr2s7aca6****',
                        ),
                        'CheckName' => 
                        array (
                          'description' => '巡检项名称。',
                          'type' => 'string',
                          'example' => 'ECS 性能负载巡检',
                        ),
                        'Url' => 
                        array (
                          'description' => '巡检项对应资源跳转url。',
                          'type' => 'string',
                          'example' => 'https://ecs.console.aliyun.com/#/server/i-2zecnwitr2s7aca6****/detail?regionId=cn-hangzhou',
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
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden.RAM',
            'errorMessage' => 'The user is not authorized to operate on the specified resource, or this API does not support RAM.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"566331F9-5AB3-550F-B745-A730331F97A9\\",\\n  \\"Data\\": {\\n    \\"PageNo\\": 1,\\n    \\"Total\\": 100,\\n    \\"Result\\": [\\n      {\\n        \\"Severity\\": 1,\\n        \\"Product\\": \\"ecs\\",\\n        \\"GmtCreated\\": \\"2023-07-01 00:00:00\\",\\n        \\"Description\\": \\"CPU负载，公网带宽负载，内存负载百分比算法超过标准值过高\\",\\n        \\"CheckId\\": \\"EcsHighCpuUtilization\\",\\n        \\"ResourceId\\": \\"i-2zecnwitr2s7aca6****\\",\\n        \\"CheckName\\": \\"ECS 性能负载巡检\\",\\n        \\"Url\\": \\"https://ecs.console.aliyun.com/#/server/i-2zecnwitr2s7aca6****/detail?regionId=cn-hangzhou\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetHistoryAdvicesResponse>\\n    <RequestId>566331F9-5AB3-550F-B745-A730331F97A9</RequestId>\\n    <Data>\\n        <PageNo>1</PageNo>\\n        <Total>100</Total>\\n        <Result>\\n            <Severity>1</Severity>\\n            <Product>ecs</Product>\\n            <GmtCreated>2023-07-01 00:00:00</GmtCreated>\\n            <Description>CPU负载，公网带宽负载，内存负载百分比算法超过标准值过高</Description>\\n            <CheckId>EcsHighCpuUtilization</CheckId>\\n            <ResourceId>i-2zecnwitr2s7aca6****</ResourceId>\\n            <CheckName>ECS 性能负载巡检</CheckName>\\n            <Url>https://ecs.console.aliyun.com/#/server/i-2zecnwitr2s7aca6****/detail?regionId=cn-hangzhou</Url>\\n        </Result>\\n    </Data>\\n</GetHistoryAdvicesResponse>","errorExample":""}]',
      'title' => '分页获取历史巡检结果',
      'summary' => '分页获取历史巡检结果，按产品、日期、严重级别查询。',
    ),
    'GetTaskStatusById' => 
    array (
      'summary' => '根据任务ID查询任务执行状态。',
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'TaskId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '所要查询的任务ID。',
            'type' => 'string',
            'required' => true,
            'example' => '95906135',
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
                'example' => '566331F9-5AB3-550F-B745-A730331F97A9
',
              ),
              'Data' => 
              array (
                'description' => '请求返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'TaskId' => 
                  array (
                    'description' => '任务ID。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '95906135',
                  ),
                  'TaskStatus' => 
                  array (
                    'description' => '任务状态：
- **1**: 任务进行中
- **2**: 任务已完成
- **3**: 任务执行失败',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                ),
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
            'errorCode' => 'Forbidden.RAM',
            'errorMessage' => 'The user is not authorized to operate on the specified resource, or this API does not support RAM.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"566331F9-5AB3-550F-B745-A730331F97A9\\\\n\\",\\n  \\"Data\\": {\\n    \\"TaskId\\": 95906135,\\n    \\"TaskStatus\\": 1\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetTaskStatusByIdResponse>\\n    <RequestId>566331F9-5AB3-550F-B745-A730331F97A9\\n</RequestId>\\n    <Data>\\n        <TaskId>95906135</TaskId>\\n        <TaskStatus>1</TaskStatus>\\n    </Data>\\n</GetTaskStatusByIdResponse>","errorExample":""}]',
      'title' => '查询任务状态',
    ),
    'DescribeAdvicesFlatPage' => 
    array (
      'summary' => '可根据多个维度获取用户最新的巡检结果，分页返回（部分字段展平）。',
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
          'name' => 'AdviceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '巡检结果ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '12345678',
          ),
        ),
        1 => 
        array (
          'name' => 'CheckId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '巡检项Code。',
            'type' => 'string',
            'required' => false,
            'example' => 'EcsHighCpuUtilization',
          ),
        ),
        2 => 
        array (
          'name' => 'ResourceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源/实例ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'i-2zecnwitr2s7aca6****
',
          ),
        ),
        3 => 
        array (
          'name' => 'Language',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求使用的语言。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        4 => 
        array (
          'name' => 'Product',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云产品Code。',
            'type' => 'string',
            'required' => false,
            'example' => 'ecs',
          ),
        ),
        5 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页号。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        6 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页数据条数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '566331F9-5AB3-550F-B745-A730331F97A9',
              ),
              'Data' => 
              array (
                'description' => '查询结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'PageNo' => 
                  array (
                    'description' => '分页号。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1',
                  ),
                  'PageSize' => 
                  array (
                    'description' => '每页数据条数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '10',
                  ),
                  'Total' => 
                  array (
                    'description' => '数据总条数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '100',
                  ),
                  'Result' => 
                  array (
                    'description' => '查询结果对象数组。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '查询结果对象体。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'AliyunId' => 
                        array (
                          'description' => '阿里云用户ID。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '192895059480****',
                        ),
                        'CheckId' => 
                        array (
                          'description' => '巡检项Code。',
                          'type' => 'string',
                          'example' => 'EcsHighCpuUtilization',
                        ),
                        'CheckName' => 
                        array (
                          'description' => '巡检项名称。',
                          'type' => 'string',
                          'example' => 'ECS 性能负载巡检',
                        ),
                        'Content' => 
                        array (
                          'description' => '结果Json详情，与控制台配置的展示列格式保持一致，展平返回。',
                          'type' => 'string',
                          'example' => '[{"key":"EcsHighCpuUtilization_xxxx", "value":"xxx"}, {"key":"EcsHighCpuUtilization_xxxx", "value":"xxx"}, {"key":"EcsHighCpuUtilization_xxxx", "value":"xxx"}, ]',
                        ),
                        'Description' => 
                        array (
                          'description' => '巡检项描述，推荐操作和操作说明。',
                          'type' => 'string',
                          'example' => 'CPU负载，公网带宽负载，内存负载百分比算法超过标准值过高',
                        ),
                        'GmtCreated' => 
                        array (
                          'description' => '巡检项结果创建时间，格式为yyyy-mm-dd hh:mm:ss',
                          'type' => 'string',
                          'example' => '2023-07-01 00:00:00',
                        ),
                        'GmtModified' => 
                        array (
                          'description' => '巡检项结果更新时间，格式为yyyy-mm-dd hh:mm:ss',
                          'type' => 'string',
                          'example' => '2023-07-01 00:00:00',
                        ),
                        'Id' => 
                        array (
                          'description' => '巡检结果ID。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '40200899',
                        ),
                        'IsExpired' => 
                        array (
                          'description' => '是否已过期：

- **false**: 未过期，
- **true**: 已过期',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                        'Product' => 
                        array (
                          'description' => '云产品Code。',
                          'type' => 'string',
                          'example' => 'ecs',
                        ),
                        'Resource' => 
                        array (
                          'description' => '资源详情Json，具体请参考各个云产品实例详情查询相关api文档，展平返回。',
                          'type' => 'string',
                          'example' => '{"resourceId": "i-2zecnwitr2s7aca6****","resourceName": "ecs-20230701","regionId": "cn-hangzhou",...}',
                        ),
                        'ResourceId' => 
                        array (
                          'description' => '资源/实例ID。',
                          'type' => 'string',
                          'example' => 'i-bp67acfmxazb4p****',
                        ),
                        'Severity' => 
                        array (
                          'description' => '严重级别：

- **1**:  警告
- **2**:  严重',
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
        ),
      ),
      'errorCodes' => 
      array (
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden.RAM',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API doesn\'t support RAM.',
          ),
          1 => 
          array (
            'errorCode' => 'Forbidden.NotActivated',
            'errorMessage' => 'User has not activated Advisor Service.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"566331F9-5AB3-550F-B745-A730331F97A9\\",\\n  \\"Data\\": {\\n    \\"PageNo\\": 1,\\n    \\"PageSize\\": 10,\\n    \\"Total\\": 100,\\n    \\"Result\\": [\\n      {\\n        \\"AliyunId\\": 0,\\n        \\"CheckId\\": \\"EcsHighCpuUtilization\\",\\n        \\"CheckName\\": \\"ECS 性能负载巡检\\",\\n        \\"Content\\": \\"[{\\\\\\"key\\\\\\":\\\\\\"EcsHighCpuUtilization_xxxx\\\\\\", \\\\\\"value\\\\\\":\\\\\\"xxx\\\\\\"}, {\\\\\\"key\\\\\\":\\\\\\"EcsHighCpuUtilization_xxxx\\\\\\", \\\\\\"value\\\\\\":\\\\\\"xxx\\\\\\"}, {\\\\\\"key\\\\\\":\\\\\\"EcsHighCpuUtilization_xxxx\\\\\\", \\\\\\"value\\\\\\":\\\\\\"xxx\\\\\\"}, ]\\",\\n        \\"Description\\": \\"CPU负载，公网带宽负载，内存负载百分比算法超过标准值过高\\",\\n        \\"GmtCreated\\": \\"2023-07-01 00:00:00\\",\\n        \\"GmtModified\\": \\"2023-07-01 00:00:00\\",\\n        \\"Id\\": 40200899,\\n        \\"IsExpired\\": false,\\n        \\"Product\\": \\"ecs\\",\\n        \\"Resource\\": \\"{\\\\\\"resourceId\\\\\\": \\\\\\"i-2zecnwitr2s7aca6****\\\\\\",\\\\\\"resourceName\\\\\\": \\\\\\"ecs-20230701\\\\\\",\\\\\\"regionId\\\\\\": \\\\\\"cn-hangzhou\\\\\\",...}\\",\\n        \\"ResourceId\\": \\"i-bp67acfmxazb4p****\\",\\n        \\"Severity\\": 1\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '分页获取最新巡检结果(展平)',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'advisor.cn-hangzhou.aliyuncs.com',
    ),
  ),
);
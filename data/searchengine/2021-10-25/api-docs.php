<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'ROA',
    'product' => 'searchengine',
    'version' => '2021-10-25',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 169788,
      'title' => '实例',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ChangeResourceGroup',
        1 => 'TagResources',
        2 => 'UntagResources',
        3 => 'ListTagResources',
        4 => 'CreatePublicUrl',
        5 => 'DeletePublicUrl',
        6 => 'ModifyPublicUrlIpList',
        7 => 'CreateInstance',
        8 => 'DeleteInstance',
        9 => 'UpdateInstance',
        10 => 'ModifyPassword',
        11 => 'ListInstances',
        12 => 'GetInstance',
        13 => 'ListInstanceSpecs',
      ),
    ),
    1 => 
    array (
      'id' => 169802,
      'title' => '配置中心',
      'type' => 'directory',
      'children' => 
      array (
        0 => 
        array (
          'id' => 169803,
          'title' => '在线表配置',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'GetIndexOnlineStrategy',
            1 => 'ModifyIndexOnlineStrategy',
            2 => 'ModifyOnlineConfig',
            3 => 'ListOnlineConfigs',
          ),
        ),
        1 => 
        array (
          'id' => 169783,
          'title' => '索引结构',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'ModifyIndex',
            1 => 'StartIndex',
            2 => 'StopIndex',
            3 => 'CreateIndex',
            4 => 'BuildIndex',
            5 => 'DeleteIndexVersion',
            6 => 'DeleteIndex',
            7 => 'ModifyIndexVersion',
            8 => 'ModifyFile',
            9 => 'PublishIndexVersion',
            10 => 'ModifyIndexPartition',
            11 => 'GetIndex',
            12 => 'GetIndexVersion',
            13 => 'GetFile',
            14 => 'ListIndexes',
            15 => 'RecoverIndex',
          ),
        ),
        2 => 
        array (
          'id' => 169816,
          'title' => '高级配置',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'CreateConfigDir',
            1 => 'CreateConfigFile',
            2 => 'DeleteConfigDir',
            3 => 'DeleteConfigFile',
            4 => 'ModifyAdvanceConfig',
            5 => 'DeleteAdvanceConfig',
            6 => 'ModifyAdvanceConfigFile',
            7 => 'PublishAdvanceConfig',
            8 => 'GetAdvanceConfig',
            9 => 'GetAdvanceConfigFile',
            10 => 'ListAdvanceConfigDir',
            11 => 'ListAdvanceConfigs',
          ),
        ),
        3 => 
        array (
          'id' => 169824,
          'title' => '数据源配置',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'ListSchemas',
            1 => 'ModifyDataSourceDeploy',
            2 => 'CreateDataSource',
            3 => 'DeleteDataSource',
            4 => 'ModifyDataSource',
            5 => 'GetDataSource',
            6 => 'ListDataSources',
            7 => 'ListDataSourceSchemas',
            8 => 'ListDateSourceGenerations',
            9 => 'GetDataSourceDeploy',
          ),
        ),
      ),
    ),
    2 => 
    array (
      'id' => 169793,
      'title' => '运维中心',
      'type' => 'directory',
      'children' => 
      array (
        0 => 
        array (
          'id' => 169794,
          'title' => '运维管理',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'ListIndexRecoverRecords',
            1 => 'ListPausePolicys',
            2 => 'ModifyPausePolicy',
            3 => 'CreateCluster',
            4 => 'RemoveCluster',
            5 => 'ModifyClusterDesc',
            6 => 'ModifyClusterOfflineConfig',
            7 => 'ModifyClusterOnlineConfig',
            8 => 'GetCluster',
            9 => 'GetClusterRunTimeInfo',
            10 => 'ListClusterNames',
            11 => 'ListClusters',
          ),
        ),
        1 => 
        array (
          'id' => 169796,
          'title' => '部署管理',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'ModifyNodeConfig',
            1 => 'GetDeployGraph',
            2 => 'GetNodeConfig',
          ),
        ),
        2 => 
        array (
          'id' => 169800,
          'title' => '变更历史',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'ListTasks',
            1 => 'ListClusterTasks',
            2 => 'ListDataSourceTasks',
            3 => 'StopTask',
            4 => 'ForceSwitch',
          ),
        ),
      ),
    ),
    3 => 
    array (
      'id' => 191973,
      'title' => '表管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateTable',
        1 => 'ModifyTable',
        2 => 'GetTable',
        3 => 'ListTables',
        4 => 'DeleteTable',
        5 => 'Reindex',
        6 => 'ListTableGenerations',
        7 => 'GetTableGeneration',
      ),
    ),
    4 => 
    array (
      'id' => 180946,
      'title' => '其他',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ListPostQueryResult',
        1 => 'ListRestQueryResult',
        2 => 'ListVectorQueryResult',
        3 => 'PushDocuments',
        4 => 'DescribeRegions',
        5 => 'ListQueryResult',
      ),
    ),
  ),
  'components' => 
  array (
    'schemas' => 
    array (
      'ErrorResponse' => 
      array (
        'title' => 'A short description of struct',
        'description' => '错误返回响应体',
        'type' => 'object',
        'properties' => 
        array (
          'requestId' => 
          array (
            'title' => 'requestId',
            'type' => 'string',
            'example' => '90D6B8F5-FE97-4509-9AAB-367836C51818',
          ),
          'code' => 
          array (
            'title' => 'code',
            'type' => 'string',
            'example' => 'InternalServerError',
          ),
          'message' => 
          array (
            'title' => 'message',
            'type' => 'string',
            'example' => 'internal server error',
          ),
        ),
      ),
    ),
  ),
  'apis' => 
  array (
    'ChangeResourceGroup' => 
    array (
      'summary' => '修改资源组。',
      'path' => '/openapi/ha3/instances/{instanceId}/actions/change-resource-group',
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
      'consumes' => 
      array (
      ),
      'produces' => 
      array (
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
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例id。',
            'example' => 'ha-cn-pl32rf0****',
            'required' => false,
            'type' => 'string',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体参数',
            'properties' => 
            array (
              'newResourceGroupId' => 
              array (
                'description' => '新资源组id',
                'example' => 'rg-acfmxr3gs*****',
                'required' => false,
                'title' => '新资源组id',
                'type' => 'string',
              ),
              'resourceType' => 
              array (
                'description' => '资源类型',
                'example' => 'instance',
                'required' => false,
                'title' => '资源类型',
                'type' => 'string',
              ),
            ),
            'required' => false,
            'type' => 'object',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => 'Schema of Response',
            'properties' => 
            array (
              'requestId' => 
              array (
                'description' => 'Id of the request',
                'example' => '10D5E615-69F7-5F49-B850-00169ADE513C',
                'title' => 'Id of the request',
                'type' => 'string',
              ),
            ),
            'title' => 'Schema of Response',
            'type' => 'object',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"10D5E615-69F7-5F49-B850-00169ADE513C\\"\\n}","type":"json"}]',
      'title' => '修改资源组',
    ),
    'TagResources' => 
    array (
      'summary' => '打标签接口',
      'path' => '/openapi/ha3/resource-tags',
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
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'abilityTreeCode' => '166280',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREopensearchJB31XH',
        ),
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
            'properties' => 
            array (
              'resourceType' => 
              array (
                'description' => '资源类型',
                'example' => 'instance',
                'required' => true,
                'title' => '资源类型',
                'type' => 'string',
              ),
              'resourceId' => 
              array (
                'description' => '资源ID,最多 50个子项',
                'items' => 
                array (
                  'description' => '资源ID',
                  'example' => 'es-cn-i7m2u6o2*******',
                  'required' => false,
                  'type' => 'string',
                ),
                'required' => true,
                'title' => '资源ID,最多 50个子项',
                'type' => 'array',
              ),
              'tag' => 
              array (
                'description' => '对应新增标签列表，最多包含20个子项',
                'items' => 
                array (
                  'description' => '标签',
                  'properties' => 
                  array (
                    'key' => 
                    array (
                      'description' => '标签键',
                      'example' => 'opensearch',
                      'required' => false,
                      'title' => '标签键',
                      'type' => 'string',
                    ),
                    'value' => 
                    array (
                      'description' => '标签值',
                      'example' => 'opensearch',
                      'required' => false,
                      'title' => '标签值',
                      'type' => 'string',
                    ),
                  ),
                  'required' => false,
                  'type' => 'object',
                ),
                'required' => true,
                'title' => '对应新增标签列表，最多包含20个子项',
                'type' => 'array',
              ),
            ),
            'required' => false,
            'type' => 'object',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'properties' => 
            array (
              'requestId' => 
              array (
                'description' => '请求id',
                'example' => 'E7B7D598-B080-5C8E-AA35-D43EC0D5F886',
                'title' => '请求id',
                'type' => 'string',
              ),
            ),
            'type' => 'object',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"E7B7D598-B080-5C8E-AA35-D43EC0D5F886\\"\\n}","type":"json"}]',
      'title' => '批量 增加/更新 标签',
    ),
    'UntagResources' => 
    array (
      'summary' => '删标签接口',
      'path' => '/openapi/ha3/resource-tags',
      'methods' => 
      array (
        0 => 'delete',
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
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
        'abilityTreeCode' => '166296',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREopensearchJB31XH',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'resourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源类型',
            'example' => 'instance',
            'required' => true,
            'title' => '资源类型',
            'type' => 'string',
          ),
        ),
        1 => 
        array (
          'name' => 'resourceId',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '资源ID,最多 50个子项',
            'items' => 
            array (
              'description' => '资源ID',
              'example' => 'es-cn-i7m2u6o2*******',
              'required' => false,
              'type' => 'string',
            ),
            'required' => true,
            'title' => '资源ID,最多 50个子项',
            'type' => 'array',
          ),
        ),
        2 => 
        array (
          'name' => 'tagKey',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '对应标签键列表，最多包含20个子项',
            'items' => 
            array (
              'description' => '标签键',
              'example' => 'opensearch',
              'required' => false,
              'type' => 'string',
            ),
            'required' => false,
            'title' => '对应标签键列表，最多包含20个子项',
            'type' => 'array',
          ),
        ),
        3 => 
        array (
          'name' => 'all',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否全部删除，只针对tags为空时有效。取值范围： true  false True False   默认是 false',
            'example' => 'true',
            'required' => false,
            'title' => '是否全部删除，只针对tags为空时有效。取值范围： true  false True False   默认是 false',
            'type' => 'boolean',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'properties' => 
            array (
              'tequestId' => 
              array (
                'description' => '请求id',
                'example' => 'E7B7D598-B080-5C8E-AA35-D43EC0D5F886
',
                'type' => 'string',
              ),
            ),
            'type' => 'object',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"tequestId\\": \\"E7B7D598-B080-5C8E-AA35-D43EC0D5F886\\\\n\\"\\n}","type":"json"}]',
      'title' => '批量删除标签',
    ),
    'ListTagResources' => 
    array (
      'summary' => '查标签接口',
      'path' => '/openapi/ha3/resource-tags',
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
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
        'abilityTreeCode' => '166297',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREopensearch0AT3OG',
          1 => 'FEATUREopensearchJB31XH',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'resourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源类型',
            'example' => 'instance',
            'required' => true,
            'title' => '资源类型',
            'type' => 'string',
          ),
        ),
        1 => 
        array (
          'name' => 'resourceId',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '资源ID,最多 50个子项',
            'items' => 
            array (
              'description' => '资源ID',
              'example' => 'es-cn-i7m2u6o2*******
',
              'required' => false,
              'type' => 'string',
            ),
            'required' => false,
            'title' => '资源ID,最多 50个子项',
            'type' => 'array',
          ),
        ),
        2 => 
        array (
          'name' => 'tag',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '对应新增标签列表，最多包含20个子项',
            'items' => 
            array (
              'description' => '标签',
              'properties' => 
              array (
                'key' => 
                array (
                  'description' => '标签键',
                  'example' => 'opensearch',
                  'required' => false,
                  'title' => '标签键',
                  'type' => 'string',
                ),
                'value' => 
                array (
                  'description' => '标签值',
                  'example' => 'opensearch',
                  'required' => false,
                  'title' => '标签值',
                  'type' => 'string',
                ),
              ),
              'required' => false,
              'type' => 'object',
            ),
            'required' => false,
            'title' => '对应新增标签列表，最多包含20个子项',
            'type' => 'array',
          ),
        ),
        3 => 
        array (
          'name' => 'nextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '下一个查询开始Token',
            'example' => '600********33',
            'required' => false,
            'title' => '下一个查询开始Token',
            'type' => 'string',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'properties' => 
            array (
              'requestId' => 
              array (
                'description' => '请求id',
                'example' => '2AE63638-5420-56DC-BF59-37D8174039A0',
                'title' => '请求id',
                'type' => 'string',
              ),
              'nextToken' => 
              array (
                'description' => '下一个查询开始Token',
                'example' => 'b56*******de4a7eca',
                'title' => '下一个查询开始Token',
                'type' => 'string',
              ),
              'tagResources' => 
              array (
                'description' => '资源列表',
                'items' => 
                array (
                  'description' => '绑定了标签的资源。',
                  'properties' => 
                  array (
                    'tagKey' => 
                    array (
                      'description' => '标签键',
                      'example' => 'opensearch',
                      'title' => '标签键',
                      'type' => 'string',
                    ),
                    'tagValue' => 
                    array (
                      'description' => '标签值',
                      'example' => 'opensearch',
                      'title' => '标签值',
                      'type' => 'string',
                    ),
                    'resourceId' => 
                    array (
                      'description' => '资源ID',
                      'example' => 'rmq-cn-jeo3mn55j01',
                      'title' => '资源ID',
                      'type' => 'string',
                    ),
                    'resourceType' => 
                    array (
                      'description' => '资源类型',
                      'example' => 'instance',
                      'title' => '资源类型',
                      'type' => 'string',
                    ),
                  ),
                  'type' => 'object',
                ),
                'title' => '资源列表',
                'type' => 'array',
              ),
            ),
            'type' => 'object',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"2AE63638-5420-56DC-BF59-37D8174039A0\\",\\n  \\"nextToken\\": \\"b56*******de4a7eca\\",\\n  \\"tagResources\\": [\\n    {\\n      \\"tagKey\\": \\"opensearch\\",\\n      \\"tagValue\\": \\"opensearch\\",\\n      \\"resourceId\\": \\"rmq-cn-jeo3mn55j01\\",\\n      \\"resourceType\\": \\"instance\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询资源标签关系列表',
    ),
    'CreatePublicUrl' => 
    array (
      'summary' => '开通公网域名。',
      'path' => '/openapi/ha3/instances/{instanceId}/public-url',
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
        'operationType' => 'create',
        'abilityTreeCode' => '171289',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREopensearch0AT3OG',
          1 => 'FEATUREopensearchJB31XH',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID',
            'type' => 'string',
            'required' => true,
            'example' => 'ha-cn-pl32rf0****',
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
                'title' => 'id of request',
                'description' => 'id of request',
                'type' => 'string',
                'example' => '022F36C7-9FB4-5D67-BEBC-3D14B0984463',
              ),
              'result' => 
              array (
                'title' => 'Map',
                'description' => 'Map',
                'type' => 'object',
                'example' => '{}',
              ),
            ),
          ),
        ),
        500 => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"022F36C7-9FB4-5D67-BEBC-3D14B0984463\\",\\n  \\"result\\": {}\\n}","type":"json"}]',
      'title' => '开通公网域名',
    ),
    'DeletePublicUrl' => 
    array (
      'summary' => '删除公网域名。',
      'path' => '/openapi/ha3/instances/{instanceId}/public-url',
      'methods' => 
      array (
        0 => 'delete',
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
        'abilityTreeCode' => '171290',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREopensearch0AT3OG',
          1 => 'FEATUREopensearchJB31XH',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例id',
            'type' => 'string',
            'required' => true,
            'example' => 'ha-cn-pl32rf0****',
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
                'title' => 'id of request',
                'description' => 'id of request',
                'type' => 'string',
                'example' => 'F43E8AB4-419C-5F4C-90D6-615590DFAA3C',
              ),
              'result' => 
              array (
                'title' => 'Map',
                'description' => 'Map',
                'type' => 'object',
                'example' => '{}',
              ),
            ),
          ),
        ),
        500 => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"F43E8AB4-419C-5F4C-90D6-615590DFAA3C\\",\\n  \\"result\\": {}\\n}","type":"json"}]',
      'title' => '删除公网域名',
    ),
    'ModifyPublicUrlIpList' => 
    array (
      'summary' => '修改公网域名访问白名单',
      'path' => '/openapi/ha3/instances/{instanceId}/public-url-ip-list',
      'methods' => 
      array (
        0 => 'put',
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
        'abilityTreeCode' => '171291',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREopensearch0AT3OG',
          1 => 'FEATUREopensearchJB31XH',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID',
            'type' => 'string',
            'required' => true,
            'example' => 'ha-cn-pl32rf0****',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => 'body',
            'type' => 'object',
            'required' => false,
            'additionalProperties' => 
            array (
              'type' => 'string',
              'example' => '47.100.XX.XX,140.205.XX.XX',
              'description' => '白名单，逗号分隔',
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
              'requestId' => 
              array (
                'title' => 'id of request',
                'description' => 'id of request',
                'type' => 'string',
                'example' => 'E45380E8-994A-5402-9806-F114B3295FCF',
              ),
              'result' => 
              array (
                'title' => 'Map',
                'description' => 'Map',
                'type' => 'object',
                'example' => '{}',
              ),
            ),
          ),
        ),
        500 => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"E45380E8-994A-5402-9806-F114B3295FCF\\",\\n  \\"result\\": {}\\n}","type":"json"}]',
      'title' => '修改公网域名白名单',
    ),
    'CreateInstance' => 
    array (
      'summary' => '创建问天引擎实例。',
      'path' => '/openapi/ha3/instances',
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
        'operationType' => 'create',
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
            'description' => '请求结构。',
            'type' => 'object',
            'properties' => 
            array (
              'chargeType' => 
              array (
                'description' => '实例的付费方式。取值范围： PREPAY：预付费，包年包月。选择该类付费方式时，您必须确认自己的账号支持余额支付/信用支付，否则将返回 InvalidPayMethod 的错误提示，并且需要指定paymentInfo参数。POSTPAY：按量付费（当前暂不支持）。',
                'type' => 'string',
                'required' => false,
                'example' => 'PREPAY',
              ),
              'components' => 
              array (
                'description' => '实例相关的规格信息列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '实例相关的规格信息列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'code' => 
                    array (
                      'description' => '规格code，和售卖参数保持一致',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'searcherdocsize',
                    ),
                    'value' => 
                    array (
                      'description' => '控件填写的数据。',
                      'type' => 'string',
                      'required' => false,
                      'example' => '200',
                    ),
                  ),
                  'required' => false,
                ),
                'required' => false,
              ),
              'order' => 
              array (
                'description' => '付费信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'autoRenew' => 
                  array (
                    'description' => '是否自动续费，包含：是（true）和否（false）',
                    'type' => 'boolean',
                    'required' => false,
                    'example' => 'true',
                  ),
                  'duration' => 
                  array (
                    'description' => '付费周期，包含1，2，3，4，5，6，7，8，9，10，12',
                    'type' => 'integer',
                    'format' => 'int64',
                    'required' => false,
                    'example' => '29',
                  ),
                  'pricingCycle' => 
                  array (
                    'description' => '周期单位，包含：月（Month），年（Year）等',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'Month',
                  ),
                ),
                'required' => false,
              ),
            ),
            'required' => false,
            'example' => '{}',
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
                'example' => 'D39EE0F1-D7EF-5F46-B781-6BF4185308B0',
              ),
              'result' => 
              array (
                'description' => '返回结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'instanceId' => 
                  array (
                    'description' => '实例id',
                    'type' => 'string',
                    'example' => 'ha-cn-pl32rf0****',
                  ),
                ),
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"D39EE0F1-D7EF-5F46-B781-6BF4185308B0\\",\\n  \\"result\\": {\\n    \\"instanceId\\": \\"ha-cn-pl32rf0****\\"\\n  }\\n}","type":"json"}]',
      'title' => '创建实例',
      'description' => '### 方法
`POST`
### URI
`/api/instances?dryRun=false`',
      'responseParamsDescription' => '### 返回示例
**正常返回示例**

```
{
	"requestId": "90D6B8F5-FE97-4509-9AAB-367836C51818",
  "result": {
      "instanceId": "deeprec-cn-xxxxxx1"
    }
}
```

**异常返回示例**

```
{
	"requestId": "90D6B8F5-FE97-4509-9AAB-367836C51818",
  "code": "InternalServerError",
  "message":"internal server error"
}
```
详情可参考[响应结构](~~465311~~)',
    ),
    'DeleteInstance' => 
    array (
      'summary' => '删除指定实例。',
      'path' => '/openapi/ha3/instances/{instanceId}',
      'methods' => 
      array (
        0 => 'delete',
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
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '实例 ID。',
            'description' => '实例 ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'ha-cn-pl32rf0****',
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
                'description' => '当前请求的RequestID',
                'type' => 'string',
                'example' => 'E45380E8-994A-5402-9806-F114B3295FCF',
              ),
              'result' => 
              array (
                'description' => '返回结果。',
                'type' => 'object',
                'example' => '{}',
              ),
            ),
          ),
        ),
        500 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
              'code' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"E45380E8-994A-5402-9806-F114B3295FCF\\",\\n  \\"result\\": {}\\n}","type":"json"}]',
      'title' => '删除实例',
      'description' => '### 方法
`DELETE`
### URI
`/openapi/ha3/instances/{instanceId}`',
      'requestParamsDescription' => '### 请求示例

**修改名称**

`DELETE /openapi/ha3/instances/ha3-cn-xxxxxx`',
      'responseParamsDescription' => '### 返回示例
**正常返回示例**

```
{
  "result": {  },
  "requestId": "90D6B8F5-FE97-4509-9AAB-367836C51818"
}
```

**异常返回示例**

```

{
  "requestId": "BD1EA715-DF6F-06C2-004C-C1FA0D3A9820",
  "httpCode": 404,
  "code": "App.NotFound",
  "message": "App not found"
}
```
详情可参考[响应结构](~~465311~~)',
    ),
    'UpdateInstance' => 
    array (
      'summary' => '修改指定实例配置。',
      'path' => '/openapi/ha3/instances/{instanceId}',
      'methods' => 
      array (
        0 => 'put',
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
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例id',
            'type' => 'string',
            'required' => false,
            'example' => 'ha-cn-pl32rf0****',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求结构。',
            'type' => 'object',
            'properties' => 
            array (
              'components' => 
              array (
                'title' => '配额信息，与description不能同时更新。',
                'description' => '实例相关的规格信息列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '实例相关的规格信息',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'code' => 
                    array (
                      'description' => '规格code，和售卖参数保持一致',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'searcherdocsizesum',
                    ),
                    'value' => 
                    array (
                      'description' => '值',
                      'type' => 'string',
                      'required' => false,
                      'example' => '200',
                    ),
                  ),
                  'required' => false,
                ),
                'required' => false,
              ),
              'orderType' => 
              array (
                'title' => '订单类型，与description不能同时传递。',
                'description' => 'UPGRAGE： 提升实例规格
DOWNGRADE: 降低实例规格',
                'type' => 'string',
                'required' => false,
                'example' => 'UPGRAGE',
              ),
              'description' => 
              array (
                'title' => '更新实例描述信息，与components及orderType字段不能同时更新。',
                'description' => '实例描述信息。',
                'type' => 'string',
                'required' => false,
                'example' => '实例描述',
              ),
            ),
            'required' => false,
            'example' => '{}',
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
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'result' => 
              array (
                'description' => '返回结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'description' => 
                  array (
                    'title' => '实例描述',
                    'description' => '实例描述',
                    'type' => 'string',
                    'example' => '测试实例',
                  ),
                  'resourceGroupId' => 
                  array (
                    'title' => '资源组ID',
                    'description' => '资源组ID',
                    'type' => 'string',
                    'example' => 'ha-cn-pl32rf0****',
                  ),
                  'expiredTime' => 
                  array (
                    'title' => '到期时间',
                    'description' => '到期时间',
                    'type' => 'string',
                    'example' => '2019-01-06T16:00:00.0',
                  ),
                  'commodityCode' => 
                  array (
                    'title' => '商品code',
                    'description' => '商品code',
                    'type' => 'string',
                    'example' => 'opensearch_ha3post_public_cn',
                  ),
                  'status' => 
                  array (
                    'title' => '状态',
                    'description' => '状态',
                    'type' => 'string',
                    'example' => 'READY',
                  ),
                  'instanceId' => 
                  array (
                    'title' => '资源一级ID',
                    'description' => '资源一级ID',
                    'type' => 'string',
                    'example' => 'ha-cn-pl32rf0****',
                  ),
                  'createTime' => 
                  array (
                    'title' => '创建时间',
                    'description' => '创建时间',
                    'type' => 'string',
                    'example' => '2018-12-06T11:17:49.0',
                  ),
                  'lockMode' => 
                  array (
                    'title' => '锁定状态',
                    'description' => '锁定状态',
                    'type' => 'string',
                    'example' => 'Unlock',
                  ),
                  'chargeType' => 
                  array (
                    'title' => '付费类型',
                    'description' => '付费类型',
                    'type' => 'string',
                    'example' => 'POSTPAY',
                  ),
                  'updateTime' => 
                  array (
                    'title' => '更新时间',
                    'description' => '更新时间',
                    'type' => 'string',
                    'example' => '2018-12-06T11:17:49.0',
                  ),
                  'inDebt' => 
                  array (
                    'title' => '是否欠费',
                    'description' => '是否欠费',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                ),
              ),
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID',
                'type' => 'string',
                'example' => '90D6B8F5-FE97-4509-9AAB-367836C51818',
              ),
            ),
          ),
        ),
        500 => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"result\\": {\\n    \\"description\\": \\"测试实例\\",\\n    \\"resourceGroupId\\": \\"ha-cn-pl32rf0****\\",\\n    \\"expiredTime\\": \\"2019-01-06T16:00:00.0\\",\\n    \\"commodityCode\\": \\"opensearch_ha3post_public_cn\\",\\n    \\"status\\": \\"READY\\",\\n    \\"instanceId\\": \\"ha-cn-pl32rf0****\\",\\n    \\"createTime\\": \\"2018-12-06T11:17:49.0\\",\\n    \\"lockMode\\": \\"Unlock\\",\\n    \\"chargeType\\": \\"POSTPAY\\",\\n    \\"updateTime\\": \\"2018-12-06T11:17:49.0\\",\\n    \\"inDebt\\": false\\n  },\\n  \\"requestId\\": \\"90D6B8F5-FE97-4509-9AAB-367836C51818\\"\\n}","type":"json"}]',
      'title' => '修改指定实例配置',
      'description' => '### 方法
`PUT`
### URI
`/openapi/ha3/instances/{instanceId}`',
      'extraInfo' => '### 示例
**请求示例**

`PUT /openapi/ha3/instances/ha-cn-xxxxxx`

```
{
  "description": "the new description"
}
或
{
  "resourceGroupId": "the new resourceGroupId"
}
```
**返回示例**

正确返回

```
{
  "result": {
    "instanceId": "ha-cn-pl32rf0****",
    "description": "测试实例",
    "status": "Running",
    "chargeType": "POSTPAY",
    "commodityCode": "opensearch_ha3post_public_cn",
    "createTime": "2018-12-06T11:17:49.0",
    "updateTime": "2018-12-06T11:17:49.0",
    "expiredTime": "2019-01-06T16:00:00.0",
    "resourceGroupId": "rg-abcdefg",
    "lockMode": "Unlock",
    "inDebt": false,
    "spec": {
      "password": "passwd",
      "searchResource": {
        "disk": 50,
        "mem": 8,
        "cpu": 2,
        "nodeCount": 2
      },
      "instanceName": "ha-cn-pl32rf0****",
      "vSwitchId": "vswitch_id_xxx",
      "vpcId": "vpc_id_xxx",
      "qrsResource": {
        "disk": 50,
        "mem": 8,
        "cpu": 2,
        "nodeCount": 2
      },
      "region": "cn-hangzhou",
      "userName": "user"
    },
    "status": {
      "phase": "PENDING",
      "instancePhase": "INIT",
      "createSuccess": false
    }
  },
  "requestId": "90D6B8F5-FE97-4509-9AAB-367836C51818"
}
```
详情可参考[响应结构](~~465311~~)',
    ),
    'ModifyPassword' => 
    array (
      'summary' => '修改实例的密码。',
      'path' => '/openapi/ha3/instances/{instanceId}/password',
      'methods' => 
      array (
        0 => 'put',
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
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID',
            'type' => 'string',
            'required' => true,
            'example' => 'ha-cn-pl32rf0****',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '修改密码请求体。',
            'type' => 'object',
            'properties' => 
            array (
              'username' => 
              array (
                'description' => '用户名
',
                'type' => 'string',
                'required' => false,
                'example' => 'testUserName',
              ),
              'password' => 
              array (
                'description' => '密码',
                'type' => 'string',
                'required' => false,
                'example' => 'testPassword',
              ),
            ),
            'required' => false,
            'example' => '{}',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'title' => 'id of request',
                'description' => '请求id。',
                'type' => 'string',
                'example' => '407BFD91-DE7D-50BA-8F88-CDE52A3B5E46',
              ),
              'result' => 
              array (
                'title' => 'Map',
                'description' => '结果',
                'type' => 'object',
                'example' => '{}',
              ),
            ),
          ),
        ),
        500 => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"407BFD91-DE7D-50BA-8F88-CDE52A3B5E46\\",\\n  \\"result\\": {}\\n}","type":"json"}]',
      'title' => '修改实例的密码',
      'description' => '### 方法
`PUT`
### URI
`/openapi/ha3/instances/{instanceId}/password`
',
      'requestParamsDescription' => '### 请求示例
`PUT /openapi/ha3/instances/{instanceId}/password`

### 请求体示例

```
{
  "userName":"my_user_name",
	"password":"newPassword" 
}
```',
      'responseParamsDescription' => '### 返回参数说明
详情可参考[响应结构](~~465311~~)',
    ),
    'ListInstances' => 
    array (
      'summary' => '获取实例列表。',
      'path' => '/openapi/ha3/instances',
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
          'name' => 'pageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定页码，默认为：1',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'pageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定每页展示条数，默认为10，限制:[1-50]',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        2 => 
        array (
          'name' => 'instanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例id',
            'type' => 'string',
            'required' => false,
            'example' => 'ha-cn-pl32rf0****',
          ),
        ),
        3 => 
        array (
          'name' => 'description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '通过实例描述称进行过滤，支持模糊匹配。',
            'type' => 'string',
            'required' => false,
            'example' => '问天引擎实例',
          ),
        ),
        4 => 
        array (
          'name' => 'resourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组id。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-aekzgpiswzbksdi',
          ),
        ),
        5 => 
        array (
          'name' => 'edition',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例类型，vector(向量索引版)，engine(召回引擎版)',
            'type' => 'string',
            'required' => false,
            'example' => 'vector',
          ),
        ),
        6 => 
        array (
          'name' => 'tags',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '标签。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '实例标签。',
              'type' => 'object',
              'properties' => 
              array (
                'key' => 
                array (
                  'description' => '标签键',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'opensearch',
                ),
                'value' => 
                array (
                  'description' => '标签值',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'opensearch',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
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
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'result' => 
              array (
                'description' => '返回结果',
                'type' => 'array',
                'items' => 
                array (
                  'title' => 'InstanceItemType',
                  'description' => 'InstanceItemType',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'description' => 
                    array (
                      'title' => '实例描述',
                      'description' => '实例描述',
                      'type' => 'string',
                      'example' => '应急测试',
                    ),
                    'resourceGroupId' => 
                    array (
                      'title' => '资源组ID',
                      'description' => '资源组ID',
                      'type' => 'string',
                      'example' => 'ha-cn-pl32rf0****',
                    ),
                    'expiredTime' => 
                    array (
                      'title' => '到期时间',
                      'description' => '到期时间',
                      'type' => 'string',
                      'example' => '1634885083',
                    ),
                    'commodityCode' => 
                    array (
                      'title' => '商品code',
                      'description' => '商品code',
                      'type' => 'string',
                      'example' => 'opensearch_ha3post_public_cn',
                    ),
                    'status' => 
                    array (
                      'title' => '状态',
                      'description' => '状态',
                      'type' => 'string',
                      'example' => 'READY',
                    ),
                    'instanceId' => 
                    array (
                      'title' => '资源一级ID',
                      'description' => '资源一级ID',
                      'type' => 'string',
                      'example' => 'ha-cn-pl32rf0****',
                    ),
                    'createTime' => 
                    array (
                      'title' => '创建时间',
                      'description' => '创建时间',
                      'type' => 'string',
                      'example' => '2022-06-04T02:03:21Z',
                    ),
                    'lockMode' => 
                    array (
                      'title' => '锁定状态',
                      'description' => '锁定状态',
                      'type' => 'string',
                      'example' => 'Unlock',
                    ),
                    'chargeType' => 
                    array (
                      'title' => '付费类型',
                      'description' => '付费类型',
                      'type' => 'string',
                      'example' => 'POSTPAY',
                    ),
                    'updateTime' => 
                    array (
                      'title' => '更新时间',
                      'description' => '更新时间',
                      'type' => 'string',
                      'example' => '2018-12-06T11:17:49.0',
                    ),
                    'inDebt' => 
                    array (
                      'title' => '是否欠费',
                      'description' => '是否欠费',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'network' => 
                    array (
                      'description' => '网络搜索引擎实例信息',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'vSwitchId' => 
                        array (
                          'description' => '虚拟交换机id',
                          'type' => 'string',
                          'example' => 'vsw-bp11ldcf59q2n****',
                        ),
                        'vpcId' => 
                        array (
                          'description' => 'vpc网络id',
                          'type' => 'string',
                          'example' => 'vpc-wz9axk41d9vff****',
                        ),
                        'endpoint' => 
                        array (
                          'description' => '网关接入点。',
                          'type' => 'string',
                          'example' => 'ha-cn-35t3r****.ha.aliyuncs.com',
                        ),
                      ),
                    ),
                    'tags' => 
                    array (
                      'description' => '标签。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '标签。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'key' => 
                          array (
                            'description' => '标签键',
                            'type' => 'string',
                            'example' => 'opensearch',
                          ),
                          'value' => 
                          array (
                            'description' => '标签值',
                            'type' => 'string',
                            'example' => 'opensearch',
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'totalCount' => 
              array (
                'title' => '总记录数。',
                'description' => '总记录数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '5',
              ),
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '当前请求的RequestID',
                'type' => 'string',
                'example' => '89B968E6-1E41-58DF-BB25-5F98ECC759CE',
              ),
            ),
          ),
        ),
        500 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
              'code' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"result\\": [\\n    {\\n      \\"description\\": \\"应急测试\\",\\n      \\"resourceGroupId\\": \\"ha-cn-pl32rf0****\\",\\n      \\"expiredTime\\": \\"1634885083\\",\\n      \\"commodityCode\\": \\"opensearch_ha3post_public_cn\\",\\n      \\"status\\": \\"READY\\",\\n      \\"instanceId\\": \\"ha-cn-pl32rf0****\\",\\n      \\"createTime\\": \\"2022-06-04T02:03:21Z\\",\\n      \\"lockMode\\": \\"Unlock\\",\\n      \\"chargeType\\": \\"POSTPAY\\",\\n      \\"updateTime\\": \\"2018-12-06T11:17:49.0\\",\\n      \\"inDebt\\": false,\\n      \\"network\\": {\\n        \\"vSwitchId\\": \\"vsw-bp11ldcf59q2n****\\",\\n        \\"vpcId\\": \\"vpc-wz9axk41d9vff****\\",\\n        \\"endpoint\\": \\"ha-cn-35t3r****.ha.aliyuncs.com\\"\\n      },\\n      \\"tags\\": [\\n        {\\n          \\"key\\": \\"opensearch\\",\\n          \\"value\\": \\"opensearch\\"\\n        }\\n      ]\\n    }\\n  ],\\n  \\"totalCount\\": 5,\\n  \\"requestId\\": \\"89B968E6-1E41-58DF-BB25-5F98ECC759CE\\"\\n}","type":"json"}]',
      'title' => '获取实例列表',
      'description' => '### 方法
`GET`
### URI
`/openapi/ha3/instances`',
      'requestParamsDescription' => '| 参数        | 类型   | 是否必需 | 描述                                                         |
| ----------- | ------ | -------- | ------------------------------------------------------------ |
| status      | String | 否       | 通过实例状态进行过滤。Running, Ready, Initializing,Starting  |
| expiredTime | Long   | 否       | 秒级时间戳，通过过期时间过滤，大于当前时间会过滤出即将过期的实例（不包含已经过期的实例） |

### 示例
**请求示例**

`GET /openapi/ha3/instances?name=test&instanceId=abc&page=1&size=10`

',
      'responseParamsDescription' => '### 返回示例
**正常返回示例**
```
{
    "requestId": "90D6B8F5-FE97-4509-9AAB-367836C51818",
    "result": [
        {
            "instanceId": "igraph-cn-xxxxxx1",
            "spec": {
                "password": "passwd",
                "searchResource": {
                    "disk": 50,
                    "mem": 8,
                    "cpu": 2,
                    "nodeCount": 2
                },
                "instanceName": "testInstance",
                "vSwitchId": "vswitch_id_xxx",
                "vpcId": "vpc_id_xxx",
                "qrsResource": {
                    "disk": 50,
                    "mem": 8,
                    "cpu": 2,
                    "nodeCount": 2
                },
                "region": "cn-hangzhou",
                "userName": "user"
            },
            "status": {
                "phase": "PENDING",
                "instancePhase": "INIT",
                "createSuccess": false
            }
        },
        {
            "instanceId": "igraph-cn-xxxxxx2",
            "spec": {
                "password": "passwd",
                "searchResource": {
                    "disk": 50,
                    "mem": 8,
                    "cpu": 2,
                    "nodeCount": 2
                },
                "instanceName": "testInstance",
                "vSwitchId": "vswitch_id_xxx",
                "vpcId": "vpc_id_xxx",
                "qrsResource": {
                    "disk": 50,
                    "mem": 8,
                    "cpu": 2,
                    "nodeCount": 2
                },
                "region": "cn-hangzhou",
                "userName": "user"
            },
            "status": {
                "phase": "PENDING",
                "instancePhase": "INIT",
                "createSuccess": false
            }
        }
    ],
    "totalCount": 20
}
```
**异常返回示例**

```
{
  "requestId": "BD1EA715-DF6F-06C2-004C-C1FA0D3A9820",
  "httpCode": 404,
  "code": "App.NotFound",
  "message": "App not found"
}
```
',
    ),
    'GetInstance' => 
    array (
      'summary' => '通过指定的实例ID查看实例详情。',
      'path' => '/openapi/ha3/instances/{instanceId}',
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
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '实例 ID。',
            'description' => '实例 ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'ha-cn-pl32rf0****',
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
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'result' => 
              array (
                'description' => '返回结果',
                'type' => 'object',
                'properties' => 
                array (
                  'description' => 
                  array (
                    'title' => '实例描述',
                    'description' => '实例描述',
                    'type' => 'string',
                    'example' => '测试实例',
                  ),
                  'resourceGroupId' => 
                  array (
                    'title' => '资源组ID',
                    'description' => '资源组ID',
                    'type' => 'string',
                    'example' => 'rg-aekzjvw24****',
                  ),
                  'expiredTime' => 
                  array (
                    'title' => '到期时间',
                    'description' => '到期时间',
                    'type' => 'string',
                    'example' => '024-05-21 16:49:31.0',
                  ),
                  'commodityCode' => 
                  array (
                    'title' => '商品code',
                    'description' => '商品code',
                    'type' => 'string',
                    'example' => 'opensearch_ha3post_public_cn',
                  ),
                  'instanceId' => 
                  array (
                    'title' => '资源一级ID',
                    'description' => '资源一级ID',
                    'type' => 'string',
                    'example' => 'ha-cn-pl32rf0****',
                  ),
                  'createTime' => 
                  array (
                    'title' => '创建时间',
                    'description' => '创建时间',
                    'type' => 'string',
                    'example' => '2022-06-17T02:01:26Z',
                  ),
                  'lockMode' => 
                  array (
                    'title' => '锁定状态',
                    'description' => '锁定状态',
                    'type' => 'string',
                    'example' => 'Unlock',
                  ),
                  'chargeType' => 
                  array (
                    'title' => '付费类型',
                    'description' => '付费类型',
                    'type' => 'string',
                    'example' => 'POSYPAY',
                  ),
                  'updateTime' => 
                  array (
                    'title' => '更新时间',
                    'description' => '更新时间',
                    'type' => 'string',
                    'example' => '024-05-21 16:49:31.0',
                  ),
                  'inDebt' => 
                  array (
                    'title' => '是否欠费',
                    'description' => '是否欠费',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                  'status' => 
                  array (
                    'description' => '实例状态阶段

- INIT：初始化
- WAIT_CONFIG：待配置
- CONFIG_UPDATING：配置生效中
- READY：正常',
                    'type' => 'string',
                    'example' => 'INIT',
                  ),
                  'tags' => 
                  array (
                    'description' => '标签。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '标签。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'key' => 
                        array (
                          'description' => '标签键',
                          'type' => 'string',
                          'example' => 'opensearch',
                        ),
                        'value' => 
                        array (
                          'description' => '标签值',
                          'type' => 'string',
                          'example' => 'opensearch',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '当前请求的requestID',
                'type' => 'string',
                'example' => 'E7B7D598-B080-5C8E-AA35-D43EC0D5F886',
              ),
            ),
          ),
        ),
        500 => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"result\\": {\\n    \\"description\\": \\"测试实例\\",\\n    \\"resourceGroupId\\": \\"rg-aekzjvw24****\\",\\n    \\"expiredTime\\": \\"024-05-21 16:49:31.0\\",\\n    \\"commodityCode\\": \\"opensearch_ha3post_public_cn\\",\\n    \\"instanceId\\": \\"ha-cn-pl32rf0****\\",\\n    \\"createTime\\": \\"2022-06-17T02:01:26Z\\",\\n    \\"lockMode\\": \\"Unlock\\",\\n    \\"chargeType\\": \\"POSYPAY\\",\\n    \\"updateTime\\": \\"024-05-21 16:49:31.0\\",\\n    \\"inDebt\\": false,\\n    \\"status\\": \\"INIT\\",\\n    \\"tags\\": [\\n      {\\n        \\"key\\": \\"opensearch\\",\\n        \\"value\\": \\"opensearch\\"\\n      }\\n    ]\\n  },\\n  \\"requestId\\": \\"E7B7D598-B080-5C8E-AA35-D43EC0D5F886\\"\\n}","type":"json"}]',
      'title' => '根据实例ID查看实例详情',
      'description' => '### 方法
`GET`
### URI
`/openapi/ha3/instances/{instanceId}`
',
      'requestParamsDescription' => '### 请求示例
`GET /openapi/ha3/instances/ha3-cn-xxxxxx`',
      'responseParamsDescription' => '### 返回示例
**正常返回示例**

```
{
  "requestId": "90D6B8F5-FE97-4509-9AAB-367836C51818",
  "result": 
  {
    "instanceId":"fadsfsafs",
    "inDebt":true,
    "lockMode":"Unlock",
    "expiredTime":"asdfas",
    "updateTime":"dfasf",
    "createTime":"dfasf",
    "resourceGroupId":"resourceGroupID",
    "commodityCode":"commodityCode",
    "chargeType":"POSYPAY",
    "description":"this is description",
    "apiVersion": "tisplus/v1",
    "network": {
      "vSwitchId": "vswitch_id_xxx",
      "vpcId": "vpc_id_xxx",	  
    },
    "userName": "user",
    "spec": {
      "searchResource": {
        "disk": 50,
        "mem": 8,
        "cpu": 2,
        "nodeCount": 2
      },
      "qrsResource": {
        "disk": 50,
        "mem": 8,
        "cpu": 2,
        "nodeCount": 2
      }
    },
   "status": "INIT",
  }
}
```
**异常返回示例**

```
{
  "requestId": "BD1EA715-DF6F-06C2-004C-C1FA0D3A9820",
  "httpCode": 404,
  "code": "App.NotFound",
  "message": "App not found"
}
```',
    ),
    'ListInstanceSpecs' => 
    array (
      'summary' => '获取集群可选择的规格列表。',
      'path' => '/openapi/ha3/instances/{instanceId}/specs',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
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
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'ha-cn-pl32rf0****',
          ),
        ),
        1 => 
        array (
          'name' => 'type',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '节点类型 (qrs: 查询节点, search: 数据节点, index: 索引节点, cluster: 集群)',
            'description' => '节点类型。取值：

- qrs：查询节点。
- search：数据节点。
- index：索引节点。
- cluster：集群。',
            'type' => 'string',
            'required' => true,
            'example' => 'search',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'title' => 'id of request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '10D5E615-69F7-5F49-B850-00169ADE513C',
              ),
              'result' => 
              array (
                'title' => 'List',
                'description' => '实例规格列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '实例规格列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'cpu' => 
                    array (
                      'title' => '单位：核数',
                      'description' => '核数。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'mem' => 
                    array (
                      'title' => '单位G',
                      'description' => '内存，单位：G。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '16',
                    ),
                    'minDisk' => 
                    array (
                      'title' => '单数据节点存储空间最小值',
                      'description' => '单数据节点存储空间最小值，单位：G。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '100',
                    ),
                    'maxDisk' => 
                    array (
                      'title' => '单数据节点存储空间最大值',
                      'description' => '单数据节点存储空间最大值，单位：G。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '600',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        500 => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"10D5E615-69F7-5F49-B850-00169ADE513C\\",\\n  \\"result\\": [\\n    {\\n      \\"cpu\\": 1,\\n      \\"mem\\": 16,\\n      \\"minDisk\\": 100,\\n      \\"maxDisk\\": 600\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '获取集群可选择的规格列表',
      'description' => '### 方法
`GET`
### URI
`/openapi/ha3/instances/{instanceId}/specs?type=qrs`
',
      'requestParamsDescription' => '### 请求示例
`GET /openapi/ha3/instances/ha3_instance_name/specs`',
      'responseParamsDescription' => '### 返回示例

```
{
  "requestId": "e1eef569-1ff7-4bf8-acf7-1cecca9894ce",
  "result": [
    {
      "cpu": 1
      "mem": 2,
      "disk": 100
    },
    {
      "cpu": 2
      "mem": 4,
      "disk": 100      
    }    
  ]
}
```',
    ),
    'GetIndexOnlineStrategy' => 
    array (
      'summary' => '获取索引在线生效策略。',
      'path' => '/openapi/ha3/instances/{instanceId}/data-sources/{dataSourceName}/deploys/{deployName}/indexes/{indexName}/online-strategy',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
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
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例id',
            'type' => 'string',
            'required' => true,
            'example' => 'ha-cn-pl32rf0****',
          ),
        ),
        1 => 
        array (
          'name' => 'dataSourceName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '数据源名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'ha-cn-pl32rf0****_api_test',
          ),
        ),
        2 => 
        array (
          'name' => 'deployName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '机房',
            'type' => 'string',
            'required' => true,
            'example' => 'vpc_hz_domain_1',
          ),
        ),
        3 => 
        array (
          'name' => 'indexName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '索引名称',
            'type' => 'string',
            'required' => true,
            'example' => 'test_api',
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
              'requestId' => 
              array (
                'title' => 'id of request',
                'description' => 'id of request',
                'type' => 'string',
                'example' => 'FE03180A-0E29-5474-8A86-33F0683294A4',
              ),
              'result' => 
              array (
                'title' => 'IndexOnlineStrategy',
                'description' => 'Object',
                'type' => 'object',
                'properties' => 
                array (
                  'changeRate' => 
                  array (
                    'title' => '索引变化率',
                    'description' => '索引变化率',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '20',
                  ),
                ),
              ),
            ),
          ),
        ),
        500 => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"FE03180A-0E29-5474-8A86-33F0683294A4\\",\\n  \\"result\\": {\\n    \\"changeRate\\": 20\\n  }\\n}","type":"json"}]',
      'title' => '获取某一索引在线策略',
    ),
    'ModifyIndexOnlineStrategy' => 
    array (
      'summary' => '修改索引在线策略。',
      'path' => '/openapi/ha3/instances/{instanceId}/data-sources/{dataSourceName}/deploys/{deployName}/indexes/{indexName}/online-strategy',
      'methods' => 
      array (
        0 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
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
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例id',
            'type' => 'string',
            'required' => true,
            'example' => 'ha-cn-pl32rf0****',
          ),
        ),
        1 => 
        array (
          'name' => 'dataSourceName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '数据源名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'ha-cn-pl32rf0****_api_test',
          ),
        ),
        2 => 
        array (
          'name' => 'deployName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '机房',
            'type' => 'string',
            'required' => true,
            'example' => 'vpc_hz_domain_1',
          ),
        ),
        3 => 
        array (
          'name' => 'indexName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '索引名称',
            'type' => 'string',
            'required' => true,
            'example' => 'test_tusou_v2',
          ),
        ),
        4 => 
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
              'changeRate' => 
              array (
                'title' => '索引变化率',
                'description' => '索引变化率',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '20',
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
          'headers' => 
          array (
          ),
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'title' => 'id of request',
                'description' => 'id of request',
                'type' => 'string',
                'example' => '10D5E615-69F7-5F49-B850-00169ADE513C',
              ),
              'result' => 
              array (
                'title' => 'Map',
                'description' => 'Map',
                'type' => 'object',
                'example' => '{}',
              ),
            ),
          ),
        ),
        500 => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"10D5E615-69F7-5F49-B850-00169ADE513C\\",\\n  \\"result\\": {}\\n}","type":"json"}]',
      'title' => '修改某一索引在线策略',
    ),
    'ModifyOnlineConfig' => 
    array (
      'path' => '/openapi/ha3/instances/{instanceId}/node/{nodeName}/online-configs/{indexName}',
      'methods' => 
      array (
        0 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
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
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '边缘实例id。',
            'type' => 'string',
            'required' => true,
            'example' => 'ha-cn-pl32rf0****',
          ),
        ),
        1 => 
        array (
          'name' => 'nodeName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '节点名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'general',
          ),
        ),
        2 => 
        array (
          'name' => 'indexName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '索引名称',
            'type' => 'string',
            'required' => true,
            'example' => 'test_api',
          ),
        ),
        3 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体',
            'type' => 'object',
            'required' => false,
            'additionalProperties' => 
            array (
              'type' => 'string',
              'description' => 'body参数。',
              'example' => '{}',
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
              'requestId' => 
              array (
                'title' => 'id of request',
                'description' => 'id of request',
                'type' => 'string',
                'example' => '2AE63638-5420-56DC-BF59-37D8174039A0',
              ),
              'result' => 
              array (
                'title' => 'Map',
                'description' => 'Map',
                'type' => 'object',
                'example' => '{}',
              ),
            ),
          ),
        ),
        500 => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"2AE63638-5420-56DC-BF59-37D8174039A0\\",\\n  \\"result\\": {}\\n}","type":"json"}]',
      'title' => '修改在线表配置',
      'summary' => '修改在线表配置。',
      'description' => '### 方法

```java
put
```

### URI

```java
/openapi/ha3/instances/{instanceId}/node/{nodeName}/online-configs/{indexName}
```',
      'requestParamsDescription' => '### 请求示例

﻿

```java
PUT  /openapi/ha3/instances/ha-test1/node/ihome_searcher/online-configs
```

﻿

```java
{
﻿
  "content": "xxxx",
﻿
  "suezAdminName": "xxxx"
﻿
}
```',
      'responseParamsDescription' => '### 请求示例

﻿

```java
PUT  /openapi/ha3/instances/ha-test1/node/ihome_searcher/online-configs
```

﻿

```java
{
﻿
  "content": "xxxx",
﻿
  "suezAdminName": "xxxx"
﻿
}
```
详情可参考[响应结构](~~465311~~)',
    ),
    'ListOnlineConfigs' => 
    array (
      'path' => '/openapi/ha3/instances/{instanceId}/node/{nodeName}/online-configs',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
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
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例id',
            'type' => 'string',
            'required' => true,
            'example' => 'ha-cn-pl32rf0****',
          ),
        ),
        1 => 
        array (
          'name' => 'nodeName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '节点名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'ha-cn-pl32rf0****_qrs',
          ),
        ),
        2 => 
        array (
          'name' => 'domain',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名',
            'type' => 'string',
            'required' => true,
            'example' => 'sz_vpc_domain_1',
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
                'title' => 'id of request',
                'description' => 'id of request',
                'type' => 'string',
                'example' => 'E45380E8-994A-5402-9806-F114B3295FCF',
              ),
              'result' => 
              array (
                'title' => 'List',
                'description' => 'List',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '配置结果列表',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'indexName' => 
                    array (
                      'description' => '索引名称',
                      'type' => 'string',
                      'example' => 'generation',
                    ),
                    'config' => 
                    array (
                      'description' => '配置信息',
                      'type' => 'string',
                      'example' => '{\\"specItems\\":[{\\"specKey\\":\\"YQ_KEYWORD_NUMBER_PLUS\\",\\"value\\":\\"1\\"}]}',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        500 => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"E45380E8-994A-5402-9806-F114B3295FCF\\",\\n  \\"result\\": [\\n    {\\n      \\"indexName\\": \\"generation\\",\\n      \\"config\\": \\"{\\\\\\\\\\\\\\"specItems\\\\\\\\\\\\\\":[{\\\\\\\\\\\\\\"specKey\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"YQ_KEYWORD_NUMBER_PLUS\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"value\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"1\\\\\\\\\\\\\\"}]}\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '获取在线表配置的详情',
      'summary' => '获取在线表配置的详情。',
      'description' => '### 方法

```java
GET
```

### URI

```java
/openapi/ha3/instances/{instanceId}/node/{nodeName}/online-configs?domain={domain}',
      'requestParamsDescription' => '###请求示例
```java
GET  /openapi/ha3/instances/ha-test1/node/ihome_searcher/online-configs?domain=pre_ea120
```
',
      'responseParamsDescription' => '### 返回示例

正确返回
﻿
```java
{
﻿
  "requestId": "e1eef569-1ff7-4bf8-acf7-1cecca9894ce",
﻿
  "result": [
﻿
      {
﻿
          "indexName": "nm_algo_dense_weights",
﻿
          "config": "{\\"realtime\\":false,\\"cluster_config\\":{\\"table_name\\":\\"nm_algo_dense_weights\\"},\\"online_index_config\\":{\\"online_keep_version_count\\":3,\\"build_config\\":{\\"build_total_memory\\":1024},\\"max_realtime_memory_use\\":1024,\\"load_config\\":[{\\"file_patterns\\":[\\".*\\"],\\"load_strategy\\":\\"mmap\\",\\"load_strategy_param\\":{\\"slice\\":409600,\\"lock\\":true,\\"interval\\":2}},{\\"file_patterns\\":[\\".*\\"],\\"load_strategy\\":\\"mmap\\",\\"load_strategy_param\\":{\\"slice\\":409600,\\"lock\\":true,\\"interval\\":2}},{\\"file_patterns\\":[\\"/summary/data\\"],\\"load_strategy\\":\\"cache\\",\\"load_strategy_param\\":{\\"direct_io\\":true,\\"cache_size\\":512}},{\\"warmup_strategy\\":\\"none\\",\\"file_patterns\\":[\\".*\\"],\\"load_strategy\\":\\"mmap\\",\\"load_strategy_param\\":{\\"lock\\":false}}]},\\"build_option_config\\":{\\"async_queue_size\\":1000,\\"max_recover_time\\":10,\\"async_build\\":true}}"
﻿
      },
﻿
      {
﻿
          "indexName": "search4_mj_mos_item_index",
﻿
          "config": "{\\"realtime\\":true,\\"cluster_config\\":{\\"table_name\\":\\"search4_mj_mos_item_index\\"},\\"online_index_config\\":{\\"online_keep_version_count\\":3,\\"build_config\\":{\\"build_total_memory\\":4096},\\"max_realtime_memory_use\\":8192,\\"load_config\\":[{\\"warmup_strategy\\":\\"sequential\\",\\"file_patterns\\":[\\"_INDEX_\\"],\\"load_strategy\\":\\"mmap\\",\\"name\\":\\"_INDEX_\\",\\"load_strategy_param\\":{\\"lock\\":true}},{\\"warmup_strategy\\":\\"none\\",\\"file_patterns\\":[\\"_SUMMARY_\\"],\\"load_strategy\\":\\"mmap\\",\\"name\\":\\"_SUMMARY_\\",\\"load_strategy_param\\":{\\"lock\\":true}},{\\"warmup_strategy\\":\\"sequential\\",\\"file_patterns\\":[\\"_ATTRIBUTE_\\"],\\"load_strategy\\":\\"mmap\\",\\"name\\":\\"_ATTRIBUTE_\\",\\"load_strategy_param\\":{\\"lock\\":true}}],\\"speedup_primary_key_reader\\":true},\\"build_option_config\\":{\\"async_queue_size\\":10000,\\"max_recover_time\\":10,\\"async_build\\":true}}"
﻿
      },
﻿
      {
﻿
          "indexName": "nm_algo_search_retrieval_item_index",
﻿
          "config": "{\\"realtime\\":true,\\"cluster_config\\":{\\"table_name\\":\\"nm_algo_search_retrieval_item_index\\"},\\"online_index_config\\":{\\"online_keep_version_count\\":3,\\"build_config\\":{\\"build_total_memory\\":4096},\\"max_realtime_memory_use\\":8192,\\"load_config\\":[{\\"warmup_strategy\\":\\"sequential\\",\\"file_patterns\\":[\\"_INDEX_\\"],\\"load_strategy\\":\\"mmap\\",\\"name\\":\\"_INDEX_\\",\\"load_strategy_param\\":{\\"lock\\":true}},{\\"warmup_strategy\\":\\"none\\",\\"file_patterns\\":[\\"_SUMMARY_\\"],\\"load_strategy\\":\\"mmap\\",\\"name\\":\\"_SUMMARY_\\",\\"load_strategy_param\\":{\\"lock\\":true}},{\\"warmup_strategy\\":\\"sequential\\",\\"file_patterns\\":[\\"_ATTRIBUTE_\\"],\\"load_strategy\\":\\"mmap\\",\\"name\\":\\"_ATTRIBUTE_\\",\\"load_strategy_param\\":{\\"lock\\":true}}],\\"speedup_primary_key_reader\\":true},\\"build_option_config\\":{\\"async_queue_size\\":10000,\\"max_recover_time\\":10,\\"async_build\\":true}}"
﻿
      }    
﻿
  ]
﻿
}
```
',
    ),
    'ModifyIndex' => 
    array (
      'path' => '/openapi/ha3/instances/{instanceId}/indexes/{indexName}',
      'methods' => 
      array (
        0 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
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
        'abilityTreeCode' => '186780',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREopensearchVHEWK3',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID',
            'type' => 'string',
            'required' => true,
            'example' => 'ha-cn-pl32rf0****',
          ),
        ),
        1 => 
        array (
          'name' => 'indexName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '索引名称',
            'type' => 'string',
            'required' => true,
            'example' => 'test_api',
          ),
        ),
        2 => 
        array (
          'name' => 'dryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否校验入参数据合法性，默认false。

取值：

- **true**：只校验参数合法性。

- **false**：校验参数合法性，创建归因配置。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
            'default' => 'false',
          ),
        ),
        3 => 
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
              'dataSourceInfo' => 
              array (
                'description' => '数据源相关信息 （向量检索版新版本必填）',
                'type' => 'object',
                'properties' => 
                array (
                  'buildMode' => 
                  array (
                    'title' => '索引重建方式 (api: API方式推送数据源, indexRecover: 从索引中恢复数据源)',
                    'description' => '索引重建方式 (api: API方式推送数据源, indexRecover: 从索引中恢复数据源)',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'api',
                  ),
                  'generation' => 
                  array (
                    'title' => '从索引中恢复数据源，dump表的generation',
                    'description' => '从索引中恢复数据源，dump表的generation',
                    'type' => 'integer',
                    'format' => 'int64',
                    'required' => false,
                    'example' => '1718698593',
                  ),
                  'dataTimeSec' => 
                  array (
                    'title' => '追增量时间戳',
                    'description' => '追增量时间戳',
                    'type' => 'integer',
                    'format' => 'int32',
                    'required' => false,
                    'example' => '1709715164',
                  ),
                  'processPartitionCount' => 
                  array (
                    'title' => '数据更新资源数',
                    'description' => '数据更新资源数',
                    'type' => 'integer',
                    'format' => 'int32',
                    'required' => false,
                    'example' => '4',
                  ),
                  'name' => 
                  array (
                    'title' => '数据源名',
                    'description' => '数据源名',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'ha-cn-pl32rf0****_index_1',
                  ),
                  'type' => 
                  array (
                    'title' => '数据源类型 (odps, swift, saro, oss, unKnow)',
                    'description' => '数据源类型 (odps, swift, saro, oss, unKnow)',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'odps',
                  ),
                  'domain' => 
                  array (
                    'title' => '离线部署',
                    'description' => '离线部署',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'vpc_hz_domain_1
',
                  ),
                  'config' => 
                  array (
                    'title' => 'odps 数据源配置',
                    'description' => 'odps 数据源配置',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'endpoint' => 
                      array (
                        'title' => 'odps相关',
                        'description' => 'odps相关',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'http://service.cn-hangzhou.maxcompute.aliyun-inc.com/api',
                      ),
                      'accessKey' => 
                      array (
                        'description' => 'odps数据源ak',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'L***p',
                      ),
                      'accessSecret' => 
                      array (
                        'description' => 'odps数据源ak secret',
                        'type' => 'string',
                        'required' => false,
                        'example' => '5**9a6',
                      ),
                      'project' => 
                      array (
                        'description' => 'odps数据源项目名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'bbt_algo_pai',
                      ),
                      'partition' => 
                      array (
                        'description' => 'ODPS Partition。例如：ds=20180102。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ds=20230114',
                      ),
                      'table' => 
                      array (
                        'title' => 'saro、odps相关',
                        'description' => 'saro、odps相关',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'item',
                      ),
                      'namespace' => 
                      array (
                        'title' => 'saro相关',
                        'description' => 'saro相关',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test-namespace',
                      ),
                      'path' => 
                      array (
                        'title' => 'hdfs相关',
                        'description' => 'hdfs相关',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test-hdfs-path',
                      ),
                      'ossPath' => 
                      array (
                        'title' => 'oss数据源相关',
                        'description' => 'oss数据源相关',
                        'type' => 'string',
                        'required' => false,
                        'example' => '/opensearch/oss.json',
                      ),
                      'bucket' => 
                      array (
                        'description' => 'OSS存储空间。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test-bucket',
                      ),
                    ),
                    'required' => false,
                  ),
                  'saroConfig' => 
                  array (
                    'title' => 'saro数据源配置',
                    'description' => 'saro数据源配置',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'namespace' => 
                      array (
                        'description' => 'saro数据源的namespace',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'flink-test-fjx-default',
                      ),
                      'tableName' => 
                      array (
                        'description' => 'saro数据表名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'device_event_shy_summary_',
                      ),
                    ),
                    'required' => false,
                  ),
                  'autoBuildIndex' => 
                  array (
                    'title' => '是否开启自动全量',
                    'description' => '是否开启自动全量',
                    'type' => 'boolean',
                    'required' => false,
                    'example' => 'true',
                  ),
                  'processParallelNum' => 
                  array (
                    'description' => '全量process并发数',
                    'type' => 'integer',
                    'format' => 'int32',
                    'required' => false,
                    'example' => '2',
                  ),
                ),
                'required' => false,
              ),
              'description' => 
              array (
                'description' => '描述信息。',
                'type' => 'string',
                'required' => false,
                'example' => '"测试"',
              ),
              'content' => 
              array (
                'title' => '文件内容',
                'description' => '文件内容',
                'type' => 'string',
                'required' => false,
                'example' => '{\\"summarys\\":{\\"summary_fields\\":[\\"id\\"]},\\"indexs\\":[{\\"index_name\\":\\"index_id\\",\\"index_type\\":\\"PRIMARYKEY64\\",\\"index_fields\\":\\"id\\",\\"has_primary_key_attribute\\":true,\\"is_primary_key_sorted\\":false}],\\"attributes\\":[\\"id\\"],\\"fields\\":[{\\"field_name\\":\\"id\\",\\"field_type\\":\\"UINT16\\"}],\\"table_name\\":\\"index_2\\"}',
              ),
              'partition' => 
              array (
                'title' => '数据分片',
                'description' => '数据分片',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '2',
              ),
              'dataSource' => 
              array (
                'title' => '数据源',
                'description' => '数据源',
                'type' => 'string',
                'required' => false,
                'example' => 'ha-cn-pl32rf0****_index_1',
              ),
              'domain' => 
              array (
                'title' => '数据源部署',
                'description' => '数据源部署',
                'type' => 'string',
                'required' => false,
                'example' => 'vpc_hz_domain_1',
              ),
              'buildParallelNum' => 
              array (
                'description' => '全量build并发数',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '2',
              ),
              'mergeParallelNum' => 
              array (
                'description' => '全量merge并发数',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '2',
              ),
              'cluster' => 
              array (
                'description' => '集群信息',
                'type' => 'object',
                'required' => false,
                'additionalProperties' => 
                array (
                  'type' => 'object',
                  'additionalProperties' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'value' => 
                      array (
                        'type' => 'string',
                        'description' => '变量',
                        'example' => 'partition',
                      ),
                      'description' => 
                      array (
                        'type' => 'string',
                        'description' => '描述信息',
                        'example' => '自定义变量',
                      ),
                      'disableModify' => 
                      array (
                        'type' => 'boolean',
                        'example' => 'true',
                        'description' => '是否可被用户修改',
                      ),
                      'isModify' => 
                      array (
                        'type' => 'boolean',
                        'example' => 'false',
                        'description' => '是否被修改过',
                      ),
                      'type' => 
                      array (
                        'type' => 'string',
                        'example' => 'NORMAL',
                        'description' => '普通变量：NORMAL， function变量：FUNCTION',
                      ),
                    ),
                    'description' => 'cluster.json更新内容',
                  ),
                  'description' => '集群信息',
                ),
              ),
              'clusterConfigName' => 
              array (
                'description' => 'cluster.json文件名',
                'type' => 'string',
                'required' => false,
                'example' => 'ha-cn-pl32rf0****@a-cn-pl32rf0****_test_api@hz_pre_vpc_domain_1@test_api@index_config_v1',
              ),
              'config' => 
              array (
                'description' => '离线配置信息',
                'type' => 'object',
                'required' => false,
                'additionalProperties' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'desc' => 
                    array (
                      'type' => 'string',
                      'required' => false,
                      'example' => '测试',
                      'description' => '备注',
                    ),
                    'files' => 
                    array (
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'operateType' => 
                          array (
                            'type' => 'string',
                            'required' => false,
                            'example' => 'UPDATE',
                            'description' => '操作类型：UPDATE:更新；DELETE:删除；默认UPDATE',
                          ),
                          'parentFullPath' => 
                          array (
                            'type' => 'string',
                            'required' => false,
                            'example' => '/',
                            'description' => '上级目录的路径',
                          ),
                          'fileName' => 
                          array (
                            'type' => 'string',
                            'required' => false,
                            'description' => '文件名称',
                            'example' => '/intervene_dict/中文-通用分析器.dict',
                          ),
                          'config' => 
                          array (
                            'type' => 'object',
                            'properties' => 
                            array (
                              'content' => 
                              array (
                                'type' => 'string',
                                'required' => false,
                                'example' => '$dictContent',
                                'description' => '文件内容--词典配置',
                              ),
                              'variables' => 
                              array (
                                'type' => 'object',
                                'required' => false,
                                'additionalProperties' => 
                                array (
                                  'type' => 'object',
                                  'properties' => 
                                  array (
                                    'description' => 
                                    array (
                                      'type' => 'string',
                                      'required' => false,
                                      'example' => '测试',
                                      'description' => '描述',
                                    ),
                                    'disableModify' => 
                                    array (
                                      'type' => 'boolean',
                                      'required' => false,
                                      'description' => '是否可被用户修改',
                                      'example' => 'true',
                                    ),
                                    'isModify' => 
                                    array (
                                      'type' => 'boolean',
                                      'required' => false,
                                      'example' => 'false',
                                      'description' => '是否被修改过',
                                    ),
                                    'type' => 
                                    array (
                                      'type' => 'string',
                                      'required' => false,
                                      'example' => 'NORMAL',
                                      'description' => '普通变量：NORMAL， function变量：FUNCTION',
                                    ),
                                    'value' => 
                                    array (
                                      'type' => 'string',
                                      'required' => false,
                                      'example' => 'test',
                                      'description' => '变量',
                                    ),
                                  ),
                                  'description' => '变量信息',
                                ),
                                'description' => '变量',
                              ),
                            ),
                            'required' => false,
                            'description' => '本次更新的配置',
                          ),
                          'dirName' => 
                          array (
                            'type' => 'string',
                            'required' => false,
                            'description' => '目录名称',
                            'example' => '/test',
                          ),
                        ),
                        'required' => false,
                      ),
                      'required' => false,
                      'description' => '修改的文件列表',
                    ),
                  ),
                  'description' => '离线配置',
                ),
              ),
              'pushMode' => 
              array (
                'description' => '推送配置方式: 默认仅推送配置',
                'type' => 'string',
                'required' => false,
                'example' => 'PUSH_ONLY',
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
                'title' => 'id of request',
                'description' => 'id of request',
                'type' => 'string',
                'example' => '93A9E542-8CF8-5BA6-99AB-94C0FE520429',
              ),
              'result' => 
              array (
                'title' => 'Object',
                'description' => 'Object',
                'type' => 'any',
                'example' => '{}',
              ),
            ),
          ),
        ),
        500 => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"93A9E542-8CF8-5BA6-99AB-94C0FE520429\\",\\n  \\"result\\": \\"{}\\"\\n}","type":"json"}]',
      'title' => '修改索引',
    ),
    'StartIndex' => 
    array (
      'path' => '/openapi/ha3/instances/{instanceId}/indexes/{indexName}/startIndex',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'abilityTreeCode' => '187010',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREopensearchJ3PXKB',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID',
            'type' => 'string',
            'required' => true,
            'example' => 'ha-cn-pl32rf0****',
          ),
        ),
        1 => 
        array (
          'name' => 'indexName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '索引名称',
            'type' => 'string',
            'required' => true,
            'example' => 'test_api',
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
                'title' => 'id of request',
                'description' => 'id of request',
                'type' => 'string',
                'example' => 'D39EE0F1-D7EF-5F46-B781-6BF4185308B0',
              ),
              'result' => 
              array (
                'title' => 'Map',
                'description' => 'Map',
                'type' => 'object',
                'example' => '{}',
              ),
            ),
          ),
        ),
        500 => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"D39EE0F1-D7EF-5F46-B781-6BF4185308B0\\",\\n  \\"result\\": {}\\n}","type":"json"}]',
      'title' => '恢复使用索引',
    ),
    'StopIndex' => 
    array (
      'path' => '/openapi/ha3/instances/{instanceId}/indexes/{indexName}/stopIndex',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'abilityTreeCode' => '187011',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREopensearchJ3PXKB',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID',
            'type' => 'string',
            'required' => true,
            'example' => 'ha-cn-pl32rf0****',
          ),
        ),
        1 => 
        array (
          'name' => 'indexName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '索引名称',
            'type' => 'string',
            'required' => true,
            'example' => 'test_api',
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
                'title' => 'id of request',
                'description' => 'id of request',
                'type' => 'string',
                'example' => 'E7B7D598-B080-5C8E-AA35-D43EC0D5F886',
              ),
              'result' => 
              array (
                'title' => 'Map',
                'description' => 'Map',
                'type' => 'object',
                'example' => '{}',
              ),
            ),
          ),
        ),
        500 => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"E7B7D598-B080-5C8E-AA35-D43EC0D5F886\\",\\n  \\"result\\": {}\\n}","type":"json"}]',
      'title' => '停止使用索引',
    ),
    'CreateIndex' => 
    array (
      'summary' => '创建索引信息。',
      'path' => '/openapi/ha3/instances/{instanceId}/indexes',
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
        'abilityTreeCode' => '104691',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREopensearchVHEWK3',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'ha-cn-2r42ppr****',
          ),
        ),
        1 => 
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
              'name' => 
              array (
                'title' => '名称',
                'description' => '索引名称。',
                'type' => 'string',
                'required' => false,
                'example' => 'index_1',
              ),
              'dataSource' => 
              array (
                'title' => '数据源',
                'description' => '数据源名称。',
                'type' => 'string',
                'required' => false,
                'example' => 'ha-cn-35t3n1y****_index_1',
              ),
              'domain' => 
              array (
                'title' => '数据源的部署',
                'description' => '数据源机房。',
                'type' => 'string',
                'required' => false,
                'example' => 'vpc_hz_domain_1',
              ),
              'content' => 
              array (
                'title' => '文件内容',
                'description' => '索引结构。',
                'type' => 'string',
                'required' => false,
                'example' => '{\\"summarys\\":{\\"summary_fields\\":[\\"id\\"]},\\"indexs\\":[{\\"index_name\\":\\"index_id\\",\\"index_type\\":\\"PRIMARYKEY64\\",\\"index_fields\\":\\"id\\",\\"has_primary_key_attribute\\":true,\\"is_primary_key_sorted\\":false}],\\"attributes\\":[\\"id\\"],\\"fields\\":[{\\"field_name\\":\\"id\\",\\"field_type\\":\\"UINT16\\"}],\\"table_name\\":\\"index_2\\"}',
              ),
              'partition' => 
              array (
                'title' => '数据分片',
                'description' => '数据分片数。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '2',
              ),
              'dataSourceInfo' => 
              array (
                'description' => '数据源相关信息 （向量检索版新版本必填）。',
                'type' => 'object',
                'properties' => 
                array (
                  'dataTimeSec' => 
                  array (
                    'description' => '追增量时间戳。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'required' => false,
                    'example' => '1709715164',
                  ),
                  'processPartitionCount' => 
                  array (
                    'description' => '数据更新资源数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'required' => false,
                    'example' => '4',
                  ),
                  'name' => 
                  array (
                    'description' => '数据源名称。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'ha-cn-35t3n1y****_index_1',
                  ),
                  'type' => 
                  array (
                    'description' => '数据源类型。取值：

- odps
- swift
- saro
- oss',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'odps',
                  ),
                  'domain' => 
                  array (
                    'description' => '离线机房。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'vpc_hz_domain_1
',
                  ),
                  'config' => 
                  array (
                    'description' => 'odps相关。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'endpoint' => 
                      array (
                        'description' => 'odps数据源的Endpoint, oss数据源的Endpoint。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'https://oss-cn-hangzhou.aliyuncs.com',
                      ),
                      'accessKey' => 
                      array (
                        'description' => 'odps数据源AK。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'L***p',
                      ),
                      'accessSecret' => 
                      array (
                        'description' => 'odps数据源AK Secret。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '5**9a6',
                      ),
                      'project' => 
                      array (
                        'description' => 'odps数据源项目名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'bbt_algo_pai',
                      ),
                      'partition' => 
                      array (
                        'description' => '数据源为odps时必填。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ds=20230114',
                      ),
                      'table' => 
                      array (
                        'description' => '表名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'bbt_rec_swing_u2i2i_score_be_v1',
                      ),
                      'namespace' => 
                      array (
                        'description' => '命名空间。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test-namespace',
                      ),
                      'path' => 
                      array (
                        'description' => 'hdfs数据源路径。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test-hdfs-path',
                      ),
                      'ossPath' => 
                      array (
                        'description' => 'oss文件路径。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '/opensearch/oss.json',
                      ),
                      'bucket' => 
                      array (
                        'description' => 'oss bucket。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test-bucket',
                      ),
                    ),
                    'required' => false,
                  ),
                  'saroConfig' => 
                  array (
                    'description' => 'saro数据源配置。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'namespace' => 
                      array (
                        'description' => 'saro数据源的namespace。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '目前仅在内网支持',
                      ),
                      'tableName' => 
                      array (
                        'description' => 'saro数据表名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '目前仅在内网支持',
                      ),
                    ),
                    'required' => false,
                  ),
                  'autoBuildIndex' => 
                  array (
                    'description' => '是否开启自动全量。',
                    'type' => 'boolean',
                    'required' => false,
                    'example' => 'true',
                  ),
                  'processParallelNum' => 
                  array (
                    'description' => '全量process并发数',
                    'type' => 'integer',
                    'format' => 'int32',
                    'required' => false,
                    'example' => '2',
                  ),
                ),
                'required' => false,
              ),
              'extend' => 
              array (
                'description' => '字段配置的扩展内容。key: 向量字段(vector)、需embeding字段（embeding）。',
                'type' => 'object',
                'required' => false,
                'example' => '{
        "vector":
        [
            "source_image_vector"
        ],
        "embeding":
        [
            "source_image"
        ],
        "description":
        []
    }',
              ),
              'buildParallelNum' => 
              array (
                'description' => '全量build并发数',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '2',
              ),
              'mergeParallelNum' => 
              array (
                'description' => '全量merge并发数',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '2',
              ),
            ),
            'required' => false,
            'example' => '{}',
          ),
        ),
        2 => 
        array (
          'name' => 'dryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否dryRun创建（仅校验数据源是否合法）。取值：

- true：是。
- false：否。',
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'title' => 'id of request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '407BFD91-DE7D-50BA-8F88-CDE52A3B5E46',
              ),
              'result' => 
              array (
                'title' => 'Map',
                'description' => '返回结果。',
                'type' => 'object',
                'example' => '{}',
              ),
            ),
          ),
        ),
        500 => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"407BFD91-DE7D-50BA-8F88-CDE52A3B5E46\\",\\n  \\"result\\": {}\\n}","type":"json"}]',
      'title' => '创建索引信息',
      'description' => '### 方法

```java
POST
```

### URI

```java
/openapi/ha3/instances/{instanceId}/indexes
```',
      'requestParamsDescription' => '### 请求示例

```java
POST /openapi/ha3/instances/ose-test1/indexes
```


```java
{
    "name": "index_1",
    "dataSource": "ha-cn-3********0d_index_1",
    "content": "",
    "extend":
    {
        "vector":
        [
            "source_image_vector"
        ],
        "embeding":
        [
            "source_image"
        ],
        "description":
        []
    },
    "partition": 1,
    "dataSourceInfo":
    {
        "type": "odps",
        "processPartitionCount": 2,
        "autoBuildIndex": true,
        "config":
        {
            "endpoint": "http://service.cn-hangzhou.maxcompute.aliyun.com/api",
            "project": "odps_project",
            "accessKey": "ak",
            "accessSecret": "as",
            "table": "odps_table",
            "partition": "ds=*******"
        },
        "saroConfig":
        {},
        "dataTimeSec": 1709715164
    }
}
```',
      'responseParamsDescription' => '### 返回示例

正确返回

```java
{
  "requestId": "0A6EB64B-B4C8-CF02-810F-E660812972FF",
  "result": {}
}
```
详情可参考[响应结构](~~465311~~)',
    ),
    'BuildIndex' => 
    array (
      'summary' => '触发索引重建。',
      'path' => '/openapi/ha3/instances/{instanceId}/actions/build-index',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '实例ID',
            'description' => '实例ID',
            'type' => 'string',
            'required' => true,
            'example' => 'ha-cn-pl32rf0****',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '一个JSON格式的字符串，完整JSON字符串信息，具体内容参见以下详细信息。',
            'type' => 'object',
            'properties' => 
            array (
              'dataSourceName' => 
              array (
                'title' => '数据源名',
                'description' => '数据源名称',
                'type' => 'string',
                'required' => false,
                'example' => 'ha-cn-pl32rf0****_test_api',
              ),
              'domain' => 
              array (
                'title' => '数据源部署',
                'description' => '数据源机房',
                'type' => 'string',
                'required' => false,
                'example' => 'sz_vpc_domain_1',
              ),
              'dataSourceType' => 
              array (
                'title' => '数据源类型 (odps: maxComputer, swift: swift, unKnow)',
                'description' => '数据源类型',
                'type' => 'string',
                'required' => false,
                'example' => 'odps',
              ),
              'partition' => 
              array (
                'title' => '数据源的可用分区',
                'description' => '数据源为odps时必填',
                'type' => 'string',
                'required' => false,
                'example' => 'ds=20201010',
              ),
              'dataTimeSec' => 
              array (
                'title' => 'API推送数据源的数据时间',
                'description' => 'int类型，秒级时间戳，数据源为API推送时必填',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '1640867288',
              ),
              'buildMode' => 
              array (
                'title' => '索引重建方式 (API: API方式推送数据源, RECOVER_INDEX: 从索引中恢复数据源)',
                'description' => '重建index方式: api、indexRecover',
                'type' => 'string',
                'required' => false,
                'example' => 'api',
              ),
              'generation' => 
              array (
                'title' => '从索引中恢复数据源，dump表的generation',
                'description' => '历史回流ID',
                'type' => 'integer',
                'format' => 'int64',
                'required' => false,
                'example' => '160131146',
              ),
            ),
            'required' => false,
            'example' => '{}',
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
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'title' => 'id of request',
                'description' => '请求ID',
                'type' => 'string',
                'example' => '407BFD91-DE7D-50BA-8F88-CDE52A3B5E46',
              ),
              'result' => 
              array (
                'title' => '集群列表',
                'description' => '集群列表',
                'type' => 'object',
                'example' => '{}',
              ),
            ),
          ),
        ),
        500 => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"407BFD91-DE7D-50BA-8F88-CDE52A3B5E46\\",\\n  \\"result\\": {}\\n}","type":"json"}]',
      'title' => '触发索引重建',
      'description' => '## 方法

```
POST
```

## URI

```
/openapi/ha3/instances/{instanceId}/actions/build-index
```
',
      'requestParamsDescription' => '

## 请求示例

﻿

```
POST /openapi/ha3/instances/ha3_instance_name/actions/build-index
﻿
```

​
﻿
 

```
 {
﻿
    "dataSourceName": "my_data_source",
﻿
    "domain": "test", //数据源部署
﻿
    "indexes": [
﻿
      "index1",
﻿
      "index2"
﻿
    ],
﻿
    "dataSourceType": "odps", //odps 或swift，必填
﻿
    "partition": "20201010", //数据源为odps时必填
﻿
    "dataTimeSec": 1640867288 //int类型，秒级时间戳，数据源为api推送时必填
﻿
  }
```

﻿
​
﻿
​
﻿
  

```
{
﻿
    "dataSourceName": "my_data_source",
﻿
    "domain": "test", //数据源部署
﻿
    "indexes": [
﻿
      "index1",
﻿
      "index2"
﻿
    ],
﻿
    "dataSourceType": "swift", //odps 或swift，必填
﻿
    "partition": "20201010", //数据源为odps时必填
﻿
    "dataTimeSec": 1640867288 //int类型，秒级时间戳，数据源为api推送时必填
﻿
  }
```

﻿
​



',
      'responseParamsDescription' => '## 返回示例

正确返回
﻿

```
{
﻿
  "requestId": "0A6EB64B-B4C8-CF02-810F-E660812972FF",
﻿
  "result": []
﻿
}
```

详情可参考[响应结构](~~464322~~)',
    ),
    'DeleteIndexVersion' => 
    array (
      'summary' => '删除索引的版本。',
      'path' => '/openapi/ha3/instances/{instanceId}/indexes/{indexName}/versions/{versionName}',
      'methods' => 
      array (
        0 => 'delete',
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
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '实例ID',
            'description' => '实例ID',
            'type' => 'string',
            'required' => true,
            'example' => 'ha-cn-pl32rf0****',
          ),
        ),
        1 => 
        array (
          'name' => 'indexName',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '索引名称',
            'description' => '索引名称',
            'type' => 'string',
            'required' => true,
            'example' => 'test_api',
          ),
        ),
        2 => 
        array (
          'name' => 'versionName',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '版本名称',
            'description' => '版本名称',
            'type' => 'string',
            'required' => true,
            'example' => 'ha-cn-pl32rf0****@ha-cn-pl32rf0****_shenzhen_test_01@sz_vpc_domain_1@api_test@index_config_v1',
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
                'title' => 'id of request',
                'description' => 'id of request',
                'type' => 'string',
                'example' => '022F36C7-9FB4-5D67-BEBC-3D14B0984463',
              ),
              'result' => 
              array (
                'title' => '结果',
                'description' => '结果',
                'type' => 'object',
                'example' => '{}',
              ),
            ),
          ),
        ),
        500 => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"022F36C7-9FB4-5D67-BEBC-3D14B0984463\\",\\n  \\"result\\": {}\\n}","type":"json"}]',
      'title' => '删除索引的版本',
      'description' => '## 方法

```
DELETE
```

## URI

```
/openapi/ha3/instances/{instanceId}/indexes/{indexName}/versions/{versionName}
```


',
      'requestParamsDescription' => '## 请求示例

﻿

```
DELETE /openapi/ha3/instances/ose-test1/indexes/my_index/versions/version1
```
',
      'responseParamsDescription' => '## 返回示例

正确返回
﻿

```
{
﻿
  "requestId": "65911539-5a8b-4bce-96a5-4d608900dc46",
﻿
  "result": []
﻿
}
```
详情可参考[响应结构](~~465311~~)',
    ),
    'DeleteIndex' => 
    array (
      'summary' => '删除索引。',
      'path' => '/openapi/ha3/instances/{instanceId}/indexes/{indexName}',
      'methods' => 
      array (
        0 => 'delete',
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
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '实例ID',
            'description' => '实例ID',
            'type' => 'string',
            'required' => true,
            'example' => 'ha-cn-pl32rf0****',
          ),
        ),
        1 => 
        array (
          'name' => 'indexName',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '索引名称',
            'description' => '索引名称',
            'type' => 'string',
            'required' => true,
            'example' => 'test_api',
          ),
        ),
        2 => 
        array (
          'name' => 'dataSource',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '数据源',
            'description' => '数据源',
            'type' => 'string',
            'required' => true,
            'example' => 'ha-cn-pl32rf0****_ test_api',
          ),
        ),
        3 => 
        array (
          'name' => 'deleteDataSource',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否删除数据源',
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
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'title' => 'id of request',
                'description' => 'id of request',
                'type' => 'string',
                'example' => '022F36C7-9FB4-5D67-BEBC-3D14B0984463',
              ),
              'result' => 
              array (
                'title' => '索引信息',
                'description' => '索引信息',
                'type' => 'object',
                'example' => '{}',
              ),
            ),
          ),
        ),
        500 => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"022F36C7-9FB4-5D67-BEBC-3D14B0984463\\",\\n  \\"result\\": {}\\n}","type":"json"}]',
      'title' => '删除索引',
      'description' => '## 方法

```
DELETE
```

## URI

```
/openapi/ha3/instances/{instanceId}/indexes/{indexName}?dataSource=xxx
```
',
      'requestParamsDescription' => '
## 请求示例

﻿

```
DELETE /openapi/ha3/instances/ose-test1/indexes/my_index?dataSource=xxx
```
',
      'responseParamsDescription' => '## 返回示例

正确返回
﻿

```
{
﻿
  "requestId": "65911539-5a8b-4bce-96a5-4d608900dc46",
﻿
  "result": []
﻿
}
```
详情可参考[响应结构](~~465311~~)',
    ),
    'ModifyIndexVersion' => 
    array (
      'summary' => '修改集群索引版本（索引回滚）。',
      'path' => '/openapi/ha3/instances/{instanceId}/clusters/{clusterName}/index-version',
      'methods' => 
      array (
        0 => 'put',
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
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID',
            'type' => 'string',
            'required' => true,
            'example' => 'ha-cn-pl32rf0****',
          ),
        ),
        1 => 
        array (
          'name' => 'clusterName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '集群名称',
            'type' => 'string',
            'required' => false,
            'example' => 'vpc_hz_domain_2',
          ),
        ),
        2 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求结构。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '请求体参数',
              'type' => 'object',
              'properties' => 
              array (
                'indexName' => 
                array (
                  'title' => '索引名称',
                  'description' => '索引名称',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'main_index',
                ),
                'version' => 
                array (
                  'title' => '索引版本',
                  'description' => '索引版本',
                  'type' => 'string',
                  'required' => false,
                  'example' => '1',
                ),
                'buildDeployId' => 
                array (
                  'title' => '产出索引的离线部署',
                  'description' => '数据源部署id',
                  'type' => 'string',
                  'required' => false,
                  'example' => '277',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'example' => '{}',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'title' => 'id of request',
                'description' => 'id of request',
                'type' => 'string',
                'example' => 'F43E8AB4-419C-5F4C-90D6-615590DFAA3C',
              ),
              'result' => 
              array (
                'title' => 'Map',
                'description' => 'result',
                'type' => 'object',
                'example' => '{}',
              ),
            ),
          ),
        ),
        500 => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"F43E8AB4-419C-5F4C-90D6-615590DFAA3C\\",\\n  \\"result\\": {}\\n}","type":"json"}]',
      'title' => '修改集群索引版本（索引回滚）',
      'description' => '## 方法

```
PUT
```

## URI

```
/openapi/ha3/instances/{instanceId}/clusters/{clusterName}/index-version
```。',
      'requestParamsDescription' => '

## 请求示例

﻿

```
PUT /openapi/ha3/instances/ha3_instance_nameclusters/test_cluster/index-version
```

﻿

```
[
﻿
  {
﻿
    "indexName": "index1",
﻿
    "version": "123456",
﻿
    "buildDeployId": "20201010"
﻿
  },
﻿
  {
﻿
    "indexName": "index1",
﻿
    "version": "123456",
﻿
    "buildDeployId": "20201010"
﻿
  }
﻿
]
﻿
​
```



',
      'responseParamsDescription' => '## 返回示例

正确返回
﻿

```
{
﻿
  "requestId": "0A6EB64B-B4C8-CF02-810F-E660812972FF",
﻿
  "result":[]
﻿
}
```
详情可参考[响应结构](~~465311~~)',
    ),
    'ModifyFile' => 
    array (
      'summary' => '修改文件。',
      'path' => '/openapi/ha3/instances/{instanceId}/indexes/{indexName}/versions/{versionName}/file',
      'methods' => 
      array (
        0 => 'put',
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
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID',
            'type' => 'string',
            'required' => true,
            'example' => 'ha-cn-pl32rf0****',
          ),
        ),
        1 => 
        array (
          'name' => 'indexName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '索引名称',
            'type' => 'string',
            'required' => true,
            'example' => 'test_api',
          ),
        ),
        2 => 
        array (
          'name' => 'versionName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '版本',
            'type' => 'string',
            'required' => true,
            'example' => 'ha-cn-pl32rf0****_online_config_v1',
          ),
        ),
        3 => 
        array (
          'name' => 'fileName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件全路径名称',
            'type' => 'string',
            'required' => true,
            'example' => '/schemas/generation_schema.json',
          ),
        ),
        4 => 
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
              'content' => 
              array (
                'title' => '文件内容',
                'description' => '内容',
                'type' => 'string',
                'required' => false,
                'example' => '{\\"partition\\":1}',
              ),
              'partition' => 
              array (
                'title' => '数据分片',
                'description' => '分片数',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '1',
              ),
            ),
            'required' => false,
            'example' => '{\\"desc\\":\\"new version\\"}',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'title' => 'id of request',
                'description' => 'id of request',
                'type' => 'string',
                'example' => '89B968E6-1E41-58DF-BB25-5F98ECC759CE',
              ),
              'result' => 
              array (
                'title' => 'Map',
                'description' => '索引信息',
                'type' => 'object',
                'example' => '{}',
              ),
            ),
          ),
        ),
        500 => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"89B968E6-1E41-58DF-BB25-5F98ECC759CE\\",\\n  \\"result\\": {}\\n}","type":"json"}]',
      'title' => '修改文件',
      'description' => '## 方法

```
PUT
```

## URI

```
/openapi/ha3/instances/{instanceId}/indexes/{indexName}/versions/{versionName}/file?fileName=/root/test.txt
```
',
      'requestParamsDescription' => '## 请求示例



```
PUT  /openapi/ha3/instances/ose-test1/indexes/index1/versions/version1?fileName=/root/test.txt
﻿
{
﻿
  "partition": 1,
﻿
  "content": ""
﻿
}
```
',
      'responseParamsDescription' => '## 返回示例

正确返回
﻿

```
{
﻿
  "requestId": "e1eef569-1ff7-4bf8-acf7-1cecca9894ce",
﻿
  "result": {}
﻿
}
```',
    ),
    'PublishIndexVersion' => 
    array (
      'summary' => '发布索引版本。',
      'path' => '/openapi/ha3/instances/{instanceId}/indexes/{indexName}/actions/publish',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID',
            'type' => 'string',
            'required' => true,
            'example' => 'ha-cn-pl32rf0****',
          ),
        ),
        1 => 
        array (
          'name' => 'indexName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '索引名称',
            'type' => 'string',
            'required' => true,
            'example' => 'test_api',
          ),
        ),
        2 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体',
            'type' => 'object',
            'required' => false,
            'example' => '{
	"dataSource": "ha-cn-pl32rf0****_test_api",
	"desc": "备注信息"
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
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'title' => 'id of request',
                'description' => 'id of request',
                'type' => 'string',
                'example' => 'E45380E8-994A-5402-9806-F114B3295FCF',
              ),
              'result' => 
              array (
                'title' => 'Map',
                'description' => '索引信息',
                'type' => 'object',
                'example' => '{}',
              ),
            ),
          ),
        ),
        500 => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"E45380E8-994A-5402-9806-F114B3295FCF\\",\\n  \\"result\\": {}\\n}","type":"json"}]',
      'title' => '发布索引版本',
      'description' => '## 方法

```
POST
```

## URI

```
/openapi/ha3/instances/{instanceId}/indexes/{indexName}/actions/publish
```

',
      'requestParamsDescription' => '

## 请求示例

﻿

```
POST /openapi/ha3/instances/ose-test1/indexes/my_index/actions/publish
```

﻿

```
{
﻿
  "desc": "new version",
﻿
  "dataSource": "test1",
﻿
  "domain": "test_domain"
﻿
}
```








',
      'responseParamsDescription' => '## 返回示例

正确返回
﻿

```
{
﻿
  "requestId": "65911539-5a8b-4bce-96a5-4d608900dc46",
﻿
  "result": []
﻿
}
```
详情可参考[响应结构](~~465311~~)',
    ),
    'ModifyIndexPartition' => 
    array (
      'summary' => '快速扩缩列。',
      'path' => '/openapi/ha3/instances/{instanceId}/index-partition',
      'methods' => 
      array (
        0 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
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
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例id',
            'type' => 'string',
            'required' => true,
            'example' => 'ha-cn-pl32rf0****',
          ),
        ),
        1 => 
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
              'dataSourceName' => 
              array (
                'title' => '数据源名称',
                'description' => '数据源名称',
                'type' => 'string',
                'required' => false,
                'example' => 'ha-cn-pl32rf0****_test_api',
              ),
              'generation' => 
              array (
                'title' => 'generation 主键',
                'description' => 'generation 主键',
                'type' => 'integer',
                'format' => 'int64',
                'required' => false,
                'example' => '1633293829',
              ),
              'domainName' => 
              array (
                'title' => '机房',
                'description' => '机房',
                'type' => 'string',
                'required' => false,
                'example' => 'sz_vpc_domain_1',
              ),
              'indexInfos' => 
              array (
                'title' => '索引分片信息',
                'description' => '索引信息',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '索引信息',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'indexName' => 
                    array (
                      'title' => '索引名称',
                      'description' => '索引名称',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'test_api',
                    ),
                    'partitionCount' => 
                    array (
                      'title' => '分片数',
                      'description' => '索引对应的分片数',
                      'type' => 'integer',
                      'format' => 'int32',
                      'required' => false,
                      'example' => '3',
                    ),
                    'parallelNum' => 
                    array (
                      'title' => '并发数，默认是 1',
                      'description' => '并发数，默认是 1',
                      'type' => 'integer',
                      'format' => 'int32',
                      'required' => false,
                      'example' => '1',
                    ),
                  ),
                  'required' => false,
                ),
                'required' => false,
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
                'title' => 'id of request',
                'description' => 'id of request',
                'type' => 'string',
                'example' => '93A9E542-8CF8-5BA6-99AB-94C0FE520429',
              ),
              'result' => 
              array (
                'title' => 'Map',
                'description' => 'Map',
                'type' => 'object',
                'example' => '[]',
              ),
            ),
          ),
        ),
        500 => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"93A9E542-8CF8-5BA6-99AB-94C0FE520429\\",\\n  \\"result\\": []\\n}","type":"json"}]',
      'title' => '修改索引分区信息',
      'description' => '### 方法
`PUT`
### URI
`/openapi/ha3/instances/{instanceId}/index-partition`',
      'requestParamsDescription' => '### 示例
`PUT /openapi/ha3/instances/{instanceId}/index-partition`

```
{
  "dataSourceName":"ha-cn-pl32n3bi904_d",
  "domainName":"pre_domain_1",
  "generation":"1633293829",
  "indexInfos":[
    {
      "indexName":"atest2",
      "partitionCount":2
    }
  ]
}
```',
      'responseParamsDescription' => '### 返回示例

```
{
	"requestId": "0A6EB64B-B4C8-CF02-810F-E660812972FF",
  "result": []
}
```
详情可参考[响应结构](~~465311~~)',
    ),
    'GetIndex' => 
    array (
      'summary' => '查看索引表版本详情。',
      'path' => '/openapi/ha3/instances/{instanceId}/indexes/{indexName}',
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
        'abilityTreeCode' => '104685',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREopensearchJB31XH',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID',
            'type' => 'string',
            'required' => true,
            'example' => 'ha-cn-pl32rf0****',
          ),
        ),
        1 => 
        array (
          'name' => 'indexName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '索引名称',
            'type' => 'string',
            'required' => true,
            'example' => 'test_api',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'title' => 'id of request',
                'description' => 'id of request',
                'type' => 'string',
                'example' => '4FB0325E-8C37-5525-96AC-0333523170A3',
              ),
              'result' => 
              array (
                'title' => 'IndexConfig',
                'description' => '索引信息',
                'type' => 'object',
                'properties' => 
                array (
                  'name' => 
                  array (
                    'title' => '配置名称',
                    'description' => '索引名称',
                    'type' => 'string',
                    'example' => 'test_api',
                  ),
                  'versions' => 
                  array (
                    'title' => '版本列表',
                    'description' => '版本信息',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '数据版本信息',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'desc' => 
                        array (
                          'title' => '描述',
                          'description' => '描述信息',
                          'type' => 'string',
                          'example' => '索引备注',
                        ),
                        'files' => 
                        array (
                          'title' => '文件名列表',
                          'description' => '所在位置',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '版本详情',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'fullPathName' => 
                              array (
                                'description' => '完整路径',
                                'type' => 'string',
                                'example' => '/qrs.json
',
                              ),
                              'isDir' => 
                              array (
                                'description' => '是文件夹',
                                'type' => 'boolean',
                                'example' => 'true',
                              ),
                              'isTemplate' => 
                              array (
                                'description' => '是模板',
                                'type' => 'boolean',
                                'example' => 'true',
                              ),
                              'name' => 
                              array (
                                'description' => '文件名称',
                                'type' => 'string',
                                'example' => 'qrs.json',
                              ),
                            ),
                          ),
                        ),
                        'name' => 
                        array (
                          'title' => '版本名',
                          'description' => '版本名称',
                          'type' => 'string',
                          'example' => 'test',
                        ),
                        'status' => 
                        array (
                          'title' => 'drafting、used、unused (drafting: 草稿, used: 线上使用, unused:未使用, trash: 删除中)',
                          'description' => '状态 

- NEW：创建。
- PUBLISH：正常。
- IN_USE：使用中。
- NOT_USE：未使用。
- STOP_USE：停止使用中。
- RESTORE_USE：恢复使用中。
- FAIL：失败。',
                          'type' => 'string',
                          'example' => 'PUBLISH',
                        ),
                        'updateTime' => 
                        array (
                          'title' => '更新时间',
                          'description' => '更新时间',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1718846192',
                        ),
                        'versionId' => 
                        array (
                          'title' => '版本id (edit版本为null)',
                          'description' => '版本ID',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                      ),
                    ),
                  ),
                  'dataSource' => 
                  array (
                    'title' => '数据源',
                    'description' => '数据源',
                    'type' => 'string',
                    'example' => 'ha-cn-pl32rf0****_test_api
',
                  ),
                  'domain' => 
                  array (
                    'title' => '数据源的部署名',
                    'description' => '数据源的部署名',
                    'type' => 'string',
                    'example' => 'sz_vpc_domain_1',
                  ),
                  'indexStatus' => 
                  array (
                    'title' => '表状态 (NEW, PUBLISH, IN_USE: 召回引擎版创建成功后为正常状态, NOT_USE, STOP_USE,RESTORE_USE)',
                    'description' => '状态 

- NEW：创建。
- PUBLISH：正常。
- IN_USE：使用中。
- NOT_USE：未使用。
- STOP_USE：停止使用中。
- RESTORE_USE：恢复使用中。
- FAIL：失败。',
                    'type' => 'string',
                    'example' => 'IN_USE',
                  ),
                  'content' => 
                  array (
                    'title' => '文件内容',
                    'description' => '文件内容',
                    'type' => 'string',
                    'example' => '{"summarys":{"parameter":{"file_compressor":"zstd"},"summary_fields":["id"]},"file_compress":[{"name":"file_compressor","type":"zstd"},{"name":"no_compressor","type":""}],"indexs":[{"index_fields":"name","index_name":"ids","index_type":"STRING"},{"has_primary_key_attribute":true,"index_fields":"id","is_primary_key_sorted":false,"index_name":"id","index_type":"PRIMARYKEY64"}],"attributes":[{"file_compress":"no_compressor","field_name":"id"}],"fields":[{"user_defined_param":{},"compress_type":"uniq","field_type":"STRING","field_name":"id"},{"compress_type":"uniq","field_type":"STRING","field_name":"name"}],"table_name":"api"}',
                  ),
                  'partition' => 
                  array (
                    'title' => '数据分片',
                    'description' => '数据分片',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '2',
                  ),
                  'fullVersion' => 
                  array (
                    'title' => '数据版本',
                    'description' => '数据版本',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1688523414',
                  ),
                  'fullUpdateTime' => 
                  array (
                    'title' => '全量切换时间',
                    'description' => '全量切换时间',
                    'type' => 'string',
                    'example' => '2024-06-20 08:52:54',
                  ),
                  'incUpdateTime' => 
                  array (
                    'title' => '增量更新时间',
                    'description' => '增量更新时间',
                    'type' => 'string',
                    'example' => '2024-06-20 08:52:54',
                  ),
                  'indexSize' => 
                  array (
                    'title' => '索引大小',
                    'description' => '索引大小',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '4689',
                  ),
                  'description' => 
                  array (
                    'title' => '备注',
                    'description' => '备注',
                    'type' => 'string',
                    'example' => '备注',
                  ),
                  'dataSourceInfo' => 
                  array (
                    'title' => '数据源相关信息',
                    'description' => '数据源相关信息',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'processPartitionCount' => 
                      array (
                        'title' => '数据更新资源数',
                        'description' => '数据更新资源数',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '2',
                      ),
                      'name' => 
                      array (
                        'title' => '数据源名',
                        'description' => '数据源名',
                        'type' => 'string',
                        'example' => 'ha-cn-pl32rf0****_test_api
',
                      ),
                      'type' => 
                      array (
                        'title' => '数据源类型 (odps, swift, saro, oss, unKnow)',
                        'description' => '数据源类型 (odps, swift, saro, oss, unKnow)',
                        'type' => 'string',
                        'example' => 'odps',
                      ),
                      'domain' => 
                      array (
                        'title' => '离线部署',
                        'description' => '离线部署',
                        'type' => 'string',
                        'example' => 'vpc_hz_domain_1',
                      ),
                      'config' => 
                      array (
                        'title' => 'odps 数据源配置',
                        'description' => 'odps 数据源配置',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'endpoint' => 
                          array (
                            'title' => 'odps相关',
                            'description' => 'odps相关',
                            'type' => 'string',
                            'example' => 'http://service.cn-hangzhou.maxcompute.aliyun-inc.com/api',
                          ),
                          'accessKey' => 
                          array (
                            'description' => 'odps数据源ak',
                            'type' => 'string',
                            'example' => 'L***p',
                          ),
                          'accessSecret' => 
                          array (
                            'description' => 'odps数据源ak secret',
                            'type' => 'string',
                            'example' => '5**9a6',
                          ),
                          'project' => 
                          array (
                            'description' => 'odps数据源项目名称',
                            'type' => 'string',
                            'example' => 'tisplus_dev',
                          ),
                          'partition' => 
                          array (
                            'description' => 'ODPS Partition。例如：ds=20180102
',
                            'type' => 'string',
                            'example' => 'ds=20220713',
                          ),
                          'table' => 
                          array (
                            'title' => 'saro、odps相关',
                            'description' => 'saro、odps相关',
                            'type' => 'string',
                            'example' => 'dump_odps_demo',
                          ),
                          'namespace' => 
                          array (
                            'title' => 'saro相关',
                            'description' => 'saro相关',
                            'type' => 'string',
                            'example' => 'TEST_dump_demo_sj_na61hunbu2_share_holo',
                          ),
                          'path' => 
                          array (
                            'title' => 'hdfs相关',
                            'description' => 'hdfs相关',
                            'type' => 'string',
                            'example' => 'http://test_opensearch/sift_oss_test.data',
                          ),
                          'ossPath' => 
                          array (
                            'title' => 'oss数据源相关',
                            'description' => 'oss数据源相关',
                            'type' => 'string',
                            'example' => '/test_opensearch/sift_oss_test.data',
                          ),
                          'bucket' => 
                          array (
                            'description' => 'Bucket名称。',
                            'type' => 'string',
                            'example' => 'ha3test-oss',
                          ),
                        ),
                      ),
                      'saroConfig' => 
                      array (
                        'title' => 'saro数据源配置',
                        'description' => 'saro数据源配置',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'namespace' => 
                          array (
                            'description' => 'saro数据源的namespace',
                            'type' => 'string',
                            'example' => 'TEST_dump_demo_sj_na61hunbu2_share_holo',
                          ),
                          'tableName' => 
                          array (
                            'description' => 'saro数据表名称',
                            'type' => 'string',
                            'example' => 'llm',
                          ),
                        ),
                      ),
                      'autoBuildIndex' => 
                      array (
                        'title' => '是否开启自动全量',
                        'description' => '是否开启自动全量',
                        'type' => 'boolean',
                        'example' => 'true',
                      ),
                      'processParallelNum' => 
                      array (
                        'description' => '全量process并发数',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '2',
                      ),
                    ),
                  ),
                  'cluster' => 
                  array (
                    'description' => '集群信息',
                    'type' => 'object',
                    'additionalProperties' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'buildParallelNum' => 
                        array (
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '2',
                          'description' => '全量并发数',
                        ),
                        'mergeParallelNum' => 
                        array (
                          'type' => 'integer',
                          'format' => 'int32',
                          'description' => '全量merge并发数',
                          'example' => '2',
                        ),
                      ),
                      'description' => '集群信息',
                    ),
                  ),
                  'config' => 
                  array (
                    'description' => '配置信息',
                    'type' => 'object',
                    'additionalProperties' => 
                    array (
                      'type' => 'object',
                      'additionalProperties' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'name' => 
                          array (
                            'type' => 'string',
                            'example' => '
ha-cn-pl32rf0****_offline_adv_v1',
                            'description' => '配置名称',
                          ),
                          'updateTime' => 
                          array (
                            'type' => 'string',
                            'description' => '更新时间',
                            'example' => '1716258634000',
                          ),
                          'desc' => 
                          array (
                            'type' => 'string',
                            'description' => '高级配置描述信息',
                            'example' => '备注信息',
                          ),
                        ),
                        'description' => '子配置项信息',
                      ),
                      'description' => '配置信息',
                    ),
                  ),
                  'configWhenBuild' => 
                  array (
                    'description' => '下次生效的配置',
                    'type' => 'object',
                    'additionalProperties' => 
                    array (
                      'type' => 'object',
                      'additionalProperties' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'name' => 
                          array (
                            'type' => 'string',
                            'description' => '配置名称',
                            'example' => '
ha-cn-pl32rf0****_offline_adv_v1',
                          ),
                          'updateTime' => 
                          array (
                            'type' => 'string',
                            'example' => '1716258634000',
                            'description' => '更新时间',
                          ),
                          'desc' => 
                          array (
                            'type' => 'string',
                            'description' => '高级配置描述信息',
                            'example' => '备注信息',
                          ),
                        ),
                        'description' => '下次生效的子配置',
                      ),
                      'description' => '下次生效的配置',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        '5xx' => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'type' => 'string',
              ),
              'message' => 
              array (
                'type' => 'string',
              ),
              'code' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"4FB0325E-8C37-5525-96AC-0333523170A3\\",\\n  \\"result\\": {\\n    \\"name\\": \\"test_api\\",\\n    \\"versions\\": [\\n      {\\n        \\"desc\\": \\"索引备注\\",\\n        \\"files\\": [\\n          {\\n            \\"fullPathName\\": \\"/qrs.json\\\\n\\",\\n            \\"isDir\\": true,\\n            \\"isTemplate\\": true,\\n            \\"name\\": \\"qrs.json\\"\\n          }\\n        ],\\n        \\"name\\": \\"test\\",\\n        \\"status\\": \\"PUBLISH\\",\\n        \\"updateTime\\": 1718846192,\\n        \\"versionId\\": 1\\n      }\\n    ],\\n    \\"dataSource\\": \\"ha-cn-pl32rf0****_test_api\\\\n\\",\\n    \\"domain\\": \\"sz_vpc_domain_1\\",\\n    \\"indexStatus\\": \\"IN_USE\\",\\n    \\"content\\": \\"{\\\\\\"summarys\\\\\\":{\\\\\\"parameter\\\\\\":{\\\\\\"file_compressor\\\\\\":\\\\\\"zstd\\\\\\"},\\\\\\"summary_fields\\\\\\":[\\\\\\"id\\\\\\"]},\\\\\\"file_compress\\\\\\":[{\\\\\\"name\\\\\\":\\\\\\"file_compressor\\\\\\",\\\\\\"type\\\\\\":\\\\\\"zstd\\\\\\"},{\\\\\\"name\\\\\\":\\\\\\"no_compressor\\\\\\",\\\\\\"type\\\\\\":\\\\\\"\\\\\\"}],\\\\\\"indexs\\\\\\":[{\\\\\\"index_fields\\\\\\":\\\\\\"name\\\\\\",\\\\\\"index_name\\\\\\":\\\\\\"ids\\\\\\",\\\\\\"index_type\\\\\\":\\\\\\"STRING\\\\\\"},{\\\\\\"has_primary_key_attribute\\\\\\":true,\\\\\\"index_fields\\\\\\":\\\\\\"id\\\\\\",\\\\\\"is_primary_key_sorted\\\\\\":false,\\\\\\"index_name\\\\\\":\\\\\\"id\\\\\\",\\\\\\"index_type\\\\\\":\\\\\\"PRIMARYKEY64\\\\\\"}],\\\\\\"attributes\\\\\\":[{\\\\\\"file_compress\\\\\\":\\\\\\"no_compressor\\\\\\",\\\\\\"field_name\\\\\\":\\\\\\"id\\\\\\"}],\\\\\\"fields\\\\\\":[{\\\\\\"user_defined_param\\\\\\":{},\\\\\\"compress_type\\\\\\":\\\\\\"uniq\\\\\\",\\\\\\"field_type\\\\\\":\\\\\\"STRING\\\\\\",\\\\\\"field_name\\\\\\":\\\\\\"id\\\\\\"},{\\\\\\"compress_type\\\\\\":\\\\\\"uniq\\\\\\",\\\\\\"field_type\\\\\\":\\\\\\"STRING\\\\\\",\\\\\\"field_name\\\\\\":\\\\\\"name\\\\\\"}],\\\\\\"table_name\\\\\\":\\\\\\"api\\\\\\"}\\",\\n    \\"partition\\": 2,\\n    \\"fullVersion\\": 1688523414,\\n    \\"fullUpdateTime\\": \\"2024-06-20 08:52:54\\",\\n    \\"incUpdateTime\\": \\"2024-06-20 08:52:54\\",\\n    \\"indexSize\\": 4689,\\n    \\"description\\": \\"备注\\",\\n    \\"dataSourceInfo\\": {\\n      \\"processPartitionCount\\": 2,\\n      \\"name\\": \\"ha-cn-pl32rf0****_test_api\\\\n\\",\\n      \\"type\\": \\"odps\\",\\n      \\"domain\\": \\"vpc_hz_domain_1\\",\\n      \\"config\\": {\\n        \\"endpoint\\": \\"http://service.cn-hangzhou.maxcompute.aliyun-inc.com/api\\",\\n        \\"accessKey\\": \\"L***p\\",\\n        \\"accessSecret\\": \\"5**9a6\\",\\n        \\"project\\": \\"tisplus_dev\\",\\n        \\"partition\\": \\"ds=20220713\\",\\n        \\"table\\": \\"dump_odps_demo\\",\\n        \\"namespace\\": \\"TEST_dump_demo_sj_na61hunbu2_share_holo\\",\\n        \\"path\\": \\"http://test_opensearch/sift_oss_test.data\\",\\n        \\"ossPath\\": \\"/test_opensearch/sift_oss_test.data\\",\\n        \\"bucket\\": \\"ha3test-oss\\"\\n      },\\n      \\"saroConfig\\": {\\n        \\"namespace\\": \\"TEST_dump_demo_sj_na61hunbu2_share_holo\\",\\n        \\"tableName\\": \\"llm\\"\\n      },\\n      \\"autoBuildIndex\\": true,\\n      \\"processParallelNum\\": 2\\n    },\\n    \\"cluster\\": {\\n      \\"key\\": {\\n        \\"buildParallelNum\\": 2,\\n        \\"mergeParallelNum\\": 2\\n      }\\n    },\\n    \\"config\\": {\\n      \\"key\\": {\\n        \\"key\\": {\\n          \\"name\\": \\"\\\\nha-cn-pl32rf0****_offline_adv_v1\\",\\n          \\"updateTime\\": \\"1716258634000\\",\\n          \\"desc\\": \\"备注信息\\"\\n        }\\n      }\\n    },\\n    \\"configWhenBuild\\": {\\n      \\"key\\": {\\n        \\"key\\": {\\n          \\"name\\": \\"\\\\nha-cn-pl32rf0****_offline_adv_v1\\",\\n          \\"updateTime\\": \\"1716258634000\\",\\n          \\"desc\\": \\"备注信息\\"\\n        }\\n      }\\n    }\\n  }\\n}","type":"json"}]',
      'title' => '查看索引表详情',
      'description' => '## 方法

```
GET
```

## URI

```
/openapi/ha3/instances/{instanceId}/indexes/{indexName}?dataSource=xxx
```
',
      'requestParamsDescription' => '## 请求示例

```
GET  /openapi/ha3/instances/ose-test1/indexes/index1?dataSource=xxx
```',
      'responseParamsDescription' => '## 返回示例

正确返回

```
{
  "requestId": "e1eef569-1ff7-4bf8-acf7-1cecca9894ce",
  "result": {
    "name": "index1",
    "dataSource": "test_yyds_data1",
    "versions": [
      {
        "name": "my_index_1",
        "versionId": 1,
        "status": "drafting",
        "updateTime": "1631070464000",
        "desc": "test",
        "files": [
          {
            "fullPathName": "/",
            "isDir": true,
            "isTemplate": true,
            "name": "cava"
          },
          {
            "fullPathName": "/",
            "isDir": true,
            "isTemplate": true,
            "name": "cava"
          }
        ]
      },
      {
        "name": "my_index_2",
        "versionId": 1,
        "status": "drafting",
        "updateTime": "1631070464000",
        "desc": "test",
        "files": [
          {
            "fullPathName": "/",
            "isDir": true,
            "isTemplate": true,
            "name": "cava"
          },
          {
            "fullPathName": "/",
            "isDir": true,
            "isTemplate": true,
            "name": "cava"
          }
        ]        
      }
    ]
  }
}
```
',
    ),
    'GetIndexVersion' => 
    array (
      'summary' => '获取集群可回滚的索引信息。',
      'path' => '/openapi/ha3/instances/{instanceId}/clusters/{clusterName}/index-version',
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
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID',
            'type' => 'string',
            'required' => true,
            'example' => 'ha-cn-pl32rf0****',
          ),
        ),
        1 => 
        array (
          'name' => 'clusterName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '集群名称',
            'type' => 'string',
            'required' => true,
            'example' => 'vpc_hz_domain_1',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'title' => 'id of request',
                'description' => 'id of request',
                'type' => 'string',
                'example' => 'E7B7D598-B080-5C8E-AA35-D43EC0D5F886',
              ),
              'result' => 
              array (
                'title' => 'ClusterIndexVersion',
                'description' => '集群列表',
                'type' => 'object',
                'properties' => 
                array (
                  'cluster' => 
                  array (
                    'description' => '集群名称',
                    'type' => 'string',
                    'example' => 'hz_pre_vpc_domain_1',
                  ),
                  'indexVersions' => 
                  array (
                    'description' => '索引版本列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '索引版本信息',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'indexName' => 
                        array (
                          'description' => '索引表名称',
                          'type' => 'string',
                          'example' => 'test_api',
                        ),
                        'versions' => 
                        array (
                          'description' => '索引版本',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '索引版本',
                            'type' => 'integer',
                            'format' => 'int64',
                            'example' => '1630353700',
                          ),
                        ),
                        'buildDeployId' => 
                        array (
                          'description' => '离线部署id',
                          'type' => 'string',
                          'example' => '2648',
                        ),
                        'currentVersion' => 
                        array (
                          'description' => '当前在线版本号',
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
        500 => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"E7B7D598-B080-5C8E-AA35-D43EC0D5F886\\",\\n  \\"result\\": {\\n    \\"cluster\\": \\"hz_pre_vpc_domain_1\\",\\n    \\"indexVersions\\": [\\n      {\\n        \\"indexName\\": \\"test_api\\",\\n        \\"versions\\": [\\n          1630353700\\n        ],\\n        \\"buildDeployId\\": \\"2648\\",\\n        \\"currentVersion\\": 1\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '获取集群可回滚的索引信息',
      'description' => '## 方法

```
GET
```

## URI

```
/openapi/ha3/instances/{instanceId}/clusters/{clusterName}/index-version
```
',
      'requestParamsDescription' => '## 示例

请求示例

```
GET  /openapi/ha3/instances/ha3_instance_id_1/clusters/cluster1/index-version
```',
      'responseParamsDescription' => '## 返回示例

正确返回

```
{
  "requestId": "e1eef569-1ff7-4bf8-acf7-1cecca9894ce",
  "result": {
    "cluster": "ea119cloud",
    "indexVersions": [
      {
        "versions": [
          1630527077,
          1630440554
        ],
        "currentVersion":1630527077,
        "indexName": "ihome_lapp_content_filter_param_index",
        "buildDeployId": "2837"
      },
      {
        "versions": [
          1630353700
        ],
        "currentVersion":1630353700,        
        "indexName": "ihome_lapp_case_tab_filter",
        "buildDeployId": "2829"
      }
    ]
  }
}
```

',
    ),
    'GetFile' => 
    array (
      'summary' => '查看索引表版本详情。',
      'path' => '/openapi/ha3/instances/{instanceId}/indexes/{indexName}/versions/{versionName}/file',
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
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '实例ID',
            'description' => '实例ID',
            'type' => 'string',
            'required' => true,
            'example' => 'ha-cn-pl32rf0****',
          ),
        ),
        1 => 
        array (
          'name' => 'indexName',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '索引名称',
            'description' => '索引名称',
            'type' => 'string',
            'required' => true,
            'example' => 'test_api',
          ),
        ),
        2 => 
        array (
          'name' => 'versionName',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '版本名称',
            'description' => '版本名称',
            'type' => 'string',
            'required' => true,
            'example' => 'ha-cn-pl32rf0****@ha-cn-pl32rf0****_test_api@bj_vpc_domain_1@point_cloud_3d@index_config_edit',
          ),
        ),
        3 => 
        array (
          'name' => 'fileName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '文件全路径名称',
            'description' => '文件全路径名称',
            'type' => 'string',
            'required' => true,
            'example' => '/schemas/automobile_vector_schema.json',
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
                'title' => 'id of request',
                'description' => 'id of request',
                'type' => 'string',
                'example' => '2AE63638-5420-56DC-BF59-37D8174039A0',
              ),
              'result' => 
              array (
                'title' => '索引信息',
                'description' => '索引信息',
                'type' => 'object',
                'properties' => 
                array (
                  'name' => 
                  array (
                    'title' => '文件名称',
                    'description' => '文件名称',
                    'type' => 'string',
                    'example' => 'testFile',
                  ),
                  'fullPathName' => 
                  array (
                    'title' => '全路径名称',
                    'description' => '全路径名称',
                    'type' => 'string',
                    'example' => '/schema.json',
                  ),
                  'dataSource' => 
                  array (
                    'title' => '数据源',
                    'description' => '数据源',
                    'type' => 'string',
                    'example' => 'ha-cn-pl32rf0****_test_api',
                  ),
                  'partition' => 
                  array (
                    'title' => '分片数',
                    'description' => '分片数',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '2',
                  ),
                  'isDir' => 
                  array (
                    'title' => '是否为目录',
                    'description' => '是否为目录',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'content' => 
                  array (
                    'title' => '内容',
                    'description' => '内容',
                    'type' => 'string',
                    'example' => '{"summarys":{"parameter":{"file_compressor":"zstd"},"summary_fields":["id"]},"file_compress":[{"name":"file_compressor","type":"zstd"},{"name":"no_compressor","type":""}],"indexs":[{"index_fields":"name","index_name":"ids","index_type":"STRING"},{"has_primary_key_attribute":true,"index_fields":"id","is_primary_key_sorted":false,"index_name":"id","index_type":"PRIMARYKEY64"}],"attributes":[{"file_compress":"no_compressor","field_name":"id"}],"fields":[{"user_defined_param":{},"compress_type":"uniq","field_type":"STRING","field_name":"id"},{"compress_type":"uniq","field_type":"STRING","field_name":"name"}],"table_name":"api"}',
                  ),
                ),
              ),
            ),
          ),
        ),
        500 => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"2AE63638-5420-56DC-BF59-37D8174039A0\\",\\n  \\"result\\": {\\n    \\"name\\": \\"testFile\\",\\n    \\"fullPathName\\": \\"/schema.json\\",\\n    \\"dataSource\\": \\"ha-cn-pl32rf0****_test_api\\",\\n    \\"partition\\": 2,\\n    \\"isDir\\": true,\\n    \\"content\\": \\"{\\\\\\"summarys\\\\\\":{\\\\\\"parameter\\\\\\":{\\\\\\"file_compressor\\\\\\":\\\\\\"zstd\\\\\\"},\\\\\\"summary_fields\\\\\\":[\\\\\\"id\\\\\\"]},\\\\\\"file_compress\\\\\\":[{\\\\\\"name\\\\\\":\\\\\\"file_compressor\\\\\\",\\\\\\"type\\\\\\":\\\\\\"zstd\\\\\\"},{\\\\\\"name\\\\\\":\\\\\\"no_compressor\\\\\\",\\\\\\"type\\\\\\":\\\\\\"\\\\\\"}],\\\\\\"indexs\\\\\\":[{\\\\\\"index_fields\\\\\\":\\\\\\"name\\\\\\",\\\\\\"index_name\\\\\\":\\\\\\"ids\\\\\\",\\\\\\"index_type\\\\\\":\\\\\\"STRING\\\\\\"},{\\\\\\"has_primary_key_attribute\\\\\\":true,\\\\\\"index_fields\\\\\\":\\\\\\"id\\\\\\",\\\\\\"is_primary_key_sorted\\\\\\":false,\\\\\\"index_name\\\\\\":\\\\\\"id\\\\\\",\\\\\\"index_type\\\\\\":\\\\\\"PRIMARYKEY64\\\\\\"}],\\\\\\"attributes\\\\\\":[{\\\\\\"file_compress\\\\\\":\\\\\\"no_compressor\\\\\\",\\\\\\"field_name\\\\\\":\\\\\\"id\\\\\\"}],\\\\\\"fields\\\\\\":[{\\\\\\"user_defined_param\\\\\\":{},\\\\\\"compress_type\\\\\\":\\\\\\"uniq\\\\\\",\\\\\\"field_type\\\\\\":\\\\\\"STRING\\\\\\",\\\\\\"field_name\\\\\\":\\\\\\"id\\\\\\"},{\\\\\\"compress_type\\\\\\":\\\\\\"uniq\\\\\\",\\\\\\"field_type\\\\\\":\\\\\\"STRING\\\\\\",\\\\\\"field_name\\\\\\":\\\\\\"name\\\\\\"}],\\\\\\"table_name\\\\\\":\\\\\\"api\\\\\\"}\\"\\n  }\\n}","type":"json"}]',
      'title' => '查看索引表版本详情',
      'description' => '## 方法

```
GET
```

## URI

```
/openapi/ha3/instances/{instanceId}/indexes/{indexName}/versions/{versionName}/file?fileName=/root/test.txt
```
',
      'requestParamsDescription' => '

## 请求示例

```
GET  /openapi/ha3/instances/ose-test1/indexes/index1/versions/version1?fileName=/root/test.txt
```




',
      'responseParamsDescription' => '## 返回示例

正确返回

```
{
  "requestId": "e1eef569-1ff7-4bf8-acf7-1cecca9894ce",
  "result": {
    "name":"version1",  // 文件名
    "fullPathName": "/root/version1",   // 全路径名称
    "dataSource": "odps1", // 数据源
    "partition": 1,  // 分片
    "isDir": false, // 是否为目录
    "content": ""
  }
}
```
',
    ),
    'ListIndexes' => 
    array (
      'summary' => '获取索引列表。',
      'path' => '/openapi/ha3/instances/{instanceId}/indexes',
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
        'operationType' => 'list',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'ha-cn-2r42ost****',
          ),
        ),
        1 => 
        array (
          'name' => 'newMode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否为新版本控制台页面。',
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'title' => 'id of request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '4FB0325E-8C37-5525-96AC-0333523170A3',
              ),
              'result' => 
              array (
                'title' => 'List',
                'description' => '索引详情列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '索引详情列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'name' => 
                    array (
                      'title' => '配置名称',
                      'description' => '索引名称。',
                      'type' => 'string',
                      'example' => 'general',
                    ),
                    'versions' => 
                    array (
                      'title' => '版本列表',
                      'description' => '版本列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '索引版本信息。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'desc' => 
                          array (
                            'title' => '描述',
                            'description' => '描述。',
                            'type' => 'string',
                            'example' => '索引备注
',
                          ),
                          'files' => 
                          array (
                            'title' => '文件名列表',
                            'description' => '文件名列表。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '版本信息。',
                              'type' => 'object',
                              'properties' => 
                              array (
                                'fullPathName' => 
                                array (
                                  'description' => '全文检索后的目录名。',
                                  'type' => 'string',
                                  'example' => '/qrs.json
',
                                ),
                                'isDir' => 
                                array (
                                  'description' => '是否存在目录。',
                                  'type' => 'boolean',
                                  'example' => 'true',
                                ),
                                'isTemplate' => 
                                array (
                                  'description' => '是否是模板。',
                                  'type' => 'boolean',
                                  'example' => 'true',
                                ),
                                'name' => 
                                array (
                                  'description' => '文件名称。',
                                  'type' => 'string',
                                  'example' => 'qrs.json
',
                                ),
                              ),
                            ),
                          ),
                          'name' => 
                          array (
                            'title' => '版本名',
                            'description' => '版本名。',
                            'type' => 'string',
                            'example' => 'test',
                          ),
                          'status' => 
                          array (
                            'title' => 'drafting、used、unused (drafting: 草稿, used: 线上使用,unused: 未使用, trash: 删除中)',
                            'description' => '状态 

- NEW：创建。
- PUBLISH：正常。
- IN_USE：使用中。
- NOT_USE：未使用。
- STOP_USE：停止使用中。
- RESTORE_USE：恢复使用中。
- FAIL：失败。',
                            'type' => 'string',
                            'example' => 'PUBLISH',
                          ),
                          'updateTime' => 
                          array (
                            'title' => '更新时间',
                            'description' => '更新时间',
                            'type' => 'integer',
                            'format' => 'int64',
                            'example' => '2024-06-20 08:52:54',
                          ),
                          'versionId' => 
                          array (
                            'title' => '版本id (edit版本为null)',
                            'description' => '版本id (edit版本为null)',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '1',
                          ),
                        ),
                      ),
                    ),
                    'dataSource' => 
                    array (
                      'title' => '数据源',
                      'description' => '数据源',
                      'type' => 'string',
                      'example' => 'ha-cn-pl32rf0****_test_api',
                    ),
                    'domain' => 
                    array (
                      'title' => '数据源的部署名',
                      'description' => '数据源的部署名',
                      'type' => 'string',
                      'example' => 'vpc_hz_domain_1',
                    ),
                    'indexStatus' => 
                    array (
                      'title' => '表状态 (NEW, PUBLISH, IN_USE: 召回引擎版创建成功后为正常状态, NOT_USE, STOP_USE,RESTORE_USE)',
                      'description' => 'NEW, PUBLISH',
                      'type' => 'string',
                      'example' => 'PUBLISH',
                    ),
                    'content' => 
                    array (
                      'title' => '文件内容',
                      'description' => 'schema JSON',
                      'type' => 'string',
                      'example' => '{"summarys":{"parameter":{"file_compressor":"zstd"},"summary_fields":["id"]},"file_compress":[{"name":"file_compressor","type":"zstd"},{"name":"no_compressor","type":""}],"indexs":[{"index_fields":"name","index_name":"ids","index_type":"STRING"},{"has_primary_key_attribute":true,"index_fields":"id","is_primary_key_sorted":false,"index_name":"id","index_type":"PRIMARYKEY64"}],"attributes":[{"file_compress":"no_compressor","field_name":"id"}],"fields":[{"user_defined_param":{},"compress_type":"uniq","field_type":"STRING","field_name":"id"},{"compress_type":"uniq","field_type":"STRING","field_name":"name"}],"table_name":"api"}',
                    ),
                    'partition' => 
                    array (
                      'title' => '数据分片',
                      'description' => '数据分片',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '2',
                    ),
                    'fullVersion' => 
                    array (
                      'title' => '数据版本',
                      'description' => '全量版本  即：索引版本',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1688523414',
                    ),
                    'fullUpdateTime' => 
                    array (
                      'title' => '全量切换时间',
                      'description' => '全量切换时间',
                      'type' => 'string',
                      'example' => '2023-07-05 10:40:38',
                    ),
                    'incUpdateTime' => 
                    array (
                      'title' => '增量更新时间',
                      'description' => '增量更新时间',
                      'type' => 'string',
                      'example' => '2023-07-05 10:58:33',
                    ),
                    'indexSize' => 
                    array (
                      'title' => '索引大小',
                      'description' => '索引大小',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '4689',
                    ),
                    'description' => 
                    array (
                      'title' => '备注',
                      'description' => '备注',
                      'type' => 'string',
                      'example' => '备注',
                    ),
                    'dataSourceInfo' => 
                    array (
                      'title' => '数据源相关信息',
                      'description' => '数据源相关信息',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'processPartitionCount' => 
                        array (
                          'title' => '数据更新资源数',
                          'description' => '数据更新资源数',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '2',
                        ),
                        'name' => 
                        array (
                          'title' => '数据源名',
                          'description' => '数据源名',
                          'type' => 'string',
                          'example' => 'ha-cn-pl32rf0****_test_api',
                        ),
                        'type' => 
                        array (
                          'title' => '数据源类型 (odps, swift, saro, oss, unKnow)',
                          'description' => '数据源类型 (odps, swift, saro, oss, unKnow)',
                          'type' => 'string',
                          'example' => 'odps',
                        ),
                        'domain' => 
                        array (
                          'title' => '离线部署',
                          'description' => '离线部署',
                          'type' => 'string',
                          'example' => 'vpc_hz_domain_2',
                        ),
                        'config' => 
                        array (
                          'title' => 'odps 数据源配置',
                          'description' => 'odps 数据源配置',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'endpoint' => 
                            array (
                              'title' => 'odps相关',
                              'description' => 'odps相关',
                              'type' => 'string',
                              'example' => 'http://service.cn-hangzhou.maxcompute.aliyun-inc.com/api',
                            ),
                            'accessKey' => 
                            array (
                              'description' => 'odps数据源ak',
                              'type' => 'string',
                              'example' => 'L***p',
                            ),
                            'accessSecret' => 
                            array (
                              'description' => 'odps数据源ak secret',
                              'type' => 'string',
                              'example' => '5**9a6',
                            ),
                            'project' => 
                            array (
                              'description' => 'odps数据源项目名称',
                              'type' => 'string',
                              'example' => 'tisplus_dev',
                            ),
                            'partition' => 
                            array (
                              'description' => '数据分片',
                              'type' => 'string',
                              'example' => 'ds=20231220',
                            ),
                            'table' => 
                            array (
                              'title' => 'saro、odps相关',
                              'description' => 'saro、odps相关',
                              'type' => 'string',
                              'example' => 'dump_odps_demo',
                            ),
                            'namespace' => 
                            array (
                              'title' => 'saro相关',
                              'description' => 'saro相关',
                              'type' => 'string',
                              'example' => 'TEST_dump_demo_sj_na61hunbu2_share_holo',
                            ),
                            'path' => 
                            array (
                              'title' => 'hdfs相关',
                              'description' => 'hdfs相关',
                              'type' => 'string',
                              'example' => 'http://test_opensearch/sift_oss_test.data',
                            ),
                            'ossPath' => 
                            array (
                              'title' => 'oss数据源相关',
                              'description' => 'oss数据源相关',
                              'type' => 'string',
                              'example' => '/test_opensearch/sift_oss_test.data',
                            ),
                            'bucket' => 
                            array (
                              'description' => 'oss命名空间',
                              'type' => 'string',
                              'example' => 'ha3test-oss',
                            ),
                          ),
                        ),
                        'saroConfig' => 
                        array (
                          'title' => 'saro数据源配置',
                          'description' => 'saro数据源配置',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'namespace' => 
                            array (
                              'description' => 'saro数据源的namespace',
                              'type' => 'string',
                              'example' => 'TEST_dump_demo_sj_na61hunbu2_share_holo',
                            ),
                            'tableName' => 
                            array (
                              'description' => 'saro数据表名称',
                              'type' => 'string',
                              'example' => 'dump_odps_demo',
                            ),
                          ),
                        ),
                        'autoBuildIndex' => 
                        array (
                          'title' => '是否开启自动全量',
                          'description' => '是否开启自动全量',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        500 => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"4FB0325E-8C37-5525-96AC-0333523170A3\\",\\n  \\"result\\": [\\n    {\\n      \\"name\\": \\"general\\",\\n      \\"versions\\": [\\n        {\\n          \\"desc\\": \\"索引备注\\\\n\\",\\n          \\"files\\": [\\n            {\\n              \\"fullPathName\\": \\"/qrs.json\\\\n\\",\\n              \\"isDir\\": true,\\n              \\"isTemplate\\": true,\\n              \\"name\\": \\"qrs.json\\\\n\\"\\n            }\\n          ],\\n          \\"name\\": \\"test\\",\\n          \\"status\\": \\"PUBLISH\\",\\n          \\"updateTime\\": 0,\\n          \\"versionId\\": 1\\n        }\\n      ],\\n      \\"dataSource\\": \\"ha-cn-pl32rf0****_test_api\\",\\n      \\"domain\\": \\"vpc_hz_domain_1\\",\\n      \\"indexStatus\\": \\"PUBLISH\\",\\n      \\"content\\": \\"{\\\\\\"summarys\\\\\\":{\\\\\\"parameter\\\\\\":{\\\\\\"file_compressor\\\\\\":\\\\\\"zstd\\\\\\"},\\\\\\"summary_fields\\\\\\":[\\\\\\"id\\\\\\"]},\\\\\\"file_compress\\\\\\":[{\\\\\\"name\\\\\\":\\\\\\"file_compressor\\\\\\",\\\\\\"type\\\\\\":\\\\\\"zstd\\\\\\"},{\\\\\\"name\\\\\\":\\\\\\"no_compressor\\\\\\",\\\\\\"type\\\\\\":\\\\\\"\\\\\\"}],\\\\\\"indexs\\\\\\":[{\\\\\\"index_fields\\\\\\":\\\\\\"name\\\\\\",\\\\\\"index_name\\\\\\":\\\\\\"ids\\\\\\",\\\\\\"index_type\\\\\\":\\\\\\"STRING\\\\\\"},{\\\\\\"has_primary_key_attribute\\\\\\":true,\\\\\\"index_fields\\\\\\":\\\\\\"id\\\\\\",\\\\\\"is_primary_key_sorted\\\\\\":false,\\\\\\"index_name\\\\\\":\\\\\\"id\\\\\\",\\\\\\"index_type\\\\\\":\\\\\\"PRIMARYKEY64\\\\\\"}],\\\\\\"attributes\\\\\\":[{\\\\\\"file_compress\\\\\\":\\\\\\"no_compressor\\\\\\",\\\\\\"field_name\\\\\\":\\\\\\"id\\\\\\"}],\\\\\\"fields\\\\\\":[{\\\\\\"user_defined_param\\\\\\":{},\\\\\\"compress_type\\\\\\":\\\\\\"uniq\\\\\\",\\\\\\"field_type\\\\\\":\\\\\\"STRING\\\\\\",\\\\\\"field_name\\\\\\":\\\\\\"id\\\\\\"},{\\\\\\"compress_type\\\\\\":\\\\\\"uniq\\\\\\",\\\\\\"field_type\\\\\\":\\\\\\"STRING\\\\\\",\\\\\\"field_name\\\\\\":\\\\\\"name\\\\\\"}],\\\\\\"table_name\\\\\\":\\\\\\"api\\\\\\"}\\",\\n      \\"partition\\": 2,\\n      \\"fullVersion\\": 1688523414,\\n      \\"fullUpdateTime\\": \\"2023-07-05 10:40:38\\",\\n      \\"incUpdateTime\\": \\"2023-07-05 10:58:33\\",\\n      \\"indexSize\\": 4689,\\n      \\"description\\": \\"备注\\",\\n      \\"dataSourceInfo\\": {\\n        \\"processPartitionCount\\": 2,\\n        \\"name\\": \\"ha-cn-pl32rf0****_test_api\\",\\n        \\"type\\": \\"odps\\",\\n        \\"domain\\": \\"vpc_hz_domain_2\\",\\n        \\"config\\": {\\n          \\"endpoint\\": \\"http://service.cn-hangzhou.maxcompute.aliyun-inc.com/api\\",\\n          \\"accessKey\\": \\"L***p\\",\\n          \\"accessSecret\\": \\"5**9a6\\",\\n          \\"project\\": \\"tisplus_dev\\",\\n          \\"partition\\": \\"ds=20231220\\",\\n          \\"table\\": \\"dump_odps_demo\\",\\n          \\"namespace\\": \\"TEST_dump_demo_sj_na61hunbu2_share_holo\\",\\n          \\"path\\": \\"http://test_opensearch/sift_oss_test.data\\",\\n          \\"ossPath\\": \\"/test_opensearch/sift_oss_test.data\\",\\n          \\"bucket\\": \\"ha3test-oss\\"\\n        },\\n        \\"saroConfig\\": {\\n          \\"namespace\\": \\"TEST_dump_demo_sj_na61hunbu2_share_holo\\",\\n          \\"tableName\\": \\"dump_odps_demo\\"\\n        },\\n        \\"autoBuildIndex\\": true\\n      }\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '获取索引列表',
      'description' => '## 方法

```
GET
```

## URI

```
/openapi/ha3/instances/{instanceId}/indexes?newMode={newMode}
```',
      'requestParamsDescription' => '

## 请求示例

﻿

```
GET /openapi/ha3/instances/ose-test1/indexes
```



',
      'responseParamsDescription' => '## 返回示例

正确返回
﻿

```
{
﻿
  "requestId": "38b079f1-7846-4226-8c90-3e2644b5c52b",
﻿
  "result": [
﻿
    {
﻿
      "name": "index1",
﻿
      "dataSource": "test_yyds_data1",
﻿
    },
﻿
    {
﻿
      "name": "index1",
﻿
      "dataSource": "test_yyds_data1",
﻿
    }
﻿
  ]
﻿
}
```',
    ),
    'RecoverIndex' => 
    array (
      'summary' => '从索引中恢复数据。',
      'path' => '/openapi/ha3/instances/{instanceId}/recover-index',
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
        'abilityTreeCode' => '144320',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREopensearchVHEWK3',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例id',
            'type' => 'string',
            'required' => true,
            'example' => 'ha-cn-pl32rf0****',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => 'body参数。',
            'type' => 'object',
            'properties' => 
            array (
              'dataSourceName' => 
              array (
                'title' => '数据源名称',
                'description' => '数据源名称',
                'type' => 'string',
                'required' => false,
                'example' => 'ha-cn-pl32rf0****_test_api',
              ),
              'indexName' => 
              array (
                'title' => '索引名称',
                'description' => '索引名称',
                'type' => 'string',
                'required' => false,
                'example' => 'test_api',
              ),
              'generation' => 
              array (
                'title' => 'generation',
                'description' => '索引全量版本',
                'type' => 'string',
                'required' => false,
                'example' => '1653018575',
              ),
              'buildDeployId' => 
              array (
                'title' => 'buildDeployId',
                'description' => '数据源离线部署id',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '277',
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
                'title' => 'id of request',
                'description' => 'id of request',
                'type' => 'string',
                'example' => '10D5E615-69F7-5F49-B850-00169ADE513C',
              ),
              'result' => 
              array (
                'title' => 'Map',
                'description' => 'Map',
                'type' => 'object',
                'example' => '{}',
              ),
            ),
          ),
        ),
        500 => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"10D5E615-69F7-5F49-B850-00169ADE513C\\",\\n  \\"result\\": {}\\n}","type":"json"}]',
      'title' => '从索引中恢复数据',
      'description' => '### 方法
`POST`
### URI
`/openapi/ha3/instances/{instanceId}/recover-index`',
      'requestParamsDescription' => '### 请求示例
`POST /openapi/ha3/instances/ha3_instances_id/recover-index`

```
{
  "generation": "1653018575",
  "dataSourceName":"test_yyds_data1",
  "buildDeployId":277,
  "indexName":"index_1"
}
```',
      'responseParamsDescription' => '### 返回示例

```
{
	"requestId": "0A6EB64B-B4C8-CF02-810F-E660812972FF",
  "result": []
}
```
详情可参考[响应结构](~~465311~~)',
    ),
    'CreateConfigDir' => 
    array (
      'path' => '/openapi/ha3/instances/{instanceId}/advanced-configs/{configName}/dir',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
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
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例 ID',
            'type' => 'string',
            'required' => true,
            'example' => 'ha-cn-pl32rf0****',
          ),
        ),
        1 => 
        array (
          'name' => 'configName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '配置名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'ha-cn-pl32rf0****@ha-cn-pl32rf0****_test_api@test_api@index_config_edit',
          ),
        ),
        2 => 
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
              'dirName' => 
              array (
                'title' => '目录名称',
                'description' => '目录名称',
                'type' => 'string',
                'required' => false,
                'example' => '/clusters',
              ),
              'parentFullPath' => 
              array (
                'title' => '上级文件路径',
                'description' => '上级文件路径',
                'type' => 'string',
                'required' => false,
                'example' => '/',
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
                'title' => 'id of request',
                'description' => 'id of request',
                'type' => 'string',
                'example' => 'E7B7D598-B080-5C8E-AA35-D43EC0D5F886',
              ),
              'result' => 
              array (
                'title' => 'Map',
                'description' => 'Map',
                'type' => 'object',
                'example' => '{}',
              ),
            ),
          ),
        ),
        500 => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"E7B7D598-B080-5C8E-AA35-D43EC0D5F886\\",\\n  \\"result\\": {}\\n}","type":"json"}]',
      'title' => '高级配置创建文件目录',
    ),
    'CreateConfigFile' => 
    array (
      'path' => '/openapi/ha3/instances/{instanceId}/advanced-configs/{configName}/file',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
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
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例id',
            'type' => 'string',
            'required' => true,
            'example' => 'ha-cn-pl32rf0****',
          ),
        ),
        1 => 
        array (
          'name' => 'configName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '配置名称',
            'type' => 'string',
            'required' => true,
            'example' => 'ha-cn-pl32rf0****@ha-cn-pl32rf0****_test_api@test_api@index_config_edit',
          ),
        ),
        2 => 
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
              'fileName' => 
              array (
                'title' => '目录名称',
                'description' => '目录名称',
                'type' => 'string',
                'required' => false,
                'example' => '/schemas/device_event_xt_schema.json',
              ),
              'parentFullPath' => 
              array (
                'title' => '上级文件路径',
                'description' => '上级文件路径',
                'type' => 'string',
                'required' => false,
                'example' => '/',
              ),
              'ossPath' => 
              array (
                'title' => 'oss存储地址',
                'description' => 'oss存储地址',
                'type' => 'string',
                'required' => false,
                'example' => 'oss://xxx/xxxx/xxx',
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
                'title' => 'id of request',
                'description' => 'id of request',
                'type' => 'string',
                'example' => 'FE03180A-0E29-5474-8A86-33F0683294A4',
              ),
              'result' => 
              array (
                'title' => 'Map',
                'description' => 'Map',
                'type' => 'object',
                'example' => '{}',
              ),
            ),
          ),
        ),
        500 => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"FE03180A-0E29-5474-8A86-33F0683294A4\\",\\n  \\"result\\": {}\\n}","type":"json"}]',
      'title' => '高级配置创建文件',
    ),
    'DeleteConfigDir' => 
    array (
      'path' => '/openapi/ha3/instances/{instanceId}/advanced-configs/{configName}/dir',
      'methods' => 
      array (
        0 => 'delete',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
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
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID',
            'type' => 'string',
            'required' => true,
            'example' => 'ha-cn-pl32rf0****',
          ),
        ),
        1 => 
        array (
          'name' => 'configName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '配置名称',
            'type' => 'string',
            'required' => true,
            'example' => 'ha-cn-pl32rf0****@ha-cn-pl32rf0****_test_api@test_api@index_config_edit',
          ),
        ),
        2 => 
        array (
          'name' => 'dirName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目录名称。',
            'type' => 'string',
            'required' => true,
            'example' => '/clusters',
          ),
        ),
        3 => 
        array (
          'name' => 'parentFullPath',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '上级目录的路径',
            'type' => 'string',
            'required' => true,
            'example' => '/',
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
                'title' => 'id of request',
                'description' => 'id of request',
                'type' => 'string',
                'example' => 'F43E8AB4-419C-5F4C-90D6-615590DFAA3C',
              ),
              'result' => 
              array (
                'title' => 'Map',
                'description' => 'Map',
                'type' => 'object',
                'example' => '{}',
              ),
            ),
          ),
        ),
        500 => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"F43E8AB4-419C-5F4C-90D6-615590DFAA3C\\",\\n  \\"result\\": {}\\n}","type":"json"}]',
      'title' => '删除高级配置目录',
    ),
    'DeleteConfigFile' => 
    array (
      'path' => '/openapi/ha3/instances/{instanceId}/advanced-configs/{configName}/file',
      'methods' => 
      array (
        0 => 'delete',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
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
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例id',
            'type' => 'string',
            'required' => true,
            'example' => 'ha-cn-pl32rf0****',
          ),
        ),
        1 => 
        array (
          'name' => 'configName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '配置名称',
            'type' => 'string',
            'required' => true,
            'example' => 'ha-cn-pl32rf0****@ha-cn-pl32rf0****_test_api@test_api@index_config_edit',
          ),
        ),
        2 => 
        array (
          'name' => 'fileName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件名称',
            'type' => 'string',
            'required' => true,
            'example' => '/schemas/automobile_vector_schema.json',
          ),
        ),
        3 => 
        array (
          'name' => 'parentFullPath',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '上级目录的路径',
            'type' => 'string',
            'required' => true,
            'example' => '/',
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
                'title' => 'id of request',
                'description' => 'id of request',
                'type' => 'string',
                'example' => '10D5E615-69F7-5F49-B850-00169ADE513C',
              ),
              'result' => 
              array (
                'title' => 'Map',
                'description' => 'Map',
                'type' => 'object',
                'example' => '{}',
              ),
            ),
          ),
        ),
        500 => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"10D5E615-69F7-5F49-B850-00169ADE513C\\",\\n  \\"result\\": {}\\n}","type":"json"}]',
      'title' => '删除高级配置文件',
    ),
    'ModifyAdvanceConfig' => 
    array (
      'path' => '/openapi/ha3/instances/{instanceId}/advanced-configs/{configName}',
      'methods' => 
      array (
        0 => 'put',
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
        'abilityTreeCode' => '173716',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREopensearch8WJIRU',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID',
            'type' => 'string',
            'required' => true,
            'example' => 'ha-cn-pl32rf0****',
          ),
        ),
        1 => 
        array (
          'name' => 'configName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '配置名称',
            'type' => 'string',
            'required' => true,
            'example' => 'ha-cn-pl32rf0****_offline_adv_edit',
          ),
        ),
        2 => 
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
              'name' => 
              array (
                'title' => '配置名称',
                'description' => '配置名称',
                'type' => 'string',
                'required' => false,
                'example' => 'ha-cn-pl32rf0****_offline_adv_edit
',
              ),
              'status' => 
              array (
                'title' => '配置状态 (drafting: 草稿, used: 线上使用, unused: 未使用, trash: 删除中)',
                'description' => '配置状态 (drafting: 草稿, used: 线上使用, unused: 未使用, trash: 删除中)',
                'type' => 'string',
                'required' => false,
                'example' => 'used',
              ),
              'updateTime' => 
              array (
                'title' => '更新时间',
                'description' => '更新时间',
                'type' => 'integer',
                'format' => 'int64',
                'required' => false,
                'example' => '2024-02-27T07:50:55Z',
              ),
              'desc' => 
              array (
                'title' => '高级配置描述信息',
                'description' => '高级配置描述信息',
                'type' => 'string',
                'required' => false,
                'example' => '自定义配置',
              ),
              'files' => 
              array (
                'title' => '文件名列表',
                'description' => '文件名列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '文件信息',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'name' => 
                    array (
                      'title' => '节点名称',
                      'description' => '节点名称',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'general',
                    ),
                    'fullPathName' => 
                    array (
                      'title' => '全路径名称',
                      'description' => '全路径名称',
                      'type' => 'string',
                      'required' => false,
                      'example' => '/cluster.json',
                    ),
                    'isDir' => 
                    array (
                      'title' => '是否是目录',
                      'description' => '是否是目录',
                      'type' => 'boolean',
                      'required' => false,
                      'example' => 'true',
                    ),
                    'isTemplate' => 
                    array (
                      'title' => '是否是模板',
                      'description' => '是否是模板',
                      'type' => 'boolean',
                      'required' => false,
                      'example' => 'true',
                    ),
                  ),
                  'required' => false,
                ),
                'required' => false,
              ),
              'content' => 
              array (
                'title' => '配置内容 http，git 请求时不为空',
                'description' => '配置内容 http，git 请求时不为空',
                'type' => 'string',
                'required' => false,
                'example' => '{\\"url\\":\\"http://xxxxxx.aliyuncs.com/outnet_hz/packages/xxxxx/opensearch_offline_plugins_xxxxx.tar\\"}',
              ),
              'contentType' => 
              array (
                'title' => '配置内容的类型 (FILE, GIT, HTTP, ODPS)',
                'description' => '配置内容的类型 (FILE, GIT, HTTP, ODPS)',
                'type' => 'string',
                'required' => false,
                'example' => 'FILE',
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
                'title' => 'id of request',
                'description' => 'id of request',
                'type' => 'string',
                'example' => '2AE63638-5420-56DC-BF59-37D8174039A0',
              ),
              'result' => 
              array (
                'title' => 'Map',
                'description' => 'Map',
                'type' => 'object',
                'example' => '{}',
              ),
            ),
          ),
        ),
        500 => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"2AE63638-5420-56DC-BF59-37D8174039A0\\",\\n  \\"result\\": {}\\n}","type":"json"}]',
      'title' => '修改http、git类型的文件内容',
    ),
    'DeleteAdvanceConfig' => 
    array (
      'summary' => '删除高级配置的详情。',
      'path' => '/openapi/ha3/instances/{instanceId}/advanced-configs/{configName}',
      'methods' => 
      array (
        0 => 'delete',
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
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '实例ID',
            'description' => '实例ID',
            'type' => 'string',
            'required' => true,
            'example' => 'ha-cn-pl32rf0****',
          ),
        ),
        1 => 
        array (
          'name' => 'configName',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '配置名称',
            'description' => '配置名称',
            'type' => 'string',
            'required' => false,
            'example' => 'ha-cn-pl32rf0****_offline_adv_v1',
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
                'title' => 'id of request',
                'description' => 'id of request',
                'type' => 'string',
                'example' => 'E7B7D598-B080-5C8E-AA35-D43EC0D5F886',
              ),
              'result' => 
              array (
                'title' => '结果',
                'description' => '结果',
                'type' => 'object',
                'example' => '{}',
              ),
            ),
          ),
        ),
        500 => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"E7B7D598-B080-5C8E-AA35-D43EC0D5F886\\",\\n  \\"result\\": {}\\n}","type":"json"}]',
      'title' => '删除高级配置的详情',
      'description' => '## 方法

```
DELETE
```

## URI

```
/openapi/ha3/instances/{instanceId}/advanced-configs/{configName}
```


',
      'requestParamsDescription' => '## 请求示例

﻿

```
DELETE  /openapi/ha3/instances/ose-test1/advanced-configs/my_config_name
```
',
      'responseParamsDescription' => '## 返回示例

正确返回
﻿

```
{
﻿
  "requestId": "e1eef569-1ff7-4bf8-acf7-1cecca9894ce",
﻿
  "result": []
﻿
}
```
详情可参考[响应结构](~~465311~~)',
    ),
    'ModifyAdvanceConfigFile' => 
    array (
      'summary' => '修改词典。',
      'path' => '/openapi/ha3/instances/{instanceId}/advanced-configs/{configName}/file',
      'methods' => 
      array (
        0 => 'put',
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
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID',
            'type' => 'string',
            'required' => true,
            'example' => 'ha-cn-pl32rf0****',
          ),
        ),
        1 => 
        array (
          'name' => 'configName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '配置名称',
            'type' => 'string',
            'required' => true,
            'example' => 'ha-cn-pl32rf0****_online_config_edit',
          ),
        ),
        2 => 
        array (
          'name' => 'fileName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件名',
            'type' => 'string',
            'required' => true,
            'example' => '/qrs.json',
          ),
        ),
        3 => 
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
              'content' => 
              array (
                'title' => '文件内容--词典配置',
                'description' => '文件内容',
                'type' => 'string',
                'required' => false,
                'example' => '{\\"url\\":\\"http://xxxxxx.aliyuncs.com/outnet_hz/packages/xxxxx/opensearch_offline_plugins_xxxxx.tar\\"}',
              ),
              'variables' => 
              array (
                'title' => '变量值--在线配置',
                'description' => '变量列表',
                'type' => 'object',
                'required' => false,
                'additionalProperties' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'disableModify' => 
                    array (
                      'type' => 'boolean',
                      'required' => false,
                      'description' => '是否不允许修改',
                      'example' => 'false',
                    ),
                    'isModify' => 
                    array (
                      'type' => 'boolean',
                      'required' => false,
                      'description' => '是否被修改过',
                      'example' => 'false',
                    ),
                    'value' => 
                    array (
                      'type' => 'string',
                      'required' => false,
                      'example' => 'qrs_connection_timeout',
                      'description' => '变量值',
                    ),
                    'description' => 
                    array (
                      'type' => 'string',
                      'required' => false,
                      'description' => '描述',
                      'example' => '超时时间',
                    ),
                    'templateValue' => 
                    array (
                      'type' => 'string',
                      'required' => false,
                      'description' => '模板值',
                      'example' => '800',
                    ),
                    'type' => 
                    array (
                      'title' => 'NORMAL, FUNCTION',
                      'description' => '类型：
- NORMAL:  普通变量
- FUNCTION:function变量',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'NORMAL',
                    ),
                    'funcValue' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'funcClassName' => 
                        array (
                          'type' => 'string',
                          'required' => false,
                          'example' => 'ModifyFile',
                          'description' => '方法类名',
                        ),
                        'template' => 
                        array (
                          'type' => 'string',
                          'required' => false,
                          'description' => '模板',
                          'example' => 'test-template',
                        ),
                      ),
                      'required' => false,
                      'description' => '函数变量',
                    ),
                  ),
                  'description' => '子变量信息',
                ),
              ),
            ),
            'required' => false,
            'example' => '{}',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'title' => 'id of request',
                'description' => 'id of request',
                'type' => 'string',
                'example' => '93A9E542-8CF8-5BA6-99AB-94C0FE520429',
              ),
              'result' => 
              array (
                'title' => 'Map',
                'description' => '结果',
                'type' => 'object',
                'example' => '{}',
              ),
            ),
          ),
        ),
        500 => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"93A9E542-8CF8-5BA6-99AB-94C0FE520429\\",\\n  \\"result\\": {}\\n}","type":"json"}]',
      'title' => '修改词典',
      'description' => '## 方法

```
put
```

## URI

```
/openapi/ha3/instances/{instanceId}/advanced-configs/{configName}/file?fileName={fileName}
```
',
      'requestParamsDescription' => '

## 请求示例

﻿

```
PUT /openapi/ha3/instances/{instanceId}/advancedConfigs/{configName}/file?fileName=/root/test.txt
```

﻿

```
{
﻿
  "content": "",
﻿
  "variables": {
﻿
    "qrs_connection_timeout": {
﻿
      "description": "",
﻿
      "disableModify": false,
﻿
      "isModify": true,
﻿
      "type": "NORMAL",
﻿
      "value": "800"
﻿
    }
﻿
  }
﻿
}
```


',
      'responseParamsDescription' => '## 返回示例

正确返回
﻿

```
{
﻿
  "requestId": "65911539-5a8b-4bce-96a5-4d608900dc46",
﻿
  "result": []
﻿
}
```
详情可参考[响应结构](~~465311~~)',
    ),
    'PublishAdvanceConfig' => 
    array (
      'summary' => '发布高级版本。',
      'path' => '/openapi/ha3/instances/{instanceId}/advanced-configs/{configName}/actions/publish',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'abilityTreeCode' => '104708',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREopensearchA6GC80',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID',
            'type' => 'string',
            'required' => true,
            'example' => 'ha-cn-pl32rf0****',
          ),
        ),
        1 => 
        array (
          'name' => 'configName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '配置名称',
            'type' => 'string',
            'required' => true,
            'example' => 'ha-cn-pl32rf0****_online_config_v3',
          ),
        ),
        2 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求结构。',
            'type' => 'object',
            'properties' => 
            array (
              'desc' => 
              array (
                'description' => '高级配置描述信息',
                'type' => 'string',
                'required' => false,
                'example' => '自定义配置',
              ),
              'files' => 
              array (
                'description' => '文件信息',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '文件信息',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ossPath' => 
                    array (
                      'description' => 'oss文件路径',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'oss://opensearch/test.json',
                    ),
                    'operateType' => 
                    array (
                      'description' => '操作类型：UPDATE:更新；DELETE:删除；默认UPDATE',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'UPDATE',
                    ),
                    'parentFullPath' => 
                    array (
                      'description' => '上级文件路径',
                      'type' => 'string',
                      'required' => false,
                      'example' => '/',
                    ),
                    'fileName' => 
                    array (
                      'description' => '文件名称',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'vector_question_schema.json',
                    ),
                    'dirName' => 
                    array (
                      'description' => '目录名称。',
                      'type' => 'string',
                      'required' => false,
                      'example' => '/clusters',
                    ),
                    'config' => 
                    array (
                      'description' => '高级配置信息',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'content' => 
                        array (
                          'description' => '文件内容',
                          'type' => 'string',
                          'required' => false,
                          'example' => '
{\\"url\\":\\"http://xxxxxx.aliyuncs.com/outnet_hz/packages/xxxxx/opensearch_offline_plugins_xxxxx.tar\\"}',
                        ),
                        'variables' => 
                        array (
                          'description' => '变量列表',
                          'type' => 'object',
                          'required' => false,
                          'additionalProperties' => 
                          array (
                            'type' => 'object',
                            'properties' => 
                            array (
                              'description' => 
                              array (
                                'type' => 'string',
                                'required' => false,
                                'description' => '变量描述',
                                'example' => '自定义变量',
                              ),
                              'disableModify' => 
                              array (
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'true',
                                'description' => '是否可被用户修改',
                              ),
                              'isModify' => 
                              array (
                                'type' => 'boolean',
                                'required' => false,
                                'description' => '变量是否被修改过',
                                'example' => 'true',
                              ),
                              'type' => 
                              array (
                                'type' => 'string',
                                'required' => false,
                                'example' => 'NORMAL',
                                'description' => '类型：普通变量-NORMAL； function变量-FUNCTION',
                              ),
                              'value' => 
                              array (
                                'type' => 'string',
                                'required' => false,
                                'example' => 'test',
                                'description' => '变量值',
                              ),
                            ),
                            'description' => '变量',
                          ),
                        ),
                      ),
                      'required' => false,
                    ),
                  ),
                  'required' => false,
                ),
                'required' => false,
              ),
            ),
            'required' => false,
            'example' => '{\\"desc\\":\\"new version\\"}',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'title' => 'id of request',
                'description' => '请求id',
                'type' => 'string',
                'example' => '10D5E615-69F7-5F49-B850-00169ADE513C',
              ),
              'result' => 
              array (
                'title' => 'Map',
                'description' => '返回结果。',
                'type' => 'object',
                'example' => '{}',
              ),
            ),
          ),
        ),
        500 => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"10D5E615-69F7-5F49-B850-00169ADE513C\\",\\n  \\"result\\": {}\\n}","type":"json"}]',
      'title' => '发布高级版本',
      'description' => '## 方法
`POST`

## URI
`/openapi/ha3/instances/{instanceId}/advanced-configs/{configName}/actions/publish`',
      'requestParamsDescription' => '## 请求示例
```
POST /openapi/ha3/instances/ose-test1/advanced-configs/test/actions/publish

{
    "desc": "new version"
}
```',
      'responseParamsDescription' => '## 返回示例
### 正确返回
```json
{
  "requestId": "65911539-5a8b-4bce-96a5-4d608900dc46",
  "result": {}
}
```
详情可参考[响应结构](~~465311~~)',
    ),
    'GetAdvanceConfig' => 
    array (
      'path' => '/openapi/ha3/instances/{instanceId}/advanced-configs/{configName}',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
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
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID',
            'type' => 'string',
            'required' => true,
            'example' => 'ha-cn-pl32rf0****',
          ),
        ),
        1 => 
        array (
          'name' => 'type',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'ONLINE: 在线配置, ONLINE_CAVA, ONLINE_PLUGIN, ONLINE_QUERY, OFFLINE_DICT: 离线配置, OFFLINE_TABLE, OFFLINE_COMMON, OFFLINE_PLUGIN, OFFLINE_INDEX',
            'description' => '- -ONLINE: 在线配置, 
- -ONLINE_CAVA: 在线cava配置, 
- -ONLINE_PLUGIN: 在线插件, 
- -ONLINE_QUERY: 查询配置, 
- -OFFLINE_DICT: 离线配置, 
- -OFFLINE_TABLE: 离线表, 
- -OFFLINE_COMMON: 离线配置, 
- -OFFLINE_PLUGIN: 离线插件, 
- -OFFLINE_INDEX: 索引配置',
            'type' => 'string',
            'required' => false,
            'example' => 'ONLINE',
            'default' => 'OFFLINE_DICT',
          ),
        ),
        2 => 
        array (
          'name' => 'configName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '配置名称',
            'type' => 'string',
            'required' => true,
            'example' => '
ha-cn-pl32rf0****_offline_adv_edit',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'title' => 'id of request',
                'description' => 'id of request',
                'type' => 'string',
                'example' => 'E45380E8-994A-5402-9806-F114B3295FCF',
              ),
              'result' => 
              array (
                'title' => 'AdvanceConfig',
                'description' => '结果',
                'type' => 'object',
                'properties' => 
                array (
                  'updateTime' => 
                  array (
                    'title' => '更新时间',
                    'description' => '更新时间',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '2024-05-21 16:05:26',
                  ),
                  'desc' => 
                  array (
                    'title' => '高级配置描述信息',
                    'description' => '描述',
                    'type' => 'string',
                    'example' => '自定义备注信息',
                  ),
                  'files' => 
                  array (
                    'title' => '文件名列表',
                    'description' => '文件列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '文件信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'name' => 
                        array (
                          'description' => '名称',
                          'type' => 'string',
                          'example' => 'ha-cn-pl32rf0****_qrs',
                        ),
                        'fullPathName' => 
                        array (
                          'description' => '文件路径',
                          'type' => 'string',
                          'example' => '/cluster',
                        ),
                        'isDir' => 
                        array (
                          'description' => '是目录',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'isTemplate' => 
                        array (
                          'description' => '是容器',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                      ),
                    ),
                  ),
                  'content' => 
                  array (
                    'title' => '配置内容 http，git 请求时不为空',
                    'description' => '配置内容 http，git 请求时不为空',
                    'type' => 'string',
                    'example' => '{\\"url\\":\\"http://xxxxxx.aliyuncs.com/outnet_hz/packages/xxxxx/opensearch_offline_plugins_xxxxx.tar\\"}',
                  ),
                  'contentType' => 
                  array (
                    'title' => '配置内容的类型 (FILE, GIT, HTTP, ODPS)',
                    'description' => '配置内容的类型 (FILE, GIT, HTTP, ODPS)',
                    'type' => 'string',
                    'example' => 'FILE',
                  ),
                  'name' => 
                  array (
                    'title' => '配置名称',
                    'description' => '配置名称',
                    'type' => 'string',
                    'example' => 'my_index',
                  ),
                  'status' => 
                  array (
                    'title' => '配置状态 (drafting: 草稿, used: 线上使用, unused: 未使用, trash: 删除中)',
                    'description' => '配置状态 (drafting: 草稿, used: 线上使用, unused: 未使用, trash: 删除中)',
                    'type' => 'string',
                    'example' => 'used',
                  ),
                ),
              ),
            ),
          ),
        ),
        500 => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"E45380E8-994A-5402-9806-F114B3295FCF\\",\\n  \\"result\\": {\\n    \\"updateTime\\": 0,\\n    \\"desc\\": \\"自定义备注信息\\",\\n    \\"files\\": [\\n      {\\n        \\"name\\": \\"ha-cn-pl32rf0****_qrs\\",\\n        \\"fullPathName\\": \\"/cluster\\",\\n        \\"isDir\\": true,\\n        \\"isTemplate\\": true\\n      }\\n    ],\\n    \\"content\\": \\"{\\\\\\\\\\\\\\"url\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"http://xxxxxx.aliyuncs.com/outnet_hz/packages/xxxxx/opensearch_offline_plugins_xxxxx.tar\\\\\\\\\\\\\\"}\\",\\n    \\"contentType\\": \\"FILE\\",\\n    \\"name\\": \\"my_index\\",\\n    \\"status\\": \\"used\\"\\n  }\\n}","type":"json"}]',
      'title' => '获取词典信息',
      'summary' => '获取词典信息。',
      'description' => '## 方法

```
GET
```

## URI

```
/openapi/ha3/instances/{instanceId}/advanced-configs/{configName}
```
',
      'requestParamsDescription' => '## 请求示例

```
GET  /openapi/ha3/instances/ose-test1/advanced-configs/my_config_name
```',
      'responseParamsDescription' => '



## 返回示例

正确返回

```
{
  "requestId": "e1eef569-1ff7-4bf8-acf7-1cecca9894ce",
  "result": {
    "name": "my_index",
    "status": "drafting",
    "updateTime": 1631070464000,
    "desc":"test",
    "files": [
      {
        "fullPathName": "/",
        "isDir": true,
        "isTemplate": true,
        "name": "cava"
      },
      {
        "fullPathName": "/",
        "isDir": true,
        "isTemplate": true,
        "name": "cava"
      }
    ]    
  }
}
```

',
    ),
    'GetAdvanceConfigFile' => 
    array (
      'summary' => '获取词典信息。',
      'path' => '/openapi/ha3/instances/{instanceId}/advanced-configs/{configName}/file',
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
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '实例ID',
            'description' => '实例ID',
            'type' => 'string',
            'required' => true,
            'example' => 'ha-cn-pl32rf0****',
          ),
        ),
        1 => 
        array (
          'name' => 'configName',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '配置名称',
            'description' => '配置名称',
            'type' => 'string',
            'required' => true,
            'example' => 'ha-cn-pl32rf0****_online_config_v5',
          ),
        ),
        2 => 
        array (
          'name' => 'fileName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '文件名称',
            'description' => '文件名称',
            'type' => 'string',
            'required' => true,
            'example' => '/intervene_dict/chn_ecommerce_general.dict',
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
                'title' => 'id of request',
                'description' => 'id of request',
                'type' => 'string',
                'example' => '10D5E615-69F7-5F49-B850-00169ADE513C',
              ),
              'result' => 
              array (
                'title' => '结果',
                'description' => '结果',
                'type' => 'object',
                'properties' => 
                array (
                  'content' => 
                  array (
                    'title' => '文件内容',
                    'description' => '文件内容',
                    'type' => 'string',
                    'example' => '{\\"url\\":\\"http://xxxxxx.aliyuncs.com/outnet_hz/packages/xxxxx/opensearch_offline_plugins_xxxxx.tar\\"}',
                  ),
                ),
              ),
            ),
          ),
        ),
        500 => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"10D5E615-69F7-5F49-B850-00169ADE513C\\",\\n  \\"result\\": {\\n    \\"content\\": \\"{\\\\\\\\\\\\\\"url\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"http://xxxxxx.aliyuncs.com/outnet_hz/packages/xxxxx/opensearch_offline_plugins_xxxxx.tar\\\\\\\\\\\\\\"}\\"\\n  }\\n}","type":"json"}]',
      'title' => '获取词典信息',
      'description' => '## 方法

```
GET
```

## URI

```
/openapi/ha3/instances/{instanceId}/advanced-configs/{configName}/file?fileName={fileName}
```
',
      'requestParamsDescription' => '

## 请求示例

﻿

```
GET  /openapi/ha3/instances/ose-test1/advanced-configs/my_config_name?fileName=/root/test.txt
```


',
      'responseParamsDescription' => '## 返回示例

正确返回
﻿

```
{
﻿
  "requestId": "0A6EB64B-B4C8-CF02-810F-E660812972FF",
﻿
  "result": {
﻿
    "content": "",
﻿
    "variables": {
﻿
      "qrs_request_compress_type": {
﻿
        "description": "",
﻿
        "disableModify": false,
﻿
        "isModify": false,
﻿
        "type": "NORMAL",
﻿
        "value": "z_speed_compress"
﻿
      },
﻿
      "qrs_connection_timeout": {
﻿
        "description": "",
﻿
        "disableModify": false,
﻿
        "isModify": true,
﻿
        "type": "NORMAL",
﻿
        "value": "800"
﻿
      },
﻿
      "qrs_return_hits_limit": {
﻿
        "description": "",
﻿
        "disableModify": false,
﻿
        "isModify": false,
﻿
        "type": "NORMAL",
﻿
        "value": "5000"
﻿
      },
﻿
      "primary_table_name": {
﻿
        "disableModify": false,
﻿
        "funcValue": {
﻿
          "funcClassName": "com.taobao.search.moss.resource.api.plugin.config.function.impl.MainOnlineTableFunction"
﻿
        },
﻿
        "isModify": false,
﻿
        "type": "FUNCTION",
﻿
        "value": "$primary_table_name"
﻿
      },
﻿
      "__cluster_name": {
﻿
        "disableModify": false,
﻿
        "isModify": true,
﻿
        "type": "NORMAL",
﻿
        "value": "general"
﻿
      }
﻿
    }
﻿
  }
﻿
}
```
',
    ),
    'ListAdvanceConfigDir' => 
    array (
      'path' => '/openapi/ha3/instances/{instanceId}/advanced-configs/{configName}/dir',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
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
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例id。',
            'type' => 'string',
            'required' => true,
            'example' => 'ha-cn-pl32rf0****',
          ),
        ),
        1 => 
        array (
          'name' => 'configName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '配置名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'ha-cn-pl32rf0****_online_config_v3',
          ),
        ),
        2 => 
        array (
          'name' => 'dirName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目录名称。',
            'type' => 'string',
            'required' => true,
            'example' => '/zones/general',
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
                'title' => 'id of request',
                'description' => '请求ID',
                'type' => 'string',
                'example' => '2AE63638-5420-56DC-BF59-37D8174039A0',
              ),
              'result' => 
              array (
                'title' => 'List',
                'description' => '高级配文件列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '返回结果',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'name' => 
                    array (
                      'description' => '集群名称',
                      'type' => 'string',
                      'example' => 'hz_pre_vpc_domain_1',
                    ),
                    'fullPathName' => 
                    array (
                      'description' => '绝对路径',
                      'type' => 'string',
                      'example' => '/path/wpd/nae',
                    ),
                    'isDir' => 
                    array (
                      'description' => '是否为目录。取值：-true：是-false：否',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'isTemplate' => 
                    array (
                      'description' => '是否是模板。取值：-**true**：是-**false**：否',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        500 => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"2AE63638-5420-56DC-BF59-37D8174039A0\\",\\n  \\"result\\": [\\n    {\\n      \\"name\\": \\"hz_pre_vpc_domain_1\\",\\n      \\"fullPathName\\": \\"/path/wpd/nae\\",\\n      \\"isDir\\": true,\\n      \\"isTemplate\\": true\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '获取高级配置目录下文件列表',
      'summary' => '获取高级配置目录下文件列表。',
      'description' => '## 方法
`GET`

## URI
`/openapi/ha3/instances/{instanceId}/advanced-configs/{configName}/dir?dirName={dirName}`',
      'requestParamsDescription' => '## 请求示例
`GET /openapi/ha3/instances/ose-test1/advanced-configs`',
      'responseParamsDescription' => '## 返回示例
### 正确返回
```json
{
  "requestId": "0A6EB64B-B4C8-CF02-810F-E660812972FF",
  "result": [
    {
      "name": "file_name_1",
      "fullPathName": "/path/wpd/nae",
      "isDir": true,
      "isTemplate": true
    }
  ]
}
```',
    ),
    'ListAdvanceConfigs' => 
    array (
      'path' => '/openapi/ha3/instances/{instanceId}/advanced-configs',
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
        'operationType' => 'list',
        'abilityTreeCode' => '104702',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREopensearchA6GC80',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID',
            'type' => 'string',
            'required' => true,
            'example' => 'ha-cn-pl32rf0****',
          ),
        ),
        1 => 
        array (
          'name' => 'type',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'ONLINE: 在线配置, ONLINE_CAVA, ONLINE_PLUGIN, ONLINE_QUERY, OFFLINE_DICT: 离线配置, OFFLINE_TABLE, OFFLINE_COMMON, OFFLINE_PLUGIN, OFFLINE_INDEX',
            'description' => '高级配置类型：
    - online
    - offline（默认）',
            'type' => 'string',
            'required' => false,
            'example' => 'online',
            'default' => 'OFFLINE_DICT',
          ),
        ),
        2 => 
        array (
          'name' => 'dataSourceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据源名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'ha-cn-pl32rf0****_test_api
',
          ),
        ),
        3 => 
        array (
          'name' => 'indexName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '索引名称',
            'type' => 'string',
            'required' => false,
            'example' => 'test_api',
          ),
        ),
        4 => 
        array (
          'name' => 'newMode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否为新版本控制台页面',
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
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'title' => 'id of request',
                'description' => '请求id。',
                'type' => 'string',
                'example' => '4FB0325E-8C37-5525-96AC-0333523170A3',
              ),
              'result' => 
              array (
                'title' => 'List',
                'description' => '高级配置列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '返回结果。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'updateTime' => 
                    array (
                      'title' => '更新时间',
                      'description' => '更新时间',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1631070464000',
                    ),
                    'desc' => 
                    array (
                      'title' => '高级配置描述信息',
                      'description' => '描述',
                      'type' => 'string',
                      'example' => '自定义描述',
                    ),
                    'files' => 
                    array (
                      'title' => '文件名列表',
                      'description' => '文件名列表',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '文件信息。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'name' => 
                          array (
                            'description' => '文件名称',
                            'type' => 'string',
                            'example' => 'file_name_1',
                          ),
                          'fullPathName' => 
                          array (
                            'description' => '绝对路径',
                            'type' => 'string',
                            'example' => '/path/wpd/nae',
                          ),
                          'isDir' => 
                          array (
                            'description' => '是否为目录。取值：-true：是-false：否',
                            'type' => 'boolean',
                            'example' => 'true',
                          ),
                          'isTemplate' => 
                          array (
                            'description' => '是否是模板。取值：-true：是-false：否',
                            'type' => 'boolean',
                            'example' => 'true',
                          ),
                        ),
                      ),
                    ),
                    'content' => 
                    array (
                      'title' => '配置内容 http，git 请求时不为空',
                      'description' => '配置内容 http，git 请求时不为空',
                      'type' => 'string',
                      'example' => '{\\"url\\":\\"http://xxxxxx.aliyuncs.com/outnet_hz/packages/xxxxx/opensearch_offline_plugins_xxxxx.tar\\"}',
                    ),
                    'contentType' => 
                    array (
                      'title' => '配置内容的类型 (FILE, GIT, HTTP, ODPS)',
                      'description' => '配置内容的类型（FILE, GIT, HTTP, ODPS）',
                      'type' => 'string',
                      'example' => 'FILE',
                    ),
                    'name' => 
                    array (
                      'title' => '配置名称',
                      'description' => '高级配置名称',
                      'type' => 'string',
                      'example' => 'my_index',
                    ),
                    'status' => 
                    array (
                      'title' => '配置状态 (drafting: 草稿, used: 线上使用, unused: 未使用, trash: 删除中)',
                      'description' => '高级配置状态
drafting: 草稿
used: 使用中
unused: 未使用
trash: 删除中',
                      'type' => 'string',
                      'example' => 'drafting',
                    ),
                    'creator' => 
                    array (
                      'description' => '创建者userid。',
                      'type' => 'string',
                      'example' => '123456',
                    ),
                    'advanceConfigType' => 
                    array (
                      'description' => '- -ONLINE: 在线配置, 
- -ONLINE_CAVA: 在线cava配置, 
- -ONLINE_PLUGIN: 在线插件, 
- -ONLINE_QUERY: 查询配置, 
- -OFFLINE_DICT: 离线配置, 
- -OFFLINE_TABLE: 离线表, 
- -OFFLINE_COMMON: 离线配置, 
- -OFFLINE_PLUGIN: 离线插件, 
- -OFFLINE_INDEX: 索引配置',
                      'type' => 'string',
                      'example' => 'ONLINE',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        500 => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"4FB0325E-8C37-5525-96AC-0333523170A3\\",\\n  \\"result\\": [\\n    {\\n      \\"updateTime\\": 1631070464000,\\n      \\"desc\\": \\"自定义描述\\",\\n      \\"files\\": [\\n        {\\n          \\"name\\": \\"file_name_1\\",\\n          \\"fullPathName\\": \\"/path/wpd/nae\\",\\n          \\"isDir\\": true,\\n          \\"isTemplate\\": true\\n        }\\n      ],\\n      \\"content\\": \\"{\\\\\\\\\\\\\\"url\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"http://xxxxxx.aliyuncs.com/outnet_hz/packages/xxxxx/opensearch_offline_plugins_xxxxx.tar\\\\\\\\\\\\\\"}\\",\\n      \\"contentType\\": \\"FILE\\",\\n      \\"name\\": \\"my_index\\",\\n      \\"status\\": \\"drafting\\",\\n      \\"creator\\": \\"123456\\",\\n      \\"advanceConfigType\\": \\"ONLINE\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '获取高级配置列表',
      'summary' => '获取高级配置列表。',
      'description' => '## 方法
`GET`

## URI
`/openapi/ha3/instances/{instanceId}/advanced-configs?type=online`',
      'requestParamsDescription' => '## 请求示例
`GET /openapi/ha3/instances/ose-test1/advanced-configs`
',
      'responseParamsDescription' => '## 返回示例
### 正确返回
```json
{
  "requestId": "0A6EB64B-B4C8-CF02-810F-E660812972FF",
  "result": [
    {
      "name": "my_index",
      "status": "drafting",
      "updateTime": 1631070464000,
      "desc":"test",
      "files":[
        {
          "name": "file_name_1",
          "fullPathName": "/path/wpd/nae",
          "isDir": true,
          "isTemplate": true
        }
      ]
    },
    {
      "name": "my_index2",
      "status": "drafting",
      "updateTime": 1631070464000,
      "desc":"test",
      "files":[
        {
          "name": "file_name_1",
          "fullPathName": "/path/wpd/nae",
          "isDir": true,
          "isTemplate": true
        }
      ]
    }
  ]
}
```',
    ),
    'ListSchemas' => 
    array (
      'summary' => '通过数据源配置获取schema信息',
      'path' => '/openapi/ha3/instances/{instanceId}/schemas',
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
        'operationType' => 'list',
        'abilityTreeCode' => '186763',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREopensearchVHEWK3',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'type',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'odps, swift, saro, oss, unKnow',
            'description' => 'odps, swift, saro, oss, unKnow',
            'type' => 'string',
            'required' => true,
            'example' => 'odps',
          ),
        ),
        1 => 
        array (
          'name' => 'endpoint',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'odps endpoint',
            'type' => 'string',
            'required' => false,
            'example' => 'http://service.cn-hangzhou.maxcompute.aliyun-inc.com/api',
          ),
        ),
        2 => 
        array (
          'name' => 'accessKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'odps数据源ak',
            'type' => 'string',
            'required' => false,
            'example' => 'L***p',
          ),
        ),
        3 => 
        array (
          'name' => 'accessSecret',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'odps数据源as',
            'type' => 'string',
            'required' => false,
            'example' => '5**9a6',
          ),
        ),
        4 => 
        array (
          'name' => 'project',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'odps数据源项目名称',
            'type' => 'string',
            'required' => false,
            'example' => 'sec_odps',
          ),
        ),
        5 => 
        array (
          'name' => 'partition',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据分片',
            'type' => 'string',
            'required' => false,
            'example' => 'dt=20230520',
          ),
        ),
        6 => 
        array (
          'name' => 'table',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'saro、odps数据源表名',
            'type' => 'string',
            'required' => false,
            'example' => 'item',
          ),
        ),
        7 => 
        array (
          'name' => 'namespace',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'saro数据源的namespace',
            'type' => 'string',
            'required' => false,
            'example' => 'imm',
          ),
        ),
        8 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例id',
            'type' => 'string',
            'required' => true,
            'example' => 'ha-cn-pl32rf0****',
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
                'title' => 'id of request',
                'description' => 'id of request',
                'type' => 'string',
                'example' => 'FE03180A-0E29-5474-8A86-33F0683294A4',
              ),
              'result' => 
              array (
                'title' => 'Object',
                'description' => 'Object',
                'type' => 'any',
                'example' => '{}',
              ),
            ),
          ),
        ),
        500 => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"FE03180A-0E29-5474-8A86-33F0683294A4\\",\\n  \\"result\\": \\"{}\\"\\n}","type":"json"}]',
      'title' => '根据数据同步配置获取schema信息',
    ),
    'ModifyDataSourceDeploy' => 
    array (
      'summary' => '修改数据源部署信息',
      'path' => '/openapi/ha3/instances/{instanceId}/data-sources/{dataSourceName}/deploys/{deployName}',
      'methods' => 
      array (
        0 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
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
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID',
            'type' => 'string',
            'required' => true,
            'example' => 'ha-cn-pl32rf0****',
          ),
        ),
        1 => 
        array (
          'name' => 'deployName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '机房',
            'type' => 'string',
            'required' => true,
            'example' => 'vpc_hz_domain_1',
          ),
        ),
        2 => 
        array (
          'name' => 'dataSourceName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '数据源名称',
            'type' => 'string',
            'required' => true,
            'example' => 'ha-cn-pl32rf0****_test_api',
          ),
        ),
        3 => 
        array (
          'name' => 'generationId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '索引全量版本',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1708674867',
          ),
        ),
        4 => 
        array (
          'name' => 'dryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否dryRun创建（仅校验数据源是否合法）。取值：-true 是 -false 否',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
            'default' => 'false',
          ),
        ),
        5 => 
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
              'storage' => 
              array (
                'description' => '数据源信息',
                'type' => 'object',
                'properties' => 
                array (
                  'endpoint' => 
                  array (
                    'title' => 'odps相关',
                    'description' => 'odps endpoint',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'http://service.cn-hangzhou.maxcompute.aliyun-inc.com/api',
                  ),
                  'accessKey' => 
                  array (
                    'description' => 'odps数据源ak',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'L***p',
                  ),
                  'accessSecret' => 
                  array (
                    'description' => 'odps数据源ak secret',
                    'type' => 'string',
                    'required' => false,
                    'example' => '5**9a6',
                  ),
                  'project' => 
                  array (
                    'description' => 'odps数据源项目名称',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'kubenest',
                  ),
                  'partition' => 
                  array (
                    'description' => '分区信息',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'ds=20220713',
                  ),
                  'table' => 
                  array (
                    'title' => 'saro、odps相关',
                    'description' => 'saro、odps相关',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'item',
                  ),
                  'namespace' => 
                  array (
                    'title' => 'saro相关',
                    'description' => 'saro相关',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'dp-dev',
                  ),
                  'path' => 
                  array (
                    'title' => 'hdfs相关',
                    'description' => 'hdfs相关',
                    'type' => 'string',
                    'required' => false,
                    'example' => '/ude_jobs/iflow_offline_data_access',
                  ),
                  'ossPath' => 
                  array (
                    'title' => 'oss数据源相关',
                    'description' => 'oss数据源相关',
                    'type' => 'string',
                    'required' => false,
                    'example' => '/opensearch',
                  ),
                  'bucket' => 
                  array (
                    'description' => 'Bucket名称。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'test-bucket',
                  ),
                ),
                'required' => false,
              ),
              'autoBuildIndex' => 
              array (
                'title' => '是否开启自动全量',
                'description' => '是否开启自动全量',
                'type' => 'boolean',
                'required' => false,
                'example' => 'true',
              ),
              'processor' => 
              array (
                'description' => '进程参数',
                'type' => 'object',
                'properties' => 
                array (
                  'args' => 
                  array (
                    'title' => '进程启动参数',
                    'description' => '进程启动参数',
                    'type' => 'string',
                    'required' => false,
                    'example' => '{
	"processInfos": [],
	"groupId": "opensearch",
	"containerConfigs": [],
	"priority": {
		"minor_priority": 0,
		"major_priority": 64
	}
}',
                  ),
                  'resource' => 
                  array (
                    'title' => '资源信息',
                    'description' => '资源信息',
                    'type' => 'string',
                    'required' => false,
                    'example' => '[{
	"_bs_role": "processor.*.inc",
	"priority": {
		"major_priority": 32,
		"minor_priority": 0
	},
	"slotResources": [{
		"slotResources": [{
			"amount": 200,
			"name": "cpu"
		}, {
			"amount": 8192,
			"name": "mem"
		}, {
			"amount": 0,
			"name": "T4"
		}, {
			"amount": 10,
			"type": "SCALAR",
			"name": "disk_ratio_9999"
		}, {
			"amount": 20480,
			"type": "SCALAR",
			"name": "disk_size_9999"
		}]
	}]
}]',
                  ),
                ),
                'required' => false,
              ),
              'extend' => 
              array (
                'description' => '扩展信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'saro' => 
                  array (
                    'description' => 'saro数据源信息',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'path' => 
                      array (
                        'description' => '路径',
                        'type' => 'string',
                        'required' => false,
                        'example' => '/',
                      ),
                      'version' => 
                      array (
                        'description' => '版本号',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1',
                      ),
                    ),
                    'required' => false,
                  ),
                  'hdfs' => 
                  array (
                    'description' => 'hdfs信息',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'path' => 
                      array (
                        'description' => 'hdfs数据源路径。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ymsh-service/src/main/java/cn/ymsh/util/jd',
                      ),
                    ),
                    'required' => false,
                  ),
                  'odps' => 
                  array (
                    'description' => 'odps数据源信息',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'partitions' => 
                      array (
                        'description' => '数据源的分区信息',
                        'type' => 'object',
                        'required' => false,
                        'additionalProperties' => 
                        array (
                          'type' => 'string',
                          'description' => '数据源的分区信息',
                          'example' => 'ds=20230824',
                        ),
                      ),
                    ),
                    'required' => false,
                  ),
                  'oss' => 
                  array (
                    'description' => 'oss信息',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'path' => 
                      array (
                        'description' => 'oss数据源路径',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'oss://test',
                      ),
                    ),
                    'required' => false,
                  ),
                ),
                'required' => false,
              ),
              'swift' => 
              array (
                'title' => '增量swift信息',
                'description' => '增量swift信息',
                'type' => 'object',
                'properties' => 
                array (
                  'zk' => 
                  array (
                    'description' => 'zk',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'zk',
                  ),
                  'topic' => 
                  array (
                    'description' => 'topic',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'ha-cn-pl32rf0****_test_api',
                  ),
                ),
                'required' => false,
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
          'headers' => 
          array (
          ),
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'title' => 'id of request',
                'description' => 'id of request',
                'type' => 'string',
                'example' => '93A9E542-8CF8-5BA6-99AB-94C0FE520429',
              ),
              'result' => 
              array (
                'title' => 'Map',
                'description' => 'Map',
                'type' => 'object',
                'example' => '{}',
              ),
            ),
          ),
        ),
        500 => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"93A9E542-8CF8-5BA6-99AB-94C0FE520429\\",\\n  \\"result\\": {}\\n}","type":"json"}]',
      'title' => '修改数据源部署信息',
    ),
    'CreateDataSource' => 
    array (
      'summary' => '创建数据源。',
      'path' => '/openapi/ha3/instances/{instanceId}/data-sources',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID',
            'type' => 'string',
            'required' => true,
            'example' => 'ha-cn-pl32rf0****',
          ),
        ),
        1 => 
        array (
          'name' => 'dryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否dryRun创建（仅校验数据源是否合法）。取值：-true 是 -false 否',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        2 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求结构。',
            'type' => 'object',
            'properties' => 
            array (
              'name' => 
              array (
                'title' => '数据源名',
                'description' => '数据源名称',
                'type' => 'string',
                'required' => false,
                'example' => 'ha-cn-pl32rf0****_test_api',
              ),
              'type' => 
              array (
                'title' => '数据源类型 (odps, swift, saro, oss, unKnow)',
                'description' => '数据源类型：odps、oss、swift',
                'type' => 'string',
                'required' => false,
                'example' => 'odps',
              ),
              'domain' => 
              array (
                'title' => '离线部署',
                'description' => '数据源机房',
                'type' => 'string',
                'required' => false,
                'example' => 'vpc_hz_domain_1',
              ),
              'config' => 
              array (
                'title' => 'odps 数据源配置',
                'description' => '配置信息',
                'type' => 'object',
                'properties' => 
                array (
                  'endpoint' => 
                  array (
                    'title' => 'odps相关',
                    'description' => 'odps数据源的endpoint 或者 oss数据源的endpoint',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'http://service.cn-hangzhou.maxcompute.aliyun-inc.com/api',
                  ),
                  'accessKey' => 
                  array (
                    'description' => 'odps数据源ak',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'L***p',
                  ),
                  'accessSecret' => 
                  array (
                    'description' => 'odps数据源as',
                    'type' => 'string',
                    'required' => false,
                    'example' => '5**9a6',
                  ),
                  'project' => 
                  array (
                    'description' => 'odps数据源项目名称',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'kubenest',
                  ),
                  'partition' => 
                  array (
                    'description' => 'odps分区',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'ds=20220713',
                  ),
                  'table' => 
                  array (
                    'title' => 'saro、odps相关',
                    'description' => 'odps表名称',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'item',
                  ),
                  'namespace' => 
                  array (
                    'title' => 'saro相关',
                    'description' => '命名空间',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'aegis-ops',
                  ),
                  'path' => 
                  array (
                    'title' => 'hdfs相关',
                    'description' => 'hdfs文件路径',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'test-hdfs-path
',
                  ),
                  'ossPath' => 
                  array (
                    'title' => 'oss数据源相关',
                    'description' => 'oss文件路径',
                    'type' => 'string',
                    'required' => false,
                    'example' => '/opensearch/search',
                  ),
                  'bucket' => 
                  array (
                    'description' => 'oss bucket',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'opensearch',
                  ),
                ),
                'required' => false,
              ),
              'saroConfig' => 
              array (
                'title' => 'saro数据源配置',
                'description' => 'saro数据源配置',
                'type' => 'object',
                'properties' => 
                array (
                  'namespace' => 
                  array (
                    'description' => 'saro数据源的namespace',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'igraph-cn-x0r3e3abe02',
                  ),
                  'tableName' => 
                  array (
                    'description' => 'saro数据表名称',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'index_hdfs',
                  ),
                ),
                'required' => false,
              ),
              'autoBuildIndex' => 
              array (
                'title' => '是否开启自动全量',
                'description' => '自动重建索引',
                'type' => 'boolean',
                'required' => false,
                'example' => 'true',
              ),
            ),
            'required' => false,
            'example' => '{}',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'title' => 'id of request',
                'description' => '请求id',
                'type' => 'string',
                'example' => '10D5E615-69F7-5F49-B850-00169ADE513C',
              ),
              'result' => 
              array (
                'title' => 'Map',
                'description' => '返回参数',
                'type' => 'object',
                'example' => '{}',
              ),
            ),
          ),
        ),
        '5XX' => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"10D5E615-69F7-5F49-B850-00169ADE513C\\",\\n  \\"result\\": {}\\n}","type":"json"}]',
      'title' => '创建数据源',
      'description' => '## 方法
`POST`

## URI
`/openapi/ha3/instances/{instanceId}/data-sources`',
      'requestParamsDescription' => '## 请求示例
```
POST /openapi/ha3/instances/ha3_instances_id/data-sources

{
  "name": "data_source_name",
  "type": "odps",
  "config":{
    "accessKey": "xxx",
    "accessSecret": "xxxs",
    "project":"xxxx",
    "table":"xxx",
    "partition":"xxxx"
  },
  "autoBuildIndex": true
}
```',
      'responseParamsDescription' => '## 返回示例
### 正确返回
```json
{
	"requestId": "0A6EB64B-B4C8-CF02-810F-E660812972FF",
    "result": []
}
```
### 错误返回
```
{
	"requestId": "0A6EB64B-B4C8-CF02-810F-E660812972FF",
    "result": {
       "success": false,
       "data": "some error message"
  }
}
```
详情可参考[响应结构](~~465311~~)',
    ),
    'DeleteDataSource' => 
    array (
      'summary' => '删除数据源。',
      'path' => '/openapi/ha3/instances/{instanceId}/data-sources/{dataSourceName}',
      'methods' => 
      array (
        0 => 'delete',
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
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '实例ID',
            'description' => '实例ID',
            'type' => 'string',
            'required' => true,
            'example' => 'ha-cn-pl32rf0****',
          ),
        ),
        1 => 
        array (
          'name' => 'dataSourceName',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '数据源名称',
            'description' => '数据源名称',
            'type' => 'string',
            'required' => true,
            'example' => 'ha-cn-pl32rf0****_test_api',
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
                'title' => 'id of request',
                'description' => '请求id。',
                'type' => 'string',
                'example' => '10D5E615-69F7-5F49-B850-00169ADE513C',
              ),
              'result' => 
              array (
                'title' => '索引信息',
                'description' => '返回参数',
                'type' => 'object',
                'example' => '{}',
              ),
            ),
          ),
        ),
        500 => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"10D5E615-69F7-5F49-B850-00169ADE513C\\",\\n  \\"result\\": {}\\n}","type":"json"}]',
      'title' => '删除数据源',
      'description' => '## 方法
`DELETE`

## URI
`/openapi/ha3/instances/{instanceId}/data-sources/{dataSourceName}`',
      'requestParamsDescription' => '## 请求示例
`DELETE /openapi/ha3/instances/ha3_instances_id/data-sources/my_dataSource`
',
      'responseParamsDescription' => '## 返回示例
### 正确返回
```json
{
	"requestId": "0A6EB64B-B4C8-CF02-810F-E660812972FF",
    "result": []
}
```
详情可参考[响应结构](~~465311~~)',
    ),
    'ModifyDataSource' => 
    array (
      'summary' => '修改数据源。',
      'path' => '/openapi/ha3/instances/{instanceId}/data-sources/{dataSourceName}',
      'methods' => 
      array (
        0 => 'put',
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
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '实例ID',
            'description' => '实例ID',
            'type' => 'string',
            'required' => true,
            'example' => 'ha-cn-pl32rf0****',
          ),
        ),
        1 => 
        array (
          'name' => 'dataSourceName',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '数据源名称',
            'description' => '数据源名称',
            'type' => 'string',
            'required' => true,
            'example' => 'ha-cn-pl32rf0****_test_api',
          ),
        ),
        2 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体',
            'type' => 'object',
            'required' => false,
            'example' => '{
  "name": "data_source_name",
  "type": "odps",
  "config":{
    "accessKey": "xxx",
    "accessSecret": "xxxs",
    "project":"xxxx",
    "table":"xxx",
    "partition":"xxxx"
  },
  "autoBuildIndex": true
}',
          ),
        ),
        3 => 
        array (
          'name' => 'dryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否dryRun创建（仅校验数据源是否合法）。取值：-true 是 -false 否',
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
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'title' => 'id of request',
                'description' => '请求ID',
                'type' => 'string',
                'example' => '2AE63638-5420-56DC-BF59-37D8174039A0',
              ),
              'result' => 
              array (
                'title' => '索引信息',
                'description' => '返回参数',
                'type' => 'object',
                'example' => '{}',
              ),
            ),
          ),
        ),
        500 => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"2AE63638-5420-56DC-BF59-37D8174039A0\\",\\n  \\"result\\": {}\\n}","type":"json"}]',
      'title' => '修改数据源',
      'description' => '## 方法
`PUT`

## URI
`/openapi/ha3/instances/{instanceId}/data-sources/{dataSourceName}`',
      'requestParamsDescription' => '## 请求示例
```
PUT /openapi/ha3/instances/ha3_instances_id/data-sources/my_data_source

{
  "name": "data_source_name",
  "type": "odps",
  "config":{
    "accessKey": "xxx",
    "accessSecret": "xxxs",
    "project":"xxxx",
    "table":"xxx",
    "partition":"xxxx"
  },
  "autoBuildIndex": true
}
```',
      'responseParamsDescription' => '## 返回示例
### 正确返回
```json
{
	"requestId": "0A6EB64B-B4C8-CF02-810F-E660812972FF",
    "result": []
}
```
详情可参考[响应结构](~~465311~~)',
    ),
    'GetDataSource' => 
    array (
      'summary' => '获取某一数据源。',
      'path' => '/openapi/ha3/instances/{instanceId}/data-sources/{dataSourceName}',
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
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID',
            'type' => 'string',
            'required' => false,
            'example' => 'ha-cn-pl32rf0****',
          ),
        ),
        1 => 
        array (
          'name' => 'dataSourceName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '数据源的名称',
            'type' => 'string',
            'required' => false,
            'example' => 'ha-cn-pl32rf0****_test_api',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'title' => 'id of request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => 'FE03180A-0E29-5474-8A86-33F0683294A4',
              ),
              'result' => 
              array (
                'title' => 'DataSource',
                'description' => '数据源信息列表',
                'type' => 'object',
                'properties' => 
                array (
                  'name' => 
                  array (
                    'title' => '数据源名',
                    'description' => '数据源名称',
                    'type' => 'string',
                    'example' => 'ha-cn-pl32rf0****_test_api',
                  ),
                  'type' => 
                  array (
                    'title' => '数据源类型 (odps, swift, saro, oss, unKnow)',
                    'description' => '数据源类型',
                    'type' => 'string',
                    'example' => 'odps',
                  ),
                  'domain' => 
                  array (
                    'title' => '离线部署',
                    'description' => '离线部署',
                    'type' => 'string',
                    'example' => 'vpc_hz_domain_1',
                  ),
                  'indexes' => 
                  array (
                    'title' => '数据源产出的index',
                    'description' => '索引列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '索引表',
                      'type' => 'string',
                      'example' => 'index1',
                    ),
                  ),
                  'lastFulTime' => 
                  array (
                    'title' => '上一次全量时间',
                    'description' => '上一次全量时间',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1718787219',
                  ),
                  'status' => 
                  array (
                    'title' => '表状态 (NEW, PUBLISH, TRASH)',
                    'description' => '数据源状态：new: 创建中； publish: 正常； trash: 删除中',
                    'type' => 'string',
                    'example' => 'new',
                  ),
                ),
              ),
            ),
          ),
        ),
        500 => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"FE03180A-0E29-5474-8A86-33F0683294A4\\",\\n  \\"result\\": {\\n    \\"name\\": \\"ha-cn-pl32rf0****_test_api\\",\\n    \\"type\\": \\"odps\\",\\n    \\"domain\\": \\"vpc_hz_domain_1\\",\\n    \\"indexes\\": [\\n      \\"index1\\"\\n    ],\\n    \\"lastFulTime\\": 1718787219,\\n    \\"status\\": \\"new\\"\\n  }\\n}","type":"json"}]',
      'title' => '获取某一数据源',
      'description' => '### 方法
`GET`
### URI
`/openapi/ha3/instances/{instanceId}/data-sources/{dataSourceName}`',
      'requestParamsDescription' => '### 请求示例
`GET /openapi/ha3/instances/ha3_instances_id/data-sources/my_data_source`',
      'responseParamsDescription' => '### 返回示例

```
{
  "requestId": "0A6EB64B-B4C8-CF02-810F-E660812972FF",
  "result": {
    "name": "data_source_name",
    "type": "odps",
    "domain": "test",  // 离线部署    
    "indexes": [
      "index1",
      "index2"
    ],
    "partitions": [
      "ds=2020",
      "ds=2021"
    ],
    "lastFulTime": 1628502036000,
    "config":{
      "accessKey": "xxx",
      "accessSecret": "xxxs",
      "project":"xxxx",
      "table":"xxx",
      "partition":"xxxx"
    },
    "autoBuildIndex": true,
    "status": "new"	   // new: 创建中； publish: 正常； trash: 删除中
   
  }
}
```',
    ),
    'ListDataSources' => 
    array (
      'summary' => '获取数据源列表。',
      'path' => '/openapi/ha3/instances/{instanceId}/data-sources',
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
        'operationType' => 'list',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID',
            'type' => 'string',
            'required' => true,
            'example' => 'ha-cn-pl32rf0****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'title' => 'id of request',
                'description' => '请求ID',
                'type' => 'string',
                'example' => '93A9E542-8CF8-5BA6-99AB-94C0FE520429',
              ),
              'result' => 
              array (
                'title' => 'List',
                'description' => '返回参数',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '数据源信息列表',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'name' => 
                    array (
                      'title' => '数据源名',
                      'description' => '数据源名称。',
                      'type' => 'string',
                      'example' => 'ha-cn-pl32rf0****_test_api',
                    ),
                    'type' => 
                    array (
                      'title' => '数据源类型 (odps, swift, saro, oss, unKnow)',
                      'description' => '类型',
                      'type' => 'string',
                      'example' => 'odps',
                    ),
                    'domain' => 
                    array (
                      'title' => '离线部署',
                      'description' => '离线部署',
                      'type' => 'string',
                      'example' => 'vpc_hz_domain_1',
                    ),
                    'indexes' => 
                    array (
                      'title' => '数据源产出的index',
                      'description' => '索引列表',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '数据源索引。',
                        'type' => 'string',
                        'example' => 'index1',
                      ),
                    ),
                    'lastFulTime' => 
                    array (
                      'title' => '上一次全量时间',
                      'description' => '上一次全量时间',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1718787785',
                    ),
                    'status' => 
                    array (
                      'title' => '表状态 (NEW, PUBLISH, TRASH)',
                      'description' => '数据源状态：new: 创建中； publish: 正常； trash: 删除中',
                      'type' => 'string',
                      'example' => 'new',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        500 => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"93A9E542-8CF8-5BA6-99AB-94C0FE520429\\",\\n  \\"result\\": [\\n    {\\n      \\"name\\": \\"ha-cn-pl32rf0****_test_api\\",\\n      \\"type\\": \\"odps\\",\\n      \\"domain\\": \\"vpc_hz_domain_1\\",\\n      \\"indexes\\": [\\n        \\"index1\\"\\n      ],\\n      \\"lastFulTime\\": 1718787785,\\n      \\"status\\": \\"new\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '获取数据源列表',
      'description' => '## 方法
`GET`

## URI
`/openapi/ha3/instances/{instanceId}/data-sources`
',
      'requestParamsDescription' => '## 请求示例
`GET /openapi/ha3/instances/ha3_instances_id/data-sources`',
      'responseParamsDescription' => '## 返回示例
### 正确返回
```json
{
  "requestId": "0A6EB64B-B4C8-CF02-810F-E660812972FF",
  "result": [
    {
      "name": "data_source_name",
      "type": "odps",
      "domain": "test",  // 离线部署
      "indexes": [
        "index1",
        "index2"
      ],
      "partitions": [
        "ds=2020"
        "ds=2021"
      ],
      "lastFullTime": 1628502036000,
      "config":{
        "accessKey": "xxx",
        "accessSecret": "xxxs",
        "project":"xxxx",
        "table":"xxx",
        "partition":"xxxx"
      },
      "autoBuildIndex": true,
      "status": "new"	   // new: 创建中； publish: 正常； trash: 删除中
    },
    {
      "name": "data_source_name",
      "type": "odps",
      "domain": "test",  // 离线部署      
      "indexes": [
        "index1",
        "index2"
      ],
      "partitions": [
        "ds=2020"
        "ds=2021"
      ],
      "lastFullTime": 1628502036000,
      "config":{
        "accessKey": "xxx",
        "accessSecret": "xxxs",
        "project":"xxxx",
        "table":"xxx",
        "partition":"xxxx"
      },
      "autoBuildIndex": true,
      "status": "new"   // new: 创建中； publish: 正常； trash: 删除中
    }
  ]
}
```',
    ),
    'ListDataSourceSchemas' => 
    array (
      'summary' => '获取某一数据源的schema信息。',
      'path' => '/openapi/ha3/instances/{instanceId}/data-sources/{dataSourceName}/schemas',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
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
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID',
            'type' => 'string',
            'required' => true,
            'example' => 'ha-cn-pl32rf0****',
          ),
        ),
        1 => 
        array (
          'name' => 'dataSourceName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '数据源名称',
            'type' => 'string',
            'required' => true,
            'example' => 'ha-cn-pl32rf0****_test_api',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回参数',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'title' => 'id of request',
                'description' => '请求ID',
                'type' => 'string',
                'example' => '022F36C7-9FB4-5D67-BEBC-3D14B0984463',
              ),
              'result' => 
              array (
                'title' => 'List',
                'description' => '返回结果。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => 'schema信息',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'name' => 
                    array (
                      'title' => '字段名称',
                      'description' => '字段名称',
                      'type' => 'string',
                      'example' => 'id',
                    ),
                    'custom' => 
                    array (
                      'title' => '是否自定义字段',
                      'description' => '是否自定义字段。取值：-**true**：是-**false**：否',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'type' => 
                    array (
                      'title' => '字段类型',
                      'description' => '字段类型',
                      'type' => 'string',
                      'example' => 'STRING',
                    ),
                    'attribute' => 
                    array (
                      'description' => '是否为属性字段。取值：-**true**：是-**false**：否',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'summary' => 
                    array (
                      'title' => '可展示',
                      'description' => '是否可展示。取值：-**true**：是-**false**：否',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'primaryKey' => 
                    array (
                      'title' => '主键',
                      'description' => '主键',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'isPrimaryKey' => 
                        array (
                          'description' => '是否为主键。取值：-**true**：是-**false**：否',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                        'hasPrimaryKeyAttribute' => 
                        array (
                          'description' => '是否有主键属性。取值：-**true**：是-**false**：否',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                        'isPrimaryKeySorted' => 
                        array (
                          'description' => '是否可排序。取值：-**true**：是-**false**：否',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                      ),
                    ),
                    'addIndex' => 
                    array (
                      'title' => '是否添加了index属性',
                      'description' => '是否添加了index属性。取值：-**true**：是-**false**：否',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        500 => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"022F36C7-9FB4-5D67-BEBC-3D14B0984463\\",\\n  \\"result\\": [\\n    {\\n      \\"name\\": \\"id\\",\\n      \\"custom\\": false,\\n      \\"type\\": \\"STRING\\",\\n      \\"attribute\\": false,\\n      \\"summary\\": false,\\n      \\"primaryKey\\": {\\n        \\"isPrimaryKey\\": false,\\n        \\"hasPrimaryKeyAttribute\\": false,\\n        \\"isPrimaryKeySorted\\": false\\n      },\\n      \\"addIndex\\": false\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '获取某一数据源的schema信息',
      'description' => '## 方法
`GET`

## URI
`/openapi/ha3/instances/{instanceId}/data-sources/{dataSourceName}/schemas`',
      'requestParamsDescription' => '## 请求示例
`GET /openapi/ha3/instances/ha3_instances_id/data-sources/my_data_source/schemas`',
      'responseParamsDescription' => '## 返回示例
### 正确返回
```json
{
  "requestId": "0A6EB64B-B4C8-CF02-810F-E660812972FF",
  "result":[
    {
      "summary": false,
      "custom": false,
      "addIndex": false,
      "type": "INT64",
      "name": "id",
      "attribute": false,
      "primaryKey": {
        "hasPrimaryKeyAttribute": false,
        "primaryKeySorted": false,
        "primaryKey": false
      }
    },
    {
      "summary": false,
      "custom": false,
      "addIndex": false,
      "type": "STRING",
      "name": "fb_boolean",
      "attribute": false,
      "primaryKey": {
        "hasPrimaryKeyAttribute": false,
        "primaryKeySorted": false,
        "primaryKey": false
      }
    }
  ]
}
```',
    ),
    'ListDateSourceGenerations' => 
    array (
      'path' => '/openapi/ha3/instances/{instanceId}/data-sources/{dataSourceName}/generations',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
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
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例id。',
            'type' => 'string',
            'required' => true,
            'example' => 'ha-cn-pl32rf0****',
          ),
        ),
        1 => 
        array (
          'name' => 'dataSourceName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '数据源名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'ha-cn-pl32rf0****_test_api',
          ),
        ),
        2 => 
        array (
          'name' => 'validStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '有效状态（默认为true）

1. true 返回Task执行完成且未过期的generation
2. false 返回所有generation',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
            'default' => 'true',
          ),
        ),
        3 => 
        array (
          'name' => 'domainName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据源部署机房',
            'type' => 'string',
            'required' => true,
            'example' => 'bj_vpc_domain_1',
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
                'title' => 'id of request',
                'description' => 'id of request',
                'type' => 'string',
                'example' => '022F36C7-9FB4-5D67-BEBC-3D14B0984463',
              ),
              'result' => 
              array (
                'title' => 'List',
                'description' => 'List',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '返回结果',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'generation' => 
                    array (
                      'title' => 'generation 主键',
                      'description' => '索引全量版本',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1626143930',
                    ),
                    'createTime' => 
                    array (
                      'title' => '全量时间',
                      'description' => 'build index 开始时间',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1626143673',
                    ),
                    'status' => 
                    array (
                      'title' => '数据状态',
                      'description' => '状态',
                      'type' => 'string',
                      'example' => 'STOPPED',
                    ),
                    'buildDeployId' => 
                    array (
                      'title' => 'buildDeployId',
                      'description' => '离线部署id',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '122',
                    ),
                    'partition' => 
                    array (
                      'title' => '数据描述',
                      'description' => 'Key 索引名称
value 分片数量',
                      'type' => 'object',
                      'additionalProperties' => 
                      array (
                        'type' => 'integer',
                        'format' => 'int32',
                        'description' => '分片数',
                        'example' => '1',
                      ),
                    ),
                    'timestamp' => 
                    array (
                      'title' => '时间戳',
                      'description' => '增量时间戳',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1626143673',
                    ),
                    'dataDumpRoot' => 
                    array (
                      'title' => 'dump表索引文件存储地址',
                      'description' => 'dump表索引文件存储地址',
                      'type' => 'string',
                      'example' => 'hdfs://opensearch/dump.json',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        500 => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"022F36C7-9FB4-5D67-BEBC-3D14B0984463\\",\\n  \\"result\\": [\\n    {\\n      \\"generation\\": 1626143930,\\n      \\"createTime\\": 1626143673,\\n      \\"status\\": \\"STOPPED\\",\\n      \\"buildDeployId\\": 122,\\n      \\"partition\\": {\\n        \\"key\\": 1\\n      },\\n      \\"timestamp\\": 1626143673,\\n      \\"dataDumpRoot\\": \\"hdfs://opensearch/dump.json\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '获取数据源的历史回流信息',
      'summary' => '获取数据源的历史回流信息。',
      'description' => '### 方法
`GET`
### URI
`/openapi/ha3/instances/{instanceId}/data-sources/{dataSourceName}/generations?domainName={domainName}`',
      'requestParamsDescription' => '### 请求示例
`GET /openapi/ha3/instances/ha3_instances_id/data-sources/my_data_source/generations??domainName=pre_domain_1`
',
      'responseParamsDescription' => '### 返回示例

```
{
  "requestId": "0A6EB64B-B4C8-CF02-810F-E660812972FF",
  "result": [
    {
      "generationId":1626143930,
      "timestamp":16261436737,
      "createTime":1626143673,
      "status":"STOPPED",
      "partition":{
        "index1":1
      },
      "buildDeployId":122
    },{
      "generationId":1626143930,
      "timestamp":16261435453,
      "createTime":1626143673,
      "status":"STOPPED",
      "partition":{
        "index1":1
      },
      "buildDeployId":122
    }
  ]
}
```',
    ),
    'GetDataSourceDeploy' => 
    array (
      'summary' => '获取数据源部署信息',
      'path' => '/openapi/ha3/instances/{instanceId}/data-sources/{dataSourceName}/deploys/{deployName}',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
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
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID',
            'type' => 'string',
            'required' => true,
            'example' => 'ha-cn-pl32rf0****',
          ),
        ),
        1 => 
        array (
          'name' => 'deployName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '机房',
            'type' => 'string',
            'required' => true,
            'example' => 'vpc_hz_domain_1',
          ),
        ),
        2 => 
        array (
          'name' => 'dataSourceName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '数据源的名称',
            'type' => 'string',
            'required' => true,
            'example' => 'ha-cn-pl32rf0****_test_api',
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
              'requestId' => 
              array (
                'title' => 'id of request',
                'description' => 'requestId',
                'type' => 'string',
                'example' => '2AE63638-5420-56DC-BF59-37D8174039A0',
              ),
              'result' => 
              array (
                'title' => 'Deploy',
                'description' => 'Deploy',
                'type' => 'object',
                'properties' => 
                array (
                  'storage' => 
                  array (
                    'description' => '数据源信息',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'endpoint' => 
                      array (
                        'title' => 'odps相关',
                        'description' => 'odps数据源的endpoint',
                        'type' => 'string',
                        'example' => 'http://service.cn-hangzhou.maxcompute.aliyun-inc.com/api',
                      ),
                      'accessKey' => 
                      array (
                        'description' => 'odps数据源ak',
                        'type' => 'string',
                        'example' => 'L***p',
                      ),
                      'accessSecret' => 
                      array (
                        'description' => 'odps数据源ak secret',
                        'type' => 'string',
                        'example' => '5**9a6',
                      ),
                      'project' => 
                      array (
                        'description' => 'odps数据源项目名称',
                        'type' => 'string',
                        'example' => 'wireless_1688_personal_rec',
                      ),
                      'partition' => 
                      array (
                        'description' => 'odps数据源分区。例如：ds=20180102',
                        'type' => 'string',
                        'example' => 'ds=20220926',
                      ),
                      'table' => 
                      array (
                        'title' => 'saro、odps相关',
                        'description' => 'saro、odps数据源表名',
                        'type' => 'string',
                        'example' => 'behavior',
                      ),
                      'namespace' => 
                      array (
                        'title' => 'saro相关',
                        'description' => 'saro相关',
                        'type' => 'string',
                        'example' => 'lazada-campaign-flink',
                      ),
                      'path' => 
                      array (
                        'title' => 'hdfs相关',
                        'description' => 'hdfs相关',
                        'type' => 'string',
                        'example' => '/beiming_xobject/dwd_xobjectsandbox__list_create_action_by_new/',
                      ),
                      'ossPath' => 
                      array (
                        'title' => 'oss数据源相关',
                        'description' => 'oss数据源相关',
                        'type' => 'string',
                        'example' => '/opensearch/test.json',
                      ),
                      'bucket' => 
                      array (
                        'description' => 'oss bucket',
                        'type' => 'string',
                        'example' => 'test-oss-bucket',
                      ),
                    ),
                  ),
                  'autoBuildIndex' => 
                  array (
                    'title' => '是否开启自动全量',
                    'description' => '是否开启自动全量',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'processor' => 
                  array (
                    'description' => '进程参数',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'args' => 
                      array (
                        'title' => '进程启动参数',
                        'description' => '进程启动参数',
                        'type' => 'string',
                        'example' => '{
	"processInfos": [],
	"groupId": "opensearch",
	"containerConfigs": [],
	"priority": {
		"minor_priority": 0,
		"major_priority": 64
	}
}',
                      ),
                      'resource' => 
                      array (
                        'title' => '资源信息',
                        'description' => '资源信息',
                        'type' => 'string',
                        'example' => '[{
	"_bs_role": "processor.*.inc",
	"priority": {
		"major_priority": 32,
		"minor_priority": 0
	},
	"slotResources": [{
		"slotResources": [{
			"amount": 200,
			"name": "cpu"
		}, {
			"amount": 8192,
			"name": "mem"
		}, {
			"amount": 0,
			"name": "T4"
		}, {
			"amount": 10,
			"type": "SCALAR",
			"name": "disk_ratio_9999"
		}, {
			"amount": 20480,
			"type": "SCALAR",
			"name": "disk_size_9999"
		}]
	}]
}]',
                      ),
                    ),
                  ),
                  'extend' => 
                  array (
                    'description' => '字段配置的扩展的内容
key: 向量字段(vector)、
需embeding字段(embeding)',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'saro' => 
                      array (
                        'description' => 'saro数据源信息',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'path' => 
                          array (
                            'description' => 'hdfs数据源路径',
                            'type' => 'string',
                            'example' => 'dist-dmj-job/src/main/java',
                          ),
                          'version' => 
                          array (
                            'description' => '版本号',
                            'type' => 'string',
                            'example' => '0.6.0',
                          ),
                        ),
                      ),
                      'hdfs' => 
                      array (
                        'description' => 'hdfs信息',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'path' => 
                          array (
                            'description' => 'hdfs数据源路径',
                            'type' => 'string',
                            'example' => 'dist-dmj-job/src/main/java',
                          ),
                        ),
                      ),
                      'odps' => 
                      array (
                        'description' => 'odps数据源信息',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'partitions' => 
                          array (
                            'description' => '数据源的分区信息',
                            'type' => 'object',
                            'additionalProperties' => 
                            array (
                              'type' => 'string',
                              'example' => 'ds=20220926',
                              'description' => '数据源的分区信息',
                            ),
                          ),
                        ),
                      ),
                      'oss' => 
                      array (
                        'description' => 'oss信息',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'path' => 
                          array (
                            'description' => 'oss数据源路径',
                            'type' => 'string',
                            'example' => 'oss://opensearch',
                          ),
                        ),
                      ),
                    ),
                  ),
                  'swift' => 
                  array (
                    'title' => '增量swift信息',
                    'description' => '增量swift信息',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'zk' => 
                      array (
                        'description' => 'zk',
                        'type' => 'string',
                        'example' => 'test-zk',
                      ),
                      'topic' => 
                      array (
                        'description' => 'topic',
                        'type' => 'string',
                        'example' => 'ha-cn-pl32rf0****_test_api',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        500 => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"2AE63638-5420-56DC-BF59-37D8174039A0\\",\\n  \\"result\\": {\\n    \\"storage\\": {\\n      \\"endpoint\\": \\"http://service.cn-hangzhou.maxcompute.aliyun-inc.com/api\\",\\n      \\"accessKey\\": \\"L***p\\",\\n      \\"accessSecret\\": \\"5**9a6\\",\\n      \\"project\\": \\"wireless_1688_personal_rec\\",\\n      \\"partition\\": \\"ds=20220926\\",\\n      \\"table\\": \\"behavior\\",\\n      \\"namespace\\": \\"lazada-campaign-flink\\",\\n      \\"path\\": \\"/beiming_xobject/dwd_xobjectsandbox__list_create_action_by_new/\\",\\n      \\"ossPath\\": \\"/opensearch/test.json\\",\\n      \\"bucket\\": \\"test-oss-bucket\\"\\n    },\\n    \\"autoBuildIndex\\": true,\\n    \\"processor\\": {\\n      \\"args\\": \\"{\\\\n\\\\t\\\\\\"processInfos\\\\\\": [],\\\\n\\\\t\\\\\\"groupId\\\\\\": \\\\\\"opensearch\\\\\\",\\\\n\\\\t\\\\\\"containerConfigs\\\\\\": [],\\\\n\\\\t\\\\\\"priority\\\\\\": {\\\\n\\\\t\\\\t\\\\\\"minor_priority\\\\\\": 0,\\\\n\\\\t\\\\t\\\\\\"major_priority\\\\\\": 64\\\\n\\\\t}\\\\n}\\",\\n      \\"resource\\": \\"[{\\\\n\\\\t\\\\\\"_bs_role\\\\\\": \\\\\\"processor.*.inc\\\\\\",\\\\n\\\\t\\\\\\"priority\\\\\\": {\\\\n\\\\t\\\\t\\\\\\"major_priority\\\\\\": 32,\\\\n\\\\t\\\\t\\\\\\"minor_priority\\\\\\": 0\\\\n\\\\t},\\\\n\\\\t\\\\\\"slotResources\\\\\\": [{\\\\n\\\\t\\\\t\\\\\\"slotResources\\\\\\": [{\\\\n\\\\t\\\\t\\\\t\\\\\\"amount\\\\\\": 200,\\\\n\\\\t\\\\t\\\\t\\\\\\"name\\\\\\": \\\\\\"cpu\\\\\\"\\\\n\\\\t\\\\t}, {\\\\n\\\\t\\\\t\\\\t\\\\\\"amount\\\\\\": 8192,\\\\n\\\\t\\\\t\\\\t\\\\\\"name\\\\\\": \\\\\\"mem\\\\\\"\\\\n\\\\t\\\\t}, {\\\\n\\\\t\\\\t\\\\t\\\\\\"amount\\\\\\": 0,\\\\n\\\\t\\\\t\\\\t\\\\\\"name\\\\\\": \\\\\\"T4\\\\\\"\\\\n\\\\t\\\\t}, {\\\\n\\\\t\\\\t\\\\t\\\\\\"amount\\\\\\": 10,\\\\n\\\\t\\\\t\\\\t\\\\\\"type\\\\\\": \\\\\\"SCALAR\\\\\\",\\\\n\\\\t\\\\t\\\\t\\\\\\"name\\\\\\": \\\\\\"disk_ratio_9999\\\\\\"\\\\n\\\\t\\\\t}, {\\\\n\\\\t\\\\t\\\\t\\\\\\"amount\\\\\\": 20480,\\\\n\\\\t\\\\t\\\\t\\\\\\"type\\\\\\": \\\\\\"SCALAR\\\\\\",\\\\n\\\\t\\\\t\\\\t\\\\\\"name\\\\\\": \\\\\\"disk_size_9999\\\\\\"\\\\n\\\\t\\\\t}]\\\\n\\\\t}]\\\\n}]\\"\\n    },\\n    \\"extend\\": {\\n      \\"saro\\": {\\n        \\"path\\": \\"dist-dmj-job/src/main/java\\",\\n        \\"version\\": \\"0.6.0\\"\\n      },\\n      \\"hdfs\\": {\\n        \\"path\\": \\"dist-dmj-job/src/main/java\\"\\n      },\\n      \\"odps\\": {\\n        \\"partitions\\": {\\n          \\"key\\": \\"ds=20220926\\"\\n        }\\n      },\\n      \\"oss\\": {\\n        \\"path\\": \\"oss://opensearch\\"\\n      }\\n    },\\n    \\"swift\\": {\\n      \\"zk\\": \\"test-zk\\",\\n      \\"topic\\": \\"ha-cn-pl32rf0****_test_api\\"\\n    }\\n  }\\n}","type":"json"}]',
      'title' => '获取数据源部署信息',
    ),
    'ListIndexRecoverRecords' => 
    array (
      'path' => '/openapi/ha3/instances/{instanceId}/indexes/{indexName}/actions/list-recover-records',
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
        'operationType' => 'list',
        'abilityTreeCode' => '218752',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREopensearchSLLBIN',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'indexName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '索引名称',
            'type' => 'string',
            'required' => true,
            'example' => 'test_api',
          ),
        ),
        1 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID',
            'type' => 'string',
            'required' => false,
            'example' => 'ha-cn-pl32rf0****',
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
              'generationId' => 
              array (
                'description' => '索引全量版本',
                'type' => 'string',
                'example' => '1708674867',
              ),
              'desc' => 
              array (
                'description' => '备注',
                'type' => 'string',
                'example' => '自定义配置',
              ),
              'finishedTime' => 
              array (
                'description' => '本次发布的完成时间',
                'type' => 'string',
                'example' => '2024-06-07 16:43:00',
              ),
            ),
          ),
        ),
        500 => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"generationId\\": \\"1708674867\\",\\n  \\"desc\\": \\"自定义配置\\",\\n  \\"finishedTime\\": \\"2024-06-07 16:43:00\\"\\n}","type":"json"}]',
      'title' => '获取恢复数据记录',
    ),
    'ListPausePolicys' => 
    array (
      'path' => '/openapi/ha3/instances/{instanceId}/pause-policies',
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
        'operationType' => 'list',
        'abilityTreeCode' => '178009',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREopensearch5EAGY5',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID',
            'type' => 'string',
            'required' => true,
            'example' => 'ha-cn-pl32rf0****',
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
                'title' => 'id of request',
                'description' => 'id of request',
                'type' => 'string',
                'example' => '2AE63638-5420-56DC-BF59-37D8174039A0',
              ),
              'result' => 
              array (
                'title' => 'Map',
                'description' => 'Map',
                'type' => 'object',
                'additionalProperties' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'pauseAll' => 
                    array (
                      'title' => '暂停全部目标下发',
                      'description' => '暂停全部目标下发',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'pauseIndex' => 
                    array (
                      'title' => '暂停新的全量版本下发',
                      'description' => '暂停新的全量版本下发',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'pauseIndexBatch' => 
                    array (
                      'title' => '暂停批次增量下发',
                      'description' => '暂停批次增量下发',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'pauseBiz' => 
                    array (
                      'title' => '暂停配置下发',
                      'description' => '暂停配置下发',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'pauseRuntime' => 
                    array (
                      'title' => '暂停实时增量',
                      'description' => '暂停实时增量',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                  ),
                  'description' => '返回结果',
                ),
              ),
            ),
          ),
        ),
        500 => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"2AE63638-5420-56DC-BF59-37D8174039A0\\",\\n  \\"result\\": {\\n    \\"key\\": {\\n      \\"pauseAll\\": true,\\n      \\"pauseIndex\\": true,\\n      \\"pauseIndexBatch\\": true,\\n      \\"pauseBiz\\": true,\\n      \\"pauseRuntime\\": true\\n    }\\n  }\\n}","type":"json"}]',
      'title' => '获取暂停策略',
    ),
    'ModifyPausePolicy' => 
    array (
      'path' => '/openapi/ha3/instances/{instanceId}/pause-policies',
      'methods' => 
      array (
        0 => 'put',
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
        'abilityTreeCode' => '178006',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREopensearch0Z9KDD',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID',
            'type' => 'string',
            'required' => true,
            'example' => 'ha-cn-pl32rf0****',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体参数',
            'type' => 'object',
            'required' => false,
            'additionalProperties' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'pauseAll' => 
                array (
                  'title' => '暂停全部目标下发',
                  'description' => '暂停全部目标下发',
                  'type' => 'boolean',
                  'required' => false,
                  'example' => 'true',
                ),
                'pauseIndex' => 
                array (
                  'title' => '暂停新的全量版本下发',
                  'description' => '暂停新的全量版本下发',
                  'type' => 'boolean',
                  'required' => false,
                  'example' => 'true',
                ),
                'pauseIndexBatch' => 
                array (
                  'title' => '暂停批次增量下发',
                  'description' => '暂停批次增量下发',
                  'type' => 'boolean',
                  'required' => false,
                  'example' => 'true',
                ),
                'pauseBiz' => 
                array (
                  'title' => '暂停配置下发',
                  'description' => '暂停配置下发',
                  'type' => 'boolean',
                  'required' => false,
                  'example' => 'true',
                ),
                'pauseRuntime' => 
                array (
                  'title' => '暂停实时增量',
                  'description' => '暂停实时增量',
                  'type' => 'boolean',
                  'required' => false,
                  'example' => 'true',
                ),
              ),
              'description' => '请求体参数',
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
              'requestId' => 
              array (
                'title' => 'id of request',
                'description' => 'id of request',
                'type' => 'string',
                'example' => '0B1FF998-BB8D-5182-BFC0-E471AA77095A',
              ),
              'result' => 
              array (
                'title' => 'Map',
                'description' => 'Map',
                'type' => 'object',
                'example' => '{}',
              ),
            ),
          ),
        ),
        500 => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"0B1FF998-BB8D-5182-BFC0-E471AA77095A\\",\\n  \\"result\\": {}\\n}","type":"json"}]',
      'title' => '修改暂停开关',
    ),
    'CreateCluster' => 
    array (
      'summary' => '添加集群。',
      'path' => '/openapi/ha3/instances/{instanceId}/clusters',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
        'abilityTreeCode' => '104657',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREopensearchA6GC80',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例id',
            'type' => 'string',
            'required' => true,
            'example' => 'ha-cn-pl32rf0****',
          ),
        ),
        1 => 
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
              'name' => 
              array (
                'title' => '集群名称',
                'description' => '集群名称',
                'type' => 'string',
                'required' => false,
                'example' => 'hz_pre_vpc_domain_1',
              ),
              'description' => 
              array (
                'title' => '集群描述',
                'description' => '集群描述。',
                'type' => 'string',
                'required' => false,
                'example' => '自定义描述',
              ),
              'queryNode' => 
              array (
                'title' => '查询节点配置',
                'description' => '查询节点详情信息',
                'type' => 'object',
                'properties' => 
                array (
                  'number' => 
                  array (
                    'title' => '节点数量',
                    'description' => '	查询节点数量',
                    'type' => 'integer',
                    'format' => 'int32',
                    'required' => false,
                    'example' => '2',
                  ),
                ),
                'required' => false,
              ),
              'dataNode' => 
              array (
                'title' => '数据节点配置',
                'description' => '数据节点详情信息',
                'type' => 'object',
                'properties' => 
                array (
                  'number' => 
                  array (
                    'title' => '节点数量',
                    'description' => '数据节点的数量',
                    'type' => 'integer',
                    'format' => 'int32',
                    'required' => false,
                    'example' => '2',
                  ),
                  'partition' => 
                  array (
                    'description' => '分片数',
                    'type' => 'string',
                    'required' => false,
                    'example' => '2',
                  ),
                ),
                'required' => false,
              ),
              'autoLoad' => 
              array (
                'title' => '添加完成后是否自动挂载',
                'description' => '是否自动挂载',
                'type' => 'boolean',
                'required' => false,
                'example' => 'true',
              ),
            ),
            'required' => false,
            'example' => '{}',
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
              'requestId' => 
              array (
                'title' => 'id of request',
                'description' => '请求id。',
                'type' => 'string',
                'example' => '10D5E615-69F7-5F49-B850-00169ADE513C',
              ),
              'result' => 
              array (
                'title' => 'Map',
                'description' => '结果',
                'type' => 'object',
                'example' => '{}',
              ),
            ),
          ),
        ),
        500 => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"10D5E615-69F7-5F49-B850-00169ADE513C\\",\\n  \\"result\\": {}\\n}","type":"json"}]',
      'title' => '添加集群',
      'description' => '### Method

`POST`

### URI

`/openapi/ha3/instances/{instanceId}/clusters`',
      'requestParamsDescription' => '### Sample requests

`POST/openapi/ha3/instances/ha3_instance_id/clusters`

    {
      "name":"cluster1",
      "queryNode": {
        "number": 1
      },
      "dataNode": {
        "number": 2
      },
      "description":"The description of the cluster",
      "autoLoad":true
    }',
      'responseParamsDescription' => '### Sample responses

    {
      "requestId": "0A6EB64B-B4C8-CF02-810F-E660812972FF",
      "result": []
    }

For more information, see [Response structure](https://help.aliyun.com/document_detail/465311.html).
',
    ),
    'RemoveCluster' => 
    array (
      'summary' => '删除某一集群。',
      'path' => '/openapi/ha3/instances/{instanceId}/clusters/{clusterName}',
      'methods' => 
      array (
        0 => 'delete',
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
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '实例ID',
            'description' => '实例ID',
            'type' => 'string',
            'required' => true,
            'example' => 'ha-cn-pl32rf0****',
          ),
        ),
        1 => 
        array (
          'name' => 'clusterName',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '集群名称',
            'description' => '集群名称',
            'type' => 'string',
            'required' => false,
            'example' => 'bj_vpc_domain_2',
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
                'title' => 'id of request',
                'description' => 'id of request',
                'type' => 'string',
                'example' => 'E45380E8-994A-5402-9806-F114B3295FCF',
              ),
              'result' => 
              array (
                'title' => '结果',
                'description' => '结果',
                'type' => 'object',
                'example' => '{}',
              ),
            ),
          ),
        ),
        500 => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"E45380E8-994A-5402-9806-F114B3295FCF\\",\\n  \\"result\\": {}\\n}","type":"json"}]',
      'title' => '删除某一集群',
      'description' => '### 方法

```java
DELETE
```

### URI

```java
/openapi/ha3/instances/{instanceId}/clusters/{clusterName}
```
',
      'requestParamsDescription' => '### 请求示例

```java
﻿
DELETE /openapi/ha3/instances/ha3_instance_name/clusters/my_cluster_name
```',
      'responseParamsDescription' => '### 返回示例

正确返回
﻿

```java
{
﻿
  "requestId": "0A6EB64B-B4C8-CF02-810F-E660812972FF",
﻿
  "result": []
﻿
}
```
详情可参考[响应结构](~~465311~~)',
    ),
    'ModifyClusterDesc' => 
    array (
      'summary' => '更改集群的描述信息。',
      'path' => '/openapi/ha3/instances/{instanceId}/clusters/{clusterName}/desc',
      'methods' => 
      array (
        0 => 'put',
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
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID',
            'type' => 'string',
            'required' => true,
            'example' => 'ha-cn-pl32rf0****',
          ),
        ),
        1 => 
        array (
          'name' => 'clusterName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '集群名称',
            'type' => 'string',
            'required' => true,
            'example' => 'sz_vpc_domain_1',
          ),
        ),
        2 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体参数',
            'type' => 'object',
            'required' => false,
            'example' => '{
    "description": "自定义描述"
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
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'title' => 'id of request',
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'D39EE0F1-D7EF-5F46-B781-6BF4185308B0',
              ),
              'result' => 
              array (
                'title' => 'Map',
                'description' => 'Map',
                'type' => 'object',
                'example' => '{}',
              ),
            ),
          ),
        ),
        500 => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"D39EE0F1-D7EF-5F46-B781-6BF4185308B0\\",\\n  \\"result\\": {}\\n}","type":"json"}]',
      'title' => '更改集群的描述信息',
      'description' => '### 方法
`PUT`
### URI
`/openapi/ha3/instances/{instanceId}/clusters/{clusterName}/desc`。',
      'requestParamsDescription' => '| 名称        | 是否必须 | 类型   | 描述           |
| ----------- | -------- | ------ | -------------- |
| description | 是       | String | 集群的描述信息 |

### 请求示例
`PUT /openapi/ha3/instances/ha3_instance_name/clusters/my_cluster_name/desc`

```
{
  "description":"this is descrition"
}
```',
      'responseParamsDescription' => '### 返回示例

```
{
	"requestId": "0A6EB64B-B4C8-CF02-810F-E660812972FF",
  "result": []
}
```
详情可参考[响应结构](~~465311~~)',
    ),
    'ModifyClusterOfflineConfig' => 
    array (
      'summary' => '修改集群的配置信息。',
      'path' => '/openapi/ha3/instances/{instanceId}/cluster-offline-config',
      'methods' => 
      array (
        0 => 'put',
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
        'abilityTreeCode' => '104631',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREopensearchA6GC80',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID',
            'type' => 'string',
            'required' => true,
            'example' => 'ha-cn-pl32rf0****',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求结构。',
            'type' => 'object',
            'properties' => 
            array (
              'dataSourceName' => 
              array (
                'description' => '数据源名称',
                'type' => 'string',
                'required' => false,
                'example' => 'ha-cn-pl32rf0****_test_api',
              ),
              'dataSourceType' => 
              array (
                'title' => '数据源类型 (odps: maxComputer, swift: swift, unKnow)',
                'description' => '数据源类型 (odps: maxComputer, swift: swift, unKnow)',
                'type' => 'string',
                'required' => false,
                'example' => 'odps',
              ),
              'domain' => 
              array (
                'title' => '离线部署',
                'description' => '数据源部署',
                'type' => 'string',
                'required' => false,
                'example' => 'vpc_hz_domain_1',
              ),
              'config' => 
              array (
                'title' => 'key:配置名称',
                'description' => 'key:配置名称',
                'type' => 'object',
                'required' => false,
                'additionalProperties' => 
                array (
                  'type' => 'integer',
                  'format' => 'int32',
                  'description' => 'value:配置版本号',
                  'example' => '1',
                ),
              ),
              'partition' => 
              array (
                'title' => '对于odps数据源触发全量时必传',
                'description' => '对于odps数据源触发全量时必传',
                'type' => 'string',
                'required' => false,
                'example' => 'ds=20211202',
              ),
              'dataTimeSec' => 
              array (
                'title' => '对于api推送数据源触发全量时必传',
                'description' => '对于API推送数据源触发全量时必传',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '1640867288',
              ),
              'buildMode' => 
              array (
                'title' => '索引重建方式 (api: API方式推送数据源, indexRecover: 从索引中恢复数据源)',
                'description' => '索引重建方式 (api: API方式推送数据源, indexRecover: 从索引中恢复数据源)',
                'type' => 'string',
                'required' => false,
                'example' => 'indexRecover',
              ),
              'generation' => 
              array (
                'title' => '从索引中恢复数据源，dump表的generation',
                'description' => '索引全量版本',
                'type' => 'integer',
                'format' => 'int64',
                'required' => false,
                'example' => '160142641',
              ),
              'pushMode' => 
              array (
                'title' => '推送方式：PUSH_ONLY（仅推送配置）、PUSH_GENERATION （指定generation）、TRIGGER_BUILD(推送配置并做全量)',
                'description' => '推送配置方式: 默认仅推送配置',
                'type' => 'string',
                'required' => false,
                'example' => 'PUSH_ONLY',
              ),
            ),
            'required' => false,
            'example' => '{}',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'title' => 'id of request',
                'description' => '请求id',
                'type' => 'string',
                'example' => 'E7B7D598-B080-5C8E-AA35-D43EC0D5F886',
              ),
              'result' => 
              array (
                'title' => 'Map',
                'description' => '结果',
                'type' => 'object',
                'example' => '{}',
              ),
            ),
          ),
        ),
        500 => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"E7B7D598-B080-5C8E-AA35-D43EC0D5F886\\",\\n  \\"result\\": {}\\n}","type":"json"}]',
      'title' => '修改集群的配置信息',
      'description' => '## 请求语法
```
PUT /openapi/ha3/instances/{instanceId}/cluster-offline-config
```。',
      'requestParamsDescription' => '| 名称                    | 是否必须 | 类型    | 描述                                                         |
| ----------------------- | -------- | ------- | ------------------------------------------------------------ |
| dataSource              | 是       | String  | 数据源名称                                                   |
| domain                  | 是       | String  | 数据源部署                                                   |
| indexes                 | 是       | Object  | 索引结构的描述信息                                           |
| advancedConfigVersionId | 是       | Integer | 高级配置的版本id                                             |
| triggerBuild            | 是       | boolean | true 推送配置并触发索引重建false 配置等待下一次索引重建后生效 |
| buildMode               | 否       | Integer | 重建index方式 api:默认方式 indexRecover:索引中恢复数据源 （目前只有数据源类型为hdfs必填） |
| generation              | 否       | Long    | 历史回流ID                                                   |
| partition               | 否       | String  | 索引重建选择的数据源的数据分区，当触发odps索引重建时必传     |
| dataTimeSec             | 否       | Integer | int类型，秒级时间戳，表示API推送数据源触发重建的数据时间，API推送触发重建时必填项 |
| dataSourceType          | 否       | Enum    | 当triggerBuild=true时必传（odps或swift）                     |

### 请求示例
`PUT /openapi/ha3/instances/ha3_instance_name/cluster-offline-config`

```
{
    "dataSource": "test1",
    "domain": "xx",
    "indexes": [
        {
            "name": "index1",
            "versionId": 1
        },
        {
            "name": "index2",
            "versionId": 1
        }
    ],
    "advancedConfigVersionId": 2,
    "triggerBuild": true,
    "partition": "20201010", //odps触发重建时必填
    "dataSourceType": "odps", // odps或swift，必填项，不传报错
    "dataTimeSec": 1640867288 //int类型，秒级时间戳，表示API推送数据源触发重建的数据时间，API推送触发重建时必填项
  
}
```',
      'responseParamsDescription' => '### 返回示例

```
{
  "requestId": "0A6EB64B-B4C8-CF02-810F-E660812972FF",
  "result": []
}
```
详情可参考[响应结构](~~465311~~)',
    ),
    'ModifyClusterOnlineConfig' => 
    array (
      'summary' => '修改集群的在线配置信息。',
      'path' => '/openapi/ha3/instances/{instanceId}/cluster-online-config',
      'methods' => 
      array (
        0 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
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
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例id',
            'type' => 'string',
            'required' => true,
            'example' => 'ha-cn-pl32rf0****',
          ),
        ),
        1 => 
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
              'config' => 
              array (
                'title' => 'key:配置名称',
                'description' => '配置信息',
                'type' => 'object',
                'required' => false,
                'additionalProperties' => 
                array (
                  'type' => 'integer',
                  'format' => 'int32',
                  'description' => '配置版本号',
                  'example' => '2',
                ),
              ),
              'clusters' => 
              array (
                'title' => '集群信息',
                'description' => '集群信息',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '集群列表。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '[
	"hz_pre_vpc_domain_1"
]',
                ),
                'required' => false,
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
            'description' => '{}',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'title' => 'id of request',
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'E7B7D598-B080-5C8E-AA35-D43EC0D5F886',
              ),
              'result' => 
              array (
                'title' => 'Map',
                'description' => 'Map',
                'type' => 'object',
                'example' => '{}',
              ),
            ),
          ),
        ),
        500 => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"E7B7D598-B080-5C8E-AA35-D43EC0D5F886\\",\\n  \\"result\\": {}\\n}","type":"json"}]',
      'title' => '修改集群的在线配置信息',
      'description' => '### 方法
`PUT`
### URI
`/openapi/ha3/instances/{instanceId}/cluster-online-config`',
      'requestParamsDescription' => '### 请求示例
`PUT /openapi/ha3/instances/ha3_instance_name/cluster-online-config`

```
{
    "advancedConfigVersionId": 2,
    "clusters": [
      "hz_pre_vpc_domain_1"
    ]
}
```',
      'responseParamsDescription' => '### 返回示例

```
{
  "requestId": "0A6EB64B-B4C8-CF02-810F-E660812972FF",
  "result": []
}
```
**详情可参考[响应结构](~~465311~~)**',
    ),
    'GetCluster' => 
    array (
      'summary' => '获取某一集群的详细信息。',
      'path' => '/openapi/ha3/instances/{instanceId}/clusters/{clusterName}',
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
        'abilityTreeCode' => '104163',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREopensearch5EAGY5',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '实例ID',
            'description' => '实例ID',
            'type' => 'string',
            'required' => true,
            'example' => 'ha-cn-pl32rf0****',
          ),
        ),
        1 => 
        array (
          'name' => 'clusterName',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '集群名称',
            'description' => '集群名称',
            'type' => 'string',
            'required' => false,
            'example' => 'bj_vpc_domain_2',
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
                'title' => 'id of request',
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'E7B7D598-B080-5C8E-AA35-D43EC0D5F886',
              ),
              'result' => 
              array (
                'title' => '集群列表',
                'description' => '集群列表',
                'type' => 'object',
                'properties' => 
                array (
                  'name' => 
                  array (
                    'title' => '集群名称',
                    'description' => '集群名称',
                    'type' => 'string',
                    'example' => 'bj_vpc_domain_2',
                  ),
                  'description' => 
                  array (
                    'title' => '集群描述',
                    'description' => '集群描述',
                    'type' => 'string',
                    'example' => '自定义描述',
                  ),
                  'currentAdvanceConfigVersion' => 
                  array (
                    'title' => '高级配置生效版本',
                    'description' => '高级配置生效版本',
                    'type' => 'string',
                    'example' => 'ha-cn-pl32rf0****_offline_adv_v1',
                  ),
                  'latestAdvanceConfigVersion' => 
                  array (
                    'title' => '高级配置最新版本',
                    'description' => '高级配置最新版本',
                    'type' => 'string',
                    'example' => 'ha-cn-pl32rf0****_offline_adv_v1',
                  ),
                  'currentOnlineConfigVersion' => 
                  array (
                    'title' => '在线配置生效版本',
                    'description' => '在线配置生效版本',
                    'type' => 'string',
                    'example' => 'ha-cn-pl32rf0****_online_adv_v1',
                  ),
                  'latestOnlineConfigVersion' => 
                  array (
                    'title' => '在线配置最新版本',
                    'description' => '在线配置最新版本',
                    'type' => 'string',
                    'example' => 'ha-cn-pl32rf0****_online_adv_v1',
                  ),
                  'configUpdateTime' => 
                  array (
                    'title' => '集群更新时间',
                    'description' => '集群更新时间',
                    'type' => 'string',
                    'example' => '2021-08-09 00:01:02',
                  ),
                  'status' => 
                  array (
                    'description' => '集群的创建状态，有两个取值 NEW(创建中) or PUBLISH(创建完成)',
                    'type' => 'string',
                    'example' => 'NEW',
                  ),
                  'queryNode' => 
                  array (
                    'description' => '查询节点规格',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'name' => 
                      array (
                        'title' => '节点名称',
                        'description' => '节点名称',
                        'type' => 'string',
                        'example' => 'ha-cn-pl32rf0****_qrs',
                      ),
                      'number' => 
                      array (
                        'description' => '节点数量。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1',
                      ),
                      'partition' => 
                      array (
                        'title' => '副本数量',
                        'description' => '副本数量',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '2',
                      ),
                    ),
                  ),
                  'dataNode' => 
                  array (
                    'description' => '数据节点规格',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'name' => 
                      array (
                        'title' => '节点名称',
                        'description' => '节点名称',
                        'type' => 'string',
                        'example' => 'general',
                      ),
                      'number' => 
                      array (
                        'description' => '副本数',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1',
                      ),
                      'partition' => 
                      array (
                        'description' => '分片数',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '2',
                      ),
                    ),
                  ),
                  'createTime' => 
                  array (
                    'description' => '创建时间',
                    'type' => 'string',
                    'example' => '2024-05-21 16:05:26',
                  ),
                  'config' => 
                  array (
                    'description' => '配置信息',
                    'type' => 'object',
                    'additionalProperties' => 
                    array (
                      'type' => 'object',
                      'additionalProperties' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'name' => 
                          array (
                            'type' => 'string',
                            'example' => 'ha-cn-pl32rf0****_offline_adv_v1
',
                            'description' => '配置名称',
                          ),
                          'updateTime' => 
                          array (
                            'type' => 'string',
                            'description' => '更新时间',
                            'example' => '2024-05-21 16:05:26',
                          ),
                          'desc' => 
                          array (
                            'type' => 'string',
                            'description' => '描述',
                            'example' => '自定义描述',
                          ),
                        ),
                        'description' => '子配置项信息',
                      ),
                      'description' => '子配置项信息',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        500 => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"E7B7D598-B080-5C8E-AA35-D43EC0D5F886\\",\\n  \\"result\\": {\\n    \\"name\\": \\"bj_vpc_domain_2\\",\\n    \\"description\\": \\"自定义描述\\",\\n    \\"currentAdvanceConfigVersion\\": \\"ha-cn-pl32rf0****_offline_adv_v1\\",\\n    \\"latestAdvanceConfigVersion\\": \\"ha-cn-pl32rf0****_offline_adv_v1\\",\\n    \\"currentOnlineConfigVersion\\": \\"ha-cn-pl32rf0****_online_adv_v1\\",\\n    \\"latestOnlineConfigVersion\\": \\"ha-cn-pl32rf0****_online_adv_v1\\",\\n    \\"configUpdateTime\\": \\"2021-08-09 00:01:02\\",\\n    \\"status\\": \\"NEW\\",\\n    \\"queryNode\\": {\\n      \\"name\\": \\"ha-cn-pl32rf0****_qrs\\",\\n      \\"number\\": 1,\\n      \\"partition\\": 2\\n    },\\n    \\"dataNode\\": {\\n      \\"name\\": \\"general\\",\\n      \\"number\\": 1,\\n      \\"partition\\": 2\\n    },\\n    \\"createTime\\": \\"2024-05-21 16:05:26\\",\\n    \\"config\\": {\\n      \\"key\\": {\\n        \\"key\\": {\\n          \\"name\\": \\"ha-cn-pl32rf0****_offline_adv_v1\\\\n\\",\\n          \\"updateTime\\": \\"2024-05-21 16:05:26\\",\\n          \\"desc\\": \\"自定义描述\\"\\n        }\\n      }\\n    }\\n  }\\n}","type":"json"}]',
      'title' => '获取某一集群的详细信息',
      'description' => '### 方法

`GET`
### URI
`/openapi/ha3/instance/{instanceId}/clusters/{clusterName}`',
      'requestParamsDescription' => '### 请求示例
`GET /openapi/ha3/instance/ha_name_example/clusters/my_cluster`',
      'responseParamsDescription' => '### 返回示例

```
{
  "requestId": "e1eef569-1ff7-4bf8-acf7-1cecca9894ce",
  "result": {
    "name": "cluster1",
    "configUpdateTime": "2021-08-09 00:01:02",
    "CurrentAdvanceConfigVersion": "test_yyds_data1",
    "lastestAdvanceConfigVersion": "test_yyds_data1",
    "currentOnlineConfigVersion": "test_yyds_data1",
    "lastestOnlineConfigVersion": "test_yyds_data1",      
    "description": "airecpre",
    "queryNode": {
      "name":"ha-cn-0ju2iimcu07_qrs",
      "number": 1
    },
    "dataNode": {
      "name":"general",
      "number": 2,
      "partition": 1
    }    
  }
}
```',
    ),
    'GetClusterRunTimeInfo' => 
    array (
      'summary' => '获取集群信息。',
      'path' => '/openapi/ha3/instances/{instanceId}/cluster-run-time-info',
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
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '实例 ID',
            'description' => '实例 ID',
            'type' => 'string',
            'required' => true,
            'example' => 'ha-cn-pl32rf0****
',
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
            'description' => '返回结果',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求id。',
                'type' => 'string',
                'example' => 'E45380E8-994A-5402-9806-F114B3295FCF',
              ),
              'result' => 
              array (
                'title' => '结果集',
                'description' => '结果集',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '集群运行时长信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'clusterName' => 
                    array (
                      'title' => '集群名称',
                      'description' => '集群名称',
                      'type' => 'string',
                      'example' => 'vpc_hz_domain_1',
                    ),
                    'queryNode' => 
                    array (
                      'title' => '查询结点信息',
                      'description' => '查询结点信息',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'serviceStatus' => 
                        array (
                          'title' => '服务状态',
                          'description' => '服务状态',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'name' => 
                            array (
                              'description' => '集群名称',
                              'type' => 'string',
                              'example' => 'vpc_hz_domain_1
',
                            ),
                            'totalSize' => 
                            array (
                              'title' => '总大小',
                              'description' => '总大小',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '100',
                            ),
                            'doneSize' => 
                            array (
                              'title' => '完成大小',
                              'description' => '完成大小',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '100',
                            ),
                            'donePercent' => 
                            array (
                              'title' => '进度',
                              'description' => '进度',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '100',
                            ),
                          ),
                        ),
                        'configStatusList' => 
                        array (
                          'description' => '配置状态列表。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '配置状态列表。',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'configUpdateTime' => 
                              array (
                                'description' => '集群更新时间',
                                'type' => 'string',
                                'example' => '2024-05-21 16:05:26',
                              ),
                              'name' => 
                              array (
                                'description' => '集群名称',
                                'type' => 'string',
                                'example' => 'vpc_hz_domain_1
',
                              ),
                              'totalSize' => 
                              array (
                                'description' => '总大小',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '6',
                              ),
                              'doneSize' => 
                              array (
                                'description' => '完成大小',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '100',
                              ),
                              'donePercent' => 
                              array (
                                'description' => '进度',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '100',
                              ),
                            ),
                          ),
                        ),
                      ),
                    ),
                    'dataNodes' => 
                    array (
                      'title' => '数据结点信息',
                      'description' => '数据结点信息',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '集群节点信息。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'dataStatusList' => 
                          array (
                            'description' => '节点数据列表。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '节点数据列表。',
                              'type' => 'object',
                              'properties' => 
                              array (
                                'docSize' => 
                                array (
                                  'description' => '存储容量 (单位:GB)',
                                  'type' => 'integer',
                                  'format' => 'int32',
                                  'example' => '2',
                                ),
                                'fullVersion' => 
                                array (
                                  'description' => '全量版本',
                                  'type' => 'integer',
                                  'format' => 'int64',
                                  'example' => '1718846192',
                                ),
                                'incVersion' => 
                                array (
                                  'description' => '增量版本',
                                  'type' => 'integer',
                                  'format' => 'int64',
                                  'example' => '1718846192',
                                ),
                                'incUpdateTime' => 
                                array (
                                  'description' => '增量更新时间',
                                  'type' => 'string',
                                  'example' => '2024-05-21 16:05:26',
                                ),
                                'fullUpdateTime' => 
                                array (
                                  'description' => '全量更新时间',
                                  'type' => 'string',
                                  'example' => '2024-05-21 16:05:26',
                                ),
                                'indexConfigInfo' => 
                                array (
                                  'description' => '索引配置',
                                  'type' => 'object',
                                  'properties' => 
                                  array (
                                    'configMetaName' => 
                                    array (
                                      'description' => '索引配置名称',
                                      'type' => 'string',
                                      'example' => 'index_meta_name',
                                    ),
                                    'version' => 
                                    array (
                                      'description' => '索引模板的版本。',
                                      'type' => 'integer',
                                      'format' => 'int64',
                                      'example' => '1.0.0',
                                    ),
                                  ),
                                ),
                                'advanceConfigInfo' => 
                                array (
                                  'description' => '高级配置信息',
                                  'type' => 'object',
                                  'properties' => 
                                  array (
                                    'configMetaName' => 
                                    array (
                                      'description' => '索引配置名称',
                                      'type' => 'string',
                                      'example' => 'index_meta_name',
                                    ),
                                    'version' => 
                                    array (
                                      'description' => '版本号。',
                                      'type' => 'integer',
                                      'format' => 'int64',
                                      'example' => '1.0',
                                    ),
                                  ),
                                ),
                                'lackMemWorker' => 
                                array (
                                  'description' => '因缺少内存而失败的worker的name',
                                  'type' => 'array',
                                  'items' => 
                                  array (
                                    'description' => '失败的worker的name',
                                    'type' => 'string',
                                    'example' => 'test-fail-worker
',
                                  ),
                                ),
                                'deployFailedWorker' => 
                                array (
                                  'description' => '因部署失败而失败的worker的name',
                                  'type' => 'array',
                                  'items' => 
                                  array (
                                    'description' => '失败的worker的name',
                                    'type' => 'string',
                                    'example' => 'test-fail-worker
',
                                  ),
                                ),
                                'lackDiskWorker' => 
                                array (
                                  'description' => '因缺少磁盘而失败的worker的name',
                                  'type' => 'array',
                                  'items' => 
                                  array (
                                    'description' => '失败的worker的name',
                                    'type' => 'string',
                                    'example' => 'test-fail-worker',
                                  ),
                                ),
                                'errorMsg' => 
                                array (
                                  'description' => '错误信息。',
                                  'type' => 'string',
                                  'example' => '0A3B1C48006A6C0905F6375F4821EB50',
                                ),
                                'indexSize' => 
                                array (
                                  'description' => '索引长度',
                                  'type' => 'integer',
                                  'format' => 'int64',
                                  'example' => '100',
                                ),
                                'name' => 
                                array (
                                  'description' => '节点名称',
                                  'type' => 'string',
                                  'example' => 'ha-cn-pl32rf0****_qrs',
                                ),
                                'totalSize' => 
                                array (
                                  'description' => '总大小',
                                  'type' => 'integer',
                                  'format' => 'int32',
                                  'example' => '1',
                                ),
                                'doneSize' => 
                                array (
                                  'description' => '完成大小',
                                  'type' => 'integer',
                                  'format' => 'int32',
                                  'example' => '100',
                                ),
                                'donePercent' => 
                                array (
                                  'description' => '总共完成的进度',
                                  'type' => 'integer',
                                  'format' => 'int32',
                                  'example' => '100',
                                ),
                              ),
                            ),
                          ),
                          'serviceStatus' => 
                          array (
                            'description' => '服务状态。',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'name' => 
                              array (
                                'description' => '名称',
                                'type' => 'string',
                                'example' => 'ha-cn-pl32rf0****_qrs',
                              ),
                              'totalSize' => 
                              array (
                                'description' => '集群总节点数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '100',
                              ),
                              'doneSize' => 
                              array (
                                'description' => '集群处理中的节点数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '100',
                              ),
                              'donePercent' => 
                              array (
                                'description' => '总共完成进度',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '100',
                              ),
                            ),
                          ),
                          'configStatusList' => 
                          array (
                            'description' => '配置状态列表',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '响应体',
                              'type' => 'object',
                              'properties' => 
                              array (
                                'configUpdateTime' => 
                                array (
                                  'description' => '集群更新时间',
                                  'type' => 'string',
                                  'example' => '2024-05-21 16:05:26',
                                ),
                                'name' => 
                                array (
                                  'description' => '集群名称',
                                  'type' => 'string',
                                  'example' => 'test_0704',
                                ),
                                'totalSize' => 
                                array (
                                  'description' => '总大小',
                                  'type' => 'integer',
                                  'format' => 'int32',
                                  'example' => '0',
                                ),
                                'doneSize' => 
                                array (
                                  'description' => '完成大小',
                                  'type' => 'integer',
                                  'format' => 'int32',
                                  'example' => '1',
                                ),
                                'donePercent' => 
                                array (
                                  'description' => '总共完成的进度',
                                  'type' => 'integer',
                                  'format' => 'int32',
                                  'example' => '100',
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
        500 => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"E45380E8-994A-5402-9806-F114B3295FCF\\",\\n  \\"result\\": [\\n    {\\n      \\"clusterName\\": \\"vpc_hz_domain_1\\",\\n      \\"queryNode\\": {\\n        \\"serviceStatus\\": {\\n          \\"name\\": \\"vpc_hz_domain_1\\\\n\\",\\n          \\"totalSize\\": 100,\\n          \\"doneSize\\": 100,\\n          \\"donePercent\\": 100\\n        },\\n        \\"configStatusList\\": [\\n          {\\n            \\"configUpdateTime\\": \\"2024-05-21 16:05:26\\",\\n            \\"name\\": \\"vpc_hz_domain_1\\\\n\\",\\n            \\"totalSize\\": 6,\\n            \\"doneSize\\": 100,\\n            \\"donePercent\\": 100\\n          }\\n        ]\\n      },\\n      \\"dataNodes\\": [\\n        {\\n          \\"dataStatusList\\": [\\n            {\\n              \\"docSize\\": 2,\\n              \\"fullVersion\\": 1718846192,\\n              \\"incVersion\\": 1718846192,\\n              \\"incUpdateTime\\": \\"2024-05-21 16:05:26\\",\\n              \\"fullUpdateTime\\": \\"2024-05-21 16:05:26\\",\\n              \\"indexConfigInfo\\": {\\n                \\"configMetaName\\": \\"index_meta_name\\",\\n                \\"version\\": 0\\n              },\\n              \\"advanceConfigInfo\\": {\\n                \\"configMetaName\\": \\"index_meta_name\\",\\n                \\"version\\": 1\\n              },\\n              \\"lackMemWorker\\": [\\n                \\"test-fail-worker\\\\n\\"\\n              ],\\n              \\"deployFailedWorker\\": [\\n                \\"test-fail-worker\\\\n\\"\\n              ],\\n              \\"lackDiskWorker\\": [\\n                \\"test-fail-worker\\"\\n              ],\\n              \\"errorMsg\\": \\"0A3B1C48006A6C0905F6375F4821EB50\\",\\n              \\"indexSize\\": 100,\\n              \\"name\\": \\"ha-cn-pl32rf0****_qrs\\",\\n              \\"totalSize\\": 1,\\n              \\"doneSize\\": 100,\\n              \\"donePercent\\": 100\\n            }\\n          ],\\n          \\"serviceStatus\\": {\\n            \\"name\\": \\"ha-cn-pl32rf0****_qrs\\",\\n            \\"totalSize\\": 100,\\n            \\"doneSize\\": 100,\\n            \\"donePercent\\": 100\\n          },\\n          \\"configStatusList\\": [\\n            {\\n              \\"configUpdateTime\\": \\"2024-05-21 16:05:26\\",\\n              \\"name\\": \\"test_0704\\",\\n              \\"totalSize\\": 0,\\n              \\"doneSize\\": 1,\\n              \\"donePercent\\": 100\\n            }\\n          ]\\n        }\\n      ]\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '获取集群信息',
      'description' => '### 方法
GET
### URI
/openapi/ha3/instances/{instanceId}/cluster-run-time-info',
      'requestParamsDescription' => '### 请求示例
`GET /openapi/ha3/instances/ose-test1/cluster-run-time-info`',
      'responseParamsDescription' => '### 返回示例
正确返回

```java
{
  "requestId": "38b079f1-7846-4226-8c90-3e2644b5c52b",
  "result": [
    {
      "clusterName": "",
      "queryNode": {
        "serviceStatus": {
          "name": "service_name",
          "totalSize": 1,
          "doneSize": 1,
          "donePercent": 100
        },
        "configStatusList": [
          {
            "name": "default",
            "totalSize": 1,
            "doneSize": 1,
            "donePercent": 100,
            "configUpdateTime": ""
          }
        ]
      },
      "dataNodes": [
        {
          "serviceStatus": {
            "name": "service_name",
            "totalSize": 1,
            "doneSize": 1,
            "donePercent": 100
          },
          "configStatusList": [
            {
              "name": "default",
              "totalSize": 1,
              "doneSize": 1,
              "donePercent": 100,
              "configUpdateTime": ""
            }
          ],
          "dataStatusList": [
            {
              "name": "index1",
              "totalSize": 1,
              "doneSize": 1,
              "donePercent": 100,
              "docSize": 123423,
              "fullVersion": 123423,
              "incVersion": 123423,
              "incUpdateTime": "",
              "fullUpdateTime": "",
              "indexConfigInfo": {
                "configMetaName": "index_meta_name",
                "version": 13241234
              },
              "advanceConfigInfo": {
                "configMetaName": "advance_meta_name",
                "version": 13241234
              },
              "lackMemWorker": [
                "worker1",
                "worker2"
              ],
              "deployFailedWorker": [
                "worker3",
                "worker4"
              ],
              "lackDiskWorker": [
                "worker5",
                "worker6"
              ],
              "errorMsg": "lackMemWorker/deployFailedWorker/lackDiskWorker"
            },
            {
              "name": "index1",
              "totalSize": 1,
              "doneSize": 1,
              "donePercent": 100,
              "docSize": 123423,
              "fullVersion": 123423,
              "incVersion": 123423,
              "incUpdateTime": "",
              "fullUpdateTime": "",
              "indexConfigInfo": {
                "configMetaName": "index_meta_name",
                "version": 13241234
              },
              "advanceConfigInfo": {
                "configMetaName": "advance_meta_name",
                "version": 13241234
              },
              "lackMemWorker": [
                "worker1",
                "worker2"
              ],
              "deployFailedWorker": [
                "worker3",
                "worker4"
              ],
              "lackDiskWorker": [
                "worker5",
                "worker6"
              ],
              "errorMsg": "lackMemWorker/deployFailedWorker/lackDiskWorker"
            }
          ]
        }
      ]
    }
  ]
}
```
',
      'extraInfo' => '

',
    ),
    'ListClusterNames' => 
    array (
      'summary' => '获取集群可选择的名称。',
      'path' => '/openapi/ha3/cluster-names',
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
        'operationType' => 'list',
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
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'title' => 'id of request',
                'description' => 'id of request',
                'type' => 'string',
                'example' => 'F6E3D968-529C-5C40-AFDD-133A8B8FD930',
              ),
              'result' => 
              array (
                'title' => 'ClusterNameInfo',
                'description' => '结果集',
                'type' => 'object',
                'properties' => 
                array (
                  'name' => 
                  array (
                    'title' => '集群名称',
                    'description' => '集群名称',
                    'type' => 'string',
                    'example' => 'hz_pre_vpc_domain_1',
                  ),
                  'description' => 
                  array (
                    'title' => '集群描述',
                    'description' => '集群描述',
                    'type' => 'string',
                    'example' => '自定义描述',
                  ),
                  'id' => 
                  array (
                    'description' => '集群id',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '25030',
                  ),
                ),
              ),
            ),
          ),
        ),
        500 => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"F6E3D968-529C-5C40-AFDD-133A8B8FD930\\",\\n  \\"result\\": {\\n    \\"name\\": \\"hz_pre_vpc_domain_1\\",\\n    \\"description\\": \\"自定义描述\\",\\n    \\"id\\": 25030\\n  }\\n}","type":"json"}]',
      'title' => '获取集群可选择的名称',
      'description' => '### 方法

GET

### URI
/openapi/ha3/instances/{instanceId}/cluster-names',
      'requestParamsDescription' => '### 请求示例

```java
GET /openapi/ha3/instances/ha3_instance_name/cluster-names
```',
      'responseParamsDescription' => '### 返回示例
正确返回

```java
{
  "requestId": "e1eef569-1ff7-4bf8-acf7-1cecca9894ce",
  "result": [
    {
      "name":"pre",
      "description":"pre机房",
      "id": 1,
    }
  ]
}
```',
      'extraInfo' => '## 示例

### 请求示例

```java
GET /openapi/ha3/instances/ha3_instance_name/cluster-names
```
###返回示例
正确返回

```java
{
  "requestId": "e1eef569-1ff7-4bf8-acf7-1cecca9894ce",
  "result": [
    {
      "name":"pre",
      "description":"pre机房",
      "id": 1,
    }
  ]
}
```',
    ),
    'ListClusters' => 
    array (
      'path' => '/openapi/ha3/instances/{instanceId}/clusters',
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
        'operationType' => 'list',
        'abilityTreeCode' => '103715',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREopensearch5EAGY5',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID',
            'type' => 'string',
            'required' => true,
            'example' => 'ha-cn-pl32rf0****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'title' => 'id of request',
                'description' => 'id of request',
                'type' => 'string',
                'example' => 'F43E8AB4-419C-5F4C-90D6-615590DFAA3C',
              ),
              'result' => 
              array (
                'title' => 'List',
                'description' => '集群列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '集群列表',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'name' => 
                    array (
                      'title' => '集群名称(对应后端domainName)',
                      'description' => '集群名称',
                      'type' => 'string',
                      'example' => 'hz_pre_vpc_domain_1',
                    ),
                    'description' => 
                    array (
                      'title' => '集群描述',
                      'description' => '集群描述',
                      'type' => 'string',
                      'example' => '自定义描述',
                    ),
                    'currentAdvanceConfigVersion' => 
                    array (
                      'title' => '高级配置生效版本',
                      'description' => '高级配置生效版本',
                      'type' => 'string',
                      'example' => 'ha-cn-pl32rf0****_offline_adv_v1',
                    ),
                    'latestAdvanceConfigVersion' => 
                    array (
                      'title' => '高级配置最新版本',
                      'description' => '高级配置最新版本',
                      'type' => 'string',
                      'example' => 'ha-cn-pl32rf0****_offline_adv_v1',
                    ),
                    'currentOnlineConfigVersion' => 
                    array (
                      'title' => '在线配置生效版本',
                      'description' => '在线配置生效版本',
                      'type' => 'string',
                      'example' => 'ha-cn-pl32rf0****_offline_adv_v1',
                    ),
                    'latestOnlineConfigVersion' => 
                    array (
                      'title' => '在线配置最新版本',
                      'description' => '在线配置最新版本',
                      'type' => 'string',
                      'example' => 'ha-cn-pl32rf0****_offline_adv_v1',
                    ),
                    'currentOnlineQueryConfigVersion' => 
                    array (
                      'title' => '查询配置生效版本',
                      'description' => '查询配置生效版本',
                      'type' => 'string',
                      'example' => 'ha-cn-pl32rf0****_offline_adv_v1',
                    ),
                    'latestOnlineQueryConfigVersion' => 
                    array (
                      'title' => '查询配置最新版本',
                      'description' => '查询配置最新版本',
                      'type' => 'string',
                      'example' => 'ha-cn-pl32rf0****_offline_adv_v1',
                    ),
                    'currentOfflineDictConfigVersion' => 
                    array (
                      'title' => '词典配置生效版本',
                      'description' => '词典配置生效版本',
                      'type' => 'string',
                      'example' => 'ha-cn-pl32rf0****_offline_adv_v1',
                    ),
                    'latestOfflineDictConfigVersion' => 
                    array (
                      'title' => '词典配置最新版本',
                      'description' => '词典配置最新版本',
                      'type' => 'string',
                      'example' => 'ha-cn-pl32rf0****_offline_adv_v1',
                    ),
                    'configUpdateTime' => 
                    array (
                      'title' => '配置更新时间',
                      'description' => '配置更新时间',
                      'type' => 'string',
                      'example' => '2024-05-21 16:05:26',
                    ),
                    'status' => 
                    array (
                      'description' => '集群状态。取值：-running：运行中-starting：启动中-stopping：停止中-stopped：已停止',
                      'type' => 'string',
                      'example' => 'running',
                    ),
                    'queryNode' => 
                    array (
                      'title' => '查询节点',
                      'description' => '集群搜索节点。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'name' => 
                        array (
                          'title' => '节点名称',
                          'description' => '节点名称',
                          'type' => 'string',
                          'example' => 'ha-cn-pl32rf0****_qrs',
                        ),
                        'number' => 
                        array (
                          'title' => '节点数量',
                          'description' => '节点数量。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'partition' => 
                        array (
                          'title' => '副本数量',
                          'description' => '副本数量',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                      ),
                    ),
                    'dataNode' => 
                    array (
                      'title' => '数据节点',
                      'description' => '集群中的节点信息',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'name' => 
                        array (
                          'title' => '节点名称',
                          'description' => '节点名称',
                          'type' => 'string',
                          'example' => 'general',
                        ),
                        'number' => 
                        array (
                          'title' => '节点数量',
                          'description' => '节点数',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'partition' => 
                        array (
                          'title' => '副本数量',
                          'description' => '节点分区id。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                      ),
                    ),
                    'createTime' => 
                    array (
                      'description' => '创建时间',
                      'type' => 'string',
                      'example' => '2024-05-21 16:05:26',
                    ),
                    'config' => 
                    array (
                      'description' => '配置信息',
                      'type' => 'object',
                      'additionalProperties' => 
                      array (
                        'type' => 'object',
                        'additionalProperties' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'name' => 
                            array (
                              'type' => 'string',
                              'example' => 'ha-cn-pl32rf0****_offline_adv_v1',
                              'description' => '配置名称',
                            ),
                            'updateTime' => 
                            array (
                              'type' => 'string',
                              'description' => '更新时间',
                              'example' => '2024-05-21 16:05:26',
                            ),
                            'desc' => 
                            array (
                              'type' => 'string',
                              'description' => '描述',
                              'example' => '自定义描述',
                            ),
                          ),
                          'description' => '子配置项信息',
                        ),
                        'description' => '配置信息',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        500 => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"F43E8AB4-419C-5F4C-90D6-615590DFAA3C\\",\\n  \\"result\\": [\\n    {\\n      \\"name\\": \\"hz_pre_vpc_domain_1\\",\\n      \\"description\\": \\"自定义描述\\",\\n      \\"currentAdvanceConfigVersion\\": \\"ha-cn-pl32rf0****_offline_adv_v1\\",\\n      \\"latestAdvanceConfigVersion\\": \\"ha-cn-pl32rf0****_offline_adv_v1\\",\\n      \\"currentOnlineConfigVersion\\": \\"ha-cn-pl32rf0****_offline_adv_v1\\",\\n      \\"latestOnlineConfigVersion\\": \\"ha-cn-pl32rf0****_offline_adv_v1\\",\\n      \\"currentOnlineQueryConfigVersion\\": \\"ha-cn-pl32rf0****_offline_adv_v1\\",\\n      \\"latestOnlineQueryConfigVersion\\": \\"ha-cn-pl32rf0****_offline_adv_v1\\",\\n      \\"currentOfflineDictConfigVersion\\": \\"ha-cn-pl32rf0****_offline_adv_v1\\",\\n      \\"latestOfflineDictConfigVersion\\": \\"ha-cn-pl32rf0****_offline_adv_v1\\",\\n      \\"configUpdateTime\\": \\"2024-05-21 16:05:26\\",\\n      \\"status\\": \\"running\\",\\n      \\"queryNode\\": {\\n        \\"name\\": \\"ha-cn-pl32rf0****_qrs\\",\\n        \\"number\\": 1,\\n        \\"partition\\": 1\\n      },\\n      \\"dataNode\\": {\\n        \\"name\\": \\"general\\",\\n        \\"number\\": 1,\\n        \\"partition\\": 1\\n      },\\n      \\"createTime\\": \\"2024-05-21 16:05:26\\",\\n      \\"config\\": {\\n        \\"key\\": {\\n          \\"key\\": {\\n            \\"name\\": \\"ha-cn-pl32rf0****_offline_adv_v1\\",\\n            \\"updateTime\\": \\"2024-05-21 16:05:26\\",\\n            \\"desc\\": \\"自定义描述\\"\\n          }\\n        }\\n      }\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '获取集群列表',
      'summary' => '获取集群列表。',
      'description' => '### 方法

```java
GET
```

### URI

```java
/openapi/ha3/instances/{instanceId}/clusters
```
',
      'requestParamsDescription' => '### 请求示例

```java
GET /openapi/ha3/instances/ha3_instance_name/clusters
```',
      'responseParamsDescription' => '### 返回示例

正确返回

```java
{
  "requestId": "e1eef569-1ff7-4bf8-acf7-1cecca9894ce",
  "result": [
    {
      "name": "cluster1",
      "configUpdateTime": "2021-08-09 00:01:02",
      "currentAdvanceConfigVersion": "test_yyds_data1",
      "lastestAdvanceConfigVersion": "test_yyds_data1",
      "currentOnlineConfigVersion": "test_yyds_data1",
      "lastestOnlineConfigVersion": "test_yyds_data1",        
      "description": "airecpre",
      "queryNode": {
        "number": 1
      },
      "dataNode": {
        "number": 2,
        "partition": 1
      },      
    },
    {
      "name": "cluster2",
      "configUpdateTime": "2021-08-09 00:01:02",
      "currentAdvanceConfigVersion": "test_yyds_data2",
      "lastestAdvanceConfigVersion": "test_yyds_data2",
      "currentOnlineConfigVersion": "test_yyds_data1",
      "lastestOnlineConfigVersion": "test_yyds_data1",              
      "description": "this is descrition",
      "queryNode": {
        "number": 1
      },
      "dataNode": {
        "number": 2,
        "partition": 1
      }
    }
  ]
}
```',
      'extraInfo' => '



',
    ),
    'ModifyNodeConfig' => 
    array (
      'summary' => '修改节点配置。',
      'path' => '/openapi/ha3/instances/{instanceId}/node-config',
      'methods' => 
      array (
        0 => 'put',
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
        'abilityTreeCode' => '114152',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREopensearchIQC42D',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID',
            'type' => 'string',
            'required' => true,
            'example' => 'ha-cn-pl32rf0****',
          ),
        ),
        1 => 
        array (
          'name' => 'type',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'qrs: 查询节点, search: 数据节点, index: 索引节点, cluster: 集群',
            'description' => '算法类型
- pop 人气模型
- cp 类目预测
- hot 热词
- hint 底纹
- suggest 下拉提示',
            'type' => 'string',
            'required' => true,
            'example' => 'hot',
          ),
        ),
        2 => 
        array (
          'name' => 'name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '修改前的配置名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'ha-cn-pl32rf0****_qrs',
          ),
        ),
        3 => 
        array (
          'name' => 'clusterName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'vpc_sh_domain_2',
          ),
        ),
        4 => 
        array (
          'name' => 'dataSourceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据来源名称。取值：-search：搜索数据。-not_search：不搜索数据。',
            'type' => 'string',
            'required' => false,
            'example' => 'search',
          ),
        ),
        5 => 
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
              'dataFragmentNumber' => 
              array (
                'title' => '数据分片数',
                'description' => '数据分片数',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '1',
              ),
              'dataDuplicateNumber' => 
              array (
                'title' => '数据副本数',
                'description' => '数据副本数',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '1',
              ),
              'minServicePercent' => 
              array (
                'title' => '最小服务比例',
                'description' => '最小服务比例',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '10',
              ),
              'published' => 
              array (
                'title' => '集群是否挂载',
                'description' => '集群是否挂载',
                'type' => 'boolean',
                'required' => false,
                'example' => 'true',
              ),
              'active' => 
              array (
                'title' => '在线生效（索引是否从在线下掉）',
                'description' => '在线生效（索引是否从在线下掉）',
                'type' => 'boolean',
                'required' => false,
                'example' => 'true',
              ),
              'flowRatio' => 
              array (
                'description' => '流量比例',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '100',
              ),
            ),
            'required' => false,
            'example' => '{\\"desc\\":\\"new version\\"}',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'title' => 'id of request',
                'description' => 'id of request',
                'type' => 'string',
                'example' => 'D39EE0F1-D7EF-5F46-B781-6BF4185308B0',
              ),
              'result' => 
              array (
                'title' => 'Map',
                'description' => '索引信息',
                'type' => 'object',
                'example' => '{}',
              ),
            ),
          ),
        ),
        500 => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"D39EE0F1-D7EF-5F46-B781-6BF4185308B0\\",\\n  \\"result\\": {}\\n}","type":"json"}]',
      'title' => '修改节点配置',
      'description' => '### 方法

```java
PUT
```

### URI

```java
/openapi/ha3/instances/{instanceId}/node-config?type=qrs&name=test
```
',
      'requestParamsDescription' => '### 请求示例

```java
PUT /openapi/ha3/instances/{instanceId}/node-config?type=qrs&name=test
```

﻿

```java
{
﻿
  "dataFragmentNumber":1,//查询节点+数据结点
﻿
  "dataDuplicateNumber":1,//查询节点+数据结点
﻿
  "minServicePercent":20,//查询节点+数据结点
﻿
  "published":true,//集群
﻿
  "active": true //index
﻿
}
```',
      'responseParamsDescription' => '### 返回示例

正确返回
﻿

```java
{
﻿
  "requestId": "0A6EB64B-B4C8-CF02-810F-E660812972FF",
﻿
  "result": []
﻿
}
```
详情可参考[响应结构](~~465311~~)',
    ),
    'GetDeployGraph' => 
    array (
      'summary' => '展示部署全局概览。',
      'path' => '/openapi/ha3/instances/{instanceId}/deploy-graph',
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
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID',
            'type' => 'string',
            'required' => false,
            'example' => 'ha-cn-pl32rf0****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'title' => 'id of request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => 'E7B7D598-B080-5C8E-AA35-D43EC0D5F886',
              ),
              'result' => 
              array (
                'title' => 'DeployGraph',
                'description' => '返回结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'graph' => 
                  array (
                    'description' => '部署信息',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'onlineMaster' => 
                      array (
                        'title' => '在线集群元信息',
                        'description' => '在线集群元信息',
                        'type' => 'array',
                        'items' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'id' => 
                            array (
                              'description' => '机房id',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '1',
                            ),
                            'name' => 
                            array (
                              'description' => '在线集群名称',
                              'type' => 'string',
                              'example' => '	
ha-cn-pl32rf0****_hz_pre_vpc_domain_1',
                            ),
                            'domainName' => 
                            array (
                              'description' => '机房',
                              'type' => 'string',
                              'example' => 'hz_pre_vpc_domain_1',
                            ),
                            'hippoId' => 
                            array (
                              'description' => '资源id',
                              'type' => 'string',
                              'example' => '5377',
                            ),
                          ),
                        ),
                      ),
                      'zoneMetas' => 
                      array (
                        'title' => 'zone元信息',
                        'description' => 'zone元信息列表',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => 'zone元信息',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'name' => 
                            array (
                              'description' => '节点名称',
                              'type' => 'string',
                              'example' => 'ha-cn-pl32rf0****_qrs',
                            ),
                            'tag' => 
                            array (
                              'description' => '标签',
                              'type' => 'string',
                              'example' => '	
ha-cn-pl32rf0****_qrs_hz_pre_vpc_domain_1',
                            ),
                            'suezAdminName' => 
                            array (
                              'description' => 'suez admin名称',
                              'type' => 'string',
                              'example' => '	
ha-cn-pl32rf0****_hz_pre_vpc_domain_1',
                            ),
                            'type' => 
                            array (
                              'description' => '类型',
                              'type' => 'string',
                              'example' => 'qrs',
                            ),
                            'domainInfo' => 
                            array (
                              'description' => '机房',
                              'type' => 'string',
                              'example' => 'hz_pre_vpc_domain_1',
                            ),
                          ),
                        ),
                      ),
                      'tableMetas' => 
                      array (
                        'title' => '数据源元信息',
                        'description' => '数据源元信息',
                        'type' => 'array',
                        'items' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'tableDeployId' => 
                            array (
                              'description' => '表部署id',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '2177',
                            ),
                            'name' => 
                            array (
                              'description' => '数据源名称',
                              'type' => 'string',
                              'example' => 'ha-cn-pl32rf0****_test_api',
                            ),
                            'tag' => 
                            array (
                              'description' => '标签',
                              'type' => 'string',
                              'example' => 'ha-cn-pl32rf0****_test_api_hz_pre_vpc_domain_1',
                            ),
                            'domainName' => 
                            array (
                              'description' => '机房',
                              'type' => 'string',
                              'example' => 'hz_pre_vpc_domain_1',
                            ),
                            'buildDeployId' => 
                            array (
                              'description' => '离线部署id',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '1',
                            ),
                            'type' => 
                            array (
                              'description' => '数据源类型',
                              'type' => 'string',
                              'example' => 'odps',
                            ),
                          ),
                        ),
                      ),
                      'indexMetas' => 
                      array (
                        'title' => '索引元信息',
                        'description' => '索引元信息列表',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '索引元信息',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'name' => 
                            array (
                              'description' => '索引名称',
                              'type' => 'string',
                              'example' => 'test_api',
                            ),
                            'tag' => 
                            array (
                              'description' => '标签',
                              'type' => 'string',
                              'example' => 'test_api_hz_pre_vpc_domain_1',
                            ),
                            'domainName' => 
                            array (
                              'description' => '机房',
                              'type' => 'string',
                              'example' => 'hz_pre_vpc_domain_1',
                            ),
                            'tableDeployId' => 
                            array (
                              'description' => '表部署id',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '2409',
                            ),
                            'tableName' => 
                            array (
                              'description' => '数据源名称',
                              'type' => 'string',
                              'example' => 'ha-cn-pl32rf0****_test_api',
                            ),
                            'zoneName' => 
                            array (
                              'description' => '节点名称',
                              'type' => 'string',
                              'example' => 'ha-cn-pl32rf0****_qrs',
                            ),
                          ),
                        ),
                      ),
                      'zoneIndexRelation' => 
                      array (
                        'title' => 'zone和索引关联关系',
                        'description' => 'zone和索引关联关系列表',
                        'type' => 'object',
                        'additionalProperties' => 
                        array (
                          'type' => 'array',
                          'items' => 
                          array (
                            'type' => 'string',
                            'example' => 'general_hz_pre_vpc_domain_1',
                            'description' => '索引关联集群',
                          ),
                          'description' => 'zone和索引关联关系',
                        ),
                      ),
                      'tableIndexRelation' => 
                      array (
                        'title' => '数据源和索引关联关系',
                        'description' => '数据源和索引关联关系列表',
                        'type' => 'object',
                        'additionalProperties' => 
                        array (
                          'type' => 'array',
                          'items' => 
                          array (
                            'type' => 'string',
                            'example' => 'test_api_hz_pre_vpc_domain_1',
                            'description' => '索引关联表',
                          ),
                          'description' => '数据源和索引关联关系',
                        ),
                      ),
                    ),
                  ),
                ),
                'example' => '{}',
              ),
            ),
          ),
        ),
        500 => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"E7B7D598-B080-5C8E-AA35-D43EC0D5F886\\",\\n  \\"result\\": {\\n    \\"graph\\": {\\n      \\"onlineMaster\\": [\\n        {\\n          \\"id\\": 1,\\n          \\"name\\": \\"\\\\t\\\\nha-cn-pl32rf0****_hz_pre_vpc_domain_1\\",\\n          \\"domainName\\": \\"hz_pre_vpc_domain_1\\",\\n          \\"hippoId\\": \\"5377\\"\\n        }\\n      ],\\n      \\"zoneMetas\\": [\\n        {\\n          \\"name\\": \\"ha-cn-pl32rf0****_qrs\\",\\n          \\"tag\\": \\"\\\\t\\\\nha-cn-pl32rf0****_qrs_hz_pre_vpc_domain_1\\",\\n          \\"suezAdminName\\": \\"\\\\t\\\\nha-cn-pl32rf0****_hz_pre_vpc_domain_1\\",\\n          \\"type\\": \\"qrs\\",\\n          \\"domainInfo\\": \\"hz_pre_vpc_domain_1\\"\\n        }\\n      ],\\n      \\"tableMetas\\": [\\n        {\\n          \\"tableDeployId\\": 2177,\\n          \\"name\\": \\"ha-cn-pl32rf0****_test_api\\",\\n          \\"tag\\": \\"ha-cn-pl32rf0****_test_api_hz_pre_vpc_domain_1\\",\\n          \\"domainName\\": \\"hz_pre_vpc_domain_1\\",\\n          \\"buildDeployId\\": 1,\\n          \\"type\\": \\"odps\\"\\n        }\\n      ],\\n      \\"indexMetas\\": [\\n        {\\n          \\"name\\": \\"test_api\\",\\n          \\"tag\\": \\"test_api_hz_pre_vpc_domain_1\\",\\n          \\"domainName\\": \\"hz_pre_vpc_domain_1\\",\\n          \\"tableDeployId\\": 2409,\\n          \\"tableName\\": \\"ha-cn-pl32rf0****_test_api\\",\\n          \\"zoneName\\": \\"ha-cn-pl32rf0****_qrs\\"\\n        }\\n      ],\\n      \\"zoneIndexRelation\\": {\\n        \\"key\\": [\\n          \\"general_hz_pre_vpc_domain_1\\"\\n        ]\\n      },\\n      \\"tableIndexRelation\\": {\\n        \\"key\\": [\\n          \\"test_api_hz_pre_vpc_domain_1\\"\\n        ]\\n      }\\n    }\\n  }\\n}","type":"json"}]',
      'title' => '展示部署全局概览',
      'description' => '## 方法

GET

## URI

```java
/openapi/ha3/instances/{instanceId}/deploy-graph
```
',
      'requestParamsDescription' => '
### 请求示例

```java
﻿
GET /openapi/ha3/instances/{instanceId}/deploy-graph
```',
      'responseParamsDescription' => '

### 返回示例
正确返回
﻿

```java
{
﻿
  "requestId": "0A6EB64B-B4C8-CF02-810F-E660812972FF",
﻿
  "result": {
﻿
    "app": {
﻿
      "creator": "74087",
﻿
      "gmtModified": 1628151698000,
﻿
      "groupId": 596,
﻿
      "platformType": "tisplus",
﻿
      "description": "qrs改写插件测试集群，测试同学不要使用",
﻿
      "gmtCreate": 1628151698000,
﻿
      "isActive": 0,
﻿
      "type": "online_group",
﻿
      "appStatus": 0,
﻿
      "procStatus": 0,
﻿
      "isDeleted": 0,
﻿
      "name": "search4TestPlugin",
﻿
      "id": 5171
﻿
    },
﻿
    "hippos": [],
﻿
    "appGroupName": "多biz测试业务线",
﻿
    "name": "search4TestPlugin",
﻿
    "availableDeploys": [
﻿
      {
﻿
        "gmtModified": 1594193012000,
﻿
        "virtualDomainList": "6,7,8",
﻿
        "platformType": "[\\"tisplus\\",\\"tisplus_khronos\\",\\"tisplus_dingtalk\\"]",
﻿
        "description": "pre_et2机房",
﻿
        "groups": "",
﻿
        "gmtCreate": 1565752477000,
﻿
        "type": "INNET",
﻿
        "modules": "[\\"online\\"]",
﻿
        "foundationDetailList": "15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,94",
﻿
        "name": "pre_et2",
﻿
        "hippoId": "hippo_et2_7u",
﻿
        "id": 5
﻿
      },
﻿
      {
﻿
        "gmtModified": 1571642223000,
﻿
        "platformType": "[\\"tisplus\\"]",
﻿
        "description": "预发oc27机房",
﻿
        "groups": "",
﻿
        "gmtCreate": 1571642223000,
﻿
        "type": "INNET",
﻿
        "modules": "[\\"online\\"]",
﻿
        "foundationDetailList": "67,68,69,70,71,72,73,74,75,76,77,78,79",
﻿
        "name": "oc27_pre",
﻿
        "hippoId": "hippo_7u_oc27",
﻿
        "id": 15
﻿
      }
﻿
    ],
﻿
    "graph": {
﻿
      "zoneMetas": [
﻿
        {
﻿
          "suezAdminName": "search4TestPlugin_pre",
﻿
          "zoneMetaId": 8509,
﻿
          "domainInfo": "pre",
﻿
          "mainZone": true,
﻿
          "name": "search4TestPlugin_qrs",
﻿
          "zoneId": 11379,
﻿
          "tag": "search4TestPlugin_qrs_pre",
﻿
          "clusterId": 5265,
﻿
          "type": "qrs"
﻿
        },
﻿
        {
﻿
          "suezAdminName": "search4TestPlugin_pre",
﻿
          "zoneMetaId": 8510,
﻿
          "domainInfo": "pre",
﻿
          "mainZone": true,
﻿
          "name": "test_searcher",
﻿
          "zoneId": 11380,
﻿
          "tag": "test_searcher_pre",
﻿
          "clusterId": 5265,
﻿
          "type": "searcher"
﻿
        }
﻿
      ],
﻿
      "tableIndexRelation": {
﻿
        "product_sku_pre_ea120": [
﻿
          "product_sku_pre_ea120"
﻿
        ]
﻿
      },
﻿
      "onlineMaster": [
﻿
        {
﻿
          "appId": 5171,
﻿
          "domainId": 1,
﻿
          "domainName": "pre",
﻿
          "gmtCreate": 1628561292000,
﻿
          "gmtModified": 1628562498000,
﻿
          "hippoGroupId": "20",
﻿
          "id": 5265,
﻿
          "monitorStatus": 1,
﻿
          "name": "search4TestPlugin_pre",
﻿
          "processorInfoId": 27789,
﻿
          "zkAddr": ""
﻿
        }
﻿
      ],
﻿
      "indexMetas": [
﻿
        {
﻿
          "tableDeployId": 7366,
﻿
          "zoneMetaId": 8510,
﻿
          "domainName": "pre_ea120",
﻿
          "name": "product_sku",
﻿
          "tableId": 6866,
﻿
          "tag": "product_sku_pre_ea120",
﻿
          "zoneName": "test_searcher",
﻿
          "tableName": "product_sku"
﻿
        }
﻿
      ],
﻿
      "offlineMaster": [
﻿
        {
﻿
          "appId": 5214,
﻿
          "domainId": 18,
﻿
          "domainName": "pre_ea120",
﻿
          "gmtCreate": 1628501863000,
﻿
          "gmtModified": 1628501863000,
﻿
          "id": 3751,
﻿
          "isPublic": 2,
﻿
          "monitorStatus": 1,
﻿
          "name": "search4_multi_biz_bs",
﻿
          "platformType": "tisplus",
﻿
          "processorInfoId": 27755,
﻿
          "zkAddr": ""
﻿
        }
```
',
    ),
    'GetNodeConfig' => 
    array (
      'summary' => '获取节点配置信息。',
      'path' => '/openapi/ha3/instances/{instanceId}/node-config',
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
        'abilityTreeCode' => '104681',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREopensearchIQC42D',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例 ID',
            'type' => 'string',
            'required' => true,
            'example' => 'ha-cn-pl32rf0****',
          ),
        ),
        1 => 
        array (
          'name' => 'type',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'qrs: 查询节点, search: 数据节点, index: 索引节点, cluster: 集群',
            'description' => '节点类型

- qrs：查询节点
- search：数据节点
- index：索引节点
- cluster：集群',
            'type' => 'string',
            'required' => false,
            'example' => 'index',
          ),
        ),
        2 => 
        array (
          'name' => 'name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '节点名称',
            'type' => 'string',
            'required' => false,
            'example' => 'ha-cn-30174dhoz53_qrs',
          ),
        ),
        3 => 
        array (
          'name' => 'clusterName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '集群名称',
            'type' => 'string',
            'required' => false,
            'example' => 'vpc_sh_domain_2',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'title' => 'id of request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => '2AE63638-5420-56DC-BF59-37D8174039A0',
              ),
              'result' => 
              array (
                'title' => 'NodeConfig',
                'description' => '结果集',
                'type' => 'object',
                'properties' => 
                array (
                  'dataFragmentNumber' => 
                  array (
                    'title' => '数据分片数',
                    'description' => '数据分片数',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'dataDuplicateNumber' => 
                  array (
                    'title' => '数据副本数',
                    'description' => '数据副本数',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'minServicePercent' => 
                  array (
                    'title' => '最小服务比例',
                    'description' => '最小服务比例',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '50',
                  ),
                  'published' => 
                  array (
                    'title' => '集群是否挂载',
                    'description' => '集群是否挂载',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'active' => 
                  array (
                    'title' => '在线生效（索引是否从在线下掉）',
                    'description' => '在线生效（索引是否从在线下掉）',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'flowRatio' => 
                  array (
                    'description' => '流量比例',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '100',
                  ),
                ),
              ),
            ),
          ),
        ),
        500 => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"2AE63638-5420-56DC-BF59-37D8174039A0\\",\\n  \\"result\\": {\\n    \\"dataFragmentNumber\\": 1,\\n    \\"dataDuplicateNumber\\": 1,\\n    \\"minServicePercent\\": 50,\\n    \\"published\\": true,\\n    \\"active\\": true,\\n    \\"flowRatio\\": 100\\n  }\\n}","type":"json"}]',
      'title' => '获取节点配置信息',
      'description' => '### 方法

```java
GET
```

### URI

```java
/openapi/ha3/instances/{instanceId}/node-config
```
',
      'requestParamsDescription' => '### 请求示例

```java
GET /openapi/ha3/instances/{instanceId}/node-config?type=qrs&name=test&
```',
      'responseParamsDescription' => '


### 返回示例
正确返回
﻿
```java
{
﻿
  "requestId": "0A6EB64B-B4C8-CF02-810F-E660812972FF",
﻿
  "result": {
﻿
    "dataFragmentNumber":1,
﻿
    "dataDuplicateNumber":1,
﻿
    "minServicePercent":20,
﻿
    "published":true,
﻿
    "active": true  // 在线是否生效
﻿
  }
﻿
}
```
',
    ),
    'ListTasks' => 
    array (
      'summary' => '获取集群任务列表（数据源+集群）',
      'path' => '/openapi/ha3/instances/{instanceId}/tasks',
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
        'operationType' => 'none',
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '211712',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREopensearchW54CZ4',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID',
            'type' => 'string',
            'required' => true,
            'example' => 'ha-cn-ha-cn-pl32rf0****',
          ),
        ),
        1 => 
        array (
          'name' => 'start',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '日程开始时间。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1718846192',
          ),
        ),
        2 => 
        array (
          'name' => 'end',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '日程结束时间。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1718846192',
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
                'title' => 'id of request',
                'description' => 'id of request',
                'type' => 'string',
                'example' => 'D39EE0F1-D7EF-5F46-B781-6BF4185308B0',
              ),
              'result' => 
              array (
                'title' => 'Object',
                'description' => 'Object',
                'type' => 'any',
                'example' => '{}',
              ),
            ),
          ),
        ),
        500 => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"D39EE0F1-D7EF-5F46-B781-6BF4185308B0\\",\\n  \\"result\\": \\"{}\\"\\n}","type":"json"}]',
      'title' => '获取实例的变更历史',
    ),
    'ListClusterTasks' => 
    array (
      'summary' => '展示集群任务

。',
      'path' => '/openapi/ha3/instances/{instanceId}/cluster-tasks',
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
        'operationType' => 'list',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '实例ID',
            'description' => '实例ID',
            'type' => 'string',
            'required' => true,
            'example' => 'ha-cn-pl32rf0****',
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
                'title' => 'id of request',
                'description' => 'id of request',
                'type' => 'string',
                'example' => 'CC5EC8FA-5C0D-56AF-BEF4-6FCCEABD0511',
              ),
              'result' => 
              array (
                'title' => '索引信息',
                'description' => '索引信息',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '集群列表信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'groupType' => 
                    array (
                      'title' => '变更分组类型',
                      'description' => '变更分组类型',
                      'type' => 'string',
                      'example' => 'Table_Update',
                    ),
                    'fsmId' => 
                    array (
                      'title' => 'fsmId',
                      'description' => 'fsmId',
                      'type' => 'string',
                      'example' => 'tisplus_opensearch@datasource_flow_fsm@1865410598556969-ha-cn-pl32rf0****_api2@bj_vpc_domain_1@null@MANUAL-ha-cn-pl32rf0****_api2@1649729867698@028315',
                    ),
                    'name' => 
                    array (
                      'title' => '卡片的名字',
                      'description' => '卡片的名字',
                      'type' => 'string',
                      'example' => 'ha-cn-pl32rf0****_qrs',
                    ),
                    'time' => 
                    array (
                      'title' => '卡片的时间戳',
                      'description' => '卡片的时间戳',
                      'type' => 'string',
                      'example' => '1657610520',
                    ),
                    'type' => 
                    array (
                      'title' => '卡片的类型',
                      'description' => '卡片的类型',
                      'type' => 'string',
                      'example' => 'mra_table_config_trace_fsm',
                    ),
                    'user' => 
                    array (
                      'title' => '触发生成fsm流程的用户',
                      'description' => '触发生成fsm流程的用户',
                      'type' => 'string',
                      'example' => 'admin',
                    ),
                    'status' => 
                    array (
                      'title' => 'FSM整体状态',
                      'description' => 'FSM整体状态',
                      'type' => 'string',
                      'example' => 'onlyPublished',
                    ),
                    'extraAttribute' => 
                    array (
                      'title' => '卡片的额外属性',
                      'description' => '卡片的额外属性',
                      'type' => 'string',
                      'example' => '{
	"consoleVersion": "",
	"domain": "hz_pre_vpc_domain_1",
	"configType": "offline"
}',
                    ),
                    'field3' => 
                    array (
                      'title' => '创建状态机时透传的field3字段',
                      'description' => '创建状态机时透传的field3字段',
                      'type' => 'string',
                      'example' => '{
	"ha-cn-pl32rf0****_offline_adv": 1,
	"ha-cn-pl32rf0****_offline_plugin": 1,
	"ha-cn-pl32rf0****_table_ha-cn-35t3r02iq03_test_api": 1,
	"ha-cn-pl32rf0****@ha-cn-pl32rf0****_test_api@hz_pre_vpc_domain_1@test_api@index_config": 1,
	"ha-cn-pl32rf0****_offline_dict": 1
}',
                    ),
                    'tags' => 
                    array (
                      'title' => '进度条的状态标签',
                      'description' => '进度条的状态标签',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '标签。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'tagLevel' => 
                          array (
                            'title' => '展示tag的等级',
                            'description' => '展示tag的等级',
                            'type' => 'string',
                            'example' => '1',
                          ),
                          'msg' => 
                          array (
                            'title' => '展示tag内容',
                            'description' => '展示tag内容',
                            'type' => 'string',
                            'example' => 'test-tag',
                          ),
                        ),
                      ),
                    ),
                    'taskNodes' => 
                    array (
                      'title' => '任务信息',
                      'description' => '任务信息',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '任务节点信息',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'name' => 
                          array (
                            'title' => '任务名称',
                            'description' => '任务名称',
                            'type' => 'string',
                            'example' => 'publish config version',
                          ),
                          'index' => 
                          array (
                            'title' => '此任务的序号',
                            'description' => '此任务的序号',
                            'type' => 'integer',
                            'format' => 'int64',
                            'example' => '4',
                          ),
                          'finishDate' => 
                          array (
                            'title' => '完成日期',
                            'description' => '完成日期',
                            'type' => 'string',
                            'example' => '2024-06-17 18:40:48',
                          ),
                          'status' => 
                          array (
                            'title' => '任务状态',
                            'description' => '任务状态',
                            'type' => 'string',
                            'example' => 'SUCCESS',
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
        500 => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"CC5EC8FA-5C0D-56AF-BEF4-6FCCEABD0511\\",\\n  \\"result\\": [\\n    {\\n      \\"groupType\\": \\"Table_Update\\",\\n      \\"fsmId\\": \\"tisplus_opensearch@datasource_flow_fsm@1865410598556969-ha-cn-pl32rf0****_api2@bj_vpc_domain_1@null@MANUAL-ha-cn-pl32rf0****_api2@1649729867698@028315\\",\\n      \\"name\\": \\"ha-cn-pl32rf0****_qrs\\",\\n      \\"time\\": \\"1657610520\\",\\n      \\"type\\": \\"mra_table_config_trace_fsm\\",\\n      \\"user\\": \\"admin\\",\\n      \\"status\\": \\"onlyPublished\\",\\n      \\"extraAttribute\\": \\"{\\\\n\\\\t\\\\\\"consoleVersion\\\\\\": \\\\\\"\\\\\\",\\\\n\\\\t\\\\\\"domain\\\\\\": \\\\\\"hz_pre_vpc_domain_1\\\\\\",\\\\n\\\\t\\\\\\"configType\\\\\\": \\\\\\"offline\\\\\\"\\\\n}\\",\\n      \\"field3\\": \\"{\\\\n\\\\t\\\\\\"ha-cn-pl32rf0****_offline_adv\\\\\\": 1,\\\\n\\\\t\\\\\\"ha-cn-pl32rf0****_offline_plugin\\\\\\": 1,\\\\n\\\\t\\\\\\"ha-cn-pl32rf0****_table_ha-cn-35t3r02iq03_test_api\\\\\\": 1,\\\\n\\\\t\\\\\\"ha-cn-pl32rf0****@ha-cn-pl32rf0****_test_api@hz_pre_vpc_domain_1@test_api@index_config\\\\\\": 1,\\\\n\\\\t\\\\\\"ha-cn-pl32rf0****_offline_dict\\\\\\": 1\\\\n}\\",\\n      \\"tags\\": [\\n        {\\n          \\"tagLevel\\": \\"1\\",\\n          \\"msg\\": \\"test-tag\\"\\n        }\\n      ],\\n      \\"taskNodes\\": [\\n        {\\n          \\"name\\": \\"publish config version\\",\\n          \\"index\\": 4,\\n          \\"finishDate\\": \\"2024-06-17 18:40:48\\",\\n          \\"status\\": \\"SUCCESS\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '展示集群任务',
      'description' => '### 方法

```java
GET
```

### URI

```java
/openapi/ha3/instances/{instanceId}/cluster-tasks
```
',
      'requestParamsDescription' => '### 请求示例

```java
GET /openapi/ha3/instances/{instanceId}/cluster-tasks
```

﻿
',
      'responseParamsDescription' => '### 返回示例

正确返回

```java
{
  "requestId": "0A6EB64B-B4C8-CF02-810F-E660812972FF",
  "result": [
    {
      "groupType": "table",
      "fsmId": "tisplus_opensearch@create_online_deploy_fsm@opensearch_pre_standard_private_20211110_2@pre_domain_1@null@null@1637215469093@127746",
      "name": "新增在线部署",
      "taskNodes": [
        {
          "nodeInfo": {
            "msg": "stopped clean fsm: []",
            "name": "stop clean",
            "index": 0,
            "finishDate": "2021-11-18 14:04:49",
            "status": "SUCCESS"
          }
        },
        {
          "nodeInfo": {
            "name": "prepare",
            "index": 1,
            "finishDate": "2021-11-18 14:05:09",
            "status": "SUCCESS"
          }
        },
        {
          "nodeInfo": {
            "name": "merger port",
            "index": 2,
            "finishDate": "2021-11-18 14:05:19",
            "status": "SUCCESS"
          }
        },
        {
          "nodeInfo": {
            "name": "moss create",
            "index": 3,
            "finishDate": "2021-11-18 14:05:39",
            "status": "SUCCESS"
          }
        },
        {
          "nodeInfo": {
            "name": "submit hippo",
            "index": 4,
            "finishDate": "2021-11-18 14:05:59",
            "status": "SUCCESS"
          }
        },
        {
          "nodeInfo": {
            "name": "admin started",
            "index": 5,
            "finishDate": "2021-11-18 14:16:05",
            "status": "SUCCESS"
          }
        },
        {
          "nodeInfo": {
            "name": "zone create",
            "index": 6,
            "finishDate": "2021-11-18 14:16:45",
            "status": "SUCCESS"
          }
        },
        {
          "nodeInfo": {
            "name": "switch index",
            "index": 13,
            "finishDate": "2021-11-18 14:16:55",
            "status": "SUCCESS"
          }
        }
      ],
      "time": "2021-11-18 14:04:29",
      "type": "onlineGroup",
      "user": "74087",
      "status": "success"
    },
    {
      "groupType": "table",
      "fsmId": "tisplus_opensearch@delete_biz_fsm@multi_biz_opensearch-default@null@null@default@1631777272819@926304",
      "name": "delete_biz_fsm",
      "taskNodes": [
        {
          "nodeInfo": {
            "msg": "stop biz create fsm success",
            "name": "stop fsm",
            "index": 0,
            "finishDate": "2021-09-16 15:27:53",
            "status": "SUCCESS"
          }
        },
        {
          "nodeInfo": {
            "msg": "Ha3BizConfigResource [default] not exist",
            "name": "delete moss",
            "index": 1,
            "finishDate": "2021-09-16 15:28:04",
            "status": "SUCCESS"
          }
        },
        {
          "nodeInfo": {
            "msg": "skip delete cause resource[name=default] not exist",
            "name": "delete biz resource",
            "index": 2,
            "finishDate": "2021-09-16 15:28:14",
            "status": "SUCCESS"
          }
        },
        {
          "nodeInfo": {
            "msg": "skip check cause no InnerData.BizConfigResource is null",
            "name": "check suez",
            "index": 3,
            "finishDate": "2021-09-16 15:28:24",
            "status": "SUCCESS"
          }
        },
        {
          "nodeInfo": {
            "name": "finished",
            "index": 4,
            "finishDate": "2021-09-16 15:28:24",
            "status": "SUCCESS"
          }
        }
      ],
      "time": "2021-09-16 15:27:53",
      "type": "delete_biz_fsm",
      "user": "哈勃",
      "status": "success"
    }
  ]
```
',
    ),
    'ListDataSourceTasks' => 
    array (
      'summary' => '展示数据源任务。',
      'path' => '/openapi/ha3/instances/{instanceId}/data-source-tasks',
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
        'operationType' => 'list',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '实例ID',
            'description' => '实例ID',
            'type' => 'string',
            'required' => true,
            'example' => 'ha-cn-pl32rf0****',
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
                'title' => 'id of request',
                'description' => 'id of request',
                'type' => 'string',
                'example' => 'CC5EC8FA-5C0D-56AF-BEF4-6FCCEABD0511',
              ),
              'result' => 
              array (
                'title' => '索引信息',
                'description' => '索引信息',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '数据搜索返回的结果。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'groupType' => 
                    array (
                      'title' => '变更分组类型',
                      'description' => '变更分组类型',
                      'type' => 'string',
                      'example' => 'Table_Update',
                    ),
                    'fsmId' => 
                    array (
                      'title' => 'fsmId',
                      'description' => 'fsmId',
                      'type' => 'string',
                      'example' => 'tisplus_opensearch@datasource_flow_fsm@1865410598556969-ha-cn-pl32rf0****_api2@bj_vpc_domain_1@null@MANUAL-ha-cn-pl32rf0****_api2@1649729867698@028315',
                    ),
                    'name' => 
                    array (
                      'title' => '卡片的名字',
                      'description' => '卡片的名字',
                      'type' => 'string',
                      'example' => 'ha-cn-pl32rf0****_qrs
',
                    ),
                    'time' => 
                    array (
                      'title' => '卡片的时间戳',
                      'description' => '卡片的时间戳',
                      'type' => 'string',
                      'example' => '1646279473',
                    ),
                    'type' => 
                    array (
                      'title' => '卡片的类型',
                      'description' => '卡片的类型',
                      'type' => 'string',
                      'example' => 'mra_table_config_trace_fsm
',
                    ),
                    'user' => 
                    array (
                      'title' => '触发生成fsm流程的用户',
                      'description' => '触发生成fsm流程的用户',
                      'type' => 'string',
                      'example' => 'admin',
                    ),
                    'status' => 
                    array (
                      'title' => 'FSM整体状态',
                      'description' => 'FSM整体状态',
                      'type' => 'string',
                      'example' => 'onlyPublished',
                    ),
                    'extraAttribute' => 
                    array (
                      'title' => '卡片的额外属性',
                      'description' => '卡片的额外属性',
                      'type' => 'string',
                      'example' => '{
	"consoleVersion": "",
	"domain": "hz_pre_vpc_domain_1",
	"configType": "offline"
}',
                    ),
                    'field3' => 
                    array (
                      'title' => '创建状态机时透传的field3字段',
                      'description' => '创建状态机时透传的field3字段',
                      'type' => 'string',
                      'example' => '{
	"ha-cn-pl32rf0****_offline_adv": 1,
	"ha-cn-pl32rf0****_offline_plugin": 1,
	"ha-cn-pl32rf0****_table_ha-cn-35t3r02iq03_test_api": 1,
	"ha-cn-pl32rf0****@ha-cn-pl32rf0****_test_api@hz_pre_vpc_domain_1@test_api@index_config": 1,
	"ha-cn-pl32rf0****_offline_dict": 1
}
',
                    ),
                    'tags' => 
                    array (
                      'title' => '进度条的状态标签',
                      'description' => '进度条的状态标签',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '数据源标签。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'tagLevel' => 
                          array (
                            'title' => '展示tag的等级',
                            'description' => '展示tag的等级',
                            'type' => 'string',
                            'example' => '1',
                          ),
                          'msg' => 
                          array (
                            'title' => '展示tag内容',
                            'description' => '展示tag内容',
                            'type' => 'string',
                            'example' => 'test-tag',
                          ),
                        ),
                      ),
                    ),
                    'taskNodes' => 
                    array (
                      'title' => '任务信息',
                      'description' => '任务信息',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '任务节点信息',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'name' => 
                          array (
                            'title' => '任务名称',
                            'description' => '任务名称',
                            'type' => 'string',
                            'example' => 'publish config version
',
                          ),
                          'index' => 
                          array (
                            'title' => '此任务的序号',
                            'description' => '此任务的序号',
                            'type' => 'integer',
                            'format' => 'int64',
                            'example' => '4',
                          ),
                          'finishDate' => 
                          array (
                            'title' => '完成日期',
                            'description' => '完成日期',
                            'type' => 'string',
                            'example' => '2024-06-17 18:40:48
',
                          ),
                          'status' => 
                          array (
                            'title' => '任务状态',
                            'description' => '任务状态',
                            'type' => 'string',
                            'example' => 'SUCCESS',
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
        500 => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"CC5EC8FA-5C0D-56AF-BEF4-6FCCEABD0511\\",\\n  \\"result\\": [\\n    {\\n      \\"groupType\\": \\"Table_Update\\",\\n      \\"fsmId\\": \\"tisplus_opensearch@datasource_flow_fsm@1865410598556969-ha-cn-pl32rf0****_api2@bj_vpc_domain_1@null@MANUAL-ha-cn-pl32rf0****_api2@1649729867698@028315\\",\\n      \\"name\\": \\"ha-cn-pl32rf0****_qrs\\\\n\\",\\n      \\"time\\": \\"1646279473\\",\\n      \\"type\\": \\"mra_table_config_trace_fsm\\\\n\\",\\n      \\"user\\": \\"admin\\",\\n      \\"status\\": \\"onlyPublished\\",\\n      \\"extraAttribute\\": \\"{\\\\n\\\\t\\\\\\"consoleVersion\\\\\\": \\\\\\"\\\\\\",\\\\n\\\\t\\\\\\"domain\\\\\\": \\\\\\"hz_pre_vpc_domain_1\\\\\\",\\\\n\\\\t\\\\\\"configType\\\\\\": \\\\\\"offline\\\\\\"\\\\n}\\",\\n      \\"field3\\": \\"{\\\\n\\\\t\\\\\\"ha-cn-pl32rf0****_offline_adv\\\\\\": 1,\\\\n\\\\t\\\\\\"ha-cn-pl32rf0****_offline_plugin\\\\\\": 1,\\\\n\\\\t\\\\\\"ha-cn-pl32rf0****_table_ha-cn-35t3r02iq03_test_api\\\\\\": 1,\\\\n\\\\t\\\\\\"ha-cn-pl32rf0****@ha-cn-pl32rf0****_test_api@hz_pre_vpc_domain_1@test_api@index_config\\\\\\": 1,\\\\n\\\\t\\\\\\"ha-cn-pl32rf0****_offline_dict\\\\\\": 1\\\\n}\\\\n\\",\\n      \\"tags\\": [\\n        {\\n          \\"tagLevel\\": \\"1\\",\\n          \\"msg\\": \\"test-tag\\"\\n        }\\n      ],\\n      \\"taskNodes\\": [\\n        {\\n          \\"name\\": \\"publish config version\\\\n\\",\\n          \\"index\\": 4,\\n          \\"finishDate\\": \\"2024-06-17 18:40:48\\\\n\\",\\n          \\"status\\": \\"SUCCESS\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '展示数据源任务',
      'description' => '### 方法

```java
GET
```

### URI

```java
/openapi/ha3/instances/{instanceId}/data-source-tasks
```',
      'requestParamsDescription' => '### 请求示例

```java
GET /openapi/ha3/instances/{instanceId}/data-source-tasks
```',
      'responseParamsDescription' => '
### 返回示例

正确返回

```java
{
  "requestId": "0A6EB64B-B4C8-CF02-810F-E660812972FF",
  "result": [
    {
      "groupType": "table",
      "fsmId": "tisplus_opensearch@create_online_deploy_fsm@opensearch_pre_standard_private_20211110_2@pre_domain_1@null@null@1637215469093@127746",
      "name": "新增在线部署",
      "taskNodes": [
        {
          "nodeInfo": {
            "msg": "stopped clean fsm: []",
            "name": "stop clean",
            "index": 0,
            "msg":"异常信息",
            "finishDate": "2021-11-18 14:04:49",
            "status": "SUCCESS"
          }
        },
        {
          "nodeInfo": {
            "name": "prepare",
            "index": 1,
            "finishDate": "2021-11-18 14:05:09",
            "status": "SUCCESS"
          }
        },
        {
          "nodeInfo": {
            "name": "merger port",
            "index": 2,
            "finishDate": "2021-11-18 14:05:19",
            "status": "SUCCESS"
          }
        },
        {
          "nodeInfo": {
            "name": "moss create",
            "index": 3,
            "finishDate": "2021-11-18 14:05:39",
            "status": "SUCCESS"
          }
        },
        {
          "nodeInfo": {
            "name": "submit hippo",
            "index": 4,
            "finishDate": "2021-11-18 14:05:59",
            "status": "SUCCESS"
          }
        },
        {
          "nodeInfo": {
            "name": "admin started",
            "index": 5,
            "finishDate": "2021-11-18 14:16:05",
            "status": "SUCCESS"
          }
        },
        {
          "nodeInfo": {
            "name": "zone create",
            "index": 6,
            "finishDate": "2021-11-18 14:16:45",
            "status": "SUCCESS"
          }
        },
        {
          "nodeInfo": {
            "name": "switch index",
            "index": 13,
            "finishDate": "2021-11-18 14:16:55",
            "status": "SUCCESS"
          }
        }
      ],
      "time": "2021-11-18 14:04:29",
      "type": "onlineGroup",
      "user": "74087",
      "status": "success"
    },
    {
      "groupType": "table",
      "fsmId": "tisplus_opensearch@delete_biz_fsm@multi_biz_opensearch-default@null@null@default@1631777272819@926304",
      "name": "delete_biz_fsm",
      "taskNodes": [
        {
          "nodeInfo": {
            "msg": "stop biz create fsm success",
            "name": "stop fsm",
            "index": 0,
            "finishDate": "2021-09-16 15:27:53",
            "status": "SUCCESS"
          }
        },
        {
          "nodeInfo": {
            "msg": "Ha3BizConfigResource [default] not exist",
            "name": "delete moss",
            "index": 1,
            "finishDate": "2021-09-16 15:28:04",
            "status": "SUCCESS"
          }
        },
        {
          "nodeInfo": {
            "msg": "skip delete cause resource[name=default] not exist",
            "name": "delete biz resource",
            "index": 2,
            "finishDate": "2021-09-16 15:28:14",
            "status": "SUCCESS"
          }
        },
        {
          "nodeInfo": {
            "msg": "skip check cause no InnerData.BizConfigResource is null",
            "name": "check suez",
            "index": 3,
            "finishDate": "2021-09-16 15:28:24",
            "status": "SUCCESS"
          }
        },
        {
          "nodeInfo": {
            "name": "finished",
            "index": 4,
            "finishDate": "2021-09-16 15:28:24",
            "status": "SUCCESS"
          }
        }
      ],
      "time": "2021-09-16 15:27:53",
      "type": "delete_biz_fsm",
      "user": "哈勃",
      "status": "success"
    }
  ]
```
',
    ),
    'StopTask' => 
    array (
      'summary' => '停止fsm任务。',
      'path' => '/openapi/ha3/instances/{instanceId}/stop-task/{fsmId}',
      'methods' => 
      array (
        0 => 'put',
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
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例id',
            'type' => 'string',
            'required' => true,
            'example' => 'ha-cn-pl32rf0****',
          ),
        ),
        1 => 
        array (
          'name' => 'fsmId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '已停止的设备id',
            'type' => 'string',
            'required' => true,
            'example' => 'tisplus_opensearch@datasource_flow_fsm@1865410598556969-ha-cn-pl32rf0****_api2@bj_vpc_domain_1@null@MANUAL-ha-cn-pl32rf0****_api2@1649729867698@028315',
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
                'title' => 'id of request',
                'description' => 'id of request',
                'type' => 'string',
                'example' => 'FE03180A-0E29-5474-8A86-33F0683294A4',
              ),
              'result' => 
              array (
                'title' => '索引信息',
                'description' => '索引信息',
                'type' => 'object',
                'example' => '{}',
              ),
            ),
          ),
        ),
        500 => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"FE03180A-0E29-5474-8A86-33F0683294A4\\",\\n  \\"result\\": {}\\n}","type":"json"}]',
      'title' => '停止fsm任务',
      'description' => '### 方法

```java
PUT
```
### URI
```java
/openapi/ha3/instances/{instanceId}/stop-task/{fsmId}
```',
      'requestParamsDescription' => '### 请求示例

```java
PUT /openapi/ha3/instances/{instanceId}/stop-task/tisplus_opensearch@add_index_config@1062017779051424-ha-cn-0ju2i0e5z01_mx1228@null@index_11@null@1641282725526@607017
```',
      'responseParamsDescription' => '### 返回示例

正确返回
﻿

```java
{
﻿
  "requestId": "0A6EB64B-B4C8-CF02-810F-E660812972FF",
﻿
  "result": []
﻿
}
```
详情可参考[响应结构](~~465311~~)',
    ),
    'ForceSwitch' => 
    array (
      'summary' => '强制切换。',
      'path' => '/openapi/ha3/instances/{instanceId}/force-switch/{fsmId}',
      'methods' => 
      array (
        0 => 'put',
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
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'ha-cn-pl32rf0****',
          ),
        ),
        1 => 
        array (
          'name' => 'fsmId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '任务ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'tisplus_opensearch@datasource_flow_fsm@186541059855****-ha-cn-pl32rf0****_api2@bj_vpc_domain_1@null@MANUAL-ha-cn-pl32rf0****_api2@164972986****@028315',
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'title' => 'id of request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '0B1FF998-BB8D-5182-BFC0-E471AA77095A',
              ),
              'result' => 
              array (
                'title' => '索引信息',
                'description' => '索引信息。',
                'type' => 'object',
                'example' => '{}',
              ),
            ),
          ),
        ),
        500 => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"0B1FF998-BB8D-5182-BFC0-E471AA77095A\\",\\n  \\"result\\": {}\\n}","type":"json"}]',
      'title' => '强制切换',
      'description' => '### 方法

```java
PUT
```

### URI

```java
/openapi/ha3/instances/{instanceId}/force-switch/{fsmId}
```',
      'requestParamsDescription' => '### 请求示例



```java
PUT /openapi/ha3/instances/{instanceId}/force-switch/tisplus_opensearch@add_index_config@106201777905****-ha-cn-0ju2i0e****_mx1228@null@index_11@null@164128272****@607017
```',
      'responseParamsDescription' => '### 返回示例

正确返回
﻿

```java
{
﻿
  "requestId": "0A6EB64B-B4C8-CF02-810F-E660812972FF",
﻿
  "result": []
﻿
}
```
详情可参考[响应结构](~~465311~~)',
    ),
    'CreateTable' => 
    array (
      'summary' => '创建索引表。',
      'path' => '/openapi/ha3/instances/{instanceId}/tables',
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
        'operationType' => 'create',
        'abilityTreeCode' => '218772',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREopensearchGTRUN8',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例id。',
            'type' => 'string',
            'required' => true,
            'example' => 'ha-cn-pl32rf0****',
          ),
        ),
        1 => 
        array (
          'name' => 'dryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否dryRun创建（仅校验数据源是否合法）。取值：-true 是 -false 否',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
            'default' => 'false',
          ),
        ),
        2 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => 'body',
            'type' => 'object',
            'properties' => 
            array (
              'name' => 
              array (
                'title' => '索引名',
                'description' => '索引名',
                'type' => 'string',
                'required' => false,
                'example' => 'api_index_1',
              ),
              'dataProcessorCount' => 
              array (
                'title' => '数据更新资源数',
                'description' => '数据更新资源数',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '1',
              ),
              'partitionCount' => 
              array (
                'title' => '数据分片数',
                'description' => '数据分片数',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '1',
              ),
              'dataSource' => 
              array (
                'title' => '数据源配置',
                'description' => '数据源配置',
                'type' => 'object',
                'properties' => 
                array (
                  'type' => 
                  array (
                    'title' => '数据源类型: 仅支持odps、swift、oss三种类型 (odps, swift, saro, oss, unKnow)',
                    'description' => '数据源类型: 仅支持odps、swift、oss三种类型 (odps, swift, saro, oss, unKnow)',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'odps',
                  ),
                  'dataTimeSec' => 
                  array (
                    'title' => '追增量时间戳',
                    'description' => '追增量时间戳',
                    'type' => 'integer',
                    'format' => 'int32',
                    'required' => false,
                    'example' => '1715160176',
                  ),
                  'autoBuildIndex' => 
                  array (
                    'title' => '是否自动索引重建',
                    'description' => '是否自动索引重建',
                    'type' => 'boolean',
                    'required' => false,
                    'example' => 'true',
                  ),
                  'config' => 
                  array (
                    'title' => '数据源配置',
                    'description' => '数据源配置',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'endpoint' => 
                      array (
                        'title' => 'odps相关',
                        'description' => 'odps相关',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'http://service.cn-hangzhou.maxcompute.aliyun-inc.com/api',
                      ),
                      'accessKey' => 
                      array (
                        'description' => 'odps数据源ak',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'L***p',
                      ),
                      'accessSecret' => 
                      array (
                        'description' => 'odps数据源ak secret',
                        'type' => 'string',
                        'required' => false,
                        'example' => '5**9a6',
                      ),
                      'project' => 
                      array (
                        'description' => 'odps数据源项目名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test_project',
                      ),
                      'partition' => 
                      array (
                        'description' => '数据源为odps时必填',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ds=20220713',
                      ),
                      'table' => 
                      array (
                        'title' => 'saro、odps相关',
                        'description' => 'saro、odps相关',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test56',
                      ),
                      'ossPath' => 
                      array (
                        'title' => 'oss数据源相关',
                        'description' => 'oss数据源相关',
                        'type' => 'string',
                        'required' => false,
                        'example' => '/opensearch/test.txt',
                      ),
                      'bucket' => 
                      array (
                        'description' => 'oss bucket',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test-bucket',
                      ),
                    ),
                    'required' => false,
                  ),
                ),
                'required' => false,
              ),
              'rawSchema' => 
              array (
                'title' => '如果用户传了rawSchema，则直接使用rawSchema作为ha3 schema结构，不用手动拼装',
                'description' => '如果用户传了rawSchema，则直接使用rawSchema作为ha3 schema结构，不用手动拼装',
                'type' => 'string',
                'required' => false,
                'example' => '{}',
              ),
              'primaryKey' => 
              array (
                'title' => '主键字段',
                'description' => '主键字段',
                'type' => 'string',
                'required' => false,
                'example' => 'id',
              ),
              'fieldSchema' => 
              array (
                'title' => 'key: 字段名',
                'description' => 'key: 字段名',
                'type' => 'object',
                'required' => false,
                'additionalProperties' => 
                array (
                  'type' => 'string',
                  'example' => '{
    "id": "INT64",
    "source_image": "STRING",
    "namespace": "INT64",
    "source_image_vector": "MULTI_FLOAT"
}',
                  'description' => 'map结构',
                ),
              ),
              'vectorIndex' => 
              array (
                'title' => '索引结构',
                'description' => '索引结构',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'indexName' => 
                    array (
                      'title' => '索引结构名称',
                      'description' => '索引结构名称',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'test_index',
                    ),
                    'vectorField' => 
                    array (
                      'title' => '向量字段',
                      'description' => '向量字段',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'source_image_vector',
                    ),
                    'sparseIndexField' => 
                    array (
                      'title' => '稀疏向量下标字段',
                      'description' => '稀疏向量下标字段',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'sparse_indices',
                    ),
                    'sparseValueField' => 
                    array (
                      'title' => '稀疏向量值字段',
                      'description' => '稀疏向量值字段',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'sparse_values',
                    ),
                    'dimension' => 
                    array (
                      'title' => '向量维度',
                      'description' => '向量维度',
                      'type' => 'string',
                      'required' => false,
                      'example' => '128',
                    ),
                    'vectorIndexType' => 
                    array (
                      'title' => '向量索引算法',
                      'description' => '向量索引算法',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'Qc',
                    ),
                    'distanceType' => 
                    array (
                      'title' => '距离类型',
                      'description' => '距离类型',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'SquaredEuclidean',
                    ),
                    'namespace' => 
                    array (
                      'title' => '命名空间字段',
                      'description' => '命名空间字段',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'namespace',
                    ),
                    'advanceParams' => 
                    array (
                      'title' => '索引结构配置',
                      'description' => '索引结构配置',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'buildIndexParams' => 
                        array (
                          'title' => '索引构建参数',
                          'description' => '索引构建参数',
                          'type' => 'string',
                          'required' => false,
                          'example' => '{}',
                        ),
                        'searchIndexParams' => 
                        array (
                          'title' => '索引检索参数',
                          'description' => '索引检索参数',
                          'type' => 'string',
                          'required' => false,
                          'example' => '{}',
                        ),
                        'minScanDocCnt' => 
                        array (
                          'title' => '召回候选集的个数最小值',
                          'description' => '召回候选集的个数最小值',
                          'type' => 'string',
                          'required' => false,
                          'example' => '20000',
                        ),
                        'linearBuildThreshold' => 
                        array (
                          'title' => '线性构建的阈值',
                          'description' => '线性构建的阈值',
                          'type' => 'string',
                          'required' => false,
                          'example' => '5000',
                        ),
                      ),
                      'required' => false,
                    ),
                  ),
                  'required' => false,
                ),
                'required' => false,
              ),
              'dataProcessConfig' => 
              array (
                'title' => '字段处理配置',
                'description' => '字段处理配置',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '字段处理配置详细信息',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'operator' => 
                    array (
                      'title' => '字段处理方式 (copy: 将源字段拷贝至目标字段, vectorize: 使用模型对源字段进行向量化，向量存储在目标字段中)',
                      'description' => '字段处理方式 (copy: 将源字段拷贝至目标字段, vectorize: 使用模型对源字段进行向量化，向量存储在目标字段中)',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'vectorize',
                    ),
                    'dstField' => 
                    array (
                      'title' => '目标字段',
                      'description' => '目标字段',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'source_image_vector',
                    ),
                    'srcField' => 
                    array (
                      'title' => '源字段',
                      'description' => '源字段',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'source_image',
                    ),
                    'params' => 
                    array (
                      'title' => '配置模型信息',
                      'description' => '配置模型信息',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'vectorModel' => 
                        array (
                          'title' => '向量化模型',
                          'description' => '向量化模型',
                          'type' => 'string',
                          'required' => false,
                          'example' => 'clip',
                        ),
                        'vectorModal' => 
                        array (
                          'title' => '数据类型',
                          'description' => '数据类型',
                          'type' => 'string',
                          'required' => false,
                          'example' => 'image',
                        ),
                        'srcFieldConfig' => 
                        array (
                          'title' => '向量化信息来源',
                          'description' => '向量化信息来源',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'ossEndpoint' => 
                            array (
                              'description' => 'OSS区域地址。',
                              'type' => 'string',
                              'required' => false,
                              'example' => 'oss-cn-hangzhou-internal.aliyuncs.com',
                            ),
                            'ossBucket' => 
                            array (
                              'description' => 'OSSBucket',
                              'type' => 'string',
                              'required' => false,
                              'example' => 'test-bucket',
                            ),
                            'uid' => 
                            array (
                              'description' => '云账号id',
                              'type' => 'string',
                              'required' => false,
                              'example' => '1062017779051424',
                            ),
                          ),
                          'required' => false,
                        ),
                      ),
                      'required' => false,
                    ),
                  ),
                  'required' => false,
                ),
                'required' => false,
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
                'title' => 'id of request',
                'description' => 'id of request',
                'type' => 'string',
                'example' => '2AE63638-5420-56DC-BF59-37D8174039A0',
              ),
              'result' => 
              array (
                'title' => 'Map',
                'description' => 'Map',
                'type' => 'object',
                'example' => '{}',
              ),
            ),
          ),
        ),
        500 => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"2AE63638-5420-56DC-BF59-37D8174039A0\\",\\n  \\"result\\": {}\\n}","type":"json"}]',
      'title' => '创建索引表',
      'requestParamsDescription' => '### 请求示例

﻿

```java
POST /openapi/ha3/instances/{instanceId}/tables
```
><notice>示例仅列举最简单的参数, 更多自定义参数请参考请求参数></notice>

```java
{
    "name": "api",
    "partitionCount": 1,
    "primaryKey": "id",
    "fieldSchema": {
        "id": "INT64",
        "source_image": "STRING",
        "namespace": "STRING",
        "source_image_vector": "MULTI_FLOAT"
    },
    "vectorIndex": [
        {
            "indexName": "test_index_1",
            "vectorField": "source_image_vector",
            "vectorIndexType": "HNSW",
            "dimension": "512",
            "distanceType": "InnerProduct"
        }
    ]
}
```
详情可参考[响应结构](~~465311~~)<details>',
    ),
    'ModifyTable' => 
    array (
      'summary' => '修改索引表。',
      'path' => '/openapi/ha3/instances/{instanceId}/tables/{tableName}',
      'methods' => 
      array (
        0 => 'put',
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
        'abilityTreeCode' => '218773',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREopensearchGTRUN8',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID',
            'type' => 'string',
            'required' => true,
            'example' => 'ha-cn-pl32rf0****',
          ),
        ),
        1 => 
        array (
          'name' => 'tableName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '索引表名称',
            'type' => 'string',
            'required' => true,
            'example' => 'index_hdfs',
          ),
        ),
        2 => 
        array (
          'name' => 'dryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否dryRun创建（仅校验数据源是否合法）。取值：-true 是 -false 否',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
            'default' => 'false',
          ),
        ),
        3 => 
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
              'partitionCount' => 
              array (
                'title' => '数据分片数',
                'description' => '数据分片数',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '1',
              ),
              'dataSource' => 
              array (
                'title' => '数据源配置',
                'description' => '数据源配置',
                'type' => 'object',
                'properties' => 
                array (
                  'dataTimeSec' => 
                  array (
                    'title' => '追增量时间戳',
                    'description' => '追增量时间戳',
                    'type' => 'integer',
                    'format' => 'int32',
                    'required' => false,
                    'example' => '1715160176',
                  ),
                  'autoBuildIndex' => 
                  array (
                    'title' => '是否自动索引重建',
                    'description' => '是否自动索引重建',
                    'type' => 'boolean',
                    'required' => false,
                    'example' => 'true',
                  ),
                  'config' => 
                  array (
                    'title' => '数据源配置',
                    'description' => '数据源配置',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'endpoint' => 
                      array (
                        'title' => 'odps相关',
                        'description' => 'odps数据源的endpoint',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'http://service.cn-hangzhou.maxcompute.aliyun-inc.com/api',
                      ),
                      'accessKey' => 
                      array (
                        'description' => 'odps数据源ak',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'L***p',
                      ),
                      'accessSecret' => 
                      array (
                        'description' => 'odps数据源ak secret',
                        'type' => 'string',
                        'required' => false,
                        'example' => '5**9a6',
                      ),
                      'project' => 
                      array (
                        'description' => 'odps数据源项目名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test_project',
                      ),
                      'partition' => 
                      array (
                        'description' => '分区信息',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ds=20231220',
                      ),
                      'table' => 
                      array (
                        'title' => 'saro、odps相关',
                        'description' => 'saro、odps数据源表名',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'behavior',
                      ),
                      'ossPath' => 
                      array (
                        'title' => 'oss数据源相关',
                        'description' => 'oss文件路径',
                        'type' => 'string',
                        'required' => false,
                        'example' => '/opensearch/test.txt',
                      ),
                      'bucket' => 
                      array (
                        'description' => 'oss bucket',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test_bucket',
                      ),
                    ),
                    'required' => false,
                  ),
                ),
                'required' => false,
              ),
              'rawSchema' => 
              array (
                'title' => '如果用户传了rawSchema，则直接使用rawSchema作为ha3 schema结构，不用手动拼装',
                'description' => '如果用户传了rawSchema，则直接使用rawSchema作为ha3 schema结构，不用手动拼装',
                'type' => 'string',
                'required' => false,
                'example' => '{}',
              ),
              'primaryKey' => 
              array (
                'title' => '主键字段',
                'description' => '主键字段',
                'type' => 'string',
                'required' => false,
                'example' => 'id',
              ),
              'fieldSchema' => 
              array (
                'title' => 'key: 字段名',
                'description' => '字段map集合',
                'type' => 'object',
                'required' => false,
                'additionalProperties' => 
                array (
                  'type' => 'string',
                  'description' => 'key: 字段名   value: 字段类型',
                  'example' => '{
    "id": "INT64",
    "source_image": "STRING",
    "namespace": "INT64",
    "source_image_vector": "MULTI_FLOAT"
}',
                ),
              ),
              'vectorIndex' => 
              array (
                'title' => '索引结构',
                'description' => '索引结构',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '索引结构详细信息',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'indexName' => 
                    array (
                      'title' => '索引结构名称',
                      'description' => '索引结构名称',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'test_index',
                    ),
                    'vectorField' => 
                    array (
                      'title' => '向量字段',
                      'description' => '向量字段',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'source_image_vector',
                    ),
                    'sparseIndexField' => 
                    array (
                      'title' => '稀疏向量下标字段',
                      'description' => '稀疏向量下标字段',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'sparse_indices',
                    ),
                    'sparseValueField' => 
                    array (
                      'title' => '稀疏向量值字段',
                      'description' => '稀疏向量值字段',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'sparse_values',
                    ),
                    'dimension' => 
                    array (
                      'title' => '向量维度',
                      'description' => '向量维度',
                      'type' => 'string',
                      'required' => false,
                      'example' => '128',
                    ),
                    'vectorIndexType' => 
                    array (
                      'title' => '向量索引算法',
                      'description' => '向量索引算法',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'Qc',
                    ),
                    'distanceType' => 
                    array (
                      'title' => '距离类型',
                      'description' => '距离类型',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'SquaredEuclidean',
                    ),
                    'namespace' => 
                    array (
                      'title' => '命名空间字段',
                      'description' => '命名空间字段',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'namespace',
                    ),
                    'advanceParams' => 
                    array (
                      'title' => '索引结构配置',
                      'description' => '索引结构配置',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'buildIndexParams' => 
                        array (
                          'title' => '索引构建参数',
                          'description' => '索引构建参数',
                          'type' => 'string',
                          'required' => false,
                          'example' => '{}',
                        ),
                        'searchIndexParams' => 
                        array (
                          'title' => '索引检索参数',
                          'description' => '索引检索参数',
                          'type' => 'string',
                          'required' => false,
                          'example' => '{}',
                        ),
                        'minScanDocCnt' => 
                        array (
                          'title' => '召回候选集的个数最小值',
                          'description' => '召回候选集的个数最小值',
                          'type' => 'string',
                          'required' => false,
                          'example' => '20000',
                        ),
                        'linearBuildThreshold' => 
                        array (
                          'title' => '线性构建的阈值',
                          'description' => '线性构建的阈值',
                          'type' => 'string',
                          'required' => false,
                          'example' => '5000',
                        ),
                      ),
                      'required' => false,
                    ),
                  ),
                  'required' => false,
                ),
                'required' => false,
              ),
              'dataProcessConfig' => 
              array (
                'title' => '字段处理配置',
                'description' => '字段处理配置',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '字段处理配置详细信息',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'operator' => 
                    array (
                      'title' => '字段处理方式 (copy: 将源字段拷贝至目标字段, vectorize: 使用模型对源字段进行向量化，向量存储在目标字段中)',
                      'description' => '字段处理方式 (copy: 将源字段拷贝至目标字段, vectorize: 使用模型对源字段进行向量化，向量存储在目标字段中)',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'vectorize',
                    ),
                    'dstField' => 
                    array (
                      'title' => '目标字段',
                      'description' => '目标字段',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'source_image_vector',
                    ),
                    'srcField' => 
                    array (
                      'title' => '源字段',
                      'description' => '源字段',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'source_image',
                    ),
                    'params' => 
                    array (
                      'title' => '配置模型信息',
                      'description' => '配置模型信息',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'vectorModel' => 
                        array (
                          'title' => '向量化模型',
                          'description' => '向量化模型',
                          'type' => 'string',
                          'required' => false,
                          'example' => 'clip',
                        ),
                        'vectorModal' => 
                        array (
                          'title' => '数据类型',
                          'description' => '数据类型',
                          'type' => 'string',
                          'required' => false,
                          'example' => 'image',
                        ),
                        'srcFieldConfig' => 
                        array (
                          'title' => '向量化信息来源',
                          'description' => '向量化信息来源',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'ossEndpoint' => 
                            array (
                              'description' => 'OSS区域地址。',
                              'type' => 'string',
                              'required' => false,
                              'example' => 'oss-cn-hangzhou-internal.aliyuncs.com
',
                            ),
                            'ossBucket' => 
                            array (
                              'description' => 'OSS Bucket名称。',
                              'type' => 'string',
                              'required' => false,
                              'example' => 'test-bucket',
                            ),
                            'uid' => 
                            array (
                              'description' => '云账号id',
                              'type' => 'string',
                              'required' => false,
                              'example' => '1062017779051424',
                            ),
                          ),
                          'required' => false,
                        ),
                      ),
                      'required' => false,
                    ),
                  ),
                  'required' => false,
                ),
                'required' => false,
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
                'title' => 'id of request',
                'description' => 'id of request',
                'type' => 'string',
                'example' => 'FE03180A-0E29-5474-8A86-33F0683294A4',
              ),
              'result' => 
              array (
                'title' => 'Map',
                'description' => 'Map',
                'type' => 'object',
                'example' => '{}',
              ),
            ),
          ),
        ),
        500 => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"FE03180A-0E29-5474-8A86-33F0683294A4\\",\\n  \\"result\\": {}\\n}","type":"json"}]',
      'title' => '修改索引表',
      'requestParamsDescription' => '### 请求示例

﻿

```java
PUT /openapi/ha3/instances/{instanceId}/tables/{tableName}
```

﻿><notice>示例仅列举最简单的参数, 更多自定义参数请参考请求参数></notice>

```java
{
    "partitionCount": 1,
    "primaryKey": "id",
    "fieldSchema": {
        "id": "INT64",
        "source_image": "STRING",
        "namespace": "STRING",
        "source_image_vector": "MULTI_FLOAT"
    },
    "vectorIndex": [
        {
            "indexName": "test_index_1",
            "vectorField": "source_image_vector",
            "vectorIndexType": "HNSW",
            "dimension": "512",
            "distanceType": "InnerProduct"
        }
    ]
}
```
详情可参考[响应结构](~~465311~~)',
    ),
    'GetTable' => 
    array (
      'summary' => '获取索引表信息。',
      'path' => '/openapi/ha3/instances/{instanceId}/tables/{tableName}',
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
        'abilityTreeCode' => '218774',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREopensearchGTRUN8',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID',
            'type' => 'string',
            'required' => true,
            'example' => 'ha-cn-pl32rf0****',
          ),
        ),
        1 => 
        array (
          'name' => 'tableName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '索引表名称',
            'type' => 'string',
            'required' => true,
            'example' => 'test_summary',
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
                'title' => 'id of request',
                'description' => 'requestId',
                'type' => 'string',
                'example' => '2AE63638-5420-56DC-BF59-37D8174039A0',
              ),
              'result' => 
              array (
                'title' => 'IndexConfigV2',
                'description' => '返回结果',
                'type' => 'object',
                'properties' => 
                array (
                  'name' => 
                  array (
                    'title' => '索引名',
                    'description' => '索引名',
                    'type' => 'string',
                    'example' => 'test_oss',
                  ),
                  'status' => 
                  array (
                    'title' => '索引表状态 (NEW, PUBLISH, IN_USE: 召回引擎版创建成功后为正常状态, NOT_USE, STOP_USE, RESTORE_USE, FAIL: 向量检索版新版本首次创建索引失败状态)',
                    'description' => '索引表状态 (NEW, PUBLISH, IN_USE: 召回引擎版创建成功后为正常状态, NOT_USE, STOP_USE, RESTORE_USE, FAIL: 向量检索版新版本首次创建索引失败状态)',
                    'type' => 'string',
                    'example' => 'IN_USE',
                  ),
                  'dataProcessorCount' => 
                  array (
                    'title' => '数据更新资源数',
                    'description' => '数据更新资源数',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'partitionCount' => 
                  array (
                    'title' => '数据分片数',
                    'description' => '数据分片数',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'dataSource' => 
                  array (
                    'title' => '数据源配置',
                    'description' => '数据源配置',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'type' => 
                      array (
                        'title' => '数据源类型: 仅支持odps、swift、oss三种类型 (odps, swift, saro, oss, unKnow)',
                        'description' => '数据源类型: 仅支持odps、swift、oss三种类型 (odps, swift, saro, oss, unKnow)',
                        'type' => 'string',
                        'example' => 'odps',
                      ),
                      'dataTimeSec' => 
                      array (
                        'title' => '追增量时间戳',
                        'description' => '追增量时间戳',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1715160176',
                      ),
                      'autoBuildIndex' => 
                      array (
                        'title' => '是否自动索引重建',
                        'description' => '是否自动索引重建',
                        'type' => 'boolean',
                        'example' => 'true',
                      ),
                      'config' => 
                      array (
                        'title' => '数据源配置',
                        'description' => '数据源配置',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'endpoint' => 
                          array (
                            'title' => 'odps相关',
                            'description' => 'odps相关',
                            'type' => 'string',
                            'example' => 'http://service.cn-hangzhou.maxcompute.aliyun-inc.com/api',
                          ),
                          'accessKey' => 
                          array (
                            'description' => 'AK',
                            'type' => 'string',
                            'example' => 'ak',
                          ),
                          'accessSecret' => 
                          array (
                            'description' => 'AS',
                            'type' => 'string',
                            'example' => 'as',
                          ),
                          'project' => 
                          array (
                            'description' => 'odps数据源项目名称',
                            'type' => 'string',
                            'example' => 'dp_pdm_marketing_prod',
                          ),
                          'partition' => 
                          array (
                            'description' => '分区信息',
                            'type' => 'string',
                            'example' => 'ds=20220808',
                          ),
                          'table' => 
                          array (
                            'title' => 'saro、odps相关',
                            'description' => 'saro、odps数据源表名',
                            'type' => 'string',
                            'example' => 'test_add',
                          ),
                          'namespace' => 
                          array (
                            'title' => 'saro相关',
                            'description' => 'saro相关',
                            'type' => 'string',
                            'example' => 'namespace',
                          ),
                          'path' => 
                          array (
                            'title' => 'hdfs相关',
                            'description' => 'hdfs相关',
                            'type' => 'string',
                            'example' => 'vendor/sebastian/comparator/src/exceptions',
                          ),
                          'ossPath' => 
                          array (
                            'title' => 'oss数据源相关',
                            'description' => 'oss文件路径',
                            'type' => 'string',
                            'example' => '/opensearch_index_data/sift_oss_test.data',
                          ),
                          'bucket' => 
                          array (
                            'description' => 'oss命名空间',
                            'type' => 'string',
                            'example' => 'heytea-ops-oss',
                          ),
                        ),
                      ),
                    ),
                  ),
                  'rawSchema' => 
                  array (
                    'title' => '如果用户传了rawSchema，则直接使用rawSchema作为ha3 schema结构，不用手动拼装',
                    'description' => '如果用户传了rawSchema，则直接使用rawSchema作为ha3 schema结构，不用手动拼装',
                    'type' => 'string',
                    'example' => '{}',
                  ),
                  'primaryKey' => 
                  array (
                    'title' => '主键字段',
                    'description' => '主键字段',
                    'type' => 'string',
                    'example' => 'id',
                  ),
                  'fieldSchema' => 
                  array (
                    'title' => 'key: 字段名',
                    'description' => '字段map集合, key: 字段名 value: 字段类型',
                    'type' => 'object',
                    'additionalProperties' => 
                    array (
                      'type' => 'string',
                      'description' => 'id',
                      'example' => 'INT64',
                    ),
                  ),
                  'vectorIndex' => 
                  array (
                    'title' => '索引结构',
                    'description' => '索引结构',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'indexName' => 
                        array (
                          'title' => '索引结构名称',
                          'description' => '索引结构名称',
                          'type' => 'string',
                          'example' => 'test_odps',
                        ),
                        'vectorField' => 
                        array (
                          'title' => '向量字段',
                          'description' => '向量字段',
                          'type' => 'string',
                          'example' => 'source_image_vector',
                        ),
                        'sparseIndexField' => 
                        array (
                          'title' => '稀疏向量下标字段',
                          'description' => '稀疏向量下标字段',
                          'type' => 'string',
                          'example' => 'sparse_indices',
                        ),
                        'sparseValueField' => 
                        array (
                          'title' => '稀疏向量值字段',
                          'description' => '稀疏向量值字段',
                          'type' => 'string',
                          'example' => 'sparse_values',
                        ),
                        'dimension' => 
                        array (
                          'title' => '向量维度',
                          'description' => '向量维度',
                          'type' => 'string',
                          'example' => '128',
                        ),
                        'vectorIndexType' => 
                        array (
                          'title' => '向量索引算法',
                          'description' => '向量索引算法',
                          'type' => 'string',
                          'example' => 'Qc',
                        ),
                        'distanceType' => 
                        array (
                          'title' => '距离类型',
                          'description' => '距离类型',
                          'type' => 'string',
                          'example' => 'SquaredEuclidean',
                        ),
                        'namespace' => 
                        array (
                          'title' => '命名空间字段',
                          'description' => '命名空间字段',
                          'type' => 'string',
                          'example' => 'namespace',
                        ),
                        'advanceParams' => 
                        array (
                          'title' => '索引结构配置',
                          'description' => '索引结构配置',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'buildIndexParams' => 
                            array (
                              'title' => '索引构建参数',
                              'description' => '索引构建参数',
                              'type' => 'string',
                              'example' => '{
  "proxima.qc.builder.quantizer_class": "Int8QuantizerConverter",
  "proxima.qc.builder.quantize_by_centroid": true,
  "proxima.qc.builder.optimizer_class": "BruteForceBuilder",
  "proxima.qc.builder.thread_count": 10,
  "proxima.qc.builder.optimizer_params": {
    "proxima.linear.builder.column_major_order": true
  },
  "proxima.qc.builder.store_original_features": false,
  "proxima.qc.builder.train_sample_count": 3000000,
  "proxima.qc.builder.train_sample_ratio": 0.5
}',
                            ),
                            'searchIndexParams' => 
                            array (
                              'title' => '索引检索参数',
                              'description' => '索引检索参数',
                              'type' => 'string',
                              'example' => '{"proxima.qc.searcher.scan_ratio":0.01}',
                            ),
                            'minScanDocCnt' => 
                            array (
                              'title' => '召回候选集的个数最小值',
                              'description' => '召回候选集的个数最小值',
                              'type' => 'string',
                              'example' => '20000',
                            ),
                            'linearBuildThreshold' => 
                            array (
                              'title' => '线性构建的阈值',
                              'description' => '线性构建的阈值',
                              'type' => 'string',
                              'example' => '5000',
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  'dataProcessConfig' => 
                  array (
                    'title' => '字段处理配置',
                    'description' => '字段处理配置',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '字段处理配置',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'operator' => 
                        array (
                          'title' => '字段处理方式 (copy: 将源字段拷贝至目标字段, vectorize: 使用模型对源字段进行向量化，向量存储在目标字段中)',
                          'description' => '字段处理方式 (copy: 将源字段拷贝至目标字段, vectorize: 使用模型对源字段进行向量化，向量存储在目标字段中)',
                          'type' => 'string',
                          'example' => 'vectorize',
                        ),
                        'dstField' => 
                        array (
                          'title' => '目标字段',
                          'description' => '目标字段',
                          'type' => 'string',
                          'example' => 'source_image_vector',
                        ),
                        'srcField' => 
                        array (
                          'title' => '源字段',
                          'description' => '源字段',
                          'type' => 'string',
                          'example' => 'source_image',
                        ),
                        'params' => 
                        array (
                          'title' => '配置模型信息',
                          'description' => '配置模型信息',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'vectorModel' => 
                            array (
                              'title' => '向量化模型',
                              'description' => '向量化模型',
                              'type' => 'string',
                              'example' => 'clip',
                            ),
                            'vectorModal' => 
                            array (
                              'title' => '数据类型',
                              'description' => '数据类型',
                              'type' => 'string',
                              'example' => 'image',
                            ),
                            'srcFieldConfig' => 
                            array (
                              'title' => '向量化信息来源',
                              'description' => '向量化信息来源',
                              'type' => 'object',
                              'properties' => 
                              array (
                                'ossEndpoint' => 
                                array (
                                  'description' => 'OSS区域地址。',
                                  'type' => 'string',
                                  'example' => 'oss-cn-hangzhou-internal.aliyuncs.com
',
                                ),
                                'ossBucket' => 
                                array (
                                  'description' => 'OSS Bucket',
                                  'type' => 'string',
                                  'example' => 'test',
                                ),
                                'uid' => 
                                array (
                                  'description' => '云账号id',
                                  'type' => 'string',
                                  'example' => 'uid',
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
        500 => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"2AE63638-5420-56DC-BF59-37D8174039A0\\",\\n  \\"result\\": {\\n    \\"name\\": \\"test_oss\\",\\n    \\"status\\": \\"IN_USE\\",\\n    \\"dataProcessorCount\\": 1,\\n    \\"partitionCount\\": 1,\\n    \\"dataSource\\": {\\n      \\"type\\": \\"odps\\",\\n      \\"dataTimeSec\\": 1715160176,\\n      \\"autoBuildIndex\\": true,\\n      \\"config\\": {\\n        \\"endpoint\\": \\"http://service.cn-hangzhou.maxcompute.aliyun-inc.com/api\\",\\n        \\"accessKey\\": \\"ak\\",\\n        \\"accessSecret\\": \\"as\\",\\n        \\"project\\": \\"dp_pdm_marketing_prod\\",\\n        \\"partition\\": \\"ds=20220808\\",\\n        \\"table\\": \\"test_add\\",\\n        \\"namespace\\": \\"namespace\\",\\n        \\"path\\": \\"vendor/sebastian/comparator/src/exceptions\\",\\n        \\"ossPath\\": \\"/opensearch_index_data/sift_oss_test.data\\",\\n        \\"bucket\\": \\"heytea-ops-oss\\"\\n      }\\n    },\\n    \\"rawSchema\\": \\"{}\\",\\n    \\"primaryKey\\": \\"id\\",\\n    \\"fieldSchema\\": {\\n      \\"key\\": \\"INT64\\"\\n    },\\n    \\"vectorIndex\\": [\\n      {\\n        \\"indexName\\": \\"test_odps\\",\\n        \\"vectorField\\": \\"source_image_vector\\",\\n        \\"sparseIndexField\\": \\"sparse_indices\\",\\n        \\"sparseValueField\\": \\"sparse_values\\",\\n        \\"dimension\\": \\"128\\",\\n        \\"vectorIndexType\\": \\"Qc\\",\\n        \\"distanceType\\": \\"SquaredEuclidean\\",\\n        \\"namespace\\": \\"namespace\\",\\n        \\"advanceParams\\": {\\n          \\"buildIndexParams\\": \\"{\\\\n  \\\\\\"proxima.qc.builder.quantizer_class\\\\\\": \\\\\\"Int8QuantizerConverter\\\\\\",\\\\n  \\\\\\"proxima.qc.builder.quantize_by_centroid\\\\\\": true,\\\\n  \\\\\\"proxima.qc.builder.optimizer_class\\\\\\": \\\\\\"BruteForceBuilder\\\\\\",\\\\n  \\\\\\"proxima.qc.builder.thread_count\\\\\\": 10,\\\\n  \\\\\\"proxima.qc.builder.optimizer_params\\\\\\": {\\\\n    \\\\\\"proxima.linear.builder.column_major_order\\\\\\": true\\\\n  },\\\\n  \\\\\\"proxima.qc.builder.store_original_features\\\\\\": false,\\\\n  \\\\\\"proxima.qc.builder.train_sample_count\\\\\\": 3000000,\\\\n  \\\\\\"proxima.qc.builder.train_sample_ratio\\\\\\": 0.5\\\\n}\\",\\n          \\"searchIndexParams\\": \\"{\\\\\\"proxima.qc.searcher.scan_ratio\\\\\\":0.01}\\",\\n          \\"minScanDocCnt\\": \\"20000\\",\\n          \\"linearBuildThreshold\\": \\"5000\\"\\n        }\\n      }\\n    ],\\n    \\"dataProcessConfig\\": [\\n      {\\n        \\"operator\\": \\"vectorize\\",\\n        \\"dstField\\": \\"source_image_vector\\",\\n        \\"srcField\\": \\"source_image\\",\\n        \\"params\\": {\\n          \\"vectorModel\\": \\"clip\\",\\n          \\"vectorModal\\": \\"image\\",\\n          \\"srcFieldConfig\\": {\\n            \\"ossEndpoint\\": \\"oss-cn-hangzhou-internal.aliyuncs.com\\\\n\\",\\n            \\"ossBucket\\": \\"test\\",\\n            \\"uid\\": \\"uid\\"\\n          }\\n        }\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '获取索引表信息',
      'requestParamsDescription' => '### 请求示例

﻿

```java
GET /openapi/ha3/instances/{instanceId}/tables/{tableName}
```',
    ),
    'ListTables' => 
    array (
      'summary' => '获取索引列表。',
      'path' => '/openapi/ha3/instances/{instanceId}/tables',
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
        'operationType' => 'list',
        'abilityTreeCode' => '218776',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREopensearchGTRUN8',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例id',
            'type' => 'string',
            'required' => true,
            'example' => 'ha-cn-pl32rf0****',
          ),
        ),
        1 => 
        array (
          'name' => 'newMode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否为新版本控制台页面',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
            'default' => 'true',
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
                'title' => 'id of request',
                'description' => 'requestId',
                'type' => 'string',
                'example' => '10D5E615-69F7-5F49-B850-00169ADE513C',
              ),
              'result' => 
              array (
                'title' => 'List',
                'description' => 'List',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '返回结果',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'name' => 
                    array (
                      'title' => '索引名',
                      'description' => '索引名',
                      'type' => 'string',
                      'example' => 'es_test_1b',
                    ),
                    'indexStatus' => 
                    array (
                      'title' => '索引表状态 (NEW, PUBLISH, IN_USE: 召回引擎版创建成功后为正常状态, NOT_USE, STOP_USE, RESTORE_USE, FAIL: 向量检索版新版本首次创建索引失败状态)',
                      'description' => '索引表状态 (NEW, PUBLISH, IN_USE: 召回引擎版创建成功后为正常状态, NOT_USE, STOP_USE, RESTORE_USE, FAIL: 向量检索版新版本首次创建索引失败状态)',
                      'type' => 'string',
                      'example' => 'IN_USE',
                    ),
                    'status' => 
                    array (
                      'title' => '索引表状态 (NEW, PUBLISH, IN_USE: 召回引擎版创建成功后为正常状态, NOT_USE, STOP_USE, RESTORE_USE, FAIL: 向量检索版新版本首次创建索引失败状态)',
                      'description' => '索引表状态 (NEW, PUBLISH, IN_USE: 召回引擎版创建成功后为正常状态, NOT_USE, STOP_USE, RESTORE_USE, FAIL: 向量检索版新版本首次创建索引失败状态)',
                      'type' => 'string',
                      'example' => 'IN_USE',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        500 => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"10D5E615-69F7-5F49-B850-00169ADE513C\\",\\n  \\"result\\": [\\n    {\\n      \\"name\\": \\"es_test_1b\\",\\n      \\"indexStatus\\": \\"IN_USE\\",\\n      \\"status\\": \\"IN_USE\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '获取索引列表',
      'requestParamsDescription' => '### 请求示例

﻿

```java
GET /openapi/ha3/instances/{instanceId}/tables
```',
    ),
    'DeleteTable' => 
    array (
      'summary' => '删除索引表。',
      'path' => '/openapi/ha3/instances/{instanceId}/tables/{tableName}',
      'methods' => 
      array (
        0 => 'delete',
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
        'abilityTreeCode' => '218775',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREopensearchGTRUN8',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID',
            'type' => 'string',
            'required' => true,
            'example' => 'ha-cn-pl32rf0****',
          ),
        ),
        1 => 
        array (
          'name' => 'tableName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '索引表名称',
            'type' => 'string',
            'required' => true,
            'example' => 'test_summary',
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
                'title' => 'id of request',
                'description' => 'requestId',
                'type' => 'string',
                'example' => 'E7B7D598-B080-5C8E-AA35-D43EC0D5F886',
              ),
              'result' => 
              array (
                'title' => 'Map',
                'description' => 'Map',
                'type' => 'object',
                'example' => '{}',
              ),
            ),
          ),
        ),
        500 => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"E7B7D598-B080-5C8E-AA35-D43EC0D5F886\\",\\n  \\"result\\": {}\\n}","type":"json"}]',
      'title' => '删除索引表',
      'requestParamsDescription' => '### 请求示例

﻿

```java
DELETE /openapi/ha3/instances/{instanceId}/tables/{tableName}
```',
    ),
    'Reindex' => 
    array (
      'summary' => '重建索引。',
      'path' => '/openapi/ha3/instances/{instanceId}/tables/{tableName}/reindex',
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
        'abilityTreeCode' => '218777',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREopensearchD5N27K',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例id',
            'type' => 'string',
            'required' => true,
            'example' => 'ha-cn-pl32rf0****',
          ),
        ),
        1 => 
        array (
          'name' => 'tableName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '索引表名称',
            'type' => 'string',
            'required' => true,
            'example' => 'test_summary',
          ),
        ),
        2 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '一个JSON格式的字符串，完整JSON字符串信息，具体内容参见以下详细信息。',
            'type' => 'object',
            'properties' => 
            array (
              'dataTimeSec' => 
              array (
                'description' => 'int类型，秒级时间戳，数据源为API推送时必填',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '1640867288',
              ),
              'partition' => 
              array (
                'description' => '数据源为odps时必填',
                'type' => 'string',
                'required' => false,
                'example' => 'ds=20220713',
              ),
              'ossDataPath' => 
              array (
                'description' => 'oss文件路径',
                'type' => 'string',
                'required' => false,
                'example' => 'oss://opensearch',
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
                'title' => 'id of request',
                'description' => 'requestId',
                'type' => 'string',
                'example' => '10D5E615-69F7-5F49-B850-00169ADE513C',
              ),
              'result' => 
              array (
                'title' => 'Map',
                'description' => 'Map',
                'type' => 'object',
                'example' => '{}',
              ),
            ),
          ),
        ),
        500 => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"10D5E615-69F7-5F49-B850-00169ADE513C\\",\\n  \\"result\\": {}\\n}","type":"json"}]',
      'title' => '重建索引',
      'requestParamsDescription' => '### 请求示例

﻿

```java
POST /openapi/ha3/instances/{instanceId}/tables/{tableName}/reindex
```',
    ),
    'ListTableGenerations' => 
    array (
      'summary' => '获取索引generation列表。',
      'path' => '/openapi/ha3/instances/{instanceId}/tables/{tableName}/index_versions',
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
        'operationType' => 'list',
        'abilityTreeCode' => '218778',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREopensearchGTRUN8',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例id。',
            'type' => 'string',
            'required' => true,
            'example' => 'ha-cn-pl32rf0****',
          ),
        ),
        1 => 
        array (
          'name' => 'tableName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '索引表名称',
            'type' => 'string',
            'required' => true,
            'example' => 'test_summary',
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
                'title' => 'id of request',
                'description' => 'requestId',
                'type' => 'string',
                'example' => 'F6E3D968-529C-5C40-AFDD-133A8B8FD930',
              ),
              'result' => 
              array (
                'title' => 'List',
                'description' => 'List',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '返回结果',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'generationId' => 
                    array (
                      'description' => '索引全量版本',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1708674867',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        500 => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"F6E3D968-529C-5C40-AFDD-133A8B8FD930\\",\\n  \\"result\\": [\\n    {\\n      \\"generationId\\": 1708674867\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '获取索引generation列表' . "\0" . '',
      'requestParamsDescription' => '### 请求示例

﻿

```java
GET /v2/instances/{instanceId}/tables/{tableName}/index_versions
```',
    ),
    'GetTableGeneration' => 
    array (
      'summary' => '根据generationId获取某个索引版本状态。',
      'path' => '/openapi/ha3/instances/{instanceId}/tables/{tableName}/index_versions/{generationId}',
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
        'abilityTreeCode' => '218780',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREopensearchGTRUN8',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID',
            'type' => 'string',
            'required' => true,
            'example' => 'ha-cn-pl32rf0****',
          ),
        ),
        1 => 
        array (
          'name' => 'tableName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '索引表名称',
            'type' => 'string',
            'required' => true,
            'example' => 'test_summary',
          ),
        ),
        2 => 
        array (
          'name' => 'generationId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '索引全量版本',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1708674867',
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
                'title' => 'id of request',
                'description' => 'requestId',
                'type' => 'string',
                'example' => 'E7B7D598-B080-5C8E-AA35-D43EC0D5F886',
              ),
              'result' => 
              array (
                'title' => 'IndexGeneration',
                'description' => '返回结果',
                'type' => 'object',
                'properties' => 
                array (
                  'generationId' => 
                  array (
                    'description' => 'generationId',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1708674867',
                  ),
                  'status' => 
                  array (
                    'title' => 'starting, building, ready, stopped, failed',
                    'description' => 'starting, building, ready, stopped, failed',
                    'type' => 'string',
                    'example' => 'ready',
                  ),
                ),
              ),
            ),
          ),
        ),
        500 => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"E7B7D598-B080-5C8E-AA35-D43EC0D5F886\\",\\n  \\"result\\": {\\n    \\"generationId\\": 1708674867,\\n    \\"status\\": \\"ready\\"\\n  }\\n}","type":"json"}]',
      'title' => '根据generationId获取某个索引版本状态' . "\0" . '' . "\0" . '',
      'requestParamsDescription' => '### 请求示例

﻿

```java
GET /openapi/ha3/instances/{instanceId}/tables/{tableName}/index_versions/{generationId}
```',
    ),
    'ListPostQueryResult' => 
    array (
      'path' => '/openapi/ha3/instances/{instanceId}/query',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
        'abilityTreeCode' => '205312',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREopensearchO9FNU6',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID',
            'type' => 'string',
            'required' => true,
            'example' => 'ha-cn-pl32rf0****',
          ),
        ),
        1 => 
        array (
          'name' => 'address',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地址。',
            'type' => 'string',
            'required' => false,
            'example' => '47.100.XX.XX',
          ),
        ),
        2 => 
        array (
          'name' => 'type',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'sql: sql查询, ha3: ha3查询',
            'description' => 'sql: sql查询, ha3: ha3查询',
            'type' => 'string',
            'required' => false,
            'example' => 'ha3',
            'default' => 'sql',
          ),
        ),
        3 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求结构。',
            'type' => 'object',
            'required' => false,
            'example' => '{"assemblyQuery":"query=id:1&&cluster=general&&config=start:0,hit:10,format:json"}',
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
                'title' => 'id of request',
                'description' => 'id of request',
                'type' => 'string',
                'example' => '022F36C7-9FB4-5D67-BEBC-3D14B0984463',
              ),
              'result' => 
              array (
                'title' => 'Object',
                'description' => 'Object',
                'type' => 'any',
                'example' => '{}',
              ),
            ),
          ),
        ),
        500 => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"022F36C7-9FB4-5D67-BEBC-3D14B0984463\\",\\n  \\"result\\": \\"{}\\"\\n}","type":"json"}]',
      'title' => '召回引擎版使用POST请求获取搜索测试结果',
    ),
    'ListRestQueryResult' => 
    array (
      'path' => '/openapi/ha3/instances/{instanceId}/rest-query',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
        'abilityTreeCode' => '171180',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREopensearchO9FNU6',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID',
            'type' => 'string',
            'required' => true,
            'example' => 'ha-cn-pl32rf0****',
          ),
        ),
        1 => 
        array (
          'name' => 'address',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地址。',
            'type' => 'string',
            'required' => false,
            'example' => '47.100.XX.XX',
          ),
        ),
        2 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求结构。',
            'type' => 'object',
            'properties' => 
            array (
              'indexName' => 
              array (
                'title' => '索引表名',
                'description' => '索引表名',
                'type' => 'string',
                'required' => false,
                'example' => 'main_index',
              ),
              'query' => 
              array (
                'title' => 'rest查询语句',
                'description' => 'rest查询语句',
                'type' => 'object',
                'required' => false,
                'example' => 'query%3Drelation_id%3A%221151274675_2%22%26%26cluster%3Dgeneral%26%26config%3Dstart%3A0%2Chit%3A10%2Cformat%3Ajson',
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
                'title' => 'id of request',
                'description' => 'id of request',
                'type' => 'string',
                'example' => 'F43E8AB4-419C-5F4C-90D6-615590DFAA3C',
              ),
              'result' => 
              array (
                'title' => 'Object',
                'description' => 'Object',
                'type' => 'any',
                'example' => '{}',
              ),
            ),
          ),
        ),
        500 => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"F43E8AB4-419C-5F4C-90D6-615590DFAA3C\\",\\n  \\"result\\": \\"{}\\"\\n}","type":"json"}]',
      'title' => '召回引擎版获取rest查询搜索测试结果',
    ),
    'ListVectorQueryResult' => 
    array (
      'path' => '/openapi/ha3/instances/{instanceId}/vector-query',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
        'abilityTreeCode' => '194016',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREopensearch4EPY7K',
          1 => 'FEATUREopensearch8URIID',
          2 => 'FEATUREopensearch70UIZT',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID',
            'type' => 'string',
            'required' => true,
            'example' => 'ha-cn-pl32rf0****',
          ),
        ),
        1 => 
        array (
          'name' => 'address',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地址。',
            'type' => 'string',
            'required' => false,
            'example' => '47.100.XX.XX',
          ),
        ),
        2 => 
        array (
          'name' => 'queryType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询类型：vector、primary_key、vector_text',
            'type' => 'string',
            'required' => false,
            'example' => 'primary_key',
            'default' => 'vector',
          ),
        ),
        3 => 
        array (
          'name' => 'vectorQueryType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '向量查询类型：vector、image、text',
            'type' => 'string',
            'required' => false,
            'example' => 'image',
            'default' => 'vector',
          ),
        ),
        4 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => 'body参数。',
            'type' => 'object',
            'required' => false,
            'example' => '{"tableName":"api","ids":["1"]}',
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
                'title' => 'id of request',
                'description' => 'id of request',
                'type' => 'string',
                'example' => '022F36C7-9FB4-5D67-BEBC-3D14B0984463',
              ),
              'result' => 
              array (
                'title' => 'Object',
                'description' => 'Object',
                'type' => 'any',
                'example' => '{}',
              ),
            ),
          ),
        ),
        500 => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"022F36C7-9FB4-5D67-BEBC-3D14B0984463\\",\\n  \\"result\\": \\"{}\\"\\n}","type":"json"}]',
      'title' => '向量检索版获取向量查询搜索测试结果',
    ),
    'PushDocuments' => 
    array (
      'path' => '/openapi/ha3/instances/{instanceId}/data-sources/{dataSourceName}/actions/bulk',
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
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID',
            'type' => 'string',
            'required' => true,
            'example' => 'ha-cn-pl32rf0****',
          ),
        ),
        1 => 
        array (
          'name' => 'dataSourceName',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '数据源名称',
            'type' => 'string',
            'required' => true,
            'example' => 'ha-cn-pl32rf0****_ecom_table_test',
          ),
        ),
        2 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体参数',
            'type' => 'array',
            'items' => 
            array (
              'description' => '请求体',
              'type' => 'any',
              'required' => false,
              'example' => '[{"cmd":"add","fields":{"id":"1","vt":[0.1]}}]',
            ),
            'required' => false,
          ),
        ),
        3 => 
        array (
          'name' => 'pkField',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '主键字段',
            'type' => 'string',
            'required' => false,
            'example' => 'id',
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
                'title' => 'id of request',
                'description' => 'id of request',
                'type' => 'string',
                'example' => '2AE63638-5420-56DC-BF59-37D8174039A0',
              ),
              'result' => 
              array (
                'title' => 'Map',
                'description' => 'Map',
                'type' => 'object',
                'example' => '{}',
              ),
            ),
          ),
        ),
        500 => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"2AE63638-5420-56DC-BF59-37D8174039A0\\",\\n  \\"result\\": {}\\n}","type":"json"}]',
      'title' => '推送数据',
    ),
    'DescribeRegions' => 
    array (
      'path' => '/openapi/ha3/regions',
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
      'systemTags' => 
      array (
        'operationType' => 'none',
        'abilityTreeCode' => '180430',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREopensearch0AT3OG',
          1 => 'FEATUREopensearchJB31XH',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'acceptLanguage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定返回的语言，默认值为zh-cn。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh-cn',
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
                'description' => '当前请求的requestID',
                'type' => 'string',
                'example' => 'E7B7D598-B080-5C8E-AA35-D43EC0D5F886',
              ),
              'result' => 
              array (
                'description' => '返回结果。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '返回详情结果',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'localName' => 
                    array (
                      'description' => '区域名称',
                      'type' => 'string',
                      'example' => 'China (Hangzhou)',
                    ),
                    'endpoint' => 
                    array (
                      'description' => '接入点地址',
                      'type' => 'string',
                      'example' => 'endpoint',
                    ),
                    'regionId' => 
                    array (
                      'description' => '区域ID
cn-hangzhou  华东1（杭州）
cn-shanghai  华东2（上海）
cn-qingdao  华北1（青岛）
cn-beijing  华北2（北京）
cn-zhangjiakou  华北3（张家口）
cn-shenzhen  华南1（深圳）
ap-southeast-1  新加坡
cn-internal  内网中心
cn-zhangbei-in 内网张北
us-west-1-in  内网美国
cn-daily  日常
cn-test  联调
pre-hangzhou  预发杭州',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"E7B7D598-B080-5C8E-AA35-D43EC0D5F886\\",\\n  \\"result\\": [\\n    {\\n      \\"localName\\": \\"China (Hangzhou)\\",\\n      \\"endpoint\\": \\"endpoint\\",\\n      \\"regionId\\": \\"cn-hangzhou\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '获取云产品区域列表',
      'summary' => '获取云产品区域列表',
    ),
    'ListQueryResult' => 
    array (
      'summary' => '获取搜索测试结果。',
      'path' => '/openapi/ha3/instances/{instanceId}/query',
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
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '实例ID',
            'description' => '实例ID',
            'type' => 'string',
            'required' => true,
            'example' => 'ha-cn-pl32rf0****',
          ),
        ),
        1 => 
        array (
          'name' => 'query',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'query 语句',
            'type' => 'string',
            'required' => false,
            'example' => 'query%3D1%26%26config%3Dstart%3A0%2Chit%3A10%2Cformat%3Ajson%26%26cluster%3Dgeneral',
          ),
        ),
        2 => 
        array (
          'name' => 'sql',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'SQL语句。',
            'type' => 'string',
            'required' => false,
            'example' => 'query%3Dselect%20max(content_id)%20from%20generation',
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
                'example' => '9E5BCFAA-98B3-51D0-9188-B1BC07589337',
              ),
            ),
          ),
        ),
        500 => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"9E5BCFAA-98B3-51D0-9188-B1BC07589337\\"\\n}","type":"json"}]',
      'title' => '获取搜索测试结果',
      'description' => '### 方法
`GET`
### URI
`/openapi/ha3/instances/{instanceId}/query?query=xxxx`。',
      'responseParamsDescription' => '| 字段      | 类型   | 描述                                                         |
| --------- | ------ | ------------------------------------------------------------ |
| requestId | String | 请求ID                                                       |
| result    | String | 引擎返回结果 |',
      'extraInfo' => '### 示例
**请求示例**

```
sql: GET /openapi/ha3/instances/ha3_instances_id/query?sql=query%3Dselect+%2A+from+mx_index1217

query: GET /openapi/ha3/instances/ha3_instances_id/query?query=config%3Dhit%3A4%2Cformat%3Ajson%2Cfetch_summary_type%3Apk%2Cqrs_chain%3Asearch%26%26query%3Did%3A8148508889615505646%26%26cluster%3Dgeneral
```
**返回示例**

正确返回

```
{
  "requestId": "0A6EB64B-B4C8-CF02-810F-E660812972FF",
  "result": {}
}
```
',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-beijing',
      'endpoint' => 'searchengine.cn-beijing.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'searchengine.cn-hangzhou.aliyuncs.com',
    ),
    2 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'searchengine.cn-shanghai.aliyuncs.com',
    ),
    3 => 
    array (
      'regionId' => 'cn-shenzhen',
      'endpoint' => 'searchengine.cn-shenzhen.aliyuncs.com',
    ),
    4 => 
    array (
      'regionId' => 'ap-southeast-1',
      'endpoint' => 'searchengine.ap-southeast-1.aliyuncs.com',
    ),
  ),
);
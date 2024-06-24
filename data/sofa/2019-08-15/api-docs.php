<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'SOFA',
    'version' => '2019-08-15',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 122090,
      'title' => 'MsConfig',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DeleteMsConfigAttributes',
        1 => 'DeleteMsConfigResources',
        2 => 'UpdateMsConfigAttributes',
        3 => 'UpdateMsConfigResources',
        4 => 'GetMsConfigAttributes',
        5 => 'GetMsConfigResources',
        6 => 'QueryMsConfigAttributes',
        7 => 'QueryMsConfigClients',
        8 => 'QueryMsConfigClientValues',
        9 => 'QueryMsConfigData',
        10 => 'QueryMsConfigResources',
        11 => 'GrayPushMsConfigData',
        12 => 'PushMsConfigData',
      ),
    ),
    1 => 
    array (
      'id' => 122104,
      'title' => 'Sofamq',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateMqSofamqGroup',
        1 => 'DeleteMqSofamqGroup',
        2 => 'DeleteMqSofamqTopic',
        3 => 'DeleteMqSofamqTrace',
        4 => 'DeleteMqSofamqWarn',
        5 => 'UpdateMqSofamqGroup',
        6 => 'UpdateMqSofamqGroupRemark',
        7 => 'UpdateMqSofamqWarn',
        8 => 'DisableMqSofamqWarn',
        9 => 'EnableMqSofamqWarn',
        10 => 'GetMqSofamqConsumerJStack',
        11 => 'GetMqSofamqConsumerStatus',
        12 => 'GetMqSofamqDLQMessageById',
        13 => 'GetMqSofamqMessageById',
        14 => 'GetMqSofamqTraceByMsgId',
        15 => 'GetMqSofamqTraceResult',
        16 => 'ListMqSofamqGroup',
        17 => 'ListMqSofamqTopic',
        18 => 'ListMqSofamqTrace',
        19 => 'ListMqSofamqWarn',
        20 => 'ListMqSofamqWarnHistory',
        21 => 'QueryMqSofamqConsumerAccumulate',
        22 => 'QueryMqSofamqConsumerConnection',
        23 => 'QueryMqSofamqConsumerTimespan',
        24 => 'QueryMqSofamqDLQMessageByGroupId',
        25 => 'QueryMqSofamqGroupSubDetail',
        26 => 'QueryMqSofamqMessageByKey',
        27 => 'QueryMqSofamqMessageByTopic',
        28 => 'QueryMqSofamqTraceByMsgKey',
        29 => 'QueryMqSofamqTraceByTopic',
        30 => 'ResendMqSofamqDLQMessageBatch',
        31 => 'ResendMqSofamqDLQMessageById',
        32 => 'ResetMqSofamqConsumerOffset',
      ),
    ),
    2 => 
    array (
      'id' => 122139,
      'title' => 'Topic',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateMqSofamqTopic',
        1 => 'UpdateMqSofamqTopic',
        2 => 'UpdateMqSofamqTopicRemark',
      ),
    ),
    3 => 
    array (
      'id' => 122158,
      'title' => 'Cas',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeCasComputers',
      ),
    ),
    4 => 
    array (
      'id' => 122169,
      'title' => 'DMS',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'AddMsConfigAttributes',
        1 => 'AddMsConfigResources',
      ),
    ),
    5 => 
    array (
      'id' => 122172,
      'title' => 'RMS',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'UpdateRMSUnifiedAlarmRule',
        1 => 'CreateRMSUnifiedAlarmRule',
        2 => 'DeleteRMSUnifiedAlarmRule',
        3 => 'QueryRMSUnifiedAlarmEvent',
        4 => 'QueryRMSUnifiedAlarmRule',
        5 => 'QueryRMSUnifiedAlarmHistory',
        6 => 'QueryRMSUnifiedAlarmNotifyHistory',
        7 => 'QueryRMSMetrics',
      ),
    ),
    6 => 
    array (
      'id' => 169573,
      'title' => '其他',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'LogoutMsRegistryService',
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
    'DeleteMsConfigAttributes' => 
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
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Id',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '属性自增长 ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '系统字段：环境实例 ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'abcdEFGH1234',
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
              'ResultMessage' => 
              array (
                'description' => '结果描述',
                'type' => 'string',
                'example' => 'OK',
              ),
              'ResultCode' => 
              array (
                'description' => '结果码',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '861E6630-AEC0-4B2D-B214-6CB5E44B7F04',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"ResultMessage\\": \\"OK\\",\\n  \\"ResultCode\\": \\"OK\\",\\n  \\"RequestId\\": \\"861E6630-AEC0-4B2D-B214-6CB5E44B7F04\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteMsConfigAttributesResponse>\\n    <ResultMessage>OK</ResultMessage>\\n    <ResultCode>OK</ResultCode>\\n    <RequestId>861E6630-AEC0-4B2D-B214-6CB5E44B7F04</RequestId>\\n</DeleteMsConfigAttributesResponse>","errorExample":""}]',
      'title' => '删除属性元信息',
      'summary' => '根据属性 ID 删除对应的属性元信息。删除属性元信息，属性值不会删除。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteMsConfigResources' => 
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
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Id',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '资源自增长 ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '系统字段：环境实例 ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'abcdEFGH1234',
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
              'ResultMessage' => 
              array (
                'description' => '结果描述',
                'type' => 'string',
                'example' => 'OK',
              ),
              'ResultCode' => 
              array (
                'description' => '结果码',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '861E6630-AEC0-4B2D-B214-6CB5E44B7F04',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"ResultMessage\\": \\"OK\\",\\n  \\"ResultCode\\": \\"OK\\",\\n  \\"RequestId\\": \\"861E6630-AEC0-4B2D-B214-6CB5E44B7F04\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '删除指定资源',
      'summary' => '根据资源 ID 删除对应资源，删除资源会同时删除对应资源下所有的属性信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UpdateMsConfigAttributes' => 
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
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AttributeName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '属性名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'age',
          ),
        ),
        1 => 
        array (
          'name' => 'Desc',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '属性描述信息',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '年龄',
          ),
        ),
        2 => 
        array (
          'name' => 'Id',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '属性自增长 ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '系统字段：环境实例 ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'abcdEFGH1234',
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
              'ResultMessage' => 
              array (
                'description' => '结果描述',
                'type' => 'string',
                'example' => 'OK',
              ),
              'ResultCode' => 
              array (
                'description' => '结果码，取值为： OK、INTERNALERROR、ERRPERMISSIONDENIED、ERRNOTENABLED、INVALIDSIGNATURE、ERRORREQUEST、ACCESSDENIED、MISSINGPARAMETER、ERRORINTERNALPROVIDER、BADPROVIDER_RESPONSE。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '861E6630-AEC0-4B2D-B214-6CB5E44B7F04',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"ResultMessage\\": \\"OK\\",\\n  \\"ResultCode\\": \\"OK\\",\\n  \\"RequestId\\": \\"861E6630-AEC0-4B2D-B214-6CB5E44B7F04\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>894900FD-184F-42C1-A53C-82B114154BE1</RequestId>\\n<ResultCode>OK</ResultCode>","errorExample":""}]',
      'title' => 'UpdateMsConfigAttributes',
      'summary' => '根据属性 ID 更新属性元信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UpdateMsConfigResources' => 
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
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '应用名',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'foo',
          ),
        ),
        1 => 
        array (
          'name' => 'Attributes',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '资源的属性信息，以 JSON 字符串格式传入',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '[{"attributeName":"age","desc":"描述信息"}]',
          ),
        ),
        2 => 
        array (
          'name' => 'Desc',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '资源描述信息',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '测试资源',
          ),
        ),
        3 => 
        array (
          'name' => 'Id',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '更新的资源自增长 ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '系统字段：环境实例 ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'abcdEFGH1234',
          ),
        ),
        5 => 
        array (
          'name' => 'Region',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '资源搜索的域',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'Alipay',
          ),
        ),
        6 => 
        array (
          'name' => 'ResourceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '资源唯一标识',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'com.test.resource',
          ),
        ),
        7 => 
        array (
          'name' => 'UpdateAttribute',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否全量更新属性，默认为 false',
            'type' => 'boolean',
            'required' => false,
            'docRequired' => false,
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
              'ResultMessage' => 
              array (
                'description' => '结果描述',
                'type' => 'string',
                'example' => 'OK',
              ),
              'ResultCode' => 
              array (
                'description' => '结果码',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '861E6630-AEC0-4B2D-B214-6CB5E44B7F04',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"ResultMessage\\": \\"OK\\",\\n  \\"ResultCode\\": \\"OK\\",\\n  \\"RequestId\\": \\"861E6630-AEC0-4B2D-B214-6CB5E44B7F04\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '更新资源元信息',
      'summary' => 'update_attribute 为 false 时，则只更新资源元信息，不会更新属性信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetMsConfigAttributes' => 
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Id',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '属性自增长 ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '系统字段：环境实例 ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'abcdEFGH1234',
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
              'ResultMessage' => 
              array (
                'description' => '结果描述',
                'type' => 'string',
                'example' => 'OK',
              ),
              'ResultCode' => 
              array (
                'description' => '结果码',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '861E6630-AEC0-4B2D-B214-6CB5E44B7F04',
              ),
              'Attribute' => 
              array (
                'description' => '属性信息',
                'type' => 'object',
                'properties' => 
                array (
                  'InstanceId' => 
                  array (
                    'description' => '实例 ID',
                    'type' => 'string',
                    'example' => 'abcdEFGH1234',
                  ),
                  'AttributeName' => 
                  array (
                    'description' => '属性名',
                    'type' => 'string',
                    'example' => 'switch',
                  ),
                  'Id' => 
                  array (
                    'description' => '属性 ID',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1',
                  ),
                  'Desc' => 
                  array (
                    'description' => '属性描述信息',
                    'type' => 'string',
                    'example' => '活动开关',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"ResultMessage\\": \\"OK\\",\\n  \\"ResultCode\\": \\"OK\\",\\n  \\"RequestId\\": \\"861E6630-AEC0-4B2D-B214-6CB5E44B7F04\\",\\n  \\"Attribute\\": {\\n    \\"InstanceId\\": \\"abcdEFGH1234\\",\\n    \\"AttributeName\\": \\"switch\\",\\n    \\"Id\\": 1,\\n    \\"Desc\\": \\"活动开关\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>D7917DBF-CAA6-479E-8F26-3043AD7AAD11</RequestId>\\n<Attribute>\\n    <Desc>男</Desc>\\n    <InstanceId>AWHNEX3GFLJT</InstanceId>\\n    <AttributeName>sex</AttributeName>\\n    <Id>1</Id>\\n</Attribute>\\n<ResultCode>OK</ResultCode>","errorExample":""}]',
      'title' => '获取属性信息',
      'summary' => '根据属性 ID 获取对应的属性信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetMsConfigResources' => 
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Id',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '资源自增长 ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '系统字段：环境实例 ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'abcdEFGH1234',
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
              'ResultMessage' => 
              array (
                'description' => '结果描述',
                'type' => 'string',
                'example' => 'OK',
              ),
              'ResultCode' => 
              array (
                'description' => '结果码',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '861E6630-AEC0-4B2D-B214-6CB5E44B7F04',
              ),
              'Resource' => 
              array (
                'description' => '资源信息',
                'type' => 'object',
                'properties' => 
                array (
                  'AppName' => 
                  array (
                    'description' => '应用名',
                    'type' => 'string',
                    'example' => 'drmdemo',
                  ),
                  'Region' => 
                  array (
                    'description' => '资源所属的域',
                    'type' => 'string',
                    'example' => 'Alipay',
                  ),
                  'InstanceId' => 
                  array (
                    'description' => '实例 ID',
                    'type' => 'string',
                    'example' => 'abcdEFGH1234',
                  ),
                  'ResourceId' => 
                  array (
                    'description' => '资源 ID',
                    'type' => 'string',
                    'example' => 'com.alipay.drmResource',
                  ),
                  'Id' => 
                  array (
                    'description' => '资源自增长 ID',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1',
                  ),
                  'Desc' => 
                  array (
                    'description' => '资源描述信息',
                    'type' => 'string',
                    'example' => '活动开关',
                  ),
                  'Attributes' => 
                  array (
                    'description' => '资源下所有属性信息',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'InstanceId' => 
                        array (
                          'description' => '实例 ID',
                          'type' => 'string',
                          'example' => 'abcdEFGH1234',
                        ),
                        'AttributeName' => 
                        array (
                          'description' => '属性名',
                          'type' => 'string',
                          'example' => 'switch',
                        ),
                        'Id' => 
                        array (
                          'description' => '属性 ID',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1',
                        ),
                        'Desc' => 
                        array (
                          'description' => '属性描述信息',
                          'type' => 'string',
                          'example' => '活动开关',
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
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"ResultMessage\\": \\"OK\\",\\n  \\"ResultCode\\": \\"OK\\",\\n  \\"RequestId\\": \\"861E6630-AEC0-4B2D-B214-6CB5E44B7F04\\",\\n  \\"Resource\\": {\\n    \\"AppName\\": \\"drmdemo\\",\\n    \\"Region\\": \\"Alipay\\",\\n    \\"InstanceId\\": \\"abcdEFGH1234\\",\\n    \\"ResourceId\\": \\"com.alipay.drmResource\\",\\n    \\"Id\\": 1,\\n    \\"Desc\\": \\"活动开关\\",\\n    \\"Attributes\\": [\\n      {\\n        \\"InstanceId\\": \\"abcdEFGH1234\\",\\n        \\"AttributeName\\": \\"switch\\",\\n        \\"Id\\": 1,\\n        \\"Desc\\": \\"活动开关\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>F127DCFE-05FE-4740-AD07-18598BF37289</RequestId>\\n<Resource>\\n    <Desc>测试资源类</Desc>\\n    <InstanceId>9XP0PS5JQHJU</InstanceId>\\n    <ResourceId>com.alipay.resource</ResourceId>\\n    <Attributes>\\n        <Desc>姓名</Desc>\\n        <InstanceId>9XP0PS5JQHJU</InstanceId>\\n        <AttributeName>name</AttributeName>\\n        <Id>27</Id>\\n    </Attributes>\\n    <Attributes>\\n        <Desc>性别</Desc>\\n        <InstanceId>9XP0PS5JQHJU</InstanceId>\\n        <AttributeName>sex</AttributeName>\\n        <Id>28</Id>\\n    </Attributes>\\n    <Region>Alipay</Region>\\n    <Id>1</Id>\\n    <AppName>foo</AppName>\\n</Resource>\\n<ResultCode>OK</ResultCode>","errorExample":""}]',
      'title' => '获取资源元信息',
      'summary' => '根据资源 ID 获取资源元信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryMsConfigAttributes' => 
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '应用名',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'demo-app',
          ),
        ),
        1 => 
        array (
          'name' => 'AttributeName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '属性名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'age',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '系统字段：环境实例 ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'abcdEFGH1234',
          ),
        ),
        3 => 
        array (
          'name' => 'Region',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '资源所属域',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'Alipay',
          ),
        ),
        4 => 
        array (
          'name' => 'ResourceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '资源 ID，类似于文件名',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'com.alipay.test',
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
              'ResultMessage' => 
              array (
                'description' => '结果描述',
                'type' => 'string',
                'example' => 'OK',
              ),
              'ResultCode' => 
              array (
                'description' => '结果码',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '861E6630-AEC0-4B2D-B214-6CB5E44B7F04',
              ),
              'Attribute' => 
              array (
                'description' => '属性信息',
                'type' => 'object',
                'properties' => 
                array (
                  'InstanceId' => 
                  array (
                    'description' => '实例 ID',
                    'type' => 'string',
                    'example' => 'abcdEFGH1234',
                  ),
                  'AttributeName' => 
                  array (
                    'description' => '属性名',
                    'type' => 'string',
                    'example' => 'switch',
                  ),
                  'Id' => 
                  array (
                    'description' => '属性 ID',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1',
                  ),
                  'Desc' => 
                  array (
                    'description' => '属性描述信息',
                    'type' => 'string',
                    'example' => '活动开关',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"ResultMessage\\": \\"OK\\",\\n  \\"ResultCode\\": \\"OK\\",\\n  \\"RequestId\\": \\"861E6630-AEC0-4B2D-B214-6CB5E44B7F04\\",\\n  \\"Attribute\\": {\\n    \\"InstanceId\\": \\"abcdEFGH1234\\",\\n    \\"AttributeName\\": \\"switch\\",\\n    \\"Id\\": 1,\\n    \\"Desc\\": \\"活动开关\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '获取属性详细信息',
      'summary' => '根据域,、应用名、资源 ID、属性名称获取属性详细信息，包含属性 ID。其它接口都依赖此接口获取属性 ID。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryMsConfigClients' => 
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
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AttributeId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '属性自增长 ID，通过查询属性方式获取 ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '系统字段：环境实例 ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'abcdEFGH1234',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNum',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '分页参数，页数',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '分页参数，分页大小',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
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
              'PageNum' => 
              array (
                'description' => '分页参数，第几页',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '861E6630-AEC0-4B2D-B214-6CB5E44B7F04',
              ),
              'ResultMessage' => 
              array (
                'description' => '结果描述',
                'type' => 'string',
                'example' => 'OK',
              ),
              'ResultCode' => 
              array (
                'description' => '结果码',
                'type' => 'string',
                'example' => 'OK',
              ),
              'PageSize' => 
              array (
                'description' => '分页参数，分页大小',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '10',
              ),
              'TotalCount' => 
              array (
                'description' => '客户端总数量',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '100',
              ),
              'Clients' => 
              array (
                'description' => '客户端信息',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'PushData' => 
                    array (
                      'description' => '推送的值',
                      'type' => 'string',
                      'example' => 'switch',
                    ),
                    'Ip' => 
                    array (
                      'description' => '客户端 IP',
                      'type' => 'string',
                      'example' => '127.0.0.1',
                    ),
                    'Data' => 
                    array (
                      'description' => '客户端内存里的值',
                      'type' => 'string',
                      'example' => 'switch',
                    ),
                    'Cell' => 
                    array (
                      'description' => '所属的 cell',
                      'type' => 'string',
                      'example' => 'DEFAULT',
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
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"PageNum\\": 1,\\n  \\"RequestId\\": \\"861E6630-AEC0-4B2D-B214-6CB5E44B7F04\\",\\n  \\"ResultMessage\\": \\"OK\\",\\n  \\"ResultCode\\": \\"OK\\",\\n  \\"PageSize\\": 10,\\n  \\"TotalCount\\": 100,\\n  \\"Clients\\": [\\n    {\\n      \\"PushData\\": \\"switch\\",\\n      \\"Ip\\": \\"127.0.0.1\\",\\n      \\"Data\\": \\"switch\\",\\n      \\"Cell\\": \\"DEFAULT\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<clients>\\n    <data>DJ9P4BRNBL0S</data>\\n    <ip>10.15.232.101</ip>\\n    <push_data>DJ9P4BRNBL0S</push_data>\\n    <cell>shanghai-et15</cell>\\n</clients>\\n<page_num>1</page_num>\\n<page_size>10</page_size>\\n<result_code>OK</result_code>\\n<result_msg>SUCCESS</result_msg>\\n<total_count>4</total_count>","errorExample":""}]',
      'title' => '查询一个属性所有订阅的客户端信息',
      'summary' => '查询一个属性所有订阅的客户端信息。动态配置客户端在启动的时候，会与服务端建立长连接，并告知动态配置服务端自身关联的属性信息，通过此长连接可以查询到所有订阅属性的客户端信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryMsConfigClientValues' => 
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AttributeId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '属性自增长 ID，可以通过查询属性接口获取 ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '系统字段：环境实例 ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'abcdEFGH1234',
          ),
        ),
        2 => 
        array (
          'name' => 'Ips',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '查询的 IP 列表，英文逗号隔开',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '127.0.0.1,127.0.0.2',
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
              'ResultMessage' => 
              array (
                'description' => '结果描述',
                'type' => 'string',
                'example' => 'OK',
              ),
              'ResultCode' => 
              array (
                'description' => '结果码',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '861E6630-AEC0-4B2D-B214-6CB5E44B7F04',
              ),
              'Clients' => 
              array (
                'description' => '客户端信息，包含内存值',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Ip' => 
                    array (
                      'description' => '客户端 IP',
                      'type' => 'string',
                      'example' => '127.0.0.1',
                    ),
                    'Data' => 
                    array (
                      'description' => '客户端内存里的值',
                      'type' => 'string',
                      'example' => 'switch',
                    ),
                    'Success' => 
                    array (
                      'description' => '是否查询成功',
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
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"ResultMessage\\": \\"OK\\",\\n  \\"ResultCode\\": \\"OK\\",\\n  \\"RequestId\\": \\"861E6630-AEC0-4B2D-B214-6CB5E44B7F04\\",\\n  \\"Clients\\": [\\n    {\\n      \\"Ip\\": \\"127.0.0.1\\",\\n      \\"Data\\": \\"switch\\",\\n      \\"Success\\": true\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<RequestId>C8D232D5-C898-4084-880C-B8FD836AB143</RequestId>\\n<Clients>\\n    <Ip>127.0.0.1</Ip>\\n    <Success>false</Success>\\n</Clients>\\n<ResultCode>OK</ResultCode>","errorExample":""}]',
      'title' => '查询客户端的内存值',
      'summary' => '根据属性 ID 查询指定客户端的内存值。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryMsConfigData' => 
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
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AttributeId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '属性自增长 ID，可以通过查询属性接口获取 ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '系统字段：环境实例 ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'abcdEFGH1234',
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
              'ResultMessage' => 
              array (
                'description' => '结果描述',
                'type' => 'string',
                'example' => 'OK',
              ),
              'ResultCode' => 
              array (
                'description' => '结果码',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '861E6630-AEC0-4B2D-B214-6CB5E44B7F04',
              ),
              'QueryResult' => 
              array (
                'description' => '查询推送值结果，数组中每一项表示具体的单元，DEFAULT_ZONE 表示所有单元。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Data' => 
                    array (
                      'description' => '推送值',
                      'type' => 'string',
                      'example' => 'some push data',
                    ),
                    'Cell' => 
                    array (
                      'description' => '推送目标 cell',
                      'type' => 'string',
                      'example' => 'cell1',
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
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"ResultMessage\\": \\"OK\\",\\n  \\"ResultCode\\": \\"OK\\",\\n  \\"RequestId\\": \\"861E6630-AEC0-4B2D-B214-6CB5E44B7F04\\",\\n  \\"QueryResult\\": [\\n    {\\n      \\"Data\\": \\"some push data\\",\\n      \\"Cell\\": \\"cell1\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<QueryResult>\\n    <Data>强势推送思密达</Data>\\n    <Cell>ZONEA</Cell>\\n</QueryResult>\\n<RequestId>5C8C4130-BFDB-4AC2-A61C-2D26B1DDCC7B</RequestId>\\n<ResultCode>OK</ResultCode>","errorExample":""}]',
      'title' => '查询属性最后一次推送值',
      'summary' => '根据属性 ID 查询其最后一次推送值。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryMsConfigResources' => 
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '应用名',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'foo',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '系统字段：环境实例 ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'abcdEFGH1234',
          ),
        ),
        2 => 
        array (
          'name' => 'Keyword',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '资源 ID 模糊查询关键字',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'com.alipay.drmResource',
          ),
        ),
        3 => 
        array (
          'name' => 'PageNum',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '分页参数，第几页',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '分页参数，分页大小。默认值为 10',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
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
              'PageNum' => 
              array (
                'description' => '分页参数，第几页',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '861E6630-AEC0-4B2D-B214-6CB5E44B7F04',
              ),
              'ResultMessage' => 
              array (
                'description' => '结果描述',
                'type' => 'string',
                'example' => 'OK',
              ),
              'ResultCode' => 
              array (
                'description' => '结果码',
                'type' => 'string',
                'example' => 'OK',
              ),
              'PageSize' => 
              array (
                'description' => '分页参数，分页大小',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '10',
              ),
              'TotalCount' => 
              array (
                'description' => '满足模糊查询条件的结果总条数',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '100',
              ),
              'Resources' => 
              array (
                'description' => '模糊查询资源结果',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'AppName' => 
                    array (
                      'description' => '应用名',
                      'type' => 'string',
                      'example' => 'drmdemo',
                    ),
                    'Region' => 
                    array (
                      'description' => '资源所属的域',
                      'type' => 'string',
                      'example' => 'Alipay',
                    ),
                    'InstanceId' => 
                    array (
                      'description' => '实例 ID',
                      'type' => 'string',
                      'example' => 'abcdEFGH1234',
                    ),
                    'ResourceId' => 
                    array (
                      'description' => '资源 ID',
                      'type' => 'string',
                      'example' => 'com.alipay.drmResource',
                    ),
                    'Id' => 
                    array (
                      'description' => '资源自增长 ID',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1',
                    ),
                    'Desc' => 
                    array (
                      'description' => '资源描述信息',
                      'type' => 'string',
                      'example' => '活动开关',
                    ),
                    'Attributes' => 
                    array (
                      'description' => '属性列表',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'InstanceId' => 
                          array (
                            'description' => '实例 ID',
                            'type' => 'string',
                            'example' => 'abcdEFGH1234',
                          ),
                          'AttributeName' => 
                          array (
                            'description' => '属性名',
                            'type' => 'string',
                            'example' => 'switch',
                          ),
                          'Id' => 
                          array (
                            'description' => '属性 ID',
                            'type' => 'integer',
                            'format' => 'int64',
                            'example' => '1',
                          ),
                          'Desc' => 
                          array (
                            'description' => '属性描述信息',
                            'type' => 'string',
                            'example' => '活动开关',
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
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"PageNum\\": 1,\\n  \\"RequestId\\": \\"861E6630-AEC0-4B2D-B214-6CB5E44B7F04\\",\\n  \\"ResultMessage\\": \\"OK\\",\\n  \\"ResultCode\\": \\"OK\\",\\n  \\"PageSize\\": 10,\\n  \\"TotalCount\\": 100,\\n  \\"Resources\\": [\\n    {\\n      \\"AppName\\": \\"drmdemo\\",\\n      \\"Region\\": \\"Alipay\\",\\n      \\"InstanceId\\": \\"abcdEFGH1234\\",\\n      \\"ResourceId\\": \\"com.alipay.drmResource\\",\\n      \\"Id\\": 1,\\n      \\"Desc\\": \\"活动开关\\",\\n      \\"Attributes\\": [\\n        {\\n          \\"InstanceId\\": \\"abcdEFGH1234\\",\\n          \\"AttributeName\\": \\"switch\\",\\n          \\"Id\\": 1,\\n          \\"Desc\\": \\"活动开关\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<TotalCount>2</TotalCount>\\n<RequestId>2BFB4C50-A7EE-4803-A53D-32036246F53F</RequestId>\\n<PageNum>1</PageNum>\\n<PageSize>10</PageSize>\\n<Resources>\\n    <Desc>这是描述</Desc>\\n    <InstanceId>AWHNEX3GFLJA</InstanceId>\\n    <ResourceId>com.alipay.test.resource1</ResourceId>\\n    <Region>Alipay</Region>\\n    <Id>41</Id>\\n    <AppName>someAppName1</AppName>\\n</Resources>\\n<Resources>\\n    <Desc>这是描述</Desc>\\n    <InstanceId>AWHNEX3GFLJA</InstanceId>\\n    <ResourceId>com.alipay.test.resource2</ResourceId>\\n    <Region>Alipay</Region>\\n    <Id>44</Id>\\n    <AppName>someAppName2</AppName>\\n</Resources>\\n<ResultCode>OK</ResultCode>","errorExample":""}]',
      'title' => '查询资源元信息',
      'summary' => '根据应用名或者资源 ID 模糊查询对应的资源元信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GrayPushMsConfigData' => 
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
          'name' => 'AttributeId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '属性自增长 ID，可以通过查询属性接口获取 ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'Data',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '属性推送值',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'hello world',
          ),
        ),
        2 => 
        array (
          'name' => 'Hosts',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '灰度推送的机器列表，多个 IP 之间英文逗号隔开',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '127.0.0.1,127.0.0.2',
          ),
        ),
        3 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '系统字段：环境实例 ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'abcdEFGH1234',
          ),
        ),
        4 => 
        array (
          'name' => 'Operator',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '操作人',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'wang.li',
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
              'ResultMessage' => 
              array (
                'description' => '结果描述',
                'type' => 'string',
                'example' => 'OK',
              ),
              'ResultCode' => 
              array (
                'description' => '结果码',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '861E6630-AEC0-4B2D-B214-6CB5E44B7F04',
              ),
              'PushResult' => 
              array (
                'description' => '推送结果列表',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Success' => 
                    array (
                      'description' => '是否推送成功',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'Host' => 
                    array (
                      'description' => '推送目标 host',
                      'type' => 'string',
                      'example' => '127.0.0.1',
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
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"ResultMessage\\": \\"OK\\",\\n  \\"ResultCode\\": \\"OK\\",\\n  \\"RequestId\\": \\"861E6630-AEC0-4B2D-B214-6CB5E44B7F04\\",\\n  \\"PushResult\\": [\\n    {\\n      \\"Success\\": true,\\n      \\"Host\\": \\"127.0.0.1\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '灰度推送属性值',
      'summary' => '按 IP 灰度推送属性值。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' 按 IP 灰度推送属性值填写的 IP 值需为正常能访问到的 IP 才会推送成功。',
    ),
    'PushMsConfigData' => 
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
          'name' => 'AttributeId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '属性自增长 ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'Cells',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需要发布的单元列表，英文逗号隔开，为空表示推送到所有单元',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'Cell1,Cell2',
          ),
        ),
        2 => 
        array (
          'name' => 'Data',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '推送的属性值',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '12',
          ),
        ),
        3 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '系统字段：环境实例 ID
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'abcdEFGH1234',
          ),
        ),
        4 => 
        array (
          'name' => 'Operator',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '操作人',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'wang.li',
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
              'ResultMessage' => 
              array (
                'description' => '结果描述',
                'type' => 'string',
                'example' => 'OK',
              ),
              'ResultCode' => 
              array (
                'description' => '结果码',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '861E6630-AEC0-4B2D-B214-6CB5E44B7F04',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"ResultMessage\\": \\"OK\\",\\n  \\"ResultCode\\": \\"OK\\",\\n  \\"RequestId\\": \\"861E6630-AEC0-4B2D-B214-6CB5E44B7F04\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>41426381-937E-4486-B534-D8EEDB3D21DC</RequestId>\\n<ResultCode>OK</ResultCode>","errorExample":""}]',
      'title' => '核心推送属性值',
      'summary' => '推送后所有订阅对应属性的客户端都会在一秒内更新内存值，并回调属性对应的 setter 方法。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateMqSofamqGroup' => 
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
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'GroupId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '创建的消息端 Group ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'test_group_id',
          ),
        ),
        1 => 
        array (
          'name' => 'GroupType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '分组类型',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'tcp',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需创建的 Group ID 所对应的实例 ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'SOFAMQ_INSTANCE_000001',
          ),
        ),
        3 => 
        array (
          'name' => 'Remark',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'Group ID 描述信息',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
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
            'type' => 'object',
            'properties' => 
            array (
              'ResultMessage' => 
              array (
                'description' => '结果描述',
                'type' => 'string',
                'example' => 'OK',
              ),
              'ResultCode' => 
              array (
                'description' => '结果码',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '861E6630-AEC0-4B2D-B214-6CB5E44B7F04',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"ResultMessage\\": \\"OK\\",\\n  \\"ResultCode\\": \\"OK\\",\\n  \\"RequestId\\": \\"861E6630-AEC0-4B2D-B214-6CB5E44B7F04\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>861E6630-AEC0-4B2D-B214-6CB5E44B7F04</RequestId>\\n<ResultMessage>OK</ResultMessage>\\n<ResultCode>OK</ResultCode>","errorExample":""}]',
      'title' => 'CreateMqSofamqGroup',
      'summary' => '创建 Group ID。创建的 Group ID 用于发布和订阅消息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteMqSofamqGroup' => 
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
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'GroupId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需要删除的消息消费集群的 Group ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'test_group_id',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需删除的 Group ID 对应的实例 ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'SOFAMQ_INSTANCE_000001',
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
              'ResultMessage' => 
              array (
                'description' => '结果描述',
                'type' => 'string',
                'example' => 'OK',
              ),
              'ResultCode' => 
              array (
                'description' => '结果码',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '861E6630-AEC0-4B2D-B214-6CB5E44B7F04',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"ResultMessage\\": \\"OK\\",\\n  \\"ResultCode\\": \\"OK\\",\\n  \\"RequestId\\": \\"861E6630-AEC0-4B2D-B214-6CB5E44B7F04\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>861E6630-AEC0-4B2D-B214-6CB5E44B7F04</RequestId>\\n<ResultMessage>OK</ResultMessage>\\n<ResultCode>OK</ResultCode>","errorExample":""}]',
      'title' => '删除 Group',
      'summary' => '删除指定的 Group。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteMqSofamqTopic' => 
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
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需删除的 Topic 所对应的实例 ID。针对有独立命名空间的实例，该参数为必填。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '000001',
          ),
        ),
        1 => 
        array (
          'name' => 'Topic',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '指定删除的 Topic',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
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
            'type' => 'object',
            'properties' => 
            array (
              'ResultMessage' => 
              array (
                'description' => '结果描述',
                'type' => 'string',
                'example' => 'OK',
              ),
              'ResultCode' => 
              array (
                'description' => '结果码',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '861E6630-AEC0-4B2D-B214-6CB5E44B7F04',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"ResultMessage\\": \\"OK\\",\\n  \\"ResultCode\\": \\"OK\\",\\n  \\"RequestId\\": \\"861E6630-AEC0-4B2D-B214-6CB5E44B7F04\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>861E6630-AEC0-4B2D-B214-6CB5E44B7F04</RequestId>\\n<ResultMessage>OK</ResultMessage>\\n<ResultCode>OK</ResultCode>","errorExample":""}]',
      'title' => '删除指定的 Topic',
      'summary' => '删除后，该 Topic 下所有的订阅关系会被清理。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteMqSofamqTrace' => 
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
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '实例 ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'MQ_INST_111111111111_DOxxxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'QueryId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '待删除的消息轨迹查询任务 ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '272967562652883649157096685****',
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
              'ResultMessage' => 
              array (
                'description' => '结果描述',
                'type' => 'string',
                'example' => 'OK',
              ),
              'ResultCode' => 
              array (
                'description' => '结果码',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '861E6630-AEC0-4B2D-B214-6CB5E44B7F04',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"ResultMessage\\": \\"OK\\",\\n  \\"ResultCode\\": \\"OK\\",\\n  \\"RequestId\\": \\"861E6630-AEC0-4B2D-B214-6CB5E44B7F04\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>861E6630-AEC0-4B2D-B214-6CB5E44B7F04</RequestId>\\n<ResultMessage>OK</ResultMessage>\\n<ResultCode>OK</ResultCode>","errorExample":""}]',
      'title' => '删除消息轨迹查询任务',
      'summary' => '删除指定的消息轨迹查询任务。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteMqSofamqWarn' => 
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
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '实例 ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'MQ_INST_111111111111_DOxxxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'WarnId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '待删除的报警规则 ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '10000001',
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
              'ResultMessage' => 
              array (
                'description' => '结果描述',
                'type' => 'string',
                'example' => 'OK',
              ),
              'ResultCode' => 
              array (
                'description' => '结果码',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '861E6630-AEC0-4B2D-B214-6CB5E44B7F04',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"ResultMessage\\": \\"OK\\",\\n  \\"ResultCode\\": \\"OK\\",\\n  \\"RequestId\\": \\"861E6630-AEC0-4B2D-B214-6CB5E44B7F04\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>861E6630-AEC0-4B2D-B214-6CB5E44B7F04</RequestId>\\n<ResultMessage>OK</ResultMessage>\\n<ResultCode>OK</ResultCode>","errorExample":""}]',
      'title' => '删除指定的报警规则',
      'summary' => '通过报警规则 ID。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UpdateMqSofamqGroup' => 
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
          'name' => 'GroupId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需配置的 Group ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'test_group_id',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需配置的 Group ID 所对应的实例 ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'SOFAMQ_INSTANCE_000001',
          ),
        ),
        2 => 
        array (
          'name' => 'ReadEnable',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '设置读消息开关',
            'type' => 'boolean',
            'required' => true,
            'docRequired' => true,
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
              'ResultMessage' => 
              array (
                'description' => '结果描述',
                'type' => 'string',
                'example' => 'OK',
              ),
              'ResultCode' => 
              array (
                'description' => '结果码',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '861E6630-AEC0-4B2D-B214-6CB5E44B7F04',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"ResultMessage\\": \\"OK\\",\\n  \\"ResultCode\\": \\"OK\\",\\n  \\"RequestId\\": \\"861E6630-AEC0-4B2D-B214-6CB5E44B7F04\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>861E6630-AEC0-4B2D-B214-6CB5E44B7F04</RequestId>\\n<ResultMessage>OK</ResultMessage>\\n<ResultCode>OK</ResultCode>","errorExample":""}]',
      'title' => '更新指定 Group 信息',
      'summary' => '修改或更新指定的 Group 描述信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UpdateMqSofamqGroupRemark' => 
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
          'name' => 'GroupId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需配置更新的 Group ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'test_group_id',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '实例 ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'MQ_INST_111111111111_DOxxxxxx',
          ),
        ),
        2 => 
        array (
          'name' => 'Remark',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '描述信息',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
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
            'type' => 'object',
            'properties' => 
            array (
              'ResultMessage' => 
              array (
                'description' => '结果描述',
                'type' => 'string',
                'example' => 'OK',
              ),
              'ResultCode' => 
              array (
                'description' => '结果码',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '861E6630-AEC0-4B2D-B214-6CB5E44B7F04',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"ResultMessage\\": \\"OK\\",\\n  \\"ResultCode\\": \\"OK\\",\\n  \\"RequestId\\": \\"861E6630-AEC0-4B2D-B214-6CB5E44B7F04\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>861E6630-AEC0-4B2D-B214-6CB5E44B7F04</RequestId>\\n<ResultMessage>OK</ResultMessage>\\n<ResultCode>OK</ResultCode>","errorExample":""}]',
      'title' => '更新 Group 的信息',
      'summary' => '修改或更新 Group 的描述信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UpdateMqSofamqWarn' => 
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
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AlertTime',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '报警时间范围',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '00:00-24:00',
          ),
        ),
        1 => 
        array (
          'name' => 'Contacts',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '报警通知人信息',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '[["DingTalk", "机器人令牌", "组名"], ["DingTalk", "机器人令牌2", "组名2"]]',
          ),
        ),
        2 => 
        array (
          'name' => 'DelayTime',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '延迟多少秒报警',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'docRequired' => true,
            'example' => '10',
          ),
        ),
        3 => 
        array (
          'name' => 'Frequency',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '报警频率，单位分钟',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'docRequired' => true,
            'example' => '10',
          ),
        ),
        4 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '实例 ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'MQ_INST_111111111111_DOxxxxxx	',
          ),
        ),
        5 => 
        array (
          'name' => 'Threshold',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '阈值',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'docRequired' => true,
            'example' => '3000',
          ),
        ),
        6 => 
        array (
          'name' => 'WarnId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '指定修改的报警规则',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '10000001 ',
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
              'ResultMessage' => 
              array (
                'description' => '结果描述',
                'type' => 'string',
                'example' => 'OK',
              ),
              'ResultCode' => 
              array (
                'description' => '结果码',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '861E6630-AEC0-4B2D-B214-6CB5E44B7F04',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"ResultMessage\\": \\"OK\\",\\n  \\"ResultCode\\": \\"OK\\",\\n  \\"RequestId\\": \\"861E6630-AEC0-4B2D-B214-6CB5E44B7F04\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>861E6630-AEC0-4B2D-B214-6CB5E44B7F04</RequestId>\\r\\n<ResultMessage>OK</ResultMessage>\\r\\n<ResultCode>OK</ResultCode>","errorExample":""}]',
      'title' => 'UpdateMqSofamqWarn',
      'summary' => '更新指定报警规则的配置信息。',
    ),
    'DisableMqSofamqWarn' => 
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
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '实例 ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'MQ_INST_111111111111_DOxxxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'WarnId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '待关闭的报警规则 ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '10000001',
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
              'ResultMessage' => 
              array (
                'description' => '结果描述',
                'type' => 'string',
                'example' => 'OK',
              ),
              'ResultCode' => 
              array (
                'description' => '结果码',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '861E6630-AEC0-4B2D-B214-6CB5E44B7F04',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"ResultMessage\\": \\"OK\\",\\n  \\"ResultCode\\": \\"OK\\",\\n  \\"RequestId\\": \\"861E6630-AEC0-4B2D-B214-6CB5E44B7F04\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>861E6630-AEC0-4B2D-B214-6CB5E44B7F04</RequestId>\\n<ResultMessage>OK</ResultMessage>\\n<ResultCode>OK</ResultCode>","errorExample":""}]',
      'title' => '禁用报警规则',
      'summary' => '通过传入报警规则 ID，禁用指定的报警规则。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'EnableMqSofamqWarn' => 
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
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '实例 ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'MQ_INST_111111111111_DOxxxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'WarnId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '待开启的报警规则 ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '10001',
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
              'ResultMessage' => 
              array (
                'description' => '结果描述',
                'type' => 'string',
                'example' => 'OK',
              ),
              'ResultCode' => 
              array (
                'description' => '结果码',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '861E6630-AEC0-4B2D-B214-6CB5E44B7F04',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"ResultMessage\\": \\"OK\\",\\n  \\"ResultCode\\": \\"OK\\",\\n  \\"RequestId\\": \\"861E6630-AEC0-4B2D-B214-6CB5E44B7F04\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>861E6630-AEC0-4B2D-B214-6CB5E44B7F04</RequestId>\\n<ResultMessage>OK</ResultMessage>\\n<ResultCode>OK</ResultCode>","errorExample":""}]',
      'title' => '启用报警规则',
      'summary' => '通过传入报警规则 ID，启用指定的报警规则。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetMqSofamqConsumerJStack' => 
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Cell',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需要查询的单元',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'RZ00A',
          ),
        ),
        1 => 
        array (
          'name' => 'ClientId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需要查询的消费端 Client ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '10.15.232.86@1129e#e4a224f4#2fa8320f33c4#eyIwIjoienRoIn0=',
          ),
        ),
        2 => 
        array (
          'name' => 'GroupId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需要查询的消费端的 Group ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'GID_test_group_id',
          ),
        ),
        3 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需要查询的消费者对应的实例 ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'INSTANCE_ID_111',
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
              'ResultMessage' => 
              array (
                'description' => '结果描述',
                'type' => 'string',
                'example' => 'OK',
              ),
              'ResultCode' => 
              array (
                'description' => '结果码',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '861E6630-AEC0-4B2D-B214-6CB5E44B7F04',
              ),
              'Data' => 
              array (
                'description' => '消费端 Jstack 堆栈信息',
                'type' => 'object',
                'properties' => 
                array (
                  'ClientId' => 
                  array (
                    'description' => '消费端 Client ID',
                    'type' => 'string',
                    'example' => '10.15.232.86@1129e#e4a224f4#2fa8320f33c4#eyIwIjoienRoIn0=',
                  ),
                  'Jstack' => 
                  array (
                    'description' => 'Jstack 堆栈信息',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Thread' => 
                        array (
                          'description' => '线程名称',
                          'type' => 'string',
                          'example' => 'ConsumeMessageThread_0	',
                        ),
                        'TrackList' => 
                        array (
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => 'Jstack 堆栈信息字符串',
                            'type' => 'string',
                            'example' => 'java.util.concurrent.locks.LockSupport.park(LockSupport.java:175)',
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
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"ResultMessage\\": \\"OK\\",\\n  \\"ResultCode\\": \\"OK\\",\\n  \\"RequestId\\": \\"861E6630-AEC0-4B2D-B214-6CB5E44B7F04\\",\\n  \\"Data\\": {\\n    \\"ClientId\\": \\"10.15.232.86@1129e#e4a224f4#2fa8320f33c4#eyIwIjoienRoIn0=\\",\\n    \\"Jstack\\": [\\n      {\\n        \\"Thread\\": \\"ConsumeMessageThread_0\\\\t\\",\\n        \\"TrackList\\": [\\n          \\"java.util.concurrent.locks.LockSupport.park(LockSupport.java:175)\\"\\n        ]\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>861E6630-AEC0-4B2D-B214-6CB5E44B7F04</RequestId>\\n<Data>\\n    <ClientId>10.15.232.86@1129e#e4a224f4#2fa8320f33c4#eyIwIjoienRoIn0=</ClientId>\\n    <Jstack>\\n        <Thread>ConsumeMessageThread_0\\t</Thread>\\n    </Jstack>\\n    <Jstack>\\n        <TrackList>java.util.concurrent.locks.LockSupport.park(LockSupport.java:175)</TrackList>\\n    </Jstack>\\n</Data>\\n<ResultMessage>OK</ResultMessage>\\n<ResultCode>OK</ResultCode>","errorExample":""}]',
      'title' => '查询消费端堆栈信息',
      'summary' => '用于定位问题。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetMqSofamqConsumerStatus' => 
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
          'name' => 'Cell',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需要查询的单元',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'RZ01A  ',
          ),
        ),
        1 => 
        array (
          'name' => 'Detail',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否查询详细信息。取值说明如下：true：要查询详细信息；false：不查询详细信息。',
            'type' => 'boolean',
            'required' => false,
            'docRequired' => true,
            'example' => 'true',
          ),
        ),
        2 => 
        array (
          'name' => 'GroupId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需要查询的消费端 Group ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'GID_test_group_id',
          ),
        ),
        3 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需查询的 Group ID 所对应的实例 ID。针对有独立命名空间的实例，该参数为必填。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'MQ_INST_111111111111_DOxxxxxx',
          ),
        ),
        4 => 
        array (
          'name' => 'NeedJstack',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否打印 Jstack 信息',
            'type' => 'boolean',
            'required' => false,
            'docRequired' => true,
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
              'ResultMessage' => 
              array (
                'description' => '结果描述',
                'type' => 'string',
                'example' => 'OK',
              ),
              'ResultCode' => 
              array (
                'description' => '结果码',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '861E6630-AEC0-4B2D-B214-6CB5E44B7F04',
              ),
              'Data' => 
              array (
                'description' => '查询结果',
                'type' => 'object',
                'properties' => 
                array (
                  'ConsumeTps' => 
                  array (
                    'description' => '总消费 TPS',
                    'type' => 'string',
                    'example' => '0',
                  ),
                  'SubscriptionSame' => 
                  array (
                    'description' => '订阅关系是否一致',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'ConsumeModel' => 
                  array (
                    'description' => '消费模型。取值说明如下：CLUSTERING：集群消费模式；BROADCASTING：广播消费模式。',
                    'type' => 'string',
                    'example' => 'CLUSTERING',
                  ),
                  'TotalDiff' => 
                  array (
                    'description' => '集群总的消费堆积',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '197',
                  ),
                  'LastTimestamp' => 
                  array (
                    'description' => '最后更新时间',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1566883844954',
                  ),
                  'DelayTime' => 
                  array (
                    'description' => '延迟时间',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '100857',
                  ),
                  'Online' => 
                  array (
                    'description' => '是否在线',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'InstanceId' => 
                  array (
                    'description' => '实例 ID',
                    'type' => 'string',
                    'example' => 'MQ_INST_111111111111_DOxxxxxx	 ',
                  ),
                  'RebalanceOk' => 
                  array (
                    'description' => '客户端 Rebalance 是否正常。取值说明如下：true：正常；false：不正常。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'ConnectionSet' => 
                  array (
                    'description' => '该集群当前在线客户端信息',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'RemoteIp' => 
                        array (
                          'description' => '宿主机 IP 或公网 IP',
                          'type' => 'string',
                          'example' => '42.120.74.**',
                        ),
                        'ClientAddr' => 
                        array (
                          'description' => '该消费实例的地址和端口',
                          'type' => 'string',
                          'example' => '30.5.121.**',
                        ),
                        'Version' => 
                        array (
                          'description' => '消费端版本',
                          'type' => 'string',
                          'example' => 'V4_3_6_SNAPSHOT',
                        ),
                        'Language' => 
                        array (
                          'description' => '消费端语言',
                          'type' => 'string',
                          'example' => 'JAVA',
                        ),
                        'ClientId' => 
                        array (
                          'description' => '消费实例的 ID',
                          'type' => 'string',
                          'example' => '30.5.121.**@25560#-1999745829#-1737591554#458773089270275	 ',
                        ),
                      ),
                    ),
                  ),
                  'ConsumerConnectionInfoList' => 
                  array (
                    'description' => '该集群在线客户端详细信息，包含 Jstack、消费 RT 时间等信息',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Connection' => 
                        array (
                          'description' => '连接信息',
                          'type' => 'string',
                          'example' => '**',
                        ),
                        'MessageModel' => 
                        array (
                          'description' => '消费模型，取值说明如下：CLUSTERING：集群消费模式；BROADCASTING：广播消费模式。',
                          'type' => 'string',
                          'example' => 'CLUSTERING',
                        ),
                        'Version' => 
                        array (
                          'description' => ' 客户端版本号',
                          'type' => 'string',
                          'example' => 'V4_3_6',
                        ),
                        'StartTimestamp' => 
                        array (
                          'description' => '开始时间',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1570701361528',
                        ),
                        'LastTimestamp' => 
                        array (
                          'description' => '最后更新时间',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1570701368114',
                        ),
                        'ConsumeType' => 
                        array (
                          'description' => 'PUSH/PULL',
                          'type' => 'string',
                          'example' => 'PUSH',
                        ),
                        'ThreadCount' => 
                        array (
                          'description' => '消费线程数',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '20',
                        ),
                        'Language' => 
                        array (
                          'description' => '客户端语言',
                          'type' => 'string',
                          'example' => 'JAVA',
                        ),
                        'ClientId' => 
                        array (
                          'description' => '消费实例的 ID',
                          'type' => 'string',
                          'example' => '30.5.**.**@25560#-1999745829#-1737591554#458773089270275',
                        ),
                        'Jstack' => 
                        array (
                          'description' => 'Jstack 堆栈信息',
                          'type' => 'array',
                          'items' => 
                          array (
                            'type' => 'object',
                            'properties' => 
                            array (
                              'Thread' => 
                              array (
                                'description' => '线程名称',
                                'type' => 'string',
                                'example' => 'ConsumeMessageThread_0',
                              ),
                              'TrackList' => 
                              array (
                                'type' => 'array',
                                'items' => 
                                array (
                                  'description' => 'Jstack 堆栈信息字符串',
                                  'type' => 'string',
                                  'example' => 'java.util.concurrent.locks.LockSupport.park(LockSupport.java:175)',
                                ),
                              ),
                            ),
                          ),
                        ),
                        'RunningDataList' => 
                        array (
                          'description' => '实时状态统计',
                          'type' => 'array',
                          'items' => 
                          array (
                            'type' => 'object',
                            'properties' => 
                            array (
                              'GroupId' => 
                              array (
                                'description' => '订阅方的 Group ID',
                                'type' => 'string',
                                'example' => '000',
                              ),
                              'Diff' => 
                              array (
                                'description' => '堆积量',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '100',
                              ),
                              'Rt' => 
                              array (
                                'description' => '消费 RT 时间，单位 ms',
                                'type' => 'string',
                                'example' => '0.1',
                              ),
                              'Topic' => 
                              array (
                                'description' => '订阅的 Topic 名称',
                                'type' => 'string',
                                'example' => 'test-mq_topic',
                              ),
                              'FailedCountPerHour' => 
                              array (
                                'description' => '每小时内消费失败的消息数统计',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '0',
                              ),
                              'OkTps' => 
                              array (
                                'description' => '消费消息成功的 TPS 统计',
                                'type' => 'string',
                                'example' => '0.1',
                              ),
                              'FailedTps' => 
                              array (
                                'description' => '消费消息失败的 TPS 统计',
                                'type' => 'string',
                                'example' => '0.1',
                              ),
                            ),
                          ),
                        ),
                        'SubscriptionSet' => 
                        array (
                          'description' => '订阅关系集合',
                          'type' => 'array',
                          'items' => 
                          array (
                            'type' => 'object',
                            'properties' => 
                            array (
                              'SubString' => 
                              array (
                                'description' => '订阅该 Topic 的子类别 Tag 表达式',
                                'type' => 'string',
                                'example' => '*',
                              ),
                              'SubVersion' => 
                              array (
                                'description' => ' 订阅关系版本号，为自增 Long 型',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1570701364301',
                              ),
                              'Topic' => 
                              array (
                                'description' => '订阅的 Topic 名称',
                                'type' => 'string',
                                'example' => 'test-mq_topic',
                              ),
                              'TagsSet' => 
                              array (
                                'type' => 'array',
                                'items' => 
                                array (
                                  'description' => '订阅的 Tag 集合',
                                  'type' => 'string',
                                  'example' => '*',
                                ),
                              ),
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  'DetailInTopicList' => 
                  array (
                    'description' => '各个 Topic 的消费情况',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'TotalDiff' => 
                        array (
                          'description' => '该 Topic 消费总堆积数',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '0',
                        ),
                        'DelayTime' => 
                        array (
                          'description' => '延迟时间',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '0',
                        ),
                        'LastTimestamp' => 
                        array (
                          'description' => '最后更新时间',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1570701259403',
                        ),
                        'Topic' => 
                        array (
                          'description' => 'Topic 名称',
                          'type' => 'string',
                          'example' => 'test-mq_topic',
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
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"ResultMessage\\": \\"OK\\",\\n  \\"ResultCode\\": \\"OK\\",\\n  \\"RequestId\\": \\"861E6630-AEC0-4B2D-B214-6CB5E44B7F04\\",\\n  \\"Data\\": {\\n    \\"ConsumeTps\\": \\"0\\",\\n    \\"SubscriptionSame\\": true,\\n    \\"ConsumeModel\\": \\"CLUSTERING\\",\\n    \\"TotalDiff\\": 197,\\n    \\"LastTimestamp\\": 1566883844954,\\n    \\"DelayTime\\": 100857,\\n    \\"Online\\": true,\\n    \\"InstanceId\\": \\"MQ_INST_111111111111_DOxxxxxx\\\\t \\",\\n    \\"RebalanceOk\\": true,\\n    \\"ConnectionSet\\": [\\n      {\\n        \\"RemoteIp\\": \\"42.120.74.**\\",\\n        \\"ClientAddr\\": \\"30.5.121.**\\",\\n        \\"Version\\": \\"V4_3_6_SNAPSHOT\\",\\n        \\"Language\\": \\"JAVA\\",\\n        \\"ClientId\\": \\"30.5.121.**@25560#-1999745829#-1737591554#458773089270275\\\\t \\"\\n      }\\n    ],\\n    \\"ConsumerConnectionInfoList\\": [\\n      {\\n        \\"Connection\\": \\"**\\",\\n        \\"MessageModel\\": \\"CLUSTERING\\",\\n        \\"Version\\": \\"V4_3_6\\",\\n        \\"StartTimestamp\\": 1570701361528,\\n        \\"LastTimestamp\\": 1570701368114,\\n        \\"ConsumeType\\": \\"PUSH\\",\\n        \\"ThreadCount\\": 20,\\n        \\"Language\\": \\"JAVA\\",\\n        \\"ClientId\\": \\"30.5.**.**@25560#-1999745829#-1737591554#458773089270275\\",\\n        \\"Jstack\\": [\\n          {\\n            \\"Thread\\": \\"ConsumeMessageThread_0\\",\\n            \\"TrackList\\": [\\n              \\"java.util.concurrent.locks.LockSupport.park(LockSupport.java:175)\\"\\n            ]\\n          }\\n        ],\\n        \\"RunningDataList\\": [\\n          {\\n            \\"GroupId\\": \\"000\\",\\n            \\"Diff\\": 100,\\n            \\"Rt\\": \\"0.1\\",\\n            \\"Topic\\": \\"test-mq_topic\\",\\n            \\"FailedCountPerHour\\": 0,\\n            \\"OkTps\\": \\"0.1\\",\\n            \\"FailedTps\\": \\"0.1\\"\\n          }\\n        ],\\n        \\"SubscriptionSet\\": [\\n          {\\n            \\"SubString\\": \\"*\\",\\n            \\"SubVersion\\": 1570701364301,\\n            \\"Topic\\": \\"test-mq_topic\\",\\n            \\"TagsSet\\": [\\n              \\"*\\"\\n            ]\\n          }\\n        ]\\n      }\\n    ],\\n    \\"DetailInTopicList\\": [\\n      {\\n        \\"TotalDiff\\": 0,\\n        \\"DelayTime\\": 0,\\n        \\"LastTimestamp\\": 1570701259403,\\n        \\"Topic\\": \\"test-mq_topic\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>861E6630-AEC0-4B2D-B214-6CB5E44B7F04</RequestId>\\n<Data>\\n    <ConsumerConnectionInfoList>\\n        <ClientAddr>30.5.121.**</ClientAddr>\\n        <Language>JAVA</Language>\\n        <RemoteIp>42.120.74.**</RemoteIp>\\n        <Version>V4_3_6_SNAPSHOT</Version>\\n        <ClientId>30.5.121.**@25560#-1999745829#-1737591554#458773089270275\\t </ClientId>\\n    </ConsumerConnectionInfoList>\\n    <ConsumerConnectionInfoList>\\n        <MessageModel>CLUSTERING</MessageModel>\\n        <ThreadCount>20</ThreadCount>\\n        <ConsumeType>PUSH</ConsumeType>\\n        <Language>JAVA</Language>\\n        <LastTimestamp>1570701368114</LastTimestamp>\\n        <StartTimestamp>1570701361528</StartTimestamp>\\n        <Version>V4_3_6</Version>\\n        <Connection>**</Connection>\\n        <ClientId>30.5.**.**@25560#-1999745829#-1737591554#458773089270275</ClientId>\\n    </ConsumerConnectionInfoList>\\n    <ConsumerConnectionInfoList>\\n        <RunningDataList>\\n            <Thread>ConsumeMessageThread_0</Thread>\\n        </RunningDataList>\\n        <RunningDataList>\\n            <TrackList>java.util.concurrent.locks.LockSupport.park(LockSupport.java:175)</TrackList>\\n        </RunningDataList>\\n        <RunningDataList>\\n            <OkTps>0.1</OkTps>\\n            <Rt>0.1</Rt>\\n            <Diff>100</Diff>\\n            <FailedTps>0.1</FailedTps>\\n            <Topic>test-mq_topic</Topic>\\n            <FailedCountPerHour>0</FailedCountPerHour>\\n            <GroupId>000</GroupId>\\n        </RunningDataList>\\n        <RunningDataList>\\n            <SubString>*</SubString>\\n            <Topic>test-mq_topic</Topic>\\n            <SubVersion>1570701364301</SubVersion>\\n        </RunningDataList>\\n        <RunningDataList>\\n            <TagsSet>*</TagsSet>\\n        </RunningDataList>\\n        <SubscriptionSet>\\n            <Thread>ConsumeMessageThread_0</Thread>\\n        </SubscriptionSet>\\n        <SubscriptionSet>\\n            <TrackList>java.util.concurrent.locks.LockSupport.park(LockSupport.java:175)</TrackList>\\n        </SubscriptionSet>\\n        <SubscriptionSet>\\n            <OkTps>0.1</OkTps>\\n            <Rt>0.1</Rt>\\n            <Diff>100</Diff>\\n            <FailedTps>0.1</FailedTps>\\n            <Topic>test-mq_topic</Topic>\\n            <FailedCountPerHour>0</FailedCountPerHour>\\n            <GroupId>000</GroupId>\\n        </SubscriptionSet>\\n        <SubscriptionSet>\\n            <SubString>*</SubString>\\n            <Topic>test-mq_topic</Topic>\\n            <SubVersion>1570701364301</SubVersion>\\n        </SubscriptionSet>\\n        <SubscriptionSet>\\n            <TagsSet>*</TagsSet>\\n        </SubscriptionSet>\\n        <Jstack>\\n            <Thread>ConsumeMessageThread_0</Thread>\\n        </Jstack>\\n        <Jstack>\\n            <TrackList>java.util.concurrent.locks.LockSupport.park(LockSupport.java:175)</TrackList>\\n        </Jstack>\\n        <Jstack>\\n            <OkTps>0.1</OkTps>\\n            <Rt>0.1</Rt>\\n            <Diff>100</Diff>\\n            <FailedTps>0.1</FailedTps>\\n            <Topic>test-mq_topic</Topic>\\n            <FailedCountPerHour>0</FailedCountPerHour>\\n            <GroupId>000</GroupId>\\n        </Jstack>\\n        <Jstack>\\n            <SubString>*</SubString>\\n            <Topic>test-mq_topic</Topic>\\n            <SubVersion>1570701364301</SubVersion>\\n        </Jstack>\\n        <Jstack>\\n            <TagsSet>*</TagsSet>\\n        </Jstack>\\n    </ConsumerConnectionInfoList>\\n    <ConsumerConnectionInfoList>\\n        <LastTimestamp>1570701259403</LastTimestamp>\\n        <TotalDiff>0</TotalDiff>\\n        <DelayTime>0</DelayTime>\\n        <Topic>test-mq_topic</Topic>\\n    </ConsumerConnectionInfoList>\\n    <ConsumeModel>CLUSTERING</ConsumeModel>\\n    <ConsumeTps>0</ConsumeTps>\\n    <LastTimestamp>1566883844954</LastTimestamp>\\n    <InstanceId>MQ_INST_111111111111_DOxxxxxx\\t </InstanceId>\\n    <RebalanceOk>true</RebalanceOk>\\n    <SubscriptionSame>true</SubscriptionSame>\\n    <TotalDiff>197</TotalDiff>\\n    <DelayTime>100857</DelayTime>\\n    <Online>true</Online>\\n    <ConnectionSet>\\n        <ClientAddr>30.5.121.**</ClientAddr>\\n        <Language>JAVA</Language>\\n        <RemoteIp>42.120.74.**</RemoteIp>\\n        <Version>V4_3_6_SNAPSHOT</Version>\\n        <ClientId>30.5.121.**@25560#-1999745829#-1737591554#458773089270275\\t </ClientId>\\n    </ConnectionSet>\\n    <ConnectionSet>\\n        <MessageModel>CLUSTERING</MessageModel>\\n        <ThreadCount>20</ThreadCount>\\n        <ConsumeType>PUSH</ConsumeType>\\n        <Language>JAVA</Language>\\n        <LastTimestamp>1570701368114</LastTimestamp>\\n        <StartTimestamp>1570701361528</StartTimestamp>\\n        <Version>V4_3_6</Version>\\n        <Connection>**</Connection>\\n        <ClientId>30.5.**.**@25560#-1999745829#-1737591554#458773089270275</ClientId>\\n    </ConnectionSet>\\n    <ConnectionSet>\\n        <RunningDataList>\\n            <Thread>ConsumeMessageThread_0</Thread>\\n        </RunningDataList>\\n        <RunningDataList>\\n            <TrackList>java.util.concurrent.locks.LockSupport.park(LockSupport.java:175)</TrackList>\\n        </RunningDataList>\\n        <RunningDataList>\\n            <OkTps>0.1</OkTps>\\n            <Rt>0.1</Rt>\\n            <Diff>100</Diff>\\n            <FailedTps>0.1</FailedTps>\\n            <Topic>test-mq_topic</Topic>\\n            <FailedCountPerHour>0</FailedCountPerHour>\\n            <GroupId>000</GroupId>\\n        </RunningDataList>\\n        <RunningDataList>\\n            <SubString>*</SubString>\\n            <Topic>test-mq_topic</Topic>\\n            <SubVersion>1570701364301</SubVersion>\\n        </RunningDataList>\\n        <RunningDataList>\\n            <TagsSet>*</TagsSet>\\n        </RunningDataList>\\n        <SubscriptionSet>\\n            <Thread>ConsumeMessageThread_0</Thread>\\n        </SubscriptionSet>\\n        <SubscriptionSet>\\n            <TrackList>java.util.concurrent.locks.LockSupport.park(LockSupport.java:175)</TrackList>\\n        </SubscriptionSet>\\n        <SubscriptionSet>\\n            <OkTps>0.1</OkTps>\\n            <Rt>0.1</Rt>\\n            <Diff>100</Diff>\\n            <FailedTps>0.1</FailedTps>\\n            <Topic>test-mq_topic</Topic>\\n            <FailedCountPerHour>0</FailedCountPerHour>\\n            <GroupId>000</GroupId>\\n        </SubscriptionSet>\\n        <SubscriptionSet>\\n            <SubString>*</SubString>\\n            <Topic>test-mq_topic</Topic>\\n            <SubVersion>1570701364301</SubVersion>\\n        </SubscriptionSet>\\n        <SubscriptionSet>\\n            <TagsSet>*</TagsSet>\\n        </SubscriptionSet>\\n        <Jstack>\\n            <Thread>ConsumeMessageThread_0</Thread>\\n        </Jstack>\\n        <Jstack>\\n            <TrackList>java.util.concurrent.locks.LockSupport.park(LockSupport.java:175)</TrackList>\\n        </Jstack>\\n        <Jstack>\\n            <OkTps>0.1</OkTps>\\n            <Rt>0.1</Rt>\\n            <Diff>100</Diff>\\n            <FailedTps>0.1</FailedTps>\\n            <Topic>test-mq_topic</Topic>\\n            <FailedCountPerHour>0</FailedCountPerHour>\\n            <GroupId>000</GroupId>\\n        </Jstack>\\n        <Jstack>\\n            <SubString>*</SubString>\\n            <Topic>test-mq_topic</Topic>\\n            <SubVersion>1570701364301</SubVersion>\\n        </Jstack>\\n        <Jstack>\\n            <TagsSet>*</TagsSet>\\n        </Jstack>\\n    </ConnectionSet>\\n    <ConnectionSet>\\n        <LastTimestamp>1570701259403</LastTimestamp>\\n        <TotalDiff>0</TotalDiff>\\n        <DelayTime>0</DelayTime>\\n        <Topic>test-mq_topic</Topic>\\n    </ConnectionSet>\\n    <DetailInTopicList>\\n        <ClientAddr>30.5.121.**</ClientAddr>\\n        <Language>JAVA</Language>\\n        <RemoteIp>42.120.74.**</RemoteIp>\\n        <Version>V4_3_6_SNAPSHOT</Version>\\n        <ClientId>30.5.121.**@25560#-1999745829#-1737591554#458773089270275\\t </ClientId>\\n    </DetailInTopicList>\\n    <DetailInTopicList>\\n        <MessageModel>CLUSTERING</MessageModel>\\n        <ThreadCount>20</ThreadCount>\\n        <ConsumeType>PUSH</ConsumeType>\\n        <Language>JAVA</Language>\\n        <LastTimestamp>1570701368114</LastTimestamp>\\n        <StartTimestamp>1570701361528</StartTimestamp>\\n        <Version>V4_3_6</Version>\\n        <Connection>**</Connection>\\n        <ClientId>30.5.**.**@25560#-1999745829#-1737591554#458773089270275</ClientId>\\n    </DetailInTopicList>\\n    <DetailInTopicList>\\n        <RunningDataList>\\n            <Thread>ConsumeMessageThread_0</Thread>\\n        </RunningDataList>\\n        <RunningDataList>\\n            <TrackList>java.util.concurrent.locks.LockSupport.park(LockSupport.java:175)</TrackList>\\n        </RunningDataList>\\n        <RunningDataList>\\n            <OkTps>0.1</OkTps>\\n            <Rt>0.1</Rt>\\n            <Diff>100</Diff>\\n            <FailedTps>0.1</FailedTps>\\n            <Topic>test-mq_topic</Topic>\\n            <FailedCountPerHour>0</FailedCountPerHour>\\n            <GroupId>000</GroupId>\\n        </RunningDataList>\\n        <RunningDataList>\\n            <SubString>*</SubString>\\n            <Topic>test-mq_topic</Topic>\\n            <SubVersion>1570701364301</SubVersion>\\n        </RunningDataList>\\n        <RunningDataList>\\n            <TagsSet>*</TagsSet>\\n        </RunningDataList>\\n        <SubscriptionSet>\\n            <Thread>ConsumeMessageThread_0</Thread>\\n        </SubscriptionSet>\\n        <SubscriptionSet>\\n            <TrackList>java.util.concurrent.locks.LockSupport.park(LockSupport.java:175)</TrackList>\\n        </SubscriptionSet>\\n        <SubscriptionSet>\\n            <OkTps>0.1</OkTps>\\n            <Rt>0.1</Rt>\\n            <Diff>100</Diff>\\n            <FailedTps>0.1</FailedTps>\\n            <Topic>test-mq_topic</Topic>\\n            <FailedCountPerHour>0</FailedCountPerHour>\\n            <GroupId>000</GroupId>\\n        </SubscriptionSet>\\n        <SubscriptionSet>\\n            <SubString>*</SubString>\\n            <Topic>test-mq_topic</Topic>\\n            <SubVersion>1570701364301</SubVersion>\\n        </SubscriptionSet>\\n        <SubscriptionSet>\\n            <TagsSet>*</TagsSet>\\n        </SubscriptionSet>\\n        <Jstack>\\n            <Thread>ConsumeMessageThread_0</Thread>\\n        </Jstack>\\n        <Jstack>\\n            <TrackList>java.util.concurrent.locks.LockSupport.park(LockSupport.java:175)</TrackList>\\n        </Jstack>\\n        <Jstack>\\n            <OkTps>0.1</OkTps>\\n            <Rt>0.1</Rt>\\n            <Diff>100</Diff>\\n            <FailedTps>0.1</FailedTps>\\n            <Topic>test-mq_topic</Topic>\\n            <FailedCountPerHour>0</FailedCountPerHour>\\n            <GroupId>000</GroupId>\\n        </Jstack>\\n        <Jstack>\\n            <SubString>*</SubString>\\n            <Topic>test-mq_topic</Topic>\\n            <SubVersion>1570701364301</SubVersion>\\n        </Jstack>\\n        <Jstack>\\n            <TagsSet>*</TagsSet>\\n        </Jstack>\\n    </DetailInTopicList>\\n    <DetailInTopicList>\\n        <LastTimestamp>1570701259403</LastTimestamp>\\n        <TotalDiff>0</TotalDiff>\\n        <DelayTime>0</DelayTime>\\n        <Topic>test-mq_topic</Topic>\\n    </DetailInTopicList>\\n</Data>\\n<ResultMessage>OK</ResultMessage>\\n<ResultCode>OK</ResultCode>","errorExample":""}]',
      'title' => '查询消费端详细状态',
      'summary' => '包含订阅关系检查、消费 TPS 统计、负载均衡状态、消费端连接等。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetMqSofamqDLQMessageById' => 
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Cell',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需要查询的单元',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'RZ01A',
          ),
        ),
        1 => 
        array (
          'name' => 'GroupId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需查询的消费端 Group ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'GID_test_group_id	 ',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需查询消息所对应的实例 ID。针对有独立命名空间的实例，该参数为必填。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'MQ_INST_111111111111_DOxxxxxx',
          ),
        ),
        3 => 
        array (
          'name' => 'MsgId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需查询的消息的 ID，即 Message ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '0BC16699165C03B925DB8A404E2D****',
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
              'ResultMessage' => 
              array (
                'description' => '结果描述',
                'type' => 'string',
                'example' => 'OK',
              ),
              'ResultCode' => 
              array (
                'description' => '结果码',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '861E6630-AEC0-4B2D-B214-6CB5E44B7F04',
              ),
              'Data' => 
              array (
                'description' => '查询结果',
                'type' => 'object',
                'properties' => 
                array (
                  'StoreSize' => 
                  array (
                    'description' => '消息大小',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '407',
                  ),
                  'ReconsumeTimes' => 
                  array (
                    'description' => ' 消息重试消费的次数',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1',
                  ),
                  'StoreTimestamp' => 
                  array (
                    'description' => '被服务端存储的时间戳',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1570761026708',
                  ),
                  'Topic' => 
                  array (
                    'description' => ' 消息的 Topic',
                    'type' => 'string',
                    'example' => 'test-mq_topic',
                  ),
                  'StoreHost' => 
                  array (
                    'description' => '存储该消息的服务器实例',
                    'type' => 'string',
                    'example' => '11.220.***.***:10911',
                  ),
                  'BornTimestamp' => 
                  array (
                    'description' => ' 生成时间戳',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1570761026630',
                  ),
                  'InstanceId' => 
                  array (
                    'description' => ' 实例 ID',
                    'type' => 'string',
                    'example' => 'MQ_INST_111111111111_DOxxxxxx',
                  ),
                  'Body' => 
                  array (
                    'description' => '消息体',
                    'type' => 'string',
                    'example' => 'SGVsbG8gTVEg5raT7oWf5p6D5ai05ayt55iv',
                  ),
                  'MsgId' => 
                  array (
                    'description' => '消息 ID，即 Message ID',
                    'type' => 'string',
                    'example' => '1E0578FE110F18B4AAC235C0C8460BA2',
                  ),
                  'BodyCrc' => 
                  array (
                    'description' => '消息体 CRC 校验值',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '914112295',
                  ),
                  'BornHost' => 
                  array (
                    'description' => '生成该消息的客户端实例',
                    'type' => 'string',
                    'example' => '42.120.**.**:64646',
                  ),
                  'PropertyList' => 
                  array (
                    'description' => '消息属性列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Name' => 
                        array (
                          'description' => 'Key 名',
                          'type' => 'string',
                          'example' => 'TAGS',
                        ),
                        'Value' => 
                        array (
                          'description' => '值',
                          'type' => 'string',
                          'example' => 'TagA',
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
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"ResultMessage\\": \\"OK\\",\\n  \\"ResultCode\\": \\"OK\\",\\n  \\"RequestId\\": \\"861E6630-AEC0-4B2D-B214-6CB5E44B7F04\\",\\n  \\"Data\\": {\\n    \\"StoreSize\\": 407,\\n    \\"ReconsumeTimes\\": 1,\\n    \\"StoreTimestamp\\": 1570761026708,\\n    \\"Topic\\": \\"test-mq_topic\\",\\n    \\"StoreHost\\": \\"11.220.***.***:10911\\",\\n    \\"BornTimestamp\\": 1570761026630,\\n    \\"InstanceId\\": \\"MQ_INST_111111111111_DOxxxxxx\\",\\n    \\"Body\\": \\"SGVsbG8gTVEg5raT7oWf5p6D5ai05ayt55iv\\",\\n    \\"MsgId\\": \\"1E0578FE110F18B4AAC235C0C8460BA2\\",\\n    \\"BodyCrc\\": 914112295,\\n    \\"BornHost\\": \\"42.120.**.**:64646\\",\\n    \\"PropertyList\\": [\\n      {\\n        \\"Name\\": \\"TAGS\\",\\n        \\"Value\\": \\"TagA\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>861E6630-AEC0-4B2D-B214-6CB5E44B7F04</RequestId>\\n<Data>\\n    <BornTimestamp>1570761026630</BornTimestamp>\\n    <PropertyList>\\n        <Value>TagA</Value>\\n        <Name>TAGS</Name>\\n    </PropertyList>\\n    <InstanceId>MQ_INST_111111111111_DOxxxxxx</InstanceId>\\n    <StoreSize>407</StoreSize>\\n    <BornHost>42.120.**.**:64646</BornHost>\\n    <BodyCrc>914112295</BodyCrc>\\n    <Topic>test-mq_topic</Topic>\\n    <Body>SGVsbG8gTVEg5raT7oWf5p6D5ai05ayt55iv</Body>\\n    <ReconsumeTimes>1</ReconsumeTimes>\\n    <MsgId>1E0578FE110F18B4AAC235C0C8460BA2</MsgId>\\n    <StoreHost>11.220.***.***:10911</StoreHost>\\n    <StoreTimestamp>1570761026708</StoreTimestamp>\\n</Data>\\n<ResultMessage>OK</ResultMessage>\\n<ResultCode>OK</ResultCode>","errorExample":""}]',
      'title' => '查询死信消息',
      'summary' => '精确查询，根据 Message ID，查询死信消息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetMqSofamqMessageById' => 
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
          'name' => 'Cell',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需查询的消息所在的单元',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'RZ01A  ',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需查询消息所对应的实例 ID。针对有独立命名空间的实例，该参数为必填。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'MQ_INST_111111111111_DOxxxxxx	 ',
          ),
        ),
        2 => 
        array (
          'name' => 'MsgId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需查询的消息的 ID，即 Message ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1E0578FE110F18B4AAC235C05F2*****',
          ),
        ),
        3 => 
        array (
          'name' => 'Topic',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需查询的消息的 Topic',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'test-mq_topic	 ',
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
              'ResultMessage' => 
              array (
                'description' => '结果描述',
                'type' => 'string',
                'example' => 'OK',
              ),
              'ResultCode' => 
              array (
                'description' => '结果码',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '861E6630-AEC0-4B2D-B214-6CB5E44B7F04',
              ),
              'Data' => 
              array (
                'description' => '查询结果',
                'type' => 'object',
                'properties' => 
                array (
                  'StoreSize' => 
                  array (
                    'description' => '消息大小，单位：KB',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '407',
                  ),
                  'ReconsumeTimes' => 
                  array (
                    'description' => ' 消息重试消费的次数',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1',
                  ),
                  'StoreTimestamp' => 
                  array (
                    'description' => '被服务端存储的时间戳',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1570761026708',
                  ),
                  'Topic' => 
                  array (
                    'description' => ' 消息的 Topic',
                    'type' => 'string',
                    'example' => 'test-mq_topic',
                  ),
                  'StoreHost' => 
                  array (
                    'description' => '存储该消息的服务器实例',
                    'type' => 'string',
                    'example' => '11.220.***.***:10911',
                  ),
                  'BornTimestamp' => 
                  array (
                    'description' => ' 生成时间戳',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1570761026630',
                  ),
                  'InstanceId' => 
                  array (
                    'description' => ' 实例 ID',
                    'type' => 'string',
                    'example' => 'MQ_INST_111111111111_DOxxxxxx',
                  ),
                  'Body' => 
                  array (
                    'description' => '消息体',
                    'type' => 'string',
                    'example' => 'SGVsbG8gTVEg5raT7oWf5p6D5ai05ayt55iv',
                  ),
                  'MsgId' => 
                  array (
                    'description' => '消息 ID，即 Message ID',
                    'type' => 'string',
                    'example' => '1E0578FE110F18B4AAC235C0C8460BA2',
                  ),
                  'BodyCrc' => 
                  array (
                    'description' => '消息体 CRC 校验值',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '914112295',
                  ),
                  'BornHost' => 
                  array (
                    'description' => '生成该消息的客户端实例',
                    'type' => 'string',
                    'example' => '42.120.**.**:64646',
                  ),
                  'PropertyList' => 
                  array (
                    'description' => '消息属性列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Name' => 
                        array (
                          'description' => 'Key 名',
                          'type' => 'string',
                          'example' => 'TAGS',
                        ),
                        'Value' => 
                        array (
                          'description' => '值',
                          'type' => 'string',
                          'example' => 'TagA',
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
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"ResultMessage\\": \\"OK\\",\\n  \\"ResultCode\\": \\"OK\\",\\n  \\"RequestId\\": \\"861E6630-AEC0-4B2D-B214-6CB5E44B7F04\\",\\n  \\"Data\\": {\\n    \\"StoreSize\\": 407,\\n    \\"ReconsumeTimes\\": 1,\\n    \\"StoreTimestamp\\": 1570761026708,\\n    \\"Topic\\": \\"test-mq_topic\\",\\n    \\"StoreHost\\": \\"11.220.***.***:10911\\",\\n    \\"BornTimestamp\\": 1570761026630,\\n    \\"InstanceId\\": \\"MQ_INST_111111111111_DOxxxxxx\\",\\n    \\"Body\\": \\"SGVsbG8gTVEg5raT7oWf5p6D5ai05ayt55iv\\",\\n    \\"MsgId\\": \\"1E0578FE110F18B4AAC235C0C8460BA2\\",\\n    \\"BodyCrc\\": 914112295,\\n    \\"BornHost\\": \\"42.120.**.**:64646\\",\\n    \\"PropertyList\\": [\\n      {\\n        \\"Name\\": \\"TAGS\\",\\n        \\"Value\\": \\"TagA\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>861E6630-AEC0-4B2D-B214-6CB5E44B7F04</RequestId>\\n<Data>\\n    <BornTimestamp>1570761026630</BornTimestamp>\\n    <PropertyList>\\n        <Value>TagA</Value>\\n        <Name>TAGS</Name>\\n    </PropertyList>\\n    <InstanceId>MQ_INST_111111111111_DOxxxxxx</InstanceId>\\n    <StoreSize>407</StoreSize>\\n    <BornHost>42.120.**.**:64646</BornHost>\\n    <BodyCrc>914112295</BodyCrc>\\n    <Topic>test-mq_topic</Topic>\\n    <Body>SGVsbG8gTVEg5raT7oWf5p6D5ai05ayt55iv</Body>\\n    <ReconsumeTimes>1</ReconsumeTimes>\\n    <MsgId>1E0578FE110F18B4AAC235C0C8460BA2</MsgId>\\n    <StoreHost>11.220.***.***:10911</StoreHost>\\n    <StoreTimestamp>1570761026708</StoreTimestamp>\\n</Data>\\n<ResultMessage>OK</ResultMessage>\\n<ResultCode>OK</ResultCode>","errorExample":""}]',
      'title' => '通过消息 ID 查询消息',
      'summary' => '精确查询。查询条件需要的 Message ID 从每次消息发送成功的 SendResult 中获取。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetMqSofamqTraceByMsgId' => 
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
          'name' => 'BeginTime',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => ' 查询的时间范围的起始时间点，单位：毫秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '1570852800',
          ),
        ),
        1 => 
        array (
          'name' => 'Cell',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需要查询的单元',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'RZ01A',
          ),
        ),
        2 => 
        array (
          'name' => 'EndTime',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '查询的时间范围的结束时间点，单位：毫秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '1570968000',
          ),
        ),
        3 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需查询的消息的 Topic 所对应的实例 ID。针对有独立命名空间的实例，该参数为必填。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'MQ_INST_111111111111_DOxxxxxx	 ',
          ),
        ),
        4 => 
        array (
          'name' => 'MsgId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需查询的消息的 ID，即 Message ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1E05791C117818B4AAC23B1BB0CE****	 ',
          ),
        ),
        5 => 
        array (
          'name' => 'Topic',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需查询的消息的 Topic',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
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
            'type' => 'object',
            'properties' => 
            array (
              'ResultMessage' => 
              array (
                'description' => '结果描述',
                'type' => 'string',
                'example' => 'OK',
              ),
              'ResultCode' => 
              array (
                'description' => '结果码',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '861E6630-AEC0-4B2D-B214-6CB5E44B7F04',
              ),
              'QueryId' => 
              array (
                'description' => ' 该查询任务的 ID。可根据该任务 ID，再调用 GetMqSofamqTraceResult 接口获取详细结果。',
                'type' => 'string',
                'example' => '272967562652883649157096685****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"ResultMessage\\": \\"OK\\",\\n  \\"ResultCode\\": \\"OK\\",\\n  \\"RequestId\\": \\"861E6630-AEC0-4B2D-B214-6CB5E44B7F04\\",\\n  \\"QueryId\\": \\"272967562652883649157096685****\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>861E6630-AEC0-4B2D-B214-6CB5E44B7F04</RequestId>\\n<QueryId>272967562652883649157096685****</QueryId>\\n<ResultMessage>OK</ResultMessage>\\n<ResultCode>OK</ResultCode>","errorExample":""}]',
      'title' => '查询消息投递轨迹信息',
      'summary' => '根据 Message ID 查询消息的投递轨迹信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetMqSofamqTraceResult' => 
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '实例 ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'MQ_INST_111111111111_DOxxxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'QueryId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '消息轨迹查询的任务 ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '272967562652883649157096685****',
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
              'ResultMessage' => 
              array (
                'description' => '结果描述',
                'type' => 'string',
                'example' => 'OK',
              ),
              'ResultCode' => 
              array (
                'description' => '结果码',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '861E6630-AEC0-4B2D-B214-6CB5E44B7F04',
              ),
              'Data' => 
              array (
                'description' => '该查询任务的结果明细',
                'type' => 'object',
                'properties' => 
                array (
                  'Status' => 
                  array (
                    'description' => '该查询任务的结果。取值说明如下：finish：查询完成；working：查询中；removed：任务已删除。',
                    'type' => 'string',
                    'example' => 'finish',
                  ),
                  'MsgKey' => 
                  array (
                    'description' => '该查询任务对应的 Message Key',
                    'type' => 'string',
                    'example' => 'keyA',
                  ),
                  'UpdateTime' => 
                  array (
                    'description' => '该查询任务的最后更新时间',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1570966857000',
                  ),
                  'CreateTime' => 
                  array (
                    'description' => '该查询任务的创建时间

',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1570966857000',
                  ),
                  'UserId' => 
                  array (
                    'description' => ' 查询用户 ID',
                    'type' => 'string',
                    'example' => '27296756265288****',
                  ),
                  'Topic' => 
                  array (
                    'description' => '该查询任务的 Topic',
                    'type' => 'string',
                    'example' => 'topic_a',
                  ),
                  'InstanceId' => 
                  array (
                    'description' => ' 实例 ID',
                    'type' => 'string',
                    'example' => 'MQ_INST_111111111111_DOxxxxxx',
                  ),
                  'MsgId' => 
                  array (
                    'description' => '该查询任务对应的 Message ID',
                    'type' => 'string',
                    'example' => '1E05791C117818B4AAC23B1BB0CE****',
                  ),
                  'QueryId' => 
                  array (
                    'description' => '查询任务 ID',
                    'type' => 'string',
                    'example' => '272967562652883649157096685****',
                  ),
                  'TraceList' => 
                  array (
                    'description' => '该查询任务的匹配轨迹列表
',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Status' => 
                        array (
                          'description' => '发送状态。取值说明如下：

SEND_SUCCESS：发送成功
SEND_FAILED：发送失败
SEND_ROLLBACK：事务消息回滚
SEND_UNKNOWN：事务消息未提交
SEND_DELAY：定时(延时)消息定时中',
                          'type' => 'string',
                          'example' => 'SEND_SUCCESS',
                        ),
                        'MsgKey' => 
                        array (
                          'description' => ' 消息的 Key ，即 Message Key',
                          'type' => 'string',
                          'example' => 'ORDERID_100',
                        ),
                        'PubTime' => 
                        array (
                          'description' => '消息发送时间',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1570850870478',
                        ),
                        'Topic' => 
                        array (
                          'description' => '消息的 Topic',
                          'type' => 'string',
                          'example' => 'test',
                        ),
                        'CostTime' => 
                        array (
                          'description' => '发送耗时，单位毫秒',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '24',
                        ),
                        'Tag' => 
                        array (
                          'description' => '消息的 Tag，即 Message Tag',
                          'type' => 'string',
                          'example' => 'TagA',
                        ),
                        'MsgId' => 
                        array (
                          'description' => '消息的 ID，即 Message ID',
                          'type' => 'string',
                          'example' => '0BC1F01800002A9F000000531246****	',
                        ),
                        'PubGroupName' => 
                        array (
                          'description' => '发送方客户端配置的 Group ID',
                          'type' => 'string',
                          'example' => 'GID_test',
                        ),
                        'Cell' => 
                        array (
                          'description' => '生产端的cell name',
                          'type' => 'string',
                          'example' => 'RZ00A',
                        ),
                        'BornHost' => 
                        array (
                          'description' => '消息发送方的客户端地址',
                          'type' => 'string',
                          'example' => '30.5.**.**',
                        ),
                        'SubList' => 
                        array (
                          'description' => '消息的消费轨迹列表',
                          'type' => 'array',
                          'items' => 
                          array (
                            'type' => 'object',
                            'properties' => 
                            array (
                              'SubGroupName' => 
                              array (
                                'description' => '消费方 Group ID',
                                'type' => 'string',
                                'example' => 'GID_test',
                              ),
                              'SuccessCount' => 
                              array (
                                'description' => '该 Group ID 消费成功次数统计',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                              ),
                              'FailCount' => 
                              array (
                                'description' => '该 Group ID 消费失败次数统计',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '0',
                              ),
                              'Cell' => 
                              array (
                                'description' => 'cell name',
                                'type' => 'string',
                                'example' => 'RZ00A',
                              ),
                              'ClientList' => 
                              array (
                                'description' => '该 Group ID 客户端消费记录的明细列表

',
                                'type' => 'array',
                                'items' => 
                                array (
                                  'type' => 'object',
                                  'properties' => 
                                  array (
                                    'Status' => 
                                    array (
                                      'description' => '消费状态。取值说明如下：

CONSUME_FAILED：消费失败
CONSUME_SUCCESS：消费成功
CONSUME_NOT_RETURN：消费未返回结果
SEND_UNKNOWN：事务消息未提交
SEND_DELAY：定时(延时)消息定时中',
                                      'type' => 'string',
                                      'example' => 'CONSUME_SUCCESS',
                                    ),
                                    'SubTime' => 
                                    array (
                                      'description' => '消费开始时间戳',
                                      'type' => 'integer',
                                      'format' => 'int64',
                                      'example' => '1570851590511',
                                    ),
                                    'ReconsumeTimes' => 
                                    array (
                                      'description' => '本次消费的投递轮次',
                                      'type' => 'integer',
                                      'format' => 'int64',
                                      'example' => '1',
                                    ),
                                    'ClientHost' => 
                                    array (
                                      'description' => '消费客户端的客户端地址',
                                      'type' => 'string',
                                      'example' => '30.5.**.**',
                                    ),
                                    'SubGroupName' => 
                                    array (
                                      'description' => '该客户端所属的 Group ID',
                                      'type' => 'string',
                                      'example' => 'GID_test',
                                    ),
                                    'CostTime' => 
                                    array (
                                      'description' => '本次消费耗时，单位毫秒',
                                      'type' => 'integer',
                                      'format' => 'int64',
                                      'example' => '43',
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
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"ResultMessage\\": \\"OK\\",\\n  \\"ResultCode\\": \\"OK\\",\\n  \\"RequestId\\": \\"861E6630-AEC0-4B2D-B214-6CB5E44B7F04\\",\\n  \\"Data\\": {\\n    \\"Status\\": \\"finish\\",\\n    \\"MsgKey\\": \\"keyA\\",\\n    \\"UpdateTime\\": 1570966857000,\\n    \\"CreateTime\\": 1570966857000,\\n    \\"UserId\\": \\"27296756265288****\\",\\n    \\"Topic\\": \\"topic_a\\",\\n    \\"InstanceId\\": \\"MQ_INST_111111111111_DOxxxxxx\\",\\n    \\"MsgId\\": \\"1E05791C117818B4AAC23B1BB0CE****\\",\\n    \\"QueryId\\": \\"272967562652883649157096685****\\",\\n    \\"TraceList\\": [\\n      {\\n        \\"Status\\": \\"SEND_SUCCESS\\",\\n        \\"MsgKey\\": \\"ORDERID_100\\",\\n        \\"PubTime\\": 1570850870478,\\n        \\"Topic\\": \\"test\\",\\n        \\"CostTime\\": 24,\\n        \\"Tag\\": \\"TagA\\",\\n        \\"MsgId\\": \\"0BC1F01800002A9F000000531246****\\\\t\\",\\n        \\"PubGroupName\\": \\"GID_test\\",\\n        \\"Cell\\": \\"RZ00A\\",\\n        \\"BornHost\\": \\"30.5.**.**\\",\\n        \\"SubList\\": [\\n          {\\n            \\"SubGroupName\\": \\"GID_test\\",\\n            \\"SuccessCount\\": 1,\\n            \\"FailCount\\": 0,\\n            \\"Cell\\": \\"RZ00A\\",\\n            \\"ClientList\\": [\\n              {\\n                \\"Status\\": \\"CONSUME_SUCCESS\\",\\n                \\"SubTime\\": 1570851590511,\\n                \\"ReconsumeTimes\\": 1,\\n                \\"ClientHost\\": \\"30.5.**.**\\",\\n                \\"SubGroupName\\": \\"GID_test\\",\\n                \\"CostTime\\": 43\\n              }\\n            ]\\n          }\\n        ]\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>861E6630-AEC0-4B2D-B214-6CB5E44B7F04</RequestId>\\n<Data>\\n    <Status>finish</Status>\\n    <InstanceId>MQ_INST_111111111111_DOxxxxxx</InstanceId>\\n    <UserId>27296756265288****</UserId>\\n    <CreateTime>1570966857000</CreateTime>\\n    <MsgKey>keyA</MsgKey>\\n    <QueryId>272967562652883649157096685****</QueryId>\\n    <UpdateTime>1570966857000</UpdateTime>\\n    <TraceList>\\n        <CostTime>24</CostTime>\\n        <Status>SEND_SUCCESS</Status>\\n        <MsgKey>ORDERID_100</MsgKey>\\n        <BornHost>30.5.**.**</BornHost>\\n        <Tag>TagA</Tag>\\n        <PubGroupName>GID_test</PubGroupName>\\n        <PubTime>1570850870478</PubTime>\\n        <Topic>test</Topic>\\n        <Cell>RZ00A</Cell>\\n        <MsgId>0BC1F01800002A9F000000531246****\\t</MsgId>\\n    </TraceList>\\n    <TraceList>\\n        <SubList>\\n            <FailCount>0</FailCount>\\n            <SubGroupName>GID_test</SubGroupName>\\n            <SuccessCount>1</SuccessCount>\\n            <Cell>RZ00A</Cell>\\n        </SubList>\\n        <SubList>\\n            <ClientList>\\n                <CostTime>43</CostTime>\\n                <Status>CONSUME_SUCCESS</Status>\\n                <ClientHost>30.5.**.**</ClientHost>\\n                <SubTime>1570851590511</SubTime>\\n                <SubGroupName>GID_test</SubGroupName>\\n                <ReconsumeTimes>1</ReconsumeTimes>\\n            </ClientList>\\n        </SubList>\\n    </TraceList>\\n    <Topic>topic_a</Topic>\\n    <MsgId>1E05791C117818B4AAC23B1BB0CE****</MsgId>\\n</Data>\\n<ResultMessage>OK</ResultMessage>\\n<ResultCode>OK</ResultCode>","errorExample":""}]',
      'title' => '查看消息轨迹查询结果',
      'summary' => '过传入查询任务 ID，获取对应的轨迹查询的结果明细。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListMqSofamqGroup' => 
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'GroupId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '查询指定 Group ID 时设置，否则查询所有 Group ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'GID_test_group_id	',
          ),
        ),
        1 => 
        array (
          'name' => 'GroupType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '分组类型，默认为 tcp，表示该 Group ID 仅适用于 TCP 协议的消息收发。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'tcp',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需获取 Group ID 所对应的实例 ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'SOFAMQ_INSTANCE_000001',
          ),
        ),
        3 => 
        array (
          'name' => 'PageNum',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '页码',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '每页显示数量',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
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
              'ResultMessage' => 
              array (
                'description' => '结果描述',
                'type' => 'string',
                'example' => 'OK',
              ),
              'ResultCode' => 
              array (
                'description' => '结果码',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '861E6630-AEC0-4B2D-B214-6CB5E44B7F04',
              ),
              'Data' => 
              array (
                'description' => '查询到的订阅关系集合',
                'type' => 'object',
                'properties' => 
                array (
                  'PageNum' => 
                  array (
                    'description' => '页码',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1',
                  ),
                  'PageSize' => 
                  array (
                    'description' => '每页显示条数',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '20',
                  ),
                  'Total' => 
                  array (
                    'description' => '总条数',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '100',
                  ),
                  'Content' => 
                  array (
                    'description' => 'Group 信息',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'RetryPerm' => 
                        array (
                          'description' => '重试权限',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '6',
                        ),
                        'Cluster' => 
                        array (
                          'description' => '集群名',
                          'type' => 'string',
                          'example' => 'SINGLE',
                        ),
                        'Remark' => 
                        array (
                          'description' => 'Group 备注信息',
                          'type' => 'string',
                          'example' => 'test',
                        ),
                        'InstanceId' => 
                        array (
                          'description' => '实例 ID',
                          'type' => 'string',
                          'example' => 'SOFAMQ_INSTANCE_000001',
                        ),
                        'GmtModified' => 
                        array (
                          'description' => '修改时间，单位：毫秒',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1570966857000',
                        ),
                        'RetryWriteQueueNum' => 
                        array (
                          'description' => '重试写队列权限',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1',
                        ),
                        'DeleteMark' => 
                        array (
                          'description' => '删除标记',
                          'type' => 'string',
                          'example' => '0',
                        ),
                        'GroupId' => 
                        array (
                          'description' => 'Group ID',
                          'type' => 'string',
                          'example' => 'test_group_id',
                        ),
                        'Version' => 
                        array (
                          'description' => '版本',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1',
                        ),
                        'GmtCreate' => 
                        array (
                          'description' => '创建时间，单位：毫秒',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1570966857000',
                        ),
                        'RetryReadQueueNum' => 
                        array (
                          'description' => '重试读队列数量',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1',
                        ),
                        'Scope' => 
                        array (
                          'description' => '作用范围',
                          'type' => 'string',
                          'example' => '*',
                        ),
                        'Operator' => 
                        array (
                          'description' => '操作人',
                          'type' => 'string',
                          'example' => 'alipay',
                        ),
                        'GroupType' => 
                        array (
                          'description' => '分组类型，默认为 tcp，表示该 Group ID 仅适用于 TCP 协议的消息收发。',
                          'type' => 'string',
                          'example' => 'tcp',
                        ),
                        'ReadEnable' => 
                        array (
                          'description' => '读权限',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'Id' => 
                        array (
                          'description' => '数据库 ID',
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
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"ResultMessage\\": \\"OK\\",\\n  \\"ResultCode\\": \\"OK\\",\\n  \\"RequestId\\": \\"861E6630-AEC0-4B2D-B214-6CB5E44B7F04\\",\\n  \\"Data\\": {\\n    \\"PageNum\\": 1,\\n    \\"PageSize\\": 20,\\n    \\"Total\\": 100,\\n    \\"Content\\": [\\n      {\\n        \\"RetryPerm\\": 6,\\n        \\"Cluster\\": \\"SINGLE\\",\\n        \\"Remark\\": \\"test\\",\\n        \\"InstanceId\\": \\"SOFAMQ_INSTANCE_000001\\",\\n        \\"GmtModified\\": 1570966857000,\\n        \\"RetryWriteQueueNum\\": 1,\\n        \\"DeleteMark\\": \\"0\\",\\n        \\"GroupId\\": \\"test_group_id\\",\\n        \\"Version\\": 1,\\n        \\"GmtCreate\\": 1570966857000,\\n        \\"RetryReadQueueNum\\": 1,\\n        \\"Scope\\": \\"*\\",\\n        \\"Operator\\": \\"alipay\\",\\n        \\"GroupType\\": \\"tcp\\",\\n        \\"ReadEnable\\": true,\\n        \\"Id\\": 1\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>861E6630-AEC0-4B2D-B214-6CB5E44B7F04</RequestId>\\n<Data>\\n    <PageNum>1</PageNum>\\n    <PageSize>20</PageSize>\\n    <Content>\\n        <Operator>alipay</Operator>\\n        <GmtCreate>1570966857000</GmtCreate>\\n        <InstanceId>SOFAMQ_INSTANCE_000001</InstanceId>\\n        <GmtModified>1570966857000</GmtModified>\\n        <ReadEnable>true</ReadEnable>\\n        <Cluster>SINGLE</Cluster>\\n        <Id>1</Id>\\n        <GroupId>test_group_id</GroupId>\\n        <Remark>test</Remark>\\n    </Content>\\n    <Total>100</Total>\\n</Data>\\n<ResultMessage>OK</ResultMessage>\\n<ResultCode>OK</ResultCode>","errorExample":""}]',
      'title' => 'ListMqSofamqGroup',
      'summary' => '查询指定环境实例下 Group ID 资源的信息列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListMqSofamqTopic' => 
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需获取的 Topic 信息列表所对应的实例 ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '000001',
          ),
        ),
        1 => 
        array (
          'name' => 'PageNum',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '页码',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '每页显示条数',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '10',
          ),
        ),
        3 => 
        array (
          'name' => 'Topic',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '查询指定 Topic 时设置，否则查询所有 Topic',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'TP_TEST',
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
              'ResultMessage' => 
              array (
                'description' => '结果描述',
                'type' => 'string',
                'example' => 'OK',
              ),
              'ResultCode' => 
              array (
                'description' => '结果码',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '861E6630-AEC0-4B2D-B214-6CB5E44B7F04',
              ),
              'Data' => 
              array (
                'description' => '返回所有查询到的 Topic 信息列表',
                'type' => 'object',
                'properties' => 
                array (
                  'PageNum' => 
                  array (
                    'description' => '页码',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1',
                  ),
                  'PageSize' => 
                  array (
                    'description' => '每页显示条数',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '10',
                  ),
                  'Total' => 
                  array (
                    'description' => '总条数',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '100',
                  ),
                  'Content' => 
                  array (
                    'description' => 'Topic 信息',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Cluster' => 
                        array (
                          'description' => '集群名称',
                          'type' => 'string',
                          'example' => 'single',
                        ),
                        'Remark' => 
                        array (
                          'description' => 'Topic 备注信息',
                          'type' => 'string',
                          'example' => 'desc',
                        ),
                        'WriteQueueNum' => 
                        array (
                          'description' => '写分区数',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '8',
                        ),
                        'ReadQueueNum' => 
                        array (
                          'description' => '读分区数',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '8',
                        ),
                        'InstanceId' => 
                        array (
                          'description' => '实例 ID',
                          'type' => 'string',
                          'example' => '000001',
                        ),
                        'GmtModified' => 
                        array (
                          'description' => '修改时间',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1570966857000',
                        ),
                        'MessageType' => 
                        array (
                          'description' => '消息类型。取值说明如下：

0：普通消息
1：分区顺序消息
2：全局顺序消息
4：事务消息
5：定时/延时消息',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '0',
                        ),
                        'Perm' => 
                        array (
                          'description' => '设置该 Topic 的读写模式。取值说明如下：

6：同时支持读写
4：禁写
2：禁读',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '6',
                        ),
                        'Topic' => 
                        array (
                          'description' => 'Topic 名称',
                          'type' => 'string',
                          'example' => 'TP_TEST',
                        ),
                        'GmtCreate' => 
                        array (
                          'description' => '创建时间',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1570966857000',
                        ),
                        'Operator' => 
                        array (
                          'description' => '创建人',
                          'type' => 'string',
                          'example' => 'alipay',
                        ),
                        'Id' => 
                        array (
                          'description' => '数据库 ID',
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
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"ResultMessage\\": \\"OK\\",\\n  \\"ResultCode\\": \\"OK\\",\\n  \\"RequestId\\": \\"861E6630-AEC0-4B2D-B214-6CB5E44B7F04\\",\\n  \\"Data\\": {\\n    \\"PageNum\\": 1,\\n    \\"PageSize\\": 10,\\n    \\"Total\\": 100,\\n    \\"Content\\": [\\n      {\\n        \\"Cluster\\": \\"single\\",\\n        \\"Remark\\": \\"desc\\",\\n        \\"WriteQueueNum\\": 8,\\n        \\"ReadQueueNum\\": 8,\\n        \\"InstanceId\\": \\"000001\\",\\n        \\"GmtModified\\": 1570966857000,\\n        \\"MessageType\\": 0,\\n        \\"Perm\\": 6,\\n        \\"Topic\\": \\"TP_TEST\\",\\n        \\"GmtCreate\\": 1570966857000,\\n        \\"Operator\\": \\"alipay\\",\\n        \\"Id\\": 1\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>861E6630-AEC0-4B2D-B214-6CB5E44B7F04</RequestId>\\n<Data>\\n    <PageNum>1</PageNum>\\n    <PageSize>10</PageSize>\\n    <Content>\\n        <Operator>alipay</Operator>\\n        <GmtCreate>1570966857000</GmtCreate>\\n        <InstanceId>000001</InstanceId>\\n        <Perm>6</Perm>\\n        <GmtModified>1570966857000</GmtModified>\\n        <Cluster>single</Cluster>\\n        <ReadQueueNum/>\\n        <Id>1</Id>\\n        <Topic>TP_TEST</Topic>\\n        <WriteQueueNum>8</WriteQueueNum>\\n        <MessageType>0</MessageType>\\n        <Remark>desc</Remark>\\n    </Content>\\n    <Total>100</Total>\\n</Data>\\n<ResultMessage>OK</ResultMessage>\\n<ResultCode>OK</ResultCode>","errorExample":""}]',
      'title' => '查询 Topic 列表',
      'summary' => '查询指定实例下 Topic 的信息列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListMqSofamqTrace' => 
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
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '实例 ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'SOFAMQ_INSTANCE_000001',
          ),
        ),
        1 => 
        array (
          'name' => 'PageNum',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '页码',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '每页显示条数',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '20',
          ),
        ),
        3 => 
        array (
          'name' => 'QueryItem',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '模糊查询项，可以为 Topic、Message ID 或 Message Key。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'TP_xx，0BA6EEBD700549C2FAAE076616860003，keyA',
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
              'ResultMessage' => 
              array (
                'description' => '结果描述',
                'type' => 'string',
                'example' => 'OK',
              ),
              'ResultCode' => 
              array (
                'description' => '结果码',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '861E6630-AEC0-4B2D-B214-6CB5E44B7F04',
              ),
              'Data' => 
              array (
                'description' => '查询返回的数据集合',
                'type' => 'object',
                'properties' => 
                array (
                  'PageNum' => 
                  array (
                    'description' => '页码',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1',
                  ),
                  'PageSize' => 
                  array (
                    'description' => '每页显示条数',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '20',
                  ),
                  'Total' => 
                  array (
                    'description' => '总条数',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '100',
                  ),
                  'Content' => 
                  array (
                    'description' => 'Trace 信息',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Status' => 
                        array (
                          'description' => '状态',
                          'type' => 'string',
                          'example' => 'QUERYING',
                        ),
                        'MsgKey' => 
                        array (
                          'description' => '消息查询所用的 Message Key',
                          'type' => 'string',
                          'example' => 'ORDERID_100',
                        ),
                        'Topic' => 
                        array (
                          'description' => '查询的 Topic',
                          'type' => 'string',
                          'example' => 'TP_xxx',
                        ),
                        'GmtCreate' => 
                        array (
                          'description' => '创建时间',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1570701259403',
                        ),
                        'InstanceId' => 
                        array (
                          'description' => '实例 ID',
                          'type' => 'string',
                          'example' => 'SOFAMQ_INSTANCE_000001',
                        ),
                        'GmtModified' => 
                        array (
                          'description' => '修改时间',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1570701259403',
                        ),
                        'MsgId' => 
                        array (
                          'description' => '消息查询所用的 Message ID',
                          'type' => 'string',
                          'example' => '1E05791C117818B4AAC23B1BB0CE****',
                        ),
                        'QueryId' => 
                        array (
                          'description' => '查询 ID',
                          'type' => 'string',
                          'example' => '272967562652883649157096685****',
                        ),
                        'Cell' => 
                        array (
                          'description' => '查询的 Cell',
                          'type' => 'string',
                          'example' => 'RZ001',
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
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"ResultMessage\\": \\"OK\\",\\n  \\"ResultCode\\": \\"OK\\",\\n  \\"RequestId\\": \\"861E6630-AEC0-4B2D-B214-6CB5E44B7F04\\",\\n  \\"Data\\": {\\n    \\"PageNum\\": 1,\\n    \\"PageSize\\": 20,\\n    \\"Total\\": 100,\\n    \\"Content\\": [\\n      {\\n        \\"Status\\": \\"QUERYING\\",\\n        \\"MsgKey\\": \\"ORDERID_100\\",\\n        \\"Topic\\": \\"TP_xxx\\",\\n        \\"GmtCreate\\": 1570701259403,\\n        \\"InstanceId\\": \\"SOFAMQ_INSTANCE_000001\\",\\n        \\"GmtModified\\": 1570701259403,\\n        \\"MsgId\\": \\"1E05791C117818B4AAC23B1BB0CE****\\",\\n        \\"QueryId\\": \\"272967562652883649157096685****\\",\\n        \\"Cell\\": \\"RZ001\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>861E6630-AEC0-4B2D-B214-6CB5E44B7F04</RequestId>\\n<Data>\\n    <PageNum>1</PageNum>\\n    <PageSize>20</PageSize>\\n    <Content>\\n        <Status>QUERYING</Status>\\n        <GmtCreate>1570701259403</GmtCreate>\\n        <InstanceId>SOFAMQ_INSTANCE_000001</InstanceId>\\n        <MsgKey>ORDERID_100</MsgKey>\\n        <QueryId>272967562652883649157096685****</QueryId>\\n        <GmtModified>1570701259403</GmtModified>\\n        <Topic>TP_xxx</Topic>\\n        <Cell>RZ001</Cell>\\n        <MsgId>1E05791C117818B4AAC23B1BB0CE****</MsgId>\\n    </Content>\\n    <Total>100</Total>\\n</Data>\\n<ResultMessage>OK</ResultMessage>\\n<ResultCode>OK</ResultCode>","errorExample":""}]',
      'title' => '查询消息轨迹查询任务列表',
      'summary' => '查询指定实例下的消息轨迹查询任务列表信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListMqSofamqWarn' => 
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'GroupId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '查询指定 Group 的报警规则时设置',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'GID_group',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '实例 ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'MQ_INST_111111111111_DOxxxxxx',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNum',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '页码',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '每页显示条数',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '20',
          ),
        ),
        4 => 
        array (
          'name' => 'Topic',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '查询指定 Topic 的报警规则时设置',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
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
            'type' => 'object',
            'properties' => 
            array (
              'ResultMessage' => 
              array (
                'description' => '结果描述',
                'type' => 'string',
                'example' => 'OK',
              ),
              'ResultCode' => 
              array (
                'description' => '结果码',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '861E6630-AEC0-4B2D-B214-6CB5E44B7F04',
              ),
              'Data' => 
              array (
                'description' => '查询到的告警规则集合',
                'type' => 'object',
                'properties' => 
                array (
                  'PageNum' => 
                  array (
                    'description' => '页码',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1',
                  ),
                  'PageSize' => 
                  array (
                    'description' => '每页显示条数',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '20',
                  ),
                  'Total' => 
                  array (
                    'description' => '总条数',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '100',
                  ),
                  'Content' => 
                  array (
                    'description' => '报警规则信息',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'WarnLevel' => 
                        array (
                          'description' => '报警级别',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '5',
                        ),
                        'Frequency' => 
                        array (
                          'description' => '报警频率，单位分钟',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '10',
                        ),
                        'Contacts' => 
                        array (
                          'description' => '联系人列表',
                          'type' => 'string',
                          'example' => '[["DingTalk", "机器人令牌", "组名"], ["DingTalk", "机器人令牌2", "组名2"]]',
                        ),
                        'Attribute' => 
                        array (
                          'description' => '属性字符串',
                          'type' => 'string',
                          'example' => '""',
                        ),
                        'WarnType' => 
                        array (
                          'description' => '报警类型',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1',
                        ),
                        'InstanceId' => 
                        array (
                          'description' => '实例 ID',
                          'type' => 'string',
                          'example' => 'SOFAMQ_INSTANCE_000001',
                        ),
                        'GmtModified' => 
                        array (
                          'description' => '修改时间',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1570701259403',
                        ),
                        'GroupId' => 
                        array (
                          'description' => '消费组 ID',
                          'type' => 'string',
                          'example' => 'GID_TEST',
                        ),
                        'AlertTime' => 
                        array (
                          'description' => '报警时间段',
                          'type' => 'string',
                          'example' => '00:00-23:59',
                        ),
                        'DelayTime' => 
                        array (
                          'description' => '延迟时间，单位分钟',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '5',
                        ),
                        'Topic' => 
                        array (
                          'description' => '报警的 Topic',
                          'type' => 'string',
                          'example' => 'TP_TEST',
                        ),
                        'GmtCreate' => 
                        array (
                          'description' => '创建时间',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1570701259403',
                        ),
                        'WarnStatus' => 
                        array (
                          'description' => '报警状态',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1',
                        ),
                        'BlockTime' => 
                        array (
                          'description' => '消息阻塞时间',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '10',
                        ),
                        'Operator' => 
                        array (
                          'description' => '操作者',
                          'type' => 'string',
                          'example' => 'alipay',
                        ),
                        'Threshold' => 
                        array (
                          'description' => '阈值',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '3000',
                        ),
                        'Id' => 
                        array (
                          'description' => '报警 ID',
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
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"ResultMessage\\": \\"OK\\",\\n  \\"ResultCode\\": \\"OK\\",\\n  \\"RequestId\\": \\"861E6630-AEC0-4B2D-B214-6CB5E44B7F04\\",\\n  \\"Data\\": {\\n    \\"PageNum\\": 1,\\n    \\"PageSize\\": 20,\\n    \\"Total\\": 100,\\n    \\"Content\\": [\\n      {\\n        \\"WarnLevel\\": 5,\\n        \\"Frequency\\": 10,\\n        \\"Contacts\\": \\"[[\\\\\\"DingTalk\\\\\\", \\\\\\"机器人令牌\\\\\\", \\\\\\"组名\\\\\\"], [\\\\\\"DingTalk\\\\\\", \\\\\\"机器人令牌2\\\\\\", \\\\\\"组名2\\\\\\"]]\\",\\n        \\"Attribute\\": \\"\\\\\\"\\\\\\"\\",\\n        \\"WarnType\\": 1,\\n        \\"InstanceId\\": \\"SOFAMQ_INSTANCE_000001\\",\\n        \\"GmtModified\\": 1570701259403,\\n        \\"GroupId\\": \\"GID_TEST\\",\\n        \\"AlertTime\\": \\"00:00-23:59\\",\\n        \\"DelayTime\\": 5,\\n        \\"Topic\\": \\"TP_TEST\\",\\n        \\"GmtCreate\\": 1570701259403,\\n        \\"WarnStatus\\": 1,\\n        \\"BlockTime\\": 10,\\n        \\"Operator\\": \\"alipay\\",\\n        \\"Threshold\\": 3000,\\n        \\"Id\\": 1\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>861E6630-AEC0-4B2D-B214-6CB5E44B7F04</RequestId>\\n<Data>\\n    <PageNum>1</PageNum>\\n    <PageSize>20</PageSize>\\n    <Content>\\n        <Operator>alipay</Operator>\\n        <WarnType>1</WarnType>\\n        <Attribute>\\"\\"</Attribute>\\n        <InstanceId>SOFAMQ_INSTANCE_000001</InstanceId>\\n        <BlockTime>10</BlockTime>\\n        <GmtModified>1570701259403</GmtModified>\\n        <DelayTime>5</DelayTime>\\n        <AlertTime>00:00-23:59</AlertTime>\\n        <GroupId>GID_TEST</GroupId>\\n        <WarnStatus>1</WarnStatus>\\n        <GmtCreate>1570701259403</GmtCreate>\\n        <WarnLevel>5</WarnLevel>\\n        <Contacts>[[\\"DingTalk\\", \\"机器人令牌\\", \\"组名\\"], [\\"DingTalk\\", \\"机器人令牌2\\", \\"组名2\\"]]</Contacts>\\n        <Frequency>10</Frequency>\\n        <Id>1</Id>\\n        <Topic>TP_TEST</Topic>\\n        <Threshold>3000</Threshold>\\n    </Content>\\n    <Total>100</Total>\\n</Data>\\n<ResultMessage>OK</ResultMessage>\\n<ResultCode>OK</ResultCode>","errorExample":""}]',
      'title' => '查询报警记录',
      'summary' => '获取报警规则列表信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListMqSofamqWarnHistory' => 
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Cell',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '目标单元',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'RZ00A',
          ),
        ),
        1 => 
        array (
          'name' => 'GroupId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'Group ID',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'GID_TEST',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '实例 ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'INSTANCE_XXX',
          ),
        ),
        3 => 
        array (
          'name' => 'PageNum',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '页码',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '每页显示条数',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '20',
          ),
        ),
        5 => 
        array (
          'name' => 'Topic',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'Topic 名称',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'TP_TEST',
          ),
        ),
        6 => 
        array (
          'name' => 'WarnId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '报警规则 ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'docRequired' => true,
            'example' => '4',
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
              'ResultMessage' => 
              array (
                'description' => '结果描述',
                'type' => 'string',
                'example' => 'OK',
              ),
              'ResultCode' => 
              array (
                'description' => '结果码',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '861E6630-AEC0-4B2D-B214-6CB5E44B7F04',
              ),
              'Data' => 
              array (
                'description' => '查询到的报警日志集合',
                'type' => 'object',
                'properties' => 
                array (
                  'PageNum' => 
                  array (
                    'description' => '页码',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1',
                  ),
                  'PageSize' => 
                  array (
                    'description' => '每页显示条数',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '20',
                  ),
                  'Total' => 
                  array (
                    'description' => '总条数',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '10',
                  ),
                  'Content' => 
                  array (
                    'description' => '报警日志信息',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'WarnId' => 
                        array (
                          'description' => '报警 ID',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1',
                        ),
                        'GroupId' => 
                        array (
                          'description' => 'Group ID',
                          'type' => 'string',
                          'example' => 'GID_TEST',
                        ),
                        'Topic' => 
                        array (
                          'description' => 'Topic 名称',
                          'type' => 'string',
                          'example' => 'TP_TEST',
                        ),
                        'GmtCreate' => 
                        array (
                          'description' => '创建时间',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1570701259403',
                        ),
                        'WarnInfo' => 
                        array (
                          'description' => '报警信息',
                          'type' => 'string',
                          'example' => '"Alert: 消息积压: 609 大于阈值: 600, 消息延时: 23478710ms 大于阈值: 10ms, "',
                        ),
                        'InstanceId' => 
                        array (
                          'description' => '实例 ID',
                          'type' => 'string',
                          'example' => 'SOFAMQ_INSTANCE_000001',
                        ),
                        'GmtModified' => 
                        array (
                          'description' => '修改时间',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1570701259403',
                        ),
                        'Cell' => 
                        array (
                          'description' => '单元名称',
                          'type' => 'string',
                          'example' => 'RZ00A',
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
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"ResultMessage\\": \\"OK\\",\\n  \\"ResultCode\\": \\"OK\\",\\n  \\"RequestId\\": \\"861E6630-AEC0-4B2D-B214-6CB5E44B7F04\\",\\n  \\"Data\\": {\\n    \\"PageNum\\": 1,\\n    \\"PageSize\\": 20,\\n    \\"Total\\": 10,\\n    \\"Content\\": [\\n      {\\n        \\"WarnId\\": 1,\\n        \\"GroupId\\": \\"GID_TEST\\",\\n        \\"Topic\\": \\"TP_TEST\\",\\n        \\"GmtCreate\\": 1570701259403,\\n        \\"WarnInfo\\": \\"\\\\\\"Alert: 消息积压: 609 大于阈值: 600, 消息延时: 23478710ms 大于阈值: 10ms, \\\\\\"\\",\\n        \\"InstanceId\\": \\"SOFAMQ_INSTANCE_000001\\",\\n        \\"GmtModified\\": 1570701259403,\\n        \\"Cell\\": \\"RZ00A\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>861E6630-AEC0-4B2D-B214-6CB5E44B7F04</RequestId>\\n<Data>\\n    <PageNum>1</PageNum>\\n    <PageSize>20</PageSize>\\n    <Content>\\n        <WarnId/>\\n        <GmtCreate/>\\n        <InstanceId>SOFAMQ_INSTANCE_000001</InstanceId>\\n        <GmtModified/>\\n        <WarnInfo>\\"Alert: 消息积压: 609 大于阈值: 600, 消息延时: 23478710ms 大于阈值: 10ms, \\"</WarnInfo>\\n        <Topic>TP_TEST</Topic>\\n        <Cell>RZ00A</Cell>\\n        <GroupId>GID_TEST</GroupId>\\n    </Content>\\n    <Total>10</Total>\\n</Data>\\n<ResultMessage>OK</ResultMessage>\\n<ResultCode>OK</ResultCode>","errorExample":""}]',
      'title' => '查询历史报警记录',
      'summary' => '查询历史报警记录，目前默认保存 30 天以内的报警信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryMqSofamqConsumerAccumulate' => 
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
          'name' => 'Cell',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需要查询的 Group ID 所在的单元',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'RZ01A',
          ),
        ),
        1 => 
        array (
          'name' => 'Detail',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否查询详细信息。取值说明如下：true：要查询详细信息；false：不查询详细信息（默认值）。',
            'type' => 'boolean',
            'required' => false,
            'docRequired' => false,
            'example' => 'true',
          ),
        ),
        2 => 
        array (
          'name' => 'GroupId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需查询的消费端 Group ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'GID_test_consumer_id',
          ),
        ),
        3 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '实例 ID。针对有独立命名空间的实例，该参数为必填。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'MQ_INST_111111111111_DOxxxxxx',
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
              'ResultMessage' => 
              array (
                'description' => '结果描述',
                'type' => 'string',
                'example' => 'OK',
              ),
              'ResultCode' => 
              array (
                'description' => '结果码',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '861E6630-AEC0-4B2D-B214-6CB5E44B7F04',
              ),
              'Data' => 
              array (
                'description' => '指定 Consumer 的消费堆积情况',
                'type' => 'object',
                'properties' => 
                array (
                  'ConsumeTps' => 
                  array (
                    'description' => '该 Group ID 下消费者实例群组接收消息的总 TPS，单位：条/秒。',
                    'type' => 'string',
                    'example' => '10',
                  ),
                  'TotalDiff' => 
                  array (
                    'description' => '该 Topic 的消费堆积数量',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '100',
                  ),
                  'LastTimestamp' => 
                  array (
                    'description' => '该 Topic 中最近一条被消费的信息的生产时间，单位：毫秒。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1566231000000',
                  ),
                  'DelayTime' => 
                  array (
                    'description' => '该 Topic 所发消息的最大消费延迟时间，单位：毫秒。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '10000',
                  ),
                  'Online' => 
                  array (
                    'description' => '该 Group ID 下是否有消费者实例在线；只要有一个消费者实例在线，该 Group ID 状态即为在线。取值说明如下：

- true：状态为在线。
- false：状态为不在线。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'DetailInTopicList' => 
                  array (
                    'description' => '各个 Topic 具体情况',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'TotalDiff' => 
                        array (
                          'description' => '该 Topic 消费总堆积数',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '0',
                        ),
                        'DelayTime' => 
                        array (
                          'description' => '延迟时间，单位：毫秒。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '0',
                        ),
                        'LastTimestamp' => 
                        array (
                          'description' => '最后更新时间，单位：毫秒。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1570701259403',
                        ),
                        'Topic' => 
                        array (
                          'description' => 'Topic 名称',
                          'type' => 'string',
                          'example' => 'test-mq_topic',
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
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"ResultMessage\\": \\"OK\\",\\n  \\"ResultCode\\": \\"OK\\",\\n  \\"RequestId\\": \\"861E6630-AEC0-4B2D-B214-6CB5E44B7F04\\",\\n  \\"Data\\": {\\n    \\"ConsumeTps\\": \\"10\\",\\n    \\"TotalDiff\\": 100,\\n    \\"LastTimestamp\\": 1566231000000,\\n    \\"DelayTime\\": 10000,\\n    \\"Online\\": true,\\n    \\"DetailInTopicList\\": [\\n      {\\n        \\"TotalDiff\\": 0,\\n        \\"DelayTime\\": 0,\\n        \\"LastTimestamp\\": 1570701259403,\\n        \\"Topic\\": \\"test-mq_topic\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>861E6630-AEC0-4B2D-B214-6CB5E44B7F04</RequestId>\\n<Data>\\n    <ConsumeTps>10</ConsumeTps>\\n    <LastTimestamp>1566231000000</LastTimestamp>\\n    <TotalDiff>100</TotalDiff>\\n    <DelayTime>10000</DelayTime>\\n    <Online>true</Online>\\n    <DetailInTopicList>\\n        <LastTimestamp>1570701259403</LastTimestamp>\\n        <TotalDiff>0</TotalDiff>\\n        <DelayTime>0</DelayTime>\\n        <Topic>test-mq_topic</Topic>\\n    </DetailInTopicList>\\n</Data>\\n<ResultMessage>OK</ResultMessage>\\n<ResultCode>OK</ResultCode>","errorExample":""}]',
      'title' => '查询消费者消息积压',
      'summary' => '用于粗略判断消息消费情况和延迟情况。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryMqSofamqConsumerConnection' => 
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
          'name' => 'Cell',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需要查询的 Group ID 所在的单元',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'RZ01A',
          ),
        ),
        1 => 
        array (
          'name' => 'GroupId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需查询的 Group ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'GID_test_consumer_id',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需查询的 Group ID 所对应的实例 ID。针对有独立命名空间的实例，该参数为必填。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'MQ_INST_111111111111_DOxxxxxx',
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
              'ResultMessage' => 
              array (
                'description' => '结果描述',
                'type' => 'string',
                'example' => 'OK',
              ),
              'ResultCode' => 
              array (
                'description' => '结果码',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '861E6630-AEC0-4B2D-B214-6CB5E44B7F04',
              ),
              'Data' => 
              array (
                'description' => '指定 Group ID 的连接信息

',
                'type' => 'object',
                'properties' => 
                array (
                  'ConnectionList' => 
                  array (
                    'description' => '指定 Group ID 的连接信息

',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'RemoteIp' => 
                        array (
                          'description' => '宿主机 IP 或公网 IP',
                          'type' => 'string',
                          'example' => '42.120.74.**',
                        ),
                        'ClientAddr' => 
                        array (
                          'description' => '该消费实例的地址和端口',
                          'type' => 'string',
                          'example' => '30.5.121.**',
                        ),
                        'Version' => 
                        array (
                          'description' => '消费端版本',
                          'type' => 'string',
                          'example' => 'V4_3_6_SNAPSHOT',
                        ),
                        'Language' => 
                        array (
                          'description' => '消费端语言',
                          'type' => 'string',
                          'example' => 'JAVA',
                        ),
                        'ClientId' => 
                        array (
                          'description' => '消费实例的 ID',
                          'type' => 'string',
                          'example' => '30.5.121.**@25560#-1999745829#-1737591554#458773089270275',
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
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"ResultMessage\\": \\"OK\\",\\n  \\"ResultCode\\": \\"OK\\",\\n  \\"RequestId\\": \\"861E6630-AEC0-4B2D-B214-6CB5E44B7F04\\",\\n  \\"Data\\": {\\n    \\"ConnectionList\\": [\\n      {\\n        \\"RemoteIp\\": \\"42.120.74.**\\",\\n        \\"ClientAddr\\": \\"30.5.121.**\\",\\n        \\"Version\\": \\"V4_3_6_SNAPSHOT\\",\\n        \\"Language\\": \\"JAVA\\",\\n        \\"ClientId\\": \\"30.5.121.**@25560#-1999745829#-1737591554#458773089270275\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>861E6630-AEC0-4B2D-B214-6CB5E44B7F04</RequestId>\\n<Data>\\n    <ConnectionList>\\n        <ClientAddr>30.5.121.**</ClientAddr>\\n        <Language>JAVA</Language>\\n        <RemoteIp>42.120.74.**</RemoteIp>\\n        <Version>V4_3_6_SNAPSHOT</Version>\\n        <ClientId>30.5.121.**@25560#-1999745829#-1737591554#458773089270275</ClientId>\\n    </ConnectionList>\\n</Data>\\n<ResultMessage>OK</ResultMessage>\\n<ResultCode>OK</ResultCode>","errorExample":""}]',
      'title' => '判断指定 Group ID 的消费者是否在线',
      'summary' => '判断指定 Group ID 的消费者是否在线，并获取详细的客户端连接的列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryMqSofamqConsumerTimespan' => 
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
          'name' => 'Cell',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需查询的消费端 Group ID 所在的 Cell',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'RZ01A',
          ),
        ),
        1 => 
        array (
          'name' => 'GroupId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需查询的消费端 Group ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'GID_test_group_id',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需查询的消费端 Group ID 所对应的实例 ID。针对有独立命名空间的实例，该参数为必填。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'MQ_INST_111111111111_DOxxxxxx',
          ),
        ),
        3 => 
        array (
          'name' => 'Topic',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需查询的消费端 Group ID 订阅的 Topic',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'test-mq_topic',
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
              'ResultMessage' => 
              array (
                'description' => '结果描述',
                'type' => 'string',
                'example' => 'OK',
              ),
              'ResultCode' => 
              array (
                'description' => '结果码',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '861E6630-AEC0-4B2D-B214-6CB5E44B7F04',
              ),
              'Data' => 
              array (
                'description' => '查询结果',
                'type' => 'object',
                'properties' => 
                array (
                  'MaxTimestamp' => 
                  array (
                    'description' => '整个 Topic 目前存储的最早的消息的时间',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1570761026804',
                  ),
                  'MinTimestamp' => 
                  array (
                    'description' => ' 整个 Topic 目前存储的最新的消息的时间',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1570701231122',
                  ),
                  'InstanceId' => 
                  array (
                    'description' => '需查询的消费端 Group ID 所对应的实例 ID',
                    'type' => 'string',
                    'example' => 'MQ_INST_111111111111_DOxxxxxx',
                  ),
                  'ConsumeTimestamp' => 
                  array (
                    'description' => ' 当前 Group 消费该 Topic 的最新的时间',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1570761026400',
                  ),
                  'Topic' => 
                  array (
                    'description' => '需查询的 Topic 名称',
                    'type' => 'string',
                    'example' => 'test-mq_topic',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"ResultMessage\\": \\"OK\\",\\n  \\"ResultCode\\": \\"OK\\",\\n  \\"RequestId\\": \\"861E6630-AEC0-4B2D-B214-6CB5E44B7F04\\",\\n  \\"Data\\": {\\n    \\"MaxTimestamp\\": 1570761026804,\\n    \\"MinTimestamp\\": 1570701231122,\\n    \\"InstanceId\\": \\"MQ_INST_111111111111_DOxxxxxx\\",\\n    \\"ConsumeTimestamp\\": 1570761026400,\\n    \\"Topic\\": \\"test-mq_topic\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>861E6630-AEC0-4B2D-B214-6CB5E44B7F04</RequestId>\\n<Data>\\n    <MinTimestamp>1570701231122</MinTimestamp>\\n    <ConsumeTimestamp>1570761026400</ConsumeTimestamp>\\n    <InstanceId>MQ_INST_111111111111_DOxxxxxx</InstanceId>\\n    <MaxTimestamp>1570761026804</MaxTimestamp>\\n    <Topic>test-mq_topic</Topic>\\n</Data>\\n<ResultMessage>OK</ResultMessage>\\n<ResultCode>OK</ResultCode>","errorExample":""}]',
      'title' => '查询消费者时间跨度',
      'summary' => '可以查询某个 Topic 当前服务器上存在的消息的最新时间和最早时间，以及查询消费端最近消费的时间。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryMqSofamqDLQMessageByGroupId' => 
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'BeginTime',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '查询范围的起始时间戳

',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '1570723200000',
          ),
        ),
        1 => 
        array (
          'name' => 'Cell',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需要查询的单元',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'RZ01A',
          ),
        ),
        2 => 
        array (
          'name' => 'EndTime',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '查询范围的终止时间戳',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '1570809600000',
          ),
        ),
        3 => 
        array (
          'name' => 'GroupId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需查询的消费端 Group ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'GID_test_group_id',
          ),
        ),
        4 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需查询的消息所对应的实例 ID。针对有独立命名空间的实例，该参数为必填。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'MQ_INST_111111111111_DOxxxxxx',
          ),
        ),
        5 => 
        array (
          'name' => 'PageNum',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '页码',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '1',
          ),
        ),
        6 => 
        array (
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '每页条数',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '10',
          ),
        ),
        7 => 
        array (
          'name' => 'TaskId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '查询任务的 ID。首次查询不需要输入，后续获取消息必须传入，根据前一次的返回结果取出该字段。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '0BC1310300002A9F000021E4D7A48346',
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
              'ResultMessage' => 
              array (
                'description' => '结果描述',
                'type' => 'string',
                'example' => 'OK',
              ),
              'ResultCode' => 
              array (
                'description' => '结果码',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '861E6630-AEC0-4B2D-B214-6CB5E44B7F04',
              ),
              'Data' => 
              array (
                'description' => '消息内容',
                'type' => 'object',
                'properties' => 
                array (
                  'PageNum' => 
                  array (
                    'description' => '页码',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1',
                  ),
                  'PageSize' => 
                  array (
                    'description' => '每页显示条数',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '10',
                  ),
                  'Total' => 
                  array (
                    'description' => '总页数',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '100',
                  ),
                  'TaskId' => 
                  array (
                    'description' => '第一次新建查询时返回的查询任务 ID，用于后续获取消息。',
                    'type' => 'string',
                    'example' => '0BC1310300002A9F000021E4D7A48346',
                  ),
                  'Content' => 
                  array (
                    'description' => '消息的详细信息',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'StoreSize' => 
                        array (
                          'description' => '消息大小',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '407',
                        ),
                        'ReconsumeTimes' => 
                        array (
                          'description' => ' 消息重试消费的次数',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1',
                        ),
                        'StoreTimestamp' => 
                        array (
                          'description' => '被服务端存储的时间戳',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1570761026708',
                        ),
                        'Topic' => 
                        array (
                          'description' => ' 消息的 Topic',
                          'type' => 'string',
                          'example' => 'test-mq_topic',
                        ),
                        'StoreHost' => 
                        array (
                          'description' => '存储该消息的服务器实例',
                          'type' => 'string',
                          'example' => '11.220.***.***:10911',
                        ),
                        'BornTimestamp' => 
                        array (
                          'description' => ' 生成时间戳',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1570761026630',
                        ),
                        'InstanceId' => 
                        array (
                          'description' => ' 实例 ID',
                          'type' => 'string',
                          'example' => 'MQ_INST_111111111111_DOxxxxxx',
                        ),
                        'Body' => 
                        array (
                          'description' => '消息体',
                          'type' => 'string',
                          'example' => 'SGVsbG8gTVEg5raT7oWf5p6D5ai05ayt55iv',
                        ),
                        'MsgId' => 
                        array (
                          'description' => '消息 ID，即 Message ID',
                          'type' => 'string',
                          'example' => '1E0578FE110F18B4AAC235C0C8460BA2',
                        ),
                        'BodyCrc' => 
                        array (
                          'description' => '消息体 CRC 校验值',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '914112295',
                        ),
                        'BornHost' => 
                        array (
                          'description' => '生成该消息的客户端实例',
                          'type' => 'string',
                          'example' => '42.120.**.**:64646',
                        ),
                        'PropertyList' => 
                        array (
                          'description' => '消息属性列表',
                          'type' => 'array',
                          'items' => 
                          array (
                            'type' => 'object',
                            'properties' => 
                            array (
                              'Name' => 
                              array (
                                'description' => 'Key 名',
                                'type' => 'string',
                                'example' => 'TAGS',
                              ),
                              'Value' => 
                              array (
                                'description' => '值',
                                'type' => 'string',
                                'example' => 'TagA',
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
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"ResultMessage\\": \\"OK\\",\\n  \\"ResultCode\\": \\"OK\\",\\n  \\"RequestId\\": \\"861E6630-AEC0-4B2D-B214-6CB5E44B7F04\\",\\n  \\"Data\\": {\\n    \\"PageNum\\": 1,\\n    \\"PageSize\\": 10,\\n    \\"Total\\": 100,\\n    \\"TaskId\\": \\"0BC1310300002A9F000021E4D7A48346\\",\\n    \\"Content\\": [\\n      {\\n        \\"StoreSize\\": 407,\\n        \\"ReconsumeTimes\\": 1,\\n        \\"StoreTimestamp\\": 1570761026708,\\n        \\"Topic\\": \\"test-mq_topic\\",\\n        \\"StoreHost\\": \\"11.220.***.***:10911\\",\\n        \\"BornTimestamp\\": 1570761026630,\\n        \\"InstanceId\\": \\"MQ_INST_111111111111_DOxxxxxx\\",\\n        \\"Body\\": \\"SGVsbG8gTVEg5raT7oWf5p6D5ai05ayt55iv\\",\\n        \\"MsgId\\": \\"1E0578FE110F18B4AAC235C0C8460BA2\\",\\n        \\"BodyCrc\\": 914112295,\\n        \\"BornHost\\": \\"42.120.**.**:64646\\",\\n        \\"PropertyList\\": [\\n          {\\n            \\"Name\\": \\"TAGS\\",\\n            \\"Value\\": \\"TagA\\"\\n          }\\n        ]\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>861E6630-AEC0-4B2D-B214-6CB5E44B7F04</RequestId>\\n<Data>\\n    <TaskId>0BC1310300002A9F000021E4D7A48346</TaskId>\\n    <PageNum>1</PageNum>\\n    <PageSize>10</PageSize>\\n    <Content>\\n        <BornTimestamp>1570761026630</BornTimestamp>\\n        <InstanceId>MQ_INST_111111111111_DOxxxxxx</InstanceId>\\n        <StoreSize>407</StoreSize>\\n        <BornHost>42.120.**.**:64646</BornHost>\\n        <BodyCrc>914112295</BodyCrc>\\n        <Topic>test-mq_topic</Topic>\\n        <Body>SGVsbG8gTVEg5raT7oWf5p6D5ai05ayt55iv</Body>\\n        <ReconsumeTimes>1</ReconsumeTimes>\\n        <MsgId>1E0578FE110F18B4AAC235C0C8460BA2</MsgId>\\n        <StoreHost>11.220.***.***:10911</StoreHost>\\n        <StoreTimestamp>1570761026708</StoreTimestamp>\\n    </Content>\\n    <Content>\\n        <PropertyList>\\n            <Value>TagA</Value>\\n            <Name>TAGS</Name>\\n        </PropertyList>\\n    </Content>\\n    <Total>100</Total>\\n</Data>\\n<ResultMessage>OK</ResultMessage>\\n<ResultCode>OK</ResultCode>","errorExample":""}]',
      'title' => '通过 Group 查询死信消息',
      'summary' => '分页查询指定时间段内 Group ID 内的所有死信消息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryMqSofamqGroupSubDetail' => 
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
          'name' => 'Cell',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需查询的 Group ID 所在的 Cell',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'RZ01A',
          ),
        ),
        1 => 
        array (
          'name' => 'GroupId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需查询的 Group ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'GID_test_group_id',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需查询的 Group ID 所对应的实例 ID。针对有独立命名空间的实例，该参数为必填。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'SOFAMQ_INSTANCE_000001',
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
              'ResultMessage' => 
              array (
                'description' => '结果描述',
                'type' => 'string',
                'example' => 'OK',
              ),
              'ResultCode' => 
              array (
                'description' => '结果码',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '861E6630-AEC0-4B2D-B214-6CB5E44B7F04',
              ),
              'Data' => 
              array (
                'description' => '返回 Data 信息',
                'type' => 'object',
                'properties' => 
                array (
                  'GroupId' => 
                  array (
                    'description' => 'Group ID',
                    'type' => 'string',
                    'example' => 'GID_test_group_id',
                  ),
                  'MessageModel' => 
                  array (
                    'description' => '部署模型，包括 BROADCASTING（广播消费模式 ） 和 CLUSTERING（集群消费模式）两种。',
                    'type' => 'string',
                    'example' => 'CLUSTERING',
                  ),
                  'Online' => 
                  array (
                    'description' => '是否在线',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'SubscriptionDataList' => 
                  array (
                    'description' => '订阅信息列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'SubString' => 
                        array (
                          'description' => '订阅匹配字符串',
                          'type' => 'string',
                          'example' => '*',
                        ),
                        'Online' => 
                        array (
                          'description' => '是否在线',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'Topic' => 
                        array (
                          'description' => 'Topic 名称',
                          'type' => 'string',
                          'example' => 'test-mq_topic',
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
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"ResultMessage\\": \\"OK\\",\\n  \\"ResultCode\\": \\"OK\\",\\n  \\"RequestId\\": \\"861E6630-AEC0-4B2D-B214-6CB5E44B7F04\\",\\n  \\"Data\\": {\\n    \\"GroupId\\": \\"GID_test_group_id\\",\\n    \\"MessageModel\\": \\"CLUSTERING\\",\\n    \\"Online\\": true,\\n    \\"SubscriptionDataList\\": [\\n      {\\n        \\"SubString\\": \\"*\\",\\n        \\"Online\\": true,\\n        \\"Topic\\": \\"test-mq_topic\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>861E6630-AEC0-4B2D-B214-6CB5E44B7F04</RequestId>\\n<Data>\\n    <MessageModel>CLUSTERING</MessageModel>\\n    <SubscriptionDataList>\\n        <SubString>*</SubString>\\n        <Online>true</Online>\\n        <Topic>test-mq_topic</Topic>\\n    </SubscriptionDataList>\\n    <Online>true</Online>\\n    <GroupId>GID_test_group_id</GroupId>\\n</Data>\\n<ResultMessage>OK</ResultMessage>\\n<ResultCode>OK</ResultCode>","errorExample":""}]',
      'title' => '查询 Group 的订阅关系',
      'summary' => '如果 Group ID 对应的消费者实例不在线，则查不到数据。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryMqSofamqMessageByKey' => 
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
          'name' => 'Cell',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需查询的消息所在的单元',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'RZ01A  ',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需查询的消息所对应的实例 ID。针对有独立命名空间的实例，该参数为必填。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'MQ_INST_111111111111_DOxxxxxx',
          ),
        ),
        2 => 
        array (
          'name' => 'Key',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需查询的消息的 Message Key',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'messageKey1',
          ),
        ),
        3 => 
        array (
          'name' => 'Topic',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需查询的消息的 Topic',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'test-mq_topic	',
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
              'ResultMessage' => 
              array (
                'description' => '结果描述',
                'type' => 'string',
                'example' => 'OK',
              ),
              'ResultCode' => 
              array (
                'description' => '结果码',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '861E6630-AEC0-4B2D-B214-6CB5E44B7F04',
              ),
              'Data' => 
              array (
                'description' => '查询结果',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'StoreSize' => 
                    array (
                      'description' => '消息大小',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '407',
                    ),
                    'ReconsumeTimes' => 
                    array (
                      'description' => ' 消息重试消费的次数',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1',
                    ),
                    'StoreTimestamp' => 
                    array (
                      'description' => '被服务端存储的时间戳',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1570761026708',
                    ),
                    'Topic' => 
                    array (
                      'description' => ' 消息的 Topic',
                      'type' => 'string',
                      'example' => 'test-mq_topic',
                    ),
                    'StoreHost' => 
                    array (
                      'description' => '存储该消息的服务器实例',
                      'type' => 'string',
                      'example' => '11.220.***.***:10911',
                    ),
                    'BornTimestamp' => 
                    array (
                      'description' => ' 生成时间戳',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1570761026630',
                    ),
                    'InstanceId' => 
                    array (
                      'description' => ' 实例 ID',
                      'type' => 'string',
                      'example' => 'MQ_INST_111111111111_DOxxxxxx',
                    ),
                    'Body' => 
                    array (
                      'description' => '消息体',
                      'type' => 'string',
                      'example' => 'SGVsbG8gTVEg5raT7oWf5p6D5ai05ayt55iv',
                    ),
                    'MsgId' => 
                    array (
                      'description' => '消息 ID，即 Message ID',
                      'type' => 'string',
                      'example' => '1E0578FE110F18B4AAC235C0C8460BA2',
                    ),
                    'BodyCrc' => 
                    array (
                      'description' => '消息体 CRC 校验值',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '914112295',
                    ),
                    'BornHost' => 
                    array (
                      'description' => '生成该消息的客户端实例',
                      'type' => 'string',
                      'example' => '42.120.**.**:64646',
                    ),
                    'PropertyList' => 
                    array (
                      'description' => '消息属性列表',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Name' => 
                          array (
                            'description' => 'Key 名',
                            'type' => 'string',
                            'example' => 'TAGS',
                          ),
                          'Value' => 
                          array (
                            'description' => '值',
                            'type' => 'string',
                            'example' => 'TagA',
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
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"ResultMessage\\": \\"OK\\",\\n  \\"ResultCode\\": \\"OK\\",\\n  \\"RequestId\\": \\"861E6630-AEC0-4B2D-B214-6CB5E44B7F04\\",\\n  \\"Data\\": [\\n    {\\n      \\"StoreSize\\": 407,\\n      \\"ReconsumeTimes\\": 1,\\n      \\"StoreTimestamp\\": 1570761026708,\\n      \\"Topic\\": \\"test-mq_topic\\",\\n      \\"StoreHost\\": \\"11.220.***.***:10911\\",\\n      \\"BornTimestamp\\": 1570761026630,\\n      \\"InstanceId\\": \\"MQ_INST_111111111111_DOxxxxxx\\",\\n      \\"Body\\": \\"SGVsbG8gTVEg5raT7oWf5p6D5ai05ayt55iv\\",\\n      \\"MsgId\\": \\"1E0578FE110F18B4AAC235C0C8460BA2\\",\\n      \\"BodyCrc\\": 914112295,\\n      \\"BornHost\\": \\"42.120.**.**:64646\\",\\n      \\"PropertyList\\": [\\n        {\\n          \\"Name\\": \\"TAGS\\",\\n          \\"Value\\": \\"TagA\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<RequestId>861E6630-AEC0-4B2D-B214-6CB5E44B7F04</RequestId>\\n<Data>\\n    <BornTimestamp>1570761026630</BornTimestamp>\\n    <InstanceId>MQ_INST_111111111111_DOxxxxxx</InstanceId>\\n    <StoreSize>407</StoreSize>\\n    <BornHost>42.120.**.**:64646</BornHost>\\n    <BodyCrc>914112295</BodyCrc>\\n    <Topic>test-mq_topic</Topic>\\n    <Body>SGVsbG8gTVEg5raT7oWf5p6D5ai05ayt55iv</Body>\\n    <ReconsumeTimes>1</ReconsumeTimes>\\n    <MsgId>1E0578FE110F18B4AAC235C0C8460BA2</MsgId>\\n    <StoreHost>11.220.***.***:10911</StoreHost>\\n    <StoreTimestamp>1570761026708</StoreTimestamp>\\n</Data>\\n<Data>\\n    <PropertyList>\\n        <Value>TagA</Value>\\n        <Name>TAGS</Name>\\n    </PropertyList>\\n</Data>\\n<ResultMessage>OK</ResultMessage>\\n<ResultCode>OK</ResultCode>","errorExample":""}]',
      'title' => '通过消息 Key 查询消息',
      'summary' => '模糊查询。由于业务方的 Message Key 可能不唯一，所以查询结果可能为多条。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryMqSofamqMessageByTopic' => 
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
          'name' => 'BeginTime',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => ' 查询范围的起始时间戳',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '1570723200000',
          ),
        ),
        1 => 
        array (
          'name' => 'Cell',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需查询的单元',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'RZ01A',
          ),
        ),
        2 => 
        array (
          'name' => 'EndTime',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '查询范围的终止时间戳',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '1570809600000',
          ),
        ),
        3 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需查询的消息所对应的实例 ID。针对有独立命名空间的实例，该参数为必填。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'MQ_INST_111111111111_DOxxxxxx	 ',
          ),
        ),
        4 => 
        array (
          'name' => 'PageNum',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '页码',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '1',
          ),
        ),
        5 => 
        array (
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '每页显示条数',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '20',
          ),
        ),
        6 => 
        array (
          'name' => 'TaskId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '查询任务的 ID。首次查询不需要输入，后续取消息必须传入，根据前一次的返回结果取出该字段。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '0BC1310300002A9F000021E4D7A48346',
          ),
        ),
        7 => 
        array (
          'name' => 'Topic',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需查询的消息的 Topic 名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'test-mq_topic	 ',
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
              'ResultMessage' => 
              array (
                'description' => '结果描述',
                'type' => 'string',
                'example' => 'OK',
              ),
              'ResultCode' => 
              array (
                'description' => '结果码',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '861E6630-AEC0-4B2D-B214-6CB5E44B7F04',
              ),
              'Data' => 
              array (
                'description' => '分页查询Message',
                'type' => 'object',
                'properties' => 
                array (
                  'PageNum' => 
                  array (
                    'description' => '页码',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1',
                  ),
                  'PageSize' => 
                  array (
                    'description' => '每页显示条数',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '10',
                  ),
                  'Total' => 
                  array (
                    'description' => '总页数',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '100',
                  ),
                  'TaskId' => 
                  array (
                    'description' => '第一次新建查询时返回的查询任务 ID，用于后续获取消息。',
                    'type' => 'string',
                    'example' => '0BC1310300002A9F000021E4D7A48346',
                  ),
                  'Content' => 
                  array (
                    'description' => '消息的详细信息',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'StoreSize' => 
                        array (
                          'description' => '消息大小',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '407',
                        ),
                        'ReconsumeTimes' => 
                        array (
                          'description' => ' 消息重试消费的次数',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1',
                        ),
                        'StoreTimestamp' => 
                        array (
                          'description' => '被服务端存储的时间戳',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1570761026708',
                        ),
                        'Topic' => 
                        array (
                          'description' => ' 消息的 Topic',
                          'type' => 'string',
                          'example' => 'test-mq_topic',
                        ),
                        'StoreHost' => 
                        array (
                          'description' => '存储该消息的服务器实例',
                          'type' => 'string',
                          'example' => '11.220.***.***:10911',
                        ),
                        'BornTimestamp' => 
                        array (
                          'description' => ' 生成时间戳',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1570761026630',
                        ),
                        'InstanceId' => 
                        array (
                          'description' => ' 实例 ID',
                          'type' => 'string',
                          'example' => 'MQ_INST_111111111111_DOxxxxxx',
                        ),
                        'Body' => 
                        array (
                          'description' => '消息体',
                          'type' => 'string',
                          'example' => 'SGVsbG8gTVEg5raT7oWf5p6D5ai05ayt55iv',
                        ),
                        'MsgId' => 
                        array (
                          'description' => '消息 ID，即 Message ID',
                          'type' => 'string',
                          'example' => '1E0578FE110F18B4AAC235C0C8460BA2',
                        ),
                        'BodyCrc' => 
                        array (
                          'description' => '消息体 CRC 校验值',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '914112295',
                        ),
                        'BornHost' => 
                        array (
                          'description' => '生成该消息的客户端实例',
                          'type' => 'string',
                          'example' => '42.120.**.**:64646',
                        ),
                        'PropertyList' => 
                        array (
                          'description' => '消息属性列表',
                          'type' => 'array',
                          'items' => 
                          array (
                            'type' => 'object',
                            'properties' => 
                            array (
                              'Name' => 
                              array (
                                'description' => 'Key 名',
                                'type' => 'string',
                                'example' => 'TAGS',
                              ),
                              'Value' => 
                              array (
                                'description' => '值',
                                'type' => 'string',
                                'example' => 'TagA',
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
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"ResultMessage\\": \\"OK\\",\\n  \\"ResultCode\\": \\"OK\\",\\n  \\"RequestId\\": \\"861E6630-AEC0-4B2D-B214-6CB5E44B7F04\\",\\n  \\"Data\\": {\\n    \\"PageNum\\": 1,\\n    \\"PageSize\\": 10,\\n    \\"Total\\": 100,\\n    \\"TaskId\\": \\"0BC1310300002A9F000021E4D7A48346\\",\\n    \\"Content\\": [\\n      {\\n        \\"StoreSize\\": 407,\\n        \\"ReconsumeTimes\\": 1,\\n        \\"StoreTimestamp\\": 1570761026708,\\n        \\"Topic\\": \\"test-mq_topic\\",\\n        \\"StoreHost\\": \\"11.220.***.***:10911\\",\\n        \\"BornTimestamp\\": 1570761026630,\\n        \\"InstanceId\\": \\"MQ_INST_111111111111_DOxxxxxx\\",\\n        \\"Body\\": \\"SGVsbG8gTVEg5raT7oWf5p6D5ai05ayt55iv\\",\\n        \\"MsgId\\": \\"1E0578FE110F18B4AAC235C0C8460BA2\\",\\n        \\"BodyCrc\\": 914112295,\\n        \\"BornHost\\": \\"42.120.**.**:64646\\",\\n        \\"PropertyList\\": [\\n          {\\n            \\"Name\\": \\"TAGS\\",\\n            \\"Value\\": \\"TagA\\"\\n          }\\n        ]\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>861E6630-AEC0-4B2D-B214-6CB5E44B7F04</RequestId>\\n<Data>\\n    <TaskId>0BC1310300002A9F000021E4D7A48346</TaskId>\\n    <PageNum>1</PageNum>\\n    <PageSize>10</PageSize>\\n    <Content>\\n        <BornTimestamp>1570761026630</BornTimestamp>\\n        <InstanceId>MQ_INST_111111111111_DOxxxxxx</InstanceId>\\n        <StoreSize>407</StoreSize>\\n        <BornHost>42.120.**.**:64646</BornHost>\\n        <BodyCrc>914112295</BodyCrc>\\n        <Topic>test-mq_topic</Topic>\\n        <Body>SGVsbG8gTVEg5raT7oWf5p6D5ai05ayt55iv</Body>\\n        <ReconsumeTimes>1</ReconsumeTimes>\\n        <MsgId>1E0578FE110F18B4AAC235C0C8460BA2</MsgId>\\n        <StoreHost>11.220.***.***:10911</StoreHost>\\n        <StoreTimestamp>1570761026708</StoreTimestamp>\\n    </Content>\\n    <Content>\\n        <PropertyList>\\n            <Value>TagA</Value>\\n            <Name>TAGS</Name>\\n        </PropertyList>\\n    </Content>\\n    <Total>100</Total>\\n</Data>\\n<ResultMessage>OK</ResultMessage>\\n<ResultCode>OK</ResultCode>","errorExample":""}]',
      'title' => '查询 Topic 消息',
      'summary' => '通过传入 Topic 名称和时间段，分页查询指定时间段内 Topic 内的所有消息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryMqSofamqTraceByMsgKey' => 
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
          'name' => 'BeginTime',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => ' 查询的时间范围的起始时间点',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '1570852800',
          ),
        ),
        1 => 
        array (
          'name' => 'Cell',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需要查询的单元',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'RZ01A',
          ),
        ),
        2 => 
        array (
          'name' => 'EndTime',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '查询的时间范围的结束时间点',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '1570968000',
          ),
        ),
        3 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => ' 需查询的消息的 Topic 所对应的实例 ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'MQ_INST_111111111111_DOxxxxxx	',
          ),
        ),
        4 => 
        array (
          'name' => 'MsgKey',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => ' 需查询的消息的 Message Key',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ORDERID_100',
          ),
        ),
        5 => 
        array (
          'name' => 'Topic',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需查询的消息的 Topic',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
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
            'type' => 'object',
            'properties' => 
            array (
              'ResultMessage' => 
              array (
                'description' => '结果描述',
                'type' => 'string',
                'example' => 'OK',
              ),
              'ResultCode' => 
              array (
                'description' => '结果码',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '861E6630-AEC0-4B2D-B214-6CB5E44B7F04',
              ),
              'QueryId' => 
              array (
                'description' => '该查询任务的 ID。可根据该任务 ID，再调用 GetMqSofamqTraceResult 接口获取详细结果。',
                'type' => 'string',
                'example' => '272967562652883649157096685****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"ResultMessage\\": \\"OK\\",\\n  \\"ResultCode\\": \\"OK\\",\\n  \\"RequestId\\": \\"861E6630-AEC0-4B2D-B214-6CB5E44B7F04\\",\\n  \\"QueryId\\": \\"272967562652883649157096685****\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>861E6630-AEC0-4B2D-B214-6CB5E44B7F04</RequestId>\\n<QueryId>272967562652883649157096685****</QueryId>\\n<ResultMessage>OK</ResultMessage>\\n<ResultCode>OK</ResultCode>","errorExample":""}]',
      'title' => '根据 Key 查询消息轨迹',
      'summary' => '根据 Message Key 查询消息的投递轨迹信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryMqSofamqTraceByTopic' => 
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
          'name' => 'BeginTime',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '查询的时间范围的起始时间点',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '1568033253',
          ),
        ),
        1 => 
        array (
          'name' => 'Cell',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需要查询的单元',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'RZ01A',
          ),
        ),
        2 => 
        array (
          'name' => 'EndTime',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '查询的时间范围的结束时间点',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '1568133253',
          ),
        ),
        3 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '实例 ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'MQ_INST_111111111111_DOxxxxxx',
          ),
        ),
        4 => 
        array (
          'name' => 'Topic',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需查询的消息的 Topic',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'TP_xxx',
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
              'ResultMessage' => 
              array (
                'description' => '结果描述',
                'type' => 'string',
                'example' => 'OK',
              ),
              'ResultCode' => 
              array (
                'description' => '结果码',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '861E6630-AEC0-4B2D-B214-6CB5E44B7F04',
              ),
              'QueryId' => 
              array (
                'description' => '该消息轨迹查询任务的 ID',
                'type' => 'string',
                'example' => '272967562652883649157096685****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"ResultMessage\\": \\"OK\\",\\n  \\"ResultCode\\": \\"OK\\",\\n  \\"RequestId\\": \\"861E6630-AEC0-4B2D-B214-6CB5E44B7F04\\",\\n  \\"QueryId\\": \\"272967562652883649157096685****\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>861E6630-AEC0-4B2D-B214-6CB5E44B7F04</RequestId>\\n<QueryId>272967562652883649157096685****</QueryId>\\n<ResultMessage>OK</ResultMessage>\\n<ResultCode>OK</ResultCode>","errorExample":""}]',
      'title' => '创建消息轨迹查询任务',
      'summary' => '通过传入 Topic 名称创建消息轨迹查询任务，得到该查询任务的 ID。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ResendMqSofamqDLQMessageBatch' => 
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
          'name' => 'Cell',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需要查询的单元',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'RZ01A',
          ),
        ),
        1 => 
        array (
          'name' => 'GroupId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需查询的消费端 Group ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'GID_test_group_id',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需查询消息所对应的实例 ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'MQ_INST_111111111111_DOxxxxxx',
          ),
        ),
        3 => 
        array (
          'name' => 'MsgIds',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需重发的消息的 ID，即 Message ID，多个消息使用英文逗号分隔',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1E0578FE110F18B4AAC235C0C******,1E0578FE110F18B4AAC235C0C******',
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
              'ResultMessage' => 
              array (
                'description' => '结果描述',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Data' => 
              array (
                'description' => '发送失败的消息的 ID，即 Message ID',
                'type' => 'string',
                'example' => '1E0578FE110F18B4AAC235C0C******,1E0578FE110F18B4AAC235C0C******',
              ),
              'ResultCode' => 
              array (
                'description' => '结果码',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '861E6630-AEC0-4B2D-B214-6CB5E44B7F04',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"ResultMessage\\": \\"OK\\",\\n  \\"Data\\": \\"1E0578FE110F18B4AAC235C0C******,1E0578FE110F18B4AAC235C0C******\\",\\n  \\"ResultCode\\": \\"OK\\",\\n  \\"RequestId\\": \\"861E6630-AEC0-4B2D-B214-6CB5E44B7F04\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>861E6630-AEC0-4B2D-B214-6CB5E44B7F04</RequestId>\\n<Data>1E0578FE110F18B4AAC235C0C******,1E0578FE110F18B4AAC235C0C******</Data>\\n<ResultMessage>OK</ResultMessage>\\n<ResultCode>OK</ResultCode>","errorExample":""}]',
      'title' => '批量重发死信消息',
      'summary' => '批量重发指定 Message ID 的死信消息，使这些消息能够被 Consumer 再次消费。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ResendMqSofamqDLQMessageById' => 
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
          'name' => 'Cell',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需要查询的单元',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'RZ01A',
          ),
        ),
        1 => 
        array (
          'name' => 'GroupId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需查询的消费端 Group ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'GID_test_group_id	 ',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需查询消息所对应的实例 ID。针对有独立命名空间的实例，该参数为必填。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'MQ_INST_111111111111_DOxxxxxx	 ',
          ),
        ),
        3 => 
        array (
          'name' => 'MsgId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需查询的消息的 ID，即 Message ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1E0578FE110F18B4AAC235C0C******	 ',
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
              'ResultMessage' => 
              array (
                'description' => '结果描述',
                'type' => 'string',
                'example' => 'OK',
              ),
              'ResultCode' => 
              array (
                'description' => '结果码',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '861E6630-AEC0-4B2D-B214-6CB5E44B7F04',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"ResultMessage\\": \\"OK\\",\\n  \\"ResultCode\\": \\"OK\\",\\n  \\"RequestId\\": \\"861E6630-AEC0-4B2D-B214-6CB5E44B7F04\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>861E6630-AEC0-4B2D-B214-6CB5E44B7F04</RequestId>\\n<ResultMessage>OK</ResultMessage>\\n<ResultCode>OK</ResultCode>","errorExample":""}]',
      'title' => '重发死信消息',
      'summary' => '使死信消息复活，让消息能够被 Consumer 再消费一次。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ResetMqSofamqConsumerOffset' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Cell',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需要查询的单元。

',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'RZ01A',
          ),
        ),
        1 => 
        array (
          'name' => 'GroupId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需查询的消费端 Group ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'GID_test_consumer_id',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需查询的 Group ID 所对应的实例 ID。针对有独立命名空间的实例，该参数为必填。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'MQ_INST_111111111111_DOxxxxxx',
          ),
        ),
        3 => 
        array (
          'name' => 'ResetTimestamp',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '重置位点到指定的时间戳，仅在 Type 为 1 时生效。单位：毫秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'docRequired' => false,
            'example' => '1568033253000',
          ),
        ),
        4 => 
        array (
          'name' => 'Topic',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需重置位点的 Topic 名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'test-mq-topic	',
          ),
        ),
        5 => 
        array (
          'name' => 'Type',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '消息清理类型，取值说明如下：
- 0：清除所有消息。
- 1：清理到指定时间。
',
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
              'ResultMessage' => 
              array (
                'description' => '结果描述',
                'type' => 'string',
                'example' => 'OK',
              ),
              'ResultCode' => 
              array (
                'description' => '结果码',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'description' => '请求 ID',
                'type' => 'string',
                'example' => '861E6630-AEC0-4B2D-B214-6CB5E44B7F04',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"ResultMessage\\": \\"OK\\",\\n  \\"ResultCode\\": \\"OK\\",\\n  \\"RequestId\\": \\"861E6630-AEC0-4B2D-B214-6CB5E44B7F04\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>861E6630-AEC0-4B2D-B214-6CB5E44B7F04</RequestId>\\n<ResultMessage>OK</ResultMessage>\\n<ResultCode>OK</ResultCode>","errorExample":""}]',
      'title' => '重置消费位点',
      'summary' => '重置指定的 Group ID 的消费位点到指定时间戳。一般用于清理堆积消息，或者回溯消费。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateMqSofamqTopic' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需创建的 Topic 所对应的实例 ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '000001',
          ),
        ),
        1 => 
        array (
          'name' => 'MessageType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '消息类型。取值说明如下：0：普通消息；1：分区顺序消息；2：全局顺序消息；4：事务消息；5：定时/延时消息。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '0',
          ),
        ),
        2 => 
        array (
          'name' => 'Remark',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'Topic 的备注信息',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '测试',
          ),
        ),
        3 => 
        array (
          'name' => 'Topic',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需创建的 Topic 的名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
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
            'type' => 'object',
            'properties' => 
            array (
              'ResultMessage' => 
              array (
                'description' => '结果描述',
                'type' => 'string',
                'example' => 'OK',
              ),
              'ResultCode' => 
              array (
                'description' => '结果码',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '861E6630-AEC0-4B2D-B214-6CB5E44B7F04',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"ResultMessage\\": \\"OK\\",\\n  \\"ResultCode\\": \\"OK\\",\\n  \\"RequestId\\": \\"861E6630-AEC0-4B2D-B214-6CB5E44B7F04\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>861E6630-AEC0-4B2D-B214-6CB5E44B7F04</RequestId>\\n<ResultMessage>OK</ResultMessage>\\n<ResultCode>OK</ResultCode>","errorExample":""}]',
      'title' => '在指定环境实例下创建一个 Topic',
      'summary' => '需要指定消息类型与 Topic 名称。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UpdateMqSofamqTopic' => 
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
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需更新读写权限的 Topic 所对应的实例 ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '000001',
          ),
        ),
        1 => 
        array (
          'name' => 'Perm',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '设置该 Topic 的读写模式。取值说明：6：同时支持读写；4：禁写；2：禁读。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '6',
          ),
        ),
        2 => 
        array (
          'name' => 'Topic',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需更新读写权限的 Topic 名称。一个用户下不可重复。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
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
            'type' => 'object',
            'properties' => 
            array (
              'ResultMessage' => 
              array (
                'description' => '结果描述',
                'type' => 'string',
                'example' => 'OK',
              ),
              'ResultCode' => 
              array (
                'description' => '结果码',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '861E6630-AEC0-4B2D-B214-6CB5E44B7F04',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"ResultMessage\\": \\"OK\\",\\n  \\"ResultCode\\": \\"OK\\",\\n  \\"RequestId\\": \\"861E6630-AEC0-4B2D-B214-6CB5E44B7F04\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>861E6630-AEC0-4B2D-B214-6CB5E44B7F04</RequestId>\\n<ResultMessage>OK</ResultMessage>\\n<ResultCode>OK</ResultCode>","errorExample":""}]',
      'title' => '更新 Topic 的读写权限',
      'summary' => '用于更新指定 Topic 的读写权限配置。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UpdateMqSofamqTopicRemark' => 
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
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '实例 ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'MQ_INST_111111111111_DOxxxxxx	 ',
          ),
        ),
        1 => 
        array (
          'name' => 'Remark',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'Topic 描述信息',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'test',
          ),
        ),
        2 => 
        array (
          'name' => 'Topic',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需更新的 Topic 名称，一个用户下不可重复。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
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
            'type' => 'object',
            'properties' => 
            array (
              'ResultMessage' => 
              array (
                'description' => '结果描述',
                'type' => 'string',
                'example' => 'OK',
              ),
              'ResultCode' => 
              array (
                'description' => '结果码',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '861E6630-AEC0-4B2D-B214-6CB5E44B7F04',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"ResultMessage\\": \\"OK\\",\\n  \\"ResultCode\\": \\"OK\\",\\n  \\"RequestId\\": \\"861E6630-AEC0-4B2D-B214-6CB5E44B7F04\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>861E6630-AEC0-4B2D-B214-6CB5E44B7F04</RequestId>\\n<ResultMessage>OK</ResultMessage>\\n<ResultCode>OK</ResultCode>","errorExample":""}]',
      'title' => '更新 Topic 的信息',
      'summary' => '用来更新或修改 Topic 的描述信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeCasComputers' => 
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'CurrentPage',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '分页参数，第几页',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'docRequired' => false,
            'example' => '21',
          ),
        ),
        1 => 
        array (
          'name' => 'Name',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '名称',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'opscenter',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '每页大小',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'docRequired' => false,
            'example' => '100',
          ),
        ),
        3 => 
        array (
          'name' => 'Workspace',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '工作空间',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'shfinpre',
          ),
        ),
        4 => 
        array (
          'name' => 'AppServiceIdsRepeatList',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '应用服务id列表',
            'type' => 'array',
            'items' => 
            array (
              'description' => '应用服务id列表',
              'type' => 'string',
              'required' => false,
              'example' => '2144098938',
            ),
            'required' => false,
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
            'type' => 'object',
            'properties' => 
            array (
              'CurrentPage' => 
              array (
                'description' => '返回结果的当前页码。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '16',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'DB5EB9EB-8690-570B-8A7F-41FF1C89C02E',
              ),
              'ResultMessage' => 
              array (
                'type' => 'string',
              ),
              'ResultCode' => 
              array (
                'type' => 'string',
              ),
              'PageSize' => 
              array (
                'type' => 'integer',
                'format' => 'int64',
              ),
              'TotalCount' => 
              array (
                'description' => '总数',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '75',
              ),
              'Data' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'CreationTime' => 
                    array (
                      'type' => 'string',
                    ),
                    'SerialNumber' => 
                    array (
                      'type' => 'string',
                    ),
                    'VpcId' => 
                    array (
                      'type' => 'string',
                    ),
                    'PrivateIp' => 
                    array (
                      'type' => 'string',
                    ),
                    'UtcCreate' => 
                    array (
                      'type' => 'string',
                    ),
                    'ProviderId' => 
                    array (
                      'type' => 'string',
                    ),
                    'ImageIaasId' => 
                    array (
                      'type' => 'string',
                    ),
                    'ImageId' => 
                    array (
                      'type' => 'string',
                    ),
                    'SpecIaasId' => 
                    array (
                      'type' => 'string',
                    ),
                    'DeployMode' => 
                    array (
                      'type' => 'string',
                    ),
                    'IaasId' => 
                    array (
                      'type' => 'string',
                    ),
                    'Initialized' => 
                    array (
                      'description' => '是否已初始化。',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'AutoRenewPeriod' => 
                    array (
                      'type' => 'integer',
                      'format' => 'int64',
                    ),
                    'PaasStatus' => 
                    array (
                      'type' => 'string',
                    ),
                    'InstanceChargeType' => 
                    array (
                      'type' => 'string',
                    ),
                    'VSwitchIaasId' => 
                    array (
                      'type' => 'string',
                    ),
                    'WorkspaceId' => 
                    array (
                      'type' => 'string',
                    ),
                    'ImageName' => 
                    array (
                      'type' => 'string',
                    ),
                    'PublicIp' => 
                    array (
                      'type' => 'string',
                    ),
                    'ZoneId' => 
                    array (
                      'type' => 'string',
                    ),
                    'CpuShared' => 
                    array (
                      'type' => 'boolean',
                    ),
                    'IaasType' => 
                    array (
                      'type' => 'string',
                    ),
                    'Status' => 
                    array (
                      'type' => 'string',
                    ),
                    'OsBit' => 
                    array (
                      'type' => 'integer',
                      'format' => 'int64',
                    ),
                    'IaasStatus' => 
                    array (
                      'type' => 'string',
                    ),
                    'NetworkType' => 
                    array (
                      'type' => 'string',
                    ),
                    'Password' => 
                    array (
                      'type' => 'string',
                    ),
                    'Bandwidth' => 
                    array (
                      'type' => 'integer',
                      'format' => 'int64',
                    ),
                    'Description' => 
                    array (
                      'type' => 'string',
                    ),
                    'UtcModified' => 
                    array (
                      'type' => 'string',
                    ),
                    'AppId' => 
                    array (
                      'type' => 'string',
                    ),
                    'OsVersion' => 
                    array (
                      'type' => 'string',
                    ),
                    'LastOpsType' => 
                    array (
                      'type' => 'string',
                    ),
                    'Memory' => 
                    array (
                      'type' => 'integer',
                      'format' => 'int64',
                    ),
                    'Name' => 
                    array (
                      'type' => 'string',
                    ),
                    'CommonImage' => 
                    array (
                      'type' => 'boolean',
                    ),
                    'AutoRenew' => 
                    array (
                      'type' => 'boolean',
                    ),
                    'TenantId2' => 
                    array (
                      'type' => 'string',
                    ),
                    'Os' => 
                    array (
                      'type' => 'string',
                    ),
                    'RegionId' => 
                    array (
                      'type' => 'string',
                    ),
                    'IoOptimized' => 
                    array (
                      'type' => 'boolean',
                    ),
                    'Cpu' => 
                    array (
                      'type' => 'integer',
                      'format' => 'int64',
                    ),
                    'ElasticIp' => 
                    array (
                      'type' => 'string',
                    ),
                    'ExpiredTime' => 
                    array (
                      'type' => 'string',
                    ),
                    'ThreadsPerCore' => 
                    array (
                      'type' => 'integer',
                      'format' => 'int64',
                    ),
                    'Id' => 
                    array (
                      'type' => 'string',
                    ),
                    'LastOpsOrderId' => 
                    array (
                      'type' => 'string',
                    ),
                    'TenantId' => 
                    array (
                      'type' => 'string',
                    ),
                    'DataDisks' => 
                    array (
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Type' => 
                          array (
                            'type' => 'string',
                          ),
                          'Status' => 
                          array (
                            'type' => 'string',
                          ),
                          'EnableAutoSnapshot' => 
                          array (
                            'type' => 'boolean',
                          ),
                          'UtcCreate' => 
                          array (
                            'type' => 'string',
                          ),
                          'IaasId' => 
                          array (
                            'type' => 'string',
                          ),
                          'ProviderId' => 
                          array (
                            'type' => 'string',
                          ),
                          'DeleteAutoSnapshot' => 
                          array (
                            'type' => 'boolean',
                          ),
                          'RegionId' => 
                          array (
                            'type' => 'string',
                          ),
                          'WorkspaceId' => 
                          array (
                            'type' => 'string',
                          ),
                          'UtcModified' => 
                          array (
                            'type' => 'string',
                          ),
                          'Size' => 
                          array (
                            'type' => 'integer',
                            'format' => 'int64',
                          ),
                          'Device' => 
                          array (
                            'type' => 'string',
                          ),
                          'ZoneId' => 
                          array (
                            'type' => 'string',
                          ),
                          'Portable' => 
                          array (
                            'type' => 'boolean',
                          ),
                          'Category' => 
                          array (
                            'type' => 'string',
                          ),
                          'Name' => 
                          array (
                            'type' => 'string',
                          ),
                          'ImageId' => 
                          array (
                            'type' => 'string',
                          ),
                          'DeleteWithComputer' => 
                          array (
                            'type' => 'boolean',
                          ),
                          'Id' => 
                          array (
                            'type' => 'string',
                          ),
                          'TenantId' => 
                          array (
                            'type' => 'string',
                          ),
                          'Computer' => 
                          array (
                            'type' => 'object',
                            'properties' => 
                            array (
                              'Status' => 
                              array (
                                'type' => 'string',
                              ),
                              'IaasId' => 
                              array (
                                'type' => 'string',
                              ),
                              'Name' => 
                              array (
                                'type' => 'string',
                              ),
                              'Id' => 
                              array (
                                'type' => 'string',
                              ),
                            ),
                          ),
                        ),
                      ),
                    ),
                    'Options' => 
                    array (
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Key' => 
                          array (
                            'type' => 'string',
                          ),
                          'Value' => 
                          array (
                            'type' => 'string',
                          ),
                        ),
                      ),
                    ),
                    'Tags' => 
                    array (
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Key' => 
                          array (
                            'type' => 'string',
                          ),
                          'Value' => 
                          array (
                            'type' => 'string',
                          ),
                        ),
                      ),
                    ),
                    'AssignedAppServiceIds' => 
                    array (
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'string',
                      ),
                    ),
                    'AppServiceIds' => 
                    array (
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'string',
                      ),
                    ),
                    'SystemDisk' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Type' => 
                        array (
                          'type' => 'string',
                        ),
                        'Status' => 
                        array (
                          'type' => 'string',
                        ),
                        'EnableAutoSnapshot' => 
                        array (
                          'type' => 'boolean',
                        ),
                        'UtcCreate' => 
                        array (
                          'type' => 'string',
                        ),
                        'IaasId' => 
                        array (
                          'type' => 'string',
                        ),
                        'ProviderId' => 
                        array (
                          'type' => 'string',
                        ),
                        'DeleteAutoSnapshot' => 
                        array (
                          'type' => 'boolean',
                        ),
                        'RegionId' => 
                        array (
                          'type' => 'string',
                        ),
                        'WorkspaceId' => 
                        array (
                          'type' => 'string',
                        ),
                        'UtcModified' => 
                        array (
                          'type' => 'string',
                        ),
                        'Size' => 
                        array (
                          'type' => 'integer',
                          'format' => 'int64',
                        ),
                        'Device' => 
                        array (
                          'type' => 'string',
                        ),
                        'ZoneId' => 
                        array (
                          'type' => 'string',
                        ),
                        'Portable' => 
                        array (
                          'type' => 'boolean',
                        ),
                        'Category' => 
                        array (
                          'type' => 'string',
                        ),
                        'Name' => 
                        array (
                          'type' => 'string',
                        ),
                        'ImageId' => 
                        array (
                          'type' => 'string',
                        ),
                        'DeleteWithComputer' => 
                        array (
                          'type' => 'boolean',
                        ),
                        'Id' => 
                        array (
                          'type' => 'string',
                        ),
                        'TenantId' => 
                        array (
                          'type' => 'string',
                        ),
                        'Computer' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Status' => 
                            array (
                              'type' => 'string',
                            ),
                            'IaasId' => 
                            array (
                              'type' => 'string',
                            ),
                            'Name' => 
                            array (
                              'type' => 'string',
                            ),
                            'Id' => 
                            array (
                              'type' => 'string',
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
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"CurrentPage\\": 16,\\n  \\"RequestId\\": \\"DB5EB9EB-8690-570B-8A7F-41FF1C89C02E\\",\\n  \\"ResultMessage\\": \\"\\",\\n  \\"ResultCode\\": \\"\\",\\n  \\"PageSize\\": 0,\\n  \\"TotalCount\\": 75,\\n  \\"Data\\": [\\n    {\\n      \\"CreationTime\\": \\"\\",\\n      \\"SerialNumber\\": \\"\\",\\n      \\"VpcId\\": \\"\\",\\n      \\"PrivateIp\\": \\"\\",\\n      \\"UtcCreate\\": \\"\\",\\n      \\"ProviderId\\": \\"\\",\\n      \\"ImageIaasId\\": \\"\\",\\n      \\"ImageId\\": \\"\\",\\n      \\"SpecIaasId\\": \\"\\",\\n      \\"DeployMode\\": \\"\\",\\n      \\"IaasId\\": \\"\\",\\n      \\"Initialized\\": true,\\n      \\"AutoRenewPeriod\\": 0,\\n      \\"PaasStatus\\": \\"\\",\\n      \\"InstanceChargeType\\": \\"\\",\\n      \\"VSwitchIaasId\\": \\"\\",\\n      \\"WorkspaceId\\": \\"\\",\\n      \\"ImageName\\": \\"\\",\\n      \\"PublicIp\\": \\"\\",\\n      \\"ZoneId\\": \\"\\",\\n      \\"CpuShared\\": true,\\n      \\"IaasType\\": \\"\\",\\n      \\"Status\\": \\"\\",\\n      \\"OsBit\\": 0,\\n      \\"IaasStatus\\": \\"\\",\\n      \\"NetworkType\\": \\"\\",\\n      \\"Password\\": \\"\\",\\n      \\"Bandwidth\\": 0,\\n      \\"Description\\": \\"\\",\\n      \\"UtcModified\\": \\"\\",\\n      \\"AppId\\": \\"\\",\\n      \\"OsVersion\\": \\"\\",\\n      \\"LastOpsType\\": \\"\\",\\n      \\"Memory\\": 0,\\n      \\"Name\\": \\"\\",\\n      \\"CommonImage\\": true,\\n      \\"AutoRenew\\": true,\\n      \\"TenantId2\\": \\"\\",\\n      \\"Os\\": \\"\\",\\n      \\"RegionId\\": \\"\\",\\n      \\"IoOptimized\\": true,\\n      \\"Cpu\\": 0,\\n      \\"ElasticIp\\": \\"\\",\\n      \\"ExpiredTime\\": \\"\\",\\n      \\"ThreadsPerCore\\": 0,\\n      \\"Id\\": \\"\\",\\n      \\"LastOpsOrderId\\": \\"\\",\\n      \\"TenantId\\": \\"\\",\\n      \\"DataDisks\\": [\\n        {\\n          \\"Type\\": \\"\\",\\n          \\"Status\\": \\"\\",\\n          \\"EnableAutoSnapshot\\": true,\\n          \\"UtcCreate\\": \\"\\",\\n          \\"IaasId\\": \\"\\",\\n          \\"ProviderId\\": \\"\\",\\n          \\"DeleteAutoSnapshot\\": true,\\n          \\"RegionId\\": \\"\\",\\n          \\"WorkspaceId\\": \\"\\",\\n          \\"UtcModified\\": \\"\\",\\n          \\"Size\\": 0,\\n          \\"Device\\": \\"\\",\\n          \\"ZoneId\\": \\"\\",\\n          \\"Portable\\": true,\\n          \\"Category\\": \\"\\",\\n          \\"Name\\": \\"\\",\\n          \\"ImageId\\": \\"\\",\\n          \\"DeleteWithComputer\\": true,\\n          \\"Id\\": \\"\\",\\n          \\"TenantId\\": \\"\\",\\n          \\"Computer\\": {\\n            \\"Status\\": \\"\\",\\n            \\"IaasId\\": \\"\\",\\n            \\"Name\\": \\"\\",\\n            \\"Id\\": \\"\\"\\n          }\\n        }\\n      ],\\n      \\"Options\\": [\\n        {\\n          \\"Key\\": \\"\\",\\n          \\"Value\\": \\"\\"\\n        }\\n      ],\\n      \\"Tags\\": [\\n        {\\n          \\"Key\\": \\"\\",\\n          \\"Value\\": \\"\\"\\n        }\\n      ],\\n      \\"AssignedAppServiceIds\\": [\\n        \\"\\"\\n      ],\\n      \\"AppServiceIds\\": [\\n        \\"\\"\\n      ],\\n      \\"SystemDisk\\": {\\n        \\"Type\\": \\"\\",\\n        \\"Status\\": \\"\\",\\n        \\"EnableAutoSnapshot\\": true,\\n        \\"UtcCreate\\": \\"\\",\\n        \\"IaasId\\": \\"\\",\\n        \\"ProviderId\\": \\"\\",\\n        \\"DeleteAutoSnapshot\\": true,\\n        \\"RegionId\\": \\"\\",\\n        \\"WorkspaceId\\": \\"\\",\\n        \\"UtcModified\\": \\"\\",\\n        \\"Size\\": 0,\\n        \\"Device\\": \\"\\",\\n        \\"ZoneId\\": \\"\\",\\n        \\"Portable\\": true,\\n        \\"Category\\": \\"\\",\\n        \\"Name\\": \\"\\",\\n        \\"ImageId\\": \\"\\",\\n        \\"DeleteWithComputer\\": true,\\n        \\"Id\\": \\"\\",\\n        \\"TenantId\\": \\"\\",\\n        \\"Computer\\": {\\n          \\"Status\\": \\"\\",\\n          \\"IaasId\\": \\"\\",\\n          \\"Name\\": \\"\\",\\n          \\"Id\\": \\"\\"\\n        }\\n      }\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询机器列表',
      'description' => '分页查询机器',
    ),
    'AddMsConfigAttributes' => 
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
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AttributeName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '属性名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'age',
          ),
        ),
        1 => 
        array (
          'name' => 'Desc',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '属性描述信息',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '年龄',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '环境实例 ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'abcdEFGH1234',
          ),
        ),
        3 => 
        array (
          'name' => 'ResourceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '所属的资源自增长 ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '100',
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
              'ResultMessage' => 
              array (
                'description' => '结果描述',
                'type' => 'string',
                'example' => 'OK',
              ),
              'ResultCode' => 
              array (
                'description' => '结果码',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '861E6630-AEC0-4B2D-B214-6CB5E44B7F04',
              ),
              'Attribute' => 
              array (
                'description' => '添加成功的属性结构体',
                'type' => 'object',
                'properties' => 
                array (
                  'InstanceId' => 
                  array (
                    'description' => '实例 ID',
                    'type' => 'string',
                    'example' => 'abcdEFGH1234',
                  ),
                  'AttributeName' => 
                  array (
                    'description' => '属性名',
                    'type' => 'string',
                    'example' => 'switch',
                  ),
                  'Id' => 
                  array (
                    'description' => '属性 ID',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1',
                  ),
                  'Desc' => 
                  array (
                    'description' => '属性描述信息',
                    'type' => 'string',
                    'example' => '活动开关',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"ResultMessage\\": \\"OK\\",\\n  \\"ResultCode\\": \\"OK\\",\\n  \\"RequestId\\": \\"861E6630-AEC0-4B2D-B214-6CB5E44B7F04\\",\\n  \\"Attribute\\": {\\n    \\"InstanceId\\": \\"abcdEFGH1234\\",\\n    \\"AttributeName\\": \\"switch\\",\\n    \\"Id\\": 1,\\n    \\"Desc\\": \\"活动开关\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>357EA602-4A8C-456E-82D9-720C843F8EE4</RequestId>\\n<Attribute>\\n    <Desc>性别</Desc>\\n    <InstanceId>9XP0PS5JQHJU</InstanceId>\\n    <AttributeName>sex</AttributeName>\\n    <Id>11</Id>\\n</Attribute>\\n<ResultCode>OK</ResultCode>","errorExample":""}]',
      'title' => '增加属性元信息',
      'summary' => '在配置文件配置项中增加属性，只有添加属性之后，才能对属性进行推送。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'AddMsConfigResources' => 
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
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '应用名',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'foo',
          ),
        ),
        1 => 
        array (
          'name' => 'Attributes',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '资源的属性信息，以 JSON 字符串格式传入',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '[  {  "attribute_name":"attName",  "desc":"some attribute comment" },  ...  ]',
          ),
        ),
        2 => 
        array (
          'name' => 'Desc',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '资源描述信息',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '测试资源类',
          ),
        ),
        3 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '系统字段：环境实例 ID
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'abcdEFGH1234',
          ),
        ),
        4 => 
        array (
          'name' => 'Region',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '资源类所属的域',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'Alipay',
          ),
        ),
        5 => 
        array (
          'name' => 'ResourceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '资源 ID，类似于配置文件的文件名',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'com.alipay.test.resource',
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
              'ResultMessage' => 
              array (
                'description' => '结果描述',
                'type' => 'string',
                'example' => 'OK',
              ),
              'ResultCode' => 
              array (
                'description' => '结果码',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '861E6630-AEC0-4B2D-B214-6CB5E44B7F04',
              ),
              'Resource' => 
              array (
                'description' => '创建成功的资源信息',
                'type' => 'object',
                'properties' => 
                array (
                  'AppName' => 
                  array (
                    'description' => '应用名',
                    'type' => 'string',
                    'example' => 'drmdemo',
                  ),
                  'Region' => 
                  array (
                    'description' => '资源所属的域',
                    'type' => 'string',
                    'example' => 'Alipay',
                  ),
                  'InstanceId' => 
                  array (
                    'description' => '实例 ID',
                    'type' => 'string',
                    'example' => 'abcdEFGH1234',
                  ),
                  'ResourceId' => 
                  array (
                    'description' => '资源 ID',
                    'type' => 'string',
                    'example' => 'com.alipay.drmResource',
                  ),
                  'Id' => 
                  array (
                    'description' => '资源自增长 ID',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1',
                  ),
                  'Desc' => 
                  array (
                    'description' => '资源描述信息',
                    'type' => 'string',
                    'example' => '活动开关',
                  ),
                  'Attributes' => 
                  array (
                    'description' => '属性列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'InstanceId' => 
                        array (
                          'description' => '实例 ID',
                          'type' => 'string',
                          'example' => 'abcdEFGH1234',
                        ),
                        'AttributeName' => 
                        array (
                          'description' => '属性名',
                          'type' => 'string',
                          'example' => 'switch',
                        ),
                        'Id' => 
                        array (
                          'description' => '属性 ID',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1',
                        ),
                        'Desc' => 
                        array (
                          'description' => '属性描述信息',
                          'type' => 'string',
                          'example' => '活动开关',
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
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"ResultMessage\\": \\"OK\\",\\n  \\"ResultCode\\": \\"OK\\",\\n  \\"RequestId\\": \\"861E6630-AEC0-4B2D-B214-6CB5E44B7F04\\",\\n  \\"Resource\\": {\\n    \\"AppName\\": \\"drmdemo\\",\\n    \\"Region\\": \\"Alipay\\",\\n    \\"InstanceId\\": \\"abcdEFGH1234\\",\\n    \\"ResourceId\\": \\"com.alipay.drmResource\\",\\n    \\"Id\\": 1,\\n    \\"Desc\\": \\"活动开关\\",\\n    \\"Attributes\\": [\\n      {\\n        \\"InstanceId\\": \\"abcdEFGH1234\\",\\n        \\"AttributeName\\": \\"switch\\",\\n        \\"Id\\": 1,\\n        \\"Desc\\": \\"活动开关\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>AD040CD2-9302-4C74-89A5-2AF0C220B1B9</RequestId>\\n<Resource>\\n    <Desc>这是描述</Desc>\\n    <InstanceId>AWHNEX3GFLJT</InstanceId>\\n    <ResourceId>com.alipay.test.resource1</ResourceId>\\n    <Region>Alipay</Region>\\n    <Id>44</Id>\\n    <AppName>someAppName</AppName>\\n</Resource>\\n<ResultCode>OK</ResultCode>","errorExample":""}]',
      'title' => '增加资源元数据',
      'summary' => '资源相当于文件的概念，一个资源下可以有多个属性。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UpdateRMSUnifiedAlarmRule' => 
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Id',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '报警规则id',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'maximum' => '9223372036854775807',
            'minimum' => '0',
            'example' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'Name',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '报警规则名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'TAGS',
          ),
        ),
        2 => 
        array (
          'name' => 'Category',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '规则类型',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'CUSTOM',
          ),
        ),
        3 => 
        array (
          'name' => 'RuleConfig',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '报警规则配置',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '{\\"trafficType\\":\\"i\\",\\"methodName\\":\\"*\\",\\"faultInjectRuleItems\\":[{\\"action\\":{\\"type\\":\\"REJECT\\"},\\"ruleType\\":\\"ABORT\\",\\"configs\\":{\\"faultPercent\\":100}}]} ',
          ),
        ),
        4 => 
        array (
          'name' => 'AlarmNodata',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '报警通知结果数据',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'maximum' => '9223372036854775807',
            'minimum' => '0',
          ),
        ),
        5 => 
        array (
          'name' => 'Level',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '告警等级',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'maximum' => '9223372036854775807',
            'minimum' => '0',
            'example' => '2',
          ),
        ),
        6 => 
        array (
          'name' => 'Emergency',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '应急处理人',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
          ),
        ),
        7 => 
        array (
          'name' => 'EmergencyUrl',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '应急处理链接',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
          ),
        ),
        8 => 
        array (
          'name' => 'PendingHit',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '	触发周期',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'maximum' => '9223372036854775807',
            'minimum' => '0',
          ),
        ),
        9 => 
        array (
          'name' => 'RecoveredHit',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '恢复周期',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'maximum' => '9223372036854775807',
            'minimum' => '0',
          ),
        ),
        10 => 
        array (
          'name' => 'Step',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '检测频率',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'maximum' => '9223372036854775807',
            'minimum' => '0',
            'example' => '5',
          ),
        ),
        11 => 
        array (
          'name' => 'SilenceTime',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '通知静默时间',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'maximum' => '9223372036854775807',
            'minimum' => '0',
            'example' => '900',
          ),
        ),
        12 => 
        array (
          'name' => 'NotifyFiring',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '告警触发时通知 1:勾选 0:不勾选',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'maximum' => '9223372036854775807',
            'minimum' => '0',
          ),
        ),
        13 => 
        array (
          'name' => 'NotifyRecovered',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '告警恢复时通知 1:勾选 0:不勾选',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'maximum' => '9223372036854775807',
            'minimum' => '0',
          ),
        ),
        14 => 
        array (
          'name' => 'NotifyNodata',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '待修改的告警规则的数量',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'maximum' => '9223372036854775807',
            'minimum' => '0',
          ),
        ),
        15 => 
        array (
          'name' => 'NotifyTimeFilterJsonStr',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '查询告警规则的时间范围',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
          ),
        ),
        16 => 
        array (
          'name' => 'Status',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '	
发送状态',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'Firing',
          ),
        ),
        17 => 
        array (
          'name' => 'SuspendedStartTime',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '暂停开始时间',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'docRequired' => false,
          ),
        ),
        18 => 
        array (
          'name' => 'SuspendedEndTime',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '暂停结束时间',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'docRequired' => false,
          ),
        ),
        19 => 
        array (
          'name' => 'SuspendedReason',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '暂停的原因',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
          ),
        ),
        20 => 
        array (
          'name' => 'WorkspaceName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '工作空间名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'prod',
          ),
        ),
        21 => 
        array (
          'name' => 'ChannelsRepeatList',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '告警通知渠道',
            'type' => 'array',
            'items' => 
            array (
              'description' => '告警通知渠道',
              'type' => 'string',
              'required' => false,
            ),
            'required' => true,
            'maxItems' => 100,
          ),
        ),
        22 => 
        array (
          'name' => 'NotifyTarget',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '配额告警通知对象。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '配额告警通知对象。',
              'type' => 'object',
              'properties' => 
              array (
                'SubscriberSource' => 
                array (
                  'description' => '	
订阅者来源',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'LOCAL',
                ),
                'SubscriberType' => 
                array (
                  'description' => '订阅人的类型',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'USER_GROUP',
                ),
                'Subscriber' => 
                array (
                  'description' => '通知人id',
                  'type' => 'string',
                  'required' => true,
                  'example' => '1',
                ),
                'SubscriberUuid' => 
                array (
                  'type' => 'string',
                  'required' => true,
                  'example' => '400',
                ),
                'SubscriberName' => 
                array (
                  'description' => '订阅者名称

',
                  'type' => 'string',
                  'required' => true,
                  'example' => '实人认证-灰度测试',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
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
            'type' => 'object',
            'properties' => 
            array (
              'ResultMessage' => 
              array (
                'type' => 'string',
              ),
              'ResultCode' => 
              array (
                'type' => 'string',
              ),
              'RequestId' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"ResultMessage\\": \\"\\",\\n  \\"ResultCode\\": \\"\\",\\n  \\"RequestId\\": \\"\\"\\n}","type":"json"}]',
    ),
    'CreateRMSUnifiedAlarmRule' => 
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Name',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '报警规则名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'uitest1645783390369',
          ),
        ),
        1 => 
        array (
          'name' => 'Category',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '规则类型',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'CUSTOM',
          ),
        ),
        2 => 
        array (
          'name' => 'RuleConfig',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '规则配置信息',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '{\\"trafficType\\":\\"i\\",\\"methodName\\":\\"*\\",\\"faultInjectRuleItems\\":[{\\"action\\":{\\"type\\":\\"REJECT\\"},\\"ruleType\\":\\"ABORT\\",\\"configs\\":{\\"faultPercent\\":100}}]} ',
          ),
        ),
        3 => 
        array (
          'name' => 'AlarmNodata',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '报警通知结果数据',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'maximum' => '9223372036854775807',
            'minimum' => '0',
          ),
        ),
        4 => 
        array (
          'name' => 'Level',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'Prometheus告警规则的等级。

- P1：一般用于影响核心业务可用性，影响范围很大，可能导致严重后果的重大问题的告警通知。
- P2：一般用于部分业务出错，会对系统可用性造成一定影响，但是影响范围相对有限的问题的告警通知。
- P3：一般用于对可能导致业务出错或者受影响的问题的告警通知，或者在相对重要程度较低的业务发送的告警通知。
- P4： 用于需要通知，但是优先级较低，也不会对业务造成影响的场景发送告警通知。
- 默认：如果不需要区分告警等级，可以使用默认级别。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'maximum' => '9223372036854775807',
            'minimum' => '0',
            'example' => '1',
          ),
        ),
        5 => 
        array (
          'name' => 'Emergency',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '应急处理人',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
          ),
        ),
        6 => 
        array (
          'name' => 'EmergencyUrl',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '应急处理链接',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
          ),
        ),
        7 => 
        array (
          'name' => 'PendingHit',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '	触发周期',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'maximum' => '9223372036854775807',
            'minimum' => '0',
          ),
        ),
        8 => 
        array (
          'name' => 'RecoveredHit',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '恢复周期',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'maximum' => '9223372036854775807',
            'minimum' => '0',
          ),
        ),
        9 => 
        array (
          'name' => 'Step',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '检测频率',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'maximum' => '9223372036854775807',
            'minimum' => '0',
            'example' => '1',
          ),
        ),
        10 => 
        array (
          'name' => 'SilenceTime',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '通知静默时间',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'maximum' => '9223372036854775807',
            'minimum' => '0',
            'example' => '300',
          ),
        ),
        11 => 
        array (
          'name' => 'NotifyFiring',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '告警触发时通知 1:勾选 0:不勾选',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'maximum' => '9223372036854775807',
            'minimum' => '0',
          ),
        ),
        12 => 
        array (
          'name' => 'NotifyRecovered',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '告警恢复时通知 1:勾选 0:不勾选',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'maximum' => '9223372036854775807',
            'minimum' => '0',
          ),
        ),
        13 => 
        array (
          'name' => 'NotifyNodata',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '待删除的订阅数据总量',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'maximum' => '9223372036854775807',
            'minimum' => '0',
          ),
        ),
        14 => 
        array (
          'name' => 'NotifyTimeFilterJsonStr',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '查询告警规则的时间范围',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
          ),
        ),
        15 => 
        array (
          'name' => 'WorkspaceName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '工作空间名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'prod',
          ),
        ),
        16 => 
        array (
          'name' => 'ChannelsRepeatList',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '告警通知渠道',
            'type' => 'array',
            'items' => 
            array (
              'description' => '告警渠道名称',
              'type' => 'string',
              'required' => false,
            ),
            'required' => true,
            'maxItems' => 100,
          ),
        ),
        17 => 
        array (
          'name' => 'NotifyTarget',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '告警通知对象。取值：accountContact。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '告警通知对象。取值：accountContact。',
              'type' => 'object',
              'properties' => 
              array (
                'SubscriberSource' => 
                array (
                  'description' => '	
订阅者来源',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'LOCAL',
                ),
                'SubscriberType' => 
                array (
                  'description' => '订阅者类型',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'USER_GROUP',
                ),
                'Subscriber' => 
                array (
                  'description' => '通知人id',
                  'type' => 'string',
                  'required' => true,
                  'example' => '1',
                ),
                'SubscriberUuid' => 
                array (
                  'type' => 'string',
                  'required' => true,
                  'example' => '400',
                ),
                'SubscriberName' => 
                array (
                  'description' => '告警对象的名称',
                  'type' => 'string',
                  'required' => true,
                  'example' => '实人认证-灰度测试',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
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
            'type' => 'object',
            'properties' => 
            array (
              'ResultMessage' => 
              array (
                'description' => '结果描述',
                'type' => 'string',
                'example' => 'OK',
              ),
              'ResultCode' => 
              array (
                'description' => '结果码',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '5F656C56-F99E-5C1E-AE7F-D9F78AC8D706',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"ResultMessage\\": \\"OK\\",\\n  \\"ResultCode\\": \\"OK\\",\\n  \\"RequestId\\": \\"5F656C56-F99E-5C1E-AE7F-D9F78AC8D706\\"\\n}","type":"json"}]',
      'title' => '创建告警规则',
      'summary' => '创建告警规则。',
    ),
    'DeleteRMSUnifiedAlarmRule' => 
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Id',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '报警规则id',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'maximum' => '9223372036854775807',
            'minimum' => '0',
            'example' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'WorkspaceName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '工作空间名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'prod',
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
              'ResultMessage' => 
              array (
                'description' => '结果描述',
                'type' => 'string',
                'example' => 'OK',
              ),
              'ResultCode' => 
              array (
                'description' => '结果码',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => '861E6630-AEC0-4B2D-B214-6CB5E44B7F04',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"ResultMessage\\": \\"OK\\",\\n  \\"ResultCode\\": \\"OK\\",\\n  \\"RequestId\\": \\"861E6630-AEC0-4B2D-B214-6CB5E44B7F04\\"\\n}","type":"json"}]',
      'title' => '删除告警规则',
      'summary' => '删除告警规则。',
    ),
    'QueryRMSUnifiedAlarmEvent' => 
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'WorkspaceName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '工作空间名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'CurrentPage',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '当前页',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'docRequired' => false,
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '分页大小',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'docRequired' => false,
          ),
        ),
        3 => 
        array (
          'name' => 'AlarmLevel',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '告警级别',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'docRequired' => false,
          ),
        ),
        4 => 
        array (
          'name' => 'Status',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '	
触发状态',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'docRequired' => false,
            'enumValueTitles' => 
            array (
              2 => '告警中',
              4 => '已静默',
              5 => '已恢复',
            ),
          ),
        ),
        5 => 
        array (
          'name' => 'AlarmTargetType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '告警对象类型',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
          ),
        ),
        6 => 
        array (
          'name' => 'Keyword',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '按告警内容查询',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
          ),
        ),
        7 => 
        array (
          'name' => 'StartTime',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '开始时间',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
          ),
        ),
        8 => 
        array (
          'name' => 'EndTime',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '结束时间',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
          ),
        ),
        9 => 
        array (
          'name' => 'AlarmRuleId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '	
告警规则 ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'docRequired' => false,
          ),
        ),
        10 => 
        array (
          'name' => 'AlarmStackInfoJsonStr',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '根据应用栈过滤 json格式 包含字段如下：

datasource_type	STRING	否	["CUSTOM","STACK","TABLE]		
是应用监控，还是自定义监控

datasource	STRING	否	MM@@2000464		
数据源

alarm_target_type	STRING	否	["APP","HOST"]		
应用类型

alarm_target_identify	STRING	否	RMS-monitorprod		
应用名称',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
          ),
        ),
        11 => 
        array (
          'name' => 'AlarmRuleUuid',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '告警规则uuid',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
          ),
        ),
        12 => 
        array (
          'name' => 'AlarmTargetKeyword',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '按告警对象搜索',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
          ),
        ),
        13 => 
        array (
          'name' => 'AlarmStatusRepeatList',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '告警状态',
            'type' => 'array',
            'items' => 
            array (
              'description' => '告警状态',
              'type' => 'integer',
              'format' => 'int64',
              'required' => false,
            ),
            'required' => false,
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
            'type' => 'object',
            'properties' => 
            array (
              'CurrentPage' => 
              array (
                'description' => '当前页',
                'type' => 'integer',
                'format' => 'int64',
              ),
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
              ),
              'ResultMessage' => 
              array (
                'description' => '结果描述',
                'type' => 'string',
              ),
              'ResultCode' => 
              array (
                'description' => '结果码',
                'type' => 'string',
              ),
              'PageSize' => 
              array (
                'description' => '分页大小',
                'type' => 'integer',
                'format' => 'int64',
              ),
              'TotalCount' => 
              array (
                'description' => '总条数',
                'type' => 'integer',
                'format' => 'int64',
              ),
              'UnifiedAlarmEventList' => 
              array (
                'description' => '告警事件详情',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '告警事件详情',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Status' => 
                    array (
                      'description' => '触发状态',
                      'type' => 'integer',
                      'format' => 'int64',
                    ),
                    'AlarmTargetType' => 
                    array (
                      'description' => '告警对象类型',
                      'type' => 'string',
                    ),
                    'AlarmStartTime' => 
                    array (
                      'description' => '告警产生时间',
                      'type' => 'string',
                    ),
                    'SilenceRemainTime' => 
                    array (
                      'description' => '静默剩余时间',
                      'type' => 'integer',
                      'format' => 'int64',
                    ),
                    'DataSourceName' => 
                    array (
                      'description' => '数据源名称',
                      'type' => 'string',
                    ),
                    'AlarmType' => 
                    array (
                      'description' => '	告警类型',
                      'type' => 'string',
                    ),
                    'AlarmRecoverTime' => 
                    array (
                      'description' => '	
告警恢复时间',
                      'type' => 'string',
                    ),
                    'AlarmRuleId' => 
                    array (
                      'description' => '报警规则id',
                      'type' => 'integer',
                      'format' => 'int64',
                    ),
                    'AlarmHistoryId' => 
                    array (
                      'description' => '报警历史id',
                      'type' => 'integer',
                      'format' => 'int64',
                    ),
                    'AlarmContent' => 
                    array (
                      'description' => '报警内容',
                      'type' => 'string',
                    ),
                    'AlarmUrl' => 
                    array (
                      'description' => '告警数据源跳转url',
                      'type' => 'string',
                    ),
                    'AlarmUrlWithDomain' => 
                    array (
                      'description' => '网页的绝对路径，包含域名',
                      'type' => 'string',
                    ),
                    'AlarmTargetDeleted' => 
                    array (
                      'description' => '目标对象是否删除',
                      'type' => 'boolean',
                    ),
                    'AlarmLevel' => 
                    array (
                      'description' => '告警级别',
                      'type' => 'integer',
                      'format' => 'int64',
                    ),
                    'AlarmEventId' => 
                    array (
                      'description' => '告警事件id',
                      'type' => 'string',
                    ),
                    'AlarmTarget' => 
                    array (
                      'description' => '告警对象',
                      'type' => 'string',
                    ),
                    'AlarmHistoryList' => 
                    array (
                      'description' => '报警历史详情列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '报警历史详情',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'AlarmTargetType' => 
                          array (
                            'description' => '告警对象类型',
                            'type' => 'string',
                          ),
                          'Status' => 
                          array (
                            'description' => '触发状态',
                            'type' => 'integer',
                            'format' => 'int64',
                          ),
                          'DataSourceName' => 
                          array (
                            'description' => '数据源名称',
                            'type' => 'string',
                          ),
                          'AlarmType' => 
                          array (
                            'description' => '告警类型',
                            'type' => 'string',
                          ),
                          'GmtModified' => 
                          array (
                            'description' => '修改时间',
                            'type' => 'string',
                          ),
                          'EventId' => 
                          array (
                            'description' => '告警事件id',
                            'type' => 'string',
                          ),
                          'WorkspaceId' => 
                          array (
                            'description' => '工作空间ID',
                            'type' => 'integer',
                            'format' => 'int64',
                          ),
                          'UniqueIdentity' => 
                          array (
                            'description' => '告警规则唯一标识',
                            'type' => 'string',
                          ),
                          'AlarmTime' => 
                          array (
                            'description' => '告警时间',
                            'type' => 'integer',
                            'format' => 'int64',
                          ),
                          'AlarmRuleId' => 
                          array (
                            'description' => '报警规则id',
                            'type' => 'integer',
                            'format' => 'int64',
                          ),
                          'GmtCreate' => 
                          array (
                            'description' => '创建时间',
                            'type' => 'string',
                          ),
                          'AlarmDetail' => 
                          array (
                            'description' => '告警详情',
                            'type' => 'string',
                          ),
                          'AlarmUrl' => 
                          array (
                            'description' => '告警数据源跳转url',
                            'type' => 'string',
                          ),
                          'AlarmContent' => 
                          array (
                            'description' => '报警内容',
                            'type' => 'string',
                          ),
                          'AlarmUrlWithDomain' => 
                          array (
                            'description' => '网页的绝对路径，包含域名',
                            'type' => 'string',
                          ),
                          'AlarmTargetDeleted' => 
                          array (
                            'description' => '目标对象是否删除',
                            'type' => 'boolean',
                          ),
                          'AlarmLevel' => 
                          array (
                            'description' => '告警级别',
                            'type' => 'integer',
                            'format' => 'int64',
                          ),
                          'Id' => 
                          array (
                            'description' => '主键ID',
                            'type' => 'integer',
                            'format' => 'int64',
                          ),
                          'TenantId' => 
                          array (
                            'description' => '租户id',
                            'type' => 'integer',
                            'format' => 'int64',
                          ),
                          'AlarmTarget' => 
                          array (
                            'description' => '告警对象',
                            'type' => 'string',
                          ),
                          'AlarmRuleName' => 
                          array (
                            'description' => '报警规则名称',
                            'type' => 'string',
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
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"CurrentPage\\": 0,\\n  \\"RequestId\\": \\"\\",\\n  \\"ResultMessage\\": \\"\\",\\n  \\"ResultCode\\": \\"\\",\\n  \\"PageSize\\": 0,\\n  \\"TotalCount\\": 0,\\n  \\"UnifiedAlarmEventList\\": [\\n    {\\n      \\"Status\\": 0,\\n      \\"AlarmTargetType\\": \\"\\",\\n      \\"AlarmStartTime\\": \\"\\",\\n      \\"SilenceRemainTime\\": 0,\\n      \\"DataSourceName\\": \\"\\",\\n      \\"AlarmType\\": \\"\\",\\n      \\"AlarmRecoverTime\\": \\"\\",\\n      \\"AlarmRuleId\\": 0,\\n      \\"AlarmHistoryId\\": 0,\\n      \\"AlarmContent\\": \\"\\",\\n      \\"AlarmUrl\\": \\"\\",\\n      \\"AlarmUrlWithDomain\\": \\"\\",\\n      \\"AlarmTargetDeleted\\": true,\\n      \\"AlarmLevel\\": 0,\\n      \\"AlarmEventId\\": \\"\\",\\n      \\"AlarmTarget\\": \\"\\",\\n      \\"AlarmHistoryList\\": [\\n        {\\n          \\"AlarmTargetType\\": \\"\\",\\n          \\"Status\\": 0,\\n          \\"DataSourceName\\": \\"\\",\\n          \\"AlarmType\\": \\"\\",\\n          \\"GmtModified\\": \\"\\",\\n          \\"EventId\\": \\"\\",\\n          \\"WorkspaceId\\": 0,\\n          \\"UniqueIdentity\\": \\"\\",\\n          \\"AlarmTime\\": 0,\\n          \\"AlarmRuleId\\": 0,\\n          \\"GmtCreate\\": \\"\\",\\n          \\"AlarmDetail\\": \\"\\",\\n          \\"AlarmUrl\\": \\"\\",\\n          \\"AlarmContent\\": \\"\\",\\n          \\"AlarmUrlWithDomain\\": \\"\\",\\n          \\"AlarmTargetDeleted\\": true,\\n          \\"AlarmLevel\\": 0,\\n          \\"Id\\": 0,\\n          \\"TenantId\\": 0,\\n          \\"AlarmTarget\\": \\"\\",\\n          \\"AlarmRuleName\\": \\"\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询告警事件历史',
    ),
    'QueryRMSUnifiedAlarmRule' => 
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Keyword',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '告警规则名称模糊搜索',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'Level',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '告警等级',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'docRequired' => false,
          ),
        ),
        2 => 
        array (
          'name' => 'AlarmTargetJsonStr',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '告警对象搜索 json格式 包含字段如下 ：

rule_status	NUMBER	否	1：打开 0:闭合		
启停状态

alarm_status	NUMBER	否	0		
告警状态

only_me	BOOLEAN	否	true, false		
只看我

current_page	NUMBER	否	1		
当前页

page_size	NUMBER	否	3		
页面尺寸

workspace_name	STRING	是	工作区名		
工作区名

rule_id	NUMBER	否			
告警规则id

rule_unique_identity	STRING	否	1234_asdf		
告警唯一标识

category	STRING	是	"自定义"、"pql"		
标识符 区分规则是自定义规则还是pql规则

ref_datasource_type	STRING	否	datasource
		
filter_user_group	NUMBER	否	1		
根据用户组过滤

filter_webhook	NUMBER	否	1		
根据webhook过滤

filter_ding_robot	NUMBER	否	1		
钉钉机器人过滤',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
          ),
        ),
        3 => 
        array (
          'name' => 'RuleStatus',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '启停状态 1：打开 0:闭合',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'docRequired' => false,
          ),
        ),
        4 => 
        array (
          'name' => 'AlarmStatus',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '告警状态',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'docRequired' => false,
          ),
        ),
        5 => 
        array (
          'name' => 'OnlyMe',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '只看我',
            'type' => 'boolean',
            'required' => false,
            'docRequired' => false,
          ),
        ),
        6 => 
        array (
          'name' => 'CurrentPage',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '当前页',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'docRequired' => false,
          ),
        ),
        7 => 
        array (
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '每页大小',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'docRequired' => false,
          ),
        ),
        8 => 
        array (
          'name' => 'WorkspaceName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '工作空间名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
          ),
        ),
        9 => 
        array (
          'name' => 'RuleId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '报警规则id',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'docRequired' => false,
          ),
        ),
        10 => 
        array (
          'name' => 'RuleUniqueIdentity',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '告警唯一标识',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
          ),
        ),
        11 => 
        array (
          'name' => 'Category',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '规则类型',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
          ),
        ),
        12 => 
        array (
          'name' => 'RefDatasourceType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'datasource',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
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
              'CurrentPage' => 
              array (
                'description' => '当前页',
                'type' => 'integer',
                'format' => 'int64',
              ),
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
              ),
              'ResultMessage' => 
              array (
                'description' => '结果描述',
                'type' => 'string',
              ),
              'ResultCode' => 
              array (
                'description' => '结果码',
                'type' => 'string',
              ),
              'PageSize' => 
              array (
                'description' => '每页大小',
                'type' => 'integer',
                'format' => 'int64',
              ),
              'TotalCount' => 
              array (
                'description' => '总条数',
                'type' => 'integer',
                'format' => 'int64',
              ),
              'AlarmRules' => 
              array (
                'description' => '报警规则信息',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '报警规则信息',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Status' => 
                    array (
                      'description' => '启停状态 1：打开 0:闭合',
                      'type' => 'integer',
                      'format' => 'int64',
                    ),
                    'NotifyTplId' => 
                    array (
                      'description' => '通知模板id',
                      'type' => 'integer',
                      'format' => 'int64',
                    ),
                    'Channels' => 
                    array (
                      'description' => '通知渠道 "["ddWebhook","sms","phone","email"]"',
                      'type' => 'string',
                    ),
                    'NotifyFiring' => 
                    array (
                      'description' => '告警触发时通知 1:勾选 0:不勾选',
                      'type' => 'integer',
                      'format' => 'int64',
                    ),
                    'GmtModified' => 
                    array (
                      'description' => '修改时间',
                      'type' => 'string',
                    ),
                    'NotifyEmpty' => 
                    array (
                      'description' => '告警无数据时通知 1:勾选 0:不勾选',
                      'type' => 'integer',
                      'format' => 'int64',
                    ),
                    'Creator' => 
                    array (
                      'description' => '规则创建者',
                      'type' => 'string',
                    ),
                    'NotifyTimeFilter' => 
                    array (
                      'description' => '通知时间',
                      'type' => 'string',
                    ),
                    'Modifier' => 
                    array (
                      'description' => '修改人',
                      'type' => 'string',
                    ),
                    'NotifyRecovered' => 
                    array (
                      'description' => '告警恢复时通知 1:勾选 0:不勾选',
                      'type' => 'integer',
                      'format' => 'int64',
                    ),
                    'SuspendedStartTime' => 
                    array (
                      'description' => '暂停开始时间',
                      'type' => 'integer',
                      'format' => 'int64',
                    ),
                    'Deleted' => 
                    array (
                      'description' => '软删除',
                      'type' => 'integer',
                      'format' => 'int64',
                    ),
                    'SuspendedReason' => 
                    array (
                      'description' => '暂停的原因',
                      'type' => 'string',
                    ),
                    'PendingHit' => 
                    array (
                      'description' => '	触发周期',
                      'type' => 'integer',
                      'format' => 'int64',
                    ),
                    'Name' => 
                    array (
                      'description' => '规则名称',
                      'type' => 'string',
                    ),
                    'RecoveredHit' => 
                    array (
                      'description' => '恢复周期',
                      'type' => 'integer',
                      'format' => 'int64',
                    ),
                    'AlarmEmpty' => 
                    array (
                      'description' => '指标无数据触发告警 是个开关 1:打开 0:关闭',
                      'type' => 'integer',
                      'format' => 'int64',
                    ),
                    'SilenceTime' => 
                    array (
                      'description' => '通知静默时间',
                      'type' => 'integer',
                      'format' => 'int64',
                    ),
                    'AlarmStatus' => 
                    array (
                      'description' => '告警状态',
                      'type' => 'integer',
                      'format' => 'int64',
                    ),
                    'Emergency' => 
                    array (
                      'description' => '应急处理人',
                      'type' => 'string',
                    ),
                    'SourceId' => 
                    array (
                      'description' => '标识告警规则迁移之前的 ID',
                      'type' => 'string',
                    ),
                    'SuspendedEndTime' => 
                    array (
                      'description' => '暂停结束时间',
                      'type' => 'integer',
                      'format' => 'int64',
                    ),
                    'Step' => 
                    array (
                      'description' => '检测频率',
                      'type' => 'integer',
                      'format' => 'int64',
                    ),
                    'WorkspaceId' => 
                    array (
                      'description' => '工作空间id',
                      'type' => 'integer',
                      'format' => 'int64',
                    ),
                    'UniqueIdentity' => 
                    array (
                      'description' => '告警规则唯一标识',
                      'type' => 'string',
                    ),
                    'TimeZone' => 
                    array (
                      'description' => '时区',
                      'type' => 'string',
                    ),
                    'EmergencyUrl' => 
                    array (
                      'description' => '应急处理链接',
                      'type' => 'string',
                    ),
                    'GmtCreate' => 
                    array (
                      'description' => '创建时间',
                      'type' => 'string',
                    ),
                    'Category' => 
                    array (
                      'description' => '规则类型',
                      'type' => 'string',
                    ),
                    'Level' => 
                    array (
                      'description' => '告警级别',
                      'type' => 'integer',
                      'format' => 'int64',
                    ),
                    'Id' => 
                    array (
                      'description' => '主键id',
                      'type' => 'integer',
                      'format' => 'int64',
                    ),
                    'TenantId' => 
                    array (
                      'description' => '租户id',
                      'type' => 'integer',
                      'format' => 'int64',
                    ),
                    'RuleConfig' => 
                    array (
                      'description' => '规则配置信息',
                      'type' => 'string',
                    ),
                    'ConditionsDes' => 
                    array (
                      'description' => '告警触发条件',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '告警触发条件',
                        'type' => 'string',
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
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServerInernalError',
            'errorMessage' => 'A server internal error occurred while processing your request. Contact the administrator.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"CurrentPage\\": 0,\\n  \\"RequestId\\": \\"\\",\\n  \\"ResultMessage\\": \\"\\",\\n  \\"ResultCode\\": \\"\\",\\n  \\"PageSize\\": 0,\\n  \\"TotalCount\\": 0,\\n  \\"AlarmRules\\": [\\n    {\\n      \\"Status\\": 0,\\n      \\"NotifyTplId\\": 0,\\n      \\"Channels\\": \\"\\",\\n      \\"NotifyFiring\\": 0,\\n      \\"GmtModified\\": \\"\\",\\n      \\"NotifyEmpty\\": 0,\\n      \\"Creator\\": \\"\\",\\n      \\"NotifyTimeFilter\\": \\"\\",\\n      \\"Modifier\\": \\"\\",\\n      \\"NotifyRecovered\\": 0,\\n      \\"SuspendedStartTime\\": 0,\\n      \\"Deleted\\": 0,\\n      \\"SuspendedReason\\": \\"\\",\\n      \\"PendingHit\\": 0,\\n      \\"Name\\": \\"\\",\\n      \\"RecoveredHit\\": 0,\\n      \\"AlarmEmpty\\": 0,\\n      \\"SilenceTime\\": 0,\\n      \\"AlarmStatus\\": 0,\\n      \\"Emergency\\": \\"\\",\\n      \\"SourceId\\": \\"\\",\\n      \\"SuspendedEndTime\\": 0,\\n      \\"Step\\": 0,\\n      \\"WorkspaceId\\": 0,\\n      \\"UniqueIdentity\\": \\"\\",\\n      \\"TimeZone\\": \\"\\",\\n      \\"EmergencyUrl\\": \\"\\",\\n      \\"GmtCreate\\": \\"\\",\\n      \\"Category\\": \\"\\",\\n      \\"Level\\": 0,\\n      \\"Id\\": 0,\\n      \\"TenantId\\": 0,\\n      \\"RuleConfig\\": \\"\\",\\n      \\"ConditionsDes\\": [\\n        \\"\\"\\n      ]\\n    }\\n  ]\\n}","type":"json"}]',
    ),
    'QueryRMSUnifiedAlarmHistory' => 
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'WorkspaceName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '工作空间名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'SOFAStack杭州金区-生产',
          ),
        ),
        1 => 
        array (
          'name' => 'Start',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '查询开始时间，格式为Unix时间戳，单位为毫秒。

> 查询开始时间需在数据库实例SQL洞察存储时长范围内，最大不能早于当前时间90天。
',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '1668911820000',
          ),
        ),
        2 => 
        array (
          'name' => 'End',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '查询数据的终止日期，格式为Unix时间戳，单位为毫秒。

> 查询结束时间需晚于查询开始时间，最晚只能查询到当天凌晨0点的数据。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '1662516900000',
          ),
        ),
        3 => 
        array (
          'name' => 'CurrentPage',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '当前页',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'docRequired' => false,
            'example' => '2',
          ),
        ),
        4 => 
        array (
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '分页参数，分页大小',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'docRequired' => false,
            'example' => '10',
          ),
        ),
        5 => 
        array (
          'name' => 'AlarmTargetType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '告警对象类型',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'APP',
          ),
        ),
        6 => 
        array (
          'name' => 'AlarmTarget',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '告警对象',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'PlanetKms',
          ),
        ),
        7 => 
        array (
          'name' => 'AlarmLevel',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '告警级别',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'docRequired' => false,
            'example' => '1',
          ),
        ),
        8 => 
        array (
          'name' => 'Status',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '告警状态',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'docRequired' => false,
            'example' => '1',
          ),
        ),
        9 => 
        array (
          'name' => 'AlarmStackInfoJsonStr',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '根据应用过滤告警历史json格式 包含字段如下：

datasource_type	STRING	否	["CUSTOM","STACK","TABLE]		
是应用监控，还是自定义监控

datasource	STRING	否	MM@@2000464		
数据源

alarm_target_type	STRING	否	["APP","HOST"]		
应用类型

alarm_target_identify	STRING	否	RMS-monitorprod		
应用名称',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '{\\"DatasourceType\\":\\"STACK\\",\\"AlarmTargetType\\":\\"APP\\",\\"AlarmTargetIdentify\\":\\"prod-app-twc-universal\\"}',
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
              'CurrentPage' => 
              array (
                'description' => '当前页',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '5',
              ),
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => 'CB2B427A-E370-5599-8872-A249F8EFD859',
              ),
              'ResultMessage' => 
              array (
                'description' => '结果描述',
                'type' => 'string',
                'example' => 'workspace not found with name TWCProd, tenant_id 0008528286',
              ),
              'ResultCode' => 
              array (
                'description' => '结果码',
                'type' => 'string',
                'example' => 'OK',
              ),
              'PageSize' => 
              array (
                'description' => '分页参数，分页大小',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '10',
              ),
              'TotalCount' => 
              array (
                'description' => '总条数',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '120',
              ),
              'AlarmHistories' => 
              array (
                'description' => '报警历史对象列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '报警历史详情',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'AlarmTargetType' => 
                    array (
                      'description' => '告警对象类型',
                      'type' => 'string',
                      'example' => 'APP',
                    ),
                    'Status' => 
                    array (
                      'description' => '报警状态',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1',
                    ),
                    'DataSourceName' => 
                    array (
                      'description' => '数据源名称',
                      'type' => 'string',
                      'example' => 'ant_intel_hz',
                    ),
                    'AlarmType' => 
                    array (
                      'description' => '	
告警类型',
                      'type' => 'string',
                      'example' => 'APP',
                    ),
                    'GmtModified' => 
                    array (
                      'description' => '最后修改时间',
                      'type' => 'string',
                      'example' => '2020-04-02 21:53:24',
                    ),
                    'EventId' => 
                    array (
                      'description' => '告警事件id',
                      'type' => 'string',
                      'example' => '355402_1670998540000_598877597',
                    ),
                    'WorkspaceId' => 
                    array (
                      'description' => '工作空间ID',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1',
                    ),
                    'UniqueIdentity' => 
                    array (
                      'description' => '告警规则唯一标识',
                      'type' => 'string',
                      'example' => '174851af-6c56-4d8b-8cc7-9f998e752f09',
                    ),
                    'AlarmTime' => 
                    array (
                      'description' => '告警时间',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1671088115000',
                    ),
                    'AlarmRuleId' => 
                    array (
                      'description' => '报警规则id',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '860',
                    ),
                    'GmtCreate' => 
                    array (
                      'description' => '创建时间',
                      'type' => 'string',
                      'example' => '2020-04-02 21:53:24',
                    ),
                    'AlarmDetail' => 
                    array (
                      'description' => '告警详情',
                      'type' => 'string',
                      'example' => '[{"datasource":"basic@@machinePortCheck","tags":[{"key":"cluster","value":"default-kernel"},{"key":"hostname","value":"100.83.13.115"},{"key":"port","value":"22"}],"conditionValues":[{"condition":{"metric":"total","metricDisplayName":"总量","type":"Current","compareOperation":"LT","N":0,"threshold":10000.0,"conditionDesc":"total 当前时间 > 10000.0"},"value":1.0}]}]',
                    ),
                    'AlarmUrl' => 
                    array (
                      'description' => '告警数据源跳转url',
                      'type' => 'string',
                      'example' => '/rms/sofacloud/sofa_app/view/a?workspaceName=b&tenantName=c',
                    ),
                    'AlarmContent' => 
                    array (
                      'description' => '报警内容',
                      'type' => 'string',
                      'example' => '[测试实例] [cluster:default-kernel hostname:100.83.13.115 port:22 cluster:antcloud-middlewaredev-import-cluster-38742336 namespace:kube-system] 物理机端口探测/总量 当前时间的值 1.000 < 10000.00',
                    ),
                    'AlarmUrlWithDomain' => 
                    array (
                      'description' => '	
网页的绝对路径，包含域名',
                      'type' => 'string',
                      'example' => 'http://www.alipay.com/rms/sofacloud/sofa_app/view/a?workspaceName=b&tenantName=c',
                    ),
                    'AlarmTargetDeleted' => 
                    array (
                      'description' => '	
目标对象是否删除',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'AlarmLevel' => 
                    array (
                      'description' => '告警级别',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1',
                    ),
                    'Id' => 
                    array (
                      'description' => '属性 ID',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '3376',
                    ),
                    'TenantId' => 
                    array (
                      'description' => '租户id',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1',
                    ),
                    'AlarmTarget' => 
                    array (
                      'description' => '告警对象',
                      'type' => 'string',
                      'example' => 'sibei_1229_1',
                    ),
                    'AlarmRuleName' => 
                    array (
                      'description' => '	
告警规则名',
                      'type' => 'string',
                      'example' => 'bvtcase测试',
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
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"CurrentPage\\": 5,\\n  \\"RequestId\\": \\"CB2B427A-E370-5599-8872-A249F8EFD859\\",\\n  \\"ResultMessage\\": \\"workspace not found with name TWCProd, tenant_id 0008528286\\",\\n  \\"ResultCode\\": \\"OK\\",\\n  \\"PageSize\\": 10,\\n  \\"TotalCount\\": 120,\\n  \\"AlarmHistories\\": [\\n    {\\n      \\"AlarmTargetType\\": \\"APP\\",\\n      \\"Status\\": 1,\\n      \\"DataSourceName\\": \\"ant_intel_hz\\",\\n      \\"AlarmType\\": \\"APP\\",\\n      \\"GmtModified\\": \\"2020-04-02 21:53:24\\",\\n      \\"EventId\\": \\"355402_1670998540000_598877597\\",\\n      \\"WorkspaceId\\": 1,\\n      \\"UniqueIdentity\\": \\"174851af-6c56-4d8b-8cc7-9f998e752f09\\",\\n      \\"AlarmTime\\": 1671088115000,\\n      \\"AlarmRuleId\\": 860,\\n      \\"GmtCreate\\": \\"2020-04-02 21:53:24\\",\\n      \\"AlarmDetail\\": \\"[{\\\\\\"datasource\\\\\\":\\\\\\"basic@@machinePortCheck\\\\\\",\\\\\\"tags\\\\\\":[{\\\\\\"key\\\\\\":\\\\\\"cluster\\\\\\",\\\\\\"value\\\\\\":\\\\\\"default-kernel\\\\\\"},{\\\\\\"key\\\\\\":\\\\\\"hostname\\\\\\",\\\\\\"value\\\\\\":\\\\\\"100.83.13.115\\\\\\"},{\\\\\\"key\\\\\\":\\\\\\"port\\\\\\",\\\\\\"value\\\\\\":\\\\\\"22\\\\\\"}],\\\\\\"conditionValues\\\\\\":[{\\\\\\"condition\\\\\\":{\\\\\\"metric\\\\\\":\\\\\\"total\\\\\\",\\\\\\"metricDisplayName\\\\\\":\\\\\\"总量\\\\\\",\\\\\\"type\\\\\\":\\\\\\"Current\\\\\\",\\\\\\"compareOperation\\\\\\":\\\\\\"LT\\\\\\",\\\\\\"N\\\\\\":0,\\\\\\"threshold\\\\\\":10000.0,\\\\\\"conditionDesc\\\\\\":\\\\\\"total 当前时间 > 10000.0\\\\\\"},\\\\\\"value\\\\\\":1.0}]}]\\",\\n      \\"AlarmUrl\\": \\"/rms/sofacloud/sofa_app/view/a?workspaceName=b&tenantName=c\\",\\n      \\"AlarmContent\\": \\"[测试实例] [cluster:default-kernel hostname:100.83.13.115 port:22 cluster:antcloud-middlewaredev-import-cluster-38742336 namespace:kube-system] 物理机端口探测/总量 当前时间的值 1.000 < 10000.00\\",\\n      \\"AlarmUrlWithDomain\\": \\"http://www.alipay.com/rms/sofacloud/sofa_app/view/a?workspaceName=b&tenantName=c\\",\\n      \\"AlarmTargetDeleted\\": false,\\n      \\"AlarmLevel\\": 1,\\n      \\"Id\\": 3376,\\n      \\"TenantId\\": 1,\\n      \\"AlarmTarget\\": \\"sibei_1229_1\\",\\n      \\"AlarmRuleName\\": \\"bvtcase测试\\"\\n    }\\n  ]\\n}","type":"json"}]',
    ),
    'QueryRMSUnifiedAlarmNotifyHistory' => 
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Status',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '	
发送状态',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'docRequired' => false,
            'enumValueTitles' => 
            array (
              0 => '失败',
              1 => '成功',
            ),
            'example' => '0',
          ),
        ),
        1 => 
        array (
          'name' => 'Channel',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '	
通知渠道',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'DD_WEBHOOK',
          ),
        ),
        2 => 
        array (
          'name' => 'Subscriber',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '通知人id',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'CurrentPage',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '当前页',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'docRequired' => false,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '每页条数',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'docRequired' => false,
            'example' => '20',
          ),
        ),
        5 => 
        array (
          'name' => 'WorkspaceName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '工作区名',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'acgatewayprod',
          ),
        ),
        6 => 
        array (
          'name' => 'EventId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '	
事件id',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '355400_1670410905000_598877597',
          ),
        ),
        7 => 
        array (
          'name' => 'StartTime',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '	
开始时间',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '1660730580000',
          ),
        ),
        8 => 
        array (
          'name' => 'EndTime',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '结束时间',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '1668160800150',
          ),
        ),
        9 => 
        array (
          'name' => 'Keyword',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '查询告警内容',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'asd',
          ),
        ),
        10 => 
        array (
          'name' => 'AlarmRuleId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '告警规则 ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'docRequired' => false,
            'example' => '22',
          ),
        ),
        11 => 
        array (
          'name' => 'AlarmStatus',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '告警状态',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'docRequired' => false,
            'enumValueTitles' => 
            array (
              2 => '告警中',
              4 => '已静默',
              5 => '已恢复',
            ),
            'example' => '2',
          ),
        ),
        12 => 
        array (
          'name' => 'AlarmStackInfoJsonStr',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '根据应用过滤告警历史json格式 包含字段如下：

datasource_type	STRING	否	["CUSTOM","STACK","TABLE]		
是应用监控，还是自定义监控

datasource	STRING	否	MM@@2000464		
数据源

alarm_target_type	STRING	否	["APP","HOST"]		
应用类型

alarm_target_identify	STRING	否	RMS-monitorprod		
应用名称',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '{\\"DatasourceType\\":\\"CUSTOM\\",\\"AlarmTargetType\\":\\"APP\\",\\"AlarmTargetIdentify\\":\\"prod-app-acrbasis\\"，\\"Datasource\\":\\"SPM@@15984\\"}',
          ),
        ),
        13 => 
        array (
          'name' => 'DashboardQueryParamJsonStr',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '大盘告警查询参数',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
          ),
        ),
        14 => 
        array (
          'name' => 'AlarmSubscribers',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '根据通知对象过滤',
            'type' => 'array',
            'items' => 
            array (
              'description' => '通知对象',
              'type' => 'object',
              'properties' => 
              array (
                'SubscriberSource' => 
                array (
                  'description' => '	
订阅者来源',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'LOCAL',
                ),
                'SubscriberType' => 
                array (
                  'description' => '订阅者类型',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'USER_GROUP',
                ),
                'Subscriber' => 
                array (
                  'description' => '订阅者',
                  'type' => 'string',
                  'required' => true,
                  'example' => '1',
                ),
                'SubscriberUuid' => 
                array (
                  'description' => '订阅者uuid',
                  'type' => 'string',
                  'required' => true,
                  'example' => '839f5cf92ab3435385ef3949c001a7a8',
                ),
                'SubscriberName' => 
                array (
                  'description' => '告警对象的名称',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'mike',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
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
            'type' => 'object',
            'properties' => 
            array (
              'CurrentPage' => 
              array (
                'description' => '当前页',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'B4C10721-BD3E-5F45-AF3C-880715462315',
              ),
              'ResultMessage' => 
              array (
                'description' => '结果描述',
                'type' => 'string',
                'example' => 'Rpc error',
              ),
              'ResultCode' => 
              array (
                'description' => '结果码',
                'type' => 'string',
                'example' => 'OK',
              ),
              'PageSize' => 
              array (
                'description' => '每页大小',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '20',
              ),
              'TotalCount' => 
              array (
                'description' => '总条数',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '84',
              ),
              'AlarmNotifyHistories' => 
              array (
                'description' => '报警通知历史',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '报警通知历史',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'AlarmSilenceTime' => 
                    array (
                      'description' => '	
告警静默期',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '20',
                    ),
                    'Status' => 
                    array (
                      'description' => '通知状态',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '0',
                    ),
                    'ErrorMessage' => 
                    array (
                      'description' => '描述消息发送错误原因',
                      'type' => 'string',
                      'example' => 'Specified private IP address is duplicated.',
                    ),
                    'AlarmType' => 
                    array (
                      'description' => '	
告警类型',
                      'type' => 'string',
                      'example' => 'APP',
                    ),
                    'GmtModified' => 
                    array (
                      'description' => '修改时间',
                      'type' => 'string',
                      'example' => '2020-03-18 21:47:32',
                    ),
                    'NotifyContent' => 
                    array (
                      'description' => '消息内容',
                      'type' => 'string',
                    ),
                    'AlarmRuleId' => 
                    array (
                      'description' => '报警规则id',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '5839',
                    ),
                    'Subscriber' => 
                    array (
                      'description' => '订阅人',
                      'type' => 'string',
                      'example' => '400',
                    ),
                    'Channel' => 
                    array (
                      'description' => '通知渠道',
                      'type' => 'string',
                      'example' => 'DD_WEBHOOK',
                    ),
                    'AlarmTargetDeleted' => 
                    array (
                      'description' => '	
目标对象是否删除',
                      'type' => 'boolean',
                    ),
                    'AlarmLevel' => 
                    array (
                      'description' => '告警级别',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1',
                    ),
                    'AlarmEventId' => 
                    array (
                      'description' => '报警事件id',
                      'type' => 'string',
                      'example' => '356454_1670377620000_1650847553',
                    ),
                    'AlarmRuleName' => 
                    array (
                      'description' => '	
告警规则名',
                      'type' => 'string',
                      'example' => 'bvtcase测试',
                    ),
                    'AlarmTargetType' => 
                    array (
                      'description' => '告警对象类型',
                      'type' => 'string',
                      'example' => 'APP',
                    ),
                    'SubscriberType' => 
                    array (
                      'description' => '订阅人的类型',
                      'type' => 'string',
                      'example' => 'USER_GROUP',
                    ),
                    'AlarmStatus' => 
                    array (
                      'description' => '报警状态',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '2',
                    ),
                    'DataSourceName' => 
                    array (
                      'description' => '数据源名称',
                      'type' => 'string',
                      'example' => '交易成功量',
                    ),
                    'AlarmRuleUuid' => 
                    array (
                      'type' => 'string',
                    ),
                    'WorkspaceId' => 
                    array (
                      'description' => '工作空间ID',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1',
                    ),
                    'SubscriberSource' => 
                    array (
                      'description' => '订阅者来源',
                      'type' => 'string',
                      'example' => 'LOCAL',
                    ),
                    'AlarmTime' => 
                    array (
                      'description' => '报警时间。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1671076740000',
                    ),
                    'AggCount' => 
                    array (
                      'description' => '	
聚合条数',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1',
                    ),
                    'AlarmTargetIdentify' => 
                    array (
                      'description' => '告警对象',
                      'type' => 'string',
                      'example' => 'monitorprod',
                    ),
                    'AlarmHistoryId' => 
                    array (
                      'description' => '报警发送记录id',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '27313821',
                    ),
                    'GmtCreate' => 
                    array (
                      'description' => '创建时间',
                      'type' => 'string',
                      'example' => '2020-03-13 02:25:08',
                    ),
                    'AlarmUrl' => 
                    array (
                      'description' => '告警数据源跳转url',
                      'type' => 'string',
                      'example' => '/rms/sofacloud/sofa_app/view/a?workspaceName=b&amp;tenantName=c',
                    ),
                    'AlarmUrlWithDomain' => 
                    array (
                      'description' => '	
网页的绝对路径，包含域名',
                      'type' => 'string',
                      'example' => 'http://www.alipay.com/rms/sofacloud/sofa_app/view/a?workspaceName=b&amp;tenantName=c',
                    ),
                    'TraceId' => 
                    array (
                      'description' => '调用链ID，用于精确查询调用信息。',
                      'type' => 'string',
                      'example' => '0a6481081662012458401682123',
                    ),
                    'Id' => 
                    array (
                      'description' => '属性 ID',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '73738',
                    ),
                    'TenantId' => 
                    array (
                      'description' => '租户ID',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1',
                    ),
                    'SubscriberName' => 
                    array (
                      'description' => '订阅者名称

',
                      'type' => 'string',
                      'example' => 'mike',
                    ),
                  ),
                ),
              ),
              'AlarmNotifySubs' => 
              array (
                'description' => '告警通知历史中对应的通知对象',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '通知对象',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'SubscriberSource' => 
                    array (
                      'description' => '订阅者来源',
                      'type' => 'string',
                      'example' => 'LOCAL',
                    ),
                    'Subscriber' => 
                    array (
                      'description' => '订阅者',
                      'type' => 'string',
                      'example' => '400',
                    ),
                    'SubscriberUuid' => 
                    array (
                      'description' => '订阅者uuid',
                      'type' => 'string',
                      'example' => '839f5cf92ab3435385ef3949c001a7a8',
                    ),
                    'SubscriberType' => 
                    array (
                      'description' => '订阅者类型',
                      'type' => 'string',
                      'example' => 'USER_GROUP',
                    ),
                    'SubscriberName' => 
                    array (
                      'description' => '订阅者名称',
                      'type' => 'string',
                      'example' => 'mike',
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
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"CurrentPage\\": 1,\\n  \\"RequestId\\": \\"B4C10721-BD3E-5F45-AF3C-880715462315\\",\\n  \\"ResultMessage\\": \\"Rpc error\\",\\n  \\"ResultCode\\": \\"OK\\",\\n  \\"PageSize\\": 20,\\n  \\"TotalCount\\": 84,\\n  \\"AlarmNotifyHistories\\": [\\n    {\\n      \\"AlarmSilenceTime\\": 20,\\n      \\"Status\\": 0,\\n      \\"ErrorMessage\\": \\"Specified private IP address is duplicated.\\",\\n      \\"AlarmType\\": \\"APP\\",\\n      \\"GmtModified\\": \\"2020-03-18 21:47:32\\",\\n      \\"NotifyContent\\": \\"\\",\\n      \\"AlarmRuleId\\": 5839,\\n      \\"Subscriber\\": \\"400\\",\\n      \\"Channel\\": \\"DD_WEBHOOK\\",\\n      \\"AlarmTargetDeleted\\": true,\\n      \\"AlarmLevel\\": 1,\\n      \\"AlarmEventId\\": \\"356454_1670377620000_1650847553\\",\\n      \\"AlarmRuleName\\": \\"bvtcase测试\\",\\n      \\"AlarmTargetType\\": \\"APP\\",\\n      \\"SubscriberType\\": \\"USER_GROUP\\",\\n      \\"AlarmStatus\\": 2,\\n      \\"DataSourceName\\": \\"交易成功量\\",\\n      \\"AlarmRuleUuid\\": \\"\\",\\n      \\"WorkspaceId\\": 1,\\n      \\"SubscriberSource\\": \\"LOCAL\\",\\n      \\"AlarmTime\\": 1671076740000,\\n      \\"AggCount\\": 1,\\n      \\"AlarmTargetIdentify\\": \\"monitorprod\\",\\n      \\"AlarmHistoryId\\": 27313821,\\n      \\"GmtCreate\\": \\"2020-03-13 02:25:08\\",\\n      \\"AlarmUrl\\": \\"/rms/sofacloud/sofa_app/view/a?workspaceName=b&amp;tenantName=c\\",\\n      \\"AlarmUrlWithDomain\\": \\"http://www.alipay.com/rms/sofacloud/sofa_app/view/a?workspaceName=b&amp;tenantName=c\\",\\n      \\"TraceId\\": \\"0a6481081662012458401682123\\",\\n      \\"Id\\": 73738,\\n      \\"TenantId\\": 1,\\n      \\"SubscriberName\\": \\"mike\\"\\n    }\\n  ],\\n  \\"AlarmNotifySubs\\": [\\n    {\\n      \\"SubscriberSource\\": \\"LOCAL\\",\\n      \\"Subscriber\\": \\"400\\",\\n      \\"SubscriberUuid\\": \\"839f5cf92ab3435385ef3949c001a7a8\\",\\n      \\"SubscriberType\\": \\"USER_GROUP\\",\\n      \\"SubscriberName\\": \\"mike\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询告警通知历史',
      'summary' => '查询告警通知历史，如钉钉、电话、短信、webhook的通知记录，以及通知状态。',
    ),
    'QueryRMSMetrics' => 
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Start',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '开始时间',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '1636308360000',
          ),
        ),
        1 => 
        array (
          'name' => 'End',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '查询结束时间',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '1632278280000',
          ),
        ),
        2 => 
        array (
          'name' => 'Plugin',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '插件类型',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'enumValueTitles' => 
            array (
              'SEC' => 'SEC',
              'STACK' => 'STACK',
              'MM' => 'MM',
              'SPM' => 'SPM',
              'SM' => 'SM',
            ),
            'example' => 'SM',
          ),
        ),
        3 => 
        array (
          'name' => 'DsId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '监控指标唯一ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2643',
          ),
        ),
        4 => 
        array (
          'name' => 'ContentType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '指标数据类型',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'enumValueTitles' => 
            array (
              'SPM' => 'SPM',
              'KEYSET' => 'KEYSET',
              'SINGLE_KEY_STAT' => 'SINGLE_KEY_STAT',
              'INDEXABLE_MULTI_KEY_STAT' => 'INDEXABLE_MULTI_KEY_STAT',
            ),
            'example' => 'INDEXABLE_MULTI_KEY_STAT',
          ),
        ),
        5 => 
        array (
          'name' => 'WorkspaceName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '工作空间名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'prod',
          ),
        ),
        6 => 
        array (
          'name' => 'PeriodType',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
          ),
        ),
        7 => 
        array (
          'name' => 'FieldsRepeatList',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '指标维度过滤条件，一般可不填',
            'type' => 'array',
            'items' => 
            array (
              'description' => '指标维度过滤条件，一般可不填

',
              'type' => 'string',
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 100,
          ),
        ),
        8 => 
        array (
          'name' => 'Where',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '更多过滤条件',
            'type' => 'array',
            'items' => 
            array (
              'description' => '过滤条件对象',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '过滤 Key',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'app',
                ),
                'Value' => 
                array (
                  'description' => '过滤 Value',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'monitorprod',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
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
            'description' => '监控指标数据',
            'type' => 'object',
            'properties' => 
            array (
              'ResultMessage' => 
              array (
                'description' => '错误信息',
                'type' => 'string',
                'example' => '""',
              ),
              'ResultCode' => 
              array (
                'description' => '返回码',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '38D23571-2FDD-5A3B-AF04-15A30B96D11B',
              ),
              'Result' => 
              array (
                'description' => '返回结果',
                'type' => 'string',
                'example' => '{"success":true,"message":"query ok, time cost: 33ms, pontus@{}","data":[{"tags":{},"datasByTime":{"1646014620000":[18730.0],"1646012400000":[17849.0],"1646010180000":[17860.0],"1646014140000":[18832.0],"1646011920000":[17843.0],"1646013660000":[17799.0],"1646011440000":[17803.0],"1646015400000":[17988.0],"1646013180000":[17851.0],"1646010960000":[17895.0],"1646014920000":[17628.0],"1646012700000":[17937.0],"1646010480000":[17757.0],"1646012580000":[17815.0],"1646014440000":[17785.0],"1646010000000":[17791.0],"1646012100000":[17785.0],"1646013960000":[17895.0],"1646011620000":[17822.0],"1646013480000":[17809.0],"1646015580000":[18780.0],"1646011140000":[17805.0],"1646013000000":[17682.0],"1646015100000":[18924.0],"1646010660000":[17819.0],"1646010540000":[17653.0],"1646014740000":[17848.0],"1646012280000":[17861.0],"1646010060000":[17787.0],"1646014260000":[17770.0],"1646011800000":[17990.0],"1646013780000":[17942.0],"1646011320000":[17749.0],"1646015520000":[18159.0],"1646013300000":[17889.0],"1646010840000":[17755.0],"1646015040000":[18836.0],"1646012820000":[17878.0],"1646010360000":[17829.0],"1646012460000":[17896.0],"1646014560000":[18979.0],"1646009880000":[17798.0],"1646011980000":[17806.0],"1646014080000":[17337.0],"1646011500000":[17801.0],"1646013600000":[17940.0],"1646015700000":[17885.0],"1646015220000":[18172.0],"1646011020000":[17757.0],"1646013120000":[17650.0],"1646012640000":[17825.0],"1646010420000":[17767.0],"1646014380000":[17769.0],"1646012160000":[17806.0],"1646009940000":[17769.0],"1646013900000":[17789.0],"1646011680000":[17808.0],"1646015640000":[17905.0],"1646013420000":[17888.0],"1646011200000":[17782.0],"1646015160000":[17304.0],"1646012940000":[17807.0],"1646010720000":[17821.0],"1646014680000":[17759.0],"1646010240000":[17749.0],"1646012340000":[17826.0],"1646014200000":[18874.0],"1646011860000":[17909.0],"1646013720000":[17905.0],"1646015820000":[null],"1646011380000":[17792.0],"1646013240000":[17841.0],"1646015340000":[17853.0],"1646010900000":[17811.0],"1646012760000":[17831.0],"1646014860000":[18881.0],"1646012520000":[17836.0],"1646014500000":[17888.0],"1646010300000":[17793.0],"1646012040000":[17745.0],"1646009820000":[17785.0],"1646014020000":[18936.0],"1646011560000":[17805.0],"1646015760000":[17891.0],"1646013540000":[17843.0],"1646011080000":[17773.0],"1646015280000":[18916.0],"1646013060000":[17858.0],"1646010600000":[17774.0],"1646014800000":[18913.0],"1646010120000":[17848.0],"1646012220000":[17738.0],"1646014320000":[17758.0],"1646011740000":[17766.0],"1646013840000":[17811.0],"1646011260000":[17764.0],"1646013360000":[17872.0],"1646015460000":[17721.0],"1646010780000":[17763.0],"1646012880000":[17821.0],"1646014980000":[17770.0]},"dataMapByTime":{}}],"ip":"11.124.205.28","attend":{"attends":{"FIN-PAAS-DEV":{"expect":30.0,"actual":30.0}},"attendsByIdc":{"FIN-PAAS-DEV":{"1646015760000":{"expect":2.0,"actual":2.0},"1646015700000":{"expect":2.0,"actual":2.0},"1646015640000":{"expect":2.0,"actual":2.0},"1646015580000":{"expect":2.0,"actual":2.0},"1646015520000":{"expect":2.0,"actual":2.0},"1646015460000":{"expect":2.0,"actual":2.0},"1646015400000":{"expect":2.0,"actual":2.0},"1646015340000":{"expect":2.0,"actual":2.0},"1646015220000":{"expect":2.0,"actual":2.0},"1646015280000":{"expect":2.0,"actual":2.0},"1646015160000":{"expect":2.0,"actual":2.0},"1646015100000":{"expect":2.0,"actual":2.0},"1646015040000":{"expect":2.0,"actual":2.0},"1646014980000":{"expect":2.0,"actual":2.0},"1646014920000":{"expect":2.0,"actual":2.0}}}}}',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"ResultMessage\\": \\"\\\\\\"\\\\\\"\\",\\n  \\"ResultCode\\": \\"OK\\",\\n  \\"RequestId\\": \\"38D23571-2FDD-5A3B-AF04-15A30B96D11B\\",\\n  \\"Result\\": \\"{\\\\\\"success\\\\\\":true,\\\\\\"message\\\\\\":\\\\\\"query ok, time cost: 33ms, pontus@{}\\\\\\",\\\\\\"data\\\\\\":[{\\\\\\"tags\\\\\\":{},\\\\\\"datasByTime\\\\\\":{\\\\\\"1646014620000\\\\\\":[18730.0],\\\\\\"1646012400000\\\\\\":[17849.0],\\\\\\"1646010180000\\\\\\":[17860.0],\\\\\\"1646014140000\\\\\\":[18832.0],\\\\\\"1646011920000\\\\\\":[17843.0],\\\\\\"1646013660000\\\\\\":[17799.0],\\\\\\"1646011440000\\\\\\":[17803.0],\\\\\\"1646015400000\\\\\\":[17988.0],\\\\\\"1646013180000\\\\\\":[17851.0],\\\\\\"1646010960000\\\\\\":[17895.0],\\\\\\"1646014920000\\\\\\":[17628.0],\\\\\\"1646012700000\\\\\\":[17937.0],\\\\\\"1646010480000\\\\\\":[17757.0],\\\\\\"1646012580000\\\\\\":[17815.0],\\\\\\"1646014440000\\\\\\":[17785.0],\\\\\\"1646010000000\\\\\\":[17791.0],\\\\\\"1646012100000\\\\\\":[17785.0],\\\\\\"1646013960000\\\\\\":[17895.0],\\\\\\"1646011620000\\\\\\":[17822.0],\\\\\\"1646013480000\\\\\\":[17809.0],\\\\\\"1646015580000\\\\\\":[18780.0],\\\\\\"1646011140000\\\\\\":[17805.0],\\\\\\"1646013000000\\\\\\":[17682.0],\\\\\\"1646015100000\\\\\\":[18924.0],\\\\\\"1646010660000\\\\\\":[17819.0],\\\\\\"1646010540000\\\\\\":[17653.0],\\\\\\"1646014740000\\\\\\":[17848.0],\\\\\\"1646012280000\\\\\\":[17861.0],\\\\\\"1646010060000\\\\\\":[17787.0],\\\\\\"1646014260000\\\\\\":[17770.0],\\\\\\"1646011800000\\\\\\":[17990.0],\\\\\\"1646013780000\\\\\\":[17942.0],\\\\\\"1646011320000\\\\\\":[17749.0],\\\\\\"1646015520000\\\\\\":[18159.0],\\\\\\"1646013300000\\\\\\":[17889.0],\\\\\\"1646010840000\\\\\\":[17755.0],\\\\\\"1646015040000\\\\\\":[18836.0],\\\\\\"1646012820000\\\\\\":[17878.0],\\\\\\"1646010360000\\\\\\":[17829.0],\\\\\\"1646012460000\\\\\\":[17896.0],\\\\\\"1646014560000\\\\\\":[18979.0],\\\\\\"1646009880000\\\\\\":[17798.0],\\\\\\"1646011980000\\\\\\":[17806.0],\\\\\\"1646014080000\\\\\\":[17337.0],\\\\\\"1646011500000\\\\\\":[17801.0],\\\\\\"1646013600000\\\\\\":[17940.0],\\\\\\"1646015700000\\\\\\":[17885.0],\\\\\\"1646015220000\\\\\\":[18172.0],\\\\\\"1646011020000\\\\\\":[17757.0],\\\\\\"1646013120000\\\\\\":[17650.0],\\\\\\"1646012640000\\\\\\":[17825.0],\\\\\\"1646010420000\\\\\\":[17767.0],\\\\\\"1646014380000\\\\\\":[17769.0],\\\\\\"1646012160000\\\\\\":[17806.0],\\\\\\"1646009940000\\\\\\":[17769.0],\\\\\\"1646013900000\\\\\\":[17789.0],\\\\\\"1646011680000\\\\\\":[17808.0],\\\\\\"1646015640000\\\\\\":[17905.0],\\\\\\"1646013420000\\\\\\":[17888.0],\\\\\\"1646011200000\\\\\\":[17782.0],\\\\\\"1646015160000\\\\\\":[17304.0],\\\\\\"1646012940000\\\\\\":[17807.0],\\\\\\"1646010720000\\\\\\":[17821.0],\\\\\\"1646014680000\\\\\\":[17759.0],\\\\\\"1646010240000\\\\\\":[17749.0],\\\\\\"1646012340000\\\\\\":[17826.0],\\\\\\"1646014200000\\\\\\":[18874.0],\\\\\\"1646011860000\\\\\\":[17909.0],\\\\\\"1646013720000\\\\\\":[17905.0],\\\\\\"1646015820000\\\\\\":[null],\\\\\\"1646011380000\\\\\\":[17792.0],\\\\\\"1646013240000\\\\\\":[17841.0],\\\\\\"1646015340000\\\\\\":[17853.0],\\\\\\"1646010900000\\\\\\":[17811.0],\\\\\\"1646012760000\\\\\\":[17831.0],\\\\\\"1646014860000\\\\\\":[18881.0],\\\\\\"1646012520000\\\\\\":[17836.0],\\\\\\"1646014500000\\\\\\":[17888.0],\\\\\\"1646010300000\\\\\\":[17793.0],\\\\\\"1646012040000\\\\\\":[17745.0],\\\\\\"1646009820000\\\\\\":[17785.0],\\\\\\"1646014020000\\\\\\":[18936.0],\\\\\\"1646011560000\\\\\\":[17805.0],\\\\\\"1646015760000\\\\\\":[17891.0],\\\\\\"1646013540000\\\\\\":[17843.0],\\\\\\"1646011080000\\\\\\":[17773.0],\\\\\\"1646015280000\\\\\\":[18916.0],\\\\\\"1646013060000\\\\\\":[17858.0],\\\\\\"1646010600000\\\\\\":[17774.0],\\\\\\"1646014800000\\\\\\":[18913.0],\\\\\\"1646010120000\\\\\\":[17848.0],\\\\\\"1646012220000\\\\\\":[17738.0],\\\\\\"1646014320000\\\\\\":[17758.0],\\\\\\"1646011740000\\\\\\":[17766.0],\\\\\\"1646013840000\\\\\\":[17811.0],\\\\\\"1646011260000\\\\\\":[17764.0],\\\\\\"1646013360000\\\\\\":[17872.0],\\\\\\"1646015460000\\\\\\":[17721.0],\\\\\\"1646010780000\\\\\\":[17763.0],\\\\\\"1646012880000\\\\\\":[17821.0],\\\\\\"1646014980000\\\\\\":[17770.0]},\\\\\\"dataMapByTime\\\\\\":{}}],\\\\\\"ip\\\\\\":\\\\\\"11.124.205.28\\\\\\",\\\\\\"attend\\\\\\":{\\\\\\"attends\\\\\\":{\\\\\\"FIN-PAAS-DEV\\\\\\":{\\\\\\"expect\\\\\\":30.0,\\\\\\"actual\\\\\\":30.0}},\\\\\\"attendsByIdc\\\\\\":{\\\\\\"FIN-PAAS-DEV\\\\\\":{\\\\\\"1646015760000\\\\\\":{\\\\\\"expect\\\\\\":2.0,\\\\\\"actual\\\\\\":2.0},\\\\\\"1646015700000\\\\\\":{\\\\\\"expect\\\\\\":2.0,\\\\\\"actual\\\\\\":2.0},\\\\\\"1646015640000\\\\\\":{\\\\\\"expect\\\\\\":2.0,\\\\\\"actual\\\\\\":2.0},\\\\\\"1646015580000\\\\\\":{\\\\\\"expect\\\\\\":2.0,\\\\\\"actual\\\\\\":2.0},\\\\\\"1646015520000\\\\\\":{\\\\\\"expect\\\\\\":2.0,\\\\\\"actual\\\\\\":2.0},\\\\\\"1646015460000\\\\\\":{\\\\\\"expect\\\\\\":2.0,\\\\\\"actual\\\\\\":2.0},\\\\\\"1646015400000\\\\\\":{\\\\\\"expect\\\\\\":2.0,\\\\\\"actual\\\\\\":2.0},\\\\\\"1646015340000\\\\\\":{\\\\\\"expect\\\\\\":2.0,\\\\\\"actual\\\\\\":2.0},\\\\\\"1646015220000\\\\\\":{\\\\\\"expect\\\\\\":2.0,\\\\\\"actual\\\\\\":2.0},\\\\\\"1646015280000\\\\\\":{\\\\\\"expect\\\\\\":2.0,\\\\\\"actual\\\\\\":2.0},\\\\\\"1646015160000\\\\\\":{\\\\\\"expect\\\\\\":2.0,\\\\\\"actual\\\\\\":2.0},\\\\\\"1646015100000\\\\\\":{\\\\\\"expect\\\\\\":2.0,\\\\\\"actual\\\\\\":2.0},\\\\\\"1646015040000\\\\\\":{\\\\\\"expect\\\\\\":2.0,\\\\\\"actual\\\\\\":2.0},\\\\\\"1646014980000\\\\\\":{\\\\\\"expect\\\\\\":2.0,\\\\\\"actual\\\\\\":2.0},\\\\\\"1646014920000\\\\\\":{\\\\\\"expect\\\\\\":2.0,\\\\\\"actual\\\\\\":2.0}}}}}\\"\\n}","type":"json"}]',
      'title' => '查询监控指标数据',
      'summary' => '根据指标ID等过滤条件查询监控指标时序数据。',
    ),
    'LogoutMsRegistryService' => 
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
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'ServerIpsRepeatList',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'type' => 'array',
            'items' => 
            array (
              'type' => 'string',
            ),
            'required' => true,
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
            'type' => 'object',
            'properties' => 
            array (
              'ResultMessage' => 
              array (
                'type' => 'string',
              ),
              'ResultCode' => 
              array (
                'type' => 'string',
              ),
              'RequestId' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'UnknowError.SystemError',
            'errorMessage' => 'An unknown error occurred in the system.',
          ),
        ),
      ),
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'sofa.cn-hangzhou.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'sofa.cn-shanghai.aliyuncs.com',
    ),
    2 => 
    array (
      'regionId' => 'cn-hangzhou-finance',
      'endpoint' => 'sofa.cn-hangzhou-finance.aliyuncs.com',
    ),
    3 => 
    array (
      'regionId' => 'cn-shanghai-finance-1',
      'endpoint' => 'sofa.cn-shanghai-finance-1.aliyuncs.com',
    ),
  ),
);
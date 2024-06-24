<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'ROA',
    'product' => 'acm',
    'version' => '2020-02-06',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 56412,
      'title' => '数据',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeImportFileUrl',
        1 => 'DescribeTraceByConfiguration',
      ),
    ),
    1 => 
    array (
      'id' => 56415,
      'title' => '命名空间',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateNamespace',
        1 => 'DeleteNamespace',
        2 => 'UpdateNamespace',
        3 => 'DescribeNamespace',
        4 => 'DescribeNamespaces',
        5 => 'DescribeNamespacesWithCreate',
      ),
    ),
    2 => 
    array (
      'id' => 56422,
      'title' => '配置',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateConfiguration',
        1 => 'CloneConfiguration',
        2 => 'DeleteConfiguration',
        3 => 'DeployConfiguration',
        4 => 'BatchExportConfigurations',
        5 => 'BatchImportConfigurations',
        6 => 'DescribeConfiguration',
        7 => 'CheckConfigurationClone',
        8 => 'CheckConfigurationExport',
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
    'DescribeImportFileUrl' => 
    array (
      'path' => '/diamond-ops/pop/batch/importFileUrl',
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
          'name' => 'ContentType',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
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
              'FileUrl' => 
              array (
                'type' => 'string',
              ),
              'Message' => 
              array (
                'type' => 'string',
              ),
              'RequestId' => 
              array (
                'type' => 'string',
              ),
              'Code' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        401 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceDisabled',
            'errorMessage' => 'You have not activated the ACM service.',
          ),
        ),
      ),
      'responseDemo' => '',
    ),
    'DescribeTraceByConfiguration' => 
    array (
      'path' => '/diamond-ops/pop/trace/getByConfiguration',
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
          'name' => 'DataId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'Group',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
          ),
        ),
        2 => 
        array (
          'name' => 'NamespaceId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
          ),
        ),
        3 => 
        array (
          'name' => 'StartTs',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        4 => 
        array (
          'name' => 'EndTs',
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
              'Message' => 
              array (
                'type' => 'string',
              ),
              'RequestId' => 
              array (
                'type' => 'string',
              ),
              'Traces' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Timestamp' => 
                    array (
                      'type' => 'integer',
                      'format' => 'int64',
                    ),
                    'EventGroups' => 
                    array (
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'EventType' => 
                          array (
                            'type' => 'string',
                          ),
                          'EventDetails' => 
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
                                'Delay' => 
                                array (
                                  'type' => 'string',
                                ),
                                'Ts' => 
                                array (
                                  'type' => 'string',
                                ),
                                'ResponseIp' => 
                                array (
                                  'type' => 'string',
                                ),
                                'Event' => 
                                array (
                                  'type' => 'string',
                                ),
                                'Ext' => 
                                array (
                                  'type' => 'string',
                                ),
                                'DataId' => 
                                array (
                                  'type' => 'string',
                                ),
                                'RequestIp' => 
                                array (
                                  'type' => 'string',
                                ),
                                'LogDate' => 
                                array (
                                  'type' => 'string',
                                ),
                                'HandleIp' => 
                                array (
                                  'type' => 'string',
                                ),
                                'Group' => 
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
              'Code' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        401 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceDisabled',
            'errorMessage' => 'You have not activated the ACM service.',
          ),
        ),
      ),
      'responseDemo' => '',
    ),
    'CreateNamespace' => 
    array (
      'path' => '/diamond-ops/pop/namespace',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Name',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '命名空间名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '测试环境',
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
              'Message' => 
              array (
                'description' => '描述',
                'type' => 'string',
                'example' => 'Success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '6F7CC94A-7711-4873-8848-****',
              ),
              'NamespaceId' => 
              array (
                'description' => '命名空间ID',
                'type' => 'string',
                'example' => '3115d2bf-1f44-47bf-a855-****',
              ),
              'Code' => 
              array (
                'description' => '状态码',
                'type' => 'string',
                'example' => 'OK',
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
            'errorCode' => 'NamespaceNameInvalid',
            'errorMessage' => 'The specified namespace is invalid.',
          ),
        ),
        401 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceDisabled',
            'errorMessage' => 'You have not activated the ACM service.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'NamespaceQuotaExceed',
            'errorMessage' => 'The maximum number of namespaces is exceeded.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"Success\\",\\n  \\"RequestId\\": \\"6F7CC94A-7711-4873-8848-****\\",\\n  \\"NamespaceId\\": \\"3115d2bf-1f44-47bf-a855-****\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>6F7CC94A-7711-4873-8848-FCE2F1795625</RequestId>\\n<Message>Success</Message>\\n<Code>OK</Code>","errorExample":""}]',
      'title' => '创建命名空间',
      'summary' => '创建命名空间。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteNamespace' => 
    array (
      'path' => '/diamond-ops/pop/namespace',
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
          'name' => 'NamespaceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命名空间ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '112300d2-ca66-42ba-b706-****',
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
              'Message' => 
              array (
                'description' => '描述',
                'type' => 'string',
                'example' => 'Success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '611CC94A-7711-4873-8848-****',
              ),
              'Code' => 
              array (
                'description' => '状态码',
                'type' => 'string',
                'example' => 'OK',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        401 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceDisabled',
            'errorMessage' => 'You have not activated the ACM service.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'NamespacePermissionDenied',
            'errorMessage' => 'You are not authorized to operate the namespace.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'NamespaceNotExists',
            'errorMessage' => 'The specified namespace does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'NamespaceInUsage',
            'errorMessage' => 'The specified namespace is being used.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"Success\\",\\n  \\"RequestId\\": \\"611CC94A-7711-4873-8848-****\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>612CC94A-7711-4873-8848-****</RequestId>\\n<Message>Success</Message>\\n<Code>OK</Code>","errorExample":""}]',
      'title' => '删除命名空间',
      'summary' => '删除命名空间。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UpdateNamespace' => 
    array (
      'path' => '/diamond-ops/pop/namespace',
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
          'name' => 'NamespaceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '命名空间ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '710b2fbe-0da3-4388-****',
          ),
        ),
        1 => 
        array (
          'name' => 'NamespaceName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '命名空间名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '测试环境',
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
              'Message' => 
              array (
                'description' => '响应描述',
                'type' => 'string',
                'example' => 'Success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '51193061-ED0D-4EC6-B160-****',
              ),
              'Code' => 
              array (
                'description' => '状态码',
                'type' => 'string',
                'example' => 'OK',
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
            'errorCode' => 'NamespaceNameInvalid',
            'errorMessage' => 'The specified namespace is invalid.',
          ),
        ),
        401 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceDisabled',
            'errorMessage' => 'You have not activated the ACM service.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'NamespacePermissionDenied',
            'errorMessage' => 'You are not authorized to operate the namespace.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"Success\\",\\n  \\"RequestId\\": \\"51193061-ED0D-4EC6-B160-****\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>5E493061-ED0D-4EC6-B160-C069FCBF7941</RequestId>\\n<Message>Success</Message>\\n<Code>OK</Code>","errorExample":""}]',
      'title' => '更新命名空间',
      'summary' => '更新命名空间。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeNamespace' => 
    array (
      'path' => '/diamond-ops/pop/namespace',
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
          'name' => 'NamespaceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命名空间ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '3115d2bf-1f44-47bf-a855-****',
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
              'Message' => 
              array (
                'description' => '响应描述',
                'type' => 'string',
                'example' => 'Success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '3116581E-C664-4D3A-A055-****',
              ),
              'Code' => 
              array (
                'description' => '状态码',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Namespace' => 
              array (
                'description' => '命名空间',
                'type' => 'object',
                'properties' => 
                array (
                  'SecretKey' => 
                  array (
                    'description' => 'ACM专用SecretKey（即将废弃，不建议使用）',
                    'type' => 'string',
                    'example' => '6/eQ0****',
                  ),
                  'AccessKey' => 
                  array (
                    'description' => 'ACM专用AccessKey（即将废弃，不建议使用）',
                    'type' => 'string',
                    'example' => '2c017****',
                  ),
                  'Endpoint' => 
                  array (
                    'description' => '连接点',
                    'type' => 'string',
                    'example' => 'acm.aliyun.com',
                  ),
                  'Name' => 
                  array (
                    'description' => '命名空间名称',
                    'type' => 'string',
                    'example' => '测试环境',
                  ),
                  'RegionId' => 
                  array (
                    'description' => '区域',
                    'type' => 'string',
                    'example' => 'cn-shanghai',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        401 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceDisabled',
            'errorMessage' => 'You have not activated the ACM service.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'NamespacePermissionDenied',
            'errorMessage' => 'You are not authorized to operate the namespace.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'NamespaceNotExists',
            'errorMessage' => 'The specified namespace does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"Success\\",\\n  \\"RequestId\\": \\"3116581E-C664-4D3A-A055-****\\",\\n  \\"Namespace\\": {\\n    \\"SecretKey\\": \\"6/eQ0****\\",\\n    \\"AccessKey\\": \\"2c017****\\",\\n    \\"Name\\": \\"测试环境\\",\\n    \\"RegionId\\": \\"cn-shanghai\\",\\n    \\"Endpoint\\": \\"acm.aliyun.com\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>51193061-ED0D-4EC6-B160-****</RequestId>\\n<Message>Success</Message>\\n<Code>OK</Code>\\n<Namespace>\\n    <SecretKey>6/eQ****</SecretKey>\\n    <Endpoint>addr-bj-internal.edas.aliyun.com</Endpoint>\\n    <Name>测试环境</Name>\\n    <RegionId>cn-beijing</RegionId>\\n    <AccessKey>2c01****</AccessKey>\\n</Namespace>","errorExample":""}]',
      'title' => '获取命名空间详情',
      'summary' => '获取命名空间详情。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeNamespaces' => 
    array (
      'path' => '/diamond-ops/pop/namespace/list',
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
              'Namespaces' => 
              array (
                'description' => '命名空间列表',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Type' => 
                    array (
                      'description' => '命名空间类型：
- 1：默认命名空间
- 2：自定义命名空间',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'Quota' => 
                    array (
                      'description' => '配置数上限',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '200',
                    ),
                    'NamespaceId' => 
                    array (
                      'description' => '命名空间ID',
                      'type' => 'string',
                      'example' => '3115d2bf-1f44-47bf-a855-****',
                    ),
                    'ConfigCount' => 
                    array (
                      'description' => '配置数',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '20',
                    ),
                    'NamespaceName' => 
                    array (
                      'description' => '命名空间名称',
                      'type' => 'string',
                      'example' => '测试环境',
                    ),
                  ),
                ),
              ),
              'Message' => 
              array (
                'description' => '响应描述',
                'type' => 'string',
                'example' => 'Success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '3116581E-C664-4D3A-A055-****',
              ),
              'Code' => 
              array (
                'description' => '状态码',
                'type' => 'string',
                'example' => 'OK',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        401 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceDisabled',
            'errorMessage' => 'You have not activated the ACM service.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"Success\\",\\n  \\"RequestId\\": \\"3116581E-C664-4D3A-A055-****\\",\\n  \\"Namespaces\\": [\\n    {\\n      \\"Type\\": 1,\\n      \\"ConfigCount\\": 20,\\n      \\"Quota\\": 200,\\n      \\"NamespaceId\\": \\"3115d2bf-1f44-47bf-a855-****\\",\\n      \\"NamespaceName\\": \\"测试环境\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<Namespaces>\\n    <NamespaceName>Default Space(EDAS)</NamespaceName>\\n    <Type>1</Type>\\n    <Quota>200</Quota>\\n    <ConfigCount>48</ConfigCount>\\n    <NamespaceId>0846c173-decf-4b47-8aa0-04b5a561****</NamespaceId>\\n</Namespaces>\\n<RequestId>EDA3B962-37DC-48EC-99FA-20ED0********</RequestId>\\n<Message>Success</Message>\\n<Code>OK</Code>","errorExample":""}]',
      'title' => '获取命名空间列表',
      'summary' => '使用DescribeNamespaces来获取命名空间列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeNamespacesWithCreate' => 
    array (
      'path' => '/diamond-ops/pop/namespace/listWithCreate',
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
        'operationType' => 'get',
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
              'Namespaces' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Type' => 
                    array (
                      'type' => 'integer',
                      'format' => 'int32',
                    ),
                    'Quota' => 
                    array (
                      'type' => 'integer',
                      'format' => 'int32',
                    ),
                    'NamespaceId' => 
                    array (
                      'type' => 'string',
                    ),
                    'ConfigCount' => 
                    array (
                      'type' => 'integer',
                      'format' => 'int32',
                    ),
                    'NamespaceName' => 
                    array (
                      'type' => 'string',
                    ),
                  ),
                ),
              ),
              'Message' => 
              array (
                'type' => 'string',
              ),
              'RequestId' => 
              array (
                'type' => 'string',
              ),
              'Code' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        401 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceDisabled',
            'errorMessage' => 'You have not activated the ACM service.',
          ),
        ),
      ),
      'responseDemo' => '',
    ),
    'CreateConfiguration' => 
    array (
      'path' => '/diamond-ops/pop/configuration',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DataId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '配置的ID。允许字符为大小写字母、数字、小数点（.）、冒号（:）、星号（*）、下划线（_）和中划线（-）。当ID前缀为如下值时，ACM会自动使用KMS服务对此配置进行加密存储：

- 前缀为`cipher-`：调用 KMS 服务对配置进行加解密，加解密数据的大小不超过 4 KB，最大不超过 6 KB，对特殊符号如and（&amp;）会解密错误，不推荐使用。

- 前缀为`cipher-kms-aes-128-`：使用 KMS 的信封加解密方法，配置内容可以超过 6 KB，最大不超过 100 KB。配置内容的明文数据不会传输到 KMS 系统，安全性更高，推荐使用。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'com.aliyun.acm.example',
          ),
        ),
        1 => 
        array (
          'name' => 'AppName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '配置归属的应用名称',
            'type' => 'string',
            'required' => false,
            'example' => 'app',
          ),
        ),
        2 => 
        array (
          'name' => 'Group',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '分组',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'DEFAULT_GROUP',
          ),
        ),
        3 => 
        array (
          'name' => 'Desc',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '配置的描述说明',
            'type' => 'string',
            'required' => false,
            'example' => '测试配置',
          ),
        ),
        4 => 
        array (
          'name' => 'Tags',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '配置的标签，如存在多个标签，以半角逗号分隔',
            'type' => 'string',
            'required' => false,
            'example' => 'tag1,tag2',
          ),
        ),
        5 => 
        array (
          'name' => 'Content',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '配置的内容',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'key=Hello;value=World',
          ),
        ),
        6 => 
        array (
          'name' => 'Type',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '配置内容的格式，可选值如下：

- text

- json

- xml

- yaml

- text/html

- properties',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'text',
          ),
        ),
        7 => 
        array (
          'name' => 'NamespaceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '命名空间ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '01146121-decf-4b47-****',
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
              'Message' => 
              array (
                'description' => '响应描述',
                'type' => 'string',
                'example' => 'Success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '132BF104-A660-40C7-936B-F805967*****',
              ),
              'Code' => 
              array (
                'description' => '状态码',
                'type' => 'string',
                'example' => 'OK',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        401 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceDisabled',
            'errorMessage' => 'You have not activated the ACM service.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ConfigurationAlreadyExists',
            'errorMessage' => 'The configuration item already exists.',
          ),
          1 => 
          array (
            'errorCode' => 'ConfigurationInvalidArgument',
            'errorMessage' => 'The configuration parameter is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'ConfigurationQuotaOrSizeExceed',
            'errorMessage' => 'The maximum number of configuration items or the maximum length of the configuration item is exceeded.',
          ),
          3 => 
          array (
            'errorCode' => 'ConfigurationSizeExceed',
            'errorMessage' => 'The maximum length of the configuration item is exceeded.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"Success\\",\\n  \\"RequestId\\": \\"132BF104-A660-40C7-936B-F805967*****\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>132BF104-A660-40C7-936B-F805967*****</RequestId>\\n<Message>Success</Message>\\n<Code>OK</Code>","errorExample":""}]',
      'title' => '创建配置',
      'summary' => '创建配置。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CloneConfiguration' => 
    array (
      'path' => '/diamond-ops/pop/batch/clone',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Policy',
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
          'name' => 'NamespaceFrom',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
          ),
        ),
        2 => 
        array (
          'name' => 'NamespaceTo',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
          ),
        ),
        3 => 
        array (
          'name' => 'Data',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
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
              'Message' => 
              array (
                'type' => 'string',
              ),
              'RequestId' => 
              array (
                'type' => 'string',
              ),
              'Code' => 
              array (
                'type' => 'string',
              ),
              'Result' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Success' => 
                  array (
                    'type' => 'boolean',
                  ),
                  'SuccessItems' => 
                  array (
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'DataId' => 
                        array (
                          'type' => 'string',
                        ),
                        'Group' => 
                        array (
                          'type' => 'string',
                        ),
                      ),
                    ),
                  ),
                  'TotalCount' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int32',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        401 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceDisabled',
            'errorMessage' => 'You have not activated the ACM service.',
          ),
        ),
      ),
      'responseDemo' => '',
    ),
    'DeleteConfiguration' => 
    array (
      'path' => '/diamond-ops/pop/configuration',
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
          'name' => 'DataId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '配置ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'com.aliyun.acm.example',
          ),
        ),
        1 => 
        array (
          'name' => 'Group',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分组',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'DEFAULT_GROUP',
          ),
        ),
        2 => 
        array (
          'name' => 'NamespaceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命名空间ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '10d1110d2-ca66-42ba-b706-****',
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
              'Message' => 
              array (
                'description' => '描述',
                'type' => 'string',
                'example' => 'Success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '617CC94A-0019-4873-8848-****',
              ),
              'Code' => 
              array (
                'description' => '状态码',
                'type' => 'string',
                'example' => 'OK',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        401 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceDisabled',
            'errorMessage' => 'You have not activated the ACM service.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'PermissionDenied',
            'errorMessage' => 'You are not authorized to operate on the specified resources.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ConfigurationNotExists',
            'errorMessage' => 'The configuration item does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ConfigurationDeleteFail',
            'errorMessage' => 'Failed to delete the configuration item.',
          ),
          1 => 
          array (
            'errorCode' => 'ConfigurationInvalidArgument',
            'errorMessage' => 'The configuration parameter is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"Success\\",\\n  \\"RequestId\\": \\"617CC94A-0019-4873-8848-****\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>6F7CC94A-7711-4873-8848-FCE2F1795625</RequestId>\\n<Message>Success</Message>\\n<Code>OK</Code>","errorExample":""}]',
      'title' => '删除配置',
      'summary' => '删除配置。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeployConfiguration' => 
    array (
      'path' => '/diamond-ops/pop/configuration',
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
          'name' => 'DataId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '配置ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'com.aliyun.acm.example',
          ),
        ),
        1 => 
        array (
          'name' => 'AppName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '配置归属的应用名称',
            'type' => 'string',
            'required' => false,
            'example' => 'app',
          ),
        ),
        2 => 
        array (
          'name' => 'Group',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '分组',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'DEFAULT_GROUP',
          ),
        ),
        3 => 
        array (
          'name' => 'Desc',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '配置描述',
            'type' => 'string',
            'required' => false,
            'example' => '测试配置',
          ),
        ),
        4 => 
        array (
          'name' => 'Tags',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '配置的标签，如存在多个标签，以半角逗号分隔',
            'type' => 'string',
            'required' => false,
            'example' => 'tag1,tag2',
          ),
        ),
        5 => 
        array (
          'name' => 'Content',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '配置内容',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'Hello World',
          ),
        ),
        6 => 
        array (
          'name' => 'Type',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '配置内容的格式，可选值如下：

- text

- json

- xml

- yaml

- text/html

- properties',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'text',
          ),
        ),
        7 => 
        array (
          'name' => 'NamespaceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '命名空间ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '111000d2-ca66-42ba-b706-****',
          ),
        ),
        8 => 
        array (
          'name' => 'BetaIps',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'Beta发布的IP列表。',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
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
              'Message' => 
              array (
                'description' => '描述',
                'type' => 'string',
                'example' => 'Success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '611CC94A-7711-4873-8848-****',
              ),
              'Code' => 
              array (
                'description' => '状态码',
                'type' => 'string',
                'example' => 'OK',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        401 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceDisabled',
            'errorMessage' => 'You have not activated the ACM service.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ConfigurationDeployFail',
            'errorMessage' => 'Failed to publish the configuration item.',
          ),
          1 => 
          array (
            'errorCode' => 'ConfigurationInvalidArgument',
            'errorMessage' => 'The configuration parameter is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'ConfigurationQuotaOrSizeExceed',
            'errorMessage' => 'The maximum number of configuration items or the maximum length of the configuration item is exceeded.',
          ),
          3 => 
          array (
            'errorCode' => 'ConfigurationSizeExceed',
            'errorMessage' => 'The maximum length of the configuration item is exceeded.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"Success\\",\\n  \\"RequestId\\": \\"611CC94A-7711-4873-8848-****\\",\\n  \\"Code\\": \\"OK\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>6F7CC94A-7711-4873-8848-FCE2F1795625</RequestId>\\n<Message>Success</Message>\\n<Code>OK</Code>","errorExample":""}]',
      'title' => 'DeployConfiguration',
      'summary' => '发布配置。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'BatchExportConfigurations' => 
    array (
      'path' => '/diamond-ops/pop/batch/export',
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
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'NamespaceId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'Data',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
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
              'FileUrl' => 
              array (
                'type' => 'string',
              ),
              'Message' => 
              array (
                'type' => 'string',
              ),
              'RequestId' => 
              array (
                'type' => 'string',
              ),
              'Code' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        401 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceDisabled',
            'errorMessage' => 'You have not activated the ACM service.',
          ),
        ),
      ),
      'responseDemo' => '',
    ),
    'BatchImportConfigurations' => 
    array (
      'path' => '/diamond-ops/pop/batch/import',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'NamespaceId',
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
          'name' => 'Policy',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
          ),
        ),
        2 => 
        array (
          'name' => 'FileUrl',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
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
              'Message' => 
              array (
                'type' => 'string',
              ),
              'RequestId' => 
              array (
                'type' => 'string',
              ),
              'Code' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        401 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceDisabled',
            'errorMessage' => 'You have not activated the ACM service.',
          ),
        ),
      ),
      'responseDemo' => '',
    ),
    'DescribeConfiguration' => 
    array (
      'path' => '/diamond-ops/pop/configuration',
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
          'name' => 'DataId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '配置ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'com.aliyun.acm.example',
          ),
        ),
        1 => 
        array (
          'name' => 'Group',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分组',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'DEFAULT_GROUP',
          ),
        ),
        2 => 
        array (
          'name' => 'NamespaceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命名空间ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '101100d2-ca66-42ba-b706-****',
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
              'Message' => 
              array (
                'description' => '响应描述',
                'type' => 'string',
                'example' => 'Success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '611CC94A-7711-4873-8848-****',
              ),
              'Configuration' => 
              array (
                'description' => '配置',
                'type' => 'object',
                'properties' => 
                array (
                  'Type' => 
                  array (
                    'description' => '配置内容的格式',
                    'type' => 'string',
                    'example' => 'text',
                  ),
                  'AppName' => 
                  array (
                    'description' => '配置归属的应用名称',
                    'type' => 'string',
                    'example' => 'app',
                  ),
                  'Tags' => 
                  array (
                    'description' => '配置的标签',
                    'type' => 'string',
                    'example' => 'tag1,tag2',
                  ),
                  'Md5' => 
                  array (
                    'description' => '配置的消息摘要',
                    'type' => 'string',
                    'example' => '18d2e20****',
                  ),
                  'DataId' => 
                  array (
                    'description' => '配置ID',
                    'type' => 'string',
                    'example' => 'com.aliyun.acm.example',
                  ),
                  'Content' => 
                  array (
                    'description' => '配置内容',
                    'type' => 'string',
                    'example' => 'Hello World',
                  ),
                  'Group' => 
                  array (
                    'description' => '分组',
                    'type' => 'string',
                    'example' => 'DEFAULT_GROUP',
                  ),
                  'Desc' => 
                  array (
                    'description' => '配置描述',
                    'type' => 'string',
                    'example' => '测试配置',
                  ),
                ),
              ),
              'Code' => 
              array (
                'description' => '状态码',
                'type' => 'string',
                'example' => 'OK',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        401 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceDisabled',
            'errorMessage' => 'You have not activated the ACM service.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'PermissionDenied',
            'errorMessage' => 'You are not authorized to operate on the specified resources.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ConfigurationNotExists',
            'errorMessage' => 'The configuration item does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"Success\\",\\n  \\"RequestId\\": \\"611CC94A-7711-4873-8848-****\\",\\n  \\"Configuration\\": {\\n    \\"Type\\": \\"text\\",\\n    \\"AppName\\": \\"app\\",\\n    \\"Tags\\": \\"tag1,tag2\\",\\n    \\"Md5\\": \\"18d2e20****\\",\\n    \\"DataId\\": \\"com.aliyun.acm.example\\",\\n    \\"Content\\": \\"Hello World\\",\\n    \\"Group\\": \\"DEFAULT_GROUP\\",\\n    \\"Desc\\": \\"测试配置\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>3116581E-C664-4D3A-A055-****</RequestId>\\n<Message>Success</Message>\\n<Configuration>\\n    <Group>DEFAULT_GROUP</Group>\\n    <Desc>测试配置</Desc>\\n    <DataId>com.aliyun.acm.example</DataId>\\n    <Content>Hello World</Content>\\n    <Type>text</Type>\\n    <Md5>078b****</Md5>\\n    <AppName>app</AppName>\\n</Configuration>\\n<Code>OK</Code>","errorExample":""}]',
      'title' => '获取配置',
      'summary' => '获取配置。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CheckConfigurationClone' => 
    array (
      'path' => '/diamond-ops/pop/batch/checkForClone',
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Policy',
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
          'name' => 'NamespaceFrom',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
          ),
        ),
        2 => 
        array (
          'name' => 'NamespaceTo',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
          ),
        ),
        3 => 
        array (
          'name' => 'Data',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
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
              'Message' => 
              array (
                'type' => 'string',
              ),
              'RequestId' => 
              array (
                'type' => 'string',
              ),
              'Code' => 
              array (
                'type' => 'string',
              ),
              'Result' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Success' => 
                  array (
                    'type' => 'boolean',
                  ),
                  'SuccessItems' => 
                  array (
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'DataId' => 
                        array (
                          'type' => 'string',
                        ),
                        'Group' => 
                        array (
                          'type' => 'string',
                        ),
                      ),
                    ),
                  ),
                  'TotalCount' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int32',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        401 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceDisabled',
            'errorMessage' => 'You have not activated the ACM service.',
          ),
        ),
      ),
      'responseDemo' => '',
    ),
    'CheckConfigurationExport' => 
    array (
      'path' => '/diamond-ops/pop/batch/checkForExport',
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'NamespaceId',
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
          'name' => 'Data',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
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
              'Message' => 
              array (
                'type' => 'string',
              ),
              'RequestId' => 
              array (
                'type' => 'string',
              ),
              'Code' => 
              array (
                'type' => 'string',
              ),
              'Result' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'TotalCount' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int32',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        401 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceDisabled',
            'errorMessage' => 'You have not activated the ACM service.',
          ),
        ),
      ),
      'responseDemo' => '',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-qingdao',
      'endpoint' => 'acm.cn-qingdao.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'cn-beijing',
      'endpoint' => 'acm.cn-beijing.aliyuncs.com',
    ),
    2 => 
    array (
      'regionId' => 'cn-zhangjiakou',
      'endpoint' => 'acm.cn-zhangjiakou.aliyuncs.com',
    ),
    3 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'acm.cn-hangzhou.aliyuncs.com',
    ),
    4 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'acm.cn-shanghai.aliyuncs.com',
    ),
    5 => 
    array (
      'regionId' => 'cn-shenzhen',
      'endpoint' => 'acm.cn-shenzhen.aliyuncs.com',
    ),
    6 => 
    array (
      'regionId' => 'cn-hongkong',
      'endpoint' => 'acm.cn-hongkong.aliyuncs.com',
    ),
    7 => 
    array (
      'regionId' => 'ap-southeast-1',
      'endpoint' => 'acm.ap-southeast-1.aliyuncs.com',
    ),
    8 => 
    array (
      'regionId' => 'ap-southeast-2',
      'endpoint' => 'acm.ap-southeast-2.aliyuncs.com',
    ),
    9 => 
    array (
      'regionId' => 'us-west-1',
      'endpoint' => 'acm.us-west-1.aliyuncs.com',
    ),
    10 => 
    array (
      'regionId' => 'us-east-1',
      'endpoint' => 'acm.us-east-1.aliyuncs.com',
    ),
    11 => 
    array (
      'regionId' => 'eu-central-1',
      'endpoint' => 'acm.eu-central-1.aliyuncs.com',
    ),
    12 => 
    array (
      'regionId' => 'cn-hangzhou-finance',
      'endpoint' => 'acm.cn-hangzhou-finance.aliyuncs.com',
    ),
    13 => 
    array (
      'regionId' => 'cn-shanghai-finance-1',
      'endpoint' => 'acm.cn-shanghai-finance-1.aliyuncs.com',
    ),
    14 => 
    array (
      'regionId' => 'cn-shenzhen-finance-1',
      'endpoint' => 'acm.cn-shenzhen-finance-1.aliyuncs.com',
    ),
    15 => 
    array (
      'regionId' => 'cn-north-2-gov-1',
      'endpoint' => 'acm.cn-north-2-gov-1.aliyuncs.com',
    ),
    16 => 
    array (
      'regionId' => 'ap-northeast-1',
      'endpoint' => 'acm.ap-northeast-1.aliyuncs.com',
    ),
  ),
);
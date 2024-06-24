<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'ROA',
    'product' => 'es-serverless',
    'version' => '2022-08-22',
  ),
  'directories' => 
  array (
  ),
  'components' => 
  array (
    'schemas' => 
    array (
      'DataStreamMapping' => 
      array (
        'title' => '数据流索引模板字段设置',
        'type' => 'object',
        'properties' => 
        array (
          'type' => 
          array (
            'title' => '字段类型',
            'type' => 'string',
            'required' => true,
          ),
          'caseSensitive' => 
          array (
            'title' => '大小写敏感',
            'type' => 'boolean',
          ),
          'docValues' => 
          array (
            'title' => '是否聚合',
            'type' => 'boolean',
          ),
          'index' => 
          array (
            'title' => '是否索引',
            'type' => 'boolean',
          ),
          'tokenizeOnChars' => 
          array (
            'title' => '识别分隔符列表',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'string',
            ),
          ),
          'key' => 
          array (
            'title' => '字段名',
            'type' => 'string',
            'required' => true,
          ),
          'properties' => 
          array (
            'title' => '嵌套索引字段',
            'type' => 'array',
            'items' => 
            array (
              '$ref' => '#/components/schemas/DataStreamMapping',
            ),
          ),
        ),
      ),
    ),
  ),
  'apis' => 
  array (
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'es-serverless.cn-hangzhou.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'es-serverless.cn-shanghai.aliyuncs.com',
    ),
    2 => 
    array (
      'regionId' => 'cn-beijing',
      'endpoint' => 'es-serverless.cn-beijing.aliyuncs.com',
    ),
    3 => 
    array (
      'regionId' => 'cn-shenzhen',
      'endpoint' => 'es-serverless.cn-shenzhen.aliyuncs.com',
    ),
  ),
);
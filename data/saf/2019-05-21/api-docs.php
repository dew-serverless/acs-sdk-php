<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'saf',
    'version' => '2019-05-21',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 181717,
      'title' => '国内公共服务调用',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ExecuteRequest',
      ),
    ),
    1 => 
    array (
      'id' => 181718,
      'title' => '海外公共服务调用',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ExecuteRequestML',
        1 => 'ExecuteRequestSG',
      ),
    ),
    2 => 
    array (
      'id' => 181726,
      'title' => '自定义事件服务调用',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'RequestDecision',
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
    'ExecuteRequest' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
        'abilityTreeCode' => '48720',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREsaf7L0MVB',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ServiceParameters',
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
          'name' => 'Service',
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
              'Code' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
              'Message' => 
              array (
                'type' => 'string',
              ),
              'Data' => 
              array (
                'type' => 'object',
              ),
              'RequestId' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '',
    ),
    'ExecuteRequestML' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
        'abilityTreeCode' => '48721',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREsaf6MRPQF',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ServiceParameters',
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
          'name' => 'Service',
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
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
            'default' => 'en-us',
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
                'type' => 'integer',
                'format' => 'int32',
              ),
              'Message' => 
              array (
                'type' => 'string',
              ),
              'Data' => 
              array (
                'type' => 'object',
              ),
              'RequestId' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '',
    ),
    'ExecuteRequestSG' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
        'abilityTreeCode' => '48722',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREsaf6MRPQF',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ServiceParameters',
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
          'name' => 'Service',
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
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
            'default' => 'en-us',
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
                'type' => 'integer',
                'format' => 'int32',
              ),
              'Message' => 
              array (
                'type' => 'string',
              ),
              'Data' => 
              array (
                'type' => 'object',
              ),
              'RequestId' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '',
    ),
    'RequestDecision' => 
    array (
      'summary' => '调用决策引擎接口',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
        'abilityTreeCode' => '114081',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREsaf6MRPQF',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ServiceParameters',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
          ),
        ),
        1 => 
        array (
          'name' => 'EventCode',
          'in' => 'query',
          'schema' => 
          array (
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
            'title' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'type' => 'string',
              ),
              'Code' => 
              array (
                'type' => 'integer',
                'format' => 'int64',
              ),
              'Message' => 
              array (
                'type' => 'string',
              ),
              'Data' => 
              array (
                'type' => 'object',
              ),
            ),
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
      'endpoint' => 'saf.cn-hangzhou.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'cn-beijing',
      'endpoint' => 'saf.cn-beijing.aliyuncs.com',
    ),
    2 => 
    array (
      'regionId' => 'cn-zhangjiakou',
      'endpoint' => 'saf.cn-zhangjiakou.aliyuncs.com',
    ),
    3 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'saf.cn-shanghai.aliyuncs.com',
    ),
    4 => 
    array (
      'regionId' => 'cn-shenzhen',
      'endpoint' => 'saf.cn-shenzhen.aliyuncs.com',
    ),
    5 => 
    array (
      'regionId' => 'cn-hongkong',
      'endpoint' => 'saf.cn-hongkong.aliyuncs.com',
    ),
    6 => 
    array (
      'regionId' => 'ap-southeast-1',
      'endpoint' => 'saf.ap-southeast-1.aliyuncs.com',
    ),
    7 => 
    array (
      'regionId' => 'ap-southeast-3',
      'endpoint' => 'saf.ap-southeast-3.aliyuncs.com',
    ),
    8 => 
    array (
      'regionId' => 'us-east-1',
      'endpoint' => 'saf.us-east-1.aliyuncs.com',
    ),
    9 => 
    array (
      'regionId' => 'us-west-1',
      'endpoint' => 'saf.us-west-1.aliyuncs.com',
    ),
    10 => 
    array (
      'regionId' => 'eu-central-1',
      'endpoint' => 'saf.eu-central-1.aliyuncs.com',
    ),
    11 => 
    array (
      'regionId' => 'ap-south-1',
      'endpoint' => 'saf.ap-south-1.aliyuncs.com',
    ),
  ),
);
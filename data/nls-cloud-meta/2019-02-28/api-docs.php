<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'nls-cloud-meta',
    'version' => '2019-02-28',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 130955,
      'title' => '获取token',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateToken',
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
    'CreateToken' => 
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'A51587CB-5193-4DB8-9AED-CD4365C2****',
              ),
              'ErrMsg' => 
              array (
                'description' => '失败响应的错误信息。',
                'type' => 'string',
                'example' => 'Specified access key is not found.',
              ),
              'Token' => 
              array (
                'description' => 'Token对象。',
                'type' => 'object',
                'properties' => 
                array (
                  'ExpireTime' => 
                  array (
                    'description' => 'Token的有效期时间戳。单位：秒。例如1553825814换算为北京时间为：2019/3/29 10:16:54，即Token在该时间之前有效。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1553825814',
                  ),
                  'UserId' => 
                  array (
                    'description' => '阿里云账号ID。',
                    'type' => 'string',
                    'example' => '107992689699****',
                  ),
                  'Id' => 
                  array (
                    'description' => '请求分配的Token值。',
                    'type' => 'string',
                    'example' => 'fb1c4648a61b426589dab0fe90d1****',
                  ),
                ),
              ),
              'NlsRequestId' => 
              array (
                'description' => '语音内部请求ID。',
                'type' => 'string',
                'example' => 'dd05a301b40441c99a2671905325****',
              ),
              'ErrCode' => 
              array (
                'description' => '失败响应的错误码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '50000000',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"A51587CB-5193-4DB8-9AED-CD4365C2****\\",\\n  \\"ErrMsg\\": \\"Specified access key is not found.\\",\\n  \\"Token\\": {\\n    \\"ExpireTime\\": 1553825814,\\n    \\"UserId\\": \\"107992689699****\\",\\n    \\"Id\\": \\"fb1c4648a61b426589dab0fe90d1****\\"\\n  },\\n  \\"NlsRequestId\\": \\"dd05a301b40441c99a2671905325****\\",\\n  \\"ErrCode\\": 50000000\\n}","errorExample":""},{"type":"xml","example":"<CreateTokenResponse>\\n    <RequestId>A51587CB-5193-4DB8-9AED-CD4365C2****</RequestId>\\n    <ErrMsg>Specified access key is not found.</ErrMsg>\\n    <Token>\\n        <ExpireTime>1553825814</ExpireTime>\\n        <UserId>107992689699****</UserId>\\n        <Id>fb1c4648a61b426589dab0fe90d1****</Id>\\n    </Token>\\n    <NlsRequestId>dd05a301b40441c99a2671905325****</NlsRequestId>\\n    <ErrCode>50000000</ErrCode>\\n</CreateTokenResponse>","errorExample":""}]',
      'title' => '获取token',
      'summary' => '获取智能语音交互的token。',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'nls-slp.cn-shanghai.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'nls-meta.cn-shanghai.aliyuncs.com',
    ),
    2 => 
    array (
      'regionId' => 'ap-southeast-1',
      'endpoint' => 'nls-meta.cn-shanghai.aliyuncs.com	',
    ),
  ),
);
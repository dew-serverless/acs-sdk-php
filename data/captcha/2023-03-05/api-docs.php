<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'captcha',
    'version' => '2023-03-05',
  ),
  'directories' => 
  array (
    0 => 'VerifyCaptcha',
    1 => 
    array (
      'id' => 0,
      'title' => '其它',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'VerifyIntelligentCaptcha',
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
    'VerifyCaptcha' => 
    array (
      'summary' => '验证码验证接口。',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'CaptchaVerifyParam',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '由端上传入的验证参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'dsjidsjidsjkds*djsjdiskds',
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
                'example' => '95784F***D39FDC5',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'description' => '响应码',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Message' => 
              array (
                'description' => '响应消息，若成功请求为success',
                'type' => 'string',
                'example' => 'success',
              ),
              'Result' => 
              array (
                'description' => '返回结果',
                'type' => 'object',
                'properties' => 
                array (
                  'VerifyResult' => 
                  array (
                    'description' => '验证结果。

- true：验证通过。

- false：验证不通过。',
                    'type' => 'boolean',
                    'example' => 'true',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"95784F***D39FDC5\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"Success\\",\\n  \\"Message\\": \\"success\\",\\n  \\"Result\\": {\\n    \\"VerifyResult\\": true\\n  }\\n}","type":"json"}]',
      'title' => '验证码验证',
    ),
    'VerifyIntelligentCaptcha' => 
    array (
      'summary' => '验证码智能验证接口',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
        'abilityTreeCode' => '194420',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREwafACFB6T',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'CaptchaVerifyParam',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '由端上传入的验证参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'dsjidsjidsjkds*djsjdiskds
',
          ),
        ),
        1 => 
        array (
          'name' => 'SceneId',
          'in' => 'formData',
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
                'example' => '95784F***D39FDC5
',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'description' => '响应码',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Message' => 
              array (
                'description' => '响应消息，若成功请求为success',
                'type' => 'string',
                'example' => 'success',
              ),
              'Result' => 
              array (
                'description' => '返回结果',
                'type' => 'object',
                'properties' => 
                array (
                  'VerifyResult' => 
                  array (
                    'description' => '验证结果

-  true：验证通过

- false：验证不通过',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'VerifyCode' => 
                  array (
                    'type' => 'string',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"95784F***D39FDC5\\\\n\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"Success\\",\\n  \\"Message\\": \\"success\\",\\n  \\"Result\\": {\\n    \\"VerifyResult\\": true,\\n    \\"VerifyCode\\": \\"\\"\\n  }\\n}","type":"json"}]',
      'title' => '验证码智能验证',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'captcha.cn-shanghai.aliyuncs.com',
    ),
  ),
);
<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'Mhub',
    'version' => '2017-08-25',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 190727,
      'title' => '服务开通相关',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'OpenEmasService',
      ),
    ),
    1 => 
    array (
      'id' => 190718,
      'title' => '应用相关',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateApp',
        1 => 'DeleteApp',
        2 => 'ModifyApp',
        3 => 'ListApps',
        4 => 'QueryAppInfo',
        5 => 'DescribeDashboard',
        6 => 'QueryAppSecurityInfo',
      ),
    ),
    2 => 
    array (
      'id' => 190721,
      'title' => '项目相关',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateProduct',
        1 => 'DeleteProduct',
        2 => 'ModifyProduct',
        3 => 'ListProducts',
        4 => 'QueryProductInfo',
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
    'OpenEmasService' => 
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
        1 => 
        array (
          'APP' => 
          array (
          ),
        ),
        2 => 
        array (
          'PrivateKey' => 
          array (
          ),
        ),
        3 => 
        array (
          'BearerToken' => 
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
              'OrderId' => 
              array (
                'description' => '开通服务的订单号。',
                'type' => 'string',
                'example' => '20671870151****',
              ),
              'RequestId' => 
              array (
                'description' => '开通请求的ID。',
                'type' => 'string',
                'example' => '126D4DDD-05A5-49B1-B18C-39C4A929BFB2',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"OrderId\\": \\"20671870151****\\",\\n  \\"RequestId\\": \\"126D4DDD-05A5-49B1-B18C-39C4A929BFB2\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '开通EMAS服务',
      'summary' => '开通EMAS服务。只有开通服务后，才能进行产品使用。',
      'description' => '开通EMAS服务操作仅限阿里云主账号使用；子账号无法使用。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateApp' => 
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProductId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定创建应用所属的空间ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '123456',
          ),
        ),
        1 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用名称。该参数长度不超过26个字符，并且不能用_以外的特殊字符。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '我的应用',
          ),
        ),
        2 => 
        array (
          'name' => 'Type',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用类型。取值范围如下：
    
    1：iOS
    2：Android
    8：魔笔网页端
    9：魔笔移动端',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'BundleId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'iOS应用ID。创建iOS应用时必填。',
            'type' => 'string',
            'required' => false,
            'example' => 'com.test.ios',
          ),
        ),
        4 => 
        array (
          'name' => 'PackageName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Android 应用包名。创建Android应用时必填。',
            'type' => 'string',
            'required' => false,
            'example' => 'com.test.android',
          ),
        ),
        5 => 
        array (
          'name' => 'EncodedIcon',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '图片 base64 字符串。',
            'type' => 'string',
            'required' => false,
            'example' => '图片 base64 字符串',
          ),
        ),
        6 => 
        array (
          'name' => 'IndustryId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用所属的行业ID，取值范围如下：
    
     * 0. 社交
     * 1. 摄影与摄像
     * 2. 效率
     * 3. 生活
     * 4. 美食佳饮
     * 5. 工具
     * 6. 娱乐
     * 7. 游戏
     * 8. 儿童
     * 9. 教育
     * 10. 报刊杂志
     * 11. 健康健美
     * 12. 旅游
     * 13. 音乐
     * 14. 体育
     * 15. 商务
     * 16. 新闻
     * 17. 财务
     * 18. 参考
     * 19. 导航
     * 20. 医疗
     * 21. 图书
     * 22. 天气
     * 23. 智能物联网',
            'type' => 'string',
            'required' => false,
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
              'RequestId' => 
              array (
                'description' => '请求唯一标识，用于识别一个请求。',
                'type' => 'string',
                'example' => '126D4DDD-05A5-49B1-B18C-39C4A929****',
              ),
              'AppInfo' => 
              array (
                'description' => '应用基本信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'Type' => 
                  array (
                    'description' => '应用类型，取值范围如下：
    
    1：iOS
    2：Android
    8：魔笔网页端
    9：魔笔移动端',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'AppKey' => 
                  array (
                    'description' => '应用 appkey，接口请求时唯一标识一个应用。',
                    'type' => 'string',
                    'example' => '123456',
                  ),
                  'Description' => 
                  array (
                    'description' => '应用描述信息。',
                    'type' => 'string',
                    'example' => '应用描述信息',
                  ),
                  'PackageName' => 
                  array (
                    'description' => 'Android 应用包名。',
                    'type' => 'string',
                    'example' => 'com.test.android',
                  ),
                  'CreateTime' => 
                  array (
                    'description' => '应用创建UTC时间。',
                    'type' => 'string',
                    'example' => '2020-12-16T06:25:52Z',
                  ),
                  'ProductId' => 
                  array (
                    'description' => '应用所属空间ID。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '123456',
                  ),
                  'BundleId' => 
                  array (
                    'description' => 'iOS应用ID。',
                    'type' => 'string',
                    'example' => 'com.test.ios',
                  ),
                  'Name' => 
                  array (
                    'description' => '应用名称。',
                    'type' => 'string',
                    'example' => '我的应用',
                  ),
                  'ModifyTime' => 
                  array (
                    'description' => '应用修改UTC时间。',
                    'type' => 'string',
                    'example' => '2020-12-16T06:25:52Z',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"126D4DDD-05A5-49B1-B18C-39C4A929****\\",\\n  \\"AppInfo\\": {\\n    \\"Type\\": 1,\\n    \\"AppKey\\": \\"123456\\",\\n    \\"Description\\": \\"应用描述信息\\",\\n    \\"PackageName\\": \\"com.test.android\\",\\n    \\"CreateTime\\": \\"2020-12-16T06:25:52Z\\",\\n    \\"ProductId\\": 123456,\\n    \\"BundleId\\": \\"com.test.ios\\",\\n    \\"Name\\": \\"我的应用\\",\\n    \\"ModifyTime\\": \\"2020-12-16T06:25:52Z\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<CreateAppResponse>\\n    <RequestId>126D4DDD-05A5-49B1-B18C-39C4A929****</RequestId>\\n    <AppInfo>\\n        <Type>1</Type>\\n        <AppKey>123456</AppKey>\\n        <Description>应用描述信息</Description>\\n        <PackageName>com.test.android</PackageName>\\n        <CreateTime>2020-12-16T06:25:52Z</CreateTime>\\n        <ProductId>123456</ProductId>\\n        <BundleId>com.test.ios</BundleId>\\n        <Name>我的应用</Name>\\n        <ModifyTime>2020-12-16T06:25:52Z</ModifyTime>\\n    </AppInfo>\\n</CreateAppResponse>","errorExample":""}]',
      'title' => '创建应用',
      'summary' => '调用此接口在指定空间内创建一个新应用。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteApp' => 
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用 appkey，接口请求时唯一标识一个应用。',
            'type' => 'string',
            'required' => true,
            'example' => '123456',
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
                'description' => '请求唯一标识，用于识别一个请求。',
                'type' => 'string',
                'example' => '126D4DDD-05A5-49B1-B18C-39C4A929BFB2',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"126D4DDD-05A5-49B1-B18C-39C4A929BFB2\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteAppResponse>\\n    <RequestId>126D4DDD-05A5-49B1-B18C-39C4A929BFB2</RequestId>\\n</DeleteAppResponse>","errorExample":""}]',
      'title' => '删除应用',
      'summary' => '此接口用于删除应用。应用删除后不可恢复，如果删除已经对外发布的应用，可能会影响正常业务。删除前请确保已知晓此风险。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyApp' => 
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用 appkey，接口请求时唯一标识一个应用。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '123456',
          ),
        ),
        1 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用名称。',
            'type' => 'string',
            'required' => false,
            'example' => '我的应用',
          ),
        ),
        2 => 
        array (
          'name' => 'BundleId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'iOS应用ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'com.test.ios',
          ),
        ),
        3 => 
        array (
          'name' => 'PackageName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Android 应用包名。',
            'type' => 'string',
            'required' => false,
            'example' => 'com.test.android',
          ),
        ),
        4 => 
        array (
          'name' => 'EncodedIcon',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '图片 base64 字符串。',
            'type' => 'string',
            'required' => false,
            'example' => '图片 base64 字符串',
          ),
        ),
        5 => 
        array (
          'name' => 'IndustryId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '行业ID，取值范围如下：  
   
     * 0. 社交
     * 1. 摄影与摄像
     * 2. 效率
     * 3. 生活
     * 4. 美食佳饮
     * 5. 工具
     * 6. 娱乐
     * 7. 游戏
     * 8. 儿童
     * 9. 教育
     * 10. 报刊杂志
     * 11. 健康健美
     * 12. 旅游
     * 13. 音乐
     * 14. 体育
     * 15. 商务
     * 16. 新闻
     * 17. 财务
     * 18. 参考
     * 19. 导航
     * 20. 医疗
     * 21. 图书
     * 22. 天气
     * 23. 智能物联网',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
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
              'RequestId' => 
              array (
                'description' => '请求唯一标识，用于识别一个请求。
',
                'type' => 'string',
                'example' => '126D4DDD-05A5-49B1-B18C-39C4A929BFB2',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"126D4DDD-05A5-49B1-B18C-39C4A929BFB2\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '修改应用信息',
      'summary' => '此接口用于修改应用信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListApps' => 
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProductId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '工作空间ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '123456',
          ),
        ),
        1 => 
        array (
          'name' => 'Page',
          'in' => 'query',
          'schema' => 
          array (
            'description' => ' 页码，默认值：1。
',
            'type' => 'string',
            'required' => false,
            'example' => '1',
            'default' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '- 每页的应用数量，默认值：20。
- 取值范围为：1-100。',
            'type' => 'string',
            'required' => false,
            'example' => '20',
            'default' => '100',
          ),
        ),
        3 => 
        array (
          'name' => 'OsType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用类型，取值如下：
    
    1 ：iOS
    2 ：Android
    8 ：魔笔网页端
    9 ：魔笔移动端',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => false,
            'maximum' => '2',
            'minimum' => '0',
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
              'UbsmsStatus' => 
              array (
                'description' => '当前账号状态，取值如下：
- enabled：开通状态
- disabled：禁用状态
- inDebt：停机24小时以内（含24小时）
-  inDebt24h：停机24小时以上',
                'type' => 'string',
                'example' => 'enabled',
              ),
              'RequestId' => 
              array (
                'description' => '请求的唯一标识，用于识别一个请求。',
                'type' => 'string',
                'example' => '126D4DDD-05A5-49B1-B18C-39C4A929BFB2',
              ),
              'Total' => 
              array (
                'description' => '应用总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'AppInfos' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'AppInfo' => 
                  array (
                    'description' => '应用的详细信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Type' => 
                        array (
                          'description' => '应用类型，取值范围如下：
    
    1 ：iOS
    2 ：Android
    8 ：魔笔网页端
    9 ：魔笔移动端',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'IndustryId' => 
                        array (
                          'description' => '行业ID，取值范围如下：  
   
     * 0. 社交
     * 1. 摄影与摄像
     * 2. 效率
     * 3. 生活
     * 4. 美食佳饮
     * 5. 工具
     * 6. 娱乐
     * 7. 游戏
     * 8. 儿童
     * 9. 教育
     * 10. 报刊杂志
     * 11. 健康健美
     * 12. 旅游
     * 13. 音乐
     * 14. 体育
     * 15. 商务
     * 16. 新闻
     * 17. 财务
     * 18. 参考
     * 19. 导航
     * 20. 医疗
     * 21. 图书
     * 22. 天气
     * 23. 智能物联网',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'AppKey' => 
                        array (
                          'description' => '应用 appkey，接口请求时唯一标识一个应用。',
                          'type' => 'string',
                          'example' => '123456',
                        ),
                        'PackageName' => 
                        array (
                          'description' => 'Android 应用包名。',
                          'type' => 'string',
                          'example' => 'com.test.android',
                        ),
                        'EncodedIcon' => 
                        array (
                          'description' => '图片 base64 字符串。',
                          'type' => 'string',
                          'example' => '图片 base64 字符串',
                        ),
                        'Name' => 
                        array (
                          'description' => '应用名。',
                          'type' => 'string',
                          'example' => '我的应用',
                        ),
                        'BundleId' => 
                        array (
                          'description' => 'iOS应用ID。创建iOS应用时必填。',
                          'type' => 'string',
                          'example' => 'com.test.ios',
                        ),
                        'Readonly' => 
                        array (
                          'description' => '是否为只读应用。仅特殊场景使用。',
                          'type' => 'boolean',
                          'example' => 'false',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"UbsmsStatus\\": \\"enabled\\",\\n  \\"RequestId\\": \\"126D4DDD-05A5-49B1-B18C-39C4A929BFB2\\",\\n  \\"Total\\": 10,\\n  \\"AppInfos\\": {\\n    \\"AppInfo\\": [\\n      {\\n        \\"Type\\": 1,\\n        \\"IndustryId\\": 1,\\n        \\"AppKey\\": \\"123456\\",\\n        \\"PackageName\\": \\"com.test.android\\",\\n        \\"EncodedIcon\\": \\"图片 base64 字符串\\",\\n        \\"Name\\": \\"我的应用\\",\\n        \\"BundleId\\": \\"com.test.ios\\",\\n        \\"Readonly\\": false\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '查询指定工作空间下应用列表',
      'summary' => '此ListApps接口用于查询指定工作空间下的应用列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryAppInfo' => 
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定应用的AppKey，用于唯一标识应用。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '123456',
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
                'description' => '查询请求的ID。
',
                'type' => 'string',
                'example' => '126D4DDD-05A5-49B1-B18C-39C4A929BFB2',
              ),
              'AppInfo' => 
              array (
                'description' => '应用的基本信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'Status' => 
                  array (
                    'description' => '应用状态，取值说明：

0： 正常 

-1：普通删除 

-2：彻底删除。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'Type' => 
                  array (
                    'description' => '应用类型，取值说明：

1：iOS

2：Android

8：魔笔网页端

9：魔笔移动端
',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'CertDevelopExpiration' => 
                  array (
                    'description' => '推送开发者证书过期时间。UTC格式表达。',
                    'type' => 'string',
                    'example' => '2020-12-16T06:25:52Z',
                  ),
                  'IndustryId' => 
                  array (
                    'description' => '行业ID，取值说明：  
   
- 0：社交
- 1：摄影与摄像
- 2：效率
- 3：生活
- 4：美食佳饮
- 5：工具
- 6：娱乐
- 7：游戏
- 8：儿童
- 9：教育
- 10：报刊杂志
- 11：健康健美
- 12：旅游
- 13：音乐
- 14：体育
- 15：商务
- 16：新闻
- 17：财务
- 18：参考
- 19：导航
- 20：医疗
- 21：图书
- 22：天气
- 23：智能物联网',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'PackageName' => 
                  array (
                    'description' => 'Android应用的包名。',
                    'type' => 'string',
                    'example' => 'com.test.android',
                  ),
                  'CreateTime' => 
                  array (
                    'description' => '应用创建时间。UTC格式表达。',
                    'type' => 'string',
                    'example' => '2020-12-16T06:25:52Z',
                  ),
                  'Readonly' => 
                  array (
                    'description' => '标识应用是否为只读状态。

> 该字段用于特定场景，如无需要可忽略。',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                  'AppName' => 
                  array (
                    'description' => '应用的名称。',
                    'type' => 'string',
                    'example' => '我的应用',
                  ),
                  'CertProductExpiration' => 
                  array (
                    'description' => '推送生产证书过期时间。UTC格式表达。',
                    'type' => 'string',
                    'example' => '2020-12-16T06:25:52Z',
                  ),
                  'AppKey' => 
                  array (
                    'description' => '应用的AppKey，用于唯一标识应用。',
                    'type' => 'string',
                    'example' => '123456',
                  ),
                  'CertDevelopAvail' => 
                  array (
                    'description' => '标识推送配置开发者推送证书是否可用。',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                  'EncodedIcon' => 
                  array (
                    'description' => 'icon图片的base64字符串。',
                    'type' => 'string',
                    'example' => 'icon图片base64字符串',
                  ),
                  'ProductId' => 
                  array (
                    'description' => '应用所属工作空间的ID。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1234',
                  ),
                  'BundleId' => 
                  array (
                    'description' => 'iOS应用的BundleId。',
                    'type' => 'string',
                    'example' => 'com.test.ios',
                  ),
                  'CertProductAvail' => 
                  array (
                    'description' => '推送配置生产推送证书是否可用。',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"126D4DDD-05A5-49B1-B18C-39C4A929BFB2\\",\\n  \\"AppInfo\\": {\\n    \\"Status\\": 0,\\n    \\"Type\\": 1,\\n    \\"CertDevelopExpiration\\": \\"2020-12-16T06:25:52Z\\",\\n    \\"IndustryId\\": 1,\\n    \\"PackageName\\": \\"com.test.android\\",\\n    \\"CreateTime\\": \\"2020-12-16T06:25:52Z\\",\\n    \\"Readonly\\": false,\\n    \\"AppName\\": \\"我的应用\\",\\n    \\"CertProductExpiration\\": \\"2020-12-16T06:25:52Z\\",\\n    \\"AppKey\\": \\"123456\\",\\n    \\"CertDevelopAvail\\": false,\\n    \\"EncodedIcon\\": \\"icon图片base64字符串\\",\\n    \\"ProductId\\": 1234,\\n    \\"BundleId\\": \\"com.test.ios\\",\\n    \\"CertProductAvail\\": false\\n  }\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '查询应用详情',
      'summary' => '调用QueryAppInfo查询应用详情。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeDashboard' => 
    array (
      'summary' => '获取应用在各服务下的看板信息',
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
          'name' => 'ServiceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '产品名称',
            'type' => 'string',
            'required' => false,
            'example' => 'mqc',
          ),
        ),
        1 => 
        array (
          'name' => 'AppKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定应用的appkey，唯一标识应用。',
            'type' => 'string',
            'required' => false,
            'example' => '29201799',
          ),
        ),
        2 => 
        array (
          'name' => 'AppType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用类型，取值如下：1：ios2：android8：魔笔网页端9：魔笔移动端',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'AppVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用版本，默认为最新版。',
            'type' => 'string',
            'required' => false,
            'example' => '4.8',
          ),
        ),
        4 => 
        array (
          'name' => 'Keyword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '无用字段。',
            'type' => 'string',
            'required' => false,
            'example' => ' deprecated',
          ),
        ),
        5 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询开始时间，精确到毫秒的unix时间戳。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1681369984564',
          ),
        ),
        6 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '获取数据结束时间点。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1681985390256',
          ),
        ),
        7 => 
        array (
          'name' => 'ProxyAction',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '仅serviceName为 apm 时生效，子查询：查询app版本、查询性能监控概览，查询崩溃概览',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'queryAppVersions' => 'queryAppVersions',
              'queryApmInfo' => 'queryApmInfo',
              'queryCrashInfo' => 'queryCrashInfo',
            ),
            'example' => 'queryAppVersions',
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
                'description' => '请求唯一标识，用于识别一个请求。',
                'type' => 'string',
                'example' => '4CC30A8F-787C-55CA-87A6-7D1BED56067E',
              ),
              'Model' => 
              array (
                'description' => '返回结果',
                'type' => 'string',
                'example' => '{
	"success":true,
	"model":{
		"perfMonthCount":0,
		"compatibilityMonthCount":0,
		"perfLastMonthCount":0,
		"compatibilityLastMonthCount":0,
		"automationMonthCount":0,
		"automationLastMonthCount":0
	}
}',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4CC30A8F-787C-55CA-87A6-7D1BED56067E\\",\\n  \\"Model\\": \\"{\\\\n\\\\t\\\\\\"success\\\\\\":true,\\\\n\\\\t\\\\\\"model\\\\\\":{\\\\n\\\\t\\\\t\\\\\\"perfMonthCount\\\\\\":0,\\\\n\\\\t\\\\t\\\\\\"compatibilityMonthCount\\\\\\":0,\\\\n\\\\t\\\\t\\\\\\"perfLastMonthCount\\\\\\":0,\\\\n\\\\t\\\\t\\\\\\"compatibilityLastMonthCount\\\\\\":0,\\\\n\\\\t\\\\t\\\\\\"automationMonthCount\\\\\\":0,\\\\n\\\\t\\\\t\\\\\\"automationLastMonthCount\\\\\\":0\\\\n\\\\t}\\\\n}\\"\\n}","type":"json"}]',
      'title' => '获取应用在各服务下的看板信息。',
    ),
    'QueryAppSecurityInfo' => 
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定应用的AppKey，唯一标识应用。',
            'type' => 'string',
            'required' => true,
            'example' => '123456',
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
                'description' => '查询请求的ID。',
                'type' => 'string',
                'example' => '126D4DDD-05A5-49B1-B18C-39C4A929BFB2',
              ),
              'AppSecurityInfo' => 
              array (
                'description' => '应用的安全信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'AppSecret' => 
                  array (
                    'description' => '应用的AppSecret，用于在接口请求时进行签名鉴权等。',
                    'type' => 'string',
                    'example' => 'abc123abc123',
                  ),
                  'AppKey' => 
                  array (
                    'description' => '应用的AppKey，唯一标识应用。',
                    'type' => 'string',
                    'example' => '123456',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"126D4DDD-05A5-49B1-B18C-39C4A929BFB2\\",\\n  \\"AppSecurityInfo\\": {\\n    \\"AppSecret\\": \\"abc123abc123\\",\\n    \\"AppKey\\": \\"123456\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '查询应用秘钥信息',
      'summary' => '查询指定应用的AppSecret。AppSecret为秘钥信息，用于接口请求权限校验。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateProduct' => 
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
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置项目的名称。取值范围：1～30字符，字符类型：包含中文、英文大小写、数字、下划线（_）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '我的项目名称',
          ),
        ),
        1 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '简要描述项目的用途。',
            'type' => 'string',
            'required' => false,
            'example' => 'AAA',
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
              'ProductId' => 
              array (
                'description' => '项目的ID，唯一标识项目。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '123456',
              ),
              'RequestId' => 
              array (
                'description' => '请求的ID。',
                'type' => 'string',
                'example' => '126D4DDD-05A5-49B1-B18C-39C4A929BFB2',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"ProductId\\": 123456,\\n  \\"RequestId\\": \\"126D4DDD-05A5-49B1-B18C-39C4A929BFB2\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateProductResponse>\\n    <ProductId>123456</ProductId>\\n    <RequestId>126D4DDD-05A5-49B1-B18C-39C4A929BFB2</RequestId>\\n</CreateProductResponse>","errorExample":""}]',
      'title' => '创建工作空间',
      'summary' => '创建工作空间。工作空间是应用的分组，用于管理一组相关应用。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteProduct' => 
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProductId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定待删除的项目的ID。',
            'type' => 'string',
            'required' => true,
            'example' => '12345',
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
                'description' => '删除失败错误码。',
                'type' => 'string',
                'example' => 'PRODUCT_NOT_ALONE',
              ),
              'RequestId' => 
              array (
                'description' => '请求的ID。',
                'type' => 'string',
                'example' => '126D4DDD-05A5-49B1-B18C-39C4A929BFB2',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"PRODUCT_NOT_ALONE\\",\\n  \\"RequestId\\": \\"126D4DDD-05A5-49B1-B18C-39C4A929BFB2\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '删除工作空间',
      'summary' => '调用DeleteProduct删除工作空间。',
      'description' => '# 前提条件

已删除工作空间下属应用，即工作空间为空。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyProduct' => 
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
          'name' => 'ProductId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '项目ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1234',
          ),
        ),
        1 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '项目名称。取值范围：1～30字符，字符类型：包含中文、英文大小写、数字、下划线（_）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '我的工作空间',
          ),
        ),
        2 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '项目的简要描述。',
            'type' => 'string',
            'required' => false,
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
            'description' => '-',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求唯一标识，用于识别一个请求。
',
                'type' => 'string',
                'example' => '126D4DDD-05A5-49B1-B18C-39C4A929BFB2',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"126D4DDD-05A5-49B1-B18C-39C4A929BFB2\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyProductResponse>\\n    <RequestId>126D4DDD-05A5-49B1-B18C-39C4A929BFB2</RequestId>\\n</ModifyProductResponse>","errorExample":""}]',
      'title' => '修改工作空间',
      'summary' => '此接口用于修改工作空间基本信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListProducts' => 
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
          'name' => 'Offset',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前页码数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => true,
            'example' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'Size',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '- 每页可显示的项目的个数。
- 取值范围为：1-100。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => true,
            'example' => '20',
          ),
        ),
        2 => 
        array (
          'name' => 'Simple',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置是否为简化查询。

- true：简化查询。不返回encodedIcon和Platforms两个字段。
- false：非简化查询。返回全部字段。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        3 => 
        array (
          'name' => 'ProductName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '输入关键字，按项目名称模糊查询。',
            'type' => 'string',
            'required' => false,
            'example' => '我的项目',
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
              'UbsmsStatus' => 
              array (
                'description' => '当前账号状态，返回值说明如下：
    
- enabled：开通状态
- disabled：禁用状态
- inDebt：停机24小时以内（含24小时）
- inDebt24h：停机24小时以上',
                'type' => 'string',
                'example' => 'enabled',
              ),
              'RequestId' => 
              array (
                'description' => '请求的ID。
',
                'type' => 'string',
                'example' => '126D4DDD-05A5-49B1-B18C-39C4A929BFB2',
              ),
              'Total' => 
              array (
                'description' => '查询结果总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'ProductInfos' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'ProductInfo' => 
                  array (
                    'description' => '项目的概要信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'IndustryId' => 
                        array (
                          'description' => '行业ID，返回值说明如下：  
   
- 0：社交
- 1：摄影与摄像
- 2：效率
- 3：生活
- 4：美食佳饮
- 5：工具
- 6：娱乐
- 7：游戏
- 8：儿童
- 9：教育
- 10：报刊杂志
- 11：健康健美
- 12：旅游
- 13：音乐
- 14：体育
- 15：商务
- 16：新闻
- 17：财务
- 18：参考
- 19：导航
- 20：医疗
- 21：图书
- 22：天气
- 23：智能物联网',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'Platforms' => 
                        array (
                          'description' => '项目下属应用的平台，包含Android和iOS两种类型。',
                          'type' => 'string',
                          'example' => 'iOS',
                        ),
                        'CreateTime' => 
                        array (
                          'description' => '项目的创建时间。UTC格式表达。',
                          'type' => 'string',
                          'example' => '2020-12-16T06:25:52Z',
                        ),
                        'EncodedIcon' => 
                        array (
                          'description' => 'icon图片的base64字符串。',
                          'type' => 'string',
                          'example' => '图片 base64',
                        ),
                        'ProductId' => 
                        array (
                          'description' => '项目的ID。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1234',
                        ),
                        'Name' => 
                        array (
                          'description' => '项目的名称。',
                          'type' => 'string',
                          'example' => '我的项目',
                        ),
                        'Readonly' => 
                        array (
                          'description' => '标识项目是否为只读状态。',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                        'Description' => 
                        array (
                          'description' => '简要描述项目信息。',
                          'type' => 'string',
                          'example' => 'xxxx',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"UbsmsStatus\\": \\"enabled\\",\\n  \\"RequestId\\": \\"126D4DDD-05A5-49B1-B18C-39C4A929BFB2\\",\\n  \\"Total\\": 10,\\n  \\"ProductInfos\\": {\\n    \\"ProductInfo\\": [\\n      {\\n        \\"IndustryId\\": 1,\\n        \\"Platforms\\": \\"iOS\\",\\n        \\"CreateTime\\": \\"2020-12-16T06:25:52Z\\",\\n        \\"EncodedIcon\\": \\"图片 base64\\",\\n        \\"ProductId\\": 1234,\\n        \\"Name\\": \\"我的项目\\",\\n        \\"Readonly\\": false,\\n        \\"Description\\": \\"xxxx\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListProductsResponse>\\n    <UbsmsStatus>enabled</UbsmsStatus>\\n    <RequestId>126D4DDD-05A5-49B1-B18C-39C4A929BFB2</RequestId>\\n    <Total>10</Total>\\n    <ProductInfos>\\n        <IndustryId>1</IndustryId>\\n        <Platforms>iOS</Platforms>\\n        <CreateTime>2020-12-16T06:25:52Z</CreateTime>\\n        <EncodedIcon>图片 base64</EncodedIcon>\\n        <ProductId>1234</ProductId>\\n        <Name>我的项目</Name>\\n        <Readonly>false</Readonly>\\n        <Description>xxxx</Description>\\n    </ProductInfos>\\n</ListProductsResponse>","errorExample":""}]',
      'title' => '获取产品列表',
      'summary' => '调用ListProducts查询工作空间列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryProductInfo' => 
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProductId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '项目的ID。',
            'type' => 'string',
            'required' => true,
            'example' => '1234',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '-',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '查询请求的ID。
',
                'type' => 'string',
                'example' => '126D4DDD-05A5-49B1-B18C-39C4A929BFB2',
              ),
              'ProductInfo' => 
              array (
                'description' => '项目的详细信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'EncodedIcon' => 
                  array (
                    'description' => 'icon图片的base64字符串。',
                    'type' => 'string',
                    'example' => 'icon图片base64字符串',
                  ),
                  'IndustryId' => 
                  array (
                    'description' => '  * 0. 社交
     * 1. 摄影与摄像
     * 2. 效率
     * 3. 生活
     * 4. 美食佳饮
     * 5. 工具
     * 6. 娱乐
     * 7. 游戏
     * 8. 儿童
     * 9. 教育
     * 10. 报刊杂志
     * 11. 健康健美
     * 12. 旅游
     * 13. 音乐
     * 14. 体育
     * 15. 商务
     * 16. 新闻
     * 17. 财务
     * 18. 参考
     * 19. 导航
     * 20. 医疗
     * 21. 图书
     * 22. 天气
     * 23. 智能物联网 ',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'Name' => 
                  array (
                    'description' => '项目的名称。',
                    'type' => 'string',
                    'example' => '我的项目',
                  ),
                  'Readonly' => 
                  array (
                    'description' => '标识项目是否只读。

> 该字段用于特定场景，如无需要可忽略。',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                  'IconName' => 
                  array (
                    'description' => 'icon图片的名称。',
                    'type' => 'string',
                    'example' => 'icon图片名称',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"126D4DDD-05A5-49B1-B18C-39C4A929BFB2\\",\\n  \\"ProductInfo\\": {\\n    \\"EncodedIcon\\": \\"icon图片base64字符串\\",\\n    \\"IndustryId\\": 1,\\n    \\"Name\\": \\"我的项目\\",\\n    \\"Readonly\\": false,\\n    \\"IconName\\": \\"icon图片名称\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<QueryProductInfoResponse>\\n    <RequestId>126D4DDD-05A5-49B1-B18C-39C4A929BFB2</RequestId>\\n    <ProductInfo>\\n        <EncodedIcon>icon图片base64字符串</EncodedIcon>\\n        <IndustryId>1</IndustryId>\\n        <Name>我的项目</Name>\\n        <Readonly>false</Readonly>\\n        <IconName>icon图片名称</IconName>\\n    </ProductInfo>\\n</QueryProductInfoResponse>","errorExample":""}]',
      'title' => '查询工作空间详细信息',
      'summary' => '查询工作空间的详细信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'mhub.cn-shanghai.aliyuncs.com',
    ),
  ),
);
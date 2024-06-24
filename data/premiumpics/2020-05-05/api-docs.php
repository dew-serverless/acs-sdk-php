<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'Premiumpics',
    'version' => '2020-05-05',
  ),
  'directories' => 
  array (
    0 => 'CreateImageOrder',
    1 => 'CreateInventoryLock',
    2 => 'DeleteUserCollection',
    3 => 'DescribeDownloadImageInfo',
    4 => 'DescribeIndustryList',
    5 => 'DescribeLogo',
    6 => 'DescribeUserProduce',
    7 => 'GetLogoFontList',
    8 => 'GetProduceInfo',
    9 => 'GetTextLogoList',
    10 => 'ListDesign',
    11 => 'ListLogoSamples',
    12 => 'ListUserProduceOperateLogs',
    13 => 'ListUserCollections',
    14 => 'OperateProduceForUser',
    15 => 'QueryBarrelImageList',
    16 => 'GetTemplateCategories',
    17 => 'QueryConfigurationOrder',
    18 => 'CreateConfigurationOrder',
  ),
  'components' => 
  array (
    'schemas' => 
    array (
    ),
  ),
  'apis' => 
  array (
    'CreateImageOrder' => 
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
        0 => 
        array (
          'name' => 'OrderType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '1更新时间，2创建时间',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'SINGLE',
            'default' => '',
            'enum' => 
            array (
              0 => 'BUY',
              1 => 'RENEW',
            ),
          ),
        ),
        1 => 
        array (
          'name' => 'Type',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'type',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'A',
            'default' => '',
            'enum' => 
            array (
              0 => 'SINGLE',
              1 => 'PACKAGE',
            ),
          ),
        ),
        2 => 
        array (
          'name' => 'GoodsId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '商品id',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '0da9332a7e46bf3a3648322cc4cefe55',
          ),
        ),
        3 => 
        array (
          'name' => 'SpecificationName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '图片规格',
            'type' => 'string',
            'required' => false,
            'example' => '专业版',
          ),
        ),
        4 => 
        array (
          'name' => 'AutoRenew',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否自动支付预付费实例的账单：-true：是-false：否',
            'type' => 'string',
            'required' => false,
            'example' => 'true',
            'default' => 'false',
            'enum' => 
            array (
              0 => 'true',
              1 => 'false',
            ),
          ),
        ),
        5 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'waf-cn-2r427peet48',
          ),
        ),
        6 => 
        array (
          'name' => 'BuyerType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '购买的渠道类型',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1',
            'default' => '',
            'enum' => 
            array (
              0 => 'INDIVIDUALY',
              1 => 'ENTERPRICE',
            ),
          ),
        ),
        7 => 
        array (
          'name' => 'ContactName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '联系人名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '韩媛媛',
          ),
        ),
        8 => 
        array (
          'name' => 'ContactNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '联系人电话号码',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '123****6789',
          ),
        ),
        9 => 
        array (
          'name' => 'Channel',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '会议码',
            'type' => 'string',
            'required' => false,
            'example' => '6',
          ),
        ),
        10 => 
        array (
          'name' => 'Token',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于保证请求的幂等性。由客户端生成该参数值，要保证在不同请求间唯一，最大值不超过64个ascii字符。',
            'type' => 'string',
            'required' => false,
            'example' => '74aed3df801b1abeea70604eae4c777a',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => 'root',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'FF882F7C-BF8D-5DCC-9F63-93A5BA36FD9F',
              ),
              'ErrorMsg' => 
              array (
                'description' => 'errorMsg',
                'type' => 'string',
                'example' => '{&quot;ErrMsg&quot;:&quot;Right angle correction failed!&quot;,&quot;ErrCode&quot;:&quot;5002&quot;}',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码',
                'type' => 'string',
                'example' => '0',
              ),
              'OrderId' => 
              array (
                'description' => '工单 Id。',
                'type' => 'string',
                'example' => '216992253670473',
              ),
              'Success' => 
              array (
                'description' => '表示是否调用成功。
- **true**：调用成功。
- **false**：调用失败。',
                'type' => 'boolean',
                'example' => 'True',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"FF882F7C-BF8D-5DCC-9F63-93A5BA36FD9F\\",\\n  \\"ErrorMsg\\": \\"{&quot;ErrMsg&quot;:&quot;Right angle correction failed!&quot;,&quot;ErrCode&quot;:&quot;5002&quot;}\\",\\n  \\"ErrorCode\\": \\"0\\",\\n  \\"OrderId\\": \\"216992253670473\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '创建图片订单',
      'summary' => '创建图片订单',
    ),
    'CreateInventoryLock' => 
    array (
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
          'name' => 'GoodsId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '商品id',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'acf5c3c5fa4358ae158263d6b7cce2e9',
          ),
        ),
        1 => 
        array (
          'name' => 'UserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'UserId',
            'type' => 'string',
            'required' => false,
            'example' => 'UserId',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => 'root',
            'type' => 'object',
            'properties' => 
            array (
              'Status' => 
              array (
                'description' => 'status',
                'type' => 'boolean',
                'example' => 'True',
              ),
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => '4A89FD37-CAAB-5B31-A789-D073A5445578',
              ),
              'Success' => 
              array (
                'description' => '是否成功。',
                'type' => 'boolean',
                'example' => 'True',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        200 => 
        array (
          0 => 
          array (
            'errorCode' => '0',
            'errorMessage' => 'The operation is successful.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Status\\": true,\\n  \\"RequestId\\": \\"4A89FD37-CAAB-5B31-A789-D073A5445578\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '创建锁',
      'summary' => '创建锁',
    ),
    'DeleteUserCollection' => 
    array (
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
          'name' => 'UnitId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待删除的用户id',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2c5d68e067f84c99b33def98f30d26d4',
          ),
        ),
        1 => 
        array (
          'name' => 'BizType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'BizType',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'esp.logo',
          ),
        ),
        2 => 
        array (
          'name' => 'UserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'userid',
            'type' => 'string',
            'required' => false,
            'example' => 'userid',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => 'root',
            'type' => 'object',
            'properties' => 
            array (
              'Status' => 
              array (
                'description' => 'status',
                'type' => 'boolean',
                'example' => 'True',
              ),
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => 'AEA9CED1-57F2-5E33-A86A-427D46E7EBF7',
              ),
              'ErrorMsg' => 
              array (
                'description' => 'errorMsg',
                'type' => 'string',
                'example' => 'dabukai dabukaidabukaidabukai',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码。当您删除规则成功时，该参数为空。当您删除规则失败时，该参数显示错误码。错误码详情，请参见错误中心。',
                'type' => 'string',
                'example' => '0',
              ),
              'Success' => 
              array (
                'description' => '是否成功回收了指定的实例角色。',
                'type' => 'boolean',
                'example' => 'True',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        200 => 
        array (
          0 => 
          array (
            'errorCode' => '0',
            'errorMessage' => 'The operation is successful.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Status\\": true,\\n  \\"RequestId\\": \\"AEA9CED1-57F2-5E33-A86A-427D46E7EBF7\\",\\n  \\"ErrorMsg\\": \\"dabukai dabukaidabukaidabukai\\",\\n  \\"ErrorCode\\": \\"0\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '删除收藏',
      'summary' => '删除收藏',
    ),
    'DescribeDownloadImageInfo' => 
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
          'name' => 'BizId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '业务ID',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'P20220627101248000001',
            'default' => '',
          ),
        ),
        1 => 
        array (
          'name' => 'ImageId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '图片id。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'h5568374035170305',
            'default' => '',
          ),
        ),
        2 => 
        array (
          'name' => 'SpecificationName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '图片类型',
            'type' => 'string',
            'required' => false,
            'example' => '基础版',
          ),
        ),
        3 => 
        array (
          'name' => 'ImageUserBuyId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'ImageUserBuyId',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => 'ImageUserBuyId',
            'default' => '',
          ),
        ),
        4 => 
        array (
          'name' => 'DownloadType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '下载类型：-standard（默认值）：通用下载-file：文件下载',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2',
            'enum' => 
            array (
              0 => 'IMAGE',
              1 => 'AUTHORIZATION',
              2 => 'IMAGE_AUTHORIZATION',
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
            'description' => 'root',
            'type' => 'object',
            'properties' => 
            array (
              'AuthorizationUrl' => 
              array (
                'description' => '授权书下载地址。',
                'type' => 'string',
                'example' => 'http',
              ),
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => '047CE3B4-32EE-5AB9-89C8-BCEC23A5B4F4',
              ),
              'ErrorMsg' => 
              array (
                'description' => 'errorMsg',
                'type' => 'string',
                'example' => 'Success. Request Success.',
              ),
              'ImageUrl' => 
              array (
                'description' => '下载地址。',
                'type' => 'string',
                'example' => 'dsw-registry-vpc.cn-shenzhen.cr.aliyuncs.com/cloud-dsw-user/users:u1135620889978899-8589-20220922110432',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码。',
                'type' => 'string',
                'example' => 'sae.errorcode.ServiceDisabled.message',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功。取值：true：调用成功。                                 false：调用失败。',
                'type' => 'boolean',
                'example' => 'True',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"AuthorizationUrl\\": \\"http\\",\\n  \\"RequestId\\": \\"047CE3B4-32EE-5AB9-89C8-BCEC23A5B4F4\\",\\n  \\"ErrorMsg\\": \\"Success. Request Success.\\",\\n  \\"ImageUrl\\": \\"dsw-registry-vpc.cn-shenzhen.cr.aliyuncs.com/cloud-dsw-user/users:u1135620889978899-8589-20220922110432\\",\\n  \\"ErrorCode\\": \\"sae.errorcode.ServiceDisabled.message\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '描述下载图片信息',
      'summary' => '描述下载图片信息',
    ),
    'DescribeIndustryList' => 
    array (
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
            'description' => 'root',
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'description' => '是否调用成功。

- **true**：调用成功。
- **false**：调用失败。',
                'type' => 'boolean',
                'example' => 'True',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '2653A619-5539-50C3-8120-1594A3B758DD',
              ),
              'Data' => 
              array (
                'description' => '结果。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '结果。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'IndustryId' => 
                    array (
                      'description' => '行业id',
                      'type' => 'string',
                      'example' => '21',
                    ),
                    'Name' => 
                    array (
                      'description' => 'Waba名称',
                      'type' => 'string',
                      'example' => '金百丽',
                    ),
                    'Description' => 
                    array (
                      'description' => '域名描述。',
                      'type' => 'string',
                      'example' => '高端海鲜',
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
        200 => 
        array (
          0 => 
          array (
            'errorCode' => '0',
            'errorMessage' => 'The operation is successful.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"2653A619-5539-50C3-8120-1594A3B758DD\\",\\n  \\"Data\\": [\\n    {\\n      \\"IndustryId\\": \\"21\\",\\n      \\"Name\\": \\"金百丽\\",\\n      \\"Description\\": \\"高端海鲜\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '描述行业列表',
      'summary' => '描述行业列表',
    ),
    'DescribeLogo' => 
    array (
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'GoodsId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '逻辑库id',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'a4dbb263d80f4362bbc8305deacf2499',
          ),
        ),
        1 => 
        array (
          'name' => 'UserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'userId',
            'type' => 'string',
            'required' => false,
            'example' => 'userId',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => 'root',
            'type' => 'object',
            'properties' => 
            array (
              'FontDescription' => 
              array (
                'description' => '详细描述',
                'type' => 'string',
                'example' => 'FontDescription',
              ),
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => '0FDB7AA6-CEA2-5948-B930-A01F5266D90E',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功',
                'type' => 'boolean',
                'example' => 'True',
              ),
              'BrandName' => 
              array (
                'description' => '品牌名称。',
                'type' => 'string',
                'example' => '吕記',
              ),
              'NamePath' => 
              array (
                'description' => '镜像路径',
                'type' => 'string',
                'example' => 'path
',
              ),
              'ColorTwo' => 
              array (
                'description' => '价签位置',
                'type' => 'string',
                'example' => '蓝',
              ),
              'ColorOne' => 
              array (
                'description' => '付费类型为包年包月时，返回的ivr主键',
                'type' => 'string',
                'example' => '绿',
              ),
              'ColorDescription' => 
              array (
                'description' => '授权详情描述',
                'type' => 'string',
                'example' => '红',
              ),
              'ColorThree' => 
              array (
                'description' => '是否开通日志：-true：开通-false：未开通',
                'type' => 'string',
                'example' => 'red',
              ),
              'Images' => 
              array (
                'description' => '镜像详情。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '镜像',
                  'type' => 'string',
                  'example' => '[]',
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        200 => 
        array (
          0 => 
          array (
            'errorCode' => '0',
            'errorMessage' => 'The operation is successful.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"FontDescription\\": \\"FontDescription\\",\\n  \\"RequestId\\": \\"0FDB7AA6-CEA2-5948-B930-A01F5266D90E\\",\\n  \\"Success\\": true,\\n  \\"BrandName\\": \\"吕記\\",\\n  \\"NamePath\\": \\"path\\\\n\\",\\n  \\"ColorTwo\\": \\"蓝\\",\\n  \\"ColorOne\\": \\"绿\\",\\n  \\"ColorDescription\\": \\"红\\",\\n  \\"ColorThree\\": \\"red\\",\\n  \\"Images\\": [\\n    \\"[]\\"\\n  ]\\n}","type":"json"}]',
      'title' => '描述logo',
      'summary' => '描述logo',
    ),
    'DescribeUserProduce' => 
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
          'name' => 'BizId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '业务ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'P20220731142346000001',
          ),
        ),
        1 => 
        array (
          'name' => 'BizType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'BizType',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'esp.logo',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => 'root',
            'type' => 'object',
            'properties' => 
            array (
              'Status' => 
              array (
                'description' => '状态。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '40',
              ),
              'EndTime' => 
              array (
                'description' => '免费角色到期时间。',
                'type' => 'string',
                'example' => '2022-08-24 10:53:00',
              ),
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => '1B0A9A68-5A1A-5179-8591-0463F4686EEB',
              ),
              'OrderPrice' => 
              array (
                'description' => '订单原价(单位:分)',
                'type' => 'string',
                'example' => '1899.00',
              ),
              'StartTime' => 
              array (
                'description' => '生效时间。',
                'type' => 'string',
                'example' => '2022-10-16T06:35:00Z',
              ),
              'ErrorMsg' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => '111111111111111',
              ),
              'BizType' => 
              array (
                'description' => 'BizType',
                'type' => 'string',
                'example' => 'esp.logo',
              ),
              'OrderId' => 
              array (
                'description' => '订单ID。',
                'type' => 'string',
                'example' => '216992253670473',
              ),
              'Success' => 
              array (
                'description' => '操作是否成功。取值：true：成功。false：失败。',
                'type' => 'boolean',
                'example' => 'True',
              ),
              'PartnerCode' => 
              array (
                'description' => '错误码',
                'type' => 'string',
                'example' => 'luokeke',
              ),
              'IntentionBizId' => 
              array (
                'description' => '需求ID',
                'type' => 'string',
                'example' => 'I20221129122203000001',
              ),
              'OrderInstanceId' => 
              array (
                'description' => '预留实例id',
                'type' => 'string',
                'example' => 'swcopyright_swRegNormal_public_cn-tl32wr9giwy',
              ),
              'UserId' => 
              array (
                'description' => 'UserId',
                'type' => 'string',
                'example' => 'UserId',
              ),
              'ExtInfo' => 
              array (
                'description' => '扩展信息。',
                'type' => 'string',
                'example' => '{\\"designFileUrl\\":\\"https:\\\\/\\\\/oss.smalld.cn\\\\/zip\\\\/svg\\\\/20220519\\\\/3e63365c-f7d9-4fa6-9d38-413262fbf4c7.zip\\"}',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误代码。',
                'type' => 'string',
                'example' => 'sae.errorcode.ServiceDisabled.message',
              ),
              'SolutionBizId' => 
              array (
                'description' => '方案ID',
                'type' => 'string',
                'example' => 'S20220624105026000001',
              ),
              'BizId' => 
              array (
                'description' => '业务ID',
                'type' => 'string',
                'example' => 'P20220713180339000001',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Status\\": 40,\\n  \\"EndTime\\": \\"2022-08-24 10:53:00\\",\\n  \\"RequestId\\": \\"1B0A9A68-5A1A-5179-8591-0463F4686EEB\\",\\n  \\"OrderPrice\\": \\"1899.00\\",\\n  \\"StartTime\\": \\"2022-10-16T06:35:00Z\\",\\n  \\"ErrorMsg\\": \\"111111111111111\\",\\n  \\"BizType\\": \\"esp.logo\\",\\n  \\"OrderId\\": \\"216992253670473\\",\\n  \\"Success\\": true,\\n  \\"PartnerCode\\": \\"luokeke\\",\\n  \\"IntentionBizId\\": \\"I20221129122203000001\\",\\n  \\"OrderInstanceId\\": \\"swcopyright_swRegNormal_public_cn-tl32wr9giwy\\",\\n  \\"UserId\\": \\"UserId\\",\\n  \\"ExtInfo\\": \\"{\\\\\\\\\\\\\\"designFileUrl\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"https:\\\\\\\\\\\\\\\\/\\\\\\\\\\\\\\\\/oss.smalld.cn\\\\\\\\\\\\\\\\/zip\\\\\\\\\\\\\\\\/svg\\\\\\\\\\\\\\\\/20220519\\\\\\\\\\\\\\\\/3e63365c-f7d9-4fa6-9d38-413262fbf4c7.zip\\\\\\\\\\\\\\"}\\",\\n  \\"ErrorCode\\": \\"sae.errorcode.ServiceDisabled.message\\",\\n  \\"SolutionBizId\\": \\"S20220624105026000001\\",\\n  \\"BizId\\": \\"P20220713180339000001\\"\\n}","type":"json"}]',
      'title' => '描述用户产品',
      'summary' => '描述用户产品',
    ),
    'GetLogoFontList' => 
    array (
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Type',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'type',
            'type' => 'string',
            'required' => false,
            'example' => 'brand',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => 'root',
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'description' => '调用是否成功。',
                'type' => 'boolean',
                'example' => 'True',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '8F007088-FD52-596E-8688-D7AE887D8329',
              ),
              'Fonts' => 
              array (
                'description' => '返回的fort信息列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '返回的fort信息列表',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'FontId' => 
                    array (
                      'description' => '字体id',
                      'type' => 'string',
                      'example' => 'dfs',
                    ),
                    'Name' => 
                    array (
                      'description' => '任务名称',
                      'type' => 'string',
                      'example' => 'MyFamily',
                    ),
                    'Image' => 
                    array (
                      'description' => '原图',
                      'type' => 'string',
                      'example' => '18622562726',
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
        200 => 
        array (
          0 => 
          array (
            'errorCode' => '0',
            'errorMessage' => 'The operation is successful.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"8F007088-FD52-596E-8688-D7AE887D8329\\",\\n  \\"Fonts\\": [\\n    {\\n      \\"FontId\\": \\"dfs\\",\\n      \\"Name\\": \\"MyFamily\\",\\n      \\"Image\\": \\"18622562726\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '字体logo列表',
      'summary' => '字体logo列表',
    ),
    'GetProduceInfo' => 
    array (
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'GoodsId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '商品id',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '94e51c6930d24f0b88f2a4f5066089c7',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => 'root',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => '55534AD0-F8E2-5114-BB52-72150A499DEB',
              ),
              'BizId' => 
              array (
                'description' => '业务ID',
                'type' => 'string',
                'example' => 'P20220531100052000001',
              ),
              'GoodsId' => 
              array (
                'description' => '商品id',
                'type' => 'string',
                'example' => '6c1ccb5f26794d16bb13330fa84c86c7',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功。
- **true**：调用成功。
- **false**：调用失败。',
                'type' => 'boolean',
                'example' => 'True',
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
            'errorCode' => 'SYSTEM.ERROR',
            'errorMessage' => 'A system error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"55534AD0-F8E2-5114-BB52-72150A499DEB\\",\\n  \\"BizId\\": \\"P20220531100052000001\\",\\n  \\"GoodsId\\": \\"6c1ccb5f26794d16bb13330fa84c86c7\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '产品信息',
      'summary' => '产品信息',
    ),
    'GetTextLogoList' => 
    array (
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'BrandName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '品牌名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '纪贝芬',
          ),
        ),
        1 => 
        array (
          'name' => 'FontId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户id',
            'type' => 'string',
            'required' => false,
            'example' => 'dfs',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => 'root',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => '88E0B72B-7EA8-5D8F-BDA5-27A01E0539F4',
              ),
              'Success' => 
              array (
                'description' => '此次操作是否成功。',
                'type' => 'boolean',
                'example' => 'True',
              ),
              'LogoVersion' => 
              array (
                'description' => '日志最后修改时间。',
                'type' => 'string',
                'example' => '5d6716ceb8cd4370a05e0a0e30f4cb78',
              ),
              'Logos' => 
              array (
                'description' => '具体内容，请参见[textlogolist](~~28935~~)。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '具体内容，请参见[textlogolist](~~28935~~)。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'GoodsId' => 
                    array (
                      'description' => '商品id',
                      'type' => 'string',
                      'example' => '812f1855fa8d2b1e31ec2653eebe0702',
                    ),
                    'Url' => 
                    array (
                      'description' => '可公开访问的地址。',
                      'type' => 'string',
                      'example' => 'https://edu.aliyun.com/clouder/gdpr/showResourceAlert?token=fftdXk12sf3dHrp%2BukTT87K%2BDXM%3D',
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
        200 => 
        array (
          0 => 
          array (
            'errorCode' => '0',
            'errorMessage' => 'The operation is successful.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"88E0B72B-7EA8-5D8F-BDA5-27A01E0539F4\\",\\n  \\"Success\\": true,\\n  \\"LogoVersion\\": \\"5d6716ceb8cd4370a05e0a0e30f4cb78\\",\\n  \\"Logos\\": [\\n    {\\n      \\"GoodsId\\": \\"812f1855fa8d2b1e31ec2653eebe0702\\",\\n      \\"Url\\": \\"https://edu.aliyun.com/clouder/gdpr/showResourceAlert?token=fftdXk12sf3dHrp%2BukTT87K%2BDXM%3D\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '文字logo列表',
      'summary' => '文字logo列表',
    ),
    'ListDesign' => 
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
          'name' => 'DesignType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '类型',
            'type' => 'string',
            'required' => false,
            'example' => 'business_card',
          ),
        ),
        1 => 
        array (
          'name' => 'DesignVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '版本',
            'type' => 'string',
            'required' => false,
            'example' => '47c2f5ff-6c7c-4ef0-b48c-b12e1e996ed6',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询的每页行数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '100',
            'minimum' => '1',
            'example' => '10',
            'default' => '10',
          ),
        ),
        3 => 
        array (
          'name' => 'ExtInfo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '扩展信息。',
            'type' => 'string',
            'required' => false,
            'example' => '{\\"designFileUrl\\":\\"https:\\\\/\\\\/oss.smalld.cn\\\\/zip\\\\/svg\\\\/20220110\\\\/5990f7b0-5cc3-4f9e-8bda-6be44cd82d9c.zip\\"}',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => 'root',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => '00F97175-FEAA-5E42-B048-952D32E9B881',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功。true：调用成功。                                 false：调用失败。',
                'type' => 'boolean',
                'example' => 'True',
              ),
              'Version' => 
              array (
                'description' => 'API的版本。',
                'type' => 'string',
                'example' => '2018-12-12',
              ),
              'End' => 
              array (
                'description' => '统计结束时间',
                'type' => 'integer',
                'format' => 'int32',
                'example' => 'True',
              ),
              'PageNumber' => 
              array (
                'description' => '返回结果分页。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'DesignVersion' => 
              array (
                'description' => '版本',
                'type' => 'string',
                'example' => '47c2f5ff-6c7c-4ef0-b48c-b12e1e996ed6',
              ),
              'Data' => 
              array (
                'description' => '返回数据',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '返回结果。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'GoodsId' => 
                    array (
                      'description' => '预测类目的id',
                      'type' => 'string',
                      'example' => 'c87ddbe58afd40ed864d3cab7c8c01b2',
                    ),
                    'Templates' => 
                    array (
                      'description' => '模板列表',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '模板列表',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'PreviewUrl' => 
                          array (
                            'description' => '正式预览链接 ',
                            'type' => 'string',
                            'example' => 'https://preview-lyj.aliyuncs.com/preview/36dec4b3530848dc90e128870790fdc4?subSceneIds=219024',
                          ),
                          'TemplateId' => 
                          array (
                            'description' => '模板ID',
                            'type' => 'string',
                            'example' => '1320814',
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
        200 => 
        array (
          0 => 
          array (
            'errorCode' => '0',
            'errorMessage' => 'The operation is successful.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"00F97175-FEAA-5E42-B048-952D32E9B881\\",\\n  \\"Success\\": true,\\n  \\"Version\\": \\"2018-12-12\\",\\n  \\"End\\": 0,\\n  \\"PageNumber\\": 1,\\n  \\"DesignVersion\\": \\"47c2f5ff-6c7c-4ef0-b48c-b12e1e996ed6\\",\\n  \\"Data\\": [\\n    {\\n      \\"GoodsId\\": \\"c87ddbe58afd40ed864d3cab7c8c01b2\\",\\n      \\"Templates\\": [\\n        {\\n          \\"PreviewUrl\\": \\"https://preview-lyj.aliyuncs.com/preview/36dec4b3530848dc90e128870790fdc4?subSceneIds=219024\\",\\n          \\"TemplateId\\": \\"1320814\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '设计列表',
      'summary' => '设计列表',
    ),
    'ListLogoSamples' => 
    array (
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'GoodsId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '商品id',
            'type' => 'string',
            'required' => false,
            'example' => 'e2a520fd3efd46fcb8e2e112b158b246',
          ),
        ),
        1 => 
        array (
          'name' => 'Page',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页号',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '500',
            'minimum' => '0',
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'UserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'UserId',
            'type' => 'string',
            'required' => false,
            'example' => 'UserId',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => 'root',
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'description' => '请求结果，取值如下：true：请求成功。                                 false：请求失败。',
                'type' => 'boolean',
                'example' => 'True',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。

',
                'type' => 'string',
                'example' => '526B029B-2A59-5A71-9C22-B01926D80B14',
              ),
              'Images' => 
              array (
                'description' => '图片',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '图片',
                  'type' => 'string',
                  'example' => '[\\"https://ocm-prd.oss-cn-shanghai.aliyuncs.com/20220607/y7nml82a9dj.png\\"]',
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        200 => 
        array (
          0 => 
          array (
            'errorCode' => '0',
            'errorMessage' => 'The operation is successful.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"526B029B-2A59-5A71-9C22-B01926D80B14\\",\\n  \\"Images\\": [\\n    \\"[\\\\\\\\\\\\\\"https://ocm-prd.oss-cn-shanghai.aliyuncs.com/20220607/y7nml82a9dj.png\\\\\\\\\\\\\\"]\\"\\n  ]\\n}","type":"json"}]',
      'title' => 'logo示例列表',
      'summary' => 'logo示例列表',
    ),
    'ListUserProduceOperateLogs' => 
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
          'name' => 'BizType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'BizType',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'esp.logo',
          ),
        ),
        1 => 
        array (
          'name' => 'BizId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '业务ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'P20220428100535000001',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNum',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名列表的页码。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '3',
          ),
        ),
        3 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页大小',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
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
            'description' => 'root',
            'type' => 'object',
            'properties' => 
            array (
              'PageNum' => 
              array (
                'description' => '页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => 'DA789D6E-875B-5473-B374-ABA909970BAB',
              ),
              'PageSize' => 
              array (
                'description' => '返回分页大小。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '20',
              ),
              'TotalPageNum' => 
              array (
                'description' => '总计页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '3',
              ),
              'Data' => 
              array (
                'description' => '返回数据。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '返回数据。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'OperateTime' => 
                    array (
                      'description' => '操作时间戳',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1662531548',
                    ),
                    'OperateUserType' => 
                    array (
                      'description' => 'OperateUserType',
                      'type' => 'string',
                      'example' => 'OperateUserType',
                    ),
                    'BizId' => 
                    array (
                      'description' => '业务ID',
                      'type' => 'string',
                      'example' => 'P20220722103530000001',
                    ),
                    'OperateName' => 
                    array (
                      'description' => '操作人名称',
                      'type' => 'string',
                      'example' => 'StopOperationScriptInvocation',
                    ),
                    'BizType' => 
                    array (
                      'description' => 'BizType',
                      'type' => 'string',
                      'example' => 'esp.logo',
                    ),
                  ),
                ),
              ),
              'TotalItemNum' => 
              array (
                'description' => '总条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功。

- **true**：调用成功。

- **false**：调用失败。',
                'type' => 'boolean',
                'example' => 'True',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"PageNum\\": 2,\\n  \\"RequestId\\": \\"DA789D6E-875B-5473-B374-ABA909970BAB\\",\\n  \\"PageSize\\": 20,\\n  \\"TotalPageNum\\": 3,\\n  \\"Data\\": [\\n    {\\n      \\"OperateTime\\": 1662531548,\\n      \\"OperateUserType\\": \\"OperateUserType\\",\\n      \\"BizId\\": \\"P20220722103530000001\\",\\n      \\"OperateName\\": \\"StopOperationScriptInvocation\\",\\n      \\"BizType\\": \\"esp.logo\\"\\n    }\\n  ],\\n  \\"TotalItemNum\\": 1,\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '查询服务单操作日志',
      'summary' => '查询服务单操作日志',
    ),
    'ListUserCollections' => 
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
          'name' => 'BizType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '业务类型',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'esp.logo',
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'maximum' => '200',
            'minimum' => '1',
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNum',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页数量',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '5000',
            'minimum' => '0',
            'example' => '21',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '根',
            'type' => 'object',
            'properties' => 
            array (
              'TotalCount' => 
              array (
                'description' => '总数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '20',
              ),
              'RequestId' => 
              array (
                'description' => 'requestId',
                'type' => 'string',
                'example' => '5AF6352F-7F3E-1325-B717-314BDC5A1311',
              ),
              'PageSize' => 
              array (
                'description' => '每页大小',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
              'PageNumber' => 
              array (
                'description' => '页码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '3',
              ),
              'ErrorMsg' => 
              array (
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'error',
              ),
              'Data' => 
              array (
                'description' => '信息',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '内容',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'UnitId' => 
                    array (
                      'description' => 'id',
                      'type' => 'string',
                      'example' => 'cd6c189cc87842afb5985fa1712dc797',
                    ),
                    'Image' => 
                    array (
                      'description' => '图片',
                      'type' => 'string',
                      'example' => 'https://pre-logo.aliyun.com/logo/image?goodsId=cd6c189cc87842afb5985fa1712dc797&type=png',
                    ),
                    'UnitName' => 
                    array (
                      'description' => '名称',
                      'type' => 'string',
                      'example' => 'logo名称',
                    ),
                    'extend' => 
                    array (
                      'description' => '扩展信息',
                      'type' => 'string',
                      'example' => '{"cudId":"P20221026203254000001","from":"cud"}',
                    ),
                  ),
                ),
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码',
                'type' => 'string',
                'example' => '123',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        200 => 
        array (
          0 => 
          array (
            'errorCode' => '0',
            'errorMessage' => 'The operation is successful.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 20,\\n  \\"RequestId\\": \\"5AF6352F-7F3E-1325-B717-314BDC5A1311\\",\\n  \\"PageSize\\": 2,\\n  \\"PageNumber\\": 3,\\n  \\"ErrorMsg\\": \\"error\\",\\n  \\"Data\\": [\\n    {\\n      \\"UnitId\\": \\"cd6c189cc87842afb5985fa1712dc797\\",\\n      \\"Image\\": \\"https://pre-logo.aliyun.com/logo/image?goodsId=cd6c189cc87842afb5985fa1712dc797&type=png\\",\\n      \\"UnitName\\": \\"logo名称\\",\\n      \\"extend\\": \\"{\\\\\\"cudId\\\\\\":\\\\\\"P20221026203254000001\\\\\\",\\\\\\"from\\\\\\":\\\\\\"cud\\\\\\"}\\"\\n    }\\n  ],\\n  \\"ErrorCode\\": \\"123\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<ListUserCollectionsResponse>\\n    <TotalCount>20</TotalCount>\\n    <RequestId>5AF6352F-7F3E-1325-B717-314BDC5A1311</RequestId>\\n    <PageSize>2</PageSize>\\n    <PageNumber>3</PageNumber>\\n    <ErrorMsg>error</ErrorMsg>\\n    <Data>\\n        <UnitId>cd6c189cc87842afb5985fa1712dc797</UnitId>\\n        <Image>https://pre-logo.aliyun.com/logo/image?goodsId=cd6c189cc87842afb5985fa1712dc797&amp;type=png</Image>\\n        <UnitName>logo名称</UnitName>\\n        <extend>{\\"cudId\\":\\"P20221026203254000001\\",\\"from\\":\\"cud\\"}</extend>\\n    </Data>\\n    <ErrorCode>123</ErrorCode>\\n    <Success>true</Success>\\n</ListUserCollectionsResponse>","errorExample":""}]',
      'title' => '收藏列表',
      'summary' => '收藏列表',
      'description' => '无',
      'responseParamsDescription' => '无',
      'extraInfo' => '无',
    ),
    'OperateProduceForUser' => 
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
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'BizType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'BizType',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'esp.logo',
          ),
        ),
        1 => 
        array (
          'name' => 'BizId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '业务ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'P20221110021200000001',
          ),
        ),
        2 => 
        array (
          'name' => 'OperateType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定操作的类型：-improve：迁移-replace：替换',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'USER_CONFIRM',
          ),
        ),
        3 => 
        array (
          'name' => 'ExtInfo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '扩展字段',
            'type' => 'string',
            'required' => false,
            'example' => '{\\"downloadType\\":\\"normalLogo\\"}',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '根',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => 'CDCCC923-5BA8-5D38-9B0F-66516448716F',
              ),
              'ErrorMsg' => 
              array (
                'description' => '错误信息',
                'type' => 'string',
                'example' => '获取数据失败，无法显示应用列表',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误代码。',
                'type' => 'string',
                'example' => '0',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功。
- **true**：调用成功。
- **false**：调用失败。
',
                'type' => 'boolean',
                'example' => 'True',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"CDCCC923-5BA8-5D38-9B0F-66516448716F\\",\\n  \\"ErrorMsg\\": \\"获取数据失败，无法显示应用列表\\",\\n  \\"ErrorCode\\": \\"0\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '操作服务单',
      'summary' => '操作服务单',
    ),
    'QueryBarrelImageList' => 
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
          'name' => 'Barrel',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Barrel',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'caipin',
          ),
        ),
        1 => 
        array (
          'name' => 'StartId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询范围起始位置',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '110941',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
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
            'description' => '根',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => '0FDB7AA6-CEA2-5948-B930-A01F5266D90E',
              ),
              'PageSize' => 
              array (
                'description' => '分页大小。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'Images' => 
              array (
                'description' => '图片',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '图片',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Buy' => 
                    array (
                      'description' => '是否在阿里云购买了商品券。',
                      'type' => 'boolean',
                      'example' => '购买',
                    ),
                    'MidImage' => 
                    array (
                      'description' => '镜像地址',
                      'type' => 'string',
                      'example' => '中图',
                    ),
                    'BigImage' => 
                    array (
                      'description' => '原图大小',
                      'type' => 'string',
                      'example' => '大图',
                    ),
                    'SmallImage' => 
                    array (
                      'description' => '原图url',
                      'type' => 'string',
                      'example' => '小图',
                    ),
                    'Specifications' => 
                    array (
                      'description' => '规格名称。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '镜像规格详情。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Price' => 
                          array (
                            'description' => '原价。',
                            'type' => 'string',
                            'example' => '300',
                          ),
                          'Width' => 
                          array (
                            'description' => '图片宽度。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '1',
                          ),
                          'Height' => 
                          array (
                            'description' => '图片高度',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '100',
                          ),
                          'Name' => 
                          array (
                            'description' => '名称',
                            'type' => 'string',
                            'example' => 'authId',
                          ),
                          'ImageId' => 
                          array (
                            'description' => 'ID',
                            'type' => 'string',
                            'example' => 'h4604360275725312',
                          ),
                          'Id' => 
                          array (
                            'description' => '任务ID。',
                            'type' => 'integer',
                            'format' => 'int64',
                            'example' => '55222',
                          ),
                          'Suffix' => 
                          array (
                            'description' => '前缀列表的主键id。',
                            'type' => 'string',
                            'example' => 'jpg',
                          ),
                        ),
                      ),
                    ),
                    'Title' => 
                    array (
                      'description' => '线下网关镜像名字的i18n key。可能值：

- sgw.file.ova.title：云存储性能型文件网关 vSphere（v6.0及以上）镜像。

- sgw.file.vhd.title：云存储性能型文件网关HyperV镜像。

- sgw.file.kvm.title：云存储性能型文件网关KVM镜像。',
                      'type' => 'string',
                      'example' => '背部按摩10',
                    ),
                    'Tag' => 
                    array (
                      'description' => '镜像tag',
                      'type' => 'string',
                      'example' => 'v1',
                    ),
                    'ImageId' => 
                    array (
                      'description' => '镜像id',
                      'type' => 'string',
                      'example' => 'h4548620964041728',
                    ),
                  ),
                ),
              ),
              'ErrorMsg' => 
              array (
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'Success. Request Success.',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码',
                'type' => 'string',
                'example' => '0',
              ),
              'HasNext' => 
              array (
                'description' => '是否有下一页',
                'type' => 'boolean',
                'example' => 'False',
              ),
              'Success' => 
              array (
                'description' => '是否成功。',
                'type' => 'boolean',
                'example' => 'True',
              ),
              'NextId' => 
              array (
                'description' => '下一页标识',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '51003',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0FDB7AA6-CEA2-5948-B930-A01F5266D90E\\",\\n  \\"PageSize\\": 10,\\n  \\"Images\\": [\\n    {\\n      \\"Buy\\": true,\\n      \\"MidImage\\": \\"中图\\",\\n      \\"BigImage\\": \\"大图\\",\\n      \\"SmallImage\\": \\"小图\\",\\n      \\"Specifications\\": [\\n        {\\n          \\"Price\\": \\"300\\",\\n          \\"Width\\": 1,\\n          \\"Height\\": 100,\\n          \\"Name\\": \\"authId\\",\\n          \\"ImageId\\": \\"h4604360275725312\\",\\n          \\"Id\\": 55222,\\n          \\"Suffix\\": \\"jpg\\"\\n        }\\n      ],\\n      \\"Title\\": \\"背部按摩10\\",\\n      \\"Tag\\": \\"v1\\",\\n      \\"ImageId\\": \\"h4548620964041728\\"\\n    }\\n  ],\\n  \\"ErrorMsg\\": \\"Success. Request Success.\\",\\n  \\"ErrorCode\\": \\"0\\",\\n  \\"HasNext\\": true,\\n  \\"Success\\": true,\\n  \\"NextId\\": 51003\\n}","type":"json"}]',
      'title' => '查询图片列表',
      'summary' => '查询图片列表',
    ),
    'GetTemplateCategories' => 
    array (
      'summary' => '模板标签',
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ParentId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '父类目id',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'minimum' => '0',
            'example' => 'pc-2ze6x04o5eu444ceg',
          ),
        ),
        1 => 
        array (
          'name' => 'Status',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'SCU的状态。',
            'type' => 'string',
            'required' => false,
            'example' => 'True',
            'maxLength' => 64,
            'minLength' => 3,
          ),
        ),
        2 => 
        array (
          'name' => 'Recursive',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否递归查询模板类型，默认为false',
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
            'title' => 'result',
            'description' => 'result',
            'type' => 'object',
            'properties' => 
            array (
              'AllowRetry' => 
              array (
                'title' => 'allowRetry',
                'description' => 'allowRetry',
                'type' => 'boolean',
                'example' => 'False',
              ),
              'ErrorMsg' => 
              array (
                'title' => 'errorMsg',
                'description' => 'errorMsg',
                'type' => 'string',
                'example' => '{&quot;ErrMsg&quot;:&quot;Right angle correction failed!&quot;,&quot;ErrCode&quot;:&quot;5002&quot;}',
              ),
              'ErrorCode' => 
              array (
                'title' => 'errorCode',
                'description' => 'errorCode',
                'type' => 'string',
                'example' => '200',
              ),
              'Module' => 
              array (
                'title' => 'module',
                'description' => 'module',
                'type' => 'object',
              ),
              'Success' => 
              array (
                'title' => 'success',
                'description' => 'success',
                'type' => 'boolean',
                'example' => 'True',
              ),
              'AppName' => 
              array (
                'title' => 'appName',
                'description' => 'appName',
                'type' => 'string',
                'example' => 'ronghe',
              ),
              'RequestId' => 
              array (
                'title' => 'requestId',
                'description' => 'requestId',
                'type' => 'string',
                'example' => 'AF0F836D-5E0C-5701-BD55-3DA4C4F29021',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"AllowRetry\\": true,\\n  \\"ErrorMsg\\": \\"{&quot;ErrMsg&quot;:&quot;Right angle correction failed!&quot;,&quot;ErrCode&quot;:&quot;5002&quot;}\\",\\n  \\"ErrorCode\\": \\"200\\",\\n  \\"Module\\": {\\n    \\"test\\": \\"test\\",\\n    \\"test2\\": 1\\n  },\\n  \\"Success\\": true,\\n  \\"AppName\\": \\"ronghe\\",\\n  \\"RequestId\\": \\"AF0F836D-5E0C-5701-BD55-3DA4C4F29021\\"\\n}","type":"json"}]',
      'title' => '模板标签',
    ),
    'QueryConfigurationOrder' => 
    array (
      'summary' => '查询配置订单',
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PopAction',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'popAction',
            'description' => 'popAction',
            'type' => 'string',
            'required' => false,
            'example' => 'QuerySmsPackageSummary',
          ),
        ),
        1 => 
        array (
          'name' => 'AliyunKp',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'aliyunKp',
            'description' => 'aliyunKp',
            'type' => 'string',
            'required' => false,
            'example' => '123',
          ),
        ),
        2 => 
        array (
          'name' => 'UserBid',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'userBid',
            'description' => 'userBid',
            'type' => 'string',
            'required' => false,
            'example' => '123',
          ),
        ),
        3 => 
        array (
          'name' => 'UserSecurityToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'userSecurityToken',
            'description' => 'userSecurityToken',
            'type' => 'string',
            'required' => false,
            'example' => '123',
          ),
        ),
        4 => 
        array (
          'name' => 'StsTokenCallerBid',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'stsTokenCallerBid',
            'description' => 'stsTokenCallerBid',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '123',
          ),
        ),
        5 => 
        array (
          'name' => 'UserMfaPresent',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'userMfaPresent',
            'description' => 'userMfaPresent',
            'type' => 'boolean',
            'required' => false,
            'example' => '123',
          ),
        ),
        6 => 
        array (
          'name' => 'CallerSecurityTransport',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'callerSecurityTransport',
            'description' => 'callerSecurityTransport',
            'type' => 'boolean',
            'required' => false,
            'example' => '123',
          ),
        ),
        7 => 
        array (
          'name' => 'UserCallerParentId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'userCallerParentId',
            'description' => 'userCallerParentId',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '123',
          ),
        ),
        8 => 
        array (
          'name' => 'OriginalRequest',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'originalRequest',
            'description' => 'originalRequest',
            'type' => 'string',
            'required' => false,
            'example' => '123',
          ),
        ),
        9 => 
        array (
          'name' => 'ProxyCallerSecurityTransport',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'proxyCallerSecurityTransport',
            'description' => 'proxyCallerSecurityTransport',
            'type' => 'boolean',
            'required' => false,
            'example' => '123',
          ),
        ),
        10 => 
        array (
          'name' => 'ProxyCallerIp',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'proxyCallerIp',
            'description' => 'proxyCallerIp',
            'type' => 'string',
            'required' => false,
            'example' => '123',
          ),
        ),
        11 => 
        array (
          'name' => 'RequestId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'requestId',
            'description' => 'requestId',
            'type' => 'string',
            'required' => false,
            'example' => '1991B495-FB2A-5693-A79F-37245D48E293',
          ),
        ),
        12 => 
        array (
          'name' => 'CallerType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'callerType',
            'description' => 'callerType',
            'type' => 'string',
            'required' => false,
            'example' => 'acl',
          ),
        ),
        13 => 
        array (
          'name' => 'UserCallerSecurityTransport',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'userCallerSecurityTransport',
            'description' => 'userCallerSecurityTransport',
            'type' => 'boolean',
            'required' => false,
            'example' => '123',
          ),
        ),
        14 => 
        array (
          'name' => 'ConfigurationId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'configurationId',
            'description' => 'configurationId',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => 'fbb8b6a3a2f55b816056841e4b85f801',
          ),
        ),
        15 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'lang',
            'description' => 'lang',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        16 => 
        array (
          'name' => 'StsTokenCallerUid',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'stsTokenCallerUid',
            'description' => 'stsTokenCallerUid',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '123',
          ),
        ),
        17 => 
        array (
          'name' => 'CallerParentId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'callerParentId',
            'description' => 'callerParentId',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1157703270994901',
          ),
        ),
        18 => 
        array (
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'userClientIp',
            'description' => 'userClientIp',
            'type' => 'string',
            'required' => false,
            'example' => '123',
          ),
        ),
        19 => 
        array (
          'name' => 'ProxyTrustTransportInfo',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'proxyTrustTransportInfo',
            'description' => 'proxyTrustTransportInfo',
            'type' => 'boolean',
            'required' => false,
            'example' => '123',
          ),
        ),
        20 => 
        array (
          'name' => 'UserCallerType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'userCallerType',
            'description' => 'userCallerType',
            'type' => 'string',
            'required' => false,
            'example' => '123',
          ),
        ),
        21 => 
        array (
          'name' => 'MfaPresent',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'mfaPresent',
            'description' => 'mfaPresent',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        22 => 
        array (
          'name' => 'AliyunKpLong',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'aliyunKpLong',
            'description' => 'aliyunKpLong',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '123',
          ),
        ),
        23 => 
        array (
          'name' => 'ClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'clientIp',
            'description' => 'clientIp',
            'type' => 'string',
            'required' => false,
            'example' => '1.198.219.249',
          ),
        ),
        24 => 
        array (
          'name' => 'UserKp',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'userKp',
            'description' => 'userKp',
            'type' => 'string',
            'required' => false,
            'example' => '123',
          ),
        ),
        25 => 
        array (
          'name' => 'Bid',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'bid',
            'description' => 'bid',
            'type' => 'string',
            'required' => false,
            'example' => '26842',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'result',
            'description' => 'result',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'requestId',
                'description' => 'requestId',
                'type' => 'string',
                'example' => '1991B495-FB2A-5693-A79F-37245D48E293',
              ),
              'ErrorMsg' => 
              array (
                'title' => 'errorMsg',
                'description' => 'errorMsg',
                'type' => 'string',
                'example' => 'Not Found',
              ),
              'Data' => 
              array (
                'title' => 'module',
                'description' => 'module',
                'type' => 'string',
                'example' => '[]',
              ),
              'Success' => 
              array (
                'title' => 'success',
                'description' => 'success',
                'type' => 'boolean',
                'example' => 'True',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        200 => 
        array (
          0 => 
          array (
            'errorCode' => '0',
            'errorMessage' => 'The operation is successful.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'SYSTEM.ERROR',
            'errorMessage' => 'A system error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1991B495-FB2A-5693-A79F-37245D48E293\\",\\n  \\"ErrorMsg\\": \\"Not Found\\",\\n  \\"Data\\": \\"[]\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '查询配置订单',
    ),
    'CreateConfigurationOrder' => 
    array (
      'summary' => '创建配置订单',
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PopAction',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'popAction',
            'description' => 'popAction',
            'type' => 'string',
            'required' => false,
            'example' => 'QuerySmsBaseScreen',
          ),
        ),
        1 => 
        array (
          'name' => 'AliyunKp',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'aliyunKp',
            'description' => 'aliyunKp',
            'type' => 'string',
            'required' => false,
            'example' => '123',
          ),
        ),
        2 => 
        array (
          'name' => 'UserBid',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'userBid',
            'description' => 'userBid',
            'type' => 'string',
            'required' => false,
            'example' => '123',
          ),
        ),
        3 => 
        array (
          'name' => 'UserSecurityToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'userSecurityToken',
            'description' => 'userSecurityToken',
            'type' => 'string',
            'required' => false,
            'example' => '123',
          ),
        ),
        4 => 
        array (
          'name' => 'StsTokenCallerBid',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'stsTokenCallerBid',
            'description' => 'stsTokenCallerBid',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '123',
          ),
        ),
        5 => 
        array (
          'name' => 'UserMfaPresent',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'userMfaPresent',
            'description' => 'userMfaPresent',
            'type' => 'boolean',
            'required' => false,
            'example' => '123',
          ),
        ),
        6 => 
        array (
          'name' => 'CallerSecurityTransport',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'callerSecurityTransport',
            'description' => 'callerSecurityTransport',
            'type' => 'boolean',
            'required' => false,
            'example' => '123',
          ),
        ),
        7 => 
        array (
          'name' => 'UserCallerParentId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'userCallerParentId',
            'description' => 'userCallerParentId',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '123',
          ),
        ),
        8 => 
        array (
          'name' => 'OriginalRequest',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'originalRequest',
            'description' => 'originalRequest',
            'type' => 'string',
            'required' => false,
            'example' => '123',
          ),
        ),
        9 => 
        array (
          'name' => 'ProxyCallerSecurityTransport',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'proxyCallerSecurityTransport',
            'description' => 'proxyCallerSecurityTransport',
            'type' => 'boolean',
            'required' => false,
            'example' => '123',
          ),
        ),
        10 => 
        array (
          'name' => 'ProxyCallerIp',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'proxyCallerIp',
            'description' => 'proxyCallerIp',
            'type' => 'string',
            'required' => false,
            'example' => '123',
          ),
        ),
        11 => 
        array (
          'name' => 'RequestId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'requestId',
            'description' => 'requestId',
            'type' => 'string',
            'required' => false,
            'example' => '22DEBAC0-C46E-52C1-87F8-0378AE238063',
          ),
        ),
        12 => 
        array (
          'name' => 'CallerType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'callerType',
            'description' => 'callerType',
            'type' => 'string',
            'required' => false,
            'example' => 'acl',
          ),
        ),
        13 => 
        array (
          'name' => 'UserCallerSecurityTransport',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'userCallerSecurityTransport',
            'description' => 'userCallerSecurityTransport',
            'type' => 'boolean',
            'required' => false,
            'example' => '123',
          ),
        ),
        14 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'lang',
            'description' => 'lang',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        15 => 
        array (
          'name' => 'StsTokenCallerUid',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'stsTokenCallerUid',
            'description' => 'stsTokenCallerUid',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '123',
          ),
        ),
        16 => 
        array (
          'name' => 'CallerParentId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'callerParentId',
            'description' => 'callerParentId',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1703411985821693',
          ),
        ),
        17 => 
        array (
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'userClientIp',
            'description' => 'userClientIp',
            'type' => 'string',
            'required' => false,
            'example' => '123',
          ),
        ),
        18 => 
        array (
          'name' => 'SystemCall',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'systemCall',
            'description' => 'systemCall',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        19 => 
        array (
          'name' => 'ProxyTrustTransportInfo',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'proxyTrustTransportInfo',
            'description' => 'proxyTrustTransportInfo',
            'type' => 'boolean',
            'required' => false,
            'example' => '123',
          ),
        ),
        20 => 
        array (
          'name' => 'UserCallerType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'userCallerType',
            'description' => 'userCallerType',
            'type' => 'string',
            'required' => false,
            'example' => '123',
          ),
        ),
        21 => 
        array (
          'name' => 'PackageId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'packageId',
            'description' => 'packageId',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1008349',
          ),
        ),
        22 => 
        array (
          'name' => 'MfaPresent',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'mfaPresent',
            'description' => 'mfaPresent',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        23 => 
        array (
          'name' => 'AliyunKpLong',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'aliyunKpLong',
            'description' => 'aliyunKpLong',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '123',
          ),
        ),
        24 => 
        array (
          'name' => 'ClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'clientIp',
            'description' => 'clientIp',
            'type' => 'string',
            'required' => false,
            'example' => '100.104.16.254:51166',
          ),
        ),
        25 => 
        array (
          'name' => 'UserKp',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'userKp',
            'description' => 'userKp',
            'type' => 'string',
            'required' => false,
            'example' => '123',
          ),
        ),
        26 => 
        array (
          'name' => 'Bid',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'bid',
            'description' => 'bid',
            'type' => 'string',
            'required' => false,
            'example' => '26888',
          ),
        ),
        27 => 
        array (
          'name' => 'Items',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'items',
            'description' => 'items',
            'type' => 'string',
            'required' => false,
            'example' => '{\'Backup\': []}',
          ),
        ),
        28 => 
        array (
          'name' => 'UserAccessKeyId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'userAccessKeyId',
            'description' => 'userAccessKeyId',
            'type' => 'string',
            'required' => false,
            'example' => '123',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'result',
            'description' => 'result',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'requestId',
                'description' => 'requestId',
                'type' => 'string',
                'example' => 'B4736F94-D0E5-5D26-A5C4-1988CA68AFC9',
              ),
              'ErrorMsg' => 
              array (
                'title' => 'errorMsg',
                'description' => 'errorMsg',
                'type' => 'string',
                'example' => 'Not Found',
              ),
              'Data' => 
              array (
                'title' => 'module',
                'description' => 'module',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '[]',
              ),
              'Success' => 
              array (
                'title' => 'success',
                'description' => 'success',
                'type' => 'boolean',
                'example' => 'True',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        200 => 
        array (
          0 => 
          array (
            'errorCode' => 'ABILITY.NOT.FOUND',
            'errorMessage' => 'The operation is successful.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'SYSTEM.ERROR',
            'errorMessage' => 'A system error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"B4736F94-D0E5-5D26-A5C4-1988CA68AFC9\\",\\n  \\"ErrorMsg\\": \\"Not Found\\",\\n  \\"Data\\": 0,\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '创建配置订单',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-qingdao',
      'endpoint' => 'premiumpics.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'cn-beijing',
      'endpoint' => 'premiumpics.aliyuncs.com',
    ),
    2 => 
    array (
      'regionId' => 'cn-zhangjiakou',
      'endpoint' => 'premiumpics.aliyuncs.com',
    ),
    3 => 
    array (
      'regionId' => 'cn-huhehaote',
      'endpoint' => 'premiumpics.aliyuncs.com',
    ),
    4 => 
    array (
      'regionId' => 'cn-wulanchabu',
      'endpoint' => 'premiumpics.aliyuncs.com',
    ),
    5 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'premiumpics.aliyuncs.com',
    ),
    6 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'premiumpics.aliyuncs.com',
    ),
    7 => 
    array (
      'regionId' => 'cn-shenzhen',
      'endpoint' => 'premiumpics.aliyuncs.com',
    ),
    8 => 
    array (
      'regionId' => 'cn-chengdu',
      'endpoint' => 'premiumpics.aliyuncs.com',
    ),
    9 => 
    array (
      'regionId' => 'cn-hongkong',
      'endpoint' => 'premiumpics.aliyuncs.com',
    ),
    10 => 
    array (
      'regionId' => 'ap-northeast-1',
      'endpoint' => 'premiumpics.aliyuncs.com',
    ),
    11 => 
    array (
      'regionId' => 'ap-southeast-1',
      'endpoint' => 'premiumpics.aliyuncs.com',
    ),
    12 => 
    array (
      'regionId' => 'ap-southeast-2',
      'endpoint' => 'premiumpics.aliyuncs.com',
    ),
    13 => 
    array (
      'regionId' => 'ap-southeast-3',
      'endpoint' => 'premiumpics.aliyuncs.com',
    ),
    14 => 
    array (
      'regionId' => 'ap-southeast-5',
      'endpoint' => 'premiumpics.aliyuncs.com',
    ),
    15 => 
    array (
      'regionId' => 'us-east-1',
      'endpoint' => 'premiumpics.aliyuncs.com',
    ),
    16 => 
    array (
      'regionId' => 'us-west-1',
      'endpoint' => 'premiumpics.aliyuncs.com',
    ),
    17 => 
    array (
      'regionId' => 'eu-west-1',
      'endpoint' => 'premiumpics.aliyuncs.com',
    ),
    18 => 
    array (
      'regionId' => 'eu-central-1',
      'endpoint' => 'premiumpics.aliyuncs.com',
    ),
    19 => 
    array (
      'regionId' => 'ap-south-1',
      'endpoint' => 'premiumpics.aliyuncs.com',
    ),
    20 => 
    array (
      'regionId' => 'me-east-1',
      'endpoint' => 'premiumpics.aliyuncs.com',
    ),
    21 => 
    array (
      'regionId' => 'cn-hangzhou-finance',
      'endpoint' => 'premiumpics.aliyuncs.com',
    ),
    22 => 
    array (
      'regionId' => 'cn-shanghai-finance-1',
      'endpoint' => 'premiumpics.aliyuncs.com',
    ),
    23 => 
    array (
      'regionId' => 'cn-shenzhen-finance-1',
      'endpoint' => 'premiumpics.aliyuncs.com',
    ),
    24 => 
    array (
      'regionId' => 'cn-beijing-finance-1',
      'endpoint' => 'premiumpics.aliyuncs.com',
    ),
  ),
);
<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'ROA',
    'product' => 'ImageSearch',
    'version' => '2019-03-25',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 64375,
      'title' => '搜索',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'SearchImage',
      ),
    ),
    1 => 
    array (
      'id' => 64377,
      'title' => '管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'AddImage',
        1 => 'DeleteImage',
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
    'SearchImage' => 
    array (
      'path' => '/v2/image/search',
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
          'name' => 'CategoryId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '商品类目。具体请参见[类目参考](~~179184~~)。
 - 对于商品搜索，如果设置类目，则以设置的为准；如果不设置类目，则由系统进行类目预测，预测的类目结果可以在Response中获取 。
<props="china">
 - 对于布料、商标、通用家具家居和工业五金搜索，不论是否设置类目，系统会将类目设置为88888888。
</props>
<props="intl">
 - 对于通用搜索，不论是否设置类目，系统会将类目设置为88888888。
</props>
',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '88888888',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '图搜实例名称。最多支持20个字符。
如果已经购买图搜实例可登录[图像搜索管控台](https://imagesearch.console.aliyun.com/)查看。
如果没有购买图搜实例可参考[开通服务](~~179178~~)和[创建实例](~~66569~~)。
>这里的实例名称并非实例ID，使用时请区分。',
            'type' => 'string',
            'required' => true,
            'example' => 'phimagesearch',
          ),
        ),
        2 => 
        array (
          'name' => 'ProductId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '商品ID，最多支持512个字符。

>一个商品可以有多张图片。',
            'type' => 'string',
            'required' => false,
            'example' => 'pro-goods-25376',
          ),
        ),
        3 => 
        array (
          'name' => 'PicName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => ' 图片名称，最多支持512个字符。
> - ProductId和PicName唯一确定一张图片。
- 如果多次添加图片具有相同的ProductId和PicName，以最后一次添加为准，前面添加的图片将被覆盖。
',
            'type' => 'string',
            'required' => false,
            'example' => 'goods-23312-1',
          ),
        ),
        4 => 
        array (
          'name' => 'PicContent',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '图片内容，Base64编码。

 - 图片大小要求不超过4 MB。
 - 图片格式：PNG、JPG、JPEG、BMP、GIF、WEBP、TIFF、PPM。
 - 传输等待时间不超过5秒。
<props="china">
 - 服务类型为商品图片搜索和通用图片搜索时，图片长和宽像素要求大于等于100且小于等于4096。
 - 服务类型为商标图片搜索时，图片长和宽像素要求大于等于200且小于4096。
 - 服务类型为布料图片搜索时，图片长和宽像素要求大于等于448且小于等于4096。
</props>
<props="intl">
 - 服务类型为商品图片搜索和通用图片搜索时，图片长和宽像素要求大于等于100且小于等于4096。
</props>
 - 图片中不能包含旋转信息。',
            'type' => 'string',
            'required' => false,
            'example' => 'iVBORw0KGgoAAAANSUhEUgAAAV8AAADwAQMAAACdRvVNAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAADUExURQAAAKd6PdoAAAABdFJOUyR85Ty3AAAAIUlEQVRo3u3BAQ0AAADCoPdPbQ8HFAAAAAAAAAAAAADPBiowAAGR02EbAAAAAElFTkSuQmCC',
          ),
        ),
        5 => 
        array (
          'name' => 'Crop',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否需要进行主体识别。默认true。
 - 为true时，由系统进行主体识别，以识别的主体进行搜索，主体识别结果可在Response中获取。
 - 为false时，则不进行主体识别，以整张图进行搜索。
<props="china">
- 对于布料图片搜索，此参数会被忽略，系统会以整张图进行搜索。
</props>
',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        6 => 
        array (
          'name' => 'Region',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '图片的主体区域，格式为`x1,x2,y1,y2,` 其中`x1,y1` 是左上角的点，`x2,y2`是右下角的点。
<props="china">
> - 若用户设置了Region，则不论Crop参数为何值，都将以用户输入Region进行搜索。
- 对于布料图片搜索，此参数会被忽略，系统会以整张图进行搜索。
</props>

<props="intl">
> 对于布料图片搜索，此参数会被忽略，系统会以整张图进行搜索。
</props>
',
            'type' => 'string',
            'required' => false,
            'example' => '32,282,43,256',
          ),
        ),
        7 => 
        array (
          'name' => 'Num',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '返回结果的数目。取值范围：1~100。默认值为10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        8 => 
        array (
          'name' => 'Start',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '返回结果的起始位置。取值范围：0~499。默认值为0。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
          ),
        ),
        9 => 
        array (
          'name' => 'Type',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '搜索类型。包括：
- SearchByPic（默认）：根据图片搜索相似图片。
- SearchByName：根据已添加的图片搜索相似图片。',
            'type' => 'string',
            'required' => false,
            'example' => 'SearchByPic',
          ),
        ),
        10 => 
        array (
          'name' => 'Filter',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '过滤条件。int_attr支持的操作符有大于号(>)、大于等于号(>=)、小于号(<)、小于等于号(<=)、等于号(=)。str_attr支持的操作符有等于号(=)和不等号(!=)，多个条件之支持AND和OR进行连接。
例如：
- int_attr >= 100。
- str_attr != "value1"。
- int_attr = 1000 AND str_attr = "value1"。',
            'type' => 'string',
            'required' => false,
            'example' => '(int_attr >= 100000000 AND int_attr < 200000000 AND int_attr=100000252 AND str_attr=\\"87\\")',
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
              'Msg' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'required' => false,
                'example' => 'success',
                'default' => 'success',
              ),
              'Head' => 
              array (
                'description' => '搜索结果概述信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'DocsFound' => 
                  array (
                    'description' => '返回结果数目。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'DocsReturn' => 
                  array (
                    'description' => '实例中命中结果数目。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10000',
                  ),
                  'SearchTime' => 
                  array (
                    'description' => '搜索耗时，单位毫秒。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '95',
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '3033A0A7-36DA-5AC9-9973-953C38EBDFA9',
              ),
              'Auctions' => 
              array (
                'description' => '所有返回的商品描述信息。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '所有返回的商品描述信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'PicName' => 
                    array (
                      'description' => '图片名称。',
                      'type' => 'string',
                      'example' => '2092061_1.jpg',
                    ),
                    'IntAttr' => 
                    array (
                      'description' => '整数类型属性。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '2',
                    ),
                    'CategoryId' => 
                    array (
                      'description' => '图片类目。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '8888888',
                    ),
                    'ProductId' => 
                    array (
                      'description' => '商品ID。',
                      'type' => 'string',
                      'example' => '2092061_1',
                    ),
                    'StrAttr' => 
                    array (
                      'description' => '字符串类型属性。',
                      'type' => 'string',
                      'example' => 'ss',
                    ),
                    'SortExprValues' => 
                    array (
                      'description' => '系统打分信息。
> - 当前字段已弃用，建议使用Score。 
- SortExprValues是一个分号分隔的二元组，第一个值表示图片的相关性分数，值越大表示和查询的图片相关性越高。由于算法模型不同。
- 当类目为0~2时，SortExprValues值域范围：0～7.33136443711219e+24。
- 类目为其他值时，SortExprValues值域范围：0～5.37633353624177e+24。当两个图片完全一样时，这个分值最大。',
                      'type' => 'string',
                      'example' => '5.37633353624177e+24;0',
                    ),
                    'CustomContent' => 
                    array (
                      'description' => '用户自定义的内容。',
                      'type' => 'string',
                      'example' => 'zidingyi',
                    ),
                    'Score' => 
                    array (
                      'type' => 'number',
                      'format' => 'float',
                    ),
                  ),
                ),
              ),
              'Code' => 
              array (
                'description' => '    错误码。
- 0：成功。
- 非0：失败。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'PicInfo' => 
              array (
                'description' => '类目预测、主体识别结果等信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'Region' => 
                  array (
                    'description' => '    主体识别结果。
图片的主体区域，格式为x1,x2,y1,y2，其中 x1,y1 是左上角的点，x2，y2是右下角的点。若用户请求中指定了主体区域，则以请求中为准。',
                    'type' => 'string',
                    'example' => '94,691,206,650',
                  ),
                  'CategoryId' => 
                  array (
                    'description' => '    类目预测结果。
若用户请求中指定了类目，则以请求中为准。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '88888888',
                  ),
                  'MultiRegion' => 
                  array (
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Region' => 
                        array (
                          'type' => 'string',
                        ),
                      ),
                    ),
                  ),
                  'AllCategories' => 
                  array (
                    'description' => '系统支持的所有类目信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '系统支持的所有类目信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Name' => 
                        array (
                          'description' => '类目名称。',
                          'type' => 'string',
                          'example' => 'other',
                        ),
                        'Id' => 
                        array (
                          'description' => '类目ID。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '88888888',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'Success' => 
              array (
                'description' => '请求是否成功。',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorCode' => 'BadRequest',
            'errorMessage' => 'The request has invalid parameters.',
          ),
          1 => 
          array (
            'errorCode' => 'TimeoutForTransferImage',
            'errorMessage' => 'Timeout after 5 seconds waiting for images transfer to complete.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidInstance',
            'errorMessage' => 'The specified instance name is invalid.',
          ),
          3 => 
          array (
            'errorCode' => 'NoCaretSeperator',
            'errorMessage' => 'The body content is missing the ^ separator.',
          ),
          4 => 
          array (
            'errorCode' => 'EmptyMeta',
            'errorMessage' => 'The body content has an empty meta field.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidMetaItem',
            'errorMessage' => 'The meta field is invalid.',
          ),
          6 => 
          array (
            'errorCode' => 'NoPicList',
            'errorMessage' => 'The body content is missing the pic_list parameter.',
          ),
          7 => 
          array (
            'errorCode' => 'InvalidPicList',
            'errorMessage' => 'The specified pic_list parameter is invalid.',
          ),
          8 => 
          array (
            'errorCode' => 'NoSpecifiedPic',
            'errorMessage' => 'he content of an image is not specified in the HTTP POST body.',
          ),
          9 => 
          array (
            'errorCode' => 'NoSpecifiedSearchPic',
            'errorMessage' => 'The search image is not specified.',
          ),
          10 => 
          array (
            'errorCode' => 'InvalidCategory',
            'errorMessage' => 'The specified category is invalid.',
          ),
          11 => 
          array (
            'errorCode' => 'OverflowMaxResultNum',
            'errorMessage' => 'The specified number of total results exceeds the maximum of 500.',
          ),
          12 => 
          array (
            'errorCode' => 'OverflowMaxReturnNum',
            'errorMessage' => 'The specified number of results for each request exceeds the maximum of 100.',
          ),
          13 => 
          array (
            'errorCode' => 'InvalidStartParameter',
            'errorMessage' => 'The specified parameter start is inavlid.',
          ),
          14 => 
          array (
            'errorCode' => 'InvalidNumParameter',
            'errorMessage' => 'The specified parameter num is invalid.',
          ),
          15 => 
          array (
            'errorCode' => 'NoSpecifiedAddPic',
            'errorMessage' => 'The image to insert is not specified.',
          ),
          16 => 
          array (
            'errorCode' => 'NoSpecifiedItemId',
            'errorMessage' => 'The item_id parameter is not specified.',
          ),
          17 => 
          array (
            'errorCode' => 'InvalidIntAttr',
            'errorMessage' => 'The specified int_attr field is invalid.',
          ),
          18 => 
          array (
            'errorCode' => 'UnsupportedPicFormat',
            'errorMessage' => 'The specified image format is invalid.',
          ),
          19 => 
          array (
            'errorCode' => 'InvalidFilterClause',
            'errorMessage' => 'The specified filtering condition is invalid.',
          ),
          20 => 
          array (
            'errorCode' => 'InstanceOverQuota',
            'errorMessage' => 'The number of items exceeds the limit.',
          ),
          21 => 
          array (
            'errorCode' => 'IncorrectOrientation',
            'errorMessage' => 'The image contains incorrect rotation flags in the meta data.',
          ),
          22 => 
          array (
            'errorCode' => 'UnsupportedPicPixels',
            'errorMessage' => 'The specified pixels is not supported.',
          ),
          23 => 
          array (
            'errorCode' => 'SearchTimeout',
            'errorMessage' => 'The request is timed out.',
          ),
          24 => 
          array (
            'errorCode' => 'PicNotExist',
            'errorMessage' => 'The search picture does not exist.',
          ),
          25 => 
          array (
            'errorCode' => 'NoSpecifiedProductId',
            'errorMessage' => 'The parameter ProductId no specified.',
          ),
          26 => 
          array (
            'errorCode' => 'NoSpecifiedPicName',
            'errorMessage' => 'The parameter PicName no specified.',
          ),
          27 => 
          array (
            'errorCode' => 'NoSpecifiedPicContent',
            'errorMessage' => 'The parameter PicContent no specified.',
          ),
          28 => 
          array (
            'errorCode' => 'InvalidType',
            'errorMessage' => 'The specified parameter Type is not valid.',
          ),
          29 => 
          array (
            'errorCode' => 'InvalidProductId',
            'errorMessage' => 'The specified parameter ProductId is not valid.',
          ),
          30 => 
          array (
            'errorCode' => 'InvalidPicName',
            'errorMessage' => 'The specified parameter PicName is not valid.',
          ),
          31 => 
          array (
            'errorCode' => 'InvalidStrAttr',
            'errorMessage' => 'The specified parameter StrAttr is not valid.',
          ),
          32 => 
          array (
            'errorCode' => 'InvalidCustomContent',
            'errorMessage' => 'The specified parameter CustomContent is not valid.',
          ),
          33 => 
          array (
            'errorCode' => 'InvalidPicContent',
            'errorMessage' => 'The specified parameter PicContent length greater than 4 * 1024 * 1024.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoPermission',
            'errorMessage' => 'You are not authorized to perform this operation.',
          ),
          1 => 
          array (
            'errorCode' => 'DeniedRequest',
            'errorMessage' => 'Your request was denied due to instance flow control.',
          ),
        ),
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'InstanceStatusError',
            'errorMessage' => 'Your instance is unavailable.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'UnknownException',
            'errorMessage' => 'An internal server error occurred.',
          ),
          1 => 
          array (
            'errorCode' => 'NetworkException',
            'errorMessage' => 'A network error occurred.',
          ),
          2 => 
          array (
            'errorCode' => 'RequestTimeout',
            'errorMessage' => '​The request is timeout.',
          ),
          3 => 
          array (
            'errorCode' => 'UnsupportedInstanceType',
            'errorMessage' => 'The instance type is not supported.',
          ),
          4 => 
          array (
            'errorCode' => 'UnsupportedOperationType',
            'errorMessage' => 'The specified action is not supported.',
          ),
          5 => 
          array (
            'errorCode' => 'ExtractFeatureTimeout',
            'errorMessage' => 'The request was timed out while extracting features.',
          ),
          6 => 
          array (
            'errorCode' => 'AccessEngineFailed',
            'errorMessage' => 'An error occurred while accessing the search engine.',
          ),
          7 => 
          array (
            'errorCode' => 'InternalOssError',
            'errorMessage' => 'An internal OAS error occurred.',
          ),
          8 => 
          array (
            'errorCode' => 'InternalSwiftError',
            'errorMessage' => 'An internal SWIFT error occurred.',
          ),
          9 => 
          array (
            'errorCode' => 'InternalTableStoreError',
            'errorMessage' => 'An internal Table Store error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Msg\\": \\"success\\",\\n  \\"Head\\": {\\n    \\"DocsFound\\": 10,\\n    \\"DocsReturn\\": 10000,\\n    \\"SearchTime\\": 95\\n  },\\n  \\"RequestId\\": \\"3033A0A7-36DA-5AC9-9973-953C38EBDFA9\\",\\n  \\"Auctions\\": [\\n    {\\n      \\"PicName\\": \\"2092061_1.jpg\\",\\n      \\"IntAttr\\": 2,\\n      \\"CategoryId\\": 8888888,\\n      \\"ProductId\\": \\"2092061_1\\",\\n      \\"StrAttr\\": \\"ss\\",\\n      \\"SortExprValues\\": \\"5.37633353624177e+24;0\\",\\n      \\"CustomContent\\": \\"zidingyi\\",\\n      \\"Score\\": 0\\n    }\\n  ],\\n  \\"Code\\": 0,\\n  \\"PicInfo\\": {\\n    \\"Region\\": \\"94,691,206,650\\",\\n    \\"CategoryId\\": 88888888,\\n    \\"MultiRegion\\": [\\n      {\\n        \\"Region\\": \\"\\"\\n      }\\n    ],\\n    \\"AllCategories\\": [\\n      {\\n        \\"Name\\": \\"other\\",\\n        \\"Id\\": 88888888\\n      }\\n    ]\\n  },\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '搜索图片',
      'summary' => '本文为您介绍searchbyimage接口的语法及示例，用于向淘宝联盟版在线调用。',
      'description' => '### QPS限制
查询操作默认的最大访问频率可在控制台中查看，为您购买时所选择的访问频次（QPS），当前支持1QPS、5QPS、10QPS。

### SDK版本说明
图像SDK版本升级到V3.1.1，可使用“多主体识别”、“相似性分数”功能。请参见[Java SDK](~~179188~~)。',
    ),
    'AddImage' => 
    array (
      'path' => '/v2/image/add',
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
          'name' => 'InstanceName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '图搜实例名称。最多支持20个字符。
如果已经购买图搜实例可登录[图像搜索管控台](https://imagesearch.console.aliyun.com/)查看。
如果没有购买图搜实例可参考[开通服务](~~179178~~)和[创建实例](~~66569~~)。
>这里的实例名称并非实例ID，使用时请区分。',
            'type' => 'string',
            'required' => true,
            'example' => 'demoinstance1',
          ),
        ),
        1 => 
        array (
          'name' => 'CategoryId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '图片类目。具体请参考[类目参考](~~179184~~)。
> - 对于商品搜索，若设置类目，则以设置的为准；若不设置类目，将由系统进行类目预测，预测的类目结果可在Response中获取 。
<props="china">
- 对于布料、商标、通用、家具家居和工业五金搜索，不论是否设置类目，系统会将类目设置为88888888。
</props>
- 对于通用搜索，不论是否设置类目，系统会将类目设置为88888888。

',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '88888888',
          ),
        ),
        2 => 
        array (
          'name' => 'ProductId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '商品ID，最多支持512个字符。

>一个商品可以有多张图片。',
            'type' => 'string',
            'required' => true,
            'example' => '2092061_1',
          ),
        ),
        3 => 
        array (
          'name' => 'PicName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => ' 图片名称，最多支持512个字符。
> - ProductId和PicName唯一确定一张图片。
- 如果多次添加图片具有相同的ProductId和PicName，以最后一次添加为准，前面添加的图片将被覆盖。
',
            'type' => 'string',
            'required' => true,
            'example' => '2092061_1.jpg',
          ),
        ),
        4 => 
        array (
          'name' => 'PicContent',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '图片内容，Base64编码。

 - 图片大小要求不超过4 MB。
 - 图片格式：PNG、JPG、JPEG、BMP、GIF、WEBP、TIFF、PPM。
 - 传输等待时间不超过5秒。
<props="china">
 - 服务类型为商品图片搜索和通用图片搜索时，图片长和宽像素要求大于等于100且小于等于4096。
 - 服务类型为商标图片搜索时，图片长和宽像素要求大于等于200且小于4096。
 - 服务类型为布料图片搜索时，图片长和宽像素要求大于等于448且小于等于4096。
</props>
<props="intl">
 - 服务类型为商品图片搜索和通用图片搜索时，图片长和宽像素要求大于等于100且小于等于4096。
</props>
 - 图片中不能包含旋转信息。',
            'type' => 'string',
            'required' => true,
            'example' => 'AAAANSUhEUgAAAPcAAAEVCAYAAAA8d3NuAAAAAXNSR0IArs......RK5CYII=',
          ),
        ),
        5 => 
        array (
          'name' => 'Crop',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否需要进行主体识别。默认true。
 - 为true时，由系统进行主体识别，以识别的主体进行搜索，主体识别结果可在Response中获取。
- 为false时，则不进行主体识别，以整张图进行搜索。

<props="china">对于布料图片搜索，此参数会被忽略，系统会以整张图进行搜索。</props>


',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        6 => 
        array (
          'name' => 'Region',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '图片的主体区域，格式为`x1,x2,y1,y2,` 其中`x1,y1` 是左上角的点，`x2,y2`是右下角的点。
<props="china">
> - 若用户设置了Region，则不论Crop参数为何值，都将以用户输入Region进行搜索。
- 对于布料图片搜索，此参数会被忽略，系统会以整张图进行搜索。
</props>
<props="intl">
> 对于布料图片搜索，此参数会被忽略，系统会以整张图进行搜索。
</props>
',
            'type' => 'string',
            'required' => false,
            'example' => '280,486,232,351',
          ),
        ),
        7 => 
        array (
          'name' => 'CustomContent',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '用户自定义的内容，最多支持4096个字符。
>查询时会返回该字段。例如可添加图片的描述等文本。',
            'type' => 'string',
            'required' => false,
            'example' => '{\\"merchant_id\\":\\"46-718f-da04-4099b2f144ae\\",\\"category_ids\\":[\\"1234\\"],\\"image_index\\":0,\\"updated\\":5678}',
          ),
        ),
        8 => 
        array (
          'name' => 'IntAttr',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '整数类型属性，可用于查询时过滤，查询时会返回该字段。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '22',
          ),
        ),
        9 => 
        array (
          'name' => 'StrAttr',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '字符串类型属性，最多支持128个字符。可用于查询时过滤，查询时会返回该字段。',
            'type' => 'string',
            'required' => false,
            'example' => 'ss',
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
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'E0845DE6-52AF-4B50-9F15-51ED4044E6AB',
              ),
              'Code' => 
              array (
                'description' => '错误码。

- 0：成功。
- 非0：失败。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'PicInfo' => 
              array (
                'description' => '类目预测、主体识别结果等信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'Region' => 
                  array (
                    'description' => '主体识别结果。图片的主体区域，格式为`x1,x2,y1,y2`，其中`x1,y1`是左上角的点，`x2,y2`是右下角的点。若用户请求中指定了主体区域，则以请求中为准。',
                    'type' => 'string',
                    'example' => '94,691,206,650',
                  ),
                  'CategoryId' => 
                  array (
                    'description' => '类目预测结果。若用户请求中指定了类目，则以请求中为准。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '88888888',
                  ),
                ),
              ),
              'Success' => 
              array (
                'description' => '请求是否成功。',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorCode' => 'BadRequest',
            'errorMessage' => 'The request has invalid parameters.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidInstance',
            'errorMessage' => 'The specified instance name is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'NoCaretSeperator',
            'errorMessage' => 'The body content is missing the ^ separator.',
          ),
          3 => 
          array (
            'errorCode' => 'EmptyMeta',
            'errorMessage' => 'The body content has an empty meta field.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidMetaItem',
            'errorMessage' => 'The meta field is invalid.',
          ),
          5 => 
          array (
            'errorCode' => 'NoPicList',
            'errorMessage' => 'The body content is missing the pic_list parameter.',
          ),
          6 => 
          array (
            'errorCode' => 'InvalidPicList',
            'errorMessage' => 'The specified pic_list parameter is invalid.',
          ),
          7 => 
          array (
            'errorCode' => 'NoSpecifiedPic',
            'errorMessage' => 'The content of an image is not specified in the HTTP POST body.',
          ),
          8 => 
          array (
            'errorCode' => 'NoSpecifiedSearchPic',
            'errorMessage' => 'The search image is not specified.',
          ),
          9 => 
          array (
            'errorCode' => 'InvalidCategory',
            'errorMessage' => 'The specified category is invalid.',
          ),
          10 => 
          array (
            'errorCode' => 'OverflowMaxResultNum',
            'errorMessage' => 'The specified number of total results exceeds the maximum of 500.',
          ),
          11 => 
          array (
            'errorCode' => 'OverflowMaxReturnNum',
            'errorMessage' => 'The specified number of results for each request exceeds the maximum of 100.',
          ),
          12 => 
          array (
            'errorCode' => 'InvalidStartParameter',
            'errorMessage' => 'The specified parameter s is inavlid.',
          ),
          13 => 
          array (
            'errorCode' => 'InvalidNumParameter',
            'errorMessage' => 'The specified parameter n is invalid.',
          ),
          14 => 
          array (
            'errorCode' => 'NoSpecifiedAddPic',
            'errorMessage' => 'The image to insert is not specified.',
          ),
          15 => 
          array (
            'errorCode' => 'NoSpecifiedItemId',
            'errorMessage' => 'The item_id parameter is not specified.',
          ),
          16 => 
          array (
            'errorCode' => 'InvalidIntAttr',
            'errorMessage' => 'The specified int_attr field is invalid.',
          ),
          17 => 
          array (
            'errorCode' => 'UnsupportedPicFormat',
            'errorMessage' => 'The specified image format is invalid.',
          ),
          18 => 
          array (
            'errorCode' => 'InvalidFilterClause',
            'errorMessage' => 'The specified filtering condition is invalid.',
          ),
          19 => 
          array (
            'errorCode' => 'InstanceOverQuota',
            'errorMessage' => 'The number of items exceeds the limit.',
          ),
          20 => 
          array (
            'errorCode' => 'IncorrectOrientation',
            'errorMessage' => 'The image contains incorrect rotation flags in the meta data.',
          ),
          21 => 
          array (
            'errorCode' => 'UnsupportedPicPixels',
            'errorMessage' => 'The specified pixels is not supported.',
          ),
          22 => 
          array (
            'errorCode' => 'SearchTimeout',
            'errorMessage' => 'The request is timed out.',
          ),
          23 => 
          array (
            'errorCode' => 'PicNotExist',
            'errorMessage' => 'The search picture does not exist.',
          ),
          24 => 
          array (
            'errorCode' => 'NoSpecifiedProductId',
            'errorMessage' => 'The parameter ProductId no specified.',
          ),
          25 => 
          array (
            'errorCode' => 'NoSpecifiedPicName',
            'errorMessage' => 'The parameter PicName no specified.',
          ),
          26 => 
          array (
            'errorCode' => 'NoSpecifiedPicContent',
            'errorMessage' => 'The parameter PicContent no specified.',
          ),
          27 => 
          array (
            'errorCode' => 'InvalidType',
            'errorMessage' => 'The specified parameter Type is not valid.',
          ),
          28 => 
          array (
            'errorCode' => 'InvalidProductId',
            'errorMessage' => 'The specified parameter ProductId is not valid.',
          ),
          29 => 
          array (
            'errorCode' => 'InvalidPicName',
            'errorMessage' => 'The specified parameter PicName is not valid.',
          ),
          30 => 
          array (
            'errorCode' => 'InvalidStrAttr',
            'errorMessage' => 'The specified parameter StrAttr is not valid.',
          ),
          31 => 
          array (
            'errorCode' => 'InvalidCustomContent',
            'errorMessage' => 'The specified parameter CustomContent is not valid.',
          ),
          32 => 
          array (
            'errorCode' => 'InvalidPicContent',
            'errorMessage' => 'The specified parameter PicContent length greater than 4 * 1024 * 1024.',
          ),
          33 => 
          array (
            'errorCode' => 'TimeoutForTransferImage',
            'errorMessage' => 'Timeout after 5 seconds waiting for images transfer to complete.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoPermission',
            'errorMessage' => 'You are not authorized to perform this operation.',
          ),
          1 => 
          array (
            'errorCode' => 'DeniedRequest',
            'errorMessage' => 'Your request was denied due to instance flow control.',
          ),
        ),
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'InstanceStatusError',
            'errorMessage' => 'Your instance is unavailable.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'UnknownException',
            'errorMessage' => 'An internal server error occurred.',
          ),
          1 => 
          array (
            'errorCode' => 'NetworkException',
            'errorMessage' => 'A network error occurred.',
          ),
          2 => 
          array (
            'errorCode' => 'RequestTimeout',
            'errorMessage' => '​The request is timeout.',
          ),
          3 => 
          array (
            'errorCode' => 'UnsupportedInstanceType',
            'errorMessage' => 'The instance type is not supported.',
          ),
          4 => 
          array (
            'errorCode' => 'UnsupportedOperationType',
            'errorMessage' => 'The specified action is not supported.',
          ),
          5 => 
          array (
            'errorCode' => 'ExtractFeatureTimeout',
            'errorMessage' => 'The request was timed out while extracting features.',
          ),
          6 => 
          array (
            'errorCode' => 'AccessEngineFailed',
            'errorMessage' => 'An error occurred while accessing the search engine.',
          ),
          7 => 
          array (
            'errorCode' => 'InternalOssError',
            'errorMessage' => 'An internal OAS error occurred.',
          ),
          8 => 
          array (
            'errorCode' => 'InternalSwiftError',
            'errorMessage' => 'An internal SWIFT error occurred.',
          ),
          9 => 
          array (
            'errorCode' => 'InternalTableStoreError',
            'errorMessage' => 'An internal Table Store error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"E0845DE6-52AF-4B50-9F15-51ED4044E6AB\\",\\n  \\"Code\\": 0,\\n  \\"PicInfo\\": {\\n    \\"Region\\": \\"94,691,206,650\\",\\n    \\"CategoryId\\": 88888888\\n  },\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '添加图片数据',
      'summary' => '本文为您介绍AddImage接口的语法及示例，用于向图像搜索实例中添加图片信息。',
      'description' => '### 使用说明
本接口用于向图像搜索实例中添加图片信息。

### QPS限制
10W图片容量的实例默认的并发量为1，也就是每秒钟最多处理1个图片新增请求。

其他图片容量的实例默认的并发量为5，也就是每秒钟最多处理5个图片新增请求。',
    ),
    'DeleteImage' => 
    array (
      'path' => '/v2/image/delete',
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
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '图搜实例名称。最多支持20个字符。

如果已经购买图搜实例可登录[图像搜索管控台](https://imagesearch.console.aliyun.com)查看。

如果没有购买图搜实例可参考开通服务和创建实例。

> 这里的实例名称并非实例ID，使用时请区分。',
            'type' => 'string',
            'required' => true,
            'example' => 'demoinstance1',
          ),
        ),
        1 => 
        array (
          'name' => 'ProductId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '商品ID，最多支持512个字符。

>一个商品可以有多张图片。',
            'type' => 'string',
            'required' => true,
            'example' => '179443',
          ),
        ),
        2 => 
        array (
          'name' => 'PicName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => ' 图片名称，最多支持512个字符。
> - ProductId和PicName唯一确定一张图片。
- 如果多次添加图片具有相同的ProductId和PicName，以最后一次添加为准，前面添加的图片将被覆盖。
',
            'type' => 'string',
            'required' => false,
            'example' => '2092061_1.jpg',
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
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '0703956F-9BCC-48FA-99F7-96C0BF449C69',
              ),
              'Code' => 
              array (
                'description' => '错误码。
- 0：成功。
- 非0：失败。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功。',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorCode' => 'BadRequest',
            'errorMessage' => 'The request has invalid parameters.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidInstance',
            'errorMessage' => 'The specified instance name is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'NoCaretSeperator',
            'errorMessage' => 'The body content is missing the ^ separator.',
          ),
          3 => 
          array (
            'errorCode' => 'EmptyMeta',
            'errorMessage' => 'The body content has an empty meta field.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidMetaItem',
            'errorMessage' => 'The meta field is invalid.',
          ),
          5 => 
          array (
            'errorCode' => 'NoPicList',
            'errorMessage' => 'The body content is missing the pic_list parameter.',
          ),
          6 => 
          array (
            'errorCode' => 'InvalidPicList',
            'errorMessage' => 'The specified pic_list parameter is invalid.',
          ),
          7 => 
          array (
            'errorCode' => 'NoSpecifiedPic',
            'errorMessage' => 'The content of an image is not specified in the HTTP POST body.',
          ),
          8 => 
          array (
            'errorCode' => 'NoSpecifiedSearchPic',
            'errorMessage' => 'The search image is not specified.',
          ),
          9 => 
          array (
            'errorCode' => 'InvalidCategory',
            'errorMessage' => 'The specified category is invalid.',
          ),
          10 => 
          array (
            'errorCode' => 'OverflowMaxResultNum',
            'errorMessage' => 'The specified number of total results exceeds the maximum of 500.',
          ),
          11 => 
          array (
            'errorCode' => 'OverflowMaxReturnNum',
            'errorMessage' => 'The specified number of results for each request exceeds the maximum of 100.',
          ),
          12 => 
          array (
            'errorCode' => 'InvalidStartParameter',
            'errorMessage' => 'The specified parameter s is inavlid.',
          ),
          13 => 
          array (
            'errorCode' => 'InvalidNumParameter',
            'errorMessage' => 'The specified parameter n is invalid.',
          ),
          14 => 
          array (
            'errorCode' => 'NoSpecifiedAddPic',
            'errorMessage' => 'The image to insert is not specified.',
          ),
          15 => 
          array (
            'errorCode' => 'NoSpecifiedItemId',
            'errorMessage' => 'The item_id parameter is not specified.',
          ),
          16 => 
          array (
            'errorCode' => 'InvalidIntAttr',
            'errorMessage' => 'The specified int_attr field is invalid.',
          ),
          17 => 
          array (
            'errorCode' => 'UnsupportedPicFormat',
            'errorMessage' => 'The specified image format is invalid.',
          ),
          18 => 
          array (
            'errorCode' => 'InvalidFilterClause',
            'errorMessage' => 'The specified filtering condition is invalid.',
          ),
          19 => 
          array (
            'errorCode' => 'InstanceOverQuota',
            'errorMessage' => 'The number of items exceeds the limit.',
          ),
          20 => 
          array (
            'errorCode' => 'IncorrectOrientation',
            'errorMessage' => 'The image contains incorrect rotation flags in the meta data.',
          ),
          21 => 
          array (
            'errorCode' => 'UnsupportedPicPixels',
            'errorMessage' => 'The specified pixels is not supported.',
          ),
          22 => 
          array (
            'errorCode' => 'SearchTimeout',
            'errorMessage' => 'The request is timed out.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoPermission',
            'errorMessage' => 'You are not authorized to perform this operation.',
          ),
          1 => 
          array (
            'errorCode' => 'DeniedRequest',
            'errorMessage' => 'Your request was denied due to instance flow control.',
          ),
        ),
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'InstanceStatusError',
            'errorMessage' => 'Your instance is unavailable.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalException',
            'errorMessage' => 'An internal server error occurred.',
          ),
          1 => 
          array (
            'errorCode' => 'NetworkException',
            'errorMessage' => 'A network error occurred.',
          ),
          2 => 
          array (
            'errorCode' => 'RequestTimeout',
            'errorMessage' => '​The request is timeout.',
          ),
          3 => 
          array (
            'errorCode' => 'UnsupportedInstanceType',
            'errorMessage' => 'The instance type is not supported.',
          ),
          4 => 
          array (
            'errorCode' => 'UnsupportedOperationType',
            'errorMessage' => 'The specified action is not supported.',
          ),
          5 => 
          array (
            'errorCode' => 'ExtractFeatureTimeout',
            'errorMessage' => 'The request was timed out while extracting features.',
          ),
          6 => 
          array (
            'errorCode' => 'AccessEngineFailed',
            'errorMessage' => 'An error occurred while accessing the search engine.',
          ),
          7 => 
          array (
            'errorCode' => 'InternalOssError',
            'errorMessage' => 'An internal OAS error occurred.',
          ),
          8 => 
          array (
            'errorCode' => 'InternalSwiftError',
            'errorMessage' => 'An internal SWIFT error occurred.',
          ),
          9 => 
          array (
            'errorCode' => 'InternalTableStoreError',
            'errorMessage' => 'An internal Table Store error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"0703956F-9BCC-48FA-99F7-96C0BF449C69\\",\\n  \\"Code\\": 0,\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '删除图片',
      'summary' => '本文为您介绍DeleteImage接口的语法及示例，用于向图像搜索实例中删除图片信息。',
      'description' => '### 使用说明
本接口用于向图像搜索实例中删除图片信息。

> 如果指定图片在图像搜索实例中不存在，该接口依然会返回成功。不能用返回结果来判断图片是否存在。

### QPS限制
删除操作默认的并发量为20，也就是每秒钟最多处理20个删除请求。',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-beijing',
      'endpoint' => 'imagesearch.cn-beijing.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'imagesearch.cn-hangzhou.aliyuncs.com',
    ),
    2 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'imagesearch.cn-shanghai.aliyuncs.com',
    ),
    3 => 
    array (
      'regionId' => 'cn-shenzhen',
      'endpoint' => 'imagesearch.cn-shenzhen.aliyuncs.com',
    ),
    4 => 
    array (
      'regionId' => 'cn-hongkong',
      'endpoint' => 'imagesearch.cn-hongkong.aliyuncs.com',
    ),
    5 => 
    array (
      'regionId' => 'ap-northeast-1',
      'endpoint' => 'imagesearch.ap-northeast-1.aliyuncs.com',
    ),
    6 => 
    array (
      'regionId' => 'ap-southeast-1',
      'endpoint' => 'imagesearch.ap-southeast-1.aliyuncs.com',
    ),
    7 => 
    array (
      'regionId' => 'ap-southeast-2',
      'endpoint' => 'imagesearch.ap-southeast-2.aliyuncs.com',
    ),
    8 => 
    array (
      'regionId' => 'eu-central-1',
      'endpoint' => 'imagesearch.eu-central-1.aliyuncs.com',
    ),
    9 => 
    array (
      'regionId' => 'ap-south-1',
      'endpoint' => 'imagesearch.ap-south-1.aliyuncs.com',
    ),
  ),
);
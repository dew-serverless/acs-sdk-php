<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'ImageSearch',
    'version' => '2020-12-14',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 64363,
      'title' => '管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'AddImage',
        1 => 'DeleteImage',
      ),
    ),
    1 => 
    array (
      'id' => 64366,
      'title' => '搜索',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'SearchImageByName',
        1 => 'SearchImageByPic',
      ),
    ),
    2 => 
    array (
      'id' => 0,
      'title' => '其它',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'Detail',
        1 => 'DumpMeta',
        2 => 'DumpMetaList',
        3 => 'IncreaseInstance',
        4 => 'IncreaseList',
        5 => 'UpdateImage',
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
    'AddImage' => 
    array (
      'summary' => '本文为您介绍AddImage接口的语法及示例，用于向图像搜索实例中添加图片信息。',
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
            'required' => true,
            'example' => '2092061_1.jpg',
          ),
        ),
        3 => 
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
 - 服务类型为商品图片搜索、通用图片搜索、家具家居图片搜索和工业五金图片搜索时，图片长和宽像素要求大于等于100PX且小于等于4096PX。
 - 服务类型为商标图片搜索时，图片长和宽像素要求大于等于200PX且小于4096PX。
 - 服务类型为布料图片搜索时，图片长和宽像素要求大于等于448PX且小于等于4096PX。
</props>
<props="intl">
 - 服务类型为商品图片搜索和通用图片搜索时，图片长和宽像素要求大于等于100PX且小于等于4096PX。
</props>
- 图片中不能包含旋转信息。
> - 若您使用SDK方式调用该接口，无需填写**PicContent**字段，SDK已将本字段封装并自动转化为Base64编码。SDK使用URL方式请参见[JAVA SDK](~~179188~~)。
- 若您使用阿里云OpenAPI平台调用该接口，仅支持选择**2019-03-25**版本，其他版本不支持通过**PicContent**字段转化为Base64编码。

',
            'type' => 'string',
            'required' => true,
            'example' => 'AAAANSUhEUgAAAPcAAAEVCAYAAAA8d3NuAAAAAXNSR0IArs......RK5CYII=',
            'isFileTransferUrl' => true,
          ),
        ),
        4 => 
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
        5 => 
        array (
          'name' => 'Crop',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否需要进行主体识别。默认true。
 - 为true：由系统进行主体识别，以识别的主体进行搜索，主体识别结果可在Response中获取。
- 为false：则不进行主体识别，以整张图进行搜索。

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
            'description' => '图片的主体区域，格式为`x1,x2,y1,y2`, 其中`x1,y1 `是左上角的点，`x2,y2`是右下角的点。
> - 若用户设置了Region，则不论Crop参数为何值，都将以用户输入Region进行搜索。
<props="china">
- 对于布料图片搜索，此参数会被忽略，系统会以整张图进行搜索。
</props>
- Region参数没有单位，是参考使用图片的长宽PX像素尺寸标记的结果，如果图片缩放对应Region参数值也要等比例缩放。',
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
            'example' => 'zidingyi',
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
            'description' => '字符串类型属性，最多支持128个字符。可用于查询时过滤，查询时会返回该字段。
> 不支持特殊字符比如：\\¥$&%',
            'type' => 'string',
            'required' => false,
            'example' => 'ss',
          ),
        ),
        10 => 
        array (
          'name' => 'IntAttr2',
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
        11 => 
        array (
          'name' => 'StrAttr2',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '字符串类型属性，最多支持128个字符。可用于查询时过滤，查询时会返回该字段。
> 不支持特殊字符比如：\\¥$&%',
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
            'title' => 'Schema of Response',
            'description' => '参数返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'description' => '错误信息。
> 成功请求不返回数据，失败请求返回错误信息。',
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
                'description' => '类目预测、主体识别结果。',
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
            'errorCode' => 'InstanceStatusError',
            'errorMessage' => 'Your instance is unavailable.',
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
          34 => 
          array (
            'errorCode' => 'InvalidPicUrl',
            'errorMessage' => 'The search picture does not exist at the specific url.',
          ),
          35 => 
          array (
            'errorCode' => 'InvalidInstanceName',
            'errorMessage' => 'The parameter instanceName is not specified.',
          ),
          36 => 
          array (
            'errorCode' => 'InvalidRequestId',
            'errorMessage' => 'The parameter requestId is not specified.',
          ),
          37 => 
          array (
            'errorCode' => 'InvalidRequestIdTooLarge',
            'errorMessage' => 'The parameter requestId is too large.',
          ),
          38 => 
          array (
            'errorCode' => 'InvalidRegion',
            'errorMessage' => 'The specific region is illegal.',
          ),
          39 => 
          array (
            'errorCode' => 'RegionError',
            'errorMessage' => 'region.',
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
          10 => 
          array (
            'errorCode' => 'PictureError',
            'errorMessage' => '[download] Img Download Failed.',
          ),
          11 => 
          array (
            'errorCode' => 'ConnectionDVException',
            'errorMessage' => 'Failed to obtain collection.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"E0845DE6-52AF-4B50-9F15-51ED4044E6AB\\",\\n  \\"Code\\": 0,\\n  \\"PicInfo\\": {\\n    \\"Region\\": \\"94,691,206,650\\",\\n    \\"CategoryId\\": 88888888\\n  },\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '添加图片数据',
      'description' => '## 使用说明
本接口用于向图像搜索实例中添加图片信息。
> 如需了解更多产品详情和获取技术支持，请单击[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)或通过钉钉群（35035130）联系我们。

## QPS限制
10W图片容量的实例默认的并发量为1，也就是每秒钟最多处理1个图片新增请求。
其他图片容量的实例默认的并发量为5，也就是每秒钟最多处理5个图片新增请求。',
      'extraInfo' => '## 错误码
请参见[错误码](~~66619~~)。',
    ),
    'DeleteImage' => 
    array (
      'summary' => '本文为您介绍DeleteImage接口的语法及示例，用于向图像搜索实例中删除图片信息。',
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
如果已经购买图搜实例可登录[图像搜索管控台](https://imagesearch.console.aliyun.com/)查看。
如果没有购买图搜实例可参考[开通服务](~~179178~~)和[创建实例](~~66569~~)。
>这里的实例名称并非实例ID，且实例名称同区域内唯一不可重复，使用时请区分。',
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
            'description' => '商品ID。

> 一个商品可以有多张图片。',
            'type' => 'string',
            'required' => true,
            'example' => '2092061_1',
          ),
        ),
        2 => 
        array (
          'name' => 'PicName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '图片名称。
 - 如果不指定本参数，则删除ProductId下所有图片。
 - 如果指定本参数，则删除ProductId+PicName指定的图片。',
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
            'description' => '返回对象。',
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
              'Data' => 
              array (
                'description' => '删除结果返回。',
                'type' => 'object',
                'properties' => 
                array (
                  'PicNames' => 
                  array (
                    'description' => '删除的PicName。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '删除的PicName。',
                      'type' => 'string',
                      'example' => 'xxx.jpg',
                    ),
                    'example' => '5555.jpg',
                  ),
                ),
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
            'errorCode' => 'InstanceStatusError',
            'errorMessage' => 'Your instance is unavailable.',
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
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'UnknownlException',
            'errorMessage' => 'An internal server error occurred.',
          ),
          1 => 
          array (
            'errorCode' => 'UnknownException',
            'errorMessage' => 'An internal server error occurred.',
          ),
          2 => 
          array (
            'errorCode' => 'NetworkException',
            'errorMessage' => 'A network error occurred.',
          ),
          3 => 
          array (
            'errorCode' => 'RequestTimeout',
            'errorMessage' => '​The request is timeout.',
          ),
          4 => 
          array (
            'errorCode' => 'UnsupportedInstanceType',
            'errorMessage' => 'The instance type is not supported.',
          ),
          5 => 
          array (
            'errorCode' => 'UnsupportedOperationType',
            'errorMessage' => 'The specified action is not supported.',
          ),
          6 => 
          array (
            'errorCode' => 'ExtractFeatureTimeout',
            'errorMessage' => 'The request was timed out while extracting features.',
          ),
          7 => 
          array (
            'errorCode' => 'AccessEngineFailed',
            'errorMessage' => 'An error occurred while accessing the search engine.',
          ),
          8 => 
          array (
            'errorCode' => 'InternalOssError',
            'errorMessage' => 'An internal OAS error occurred.',
          ),
          9 => 
          array (
            'errorCode' => 'InternalSwiftError',
            'errorMessage' => 'An internal SWIFT error occurred.',
          ),
          10 => 
          array (
            'errorCode' => 'InternalTableStoreError',
            'errorMessage' => 'An internal Table Store error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"0703956F-9BCC-48FA-99F7-96C0BF449C69\\",\\n  \\"Code\\": 0,\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"PicNames\\": [\\n      \\"xxx.jpg\\"\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '删除图片',
      'description' => '## 使用说明
本接口用于向图像搜索实例中删除图片信息。
>- 如果指定图片在图像搜索实例中不存在，该接口依然会返回成功。不能用返回结果来判断图片是否存在。
- 如需了解更多产品详情和获取技术支持，请单击[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)或通过钉钉群（35035130）联系我们。

## QPS限制
删除操作默认的并发量为20，也就是每秒钟最多处理20个删除请求。',
      'extraInfo' => '## 错误码
请参见[错误码](~~66619~~)。',
    ),
    'SearchImageByName' => 
    array (
      'summary' => '本文为您介绍SearchByName接口的语法及示例，用于根据名称查询图像搜索实例中的图片信息。',
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
          'name' => 'ProductId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '商品ID。
',
            'type' => 'string',
            'required' => true,
            'example' => '2092061_1',
            'isFileTransferUrl' => false,
          ),
        ),
        2 => 
        array (
          'name' => 'PicName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '图片名称。',
            'type' => 'string',
            'required' => true,
            'example' => '2092061_1.jpg',
          ),
        ),
        3 => 
        array (
          'name' => 'CategoryId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '商品类目。具体请参见[类目参考](~~179184~~)。
 - 对于商品搜索，如果设置类目，则以设置的为准；如果不设置类目，则由系统进行类目预测，预测的类目结果可以在Response中获取 。
<props="china">
 - 对于布料、商标、通用、家具家居和工业五金搜索，不论是否设置类目，系统会将类目设置为88888888。
</props>
<props="intl">
- 对于通用搜索，不论是否设置类目，系统会将类目设置为88888888。</props>

',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '88888888',
            'minimum' => '0',
            'example' => '88888888',
            'enum' => 
            array (
              0 => '0',
              1 => '1',
              2 => '2',
              3 => '3',
              4 => '4',
              5 => '5',
              6 => '6',
              7 => '7',
              8 => '8',
              9 => '9',
              10 => '20',
              11 => '21',
              12 => '22',
              13 => '88888888',
            ),
          ),
        ),
        4 => 
        array (
          'name' => 'Num',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '返回结果的数目。取值范围：1~100。默认值为10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '100',
            'minimum' => '1',
            'example' => '10',
            'default' => '10',
          ),
        ),
        5 => 
        array (
          'name' => 'Start',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '返回结果的起始位置。取值范围：0~499。默认值为0。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '499',
            'exclusiveMaximum' => false,
            'minimum' => '0',
            'exclusiveMinimum' => false,
            'example' => '0',
            'default' => '0',
          ),
        ),
        6 => 
        array (
          'name' => 'Filter',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '过滤条件。int_attr支持的操作符有大于号(>)、大于等于号(>=)、小于号(<)、小于等于号(<=)、等于号(=)。str_attr支持的操作符有等于号(=)和不等号(!=)，多个条件之支持AND和OR进行连接。
例如：
- int_attr>=100。
- str_attr!="value1"。
- int_attr=1000 AND str_attr="value1"。

>最多支持256个字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'int_attr>=100',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '结果返回。',
            'type' => 'object',
            'properties' => 
            array (
              'Msg' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'success',
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
                'example' => '36C43E96-8F68-44AA-B1AF-B1F7AB94A6C1',
              ),
              'Auctions' => 
              array (
                'description' => '所有返回的商品描述信息。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '图片参数。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ProductId' => 
                    array (
                      'description' => '商品ID。',
                      'type' => 'string',
                      'example' => '2092061_1',
                    ),
                    'PicName' => 
                    array (
                      'description' => '图片名称。',
                      'type' => 'string',
                      'example' => '2092061_1.jpg',
                    ),
                    'CategoryId' => 
                    array (
                      'description' => '图片类目。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '20',
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
                      'description' => '图片相似打分。取值范围：0~1。
> 需要版本升级至V3.1.1方可使用。',
                      'type' => 'number',
                      'format' => 'float',
                      'example' => '1',
                    ),
                    'IntAttr' => 
                    array (
                      'description' => '整数类型属性。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '2',
                    ),
                    'IntAttr2' => 
                    array (
                      'description' => '整数类型属性。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '20',
                    ),
                    'StrAttr' => 
                    array (
                      'description' => '字符串类型属性。',
                      'type' => 'string',
                      'example' => 'ss',
                    ),
                    'StrAttr2' => 
                    array (
                      'description' => '字符串类型属性。',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                  ),
                ),
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
                    'description' => '    主体识别结果。
图片的主体区域，格式为x1,x2,y1,y2，其中 x1,y1 是左上角的点，x2，y2是右下角的点。若用户请求中指定了主体区域，则以请求中为准。',
                    'type' => 'string',
                    'example' => '280,486,232,351',
                  ),
                  'CategoryId' => 
                  array (
                    'description' => '    类目预测结果。
若用户请求中指定了类目，则以请求中为准。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '20',
                  ),
                  'MultiRegion' => 
                  array (
                    'description' => '主体识别集合。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '主体集合。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Region' => 
                        array (
                          'description' => '    主体识别结果。
图片的主体区域，格式为x1,x2,y1,y2，其中 x1,y1 是左上角的点，x2，y2是右下角的点。若用户请求中指定了主体区域，则以请求中为准。',
                          'type' => 'string',
                          'example' => '280,486,232,351',
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
                      'description' => '类目信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Name' => 
                        array (
                          'description' => ' 类目名称。',
                          'type' => 'string',
                          'example' => '88888888',
                        ),
                        'Id' => 
                        array (
                          'description' => '类目ID。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => 'other',
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
            'errorCode' => 'InstanceStatusError',
            'errorMessage' => 'Your instance is unavailable.',
          ),
          2 => 
          array (
            'errorCode' => 'TimeoutForTransferImage',
            'errorMessage' => 'Timeout after 5 seconds waiting for images transfer to complete.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidInstance',
            'errorMessage' => 'The specified instance name is invalid.',
          ),
          4 => 
          array (
            'errorCode' => 'NoCaretSeperator',
            'errorMessage' => 'The body content is missing the ^ separator.',
          ),
          5 => 
          array (
            'errorCode' => 'EmptyMeta',
            'errorMessage' => 'The body content has an empty meta field.',
          ),
          6 => 
          array (
            'errorCode' => 'InvalidMetaItem',
            'errorMessage' => 'The meta field is invalid.',
          ),
          7 => 
          array (
            'errorCode' => 'NoPicList',
            'errorMessage' => 'The body content is missing the pic_list parameter.',
          ),
          8 => 
          array (
            'errorCode' => 'InvalidPicList',
            'errorMessage' => 'The specified pic_list parameter is invalid.',
          ),
          9 => 
          array (
            'errorCode' => 'NoSpecifiedPic',
            'errorMessage' => 'he content of an image is not specified in the HTTP POST body.',
          ),
          10 => 
          array (
            'errorCode' => 'NoSpecifiedSearchPic',
            'errorMessage' => 'The search image is not specified.',
          ),
          11 => 
          array (
            'errorCode' => 'InvalidCategory',
            'errorMessage' => 'The specified category is invalid.',
          ),
          12 => 
          array (
            'errorCode' => 'OverflowMaxResultNum',
            'errorMessage' => 'The specified number of total results exceeds the maximum of 500.',
          ),
          13 => 
          array (
            'errorCode' => 'OverflowMaxReturnNum',
            'errorMessage' => 'The specified number of results for each request exceeds the maximum of 100.',
          ),
          14 => 
          array (
            'errorCode' => 'InvalidStartParameter',
            'errorMessage' => 'The specified parameter start is inavlid.',
          ),
          15 => 
          array (
            'errorCode' => 'InvalidNumParameter',
            'errorMessage' => 'The specified parameter num is invalid.',
          ),
          16 => 
          array (
            'errorCode' => 'NoSpecifiedAddPic',
            'errorMessage' => 'The image to insert is not specified.',
          ),
          17 => 
          array (
            'errorCode' => 'NoSpecifiedItemId',
            'errorMessage' => 'The item_id parameter is not specified.',
          ),
          18 => 
          array (
            'errorCode' => 'InvalidIntAttr',
            'errorMessage' => 'The specified int_attr field is invalid.',
          ),
          19 => 
          array (
            'errorCode' => 'UnsupportedPicFormat',
            'errorMessage' => 'The specified image format is invalid.',
          ),
          20 => 
          array (
            'errorCode' => 'InvalidFilterClause',
            'errorMessage' => 'The specified filtering condition is invalid.',
          ),
          21 => 
          array (
            'errorCode' => 'InstanceOverQuota',
            'errorMessage' => 'The number of items exceeds the limit.',
          ),
          22 => 
          array (
            'errorCode' => 'IncorrectOrientation',
            'errorMessage' => 'The image contains incorrect rotation flags in the meta data.',
          ),
          23 => 
          array (
            'errorCode' => 'UnsupportedPicPixels',
            'errorMessage' => 'The specified pixels is not supported.',
          ),
          24 => 
          array (
            'errorCode' => 'SearchTimeout',
            'errorMessage' => 'The request is timed out.',
          ),
          25 => 
          array (
            'errorCode' => 'PicNotExist',
            'errorMessage' => 'The search picture does not exist.',
          ),
          26 => 
          array (
            'errorCode' => 'NoSpecifiedProductId',
            'errorMessage' => 'The parameter ProductId no specified.',
          ),
          27 => 
          array (
            'errorCode' => 'NoSpecifiedPicName',
            'errorMessage' => 'The parameter PicName no specified.',
          ),
          28 => 
          array (
            'errorCode' => 'NoSpecifiedPicContent',
            'errorMessage' => 'The parameter PicContent no specified.',
          ),
          29 => 
          array (
            'errorCode' => 'InvalidType',
            'errorMessage' => 'The specified parameter Type is not valid.',
          ),
          30 => 
          array (
            'errorCode' => 'InvalidProductId',
            'errorMessage' => 'The specified parameter ProductId is not valid.',
          ),
          31 => 
          array (
            'errorCode' => 'InvalidPicName',
            'errorMessage' => 'The specified parameter PicName is not valid.',
          ),
          32 => 
          array (
            'errorCode' => 'InvalidStrAttr',
            'errorMessage' => 'The specified parameter StrAttr is not valid.',
          ),
          33 => 
          array (
            'errorCode' => 'InvalidCustomContent',
            'errorMessage' => 'The specified parameter CustomContent is not valid.',
          ),
          34 => 
          array (
            'errorCode' => 'InvalidPicContent',
            'errorMessage' => 'The specified parameter PicContent length greater than 2 * 1024 * 1024.',
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
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Msg\\": \\"success\\",\\n  \\"Head\\": {\\n    \\"DocsFound\\": 10,\\n    \\"DocsReturn\\": 10000,\\n    \\"SearchTime\\": 95\\n  },\\n  \\"RequestId\\": \\"36C43E96-8F68-44AA-B1AF-B1F7AB94A6C1\\",\\n  \\"Auctions\\": [\\n    {\\n      \\"ProductId\\": \\"2092061_1\\",\\n      \\"PicName\\": \\"2092061_1.jpg\\",\\n      \\"CategoryId\\": 20,\\n      \\"SortExprValues\\": \\"5.37633353624177e+24;0\\",\\n      \\"CustomContent\\": \\"zidingyi\\",\\n      \\"Score\\": 1,\\n      \\"IntAttr\\": 2,\\n      \\"IntAttr2\\": 20,\\n      \\"StrAttr\\": \\"ss\\",\\n      \\"StrAttr2\\": \\"test\\"\\n    }\\n  ],\\n  \\"Code\\": 0,\\n  \\"PicInfo\\": {\\n    \\"Region\\": \\"280,486,232,351\\",\\n    \\"CategoryId\\": 20,\\n    \\"MultiRegion\\": [\\n      {\\n        \\"Region\\": \\"280,486,232,351\\"\\n      }\\n    ],\\n    \\"AllCategories\\": [\\n      {\\n        \\"Name\\": \\"88888888\\",\\n        \\"Id\\": 0\\n      }\\n    ]\\n  },\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '通过名称搜索图像',
      'description' => '## 使用说明
本接口用于根据名称(即ProductId和PicName)查询图像搜索实例中的图片信息。
> 如需了解更多产品详情和获取技术支持，请单击[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)或通过钉钉群（35035130）联系我们。

## QPS限制
查询操作默认的最大访问频率可在控制台中查看，为您购买时所选择的访问频次（QPS），当前支持1QPS、5QPS、10QPS。',
      'extraInfo' => '## 错误码
请参见[错误码](~~66619~~)。',
    ),
    'SearchImageByPic' => 
    array (
      'summary' => '本文为您介绍SearchByPic的语法及示例，用于根据图片查询图像搜索实例中的图片信息。',
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
 - 图片中不能包含旋转信息。
> - 若您使用SDK方式调用该接口，无需填写**PicContent**字段，SDK已将本字段封装并自动转化为Base64编码。SDK使用URL方式请参见[JAVA SDK](~~179188~~)。
- 若您使用阿里云OpenAPI平台调用该接口，仅支持选择**2019-03-25**版本，其他版本不支持通过**PicContent**字段转化为Base64编码。',
            'type' => 'string',
            'required' => true,
            'example' => 'AAAANSUhEUgAAAPcAAAEVCAYAAAA8d3NuAAAAAXNSR0IArs......RK5CYII=',
            'isFileTransferUrl' => true,
          ),
        ),
        2 => 
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
            'maximum' => '88888888',
            'minimum' => '0',
            'example' => '88888888',
            'enum' => 
            array (
              0 => '0',
              1 => '1',
              2 => '2',
              3 => '3',
              4 => '4',
              5 => '5',
              6 => '6',
              7 => '7',
              8 => '8',
              9 => '9',
              10 => '20',
              11 => '21',
              12 => '22',
              13 => '88888888',
            ),
          ),
        ),
        3 => 
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
        4 => 
        array (
          'name' => 'Region',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '图片的主体区域，格式为`x1,x2,y1,y2,` 其中`x1,y1` 是左上角的点，`x2,y2`是右下角的点。
> - 若用户设置了Region，则不论Crop参数为何值，都将以用户输入Region进行搜索。
<props="china">
- 对于布料图片搜索，此参数会被忽略，系统会以整张图进行搜索。
</props>


',
            'type' => 'string',
            'required' => false,
            'example' => '280,486,232,351',
          ),
        ),
        5 => 
        array (
          'name' => 'Num',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '返回结果的数目。取值范围：1~100。默认值为10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '100',
            'minimum' => '1',
            'example' => '10',
            'default' => '10',
          ),
        ),
        6 => 
        array (
          'name' => 'Start',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '返回结果的起始位置。取值范围：0~499。默认值为0。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '499',
            'minimum' => '0',
            'example' => '0',
            'default' => '0',
          ),
        ),
        7 => 
        array (
          'name' => 'Filter',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '过滤条件。int_attr支持的操作符有大于号(>)、大于等于号(>=)、小于号(<)、小于等于号(<=)、等于号(=)。str_attr支持的操作符有等于号(=)和不等号(!=)，多个条件之支持AND和OR进行连接。
例如：
- int_attr >= 100。
- str_attr != "value1"。
- int_attr = 1000 AND str_attr = "value1"。

>最多支持256个字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'int_attr=1000 AND str_attr="value1"',
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
              'Msg' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'success',
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
                'example' => 'B3137727-7D6E-488C-BA21-0E034C38A879',
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
                    'ProductId' => 
                    array (
                      'description' => '商品ID。',
                      'type' => 'string',
                      'example' => '2092061_1',
                    ),
                    'PicName' => 
                    array (
                      'description' => '图片名称。',
                      'type' => 'string',
                      'example' => '2092061_1.jpg',
                    ),
                    'CategoryId' => 
                    array (
                      'description' => '图片类目。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '8888888',
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
                      'description' => '图片相似打分。取值范围：0~1。
> 需要版本升级至V3.1.1方可使用。',
                      'type' => 'number',
                      'format' => 'float',
                      'example' => '1',
                    ),
                    'IntAttr' => 
                    array (
                      'description' => '整数类型属性。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '2',
                    ),
                    'IntAttr2' => 
                    array (
                      'description' => '整数类型属性。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '20',
                    ),
                    'StrAttr' => 
                    array (
                      'description' => '字符串类型属性。',
                      'type' => 'string',
                      'example' => '2',
                    ),
                    'StrAttr2' => 
                    array (
                      'description' => '字符串类型属性。',
                      'type' => 'string',
                      'example' => 'test',
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
                    'description' => '主体识别结果。图片的主体区域，格式为x1,x2,y1,y2，其中 x1,y1 是左上角的点，x2，y2是右下角的点。若用户请求中指定了主体区域，则以请求中为准。',
                    'type' => 'string',
                    'example' => '280,486,232,351',
                  ),
                  'CategoryId' => 
                  array (
                    'description' => '类目预测结果。若用户请求中指定了类目，则以请求中为准。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '88888888',
                  ),
                  'MultiRegion' => 
                  array (
                    'description' => '主体识别结果集合。
> 需要版本升级至V3.1.1方可使用。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '主体识别结果。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Region' => 
                        array (
                          'description' => '主体识别结果。图片的主体区域，格式为x1,x2,y1,y2，其中 x1,y1 是左上角的点，x2，y2是右下角的点。若用户请求中指定了主体区域，则以请求中为准。',
                          'type' => 'string',
                          'example' => '280,486,232,351',
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
            'errorCode' => 'InstanceStatusError',
            'errorMessage' => 'Your instance is unavailable.',
          ),
          2 => 
          array (
            'errorCode' => 'TimeoutForTransferImage',
            'errorMessage' => 'Timeout after 5 seconds waiting for images transfer to complete.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidInstance',
            'errorMessage' => 'The specified instance name is invalid.',
          ),
          4 => 
          array (
            'errorCode' => 'NoCaretSeperator',
            'errorMessage' => 'The body content is missing the ^ separator.',
          ),
          5 => 
          array (
            'errorCode' => 'EmptyMeta',
            'errorMessage' => 'The body content has an empty meta field.',
          ),
          6 => 
          array (
            'errorCode' => 'InvalidMetaItem',
            'errorMessage' => 'The meta field is invalid.',
          ),
          7 => 
          array (
            'errorCode' => 'NoPicList',
            'errorMessage' => 'The body content is missing the pic_list parameter.',
          ),
          8 => 
          array (
            'errorCode' => 'InvalidPicList',
            'errorMessage' => 'The specified pic_list parameter is invalid.',
          ),
          9 => 
          array (
            'errorCode' => 'NoSpecifiedPic',
            'errorMessage' => 'he content of an image is not specified in the HTTP POST body.',
          ),
          10 => 
          array (
            'errorCode' => 'NoSpecifiedSearchPic',
            'errorMessage' => 'The search image is not specified.',
          ),
          11 => 
          array (
            'errorCode' => 'InvalidCategory',
            'errorMessage' => 'The specified category is invalid.',
          ),
          12 => 
          array (
            'errorCode' => 'OverflowMaxResultNum',
            'errorMessage' => 'The specified number of total results exceeds the maximum of 500.',
          ),
          13 => 
          array (
            'errorCode' => 'OverflowMaxReturnNum',
            'errorMessage' => 'The specified number of results for each request exceeds the maximum of 100.',
          ),
          14 => 
          array (
            'errorCode' => 'InvalidStartParameter',
            'errorMessage' => 'The specified parameter start is inavlid.',
          ),
          15 => 
          array (
            'errorCode' => 'InvalidNumParameter',
            'errorMessage' => 'The specified parameter num is invalid.',
          ),
          16 => 
          array (
            'errorCode' => 'NoSpecifiedAddPic',
            'errorMessage' => 'The image to insert is not specified.',
          ),
          17 => 
          array (
            'errorCode' => 'NoSpecifiedItemId',
            'errorMessage' => 'The item_id parameter is not specified.',
          ),
          18 => 
          array (
            'errorCode' => 'InvalidIntAttr',
            'errorMessage' => 'The specified int_attr field is invalid.',
          ),
          19 => 
          array (
            'errorCode' => 'UnsupportedPicFormat',
            'errorMessage' => 'The specified image format is invalid.',
          ),
          20 => 
          array (
            'errorCode' => 'InvalidFilterClause',
            'errorMessage' => 'The specified filtering condition is invalid.',
          ),
          21 => 
          array (
            'errorCode' => 'InstanceOverQuota',
            'errorMessage' => 'The number of items exceeds the limit.',
          ),
          22 => 
          array (
            'errorCode' => 'IncorrectOrientation',
            'errorMessage' => 'The image contains incorrect rotation flags in the meta data.',
          ),
          23 => 
          array (
            'errorCode' => 'UnsupportedPicPixels',
            'errorMessage' => 'The specified pixels is not supported.',
          ),
          24 => 
          array (
            'errorCode' => 'SearchTimeout',
            'errorMessage' => 'The request is timed out.',
          ),
          25 => 
          array (
            'errorCode' => 'PicNotExist',
            'errorMessage' => 'The search picture does not exist.',
          ),
          26 => 
          array (
            'errorCode' => 'NoSpecifiedProductId',
            'errorMessage' => 'The parameter ProductId no specified.',
          ),
          27 => 
          array (
            'errorCode' => 'NoSpecifiedPicName',
            'errorMessage' => 'The parameter PicName no specified.',
          ),
          28 => 
          array (
            'errorCode' => 'NoSpecifiedPicContent',
            'errorMessage' => 'The parameter PicContent no specified.',
          ),
          29 => 
          array (
            'errorCode' => 'InvalidType',
            'errorMessage' => 'The specified parameter Type is not valid.',
          ),
          30 => 
          array (
            'errorCode' => 'InvalidProductId',
            'errorMessage' => 'The specified parameter ProductId is not valid.',
          ),
          31 => 
          array (
            'errorCode' => 'InvalidPicName',
            'errorMessage' => 'The specified parameter PicName is not valid.',
          ),
          32 => 
          array (
            'errorCode' => 'InvalidStrAttr',
            'errorMessage' => 'The specified parameter StrAttr is not valid.',
          ),
          33 => 
          array (
            'errorCode' => 'InvalidCustomContent',
            'errorMessage' => 'The specified parameter CustomContent is not valid.',
          ),
          34 => 
          array (
            'errorCode' => 'InvalidPicContent',
            'errorMessage' => 'The specified parameter PicContent length greater than 4 * 1024 * 1024.',
          ),
          35 => 
          array (
            'errorCode' => 'InvalidPicUrl',
            'errorMessage' => 'The search picture does not exist at the specific url.',
          ),
          36 => 
          array (
            'errorCode' => 'InvalidInstanceName',
            'errorMessage' => 'The parameter instanceName is not specified.',
          ),
          37 => 
          array (
            'errorCode' => 'InvalidRequestId',
            'errorMessage' => 'The parameter requestId is not specified.',
          ),
          38 => 
          array (
            'errorCode' => 'InvalidRequestIdTooLarge',
            'errorMessage' => 'The parameter requestId is too large.',
          ),
          39 => 
          array (
            'errorCode' => 'InvalidRegion',
            'errorMessage' => 'The specific region is illegal',
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
          10 => 
          array (
            'errorCode' => 'ConnectionDVException',
            'errorMessage' => 'Failed to obtain collection.',
          ),
          11 => 
          array (
            'errorCode' => 'PictureError',
            'errorMessage' => '[download] Img Download Failed.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Msg\\": \\"success\\",\\n  \\"Head\\": {\\n    \\"DocsFound\\": 10,\\n    \\"DocsReturn\\": 10000,\\n    \\"SearchTime\\": 95\\n  },\\n  \\"RequestId\\": \\"B3137727-7D6E-488C-BA21-0E034C38A879\\",\\n  \\"Auctions\\": [\\n    {\\n      \\"ProductId\\": \\"2092061_1\\",\\n      \\"PicName\\": \\"2092061_1.jpg\\",\\n      \\"CategoryId\\": 8888888,\\n      \\"SortExprValues\\": \\"5.37633353624177e+24;0\\",\\n      \\"CustomContent\\": \\"zidingyi\\",\\n      \\"Score\\": 1,\\n      \\"IntAttr\\": 2,\\n      \\"IntAttr2\\": 20,\\n      \\"StrAttr\\": \\"2\\",\\n      \\"StrAttr2\\": \\"test\\"\\n    }\\n  ],\\n  \\"Code\\": 0,\\n  \\"PicInfo\\": {\\n    \\"Region\\": \\"280,486,232,351\\",\\n    \\"CategoryId\\": 88888888,\\n    \\"MultiRegion\\": [\\n      {\\n        \\"Region\\": \\"280,486,232,351\\"\\n      }\\n    ],\\n    \\"AllCategories\\": [\\n      {\\n        \\"Name\\": \\"other\\",\\n        \\"Id\\": 88888888\\n      }\\n    ]\\n  },\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '图片搜索',
      'description' => '## 使用说明
本接口用于根据图片查询图像搜索实例中的图片信息。
> 如需了解更多产品详情和获取技术支持，请单击[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)或通过钉钉群（35035130）联系我们。

## QPS限制
查询操作默认的最大访问频率可在控制台中查看，为您购买时所选择的访问频次（QPS），当前支持1QPS、5QPS、10QPS。


### SDK版本说明
图像SDK版本升级到V3.1.1，可使用“多主体识别”、“相似性分数”功能。请参见[Java SDK](~~179188~~)。',
      'extraInfo' => '## 错误码
请参见[错误码](~~66619~~)。',
    ),
    'Detail' => 
    array (
      'summary' => '本文为您介绍Detail接口的语法及示例，用于根据名称查询图像搜索实例的相关信息。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '图搜实例名称。最多支持20个字符。
如果已经购买图搜实例可登录[图像搜索管控台](https://imagesearch.console.aliyun.com/)查看。
如果没有购买图搜实例可参考[开通服务](~~179178~~)和[创建实例](~~66569~~)。
>这里的实例名称并非实例ID，且实例名称同区域内唯一不可重复，使用时请区分。',
            'type' => 'string',
            'required' => true,
            'example' => 'imagesearchName',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '结果返回。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '36C43E96-8F68-44AA-B1AF-B1F7AB94A6C1',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Instance' => 
              array (
                'description' => '实例信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'Capacity' => 
                  array (
                    'description' => '套餐容量。单位万。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'UtcExpireTime' => 
                  array (
                    'description' => '实例到期时间。单位毫秒。',
                    'type' => 'string',
                    'example' => '1623081600000',
                  ),
                  'UtcCreate' => 
                  array (
                    'description' => '实例创建时间。单位毫秒。',
                    'type' => 'string',
                    'example' => '1620382716000',
                  ),
                  'ServiceType' => 
                  array (
                    'description' => '图搜模型。

<props="intl">0：商品搜索；1：通用图片搜索。</props>
<props="china">0：商品搜索；1：通用图片搜索；2：布料搜索；3、7：商标搜索；4：版权搜索；5：家具搜索；6：五金搜索。</props>
',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'Region' => 
                  array (
                    'description' => '地域信息。',
                    'type' => 'string',
                    'example' => 'cn-shanghai',
                  ),
                  'Name' => 
                  array (
                    'description' => '实例名称。',
                    'type' => 'string',
                    'example' => 'imagesearchName',
                  ),
                  'TotalCount' => 
                  array (
                    'description' => '图片数量。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '10063',
                  ),
                  'Qps' => 
                  array (
                    'description' => '套餐QPS。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                ),
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
            'errorCode' => 'DeniedRequest',
            'errorMessage' => 'Your request was denied due to instance flow control.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidInstance',
            'errorMessage' => 'The specified instance name is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'Console.BadRequest',
            'errorMessage' => 'The request has invalid parameters.',
          ),
          3 => 
          array (
            'errorCode' => 'Console.InstanceNotFound',
            'errorMessage' => 'The specified ImageSearch instance is not found.',
          ),
        ),
        401 => 
        array (
          0 => 
          array (
            'errorCode' => 'Console.LoginError',
            'errorMessage' => 'Check login failed.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Console.NoPermission',
            'errorMessage' => 'You are not authorized to this operation.',
          ),
        ),
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'Console.InstanceStatusError',
            'errorMessage' => 'Current Instance status not supported this opreate.',
          ),
          1 => 
          array (
            'errorCode' => 'Console.OrderStatusError',
            'errorMessage' => 'Current Order status not supported this opreate.',
          ),
          2 => 
          array (
            'errorCode' => 'Console.IncrementStatusError',
            'errorMessage' => 'Current Increment status not supported this opreate.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'Console.InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
          1 => 
          array (
            'errorCode' => 'Console.CallServiceError',
            'errorMessage' => 'Fail to call service.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"36C43E96-8F68-44AA-B1AF-B1F7AB94A6C1\\",\\n  \\"Success\\": true,\\n  \\"Instance\\": {\\n    \\"Capacity\\": 10,\\n    \\"UtcExpireTime\\": \\"1623081600000\\",\\n    \\"UtcCreate\\": \\"1620382716000\\",\\n    \\"ServiceType\\": 0,\\n    \\"Region\\": \\"cn-shanghai\\",\\n    \\"Name\\": \\"imagesearchName\\",\\n    \\"TotalCount\\": 10063,\\n    \\"Qps\\": 1\\n  }\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '查询实例状态',
      'description' => '## 使用说明
本接口用于向图像搜索实例中查询实例信息。
> 如需了解更多产品详情和获取技术支持，请单击[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)或通过钉钉群（35035130）联系我们。

## QPS限制
查询操作默认的并发量为1，也就是每秒钟最多处理1个请求。',
      'extraInfo' => '## 错误码
请参见[错误码](~~66619~~)。',
    ),
    'DumpMeta' => 
    array (
      'summary' => '本文为您介绍DumpMeta接口的语法及示例，用于根据名称新建图像搜索元数据导出任务。',
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
          'name' => 'InstanceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '图搜实例名称。最多支持20个字符。
如果已经购买图搜实例可登录[图像搜索管控台](https://imagesearch.console.aliyun.com/)查看。
如果没有购买图搜实例可参考[开通服务](~~179178~~)和[创建实例](~~66569~~)。
>这里的实例名称并非实例ID，使用时请区分。',
            'type' => 'string',
            'required' => true,
            'maximum' => '10000000',
            'minimum' => '1',
            'example' => 'imagesearchName',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回信息。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '36C43E96-8F68-44AA-B1AF-B1F7AB94A6C1',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '任务执行返回。',
                'type' => 'object',
                'properties' => 
                array (
                  'DumpMetaStatus' => 
                  array (
                    'description' => '元数据导出任务状态。
- PROCESSING：任务处理中。
- FAIL：任务执行失败。
- SUCCESS：任务已完成。',
                    'type' => 'string',
                    'example' => 'PROCESSING',
                  ),
                  'Id' => 
                  array (
                    'description' => '任务ID。',
                    'type' => 'string',
                    'example' => '500',
                  ),
                ),
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
            'errorCode' => 'InvalidInstance',
            'errorMessage' => 'The specified instance name is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'Console.BadRequest',
            'errorMessage' => 'The request has invalid parameters.',
          ),
          2 => 
          array (
            'errorCode' => 'Console.InstanceNotFound',
            'errorMessage' => 'The specified ImageSearch instance is not found.',
          ),
        ),
        401 => 
        array (
          0 => 
          array (
            'errorCode' => 'Console.LoginError',
            'errorMessage' => 'Check login failed.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Console.NoPermission',
            'errorMessage' => 'You are not authorized to this operation.',
          ),
        ),
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'Console.InstanceStatusError',
            'errorMessage' => 'Current Instance status not supported this opreate.',
          ),
          1 => 
          array (
            'errorCode' => 'Console.OrderStatusError',
            'errorMessage' => 'Current Order status not supported this opreate.',
          ),
          2 => 
          array (
            'errorCode' => 'Console.IncrementStatusError',
            'errorMessage' => 'Current Increment status not supported this opreate.',
          ),
          3 => 
          array (
            'errorCode' => 'Console.TaskAlreadyExist',
            'errorMessage' => 'A task that is in progress already exists.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'Console.InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
          1 => 
          array (
            'errorCode' => 'Console.CallServiceError',
            'errorMessage' => 'An internal service error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"36C43E96-8F68-44AA-B1AF-B1F7AB94A6C1\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"DumpMetaStatus\\": \\"PROCESSING\\",\\n    \\"Id\\": \\"500\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '元数据导出',
      'description' => '## 使用说明
本接口用于向图像搜索实例中提交元信息导出任务。
> 如需了解更多产品详情和获取技术支持，请单击[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)或通过钉钉群（35035130）联系我们。

## QPS限制
提交操作默认的并发量为1，也就是每秒钟最多处理1个请求。
> 当上一个元信息导出任务没有完成时，无法提交新的元信息导出任务。',
      'extraInfo' => '## 错误码
请参见[错误码](~~66619~~)。',
    ),
    'DumpMetaList' => 
    array (
      'summary' => '本文为您介绍DumpMetaList接口的语法及示例，用于向图像搜索实例中查看元信息导出任务列表。',
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
          'name' => 'InstanceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '图搜实例名称。最多支持20个字符。
如果已经购买图搜实例可登录[图像搜索管控台](https://imagesearch.console.aliyun.com/)查看。
如果没有购买图搜实例可参考[开通服务](~~179178~~)和[创建实例](~~66569~~)。
>这里的实例名称并非实例ID，且实例名称同区域内唯一不可重复，使用时请区分。',
            'type' => 'string',
            'required' => true,
            'maximum' => '10000000',
            'minimum' => '1',
            'example' => 'demoinstance1',
          ),
        ),
        1 => 
        array (
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '元信息导出任务ID。
>导出任务ID，需要先执行[元数据导出](~~377466~~)从返回值得到。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '500',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '返回结果的数目。默认值为10，最大值30。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '500',
            'exclusiveMaximum' => true,
            'minimum' => '1',
            'example' => '10',
          ),
        ),
        3 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '返回结果的起始位置。默认值为1，最大值30。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '500',
            'minimum' => '1',
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'B3137727-7D6E-488C-BA21-0E034C38A879',
              ),
              'Data' => 
              array (
                'description' => '元数据导出信息返回。',
                'type' => 'object',
                'properties' => 
                array (
                  'DumpMetaList' => 
                  array (
                    'description' => '元信息导出任务集合。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '元信息导出任务详情。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Status' => 
                        array (
                          'description' => '任务状态。
- PROCESSING：任务处理中。
- FAIL：任务执行失败。
- SUCCESS：任务已完成。',
                          'type' => 'string',
                          'example' => 'SUCCESS',
                        ),
                        'Msg' => 
                        array (
                          'description' => '错误信息。',
                          'type' => 'string',
                          'example' => 'success',
                        ),
                        'UtcModified' => 
                        array (
                          'description' => '任务更新时间。单位毫秒。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1629095760000',
                        ),
                        'MetaUrl' => 
                        array (
                          'description' => '结果下载地址。有效期两个小时。',
                          'type' => 'string',
                          'example' => 'https://imagesearchname.oss-cn-shanghai.aliyuncs.com/xxx',
                        ),
                        'UtcCreate' => 
                        array (
                          'description' => '任务创建时间。单位毫秒。',
                          'type' => 'string',
                          'example' => '1629095713000',
                        ),
                        'Code' => 
                        array (
                          'description' => '错误码。

- 0：成功。
- 非0：失败。',
                          'type' => 'string',
                          'example' => '0',
                        ),
                        'Id' => 
                        array (
                          'description' => '任务ID。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '500',
                        ),
                      ),
                    ),
                  ),
                  'PageSize' => 
                  array (
                    'description' => '查询结果数目。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'PageNumber' => 
                  array (
                    'description' => '结果当前页数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'TotalCount' => 
                  array (
                    'description' => '任务总数量。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '15',
                  ),
                ),
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
            'errorCode' => 'InvalidInstance',
            'errorMessage' => 'The specified instance name is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'Console.BadRequest',
            'errorMessage' => 'The request has invalid parameters.',
          ),
          2 => 
          array (
            'errorCode' => 'Console.InstanceNotFound',
            'errorMessage' => 'The specified ImageSearch instance is not found.',
          ),
        ),
        401 => 
        array (
          0 => 
          array (
            'errorCode' => 'Console.LoginError',
            'errorMessage' => 'Check login failed.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Console.NoPermission',
            'errorMessage' => 'You are not authorized to this operation.',
          ),
        ),
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'Console.InstanceStatusError',
            'errorMessage' => 'Current Instance status not supported this opreate.',
          ),
          1 => 
          array (
            'errorCode' => 'Console.OrderStatusError',
            'errorMessage' => 'Current Order status not supported this opreate.',
          ),
          2 => 
          array (
            'errorCode' => 'Console.IncrementStatusError',
            'errorMessage' => 'Current Increment status not supported this opreate.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'Console.InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
          1 => 
          array (
            'errorCode' => 'Console.CallServiceError',
            'errorMessage' => 'An internal service error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"B3137727-7D6E-488C-BA21-0E034C38A879\\",\\n  \\"Data\\": {\\n    \\"DumpMetaList\\": [\\n      {\\n        \\"Status\\": \\"SUCCESS\\",\\n        \\"Msg\\": \\"success\\",\\n        \\"UtcModified\\": 1629095760000,\\n        \\"MetaUrl\\": \\"https://imagesearchname.oss-cn-shanghai.aliyuncs.com/xxx\\",\\n        \\"UtcCreate\\": \\"1629095713000\\",\\n        \\"Code\\": \\"0\\",\\n        \\"Id\\": 500\\n      }\\n    ],\\n    \\"PageSize\\": 10,\\n    \\"PageNumber\\": 1,\\n    \\"TotalCount\\": 15\\n  }\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '查询元信息导出任务',
      'description' => '## 使用说明
本接口用于向图像搜索实例中查询元信息导出任务。
> 如需了解更多产品详情和获取技术支持，请单击[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)或通过钉钉群（35035130）联系我们。

## QPS限制
查询操作默认的并发量为1，也就是每秒钟最多处理1个请求。',
      'extraInfo' => '## 错误码
请参见[错误码](~~66619~~)。',
    ),
    'IncreaseInstance' => 
    array (
      'summary' => '本文为您介绍IncreaseInstance接口的语法及示例，用于根据名称新建图像搜索实例批量任务。',
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
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '图搜实例名称。最多支持20个字符。
如果已经购买图搜实例可登录[图像搜索管控台](https://imagesearch.console.aliyun.com/)查看。
如果没有购买图搜实例可参考[开通服务](~~179178~~)和[创建实例](~~66569~~)。
>这里的实例名称并非实例ID，使用时请区分。',
            'type' => 'string',
            'required' => true,
            'example' => 'imagesearchName',
          ),
        ),
        1 => 
        array (
          'name' => 'BucketName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Bucket名称。
> 仅支持实例同区域的BucketName。',
            'type' => 'string',
            'required' => true,
            'example' => 'bucketName',
          ),
        ),
        2 => 
        array (
          'name' => 'Path',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'OSS中increment.meta文件的绝对路径。必须"/"开头，非"/"结尾。
> 需要您提前准备increment.meta文件。具体请参见[批量操作](~~66580~~)。',
            'type' => 'string',
            'required' => true,
            'example' => '/xxx/xxx',
          ),
        ),
        3 => 
        array (
          'name' => 'CallbackAddress',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务回调地址。',
            'type' => 'string',
            'required' => false,
            'example' => 'http://xxxxx',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回信息。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '36C43E96-8F68-44AA-B1AF-B1F7AB94A6C1',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '任务执行返回。',
                'type' => 'object',
                'properties' => 
                array (
                  'IncrementStatus' => 
                  array (
                    'description' => '批量任务状态。
- PROCESSING：任务处理中。
- FAIL：任务执行失败。
- SUCCESS：任务已完成。',
                    'type' => 'string',
                    'example' => 'PROCESSING',
                  ),
                  'Id' => 
                  array (
                    'description' => '任务ID。',
                    'type' => 'string',
                    'example' => '500',
                  ),
                ),
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
            'errorCode' => 'InvalidInstance',
            'errorMessage' => 'The specified instance name is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'Console.BadRequest',
            'errorMessage' => 'The request has invalid parameters.',
          ),
          2 => 
          array (
            'errorCode' => 'Console.InstanceNotFound',
            'errorMessage' => 'The specified ImageSearch instance is not found.',
          ),
        ),
        401 => 
        array (
          0 => 
          array (
            'errorCode' => 'Console.LoginError',
            'errorMessage' => 'Check login failed.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Console.NoPermission',
            'errorMessage' => 'You are not authorized to this operation.',
          ),
        ),
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'Console.InstanceStatusError',
            'errorMessage' => 'Current Instance status not supported this opreate.',
          ),
          1 => 
          array (
            'errorCode' => 'Console.OrderStatusError',
            'errorMessage' => 'Current Order status not supported this opreate.',
          ),
          2 => 
          array (
            'errorCode' => 'Console.IncrementStatusError',
            'errorMessage' => 'Current Increment status not supported this opreate.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'Console.InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
          1 => 
          array (
            'errorCode' => 'Console.CallServiceError',
            'errorMessage' => 'Fail to call service.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"36C43E96-8F68-44AA-B1AF-B1F7AB94A6C1\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"IncrementStatus\\": \\"PROCESSING\\",\\n    \\"Id\\": \\"500\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '批量操作',
      'description' => '## 使用说明
本接口用于向图像搜索实例中提交批量任务。
> 如需了解更多产品详情和获取技术支持，请单击[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)或通过钉钉群（35035130）联系我们。

## QPS限制
同一时间，只能运行一个批量任务。
> 当上一个批量任务没有完成时，无法提交新的批量任务。',
      'extraInfo' => '## 错误码
请参见[错误码](~~66619~~)。',
    ),
    'IncreaseList' => 
    array (
      'summary' => '本文为您介绍IncreaseList接口的语法及示例，用于向图像搜索实例中查看批量任务列表。',
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
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '图搜实例名称。最多支持20个字符。
如果已经购买图搜实例可登录[图像搜索管控台](https://imagesearch.console.aliyun.com/)查看。
如果没有购买图搜实例可参考[开通服务](~~179178~~)和[创建实例](~~66569~~)。
>这里的实例名称并非实例ID，且实例名称同区域内唯一不可重复，使用时请区分。',
            'type' => 'string',
            'required' => true,
            'example' => 'demoinstance1',
          ),
        ),
        1 => 
        array (
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '批量任务ID。
>批量任务ID，需要先执行[批量操作](~~377468~~)从返回值得到。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '500',
          ),
        ),
        2 => 
        array (
          'name' => 'BucketName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Bucket名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'bucketName',
          ),
        ),
        3 => 
        array (
          'name' => 'Path',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'OSS中increment.meta文件的绝对路径。必须"/"开头，非"/"结尾。',
            'type' => 'string',
            'required' => false,
            'example' => '/xxx/xxx',
          ),
        ),
        4 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '返回结果的数目。默认值为10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '500',
            'minimum' => '1',
            'example' => '10',
          ),
        ),
        5 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '返回结果的起始位置。默认值为1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '500',
            'exclusiveMaximum' => true,
            'minimum' => '1',
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'B3137727-7D6E-488C-BA21-0E034C38A879',
              ),
              'Data' => 
              array (
                'description' => '批量任务信息返回。',
                'type' => 'object',
                'properties' => 
                array (
                  'Increments' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Instance' => 
                      array (
                        'description' => '批量任务集合。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '批量任务详情。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Msg' => 
                            array (
                              'description' => '错误信息。',
                              'type' => 'string',
                              'example' => 'sucess',
                            ),
                            'Status' => 
                            array (
                              'description' => '任务状态。
- PROCESSING：任务处理中。
- FAIL：任务执行失败。
- SUCCESS：任务已完成。',
                              'type' => 'string',
                              'example' => 'SUCCESS',
                            ),
                            'UtcModified' => 
                            array (
                              'description' => '任务更新时间。单位毫秒。',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '1629095760000',
                            ),
                            'BucketName' => 
                            array (
                              'description' => 'Bucket名称。',
                              'type' => 'string',
                              'example' => 'bucketName',
                            ),
                            'UtcCreate' => 
                            array (
                              'description' => '任务创建时间。单位毫秒。',
                              'type' => 'string',
                              'example' => '1629095713000',
                            ),
                            'Code' => 
                            array (
                              'description' => '错误码。

- 0：成功。
- 非0：失败。',
                              'type' => 'string',
                              'example' => '0',
                            ),
                            'Path' => 
                            array (
                              'description' => 'OSS中increment.meta文件的绝对路径。必须"/"开头，非"/"结尾。',
                              'type' => 'string',
                              'example' => '/xx/xx',
                            ),
                            'ErrorUrl' => 
                            array (
                              'description' => '结果下载地址。有效期两个小时。',
                              'type' => 'string',
                              'example' => 'https://imagesearchname.oss-cn-shanghai.aliyuncs.com/xxx',
                            ),
                            'Id' => 
                            array (
                              'description' => '任务ID。',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '500',
                            ),
                            'CallbackAddress' => 
                            array (
                              'description' => '任务回调地址。',
                              'type' => 'string',
                              'example' => 'http://xxxxx',
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  'PageSize' => 
                  array (
                    'description' => '查询结果数目。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'PageNumber' => 
                  array (
                    'description' => '结果当前页数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'TotalCount' => 
                  array (
                    'description' => '任务总数量。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '15',
                  ),
                ),
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
            'errorCode' => 'InvalidInstance',
            'errorMessage' => 'The specified instance name is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'Console.BadRequest',
            'errorMessage' => 'The request has invalid parameters.',
          ),
          2 => 
          array (
            'errorCode' => 'Console.InstanceNotFound',
            'errorMessage' => 'The specified ImageSearch instance is not found.',
          ),
        ),
        401 => 
        array (
          0 => 
          array (
            'errorCode' => 'Console.LoginError',
            'errorMessage' => 'Check login failed.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Console.NoPermission',
            'errorMessage' => 'You are not authorized to this operation.',
          ),
        ),
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'Console.InstanceStatusError',
            'errorMessage' => 'Current Instance status not supported this opreate.',
          ),
          1 => 
          array (
            'errorCode' => 'Console.OrderStatusError',
            'errorMessage' => 'Current Order status not supported this opreate.',
          ),
          2 => 
          array (
            'errorCode' => 'Console.IncrementStatusError',
            'errorMessage' => 'Current Increment status not supported this opreate.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'Console.InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
          1 => 
          array (
            'errorCode' => 'Console.CallServiceError',
            'errorMessage' => 'Fail to call service.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"B3137727-7D6E-488C-BA21-0E034C38A879\\",\\n  \\"Data\\": {\\n    \\"Increments\\": {\\n      \\"Instance\\": [\\n        {\\n          \\"Msg\\": \\"sucess\\",\\n          \\"Status\\": \\"SUCCESS\\",\\n          \\"UtcModified\\": 1629095760000,\\n          \\"BucketName\\": \\"bucketName\\",\\n          \\"UtcCreate\\": \\"1629095713000\\",\\n          \\"Code\\": \\"0\\",\\n          \\"Path\\": \\"/xx/xx\\",\\n          \\"ErrorUrl\\": \\"https://imagesearchname.oss-cn-shanghai.aliyuncs.com/xxx\\",\\n          \\"Id\\": 500,\\n          \\"CallbackAddress\\": \\"http://xxxxx\\"\\n        }\\n      ]\\n    },\\n    \\"PageSize\\": 10,\\n    \\"PageNumber\\": 1,\\n    \\"TotalCount\\": 15\\n  }\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '查询批量任务',
      'description' => '## 使用说明
本接口用于向图像搜索实例中查询批量任务。
> 如需了解更多产品详情和获取技术支持，请单击[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)或通过钉钉群（35035130）联系我们。

## QPS限制
查询操作默认的并发量为1，也就是每秒钟最多处理1个请求。',
      'extraInfo' => '## 错误码
请参见[错误码](~~66619~~)。',
    ),
    'UpdateImage' => 
    array (
      'summary' => '本文为您介绍UpdateImage接口的语法及示例，用于向图像搜索实例中修改图片信息。',
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
          'name' => 'ProductId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '商品ID，最多支持512个字符。

>一个商品可以有多张图片。根据实际情况自定义参数值。比如：上衣001号、裤子002号等。',
            'type' => 'string',
            'required' => true,
            'example' => '2092061_1',
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
            'required' => true,
            'example' => 'namexxx.jpg',
          ),
        ),
        3 => 
        array (
          'name' => 'CustomContent',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '用户自定义的内容，最多支持4096个字符。
>调用"[根据图片查询图片](https://help.aliyun.com/document_detail/202282.html)"接口时会返回该字段。例如可添加图片的描述等文本。',
            'type' => 'string',
            'required' => false,
            'example' => 'zidingyi',
          ),
        ),
        4 => 
        array (
          'name' => 'IntAttr',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '整数类型属性，可用于查询时过滤，查询时会返回该字段。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '2',
          ),
        ),
        5 => 
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
        6 => 
        array (
          'name' => 'IntAttr2',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '整数类型属性，可用于查询时过滤，查询时会返回该字段。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '20',
          ),
        ),
        7 => 
        array (
          'name' => 'StrAttr2',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '字符串类型属性，最多支持128个字符。可用于查询时过滤，查询时会返回该字段。',
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
            'title' => 'Schema of Response',
            'description' => '返回对象。',
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'title' => 'Id of the request',
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
            'errorCode' => 'InstanceStatusError',
            'errorMessage' => 'Your instance is unavailable.',
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
            'errorMessage' => 'The content of an image is not specified in the HTTP POST body.',
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
            'errorMessage' => 'The specified parameter s is inavlid.',
          ),
          14 => 
          array (
            'errorCode' => 'InvalidNumParameter',
            'errorMessage' => 'The specified parameter n is invalid.',
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
          34 => 
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
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"E0845DE6-52AF-4B50-9F15-51ED4044E6AB\\",\\n  \\"Code\\": 0,\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '修改图片',
      'description' => '## 使用说明
本接口用于向图像搜索实例中根据商品ID和图片名称去修改图片信息。
> - 实例有创建时间要求。
<props="china">
- 上海、杭州区域2021年6月份后创建的实例可用。其他区域正常使用。
</props>
<props="intl">
- 新加坡区域2021年12月份后创建的实例可用。其他区域暂不可用。
</props>
- 如需了解更多产品详情和获取技术支持，请单击[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)或通过钉钉群（35035130）联系我们。


## QPS限制
修改操作默认的并发量为20，也就是每秒钟最多处理20个请求。


',
      'extraInfo' => '## 错误码
请参见[错误码](~~66619~~)。',
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
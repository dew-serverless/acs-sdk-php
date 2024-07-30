<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'ImageSearch',
        'version' => '2020-12-14',
    ],
    'directories' => [
        [
            'id' => 64363,
            'title' => '管理',
            'type' => 'directory',
            'children' => [
                'AddImage',
                'DeleteImage',
            ],
        ],
        [
            'id' => 64366,
            'title' => '搜索',
            'type' => 'directory',
            'children' => [
                'SearchImageByName',
                'SearchImageByPic',
            ],
        ],
        [
            'id' => 0,
            'title' => '其它',
            'type' => 'directory',
            'children' => [
                'Detail',
                'DumpMeta',
                'DumpMetaList',
                'IncreaseInstance',
                'IncreaseList',
                'UpdateImage',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'AddImage' => [
            'summary' => '本文为您介绍AddImage接口的语法及示例，用于向图像搜索实例中添加图片信息。',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '图搜实例名称。最多支持20个字符。'."\n"
                            .'如果已经购买图搜实例可登录[图像搜索管控台](https://imagesearch.console.aliyun.com/)查看。'."\n"
                            .'如果没有购买图搜实例可参考[开通服务](~~179178~~)和[创建实例](~~66569~~)。'."\n"
                            .'>这里的实例名称并非实例ID，使用时请区分。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'demoinstance1',
                    ],
                ],
                [
                    'name' => 'ProductId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '商品ID，最多支持512个字符。'."\n"
                            ."\n"
                            .'>一个商品可以有多张图片。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '2092061_1',
                    ],
                ],
                [
                    'name' => 'PicName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => ' 图片名称，最多支持512个字符。'."\n"
                            .'> - ProductId和PicName唯一确定一张图片。'."\n"
                            .'- 如果多次添加图片具有相同的ProductId和PicName，以最后一次添加为准，前面添加的图片将被覆盖。'."\n",
                        'type' => 'string',
                        'required' => true,
                        'example' => '2092061_1.jpg',
                    ],
                ],
                [
                    'name' => 'PicContent',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '图片内容，Base64编码。'."\n"
                            .' - 图片大小要求不超过4 MB。'."\n"
                            .' - 图片格式：PNG、JPG、JPEG、BMP、GIF、WEBP、TIFF、PPM。'."\n"
                            .' - 传输等待时间不超过5秒。'."\n"
                            .'<props="china">'."\n"
                            .' - 服务类型为商品图片搜索、通用图片搜索、家具家居图片搜索和工业五金图片搜索时，图片长和宽像素要求大于等于100PX且小于等于4096PX。'."\n"
                            .' - 服务类型为商标图片搜索时，图片长和宽像素要求大于等于200PX且小于4096PX。'."\n"
                            .' - 服务类型为布料图片搜索时，图片长和宽像素要求大于等于448PX且小于等于4096PX。'."\n"
                            .'</props>'."\n"
                            .'<props="intl">'."\n"
                            .' - 服务类型为商品图片搜索和通用图片搜索时，图片长和宽像素要求大于等于100PX且小于等于4096PX。'."\n"
                            .'</props>'."\n"
                            .'- 图片中不能包含旋转信息。'."\n"
                            .'> - 若您使用SDK方式调用该接口，无需填写**PicContent**字段，SDK已将本字段封装并自动转化为Base64编码。SDK使用URL方式请参见[JAVA SDK](~~179188~~)。'."\n"
                            .'- 若您使用阿里云OpenAPI平台调用该接口，仅支持选择**2019-03-25**版本，其他版本不支持通过**PicContent**字段转化为Base64编码。'."\n"
                            ."\n",
                        'type' => 'string',
                        'required' => true,
                        'example' => 'AAAANSUhEUgAAAPcAAAEVCAYAAAA8d3NuAAAAAXNSR0IArs......RK5CYII=',
                        'isFileTransferUrl' => true,
                    ],
                ],
                [
                    'name' => 'CategoryId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '图片类目。具体请参考[类目参考](~~179184~~)。'."\n"
                            .'> - 对于商品搜索，若设置类目，则以设置的为准；若不设置类目，将由系统进行类目预测，预测的类目结果可在Response中获取 。'."\n"
                            .'<props="china">'."\n"
                            .'- 对于布料、商标、通用、家具家居和工业五金搜索，不论是否设置类目，系统会将类目设置为88888888。'."\n"
                            .'</props>'."\n"
                            .'- 对于通用搜索，不论是否设置类目，系统会将类目设置为88888888。'."\n"
                            ."\n",
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '88888888',
                    ],
                ],
                [
                    'name' => 'Crop',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否需要进行主体识别。默认true。'."\n"
                            .' - 为true：由系统进行主体识别，以识别的主体进行搜索，主体识别结果可在Response中获取。'."\n"
                            .'- 为false：则不进行主体识别，以整张图进行搜索。'."\n"
                            ."\n"
                            .'<props="china">对于布料图片搜索，此参数会被忽略，系统会以整张图进行搜索。</props>'."\n"
                            ."\n\n",
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'Region',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '图片的主体区域，格式为`x1,x2,y1,y2`, 其中`x1,y1 `是左上角的点，`x2,y2`是右下角的点。'."\n"
                            .'> - 若用户设置了Region，则不论Crop参数为何值，都将以用户输入Region进行搜索。'."\n"
                            .'<props="china">'."\n"
                            .'- 对于布料图片搜索，此参数会被忽略，系统会以整张图进行搜索。'."\n"
                            .'</props>'."\n"
                            .'- Region参数没有单位，是参考使用图片的长宽PX像素尺寸标记的结果，如果图片缩放对应Region参数值也要等比例缩放。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '280,486,232,351',
                    ],
                ],
                [
                    'name' => 'CustomContent',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '用户自定义的内容，最多支持4096个字符。'."\n"
                            .'>查询时会返回该字段。例如可添加图片的描述等文本。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zidingyi',
                    ],
                ],
                [
                    'name' => 'IntAttr',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '整数类型属性，可用于查询时过滤，查询时会返回该字段。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '22',
                    ],
                ],
                [
                    'name' => 'StrAttr',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '字符串类型属性，最多支持128个字符。可用于查询时过滤，查询时会返回该字段。'."\n"
                            .'> 不支持特殊字符比如：\\¥$&%',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ss',
                    ],
                ],
                [
                    'name' => 'IntAttr2',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '整数类型属性，可用于查询时过滤，查询时会返回该字段。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '22',
                    ],
                ],
                [
                    'name' => 'StrAttr2',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '字符串类型属性，最多支持128个字符。可用于查询时过滤，查询时会返回该字段。'."\n"
                            .'> 不支持特殊字符比如：\\¥$&%',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ss',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '参数返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '错误信息。'."\n"
                                    .'> 成功请求不返回数据，失败请求返回错误信息。',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'E0845DE6-52AF-4B50-9F15-51ED4044E6AB',
                            ],
                            'Code' => [
                                'description' => '错误码。'."\n"
                                    ."\n"
                                    .'- 0：成功。'."\n"
                                    .'- 非0：失败。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                            ],
                            'PicInfo' => [
                                'description' => '类目预测、主体识别结果。',
                                'type' => 'object',
                                'properties' => [
                                    'Region' => [
                                        'description' => '主体识别结果。图片的主体区域，格式为`x1,x2,y1,y2`，其中`x1,y1`是左上角的点，`x2,y2`是右下角的点。若用户请求中指定了主体区域，则以请求中为准。',
                                        'type' => 'string',
                                        'example' => '94,691,206,650',
                                    ],
                                    'CategoryId' => [
                                        'description' => '类目预测结果。若用户请求中指定了类目，则以请求中为准。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '88888888',
                                    ],
                                ],
                            ],
                            'Success' => [
                                'description' => '请求是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'BadRequest',
                        'errorMessage' => 'The request has invalid parameters.',
                    ],
                    [
                        'errorCode' => 'InstanceStatusError',
                        'errorMessage' => 'Your instance is unavailable.',
                    ],
                    [
                        'errorCode' => 'InvalidInstance',
                        'errorMessage' => 'The specified instance name is invalid.',
                    ],
                    [
                        'errorCode' => 'NoCaretSeperator',
                        'errorMessage' => 'The body content is missing the ^ separator.',
                    ],
                    [
                        'errorCode' => 'EmptyMeta',
                        'errorMessage' => 'The body content has an empty meta field.',
                    ],
                    [
                        'errorCode' => 'InvalidMetaItem',
                        'errorMessage' => 'The meta field is invalid.',
                    ],
                    [
                        'errorCode' => 'NoPicList',
                        'errorMessage' => 'The body content is missing the pic_list parameter.',
                    ],
                    [
                        'errorCode' => 'NoSpecifiedPic',
                        'errorMessage' => 'The content of an image is not specified in the HTTP POST body.',
                    ],
                    [
                        'errorCode' => 'NoSpecifiedSearchPic',
                        'errorMessage' => 'The search image is not specified.',
                    ],
                    [
                        'errorCode' => 'InvalidCategory',
                        'errorMessage' => 'The specified category is invalid.',
                    ],
                    [
                        'errorCode' => 'OverflowMaxResultNum',
                        'errorMessage' => 'The specified number of total results exceeds the maximum of 500.',
                    ],
                    [
                        'errorCode' => 'OverflowMaxReturnNum',
                        'errorMessage' => 'The specified number of results for each request exceeds the maximum of 100.',
                    ],
                    [
                        'errorCode' => 'InvalidStartParameter',
                        'errorMessage' => 'The specified parameter s is inavlid.',
                    ],
                    [
                        'errorCode' => 'InvalidNumParameter',
                        'errorMessage' => 'The specified parameter n is invalid.',
                    ],
                    [
                        'errorCode' => 'NoSpecifiedAddPic',
                        'errorMessage' => 'The image to insert is not specified.',
                    ],
                    [
                        'errorCode' => 'NoSpecifiedItemId',
                        'errorMessage' => 'The item_id parameter is not specified.',
                    ],
                    [
                        'errorCode' => 'InvalidIntAttr',
                        'errorMessage' => 'The specified int_attr field is invalid.',
                    ],
                    [
                        'errorCode' => 'UnsupportedPicFormat',
                        'errorMessage' => 'The specified image format is invalid.',
                    ],
                    [
                        'errorCode' => 'InvalidFilterClause',
                        'errorMessage' => 'The specified filtering condition is invalid.',
                    ],
                    [
                        'errorCode' => 'InstanceOverQuota',
                        'errorMessage' => 'The number of items exceeds the limit.',
                    ],
                    [
                        'errorCode' => 'IncorrectOrientation',
                        'errorMessage' => 'The image contains incorrect rotation flags in the meta data.',
                    ],
                    [
                        'errorCode' => 'UnsupportedPicPixels',
                        'errorMessage' => 'The specified pixels is not supported.',
                    ],
                    [
                        'errorCode' => 'SearchTimeout',
                        'errorMessage' => 'The request is timed out.',
                    ],
                    [
                        'errorCode' => 'PicNotExist',
                        'errorMessage' => 'The search picture does not exist.',
                    ],
                    [
                        'errorCode' => 'NoSpecifiedProductId',
                        'errorMessage' => 'The parameter ProductId no specified.',
                    ],
                    [
                        'errorCode' => 'NoSpecifiedPicName',
                        'errorMessage' => 'The parameter PicName no specified.',
                    ],
                    [
                        'errorCode' => 'NoSpecifiedPicContent',
                        'errorMessage' => 'The parameter PicContent no specified.',
                    ],
                    [
                        'errorCode' => 'InvalidType',
                        'errorMessage' => 'The specified parameter Type is not valid.',
                    ],
                    [
                        'errorCode' => 'InvalidProductId',
                        'errorMessage' => 'The specified parameter ProductId is not valid.',
                    ],
                    [
                        'errorCode' => 'InvalidPicName',
                        'errorMessage' => 'The specified parameter PicName is not valid.',
                    ],
                    [
                        'errorCode' => 'InvalidStrAttr',
                        'errorMessage' => 'The specified parameter StrAttr is not valid.',
                    ],
                    [
                        'errorCode' => 'InvalidCustomContent',
                        'errorMessage' => 'The specified parameter CustomContent is not valid.',
                    ],
                    [
                        'errorCode' => 'InvalidPicContent',
                        'errorMessage' => 'The specified parameter PicContent length greater than 4 * 1024 * 1024.',
                    ],
                    [
                        'errorCode' => 'TimeoutForTransferImage',
                        'errorMessage' => 'Timeout after 5 seconds waiting for images transfer to complete.',
                    ],
                    [
                        'errorCode' => 'InvalidPicUrl',
                        'errorMessage' => 'The search picture does not exist at the specific url.',
                    ],
                    [
                        'errorCode' => 'InvalidInstanceName',
                        'errorMessage' => 'The parameter instanceName is not specified.',
                    ],
                    [
                        'errorCode' => 'InvalidRequestId',
                        'errorMessage' => 'The parameter requestId is not specified.',
                    ],
                    [
                        'errorCode' => 'InvalidRequestIdTooLarge',
                        'errorMessage' => 'The parameter requestId is too large.',
                    ],
                    [
                        'errorCode' => 'InvalidRegion',
                        'errorMessage' => 'The specific region is illegal.',
                    ],
                    [
                        'errorCode' => 'RegionError',
                        'errorMessage' => 'region.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'NoPermission',
                        'errorMessage' => 'You are not authorized to perform this operation.',
                    ],
                    [
                        'errorCode' => 'DeniedRequest',
                        'errorMessage' => 'Your request was denied due to instance flow control.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'UnknownException',
                        'errorMessage' => 'An internal server error occurred.',
                    ],
                    [
                        'errorCode' => 'NetworkException',
                        'errorMessage' => 'A network error occurred.',
                    ],
                    [
                        'errorCode' => 'RequestTimeout',
                        'errorMessage' => '​The request is timeout.',
                    ],
                    [
                        'errorCode' => 'UnsupportedInstanceType',
                        'errorMessage' => 'The instance type is not supported.',
                    ],
                    [
                        'errorCode' => 'UnsupportedOperationType',
                        'errorMessage' => 'The specified action is not supported.',
                    ],
                    [
                        'errorCode' => 'ExtractFeatureTimeout',
                        'errorMessage' => 'The request was timed out while extracting features.',
                    ],
                    [
                        'errorCode' => 'AccessEngineFailed',
                        'errorMessage' => 'An error occurred while accessing the search engine.',
                    ],
                    [
                        'errorCode' => 'InternalOssError',
                        'errorMessage' => 'An internal OAS error occurred.',
                    ],
                    [
                        'errorCode' => 'InternalSwiftError',
                        'errorMessage' => 'An internal SWIFT error occurred.',
                    ],
                    [
                        'errorCode' => 'InternalTableStoreError',
                        'errorMessage' => 'An internal Table Store error occurred.',
                    ],
                    [
                        'errorCode' => 'PictureError',
                        'errorMessage' => '[download] Img Download Failed.',
                    ],
                    [
                        'errorCode' => 'ConnectionDVException',
                        'errorMessage' => 'Failed to obtain collection.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"E0845DE6-52AF-4B50-9F15-51ED4044E6AB\\",\\n  \\"Code\\": 0,\\n  \\"PicInfo\\": {\\n    \\"Region\\": \\"94,691,206,650\\",\\n    \\"CategoryId\\": 88888888\\n  },\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
            'title' => '添加图片数据',
            'description' => '## 使用说明'."\n"
                .'本接口用于向图像搜索实例中添加图片信息。'."\n"
                .'> 如需了解更多产品详情和获取技术支持，请单击[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)或通过钉钉群（35035130）联系我们。'."\n"
                ."\n"
                .'## QPS限制'."\n"
                .'10W图片容量的实例默认的并发量为1，也就是每秒钟最多处理1个图片新增请求。'."\n"
                .'其他图片容量的实例默认的并发量为5，也就是每秒钟最多处理5个图片新增请求。',
            'extraInfo' => '## 错误码'."\n"
                .'请参见[错误码](~~66619~~)。',
        ],
        'DeleteImage' => [
            'summary' => '本文为您介绍DeleteImage接口的语法及示例，用于向图像搜索实例中删除图片信息。',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '图搜实例名称。最多支持20个字符。'."\n"
                            .'如果已经购买图搜实例可登录[图像搜索管控台](https://imagesearch.console.aliyun.com/)查看。'."\n"
                            .'如果没有购买图搜实例可参考[开通服务](~~179178~~)和[创建实例](~~66569~~)。'."\n"
                            .'>这里的实例名称并非实例ID，且实例名称同区域内唯一不可重复，使用时请区分。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'demoinstance1',
                    ],
                ],
                [
                    'name' => 'ProductId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '商品ID。'."\n"
                            ."\n"
                            .'> 一个商品可以有多张图片。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '2092061_1',
                    ],
                ],
                [
                    'name' => 'PicName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '图片名称。'."\n"
                            .' - 如果不指定本参数，则删除ProductId下所有图片。'."\n"
                            .' - 如果指定本参数，则删除ProductId+PicName指定的图片。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2092061_1.jpg',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回对象。',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0703956F-9BCC-48FA-99F7-96C0BF449C69',
                            ],
                            'Code' => [
                                'description' => '错误码。'."\n"
                                    .'- 0：成功。'."\n"
                                    .'- 非0：失败。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'description' => '删除结果返回。',
                                'type' => 'object',
                                'properties' => [
                                    'PicNames' => [
                                        'description' => '删除的PicName。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '删除的PicName。',
                                            'type' => 'string',
                                            'example' => 'xxx.jpg',
                                        ],
                                        'example' => '5555.jpg',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'BadRequest',
                        'errorMessage' => 'The request has invalid parameters.',
                    ],
                    [
                        'errorCode' => 'InstanceStatusError',
                        'errorMessage' => 'Your instance is unavailable.',
                    ],
                    [
                        'errorCode' => 'InvalidInstance',
                        'errorMessage' => 'The specified instance name is invalid.',
                    ],
                    [
                        'errorCode' => 'NoCaretSeperator',
                        'errorMessage' => 'The body content is missing the ^ separator.',
                    ],
                    [
                        'errorCode' => 'EmptyMeta',
                        'errorMessage' => 'The body content has an empty meta field.',
                    ],
                    [
                        'errorCode' => 'InvalidMetaItem',
                        'errorMessage' => 'The meta field is invalid.',
                    ],
                    [
                        'errorCode' => 'InvalidPicList',
                        'errorMessage' => 'The specified pic_list parameter is invalid.',
                    ],
                    [
                        'errorCode' => 'NoSpecifiedPic',
                        'errorMessage' => 'The content of an image is not specified in the HTTP POST body.',
                    ],
                    [
                        'errorCode' => 'NoSpecifiedSearchPic',
                        'errorMessage' => 'The search image is not specified.',
                    ],
                    [
                        'errorCode' => 'InvalidCategory',
                        'errorMessage' => 'The specified category is invalid.',
                    ],
                    [
                        'errorCode' => 'OverflowMaxResultNum',
                        'errorMessage' => 'The specified number of total results exceeds the maximum of 500.',
                    ],
                    [
                        'errorCode' => 'OverflowMaxReturnNum',
                        'errorMessage' => 'The specified number of results for each request exceeds the maximum of 100.',
                    ],
                    [
                        'errorCode' => 'InvalidStartParameter',
                        'errorMessage' => 'The specified parameter s is inavlid.',
                    ],
                    [
                        'errorCode' => 'InvalidNumParameter',
                        'errorMessage' => 'The specified parameter n is invalid.',
                    ],
                    [
                        'errorCode' => 'NoSpecifiedAddPic',
                        'errorMessage' => 'The image to insert is not specified.',
                    ],
                    [
                        'errorCode' => 'NoSpecifiedItemId',
                        'errorMessage' => 'The item_id parameter is not specified.',
                    ],
                    [
                        'errorCode' => 'InvalidIntAttr',
                        'errorMessage' => 'The specified int_attr field is invalid.',
                    ],
                    [
                        'errorCode' => 'UnsupportedPicFormat',
                        'errorMessage' => 'The specified image format is invalid.',
                    ],
                    [
                        'errorCode' => 'InvalidFilterClause',
                        'errorMessage' => 'The specified filtering condition is invalid.',
                    ],
                    [
                        'errorCode' => 'InstanceOverQuota',
                        'errorMessage' => 'The number of items exceeds the limit.',
                    ],
                    [
                        'errorCode' => 'IncorrectOrientation',
                        'errorMessage' => 'The image contains incorrect rotation flags in the meta data.',
                    ],
                    [
                        'errorCode' => 'UnsupportedPicPixels',
                        'errorMessage' => 'The specified pixels is not supported.',
                    ],
                    [
                        'errorCode' => 'SearchTimeout',
                        'errorMessage' => 'The request is timed out.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'NoPermission',
                        'errorMessage' => 'You are not authorized to perform this operation.',
                    ],
                    [
                        'errorCode' => 'DeniedRequest',
                        'errorMessage' => 'Your request was denied due to instance flow control.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'UnknownlException',
                        'errorMessage' => 'An internal server error occurred.',
                    ],
                    [
                        'errorCode' => 'UnknownException',
                        'errorMessage' => 'An internal server error occurred.',
                    ],
                    [
                        'errorCode' => 'NetworkException',
                        'errorMessage' => 'A network error occurred.',
                    ],
                    [
                        'errorCode' => 'RequestTimeout',
                        'errorMessage' => '​The request is timeout.',
                    ],
                    [
                        'errorCode' => 'UnsupportedInstanceType',
                        'errorMessage' => 'The instance type is not supported.',
                    ],
                    [
                        'errorCode' => 'UnsupportedOperationType',
                        'errorMessage' => 'The specified action is not supported.',
                    ],
                    [
                        'errorCode' => 'ExtractFeatureTimeout',
                        'errorMessage' => 'The request was timed out while extracting features.',
                    ],
                    [
                        'errorCode' => 'AccessEngineFailed',
                        'errorMessage' => 'An error occurred while accessing the search engine.',
                    ],
                    [
                        'errorCode' => 'InternalOssError',
                        'errorMessage' => 'An internal OAS error occurred.',
                    ],
                    [
                        'errorCode' => 'InternalSwiftError',
                        'errorMessage' => 'An internal SWIFT error occurred.',
                    ],
                    [
                        'errorCode' => 'InternalTableStoreError',
                        'errorMessage' => 'An internal Table Store error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"0703956F-9BCC-48FA-99F7-96C0BF449C69\\",\\n  \\"Code\\": 0,\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"PicNames\\": [\\n      \\"xxx.jpg\\"\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
            'title' => '删除图片',
            'description' => '## 使用说明'."\n"
                .'本接口用于向图像搜索实例中删除图片信息。'."\n"
                .'>- 如果指定图片在图像搜索实例中不存在，该接口依然会返回成功。不能用返回结果来判断图片是否存在。'."\n"
                .'- 如需了解更多产品详情和获取技术支持，请单击[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)或通过钉钉群（35035130）联系我们。'."\n"
                ."\n"
                .'## QPS限制'."\n"
                .'删除操作默认的并发量为20，也就是每秒钟最多处理20个删除请求。',
            'extraInfo' => '## 错误码'."\n"
                .'请参见[错误码](~~66619~~)。',
        ],
        'SearchImageByName' => [
            'summary' => '本文为您介绍SearchByName接口的语法及示例，用于根据名称查询图像搜索实例中的图片信息。',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '图搜实例名称。最多支持20个字符。'."\n"
                            .'如果已经购买图搜实例可登录[图像搜索管控台](https://imagesearch.console.aliyun.com/)查看。'."\n"
                            .'如果没有购买图搜实例可参考[开通服务](~~179178~~)和[创建实例](~~66569~~)。'."\n"
                            .'>这里的实例名称并非实例ID，使用时请区分。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'demoinstance1',
                    ],
                ],
                [
                    'name' => 'ProductId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '商品ID。'."\n",
                        'type' => 'string',
                        'required' => true,
                        'example' => '2092061_1',
                        'isFileTransferUrl' => false,
                    ],
                ],
                [
                    'name' => 'PicName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '图片名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '2092061_1.jpg',
                    ],
                ],
                [
                    'name' => 'CategoryId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '商品类目。具体请参见[类目参考](~~179184~~)。'."\n"
                            .' - 对于商品搜索，如果设置类目，则以设置的为准；如果不设置类目，则由系统进行类目预测，预测的类目结果可以在Response中获取 。'."\n"
                            .'<props="china">'."\n"
                            .' - 对于布料、商标、通用、家具家居和工业五金搜索，不论是否设置类目，系统会将类目设置为88888888。'."\n"
                            .'</props>'."\n"
                            .'<props="intl">'."\n"
                            .'- 对于通用搜索，不论是否设置类目，系统会将类目设置为88888888。</props>'."\n"
                            ."\n",
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '88888888',
                        'minimum' => '0',
                        'example' => '88888888',
                        'enum' => [
                            '0',
                            '1',
                            '2',
                            '3',
                            '4',
                            '5',
                            '6',
                            '7',
                            '8',
                            '9',
                            '20',
                            '21',
                            '22',
                            '88888888',
                        ],
                    ],
                ],
                [
                    'name' => 'Num',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '返回结果的数目。取值范围：1~100。默认值为10。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '100',
                        'minimum' => '1',
                        'example' => '10',
                        'default' => '10',
                    ],
                ],
                [
                    'name' => 'Start',
                    'in' => 'formData',
                    'schema' => [
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
                    ],
                ],
                [
                    'name' => 'Filter',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '过滤条件。int_attr支持的操作符有大于号(>)、大于等于号(>=)、小于号(<)、小于等于号(<=)、等于号(=)。str_attr支持的操作符有等于号(=)和不等号(!=)，多个条件之支持AND和OR进行连接。'."\n"
                            .'例如：'."\n"
                            .'- int_attr>=100。'."\n"
                            .'- str_attr!="value1"。'."\n"
                            .'- int_attr=1000 AND str_attr="value1"。'."\n"
                            ."\n"
                            .'>最多支持256个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'int_attr>=100',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '结果返回。',
                        'type' => 'object',
                        'properties' => [
                            'Msg' => [
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'Head' => [
                                'description' => '搜索结果概述信息。',
                                'type' => 'object',
                                'properties' => [
                                    'DocsFound' => [
                                        'description' => '返回结果数目。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '10',
                                    ],
                                    'DocsReturn' => [
                                        'description' => '实例中命中结果数目。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '10000',
                                    ],
                                    'SearchTime' => [
                                        'description' => '搜索耗时，单位毫秒。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '95',
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '36C43E96-8F68-44AA-B1AF-B1F7AB94A6C1',
                            ],
                            'Auctions' => [
                                'description' => '所有返回的商品描述信息。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '图片参数。',
                                    'type' => 'object',
                                    'properties' => [
                                        'ProductId' => [
                                            'description' => '商品ID。',
                                            'type' => 'string',
                                            'example' => '2092061_1',
                                        ],
                                        'PicName' => [
                                            'description' => '图片名称。',
                                            'type' => 'string',
                                            'example' => '2092061_1.jpg',
                                        ],
                                        'CategoryId' => [
                                            'description' => '图片类目。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '20',
                                        ],
                                        'SortExprValues' => [
                                            'description' => '系统打分信息。'."\n"
                                                .'> - 当前字段已弃用，建议使用Score。'."\n"
                                                .'- SortExprValues是一个分号分隔的二元组，第一个值表示图片的相关性分数，值越大表示和查询的图片相关性越高。由于算法模型不同。'."\n"
                                                .'- 当类目为0~2时，SortExprValues值域范围：0～7.33136443711219e+24。'."\n"
                                                .'- 类目为其他值时，SortExprValues值域范围：0～5.37633353624177e+24。当两个图片完全一样时，这个分值最大。',
                                            'type' => 'string',
                                            'example' => '5.37633353624177e+24;0',
                                        ],
                                        'CustomContent' => [
                                            'description' => '用户自定义的内容。',
                                            'type' => 'string',
                                            'example' => 'zidingyi',
                                        ],
                                        'Score' => [
                                            'description' => '图片相似打分。取值范围：0~1。'."\n"
                                                .'> 需要版本升级至V3.1.1方可使用。',
                                            'type' => 'number',
                                            'format' => 'float',
                                            'example' => '1',
                                        ],
                                        'IntAttr' => [
                                            'description' => '整数类型属性。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '2',
                                        ],
                                        'IntAttr2' => [
                                            'description' => '整数类型属性。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '20',
                                        ],
                                        'StrAttr' => [
                                            'description' => '字符串类型属性。',
                                            'type' => 'string',
                                            'example' => 'ss',
                                        ],
                                        'StrAttr2' => [
                                            'description' => '字符串类型属性。',
                                            'type' => 'string',
                                            'example' => 'test',
                                        ],
                                    ],
                                ],
                            ],
                            'Code' => [
                                'description' => '错误码。'."\n"
                                    .'- 0：成功。'."\n"
                                    .'- 非0：失败。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                            ],
                            'PicInfo' => [
                                'description' => '类目预测、主体识别结果等信息。',
                                'type' => 'object',
                                'properties' => [
                                    'Region' => [
                                        'description' => '    主体识别结果。'."\n"
                                            .'图片的主体区域，格式为x1,x2,y1,y2，其中 x1,y1 是左上角的点，x2，y2是右下角的点。若用户请求中指定了主体区域，则以请求中为准。',
                                        'type' => 'string',
                                        'example' => '280,486,232,351',
                                    ],
                                    'CategoryId' => [
                                        'description' => '    类目预测结果。'."\n"
                                            .'若用户请求中指定了类目，则以请求中为准。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '20',
                                    ],
                                    'MultiRegion' => [
                                        'description' => '主体识别集合。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '主体集合。',
                                            'type' => 'object',
                                            'properties' => [
                                                'Region' => [
                                                    'description' => '    主体识别结果。'."\n"
                                                        .'图片的主体区域，格式为x1,x2,y1,y2，其中 x1,y1 是左上角的点，x2，y2是右下角的点。若用户请求中指定了主体区域，则以请求中为准。',
                                                    'type' => 'string',
                                                    'example' => '280,486,232,351',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'AllCategories' => [
                                        'description' => '系统支持的所有类目信息。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '类目信息。',
                                            'type' => 'object',
                                            'properties' => [
                                                'Name' => [
                                                    'description' => ' 类目名称。',
                                                    'type' => 'string',
                                                    'example' => '88888888',
                                                ],
                                                'Id' => [
                                                    'description' => '类目ID。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => 'other',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'Success' => [
                                'description' => '请求是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'BadRequest',
                        'errorMessage' => 'The request has invalid parameters.',
                    ],
                    [
                        'errorCode' => 'InstanceStatusError',
                        'errorMessage' => 'Your instance is unavailable.',
                    ],
                    [
                        'errorCode' => 'TimeoutForTransferImage',
                        'errorMessage' => 'Timeout after 5 seconds waiting for images transfer to complete.',
                    ],
                    [
                        'errorCode' => 'InvalidInstance',
                        'errorMessage' => 'The specified instance name is invalid.',
                    ],
                    [
                        'errorCode' => 'NoCaretSeperator',
                        'errorMessage' => 'The body content is missing the ^ separator.',
                    ],
                    [
                        'errorCode' => 'EmptyMeta',
                        'errorMessage' => 'The body content has an empty meta field.',
                    ],
                    [
                        'errorCode' => 'InvalidMetaItem',
                        'errorMessage' => 'The meta field is invalid.',
                    ],
                    [
                        'errorCode' => 'NoPicList',
                        'errorMessage' => 'The body content is missing the pic_list parameter.',
                    ],
                    [
                        'errorCode' => 'InvalidPicList',
                        'errorMessage' => 'The specified pic_list parameter is invalid.',
                    ],
                    [
                        'errorCode' => 'NoSpecifiedPic',
                        'errorMessage' => 'he content of an image is not specified in the HTTP POST body.',
                    ],
                    [
                        'errorCode' => 'NoSpecifiedSearchPic',
                        'errorMessage' => 'The search image is not specified.',
                    ],
                    [
                        'errorCode' => 'InvalidCategory',
                        'errorMessage' => 'The specified category is invalid.',
                    ],
                    [
                        'errorCode' => 'OverflowMaxResultNum',
                        'errorMessage' => 'The specified number of total results exceeds the maximum of 500.',
                    ],
                    [
                        'errorCode' => 'OverflowMaxReturnNum',
                        'errorMessage' => 'The specified number of results for each request exceeds the maximum of 100.',
                    ],
                    [
                        'errorCode' => 'InvalidStartParameter',
                        'errorMessage' => 'The specified parameter start is inavlid.',
                    ],
                    [
                        'errorCode' => 'InvalidNumParameter',
                        'errorMessage' => 'The specified parameter num is invalid.',
                    ],
                    [
                        'errorCode' => 'NoSpecifiedAddPic',
                        'errorMessage' => 'The image to insert is not specified.',
                    ],
                    [
                        'errorCode' => 'NoSpecifiedItemId',
                        'errorMessage' => 'The item_id parameter is not specified.',
                    ],
                    [
                        'errorCode' => 'InvalidIntAttr',
                        'errorMessage' => 'The specified int_attr field is invalid.',
                    ],
                    [
                        'errorCode' => 'UnsupportedPicFormat',
                        'errorMessage' => 'The specified image format is invalid.',
                    ],
                    [
                        'errorCode' => 'InvalidFilterClause',
                        'errorMessage' => 'The specified filtering condition is invalid.',
                    ],
                    [
                        'errorCode' => 'InstanceOverQuota',
                        'errorMessage' => 'The number of items exceeds the limit.',
                    ],
                    [
                        'errorCode' => 'IncorrectOrientation',
                        'errorMessage' => 'The image contains incorrect rotation flags in the meta data.',
                    ],
                    [
                        'errorCode' => 'UnsupportedPicPixels',
                        'errorMessage' => 'The specified pixels is not supported.',
                    ],
                    [
                        'errorCode' => 'SearchTimeout',
                        'errorMessage' => 'The request is timed out.',
                    ],
                    [
                        'errorCode' => 'PicNotExist',
                        'errorMessage' => 'The search picture does not exist.',
                    ],
                    [
                        'errorCode' => 'NoSpecifiedProductId',
                        'errorMessage' => 'The parameter ProductId no specified.',
                    ],
                    [
                        'errorCode' => 'NoSpecifiedPicName',
                        'errorMessage' => 'The parameter PicName no specified.',
                    ],
                    [
                        'errorCode' => 'NoSpecifiedPicContent',
                        'errorMessage' => 'The parameter PicContent no specified.',
                    ],
                    [
                        'errorCode' => 'InvalidType',
                        'errorMessage' => 'The specified parameter Type is not valid.',
                    ],
                    [
                        'errorCode' => 'InvalidProductId',
                        'errorMessage' => 'The specified parameter ProductId is not valid.',
                    ],
                    [
                        'errorCode' => 'InvalidPicName',
                        'errorMessage' => 'The specified parameter PicName is not valid.',
                    ],
                    [
                        'errorCode' => 'InvalidStrAttr',
                        'errorMessage' => 'The specified parameter StrAttr is not valid.',
                    ],
                    [
                        'errorCode' => 'InvalidCustomContent',
                        'errorMessage' => 'The specified parameter CustomContent is not valid.',
                    ],
                    [
                        'errorCode' => 'InvalidPicContent',
                        'errorMessage' => 'The specified parameter PicContent length greater than 2 * 1024 * 1024.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'NoPermission',
                        'errorMessage' => 'You are not authorized to perform this operation.',
                    ],
                    [
                        'errorCode' => 'DeniedRequest',
                        'errorMessage' => 'Your request was denied due to instance flow control.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'An internal server error occurred.',
                    ],
                    [
                        'errorCode' => 'NetworkException',
                        'errorMessage' => 'A network error occurred.',
                    ],
                    [
                        'errorCode' => 'RequestTimeout',
                        'errorMessage' => '​The request is timeout.',
                    ],
                    [
                        'errorCode' => 'UnsupportedInstanceType',
                        'errorMessage' => 'The instance type is not supported.',
                    ],
                    [
                        'errorCode' => 'UnsupportedOperationType',
                        'errorMessage' => 'The specified action is not supported.',
                    ],
                    [
                        'errorCode' => 'ExtractFeatureTimeout',
                        'errorMessage' => 'The request was timed out while extracting features.',
                    ],
                    [
                        'errorCode' => 'AccessEngineFailed',
                        'errorMessage' => 'An error occurred while accessing the search engine.',
                    ],
                    [
                        'errorCode' => 'InternalOssError',
                        'errorMessage' => 'An internal OAS error occurred.',
                    ],
                    [
                        'errorCode' => 'InternalSwiftError',
                        'errorMessage' => 'An internal SWIFT error occurred.',
                    ],
                    [
                        'errorCode' => 'InternalTableStoreError',
                        'errorMessage' => 'An internal Table Store error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Msg\\": \\"success\\",\\n  \\"Head\\": {\\n    \\"DocsFound\\": 10,\\n    \\"DocsReturn\\": 10000,\\n    \\"SearchTime\\": 95\\n  },\\n  \\"RequestId\\": \\"36C43E96-8F68-44AA-B1AF-B1F7AB94A6C1\\",\\n  \\"Auctions\\": [\\n    {\\n      \\"ProductId\\": \\"2092061_1\\",\\n      \\"PicName\\": \\"2092061_1.jpg\\",\\n      \\"CategoryId\\": 20,\\n      \\"SortExprValues\\": \\"5.37633353624177e+24;0\\",\\n      \\"CustomContent\\": \\"zidingyi\\",\\n      \\"Score\\": 1,\\n      \\"IntAttr\\": 2,\\n      \\"IntAttr2\\": 20,\\n      \\"StrAttr\\": \\"ss\\",\\n      \\"StrAttr2\\": \\"test\\"\\n    }\\n  ],\\n  \\"Code\\": 0,\\n  \\"PicInfo\\": {\\n    \\"Region\\": \\"280,486,232,351\\",\\n    \\"CategoryId\\": 20,\\n    \\"MultiRegion\\": [\\n      {\\n        \\"Region\\": \\"280,486,232,351\\"\\n      }\\n    ],\\n    \\"AllCategories\\": [\\n      {\\n        \\"Name\\": \\"88888888\\",\\n        \\"Id\\": 0\\n      }\\n    ]\\n  },\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
            'title' => '通过名称搜索图像',
            'description' => '## 使用说明'."\n"
                .'本接口用于根据名称(即ProductId和PicName)查询图像搜索实例中的图片信息。'."\n"
                .'> 如需了解更多产品详情和获取技术支持，请单击[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)或通过钉钉群（35035130）联系我们。'."\n"
                ."\n"
                .'## QPS限制'."\n"
                .'查询操作默认的最大访问频率可在控制台中查看，为您购买时所选择的访问频次（QPS），当前支持1QPS、5QPS、10QPS。',
            'extraInfo' => '## 错误码'."\n"
                .'请参见[错误码](~~66619~~)。',
        ],
        'SearchImageByPic' => [
            'summary' => '本文为您介绍SearchByPic的语法及示例，用于根据图片查询图像搜索实例中的图片信息。',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '图搜实例名称。最多支持20个字符。'."\n"
                            .'如果已经购买图搜实例可登录[图像搜索管控台](https://imagesearch.console.aliyun.com/)查看。'."\n"
                            .'如果没有购买图搜实例可参考[开通服务](~~179178~~)和[创建实例](~~66569~~)。'."\n"
                            .'>这里的实例名称并非实例ID，使用时请区分。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'demoinstance1',
                    ],
                ],
                [
                    'name' => 'PicContent',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '图片内容，Base64编码。'."\n"
                            ."\n"
                            .' - 图片大小要求不超过4 MB。'."\n"
                            .' - 图片格式：PNG、JPG、JPEG、BMP、GIF、WEBP、TIFF、PPM。'."\n"
                            .' - 传输等待时间不超过5秒。'."\n"
                            .'<props="china">'."\n"
                            .' - 服务类型为商品图片搜索和通用图片搜索时，图片长和宽像素要求大于等于100且小于等于4096。'."\n"
                            .' - 服务类型为商标图片搜索时，图片长和宽像素要求大于等于200且小于4096。'."\n"
                            .' - 服务类型为布料图片搜索时，图片长和宽像素要求大于等于448且小于等于4096。'."\n"
                            .'</props>'."\n"
                            .'<props="intl">'."\n"
                            .' - 服务类型为商品图片搜索和通用图片搜索时，图片长和宽像素要求大于等于100且小于等于4096。'."\n"
                            .'</props>'."\n"
                            .' - 图片中不能包含旋转信息。'."\n"
                            .'> - 若您使用SDK方式调用该接口，无需填写**PicContent**字段，SDK已将本字段封装并自动转化为Base64编码。SDK使用URL方式请参见[JAVA SDK](~~179188~~)。'."\n"
                            .'- 若您使用阿里云OpenAPI平台调用该接口，仅支持选择**2019-03-25**版本，其他版本不支持通过**PicContent**字段转化为Base64编码。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'AAAANSUhEUgAAAPcAAAEVCAYAAAA8d3NuAAAAAXNSR0IArs......RK5CYII=',
                        'isFileTransferUrl' => true,
                    ],
                ],
                [
                    'name' => 'CategoryId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '商品类目。具体请参见[类目参考](~~179184~~)。'."\n"
                            .' - 对于商品搜索，如果设置类目，则以设置的为准；如果不设置类目，则由系统进行类目预测，预测的类目结果可以在Response中获取 。'."\n"
                            .'<props="china">'."\n"
                            .' - 对于布料、商标、通用家具家居和工业五金搜索，不论是否设置类目，系统会将类目设置为88888888。'."\n"
                            .'</props>'."\n"
                            .'<props="intl">'."\n"
                            .' - 对于通用搜索，不论是否设置类目，系统会将类目设置为88888888。'."\n"
                            .'</props>'."\n",
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '88888888',
                        'minimum' => '0',
                        'example' => '88888888',
                        'enum' => [
                            '0',
                            '1',
                            '2',
                            '3',
                            '4',
                            '5',
                            '6',
                            '7',
                            '8',
                            '9',
                            '20',
                            '21',
                            '22',
                            '88888888',
                        ],
                    ],
                ],
                [
                    'name' => 'Crop',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否需要进行主体识别。默认true。'."\n"
                            .' - 为true时，由系统进行主体识别，以识别的主体进行搜索，主体识别结果可在Response中获取。'."\n"
                            .' - 为false时，则不进行主体识别，以整张图进行搜索。'."\n"
                            .'<props="china">'."\n"
                            .'- 对于布料图片搜索，此参数会被忽略，系统会以整张图进行搜索。'."\n"
                            .'</props>'."\n",
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'Region',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '图片的主体区域，格式为`x1,x2,y1,y2,` 其中`x1,y1` 是左上角的点，`x2,y2`是右下角的点。'."\n"
                            .'> - 若用户设置了Region，则不论Crop参数为何值，都将以用户输入Region进行搜索。'."\n"
                            .'<props="china">'."\n"
                            .'- 对于布料图片搜索，此参数会被忽略，系统会以整张图进行搜索。'."\n"
                            .'</props>'."\n"
                            ."\n\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => '280,486,232,351',
                    ],
                ],
                [
                    'name' => 'Num',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '返回结果的数目。取值范围：1~100。默认值为10。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '100',
                        'minimum' => '1',
                        'example' => '10',
                        'default' => '10',
                    ],
                ],
                [
                    'name' => 'Start',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '返回结果的起始位置。取值范围：0~499。默认值为0。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '499',
                        'minimum' => '0',
                        'example' => '0',
                        'default' => '0',
                    ],
                ],
                [
                    'name' => 'Filter',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '过滤条件。int_attr支持的操作符有大于号(>)、大于等于号(>=)、小于号(<)、小于等于号(<=)、等于号(=)。str_attr支持的操作符有等于号(=)和不等号(!=)，多个条件之支持AND和OR进行连接。'."\n"
                            .'例如：'."\n"
                            .'- int_attr >= 100。'."\n"
                            .'- str_attr != "value1"。'."\n"
                            .'- int_attr = 1000 AND str_attr = "value1"。'."\n"
                            ."\n"
                            .'>最多支持256个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'int_attr=1000 AND str_attr="value1"',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'Msg' => [
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'Head' => [
                                'description' => '搜索结果概述信息。',
                                'type' => 'object',
                                'properties' => [
                                    'DocsFound' => [
                                        'description' => '返回结果数目。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '10',
                                    ],
                                    'DocsReturn' => [
                                        'description' => '实例中命中结果数目。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '10000',
                                    ],
                                    'SearchTime' => [
                                        'description' => '搜索耗时，单位毫秒。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '95',
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'B3137727-7D6E-488C-BA21-0E034C38A879',
                            ],
                            'Auctions' => [
                                'description' => '所有返回的商品描述信息。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '所有返回的商品描述信息。',
                                    'type' => 'object',
                                    'properties' => [
                                        'ProductId' => [
                                            'description' => '商品ID。',
                                            'type' => 'string',
                                            'example' => '2092061_1',
                                        ],
                                        'PicName' => [
                                            'description' => '图片名称。',
                                            'type' => 'string',
                                            'example' => '2092061_1.jpg',
                                        ],
                                        'CategoryId' => [
                                            'description' => '图片类目。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '8888888',
                                        ],
                                        'SortExprValues' => [
                                            'description' => '系统打分信息。'."\n"
                                                .'> - 当前字段已弃用，建议使用Score。 '."\n"
                                                .'- SortExprValues是一个分号分隔的二元组，第一个值表示图片的相关性分数，值越大表示和查询的图片相关性越高。由于算法模型不同。'."\n"
                                                .'- 当类目为0~2时，SortExprValues值域范围：0～7.33136443711219e+24。'."\n"
                                                .'- 类目为其他值时，SortExprValues值域范围：0～5.37633353624177e+24。当两个图片完全一样时，这个分值最大。',
                                            'type' => 'string',
                                            'example' => '5.37633353624177e+24;0',
                                        ],
                                        'CustomContent' => [
                                            'description' => '用户自定义的内容。',
                                            'type' => 'string',
                                            'example' => 'zidingyi',
                                        ],
                                        'Score' => [
                                            'description' => '图片相似打分。取值范围：0~1。'."\n"
                                                .'> 需要版本升级至V3.1.1方可使用。',
                                            'type' => 'number',
                                            'format' => 'float',
                                            'example' => '1',
                                        ],
                                        'IntAttr' => [
                                            'description' => '整数类型属性。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '2',
                                        ],
                                        'IntAttr2' => [
                                            'description' => '整数类型属性。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '20',
                                        ],
                                        'StrAttr' => [
                                            'description' => '字符串类型属性。',
                                            'type' => 'string',
                                            'example' => '2',
                                        ],
                                        'StrAttr2' => [
                                            'description' => '字符串类型属性。',
                                            'type' => 'string',
                                            'example' => 'test',
                                        ],
                                    ],
                                ],
                            ],
                            'Code' => [
                                'description' => '    错误码。'."\n"
                                    .'- 0：成功。'."\n"
                                    .'- 非0：失败。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                            ],
                            'PicInfo' => [
                                'description' => '类目预测、主体识别结果等信息。',
                                'type' => 'object',
                                'properties' => [
                                    'Region' => [
                                        'description' => '主体识别结果。图片的主体区域，格式为x1,x2,y1,y2，其中 x1,y1 是左上角的点，x2，y2是右下角的点。若用户请求中指定了主体区域，则以请求中为准。',
                                        'type' => 'string',
                                        'example' => '280,486,232,351',
                                    ],
                                    'CategoryId' => [
                                        'description' => '类目预测结果。若用户请求中指定了类目，则以请求中为准。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '88888888',
                                    ],
                                    'MultiRegion' => [
                                        'description' => '主体识别结果集合。'."\n"
                                            .'> 需要版本升级至V3.1.1方可使用。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '主体识别结果。',
                                            'type' => 'object',
                                            'properties' => [
                                                'Region' => [
                                                    'description' => '主体识别结果。图片的主体区域，格式为x1,x2,y1,y2，其中 x1,y1 是左上角的点，x2，y2是右下角的点。若用户请求中指定了主体区域，则以请求中为准。',
                                                    'type' => 'string',
                                                    'example' => '280,486,232,351',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'AllCategories' => [
                                        'description' => '系统支持的所有类目信息。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '系统支持的所有类目信息。',
                                            'type' => 'object',
                                            'properties' => [
                                                'Name' => [
                                                    'description' => '类目名称。',
                                                    'type' => 'string',
                                                    'example' => 'other',
                                                ],
                                                'Id' => [
                                                    'description' => '类目ID。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '88888888',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'Success' => [
                                'description' => '请求是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'BadRequest',
                        'errorMessage' => 'The request has invalid parameters.',
                    ],
                    [
                        'errorCode' => 'InstanceStatusError',
                        'errorMessage' => 'Your instance is unavailable.',
                    ],
                    [
                        'errorCode' => 'TimeoutForTransferImage',
                        'errorMessage' => 'Timeout after 5 seconds waiting for images transfer to complete.',
                    ],
                    [
                        'errorCode' => 'InvalidInstance',
                        'errorMessage' => 'The specified instance name is invalid.',
                    ],
                    [
                        'errorCode' => 'NoCaretSeperator',
                        'errorMessage' => 'The body content is missing the ^ separator.',
                    ],
                    [
                        'errorCode' => 'EmptyMeta',
                        'errorMessage' => 'The body content has an empty meta field.',
                    ],
                    [
                        'errorCode' => 'InvalidMetaItem',
                        'errorMessage' => 'The meta field is invalid.',
                    ],
                    [
                        'errorCode' => 'NoPicList',
                        'errorMessage' => 'The body content is missing the pic_list parameter.',
                    ],
                    [
                        'errorCode' => 'InvalidPicList',
                        'errorMessage' => 'The specified pic_list parameter is invalid.',
                    ],
                    [
                        'errorCode' => 'NoSpecifiedPic',
                        'errorMessage' => 'he content of an image is not specified in the HTTP POST body.',
                    ],
                    [
                        'errorCode' => 'NoSpecifiedSearchPic',
                        'errorMessage' => 'The search image is not specified.',
                    ],
                    [
                        'errorCode' => 'InvalidCategory',
                        'errorMessage' => 'The specified category is invalid.',
                    ],
                    [
                        'errorCode' => 'OverflowMaxResultNum',
                        'errorMessage' => 'The specified number of total results exceeds the maximum of 500.',
                    ],
                    [
                        'errorCode' => 'OverflowMaxReturnNum',
                        'errorMessage' => 'The specified number of results for each request exceeds the maximum of 100.',
                    ],
                    [
                        'errorCode' => 'InvalidStartParameter',
                        'errorMessage' => 'The specified parameter start is inavlid.',
                    ],
                    [
                        'errorCode' => 'InvalidNumParameter',
                        'errorMessage' => 'The specified parameter num is invalid.',
                    ],
                    [
                        'errorCode' => 'NoSpecifiedAddPic',
                        'errorMessage' => 'The image to insert is not specified.',
                    ],
                    [
                        'errorCode' => 'NoSpecifiedItemId',
                        'errorMessage' => 'The item_id parameter is not specified.',
                    ],
                    [
                        'errorCode' => 'InvalidIntAttr',
                        'errorMessage' => 'The specified int_attr field is invalid.',
                    ],
                    [
                        'errorCode' => 'UnsupportedPicFormat',
                        'errorMessage' => 'The specified image format is invalid.',
                    ],
                    [
                        'errorCode' => 'InvalidFilterClause',
                        'errorMessage' => 'The specified filtering condition is invalid.',
                    ],
                    [
                        'errorCode' => 'InstanceOverQuota',
                        'errorMessage' => 'The number of items exceeds the limit.',
                    ],
                    [
                        'errorCode' => 'IncorrectOrientation',
                        'errorMessage' => 'The image contains incorrect rotation flags in the meta data.',
                    ],
                    [
                        'errorCode' => 'UnsupportedPicPixels',
                        'errorMessage' => 'The specified pixels is not supported.',
                    ],
                    [
                        'errorCode' => 'SearchTimeout',
                        'errorMessage' => 'The request is timed out.',
                    ],
                    [
                        'errorCode' => 'PicNotExist',
                        'errorMessage' => 'The search picture does not exist.',
                    ],
                    [
                        'errorCode' => 'NoSpecifiedProductId',
                        'errorMessage' => 'The parameter ProductId no specified.',
                    ],
                    [
                        'errorCode' => 'NoSpecifiedPicName',
                        'errorMessage' => 'The parameter PicName no specified.',
                    ],
                    [
                        'errorCode' => 'NoSpecifiedPicContent',
                        'errorMessage' => 'The parameter PicContent no specified.',
                    ],
                    [
                        'errorCode' => 'InvalidType',
                        'errorMessage' => 'The specified parameter Type is not valid.',
                    ],
                    [
                        'errorCode' => 'InvalidProductId',
                        'errorMessage' => 'The specified parameter ProductId is not valid.',
                    ],
                    [
                        'errorCode' => 'InvalidPicName',
                        'errorMessage' => 'The specified parameter PicName is not valid.',
                    ],
                    [
                        'errorCode' => 'InvalidStrAttr',
                        'errorMessage' => 'The specified parameter StrAttr is not valid.',
                    ],
                    [
                        'errorCode' => 'InvalidCustomContent',
                        'errorMessage' => 'The specified parameter CustomContent is not valid.',
                    ],
                    [
                        'errorCode' => 'InvalidPicContent',
                        'errorMessage' => 'The specified parameter PicContent length greater than 4 * 1024 * 1024.',
                    ],
                    [
                        'errorCode' => 'InvalidPicUrl',
                        'errorMessage' => 'The search picture does not exist at the specific url.',
                    ],
                    [
                        'errorCode' => 'InvalidInstanceName',
                        'errorMessage' => 'The parameter instanceName is not specified.',
                    ],
                    [
                        'errorCode' => 'InvalidRequestId',
                        'errorMessage' => 'The parameter requestId is not specified.',
                    ],
                    [
                        'errorCode' => 'InvalidRequestIdTooLarge',
                        'errorMessage' => 'The parameter requestId is too large.',
                    ],
                    [
                        'errorCode' => 'InvalidRegion',
                        'errorMessage' => 'The specific region is illegal',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'NoPermission',
                        'errorMessage' => 'You are not authorized to perform this operation.',
                    ],
                    [
                        'errorCode' => 'DeniedRequest',
                        'errorMessage' => 'Your request was denied due to instance flow control.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'UnknownException',
                        'errorMessage' => 'An internal server error occurred.',
                    ],
                    [
                        'errorCode' => 'NetworkException',
                        'errorMessage' => 'A network error occurred.',
                    ],
                    [
                        'errorCode' => 'RequestTimeout',
                        'errorMessage' => '​The request is timeout.',
                    ],
                    [
                        'errorCode' => 'UnsupportedInstanceType',
                        'errorMessage' => 'The instance type is not supported.',
                    ],
                    [
                        'errorCode' => 'UnsupportedOperationType',
                        'errorMessage' => 'The specified action is not supported.',
                    ],
                    [
                        'errorCode' => 'ExtractFeatureTimeout',
                        'errorMessage' => 'The request was timed out while extracting features.',
                    ],
                    [
                        'errorCode' => 'AccessEngineFailed',
                        'errorMessage' => 'An error occurred while accessing the search engine.',
                    ],
                    [
                        'errorCode' => 'InternalOssError',
                        'errorMessage' => 'An internal OAS error occurred.',
                    ],
                    [
                        'errorCode' => 'InternalSwiftError',
                        'errorMessage' => 'An internal SWIFT error occurred.',
                    ],
                    [
                        'errorCode' => 'InternalTableStoreError',
                        'errorMessage' => 'An internal Table Store error occurred.',
                    ],
                    [
                        'errorCode' => 'ConnectionDVException',
                        'errorMessage' => 'Failed to obtain collection.',
                    ],
                    [
                        'errorCode' => 'PictureError',
                        'errorMessage' => '[download] Img Download Failed.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Msg\\": \\"success\\",\\n  \\"Head\\": {\\n    \\"DocsFound\\": 10,\\n    \\"DocsReturn\\": 10000,\\n    \\"SearchTime\\": 95\\n  },\\n  \\"RequestId\\": \\"B3137727-7D6E-488C-BA21-0E034C38A879\\",\\n  \\"Auctions\\": [\\n    {\\n      \\"ProductId\\": \\"2092061_1\\",\\n      \\"PicName\\": \\"2092061_1.jpg\\",\\n      \\"CategoryId\\": 8888888,\\n      \\"SortExprValues\\": \\"5.37633353624177e+24;0\\",\\n      \\"CustomContent\\": \\"zidingyi\\",\\n      \\"Score\\": 1,\\n      \\"IntAttr\\": 2,\\n      \\"IntAttr2\\": 20,\\n      \\"StrAttr\\": \\"2\\",\\n      \\"StrAttr2\\": \\"test\\"\\n    }\\n  ],\\n  \\"Code\\": 0,\\n  \\"PicInfo\\": {\\n    \\"Region\\": \\"280,486,232,351\\",\\n    \\"CategoryId\\": 88888888,\\n    \\"MultiRegion\\": [\\n      {\\n        \\"Region\\": \\"280,486,232,351\\"\\n      }\\n    ],\\n    \\"AllCategories\\": [\\n      {\\n        \\"Name\\": \\"other\\",\\n        \\"Id\\": 88888888\\n      }\\n    ]\\n  },\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
            'title' => '图片搜索',
            'description' => '## 使用说明'."\n"
                .'本接口用于根据图片查询图像搜索实例中的图片信息。'."\n"
                .'> 如需了解更多产品详情和获取技术支持，请单击[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)或通过钉钉群（35035130）联系我们。'."\n"
                ."\n"
                .'## QPS限制'."\n"
                .'查询操作默认的最大访问频率可在控制台中查看，为您购买时所选择的访问频次（QPS），当前支持1QPS、5QPS、10QPS。'."\n"
                ."\n\n"
                .'### SDK版本说明'."\n"
                .'图像SDK版本升级到V3.1.1，可使用“多主体识别”、“相似性分数”功能。请参见[Java SDK](~~179188~~)。',
            'extraInfo' => '## 错误码'."\n"
                .'请参见[错误码](~~66619~~)。',
        ],
        'Detail' => [
            'summary' => '本文为您介绍Detail接口的语法及示例，用于根据名称查询图像搜索实例的相关信息。',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'InstanceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '图搜实例名称。最多支持20个字符。'."\n"
                            .'如果已经购买图搜实例可登录[图像搜索管控台](https://imagesearch.console.aliyun.com/)查看。'."\n"
                            .'如果没有购买图搜实例可参考[开通服务](~~179178~~)和[创建实例](~~66569~~)。'."\n"
                            .'>这里的实例名称并非实例ID，且实例名称同区域内唯一不可重复，使用时请区分。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'imagesearchName',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '结果返回。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '36C43E96-8F68-44AA-B1AF-B1F7AB94A6C1',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Instance' => [
                                'description' => '实例信息。',
                                'type' => 'object',
                                'properties' => [
                                    'Capacity' => [
                                        'description' => '套餐容量。单位万。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '10',
                                    ],
                                    'UtcExpireTime' => [
                                        'description' => '实例到期时间。单位毫秒。',
                                        'type' => 'string',
                                        'example' => '1623081600000',
                                    ],
                                    'UtcCreate' => [
                                        'description' => '实例创建时间。单位毫秒。',
                                        'type' => 'string',
                                        'example' => '1620382716000',
                                    ],
                                    'ServiceType' => [
                                        'description' => '图搜模型。'."\n"
                                            ."\n"
                                            .'<props="intl">0：商品搜索；1：通用图片搜索。</props>'."\n"
                                            .'<props="china">0：商品搜索；1：通用图片搜索；2：布料搜索；3、7：商标搜索；4：版权搜索；5：家具搜索；6：五金搜索。</props>'."\n",
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                    'Region' => [
                                        'description' => '地域信息。',
                                        'type' => 'string',
                                        'example' => 'cn-shanghai',
                                    ],
                                    'Name' => [
                                        'description' => '实例名称。',
                                        'type' => 'string',
                                        'example' => 'imagesearchName',
                                    ],
                                    'TotalCount' => [
                                        'description' => '图片数量。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '10063',
                                    ],
                                    'Qps' => [
                                        'description' => '套餐QPS。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'DeniedRequest',
                        'errorMessage' => 'Your request was denied due to instance flow control.',
                    ],
                    [
                        'errorCode' => 'InvalidInstance',
                        'errorMessage' => 'The specified instance name is invalid.',
                    ],
                    [
                        'errorCode' => 'Console.BadRequest',
                        'errorMessage' => 'The request has invalid parameters.',
                    ],
                    [
                        'errorCode' => 'Console.InstanceNotFound',
                        'errorMessage' => 'The specified ImageSearch instance is not found.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'Console.LoginError',
                        'errorMessage' => 'Check login failed.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Console.NoPermission',
                        'errorMessage' => 'You are not authorized to this operation.',
                    ],
                ],
                409 => [
                    [
                        'errorCode' => 'Console.InstanceStatusError',
                        'errorMessage' => 'Current Instance status not supported this opreate.',
                    ],
                    [
                        'errorCode' => 'Console.OrderStatusError',
                        'errorMessage' => 'Current Order status not supported this opreate.',
                    ],
                    [
                        'errorCode' => 'Console.IncrementStatusError',
                        'errorMessage' => 'Current Increment status not supported this opreate.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'Console.InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error.',
                    ],
                    [
                        'errorCode' => 'Console.CallServiceError',
                        'errorMessage' => 'Fail to call service.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"36C43E96-8F68-44AA-B1AF-B1F7AB94A6C1\\",\\n  \\"Success\\": true,\\n  \\"Instance\\": {\\n    \\"Capacity\\": 10,\\n    \\"UtcExpireTime\\": \\"1623081600000\\",\\n    \\"UtcCreate\\": \\"1620382716000\\",\\n    \\"ServiceType\\": 0,\\n    \\"Region\\": \\"cn-shanghai\\",\\n    \\"Name\\": \\"imagesearchName\\",\\n    \\"TotalCount\\": 10063,\\n    \\"Qps\\": 1\\n  }\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
            'title' => '查询实例状态',
            'description' => '## 使用说明'."\n"
                .'本接口用于向图像搜索实例中查询实例信息。'."\n"
                .'> 如需了解更多产品详情和获取技术支持，请单击[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)或通过钉钉群（35035130）联系我们。'."\n"
                ."\n"
                .'## QPS限制'."\n"
                .'查询操作默认的并发量为1，也就是每秒钟最多处理1个请求。',
            'extraInfo' => '## 错误码'."\n"
                .'请参见[错误码](~~66619~~)。',
        ],
        'DumpMeta' => [
            'summary' => '本文为您介绍DumpMeta接口的语法及示例，用于根据名称新建图像搜索元数据导出任务。',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'InstanceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '图搜实例名称。最多支持20个字符。'."\n"
                            .'如果已经购买图搜实例可登录[图像搜索管控台](https://imagesearch.console.aliyun.com/)查看。'."\n"
                            .'如果没有购买图搜实例可参考[开通服务](~~179178~~)和[创建实例](~~66569~~)。'."\n"
                            .'>这里的实例名称并非实例ID，使用时请区分。',
                        'type' => 'string',
                        'required' => true,
                        'maximum' => '10000000',
                        'minimum' => '1',
                        'example' => 'imagesearchName',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回信息。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '36C43E96-8F68-44AA-B1AF-B1F7AB94A6C1',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'description' => '任务执行返回。',
                                'type' => 'object',
                                'properties' => [
                                    'DumpMetaStatus' => [
                                        'description' => '元数据导出任务状态。'."\n"
                                            .'- PROCESSING：任务处理中。'."\n"
                                            .'- FAIL：任务执行失败。'."\n"
                                            .'- SUCCESS：任务已完成。',
                                        'type' => 'string',
                                        'example' => 'PROCESSING',
                                    ],
                                    'Id' => [
                                        'description' => '任务ID。',
                                        'type' => 'string',
                                        'example' => '500',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidInstance',
                        'errorMessage' => 'The specified instance name is invalid.',
                    ],
                    [
                        'errorCode' => 'Console.BadRequest',
                        'errorMessage' => 'The request has invalid parameters.',
                    ],
                    [
                        'errorCode' => 'Console.InstanceNotFound',
                        'errorMessage' => 'The specified ImageSearch instance is not found.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'Console.LoginError',
                        'errorMessage' => 'Check login failed.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Console.NoPermission',
                        'errorMessage' => 'You are not authorized to this operation.',
                    ],
                ],
                409 => [
                    [
                        'errorCode' => 'Console.InstanceStatusError',
                        'errorMessage' => 'Current Instance status not supported this opreate.',
                    ],
                    [
                        'errorCode' => 'Console.OrderStatusError',
                        'errorMessage' => 'Current Order status not supported this opreate.',
                    ],
                    [
                        'errorCode' => 'Console.IncrementStatusError',
                        'errorMessage' => 'Current Increment status not supported this opreate.',
                    ],
                    [
                        'errorCode' => 'Console.TaskAlreadyExist',
                        'errorMessage' => 'A task that is in progress already exists.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'Console.InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error.',
                    ],
                    [
                        'errorCode' => 'Console.CallServiceError',
                        'errorMessage' => 'An internal service error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"36C43E96-8F68-44AA-B1AF-B1F7AB94A6C1\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"DumpMetaStatus\\": \\"PROCESSING\\",\\n    \\"Id\\": \\"500\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
            'title' => '元数据导出',
            'description' => '## 使用说明'."\n"
                .'本接口用于向图像搜索实例中提交元信息导出任务。'."\n"
                .'> 如需了解更多产品详情和获取技术支持，请单击[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)或通过钉钉群（35035130）联系我们。'."\n"
                ."\n"
                .'## QPS限制'."\n"
                .'提交操作默认的并发量为1，也就是每秒钟最多处理1个请求。'."\n"
                .'> 当上一个元信息导出任务没有完成时，无法提交新的元信息导出任务。',
            'extraInfo' => '## 错误码'."\n"
                .'请参见[错误码](~~66619~~)。',
        ],
        'DumpMetaList' => [
            'summary' => '本文为您介绍DumpMetaList接口的语法及示例，用于向图像搜索实例中查看元信息导出任务列表。',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'InstanceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '图搜实例名称。最多支持20个字符。'."\n"
                            .'如果已经购买图搜实例可登录[图像搜索管控台](https://imagesearch.console.aliyun.com/)查看。'."\n"
                            .'如果没有购买图搜实例可参考[开通服务](~~179178~~)和[创建实例](~~66569~~)。'."\n"
                            .'>这里的实例名称并非实例ID，且实例名称同区域内唯一不可重复，使用时请区分。',
                        'type' => 'string',
                        'required' => true,
                        'maximum' => '10000000',
                        'minimum' => '1',
                        'example' => 'demoinstance1',
                    ],
                ],
                [
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'description' => '元信息导出任务ID。'."\n"
                            .'>导出任务ID，需要先执行[元数据导出](~~377466~~)从返回值得到。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '500',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '返回结果的数目。默认值为10，最大值30。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '500',
                        'exclusiveMaximum' => true,
                        'minimum' => '1',
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '返回结果的起始位置。默认值为1，最大值30。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '500',
                        'minimum' => '1',
                        'example' => '1',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'B3137727-7D6E-488C-BA21-0E034C38A879',
                            ],
                            'Data' => [
                                'description' => '元数据导出信息返回。',
                                'type' => 'object',
                                'properties' => [
                                    'DumpMetaList' => [
                                        'description' => '元信息导出任务集合。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '元信息导出任务详情。',
                                            'type' => 'object',
                                            'properties' => [
                                                'Status' => [
                                                    'description' => '任务状态。'."\n"
                                                        .'- PROCESSING：任务处理中。'."\n"
                                                        .'- FAIL：任务执行失败。'."\n"
                                                        .'- SUCCESS：任务已完成。',
                                                    'type' => 'string',
                                                    'example' => 'SUCCESS',
                                                ],
                                                'Msg' => [
                                                    'description' => '错误信息。',
                                                    'type' => 'string',
                                                    'example' => 'success',
                                                ],
                                                'UtcModified' => [
                                                    'description' => '任务更新时间。单位毫秒。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1629095760000',
                                                ],
                                                'MetaUrl' => [
                                                    'description' => '结果下载地址。有效期两个小时。',
                                                    'type' => 'string',
                                                    'example' => 'https://imagesearchname.oss-cn-shanghai.aliyuncs.com/xxx',
                                                ],
                                                'UtcCreate' => [
                                                    'description' => '任务创建时间。单位毫秒。',
                                                    'type' => 'string',
                                                    'example' => '1629095713000',
                                                ],
                                                'Code' => [
                                                    'description' => '错误码。'."\n"
                                                        ."\n"
                                                        .'- 0：成功。'."\n"
                                                        .'- 非0：失败。',
                                                    'type' => 'string',
                                                    'example' => '0',
                                                ],
                                                'Id' => [
                                                    'description' => '任务ID。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '500',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'PageSize' => [
                                        'description' => '查询结果数目。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '10',
                                    ],
                                    'PageNumber' => [
                                        'description' => '结果当前页数。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'TotalCount' => [
                                        'description' => '任务总数量。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '15',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidInstance',
                        'errorMessage' => 'The specified instance name is invalid.',
                    ],
                    [
                        'errorCode' => 'Console.BadRequest',
                        'errorMessage' => 'The request has invalid parameters.',
                    ],
                    [
                        'errorCode' => 'Console.InstanceNotFound',
                        'errorMessage' => 'The specified ImageSearch instance is not found.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'Console.LoginError',
                        'errorMessage' => 'Check login failed.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Console.NoPermission',
                        'errorMessage' => 'You are not authorized to this operation.',
                    ],
                ],
                409 => [
                    [
                        'errorCode' => 'Console.InstanceStatusError',
                        'errorMessage' => 'Current Instance status not supported this opreate.',
                    ],
                    [
                        'errorCode' => 'Console.OrderStatusError',
                        'errorMessage' => 'Current Order status not supported this opreate.',
                    ],
                    [
                        'errorCode' => 'Console.IncrementStatusError',
                        'errorMessage' => 'Current Increment status not supported this opreate.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'Console.InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error.',
                    ],
                    [
                        'errorCode' => 'Console.CallServiceError',
                        'errorMessage' => 'An internal service error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"B3137727-7D6E-488C-BA21-0E034C38A879\\",\\n  \\"Data\\": {\\n    \\"DumpMetaList\\": [\\n      {\\n        \\"Status\\": \\"SUCCESS\\",\\n        \\"Msg\\": \\"success\\",\\n        \\"UtcModified\\": 1629095760000,\\n        \\"MetaUrl\\": \\"https://imagesearchname.oss-cn-shanghai.aliyuncs.com/xxx\\",\\n        \\"UtcCreate\\": \\"1629095713000\\",\\n        \\"Code\\": \\"0\\",\\n        \\"Id\\": 500\\n      }\\n    ],\\n    \\"PageSize\\": 10,\\n    \\"PageNumber\\": 1,\\n    \\"TotalCount\\": 15\\n  }\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
            'title' => '查询元信息导出任务',
            'description' => '## 使用说明'."\n"
                .'本接口用于向图像搜索实例中查询元信息导出任务。'."\n"
                .'> 如需了解更多产品详情和获取技术支持，请单击[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)或通过钉钉群（35035130）联系我们。'."\n"
                ."\n"
                .'## QPS限制'."\n"
                .'查询操作默认的并发量为1，也就是每秒钟最多处理1个请求。',
            'extraInfo' => '## 错误码'."\n"
                .'请参见[错误码](~~66619~~)。',
        ],
        'IncreaseInstance' => [
            'summary' => '本文为您介绍IncreaseInstance接口的语法及示例，用于根据名称新建图像搜索实例批量任务。',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'InstanceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '图搜实例名称。最多支持20个字符。'."\n"
                            .'如果已经购买图搜实例可登录[图像搜索管控台](https://imagesearch.console.aliyun.com/)查看。'."\n"
                            .'如果没有购买图搜实例可参考[开通服务](~~179178~~)和[创建实例](~~66569~~)。'."\n"
                            .'>这里的实例名称并非实例ID，使用时请区分。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'imagesearchName',
                    ],
                ],
                [
                    'name' => 'BucketName',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Bucket名称。'."\n"
                            .'> 仅支持实例同区域的BucketName。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'bucketName',
                    ],
                ],
                [
                    'name' => 'Path',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'OSS中increment.meta文件的绝对路径。必须"/"开头，非"/"结尾。'."\n"
                            .'> 需要您提前准备increment.meta文件。具体请参见[批量操作](~~66580~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '/xxx/xxx',
                    ],
                ],
                [
                    'name' => 'CallbackAddress',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务回调地址。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'http://xxxxx',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回信息。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '36C43E96-8F68-44AA-B1AF-B1F7AB94A6C1',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'description' => '任务执行返回。',
                                'type' => 'object',
                                'properties' => [
                                    'IncrementStatus' => [
                                        'description' => '批量任务状态。'."\n"
                                            .'- PROCESSING：任务处理中。'."\n"
                                            .'- FAIL：任务执行失败。'."\n"
                                            .'- SUCCESS：任务已完成。',
                                        'type' => 'string',
                                        'example' => 'PROCESSING',
                                    ],
                                    'Id' => [
                                        'description' => '任务ID。',
                                        'type' => 'string',
                                        'example' => '500',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidInstance',
                        'errorMessage' => 'The specified instance name is invalid.',
                    ],
                    [
                        'errorCode' => 'Console.BadRequest',
                        'errorMessage' => 'The request has invalid parameters.',
                    ],
                    [
                        'errorCode' => 'Console.InstanceNotFound',
                        'errorMessage' => 'The specified ImageSearch instance is not found.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'Console.LoginError',
                        'errorMessage' => 'Check login failed.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Console.NoPermission',
                        'errorMessage' => 'You are not authorized to this operation.',
                    ],
                ],
                409 => [
                    [
                        'errorCode' => 'Console.InstanceStatusError',
                        'errorMessage' => 'Current Instance status not supported this opreate.',
                    ],
                    [
                        'errorCode' => 'Console.OrderStatusError',
                        'errorMessage' => 'Current Order status not supported this opreate.',
                    ],
                    [
                        'errorCode' => 'Console.IncrementStatusError',
                        'errorMessage' => 'Current Increment status not supported this opreate.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'Console.InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error.',
                    ],
                    [
                        'errorCode' => 'Console.CallServiceError',
                        'errorMessage' => 'Fail to call service.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"36C43E96-8F68-44AA-B1AF-B1F7AB94A6C1\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"IncrementStatus\\": \\"PROCESSING\\",\\n    \\"Id\\": \\"500\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
            'title' => '批量操作',
            'description' => '## 使用说明'."\n"
                .'本接口用于向图像搜索实例中提交批量任务。'."\n"
                .'> 如需了解更多产品详情和获取技术支持，请单击[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)或通过钉钉群（35035130）联系我们。'."\n"
                ."\n"
                .'## QPS限制'."\n"
                .'同一时间，只能运行一个批量任务。'."\n"
                .'> 当上一个批量任务没有完成时，无法提交新的批量任务。',
            'extraInfo' => '## 错误码'."\n"
                .'请参见[错误码](~~66619~~)。',
        ],
        'IncreaseList' => [
            'summary' => '本文为您介绍IncreaseList接口的语法及示例，用于向图像搜索实例中查看批量任务列表。',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'InstanceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '图搜实例名称。最多支持20个字符。'."\n"
                            .'如果已经购买图搜实例可登录[图像搜索管控台](https://imagesearch.console.aliyun.com/)查看。'."\n"
                            .'如果没有购买图搜实例可参考[开通服务](~~179178~~)和[创建实例](~~66569~~)。'."\n"
                            .'>这里的实例名称并非实例ID，且实例名称同区域内唯一不可重复，使用时请区分。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'demoinstance1',
                    ],
                ],
                [
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'description' => '批量任务ID。'."\n"
                            .'>批量任务ID，需要先执行[批量操作](~~377468~~)从返回值得到。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '500',
                    ],
                ],
                [
                    'name' => 'BucketName',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Bucket名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'bucketName',
                    ],
                ],
                [
                    'name' => 'Path',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'OSS中increment.meta文件的绝对路径。必须"/"开头，非"/"结尾。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '/xxx/xxx',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '返回结果的数目。默认值为10。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '500',
                        'minimum' => '1',
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '返回结果的起始位置。默认值为1。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '500',
                        'exclusiveMaximum' => true,
                        'minimum' => '1',
                        'example' => '1',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'B3137727-7D6E-488C-BA21-0E034C38A879',
                            ],
                            'Data' => [
                                'description' => '批量任务信息返回。',
                                'type' => 'object',
                                'properties' => [
                                    'Increments' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'Instance' => [
                                                'description' => '批量任务集合。',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => '批量任务详情。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Msg' => [
                                                            'description' => '错误信息。',
                                                            'type' => 'string',
                                                            'example' => 'sucess',
                                                        ],
                                                        'Status' => [
                                                            'description' => '任务状态。'."\n"
                                                                .'- PROCESSING：任务处理中。'."\n"
                                                                .'- FAIL：任务执行失败。'."\n"
                                                                .'- SUCCESS：任务已完成。',
                                                            'type' => 'string',
                                                            'example' => 'SUCCESS',
                                                        ],
                                                        'UtcModified' => [
                                                            'description' => '任务更新时间。单位毫秒。',
                                                            'type' => 'integer',
                                                            'format' => 'int64',
                                                            'example' => '1629095760000',
                                                        ],
                                                        'BucketName' => [
                                                            'description' => 'Bucket名称。',
                                                            'type' => 'string',
                                                            'example' => 'bucketName',
                                                        ],
                                                        'UtcCreate' => [
                                                            'description' => '任务创建时间。单位毫秒。',
                                                            'type' => 'string',
                                                            'example' => '1629095713000',
                                                        ],
                                                        'Code' => [
                                                            'description' => '错误码。'."\n"
                                                                ."\n"
                                                                .'- 0：成功。'."\n"
                                                                .'- 非0：失败。',
                                                            'type' => 'string',
                                                            'example' => '0',
                                                        ],
                                                        'Path' => [
                                                            'description' => 'OSS中increment.meta文件的绝对路径。必须"/"开头，非"/"结尾。',
                                                            'type' => 'string',
                                                            'example' => '/xx/xx',
                                                        ],
                                                        'ErrorUrl' => [
                                                            'description' => '结果下载地址。有效期两个小时。',
                                                            'type' => 'string',
                                                            'example' => 'https://imagesearchname.oss-cn-shanghai.aliyuncs.com/xxx',
                                                        ],
                                                        'Id' => [
                                                            'description' => '任务ID。',
                                                            'type' => 'integer',
                                                            'format' => 'int64',
                                                            'example' => '500',
                                                        ],
                                                        'CallbackAddress' => [
                                                            'description' => '任务回调地址。',
                                                            'type' => 'string',
                                                            'example' => 'http://xxxxx',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                    'PageSize' => [
                                        'description' => '查询结果数目。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '10',
                                    ],
                                    'PageNumber' => [
                                        'description' => '结果当前页数。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'TotalCount' => [
                                        'description' => '任务总数量。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '15',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidInstance',
                        'errorMessage' => 'The specified instance name is invalid.',
                    ],
                    [
                        'errorCode' => 'Console.BadRequest',
                        'errorMessage' => 'The request has invalid parameters.',
                    ],
                    [
                        'errorCode' => 'Console.InstanceNotFound',
                        'errorMessage' => 'The specified ImageSearch instance is not found.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'Console.LoginError',
                        'errorMessage' => 'Check login failed.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Console.NoPermission',
                        'errorMessage' => 'You are not authorized to this operation.',
                    ],
                ],
                409 => [
                    [
                        'errorCode' => 'Console.InstanceStatusError',
                        'errorMessage' => 'Current Instance status not supported this opreate.',
                    ],
                    [
                        'errorCode' => 'Console.OrderStatusError',
                        'errorMessage' => 'Current Order status not supported this opreate.',
                    ],
                    [
                        'errorCode' => 'Console.IncrementStatusError',
                        'errorMessage' => 'Current Increment status not supported this opreate.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'Console.InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error.',
                    ],
                    [
                        'errorCode' => 'Console.CallServiceError',
                        'errorMessage' => 'Fail to call service.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"B3137727-7D6E-488C-BA21-0E034C38A879\\",\\n  \\"Data\\": {\\n    \\"Increments\\": {\\n      \\"Instance\\": [\\n        {\\n          \\"Msg\\": \\"sucess\\",\\n          \\"Status\\": \\"SUCCESS\\",\\n          \\"UtcModified\\": 1629095760000,\\n          \\"BucketName\\": \\"bucketName\\",\\n          \\"UtcCreate\\": \\"1629095713000\\",\\n          \\"Code\\": \\"0\\",\\n          \\"Path\\": \\"/xx/xx\\",\\n          \\"ErrorUrl\\": \\"https://imagesearchname.oss-cn-shanghai.aliyuncs.com/xxx\\",\\n          \\"Id\\": 500,\\n          \\"CallbackAddress\\": \\"http://xxxxx\\"\\n        }\\n      ]\\n    },\\n    \\"PageSize\\": 10,\\n    \\"PageNumber\\": 1,\\n    \\"TotalCount\\": 15\\n  }\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
            'title' => '查询批量任务',
            'description' => '## 使用说明'."\n"
                .'本接口用于向图像搜索实例中查询批量任务。'."\n"
                .'> 如需了解更多产品详情和获取技术支持，请单击[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)或通过钉钉群（35035130）联系我们。'."\n"
                ."\n"
                .'## QPS限制'."\n"
                .'查询操作默认的并发量为1，也就是每秒钟最多处理1个请求。',
            'extraInfo' => '## 错误码'."\n"
                .'请参见[错误码](~~66619~~)。',
        ],
        'UpdateImage' => [
            'summary' => '本文为您介绍UpdateImage接口的语法及示例，用于向图像搜索实例中修改图片信息。',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'InstanceName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '图搜实例名称。最多支持20个字符。'."\n"
                            .'如果已经购买图搜实例可登录[图像搜索管控台](https://imagesearch.console.aliyun.com/)查看。'."\n"
                            .'如果没有购买图搜实例可参考[开通服务](~~179178~~)和[创建实例](~~66569~~)。'."\n"
                            .'>这里的实例名称并非实例ID，使用时请区分。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'demoinstance1',
                    ],
                ],
                [
                    'name' => 'ProductId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '商品ID，最多支持512个字符。'."\n"
                            ."\n"
                            .'>一个商品可以有多张图片。根据实际情况自定义参数值。比如：上衣001号、裤子002号等。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '2092061_1',
                    ],
                ],
                [
                    'name' => 'PicName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => ' 图片名称，最多支持512个字符。'."\n"
                            .'> - ProductId和PicName唯一确定一张图片。'."\n"
                            .'- 如果多次添加图片具有相同的ProductId和PicName，以最后一次添加为准，前面添加的图片将被覆盖。'."\n",
                        'type' => 'string',
                        'required' => true,
                        'example' => 'namexxx.jpg',
                    ],
                ],
                [
                    'name' => 'CustomContent',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '用户自定义的内容，最多支持4096个字符。'."\n"
                            .'>调用"[根据图片查询图片](https://help.aliyun.com/document_detail/202282.html)"接口时会返回该字段。例如可添加图片的描述等文本。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zidingyi',
                    ],
                ],
                [
                    'name' => 'IntAttr',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '整数类型属性，可用于查询时过滤，查询时会返回该字段。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '2',
                    ],
                ],
                [
                    'name' => 'StrAttr',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '字符串类型属性，最多支持128个字符。可用于查询时过滤，查询时会返回该字段。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ss',
                    ],
                ],
                [
                    'name' => 'IntAttr2',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '整数类型属性，可用于查询时过滤，查询时会返回该字段。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '20',
                    ],
                ],
                [
                    'name' => 'StrAttr2',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '字符串类型属性，最多支持128个字符。可用于查询时过滤，查询时会返回该字段。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回对象。',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'title' => 'Id of the request',
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'E0845DE6-52AF-4B50-9F15-51ED4044E6AB',
                            ],
                            'Code' => [
                                'description' => '错误码。'."\n"
                                    ."\n"
                                    .'- 0：成功。'."\n"
                                    .'- 非0：失败。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'BadRequest',
                        'errorMessage' => 'The request has invalid parameters.',
                    ],
                    [
                        'errorCode' => 'InstanceStatusError',
                        'errorMessage' => 'Your instance is unavailable.',
                    ],
                    [
                        'errorCode' => 'InvalidInstance',
                        'errorMessage' => 'The specified instance name is invalid.',
                    ],
                    [
                        'errorCode' => 'NoCaretSeperator',
                        'errorMessage' => 'The body content is missing the ^ separator.',
                    ],
                    [
                        'errorCode' => 'EmptyMeta',
                        'errorMessage' => 'The body content has an empty meta field.',
                    ],
                    [
                        'errorCode' => 'InvalidMetaItem',
                        'errorMessage' => 'The meta field is invalid.',
                    ],
                    [
                        'errorCode' => 'NoPicList',
                        'errorMessage' => 'The body content is missing the pic_list parameter.',
                    ],
                    [
                        'errorCode' => 'InvalidPicList',
                        'errorMessage' => 'The specified pic_list parameter is invalid.',
                    ],
                    [
                        'errorCode' => 'NoSpecifiedPic',
                        'errorMessage' => 'The content of an image is not specified in the HTTP POST body.',
                    ],
                    [
                        'errorCode' => 'NoSpecifiedSearchPic',
                        'errorMessage' => 'The search image is not specified.',
                    ],
                    [
                        'errorCode' => 'InvalidCategory',
                        'errorMessage' => 'The specified category is invalid.',
                    ],
                    [
                        'errorCode' => 'OverflowMaxResultNum',
                        'errorMessage' => 'The specified number of total results exceeds the maximum of 500.',
                    ],
                    [
                        'errorCode' => 'OverflowMaxReturnNum',
                        'errorMessage' => 'The specified number of results for each request exceeds the maximum of 100.',
                    ],
                    [
                        'errorCode' => 'InvalidStartParameter',
                        'errorMessage' => 'The specified parameter s is inavlid.',
                    ],
                    [
                        'errorCode' => 'InvalidNumParameter',
                        'errorMessage' => 'The specified parameter n is invalid.',
                    ],
                    [
                        'errorCode' => 'NoSpecifiedAddPic',
                        'errorMessage' => 'The image to insert is not specified.',
                    ],
                    [
                        'errorCode' => 'NoSpecifiedItemId',
                        'errorMessage' => 'The item_id parameter is not specified.',
                    ],
                    [
                        'errorCode' => 'InvalidIntAttr',
                        'errorMessage' => 'The specified int_attr field is invalid.',
                    ],
                    [
                        'errorCode' => 'UnsupportedPicFormat',
                        'errorMessage' => 'The specified image format is invalid.',
                    ],
                    [
                        'errorCode' => 'InvalidFilterClause',
                        'errorMessage' => 'The specified filtering condition is invalid.',
                    ],
                    [
                        'errorCode' => 'InstanceOverQuota',
                        'errorMessage' => 'The number of items exceeds the limit.',
                    ],
                    [
                        'errorCode' => 'IncorrectOrientation',
                        'errorMessage' => 'The image contains incorrect rotation flags in the meta data.',
                    ],
                    [
                        'errorCode' => 'UnsupportedPicPixels',
                        'errorMessage' => 'The specified pixels is not supported.',
                    ],
                    [
                        'errorCode' => 'SearchTimeout',
                        'errorMessage' => 'The request is timed out.',
                    ],
                    [
                        'errorCode' => 'PicNotExist',
                        'errorMessage' => 'The search picture does not exist.',
                    ],
                    [
                        'errorCode' => 'NoSpecifiedProductId',
                        'errorMessage' => 'The parameter ProductId no specified.',
                    ],
                    [
                        'errorCode' => 'NoSpecifiedPicName',
                        'errorMessage' => 'The parameter PicName no specified.',
                    ],
                    [
                        'errorCode' => 'NoSpecifiedPicContent',
                        'errorMessage' => 'The parameter PicContent no specified.',
                    ],
                    [
                        'errorCode' => 'InvalidType',
                        'errorMessage' => 'The specified parameter Type is not valid.',
                    ],
                    [
                        'errorCode' => 'InvalidProductId',
                        'errorMessage' => 'The specified parameter ProductId is not valid.',
                    ],
                    [
                        'errorCode' => 'InvalidPicName',
                        'errorMessage' => 'The specified parameter PicName is not valid.',
                    ],
                    [
                        'errorCode' => 'InvalidStrAttr',
                        'errorMessage' => 'The specified parameter StrAttr is not valid.',
                    ],
                    [
                        'errorCode' => 'InvalidCustomContent',
                        'errorMessage' => 'The specified parameter CustomContent is not valid.',
                    ],
                    [
                        'errorCode' => 'InvalidPicContent',
                        'errorMessage' => 'The specified parameter PicContent length greater than 4 * 1024 * 1024.',
                    ],
                    [
                        'errorCode' => 'TimeoutForTransferImage',
                        'errorMessage' => 'Timeout after 5 seconds waiting for images transfer to complete.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'NoPermission',
                        'errorMessage' => 'You are not authorized to perform this operation.',
                    ],
                    [
                        'errorCode' => 'DeniedRequest',
                        'errorMessage' => 'Your request was denied due to instance flow control.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'An internal server error occurred.',
                    ],
                    [
                        'errorCode' => 'NetworkException',
                        'errorMessage' => 'A network error occurred.',
                    ],
                    [
                        'errorCode' => 'RequestTimeout',
                        'errorMessage' => '​The request is timeout.',
                    ],
                    [
                        'errorCode' => 'UnsupportedInstanceType',
                        'errorMessage' => 'The instance type is not supported.',
                    ],
                    [
                        'errorCode' => 'UnsupportedOperationType',
                        'errorMessage' => 'The specified action is not supported.',
                    ],
                    [
                        'errorCode' => 'ExtractFeatureTimeout',
                        'errorMessage' => 'The request was timed out while extracting features.',
                    ],
                    [
                        'errorCode' => 'AccessEngineFailed',
                        'errorMessage' => 'An error occurred while accessing the search engine.',
                    ],
                    [
                        'errorCode' => 'InternalOssError',
                        'errorMessage' => 'An internal OAS error occurred.',
                    ],
                    [
                        'errorCode' => 'InternalSwiftError',
                        'errorMessage' => 'An internal SWIFT error occurred.',
                    ],
                    [
                        'errorCode' => 'InternalTableStoreError',
                        'errorMessage' => 'An internal Table Store error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"E0845DE6-52AF-4B50-9F15-51ED4044E6AB\\",\\n  \\"Code\\": 0,\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
            'title' => '修改图片',
            'description' => '## 使用说明'."\n"
                .'本接口用于向图像搜索实例中根据商品ID和图片名称去修改图片信息。'."\n"
                .'> - 实例有创建时间要求。'."\n"
                .'<props="china">'."\n"
                .'- 上海、杭州区域2021年6月份后创建的实例可用。其他区域正常使用。'."\n"
                .'</props>'."\n"
                .'<props="intl">'."\n"
                .'- 新加坡区域2021年12月份后创建的实例可用。其他区域暂不可用。'."\n"
                .'</props>'."\n"
                .'- 如需了解更多产品详情和获取技术支持，请单击[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)或通过钉钉群（35035130）联系我们。'."\n"
                ."\n\n"
                .'## QPS限制'."\n"
                .'修改操作默认的并发量为20，也就是每秒钟最多处理20个请求。'."\n"
                ."\n\n",
            'extraInfo' => '## 错误码'."\n"
                .'请参见[错误码](~~66619~~)。',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'imagesearch.cn-beijing.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'imagesearch.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'imagesearch.cn-shanghai.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'imagesearch.cn-shenzhen.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong',
            'endpoint' => 'imagesearch.cn-hongkong.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-1',
            'endpoint' => 'imagesearch.ap-northeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'imagesearch.ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-2',
            'endpoint' => 'imagesearch.ap-southeast-2.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-central-1',
            'endpoint' => 'imagesearch.eu-central-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-south-1',
            'endpoint' => 'imagesearch.ap-south-1.aliyuncs.com',
        ],
    ],
];
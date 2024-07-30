<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'ROA',
        'product' => 'ImageSearch',
        'version' => '2019-03-25',
    ],
    'directories' => [
        [
            'id' => 64375,
            'title' => '搜索',
            'type' => 'directory',
            'children' => [
                'SearchImage',
            ],
        ],
        [
            'id' => 64377,
            'title' => '管理',
            'type' => 'directory',
            'children' => [
                'AddImage',
                'DeleteImage',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'SearchImage' => [
            'path' => '/v2/image/search',
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
                        'example' => '88888888',
                    ],
                ],
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
                        'example' => 'phimagesearch',
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
                        'required' => false,
                        'example' => 'pro-goods-25376',
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
                        'required' => false,
                        'example' => 'goods-23312-1',
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
                            .' - 图片中不能包含旋转信息。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'iVBORw0KGgoAAAANSUhEUgAAAV8AAADwAQMAAACdRvVNAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAADUExURQAAAKd6PdoAAAABdFJOUyR85Ty3AAAAIUlEQVRo3u3BAQ0AAADCoPdPbQ8HFAAAAAAAAAAAAADPBiowAAGR02EbAAAAAElFTkSuQmCC',
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
                            .'<props="china">'."\n"
                            .'> - 若用户设置了Region，则不论Crop参数为何值，都将以用户输入Region进行搜索。'."\n"
                            .'- 对于布料图片搜索，此参数会被忽略，系统会以整张图进行搜索。'."\n"
                            .'</props>'."\n"
                            ."\n"
                            .'<props="intl">'."\n"
                            .'> 对于布料图片搜索，此参数会被忽略，系统会以整张图进行搜索。'."\n"
                            .'</props>'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => '32,282,43,256',
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
                        'example' => '10',
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
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'Type',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '搜索类型。包括：'."\n"
                            .'- SearchByPic（默认）：根据图片搜索相似图片。'."\n"
                            .'- SearchByName：根据已添加的图片搜索相似图片。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'SearchByPic',
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
                            .'- int_attr = 1000 AND str_attr = "value1"。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '(int_attr >= 100000000 AND int_attr < 200000000 AND int_attr=100000252 AND str_attr=\\"87\\")',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Msg' => [
                                'description' => '错误信息。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'success',
                                'default' => 'success',
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
                                'example' => '3033A0A7-36DA-5AC9-9973-953C38EBDFA9',
                            ],
                            'Auctions' => [
                                'description' => '所有返回的商品描述信息。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '所有返回的商品描述信息。',
                                    'type' => 'object',
                                    'properties' => [
                                        'PicName' => [
                                            'description' => '图片名称。',
                                            'type' => 'string',
                                            'example' => '2092061_1.jpg',
                                        ],
                                        'IntAttr' => [
                                            'description' => '整数类型属性。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '2',
                                        ],
                                        'CategoryId' => [
                                            'description' => '图片类目。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '8888888',
                                        ],
                                        'ProductId' => [
                                            'description' => '商品ID。',
                                            'type' => 'string',
                                            'example' => '2092061_1',
                                        ],
                                        'StrAttr' => [
                                            'description' => '字符串类型属性。',
                                            'type' => 'string',
                                            'example' => 'ss',
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
                                            'type' => 'number',
                                            'format' => 'float',
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
                                        'description' => '    主体识别结果。'."\n"
                                            .'图片的主体区域，格式为x1,x2,y1,y2，其中 x1,y1 是左上角的点，x2，y2是右下角的点。若用户请求中指定了主体区域，则以请求中为准。',
                                        'type' => 'string',
                                        'example' => '94,691,206,650',
                                    ],
                                    'CategoryId' => [
                                        'description' => '    类目预测结果。'."\n"
                                            .'若用户请求中指定了类目，则以请求中为准。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '88888888',
                                    ],
                                    'MultiRegion' => [
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Region' => [
                                                    'type' => 'string',
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
                409 => [
                    [
                        'errorCode' => 'InstanceStatusError',
                        'errorMessage' => 'Your instance is unavailable.',
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
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Msg\\": \\"success\\",\\n  \\"Head\\": {\\n    \\"DocsFound\\": 10,\\n    \\"DocsReturn\\": 10000,\\n    \\"SearchTime\\": 95\\n  },\\n  \\"RequestId\\": \\"3033A0A7-36DA-5AC9-9973-953C38EBDFA9\\",\\n  \\"Auctions\\": [\\n    {\\n      \\"PicName\\": \\"2092061_1.jpg\\",\\n      \\"IntAttr\\": 2,\\n      \\"CategoryId\\": 8888888,\\n      \\"ProductId\\": \\"2092061_1\\",\\n      \\"StrAttr\\": \\"ss\\",\\n      \\"SortExprValues\\": \\"5.37633353624177e+24;0\\",\\n      \\"CustomContent\\": \\"zidingyi\\",\\n      \\"Score\\": 0\\n    }\\n  ],\\n  \\"Code\\": 0,\\n  \\"PicInfo\\": {\\n    \\"Region\\": \\"94,691,206,650\\",\\n    \\"CategoryId\\": 88888888,\\n    \\"MultiRegion\\": [\\n      {\\n        \\"Region\\": \\"\\"\\n      }\\n    ],\\n    \\"AllCategories\\": [\\n      {\\n        \\"Name\\": \\"other\\",\\n        \\"Id\\": 88888888\\n      }\\n    ]\\n  },\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '搜索图片',
            'summary' => '本文为您介绍searchbyimage接口的语法及示例，用于向淘宝联盟版在线调用。',
            'description' => '### QPS限制'."\n"
                .'查询操作默认的最大访问频率可在控制台中查看，为您购买时所选择的访问频次（QPS），当前支持1QPS、5QPS、10QPS。'."\n"
                ."\n"
                .'### SDK版本说明'."\n"
                .'图像SDK版本升级到V3.1.1，可使用“多主体识别”、“相似性分数”功能。请参见[Java SDK](~~179188~~)。',
        ],
        'AddImage' => [
            'path' => '/v2/image/add',
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
            'operationType' => 'readAndWrite',
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
                            .' - 图片中不能包含旋转信息。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'AAAANSUhEUgAAAPcAAAEVCAYAAAA8d3NuAAAAAXNSR0IArs......RK5CYII=',
                    ],
                ],
                [
                    'name' => 'Crop',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否需要进行主体识别。默认true。'."\n"
                            .' - 为true时，由系统进行主体识别，以识别的主体进行搜索，主体识别结果可在Response中获取。'."\n"
                            .'- 为false时，则不进行主体识别，以整张图进行搜索。'."\n"
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
                        'description' => '图片的主体区域，格式为`x1,x2,y1,y2,` 其中`x1,y1` 是左上角的点，`x2,y2`是右下角的点。'."\n"
                            .'<props="china">'."\n"
                            .'> - 若用户设置了Region，则不论Crop参数为何值，都将以用户输入Region进行搜索。'."\n"
                            .'- 对于布料图片搜索，此参数会被忽略，系统会以整张图进行搜索。'."\n"
                            .'</props>'."\n"
                            .'<props="intl">'."\n"
                            .'> 对于布料图片搜索，此参数会被忽略，系统会以整张图进行搜索。'."\n"
                            .'</props>'."\n",
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
                        'example' => '{\\"merchant_id\\":\\"46-718f-da04-4099b2f144ae\\",\\"category_ids\\":[\\"1234\\"],\\"image_index\\":0,\\"updated\\":5678}',
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
                        'description' => '字符串类型属性，最多支持128个字符。可用于查询时过滤，查询时会返回该字段。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ss',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
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
                                'description' => '类目预测、主体识别结果等信息。',
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
                409 => [
                    [
                        'errorCode' => 'InstanceStatusError',
                        'errorMessage' => 'Your instance is unavailable.',
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
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"E0845DE6-52AF-4B50-9F15-51ED4044E6AB\\",\\n  \\"Code\\": 0,\\n  \\"PicInfo\\": {\\n    \\"Region\\": \\"94,691,206,650\\",\\n    \\"CategoryId\\": 88888888\\n  },\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '添加图片数据',
            'summary' => '本文为您介绍AddImage接口的语法及示例，用于向图像搜索实例中添加图片信息。',
            'description' => '### 使用说明'."\n"
                .'本接口用于向图像搜索实例中添加图片信息。'."\n"
                ."\n"
                .'### QPS限制'."\n"
                .'10W图片容量的实例默认的并发量为1，也就是每秒钟最多处理1个图片新增请求。'."\n"
                ."\n"
                .'其他图片容量的实例默认的并发量为5，也就是每秒钟最多处理5个图片新增请求。',
        ],
        'DeleteImage' => [
            'path' => '/v2/image/delete',
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
                            ."\n"
                            .'如果已经购买图搜实例可登录[图像搜索管控台](https://imagesearch.console.aliyun.com)查看。'."\n"
                            ."\n"
                            .'如果没有购买图搜实例可参考开通服务和创建实例。'."\n"
                            ."\n"
                            .'> 这里的实例名称并非实例ID，使用时请区分。',
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
                        'example' => '179443',
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
                        'required' => false,
                        'example' => '2092061_1.jpg',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
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
                409 => [
                    [
                        'errorCode' => 'InstanceStatusError',
                        'errorMessage' => 'Your instance is unavailable.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalException',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"0703956F-9BCC-48FA-99F7-96C0BF449C69\\",\\n  \\"Code\\": 0,\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '删除图片',
            'summary' => '本文为您介绍DeleteImage接口的语法及示例，用于向图像搜索实例中删除图片信息。',
            'description' => '### 使用说明'."\n"
                .'本接口用于向图像搜索实例中删除图片信息。'."\n"
                ."\n"
                .'> 如果指定图片在图像搜索实例中不存在，该接口依然会返回成功。不能用返回结果来判断图片是否存在。'."\n"
                ."\n"
                .'### QPS限制'."\n"
                .'删除操作默认的并发量为20，也就是每秒钟最多处理20个删除请求。',
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
<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'ImageSearch',
        'version' => '2021-05-01',
    ],
    'directories' => [
        [
            'id' => 0,
            'title' => '其它',
            'type' => 'directory',
            'children' => [
                'SearchByUrl',
                'SearchByPic',
                'GetProductInfoByIds',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'SearchByUrl' => [
            'summary' => '本文为您介绍SearchByUrl接口的语法及示例，用于向淘宝联盟版在线调用。',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'PicUrl',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '图片URL。必须是HTTP或HTTPS开头。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'https://oss-test.oss-cn-shanghai.aliyuncs.com/xxxx.jpg',
                    ],
                ],
                [
                    'name' => 'CategoryId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '图片类目。具体请参考[类目参考](~~179184~~)。'."\n"
                            .'> 如果设置类目，则以设置的为准；如果不设置类目，则由系统进行类目预测，预测的类目结果可以在Response中获取 。',
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
                    'name' => 'Pid',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'PID。具体请参考[PID](https://help.alimama.com/?spm=a219t.23786078.0.0.290575a55P1LBx#!/search/index?spm=&keyWord=PID&knowledgeId=5625118&categoryId=1000040170)。'."\n"
                            .'> 使用V1.1.0及以上版本的SDK可用该字段。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'mm_xxx_xxx_xxx',
                    ],
                ],
                [
                    'name' => 'UserType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '卖家类型。'."\n"
                            ."\n"
                            .'- 1：天猫；'."\n"
                            ."\n"
                            .'- 0：淘宝。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'maximum' => '1',
                        'minimum' => '0',
                        'example' => '0',
                        'enum' => [
                            '0',
                            '1',
                        ],
                    ],
                ],
                [
                    'name' => 'Crop',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否需要进行主体识别。默认true。'."\n"
                            .' - 为true时，由系统进行主体识别。建议使用此方式。'."\n"
                            .'- 为false时，则不进行主体识别，以整张图进行搜索。'."\n"
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
                            .'> 若用户设置了Region，则不论Crop参数为何值，都将以用户输入Region进行搜索。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '280,486,232,351',
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
                    'name' => 'Num',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '返回结果的数目。取值范围：1~20。默认值为10。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '20',
                        'minimum' => '1',
                        'example' => '10',
                        'default' => '10',
                    ],
                ],
                [
                    'name' => 'Fields',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '需要返回的字段list。不同的字段用逗号分隔。默认PicUrl,ReservePrice,Title,Url,ZkFinalPrice字段必返回。可从下面值中选择填写ItemId,Title,PicUrl,ReservePrice,ZkFinalPrice,UserType,Provcity,Nick,SellerId,Volume,LevelOneCategoryName,CategoryName,CouponTotalCount,CouponRemainCount,CouponStartTime,CouponEndTime,CouponStartFee,CouponAmount,CouponInfo,CommissionRate,CouponShareUrl,Url,ShopTitle。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Url,UserType',
                    ],
                ],
                [
                    'name' => 'RelationId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '渠道ID。用于淘宝联盟中的渠道区分。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1125526',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'Success' => [
                                'description' => '请求是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Code' => [
                                'description' => '    错误码。'."\n"
                                    ."\n"
                                    .'- 0：成功，'."\n"
                                    ."\n"
                                    .'- 非0：失败。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                            ],
                            'Message' => [
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'Data' => [
                                'description' => '识别结果集合。',
                                'type' => 'object',
                                'properties' => [
                                    'Auctions' => [
                                        'description' => '识别结果。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '查询结果内容。',
                                            'type' => 'object',
                                            'properties' => [
                                                'Result' => [
                                                    'description' => '查询结果。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'ItemId' => [
                                                            'description' => '商品信息-商品ID。',
                                                            'type' => 'string',
                                                            'example' => '123',
                                                        ],
                                                        'Title' => [
                                                            'description' => '商品信息-商品标题。',
                                                            'type' => 'string',
                                                            'example' => 'xxx套装',
                                                        ],
                                                        'ShortTitle' => [
                                                            'description' => '商品信息-商品短标题（移动端建议使用）。',
                                                            'type' => 'string',
                                                            'example' => 'yyy套装',
                                                        ],
                                                        'SubTitle' => [
                                                            'description' => '商品信息-商品子标题。',
                                                            'type' => 'string',
                                                            'example' => 'xxx套装',
                                                        ],
                                                        'PicUrl' => [
                                                            'description' => '商品信息-商品主图。',
                                                            'type' => 'string',
                                                            'example' => '//img.alicdn.com/i1/FXXXXXXXXXX.jpg',
                                                        ],
                                                        'ReservePrice' => [
                                                            'description' => '商品信息-一口价通常显示为划线价。'."\n",
                                                            'type' => 'string',
                                                            'example' => '158',
                                                        ],
                                                        'ZkFinalPrice' => [
                                                            'description' => '商品信息-在线售价(元)。若属于预售商品，付定金时间内，在线售卖价=预售价格。',
                                                            'type' => 'string',
                                                            'example' => '98',
                                                        ],
                                                        'PriceAfterCoupon' => [
                                                            'description' => '商品信息-券后价。',
                                                            'type' => 'string',
                                                            'example' => '90',
                                                        ],
                                                        'UserType' => [
                                                            'description' => '店铺信息-卖家类型。'."\n"
                                                                ."\n"
                                                                .'- 1：天猫，'."\n"
                                                                ."\n"
                                                                .'- 0：淘宝。',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '0',
                                                        ],
                                                        'Provcity' => [
                                                            'description' => '商品信息-宝贝所在地。',
                                                            'type' => 'string',
                                                            'example' => '广东 深圳',
                                                        ],
                                                        'Nick' => [
                                                            'description' => '店铺信息-卖家昵称。'."\n",
                                                            'type' => 'string',
                                                            'example' => '衣服专卖店',
                                                        ],
                                                        'SellerId' => [
                                                            'description' => '店铺信息-卖家ID。',
                                                            'type' => 'string',
                                                            'example' => '32590610',
                                                        ],
                                                        'Volume' => [
                                                            'description' => '商品信息-30天销量。',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '500',
                                                        ],
                                                        'LevelOneCategoryName' => [
                                                            'description' => '商品信息-叶子类目名称。',
                                                            'type' => 'string',
                                                            'example' => '童装/婴儿装/亲子装',
                                                        ],
                                                        'CategoryName' => [
                                                            'description' => '商品信息-一级类目名称。',
                                                            'type' => 'string',
                                                            'example' => '连衣裙',
                                                        ],
                                                        'CouponTotalCount' => [
                                                            'description' => '优惠券信息-优惠券总量。',
                                                            'type' => 'string',
                                                            'example' => '100000',
                                                        ],
                                                        'CouponRemainCount' => [
                                                            'description' => '优惠券信息-优惠券剩余量。',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '0',
                                                        ],
                                                        'CouponStartTime' => [
                                                            'description' => '优惠券信息-优惠券开始时间。',
                                                            'type' => 'string',
                                                            'example' => '2021-05-01',
                                                        ],
                                                        'CouponEndTime' => [
                                                            'description' => '优惠券信息-优惠券结束时间。',
                                                            'type' => 'string',
                                                            'example' => '2021-06-01',
                                                        ],
                                                        'CouponStartFee' => [
                                                            'description' => '优惠券信息-优惠券启用门槛，满X元可用。'."\n"
                                                                .'如：满299元减20元。',
                                                            'type' => 'string',
                                                            'example' => '98.000000',
                                                        ],
                                                        'CouponAmount' => [
                                                            'description' => '优惠券（元），若属于预售商品，该优惠券付尾款可用，付定金不可用。',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '5',
                                                        ],
                                                        'CouponInfo' => [
                                                            'description' => '优惠券信息-优惠券满减信息。',
                                                            'type' => 'string',
                                                            'example' => '满98.0元减5.0元',
                                                        ],
                                                        'CommissionRate' => [
                                                            'description' => '商品信息-佣金比率。'."\n"
                                                                .'如：1550表示15.5%。',
                                                            'type' => 'string',
                                                            'example' => '180',
                                                        ],
                                                        'CouponShareUrl' => [
                                                            'description' => '链接-宝贝+券二合一页面链接。',
                                                            'type' => 'string',
                                                            'example' => '//uland.taobao.com/cxxxxxx',
                                                        ],
                                                        'DeeplinkCouponShareUrl' => [
                                                            'description' => '优惠券-手淘唤醒链接。',
                                                            'type' => 'string',
                                                            'example' => 'tbopen://m.taobao.com/tbopen/index.html?',
                                                        ],
                                                        'Url' => [
                                                            'description' => '链接-宝贝推广链接。',
                                                            'type' => 'string',
                                                            'example' => '//s.click.taobao.com/t?xxxxxx',
                                                        ],
                                                        'DeeplinkUrl' => [
                                                            'description' => '链接-宝贝推广的深度唤醒链接。',
                                                            'type' => 'string',
                                                            'example' => 'tbopen://m.taobao.com/tbopen/index.html?',
                                                        ],
                                                        'ShopTitle' => [
                                                            'description' => '店铺信息-店铺名称。',
                                                            'type' => 'string',
                                                            'example' => 'xx旗舰店',
                                                        ],
                                                        'MaxCommission' => [
                                                            'description' => '商品信息-高佣信息。',
                                                            'type' => 'object',
                                                            'properties' => [
                                                                'MaxCommissionRate' => [
                                                                    'description' => '商品信息-最优佣金率。 如：20.4表示佣金率为20.4%。',
                                                                    'type' => 'string',
                                                                    'example' => '20.4',
                                                                ],
                                                                'MaxCommissionClickUrl' => [
                                                                    'description' => '商品信息-链接-最优佣金率宝贝推广链接。',
                                                                    'type' => 'string',
                                                                    'example' => 'https://s.click.taobao.com/t?e=xxxx',
                                                                ],
                                                                'MaxCommissionCouponShareUrl' => [
                                                                    'description' => '商品信息-链接-最优佣金率宝贝+券二合一页面链接。',
                                                                    'type' => 'string',
                                                                    'example' => 'https://s.click.taobao.com/t?e=xxxx',
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'RankScore' => [
                                                    'description' => '商品相似性的排名分数。取值范围：0~1。',
                                                    'type' => 'number',
                                                    'format' => 'float',
                                                    'example' => '0.337',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'B3137727-7D6E-488C-BA21-0E034C38A879',
                            ],
                            'PicInfo' => [
                                'description' => '类目预测、主体识别结果等信息。',
                                'type' => 'object',
                                'properties' => [
                                    'MainRegion' => [
                                        'description' => '主体多类目信息。',
                                        'type' => 'object',
                                        'properties' => [
                                            'Region' => [
                                                'description' => '主体识别结果。图片的主体区域，格式为x1,x2,y1,y2，其中 x1,y1 是左上角的点，x2，y2是右下角的点。若用户请求中指定了主体区域，则以请求中为准。',
                                                'type' => 'string',
                                                'example' => '280,486,232,351',
                                            ],
                                            'MultiCategoryId' => [
                                                'description' => '主体预测区域的类目预测结果结合。',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => '主体预测区域的类目预测结果。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'CategoryId' => [
                                                            'description' => '图片类目。具体请参考[类目参考](~~179184~~)。',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '88888888',
                                                        ],
                                                        'Score' => [
                                                            'description' => '预测的类目得分。取值范围：0~1。',
                                                            'type' => 'number',
                                                            'format' => 'float',
                                                            'example' => '0.34',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                    'MultiRegion' => [
                                        'description' => '主体识别结果集合。',
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
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'PidNotExist',
                        'errorMessage' => 'The parameter specified Pid not exist',
                    ],
                    [
                        'errorCode' => 'InvalidPid',
                        'errorMessage' => 'The parameter Pid no specified',
                    ],
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
                        'errorCode' => 'NoSpecifiedPicContent',
                        'errorMessage' => 'The parameter PicContent no specified.',
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
                        'errorMessage' => 'The specified parameter PicUrl is not valid.',
                    ],
                    [
                        'errorCode' => 'NotRegisterBeforeInvoke',
                        'errorMessage' => 'Need register token: pid before invoke.',
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
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"success\\",\\n  \\"Data\\": {\\n    \\"Auctions\\": [\\n      {\\n        \\"Result\\": {\\n          \\"ItemId\\": \\"123\\",\\n          \\"Title\\": \\"xxx套装\\",\\n          \\"ShortTitle\\": \\"yyy套装\\",\\n          \\"SubTitle\\": \\"xxx套装\\",\\n          \\"PicUrl\\": \\"//img.alicdn.com/i1/FXXXXXXXXXX.jpg\\",\\n          \\"ReservePrice\\": \\"158\\",\\n          \\"ZkFinalPrice\\": \\"98\\",\\n          \\"PriceAfterCoupon\\": \\"90\\",\\n          \\"UserType\\": 0,\\n          \\"Provcity\\": \\"广东 深圳\\",\\n          \\"Nick\\": \\"衣服专卖店\\",\\n          \\"SellerId\\": \\"32590610\\",\\n          \\"Volume\\": 500,\\n          \\"LevelOneCategoryName\\": \\"童装/婴儿装/亲子装\\",\\n          \\"CategoryName\\": \\"连衣裙\\",\\n          \\"CouponTotalCount\\": \\"100000\\",\\n          \\"CouponRemainCount\\": 0,\\n          \\"CouponStartTime\\": \\"2021-05-01\\",\\n          \\"CouponEndTime\\": \\"2021-06-01\\",\\n          \\"CouponStartFee\\": \\"98.000000\\",\\n          \\"CouponAmount\\": 5,\\n          \\"CouponInfo\\": \\"满98.0元减5.0元\\",\\n          \\"CommissionRate\\": \\"180\\",\\n          \\"CouponShareUrl\\": \\"//uland.taobao.com/cxxxxxx\\",\\n          \\"DeeplinkCouponShareUrl\\": \\"tbopen://m.taobao.com/tbopen/index.html?\\",\\n          \\"Url\\": \\"//s.click.taobao.com/t?xxxxxx\\",\\n          \\"DeeplinkUrl\\": \\"tbopen://m.taobao.com/tbopen/index.html?\\",\\n          \\"ShopTitle\\": \\"xx旗舰店\\",\\n          \\"MaxCommission\\": {\\n            \\"MaxCommissionRate\\": \\"20.4\\",\\n            \\"MaxCommissionClickUrl\\": \\"https://s.click.taobao.com/t?e=xxxx\\",\\n            \\"MaxCommissionCouponShareUrl\\": \\"https://s.click.taobao.com/t?e=xxxx\\"\\n          }\\n        },\\n        \\"RankScore\\": 0.337\\n      }\\n    ]\\n  },\\n  \\"RequestId\\": \\"B3137727-7D6E-488C-BA21-0E034C38A879\\",\\n  \\"PicInfo\\": {\\n    \\"MainRegion\\": {\\n      \\"Region\\": \\"280,486,232,351\\",\\n      \\"MultiCategoryId\\": [\\n        {\\n          \\"CategoryId\\": 88888888,\\n          \\"Score\\": 0.34\\n        }\\n      ]\\n    },\\n    \\"MultiRegion\\": [\\n      {\\n        \\"Region\\": \\"280,486,232,351\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
            'title' => '根据图片URL查询',
            'description' => '## 使用说明'."\n"
                .'本接口用于向淘宝联盟版在线调用。'."\n"
                ."\n"
                .'## QPS限制'."\n"
                .'查询操作默认5QPS。',
            'extraInfo' => '## 错误码'."\n"
                .'请参见[错误码](~~66619~~)。',
        ],
        'SearchByPic' => [
            'summary' => '本文为您介绍SearchByPic接口的语法及示例，用于向淘宝联盟版在线调用。',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'PicContent',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '图片内容。'."\n"
                            .' - 图片大小要求不超过4 MB。'."\n"
                            .' - 图片格式：PNG、JPG、JPEG、BMP、GIF、WEBP、TIFF、PPM。'."\n"
                            .' - 传输等待时间不超过5秒。'."\n"
                            .' - 图片中不能包含旋转信息。'."\n"
                            .'> - 如使用SDK，则无需填写PicContent字段，SDK已将本字段封装为PicContentObject字段无需处理。'."\n"
                            ."\n",
                        'type' => 'string',
                        'required' => true,
                        'example' => 'xxx',
                        'isFileTransferUrl' => true,
                    ],
                ],
                [
                    'name' => 'CategoryId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '图片类目。具体请参考[类目参考](~~179184~~)。'."\n"
                            .'> 如果设置类目，则以设置的为准；如果不设置类目，则由系统进行类目预测，预测的类目结果可以在Response中获取 。',
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
                    'name' => 'Pid',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'PID。具体请参考[PID](https://help.alimama.com/?spm=a219t.23786078.0.0.290575a55P1LBx#!/search/index?spm=&keyWord=PID&knowledgeId=5625118&categoryId=1000040170)。'."\n"
                            .'> 使用V1.1.0及以上版本的SDK可用该字段。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'mm_xxx_xxx_xxx',
                    ],
                ],
                [
                    'name' => 'UserType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '卖家类型。'."\n"
                            ."\n"
                            .'- 1：天猫，'."\n"
                            ."\n"
                            .'- 0：淘宝。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'maximum' => '1',
                        'minimum' => '0',
                        'example' => '0',
                        'enum' => [
                            '0',
                            '1',
                        ],
                    ],
                ],
                [
                    'name' => 'Crop',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否需要进行主体识别。默认true。'."\n"
                            .' - 为true时，由系统进行主体识别。建议使用此方式。'."\n"
                            .'- 为false时，则不进行主体识别，以整张图进行搜索。'."\n"
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
                            .'> 若用户设置了Region，则不论Crop参数为何值，都将以用户输入Region进行搜索。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '280,486,232,351',
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
                    'name' => 'Num',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '返回结果的数目。取值范围：1~20。默认值为10。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '20',
                        'minimum' => '1',
                        'example' => '10',
                        'default' => '10',
                    ],
                ],
                [
                    'name' => 'Fields',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '需要返回的字段list。不同的字段用逗号分割。默认PicUrl,ReservePrice,Title,Url,ZkFinalPrice字段必返回。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Url,UserType',
                    ],
                ],
                [
                    'name' => 'RelationId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '渠道ID。用于淘宝联盟中的渠道区分。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1125526',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'Success' => [
                                'description' => '请求是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Code' => [
                                'description' => '    错误码。'."\n"
                                    ."\n"
                                    .'- 0：成功，'."\n"
                                    ."\n"
                                    .'- 非0：失败。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                            ],
                            'Message' => [
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'sucess',
                            ],
                            'Data' => [
                                'description' => '识别结果集合。',
                                'type' => 'object',
                                'properties' => [
                                    'Auctions' => [
                                        'description' => '识别结果。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '查询结果内容。',
                                            'type' => 'object',
                                            'properties' => [
                                                'Result' => [
                                                    'description' => '查询结果。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'ItemId' => [
                                                            'description' => '商品信息-商品ID。',
                                                            'type' => 'string',
                                                            'example' => '123',
                                                        ],
                                                        'Title' => [
                                                            'description' => '商品信息-商品标题。',
                                                            'type' => 'string',
                                                            'example' => 'xxx套装',
                                                        ],
                                                        'ShortTitle' => [
                                                            'description' => '商品信息-商品短标题（移动端建议使用）。',
                                                            'type' => 'string',
                                                            'example' => 'yyy套装',
                                                        ],
                                                        'SubTitle' => [
                                                            'description' => '商品信息-商品子标题。',
                                                            'type' => 'string',
                                                            'example' => 'xxx套装',
                                                        ],
                                                        'PicUrl' => [
                                                            'description' => '商品信息-商品主图。',
                                                            'type' => 'string',
                                                            'example' => '//img.alicdn.com/i1/FXXXXXXXXXX.jpg',
                                                        ],
                                                        'ReservePrice' => [
                                                            'description' => '商品信息-一口价通常显示为划线价。',
                                                            'type' => 'string',
                                                            'example' => '158',
                                                        ],
                                                        'ZkFinalPrice' => [
                                                            'description' => '商品信息-在线售价(元)。若属于预售商品，付定金时间内，在线售卖价=预售价格。',
                                                            'type' => 'string',
                                                            'example' => '98',
                                                        ],
                                                        'PriceAfterCoupon' => [
                                                            'description' => '商品信息-券后价。',
                                                            'type' => 'string',
                                                            'example' => '90',
                                                        ],
                                                        'UserType' => [
                                                            'description' => '店铺信息-卖家类型。'."\n"
                                                                ."\n"
                                                                .'- 1：天猫，'."\n"
                                                                ."\n"
                                                                .'- 0：淘宝。',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '0',
                                                        ],
                                                        'Provcity' => [
                                                            'description' => '商品信息-宝贝所在地。',
                                                            'type' => 'string',
                                                            'example' => '广东 深圳',
                                                        ],
                                                        'Nick' => [
                                                            'description' => '店铺信息-卖家昵称。',
                                                            'type' => 'string',
                                                            'example' => '衣服专卖店',
                                                        ],
                                                        'SellerId' => [
                                                            'description' => '店铺信息-卖家ID。',
                                                            'type' => 'string',
                                                            'example' => '32590610',
                                                        ],
                                                        'Volume' => [
                                                            'description' => '商品信息-30天销量。',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '500',
                                                        ],
                                                        'LevelOneCategoryName' => [
                                                            'description' => '商品信息-叶子类目名称。',
                                                            'type' => 'string',
                                                            'example' => '童装/婴儿装/亲子装',
                                                        ],
                                                        'CategoryName' => [
                                                            'description' => '商品信息-一级类目名称。',
                                                            'type' => 'string',
                                                            'example' => '连衣裙',
                                                        ],
                                                        'CouponTotalCount' => [
                                                            'description' => '优惠券信息-优惠券总量。',
                                                            'type' => 'string',
                                                            'example' => '100000',
                                                        ],
                                                        'CouponRemainCount' => [
                                                            'description' => '优惠券信息-优惠券剩余量。',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '0',
                                                        ],
                                                        'CouponStartTime' => [
                                                            'description' => '优惠券信息-优惠券开始时间。',
                                                            'type' => 'string',
                                                            'example' => '2021-05-01',
                                                        ],
                                                        'CouponEndTime' => [
                                                            'description' => '优惠券信息-优惠券结束时间。',
                                                            'type' => 'string',
                                                            'example' => '2021-06-01',
                                                        ],
                                                        'CouponStartFee' => [
                                                            'description' => '优惠券信息-优惠券启用门槛，满X元可用。'."\n"
                                                                .'如：满299元减20元。',
                                                            'type' => 'string',
                                                            'example' => '98.000000',
                                                        ],
                                                        'CouponAmount' => [
                                                            'description' => '优惠券（元）若属于预售商品，该优惠券付尾款可用，付定金不可用。',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '5',
                                                        ],
                                                        'CouponInfo' => [
                                                            'description' => '优惠券信息-优惠券满减信息。',
                                                            'type' => 'string',
                                                            'example' => '满98.0元减5.0元',
                                                        ],
                                                        'CommissionRate' => [
                                                            'description' => '商品信息-佣金比率。'."\n"
                                                                .'如：1550表示15.5%。',
                                                            'type' => 'string',
                                                            'example' => '180',
                                                        ],
                                                        'CouponShareUrl' => [
                                                            'description' => '链接-宝贝+券二合一页面链接。',
                                                            'type' => 'string',
                                                            'example' => '//uland.taobao.com/xxxxxxx',
                                                        ],
                                                        'DeeplinkCouponShareUrl' => [
                                                            'description' => '优惠券-手淘唤醒链接。',
                                                            'type' => 'string',
                                                            'example' => 'tbopen://m.taobao.com/tbopen/index.html?',
                                                        ],
                                                        'Url' => [
                                                            'description' => '链接-宝贝推广链接。',
                                                            'type' => 'string',
                                                            'example' => '//s.click.taobao.com/t?xxxxxx',
                                                        ],
                                                        'DeeplinkUrl' => [
                                                            'description' => '链接-宝贝推广的深度唤醒链接。',
                                                            'type' => 'string',
                                                            'example' => 'tbopen://m.taobao.com/tbopen/index.html?',
                                                        ],
                                                        'ShopTitle' => [
                                                            'description' => '店铺信息-店铺名称。',
                                                            'type' => 'string',
                                                            'example' => 'xx旗舰店',
                                                        ],
                                                        'MaxCommission' => [
                                                            'description' => '商品信息-高佣信息。',
                                                            'type' => 'object',
                                                            'properties' => [
                                                                'MaxCommissionRate' => [
                                                                    'description' => '商品信息-最优佣金率。'."\n"
                                                                        .'如：20.4表示佣金率为20.4%。',
                                                                    'type' => 'string',
                                                                    'example' => '20.4',
                                                                ],
                                                                'MaxCommissionClickUrl' => [
                                                                    'description' => '商品信息-链接-最优佣金率宝贝推广链接。',
                                                                    'type' => 'string',
                                                                    'example' => 'https://s.click.taobao.com/t?e=xxxx',
                                                                ],
                                                                'MaxCommissionCouponShareUrl' => [
                                                                    'description' => '商品信息-链接-最优佣金率宝贝+券二合一页面链接。',
                                                                    'type' => 'string',
                                                                    'example' => 'https://uland.taobao.com/coupon/xxxx',
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'RankScore' => [
                                                    'description' => '商品相似性的排名分数。取值范围：0~1。',
                                                    'type' => 'number',
                                                    'format' => 'float',
                                                    'example' => '0.337',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'B3137727-7D6E-488C-BA21-0E034C38A879',
                            ],
                            'PicInfo' => [
                                'description' => '类目预测、主体识别结果等信息。',
                                'type' => 'object',
                                'properties' => [
                                    'MainRegion' => [
                                        'description' => '主体多类目信息。',
                                        'type' => 'object',
                                        'properties' => [
                                            'Region' => [
                                                'description' => '主体识别结果。图片的主体区域，格式为x1,x2,y1,y2，其中 x1,y1 是左上角的点，x2，y2是右下角的点。若用户请求中指定了主体区域，则以请求中为准。',
                                                'type' => 'string',
                                                'example' => '280,486,232,351',
                                            ],
                                            'MultiCategoryId' => [
                                                'description' => '主体预测区域的类目预测结果集合。',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => '主体预测区域的类目预测结果。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'CategoryId' => [
                                                            'description' => '图片类目。具体请参考[类目参考](~~179184~~)。',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '88888888',
                                                        ],
                                                        'Score' => [
                                                            'description' => '预测的类目得分。取值范围：0~1。',
                                                            'type' => 'number',
                                                            'format' => 'float',
                                                            'example' => '0.34',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                    'MultiRegion' => [
                                        'description' => '主体识别结果集合。',
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
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidPicContent',
                        'errorMessage' => 'The specified parameter PicContent length greater than 4 * 1024 * 1024.',
                    ],
                    [
                        'errorCode' => 'InvalidPid',
                        'errorMessage' => 'The parameter Pid no specified',
                    ],
                    [
                        'errorCode' => 'BadRequest',
                        'errorMessage' => 'The request has invalid parameters.',
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
                        'errorCode' => 'NoSpecifiedPicContent',
                        'errorMessage' => 'The parameter PicContent no specified.',
                    ],
                    [
                        'errorCode' => 'InvalidCustomContent',
                        'errorMessage' => 'The specified parameter CustomContent is not valid.',
                    ],
                    [
                        'errorCode' => 'NotRegisterBeforeInvoke',
                        'errorMessage' => 'Need register token: pid before invoke.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'DeniedRequest',
                        'errorMessage' => 'Your request was denied due to instance flow control.',
                    ],
                    [
                        'errorCode' => 'NoPermission',
                        'errorMessage' => 'You are not authorized to perform this operation.',
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
                        'errorCode' => 'InternalException',
                        'errorMessage' => 'An internal server error occurred.',
                    ],
                    [
                        'errorCode' => 'RequestTimeout',
                        'errorMessage' => '​The request is timeout.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"sucess\\",\\n  \\"Data\\": {\\n    \\"Auctions\\": [\\n      {\\n        \\"Result\\": {\\n          \\"ItemId\\": \\"123\\",\\n          \\"Title\\": \\"xxx套装\\",\\n          \\"ShortTitle\\": \\"yyy套装\\",\\n          \\"SubTitle\\": \\"xxx套装\\",\\n          \\"PicUrl\\": \\"//img.alicdn.com/i1/FXXXXXXXXXX.jpg\\",\\n          \\"ReservePrice\\": \\"158\\",\\n          \\"ZkFinalPrice\\": \\"98\\",\\n          \\"PriceAfterCoupon\\": \\"90\\",\\n          \\"UserType\\": 0,\\n          \\"Provcity\\": \\"广东 深圳\\",\\n          \\"Nick\\": \\"衣服专卖店\\",\\n          \\"SellerId\\": \\"32590610\\",\\n          \\"Volume\\": 500,\\n          \\"LevelOneCategoryName\\": \\"童装/婴儿装/亲子装\\",\\n          \\"CategoryName\\": \\"连衣裙\\",\\n          \\"CouponTotalCount\\": \\"100000\\",\\n          \\"CouponRemainCount\\": 0,\\n          \\"CouponStartTime\\": \\"2021-05-01\\",\\n          \\"CouponEndTime\\": \\"2021-06-01\\",\\n          \\"CouponStartFee\\": \\"98.000000\\",\\n          \\"CouponAmount\\": 5,\\n          \\"CouponInfo\\": \\"满98.0元减5.0元\\",\\n          \\"CommissionRate\\": \\"180\\",\\n          \\"CouponShareUrl\\": \\"//uland.taobao.com/xxxxxxx\\",\\n          \\"DeeplinkCouponShareUrl\\": \\"tbopen://m.taobao.com/tbopen/index.html?\\",\\n          \\"Url\\": \\"//s.click.taobao.com/t?xxxxxx\\",\\n          \\"DeeplinkUrl\\": \\"tbopen://m.taobao.com/tbopen/index.html?\\",\\n          \\"ShopTitle\\": \\"xx旗舰店\\",\\n          \\"MaxCommission\\": {\\n            \\"MaxCommissionRate\\": \\"20.4\\",\\n            \\"MaxCommissionClickUrl\\": \\"https://s.click.taobao.com/t?e=xxxx\\",\\n            \\"MaxCommissionCouponShareUrl\\": \\"https://uland.taobao.com/coupon/xxxx\\"\\n          }\\n        },\\n        \\"RankScore\\": 0.337\\n      }\\n    ]\\n  },\\n  \\"RequestId\\": \\"B3137727-7D6E-488C-BA21-0E034C38A879\\",\\n  \\"PicInfo\\": {\\n    \\"MainRegion\\": {\\n      \\"Region\\": \\"280,486,232,351\\",\\n      \\"MultiCategoryId\\": [\\n        {\\n          \\"CategoryId\\": 88888888,\\n          \\"Score\\": 0.34\\n        }\\n      ]\\n    },\\n    \\"MultiRegion\\": [\\n      {\\n        \\"Region\\": \\"280,486,232,351\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
            'title' => '根据图片查询',
            'description' => '## 使用说明'."\n"
                .'本接口用于向淘宝联盟版在线调用。'."\n"
                ."\n"
                .'## QPS限制'."\n"
                .'查询操作默认5QPS。',
            'extraInfo' => '## 错误码'."\n"
                .'请参见[错误码](~~66619~~)。',
        ],
        'GetProductInfoByIds' => [
            'summary' => '本文为您介绍GetProductInfoByIds接口的语法及示例，用于向淘宝联盟版在线调用。',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'ItemIds',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '商品ID串，用\',\'分割，最大40个。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '111,22,33',
                    ],
                ],
                [
                    'name' => 'Pid',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'PID。具体请参考[PID](https://mos.m.taobao.com/union/pub/site/help?spm=a219t.11817172.PortalLayout.d52e56935.27ac6a15wlAEHe)。'."\n"
                            .'> 使用V1.1.0及以上版本的SDK可用该字段。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'mm_xxx_xxx_xxx',
                    ],
                ],
                [
                    'name' => 'Fields',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '需要返回的字段list。不同的字段用逗号分割。默认PicUrl,ReservePrice,Title,Url,ZkFinalPrice字段必返回。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Url,UserType',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'Success' => [
                                'description' => '请求是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Code' => [
                                'description' => '错误码。'."\n"
                                    ."\n"
                                    .'- 0：成功，'."\n"
                                    .'- 非0：失败。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                            ],
                            'Message' => [
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'Data' => [
                                'description' => '识别结果集合。',
                                'type' => 'object',
                                'properties' => [
                                    'Auctions' => [
                                        'description' => '识别结果。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '查询结果内容。',
                                            'type' => 'object',
                                            'properties' => [
                                                'Result' => [
                                                    'description' => '查询结果。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'InputItemId' => [
                                                            'description' => '商品信息-商品ID。'."\n"
                                                                .'> SDK1.2.3使用，和搜索传入的ItemIds相同。',
                                                            'type' => 'string',
                                                            'example' => 'Oqz93kougf9bkN7f4ACMtJ-zDUWQmJB8PAf9',
                                                        ],
                                                        'ItemId' => [
                                                            'description' => '商品信息-商品ID。'."\n"
                                                                .'> SDK1.2.3使用，动态商品ID。',
                                                            'type' => 'string',
                                                            'example' => '594766914700',
                                                        ],
                                                        'Title' => [
                                                            'description' => '商品信息-商品标题。',
                                                            'type' => 'string',
                                                            'example' => 'xxx套装',
                                                        ],
                                                        'ShortTitle' => [
                                                            'description' => '商品信息-商品短标题（移动端建议使用）。',
                                                            'type' => 'string',
                                                            'example' => 'xxx套装',
                                                        ],
                                                        'SubTitle' => [
                                                            'description' => '商品信息-商品子标题。',
                                                            'type' => 'string',
                                                            'example' => 'xxx套装',
                                                        ],
                                                        'PicUrl' => [
                                                            'description' => '商品信息-商品主图。',
                                                            'type' => 'string',
                                                            'example' => '//img.alicdn.com/i1/FXXXXXXXXXX.jpg',
                                                        ],
                                                        'ReservePrice' => [
                                                            'description' => '商品信息-一口价通常显示为划线价。'."\n",
                                                            'type' => 'string',
                                                            'example' => '150',
                                                        ],
                                                        'ZkFinalPrice' => [
                                                            'description' => '商品信息-在线售价(元)。若属于预售商品，付定金时间内，在线售卖价=预售价格。',
                                                            'type' => 'string',
                                                            'example' => '98',
                                                        ],
                                                        'PriceAfterCoupon' => [
                                                            'description' => '商品信息-券后价。',
                                                            'type' => 'string',
                                                            'example' => '90',
                                                        ],
                                                        'UserType' => [
                                                            'description' => '店铺信息-卖家类型。'."\n"
                                                                ."\n"
                                                                .'- 1：天猫，'."\n"
                                                                .'- 0：淘宝。',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '0',
                                                        ],
                                                        'Provcity' => [
                                                            'description' => '商品信息-宝贝所在地。',
                                                            'type' => 'string',
                                                            'example' => '广东 深圳',
                                                        ],
                                                        'Nick' => [
                                                            'description' => '店铺信息-卖家昵称。'."\n",
                                                            'type' => 'string',
                                                            'example' => '衣服专卖店',
                                                        ],
                                                        'SellerId' => [
                                                            'description' => '店铺信息-卖家id。',
                                                            'type' => 'string',
                                                            'example' => '32590610',
                                                        ],
                                                        'CategoryName' => [
                                                            'description' => '商品信息-一级类目名称。',
                                                            'type' => 'string',
                                                            'example' => '连衣裙',
                                                        ],
                                                        'Volume' => [
                                                            'description' => '商品信息-30天销量。',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '500',
                                                        ],
                                                        'LevelOneCategoryName' => [
                                                            'description' => '商品信息-叶子类目名称。',
                                                            'type' => 'string',
                                                            'example' => '童装/婴儿装/亲子装',
                                                        ],
                                                        'CouponTotalCount' => [
                                                            'description' => '优惠券信息-优惠券总量。',
                                                            'type' => 'string',
                                                            'example' => '10000',
                                                        ],
                                                        'CouponRemainCount' => [
                                                            'description' => '优惠券信息-优惠券剩余量。',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '0',
                                                        ],
                                                        'CouponStartTime' => [
                                                            'description' => '优惠券信息-优惠券开始时间。',
                                                            'type' => 'string',
                                                            'example' => '2021-05-01',
                                                        ],
                                                        'CouponEndTime' => [
                                                            'description' => '优惠券信息-优惠券结束时间。',
                                                            'type' => 'string',
                                                            'example' => '2021-06-01',
                                                        ],
                                                        'CouponStartFee' => [
                                                            'description' => '优惠券信息-优惠券启用门槛，满X元可用。'."\n"
                                                                .'如：满299元减20元。',
                                                            'type' => 'string',
                                                            'example' => '98.000000',
                                                        ],
                                                        'CouponAmount' => [
                                                            'description' => '优惠券（元），若属于预售商品，该优惠券付尾款可用，付定金不可用。',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '8',
                                                        ],
                                                        'CouponInfo' => [
                                                            'description' => '优惠券信息-优惠券满减信息。',
                                                            'type' => 'string',
                                                            'example' => '满98.0元减5.0元',
                                                        ],
                                                        'CommissionRate' => [
                                                            'description' => '商品信息-佣金比率。'."\n"
                                                                .'如：1550表示15.5%。',
                                                            'type' => 'string',
                                                            'example' => '180',
                                                        ],
                                                        'CouponShareUrl' => [
                                                            'description' => '链接-宝贝+券二合一页面链接。',
                                                            'type' => 'string',
                                                            'example' => 'tbopen://m.taobao.com/tbopen/index.html?',
                                                        ],
                                                        'DeeplinkCouponShareUrl' => [
                                                            'description' => '优惠券-手淘唤醒链接。',
                                                            'type' => 'string',
                                                            'example' => 'tbopen://m.taobao.com/tbopen/index.html?',
                                                        ],
                                                        'Url' => [
                                                            'description' => '链接-宝贝推广链接。',
                                                            'type' => 'string',
                                                            'example' => 'tbopen://m.taobao.com/tbopen/index.html?',
                                                        ],
                                                        'DeeplinkUrl' => [
                                                            'description' => '链接-宝贝推广的深度唤醒链接。',
                                                            'type' => 'string',
                                                            'example' => 'tbopen://m.taobao.com/tbopen/index.html?',
                                                        ],
                                                        'ShopTitle' => [
                                                            'description' => '店铺信息-店铺名称。',
                                                            'type' => 'string',
                                                            'example' => 'xx旗舰店',
                                                        ],
                                                        'MaxCommission' => [
                                                            'description' => '商品信息-高佣信息。',
                                                            'type' => 'object',
                                                            'properties' => [
                                                                'MaxCommissionRate' => [
                                                                    'description' => '商品信息-最优佣金率。 如：20.4表示用几率为20.4%。',
                                                                    'type' => 'string',
                                                                    'example' => '20.4',
                                                                ],
                                                                'MaxCommissionClickUrl' => [
                                                                    'description' => '商品信息-链接-最优佣金率宝贝推广链接。',
                                                                    'type' => 'string',
                                                                    'example' => 'https://s.click.taobao.com/t?e=xxxx',
                                                                ],
                                                                'MaxCommissionCouponShareUrl' => [
                                                                    'description' => '商品信息-链接-最优佣金率宝贝+券二合一页面链接。',
                                                                    'type' => 'string',
                                                                    'example' => 'https://s.click.taobao.com/t?e=xxxx',
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'RankScore' => [
                                                    'description' => '商品相似性的排名分数。取值范围：0~1。',
                                                    'type' => 'number',
                                                    'format' => 'float',
                                                    'example' => '0.34',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'B3137727-7D6E-488C-BA21-0E034C38A879',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'PidNotExist',
                        'errorMessage' => 'The parameter specified Pid not exist',
                    ],
                    [
                        'errorCode' => 'InvalidPid',
                        'errorMessage' => 'The parameter Pid no specified',
                    ],
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
                        'errorCode' => 'InvalidItemIds',
                        'errorMessage' => 'ItemIds parameter overflow number max 40.',
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
                        'errorCode' => 'NoSpecifiedPicContent',
                        'errorMessage' => 'The parameter PicContent no specified.',
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
                        'errorMessage' => 'The specified parameter PicUrl is not valid.',
                    ],
                    [
                        'errorCode' => 'NotRegisterBeforeInvoke',
                        'errorMessage' => 'Need register token: pid before invoke.',
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
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"success\\",\\n  \\"Data\\": {\\n    \\"Auctions\\": [\\n      {\\n        \\"Result\\": {\\n          \\"InputItemId\\": \\"Oqz93kougf9bkN7f4ACMtJ-zDUWQmJB8PAf9\\",\\n          \\"ItemId\\": \\"594766914700\\",\\n          \\"Title\\": \\"xxx套装\\",\\n          \\"ShortTitle\\": \\"xxx套装\\",\\n          \\"SubTitle\\": \\"xxx套装\\",\\n          \\"PicUrl\\": \\"//img.alicdn.com/i1/FXXXXXXXXXX.jpg\\",\\n          \\"ReservePrice\\": \\"150\\",\\n          \\"ZkFinalPrice\\": \\"98\\",\\n          \\"PriceAfterCoupon\\": \\"90\\",\\n          \\"UserType\\": 0,\\n          \\"Provcity\\": \\"广东 深圳\\",\\n          \\"Nick\\": \\"衣服专卖店\\",\\n          \\"SellerId\\": \\"32590610\\",\\n          \\"CategoryName\\": \\"连衣裙\\",\\n          \\"Volume\\": 500,\\n          \\"LevelOneCategoryName\\": \\"童装/婴儿装/亲子装\\",\\n          \\"CouponTotalCount\\": \\"10000\\",\\n          \\"CouponRemainCount\\": 0,\\n          \\"CouponStartTime\\": \\"2021-05-01\\",\\n          \\"CouponEndTime\\": \\"2021-06-01\\",\\n          \\"CouponStartFee\\": \\"98.000000\\",\\n          \\"CouponAmount\\": 8,\\n          \\"CouponInfo\\": \\"满98.0元减5.0元\\",\\n          \\"CommissionRate\\": \\"180\\",\\n          \\"CouponShareUrl\\": \\"tbopen://m.taobao.com/tbopen/index.html?\\",\\n          \\"DeeplinkCouponShareUrl\\": \\"tbopen://m.taobao.com/tbopen/index.html?\\",\\n          \\"Url\\": \\"tbopen://m.taobao.com/tbopen/index.html?\\",\\n          \\"DeeplinkUrl\\": \\"tbopen://m.taobao.com/tbopen/index.html?\\",\\n          \\"ShopTitle\\": \\"xx旗舰店\\",\\n          \\"MaxCommission\\": {\\n            \\"MaxCommissionRate\\": \\"20.4\\",\\n            \\"MaxCommissionClickUrl\\": \\"https://s.click.taobao.com/t?e=xxxx\\",\\n            \\"MaxCommissionCouponShareUrl\\": \\"https://s.click.taobao.com/t?e=xxxx\\"\\n          }\\n        },\\n        \\"RankScore\\": 0.34\\n      }\\n    ]\\n  },\\n  \\"RequestId\\": \\"B3137727-7D6E-488C-BA21-0E034C38A879\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
            'title' => '根据ID查询商品',
            'description' => '## 使用说明'."\n"
                .'本接口用于向淘宝联盟版在线调用。'."\n"
                .'> 推荐使用SDK1.2.3及以上版本，返回动态商品ID。'."\n"
                ."\n"
                .'## QPS限制'."\n"
                .'查询操作默认5QPS。'."\n",
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
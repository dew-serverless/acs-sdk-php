<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'ImageSearch',
    'version' => '2021-05-01',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 0,
      'title' => '其它',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'SearchByUrl',
        1 => 'SearchByPic',
        2 => 'GetProductInfoByIds',
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
    'SearchByUrl' => 
    array (
      'summary' => '本文为您介绍SearchByUrl接口的语法及示例，用于向淘宝联盟版在线调用。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PicUrl',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '图片URL。必须是HTTP或HTTPS开头。',
            'type' => 'string',
            'required' => true,
            'example' => 'https://oss-test.oss-cn-shanghai.aliyuncs.com/xxxx.jpg',
          ),
        ),
        1 => 
        array (
          'name' => 'CategoryId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '图片类目。具体请参考[类目参考](~~179184~~)。
> 如果设置类目，则以设置的为准；如果不设置类目，则由系统进行类目预测，预测的类目结果可以在Response中获取 。',
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
        2 => 
        array (
          'name' => 'Pid',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'PID。具体请参考[PID](https://help.alimama.com/?spm=a219t.23786078.0.0.290575a55P1LBx#!/search/index?spm=&keyWord=PID&knowledgeId=5625118&categoryId=1000040170)。
> 使用V1.1.0及以上版本的SDK可用该字段。',
            'type' => 'string',
            'required' => false,
            'example' => 'mm_xxx_xxx_xxx',
          ),
        ),
        3 => 
        array (
          'name' => 'UserType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '卖家类型。

- 1：天猫；

- 0：淘宝。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'maximum' => '1',
            'minimum' => '0',
            'example' => '0',
            'enum' => 
            array (
              0 => '0',
              1 => '1',
            ),
          ),
        ),
        4 => 
        array (
          'name' => 'Crop',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否需要进行主体识别。默认true。
 - 为true时，由系统进行主体识别。建议使用此方式。
- 为false时，则不进行主体识别，以整张图进行搜索。


',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        5 => 
        array (
          'name' => 'Region',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '图片的主体区域，格式为`x1,x2,y1,y2`, 其中`x1,y1 `是左上角的点，`x2,y2`是右下角的点。
> 若用户设置了Region，则不论Crop参数为何值，都将以用户输入Region进行搜索。',
            'type' => 'string',
            'required' => false,
            'example' => '280,486,232,351',
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
          'name' => 'Num',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '返回结果的数目。取值范围：1~20。默认值为10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '20',
            'minimum' => '1',
            'example' => '10',
            'default' => '10',
          ),
        ),
        8 => 
        array (
          'name' => 'Fields',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需要返回的字段list。不同的字段用逗号分隔。默认PicUrl,ReservePrice,Title,Url,ZkFinalPrice字段必返回。可从下面值中选择填写ItemId,Title,PicUrl,ReservePrice,ZkFinalPrice,UserType,Provcity,Nick,SellerId,Volume,LevelOneCategoryName,CategoryName,CouponTotalCount,CouponRemainCount,CouponStartTime,CouponEndTime,CouponStartFee,CouponAmount,CouponInfo,CommissionRate,CouponShareUrl,Url,ShopTitle。',
            'type' => 'string',
            'required' => false,
            'example' => 'Url,UserType',
          ),
        ),
        9 => 
        array (
          'name' => 'RelationId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '渠道ID。用于淘宝联盟中的渠道区分。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1125526',
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
              'Success' => 
              array (
                'description' => '请求是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'description' => '    错误码。

- 0：成功，

- 非0：失败。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'Data' => 
              array (
                'description' => '识别结果集合。',
                'type' => 'object',
                'properties' => 
                array (
                  'Auctions' => 
                  array (
                    'description' => '识别结果。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '查询结果内容。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Result' => 
                        array (
                          'description' => '查询结果。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'ItemId' => 
                            array (
                              'description' => '商品信息-商品ID。',
                              'type' => 'string',
                              'example' => '123',
                            ),
                            'Title' => 
                            array (
                              'description' => '商品信息-商品标题。',
                              'type' => 'string',
                              'example' => 'xxx套装',
                            ),
                            'ShortTitle' => 
                            array (
                              'description' => '商品信息-商品短标题（移动端建议使用）。',
                              'type' => 'string',
                              'example' => 'yyy套装',
                            ),
                            'SubTitle' => 
                            array (
                              'description' => '商品信息-商品子标题。',
                              'type' => 'string',
                              'example' => 'xxx套装',
                            ),
                            'PicUrl' => 
                            array (
                              'description' => '商品信息-商品主图。',
                              'type' => 'string',
                              'example' => '//img.alicdn.com/i1/FXXXXXXXXXX.jpg',
                            ),
                            'ReservePrice' => 
                            array (
                              'description' => '商品信息-一口价通常显示为划线价。
',
                              'type' => 'string',
                              'example' => '158',
                            ),
                            'ZkFinalPrice' => 
                            array (
                              'description' => '商品信息-在线售价(元)。若属于预售商品，付定金时间内，在线售卖价=预售价格。',
                              'type' => 'string',
                              'example' => '98',
                            ),
                            'PriceAfterCoupon' => 
                            array (
                              'description' => '商品信息-券后价。',
                              'type' => 'string',
                              'example' => '90',
                            ),
                            'UserType' => 
                            array (
                              'description' => '店铺信息-卖家类型。

- 1：天猫，

- 0：淘宝。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '0',
                            ),
                            'Provcity' => 
                            array (
                              'description' => '商品信息-宝贝所在地。',
                              'type' => 'string',
                              'example' => '广东 深圳',
                            ),
                            'Nick' => 
                            array (
                              'description' => '店铺信息-卖家昵称。
',
                              'type' => 'string',
                              'example' => '衣服专卖店',
                            ),
                            'SellerId' => 
                            array (
                              'description' => '店铺信息-卖家ID。',
                              'type' => 'string',
                              'example' => '32590610',
                            ),
                            'Volume' => 
                            array (
                              'description' => '商品信息-30天销量。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '500',
                            ),
                            'LevelOneCategoryName' => 
                            array (
                              'description' => '商品信息-叶子类目名称。',
                              'type' => 'string',
                              'example' => '童装/婴儿装/亲子装',
                            ),
                            'CategoryName' => 
                            array (
                              'description' => '商品信息-一级类目名称。',
                              'type' => 'string',
                              'example' => '连衣裙',
                            ),
                            'CouponTotalCount' => 
                            array (
                              'description' => '优惠券信息-优惠券总量。',
                              'type' => 'string',
                              'example' => '100000',
                            ),
                            'CouponRemainCount' => 
                            array (
                              'description' => '优惠券信息-优惠券剩余量。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '0',
                            ),
                            'CouponStartTime' => 
                            array (
                              'description' => '优惠券信息-优惠券开始时间。',
                              'type' => 'string',
                              'example' => '2021-05-01',
                            ),
                            'CouponEndTime' => 
                            array (
                              'description' => '优惠券信息-优惠券结束时间。',
                              'type' => 'string',
                              'example' => '2021-06-01',
                            ),
                            'CouponStartFee' => 
                            array (
                              'description' => '优惠券信息-优惠券启用门槛，满X元可用。
如：满299元减20元。',
                              'type' => 'string',
                              'example' => '98.000000',
                            ),
                            'CouponAmount' => 
                            array (
                              'description' => '优惠券（元），若属于预售商品，该优惠券付尾款可用，付定金不可用。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '5',
                            ),
                            'CouponInfo' => 
                            array (
                              'description' => '优惠券信息-优惠券满减信息。',
                              'type' => 'string',
                              'example' => '满98.0元减5.0元',
                            ),
                            'CommissionRate' => 
                            array (
                              'description' => '商品信息-佣金比率。
如：1550表示15.5%。',
                              'type' => 'string',
                              'example' => '180',
                            ),
                            'CouponShareUrl' => 
                            array (
                              'description' => '链接-宝贝+券二合一页面链接。',
                              'type' => 'string',
                              'example' => '//uland.taobao.com/cxxxxxx',
                            ),
                            'DeeplinkCouponShareUrl' => 
                            array (
                              'description' => '优惠券-手淘唤醒链接。',
                              'type' => 'string',
                              'example' => 'tbopen://m.taobao.com/tbopen/index.html?',
                            ),
                            'Url' => 
                            array (
                              'description' => '链接-宝贝推广链接。',
                              'type' => 'string',
                              'example' => '//s.click.taobao.com/t?xxxxxx',
                            ),
                            'DeeplinkUrl' => 
                            array (
                              'description' => '链接-宝贝推广的深度唤醒链接。',
                              'type' => 'string',
                              'example' => 'tbopen://m.taobao.com/tbopen/index.html?',
                            ),
                            'ShopTitle' => 
                            array (
                              'description' => '店铺信息-店铺名称。',
                              'type' => 'string',
                              'example' => 'xx旗舰店',
                            ),
                            'MaxCommission' => 
                            array (
                              'description' => '商品信息-高佣信息。',
                              'type' => 'object',
                              'properties' => 
                              array (
                                'MaxCommissionRate' => 
                                array (
                                  'description' => '商品信息-最优佣金率。 如：20.4表示佣金率为20.4%。',
                                  'type' => 'string',
                                  'example' => '20.4',
                                ),
                                'MaxCommissionClickUrl' => 
                                array (
                                  'description' => '商品信息-链接-最优佣金率宝贝推广链接。',
                                  'type' => 'string',
                                  'example' => 'https://s.click.taobao.com/t?e=xxxx',
                                ),
                                'MaxCommissionCouponShareUrl' => 
                                array (
                                  'description' => '商品信息-链接-最优佣金率宝贝+券二合一页面链接。',
                                  'type' => 'string',
                                  'example' => 'https://s.click.taobao.com/t?e=xxxx',
                                ),
                              ),
                            ),
                          ),
                        ),
                        'RankScore' => 
                        array (
                          'description' => '商品相似性的排名分数。取值范围：0~1。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '0.337',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'B3137727-7D6E-488C-BA21-0E034C38A879',
              ),
              'PicInfo' => 
              array (
                'description' => '类目预测、主体识别结果等信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'MainRegion' => 
                  array (
                    'description' => '主体多类目信息。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Region' => 
                      array (
                        'description' => '主体识别结果。图片的主体区域，格式为x1,x2,y1,y2，其中 x1,y1 是左上角的点，x2，y2是右下角的点。若用户请求中指定了主体区域，则以请求中为准。',
                        'type' => 'string',
                        'example' => '280,486,232,351',
                      ),
                      'MultiCategoryId' => 
                      array (
                        'description' => '主体预测区域的类目预测结果结合。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '主体预测区域的类目预测结果。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'CategoryId' => 
                            array (
                              'description' => '图片类目。具体请参考[类目参考](~~179184~~)。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '88888888',
                            ),
                            'Score' => 
                            array (
                              'description' => '预测的类目得分。取值范围：0~1。',
                              'type' => 'number',
                              'format' => 'float',
                              'example' => '0.34',
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  'MultiRegion' => 
                  array (
                    'description' => '主体识别结果集合。',
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
            'errorCode' => 'PidNotExist',
            'errorMessage' => 'The parameter specified Pid not exist',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidPid',
            'errorMessage' => 'The parameter Pid no specified',
          ),
          2 => 
          array (
            'errorCode' => 'BadRequest',
            'errorMessage' => 'The request has invalid parameters.',
          ),
          3 => 
          array (
            'errorCode' => 'InstanceStatusError',
            'errorMessage' => 'Your instance is unavailable.',
          ),
          4 => 
          array (
            'errorCode' => 'TimeoutForTransferImage',
            'errorMessage' => 'Timeout after 5 seconds waiting for images transfer to complete.',
          ),
          5 => 
          array (
            'errorCode' => 'NoSpecifiedSearchPic',
            'errorMessage' => 'The search image is not specified.',
          ),
          6 => 
          array (
            'errorCode' => 'InvalidCategory',
            'errorMessage' => 'The specified category is invalid.',
          ),
          7 => 
          array (
            'errorCode' => 'OverflowMaxResultNum',
            'errorMessage' => 'The specified number of total results exceeds the maximum of 500.',
          ),
          8 => 
          array (
            'errorCode' => 'OverflowMaxReturnNum',
            'errorMessage' => 'The specified number of results for each request exceeds the maximum of 100.',
          ),
          9 => 
          array (
            'errorCode' => 'InvalidStartParameter',
            'errorMessage' => 'The specified parameter start is inavlid.',
          ),
          10 => 
          array (
            'errorCode' => 'InvalidNumParameter',
            'errorMessage' => 'The specified parameter num is invalid.',
          ),
          11 => 
          array (
            'errorCode' => 'InvalidIntAttr',
            'errorMessage' => 'The specified int_attr field is invalid.',
          ),
          12 => 
          array (
            'errorCode' => 'UnsupportedPicFormat',
            'errorMessage' => 'The specified image format is invalid.',
          ),
          13 => 
          array (
            'errorCode' => 'InvalidFilterClause',
            'errorMessage' => 'The specified filtering condition is invalid.',
          ),
          14 => 
          array (
            'errorCode' => 'IncorrectOrientation',
            'errorMessage' => 'The image contains incorrect rotation flags in the meta data.',
          ),
          15 => 
          array (
            'errorCode' => 'UnsupportedPicPixels',
            'errorMessage' => 'The specified pixels is not supported.',
          ),
          16 => 
          array (
            'errorCode' => 'SearchTimeout',
            'errorMessage' => 'The request is timed out.',
          ),
          17 => 
          array (
            'errorCode' => 'NoSpecifiedPicContent',
            'errorMessage' => 'The parameter PicContent no specified.',
          ),
          18 => 
          array (
            'errorCode' => 'InvalidCustomContent',
            'errorMessage' => 'The specified parameter CustomContent is not valid.',
          ),
          19 => 
          array (
            'errorCode' => 'InvalidPicContent',
            'errorMessage' => 'The specified parameter PicContent length greater than 4 * 1024 * 1024.',
          ),
          20 => 
          array (
            'errorCode' => 'InvalidPicUrl',
            'errorMessage' => 'The specified parameter PicUrl is not valid.',
          ),
          21 => 
          array (
            'errorCode' => 'NotRegisterBeforeInvoke',
            'errorMessage' => 'Need register token: pid before invoke.',
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
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"success\\",\\n  \\"Data\\": {\\n    \\"Auctions\\": [\\n      {\\n        \\"Result\\": {\\n          \\"ItemId\\": \\"123\\",\\n          \\"Title\\": \\"xxx套装\\",\\n          \\"ShortTitle\\": \\"yyy套装\\",\\n          \\"SubTitle\\": \\"xxx套装\\",\\n          \\"PicUrl\\": \\"//img.alicdn.com/i1/FXXXXXXXXXX.jpg\\",\\n          \\"ReservePrice\\": \\"158\\",\\n          \\"ZkFinalPrice\\": \\"98\\",\\n          \\"PriceAfterCoupon\\": \\"90\\",\\n          \\"UserType\\": 0,\\n          \\"Provcity\\": \\"广东 深圳\\",\\n          \\"Nick\\": \\"衣服专卖店\\",\\n          \\"SellerId\\": \\"32590610\\",\\n          \\"Volume\\": 500,\\n          \\"LevelOneCategoryName\\": \\"童装/婴儿装/亲子装\\",\\n          \\"CategoryName\\": \\"连衣裙\\",\\n          \\"CouponTotalCount\\": \\"100000\\",\\n          \\"CouponRemainCount\\": 0,\\n          \\"CouponStartTime\\": \\"2021-05-01\\",\\n          \\"CouponEndTime\\": \\"2021-06-01\\",\\n          \\"CouponStartFee\\": \\"98.000000\\",\\n          \\"CouponAmount\\": 5,\\n          \\"CouponInfo\\": \\"满98.0元减5.0元\\",\\n          \\"CommissionRate\\": \\"180\\",\\n          \\"CouponShareUrl\\": \\"//uland.taobao.com/cxxxxxx\\",\\n          \\"DeeplinkCouponShareUrl\\": \\"tbopen://m.taobao.com/tbopen/index.html?\\",\\n          \\"Url\\": \\"//s.click.taobao.com/t?xxxxxx\\",\\n          \\"DeeplinkUrl\\": \\"tbopen://m.taobao.com/tbopen/index.html?\\",\\n          \\"ShopTitle\\": \\"xx旗舰店\\",\\n          \\"MaxCommission\\": {\\n            \\"MaxCommissionRate\\": \\"20.4\\",\\n            \\"MaxCommissionClickUrl\\": \\"https://s.click.taobao.com/t?e=xxxx\\",\\n            \\"MaxCommissionCouponShareUrl\\": \\"https://s.click.taobao.com/t?e=xxxx\\"\\n          }\\n        },\\n        \\"RankScore\\": 0.337\\n      }\\n    ]\\n  },\\n  \\"RequestId\\": \\"B3137727-7D6E-488C-BA21-0E034C38A879\\",\\n  \\"PicInfo\\": {\\n    \\"MainRegion\\": {\\n      \\"Region\\": \\"280,486,232,351\\",\\n      \\"MultiCategoryId\\": [\\n        {\\n          \\"CategoryId\\": 88888888,\\n          \\"Score\\": 0.34\\n        }\\n      ]\\n    },\\n    \\"MultiRegion\\": [\\n      {\\n        \\"Region\\": \\"280,486,232,351\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '根据图片URL查询',
      'description' => '## 使用说明
本接口用于向淘宝联盟版在线调用。

## QPS限制
查询操作默认5QPS。',
      'extraInfo' => '## 错误码
请参见[错误码](~~66619~~)。',
    ),
    'SearchByPic' => 
    array (
      'summary' => '本文为您介绍SearchByPic接口的语法及示例，用于向淘宝联盟版在线调用。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PicContent',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '图片内容。
 - 图片大小要求不超过4 MB。
 - 图片格式：PNG、JPG、JPEG、BMP、GIF、WEBP、TIFF、PPM。
 - 传输等待时间不超过5秒。
 - 图片中不能包含旋转信息。
> - 如使用SDK，则无需填写PicContent字段，SDK已将本字段封装为PicContentObject字段无需处理。

',
            'type' => 'string',
            'required' => true,
            'example' => 'xxx',
            'isFileTransferUrl' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'CategoryId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '图片类目。具体请参考[类目参考](~~179184~~)。
> 如果设置类目，则以设置的为准；如果不设置类目，则由系统进行类目预测，预测的类目结果可以在Response中获取 。',
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
        2 => 
        array (
          'name' => 'Pid',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'PID。具体请参考[PID](https://help.alimama.com/?spm=a219t.23786078.0.0.290575a55P1LBx#!/search/index?spm=&keyWord=PID&knowledgeId=5625118&categoryId=1000040170)。
> 使用V1.1.0及以上版本的SDK可用该字段。',
            'type' => 'string',
            'required' => false,
            'example' => 'mm_xxx_xxx_xxx',
          ),
        ),
        3 => 
        array (
          'name' => 'UserType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '卖家类型。

- 1：天猫，

- 0：淘宝。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'maximum' => '1',
            'minimum' => '0',
            'example' => '0',
            'enum' => 
            array (
              0 => '0',
              1 => '1',
            ),
          ),
        ),
        4 => 
        array (
          'name' => 'Crop',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否需要进行主体识别。默认true。
 - 为true时，由系统进行主体识别。建议使用此方式。
- 为false时，则不进行主体识别，以整张图进行搜索。


',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        5 => 
        array (
          'name' => 'Region',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '图片的主体区域，格式为`x1,x2,y1,y2`, 其中`x1,y1 `是左上角的点，`x2,y2`是右下角的点。
> 若用户设置了Region，则不论Crop参数为何值，都将以用户输入Region进行搜索。',
            'type' => 'string',
            'required' => false,
            'example' => '280,486,232,351',
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
          'name' => 'Num',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '返回结果的数目。取值范围：1~20。默认值为10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '20',
            'minimum' => '1',
            'example' => '10',
            'default' => '10',
          ),
        ),
        8 => 
        array (
          'name' => 'Fields',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需要返回的字段list。不同的字段用逗号分割。默认PicUrl,ReservePrice,Title,Url,ZkFinalPrice字段必返回。',
            'type' => 'string',
            'required' => false,
            'example' => 'Url,UserType',
          ),
        ),
        9 => 
        array (
          'name' => 'RelationId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '渠道ID。用于淘宝联盟中的渠道区分。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1125526',
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
              'Success' => 
              array (
                'description' => '请求是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'description' => '    错误码。

- 0：成功，

- 非0：失败。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'sucess',
              ),
              'Data' => 
              array (
                'description' => '识别结果集合。',
                'type' => 'object',
                'properties' => 
                array (
                  'Auctions' => 
                  array (
                    'description' => '识别结果。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '查询结果内容。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Result' => 
                        array (
                          'description' => '查询结果。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'ItemId' => 
                            array (
                              'description' => '商品信息-商品ID。',
                              'type' => 'string',
                              'example' => '123',
                            ),
                            'Title' => 
                            array (
                              'description' => '商品信息-商品标题。',
                              'type' => 'string',
                              'example' => 'xxx套装',
                            ),
                            'ShortTitle' => 
                            array (
                              'description' => '商品信息-商品短标题（移动端建议使用）。',
                              'type' => 'string',
                              'example' => 'yyy套装',
                            ),
                            'SubTitle' => 
                            array (
                              'description' => '商品信息-商品子标题。',
                              'type' => 'string',
                              'example' => 'xxx套装',
                            ),
                            'PicUrl' => 
                            array (
                              'description' => '商品信息-商品主图。',
                              'type' => 'string',
                              'example' => '//img.alicdn.com/i1/FXXXXXXXXXX.jpg',
                            ),
                            'ReservePrice' => 
                            array (
                              'description' => '商品信息-一口价通常显示为划线价。',
                              'type' => 'string',
                              'example' => '158',
                            ),
                            'ZkFinalPrice' => 
                            array (
                              'description' => '商品信息-在线售价(元)。若属于预售商品，付定金时间内，在线售卖价=预售价格。',
                              'type' => 'string',
                              'example' => '98',
                            ),
                            'PriceAfterCoupon' => 
                            array (
                              'description' => '商品信息-券后价。',
                              'type' => 'string',
                              'example' => '90',
                            ),
                            'UserType' => 
                            array (
                              'description' => '店铺信息-卖家类型。

- 1：天猫，

- 0：淘宝。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '0',
                            ),
                            'Provcity' => 
                            array (
                              'description' => '商品信息-宝贝所在地。',
                              'type' => 'string',
                              'example' => '广东 深圳',
                            ),
                            'Nick' => 
                            array (
                              'description' => '店铺信息-卖家昵称。',
                              'type' => 'string',
                              'example' => '衣服专卖店',
                            ),
                            'SellerId' => 
                            array (
                              'description' => '店铺信息-卖家ID。',
                              'type' => 'string',
                              'example' => '32590610',
                            ),
                            'Volume' => 
                            array (
                              'description' => '商品信息-30天销量。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '500',
                            ),
                            'LevelOneCategoryName' => 
                            array (
                              'description' => '商品信息-叶子类目名称。',
                              'type' => 'string',
                              'example' => '童装/婴儿装/亲子装',
                            ),
                            'CategoryName' => 
                            array (
                              'description' => '商品信息-一级类目名称。',
                              'type' => 'string',
                              'example' => '连衣裙',
                            ),
                            'CouponTotalCount' => 
                            array (
                              'description' => '优惠券信息-优惠券总量。',
                              'type' => 'string',
                              'example' => '100000',
                            ),
                            'CouponRemainCount' => 
                            array (
                              'description' => '优惠券信息-优惠券剩余量。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '0',
                            ),
                            'CouponStartTime' => 
                            array (
                              'description' => '优惠券信息-优惠券开始时间。',
                              'type' => 'string',
                              'example' => '2021-05-01',
                            ),
                            'CouponEndTime' => 
                            array (
                              'description' => '优惠券信息-优惠券结束时间。',
                              'type' => 'string',
                              'example' => '2021-06-01',
                            ),
                            'CouponStartFee' => 
                            array (
                              'description' => '优惠券信息-优惠券启用门槛，满X元可用。
如：满299元减20元。',
                              'type' => 'string',
                              'example' => '98.000000',
                            ),
                            'CouponAmount' => 
                            array (
                              'description' => '优惠券（元）若属于预售商品，该优惠券付尾款可用，付定金不可用。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '5',
                            ),
                            'CouponInfo' => 
                            array (
                              'description' => '优惠券信息-优惠券满减信息。',
                              'type' => 'string',
                              'example' => '满98.0元减5.0元',
                            ),
                            'CommissionRate' => 
                            array (
                              'description' => '商品信息-佣金比率。
如：1550表示15.5%。',
                              'type' => 'string',
                              'example' => '180',
                            ),
                            'CouponShareUrl' => 
                            array (
                              'description' => '链接-宝贝+券二合一页面链接。',
                              'type' => 'string',
                              'example' => '//uland.taobao.com/xxxxxxx',
                            ),
                            'DeeplinkCouponShareUrl' => 
                            array (
                              'description' => '优惠券-手淘唤醒链接。',
                              'type' => 'string',
                              'example' => 'tbopen://m.taobao.com/tbopen/index.html?',
                            ),
                            'Url' => 
                            array (
                              'description' => '链接-宝贝推广链接。',
                              'type' => 'string',
                              'example' => '//s.click.taobao.com/t?xxxxxx',
                            ),
                            'DeeplinkUrl' => 
                            array (
                              'description' => '链接-宝贝推广的深度唤醒链接。',
                              'type' => 'string',
                              'example' => 'tbopen://m.taobao.com/tbopen/index.html?',
                            ),
                            'ShopTitle' => 
                            array (
                              'description' => '店铺信息-店铺名称。',
                              'type' => 'string',
                              'example' => 'xx旗舰店',
                            ),
                            'MaxCommission' => 
                            array (
                              'description' => '商品信息-高佣信息。',
                              'type' => 'object',
                              'properties' => 
                              array (
                                'MaxCommissionRate' => 
                                array (
                                  'description' => '商品信息-最优佣金率。
如：20.4表示佣金率为20.4%。',
                                  'type' => 'string',
                                  'example' => '20.4',
                                ),
                                'MaxCommissionClickUrl' => 
                                array (
                                  'description' => '商品信息-链接-最优佣金率宝贝推广链接。',
                                  'type' => 'string',
                                  'example' => 'https://s.click.taobao.com/t?e=xxxx',
                                ),
                                'MaxCommissionCouponShareUrl' => 
                                array (
                                  'description' => '商品信息-链接-最优佣金率宝贝+券二合一页面链接。',
                                  'type' => 'string',
                                  'example' => 'https://uland.taobao.com/coupon/xxxx',
                                ),
                              ),
                            ),
                          ),
                        ),
                        'RankScore' => 
                        array (
                          'description' => '商品相似性的排名分数。取值范围：0~1。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '0.337',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'B3137727-7D6E-488C-BA21-0E034C38A879',
              ),
              'PicInfo' => 
              array (
                'description' => '类目预测、主体识别结果等信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'MainRegion' => 
                  array (
                    'description' => '主体多类目信息。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Region' => 
                      array (
                        'description' => '主体识别结果。图片的主体区域，格式为x1,x2,y1,y2，其中 x1,y1 是左上角的点，x2，y2是右下角的点。若用户请求中指定了主体区域，则以请求中为准。',
                        'type' => 'string',
                        'example' => '280,486,232,351',
                      ),
                      'MultiCategoryId' => 
                      array (
                        'description' => '主体预测区域的类目预测结果集合。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '主体预测区域的类目预测结果。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'CategoryId' => 
                            array (
                              'description' => '图片类目。具体请参考[类目参考](~~179184~~)。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '88888888',
                            ),
                            'Score' => 
                            array (
                              'description' => '预测的类目得分。取值范围：0~1。',
                              'type' => 'number',
                              'format' => 'float',
                              'example' => '0.34',
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  'MultiRegion' => 
                  array (
                    'description' => '主体识别结果集合。',
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
            'errorCode' => 'InvalidPicContent',
            'errorMessage' => 'The specified parameter PicContent length greater than 4 * 1024 * 1024.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidPid',
            'errorMessage' => 'The parameter Pid no specified',
          ),
          2 => 
          array (
            'errorCode' => 'BadRequest',
            'errorMessage' => 'The request has invalid parameters.',
          ),
          3 => 
          array (
            'errorCode' => 'NoSpecifiedSearchPic',
            'errorMessage' => 'The search image is not specified.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidCategory',
            'errorMessage' => 'The specified category is invalid.',
          ),
          5 => 
          array (
            'errorCode' => 'OverflowMaxResultNum',
            'errorMessage' => 'The specified number of total results exceeds the maximum of 500.',
          ),
          6 => 
          array (
            'errorCode' => 'OverflowMaxReturnNum',
            'errorMessage' => 'The specified number of results for each request exceeds the maximum of 100.',
          ),
          7 => 
          array (
            'errorCode' => 'InvalidStartParameter',
            'errorMessage' => 'The specified parameter start is inavlid.',
          ),
          8 => 
          array (
            'errorCode' => 'InvalidNumParameter',
            'errorMessage' => 'The specified parameter num is invalid.',
          ),
          9 => 
          array (
            'errorCode' => 'InvalidIntAttr',
            'errorMessage' => 'The specified int_attr field is invalid.',
          ),
          10 => 
          array (
            'errorCode' => 'UnsupportedPicFormat',
            'errorMessage' => 'The specified image format is invalid.',
          ),
          11 => 
          array (
            'errorCode' => 'InvalidFilterClause',
            'errorMessage' => 'The specified filtering condition is invalid.',
          ),
          12 => 
          array (
            'errorCode' => 'IncorrectOrientation',
            'errorMessage' => 'The image contains incorrect rotation flags in the meta data.',
          ),
          13 => 
          array (
            'errorCode' => 'UnsupportedPicPixels',
            'errorMessage' => 'The specified pixels is not supported.',
          ),
          14 => 
          array (
            'errorCode' => 'SearchTimeout',
            'errorMessage' => 'The request is timed out.',
          ),
          15 => 
          array (
            'errorCode' => 'NoSpecifiedPicContent',
            'errorMessage' => 'The parameter PicContent no specified.',
          ),
          16 => 
          array (
            'errorCode' => 'InvalidCustomContent',
            'errorMessage' => 'The specified parameter CustomContent is not valid.',
          ),
          17 => 
          array (
            'errorCode' => 'NotRegisterBeforeInvoke',
            'errorMessage' => 'Need register token: pid before invoke.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'DeniedRequest',
            'errorMessage' => 'Your request was denied due to instance flow control.',
          ),
          1 => 
          array (
            'errorCode' => 'NoPermission',
            'errorMessage' => 'You are not authorized to perform this operation.',
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
            'errorCode' => 'InternalException',
            'errorMessage' => 'An internal server error occurred.',
          ),
          3 => 
          array (
            'errorCode' => 'RequestTimeout',
            'errorMessage' => '​The request is timeout.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"sucess\\",\\n  \\"Data\\": {\\n    \\"Auctions\\": [\\n      {\\n        \\"Result\\": {\\n          \\"ItemId\\": \\"123\\",\\n          \\"Title\\": \\"xxx套装\\",\\n          \\"ShortTitle\\": \\"yyy套装\\",\\n          \\"SubTitle\\": \\"xxx套装\\",\\n          \\"PicUrl\\": \\"//img.alicdn.com/i1/FXXXXXXXXXX.jpg\\",\\n          \\"ReservePrice\\": \\"158\\",\\n          \\"ZkFinalPrice\\": \\"98\\",\\n          \\"PriceAfterCoupon\\": \\"90\\",\\n          \\"UserType\\": 0,\\n          \\"Provcity\\": \\"广东 深圳\\",\\n          \\"Nick\\": \\"衣服专卖店\\",\\n          \\"SellerId\\": \\"32590610\\",\\n          \\"Volume\\": 500,\\n          \\"LevelOneCategoryName\\": \\"童装/婴儿装/亲子装\\",\\n          \\"CategoryName\\": \\"连衣裙\\",\\n          \\"CouponTotalCount\\": \\"100000\\",\\n          \\"CouponRemainCount\\": 0,\\n          \\"CouponStartTime\\": \\"2021-05-01\\",\\n          \\"CouponEndTime\\": \\"2021-06-01\\",\\n          \\"CouponStartFee\\": \\"98.000000\\",\\n          \\"CouponAmount\\": 5,\\n          \\"CouponInfo\\": \\"满98.0元减5.0元\\",\\n          \\"CommissionRate\\": \\"180\\",\\n          \\"CouponShareUrl\\": \\"//uland.taobao.com/xxxxxxx\\",\\n          \\"DeeplinkCouponShareUrl\\": \\"tbopen://m.taobao.com/tbopen/index.html?\\",\\n          \\"Url\\": \\"//s.click.taobao.com/t?xxxxxx\\",\\n          \\"DeeplinkUrl\\": \\"tbopen://m.taobao.com/tbopen/index.html?\\",\\n          \\"ShopTitle\\": \\"xx旗舰店\\",\\n          \\"MaxCommission\\": {\\n            \\"MaxCommissionRate\\": \\"20.4\\",\\n            \\"MaxCommissionClickUrl\\": \\"https://s.click.taobao.com/t?e=xxxx\\",\\n            \\"MaxCommissionCouponShareUrl\\": \\"https://uland.taobao.com/coupon/xxxx\\"\\n          }\\n        },\\n        \\"RankScore\\": 0.337\\n      }\\n    ]\\n  },\\n  \\"RequestId\\": \\"B3137727-7D6E-488C-BA21-0E034C38A879\\",\\n  \\"PicInfo\\": {\\n    \\"MainRegion\\": {\\n      \\"Region\\": \\"280,486,232,351\\",\\n      \\"MultiCategoryId\\": [\\n        {\\n          \\"CategoryId\\": 88888888,\\n          \\"Score\\": 0.34\\n        }\\n      ]\\n    },\\n    \\"MultiRegion\\": [\\n      {\\n        \\"Region\\": \\"280,486,232,351\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '根据图片查询',
      'description' => '## 使用说明
本接口用于向淘宝联盟版在线调用。

## QPS限制
查询操作默认5QPS。',
      'extraInfo' => '## 错误码
请参见[错误码](~~66619~~)。',
    ),
    'GetProductInfoByIds' => 
    array (
      'summary' => '本文为您介绍GetProductInfoByIds接口的语法及示例，用于向淘宝联盟版在线调用。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ItemIds',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '商品ID串，用\',\'分割，最大40个。',
            'type' => 'string',
            'required' => true,
            'example' => '111,22,33',
          ),
        ),
        1 => 
        array (
          'name' => 'Pid',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'PID。具体请参考[PID](https://mos.m.taobao.com/union/pub/site/help?spm=a219t.11817172.PortalLayout.d52e56935.27ac6a15wlAEHe)。
> 使用V1.1.0及以上版本的SDK可用该字段。',
            'type' => 'string',
            'required' => false,
            'example' => 'mm_xxx_xxx_xxx',
          ),
        ),
        2 => 
        array (
          'name' => 'Fields',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需要返回的字段list。不同的字段用逗号分割。默认PicUrl,ReservePrice,Title,Url,ZkFinalPrice字段必返回。',
            'type' => 'string',
            'required' => false,
            'example' => 'Url,UserType',
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
              'Success' => 
              array (
                'description' => '请求是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'description' => '错误码。

- 0：成功，
- 非0：失败。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Message' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'Data' => 
              array (
                'description' => '识别结果集合。',
                'type' => 'object',
                'properties' => 
                array (
                  'Auctions' => 
                  array (
                    'description' => '识别结果。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '查询结果内容。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Result' => 
                        array (
                          'description' => '查询结果。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'InputItemId' => 
                            array (
                              'description' => '商品信息-商品ID。
> SDK1.2.3使用，和搜索传入的ItemIds相同。',
                              'type' => 'string',
                              'example' => 'Oqz93kougf9bkN7f4ACMtJ-zDUWQmJB8PAf9',
                            ),
                            'ItemId' => 
                            array (
                              'description' => '商品信息-商品ID。
> SDK1.2.3使用，动态商品ID。',
                              'type' => 'string',
                              'example' => '594766914700',
                            ),
                            'Title' => 
                            array (
                              'description' => '商品信息-商品标题。',
                              'type' => 'string',
                              'example' => 'xxx套装',
                            ),
                            'ShortTitle' => 
                            array (
                              'description' => '商品信息-商品短标题（移动端建议使用）。',
                              'type' => 'string',
                              'example' => 'xxx套装',
                            ),
                            'SubTitle' => 
                            array (
                              'description' => '商品信息-商品子标题。',
                              'type' => 'string',
                              'example' => 'xxx套装',
                            ),
                            'PicUrl' => 
                            array (
                              'description' => '商品信息-商品主图。',
                              'type' => 'string',
                              'example' => '//img.alicdn.com/i1/FXXXXXXXXXX.jpg',
                            ),
                            'ReservePrice' => 
                            array (
                              'description' => '商品信息-一口价通常显示为划线价。
',
                              'type' => 'string',
                              'example' => '150',
                            ),
                            'ZkFinalPrice' => 
                            array (
                              'description' => '商品信息-在线售价(元)。若属于预售商品，付定金时间内，在线售卖价=预售价格。',
                              'type' => 'string',
                              'example' => '98',
                            ),
                            'PriceAfterCoupon' => 
                            array (
                              'description' => '商品信息-券后价。',
                              'type' => 'string',
                              'example' => '90',
                            ),
                            'UserType' => 
                            array (
                              'description' => '店铺信息-卖家类型。

- 1：天猫，
- 0：淘宝。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '0',
                            ),
                            'Provcity' => 
                            array (
                              'description' => '商品信息-宝贝所在地。',
                              'type' => 'string',
                              'example' => '广东 深圳',
                            ),
                            'Nick' => 
                            array (
                              'description' => '店铺信息-卖家昵称。
',
                              'type' => 'string',
                              'example' => '衣服专卖店',
                            ),
                            'SellerId' => 
                            array (
                              'description' => '店铺信息-卖家id。',
                              'type' => 'string',
                              'example' => '32590610',
                            ),
                            'CategoryName' => 
                            array (
                              'description' => '商品信息-一级类目名称。',
                              'type' => 'string',
                              'example' => '连衣裙',
                            ),
                            'Volume' => 
                            array (
                              'description' => '商品信息-30天销量。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '500',
                            ),
                            'LevelOneCategoryName' => 
                            array (
                              'description' => '商品信息-叶子类目名称。',
                              'type' => 'string',
                              'example' => '童装/婴儿装/亲子装',
                            ),
                            'CouponTotalCount' => 
                            array (
                              'description' => '优惠券信息-优惠券总量。',
                              'type' => 'string',
                              'example' => '10000',
                            ),
                            'CouponRemainCount' => 
                            array (
                              'description' => '优惠券信息-优惠券剩余量。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '0',
                            ),
                            'CouponStartTime' => 
                            array (
                              'description' => '优惠券信息-优惠券开始时间。',
                              'type' => 'string',
                              'example' => '2021-05-01',
                            ),
                            'CouponEndTime' => 
                            array (
                              'description' => '优惠券信息-优惠券结束时间。',
                              'type' => 'string',
                              'example' => '2021-06-01',
                            ),
                            'CouponStartFee' => 
                            array (
                              'description' => '优惠券信息-优惠券启用门槛，满X元可用。
如：满299元减20元。',
                              'type' => 'string',
                              'example' => '98.000000',
                            ),
                            'CouponAmount' => 
                            array (
                              'description' => '优惠券（元），若属于预售商品，该优惠券付尾款可用，付定金不可用。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '8',
                            ),
                            'CouponInfo' => 
                            array (
                              'description' => '优惠券信息-优惠券满减信息。',
                              'type' => 'string',
                              'example' => '满98.0元减5.0元',
                            ),
                            'CommissionRate' => 
                            array (
                              'description' => '商品信息-佣金比率。
如：1550表示15.5%。',
                              'type' => 'string',
                              'example' => '180',
                            ),
                            'CouponShareUrl' => 
                            array (
                              'description' => '链接-宝贝+券二合一页面链接。',
                              'type' => 'string',
                              'example' => 'tbopen://m.taobao.com/tbopen/index.html?',
                            ),
                            'DeeplinkCouponShareUrl' => 
                            array (
                              'description' => '优惠券-手淘唤醒链接。',
                              'type' => 'string',
                              'example' => 'tbopen://m.taobao.com/tbopen/index.html?',
                            ),
                            'Url' => 
                            array (
                              'description' => '链接-宝贝推广链接。',
                              'type' => 'string',
                              'example' => 'tbopen://m.taobao.com/tbopen/index.html?',
                            ),
                            'DeeplinkUrl' => 
                            array (
                              'description' => '链接-宝贝推广的深度唤醒链接。',
                              'type' => 'string',
                              'example' => 'tbopen://m.taobao.com/tbopen/index.html?',
                            ),
                            'ShopTitle' => 
                            array (
                              'description' => '店铺信息-店铺名称。',
                              'type' => 'string',
                              'example' => 'xx旗舰店',
                            ),
                            'MaxCommission' => 
                            array (
                              'description' => '商品信息-高佣信息。',
                              'type' => 'object',
                              'properties' => 
                              array (
                                'MaxCommissionRate' => 
                                array (
                                  'description' => '商品信息-最优佣金率。 如：20.4表示用几率为20.4%。',
                                  'type' => 'string',
                                  'example' => '20.4',
                                ),
                                'MaxCommissionClickUrl' => 
                                array (
                                  'description' => '商品信息-链接-最优佣金率宝贝推广链接。',
                                  'type' => 'string',
                                  'example' => 'https://s.click.taobao.com/t?e=xxxx',
                                ),
                                'MaxCommissionCouponShareUrl' => 
                                array (
                                  'description' => '商品信息-链接-最优佣金率宝贝+券二合一页面链接。',
                                  'type' => 'string',
                                  'example' => 'https://s.click.taobao.com/t?e=xxxx',
                                ),
                              ),
                            ),
                          ),
                        ),
                        'RankScore' => 
                        array (
                          'description' => '商品相似性的排名分数。取值范围：0~1。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '0.34',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'B3137727-7D6E-488C-BA21-0E034C38A879',
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
            'errorCode' => 'PidNotExist',
            'errorMessage' => 'The parameter specified Pid not exist',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidPid',
            'errorMessage' => 'The parameter Pid no specified',
          ),
          2 => 
          array (
            'errorCode' => 'BadRequest',
            'errorMessage' => 'The request has invalid parameters.',
          ),
          3 => 
          array (
            'errorCode' => 'InstanceStatusError',
            'errorMessage' => 'Your instance is unavailable.',
          ),
          4 => 
          array (
            'errorCode' => 'TimeoutForTransferImage',
            'errorMessage' => 'Timeout after 5 seconds waiting for images transfer to complete.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidInstance',
            'errorMessage' => 'The specified instance name is invalid.',
          ),
          6 => 
          array (
            'errorCode' => 'InvalidItemIds',
            'errorMessage' => 'ItemIds parameter overflow number max 40.',
          ),
          7 => 
          array (
            'errorCode' => 'OverflowMaxResultNum',
            'errorMessage' => 'The specified number of total results exceeds the maximum of 500.',
          ),
          8 => 
          array (
            'errorCode' => 'OverflowMaxReturnNum',
            'errorMessage' => 'The specified number of results for each request exceeds the maximum of 100.',
          ),
          9 => 
          array (
            'errorCode' => 'InvalidStartParameter',
            'errorMessage' => 'The specified parameter start is inavlid.',
          ),
          10 => 
          array (
            'errorCode' => 'InvalidNumParameter',
            'errorMessage' => 'The specified parameter num is invalid.',
          ),
          11 => 
          array (
            'errorCode' => 'InvalidIntAttr',
            'errorMessage' => 'The specified int_attr field is invalid.',
          ),
          12 => 
          array (
            'errorCode' => 'UnsupportedPicFormat',
            'errorMessage' => 'The specified image format is invalid.',
          ),
          13 => 
          array (
            'errorCode' => 'InvalidFilterClause',
            'errorMessage' => 'The specified filtering condition is invalid.',
          ),
          14 => 
          array (
            'errorCode' => 'IncorrectOrientation',
            'errorMessage' => 'The image contains incorrect rotation flags in the meta data.',
          ),
          15 => 
          array (
            'errorCode' => 'UnsupportedPicPixels',
            'errorMessage' => 'The specified pixels is not supported.',
          ),
          16 => 
          array (
            'errorCode' => 'SearchTimeout',
            'errorMessage' => 'The request is timed out.',
          ),
          17 => 
          array (
            'errorCode' => 'NoSpecifiedPicContent',
            'errorMessage' => 'The parameter PicContent no specified.',
          ),
          18 => 
          array (
            'errorCode' => 'InvalidCustomContent',
            'errorMessage' => 'The specified parameter CustomContent is not valid.',
          ),
          19 => 
          array (
            'errorCode' => 'InvalidPicContent',
            'errorMessage' => 'The specified parameter PicContent length greater than 4 * 1024 * 1024.',
          ),
          20 => 
          array (
            'errorCode' => 'InvalidPicUrl',
            'errorMessage' => 'The specified parameter PicUrl is not valid.',
          ),
          21 => 
          array (
            'errorCode' => 'NotRegisterBeforeInvoke',
            'errorMessage' => 'Need register token: pid before invoke.',
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
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"success\\",\\n  \\"Data\\": {\\n    \\"Auctions\\": [\\n      {\\n        \\"Result\\": {\\n          \\"InputItemId\\": \\"Oqz93kougf9bkN7f4ACMtJ-zDUWQmJB8PAf9\\",\\n          \\"ItemId\\": \\"594766914700\\",\\n          \\"Title\\": \\"xxx套装\\",\\n          \\"ShortTitle\\": \\"xxx套装\\",\\n          \\"SubTitle\\": \\"xxx套装\\",\\n          \\"PicUrl\\": \\"//img.alicdn.com/i1/FXXXXXXXXXX.jpg\\",\\n          \\"ReservePrice\\": \\"150\\",\\n          \\"ZkFinalPrice\\": \\"98\\",\\n          \\"PriceAfterCoupon\\": \\"90\\",\\n          \\"UserType\\": 0,\\n          \\"Provcity\\": \\"广东 深圳\\",\\n          \\"Nick\\": \\"衣服专卖店\\",\\n          \\"SellerId\\": \\"32590610\\",\\n          \\"CategoryName\\": \\"连衣裙\\",\\n          \\"Volume\\": 500,\\n          \\"LevelOneCategoryName\\": \\"童装/婴儿装/亲子装\\",\\n          \\"CouponTotalCount\\": \\"10000\\",\\n          \\"CouponRemainCount\\": 0,\\n          \\"CouponStartTime\\": \\"2021-05-01\\",\\n          \\"CouponEndTime\\": \\"2021-06-01\\",\\n          \\"CouponStartFee\\": \\"98.000000\\",\\n          \\"CouponAmount\\": 8,\\n          \\"CouponInfo\\": \\"满98.0元减5.0元\\",\\n          \\"CommissionRate\\": \\"180\\",\\n          \\"CouponShareUrl\\": \\"tbopen://m.taobao.com/tbopen/index.html?\\",\\n          \\"DeeplinkCouponShareUrl\\": \\"tbopen://m.taobao.com/tbopen/index.html?\\",\\n          \\"Url\\": \\"tbopen://m.taobao.com/tbopen/index.html?\\",\\n          \\"DeeplinkUrl\\": \\"tbopen://m.taobao.com/tbopen/index.html?\\",\\n          \\"ShopTitle\\": \\"xx旗舰店\\",\\n          \\"MaxCommission\\": {\\n            \\"MaxCommissionRate\\": \\"20.4\\",\\n            \\"MaxCommissionClickUrl\\": \\"https://s.click.taobao.com/t?e=xxxx\\",\\n            \\"MaxCommissionCouponShareUrl\\": \\"https://s.click.taobao.com/t?e=xxxx\\"\\n          }\\n        },\\n        \\"RankScore\\": 0.34\\n      }\\n    ]\\n  },\\n  \\"RequestId\\": \\"B3137727-7D6E-488C-BA21-0E034C38A879\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '根据ID查询商品',
      'description' => '## 使用说明
本接口用于向淘宝联盟版在线调用。
> 推荐使用SDK1.2.3及以上版本，返回动态商品ID。

## QPS限制
查询操作默认5QPS。
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